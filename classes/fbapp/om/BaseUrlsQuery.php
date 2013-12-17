<?php


/**
 * Base class that represents a query for the 'urls' table.
 *
 *
 *
 * @method UrlsQuery orderByNum($order = Criteria::ASC) Order by the num column
 * @method UrlsQuery orderBySpeccode($order = Criteria::ASC) Order by the speccode column
 * @method UrlsQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method UrlsQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method UrlsQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method UrlsQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method UrlsQuery orderByDateentered($order = Criteria::ASC) Order by the dateentered column
 * @method UrlsQuery orderByNovote($order = Criteria::ASC) Order by the novote column
 * @method UrlsQuery orderByYesvote($order = Criteria::ASC) Order by the yesvote column
 * @method UrlsQuery orderByRequiredx($order = Criteria::ASC) Order by the requiredx column
 * @method UrlsQuery orderByPkid($order = Criteria::ASC) Order by the PKID column
 *
 * @method UrlsQuery groupByNum() Group by the num column
 * @method UrlsQuery groupBySpeccode() Group by the speccode column
 * @method UrlsQuery groupByUrl() Group by the url column
 * @method UrlsQuery groupByDescription() Group by the description column
 * @method UrlsQuery groupByName() Group by the name column
 * @method UrlsQuery groupByEmail() Group by the email column
 * @method UrlsQuery groupByDateentered() Group by the dateentered column
 * @method UrlsQuery groupByNovote() Group by the novote column
 * @method UrlsQuery groupByYesvote() Group by the yesvote column
 * @method UrlsQuery groupByRequiredx() Group by the requiredx column
 * @method UrlsQuery groupByPkid() Group by the PKID column
 *
 * @method UrlsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UrlsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UrlsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Urls findOne(PropelPDO $con = null) Return the first Urls matching the query
 * @method Urls findOneOrCreate(PropelPDO $con = null) Return the first Urls matching the query, or a new Urls object populated from the query conditions when no match is found
 *
 * @method Urls findOneByNum(int $num) Return the first Urls filtered by the num column
 * @method Urls findOneBySpeccode(int $speccode) Return the first Urls filtered by the speccode column
 * @method Urls findOneByUrl(string $url) Return the first Urls filtered by the url column
 * @method Urls findOneByDescription(string $description) Return the first Urls filtered by the description column
 * @method Urls findOneByName(string $name) Return the first Urls filtered by the name column
 * @method Urls findOneByEmail(string $email) Return the first Urls filtered by the email column
 * @method Urls findOneByDateentered(string $dateentered) Return the first Urls filtered by the dateentered column
 * @method Urls findOneByNovote(int $novote) Return the first Urls filtered by the novote column
 * @method Urls findOneByYesvote(int $yesvote) Return the first Urls filtered by the yesvote column
 * @method Urls findOneByRequiredx(string $requiredx) Return the first Urls filtered by the requiredx column
 *
 * @method array findByNum(int $num) Return Urls objects filtered by the num column
 * @method array findBySpeccode(int $speccode) Return Urls objects filtered by the speccode column
 * @method array findByUrl(string $url) Return Urls objects filtered by the url column
 * @method array findByDescription(string $description) Return Urls objects filtered by the description column
 * @method array findByName(string $name) Return Urls objects filtered by the name column
 * @method array findByEmail(string $email) Return Urls objects filtered by the email column
 * @method array findByDateentered(string $dateentered) Return Urls objects filtered by the dateentered column
 * @method array findByNovote(int $novote) Return Urls objects filtered by the novote column
 * @method array findByYesvote(int $yesvote) Return Urls objects filtered by the yesvote column
 * @method array findByRequiredx(string $requiredx) Return Urls objects filtered by the requiredx column
 * @method array findByPkid(string $PKID) Return Urls objects filtered by the PKID column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseUrlsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUrlsQuery object.
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
            $modelName = 'Urls';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UrlsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   UrlsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UrlsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UrlsQuery) {
            return $criteria;
        }
        $query = new UrlsQuery(null, null, $modelAlias);

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
     * @return   Urls|Urls[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UrlsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UrlsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Urls A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByPkid($key, $con = null)
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
     * @return                 Urls A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `num`, `speccode`, `url`, `description`, `name`, `email`, `dateentered`, `novote`, `yesvote`, `requiredx`, `PKID` FROM `urls` WHERE `PKID` = :p0';
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
            $obj = new Urls();
            $obj->hydrate($row);
            UrlsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Urls|Urls[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Urls[]|mixed the list of results, formatted by the current formatter
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
     * @return UrlsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UrlsPeer::PKID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UrlsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UrlsPeer::PKID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the num column
     *
     * Example usage:
     * <code>
     * $query->filterByNum(1234); // WHERE num = 1234
     * $query->filterByNum(array(12, 34)); // WHERE num IN (12, 34)
     * $query->filterByNum(array('min' => 12)); // WHERE num >= 12
     * $query->filterByNum(array('max' => 12)); // WHERE num <= 12
     * </code>
     *
     * @param     mixed $num The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UrlsQuery The current query, for fluid interface
     */
    public function filterByNum($num = null, $comparison = null)
    {
        if (is_array($num)) {
            $useMinMax = false;
            if (isset($num['min'])) {
                $this->addUsingAlias(UrlsPeer::NUM, $num['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($num['max'])) {
                $this->addUsingAlias(UrlsPeer::NUM, $num['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UrlsPeer::NUM, $num, $comparison);
    }

    /**
     * Filter the query on the speccode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeccode(1234); // WHERE speccode = 1234
     * $query->filterBySpeccode(array(12, 34)); // WHERE speccode IN (12, 34)
     * $query->filterBySpeccode(array('min' => 12)); // WHERE speccode >= 12
     * $query->filterBySpeccode(array('max' => 12)); // WHERE speccode <= 12
     * </code>
     *
     * @param     mixed $speccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UrlsQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(UrlsPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(UrlsPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UrlsPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the url column
     *
     * Example usage:
     * <code>
     * $query->filterByUrl('fooValue');   // WHERE url = 'fooValue'
     * $query->filterByUrl('%fooValue%'); // WHERE url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $url The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UrlsQuery The current query, for fluid interface
     */
    public function filterByUrl($url = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($url)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $url)) {
                $url = str_replace('*', '%', $url);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UrlsPeer::URL, $url, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UrlsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(UrlsPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UrlsQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UrlsPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UrlsQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UrlsPeer::EMAIL, $email, $comparison);
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
     * @return UrlsQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(UrlsPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(UrlsPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UrlsPeer::DATEENTERED, $dateentered, $comparison);
    }

    /**
     * Filter the query on the novote column
     *
     * Example usage:
     * <code>
     * $query->filterByNovote(1234); // WHERE novote = 1234
     * $query->filterByNovote(array(12, 34)); // WHERE novote IN (12, 34)
     * $query->filterByNovote(array('min' => 12)); // WHERE novote >= 12
     * $query->filterByNovote(array('max' => 12)); // WHERE novote <= 12
     * </code>
     *
     * @param     mixed $novote The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UrlsQuery The current query, for fluid interface
     */
    public function filterByNovote($novote = null, $comparison = null)
    {
        if (is_array($novote)) {
            $useMinMax = false;
            if (isset($novote['min'])) {
                $this->addUsingAlias(UrlsPeer::NOVOTE, $novote['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($novote['max'])) {
                $this->addUsingAlias(UrlsPeer::NOVOTE, $novote['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UrlsPeer::NOVOTE, $novote, $comparison);
    }

    /**
     * Filter the query on the yesvote column
     *
     * Example usage:
     * <code>
     * $query->filterByYesvote(1234); // WHERE yesvote = 1234
     * $query->filterByYesvote(array(12, 34)); // WHERE yesvote IN (12, 34)
     * $query->filterByYesvote(array('min' => 12)); // WHERE yesvote >= 12
     * $query->filterByYesvote(array('max' => 12)); // WHERE yesvote <= 12
     * </code>
     *
     * @param     mixed $yesvote The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UrlsQuery The current query, for fluid interface
     */
    public function filterByYesvote($yesvote = null, $comparison = null)
    {
        if (is_array($yesvote)) {
            $useMinMax = false;
            if (isset($yesvote['min'])) {
                $this->addUsingAlias(UrlsPeer::YESVOTE, $yesvote['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yesvote['max'])) {
                $this->addUsingAlias(UrlsPeer::YESVOTE, $yesvote['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UrlsPeer::YESVOTE, $yesvote, $comparison);
    }

    /**
     * Filter the query on the requiredx column
     *
     * Example usage:
     * <code>
     * $query->filterByRequiredx('fooValue');   // WHERE requiredx = 'fooValue'
     * $query->filterByRequiredx('%fooValue%'); // WHERE requiredx LIKE '%fooValue%'
     * </code>
     *
     * @param     string $requiredx The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UrlsQuery The current query, for fluid interface
     */
    public function filterByRequiredx($requiredx = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($requiredx)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $requiredx)) {
                $requiredx = str_replace('*', '%', $requiredx);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UrlsPeer::REQUIREDX, $requiredx, $comparison);
    }

    /**
     * Filter the query on the PKID column
     *
     * Example usage:
     * <code>
     * $query->filterByPkid(1234); // WHERE PKID = 1234
     * $query->filterByPkid(array(12, 34)); // WHERE PKID IN (12, 34)
     * $query->filterByPkid(array('min' => 12)); // WHERE PKID >= 12
     * $query->filterByPkid(array('max' => 12)); // WHERE PKID <= 12
     * </code>
     *
     * @param     mixed $pkid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UrlsQuery The current query, for fluid interface
     */
    public function filterByPkid($pkid = null, $comparison = null)
    {
        if (is_array($pkid)) {
            $useMinMax = false;
            if (isset($pkid['min'])) {
                $this->addUsingAlias(UrlsPeer::PKID, $pkid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pkid['max'])) {
                $this->addUsingAlias(UrlsPeer::PKID, $pkid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UrlsPeer::PKID, $pkid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Urls $urls Object to remove from the list of results
     *
     * @return UrlsQuery The current query, for fluid interface
     */
    public function prune($urls = null)
    {
        if ($urls) {
            $this->addUsingAlias(UrlsPeer::PKID, $urls->getPkid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
