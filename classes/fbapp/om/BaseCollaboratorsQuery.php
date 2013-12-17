<?php


/**
 * Base class that represents a query for the 'collaborators' table.
 *
 *
 *
 * @method CollaboratorsQuery orderByPersonnel($order = Criteria::ASC) Order by the Personnel column
 * @method CollaboratorsQuery orderBySurname($order = Criteria::ASC) Order by the Surname column
 * @method CollaboratorsQuery orderByPrename($order = Criteria::ASC) Order by the Prename column
 * @method CollaboratorsQuery orderByReportgroup($order = Criteria::ASC) Order by the ReportGroup column
 * @method CollaboratorsQuery orderByCollabtype($order = Criteria::ASC) Order by the CollabType column
 * @method CollaboratorsQuery orderByEmail($order = Criteria::ASC) Order by the E-mail column
 * @method CollaboratorsQuery orderByEmailnew($order = Criteria::ASC) Order by the E-mailNew column
 * @method CollaboratorsQuery orderByComments($order = Criteria::ASC) Order by the Comments column
 * @method CollaboratorsQuery orderByCopyright($order = Criteria::ASC) Order by the Copyright column
 * @method CollaboratorsQuery orderByRdeUser($order = Criteria::ASC) Order by the RDE_user column
 * @method CollaboratorsQuery orderByInstitute($order = Criteria::ASC) Order by the Institute column
 * @method CollaboratorsQuery orderByNumber($order = Criteria::ASC) Order by the Number column
 * @method CollaboratorsQuery orderByStreet($order = Criteria::ASC) Order by the Street column
 * @method CollaboratorsQuery orderByCity($order = Criteria::ASC) Order by the City column
 * @method CollaboratorsQuery orderByCountry($order = Criteria::ASC) Order by the Country column
 * @method CollaboratorsQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method CollaboratorsQuery orderByTelefoncity($order = Criteria::ASC) Order by the Telefon-City column
 * @method CollaboratorsQuery orderByTelefon($order = Criteria::ASC) Order by the Telefon column
 * @method CollaboratorsQuery orderByFax($order = Criteria::ASC) Order by the FAX column
 * @method CollaboratorsQuery orderByTelex($order = Criteria::ASC) Order by the TELEX column
 * @method CollaboratorsQuery orderByWebpage($order = Criteria::ASC) Order by the WebPage column
 * @method CollaboratorsQuery orderByKeywords($order = Criteria::ASC) Order by the Keywords column
 * @method CollaboratorsQuery orderByLarvalbasecollab($order = Criteria::ASC) Order by the LarvalBaseCollab column
 * @method CollaboratorsQuery orderByNars($order = Criteria::ASC) Order by the NARS column
 * @method CollaboratorsQuery orderByStaffphoto($order = Criteria::ASC) Order by the StaffPhoto column
 * @method CollaboratorsQuery orderByCollabtypeorder($order = Criteria::ASC) Order by the CollabTypeOrder column
 * @method CollaboratorsQuery orderByYear($order = Criteria::ASC) Order by the Year column
 * @method CollaboratorsQuery orderByYearend($order = Criteria::ASC) Order by the YearEnd column
 * @method CollaboratorsQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method CollaboratorsQuery orderByDataentered($order = Criteria::ASC) Order by the DataEntered column
 * @method CollaboratorsQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method CollaboratorsQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method CollaboratorsQuery orderByEditCountry($order = Criteria::ASC) Order by the edit_country column
 * @method CollaboratorsQuery orderByEditSpecies($order = Criteria::ASC) Order by the edit_species column
 * @method CollaboratorsQuery orderByEditComnames($order = Criteria::ASC) Order by the edit_comnames column
 * @method CollaboratorsQuery orderByEditLarvalbase($order = Criteria::ASC) Order by the edit_larvalbase column
 * @method CollaboratorsQuery orderByEditSynonymsx($order = Criteria::ASC) Order by the edit_synonymsx column
 * @method CollaboratorsQuery orderByEditPictures($order = Criteria::ASC) Order by the edit_pictures column
 * @method CollaboratorsQuery orderByEditExpedition($order = Criteria::ASC) Order by the edit_expedition column
 * @method CollaboratorsQuery orderByEditOccurrence($order = Criteria::ASC) Order by the edit_occurrence column
 * @method CollaboratorsQuery orderByShowEmail($order = Criteria::ASC) Order by the show_email column
 * @method CollaboratorsQuery orderByShowCountry($order = Criteria::ASC) Order by the show_country column
 * @method CollaboratorsQuery orderByShowAddress($order = Criteria::ASC) Order by the show_address column
 * @method CollaboratorsQuery orderByEditGenera($order = Criteria::ASC) Order by the edit_genera column
 * @method CollaboratorsQuery orderByEditContacts($order = Criteria::ASC) Order by the edit_contacts column
 * @method CollaboratorsQuery orderByEditPopdyn($order = Criteria::ASC) Order by the edit_popdyn column
 * @method CollaboratorsQuery orderByEditIntroductions($order = Criteria::ASC) Order by the edit_introductions column
 * @method CollaboratorsQuery orderByEditAquamaint($order = Criteria::ASC) Order by the edit_aquamaint column
 * @method CollaboratorsQuery orderByEditFactsheet($order = Criteria::ASC) Order by the edit_factsheet column
 * @method CollaboratorsQuery orderByEditDbase($order = Criteria::ASC) Order by the edit_dbase column
 * @method CollaboratorsQuery orderByEditFactsheetAquaculture($order = Criteria::ASC) Order by the edit_factsheet_aquaculture column
 * @method CollaboratorsQuery orderByEditLabels($order = Criteria::ASC) Order by the edit_labels column
 * @method CollaboratorsQuery orderByEditLabelsLang($order = Criteria::ASC) Order by the edit_labels_lang column
 * @method CollaboratorsQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method CollaboratorsQuery groupByPersonnel() Group by the Personnel column
 * @method CollaboratorsQuery groupBySurname() Group by the Surname column
 * @method CollaboratorsQuery groupByPrename() Group by the Prename column
 * @method CollaboratorsQuery groupByReportgroup() Group by the ReportGroup column
 * @method CollaboratorsQuery groupByCollabtype() Group by the CollabType column
 * @method CollaboratorsQuery groupByEmail() Group by the E-mail column
 * @method CollaboratorsQuery groupByEmailnew() Group by the E-mailNew column
 * @method CollaboratorsQuery groupByComments() Group by the Comments column
 * @method CollaboratorsQuery groupByCopyright() Group by the Copyright column
 * @method CollaboratorsQuery groupByRdeUser() Group by the RDE_user column
 * @method CollaboratorsQuery groupByInstitute() Group by the Institute column
 * @method CollaboratorsQuery groupByNumber() Group by the Number column
 * @method CollaboratorsQuery groupByStreet() Group by the Street column
 * @method CollaboratorsQuery groupByCity() Group by the City column
 * @method CollaboratorsQuery groupByCountry() Group by the Country column
 * @method CollaboratorsQuery groupByCCode() Group by the C_Code column
 * @method CollaboratorsQuery groupByTelefoncity() Group by the Telefon-City column
 * @method CollaboratorsQuery groupByTelefon() Group by the Telefon column
 * @method CollaboratorsQuery groupByFax() Group by the FAX column
 * @method CollaboratorsQuery groupByTelex() Group by the TELEX column
 * @method CollaboratorsQuery groupByWebpage() Group by the WebPage column
 * @method CollaboratorsQuery groupByKeywords() Group by the Keywords column
 * @method CollaboratorsQuery groupByLarvalbasecollab() Group by the LarvalBaseCollab column
 * @method CollaboratorsQuery groupByNars() Group by the NARS column
 * @method CollaboratorsQuery groupByStaffphoto() Group by the StaffPhoto column
 * @method CollaboratorsQuery groupByCollabtypeorder() Group by the CollabTypeOrder column
 * @method CollaboratorsQuery groupByYear() Group by the Year column
 * @method CollaboratorsQuery groupByYearend() Group by the YearEnd column
 * @method CollaboratorsQuery groupByEntered() Group by the Entered column
 * @method CollaboratorsQuery groupByDataentered() Group by the DataEntered column
 * @method CollaboratorsQuery groupByModified() Group by the Modified column
 * @method CollaboratorsQuery groupByDatemodified() Group by the DateModified column
 * @method CollaboratorsQuery groupByEditCountry() Group by the edit_country column
 * @method CollaboratorsQuery groupByEditSpecies() Group by the edit_species column
 * @method CollaboratorsQuery groupByEditComnames() Group by the edit_comnames column
 * @method CollaboratorsQuery groupByEditLarvalbase() Group by the edit_larvalbase column
 * @method CollaboratorsQuery groupByEditSynonymsx() Group by the edit_synonymsx column
 * @method CollaboratorsQuery groupByEditPictures() Group by the edit_pictures column
 * @method CollaboratorsQuery groupByEditExpedition() Group by the edit_expedition column
 * @method CollaboratorsQuery groupByEditOccurrence() Group by the edit_occurrence column
 * @method CollaboratorsQuery groupByShowEmail() Group by the show_email column
 * @method CollaboratorsQuery groupByShowCountry() Group by the show_country column
 * @method CollaboratorsQuery groupByShowAddress() Group by the show_address column
 * @method CollaboratorsQuery groupByEditGenera() Group by the edit_genera column
 * @method CollaboratorsQuery groupByEditContacts() Group by the edit_contacts column
 * @method CollaboratorsQuery groupByEditPopdyn() Group by the edit_popdyn column
 * @method CollaboratorsQuery groupByEditIntroductions() Group by the edit_introductions column
 * @method CollaboratorsQuery groupByEditAquamaint() Group by the edit_aquamaint column
 * @method CollaboratorsQuery groupByEditFactsheet() Group by the edit_factsheet column
 * @method CollaboratorsQuery groupByEditDbase() Group by the edit_dbase column
 * @method CollaboratorsQuery groupByEditFactsheetAquaculture() Group by the edit_factsheet_aquaculture column
 * @method CollaboratorsQuery groupByEditLabels() Group by the edit_labels column
 * @method CollaboratorsQuery groupByEditLabelsLang() Group by the edit_labels_lang column
 * @method CollaboratorsQuery groupByTs() Group by the TS column
 *
 * @method CollaboratorsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CollaboratorsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CollaboratorsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Collaborators findOne(PropelPDO $con = null) Return the first Collaborators matching the query
 * @method Collaborators findOneOrCreate(PropelPDO $con = null) Return the first Collaborators matching the query, or a new Collaborators object populated from the query conditions when no match is found
 *
 * @method Collaborators findOneByPersonnel(int $Personnel) Return the first Collaborators filtered by the Personnel column
 * @method Collaborators findOneBySurname(string $Surname) Return the first Collaborators filtered by the Surname column
 * @method Collaborators findOneByPrename(string $Prename) Return the first Collaborators filtered by the Prename column
 * @method Collaborators findOneByReportgroup(string $ReportGroup) Return the first Collaborators filtered by the ReportGroup column
 * @method Collaborators findOneByCollabtype(string $CollabType) Return the first Collaborators filtered by the CollabType column
 * @method Collaborators findOneByEmail(string $E-mail) Return the first Collaborators filtered by the E-mail column
 * @method Collaborators findOneByEmailnew(string $E-mailNew) Return the first Collaborators filtered by the E-mailNew column
 * @method Collaborators findOneByComments(string $Comments) Return the first Collaborators filtered by the Comments column
 * @method Collaborators findOneByCopyright(string $Copyright) Return the first Collaborators filtered by the Copyright column
 * @method Collaborators findOneByRdeUser(int $RDE_user) Return the first Collaborators filtered by the RDE_user column
 * @method Collaborators findOneByInstitute(string $Institute) Return the first Collaborators filtered by the Institute column
 * @method Collaborators findOneByNumber(string $Number) Return the first Collaborators filtered by the Number column
 * @method Collaborators findOneByStreet(string $Street) Return the first Collaborators filtered by the Street column
 * @method Collaborators findOneByCity(string $City) Return the first Collaborators filtered by the City column
 * @method Collaborators findOneByCountry(string $Country) Return the first Collaborators filtered by the Country column
 * @method Collaborators findOneByCCode(string $C_Code) Return the first Collaborators filtered by the C_Code column
 * @method Collaborators findOneByTelefoncity(string $Telefon-City) Return the first Collaborators filtered by the Telefon-City column
 * @method Collaborators findOneByTelefon(string $Telefon) Return the first Collaborators filtered by the Telefon column
 * @method Collaborators findOneByFax(string $FAX) Return the first Collaborators filtered by the FAX column
 * @method Collaborators findOneByTelex(string $TELEX) Return the first Collaborators filtered by the TELEX column
 * @method Collaborators findOneByWebpage(string $WebPage) Return the first Collaborators filtered by the WebPage column
 * @method Collaborators findOneByKeywords(string $Keywords) Return the first Collaborators filtered by the Keywords column
 * @method Collaborators findOneByLarvalbasecollab(int $LarvalBaseCollab) Return the first Collaborators filtered by the LarvalBaseCollab column
 * @method Collaborators findOneByNars(int $NARS) Return the first Collaborators filtered by the NARS column
 * @method Collaborators findOneByStaffphoto(resource $StaffPhoto) Return the first Collaborators filtered by the StaffPhoto column
 * @method Collaborators findOneByCollabtypeorder(double $CollabTypeOrder) Return the first Collaborators filtered by the CollabTypeOrder column
 * @method Collaborators findOneByYear(int $Year) Return the first Collaborators filtered by the Year column
 * @method Collaborators findOneByYearend(int $YearEnd) Return the first Collaborators filtered by the YearEnd column
 * @method Collaborators findOneByEntered(int $Entered) Return the first Collaborators filtered by the Entered column
 * @method Collaborators findOneByDataentered(string $DataEntered) Return the first Collaborators filtered by the DataEntered column
 * @method Collaborators findOneByModified(int $Modified) Return the first Collaborators filtered by the Modified column
 * @method Collaborators findOneByDatemodified(string $DateModified) Return the first Collaborators filtered by the DateModified column
 * @method Collaborators findOneByEditCountry(string $edit_country) Return the first Collaborators filtered by the edit_country column
 * @method Collaborators findOneByEditSpecies(string $edit_species) Return the first Collaborators filtered by the edit_species column
 * @method Collaborators findOneByEditComnames(string $edit_comnames) Return the first Collaborators filtered by the edit_comnames column
 * @method Collaborators findOneByEditLarvalbase(string $edit_larvalbase) Return the first Collaborators filtered by the edit_larvalbase column
 * @method Collaborators findOneByEditSynonymsx(string $edit_synonymsx) Return the first Collaborators filtered by the edit_synonymsx column
 * @method Collaborators findOneByEditPictures(string $edit_pictures) Return the first Collaborators filtered by the edit_pictures column
 * @method Collaborators findOneByEditExpedition(string $edit_expedition) Return the first Collaborators filtered by the edit_expedition column
 * @method Collaborators findOneByEditOccurrence(string $edit_occurrence) Return the first Collaborators filtered by the edit_occurrence column
 * @method Collaborators findOneByShowEmail(int $show_email) Return the first Collaborators filtered by the show_email column
 * @method Collaborators findOneByShowCountry(int $show_country) Return the first Collaborators filtered by the show_country column
 * @method Collaborators findOneByShowAddress(int $show_address) Return the first Collaborators filtered by the show_address column
 * @method Collaborators findOneByEditGenera(string $edit_genera) Return the first Collaborators filtered by the edit_genera column
 * @method Collaborators findOneByEditContacts(string $edit_contacts) Return the first Collaborators filtered by the edit_contacts column
 * @method Collaborators findOneByEditPopdyn(string $edit_popdyn) Return the first Collaborators filtered by the edit_popdyn column
 * @method Collaborators findOneByEditIntroductions(string $edit_introductions) Return the first Collaborators filtered by the edit_introductions column
 * @method Collaborators findOneByEditAquamaint(string $edit_aquamaint) Return the first Collaborators filtered by the edit_aquamaint column
 * @method Collaborators findOneByEditFactsheet(string $edit_factsheet) Return the first Collaborators filtered by the edit_factsheet column
 * @method Collaborators findOneByEditDbase(string $edit_dbase) Return the first Collaborators filtered by the edit_dbase column
 * @method Collaborators findOneByEditFactsheetAquaculture(string $edit_factsheet_aquaculture) Return the first Collaborators filtered by the edit_factsheet_aquaculture column
 * @method Collaborators findOneByEditLabels(string $edit_labels) Return the first Collaborators filtered by the edit_labels column
 * @method Collaborators findOneByEditLabelsLang(string $edit_labels_lang) Return the first Collaborators filtered by the edit_labels_lang column
 * @method Collaborators findOneByTs(string $TS) Return the first Collaborators filtered by the TS column
 *
 * @method array findByPersonnel(int $Personnel) Return Collaborators objects filtered by the Personnel column
 * @method array findBySurname(string $Surname) Return Collaborators objects filtered by the Surname column
 * @method array findByPrename(string $Prename) Return Collaborators objects filtered by the Prename column
 * @method array findByReportgroup(string $ReportGroup) Return Collaborators objects filtered by the ReportGroup column
 * @method array findByCollabtype(string $CollabType) Return Collaborators objects filtered by the CollabType column
 * @method array findByEmail(string $E-mail) Return Collaborators objects filtered by the E-mail column
 * @method array findByEmailnew(string $E-mailNew) Return Collaborators objects filtered by the E-mailNew column
 * @method array findByComments(string $Comments) Return Collaborators objects filtered by the Comments column
 * @method array findByCopyright(string $Copyright) Return Collaborators objects filtered by the Copyright column
 * @method array findByRdeUser(int $RDE_user) Return Collaborators objects filtered by the RDE_user column
 * @method array findByInstitute(string $Institute) Return Collaborators objects filtered by the Institute column
 * @method array findByNumber(string $Number) Return Collaborators objects filtered by the Number column
 * @method array findByStreet(string $Street) Return Collaborators objects filtered by the Street column
 * @method array findByCity(string $City) Return Collaborators objects filtered by the City column
 * @method array findByCountry(string $Country) Return Collaborators objects filtered by the Country column
 * @method array findByCCode(string $C_Code) Return Collaborators objects filtered by the C_Code column
 * @method array findByTelefoncity(string $Telefon-City) Return Collaborators objects filtered by the Telefon-City column
 * @method array findByTelefon(string $Telefon) Return Collaborators objects filtered by the Telefon column
 * @method array findByFax(string $FAX) Return Collaborators objects filtered by the FAX column
 * @method array findByTelex(string $TELEX) Return Collaborators objects filtered by the TELEX column
 * @method array findByWebpage(string $WebPage) Return Collaborators objects filtered by the WebPage column
 * @method array findByKeywords(string $Keywords) Return Collaborators objects filtered by the Keywords column
 * @method array findByLarvalbasecollab(int $LarvalBaseCollab) Return Collaborators objects filtered by the LarvalBaseCollab column
 * @method array findByNars(int $NARS) Return Collaborators objects filtered by the NARS column
 * @method array findByStaffphoto(resource $StaffPhoto) Return Collaborators objects filtered by the StaffPhoto column
 * @method array findByCollabtypeorder(double $CollabTypeOrder) Return Collaborators objects filtered by the CollabTypeOrder column
 * @method array findByYear(int $Year) Return Collaborators objects filtered by the Year column
 * @method array findByYearend(int $YearEnd) Return Collaborators objects filtered by the YearEnd column
 * @method array findByEntered(int $Entered) Return Collaborators objects filtered by the Entered column
 * @method array findByDataentered(string $DataEntered) Return Collaborators objects filtered by the DataEntered column
 * @method array findByModified(int $Modified) Return Collaborators objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Collaborators objects filtered by the DateModified column
 * @method array findByEditCountry(string $edit_country) Return Collaborators objects filtered by the edit_country column
 * @method array findByEditSpecies(string $edit_species) Return Collaborators objects filtered by the edit_species column
 * @method array findByEditComnames(string $edit_comnames) Return Collaborators objects filtered by the edit_comnames column
 * @method array findByEditLarvalbase(string $edit_larvalbase) Return Collaborators objects filtered by the edit_larvalbase column
 * @method array findByEditSynonymsx(string $edit_synonymsx) Return Collaborators objects filtered by the edit_synonymsx column
 * @method array findByEditPictures(string $edit_pictures) Return Collaborators objects filtered by the edit_pictures column
 * @method array findByEditExpedition(string $edit_expedition) Return Collaborators objects filtered by the edit_expedition column
 * @method array findByEditOccurrence(string $edit_occurrence) Return Collaborators objects filtered by the edit_occurrence column
 * @method array findByShowEmail(int $show_email) Return Collaborators objects filtered by the show_email column
 * @method array findByShowCountry(int $show_country) Return Collaborators objects filtered by the show_country column
 * @method array findByShowAddress(int $show_address) Return Collaborators objects filtered by the show_address column
 * @method array findByEditGenera(string $edit_genera) Return Collaborators objects filtered by the edit_genera column
 * @method array findByEditContacts(string $edit_contacts) Return Collaborators objects filtered by the edit_contacts column
 * @method array findByEditPopdyn(string $edit_popdyn) Return Collaborators objects filtered by the edit_popdyn column
 * @method array findByEditIntroductions(string $edit_introductions) Return Collaborators objects filtered by the edit_introductions column
 * @method array findByEditAquamaint(string $edit_aquamaint) Return Collaborators objects filtered by the edit_aquamaint column
 * @method array findByEditFactsheet(string $edit_factsheet) Return Collaborators objects filtered by the edit_factsheet column
 * @method array findByEditDbase(string $edit_dbase) Return Collaborators objects filtered by the edit_dbase column
 * @method array findByEditFactsheetAquaculture(string $edit_factsheet_aquaculture) Return Collaborators objects filtered by the edit_factsheet_aquaculture column
 * @method array findByEditLabels(string $edit_labels) Return Collaborators objects filtered by the edit_labels column
 * @method array findByEditLabelsLang(string $edit_labels_lang) Return Collaborators objects filtered by the edit_labels_lang column
 * @method array findByTs(string $TS) Return Collaborators objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCollaboratorsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCollaboratorsQuery object.
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
            $modelName = 'Collaborators';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CollaboratorsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CollaboratorsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CollaboratorsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CollaboratorsQuery) {
            return $criteria;
        }
        $query = new CollaboratorsQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$Surname, $Prename]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Collaborators|Collaborators[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CollaboratorsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CollaboratorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Collaborators A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `Personnel`, `Surname`, `Prename`, `ReportGroup`, `CollabType`, `E-mail`, `E-mailNew`, `Comments`, `Copyright`, `RDE_user`, `Institute`, `Number`, `Street`, `City`, `Country`, `C_Code`, `Telefon-City`, `Telefon`, `FAX`, `TELEX`, `WebPage`, `Keywords`, `LarvalBaseCollab`, `NARS`, `StaffPhoto`, `CollabTypeOrder`, `Year`, `YearEnd`, `Entered`, `DataEntered`, `Modified`, `DateModified`, `edit_country`, `edit_species`, `edit_comnames`, `edit_larvalbase`, `edit_synonymsx`, `edit_pictures`, `edit_expedition`, `edit_occurrence`, `show_email`, `show_country`, `show_address`, `edit_genera`, `edit_contacts`, `edit_popdyn`, `edit_introductions`, `edit_aquamaint`, `edit_factsheet`, `edit_dbase`, `edit_factsheet_aquaculture`, `edit_labels`, `edit_labels_lang`, `TS` FROM `collaborators` WHERE `Surname` = :p0 AND `Prename` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Collaborators();
            $obj->hydrate($row);
            CollaboratorsPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Collaborators|Collaborators[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Collaborators[]|mixed the list of results, formatted by the current formatter
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
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CollaboratorsPeer::SURNAME, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CollaboratorsPeer::PRENAME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CollaboratorsPeer::SURNAME, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CollaboratorsPeer::PRENAME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the Personnel column
     *
     * Example usage:
     * <code>
     * $query->filterByPersonnel(1234); // WHERE Personnel = 1234
     * $query->filterByPersonnel(array(12, 34)); // WHERE Personnel IN (12, 34)
     * $query->filterByPersonnel(array('min' => 12)); // WHERE Personnel >= 12
     * $query->filterByPersonnel(array('max' => 12)); // WHERE Personnel <= 12
     * </code>
     *
     * @param     mixed $personnel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByPersonnel($personnel = null, $comparison = null)
    {
        if (is_array($personnel)) {
            $useMinMax = false;
            if (isset($personnel['min'])) {
                $this->addUsingAlias(CollaboratorsPeer::PERSONNEL, $personnel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($personnel['max'])) {
                $this->addUsingAlias(CollaboratorsPeer::PERSONNEL, $personnel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::PERSONNEL, $personnel, $comparison);
    }

    /**
     * Filter the query on the Surname column
     *
     * Example usage:
     * <code>
     * $query->filterBySurname('fooValue');   // WHERE Surname = 'fooValue'
     * $query->filterBySurname('%fooValue%'); // WHERE Surname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $surname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterBySurname($surname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($surname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $surname)) {
                $surname = str_replace('*', '%', $surname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::SURNAME, $surname, $comparison);
    }

    /**
     * Filter the query on the Prename column
     *
     * Example usage:
     * <code>
     * $query->filterByPrename('fooValue');   // WHERE Prename = 'fooValue'
     * $query->filterByPrename('%fooValue%'); // WHERE Prename LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prename The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByPrename($prename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prename)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prename)) {
                $prename = str_replace('*', '%', $prename);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::PRENAME, $prename, $comparison);
    }

    /**
     * Filter the query on the ReportGroup column
     *
     * Example usage:
     * <code>
     * $query->filterByReportgroup('fooValue');   // WHERE ReportGroup = 'fooValue'
     * $query->filterByReportgroup('%fooValue%'); // WHERE ReportGroup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reportgroup The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByReportgroup($reportgroup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reportgroup)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reportgroup)) {
                $reportgroup = str_replace('*', '%', $reportgroup);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::REPORTGROUP, $reportgroup, $comparison);
    }

    /**
     * Filter the query on the CollabType column
     *
     * Example usage:
     * <code>
     * $query->filterByCollabtype('fooValue');   // WHERE CollabType = 'fooValue'
     * $query->filterByCollabtype('%fooValue%'); // WHERE CollabType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $collabtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByCollabtype($collabtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($collabtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $collabtype)) {
                $collabtype = str_replace('*', '%', $collabtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::COLLABTYPE, $collabtype, $comparison);
    }

    /**
     * Filter the query on the E-mail column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE E-mail = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE E-mail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CollaboratorsPeer::E-MAIL, $email, $comparison);
    }

    /**
     * Filter the query on the E-mailNew column
     *
     * Example usage:
     * <code>
     * $query->filterByEmailnew('fooValue');   // WHERE E-mailNew = 'fooValue'
     * $query->filterByEmailnew('%fooValue%'); // WHERE E-mailNew LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emailnew The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByEmailnew($emailnew = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emailnew)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emailnew)) {
                $emailnew = str_replace('*', '%', $emailnew);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::E-MAILNEW, $emailnew, $comparison);
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
     * @return CollaboratorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CollaboratorsPeer::COMMENTS, $comments, $comparison);
    }

    /**
     * Filter the query on the Copyright column
     *
     * Example usage:
     * <code>
     * $query->filterByCopyright('fooValue');   // WHERE Copyright = 'fooValue'
     * $query->filterByCopyright('%fooValue%'); // WHERE Copyright LIKE '%fooValue%'
     * </code>
     *
     * @param     string $copyright The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByCopyright($copyright = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($copyright)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $copyright)) {
                $copyright = str_replace('*', '%', $copyright);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::COPYRIGHT, $copyright, $comparison);
    }

    /**
     * Filter the query on the RDE_user column
     *
     * Example usage:
     * <code>
     * $query->filterByRdeUser(1234); // WHERE RDE_user = 1234
     * $query->filterByRdeUser(array(12, 34)); // WHERE RDE_user IN (12, 34)
     * $query->filterByRdeUser(array('min' => 12)); // WHERE RDE_user >= 12
     * $query->filterByRdeUser(array('max' => 12)); // WHERE RDE_user <= 12
     * </code>
     *
     * @param     mixed $rdeUser The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByRdeUser($rdeUser = null, $comparison = null)
    {
        if (is_array($rdeUser)) {
            $useMinMax = false;
            if (isset($rdeUser['min'])) {
                $this->addUsingAlias(CollaboratorsPeer::RDE_USER, $rdeUser['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rdeUser['max'])) {
                $this->addUsingAlias(CollaboratorsPeer::RDE_USER, $rdeUser['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::RDE_USER, $rdeUser, $comparison);
    }

    /**
     * Filter the query on the Institute column
     *
     * Example usage:
     * <code>
     * $query->filterByInstitute('fooValue');   // WHERE Institute = 'fooValue'
     * $query->filterByInstitute('%fooValue%'); // WHERE Institute LIKE '%fooValue%'
     * </code>
     *
     * @param     string $institute The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByInstitute($institute = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($institute)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $institute)) {
                $institute = str_replace('*', '%', $institute);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::INSTITUTE, $institute, $comparison);
    }

    /**
     * Filter the query on the Number column
     *
     * Example usage:
     * <code>
     * $query->filterByNumber('fooValue');   // WHERE Number = 'fooValue'
     * $query->filterByNumber('%fooValue%'); // WHERE Number LIKE '%fooValue%'
     * </code>
     *
     * @param     string $number The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByNumber($number = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($number)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $number)) {
                $number = str_replace('*', '%', $number);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::NUMBER, $number, $comparison);
    }

    /**
     * Filter the query on the Street column
     *
     * Example usage:
     * <code>
     * $query->filterByStreet('fooValue');   // WHERE Street = 'fooValue'
     * $query->filterByStreet('%fooValue%'); // WHERE Street LIKE '%fooValue%'
     * </code>
     *
     * @param     string $street The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByStreet($street = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($street)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $street)) {
                $street = str_replace('*', '%', $street);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::STREET, $street, $comparison);
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
     * @return CollaboratorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CollaboratorsPeer::CITY, $city, $comparison);
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
     * @return CollaboratorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CollaboratorsPeer::COUNTRY, $country, $comparison);
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
     * @return CollaboratorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CollaboratorsPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the Telefon-City column
     *
     * Example usage:
     * <code>
     * $query->filterByTelefoncity('fooValue');   // WHERE Telefon-City = 'fooValue'
     * $query->filterByTelefoncity('%fooValue%'); // WHERE Telefon-City LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telefoncity The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByTelefoncity($telefoncity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telefoncity)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telefoncity)) {
                $telefoncity = str_replace('*', '%', $telefoncity);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::TELEFON-CITY, $telefoncity, $comparison);
    }

    /**
     * Filter the query on the Telefon column
     *
     * Example usage:
     * <code>
     * $query->filterByTelefon('fooValue');   // WHERE Telefon = 'fooValue'
     * $query->filterByTelefon('%fooValue%'); // WHERE Telefon LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telefon The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByTelefon($telefon = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telefon)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telefon)) {
                $telefon = str_replace('*', '%', $telefon);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::TELEFON, $telefon, $comparison);
    }

    /**
     * Filter the query on the FAX column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE FAX = 'fooValue'
     * $query->filterByFax('%fooValue%'); // WHERE FAX LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CollaboratorsPeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the TELEX column
     *
     * Example usage:
     * <code>
     * $query->filterByTelex('fooValue');   // WHERE TELEX = 'fooValue'
     * $query->filterByTelex('%fooValue%'); // WHERE TELEX LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telex The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByTelex($telex = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telex)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telex)) {
                $telex = str_replace('*', '%', $telex);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::TELEX, $telex, $comparison);
    }

    /**
     * Filter the query on the WebPage column
     *
     * Example usage:
     * <code>
     * $query->filterByWebpage('fooValue');   // WHERE WebPage = 'fooValue'
     * $query->filterByWebpage('%fooValue%'); // WHERE WebPage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $webpage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByWebpage($webpage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($webpage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $webpage)) {
                $webpage = str_replace('*', '%', $webpage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::WEBPAGE, $webpage, $comparison);
    }

    /**
     * Filter the query on the Keywords column
     *
     * Example usage:
     * <code>
     * $query->filterByKeywords('fooValue');   // WHERE Keywords = 'fooValue'
     * $query->filterByKeywords('%fooValue%'); // WHERE Keywords LIKE '%fooValue%'
     * </code>
     *
     * @param     string $keywords The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByKeywords($keywords = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($keywords)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $keywords)) {
                $keywords = str_replace('*', '%', $keywords);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::KEYWORDS, $keywords, $comparison);
    }

    /**
     * Filter the query on the LarvalBaseCollab column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvalbasecollab(1234); // WHERE LarvalBaseCollab = 1234
     * $query->filterByLarvalbasecollab(array(12, 34)); // WHERE LarvalBaseCollab IN (12, 34)
     * $query->filterByLarvalbasecollab(array('min' => 12)); // WHERE LarvalBaseCollab >= 12
     * $query->filterByLarvalbasecollab(array('max' => 12)); // WHERE LarvalBaseCollab <= 12
     * </code>
     *
     * @param     mixed $larvalbasecollab The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByLarvalbasecollab($larvalbasecollab = null, $comparison = null)
    {
        if (is_array($larvalbasecollab)) {
            $useMinMax = false;
            if (isset($larvalbasecollab['min'])) {
                $this->addUsingAlias(CollaboratorsPeer::LARVALBASECOLLAB, $larvalbasecollab['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvalbasecollab['max'])) {
                $this->addUsingAlias(CollaboratorsPeer::LARVALBASECOLLAB, $larvalbasecollab['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::LARVALBASECOLLAB, $larvalbasecollab, $comparison);
    }

    /**
     * Filter the query on the NARS column
     *
     * Example usage:
     * <code>
     * $query->filterByNars(1234); // WHERE NARS = 1234
     * $query->filterByNars(array(12, 34)); // WHERE NARS IN (12, 34)
     * $query->filterByNars(array('min' => 12)); // WHERE NARS >= 12
     * $query->filterByNars(array('max' => 12)); // WHERE NARS <= 12
     * </code>
     *
     * @param     mixed $nars The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByNars($nars = null, $comparison = null)
    {
        if (is_array($nars)) {
            $useMinMax = false;
            if (isset($nars['min'])) {
                $this->addUsingAlias(CollaboratorsPeer::NARS, $nars['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nars['max'])) {
                $this->addUsingAlias(CollaboratorsPeer::NARS, $nars['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::NARS, $nars, $comparison);
    }

    /**
     * Filter the query on the StaffPhoto column
     *
     * @param     mixed $staffphoto The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByStaffphoto($staffphoto = null, $comparison = null)
    {

        return $this->addUsingAlias(CollaboratorsPeer::STAFFPHOTO, $staffphoto, $comparison);
    }

    /**
     * Filter the query on the CollabTypeOrder column
     *
     * Example usage:
     * <code>
     * $query->filterByCollabtypeorder(1234); // WHERE CollabTypeOrder = 1234
     * $query->filterByCollabtypeorder(array(12, 34)); // WHERE CollabTypeOrder IN (12, 34)
     * $query->filterByCollabtypeorder(array('min' => 12)); // WHERE CollabTypeOrder >= 12
     * $query->filterByCollabtypeorder(array('max' => 12)); // WHERE CollabTypeOrder <= 12
     * </code>
     *
     * @param     mixed $collabtypeorder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByCollabtypeorder($collabtypeorder = null, $comparison = null)
    {
        if (is_array($collabtypeorder)) {
            $useMinMax = false;
            if (isset($collabtypeorder['min'])) {
                $this->addUsingAlias(CollaboratorsPeer::COLLABTYPEORDER, $collabtypeorder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collabtypeorder['max'])) {
                $this->addUsingAlias(CollaboratorsPeer::COLLABTYPEORDER, $collabtypeorder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::COLLABTYPEORDER, $collabtypeorder, $comparison);
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
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (is_array($year)) {
            $useMinMax = false;
            if (isset($year['min'])) {
                $this->addUsingAlias(CollaboratorsPeer::YEAR, $year['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($year['max'])) {
                $this->addUsingAlias(CollaboratorsPeer::YEAR, $year['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::YEAR, $year, $comparison);
    }

    /**
     * Filter the query on the YearEnd column
     *
     * Example usage:
     * <code>
     * $query->filterByYearend(1234); // WHERE YearEnd = 1234
     * $query->filterByYearend(array(12, 34)); // WHERE YearEnd IN (12, 34)
     * $query->filterByYearend(array('min' => 12)); // WHERE YearEnd >= 12
     * $query->filterByYearend(array('max' => 12)); // WHERE YearEnd <= 12
     * </code>
     *
     * @param     mixed $yearend The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByYearend($yearend = null, $comparison = null)
    {
        if (is_array($yearend)) {
            $useMinMax = false;
            if (isset($yearend['min'])) {
                $this->addUsingAlias(CollaboratorsPeer::YEAREND, $yearend['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yearend['max'])) {
                $this->addUsingAlias(CollaboratorsPeer::YEAREND, $yearend['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::YEAREND, $yearend, $comparison);
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
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(CollaboratorsPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(CollaboratorsPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::ENTERED, $entered, $comparison);
    }

    /**
     * Filter the query on the DataEntered column
     *
     * Example usage:
     * <code>
     * $query->filterByDataentered('2011-03-14'); // WHERE DataEntered = '2011-03-14'
     * $query->filterByDataentered('now'); // WHERE DataEntered = '2011-03-14'
     * $query->filterByDataentered(array('max' => 'yesterday')); // WHERE DataEntered < '2011-03-13'
     * </code>
     *
     * @param     mixed $dataentered The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByDataentered($dataentered = null, $comparison = null)
    {
        if (is_array($dataentered)) {
            $useMinMax = false;
            if (isset($dataentered['min'])) {
                $this->addUsingAlias(CollaboratorsPeer::DATAENTERED, $dataentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dataentered['max'])) {
                $this->addUsingAlias(CollaboratorsPeer::DATAENTERED, $dataentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::DATAENTERED, $dataentered, $comparison);
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
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(CollaboratorsPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(CollaboratorsPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::MODIFIED, $modified, $comparison);
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
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(CollaboratorsPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(CollaboratorsPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::DATEMODIFIED, $datemodified, $comparison);
    }

    /**
     * Filter the query on the edit_country column
     *
     * Example usage:
     * <code>
     * $query->filterByEditCountry('fooValue');   // WHERE edit_country = 'fooValue'
     * $query->filterByEditCountry('%fooValue%'); // WHERE edit_country LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editCountry The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByEditCountry($editCountry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editCountry)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editCountry)) {
                $editCountry = str_replace('*', '%', $editCountry);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::EDIT_COUNTRY, $editCountry, $comparison);
    }

    /**
     * Filter the query on the edit_species column
     *
     * Example usage:
     * <code>
     * $query->filterByEditSpecies('fooValue');   // WHERE edit_species = 'fooValue'
     * $query->filterByEditSpecies('%fooValue%'); // WHERE edit_species LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editSpecies The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByEditSpecies($editSpecies = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editSpecies)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editSpecies)) {
                $editSpecies = str_replace('*', '%', $editSpecies);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::EDIT_SPECIES, $editSpecies, $comparison);
    }

    /**
     * Filter the query on the edit_comnames column
     *
     * Example usage:
     * <code>
     * $query->filterByEditComnames('fooValue');   // WHERE edit_comnames = 'fooValue'
     * $query->filterByEditComnames('%fooValue%'); // WHERE edit_comnames LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editComnames The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByEditComnames($editComnames = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editComnames)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editComnames)) {
                $editComnames = str_replace('*', '%', $editComnames);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::EDIT_COMNAMES, $editComnames, $comparison);
    }

    /**
     * Filter the query on the edit_larvalbase column
     *
     * Example usage:
     * <code>
     * $query->filterByEditLarvalbase('fooValue');   // WHERE edit_larvalbase = 'fooValue'
     * $query->filterByEditLarvalbase('%fooValue%'); // WHERE edit_larvalbase LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editLarvalbase The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByEditLarvalbase($editLarvalbase = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editLarvalbase)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editLarvalbase)) {
                $editLarvalbase = str_replace('*', '%', $editLarvalbase);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::EDIT_LARVALBASE, $editLarvalbase, $comparison);
    }

    /**
     * Filter the query on the edit_synonymsx column
     *
     * Example usage:
     * <code>
     * $query->filterByEditSynonymsx('fooValue');   // WHERE edit_synonymsx = 'fooValue'
     * $query->filterByEditSynonymsx('%fooValue%'); // WHERE edit_synonymsx LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editSynonymsx The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByEditSynonymsx($editSynonymsx = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editSynonymsx)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editSynonymsx)) {
                $editSynonymsx = str_replace('*', '%', $editSynonymsx);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::EDIT_SYNONYMSX, $editSynonymsx, $comparison);
    }

    /**
     * Filter the query on the edit_pictures column
     *
     * Example usage:
     * <code>
     * $query->filterByEditPictures('fooValue');   // WHERE edit_pictures = 'fooValue'
     * $query->filterByEditPictures('%fooValue%'); // WHERE edit_pictures LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editPictures The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByEditPictures($editPictures = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editPictures)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editPictures)) {
                $editPictures = str_replace('*', '%', $editPictures);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::EDIT_PICTURES, $editPictures, $comparison);
    }

    /**
     * Filter the query on the edit_expedition column
     *
     * Example usage:
     * <code>
     * $query->filterByEditExpedition('fooValue');   // WHERE edit_expedition = 'fooValue'
     * $query->filterByEditExpedition('%fooValue%'); // WHERE edit_expedition LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editExpedition The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByEditExpedition($editExpedition = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editExpedition)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editExpedition)) {
                $editExpedition = str_replace('*', '%', $editExpedition);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::EDIT_EXPEDITION, $editExpedition, $comparison);
    }

    /**
     * Filter the query on the edit_occurrence column
     *
     * Example usage:
     * <code>
     * $query->filterByEditOccurrence('fooValue');   // WHERE edit_occurrence = 'fooValue'
     * $query->filterByEditOccurrence('%fooValue%'); // WHERE edit_occurrence LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editOccurrence The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByEditOccurrence($editOccurrence = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editOccurrence)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editOccurrence)) {
                $editOccurrence = str_replace('*', '%', $editOccurrence);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::EDIT_OCCURRENCE, $editOccurrence, $comparison);
    }

    /**
     * Filter the query on the show_email column
     *
     * Example usage:
     * <code>
     * $query->filterByShowEmail(1234); // WHERE show_email = 1234
     * $query->filterByShowEmail(array(12, 34)); // WHERE show_email IN (12, 34)
     * $query->filterByShowEmail(array('min' => 12)); // WHERE show_email >= 12
     * $query->filterByShowEmail(array('max' => 12)); // WHERE show_email <= 12
     * </code>
     *
     * @param     mixed $showEmail The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByShowEmail($showEmail = null, $comparison = null)
    {
        if (is_array($showEmail)) {
            $useMinMax = false;
            if (isset($showEmail['min'])) {
                $this->addUsingAlias(CollaboratorsPeer::SHOW_EMAIL, $showEmail['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($showEmail['max'])) {
                $this->addUsingAlias(CollaboratorsPeer::SHOW_EMAIL, $showEmail['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::SHOW_EMAIL, $showEmail, $comparison);
    }

    /**
     * Filter the query on the show_country column
     *
     * Example usage:
     * <code>
     * $query->filterByShowCountry(1234); // WHERE show_country = 1234
     * $query->filterByShowCountry(array(12, 34)); // WHERE show_country IN (12, 34)
     * $query->filterByShowCountry(array('min' => 12)); // WHERE show_country >= 12
     * $query->filterByShowCountry(array('max' => 12)); // WHERE show_country <= 12
     * </code>
     *
     * @param     mixed $showCountry The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByShowCountry($showCountry = null, $comparison = null)
    {
        if (is_array($showCountry)) {
            $useMinMax = false;
            if (isset($showCountry['min'])) {
                $this->addUsingAlias(CollaboratorsPeer::SHOW_COUNTRY, $showCountry['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($showCountry['max'])) {
                $this->addUsingAlias(CollaboratorsPeer::SHOW_COUNTRY, $showCountry['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::SHOW_COUNTRY, $showCountry, $comparison);
    }

    /**
     * Filter the query on the show_address column
     *
     * Example usage:
     * <code>
     * $query->filterByShowAddress(1234); // WHERE show_address = 1234
     * $query->filterByShowAddress(array(12, 34)); // WHERE show_address IN (12, 34)
     * $query->filterByShowAddress(array('min' => 12)); // WHERE show_address >= 12
     * $query->filterByShowAddress(array('max' => 12)); // WHERE show_address <= 12
     * </code>
     *
     * @param     mixed $showAddress The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByShowAddress($showAddress = null, $comparison = null)
    {
        if (is_array($showAddress)) {
            $useMinMax = false;
            if (isset($showAddress['min'])) {
                $this->addUsingAlias(CollaboratorsPeer::SHOW_ADDRESS, $showAddress['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($showAddress['max'])) {
                $this->addUsingAlias(CollaboratorsPeer::SHOW_ADDRESS, $showAddress['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::SHOW_ADDRESS, $showAddress, $comparison);
    }

    /**
     * Filter the query on the edit_genera column
     *
     * Example usage:
     * <code>
     * $query->filterByEditGenera('fooValue');   // WHERE edit_genera = 'fooValue'
     * $query->filterByEditGenera('%fooValue%'); // WHERE edit_genera LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editGenera The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByEditGenera($editGenera = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editGenera)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editGenera)) {
                $editGenera = str_replace('*', '%', $editGenera);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::EDIT_GENERA, $editGenera, $comparison);
    }

    /**
     * Filter the query on the edit_contacts column
     *
     * Example usage:
     * <code>
     * $query->filterByEditContacts('fooValue');   // WHERE edit_contacts = 'fooValue'
     * $query->filterByEditContacts('%fooValue%'); // WHERE edit_contacts LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editContacts The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByEditContacts($editContacts = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editContacts)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editContacts)) {
                $editContacts = str_replace('*', '%', $editContacts);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::EDIT_CONTACTS, $editContacts, $comparison);
    }

    /**
     * Filter the query on the edit_popdyn column
     *
     * Example usage:
     * <code>
     * $query->filterByEditPopdyn('fooValue');   // WHERE edit_popdyn = 'fooValue'
     * $query->filterByEditPopdyn('%fooValue%'); // WHERE edit_popdyn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editPopdyn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByEditPopdyn($editPopdyn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editPopdyn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editPopdyn)) {
                $editPopdyn = str_replace('*', '%', $editPopdyn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::EDIT_POPDYN, $editPopdyn, $comparison);
    }

    /**
     * Filter the query on the edit_introductions column
     *
     * Example usage:
     * <code>
     * $query->filterByEditIntroductions('fooValue');   // WHERE edit_introductions = 'fooValue'
     * $query->filterByEditIntroductions('%fooValue%'); // WHERE edit_introductions LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editIntroductions The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByEditIntroductions($editIntroductions = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editIntroductions)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editIntroductions)) {
                $editIntroductions = str_replace('*', '%', $editIntroductions);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::EDIT_INTRODUCTIONS, $editIntroductions, $comparison);
    }

    /**
     * Filter the query on the edit_aquamaint column
     *
     * Example usage:
     * <code>
     * $query->filterByEditAquamaint('fooValue');   // WHERE edit_aquamaint = 'fooValue'
     * $query->filterByEditAquamaint('%fooValue%'); // WHERE edit_aquamaint LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editAquamaint The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByEditAquamaint($editAquamaint = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editAquamaint)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editAquamaint)) {
                $editAquamaint = str_replace('*', '%', $editAquamaint);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::EDIT_AQUAMAINT, $editAquamaint, $comparison);
    }

    /**
     * Filter the query on the edit_factsheet column
     *
     * Example usage:
     * <code>
     * $query->filterByEditFactsheet('fooValue');   // WHERE edit_factsheet = 'fooValue'
     * $query->filterByEditFactsheet('%fooValue%'); // WHERE edit_factsheet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editFactsheet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByEditFactsheet($editFactsheet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editFactsheet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editFactsheet)) {
                $editFactsheet = str_replace('*', '%', $editFactsheet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::EDIT_FACTSHEET, $editFactsheet, $comparison);
    }

    /**
     * Filter the query on the edit_dbase column
     *
     * Example usage:
     * <code>
     * $query->filterByEditDbase('fooValue');   // WHERE edit_dbase = 'fooValue'
     * $query->filterByEditDbase('%fooValue%'); // WHERE edit_dbase LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editDbase The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByEditDbase($editDbase = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editDbase)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editDbase)) {
                $editDbase = str_replace('*', '%', $editDbase);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::EDIT_DBASE, $editDbase, $comparison);
    }

    /**
     * Filter the query on the edit_factsheet_aquaculture column
     *
     * Example usage:
     * <code>
     * $query->filterByEditFactsheetAquaculture('fooValue');   // WHERE edit_factsheet_aquaculture = 'fooValue'
     * $query->filterByEditFactsheetAquaculture('%fooValue%'); // WHERE edit_factsheet_aquaculture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editFactsheetAquaculture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByEditFactsheetAquaculture($editFactsheetAquaculture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editFactsheetAquaculture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editFactsheetAquaculture)) {
                $editFactsheetAquaculture = str_replace('*', '%', $editFactsheetAquaculture);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::EDIT_FACTSHEET_AQUACULTURE, $editFactsheetAquaculture, $comparison);
    }

    /**
     * Filter the query on the edit_labels column
     *
     * Example usage:
     * <code>
     * $query->filterByEditLabels('fooValue');   // WHERE edit_labels = 'fooValue'
     * $query->filterByEditLabels('%fooValue%'); // WHERE edit_labels LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editLabels The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByEditLabels($editLabels = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editLabels)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editLabels)) {
                $editLabels = str_replace('*', '%', $editLabels);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::EDIT_LABELS, $editLabels, $comparison);
    }

    /**
     * Filter the query on the edit_labels_lang column
     *
     * Example usage:
     * <code>
     * $query->filterByEditLabelsLang('fooValue');   // WHERE edit_labels_lang = 'fooValue'
     * $query->filterByEditLabelsLang('%fooValue%'); // WHERE edit_labels_lang LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editLabelsLang The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByEditLabelsLang($editLabelsLang = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editLabelsLang)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editLabelsLang)) {
                $editLabelsLang = str_replace('*', '%', $editLabelsLang);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::EDIT_LABELS_LANG, $editLabelsLang, $comparison);
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
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(CollaboratorsPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(CollaboratorsPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CollaboratorsPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Collaborators $collaborators Object to remove from the list of results
     *
     * @return CollaboratorsQuery The current query, for fluid interface
     */
    public function prune($collaborators = null)
    {
        if ($collaborators) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CollaboratorsPeer::SURNAME), $collaborators->getSurname(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CollaboratorsPeer::PRENAME), $collaborators->getPrename(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
