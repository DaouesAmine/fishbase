<?php


/**
 * Base class that represents a query for the 'miniessay' table.
 *
 *
 *
 * @method MiniessayQuery orderByEssayid($order = Criteria::ASC) Order by the EssayID column
 * @method MiniessayQuery orderByMiniessay($order = Criteria::ASC) Order by the MiniEssay column
 * @method MiniessayQuery orderByMiniessaymore($order = Criteria::ASC) Order by the MiniEssayMore column
 * @method MiniessayQuery orderByMiniessaymore1($order = Criteria::ASC) Order by the MiniEssayMore1 column
 * @method MiniessayQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method MiniessayQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method MiniessayQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method MiniessayQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method MiniessayQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method MiniessayQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method MiniessayQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method MiniessayQuery groupByEssayid() Group by the EssayID column
 * @method MiniessayQuery groupByMiniessay() Group by the MiniEssay column
 * @method MiniessayQuery groupByMiniessaymore() Group by the MiniEssayMore column
 * @method MiniessayQuery groupByMiniessaymore1() Group by the MiniEssayMore1 column
 * @method MiniessayQuery groupByEntered() Group by the Entered column
 * @method MiniessayQuery groupByDateentered() Group by the DateEntered column
 * @method MiniessayQuery groupByModified() Group by the Modified column
 * @method MiniessayQuery groupByDatemodified() Group by the DateModified column
 * @method MiniessayQuery groupByExpert() Group by the Expert column
 * @method MiniessayQuery groupByDatechecked() Group by the DateChecked column
 * @method MiniessayQuery groupByTs() Group by the TS column
 *
 * @method MiniessayQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MiniessayQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MiniessayQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Miniessay findOne(PropelPDO $con = null) Return the first Miniessay matching the query
 * @method Miniessay findOneOrCreate(PropelPDO $con = null) Return the first Miniessay matching the query, or a new Miniessay object populated from the query conditions when no match is found
 *
 * @method Miniessay findOneByMiniessay(string $MiniEssay) Return the first Miniessay filtered by the MiniEssay column
 * @method Miniessay findOneByMiniessaymore(string $MiniEssayMore) Return the first Miniessay filtered by the MiniEssayMore column
 * @method Miniessay findOneByMiniessaymore1(string $MiniEssayMore1) Return the first Miniessay filtered by the MiniEssayMore1 column
 * @method Miniessay findOneByEntered(int $Entered) Return the first Miniessay filtered by the Entered column
 * @method Miniessay findOneByDateentered(string $DateEntered) Return the first Miniessay filtered by the DateEntered column
 * @method Miniessay findOneByModified(int $Modified) Return the first Miniessay filtered by the Modified column
 * @method Miniessay findOneByDatemodified(string $DateModified) Return the first Miniessay filtered by the DateModified column
 * @method Miniessay findOneByExpert(int $Expert) Return the first Miniessay filtered by the Expert column
 * @method Miniessay findOneByDatechecked(string $DateChecked) Return the first Miniessay filtered by the DateChecked column
 * @method Miniessay findOneByTs(string $TS) Return the first Miniessay filtered by the TS column
 *
 * @method array findByEssayid(int $EssayID) Return Miniessay objects filtered by the EssayID column
 * @method array findByMiniessay(string $MiniEssay) Return Miniessay objects filtered by the MiniEssay column
 * @method array findByMiniessaymore(string $MiniEssayMore) Return Miniessay objects filtered by the MiniEssayMore column
 * @method array findByMiniessaymore1(string $MiniEssayMore1) Return Miniessay objects filtered by the MiniEssayMore1 column
 * @method array findByEntered(int $Entered) Return Miniessay objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Miniessay objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Miniessay objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Miniessay objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Miniessay objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Miniessay objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Miniessay objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMiniessayQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMiniessayQuery object.
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
            $modelName = 'Miniessay';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MiniessayQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MiniessayQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MiniessayQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MiniessayQuery) {
            return $criteria;
        }
        $query = new MiniessayQuery(null, null, $modelAlias);

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
     * @return   Miniessay|Miniessay[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MiniessayPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MiniessayPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Miniessay A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByEssayid($key, $con = null)
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
     * @return                 Miniessay A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `EssayID`, `MiniEssay`, `MiniEssayMore`, `MiniEssayMore1`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `miniessay` WHERE `EssayID` = :p0';
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
            $obj = new Miniessay();
            $obj->hydrate($row);
            MiniessayPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Miniessay|Miniessay[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Miniessay[]|mixed the list of results, formatted by the current formatter
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
     * @return MiniessayQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MiniessayPeer::ESSAYID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MiniessayQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MiniessayPeer::ESSAYID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the EssayID column
     *
     * Example usage:
     * <code>
     * $query->filterByEssayid(1234); // WHERE EssayID = 1234
     * $query->filterByEssayid(array(12, 34)); // WHERE EssayID IN (12, 34)
     * $query->filterByEssayid(array('min' => 12)); // WHERE EssayID >= 12
     * $query->filterByEssayid(array('max' => 12)); // WHERE EssayID <= 12
     * </code>
     *
     * @param     mixed $essayid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MiniessayQuery The current query, for fluid interface
     */
    public function filterByEssayid($essayid = null, $comparison = null)
    {
        if (is_array($essayid)) {
            $useMinMax = false;
            if (isset($essayid['min'])) {
                $this->addUsingAlias(MiniessayPeer::ESSAYID, $essayid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($essayid['max'])) {
                $this->addUsingAlias(MiniessayPeer::ESSAYID, $essayid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MiniessayPeer::ESSAYID, $essayid, $comparison);
    }

    /**
     * Filter the query on the MiniEssay column
     *
     * Example usage:
     * <code>
     * $query->filterByMiniessay('fooValue');   // WHERE MiniEssay = 'fooValue'
     * $query->filterByMiniessay('%fooValue%'); // WHERE MiniEssay LIKE '%fooValue%'
     * </code>
     *
     * @param     string $miniessay The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MiniessayQuery The current query, for fluid interface
     */
    public function filterByMiniessay($miniessay = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($miniessay)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $miniessay)) {
                $miniessay = str_replace('*', '%', $miniessay);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MiniessayPeer::MINIESSAY, $miniessay, $comparison);
    }

    /**
     * Filter the query on the MiniEssayMore column
     *
     * Example usage:
     * <code>
     * $query->filterByMiniessaymore('fooValue');   // WHERE MiniEssayMore = 'fooValue'
     * $query->filterByMiniessaymore('%fooValue%'); // WHERE MiniEssayMore LIKE '%fooValue%'
     * </code>
     *
     * @param     string $miniessaymore The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MiniessayQuery The current query, for fluid interface
     */
    public function filterByMiniessaymore($miniessaymore = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($miniessaymore)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $miniessaymore)) {
                $miniessaymore = str_replace('*', '%', $miniessaymore);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MiniessayPeer::MINIESSAYMORE, $miniessaymore, $comparison);
    }

    /**
     * Filter the query on the MiniEssayMore1 column
     *
     * Example usage:
     * <code>
     * $query->filterByMiniessaymore1('fooValue');   // WHERE MiniEssayMore1 = 'fooValue'
     * $query->filterByMiniessaymore1('%fooValue%'); // WHERE MiniEssayMore1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $miniessaymore1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MiniessayQuery The current query, for fluid interface
     */
    public function filterByMiniessaymore1($miniessaymore1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($miniessaymore1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $miniessaymore1)) {
                $miniessaymore1 = str_replace('*', '%', $miniessaymore1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MiniessayPeer::MINIESSAYMORE1, $miniessaymore1, $comparison);
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
     * @return MiniessayQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(MiniessayPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(MiniessayPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MiniessayPeer::ENTERED, $entered, $comparison);
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
     * @return MiniessayQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(MiniessayPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(MiniessayPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MiniessayPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return MiniessayQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(MiniessayPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(MiniessayPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MiniessayPeer::MODIFIED, $modified, $comparison);
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
     * @return MiniessayQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(MiniessayPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(MiniessayPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MiniessayPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return MiniessayQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(MiniessayPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(MiniessayPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MiniessayPeer::EXPERT, $expert, $comparison);
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
     * @return MiniessayQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(MiniessayPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(MiniessayPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MiniessayPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return MiniessayQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(MiniessayPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(MiniessayPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MiniessayPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Miniessay $miniessay Object to remove from the list of results
     *
     * @return MiniessayQuery The current query, for fluid interface
     */
    public function prune($miniessay = null)
    {
        if ($miniessay) {
            $this->addUsingAlias(MiniessayPeer::ESSAYID, $miniessay->getEssayid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
