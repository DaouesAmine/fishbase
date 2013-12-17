<?php


/**
 * Base class that represents a query for the 'speciesauthorsnames' table.
 *
 *
 *
 * @method SpeciesauthorsnamesQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method SpeciesauthorsnamesQuery orderBySyncode($order = Criteria::ASC) Order by the SynCode column
 * @method SpeciesauthorsnamesQuery orderByValid($order = Criteria::ASC) Order by the Valid column
 * @method SpeciesauthorsnamesQuery orderByC7speciesid($order = Criteria::ASC) Order by the c7SpeciesId column
 * @method SpeciesauthorsnamesQuery orderBySeqno($order = Criteria::ASC) Order by the SeqNo column
 * @method SpeciesauthorsnamesQuery orderBySyngenus($order = Criteria::ASC) Order by the SynGenus column
 * @method SpeciesauthorsnamesQuery orderBySynspecies($order = Criteria::ASC) Order by the SynSpecies column
 * @method SpeciesauthorsnamesQuery orderByAuthor($order = Criteria::ASC) Order by the Author column
 * @method SpeciesauthorsnamesQuery orderByUrl($order = Criteria::ASC) Order by the URL column
 * @method SpeciesauthorsnamesQuery orderByAutnameinit($order = Criteria::ASC) Order by the AutNameInit column
 * @method SpeciesauthorsnamesQuery orderByAutname($order = Criteria::ASC) Order by the AutName column
 * @method SpeciesauthorsnamesQuery orderByC7fauthoryearoc($order = Criteria::ASC) Order by the c7fAuthorYearOC column
 * @method SpeciesauthorsnamesQuery orderByPkid($order = Criteria::ASC) Order by the PKID column
 *
 * @method SpeciesauthorsnamesQuery groupBySpeccode() Group by the SpecCode column
 * @method SpeciesauthorsnamesQuery groupBySyncode() Group by the SynCode column
 * @method SpeciesauthorsnamesQuery groupByValid() Group by the Valid column
 * @method SpeciesauthorsnamesQuery groupByC7speciesid() Group by the c7SpeciesId column
 * @method SpeciesauthorsnamesQuery groupBySeqno() Group by the SeqNo column
 * @method SpeciesauthorsnamesQuery groupBySyngenus() Group by the SynGenus column
 * @method SpeciesauthorsnamesQuery groupBySynspecies() Group by the SynSpecies column
 * @method SpeciesauthorsnamesQuery groupByAuthor() Group by the Author column
 * @method SpeciesauthorsnamesQuery groupByUrl() Group by the URL column
 * @method SpeciesauthorsnamesQuery groupByAutnameinit() Group by the AutNameInit column
 * @method SpeciesauthorsnamesQuery groupByAutname() Group by the AutName column
 * @method SpeciesauthorsnamesQuery groupByC7fauthoryearoc() Group by the c7fAuthorYearOC column
 * @method SpeciesauthorsnamesQuery groupByPkid() Group by the PKID column
 *
 * @method SpeciesauthorsnamesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SpeciesauthorsnamesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SpeciesauthorsnamesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Speciesauthorsnames findOne(PropelPDO $con = null) Return the first Speciesauthorsnames matching the query
 * @method Speciesauthorsnames findOneOrCreate(PropelPDO $con = null) Return the first Speciesauthorsnames matching the query, or a new Speciesauthorsnames object populated from the query conditions when no match is found
 *
 * @method Speciesauthorsnames findOneBySpeccode(int $SpecCode) Return the first Speciesauthorsnames filtered by the SpecCode column
 * @method Speciesauthorsnames findOneBySyncode(int $SynCode) Return the first Speciesauthorsnames filtered by the SynCode column
 * @method Speciesauthorsnames findOneByValid(boolean $Valid) Return the first Speciesauthorsnames filtered by the Valid column
 * @method Speciesauthorsnames findOneByC7speciesid(int $c7SpeciesId) Return the first Speciesauthorsnames filtered by the c7SpeciesId column
 * @method Speciesauthorsnames findOneBySeqno(int $SeqNo) Return the first Speciesauthorsnames filtered by the SeqNo column
 * @method Speciesauthorsnames findOneBySyngenus(string $SynGenus) Return the first Speciesauthorsnames filtered by the SynGenus column
 * @method Speciesauthorsnames findOneBySynspecies(string $SynSpecies) Return the first Speciesauthorsnames filtered by the SynSpecies column
 * @method Speciesauthorsnames findOneByAuthor(string $Author) Return the first Speciesauthorsnames filtered by the Author column
 * @method Speciesauthorsnames findOneByUrl(string $URL) Return the first Speciesauthorsnames filtered by the URL column
 * @method Speciesauthorsnames findOneByAutnameinit(string $AutNameInit) Return the first Speciesauthorsnames filtered by the AutNameInit column
 * @method Speciesauthorsnames findOneByAutname(string $AutName) Return the first Speciesauthorsnames filtered by the AutName column
 * @method Speciesauthorsnames findOneByC7fauthoryearoc(string $c7fAuthorYearOC) Return the first Speciesauthorsnames filtered by the c7fAuthorYearOC column
 *
 * @method array findBySpeccode(int $SpecCode) Return Speciesauthorsnames objects filtered by the SpecCode column
 * @method array findBySyncode(int $SynCode) Return Speciesauthorsnames objects filtered by the SynCode column
 * @method array findByValid(boolean $Valid) Return Speciesauthorsnames objects filtered by the Valid column
 * @method array findByC7speciesid(int $c7SpeciesId) Return Speciesauthorsnames objects filtered by the c7SpeciesId column
 * @method array findBySeqno(int $SeqNo) Return Speciesauthorsnames objects filtered by the SeqNo column
 * @method array findBySyngenus(string $SynGenus) Return Speciesauthorsnames objects filtered by the SynGenus column
 * @method array findBySynspecies(string $SynSpecies) Return Speciesauthorsnames objects filtered by the SynSpecies column
 * @method array findByAuthor(string $Author) Return Speciesauthorsnames objects filtered by the Author column
 * @method array findByUrl(string $URL) Return Speciesauthorsnames objects filtered by the URL column
 * @method array findByAutnameinit(string $AutNameInit) Return Speciesauthorsnames objects filtered by the AutNameInit column
 * @method array findByAutname(string $AutName) Return Speciesauthorsnames objects filtered by the AutName column
 * @method array findByC7fauthoryearoc(string $c7fAuthorYearOC) Return Speciesauthorsnames objects filtered by the c7fAuthorYearOC column
 * @method array findByPkid(string $PKID) Return Speciesauthorsnames objects filtered by the PKID column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseSpeciesauthorsnamesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSpeciesauthorsnamesQuery object.
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
            $modelName = 'Speciesauthorsnames';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SpeciesauthorsnamesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SpeciesauthorsnamesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SpeciesauthorsnamesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SpeciesauthorsnamesQuery) {
            return $criteria;
        }
        $query = new SpeciesauthorsnamesQuery(null, null, $modelAlias);

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
     * @return   Speciesauthorsnames|Speciesauthorsnames[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SpeciesauthorsnamesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SpeciesauthorsnamesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Speciesauthorsnames A model object, or null if the key is not found
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
     * @return                 Speciesauthorsnames A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `SpecCode`, `SynCode`, `Valid`, `c7SpeciesId`, `SeqNo`, `SynGenus`, `SynSpecies`, `Author`, `URL`, `AutNameInit`, `AutName`, `c7fAuthorYearOC`, `PKID` FROM `speciesauthorsnames` WHERE `PKID` = :p0';
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
            $obj = new Speciesauthorsnames();
            $obj->hydrate($row);
            SpeciesauthorsnamesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Speciesauthorsnames|Speciesauthorsnames[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Speciesauthorsnames[]|mixed the list of results, formatted by the current formatter
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
     * @return SpeciesauthorsnamesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpeciesauthorsnamesPeer::PKID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SpeciesauthorsnamesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpeciesauthorsnamesPeer::PKID, $keys, Criteria::IN);
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
     * @return SpeciesauthorsnamesQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(SpeciesauthorsnamesPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(SpeciesauthorsnamesPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesauthorsnamesPeer::SPECCODE, $speccode, $comparison);
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
     * @return SpeciesauthorsnamesQuery The current query, for fluid interface
     */
    public function filterBySyncode($syncode = null, $comparison = null)
    {
        if (is_array($syncode)) {
            $useMinMax = false;
            if (isset($syncode['min'])) {
                $this->addUsingAlias(SpeciesauthorsnamesPeer::SYNCODE, $syncode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($syncode['max'])) {
                $this->addUsingAlias(SpeciesauthorsnamesPeer::SYNCODE, $syncode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesauthorsnamesPeer::SYNCODE, $syncode, $comparison);
    }

    /**
     * Filter the query on the Valid column
     *
     * Example usage:
     * <code>
     * $query->filterByValid(true); // WHERE Valid = true
     * $query->filterByValid('yes'); // WHERE Valid = true
     * </code>
     *
     * @param     boolean|string $valid The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesauthorsnamesQuery The current query, for fluid interface
     */
    public function filterByValid($valid = null, $comparison = null)
    {
        if (is_string($valid)) {
            $valid = in_array(strtolower($valid), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(SpeciesauthorsnamesPeer::VALID, $valid, $comparison);
    }

    /**
     * Filter the query on the c7SpeciesId column
     *
     * Example usage:
     * <code>
     * $query->filterByC7speciesid(1234); // WHERE c7SpeciesId = 1234
     * $query->filterByC7speciesid(array(12, 34)); // WHERE c7SpeciesId IN (12, 34)
     * $query->filterByC7speciesid(array('min' => 12)); // WHERE c7SpeciesId >= 12
     * $query->filterByC7speciesid(array('max' => 12)); // WHERE c7SpeciesId <= 12
     * </code>
     *
     * @param     mixed $c7speciesid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesauthorsnamesQuery The current query, for fluid interface
     */
    public function filterByC7speciesid($c7speciesid = null, $comparison = null)
    {
        if (is_array($c7speciesid)) {
            $useMinMax = false;
            if (isset($c7speciesid['min'])) {
                $this->addUsingAlias(SpeciesauthorsnamesPeer::C7SPECIESID, $c7speciesid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($c7speciesid['max'])) {
                $this->addUsingAlias(SpeciesauthorsnamesPeer::C7SPECIESID, $c7speciesid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesauthorsnamesPeer::C7SPECIESID, $c7speciesid, $comparison);
    }

    /**
     * Filter the query on the SeqNo column
     *
     * Example usage:
     * <code>
     * $query->filterBySeqno(1234); // WHERE SeqNo = 1234
     * $query->filterBySeqno(array(12, 34)); // WHERE SeqNo IN (12, 34)
     * $query->filterBySeqno(array('min' => 12)); // WHERE SeqNo >= 12
     * $query->filterBySeqno(array('max' => 12)); // WHERE SeqNo <= 12
     * </code>
     *
     * @param     mixed $seqno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesauthorsnamesQuery The current query, for fluid interface
     */
    public function filterBySeqno($seqno = null, $comparison = null)
    {
        if (is_array($seqno)) {
            $useMinMax = false;
            if (isset($seqno['min'])) {
                $this->addUsingAlias(SpeciesauthorsnamesPeer::SEQNO, $seqno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($seqno['max'])) {
                $this->addUsingAlias(SpeciesauthorsnamesPeer::SEQNO, $seqno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesauthorsnamesPeer::SEQNO, $seqno, $comparison);
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
     * @return SpeciesauthorsnamesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SpeciesauthorsnamesPeer::SYNGENUS, $syngenus, $comparison);
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
     * @return SpeciesauthorsnamesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SpeciesauthorsnamesPeer::SYNSPECIES, $synspecies, $comparison);
    }

    /**
     * Filter the query on the Author column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthor('fooValue');   // WHERE Author = 'fooValue'
     * $query->filterByAuthor('%fooValue%'); // WHERE Author LIKE '%fooValue%'
     * </code>
     *
     * @param     string $author The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesauthorsnamesQuery The current query, for fluid interface
     */
    public function filterByAuthor($author = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($author)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $author)) {
                $author = str_replace('*', '%', $author);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesauthorsnamesPeer::AUTHOR, $author, $comparison);
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
     * @return SpeciesauthorsnamesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SpeciesauthorsnamesPeer::URL, $url, $comparison);
    }

    /**
     * Filter the query on the AutNameInit column
     *
     * Example usage:
     * <code>
     * $query->filterByAutnameinit('fooValue');   // WHERE AutNameInit = 'fooValue'
     * $query->filterByAutnameinit('%fooValue%'); // WHERE AutNameInit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autnameinit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesauthorsnamesQuery The current query, for fluid interface
     */
    public function filterByAutnameinit($autnameinit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autnameinit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autnameinit)) {
                $autnameinit = str_replace('*', '%', $autnameinit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesauthorsnamesPeer::AUTNAMEINIT, $autnameinit, $comparison);
    }

    /**
     * Filter the query on the AutName column
     *
     * Example usage:
     * <code>
     * $query->filterByAutname('fooValue');   // WHERE AutName = 'fooValue'
     * $query->filterByAutname('%fooValue%'); // WHERE AutName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesauthorsnamesQuery The current query, for fluid interface
     */
    public function filterByAutname($autname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autname)) {
                $autname = str_replace('*', '%', $autname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesauthorsnamesPeer::AUTNAME, $autname, $comparison);
    }

    /**
     * Filter the query on the c7fAuthorYearOC column
     *
     * Example usage:
     * <code>
     * $query->filterByC7fauthoryearoc('fooValue');   // WHERE c7fAuthorYearOC = 'fooValue'
     * $query->filterByC7fauthoryearoc('%fooValue%'); // WHERE c7fAuthorYearOC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $c7fauthoryearoc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesauthorsnamesQuery The current query, for fluid interface
     */
    public function filterByC7fauthoryearoc($c7fauthoryearoc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($c7fauthoryearoc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $c7fauthoryearoc)) {
                $c7fauthoryearoc = str_replace('*', '%', $c7fauthoryearoc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesauthorsnamesPeer::C7FAUTHORYEAROC, $c7fauthoryearoc, $comparison);
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
     * @return SpeciesauthorsnamesQuery The current query, for fluid interface
     */
    public function filterByPkid($pkid = null, $comparison = null)
    {
        if (is_array($pkid)) {
            $useMinMax = false;
            if (isset($pkid['min'])) {
                $this->addUsingAlias(SpeciesauthorsnamesPeer::PKID, $pkid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pkid['max'])) {
                $this->addUsingAlias(SpeciesauthorsnamesPeer::PKID, $pkid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesauthorsnamesPeer::PKID, $pkid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Speciesauthorsnames $speciesauthorsnames Object to remove from the list of results
     *
     * @return SpeciesauthorsnamesQuery The current query, for fluid interface
     */
    public function prune($speciesauthorsnames = null)
    {
        if ($speciesauthorsnames) {
            $this->addUsingAlias(SpeciesauthorsnamesPeer::PKID, $speciesauthorsnames->getPkid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
