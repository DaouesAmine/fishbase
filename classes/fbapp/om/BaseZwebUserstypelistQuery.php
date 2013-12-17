<?php


/**
 * Base class that represents a query for the 'zweb_userstypelist' table.
 *
 *
 *
 * @method ZwebUserstypelistQuery orderByUsertypeorder($order = Criteria::ASC) Order by the UserTypeOrder column
 * @method ZwebUserstypelistQuery orderByUsertype($order = Criteria::ASC) Order by the UserType column
 * @method ZwebUserstypelistQuery orderByTs($order = Criteria::ASC) Order by the TS column
 * @method ZwebUserstypelistQuery orderByPkid($order = Criteria::ASC) Order by the PKID column
 *
 * @method ZwebUserstypelistQuery groupByUsertypeorder() Group by the UserTypeOrder column
 * @method ZwebUserstypelistQuery groupByUsertype() Group by the UserType column
 * @method ZwebUserstypelistQuery groupByTs() Group by the TS column
 * @method ZwebUserstypelistQuery groupByPkid() Group by the PKID column
 *
 * @method ZwebUserstypelistQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ZwebUserstypelistQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ZwebUserstypelistQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ZwebUserstypelist findOne(PropelPDO $con = null) Return the first ZwebUserstypelist matching the query
 * @method ZwebUserstypelist findOneOrCreate(PropelPDO $con = null) Return the first ZwebUserstypelist matching the query, or a new ZwebUserstypelist object populated from the query conditions when no match is found
 *
 * @method ZwebUserstypelist findOneByUsertypeorder(double $UserTypeOrder) Return the first ZwebUserstypelist filtered by the UserTypeOrder column
 * @method ZwebUserstypelist findOneByUsertype(string $UserType) Return the first ZwebUserstypelist filtered by the UserType column
 * @method ZwebUserstypelist findOneByTs(string $TS) Return the first ZwebUserstypelist filtered by the TS column
 *
 * @method array findByUsertypeorder(double $UserTypeOrder) Return ZwebUserstypelist objects filtered by the UserTypeOrder column
 * @method array findByUsertype(string $UserType) Return ZwebUserstypelist objects filtered by the UserType column
 * @method array findByTs(string $TS) Return ZwebUserstypelist objects filtered by the TS column
 * @method array findByPkid(string $PKID) Return ZwebUserstypelist objects filtered by the PKID column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseZwebUserstypelistQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseZwebUserstypelistQuery object.
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
            $modelName = 'ZwebUserstypelist';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ZwebUserstypelistQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ZwebUserstypelistQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ZwebUserstypelistQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ZwebUserstypelistQuery) {
            return $criteria;
        }
        $query = new ZwebUserstypelistQuery(null, null, $modelAlias);

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
     * @return   ZwebUserstypelist|ZwebUserstypelist[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ZwebUserstypelistPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ZwebUserstypelistPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ZwebUserstypelist A model object, or null if the key is not found
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
     * @return                 ZwebUserstypelist A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `UserTypeOrder`, `UserType`, `TS`, `PKID` FROM `zweb_userstypelist` WHERE `PKID` = :p0';
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
            $obj = new ZwebUserstypelist();
            $obj->hydrate($row);
            ZwebUserstypelistPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ZwebUserstypelist|ZwebUserstypelist[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ZwebUserstypelist[]|mixed the list of results, formatted by the current formatter
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
     * @return ZwebUserstypelistQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ZwebUserstypelistPeer::PKID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ZwebUserstypelistQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ZwebUserstypelistPeer::PKID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the UserTypeOrder column
     *
     * Example usage:
     * <code>
     * $query->filterByUsertypeorder(1234); // WHERE UserTypeOrder = 1234
     * $query->filterByUsertypeorder(array(12, 34)); // WHERE UserTypeOrder IN (12, 34)
     * $query->filterByUsertypeorder(array('min' => 12)); // WHERE UserTypeOrder >= 12
     * $query->filterByUsertypeorder(array('max' => 12)); // WHERE UserTypeOrder <= 12
     * </code>
     *
     * @param     mixed $usertypeorder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebUserstypelistQuery The current query, for fluid interface
     */
    public function filterByUsertypeorder($usertypeorder = null, $comparison = null)
    {
        if (is_array($usertypeorder)) {
            $useMinMax = false;
            if (isset($usertypeorder['min'])) {
                $this->addUsingAlias(ZwebUserstypelistPeer::USERTYPEORDER, $usertypeorder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usertypeorder['max'])) {
                $this->addUsingAlias(ZwebUserstypelistPeer::USERTYPEORDER, $usertypeorder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebUserstypelistPeer::USERTYPEORDER, $usertypeorder, $comparison);
    }

    /**
     * Filter the query on the UserType column
     *
     * Example usage:
     * <code>
     * $query->filterByUsertype('fooValue');   // WHERE UserType = 'fooValue'
     * $query->filterByUsertype('%fooValue%'); // WHERE UserType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usertype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebUserstypelistQuery The current query, for fluid interface
     */
    public function filterByUsertype($usertype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usertype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usertype)) {
                $usertype = str_replace('*', '%', $usertype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ZwebUserstypelistPeer::USERTYPE, $usertype, $comparison);
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
     * @return ZwebUserstypelistQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(ZwebUserstypelistPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(ZwebUserstypelistPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebUserstypelistPeer::TS, $ts, $comparison);
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
     * @return ZwebUserstypelistQuery The current query, for fluid interface
     */
    public function filterByPkid($pkid = null, $comparison = null)
    {
        if (is_array($pkid)) {
            $useMinMax = false;
            if (isset($pkid['min'])) {
                $this->addUsingAlias(ZwebUserstypelistPeer::PKID, $pkid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pkid['max'])) {
                $this->addUsingAlias(ZwebUserstypelistPeer::PKID, $pkid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebUserstypelistPeer::PKID, $pkid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ZwebUserstypelist $zwebUserstypelist Object to remove from the list of results
     *
     * @return ZwebUserstypelistQuery The current query, for fluid interface
     */
    public function prune($zwebUserstypelist = null)
    {
        if ($zwebUserstypelist) {
            $this->addUsingAlias(ZwebUserstypelistPeer::PKID, $zwebUserstypelist->getPkid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
