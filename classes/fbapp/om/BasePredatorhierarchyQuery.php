<?php


/**
 * Base class that represents a query for the 'predatorhierarchy' table.
 *
 *
 *
 * @method PredatorhierarchyQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method PredatorhierarchyQuery orderByPredatorrank($order = Criteria::ASC) Order by the PREDATORRank column
 * @method PredatorhierarchyQuery orderByPredatoriirank($order = Criteria::ASC) Order by the PREDATORIIRank column
 * @method PredatorhierarchyQuery orderByPredatorstagerank($order = Criteria::ASC) Order by the PREDATORStageRank column
 * @method PredatorhierarchyQuery orderByPreystagerank($order = Criteria::ASC) Order by the PREYStageRank column
 * @method PredatorhierarchyQuery orderByPredatori($order = Criteria::ASC) Order by the PREDATORI column
 * @method PredatorhierarchyQuery orderByPredatorii($order = Criteria::ASC) Order by the PREDATORII column
 * @method PredatorhierarchyQuery orderByPredatorstage($order = Criteria::ASC) Order by the PREDATORStage column
 * @method PredatorhierarchyQuery orderByPreystage($order = Criteria::ASC) Order by the PREYStage column
 * @method PredatorhierarchyQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method PredatorhierarchyQuery groupByAutoctr() Group by the AutoCtr column
 * @method PredatorhierarchyQuery groupByPredatorrank() Group by the PREDATORRank column
 * @method PredatorhierarchyQuery groupByPredatoriirank() Group by the PREDATORIIRank column
 * @method PredatorhierarchyQuery groupByPredatorstagerank() Group by the PREDATORStageRank column
 * @method PredatorhierarchyQuery groupByPreystagerank() Group by the PREYStageRank column
 * @method PredatorhierarchyQuery groupByPredatori() Group by the PREDATORI column
 * @method PredatorhierarchyQuery groupByPredatorii() Group by the PREDATORII column
 * @method PredatorhierarchyQuery groupByPredatorstage() Group by the PREDATORStage column
 * @method PredatorhierarchyQuery groupByPreystage() Group by the PREYStage column
 * @method PredatorhierarchyQuery groupByTs() Group by the TS column
 *
 * @method PredatorhierarchyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PredatorhierarchyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PredatorhierarchyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Predatorhierarchy findOne(PropelPDO $con = null) Return the first Predatorhierarchy matching the query
 * @method Predatorhierarchy findOneOrCreate(PropelPDO $con = null) Return the first Predatorhierarchy matching the query, or a new Predatorhierarchy object populated from the query conditions when no match is found
 *
 * @method Predatorhierarchy findOneByPredatorrank(int $PREDATORRank) Return the first Predatorhierarchy filtered by the PREDATORRank column
 * @method Predatorhierarchy findOneByPredatoriirank(int $PREDATORIIRank) Return the first Predatorhierarchy filtered by the PREDATORIIRank column
 * @method Predatorhierarchy findOneByPredatorstagerank(int $PREDATORStageRank) Return the first Predatorhierarchy filtered by the PREDATORStageRank column
 * @method Predatorhierarchy findOneByPreystagerank(int $PREYStageRank) Return the first Predatorhierarchy filtered by the PREYStageRank column
 * @method Predatorhierarchy findOneByPredatori(string $PREDATORI) Return the first Predatorhierarchy filtered by the PREDATORI column
 * @method Predatorhierarchy findOneByPredatorii(string $PREDATORII) Return the first Predatorhierarchy filtered by the PREDATORII column
 * @method Predatorhierarchy findOneByPredatorstage(string $PREDATORStage) Return the first Predatorhierarchy filtered by the PREDATORStage column
 * @method Predatorhierarchy findOneByPreystage(string $PREYStage) Return the first Predatorhierarchy filtered by the PREYStage column
 * @method Predatorhierarchy findOneByTs(string $TS) Return the first Predatorhierarchy filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return Predatorhierarchy objects filtered by the AutoCtr column
 * @method array findByPredatorrank(int $PREDATORRank) Return Predatorhierarchy objects filtered by the PREDATORRank column
 * @method array findByPredatoriirank(int $PREDATORIIRank) Return Predatorhierarchy objects filtered by the PREDATORIIRank column
 * @method array findByPredatorstagerank(int $PREDATORStageRank) Return Predatorhierarchy objects filtered by the PREDATORStageRank column
 * @method array findByPreystagerank(int $PREYStageRank) Return Predatorhierarchy objects filtered by the PREYStageRank column
 * @method array findByPredatori(string $PREDATORI) Return Predatorhierarchy objects filtered by the PREDATORI column
 * @method array findByPredatorii(string $PREDATORII) Return Predatorhierarchy objects filtered by the PREDATORII column
 * @method array findByPredatorstage(string $PREDATORStage) Return Predatorhierarchy objects filtered by the PREDATORStage column
 * @method array findByPreystage(string $PREYStage) Return Predatorhierarchy objects filtered by the PREYStage column
 * @method array findByTs(string $TS) Return Predatorhierarchy objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BasePredatorhierarchyQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePredatorhierarchyQuery object.
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
            $modelName = 'Predatorhierarchy';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PredatorhierarchyQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PredatorhierarchyQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PredatorhierarchyQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PredatorhierarchyQuery) {
            return $criteria;
        }
        $query = new PredatorhierarchyQuery(null, null, $modelAlias);

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
     * @return   Predatorhierarchy|Predatorhierarchy[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PredatorhierarchyPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PredatorhierarchyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Predatorhierarchy A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByAutoctr($key, $con = null)
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
     * @return                 Predatorhierarchy A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `PREDATORRank`, `PREDATORIIRank`, `PREDATORStageRank`, `PREYStageRank`, `PREDATORI`, `PREDATORII`, `PREDATORStage`, `PREYStage`, `TS` FROM `predatorhierarchy` WHERE `AutoCtr` = :p0';
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
            $obj = new Predatorhierarchy();
            $obj->hydrate($row);
            PredatorhierarchyPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Predatorhierarchy|Predatorhierarchy[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Predatorhierarchy[]|mixed the list of results, formatted by the current formatter
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
     * @return PredatorhierarchyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PredatorhierarchyPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PredatorhierarchyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PredatorhierarchyPeer::AUTOCTR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the AutoCtr column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoctr(1234); // WHERE AutoCtr = 1234
     * $query->filterByAutoctr(array(12, 34)); // WHERE AutoCtr IN (12, 34)
     * $query->filterByAutoctr(array('min' => 12)); // WHERE AutoCtr >= 12
     * $query->filterByAutoctr(array('max' => 12)); // WHERE AutoCtr <= 12
     * </code>
     *
     * @param     mixed $autoctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatorhierarchyQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(PredatorhierarchyPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(PredatorhierarchyPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatorhierarchyPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the PREDATORRank column
     *
     * Example usage:
     * <code>
     * $query->filterByPredatorrank(1234); // WHERE PREDATORRank = 1234
     * $query->filterByPredatorrank(array(12, 34)); // WHERE PREDATORRank IN (12, 34)
     * $query->filterByPredatorrank(array('min' => 12)); // WHERE PREDATORRank >= 12
     * $query->filterByPredatorrank(array('max' => 12)); // WHERE PREDATORRank <= 12
     * </code>
     *
     * @param     mixed $predatorrank The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatorhierarchyQuery The current query, for fluid interface
     */
    public function filterByPredatorrank($predatorrank = null, $comparison = null)
    {
        if (is_array($predatorrank)) {
            $useMinMax = false;
            if (isset($predatorrank['min'])) {
                $this->addUsingAlias(PredatorhierarchyPeer::PREDATORRANK, $predatorrank['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($predatorrank['max'])) {
                $this->addUsingAlias(PredatorhierarchyPeer::PREDATORRANK, $predatorrank['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatorhierarchyPeer::PREDATORRANK, $predatorrank, $comparison);
    }

    /**
     * Filter the query on the PREDATORIIRank column
     *
     * Example usage:
     * <code>
     * $query->filterByPredatoriirank(1234); // WHERE PREDATORIIRank = 1234
     * $query->filterByPredatoriirank(array(12, 34)); // WHERE PREDATORIIRank IN (12, 34)
     * $query->filterByPredatoriirank(array('min' => 12)); // WHERE PREDATORIIRank >= 12
     * $query->filterByPredatoriirank(array('max' => 12)); // WHERE PREDATORIIRank <= 12
     * </code>
     *
     * @param     mixed $predatoriirank The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatorhierarchyQuery The current query, for fluid interface
     */
    public function filterByPredatoriirank($predatoriirank = null, $comparison = null)
    {
        if (is_array($predatoriirank)) {
            $useMinMax = false;
            if (isset($predatoriirank['min'])) {
                $this->addUsingAlias(PredatorhierarchyPeer::PREDATORIIRANK, $predatoriirank['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($predatoriirank['max'])) {
                $this->addUsingAlias(PredatorhierarchyPeer::PREDATORIIRANK, $predatoriirank['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatorhierarchyPeer::PREDATORIIRANK, $predatoriirank, $comparison);
    }

    /**
     * Filter the query on the PREDATORStageRank column
     *
     * Example usage:
     * <code>
     * $query->filterByPredatorstagerank(1234); // WHERE PREDATORStageRank = 1234
     * $query->filterByPredatorstagerank(array(12, 34)); // WHERE PREDATORStageRank IN (12, 34)
     * $query->filterByPredatorstagerank(array('min' => 12)); // WHERE PREDATORStageRank >= 12
     * $query->filterByPredatorstagerank(array('max' => 12)); // WHERE PREDATORStageRank <= 12
     * </code>
     *
     * @param     mixed $predatorstagerank The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatorhierarchyQuery The current query, for fluid interface
     */
    public function filterByPredatorstagerank($predatorstagerank = null, $comparison = null)
    {
        if (is_array($predatorstagerank)) {
            $useMinMax = false;
            if (isset($predatorstagerank['min'])) {
                $this->addUsingAlias(PredatorhierarchyPeer::PREDATORSTAGERANK, $predatorstagerank['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($predatorstagerank['max'])) {
                $this->addUsingAlias(PredatorhierarchyPeer::PREDATORSTAGERANK, $predatorstagerank['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatorhierarchyPeer::PREDATORSTAGERANK, $predatorstagerank, $comparison);
    }

    /**
     * Filter the query on the PREYStageRank column
     *
     * Example usage:
     * <code>
     * $query->filterByPreystagerank(1234); // WHERE PREYStageRank = 1234
     * $query->filterByPreystagerank(array(12, 34)); // WHERE PREYStageRank IN (12, 34)
     * $query->filterByPreystagerank(array('min' => 12)); // WHERE PREYStageRank >= 12
     * $query->filterByPreystagerank(array('max' => 12)); // WHERE PREYStageRank <= 12
     * </code>
     *
     * @param     mixed $preystagerank The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatorhierarchyQuery The current query, for fluid interface
     */
    public function filterByPreystagerank($preystagerank = null, $comparison = null)
    {
        if (is_array($preystagerank)) {
            $useMinMax = false;
            if (isset($preystagerank['min'])) {
                $this->addUsingAlias(PredatorhierarchyPeer::PREYSTAGERANK, $preystagerank['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preystagerank['max'])) {
                $this->addUsingAlias(PredatorhierarchyPeer::PREYSTAGERANK, $preystagerank['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatorhierarchyPeer::PREYSTAGERANK, $preystagerank, $comparison);
    }

    /**
     * Filter the query on the PREDATORI column
     *
     * Example usage:
     * <code>
     * $query->filterByPredatori('fooValue');   // WHERE PREDATORI = 'fooValue'
     * $query->filterByPredatori('%fooValue%'); // WHERE PREDATORI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $predatori The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatorhierarchyQuery The current query, for fluid interface
     */
    public function filterByPredatori($predatori = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($predatori)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $predatori)) {
                $predatori = str_replace('*', '%', $predatori);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PredatorhierarchyPeer::PREDATORI, $predatori, $comparison);
    }

    /**
     * Filter the query on the PREDATORII column
     *
     * Example usage:
     * <code>
     * $query->filterByPredatorii('fooValue');   // WHERE PREDATORII = 'fooValue'
     * $query->filterByPredatorii('%fooValue%'); // WHERE PREDATORII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $predatorii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatorhierarchyQuery The current query, for fluid interface
     */
    public function filterByPredatorii($predatorii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($predatorii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $predatorii)) {
                $predatorii = str_replace('*', '%', $predatorii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PredatorhierarchyPeer::PREDATORII, $predatorii, $comparison);
    }

    /**
     * Filter the query on the PREDATORStage column
     *
     * Example usage:
     * <code>
     * $query->filterByPredatorstage('fooValue');   // WHERE PREDATORStage = 'fooValue'
     * $query->filterByPredatorstage('%fooValue%'); // WHERE PREDATORStage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $predatorstage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatorhierarchyQuery The current query, for fluid interface
     */
    public function filterByPredatorstage($predatorstage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($predatorstage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $predatorstage)) {
                $predatorstage = str_replace('*', '%', $predatorstage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PredatorhierarchyPeer::PREDATORSTAGE, $predatorstage, $comparison);
    }

    /**
     * Filter the query on the PREYStage column
     *
     * Example usage:
     * <code>
     * $query->filterByPreystage('fooValue');   // WHERE PREYStage = 'fooValue'
     * $query->filterByPreystage('%fooValue%'); // WHERE PREYStage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $preystage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatorhierarchyQuery The current query, for fluid interface
     */
    public function filterByPreystage($preystage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($preystage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $preystage)) {
                $preystage = str_replace('*', '%', $preystage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PredatorhierarchyPeer::PREYSTAGE, $preystage, $comparison);
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
     * @return PredatorhierarchyQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(PredatorhierarchyPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(PredatorhierarchyPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatorhierarchyPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Predatorhierarchy $predatorhierarchy Object to remove from the list of results
     *
     * @return PredatorhierarchyQuery The current query, for fluid interface
     */
    public function prune($predatorhierarchy = null)
    {
        if ($predatorhierarchy) {
            $this->addUsingAlias(PredatorhierarchyPeer::AUTOCTR, $predatorhierarchy->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
