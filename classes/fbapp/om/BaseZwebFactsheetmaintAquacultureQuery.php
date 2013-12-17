<?php


/**
 * Base class that represents a query for the 'zweb_factsheetmaint_aquaculture' table.
 *
 *
 *
 * @method ZwebFactsheetmaintAquacultureQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method ZwebFactsheetmaintAquacultureQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method ZwebFactsheetmaintAquacultureQuery orderBySiteurl($order = Criteria::ASC) Order by the SiteURL column
 * @method ZwebFactsheetmaintAquacultureQuery orderBySitename($order = Criteria::ASC) Order by the SiteName column
 * @method ZwebFactsheetmaintAquacultureQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method ZwebFactsheetmaintAquacultureQuery orderByEntered($order = Criteria::ASC) Order by the entered column
 * @method ZwebFactsheetmaintAquacultureQuery orderByDateentered($order = Criteria::ASC) Order by the dateentered column
 * @method ZwebFactsheetmaintAquacultureQuery orderByModified($order = Criteria::ASC) Order by the modified column
 * @method ZwebFactsheetmaintAquacultureQuery orderByDatemodified($order = Criteria::ASC) Order by the datemodified column
 * @method ZwebFactsheetmaintAquacultureQuery orderByExpert($order = Criteria::ASC) Order by the expert column
 * @method ZwebFactsheetmaintAquacultureQuery orderByDatechecked($order = Criteria::ASC) Order by the datechecked column
 * @method ZwebFactsheetmaintAquacultureQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method ZwebFactsheetmaintAquacultureQuery groupByAutoctr() Group by the autoctr column
 * @method ZwebFactsheetmaintAquacultureQuery groupBySpeccode() Group by the SpecCode column
 * @method ZwebFactsheetmaintAquacultureQuery groupBySiteurl() Group by the SiteURL column
 * @method ZwebFactsheetmaintAquacultureQuery groupBySitename() Group by the SiteName column
 * @method ZwebFactsheetmaintAquacultureQuery groupByComment() Group by the Comment column
 * @method ZwebFactsheetmaintAquacultureQuery groupByEntered() Group by the entered column
 * @method ZwebFactsheetmaintAquacultureQuery groupByDateentered() Group by the dateentered column
 * @method ZwebFactsheetmaintAquacultureQuery groupByModified() Group by the modified column
 * @method ZwebFactsheetmaintAquacultureQuery groupByDatemodified() Group by the datemodified column
 * @method ZwebFactsheetmaintAquacultureQuery groupByExpert() Group by the expert column
 * @method ZwebFactsheetmaintAquacultureQuery groupByDatechecked() Group by the datechecked column
 * @method ZwebFactsheetmaintAquacultureQuery groupByTs() Group by the TS column
 *
 * @method ZwebFactsheetmaintAquacultureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ZwebFactsheetmaintAquacultureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ZwebFactsheetmaintAquacultureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ZwebFactsheetmaintAquaculture findOne(PropelPDO $con = null) Return the first ZwebFactsheetmaintAquaculture matching the query
 * @method ZwebFactsheetmaintAquaculture findOneOrCreate(PropelPDO $con = null) Return the first ZwebFactsheetmaintAquaculture matching the query, or a new ZwebFactsheetmaintAquaculture object populated from the query conditions when no match is found
 *
 * @method ZwebFactsheetmaintAquaculture findOneByAutoctr(int $autoctr) Return the first ZwebFactsheetmaintAquaculture filtered by the autoctr column
 * @method ZwebFactsheetmaintAquaculture findOneBySpeccode(int $SpecCode) Return the first ZwebFactsheetmaintAquaculture filtered by the SpecCode column
 * @method ZwebFactsheetmaintAquaculture findOneBySiteurl(string $SiteURL) Return the first ZwebFactsheetmaintAquaculture filtered by the SiteURL column
 * @method ZwebFactsheetmaintAquaculture findOneBySitename(string $SiteName) Return the first ZwebFactsheetmaintAquaculture filtered by the SiteName column
 * @method ZwebFactsheetmaintAquaculture findOneByComment(string $Comment) Return the first ZwebFactsheetmaintAquaculture filtered by the Comment column
 * @method ZwebFactsheetmaintAquaculture findOneByEntered(int $entered) Return the first ZwebFactsheetmaintAquaculture filtered by the entered column
 * @method ZwebFactsheetmaintAquaculture findOneByDateentered(string $dateentered) Return the first ZwebFactsheetmaintAquaculture filtered by the dateentered column
 * @method ZwebFactsheetmaintAquaculture findOneByModified(int $modified) Return the first ZwebFactsheetmaintAquaculture filtered by the modified column
 * @method ZwebFactsheetmaintAquaculture findOneByDatemodified(string $datemodified) Return the first ZwebFactsheetmaintAquaculture filtered by the datemodified column
 * @method ZwebFactsheetmaintAquaculture findOneByExpert(int $expert) Return the first ZwebFactsheetmaintAquaculture filtered by the expert column
 * @method ZwebFactsheetmaintAquaculture findOneByDatechecked(string $datechecked) Return the first ZwebFactsheetmaintAquaculture filtered by the datechecked column
 * @method ZwebFactsheetmaintAquaculture findOneByTs(string $TS) Return the first ZwebFactsheetmaintAquaculture filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return ZwebFactsheetmaintAquaculture objects filtered by the autoctr column
 * @method array findBySpeccode(int $SpecCode) Return ZwebFactsheetmaintAquaculture objects filtered by the SpecCode column
 * @method array findBySiteurl(string $SiteURL) Return ZwebFactsheetmaintAquaculture objects filtered by the SiteURL column
 * @method array findBySitename(string $SiteName) Return ZwebFactsheetmaintAquaculture objects filtered by the SiteName column
 * @method array findByComment(string $Comment) Return ZwebFactsheetmaintAquaculture objects filtered by the Comment column
 * @method array findByEntered(int $entered) Return ZwebFactsheetmaintAquaculture objects filtered by the entered column
 * @method array findByDateentered(string $dateentered) Return ZwebFactsheetmaintAquaculture objects filtered by the dateentered column
 * @method array findByModified(int $modified) Return ZwebFactsheetmaintAquaculture objects filtered by the modified column
 * @method array findByDatemodified(string $datemodified) Return ZwebFactsheetmaintAquaculture objects filtered by the datemodified column
 * @method array findByExpert(int $expert) Return ZwebFactsheetmaintAquaculture objects filtered by the expert column
 * @method array findByDatechecked(string $datechecked) Return ZwebFactsheetmaintAquaculture objects filtered by the datechecked column
 * @method array findByTs(string $TS) Return ZwebFactsheetmaintAquaculture objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseZwebFactsheetmaintAquacultureQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseZwebFactsheetmaintAquacultureQuery object.
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
            $modelName = 'ZwebFactsheetmaintAquaculture';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ZwebFactsheetmaintAquacultureQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ZwebFactsheetmaintAquacultureQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ZwebFactsheetmaintAquacultureQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ZwebFactsheetmaintAquacultureQuery) {
            return $criteria;
        }
        $query = new ZwebFactsheetmaintAquacultureQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$SpecCode, $SiteURL]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   ZwebFactsheetmaintAquaculture|ZwebFactsheetmaintAquaculture[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ZwebFactsheetmaintAquaculturePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ZwebFactsheetmaintAquaculturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ZwebFactsheetmaintAquaculture A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `SpecCode`, `SiteURL`, `SiteName`, `Comment`, `entered`, `dateentered`, `modified`, `datemodified`, `expert`, `datechecked`, `TS` FROM `zweb_factsheetmaint_aquaculture` WHERE `SpecCode` = :p0 AND `SiteURL` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new ZwebFactsheetmaintAquaculture();
            $obj->hydrate($row);
            ZwebFactsheetmaintAquaculturePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return ZwebFactsheetmaintAquaculture|ZwebFactsheetmaintAquaculture[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ZwebFactsheetmaintAquaculture[]|mixed the list of results, formatted by the current formatter
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
     * @return ZwebFactsheetmaintAquacultureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::SPECCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::SITEURL, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ZwebFactsheetmaintAquacultureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ZwebFactsheetmaintAquaculturePeer::SPECCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ZwebFactsheetmaintAquaculturePeer::SITEURL, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return ZwebFactsheetmaintAquacultureQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::AUTOCTR, $autoctr, $comparison);
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
     * @return ZwebFactsheetmaintAquacultureQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the SiteURL column
     *
     * Example usage:
     * <code>
     * $query->filterBySiteurl('fooValue');   // WHERE SiteURL = 'fooValue'
     * $query->filterBySiteurl('%fooValue%'); // WHERE SiteURL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $siteurl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebFactsheetmaintAquacultureQuery The current query, for fluid interface
     */
    public function filterBySiteurl($siteurl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($siteurl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $siteurl)) {
                $siteurl = str_replace('*', '%', $siteurl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::SITEURL, $siteurl, $comparison);
    }

    /**
     * Filter the query on the SiteName column
     *
     * Example usage:
     * <code>
     * $query->filterBySitename('fooValue');   // WHERE SiteName = 'fooValue'
     * $query->filterBySitename('%fooValue%'); // WHERE SiteName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sitename The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebFactsheetmaintAquacultureQuery The current query, for fluid interface
     */
    public function filterBySitename($sitename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sitename)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sitename)) {
                $sitename = str_replace('*', '%', $sitename);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::SITENAME, $sitename, $comparison);
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
     * @return ZwebFactsheetmaintAquacultureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::COMMENT, $comment, $comparison);
    }

    /**
     * Filter the query on the entered column
     *
     * Example usage:
     * <code>
     * $query->filterByEntered(1234); // WHERE entered = 1234
     * $query->filterByEntered(array(12, 34)); // WHERE entered IN (12, 34)
     * $query->filterByEntered(array('min' => 12)); // WHERE entered >= 12
     * $query->filterByEntered(array('max' => 12)); // WHERE entered <= 12
     * </code>
     *
     * @param     mixed $entered The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebFactsheetmaintAquacultureQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::ENTERED, $entered, $comparison);
    }

    /**
     * Filter the query on the dateentered column
     *
     * Example usage:
     * <code>
     * $query->filterByDateentered('2011-03-14'); // WHERE dateentered = '2011-03-14'
     * $query->filterByDateentered('now'); // WHERE dateentered = '2011-03-14'
     * $query->filterByDateentered(array('max' => 'yesterday')); // WHERE dateentered < '2011-03-13'
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
     * @return ZwebFactsheetmaintAquacultureQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::DATEENTERED, $dateentered, $comparison);
    }

    /**
     * Filter the query on the modified column
     *
     * Example usage:
     * <code>
     * $query->filterByModified(1234); // WHERE modified = 1234
     * $query->filterByModified(array(12, 34)); // WHERE modified IN (12, 34)
     * $query->filterByModified(array('min' => 12)); // WHERE modified >= 12
     * $query->filterByModified(array('max' => 12)); // WHERE modified <= 12
     * </code>
     *
     * @param     mixed $modified The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebFactsheetmaintAquacultureQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::MODIFIED, $modified, $comparison);
    }

    /**
     * Filter the query on the datemodified column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodified('2011-03-14'); // WHERE datemodified = '2011-03-14'
     * $query->filterByDatemodified('now'); // WHERE datemodified = '2011-03-14'
     * $query->filterByDatemodified(array('max' => 'yesterday')); // WHERE datemodified < '2011-03-13'
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
     * @return ZwebFactsheetmaintAquacultureQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::DATEMODIFIED, $datemodified, $comparison);
    }

    /**
     * Filter the query on the expert column
     *
     * Example usage:
     * <code>
     * $query->filterByExpert(1234); // WHERE expert = 1234
     * $query->filterByExpert(array(12, 34)); // WHERE expert IN (12, 34)
     * $query->filterByExpert(array('min' => 12)); // WHERE expert >= 12
     * $query->filterByExpert(array('max' => 12)); // WHERE expert <= 12
     * </code>
     *
     * @param     mixed $expert The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebFactsheetmaintAquacultureQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::EXPERT, $expert, $comparison);
    }

    /**
     * Filter the query on the datechecked column
     *
     * Example usage:
     * <code>
     * $query->filterByDatechecked('2011-03-14'); // WHERE datechecked = '2011-03-14'
     * $query->filterByDatechecked('now'); // WHERE datechecked = '2011-03-14'
     * $query->filterByDatechecked(array('max' => 'yesterday')); // WHERE datechecked < '2011-03-13'
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
     * @return ZwebFactsheetmaintAquacultureQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::DATECHECKED, $datechecked, $comparison);
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
     * @return ZwebFactsheetmaintAquacultureQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebFactsheetmaintAquaculturePeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ZwebFactsheetmaintAquaculture $zwebFactsheetmaintAquaculture Object to remove from the list of results
     *
     * @return ZwebFactsheetmaintAquacultureQuery The current query, for fluid interface
     */
    public function prune($zwebFactsheetmaintAquaculture = null)
    {
        if ($zwebFactsheetmaintAquaculture) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ZwebFactsheetmaintAquaculturePeer::SPECCODE), $zwebFactsheetmaintAquaculture->getSpeccode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ZwebFactsheetmaintAquaculturePeer::SITEURL), $zwebFactsheetmaintAquaculture->getSiteurl(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
