<?php


/**
 * Base class that represents a query for the 'countrysubref' table.
 *
 *
 *
 * @method CountrysubrefQuery orderByCsubCode($order = Criteria::ASC) Order by the CSub_Code column
 * @method CountrysubrefQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method CountrysubrefQuery orderByCountrysub($order = Criteria::ASC) Order by the CountrySub column
 * @method CountrysubrefQuery orderByOthername($order = Criteria::ASC) Order by the OtherName column
 * @method CountrysubrefQuery orderByCountrysubtype($order = Criteria::ASC) Order by the CountrySubType column
 * @method CountrysubrefQuery orderByCountrysubrank($order = Criteria::ASC) Order by the CountrySubRank column
 * @method CountrysubrefQuery orderByComments($order = Criteria::ASC) Order by the Comments column
 * @method CountrysubrefQuery orderByNorthernlatitude($order = Criteria::ASC) Order by the NorthernLatitude column
 * @method CountrysubrefQuery orderByNorthernlatitudens($order = Criteria::ASC) Order by the NorthernLatitudeNS column
 * @method CountrysubrefQuery orderBySouthernlatitude($order = Criteria::ASC) Order by the SouthernLatitude column
 * @method CountrysubrefQuery orderBySouthernlatitudens($order = Criteria::ASC) Order by the SouthernLatitudeNS column
 * @method CountrysubrefQuery orderByEasternlongitude($order = Criteria::ASC) Order by the EasternLongitude column
 * @method CountrysubrefQuery orderByEasternlongitudeew($order = Criteria::ASC) Order by the EasternLongitudeEW column
 * @method CountrysubrefQuery orderByWesternlongitude($order = Criteria::ASC) Order by the WesternLongitude column
 * @method CountrysubrefQuery orderByWesternlongitudeew($order = Criteria::ASC) Order by the WesternLongitudeEW column
 * @method CountrysubrefQuery orderByCapital($order = Criteria::ASC) Order by the Capital column
 * @method CountrysubrefQuery orderByLatdec($order = Criteria::ASC) Order by the LatDec column
 * @method CountrysubrefQuery orderByNorthsouth($order = Criteria::ASC) Order by the NorthSouth column
 * @method CountrysubrefQuery orderByLongdec($order = Criteria::ASC) Order by the LongDec column
 * @method CountrysubrefQuery orderByEastwest($order = Criteria::ASC) Order by the EastWest column
 * @method CountrysubrefQuery orderByPolarboreal($order = Criteria::ASC) Order by the PolarBoreal column
 * @method CountrysubrefQuery orderByTemperate($order = Criteria::ASC) Order by the Temperate column
 * @method CountrysubrefQuery orderBySubtropical($order = Criteria::ASC) Order by the Subtropical column
 * @method CountrysubrefQuery orderByTropical($order = Criteria::ASC) Order by the Tropical column
 * @method CountrysubrefQuery orderByAreacodeinland($order = Criteria::ASC) Order by the AreaCodeInland column
 * @method CountrysubrefQuery orderByAreacodemarinei($order = Criteria::ASC) Order by the AreaCodeMarineI column
 * @method CountrysubrefQuery orderByAreacodemarineii($order = Criteria::ASC) Order by the AreaCodeMarineII column
 * @method CountrysubrefQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method CountrysubrefQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method CountrysubrefQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method CountrysubrefQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method CountrysubrefQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method CountrysubrefQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method CountrysubrefQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method CountrysubrefQuery groupByCsubCode() Group by the CSub_Code column
 * @method CountrysubrefQuery groupByCCode() Group by the C_Code column
 * @method CountrysubrefQuery groupByCountrysub() Group by the CountrySub column
 * @method CountrysubrefQuery groupByOthername() Group by the OtherName column
 * @method CountrysubrefQuery groupByCountrysubtype() Group by the CountrySubType column
 * @method CountrysubrefQuery groupByCountrysubrank() Group by the CountrySubRank column
 * @method CountrysubrefQuery groupByComments() Group by the Comments column
 * @method CountrysubrefQuery groupByNorthernlatitude() Group by the NorthernLatitude column
 * @method CountrysubrefQuery groupByNorthernlatitudens() Group by the NorthernLatitudeNS column
 * @method CountrysubrefQuery groupBySouthernlatitude() Group by the SouthernLatitude column
 * @method CountrysubrefQuery groupBySouthernlatitudens() Group by the SouthernLatitudeNS column
 * @method CountrysubrefQuery groupByEasternlongitude() Group by the EasternLongitude column
 * @method CountrysubrefQuery groupByEasternlongitudeew() Group by the EasternLongitudeEW column
 * @method CountrysubrefQuery groupByWesternlongitude() Group by the WesternLongitude column
 * @method CountrysubrefQuery groupByWesternlongitudeew() Group by the WesternLongitudeEW column
 * @method CountrysubrefQuery groupByCapital() Group by the Capital column
 * @method CountrysubrefQuery groupByLatdec() Group by the LatDec column
 * @method CountrysubrefQuery groupByNorthsouth() Group by the NorthSouth column
 * @method CountrysubrefQuery groupByLongdec() Group by the LongDec column
 * @method CountrysubrefQuery groupByEastwest() Group by the EastWest column
 * @method CountrysubrefQuery groupByPolarboreal() Group by the PolarBoreal column
 * @method CountrysubrefQuery groupByTemperate() Group by the Temperate column
 * @method CountrysubrefQuery groupBySubtropical() Group by the Subtropical column
 * @method CountrysubrefQuery groupByTropical() Group by the Tropical column
 * @method CountrysubrefQuery groupByAreacodeinland() Group by the AreaCodeInland column
 * @method CountrysubrefQuery groupByAreacodemarinei() Group by the AreaCodeMarineI column
 * @method CountrysubrefQuery groupByAreacodemarineii() Group by the AreaCodeMarineII column
 * @method CountrysubrefQuery groupByEntered() Group by the Entered column
 * @method CountrysubrefQuery groupByDateentered() Group by the DateEntered column
 * @method CountrysubrefQuery groupByModified() Group by the Modified column
 * @method CountrysubrefQuery groupByDatemodified() Group by the DateModified column
 * @method CountrysubrefQuery groupByExpert() Group by the Expert column
 * @method CountrysubrefQuery groupByDatechecked() Group by the DateChecked column
 * @method CountrysubrefQuery groupByTs() Group by the TS column
 *
 * @method CountrysubrefQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CountrysubrefQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CountrysubrefQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Countrysubref findOne(PropelPDO $con = null) Return the first Countrysubref matching the query
 * @method Countrysubref findOneOrCreate(PropelPDO $con = null) Return the first Countrysubref matching the query, or a new Countrysubref object populated from the query conditions when no match is found
 *
 * @method Countrysubref findOneByCCode(string $C_Code) Return the first Countrysubref filtered by the C_Code column
 * @method Countrysubref findOneByCountrysub(string $CountrySub) Return the first Countrysubref filtered by the CountrySub column
 * @method Countrysubref findOneByOthername(string $OtherName) Return the first Countrysubref filtered by the OtherName column
 * @method Countrysubref findOneByCountrysubtype(string $CountrySubType) Return the first Countrysubref filtered by the CountrySubType column
 * @method Countrysubref findOneByCountrysubrank(int $CountrySubRank) Return the first Countrysubref filtered by the CountrySubRank column
 * @method Countrysubref findOneByComments(string $Comments) Return the first Countrysubref filtered by the Comments column
 * @method Countrysubref findOneByNorthernlatitude(int $NorthernLatitude) Return the first Countrysubref filtered by the NorthernLatitude column
 * @method Countrysubref findOneByNorthernlatitudens(string $NorthernLatitudeNS) Return the first Countrysubref filtered by the NorthernLatitudeNS column
 * @method Countrysubref findOneBySouthernlatitude(int $SouthernLatitude) Return the first Countrysubref filtered by the SouthernLatitude column
 * @method Countrysubref findOneBySouthernlatitudens(string $SouthernLatitudeNS) Return the first Countrysubref filtered by the SouthernLatitudeNS column
 * @method Countrysubref findOneByEasternlongitude(int $EasternLongitude) Return the first Countrysubref filtered by the EasternLongitude column
 * @method Countrysubref findOneByEasternlongitudeew(string $EasternLongitudeEW) Return the first Countrysubref filtered by the EasternLongitudeEW column
 * @method Countrysubref findOneByWesternlongitude(int $WesternLongitude) Return the first Countrysubref filtered by the WesternLongitude column
 * @method Countrysubref findOneByWesternlongitudeew(string $WesternLongitudeEW) Return the first Countrysubref filtered by the WesternLongitudeEW column
 * @method Countrysubref findOneByCapital(string $Capital) Return the first Countrysubref filtered by the Capital column
 * @method Countrysubref findOneByLatdec(double $LatDec) Return the first Countrysubref filtered by the LatDec column
 * @method Countrysubref findOneByNorthsouth(string $NorthSouth) Return the first Countrysubref filtered by the NorthSouth column
 * @method Countrysubref findOneByLongdec(double $LongDec) Return the first Countrysubref filtered by the LongDec column
 * @method Countrysubref findOneByEastwest(string $EastWest) Return the first Countrysubref filtered by the EastWest column
 * @method Countrysubref findOneByPolarboreal(boolean $PolarBoreal) Return the first Countrysubref filtered by the PolarBoreal column
 * @method Countrysubref findOneByTemperate(boolean $Temperate) Return the first Countrysubref filtered by the Temperate column
 * @method Countrysubref findOneBySubtropical(boolean $Subtropical) Return the first Countrysubref filtered by the Subtropical column
 * @method Countrysubref findOneByTropical(boolean $Tropical) Return the first Countrysubref filtered by the Tropical column
 * @method Countrysubref findOneByAreacodeinland(int $AreaCodeInland) Return the first Countrysubref filtered by the AreaCodeInland column
 * @method Countrysubref findOneByAreacodemarinei(int $AreaCodeMarineI) Return the first Countrysubref filtered by the AreaCodeMarineI column
 * @method Countrysubref findOneByAreacodemarineii(int $AreaCodeMarineII) Return the first Countrysubref filtered by the AreaCodeMarineII column
 * @method Countrysubref findOneByEntered(int $Entered) Return the first Countrysubref filtered by the Entered column
 * @method Countrysubref findOneByDateentered(string $DateEntered) Return the first Countrysubref filtered by the DateEntered column
 * @method Countrysubref findOneByModified(int $Modified) Return the first Countrysubref filtered by the Modified column
 * @method Countrysubref findOneByDatemodified(string $DateModified) Return the first Countrysubref filtered by the DateModified column
 * @method Countrysubref findOneByExpert(int $Expert) Return the first Countrysubref filtered by the Expert column
 * @method Countrysubref findOneByDatechecked(string $DateChecked) Return the first Countrysubref filtered by the DateChecked column
 * @method Countrysubref findOneByTs(string $TS) Return the first Countrysubref filtered by the TS column
 *
 * @method array findByCsubCode(string $CSub_Code) Return Countrysubref objects filtered by the CSub_Code column
 * @method array findByCCode(string $C_Code) Return Countrysubref objects filtered by the C_Code column
 * @method array findByCountrysub(string $CountrySub) Return Countrysubref objects filtered by the CountrySub column
 * @method array findByOthername(string $OtherName) Return Countrysubref objects filtered by the OtherName column
 * @method array findByCountrysubtype(string $CountrySubType) Return Countrysubref objects filtered by the CountrySubType column
 * @method array findByCountrysubrank(int $CountrySubRank) Return Countrysubref objects filtered by the CountrySubRank column
 * @method array findByComments(string $Comments) Return Countrysubref objects filtered by the Comments column
 * @method array findByNorthernlatitude(int $NorthernLatitude) Return Countrysubref objects filtered by the NorthernLatitude column
 * @method array findByNorthernlatitudens(string $NorthernLatitudeNS) Return Countrysubref objects filtered by the NorthernLatitudeNS column
 * @method array findBySouthernlatitude(int $SouthernLatitude) Return Countrysubref objects filtered by the SouthernLatitude column
 * @method array findBySouthernlatitudens(string $SouthernLatitudeNS) Return Countrysubref objects filtered by the SouthernLatitudeNS column
 * @method array findByEasternlongitude(int $EasternLongitude) Return Countrysubref objects filtered by the EasternLongitude column
 * @method array findByEasternlongitudeew(string $EasternLongitudeEW) Return Countrysubref objects filtered by the EasternLongitudeEW column
 * @method array findByWesternlongitude(int $WesternLongitude) Return Countrysubref objects filtered by the WesternLongitude column
 * @method array findByWesternlongitudeew(string $WesternLongitudeEW) Return Countrysubref objects filtered by the WesternLongitudeEW column
 * @method array findByCapital(string $Capital) Return Countrysubref objects filtered by the Capital column
 * @method array findByLatdec(double $LatDec) Return Countrysubref objects filtered by the LatDec column
 * @method array findByNorthsouth(string $NorthSouth) Return Countrysubref objects filtered by the NorthSouth column
 * @method array findByLongdec(double $LongDec) Return Countrysubref objects filtered by the LongDec column
 * @method array findByEastwest(string $EastWest) Return Countrysubref objects filtered by the EastWest column
 * @method array findByPolarboreal(boolean $PolarBoreal) Return Countrysubref objects filtered by the PolarBoreal column
 * @method array findByTemperate(boolean $Temperate) Return Countrysubref objects filtered by the Temperate column
 * @method array findBySubtropical(boolean $Subtropical) Return Countrysubref objects filtered by the Subtropical column
 * @method array findByTropical(boolean $Tropical) Return Countrysubref objects filtered by the Tropical column
 * @method array findByAreacodeinland(int $AreaCodeInland) Return Countrysubref objects filtered by the AreaCodeInland column
 * @method array findByAreacodemarinei(int $AreaCodeMarineI) Return Countrysubref objects filtered by the AreaCodeMarineI column
 * @method array findByAreacodemarineii(int $AreaCodeMarineII) Return Countrysubref objects filtered by the AreaCodeMarineII column
 * @method array findByEntered(int $Entered) Return Countrysubref objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Countrysubref objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Countrysubref objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Countrysubref objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Countrysubref objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Countrysubref objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Countrysubref objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCountrysubrefQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCountrysubrefQuery object.
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
            $modelName = 'Countrysubref';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CountrysubrefQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CountrysubrefQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CountrysubrefQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CountrysubrefQuery) {
            return $criteria;
        }
        $query = new CountrysubrefQuery(null, null, $modelAlias);

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
     * @return   Countrysubref|Countrysubref[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CountrysubrefPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CountrysubrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Countrysubref A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByCsubCode($key, $con = null)
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
     * @return                 Countrysubref A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `CSub_Code`, `C_Code`, `CountrySub`, `OtherName`, `CountrySubType`, `CountrySubRank`, `Comments`, `NorthernLatitude`, `NorthernLatitudeNS`, `SouthernLatitude`, `SouthernLatitudeNS`, `EasternLongitude`, `EasternLongitudeEW`, `WesternLongitude`, `WesternLongitudeEW`, `Capital`, `LatDec`, `NorthSouth`, `LongDec`, `EastWest`, `PolarBoreal`, `Temperate`, `Subtropical`, `Tropical`, `AreaCodeInland`, `AreaCodeMarineI`, `AreaCodeMarineII`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `countrysubref` WHERE `CSub_Code` = :p0';
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
            $obj = new Countrysubref();
            $obj->hydrate($row);
            CountrysubrefPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Countrysubref|Countrysubref[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Countrysubref[]|mixed the list of results, formatted by the current formatter
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
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CountrysubrefPeer::CSUB_CODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CountrysubrefPeer::CSUB_CODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the CSub_Code column
     *
     * Example usage:
     * <code>
     * $query->filterByCsubCode('fooValue');   // WHERE CSub_Code = 'fooValue'
     * $query->filterByCsubCode('%fooValue%'); // WHERE CSub_Code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $csubCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByCsubCode($csubCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($csubCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $csubCode)) {
                $csubCode = str_replace('*', '%', $csubCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::CSUB_CODE, $csubCode, $comparison);
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
     * @return CountrysubrefQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CountrysubrefPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the CountrySub column
     *
     * Example usage:
     * <code>
     * $query->filterByCountrysub('fooValue');   // WHERE CountrySub = 'fooValue'
     * $query->filterByCountrysub('%fooValue%'); // WHERE CountrySub LIKE '%fooValue%'
     * </code>
     *
     * @param     string $countrysub The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByCountrysub($countrysub = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($countrysub)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $countrysub)) {
                $countrysub = str_replace('*', '%', $countrysub);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::COUNTRYSUB, $countrysub, $comparison);
    }

    /**
     * Filter the query on the OtherName column
     *
     * Example usage:
     * <code>
     * $query->filterByOthername('fooValue');   // WHERE OtherName = 'fooValue'
     * $query->filterByOthername('%fooValue%'); // WHERE OtherName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $othername The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByOthername($othername = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($othername)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $othername)) {
                $othername = str_replace('*', '%', $othername);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::OTHERNAME, $othername, $comparison);
    }

    /**
     * Filter the query on the CountrySubType column
     *
     * Example usage:
     * <code>
     * $query->filterByCountrysubtype('fooValue');   // WHERE CountrySubType = 'fooValue'
     * $query->filterByCountrysubtype('%fooValue%'); // WHERE CountrySubType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $countrysubtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByCountrysubtype($countrysubtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($countrysubtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $countrysubtype)) {
                $countrysubtype = str_replace('*', '%', $countrysubtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::COUNTRYSUBTYPE, $countrysubtype, $comparison);
    }

    /**
     * Filter the query on the CountrySubRank column
     *
     * Example usage:
     * <code>
     * $query->filterByCountrysubrank(1234); // WHERE CountrySubRank = 1234
     * $query->filterByCountrysubrank(array(12, 34)); // WHERE CountrySubRank IN (12, 34)
     * $query->filterByCountrysubrank(array('min' => 12)); // WHERE CountrySubRank >= 12
     * $query->filterByCountrysubrank(array('max' => 12)); // WHERE CountrySubRank <= 12
     * </code>
     *
     * @param     mixed $countrysubrank The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByCountrysubrank($countrysubrank = null, $comparison = null)
    {
        if (is_array($countrysubrank)) {
            $useMinMax = false;
            if (isset($countrysubrank['min'])) {
                $this->addUsingAlias(CountrysubrefPeer::COUNTRYSUBRANK, $countrysubrank['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($countrysubrank['max'])) {
                $this->addUsingAlias(CountrysubrefPeer::COUNTRYSUBRANK, $countrysubrank['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::COUNTRYSUBRANK, $countrysubrank, $comparison);
    }

    /**
     * Filter the query on the Comments column
     *
     * Example usage:
     * <code>
     * $query->filterByComments('fooValue');   // WHERE Comments = 'fooValue'
     * $query->filterByComments('%fooValue%'); // WHERE Comments LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comments The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByComments($comments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comments)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comments)) {
                $comments = str_replace('*', '%', $comments);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::COMMENTS, $comments, $comparison);
    }

    /**
     * Filter the query on the NorthernLatitude column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthernlatitude(1234); // WHERE NorthernLatitude = 1234
     * $query->filterByNorthernlatitude(array(12, 34)); // WHERE NorthernLatitude IN (12, 34)
     * $query->filterByNorthernlatitude(array('min' => 12)); // WHERE NorthernLatitude >= 12
     * $query->filterByNorthernlatitude(array('max' => 12)); // WHERE NorthernLatitude <= 12
     * </code>
     *
     * @param     mixed $northernlatitude The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByNorthernlatitude($northernlatitude = null, $comparison = null)
    {
        if (is_array($northernlatitude)) {
            $useMinMax = false;
            if (isset($northernlatitude['min'])) {
                $this->addUsingAlias(CountrysubrefPeer::NORTHERNLATITUDE, $northernlatitude['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($northernlatitude['max'])) {
                $this->addUsingAlias(CountrysubrefPeer::NORTHERNLATITUDE, $northernlatitude['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::NORTHERNLATITUDE, $northernlatitude, $comparison);
    }

    /**
     * Filter the query on the NorthernLatitudeNS column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthernlatitudens('fooValue');   // WHERE NorthernLatitudeNS = 'fooValue'
     * $query->filterByNorthernlatitudens('%fooValue%'); // WHERE NorthernLatitudeNS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $northernlatitudens The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByNorthernlatitudens($northernlatitudens = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($northernlatitudens)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $northernlatitudens)) {
                $northernlatitudens = str_replace('*', '%', $northernlatitudens);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::NORTHERNLATITUDENS, $northernlatitudens, $comparison);
    }

    /**
     * Filter the query on the SouthernLatitude column
     *
     * Example usage:
     * <code>
     * $query->filterBySouthernlatitude(1234); // WHERE SouthernLatitude = 1234
     * $query->filterBySouthernlatitude(array(12, 34)); // WHERE SouthernLatitude IN (12, 34)
     * $query->filterBySouthernlatitude(array('min' => 12)); // WHERE SouthernLatitude >= 12
     * $query->filterBySouthernlatitude(array('max' => 12)); // WHERE SouthernLatitude <= 12
     * </code>
     *
     * @param     mixed $southernlatitude The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterBySouthernlatitude($southernlatitude = null, $comparison = null)
    {
        if (is_array($southernlatitude)) {
            $useMinMax = false;
            if (isset($southernlatitude['min'])) {
                $this->addUsingAlias(CountrysubrefPeer::SOUTHERNLATITUDE, $southernlatitude['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($southernlatitude['max'])) {
                $this->addUsingAlias(CountrysubrefPeer::SOUTHERNLATITUDE, $southernlatitude['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::SOUTHERNLATITUDE, $southernlatitude, $comparison);
    }

    /**
     * Filter the query on the SouthernLatitudeNS column
     *
     * Example usage:
     * <code>
     * $query->filterBySouthernlatitudens('fooValue');   // WHERE SouthernLatitudeNS = 'fooValue'
     * $query->filterBySouthernlatitudens('%fooValue%'); // WHERE SouthernLatitudeNS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $southernlatitudens The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterBySouthernlatitudens($southernlatitudens = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($southernlatitudens)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $southernlatitudens)) {
                $southernlatitudens = str_replace('*', '%', $southernlatitudens);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::SOUTHERNLATITUDENS, $southernlatitudens, $comparison);
    }

    /**
     * Filter the query on the EasternLongitude column
     *
     * Example usage:
     * <code>
     * $query->filterByEasternlongitude(1234); // WHERE EasternLongitude = 1234
     * $query->filterByEasternlongitude(array(12, 34)); // WHERE EasternLongitude IN (12, 34)
     * $query->filterByEasternlongitude(array('min' => 12)); // WHERE EasternLongitude >= 12
     * $query->filterByEasternlongitude(array('max' => 12)); // WHERE EasternLongitude <= 12
     * </code>
     *
     * @param     mixed $easternlongitude The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByEasternlongitude($easternlongitude = null, $comparison = null)
    {
        if (is_array($easternlongitude)) {
            $useMinMax = false;
            if (isset($easternlongitude['min'])) {
                $this->addUsingAlias(CountrysubrefPeer::EASTERNLONGITUDE, $easternlongitude['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($easternlongitude['max'])) {
                $this->addUsingAlias(CountrysubrefPeer::EASTERNLONGITUDE, $easternlongitude['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::EASTERNLONGITUDE, $easternlongitude, $comparison);
    }

    /**
     * Filter the query on the EasternLongitudeEW column
     *
     * Example usage:
     * <code>
     * $query->filterByEasternlongitudeew('fooValue');   // WHERE EasternLongitudeEW = 'fooValue'
     * $query->filterByEasternlongitudeew('%fooValue%'); // WHERE EasternLongitudeEW LIKE '%fooValue%'
     * </code>
     *
     * @param     string $easternlongitudeew The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByEasternlongitudeew($easternlongitudeew = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($easternlongitudeew)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $easternlongitudeew)) {
                $easternlongitudeew = str_replace('*', '%', $easternlongitudeew);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::EASTERNLONGITUDEEW, $easternlongitudeew, $comparison);
    }

    /**
     * Filter the query on the WesternLongitude column
     *
     * Example usage:
     * <code>
     * $query->filterByWesternlongitude(1234); // WHERE WesternLongitude = 1234
     * $query->filterByWesternlongitude(array(12, 34)); // WHERE WesternLongitude IN (12, 34)
     * $query->filterByWesternlongitude(array('min' => 12)); // WHERE WesternLongitude >= 12
     * $query->filterByWesternlongitude(array('max' => 12)); // WHERE WesternLongitude <= 12
     * </code>
     *
     * @param     mixed $westernlongitude The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByWesternlongitude($westernlongitude = null, $comparison = null)
    {
        if (is_array($westernlongitude)) {
            $useMinMax = false;
            if (isset($westernlongitude['min'])) {
                $this->addUsingAlias(CountrysubrefPeer::WESTERNLONGITUDE, $westernlongitude['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($westernlongitude['max'])) {
                $this->addUsingAlias(CountrysubrefPeer::WESTERNLONGITUDE, $westernlongitude['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::WESTERNLONGITUDE, $westernlongitude, $comparison);
    }

    /**
     * Filter the query on the WesternLongitudeEW column
     *
     * Example usage:
     * <code>
     * $query->filterByWesternlongitudeew('fooValue');   // WHERE WesternLongitudeEW = 'fooValue'
     * $query->filterByWesternlongitudeew('%fooValue%'); // WHERE WesternLongitudeEW LIKE '%fooValue%'
     * </code>
     *
     * @param     string $westernlongitudeew The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByWesternlongitudeew($westernlongitudeew = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($westernlongitudeew)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $westernlongitudeew)) {
                $westernlongitudeew = str_replace('*', '%', $westernlongitudeew);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::WESTERNLONGITUDEEW, $westernlongitudeew, $comparison);
    }

    /**
     * Filter the query on the Capital column
     *
     * Example usage:
     * <code>
     * $query->filterByCapital('fooValue');   // WHERE Capital = 'fooValue'
     * $query->filterByCapital('%fooValue%'); // WHERE Capital LIKE '%fooValue%'
     * </code>
     *
     * @param     string $capital The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByCapital($capital = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($capital)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $capital)) {
                $capital = str_replace('*', '%', $capital);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::CAPITAL, $capital, $comparison);
    }

    /**
     * Filter the query on the LatDec column
     *
     * Example usage:
     * <code>
     * $query->filterByLatdec(1234); // WHERE LatDec = 1234
     * $query->filterByLatdec(array(12, 34)); // WHERE LatDec IN (12, 34)
     * $query->filterByLatdec(array('min' => 12)); // WHERE LatDec >= 12
     * $query->filterByLatdec(array('max' => 12)); // WHERE LatDec <= 12
     * </code>
     *
     * @param     mixed $latdec The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByLatdec($latdec = null, $comparison = null)
    {
        if (is_array($latdec)) {
            $useMinMax = false;
            if (isset($latdec['min'])) {
                $this->addUsingAlias(CountrysubrefPeer::LATDEC, $latdec['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latdec['max'])) {
                $this->addUsingAlias(CountrysubrefPeer::LATDEC, $latdec['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::LATDEC, $latdec, $comparison);
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
     * @return CountrysubrefQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CountrysubrefPeer::NORTHSOUTH, $northsouth, $comparison);
    }

    /**
     * Filter the query on the LongDec column
     *
     * Example usage:
     * <code>
     * $query->filterByLongdec(1234); // WHERE LongDec = 1234
     * $query->filterByLongdec(array(12, 34)); // WHERE LongDec IN (12, 34)
     * $query->filterByLongdec(array('min' => 12)); // WHERE LongDec >= 12
     * $query->filterByLongdec(array('max' => 12)); // WHERE LongDec <= 12
     * </code>
     *
     * @param     mixed $longdec The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByLongdec($longdec = null, $comparison = null)
    {
        if (is_array($longdec)) {
            $useMinMax = false;
            if (isset($longdec['min'])) {
                $this->addUsingAlias(CountrysubrefPeer::LONGDEC, $longdec['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longdec['max'])) {
                $this->addUsingAlias(CountrysubrefPeer::LONGDEC, $longdec['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::LONGDEC, $longdec, $comparison);
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
     * @return CountrysubrefQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CountrysubrefPeer::EASTWEST, $eastwest, $comparison);
    }

    /**
     * Filter the query on the PolarBoreal column
     *
     * Example usage:
     * <code>
     * $query->filterByPolarboreal(true); // WHERE PolarBoreal = true
     * $query->filterByPolarboreal('yes'); // WHERE PolarBoreal = true
     * </code>
     *
     * @param     boolean|string $polarboreal The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByPolarboreal($polarboreal = null, $comparison = null)
    {
        if (is_string($polarboreal)) {
            $polarboreal = in_array(strtolower($polarboreal), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CountrysubrefPeer::POLARBOREAL, $polarboreal, $comparison);
    }

    /**
     * Filter the query on the Temperate column
     *
     * Example usage:
     * <code>
     * $query->filterByTemperate(true); // WHERE Temperate = true
     * $query->filterByTemperate('yes'); // WHERE Temperate = true
     * </code>
     *
     * @param     boolean|string $temperate The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByTemperate($temperate = null, $comparison = null)
    {
        if (is_string($temperate)) {
            $temperate = in_array(strtolower($temperate), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CountrysubrefPeer::TEMPERATE, $temperate, $comparison);
    }

    /**
     * Filter the query on the Subtropical column
     *
     * Example usage:
     * <code>
     * $query->filterBySubtropical(true); // WHERE Subtropical = true
     * $query->filterBySubtropical('yes'); // WHERE Subtropical = true
     * </code>
     *
     * @param     boolean|string $subtropical The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterBySubtropical($subtropical = null, $comparison = null)
    {
        if (is_string($subtropical)) {
            $subtropical = in_array(strtolower($subtropical), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CountrysubrefPeer::SUBTROPICAL, $subtropical, $comparison);
    }

    /**
     * Filter the query on the Tropical column
     *
     * Example usage:
     * <code>
     * $query->filterByTropical(true); // WHERE Tropical = true
     * $query->filterByTropical('yes'); // WHERE Tropical = true
     * </code>
     *
     * @param     boolean|string $tropical The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByTropical($tropical = null, $comparison = null)
    {
        if (is_string($tropical)) {
            $tropical = in_array(strtolower($tropical), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CountrysubrefPeer::TROPICAL, $tropical, $comparison);
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
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByAreacodeinland($areacodeinland = null, $comparison = null)
    {
        if (is_array($areacodeinland)) {
            $useMinMax = false;
            if (isset($areacodeinland['min'])) {
                $this->addUsingAlias(CountrysubrefPeer::AREACODEINLAND, $areacodeinland['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areacodeinland['max'])) {
                $this->addUsingAlias(CountrysubrefPeer::AREACODEINLAND, $areacodeinland['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::AREACODEINLAND, $areacodeinland, $comparison);
    }

    /**
     * Filter the query on the AreaCodeMarineI column
     *
     * Example usage:
     * <code>
     * $query->filterByAreacodemarinei(1234); // WHERE AreaCodeMarineI = 1234
     * $query->filterByAreacodemarinei(array(12, 34)); // WHERE AreaCodeMarineI IN (12, 34)
     * $query->filterByAreacodemarinei(array('min' => 12)); // WHERE AreaCodeMarineI >= 12
     * $query->filterByAreacodemarinei(array('max' => 12)); // WHERE AreaCodeMarineI <= 12
     * </code>
     *
     * @param     mixed $areacodemarinei The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByAreacodemarinei($areacodemarinei = null, $comparison = null)
    {
        if (is_array($areacodemarinei)) {
            $useMinMax = false;
            if (isset($areacodemarinei['min'])) {
                $this->addUsingAlias(CountrysubrefPeer::AREACODEMARINEI, $areacodemarinei['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areacodemarinei['max'])) {
                $this->addUsingAlias(CountrysubrefPeer::AREACODEMARINEI, $areacodemarinei['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::AREACODEMARINEI, $areacodemarinei, $comparison);
    }

    /**
     * Filter the query on the AreaCodeMarineII column
     *
     * Example usage:
     * <code>
     * $query->filterByAreacodemarineii(1234); // WHERE AreaCodeMarineII = 1234
     * $query->filterByAreacodemarineii(array(12, 34)); // WHERE AreaCodeMarineII IN (12, 34)
     * $query->filterByAreacodemarineii(array('min' => 12)); // WHERE AreaCodeMarineII >= 12
     * $query->filterByAreacodemarineii(array('max' => 12)); // WHERE AreaCodeMarineII <= 12
     * </code>
     *
     * @param     mixed $areacodemarineii The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByAreacodemarineii($areacodemarineii = null, $comparison = null)
    {
        if (is_array($areacodemarineii)) {
            $useMinMax = false;
            if (isset($areacodemarineii['min'])) {
                $this->addUsingAlias(CountrysubrefPeer::AREACODEMARINEII, $areacodemarineii['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areacodemarineii['max'])) {
                $this->addUsingAlias(CountrysubrefPeer::AREACODEMARINEII, $areacodemarineii['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::AREACODEMARINEII, $areacodemarineii, $comparison);
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
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(CountrysubrefPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(CountrysubrefPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::ENTERED, $entered, $comparison);
    }

    /**
     * Filter the query on the DateEntered column
     *
     * Example usage:
     * <code>
     * $query->filterByDateentered('fooValue');   // WHERE DateEntered = 'fooValue'
     * $query->filterByDateentered('%fooValue%'); // WHERE DateEntered LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateentered The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateentered)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateentered)) {
                $dateentered = str_replace('*', '%', $dateentered);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(CountrysubrefPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(CountrysubrefPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::MODIFIED, $modified, $comparison);
    }

    /**
     * Filter the query on the DateModified column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodified('fooValue');   // WHERE DateModified = 'fooValue'
     * $query->filterByDatemodified('%fooValue%'); // WHERE DateModified LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datemodified The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datemodified)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datemodified)) {
                $datemodified = str_replace('*', '%', $datemodified);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(CountrysubrefPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(CountrysubrefPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::EXPERT, $expert, $comparison);
    }

    /**
     * Filter the query on the DateChecked column
     *
     * Example usage:
     * <code>
     * $query->filterByDatechecked('fooValue');   // WHERE DateChecked = 'fooValue'
     * $query->filterByDatechecked('%fooValue%'); // WHERE DateChecked LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datechecked The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datechecked)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datechecked)) {
                $datechecked = str_replace('*', '%', $datechecked);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(CountrysubrefPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(CountrysubrefPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubrefPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Countrysubref $countrysubref Object to remove from the list of results
     *
     * @return CountrysubrefQuery The current query, for fluid interface
     */
    public function prune($countrysubref = null)
    {
        if ($countrysubref) {
            $this->addUsingAlias(CountrysubrefPeer::CSUB_CODE, $countrysubref->getCsubCode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
