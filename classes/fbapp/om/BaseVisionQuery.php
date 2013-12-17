<?php


/**
 * Base class that represents a query for the 'vision' table.
 *
 *
 *
 * @method VisionQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method VisionQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method VisionQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method VisionQuery orderByVisionrefno($order = Criteria::ASC) Order by the VisionRefNo column
 * @method VisionQuery orderByGenus($order = Criteria::ASC) Order by the Genus column
 * @method VisionQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method VisionQuery orderBySensit($order = Criteria::ASC) Order by the Sensit column
 * @method VisionQuery orderByConfint($order = Criteria::ASC) Order by the ConfInt column
 * @method VisionQuery orderByDatarefno($order = Criteria::ASC) Order by the DataRefNo column
 * @method VisionQuery orderByOtherpigment($order = Criteria::ASC) Order by the OtherPigment column
 * @method VisionQuery orderByScratch($order = Criteria::ASC) Order by the scratch column
 * @method VisionQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method VisionQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method VisionQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method VisionQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method VisionQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method VisionQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method VisionQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method VisionQuery groupByAutoctr() Group by the autoctr column
 * @method VisionQuery groupByStockcode() Group by the StockCode column
 * @method VisionQuery groupBySpeccode() Group by the SpecCode column
 * @method VisionQuery groupByVisionrefno() Group by the VisionRefNo column
 * @method VisionQuery groupByGenus() Group by the Genus column
 * @method VisionQuery groupBySpecies() Group by the Species column
 * @method VisionQuery groupBySensit() Group by the Sensit column
 * @method VisionQuery groupByConfint() Group by the ConfInt column
 * @method VisionQuery groupByDatarefno() Group by the DataRefNo column
 * @method VisionQuery groupByOtherpigment() Group by the OtherPigment column
 * @method VisionQuery groupByScratch() Group by the scratch column
 * @method VisionQuery groupByEntered() Group by the Entered column
 * @method VisionQuery groupByDateentered() Group by the DateEntered column
 * @method VisionQuery groupByModified() Group by the Modified column
 * @method VisionQuery groupByDatemodified() Group by the DateModified column
 * @method VisionQuery groupByExpert() Group by the Expert column
 * @method VisionQuery groupByDatechecked() Group by the DateChecked column
 * @method VisionQuery groupByTs() Group by the TS column
 *
 * @method VisionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method VisionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method VisionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Vision findOne(PropelPDO $con = null) Return the first Vision matching the query
 * @method Vision findOneOrCreate(PropelPDO $con = null) Return the first Vision matching the query, or a new Vision object populated from the query conditions when no match is found
 *
 * @method Vision findOneByStockcode(int $StockCode) Return the first Vision filtered by the StockCode column
 * @method Vision findOneBySpeccode(int $SpecCode) Return the first Vision filtered by the SpecCode column
 * @method Vision findOneByVisionrefno(int $VisionRefNo) Return the first Vision filtered by the VisionRefNo column
 * @method Vision findOneByGenus(string $Genus) Return the first Vision filtered by the Genus column
 * @method Vision findOneBySpecies(string $Species) Return the first Vision filtered by the Species column
 * @method Vision findOneBySensit(double $Sensit) Return the first Vision filtered by the Sensit column
 * @method Vision findOneByConfint(double $ConfInt) Return the first Vision filtered by the ConfInt column
 * @method Vision findOneByDatarefno(int $DataRefNo) Return the first Vision filtered by the DataRefNo column
 * @method Vision findOneByOtherpigment(int $OtherPigment) Return the first Vision filtered by the OtherPigment column
 * @method Vision findOneByScratch(string $scratch) Return the first Vision filtered by the scratch column
 * @method Vision findOneByEntered(int $Entered) Return the first Vision filtered by the Entered column
 * @method Vision findOneByDateentered(string $DateEntered) Return the first Vision filtered by the DateEntered column
 * @method Vision findOneByModified(int $Modified) Return the first Vision filtered by the Modified column
 * @method Vision findOneByDatemodified(string $DateModified) Return the first Vision filtered by the DateModified column
 * @method Vision findOneByExpert(int $Expert) Return the first Vision filtered by the Expert column
 * @method Vision findOneByDatechecked(string $DateChecked) Return the first Vision filtered by the DateChecked column
 * @method Vision findOneByTs(string $TS) Return the first Vision filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Vision objects filtered by the autoctr column
 * @method array findByStockcode(int $StockCode) Return Vision objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Vision objects filtered by the SpecCode column
 * @method array findByVisionrefno(int $VisionRefNo) Return Vision objects filtered by the VisionRefNo column
 * @method array findByGenus(string $Genus) Return Vision objects filtered by the Genus column
 * @method array findBySpecies(string $Species) Return Vision objects filtered by the Species column
 * @method array findBySensit(double $Sensit) Return Vision objects filtered by the Sensit column
 * @method array findByConfint(double $ConfInt) Return Vision objects filtered by the ConfInt column
 * @method array findByDatarefno(int $DataRefNo) Return Vision objects filtered by the DataRefNo column
 * @method array findByOtherpigment(int $OtherPigment) Return Vision objects filtered by the OtherPigment column
 * @method array findByScratch(string $scratch) Return Vision objects filtered by the scratch column
 * @method array findByEntered(int $Entered) Return Vision objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Vision objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Vision objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Vision objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Vision objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Vision objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Vision objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseVisionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseVisionQuery object.
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
            $modelName = 'Vision';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VisionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   VisionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return VisionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VisionQuery) {
            return $criteria;
        }
        $query = new VisionQuery(null, null, $modelAlias);

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
     * @return   Vision|Vision[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = VisionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(VisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Vision A model object, or null if the key is not found
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
     * @return                 Vision A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `StockCode`, `SpecCode`, `VisionRefNo`, `Genus`, `Species`, `Sensit`, `ConfInt`, `DataRefNo`, `OtherPigment`, `scratch`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `vision` WHERE `autoctr` = :p0';
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
            $obj = new Vision();
            $obj->hydrate($row);
            VisionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Vision|Vision[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Vision[]|mixed the list of results, formatted by the current formatter
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
     * @return VisionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(VisionPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return VisionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(VisionPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return VisionQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(VisionPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(VisionPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisionPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return VisionQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(VisionPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(VisionPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisionPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return VisionQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(VisionPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(VisionPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisionPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the VisionRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByVisionrefno(1234); // WHERE VisionRefNo = 1234
     * $query->filterByVisionrefno(array(12, 34)); // WHERE VisionRefNo IN (12, 34)
     * $query->filterByVisionrefno(array('min' => 12)); // WHERE VisionRefNo >= 12
     * $query->filterByVisionrefno(array('max' => 12)); // WHERE VisionRefNo <= 12
     * </code>
     *
     * @param     mixed $visionrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisionQuery The current query, for fluid interface
     */
    public function filterByVisionrefno($visionrefno = null, $comparison = null)
    {
        if (is_array($visionrefno)) {
            $useMinMax = false;
            if (isset($visionrefno['min'])) {
                $this->addUsingAlias(VisionPeer::VISIONREFNO, $visionrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visionrefno['max'])) {
                $this->addUsingAlias(VisionPeer::VISIONREFNO, $visionrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisionPeer::VISIONREFNO, $visionrefno, $comparison);
    }

    /**
     * Filter the query on the Genus column
     *
     * Example usage:
     * <code>
     * $query->filterByGenus('fooValue');   // WHERE Genus = 'fooValue'
     * $query->filterByGenus('%fooValue%'); // WHERE Genus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisionQuery The current query, for fluid interface
     */
    public function filterByGenus($genus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($genus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $genus)) {
                $genus = str_replace('*', '%', $genus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VisionPeer::GENUS, $genus, $comparison);
    }

    /**
     * Filter the query on the Species column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecies('fooValue');   // WHERE Species = 'fooValue'
     * $query->filterBySpecies('%fooValue%'); // WHERE Species LIKE '%fooValue%'
     * </code>
     *
     * @param     string $species The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisionQuery The current query, for fluid interface
     */
    public function filterBySpecies($species = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($species)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $species)) {
                $species = str_replace('*', '%', $species);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VisionPeer::SPECIES, $species, $comparison);
    }

    /**
     * Filter the query on the Sensit column
     *
     * Example usage:
     * <code>
     * $query->filterBySensit(1234); // WHERE Sensit = 1234
     * $query->filterBySensit(array(12, 34)); // WHERE Sensit IN (12, 34)
     * $query->filterBySensit(array('min' => 12)); // WHERE Sensit >= 12
     * $query->filterBySensit(array('max' => 12)); // WHERE Sensit <= 12
     * </code>
     *
     * @param     mixed $sensit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisionQuery The current query, for fluid interface
     */
    public function filterBySensit($sensit = null, $comparison = null)
    {
        if (is_array($sensit)) {
            $useMinMax = false;
            if (isset($sensit['min'])) {
                $this->addUsingAlias(VisionPeer::SENSIT, $sensit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sensit['max'])) {
                $this->addUsingAlias(VisionPeer::SENSIT, $sensit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisionPeer::SENSIT, $sensit, $comparison);
    }

    /**
     * Filter the query on the ConfInt column
     *
     * Example usage:
     * <code>
     * $query->filterByConfint(1234); // WHERE ConfInt = 1234
     * $query->filterByConfint(array(12, 34)); // WHERE ConfInt IN (12, 34)
     * $query->filterByConfint(array('min' => 12)); // WHERE ConfInt >= 12
     * $query->filterByConfint(array('max' => 12)); // WHERE ConfInt <= 12
     * </code>
     *
     * @param     mixed $confint The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisionQuery The current query, for fluid interface
     */
    public function filterByConfint($confint = null, $comparison = null)
    {
        if (is_array($confint)) {
            $useMinMax = false;
            if (isset($confint['min'])) {
                $this->addUsingAlias(VisionPeer::CONFINT, $confint['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($confint['max'])) {
                $this->addUsingAlias(VisionPeer::CONFINT, $confint['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisionPeer::CONFINT, $confint, $comparison);
    }

    /**
     * Filter the query on the DataRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByDatarefno(1234); // WHERE DataRefNo = 1234
     * $query->filterByDatarefno(array(12, 34)); // WHERE DataRefNo IN (12, 34)
     * $query->filterByDatarefno(array('min' => 12)); // WHERE DataRefNo >= 12
     * $query->filterByDatarefno(array('max' => 12)); // WHERE DataRefNo <= 12
     * </code>
     *
     * @param     mixed $datarefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisionQuery The current query, for fluid interface
     */
    public function filterByDatarefno($datarefno = null, $comparison = null)
    {
        if (is_array($datarefno)) {
            $useMinMax = false;
            if (isset($datarefno['min'])) {
                $this->addUsingAlias(VisionPeer::DATAREFNO, $datarefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datarefno['max'])) {
                $this->addUsingAlias(VisionPeer::DATAREFNO, $datarefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisionPeer::DATAREFNO, $datarefno, $comparison);
    }

    /**
     * Filter the query on the OtherPigment column
     *
     * Example usage:
     * <code>
     * $query->filterByOtherpigment(1234); // WHERE OtherPigment = 1234
     * $query->filterByOtherpigment(array(12, 34)); // WHERE OtherPigment IN (12, 34)
     * $query->filterByOtherpigment(array('min' => 12)); // WHERE OtherPigment >= 12
     * $query->filterByOtherpigment(array('max' => 12)); // WHERE OtherPigment <= 12
     * </code>
     *
     * @param     mixed $otherpigment The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisionQuery The current query, for fluid interface
     */
    public function filterByOtherpigment($otherpigment = null, $comparison = null)
    {
        if (is_array($otherpigment)) {
            $useMinMax = false;
            if (isset($otherpigment['min'])) {
                $this->addUsingAlias(VisionPeer::OTHERPIGMENT, $otherpigment['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($otherpigment['max'])) {
                $this->addUsingAlias(VisionPeer::OTHERPIGMENT, $otherpigment['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisionPeer::OTHERPIGMENT, $otherpigment, $comparison);
    }

    /**
     * Filter the query on the scratch column
     *
     * Example usage:
     * <code>
     * $query->filterByScratch('fooValue');   // WHERE scratch = 'fooValue'
     * $query->filterByScratch('%fooValue%'); // WHERE scratch LIKE '%fooValue%'
     * </code>
     *
     * @param     string $scratch The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisionQuery The current query, for fluid interface
     */
    public function filterByScratch($scratch = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($scratch)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $scratch)) {
                $scratch = str_replace('*', '%', $scratch);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VisionPeer::SCRATCH, $scratch, $comparison);
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
     * @return VisionQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(VisionPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(VisionPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisionPeer::ENTERED, $entered, $comparison);
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
     * @return VisionQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(VisionPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(VisionPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisionPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return VisionQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(VisionPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(VisionPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisionPeer::MODIFIED, $modified, $comparison);
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
     * @return VisionQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(VisionPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(VisionPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisionPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return VisionQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(VisionPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(VisionPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisionPeer::EXPERT, $expert, $comparison);
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
     * @return VisionQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(VisionPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(VisionPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisionPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return VisionQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(VisionPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(VisionPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisionPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Vision $vision Object to remove from the list of results
     *
     * @return VisionQuery The current query, for fluid interface
     */
    public function prune($vision = null)
    {
        if ($vision) {
            $this->addUsingAlias(VisionPeer::AUTOCTR, $vision->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
