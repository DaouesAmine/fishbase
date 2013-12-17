<?php


/**
 * Base class that represents a query for the 'tabnotes' table.
 *
 *
 *
 * @method TabnotesQuery orderByTabname($order = Criteria::ASC) Order by the TabName column
 * @method TabnotesQuery orderByTabdesc($order = Criteria::ASC) Order by the TabDesc column
 * @method TabnotesQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method TabnotesQuery groupByTabname() Group by the TabName column
 * @method TabnotesQuery groupByTabdesc() Group by the TabDesc column
 * @method TabnotesQuery groupByTs() Group by the TS column
 *
 * @method TabnotesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TabnotesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TabnotesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Tabnotes findOne(PropelPDO $con = null) Return the first Tabnotes matching the query
 * @method Tabnotes findOneOrCreate(PropelPDO $con = null) Return the first Tabnotes matching the query, or a new Tabnotes object populated from the query conditions when no match is found
 *
 * @method Tabnotes findOneByTabdesc(string $TabDesc) Return the first Tabnotes filtered by the TabDesc column
 * @method Tabnotes findOneByTs(string $TS) Return the first Tabnotes filtered by the TS column
 *
 * @method array findByTabname(string $TabName) Return Tabnotes objects filtered by the TabName column
 * @method array findByTabdesc(string $TabDesc) Return Tabnotes objects filtered by the TabDesc column
 * @method array findByTs(string $TS) Return Tabnotes objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseTabnotesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTabnotesQuery object.
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
            $modelName = 'Tabnotes';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TabnotesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TabnotesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TabnotesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TabnotesQuery) {
            return $criteria;
        }
        $query = new TabnotesQuery(null, null, $modelAlias);

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
     * @return   Tabnotes|Tabnotes[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TabnotesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TabnotesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Tabnotes A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByTabname($key, $con = null)
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
     * @return                 Tabnotes A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `TabName`, `TabDesc`, `TS` FROM `tabnotes` WHERE `TabName` = :p0';
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
            $obj = new Tabnotes();
            $obj->hydrate($row);
            TabnotesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Tabnotes|Tabnotes[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Tabnotes[]|mixed the list of results, formatted by the current formatter
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
     * @return TabnotesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TabnotesPeer::TABNAME, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TabnotesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TabnotesPeer::TABNAME, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the TabName column
     *
     * Example usage:
     * <code>
     * $query->filterByTabname('fooValue');   // WHERE TabName = 'fooValue'
     * $query->filterByTabname('%fooValue%'); // WHERE TabName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tabname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabnotesQuery The current query, for fluid interface
     */
    public function filterByTabname($tabname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tabname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tabname)) {
                $tabname = str_replace('*', '%', $tabname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TabnotesPeer::TABNAME, $tabname, $comparison);
    }

    /**
     * Filter the query on the TabDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByTabdesc('fooValue');   // WHERE TabDesc = 'fooValue'
     * $query->filterByTabdesc('%fooValue%'); // WHERE TabDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tabdesc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabnotesQuery The current query, for fluid interface
     */
    public function filterByTabdesc($tabdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tabdesc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tabdesc)) {
                $tabdesc = str_replace('*', '%', $tabdesc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TabnotesPeer::TABDESC, $tabdesc, $comparison);
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
     * @return TabnotesQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(TabnotesPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(TabnotesPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TabnotesPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Tabnotes $tabnotes Object to remove from the list of results
     *
     * @return TabnotesQuery The current query, for fluid interface
     */
    public function prune($tabnotes = null)
    {
        if ($tabnotes) {
            $this->addUsingAlias(TabnotesPeer::TABNAME, $tabnotes->getTabname(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
