<?php


/**
 * Base class that represents a row from the 'wpreferences' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseWpreferences extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'WpreferencesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        WpreferencesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the refno field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $refno;

    /**
     * The value for the title field.
     * @var        string
     */
    protected $title;

    /**
     * The value for the topic field.
     * @var        string
     */
    protected $topic;

    /**
     * The value for the subtopic field.
     * @var        string
     */
    protected $subtopic;

    /**
     * The value for the author field.
     * @var        string
     */
    protected $author;

    /**
     * The value for the wp field.
     * @var        string
     */
    protected $wp;

    /**
     * The value for the source field.
     * @var        string
     */
    protected $source;

    /**
     * The value for the year field.
     * @var        int
     */
    protected $year;

    /**
     * The value for the paperurl field.
     * @var        string
     */
    protected $paperurl;

    /**
     * The value for the incpub field.
     * @var        string
     */
    protected $incpub;

    /**
     * The value for the pubstat field.
     * @var        string
     */
    protected $pubstat;

    /**
     * The value for the annotation field.
     * @var        string
     */
    protected $annotation;

    /**
     * The value for the nametype field.
     * @var        string
     */
    protected $nametype;

    /**
     * The value for the sourceunique field.
     * @var        string
     */
    protected $sourceunique;

    /**
     * The value for the firstauthor field.
     * @var        string
     */
    protected $firstauthor;

    /**
     * The value for the pagestart field.
     * @var        int
     */
    protected $pagestart;

    /**
     * The value for the pageend field.
     * @var        int
     */
    protected $pageend;

    /**
     * The value for the pagecount field.
     * @var        int
     */
    protected $pagecount;

    /**
     * The value for the language field.
     * @var        string
     */
    protected $language;

    /**
     * The value for the complete field.
     * @var        int
     */
    protected $complete;

    /**
     * The value for the reftype field.
     * @var        string
     */
    protected $reftype;

    /**
     * The value for the keywords field.
     * @var        string
     */
    protected $keywords;

    /**
     * The value for the otherkeywords field.
     * @var        string
     */
    protected $otherkeywords;

    /**
     * The value for the remarks field.
     * @var        string
     */
    protected $remarks;

    /**
     * The value for the crossref1 field.
     * @var        int
     */
    protected $crossref1;

    /**
     * The value for the crossref2 field.
     * @var        int
     */
    protected $crossref2;

    /**
     * The value for the crossref3 field.
     * @var        int
     */
    protected $crossref3;

    /**
     * The value for the crossref4 field.
     * @var        int
     */
    protected $crossref4;

    /**
     * The value for the crossref5 field.
     * @var        int
     */
    protected $crossref5;

    /**
     * The value for the abstract field.
     * @var        string
     */
    protected $abstract;

    /**
     * The value for the citation field.
     * @var        int
     */
    protected $citation;

    /**
     * The value for the team field.
     * @var        int
     */
    protected $team;

    /**
     * The value for the availiclarm2 field.
     * @var        int
     */
    protected $availiclarm2;

    /**
     * The value for the availiclarm field.
     * @var        int
     */
    protected $availiclarm;

    /**
     * The value for the aquarium field.
     * @var        int
     */
    protected $aquarium;

    /**
     * The value for the processing field.
     * @var        int
     */
    protected $processing;

    /**
     * The value for the comname field.
     * @var        int
     */
    protected $comname;

    /**
     * The value for the pictures field.
     * @var        int
     */
    protected $pictures;

    /**
     * The value for the tag/recapture field.
     * @var        int
     */
    protected $tag/recapture;

    /**
     * The value for the conservation field.
     * @var        int
     */
    protected $conservation;

    /**
     * The value for the checklist field.
     * @var        int
     */
    protected $checklist;

    /**
     * The value for the isbn field.
     * @var        string
     */
    protected $isbn;

    /**
     * The value for the authoremail field.
     * @var        string
     */
    protected $authoremail;

    /**
     * The value for the authoradress field.
     * @var        string
     */
    protected $authoradress;

    /**
     * The value for the authoradress2 field.
     * @var        string
     */
    protected $authoradress2;

    /**
     * The value for the pdffile field.
     * @var        string
     */
    protected $pdffile;

    /**
     * The value for the dp field.
     * @var        int
     */
    protected $dp;

    /**
     * The value for the rf field.
     * @var        int
     */
    protected $rf;

    /**
     * The value for the rde field.
     * @var        int
     */
    protected $rde;

    /**
     * The value for the used field.
     * @var        string
     */
    protected $used;

    /**
     * The value for the entered field.
     * @var        int
     */
    protected $entered;

    /**
     * The value for the dateentered field.
     * @var        string
     */
    protected $dateentered;

    /**
     * The value for the modified field.
     * @var        int
     */
    protected $modified;

    /**
     * The value for the datemodified field.
     * @var        string
     */
    protected $datemodified;

    /**
     * The value for the expert field.
     * @var        int
     */
    protected $expert;

    /**
     * The value for the datechecked field.
     * @var        string
     */
    protected $datechecked;

    /**
     * The value for the borrower field.
     * @var        int
     */
    protected $borrower;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->refno = 0;
    }

    /**
     * Initializes internal state of BaseWpreferences object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [refno] column value.
     *
     * @return int
     */
    public function getRefno()
    {

        return $this->refno;
    }

    /**
     * Get the [title] column value.
     *
     * @return string
     */
    public function getTitle()
    {

        return $this->title;
    }

    /**
     * Get the [topic] column value.
     *
     * @return string
     */
    public function getTopic()
    {

        return $this->topic;
    }

    /**
     * Get the [subtopic] column value.
     *
     * @return string
     */
    public function getSubtopic()
    {

        return $this->subtopic;
    }

    /**
     * Get the [author] column value.
     *
     * @return string
     */
    public function getAuthor()
    {

        return $this->author;
    }

    /**
     * Get the [wp] column value.
     *
     * @return string
     */
    public function getWp()
    {

        return $this->wp;
    }

    /**
     * Get the [source] column value.
     *
     * @return string
     */
    public function getSource()
    {

        return $this->source;
    }

    /**
     * Get the [year] column value.
     *
     * @return int
     */
    public function getYear()
    {

        return $this->year;
    }

    /**
     * Get the [paperurl] column value.
     *
     * @return string
     */
    public function getPaperurl()
    {

        return $this->paperurl;
    }

    /**
     * Get the [incpub] column value.
     *
     * @return string
     */
    public function getIncpub()
    {

        return $this->incpub;
    }

    /**
     * Get the [pubstat] column value.
     *
     * @return string
     */
    public function getPubstat()
    {

        return $this->pubstat;
    }

    /**
     * Get the [annotation] column value.
     *
     * @return string
     */
    public function getAnnotation()
    {

        return $this->annotation;
    }

    /**
     * Get the [nametype] column value.
     *
     * @return string
     */
    public function getNametype()
    {

        return $this->nametype;
    }

    /**
     * Get the [sourceunique] column value.
     *
     * @return string
     */
    public function getSourceunique()
    {

        return $this->sourceunique;
    }

    /**
     * Get the [firstauthor] column value.
     *
     * @return string
     */
    public function getFirstauthor()
    {

        return $this->firstauthor;
    }

    /**
     * Get the [pagestart] column value.
     *
     * @return int
     */
    public function getPagestart()
    {

        return $this->pagestart;
    }

    /**
     * Get the [pageend] column value.
     *
     * @return int
     */
    public function getPageend()
    {

        return $this->pageend;
    }

    /**
     * Get the [pagecount] column value.
     *
     * @return int
     */
    public function getPagecount()
    {

        return $this->pagecount;
    }

    /**
     * Get the [language] column value.
     *
     * @return string
     */
    public function getLanguage()
    {

        return $this->language;
    }

    /**
     * Get the [complete] column value.
     *
     * @return int
     */
    public function getComplete()
    {

        return $this->complete;
    }

    /**
     * Get the [reftype] column value.
     *
     * @return string
     */
    public function getReftype()
    {

        return $this->reftype;
    }

    /**
     * Get the [keywords] column value.
     *
     * @return string
     */
    public function getKeywords()
    {

        return $this->keywords;
    }

    /**
     * Get the [otherkeywords] column value.
     *
     * @return string
     */
    public function getOtherkeywords()
    {

        return $this->otherkeywords;
    }

    /**
     * Get the [remarks] column value.
     *
     * @return string
     */
    public function getRemarks()
    {

        return $this->remarks;
    }

    /**
     * Get the [crossref1] column value.
     *
     * @return int
     */
    public function getCrossref1()
    {

        return $this->crossref1;
    }

    /**
     * Get the [crossref2] column value.
     *
     * @return int
     */
    public function getCrossref2()
    {

        return $this->crossref2;
    }

    /**
     * Get the [crossref3] column value.
     *
     * @return int
     */
    public function getCrossref3()
    {

        return $this->crossref3;
    }

    /**
     * Get the [crossref4] column value.
     *
     * @return int
     */
    public function getCrossref4()
    {

        return $this->crossref4;
    }

    /**
     * Get the [crossref5] column value.
     *
     * @return int
     */
    public function getCrossref5()
    {

        return $this->crossref5;
    }

    /**
     * Get the [abstract] column value.
     *
     * @return string
     */
    public function getAbstract()
    {

        return $this->abstract;
    }

    /**
     * Get the [citation] column value.
     *
     * @return int
     */
    public function getCitation()
    {

        return $this->citation;
    }

    /**
     * Get the [team] column value.
     *
     * @return int
     */
    public function getTeam()
    {

        return $this->team;
    }

    /**
     * Get the [availiclarm2] column value.
     *
     * @return int
     */
    public function getAvailiclarm2()
    {

        return $this->availiclarm2;
    }

    /**
     * Get the [availiclarm] column value.
     *
     * @return int
     */
    public function getAvailiclarm()
    {

        return $this->availiclarm;
    }

    /**
     * Get the [aquarium] column value.
     *
     * @return int
     */
    public function getAquarium()
    {

        return $this->aquarium;
    }

    /**
     * Get the [processing] column value.
     *
     * @return int
     */
    public function getProcessing()
    {

        return $this->processing;
    }

    /**
     * Get the [comname] column value.
     *
     * @return int
     */
    public function getComname()
    {

        return $this->comname;
    }

    /**
     * Get the [pictures] column value.
     *
     * @return int
     */
    public function getPictures()
    {

        return $this->pictures;
    }

    /**
     * Get the [tag/recapture] column value.
     *
     * @return int
     */
    public function getTagrecapture()
    {

        return $this->tag/recapture;
    }

    /**
     * Get the [conservation] column value.
     *
     * @return int
     */
    public function getConservation()
    {

        return $this->conservation;
    }

    /**
     * Get the [checklist] column value.
     *
     * @return int
     */
    public function getChecklist()
    {

        return $this->checklist;
    }

    /**
     * Get the [isbn] column value.
     *
     * @return string
     */
    public function getIsbn()
    {

        return $this->isbn;
    }

    /**
     * Get the [authoremail] column value.
     *
     * @return string
     */
    public function getAuthoremail()
    {

        return $this->authoremail;
    }

    /**
     * Get the [authoradress] column value.
     *
     * @return string
     */
    public function getAuthoradress()
    {

        return $this->authoradress;
    }

    /**
     * Get the [authoradress2] column value.
     *
     * @return string
     */
    public function getAuthoradress2()
    {

        return $this->authoradress2;
    }

    /**
     * Get the [pdffile] column value.
     *
     * @return string
     */
    public function getPdffile()
    {

        return $this->pdffile;
    }

    /**
     * Get the [dp] column value.
     *
     * @return int
     */
    public function getDp()
    {

        return $this->dp;
    }

    /**
     * Get the [rf] column value.
     *
     * @return int
     */
    public function getRf()
    {

        return $this->rf;
    }

    /**
     * Get the [rde] column value.
     *
     * @return int
     */
    public function getRde()
    {

        return $this->rde;
    }

    /**
     * Get the [used] column value.
     *
     * @return string
     */
    public function getUsed()
    {

        return $this->used;
    }

    /**
     * Get the [entered] column value.
     *
     * @return int
     */
    public function getEntered()
    {

        return $this->entered;
    }

    /**
     * Get the [optionally formatted] temporal [dateentered] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateentered($format = 'Y-m-d H:i:s')
    {
        if ($this->dateentered === null) {
            return null;
        }

        if ($this->dateentered === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dateentered);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dateentered, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [modified] column value.
     *
     * @return int
     */
    public function getModified()
    {

        return $this->modified;
    }

    /**
     * Get the [optionally formatted] temporal [datemodified] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatemodified($format = 'Y-m-d H:i:s')
    {
        if ($this->datemodified === null) {
            return null;
        }

        if ($this->datemodified === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datemodified);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datemodified, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [expert] column value.
     *
     * @return int
     */
    public function getExpert()
    {

        return $this->expert;
    }

    /**
     * Get the [optionally formatted] temporal [datechecked] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatechecked($format = 'Y-m-d H:i:s')
    {
        if ($this->datechecked === null) {
            return null;
        }

        if ($this->datechecked === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datechecked);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datechecked, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [borrower] column value.
     *
     * @return int
     */
    public function getBorrower()
    {

        return $this->borrower;
    }

    /**
     * Set the value of [refno] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setRefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->refno !== $v) {
            $this->refno = $v;
            $this->modifiedColumns[] = WpreferencesPeer::REFNO;
        }


        return $this;
    } // setRefno()

    /**
     * Set the value of [title] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setTitle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->title !== $v) {
            $this->title = $v;
            $this->modifiedColumns[] = WpreferencesPeer::TITLE;
        }


        return $this;
    } // setTitle()

    /**
     * Set the value of [topic] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setTopic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->topic !== $v) {
            $this->topic = $v;
            $this->modifiedColumns[] = WpreferencesPeer::TOPIC;
        }


        return $this;
    } // setTopic()

    /**
     * Set the value of [subtopic] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setSubtopic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->subtopic !== $v) {
            $this->subtopic = $v;
            $this->modifiedColumns[] = WpreferencesPeer::SUBTOPIC;
        }


        return $this;
    } // setSubtopic()

    /**
     * Set the value of [author] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setAuthor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->author !== $v) {
            $this->author = $v;
            $this->modifiedColumns[] = WpreferencesPeer::AUTHOR;
        }


        return $this;
    } // setAuthor()

    /**
     * Set the value of [wp] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setWp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->wp !== $v) {
            $this->wp = $v;
            $this->modifiedColumns[] = WpreferencesPeer::WP;
        }


        return $this;
    } // setWp()

    /**
     * Set the value of [source] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setSource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->source !== $v) {
            $this->source = $v;
            $this->modifiedColumns[] = WpreferencesPeer::SOURCE;
        }


        return $this;
    } // setSource()

    /**
     * Set the value of [year] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setYear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->year !== $v) {
            $this->year = $v;
            $this->modifiedColumns[] = WpreferencesPeer::YEAR;
        }


        return $this;
    } // setYear()

    /**
     * Set the value of [paperurl] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setPaperurl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->paperurl !== $v) {
            $this->paperurl = $v;
            $this->modifiedColumns[] = WpreferencesPeer::PAPERURL;
        }


        return $this;
    } // setPaperurl()

    /**
     * Set the value of [incpub] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setIncpub($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->incpub !== $v) {
            $this->incpub = $v;
            $this->modifiedColumns[] = WpreferencesPeer::INCPUB;
        }


        return $this;
    } // setIncpub()

    /**
     * Set the value of [pubstat] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setPubstat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pubstat !== $v) {
            $this->pubstat = $v;
            $this->modifiedColumns[] = WpreferencesPeer::PUBSTAT;
        }


        return $this;
    } // setPubstat()

    /**
     * Set the value of [annotation] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setAnnotation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->annotation !== $v) {
            $this->annotation = $v;
            $this->modifiedColumns[] = WpreferencesPeer::ANNOTATION;
        }


        return $this;
    } // setAnnotation()

    /**
     * Set the value of [nametype] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setNametype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nametype !== $v) {
            $this->nametype = $v;
            $this->modifiedColumns[] = WpreferencesPeer::NAMETYPE;
        }


        return $this;
    } // setNametype()

    /**
     * Set the value of [sourceunique] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setSourceunique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sourceunique !== $v) {
            $this->sourceunique = $v;
            $this->modifiedColumns[] = WpreferencesPeer::SOURCEUNIQUE;
        }


        return $this;
    } // setSourceunique()

    /**
     * Set the value of [firstauthor] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setFirstauthor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->firstauthor !== $v) {
            $this->firstauthor = $v;
            $this->modifiedColumns[] = WpreferencesPeer::FIRSTAUTHOR;
        }


        return $this;
    } // setFirstauthor()

    /**
     * Set the value of [pagestart] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setPagestart($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pagestart !== $v) {
            $this->pagestart = $v;
            $this->modifiedColumns[] = WpreferencesPeer::PAGESTART;
        }


        return $this;
    } // setPagestart()

    /**
     * Set the value of [pageend] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setPageend($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pageend !== $v) {
            $this->pageend = $v;
            $this->modifiedColumns[] = WpreferencesPeer::PAGEEND;
        }


        return $this;
    } // setPageend()

    /**
     * Set the value of [pagecount] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setPagecount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pagecount !== $v) {
            $this->pagecount = $v;
            $this->modifiedColumns[] = WpreferencesPeer::PAGECOUNT;
        }


        return $this;
    } // setPagecount()

    /**
     * Set the value of [language] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setLanguage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->language !== $v) {
            $this->language = $v;
            $this->modifiedColumns[] = WpreferencesPeer::LANGUAGE;
        }


        return $this;
    } // setLanguage()

    /**
     * Set the value of [complete] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setComplete($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->complete !== $v) {
            $this->complete = $v;
            $this->modifiedColumns[] = WpreferencesPeer::COMPLETE;
        }


        return $this;
    } // setComplete()

    /**
     * Set the value of [reftype] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setReftype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reftype !== $v) {
            $this->reftype = $v;
            $this->modifiedColumns[] = WpreferencesPeer::REFTYPE;
        }


        return $this;
    } // setReftype()

    /**
     * Set the value of [keywords] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setKeywords($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->keywords !== $v) {
            $this->keywords = $v;
            $this->modifiedColumns[] = WpreferencesPeer::KEYWORDS;
        }


        return $this;
    } // setKeywords()

    /**
     * Set the value of [otherkeywords] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setOtherkeywords($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->otherkeywords !== $v) {
            $this->otherkeywords = $v;
            $this->modifiedColumns[] = WpreferencesPeer::OTHERKEYWORDS;
        }


        return $this;
    } // setOtherkeywords()

    /**
     * Set the value of [remarks] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[] = WpreferencesPeer::REMARKS;
        }


        return $this;
    } // setRemarks()

    /**
     * Set the value of [crossref1] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setCrossref1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->crossref1 !== $v) {
            $this->crossref1 = $v;
            $this->modifiedColumns[] = WpreferencesPeer::CROSSREF1;
        }


        return $this;
    } // setCrossref1()

    /**
     * Set the value of [crossref2] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setCrossref2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->crossref2 !== $v) {
            $this->crossref2 = $v;
            $this->modifiedColumns[] = WpreferencesPeer::CROSSREF2;
        }


        return $this;
    } // setCrossref2()

    /**
     * Set the value of [crossref3] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setCrossref3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->crossref3 !== $v) {
            $this->crossref3 = $v;
            $this->modifiedColumns[] = WpreferencesPeer::CROSSREF3;
        }


        return $this;
    } // setCrossref3()

    /**
     * Set the value of [crossref4] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setCrossref4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->crossref4 !== $v) {
            $this->crossref4 = $v;
            $this->modifiedColumns[] = WpreferencesPeer::CROSSREF4;
        }


        return $this;
    } // setCrossref4()

    /**
     * Set the value of [crossref5] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setCrossref5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->crossref5 !== $v) {
            $this->crossref5 = $v;
            $this->modifiedColumns[] = WpreferencesPeer::CROSSREF5;
        }


        return $this;
    } // setCrossref5()

    /**
     * Set the value of [abstract] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setAbstract($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abstract !== $v) {
            $this->abstract = $v;
            $this->modifiedColumns[] = WpreferencesPeer::ABZTRACT;
        }


        return $this;
    } // setAbstract()

    /**
     * Set the value of [citation] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setCitation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->citation !== $v) {
            $this->citation = $v;
            $this->modifiedColumns[] = WpreferencesPeer::CITATION;
        }


        return $this;
    } // setCitation()

    /**
     * Set the value of [team] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setTeam($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->team !== $v) {
            $this->team = $v;
            $this->modifiedColumns[] = WpreferencesPeer::TEAM;
        }


        return $this;
    } // setTeam()

    /**
     * Set the value of [availiclarm2] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setAvailiclarm2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->availiclarm2 !== $v) {
            $this->availiclarm2 = $v;
            $this->modifiedColumns[] = WpreferencesPeer::AVAILICLARM2;
        }


        return $this;
    } // setAvailiclarm2()

    /**
     * Set the value of [availiclarm] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setAvailiclarm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->availiclarm !== $v) {
            $this->availiclarm = $v;
            $this->modifiedColumns[] = WpreferencesPeer::AVAILICLARM;
        }


        return $this;
    } // setAvailiclarm()

    /**
     * Set the value of [aquarium] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setAquarium($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aquarium !== $v) {
            $this->aquarium = $v;
            $this->modifiedColumns[] = WpreferencesPeer::AQUARIUM;
        }


        return $this;
    } // setAquarium()

    /**
     * Set the value of [processing] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setProcessing($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->processing !== $v) {
            $this->processing = $v;
            $this->modifiedColumns[] = WpreferencesPeer::PROCESSING;
        }


        return $this;
    } // setProcessing()

    /**
     * Set the value of [comname] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setComname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->comname !== $v) {
            $this->comname = $v;
            $this->modifiedColumns[] = WpreferencesPeer::COMNAME;
        }


        return $this;
    } // setComname()

    /**
     * Set the value of [pictures] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setPictures($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pictures !== $v) {
            $this->pictures = $v;
            $this->modifiedColumns[] = WpreferencesPeer::PICTURES;
        }


        return $this;
    } // setPictures()

    /**
     * Set the value of [tag/recapture] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setTagrecapture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tag/recapture !== $v) {
            $this->tag/recapture = $v;
            $this->modifiedColumns[] = WpreferencesPeer::TAG/RECAPTURE;
        }


        return $this;
    } // setTagrecapture()

    /**
     * Set the value of [conservation] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setConservation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->conservation !== $v) {
            $this->conservation = $v;
            $this->modifiedColumns[] = WpreferencesPeer::CONSERVATION;
        }


        return $this;
    } // setConservation()

    /**
     * Set the value of [checklist] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setChecklist($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->checklist !== $v) {
            $this->checklist = $v;
            $this->modifiedColumns[] = WpreferencesPeer::CHECKLIST;
        }


        return $this;
    } // setChecklist()

    /**
     * Set the value of [isbn] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setIsbn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->isbn !== $v) {
            $this->isbn = $v;
            $this->modifiedColumns[] = WpreferencesPeer::ISBN;
        }


        return $this;
    } // setIsbn()

    /**
     * Set the value of [authoremail] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setAuthoremail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->authoremail !== $v) {
            $this->authoremail = $v;
            $this->modifiedColumns[] = WpreferencesPeer::AUTHOREMAIL;
        }


        return $this;
    } // setAuthoremail()

    /**
     * Set the value of [authoradress] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setAuthoradress($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->authoradress !== $v) {
            $this->authoradress = $v;
            $this->modifiedColumns[] = WpreferencesPeer::AUTHORADRESS;
        }


        return $this;
    } // setAuthoradress()

    /**
     * Set the value of [authoradress2] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setAuthoradress2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->authoradress2 !== $v) {
            $this->authoradress2 = $v;
            $this->modifiedColumns[] = WpreferencesPeer::AUTHORADRESS2;
        }


        return $this;
    } // setAuthoradress2()

    /**
     * Set the value of [pdffile] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setPdffile($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pdffile !== $v) {
            $this->pdffile = $v;
            $this->modifiedColumns[] = WpreferencesPeer::PDFFILE;
        }


        return $this;
    } // setPdffile()

    /**
     * Set the value of [dp] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setDp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dp !== $v) {
            $this->dp = $v;
            $this->modifiedColumns[] = WpreferencesPeer::DP;
        }


        return $this;
    } // setDp()

    /**
     * Set the value of [rf] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setRf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rf !== $v) {
            $this->rf = $v;
            $this->modifiedColumns[] = WpreferencesPeer::RF;
        }


        return $this;
    } // setRf()

    /**
     * Set the value of [rde] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setRde($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rde !== $v) {
            $this->rde = $v;
            $this->modifiedColumns[] = WpreferencesPeer::RDE;
        }


        return $this;
    } // setRde()

    /**
     * Set the value of [used] column.
     *
     * @param  string $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setUsed($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->used !== $v) {
            $this->used = $v;
            $this->modifiedColumns[] = WpreferencesPeer::USED;
        }


        return $this;
    } // setUsed()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = WpreferencesPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = WpreferencesPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = WpreferencesPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = WpreferencesPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = WpreferencesPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = WpreferencesPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [borrower] column.
     *
     * @param  int $v new value
     * @return Wpreferences The current object (for fluent API support)
     */
    public function setBorrower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->borrower !== $v) {
            $this->borrower = $v;
            $this->modifiedColumns[] = WpreferencesPeer::BORROWER;
        }


        return $this;
    } // setBorrower()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->refno !== 0) {
                return false;
            }

        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->refno = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->title = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->topic = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->subtopic = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->author = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->wp = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->source = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->year = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->paperurl = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->incpub = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->pubstat = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->annotation = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->nametype = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->sourceunique = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->firstauthor = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->pagestart = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->pageend = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->pagecount = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->language = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->complete = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->reftype = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->keywords = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->otherkeywords = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->remarks = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->crossref1 = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->crossref2 = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->crossref3 = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->crossref4 = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->crossref5 = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->abstract = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->citation = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->team = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->availiclarm2 = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->availiclarm = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->aquarium = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->processing = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->comname = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->pictures = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->tag/recapture = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->conservation = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->checklist = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->isbn = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->authoremail = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->authoradress = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->authoradress2 = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->pdffile = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->dp = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->rf = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->rde = ($row[$startcol + 48] !== null) ? (int) $row[$startcol + 48] : null;
            $this->used = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->entered = ($row[$startcol + 50] !== null) ? (int) $row[$startcol + 50] : null;
            $this->dateentered = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->modified = ($row[$startcol + 52] !== null) ? (int) $row[$startcol + 52] : null;
            $this->datemodified = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->expert = ($row[$startcol + 54] !== null) ? (int) $row[$startcol + 54] : null;
            $this->datechecked = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->borrower = ($row[$startcol + 56] !== null) ? (int) $row[$startcol + 56] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 57; // 57 = WpreferencesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Wpreferences object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(WpreferencesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = WpreferencesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(WpreferencesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = WpreferencesQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(WpreferencesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                WpreferencesPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(WpreferencesPeer::REFNO)) {
            $modifiedColumns[':p' . $index++]  = '`RefNo`';
        }
        if ($this->isColumnModified(WpreferencesPeer::TITLE)) {
            $modifiedColumns[':p' . $index++]  = '`Title`';
        }
        if ($this->isColumnModified(WpreferencesPeer::TOPIC)) {
            $modifiedColumns[':p' . $index++]  = '`Topic`';
        }
        if ($this->isColumnModified(WpreferencesPeer::SUBTOPIC)) {
            $modifiedColumns[':p' . $index++]  = '`SubTopic`';
        }
        if ($this->isColumnModified(WpreferencesPeer::AUTHOR)) {
            $modifiedColumns[':p' . $index++]  = '`Author`';
        }
        if ($this->isColumnModified(WpreferencesPeer::WP)) {
            $modifiedColumns[':p' . $index++]  = '`WP`';
        }
        if ($this->isColumnModified(WpreferencesPeer::SOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`Source`';
        }
        if ($this->isColumnModified(WpreferencesPeer::YEAR)) {
            $modifiedColumns[':p' . $index++]  = '`Year`';
        }
        if ($this->isColumnModified(WpreferencesPeer::PAPERURL)) {
            $modifiedColumns[':p' . $index++]  = '`PaperURL`';
        }
        if ($this->isColumnModified(WpreferencesPeer::INCPUB)) {
            $modifiedColumns[':p' . $index++]  = '`IncPub`';
        }
        if ($this->isColumnModified(WpreferencesPeer::PUBSTAT)) {
            $modifiedColumns[':p' . $index++]  = '`PubStat`';
        }
        if ($this->isColumnModified(WpreferencesPeer::ANNOTATION)) {
            $modifiedColumns[':p' . $index++]  = '`Annotation`';
        }
        if ($this->isColumnModified(WpreferencesPeer::NAMETYPE)) {
            $modifiedColumns[':p' . $index++]  = '`NameType`';
        }
        if ($this->isColumnModified(WpreferencesPeer::SOURCEUNIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`SourceUnique`';
        }
        if ($this->isColumnModified(WpreferencesPeer::FIRSTAUTHOR)) {
            $modifiedColumns[':p' . $index++]  = '`FirstAuthor`';
        }
        if ($this->isColumnModified(WpreferencesPeer::PAGESTART)) {
            $modifiedColumns[':p' . $index++]  = '`PageStart`';
        }
        if ($this->isColumnModified(WpreferencesPeer::PAGEEND)) {
            $modifiedColumns[':p' . $index++]  = '`PageEnd`';
        }
        if ($this->isColumnModified(WpreferencesPeer::PAGECOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`PageCount`';
        }
        if ($this->isColumnModified(WpreferencesPeer::LANGUAGE)) {
            $modifiedColumns[':p' . $index++]  = '`Language`';
        }
        if ($this->isColumnModified(WpreferencesPeer::COMPLETE)) {
            $modifiedColumns[':p' . $index++]  = '`Complete`';
        }
        if ($this->isColumnModified(WpreferencesPeer::REFTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`RefType`';
        }
        if ($this->isColumnModified(WpreferencesPeer::KEYWORDS)) {
            $modifiedColumns[':p' . $index++]  = '`Keywords`';
        }
        if ($this->isColumnModified(WpreferencesPeer::OTHERKEYWORDS)) {
            $modifiedColumns[':p' . $index++]  = '`OtherKeywords`';
        }
        if ($this->isColumnModified(WpreferencesPeer::REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`Remarks`';
        }
        if ($this->isColumnModified(WpreferencesPeer::CROSSREF1)) {
            $modifiedColumns[':p' . $index++]  = '`CrossRef1`';
        }
        if ($this->isColumnModified(WpreferencesPeer::CROSSREF2)) {
            $modifiedColumns[':p' . $index++]  = '`CrossRef2`';
        }
        if ($this->isColumnModified(WpreferencesPeer::CROSSREF3)) {
            $modifiedColumns[':p' . $index++]  = '`CrossRef3`';
        }
        if ($this->isColumnModified(WpreferencesPeer::CROSSREF4)) {
            $modifiedColumns[':p' . $index++]  = '`CrossRef4`';
        }
        if ($this->isColumnModified(WpreferencesPeer::CROSSREF5)) {
            $modifiedColumns[':p' . $index++]  = '`CrossRef5`';
        }
        if ($this->isColumnModified(WpreferencesPeer::ABZTRACT)) {
            $modifiedColumns[':p' . $index++]  = '`Abstract`';
        }
        if ($this->isColumnModified(WpreferencesPeer::CITATION)) {
            $modifiedColumns[':p' . $index++]  = '`Citation`';
        }
        if ($this->isColumnModified(WpreferencesPeer::TEAM)) {
            $modifiedColumns[':p' . $index++]  = '`Team`';
        }
        if ($this->isColumnModified(WpreferencesPeer::AVAILICLARM2)) {
            $modifiedColumns[':p' . $index++]  = '`AvailIclarm2`';
        }
        if ($this->isColumnModified(WpreferencesPeer::AVAILICLARM)) {
            $modifiedColumns[':p' . $index++]  = '`AvailIclarm`';
        }
        if ($this->isColumnModified(WpreferencesPeer::AQUARIUM)) {
            $modifiedColumns[':p' . $index++]  = '`Aquarium`';
        }
        if ($this->isColumnModified(WpreferencesPeer::PROCESSING)) {
            $modifiedColumns[':p' . $index++]  = '`Processing`';
        }
        if ($this->isColumnModified(WpreferencesPeer::COMNAME)) {
            $modifiedColumns[':p' . $index++]  = '`Comname`';
        }
        if ($this->isColumnModified(WpreferencesPeer::PICTURES)) {
            $modifiedColumns[':p' . $index++]  = '`Pictures`';
        }
        if ($this->isColumnModified(WpreferencesPeer::TAG/RECAPTURE)) {
            $modifiedColumns[':p' . $index++]  = '`Tag/recapture`';
        }
        if ($this->isColumnModified(WpreferencesPeer::CONSERVATION)) {
            $modifiedColumns[':p' . $index++]  = '`Conservation`';
        }
        if ($this->isColumnModified(WpreferencesPeer::CHECKLIST)) {
            $modifiedColumns[':p' . $index++]  = '`Checklist`';
        }
        if ($this->isColumnModified(WpreferencesPeer::ISBN)) {
            $modifiedColumns[':p' . $index++]  = '`ISBN`';
        }
        if ($this->isColumnModified(WpreferencesPeer::AUTHOREMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`AuthorEmail`';
        }
        if ($this->isColumnModified(WpreferencesPeer::AUTHORADRESS)) {
            $modifiedColumns[':p' . $index++]  = '`AuthorAdress`';
        }
        if ($this->isColumnModified(WpreferencesPeer::AUTHORADRESS2)) {
            $modifiedColumns[':p' . $index++]  = '`AuthorAdress2`';
        }
        if ($this->isColumnModified(WpreferencesPeer::PDFFILE)) {
            $modifiedColumns[':p' . $index++]  = '`PdfFile`';
        }
        if ($this->isColumnModified(WpreferencesPeer::DP)) {
            $modifiedColumns[':p' . $index++]  = '`DP`';
        }
        if ($this->isColumnModified(WpreferencesPeer::RF)) {
            $modifiedColumns[':p' . $index++]  = '`RF`';
        }
        if ($this->isColumnModified(WpreferencesPeer::RDE)) {
            $modifiedColumns[':p' . $index++]  = '`RDE`';
        }
        if ($this->isColumnModified(WpreferencesPeer::USED)) {
            $modifiedColumns[':p' . $index++]  = '`Used`';
        }
        if ($this->isColumnModified(WpreferencesPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(WpreferencesPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(WpreferencesPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(WpreferencesPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(WpreferencesPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(WpreferencesPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(WpreferencesPeer::BORROWER)) {
            $modifiedColumns[':p' . $index++]  = '`Borrower`';
        }

        $sql = sprintf(
            'INSERT INTO `wpreferences` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`RefNo`':
                        $stmt->bindValue($identifier, $this->refno, PDO::PARAM_INT);
                        break;
                    case '`Title`':
                        $stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
                        break;
                    case '`Topic`':
                        $stmt->bindValue($identifier, $this->topic, PDO::PARAM_STR);
                        break;
                    case '`SubTopic`':
                        $stmt->bindValue($identifier, $this->subtopic, PDO::PARAM_STR);
                        break;
                    case '`Author`':
                        $stmt->bindValue($identifier, $this->author, PDO::PARAM_STR);
                        break;
                    case '`WP`':
                        $stmt->bindValue($identifier, $this->wp, PDO::PARAM_STR);
                        break;
                    case '`Source`':
                        $stmt->bindValue($identifier, $this->source, PDO::PARAM_STR);
                        break;
                    case '`Year`':
                        $stmt->bindValue($identifier, $this->year, PDO::PARAM_INT);
                        break;
                    case '`PaperURL`':
                        $stmt->bindValue($identifier, $this->paperurl, PDO::PARAM_STR);
                        break;
                    case '`IncPub`':
                        $stmt->bindValue($identifier, $this->incpub, PDO::PARAM_STR);
                        break;
                    case '`PubStat`':
                        $stmt->bindValue($identifier, $this->pubstat, PDO::PARAM_STR);
                        break;
                    case '`Annotation`':
                        $stmt->bindValue($identifier, $this->annotation, PDO::PARAM_STR);
                        break;
                    case '`NameType`':
                        $stmt->bindValue($identifier, $this->nametype, PDO::PARAM_STR);
                        break;
                    case '`SourceUnique`':
                        $stmt->bindValue($identifier, $this->sourceunique, PDO::PARAM_STR);
                        break;
                    case '`FirstAuthor`':
                        $stmt->bindValue($identifier, $this->firstauthor, PDO::PARAM_STR);
                        break;
                    case '`PageStart`':
                        $stmt->bindValue($identifier, $this->pagestart, PDO::PARAM_INT);
                        break;
                    case '`PageEnd`':
                        $stmt->bindValue($identifier, $this->pageend, PDO::PARAM_INT);
                        break;
                    case '`PageCount`':
                        $stmt->bindValue($identifier, $this->pagecount, PDO::PARAM_INT);
                        break;
                    case '`Language`':
                        $stmt->bindValue($identifier, $this->language, PDO::PARAM_STR);
                        break;
                    case '`Complete`':
                        $stmt->bindValue($identifier, $this->complete, PDO::PARAM_INT);
                        break;
                    case '`RefType`':
                        $stmt->bindValue($identifier, $this->reftype, PDO::PARAM_STR);
                        break;
                    case '`Keywords`':
                        $stmt->bindValue($identifier, $this->keywords, PDO::PARAM_STR);
                        break;
                    case '`OtherKeywords`':
                        $stmt->bindValue($identifier, $this->otherkeywords, PDO::PARAM_STR);
                        break;
                    case '`Remarks`':
                        $stmt->bindValue($identifier, $this->remarks, PDO::PARAM_STR);
                        break;
                    case '`CrossRef1`':
                        $stmt->bindValue($identifier, $this->crossref1, PDO::PARAM_INT);
                        break;
                    case '`CrossRef2`':
                        $stmt->bindValue($identifier, $this->crossref2, PDO::PARAM_INT);
                        break;
                    case '`CrossRef3`':
                        $stmt->bindValue($identifier, $this->crossref3, PDO::PARAM_INT);
                        break;
                    case '`CrossRef4`':
                        $stmt->bindValue($identifier, $this->crossref4, PDO::PARAM_INT);
                        break;
                    case '`CrossRef5`':
                        $stmt->bindValue($identifier, $this->crossref5, PDO::PARAM_INT);
                        break;
                    case '`Abstract`':
                        $stmt->bindValue($identifier, $this->abstract, PDO::PARAM_STR);
                        break;
                    case '`Citation`':
                        $stmt->bindValue($identifier, $this->citation, PDO::PARAM_INT);
                        break;
                    case '`Team`':
                        $stmt->bindValue($identifier, $this->team, PDO::PARAM_INT);
                        break;
                    case '`AvailIclarm2`':
                        $stmt->bindValue($identifier, $this->availiclarm2, PDO::PARAM_INT);
                        break;
                    case '`AvailIclarm`':
                        $stmt->bindValue($identifier, $this->availiclarm, PDO::PARAM_INT);
                        break;
                    case '`Aquarium`':
                        $stmt->bindValue($identifier, $this->aquarium, PDO::PARAM_INT);
                        break;
                    case '`Processing`':
                        $stmt->bindValue($identifier, $this->processing, PDO::PARAM_INT);
                        break;
                    case '`Comname`':
                        $stmt->bindValue($identifier, $this->comname, PDO::PARAM_INT);
                        break;
                    case '`Pictures`':
                        $stmt->bindValue($identifier, $this->pictures, PDO::PARAM_INT);
                        break;
                    case '`Tag/recapture`':
                        $stmt->bindValue($identifier, $this->tag/recapture, PDO::PARAM_INT);
                        break;
                    case '`Conservation`':
                        $stmt->bindValue($identifier, $this->conservation, PDO::PARAM_INT);
                        break;
                    case '`Checklist`':
                        $stmt->bindValue($identifier, $this->checklist, PDO::PARAM_INT);
                        break;
                    case '`ISBN`':
                        $stmt->bindValue($identifier, $this->isbn, PDO::PARAM_STR);
                        break;
                    case '`AuthorEmail`':
                        $stmt->bindValue($identifier, $this->authoremail, PDO::PARAM_STR);
                        break;
                    case '`AuthorAdress`':
                        $stmt->bindValue($identifier, $this->authoradress, PDO::PARAM_STR);
                        break;
                    case '`AuthorAdress2`':
                        $stmt->bindValue($identifier, $this->authoradress2, PDO::PARAM_STR);
                        break;
                    case '`PdfFile`':
                        $stmt->bindValue($identifier, $this->pdffile, PDO::PARAM_STR);
                        break;
                    case '`DP`':
                        $stmt->bindValue($identifier, $this->dp, PDO::PARAM_INT);
                        break;
                    case '`RF`':
                        $stmt->bindValue($identifier, $this->rf, PDO::PARAM_INT);
                        break;
                    case '`RDE`':
                        $stmt->bindValue($identifier, $this->rde, PDO::PARAM_INT);
                        break;
                    case '`Used`':
                        $stmt->bindValue($identifier, $this->used, PDO::PARAM_STR);
                        break;
                    case '`Entered`':
                        $stmt->bindValue($identifier, $this->entered, PDO::PARAM_INT);
                        break;
                    case '`DateEntered`':
                        $stmt->bindValue($identifier, $this->dateentered, PDO::PARAM_STR);
                        break;
                    case '`Modified`':
                        $stmt->bindValue($identifier, $this->modified, PDO::PARAM_INT);
                        break;
                    case '`DateModified`':
                        $stmt->bindValue($identifier, $this->datemodified, PDO::PARAM_STR);
                        break;
                    case '`Expert`':
                        $stmt->bindValue($identifier, $this->expert, PDO::PARAM_INT);
                        break;
                    case '`DateChecked`':
                        $stmt->bindValue($identifier, $this->datechecked, PDO::PARAM_STR);
                        break;
                    case '`Borrower`':
                        $stmt->bindValue($identifier, $this->borrower, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = WpreferencesPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = WpreferencesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getRefno();
                break;
            case 1:
                return $this->getTitle();
                break;
            case 2:
                return $this->getTopic();
                break;
            case 3:
                return $this->getSubtopic();
                break;
            case 4:
                return $this->getAuthor();
                break;
            case 5:
                return $this->getWp();
                break;
            case 6:
                return $this->getSource();
                break;
            case 7:
                return $this->getYear();
                break;
            case 8:
                return $this->getPaperurl();
                break;
            case 9:
                return $this->getIncpub();
                break;
            case 10:
                return $this->getPubstat();
                break;
            case 11:
                return $this->getAnnotation();
                break;
            case 12:
                return $this->getNametype();
                break;
            case 13:
                return $this->getSourceunique();
                break;
            case 14:
                return $this->getFirstauthor();
                break;
            case 15:
                return $this->getPagestart();
                break;
            case 16:
                return $this->getPageend();
                break;
            case 17:
                return $this->getPagecount();
                break;
            case 18:
                return $this->getLanguage();
                break;
            case 19:
                return $this->getComplete();
                break;
            case 20:
                return $this->getReftype();
                break;
            case 21:
                return $this->getKeywords();
                break;
            case 22:
                return $this->getOtherkeywords();
                break;
            case 23:
                return $this->getRemarks();
                break;
            case 24:
                return $this->getCrossref1();
                break;
            case 25:
                return $this->getCrossref2();
                break;
            case 26:
                return $this->getCrossref3();
                break;
            case 27:
                return $this->getCrossref4();
                break;
            case 28:
                return $this->getCrossref5();
                break;
            case 29:
                return $this->getAbstract();
                break;
            case 30:
                return $this->getCitation();
                break;
            case 31:
                return $this->getTeam();
                break;
            case 32:
                return $this->getAvailiclarm2();
                break;
            case 33:
                return $this->getAvailiclarm();
                break;
            case 34:
                return $this->getAquarium();
                break;
            case 35:
                return $this->getProcessing();
                break;
            case 36:
                return $this->getComname();
                break;
            case 37:
                return $this->getPictures();
                break;
            case 38:
                return $this->getTagrecapture();
                break;
            case 39:
                return $this->getConservation();
                break;
            case 40:
                return $this->getChecklist();
                break;
            case 41:
                return $this->getIsbn();
                break;
            case 42:
                return $this->getAuthoremail();
                break;
            case 43:
                return $this->getAuthoradress();
                break;
            case 44:
                return $this->getAuthoradress2();
                break;
            case 45:
                return $this->getPdffile();
                break;
            case 46:
                return $this->getDp();
                break;
            case 47:
                return $this->getRf();
                break;
            case 48:
                return $this->getRde();
                break;
            case 49:
                return $this->getUsed();
                break;
            case 50:
                return $this->getEntered();
                break;
            case 51:
                return $this->getDateentered();
                break;
            case 52:
                return $this->getModified();
                break;
            case 53:
                return $this->getDatemodified();
                break;
            case 54:
                return $this->getExpert();
                break;
            case 55:
                return $this->getDatechecked();
                break;
            case 56:
                return $this->getBorrower();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['Wpreferences'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Wpreferences'][$this->getPrimaryKey()] = true;
        $keys = WpreferencesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRefno(),
            $keys[1] => $this->getTitle(),
            $keys[2] => $this->getTopic(),
            $keys[3] => $this->getSubtopic(),
            $keys[4] => $this->getAuthor(),
            $keys[5] => $this->getWp(),
            $keys[6] => $this->getSource(),
            $keys[7] => $this->getYear(),
            $keys[8] => $this->getPaperurl(),
            $keys[9] => $this->getIncpub(),
            $keys[10] => $this->getPubstat(),
            $keys[11] => $this->getAnnotation(),
            $keys[12] => $this->getNametype(),
            $keys[13] => $this->getSourceunique(),
            $keys[14] => $this->getFirstauthor(),
            $keys[15] => $this->getPagestart(),
            $keys[16] => $this->getPageend(),
            $keys[17] => $this->getPagecount(),
            $keys[18] => $this->getLanguage(),
            $keys[19] => $this->getComplete(),
            $keys[20] => $this->getReftype(),
            $keys[21] => $this->getKeywords(),
            $keys[22] => $this->getOtherkeywords(),
            $keys[23] => $this->getRemarks(),
            $keys[24] => $this->getCrossref1(),
            $keys[25] => $this->getCrossref2(),
            $keys[26] => $this->getCrossref3(),
            $keys[27] => $this->getCrossref4(),
            $keys[28] => $this->getCrossref5(),
            $keys[29] => $this->getAbstract(),
            $keys[30] => $this->getCitation(),
            $keys[31] => $this->getTeam(),
            $keys[32] => $this->getAvailiclarm2(),
            $keys[33] => $this->getAvailiclarm(),
            $keys[34] => $this->getAquarium(),
            $keys[35] => $this->getProcessing(),
            $keys[36] => $this->getComname(),
            $keys[37] => $this->getPictures(),
            $keys[38] => $this->getTagrecapture(),
            $keys[39] => $this->getConservation(),
            $keys[40] => $this->getChecklist(),
            $keys[41] => $this->getIsbn(),
            $keys[42] => $this->getAuthoremail(),
            $keys[43] => $this->getAuthoradress(),
            $keys[44] => $this->getAuthoradress2(),
            $keys[45] => $this->getPdffile(),
            $keys[46] => $this->getDp(),
            $keys[47] => $this->getRf(),
            $keys[48] => $this->getRde(),
            $keys[49] => $this->getUsed(),
            $keys[50] => $this->getEntered(),
            $keys[51] => $this->getDateentered(),
            $keys[52] => $this->getModified(),
            $keys[53] => $this->getDatemodified(),
            $keys[54] => $this->getExpert(),
            $keys[55] => $this->getDatechecked(),
            $keys[56] => $this->getBorrower(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }


        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = WpreferencesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setRefno($value);
                break;
            case 1:
                $this->setTitle($value);
                break;
            case 2:
                $this->setTopic($value);
                break;
            case 3:
                $this->setSubtopic($value);
                break;
            case 4:
                $this->setAuthor($value);
                break;
            case 5:
                $this->setWp($value);
                break;
            case 6:
                $this->setSource($value);
                break;
            case 7:
                $this->setYear($value);
                break;
            case 8:
                $this->setPaperurl($value);
                break;
            case 9:
                $this->setIncpub($value);
                break;
            case 10:
                $this->setPubstat($value);
                break;
            case 11:
                $this->setAnnotation($value);
                break;
            case 12:
                $this->setNametype($value);
                break;
            case 13:
                $this->setSourceunique($value);
                break;
            case 14:
                $this->setFirstauthor($value);
                break;
            case 15:
                $this->setPagestart($value);
                break;
            case 16:
                $this->setPageend($value);
                break;
            case 17:
                $this->setPagecount($value);
                break;
            case 18:
                $this->setLanguage($value);
                break;
            case 19:
                $this->setComplete($value);
                break;
            case 20:
                $this->setReftype($value);
                break;
            case 21:
                $this->setKeywords($value);
                break;
            case 22:
                $this->setOtherkeywords($value);
                break;
            case 23:
                $this->setRemarks($value);
                break;
            case 24:
                $this->setCrossref1($value);
                break;
            case 25:
                $this->setCrossref2($value);
                break;
            case 26:
                $this->setCrossref3($value);
                break;
            case 27:
                $this->setCrossref4($value);
                break;
            case 28:
                $this->setCrossref5($value);
                break;
            case 29:
                $this->setAbstract($value);
                break;
            case 30:
                $this->setCitation($value);
                break;
            case 31:
                $this->setTeam($value);
                break;
            case 32:
                $this->setAvailiclarm2($value);
                break;
            case 33:
                $this->setAvailiclarm($value);
                break;
            case 34:
                $this->setAquarium($value);
                break;
            case 35:
                $this->setProcessing($value);
                break;
            case 36:
                $this->setComname($value);
                break;
            case 37:
                $this->setPictures($value);
                break;
            case 38:
                $this->setTagrecapture($value);
                break;
            case 39:
                $this->setConservation($value);
                break;
            case 40:
                $this->setChecklist($value);
                break;
            case 41:
                $this->setIsbn($value);
                break;
            case 42:
                $this->setAuthoremail($value);
                break;
            case 43:
                $this->setAuthoradress($value);
                break;
            case 44:
                $this->setAuthoradress2($value);
                break;
            case 45:
                $this->setPdffile($value);
                break;
            case 46:
                $this->setDp($value);
                break;
            case 47:
                $this->setRf($value);
                break;
            case 48:
                $this->setRde($value);
                break;
            case 49:
                $this->setUsed($value);
                break;
            case 50:
                $this->setEntered($value);
                break;
            case 51:
                $this->setDateentered($value);
                break;
            case 52:
                $this->setModified($value);
                break;
            case 53:
                $this->setDatemodified($value);
                break;
            case 54:
                $this->setExpert($value);
                break;
            case 55:
                $this->setDatechecked($value);
                break;
            case 56:
                $this->setBorrower($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = WpreferencesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRefno($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setTitle($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setTopic($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSubtopic($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAuthor($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setWp($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSource($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setYear($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPaperurl($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setIncpub($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPubstat($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAnnotation($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNametype($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setSourceunique($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setFirstauthor($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setPagestart($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setPageend($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setPagecount($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setLanguage($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setComplete($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setReftype($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setKeywords($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setOtherkeywords($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setRemarks($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setCrossref1($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setCrossref2($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setCrossref3($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setCrossref4($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setCrossref5($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setAbstract($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setCitation($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setTeam($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setAvailiclarm2($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setAvailiclarm($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setAquarium($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setProcessing($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setComname($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setPictures($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setTagrecapture($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setConservation($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setChecklist($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setIsbn($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setAuthoremail($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setAuthoradress($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setAuthoradress2($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setPdffile($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setDp($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setRf($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setRde($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setUsed($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setEntered($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setDateentered($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setModified($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setDatemodified($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setExpert($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setDatechecked($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setBorrower($arr[$keys[56]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(WpreferencesPeer::DATABASE_NAME);

        if ($this->isColumnModified(WpreferencesPeer::REFNO)) $criteria->add(WpreferencesPeer::REFNO, $this->refno);
        if ($this->isColumnModified(WpreferencesPeer::TITLE)) $criteria->add(WpreferencesPeer::TITLE, $this->title);
        if ($this->isColumnModified(WpreferencesPeer::TOPIC)) $criteria->add(WpreferencesPeer::TOPIC, $this->topic);
        if ($this->isColumnModified(WpreferencesPeer::SUBTOPIC)) $criteria->add(WpreferencesPeer::SUBTOPIC, $this->subtopic);
        if ($this->isColumnModified(WpreferencesPeer::AUTHOR)) $criteria->add(WpreferencesPeer::AUTHOR, $this->author);
        if ($this->isColumnModified(WpreferencesPeer::WP)) $criteria->add(WpreferencesPeer::WP, $this->wp);
        if ($this->isColumnModified(WpreferencesPeer::SOURCE)) $criteria->add(WpreferencesPeer::SOURCE, $this->source);
        if ($this->isColumnModified(WpreferencesPeer::YEAR)) $criteria->add(WpreferencesPeer::YEAR, $this->year);
        if ($this->isColumnModified(WpreferencesPeer::PAPERURL)) $criteria->add(WpreferencesPeer::PAPERURL, $this->paperurl);
        if ($this->isColumnModified(WpreferencesPeer::INCPUB)) $criteria->add(WpreferencesPeer::INCPUB, $this->incpub);
        if ($this->isColumnModified(WpreferencesPeer::PUBSTAT)) $criteria->add(WpreferencesPeer::PUBSTAT, $this->pubstat);
        if ($this->isColumnModified(WpreferencesPeer::ANNOTATION)) $criteria->add(WpreferencesPeer::ANNOTATION, $this->annotation);
        if ($this->isColumnModified(WpreferencesPeer::NAMETYPE)) $criteria->add(WpreferencesPeer::NAMETYPE, $this->nametype);
        if ($this->isColumnModified(WpreferencesPeer::SOURCEUNIQUE)) $criteria->add(WpreferencesPeer::SOURCEUNIQUE, $this->sourceunique);
        if ($this->isColumnModified(WpreferencesPeer::FIRSTAUTHOR)) $criteria->add(WpreferencesPeer::FIRSTAUTHOR, $this->firstauthor);
        if ($this->isColumnModified(WpreferencesPeer::PAGESTART)) $criteria->add(WpreferencesPeer::PAGESTART, $this->pagestart);
        if ($this->isColumnModified(WpreferencesPeer::PAGEEND)) $criteria->add(WpreferencesPeer::PAGEEND, $this->pageend);
        if ($this->isColumnModified(WpreferencesPeer::PAGECOUNT)) $criteria->add(WpreferencesPeer::PAGECOUNT, $this->pagecount);
        if ($this->isColumnModified(WpreferencesPeer::LANGUAGE)) $criteria->add(WpreferencesPeer::LANGUAGE, $this->language);
        if ($this->isColumnModified(WpreferencesPeer::COMPLETE)) $criteria->add(WpreferencesPeer::COMPLETE, $this->complete);
        if ($this->isColumnModified(WpreferencesPeer::REFTYPE)) $criteria->add(WpreferencesPeer::REFTYPE, $this->reftype);
        if ($this->isColumnModified(WpreferencesPeer::KEYWORDS)) $criteria->add(WpreferencesPeer::KEYWORDS, $this->keywords);
        if ($this->isColumnModified(WpreferencesPeer::OTHERKEYWORDS)) $criteria->add(WpreferencesPeer::OTHERKEYWORDS, $this->otherkeywords);
        if ($this->isColumnModified(WpreferencesPeer::REMARKS)) $criteria->add(WpreferencesPeer::REMARKS, $this->remarks);
        if ($this->isColumnModified(WpreferencesPeer::CROSSREF1)) $criteria->add(WpreferencesPeer::CROSSREF1, $this->crossref1);
        if ($this->isColumnModified(WpreferencesPeer::CROSSREF2)) $criteria->add(WpreferencesPeer::CROSSREF2, $this->crossref2);
        if ($this->isColumnModified(WpreferencesPeer::CROSSREF3)) $criteria->add(WpreferencesPeer::CROSSREF3, $this->crossref3);
        if ($this->isColumnModified(WpreferencesPeer::CROSSREF4)) $criteria->add(WpreferencesPeer::CROSSREF4, $this->crossref4);
        if ($this->isColumnModified(WpreferencesPeer::CROSSREF5)) $criteria->add(WpreferencesPeer::CROSSREF5, $this->crossref5);
        if ($this->isColumnModified(WpreferencesPeer::ABZTRACT)) $criteria->add(WpreferencesPeer::ABZTRACT, $this->abstract);
        if ($this->isColumnModified(WpreferencesPeer::CITATION)) $criteria->add(WpreferencesPeer::CITATION, $this->citation);
        if ($this->isColumnModified(WpreferencesPeer::TEAM)) $criteria->add(WpreferencesPeer::TEAM, $this->team);
        if ($this->isColumnModified(WpreferencesPeer::AVAILICLARM2)) $criteria->add(WpreferencesPeer::AVAILICLARM2, $this->availiclarm2);
        if ($this->isColumnModified(WpreferencesPeer::AVAILICLARM)) $criteria->add(WpreferencesPeer::AVAILICLARM, $this->availiclarm);
        if ($this->isColumnModified(WpreferencesPeer::AQUARIUM)) $criteria->add(WpreferencesPeer::AQUARIUM, $this->aquarium);
        if ($this->isColumnModified(WpreferencesPeer::PROCESSING)) $criteria->add(WpreferencesPeer::PROCESSING, $this->processing);
        if ($this->isColumnModified(WpreferencesPeer::COMNAME)) $criteria->add(WpreferencesPeer::COMNAME, $this->comname);
        if ($this->isColumnModified(WpreferencesPeer::PICTURES)) $criteria->add(WpreferencesPeer::PICTURES, $this->pictures);
        if ($this->isColumnModified(WpreferencesPeer::TAG/RECAPTURE)) $criteria->add(WpreferencesPeer::TAG/RECAPTURE, $this->tag/recapture);
        if ($this->isColumnModified(WpreferencesPeer::CONSERVATION)) $criteria->add(WpreferencesPeer::CONSERVATION, $this->conservation);
        if ($this->isColumnModified(WpreferencesPeer::CHECKLIST)) $criteria->add(WpreferencesPeer::CHECKLIST, $this->checklist);
        if ($this->isColumnModified(WpreferencesPeer::ISBN)) $criteria->add(WpreferencesPeer::ISBN, $this->isbn);
        if ($this->isColumnModified(WpreferencesPeer::AUTHOREMAIL)) $criteria->add(WpreferencesPeer::AUTHOREMAIL, $this->authoremail);
        if ($this->isColumnModified(WpreferencesPeer::AUTHORADRESS)) $criteria->add(WpreferencesPeer::AUTHORADRESS, $this->authoradress);
        if ($this->isColumnModified(WpreferencesPeer::AUTHORADRESS2)) $criteria->add(WpreferencesPeer::AUTHORADRESS2, $this->authoradress2);
        if ($this->isColumnModified(WpreferencesPeer::PDFFILE)) $criteria->add(WpreferencesPeer::PDFFILE, $this->pdffile);
        if ($this->isColumnModified(WpreferencesPeer::DP)) $criteria->add(WpreferencesPeer::DP, $this->dp);
        if ($this->isColumnModified(WpreferencesPeer::RF)) $criteria->add(WpreferencesPeer::RF, $this->rf);
        if ($this->isColumnModified(WpreferencesPeer::RDE)) $criteria->add(WpreferencesPeer::RDE, $this->rde);
        if ($this->isColumnModified(WpreferencesPeer::USED)) $criteria->add(WpreferencesPeer::USED, $this->used);
        if ($this->isColumnModified(WpreferencesPeer::ENTERED)) $criteria->add(WpreferencesPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(WpreferencesPeer::DATEENTERED)) $criteria->add(WpreferencesPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(WpreferencesPeer::MODIFIED)) $criteria->add(WpreferencesPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(WpreferencesPeer::DATEMODIFIED)) $criteria->add(WpreferencesPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(WpreferencesPeer::EXPERT)) $criteria->add(WpreferencesPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(WpreferencesPeer::DATECHECKED)) $criteria->add(WpreferencesPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(WpreferencesPeer::BORROWER)) $criteria->add(WpreferencesPeer::BORROWER, $this->borrower);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(WpreferencesPeer::DATABASE_NAME);
        $criteria->add(WpreferencesPeer::REFNO, $this->refno);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getRefno();
    }

    /**
     * Generic method to set the primary key (refno column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setRefno($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getRefno();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Wpreferences (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setTitle($this->getTitle());
        $copyObj->setTopic($this->getTopic());
        $copyObj->setSubtopic($this->getSubtopic());
        $copyObj->setAuthor($this->getAuthor());
        $copyObj->setWp($this->getWp());
        $copyObj->setSource($this->getSource());
        $copyObj->setYear($this->getYear());
        $copyObj->setPaperurl($this->getPaperurl());
        $copyObj->setIncpub($this->getIncpub());
        $copyObj->setPubstat($this->getPubstat());
        $copyObj->setAnnotation($this->getAnnotation());
        $copyObj->setNametype($this->getNametype());
        $copyObj->setSourceunique($this->getSourceunique());
        $copyObj->setFirstauthor($this->getFirstauthor());
        $copyObj->setPagestart($this->getPagestart());
        $copyObj->setPageend($this->getPageend());
        $copyObj->setPagecount($this->getPagecount());
        $copyObj->setLanguage($this->getLanguage());
        $copyObj->setComplete($this->getComplete());
        $copyObj->setReftype($this->getReftype());
        $copyObj->setKeywords($this->getKeywords());
        $copyObj->setOtherkeywords($this->getOtherkeywords());
        $copyObj->setRemarks($this->getRemarks());
        $copyObj->setCrossref1($this->getCrossref1());
        $copyObj->setCrossref2($this->getCrossref2());
        $copyObj->setCrossref3($this->getCrossref3());
        $copyObj->setCrossref4($this->getCrossref4());
        $copyObj->setCrossref5($this->getCrossref5());
        $copyObj->setAbstract($this->getAbstract());
        $copyObj->setCitation($this->getCitation());
        $copyObj->setTeam($this->getTeam());
        $copyObj->setAvailiclarm2($this->getAvailiclarm2());
        $copyObj->setAvailiclarm($this->getAvailiclarm());
        $copyObj->setAquarium($this->getAquarium());
        $copyObj->setProcessing($this->getProcessing());
        $copyObj->setComname($this->getComname());
        $copyObj->setPictures($this->getPictures());
        $copyObj->setTagrecapture($this->getTagrecapture());
        $copyObj->setConservation($this->getConservation());
        $copyObj->setChecklist($this->getChecklist());
        $copyObj->setIsbn($this->getIsbn());
        $copyObj->setAuthoremail($this->getAuthoremail());
        $copyObj->setAuthoradress($this->getAuthoradress());
        $copyObj->setAuthoradress2($this->getAuthoradress2());
        $copyObj->setPdffile($this->getPdffile());
        $copyObj->setDp($this->getDp());
        $copyObj->setRf($this->getRf());
        $copyObj->setRde($this->getRde());
        $copyObj->setUsed($this->getUsed());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setBorrower($this->getBorrower());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setRefno('0'); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Wpreferences Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return WpreferencesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new WpreferencesPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->refno = null;
        $this->title = null;
        $this->topic = null;
        $this->subtopic = null;
        $this->author = null;
        $this->wp = null;
        $this->source = null;
        $this->year = null;
        $this->paperurl = null;
        $this->incpub = null;
        $this->pubstat = null;
        $this->annotation = null;
        $this->nametype = null;
        $this->sourceunique = null;
        $this->firstauthor = null;
        $this->pagestart = null;
        $this->pageend = null;
        $this->pagecount = null;
        $this->language = null;
        $this->complete = null;
        $this->reftype = null;
        $this->keywords = null;
        $this->otherkeywords = null;
        $this->remarks = null;
        $this->crossref1 = null;
        $this->crossref2 = null;
        $this->crossref3 = null;
        $this->crossref4 = null;
        $this->crossref5 = null;
        $this->abstract = null;
        $this->citation = null;
        $this->team = null;
        $this->availiclarm2 = null;
        $this->availiclarm = null;
        $this->aquarium = null;
        $this->processing = null;
        $this->comname = null;
        $this->pictures = null;
        $this->tag/recapture = null;
        $this->conservation = null;
        $this->checklist = null;
        $this->isbn = null;
        $this->authoremail = null;
        $this->authoradress = null;
        $this->authoradress2 = null;
        $this->pdffile = null;
        $this->dp = null;
        $this->rf = null;
        $this->rde = null;
        $this->used = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->borrower = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(WpreferencesPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
