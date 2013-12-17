<?php


/**
 * Base class that represents a query for the 'institution_copy' table.
 *
 *
 *
 * @method InstitutionCopyQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method InstitutionCopyQuery orderByMainref($order = Criteria::ASC) Order by the MainRef column
 * @method InstitutionCopyQuery orderByAcronym($order = Criteria::ASC) Order by the Acronym column
 * @method InstitutionCopyQuery orderByFullname($order = Criteria::ASC) Order by the FullName column
 * @method InstitutionCopyQuery orderBySubjectarea($order = Criteria::ASC) Order by the SubjectArea column
 * @method InstitutionCopyQuery orderByType($order = Criteria::ASC) Order by the Type column
 * @method InstitutionCopyQuery orderByOutreach($order = Criteria::ASC) Order by the Outreach column
 * @method InstitutionCopyQuery orderByEstablished($order = Criteria::ASC) Order by the Established column
 * @method InstitutionCopyQuery orderByEstablishingdate($order = Criteria::ASC) Order by the EstablishingDate column
 * @method InstitutionCopyQuery orderByEntryintoforcedate($order = Criteria::ASC) Order by the EntryIntoForceDate column
 * @method InstitutionCopyQuery orderByExpirydate($order = Criteria::ASC) Order by the ExpiryDate column
 * @method InstitutionCopyQuery orderByLocalitycity($order = Criteria::ASC) Order by the LocalityCity column
 * @method InstitutionCopyQuery orderByLocalitycountry($order = Criteria::ASC) Order by the LocalityCountry column
 * @method InstitutionCopyQuery orderByDescription($order = Criteria::ASC) Order by the Description column
 * @method InstitutionCopyQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method InstitutionCopyQuery orderByFulltext($order = Criteria::ASC) Order by the FullText column
 * @method InstitutionCopyQuery orderByAddress($order = Criteria::ASC) Order by the Address column
 * @method InstitutionCopyQuery orderByTelephone($order = Criteria::ASC) Order by the Telephone column
 * @method InstitutionCopyQuery orderByFax($order = Criteria::ASC) Order by the Fax column
 * @method InstitutionCopyQuery orderByEmail($order = Criteria::ASC) Order by the EMail column
 * @method InstitutionCopyQuery orderByInternet($order = Criteria::ASC) Order by the Internet column
 * @method InstitutionCopyQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method InstitutionCopyQuery groupById() Group by the ID column
 * @method InstitutionCopyQuery groupByMainref() Group by the MainRef column
 * @method InstitutionCopyQuery groupByAcronym() Group by the Acronym column
 * @method InstitutionCopyQuery groupByFullname() Group by the FullName column
 * @method InstitutionCopyQuery groupBySubjectarea() Group by the SubjectArea column
 * @method InstitutionCopyQuery groupByType() Group by the Type column
 * @method InstitutionCopyQuery groupByOutreach() Group by the Outreach column
 * @method InstitutionCopyQuery groupByEstablished() Group by the Established column
 * @method InstitutionCopyQuery groupByEstablishingdate() Group by the EstablishingDate column
 * @method InstitutionCopyQuery groupByEntryintoforcedate() Group by the EntryIntoForceDate column
 * @method InstitutionCopyQuery groupByExpirydate() Group by the ExpiryDate column
 * @method InstitutionCopyQuery groupByLocalitycity() Group by the LocalityCity column
 * @method InstitutionCopyQuery groupByLocalitycountry() Group by the LocalityCountry column
 * @method InstitutionCopyQuery groupByDescription() Group by the Description column
 * @method InstitutionCopyQuery groupByRemarks() Group by the Remarks column
 * @method InstitutionCopyQuery groupByFulltext() Group by the FullText column
 * @method InstitutionCopyQuery groupByAddress() Group by the Address column
 * @method InstitutionCopyQuery groupByTelephone() Group by the Telephone column
 * @method InstitutionCopyQuery groupByFax() Group by the Fax column
 * @method InstitutionCopyQuery groupByEmail() Group by the EMail column
 * @method InstitutionCopyQuery groupByInternet() Group by the Internet column
 * @method InstitutionCopyQuery groupByTs() Group by the TS column
 *
 * @method InstitutionCopyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method InstitutionCopyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method InstitutionCopyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method InstitutionCopy findOne(PropelPDO $con = null) Return the first InstitutionCopy matching the query
 * @method InstitutionCopy findOneOrCreate(PropelPDO $con = null) Return the first InstitutionCopy matching the query, or a new InstitutionCopy object populated from the query conditions when no match is found
 *
 * @method InstitutionCopy findOneByMainref(string $MainRef) Return the first InstitutionCopy filtered by the MainRef column
 * @method InstitutionCopy findOneByAcronym(string $Acronym) Return the first InstitutionCopy filtered by the Acronym column
 * @method InstitutionCopy findOneByFullname(string $FullName) Return the first InstitutionCopy filtered by the FullName column
 * @method InstitutionCopy findOneBySubjectarea(string $SubjectArea) Return the first InstitutionCopy filtered by the SubjectArea column
 * @method InstitutionCopy findOneByType(string $Type) Return the first InstitutionCopy filtered by the Type column
 * @method InstitutionCopy findOneByOutreach(string $Outreach) Return the first InstitutionCopy filtered by the Outreach column
 * @method InstitutionCopy findOneByEstablished(string $Established) Return the first InstitutionCopy filtered by the Established column
 * @method InstitutionCopy findOneByEstablishingdate(string $EstablishingDate) Return the first InstitutionCopy filtered by the EstablishingDate column
 * @method InstitutionCopy findOneByEntryintoforcedate(string $EntryIntoForceDate) Return the first InstitutionCopy filtered by the EntryIntoForceDate column
 * @method InstitutionCopy findOneByExpirydate(string $ExpiryDate) Return the first InstitutionCopy filtered by the ExpiryDate column
 * @method InstitutionCopy findOneByLocalitycity(string $LocalityCity) Return the first InstitutionCopy filtered by the LocalityCity column
 * @method InstitutionCopy findOneByLocalitycountry(string $LocalityCountry) Return the first InstitutionCopy filtered by the LocalityCountry column
 * @method InstitutionCopy findOneByDescription(string $Description) Return the first InstitutionCopy filtered by the Description column
 * @method InstitutionCopy findOneByRemarks(string $Remarks) Return the first InstitutionCopy filtered by the Remarks column
 * @method InstitutionCopy findOneByFulltext(string $FullText) Return the first InstitutionCopy filtered by the FullText column
 * @method InstitutionCopy findOneByAddress(string $Address) Return the first InstitutionCopy filtered by the Address column
 * @method InstitutionCopy findOneByTelephone(string $Telephone) Return the first InstitutionCopy filtered by the Telephone column
 * @method InstitutionCopy findOneByFax(string $Fax) Return the first InstitutionCopy filtered by the Fax column
 * @method InstitutionCopy findOneByEmail(string $EMail) Return the first InstitutionCopy filtered by the EMail column
 * @method InstitutionCopy findOneByInternet(string $Internet) Return the first InstitutionCopy filtered by the Internet column
 * @method InstitutionCopy findOneByTs(string $TS) Return the first InstitutionCopy filtered by the TS column
 *
 * @method array findById(int $ID) Return InstitutionCopy objects filtered by the ID column
 * @method array findByMainref(string $MainRef) Return InstitutionCopy objects filtered by the MainRef column
 * @method array findByAcronym(string $Acronym) Return InstitutionCopy objects filtered by the Acronym column
 * @method array findByFullname(string $FullName) Return InstitutionCopy objects filtered by the FullName column
 * @method array findBySubjectarea(string $SubjectArea) Return InstitutionCopy objects filtered by the SubjectArea column
 * @method array findByType(string $Type) Return InstitutionCopy objects filtered by the Type column
 * @method array findByOutreach(string $Outreach) Return InstitutionCopy objects filtered by the Outreach column
 * @method array findByEstablished(string $Established) Return InstitutionCopy objects filtered by the Established column
 * @method array findByEstablishingdate(string $EstablishingDate) Return InstitutionCopy objects filtered by the EstablishingDate column
 * @method array findByEntryintoforcedate(string $EntryIntoForceDate) Return InstitutionCopy objects filtered by the EntryIntoForceDate column
 * @method array findByExpirydate(string $ExpiryDate) Return InstitutionCopy objects filtered by the ExpiryDate column
 * @method array findByLocalitycity(string $LocalityCity) Return InstitutionCopy objects filtered by the LocalityCity column
 * @method array findByLocalitycountry(string $LocalityCountry) Return InstitutionCopy objects filtered by the LocalityCountry column
 * @method array findByDescription(string $Description) Return InstitutionCopy objects filtered by the Description column
 * @method array findByRemarks(string $Remarks) Return InstitutionCopy objects filtered by the Remarks column
 * @method array findByFulltext(string $FullText) Return InstitutionCopy objects filtered by the FullText column
 * @method array findByAddress(string $Address) Return InstitutionCopy objects filtered by the Address column
 * @method array findByTelephone(string $Telephone) Return InstitutionCopy objects filtered by the Telephone column
 * @method array findByFax(string $Fax) Return InstitutionCopy objects filtered by the Fax column
 * @method array findByEmail(string $EMail) Return InstitutionCopy objects filtered by the EMail column
 * @method array findByInternet(string $Internet) Return InstitutionCopy objects filtered by the Internet column
 * @method array findByTs(string $TS) Return InstitutionCopy objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseInstitutionCopyQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseInstitutionCopyQuery object.
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
            $modelName = 'InstitutionCopy';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new InstitutionCopyQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   InstitutionCopyQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return InstitutionCopyQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof InstitutionCopyQuery) {
            return $criteria;
        }
        $query = new InstitutionCopyQuery(null, null, $modelAlias);

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
     * @return   InstitutionCopy|InstitutionCopy[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = InstitutionCopyPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(InstitutionCopyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 InstitutionCopy A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
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
     * @return                 InstitutionCopy A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `MainRef`, `Acronym`, `FullName`, `SubjectArea`, `Type`, `Outreach`, `Established`, `EstablishingDate`, `EntryIntoForceDate`, `ExpiryDate`, `LocalityCity`, `LocalityCountry`, `Description`, `Remarks`, `FullText`, `Address`, `Telephone`, `Fax`, `EMail`, `Internet`, `TS` FROM `institution_copy` WHERE `ID` = :p0';
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
            $obj = new InstitutionCopy();
            $obj->hydrate($row);
            InstitutionCopyPeer::addInstanceToPool($obj, (string) $key);
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
     * @return InstitutionCopy|InstitutionCopy[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|InstitutionCopy[]|mixed the list of results, formatted by the current formatter
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
     * @return InstitutionCopyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(InstitutionCopyPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return InstitutionCopyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(InstitutionCopyPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID >= 12
     * $query->filterById(array('max' => 12)); // WHERE ID <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstitutionCopyQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(InstitutionCopyPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(InstitutionCopyPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InstitutionCopyPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the MainRef column
     *
     * Example usage:
     * <code>
     * $query->filterByMainref('fooValue');   // WHERE MainRef = 'fooValue'
     * $query->filterByMainref('%fooValue%'); // WHERE MainRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mainref The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstitutionCopyQuery The current query, for fluid interface
     */
    public function filterByMainref($mainref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mainref)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mainref)) {
                $mainref = str_replace('*', '%', $mainref);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InstitutionCopyPeer::MAINREF, $mainref, $comparison);
    }

    /**
     * Filter the query on the Acronym column
     *
     * Example usage:
     * <code>
     * $query->filterByAcronym('fooValue');   // WHERE Acronym = 'fooValue'
     * $query->filterByAcronym('%fooValue%'); // WHERE Acronym LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acronym The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstitutionCopyQuery The current query, for fluid interface
     */
    public function filterByAcronym($acronym = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acronym)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acronym)) {
                $acronym = str_replace('*', '%', $acronym);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InstitutionCopyPeer::ACRONYM, $acronym, $comparison);
    }

    /**
     * Filter the query on the FullName column
     *
     * Example usage:
     * <code>
     * $query->filterByFullname('fooValue');   // WHERE FullName = 'fooValue'
     * $query->filterByFullname('%fooValue%'); // WHERE FullName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fullname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstitutionCopyQuery The current query, for fluid interface
     */
    public function filterByFullname($fullname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fullname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fullname)) {
                $fullname = str_replace('*', '%', $fullname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InstitutionCopyPeer::FULLNAME, $fullname, $comparison);
    }

    /**
     * Filter the query on the SubjectArea column
     *
     * Example usage:
     * <code>
     * $query->filterBySubjectarea('fooValue');   // WHERE SubjectArea = 'fooValue'
     * $query->filterBySubjectarea('%fooValue%'); // WHERE SubjectArea LIKE '%fooValue%'
     * </code>
     *
     * @param     string $subjectarea The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstitutionCopyQuery The current query, for fluid interface
     */
    public function filterBySubjectarea($subjectarea = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($subjectarea)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $subjectarea)) {
                $subjectarea = str_replace('*', '%', $subjectarea);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InstitutionCopyPeer::SUBJECTAREA, $subjectarea, $comparison);
    }

    /**
     * Filter the query on the Type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE Type = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE Type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstitutionCopyQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InstitutionCopyPeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the Outreach column
     *
     * Example usage:
     * <code>
     * $query->filterByOutreach('fooValue');   // WHERE Outreach = 'fooValue'
     * $query->filterByOutreach('%fooValue%'); // WHERE Outreach LIKE '%fooValue%'
     * </code>
     *
     * @param     string $outreach The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstitutionCopyQuery The current query, for fluid interface
     */
    public function filterByOutreach($outreach = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($outreach)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $outreach)) {
                $outreach = str_replace('*', '%', $outreach);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InstitutionCopyPeer::OUTREACH, $outreach, $comparison);
    }

    /**
     * Filter the query on the Established column
     *
     * Example usage:
     * <code>
     * $query->filterByEstablished('fooValue');   // WHERE Established = 'fooValue'
     * $query->filterByEstablished('%fooValue%'); // WHERE Established LIKE '%fooValue%'
     * </code>
     *
     * @param     string $established The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstitutionCopyQuery The current query, for fluid interface
     */
    public function filterByEstablished($established = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($established)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $established)) {
                $established = str_replace('*', '%', $established);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InstitutionCopyPeer::ESTABLISHED, $established, $comparison);
    }

    /**
     * Filter the query on the EstablishingDate column
     *
     * Example usage:
     * <code>
     * $query->filterByEstablishingdate('2011-03-14'); // WHERE EstablishingDate = '2011-03-14'
     * $query->filterByEstablishingdate('now'); // WHERE EstablishingDate = '2011-03-14'
     * $query->filterByEstablishingdate(array('max' => 'yesterday')); // WHERE EstablishingDate < '2011-03-13'
     * </code>
     *
     * @param     mixed $establishingdate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstitutionCopyQuery The current query, for fluid interface
     */
    public function filterByEstablishingdate($establishingdate = null, $comparison = null)
    {
        if (is_array($establishingdate)) {
            $useMinMax = false;
            if (isset($establishingdate['min'])) {
                $this->addUsingAlias(InstitutionCopyPeer::ESTABLISHINGDATE, $establishingdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($establishingdate['max'])) {
                $this->addUsingAlias(InstitutionCopyPeer::ESTABLISHINGDATE, $establishingdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InstitutionCopyPeer::ESTABLISHINGDATE, $establishingdate, $comparison);
    }

    /**
     * Filter the query on the EntryIntoForceDate column
     *
     * Example usage:
     * <code>
     * $query->filterByEntryintoforcedate('2011-03-14'); // WHERE EntryIntoForceDate = '2011-03-14'
     * $query->filterByEntryintoforcedate('now'); // WHERE EntryIntoForceDate = '2011-03-14'
     * $query->filterByEntryintoforcedate(array('max' => 'yesterday')); // WHERE EntryIntoForceDate < '2011-03-13'
     * </code>
     *
     * @param     mixed $entryintoforcedate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstitutionCopyQuery The current query, for fluid interface
     */
    public function filterByEntryintoforcedate($entryintoforcedate = null, $comparison = null)
    {
        if (is_array($entryintoforcedate)) {
            $useMinMax = false;
            if (isset($entryintoforcedate['min'])) {
                $this->addUsingAlias(InstitutionCopyPeer::ENTRYINTOFORCEDATE, $entryintoforcedate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entryintoforcedate['max'])) {
                $this->addUsingAlias(InstitutionCopyPeer::ENTRYINTOFORCEDATE, $entryintoforcedate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InstitutionCopyPeer::ENTRYINTOFORCEDATE, $entryintoforcedate, $comparison);
    }

    /**
     * Filter the query on the ExpiryDate column
     *
     * Example usage:
     * <code>
     * $query->filterByExpirydate('2011-03-14'); // WHERE ExpiryDate = '2011-03-14'
     * $query->filterByExpirydate('now'); // WHERE ExpiryDate = '2011-03-14'
     * $query->filterByExpirydate(array('max' => 'yesterday')); // WHERE ExpiryDate < '2011-03-13'
     * </code>
     *
     * @param     mixed $expirydate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstitutionCopyQuery The current query, for fluid interface
     */
    public function filterByExpirydate($expirydate = null, $comparison = null)
    {
        if (is_array($expirydate)) {
            $useMinMax = false;
            if (isset($expirydate['min'])) {
                $this->addUsingAlias(InstitutionCopyPeer::EXPIRYDATE, $expirydate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expirydate['max'])) {
                $this->addUsingAlias(InstitutionCopyPeer::EXPIRYDATE, $expirydate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InstitutionCopyPeer::EXPIRYDATE, $expirydate, $comparison);
    }

    /**
     * Filter the query on the LocalityCity column
     *
     * Example usage:
     * <code>
     * $query->filterByLocalitycity('fooValue');   // WHERE LocalityCity = 'fooValue'
     * $query->filterByLocalitycity('%fooValue%'); // WHERE LocalityCity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $localitycity The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstitutionCopyQuery The current query, for fluid interface
     */
    public function filterByLocalitycity($localitycity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($localitycity)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $localitycity)) {
                $localitycity = str_replace('*', '%', $localitycity);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InstitutionCopyPeer::LOCALITYCITY, $localitycity, $comparison);
    }

    /**
     * Filter the query on the LocalityCountry column
     *
     * Example usage:
     * <code>
     * $query->filterByLocalitycountry('fooValue');   // WHERE LocalityCountry = 'fooValue'
     * $query->filterByLocalitycountry('%fooValue%'); // WHERE LocalityCountry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $localitycountry The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstitutionCopyQuery The current query, for fluid interface
     */
    public function filterByLocalitycountry($localitycountry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($localitycountry)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $localitycountry)) {
                $localitycountry = str_replace('*', '%', $localitycountry);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InstitutionCopyPeer::LOCALITYCOUNTRY, $localitycountry, $comparison);
    }

    /**
     * Filter the query on the Description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE Description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE Description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstitutionCopyQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InstitutionCopyPeer::DESCRIPTION, $description, $comparison);
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
     * @return InstitutionCopyQuery The current query, for fluid interface
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

        return $this->addUsingAlias(InstitutionCopyPeer::REMARKS, $remarks, $comparison);
    }

    /**
     * Filter the query on the FullText column
     *
     * Example usage:
     * <code>
     * $query->filterByFulltext('fooValue');   // WHERE FullText = 'fooValue'
     * $query->filterByFulltext('%fooValue%'); // WHERE FullText LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fulltext The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstitutionCopyQuery The current query, for fluid interface
     */
    public function filterByFulltext($fulltext = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fulltext)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fulltext)) {
                $fulltext = str_replace('*', '%', $fulltext);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InstitutionCopyPeer::FULLTEXT, $fulltext, $comparison);
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
     * @return InstitutionCopyQuery The current query, for fluid interface
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

        return $this->addUsingAlias(InstitutionCopyPeer::ADDRESS, $address, $comparison);
    }

    /**
     * Filter the query on the Telephone column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephone('fooValue');   // WHERE Telephone = 'fooValue'
     * $query->filterByTelephone('%fooValue%'); // WHERE Telephone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstitutionCopyQuery The current query, for fluid interface
     */
    public function filterByTelephone($telephone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephone)) {
                $telephone = str_replace('*', '%', $telephone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InstitutionCopyPeer::TELEPHONE, $telephone, $comparison);
    }

    /**
     * Filter the query on the Fax column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE Fax = 'fooValue'
     * $query->filterByFax('%fooValue%'); // WHERE Fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstitutionCopyQuery The current query, for fluid interface
     */
    public function filterByFax($fax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fax)) {
                $fax = str_replace('*', '%', $fax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InstitutionCopyPeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the EMail column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE EMail = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE EMail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstitutionCopyQuery The current query, for fluid interface
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

        return $this->addUsingAlias(InstitutionCopyPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the Internet column
     *
     * Example usage:
     * <code>
     * $query->filterByInternet('fooValue');   // WHERE Internet = 'fooValue'
     * $query->filterByInternet('%fooValue%'); // WHERE Internet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $internet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstitutionCopyQuery The current query, for fluid interface
     */
    public function filterByInternet($internet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($internet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $internet)) {
                $internet = str_replace('*', '%', $internet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InstitutionCopyPeer::INTERNET, $internet, $comparison);
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
     * @return InstitutionCopyQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(InstitutionCopyPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(InstitutionCopyPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InstitutionCopyPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   InstitutionCopy $institutionCopy Object to remove from the list of results
     *
     * @return InstitutionCopyQuery The current query, for fluid interface
     */
    public function prune($institutionCopy = null)
    {
        if ($institutionCopy) {
            $this->addUsingAlias(InstitutionCopyPeer::ID, $institutionCopy->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
