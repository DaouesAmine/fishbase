<?php


/**
 * Base class that represents a query for the 'zweb_cn3' table.
 *
 *
 *
 * @method ZwebCn3Query orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method ZwebCn3Query orderByComname($order = Criteria::ASC) Order by the ComName column
 * @method ZwebCn3Query orderByNametype($order = Criteria::ASC) Order by the NameType column
 * @method ZwebCn3Query orderByNt($order = Criteria::ASC) Order by the NT column
 * @method ZwebCn3Query orderByRank1($order = Criteria::ASC) Order by the Rank1 column
 * @method ZwebCn3Query orderByEng($order = Criteria::ASC) Order by the Eng column
 * @method ZwebCn3Query orderByFre($order = Criteria::ASC) Order by the Fre column
 * @method ZwebCn3Query orderBySpa($order = Criteria::ASC) Order by the Spa column
 * @method ZwebCn3Query orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method ZwebCn3Query orderByUnicodetext($order = Criteria::ASC) Order by the UnicodeText column
 * @method ZwebCn3Query orderByScript($order = Criteria::ASC) Order by the Script column
 * @method ZwebCn3Query orderByPkid($order = Criteria::ASC) Order by the PKID column
 *
 * @method ZwebCn3Query groupBySpeccode() Group by the SpecCode column
 * @method ZwebCn3Query groupByComname() Group by the ComName column
 * @method ZwebCn3Query groupByNametype() Group by the NameType column
 * @method ZwebCn3Query groupByNt() Group by the NT column
 * @method ZwebCn3Query groupByRank1() Group by the Rank1 column
 * @method ZwebCn3Query groupByEng() Group by the Eng column
 * @method ZwebCn3Query groupByFre() Group by the Fre column
 * @method ZwebCn3Query groupBySpa() Group by the Spa column
 * @method ZwebCn3Query groupByAutoctr() Group by the autoctr column
 * @method ZwebCn3Query groupByUnicodetext() Group by the UnicodeText column
 * @method ZwebCn3Query groupByScript() Group by the Script column
 * @method ZwebCn3Query groupByPkid() Group by the PKID column
 *
 * @method ZwebCn3Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ZwebCn3Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ZwebCn3Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ZwebCn3 findOne(PropelPDO $con = null) Return the first ZwebCn3 matching the query
 * @method ZwebCn3 findOneOrCreate(PropelPDO $con = null) Return the first ZwebCn3 matching the query, or a new ZwebCn3 object populated from the query conditions when no match is found
 *
 * @method ZwebCn3 findOneBySpeccode(int $SpecCode) Return the first ZwebCn3 filtered by the SpecCode column
 * @method ZwebCn3 findOneByComname(string $ComName) Return the first ZwebCn3 filtered by the ComName column
 * @method ZwebCn3 findOneByNametype(string $NameType) Return the first ZwebCn3 filtered by the NameType column
 * @method ZwebCn3 findOneByNt(int $NT) Return the first ZwebCn3 filtered by the NT column
 * @method ZwebCn3 findOneByRank1(int $Rank1) Return the first ZwebCn3 filtered by the Rank1 column
 * @method ZwebCn3 findOneByEng(int $Eng) Return the first ZwebCn3 filtered by the Eng column
 * @method ZwebCn3 findOneByFre(int $Fre) Return the first ZwebCn3 filtered by the Fre column
 * @method ZwebCn3 findOneBySpa(int $Spa) Return the first ZwebCn3 filtered by the Spa column
 * @method ZwebCn3 findOneByAutoctr(int $autoctr) Return the first ZwebCn3 filtered by the autoctr column
 * @method ZwebCn3 findOneByUnicodetext(string $UnicodeText) Return the first ZwebCn3 filtered by the UnicodeText column
 * @method ZwebCn3 findOneByScript(string $Script) Return the first ZwebCn3 filtered by the Script column
 *
 * @method array findBySpeccode(int $SpecCode) Return ZwebCn3 objects filtered by the SpecCode column
 * @method array findByComname(string $ComName) Return ZwebCn3 objects filtered by the ComName column
 * @method array findByNametype(string $NameType) Return ZwebCn3 objects filtered by the NameType column
 * @method array findByNt(int $NT) Return ZwebCn3 objects filtered by the NT column
 * @method array findByRank1(int $Rank1) Return ZwebCn3 objects filtered by the Rank1 column
 * @method array findByEng(int $Eng) Return ZwebCn3 objects filtered by the Eng column
 * @method array findByFre(int $Fre) Return ZwebCn3 objects filtered by the Fre column
 * @method array findBySpa(int $Spa) Return ZwebCn3 objects filtered by the Spa column
 * @method array findByAutoctr(int $autoctr) Return ZwebCn3 objects filtered by the autoctr column
 * @method array findByUnicodetext(string $UnicodeText) Return ZwebCn3 objects filtered by the UnicodeText column
 * @method array findByScript(string $Script) Return ZwebCn3 objects filtered by the Script column
 * @method array findByPkid(string $PKID) Return ZwebCn3 objects filtered by the PKID column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseZwebCn3Query extends ModelCriteria
{
    /**
     * Initializes internal state of BaseZwebCn3Query object.
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
            $modelName = 'ZwebCn3';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ZwebCn3Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ZwebCn3Query|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ZwebCn3Query
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ZwebCn3Query) {
            return $criteria;
        }
        $query = new ZwebCn3Query(null, null, $modelAlias);

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
     * @return   ZwebCn3|ZwebCn3[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ZwebCn3Peer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ZwebCn3Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ZwebCn3 A model object, or null if the key is not found
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
     * @return                 ZwebCn3 A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `SpecCode`, `ComName`, `NameType`, `NT`, `Rank1`, `Eng`, `Fre`, `Spa`, `autoctr`, `UnicodeText`, `Script`, `PKID` FROM `zweb_cn3` WHERE `PKID` = :p0';
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
            $obj = new ZwebCn3();
            $obj->hydrate($row);
            ZwebCn3Peer::addInstanceToPool($obj, (string) $key);
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
     * @return ZwebCn3|ZwebCn3[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ZwebCn3[]|mixed the list of results, formatted by the current formatter
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
     * @return ZwebCn3Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ZwebCn3Peer::PKID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ZwebCn3Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ZwebCn3Peer::PKID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the SpecCode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeccode(1234); // WHERE SpecCode = 1234
     * $query->filterBySpeccode(array(12, 34)); // WHERE SpecCode IN (12, 34)
     * $query->filterBySpeccode(array('min' => 12)); // WHERE SpecCode >= 12
     * $query->filterBySpeccode(array('max' => 12)); // WHERE SpecCode <= 12
     * </code>
     *
     * @param     mixed $speccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebCn3Query The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(ZwebCn3Peer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(ZwebCn3Peer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebCn3Peer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the ComName column
     *
     * Example usage:
     * <code>
     * $query->filterByComname('fooValue');   // WHERE ComName = 'fooValue'
     * $query->filterByComname('%fooValue%'); // WHERE ComName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebCn3Query The current query, for fluid interface
     */
    public function filterByComname($comname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comname)) {
                $comname = str_replace('*', '%', $comname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ZwebCn3Peer::COMNAME, $comname, $comparison);
    }

    /**
     * Filter the query on the NameType column
     *
     * Example usage:
     * <code>
     * $query->filterByNametype('fooValue');   // WHERE NameType = 'fooValue'
     * $query->filterByNametype('%fooValue%'); // WHERE NameType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nametype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebCn3Query The current query, for fluid interface
     */
    public function filterByNametype($nametype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nametype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nametype)) {
                $nametype = str_replace('*', '%', $nametype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ZwebCn3Peer::NAMETYPE, $nametype, $comparison);
    }

    /**
     * Filter the query on the NT column
     *
     * Example usage:
     * <code>
     * $query->filterByNt(1234); // WHERE NT = 1234
     * $query->filterByNt(array(12, 34)); // WHERE NT IN (12, 34)
     * $query->filterByNt(array('min' => 12)); // WHERE NT >= 12
     * $query->filterByNt(array('max' => 12)); // WHERE NT <= 12
     * </code>
     *
     * @param     mixed $nt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebCn3Query The current query, for fluid interface
     */
    public function filterByNt($nt = null, $comparison = null)
    {
        if (is_array($nt)) {
            $useMinMax = false;
            if (isset($nt['min'])) {
                $this->addUsingAlias(ZwebCn3Peer::NT, $nt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nt['max'])) {
                $this->addUsingAlias(ZwebCn3Peer::NT, $nt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebCn3Peer::NT, $nt, $comparison);
    }

    /**
     * Filter the query on the Rank1 column
     *
     * Example usage:
     * <code>
     * $query->filterByRank1(1234); // WHERE Rank1 = 1234
     * $query->filterByRank1(array(12, 34)); // WHERE Rank1 IN (12, 34)
     * $query->filterByRank1(array('min' => 12)); // WHERE Rank1 >= 12
     * $query->filterByRank1(array('max' => 12)); // WHERE Rank1 <= 12
     * </code>
     *
     * @param     mixed $rank1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebCn3Query The current query, for fluid interface
     */
    public function filterByRank1($rank1 = null, $comparison = null)
    {
        if (is_array($rank1)) {
            $useMinMax = false;
            if (isset($rank1['min'])) {
                $this->addUsingAlias(ZwebCn3Peer::RANK1, $rank1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rank1['max'])) {
                $this->addUsingAlias(ZwebCn3Peer::RANK1, $rank1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebCn3Peer::RANK1, $rank1, $comparison);
    }

    /**
     * Filter the query on the Eng column
     *
     * Example usage:
     * <code>
     * $query->filterByEng(1234); // WHERE Eng = 1234
     * $query->filterByEng(array(12, 34)); // WHERE Eng IN (12, 34)
     * $query->filterByEng(array('min' => 12)); // WHERE Eng >= 12
     * $query->filterByEng(array('max' => 12)); // WHERE Eng <= 12
     * </code>
     *
     * @param     mixed $eng The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebCn3Query The current query, for fluid interface
     */
    public function filterByEng($eng = null, $comparison = null)
    {
        if (is_array($eng)) {
            $useMinMax = false;
            if (isset($eng['min'])) {
                $this->addUsingAlias(ZwebCn3Peer::ENG, $eng['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eng['max'])) {
                $this->addUsingAlias(ZwebCn3Peer::ENG, $eng['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebCn3Peer::ENG, $eng, $comparison);
    }

    /**
     * Filter the query on the Fre column
     *
     * Example usage:
     * <code>
     * $query->filterByFre(1234); // WHERE Fre = 1234
     * $query->filterByFre(array(12, 34)); // WHERE Fre IN (12, 34)
     * $query->filterByFre(array('min' => 12)); // WHERE Fre >= 12
     * $query->filterByFre(array('max' => 12)); // WHERE Fre <= 12
     * </code>
     *
     * @param     mixed $fre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebCn3Query The current query, for fluid interface
     */
    public function filterByFre($fre = null, $comparison = null)
    {
        if (is_array($fre)) {
            $useMinMax = false;
            if (isset($fre['min'])) {
                $this->addUsingAlias(ZwebCn3Peer::FRE, $fre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fre['max'])) {
                $this->addUsingAlias(ZwebCn3Peer::FRE, $fre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebCn3Peer::FRE, $fre, $comparison);
    }

    /**
     * Filter the query on the Spa column
     *
     * Example usage:
     * <code>
     * $query->filterBySpa(1234); // WHERE Spa = 1234
     * $query->filterBySpa(array(12, 34)); // WHERE Spa IN (12, 34)
     * $query->filterBySpa(array('min' => 12)); // WHERE Spa >= 12
     * $query->filterBySpa(array('max' => 12)); // WHERE Spa <= 12
     * </code>
     *
     * @param     mixed $spa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebCn3Query The current query, for fluid interface
     */
    public function filterBySpa($spa = null, $comparison = null)
    {
        if (is_array($spa)) {
            $useMinMax = false;
            if (isset($spa['min'])) {
                $this->addUsingAlias(ZwebCn3Peer::SPA, $spa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spa['max'])) {
                $this->addUsingAlias(ZwebCn3Peer::SPA, $spa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebCn3Peer::SPA, $spa, $comparison);
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
     * @return ZwebCn3Query The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(ZwebCn3Peer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(ZwebCn3Peer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebCn3Peer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the UnicodeText column
     *
     * Example usage:
     * <code>
     * $query->filterByUnicodetext('fooValue');   // WHERE UnicodeText = 'fooValue'
     * $query->filterByUnicodetext('%fooValue%'); // WHERE UnicodeText LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unicodetext The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebCn3Query The current query, for fluid interface
     */
    public function filterByUnicodetext($unicodetext = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unicodetext)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $unicodetext)) {
                $unicodetext = str_replace('*', '%', $unicodetext);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ZwebCn3Peer::UNICODETEXT, $unicodetext, $comparison);
    }

    /**
     * Filter the query on the Script column
     *
     * Example usage:
     * <code>
     * $query->filterByScript('fooValue');   // WHERE Script = 'fooValue'
     * $query->filterByScript('%fooValue%'); // WHERE Script LIKE '%fooValue%'
     * </code>
     *
     * @param     string $script The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebCn3Query The current query, for fluid interface
     */
    public function filterByScript($script = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($script)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $script)) {
                $script = str_replace('*', '%', $script);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ZwebCn3Peer::SCRIPT, $script, $comparison);
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
     * @return ZwebCn3Query The current query, for fluid interface
     */
    public function filterByPkid($pkid = null, $comparison = null)
    {
        if (is_array($pkid)) {
            $useMinMax = false;
            if (isset($pkid['min'])) {
                $this->addUsingAlias(ZwebCn3Peer::PKID, $pkid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pkid['max'])) {
                $this->addUsingAlias(ZwebCn3Peer::PKID, $pkid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebCn3Peer::PKID, $pkid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ZwebCn3 $zwebCn3 Object to remove from the list of results
     *
     * @return ZwebCn3Query The current query, for fluid interface
     */
    public function prune($zwebCn3 = null)
    {
        if ($zwebCn3) {
            $this->addUsingAlias(ZwebCn3Peer::PKID, $zwebCn3->getPkid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
