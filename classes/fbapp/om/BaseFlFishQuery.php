<?php


/**
 * Base class that represents a query for the 'fl_fish' table.
 *
 *
 *
 * @method FlFishQuery orderByFishcode($order = Criteria::ASC) Order by the FishCode column
 * @method FlFishQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method FlFishQuery orderByStockcode($order = Criteria::ASC) Order by the Stockcode column
 * @method FlFishQuery orderByGenus($order = Criteria::ASC) Order by the Genus column
 * @method FlFishQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method FlFishQuery orderByFamily($order = Criteria::ASC) Order by the Family column
 * @method FlFishQuery orderByCommonname($order = Criteria::ASC) Order by the CommonName column
 * @method FlFishQuery orderByLocalname($order = Criteria::ASC) Order by the LocalName column
 * @method FlFishQuery orderByFishtype($order = Criteria::ASC) Order by the FishType column
 * @method FlFishQuery orderByEditable($order = Criteria::ASC) Order by the Editable column
 * @method FlFishQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method FlFishQuery groupByFishcode() Group by the FishCode column
 * @method FlFishQuery groupBySpeccode() Group by the Speccode column
 * @method FlFishQuery groupByStockcode() Group by the Stockcode column
 * @method FlFishQuery groupByGenus() Group by the Genus column
 * @method FlFishQuery groupBySpecies() Group by the Species column
 * @method FlFishQuery groupByFamily() Group by the Family column
 * @method FlFishQuery groupByCommonname() Group by the CommonName column
 * @method FlFishQuery groupByLocalname() Group by the LocalName column
 * @method FlFishQuery groupByFishtype() Group by the FishType column
 * @method FlFishQuery groupByEditable() Group by the Editable column
 * @method FlFishQuery groupByTs() Group by the TS column
 *
 * @method FlFishQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FlFishQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FlFishQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FlFish findOne(PropelPDO $con = null) Return the first FlFish matching the query
 * @method FlFish findOneOrCreate(PropelPDO $con = null) Return the first FlFish matching the query, or a new FlFish object populated from the query conditions when no match is found
 *
 * @method FlFish findOneBySpeccode(int $Speccode) Return the first FlFish filtered by the Speccode column
 * @method FlFish findOneByStockcode(int $Stockcode) Return the first FlFish filtered by the Stockcode column
 * @method FlFish findOneByGenus(string $Genus) Return the first FlFish filtered by the Genus column
 * @method FlFish findOneBySpecies(string $Species) Return the first FlFish filtered by the Species column
 * @method FlFish findOneByFamily(string $Family) Return the first FlFish filtered by the Family column
 * @method FlFish findOneByCommonname(string $CommonName) Return the first FlFish filtered by the CommonName column
 * @method FlFish findOneByLocalname(string $LocalName) Return the first FlFish filtered by the LocalName column
 * @method FlFish findOneByFishtype(string $FishType) Return the first FlFish filtered by the FishType column
 * @method FlFish findOneByEditable(string $Editable) Return the first FlFish filtered by the Editable column
 * @method FlFish findOneByTs(string $TS) Return the first FlFish filtered by the TS column
 *
 * @method array findByFishcode(int $FishCode) Return FlFish objects filtered by the FishCode column
 * @method array findBySpeccode(int $Speccode) Return FlFish objects filtered by the Speccode column
 * @method array findByStockcode(int $Stockcode) Return FlFish objects filtered by the Stockcode column
 * @method array findByGenus(string $Genus) Return FlFish objects filtered by the Genus column
 * @method array findBySpecies(string $Species) Return FlFish objects filtered by the Species column
 * @method array findByFamily(string $Family) Return FlFish objects filtered by the Family column
 * @method array findByCommonname(string $CommonName) Return FlFish objects filtered by the CommonName column
 * @method array findByLocalname(string $LocalName) Return FlFish objects filtered by the LocalName column
 * @method array findByFishtype(string $FishType) Return FlFish objects filtered by the FishType column
 * @method array findByEditable(string $Editable) Return FlFish objects filtered by the Editable column
 * @method array findByTs(string $TS) Return FlFish objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFlFishQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFlFishQuery object.
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
            $modelName = 'FlFish';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FlFishQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FlFishQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FlFishQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FlFishQuery) {
            return $criteria;
        }
        $query = new FlFishQuery(null, null, $modelAlias);

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
     * @return   FlFish|FlFish[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FlFishPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FlFishPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 FlFish A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByFishcode($key, $con = null)
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
     * @return                 FlFish A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `FishCode`, `Speccode`, `Stockcode`, `Genus`, `Species`, `Family`, `CommonName`, `LocalName`, `FishType`, `Editable`, `TS` FROM `fl_fish` WHERE `FishCode` = :p0';
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
            $obj = new FlFish();
            $obj->hydrate($row);
            FlFishPeer::addInstanceToPool($obj, (string) $key);
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
     * @return FlFish|FlFish[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|FlFish[]|mixed the list of results, formatted by the current formatter
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
     * @return FlFishQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FlFishPeer::FISHCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FlFishQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FlFishPeer::FISHCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the FishCode column
     *
     * Example usage:
     * <code>
     * $query->filterByFishcode(1234); // WHERE FishCode = 1234
     * $query->filterByFishcode(array(12, 34)); // WHERE FishCode IN (12, 34)
     * $query->filterByFishcode(array('min' => 12)); // WHERE FishCode >= 12
     * $query->filterByFishcode(array('max' => 12)); // WHERE FishCode <= 12
     * </code>
     *
     * @param     mixed $fishcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlFishQuery The current query, for fluid interface
     */
    public function filterByFishcode($fishcode = null, $comparison = null)
    {
        if (is_array($fishcode)) {
            $useMinMax = false;
            if (isset($fishcode['min'])) {
                $this->addUsingAlias(FlFishPeer::FISHCODE, $fishcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fishcode['max'])) {
                $this->addUsingAlias(FlFishPeer::FISHCODE, $fishcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlFishPeer::FISHCODE, $fishcode, $comparison);
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
     * @return FlFishQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(FlFishPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(FlFishPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlFishPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the Stockcode column
     *
     * Example usage:
     * <code>
     * $query->filterByStockcode(1234); // WHERE Stockcode = 1234
     * $query->filterByStockcode(array(12, 34)); // WHERE Stockcode IN (12, 34)
     * $query->filterByStockcode(array('min' => 12)); // WHERE Stockcode >= 12
     * $query->filterByStockcode(array('max' => 12)); // WHERE Stockcode <= 12
     * </code>
     *
     * @param     mixed $stockcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlFishQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(FlFishPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(FlFishPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlFishPeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the Genus column
     *
     * Example usage:
     * <code>
     * $query->filterByGenus('fooValue');   // WHERE Genus = 'fooValue'
     * $query->filterByGenus('%fooValue%'); // WHERE Genus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlFishQuery The current query, for fluid interface
     */
    public function filterByGenus($genus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($genus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $genus)) {
                $genus = str_replace('*', '%', $genus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlFishPeer::GENUS, $genus, $comparison);
    }

    /**
     * Filter the query on the Species column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecies('fooValue');   // WHERE Species = 'fooValue'
     * $query->filterBySpecies('%fooValue%'); // WHERE Species LIKE '%fooValue%'
     * </code>
     *
     * @param     string $species The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlFishQuery The current query, for fluid interface
     */
    public function filterBySpecies($species = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($species)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $species)) {
                $species = str_replace('*', '%', $species);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlFishPeer::SPECIES, $species, $comparison);
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
     * @return FlFishQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FlFishPeer::FAMILY, $family, $comparison);
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
     * @return FlFishQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FlFishPeer::COMMONNAME, $commonname, $comparison);
    }

    /**
     * Filter the query on the LocalName column
     *
     * Example usage:
     * <code>
     * $query->filterByLocalname('fooValue');   // WHERE LocalName = 'fooValue'
     * $query->filterByLocalname('%fooValue%'); // WHERE LocalName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $localname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlFishQuery The current query, for fluid interface
     */
    public function filterByLocalname($localname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($localname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $localname)) {
                $localname = str_replace('*', '%', $localname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlFishPeer::LOCALNAME, $localname, $comparison);
    }

    /**
     * Filter the query on the FishType column
     *
     * Example usage:
     * <code>
     * $query->filterByFishtype('fooValue');   // WHERE FishType = 'fooValue'
     * $query->filterByFishtype('%fooValue%'); // WHERE FishType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fishtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlFishQuery The current query, for fluid interface
     */
    public function filterByFishtype($fishtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fishtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fishtype)) {
                $fishtype = str_replace('*', '%', $fishtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlFishPeer::FISHTYPE, $fishtype, $comparison);
    }

    /**
     * Filter the query on the Editable column
     *
     * Example usage:
     * <code>
     * $query->filterByEditable('fooValue');   // WHERE Editable = 'fooValue'
     * $query->filterByEditable('%fooValue%'); // WHERE Editable LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editable The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlFishQuery The current query, for fluid interface
     */
    public function filterByEditable($editable = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editable)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editable)) {
                $editable = str_replace('*', '%', $editable);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlFishPeer::EDITABLE, $editable, $comparison);
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
     * @return FlFishQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(FlFishPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(FlFishPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlFishPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   FlFish $flFish Object to remove from the list of results
     *
     * @return FlFishQuery The current query, for fluid interface
     */
    public function prune($flFish = null)
    {
        if ($flFish) {
            $this->addUsingAlias(FlFishPeer::FISHCODE, $flFish->getFishcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
