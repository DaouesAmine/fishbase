<?php


/**
 * Base class that represents a query for the 'graphcateg' table.
 *
 *
 *
 * @method GraphcategQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method GraphcategQuery orderByAfrica($order = Criteria::ASC) Order by the Africa column
 * @method GraphcategQuery orderByAmernc($order = Criteria::ASC) Order by the AmerNC column
 * @method GraphcategQuery orderByAmers($order = Criteria::ASC) Order by the AmerS column
 * @method GraphcategQuery orderByAmerns($order = Criteria::ASC) Order by the AmerNS column
 * @method GraphcategQuery orderByAsia($order = Criteria::ASC) Order by the Asia column
 * @method GraphcategQuery orderByOceania($order = Criteria::ASC) Order by the Oceania column
 * @method GraphcategQuery orderByAntarctica($order = Criteria::ASC) Order by the Antarctica column
 * @method GraphcategQuery orderByEurope($order = Criteria::ASC) Order by the Europe column
 * @method GraphcategQuery orderByEuroaf($order = Criteria::ASC) Order by the EuroAf column
 * @method GraphcategQuery orderByUssr($order = Criteria::ASC) Order by the USSR column
 * @method GraphcategQuery orderByPacific($order = Criteria::ASC) Order by the Pacific column
 * @method GraphcategQuery orderByAtlantic($order = Criteria::ASC) Order by the Atlantic column
 * @method GraphcategQuery orderByIndian($order = Criteria::ASC) Order by the Indian column
 * @method GraphcategQuery orderByMedit($order = Criteria::ASC) Order by the Medit column
 * @method GraphcategQuery orderBySalinity($order = Criteria::ASC) Order by the Salinity column
 * @method GraphcategQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method GraphcategQuery groupBySpeccode() Group by the Speccode column
 * @method GraphcategQuery groupByAfrica() Group by the Africa column
 * @method GraphcategQuery groupByAmernc() Group by the AmerNC column
 * @method GraphcategQuery groupByAmers() Group by the AmerS column
 * @method GraphcategQuery groupByAmerns() Group by the AmerNS column
 * @method GraphcategQuery groupByAsia() Group by the Asia column
 * @method GraphcategQuery groupByOceania() Group by the Oceania column
 * @method GraphcategQuery groupByAntarctica() Group by the Antarctica column
 * @method GraphcategQuery groupByEurope() Group by the Europe column
 * @method GraphcategQuery groupByEuroaf() Group by the EuroAf column
 * @method GraphcategQuery groupByUssr() Group by the USSR column
 * @method GraphcategQuery groupByPacific() Group by the Pacific column
 * @method GraphcategQuery groupByAtlantic() Group by the Atlantic column
 * @method GraphcategQuery groupByIndian() Group by the Indian column
 * @method GraphcategQuery groupByMedit() Group by the Medit column
 * @method GraphcategQuery groupBySalinity() Group by the Salinity column
 * @method GraphcategQuery groupByTs() Group by the TS column
 *
 * @method GraphcategQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GraphcategQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GraphcategQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Graphcateg findOne(PropelPDO $con = null) Return the first Graphcateg matching the query
 * @method Graphcateg findOneOrCreate(PropelPDO $con = null) Return the first Graphcateg matching the query, or a new Graphcateg object populated from the query conditions when no match is found
 *
 * @method Graphcateg findOneByAfrica(int $Africa) Return the first Graphcateg filtered by the Africa column
 * @method Graphcateg findOneByAmernc(int $AmerNC) Return the first Graphcateg filtered by the AmerNC column
 * @method Graphcateg findOneByAmers(int $AmerS) Return the first Graphcateg filtered by the AmerS column
 * @method Graphcateg findOneByAmerns(int $AmerNS) Return the first Graphcateg filtered by the AmerNS column
 * @method Graphcateg findOneByAsia(int $Asia) Return the first Graphcateg filtered by the Asia column
 * @method Graphcateg findOneByOceania(int $Oceania) Return the first Graphcateg filtered by the Oceania column
 * @method Graphcateg findOneByAntarctica(int $Antarctica) Return the first Graphcateg filtered by the Antarctica column
 * @method Graphcateg findOneByEurope(int $Europe) Return the first Graphcateg filtered by the Europe column
 * @method Graphcateg findOneByEuroaf(int $EuroAf) Return the first Graphcateg filtered by the EuroAf column
 * @method Graphcateg findOneByUssr(int $USSR) Return the first Graphcateg filtered by the USSR column
 * @method Graphcateg findOneByPacific(int $Pacific) Return the first Graphcateg filtered by the Pacific column
 * @method Graphcateg findOneByAtlantic(int $Atlantic) Return the first Graphcateg filtered by the Atlantic column
 * @method Graphcateg findOneByIndian(int $Indian) Return the first Graphcateg filtered by the Indian column
 * @method Graphcateg findOneByMedit(int $Medit) Return the first Graphcateg filtered by the Medit column
 * @method Graphcateg findOneBySalinity(string $Salinity) Return the first Graphcateg filtered by the Salinity column
 * @method Graphcateg findOneByTs(string $TS) Return the first Graphcateg filtered by the TS column
 *
 * @method array findBySpeccode(int $Speccode) Return Graphcateg objects filtered by the Speccode column
 * @method array findByAfrica(int $Africa) Return Graphcateg objects filtered by the Africa column
 * @method array findByAmernc(int $AmerNC) Return Graphcateg objects filtered by the AmerNC column
 * @method array findByAmers(int $AmerS) Return Graphcateg objects filtered by the AmerS column
 * @method array findByAmerns(int $AmerNS) Return Graphcateg objects filtered by the AmerNS column
 * @method array findByAsia(int $Asia) Return Graphcateg objects filtered by the Asia column
 * @method array findByOceania(int $Oceania) Return Graphcateg objects filtered by the Oceania column
 * @method array findByAntarctica(int $Antarctica) Return Graphcateg objects filtered by the Antarctica column
 * @method array findByEurope(int $Europe) Return Graphcateg objects filtered by the Europe column
 * @method array findByEuroaf(int $EuroAf) Return Graphcateg objects filtered by the EuroAf column
 * @method array findByUssr(int $USSR) Return Graphcateg objects filtered by the USSR column
 * @method array findByPacific(int $Pacific) Return Graphcateg objects filtered by the Pacific column
 * @method array findByAtlantic(int $Atlantic) Return Graphcateg objects filtered by the Atlantic column
 * @method array findByIndian(int $Indian) Return Graphcateg objects filtered by the Indian column
 * @method array findByMedit(int $Medit) Return Graphcateg objects filtered by the Medit column
 * @method array findBySalinity(string $Salinity) Return Graphcateg objects filtered by the Salinity column
 * @method array findByTs(string $TS) Return Graphcateg objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseGraphcategQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGraphcategQuery object.
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
            $modelName = 'Graphcateg';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GraphcategQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GraphcategQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GraphcategQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GraphcategQuery) {
            return $criteria;
        }
        $query = new GraphcategQuery(null, null, $modelAlias);

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
     * @return   Graphcateg|Graphcateg[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GraphcategPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GraphcategPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Graphcateg A model object, or null if the key is not found
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
     * @return                 Graphcateg A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `Speccode`, `Africa`, `AmerNC`, `AmerS`, `AmerNS`, `Asia`, `Oceania`, `Antarctica`, `Europe`, `EuroAf`, `USSR`, `Pacific`, `Atlantic`, `Indian`, `Medit`, `Salinity`, `TS` FROM `graphcateg` WHERE `Speccode` = :p0';
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
            $obj = new Graphcateg();
            $obj->hydrate($row);
            GraphcategPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Graphcateg|Graphcateg[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Graphcateg[]|mixed the list of results, formatted by the current formatter
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
     * @return GraphcategQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GraphcategPeer::SPECCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GraphcategQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GraphcategPeer::SPECCODE, $keys, Criteria::IN);
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
     * @return GraphcategQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(GraphcategPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(GraphcategPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GraphcategPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the Africa column
     *
     * Example usage:
     * <code>
     * $query->filterByAfrica(1234); // WHERE Africa = 1234
     * $query->filterByAfrica(array(12, 34)); // WHERE Africa IN (12, 34)
     * $query->filterByAfrica(array('min' => 12)); // WHERE Africa >= 12
     * $query->filterByAfrica(array('max' => 12)); // WHERE Africa <= 12
     * </code>
     *
     * @param     mixed $africa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GraphcategQuery The current query, for fluid interface
     */
    public function filterByAfrica($africa = null, $comparison = null)
    {
        if (is_array($africa)) {
            $useMinMax = false;
            if (isset($africa['min'])) {
                $this->addUsingAlias(GraphcategPeer::AFRICA, $africa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($africa['max'])) {
                $this->addUsingAlias(GraphcategPeer::AFRICA, $africa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GraphcategPeer::AFRICA, $africa, $comparison);
    }

    /**
     * Filter the query on the AmerNC column
     *
     * Example usage:
     * <code>
     * $query->filterByAmernc(1234); // WHERE AmerNC = 1234
     * $query->filterByAmernc(array(12, 34)); // WHERE AmerNC IN (12, 34)
     * $query->filterByAmernc(array('min' => 12)); // WHERE AmerNC >= 12
     * $query->filterByAmernc(array('max' => 12)); // WHERE AmerNC <= 12
     * </code>
     *
     * @param     mixed $amernc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GraphcategQuery The current query, for fluid interface
     */
    public function filterByAmernc($amernc = null, $comparison = null)
    {
        if (is_array($amernc)) {
            $useMinMax = false;
            if (isset($amernc['min'])) {
                $this->addUsingAlias(GraphcategPeer::AMERNC, $amernc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($amernc['max'])) {
                $this->addUsingAlias(GraphcategPeer::AMERNC, $amernc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GraphcategPeer::AMERNC, $amernc, $comparison);
    }

    /**
     * Filter the query on the AmerS column
     *
     * Example usage:
     * <code>
     * $query->filterByAmers(1234); // WHERE AmerS = 1234
     * $query->filterByAmers(array(12, 34)); // WHERE AmerS IN (12, 34)
     * $query->filterByAmers(array('min' => 12)); // WHERE AmerS >= 12
     * $query->filterByAmers(array('max' => 12)); // WHERE AmerS <= 12
     * </code>
     *
     * @param     mixed $amers The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GraphcategQuery The current query, for fluid interface
     */
    public function filterByAmers($amers = null, $comparison = null)
    {
        if (is_array($amers)) {
            $useMinMax = false;
            if (isset($amers['min'])) {
                $this->addUsingAlias(GraphcategPeer::AMERS, $amers['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($amers['max'])) {
                $this->addUsingAlias(GraphcategPeer::AMERS, $amers['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GraphcategPeer::AMERS, $amers, $comparison);
    }

    /**
     * Filter the query on the AmerNS column
     *
     * Example usage:
     * <code>
     * $query->filterByAmerns(1234); // WHERE AmerNS = 1234
     * $query->filterByAmerns(array(12, 34)); // WHERE AmerNS IN (12, 34)
     * $query->filterByAmerns(array('min' => 12)); // WHERE AmerNS >= 12
     * $query->filterByAmerns(array('max' => 12)); // WHERE AmerNS <= 12
     * </code>
     *
     * @param     mixed $amerns The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GraphcategQuery The current query, for fluid interface
     */
    public function filterByAmerns($amerns = null, $comparison = null)
    {
        if (is_array($amerns)) {
            $useMinMax = false;
            if (isset($amerns['min'])) {
                $this->addUsingAlias(GraphcategPeer::AMERNS, $amerns['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($amerns['max'])) {
                $this->addUsingAlias(GraphcategPeer::AMERNS, $amerns['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GraphcategPeer::AMERNS, $amerns, $comparison);
    }

    /**
     * Filter the query on the Asia column
     *
     * Example usage:
     * <code>
     * $query->filterByAsia(1234); // WHERE Asia = 1234
     * $query->filterByAsia(array(12, 34)); // WHERE Asia IN (12, 34)
     * $query->filterByAsia(array('min' => 12)); // WHERE Asia >= 12
     * $query->filterByAsia(array('max' => 12)); // WHERE Asia <= 12
     * </code>
     *
     * @param     mixed $asia The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GraphcategQuery The current query, for fluid interface
     */
    public function filterByAsia($asia = null, $comparison = null)
    {
        if (is_array($asia)) {
            $useMinMax = false;
            if (isset($asia['min'])) {
                $this->addUsingAlias(GraphcategPeer::ASIA, $asia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($asia['max'])) {
                $this->addUsingAlias(GraphcategPeer::ASIA, $asia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GraphcategPeer::ASIA, $asia, $comparison);
    }

    /**
     * Filter the query on the Oceania column
     *
     * Example usage:
     * <code>
     * $query->filterByOceania(1234); // WHERE Oceania = 1234
     * $query->filterByOceania(array(12, 34)); // WHERE Oceania IN (12, 34)
     * $query->filterByOceania(array('min' => 12)); // WHERE Oceania >= 12
     * $query->filterByOceania(array('max' => 12)); // WHERE Oceania <= 12
     * </code>
     *
     * @param     mixed $oceania The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GraphcategQuery The current query, for fluid interface
     */
    public function filterByOceania($oceania = null, $comparison = null)
    {
        if (is_array($oceania)) {
            $useMinMax = false;
            if (isset($oceania['min'])) {
                $this->addUsingAlias(GraphcategPeer::OCEANIA, $oceania['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oceania['max'])) {
                $this->addUsingAlias(GraphcategPeer::OCEANIA, $oceania['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GraphcategPeer::OCEANIA, $oceania, $comparison);
    }

    /**
     * Filter the query on the Antarctica column
     *
     * Example usage:
     * <code>
     * $query->filterByAntarctica(1234); // WHERE Antarctica = 1234
     * $query->filterByAntarctica(array(12, 34)); // WHERE Antarctica IN (12, 34)
     * $query->filterByAntarctica(array('min' => 12)); // WHERE Antarctica >= 12
     * $query->filterByAntarctica(array('max' => 12)); // WHERE Antarctica <= 12
     * </code>
     *
     * @param     mixed $antarctica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GraphcategQuery The current query, for fluid interface
     */
    public function filterByAntarctica($antarctica = null, $comparison = null)
    {
        if (is_array($antarctica)) {
            $useMinMax = false;
            if (isset($antarctica['min'])) {
                $this->addUsingAlias(GraphcategPeer::ANTARCTICA, $antarctica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($antarctica['max'])) {
                $this->addUsingAlias(GraphcategPeer::ANTARCTICA, $antarctica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GraphcategPeer::ANTARCTICA, $antarctica, $comparison);
    }

    /**
     * Filter the query on the Europe column
     *
     * Example usage:
     * <code>
     * $query->filterByEurope(1234); // WHERE Europe = 1234
     * $query->filterByEurope(array(12, 34)); // WHERE Europe IN (12, 34)
     * $query->filterByEurope(array('min' => 12)); // WHERE Europe >= 12
     * $query->filterByEurope(array('max' => 12)); // WHERE Europe <= 12
     * </code>
     *
     * @param     mixed $europe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GraphcategQuery The current query, for fluid interface
     */
    public function filterByEurope($europe = null, $comparison = null)
    {
        if (is_array($europe)) {
            $useMinMax = false;
            if (isset($europe['min'])) {
                $this->addUsingAlias(GraphcategPeer::EUROPE, $europe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($europe['max'])) {
                $this->addUsingAlias(GraphcategPeer::EUROPE, $europe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GraphcategPeer::EUROPE, $europe, $comparison);
    }

    /**
     * Filter the query on the EuroAf column
     *
     * Example usage:
     * <code>
     * $query->filterByEuroaf(1234); // WHERE EuroAf = 1234
     * $query->filterByEuroaf(array(12, 34)); // WHERE EuroAf IN (12, 34)
     * $query->filterByEuroaf(array('min' => 12)); // WHERE EuroAf >= 12
     * $query->filterByEuroaf(array('max' => 12)); // WHERE EuroAf <= 12
     * </code>
     *
     * @param     mixed $euroaf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GraphcategQuery The current query, for fluid interface
     */
    public function filterByEuroaf($euroaf = null, $comparison = null)
    {
        if (is_array($euroaf)) {
            $useMinMax = false;
            if (isset($euroaf['min'])) {
                $this->addUsingAlias(GraphcategPeer::EUROAF, $euroaf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($euroaf['max'])) {
                $this->addUsingAlias(GraphcategPeer::EUROAF, $euroaf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GraphcategPeer::EUROAF, $euroaf, $comparison);
    }

    /**
     * Filter the query on the USSR column
     *
     * Example usage:
     * <code>
     * $query->filterByUssr(1234); // WHERE USSR = 1234
     * $query->filterByUssr(array(12, 34)); // WHERE USSR IN (12, 34)
     * $query->filterByUssr(array('min' => 12)); // WHERE USSR >= 12
     * $query->filterByUssr(array('max' => 12)); // WHERE USSR <= 12
     * </code>
     *
     * @param     mixed $ussr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GraphcategQuery The current query, for fluid interface
     */
    public function filterByUssr($ussr = null, $comparison = null)
    {
        if (is_array($ussr)) {
            $useMinMax = false;
            if (isset($ussr['min'])) {
                $this->addUsingAlias(GraphcategPeer::USSR, $ussr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ussr['max'])) {
                $this->addUsingAlias(GraphcategPeer::USSR, $ussr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GraphcategPeer::USSR, $ussr, $comparison);
    }

    /**
     * Filter the query on the Pacific column
     *
     * Example usage:
     * <code>
     * $query->filterByPacific(1234); // WHERE Pacific = 1234
     * $query->filterByPacific(array(12, 34)); // WHERE Pacific IN (12, 34)
     * $query->filterByPacific(array('min' => 12)); // WHERE Pacific >= 12
     * $query->filterByPacific(array('max' => 12)); // WHERE Pacific <= 12
     * </code>
     *
     * @param     mixed $pacific The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GraphcategQuery The current query, for fluid interface
     */
    public function filterByPacific($pacific = null, $comparison = null)
    {
        if (is_array($pacific)) {
            $useMinMax = false;
            if (isset($pacific['min'])) {
                $this->addUsingAlias(GraphcategPeer::PACIFIC, $pacific['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pacific['max'])) {
                $this->addUsingAlias(GraphcategPeer::PACIFIC, $pacific['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GraphcategPeer::PACIFIC, $pacific, $comparison);
    }

    /**
     * Filter the query on the Atlantic column
     *
     * Example usage:
     * <code>
     * $query->filterByAtlantic(1234); // WHERE Atlantic = 1234
     * $query->filterByAtlantic(array(12, 34)); // WHERE Atlantic IN (12, 34)
     * $query->filterByAtlantic(array('min' => 12)); // WHERE Atlantic >= 12
     * $query->filterByAtlantic(array('max' => 12)); // WHERE Atlantic <= 12
     * </code>
     *
     * @param     mixed $atlantic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GraphcategQuery The current query, for fluid interface
     */
    public function filterByAtlantic($atlantic = null, $comparison = null)
    {
        if (is_array($atlantic)) {
            $useMinMax = false;
            if (isset($atlantic['min'])) {
                $this->addUsingAlias(GraphcategPeer::ATLANTIC, $atlantic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($atlantic['max'])) {
                $this->addUsingAlias(GraphcategPeer::ATLANTIC, $atlantic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GraphcategPeer::ATLANTIC, $atlantic, $comparison);
    }

    /**
     * Filter the query on the Indian column
     *
     * Example usage:
     * <code>
     * $query->filterByIndian(1234); // WHERE Indian = 1234
     * $query->filterByIndian(array(12, 34)); // WHERE Indian IN (12, 34)
     * $query->filterByIndian(array('min' => 12)); // WHERE Indian >= 12
     * $query->filterByIndian(array('max' => 12)); // WHERE Indian <= 12
     * </code>
     *
     * @param     mixed $indian The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GraphcategQuery The current query, for fluid interface
     */
    public function filterByIndian($indian = null, $comparison = null)
    {
        if (is_array($indian)) {
            $useMinMax = false;
            if (isset($indian['min'])) {
                $this->addUsingAlias(GraphcategPeer::INDIAN, $indian['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indian['max'])) {
                $this->addUsingAlias(GraphcategPeer::INDIAN, $indian['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GraphcategPeer::INDIAN, $indian, $comparison);
    }

    /**
     * Filter the query on the Medit column
     *
     * Example usage:
     * <code>
     * $query->filterByMedit(1234); // WHERE Medit = 1234
     * $query->filterByMedit(array(12, 34)); // WHERE Medit IN (12, 34)
     * $query->filterByMedit(array('min' => 12)); // WHERE Medit >= 12
     * $query->filterByMedit(array('max' => 12)); // WHERE Medit <= 12
     * </code>
     *
     * @param     mixed $medit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GraphcategQuery The current query, for fluid interface
     */
    public function filterByMedit($medit = null, $comparison = null)
    {
        if (is_array($medit)) {
            $useMinMax = false;
            if (isset($medit['min'])) {
                $this->addUsingAlias(GraphcategPeer::MEDIT, $medit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($medit['max'])) {
                $this->addUsingAlias(GraphcategPeer::MEDIT, $medit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GraphcategPeer::MEDIT, $medit, $comparison);
    }

    /**
     * Filter the query on the Salinity column
     *
     * Example usage:
     * <code>
     * $query->filterBySalinity('fooValue');   // WHERE Salinity = 'fooValue'
     * $query->filterBySalinity('%fooValue%'); // WHERE Salinity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $salinity The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GraphcategQuery The current query, for fluid interface
     */
    public function filterBySalinity($salinity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($salinity)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $salinity)) {
                $salinity = str_replace('*', '%', $salinity);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GraphcategPeer::SALINITY, $salinity, $comparison);
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
     * @return GraphcategQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(GraphcategPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(GraphcategPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GraphcategPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Graphcateg $graphcateg Object to remove from the list of results
     *
     * @return GraphcategQuery The current query, for fluid interface
     */
    public function prune($graphcateg = null)
    {
        if ($graphcateg) {
            $this->addUsingAlias(GraphcategPeer::SPECCODE, $graphcateg->getSpeccode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
