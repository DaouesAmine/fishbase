<?php


/**
 * Base class that represents a query for the 'coffversions' table.
 *
 *
 *
 * @method CoffversionsQuery orderByVersiondate($order = Criteria::ASC) Order by the VersionDate column
 * @method CoffversionsQuery orderByRefno($order = Criteria::ASC) Order by the RefNo column
 *
 * @method CoffversionsQuery groupByVersiondate() Group by the VersionDate column
 * @method CoffversionsQuery groupByRefno() Group by the RefNo column
 *
 * @method CoffversionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CoffversionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CoffversionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Coffversions findOne(PropelPDO $con = null) Return the first Coffversions matching the query
 * @method Coffversions findOneOrCreate(PropelPDO $con = null) Return the first Coffversions matching the query, or a new Coffversions object populated from the query conditions when no match is found
 *
 * @method Coffversions findOneByVersiondate(string $VersionDate) Return the first Coffversions filtered by the VersionDate column
 *
 * @method array findByVersiondate(string $VersionDate) Return Coffversions objects filtered by the VersionDate column
 * @method array findByRefno(int $RefNo) Return Coffversions objects filtered by the RefNo column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCoffversionsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCoffversionsQuery object.
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
            $modelName = 'Coffversions';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CoffversionsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CoffversionsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CoffversionsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CoffversionsQuery) {
            return $criteria;
        }
        $query = new CoffversionsQuery(null, null, $modelAlias);

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
     * @return   Coffversions|Coffversions[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CoffversionsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CoffversionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Coffversions A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRefno($key, $con = null)
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
     * @return                 Coffversions A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `VersionDate`, `RefNo` FROM `coffversions` WHERE `RefNo` = :p0';
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
            $obj = new Coffversions();
            $obj->hydrate($row);
            CoffversionsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Coffversions|Coffversions[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Coffversions[]|mixed the list of results, formatted by the current formatter
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
     * @return CoffversionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CoffversionsPeer::REFNO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CoffversionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CoffversionsPeer::REFNO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the VersionDate column
     *
     * Example usage:
     * <code>
     * $query->filterByVersiondate('2011-03-14'); // WHERE VersionDate = '2011-03-14'
     * $query->filterByVersiondate('now'); // WHERE VersionDate = '2011-03-14'
     * $query->filterByVersiondate(array('max' => 'yesterday')); // WHERE VersionDate < '2011-03-13'
     * </code>
     *
     * @param     mixed $versiondate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CoffversionsQuery The current query, for fluid interface
     */
    public function filterByVersiondate($versiondate = null, $comparison = null)
    {
        if (is_array($versiondate)) {
            $useMinMax = false;
            if (isset($versiondate['min'])) {
                $this->addUsingAlias(CoffversionsPeer::VERSIONDATE, $versiondate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($versiondate['max'])) {
                $this->addUsingAlias(CoffversionsPeer::VERSIONDATE, $versiondate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CoffversionsPeer::VERSIONDATE, $versiondate, $comparison);
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
     * @return CoffversionsQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(CoffversionsPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(CoffversionsPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CoffversionsPeer::REFNO, $refno, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Coffversions $coffversions Object to remove from the list of results
     *
     * @return CoffversionsQuery The current query, for fluid interface
     */
    public function prune($coffversions = null)
    {
        if ($coffversions) {
            $this->addUsingAlias(CoffversionsPeer::REFNO, $coffversions->getRefno(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
