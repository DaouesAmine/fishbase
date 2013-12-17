<?php


/**
 * Base class that represents a query for the 'sounds' table.
 *
 *
 *
 * @method SoundsQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method SoundsQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method SoundsQuery orderByStockcode($order = Criteria::ASC) Order by the Stockcode column
 * @method SoundsQuery orderByGenus($order = Criteria::ASC) Order by the Genus column
 * @method SoundsQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method SoundsQuery orderByFishbasename($order = Criteria::ASC) Order by the FishbaseName column
 * @method SoundsQuery orderBySynonymused($order = Criteria::ASC) Order by the SynonymUsed column
 * @method SoundsQuery orderBySoundrefno($order = Criteria::ASC) Order by the SoundRefNo column
 * @method SoundsQuery orderBySoundproduction($order = Criteria::ASC) Order by the SoundProduction column
 * @method SoundsQuery orderBySoundtypes($order = Criteria::ASC) Order by the Soundtypes column
 * @method SoundsQuery orderBySoundorgan($order = Criteria::ASC) Order by the SoundOrgan column
 * @method SoundsQuery orderBySonicmechanism($order = Criteria::ASC) Order by the SonicMechanism column
 * @method SoundsQuery orderByBehaviour($order = Criteria::ASC) Order by the Behaviour column
 * @method SoundsQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method SoundsQuery orderBySoundfile($order = Criteria::ASC) Order by the SoundFile column
 * @method SoundsQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method SoundsQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method SoundsQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method SoundsQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method SoundsQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method SoundsQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method SoundsQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method SoundsQuery groupByAutoctr() Group by the autoctr column
 * @method SoundsQuery groupBySpeccode() Group by the SpecCode column
 * @method SoundsQuery groupByStockcode() Group by the Stockcode column
 * @method SoundsQuery groupByGenus() Group by the Genus column
 * @method SoundsQuery groupBySpecies() Group by the Species column
 * @method SoundsQuery groupByFishbasename() Group by the FishbaseName column
 * @method SoundsQuery groupBySynonymused() Group by the SynonymUsed column
 * @method SoundsQuery groupBySoundrefno() Group by the SoundRefNo column
 * @method SoundsQuery groupBySoundproduction() Group by the SoundProduction column
 * @method SoundsQuery groupBySoundtypes() Group by the Soundtypes column
 * @method SoundsQuery groupBySoundorgan() Group by the SoundOrgan column
 * @method SoundsQuery groupBySonicmechanism() Group by the SonicMechanism column
 * @method SoundsQuery groupByBehaviour() Group by the Behaviour column
 * @method SoundsQuery groupByRemarks() Group by the Remarks column
 * @method SoundsQuery groupBySoundfile() Group by the SoundFile column
 * @method SoundsQuery groupByEntered() Group by the Entered column
 * @method SoundsQuery groupByDateentered() Group by the DateEntered column
 * @method SoundsQuery groupByModified() Group by the Modified column
 * @method SoundsQuery groupByDatemodified() Group by the DateModified column
 * @method SoundsQuery groupByExpert() Group by the Expert column
 * @method SoundsQuery groupByDatechecked() Group by the DateChecked column
 * @method SoundsQuery groupByTs() Group by the TS column
 *
 * @method SoundsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SoundsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SoundsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Sounds findOne(PropelPDO $con = null) Return the first Sounds matching the query
 * @method Sounds findOneOrCreate(PropelPDO $con = null) Return the first Sounds matching the query, or a new Sounds object populated from the query conditions when no match is found
 *
 * @method Sounds findOneByAutoctr(int $autoctr) Return the first Sounds filtered by the autoctr column
 * @method Sounds findOneBySpeccode(int $SpecCode) Return the first Sounds filtered by the SpecCode column
 * @method Sounds findOneByStockcode(int $Stockcode) Return the first Sounds filtered by the Stockcode column
 * @method Sounds findOneByGenus(string $Genus) Return the first Sounds filtered by the Genus column
 * @method Sounds findOneBySpecies(string $Species) Return the first Sounds filtered by the Species column
 * @method Sounds findOneByFishbasename(string $FishbaseName) Return the first Sounds filtered by the FishbaseName column
 * @method Sounds findOneBySynonymused(string $SynonymUsed) Return the first Sounds filtered by the SynonymUsed column
 * @method Sounds findOneBySoundrefno(int $SoundRefNo) Return the first Sounds filtered by the SoundRefNo column
 * @method Sounds findOneBySoundproduction(string $SoundProduction) Return the first Sounds filtered by the SoundProduction column
 * @method Sounds findOneBySoundtypes(string $Soundtypes) Return the first Sounds filtered by the Soundtypes column
 * @method Sounds findOneBySoundorgan(string $SoundOrgan) Return the first Sounds filtered by the SoundOrgan column
 * @method Sounds findOneBySonicmechanism(string $SonicMechanism) Return the first Sounds filtered by the SonicMechanism column
 * @method Sounds findOneByBehaviour(string $Behaviour) Return the first Sounds filtered by the Behaviour column
 * @method Sounds findOneByRemarks(string $Remarks) Return the first Sounds filtered by the Remarks column
 * @method Sounds findOneBySoundfile(string $SoundFile) Return the first Sounds filtered by the SoundFile column
 * @method Sounds findOneByEntered(int $Entered) Return the first Sounds filtered by the Entered column
 * @method Sounds findOneByDateentered(string $DateEntered) Return the first Sounds filtered by the DateEntered column
 * @method Sounds findOneByModified(int $Modified) Return the first Sounds filtered by the Modified column
 * @method Sounds findOneByDatemodified(string $DateModified) Return the first Sounds filtered by the DateModified column
 * @method Sounds findOneByExpert(int $Expert) Return the first Sounds filtered by the Expert column
 * @method Sounds findOneByDatechecked(string $DateChecked) Return the first Sounds filtered by the DateChecked column
 * @method Sounds findOneByTs(string $TS) Return the first Sounds filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Sounds objects filtered by the autoctr column
 * @method array findBySpeccode(int $SpecCode) Return Sounds objects filtered by the SpecCode column
 * @method array findByStockcode(int $Stockcode) Return Sounds objects filtered by the Stockcode column
 * @method array findByGenus(string $Genus) Return Sounds objects filtered by the Genus column
 * @method array findBySpecies(string $Species) Return Sounds objects filtered by the Species column
 * @method array findByFishbasename(string $FishbaseName) Return Sounds objects filtered by the FishbaseName column
 * @method array findBySynonymused(string $SynonymUsed) Return Sounds objects filtered by the SynonymUsed column
 * @method array findBySoundrefno(int $SoundRefNo) Return Sounds objects filtered by the SoundRefNo column
 * @method array findBySoundproduction(string $SoundProduction) Return Sounds objects filtered by the SoundProduction column
 * @method array findBySoundtypes(string $Soundtypes) Return Sounds objects filtered by the Soundtypes column
 * @method array findBySoundorgan(string $SoundOrgan) Return Sounds objects filtered by the SoundOrgan column
 * @method array findBySonicmechanism(string $SonicMechanism) Return Sounds objects filtered by the SonicMechanism column
 * @method array findByBehaviour(string $Behaviour) Return Sounds objects filtered by the Behaviour column
 * @method array findByRemarks(string $Remarks) Return Sounds objects filtered by the Remarks column
 * @method array findBySoundfile(string $SoundFile) Return Sounds objects filtered by the SoundFile column
 * @method array findByEntered(int $Entered) Return Sounds objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Sounds objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Sounds objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Sounds objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Sounds objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Sounds objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Sounds objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseSoundsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSoundsQuery object.
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
            $modelName = 'Sounds';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SoundsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SoundsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SoundsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SoundsQuery) {
            return $criteria;
        }
        $query = new SoundsQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$SpecCode, $SoundFile]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Sounds|Sounds[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SoundsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SoundsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Sounds A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `SpecCode`, `Stockcode`, `Genus`, `Species`, `FishbaseName`, `SynonymUsed`, `SoundRefNo`, `SoundProduction`, `Soundtypes`, `SoundOrgan`, `SonicMechanism`, `Behaviour`, `Remarks`, `SoundFile`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `sounds` WHERE `SpecCode` = :p0 AND `SoundFile` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Sounds();
            $obj->hydrate($row);
            SoundsPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Sounds|Sounds[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Sounds[]|mixed the list of results, formatted by the current formatter
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
     * @return SoundsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(SoundsPeer::SPECCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SoundsPeer::SOUNDFILE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SoundsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SoundsPeer::SPECCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SoundsPeer::SOUNDFILE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the autoctr column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoctr(1234); // WHERE autoctr = 1234
     * $query->filterByAutoctr(array(12, 34)); // WHERE autoctr IN (12, 34)
     * $query->filterByAutoctr(array('min' => 12)); // WHERE autoctr >= 12
     * $query->filterByAutoctr(array('max' => 12)); // WHERE autoctr <= 12
     * </code>
     *
     * @param     mixed $autoctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SoundsQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(SoundsPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(SoundsPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoundsPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the SpecCode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeccode(1234); // WHERE SpecCode = 1234
     * $query->filterBySpeccode(array(12, 34)); // WHERE SpecCode IN (12, 34)
     * $query->filterBySpeccode(array('min' => 12)); // WHERE SpecCode >= 12
     * $query->filterBySpeccode(array('max' => 12)); // WHERE SpecCode <= 12
     * </code>
     *
     * @param     mixed $speccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SoundsQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(SoundsPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(SoundsPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoundsPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the Stockcode column
     *
     * Example usage:
     * <code>
     * $query->filterByStockcode(1234); // WHERE Stockcode = 1234
     * $query->filterByStockcode(array(12, 34)); // WHERE Stockcode IN (12, 34)
     * $query->filterByStockcode(array('min' => 12)); // WHERE Stockcode >= 12
     * $query->filterByStockcode(array('max' => 12)); // WHERE Stockcode <= 12
     * </code>
     *
     * @param     mixed $stockcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SoundsQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(SoundsPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(SoundsPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoundsPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return SoundsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SoundsPeer::GENUS, $genus, $comparison);
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
     * @return SoundsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SoundsPeer::SPECIES, $species, $comparison);
    }

    /**
     * Filter the query on the FishbaseName column
     *
     * Example usage:
     * <code>
     * $query->filterByFishbasename('fooValue');   // WHERE FishbaseName = 'fooValue'
     * $query->filterByFishbasename('%fooValue%'); // WHERE FishbaseName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fishbasename The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SoundsQuery The current query, for fluid interface
     */
    public function filterByFishbasename($fishbasename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fishbasename)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fishbasename)) {
                $fishbasename = str_replace('*', '%', $fishbasename);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SoundsPeer::FISHBASENAME, $fishbasename, $comparison);
    }

    /**
     * Filter the query on the SynonymUsed column
     *
     * Example usage:
     * <code>
     * $query->filterBySynonymused('fooValue');   // WHERE SynonymUsed = 'fooValue'
     * $query->filterBySynonymused('%fooValue%'); // WHERE SynonymUsed LIKE '%fooValue%'
     * </code>
     *
     * @param     string $synonymused The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SoundsQuery The current query, for fluid interface
     */
    public function filterBySynonymused($synonymused = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($synonymused)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $synonymused)) {
                $synonymused = str_replace('*', '%', $synonymused);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SoundsPeer::SYNONYMUSED, $synonymused, $comparison);
    }

    /**
     * Filter the query on the SoundRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterBySoundrefno(1234); // WHERE SoundRefNo = 1234
     * $query->filterBySoundrefno(array(12, 34)); // WHERE SoundRefNo IN (12, 34)
     * $query->filterBySoundrefno(array('min' => 12)); // WHERE SoundRefNo >= 12
     * $query->filterBySoundrefno(array('max' => 12)); // WHERE SoundRefNo <= 12
     * </code>
     *
     * @param     mixed $soundrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SoundsQuery The current query, for fluid interface
     */
    public function filterBySoundrefno($soundrefno = null, $comparison = null)
    {
        if (is_array($soundrefno)) {
            $useMinMax = false;
            if (isset($soundrefno['min'])) {
                $this->addUsingAlias(SoundsPeer::SOUNDREFNO, $soundrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($soundrefno['max'])) {
                $this->addUsingAlias(SoundsPeer::SOUNDREFNO, $soundrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoundsPeer::SOUNDREFNO, $soundrefno, $comparison);
    }

    /**
     * Filter the query on the SoundProduction column
     *
     * Example usage:
     * <code>
     * $query->filterBySoundproduction('fooValue');   // WHERE SoundProduction = 'fooValue'
     * $query->filterBySoundproduction('%fooValue%'); // WHERE SoundProduction LIKE '%fooValue%'
     * </code>
     *
     * @param     string $soundproduction The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SoundsQuery The current query, for fluid interface
     */
    public function filterBySoundproduction($soundproduction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($soundproduction)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $soundproduction)) {
                $soundproduction = str_replace('*', '%', $soundproduction);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SoundsPeer::SOUNDPRODUCTION, $soundproduction, $comparison);
    }

    /**
     * Filter the query on the Soundtypes column
     *
     * Example usage:
     * <code>
     * $query->filterBySoundtypes('fooValue');   // WHERE Soundtypes = 'fooValue'
     * $query->filterBySoundtypes('%fooValue%'); // WHERE Soundtypes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $soundtypes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SoundsQuery The current query, for fluid interface
     */
    public function filterBySoundtypes($soundtypes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($soundtypes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $soundtypes)) {
                $soundtypes = str_replace('*', '%', $soundtypes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SoundsPeer::SOUNDTYPES, $soundtypes, $comparison);
    }

    /**
     * Filter the query on the SoundOrgan column
     *
     * Example usage:
     * <code>
     * $query->filterBySoundorgan('fooValue');   // WHERE SoundOrgan = 'fooValue'
     * $query->filterBySoundorgan('%fooValue%'); // WHERE SoundOrgan LIKE '%fooValue%'
     * </code>
     *
     * @param     string $soundorgan The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SoundsQuery The current query, for fluid interface
     */
    public function filterBySoundorgan($soundorgan = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($soundorgan)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $soundorgan)) {
                $soundorgan = str_replace('*', '%', $soundorgan);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SoundsPeer::SOUNDORGAN, $soundorgan, $comparison);
    }

    /**
     * Filter the query on the SonicMechanism column
     *
     * Example usage:
     * <code>
     * $query->filterBySonicmechanism('fooValue');   // WHERE SonicMechanism = 'fooValue'
     * $query->filterBySonicmechanism('%fooValue%'); // WHERE SonicMechanism LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sonicmechanism The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SoundsQuery The current query, for fluid interface
     */
    public function filterBySonicmechanism($sonicmechanism = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sonicmechanism)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sonicmechanism)) {
                $sonicmechanism = str_replace('*', '%', $sonicmechanism);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SoundsPeer::SONICMECHANISM, $sonicmechanism, $comparison);
    }

    /**
     * Filter the query on the Behaviour column
     *
     * Example usage:
     * <code>
     * $query->filterByBehaviour('fooValue');   // WHERE Behaviour = 'fooValue'
     * $query->filterByBehaviour('%fooValue%'); // WHERE Behaviour LIKE '%fooValue%'
     * </code>
     *
     * @param     string $behaviour The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SoundsQuery The current query, for fluid interface
     */
    public function filterByBehaviour($behaviour = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($behaviour)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $behaviour)) {
                $behaviour = str_replace('*', '%', $behaviour);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SoundsPeer::BEHAVIOUR, $behaviour, $comparison);
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
     * @return SoundsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SoundsPeer::REMARKS, $remarks, $comparison);
    }

    /**
     * Filter the query on the SoundFile column
     *
     * Example usage:
     * <code>
     * $query->filterBySoundfile('fooValue');   // WHERE SoundFile = 'fooValue'
     * $query->filterBySoundfile('%fooValue%'); // WHERE SoundFile LIKE '%fooValue%'
     * </code>
     *
     * @param     string $soundfile The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SoundsQuery The current query, for fluid interface
     */
    public function filterBySoundfile($soundfile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($soundfile)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $soundfile)) {
                $soundfile = str_replace('*', '%', $soundfile);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SoundsPeer::SOUNDFILE, $soundfile, $comparison);
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
     * @return SoundsQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(SoundsPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(SoundsPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoundsPeer::ENTERED, $entered, $comparison);
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
     * @return SoundsQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(SoundsPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(SoundsPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoundsPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return SoundsQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(SoundsPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(SoundsPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoundsPeer::MODIFIED, $modified, $comparison);
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
     * @return SoundsQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(SoundsPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(SoundsPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoundsPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return SoundsQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(SoundsPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(SoundsPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoundsPeer::EXPERT, $expert, $comparison);
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
     * @return SoundsQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(SoundsPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(SoundsPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoundsPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return SoundsQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(SoundsPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(SoundsPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoundsPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Sounds $sounds Object to remove from the list of results
     *
     * @return SoundsQuery The current query, for fluid interface
     */
    public function prune($sounds = null)
    {
        if ($sounds) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SoundsPeer::SPECCODE), $sounds->getSpeccode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SoundsPeer::SOUNDFILE), $sounds->getSoundfile(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
