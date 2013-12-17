<?php


/**
 * Base class that represents a query for the 'elecsub' table.
 *
 *
 *
 * @method ElecsubQuery orderByElecode($order = Criteria::ASC) Order by the EleCode column
 * @method ElecsubQuery orderByAllele($order = Criteria::ASC) Order by the Allele column
 * @method ElecsubQuery orderByAllelefrequency($order = Criteria::ASC) Order by the AlleleFrequency column
 * @method ElecsubQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method ElecsubQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method ElecsubQuery groupByElecode() Group by the EleCode column
 * @method ElecsubQuery groupByAllele() Group by the Allele column
 * @method ElecsubQuery groupByAllelefrequency() Group by the AlleleFrequency column
 * @method ElecsubQuery groupByComment() Group by the Comment column
 * @method ElecsubQuery groupByTs() Group by the TS column
 *
 * @method ElecsubQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ElecsubQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ElecsubQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Elecsub findOne(PropelPDO $con = null) Return the first Elecsub matching the query
 * @method Elecsub findOneOrCreate(PropelPDO $con = null) Return the first Elecsub matching the query, or a new Elecsub object populated from the query conditions when no match is found
 *
 * @method Elecsub findOneByElecode(int $EleCode) Return the first Elecsub filtered by the EleCode column
 * @method Elecsub findOneByAllele(string $Allele) Return the first Elecsub filtered by the Allele column
 * @method Elecsub findOneByAllelefrequency(double $AlleleFrequency) Return the first Elecsub filtered by the AlleleFrequency column
 * @method Elecsub findOneByComment(string $Comment) Return the first Elecsub filtered by the Comment column
 * @method Elecsub findOneByTs(string $TS) Return the first Elecsub filtered by the TS column
 *
 * @method array findByElecode(int $EleCode) Return Elecsub objects filtered by the EleCode column
 * @method array findByAllele(string $Allele) Return Elecsub objects filtered by the Allele column
 * @method array findByAllelefrequency(double $AlleleFrequency) Return Elecsub objects filtered by the AlleleFrequency column
 * @method array findByComment(string $Comment) Return Elecsub objects filtered by the Comment column
 * @method array findByTs(string $TS) Return Elecsub objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseElecsubQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseElecsubQuery object.
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
            $modelName = 'Elecsub';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ElecsubQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ElecsubQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ElecsubQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ElecsubQuery) {
            return $criteria;
        }
        $query = new ElecsubQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$EleCode, $Allele]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Elecsub|Elecsub[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ElecsubPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ElecsubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Elecsub A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `EleCode`, `Allele`, `AlleleFrequency`, `Comment`, `TS` FROM `elecsub` WHERE `EleCode` = :p0 AND `Allele` = :p1';
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
            $obj = new Elecsub();
            $obj->hydrate($row);
            ElecsubPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Elecsub|Elecsub[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Elecsub[]|mixed the list of results, formatted by the current formatter
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
     * @return ElecsubQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ElecsubPeer::ELECODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ElecsubPeer::ALLELE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ElecsubQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ElecsubPeer::ELECODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ElecsubPeer::ALLELE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the EleCode column
     *
     * Example usage:
     * <code>
     * $query->filterByElecode(1234); // WHERE EleCode = 1234
     * $query->filterByElecode(array(12, 34)); // WHERE EleCode IN (12, 34)
     * $query->filterByElecode(array('min' => 12)); // WHERE EleCode >= 12
     * $query->filterByElecode(array('max' => 12)); // WHERE EleCode <= 12
     * </code>
     *
     * @param     mixed $elecode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ElecsubQuery The current query, for fluid interface
     */
    public function filterByElecode($elecode = null, $comparison = null)
    {
        if (is_array($elecode)) {
            $useMinMax = false;
            if (isset($elecode['min'])) {
                $this->addUsingAlias(ElecsubPeer::ELECODE, $elecode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($elecode['max'])) {
                $this->addUsingAlias(ElecsubPeer::ELECODE, $elecode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecsubPeer::ELECODE, $elecode, $comparison);
    }

    /**
     * Filter the query on the Allele column
     *
     * Example usage:
     * <code>
     * $query->filterByAllele('fooValue');   // WHERE Allele = 'fooValue'
     * $query->filterByAllele('%fooValue%'); // WHERE Allele LIKE '%fooValue%'
     * </code>
     *
     * @param     string $allele The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ElecsubQuery The current query, for fluid interface
     */
    public function filterByAllele($allele = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($allele)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $allele)) {
                $allele = str_replace('*', '%', $allele);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ElecsubPeer::ALLELE, $allele, $comparison);
    }

    /**
     * Filter the query on the AlleleFrequency column
     *
     * Example usage:
     * <code>
     * $query->filterByAllelefrequency(1234); // WHERE AlleleFrequency = 1234
     * $query->filterByAllelefrequency(array(12, 34)); // WHERE AlleleFrequency IN (12, 34)
     * $query->filterByAllelefrequency(array('min' => 12)); // WHERE AlleleFrequency >= 12
     * $query->filterByAllelefrequency(array('max' => 12)); // WHERE AlleleFrequency <= 12
     * </code>
     *
     * @param     mixed $allelefrequency The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ElecsubQuery The current query, for fluid interface
     */
    public function filterByAllelefrequency($allelefrequency = null, $comparison = null)
    {
        if (is_array($allelefrequency)) {
            $useMinMax = false;
            if (isset($allelefrequency['min'])) {
                $this->addUsingAlias(ElecsubPeer::ALLELEFREQUENCY, $allelefrequency['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($allelefrequency['max'])) {
                $this->addUsingAlias(ElecsubPeer::ALLELEFREQUENCY, $allelefrequency['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecsubPeer::ALLELEFREQUENCY, $allelefrequency, $comparison);
    }

    /**
     * Filter the query on the Comment column
     *
     * Example usage:
     * <code>
     * $query->filterByComment('fooValue');   // WHERE Comment = 'fooValue'
     * $query->filterByComment('%fooValue%'); // WHERE Comment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ElecsubQuery The current query, for fluid interface
     */
    public function filterByComment($comment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comment)) {
                $comment = str_replace('*', '%', $comment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ElecsubPeer::COMMENT, $comment, $comparison);
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
     * @return ElecsubQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(ElecsubPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(ElecsubPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecsubPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Elecsub $elecsub Object to remove from the list of results
     *
     * @return ElecsubQuery The current query, for fluid interface
     */
    public function prune($elecsub = null)
    {
        if ($elecsub) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ElecsubPeer::ELECODE), $elecsub->getElecode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ElecsubPeer::ALLELE), $elecsub->getAllele(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
