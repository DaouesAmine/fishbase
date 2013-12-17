<?php


/**
 * Base class that represents a query for the 'fl_fishingdetails' table.
 *
 *
 *
 * @method FlFishingdetailsQuery orderByLosscode($order = Criteria::ASC) Order by the LossCode column
 * @method FlFishingdetailsQuery orderByFishingstagedetail($order = Criteria::ASC) Order by the FishingStageDetail column
 * @method FlFishingdetailsQuery orderByFishingmethod($order = Criteria::ASC) Order by the FishingMethod column
 * @method FlFishingdetailsQuery orderByOtherfishingmethod($order = Criteria::ASC) Order by the OtherFishingMethod column
 * @method FlFishingdetailsQuery orderByFishinggearinwater($order = Criteria::ASC) Order by the FishingGearInWater column
 * @method FlFishingdetailsQuery orderByHoursuntillanding($order = Criteria::ASC) Order by the HoursUntilLanding column
 * @method FlFishingdetailsQuery orderByStoragemethodboat($order = Criteria::ASC) Order by the StorageMethodBoat column
 * @method FlFishingdetailsQuery orderByEditable($order = Criteria::ASC) Order by the Editable column
 * @method FlFishingdetailsQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method FlFishingdetailsQuery groupByLosscode() Group by the LossCode column
 * @method FlFishingdetailsQuery groupByFishingstagedetail() Group by the FishingStageDetail column
 * @method FlFishingdetailsQuery groupByFishingmethod() Group by the FishingMethod column
 * @method FlFishingdetailsQuery groupByOtherfishingmethod() Group by the OtherFishingMethod column
 * @method FlFishingdetailsQuery groupByFishinggearinwater() Group by the FishingGearInWater column
 * @method FlFishingdetailsQuery groupByHoursuntillanding() Group by the HoursUntilLanding column
 * @method FlFishingdetailsQuery groupByStoragemethodboat() Group by the StorageMethodBoat column
 * @method FlFishingdetailsQuery groupByEditable() Group by the Editable column
 * @method FlFishingdetailsQuery groupByTs() Group by the TS column
 *
 * @method FlFishingdetailsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FlFishingdetailsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FlFishingdetailsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FlFishingdetails findOne(PropelPDO $con = null) Return the first FlFishingdetails matching the query
 * @method FlFishingdetails findOneOrCreate(PropelPDO $con = null) Return the first FlFishingdetails matching the query, or a new FlFishingdetails object populated from the query conditions when no match is found
 *
 * @method FlFishingdetails findOneByFishingstagedetail(string $FishingStageDetail) Return the first FlFishingdetails filtered by the FishingStageDetail column
 * @method FlFishingdetails findOneByFishingmethod(string $FishingMethod) Return the first FlFishingdetails filtered by the FishingMethod column
 * @method FlFishingdetails findOneByOtherfishingmethod(string $OtherFishingMethod) Return the first FlFishingdetails filtered by the OtherFishingMethod column
 * @method FlFishingdetails findOneByFishinggearinwater(string $FishingGearInWater) Return the first FlFishingdetails filtered by the FishingGearInWater column
 * @method FlFishingdetails findOneByHoursuntillanding(string $HoursUntilLanding) Return the first FlFishingdetails filtered by the HoursUntilLanding column
 * @method FlFishingdetails findOneByStoragemethodboat(string $StorageMethodBoat) Return the first FlFishingdetails filtered by the StorageMethodBoat column
 * @method FlFishingdetails findOneByEditable(string $Editable) Return the first FlFishingdetails filtered by the Editable column
 * @method FlFishingdetails findOneByTs(string $TS) Return the first FlFishingdetails filtered by the TS column
 *
 * @method array findByLosscode(int $LossCode) Return FlFishingdetails objects filtered by the LossCode column
 * @method array findByFishingstagedetail(string $FishingStageDetail) Return FlFishingdetails objects filtered by the FishingStageDetail column
 * @method array findByFishingmethod(string $FishingMethod) Return FlFishingdetails objects filtered by the FishingMethod column
 * @method array findByOtherfishingmethod(string $OtherFishingMethod) Return FlFishingdetails objects filtered by the OtherFishingMethod column
 * @method array findByFishinggearinwater(string $FishingGearInWater) Return FlFishingdetails objects filtered by the FishingGearInWater column
 * @method array findByHoursuntillanding(string $HoursUntilLanding) Return FlFishingdetails objects filtered by the HoursUntilLanding column
 * @method array findByStoragemethodboat(string $StorageMethodBoat) Return FlFishingdetails objects filtered by the StorageMethodBoat column
 * @method array findByEditable(string $Editable) Return FlFishingdetails objects filtered by the Editable column
 * @method array findByTs(string $TS) Return FlFishingdetails objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFlFishingdetailsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFlFishingdetailsQuery object.
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
            $modelName = 'FlFishingdetails';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FlFishingdetailsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FlFishingdetailsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FlFishingdetailsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FlFishingdetailsQuery) {
            return $criteria;
        }
        $query = new FlFishingdetailsQuery(null, null, $modelAlias);

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
     * @return   FlFishingdetails|FlFishingdetails[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FlFishingdetailsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FlFishingdetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 FlFishingdetails A model object, or null if the key is not found
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
     * @return                 FlFishingdetails A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `LossCode`, `FishingStageDetail`, `FishingMethod`, `OtherFishingMethod`, `FishingGearInWater`, `HoursUntilLanding`, `StorageMethodBoat`, `Editable`, `TS` FROM `fl_fishingdetails` WHERE `LossCode` = :p0';
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
            $obj = new FlFishingdetails();
            $obj->hydrate($row);
            FlFishingdetailsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return FlFishingdetails|FlFishingdetails[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|FlFishingdetails[]|mixed the list of results, formatted by the current formatter
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
     * @return FlFishingdetailsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FlFishingdetailsPeer::LOSSCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FlFishingdetailsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FlFishingdetailsPeer::LOSSCODE, $keys, Criteria::IN);
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
     * @return FlFishingdetailsQuery The current query, for fluid interface
     */
    public function filterByLosscode($losscode = null, $comparison = null)
    {
        if (is_array($losscode)) {
            $useMinMax = false;
            if (isset($losscode['min'])) {
                $this->addUsingAlias(FlFishingdetailsPeer::LOSSCODE, $losscode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($losscode['max'])) {
                $this->addUsingAlias(FlFishingdetailsPeer::LOSSCODE, $losscode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlFishingdetailsPeer::LOSSCODE, $losscode, $comparison);
    }

    /**
     * Filter the query on the FishingStageDetail column
     *
     * Example usage:
     * <code>
     * $query->filterByFishingstagedetail('fooValue');   // WHERE FishingStageDetail = 'fooValue'
     * $query->filterByFishingstagedetail('%fooValue%'); // WHERE FishingStageDetail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fishingstagedetail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlFishingdetailsQuery The current query, for fluid interface
     */
    public function filterByFishingstagedetail($fishingstagedetail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fishingstagedetail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fishingstagedetail)) {
                $fishingstagedetail = str_replace('*', '%', $fishingstagedetail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlFishingdetailsPeer::FISHINGSTAGEDETAIL, $fishingstagedetail, $comparison);
    }

    /**
     * Filter the query on the FishingMethod column
     *
     * Example usage:
     * <code>
     * $query->filterByFishingmethod('fooValue');   // WHERE FishingMethod = 'fooValue'
     * $query->filterByFishingmethod('%fooValue%'); // WHERE FishingMethod LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fishingmethod The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlFishingdetailsQuery The current query, for fluid interface
     */
    public function filterByFishingmethod($fishingmethod = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fishingmethod)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fishingmethod)) {
                $fishingmethod = str_replace('*', '%', $fishingmethod);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlFishingdetailsPeer::FISHINGMETHOD, $fishingmethod, $comparison);
    }

    /**
     * Filter the query on the OtherFishingMethod column
     *
     * Example usage:
     * <code>
     * $query->filterByOtherfishingmethod('fooValue');   // WHERE OtherFishingMethod = 'fooValue'
     * $query->filterByOtherfishingmethod('%fooValue%'); // WHERE OtherFishingMethod LIKE '%fooValue%'
     * </code>
     *
     * @param     string $otherfishingmethod The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlFishingdetailsQuery The current query, for fluid interface
     */
    public function filterByOtherfishingmethod($otherfishingmethod = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($otherfishingmethod)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $otherfishingmethod)) {
                $otherfishingmethod = str_replace('*', '%', $otherfishingmethod);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlFishingdetailsPeer::OTHERFISHINGMETHOD, $otherfishingmethod, $comparison);
    }

    /**
     * Filter the query on the FishingGearInWater column
     *
     * Example usage:
     * <code>
     * $query->filterByFishinggearinwater('fooValue');   // WHERE FishingGearInWater = 'fooValue'
     * $query->filterByFishinggearinwater('%fooValue%'); // WHERE FishingGearInWater LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fishinggearinwater The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlFishingdetailsQuery The current query, for fluid interface
     */
    public function filterByFishinggearinwater($fishinggearinwater = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fishinggearinwater)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fishinggearinwater)) {
                $fishinggearinwater = str_replace('*', '%', $fishinggearinwater);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlFishingdetailsPeer::FISHINGGEARINWATER, $fishinggearinwater, $comparison);
    }

    /**
     * Filter the query on the HoursUntilLanding column
     *
     * Example usage:
     * <code>
     * $query->filterByHoursuntillanding('fooValue');   // WHERE HoursUntilLanding = 'fooValue'
     * $query->filterByHoursuntillanding('%fooValue%'); // WHERE HoursUntilLanding LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hoursuntillanding The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlFishingdetailsQuery The current query, for fluid interface
     */
    public function filterByHoursuntillanding($hoursuntillanding = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hoursuntillanding)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hoursuntillanding)) {
                $hoursuntillanding = str_replace('*', '%', $hoursuntillanding);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlFishingdetailsPeer::HOURSUNTILLANDING, $hoursuntillanding, $comparison);
    }

    /**
     * Filter the query on the StorageMethodBoat column
     *
     * Example usage:
     * <code>
     * $query->filterByStoragemethodboat('fooValue');   // WHERE StorageMethodBoat = 'fooValue'
     * $query->filterByStoragemethodboat('%fooValue%'); // WHERE StorageMethodBoat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $storagemethodboat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlFishingdetailsQuery The current query, for fluid interface
     */
    public function filterByStoragemethodboat($storagemethodboat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($storagemethodboat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $storagemethodboat)) {
                $storagemethodboat = str_replace('*', '%', $storagemethodboat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlFishingdetailsPeer::STORAGEMETHODBOAT, $storagemethodboat, $comparison);
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
     * @return FlFishingdetailsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FlFishingdetailsPeer::EDITABLE, $editable, $comparison);
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
     * @return FlFishingdetailsQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(FlFishingdetailsPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(FlFishingdetailsPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlFishingdetailsPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   FlFishingdetails $flFishingdetails Object to remove from the list of results
     *
     * @return FlFishingdetailsQuery The current query, for fluid interface
     */
    public function prune($flFishingdetails = null)
    {
        if ($flFishingdetails) {
            $this->addUsingAlias(FlFishingdetailsPeer::LOSSCODE, $flFishingdetails->getLosscode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
