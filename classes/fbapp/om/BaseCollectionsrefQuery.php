<?php


/**
 * Base class that represents a query for the 'collectionsref' table.
 *
 *
 *
 * @method CollectionsrefQuery orderByOccurrencerefno($order = Criteria::ASC) Order by the OccurrenceRefNo column
 * @method CollectionsrefQuery orderByMuseum($order = Criteria::ASC) Order by the Museum column
 * @method CollectionsrefQuery orderByAcronym($order = Criteria::ASC) Order by the Acronym column
 * @method CollectionsrefQuery orderByCCode($order = Criteria::ASC) Order by the C_code column
 * @method CollectionsrefQuery orderByLogoname($order = Criteria::ASC) Order by the logoname column
 * @method CollectionsrefQuery orderByUrl($order = Criteria::ASC) Order by the URL column
 * @method CollectionsrefQuery orderByLogo($order = Criteria::ASC) Order by the Logo column
 * @method CollectionsrefQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method CollectionsrefQuery groupByOccurrencerefno() Group by the OccurrenceRefNo column
 * @method CollectionsrefQuery groupByMuseum() Group by the Museum column
 * @method CollectionsrefQuery groupByAcronym() Group by the Acronym column
 * @method CollectionsrefQuery groupByCCode() Group by the C_code column
 * @method CollectionsrefQuery groupByLogoname() Group by the logoname column
 * @method CollectionsrefQuery groupByUrl() Group by the URL column
 * @method CollectionsrefQuery groupByLogo() Group by the Logo column
 * @method CollectionsrefQuery groupByTs() Group by the TS column
 *
 * @method CollectionsrefQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CollectionsrefQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CollectionsrefQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Collectionsref findOne(PropelPDO $con = null) Return the first Collectionsref matching the query
 * @method Collectionsref findOneOrCreate(PropelPDO $con = null) Return the first Collectionsref matching the query, or a new Collectionsref object populated from the query conditions when no match is found
 *
 * @method Collectionsref findOneByMuseum(string $Museum) Return the first Collectionsref filtered by the Museum column
 * @method Collectionsref findOneByAcronym(string $Acronym) Return the first Collectionsref filtered by the Acronym column
 * @method Collectionsref findOneByCCode(string $C_code) Return the first Collectionsref filtered by the C_code column
 * @method Collectionsref findOneByLogoname(string $logoname) Return the first Collectionsref filtered by the logoname column
 * @method Collectionsref findOneByUrl(string $URL) Return the first Collectionsref filtered by the URL column
 * @method Collectionsref findOneByLogo(resource $Logo) Return the first Collectionsref filtered by the Logo column
 * @method Collectionsref findOneByTs(string $TS) Return the first Collectionsref filtered by the TS column
 *
 * @method array findByOccurrencerefno(int $OccurrenceRefNo) Return Collectionsref objects filtered by the OccurrenceRefNo column
 * @method array findByMuseum(string $Museum) Return Collectionsref objects filtered by the Museum column
 * @method array findByAcronym(string $Acronym) Return Collectionsref objects filtered by the Acronym column
 * @method array findByCCode(string $C_code) Return Collectionsref objects filtered by the C_code column
 * @method array findByLogoname(string $logoname) Return Collectionsref objects filtered by the logoname column
 * @method array findByUrl(string $URL) Return Collectionsref objects filtered by the URL column
 * @method array findByLogo(resource $Logo) Return Collectionsref objects filtered by the Logo column
 * @method array findByTs(string $TS) Return Collectionsref objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCollectionsrefQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCollectionsrefQuery object.
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
            $modelName = 'Collectionsref';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CollectionsrefQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CollectionsrefQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CollectionsrefQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CollectionsrefQuery) {
            return $criteria;
        }
        $query = new CollectionsrefQuery(null, null, $modelAlias);

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
     * @return   Collectionsref|Collectionsref[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CollectionsrefPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CollectionsrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Collectionsref A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOccurrencerefno($key, $con = null)
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
     * @return                 Collectionsref A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `OccurrenceRefNo`, `Museum`, `Acronym`, `C_code`, `logoname`, `URL`, `Logo`, `TS` FROM `collectionsref` WHERE `OccurrenceRefNo` = :p0';
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
            $obj = new Collectionsref();
            $obj->hydrate($row);
            CollectionsrefPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Collectionsref|Collectionsref[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Collectionsref[]|mixed the list of results, formatted by the current formatter
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
     * @return CollectionsrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CollectionsrefPeer::OCCURRENCEREFNO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CollectionsrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CollectionsrefPeer::OCCURRENCEREFNO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the OccurrenceRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByOccurrencerefno(1234); // WHERE OccurrenceRefNo = 1234
     * $query->filterByOccurrencerefno(array(12, 34)); // WHERE OccurrenceRefNo IN (12, 34)
     * $query->filterByOccurrencerefno(array('min' => 12)); // WHERE OccurrenceRefNo >= 12
     * $query->filterByOccurrencerefno(array('max' => 12)); // WHERE OccurrenceRefNo <= 12
     * </code>
     *
     * @param     mixed $occurrencerefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollectionsrefQuery The current query, for fluid interface
     */
    public function filterByOccurrencerefno($occurrencerefno = null, $comparison = null)
    {
        if (is_array($occurrencerefno)) {
            $useMinMax = false;
            if (isset($occurrencerefno['min'])) {
                $this->addUsingAlias(CollectionsrefPeer::OCCURRENCEREFNO, $occurrencerefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($occurrencerefno['max'])) {
                $this->addUsingAlias(CollectionsrefPeer::OCCURRENCEREFNO, $occurrencerefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CollectionsrefPeer::OCCURRENCEREFNO, $occurrencerefno, $comparison);
    }

    /**
     * Filter the query on the Museum column
     *
     * Example usage:
     * <code>
     * $query->filterByMuseum('fooValue');   // WHERE Museum = 'fooValue'
     * $query->filterByMuseum('%fooValue%'); // WHERE Museum LIKE '%fooValue%'
     * </code>
     *
     * @param     string $museum The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollectionsrefQuery The current query, for fluid interface
     */
    public function filterByMuseum($museum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($museum)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $museum)) {
                $museum = str_replace('*', '%', $museum);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollectionsrefPeer::MUSEUM, $museum, $comparison);
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
     * @return CollectionsrefQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CollectionsrefPeer::ACRONYM, $acronym, $comparison);
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
     * @return CollectionsrefQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CollectionsrefPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the logoname column
     *
     * Example usage:
     * <code>
     * $query->filterByLogoname('fooValue');   // WHERE logoname = 'fooValue'
     * $query->filterByLogoname('%fooValue%'); // WHERE logoname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $logoname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollectionsrefQuery The current query, for fluid interface
     */
    public function filterByLogoname($logoname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($logoname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $logoname)) {
                $logoname = str_replace('*', '%', $logoname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollectionsrefPeer::LOGONAME, $logoname, $comparison);
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
     * @return CollectionsrefQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CollectionsrefPeer::URL, $url, $comparison);
    }

    /**
     * Filter the query on the Logo column
     *
     * @param     mixed $logo The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollectionsrefQuery The current query, for fluid interface
     */
    public function filterByLogo($logo = null, $comparison = null)
    {

        return $this->addUsingAlias(CollectionsrefPeer::LOGO, $logo, $comparison);
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
     * @return CollectionsrefQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(CollectionsrefPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(CollectionsrefPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CollectionsrefPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Collectionsref $collectionsref Object to remove from the list of results
     *
     * @return CollectionsrefQuery The current query, for fluid interface
     */
    public function prune($collectionsref = null)
    {
        if ($collectionsref) {
            $this->addUsingAlias(CollectionsrefPeer::OCCURRENCEREFNO, $collectionsref->getOccurrencerefno(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
