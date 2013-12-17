<?php


/**
 * Base class that represents a query for the 'fl_transportdetails' table.
 *
 *
 *
 * @method FlTransportdetailsQuery orderByLosscode($order = Criteria::ASC) Order by the Losscode column
 * @method FlTransportdetailsQuery orderByTransportmethod($order = Criteria::ASC) Order by the TransportMethod column
 * @method FlTransportdetailsQuery orderByOthertransportmethod($order = Criteria::ASC) Order by the OtherTransportMethod column
 * @method FlTransportdetailsQuery orderByDistancetransported($order = Criteria::ASC) Order by the DistanceTransported column
 * @method FlTransportdetailsQuery orderByDurationofjourney($order = Criteria::ASC) Order by the DurationOfJourney column
 * @method FlTransportdetailsQuery orderByStoragemethod($order = Criteria::ASC) Order by the StorageMethod column
 * @method FlTransportdetailsQuery orderByStoragecontainers($order = Criteria::ASC) Order by the StorageContainers column
 * @method FlTransportdetailsQuery orderByStoragetreatments($order = Criteria::ASC) Order by the StorageTreatments column
 * @method FlTransportdetailsQuery orderByEditable($order = Criteria::ASC) Order by the Editable column
 * @method FlTransportdetailsQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method FlTransportdetailsQuery groupByLosscode() Group by the Losscode column
 * @method FlTransportdetailsQuery groupByTransportmethod() Group by the TransportMethod column
 * @method FlTransportdetailsQuery groupByOthertransportmethod() Group by the OtherTransportMethod column
 * @method FlTransportdetailsQuery groupByDistancetransported() Group by the DistanceTransported column
 * @method FlTransportdetailsQuery groupByDurationofjourney() Group by the DurationOfJourney column
 * @method FlTransportdetailsQuery groupByStoragemethod() Group by the StorageMethod column
 * @method FlTransportdetailsQuery groupByStoragecontainers() Group by the StorageContainers column
 * @method FlTransportdetailsQuery groupByStoragetreatments() Group by the StorageTreatments column
 * @method FlTransportdetailsQuery groupByEditable() Group by the Editable column
 * @method FlTransportdetailsQuery groupByTs() Group by the TS column
 *
 * @method FlTransportdetailsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FlTransportdetailsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FlTransportdetailsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FlTransportdetails findOne(PropelPDO $con = null) Return the first FlTransportdetails matching the query
 * @method FlTransportdetails findOneOrCreate(PropelPDO $con = null) Return the first FlTransportdetails matching the query, or a new FlTransportdetails object populated from the query conditions when no match is found
 *
 * @method FlTransportdetails findOneByTransportmethod(string $TransportMethod) Return the first FlTransportdetails filtered by the TransportMethod column
 * @method FlTransportdetails findOneByOthertransportmethod(string $OtherTransportMethod) Return the first FlTransportdetails filtered by the OtherTransportMethod column
 * @method FlTransportdetails findOneByDistancetransported(double $DistanceTransported) Return the first FlTransportdetails filtered by the DistanceTransported column
 * @method FlTransportdetails findOneByDurationofjourney(double $DurationOfJourney) Return the first FlTransportdetails filtered by the DurationOfJourney column
 * @method FlTransportdetails findOneByStoragemethod(string $StorageMethod) Return the first FlTransportdetails filtered by the StorageMethod column
 * @method FlTransportdetails findOneByStoragecontainers(string $StorageContainers) Return the first FlTransportdetails filtered by the StorageContainers column
 * @method FlTransportdetails findOneByStoragetreatments(string $StorageTreatments) Return the first FlTransportdetails filtered by the StorageTreatments column
 * @method FlTransportdetails findOneByEditable(string $Editable) Return the first FlTransportdetails filtered by the Editable column
 * @method FlTransportdetails findOneByTs(string $TS) Return the first FlTransportdetails filtered by the TS column
 *
 * @method array findByLosscode(int $Losscode) Return FlTransportdetails objects filtered by the Losscode column
 * @method array findByTransportmethod(string $TransportMethod) Return FlTransportdetails objects filtered by the TransportMethod column
 * @method array findByOthertransportmethod(string $OtherTransportMethod) Return FlTransportdetails objects filtered by the OtherTransportMethod column
 * @method array findByDistancetransported(double $DistanceTransported) Return FlTransportdetails objects filtered by the DistanceTransported column
 * @method array findByDurationofjourney(double $DurationOfJourney) Return FlTransportdetails objects filtered by the DurationOfJourney column
 * @method array findByStoragemethod(string $StorageMethod) Return FlTransportdetails objects filtered by the StorageMethod column
 * @method array findByStoragecontainers(string $StorageContainers) Return FlTransportdetails objects filtered by the StorageContainers column
 * @method array findByStoragetreatments(string $StorageTreatments) Return FlTransportdetails objects filtered by the StorageTreatments column
 * @method array findByEditable(string $Editable) Return FlTransportdetails objects filtered by the Editable column
 * @method array findByTs(string $TS) Return FlTransportdetails objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFlTransportdetailsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFlTransportdetailsQuery object.
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
            $modelName = 'FlTransportdetails';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FlTransportdetailsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FlTransportdetailsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FlTransportdetailsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FlTransportdetailsQuery) {
            return $criteria;
        }
        $query = new FlTransportdetailsQuery(null, null, $modelAlias);

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
     * @return   FlTransportdetails|FlTransportdetails[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FlTransportdetailsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FlTransportdetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 FlTransportdetails A model object, or null if the key is not found
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
     * @return                 FlTransportdetails A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `Losscode`, `TransportMethod`, `OtherTransportMethod`, `DistanceTransported`, `DurationOfJourney`, `StorageMethod`, `StorageContainers`, `StorageTreatments`, `Editable`, `TS` FROM `fl_transportdetails` WHERE `Losscode` = :p0';
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
            $obj = new FlTransportdetails();
            $obj->hydrate($row);
            FlTransportdetailsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return FlTransportdetails|FlTransportdetails[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|FlTransportdetails[]|mixed the list of results, formatted by the current formatter
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
     * @return FlTransportdetailsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FlTransportdetailsPeer::LOSSCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FlTransportdetailsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FlTransportdetailsPeer::LOSSCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the Losscode column
     *
     * Example usage:
     * <code>
     * $query->filterByLosscode(1234); // WHERE Losscode = 1234
     * $query->filterByLosscode(array(12, 34)); // WHERE Losscode IN (12, 34)
     * $query->filterByLosscode(array('min' => 12)); // WHERE Losscode >= 12
     * $query->filterByLosscode(array('max' => 12)); // WHERE Losscode <= 12
     * </code>
     *
     * @param     mixed $losscode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlTransportdetailsQuery The current query, for fluid interface
     */
    public function filterByLosscode($losscode = null, $comparison = null)
    {
        if (is_array($losscode)) {
            $useMinMax = false;
            if (isset($losscode['min'])) {
                $this->addUsingAlias(FlTransportdetailsPeer::LOSSCODE, $losscode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($losscode['max'])) {
                $this->addUsingAlias(FlTransportdetailsPeer::LOSSCODE, $losscode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlTransportdetailsPeer::LOSSCODE, $losscode, $comparison);
    }

    /**
     * Filter the query on the TransportMethod column
     *
     * Example usage:
     * <code>
     * $query->filterByTransportmethod('fooValue');   // WHERE TransportMethod = 'fooValue'
     * $query->filterByTransportmethod('%fooValue%'); // WHERE TransportMethod LIKE '%fooValue%'
     * </code>
     *
     * @param     string $transportmethod The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlTransportdetailsQuery The current query, for fluid interface
     */
    public function filterByTransportmethod($transportmethod = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($transportmethod)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $transportmethod)) {
                $transportmethod = str_replace('*', '%', $transportmethod);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlTransportdetailsPeer::TRANSPORTMETHOD, $transportmethod, $comparison);
    }

    /**
     * Filter the query on the OtherTransportMethod column
     *
     * Example usage:
     * <code>
     * $query->filterByOthertransportmethod('fooValue');   // WHERE OtherTransportMethod = 'fooValue'
     * $query->filterByOthertransportmethod('%fooValue%'); // WHERE OtherTransportMethod LIKE '%fooValue%'
     * </code>
     *
     * @param     string $othertransportmethod The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlTransportdetailsQuery The current query, for fluid interface
     */
    public function filterByOthertransportmethod($othertransportmethod = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($othertransportmethod)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $othertransportmethod)) {
                $othertransportmethod = str_replace('*', '%', $othertransportmethod);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlTransportdetailsPeer::OTHERTRANSPORTMETHOD, $othertransportmethod, $comparison);
    }

    /**
     * Filter the query on the DistanceTransported column
     *
     * Example usage:
     * <code>
     * $query->filterByDistancetransported(1234); // WHERE DistanceTransported = 1234
     * $query->filterByDistancetransported(array(12, 34)); // WHERE DistanceTransported IN (12, 34)
     * $query->filterByDistancetransported(array('min' => 12)); // WHERE DistanceTransported >= 12
     * $query->filterByDistancetransported(array('max' => 12)); // WHERE DistanceTransported <= 12
     * </code>
     *
     * @param     mixed $distancetransported The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlTransportdetailsQuery The current query, for fluid interface
     */
    public function filterByDistancetransported($distancetransported = null, $comparison = null)
    {
        if (is_array($distancetransported)) {
            $useMinMax = false;
            if (isset($distancetransported['min'])) {
                $this->addUsingAlias(FlTransportdetailsPeer::DISTANCETRANSPORTED, $distancetransported['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($distancetransported['max'])) {
                $this->addUsingAlias(FlTransportdetailsPeer::DISTANCETRANSPORTED, $distancetransported['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlTransportdetailsPeer::DISTANCETRANSPORTED, $distancetransported, $comparison);
    }

    /**
     * Filter the query on the DurationOfJourney column
     *
     * Example usage:
     * <code>
     * $query->filterByDurationofjourney(1234); // WHERE DurationOfJourney = 1234
     * $query->filterByDurationofjourney(array(12, 34)); // WHERE DurationOfJourney IN (12, 34)
     * $query->filterByDurationofjourney(array('min' => 12)); // WHERE DurationOfJourney >= 12
     * $query->filterByDurationofjourney(array('max' => 12)); // WHERE DurationOfJourney <= 12
     * </code>
     *
     * @param     mixed $durationofjourney The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlTransportdetailsQuery The current query, for fluid interface
     */
    public function filterByDurationofjourney($durationofjourney = null, $comparison = null)
    {
        if (is_array($durationofjourney)) {
            $useMinMax = false;
            if (isset($durationofjourney['min'])) {
                $this->addUsingAlias(FlTransportdetailsPeer::DURATIONOFJOURNEY, $durationofjourney['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($durationofjourney['max'])) {
                $this->addUsingAlias(FlTransportdetailsPeer::DURATIONOFJOURNEY, $durationofjourney['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlTransportdetailsPeer::DURATIONOFJOURNEY, $durationofjourney, $comparison);
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
     * @return FlTransportdetailsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FlTransportdetailsPeer::STORAGEMETHOD, $storagemethod, $comparison);
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
     * @return FlTransportdetailsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FlTransportdetailsPeer::STORAGECONTAINERS, $storagecontainers, $comparison);
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
     * @return FlTransportdetailsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FlTransportdetailsPeer::STORAGETREATMENTS, $storagetreatments, $comparison);
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
     * @return FlTransportdetailsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FlTransportdetailsPeer::EDITABLE, $editable, $comparison);
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
     * @return FlTransportdetailsQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(FlTransportdetailsPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(FlTransportdetailsPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlTransportdetailsPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   FlTransportdetails $flTransportdetails Object to remove from the list of results
     *
     * @return FlTransportdetailsQuery The current query, for fluid interface
     */
    public function prune($flTransportdetails = null)
    {
        if ($flTransportdetails) {
            $this->addUsingAlias(FlTransportdetailsPeer::LOSSCODE, $flTransportdetails->getLosscode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
