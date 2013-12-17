<?php


/**
 * Base class that represents a query for the 'oceanprovincesref' table.
 *
 *
 *
 * @method OceanprovincesrefQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method OceanprovincesrefQuery orderByRegionno($order = Criteria::ASC) Order by the RegionNo column
 * @method OceanprovincesrefQuery orderByRegioncode($order = Criteria::ASC) Order by the RegionCode column
 * @method OceanprovincesrefQuery orderByDomainno($order = Criteria::ASC) Order by the DomainNo column
 * @method OceanprovincesrefQuery orderByDomain($order = Criteria::ASC) Order by the Domain column
 * @method OceanprovincesrefQuery orderByRegion($order = Criteria::ASC) Order by the Region column
 * @method OceanprovincesrefQuery orderByArea($order = Criteria::ASC) Order by the Area column
 * @method OceanprovincesrefQuery orderByPrimprod1($order = Criteria::ASC) Order by the PrimProd1 column
 * @method OceanprovincesrefQuery orderByPrimprod2($order = Criteria::ASC) Order by the PrimProd2 column
 * @method OceanprovincesrefQuery orderByPrimprod3($order = Criteria::ASC) Order by the PrimProd3 column
 * @method OceanprovincesrefQuery orderByRegiondescription($order = Criteria::ASC) Order by the RegionDescription column
 * @method OceanprovincesrefQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method OceanprovincesrefQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method OceanprovincesrefQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method OceanprovincesrefQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method OceanprovincesrefQuery groupByAutoctr() Group by the AutoCtr column
 * @method OceanprovincesrefQuery groupByRegionno() Group by the RegionNo column
 * @method OceanprovincesrefQuery groupByRegioncode() Group by the RegionCode column
 * @method OceanprovincesrefQuery groupByDomainno() Group by the DomainNo column
 * @method OceanprovincesrefQuery groupByDomain() Group by the Domain column
 * @method OceanprovincesrefQuery groupByRegion() Group by the Region column
 * @method OceanprovincesrefQuery groupByArea() Group by the Area column
 * @method OceanprovincesrefQuery groupByPrimprod1() Group by the PrimProd1 column
 * @method OceanprovincesrefQuery groupByPrimprod2() Group by the PrimProd2 column
 * @method OceanprovincesrefQuery groupByPrimprod3() Group by the PrimProd3 column
 * @method OceanprovincesrefQuery groupByRegiondescription() Group by the RegionDescription column
 * @method OceanprovincesrefQuery groupByComment() Group by the Comment column
 * @method OceanprovincesrefQuery groupByModified() Group by the Modified column
 * @method OceanprovincesrefQuery groupByDatemodified() Group by the DateModified column
 * @method OceanprovincesrefQuery groupByTs() Group by the TS column
 *
 * @method OceanprovincesrefQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OceanprovincesrefQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OceanprovincesrefQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Oceanprovincesref findOne(PropelPDO $con = null) Return the first Oceanprovincesref matching the query
 * @method Oceanprovincesref findOneOrCreate(PropelPDO $con = null) Return the first Oceanprovincesref matching the query, or a new Oceanprovincesref object populated from the query conditions when no match is found
 *
 * @method Oceanprovincesref findOneByRegionno(int $RegionNo) Return the first Oceanprovincesref filtered by the RegionNo column
 * @method Oceanprovincesref findOneByRegioncode(string $RegionCode) Return the first Oceanprovincesref filtered by the RegionCode column
 * @method Oceanprovincesref findOneByDomainno(int $DomainNo) Return the first Oceanprovincesref filtered by the DomainNo column
 * @method Oceanprovincesref findOneByDomain(string $Domain) Return the first Oceanprovincesref filtered by the Domain column
 * @method Oceanprovincesref findOneByRegion(string $Region) Return the first Oceanprovincesref filtered by the Region column
 * @method Oceanprovincesref findOneByArea(double $Area) Return the first Oceanprovincesref filtered by the Area column
 * @method Oceanprovincesref findOneByPrimprod1(double $PrimProd1) Return the first Oceanprovincesref filtered by the PrimProd1 column
 * @method Oceanprovincesref findOneByPrimprod2(double $PrimProd2) Return the first Oceanprovincesref filtered by the PrimProd2 column
 * @method Oceanprovincesref findOneByPrimprod3(double $PrimProd3) Return the first Oceanprovincesref filtered by the PrimProd3 column
 * @method Oceanprovincesref findOneByRegiondescription(string $RegionDescription) Return the first Oceanprovincesref filtered by the RegionDescription column
 * @method Oceanprovincesref findOneByComment(string $Comment) Return the first Oceanprovincesref filtered by the Comment column
 * @method Oceanprovincesref findOneByModified(int $Modified) Return the first Oceanprovincesref filtered by the Modified column
 * @method Oceanprovincesref findOneByDatemodified(string $DateModified) Return the first Oceanprovincesref filtered by the DateModified column
 * @method Oceanprovincesref findOneByTs(string $TS) Return the first Oceanprovincesref filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return Oceanprovincesref objects filtered by the AutoCtr column
 * @method array findByRegionno(int $RegionNo) Return Oceanprovincesref objects filtered by the RegionNo column
 * @method array findByRegioncode(string $RegionCode) Return Oceanprovincesref objects filtered by the RegionCode column
 * @method array findByDomainno(int $DomainNo) Return Oceanprovincesref objects filtered by the DomainNo column
 * @method array findByDomain(string $Domain) Return Oceanprovincesref objects filtered by the Domain column
 * @method array findByRegion(string $Region) Return Oceanprovincesref objects filtered by the Region column
 * @method array findByArea(double $Area) Return Oceanprovincesref objects filtered by the Area column
 * @method array findByPrimprod1(double $PrimProd1) Return Oceanprovincesref objects filtered by the PrimProd1 column
 * @method array findByPrimprod2(double $PrimProd2) Return Oceanprovincesref objects filtered by the PrimProd2 column
 * @method array findByPrimprod3(double $PrimProd3) Return Oceanprovincesref objects filtered by the PrimProd3 column
 * @method array findByRegiondescription(string $RegionDescription) Return Oceanprovincesref objects filtered by the RegionDescription column
 * @method array findByComment(string $Comment) Return Oceanprovincesref objects filtered by the Comment column
 * @method array findByModified(int $Modified) Return Oceanprovincesref objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Oceanprovincesref objects filtered by the DateModified column
 * @method array findByTs(string $TS) Return Oceanprovincesref objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseOceanprovincesrefQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOceanprovincesrefQuery object.
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
            $modelName = 'Oceanprovincesref';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OceanprovincesrefQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OceanprovincesrefQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OceanprovincesrefQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OceanprovincesrefQuery) {
            return $criteria;
        }
        $query = new OceanprovincesrefQuery(null, null, $modelAlias);

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
     * @return   Oceanprovincesref|Oceanprovincesref[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OceanprovincesrefPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OceanprovincesrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Oceanprovincesref A model object, or null if the key is not found
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
     * @return                 Oceanprovincesref A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `RegionNo`, `RegionCode`, `DomainNo`, `Domain`, `Region`, `Area`, `PrimProd1`, `PrimProd2`, `PrimProd3`, `RegionDescription`, `Comment`, `Modified`, `DateModified`, `TS` FROM `oceanprovincesref` WHERE `AutoCtr` = :p0';
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
            $obj = new Oceanprovincesref();
            $obj->hydrate($row);
            OceanprovincesrefPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Oceanprovincesref|Oceanprovincesref[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Oceanprovincesref[]|mixed the list of results, formatted by the current formatter
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
     * @return OceanprovincesrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OceanprovincesrefPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OceanprovincesrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OceanprovincesrefPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return OceanprovincesrefQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(OceanprovincesrefPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(OceanprovincesrefPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovincesrefPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the RegionNo column
     *
     * Example usage:
     * <code>
     * $query->filterByRegionno(1234); // WHERE RegionNo = 1234
     * $query->filterByRegionno(array(12, 34)); // WHERE RegionNo IN (12, 34)
     * $query->filterByRegionno(array('min' => 12)); // WHERE RegionNo >= 12
     * $query->filterByRegionno(array('max' => 12)); // WHERE RegionNo <= 12
     * </code>
     *
     * @param     mixed $regionno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OceanprovincesrefQuery The current query, for fluid interface
     */
    public function filterByRegionno($regionno = null, $comparison = null)
    {
        if (is_array($regionno)) {
            $useMinMax = false;
            if (isset($regionno['min'])) {
                $this->addUsingAlias(OceanprovincesrefPeer::REGIONNO, $regionno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($regionno['max'])) {
                $this->addUsingAlias(OceanprovincesrefPeer::REGIONNO, $regionno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovincesrefPeer::REGIONNO, $regionno, $comparison);
    }

    /**
     * Filter the query on the RegionCode column
     *
     * Example usage:
     * <code>
     * $query->filterByRegioncode('fooValue');   // WHERE RegionCode = 'fooValue'
     * $query->filterByRegioncode('%fooValue%'); // WHERE RegionCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $regioncode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OceanprovincesrefQuery The current query, for fluid interface
     */
    public function filterByRegioncode($regioncode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($regioncode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $regioncode)) {
                $regioncode = str_replace('*', '%', $regioncode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OceanprovincesrefPeer::REGIONCODE, $regioncode, $comparison);
    }

    /**
     * Filter the query on the DomainNo column
     *
     * Example usage:
     * <code>
     * $query->filterByDomainno(1234); // WHERE DomainNo = 1234
     * $query->filterByDomainno(array(12, 34)); // WHERE DomainNo IN (12, 34)
     * $query->filterByDomainno(array('min' => 12)); // WHERE DomainNo >= 12
     * $query->filterByDomainno(array('max' => 12)); // WHERE DomainNo <= 12
     * </code>
     *
     * @param     mixed $domainno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OceanprovincesrefQuery The current query, for fluid interface
     */
    public function filterByDomainno($domainno = null, $comparison = null)
    {
        if (is_array($domainno)) {
            $useMinMax = false;
            if (isset($domainno['min'])) {
                $this->addUsingAlias(OceanprovincesrefPeer::DOMAINNO, $domainno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($domainno['max'])) {
                $this->addUsingAlias(OceanprovincesrefPeer::DOMAINNO, $domainno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovincesrefPeer::DOMAINNO, $domainno, $comparison);
    }

    /**
     * Filter the query on the Domain column
     *
     * Example usage:
     * <code>
     * $query->filterByDomain('fooValue');   // WHERE Domain = 'fooValue'
     * $query->filterByDomain('%fooValue%'); // WHERE Domain LIKE '%fooValue%'
     * </code>
     *
     * @param     string $domain The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OceanprovincesrefQuery The current query, for fluid interface
     */
    public function filterByDomain($domain = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($domain)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $domain)) {
                $domain = str_replace('*', '%', $domain);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OceanprovincesrefPeer::DOMAIN, $domain, $comparison);
    }

    /**
     * Filter the query on the Region column
     *
     * Example usage:
     * <code>
     * $query->filterByRegion('fooValue');   // WHERE Region = 'fooValue'
     * $query->filterByRegion('%fooValue%'); // WHERE Region LIKE '%fooValue%'
     * </code>
     *
     * @param     string $region The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OceanprovincesrefQuery The current query, for fluid interface
     */
    public function filterByRegion($region = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($region)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $region)) {
                $region = str_replace('*', '%', $region);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OceanprovincesrefPeer::REGION, $region, $comparison);
    }

    /**
     * Filter the query on the Area column
     *
     * Example usage:
     * <code>
     * $query->filterByArea(1234); // WHERE Area = 1234
     * $query->filterByArea(array(12, 34)); // WHERE Area IN (12, 34)
     * $query->filterByArea(array('min' => 12)); // WHERE Area >= 12
     * $query->filterByArea(array('max' => 12)); // WHERE Area <= 12
     * </code>
     *
     * @param     mixed $area The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OceanprovincesrefQuery The current query, for fluid interface
     */
    public function filterByArea($area = null, $comparison = null)
    {
        if (is_array($area)) {
            $useMinMax = false;
            if (isset($area['min'])) {
                $this->addUsingAlias(OceanprovincesrefPeer::AREA, $area['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($area['max'])) {
                $this->addUsingAlias(OceanprovincesrefPeer::AREA, $area['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovincesrefPeer::AREA, $area, $comparison);
    }

    /**
     * Filter the query on the PrimProd1 column
     *
     * Example usage:
     * <code>
     * $query->filterByPrimprod1(1234); // WHERE PrimProd1 = 1234
     * $query->filterByPrimprod1(array(12, 34)); // WHERE PrimProd1 IN (12, 34)
     * $query->filterByPrimprod1(array('min' => 12)); // WHERE PrimProd1 >= 12
     * $query->filterByPrimprod1(array('max' => 12)); // WHERE PrimProd1 <= 12
     * </code>
     *
     * @param     mixed $primprod1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OceanprovincesrefQuery The current query, for fluid interface
     */
    public function filterByPrimprod1($primprod1 = null, $comparison = null)
    {
        if (is_array($primprod1)) {
            $useMinMax = false;
            if (isset($primprod1['min'])) {
                $this->addUsingAlias(OceanprovincesrefPeer::PRIMPROD1, $primprod1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($primprod1['max'])) {
                $this->addUsingAlias(OceanprovincesrefPeer::PRIMPROD1, $primprod1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovincesrefPeer::PRIMPROD1, $primprod1, $comparison);
    }

    /**
     * Filter the query on the PrimProd2 column
     *
     * Example usage:
     * <code>
     * $query->filterByPrimprod2(1234); // WHERE PrimProd2 = 1234
     * $query->filterByPrimprod2(array(12, 34)); // WHERE PrimProd2 IN (12, 34)
     * $query->filterByPrimprod2(array('min' => 12)); // WHERE PrimProd2 >= 12
     * $query->filterByPrimprod2(array('max' => 12)); // WHERE PrimProd2 <= 12
     * </code>
     *
     * @param     mixed $primprod2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OceanprovincesrefQuery The current query, for fluid interface
     */
    public function filterByPrimprod2($primprod2 = null, $comparison = null)
    {
        if (is_array($primprod2)) {
            $useMinMax = false;
            if (isset($primprod2['min'])) {
                $this->addUsingAlias(OceanprovincesrefPeer::PRIMPROD2, $primprod2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($primprod2['max'])) {
                $this->addUsingAlias(OceanprovincesrefPeer::PRIMPROD2, $primprod2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovincesrefPeer::PRIMPROD2, $primprod2, $comparison);
    }

    /**
     * Filter the query on the PrimProd3 column
     *
     * Example usage:
     * <code>
     * $query->filterByPrimprod3(1234); // WHERE PrimProd3 = 1234
     * $query->filterByPrimprod3(array(12, 34)); // WHERE PrimProd3 IN (12, 34)
     * $query->filterByPrimprod3(array('min' => 12)); // WHERE PrimProd3 >= 12
     * $query->filterByPrimprod3(array('max' => 12)); // WHERE PrimProd3 <= 12
     * </code>
     *
     * @param     mixed $primprod3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OceanprovincesrefQuery The current query, for fluid interface
     */
    public function filterByPrimprod3($primprod3 = null, $comparison = null)
    {
        if (is_array($primprod3)) {
            $useMinMax = false;
            if (isset($primprod3['min'])) {
                $this->addUsingAlias(OceanprovincesrefPeer::PRIMPROD3, $primprod3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($primprod3['max'])) {
                $this->addUsingAlias(OceanprovincesrefPeer::PRIMPROD3, $primprod3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovincesrefPeer::PRIMPROD3, $primprod3, $comparison);
    }

    /**
     * Filter the query on the RegionDescription column
     *
     * Example usage:
     * <code>
     * $query->filterByRegiondescription('fooValue');   // WHERE RegionDescription = 'fooValue'
     * $query->filterByRegiondescription('%fooValue%'); // WHERE RegionDescription LIKE '%fooValue%'
     * </code>
     *
     * @param     string $regiondescription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OceanprovincesrefQuery The current query, for fluid interface
     */
    public function filterByRegiondescription($regiondescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($regiondescription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $regiondescription)) {
                $regiondescription = str_replace('*', '%', $regiondescription);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OceanprovincesrefPeer::REGIONDESCRIPTION, $regiondescription, $comparison);
    }

    /**
     * Filter the query on the Comment column
     *
     * Example usage:
     * <code>
     * $query->filterByComment('fooValue');   // WHERE Comment = 'fooValue'
     * $query->filterByComment('%fooValue%'); // WHERE Comment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OceanprovincesrefQuery The current query, for fluid interface
     */
    public function filterByComment($comment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comment)) {
                $comment = str_replace('*', '%', $comment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OceanprovincesrefPeer::COMMENT, $comment, $comparison);
    }

    /**
     * Filter the query on the Modified column
     *
     * Example usage:
     * <code>
     * $query->filterByModified(1234); // WHERE Modified = 1234
     * $query->filterByModified(array(12, 34)); // WHERE Modified IN (12, 34)
     * $query->filterByModified(array('min' => 12)); // WHERE Modified >= 12
     * $query->filterByModified(array('max' => 12)); // WHERE Modified <= 12
     * </code>
     *
     * @param     mixed $modified The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OceanprovincesrefQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(OceanprovincesrefPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(OceanprovincesrefPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovincesrefPeer::MODIFIED, $modified, $comparison);
    }

    /**
     * Filter the query on the DateModified column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodified('2011-03-14'); // WHERE DateModified = '2011-03-14'
     * $query->filterByDatemodified('now'); // WHERE DateModified = '2011-03-14'
     * $query->filterByDatemodified(array('max' => 'yesterday')); // WHERE DateModified < '2011-03-13'
     * </code>
     *
     * @param     mixed $datemodified The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OceanprovincesrefQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(OceanprovincesrefPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(OceanprovincesrefPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovincesrefPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return OceanprovincesrefQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(OceanprovincesrefPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(OceanprovincesrefPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovincesrefPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Oceanprovincesref $oceanprovincesref Object to remove from the list of results
     *
     * @return OceanprovincesrefQuery The current query, for fluid interface
     */
    public function prune($oceanprovincesref = null)
    {
        if ($oceanprovincesref) {
            $this->addUsingAlias(OceanprovincesrefPeer::AUTOCTR, $oceanprovincesref->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
