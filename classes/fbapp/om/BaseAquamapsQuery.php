<?php


/**
 * Base class that represents a query for the 'aquamaps' table.
 *
 *
 *
 * @method AquamapsQuery orderByGenus($order = Criteria::ASC) Order by the genus column
 * @method AquamapsQuery orderBySpecies($order = Criteria::ASC) Order by the species column
 * @method AquamapsQuery orderBySpeciesid($order = Criteria::ASC) Order by the speciesid column
 * @method AquamapsQuery orderBySpeccode($order = Criteria::ASC) Order by the speccode column
 * @method AquamapsQuery orderByDatabaseId($order = Criteria::ASC) Order by the database_id column
 * @method AquamapsQuery orderByExpertId($order = Criteria::ASC) Order by the expert_id column
 * @method AquamapsQuery orderByPkid($order = Criteria::ASC) Order by the PKID column
 *
 * @method AquamapsQuery groupByGenus() Group by the genus column
 * @method AquamapsQuery groupBySpecies() Group by the species column
 * @method AquamapsQuery groupBySpeciesid() Group by the speciesid column
 * @method AquamapsQuery groupBySpeccode() Group by the speccode column
 * @method AquamapsQuery groupByDatabaseId() Group by the database_id column
 * @method AquamapsQuery groupByExpertId() Group by the expert_id column
 * @method AquamapsQuery groupByPkid() Group by the PKID column
 *
 * @method AquamapsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AquamapsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AquamapsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Aquamaps findOne(PropelPDO $con = null) Return the first Aquamaps matching the query
 * @method Aquamaps findOneOrCreate(PropelPDO $con = null) Return the first Aquamaps matching the query, or a new Aquamaps object populated from the query conditions when no match is found
 *
 * @method Aquamaps findOneByGenus(string $genus) Return the first Aquamaps filtered by the genus column
 * @method Aquamaps findOneBySpecies(string $species) Return the first Aquamaps filtered by the species column
 * @method Aquamaps findOneBySpeciesid(string $speciesid) Return the first Aquamaps filtered by the speciesid column
 * @method Aquamaps findOneBySpeccode(int $speccode) Return the first Aquamaps filtered by the speccode column
 * @method Aquamaps findOneByDatabaseId(int $database_id) Return the first Aquamaps filtered by the database_id column
 * @method Aquamaps findOneByExpertId(int $expert_id) Return the first Aquamaps filtered by the expert_id column
 *
 * @method array findByGenus(string $genus) Return Aquamaps objects filtered by the genus column
 * @method array findBySpecies(string $species) Return Aquamaps objects filtered by the species column
 * @method array findBySpeciesid(string $speciesid) Return Aquamaps objects filtered by the speciesid column
 * @method array findBySpeccode(int $speccode) Return Aquamaps objects filtered by the speccode column
 * @method array findByDatabaseId(int $database_id) Return Aquamaps objects filtered by the database_id column
 * @method array findByExpertId(int $expert_id) Return Aquamaps objects filtered by the expert_id column
 * @method array findByPkid(string $PKID) Return Aquamaps objects filtered by the PKID column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseAquamapsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAquamapsQuery object.
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
            $modelName = 'Aquamaps';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AquamapsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AquamapsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AquamapsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AquamapsQuery) {
            return $criteria;
        }
        $query = new AquamapsQuery(null, null, $modelAlias);

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
     * @return   Aquamaps|Aquamaps[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AquamapsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AquamapsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Aquamaps A model object, or null if the key is not found
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
     * @return                 Aquamaps A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `genus`, `species`, `speciesid`, `speccode`, `database_id`, `expert_id`, `PKID` FROM `aquamaps` WHERE `PKID` = :p0';
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
            $obj = new Aquamaps();
            $obj->hydrate($row);
            AquamapsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Aquamaps|Aquamaps[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Aquamaps[]|mixed the list of results, formatted by the current formatter
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
     * @return AquamapsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AquamapsPeer::PKID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AquamapsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AquamapsPeer::PKID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the genus column
     *
     * Example usage:
     * <code>
     * $query->filterByGenus('fooValue');   // WHERE genus = 'fooValue'
     * $query->filterByGenus('%fooValue%'); // WHERE genus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquamapsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AquamapsPeer::GENUS, $genus, $comparison);
    }

    /**
     * Filter the query on the species column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecies('fooValue');   // WHERE species = 'fooValue'
     * $query->filterBySpecies('%fooValue%'); // WHERE species LIKE '%fooValue%'
     * </code>
     *
     * @param     string $species The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquamapsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AquamapsPeer::SPECIES, $species, $comparison);
    }

    /**
     * Filter the query on the speciesid column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeciesid('fooValue');   // WHERE speciesid = 'fooValue'
     * $query->filterBySpeciesid('%fooValue%'); // WHERE speciesid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $speciesid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquamapsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AquamapsPeer::SPECIESID, $speciesid, $comparison);
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
     * @return AquamapsQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(AquamapsPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(AquamapsPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AquamapsPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the database_id column
     *
     * Example usage:
     * <code>
     * $query->filterByDatabaseId(1234); // WHERE database_id = 1234
     * $query->filterByDatabaseId(array(12, 34)); // WHERE database_id IN (12, 34)
     * $query->filterByDatabaseId(array('min' => 12)); // WHERE database_id >= 12
     * $query->filterByDatabaseId(array('max' => 12)); // WHERE database_id <= 12
     * </code>
     *
     * @param     mixed $databaseId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquamapsQuery The current query, for fluid interface
     */
    public function filterByDatabaseId($databaseId = null, $comparison = null)
    {
        if (is_array($databaseId)) {
            $useMinMax = false;
            if (isset($databaseId['min'])) {
                $this->addUsingAlias(AquamapsPeer::DATABASE_ID, $databaseId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($databaseId['max'])) {
                $this->addUsingAlias(AquamapsPeer::DATABASE_ID, $databaseId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AquamapsPeer::DATABASE_ID, $databaseId, $comparison);
    }

    /**
     * Filter the query on the expert_id column
     *
     * Example usage:
     * <code>
     * $query->filterByExpertId(1234); // WHERE expert_id = 1234
     * $query->filterByExpertId(array(12, 34)); // WHERE expert_id IN (12, 34)
     * $query->filterByExpertId(array('min' => 12)); // WHERE expert_id >= 12
     * $query->filterByExpertId(array('max' => 12)); // WHERE expert_id <= 12
     * </code>
     *
     * @param     mixed $expertId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquamapsQuery The current query, for fluid interface
     */
    public function filterByExpertId($expertId = null, $comparison = null)
    {
        if (is_array($expertId)) {
            $useMinMax = false;
            if (isset($expertId['min'])) {
                $this->addUsingAlias(AquamapsPeer::EXPERT_ID, $expertId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expertId['max'])) {
                $this->addUsingAlias(AquamapsPeer::EXPERT_ID, $expertId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AquamapsPeer::EXPERT_ID, $expertId, $comparison);
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
     * @return AquamapsQuery The current query, for fluid interface
     */
    public function filterByPkid($pkid = null, $comparison = null)
    {
        if (is_array($pkid)) {
            $useMinMax = false;
            if (isset($pkid['min'])) {
                $this->addUsingAlias(AquamapsPeer::PKID, $pkid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pkid['max'])) {
                $this->addUsingAlias(AquamapsPeer::PKID, $pkid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AquamapsPeer::PKID, $pkid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Aquamaps $aquamaps Object to remove from the list of results
     *
     * @return AquamapsQuery The current query, for fluid interface
     */
    public function prune($aquamaps = null)
    {
        if ($aquamaps) {
            $this->addUsingAlias(AquamapsPeer::PKID, $aquamaps->getPkid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
