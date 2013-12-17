<?php


/**
 * Base class that represents a query for the 'morphmetrecords' table.
 *
 *
 *
 * @method MorphmetrecordsQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method MorphmetrecordsQuery orderByTl($order = Criteria::ASC) Order by the TL column
 * @method MorphmetrecordsQuery orderBySl($order = Criteria::ASC) Order by the SL column
 * @method MorphmetrecordsQuery orderByHl($order = Criteria::ASC) Order by the HL column
 * @method MorphmetrecordsQuery orderByPkid($order = Criteria::ASC) Order by the PKID column
 *
 * @method MorphmetrecordsQuery groupBySpeccode() Group by the Speccode column
 * @method MorphmetrecordsQuery groupByTl() Group by the TL column
 * @method MorphmetrecordsQuery groupBySl() Group by the SL column
 * @method MorphmetrecordsQuery groupByHl() Group by the HL column
 * @method MorphmetrecordsQuery groupByPkid() Group by the PKID column
 *
 * @method MorphmetrecordsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MorphmetrecordsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MorphmetrecordsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Morphmetrecords findOne(PropelPDO $con = null) Return the first Morphmetrecords matching the query
 * @method Morphmetrecords findOneOrCreate(PropelPDO $con = null) Return the first Morphmetrecords matching the query, or a new Morphmetrecords object populated from the query conditions when no match is found
 *
 * @method Morphmetrecords findOneBySpeccode(int $Speccode) Return the first Morphmetrecords filtered by the Speccode column
 * @method Morphmetrecords findOneByTl(string $TL) Return the first Morphmetrecords filtered by the TL column
 * @method Morphmetrecords findOneBySl(string $SL) Return the first Morphmetrecords filtered by the SL column
 * @method Morphmetrecords findOneByHl(string $HL) Return the first Morphmetrecords filtered by the HL column
 *
 * @method array findBySpeccode(int $Speccode) Return Morphmetrecords objects filtered by the Speccode column
 * @method array findByTl(string $TL) Return Morphmetrecords objects filtered by the TL column
 * @method array findBySl(string $SL) Return Morphmetrecords objects filtered by the SL column
 * @method array findByHl(string $HL) Return Morphmetrecords objects filtered by the HL column
 * @method array findByPkid(string $PKID) Return Morphmetrecords objects filtered by the PKID column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMorphmetrecordsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMorphmetrecordsQuery object.
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
            $modelName = 'Morphmetrecords';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MorphmetrecordsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MorphmetrecordsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MorphmetrecordsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MorphmetrecordsQuery) {
            return $criteria;
        }
        $query = new MorphmetrecordsQuery(null, null, $modelAlias);

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
     * @return   Morphmetrecords|Morphmetrecords[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MorphmetrecordsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MorphmetrecordsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Morphmetrecords A model object, or null if the key is not found
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
     * @return                 Morphmetrecords A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `Speccode`, `TL`, `SL`, `HL`, `PKID` FROM `morphmetrecords` WHERE `PKID` = :p0';
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
            $obj = new Morphmetrecords();
            $obj->hydrate($row);
            MorphmetrecordsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Morphmetrecords|Morphmetrecords[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Morphmetrecords[]|mixed the list of results, formatted by the current formatter
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
     * @return MorphmetrecordsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MorphmetrecordsPeer::PKID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MorphmetrecordsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MorphmetrecordsPeer::PKID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the Speccode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeccode(1234); // WHERE Speccode = 1234
     * $query->filterBySpeccode(array(12, 34)); // WHERE Speccode IN (12, 34)
     * $query->filterBySpeccode(array('min' => 12)); // WHERE Speccode >= 12
     * $query->filterBySpeccode(array('max' => 12)); // WHERE Speccode <= 12
     * </code>
     *
     * @param     mixed $speccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetrecordsQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(MorphmetrecordsPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(MorphmetrecordsPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetrecordsPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the TL column
     *
     * Example usage:
     * <code>
     * $query->filterByTl(1234); // WHERE TL = 1234
     * $query->filterByTl(array(12, 34)); // WHERE TL IN (12, 34)
     * $query->filterByTl(array('min' => 12)); // WHERE TL >= 12
     * $query->filterByTl(array('max' => 12)); // WHERE TL <= 12
     * </code>
     *
     * @param     mixed $tl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetrecordsQuery The current query, for fluid interface
     */
    public function filterByTl($tl = null, $comparison = null)
    {
        if (is_array($tl)) {
            $useMinMax = false;
            if (isset($tl['min'])) {
                $this->addUsingAlias(MorphmetrecordsPeer::TL, $tl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tl['max'])) {
                $this->addUsingAlias(MorphmetrecordsPeer::TL, $tl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetrecordsPeer::TL, $tl, $comparison);
    }

    /**
     * Filter the query on the SL column
     *
     * Example usage:
     * <code>
     * $query->filterBySl(1234); // WHERE SL = 1234
     * $query->filterBySl(array(12, 34)); // WHERE SL IN (12, 34)
     * $query->filterBySl(array('min' => 12)); // WHERE SL >= 12
     * $query->filterBySl(array('max' => 12)); // WHERE SL <= 12
     * </code>
     *
     * @param     mixed $sl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetrecordsQuery The current query, for fluid interface
     */
    public function filterBySl($sl = null, $comparison = null)
    {
        if (is_array($sl)) {
            $useMinMax = false;
            if (isset($sl['min'])) {
                $this->addUsingAlias(MorphmetrecordsPeer::SL, $sl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sl['max'])) {
                $this->addUsingAlias(MorphmetrecordsPeer::SL, $sl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetrecordsPeer::SL, $sl, $comparison);
    }

    /**
     * Filter the query on the HL column
     *
     * Example usage:
     * <code>
     * $query->filterByHl(1234); // WHERE HL = 1234
     * $query->filterByHl(array(12, 34)); // WHERE HL IN (12, 34)
     * $query->filterByHl(array('min' => 12)); // WHERE HL >= 12
     * $query->filterByHl(array('max' => 12)); // WHERE HL <= 12
     * </code>
     *
     * @param     mixed $hl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetrecordsQuery The current query, for fluid interface
     */
    public function filterByHl($hl = null, $comparison = null)
    {
        if (is_array($hl)) {
            $useMinMax = false;
            if (isset($hl['min'])) {
                $this->addUsingAlias(MorphmetrecordsPeer::HL, $hl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hl['max'])) {
                $this->addUsingAlias(MorphmetrecordsPeer::HL, $hl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetrecordsPeer::HL, $hl, $comparison);
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
     * @return MorphmetrecordsQuery The current query, for fluid interface
     */
    public function filterByPkid($pkid = null, $comparison = null)
    {
        if (is_array($pkid)) {
            $useMinMax = false;
            if (isset($pkid['min'])) {
                $this->addUsingAlias(MorphmetrecordsPeer::PKID, $pkid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pkid['max'])) {
                $this->addUsingAlias(MorphmetrecordsPeer::PKID, $pkid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetrecordsPeer::PKID, $pkid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Morphmetrecords $morphmetrecords Object to remove from the list of results
     *
     * @return MorphmetrecordsQuery The current query, for fluid interface
     */
    public function prune($morphmetrecords = null)
    {
        if ($morphmetrecords) {
            $this->addUsingAlias(MorphmetrecordsPeer::PKID, $morphmetrecords->getPkid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
