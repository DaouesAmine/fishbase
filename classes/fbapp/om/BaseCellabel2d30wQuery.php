<?php


/**
 * Base class that represents a query for the 'cellabel2d30w' table.
 *
 *
 *
 * @method Cellabel2d30wQuery orderByCellname($order = Criteria::ASC) Order by the CellName column
 * @method Cellabel2d30wQuery orderByCelllat($order = Criteria::ASC) Order by the CellLat column
 * @method Cellabel2d30wQuery orderByCelllon($order = Criteria::ASC) Order by the CellLon column
 * @method Cellabel2d30wQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method Cellabel2d30wQuery groupByCellname() Group by the CellName column
 * @method Cellabel2d30wQuery groupByCelllat() Group by the CellLat column
 * @method Cellabel2d30wQuery groupByCelllon() Group by the CellLon column
 * @method Cellabel2d30wQuery groupByTs() Group by the TS column
 *
 * @method Cellabel2d30wQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method Cellabel2d30wQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method Cellabel2d30wQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Cellabel2d30w findOne(PropelPDO $con = null) Return the first Cellabel2d30w matching the query
 * @method Cellabel2d30w findOneOrCreate(PropelPDO $con = null) Return the first Cellabel2d30w matching the query, or a new Cellabel2d30w object populated from the query conditions when no match is found
 *
 * @method Cellabel2d30w findOneByCelllat(int $CellLat) Return the first Cellabel2d30w filtered by the CellLat column
 * @method Cellabel2d30w findOneByCelllon(double $CellLon) Return the first Cellabel2d30w filtered by the CellLon column
 * @method Cellabel2d30w findOneByTs(string $TS) Return the first Cellabel2d30w filtered by the TS column
 *
 * @method array findByCellname(string $CellName) Return Cellabel2d30w objects filtered by the CellName column
 * @method array findByCelllat(int $CellLat) Return Cellabel2d30w objects filtered by the CellLat column
 * @method array findByCelllon(double $CellLon) Return Cellabel2d30w objects filtered by the CellLon column
 * @method array findByTs(string $TS) Return Cellabel2d30w objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCellabel2d30wQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCellabel2d30wQuery object.
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
            $modelName = 'Cellabel2d30w';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new Cellabel2d30wQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   Cellabel2d30wQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return Cellabel2d30wQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof Cellabel2d30wQuery) {
            return $criteria;
        }
        $query = new Cellabel2d30wQuery(null, null, $modelAlias);

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
     * @return   Cellabel2d30w|Cellabel2d30w[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = Cellabel2d30wPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(Cellabel2d30wPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cellabel2d30w A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByCellname($key, $con = null)
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
     * @return                 Cellabel2d30w A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `CellName`, `CellLat`, `CellLon`, `TS` FROM `cellabel2d30w` WHERE `CellName` = :p0';
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
            $obj = new Cellabel2d30w();
            $obj->hydrate($row);
            Cellabel2d30wPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Cellabel2d30w|Cellabel2d30w[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cellabel2d30w[]|mixed the list of results, formatted by the current formatter
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
     * @return Cellabel2d30wQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(Cellabel2d30wPeer::CELLNAME, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return Cellabel2d30wQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(Cellabel2d30wPeer::CELLNAME, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the CellName column
     *
     * Example usage:
     * <code>
     * $query->filterByCellname('fooValue');   // WHERE CellName = 'fooValue'
     * $query->filterByCellname('%fooValue%'); // WHERE CellName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cellname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cellabel2d30wQuery The current query, for fluid interface
     */
    public function filterByCellname($cellname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cellname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cellname)) {
                $cellname = str_replace('*', '%', $cellname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Cellabel2d30wPeer::CELLNAME, $cellname, $comparison);
    }

    /**
     * Filter the query on the CellLat column
     *
     * Example usage:
     * <code>
     * $query->filterByCelllat(1234); // WHERE CellLat = 1234
     * $query->filterByCelllat(array(12, 34)); // WHERE CellLat IN (12, 34)
     * $query->filterByCelllat(array('min' => 12)); // WHERE CellLat >= 12
     * $query->filterByCelllat(array('max' => 12)); // WHERE CellLat <= 12
     * </code>
     *
     * @param     mixed $celllat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cellabel2d30wQuery The current query, for fluid interface
     */
    public function filterByCelllat($celllat = null, $comparison = null)
    {
        if (is_array($celllat)) {
            $useMinMax = false;
            if (isset($celllat['min'])) {
                $this->addUsingAlias(Cellabel2d30wPeer::CELLLAT, $celllat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($celllat['max'])) {
                $this->addUsingAlias(Cellabel2d30wPeer::CELLLAT, $celllat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cellabel2d30wPeer::CELLLAT, $celllat, $comparison);
    }

    /**
     * Filter the query on the CellLon column
     *
     * Example usage:
     * <code>
     * $query->filterByCelllon(1234); // WHERE CellLon = 1234
     * $query->filterByCelllon(array(12, 34)); // WHERE CellLon IN (12, 34)
     * $query->filterByCelllon(array('min' => 12)); // WHERE CellLon >= 12
     * $query->filterByCelllon(array('max' => 12)); // WHERE CellLon <= 12
     * </code>
     *
     * @param     mixed $celllon The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cellabel2d30wQuery The current query, for fluid interface
     */
    public function filterByCelllon($celllon = null, $comparison = null)
    {
        if (is_array($celllon)) {
            $useMinMax = false;
            if (isset($celllon['min'])) {
                $this->addUsingAlias(Cellabel2d30wPeer::CELLLON, $celllon['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($celllon['max'])) {
                $this->addUsingAlias(Cellabel2d30wPeer::CELLLON, $celllon['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cellabel2d30wPeer::CELLLON, $celllon, $comparison);
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
     * @return Cellabel2d30wQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(Cellabel2d30wPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(Cellabel2d30wPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cellabel2d30wPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Cellabel2d30w $cellabel2d30w Object to remove from the list of results
     *
     * @return Cellabel2d30wQuery The current query, for fluid interface
     */
    public function prune($cellabel2d30w = null)
    {
        if ($cellabel2d30w) {
            $this->addUsingAlias(Cellabel2d30wPeer::CELLNAME, $cellabel2d30w->getCellname(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
