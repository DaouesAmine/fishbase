<?php


/**
 * Base class that represents a query for the 'zweb_foridentification' table.
 *
 *
 *
 * @method ZwebForidentificationQuery orderByFamcode($order = Criteria::ASC) Order by the FamCode column
 * @method ZwebForidentificationQuery orderByFamily($order = Criteria::ASC) Order by the Family column
 * @method ZwebForidentificationQuery orderByCommonname($order = Criteria::ASC) Order by the CommonName column
 * @method ZwebForidentificationQuery orderByOrdnum($order = Criteria::ASC) Order by the Ordnum column
 * @method ZwebForidentificationQuery orderByAspinesmin($order = Criteria::ASC) Order by the AspinesMin column
 * @method ZwebForidentificationQuery orderByAspinesmax($order = Criteria::ASC) Order by the AspinesMax column
 * @method ZwebForidentificationQuery orderByDspinesmin($order = Criteria::ASC) Order by the DspinesMin column
 * @method ZwebForidentificationQuery orderByDspinesmax($order = Criteria::ASC) Order by the DspinesMax column
 * @method ZwebForidentificationQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method ZwebForidentificationQuery orderByAreacode($order = Criteria::ASC) Order by the AreaCode column
 * @method ZwebForidentificationQuery orderByFam($order = Criteria::ASC) Order by the FAM column
 * @method ZwebForidentificationQuery orderByECode($order = Criteria::ASC) Order by the e_code column
 * @method ZwebForidentificationQuery orderByTs($order = Criteria::ASC) Order by the TS column
 * @method ZwebForidentificationQuery orderByPkid($order = Criteria::ASC) Order by the PKID column
 *
 * @method ZwebForidentificationQuery groupByFamcode() Group by the FamCode column
 * @method ZwebForidentificationQuery groupByFamily() Group by the Family column
 * @method ZwebForidentificationQuery groupByCommonname() Group by the CommonName column
 * @method ZwebForidentificationQuery groupByOrdnum() Group by the Ordnum column
 * @method ZwebForidentificationQuery groupByAspinesmin() Group by the AspinesMin column
 * @method ZwebForidentificationQuery groupByAspinesmax() Group by the AspinesMax column
 * @method ZwebForidentificationQuery groupByDspinesmin() Group by the DspinesMin column
 * @method ZwebForidentificationQuery groupByDspinesmax() Group by the DspinesMax column
 * @method ZwebForidentificationQuery groupByCCode() Group by the C_Code column
 * @method ZwebForidentificationQuery groupByAreacode() Group by the AreaCode column
 * @method ZwebForidentificationQuery groupByFam() Group by the FAM column
 * @method ZwebForidentificationQuery groupByECode() Group by the e_code column
 * @method ZwebForidentificationQuery groupByTs() Group by the TS column
 * @method ZwebForidentificationQuery groupByPkid() Group by the PKID column
 *
 * @method ZwebForidentificationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ZwebForidentificationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ZwebForidentificationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ZwebForidentification findOne(PropelPDO $con = null) Return the first ZwebForidentification matching the query
 * @method ZwebForidentification findOneOrCreate(PropelPDO $con = null) Return the first ZwebForidentification matching the query, or a new ZwebForidentification object populated from the query conditions when no match is found
 *
 * @method ZwebForidentification findOneByFamcode(int $FamCode) Return the first ZwebForidentification filtered by the FamCode column
 * @method ZwebForidentification findOneByFamily(string $Family) Return the first ZwebForidentification filtered by the Family column
 * @method ZwebForidentification findOneByCommonname(string $CommonName) Return the first ZwebForidentification filtered by the CommonName column
 * @method ZwebForidentification findOneByOrdnum(int $Ordnum) Return the first ZwebForidentification filtered by the Ordnum column
 * @method ZwebForidentification findOneByAspinesmin(int $AspinesMin) Return the first ZwebForidentification filtered by the AspinesMin column
 * @method ZwebForidentification findOneByAspinesmax(int $AspinesMax) Return the first ZwebForidentification filtered by the AspinesMax column
 * @method ZwebForidentification findOneByDspinesmin(int $DspinesMin) Return the first ZwebForidentification filtered by the DspinesMin column
 * @method ZwebForidentification findOneByDspinesmax(int $DspinesMax) Return the first ZwebForidentification filtered by the DspinesMax column
 * @method ZwebForidentification findOneByCCode(string $C_Code) Return the first ZwebForidentification filtered by the C_Code column
 * @method ZwebForidentification findOneByAreacode(int $AreaCode) Return the first ZwebForidentification filtered by the AreaCode column
 * @method ZwebForidentification findOneByFam(string $FAM) Return the first ZwebForidentification filtered by the FAM column
 * @method ZwebForidentification findOneByECode(int $e_code) Return the first ZwebForidentification filtered by the e_code column
 * @method ZwebForidentification findOneByTs(string $TS) Return the first ZwebForidentification filtered by the TS column
 *
 * @method array findByFamcode(int $FamCode) Return ZwebForidentification objects filtered by the FamCode column
 * @method array findByFamily(string $Family) Return ZwebForidentification objects filtered by the Family column
 * @method array findByCommonname(string $CommonName) Return ZwebForidentification objects filtered by the CommonName column
 * @method array findByOrdnum(int $Ordnum) Return ZwebForidentification objects filtered by the Ordnum column
 * @method array findByAspinesmin(int $AspinesMin) Return ZwebForidentification objects filtered by the AspinesMin column
 * @method array findByAspinesmax(int $AspinesMax) Return ZwebForidentification objects filtered by the AspinesMax column
 * @method array findByDspinesmin(int $DspinesMin) Return ZwebForidentification objects filtered by the DspinesMin column
 * @method array findByDspinesmax(int $DspinesMax) Return ZwebForidentification objects filtered by the DspinesMax column
 * @method array findByCCode(string $C_Code) Return ZwebForidentification objects filtered by the C_Code column
 * @method array findByAreacode(int $AreaCode) Return ZwebForidentification objects filtered by the AreaCode column
 * @method array findByFam(string $FAM) Return ZwebForidentification objects filtered by the FAM column
 * @method array findByECode(int $e_code) Return ZwebForidentification objects filtered by the e_code column
 * @method array findByTs(string $TS) Return ZwebForidentification objects filtered by the TS column
 * @method array findByPkid(string $PKID) Return ZwebForidentification objects filtered by the PKID column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseZwebForidentificationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseZwebForidentificationQuery object.
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
            $modelName = 'ZwebForidentification';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ZwebForidentificationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ZwebForidentificationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ZwebForidentificationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ZwebForidentificationQuery) {
            return $criteria;
        }
        $query = new ZwebForidentificationQuery(null, null, $modelAlias);

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
     * @return   ZwebForidentification|ZwebForidentification[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ZwebForidentificationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ZwebForidentificationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ZwebForidentification A model object, or null if the key is not found
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
     * @return                 ZwebForidentification A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `FamCode`, `Family`, `CommonName`, `Ordnum`, `AspinesMin`, `AspinesMax`, `DspinesMin`, `DspinesMax`, `C_Code`, `AreaCode`, `FAM`, `e_code`, `TS`, `PKID` FROM `zweb_foridentification` WHERE `PKID` = :p0';
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
            $obj = new ZwebForidentification();
            $obj->hydrate($row);
            ZwebForidentificationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ZwebForidentification|ZwebForidentification[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ZwebForidentification[]|mixed the list of results, formatted by the current formatter
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
     * @return ZwebForidentificationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ZwebForidentificationPeer::PKID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ZwebForidentificationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ZwebForidentificationPeer::PKID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the FamCode column
     *
     * Example usage:
     * <code>
     * $query->filterByFamcode(1234); // WHERE FamCode = 1234
     * $query->filterByFamcode(array(12, 34)); // WHERE FamCode IN (12, 34)
     * $query->filterByFamcode(array('min' => 12)); // WHERE FamCode >= 12
     * $query->filterByFamcode(array('max' => 12)); // WHERE FamCode <= 12
     * </code>
     *
     * @param     mixed $famcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebForidentificationQuery The current query, for fluid interface
     */
    public function filterByFamcode($famcode = null, $comparison = null)
    {
        if (is_array($famcode)) {
            $useMinMax = false;
            if (isset($famcode['min'])) {
                $this->addUsingAlias(ZwebForidentificationPeer::FAMCODE, $famcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famcode['max'])) {
                $this->addUsingAlias(ZwebForidentificationPeer::FAMCODE, $famcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebForidentificationPeer::FAMCODE, $famcode, $comparison);
    }

    /**
     * Filter the query on the Family column
     *
     * Example usage:
     * <code>
     * $query->filterByFamily('fooValue');   // WHERE Family = 'fooValue'
     * $query->filterByFamily('%fooValue%'); // WHERE Family LIKE '%fooValue%'
     * </code>
     *
     * @param     string $family The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebForidentificationQuery The current query, for fluid interface
     */
    public function filterByFamily($family = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($family)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $family)) {
                $family = str_replace('*', '%', $family);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ZwebForidentificationPeer::FAMILY, $family, $comparison);
    }

    /**
     * Filter the query on the CommonName column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonname('fooValue');   // WHERE CommonName = 'fooValue'
     * $query->filterByCommonname('%fooValue%'); // WHERE CommonName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebForidentificationQuery The current query, for fluid interface
     */
    public function filterByCommonname($commonname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonname)) {
                $commonname = str_replace('*', '%', $commonname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ZwebForidentificationPeer::COMMONNAME, $commonname, $comparison);
    }

    /**
     * Filter the query on the Ordnum column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdnum(1234); // WHERE Ordnum = 1234
     * $query->filterByOrdnum(array(12, 34)); // WHERE Ordnum IN (12, 34)
     * $query->filterByOrdnum(array('min' => 12)); // WHERE Ordnum >= 12
     * $query->filterByOrdnum(array('max' => 12)); // WHERE Ordnum <= 12
     * </code>
     *
     * @param     mixed $ordnum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebForidentificationQuery The current query, for fluid interface
     */
    public function filterByOrdnum($ordnum = null, $comparison = null)
    {
        if (is_array($ordnum)) {
            $useMinMax = false;
            if (isset($ordnum['min'])) {
                $this->addUsingAlias(ZwebForidentificationPeer::ORDNUM, $ordnum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordnum['max'])) {
                $this->addUsingAlias(ZwebForidentificationPeer::ORDNUM, $ordnum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebForidentificationPeer::ORDNUM, $ordnum, $comparison);
    }

    /**
     * Filter the query on the AspinesMin column
     *
     * Example usage:
     * <code>
     * $query->filterByAspinesmin(1234); // WHERE AspinesMin = 1234
     * $query->filterByAspinesmin(array(12, 34)); // WHERE AspinesMin IN (12, 34)
     * $query->filterByAspinesmin(array('min' => 12)); // WHERE AspinesMin >= 12
     * $query->filterByAspinesmin(array('max' => 12)); // WHERE AspinesMin <= 12
     * </code>
     *
     * @param     mixed $aspinesmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebForidentificationQuery The current query, for fluid interface
     */
    public function filterByAspinesmin($aspinesmin = null, $comparison = null)
    {
        if (is_array($aspinesmin)) {
            $useMinMax = false;
            if (isset($aspinesmin['min'])) {
                $this->addUsingAlias(ZwebForidentificationPeer::ASPINESMIN, $aspinesmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aspinesmin['max'])) {
                $this->addUsingAlias(ZwebForidentificationPeer::ASPINESMIN, $aspinesmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebForidentificationPeer::ASPINESMIN, $aspinesmin, $comparison);
    }

    /**
     * Filter the query on the AspinesMax column
     *
     * Example usage:
     * <code>
     * $query->filterByAspinesmax(1234); // WHERE AspinesMax = 1234
     * $query->filterByAspinesmax(array(12, 34)); // WHERE AspinesMax IN (12, 34)
     * $query->filterByAspinesmax(array('min' => 12)); // WHERE AspinesMax >= 12
     * $query->filterByAspinesmax(array('max' => 12)); // WHERE AspinesMax <= 12
     * </code>
     *
     * @param     mixed $aspinesmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebForidentificationQuery The current query, for fluid interface
     */
    public function filterByAspinesmax($aspinesmax = null, $comparison = null)
    {
        if (is_array($aspinesmax)) {
            $useMinMax = false;
            if (isset($aspinesmax['min'])) {
                $this->addUsingAlias(ZwebForidentificationPeer::ASPINESMAX, $aspinesmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aspinesmax['max'])) {
                $this->addUsingAlias(ZwebForidentificationPeer::ASPINESMAX, $aspinesmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebForidentificationPeer::ASPINESMAX, $aspinesmax, $comparison);
    }

    /**
     * Filter the query on the DspinesMin column
     *
     * Example usage:
     * <code>
     * $query->filterByDspinesmin(1234); // WHERE DspinesMin = 1234
     * $query->filterByDspinesmin(array(12, 34)); // WHERE DspinesMin IN (12, 34)
     * $query->filterByDspinesmin(array('min' => 12)); // WHERE DspinesMin >= 12
     * $query->filterByDspinesmin(array('max' => 12)); // WHERE DspinesMin <= 12
     * </code>
     *
     * @param     mixed $dspinesmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebForidentificationQuery The current query, for fluid interface
     */
    public function filterByDspinesmin($dspinesmin = null, $comparison = null)
    {
        if (is_array($dspinesmin)) {
            $useMinMax = false;
            if (isset($dspinesmin['min'])) {
                $this->addUsingAlias(ZwebForidentificationPeer::DSPINESMIN, $dspinesmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dspinesmin['max'])) {
                $this->addUsingAlias(ZwebForidentificationPeer::DSPINESMIN, $dspinesmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebForidentificationPeer::DSPINESMIN, $dspinesmin, $comparison);
    }

    /**
     * Filter the query on the DspinesMax column
     *
     * Example usage:
     * <code>
     * $query->filterByDspinesmax(1234); // WHERE DspinesMax = 1234
     * $query->filterByDspinesmax(array(12, 34)); // WHERE DspinesMax IN (12, 34)
     * $query->filterByDspinesmax(array('min' => 12)); // WHERE DspinesMax >= 12
     * $query->filterByDspinesmax(array('max' => 12)); // WHERE DspinesMax <= 12
     * </code>
     *
     * @param     mixed $dspinesmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebForidentificationQuery The current query, for fluid interface
     */
    public function filterByDspinesmax($dspinesmax = null, $comparison = null)
    {
        if (is_array($dspinesmax)) {
            $useMinMax = false;
            if (isset($dspinesmax['min'])) {
                $this->addUsingAlias(ZwebForidentificationPeer::DSPINESMAX, $dspinesmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dspinesmax['max'])) {
                $this->addUsingAlias(ZwebForidentificationPeer::DSPINESMAX, $dspinesmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebForidentificationPeer::DSPINESMAX, $dspinesmax, $comparison);
    }

    /**
     * Filter the query on the C_Code column
     *
     * Example usage:
     * <code>
     * $query->filterByCCode('fooValue');   // WHERE C_Code = 'fooValue'
     * $query->filterByCCode('%fooValue%'); // WHERE C_Code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebForidentificationQuery The current query, for fluid interface
     */
    public function filterByCCode($cCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cCode)) {
                $cCode = str_replace('*', '%', $cCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ZwebForidentificationPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the AreaCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAreacode(1234); // WHERE AreaCode = 1234
     * $query->filterByAreacode(array(12, 34)); // WHERE AreaCode IN (12, 34)
     * $query->filterByAreacode(array('min' => 12)); // WHERE AreaCode >= 12
     * $query->filterByAreacode(array('max' => 12)); // WHERE AreaCode <= 12
     * </code>
     *
     * @param     mixed $areacode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebForidentificationQuery The current query, for fluid interface
     */
    public function filterByAreacode($areacode = null, $comparison = null)
    {
        if (is_array($areacode)) {
            $useMinMax = false;
            if (isset($areacode['min'])) {
                $this->addUsingAlias(ZwebForidentificationPeer::AREACODE, $areacode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areacode['max'])) {
                $this->addUsingAlias(ZwebForidentificationPeer::AREACODE, $areacode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebForidentificationPeer::AREACODE, $areacode, $comparison);
    }

    /**
     * Filter the query on the FAM column
     *
     * Example usage:
     * <code>
     * $query->filterByFam('fooValue');   // WHERE FAM = 'fooValue'
     * $query->filterByFam('%fooValue%'); // WHERE FAM LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebForidentificationQuery The current query, for fluid interface
     */
    public function filterByFam($fam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fam)) {
                $fam = str_replace('*', '%', $fam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ZwebForidentificationPeer::FAM, $fam, $comparison);
    }

    /**
     * Filter the query on the e_code column
     *
     * Example usage:
     * <code>
     * $query->filterByECode(1234); // WHERE e_code = 1234
     * $query->filterByECode(array(12, 34)); // WHERE e_code IN (12, 34)
     * $query->filterByECode(array('min' => 12)); // WHERE e_code >= 12
     * $query->filterByECode(array('max' => 12)); // WHERE e_code <= 12
     * </code>
     *
     * @param     mixed $eCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebForidentificationQuery The current query, for fluid interface
     */
    public function filterByECode($eCode = null, $comparison = null)
    {
        if (is_array($eCode)) {
            $useMinMax = false;
            if (isset($eCode['min'])) {
                $this->addUsingAlias(ZwebForidentificationPeer::E_CODE, $eCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eCode['max'])) {
                $this->addUsingAlias(ZwebForidentificationPeer::E_CODE, $eCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebForidentificationPeer::E_CODE, $eCode, $comparison);
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
     * @return ZwebForidentificationQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(ZwebForidentificationPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(ZwebForidentificationPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebForidentificationPeer::TS, $ts, $comparison);
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
     * @return ZwebForidentificationQuery The current query, for fluid interface
     */
    public function filterByPkid($pkid = null, $comparison = null)
    {
        if (is_array($pkid)) {
            $useMinMax = false;
            if (isset($pkid['min'])) {
                $this->addUsingAlias(ZwebForidentificationPeer::PKID, $pkid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pkid['max'])) {
                $this->addUsingAlias(ZwebForidentificationPeer::PKID, $pkid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebForidentificationPeer::PKID, $pkid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ZwebForidentification $zwebForidentification Object to remove from the list of results
     *
     * @return ZwebForidentificationQuery The current query, for fluid interface
     */
    public function prune($zwebForidentification = null)
    {
        if ($zwebForidentification) {
            $this->addUsingAlias(ZwebForidentificationPeer::PKID, $zwebForidentification->getPkid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
