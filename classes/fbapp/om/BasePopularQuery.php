<?php


/**
 * Base class that represents a query for the 'popular' table.
 *
 *
 *
 * @method PopularQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method PopularQuery orderBySpeciesid($order = Criteria::ASC) Order by the SpeciesID column
 * @method PopularQuery orderByGenus($order = Criteria::ASC) Order by the Genus column
 * @method PopularQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method PopularQuery orderBySciname($order = Criteria::ASC) Order by the Sciname column
 * @method PopularQuery orderByResults($order = Criteria::ASC) Order by the Results column
 *
 * @method PopularQuery groupBySpeccode() Group by the Speccode column
 * @method PopularQuery groupBySpeciesid() Group by the SpeciesID column
 * @method PopularQuery groupByGenus() Group by the Genus column
 * @method PopularQuery groupBySpecies() Group by the Species column
 * @method PopularQuery groupBySciname() Group by the Sciname column
 * @method PopularQuery groupByResults() Group by the Results column
 *
 * @method PopularQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PopularQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PopularQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Popular findOne(PropelPDO $con = null) Return the first Popular matching the query
 * @method Popular findOneOrCreate(PropelPDO $con = null) Return the first Popular matching the query, or a new Popular object populated from the query conditions when no match is found
 *
 * @method Popular findOneBySpeciesid(string $SpeciesID) Return the first Popular filtered by the SpeciesID column
 * @method Popular findOneByGenus(string $Genus) Return the first Popular filtered by the Genus column
 * @method Popular findOneBySpecies(string $Species) Return the first Popular filtered by the Species column
 * @method Popular findOneBySciname(string $Sciname) Return the first Popular filtered by the Sciname column
 * @method Popular findOneByResults(int $Results) Return the first Popular filtered by the Results column
 *
 * @method array findBySpeccode(double $Speccode) Return Popular objects filtered by the Speccode column
 * @method array findBySpeciesid(string $SpeciesID) Return Popular objects filtered by the SpeciesID column
 * @method array findByGenus(string $Genus) Return Popular objects filtered by the Genus column
 * @method array findBySpecies(string $Species) Return Popular objects filtered by the Species column
 * @method array findBySciname(string $Sciname) Return Popular objects filtered by the Sciname column
 * @method array findByResults(int $Results) Return Popular objects filtered by the Results column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BasePopularQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePopularQuery object.
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
            $modelName = 'Popular';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PopularQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PopularQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PopularQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PopularQuery) {
            return $criteria;
        }
        $query = new PopularQuery(null, null, $modelAlias);

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
     * @return   Popular|Popular[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PopularPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PopularPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Popular A model object, or null if the key is not found
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
     * @return                 Popular A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `Speccode`, `SpeciesID`, `Genus`, `Species`, `Sciname`, `Results` FROM `popular` WHERE `Speccode` = :p0';
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
            $obj = new Popular();
            $obj->hydrate($row);
            PopularPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Popular|Popular[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Popular[]|mixed the list of results, formatted by the current formatter
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
     * @return PopularQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PopularPeer::SPECCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PopularQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PopularPeer::SPECCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the Speccode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeccode(1234); // WHERE Speccode = 1234
     * $query->filterBySpeccode(array(12, 34)); // WHERE Speccode IN (12, 34)
     * $query->filterBySpeccode(array('min' => 12)); // WHERE Speccode >= 12
     * $query->filterBySpeccode(array('max' => 12)); // WHERE Speccode <= 12
     * </code>
     *
     * @param     mixed $speccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopularQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(PopularPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(PopularPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopularPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the SpeciesID column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeciesid('fooValue');   // WHERE SpeciesID = 'fooValue'
     * $query->filterBySpeciesid('%fooValue%'); // WHERE SpeciesID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $speciesid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopularQuery The current query, for fluid interface
     */
    public function filterBySpeciesid($speciesid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($speciesid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $speciesid)) {
                $speciesid = str_replace('*', '%', $speciesid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopularPeer::SPECIESID, $speciesid, $comparison);
    }

    /**
     * Filter the query on the Genus column
     *
     * Example usage:
     * <code>
     * $query->filterByGenus('fooValue');   // WHERE Genus = 'fooValue'
     * $query->filterByGenus('%fooValue%'); // WHERE Genus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopularQuery The current query, for fluid interface
     */
    public function filterByGenus($genus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($genus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $genus)) {
                $genus = str_replace('*', '%', $genus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopularPeer::GENUS, $genus, $comparison);
    }

    /**
     * Filter the query on the Species column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecies('fooValue');   // WHERE Species = 'fooValue'
     * $query->filterBySpecies('%fooValue%'); // WHERE Species LIKE '%fooValue%'
     * </code>
     *
     * @param     string $species The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopularQuery The current query, for fluid interface
     */
    public function filterBySpecies($species = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($species)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $species)) {
                $species = str_replace('*', '%', $species);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopularPeer::SPECIES, $species, $comparison);
    }

    /**
     * Filter the query on the Sciname column
     *
     * Example usage:
     * <code>
     * $query->filterBySciname('fooValue');   // WHERE Sciname = 'fooValue'
     * $query->filterBySciname('%fooValue%'); // WHERE Sciname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sciname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopularQuery The current query, for fluid interface
     */
    public function filterBySciname($sciname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sciname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sciname)) {
                $sciname = str_replace('*', '%', $sciname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopularPeer::SCINAME, $sciname, $comparison);
    }

    /**
     * Filter the query on the Results column
     *
     * Example usage:
     * <code>
     * $query->filterByResults(1234); // WHERE Results = 1234
     * $query->filterByResults(array(12, 34)); // WHERE Results IN (12, 34)
     * $query->filterByResults(array('min' => 12)); // WHERE Results >= 12
     * $query->filterByResults(array('max' => 12)); // WHERE Results <= 12
     * </code>
     *
     * @param     mixed $results The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopularQuery The current query, for fluid interface
     */
    public function filterByResults($results = null, $comparison = null)
    {
        if (is_array($results)) {
            $useMinMax = false;
            if (isset($results['min'])) {
                $this->addUsingAlias(PopularPeer::RESULTS, $results['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($results['max'])) {
                $this->addUsingAlias(PopularPeer::RESULTS, $results['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopularPeer::RESULTS, $results, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Popular $popular Object to remove from the list of results
     *
     * @return PopularQuery The current query, for fluid interface
     */
    public function prune($popular = null)
    {
        if ($popular) {
            $this->addUsingAlias(PopularPeer::SPECCODE, $popular->getSpeccode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
