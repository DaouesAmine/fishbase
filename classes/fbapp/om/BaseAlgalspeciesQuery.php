<?php


/**
 * Base class that represents a query for the 'algalspecies' table.
 *
 *
 *
 * @method AlgalspeciesQuery orderByGenus($order = Criteria::ASC) Order by the Genus column
 * @method AlgalspeciesQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method AlgalspeciesQuery orderByScientificname($order = Criteria::ASC) Order by the ScientificName column
 * @method AlgalspeciesQuery orderByGenusid($order = Criteria::ASC) Order by the GenusID column
 * @method AlgalspeciesQuery orderBySpeciesid($order = Criteria::ASC) Order by the SpeciesID column
 * @method AlgalspeciesQuery orderByGenusdetaillink($order = Criteria::ASC) Order by the GenusDetailLink column
 * @method AlgalspeciesQuery orderBySpeciesdetaillink($order = Criteria::ASC) Order by the SpeciesDetailLink column
 * @method AlgalspeciesQuery orderByPkid($order = Criteria::ASC) Order by the PKID column
 *
 * @method AlgalspeciesQuery groupByGenus() Group by the Genus column
 * @method AlgalspeciesQuery groupBySpecies() Group by the Species column
 * @method AlgalspeciesQuery groupByScientificname() Group by the ScientificName column
 * @method AlgalspeciesQuery groupByGenusid() Group by the GenusID column
 * @method AlgalspeciesQuery groupBySpeciesid() Group by the SpeciesID column
 * @method AlgalspeciesQuery groupByGenusdetaillink() Group by the GenusDetailLink column
 * @method AlgalspeciesQuery groupBySpeciesdetaillink() Group by the SpeciesDetailLink column
 * @method AlgalspeciesQuery groupByPkid() Group by the PKID column
 *
 * @method AlgalspeciesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AlgalspeciesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AlgalspeciesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Algalspecies findOne(PropelPDO $con = null) Return the first Algalspecies matching the query
 * @method Algalspecies findOneOrCreate(PropelPDO $con = null) Return the first Algalspecies matching the query, or a new Algalspecies object populated from the query conditions when no match is found
 *
 * @method Algalspecies findOneByGenus(string $Genus) Return the first Algalspecies filtered by the Genus column
 * @method Algalspecies findOneBySpecies(string $Species) Return the first Algalspecies filtered by the Species column
 * @method Algalspecies findOneByScientificname(string $ScientificName) Return the first Algalspecies filtered by the ScientificName column
 * @method Algalspecies findOneByGenusid(double $GenusID) Return the first Algalspecies filtered by the GenusID column
 * @method Algalspecies findOneBySpeciesid(double $SpeciesID) Return the first Algalspecies filtered by the SpeciesID column
 * @method Algalspecies findOneByGenusdetaillink(string $GenusDetailLink) Return the first Algalspecies filtered by the GenusDetailLink column
 * @method Algalspecies findOneBySpeciesdetaillink(string $SpeciesDetailLink) Return the first Algalspecies filtered by the SpeciesDetailLink column
 *
 * @method array findByGenus(string $Genus) Return Algalspecies objects filtered by the Genus column
 * @method array findBySpecies(string $Species) Return Algalspecies objects filtered by the Species column
 * @method array findByScientificname(string $ScientificName) Return Algalspecies objects filtered by the ScientificName column
 * @method array findByGenusid(double $GenusID) Return Algalspecies objects filtered by the GenusID column
 * @method array findBySpeciesid(double $SpeciesID) Return Algalspecies objects filtered by the SpeciesID column
 * @method array findByGenusdetaillink(string $GenusDetailLink) Return Algalspecies objects filtered by the GenusDetailLink column
 * @method array findBySpeciesdetaillink(string $SpeciesDetailLink) Return Algalspecies objects filtered by the SpeciesDetailLink column
 * @method array findByPkid(string $PKID) Return Algalspecies objects filtered by the PKID column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseAlgalspeciesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAlgalspeciesQuery object.
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
            $modelName = 'Algalspecies';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AlgalspeciesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AlgalspeciesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AlgalspeciesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AlgalspeciesQuery) {
            return $criteria;
        }
        $query = new AlgalspeciesQuery(null, null, $modelAlias);

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
     * @return   Algalspecies|Algalspecies[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AlgalspeciesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AlgalspeciesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Algalspecies A model object, or null if the key is not found
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
     * @return                 Algalspecies A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `Genus`, `Species`, `ScientificName`, `GenusID`, `SpeciesID`, `GenusDetailLink`, `SpeciesDetailLink`, `PKID` FROM `algalspecies` WHERE `PKID` = :p0';
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
            $obj = new Algalspecies();
            $obj->hydrate($row);
            AlgalspeciesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Algalspecies|Algalspecies[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Algalspecies[]|mixed the list of results, formatted by the current formatter
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
     * @return AlgalspeciesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AlgalspeciesPeer::PKID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AlgalspeciesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AlgalspeciesPeer::PKID, $keys, Criteria::IN);
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
     * @return AlgalspeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AlgalspeciesPeer::GENUS, $genus, $comparison);
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
     * @return AlgalspeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AlgalspeciesPeer::SPECIES, $species, $comparison);
    }

    /**
     * Filter the query on the ScientificName column
     *
     * Example usage:
     * <code>
     * $query->filterByScientificname('fooValue');   // WHERE ScientificName = 'fooValue'
     * $query->filterByScientificname('%fooValue%'); // WHERE ScientificName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $scientificname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlgalspeciesQuery The current query, for fluid interface
     */
    public function filterByScientificname($scientificname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($scientificname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $scientificname)) {
                $scientificname = str_replace('*', '%', $scientificname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AlgalspeciesPeer::SCIENTIFICNAME, $scientificname, $comparison);
    }

    /**
     * Filter the query on the GenusID column
     *
     * Example usage:
     * <code>
     * $query->filterByGenusid(1234); // WHERE GenusID = 1234
     * $query->filterByGenusid(array(12, 34)); // WHERE GenusID IN (12, 34)
     * $query->filterByGenusid(array('min' => 12)); // WHERE GenusID >= 12
     * $query->filterByGenusid(array('max' => 12)); // WHERE GenusID <= 12
     * </code>
     *
     * @param     mixed $genusid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlgalspeciesQuery The current query, for fluid interface
     */
    public function filterByGenusid($genusid = null, $comparison = null)
    {
        if (is_array($genusid)) {
            $useMinMax = false;
            if (isset($genusid['min'])) {
                $this->addUsingAlias(AlgalspeciesPeer::GENUSID, $genusid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($genusid['max'])) {
                $this->addUsingAlias(AlgalspeciesPeer::GENUSID, $genusid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AlgalspeciesPeer::GENUSID, $genusid, $comparison);
    }

    /**
     * Filter the query on the SpeciesID column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeciesid(1234); // WHERE SpeciesID = 1234
     * $query->filterBySpeciesid(array(12, 34)); // WHERE SpeciesID IN (12, 34)
     * $query->filterBySpeciesid(array('min' => 12)); // WHERE SpeciesID >= 12
     * $query->filterBySpeciesid(array('max' => 12)); // WHERE SpeciesID <= 12
     * </code>
     *
     * @param     mixed $speciesid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlgalspeciesQuery The current query, for fluid interface
     */
    public function filterBySpeciesid($speciesid = null, $comparison = null)
    {
        if (is_array($speciesid)) {
            $useMinMax = false;
            if (isset($speciesid['min'])) {
                $this->addUsingAlias(AlgalspeciesPeer::SPECIESID, $speciesid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speciesid['max'])) {
                $this->addUsingAlias(AlgalspeciesPeer::SPECIESID, $speciesid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AlgalspeciesPeer::SPECIESID, $speciesid, $comparison);
    }

    /**
     * Filter the query on the GenusDetailLink column
     *
     * Example usage:
     * <code>
     * $query->filterByGenusdetaillink('fooValue');   // WHERE GenusDetailLink = 'fooValue'
     * $query->filterByGenusdetaillink('%fooValue%'); // WHERE GenusDetailLink LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genusdetaillink The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlgalspeciesQuery The current query, for fluid interface
     */
    public function filterByGenusdetaillink($genusdetaillink = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($genusdetaillink)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $genusdetaillink)) {
                $genusdetaillink = str_replace('*', '%', $genusdetaillink);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AlgalspeciesPeer::GENUSDETAILLINK, $genusdetaillink, $comparison);
    }

    /**
     * Filter the query on the SpeciesDetailLink column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeciesdetaillink('fooValue');   // WHERE SpeciesDetailLink = 'fooValue'
     * $query->filterBySpeciesdetaillink('%fooValue%'); // WHERE SpeciesDetailLink LIKE '%fooValue%'
     * </code>
     *
     * @param     string $speciesdetaillink The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlgalspeciesQuery The current query, for fluid interface
     */
    public function filterBySpeciesdetaillink($speciesdetaillink = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($speciesdetaillink)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $speciesdetaillink)) {
                $speciesdetaillink = str_replace('*', '%', $speciesdetaillink);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AlgalspeciesPeer::SPECIESDETAILLINK, $speciesdetaillink, $comparison);
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
     * @return AlgalspeciesQuery The current query, for fluid interface
     */
    public function filterByPkid($pkid = null, $comparison = null)
    {
        if (is_array($pkid)) {
            $useMinMax = false;
            if (isset($pkid['min'])) {
                $this->addUsingAlias(AlgalspeciesPeer::PKID, $pkid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pkid['max'])) {
                $this->addUsingAlias(AlgalspeciesPeer::PKID, $pkid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AlgalspeciesPeer::PKID, $pkid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Algalspecies $algalspecies Object to remove from the list of results
     *
     * @return AlgalspeciesQuery The current query, for fluid interface
     */
    public function prune($algalspecies = null)
    {
        if ($algalspecies) {
            $this->addUsingAlias(AlgalspeciesPeer::PKID, $algalspecies->getPkid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
