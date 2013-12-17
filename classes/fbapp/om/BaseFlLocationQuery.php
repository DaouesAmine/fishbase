<?php


/**
 * Base class that represents a query for the 'fl_location' table.
 *
 *
 *
 * @method FlLocationQuery orderByLocationcode($order = Criteria::ASC) Order by the LocationCode column
 * @method FlLocationQuery orderByContinent($order = Criteria::ASC) Order by the Continent column
 * @method FlLocationQuery orderByFisherytype($order = Criteria::ASC) Order by the FisheryType column
 * @method FlLocationQuery orderByCountry($order = Criteria::ASC) Order by the Country column
 * @method FlLocationQuery orderByFisheryname($order = Criteria::ASC) Order by the FisheryName column
 * @method FlLocationQuery orderByRegion($order = Criteria::ASC) Order by the Region column
 * @method FlLocationQuery orderByLocation($order = Criteria::ASC) Order by the Location column
 * @method FlLocationQuery orderByCoordinates($order = Criteria::ASC) Order by the Coordinates column
 * @method FlLocationQuery orderByCommerce($order = Criteria::ASC) Order by the Commerce column
 * @method FlLocationQuery orderByCategory($order = Criteria::ASC) Order by the Category column
 * @method FlLocationQuery orderByEditable($order = Criteria::ASC) Order by the Editable column
 * @method FlLocationQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method FlLocationQuery groupByLocationcode() Group by the LocationCode column
 * @method FlLocationQuery groupByContinent() Group by the Continent column
 * @method FlLocationQuery groupByFisherytype() Group by the FisheryType column
 * @method FlLocationQuery groupByCountry() Group by the Country column
 * @method FlLocationQuery groupByFisheryname() Group by the FisheryName column
 * @method FlLocationQuery groupByRegion() Group by the Region column
 * @method FlLocationQuery groupByLocation() Group by the Location column
 * @method FlLocationQuery groupByCoordinates() Group by the Coordinates column
 * @method FlLocationQuery groupByCommerce() Group by the Commerce column
 * @method FlLocationQuery groupByCategory() Group by the Category column
 * @method FlLocationQuery groupByEditable() Group by the Editable column
 * @method FlLocationQuery groupByTs() Group by the TS column
 *
 * @method FlLocationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FlLocationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FlLocationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FlLocation findOne(PropelPDO $con = null) Return the first FlLocation matching the query
 * @method FlLocation findOneOrCreate(PropelPDO $con = null) Return the first FlLocation matching the query, or a new FlLocation object populated from the query conditions when no match is found
 *
 * @method FlLocation findOneByContinent(string $Continent) Return the first FlLocation filtered by the Continent column
 * @method FlLocation findOneByFisherytype(string $FisheryType) Return the first FlLocation filtered by the FisheryType column
 * @method FlLocation findOneByCountry(string $Country) Return the first FlLocation filtered by the Country column
 * @method FlLocation findOneByFisheryname(string $FisheryName) Return the first FlLocation filtered by the FisheryName column
 * @method FlLocation findOneByRegion(string $Region) Return the first FlLocation filtered by the Region column
 * @method FlLocation findOneByLocation(string $Location) Return the first FlLocation filtered by the Location column
 * @method FlLocation findOneByCoordinates(string $Coordinates) Return the first FlLocation filtered by the Coordinates column
 * @method FlLocation findOneByCommerce(string $Commerce) Return the first FlLocation filtered by the Commerce column
 * @method FlLocation findOneByCategory(string $Category) Return the first FlLocation filtered by the Category column
 * @method FlLocation findOneByEditable(string $Editable) Return the first FlLocation filtered by the Editable column
 * @method FlLocation findOneByTs(string $TS) Return the first FlLocation filtered by the TS column
 *
 * @method array findByLocationcode(int $LocationCode) Return FlLocation objects filtered by the LocationCode column
 * @method array findByContinent(string $Continent) Return FlLocation objects filtered by the Continent column
 * @method array findByFisherytype(string $FisheryType) Return FlLocation objects filtered by the FisheryType column
 * @method array findByCountry(string $Country) Return FlLocation objects filtered by the Country column
 * @method array findByFisheryname(string $FisheryName) Return FlLocation objects filtered by the FisheryName column
 * @method array findByRegion(string $Region) Return FlLocation objects filtered by the Region column
 * @method array findByLocation(string $Location) Return FlLocation objects filtered by the Location column
 * @method array findByCoordinates(string $Coordinates) Return FlLocation objects filtered by the Coordinates column
 * @method array findByCommerce(string $Commerce) Return FlLocation objects filtered by the Commerce column
 * @method array findByCategory(string $Category) Return FlLocation objects filtered by the Category column
 * @method array findByEditable(string $Editable) Return FlLocation objects filtered by the Editable column
 * @method array findByTs(string $TS) Return FlLocation objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFlLocationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFlLocationQuery object.
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
            $modelName = 'FlLocation';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FlLocationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FlLocationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FlLocationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FlLocationQuery) {
            return $criteria;
        }
        $query = new FlLocationQuery(null, null, $modelAlias);

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
     * @return   FlLocation|FlLocation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FlLocationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FlLocationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 FlLocation A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByLocationcode($key, $con = null)
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
     * @return                 FlLocation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `LocationCode`, `Continent`, `FisheryType`, `Country`, `FisheryName`, `Region`, `Location`, `Coordinates`, `Commerce`, `Category`, `Editable`, `TS` FROM `fl_location` WHERE `LocationCode` = :p0';
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
            $obj = new FlLocation();
            $obj->hydrate($row);
            FlLocationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return FlLocation|FlLocation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|FlLocation[]|mixed the list of results, formatted by the current formatter
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
     * @return FlLocationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FlLocationPeer::LOCATIONCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FlLocationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FlLocationPeer::LOCATIONCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the LocationCode column
     *
     * Example usage:
     * <code>
     * $query->filterByLocationcode(1234); // WHERE LocationCode = 1234
     * $query->filterByLocationcode(array(12, 34)); // WHERE LocationCode IN (12, 34)
     * $query->filterByLocationcode(array('min' => 12)); // WHERE LocationCode >= 12
     * $query->filterByLocationcode(array('max' => 12)); // WHERE LocationCode <= 12
     * </code>
     *
     * @param     mixed $locationcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLocationQuery The current query, for fluid interface
     */
    public function filterByLocationcode($locationcode = null, $comparison = null)
    {
        if (is_array($locationcode)) {
            $useMinMax = false;
            if (isset($locationcode['min'])) {
                $this->addUsingAlias(FlLocationPeer::LOCATIONCODE, $locationcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($locationcode['max'])) {
                $this->addUsingAlias(FlLocationPeer::LOCATIONCODE, $locationcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLocationPeer::LOCATIONCODE, $locationcode, $comparison);
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
     * @return FlLocationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FlLocationPeer::CONTINENT, $continent, $comparison);
    }

    /**
     * Filter the query on the FisheryType column
     *
     * Example usage:
     * <code>
     * $query->filterByFisherytype('fooValue');   // WHERE FisheryType = 'fooValue'
     * $query->filterByFisherytype('%fooValue%'); // WHERE FisheryType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fisherytype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLocationQuery The current query, for fluid interface
     */
    public function filterByFisherytype($fisherytype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fisherytype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fisherytype)) {
                $fisherytype = str_replace('*', '%', $fisherytype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLocationPeer::FISHERYTYPE, $fisherytype, $comparison);
    }

    /**
     * Filter the query on the Country column
     *
     * Example usage:
     * <code>
     * $query->filterByCountry('fooValue');   // WHERE Country = 'fooValue'
     * $query->filterByCountry('%fooValue%'); // WHERE Country LIKE '%fooValue%'
     * </code>
     *
     * @param     string $country The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLocationQuery The current query, for fluid interface
     */
    public function filterByCountry($country = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($country)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $country)) {
                $country = str_replace('*', '%', $country);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLocationPeer::COUNTRY, $country, $comparison);
    }

    /**
     * Filter the query on the FisheryName column
     *
     * Example usage:
     * <code>
     * $query->filterByFisheryname('fooValue');   // WHERE FisheryName = 'fooValue'
     * $query->filterByFisheryname('%fooValue%'); // WHERE FisheryName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fisheryname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLocationQuery The current query, for fluid interface
     */
    public function filterByFisheryname($fisheryname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fisheryname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fisheryname)) {
                $fisheryname = str_replace('*', '%', $fisheryname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLocationPeer::FISHERYNAME, $fisheryname, $comparison);
    }

    /**
     * Filter the query on the Region column
     *
     * Example usage:
     * <code>
     * $query->filterByRegion('fooValue');   // WHERE Region = 'fooValue'
     * $query->filterByRegion('%fooValue%'); // WHERE Region LIKE '%fooValue%'
     * </code>
     *
     * @param     string $region The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLocationQuery The current query, for fluid interface
     */
    public function filterByRegion($region = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($region)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $region)) {
                $region = str_replace('*', '%', $region);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLocationPeer::REGION, $region, $comparison);
    }

    /**
     * Filter the query on the Location column
     *
     * Example usage:
     * <code>
     * $query->filterByLocation('fooValue');   // WHERE Location = 'fooValue'
     * $query->filterByLocation('%fooValue%'); // WHERE Location LIKE '%fooValue%'
     * </code>
     *
     * @param     string $location The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLocationQuery The current query, for fluid interface
     */
    public function filterByLocation($location = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($location)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $location)) {
                $location = str_replace('*', '%', $location);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLocationPeer::LOCATION, $location, $comparison);
    }

    /**
     * Filter the query on the Coordinates column
     *
     * Example usage:
     * <code>
     * $query->filterByCoordinates('fooValue');   // WHERE Coordinates = 'fooValue'
     * $query->filterByCoordinates('%fooValue%'); // WHERE Coordinates LIKE '%fooValue%'
     * </code>
     *
     * @param     string $coordinates The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLocationQuery The current query, for fluid interface
     */
    public function filterByCoordinates($coordinates = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($coordinates)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $coordinates)) {
                $coordinates = str_replace('*', '%', $coordinates);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLocationPeer::COORDINATES, $coordinates, $comparison);
    }

    /**
     * Filter the query on the Commerce column
     *
     * Example usage:
     * <code>
     * $query->filterByCommerce('fooValue');   // WHERE Commerce = 'fooValue'
     * $query->filterByCommerce('%fooValue%'); // WHERE Commerce LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commerce The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLocationQuery The current query, for fluid interface
     */
    public function filterByCommerce($commerce = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commerce)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commerce)) {
                $commerce = str_replace('*', '%', $commerce);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLocationPeer::COMMERCE, $commerce, $comparison);
    }

    /**
     * Filter the query on the Category column
     *
     * Example usage:
     * <code>
     * $query->filterByCategory('fooValue');   // WHERE Category = 'fooValue'
     * $query->filterByCategory('%fooValue%'); // WHERE Category LIKE '%fooValue%'
     * </code>
     *
     * @param     string $category The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLocationQuery The current query, for fluid interface
     */
    public function filterByCategory($category = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($category)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $category)) {
                $category = str_replace('*', '%', $category);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLocationPeer::CATEGORY, $category, $comparison);
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
     * @return FlLocationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FlLocationPeer::EDITABLE, $editable, $comparison);
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
     * @return FlLocationQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(FlLocationPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(FlLocationPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLocationPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   FlLocation $flLocation Object to remove from the list of results
     *
     * @return FlLocationQuery The current query, for fluid interface
     */
    public function prune($flLocation = null)
    {
        if ($flLocation) {
            $this->addUsingAlias(FlLocationPeer::LOCATIONCODE, $flLocation->getLocationcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
