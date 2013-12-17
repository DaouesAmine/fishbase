<?php


/**
 * Base class that represents a query for the 'cas_biblio' table.
 *
 *
 *
 * @method CasBiblioQuery orderByCasRefNo($order = Criteria::ASC) Order by the CAS_REF_NO column
 * @method CasBiblioQuery orderByFamcode($order = Criteria::ASC) Order by the Famcode column
 * @method CasBiblioQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method CasBiblioQuery groupByCasRefNo() Group by the CAS_REF_NO column
 * @method CasBiblioQuery groupByFamcode() Group by the Famcode column
 * @method CasBiblioQuery groupByTs() Group by the TS column
 *
 * @method CasBiblioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CasBiblioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CasBiblioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CasBiblio findOne(PropelPDO $con = null) Return the first CasBiblio matching the query
 * @method CasBiblio findOneOrCreate(PropelPDO $con = null) Return the first CasBiblio matching the query, or a new CasBiblio object populated from the query conditions when no match is found
 *
 * @method CasBiblio findOneByCasRefNo(int $CAS_REF_NO) Return the first CasBiblio filtered by the CAS_REF_NO column
 * @method CasBiblio findOneByFamcode(int $Famcode) Return the first CasBiblio filtered by the Famcode column
 * @method CasBiblio findOneByTs(string $TS) Return the first CasBiblio filtered by the TS column
 *
 * @method array findByCasRefNo(int $CAS_REF_NO) Return CasBiblio objects filtered by the CAS_REF_NO column
 * @method array findByFamcode(int $Famcode) Return CasBiblio objects filtered by the Famcode column
 * @method array findByTs(string $TS) Return CasBiblio objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCasBiblioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCasBiblioQuery object.
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
            $modelName = 'CasBiblio';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CasBiblioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CasBiblioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CasBiblioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CasBiblioQuery) {
            return $criteria;
        }
        $query = new CasBiblioQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$CAS_REF_NO, $Famcode]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CasBiblio|CasBiblio[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CasBiblioPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CasBiblioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CasBiblio A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `CAS_REF_NO`, `Famcode`, `TS` FROM `cas_biblio` WHERE `CAS_REF_NO` = :p0 AND `Famcode` = :p1';
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
            $obj = new CasBiblio();
            $obj->hydrate($row);
            CasBiblioPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CasBiblio|CasBiblio[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CasBiblio[]|mixed the list of results, formatted by the current formatter
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
     * @return CasBiblioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CasBiblioPeer::CAS_REF_NO, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CasBiblioPeer::FAMCODE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CasBiblioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CasBiblioPeer::CAS_REF_NO, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CasBiblioPeer::FAMCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the CAS_REF_NO column
     *
     * Example usage:
     * <code>
     * $query->filterByCasRefNo(1234); // WHERE CAS_REF_NO = 1234
     * $query->filterByCasRefNo(array(12, 34)); // WHERE CAS_REF_NO IN (12, 34)
     * $query->filterByCasRefNo(array('min' => 12)); // WHERE CAS_REF_NO >= 12
     * $query->filterByCasRefNo(array('max' => 12)); // WHERE CAS_REF_NO <= 12
     * </code>
     *
     * @param     mixed $casRefNo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CasBiblioQuery The current query, for fluid interface
     */
    public function filterByCasRefNo($casRefNo = null, $comparison = null)
    {
        if (is_array($casRefNo)) {
            $useMinMax = false;
            if (isset($casRefNo['min'])) {
                $this->addUsingAlias(CasBiblioPeer::CAS_REF_NO, $casRefNo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($casRefNo['max'])) {
                $this->addUsingAlias(CasBiblioPeer::CAS_REF_NO, $casRefNo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CasBiblioPeer::CAS_REF_NO, $casRefNo, $comparison);
    }

    /**
     * Filter the query on the Famcode column
     *
     * Example usage:
     * <code>
     * $query->filterByFamcode(1234); // WHERE Famcode = 1234
     * $query->filterByFamcode(array(12, 34)); // WHERE Famcode IN (12, 34)
     * $query->filterByFamcode(array('min' => 12)); // WHERE Famcode >= 12
     * $query->filterByFamcode(array('max' => 12)); // WHERE Famcode <= 12
     * </code>
     *
     * @param     mixed $famcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CasBiblioQuery The current query, for fluid interface
     */
    public function filterByFamcode($famcode = null, $comparison = null)
    {
        if (is_array($famcode)) {
            $useMinMax = false;
            if (isset($famcode['min'])) {
                $this->addUsingAlias(CasBiblioPeer::FAMCODE, $famcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famcode['max'])) {
                $this->addUsingAlias(CasBiblioPeer::FAMCODE, $famcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CasBiblioPeer::FAMCODE, $famcode, $comparison);
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
     * @return CasBiblioQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(CasBiblioPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(CasBiblioPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CasBiblioPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CasBiblio $casBiblio Object to remove from the list of results
     *
     * @return CasBiblioQuery The current query, for fluid interface
     */
    public function prune($casBiblio = null)
    {
        if ($casBiblio) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CasBiblioPeer::CAS_REF_NO), $casBiblio->getCasRefNo(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CasBiblioPeer::FAMCODE), $casBiblio->getFamcode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
