<?php


/**
 * Base class that represents a query for the 'taxamatch' table.
 *
 *
 *
 * @method TaxamatchQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method TaxamatchQuery orderBySyncode($order = Criteria::ASC) Order by the SynCode column
 * @method TaxamatchQuery orderBySyngenus($order = Criteria::ASC) Order by the SynGenus column
 * @method TaxamatchQuery orderBySynspecies($order = Criteria::ASC) Order by the SynSpecies column
 * @method TaxamatchQuery orderByStatus($order = Criteria::ASC) Order by the Status column
 * @method TaxamatchQuery orderByLastepithet($order = Criteria::ASC) Order by the LastEpithet column
 * @method TaxamatchQuery orderByNormalizegenus($order = Criteria::ASC) Order by the NormalizeGenus column
 * @method TaxamatchQuery orderByNormalizespecies($order = Criteria::ASC) Order by the NormalizeSpecies column
 * @method TaxamatchQuery orderByNormalizelastepithet($order = Criteria::ASC) Order by the NormalizeLastEpithet column
 * @method TaxamatchQuery orderBySoundexgenus($order = Criteria::ASC) Order by the SoundexGenus column
 * @method TaxamatchQuery orderBySoundexspecies($order = Criteria::ASC) Order by the SoundexSpecies column
 * @method TaxamatchQuery orderBySoundexlastepithet($order = Criteria::ASC) Order by the SoundexLastEpithet column
 *
 * @method TaxamatchQuery groupBySpeccode() Group by the SpecCode column
 * @method TaxamatchQuery groupBySyncode() Group by the SynCode column
 * @method TaxamatchQuery groupBySyngenus() Group by the SynGenus column
 * @method TaxamatchQuery groupBySynspecies() Group by the SynSpecies column
 * @method TaxamatchQuery groupByStatus() Group by the Status column
 * @method TaxamatchQuery groupByLastepithet() Group by the LastEpithet column
 * @method TaxamatchQuery groupByNormalizegenus() Group by the NormalizeGenus column
 * @method TaxamatchQuery groupByNormalizespecies() Group by the NormalizeSpecies column
 * @method TaxamatchQuery groupByNormalizelastepithet() Group by the NormalizeLastEpithet column
 * @method TaxamatchQuery groupBySoundexgenus() Group by the SoundexGenus column
 * @method TaxamatchQuery groupBySoundexspecies() Group by the SoundexSpecies column
 * @method TaxamatchQuery groupBySoundexlastepithet() Group by the SoundexLastEpithet column
 *
 * @method TaxamatchQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TaxamatchQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TaxamatchQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Taxamatch findOne(PropelPDO $con = null) Return the first Taxamatch matching the query
 * @method Taxamatch findOneOrCreate(PropelPDO $con = null) Return the first Taxamatch matching the query, or a new Taxamatch object populated from the query conditions when no match is found
 *
 * @method Taxamatch findOneBySpeccode(int $SpecCode) Return the first Taxamatch filtered by the SpecCode column
 * @method Taxamatch findOneBySyncode(int $SynCode) Return the first Taxamatch filtered by the SynCode column
 * @method Taxamatch findOneBySyngenus(string $SynGenus) Return the first Taxamatch filtered by the SynGenus column
 * @method Taxamatch findOneBySynspecies(string $SynSpecies) Return the first Taxamatch filtered by the SynSpecies column
 * @method Taxamatch findOneByStatus(string $Status) Return the first Taxamatch filtered by the Status column
 * @method Taxamatch findOneByLastepithet(string $LastEpithet) Return the first Taxamatch filtered by the LastEpithet column
 * @method Taxamatch findOneByNormalizegenus(string $NormalizeGenus) Return the first Taxamatch filtered by the NormalizeGenus column
 * @method Taxamatch findOneByNormalizespecies(string $NormalizeSpecies) Return the first Taxamatch filtered by the NormalizeSpecies column
 * @method Taxamatch findOneByNormalizelastepithet(string $NormalizeLastEpithet) Return the first Taxamatch filtered by the NormalizeLastEpithet column
 * @method Taxamatch findOneBySoundexgenus(string $SoundexGenus) Return the first Taxamatch filtered by the SoundexGenus column
 * @method Taxamatch findOneBySoundexspecies(string $SoundexSpecies) Return the first Taxamatch filtered by the SoundexSpecies column
 * @method Taxamatch findOneBySoundexlastepithet(string $SoundexLastEpithet) Return the first Taxamatch filtered by the SoundexLastEpithet column
 *
 * @method array findBySpeccode(int $SpecCode) Return Taxamatch objects filtered by the SpecCode column
 * @method array findBySyncode(int $SynCode) Return Taxamatch objects filtered by the SynCode column
 * @method array findBySyngenus(string $SynGenus) Return Taxamatch objects filtered by the SynGenus column
 * @method array findBySynspecies(string $SynSpecies) Return Taxamatch objects filtered by the SynSpecies column
 * @method array findByStatus(string $Status) Return Taxamatch objects filtered by the Status column
 * @method array findByLastepithet(string $LastEpithet) Return Taxamatch objects filtered by the LastEpithet column
 * @method array findByNormalizegenus(string $NormalizeGenus) Return Taxamatch objects filtered by the NormalizeGenus column
 * @method array findByNormalizespecies(string $NormalizeSpecies) Return Taxamatch objects filtered by the NormalizeSpecies column
 * @method array findByNormalizelastepithet(string $NormalizeLastEpithet) Return Taxamatch objects filtered by the NormalizeLastEpithet column
 * @method array findBySoundexgenus(string $SoundexGenus) Return Taxamatch objects filtered by the SoundexGenus column
 * @method array findBySoundexspecies(string $SoundexSpecies) Return Taxamatch objects filtered by the SoundexSpecies column
 * @method array findBySoundexlastepithet(string $SoundexLastEpithet) Return Taxamatch objects filtered by the SoundexLastEpithet column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseTaxamatchQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTaxamatchQuery object.
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
            $modelName = 'Taxamatch';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TaxamatchQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TaxamatchQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TaxamatchQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TaxamatchQuery) {
            return $criteria;
        }
        $query = new TaxamatchQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$SpecCode, $SynCode]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Taxamatch|Taxamatch[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TaxamatchPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TaxamatchPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Taxamatch A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `SpecCode`, `SynCode`, `SynGenus`, `SynSpecies`, `Status`, `LastEpithet`, `NormalizeGenus`, `NormalizeSpecies`, `NormalizeLastEpithet`, `SoundexGenus`, `SoundexSpecies`, `SoundexLastEpithet` FROM `taxamatch` WHERE `SpecCode` = :p0 AND `SynCode` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Taxamatch();
            $obj->hydrate($row);
            TaxamatchPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Taxamatch|Taxamatch[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Taxamatch[]|mixed the list of results, formatted by the current formatter
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
     * @return TaxamatchQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(TaxamatchPeer::SPECCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(TaxamatchPeer::SYNCODE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TaxamatchQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(TaxamatchPeer::SPECCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(TaxamatchPeer::SYNCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return TaxamatchQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(TaxamatchPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(TaxamatchPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxamatchPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the SynCode column
     *
     * Example usage:
     * <code>
     * $query->filterBySyncode(1234); // WHERE SynCode = 1234
     * $query->filterBySyncode(array(12, 34)); // WHERE SynCode IN (12, 34)
     * $query->filterBySyncode(array('min' => 12)); // WHERE SynCode >= 12
     * $query->filterBySyncode(array('max' => 12)); // WHERE SynCode <= 12
     * </code>
     *
     * @param     mixed $syncode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TaxamatchQuery The current query, for fluid interface
     */
    public function filterBySyncode($syncode = null, $comparison = null)
    {
        if (is_array($syncode)) {
            $useMinMax = false;
            if (isset($syncode['min'])) {
                $this->addUsingAlias(TaxamatchPeer::SYNCODE, $syncode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($syncode['max'])) {
                $this->addUsingAlias(TaxamatchPeer::SYNCODE, $syncode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxamatchPeer::SYNCODE, $syncode, $comparison);
    }

    /**
     * Filter the query on the SynGenus column
     *
     * Example usage:
     * <code>
     * $query->filterBySyngenus('fooValue');   // WHERE SynGenus = 'fooValue'
     * $query->filterBySyngenus('%fooValue%'); // WHERE SynGenus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $syngenus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TaxamatchQuery The current query, for fluid interface
     */
    public function filterBySyngenus($syngenus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($syngenus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $syngenus)) {
                $syngenus = str_replace('*', '%', $syngenus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TaxamatchPeer::SYNGENUS, $syngenus, $comparison);
    }

    /**
     * Filter the query on the SynSpecies column
     *
     * Example usage:
     * <code>
     * $query->filterBySynspecies('fooValue');   // WHERE SynSpecies = 'fooValue'
     * $query->filterBySynspecies('%fooValue%'); // WHERE SynSpecies LIKE '%fooValue%'
     * </code>
     *
     * @param     string $synspecies The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TaxamatchQuery The current query, for fluid interface
     */
    public function filterBySynspecies($synspecies = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($synspecies)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $synspecies)) {
                $synspecies = str_replace('*', '%', $synspecies);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TaxamatchPeer::SYNSPECIES, $synspecies, $comparison);
    }

    /**
     * Filter the query on the Status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus('fooValue');   // WHERE Status = 'fooValue'
     * $query->filterByStatus('%fooValue%'); // WHERE Status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $status The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TaxamatchQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $status)) {
                $status = str_replace('*', '%', $status);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TaxamatchPeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the LastEpithet column
     *
     * Example usage:
     * <code>
     * $query->filterByLastepithet('fooValue');   // WHERE LastEpithet = 'fooValue'
     * $query->filterByLastepithet('%fooValue%'); // WHERE LastEpithet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lastepithet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TaxamatchQuery The current query, for fluid interface
     */
    public function filterByLastepithet($lastepithet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lastepithet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lastepithet)) {
                $lastepithet = str_replace('*', '%', $lastepithet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TaxamatchPeer::LASTEPITHET, $lastepithet, $comparison);
    }

    /**
     * Filter the query on the NormalizeGenus column
     *
     * Example usage:
     * <code>
     * $query->filterByNormalizegenus('fooValue');   // WHERE NormalizeGenus = 'fooValue'
     * $query->filterByNormalizegenus('%fooValue%'); // WHERE NormalizeGenus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $normalizegenus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TaxamatchQuery The current query, for fluid interface
     */
    public function filterByNormalizegenus($normalizegenus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($normalizegenus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $normalizegenus)) {
                $normalizegenus = str_replace('*', '%', $normalizegenus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TaxamatchPeer::NORMALIZEGENUS, $normalizegenus, $comparison);
    }

    /**
     * Filter the query on the NormalizeSpecies column
     *
     * Example usage:
     * <code>
     * $query->filterByNormalizespecies('fooValue');   // WHERE NormalizeSpecies = 'fooValue'
     * $query->filterByNormalizespecies('%fooValue%'); // WHERE NormalizeSpecies LIKE '%fooValue%'
     * </code>
     *
     * @param     string $normalizespecies The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TaxamatchQuery The current query, for fluid interface
     */
    public function filterByNormalizespecies($normalizespecies = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($normalizespecies)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $normalizespecies)) {
                $normalizespecies = str_replace('*', '%', $normalizespecies);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TaxamatchPeer::NORMALIZESPECIES, $normalizespecies, $comparison);
    }

    /**
     * Filter the query on the NormalizeLastEpithet column
     *
     * Example usage:
     * <code>
     * $query->filterByNormalizelastepithet('fooValue');   // WHERE NormalizeLastEpithet = 'fooValue'
     * $query->filterByNormalizelastepithet('%fooValue%'); // WHERE NormalizeLastEpithet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $normalizelastepithet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TaxamatchQuery The current query, for fluid interface
     */
    public function filterByNormalizelastepithet($normalizelastepithet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($normalizelastepithet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $normalizelastepithet)) {
                $normalizelastepithet = str_replace('*', '%', $normalizelastepithet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TaxamatchPeer::NORMALIZELASTEPITHET, $normalizelastepithet, $comparison);
    }

    /**
     * Filter the query on the SoundexGenus column
     *
     * Example usage:
     * <code>
     * $query->filterBySoundexgenus('fooValue');   // WHERE SoundexGenus = 'fooValue'
     * $query->filterBySoundexgenus('%fooValue%'); // WHERE SoundexGenus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $soundexgenus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TaxamatchQuery The current query, for fluid interface
     */
    public function filterBySoundexgenus($soundexgenus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($soundexgenus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $soundexgenus)) {
                $soundexgenus = str_replace('*', '%', $soundexgenus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TaxamatchPeer::SOUNDEXGENUS, $soundexgenus, $comparison);
    }

    /**
     * Filter the query on the SoundexSpecies column
     *
     * Example usage:
     * <code>
     * $query->filterBySoundexspecies('fooValue');   // WHERE SoundexSpecies = 'fooValue'
     * $query->filterBySoundexspecies('%fooValue%'); // WHERE SoundexSpecies LIKE '%fooValue%'
     * </code>
     *
     * @param     string $soundexspecies The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TaxamatchQuery The current query, for fluid interface
     */
    public function filterBySoundexspecies($soundexspecies = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($soundexspecies)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $soundexspecies)) {
                $soundexspecies = str_replace('*', '%', $soundexspecies);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TaxamatchPeer::SOUNDEXSPECIES, $soundexspecies, $comparison);
    }

    /**
     * Filter the query on the SoundexLastEpithet column
     *
     * Example usage:
     * <code>
     * $query->filterBySoundexlastepithet('fooValue');   // WHERE SoundexLastEpithet = 'fooValue'
     * $query->filterBySoundexlastepithet('%fooValue%'); // WHERE SoundexLastEpithet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $soundexlastepithet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TaxamatchQuery The current query, for fluid interface
     */
    public function filterBySoundexlastepithet($soundexlastepithet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($soundexlastepithet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $soundexlastepithet)) {
                $soundexlastepithet = str_replace('*', '%', $soundexlastepithet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TaxamatchPeer::SOUNDEXLASTEPITHET, $soundexlastepithet, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Taxamatch $taxamatch Object to remove from the list of results
     *
     * @return TaxamatchQuery The current query, for fluid interface
     */
    public function prune($taxamatch = null)
    {
        if ($taxamatch) {
            $this->addCond('pruneCond0', $this->getAliasedColName(TaxamatchPeer::SPECCODE), $taxamatch->getSpeccode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(TaxamatchPeer::SYNCODE), $taxamatch->getSyncode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
