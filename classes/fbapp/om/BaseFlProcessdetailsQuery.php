<?php


/**
 * Base class that represents a query for the 'fl_processdetails' table.
 *
 *
 *
 * @method FlProcessdetailsQuery orderByLosscode($order = Criteria::ASC) Order by the LossCode column
 * @method FlProcessdetailsQuery orderByProcess($order = Criteria::ASC) Order by the Process column
 * @method FlProcessdetailsQuery orderByOtherprocess($order = Criteria::ASC) Order by the OtherProcess column
 * @method FlProcessdetailsQuery orderByTimetocompleteprocess($order = Criteria::ASC) Order by the TimeToCompleteProcess column
 * @method FlProcessdetailsQuery orderBySpecialtreatments($order = Criteria::ASC) Order by the SpecialTreatments column
 * @method FlProcessdetailsQuery orderByEditable($order = Criteria::ASC) Order by the Editable column
 * @method FlProcessdetailsQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method FlProcessdetailsQuery groupByLosscode() Group by the LossCode column
 * @method FlProcessdetailsQuery groupByProcess() Group by the Process column
 * @method FlProcessdetailsQuery groupByOtherprocess() Group by the OtherProcess column
 * @method FlProcessdetailsQuery groupByTimetocompleteprocess() Group by the TimeToCompleteProcess column
 * @method FlProcessdetailsQuery groupBySpecialtreatments() Group by the SpecialTreatments column
 * @method FlProcessdetailsQuery groupByEditable() Group by the Editable column
 * @method FlProcessdetailsQuery groupByTs() Group by the TS column
 *
 * @method FlProcessdetailsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FlProcessdetailsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FlProcessdetailsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FlProcessdetails findOne(PropelPDO $con = null) Return the first FlProcessdetails matching the query
 * @method FlProcessdetails findOneOrCreate(PropelPDO $con = null) Return the first FlProcessdetails matching the query, or a new FlProcessdetails object populated from the query conditions when no match is found
 *
 * @method FlProcessdetails findOneByProcess(string $Process) Return the first FlProcessdetails filtered by the Process column
 * @method FlProcessdetails findOneByOtherprocess(string $OtherProcess) Return the first FlProcessdetails filtered by the OtherProcess column
 * @method FlProcessdetails findOneByTimetocompleteprocess(double $TimeToCompleteProcess) Return the first FlProcessdetails filtered by the TimeToCompleteProcess column
 * @method FlProcessdetails findOneBySpecialtreatments(string $SpecialTreatments) Return the first FlProcessdetails filtered by the SpecialTreatments column
 * @method FlProcessdetails findOneByEditable(string $Editable) Return the first FlProcessdetails filtered by the Editable column
 * @method FlProcessdetails findOneByTs(string $TS) Return the first FlProcessdetails filtered by the TS column
 *
 * @method array findByLosscode(int $LossCode) Return FlProcessdetails objects filtered by the LossCode column
 * @method array findByProcess(string $Process) Return FlProcessdetails objects filtered by the Process column
 * @method array findByOtherprocess(string $OtherProcess) Return FlProcessdetails objects filtered by the OtherProcess column
 * @method array findByTimetocompleteprocess(double $TimeToCompleteProcess) Return FlProcessdetails objects filtered by the TimeToCompleteProcess column
 * @method array findBySpecialtreatments(string $SpecialTreatments) Return FlProcessdetails objects filtered by the SpecialTreatments column
 * @method array findByEditable(string $Editable) Return FlProcessdetails objects filtered by the Editable column
 * @method array findByTs(string $TS) Return FlProcessdetails objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFlProcessdetailsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFlProcessdetailsQuery object.
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
            $modelName = 'FlProcessdetails';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FlProcessdetailsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FlProcessdetailsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FlProcessdetailsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FlProcessdetailsQuery) {
            return $criteria;
        }
        $query = new FlProcessdetailsQuery(null, null, $modelAlias);

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
     * @return   FlProcessdetails|FlProcessdetails[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FlProcessdetailsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FlProcessdetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 FlProcessdetails A model object, or null if the key is not found
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
     * @return                 FlProcessdetails A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `LossCode`, `Process`, `OtherProcess`, `TimeToCompleteProcess`, `SpecialTreatments`, `Editable`, `TS` FROM `fl_processdetails` WHERE `LossCode` = :p0';
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
            $obj = new FlProcessdetails();
            $obj->hydrate($row);
            FlProcessdetailsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return FlProcessdetails|FlProcessdetails[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|FlProcessdetails[]|mixed the list of results, formatted by the current formatter
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
     * @return FlProcessdetailsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FlProcessdetailsPeer::LOSSCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FlProcessdetailsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FlProcessdetailsPeer::LOSSCODE, $keys, Criteria::IN);
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
     * @return FlProcessdetailsQuery The current query, for fluid interface
     */
    public function filterByLosscode($losscode = null, $comparison = null)
    {
        if (is_array($losscode)) {
            $useMinMax = false;
            if (isset($losscode['min'])) {
                $this->addUsingAlias(FlProcessdetailsPeer::LOSSCODE, $losscode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($losscode['max'])) {
                $this->addUsingAlias(FlProcessdetailsPeer::LOSSCODE, $losscode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlProcessdetailsPeer::LOSSCODE, $losscode, $comparison);
    }

    /**
     * Filter the query on the Process column
     *
     * Example usage:
     * <code>
     * $query->filterByProcess('fooValue');   // WHERE Process = 'fooValue'
     * $query->filterByProcess('%fooValue%'); // WHERE Process LIKE '%fooValue%'
     * </code>
     *
     * @param     string $process The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlProcessdetailsQuery The current query, for fluid interface
     */
    public function filterByProcess($process = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($process)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $process)) {
                $process = str_replace('*', '%', $process);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlProcessdetailsPeer::PROCESS, $process, $comparison);
    }

    /**
     * Filter the query on the OtherProcess column
     *
     * Example usage:
     * <code>
     * $query->filterByOtherprocess('fooValue');   // WHERE OtherProcess = 'fooValue'
     * $query->filterByOtherprocess('%fooValue%'); // WHERE OtherProcess LIKE '%fooValue%'
     * </code>
     *
     * @param     string $otherprocess The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlProcessdetailsQuery The current query, for fluid interface
     */
    public function filterByOtherprocess($otherprocess = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($otherprocess)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $otherprocess)) {
                $otherprocess = str_replace('*', '%', $otherprocess);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlProcessdetailsPeer::OTHERPROCESS, $otherprocess, $comparison);
    }

    /**
     * Filter the query on the TimeToCompleteProcess column
     *
     * Example usage:
     * <code>
     * $query->filterByTimetocompleteprocess(1234); // WHERE TimeToCompleteProcess = 1234
     * $query->filterByTimetocompleteprocess(array(12, 34)); // WHERE TimeToCompleteProcess IN (12, 34)
     * $query->filterByTimetocompleteprocess(array('min' => 12)); // WHERE TimeToCompleteProcess >= 12
     * $query->filterByTimetocompleteprocess(array('max' => 12)); // WHERE TimeToCompleteProcess <= 12
     * </code>
     *
     * @param     mixed $timetocompleteprocess The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlProcessdetailsQuery The current query, for fluid interface
     */
    public function filterByTimetocompleteprocess($timetocompleteprocess = null, $comparison = null)
    {
        if (is_array($timetocompleteprocess)) {
            $useMinMax = false;
            if (isset($timetocompleteprocess['min'])) {
                $this->addUsingAlias(FlProcessdetailsPeer::TIMETOCOMPLETEPROCESS, $timetocompleteprocess['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timetocompleteprocess['max'])) {
                $this->addUsingAlias(FlProcessdetailsPeer::TIMETOCOMPLETEPROCESS, $timetocompleteprocess['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlProcessdetailsPeer::TIMETOCOMPLETEPROCESS, $timetocompleteprocess, $comparison);
    }

    /**
     * Filter the query on the SpecialTreatments column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecialtreatments('fooValue');   // WHERE SpecialTreatments = 'fooValue'
     * $query->filterBySpecialtreatments('%fooValue%'); // WHERE SpecialTreatments LIKE '%fooValue%'
     * </code>
     *
     * @param     string $specialtreatments The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlProcessdetailsQuery The current query, for fluid interface
     */
    public function filterBySpecialtreatments($specialtreatments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($specialtreatments)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $specialtreatments)) {
                $specialtreatments = str_replace('*', '%', $specialtreatments);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlProcessdetailsPeer::SPECIALTREATMENTS, $specialtreatments, $comparison);
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
     * @return FlProcessdetailsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FlProcessdetailsPeer::EDITABLE, $editable, $comparison);
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
     * @return FlProcessdetailsQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(FlProcessdetailsPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(FlProcessdetailsPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlProcessdetailsPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   FlProcessdetails $flProcessdetails Object to remove from the list of results
     *
     * @return FlProcessdetailsQuery The current query, for fluid interface
     */
    public function prune($flProcessdetails = null)
    {
        if ($flProcessdetails) {
            $this->addUsingAlias(FlProcessdetailsPeer::LOSSCODE, $flProcessdetails->getLosscode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
