<?php


/**
 * Base class that represents a query for the 'alieninvasive' table.
 *
 *
 *
 * @method AlieninvasiveQuery orderByAutoctr($order = Criteria::ASC) Order by the Autoctr column
 * @method AlieninvasiveQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method AlieninvasiveQuery orderByGenus($order = Criteria::ASC) Order by the Genus column
 * @method AlieninvasiveQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method AlieninvasiveQuery orderByNameofdatabase($order = Criteria::ASC) Order by the NameofDatabase column
 * @method AlieninvasiveQuery orderByDescription($order = Criteria::ASC) Order by the Description column
 * @method AlieninvasiveQuery orderByUrl($order = Criteria::ASC) Order by the URL column
 * @method AlieninvasiveQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method AlieninvasiveQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method AlieninvasiveQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method AlieninvasiveQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method AlieninvasiveQuery orderByChecked($order = Criteria::ASC) Order by the Checked column
 * @method AlieninvasiveQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method AlieninvasiveQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method AlieninvasiveQuery groupByAutoctr() Group by the Autoctr column
 * @method AlieninvasiveQuery groupBySpeccode() Group by the Speccode column
 * @method AlieninvasiveQuery groupByGenus() Group by the Genus column
 * @method AlieninvasiveQuery groupBySpecies() Group by the Species column
 * @method AlieninvasiveQuery groupByNameofdatabase() Group by the NameofDatabase column
 * @method AlieninvasiveQuery groupByDescription() Group by the Description column
 * @method AlieninvasiveQuery groupByUrl() Group by the URL column
 * @method AlieninvasiveQuery groupByEntered() Group by the Entered column
 * @method AlieninvasiveQuery groupByDateentered() Group by the DateEntered column
 * @method AlieninvasiveQuery groupByModified() Group by the Modified column
 * @method AlieninvasiveQuery groupByDatemodified() Group by the DateModified column
 * @method AlieninvasiveQuery groupByChecked() Group by the Checked column
 * @method AlieninvasiveQuery groupByDatechecked() Group by the DateChecked column
 * @method AlieninvasiveQuery groupByTs() Group by the TS column
 *
 * @method AlieninvasiveQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AlieninvasiveQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AlieninvasiveQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Alieninvasive findOne(PropelPDO $con = null) Return the first Alieninvasive matching the query
 * @method Alieninvasive findOneOrCreate(PropelPDO $con = null) Return the first Alieninvasive matching the query, or a new Alieninvasive object populated from the query conditions when no match is found
 *
 * @method Alieninvasive findOneByAutoctr(int $Autoctr) Return the first Alieninvasive filtered by the Autoctr column
 * @method Alieninvasive findOneBySpeccode(int $Speccode) Return the first Alieninvasive filtered by the Speccode column
 * @method Alieninvasive findOneByGenus(string $Genus) Return the first Alieninvasive filtered by the Genus column
 * @method Alieninvasive findOneBySpecies(string $Species) Return the first Alieninvasive filtered by the Species column
 * @method Alieninvasive findOneByNameofdatabase(string $NameofDatabase) Return the first Alieninvasive filtered by the NameofDatabase column
 * @method Alieninvasive findOneByDescription(string $Description) Return the first Alieninvasive filtered by the Description column
 * @method Alieninvasive findOneByUrl(string $URL) Return the first Alieninvasive filtered by the URL column
 * @method Alieninvasive findOneByEntered(int $Entered) Return the first Alieninvasive filtered by the Entered column
 * @method Alieninvasive findOneByDateentered(string $DateEntered) Return the first Alieninvasive filtered by the DateEntered column
 * @method Alieninvasive findOneByModified(int $Modified) Return the first Alieninvasive filtered by the Modified column
 * @method Alieninvasive findOneByDatemodified(string $DateModified) Return the first Alieninvasive filtered by the DateModified column
 * @method Alieninvasive findOneByChecked(int $Checked) Return the first Alieninvasive filtered by the Checked column
 * @method Alieninvasive findOneByDatechecked(string $DateChecked) Return the first Alieninvasive filtered by the DateChecked column
 * @method Alieninvasive findOneByTs(string $TS) Return the first Alieninvasive filtered by the TS column
 *
 * @method array findByAutoctr(int $Autoctr) Return Alieninvasive objects filtered by the Autoctr column
 * @method array findBySpeccode(int $Speccode) Return Alieninvasive objects filtered by the Speccode column
 * @method array findByGenus(string $Genus) Return Alieninvasive objects filtered by the Genus column
 * @method array findBySpecies(string $Species) Return Alieninvasive objects filtered by the Species column
 * @method array findByNameofdatabase(string $NameofDatabase) Return Alieninvasive objects filtered by the NameofDatabase column
 * @method array findByDescription(string $Description) Return Alieninvasive objects filtered by the Description column
 * @method array findByUrl(string $URL) Return Alieninvasive objects filtered by the URL column
 * @method array findByEntered(int $Entered) Return Alieninvasive objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Alieninvasive objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Alieninvasive objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Alieninvasive objects filtered by the DateModified column
 * @method array findByChecked(int $Checked) Return Alieninvasive objects filtered by the Checked column
 * @method array findByDatechecked(string $DateChecked) Return Alieninvasive objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Alieninvasive objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseAlieninvasiveQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAlieninvasiveQuery object.
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
            $modelName = 'Alieninvasive';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AlieninvasiveQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AlieninvasiveQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AlieninvasiveQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AlieninvasiveQuery) {
            return $criteria;
        }
        $query = new AlieninvasiveQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$Autoctr, $Speccode, $NameofDatabase]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Alieninvasive|Alieninvasive[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AlieninvasivePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AlieninvasivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Alieninvasive A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `Autoctr`, `Speccode`, `Genus`, `Species`, `NameofDatabase`, `Description`, `URL`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Checked`, `DateChecked`, `TS` FROM `alieninvasive` WHERE `Autoctr` = :p0 AND `Speccode` = :p1 AND `NameofDatabase` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Alieninvasive();
            $obj->hydrate($row);
            AlieninvasivePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return Alieninvasive|Alieninvasive[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Alieninvasive[]|mixed the list of results, formatted by the current formatter
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
     * @return AlieninvasiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(AlieninvasivePeer::AUTOCTR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(AlieninvasivePeer::SPECCODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(AlieninvasivePeer::NAMEOFDATABASE, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AlieninvasiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(AlieninvasivePeer::AUTOCTR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(AlieninvasivePeer::SPECCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(AlieninvasivePeer::NAMEOFDATABASE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the Autoctr column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoctr(1234); // WHERE Autoctr = 1234
     * $query->filterByAutoctr(array(12, 34)); // WHERE Autoctr IN (12, 34)
     * $query->filterByAutoctr(array('min' => 12)); // WHERE Autoctr >= 12
     * $query->filterByAutoctr(array('max' => 12)); // WHERE Autoctr <= 12
     * </code>
     *
     * @param     mixed $autoctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlieninvasiveQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(AlieninvasivePeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(AlieninvasivePeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AlieninvasivePeer::AUTOCTR, $autoctr, $comparison);
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
     * @return AlieninvasiveQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(AlieninvasivePeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(AlieninvasivePeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AlieninvasivePeer::SPECCODE, $speccode, $comparison);
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
     * @return AlieninvasiveQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AlieninvasivePeer::GENUS, $genus, $comparison);
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
     * @return AlieninvasiveQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AlieninvasivePeer::SPECIES, $species, $comparison);
    }

    /**
     * Filter the query on the NameofDatabase column
     *
     * Example usage:
     * <code>
     * $query->filterByNameofdatabase('fooValue');   // WHERE NameofDatabase = 'fooValue'
     * $query->filterByNameofdatabase('%fooValue%'); // WHERE NameofDatabase LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nameofdatabase The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlieninvasiveQuery The current query, for fluid interface
     */
    public function filterByNameofdatabase($nameofdatabase = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nameofdatabase)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nameofdatabase)) {
                $nameofdatabase = str_replace('*', '%', $nameofdatabase);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AlieninvasivePeer::NAMEOFDATABASE, $nameofdatabase, $comparison);
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
     * @return AlieninvasiveQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AlieninvasivePeer::DESCRIPTION, $description, $comparison);
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
     * @return AlieninvasiveQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AlieninvasivePeer::URL, $url, $comparison);
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
     * @return AlieninvasiveQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(AlieninvasivePeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(AlieninvasivePeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AlieninvasivePeer::ENTERED, $entered, $comparison);
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
     * @return AlieninvasiveQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(AlieninvasivePeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(AlieninvasivePeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AlieninvasivePeer::DATEENTERED, $dateentered, $comparison);
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
     * @return AlieninvasiveQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(AlieninvasivePeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(AlieninvasivePeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AlieninvasivePeer::MODIFIED, $modified, $comparison);
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
     * @return AlieninvasiveQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(AlieninvasivePeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(AlieninvasivePeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AlieninvasivePeer::DATEMODIFIED, $datemodified, $comparison);
    }

    /**
     * Filter the query on the Checked column
     *
     * Example usage:
     * <code>
     * $query->filterByChecked(1234); // WHERE Checked = 1234
     * $query->filterByChecked(array(12, 34)); // WHERE Checked IN (12, 34)
     * $query->filterByChecked(array('min' => 12)); // WHERE Checked >= 12
     * $query->filterByChecked(array('max' => 12)); // WHERE Checked <= 12
     * </code>
     *
     * @param     mixed $checked The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlieninvasiveQuery The current query, for fluid interface
     */
    public function filterByChecked($checked = null, $comparison = null)
    {
        if (is_array($checked)) {
            $useMinMax = false;
            if (isset($checked['min'])) {
                $this->addUsingAlias(AlieninvasivePeer::CHECKED, $checked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($checked['max'])) {
                $this->addUsingAlias(AlieninvasivePeer::CHECKED, $checked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AlieninvasivePeer::CHECKED, $checked, $comparison);
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
     * @return AlieninvasiveQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(AlieninvasivePeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(AlieninvasivePeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AlieninvasivePeer::DATECHECKED, $datechecked, $comparison);
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
     * @return AlieninvasiveQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(AlieninvasivePeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(AlieninvasivePeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AlieninvasivePeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Alieninvasive $alieninvasive Object to remove from the list of results
     *
     * @return AlieninvasiveQuery The current query, for fluid interface
     */
    public function prune($alieninvasive = null)
    {
        if ($alieninvasive) {
            $this->addCond('pruneCond0', $this->getAliasedColName(AlieninvasivePeer::AUTOCTR), $alieninvasive->getAutoctr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(AlieninvasivePeer::SPECCODE), $alieninvasive->getSpeccode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(AlieninvasivePeer::NAMEOFDATABASE), $alieninvasive->getNameofdatabase(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
