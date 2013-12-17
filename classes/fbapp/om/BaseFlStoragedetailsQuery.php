<?php


/**
 * Base class that represents a query for the 'fl_storagedetails' table.
 *
 *
 *
 * @method FlStoragedetailsQuery orderByLosscode($order = Criteria::ASC) Order by the LossCode column
 * @method FlStoragedetailsQuery orderByDistributionstage($order = Criteria::ASC) Order by the DistributionStage column
 * @method FlStoragedetailsQuery orderByOtherdistributionstage($order = Criteria::ASC) Order by the OtherDistributionStage column
 * @method FlStoragedetailsQuery orderByDurationofstoragemin($order = Criteria::ASC) Order by the DurationOfStorageMin column
 * @method FlStoragedetailsQuery orderByDurationofstoragemax($order = Criteria::ASC) Order by the DurationOfStorageMax column
 * @method FlStoragedetailsQuery orderByStoragemethod($order = Criteria::ASC) Order by the StorageMethod column
 * @method FlStoragedetailsQuery orderByStoragetemperaturemin($order = Criteria::ASC) Order by the StorageTemperatureMin column
 * @method FlStoragedetailsQuery orderByStoragetemperaturemax($order = Criteria::ASC) Order by the StorageTemperatureMax column
 * @method FlStoragedetailsQuery orderByStoragecontainers($order = Criteria::ASC) Order by the StorageContainers column
 * @method FlStoragedetailsQuery orderByStoragetreatments($order = Criteria::ASC) Order by the StorageTreatments column
 * @method FlStoragedetailsQuery orderBySaltcontent($order = Criteria::ASC) Order by the SaltContent column
 * @method FlStoragedetailsQuery orderByEditable($order = Criteria::ASC) Order by the Editable column
 * @method FlStoragedetailsQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method FlStoragedetailsQuery groupByLosscode() Group by the LossCode column
 * @method FlStoragedetailsQuery groupByDistributionstage() Group by the DistributionStage column
 * @method FlStoragedetailsQuery groupByOtherdistributionstage() Group by the OtherDistributionStage column
 * @method FlStoragedetailsQuery groupByDurationofstoragemin() Group by the DurationOfStorageMin column
 * @method FlStoragedetailsQuery groupByDurationofstoragemax() Group by the DurationOfStorageMax column
 * @method FlStoragedetailsQuery groupByStoragemethod() Group by the StorageMethod column
 * @method FlStoragedetailsQuery groupByStoragetemperaturemin() Group by the StorageTemperatureMin column
 * @method FlStoragedetailsQuery groupByStoragetemperaturemax() Group by the StorageTemperatureMax column
 * @method FlStoragedetailsQuery groupByStoragecontainers() Group by the StorageContainers column
 * @method FlStoragedetailsQuery groupByStoragetreatments() Group by the StorageTreatments column
 * @method FlStoragedetailsQuery groupBySaltcontent() Group by the SaltContent column
 * @method FlStoragedetailsQuery groupByEditable() Group by the Editable column
 * @method FlStoragedetailsQuery groupByTs() Group by the TS column
 *
 * @method FlStoragedetailsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FlStoragedetailsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FlStoragedetailsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FlStoragedetails findOne(PropelPDO $con = null) Return the first FlStoragedetails matching the query
 * @method FlStoragedetails findOneOrCreate(PropelPDO $con = null) Return the first FlStoragedetails matching the query, or a new FlStoragedetails object populated from the query conditions when no match is found
 *
 * @method FlStoragedetails findOneByDistributionstage(string $DistributionStage) Return the first FlStoragedetails filtered by the DistributionStage column
 * @method FlStoragedetails findOneByOtherdistributionstage(string $OtherDistributionStage) Return the first FlStoragedetails filtered by the OtherDistributionStage column
 * @method FlStoragedetails findOneByDurationofstoragemin(double $DurationOfStorageMin) Return the first FlStoragedetails filtered by the DurationOfStorageMin column
 * @method FlStoragedetails findOneByDurationofstoragemax(double $DurationOfStorageMax) Return the first FlStoragedetails filtered by the DurationOfStorageMax column
 * @method FlStoragedetails findOneByStoragemethod(string $StorageMethod) Return the first FlStoragedetails filtered by the StorageMethod column
 * @method FlStoragedetails findOneByStoragetemperaturemin(double $StorageTemperatureMin) Return the first FlStoragedetails filtered by the StorageTemperatureMin column
 * @method FlStoragedetails findOneByStoragetemperaturemax(double $StorageTemperatureMax) Return the first FlStoragedetails filtered by the StorageTemperatureMax column
 * @method FlStoragedetails findOneByStoragecontainers(string $StorageContainers) Return the first FlStoragedetails filtered by the StorageContainers column
 * @method FlStoragedetails findOneByStoragetreatments(string $StorageTreatments) Return the first FlStoragedetails filtered by the StorageTreatments column
 * @method FlStoragedetails findOneBySaltcontent(double $SaltContent) Return the first FlStoragedetails filtered by the SaltContent column
 * @method FlStoragedetails findOneByEditable(string $Editable) Return the first FlStoragedetails filtered by the Editable column
 * @method FlStoragedetails findOneByTs(string $TS) Return the first FlStoragedetails filtered by the TS column
 *
 * @method array findByLosscode(int $LossCode) Return FlStoragedetails objects filtered by the LossCode column
 * @method array findByDistributionstage(string $DistributionStage) Return FlStoragedetails objects filtered by the DistributionStage column
 * @method array findByOtherdistributionstage(string $OtherDistributionStage) Return FlStoragedetails objects filtered by the OtherDistributionStage column
 * @method array findByDurationofstoragemin(double $DurationOfStorageMin) Return FlStoragedetails objects filtered by the DurationOfStorageMin column
 * @method array findByDurationofstoragemax(double $DurationOfStorageMax) Return FlStoragedetails objects filtered by the DurationOfStorageMax column
 * @method array findByStoragemethod(string $StorageMethod) Return FlStoragedetails objects filtered by the StorageMethod column
 * @method array findByStoragetemperaturemin(double $StorageTemperatureMin) Return FlStoragedetails objects filtered by the StorageTemperatureMin column
 * @method array findByStoragetemperaturemax(double $StorageTemperatureMax) Return FlStoragedetails objects filtered by the StorageTemperatureMax column
 * @method array findByStoragecontainers(string $StorageContainers) Return FlStoragedetails objects filtered by the StorageContainers column
 * @method array findByStoragetreatments(string $StorageTreatments) Return FlStoragedetails objects filtered by the StorageTreatments column
 * @method array findBySaltcontent(double $SaltContent) Return FlStoragedetails objects filtered by the SaltContent column
 * @method array findByEditable(string $Editable) Return FlStoragedetails objects filtered by the Editable column
 * @method array findByTs(string $TS) Return FlStoragedetails objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFlStoragedetailsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFlStoragedetailsQuery object.
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
            $modelName = 'FlStoragedetails';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FlStoragedetailsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FlStoragedetailsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FlStoragedetailsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FlStoragedetailsQuery) {
            return $criteria;
        }
        $query = new FlStoragedetailsQuery(null, null, $modelAlias);

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
     * @return   FlStoragedetails|FlStoragedetails[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FlStoragedetailsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FlStoragedetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 FlStoragedetails A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByLosscode($key, $con = null)
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
     * @return                 FlStoragedetails A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `LossCode`, `DistributionStage`, `OtherDistributionStage`, `DurationOfStorageMin`, `DurationOfStorageMax`, `StorageMethod`, `StorageTemperatureMin`, `StorageTemperatureMax`, `StorageContainers`, `StorageTreatments`, `SaltContent`, `Editable`, `TS` FROM `fl_storagedetails` WHERE `LossCode` = :p0';
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
            $obj = new FlStoragedetails();
            $obj->hydrate($row);
            FlStoragedetailsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return FlStoragedetails|FlStoragedetails[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|FlStoragedetails[]|mixed the list of results, formatted by the current formatter
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
     * @return FlStoragedetailsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FlStoragedetailsPeer::LOSSCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FlStoragedetailsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FlStoragedetailsPeer::LOSSCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the LossCode column
     *
     * Example usage:
     * <code>
     * $query->filterByLosscode(1234); // WHERE LossCode = 1234
     * $query->filterByLosscode(array(12, 34)); // WHERE LossCode IN (12, 34)
     * $query->filterByLosscode(array('min' => 12)); // WHERE LossCode >= 12
     * $query->filterByLosscode(array('max' => 12)); // WHERE LossCode <= 12
     * </code>
     *
     * @param     mixed $losscode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlStoragedetailsQuery The current query, for fluid interface
     */
    public function filterByLosscode($losscode = null, $comparison = null)
    {
        if (is_array($losscode)) {
            $useMinMax = false;
            if (isset($losscode['min'])) {
                $this->addUsingAlias(FlStoragedetailsPeer::LOSSCODE, $losscode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($losscode['max'])) {
                $this->addUsingAlias(FlStoragedetailsPeer::LOSSCODE, $losscode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlStoragedetailsPeer::LOSSCODE, $losscode, $comparison);
    }

    /**
     * Filter the query on the DistributionStage column
     *
     * Example usage:
     * <code>
     * $query->filterByDistributionstage('fooValue');   // WHERE DistributionStage = 'fooValue'
     * $query->filterByDistributionstage('%fooValue%'); // WHERE DistributionStage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $distributionstage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlStoragedetailsQuery The current query, for fluid interface
     */
    public function filterByDistributionstage($distributionstage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($distributionstage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $distributionstage)) {
                $distributionstage = str_replace('*', '%', $distributionstage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlStoragedetailsPeer::DISTRIBUTIONSTAGE, $distributionstage, $comparison);
    }

    /**
     * Filter the query on the OtherDistributionStage column
     *
     * Example usage:
     * <code>
     * $query->filterByOtherdistributionstage('fooValue');   // WHERE OtherDistributionStage = 'fooValue'
     * $query->filterByOtherdistributionstage('%fooValue%'); // WHERE OtherDistributionStage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $otherdistributionstage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlStoragedetailsQuery The current query, for fluid interface
     */
    public function filterByOtherdistributionstage($otherdistributionstage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($otherdistributionstage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $otherdistributionstage)) {
                $otherdistributionstage = str_replace('*', '%', $otherdistributionstage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlStoragedetailsPeer::OTHERDISTRIBUTIONSTAGE, $otherdistributionstage, $comparison);
    }

    /**
     * Filter the query on the DurationOfStorageMin column
     *
     * Example usage:
     * <code>
     * $query->filterByDurationofstoragemin(1234); // WHERE DurationOfStorageMin = 1234
     * $query->filterByDurationofstoragemin(array(12, 34)); // WHERE DurationOfStorageMin IN (12, 34)
     * $query->filterByDurationofstoragemin(array('min' => 12)); // WHERE DurationOfStorageMin >= 12
     * $query->filterByDurationofstoragemin(array('max' => 12)); // WHERE DurationOfStorageMin <= 12
     * </code>
     *
     * @param     mixed $durationofstoragemin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlStoragedetailsQuery The current query, for fluid interface
     */
    public function filterByDurationofstoragemin($durationofstoragemin = null, $comparison = null)
    {
        if (is_array($durationofstoragemin)) {
            $useMinMax = false;
            if (isset($durationofstoragemin['min'])) {
                $this->addUsingAlias(FlStoragedetailsPeer::DURATIONOFSTORAGEMIN, $durationofstoragemin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($durationofstoragemin['max'])) {
                $this->addUsingAlias(FlStoragedetailsPeer::DURATIONOFSTORAGEMIN, $durationofstoragemin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlStoragedetailsPeer::DURATIONOFSTORAGEMIN, $durationofstoragemin, $comparison);
    }

    /**
     * Filter the query on the DurationOfStorageMax column
     *
     * Example usage:
     * <code>
     * $query->filterByDurationofstoragemax(1234); // WHERE DurationOfStorageMax = 1234
     * $query->filterByDurationofstoragemax(array(12, 34)); // WHERE DurationOfStorageMax IN (12, 34)
     * $query->filterByDurationofstoragemax(array('min' => 12)); // WHERE DurationOfStorageMax >= 12
     * $query->filterByDurationofstoragemax(array('max' => 12)); // WHERE DurationOfStorageMax <= 12
     * </code>
     *
     * @param     mixed $durationofstoragemax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlStoragedetailsQuery The current query, for fluid interface
     */
    public function filterByDurationofstoragemax($durationofstoragemax = null, $comparison = null)
    {
        if (is_array($durationofstoragemax)) {
            $useMinMax = false;
            if (isset($durationofstoragemax['min'])) {
                $this->addUsingAlias(FlStoragedetailsPeer::DURATIONOFSTORAGEMAX, $durationofstoragemax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($durationofstoragemax['max'])) {
                $this->addUsingAlias(FlStoragedetailsPeer::DURATIONOFSTORAGEMAX, $durationofstoragemax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlStoragedetailsPeer::DURATIONOFSTORAGEMAX, $durationofstoragemax, $comparison);
    }

    /**
     * Filter the query on the StorageMethod column
     *
     * Example usage:
     * <code>
     * $query->filterByStoragemethod('fooValue');   // WHERE StorageMethod = 'fooValue'
     * $query->filterByStoragemethod('%fooValue%'); // WHERE StorageMethod LIKE '%fooValue%'
     * </code>
     *
     * @param     string $storagemethod The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlStoragedetailsQuery The current query, for fluid interface
     */
    public function filterByStoragemethod($storagemethod = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($storagemethod)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $storagemethod)) {
                $storagemethod = str_replace('*', '%', $storagemethod);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlStoragedetailsPeer::STORAGEMETHOD, $storagemethod, $comparison);
    }

    /**
     * Filter the query on the StorageTemperatureMin column
     *
     * Example usage:
     * <code>
     * $query->filterByStoragetemperaturemin(1234); // WHERE StorageTemperatureMin = 1234
     * $query->filterByStoragetemperaturemin(array(12, 34)); // WHERE StorageTemperatureMin IN (12, 34)
     * $query->filterByStoragetemperaturemin(array('min' => 12)); // WHERE StorageTemperatureMin >= 12
     * $query->filterByStoragetemperaturemin(array('max' => 12)); // WHERE StorageTemperatureMin <= 12
     * </code>
     *
     * @param     mixed $storagetemperaturemin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlStoragedetailsQuery The current query, for fluid interface
     */
    public function filterByStoragetemperaturemin($storagetemperaturemin = null, $comparison = null)
    {
        if (is_array($storagetemperaturemin)) {
            $useMinMax = false;
            if (isset($storagetemperaturemin['min'])) {
                $this->addUsingAlias(FlStoragedetailsPeer::STORAGETEMPERATUREMIN, $storagetemperaturemin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($storagetemperaturemin['max'])) {
                $this->addUsingAlias(FlStoragedetailsPeer::STORAGETEMPERATUREMIN, $storagetemperaturemin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlStoragedetailsPeer::STORAGETEMPERATUREMIN, $storagetemperaturemin, $comparison);
    }

    /**
     * Filter the query on the StorageTemperatureMax column
     *
     * Example usage:
     * <code>
     * $query->filterByStoragetemperaturemax(1234); // WHERE StorageTemperatureMax = 1234
     * $query->filterByStoragetemperaturemax(array(12, 34)); // WHERE StorageTemperatureMax IN (12, 34)
     * $query->filterByStoragetemperaturemax(array('min' => 12)); // WHERE StorageTemperatureMax >= 12
     * $query->filterByStoragetemperaturemax(array('max' => 12)); // WHERE StorageTemperatureMax <= 12
     * </code>
     *
     * @param     mixed $storagetemperaturemax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlStoragedetailsQuery The current query, for fluid interface
     */
    public function filterByStoragetemperaturemax($storagetemperaturemax = null, $comparison = null)
    {
        if (is_array($storagetemperaturemax)) {
            $useMinMax = false;
            if (isset($storagetemperaturemax['min'])) {
                $this->addUsingAlias(FlStoragedetailsPeer::STORAGETEMPERATUREMAX, $storagetemperaturemax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($storagetemperaturemax['max'])) {
                $this->addUsingAlias(FlStoragedetailsPeer::STORAGETEMPERATUREMAX, $storagetemperaturemax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlStoragedetailsPeer::STORAGETEMPERATUREMAX, $storagetemperaturemax, $comparison);
    }

    /**
     * Filter the query on the StorageContainers column
     *
     * Example usage:
     * <code>
     * $query->filterByStoragecontainers('fooValue');   // WHERE StorageContainers = 'fooValue'
     * $query->filterByStoragecontainers('%fooValue%'); // WHERE StorageContainers LIKE '%fooValue%'
     * </code>
     *
     * @param     string $storagecontainers The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlStoragedetailsQuery The current query, for fluid interface
     */
    public function filterByStoragecontainers($storagecontainers = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($storagecontainers)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $storagecontainers)) {
                $storagecontainers = str_replace('*', '%', $storagecontainers);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlStoragedetailsPeer::STORAGECONTAINERS, $storagecontainers, $comparison);
    }

    /**
     * Filter the query on the StorageTreatments column
     *
     * Example usage:
     * <code>
     * $query->filterByStoragetreatments('fooValue');   // WHERE StorageTreatments = 'fooValue'
     * $query->filterByStoragetreatments('%fooValue%'); // WHERE StorageTreatments LIKE '%fooValue%'
     * </code>
     *
     * @param     string $storagetreatments The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlStoragedetailsQuery The current query, for fluid interface
     */
    public function filterByStoragetreatments($storagetreatments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($storagetreatments)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $storagetreatments)) {
                $storagetreatments = str_replace('*', '%', $storagetreatments);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlStoragedetailsPeer::STORAGETREATMENTS, $storagetreatments, $comparison);
    }

    /**
     * Filter the query on the SaltContent column
     *
     * Example usage:
     * <code>
     * $query->filterBySaltcontent(1234); // WHERE SaltContent = 1234
     * $query->filterBySaltcontent(array(12, 34)); // WHERE SaltContent IN (12, 34)
     * $query->filterBySaltcontent(array('min' => 12)); // WHERE SaltContent >= 12
     * $query->filterBySaltcontent(array('max' => 12)); // WHERE SaltContent <= 12
     * </code>
     *
     * @param     mixed $saltcontent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlStoragedetailsQuery The current query, for fluid interface
     */
    public function filterBySaltcontent($saltcontent = null, $comparison = null)
    {
        if (is_array($saltcontent)) {
            $useMinMax = false;
            if (isset($saltcontent['min'])) {
                $this->addUsingAlias(FlStoragedetailsPeer::SALTCONTENT, $saltcontent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($saltcontent['max'])) {
                $this->addUsingAlias(FlStoragedetailsPeer::SALTCONTENT, $saltcontent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlStoragedetailsPeer::SALTCONTENT, $saltcontent, $comparison);
    }

    /**
     * Filter the query on the Editable column
     *
     * Example usage:
     * <code>
     * $query->filterByEditable('fooValue');   // WHERE Editable = 'fooValue'
     * $query->filterByEditable('%fooValue%'); // WHERE Editable LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editable The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlStoragedetailsQuery The current query, for fluid interface
     */
    public function filterByEditable($editable = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editable)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editable)) {
                $editable = str_replace('*', '%', $editable);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlStoragedetailsPeer::EDITABLE, $editable, $comparison);
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
     * @return FlStoragedetailsQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(FlStoragedetailsPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(FlStoragedetailsPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlStoragedetailsPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   FlStoragedetails $flStoragedetails Object to remove from the list of results
     *
     * @return FlStoragedetailsQuery The current query, for fluid interface
     */
    public function prune($flStoragedetails = null)
    {
        if ($flStoragedetails) {
            $this->addUsingAlias(FlStoragedetailsPeer::LOSSCODE, $flStoragedetails->getLosscode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
