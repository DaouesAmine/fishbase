<?php


/**
 * Base class that represents a query for the 'webfish' table.
 *
 *
 *
 * @method WebfishQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method WebfishQuery orderByWebdbname($order = Criteria::ASC) Order by the WebDBName column
 * @method WebfishQuery orderByHomepage($order = Criteria::ASC) Order by the HomePage column
 * @method WebfishQuery orderByHp($order = Criteria::ASC) Order by the HP column
 * @method WebfishQuery orderByRooturl($order = Criteria::ASC) Order by the RootURL column
 * @method WebfishQuery orderByDescription($order = Criteria::ASC) Order by the Description column
 * @method WebfishQuery orderByEnvironment($order = Criteria::ASC) Order by the Environment column
 * @method WebfishQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method WebfishQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method WebfishQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method WebfishQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method WebfishQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method WebfishQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method WebfishQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method WebfishQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method WebfishQuery groupByAutoctr() Group by the AutoCtr column
 * @method WebfishQuery groupByWebdbname() Group by the WebDBName column
 * @method WebfishQuery groupByHomepage() Group by the HomePage column
 * @method WebfishQuery groupByHp() Group by the HP column
 * @method WebfishQuery groupByRooturl() Group by the RootURL column
 * @method WebfishQuery groupByDescription() Group by the Description column
 * @method WebfishQuery groupByEnvironment() Group by the Environment column
 * @method WebfishQuery groupByRemarks() Group by the Remarks column
 * @method WebfishQuery groupByEntered() Group by the Entered column
 * @method WebfishQuery groupByDateentered() Group by the DateEntered column
 * @method WebfishQuery groupByModified() Group by the Modified column
 * @method WebfishQuery groupByDatemodified() Group by the DateModified column
 * @method WebfishQuery groupByExpert() Group by the Expert column
 * @method WebfishQuery groupByDatechecked() Group by the DateChecked column
 * @method WebfishQuery groupByTs() Group by the TS column
 *
 * @method WebfishQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method WebfishQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method WebfishQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Webfish findOne(PropelPDO $con = null) Return the first Webfish matching the query
 * @method Webfish findOneOrCreate(PropelPDO $con = null) Return the first Webfish matching the query, or a new Webfish object populated from the query conditions when no match is found
 *
 * @method Webfish findOneByWebdbname(string $WebDBName) Return the first Webfish filtered by the WebDBName column
 * @method Webfish findOneByHomepage(string $HomePage) Return the first Webfish filtered by the HomePage column
 * @method Webfish findOneByHp(string $HP) Return the first Webfish filtered by the HP column
 * @method Webfish findOneByRooturl(string $RootURL) Return the first Webfish filtered by the RootURL column
 * @method Webfish findOneByDescription(string $Description) Return the first Webfish filtered by the Description column
 * @method Webfish findOneByEnvironment(string $Environment) Return the first Webfish filtered by the Environment column
 * @method Webfish findOneByRemarks(string $Remarks) Return the first Webfish filtered by the Remarks column
 * @method Webfish findOneByEntered(int $Entered) Return the first Webfish filtered by the Entered column
 * @method Webfish findOneByDateentered(string $DateEntered) Return the first Webfish filtered by the DateEntered column
 * @method Webfish findOneByModified(int $Modified) Return the first Webfish filtered by the Modified column
 * @method Webfish findOneByDatemodified(string $DateModified) Return the first Webfish filtered by the DateModified column
 * @method Webfish findOneByExpert(int $Expert) Return the first Webfish filtered by the Expert column
 * @method Webfish findOneByDatechecked(string $DateChecked) Return the first Webfish filtered by the DateChecked column
 * @method Webfish findOneByTs(string $TS) Return the first Webfish filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return Webfish objects filtered by the AutoCtr column
 * @method array findByWebdbname(string $WebDBName) Return Webfish objects filtered by the WebDBName column
 * @method array findByHomepage(string $HomePage) Return Webfish objects filtered by the HomePage column
 * @method array findByHp(string $HP) Return Webfish objects filtered by the HP column
 * @method array findByRooturl(string $RootURL) Return Webfish objects filtered by the RootURL column
 * @method array findByDescription(string $Description) Return Webfish objects filtered by the Description column
 * @method array findByEnvironment(string $Environment) Return Webfish objects filtered by the Environment column
 * @method array findByRemarks(string $Remarks) Return Webfish objects filtered by the Remarks column
 * @method array findByEntered(int $Entered) Return Webfish objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Webfish objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Webfish objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Webfish objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Webfish objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Webfish objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Webfish objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseWebfishQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseWebfishQuery object.
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
            $modelName = 'Webfish';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new WebfishQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   WebfishQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return WebfishQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof WebfishQuery) {
            return $criteria;
        }
        $query = new WebfishQuery(null, null, $modelAlias);

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
     * @return   Webfish|Webfish[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = WebfishPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(WebfishPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Webfish A model object, or null if the key is not found
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
     * @return                 Webfish A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `WebDBName`, `HomePage`, `HP`, `RootURL`, `Description`, `Environment`, `Remarks`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `webfish` WHERE `AutoCtr` = :p0';
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
            $obj = new Webfish();
            $obj->hydrate($row);
            WebfishPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Webfish|Webfish[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Webfish[]|mixed the list of results, formatted by the current formatter
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
     * @return WebfishQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(WebfishPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return WebfishQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(WebfishPeer::AUTOCTR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the AutoCtr column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoctr(1234); // WHERE AutoCtr = 1234
     * $query->filterByAutoctr(array(12, 34)); // WHERE AutoCtr IN (12, 34)
     * $query->filterByAutoctr(array('min' => 12)); // WHERE AutoCtr >= 12
     * $query->filterByAutoctr(array('max' => 12)); // WHERE AutoCtr <= 12
     * </code>
     *
     * @param     mixed $autoctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebfishQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(WebfishPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(WebfishPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebfishPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the WebDBName column
     *
     * Example usage:
     * <code>
     * $query->filterByWebdbname('fooValue');   // WHERE WebDBName = 'fooValue'
     * $query->filterByWebdbname('%fooValue%'); // WHERE WebDBName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $webdbname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebfishQuery The current query, for fluid interface
     */
    public function filterByWebdbname($webdbname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($webdbname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $webdbname)) {
                $webdbname = str_replace('*', '%', $webdbname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WebfishPeer::WEBDBNAME, $webdbname, $comparison);
    }

    /**
     * Filter the query on the HomePage column
     *
     * Example usage:
     * <code>
     * $query->filterByHomepage('fooValue');   // WHERE HomePage = 'fooValue'
     * $query->filterByHomepage('%fooValue%'); // WHERE HomePage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $homepage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebfishQuery The current query, for fluid interface
     */
    public function filterByHomepage($homepage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($homepage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $homepage)) {
                $homepage = str_replace('*', '%', $homepage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WebfishPeer::HOMEPAGE, $homepage, $comparison);
    }

    /**
     * Filter the query on the HP column
     *
     * Example usage:
     * <code>
     * $query->filterByHp('fooValue');   // WHERE HP = 'fooValue'
     * $query->filterByHp('%fooValue%'); // WHERE HP LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebfishQuery The current query, for fluid interface
     */
    public function filterByHp($hp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hp)) {
                $hp = str_replace('*', '%', $hp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WebfishPeer::HP, $hp, $comparison);
    }

    /**
     * Filter the query on the RootURL column
     *
     * Example usage:
     * <code>
     * $query->filterByRooturl('fooValue');   // WHERE RootURL = 'fooValue'
     * $query->filterByRooturl('%fooValue%'); // WHERE RootURL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rooturl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebfishQuery The current query, for fluid interface
     */
    public function filterByRooturl($rooturl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rooturl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rooturl)) {
                $rooturl = str_replace('*', '%', $rooturl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WebfishPeer::ROOTURL, $rooturl, $comparison);
    }

    /**
     * Filter the query on the Description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE Description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE Description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebfishQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WebfishPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the Environment column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvironment('fooValue');   // WHERE Environment = 'fooValue'
     * $query->filterByEnvironment('%fooValue%'); // WHERE Environment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $environment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebfishQuery The current query, for fluid interface
     */
    public function filterByEnvironment($environment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($environment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $environment)) {
                $environment = str_replace('*', '%', $environment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WebfishPeer::ENVIRONMENT, $environment, $comparison);
    }

    /**
     * Filter the query on the Remarks column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarks('fooValue');   // WHERE Remarks = 'fooValue'
     * $query->filterByRemarks('%fooValue%'); // WHERE Remarks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebfishQuery The current query, for fluid interface
     */
    public function filterByRemarks($remarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarks)) {
                $remarks = str_replace('*', '%', $remarks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WebfishPeer::REMARKS, $remarks, $comparison);
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
     * @return WebfishQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(WebfishPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(WebfishPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebfishPeer::ENTERED, $entered, $comparison);
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
     * @return WebfishQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(WebfishPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(WebfishPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebfishPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return WebfishQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(WebfishPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(WebfishPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebfishPeer::MODIFIED, $modified, $comparison);
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
     * @return WebfishQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(WebfishPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(WebfishPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebfishPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return WebfishQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(WebfishPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(WebfishPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebfishPeer::EXPERT, $expert, $comparison);
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
     * @return WebfishQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(WebfishPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(WebfishPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebfishPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return WebfishQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(WebfishPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(WebfishPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebfishPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Webfish $webfish Object to remove from the list of results
     *
     * @return WebfishQuery The current query, for fluid interface
     */
    public function prune($webfish = null)
    {
        if ($webfish) {
            $this->addUsingAlias(WebfishPeer::AUTOCTR, $webfish->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
