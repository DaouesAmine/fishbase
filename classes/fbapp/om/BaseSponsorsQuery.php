<?php


/**
 * Base class that represents a query for the 'sponsors' table.
 *
 *
 *
 * @method SponsorsQuery orderBySponsorshipid($order = Criteria::ASC) Order by the SponsorshipID column
 * @method SponsorsQuery orderBySponsorfor($order = Criteria::ASC) Order by the SponsorFor column
 * @method SponsorsQuery orderBySponsor($order = Criteria::ASC) Order by the Sponsor column
 * @method SponsorsQuery orderBySponsortext($order = Criteria::ASC) Order by the SponsorText column
 * @method SponsorsQuery orderByPartnertype($order = Criteria::ASC) Order by the PartnerType column
 * @method SponsorsQuery orderByContactperson($order = Criteria::ASC) Order by the ContactPerson column
 * @method SponsorsQuery orderByAddress($order = Criteria::ASC) Order by the Address column
 * @method SponsorsQuery orderByEmail($order = Criteria::ASC) Order by the Email column
 * @method SponsorsQuery orderByUrl($order = Criteria::ASC) Order by the URL column
 * @method SponsorsQuery orderByLogo($order = Criteria::ASC) Order by the Logo column
 * @method SponsorsQuery orderByStartrent($order = Criteria::ASC) Order by the StartRent column
 * @method SponsorsQuery orderByEndrent($order = Criteria::ASC) Order by the EndRent column
 * @method SponsorsQuery orderByCost($order = Criteria::ASC) Order by the Cost column
 * @method SponsorsQuery orderByReceived($order = Criteria::ASC) Order by the Received column
 * @method SponsorsQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method SponsorsQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method SponsorsQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method SponsorsQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method SponsorsQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method SponsorsQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method SponsorsQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method SponsorsQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method SponsorsQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method SponsorsQuery groupBySponsorshipid() Group by the SponsorshipID column
 * @method SponsorsQuery groupBySponsorfor() Group by the SponsorFor column
 * @method SponsorsQuery groupBySponsor() Group by the Sponsor column
 * @method SponsorsQuery groupBySponsortext() Group by the SponsorText column
 * @method SponsorsQuery groupByPartnertype() Group by the PartnerType column
 * @method SponsorsQuery groupByContactperson() Group by the ContactPerson column
 * @method SponsorsQuery groupByAddress() Group by the Address column
 * @method SponsorsQuery groupByEmail() Group by the Email column
 * @method SponsorsQuery groupByUrl() Group by the URL column
 * @method SponsorsQuery groupByLogo() Group by the Logo column
 * @method SponsorsQuery groupByStartrent() Group by the StartRent column
 * @method SponsorsQuery groupByEndrent() Group by the EndRent column
 * @method SponsorsQuery groupByCost() Group by the Cost column
 * @method SponsorsQuery groupByReceived() Group by the Received column
 * @method SponsorsQuery groupByRemarks() Group by the Remarks column
 * @method SponsorsQuery groupBySpeccode() Group by the SpecCode column
 * @method SponsorsQuery groupByEntered() Group by the Entered column
 * @method SponsorsQuery groupByDateentered() Group by the DateEntered column
 * @method SponsorsQuery groupByModified() Group by the Modified column
 * @method SponsorsQuery groupByDatemodified() Group by the DateModified column
 * @method SponsorsQuery groupByExpert() Group by the Expert column
 * @method SponsorsQuery groupByDatechecked() Group by the DateChecked column
 * @method SponsorsQuery groupByTs() Group by the TS column
 *
 * @method SponsorsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SponsorsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SponsorsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Sponsors findOne(PropelPDO $con = null) Return the first Sponsors matching the query
 * @method Sponsors findOneOrCreate(PropelPDO $con = null) Return the first Sponsors matching the query, or a new Sponsors object populated from the query conditions when no match is found
 *
 * @method Sponsors findOneBySponsorshipid(int $SponsorshipID) Return the first Sponsors filtered by the SponsorshipID column
 * @method Sponsors findOneBySponsorfor(string $SponsorFor) Return the first Sponsors filtered by the SponsorFor column
 * @method Sponsors findOneBySponsor(string $Sponsor) Return the first Sponsors filtered by the Sponsor column
 * @method Sponsors findOneBySponsortext(string $SponsorText) Return the first Sponsors filtered by the SponsorText column
 * @method Sponsors findOneByPartnertype(string $PartnerType) Return the first Sponsors filtered by the PartnerType column
 * @method Sponsors findOneByContactperson(string $ContactPerson) Return the first Sponsors filtered by the ContactPerson column
 * @method Sponsors findOneByAddress(string $Address) Return the first Sponsors filtered by the Address column
 * @method Sponsors findOneByEmail(string $Email) Return the first Sponsors filtered by the Email column
 * @method Sponsors findOneByUrl(string $URL) Return the first Sponsors filtered by the URL column
 * @method Sponsors findOneByLogo(string $Logo) Return the first Sponsors filtered by the Logo column
 * @method Sponsors findOneByStartrent(string $StartRent) Return the first Sponsors filtered by the StartRent column
 * @method Sponsors findOneByEndrent(string $EndRent) Return the first Sponsors filtered by the EndRent column
 * @method Sponsors findOneByCost(double $Cost) Return the first Sponsors filtered by the Cost column
 * @method Sponsors findOneByReceived(string $Received) Return the first Sponsors filtered by the Received column
 * @method Sponsors findOneByRemarks(string $Remarks) Return the first Sponsors filtered by the Remarks column
 * @method Sponsors findOneBySpeccode(int $SpecCode) Return the first Sponsors filtered by the SpecCode column
 * @method Sponsors findOneByEntered(int $Entered) Return the first Sponsors filtered by the Entered column
 * @method Sponsors findOneByDateentered(string $DateEntered) Return the first Sponsors filtered by the DateEntered column
 * @method Sponsors findOneByModified(int $Modified) Return the first Sponsors filtered by the Modified column
 * @method Sponsors findOneByDatemodified(string $DateModified) Return the first Sponsors filtered by the DateModified column
 * @method Sponsors findOneByExpert(int $Expert) Return the first Sponsors filtered by the Expert column
 * @method Sponsors findOneByDatechecked(string $DateChecked) Return the first Sponsors filtered by the DateChecked column
 * @method Sponsors findOneByTs(string $TS) Return the first Sponsors filtered by the TS column
 *
 * @method array findBySponsorshipid(int $SponsorshipID) Return Sponsors objects filtered by the SponsorshipID column
 * @method array findBySponsorfor(string $SponsorFor) Return Sponsors objects filtered by the SponsorFor column
 * @method array findBySponsor(string $Sponsor) Return Sponsors objects filtered by the Sponsor column
 * @method array findBySponsortext(string $SponsorText) Return Sponsors objects filtered by the SponsorText column
 * @method array findByPartnertype(string $PartnerType) Return Sponsors objects filtered by the PartnerType column
 * @method array findByContactperson(string $ContactPerson) Return Sponsors objects filtered by the ContactPerson column
 * @method array findByAddress(string $Address) Return Sponsors objects filtered by the Address column
 * @method array findByEmail(string $Email) Return Sponsors objects filtered by the Email column
 * @method array findByUrl(string $URL) Return Sponsors objects filtered by the URL column
 * @method array findByLogo(string $Logo) Return Sponsors objects filtered by the Logo column
 * @method array findByStartrent(string $StartRent) Return Sponsors objects filtered by the StartRent column
 * @method array findByEndrent(string $EndRent) Return Sponsors objects filtered by the EndRent column
 * @method array findByCost(double $Cost) Return Sponsors objects filtered by the Cost column
 * @method array findByReceived(string $Received) Return Sponsors objects filtered by the Received column
 * @method array findByRemarks(string $Remarks) Return Sponsors objects filtered by the Remarks column
 * @method array findBySpeccode(int $SpecCode) Return Sponsors objects filtered by the SpecCode column
 * @method array findByEntered(int $Entered) Return Sponsors objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Sponsors objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Sponsors objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Sponsors objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Sponsors objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Sponsors objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Sponsors objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseSponsorsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSponsorsQuery object.
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
            $modelName = 'Sponsors';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SponsorsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SponsorsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SponsorsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SponsorsQuery) {
            return $criteria;
        }
        $query = new SponsorsQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$Sponsor, $SpecCode]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Sponsors|Sponsors[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SponsorsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SponsorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Sponsors A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `SponsorshipID`, `SponsorFor`, `Sponsor`, `SponsorText`, `PartnerType`, `ContactPerson`, `Address`, `Email`, `URL`, `Logo`, `StartRent`, `EndRent`, `Cost`, `Received`, `Remarks`, `SpecCode`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `sponsors` WHERE `Sponsor` = :p0 AND `SpecCode` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Sponsors();
            $obj->hydrate($row);
            SponsorsPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Sponsors|Sponsors[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Sponsors[]|mixed the list of results, formatted by the current formatter
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
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(SponsorsPeer::SPONSOR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SponsorsPeer::SPECCODE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SponsorsPeer::SPONSOR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SponsorsPeer::SPECCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the SponsorshipID column
     *
     * Example usage:
     * <code>
     * $query->filterBySponsorshipid(1234); // WHERE SponsorshipID = 1234
     * $query->filterBySponsorshipid(array(12, 34)); // WHERE SponsorshipID IN (12, 34)
     * $query->filterBySponsorshipid(array('min' => 12)); // WHERE SponsorshipID >= 12
     * $query->filterBySponsorshipid(array('max' => 12)); // WHERE SponsorshipID <= 12
     * </code>
     *
     * @param     mixed $sponsorshipid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterBySponsorshipid($sponsorshipid = null, $comparison = null)
    {
        if (is_array($sponsorshipid)) {
            $useMinMax = false;
            if (isset($sponsorshipid['min'])) {
                $this->addUsingAlias(SponsorsPeer::SPONSORSHIPID, $sponsorshipid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sponsorshipid['max'])) {
                $this->addUsingAlias(SponsorsPeer::SPONSORSHIPID, $sponsorshipid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SponsorsPeer::SPONSORSHIPID, $sponsorshipid, $comparison);
    }

    /**
     * Filter the query on the SponsorFor column
     *
     * Example usage:
     * <code>
     * $query->filterBySponsorfor('fooValue');   // WHERE SponsorFor = 'fooValue'
     * $query->filterBySponsorfor('%fooValue%'); // WHERE SponsorFor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sponsorfor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterBySponsorfor($sponsorfor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sponsorfor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sponsorfor)) {
                $sponsorfor = str_replace('*', '%', $sponsorfor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SponsorsPeer::SPONSORFOR, $sponsorfor, $comparison);
    }

    /**
     * Filter the query on the Sponsor column
     *
     * Example usage:
     * <code>
     * $query->filterBySponsor('fooValue');   // WHERE Sponsor = 'fooValue'
     * $query->filterBySponsor('%fooValue%'); // WHERE Sponsor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sponsor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterBySponsor($sponsor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sponsor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sponsor)) {
                $sponsor = str_replace('*', '%', $sponsor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SponsorsPeer::SPONSOR, $sponsor, $comparison);
    }

    /**
     * Filter the query on the SponsorText column
     *
     * Example usage:
     * <code>
     * $query->filterBySponsortext('fooValue');   // WHERE SponsorText = 'fooValue'
     * $query->filterBySponsortext('%fooValue%'); // WHERE SponsorText LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sponsortext The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterBySponsortext($sponsortext = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sponsortext)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sponsortext)) {
                $sponsortext = str_replace('*', '%', $sponsortext);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SponsorsPeer::SPONSORTEXT, $sponsortext, $comparison);
    }

    /**
     * Filter the query on the PartnerType column
     *
     * Example usage:
     * <code>
     * $query->filterByPartnertype('fooValue');   // WHERE PartnerType = 'fooValue'
     * $query->filterByPartnertype('%fooValue%'); // WHERE PartnerType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $partnertype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterByPartnertype($partnertype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($partnertype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $partnertype)) {
                $partnertype = str_replace('*', '%', $partnertype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SponsorsPeer::PARTNERTYPE, $partnertype, $comparison);
    }

    /**
     * Filter the query on the ContactPerson column
     *
     * Example usage:
     * <code>
     * $query->filterByContactperson('fooValue');   // WHERE ContactPerson = 'fooValue'
     * $query->filterByContactperson('%fooValue%'); // WHERE ContactPerson LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactperson The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterByContactperson($contactperson = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactperson)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contactperson)) {
                $contactperson = str_replace('*', '%', $contactperson);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SponsorsPeer::CONTACTPERSON, $contactperson, $comparison);
    }

    /**
     * Filter the query on the Address column
     *
     * Example usage:
     * <code>
     * $query->filterByAddress('fooValue');   // WHERE Address = 'fooValue'
     * $query->filterByAddress('%fooValue%'); // WHERE Address LIKE '%fooValue%'
     * </code>
     *
     * @param     string $address The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterByAddress($address = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($address)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $address)) {
                $address = str_replace('*', '%', $address);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SponsorsPeer::ADDRESS, $address, $comparison);
    }

    /**
     * Filter the query on the Email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE Email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE Email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SponsorsPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the URL column
     *
     * Example usage:
     * <code>
     * $query->filterByUrl('fooValue');   // WHERE URL = 'fooValue'
     * $query->filterByUrl('%fooValue%'); // WHERE URL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $url The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterByUrl($url = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($url)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $url)) {
                $url = str_replace('*', '%', $url);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SponsorsPeer::URL, $url, $comparison);
    }

    /**
     * Filter the query on the Logo column
     *
     * Example usage:
     * <code>
     * $query->filterByLogo('fooValue');   // WHERE Logo = 'fooValue'
     * $query->filterByLogo('%fooValue%'); // WHERE Logo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $logo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterByLogo($logo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($logo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $logo)) {
                $logo = str_replace('*', '%', $logo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SponsorsPeer::LOGO, $logo, $comparison);
    }

    /**
     * Filter the query on the StartRent column
     *
     * Example usage:
     * <code>
     * $query->filterByStartrent('2011-03-14'); // WHERE StartRent = '2011-03-14'
     * $query->filterByStartrent('now'); // WHERE StartRent = '2011-03-14'
     * $query->filterByStartrent(array('max' => 'yesterday')); // WHERE StartRent < '2011-03-13'
     * </code>
     *
     * @param     mixed $startrent The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterByStartrent($startrent = null, $comparison = null)
    {
        if (is_array($startrent)) {
            $useMinMax = false;
            if (isset($startrent['min'])) {
                $this->addUsingAlias(SponsorsPeer::STARTRENT, $startrent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($startrent['max'])) {
                $this->addUsingAlias(SponsorsPeer::STARTRENT, $startrent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SponsorsPeer::STARTRENT, $startrent, $comparison);
    }

    /**
     * Filter the query on the EndRent column
     *
     * Example usage:
     * <code>
     * $query->filterByEndrent('2011-03-14'); // WHERE EndRent = '2011-03-14'
     * $query->filterByEndrent('now'); // WHERE EndRent = '2011-03-14'
     * $query->filterByEndrent(array('max' => 'yesterday')); // WHERE EndRent < '2011-03-13'
     * </code>
     *
     * @param     mixed $endrent The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterByEndrent($endrent = null, $comparison = null)
    {
        if (is_array($endrent)) {
            $useMinMax = false;
            if (isset($endrent['min'])) {
                $this->addUsingAlias(SponsorsPeer::ENDRENT, $endrent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($endrent['max'])) {
                $this->addUsingAlias(SponsorsPeer::ENDRENT, $endrent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SponsorsPeer::ENDRENT, $endrent, $comparison);
    }

    /**
     * Filter the query on the Cost column
     *
     * Example usage:
     * <code>
     * $query->filterByCost(1234); // WHERE Cost = 1234
     * $query->filterByCost(array(12, 34)); // WHERE Cost IN (12, 34)
     * $query->filterByCost(array('min' => 12)); // WHERE Cost >= 12
     * $query->filterByCost(array('max' => 12)); // WHERE Cost <= 12
     * </code>
     *
     * @param     mixed $cost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterByCost($cost = null, $comparison = null)
    {
        if (is_array($cost)) {
            $useMinMax = false;
            if (isset($cost['min'])) {
                $this->addUsingAlias(SponsorsPeer::COST, $cost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cost['max'])) {
                $this->addUsingAlias(SponsorsPeer::COST, $cost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SponsorsPeer::COST, $cost, $comparison);
    }

    /**
     * Filter the query on the Received column
     *
     * Example usage:
     * <code>
     * $query->filterByReceived('fooValue');   // WHERE Received = 'fooValue'
     * $query->filterByReceived('%fooValue%'); // WHERE Received LIKE '%fooValue%'
     * </code>
     *
     * @param     string $received The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterByReceived($received = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($received)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $received)) {
                $received = str_replace('*', '%', $received);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SponsorsPeer::RECEIVED, $received, $comparison);
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
     * @return SponsorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SponsorsPeer::REMARKS, $remarks, $comparison);
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
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(SponsorsPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(SponsorsPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SponsorsPeer::SPECCODE, $speccode, $comparison);
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
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(SponsorsPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(SponsorsPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SponsorsPeer::ENTERED, $entered, $comparison);
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
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(SponsorsPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(SponsorsPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SponsorsPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(SponsorsPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(SponsorsPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SponsorsPeer::MODIFIED, $modified, $comparison);
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
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(SponsorsPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(SponsorsPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SponsorsPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(SponsorsPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(SponsorsPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SponsorsPeer::EXPERT, $expert, $comparison);
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
     * @return SponsorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SponsorsPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(SponsorsPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(SponsorsPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SponsorsPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Sponsors $sponsors Object to remove from the list of results
     *
     * @return SponsorsQuery The current query, for fluid interface
     */
    public function prune($sponsors = null)
    {
        if ($sponsors) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SponsorsPeer::SPONSOR), $sponsors->getSponsor(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SponsorsPeer::SPECCODE), $sponsors->getSpeccode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
