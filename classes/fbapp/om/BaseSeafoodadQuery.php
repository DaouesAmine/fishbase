<?php


/**
 * Base class that represents a query for the 'seafoodad' table.
 *
 *
 *
 * @method SeafoodadQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method SeafoodadQuery orderByGuideid($order = Criteria::ASC) Order by the GuideID column
 * @method SeafoodadQuery orderByCommonname($order = Criteria::ASC) Order by the CommonName column
 * @method SeafoodadQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method SeafoodadQuery orderBySlbspeccode($order = Criteria::ASC) Order by the SLBSpeccode column
 * @method SeafoodadQuery orderByGenus($order = Criteria::ASC) Order by the Genus column
 * @method SeafoodadQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method SeafoodadQuery orderBySeafoodgroup($order = Criteria::ASC) Order by the SeafoodGroup column
 * @method SeafoodadQuery orderByStatus($order = Criteria::ASC) Order by the Status column
 * @method SeafoodadQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method SeafoodadQuery orderByCCodeCaught($order = Criteria::ASC) Order by the c_code_caught column
 * @method SeafoodadQuery orderByGuideurl($order = Criteria::ASC) Order by the GuideURL column
 * @method SeafoodadQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method SeafoodadQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method SeafoodadQuery orderByStatusOrder($order = Criteria::ASC) Order by the status_order column
 *
 * @method SeafoodadQuery groupByAutoctr() Group by the autoctr column
 * @method SeafoodadQuery groupByGuideid() Group by the GuideID column
 * @method SeafoodadQuery groupByCommonname() Group by the CommonName column
 * @method SeafoodadQuery groupBySpeccode() Group by the Speccode column
 * @method SeafoodadQuery groupBySlbspeccode() Group by the SLBSpeccode column
 * @method SeafoodadQuery groupByGenus() Group by the Genus column
 * @method SeafoodadQuery groupBySpecies() Group by the Species column
 * @method SeafoodadQuery groupBySeafoodgroup() Group by the SeafoodGroup column
 * @method SeafoodadQuery groupByStatus() Group by the Status column
 * @method SeafoodadQuery groupByLocality() Group by the Locality column
 * @method SeafoodadQuery groupByCCodeCaught() Group by the c_code_caught column
 * @method SeafoodadQuery groupByGuideurl() Group by the GuideURL column
 * @method SeafoodadQuery groupByRemarks() Group by the Remarks column
 * @method SeafoodadQuery groupByDateentered() Group by the DateEntered column
 * @method SeafoodadQuery groupByStatusOrder() Group by the status_order column
 *
 * @method SeafoodadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SeafoodadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SeafoodadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Seafoodad findOne(PropelPDO $con = null) Return the first Seafoodad matching the query
 * @method Seafoodad findOneOrCreate(PropelPDO $con = null) Return the first Seafoodad matching the query, or a new Seafoodad object populated from the query conditions when no match is found
 *
 * @method Seafoodad findOneByGuideid(int $GuideID) Return the first Seafoodad filtered by the GuideID column
 * @method Seafoodad findOneByCommonname(string $CommonName) Return the first Seafoodad filtered by the CommonName column
 * @method Seafoodad findOneBySpeccode(int $Speccode) Return the first Seafoodad filtered by the Speccode column
 * @method Seafoodad findOneBySlbspeccode(int $SLBSpeccode) Return the first Seafoodad filtered by the SLBSpeccode column
 * @method Seafoodad findOneByGenus(string $Genus) Return the first Seafoodad filtered by the Genus column
 * @method Seafoodad findOneBySpecies(string $Species) Return the first Seafoodad filtered by the Species column
 * @method Seafoodad findOneBySeafoodgroup(string $SeafoodGroup) Return the first Seafoodad filtered by the SeafoodGroup column
 * @method Seafoodad findOneByStatus(string $Status) Return the first Seafoodad filtered by the Status column
 * @method Seafoodad findOneByLocality(string $Locality) Return the first Seafoodad filtered by the Locality column
 * @method Seafoodad findOneByCCodeCaught(string $c_code_caught) Return the first Seafoodad filtered by the c_code_caught column
 * @method Seafoodad findOneByGuideurl(string $GuideURL) Return the first Seafoodad filtered by the GuideURL column
 * @method Seafoodad findOneByRemarks(string $Remarks) Return the first Seafoodad filtered by the Remarks column
 * @method Seafoodad findOneByDateentered(string $DateEntered) Return the first Seafoodad filtered by the DateEntered column
 * @method Seafoodad findOneByStatusOrder(int $status_order) Return the first Seafoodad filtered by the status_order column
 *
 * @method array findByAutoctr(int $autoctr) Return Seafoodad objects filtered by the autoctr column
 * @method array findByGuideid(int $GuideID) Return Seafoodad objects filtered by the GuideID column
 * @method array findByCommonname(string $CommonName) Return Seafoodad objects filtered by the CommonName column
 * @method array findBySpeccode(int $Speccode) Return Seafoodad objects filtered by the Speccode column
 * @method array findBySlbspeccode(int $SLBSpeccode) Return Seafoodad objects filtered by the SLBSpeccode column
 * @method array findByGenus(string $Genus) Return Seafoodad objects filtered by the Genus column
 * @method array findBySpecies(string $Species) Return Seafoodad objects filtered by the Species column
 * @method array findBySeafoodgroup(string $SeafoodGroup) Return Seafoodad objects filtered by the SeafoodGroup column
 * @method array findByStatus(string $Status) Return Seafoodad objects filtered by the Status column
 * @method array findByLocality(string $Locality) Return Seafoodad objects filtered by the Locality column
 * @method array findByCCodeCaught(string $c_code_caught) Return Seafoodad objects filtered by the c_code_caught column
 * @method array findByGuideurl(string $GuideURL) Return Seafoodad objects filtered by the GuideURL column
 * @method array findByRemarks(string $Remarks) Return Seafoodad objects filtered by the Remarks column
 * @method array findByDateentered(string $DateEntered) Return Seafoodad objects filtered by the DateEntered column
 * @method array findByStatusOrder(int $status_order) Return Seafoodad objects filtered by the status_order column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseSeafoodadQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSeafoodadQuery object.
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
            $modelName = 'Seafoodad';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SeafoodadQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SeafoodadQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SeafoodadQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SeafoodadQuery) {
            return $criteria;
        }
        $query = new SeafoodadQuery(null, null, $modelAlias);

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
     * @return   Seafoodad|Seafoodad[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SeafoodadPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SeafoodadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Seafoodad A model object, or null if the key is not found
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
     * @return                 Seafoodad A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `GuideID`, `CommonName`, `Speccode`, `SLBSpeccode`, `Genus`, `Species`, `SeafoodGroup`, `Status`, `Locality`, `c_code_caught`, `GuideURL`, `Remarks`, `DateEntered`, `status_order` FROM `seafoodad` WHERE `autoctr` = :p0';
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
            $obj = new Seafoodad();
            $obj->hydrate($row);
            SeafoodadPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Seafoodad|Seafoodad[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Seafoodad[]|mixed the list of results, formatted by the current formatter
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
     * @return SeafoodadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SeafoodadPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SeafoodadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SeafoodadPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return SeafoodadQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(SeafoodadPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(SeafoodadPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SeafoodadPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the GuideID column
     *
     * Example usage:
     * <code>
     * $query->filterByGuideid(1234); // WHERE GuideID = 1234
     * $query->filterByGuideid(array(12, 34)); // WHERE GuideID IN (12, 34)
     * $query->filterByGuideid(array('min' => 12)); // WHERE GuideID >= 12
     * $query->filterByGuideid(array('max' => 12)); // WHERE GuideID <= 12
     * </code>
     *
     * @param     mixed $guideid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SeafoodadQuery The current query, for fluid interface
     */
    public function filterByGuideid($guideid = null, $comparison = null)
    {
        if (is_array($guideid)) {
            $useMinMax = false;
            if (isset($guideid['min'])) {
                $this->addUsingAlias(SeafoodadPeer::GUIDEID, $guideid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($guideid['max'])) {
                $this->addUsingAlias(SeafoodadPeer::GUIDEID, $guideid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SeafoodadPeer::GUIDEID, $guideid, $comparison);
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
     * @return SeafoodadQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SeafoodadPeer::COMMONNAME, $commonname, $comparison);
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
     * @return SeafoodadQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(SeafoodadPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(SeafoodadPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SeafoodadPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the SLBSpeccode column
     *
     * Example usage:
     * <code>
     * $query->filterBySlbspeccode(1234); // WHERE SLBSpeccode = 1234
     * $query->filterBySlbspeccode(array(12, 34)); // WHERE SLBSpeccode IN (12, 34)
     * $query->filterBySlbspeccode(array('min' => 12)); // WHERE SLBSpeccode >= 12
     * $query->filterBySlbspeccode(array('max' => 12)); // WHERE SLBSpeccode <= 12
     * </code>
     *
     * @param     mixed $slbspeccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SeafoodadQuery The current query, for fluid interface
     */
    public function filterBySlbspeccode($slbspeccode = null, $comparison = null)
    {
        if (is_array($slbspeccode)) {
            $useMinMax = false;
            if (isset($slbspeccode['min'])) {
                $this->addUsingAlias(SeafoodadPeer::SLBSPECCODE, $slbspeccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($slbspeccode['max'])) {
                $this->addUsingAlias(SeafoodadPeer::SLBSPECCODE, $slbspeccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SeafoodadPeer::SLBSPECCODE, $slbspeccode, $comparison);
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
     * @return SeafoodadQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SeafoodadPeer::GENUS, $genus, $comparison);
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
     * @return SeafoodadQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SeafoodadPeer::SPECIES, $species, $comparison);
    }

    /**
     * Filter the query on the SeafoodGroup column
     *
     * Example usage:
     * <code>
     * $query->filterBySeafoodgroup('fooValue');   // WHERE SeafoodGroup = 'fooValue'
     * $query->filterBySeafoodgroup('%fooValue%'); // WHERE SeafoodGroup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $seafoodgroup The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SeafoodadQuery The current query, for fluid interface
     */
    public function filterBySeafoodgroup($seafoodgroup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($seafoodgroup)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $seafoodgroup)) {
                $seafoodgroup = str_replace('*', '%', $seafoodgroup);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SeafoodadPeer::SEAFOODGROUP, $seafoodgroup, $comparison);
    }

    /**
     * Filter the query on the Status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus('fooValue');   // WHERE Status = 'fooValue'
     * $query->filterByStatus('%fooValue%'); // WHERE Status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $status The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SeafoodadQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $status)) {
                $status = str_replace('*', '%', $status);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SeafoodadPeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the Locality column
     *
     * Example usage:
     * <code>
     * $query->filterByLocality('fooValue');   // WHERE Locality = 'fooValue'
     * $query->filterByLocality('%fooValue%'); // WHERE Locality LIKE '%fooValue%'
     * </code>
     *
     * @param     string $locality The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SeafoodadQuery The current query, for fluid interface
     */
    public function filterByLocality($locality = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($locality)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $locality)) {
                $locality = str_replace('*', '%', $locality);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SeafoodadPeer::LOCALITY, $locality, $comparison);
    }

    /**
     * Filter the query on the c_code_caught column
     *
     * Example usage:
     * <code>
     * $query->filterByCCodeCaught('fooValue');   // WHERE c_code_caught = 'fooValue'
     * $query->filterByCCodeCaught('%fooValue%'); // WHERE c_code_caught LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cCodeCaught The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SeafoodadQuery The current query, for fluid interface
     */
    public function filterByCCodeCaught($cCodeCaught = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cCodeCaught)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cCodeCaught)) {
                $cCodeCaught = str_replace('*', '%', $cCodeCaught);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SeafoodadPeer::C_CODE_CAUGHT, $cCodeCaught, $comparison);
    }

    /**
     * Filter the query on the GuideURL column
     *
     * Example usage:
     * <code>
     * $query->filterByGuideurl('fooValue');   // WHERE GuideURL = 'fooValue'
     * $query->filterByGuideurl('%fooValue%'); // WHERE GuideURL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $guideurl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SeafoodadQuery The current query, for fluid interface
     */
    public function filterByGuideurl($guideurl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($guideurl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $guideurl)) {
                $guideurl = str_replace('*', '%', $guideurl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SeafoodadPeer::GUIDEURL, $guideurl, $comparison);
    }

    /**
     * Filter the query on the Remarks column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarks('fooValue');   // WHERE Remarks = 'fooValue'
     * $query->filterByRemarks('%fooValue%'); // WHERE Remarks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SeafoodadQuery The current query, for fluid interface
     */
    public function filterByRemarks($remarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarks)) {
                $remarks = str_replace('*', '%', $remarks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SeafoodadPeer::REMARKS, $remarks, $comparison);
    }

    /**
     * Filter the query on the DateEntered column
     *
     * Example usage:
     * <code>
     * $query->filterByDateentered('2011-03-14'); // WHERE DateEntered = '2011-03-14'
     * $query->filterByDateentered('now'); // WHERE DateEntered = '2011-03-14'
     * $query->filterByDateentered(array('max' => 'yesterday')); // WHERE DateEntered < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateentered The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SeafoodadQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(SeafoodadPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(SeafoodadPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SeafoodadPeer::DATEENTERED, $dateentered, $comparison);
    }

    /**
     * Filter the query on the status_order column
     *
     * Example usage:
     * <code>
     * $query->filterByStatusOrder(1234); // WHERE status_order = 1234
     * $query->filterByStatusOrder(array(12, 34)); // WHERE status_order IN (12, 34)
     * $query->filterByStatusOrder(array('min' => 12)); // WHERE status_order >= 12
     * $query->filterByStatusOrder(array('max' => 12)); // WHERE status_order <= 12
     * </code>
     *
     * @param     mixed $statusOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SeafoodadQuery The current query, for fluid interface
     */
    public function filterByStatusOrder($statusOrder = null, $comparison = null)
    {
        if (is_array($statusOrder)) {
            $useMinMax = false;
            if (isset($statusOrder['min'])) {
                $this->addUsingAlias(SeafoodadPeer::STATUS_ORDER, $statusOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statusOrder['max'])) {
                $this->addUsingAlias(SeafoodadPeer::STATUS_ORDER, $statusOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SeafoodadPeer::STATUS_ORDER, $statusOrder, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Seafoodad $seafoodad Object to remove from the list of results
     *
     * @return SeafoodadQuery The current query, for fluid interface
     */
    public function prune($seafoodad = null)
    {
        if ($seafoodad) {
            $this->addUsingAlias(SeafoodadPeer::AUTOCTR, $seafoodad->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
