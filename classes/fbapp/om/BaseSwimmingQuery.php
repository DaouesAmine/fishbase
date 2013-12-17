<?php


/**
 * Base class that represents a query for the 'swimming' table.
 *
 *
 *
 * @method SwimmingQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method SwimmingQuery orderBySwimrefmain($order = Criteria::ASC) Order by the SwimRefMain column
 * @method SwimmingQuery orderByAdulttype($order = Criteria::ASC) Order by the AdultType column
 * @method SwimmingQuery orderByAdultmode($order = Criteria::ASC) Order by the AdultMode column
 * @method SwimmingQuery orderByAdultref($order = Criteria::ASC) Order by the AdultRef column
 * @method SwimmingQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method SwimmingQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method SwimmingQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method SwimmingQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method SwimmingQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method SwimmingQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method SwimmingQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method SwimmingQuery orderByAspectratio($order = Criteria::ASC) Order by the AspectRatio column
 * @method SwimmingQuery orderByAspectref($order = Criteria::ASC) Order by the AspectRef column
 * @method SwimmingQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method SwimmingQuery groupBySpeccode() Group by the SpecCode column
 * @method SwimmingQuery groupBySwimrefmain() Group by the SwimRefMain column
 * @method SwimmingQuery groupByAdulttype() Group by the AdultType column
 * @method SwimmingQuery groupByAdultmode() Group by the AdultMode column
 * @method SwimmingQuery groupByAdultref() Group by the AdultRef column
 * @method SwimmingQuery groupByComment() Group by the Comment column
 * @method SwimmingQuery groupByEntered() Group by the Entered column
 * @method SwimmingQuery groupByDateentered() Group by the DateEntered column
 * @method SwimmingQuery groupByModified() Group by the Modified column
 * @method SwimmingQuery groupByDatemodified() Group by the DateModified column
 * @method SwimmingQuery groupByExpert() Group by the Expert column
 * @method SwimmingQuery groupByDatechecked() Group by the DateChecked column
 * @method SwimmingQuery groupByAspectratio() Group by the AspectRatio column
 * @method SwimmingQuery groupByAspectref() Group by the AspectRef column
 * @method SwimmingQuery groupByTs() Group by the TS column
 *
 * @method SwimmingQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SwimmingQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SwimmingQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Swimming findOne(PropelPDO $con = null) Return the first Swimming matching the query
 * @method Swimming findOneOrCreate(PropelPDO $con = null) Return the first Swimming matching the query, or a new Swimming object populated from the query conditions when no match is found
 *
 * @method Swimming findOneBySwimrefmain(int $SwimRefMain) Return the first Swimming filtered by the SwimRefMain column
 * @method Swimming findOneByAdulttype(string $AdultType) Return the first Swimming filtered by the AdultType column
 * @method Swimming findOneByAdultmode(string $AdultMode) Return the first Swimming filtered by the AdultMode column
 * @method Swimming findOneByAdultref(int $AdultRef) Return the first Swimming filtered by the AdultRef column
 * @method Swimming findOneByComment(string $Comment) Return the first Swimming filtered by the Comment column
 * @method Swimming findOneByEntered(int $Entered) Return the first Swimming filtered by the Entered column
 * @method Swimming findOneByDateentered(string $DateEntered) Return the first Swimming filtered by the DateEntered column
 * @method Swimming findOneByModified(int $Modified) Return the first Swimming filtered by the Modified column
 * @method Swimming findOneByDatemodified(string $DateModified) Return the first Swimming filtered by the DateModified column
 * @method Swimming findOneByExpert(int $Expert) Return the first Swimming filtered by the Expert column
 * @method Swimming findOneByDatechecked(string $DateChecked) Return the first Swimming filtered by the DateChecked column
 * @method Swimming findOneByAspectratio(double $AspectRatio) Return the first Swimming filtered by the AspectRatio column
 * @method Swimming findOneByAspectref(int $AspectRef) Return the first Swimming filtered by the AspectRef column
 * @method Swimming findOneByTs(string $TS) Return the first Swimming filtered by the TS column
 *
 * @method array findBySpeccode(int $SpecCode) Return Swimming objects filtered by the SpecCode column
 * @method array findBySwimrefmain(int $SwimRefMain) Return Swimming objects filtered by the SwimRefMain column
 * @method array findByAdulttype(string $AdultType) Return Swimming objects filtered by the AdultType column
 * @method array findByAdultmode(string $AdultMode) Return Swimming objects filtered by the AdultMode column
 * @method array findByAdultref(int $AdultRef) Return Swimming objects filtered by the AdultRef column
 * @method array findByComment(string $Comment) Return Swimming objects filtered by the Comment column
 * @method array findByEntered(int $Entered) Return Swimming objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Swimming objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Swimming objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Swimming objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Swimming objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Swimming objects filtered by the DateChecked column
 * @method array findByAspectratio(double $AspectRatio) Return Swimming objects filtered by the AspectRatio column
 * @method array findByAspectref(int $AspectRef) Return Swimming objects filtered by the AspectRef column
 * @method array findByTs(string $TS) Return Swimming objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseSwimmingQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSwimmingQuery object.
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
            $modelName = 'Swimming';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SwimmingQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SwimmingQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SwimmingQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SwimmingQuery) {
            return $criteria;
        }
        $query = new SwimmingQuery(null, null, $modelAlias);

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
     * @return   Swimming|Swimming[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SwimmingPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SwimmingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Swimming A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneBySpeccode($key, $con = null)
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
     * @return                 Swimming A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `SpecCode`, `SwimRefMain`, `AdultType`, `AdultMode`, `AdultRef`, `Comment`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `AspectRatio`, `AspectRef`, `TS` FROM `swimming` WHERE `SpecCode` = :p0';
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
            $obj = new Swimming();
            $obj->hydrate($row);
            SwimmingPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Swimming|Swimming[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Swimming[]|mixed the list of results, formatted by the current formatter
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
     * @return SwimmingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SwimmingPeer::SPECCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SwimmingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SwimmingPeer::SPECCODE, $keys, Criteria::IN);
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
     * @return SwimmingQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(SwimmingPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(SwimmingPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SwimmingPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the SwimRefMain column
     *
     * Example usage:
     * <code>
     * $query->filterBySwimrefmain(1234); // WHERE SwimRefMain = 1234
     * $query->filterBySwimrefmain(array(12, 34)); // WHERE SwimRefMain IN (12, 34)
     * $query->filterBySwimrefmain(array('min' => 12)); // WHERE SwimRefMain >= 12
     * $query->filterBySwimrefmain(array('max' => 12)); // WHERE SwimRefMain <= 12
     * </code>
     *
     * @param     mixed $swimrefmain The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SwimmingQuery The current query, for fluid interface
     */
    public function filterBySwimrefmain($swimrefmain = null, $comparison = null)
    {
        if (is_array($swimrefmain)) {
            $useMinMax = false;
            if (isset($swimrefmain['min'])) {
                $this->addUsingAlias(SwimmingPeer::SWIMREFMAIN, $swimrefmain['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($swimrefmain['max'])) {
                $this->addUsingAlias(SwimmingPeer::SWIMREFMAIN, $swimrefmain['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SwimmingPeer::SWIMREFMAIN, $swimrefmain, $comparison);
    }

    /**
     * Filter the query on the AdultType column
     *
     * Example usage:
     * <code>
     * $query->filterByAdulttype('fooValue');   // WHERE AdultType = 'fooValue'
     * $query->filterByAdulttype('%fooValue%'); // WHERE AdultType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adulttype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SwimmingQuery The current query, for fluid interface
     */
    public function filterByAdulttype($adulttype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adulttype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adulttype)) {
                $adulttype = str_replace('*', '%', $adulttype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SwimmingPeer::ADULTTYPE, $adulttype, $comparison);
    }

    /**
     * Filter the query on the AdultMode column
     *
     * Example usage:
     * <code>
     * $query->filterByAdultmode('fooValue');   // WHERE AdultMode = 'fooValue'
     * $query->filterByAdultmode('%fooValue%'); // WHERE AdultMode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adultmode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SwimmingQuery The current query, for fluid interface
     */
    public function filterByAdultmode($adultmode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adultmode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adultmode)) {
                $adultmode = str_replace('*', '%', $adultmode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SwimmingPeer::ADULTMODE, $adultmode, $comparison);
    }

    /**
     * Filter the query on the AdultRef column
     *
     * Example usage:
     * <code>
     * $query->filterByAdultref(1234); // WHERE AdultRef = 1234
     * $query->filterByAdultref(array(12, 34)); // WHERE AdultRef IN (12, 34)
     * $query->filterByAdultref(array('min' => 12)); // WHERE AdultRef >= 12
     * $query->filterByAdultref(array('max' => 12)); // WHERE AdultRef <= 12
     * </code>
     *
     * @param     mixed $adultref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SwimmingQuery The current query, for fluid interface
     */
    public function filterByAdultref($adultref = null, $comparison = null)
    {
        if (is_array($adultref)) {
            $useMinMax = false;
            if (isset($adultref['min'])) {
                $this->addUsingAlias(SwimmingPeer::ADULTREF, $adultref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($adultref['max'])) {
                $this->addUsingAlias(SwimmingPeer::ADULTREF, $adultref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SwimmingPeer::ADULTREF, $adultref, $comparison);
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
     * @return SwimmingQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SwimmingPeer::COMMENT, $comment, $comparison);
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
     * @return SwimmingQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(SwimmingPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(SwimmingPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SwimmingPeer::ENTERED, $entered, $comparison);
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
     * @return SwimmingQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(SwimmingPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(SwimmingPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SwimmingPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return SwimmingQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(SwimmingPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(SwimmingPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SwimmingPeer::MODIFIED, $modified, $comparison);
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
     * @return SwimmingQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(SwimmingPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(SwimmingPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SwimmingPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return SwimmingQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(SwimmingPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(SwimmingPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SwimmingPeer::EXPERT, $expert, $comparison);
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
     * @return SwimmingQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(SwimmingPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(SwimmingPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SwimmingPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the AspectRatio column
     *
     * Example usage:
     * <code>
     * $query->filterByAspectratio(1234); // WHERE AspectRatio = 1234
     * $query->filterByAspectratio(array(12, 34)); // WHERE AspectRatio IN (12, 34)
     * $query->filterByAspectratio(array('min' => 12)); // WHERE AspectRatio >= 12
     * $query->filterByAspectratio(array('max' => 12)); // WHERE AspectRatio <= 12
     * </code>
     *
     * @param     mixed $aspectratio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SwimmingQuery The current query, for fluid interface
     */
    public function filterByAspectratio($aspectratio = null, $comparison = null)
    {
        if (is_array($aspectratio)) {
            $useMinMax = false;
            if (isset($aspectratio['min'])) {
                $this->addUsingAlias(SwimmingPeer::ASPECTRATIO, $aspectratio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aspectratio['max'])) {
                $this->addUsingAlias(SwimmingPeer::ASPECTRATIO, $aspectratio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SwimmingPeer::ASPECTRATIO, $aspectratio, $comparison);
    }

    /**
     * Filter the query on the AspectRef column
     *
     * Example usage:
     * <code>
     * $query->filterByAspectref(1234); // WHERE AspectRef = 1234
     * $query->filterByAspectref(array(12, 34)); // WHERE AspectRef IN (12, 34)
     * $query->filterByAspectref(array('min' => 12)); // WHERE AspectRef >= 12
     * $query->filterByAspectref(array('max' => 12)); // WHERE AspectRef <= 12
     * </code>
     *
     * @param     mixed $aspectref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SwimmingQuery The current query, for fluid interface
     */
    public function filterByAspectref($aspectref = null, $comparison = null)
    {
        if (is_array($aspectref)) {
            $useMinMax = false;
            if (isset($aspectref['min'])) {
                $this->addUsingAlias(SwimmingPeer::ASPECTREF, $aspectref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aspectref['max'])) {
                $this->addUsingAlias(SwimmingPeer::ASPECTREF, $aspectref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SwimmingPeer::ASPECTREF, $aspectref, $comparison);
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
     * @return SwimmingQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(SwimmingPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(SwimmingPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SwimmingPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Swimming $swimming Object to remove from the list of results
     *
     * @return SwimmingQuery The current query, for fluid interface
     */
    public function prune($swimming = null)
    {
        if ($swimming) {
            $this->addUsingAlias(SwimmingPeer::SPECCODE, $swimming->getSpeccode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
