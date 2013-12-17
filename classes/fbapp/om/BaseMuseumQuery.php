<?php


/**
 * Base class that represents a query for the 'museum' table.
 *
 *
 *
 * @method MuseumQuery orderByOccurrencerefno($order = Criteria::ASC) Order by the OccurrenceRefNo column
 * @method MuseumQuery orderByMuseum($order = Criteria::ASC) Order by the Museum column
 * @method MuseumQuery orderByAcronym($order = Criteria::ASC) Order by the Acronym column
 * @method MuseumQuery orderByAddress($order = Criteria::ASC) Order by the Address column
 * @method MuseumQuery orderByCity($order = Criteria::ASC) Order by the City column
 * @method MuseumQuery orderByCCode($order = Criteria::ASC) Order by the C_code column
 * @method MuseumQuery orderByLogourl($order = Criteria::ASC) Order by the LogoURL column
 * @method MuseumQuery orderByOnline($order = Criteria::ASC) Order by the Online column
 * @method MuseumQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method MuseumQuery orderByHomepageurl($order = Criteria::ASC) Order by the HomePageURL column
 * @method MuseumQuery orderByOnlinedatabase($order = Criteria::ASC) Order by the OnlineDatabase column
 * @method MuseumQuery orderByCataloguenumprefix1($order = Criteria::ASC) Order by the CatalogueNumPrefix1 column
 * @method MuseumQuery orderByCataloguenumberprefix2($order = Criteria::ASC) Order by the CatalogueNumberPrefix2 column
 * @method MuseumQuery orderByCataloguenumberprefix3($order = Criteria::ASC) Order by the CatalogueNumberPrefix3 column
 * @method MuseumQuery orderByContactperson1($order = Criteria::ASC) Order by the ContactPerson1 column
 * @method MuseumQuery orderByContactperson1email($order = Criteria::ASC) Order by the ContactPerson1Email column
 * @method MuseumQuery orderByContactperson2($order = Criteria::ASC) Order by the ContactPerson2 column
 * @method MuseumQuery orderByContactperson2email($order = Criteria::ASC) Order by the ContactPerson2Email column
 * @method MuseumQuery orderByFirstversiondate($order = Criteria::ASC) Order by the FirstVersionDate column
 * @method MuseumQuery orderByVersiondate($order = Criteria::ASC) Order by the VersionDate column
 * @method MuseumQuery orderByValidity($order = Criteria::ASC) Order by the Validity column
 * @method MuseumQuery orderByLastupdatedate($order = Criteria::ASC) Order by the LastUpdateDate column
 * @method MuseumQuery orderByDatabaseformat($order = Criteria::ASC) Order by the DatabaseFormat column
 * @method MuseumQuery orderByAccessions($order = Criteria::ASC) Order by the Accessions column
 * @method MuseumQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method MuseumQuery orderByFamilies($order = Criteria::ASC) Order by the Families column
 * @method MuseumQuery orderByCountries($order = Criteria::ASC) Order by the Countries column
 * @method MuseumQuery orderByTopcountry($order = Criteria::ASC) Order by the TopCountry column
 * @method MuseumQuery orderByTopcountryrecords($order = Criteria::ASC) Order by the TopCountryRecords column
 * @method MuseumQuery orderByCoordinates($order = Criteria::ASC) Order by the Coordinates column
 * @method MuseumQuery orderByPercentcoordinates($order = Criteria::ASC) Order by the PercentCoordinates column
 * @method MuseumQuery orderByDateoldestrecord($order = Criteria::ASC) Order by the DateOldestRecord column
 * @method MuseumQuery orderByDatemostrecentrecord($order = Criteria::ASC) Order by the DateMostRecentRecord column
 * @method MuseumQuery orderByYearoldestrecord($order = Criteria::ASC) Order by the YearOldestRecord column
 * @method MuseumQuery orderByYearmostrecentrecord($order = Criteria::ASC) Order by the YearMostRecentRecord column
 * @method MuseumQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method MuseumQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method MuseumQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method MuseumQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method MuseumQuery orderByValidnames($order = Criteria::ASC) Order by the validnames column
 * @method MuseumQuery orderByPercentvalid($order = Criteria::ASC) Order by the PercentValid column
 * @method MuseumQuery orderBySynonyms($order = Criteria::ASC) Order by the synonyms column
 * @method MuseumQuery orderByPercentsynonym($order = Criteria::ASC) Order by the PercentSynonym column
 * @method MuseumQuery orderByNonmatching($order = Criteria::ASC) Order by the non-matching column
 * @method MuseumQuery orderByPercentnonmatching($order = Criteria::ASC) Order by the PercentNon-matching column
 * @method MuseumQuery orderByAmbiguousname($order = Criteria::ASC) Order by the AmbiguousName column
 * @method MuseumQuery orderByPercentambiguous($order = Criteria::ASC) Order by the PercentAmbiguous column
 * @method MuseumQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method MuseumQuery groupByOccurrencerefno() Group by the OccurrenceRefNo column
 * @method MuseumQuery groupByMuseum() Group by the Museum column
 * @method MuseumQuery groupByAcronym() Group by the Acronym column
 * @method MuseumQuery groupByAddress() Group by the Address column
 * @method MuseumQuery groupByCity() Group by the City column
 * @method MuseumQuery groupByCCode() Group by the C_code column
 * @method MuseumQuery groupByLogourl() Group by the LogoURL column
 * @method MuseumQuery groupByOnline() Group by the Online column
 * @method MuseumQuery groupByRemarks() Group by the Remarks column
 * @method MuseumQuery groupByHomepageurl() Group by the HomePageURL column
 * @method MuseumQuery groupByOnlinedatabase() Group by the OnlineDatabase column
 * @method MuseumQuery groupByCataloguenumprefix1() Group by the CatalogueNumPrefix1 column
 * @method MuseumQuery groupByCataloguenumberprefix2() Group by the CatalogueNumberPrefix2 column
 * @method MuseumQuery groupByCataloguenumberprefix3() Group by the CatalogueNumberPrefix3 column
 * @method MuseumQuery groupByContactperson1() Group by the ContactPerson1 column
 * @method MuseumQuery groupByContactperson1email() Group by the ContactPerson1Email column
 * @method MuseumQuery groupByContactperson2() Group by the ContactPerson2 column
 * @method MuseumQuery groupByContactperson2email() Group by the ContactPerson2Email column
 * @method MuseumQuery groupByFirstversiondate() Group by the FirstVersionDate column
 * @method MuseumQuery groupByVersiondate() Group by the VersionDate column
 * @method MuseumQuery groupByValidity() Group by the Validity column
 * @method MuseumQuery groupByLastupdatedate() Group by the LastUpdateDate column
 * @method MuseumQuery groupByDatabaseformat() Group by the DatabaseFormat column
 * @method MuseumQuery groupByAccessions() Group by the Accessions column
 * @method MuseumQuery groupBySpecies() Group by the Species column
 * @method MuseumQuery groupByFamilies() Group by the Families column
 * @method MuseumQuery groupByCountries() Group by the Countries column
 * @method MuseumQuery groupByTopcountry() Group by the TopCountry column
 * @method MuseumQuery groupByTopcountryrecords() Group by the TopCountryRecords column
 * @method MuseumQuery groupByCoordinates() Group by the Coordinates column
 * @method MuseumQuery groupByPercentcoordinates() Group by the PercentCoordinates column
 * @method MuseumQuery groupByDateoldestrecord() Group by the DateOldestRecord column
 * @method MuseumQuery groupByDatemostrecentrecord() Group by the DateMostRecentRecord column
 * @method MuseumQuery groupByYearoldestrecord() Group by the YearOldestRecord column
 * @method MuseumQuery groupByYearmostrecentrecord() Group by the YearMostRecentRecord column
 * @method MuseumQuery groupByEntered() Group by the Entered column
 * @method MuseumQuery groupByDateentered() Group by the DateEntered column
 * @method MuseumQuery groupByModified() Group by the Modified column
 * @method MuseumQuery groupByDatemodified() Group by the DateModified column
 * @method MuseumQuery groupByValidnames() Group by the validnames column
 * @method MuseumQuery groupByPercentvalid() Group by the PercentValid column
 * @method MuseumQuery groupBySynonyms() Group by the synonyms column
 * @method MuseumQuery groupByPercentsynonym() Group by the PercentSynonym column
 * @method MuseumQuery groupByNonmatching() Group by the non-matching column
 * @method MuseumQuery groupByPercentnonmatching() Group by the PercentNon-matching column
 * @method MuseumQuery groupByAmbiguousname() Group by the AmbiguousName column
 * @method MuseumQuery groupByPercentambiguous() Group by the PercentAmbiguous column
 * @method MuseumQuery groupByTs() Group by the TS column
 *
 * @method MuseumQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MuseumQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MuseumQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Museum findOne(PropelPDO $con = null) Return the first Museum matching the query
 * @method Museum findOneOrCreate(PropelPDO $con = null) Return the first Museum matching the query, or a new Museum object populated from the query conditions when no match is found
 *
 * @method Museum findOneByMuseum(string $Museum) Return the first Museum filtered by the Museum column
 * @method Museum findOneByAcronym(string $Acronym) Return the first Museum filtered by the Acronym column
 * @method Museum findOneByAddress(string $Address) Return the first Museum filtered by the Address column
 * @method Museum findOneByCity(string $City) Return the first Museum filtered by the City column
 * @method Museum findOneByCCode(string $C_code) Return the first Museum filtered by the C_code column
 * @method Museum findOneByLogourl(string $LogoURL) Return the first Museum filtered by the LogoURL column
 * @method Museum findOneByOnline(int $Online) Return the first Museum filtered by the Online column
 * @method Museum findOneByRemarks(string $Remarks) Return the first Museum filtered by the Remarks column
 * @method Museum findOneByHomepageurl(string $HomePageURL) Return the first Museum filtered by the HomePageURL column
 * @method Museum findOneByOnlinedatabase(string $OnlineDatabase) Return the first Museum filtered by the OnlineDatabase column
 * @method Museum findOneByCataloguenumprefix1(string $CatalogueNumPrefix1) Return the first Museum filtered by the CatalogueNumPrefix1 column
 * @method Museum findOneByCataloguenumberprefix2(string $CatalogueNumberPrefix2) Return the first Museum filtered by the CatalogueNumberPrefix2 column
 * @method Museum findOneByCataloguenumberprefix3(string $CatalogueNumberPrefix3) Return the first Museum filtered by the CatalogueNumberPrefix3 column
 * @method Museum findOneByContactperson1(string $ContactPerson1) Return the first Museum filtered by the ContactPerson1 column
 * @method Museum findOneByContactperson1email(string $ContactPerson1Email) Return the first Museum filtered by the ContactPerson1Email column
 * @method Museum findOneByContactperson2(string $ContactPerson2) Return the first Museum filtered by the ContactPerson2 column
 * @method Museum findOneByContactperson2email(string $ContactPerson2Email) Return the first Museum filtered by the ContactPerson2Email column
 * @method Museum findOneByFirstversiondate(string $FirstVersionDate) Return the first Museum filtered by the FirstVersionDate column
 * @method Museum findOneByVersiondate(string $VersionDate) Return the first Museum filtered by the VersionDate column
 * @method Museum findOneByValidity(string $Validity) Return the first Museum filtered by the Validity column
 * @method Museum findOneByLastupdatedate(string $LastUpdateDate) Return the first Museum filtered by the LastUpdateDate column
 * @method Museum findOneByDatabaseformat(string $DatabaseFormat) Return the first Museum filtered by the DatabaseFormat column
 * @method Museum findOneByAccessions(int $Accessions) Return the first Museum filtered by the Accessions column
 * @method Museum findOneBySpecies(int $Species) Return the first Museum filtered by the Species column
 * @method Museum findOneByFamilies(int $Families) Return the first Museum filtered by the Families column
 * @method Museum findOneByCountries(int $Countries) Return the first Museum filtered by the Countries column
 * @method Museum findOneByTopcountry(string $TopCountry) Return the first Museum filtered by the TopCountry column
 * @method Museum findOneByTopcountryrecords(int $TopCountryRecords) Return the first Museum filtered by the TopCountryRecords column
 * @method Museum findOneByCoordinates(int $Coordinates) Return the first Museum filtered by the Coordinates column
 * @method Museum findOneByPercentcoordinates(int $PercentCoordinates) Return the first Museum filtered by the PercentCoordinates column
 * @method Museum findOneByDateoldestrecord(string $DateOldestRecord) Return the first Museum filtered by the DateOldestRecord column
 * @method Museum findOneByDatemostrecentrecord(string $DateMostRecentRecord) Return the first Museum filtered by the DateMostRecentRecord column
 * @method Museum findOneByYearoldestrecord(string $YearOldestRecord) Return the first Museum filtered by the YearOldestRecord column
 * @method Museum findOneByYearmostrecentrecord(string $YearMostRecentRecord) Return the first Museum filtered by the YearMostRecentRecord column
 * @method Museum findOneByEntered(int $Entered) Return the first Museum filtered by the Entered column
 * @method Museum findOneByDateentered(string $DateEntered) Return the first Museum filtered by the DateEntered column
 * @method Museum findOneByModified(int $Modified) Return the first Museum filtered by the Modified column
 * @method Museum findOneByDatemodified(string $DateModified) Return the first Museum filtered by the DateModified column
 * @method Museum findOneByValidnames(int $validnames) Return the first Museum filtered by the validnames column
 * @method Museum findOneByPercentvalid(double $PercentValid) Return the first Museum filtered by the PercentValid column
 * @method Museum findOneBySynonyms(int $synonyms) Return the first Museum filtered by the synonyms column
 * @method Museum findOneByPercentsynonym(double $PercentSynonym) Return the first Museum filtered by the PercentSynonym column
 * @method Museum findOneByNonmatching(int $non-matching) Return the first Museum filtered by the non-matching column
 * @method Museum findOneByPercentnonmatching(double $PercentNon-matching) Return the first Museum filtered by the PercentNon-matching column
 * @method Museum findOneByAmbiguousname(int $AmbiguousName) Return the first Museum filtered by the AmbiguousName column
 * @method Museum findOneByPercentambiguous(double $PercentAmbiguous) Return the first Museum filtered by the PercentAmbiguous column
 * @method Museum findOneByTs(string $TS) Return the first Museum filtered by the TS column
 *
 * @method array findByOccurrencerefno(int $OccurrenceRefNo) Return Museum objects filtered by the OccurrenceRefNo column
 * @method array findByMuseum(string $Museum) Return Museum objects filtered by the Museum column
 * @method array findByAcronym(string $Acronym) Return Museum objects filtered by the Acronym column
 * @method array findByAddress(string $Address) Return Museum objects filtered by the Address column
 * @method array findByCity(string $City) Return Museum objects filtered by the City column
 * @method array findByCCode(string $C_code) Return Museum objects filtered by the C_code column
 * @method array findByLogourl(string $LogoURL) Return Museum objects filtered by the LogoURL column
 * @method array findByOnline(int $Online) Return Museum objects filtered by the Online column
 * @method array findByRemarks(string $Remarks) Return Museum objects filtered by the Remarks column
 * @method array findByHomepageurl(string $HomePageURL) Return Museum objects filtered by the HomePageURL column
 * @method array findByOnlinedatabase(string $OnlineDatabase) Return Museum objects filtered by the OnlineDatabase column
 * @method array findByCataloguenumprefix1(string $CatalogueNumPrefix1) Return Museum objects filtered by the CatalogueNumPrefix1 column
 * @method array findByCataloguenumberprefix2(string $CatalogueNumberPrefix2) Return Museum objects filtered by the CatalogueNumberPrefix2 column
 * @method array findByCataloguenumberprefix3(string $CatalogueNumberPrefix3) Return Museum objects filtered by the CatalogueNumberPrefix3 column
 * @method array findByContactperson1(string $ContactPerson1) Return Museum objects filtered by the ContactPerson1 column
 * @method array findByContactperson1email(string $ContactPerson1Email) Return Museum objects filtered by the ContactPerson1Email column
 * @method array findByContactperson2(string $ContactPerson2) Return Museum objects filtered by the ContactPerson2 column
 * @method array findByContactperson2email(string $ContactPerson2Email) Return Museum objects filtered by the ContactPerson2Email column
 * @method array findByFirstversiondate(string $FirstVersionDate) Return Museum objects filtered by the FirstVersionDate column
 * @method array findByVersiondate(string $VersionDate) Return Museum objects filtered by the VersionDate column
 * @method array findByValidity(string $Validity) Return Museum objects filtered by the Validity column
 * @method array findByLastupdatedate(string $LastUpdateDate) Return Museum objects filtered by the LastUpdateDate column
 * @method array findByDatabaseformat(string $DatabaseFormat) Return Museum objects filtered by the DatabaseFormat column
 * @method array findByAccessions(int $Accessions) Return Museum objects filtered by the Accessions column
 * @method array findBySpecies(int $Species) Return Museum objects filtered by the Species column
 * @method array findByFamilies(int $Families) Return Museum objects filtered by the Families column
 * @method array findByCountries(int $Countries) Return Museum objects filtered by the Countries column
 * @method array findByTopcountry(string $TopCountry) Return Museum objects filtered by the TopCountry column
 * @method array findByTopcountryrecords(int $TopCountryRecords) Return Museum objects filtered by the TopCountryRecords column
 * @method array findByCoordinates(int $Coordinates) Return Museum objects filtered by the Coordinates column
 * @method array findByPercentcoordinates(int $PercentCoordinates) Return Museum objects filtered by the PercentCoordinates column
 * @method array findByDateoldestrecord(string $DateOldestRecord) Return Museum objects filtered by the DateOldestRecord column
 * @method array findByDatemostrecentrecord(string $DateMostRecentRecord) Return Museum objects filtered by the DateMostRecentRecord column
 * @method array findByYearoldestrecord(string $YearOldestRecord) Return Museum objects filtered by the YearOldestRecord column
 * @method array findByYearmostrecentrecord(string $YearMostRecentRecord) Return Museum objects filtered by the YearMostRecentRecord column
 * @method array findByEntered(int $Entered) Return Museum objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Museum objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Museum objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Museum objects filtered by the DateModified column
 * @method array findByValidnames(int $validnames) Return Museum objects filtered by the validnames column
 * @method array findByPercentvalid(double $PercentValid) Return Museum objects filtered by the PercentValid column
 * @method array findBySynonyms(int $synonyms) Return Museum objects filtered by the synonyms column
 * @method array findByPercentsynonym(double $PercentSynonym) Return Museum objects filtered by the PercentSynonym column
 * @method array findByNonmatching(int $non-matching) Return Museum objects filtered by the non-matching column
 * @method array findByPercentnonmatching(double $PercentNon-matching) Return Museum objects filtered by the PercentNon-matching column
 * @method array findByAmbiguousname(int $AmbiguousName) Return Museum objects filtered by the AmbiguousName column
 * @method array findByPercentambiguous(double $PercentAmbiguous) Return Museum objects filtered by the PercentAmbiguous column
 * @method array findByTs(string $TS) Return Museum objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMuseumQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMuseumQuery object.
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
            $modelName = 'Museum';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MuseumQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MuseumQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MuseumQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MuseumQuery) {
            return $criteria;
        }
        $query = new MuseumQuery(null, null, $modelAlias);

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
     * @return   Museum|Museum[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MuseumPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MuseumPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Museum A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOccurrencerefno($key, $con = null)
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
     * @return                 Museum A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `OccurrenceRefNo`, `Museum`, `Acronym`, `Address`, `City`, `C_code`, `LogoURL`, `Online`, `Remarks`, `HomePageURL`, `OnlineDatabase`, `CatalogueNumPrefix1`, `CatalogueNumberPrefix2`, `CatalogueNumberPrefix3`, `ContactPerson1`, `ContactPerson1Email`, `ContactPerson2`, `ContactPerson2Email`, `FirstVersionDate`, `VersionDate`, `Validity`, `LastUpdateDate`, `DatabaseFormat`, `Accessions`, `Species`, `Families`, `Countries`, `TopCountry`, `TopCountryRecords`, `Coordinates`, `PercentCoordinates`, `DateOldestRecord`, `DateMostRecentRecord`, `YearOldestRecord`, `YearMostRecentRecord`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `validnames`, `PercentValid`, `synonyms`, `PercentSynonym`, `non-matching`, `PercentNon-matching`, `AmbiguousName`, `PercentAmbiguous`, `TS` FROM `museum` WHERE `OccurrenceRefNo` = :p0';
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
            $obj = new Museum();
            $obj->hydrate($row);
            MuseumPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Museum|Museum[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Museum[]|mixed the list of results, formatted by the current formatter
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
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MuseumPeer::OCCURRENCEREFNO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MuseumPeer::OCCURRENCEREFNO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the OccurrenceRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByOccurrencerefno(1234); // WHERE OccurrenceRefNo = 1234
     * $query->filterByOccurrencerefno(array(12, 34)); // WHERE OccurrenceRefNo IN (12, 34)
     * $query->filterByOccurrencerefno(array('min' => 12)); // WHERE OccurrenceRefNo >= 12
     * $query->filterByOccurrencerefno(array('max' => 12)); // WHERE OccurrenceRefNo <= 12
     * </code>
     *
     * @param     mixed $occurrencerefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByOccurrencerefno($occurrencerefno = null, $comparison = null)
    {
        if (is_array($occurrencerefno)) {
            $useMinMax = false;
            if (isset($occurrencerefno['min'])) {
                $this->addUsingAlias(MuseumPeer::OCCURRENCEREFNO, $occurrencerefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($occurrencerefno['max'])) {
                $this->addUsingAlias(MuseumPeer::OCCURRENCEREFNO, $occurrencerefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::OCCURRENCEREFNO, $occurrencerefno, $comparison);
    }

    /**
     * Filter the query on the Museum column
     *
     * Example usage:
     * <code>
     * $query->filterByMuseum('fooValue');   // WHERE Museum = 'fooValue'
     * $query->filterByMuseum('%fooValue%'); // WHERE Museum LIKE '%fooValue%'
     * </code>
     *
     * @param     string $museum The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByMuseum($museum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($museum)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $museum)) {
                $museum = str_replace('*', '%', $museum);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MuseumPeer::MUSEUM, $museum, $comparison);
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
     * @return MuseumQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MuseumPeer::ACRONYM, $acronym, $comparison);
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
     * @return MuseumQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MuseumPeer::ADDRESS, $address, $comparison);
    }

    /**
     * Filter the query on the City column
     *
     * Example usage:
     * <code>
     * $query->filterByCity('fooValue');   // WHERE City = 'fooValue'
     * $query->filterByCity('%fooValue%'); // WHERE City LIKE '%fooValue%'
     * </code>
     *
     * @param     string $city The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByCity($city = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($city)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $city)) {
                $city = str_replace('*', '%', $city);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MuseumPeer::CITY, $city, $comparison);
    }

    /**
     * Filter the query on the C_code column
     *
     * Example usage:
     * <code>
     * $query->filterByCCode('fooValue');   // WHERE C_code = 'fooValue'
     * $query->filterByCCode('%fooValue%'); // WHERE C_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MuseumPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the LogoURL column
     *
     * Example usage:
     * <code>
     * $query->filterByLogourl('fooValue');   // WHERE LogoURL = 'fooValue'
     * $query->filterByLogourl('%fooValue%'); // WHERE LogoURL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $logourl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByLogourl($logourl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($logourl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $logourl)) {
                $logourl = str_replace('*', '%', $logourl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MuseumPeer::LOGOURL, $logourl, $comparison);
    }

    /**
     * Filter the query on the Online column
     *
     * Example usage:
     * <code>
     * $query->filterByOnline(1234); // WHERE Online = 1234
     * $query->filterByOnline(array(12, 34)); // WHERE Online IN (12, 34)
     * $query->filterByOnline(array('min' => 12)); // WHERE Online >= 12
     * $query->filterByOnline(array('max' => 12)); // WHERE Online <= 12
     * </code>
     *
     * @param     mixed $online The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByOnline($online = null, $comparison = null)
    {
        if (is_array($online)) {
            $useMinMax = false;
            if (isset($online['min'])) {
                $this->addUsingAlias(MuseumPeer::ONLINE, $online['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($online['max'])) {
                $this->addUsingAlias(MuseumPeer::ONLINE, $online['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::ONLINE, $online, $comparison);
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
     * @return MuseumQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MuseumPeer::REMARKS, $remarks, $comparison);
    }

    /**
     * Filter the query on the HomePageURL column
     *
     * Example usage:
     * <code>
     * $query->filterByHomepageurl('fooValue');   // WHERE HomePageURL = 'fooValue'
     * $query->filterByHomepageurl('%fooValue%'); // WHERE HomePageURL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $homepageurl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByHomepageurl($homepageurl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($homepageurl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $homepageurl)) {
                $homepageurl = str_replace('*', '%', $homepageurl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MuseumPeer::HOMEPAGEURL, $homepageurl, $comparison);
    }

    /**
     * Filter the query on the OnlineDatabase column
     *
     * Example usage:
     * <code>
     * $query->filterByOnlinedatabase('fooValue');   // WHERE OnlineDatabase = 'fooValue'
     * $query->filterByOnlinedatabase('%fooValue%'); // WHERE OnlineDatabase LIKE '%fooValue%'
     * </code>
     *
     * @param     string $onlinedatabase The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByOnlinedatabase($onlinedatabase = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($onlinedatabase)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $onlinedatabase)) {
                $onlinedatabase = str_replace('*', '%', $onlinedatabase);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MuseumPeer::ONLINEDATABASE, $onlinedatabase, $comparison);
    }

    /**
     * Filter the query on the CatalogueNumPrefix1 column
     *
     * Example usage:
     * <code>
     * $query->filterByCataloguenumprefix1('fooValue');   // WHERE CatalogueNumPrefix1 = 'fooValue'
     * $query->filterByCataloguenumprefix1('%fooValue%'); // WHERE CatalogueNumPrefix1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cataloguenumprefix1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByCataloguenumprefix1($cataloguenumprefix1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cataloguenumprefix1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cataloguenumprefix1)) {
                $cataloguenumprefix1 = str_replace('*', '%', $cataloguenumprefix1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MuseumPeer::CATALOGUENUMPREFIX1, $cataloguenumprefix1, $comparison);
    }

    /**
     * Filter the query on the CatalogueNumberPrefix2 column
     *
     * Example usage:
     * <code>
     * $query->filterByCataloguenumberprefix2('fooValue');   // WHERE CatalogueNumberPrefix2 = 'fooValue'
     * $query->filterByCataloguenumberprefix2('%fooValue%'); // WHERE CatalogueNumberPrefix2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cataloguenumberprefix2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByCataloguenumberprefix2($cataloguenumberprefix2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cataloguenumberprefix2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cataloguenumberprefix2)) {
                $cataloguenumberprefix2 = str_replace('*', '%', $cataloguenumberprefix2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MuseumPeer::CATALOGUENUMBERPREFIX2, $cataloguenumberprefix2, $comparison);
    }

    /**
     * Filter the query on the CatalogueNumberPrefix3 column
     *
     * Example usage:
     * <code>
     * $query->filterByCataloguenumberprefix3('fooValue');   // WHERE CatalogueNumberPrefix3 = 'fooValue'
     * $query->filterByCataloguenumberprefix3('%fooValue%'); // WHERE CatalogueNumberPrefix3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cataloguenumberprefix3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByCataloguenumberprefix3($cataloguenumberprefix3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cataloguenumberprefix3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cataloguenumberprefix3)) {
                $cataloguenumberprefix3 = str_replace('*', '%', $cataloguenumberprefix3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MuseumPeer::CATALOGUENUMBERPREFIX3, $cataloguenumberprefix3, $comparison);
    }

    /**
     * Filter the query on the ContactPerson1 column
     *
     * Example usage:
     * <code>
     * $query->filterByContactperson1('fooValue');   // WHERE ContactPerson1 = 'fooValue'
     * $query->filterByContactperson1('%fooValue%'); // WHERE ContactPerson1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactperson1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByContactperson1($contactperson1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactperson1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contactperson1)) {
                $contactperson1 = str_replace('*', '%', $contactperson1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MuseumPeer::CONTACTPERSON1, $contactperson1, $comparison);
    }

    /**
     * Filter the query on the ContactPerson1Email column
     *
     * Example usage:
     * <code>
     * $query->filterByContactperson1email('fooValue');   // WHERE ContactPerson1Email = 'fooValue'
     * $query->filterByContactperson1email('%fooValue%'); // WHERE ContactPerson1Email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactperson1email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByContactperson1email($contactperson1email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactperson1email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contactperson1email)) {
                $contactperson1email = str_replace('*', '%', $contactperson1email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MuseumPeer::CONTACTPERSON1EMAIL, $contactperson1email, $comparison);
    }

    /**
     * Filter the query on the ContactPerson2 column
     *
     * Example usage:
     * <code>
     * $query->filterByContactperson2('fooValue');   // WHERE ContactPerson2 = 'fooValue'
     * $query->filterByContactperson2('%fooValue%'); // WHERE ContactPerson2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactperson2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByContactperson2($contactperson2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactperson2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contactperson2)) {
                $contactperson2 = str_replace('*', '%', $contactperson2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MuseumPeer::CONTACTPERSON2, $contactperson2, $comparison);
    }

    /**
     * Filter the query on the ContactPerson2Email column
     *
     * Example usage:
     * <code>
     * $query->filterByContactperson2email('fooValue');   // WHERE ContactPerson2Email = 'fooValue'
     * $query->filterByContactperson2email('%fooValue%'); // WHERE ContactPerson2Email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactperson2email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByContactperson2email($contactperson2email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactperson2email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contactperson2email)) {
                $contactperson2email = str_replace('*', '%', $contactperson2email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MuseumPeer::CONTACTPERSON2EMAIL, $contactperson2email, $comparison);
    }

    /**
     * Filter the query on the FirstVersionDate column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstversiondate('2011-03-14'); // WHERE FirstVersionDate = '2011-03-14'
     * $query->filterByFirstversiondate('now'); // WHERE FirstVersionDate = '2011-03-14'
     * $query->filterByFirstversiondate(array('max' => 'yesterday')); // WHERE FirstVersionDate < '2011-03-13'
     * </code>
     *
     * @param     mixed $firstversiondate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByFirstversiondate($firstversiondate = null, $comparison = null)
    {
        if (is_array($firstversiondate)) {
            $useMinMax = false;
            if (isset($firstversiondate['min'])) {
                $this->addUsingAlias(MuseumPeer::FIRSTVERSIONDATE, $firstversiondate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($firstversiondate['max'])) {
                $this->addUsingAlias(MuseumPeer::FIRSTVERSIONDATE, $firstversiondate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::FIRSTVERSIONDATE, $firstversiondate, $comparison);
    }

    /**
     * Filter the query on the VersionDate column
     *
     * Example usage:
     * <code>
     * $query->filterByVersiondate('2011-03-14'); // WHERE VersionDate = '2011-03-14'
     * $query->filterByVersiondate('now'); // WHERE VersionDate = '2011-03-14'
     * $query->filterByVersiondate(array('max' => 'yesterday')); // WHERE VersionDate < '2011-03-13'
     * </code>
     *
     * @param     mixed $versiondate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByVersiondate($versiondate = null, $comparison = null)
    {
        if (is_array($versiondate)) {
            $useMinMax = false;
            if (isset($versiondate['min'])) {
                $this->addUsingAlias(MuseumPeer::VERSIONDATE, $versiondate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($versiondate['max'])) {
                $this->addUsingAlias(MuseumPeer::VERSIONDATE, $versiondate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::VERSIONDATE, $versiondate, $comparison);
    }

    /**
     * Filter the query on the Validity column
     *
     * Example usage:
     * <code>
     * $query->filterByValidity('fooValue');   // WHERE Validity = 'fooValue'
     * $query->filterByValidity('%fooValue%'); // WHERE Validity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $validity The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByValidity($validity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($validity)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $validity)) {
                $validity = str_replace('*', '%', $validity);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MuseumPeer::VALIDITY, $validity, $comparison);
    }

    /**
     * Filter the query on the LastUpdateDate column
     *
     * Example usage:
     * <code>
     * $query->filterByLastupdatedate('2011-03-14'); // WHERE LastUpdateDate = '2011-03-14'
     * $query->filterByLastupdatedate('now'); // WHERE LastUpdateDate = '2011-03-14'
     * $query->filterByLastupdatedate(array('max' => 'yesterday')); // WHERE LastUpdateDate < '2011-03-13'
     * </code>
     *
     * @param     mixed $lastupdatedate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByLastupdatedate($lastupdatedate = null, $comparison = null)
    {
        if (is_array($lastupdatedate)) {
            $useMinMax = false;
            if (isset($lastupdatedate['min'])) {
                $this->addUsingAlias(MuseumPeer::LASTUPDATEDATE, $lastupdatedate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastupdatedate['max'])) {
                $this->addUsingAlias(MuseumPeer::LASTUPDATEDATE, $lastupdatedate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::LASTUPDATEDATE, $lastupdatedate, $comparison);
    }

    /**
     * Filter the query on the DatabaseFormat column
     *
     * Example usage:
     * <code>
     * $query->filterByDatabaseformat('fooValue');   // WHERE DatabaseFormat = 'fooValue'
     * $query->filterByDatabaseformat('%fooValue%'); // WHERE DatabaseFormat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $databaseformat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByDatabaseformat($databaseformat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($databaseformat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $databaseformat)) {
                $databaseformat = str_replace('*', '%', $databaseformat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MuseumPeer::DATABASEFORMAT, $databaseformat, $comparison);
    }

    /**
     * Filter the query on the Accessions column
     *
     * Example usage:
     * <code>
     * $query->filterByAccessions(1234); // WHERE Accessions = 1234
     * $query->filterByAccessions(array(12, 34)); // WHERE Accessions IN (12, 34)
     * $query->filterByAccessions(array('min' => 12)); // WHERE Accessions >= 12
     * $query->filterByAccessions(array('max' => 12)); // WHERE Accessions <= 12
     * </code>
     *
     * @param     mixed $accessions The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByAccessions($accessions = null, $comparison = null)
    {
        if (is_array($accessions)) {
            $useMinMax = false;
            if (isset($accessions['min'])) {
                $this->addUsingAlias(MuseumPeer::ACCESSIONS, $accessions['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($accessions['max'])) {
                $this->addUsingAlias(MuseumPeer::ACCESSIONS, $accessions['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::ACCESSIONS, $accessions, $comparison);
    }

    /**
     * Filter the query on the Species column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecies(1234); // WHERE Species = 1234
     * $query->filterBySpecies(array(12, 34)); // WHERE Species IN (12, 34)
     * $query->filterBySpecies(array('min' => 12)); // WHERE Species >= 12
     * $query->filterBySpecies(array('max' => 12)); // WHERE Species <= 12
     * </code>
     *
     * @param     mixed $species The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterBySpecies($species = null, $comparison = null)
    {
        if (is_array($species)) {
            $useMinMax = false;
            if (isset($species['min'])) {
                $this->addUsingAlias(MuseumPeer::SPECIES, $species['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($species['max'])) {
                $this->addUsingAlias(MuseumPeer::SPECIES, $species['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::SPECIES, $species, $comparison);
    }

    /**
     * Filter the query on the Families column
     *
     * Example usage:
     * <code>
     * $query->filterByFamilies(1234); // WHERE Families = 1234
     * $query->filterByFamilies(array(12, 34)); // WHERE Families IN (12, 34)
     * $query->filterByFamilies(array('min' => 12)); // WHERE Families >= 12
     * $query->filterByFamilies(array('max' => 12)); // WHERE Families <= 12
     * </code>
     *
     * @param     mixed $families The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByFamilies($families = null, $comparison = null)
    {
        if (is_array($families)) {
            $useMinMax = false;
            if (isset($families['min'])) {
                $this->addUsingAlias(MuseumPeer::FAMILIES, $families['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($families['max'])) {
                $this->addUsingAlias(MuseumPeer::FAMILIES, $families['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::FAMILIES, $families, $comparison);
    }

    /**
     * Filter the query on the Countries column
     *
     * Example usage:
     * <code>
     * $query->filterByCountries(1234); // WHERE Countries = 1234
     * $query->filterByCountries(array(12, 34)); // WHERE Countries IN (12, 34)
     * $query->filterByCountries(array('min' => 12)); // WHERE Countries >= 12
     * $query->filterByCountries(array('max' => 12)); // WHERE Countries <= 12
     * </code>
     *
     * @param     mixed $countries The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByCountries($countries = null, $comparison = null)
    {
        if (is_array($countries)) {
            $useMinMax = false;
            if (isset($countries['min'])) {
                $this->addUsingAlias(MuseumPeer::COUNTRIES, $countries['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($countries['max'])) {
                $this->addUsingAlias(MuseumPeer::COUNTRIES, $countries['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::COUNTRIES, $countries, $comparison);
    }

    /**
     * Filter the query on the TopCountry column
     *
     * Example usage:
     * <code>
     * $query->filterByTopcountry('fooValue');   // WHERE TopCountry = 'fooValue'
     * $query->filterByTopcountry('%fooValue%'); // WHERE TopCountry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $topcountry The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByTopcountry($topcountry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($topcountry)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $topcountry)) {
                $topcountry = str_replace('*', '%', $topcountry);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MuseumPeer::TOPCOUNTRY, $topcountry, $comparison);
    }

    /**
     * Filter the query on the TopCountryRecords column
     *
     * Example usage:
     * <code>
     * $query->filterByTopcountryrecords(1234); // WHERE TopCountryRecords = 1234
     * $query->filterByTopcountryrecords(array(12, 34)); // WHERE TopCountryRecords IN (12, 34)
     * $query->filterByTopcountryrecords(array('min' => 12)); // WHERE TopCountryRecords >= 12
     * $query->filterByTopcountryrecords(array('max' => 12)); // WHERE TopCountryRecords <= 12
     * </code>
     *
     * @param     mixed $topcountryrecords The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByTopcountryrecords($topcountryrecords = null, $comparison = null)
    {
        if (is_array($topcountryrecords)) {
            $useMinMax = false;
            if (isset($topcountryrecords['min'])) {
                $this->addUsingAlias(MuseumPeer::TOPCOUNTRYRECORDS, $topcountryrecords['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($topcountryrecords['max'])) {
                $this->addUsingAlias(MuseumPeer::TOPCOUNTRYRECORDS, $topcountryrecords['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::TOPCOUNTRYRECORDS, $topcountryrecords, $comparison);
    }

    /**
     * Filter the query on the Coordinates column
     *
     * Example usage:
     * <code>
     * $query->filterByCoordinates(1234); // WHERE Coordinates = 1234
     * $query->filterByCoordinates(array(12, 34)); // WHERE Coordinates IN (12, 34)
     * $query->filterByCoordinates(array('min' => 12)); // WHERE Coordinates >= 12
     * $query->filterByCoordinates(array('max' => 12)); // WHERE Coordinates <= 12
     * </code>
     *
     * @param     mixed $coordinates The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByCoordinates($coordinates = null, $comparison = null)
    {
        if (is_array($coordinates)) {
            $useMinMax = false;
            if (isset($coordinates['min'])) {
                $this->addUsingAlias(MuseumPeer::COORDINATES, $coordinates['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coordinates['max'])) {
                $this->addUsingAlias(MuseumPeer::COORDINATES, $coordinates['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::COORDINATES, $coordinates, $comparison);
    }

    /**
     * Filter the query on the PercentCoordinates column
     *
     * Example usage:
     * <code>
     * $query->filterByPercentcoordinates(1234); // WHERE PercentCoordinates = 1234
     * $query->filterByPercentcoordinates(array(12, 34)); // WHERE PercentCoordinates IN (12, 34)
     * $query->filterByPercentcoordinates(array('min' => 12)); // WHERE PercentCoordinates >= 12
     * $query->filterByPercentcoordinates(array('max' => 12)); // WHERE PercentCoordinates <= 12
     * </code>
     *
     * @param     mixed $percentcoordinates The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByPercentcoordinates($percentcoordinates = null, $comparison = null)
    {
        if (is_array($percentcoordinates)) {
            $useMinMax = false;
            if (isset($percentcoordinates['min'])) {
                $this->addUsingAlias(MuseumPeer::PERCENTCOORDINATES, $percentcoordinates['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($percentcoordinates['max'])) {
                $this->addUsingAlias(MuseumPeer::PERCENTCOORDINATES, $percentcoordinates['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::PERCENTCOORDINATES, $percentcoordinates, $comparison);
    }

    /**
     * Filter the query on the DateOldestRecord column
     *
     * Example usage:
     * <code>
     * $query->filterByDateoldestrecord('fooValue');   // WHERE DateOldestRecord = 'fooValue'
     * $query->filterByDateoldestrecord('%fooValue%'); // WHERE DateOldestRecord LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateoldestrecord The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByDateoldestrecord($dateoldestrecord = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateoldestrecord)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateoldestrecord)) {
                $dateoldestrecord = str_replace('*', '%', $dateoldestrecord);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MuseumPeer::DATEOLDESTRECORD, $dateoldestrecord, $comparison);
    }

    /**
     * Filter the query on the DateMostRecentRecord column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemostrecentrecord('fooValue');   // WHERE DateMostRecentRecord = 'fooValue'
     * $query->filterByDatemostrecentrecord('%fooValue%'); // WHERE DateMostRecentRecord LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datemostrecentrecord The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByDatemostrecentrecord($datemostrecentrecord = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datemostrecentrecord)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datemostrecentrecord)) {
                $datemostrecentrecord = str_replace('*', '%', $datemostrecentrecord);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MuseumPeer::DATEMOSTRECENTRECORD, $datemostrecentrecord, $comparison);
    }

    /**
     * Filter the query on the YearOldestRecord column
     *
     * Example usage:
     * <code>
     * $query->filterByYearoldestrecord('fooValue');   // WHERE YearOldestRecord = 'fooValue'
     * $query->filterByYearoldestrecord('%fooValue%'); // WHERE YearOldestRecord LIKE '%fooValue%'
     * </code>
     *
     * @param     string $yearoldestrecord The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByYearoldestrecord($yearoldestrecord = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($yearoldestrecord)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $yearoldestrecord)) {
                $yearoldestrecord = str_replace('*', '%', $yearoldestrecord);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MuseumPeer::YEAROLDESTRECORD, $yearoldestrecord, $comparison);
    }

    /**
     * Filter the query on the YearMostRecentRecord column
     *
     * Example usage:
     * <code>
     * $query->filterByYearmostrecentrecord('fooValue');   // WHERE YearMostRecentRecord = 'fooValue'
     * $query->filterByYearmostrecentrecord('%fooValue%'); // WHERE YearMostRecentRecord LIKE '%fooValue%'
     * </code>
     *
     * @param     string $yearmostrecentrecord The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByYearmostrecentrecord($yearmostrecentrecord = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($yearmostrecentrecord)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $yearmostrecentrecord)) {
                $yearmostrecentrecord = str_replace('*', '%', $yearmostrecentrecord);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MuseumPeer::YEARMOSTRECENTRECORD, $yearmostrecentrecord, $comparison);
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
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(MuseumPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(MuseumPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::ENTERED, $entered, $comparison);
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
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(MuseumPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(MuseumPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(MuseumPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(MuseumPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::MODIFIED, $modified, $comparison);
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
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(MuseumPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(MuseumPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::DATEMODIFIED, $datemodified, $comparison);
    }

    /**
     * Filter the query on the validnames column
     *
     * Example usage:
     * <code>
     * $query->filterByValidnames(1234); // WHERE validnames = 1234
     * $query->filterByValidnames(array(12, 34)); // WHERE validnames IN (12, 34)
     * $query->filterByValidnames(array('min' => 12)); // WHERE validnames >= 12
     * $query->filterByValidnames(array('max' => 12)); // WHERE validnames <= 12
     * </code>
     *
     * @param     mixed $validnames The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByValidnames($validnames = null, $comparison = null)
    {
        if (is_array($validnames)) {
            $useMinMax = false;
            if (isset($validnames['min'])) {
                $this->addUsingAlias(MuseumPeer::VALIDNAMES, $validnames['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($validnames['max'])) {
                $this->addUsingAlias(MuseumPeer::VALIDNAMES, $validnames['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::VALIDNAMES, $validnames, $comparison);
    }

    /**
     * Filter the query on the PercentValid column
     *
     * Example usage:
     * <code>
     * $query->filterByPercentvalid(1234); // WHERE PercentValid = 1234
     * $query->filterByPercentvalid(array(12, 34)); // WHERE PercentValid IN (12, 34)
     * $query->filterByPercentvalid(array('min' => 12)); // WHERE PercentValid >= 12
     * $query->filterByPercentvalid(array('max' => 12)); // WHERE PercentValid <= 12
     * </code>
     *
     * @param     mixed $percentvalid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByPercentvalid($percentvalid = null, $comparison = null)
    {
        if (is_array($percentvalid)) {
            $useMinMax = false;
            if (isset($percentvalid['min'])) {
                $this->addUsingAlias(MuseumPeer::PERCENTVALID, $percentvalid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($percentvalid['max'])) {
                $this->addUsingAlias(MuseumPeer::PERCENTVALID, $percentvalid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::PERCENTVALID, $percentvalid, $comparison);
    }

    /**
     * Filter the query on the synonyms column
     *
     * Example usage:
     * <code>
     * $query->filterBySynonyms(1234); // WHERE synonyms = 1234
     * $query->filterBySynonyms(array(12, 34)); // WHERE synonyms IN (12, 34)
     * $query->filterBySynonyms(array('min' => 12)); // WHERE synonyms >= 12
     * $query->filterBySynonyms(array('max' => 12)); // WHERE synonyms <= 12
     * </code>
     *
     * @param     mixed $synonyms The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterBySynonyms($synonyms = null, $comparison = null)
    {
        if (is_array($synonyms)) {
            $useMinMax = false;
            if (isset($synonyms['min'])) {
                $this->addUsingAlias(MuseumPeer::SYNONYMS, $synonyms['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($synonyms['max'])) {
                $this->addUsingAlias(MuseumPeer::SYNONYMS, $synonyms['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::SYNONYMS, $synonyms, $comparison);
    }

    /**
     * Filter the query on the PercentSynonym column
     *
     * Example usage:
     * <code>
     * $query->filterByPercentsynonym(1234); // WHERE PercentSynonym = 1234
     * $query->filterByPercentsynonym(array(12, 34)); // WHERE PercentSynonym IN (12, 34)
     * $query->filterByPercentsynonym(array('min' => 12)); // WHERE PercentSynonym >= 12
     * $query->filterByPercentsynonym(array('max' => 12)); // WHERE PercentSynonym <= 12
     * </code>
     *
     * @param     mixed $percentsynonym The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByPercentsynonym($percentsynonym = null, $comparison = null)
    {
        if (is_array($percentsynonym)) {
            $useMinMax = false;
            if (isset($percentsynonym['min'])) {
                $this->addUsingAlias(MuseumPeer::PERCENTSYNONYM, $percentsynonym['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($percentsynonym['max'])) {
                $this->addUsingAlias(MuseumPeer::PERCENTSYNONYM, $percentsynonym['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::PERCENTSYNONYM, $percentsynonym, $comparison);
    }

    /**
     * Filter the query on the non-matching column
     *
     * Example usage:
     * <code>
     * $query->filterByNonmatching(1234); // WHERE non-matching = 1234
     * $query->filterByNonmatching(array(12, 34)); // WHERE non-matching IN (12, 34)
     * $query->filterByNonmatching(array('min' => 12)); // WHERE non-matching >= 12
     * $query->filterByNonmatching(array('max' => 12)); // WHERE non-matching <= 12
     * </code>
     *
     * @param     mixed $nonmatching The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByNonmatching($nonmatching = null, $comparison = null)
    {
        if (is_array($nonmatching)) {
            $useMinMax = false;
            if (isset($nonmatching['min'])) {
                $this->addUsingAlias(MuseumPeer::NON-MATCHING, $nonmatching['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nonmatching['max'])) {
                $this->addUsingAlias(MuseumPeer::NON-MATCHING, $nonmatching['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::NON-MATCHING, $nonmatching, $comparison);
    }

    /**
     * Filter the query on the PercentNon-matching column
     *
     * Example usage:
     * <code>
     * $query->filterByPercentnonmatching(1234); // WHERE PercentNon-matching = 1234
     * $query->filterByPercentnonmatching(array(12, 34)); // WHERE PercentNon-matching IN (12, 34)
     * $query->filterByPercentnonmatching(array('min' => 12)); // WHERE PercentNon-matching >= 12
     * $query->filterByPercentnonmatching(array('max' => 12)); // WHERE PercentNon-matching <= 12
     * </code>
     *
     * @param     mixed $percentnonmatching The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByPercentnonmatching($percentnonmatching = null, $comparison = null)
    {
        if (is_array($percentnonmatching)) {
            $useMinMax = false;
            if (isset($percentnonmatching['min'])) {
                $this->addUsingAlias(MuseumPeer::PERCENTNON-MATCHING, $percentnonmatching['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($percentnonmatching['max'])) {
                $this->addUsingAlias(MuseumPeer::PERCENTNON-MATCHING, $percentnonmatching['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::PERCENTNON-MATCHING, $percentnonmatching, $comparison);
    }

    /**
     * Filter the query on the AmbiguousName column
     *
     * Example usage:
     * <code>
     * $query->filterByAmbiguousname(1234); // WHERE AmbiguousName = 1234
     * $query->filterByAmbiguousname(array(12, 34)); // WHERE AmbiguousName IN (12, 34)
     * $query->filterByAmbiguousname(array('min' => 12)); // WHERE AmbiguousName >= 12
     * $query->filterByAmbiguousname(array('max' => 12)); // WHERE AmbiguousName <= 12
     * </code>
     *
     * @param     mixed $ambiguousname The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByAmbiguousname($ambiguousname = null, $comparison = null)
    {
        if (is_array($ambiguousname)) {
            $useMinMax = false;
            if (isset($ambiguousname['min'])) {
                $this->addUsingAlias(MuseumPeer::AMBIGUOUSNAME, $ambiguousname['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ambiguousname['max'])) {
                $this->addUsingAlias(MuseumPeer::AMBIGUOUSNAME, $ambiguousname['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::AMBIGUOUSNAME, $ambiguousname, $comparison);
    }

    /**
     * Filter the query on the PercentAmbiguous column
     *
     * Example usage:
     * <code>
     * $query->filterByPercentambiguous(1234); // WHERE PercentAmbiguous = 1234
     * $query->filterByPercentambiguous(array(12, 34)); // WHERE PercentAmbiguous IN (12, 34)
     * $query->filterByPercentambiguous(array('min' => 12)); // WHERE PercentAmbiguous >= 12
     * $query->filterByPercentambiguous(array('max' => 12)); // WHERE PercentAmbiguous <= 12
     * </code>
     *
     * @param     mixed $percentambiguous The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByPercentambiguous($percentambiguous = null, $comparison = null)
    {
        if (is_array($percentambiguous)) {
            $useMinMax = false;
            if (isset($percentambiguous['min'])) {
                $this->addUsingAlias(MuseumPeer::PERCENTAMBIGUOUS, $percentambiguous['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($percentambiguous['max'])) {
                $this->addUsingAlias(MuseumPeer::PERCENTAMBIGUOUS, $percentambiguous['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::PERCENTAMBIGUOUS, $percentambiguous, $comparison);
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
     * @return MuseumQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(MuseumPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(MuseumPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MuseumPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Museum $museum Object to remove from the list of results
     *
     * @return MuseumQuery The current query, for fluid interface
     */
    public function prune($museum = null)
    {
        if ($museum) {
            $this->addUsingAlias(MuseumPeer::OCCURRENCEREFNO, $museum->getOccurrencerefno(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
