<?php


/**
 * Base class that represents a query for the 'gazetteer' table.
 *
 *
 *
 * @method GazetteerQuery orderByGazetcode($order = Criteria::ASC) Order by the GazetCode column
 * @method GazetteerQuery orderByGazetteer($order = Criteria::ASC) Order by the Gazetteer column
 * @method GazetteerQuery orderByOthernames($order = Criteria::ASC) Order by the OtherNames column
 * @method GazetteerQuery orderByLocalitytype($order = Criteria::ASC) Order by the LocalityType column
 * @method GazetteerQuery orderBySeadrainage($order = Criteria::ASC) Order by the SeaDrainage column
 * @method GazetteerQuery orderByProvince($order = Criteria::ASC) Order by the Province column
 * @method GazetteerQuery orderByCCode($order = Criteria::ASC) Order by the C_CODE column
 * @method GazetteerQuery orderByAbb($order = Criteria::ASC) Order by the ABB column
 * @method GazetteerQuery orderByAreacodeinland($order = Criteria::ASC) Order by the AreaCodeInland column
 * @method GazetteerQuery orderByAreacodemarine($order = Criteria::ASC) Order by the AreaCodeMarine column
 * @method GazetteerQuery orderByLatitudedeg($order = Criteria::ASC) Order by the LatitudeDeg column
 * @method GazetteerQuery orderByLatitudemin($order = Criteria::ASC) Order by the LatitudeMin column
 * @method GazetteerQuery orderByNorthsouth($order = Criteria::ASC) Order by the NorthSouth column
 * @method GazetteerQuery orderByLongitudedeg($order = Criteria::ASC) Order by the LongitudeDeg column
 * @method GazetteerQuery orderByLongitudemin($order = Criteria::ASC) Order by the LongitudeMin column
 * @method GazetteerQuery orderByEastwest($order = Criteria::ASC) Order by the EastWest column
 * @method GazetteerQuery orderByAccuracy($order = Criteria::ASC) Order by the Accuracy column
 * @method GazetteerQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method GazetteerQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method GazetteerQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method GazetteerQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method GazetteerQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method GazetteerQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method GazetteerQuery orderByRemark($order = Criteria::ASC) Order by the Remark column
 * @method GazetteerQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method GazetteerQuery groupByGazetcode() Group by the GazetCode column
 * @method GazetteerQuery groupByGazetteer() Group by the Gazetteer column
 * @method GazetteerQuery groupByOthernames() Group by the OtherNames column
 * @method GazetteerQuery groupByLocalitytype() Group by the LocalityType column
 * @method GazetteerQuery groupBySeadrainage() Group by the SeaDrainage column
 * @method GazetteerQuery groupByProvince() Group by the Province column
 * @method GazetteerQuery groupByCCode() Group by the C_CODE column
 * @method GazetteerQuery groupByAbb() Group by the ABB column
 * @method GazetteerQuery groupByAreacodeinland() Group by the AreaCodeInland column
 * @method GazetteerQuery groupByAreacodemarine() Group by the AreaCodeMarine column
 * @method GazetteerQuery groupByLatitudedeg() Group by the LatitudeDeg column
 * @method GazetteerQuery groupByLatitudemin() Group by the LatitudeMin column
 * @method GazetteerQuery groupByNorthsouth() Group by the NorthSouth column
 * @method GazetteerQuery groupByLongitudedeg() Group by the LongitudeDeg column
 * @method GazetteerQuery groupByLongitudemin() Group by the LongitudeMin column
 * @method GazetteerQuery groupByEastwest() Group by the EastWest column
 * @method GazetteerQuery groupByAccuracy() Group by the Accuracy column
 * @method GazetteerQuery groupByEntered() Group by the Entered column
 * @method GazetteerQuery groupByDateentered() Group by the DateEntered column
 * @method GazetteerQuery groupByModified() Group by the Modified column
 * @method GazetteerQuery groupByDatemodified() Group by the DateModified column
 * @method GazetteerQuery groupByExpert() Group by the Expert column
 * @method GazetteerQuery groupByDatechecked() Group by the DateChecked column
 * @method GazetteerQuery groupByRemark() Group by the Remark column
 * @method GazetteerQuery groupByTs() Group by the TS column
 *
 * @method GazetteerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GazetteerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GazetteerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Gazetteer findOne(PropelPDO $con = null) Return the first Gazetteer matching the query
 * @method Gazetteer findOneOrCreate(PropelPDO $con = null) Return the first Gazetteer matching the query, or a new Gazetteer object populated from the query conditions when no match is found
 *
 * @method Gazetteer findOneByGazetteer(string $Gazetteer) Return the first Gazetteer filtered by the Gazetteer column
 * @method Gazetteer findOneByOthernames(string $OtherNames) Return the first Gazetteer filtered by the OtherNames column
 * @method Gazetteer findOneByLocalitytype(string $LocalityType) Return the first Gazetteer filtered by the LocalityType column
 * @method Gazetteer findOneBySeadrainage(string $SeaDrainage) Return the first Gazetteer filtered by the SeaDrainage column
 * @method Gazetteer findOneByProvince(string $Province) Return the first Gazetteer filtered by the Province column
 * @method Gazetteer findOneByCCode(string $C_CODE) Return the first Gazetteer filtered by the C_CODE column
 * @method Gazetteer findOneByAbb(string $ABB) Return the first Gazetteer filtered by the ABB column
 * @method Gazetteer findOneByAreacodeinland(int $AreaCodeInland) Return the first Gazetteer filtered by the AreaCodeInland column
 * @method Gazetteer findOneByAreacodemarine(int $AreaCodeMarine) Return the first Gazetteer filtered by the AreaCodeMarine column
 * @method Gazetteer findOneByLatitudedeg(int $LatitudeDeg) Return the first Gazetteer filtered by the LatitudeDeg column
 * @method Gazetteer findOneByLatitudemin(int $LatitudeMin) Return the first Gazetteer filtered by the LatitudeMin column
 * @method Gazetteer findOneByNorthsouth(string $NorthSouth) Return the first Gazetteer filtered by the NorthSouth column
 * @method Gazetteer findOneByLongitudedeg(int $LongitudeDeg) Return the first Gazetteer filtered by the LongitudeDeg column
 * @method Gazetteer findOneByLongitudemin(int $LongitudeMin) Return the first Gazetteer filtered by the LongitudeMin column
 * @method Gazetteer findOneByEastwest(string $EastWest) Return the first Gazetteer filtered by the EastWest column
 * @method Gazetteer findOneByAccuracy(string $Accuracy) Return the first Gazetteer filtered by the Accuracy column
 * @method Gazetteer findOneByEntered(int $Entered) Return the first Gazetteer filtered by the Entered column
 * @method Gazetteer findOneByDateentered(string $DateEntered) Return the first Gazetteer filtered by the DateEntered column
 * @method Gazetteer findOneByModified(int $Modified) Return the first Gazetteer filtered by the Modified column
 * @method Gazetteer findOneByDatemodified(string $DateModified) Return the first Gazetteer filtered by the DateModified column
 * @method Gazetteer findOneByExpert(int $Expert) Return the first Gazetteer filtered by the Expert column
 * @method Gazetteer findOneByDatechecked(string $DateChecked) Return the first Gazetteer filtered by the DateChecked column
 * @method Gazetteer findOneByRemark(string $Remark) Return the first Gazetteer filtered by the Remark column
 * @method Gazetteer findOneByTs(string $TS) Return the first Gazetteer filtered by the TS column
 *
 * @method array findByGazetcode(int $GazetCode) Return Gazetteer objects filtered by the GazetCode column
 * @method array findByGazetteer(string $Gazetteer) Return Gazetteer objects filtered by the Gazetteer column
 * @method array findByOthernames(string $OtherNames) Return Gazetteer objects filtered by the OtherNames column
 * @method array findByLocalitytype(string $LocalityType) Return Gazetteer objects filtered by the LocalityType column
 * @method array findBySeadrainage(string $SeaDrainage) Return Gazetteer objects filtered by the SeaDrainage column
 * @method array findByProvince(string $Province) Return Gazetteer objects filtered by the Province column
 * @method array findByCCode(string $C_CODE) Return Gazetteer objects filtered by the C_CODE column
 * @method array findByAbb(string $ABB) Return Gazetteer objects filtered by the ABB column
 * @method array findByAreacodeinland(int $AreaCodeInland) Return Gazetteer objects filtered by the AreaCodeInland column
 * @method array findByAreacodemarine(int $AreaCodeMarine) Return Gazetteer objects filtered by the AreaCodeMarine column
 * @method array findByLatitudedeg(int $LatitudeDeg) Return Gazetteer objects filtered by the LatitudeDeg column
 * @method array findByLatitudemin(int $LatitudeMin) Return Gazetteer objects filtered by the LatitudeMin column
 * @method array findByNorthsouth(string $NorthSouth) Return Gazetteer objects filtered by the NorthSouth column
 * @method array findByLongitudedeg(int $LongitudeDeg) Return Gazetteer objects filtered by the LongitudeDeg column
 * @method array findByLongitudemin(int $LongitudeMin) Return Gazetteer objects filtered by the LongitudeMin column
 * @method array findByEastwest(string $EastWest) Return Gazetteer objects filtered by the EastWest column
 * @method array findByAccuracy(string $Accuracy) Return Gazetteer objects filtered by the Accuracy column
 * @method array findByEntered(int $Entered) Return Gazetteer objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Gazetteer objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Gazetteer objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Gazetteer objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Gazetteer objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Gazetteer objects filtered by the DateChecked column
 * @method array findByRemark(string $Remark) Return Gazetteer objects filtered by the Remark column
 * @method array findByTs(string $TS) Return Gazetteer objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseGazetteerQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGazetteerQuery object.
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
            $modelName = 'Gazetteer';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GazetteerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GazetteerQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GazetteerQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GazetteerQuery) {
            return $criteria;
        }
        $query = new GazetteerQuery(null, null, $modelAlias);

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
     * @return   Gazetteer|Gazetteer[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GazetteerPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GazetteerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Gazetteer A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByGazetcode($key, $con = null)
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
     * @return                 Gazetteer A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `GazetCode`, `Gazetteer`, `OtherNames`, `LocalityType`, `SeaDrainage`, `Province`, `C_CODE`, `ABB`, `AreaCodeInland`, `AreaCodeMarine`, `LatitudeDeg`, `LatitudeMin`, `NorthSouth`, `LongitudeDeg`, `LongitudeMin`, `EastWest`, `Accuracy`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `Remark`, `TS` FROM `gazetteer` WHERE `GazetCode` = :p0';
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
            $obj = new Gazetteer();
            $obj->hydrate($row);
            GazetteerPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Gazetteer|Gazetteer[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Gazetteer[]|mixed the list of results, formatted by the current formatter
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
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GazetteerPeer::GAZETCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GazetteerPeer::GAZETCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the GazetCode column
     *
     * Example usage:
     * <code>
     * $query->filterByGazetcode(1234); // WHERE GazetCode = 1234
     * $query->filterByGazetcode(array(12, 34)); // WHERE GazetCode IN (12, 34)
     * $query->filterByGazetcode(array('min' => 12)); // WHERE GazetCode >= 12
     * $query->filterByGazetcode(array('max' => 12)); // WHERE GazetCode <= 12
     * </code>
     *
     * @param     mixed $gazetcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByGazetcode($gazetcode = null, $comparison = null)
    {
        if (is_array($gazetcode)) {
            $useMinMax = false;
            if (isset($gazetcode['min'])) {
                $this->addUsingAlias(GazetteerPeer::GAZETCODE, $gazetcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gazetcode['max'])) {
                $this->addUsingAlias(GazetteerPeer::GAZETCODE, $gazetcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::GAZETCODE, $gazetcode, $comparison);
    }

    /**
     * Filter the query on the Gazetteer column
     *
     * Example usage:
     * <code>
     * $query->filterByGazetteer('fooValue');   // WHERE Gazetteer = 'fooValue'
     * $query->filterByGazetteer('%fooValue%'); // WHERE Gazetteer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gazetteer The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByGazetteer($gazetteer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gazetteer)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gazetteer)) {
                $gazetteer = str_replace('*', '%', $gazetteer);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::GAZETTEER, $gazetteer, $comparison);
    }

    /**
     * Filter the query on the OtherNames column
     *
     * Example usage:
     * <code>
     * $query->filterByOthernames('fooValue');   // WHERE OtherNames = 'fooValue'
     * $query->filterByOthernames('%fooValue%'); // WHERE OtherNames LIKE '%fooValue%'
     * </code>
     *
     * @param     string $othernames The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByOthernames($othernames = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($othernames)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $othernames)) {
                $othernames = str_replace('*', '%', $othernames);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::OTHERNAMES, $othernames, $comparison);
    }

    /**
     * Filter the query on the LocalityType column
     *
     * Example usage:
     * <code>
     * $query->filterByLocalitytype('fooValue');   // WHERE LocalityType = 'fooValue'
     * $query->filterByLocalitytype('%fooValue%'); // WHERE LocalityType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $localitytype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByLocalitytype($localitytype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($localitytype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $localitytype)) {
                $localitytype = str_replace('*', '%', $localitytype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::LOCALITYTYPE, $localitytype, $comparison);
    }

    /**
     * Filter the query on the SeaDrainage column
     *
     * Example usage:
     * <code>
     * $query->filterBySeadrainage('fooValue');   // WHERE SeaDrainage = 'fooValue'
     * $query->filterBySeadrainage('%fooValue%'); // WHERE SeaDrainage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $seadrainage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterBySeadrainage($seadrainage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($seadrainage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $seadrainage)) {
                $seadrainage = str_replace('*', '%', $seadrainage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::SEADRAINAGE, $seadrainage, $comparison);
    }

    /**
     * Filter the query on the Province column
     *
     * Example usage:
     * <code>
     * $query->filterByProvince('fooValue');   // WHERE Province = 'fooValue'
     * $query->filterByProvince('%fooValue%'); // WHERE Province LIKE '%fooValue%'
     * </code>
     *
     * @param     string $province The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByProvince($province = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($province)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $province)) {
                $province = str_replace('*', '%', $province);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::PROVINCE, $province, $comparison);
    }

    /**
     * Filter the query on the C_CODE column
     *
     * Example usage:
     * <code>
     * $query->filterByCCode('fooValue');   // WHERE C_CODE = 'fooValue'
     * $query->filterByCCode('%fooValue%'); // WHERE C_CODE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GazetteerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GazetteerPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the ABB column
     *
     * Example usage:
     * <code>
     * $query->filterByAbb('fooValue');   // WHERE ABB = 'fooValue'
     * $query->filterByAbb('%fooValue%'); // WHERE ABB LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abb The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByAbb($abb = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abb)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abb)) {
                $abb = str_replace('*', '%', $abb);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::ABB, $abb, $comparison);
    }

    /**
     * Filter the query on the AreaCodeInland column
     *
     * Example usage:
     * <code>
     * $query->filterByAreacodeinland(1234); // WHERE AreaCodeInland = 1234
     * $query->filterByAreacodeinland(array(12, 34)); // WHERE AreaCodeInland IN (12, 34)
     * $query->filterByAreacodeinland(array('min' => 12)); // WHERE AreaCodeInland >= 12
     * $query->filterByAreacodeinland(array('max' => 12)); // WHERE AreaCodeInland <= 12
     * </code>
     *
     * @param     mixed $areacodeinland The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByAreacodeinland($areacodeinland = null, $comparison = null)
    {
        if (is_array($areacodeinland)) {
            $useMinMax = false;
            if (isset($areacodeinland['min'])) {
                $this->addUsingAlias(GazetteerPeer::AREACODEINLAND, $areacodeinland['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areacodeinland['max'])) {
                $this->addUsingAlias(GazetteerPeer::AREACODEINLAND, $areacodeinland['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::AREACODEINLAND, $areacodeinland, $comparison);
    }

    /**
     * Filter the query on the AreaCodeMarine column
     *
     * Example usage:
     * <code>
     * $query->filterByAreacodemarine(1234); // WHERE AreaCodeMarine = 1234
     * $query->filterByAreacodemarine(array(12, 34)); // WHERE AreaCodeMarine IN (12, 34)
     * $query->filterByAreacodemarine(array('min' => 12)); // WHERE AreaCodeMarine >= 12
     * $query->filterByAreacodemarine(array('max' => 12)); // WHERE AreaCodeMarine <= 12
     * </code>
     *
     * @param     mixed $areacodemarine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByAreacodemarine($areacodemarine = null, $comparison = null)
    {
        if (is_array($areacodemarine)) {
            $useMinMax = false;
            if (isset($areacodemarine['min'])) {
                $this->addUsingAlias(GazetteerPeer::AREACODEMARINE, $areacodemarine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areacodemarine['max'])) {
                $this->addUsingAlias(GazetteerPeer::AREACODEMARINE, $areacodemarine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::AREACODEMARINE, $areacodemarine, $comparison);
    }

    /**
     * Filter the query on the LatitudeDeg column
     *
     * Example usage:
     * <code>
     * $query->filterByLatitudedeg(1234); // WHERE LatitudeDeg = 1234
     * $query->filterByLatitudedeg(array(12, 34)); // WHERE LatitudeDeg IN (12, 34)
     * $query->filterByLatitudedeg(array('min' => 12)); // WHERE LatitudeDeg >= 12
     * $query->filterByLatitudedeg(array('max' => 12)); // WHERE LatitudeDeg <= 12
     * </code>
     *
     * @param     mixed $latitudedeg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByLatitudedeg($latitudedeg = null, $comparison = null)
    {
        if (is_array($latitudedeg)) {
            $useMinMax = false;
            if (isset($latitudedeg['min'])) {
                $this->addUsingAlias(GazetteerPeer::LATITUDEDEG, $latitudedeg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latitudedeg['max'])) {
                $this->addUsingAlias(GazetteerPeer::LATITUDEDEG, $latitudedeg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::LATITUDEDEG, $latitudedeg, $comparison);
    }

    /**
     * Filter the query on the LatitudeMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLatitudemin(1234); // WHERE LatitudeMin = 1234
     * $query->filterByLatitudemin(array(12, 34)); // WHERE LatitudeMin IN (12, 34)
     * $query->filterByLatitudemin(array('min' => 12)); // WHERE LatitudeMin >= 12
     * $query->filterByLatitudemin(array('max' => 12)); // WHERE LatitudeMin <= 12
     * </code>
     *
     * @param     mixed $latitudemin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByLatitudemin($latitudemin = null, $comparison = null)
    {
        if (is_array($latitudemin)) {
            $useMinMax = false;
            if (isset($latitudemin['min'])) {
                $this->addUsingAlias(GazetteerPeer::LATITUDEMIN, $latitudemin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latitudemin['max'])) {
                $this->addUsingAlias(GazetteerPeer::LATITUDEMIN, $latitudemin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::LATITUDEMIN, $latitudemin, $comparison);
    }

    /**
     * Filter the query on the NorthSouth column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthsouth('fooValue');   // WHERE NorthSouth = 'fooValue'
     * $query->filterByNorthsouth('%fooValue%'); // WHERE NorthSouth LIKE '%fooValue%'
     * </code>
     *
     * @param     string $northsouth The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByNorthsouth($northsouth = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($northsouth)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $northsouth)) {
                $northsouth = str_replace('*', '%', $northsouth);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::NORTHSOUTH, $northsouth, $comparison);
    }

    /**
     * Filter the query on the LongitudeDeg column
     *
     * Example usage:
     * <code>
     * $query->filterByLongitudedeg(1234); // WHERE LongitudeDeg = 1234
     * $query->filterByLongitudedeg(array(12, 34)); // WHERE LongitudeDeg IN (12, 34)
     * $query->filterByLongitudedeg(array('min' => 12)); // WHERE LongitudeDeg >= 12
     * $query->filterByLongitudedeg(array('max' => 12)); // WHERE LongitudeDeg <= 12
     * </code>
     *
     * @param     mixed $longitudedeg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByLongitudedeg($longitudedeg = null, $comparison = null)
    {
        if (is_array($longitudedeg)) {
            $useMinMax = false;
            if (isset($longitudedeg['min'])) {
                $this->addUsingAlias(GazetteerPeer::LONGITUDEDEG, $longitudedeg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longitudedeg['max'])) {
                $this->addUsingAlias(GazetteerPeer::LONGITUDEDEG, $longitudedeg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::LONGITUDEDEG, $longitudedeg, $comparison);
    }

    /**
     * Filter the query on the LongitudeMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLongitudemin(1234); // WHERE LongitudeMin = 1234
     * $query->filterByLongitudemin(array(12, 34)); // WHERE LongitudeMin IN (12, 34)
     * $query->filterByLongitudemin(array('min' => 12)); // WHERE LongitudeMin >= 12
     * $query->filterByLongitudemin(array('max' => 12)); // WHERE LongitudeMin <= 12
     * </code>
     *
     * @param     mixed $longitudemin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByLongitudemin($longitudemin = null, $comparison = null)
    {
        if (is_array($longitudemin)) {
            $useMinMax = false;
            if (isset($longitudemin['min'])) {
                $this->addUsingAlias(GazetteerPeer::LONGITUDEMIN, $longitudemin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longitudemin['max'])) {
                $this->addUsingAlias(GazetteerPeer::LONGITUDEMIN, $longitudemin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::LONGITUDEMIN, $longitudemin, $comparison);
    }

    /**
     * Filter the query on the EastWest column
     *
     * Example usage:
     * <code>
     * $query->filterByEastwest('fooValue');   // WHERE EastWest = 'fooValue'
     * $query->filterByEastwest('%fooValue%'); // WHERE EastWest LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eastwest The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByEastwest($eastwest = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eastwest)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eastwest)) {
                $eastwest = str_replace('*', '%', $eastwest);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::EASTWEST, $eastwest, $comparison);
    }

    /**
     * Filter the query on the Accuracy column
     *
     * Example usage:
     * <code>
     * $query->filterByAccuracy('fooValue');   // WHERE Accuracy = 'fooValue'
     * $query->filterByAccuracy('%fooValue%'); // WHERE Accuracy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accuracy The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByAccuracy($accuracy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accuracy)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accuracy)) {
                $accuracy = str_replace('*', '%', $accuracy);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::ACCURACY, $accuracy, $comparison);
    }

    /**
     * Filter the query on the Entered column
     *
     * Example usage:
     * <code>
     * $query->filterByEntered(1234); // WHERE Entered = 1234
     * $query->filterByEntered(array(12, 34)); // WHERE Entered IN (12, 34)
     * $query->filterByEntered(array('min' => 12)); // WHERE Entered >= 12
     * $query->filterByEntered(array('max' => 12)); // WHERE Entered <= 12
     * </code>
     *
     * @param     mixed $entered The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(GazetteerPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(GazetteerPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::ENTERED, $entered, $comparison);
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
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(GazetteerPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(GazetteerPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(GazetteerPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(GazetteerPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::MODIFIED, $modified, $comparison);
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
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(GazetteerPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(GazetteerPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::DATEMODIFIED, $datemodified, $comparison);
    }

    /**
     * Filter the query on the Expert column
     *
     * Example usage:
     * <code>
     * $query->filterByExpert(1234); // WHERE Expert = 1234
     * $query->filterByExpert(array(12, 34)); // WHERE Expert IN (12, 34)
     * $query->filterByExpert(array('min' => 12)); // WHERE Expert >= 12
     * $query->filterByExpert(array('max' => 12)); // WHERE Expert <= 12
     * </code>
     *
     * @param     mixed $expert The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(GazetteerPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(GazetteerPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::EXPERT, $expert, $comparison);
    }

    /**
     * Filter the query on the DateChecked column
     *
     * Example usage:
     * <code>
     * $query->filterByDatechecked('2011-03-14'); // WHERE DateChecked = '2011-03-14'
     * $query->filterByDatechecked('now'); // WHERE DateChecked = '2011-03-14'
     * $query->filterByDatechecked(array('max' => 'yesterday')); // WHERE DateChecked < '2011-03-13'
     * </code>
     *
     * @param     mixed $datechecked The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(GazetteerPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(GazetteerPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the Remark column
     *
     * Example usage:
     * <code>
     * $query->filterByRemark('fooValue');   // WHERE Remark = 'fooValue'
     * $query->filterByRemark('%fooValue%'); // WHERE Remark LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remark The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByRemark($remark = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remark)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remark)) {
                $remark = str_replace('*', '%', $remark);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::REMARK, $remark, $comparison);
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
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(GazetteerPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(GazetteerPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GazetteerPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Gazetteer $gazetteer Object to remove from the list of results
     *
     * @return GazetteerQuery The current query, for fluid interface
     */
    public function prune($gazetteer = null)
    {
        if ($gazetteer) {
            $this->addUsingAlias(GazetteerPeer::GAZETCODE, $gazetteer->getGazetcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
