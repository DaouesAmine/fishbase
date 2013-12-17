<?php


/**
 * Base class that represents a query for the 'seafoodadref' table.
 *
 *
 *
 * @method SeafoodadrefQuery orderByGuideid($order = Criteria::ASC) Order by the GuideID column
 * @method SeafoodadrefQuery orderByGuidename($order = Criteria::ASC) Order by the GuideName column
 * @method SeafoodadrefQuery orderByGuideurl($order = Criteria::ASC) Order by the GuideURL column
 * @method SeafoodadrefQuery orderByCCodeWeb($order = Criteria::ASC) Order by the c_code_web column
 * @method SeafoodadrefQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method SeafoodadrefQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method SeafoodadrefQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method SeafoodadrefQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method SeafoodadrefQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method SeafoodadrefQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 *
 * @method SeafoodadrefQuery groupByGuideid() Group by the GuideID column
 * @method SeafoodadrefQuery groupByGuidename() Group by the GuideName column
 * @method SeafoodadrefQuery groupByGuideurl() Group by the GuideURL column
 * @method SeafoodadrefQuery groupByCCodeWeb() Group by the c_code_web column
 * @method SeafoodadrefQuery groupByEntered() Group by the Entered column
 * @method SeafoodadrefQuery groupByDateentered() Group by the DateEntered column
 * @method SeafoodadrefQuery groupByModified() Group by the Modified column
 * @method SeafoodadrefQuery groupByDatemodified() Group by the DateModified column
 * @method SeafoodadrefQuery groupByExpert() Group by the Expert column
 * @method SeafoodadrefQuery groupByDatechecked() Group by the DateChecked column
 *
 * @method SeafoodadrefQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SeafoodadrefQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SeafoodadrefQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Seafoodadref findOne(PropelPDO $con = null) Return the first Seafoodadref matching the query
 * @method Seafoodadref findOneOrCreate(PropelPDO $con = null) Return the first Seafoodadref matching the query, or a new Seafoodadref object populated from the query conditions when no match is found
 *
 * @method Seafoodadref findOneByGuideid(int $GuideID) Return the first Seafoodadref filtered by the GuideID column
 * @method Seafoodadref findOneByGuideurl(string $GuideURL) Return the first Seafoodadref filtered by the GuideURL column
 * @method Seafoodadref findOneByCCodeWeb(string $c_code_web) Return the first Seafoodadref filtered by the c_code_web column
 * @method Seafoodadref findOneByEntered(int $Entered) Return the first Seafoodadref filtered by the Entered column
 * @method Seafoodadref findOneByDateentered(string $DateEntered) Return the first Seafoodadref filtered by the DateEntered column
 * @method Seafoodadref findOneByModified(int $Modified) Return the first Seafoodadref filtered by the Modified column
 * @method Seafoodadref findOneByDatemodified(string $DateModified) Return the first Seafoodadref filtered by the DateModified column
 * @method Seafoodadref findOneByExpert(int $Expert) Return the first Seafoodadref filtered by the Expert column
 * @method Seafoodadref findOneByDatechecked(string $DateChecked) Return the first Seafoodadref filtered by the DateChecked column
 *
 * @method array findByGuideid(int $GuideID) Return Seafoodadref objects filtered by the GuideID column
 * @method array findByGuidename(string $GuideName) Return Seafoodadref objects filtered by the GuideName column
 * @method array findByGuideurl(string $GuideURL) Return Seafoodadref objects filtered by the GuideURL column
 * @method array findByCCodeWeb(string $c_code_web) Return Seafoodadref objects filtered by the c_code_web column
 * @method array findByEntered(int $Entered) Return Seafoodadref objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Seafoodadref objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Seafoodadref objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Seafoodadref objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Seafoodadref objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Seafoodadref objects filtered by the DateChecked column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseSeafoodadrefQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSeafoodadrefQuery object.
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
            $modelName = 'Seafoodadref';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SeafoodadrefQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SeafoodadrefQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SeafoodadrefQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SeafoodadrefQuery) {
            return $criteria;
        }
        $query = new SeafoodadrefQuery(null, null, $modelAlias);

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
     * @return   Seafoodadref|Seafoodadref[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SeafoodadrefPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SeafoodadrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Seafoodadref A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByGuidename($key, $con = null)
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
     * @return                 Seafoodadref A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `GuideID`, `GuideName`, `GuideURL`, `c_code_web`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked` FROM `seafoodadref` WHERE `GuideName` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Seafoodadref();
            $obj->hydrate($row);
            SeafoodadrefPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Seafoodadref|Seafoodadref[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Seafoodadref[]|mixed the list of results, formatted by the current formatter
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
     * @return SeafoodadrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SeafoodadrefPeer::GUIDENAME, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SeafoodadrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SeafoodadrefPeer::GUIDENAME, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the GuideID column
     *
     * Example usage:
     * <code>
     * $query->filterByGuideid(1234); // WHERE GuideID = 1234
     * $query->filterByGuideid(array(12, 34)); // WHERE GuideID IN (12, 34)
     * $query->filterByGuideid(array('min' => 12)); // WHERE GuideID >= 12
     * $query->filterByGuideid(array('max' => 12)); // WHERE GuideID <= 12
     * </code>
     *
     * @param     mixed $guideid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SeafoodadrefQuery The current query, for fluid interface
     */
    public function filterByGuideid($guideid = null, $comparison = null)
    {
        if (is_array($guideid)) {
            $useMinMax = false;
            if (isset($guideid['min'])) {
                $this->addUsingAlias(SeafoodadrefPeer::GUIDEID, $guideid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($guideid['max'])) {
                $this->addUsingAlias(SeafoodadrefPeer::GUIDEID, $guideid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SeafoodadrefPeer::GUIDEID, $guideid, $comparison);
    }

    /**
     * Filter the query on the GuideName column
     *
     * Example usage:
     * <code>
     * $query->filterByGuidename('fooValue');   // WHERE GuideName = 'fooValue'
     * $query->filterByGuidename('%fooValue%'); // WHERE GuideName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $guidename The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SeafoodadrefQuery The current query, for fluid interface
     */
    public function filterByGuidename($guidename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($guidename)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $guidename)) {
                $guidename = str_replace('*', '%', $guidename);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SeafoodadrefPeer::GUIDENAME, $guidename, $comparison);
    }

    /**
     * Filter the query on the GuideURL column
     *
     * Example usage:
     * <code>
     * $query->filterByGuideurl('fooValue');   // WHERE GuideURL = 'fooValue'
     * $query->filterByGuideurl('%fooValue%'); // WHERE GuideURL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $guideurl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SeafoodadrefQuery The current query, for fluid interface
     */
    public function filterByGuideurl($guideurl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($guideurl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $guideurl)) {
                $guideurl = str_replace('*', '%', $guideurl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SeafoodadrefPeer::GUIDEURL, $guideurl, $comparison);
    }

    /**
     * Filter the query on the c_code_web column
     *
     * Example usage:
     * <code>
     * $query->filterByCCodeWeb('fooValue');   // WHERE c_code_web = 'fooValue'
     * $query->filterByCCodeWeb('%fooValue%'); // WHERE c_code_web LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cCodeWeb The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SeafoodadrefQuery The current query, for fluid interface
     */
    public function filterByCCodeWeb($cCodeWeb = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cCodeWeb)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cCodeWeb)) {
                $cCodeWeb = str_replace('*', '%', $cCodeWeb);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SeafoodadrefPeer::C_CODE_WEB, $cCodeWeb, $comparison);
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
     * @return SeafoodadrefQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(SeafoodadrefPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(SeafoodadrefPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SeafoodadrefPeer::ENTERED, $entered, $comparison);
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
     * @return SeafoodadrefQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(SeafoodadrefPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(SeafoodadrefPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SeafoodadrefPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return SeafoodadrefQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(SeafoodadrefPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(SeafoodadrefPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SeafoodadrefPeer::MODIFIED, $modified, $comparison);
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
     * @return SeafoodadrefQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(SeafoodadrefPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(SeafoodadrefPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SeafoodadrefPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return SeafoodadrefQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(SeafoodadrefPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(SeafoodadrefPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SeafoodadrefPeer::EXPERT, $expert, $comparison);
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
     * @return SeafoodadrefQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(SeafoodadrefPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(SeafoodadrefPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SeafoodadrefPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Seafoodadref $seafoodadref Object to remove from the list of results
     *
     * @return SeafoodadrefQuery The current query, for fluid interface
     */
    public function prune($seafoodadref = null)
    {
        if ($seafoodadref) {
            $this->addUsingAlias(SeafoodadrefPeer::GUIDENAME, $seafoodadref->getGuidename(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
