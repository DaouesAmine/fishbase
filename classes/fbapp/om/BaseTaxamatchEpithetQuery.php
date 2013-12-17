<?php


/**
 * Base class that represents a query for the 'taxamatch_epithet' table.
 *
 *
 *
 * @method TaxamatchEpithetQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method TaxamatchEpithetQuery orderBySyncode($order = Criteria::ASC) Order by the SynCode column
 * @method TaxamatchEpithetQuery orderByEpithetpos($order = Criteria::ASC) Order by the EpithetPos column
 * @method TaxamatchEpithetQuery orderByEpithet($order = Criteria::ASC) Order by the Epithet column
 * @method TaxamatchEpithetQuery orderByPkid($order = Criteria::ASC) Order by the PKID column
 *
 * @method TaxamatchEpithetQuery groupBySpeccode() Group by the SpecCode column
 * @method TaxamatchEpithetQuery groupBySyncode() Group by the SynCode column
 * @method TaxamatchEpithetQuery groupByEpithetpos() Group by the EpithetPos column
 * @method TaxamatchEpithetQuery groupByEpithet() Group by the Epithet column
 * @method TaxamatchEpithetQuery groupByPkid() Group by the PKID column
 *
 * @method TaxamatchEpithetQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TaxamatchEpithetQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TaxamatchEpithetQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TaxamatchEpithet findOne(PropelPDO $con = null) Return the first TaxamatchEpithet matching the query
 * @method TaxamatchEpithet findOneOrCreate(PropelPDO $con = null) Return the first TaxamatchEpithet matching the query, or a new TaxamatchEpithet object populated from the query conditions when no match is found
 *
 * @method TaxamatchEpithet findOneBySpeccode(int $SpecCode) Return the first TaxamatchEpithet filtered by the SpecCode column
 * @method TaxamatchEpithet findOneBySyncode(int $SynCode) Return the first TaxamatchEpithet filtered by the SynCode column
 * @method TaxamatchEpithet findOneByEpithetpos(int $EpithetPos) Return the first TaxamatchEpithet filtered by the EpithetPos column
 * @method TaxamatchEpithet findOneByEpithet(string $Epithet) Return the first TaxamatchEpithet filtered by the Epithet column
 *
 * @method array findBySpeccode(int $SpecCode) Return TaxamatchEpithet objects filtered by the SpecCode column
 * @method array findBySyncode(int $SynCode) Return TaxamatchEpithet objects filtered by the SynCode column
 * @method array findByEpithetpos(int $EpithetPos) Return TaxamatchEpithet objects filtered by the EpithetPos column
 * @method array findByEpithet(string $Epithet) Return TaxamatchEpithet objects filtered by the Epithet column
 * @method array findByPkid(string $PKID) Return TaxamatchEpithet objects filtered by the PKID column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseTaxamatchEpithetQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTaxamatchEpithetQuery object.
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
            $modelName = 'TaxamatchEpithet';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TaxamatchEpithetQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TaxamatchEpithetQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TaxamatchEpithetQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TaxamatchEpithetQuery) {
            return $criteria;
        }
        $query = new TaxamatchEpithetQuery(null, null, $modelAlias);

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
     * @return   TaxamatchEpithet|TaxamatchEpithet[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TaxamatchEpithetPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TaxamatchEpithetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TaxamatchEpithet A model object, or null if the key is not found
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
     * @return                 TaxamatchEpithet A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `SpecCode`, `SynCode`, `EpithetPos`, `Epithet`, `PKID` FROM `taxamatch_epithet` WHERE `PKID` = :p0';
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
            $obj = new TaxamatchEpithet();
            $obj->hydrate($row);
            TaxamatchEpithetPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TaxamatchEpithet|TaxamatchEpithet[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TaxamatchEpithet[]|mixed the list of results, formatted by the current formatter
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
     * @return TaxamatchEpithetQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TaxamatchEpithetPeer::PKID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TaxamatchEpithetQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TaxamatchEpithetPeer::PKID, $keys, Criteria::IN);
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
     * @return TaxamatchEpithetQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(TaxamatchEpithetPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(TaxamatchEpithetPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxamatchEpithetPeer::SPECCODE, $speccode, $comparison);
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
     * @return TaxamatchEpithetQuery The current query, for fluid interface
     */
    public function filterBySyncode($syncode = null, $comparison = null)
    {
        if (is_array($syncode)) {
            $useMinMax = false;
            if (isset($syncode['min'])) {
                $this->addUsingAlias(TaxamatchEpithetPeer::SYNCODE, $syncode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($syncode['max'])) {
                $this->addUsingAlias(TaxamatchEpithetPeer::SYNCODE, $syncode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxamatchEpithetPeer::SYNCODE, $syncode, $comparison);
    }

    /**
     * Filter the query on the EpithetPos column
     *
     * Example usage:
     * <code>
     * $query->filterByEpithetpos(1234); // WHERE EpithetPos = 1234
     * $query->filterByEpithetpos(array(12, 34)); // WHERE EpithetPos IN (12, 34)
     * $query->filterByEpithetpos(array('min' => 12)); // WHERE EpithetPos >= 12
     * $query->filterByEpithetpos(array('max' => 12)); // WHERE EpithetPos <= 12
     * </code>
     *
     * @param     mixed $epithetpos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TaxamatchEpithetQuery The current query, for fluid interface
     */
    public function filterByEpithetpos($epithetpos = null, $comparison = null)
    {
        if (is_array($epithetpos)) {
            $useMinMax = false;
            if (isset($epithetpos['min'])) {
                $this->addUsingAlias(TaxamatchEpithetPeer::EPITHETPOS, $epithetpos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($epithetpos['max'])) {
                $this->addUsingAlias(TaxamatchEpithetPeer::EPITHETPOS, $epithetpos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxamatchEpithetPeer::EPITHETPOS, $epithetpos, $comparison);
    }

    /**
     * Filter the query on the Epithet column
     *
     * Example usage:
     * <code>
     * $query->filterByEpithet('fooValue');   // WHERE Epithet = 'fooValue'
     * $query->filterByEpithet('%fooValue%'); // WHERE Epithet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $epithet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TaxamatchEpithetQuery The current query, for fluid interface
     */
    public function filterByEpithet($epithet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($epithet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $epithet)) {
                $epithet = str_replace('*', '%', $epithet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TaxamatchEpithetPeer::EPITHET, $epithet, $comparison);
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
     * @return TaxamatchEpithetQuery The current query, for fluid interface
     */
    public function filterByPkid($pkid = null, $comparison = null)
    {
        if (is_array($pkid)) {
            $useMinMax = false;
            if (isset($pkid['min'])) {
                $this->addUsingAlias(TaxamatchEpithetPeer::PKID, $pkid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pkid['max'])) {
                $this->addUsingAlias(TaxamatchEpithetPeer::PKID, $pkid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxamatchEpithetPeer::PKID, $pkid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TaxamatchEpithet $taxamatchEpithet Object to remove from the list of results
     *
     * @return TaxamatchEpithetQuery The current query, for fluid interface
     */
    public function prune($taxamatchEpithet = null)
    {
        if ($taxamatchEpithet) {
            $this->addUsingAlias(TaxamatchEpithetPeer::PKID, $taxamatchEpithet->getPkid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
