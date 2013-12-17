<?php


/**
 * Base class that represents a query for the 'synonyms' table.
 *
 *
 *
 * @method SynonymsQuery orderBySyncode($order = Criteria::ASC) Order by the SynCode column
 * @method SynonymsQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method SynonymsQuery orderBySyngenus($order = Criteria::ASC) Order by the SynGenus column
 * @method SynonymsQuery orderBySynspecies($order = Criteria::ASC) Order by the SynSpecies column
 * @method SynonymsQuery orderByAuthor($order = Criteria::ASC) Order by the Author column
 * @method SynonymsQuery orderByYear($order = Criteria::ASC) Order by the Year column
 * @method SynonymsQuery orderBySynonymsref($order = Criteria::ASC) Order by the SynonymsRef column
 * @method SynonymsQuery orderByTaxonlevel($order = Criteria::ASC) Order by the TaxonLevel column
 * @method SynonymsQuery orderBySyncodevalid($order = Criteria::ASC) Order by the SyncodeValid column
 * @method SynonymsQuery orderByLastepithet($order = Criteria::ASC) Order by the LastEpithet column
 * @method SynonymsQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method SynonymsQuery orderByEtymology($order = Criteria::ASC) Order by the Etymology column
 * @method SynonymsQuery orderByStatus($order = Criteria::ASC) Order by the Status column
 * @method SynonymsQuery orderByValid($order = Criteria::ASC) Order by the Valid column
 * @method SynonymsQuery orderByValidtax($order = Criteria::ASC) Order by the ValidTax column
 * @method SynonymsQuery orderBySynonymy($order = Criteria::ASC) Order by the Synonymy column
 * @method SynonymsQuery orderBySynonymydetail($order = Criteria::ASC) Order by the SynonymyDetail column
 * @method SynonymsQuery orderByCombination($order = Criteria::ASC) Order by the Combination column
 * @method SynonymsQuery orderByOriginalpub($order = Criteria::ASC) Order by the OriginalPub column
 * @method SynonymsQuery orderByMisspelling($order = Criteria::ASC) Order by the Misspelling column
 * @method SynonymsQuery orderByMisspellingdetail($order = Criteria::ASC) Order by the MisspellingDetail column
 * @method SynonymsQuery orderByNounapposition($order = Criteria::ASC) Order by the NounApposition column
 * @method SynonymsQuery orderByStatusorder($order = Criteria::ASC) Order by the StatusOrder column
 * @method SynonymsQuery orderByRanksearch($order = Criteria::ASC) Order by the RankSearch column
 * @method SynonymsQuery orderByCommenttax($order = Criteria::ASC) Order by the CommentTax column
 * @method SynonymsQuery orderByGsdoriginal($order = Criteria::ASC) Order by the GSDOriginal column
 * @method SynonymsQuery orderByGsdstatus($order = Criteria::ASC) Order by the GSDStatus column
 * @method SynonymsQuery orderByGsdversiondate($order = Criteria::ASC) Order by the GSDVersionDate column
 * @method SynonymsQuery orderByGsdexpert($order = Criteria::ASC) Order by the GSDExpert column
 * @method SynonymsQuery orderByCasRefNo($order = Criteria::ASC) Order by the CAS_REF_NO column
 * @method SynonymsQuery orderByCasSpc($order = Criteria::ASC) Order by the CAS_SPC column
 * @method SynonymsQuery orderByCol($order = Criteria::ASC) Order by the CoL column
 * @method SynonymsQuery orderByColId($order = Criteria::ASC) Order by the CoL_ID column
 * @method SynonymsQuery orderByZoobankId($order = Criteria::ASC) Order by the ZooBank_ID column
 * @method SynonymsQuery orderByIonId($order = Criteria::ASC) Order by the ION_ID column
 * @method SynonymsQuery orderByTsn($order = Criteria::ASC) Order by the TSN column
 * @method SynonymsQuery orderByWormsId($order = Criteria::ASC) Order by the WoRMS_ID column
 * @method SynonymsQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method SynonymsQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method SynonymsQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method SynonymsQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method SynonymsQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method SynonymsQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method SynonymsQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method SynonymsQuery groupBySyncode() Group by the SynCode column
 * @method SynonymsQuery groupBySpeccode() Group by the SpecCode column
 * @method SynonymsQuery groupBySyngenus() Group by the SynGenus column
 * @method SynonymsQuery groupBySynspecies() Group by the SynSpecies column
 * @method SynonymsQuery groupByAuthor() Group by the Author column
 * @method SynonymsQuery groupByYear() Group by the Year column
 * @method SynonymsQuery groupBySynonymsref() Group by the SynonymsRef column
 * @method SynonymsQuery groupByTaxonlevel() Group by the TaxonLevel column
 * @method SynonymsQuery groupBySyncodevalid() Group by the SyncodeValid column
 * @method SynonymsQuery groupByLastepithet() Group by the LastEpithet column
 * @method SynonymsQuery groupByComment() Group by the Comment column
 * @method SynonymsQuery groupByEtymology() Group by the Etymology column
 * @method SynonymsQuery groupByStatus() Group by the Status column
 * @method SynonymsQuery groupByValid() Group by the Valid column
 * @method SynonymsQuery groupByValidtax() Group by the ValidTax column
 * @method SynonymsQuery groupBySynonymy() Group by the Synonymy column
 * @method SynonymsQuery groupBySynonymydetail() Group by the SynonymyDetail column
 * @method SynonymsQuery groupByCombination() Group by the Combination column
 * @method SynonymsQuery groupByOriginalpub() Group by the OriginalPub column
 * @method SynonymsQuery groupByMisspelling() Group by the Misspelling column
 * @method SynonymsQuery groupByMisspellingdetail() Group by the MisspellingDetail column
 * @method SynonymsQuery groupByNounapposition() Group by the NounApposition column
 * @method SynonymsQuery groupByStatusorder() Group by the StatusOrder column
 * @method SynonymsQuery groupByRanksearch() Group by the RankSearch column
 * @method SynonymsQuery groupByCommenttax() Group by the CommentTax column
 * @method SynonymsQuery groupByGsdoriginal() Group by the GSDOriginal column
 * @method SynonymsQuery groupByGsdstatus() Group by the GSDStatus column
 * @method SynonymsQuery groupByGsdversiondate() Group by the GSDVersionDate column
 * @method SynonymsQuery groupByGsdexpert() Group by the GSDExpert column
 * @method SynonymsQuery groupByCasRefNo() Group by the CAS_REF_NO column
 * @method SynonymsQuery groupByCasSpc() Group by the CAS_SPC column
 * @method SynonymsQuery groupByCol() Group by the CoL column
 * @method SynonymsQuery groupByColId() Group by the CoL_ID column
 * @method SynonymsQuery groupByZoobankId() Group by the ZooBank_ID column
 * @method SynonymsQuery groupByIonId() Group by the ION_ID column
 * @method SynonymsQuery groupByTsn() Group by the TSN column
 * @method SynonymsQuery groupByWormsId() Group by the WoRMS_ID column
 * @method SynonymsQuery groupByEntered() Group by the Entered column
 * @method SynonymsQuery groupByDateentered() Group by the DateEntered column
 * @method SynonymsQuery groupByModified() Group by the Modified column
 * @method SynonymsQuery groupByDatemodified() Group by the DateModified column
 * @method SynonymsQuery groupByExpert() Group by the Expert column
 * @method SynonymsQuery groupByDatechecked() Group by the DateChecked column
 * @method SynonymsQuery groupByTs() Group by the TS column
 *
 * @method SynonymsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SynonymsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SynonymsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Synonyms findOne(PropelPDO $con = null) Return the first Synonyms matching the query
 * @method Synonyms findOneOrCreate(PropelPDO $con = null) Return the first Synonyms matching the query, or a new Synonyms object populated from the query conditions when no match is found
 *
 * @method Synonyms findOneBySyncode(int $SynCode) Return the first Synonyms filtered by the SynCode column
 * @method Synonyms findOneBySpeccode(int $SpecCode) Return the first Synonyms filtered by the SpecCode column
 * @method Synonyms findOneBySyngenus(string $SynGenus) Return the first Synonyms filtered by the SynGenus column
 * @method Synonyms findOneBySynspecies(string $SynSpecies) Return the first Synonyms filtered by the SynSpecies column
 * @method Synonyms findOneByAuthor(string $Author) Return the first Synonyms filtered by the Author column
 * @method Synonyms findOneByYear(int $Year) Return the first Synonyms filtered by the Year column
 * @method Synonyms findOneBySynonymsref(int $SynonymsRef) Return the first Synonyms filtered by the SynonymsRef column
 * @method Synonyms findOneByTaxonlevel(string $TaxonLevel) Return the first Synonyms filtered by the TaxonLevel column
 * @method Synonyms findOneBySyncodevalid(int $SyncodeValid) Return the first Synonyms filtered by the SyncodeValid column
 * @method Synonyms findOneByLastepithet(string $LastEpithet) Return the first Synonyms filtered by the LastEpithet column
 * @method Synonyms findOneByComment(string $Comment) Return the first Synonyms filtered by the Comment column
 * @method Synonyms findOneByEtymology(string $Etymology) Return the first Synonyms filtered by the Etymology column
 * @method Synonyms findOneByStatus(string $Status) Return the first Synonyms filtered by the Status column
 * @method Synonyms findOneByValid(int $Valid) Return the first Synonyms filtered by the Valid column
 * @method Synonyms findOneByValidtax(int $ValidTax) Return the first Synonyms filtered by the ValidTax column
 * @method Synonyms findOneBySynonymy(string $Synonymy) Return the first Synonyms filtered by the Synonymy column
 * @method Synonyms findOneBySynonymydetail(string $SynonymyDetail) Return the first Synonyms filtered by the SynonymyDetail column
 * @method Synonyms findOneByCombination(string $Combination) Return the first Synonyms filtered by the Combination column
 * @method Synonyms findOneByOriginalpub(string $OriginalPub) Return the first Synonyms filtered by the OriginalPub column
 * @method Synonyms findOneByMisspelling(int $Misspelling) Return the first Synonyms filtered by the Misspelling column
 * @method Synonyms findOneByMisspellingdetail(string $MisspellingDetail) Return the first Synonyms filtered by the MisspellingDetail column
 * @method Synonyms findOneByNounapposition(int $NounApposition) Return the first Synonyms filtered by the NounApposition column
 * @method Synonyms findOneByStatusorder(int $StatusOrder) Return the first Synonyms filtered by the StatusOrder column
 * @method Synonyms findOneByRanksearch(int $RankSearch) Return the first Synonyms filtered by the RankSearch column
 * @method Synonyms findOneByCommenttax(string $CommentTax) Return the first Synonyms filtered by the CommentTax column
 * @method Synonyms findOneByGsdoriginal(int $GSDOriginal) Return the first Synonyms filtered by the GSDOriginal column
 * @method Synonyms findOneByGsdstatus(int $GSDStatus) Return the first Synonyms filtered by the GSDStatus column
 * @method Synonyms findOneByGsdversiondate(string $GSDVersionDate) Return the first Synonyms filtered by the GSDVersionDate column
 * @method Synonyms findOneByGsdexpert(int $GSDExpert) Return the first Synonyms filtered by the GSDExpert column
 * @method Synonyms findOneByCasRefNo(int $CAS_REF_NO) Return the first Synonyms filtered by the CAS_REF_NO column
 * @method Synonyms findOneByCasSpc(int $CAS_SPC) Return the first Synonyms filtered by the CAS_SPC column
 * @method Synonyms findOneByCol(int $CoL) Return the first Synonyms filtered by the CoL column
 * @method Synonyms findOneByColId(int $CoL_ID) Return the first Synonyms filtered by the CoL_ID column
 * @method Synonyms findOneByZoobankId(int $ZooBank_ID) Return the first Synonyms filtered by the ZooBank_ID column
 * @method Synonyms findOneByIonId(int $ION_ID) Return the first Synonyms filtered by the ION_ID column
 * @method Synonyms findOneByTsn(int $TSN) Return the first Synonyms filtered by the TSN column
 * @method Synonyms findOneByWormsId(int $WoRMS_ID) Return the first Synonyms filtered by the WoRMS_ID column
 * @method Synonyms findOneByEntered(int $Entered) Return the first Synonyms filtered by the Entered column
 * @method Synonyms findOneByDateentered(string $DateEntered) Return the first Synonyms filtered by the DateEntered column
 * @method Synonyms findOneByModified(int $Modified) Return the first Synonyms filtered by the Modified column
 * @method Synonyms findOneByDatemodified(string $DateModified) Return the first Synonyms filtered by the DateModified column
 * @method Synonyms findOneByExpert(int $Expert) Return the first Synonyms filtered by the Expert column
 * @method Synonyms findOneByDatechecked(string $DateChecked) Return the first Synonyms filtered by the DateChecked column
 * @method Synonyms findOneByTs(string $TS) Return the first Synonyms filtered by the TS column
 *
 * @method array findBySyncode(int $SynCode) Return Synonyms objects filtered by the SynCode column
 * @method array findBySpeccode(int $SpecCode) Return Synonyms objects filtered by the SpecCode column
 * @method array findBySyngenus(string $SynGenus) Return Synonyms objects filtered by the SynGenus column
 * @method array findBySynspecies(string $SynSpecies) Return Synonyms objects filtered by the SynSpecies column
 * @method array findByAuthor(string $Author) Return Synonyms objects filtered by the Author column
 * @method array findByYear(int $Year) Return Synonyms objects filtered by the Year column
 * @method array findBySynonymsref(int $SynonymsRef) Return Synonyms objects filtered by the SynonymsRef column
 * @method array findByTaxonlevel(string $TaxonLevel) Return Synonyms objects filtered by the TaxonLevel column
 * @method array findBySyncodevalid(int $SyncodeValid) Return Synonyms objects filtered by the SyncodeValid column
 * @method array findByLastepithet(string $LastEpithet) Return Synonyms objects filtered by the LastEpithet column
 * @method array findByComment(string $Comment) Return Synonyms objects filtered by the Comment column
 * @method array findByEtymology(string $Etymology) Return Synonyms objects filtered by the Etymology column
 * @method array findByStatus(string $Status) Return Synonyms objects filtered by the Status column
 * @method array findByValid(int $Valid) Return Synonyms objects filtered by the Valid column
 * @method array findByValidtax(int $ValidTax) Return Synonyms objects filtered by the ValidTax column
 * @method array findBySynonymy(string $Synonymy) Return Synonyms objects filtered by the Synonymy column
 * @method array findBySynonymydetail(string $SynonymyDetail) Return Synonyms objects filtered by the SynonymyDetail column
 * @method array findByCombination(string $Combination) Return Synonyms objects filtered by the Combination column
 * @method array findByOriginalpub(string $OriginalPub) Return Synonyms objects filtered by the OriginalPub column
 * @method array findByMisspelling(int $Misspelling) Return Synonyms objects filtered by the Misspelling column
 * @method array findByMisspellingdetail(string $MisspellingDetail) Return Synonyms objects filtered by the MisspellingDetail column
 * @method array findByNounapposition(int $NounApposition) Return Synonyms objects filtered by the NounApposition column
 * @method array findByStatusorder(int $StatusOrder) Return Synonyms objects filtered by the StatusOrder column
 * @method array findByRanksearch(int $RankSearch) Return Synonyms objects filtered by the RankSearch column
 * @method array findByCommenttax(string $CommentTax) Return Synonyms objects filtered by the CommentTax column
 * @method array findByGsdoriginal(int $GSDOriginal) Return Synonyms objects filtered by the GSDOriginal column
 * @method array findByGsdstatus(int $GSDStatus) Return Synonyms objects filtered by the GSDStatus column
 * @method array findByGsdversiondate(string $GSDVersionDate) Return Synonyms objects filtered by the GSDVersionDate column
 * @method array findByGsdexpert(int $GSDExpert) Return Synonyms objects filtered by the GSDExpert column
 * @method array findByCasRefNo(int $CAS_REF_NO) Return Synonyms objects filtered by the CAS_REF_NO column
 * @method array findByCasSpc(int $CAS_SPC) Return Synonyms objects filtered by the CAS_SPC column
 * @method array findByCol(int $CoL) Return Synonyms objects filtered by the CoL column
 * @method array findByColId(int $CoL_ID) Return Synonyms objects filtered by the CoL_ID column
 * @method array findByZoobankId(int $ZooBank_ID) Return Synonyms objects filtered by the ZooBank_ID column
 * @method array findByIonId(int $ION_ID) Return Synonyms objects filtered by the ION_ID column
 * @method array findByTsn(int $TSN) Return Synonyms objects filtered by the TSN column
 * @method array findByWormsId(int $WoRMS_ID) Return Synonyms objects filtered by the WoRMS_ID column
 * @method array findByEntered(int $Entered) Return Synonyms objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Synonyms objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Synonyms objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Synonyms objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Synonyms objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Synonyms objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Synonyms objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseSynonymsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSynonymsQuery object.
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
            $modelName = 'Synonyms';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SynonymsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SynonymsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SynonymsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SynonymsQuery) {
            return $criteria;
        }
        $query = new SynonymsQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56, 78, 91), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$SynCode, $SpecCode, $SynGenus, $SynSpecies, $Author, $Synonymy, $Combination, $Misspelling]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Synonyms|Synonyms[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SynonymsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4], (string) $key[5], (string) $key[6], (string) $key[7]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SynonymsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Synonyms A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `SynCode`, `SpecCode`, `SynGenus`, `SynSpecies`, `Author`, `Year`, `SynonymsRef`, `TaxonLevel`, `SyncodeValid`, `LastEpithet`, `Comment`, `Etymology`, `Status`, `Valid`, `ValidTax`, `Synonymy`, `SynonymyDetail`, `Combination`, `OriginalPub`, `Misspelling`, `MisspellingDetail`, `NounApposition`, `StatusOrder`, `RankSearch`, `CommentTax`, `GSDOriginal`, `GSDStatus`, `GSDVersionDate`, `GSDExpert`, `CAS_REF_NO`, `CAS_SPC`, `CoL`, `CoL_ID`, `ZooBank_ID`, `ION_ID`, `TSN`, `WoRMS_ID`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `synonyms` WHERE `SynCode` = :p0 AND `SpecCode` = :p1 AND `SynGenus` = :p2 AND `SynSpecies` = :p3 AND `Author` = :p4 AND `Synonymy` = :p5 AND `Combination` = :p6 AND `Misspelling` = :p7';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_STR);
            $stmt->bindValue(':p6', $key[6], PDO::PARAM_STR);
            $stmt->bindValue(':p7', $key[7], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Synonyms();
            $obj->hydrate($row);
            SynonymsPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4], (string) $key[5], (string) $key[6], (string) $key[7])));
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
     * @return Synonyms|Synonyms[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Synonyms[]|mixed the list of results, formatted by the current formatter
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
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(SynonymsPeer::SYNCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SynonymsPeer::SPECCODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(SynonymsPeer::SYNGENUS, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(SynonymsPeer::SYNSPECIES, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(SynonymsPeer::AUTHOR, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(SynonymsPeer::SYNONYMY, $key[5], Criteria::EQUAL);
        $this->addUsingAlias(SynonymsPeer::COMBINATION, $key[6], Criteria::EQUAL);
        $this->addUsingAlias(SynonymsPeer::MISSPELLING, $key[7], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SynonymsPeer::SYNCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SynonymsPeer::SPECCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(SynonymsPeer::SYNGENUS, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(SynonymsPeer::SYNSPECIES, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(SynonymsPeer::AUTHOR, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(SynonymsPeer::SYNONYMY, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $cton6 = $this->getNewCriterion(SynonymsPeer::COMBINATION, $key[6], Criteria::EQUAL);
            $cton0->addAnd($cton6);
            $cton7 = $this->getNewCriterion(SynonymsPeer::MISSPELLING, $key[7], Criteria::EQUAL);
            $cton0->addAnd($cton7);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the SynCode column
     *
     * Example usage:
     * <code>
     * $query->filterBySyncode(1234); // WHERE SynCode = 1234
     * $query->filterBySyncode(array(12, 34)); // WHERE SynCode IN (12, 34)
     * $query->filterBySyncode(array('min' => 12)); // WHERE SynCode >= 12
     * $query->filterBySyncode(array('max' => 12)); // WHERE SynCode <= 12
     * </code>
     *
     * @param     mixed $syncode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterBySyncode($syncode = null, $comparison = null)
    {
        if (is_array($syncode)) {
            $useMinMax = false;
            if (isset($syncode['min'])) {
                $this->addUsingAlias(SynonymsPeer::SYNCODE, $syncode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($syncode['max'])) {
                $this->addUsingAlias(SynonymsPeer::SYNCODE, $syncode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::SYNCODE, $syncode, $comparison);
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
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(SynonymsPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(SynonymsPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the SynGenus column
     *
     * Example usage:
     * <code>
     * $query->filterBySyngenus('fooValue');   // WHERE SynGenus = 'fooValue'
     * $query->filterBySyngenus('%fooValue%'); // WHERE SynGenus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $syngenus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterBySyngenus($syngenus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($syngenus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $syngenus)) {
                $syngenus = str_replace('*', '%', $syngenus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::SYNGENUS, $syngenus, $comparison);
    }

    /**
     * Filter the query on the SynSpecies column
     *
     * Example usage:
     * <code>
     * $query->filterBySynspecies('fooValue');   // WHERE SynSpecies = 'fooValue'
     * $query->filterBySynspecies('%fooValue%'); // WHERE SynSpecies LIKE '%fooValue%'
     * </code>
     *
     * @param     string $synspecies The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterBySynspecies($synspecies = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($synspecies)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $synspecies)) {
                $synspecies = str_replace('*', '%', $synspecies);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::SYNSPECIES, $synspecies, $comparison);
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
     * @return SynonymsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SynonymsPeer::AUTHOR, $author, $comparison);
    }

    /**
     * Filter the query on the Year column
     *
     * Example usage:
     * <code>
     * $query->filterByYear(1234); // WHERE Year = 1234
     * $query->filterByYear(array(12, 34)); // WHERE Year IN (12, 34)
     * $query->filterByYear(array('min' => 12)); // WHERE Year >= 12
     * $query->filterByYear(array('max' => 12)); // WHERE Year <= 12
     * </code>
     *
     * @param     mixed $year The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (is_array($year)) {
            $useMinMax = false;
            if (isset($year['min'])) {
                $this->addUsingAlias(SynonymsPeer::YEAR, $year['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($year['max'])) {
                $this->addUsingAlias(SynonymsPeer::YEAR, $year['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::YEAR, $year, $comparison);
    }

    /**
     * Filter the query on the SynonymsRef column
     *
     * Example usage:
     * <code>
     * $query->filterBySynonymsref(1234); // WHERE SynonymsRef = 1234
     * $query->filterBySynonymsref(array(12, 34)); // WHERE SynonymsRef IN (12, 34)
     * $query->filterBySynonymsref(array('min' => 12)); // WHERE SynonymsRef >= 12
     * $query->filterBySynonymsref(array('max' => 12)); // WHERE SynonymsRef <= 12
     * </code>
     *
     * @param     mixed $synonymsref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterBySynonymsref($synonymsref = null, $comparison = null)
    {
        if (is_array($synonymsref)) {
            $useMinMax = false;
            if (isset($synonymsref['min'])) {
                $this->addUsingAlias(SynonymsPeer::SYNONYMSREF, $synonymsref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($synonymsref['max'])) {
                $this->addUsingAlias(SynonymsPeer::SYNONYMSREF, $synonymsref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::SYNONYMSREF, $synonymsref, $comparison);
    }

    /**
     * Filter the query on the TaxonLevel column
     *
     * Example usage:
     * <code>
     * $query->filterByTaxonlevel('fooValue');   // WHERE TaxonLevel = 'fooValue'
     * $query->filterByTaxonlevel('%fooValue%'); // WHERE TaxonLevel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $taxonlevel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByTaxonlevel($taxonlevel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($taxonlevel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $taxonlevel)) {
                $taxonlevel = str_replace('*', '%', $taxonlevel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::TAXONLEVEL, $taxonlevel, $comparison);
    }

    /**
     * Filter the query on the SyncodeValid column
     *
     * Example usage:
     * <code>
     * $query->filterBySyncodevalid(1234); // WHERE SyncodeValid = 1234
     * $query->filterBySyncodevalid(array(12, 34)); // WHERE SyncodeValid IN (12, 34)
     * $query->filterBySyncodevalid(array('min' => 12)); // WHERE SyncodeValid >= 12
     * $query->filterBySyncodevalid(array('max' => 12)); // WHERE SyncodeValid <= 12
     * </code>
     *
     * @param     mixed $syncodevalid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterBySyncodevalid($syncodevalid = null, $comparison = null)
    {
        if (is_array($syncodevalid)) {
            $useMinMax = false;
            if (isset($syncodevalid['min'])) {
                $this->addUsingAlias(SynonymsPeer::SYNCODEVALID, $syncodevalid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($syncodevalid['max'])) {
                $this->addUsingAlias(SynonymsPeer::SYNCODEVALID, $syncodevalid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::SYNCODEVALID, $syncodevalid, $comparison);
    }

    /**
     * Filter the query on the LastEpithet column
     *
     * Example usage:
     * <code>
     * $query->filterByLastepithet('fooValue');   // WHERE LastEpithet = 'fooValue'
     * $query->filterByLastepithet('%fooValue%'); // WHERE LastEpithet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lastepithet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByLastepithet($lastepithet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lastepithet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lastepithet)) {
                $lastepithet = str_replace('*', '%', $lastepithet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::LASTEPITHET, $lastepithet, $comparison);
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
     * @return SynonymsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SynonymsPeer::COMMENT, $comment, $comparison);
    }

    /**
     * Filter the query on the Etymology column
     *
     * Example usage:
     * <code>
     * $query->filterByEtymology('fooValue');   // WHERE Etymology = 'fooValue'
     * $query->filterByEtymology('%fooValue%'); // WHERE Etymology LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etymology The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByEtymology($etymology = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etymology)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etymology)) {
                $etymology = str_replace('*', '%', $etymology);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::ETYMOLOGY, $etymology, $comparison);
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
     * @return SynonymsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SynonymsPeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the Valid column
     *
     * Example usage:
     * <code>
     * $query->filterByValid(1234); // WHERE Valid = 1234
     * $query->filterByValid(array(12, 34)); // WHERE Valid IN (12, 34)
     * $query->filterByValid(array('min' => 12)); // WHERE Valid >= 12
     * $query->filterByValid(array('max' => 12)); // WHERE Valid <= 12
     * </code>
     *
     * @param     mixed $valid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByValid($valid = null, $comparison = null)
    {
        if (is_array($valid)) {
            $useMinMax = false;
            if (isset($valid['min'])) {
                $this->addUsingAlias(SynonymsPeer::VALID, $valid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valid['max'])) {
                $this->addUsingAlias(SynonymsPeer::VALID, $valid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::VALID, $valid, $comparison);
    }

    /**
     * Filter the query on the ValidTax column
     *
     * Example usage:
     * <code>
     * $query->filterByValidtax(1234); // WHERE ValidTax = 1234
     * $query->filterByValidtax(array(12, 34)); // WHERE ValidTax IN (12, 34)
     * $query->filterByValidtax(array('min' => 12)); // WHERE ValidTax >= 12
     * $query->filterByValidtax(array('max' => 12)); // WHERE ValidTax <= 12
     * </code>
     *
     * @param     mixed $validtax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByValidtax($validtax = null, $comparison = null)
    {
        if (is_array($validtax)) {
            $useMinMax = false;
            if (isset($validtax['min'])) {
                $this->addUsingAlias(SynonymsPeer::VALIDTAX, $validtax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($validtax['max'])) {
                $this->addUsingAlias(SynonymsPeer::VALIDTAX, $validtax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::VALIDTAX, $validtax, $comparison);
    }

    /**
     * Filter the query on the Synonymy column
     *
     * Example usage:
     * <code>
     * $query->filterBySynonymy('fooValue');   // WHERE Synonymy = 'fooValue'
     * $query->filterBySynonymy('%fooValue%'); // WHERE Synonymy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $synonymy The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterBySynonymy($synonymy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($synonymy)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $synonymy)) {
                $synonymy = str_replace('*', '%', $synonymy);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::SYNONYMY, $synonymy, $comparison);
    }

    /**
     * Filter the query on the SynonymyDetail column
     *
     * Example usage:
     * <code>
     * $query->filterBySynonymydetail('fooValue');   // WHERE SynonymyDetail = 'fooValue'
     * $query->filterBySynonymydetail('%fooValue%'); // WHERE SynonymyDetail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $synonymydetail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterBySynonymydetail($synonymydetail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($synonymydetail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $synonymydetail)) {
                $synonymydetail = str_replace('*', '%', $synonymydetail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::SYNONYMYDETAIL, $synonymydetail, $comparison);
    }

    /**
     * Filter the query on the Combination column
     *
     * Example usage:
     * <code>
     * $query->filterByCombination('fooValue');   // WHERE Combination = 'fooValue'
     * $query->filterByCombination('%fooValue%'); // WHERE Combination LIKE '%fooValue%'
     * </code>
     *
     * @param     string $combination The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByCombination($combination = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($combination)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $combination)) {
                $combination = str_replace('*', '%', $combination);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::COMBINATION, $combination, $comparison);
    }

    /**
     * Filter the query on the OriginalPub column
     *
     * Example usage:
     * <code>
     * $query->filterByOriginalpub('fooValue');   // WHERE OriginalPub = 'fooValue'
     * $query->filterByOriginalpub('%fooValue%'); // WHERE OriginalPub LIKE '%fooValue%'
     * </code>
     *
     * @param     string $originalpub The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByOriginalpub($originalpub = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($originalpub)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $originalpub)) {
                $originalpub = str_replace('*', '%', $originalpub);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::ORIGINALPUB, $originalpub, $comparison);
    }

    /**
     * Filter the query on the Misspelling column
     *
     * Example usage:
     * <code>
     * $query->filterByMisspelling(1234); // WHERE Misspelling = 1234
     * $query->filterByMisspelling(array(12, 34)); // WHERE Misspelling IN (12, 34)
     * $query->filterByMisspelling(array('min' => 12)); // WHERE Misspelling >= 12
     * $query->filterByMisspelling(array('max' => 12)); // WHERE Misspelling <= 12
     * </code>
     *
     * @param     mixed $misspelling The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByMisspelling($misspelling = null, $comparison = null)
    {
        if (is_array($misspelling)) {
            $useMinMax = false;
            if (isset($misspelling['min'])) {
                $this->addUsingAlias(SynonymsPeer::MISSPELLING, $misspelling['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($misspelling['max'])) {
                $this->addUsingAlias(SynonymsPeer::MISSPELLING, $misspelling['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::MISSPELLING, $misspelling, $comparison);
    }

    /**
     * Filter the query on the MisspellingDetail column
     *
     * Example usage:
     * <code>
     * $query->filterByMisspellingdetail('fooValue');   // WHERE MisspellingDetail = 'fooValue'
     * $query->filterByMisspellingdetail('%fooValue%'); // WHERE MisspellingDetail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $misspellingdetail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByMisspellingdetail($misspellingdetail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($misspellingdetail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $misspellingdetail)) {
                $misspellingdetail = str_replace('*', '%', $misspellingdetail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::MISSPELLINGDETAIL, $misspellingdetail, $comparison);
    }

    /**
     * Filter the query on the NounApposition column
     *
     * Example usage:
     * <code>
     * $query->filterByNounapposition(1234); // WHERE NounApposition = 1234
     * $query->filterByNounapposition(array(12, 34)); // WHERE NounApposition IN (12, 34)
     * $query->filterByNounapposition(array('min' => 12)); // WHERE NounApposition >= 12
     * $query->filterByNounapposition(array('max' => 12)); // WHERE NounApposition <= 12
     * </code>
     *
     * @param     mixed $nounapposition The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByNounapposition($nounapposition = null, $comparison = null)
    {
        if (is_array($nounapposition)) {
            $useMinMax = false;
            if (isset($nounapposition['min'])) {
                $this->addUsingAlias(SynonymsPeer::NOUNAPPOSITION, $nounapposition['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nounapposition['max'])) {
                $this->addUsingAlias(SynonymsPeer::NOUNAPPOSITION, $nounapposition['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::NOUNAPPOSITION, $nounapposition, $comparison);
    }

    /**
     * Filter the query on the StatusOrder column
     *
     * Example usage:
     * <code>
     * $query->filterByStatusorder(1234); // WHERE StatusOrder = 1234
     * $query->filterByStatusorder(array(12, 34)); // WHERE StatusOrder IN (12, 34)
     * $query->filterByStatusorder(array('min' => 12)); // WHERE StatusOrder >= 12
     * $query->filterByStatusorder(array('max' => 12)); // WHERE StatusOrder <= 12
     * </code>
     *
     * @param     mixed $statusorder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByStatusorder($statusorder = null, $comparison = null)
    {
        if (is_array($statusorder)) {
            $useMinMax = false;
            if (isset($statusorder['min'])) {
                $this->addUsingAlias(SynonymsPeer::STATUSORDER, $statusorder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statusorder['max'])) {
                $this->addUsingAlias(SynonymsPeer::STATUSORDER, $statusorder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::STATUSORDER, $statusorder, $comparison);
    }

    /**
     * Filter the query on the RankSearch column
     *
     * Example usage:
     * <code>
     * $query->filterByRanksearch(1234); // WHERE RankSearch = 1234
     * $query->filterByRanksearch(array(12, 34)); // WHERE RankSearch IN (12, 34)
     * $query->filterByRanksearch(array('min' => 12)); // WHERE RankSearch >= 12
     * $query->filterByRanksearch(array('max' => 12)); // WHERE RankSearch <= 12
     * </code>
     *
     * @param     mixed $ranksearch The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByRanksearch($ranksearch = null, $comparison = null)
    {
        if (is_array($ranksearch)) {
            $useMinMax = false;
            if (isset($ranksearch['min'])) {
                $this->addUsingAlias(SynonymsPeer::RANKSEARCH, $ranksearch['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ranksearch['max'])) {
                $this->addUsingAlias(SynonymsPeer::RANKSEARCH, $ranksearch['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::RANKSEARCH, $ranksearch, $comparison);
    }

    /**
     * Filter the query on the CommentTax column
     *
     * Example usage:
     * <code>
     * $query->filterByCommenttax('fooValue');   // WHERE CommentTax = 'fooValue'
     * $query->filterByCommenttax('%fooValue%'); // WHERE CommentTax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commenttax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByCommenttax($commenttax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commenttax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commenttax)) {
                $commenttax = str_replace('*', '%', $commenttax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::COMMENTTAX, $commenttax, $comparison);
    }

    /**
     * Filter the query on the GSDOriginal column
     *
     * Example usage:
     * <code>
     * $query->filterByGsdoriginal(1234); // WHERE GSDOriginal = 1234
     * $query->filterByGsdoriginal(array(12, 34)); // WHERE GSDOriginal IN (12, 34)
     * $query->filterByGsdoriginal(array('min' => 12)); // WHERE GSDOriginal >= 12
     * $query->filterByGsdoriginal(array('max' => 12)); // WHERE GSDOriginal <= 12
     * </code>
     *
     * @param     mixed $gsdoriginal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByGsdoriginal($gsdoriginal = null, $comparison = null)
    {
        if (is_array($gsdoriginal)) {
            $useMinMax = false;
            if (isset($gsdoriginal['min'])) {
                $this->addUsingAlias(SynonymsPeer::GSDORIGINAL, $gsdoriginal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gsdoriginal['max'])) {
                $this->addUsingAlias(SynonymsPeer::GSDORIGINAL, $gsdoriginal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::GSDORIGINAL, $gsdoriginal, $comparison);
    }

    /**
     * Filter the query on the GSDStatus column
     *
     * Example usage:
     * <code>
     * $query->filterByGsdstatus(1234); // WHERE GSDStatus = 1234
     * $query->filterByGsdstatus(array(12, 34)); // WHERE GSDStatus IN (12, 34)
     * $query->filterByGsdstatus(array('min' => 12)); // WHERE GSDStatus >= 12
     * $query->filterByGsdstatus(array('max' => 12)); // WHERE GSDStatus <= 12
     * </code>
     *
     * @param     mixed $gsdstatus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByGsdstatus($gsdstatus = null, $comparison = null)
    {
        if (is_array($gsdstatus)) {
            $useMinMax = false;
            if (isset($gsdstatus['min'])) {
                $this->addUsingAlias(SynonymsPeer::GSDSTATUS, $gsdstatus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gsdstatus['max'])) {
                $this->addUsingAlias(SynonymsPeer::GSDSTATUS, $gsdstatus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::GSDSTATUS, $gsdstatus, $comparison);
    }

    /**
     * Filter the query on the GSDVersionDate column
     *
     * Example usage:
     * <code>
     * $query->filterByGsdversiondate('2011-03-14'); // WHERE GSDVersionDate = '2011-03-14'
     * $query->filterByGsdversiondate('now'); // WHERE GSDVersionDate = '2011-03-14'
     * $query->filterByGsdversiondate(array('max' => 'yesterday')); // WHERE GSDVersionDate < '2011-03-13'
     * </code>
     *
     * @param     mixed $gsdversiondate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByGsdversiondate($gsdversiondate = null, $comparison = null)
    {
        if (is_array($gsdversiondate)) {
            $useMinMax = false;
            if (isset($gsdversiondate['min'])) {
                $this->addUsingAlias(SynonymsPeer::GSDVERSIONDATE, $gsdversiondate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gsdversiondate['max'])) {
                $this->addUsingAlias(SynonymsPeer::GSDVERSIONDATE, $gsdversiondate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::GSDVERSIONDATE, $gsdversiondate, $comparison);
    }

    /**
     * Filter the query on the GSDExpert column
     *
     * Example usage:
     * <code>
     * $query->filterByGsdexpert(1234); // WHERE GSDExpert = 1234
     * $query->filterByGsdexpert(array(12, 34)); // WHERE GSDExpert IN (12, 34)
     * $query->filterByGsdexpert(array('min' => 12)); // WHERE GSDExpert >= 12
     * $query->filterByGsdexpert(array('max' => 12)); // WHERE GSDExpert <= 12
     * </code>
     *
     * @param     mixed $gsdexpert The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByGsdexpert($gsdexpert = null, $comparison = null)
    {
        if (is_array($gsdexpert)) {
            $useMinMax = false;
            if (isset($gsdexpert['min'])) {
                $this->addUsingAlias(SynonymsPeer::GSDEXPERT, $gsdexpert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gsdexpert['max'])) {
                $this->addUsingAlias(SynonymsPeer::GSDEXPERT, $gsdexpert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::GSDEXPERT, $gsdexpert, $comparison);
    }

    /**
     * Filter the query on the CAS_REF_NO column
     *
     * Example usage:
     * <code>
     * $query->filterByCasRefNo(1234); // WHERE CAS_REF_NO = 1234
     * $query->filterByCasRefNo(array(12, 34)); // WHERE CAS_REF_NO IN (12, 34)
     * $query->filterByCasRefNo(array('min' => 12)); // WHERE CAS_REF_NO >= 12
     * $query->filterByCasRefNo(array('max' => 12)); // WHERE CAS_REF_NO <= 12
     * </code>
     *
     * @param     mixed $casRefNo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByCasRefNo($casRefNo = null, $comparison = null)
    {
        if (is_array($casRefNo)) {
            $useMinMax = false;
            if (isset($casRefNo['min'])) {
                $this->addUsingAlias(SynonymsPeer::CAS_REF_NO, $casRefNo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($casRefNo['max'])) {
                $this->addUsingAlias(SynonymsPeer::CAS_REF_NO, $casRefNo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::CAS_REF_NO, $casRefNo, $comparison);
    }

    /**
     * Filter the query on the CAS_SPC column
     *
     * Example usage:
     * <code>
     * $query->filterByCasSpc(1234); // WHERE CAS_SPC = 1234
     * $query->filterByCasSpc(array(12, 34)); // WHERE CAS_SPC IN (12, 34)
     * $query->filterByCasSpc(array('min' => 12)); // WHERE CAS_SPC >= 12
     * $query->filterByCasSpc(array('max' => 12)); // WHERE CAS_SPC <= 12
     * </code>
     *
     * @param     mixed $casSpc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByCasSpc($casSpc = null, $comparison = null)
    {
        if (is_array($casSpc)) {
            $useMinMax = false;
            if (isset($casSpc['min'])) {
                $this->addUsingAlias(SynonymsPeer::CAS_SPC, $casSpc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($casSpc['max'])) {
                $this->addUsingAlias(SynonymsPeer::CAS_SPC, $casSpc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::CAS_SPC, $casSpc, $comparison);
    }

    /**
     * Filter the query on the CoL column
     *
     * Example usage:
     * <code>
     * $query->filterByCol(1234); // WHERE CoL = 1234
     * $query->filterByCol(array(12, 34)); // WHERE CoL IN (12, 34)
     * $query->filterByCol(array('min' => 12)); // WHERE CoL >= 12
     * $query->filterByCol(array('max' => 12)); // WHERE CoL <= 12
     * </code>
     *
     * @param     mixed $col The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByCol($col = null, $comparison = null)
    {
        if (is_array($col)) {
            $useMinMax = false;
            if (isset($col['min'])) {
                $this->addUsingAlias(SynonymsPeer::COL, $col['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($col['max'])) {
                $this->addUsingAlias(SynonymsPeer::COL, $col['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::COL, $col, $comparison);
    }

    /**
     * Filter the query on the CoL_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByColId(1234); // WHERE CoL_ID = 1234
     * $query->filterByColId(array(12, 34)); // WHERE CoL_ID IN (12, 34)
     * $query->filterByColId(array('min' => 12)); // WHERE CoL_ID >= 12
     * $query->filterByColId(array('max' => 12)); // WHERE CoL_ID <= 12
     * </code>
     *
     * @param     mixed $colId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByColId($colId = null, $comparison = null)
    {
        if (is_array($colId)) {
            $useMinMax = false;
            if (isset($colId['min'])) {
                $this->addUsingAlias(SynonymsPeer::COL_ID, $colId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($colId['max'])) {
                $this->addUsingAlias(SynonymsPeer::COL_ID, $colId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::COL_ID, $colId, $comparison);
    }

    /**
     * Filter the query on the ZooBank_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByZoobankId(1234); // WHERE ZooBank_ID = 1234
     * $query->filterByZoobankId(array(12, 34)); // WHERE ZooBank_ID IN (12, 34)
     * $query->filterByZoobankId(array('min' => 12)); // WHERE ZooBank_ID >= 12
     * $query->filterByZoobankId(array('max' => 12)); // WHERE ZooBank_ID <= 12
     * </code>
     *
     * @param     mixed $zoobankId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByZoobankId($zoobankId = null, $comparison = null)
    {
        if (is_array($zoobankId)) {
            $useMinMax = false;
            if (isset($zoobankId['min'])) {
                $this->addUsingAlias(SynonymsPeer::ZOOBANK_ID, $zoobankId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zoobankId['max'])) {
                $this->addUsingAlias(SynonymsPeer::ZOOBANK_ID, $zoobankId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::ZOOBANK_ID, $zoobankId, $comparison);
    }

    /**
     * Filter the query on the ION_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByIonId(1234); // WHERE ION_ID = 1234
     * $query->filterByIonId(array(12, 34)); // WHERE ION_ID IN (12, 34)
     * $query->filterByIonId(array('min' => 12)); // WHERE ION_ID >= 12
     * $query->filterByIonId(array('max' => 12)); // WHERE ION_ID <= 12
     * </code>
     *
     * @param     mixed $ionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByIonId($ionId = null, $comparison = null)
    {
        if (is_array($ionId)) {
            $useMinMax = false;
            if (isset($ionId['min'])) {
                $this->addUsingAlias(SynonymsPeer::ION_ID, $ionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ionId['max'])) {
                $this->addUsingAlias(SynonymsPeer::ION_ID, $ionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::ION_ID, $ionId, $comparison);
    }

    /**
     * Filter the query on the TSN column
     *
     * Example usage:
     * <code>
     * $query->filterByTsn(1234); // WHERE TSN = 1234
     * $query->filterByTsn(array(12, 34)); // WHERE TSN IN (12, 34)
     * $query->filterByTsn(array('min' => 12)); // WHERE TSN >= 12
     * $query->filterByTsn(array('max' => 12)); // WHERE TSN <= 12
     * </code>
     *
     * @param     mixed $tsn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByTsn($tsn = null, $comparison = null)
    {
        if (is_array($tsn)) {
            $useMinMax = false;
            if (isset($tsn['min'])) {
                $this->addUsingAlias(SynonymsPeer::TSN, $tsn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tsn['max'])) {
                $this->addUsingAlias(SynonymsPeer::TSN, $tsn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::TSN, $tsn, $comparison);
    }

    /**
     * Filter the query on the WoRMS_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByWormsId(1234); // WHERE WoRMS_ID = 1234
     * $query->filterByWormsId(array(12, 34)); // WHERE WoRMS_ID IN (12, 34)
     * $query->filterByWormsId(array('min' => 12)); // WHERE WoRMS_ID >= 12
     * $query->filterByWormsId(array('max' => 12)); // WHERE WoRMS_ID <= 12
     * </code>
     *
     * @param     mixed $wormsId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByWormsId($wormsId = null, $comparison = null)
    {
        if (is_array($wormsId)) {
            $useMinMax = false;
            if (isset($wormsId['min'])) {
                $this->addUsingAlias(SynonymsPeer::WORMS_ID, $wormsId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wormsId['max'])) {
                $this->addUsingAlias(SynonymsPeer::WORMS_ID, $wormsId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::WORMS_ID, $wormsId, $comparison);
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
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(SynonymsPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(SynonymsPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::ENTERED, $entered, $comparison);
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
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(SynonymsPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(SynonymsPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(SynonymsPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(SynonymsPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::MODIFIED, $modified, $comparison);
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
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(SynonymsPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(SynonymsPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(SynonymsPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(SynonymsPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::EXPERT, $expert, $comparison);
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
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(SynonymsPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(SynonymsPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(SynonymsPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(SynonymsPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SynonymsPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Synonyms $synonyms Object to remove from the list of results
     *
     * @return SynonymsQuery The current query, for fluid interface
     */
    public function prune($synonyms = null)
    {
        if ($synonyms) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SynonymsPeer::SYNCODE), $synonyms->getSyncode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SynonymsPeer::SPECCODE), $synonyms->getSpeccode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(SynonymsPeer::SYNGENUS), $synonyms->getSyngenus(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(SynonymsPeer::SYNSPECIES), $synonyms->getSynspecies(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(SynonymsPeer::AUTHOR), $synonyms->getAuthor(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(SynonymsPeer::SYNONYMY), $synonyms->getSynonymy(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond6', $this->getAliasedColName(SynonymsPeer::COMBINATION), $synonyms->getCombination(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond7', $this->getAliasedColName(SynonymsPeer::MISSPELLING), $synonyms->getMisspelling(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5', 'pruneCond6', 'pruneCond7'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
