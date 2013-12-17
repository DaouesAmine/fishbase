<?php


/**
 * Base class that represents a query for the 'enzymes' table.
 *
 *
 *
 * @method EnzymesQuery orderByEnzyme($order = Criteria::ASC) Order by the enzyme column
 * @method EnzymesQuery orderByPkid($order = Criteria::ASC) Order by the PKID column
 *
 * @method EnzymesQuery groupByEnzyme() Group by the enzyme column
 * @method EnzymesQuery groupByPkid() Group by the PKID column
 *
 * @method EnzymesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EnzymesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EnzymesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Enzymes findOne(PropelPDO $con = null) Return the first Enzymes matching the query
 * @method Enzymes findOneOrCreate(PropelPDO $con = null) Return the first Enzymes matching the query, or a new Enzymes object populated from the query conditions when no match is found
 *
 * @method Enzymes findOneByEnzyme(string $enzyme) Return the first Enzymes filtered by the enzyme column
 *
 * @method array findByEnzyme(string $enzyme) Return Enzymes objects filtered by the enzyme column
 * @method array findByPkid(string $PKID) Return Enzymes objects filtered by the PKID column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseEnzymesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEnzymesQuery object.
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
            $modelName = 'Enzymes';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EnzymesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EnzymesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EnzymesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EnzymesQuery) {
            return $criteria;
        }
        $query = new EnzymesQuery(null, null, $modelAlias);

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
     * @return   Enzymes|Enzymes[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EnzymesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EnzymesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Enzymes A model object, or null if the key is not found
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
     * @return                 Enzymes A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `enzyme`, `PKID` FROM `enzymes` WHERE `PKID` = :p0';
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
            $obj = new Enzymes();
            $obj->hydrate($row);
            EnzymesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Enzymes|Enzymes[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Enzymes[]|mixed the list of results, formatted by the current formatter
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
     * @return EnzymesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EnzymesPeer::PKID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EnzymesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EnzymesPeer::PKID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the enzyme column
     *
     * Example usage:
     * <code>
     * $query->filterByEnzyme('fooValue');   // WHERE enzyme = 'fooValue'
     * $query->filterByEnzyme('%fooValue%'); // WHERE enzyme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $enzyme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EnzymesQuery The current query, for fluid interface
     */
    public function filterByEnzyme($enzyme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($enzyme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $enzyme)) {
                $enzyme = str_replace('*', '%', $enzyme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EnzymesPeer::ENZYME, $enzyme, $comparison);
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
     * @return EnzymesQuery The current query, for fluid interface
     */
    public function filterByPkid($pkid = null, $comparison = null)
    {
        if (is_array($pkid)) {
            $useMinMax = false;
            if (isset($pkid['min'])) {
                $this->addUsingAlias(EnzymesPeer::PKID, $pkid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pkid['max'])) {
                $this->addUsingAlias(EnzymesPeer::PKID, $pkid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EnzymesPeer::PKID, $pkid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Enzymes $enzymes Object to remove from the list of results
     *
     * @return EnzymesQuery The current query, for fluid interface
     */
    public function prune($enzymes = null)
    {
        if ($enzymes) {
            $this->addUsingAlias(EnzymesPeer::PKID, $enzymes->getPkid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
