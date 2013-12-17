<?php


/**
 * Base class that represents a query for the 'wpreferences' table.
 *
 *
 *
 * @method WpreferencesQuery orderByRefno($order = Criteria::ASC) Order by the RefNo column
 * @method WpreferencesQuery orderByTitle($order = Criteria::ASC) Order by the Title column
 * @method WpreferencesQuery orderByTopic($order = Criteria::ASC) Order by the Topic column
 * @method WpreferencesQuery orderBySubtopic($order = Criteria::ASC) Order by the SubTopic column
 * @method WpreferencesQuery orderByAuthor($order = Criteria::ASC) Order by the Author column
 * @method WpreferencesQuery orderByWp($order = Criteria::ASC) Order by the WP column
 * @method WpreferencesQuery orderBySource($order = Criteria::ASC) Order by the Source column
 * @method WpreferencesQuery orderByYear($order = Criteria::ASC) Order by the Year column
 * @method WpreferencesQuery orderByPaperurl($order = Criteria::ASC) Order by the PaperURL column
 * @method WpreferencesQuery orderByIncpub($order = Criteria::ASC) Order by the IncPub column
 * @method WpreferencesQuery orderByPubstat($order = Criteria::ASC) Order by the PubStat column
 * @method WpreferencesQuery orderByAnnotation($order = Criteria::ASC) Order by the Annotation column
 * @method WpreferencesQuery orderByNametype($order = Criteria::ASC) Order by the NameType column
 * @method WpreferencesQuery orderBySourceunique($order = Criteria::ASC) Order by the SourceUnique column
 * @method WpreferencesQuery orderByFirstauthor($order = Criteria::ASC) Order by the FirstAuthor column
 * @method WpreferencesQuery orderByPagestart($order = Criteria::ASC) Order by the PageStart column
 * @method WpreferencesQuery orderByPageend($order = Criteria::ASC) Order by the PageEnd column
 * @method WpreferencesQuery orderByPagecount($order = Criteria::ASC) Order by the PageCount column
 * @method WpreferencesQuery orderByLanguage($order = Criteria::ASC) Order by the Language column
 * @method WpreferencesQuery orderByComplete($order = Criteria::ASC) Order by the Complete column
 * @method WpreferencesQuery orderByReftype($order = Criteria::ASC) Order by the RefType column
 * @method WpreferencesQuery orderByKeywords($order = Criteria::ASC) Order by the Keywords column
 * @method WpreferencesQuery orderByOtherkeywords($order = Criteria::ASC) Order by the OtherKeywords column
 * @method WpreferencesQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method WpreferencesQuery orderByCrossref1($order = Criteria::ASC) Order by the CrossRef1 column
 * @method WpreferencesQuery orderByCrossref2($order = Criteria::ASC) Order by the CrossRef2 column
 * @method WpreferencesQuery orderByCrossref3($order = Criteria::ASC) Order by the CrossRef3 column
 * @method WpreferencesQuery orderByCrossref4($order = Criteria::ASC) Order by the CrossRef4 column
 * @method WpreferencesQuery orderByCrossref5($order = Criteria::ASC) Order by the CrossRef5 column
 * @method WpreferencesQuery orderByAbstract($order = Criteria::ASC) Order by the Abstract column
 * @method WpreferencesQuery orderByCitation($order = Criteria::ASC) Order by the Citation column
 * @method WpreferencesQuery orderByTeam($order = Criteria::ASC) Order by the Team column
 * @method WpreferencesQuery orderByAvailiclarm2($order = Criteria::ASC) Order by the AvailIclarm2 column
 * @method WpreferencesQuery orderByAvailiclarm($order = Criteria::ASC) Order by the AvailIclarm column
 * @method WpreferencesQuery orderByAquarium($order = Criteria::ASC) Order by the Aquarium column
 * @method WpreferencesQuery orderByProcessing($order = Criteria::ASC) Order by the Processing column
 * @method WpreferencesQuery orderByComname($order = Criteria::ASC) Order by the Comname column
 * @method WpreferencesQuery orderByPictures($order = Criteria::ASC) Order by the Pictures column
 * @method WpreferencesQuery orderByTagrecapture($order = Criteria::ASC) Order by the Tag/recapture column
 * @method WpreferencesQuery orderByConservation($order = Criteria::ASC) Order by the Conservation column
 * @method WpreferencesQuery orderByChecklist($order = Criteria::ASC) Order by the Checklist column
 * @method WpreferencesQuery orderByIsbn($order = Criteria::ASC) Order by the ISBN column
 * @method WpreferencesQuery orderByAuthoremail($order = Criteria::ASC) Order by the AuthorEmail column
 * @method WpreferencesQuery orderByAuthoradress($order = Criteria::ASC) Order by the AuthorAdress column
 * @method WpreferencesQuery orderByAuthoradress2($order = Criteria::ASC) Order by the AuthorAdress2 column
 * @method WpreferencesQuery orderByPdffile($order = Criteria::ASC) Order by the PdfFile column
 * @method WpreferencesQuery orderByDp($order = Criteria::ASC) Order by the DP column
 * @method WpreferencesQuery orderByRf($order = Criteria::ASC) Order by the RF column
 * @method WpreferencesQuery orderByRde($order = Criteria::ASC) Order by the RDE column
 * @method WpreferencesQuery orderByUsed($order = Criteria::ASC) Order by the Used column
 * @method WpreferencesQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method WpreferencesQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method WpreferencesQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method WpreferencesQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method WpreferencesQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method WpreferencesQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method WpreferencesQuery orderByBorrower($order = Criteria::ASC) Order by the Borrower column
 *
 * @method WpreferencesQuery groupByRefno() Group by the RefNo column
 * @method WpreferencesQuery groupByTitle() Group by the Title column
 * @method WpreferencesQuery groupByTopic() Group by the Topic column
 * @method WpreferencesQuery groupBySubtopic() Group by the SubTopic column
 * @method WpreferencesQuery groupByAuthor() Group by the Author column
 * @method WpreferencesQuery groupByWp() Group by the WP column
 * @method WpreferencesQuery groupBySource() Group by the Source column
 * @method WpreferencesQuery groupByYear() Group by the Year column
 * @method WpreferencesQuery groupByPaperurl() Group by the PaperURL column
 * @method WpreferencesQuery groupByIncpub() Group by the IncPub column
 * @method WpreferencesQuery groupByPubstat() Group by the PubStat column
 * @method WpreferencesQuery groupByAnnotation() Group by the Annotation column
 * @method WpreferencesQuery groupByNametype() Group by the NameType column
 * @method WpreferencesQuery groupBySourceunique() Group by the SourceUnique column
 * @method WpreferencesQuery groupByFirstauthor() Group by the FirstAuthor column
 * @method WpreferencesQuery groupByPagestart() Group by the PageStart column
 * @method WpreferencesQuery groupByPageend() Group by the PageEnd column
 * @method WpreferencesQuery groupByPagecount() Group by the PageCount column
 * @method WpreferencesQuery groupByLanguage() Group by the Language column
 * @method WpreferencesQuery groupByComplete() Group by the Complete column
 * @method WpreferencesQuery groupByReftype() Group by the RefType column
 * @method WpreferencesQuery groupByKeywords() Group by the Keywords column
 * @method WpreferencesQuery groupByOtherkeywords() Group by the OtherKeywords column
 * @method WpreferencesQuery groupByRemarks() Group by the Remarks column
 * @method WpreferencesQuery groupByCrossref1() Group by the CrossRef1 column
 * @method WpreferencesQuery groupByCrossref2() Group by the CrossRef2 column
 * @method WpreferencesQuery groupByCrossref3() Group by the CrossRef3 column
 * @method WpreferencesQuery groupByCrossref4() Group by the CrossRef4 column
 * @method WpreferencesQuery groupByCrossref5() Group by the CrossRef5 column
 * @method WpreferencesQuery groupByAbstract() Group by the Abstract column
 * @method WpreferencesQuery groupByCitation() Group by the Citation column
 * @method WpreferencesQuery groupByTeam() Group by the Team column
 * @method WpreferencesQuery groupByAvailiclarm2() Group by the AvailIclarm2 column
 * @method WpreferencesQuery groupByAvailiclarm() Group by the AvailIclarm column
 * @method WpreferencesQuery groupByAquarium() Group by the Aquarium column
 * @method WpreferencesQuery groupByProcessing() Group by the Processing column
 * @method WpreferencesQuery groupByComname() Group by the Comname column
 * @method WpreferencesQuery groupByPictures() Group by the Pictures column
 * @method WpreferencesQuery groupByTagrecapture() Group by the Tag/recapture column
 * @method WpreferencesQuery groupByConservation() Group by the Conservation column
 * @method WpreferencesQuery groupByChecklist() Group by the Checklist column
 * @method WpreferencesQuery groupByIsbn() Group by the ISBN column
 * @method WpreferencesQuery groupByAuthoremail() Group by the AuthorEmail column
 * @method WpreferencesQuery groupByAuthoradress() Group by the AuthorAdress column
 * @method WpreferencesQuery groupByAuthoradress2() Group by the AuthorAdress2 column
 * @method WpreferencesQuery groupByPdffile() Group by the PdfFile column
 * @method WpreferencesQuery groupByDp() Group by the DP column
 * @method WpreferencesQuery groupByRf() Group by the RF column
 * @method WpreferencesQuery groupByRde() Group by the RDE column
 * @method WpreferencesQuery groupByUsed() Group by the Used column
 * @method WpreferencesQuery groupByEntered() Group by the Entered column
 * @method WpreferencesQuery groupByDateentered() Group by the DateEntered column
 * @method WpreferencesQuery groupByModified() Group by the Modified column
 * @method WpreferencesQuery groupByDatemodified() Group by the DateModified column
 * @method WpreferencesQuery groupByExpert() Group by the Expert column
 * @method WpreferencesQuery groupByDatechecked() Group by the DateChecked column
 * @method WpreferencesQuery groupByBorrower() Group by the Borrower column
 *
 * @method WpreferencesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method WpreferencesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method WpreferencesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Wpreferences findOne(PropelPDO $con = null) Return the first Wpreferences matching the query
 * @method Wpreferences findOneOrCreate(PropelPDO $con = null) Return the first Wpreferences matching the query, or a new Wpreferences object populated from the query conditions when no match is found
 *
 * @method Wpreferences findOneByTitle(string $Title) Return the first Wpreferences filtered by the Title column
 * @method Wpreferences findOneByTopic(string $Topic) Return the first Wpreferences filtered by the Topic column
 * @method Wpreferences findOneBySubtopic(string $SubTopic) Return the first Wpreferences filtered by the SubTopic column
 * @method Wpreferences findOneByAuthor(string $Author) Return the first Wpreferences filtered by the Author column
 * @method Wpreferences findOneByWp(string $WP) Return the first Wpreferences filtered by the WP column
 * @method Wpreferences findOneBySource(string $Source) Return the first Wpreferences filtered by the Source column
 * @method Wpreferences findOneByYear(int $Year) Return the first Wpreferences filtered by the Year column
 * @method Wpreferences findOneByPaperurl(string $PaperURL) Return the first Wpreferences filtered by the PaperURL column
 * @method Wpreferences findOneByIncpub(string $IncPub) Return the first Wpreferences filtered by the IncPub column
 * @method Wpreferences findOneByPubstat(string $PubStat) Return the first Wpreferences filtered by the PubStat column
 * @method Wpreferences findOneByAnnotation(string $Annotation) Return the first Wpreferences filtered by the Annotation column
 * @method Wpreferences findOneByNametype(string $NameType) Return the first Wpreferences filtered by the NameType column
 * @method Wpreferences findOneBySourceunique(string $SourceUnique) Return the first Wpreferences filtered by the SourceUnique column
 * @method Wpreferences findOneByFirstauthor(string $FirstAuthor) Return the first Wpreferences filtered by the FirstAuthor column
 * @method Wpreferences findOneByPagestart(int $PageStart) Return the first Wpreferences filtered by the PageStart column
 * @method Wpreferences findOneByPageend(int $PageEnd) Return the first Wpreferences filtered by the PageEnd column
 * @method Wpreferences findOneByPagecount(int $PageCount) Return the first Wpreferences filtered by the PageCount column
 * @method Wpreferences findOneByLanguage(string $Language) Return the first Wpreferences filtered by the Language column
 * @method Wpreferences findOneByComplete(int $Complete) Return the first Wpreferences filtered by the Complete column
 * @method Wpreferences findOneByReftype(string $RefType) Return the first Wpreferences filtered by the RefType column
 * @method Wpreferences findOneByKeywords(string $Keywords) Return the first Wpreferences filtered by the Keywords column
 * @method Wpreferences findOneByOtherkeywords(string $OtherKeywords) Return the first Wpreferences filtered by the OtherKeywords column
 * @method Wpreferences findOneByRemarks(string $Remarks) Return the first Wpreferences filtered by the Remarks column
 * @method Wpreferences findOneByCrossref1(int $CrossRef1) Return the first Wpreferences filtered by the CrossRef1 column
 * @method Wpreferences findOneByCrossref2(int $CrossRef2) Return the first Wpreferences filtered by the CrossRef2 column
 * @method Wpreferences findOneByCrossref3(int $CrossRef3) Return the first Wpreferences filtered by the CrossRef3 column
 * @method Wpreferences findOneByCrossref4(int $CrossRef4) Return the first Wpreferences filtered by the CrossRef4 column
 * @method Wpreferences findOneByCrossref5(int $CrossRef5) Return the first Wpreferences filtered by the CrossRef5 column
 * @method Wpreferences findOneByAbstract(string $Abstract) Return the first Wpreferences filtered by the Abstract column
 * @method Wpreferences findOneByCitation(int $Citation) Return the first Wpreferences filtered by the Citation column
 * @method Wpreferences findOneByTeam(int $Team) Return the first Wpreferences filtered by the Team column
 * @method Wpreferences findOneByAvailiclarm2(int $AvailIclarm2) Return the first Wpreferences filtered by the AvailIclarm2 column
 * @method Wpreferences findOneByAvailiclarm(int $AvailIclarm) Return the first Wpreferences filtered by the AvailIclarm column
 * @method Wpreferences findOneByAquarium(int $Aquarium) Return the first Wpreferences filtered by the Aquarium column
 * @method Wpreferences findOneByProcessing(int $Processing) Return the first Wpreferences filtered by the Processing column
 * @method Wpreferences findOneByComname(int $Comname) Return the first Wpreferences filtered by the Comname column
 * @method Wpreferences findOneByPictures(int $Pictures) Return the first Wpreferences filtered by the Pictures column
 * @method Wpreferences findOneByTagrecapture(int $Tag/recapture) Return the first Wpreferences filtered by the Tag/recapture column
 * @method Wpreferences findOneByConservation(int $Conservation) Return the first Wpreferences filtered by the Conservation column
 * @method Wpreferences findOneByChecklist(int $Checklist) Return the first Wpreferences filtered by the Checklist column
 * @method Wpreferences findOneByIsbn(string $ISBN) Return the first Wpreferences filtered by the ISBN column
 * @method Wpreferences findOneByAuthoremail(string $AuthorEmail) Return the first Wpreferences filtered by the AuthorEmail column
 * @method Wpreferences findOneByAuthoradress(string $AuthorAdress) Return the first Wpreferences filtered by the AuthorAdress column
 * @method Wpreferences findOneByAuthoradress2(string $AuthorAdress2) Return the first Wpreferences filtered by the AuthorAdress2 column
 * @method Wpreferences findOneByPdffile(string $PdfFile) Return the first Wpreferences filtered by the PdfFile column
 * @method Wpreferences findOneByDp(int $DP) Return the first Wpreferences filtered by the DP column
 * @method Wpreferences findOneByRf(int $RF) Return the first Wpreferences filtered by the RF column
 * @method Wpreferences findOneByRde(int $RDE) Return the first Wpreferences filtered by the RDE column
 * @method Wpreferences findOneByUsed(string $Used) Return the first Wpreferences filtered by the Used column
 * @method Wpreferences findOneByEntered(int $Entered) Return the first Wpreferences filtered by the Entered column
 * @method Wpreferences findOneByDateentered(string $DateEntered) Return the first Wpreferences filtered by the DateEntered column
 * @method Wpreferences findOneByModified(int $Modified) Return the first Wpreferences filtered by the Modified column
 * @method Wpreferences findOneByDatemodified(string $DateModified) Return the first Wpreferences filtered by the DateModified column
 * @method Wpreferences findOneByExpert(int $Expert) Return the first Wpreferences filtered by the Expert column
 * @method Wpreferences findOneByDatechecked(string $DateChecked) Return the first Wpreferences filtered by the DateChecked column
 * @method Wpreferences findOneByBorrower(int $Borrower) Return the first Wpreferences filtered by the Borrower column
 *
 * @method array findByRefno(int $RefNo) Return Wpreferences objects filtered by the RefNo column
 * @method array findByTitle(string $Title) Return Wpreferences objects filtered by the Title column
 * @method array findByTopic(string $Topic) Return Wpreferences objects filtered by the Topic column
 * @method array findBySubtopic(string $SubTopic) Return Wpreferences objects filtered by the SubTopic column
 * @method array findByAuthor(string $Author) Return Wpreferences objects filtered by the Author column
 * @method array findByWp(string $WP) Return Wpreferences objects filtered by the WP column
 * @method array findBySource(string $Source) Return Wpreferences objects filtered by the Source column
 * @method array findByYear(int $Year) Return Wpreferences objects filtered by the Year column
 * @method array findByPaperurl(string $PaperURL) Return Wpreferences objects filtered by the PaperURL column
 * @method array findByIncpub(string $IncPub) Return Wpreferences objects filtered by the IncPub column
 * @method array findByPubstat(string $PubStat) Return Wpreferences objects filtered by the PubStat column
 * @method array findByAnnotation(string $Annotation) Return Wpreferences objects filtered by the Annotation column
 * @method array findByNametype(string $NameType) Return Wpreferences objects filtered by the NameType column
 * @method array findBySourceunique(string $SourceUnique) Return Wpreferences objects filtered by the SourceUnique column
 * @method array findByFirstauthor(string $FirstAuthor) Return Wpreferences objects filtered by the FirstAuthor column
 * @method array findByPagestart(int $PageStart) Return Wpreferences objects filtered by the PageStart column
 * @method array findByPageend(int $PageEnd) Return Wpreferences objects filtered by the PageEnd column
 * @method array findByPagecount(int $PageCount) Return Wpreferences objects filtered by the PageCount column
 * @method array findByLanguage(string $Language) Return Wpreferences objects filtered by the Language column
 * @method array findByComplete(int $Complete) Return Wpreferences objects filtered by the Complete column
 * @method array findByReftype(string $RefType) Return Wpreferences objects filtered by the RefType column
 * @method array findByKeywords(string $Keywords) Return Wpreferences objects filtered by the Keywords column
 * @method array findByOtherkeywords(string $OtherKeywords) Return Wpreferences objects filtered by the OtherKeywords column
 * @method array findByRemarks(string $Remarks) Return Wpreferences objects filtered by the Remarks column
 * @method array findByCrossref1(int $CrossRef1) Return Wpreferences objects filtered by the CrossRef1 column
 * @method array findByCrossref2(int $CrossRef2) Return Wpreferences objects filtered by the CrossRef2 column
 * @method array findByCrossref3(int $CrossRef3) Return Wpreferences objects filtered by the CrossRef3 column
 * @method array findByCrossref4(int $CrossRef4) Return Wpreferences objects filtered by the CrossRef4 column
 * @method array findByCrossref5(int $CrossRef5) Return Wpreferences objects filtered by the CrossRef5 column
 * @method array findByAbstract(string $Abstract) Return Wpreferences objects filtered by the Abstract column
 * @method array findByCitation(int $Citation) Return Wpreferences objects filtered by the Citation column
 * @method array findByTeam(int $Team) Return Wpreferences objects filtered by the Team column
 * @method array findByAvailiclarm2(int $AvailIclarm2) Return Wpreferences objects filtered by the AvailIclarm2 column
 * @method array findByAvailiclarm(int $AvailIclarm) Return Wpreferences objects filtered by the AvailIclarm column
 * @method array findByAquarium(int $Aquarium) Return Wpreferences objects filtered by the Aquarium column
 * @method array findByProcessing(int $Processing) Return Wpreferences objects filtered by the Processing column
 * @method array findByComname(int $Comname) Return Wpreferences objects filtered by the Comname column
 * @method array findByPictures(int $Pictures) Return Wpreferences objects filtered by the Pictures column
 * @method array findByTagrecapture(int $Tag/recapture) Return Wpreferences objects filtered by the Tag/recapture column
 * @method array findByConservation(int $Conservation) Return Wpreferences objects filtered by the Conservation column
 * @method array findByChecklist(int $Checklist) Return Wpreferences objects filtered by the Checklist column
 * @method array findByIsbn(string $ISBN) Return Wpreferences objects filtered by the ISBN column
 * @method array findByAuthoremail(string $AuthorEmail) Return Wpreferences objects filtered by the AuthorEmail column
 * @method array findByAuthoradress(string $AuthorAdress) Return Wpreferences objects filtered by the AuthorAdress column
 * @method array findByAuthoradress2(string $AuthorAdress2) Return Wpreferences objects filtered by the AuthorAdress2 column
 * @method array findByPdffile(string $PdfFile) Return Wpreferences objects filtered by the PdfFile column
 * @method array findByDp(int $DP) Return Wpreferences objects filtered by the DP column
 * @method array findByRf(int $RF) Return Wpreferences objects filtered by the RF column
 * @method array findByRde(int $RDE) Return Wpreferences objects filtered by the RDE column
 * @method array findByUsed(string $Used) Return Wpreferences objects filtered by the Used column
 * @method array findByEntered(int $Entered) Return Wpreferences objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Wpreferences objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Wpreferences objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Wpreferences objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Wpreferences objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Wpreferences objects filtered by the DateChecked column
 * @method array findByBorrower(int $Borrower) Return Wpreferences objects filtered by the Borrower column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseWpreferencesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseWpreferencesQuery object.
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
            $modelName = 'Wpreferences';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new WpreferencesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   WpreferencesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return WpreferencesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof WpreferencesQuery) {
            return $criteria;
        }
        $query = new WpreferencesQuery(null, null, $modelAlias);

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
     * @return   Wpreferences|Wpreferences[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = WpreferencesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(WpreferencesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Wpreferences A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRefno($key, $con = null)
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
     * @return                 Wpreferences A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `RefNo`, `Title`, `Topic`, `SubTopic`, `Author`, `WP`, `Source`, `Year`, `PaperURL`, `IncPub`, `PubStat`, `Annotation`, `NameType`, `SourceUnique`, `FirstAuthor`, `PageStart`, `PageEnd`, `PageCount`, `Language`, `Complete`, `RefType`, `Keywords`, `OtherKeywords`, `Remarks`, `CrossRef1`, `CrossRef2`, `CrossRef3`, `CrossRef4`, `CrossRef5`, `Abstract`, `Citation`, `Team`, `AvailIclarm2`, `AvailIclarm`, `Aquarium`, `Processing`, `Comname`, `Pictures`, `Tag/recapture`, `Conservation`, `Checklist`, `ISBN`, `AuthorEmail`, `AuthorAdress`, `AuthorAdress2`, `PdfFile`, `DP`, `RF`, `RDE`, `Used`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `Borrower` FROM `wpreferences` WHERE `RefNo` = :p0';
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
            $obj = new Wpreferences();
            $obj->hydrate($row);
            WpreferencesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Wpreferences|Wpreferences[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Wpreferences[]|mixed the list of results, formatted by the current formatter
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
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(WpreferencesPeer::REFNO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(WpreferencesPeer::REFNO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the RefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByRefno(1234); // WHERE RefNo = 1234
     * $query->filterByRefno(array(12, 34)); // WHERE RefNo IN (12, 34)
     * $query->filterByRefno(array('min' => 12)); // WHERE RefNo >= 12
     * $query->filterByRefno(array('max' => 12)); // WHERE RefNo <= 12
     * </code>
     *
     * @param     mixed $refno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(WpreferencesPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(WpreferencesPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::REFNO, $refno, $comparison);
    }

    /**
     * Filter the query on the Title column
     *
     * Example usage:
     * <code>
     * $query->filterByTitle('fooValue');   // WHERE Title = 'fooValue'
     * $query->filterByTitle('%fooValue%'); // WHERE Title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $title The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByTitle($title = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($title)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $title)) {
                $title = str_replace('*', '%', $title);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::TITLE, $title, $comparison);
    }

    /**
     * Filter the query on the Topic column
     *
     * Example usage:
     * <code>
     * $query->filterByTopic('fooValue');   // WHERE Topic = 'fooValue'
     * $query->filterByTopic('%fooValue%'); // WHERE Topic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $topic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByTopic($topic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($topic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $topic)) {
                $topic = str_replace('*', '%', $topic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::TOPIC, $topic, $comparison);
    }

    /**
     * Filter the query on the SubTopic column
     *
     * Example usage:
     * <code>
     * $query->filterBySubtopic('fooValue');   // WHERE SubTopic = 'fooValue'
     * $query->filterBySubtopic('%fooValue%'); // WHERE SubTopic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $subtopic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterBySubtopic($subtopic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($subtopic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $subtopic)) {
                $subtopic = str_replace('*', '%', $subtopic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::SUBTOPIC, $subtopic, $comparison);
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
     * @return WpreferencesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(WpreferencesPeer::AUTHOR, $author, $comparison);
    }

    /**
     * Filter the query on the WP column
     *
     * Example usage:
     * <code>
     * $query->filterByWp('fooValue');   // WHERE WP = 'fooValue'
     * $query->filterByWp('%fooValue%'); // WHERE WP LIKE '%fooValue%'
     * </code>
     *
     * @param     string $wp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByWp($wp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($wp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $wp)) {
                $wp = str_replace('*', '%', $wp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::WP, $wp, $comparison);
    }

    /**
     * Filter the query on the Source column
     *
     * Example usage:
     * <code>
     * $query->filterBySource('fooValue');   // WHERE Source = 'fooValue'
     * $query->filterBySource('%fooValue%'); // WHERE Source LIKE '%fooValue%'
     * </code>
     *
     * @param     string $source The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterBySource($source = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($source)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $source)) {
                $source = str_replace('*', '%', $source);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::SOURCE, $source, $comparison);
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
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (is_array($year)) {
            $useMinMax = false;
            if (isset($year['min'])) {
                $this->addUsingAlias(WpreferencesPeer::YEAR, $year['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($year['max'])) {
                $this->addUsingAlias(WpreferencesPeer::YEAR, $year['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::YEAR, $year, $comparison);
    }

    /**
     * Filter the query on the PaperURL column
     *
     * Example usage:
     * <code>
     * $query->filterByPaperurl('fooValue');   // WHERE PaperURL = 'fooValue'
     * $query->filterByPaperurl('%fooValue%'); // WHERE PaperURL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paperurl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByPaperurl($paperurl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paperurl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paperurl)) {
                $paperurl = str_replace('*', '%', $paperurl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::PAPERURL, $paperurl, $comparison);
    }

    /**
     * Filter the query on the IncPub column
     *
     * Example usage:
     * <code>
     * $query->filterByIncpub('fooValue');   // WHERE IncPub = 'fooValue'
     * $query->filterByIncpub('%fooValue%'); // WHERE IncPub LIKE '%fooValue%'
     * </code>
     *
     * @param     string $incpub The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByIncpub($incpub = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($incpub)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $incpub)) {
                $incpub = str_replace('*', '%', $incpub);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::INCPUB, $incpub, $comparison);
    }

    /**
     * Filter the query on the PubStat column
     *
     * Example usage:
     * <code>
     * $query->filterByPubstat('fooValue');   // WHERE PubStat = 'fooValue'
     * $query->filterByPubstat('%fooValue%'); // WHERE PubStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pubstat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByPubstat($pubstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pubstat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pubstat)) {
                $pubstat = str_replace('*', '%', $pubstat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::PUBSTAT, $pubstat, $comparison);
    }

    /**
     * Filter the query on the Annotation column
     *
     * Example usage:
     * <code>
     * $query->filterByAnnotation('fooValue');   // WHERE Annotation = 'fooValue'
     * $query->filterByAnnotation('%fooValue%'); // WHERE Annotation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $annotation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByAnnotation($annotation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($annotation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $annotation)) {
                $annotation = str_replace('*', '%', $annotation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::ANNOTATION, $annotation, $comparison);
    }

    /**
     * Filter the query on the NameType column
     *
     * Example usage:
     * <code>
     * $query->filterByNametype('fooValue');   // WHERE NameType = 'fooValue'
     * $query->filterByNametype('%fooValue%'); // WHERE NameType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nametype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByNametype($nametype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nametype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nametype)) {
                $nametype = str_replace('*', '%', $nametype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::NAMETYPE, $nametype, $comparison);
    }

    /**
     * Filter the query on the SourceUnique column
     *
     * Example usage:
     * <code>
     * $query->filterBySourceunique('fooValue');   // WHERE SourceUnique = 'fooValue'
     * $query->filterBySourceunique('%fooValue%'); // WHERE SourceUnique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sourceunique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterBySourceunique($sourceunique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sourceunique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sourceunique)) {
                $sourceunique = str_replace('*', '%', $sourceunique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::SOURCEUNIQUE, $sourceunique, $comparison);
    }

    /**
     * Filter the query on the FirstAuthor column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstauthor('fooValue');   // WHERE FirstAuthor = 'fooValue'
     * $query->filterByFirstauthor('%fooValue%'); // WHERE FirstAuthor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $firstauthor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByFirstauthor($firstauthor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($firstauthor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $firstauthor)) {
                $firstauthor = str_replace('*', '%', $firstauthor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::FIRSTAUTHOR, $firstauthor, $comparison);
    }

    /**
     * Filter the query on the PageStart column
     *
     * Example usage:
     * <code>
     * $query->filterByPagestart(1234); // WHERE PageStart = 1234
     * $query->filterByPagestart(array(12, 34)); // WHERE PageStart IN (12, 34)
     * $query->filterByPagestart(array('min' => 12)); // WHERE PageStart >= 12
     * $query->filterByPagestart(array('max' => 12)); // WHERE PageStart <= 12
     * </code>
     *
     * @param     mixed $pagestart The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByPagestart($pagestart = null, $comparison = null)
    {
        if (is_array($pagestart)) {
            $useMinMax = false;
            if (isset($pagestart['min'])) {
                $this->addUsingAlias(WpreferencesPeer::PAGESTART, $pagestart['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pagestart['max'])) {
                $this->addUsingAlias(WpreferencesPeer::PAGESTART, $pagestart['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::PAGESTART, $pagestart, $comparison);
    }

    /**
     * Filter the query on the PageEnd column
     *
     * Example usage:
     * <code>
     * $query->filterByPageend(1234); // WHERE PageEnd = 1234
     * $query->filterByPageend(array(12, 34)); // WHERE PageEnd IN (12, 34)
     * $query->filterByPageend(array('min' => 12)); // WHERE PageEnd >= 12
     * $query->filterByPageend(array('max' => 12)); // WHERE PageEnd <= 12
     * </code>
     *
     * @param     mixed $pageend The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByPageend($pageend = null, $comparison = null)
    {
        if (is_array($pageend)) {
            $useMinMax = false;
            if (isset($pageend['min'])) {
                $this->addUsingAlias(WpreferencesPeer::PAGEEND, $pageend['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pageend['max'])) {
                $this->addUsingAlias(WpreferencesPeer::PAGEEND, $pageend['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::PAGEEND, $pageend, $comparison);
    }

    /**
     * Filter the query on the PageCount column
     *
     * Example usage:
     * <code>
     * $query->filterByPagecount(1234); // WHERE PageCount = 1234
     * $query->filterByPagecount(array(12, 34)); // WHERE PageCount IN (12, 34)
     * $query->filterByPagecount(array('min' => 12)); // WHERE PageCount >= 12
     * $query->filterByPagecount(array('max' => 12)); // WHERE PageCount <= 12
     * </code>
     *
     * @param     mixed $pagecount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByPagecount($pagecount = null, $comparison = null)
    {
        if (is_array($pagecount)) {
            $useMinMax = false;
            if (isset($pagecount['min'])) {
                $this->addUsingAlias(WpreferencesPeer::PAGECOUNT, $pagecount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pagecount['max'])) {
                $this->addUsingAlias(WpreferencesPeer::PAGECOUNT, $pagecount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::PAGECOUNT, $pagecount, $comparison);
    }

    /**
     * Filter the query on the Language column
     *
     * Example usage:
     * <code>
     * $query->filterByLanguage('fooValue');   // WHERE Language = 'fooValue'
     * $query->filterByLanguage('%fooValue%'); // WHERE Language LIKE '%fooValue%'
     * </code>
     *
     * @param     string $language The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByLanguage($language = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($language)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $language)) {
                $language = str_replace('*', '%', $language);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::LANGUAGE, $language, $comparison);
    }

    /**
     * Filter the query on the Complete column
     *
     * Example usage:
     * <code>
     * $query->filterByComplete(1234); // WHERE Complete = 1234
     * $query->filterByComplete(array(12, 34)); // WHERE Complete IN (12, 34)
     * $query->filterByComplete(array('min' => 12)); // WHERE Complete >= 12
     * $query->filterByComplete(array('max' => 12)); // WHERE Complete <= 12
     * </code>
     *
     * @param     mixed $complete The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByComplete($complete = null, $comparison = null)
    {
        if (is_array($complete)) {
            $useMinMax = false;
            if (isset($complete['min'])) {
                $this->addUsingAlias(WpreferencesPeer::COMPLETE, $complete['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($complete['max'])) {
                $this->addUsingAlias(WpreferencesPeer::COMPLETE, $complete['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::COMPLETE, $complete, $comparison);
    }

    /**
     * Filter the query on the RefType column
     *
     * Example usage:
     * <code>
     * $query->filterByReftype('fooValue');   // WHERE RefType = 'fooValue'
     * $query->filterByReftype('%fooValue%'); // WHERE RefType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reftype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByReftype($reftype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reftype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reftype)) {
                $reftype = str_replace('*', '%', $reftype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::REFTYPE, $reftype, $comparison);
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
     * @return WpreferencesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(WpreferencesPeer::KEYWORDS, $keywords, $comparison);
    }

    /**
     * Filter the query on the OtherKeywords column
     *
     * Example usage:
     * <code>
     * $query->filterByOtherkeywords('fooValue');   // WHERE OtherKeywords = 'fooValue'
     * $query->filterByOtherkeywords('%fooValue%'); // WHERE OtherKeywords LIKE '%fooValue%'
     * </code>
     *
     * @param     string $otherkeywords The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByOtherkeywords($otherkeywords = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($otherkeywords)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $otherkeywords)) {
                $otherkeywords = str_replace('*', '%', $otherkeywords);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::OTHERKEYWORDS, $otherkeywords, $comparison);
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
     * @return WpreferencesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(WpreferencesPeer::REMARKS, $remarks, $comparison);
    }

    /**
     * Filter the query on the CrossRef1 column
     *
     * Example usage:
     * <code>
     * $query->filterByCrossref1(1234); // WHERE CrossRef1 = 1234
     * $query->filterByCrossref1(array(12, 34)); // WHERE CrossRef1 IN (12, 34)
     * $query->filterByCrossref1(array('min' => 12)); // WHERE CrossRef1 >= 12
     * $query->filterByCrossref1(array('max' => 12)); // WHERE CrossRef1 <= 12
     * </code>
     *
     * @param     mixed $crossref1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByCrossref1($crossref1 = null, $comparison = null)
    {
        if (is_array($crossref1)) {
            $useMinMax = false;
            if (isset($crossref1['min'])) {
                $this->addUsingAlias(WpreferencesPeer::CROSSREF1, $crossref1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($crossref1['max'])) {
                $this->addUsingAlias(WpreferencesPeer::CROSSREF1, $crossref1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::CROSSREF1, $crossref1, $comparison);
    }

    /**
     * Filter the query on the CrossRef2 column
     *
     * Example usage:
     * <code>
     * $query->filterByCrossref2(1234); // WHERE CrossRef2 = 1234
     * $query->filterByCrossref2(array(12, 34)); // WHERE CrossRef2 IN (12, 34)
     * $query->filterByCrossref2(array('min' => 12)); // WHERE CrossRef2 >= 12
     * $query->filterByCrossref2(array('max' => 12)); // WHERE CrossRef2 <= 12
     * </code>
     *
     * @param     mixed $crossref2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByCrossref2($crossref2 = null, $comparison = null)
    {
        if (is_array($crossref2)) {
            $useMinMax = false;
            if (isset($crossref2['min'])) {
                $this->addUsingAlias(WpreferencesPeer::CROSSREF2, $crossref2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($crossref2['max'])) {
                $this->addUsingAlias(WpreferencesPeer::CROSSREF2, $crossref2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::CROSSREF2, $crossref2, $comparison);
    }

    /**
     * Filter the query on the CrossRef3 column
     *
     * Example usage:
     * <code>
     * $query->filterByCrossref3(1234); // WHERE CrossRef3 = 1234
     * $query->filterByCrossref3(array(12, 34)); // WHERE CrossRef3 IN (12, 34)
     * $query->filterByCrossref3(array('min' => 12)); // WHERE CrossRef3 >= 12
     * $query->filterByCrossref3(array('max' => 12)); // WHERE CrossRef3 <= 12
     * </code>
     *
     * @param     mixed $crossref3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByCrossref3($crossref3 = null, $comparison = null)
    {
        if (is_array($crossref3)) {
            $useMinMax = false;
            if (isset($crossref3['min'])) {
                $this->addUsingAlias(WpreferencesPeer::CROSSREF3, $crossref3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($crossref3['max'])) {
                $this->addUsingAlias(WpreferencesPeer::CROSSREF3, $crossref3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::CROSSREF3, $crossref3, $comparison);
    }

    /**
     * Filter the query on the CrossRef4 column
     *
     * Example usage:
     * <code>
     * $query->filterByCrossref4(1234); // WHERE CrossRef4 = 1234
     * $query->filterByCrossref4(array(12, 34)); // WHERE CrossRef4 IN (12, 34)
     * $query->filterByCrossref4(array('min' => 12)); // WHERE CrossRef4 >= 12
     * $query->filterByCrossref4(array('max' => 12)); // WHERE CrossRef4 <= 12
     * </code>
     *
     * @param     mixed $crossref4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByCrossref4($crossref4 = null, $comparison = null)
    {
        if (is_array($crossref4)) {
            $useMinMax = false;
            if (isset($crossref4['min'])) {
                $this->addUsingAlias(WpreferencesPeer::CROSSREF4, $crossref4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($crossref4['max'])) {
                $this->addUsingAlias(WpreferencesPeer::CROSSREF4, $crossref4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::CROSSREF4, $crossref4, $comparison);
    }

    /**
     * Filter the query on the CrossRef5 column
     *
     * Example usage:
     * <code>
     * $query->filterByCrossref5(1234); // WHERE CrossRef5 = 1234
     * $query->filterByCrossref5(array(12, 34)); // WHERE CrossRef5 IN (12, 34)
     * $query->filterByCrossref5(array('min' => 12)); // WHERE CrossRef5 >= 12
     * $query->filterByCrossref5(array('max' => 12)); // WHERE CrossRef5 <= 12
     * </code>
     *
     * @param     mixed $crossref5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByCrossref5($crossref5 = null, $comparison = null)
    {
        if (is_array($crossref5)) {
            $useMinMax = false;
            if (isset($crossref5['min'])) {
                $this->addUsingAlias(WpreferencesPeer::CROSSREF5, $crossref5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($crossref5['max'])) {
                $this->addUsingAlias(WpreferencesPeer::CROSSREF5, $crossref5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::CROSSREF5, $crossref5, $comparison);
    }

    /**
     * Filter the query on the Abstract column
     *
     * Example usage:
     * <code>
     * $query->filterByAbstract('fooValue');   // WHERE Abstract = 'fooValue'
     * $query->filterByAbstract('%fooValue%'); // WHERE Abstract LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abstract The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByAbstract($abstract = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abstract)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abstract)) {
                $abstract = str_replace('*', '%', $abstract);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::ABZTRACT, $abstract, $comparison);
    }

    /**
     * Filter the query on the Citation column
     *
     * Example usage:
     * <code>
     * $query->filterByCitation(1234); // WHERE Citation = 1234
     * $query->filterByCitation(array(12, 34)); // WHERE Citation IN (12, 34)
     * $query->filterByCitation(array('min' => 12)); // WHERE Citation >= 12
     * $query->filterByCitation(array('max' => 12)); // WHERE Citation <= 12
     * </code>
     *
     * @param     mixed $citation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByCitation($citation = null, $comparison = null)
    {
        if (is_array($citation)) {
            $useMinMax = false;
            if (isset($citation['min'])) {
                $this->addUsingAlias(WpreferencesPeer::CITATION, $citation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($citation['max'])) {
                $this->addUsingAlias(WpreferencesPeer::CITATION, $citation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::CITATION, $citation, $comparison);
    }

    /**
     * Filter the query on the Team column
     *
     * Example usage:
     * <code>
     * $query->filterByTeam(1234); // WHERE Team = 1234
     * $query->filterByTeam(array(12, 34)); // WHERE Team IN (12, 34)
     * $query->filterByTeam(array('min' => 12)); // WHERE Team >= 12
     * $query->filterByTeam(array('max' => 12)); // WHERE Team <= 12
     * </code>
     *
     * @param     mixed $team The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByTeam($team = null, $comparison = null)
    {
        if (is_array($team)) {
            $useMinMax = false;
            if (isset($team['min'])) {
                $this->addUsingAlias(WpreferencesPeer::TEAM, $team['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($team['max'])) {
                $this->addUsingAlias(WpreferencesPeer::TEAM, $team['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::TEAM, $team, $comparison);
    }

    /**
     * Filter the query on the AvailIclarm2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAvailiclarm2(1234); // WHERE AvailIclarm2 = 1234
     * $query->filterByAvailiclarm2(array(12, 34)); // WHERE AvailIclarm2 IN (12, 34)
     * $query->filterByAvailiclarm2(array('min' => 12)); // WHERE AvailIclarm2 >= 12
     * $query->filterByAvailiclarm2(array('max' => 12)); // WHERE AvailIclarm2 <= 12
     * </code>
     *
     * @param     mixed $availiclarm2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByAvailiclarm2($availiclarm2 = null, $comparison = null)
    {
        if (is_array($availiclarm2)) {
            $useMinMax = false;
            if (isset($availiclarm2['min'])) {
                $this->addUsingAlias(WpreferencesPeer::AVAILICLARM2, $availiclarm2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($availiclarm2['max'])) {
                $this->addUsingAlias(WpreferencesPeer::AVAILICLARM2, $availiclarm2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::AVAILICLARM2, $availiclarm2, $comparison);
    }

    /**
     * Filter the query on the AvailIclarm column
     *
     * Example usage:
     * <code>
     * $query->filterByAvailiclarm(1234); // WHERE AvailIclarm = 1234
     * $query->filterByAvailiclarm(array(12, 34)); // WHERE AvailIclarm IN (12, 34)
     * $query->filterByAvailiclarm(array('min' => 12)); // WHERE AvailIclarm >= 12
     * $query->filterByAvailiclarm(array('max' => 12)); // WHERE AvailIclarm <= 12
     * </code>
     *
     * @param     mixed $availiclarm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByAvailiclarm($availiclarm = null, $comparison = null)
    {
        if (is_array($availiclarm)) {
            $useMinMax = false;
            if (isset($availiclarm['min'])) {
                $this->addUsingAlias(WpreferencesPeer::AVAILICLARM, $availiclarm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($availiclarm['max'])) {
                $this->addUsingAlias(WpreferencesPeer::AVAILICLARM, $availiclarm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::AVAILICLARM, $availiclarm, $comparison);
    }

    /**
     * Filter the query on the Aquarium column
     *
     * Example usage:
     * <code>
     * $query->filterByAquarium(1234); // WHERE Aquarium = 1234
     * $query->filterByAquarium(array(12, 34)); // WHERE Aquarium IN (12, 34)
     * $query->filterByAquarium(array('min' => 12)); // WHERE Aquarium >= 12
     * $query->filterByAquarium(array('max' => 12)); // WHERE Aquarium <= 12
     * </code>
     *
     * @param     mixed $aquarium The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByAquarium($aquarium = null, $comparison = null)
    {
        if (is_array($aquarium)) {
            $useMinMax = false;
            if (isset($aquarium['min'])) {
                $this->addUsingAlias(WpreferencesPeer::AQUARIUM, $aquarium['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aquarium['max'])) {
                $this->addUsingAlias(WpreferencesPeer::AQUARIUM, $aquarium['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::AQUARIUM, $aquarium, $comparison);
    }

    /**
     * Filter the query on the Processing column
     *
     * Example usage:
     * <code>
     * $query->filterByProcessing(1234); // WHERE Processing = 1234
     * $query->filterByProcessing(array(12, 34)); // WHERE Processing IN (12, 34)
     * $query->filterByProcessing(array('min' => 12)); // WHERE Processing >= 12
     * $query->filterByProcessing(array('max' => 12)); // WHERE Processing <= 12
     * </code>
     *
     * @param     mixed $processing The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByProcessing($processing = null, $comparison = null)
    {
        if (is_array($processing)) {
            $useMinMax = false;
            if (isset($processing['min'])) {
                $this->addUsingAlias(WpreferencesPeer::PROCESSING, $processing['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($processing['max'])) {
                $this->addUsingAlias(WpreferencesPeer::PROCESSING, $processing['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::PROCESSING, $processing, $comparison);
    }

    /**
     * Filter the query on the Comname column
     *
     * Example usage:
     * <code>
     * $query->filterByComname(1234); // WHERE Comname = 1234
     * $query->filterByComname(array(12, 34)); // WHERE Comname IN (12, 34)
     * $query->filterByComname(array('min' => 12)); // WHERE Comname >= 12
     * $query->filterByComname(array('max' => 12)); // WHERE Comname <= 12
     * </code>
     *
     * @param     mixed $comname The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByComname($comname = null, $comparison = null)
    {
        if (is_array($comname)) {
            $useMinMax = false;
            if (isset($comname['min'])) {
                $this->addUsingAlias(WpreferencesPeer::COMNAME, $comname['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($comname['max'])) {
                $this->addUsingAlias(WpreferencesPeer::COMNAME, $comname['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::COMNAME, $comname, $comparison);
    }

    /**
     * Filter the query on the Pictures column
     *
     * Example usage:
     * <code>
     * $query->filterByPictures(1234); // WHERE Pictures = 1234
     * $query->filterByPictures(array(12, 34)); // WHERE Pictures IN (12, 34)
     * $query->filterByPictures(array('min' => 12)); // WHERE Pictures >= 12
     * $query->filterByPictures(array('max' => 12)); // WHERE Pictures <= 12
     * </code>
     *
     * @param     mixed $pictures The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByPictures($pictures = null, $comparison = null)
    {
        if (is_array($pictures)) {
            $useMinMax = false;
            if (isset($pictures['min'])) {
                $this->addUsingAlias(WpreferencesPeer::PICTURES, $pictures['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pictures['max'])) {
                $this->addUsingAlias(WpreferencesPeer::PICTURES, $pictures['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::PICTURES, $pictures, $comparison);
    }

    /**
     * Filter the query on the Tag/recapture column
     *
     * Example usage:
     * <code>
     * $query->filterByTagrecapture(1234); // WHERE Tag/recapture = 1234
     * $query->filterByTagrecapture(array(12, 34)); // WHERE Tag/recapture IN (12, 34)
     * $query->filterByTagrecapture(array('min' => 12)); // WHERE Tag/recapture >= 12
     * $query->filterByTagrecapture(array('max' => 12)); // WHERE Tag/recapture <= 12
     * </code>
     *
     * @param     mixed $tagrecapture The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByTagrecapture($tagrecapture = null, $comparison = null)
    {
        if (is_array($tagrecapture)) {
            $useMinMax = false;
            if (isset($tagrecapture['min'])) {
                $this->addUsingAlias(WpreferencesPeer::TAG/RECAPTURE, $tagrecapture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tagrecapture['max'])) {
                $this->addUsingAlias(WpreferencesPeer::TAG/RECAPTURE, $tagrecapture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::TAG/RECAPTURE, $tagrecapture, $comparison);
    }

    /**
     * Filter the query on the Conservation column
     *
     * Example usage:
     * <code>
     * $query->filterByConservation(1234); // WHERE Conservation = 1234
     * $query->filterByConservation(array(12, 34)); // WHERE Conservation IN (12, 34)
     * $query->filterByConservation(array('min' => 12)); // WHERE Conservation >= 12
     * $query->filterByConservation(array('max' => 12)); // WHERE Conservation <= 12
     * </code>
     *
     * @param     mixed $conservation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByConservation($conservation = null, $comparison = null)
    {
        if (is_array($conservation)) {
            $useMinMax = false;
            if (isset($conservation['min'])) {
                $this->addUsingAlias(WpreferencesPeer::CONSERVATION, $conservation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($conservation['max'])) {
                $this->addUsingAlias(WpreferencesPeer::CONSERVATION, $conservation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::CONSERVATION, $conservation, $comparison);
    }

    /**
     * Filter the query on the Checklist column
     *
     * Example usage:
     * <code>
     * $query->filterByChecklist(1234); // WHERE Checklist = 1234
     * $query->filterByChecklist(array(12, 34)); // WHERE Checklist IN (12, 34)
     * $query->filterByChecklist(array('min' => 12)); // WHERE Checklist >= 12
     * $query->filterByChecklist(array('max' => 12)); // WHERE Checklist <= 12
     * </code>
     *
     * @param     mixed $checklist The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByChecklist($checklist = null, $comparison = null)
    {
        if (is_array($checklist)) {
            $useMinMax = false;
            if (isset($checklist['min'])) {
                $this->addUsingAlias(WpreferencesPeer::CHECKLIST, $checklist['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($checklist['max'])) {
                $this->addUsingAlias(WpreferencesPeer::CHECKLIST, $checklist['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::CHECKLIST, $checklist, $comparison);
    }

    /**
     * Filter the query on the ISBN column
     *
     * Example usage:
     * <code>
     * $query->filterByIsbn('fooValue');   // WHERE ISBN = 'fooValue'
     * $query->filterByIsbn('%fooValue%'); // WHERE ISBN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $isbn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByIsbn($isbn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($isbn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $isbn)) {
                $isbn = str_replace('*', '%', $isbn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::ISBN, $isbn, $comparison);
    }

    /**
     * Filter the query on the AuthorEmail column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthoremail('fooValue');   // WHERE AuthorEmail = 'fooValue'
     * $query->filterByAuthoremail('%fooValue%'); // WHERE AuthorEmail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authoremail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByAuthoremail($authoremail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authoremail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authoremail)) {
                $authoremail = str_replace('*', '%', $authoremail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::AUTHOREMAIL, $authoremail, $comparison);
    }

    /**
     * Filter the query on the AuthorAdress column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthoradress('fooValue');   // WHERE AuthorAdress = 'fooValue'
     * $query->filterByAuthoradress('%fooValue%'); // WHERE AuthorAdress LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authoradress The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByAuthoradress($authoradress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authoradress)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authoradress)) {
                $authoradress = str_replace('*', '%', $authoradress);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::AUTHORADRESS, $authoradress, $comparison);
    }

    /**
     * Filter the query on the AuthorAdress2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthoradress2('fooValue');   // WHERE AuthorAdress2 = 'fooValue'
     * $query->filterByAuthoradress2('%fooValue%'); // WHERE AuthorAdress2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authoradress2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByAuthoradress2($authoradress2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authoradress2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authoradress2)) {
                $authoradress2 = str_replace('*', '%', $authoradress2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::AUTHORADRESS2, $authoradress2, $comparison);
    }

    /**
     * Filter the query on the PdfFile column
     *
     * Example usage:
     * <code>
     * $query->filterByPdffile('fooValue');   // WHERE PdfFile = 'fooValue'
     * $query->filterByPdffile('%fooValue%'); // WHERE PdfFile LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pdffile The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByPdffile($pdffile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pdffile)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pdffile)) {
                $pdffile = str_replace('*', '%', $pdffile);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::PDFFILE, $pdffile, $comparison);
    }

    /**
     * Filter the query on the DP column
     *
     * Example usage:
     * <code>
     * $query->filterByDp(1234); // WHERE DP = 1234
     * $query->filterByDp(array(12, 34)); // WHERE DP IN (12, 34)
     * $query->filterByDp(array('min' => 12)); // WHERE DP >= 12
     * $query->filterByDp(array('max' => 12)); // WHERE DP <= 12
     * </code>
     *
     * @param     mixed $dp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByDp($dp = null, $comparison = null)
    {
        if (is_array($dp)) {
            $useMinMax = false;
            if (isset($dp['min'])) {
                $this->addUsingAlias(WpreferencesPeer::DP, $dp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dp['max'])) {
                $this->addUsingAlias(WpreferencesPeer::DP, $dp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::DP, $dp, $comparison);
    }

    /**
     * Filter the query on the RF column
     *
     * Example usage:
     * <code>
     * $query->filterByRf(1234); // WHERE RF = 1234
     * $query->filterByRf(array(12, 34)); // WHERE RF IN (12, 34)
     * $query->filterByRf(array('min' => 12)); // WHERE RF >= 12
     * $query->filterByRf(array('max' => 12)); // WHERE RF <= 12
     * </code>
     *
     * @param     mixed $rf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByRf($rf = null, $comparison = null)
    {
        if (is_array($rf)) {
            $useMinMax = false;
            if (isset($rf['min'])) {
                $this->addUsingAlias(WpreferencesPeer::RF, $rf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rf['max'])) {
                $this->addUsingAlias(WpreferencesPeer::RF, $rf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::RF, $rf, $comparison);
    }

    /**
     * Filter the query on the RDE column
     *
     * Example usage:
     * <code>
     * $query->filterByRde(1234); // WHERE RDE = 1234
     * $query->filterByRde(array(12, 34)); // WHERE RDE IN (12, 34)
     * $query->filterByRde(array('min' => 12)); // WHERE RDE >= 12
     * $query->filterByRde(array('max' => 12)); // WHERE RDE <= 12
     * </code>
     *
     * @param     mixed $rde The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByRde($rde = null, $comparison = null)
    {
        if (is_array($rde)) {
            $useMinMax = false;
            if (isset($rde['min'])) {
                $this->addUsingAlias(WpreferencesPeer::RDE, $rde['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rde['max'])) {
                $this->addUsingAlias(WpreferencesPeer::RDE, $rde['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::RDE, $rde, $comparison);
    }

    /**
     * Filter the query on the Used column
     *
     * Example usage:
     * <code>
     * $query->filterByUsed('fooValue');   // WHERE Used = 'fooValue'
     * $query->filterByUsed('%fooValue%'); // WHERE Used LIKE '%fooValue%'
     * </code>
     *
     * @param     string $used The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByUsed($used = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($used)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $used)) {
                $used = str_replace('*', '%', $used);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::USED, $used, $comparison);
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
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(WpreferencesPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(WpreferencesPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::ENTERED, $entered, $comparison);
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
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(WpreferencesPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(WpreferencesPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(WpreferencesPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(WpreferencesPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::MODIFIED, $modified, $comparison);
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
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(WpreferencesPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(WpreferencesPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(WpreferencesPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(WpreferencesPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::EXPERT, $expert, $comparison);
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
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(WpreferencesPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(WpreferencesPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the Borrower column
     *
     * Example usage:
     * <code>
     * $query->filterByBorrower(1234); // WHERE Borrower = 1234
     * $query->filterByBorrower(array(12, 34)); // WHERE Borrower IN (12, 34)
     * $query->filterByBorrower(array('min' => 12)); // WHERE Borrower >= 12
     * $query->filterByBorrower(array('max' => 12)); // WHERE Borrower <= 12
     * </code>
     *
     * @param     mixed $borrower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function filterByBorrower($borrower = null, $comparison = null)
    {
        if (is_array($borrower)) {
            $useMinMax = false;
            if (isset($borrower['min'])) {
                $this->addUsingAlias(WpreferencesPeer::BORROWER, $borrower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($borrower['max'])) {
                $this->addUsingAlias(WpreferencesPeer::BORROWER, $borrower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpreferencesPeer::BORROWER, $borrower, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Wpreferences $wpreferences Object to remove from the list of results
     *
     * @return WpreferencesQuery The current query, for fluid interface
     */
    public function prune($wpreferences = null)
    {
        if ($wpreferences) {
            $this->addUsingAlias(WpreferencesPeer::REFNO, $wpreferences->getRefno(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
