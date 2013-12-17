<?php


/**
 * Base class that represents a query for the 'gicim_photos_aug12' table.
 *
 *
 *
 * @method GicimPhotosAug12Query orderByUrlData($order = Criteria::ASC) Order by the URL_Data column
 * @method GicimPhotosAug12Query orderByImagepk($order = Criteria::ASC) Order by the IMAGEPK column
 * @method GicimPhotosAug12Query orderByStatus($order = Criteria::ASC) Order by the Status column
 * @method GicimPhotosAug12Query orderByTypeStatus($order = Criteria::ASC) Order by the Type_status column
 * @method GicimPhotosAug12Query orderByUrlimage($order = Criteria::ASC) Order by the URLIMAGE column
 * @method GicimPhotosAug12Query orderByEtatdoc($order = Criteria::ASC) Order by the ETATDOC column
 * @method GicimPhotosAug12Query orderByGicimimageid($order = Criteria::ASC) Order by the GICIMimageID column
 * @method GicimPhotosAug12Query orderByGicimpoissonsid($order = Criteria::ASC) Order by the GicimPoissonsID column
 * @method GicimPhotosAug12Query orderByFbsyncode($order = Criteria::ASC) Order by the FBSYNCODE column
 * @method GicimPhotosAug12Query orderByFamille($order = Criteria::ASC) Order by the FAMILLE column
 * @method GicimPhotosAug12Query orderByName($order = Criteria::ASC) Order by the Name column
 * @method GicimPhotosAug12Query orderByAuthor($order = Criteria::ASC) Order by the Author column
 * @method GicimPhotosAug12Query orderByCatalogNo($order = Criteria::ASC) Order by the Catalog_no column
 * @method GicimPhotosAug12Query orderByCountry($order = Criteria::ASC) Order by the Country column
 * @method GicimPhotosAug12Query orderByRegion($order = Criteria::ASC) Order by the REGION column
 * @method GicimPhotosAug12Query orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method GicimPhotosAug12Query orderByCollector($order = Criteria::ASC) Order by the Collector column
 * @method GicimPhotosAug12Query orderByDatecollected($order = Criteria::ASC) Order by the Datecollected column
 * @method GicimPhotosAug12Query orderByYearcollected($order = Criteria::ASC) Order by the Yearcollected column
 * @method GicimPhotosAug12Query orderByObservations($order = Criteria::ASC) Order by the OBSERVATIONS column
 * @method GicimPhotosAug12Query orderByMedium($order = Criteria::ASC) Order by the Medium column
 * @method GicimPhotosAug12Query orderByPaysadmin($order = Criteria::ASC) Order by the PAYSADMIN column
 * @method GicimPhotosAug12Query orderByPkid($order = Criteria::ASC) Order by the PKID column
 *
 * @method GicimPhotosAug12Query groupByUrlData() Group by the URL_Data column
 * @method GicimPhotosAug12Query groupByImagepk() Group by the IMAGEPK column
 * @method GicimPhotosAug12Query groupByStatus() Group by the Status column
 * @method GicimPhotosAug12Query groupByTypeStatus() Group by the Type_status column
 * @method GicimPhotosAug12Query groupByUrlimage() Group by the URLIMAGE column
 * @method GicimPhotosAug12Query groupByEtatdoc() Group by the ETATDOC column
 * @method GicimPhotosAug12Query groupByGicimimageid() Group by the GICIMimageID column
 * @method GicimPhotosAug12Query groupByGicimpoissonsid() Group by the GicimPoissonsID column
 * @method GicimPhotosAug12Query groupByFbsyncode() Group by the FBSYNCODE column
 * @method GicimPhotosAug12Query groupByFamille() Group by the FAMILLE column
 * @method GicimPhotosAug12Query groupByName() Group by the Name column
 * @method GicimPhotosAug12Query groupByAuthor() Group by the Author column
 * @method GicimPhotosAug12Query groupByCatalogNo() Group by the Catalog_no column
 * @method GicimPhotosAug12Query groupByCountry() Group by the Country column
 * @method GicimPhotosAug12Query groupByRegion() Group by the REGION column
 * @method GicimPhotosAug12Query groupByLocality() Group by the Locality column
 * @method GicimPhotosAug12Query groupByCollector() Group by the Collector column
 * @method GicimPhotosAug12Query groupByDatecollected() Group by the Datecollected column
 * @method GicimPhotosAug12Query groupByYearcollected() Group by the Yearcollected column
 * @method GicimPhotosAug12Query groupByObservations() Group by the OBSERVATIONS column
 * @method GicimPhotosAug12Query groupByMedium() Group by the Medium column
 * @method GicimPhotosAug12Query groupByPaysadmin() Group by the PAYSADMIN column
 * @method GicimPhotosAug12Query groupByPkid() Group by the PKID column
 *
 * @method GicimPhotosAug12Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GicimPhotosAug12Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GicimPhotosAug12Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GicimPhotosAug12 findOne(PropelPDO $con = null) Return the first GicimPhotosAug12 matching the query
 * @method GicimPhotosAug12 findOneOrCreate(PropelPDO $con = null) Return the first GicimPhotosAug12 matching the query, or a new GicimPhotosAug12 object populated from the query conditions when no match is found
 *
 * @method GicimPhotosAug12 findOneByUrlData(string $URL_Data) Return the first GicimPhotosAug12 filtered by the URL_Data column
 * @method GicimPhotosAug12 findOneByImagepk(double $IMAGEPK) Return the first GicimPhotosAug12 filtered by the IMAGEPK column
 * @method GicimPhotosAug12 findOneByStatus(string $Status) Return the first GicimPhotosAug12 filtered by the Status column
 * @method GicimPhotosAug12 findOneByTypeStatus(string $Type_status) Return the first GicimPhotosAug12 filtered by the Type_status column
 * @method GicimPhotosAug12 findOneByUrlimage(string $URLIMAGE) Return the first GicimPhotosAug12 filtered by the URLIMAGE column
 * @method GicimPhotosAug12 findOneByEtatdoc(string $ETATDOC) Return the first GicimPhotosAug12 filtered by the ETATDOC column
 * @method GicimPhotosAug12 findOneByGicimimageid(double $GICIMimageID) Return the first GicimPhotosAug12 filtered by the GICIMimageID column
 * @method GicimPhotosAug12 findOneByGicimpoissonsid(double $GicimPoissonsID) Return the first GicimPhotosAug12 filtered by the GicimPoissonsID column
 * @method GicimPhotosAug12 findOneByFbsyncode(double $FBSYNCODE) Return the first GicimPhotosAug12 filtered by the FBSYNCODE column
 * @method GicimPhotosAug12 findOneByFamille(string $FAMILLE) Return the first GicimPhotosAug12 filtered by the FAMILLE column
 * @method GicimPhotosAug12 findOneByName(string $Name) Return the first GicimPhotosAug12 filtered by the Name column
 * @method GicimPhotosAug12 findOneByAuthor(string $Author) Return the first GicimPhotosAug12 filtered by the Author column
 * @method GicimPhotosAug12 findOneByCatalogNo(string $Catalog_no) Return the first GicimPhotosAug12 filtered by the Catalog_no column
 * @method GicimPhotosAug12 findOneByCountry(string $Country) Return the first GicimPhotosAug12 filtered by the Country column
 * @method GicimPhotosAug12 findOneByRegion(string $REGION) Return the first GicimPhotosAug12 filtered by the REGION column
 * @method GicimPhotosAug12 findOneByLocality(string $Locality) Return the first GicimPhotosAug12 filtered by the Locality column
 * @method GicimPhotosAug12 findOneByCollector(string $Collector) Return the first GicimPhotosAug12 filtered by the Collector column
 * @method GicimPhotosAug12 findOneByDatecollected(string $Datecollected) Return the first GicimPhotosAug12 filtered by the Datecollected column
 * @method GicimPhotosAug12 findOneByYearcollected(double $Yearcollected) Return the first GicimPhotosAug12 filtered by the Yearcollected column
 * @method GicimPhotosAug12 findOneByObservations(string $OBSERVATIONS) Return the first GicimPhotosAug12 filtered by the OBSERVATIONS column
 * @method GicimPhotosAug12 findOneByMedium(string $Medium) Return the first GicimPhotosAug12 filtered by the Medium column
 * @method GicimPhotosAug12 findOneByPaysadmin(string $PAYSADMIN) Return the first GicimPhotosAug12 filtered by the PAYSADMIN column
 *
 * @method array findByUrlData(string $URL_Data) Return GicimPhotosAug12 objects filtered by the URL_Data column
 * @method array findByImagepk(double $IMAGEPK) Return GicimPhotosAug12 objects filtered by the IMAGEPK column
 * @method array findByStatus(string $Status) Return GicimPhotosAug12 objects filtered by the Status column
 * @method array findByTypeStatus(string $Type_status) Return GicimPhotosAug12 objects filtered by the Type_status column
 * @method array findByUrlimage(string $URLIMAGE) Return GicimPhotosAug12 objects filtered by the URLIMAGE column
 * @method array findByEtatdoc(string $ETATDOC) Return GicimPhotosAug12 objects filtered by the ETATDOC column
 * @method array findByGicimimageid(double $GICIMimageID) Return GicimPhotosAug12 objects filtered by the GICIMimageID column
 * @method array findByGicimpoissonsid(double $GicimPoissonsID) Return GicimPhotosAug12 objects filtered by the GicimPoissonsID column
 * @method array findByFbsyncode(double $FBSYNCODE) Return GicimPhotosAug12 objects filtered by the FBSYNCODE column
 * @method array findByFamille(string $FAMILLE) Return GicimPhotosAug12 objects filtered by the FAMILLE column
 * @method array findByName(string $Name) Return GicimPhotosAug12 objects filtered by the Name column
 * @method array findByAuthor(string $Author) Return GicimPhotosAug12 objects filtered by the Author column
 * @method array findByCatalogNo(string $Catalog_no) Return GicimPhotosAug12 objects filtered by the Catalog_no column
 * @method array findByCountry(string $Country) Return GicimPhotosAug12 objects filtered by the Country column
 * @method array findByRegion(string $REGION) Return GicimPhotosAug12 objects filtered by the REGION column
 * @method array findByLocality(string $Locality) Return GicimPhotosAug12 objects filtered by the Locality column
 * @method array findByCollector(string $Collector) Return GicimPhotosAug12 objects filtered by the Collector column
 * @method array findByDatecollected(string $Datecollected) Return GicimPhotosAug12 objects filtered by the Datecollected column
 * @method array findByYearcollected(double $Yearcollected) Return GicimPhotosAug12 objects filtered by the Yearcollected column
 * @method array findByObservations(string $OBSERVATIONS) Return GicimPhotosAug12 objects filtered by the OBSERVATIONS column
 * @method array findByMedium(string $Medium) Return GicimPhotosAug12 objects filtered by the Medium column
 * @method array findByPaysadmin(string $PAYSADMIN) Return GicimPhotosAug12 objects filtered by the PAYSADMIN column
 * @method array findByPkid(string $PKID) Return GicimPhotosAug12 objects filtered by the PKID column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseGicimPhotosAug12Query extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGicimPhotosAug12Query object.
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
            $modelName = 'GicimPhotosAug12';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GicimPhotosAug12Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GicimPhotosAug12Query|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GicimPhotosAug12Query
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GicimPhotosAug12Query) {
            return $criteria;
        }
        $query = new GicimPhotosAug12Query(null, null, $modelAlias);

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
     * @return   GicimPhotosAug12|GicimPhotosAug12[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GicimPhotosAug12Peer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GicimPhotosAug12Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GicimPhotosAug12 A model object, or null if the key is not found
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
     * @return                 GicimPhotosAug12 A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `URL_Data`, `IMAGEPK`, `Status`, `Type_status`, `URLIMAGE`, `ETATDOC`, `GICIMimageID`, `GicimPoissonsID`, `FBSYNCODE`, `FAMILLE`, `Name`, `Author`, `Catalog_no`, `Country`, `REGION`, `Locality`, `Collector`, `Datecollected`, `Yearcollected`, `OBSERVATIONS`, `Medium`, `PAYSADMIN`, `PKID` FROM `gicim_photos_aug12` WHERE `PKID` = :p0';
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
            $obj = new GicimPhotosAug12();
            $obj->hydrate($row);
            GicimPhotosAug12Peer::addInstanceToPool($obj, (string) $key);
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
     * @return GicimPhotosAug12|GicimPhotosAug12[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GicimPhotosAug12[]|mixed the list of results, formatted by the current formatter
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
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GicimPhotosAug12Peer::PKID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GicimPhotosAug12Peer::PKID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the URL_Data column
     *
     * Example usage:
     * <code>
     * $query->filterByUrlData('fooValue');   // WHERE URL_Data = 'fooValue'
     * $query->filterByUrlData('%fooValue%'); // WHERE URL_Data LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urlData The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function filterByUrlData($urlData = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urlData)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urlData)) {
                $urlData = str_replace('*', '%', $urlData);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GicimPhotosAug12Peer::URL_DATA, $urlData, $comparison);
    }

    /**
     * Filter the query on the IMAGEPK column
     *
     * Example usage:
     * <code>
     * $query->filterByImagepk(1234); // WHERE IMAGEPK = 1234
     * $query->filterByImagepk(array(12, 34)); // WHERE IMAGEPK IN (12, 34)
     * $query->filterByImagepk(array('min' => 12)); // WHERE IMAGEPK >= 12
     * $query->filterByImagepk(array('max' => 12)); // WHERE IMAGEPK <= 12
     * </code>
     *
     * @param     mixed $imagepk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function filterByImagepk($imagepk = null, $comparison = null)
    {
        if (is_array($imagepk)) {
            $useMinMax = false;
            if (isset($imagepk['min'])) {
                $this->addUsingAlias(GicimPhotosAug12Peer::IMAGEPK, $imagepk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($imagepk['max'])) {
                $this->addUsingAlias(GicimPhotosAug12Peer::IMAGEPK, $imagepk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GicimPhotosAug12Peer::IMAGEPK, $imagepk, $comparison);
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
     * @return GicimPhotosAug12Query The current query, for fluid interface
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

        return $this->addUsingAlias(GicimPhotosAug12Peer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the Type_status column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeStatus('fooValue');   // WHERE Type_status = 'fooValue'
     * $query->filterByTypeStatus('%fooValue%'); // WHERE Type_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function filterByTypeStatus($typeStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeStatus)) {
                $typeStatus = str_replace('*', '%', $typeStatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GicimPhotosAug12Peer::TYPE_STATUS, $typeStatus, $comparison);
    }

    /**
     * Filter the query on the URLIMAGE column
     *
     * Example usage:
     * <code>
     * $query->filterByUrlimage('fooValue');   // WHERE URLIMAGE = 'fooValue'
     * $query->filterByUrlimage('%fooValue%'); // WHERE URLIMAGE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urlimage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function filterByUrlimage($urlimage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urlimage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urlimage)) {
                $urlimage = str_replace('*', '%', $urlimage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GicimPhotosAug12Peer::URLIMAGE, $urlimage, $comparison);
    }

    /**
     * Filter the query on the ETATDOC column
     *
     * Example usage:
     * <code>
     * $query->filterByEtatdoc('fooValue');   // WHERE ETATDOC = 'fooValue'
     * $query->filterByEtatdoc('%fooValue%'); // WHERE ETATDOC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etatdoc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function filterByEtatdoc($etatdoc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etatdoc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etatdoc)) {
                $etatdoc = str_replace('*', '%', $etatdoc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GicimPhotosAug12Peer::ETATDOC, $etatdoc, $comparison);
    }

    /**
     * Filter the query on the GICIMimageID column
     *
     * Example usage:
     * <code>
     * $query->filterByGicimimageid(1234); // WHERE GICIMimageID = 1234
     * $query->filterByGicimimageid(array(12, 34)); // WHERE GICIMimageID IN (12, 34)
     * $query->filterByGicimimageid(array('min' => 12)); // WHERE GICIMimageID >= 12
     * $query->filterByGicimimageid(array('max' => 12)); // WHERE GICIMimageID <= 12
     * </code>
     *
     * @param     mixed $gicimimageid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function filterByGicimimageid($gicimimageid = null, $comparison = null)
    {
        if (is_array($gicimimageid)) {
            $useMinMax = false;
            if (isset($gicimimageid['min'])) {
                $this->addUsingAlias(GicimPhotosAug12Peer::GICIMIMAGEID, $gicimimageid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gicimimageid['max'])) {
                $this->addUsingAlias(GicimPhotosAug12Peer::GICIMIMAGEID, $gicimimageid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GicimPhotosAug12Peer::GICIMIMAGEID, $gicimimageid, $comparison);
    }

    /**
     * Filter the query on the GicimPoissonsID column
     *
     * Example usage:
     * <code>
     * $query->filterByGicimpoissonsid(1234); // WHERE GicimPoissonsID = 1234
     * $query->filterByGicimpoissonsid(array(12, 34)); // WHERE GicimPoissonsID IN (12, 34)
     * $query->filterByGicimpoissonsid(array('min' => 12)); // WHERE GicimPoissonsID >= 12
     * $query->filterByGicimpoissonsid(array('max' => 12)); // WHERE GicimPoissonsID <= 12
     * </code>
     *
     * @param     mixed $gicimpoissonsid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function filterByGicimpoissonsid($gicimpoissonsid = null, $comparison = null)
    {
        if (is_array($gicimpoissonsid)) {
            $useMinMax = false;
            if (isset($gicimpoissonsid['min'])) {
                $this->addUsingAlias(GicimPhotosAug12Peer::GICIMPOISSONSID, $gicimpoissonsid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gicimpoissonsid['max'])) {
                $this->addUsingAlias(GicimPhotosAug12Peer::GICIMPOISSONSID, $gicimpoissonsid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GicimPhotosAug12Peer::GICIMPOISSONSID, $gicimpoissonsid, $comparison);
    }

    /**
     * Filter the query on the FBSYNCODE column
     *
     * Example usage:
     * <code>
     * $query->filterByFbsyncode(1234); // WHERE FBSYNCODE = 1234
     * $query->filterByFbsyncode(array(12, 34)); // WHERE FBSYNCODE IN (12, 34)
     * $query->filterByFbsyncode(array('min' => 12)); // WHERE FBSYNCODE >= 12
     * $query->filterByFbsyncode(array('max' => 12)); // WHERE FBSYNCODE <= 12
     * </code>
     *
     * @param     mixed $fbsyncode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function filterByFbsyncode($fbsyncode = null, $comparison = null)
    {
        if (is_array($fbsyncode)) {
            $useMinMax = false;
            if (isset($fbsyncode['min'])) {
                $this->addUsingAlias(GicimPhotosAug12Peer::FBSYNCODE, $fbsyncode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fbsyncode['max'])) {
                $this->addUsingAlias(GicimPhotosAug12Peer::FBSYNCODE, $fbsyncode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GicimPhotosAug12Peer::FBSYNCODE, $fbsyncode, $comparison);
    }

    /**
     * Filter the query on the FAMILLE column
     *
     * Example usage:
     * <code>
     * $query->filterByFamille('fooValue');   // WHERE FAMILLE = 'fooValue'
     * $query->filterByFamille('%fooValue%'); // WHERE FAMILLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $famille The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function filterByFamille($famille = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($famille)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $famille)) {
                $famille = str_replace('*', '%', $famille);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GicimPhotosAug12Peer::FAMILLE, $famille, $comparison);
    }

    /**
     * Filter the query on the Name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE Name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE Name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GicimPhotosAug12Peer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the Author column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthor('fooValue');   // WHERE Author = 'fooValue'
     * $query->filterByAuthor('%fooValue%'); // WHERE Author LIKE '%fooValue%'
     * </code>
     *
     * @param     string $author The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function filterByAuthor($author = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($author)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $author)) {
                $author = str_replace('*', '%', $author);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GicimPhotosAug12Peer::AUTHOR, $author, $comparison);
    }

    /**
     * Filter the query on the Catalog_no column
     *
     * Example usage:
     * <code>
     * $query->filterByCatalogNo('fooValue');   // WHERE Catalog_no = 'fooValue'
     * $query->filterByCatalogNo('%fooValue%'); // WHERE Catalog_no LIKE '%fooValue%'
     * </code>
     *
     * @param     string $catalogNo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function filterByCatalogNo($catalogNo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($catalogNo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $catalogNo)) {
                $catalogNo = str_replace('*', '%', $catalogNo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GicimPhotosAug12Peer::CATALOG_NO, $catalogNo, $comparison);
    }

    /**
     * Filter the query on the Country column
     *
     * Example usage:
     * <code>
     * $query->filterByCountry('fooValue');   // WHERE Country = 'fooValue'
     * $query->filterByCountry('%fooValue%'); // WHERE Country LIKE '%fooValue%'
     * </code>
     *
     * @param     string $country The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function filterByCountry($country = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($country)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $country)) {
                $country = str_replace('*', '%', $country);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GicimPhotosAug12Peer::COUNTRY, $country, $comparison);
    }

    /**
     * Filter the query on the REGION column
     *
     * Example usage:
     * <code>
     * $query->filterByRegion('fooValue');   // WHERE REGION = 'fooValue'
     * $query->filterByRegion('%fooValue%'); // WHERE REGION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $region The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GicimPhotosAug12Query The current query, for fluid interface
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

        return $this->addUsingAlias(GicimPhotosAug12Peer::REGION, $region, $comparison);
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
     * @return GicimPhotosAug12Query The current query, for fluid interface
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

        return $this->addUsingAlias(GicimPhotosAug12Peer::LOCALITY, $locality, $comparison);
    }

    /**
     * Filter the query on the Collector column
     *
     * Example usage:
     * <code>
     * $query->filterByCollector('fooValue');   // WHERE Collector = 'fooValue'
     * $query->filterByCollector('%fooValue%'); // WHERE Collector LIKE '%fooValue%'
     * </code>
     *
     * @param     string $collector The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function filterByCollector($collector = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($collector)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $collector)) {
                $collector = str_replace('*', '%', $collector);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GicimPhotosAug12Peer::COLLECTOR, $collector, $comparison);
    }

    /**
     * Filter the query on the Datecollected column
     *
     * Example usage:
     * <code>
     * $query->filterByDatecollected('fooValue');   // WHERE Datecollected = 'fooValue'
     * $query->filterByDatecollected('%fooValue%'); // WHERE Datecollected LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datecollected The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function filterByDatecollected($datecollected = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datecollected)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datecollected)) {
                $datecollected = str_replace('*', '%', $datecollected);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GicimPhotosAug12Peer::DATECOLLECTED, $datecollected, $comparison);
    }

    /**
     * Filter the query on the Yearcollected column
     *
     * Example usage:
     * <code>
     * $query->filterByYearcollected(1234); // WHERE Yearcollected = 1234
     * $query->filterByYearcollected(array(12, 34)); // WHERE Yearcollected IN (12, 34)
     * $query->filterByYearcollected(array('min' => 12)); // WHERE Yearcollected >= 12
     * $query->filterByYearcollected(array('max' => 12)); // WHERE Yearcollected <= 12
     * </code>
     *
     * @param     mixed $yearcollected The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function filterByYearcollected($yearcollected = null, $comparison = null)
    {
        if (is_array($yearcollected)) {
            $useMinMax = false;
            if (isset($yearcollected['min'])) {
                $this->addUsingAlias(GicimPhotosAug12Peer::YEARCOLLECTED, $yearcollected['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yearcollected['max'])) {
                $this->addUsingAlias(GicimPhotosAug12Peer::YEARCOLLECTED, $yearcollected['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GicimPhotosAug12Peer::YEARCOLLECTED, $yearcollected, $comparison);
    }

    /**
     * Filter the query on the OBSERVATIONS column
     *
     * Example usage:
     * <code>
     * $query->filterByObservations('fooValue');   // WHERE OBSERVATIONS = 'fooValue'
     * $query->filterByObservations('%fooValue%'); // WHERE OBSERVATIONS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $observations The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function filterByObservations($observations = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($observations)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $observations)) {
                $observations = str_replace('*', '%', $observations);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GicimPhotosAug12Peer::OBSERVATIONS, $observations, $comparison);
    }

    /**
     * Filter the query on the Medium column
     *
     * Example usage:
     * <code>
     * $query->filterByMedium('fooValue');   // WHERE Medium = 'fooValue'
     * $query->filterByMedium('%fooValue%'); // WHERE Medium LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medium The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function filterByMedium($medium = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medium)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medium)) {
                $medium = str_replace('*', '%', $medium);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GicimPhotosAug12Peer::MEDIUM, $medium, $comparison);
    }

    /**
     * Filter the query on the PAYSADMIN column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysadmin('fooValue');   // WHERE PAYSADMIN = 'fooValue'
     * $query->filterByPaysadmin('%fooValue%'); // WHERE PAYSADMIN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysadmin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function filterByPaysadmin($paysadmin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysadmin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysadmin)) {
                $paysadmin = str_replace('*', '%', $paysadmin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GicimPhotosAug12Peer::PAYSADMIN, $paysadmin, $comparison);
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
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function filterByPkid($pkid = null, $comparison = null)
    {
        if (is_array($pkid)) {
            $useMinMax = false;
            if (isset($pkid['min'])) {
                $this->addUsingAlias(GicimPhotosAug12Peer::PKID, $pkid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pkid['max'])) {
                $this->addUsingAlias(GicimPhotosAug12Peer::PKID, $pkid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GicimPhotosAug12Peer::PKID, $pkid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GicimPhotosAug12 $gicimPhotosAug12 Object to remove from the list of results
     *
     * @return GicimPhotosAug12Query The current query, for fluid interface
     */
    public function prune($gicimPhotosAug12 = null)
    {
        if ($gicimPhotosAug12) {
            $this->addUsingAlias(GicimPhotosAug12Peer::PKID, $gicimPhotosAug12->getPkid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
