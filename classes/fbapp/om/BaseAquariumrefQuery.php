<?php


/**
 * Base class that represents a query for the 'aquariumref' table.
 *
 *
 *
 * @method AquariumrefQuery orderByAqcode($order = Criteria::ASC) Order by the AqCode column
 * @method AquariumrefQuery orderByAcronym($order = Criteria::ASC) Order by the Acronym column
 * @method AquariumrefQuery orderByAquariumname($order = Criteria::ASC) Order by the AquariumName column
 * @method AquariumrefQuery orderByAddress($order = Criteria::ASC) Order by the Address column
 * @method AquariumrefQuery orderByCCode($order = Criteria::ASC) Order by the C_code column
 * @method AquariumrefQuery orderByUrl($order = Criteria::ASC) Order by the URL column
 * @method AquariumrefQuery orderByContactname($order = Criteria::ASC) Order by the ContactName column
 * @method AquariumrefQuery orderByContactemail($order = Criteria::ASC) Order by the ContactEmail column
 * @method AquariumrefQuery orderByComments($order = Criteria::ASC) Order by the Comments column
 * @method AquariumrefQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method AquariumrefQuery groupByAqcode() Group by the AqCode column
 * @method AquariumrefQuery groupByAcronym() Group by the Acronym column
 * @method AquariumrefQuery groupByAquariumname() Group by the AquariumName column
 * @method AquariumrefQuery groupByAddress() Group by the Address column
 * @method AquariumrefQuery groupByCCode() Group by the C_code column
 * @method AquariumrefQuery groupByUrl() Group by the URL column
 * @method AquariumrefQuery groupByContactname() Group by the ContactName column
 * @method AquariumrefQuery groupByContactemail() Group by the ContactEmail column
 * @method AquariumrefQuery groupByComments() Group by the Comments column
 * @method AquariumrefQuery groupByTs() Group by the TS column
 *
 * @method AquariumrefQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AquariumrefQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AquariumrefQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Aquariumref findOne(PropelPDO $con = null) Return the first Aquariumref matching the query
 * @method Aquariumref findOneOrCreate(PropelPDO $con = null) Return the first Aquariumref matching the query, or a new Aquariumref object populated from the query conditions when no match is found
 *
 * @method Aquariumref findOneByAcronym(string $Acronym) Return the first Aquariumref filtered by the Acronym column
 * @method Aquariumref findOneByAquariumname(string $AquariumName) Return the first Aquariumref filtered by the AquariumName column
 * @method Aquariumref findOneByAddress(string $Address) Return the first Aquariumref filtered by the Address column
 * @method Aquariumref findOneByCCode(string $C_code) Return the first Aquariumref filtered by the C_code column
 * @method Aquariumref findOneByUrl(string $URL) Return the first Aquariumref filtered by the URL column
 * @method Aquariumref findOneByContactname(string $ContactName) Return the first Aquariumref filtered by the ContactName column
 * @method Aquariumref findOneByContactemail(string $ContactEmail) Return the first Aquariumref filtered by the ContactEmail column
 * @method Aquariumref findOneByComments(string $Comments) Return the first Aquariumref filtered by the Comments column
 * @method Aquariumref findOneByTs(string $TS) Return the first Aquariumref filtered by the TS column
 *
 * @method array findByAqcode(int $AqCode) Return Aquariumref objects filtered by the AqCode column
 * @method array findByAcronym(string $Acronym) Return Aquariumref objects filtered by the Acronym column
 * @method array findByAquariumname(string $AquariumName) Return Aquariumref objects filtered by the AquariumName column
 * @method array findByAddress(string $Address) Return Aquariumref objects filtered by the Address column
 * @method array findByCCode(string $C_code) Return Aquariumref objects filtered by the C_code column
 * @method array findByUrl(string $URL) Return Aquariumref objects filtered by the URL column
 * @method array findByContactname(string $ContactName) Return Aquariumref objects filtered by the ContactName column
 * @method array findByContactemail(string $ContactEmail) Return Aquariumref objects filtered by the ContactEmail column
 * @method array findByComments(string $Comments) Return Aquariumref objects filtered by the Comments column
 * @method array findByTs(string $TS) Return Aquariumref objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseAquariumrefQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAquariumrefQuery object.
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
            $modelName = 'Aquariumref';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AquariumrefQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AquariumrefQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AquariumrefQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AquariumrefQuery) {
            return $criteria;
        }
        $query = new AquariumrefQuery(null, null, $modelAlias);

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
     * @return   Aquariumref|Aquariumref[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AquariumrefPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AquariumrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Aquariumref A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByAqcode($key, $con = null)
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
     * @return                 Aquariumref A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AqCode`, `Acronym`, `AquariumName`, `Address`, `C_code`, `URL`, `ContactName`, `ContactEmail`, `Comments`, `TS` FROM `aquariumref` WHERE `AqCode` = :p0';
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
            $obj = new Aquariumref();
            $obj->hydrate($row);
            AquariumrefPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Aquariumref|Aquariumref[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Aquariumref[]|mixed the list of results, formatted by the current formatter
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
     * @return AquariumrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AquariumrefPeer::AQCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AquariumrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AquariumrefPeer::AQCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the AqCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAqcode(1234); // WHERE AqCode = 1234
     * $query->filterByAqcode(array(12, 34)); // WHERE AqCode IN (12, 34)
     * $query->filterByAqcode(array('min' => 12)); // WHERE AqCode >= 12
     * $query->filterByAqcode(array('max' => 12)); // WHERE AqCode <= 12
     * </code>
     *
     * @param     mixed $aqcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumrefQuery The current query, for fluid interface
     */
    public function filterByAqcode($aqcode = null, $comparison = null)
    {
        if (is_array($aqcode)) {
            $useMinMax = false;
            if (isset($aqcode['min'])) {
                $this->addUsingAlias(AquariumrefPeer::AQCODE, $aqcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aqcode['max'])) {
                $this->addUsingAlias(AquariumrefPeer::AQCODE, $aqcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AquariumrefPeer::AQCODE, $aqcode, $comparison);
    }

    /**
     * Filter the query on the Acronym column
     *
     * Example usage:
     * <code>
     * $query->filterByAcronym('fooValue');   // WHERE Acronym = 'fooValue'
     * $query->filterByAcronym('%fooValue%'); // WHERE Acronym LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acronym The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumrefQuery The current query, for fluid interface
     */
    public function filterByAcronym($acronym = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acronym)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acronym)) {
                $acronym = str_replace('*', '%', $acronym);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AquariumrefPeer::ACRONYM, $acronym, $comparison);
    }

    /**
     * Filter the query on the AquariumName column
     *
     * Example usage:
     * <code>
     * $query->filterByAquariumname('fooValue');   // WHERE AquariumName = 'fooValue'
     * $query->filterByAquariumname('%fooValue%'); // WHERE AquariumName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aquariumname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumrefQuery The current query, for fluid interface
     */
    public function filterByAquariumname($aquariumname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aquariumname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aquariumname)) {
                $aquariumname = str_replace('*', '%', $aquariumname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AquariumrefPeer::AQUARIUMNAME, $aquariumname, $comparison);
    }

    /**
     * Filter the query on the Address column
     *
     * Example usage:
     * <code>
     * $query->filterByAddress('fooValue');   // WHERE Address = 'fooValue'
     * $query->filterByAddress('%fooValue%'); // WHERE Address LIKE '%fooValue%'
     * </code>
     *
     * @param     string $address The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumrefQuery The current query, for fluid interface
     */
    public function filterByAddress($address = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($address)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $address)) {
                $address = str_replace('*', '%', $address);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AquariumrefPeer::ADDRESS, $address, $comparison);
    }

    /**
     * Filter the query on the C_code column
     *
     * Example usage:
     * <code>
     * $query->filterByCCode('fooValue');   // WHERE C_code = 'fooValue'
     * $query->filterByCCode('%fooValue%'); // WHERE C_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumrefQuery The current query, for fluid interface
     */
    public function filterByCCode($cCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cCode)) {
                $cCode = str_replace('*', '%', $cCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AquariumrefPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the URL column
     *
     * Example usage:
     * <code>
     * $query->filterByUrl('fooValue');   // WHERE URL = 'fooValue'
     * $query->filterByUrl('%fooValue%'); // WHERE URL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $url The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumrefQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AquariumrefPeer::URL, $url, $comparison);
    }

    /**
     * Filter the query on the ContactName column
     *
     * Example usage:
     * <code>
     * $query->filterByContactname('fooValue');   // WHERE ContactName = 'fooValue'
     * $query->filterByContactname('%fooValue%'); // WHERE ContactName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumrefQuery The current query, for fluid interface
     */
    public function filterByContactname($contactname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contactname)) {
                $contactname = str_replace('*', '%', $contactname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AquariumrefPeer::CONTACTNAME, $contactname, $comparison);
    }

    /**
     * Filter the query on the ContactEmail column
     *
     * Example usage:
     * <code>
     * $query->filterByContactemail('fooValue');   // WHERE ContactEmail = 'fooValue'
     * $query->filterByContactemail('%fooValue%'); // WHERE ContactEmail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactemail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumrefQuery The current query, for fluid interface
     */
    public function filterByContactemail($contactemail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactemail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contactemail)) {
                $contactemail = str_replace('*', '%', $contactemail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AquariumrefPeer::CONTACTEMAIL, $contactemail, $comparison);
    }

    /**
     * Filter the query on the Comments column
     *
     * Example usage:
     * <code>
     * $query->filterByComments('fooValue');   // WHERE Comments = 'fooValue'
     * $query->filterByComments('%fooValue%'); // WHERE Comments LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comments The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumrefQuery The current query, for fluid interface
     */
    public function filterByComments($comments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comments)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comments)) {
                $comments = str_replace('*', '%', $comments);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AquariumrefPeer::COMMENTS, $comments, $comparison);
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
     * @return AquariumrefQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(AquariumrefPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(AquariumrefPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AquariumrefPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Aquariumref $aquariumref Object to remove from the list of results
     *
     * @return AquariumrefQuery The current query, for fluid interface
     */
    public function prune($aquariumref = null)
    {
        if ($aquariumref) {
            $this->addUsingAlias(AquariumrefPeer::AQCODE, $aquariumref->getAqcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
