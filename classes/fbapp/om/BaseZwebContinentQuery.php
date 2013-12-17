<?php


/**
 * Base class that represents a query for the 'zweb_continent' table.
 *
 *
 *
 * @method ZwebContinentQuery orderByContinent($order = Criteria::ASC) Order by the Continent column
 * @method ZwebContinentQuery orderByAreacode($order = Criteria::ASC) Order by the AreaCode column
 * @method ZwebContinentQuery orderByMapid($order = Criteria::ASC) Order by the MapID column
 * @method ZwebContinentQuery orderByTs($order = Criteria::ASC) Order by the TS column
 * @method ZwebContinentQuery orderByPkid($order = Criteria::ASC) Order by the PKID column
 *
 * @method ZwebContinentQuery groupByContinent() Group by the Continent column
 * @method ZwebContinentQuery groupByAreacode() Group by the AreaCode column
 * @method ZwebContinentQuery groupByMapid() Group by the MapID column
 * @method ZwebContinentQuery groupByTs() Group by the TS column
 * @method ZwebContinentQuery groupByPkid() Group by the PKID column
 *
 * @method ZwebContinentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ZwebContinentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ZwebContinentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ZwebContinent findOne(PropelPDO $con = null) Return the first ZwebContinent matching the query
 * @method ZwebContinent findOneOrCreate(PropelPDO $con = null) Return the first ZwebContinent matching the query, or a new ZwebContinent object populated from the query conditions when no match is found
 *
 * @method ZwebContinent findOneByContinent(string $Continent) Return the first ZwebContinent filtered by the Continent column
 * @method ZwebContinent findOneByAreacode(int $AreaCode) Return the first ZwebContinent filtered by the AreaCode column
 * @method ZwebContinent findOneByMapid(string $MapID) Return the first ZwebContinent filtered by the MapID column
 * @method ZwebContinent findOneByTs(string $TS) Return the first ZwebContinent filtered by the TS column
 *
 * @method array findByContinent(string $Continent) Return ZwebContinent objects filtered by the Continent column
 * @method array findByAreacode(int $AreaCode) Return ZwebContinent objects filtered by the AreaCode column
 * @method array findByMapid(string $MapID) Return ZwebContinent objects filtered by the MapID column
 * @method array findByTs(string $TS) Return ZwebContinent objects filtered by the TS column
 * @method array findByPkid(string $PKID) Return ZwebContinent objects filtered by the PKID column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseZwebContinentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseZwebContinentQuery object.
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
            $modelName = 'ZwebContinent';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ZwebContinentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ZwebContinentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ZwebContinentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ZwebContinentQuery) {
            return $criteria;
        }
        $query = new ZwebContinentQuery(null, null, $modelAlias);

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
     * @return   ZwebContinent|ZwebContinent[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ZwebContinentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ZwebContinentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ZwebContinent A model object, or null if the key is not found
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
     * @return                 ZwebContinent A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `Continent`, `AreaCode`, `MapID`, `TS`, `PKID` FROM `zweb_continent` WHERE `PKID` = :p0';
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
            $obj = new ZwebContinent();
            $obj->hydrate($row);
            ZwebContinentPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ZwebContinent|ZwebContinent[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ZwebContinent[]|mixed the list of results, formatted by the current formatter
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
     * @return ZwebContinentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ZwebContinentPeer::PKID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ZwebContinentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ZwebContinentPeer::PKID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the Continent column
     *
     * Example usage:
     * <code>
     * $query->filterByContinent('fooValue');   // WHERE Continent = 'fooValue'
     * $query->filterByContinent('%fooValue%'); // WHERE Continent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $continent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebContinentQuery The current query, for fluid interface
     */
    public function filterByContinent($continent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($continent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $continent)) {
                $continent = str_replace('*', '%', $continent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ZwebContinentPeer::CONTINENT, $continent, $comparison);
    }

    /**
     * Filter the query on the AreaCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAreacode(1234); // WHERE AreaCode = 1234
     * $query->filterByAreacode(array(12, 34)); // WHERE AreaCode IN (12, 34)
     * $query->filterByAreacode(array('min' => 12)); // WHERE AreaCode >= 12
     * $query->filterByAreacode(array('max' => 12)); // WHERE AreaCode <= 12
     * </code>
     *
     * @param     mixed $areacode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebContinentQuery The current query, for fluid interface
     */
    public function filterByAreacode($areacode = null, $comparison = null)
    {
        if (is_array($areacode)) {
            $useMinMax = false;
            if (isset($areacode['min'])) {
                $this->addUsingAlias(ZwebContinentPeer::AREACODE, $areacode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areacode['max'])) {
                $this->addUsingAlias(ZwebContinentPeer::AREACODE, $areacode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebContinentPeer::AREACODE, $areacode, $comparison);
    }

    /**
     * Filter the query on the MapID column
     *
     * Example usage:
     * <code>
     * $query->filterByMapid('fooValue');   // WHERE MapID = 'fooValue'
     * $query->filterByMapid('%fooValue%'); // WHERE MapID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mapid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebContinentQuery The current query, for fluid interface
     */
    public function filterByMapid($mapid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mapid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mapid)) {
                $mapid = str_replace('*', '%', $mapid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ZwebContinentPeer::MAPID, $mapid, $comparison);
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
     * @return ZwebContinentQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(ZwebContinentPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(ZwebContinentPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebContinentPeer::TS, $ts, $comparison);
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
     * @return ZwebContinentQuery The current query, for fluid interface
     */
    public function filterByPkid($pkid = null, $comparison = null)
    {
        if (is_array($pkid)) {
            $useMinMax = false;
            if (isset($pkid['min'])) {
                $this->addUsingAlias(ZwebContinentPeer::PKID, $pkid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pkid['max'])) {
                $this->addUsingAlias(ZwebContinentPeer::PKID, $pkid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebContinentPeer::PKID, $pkid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ZwebContinent $zwebContinent Object to remove from the list of results
     *
     * @return ZwebContinentQuery The current query, for fluid interface
     */
    public function prune($zwebContinent = null)
    {
        if ($zwebContinent) {
            $this->addUsingAlias(ZwebContinentPeer::PKID, $zwebContinent->getPkid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
