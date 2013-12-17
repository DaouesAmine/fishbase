<?php


/**
 * Base class that represents a query for the 'myersdata' table.
 *
 *
 *
 * @method MyersdataQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method MyersdataQuery orderById($order = Criteria::ASC) Order by the id column
 * @method MyersdataQuery orderByReclag($order = Criteria::ASC) Order by the RecLag column
 * @method MyersdataQuery orderByRecyear($order = Criteria::ASC) Order by the RecYear column
 * @method MyersdataQuery orderBySsb($order = Criteria::ASC) Order by the ssb column
 * @method MyersdataQuery orderByRec($order = Criteria::ASC) Order by the Rec column
 * @method MyersdataQuery orderBySsbscaled($order = Criteria::ASC) Order by the ssbscaled column
 * @method MyersdataQuery orderByRecscaled($order = Criteria::ASC) Order by the RecScaled column
 * @method MyersdataQuery orderByLand($order = Criteria::ASC) Order by the land column
 * @method MyersdataQuery orderByFrpl($order = Criteria::ASC) Order by the frpl column
 * @method MyersdataQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method MyersdataQuery groupByAutoctr() Group by the autoctr column
 * @method MyersdataQuery groupById() Group by the id column
 * @method MyersdataQuery groupByReclag() Group by the RecLag column
 * @method MyersdataQuery groupByRecyear() Group by the RecYear column
 * @method MyersdataQuery groupBySsb() Group by the ssb column
 * @method MyersdataQuery groupByRec() Group by the Rec column
 * @method MyersdataQuery groupBySsbscaled() Group by the ssbscaled column
 * @method MyersdataQuery groupByRecscaled() Group by the RecScaled column
 * @method MyersdataQuery groupByLand() Group by the land column
 * @method MyersdataQuery groupByFrpl() Group by the frpl column
 * @method MyersdataQuery groupByTs() Group by the TS column
 *
 * @method MyersdataQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MyersdataQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MyersdataQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Myersdata findOne(PropelPDO $con = null) Return the first Myersdata matching the query
 * @method Myersdata findOneOrCreate(PropelPDO $con = null) Return the first Myersdata matching the query, or a new Myersdata object populated from the query conditions when no match is found
 *
 * @method Myersdata findOneByAutoctr(int $autoctr) Return the first Myersdata filtered by the autoctr column
 * @method Myersdata findOneById(string $id) Return the first Myersdata filtered by the id column
 * @method Myersdata findOneByReclag(double $RecLag) Return the first Myersdata filtered by the RecLag column
 * @method Myersdata findOneByRecyear(double $RecYear) Return the first Myersdata filtered by the RecYear column
 * @method Myersdata findOneBySsb(double $ssb) Return the first Myersdata filtered by the ssb column
 * @method Myersdata findOneByRec(double $Rec) Return the first Myersdata filtered by the Rec column
 * @method Myersdata findOneBySsbscaled(double $ssbscaled) Return the first Myersdata filtered by the ssbscaled column
 * @method Myersdata findOneByRecscaled(double $RecScaled) Return the first Myersdata filtered by the RecScaled column
 * @method Myersdata findOneByLand(double $land) Return the first Myersdata filtered by the land column
 * @method Myersdata findOneByFrpl(double $frpl) Return the first Myersdata filtered by the frpl column
 * @method Myersdata findOneByTs(string $TS) Return the first Myersdata filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Myersdata objects filtered by the autoctr column
 * @method array findById(string $id) Return Myersdata objects filtered by the id column
 * @method array findByReclag(double $RecLag) Return Myersdata objects filtered by the RecLag column
 * @method array findByRecyear(double $RecYear) Return Myersdata objects filtered by the RecYear column
 * @method array findBySsb(double $ssb) Return Myersdata objects filtered by the ssb column
 * @method array findByRec(double $Rec) Return Myersdata objects filtered by the Rec column
 * @method array findBySsbscaled(double $ssbscaled) Return Myersdata objects filtered by the ssbscaled column
 * @method array findByRecscaled(double $RecScaled) Return Myersdata objects filtered by the RecScaled column
 * @method array findByLand(double $land) Return Myersdata objects filtered by the land column
 * @method array findByFrpl(double $frpl) Return Myersdata objects filtered by the frpl column
 * @method array findByTs(string $TS) Return Myersdata objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMyersdataQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMyersdataQuery object.
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
            $modelName = 'Myersdata';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MyersdataQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MyersdataQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MyersdataQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MyersdataQuery) {
            return $criteria;
        }
        $query = new MyersdataQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$id, $RecYear]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Myersdata|Myersdata[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MyersdataPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MyersdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Myersdata A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `id`, `RecLag`, `RecYear`, `ssb`, `Rec`, `ssbscaled`, `RecScaled`, `land`, `frpl`, `TS` FROM `myersdata` WHERE `id` = :p0 AND `RecYear` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Myersdata();
            $obj->hydrate($row);
            MyersdataPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Myersdata|Myersdata[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Myersdata[]|mixed the list of results, formatted by the current formatter
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
     * @return MyersdataQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(MyersdataPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(MyersdataPeer::RECYEAR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MyersdataQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(MyersdataPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(MyersdataPeer::RECYEAR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the autoctr column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoctr(1234); // WHERE autoctr = 1234
     * $query->filterByAutoctr(array(12, 34)); // WHERE autoctr IN (12, 34)
     * $query->filterByAutoctr(array('min' => 12)); // WHERE autoctr >= 12
     * $query->filterByAutoctr(array('max' => 12)); // WHERE autoctr <= 12
     * </code>
     *
     * @param     mixed $autoctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersdataQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(MyersdataPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(MyersdataPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersdataPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById('fooValue');   // WHERE id = 'fooValue'
     * $query->filterById('%fooValue%'); // WHERE id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $id The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersdataQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($id)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $id)) {
                $id = str_replace('*', '%', $id);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersdataPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the RecLag column
     *
     * Example usage:
     * <code>
     * $query->filterByReclag(1234); // WHERE RecLag = 1234
     * $query->filterByReclag(array(12, 34)); // WHERE RecLag IN (12, 34)
     * $query->filterByReclag(array('min' => 12)); // WHERE RecLag >= 12
     * $query->filterByReclag(array('max' => 12)); // WHERE RecLag <= 12
     * </code>
     *
     * @param     mixed $reclag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersdataQuery The current query, for fluid interface
     */
    public function filterByReclag($reclag = null, $comparison = null)
    {
        if (is_array($reclag)) {
            $useMinMax = false;
            if (isset($reclag['min'])) {
                $this->addUsingAlias(MyersdataPeer::RECLAG, $reclag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reclag['max'])) {
                $this->addUsingAlias(MyersdataPeer::RECLAG, $reclag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersdataPeer::RECLAG, $reclag, $comparison);
    }

    /**
     * Filter the query on the RecYear column
     *
     * Example usage:
     * <code>
     * $query->filterByRecyear(1234); // WHERE RecYear = 1234
     * $query->filterByRecyear(array(12, 34)); // WHERE RecYear IN (12, 34)
     * $query->filterByRecyear(array('min' => 12)); // WHERE RecYear >= 12
     * $query->filterByRecyear(array('max' => 12)); // WHERE RecYear <= 12
     * </code>
     *
     * @param     mixed $recyear The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersdataQuery The current query, for fluid interface
     */
    public function filterByRecyear($recyear = null, $comparison = null)
    {
        if (is_array($recyear)) {
            $useMinMax = false;
            if (isset($recyear['min'])) {
                $this->addUsingAlias(MyersdataPeer::RECYEAR, $recyear['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($recyear['max'])) {
                $this->addUsingAlias(MyersdataPeer::RECYEAR, $recyear['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersdataPeer::RECYEAR, $recyear, $comparison);
    }

    /**
     * Filter the query on the ssb column
     *
     * Example usage:
     * <code>
     * $query->filterBySsb(1234); // WHERE ssb = 1234
     * $query->filterBySsb(array(12, 34)); // WHERE ssb IN (12, 34)
     * $query->filterBySsb(array('min' => 12)); // WHERE ssb >= 12
     * $query->filterBySsb(array('max' => 12)); // WHERE ssb <= 12
     * </code>
     *
     * @param     mixed $ssb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersdataQuery The current query, for fluid interface
     */
    public function filterBySsb($ssb = null, $comparison = null)
    {
        if (is_array($ssb)) {
            $useMinMax = false;
            if (isset($ssb['min'])) {
                $this->addUsingAlias(MyersdataPeer::SSB, $ssb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ssb['max'])) {
                $this->addUsingAlias(MyersdataPeer::SSB, $ssb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersdataPeer::SSB, $ssb, $comparison);
    }

    /**
     * Filter the query on the Rec column
     *
     * Example usage:
     * <code>
     * $query->filterByRec(1234); // WHERE Rec = 1234
     * $query->filterByRec(array(12, 34)); // WHERE Rec IN (12, 34)
     * $query->filterByRec(array('min' => 12)); // WHERE Rec >= 12
     * $query->filterByRec(array('max' => 12)); // WHERE Rec <= 12
     * </code>
     *
     * @param     mixed $rec The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersdataQuery The current query, for fluid interface
     */
    public function filterByRec($rec = null, $comparison = null)
    {
        if (is_array($rec)) {
            $useMinMax = false;
            if (isset($rec['min'])) {
                $this->addUsingAlias(MyersdataPeer::REC, $rec['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rec['max'])) {
                $this->addUsingAlias(MyersdataPeer::REC, $rec['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersdataPeer::REC, $rec, $comparison);
    }

    /**
     * Filter the query on the ssbscaled column
     *
     * Example usage:
     * <code>
     * $query->filterBySsbscaled(1234); // WHERE ssbscaled = 1234
     * $query->filterBySsbscaled(array(12, 34)); // WHERE ssbscaled IN (12, 34)
     * $query->filterBySsbscaled(array('min' => 12)); // WHERE ssbscaled >= 12
     * $query->filterBySsbscaled(array('max' => 12)); // WHERE ssbscaled <= 12
     * </code>
     *
     * @param     mixed $ssbscaled The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersdataQuery The current query, for fluid interface
     */
    public function filterBySsbscaled($ssbscaled = null, $comparison = null)
    {
        if (is_array($ssbscaled)) {
            $useMinMax = false;
            if (isset($ssbscaled['min'])) {
                $this->addUsingAlias(MyersdataPeer::SSBSCALED, $ssbscaled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ssbscaled['max'])) {
                $this->addUsingAlias(MyersdataPeer::SSBSCALED, $ssbscaled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersdataPeer::SSBSCALED, $ssbscaled, $comparison);
    }

    /**
     * Filter the query on the RecScaled column
     *
     * Example usage:
     * <code>
     * $query->filterByRecscaled(1234); // WHERE RecScaled = 1234
     * $query->filterByRecscaled(array(12, 34)); // WHERE RecScaled IN (12, 34)
     * $query->filterByRecscaled(array('min' => 12)); // WHERE RecScaled >= 12
     * $query->filterByRecscaled(array('max' => 12)); // WHERE RecScaled <= 12
     * </code>
     *
     * @param     mixed $recscaled The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersdataQuery The current query, for fluid interface
     */
    public function filterByRecscaled($recscaled = null, $comparison = null)
    {
        if (is_array($recscaled)) {
            $useMinMax = false;
            if (isset($recscaled['min'])) {
                $this->addUsingAlias(MyersdataPeer::RECSCALED, $recscaled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($recscaled['max'])) {
                $this->addUsingAlias(MyersdataPeer::RECSCALED, $recscaled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersdataPeer::RECSCALED, $recscaled, $comparison);
    }

    /**
     * Filter the query on the land column
     *
     * Example usage:
     * <code>
     * $query->filterByLand(1234); // WHERE land = 1234
     * $query->filterByLand(array(12, 34)); // WHERE land IN (12, 34)
     * $query->filterByLand(array('min' => 12)); // WHERE land >= 12
     * $query->filterByLand(array('max' => 12)); // WHERE land <= 12
     * </code>
     *
     * @param     mixed $land The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersdataQuery The current query, for fluid interface
     */
    public function filterByLand($land = null, $comparison = null)
    {
        if (is_array($land)) {
            $useMinMax = false;
            if (isset($land['min'])) {
                $this->addUsingAlias(MyersdataPeer::LAND, $land['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($land['max'])) {
                $this->addUsingAlias(MyersdataPeer::LAND, $land['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersdataPeer::LAND, $land, $comparison);
    }

    /**
     * Filter the query on the frpl column
     *
     * Example usage:
     * <code>
     * $query->filterByFrpl(1234); // WHERE frpl = 1234
     * $query->filterByFrpl(array(12, 34)); // WHERE frpl IN (12, 34)
     * $query->filterByFrpl(array('min' => 12)); // WHERE frpl >= 12
     * $query->filterByFrpl(array('max' => 12)); // WHERE frpl <= 12
     * </code>
     *
     * @param     mixed $frpl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersdataQuery The current query, for fluid interface
     */
    public function filterByFrpl($frpl = null, $comparison = null)
    {
        if (is_array($frpl)) {
            $useMinMax = false;
            if (isset($frpl['min'])) {
                $this->addUsingAlias(MyersdataPeer::FRPL, $frpl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($frpl['max'])) {
                $this->addUsingAlias(MyersdataPeer::FRPL, $frpl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersdataPeer::FRPL, $frpl, $comparison);
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
     * @return MyersdataQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(MyersdataPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(MyersdataPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersdataPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Myersdata $myersdata Object to remove from the list of results
     *
     * @return MyersdataQuery The current query, for fluid interface
     */
    public function prune($myersdata = null)
    {
        if ($myersdata) {
            $this->addCond('pruneCond0', $this->getAliasedColName(MyersdataPeer::ID), $myersdata->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(MyersdataPeer::RECYEAR), $myersdata->getRecyear(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
