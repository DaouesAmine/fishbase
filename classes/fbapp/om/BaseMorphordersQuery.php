<?php


/**
 * Base class that represents a query for the 'morphorders' table.
 *
 *
 *
 * @method MorphordersQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method MorphordersQuery orderByClass($order = Criteria::ASC) Order by the Class column
 * @method MorphordersQuery orderByOrder($order = Criteria::ASC) Order by the Order column
 * @method MorphordersQuery orderByMinofslp($order = Criteria::ASC) Order by the MinOfSLp column
 * @method MorphordersQuery orderByMaxofslp($order = Criteria::ASC) Order by the MaxOfSLp column
 * @method MorphordersQuery orderByMinofflp($order = Criteria::ASC) Order by the MinOfFLp column
 * @method MorphordersQuery orderByMaxofflp($order = Criteria::ASC) Order by the MaxOfFLp column
 * @method MorphordersQuery orderByMinofhlp($order = Criteria::ASC) Order by the MinOfHLp column
 * @method MorphordersQuery orderByMaxofhlp($order = Criteria::ASC) Order by the MaxOfHLp column
 * @method MorphordersQuery orderByMinofpalp($order = Criteria::ASC) Order by the MinOfPALp column
 * @method MorphordersQuery orderByMaxofpalp($order = Criteria::ASC) Order by the MaxOfPALp column
 * @method MorphordersQuery orderByMinofpplp($order = Criteria::ASC) Order by the MinOfPPLp column
 * @method MorphordersQuery orderByMaxofpplp($order = Criteria::ASC) Order by the MaxOfPPLp column
 * @method MorphordersQuery orderByMinofppelp($order = Criteria::ASC) Order by the MinOfPPELp column
 * @method MorphordersQuery orderByMaxofppelp($order = Criteria::ASC) Order by the MaxOfPPELp column
 * @method MorphordersQuery orderByMinofedp($order = Criteria::ASC) Order by the MinOfEDp column
 * @method MorphordersQuery orderByMaxofedp($order = Criteria::ASC) Order by the MaxOfEDp column
 * @method MorphordersQuery orderByMinofpolp($order = Criteria::ASC) Order by the MinOfPOLp column
 * @method MorphordersQuery orderByMaxofpolp($order = Criteria::ASC) Order by the MaxOfPOLp column
 * @method MorphordersQuery orderByMinofbdp($order = Criteria::ASC) Order by the MinOfBDp column
 * @method MorphordersQuery orderByMaxofbdp($order = Criteria::ASC) Order by the MaxOfBDp column
 * @method MorphordersQuery orderByMinofchp($order = Criteria::ASC) Order by the MinOfCHp column
 * @method MorphordersQuery orderByMaxofchp($order = Criteria::ASC) Order by the MaxOfCHp column
 * @method MorphordersQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method MorphordersQuery groupByAutoctr() Group by the AutoCtr column
 * @method MorphordersQuery groupByClass() Group by the Class column
 * @method MorphordersQuery groupByOrder() Group by the Order column
 * @method MorphordersQuery groupByMinofslp() Group by the MinOfSLp column
 * @method MorphordersQuery groupByMaxofslp() Group by the MaxOfSLp column
 * @method MorphordersQuery groupByMinofflp() Group by the MinOfFLp column
 * @method MorphordersQuery groupByMaxofflp() Group by the MaxOfFLp column
 * @method MorphordersQuery groupByMinofhlp() Group by the MinOfHLp column
 * @method MorphordersQuery groupByMaxofhlp() Group by the MaxOfHLp column
 * @method MorphordersQuery groupByMinofpalp() Group by the MinOfPALp column
 * @method MorphordersQuery groupByMaxofpalp() Group by the MaxOfPALp column
 * @method MorphordersQuery groupByMinofpplp() Group by the MinOfPPLp column
 * @method MorphordersQuery groupByMaxofpplp() Group by the MaxOfPPLp column
 * @method MorphordersQuery groupByMinofppelp() Group by the MinOfPPELp column
 * @method MorphordersQuery groupByMaxofppelp() Group by the MaxOfPPELp column
 * @method MorphordersQuery groupByMinofedp() Group by the MinOfEDp column
 * @method MorphordersQuery groupByMaxofedp() Group by the MaxOfEDp column
 * @method MorphordersQuery groupByMinofpolp() Group by the MinOfPOLp column
 * @method MorphordersQuery groupByMaxofpolp() Group by the MaxOfPOLp column
 * @method MorphordersQuery groupByMinofbdp() Group by the MinOfBDp column
 * @method MorphordersQuery groupByMaxofbdp() Group by the MaxOfBDp column
 * @method MorphordersQuery groupByMinofchp() Group by the MinOfCHp column
 * @method MorphordersQuery groupByMaxofchp() Group by the MaxOfCHp column
 * @method MorphordersQuery groupByTs() Group by the TS column
 *
 * @method MorphordersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MorphordersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MorphordersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Morphorders findOne(PropelPDO $con = null) Return the first Morphorders matching the query
 * @method Morphorders findOneOrCreate(PropelPDO $con = null) Return the first Morphorders matching the query, or a new Morphorders object populated from the query conditions when no match is found
 *
 * @method Morphorders findOneByClass(string $Class) Return the first Morphorders filtered by the Class column
 * @method Morphorders findOneByOrder(string $Order) Return the first Morphorders filtered by the Order column
 * @method Morphorders findOneByMinofslp(int $MinOfSLp) Return the first Morphorders filtered by the MinOfSLp column
 * @method Morphorders findOneByMaxofslp(int $MaxOfSLp) Return the first Morphorders filtered by the MaxOfSLp column
 * @method Morphorders findOneByMinofflp(int $MinOfFLp) Return the first Morphorders filtered by the MinOfFLp column
 * @method Morphorders findOneByMaxofflp(int $MaxOfFLp) Return the first Morphorders filtered by the MaxOfFLp column
 * @method Morphorders findOneByMinofhlp(int $MinOfHLp) Return the first Morphorders filtered by the MinOfHLp column
 * @method Morphorders findOneByMaxofhlp(int $MaxOfHLp) Return the first Morphorders filtered by the MaxOfHLp column
 * @method Morphorders findOneByMinofpalp(int $MinOfPALp) Return the first Morphorders filtered by the MinOfPALp column
 * @method Morphorders findOneByMaxofpalp(int $MaxOfPALp) Return the first Morphorders filtered by the MaxOfPALp column
 * @method Morphorders findOneByMinofpplp(int $MinOfPPLp) Return the first Morphorders filtered by the MinOfPPLp column
 * @method Morphorders findOneByMaxofpplp(int $MaxOfPPLp) Return the first Morphorders filtered by the MaxOfPPLp column
 * @method Morphorders findOneByMinofppelp(int $MinOfPPELp) Return the first Morphorders filtered by the MinOfPPELp column
 * @method Morphorders findOneByMaxofppelp(int $MaxOfPPELp) Return the first Morphorders filtered by the MaxOfPPELp column
 * @method Morphorders findOneByMinofedp(double $MinOfEDp) Return the first Morphorders filtered by the MinOfEDp column
 * @method Morphorders findOneByMaxofedp(double $MaxOfEDp) Return the first Morphorders filtered by the MaxOfEDp column
 * @method Morphorders findOneByMinofpolp(double $MinOfPOLp) Return the first Morphorders filtered by the MinOfPOLp column
 * @method Morphorders findOneByMaxofpolp(double $MaxOfPOLp) Return the first Morphorders filtered by the MaxOfPOLp column
 * @method Morphorders findOneByMinofbdp(double $MinOfBDp) Return the first Morphorders filtered by the MinOfBDp column
 * @method Morphorders findOneByMaxofbdp(double $MaxOfBDp) Return the first Morphorders filtered by the MaxOfBDp column
 * @method Morphorders findOneByMinofchp(double $MinOfCHp) Return the first Morphorders filtered by the MinOfCHp column
 * @method Morphorders findOneByMaxofchp(double $MaxOfCHp) Return the first Morphorders filtered by the MaxOfCHp column
 * @method Morphorders findOneByTs(string $TS) Return the first Morphorders filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return Morphorders objects filtered by the AutoCtr column
 * @method array findByClass(string $Class) Return Morphorders objects filtered by the Class column
 * @method array findByOrder(string $Order) Return Morphorders objects filtered by the Order column
 * @method array findByMinofslp(int $MinOfSLp) Return Morphorders objects filtered by the MinOfSLp column
 * @method array findByMaxofslp(int $MaxOfSLp) Return Morphorders objects filtered by the MaxOfSLp column
 * @method array findByMinofflp(int $MinOfFLp) Return Morphorders objects filtered by the MinOfFLp column
 * @method array findByMaxofflp(int $MaxOfFLp) Return Morphorders objects filtered by the MaxOfFLp column
 * @method array findByMinofhlp(int $MinOfHLp) Return Morphorders objects filtered by the MinOfHLp column
 * @method array findByMaxofhlp(int $MaxOfHLp) Return Morphorders objects filtered by the MaxOfHLp column
 * @method array findByMinofpalp(int $MinOfPALp) Return Morphorders objects filtered by the MinOfPALp column
 * @method array findByMaxofpalp(int $MaxOfPALp) Return Morphorders objects filtered by the MaxOfPALp column
 * @method array findByMinofpplp(int $MinOfPPLp) Return Morphorders objects filtered by the MinOfPPLp column
 * @method array findByMaxofpplp(int $MaxOfPPLp) Return Morphorders objects filtered by the MaxOfPPLp column
 * @method array findByMinofppelp(int $MinOfPPELp) Return Morphorders objects filtered by the MinOfPPELp column
 * @method array findByMaxofppelp(int $MaxOfPPELp) Return Morphorders objects filtered by the MaxOfPPELp column
 * @method array findByMinofedp(double $MinOfEDp) Return Morphorders objects filtered by the MinOfEDp column
 * @method array findByMaxofedp(double $MaxOfEDp) Return Morphorders objects filtered by the MaxOfEDp column
 * @method array findByMinofpolp(double $MinOfPOLp) Return Morphorders objects filtered by the MinOfPOLp column
 * @method array findByMaxofpolp(double $MaxOfPOLp) Return Morphorders objects filtered by the MaxOfPOLp column
 * @method array findByMinofbdp(double $MinOfBDp) Return Morphorders objects filtered by the MinOfBDp column
 * @method array findByMaxofbdp(double $MaxOfBDp) Return Morphorders objects filtered by the MaxOfBDp column
 * @method array findByMinofchp(double $MinOfCHp) Return Morphorders objects filtered by the MinOfCHp column
 * @method array findByMaxofchp(double $MaxOfCHp) Return Morphorders objects filtered by the MaxOfCHp column
 * @method array findByTs(string $TS) Return Morphorders objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMorphordersQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMorphordersQuery object.
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
            $modelName = 'Morphorders';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MorphordersQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MorphordersQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MorphordersQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MorphordersQuery) {
            return $criteria;
        }
        $query = new MorphordersQuery(null, null, $modelAlias);

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
     * @return   Morphorders|Morphorders[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MorphordersPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MorphordersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Morphorders A model object, or null if the key is not found
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
     * @return                 Morphorders A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `Class`, `Order`, `MinOfSLp`, `MaxOfSLp`, `MinOfFLp`, `MaxOfFLp`, `MinOfHLp`, `MaxOfHLp`, `MinOfPALp`, `MaxOfPALp`, `MinOfPPLp`, `MaxOfPPLp`, `MinOfPPELp`, `MaxOfPPELp`, `MinOfEDp`, `MaxOfEDp`, `MinOfPOLp`, `MaxOfPOLp`, `MinOfBDp`, `MaxOfBDp`, `MinOfCHp`, `MaxOfCHp`, `TS` FROM `morphorders` WHERE `AutoCtr` = :p0';
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
            $obj = new Morphorders();
            $obj->hydrate($row);
            MorphordersPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Morphorders|Morphorders[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Morphorders[]|mixed the list of results, formatted by the current formatter
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
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MorphordersPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MorphordersPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(MorphordersPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(MorphordersPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the Class column
     *
     * Example usage:
     * <code>
     * $query->filterByClass('fooValue');   // WHERE Class = 'fooValue'
     * $query->filterByClass('%fooValue%'); // WHERE Class LIKE '%fooValue%'
     * </code>
     *
     * @param     string $class The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByClass($class = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($class)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $class)) {
                $class = str_replace('*', '%', $class);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::CLAZZ, $class, $comparison);
    }

    /**
     * Filter the query on the Order column
     *
     * Example usage:
     * <code>
     * $query->filterByOrder('fooValue');   // WHERE Order = 'fooValue'
     * $query->filterByOrder('%fooValue%'); // WHERE Order LIKE '%fooValue%'
     * </code>
     *
     * @param     string $order The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByOrder($order = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($order)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $order)) {
                $order = str_replace('*', '%', $order);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::ORDER, $order, $comparison);
    }

    /**
     * Filter the query on the MinOfSLp column
     *
     * Example usage:
     * <code>
     * $query->filterByMinofslp(1234); // WHERE MinOfSLp = 1234
     * $query->filterByMinofslp(array(12, 34)); // WHERE MinOfSLp IN (12, 34)
     * $query->filterByMinofslp(array('min' => 12)); // WHERE MinOfSLp >= 12
     * $query->filterByMinofslp(array('max' => 12)); // WHERE MinOfSLp <= 12
     * </code>
     *
     * @param     mixed $minofslp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByMinofslp($minofslp = null, $comparison = null)
    {
        if (is_array($minofslp)) {
            $useMinMax = false;
            if (isset($minofslp['min'])) {
                $this->addUsingAlias(MorphordersPeer::MINOFSLP, $minofslp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minofslp['max'])) {
                $this->addUsingAlias(MorphordersPeer::MINOFSLP, $minofslp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::MINOFSLP, $minofslp, $comparison);
    }

    /**
     * Filter the query on the MaxOfSLp column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxofslp(1234); // WHERE MaxOfSLp = 1234
     * $query->filterByMaxofslp(array(12, 34)); // WHERE MaxOfSLp IN (12, 34)
     * $query->filterByMaxofslp(array('min' => 12)); // WHERE MaxOfSLp >= 12
     * $query->filterByMaxofslp(array('max' => 12)); // WHERE MaxOfSLp <= 12
     * </code>
     *
     * @param     mixed $maxofslp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByMaxofslp($maxofslp = null, $comparison = null)
    {
        if (is_array($maxofslp)) {
            $useMinMax = false;
            if (isset($maxofslp['min'])) {
                $this->addUsingAlias(MorphordersPeer::MAXOFSLP, $maxofslp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxofslp['max'])) {
                $this->addUsingAlias(MorphordersPeer::MAXOFSLP, $maxofslp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::MAXOFSLP, $maxofslp, $comparison);
    }

    /**
     * Filter the query on the MinOfFLp column
     *
     * Example usage:
     * <code>
     * $query->filterByMinofflp(1234); // WHERE MinOfFLp = 1234
     * $query->filterByMinofflp(array(12, 34)); // WHERE MinOfFLp IN (12, 34)
     * $query->filterByMinofflp(array('min' => 12)); // WHERE MinOfFLp >= 12
     * $query->filterByMinofflp(array('max' => 12)); // WHERE MinOfFLp <= 12
     * </code>
     *
     * @param     mixed $minofflp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByMinofflp($minofflp = null, $comparison = null)
    {
        if (is_array($minofflp)) {
            $useMinMax = false;
            if (isset($minofflp['min'])) {
                $this->addUsingAlias(MorphordersPeer::MINOFFLP, $minofflp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minofflp['max'])) {
                $this->addUsingAlias(MorphordersPeer::MINOFFLP, $minofflp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::MINOFFLP, $minofflp, $comparison);
    }

    /**
     * Filter the query on the MaxOfFLp column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxofflp(1234); // WHERE MaxOfFLp = 1234
     * $query->filterByMaxofflp(array(12, 34)); // WHERE MaxOfFLp IN (12, 34)
     * $query->filterByMaxofflp(array('min' => 12)); // WHERE MaxOfFLp >= 12
     * $query->filterByMaxofflp(array('max' => 12)); // WHERE MaxOfFLp <= 12
     * </code>
     *
     * @param     mixed $maxofflp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByMaxofflp($maxofflp = null, $comparison = null)
    {
        if (is_array($maxofflp)) {
            $useMinMax = false;
            if (isset($maxofflp['min'])) {
                $this->addUsingAlias(MorphordersPeer::MAXOFFLP, $maxofflp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxofflp['max'])) {
                $this->addUsingAlias(MorphordersPeer::MAXOFFLP, $maxofflp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::MAXOFFLP, $maxofflp, $comparison);
    }

    /**
     * Filter the query on the MinOfHLp column
     *
     * Example usage:
     * <code>
     * $query->filterByMinofhlp(1234); // WHERE MinOfHLp = 1234
     * $query->filterByMinofhlp(array(12, 34)); // WHERE MinOfHLp IN (12, 34)
     * $query->filterByMinofhlp(array('min' => 12)); // WHERE MinOfHLp >= 12
     * $query->filterByMinofhlp(array('max' => 12)); // WHERE MinOfHLp <= 12
     * </code>
     *
     * @param     mixed $minofhlp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByMinofhlp($minofhlp = null, $comparison = null)
    {
        if (is_array($minofhlp)) {
            $useMinMax = false;
            if (isset($minofhlp['min'])) {
                $this->addUsingAlias(MorphordersPeer::MINOFHLP, $minofhlp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minofhlp['max'])) {
                $this->addUsingAlias(MorphordersPeer::MINOFHLP, $minofhlp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::MINOFHLP, $minofhlp, $comparison);
    }

    /**
     * Filter the query on the MaxOfHLp column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxofhlp(1234); // WHERE MaxOfHLp = 1234
     * $query->filterByMaxofhlp(array(12, 34)); // WHERE MaxOfHLp IN (12, 34)
     * $query->filterByMaxofhlp(array('min' => 12)); // WHERE MaxOfHLp >= 12
     * $query->filterByMaxofhlp(array('max' => 12)); // WHERE MaxOfHLp <= 12
     * </code>
     *
     * @param     mixed $maxofhlp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByMaxofhlp($maxofhlp = null, $comparison = null)
    {
        if (is_array($maxofhlp)) {
            $useMinMax = false;
            if (isset($maxofhlp['min'])) {
                $this->addUsingAlias(MorphordersPeer::MAXOFHLP, $maxofhlp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxofhlp['max'])) {
                $this->addUsingAlias(MorphordersPeer::MAXOFHLP, $maxofhlp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::MAXOFHLP, $maxofhlp, $comparison);
    }

    /**
     * Filter the query on the MinOfPALp column
     *
     * Example usage:
     * <code>
     * $query->filterByMinofpalp(1234); // WHERE MinOfPALp = 1234
     * $query->filterByMinofpalp(array(12, 34)); // WHERE MinOfPALp IN (12, 34)
     * $query->filterByMinofpalp(array('min' => 12)); // WHERE MinOfPALp >= 12
     * $query->filterByMinofpalp(array('max' => 12)); // WHERE MinOfPALp <= 12
     * </code>
     *
     * @param     mixed $minofpalp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByMinofpalp($minofpalp = null, $comparison = null)
    {
        if (is_array($minofpalp)) {
            $useMinMax = false;
            if (isset($minofpalp['min'])) {
                $this->addUsingAlias(MorphordersPeer::MINOFPALP, $minofpalp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minofpalp['max'])) {
                $this->addUsingAlias(MorphordersPeer::MINOFPALP, $minofpalp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::MINOFPALP, $minofpalp, $comparison);
    }

    /**
     * Filter the query on the MaxOfPALp column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxofpalp(1234); // WHERE MaxOfPALp = 1234
     * $query->filterByMaxofpalp(array(12, 34)); // WHERE MaxOfPALp IN (12, 34)
     * $query->filterByMaxofpalp(array('min' => 12)); // WHERE MaxOfPALp >= 12
     * $query->filterByMaxofpalp(array('max' => 12)); // WHERE MaxOfPALp <= 12
     * </code>
     *
     * @param     mixed $maxofpalp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByMaxofpalp($maxofpalp = null, $comparison = null)
    {
        if (is_array($maxofpalp)) {
            $useMinMax = false;
            if (isset($maxofpalp['min'])) {
                $this->addUsingAlias(MorphordersPeer::MAXOFPALP, $maxofpalp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxofpalp['max'])) {
                $this->addUsingAlias(MorphordersPeer::MAXOFPALP, $maxofpalp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::MAXOFPALP, $maxofpalp, $comparison);
    }

    /**
     * Filter the query on the MinOfPPLp column
     *
     * Example usage:
     * <code>
     * $query->filterByMinofpplp(1234); // WHERE MinOfPPLp = 1234
     * $query->filterByMinofpplp(array(12, 34)); // WHERE MinOfPPLp IN (12, 34)
     * $query->filterByMinofpplp(array('min' => 12)); // WHERE MinOfPPLp >= 12
     * $query->filterByMinofpplp(array('max' => 12)); // WHERE MinOfPPLp <= 12
     * </code>
     *
     * @param     mixed $minofpplp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByMinofpplp($minofpplp = null, $comparison = null)
    {
        if (is_array($minofpplp)) {
            $useMinMax = false;
            if (isset($minofpplp['min'])) {
                $this->addUsingAlias(MorphordersPeer::MINOFPPLP, $minofpplp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minofpplp['max'])) {
                $this->addUsingAlias(MorphordersPeer::MINOFPPLP, $minofpplp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::MINOFPPLP, $minofpplp, $comparison);
    }

    /**
     * Filter the query on the MaxOfPPLp column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxofpplp(1234); // WHERE MaxOfPPLp = 1234
     * $query->filterByMaxofpplp(array(12, 34)); // WHERE MaxOfPPLp IN (12, 34)
     * $query->filterByMaxofpplp(array('min' => 12)); // WHERE MaxOfPPLp >= 12
     * $query->filterByMaxofpplp(array('max' => 12)); // WHERE MaxOfPPLp <= 12
     * </code>
     *
     * @param     mixed $maxofpplp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByMaxofpplp($maxofpplp = null, $comparison = null)
    {
        if (is_array($maxofpplp)) {
            $useMinMax = false;
            if (isset($maxofpplp['min'])) {
                $this->addUsingAlias(MorphordersPeer::MAXOFPPLP, $maxofpplp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxofpplp['max'])) {
                $this->addUsingAlias(MorphordersPeer::MAXOFPPLP, $maxofpplp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::MAXOFPPLP, $maxofpplp, $comparison);
    }

    /**
     * Filter the query on the MinOfPPELp column
     *
     * Example usage:
     * <code>
     * $query->filterByMinofppelp(1234); // WHERE MinOfPPELp = 1234
     * $query->filterByMinofppelp(array(12, 34)); // WHERE MinOfPPELp IN (12, 34)
     * $query->filterByMinofppelp(array('min' => 12)); // WHERE MinOfPPELp >= 12
     * $query->filterByMinofppelp(array('max' => 12)); // WHERE MinOfPPELp <= 12
     * </code>
     *
     * @param     mixed $minofppelp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByMinofppelp($minofppelp = null, $comparison = null)
    {
        if (is_array($minofppelp)) {
            $useMinMax = false;
            if (isset($minofppelp['min'])) {
                $this->addUsingAlias(MorphordersPeer::MINOFPPELP, $minofppelp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minofppelp['max'])) {
                $this->addUsingAlias(MorphordersPeer::MINOFPPELP, $minofppelp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::MINOFPPELP, $minofppelp, $comparison);
    }

    /**
     * Filter the query on the MaxOfPPELp column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxofppelp(1234); // WHERE MaxOfPPELp = 1234
     * $query->filterByMaxofppelp(array(12, 34)); // WHERE MaxOfPPELp IN (12, 34)
     * $query->filterByMaxofppelp(array('min' => 12)); // WHERE MaxOfPPELp >= 12
     * $query->filterByMaxofppelp(array('max' => 12)); // WHERE MaxOfPPELp <= 12
     * </code>
     *
     * @param     mixed $maxofppelp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByMaxofppelp($maxofppelp = null, $comparison = null)
    {
        if (is_array($maxofppelp)) {
            $useMinMax = false;
            if (isset($maxofppelp['min'])) {
                $this->addUsingAlias(MorphordersPeer::MAXOFPPELP, $maxofppelp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxofppelp['max'])) {
                $this->addUsingAlias(MorphordersPeer::MAXOFPPELP, $maxofppelp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::MAXOFPPELP, $maxofppelp, $comparison);
    }

    /**
     * Filter the query on the MinOfEDp column
     *
     * Example usage:
     * <code>
     * $query->filterByMinofedp(1234); // WHERE MinOfEDp = 1234
     * $query->filterByMinofedp(array(12, 34)); // WHERE MinOfEDp IN (12, 34)
     * $query->filterByMinofedp(array('min' => 12)); // WHERE MinOfEDp >= 12
     * $query->filterByMinofedp(array('max' => 12)); // WHERE MinOfEDp <= 12
     * </code>
     *
     * @param     mixed $minofedp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByMinofedp($minofedp = null, $comparison = null)
    {
        if (is_array($minofedp)) {
            $useMinMax = false;
            if (isset($minofedp['min'])) {
                $this->addUsingAlias(MorphordersPeer::MINOFEDP, $minofedp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minofedp['max'])) {
                $this->addUsingAlias(MorphordersPeer::MINOFEDP, $minofedp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::MINOFEDP, $minofedp, $comparison);
    }

    /**
     * Filter the query on the MaxOfEDp column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxofedp(1234); // WHERE MaxOfEDp = 1234
     * $query->filterByMaxofedp(array(12, 34)); // WHERE MaxOfEDp IN (12, 34)
     * $query->filterByMaxofedp(array('min' => 12)); // WHERE MaxOfEDp >= 12
     * $query->filterByMaxofedp(array('max' => 12)); // WHERE MaxOfEDp <= 12
     * </code>
     *
     * @param     mixed $maxofedp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByMaxofedp($maxofedp = null, $comparison = null)
    {
        if (is_array($maxofedp)) {
            $useMinMax = false;
            if (isset($maxofedp['min'])) {
                $this->addUsingAlias(MorphordersPeer::MAXOFEDP, $maxofedp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxofedp['max'])) {
                $this->addUsingAlias(MorphordersPeer::MAXOFEDP, $maxofedp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::MAXOFEDP, $maxofedp, $comparison);
    }

    /**
     * Filter the query on the MinOfPOLp column
     *
     * Example usage:
     * <code>
     * $query->filterByMinofpolp(1234); // WHERE MinOfPOLp = 1234
     * $query->filterByMinofpolp(array(12, 34)); // WHERE MinOfPOLp IN (12, 34)
     * $query->filterByMinofpolp(array('min' => 12)); // WHERE MinOfPOLp >= 12
     * $query->filterByMinofpolp(array('max' => 12)); // WHERE MinOfPOLp <= 12
     * </code>
     *
     * @param     mixed $minofpolp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByMinofpolp($minofpolp = null, $comparison = null)
    {
        if (is_array($minofpolp)) {
            $useMinMax = false;
            if (isset($minofpolp['min'])) {
                $this->addUsingAlias(MorphordersPeer::MINOFPOLP, $minofpolp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minofpolp['max'])) {
                $this->addUsingAlias(MorphordersPeer::MINOFPOLP, $minofpolp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::MINOFPOLP, $minofpolp, $comparison);
    }

    /**
     * Filter the query on the MaxOfPOLp column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxofpolp(1234); // WHERE MaxOfPOLp = 1234
     * $query->filterByMaxofpolp(array(12, 34)); // WHERE MaxOfPOLp IN (12, 34)
     * $query->filterByMaxofpolp(array('min' => 12)); // WHERE MaxOfPOLp >= 12
     * $query->filterByMaxofpolp(array('max' => 12)); // WHERE MaxOfPOLp <= 12
     * </code>
     *
     * @param     mixed $maxofpolp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByMaxofpolp($maxofpolp = null, $comparison = null)
    {
        if (is_array($maxofpolp)) {
            $useMinMax = false;
            if (isset($maxofpolp['min'])) {
                $this->addUsingAlias(MorphordersPeer::MAXOFPOLP, $maxofpolp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxofpolp['max'])) {
                $this->addUsingAlias(MorphordersPeer::MAXOFPOLP, $maxofpolp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::MAXOFPOLP, $maxofpolp, $comparison);
    }

    /**
     * Filter the query on the MinOfBDp column
     *
     * Example usage:
     * <code>
     * $query->filterByMinofbdp(1234); // WHERE MinOfBDp = 1234
     * $query->filterByMinofbdp(array(12, 34)); // WHERE MinOfBDp IN (12, 34)
     * $query->filterByMinofbdp(array('min' => 12)); // WHERE MinOfBDp >= 12
     * $query->filterByMinofbdp(array('max' => 12)); // WHERE MinOfBDp <= 12
     * </code>
     *
     * @param     mixed $minofbdp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByMinofbdp($minofbdp = null, $comparison = null)
    {
        if (is_array($minofbdp)) {
            $useMinMax = false;
            if (isset($minofbdp['min'])) {
                $this->addUsingAlias(MorphordersPeer::MINOFBDP, $minofbdp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minofbdp['max'])) {
                $this->addUsingAlias(MorphordersPeer::MINOFBDP, $minofbdp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::MINOFBDP, $minofbdp, $comparison);
    }

    /**
     * Filter the query on the MaxOfBDp column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxofbdp(1234); // WHERE MaxOfBDp = 1234
     * $query->filterByMaxofbdp(array(12, 34)); // WHERE MaxOfBDp IN (12, 34)
     * $query->filterByMaxofbdp(array('min' => 12)); // WHERE MaxOfBDp >= 12
     * $query->filterByMaxofbdp(array('max' => 12)); // WHERE MaxOfBDp <= 12
     * </code>
     *
     * @param     mixed $maxofbdp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByMaxofbdp($maxofbdp = null, $comparison = null)
    {
        if (is_array($maxofbdp)) {
            $useMinMax = false;
            if (isset($maxofbdp['min'])) {
                $this->addUsingAlias(MorphordersPeer::MAXOFBDP, $maxofbdp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxofbdp['max'])) {
                $this->addUsingAlias(MorphordersPeer::MAXOFBDP, $maxofbdp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::MAXOFBDP, $maxofbdp, $comparison);
    }

    /**
     * Filter the query on the MinOfCHp column
     *
     * Example usage:
     * <code>
     * $query->filterByMinofchp(1234); // WHERE MinOfCHp = 1234
     * $query->filterByMinofchp(array(12, 34)); // WHERE MinOfCHp IN (12, 34)
     * $query->filterByMinofchp(array('min' => 12)); // WHERE MinOfCHp >= 12
     * $query->filterByMinofchp(array('max' => 12)); // WHERE MinOfCHp <= 12
     * </code>
     *
     * @param     mixed $minofchp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByMinofchp($minofchp = null, $comparison = null)
    {
        if (is_array($minofchp)) {
            $useMinMax = false;
            if (isset($minofchp['min'])) {
                $this->addUsingAlias(MorphordersPeer::MINOFCHP, $minofchp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minofchp['max'])) {
                $this->addUsingAlias(MorphordersPeer::MINOFCHP, $minofchp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::MINOFCHP, $minofchp, $comparison);
    }

    /**
     * Filter the query on the MaxOfCHp column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxofchp(1234); // WHERE MaxOfCHp = 1234
     * $query->filterByMaxofchp(array(12, 34)); // WHERE MaxOfCHp IN (12, 34)
     * $query->filterByMaxofchp(array('min' => 12)); // WHERE MaxOfCHp >= 12
     * $query->filterByMaxofchp(array('max' => 12)); // WHERE MaxOfCHp <= 12
     * </code>
     *
     * @param     mixed $maxofchp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByMaxofchp($maxofchp = null, $comparison = null)
    {
        if (is_array($maxofchp)) {
            $useMinMax = false;
            if (isset($maxofchp['min'])) {
                $this->addUsingAlias(MorphordersPeer::MAXOFCHP, $maxofchp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxofchp['max'])) {
                $this->addUsingAlias(MorphordersPeer::MAXOFCHP, $maxofchp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::MAXOFCHP, $maxofchp, $comparison);
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
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(MorphordersPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(MorphordersPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphordersPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Morphorders $morphorders Object to remove from the list of results
     *
     * @return MorphordersQuery The current query, for fluid interface
     */
    public function prune($morphorders = null)
    {
        if ($morphorders) {
            $this->addUsingAlias(MorphordersPeer::AUTOCTR, $morphorders->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
