<?php


/**
 * Base class that represents a query for the 'revisions' table.
 *
 *
 *
 * @method RevisionsQuery orderByFamcode($order = Criteria::ASC) Order by the FamCode column
 * @method RevisionsQuery orderByRefno($order = Criteria::ASC) Order by the RefNo column
 * @method RevisionsQuery orderByGencode($order = Criteria::ASC) Order by the GenCode column
 * @method RevisionsQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method RevisionsQuery groupByFamcode() Group by the FamCode column
 * @method RevisionsQuery groupByRefno() Group by the RefNo column
 * @method RevisionsQuery groupByGencode() Group by the GenCode column
 * @method RevisionsQuery groupByTs() Group by the TS column
 *
 * @method RevisionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RevisionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RevisionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Revisions findOne(PropelPDO $con = null) Return the first Revisions matching the query
 * @method Revisions findOneOrCreate(PropelPDO $con = null) Return the first Revisions matching the query, or a new Revisions object populated from the query conditions when no match is found
 *
 * @method Revisions findOneByFamcode(int $FamCode) Return the first Revisions filtered by the FamCode column
 * @method Revisions findOneByRefno(int $RefNo) Return the first Revisions filtered by the RefNo column
 * @method Revisions findOneByGencode(int $GenCode) Return the first Revisions filtered by the GenCode column
 * @method Revisions findOneByTs(string $TS) Return the first Revisions filtered by the TS column
 *
 * @method array findByFamcode(int $FamCode) Return Revisions objects filtered by the FamCode column
 * @method array findByRefno(int $RefNo) Return Revisions objects filtered by the RefNo column
 * @method array findByGencode(int $GenCode) Return Revisions objects filtered by the GenCode column
 * @method array findByTs(string $TS) Return Revisions objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseRevisionsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRevisionsQuery object.
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
            $modelName = 'Revisions';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RevisionsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RevisionsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RevisionsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RevisionsQuery) {
            return $criteria;
        }
        $query = new RevisionsQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$FamCode, $RefNo]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Revisions|Revisions[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RevisionsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RevisionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Revisions A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `FamCode`, `RefNo`, `GenCode`, `TS` FROM `revisions` WHERE `FamCode` = :p0 AND `RefNo` = :p1';
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
            $obj = new Revisions();
            $obj->hydrate($row);
            RevisionsPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Revisions|Revisions[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Revisions[]|mixed the list of results, formatted by the current formatter
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
     * @return RevisionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(RevisionsPeer::FAMCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(RevisionsPeer::REFNO, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RevisionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(RevisionsPeer::FAMCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(RevisionsPeer::REFNO, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the FamCode column
     *
     * Example usage:
     * <code>
     * $query->filterByFamcode(1234); // WHERE FamCode = 1234
     * $query->filterByFamcode(array(12, 34)); // WHERE FamCode IN (12, 34)
     * $query->filterByFamcode(array('min' => 12)); // WHERE FamCode >= 12
     * $query->filterByFamcode(array('max' => 12)); // WHERE FamCode <= 12
     * </code>
     *
     * @param     mixed $famcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RevisionsQuery The current query, for fluid interface
     */
    public function filterByFamcode($famcode = null, $comparison = null)
    {
        if (is_array($famcode)) {
            $useMinMax = false;
            if (isset($famcode['min'])) {
                $this->addUsingAlias(RevisionsPeer::FAMCODE, $famcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famcode['max'])) {
                $this->addUsingAlias(RevisionsPeer::FAMCODE, $famcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RevisionsPeer::FAMCODE, $famcode, $comparison);
    }

    /**
     * Filter the query on the RefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByRefno(1234); // WHERE RefNo = 1234
     * $query->filterByRefno(array(12, 34)); // WHERE RefNo IN (12, 34)
     * $query->filterByRefno(array('min' => 12)); // WHERE RefNo >= 12
     * $query->filterByRefno(array('max' => 12)); // WHERE RefNo <= 12
     * </code>
     *
     * @param     mixed $refno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RevisionsQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(RevisionsPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(RevisionsPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RevisionsPeer::REFNO, $refno, $comparison);
    }

    /**
     * Filter the query on the GenCode column
     *
     * Example usage:
     * <code>
     * $query->filterByGencode(1234); // WHERE GenCode = 1234
     * $query->filterByGencode(array(12, 34)); // WHERE GenCode IN (12, 34)
     * $query->filterByGencode(array('min' => 12)); // WHERE GenCode >= 12
     * $query->filterByGencode(array('max' => 12)); // WHERE GenCode <= 12
     * </code>
     *
     * @param     mixed $gencode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RevisionsQuery The current query, for fluid interface
     */
    public function filterByGencode($gencode = null, $comparison = null)
    {
        if (is_array($gencode)) {
            $useMinMax = false;
            if (isset($gencode['min'])) {
                $this->addUsingAlias(RevisionsPeer::GENCODE, $gencode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gencode['max'])) {
                $this->addUsingAlias(RevisionsPeer::GENCODE, $gencode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RevisionsPeer::GENCODE, $gencode, $comparison);
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
     * @return RevisionsQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(RevisionsPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(RevisionsPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RevisionsPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Revisions $revisions Object to remove from the list of results
     *
     * @return RevisionsQuery The current query, for fluid interface
     */
    public function prune($revisions = null)
    {
        if ($revisions) {
            $this->addCond('pruneCond0', $this->getAliasedColName(RevisionsPeer::FAMCODE), $revisions->getFamcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(RevisionsPeer::REFNO), $revisions->getRefno(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
