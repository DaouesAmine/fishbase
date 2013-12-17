<?php


/**
 * Base static class for performing query and update operations on the 'wpreferences' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseWpreferencesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'wpreferences';

    /** the related Propel class for this table */
    const OM_CLASS = 'Wpreferences';

    /** the related TableMap class for this table */
    const TM_CLASS = 'WpreferencesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 57;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 57;

    /** the column name for the RefNo field */
    const REFNO = 'wpreferences.RefNo';

    /** the column name for the Title field */
    const TITLE = 'wpreferences.Title';

    /** the column name for the Topic field */
    const TOPIC = 'wpreferences.Topic';

    /** the column name for the SubTopic field */
    const SUBTOPIC = 'wpreferences.SubTopic';

    /** the column name for the Author field */
    const AUTHOR = 'wpreferences.Author';

    /** the column name for the WP field */
    const WP = 'wpreferences.WP';

    /** the column name for the Source field */
    const SOURCE = 'wpreferences.Source';

    /** the column name for the Year field */
    const YEAR = 'wpreferences.Year';

    /** the column name for the PaperURL field */
    const PAPERURL = 'wpreferences.PaperURL';

    /** the column name for the IncPub field */
    const INCPUB = 'wpreferences.IncPub';

    /** the column name for the PubStat field */
    const PUBSTAT = 'wpreferences.PubStat';

    /** the column name for the Annotation field */
    const ANNOTATION = 'wpreferences.Annotation';

    /** the column name for the NameType field */
    const NAMETYPE = 'wpreferences.NameType';

    /** the column name for the SourceUnique field */
    const SOURCEUNIQUE = 'wpreferences.SourceUnique';

    /** the column name for the FirstAuthor field */
    const FIRSTAUTHOR = 'wpreferences.FirstAuthor';

    /** the column name for the PageStart field */
    const PAGESTART = 'wpreferences.PageStart';

    /** the column name for the PageEnd field */
    const PAGEEND = 'wpreferences.PageEnd';

    /** the column name for the PageCount field */
    const PAGECOUNT = 'wpreferences.PageCount';

    /** the column name for the Language field */
    const LANGUAGE = 'wpreferences.Language';

    /** the column name for the Complete field */
    const COMPLETE = 'wpreferences.Complete';

    /** the column name for the RefType field */
    const REFTYPE = 'wpreferences.RefType';

    /** the column name for the Keywords field */
    const KEYWORDS = 'wpreferences.Keywords';

    /** the column name for the OtherKeywords field */
    const OTHERKEYWORDS = 'wpreferences.OtherKeywords';

    /** the column name for the Remarks field */
    const REMARKS = 'wpreferences.Remarks';

    /** the column name for the CrossRef1 field */
    const CROSSREF1 = 'wpreferences.CrossRef1';

    /** the column name for the CrossRef2 field */
    const CROSSREF2 = 'wpreferences.CrossRef2';

    /** the column name for the CrossRef3 field */
    const CROSSREF3 = 'wpreferences.CrossRef3';

    /** the column name for the CrossRef4 field */
    const CROSSREF4 = 'wpreferences.CrossRef4';

    /** the column name for the CrossRef5 field */
    const CROSSREF5 = 'wpreferences.CrossRef5';

    /** the column name for the Abstract field */
    const ABZTRACT = 'wpreferences.Abstract';

    /** the column name for the Citation field */
    const CITATION = 'wpreferences.Citation';

    /** the column name for the Team field */
    const TEAM = 'wpreferences.Team';

    /** the column name for the AvailIclarm2 field */
    const AVAILICLARM2 = 'wpreferences.AvailIclarm2';

    /** the column name for the AvailIclarm field */
    const AVAILICLARM = 'wpreferences.AvailIclarm';

    /** the column name for the Aquarium field */
    const AQUARIUM = 'wpreferences.Aquarium';

    /** the column name for the Processing field */
    const PROCESSING = 'wpreferences.Processing';

    /** the column name for the Comname field */
    const COMNAME = 'wpreferences.Comname';

    /** the column name for the Pictures field */
    const PICTURES = 'wpreferences.Pictures';

    /** the column name for the Tag/recapture field */
    const TAG/RECAPTURE = 'wpreferences.Tag/recapture';

    /** the column name for the Conservation field */
    const CONSERVATION = 'wpreferences.Conservation';

    /** the column name for the Checklist field */
    const CHECKLIST = 'wpreferences.Checklist';

    /** the column name for the ISBN field */
    const ISBN = 'wpreferences.ISBN';

    /** the column name for the AuthorEmail field */
    const AUTHOREMAIL = 'wpreferences.AuthorEmail';

    /** the column name for the AuthorAdress field */
    const AUTHORADRESS = 'wpreferences.AuthorAdress';

    /** the column name for the AuthorAdress2 field */
    const AUTHORADRESS2 = 'wpreferences.AuthorAdress2';

    /** the column name for the PdfFile field */
    const PDFFILE = 'wpreferences.PdfFile';

    /** the column name for the DP field */
    const DP = 'wpreferences.DP';

    /** the column name for the RF field */
    const RF = 'wpreferences.RF';

    /** the column name for the RDE field */
    const RDE = 'wpreferences.RDE';

    /** the column name for the Used field */
    const USED = 'wpreferences.Used';

    /** the column name for the Entered field */
    const ENTERED = 'wpreferences.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'wpreferences.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'wpreferences.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'wpreferences.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'wpreferences.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'wpreferences.DateChecked';

    /** the column name for the Borrower field */
    const BORROWER = 'wpreferences.Borrower';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Wpreferences objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Wpreferences[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. WpreferencesPeer::$fieldNames[WpreferencesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Refno', 'Title', 'Topic', 'Subtopic', 'Author', 'Wp', 'Source', 'Year', 'Paperurl', 'Incpub', 'Pubstat', 'Annotation', 'Nametype', 'Sourceunique', 'Firstauthor', 'Pagestart', 'Pageend', 'Pagecount', 'Language', 'Complete', 'Reftype', 'Keywords', 'Otherkeywords', 'Remarks', 'Crossref1', 'Crossref2', 'Crossref3', 'Crossref4', 'Crossref5', 'Abstract', 'Citation', 'Team', 'Availiclarm2', 'Availiclarm', 'Aquarium', 'Processing', 'Comname', 'Pictures', 'Tagrecapture', 'Conservation', 'Checklist', 'Isbn', 'Authoremail', 'Authoradress', 'Authoradress2', 'Pdffile', 'Dp', 'Rf', 'Rde', 'Used', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Borrower', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('refno', 'title', 'topic', 'subtopic', 'author', 'wp', 'source', 'year', 'paperurl', 'incpub', 'pubstat', 'annotation', 'nametype', 'sourceunique', 'firstauthor', 'pagestart', 'pageend', 'pagecount', 'language', 'complete', 'reftype', 'keywords', 'otherkeywords', 'remarks', 'crossref1', 'crossref2', 'crossref3', 'crossref4', 'crossref5', 'abstract', 'citation', 'team', 'availiclarm2', 'availiclarm', 'aquarium', 'processing', 'comname', 'pictures', 'tagrecapture', 'conservation', 'checklist', 'isbn', 'authoremail', 'authoradress', 'authoradress2', 'pdffile', 'dp', 'rf', 'rde', 'used', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'borrower', ),
        BasePeer::TYPE_COLNAME => array (WpreferencesPeer::REFNO, WpreferencesPeer::TITLE, WpreferencesPeer::TOPIC, WpreferencesPeer::SUBTOPIC, WpreferencesPeer::AUTHOR, WpreferencesPeer::WP, WpreferencesPeer::SOURCE, WpreferencesPeer::YEAR, WpreferencesPeer::PAPERURL, WpreferencesPeer::INCPUB, WpreferencesPeer::PUBSTAT, WpreferencesPeer::ANNOTATION, WpreferencesPeer::NAMETYPE, WpreferencesPeer::SOURCEUNIQUE, WpreferencesPeer::FIRSTAUTHOR, WpreferencesPeer::PAGESTART, WpreferencesPeer::PAGEEND, WpreferencesPeer::PAGECOUNT, WpreferencesPeer::LANGUAGE, WpreferencesPeer::COMPLETE, WpreferencesPeer::REFTYPE, WpreferencesPeer::KEYWORDS, WpreferencesPeer::OTHERKEYWORDS, WpreferencesPeer::REMARKS, WpreferencesPeer::CROSSREF1, WpreferencesPeer::CROSSREF2, WpreferencesPeer::CROSSREF3, WpreferencesPeer::CROSSREF4, WpreferencesPeer::CROSSREF5, WpreferencesPeer::ABZTRACT, WpreferencesPeer::CITATION, WpreferencesPeer::TEAM, WpreferencesPeer::AVAILICLARM2, WpreferencesPeer::AVAILICLARM, WpreferencesPeer::AQUARIUM, WpreferencesPeer::PROCESSING, WpreferencesPeer::COMNAME, WpreferencesPeer::PICTURES, WpreferencesPeer::TAG/RECAPTURE, WpreferencesPeer::CONSERVATION, WpreferencesPeer::CHECKLIST, WpreferencesPeer::ISBN, WpreferencesPeer::AUTHOREMAIL, WpreferencesPeer::AUTHORADRESS, WpreferencesPeer::AUTHORADRESS2, WpreferencesPeer::PDFFILE, WpreferencesPeer::DP, WpreferencesPeer::RF, WpreferencesPeer::RDE, WpreferencesPeer::USED, WpreferencesPeer::ENTERED, WpreferencesPeer::DATEENTERED, WpreferencesPeer::MODIFIED, WpreferencesPeer::DATEMODIFIED, WpreferencesPeer::EXPERT, WpreferencesPeer::DATECHECKED, WpreferencesPeer::BORROWER, ),
        BasePeer::TYPE_RAW_COLNAME => array ('REFNO', 'TITLE', 'TOPIC', 'SUBTOPIC', 'AUTHOR', 'WP', 'SOURCE', 'YEAR', 'PAPERURL', 'INCPUB', 'PUBSTAT', 'ANNOTATION', 'NAMETYPE', 'SOURCEUNIQUE', 'FIRSTAUTHOR', 'PAGESTART', 'PAGEEND', 'PAGECOUNT', 'LANGUAGE', 'COMPLETE', 'REFTYPE', 'KEYWORDS', 'OTHERKEYWORDS', 'REMARKS', 'CROSSREF1', 'CROSSREF2', 'CROSSREF3', 'CROSSREF4', 'CROSSREF5', 'ABZTRACT', 'CITATION', 'TEAM', 'AVAILICLARM2', 'AVAILICLARM', 'AQUARIUM', 'PROCESSING', 'COMNAME', 'PICTURES', 'TAG/RECAPTURE', 'CONSERVATION', 'CHECKLIST', 'ISBN', 'AUTHOREMAIL', 'AUTHORADRESS', 'AUTHORADRESS2', 'PDFFILE', 'DP', 'RF', 'RDE', 'USED', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'BORROWER', ),
        BasePeer::TYPE_FIELDNAME => array ('RefNo', 'Title', 'Topic', 'SubTopic', 'Author', 'WP', 'Source', 'Year', 'PaperURL', 'IncPub', 'PubStat', 'Annotation', 'NameType', 'SourceUnique', 'FirstAuthor', 'PageStart', 'PageEnd', 'PageCount', 'Language', 'Complete', 'RefType', 'Keywords', 'OtherKeywords', 'Remarks', 'CrossRef1', 'CrossRef2', 'CrossRef3', 'CrossRef4', 'CrossRef5', 'Abstract', 'Citation', 'Team', 'AvailIclarm2', 'AvailIclarm', 'Aquarium', 'Processing', 'Comname', 'Pictures', 'Tag/recapture', 'Conservation', 'Checklist', 'ISBN', 'AuthorEmail', 'AuthorAdress', 'AuthorAdress2', 'PdfFile', 'DP', 'RF', 'RDE', 'Used', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'Borrower', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. WpreferencesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Refno' => 0, 'Title' => 1, 'Topic' => 2, 'Subtopic' => 3, 'Author' => 4, 'Wp' => 5, 'Source' => 6, 'Year' => 7, 'Paperurl' => 8, 'Incpub' => 9, 'Pubstat' => 10, 'Annotation' => 11, 'Nametype' => 12, 'Sourceunique' => 13, 'Firstauthor' => 14, 'Pagestart' => 15, 'Pageend' => 16, 'Pagecount' => 17, 'Language' => 18, 'Complete' => 19, 'Reftype' => 20, 'Keywords' => 21, 'Otherkeywords' => 22, 'Remarks' => 23, 'Crossref1' => 24, 'Crossref2' => 25, 'Crossref3' => 26, 'Crossref4' => 27, 'Crossref5' => 28, 'Abstract' => 29, 'Citation' => 30, 'Team' => 31, 'Availiclarm2' => 32, 'Availiclarm' => 33, 'Aquarium' => 34, 'Processing' => 35, 'Comname' => 36, 'Pictures' => 37, 'Tagrecapture' => 38, 'Conservation' => 39, 'Checklist' => 40, 'Isbn' => 41, 'Authoremail' => 42, 'Authoradress' => 43, 'Authoradress2' => 44, 'Pdffile' => 45, 'Dp' => 46, 'Rf' => 47, 'Rde' => 48, 'Used' => 49, 'Entered' => 50, 'Dateentered' => 51, 'Modified' => 52, 'Datemodified' => 53, 'Expert' => 54, 'Datechecked' => 55, 'Borrower' => 56, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('refno' => 0, 'title' => 1, 'topic' => 2, 'subtopic' => 3, 'author' => 4, 'wp' => 5, 'source' => 6, 'year' => 7, 'paperurl' => 8, 'incpub' => 9, 'pubstat' => 10, 'annotation' => 11, 'nametype' => 12, 'sourceunique' => 13, 'firstauthor' => 14, 'pagestart' => 15, 'pageend' => 16, 'pagecount' => 17, 'language' => 18, 'complete' => 19, 'reftype' => 20, 'keywords' => 21, 'otherkeywords' => 22, 'remarks' => 23, 'crossref1' => 24, 'crossref2' => 25, 'crossref3' => 26, 'crossref4' => 27, 'crossref5' => 28, 'abstract' => 29, 'citation' => 30, 'team' => 31, 'availiclarm2' => 32, 'availiclarm' => 33, 'aquarium' => 34, 'processing' => 35, 'comname' => 36, 'pictures' => 37, 'tagrecapture' => 38, 'conservation' => 39, 'checklist' => 40, 'isbn' => 41, 'authoremail' => 42, 'authoradress' => 43, 'authoradress2' => 44, 'pdffile' => 45, 'dp' => 46, 'rf' => 47, 'rde' => 48, 'used' => 49, 'entered' => 50, 'dateentered' => 51, 'modified' => 52, 'datemodified' => 53, 'expert' => 54, 'datechecked' => 55, 'borrower' => 56, ),
        BasePeer::TYPE_COLNAME => array (WpreferencesPeer::REFNO => 0, WpreferencesPeer::TITLE => 1, WpreferencesPeer::TOPIC => 2, WpreferencesPeer::SUBTOPIC => 3, WpreferencesPeer::AUTHOR => 4, WpreferencesPeer::WP => 5, WpreferencesPeer::SOURCE => 6, WpreferencesPeer::YEAR => 7, WpreferencesPeer::PAPERURL => 8, WpreferencesPeer::INCPUB => 9, WpreferencesPeer::PUBSTAT => 10, WpreferencesPeer::ANNOTATION => 11, WpreferencesPeer::NAMETYPE => 12, WpreferencesPeer::SOURCEUNIQUE => 13, WpreferencesPeer::FIRSTAUTHOR => 14, WpreferencesPeer::PAGESTART => 15, WpreferencesPeer::PAGEEND => 16, WpreferencesPeer::PAGECOUNT => 17, WpreferencesPeer::LANGUAGE => 18, WpreferencesPeer::COMPLETE => 19, WpreferencesPeer::REFTYPE => 20, WpreferencesPeer::KEYWORDS => 21, WpreferencesPeer::OTHERKEYWORDS => 22, WpreferencesPeer::REMARKS => 23, WpreferencesPeer::CROSSREF1 => 24, WpreferencesPeer::CROSSREF2 => 25, WpreferencesPeer::CROSSREF3 => 26, WpreferencesPeer::CROSSREF4 => 27, WpreferencesPeer::CROSSREF5 => 28, WpreferencesPeer::ABZTRACT => 29, WpreferencesPeer::CITATION => 30, WpreferencesPeer::TEAM => 31, WpreferencesPeer::AVAILICLARM2 => 32, WpreferencesPeer::AVAILICLARM => 33, WpreferencesPeer::AQUARIUM => 34, WpreferencesPeer::PROCESSING => 35, WpreferencesPeer::COMNAME => 36, WpreferencesPeer::PICTURES => 37, WpreferencesPeer::TAG/RECAPTURE => 38, WpreferencesPeer::CONSERVATION => 39, WpreferencesPeer::CHECKLIST => 40, WpreferencesPeer::ISBN => 41, WpreferencesPeer::AUTHOREMAIL => 42, WpreferencesPeer::AUTHORADRESS => 43, WpreferencesPeer::AUTHORADRESS2 => 44, WpreferencesPeer::PDFFILE => 45, WpreferencesPeer::DP => 46, WpreferencesPeer::RF => 47, WpreferencesPeer::RDE => 48, WpreferencesPeer::USED => 49, WpreferencesPeer::ENTERED => 50, WpreferencesPeer::DATEENTERED => 51, WpreferencesPeer::MODIFIED => 52, WpreferencesPeer::DATEMODIFIED => 53, WpreferencesPeer::EXPERT => 54, WpreferencesPeer::DATECHECKED => 55, WpreferencesPeer::BORROWER => 56, ),
        BasePeer::TYPE_RAW_COLNAME => array ('REFNO' => 0, 'TITLE' => 1, 'TOPIC' => 2, 'SUBTOPIC' => 3, 'AUTHOR' => 4, 'WP' => 5, 'SOURCE' => 6, 'YEAR' => 7, 'PAPERURL' => 8, 'INCPUB' => 9, 'PUBSTAT' => 10, 'ANNOTATION' => 11, 'NAMETYPE' => 12, 'SOURCEUNIQUE' => 13, 'FIRSTAUTHOR' => 14, 'PAGESTART' => 15, 'PAGEEND' => 16, 'PAGECOUNT' => 17, 'LANGUAGE' => 18, 'COMPLETE' => 19, 'REFTYPE' => 20, 'KEYWORDS' => 21, 'OTHERKEYWORDS' => 22, 'REMARKS' => 23, 'CROSSREF1' => 24, 'CROSSREF2' => 25, 'CROSSREF3' => 26, 'CROSSREF4' => 27, 'CROSSREF5' => 28, 'ABZTRACT' => 29, 'CITATION' => 30, 'TEAM' => 31, 'AVAILICLARM2' => 32, 'AVAILICLARM' => 33, 'AQUARIUM' => 34, 'PROCESSING' => 35, 'COMNAME' => 36, 'PICTURES' => 37, 'TAG/RECAPTURE' => 38, 'CONSERVATION' => 39, 'CHECKLIST' => 40, 'ISBN' => 41, 'AUTHOREMAIL' => 42, 'AUTHORADRESS' => 43, 'AUTHORADRESS2' => 44, 'PDFFILE' => 45, 'DP' => 46, 'RF' => 47, 'RDE' => 48, 'USED' => 49, 'ENTERED' => 50, 'DATEENTERED' => 51, 'MODIFIED' => 52, 'DATEMODIFIED' => 53, 'EXPERT' => 54, 'DATECHECKED' => 55, 'BORROWER' => 56, ),
        BasePeer::TYPE_FIELDNAME => array ('RefNo' => 0, 'Title' => 1, 'Topic' => 2, 'SubTopic' => 3, 'Author' => 4, 'WP' => 5, 'Source' => 6, 'Year' => 7, 'PaperURL' => 8, 'IncPub' => 9, 'PubStat' => 10, 'Annotation' => 11, 'NameType' => 12, 'SourceUnique' => 13, 'FirstAuthor' => 14, 'PageStart' => 15, 'PageEnd' => 16, 'PageCount' => 17, 'Language' => 18, 'Complete' => 19, 'RefType' => 20, 'Keywords' => 21, 'OtherKeywords' => 22, 'Remarks' => 23, 'CrossRef1' => 24, 'CrossRef2' => 25, 'CrossRef3' => 26, 'CrossRef4' => 27, 'CrossRef5' => 28, 'Abstract' => 29, 'Citation' => 30, 'Team' => 31, 'AvailIclarm2' => 32, 'AvailIclarm' => 33, 'Aquarium' => 34, 'Processing' => 35, 'Comname' => 36, 'Pictures' => 37, 'Tag/recapture' => 38, 'Conservation' => 39, 'Checklist' => 40, 'ISBN' => 41, 'AuthorEmail' => 42, 'AuthorAdress' => 43, 'AuthorAdress2' => 44, 'PdfFile' => 45, 'DP' => 46, 'RF' => 47, 'RDE' => 48, 'Used' => 49, 'Entered' => 50, 'DateEntered' => 51, 'Modified' => 52, 'DateModified' => 53, 'Expert' => 54, 'DateChecked' => 55, 'Borrower' => 56, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = WpreferencesPeer::getFieldNames($toType);
        $key = isset(WpreferencesPeer::$fieldKeys[$fromType][$name]) ? WpreferencesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(WpreferencesPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, WpreferencesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return WpreferencesPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. WpreferencesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(WpreferencesPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(WpreferencesPeer::REFNO);
            $criteria->addSelectColumn(WpreferencesPeer::TITLE);
            $criteria->addSelectColumn(WpreferencesPeer::TOPIC);
            $criteria->addSelectColumn(WpreferencesPeer::SUBTOPIC);
            $criteria->addSelectColumn(WpreferencesPeer::AUTHOR);
            $criteria->addSelectColumn(WpreferencesPeer::WP);
            $criteria->addSelectColumn(WpreferencesPeer::SOURCE);
            $criteria->addSelectColumn(WpreferencesPeer::YEAR);
            $criteria->addSelectColumn(WpreferencesPeer::PAPERURL);
            $criteria->addSelectColumn(WpreferencesPeer::INCPUB);
            $criteria->addSelectColumn(WpreferencesPeer::PUBSTAT);
            $criteria->addSelectColumn(WpreferencesPeer::ANNOTATION);
            $criteria->addSelectColumn(WpreferencesPeer::NAMETYPE);
            $criteria->addSelectColumn(WpreferencesPeer::SOURCEUNIQUE);
            $criteria->addSelectColumn(WpreferencesPeer::FIRSTAUTHOR);
            $criteria->addSelectColumn(WpreferencesPeer::PAGESTART);
            $criteria->addSelectColumn(WpreferencesPeer::PAGEEND);
            $criteria->addSelectColumn(WpreferencesPeer::PAGECOUNT);
            $criteria->addSelectColumn(WpreferencesPeer::LANGUAGE);
            $criteria->addSelectColumn(WpreferencesPeer::COMPLETE);
            $criteria->addSelectColumn(WpreferencesPeer::REFTYPE);
            $criteria->addSelectColumn(WpreferencesPeer::KEYWORDS);
            $criteria->addSelectColumn(WpreferencesPeer::OTHERKEYWORDS);
            $criteria->addSelectColumn(WpreferencesPeer::REMARKS);
            $criteria->addSelectColumn(WpreferencesPeer::CROSSREF1);
            $criteria->addSelectColumn(WpreferencesPeer::CROSSREF2);
            $criteria->addSelectColumn(WpreferencesPeer::CROSSREF3);
            $criteria->addSelectColumn(WpreferencesPeer::CROSSREF4);
            $criteria->addSelectColumn(WpreferencesPeer::CROSSREF5);
            $criteria->addSelectColumn(WpreferencesPeer::ABZTRACT);
            $criteria->addSelectColumn(WpreferencesPeer::CITATION);
            $criteria->addSelectColumn(WpreferencesPeer::TEAM);
            $criteria->addSelectColumn(WpreferencesPeer::AVAILICLARM2);
            $criteria->addSelectColumn(WpreferencesPeer::AVAILICLARM);
            $criteria->addSelectColumn(WpreferencesPeer::AQUARIUM);
            $criteria->addSelectColumn(WpreferencesPeer::PROCESSING);
            $criteria->addSelectColumn(WpreferencesPeer::COMNAME);
            $criteria->addSelectColumn(WpreferencesPeer::PICTURES);
            $criteria->addSelectColumn(WpreferencesPeer::TAG/RECAPTURE);
            $criteria->addSelectColumn(WpreferencesPeer::CONSERVATION);
            $criteria->addSelectColumn(WpreferencesPeer::CHECKLIST);
            $criteria->addSelectColumn(WpreferencesPeer::ISBN);
            $criteria->addSelectColumn(WpreferencesPeer::AUTHOREMAIL);
            $criteria->addSelectColumn(WpreferencesPeer::AUTHORADRESS);
            $criteria->addSelectColumn(WpreferencesPeer::AUTHORADRESS2);
            $criteria->addSelectColumn(WpreferencesPeer::PDFFILE);
            $criteria->addSelectColumn(WpreferencesPeer::DP);
            $criteria->addSelectColumn(WpreferencesPeer::RF);
            $criteria->addSelectColumn(WpreferencesPeer::RDE);
            $criteria->addSelectColumn(WpreferencesPeer::USED);
            $criteria->addSelectColumn(WpreferencesPeer::ENTERED);
            $criteria->addSelectColumn(WpreferencesPeer::DATEENTERED);
            $criteria->addSelectColumn(WpreferencesPeer::MODIFIED);
            $criteria->addSelectColumn(WpreferencesPeer::DATEMODIFIED);
            $criteria->addSelectColumn(WpreferencesPeer::EXPERT);
            $criteria->addSelectColumn(WpreferencesPeer::DATECHECKED);
            $criteria->addSelectColumn(WpreferencesPeer::BORROWER);
        } else {
            $criteria->addSelectColumn($alias . '.RefNo');
            $criteria->addSelectColumn($alias . '.Title');
            $criteria->addSelectColumn($alias . '.Topic');
            $criteria->addSelectColumn($alias . '.SubTopic');
            $criteria->addSelectColumn($alias . '.Author');
            $criteria->addSelectColumn($alias . '.WP');
            $criteria->addSelectColumn($alias . '.Source');
            $criteria->addSelectColumn($alias . '.Year');
            $criteria->addSelectColumn($alias . '.PaperURL');
            $criteria->addSelectColumn($alias . '.IncPub');
            $criteria->addSelectColumn($alias . '.PubStat');
            $criteria->addSelectColumn($alias . '.Annotation');
            $criteria->addSelectColumn($alias . '.NameType');
            $criteria->addSelectColumn($alias . '.SourceUnique');
            $criteria->addSelectColumn($alias . '.FirstAuthor');
            $criteria->addSelectColumn($alias . '.PageStart');
            $criteria->addSelectColumn($alias . '.PageEnd');
            $criteria->addSelectColumn($alias . '.PageCount');
            $criteria->addSelectColumn($alias . '.Language');
            $criteria->addSelectColumn($alias . '.Complete');
            $criteria->addSelectColumn($alias . '.RefType');
            $criteria->addSelectColumn($alias . '.Keywords');
            $criteria->addSelectColumn($alias . '.OtherKeywords');
            $criteria->addSelectColumn($alias . '.Remarks');
            $criteria->addSelectColumn($alias . '.CrossRef1');
            $criteria->addSelectColumn($alias . '.CrossRef2');
            $criteria->addSelectColumn($alias . '.CrossRef3');
            $criteria->addSelectColumn($alias . '.CrossRef4');
            $criteria->addSelectColumn($alias . '.CrossRef5');
            $criteria->addSelectColumn($alias . '.Abstract');
            $criteria->addSelectColumn($alias . '.Citation');
            $criteria->addSelectColumn($alias . '.Team');
            $criteria->addSelectColumn($alias . '.AvailIclarm2');
            $criteria->addSelectColumn($alias . '.AvailIclarm');
            $criteria->addSelectColumn($alias . '.Aquarium');
            $criteria->addSelectColumn($alias . '.Processing');
            $criteria->addSelectColumn($alias . '.Comname');
            $criteria->addSelectColumn($alias . '.Pictures');
            $criteria->addSelectColumn($alias . '.Tag/recapture');
            $criteria->addSelectColumn($alias . '.Conservation');
            $criteria->addSelectColumn($alias . '.Checklist');
            $criteria->addSelectColumn($alias . '.ISBN');
            $criteria->addSelectColumn($alias . '.AuthorEmail');
            $criteria->addSelectColumn($alias . '.AuthorAdress');
            $criteria->addSelectColumn($alias . '.AuthorAdress2');
            $criteria->addSelectColumn($alias . '.PdfFile');
            $criteria->addSelectColumn($alias . '.DP');
            $criteria->addSelectColumn($alias . '.RF');
            $criteria->addSelectColumn($alias . '.RDE');
            $criteria->addSelectColumn($alias . '.Used');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.Borrower');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(WpreferencesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            WpreferencesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(WpreferencesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(WpreferencesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return Wpreferences
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = WpreferencesPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return WpreferencesPeer::populateObjects(WpreferencesPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WpreferencesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            WpreferencesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(WpreferencesPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param Wpreferences $obj A Wpreferences object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getRefno();
            } // if key === null
            WpreferencesPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Wpreferences object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Wpreferences) {
                $key = (string) $value->getRefno();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Wpreferences object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(WpreferencesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Wpreferences Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(WpreferencesPeer::$instances[$key])) {
                return WpreferencesPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (WpreferencesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        WpreferencesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to wpreferences
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = WpreferencesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = WpreferencesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = WpreferencesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                WpreferencesPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Wpreferences object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = WpreferencesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = WpreferencesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + WpreferencesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = WpreferencesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            WpreferencesPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(WpreferencesPeer::DATABASE_NAME)->getTable(WpreferencesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseWpreferencesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseWpreferencesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \WpreferencesTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return WpreferencesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Wpreferences or Criteria object.
     *
     * @param      mixed $values Criteria or Wpreferences object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WpreferencesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Wpreferences object
        }


        // Set the correct dbName
        $criteria->setDbName(WpreferencesPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Wpreferences or Criteria object.
     *
     * @param      mixed $values Criteria or Wpreferences object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WpreferencesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(WpreferencesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(WpreferencesPeer::REFNO);
            $value = $criteria->remove(WpreferencesPeer::REFNO);
            if ($value) {
                $selectCriteria->add(WpreferencesPeer::REFNO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(WpreferencesPeer::TABLE_NAME);
            }

        } else { // $values is Wpreferences object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(WpreferencesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the wpreferences table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WpreferencesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(WpreferencesPeer::TABLE_NAME, $con, WpreferencesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            WpreferencesPeer::clearInstancePool();
            WpreferencesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Wpreferences or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Wpreferences object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(WpreferencesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            WpreferencesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Wpreferences) { // it's a model object
            // invalidate the cache for this single object
            WpreferencesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(WpreferencesPeer::DATABASE_NAME);
            $criteria->add(WpreferencesPeer::REFNO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                WpreferencesPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(WpreferencesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            WpreferencesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Wpreferences object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Wpreferences $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(WpreferencesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(WpreferencesPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(WpreferencesPeer::DATABASE_NAME, WpreferencesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Wpreferences
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = WpreferencesPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(WpreferencesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(WpreferencesPeer::DATABASE_NAME);
        $criteria->add(WpreferencesPeer::REFNO, $pk);

        $v = WpreferencesPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Wpreferences[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WpreferencesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(WpreferencesPeer::DATABASE_NAME);
            $criteria->add(WpreferencesPeer::REFNO, $pks, Criteria::IN);
            $objs = WpreferencesPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseWpreferencesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseWpreferencesPeer::buildTableMap();

