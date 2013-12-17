<?php


/**
 * Base class that represents a query for the 'fbrelinks' table.
 *
 *
 *
 * @method FbrelinksQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method FbrelinksQuery orderByInstitution($order = Criteria::ASC) Order by the Institution column
 * @method FbrelinksQuery orderByUrl($order = Criteria::ASC) Order by the URL column
 * @method FbrelinksQuery orderByDescription($order = Criteria::ASC) Order by the Description column
 *
 * @method FbrelinksQuery groupById() Group by the ID column
 * @method FbrelinksQuery groupByInstitution() Group by the Institution column
 * @method FbrelinksQuery groupByUrl() Group by the URL column
 * @method FbrelinksQuery groupByDescription() Group by the Description column
 *
 * @method FbrelinksQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FbrelinksQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FbrelinksQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Fbrelinks findOne(PropelPDO $con = null) Return the first Fbrelinks matching the query
 * @method Fbrelinks findOneOrCreate(PropelPDO $con = null) Return the first Fbrelinks matching the query, or a new Fbrelinks object populated from the query conditions when no match is found
 *
 * @method Fbrelinks findOneByInstitution(string $Institution) Return the first Fbrelinks filtered by the Institution column
 * @method Fbrelinks findOneByUrl(string $URL) Return the first Fbrelinks filtered by the URL column
 * @method Fbrelinks findOneByDescription(string $Description) Return the first Fbrelinks filtered by the Description column
 *
 * @method array findById(int $ID) Return Fbrelinks objects filtered by the ID column
 * @method array findByInstitution(string $Institution) Return Fbrelinks objects filtered by the Institution column
 * @method array findByUrl(string $URL) Return Fbrelinks objects filtered by the URL column
 * @method array findByDescription(string $Description) Return Fbrelinks objects filtered by the Description column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFbrelinksQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFbrelinksQuery object.
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
            $modelName = 'Fbrelinks';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FbrelinksQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FbrelinksQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FbrelinksQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FbrelinksQuery) {
            return $criteria;
        }
        $query = new FbrelinksQuery(null, null, $modelAlias);

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
     * @return   Fbrelinks|Fbrelinks[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FbrelinksPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FbrelinksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Fbrelinks A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
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
     * @return                 Fbrelinks A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `Institution`, `URL`, `Description` FROM `fbrelinks` WHERE `ID` = :p0';
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
            $obj = new Fbrelinks();
            $obj->hydrate($row);
            FbrelinksPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Fbrelinks|Fbrelinks[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Fbrelinks[]|mixed the list of results, formatted by the current formatter
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
     * @return FbrelinksQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FbrelinksPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FbrelinksQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FbrelinksPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID >= 12
     * $query->filterById(array('max' => 12)); // WHERE ID <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbrelinksQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(FbrelinksPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(FbrelinksPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbrelinksPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the Institution column
     *
     * Example usage:
     * <code>
     * $query->filterByInstitution('fooValue');   // WHERE Institution = 'fooValue'
     * $query->filterByInstitution('%fooValue%'); // WHERE Institution LIKE '%fooValue%'
     * </code>
     *
     * @param     string $institution The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbrelinksQuery The current query, for fluid interface
     */
    public function filterByInstitution($institution = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($institution)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $institution)) {
                $institution = str_replace('*', '%', $institution);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbrelinksPeer::INSTITUTION, $institution, $comparison);
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
     * @return FbrelinksQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FbrelinksPeer::URL, $url, $comparison);
    }

    /**
     * Filter the query on the Description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE Description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE Description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbrelinksQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbrelinksPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Fbrelinks $fbrelinks Object to remove from the list of results
     *
     * @return FbrelinksQuery The current query, for fluid interface
     */
    public function prune($fbrelinks = null)
    {
        if ($fbrelinks) {
            $this->addUsingAlias(FbrelinksPeer::ID, $fbrelinks->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
