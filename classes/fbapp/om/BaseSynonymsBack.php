<?php


/**
 * Base class that represents a row from the 'synonyms_back' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseSynonymsBack extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SynonymsBackPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SynonymsBackPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the syncode field.
     * @var        int
     */
    protected $syncode;

    /**
     * The value for the syngenus field.
     * @var        string
     */
    protected $syngenus;

    /**
     * The value for the synspecies field.
     * @var        string
     */
    protected $synspecies;

    /**
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the valid field.
     * @var        int
     */
    protected $valid;

    /**
     * The value for the author field.
     * @var        string
     */
    protected $author;

    /**
     * The value for the year field.
     * @var        int
     */
    protected $year;

    /**
     * The value for the cas_ref_no field.
     * @var        int
     */
    protected $cas_ref_no;

    /**
     * The value for the cas_spc field.
     * @var        int
     */
    protected $cas_spc;

    /**
     * The value for the taxonlevel field.
     * @var        string
     */
    protected $taxonlevel;

    /**
     * The value for the syncodevalid field.
     * @var        int
     */
    protected $syncodevalid;

    /**
     * The value for the lastepithet field.
     * @var        string
     */
    protected $lastepithet;

    /**
     * The value for the status field.
     * @var        string
     */
    protected $status;

    /**
     * The value for the synonymsref field.
     * @var        int
     */
    protected $synonymsref;

    /**
     * The value for the synonymy field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $synonymy;

    /**
     * The value for the synonymydetail field.
     * @var        string
     */
    protected $synonymydetail;

    /**
     * The value for the combination field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $combination;

    /**
     * The value for the misspelling field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $misspelling;

    /**
     * The value for the misspellingdetail field.
     * @var        string
     */
    protected $misspellingdetail;

    /**
     * The value for the validtax field.
     * @var        int
     */
    protected $validtax;

    /**
     * The value for the commenttax field.
     * @var        string
     */
    protected $commenttax;

    /**
     * The value for the originalpub field.
     * @var        string
     */
    protected $originalpub;

    /**
     * The value for the statusorder field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $statusorder;

    /**
     * The value for the ranksearch field.
     * @var        int
     */
    protected $ranksearch;

    /**
     * The value for the gsdoriginal field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $gsdoriginal;

    /**
     * The value for the gsdstatus field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $gsdstatus;

    /**
     * The value for the gsdversiondate field.
     * @var        string
     */
    protected $gsdversiondate;

    /**
     * The value for the gsdexpert field.
     * @var        int
     */
    protected $gsdexpert;

    /**
     * The value for the comment field.
     * @var        string
     */
    protected $comment;

    /**
     * The value for the etymology field.
     * @var        string
     */
    protected $etymology;

    /**
     * The value for the col field.
     * @var        int
     */
    protected $col;

    /**
     * The value for the col_id field.
     * @var        int
     */
    protected $col_id;

    /**
     * The value for the zoobank_id field.
     * @var        int
     */
    protected $zoobank_id;

    /**
     * The value for the ion_id field.
     * @var        int
     */
    protected $ion_id;

    /**
     * The value for the tsn field.
     * @var        int
     */
    protected $tsn;

    /**
     * The value for the worms_id field.
     * @var        int
     */
    protected $worms_id;

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
     * The value for the ts field.
     * @var        string
     */
    protected $ts;

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
        $this->synonymy = '';
        $this->combination = '';
        $this->misspelling = 0;
        $this->statusorder = 0;
        $this->gsdoriginal = 0;
        $this->gsdstatus = 0;
    }

    /**
     * Initializes internal state of BaseSynonymsBack object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [syncode] column value.
     *
     * @return int
     */
    public function getSyncode()
    {

        return $this->syncode;
    }

    /**
     * Get the [syngenus] column value.
     *
     * @return string
     */
    public function getSyngenus()
    {

        return $this->syngenus;
    }

    /**
     * Get the [synspecies] column value.
     *
     * @return string
     */
    public function getSynspecies()
    {

        return $this->synspecies;
    }

    /**
     * Get the [speccode] column value.
     *
     * @return int
     */
    public function getSpeccode()
    {

        return $this->speccode;
    }

    /**
     * Get the [valid] column value.
     *
     * @return int
     */
    public function getValid()
    {

        return $this->valid;
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
     * Get the [year] column value.
     *
     * @return int
     */
    public function getYear()
    {

        return $this->year;
    }

    /**
     * Get the [cas_ref_no] column value.
     *
     * @return int
     */
    public function getCasRefNo()
    {

        return $this->cas_ref_no;
    }

    /**
     * Get the [cas_spc] column value.
     *
     * @return int
     */
    public function getCasSpc()
    {

        return $this->cas_spc;
    }

    /**
     * Get the [taxonlevel] column value.
     *
     * @return string
     */
    public function getTaxonlevel()
    {

        return $this->taxonlevel;
    }

    /**
     * Get the [syncodevalid] column value.
     *
     * @return int
     */
    public function getSyncodevalid()
    {

        return $this->syncodevalid;
    }

    /**
     * Get the [lastepithet] column value.
     *
     * @return string
     */
    public function getLastepithet()
    {

        return $this->lastepithet;
    }

    /**
     * Get the [status] column value.
     *
     * @return string
     */
    public function getStatus()
    {

        return $this->status;
    }

    /**
     * Get the [synonymsref] column value.
     *
     * @return int
     */
    public function getSynonymsref()
    {

        return $this->synonymsref;
    }

    /**
     * Get the [synonymy] column value.
     *
     * @return string
     */
    public function getSynonymy()
    {

        return $this->synonymy;
    }

    /**
     * Get the [synonymydetail] column value.
     *
     * @return string
     */
    public function getSynonymydetail()
    {

        return $this->synonymydetail;
    }

    /**
     * Get the [combination] column value.
     *
     * @return string
     */
    public function getCombination()
    {

        return $this->combination;
    }

    /**
     * Get the [misspelling] column value.
     *
     * @return int
     */
    public function getMisspelling()
    {

        return $this->misspelling;
    }

    /**
     * Get the [misspellingdetail] column value.
     *
     * @return string
     */
    public function getMisspellingdetail()
    {

        return $this->misspellingdetail;
    }

    /**
     * Get the [validtax] column value.
     *
     * @return int
     */
    public function getValidtax()
    {

        return $this->validtax;
    }

    /**
     * Get the [commenttax] column value.
     *
     * @return string
     */
    public function getCommenttax()
    {

        return $this->commenttax;
    }

    /**
     * Get the [originalpub] column value.
     *
     * @return string
     */
    public function getOriginalpub()
    {

        return $this->originalpub;
    }

    /**
     * Get the [statusorder] column value.
     *
     * @return double
     */
    public function getStatusorder()
    {

        return $this->statusorder;
    }

    /**
     * Get the [ranksearch] column value.
     *
     * @return int
     */
    public function getRanksearch()
    {

        return $this->ranksearch;
    }

    /**
     * Get the [gsdoriginal] column value.
     *
     * @return int
     */
    public function getGsdoriginal()
    {

        return $this->gsdoriginal;
    }

    /**
     * Get the [gsdstatus] column value.
     *
     * @return int
     */
    public function getGsdstatus()
    {

        return $this->gsdstatus;
    }

    /**
     * Get the [optionally formatted] temporal [gsdversiondate] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getGsdversiondate($format = 'Y-m-d H:i:s')
    {
        if ($this->gsdversiondate === null) {
            return null;
        }

        if ($this->gsdversiondate === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->gsdversiondate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->gsdversiondate, true), $x);
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
     * Get the [gsdexpert] column value.
     *
     * @return int
     */
    public function getGsdexpert()
    {

        return $this->gsdexpert;
    }

    /**
     * Get the [comment] column value.
     *
     * @return string
     */
    public function getComment()
    {

        return $this->comment;
    }

    /**
     * Get the [etymology] column value.
     *
     * @return string
     */
    public function getEtymology()
    {

        return $this->etymology;
    }

    /**
     * Get the [col] column value.
     *
     * @return int
     */
    public function getCol()
    {

        return $this->col;
    }

    /**
     * Get the [col_id] column value.
     *
     * @return int
     */
    public function getColId()
    {

        return $this->col_id;
    }

    /**
     * Get the [zoobank_id] column value.
     *
     * @return int
     */
    public function getZoobankId()
    {

        return $this->zoobank_id;
    }

    /**
     * Get the [ion_id] column value.
     *
     * @return int
     */
    public function getIonId()
    {

        return $this->ion_id;
    }

    /**
     * Get the [tsn] column value.
     *
     * @return int
     */
    public function getTsn()
    {

        return $this->tsn;
    }

    /**
     * Get the [worms_id] column value.
     *
     * @return int
     */
    public function getWormsId()
    {

        return $this->worms_id;
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
     * Get the [optionally formatted] temporal [ts] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getTs($format = 'Y-m-d H:i:s')
    {
        if ($this->ts === null) {
            return null;
        }

        if ($this->ts === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->ts);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->ts, true), $x);
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
     * Set the value of [syncode] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setSyncode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->syncode !== $v) {
            $this->syncode = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::SYNCODE;
        }


        return $this;
    } // setSyncode()

    /**
     * Set the value of [syngenus] column.
     *
     * @param  string $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setSyngenus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->syngenus !== $v) {
            $this->syngenus = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::SYNGENUS;
        }


        return $this;
    } // setSyngenus()

    /**
     * Set the value of [synspecies] column.
     *
     * @param  string $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setSynspecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->synspecies !== $v) {
            $this->synspecies = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::SYNSPECIES;
        }


        return $this;
    } // setSynspecies()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [valid] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setValid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->valid !== $v) {
            $this->valid = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::VALID;
        }


        return $this;
    } // setValid()

    /**
     * Set the value of [author] column.
     *
     * @param  string $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setAuthor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->author !== $v) {
            $this->author = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::AUTHOR;
        }


        return $this;
    } // setAuthor()

    /**
     * Set the value of [year] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setYear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->year !== $v) {
            $this->year = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::YEAR;
        }


        return $this;
    } // setYear()

    /**
     * Set the value of [cas_ref_no] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setCasRefNo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cas_ref_no !== $v) {
            $this->cas_ref_no = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::CAS_REF_NO;
        }


        return $this;
    } // setCasRefNo()

    /**
     * Set the value of [cas_spc] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setCasSpc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cas_spc !== $v) {
            $this->cas_spc = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::CAS_SPC;
        }


        return $this;
    } // setCasSpc()

    /**
     * Set the value of [taxonlevel] column.
     *
     * @param  string $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setTaxonlevel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->taxonlevel !== $v) {
            $this->taxonlevel = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::TAXONLEVEL;
        }


        return $this;
    } // setTaxonlevel()

    /**
     * Set the value of [syncodevalid] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setSyncodevalid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->syncodevalid !== $v) {
            $this->syncodevalid = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::SYNCODEVALID;
        }


        return $this;
    } // setSyncodevalid()

    /**
     * Set the value of [lastepithet] column.
     *
     * @param  string $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setLastepithet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lastepithet !== $v) {
            $this->lastepithet = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::LASTEPITHET;
        }


        return $this;
    } // setLastepithet()

    /**
     * Set the value of [status] column.
     *
     * @param  string $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::STATUS;
        }


        return $this;
    } // setStatus()

    /**
     * Set the value of [synonymsref] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setSynonymsref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->synonymsref !== $v) {
            $this->synonymsref = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::SYNONYMSREF;
        }


        return $this;
    } // setSynonymsref()

    /**
     * Set the value of [synonymy] column.
     *
     * @param  string $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setSynonymy($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->synonymy !== $v) {
            $this->synonymy = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::SYNONYMY;
        }


        return $this;
    } // setSynonymy()

    /**
     * Set the value of [synonymydetail] column.
     *
     * @param  string $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setSynonymydetail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->synonymydetail !== $v) {
            $this->synonymydetail = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::SYNONYMYDETAIL;
        }


        return $this;
    } // setSynonymydetail()

    /**
     * Set the value of [combination] column.
     *
     * @param  string $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setCombination($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->combination !== $v) {
            $this->combination = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::COMBINATION;
        }


        return $this;
    } // setCombination()

    /**
     * Set the value of [misspelling] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setMisspelling($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->misspelling !== $v) {
            $this->misspelling = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::MISSPELLING;
        }


        return $this;
    } // setMisspelling()

    /**
     * Set the value of [misspellingdetail] column.
     *
     * @param  string $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setMisspellingdetail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->misspellingdetail !== $v) {
            $this->misspellingdetail = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::MISSPELLINGDETAIL;
        }


        return $this;
    } // setMisspellingdetail()

    /**
     * Set the value of [validtax] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setValidtax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->validtax !== $v) {
            $this->validtax = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::VALIDTAX;
        }


        return $this;
    } // setValidtax()

    /**
     * Set the value of [commenttax] column.
     *
     * @param  string $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setCommenttax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commenttax !== $v) {
            $this->commenttax = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::COMMENTTAX;
        }


        return $this;
    } // setCommenttax()

    /**
     * Set the value of [originalpub] column.
     *
     * @param  string $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setOriginalpub($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->originalpub !== $v) {
            $this->originalpub = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::ORIGINALPUB;
        }


        return $this;
    } // setOriginalpub()

    /**
     * Set the value of [statusorder] column.
     *
     * @param  double $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setStatusorder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->statusorder !== $v) {
            $this->statusorder = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::STATUSORDER;
        }


        return $this;
    } // setStatusorder()

    /**
     * Set the value of [ranksearch] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setRanksearch($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ranksearch !== $v) {
            $this->ranksearch = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::RANKSEARCH;
        }


        return $this;
    } // setRanksearch()

    /**
     * Set the value of [gsdoriginal] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setGsdoriginal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gsdoriginal !== $v) {
            $this->gsdoriginal = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::GSDORIGINAL;
        }


        return $this;
    } // setGsdoriginal()

    /**
     * Set the value of [gsdstatus] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setGsdstatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gsdstatus !== $v) {
            $this->gsdstatus = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::GSDSTATUS;
        }


        return $this;
    } // setGsdstatus()

    /**
     * Sets the value of [gsdversiondate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setGsdversiondate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->gsdversiondate !== null || $dt !== null) {
            $currentDateAsString = ($this->gsdversiondate !== null && $tmpDt = new DateTime($this->gsdversiondate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->gsdversiondate = $newDateAsString;
                $this->modifiedColumns[] = SynonymsBackPeer::GSDVERSIONDATE;
            }
        } // if either are not null


        return $this;
    } // setGsdversiondate()

    /**
     * Set the value of [gsdexpert] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setGsdexpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gsdexpert !== $v) {
            $this->gsdexpert = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::GSDEXPERT;
        }


        return $this;
    } // setGsdexpert()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [etymology] column.
     *
     * @param  string $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setEtymology($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etymology !== $v) {
            $this->etymology = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::ETYMOLOGY;
        }


        return $this;
    } // setEtymology()

    /**
     * Set the value of [col] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setCol($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->col !== $v) {
            $this->col = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::COL;
        }


        return $this;
    } // setCol()

    /**
     * Set the value of [col_id] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setColId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->col_id !== $v) {
            $this->col_id = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::COL_ID;
        }


        return $this;
    } // setColId()

    /**
     * Set the value of [zoobank_id] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setZoobankId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zoobank_id !== $v) {
            $this->zoobank_id = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::ZOOBANK_ID;
        }


        return $this;
    } // setZoobankId()

    /**
     * Set the value of [ion_id] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setIonId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ion_id !== $v) {
            $this->ion_id = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::ION_ID;
        }


        return $this;
    } // setIonId()

    /**
     * Set the value of [tsn] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setTsn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tsn !== $v) {
            $this->tsn = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::TSN;
        }


        return $this;
    } // setTsn()

    /**
     * Set the value of [worms_id] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setWormsId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->worms_id !== $v) {
            $this->worms_id = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::WORMS_ID;
        }


        return $this;
    } // setWormsId()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = SynonymsBackPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = SynonymsBackPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = SynonymsBackPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = SynonymsBackPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SynonymsBack The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = SynonymsBackPeer::TS;
            }
        } // if either are not null


        return $this;
    } // setTs()

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
            if ($this->synonymy !== '') {
                return false;
            }

            if ($this->combination !== '') {
                return false;
            }

            if ($this->misspelling !== 0) {
                return false;
            }

            if ($this->statusorder !== 0) {
                return false;
            }

            if ($this->gsdoriginal !== 0) {
                return false;
            }

            if ($this->gsdstatus !== 0) {
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

            $this->syncode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->syngenus = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->synspecies = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->speccode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->valid = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->author = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->year = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->cas_ref_no = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->cas_spc = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->taxonlevel = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->syncodevalid = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->lastepithet = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->status = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->synonymsref = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->synonymy = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->synonymydetail = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->combination = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->misspelling = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->misspellingdetail = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->validtax = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->commenttax = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->originalpub = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->statusorder = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->ranksearch = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->gsdoriginal = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->gsdstatus = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->gsdversiondate = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->gsdexpert = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->comment = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->etymology = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->col = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->col_id = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->zoobank_id = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->ion_id = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->tsn = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->worms_id = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->entered = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->dateentered = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->modified = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->datemodified = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->expert = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->datechecked = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->ts = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 43; // 43 = SynonymsBackPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating SynonymsBack object", $e);
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
            $con = Propel::getConnection(SynonymsBackPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SynonymsBackPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(SynonymsBackPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SynonymsBackQuery::create()
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
            $con = Propel::getConnection(SynonymsBackPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                SynonymsBackPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = SynonymsBackPeer::SYNCODE;
        if (null !== $this->syncode) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SynonymsBackPeer::SYNCODE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SynonymsBackPeer::SYNCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SynCode`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::SYNGENUS)) {
            $modifiedColumns[':p' . $index++]  = '`SynGenus`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::SYNSPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`SynSpecies`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::VALID)) {
            $modifiedColumns[':p' . $index++]  = '`Valid`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::AUTHOR)) {
            $modifiedColumns[':p' . $index++]  = '`Author`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::YEAR)) {
            $modifiedColumns[':p' . $index++]  = '`Year`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::CAS_REF_NO)) {
            $modifiedColumns[':p' . $index++]  = '`CAS_REF_NO`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::CAS_SPC)) {
            $modifiedColumns[':p' . $index++]  = '`CAS_SPC`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::TAXONLEVEL)) {
            $modifiedColumns[':p' . $index++]  = '`TaxonLevel`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::SYNCODEVALID)) {
            $modifiedColumns[':p' . $index++]  = '`SyncodeValid`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::LASTEPITHET)) {
            $modifiedColumns[':p' . $index++]  = '`LastEpithet`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`Status`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::SYNONYMSREF)) {
            $modifiedColumns[':p' . $index++]  = '`SynonymsRef`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::SYNONYMY)) {
            $modifiedColumns[':p' . $index++]  = '`Synonymy`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::SYNONYMYDETAIL)) {
            $modifiedColumns[':p' . $index++]  = '`SynonymyDetail`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::COMBINATION)) {
            $modifiedColumns[':p' . $index++]  = '`Combination`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::MISSPELLING)) {
            $modifiedColumns[':p' . $index++]  = '`Misspelling`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::MISSPELLINGDETAIL)) {
            $modifiedColumns[':p' . $index++]  = '`MisspellingDetail`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::VALIDTAX)) {
            $modifiedColumns[':p' . $index++]  = '`ValidTax`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::COMMENTTAX)) {
            $modifiedColumns[':p' . $index++]  = '`CommentTax`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::ORIGINALPUB)) {
            $modifiedColumns[':p' . $index++]  = '`OriginalPub`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::STATUSORDER)) {
            $modifiedColumns[':p' . $index++]  = '`StatusOrder`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::RANKSEARCH)) {
            $modifiedColumns[':p' . $index++]  = '`RankSearch`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::GSDORIGINAL)) {
            $modifiedColumns[':p' . $index++]  = '`GSDOriginal`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::GSDSTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`GSDStatus`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::GSDVERSIONDATE)) {
            $modifiedColumns[':p' . $index++]  = '`GSDVersionDate`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::GSDEXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`GSDExpert`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Comment`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::ETYMOLOGY)) {
            $modifiedColumns[':p' . $index++]  = '`Etymology`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::COL)) {
            $modifiedColumns[':p' . $index++]  = '`CoL`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::COL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`CoL_ID`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::ZOOBANK_ID)) {
            $modifiedColumns[':p' . $index++]  = '`ZooBank_ID`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::ION_ID)) {
            $modifiedColumns[':p' . $index++]  = '`ION_ID`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::TSN)) {
            $modifiedColumns[':p' . $index++]  = '`TSN`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::WORMS_ID)) {
            $modifiedColumns[':p' . $index++]  = '`WoRMS_ID`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(SynonymsBackPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `synonyms_back` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`SynCode`':
                        $stmt->bindValue($identifier, $this->syncode, PDO::PARAM_INT);
                        break;
                    case '`SynGenus`':
                        $stmt->bindValue($identifier, $this->syngenus, PDO::PARAM_STR);
                        break;
                    case '`SynSpecies`':
                        $stmt->bindValue($identifier, $this->synspecies, PDO::PARAM_STR);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`Valid`':
                        $stmt->bindValue($identifier, $this->valid, PDO::PARAM_INT);
                        break;
                    case '`Author`':
                        $stmt->bindValue($identifier, $this->author, PDO::PARAM_STR);
                        break;
                    case '`Year`':
                        $stmt->bindValue($identifier, $this->year, PDO::PARAM_INT);
                        break;
                    case '`CAS_REF_NO`':
                        $stmt->bindValue($identifier, $this->cas_ref_no, PDO::PARAM_INT);
                        break;
                    case '`CAS_SPC`':
                        $stmt->bindValue($identifier, $this->cas_spc, PDO::PARAM_INT);
                        break;
                    case '`TaxonLevel`':
                        $stmt->bindValue($identifier, $this->taxonlevel, PDO::PARAM_STR);
                        break;
                    case '`SyncodeValid`':
                        $stmt->bindValue($identifier, $this->syncodevalid, PDO::PARAM_INT);
                        break;
                    case '`LastEpithet`':
                        $stmt->bindValue($identifier, $this->lastepithet, PDO::PARAM_STR);
                        break;
                    case '`Status`':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_STR);
                        break;
                    case '`SynonymsRef`':
                        $stmt->bindValue($identifier, $this->synonymsref, PDO::PARAM_INT);
                        break;
                    case '`Synonymy`':
                        $stmt->bindValue($identifier, $this->synonymy, PDO::PARAM_STR);
                        break;
                    case '`SynonymyDetail`':
                        $stmt->bindValue($identifier, $this->synonymydetail, PDO::PARAM_STR);
                        break;
                    case '`Combination`':
                        $stmt->bindValue($identifier, $this->combination, PDO::PARAM_STR);
                        break;
                    case '`Misspelling`':
                        $stmt->bindValue($identifier, $this->misspelling, PDO::PARAM_INT);
                        break;
                    case '`MisspellingDetail`':
                        $stmt->bindValue($identifier, $this->misspellingdetail, PDO::PARAM_STR);
                        break;
                    case '`ValidTax`':
                        $stmt->bindValue($identifier, $this->validtax, PDO::PARAM_INT);
                        break;
                    case '`CommentTax`':
                        $stmt->bindValue($identifier, $this->commenttax, PDO::PARAM_STR);
                        break;
                    case '`OriginalPub`':
                        $stmt->bindValue($identifier, $this->originalpub, PDO::PARAM_STR);
                        break;
                    case '`StatusOrder`':
                        $stmt->bindValue($identifier, $this->statusorder, PDO::PARAM_STR);
                        break;
                    case '`RankSearch`':
                        $stmt->bindValue($identifier, $this->ranksearch, PDO::PARAM_INT);
                        break;
                    case '`GSDOriginal`':
                        $stmt->bindValue($identifier, $this->gsdoriginal, PDO::PARAM_INT);
                        break;
                    case '`GSDStatus`':
                        $stmt->bindValue($identifier, $this->gsdstatus, PDO::PARAM_INT);
                        break;
                    case '`GSDVersionDate`':
                        $stmt->bindValue($identifier, $this->gsdversiondate, PDO::PARAM_STR);
                        break;
                    case '`GSDExpert`':
                        $stmt->bindValue($identifier, $this->gsdexpert, PDO::PARAM_INT);
                        break;
                    case '`Comment`':
                        $stmt->bindValue($identifier, $this->comment, PDO::PARAM_STR);
                        break;
                    case '`Etymology`':
                        $stmt->bindValue($identifier, $this->etymology, PDO::PARAM_STR);
                        break;
                    case '`CoL`':
                        $stmt->bindValue($identifier, $this->col, PDO::PARAM_INT);
                        break;
                    case '`CoL_ID`':
                        $stmt->bindValue($identifier, $this->col_id, PDO::PARAM_INT);
                        break;
                    case '`ZooBank_ID`':
                        $stmt->bindValue($identifier, $this->zoobank_id, PDO::PARAM_INT);
                        break;
                    case '`ION_ID`':
                        $stmt->bindValue($identifier, $this->ion_id, PDO::PARAM_INT);
                        break;
                    case '`TSN`':
                        $stmt->bindValue($identifier, $this->tsn, PDO::PARAM_INT);
                        break;
                    case '`WoRMS_ID`':
                        $stmt->bindValue($identifier, $this->worms_id, PDO::PARAM_INT);
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
                    case '`TS`':
                        $stmt->bindValue($identifier, $this->ts, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setSyncode($pk);

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


            if (($retval = SynonymsBackPeer::doValidate($this, $columns)) !== true) {
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
        $pos = SynonymsBackPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSyncode();
                break;
            case 1:
                return $this->getSyngenus();
                break;
            case 2:
                return $this->getSynspecies();
                break;
            case 3:
                return $this->getSpeccode();
                break;
            case 4:
                return $this->getValid();
                break;
            case 5:
                return $this->getAuthor();
                break;
            case 6:
                return $this->getYear();
                break;
            case 7:
                return $this->getCasRefNo();
                break;
            case 8:
                return $this->getCasSpc();
                break;
            case 9:
                return $this->getTaxonlevel();
                break;
            case 10:
                return $this->getSyncodevalid();
                break;
            case 11:
                return $this->getLastepithet();
                break;
            case 12:
                return $this->getStatus();
                break;
            case 13:
                return $this->getSynonymsref();
                break;
            case 14:
                return $this->getSynonymy();
                break;
            case 15:
                return $this->getSynonymydetail();
                break;
            case 16:
                return $this->getCombination();
                break;
            case 17:
                return $this->getMisspelling();
                break;
            case 18:
                return $this->getMisspellingdetail();
                break;
            case 19:
                return $this->getValidtax();
                break;
            case 20:
                return $this->getCommenttax();
                break;
            case 21:
                return $this->getOriginalpub();
                break;
            case 22:
                return $this->getStatusorder();
                break;
            case 23:
                return $this->getRanksearch();
                break;
            case 24:
                return $this->getGsdoriginal();
                break;
            case 25:
                return $this->getGsdstatus();
                break;
            case 26:
                return $this->getGsdversiondate();
                break;
            case 27:
                return $this->getGsdexpert();
                break;
            case 28:
                return $this->getComment();
                break;
            case 29:
                return $this->getEtymology();
                break;
            case 30:
                return $this->getCol();
                break;
            case 31:
                return $this->getColId();
                break;
            case 32:
                return $this->getZoobankId();
                break;
            case 33:
                return $this->getIonId();
                break;
            case 34:
                return $this->getTsn();
                break;
            case 35:
                return $this->getWormsId();
                break;
            case 36:
                return $this->getEntered();
                break;
            case 37:
                return $this->getDateentered();
                break;
            case 38:
                return $this->getModified();
                break;
            case 39:
                return $this->getDatemodified();
                break;
            case 40:
                return $this->getExpert();
                break;
            case 41:
                return $this->getDatechecked();
                break;
            case 42:
                return $this->getTs();
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
        if (isset($alreadyDumpedObjects['SynonymsBack'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SynonymsBack'][serialize($this->getPrimaryKey())] = true;
        $keys = SynonymsBackPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getSyncode(),
            $keys[1] => $this->getSyngenus(),
            $keys[2] => $this->getSynspecies(),
            $keys[3] => $this->getSpeccode(),
            $keys[4] => $this->getValid(),
            $keys[5] => $this->getAuthor(),
            $keys[6] => $this->getYear(),
            $keys[7] => $this->getCasRefNo(),
            $keys[8] => $this->getCasSpc(),
            $keys[9] => $this->getTaxonlevel(),
            $keys[10] => $this->getSyncodevalid(),
            $keys[11] => $this->getLastepithet(),
            $keys[12] => $this->getStatus(),
            $keys[13] => $this->getSynonymsref(),
            $keys[14] => $this->getSynonymy(),
            $keys[15] => $this->getSynonymydetail(),
            $keys[16] => $this->getCombination(),
            $keys[17] => $this->getMisspelling(),
            $keys[18] => $this->getMisspellingdetail(),
            $keys[19] => $this->getValidtax(),
            $keys[20] => $this->getCommenttax(),
            $keys[21] => $this->getOriginalpub(),
            $keys[22] => $this->getStatusorder(),
            $keys[23] => $this->getRanksearch(),
            $keys[24] => $this->getGsdoriginal(),
            $keys[25] => $this->getGsdstatus(),
            $keys[26] => $this->getGsdversiondate(),
            $keys[27] => $this->getGsdexpert(),
            $keys[28] => $this->getComment(),
            $keys[29] => $this->getEtymology(),
            $keys[30] => $this->getCol(),
            $keys[31] => $this->getColId(),
            $keys[32] => $this->getZoobankId(),
            $keys[33] => $this->getIonId(),
            $keys[34] => $this->getTsn(),
            $keys[35] => $this->getWormsId(),
            $keys[36] => $this->getEntered(),
            $keys[37] => $this->getDateentered(),
            $keys[38] => $this->getModified(),
            $keys[39] => $this->getDatemodified(),
            $keys[40] => $this->getExpert(),
            $keys[41] => $this->getDatechecked(),
            $keys[42] => $this->getTs(),
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
        $pos = SynonymsBackPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSyncode($value);
                break;
            case 1:
                $this->setSyngenus($value);
                break;
            case 2:
                $this->setSynspecies($value);
                break;
            case 3:
                $this->setSpeccode($value);
                break;
            case 4:
                $this->setValid($value);
                break;
            case 5:
                $this->setAuthor($value);
                break;
            case 6:
                $this->setYear($value);
                break;
            case 7:
                $this->setCasRefNo($value);
                break;
            case 8:
                $this->setCasSpc($value);
                break;
            case 9:
                $this->setTaxonlevel($value);
                break;
            case 10:
                $this->setSyncodevalid($value);
                break;
            case 11:
                $this->setLastepithet($value);
                break;
            case 12:
                $this->setStatus($value);
                break;
            case 13:
                $this->setSynonymsref($value);
                break;
            case 14:
                $this->setSynonymy($value);
                break;
            case 15:
                $this->setSynonymydetail($value);
                break;
            case 16:
                $this->setCombination($value);
                break;
            case 17:
                $this->setMisspelling($value);
                break;
            case 18:
                $this->setMisspellingdetail($value);
                break;
            case 19:
                $this->setValidtax($value);
                break;
            case 20:
                $this->setCommenttax($value);
                break;
            case 21:
                $this->setOriginalpub($value);
                break;
            case 22:
                $this->setStatusorder($value);
                break;
            case 23:
                $this->setRanksearch($value);
                break;
            case 24:
                $this->setGsdoriginal($value);
                break;
            case 25:
                $this->setGsdstatus($value);
                break;
            case 26:
                $this->setGsdversiondate($value);
                break;
            case 27:
                $this->setGsdexpert($value);
                break;
            case 28:
                $this->setComment($value);
                break;
            case 29:
                $this->setEtymology($value);
                break;
            case 30:
                $this->setCol($value);
                break;
            case 31:
                $this->setColId($value);
                break;
            case 32:
                $this->setZoobankId($value);
                break;
            case 33:
                $this->setIonId($value);
                break;
            case 34:
                $this->setTsn($value);
                break;
            case 35:
                $this->setWormsId($value);
                break;
            case 36:
                $this->setEntered($value);
                break;
            case 37:
                $this->setDateentered($value);
                break;
            case 38:
                $this->setModified($value);
                break;
            case 39:
                $this->setDatemodified($value);
                break;
            case 40:
                $this->setExpert($value);
                break;
            case 41:
                $this->setDatechecked($value);
                break;
            case 42:
                $this->setTs($value);
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
        $keys = SynonymsBackPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setSyncode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSyngenus($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSynspecies($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSpeccode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setValid($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAuthor($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setYear($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCasRefNo($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCasSpc($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTaxonlevel($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setSyncodevalid($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setLastepithet($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setStatus($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setSynonymsref($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setSynonymy($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setSynonymydetail($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setCombination($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setMisspelling($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setMisspellingdetail($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setValidtax($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setCommenttax($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setOriginalpub($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setStatusorder($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setRanksearch($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setGsdoriginal($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setGsdstatus($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setGsdversiondate($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setGsdexpert($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setComment($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setEtymology($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setCol($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setColId($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setZoobankId($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setIonId($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setTsn($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setWormsId($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setEntered($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setDateentered($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setModified($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setDatemodified($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setExpert($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setDatechecked($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setTs($arr[$keys[42]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SynonymsBackPeer::DATABASE_NAME);

        if ($this->isColumnModified(SynonymsBackPeer::SYNCODE)) $criteria->add(SynonymsBackPeer::SYNCODE, $this->syncode);
        if ($this->isColumnModified(SynonymsBackPeer::SYNGENUS)) $criteria->add(SynonymsBackPeer::SYNGENUS, $this->syngenus);
        if ($this->isColumnModified(SynonymsBackPeer::SYNSPECIES)) $criteria->add(SynonymsBackPeer::SYNSPECIES, $this->synspecies);
        if ($this->isColumnModified(SynonymsBackPeer::SPECCODE)) $criteria->add(SynonymsBackPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(SynonymsBackPeer::VALID)) $criteria->add(SynonymsBackPeer::VALID, $this->valid);
        if ($this->isColumnModified(SynonymsBackPeer::AUTHOR)) $criteria->add(SynonymsBackPeer::AUTHOR, $this->author);
        if ($this->isColumnModified(SynonymsBackPeer::YEAR)) $criteria->add(SynonymsBackPeer::YEAR, $this->year);
        if ($this->isColumnModified(SynonymsBackPeer::CAS_REF_NO)) $criteria->add(SynonymsBackPeer::CAS_REF_NO, $this->cas_ref_no);
        if ($this->isColumnModified(SynonymsBackPeer::CAS_SPC)) $criteria->add(SynonymsBackPeer::CAS_SPC, $this->cas_spc);
        if ($this->isColumnModified(SynonymsBackPeer::TAXONLEVEL)) $criteria->add(SynonymsBackPeer::TAXONLEVEL, $this->taxonlevel);
        if ($this->isColumnModified(SynonymsBackPeer::SYNCODEVALID)) $criteria->add(SynonymsBackPeer::SYNCODEVALID, $this->syncodevalid);
        if ($this->isColumnModified(SynonymsBackPeer::LASTEPITHET)) $criteria->add(SynonymsBackPeer::LASTEPITHET, $this->lastepithet);
        if ($this->isColumnModified(SynonymsBackPeer::STATUS)) $criteria->add(SynonymsBackPeer::STATUS, $this->status);
        if ($this->isColumnModified(SynonymsBackPeer::SYNONYMSREF)) $criteria->add(SynonymsBackPeer::SYNONYMSREF, $this->synonymsref);
        if ($this->isColumnModified(SynonymsBackPeer::SYNONYMY)) $criteria->add(SynonymsBackPeer::SYNONYMY, $this->synonymy);
        if ($this->isColumnModified(SynonymsBackPeer::SYNONYMYDETAIL)) $criteria->add(SynonymsBackPeer::SYNONYMYDETAIL, $this->synonymydetail);
        if ($this->isColumnModified(SynonymsBackPeer::COMBINATION)) $criteria->add(SynonymsBackPeer::COMBINATION, $this->combination);
        if ($this->isColumnModified(SynonymsBackPeer::MISSPELLING)) $criteria->add(SynonymsBackPeer::MISSPELLING, $this->misspelling);
        if ($this->isColumnModified(SynonymsBackPeer::MISSPELLINGDETAIL)) $criteria->add(SynonymsBackPeer::MISSPELLINGDETAIL, $this->misspellingdetail);
        if ($this->isColumnModified(SynonymsBackPeer::VALIDTAX)) $criteria->add(SynonymsBackPeer::VALIDTAX, $this->validtax);
        if ($this->isColumnModified(SynonymsBackPeer::COMMENTTAX)) $criteria->add(SynonymsBackPeer::COMMENTTAX, $this->commenttax);
        if ($this->isColumnModified(SynonymsBackPeer::ORIGINALPUB)) $criteria->add(SynonymsBackPeer::ORIGINALPUB, $this->originalpub);
        if ($this->isColumnModified(SynonymsBackPeer::STATUSORDER)) $criteria->add(SynonymsBackPeer::STATUSORDER, $this->statusorder);
        if ($this->isColumnModified(SynonymsBackPeer::RANKSEARCH)) $criteria->add(SynonymsBackPeer::RANKSEARCH, $this->ranksearch);
        if ($this->isColumnModified(SynonymsBackPeer::GSDORIGINAL)) $criteria->add(SynonymsBackPeer::GSDORIGINAL, $this->gsdoriginal);
        if ($this->isColumnModified(SynonymsBackPeer::GSDSTATUS)) $criteria->add(SynonymsBackPeer::GSDSTATUS, $this->gsdstatus);
        if ($this->isColumnModified(SynonymsBackPeer::GSDVERSIONDATE)) $criteria->add(SynonymsBackPeer::GSDVERSIONDATE, $this->gsdversiondate);
        if ($this->isColumnModified(SynonymsBackPeer::GSDEXPERT)) $criteria->add(SynonymsBackPeer::GSDEXPERT, $this->gsdexpert);
        if ($this->isColumnModified(SynonymsBackPeer::COMMENT)) $criteria->add(SynonymsBackPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(SynonymsBackPeer::ETYMOLOGY)) $criteria->add(SynonymsBackPeer::ETYMOLOGY, $this->etymology);
        if ($this->isColumnModified(SynonymsBackPeer::COL)) $criteria->add(SynonymsBackPeer::COL, $this->col);
        if ($this->isColumnModified(SynonymsBackPeer::COL_ID)) $criteria->add(SynonymsBackPeer::COL_ID, $this->col_id);
        if ($this->isColumnModified(SynonymsBackPeer::ZOOBANK_ID)) $criteria->add(SynonymsBackPeer::ZOOBANK_ID, $this->zoobank_id);
        if ($this->isColumnModified(SynonymsBackPeer::ION_ID)) $criteria->add(SynonymsBackPeer::ION_ID, $this->ion_id);
        if ($this->isColumnModified(SynonymsBackPeer::TSN)) $criteria->add(SynonymsBackPeer::TSN, $this->tsn);
        if ($this->isColumnModified(SynonymsBackPeer::WORMS_ID)) $criteria->add(SynonymsBackPeer::WORMS_ID, $this->worms_id);
        if ($this->isColumnModified(SynonymsBackPeer::ENTERED)) $criteria->add(SynonymsBackPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(SynonymsBackPeer::DATEENTERED)) $criteria->add(SynonymsBackPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(SynonymsBackPeer::MODIFIED)) $criteria->add(SynonymsBackPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(SynonymsBackPeer::DATEMODIFIED)) $criteria->add(SynonymsBackPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(SynonymsBackPeer::EXPERT)) $criteria->add(SynonymsBackPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(SynonymsBackPeer::DATECHECKED)) $criteria->add(SynonymsBackPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(SynonymsBackPeer::TS)) $criteria->add(SynonymsBackPeer::TS, $this->ts);

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
        $criteria = new Criteria(SynonymsBackPeer::DATABASE_NAME);
        $criteria->add(SynonymsBackPeer::SYNCODE, $this->syncode);
        $criteria->add(SynonymsBackPeer::SYNGENUS, $this->syngenus);
        $criteria->add(SynonymsBackPeer::SYNSPECIES, $this->synspecies);
        $criteria->add(SynonymsBackPeer::SPECCODE, $this->speccode);
        $criteria->add(SynonymsBackPeer::AUTHOR, $this->author);
        $criteria->add(SynonymsBackPeer::SYNONYMY, $this->synonymy);
        $criteria->add(SynonymsBackPeer::COMBINATION, $this->combination);
        $criteria->add(SynonymsBackPeer::MISSPELLING, $this->misspelling);

        return $criteria;
    }

    /**
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getSyncode();
        $pks[1] = $this->getSyngenus();
        $pks[2] = $this->getSynspecies();
        $pks[3] = $this->getSpeccode();
        $pks[4] = $this->getAuthor();
        $pks[5] = $this->getSynonymy();
        $pks[6] = $this->getCombination();
        $pks[7] = $this->getMisspelling();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setSyncode($keys[0]);
        $this->setSyngenus($keys[1]);
        $this->setSynspecies($keys[2]);
        $this->setSpeccode($keys[3]);
        $this->setAuthor($keys[4]);
        $this->setSynonymy($keys[5]);
        $this->setCombination($keys[6]);
        $this->setMisspelling($keys[7]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getSyncode()) && (null === $this->getSyngenus()) && (null === $this->getSynspecies()) && (null === $this->getSpeccode()) && (null === $this->getAuthor()) && (null === $this->getSynonymy()) && (null === $this->getCombination()) && (null === $this->getMisspelling());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of SynonymsBack (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSyngenus($this->getSyngenus());
        $copyObj->setSynspecies($this->getSynspecies());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setValid($this->getValid());
        $copyObj->setAuthor($this->getAuthor());
        $copyObj->setYear($this->getYear());
        $copyObj->setCasRefNo($this->getCasRefNo());
        $copyObj->setCasSpc($this->getCasSpc());
        $copyObj->setTaxonlevel($this->getTaxonlevel());
        $copyObj->setSyncodevalid($this->getSyncodevalid());
        $copyObj->setLastepithet($this->getLastepithet());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setSynonymsref($this->getSynonymsref());
        $copyObj->setSynonymy($this->getSynonymy());
        $copyObj->setSynonymydetail($this->getSynonymydetail());
        $copyObj->setCombination($this->getCombination());
        $copyObj->setMisspelling($this->getMisspelling());
        $copyObj->setMisspellingdetail($this->getMisspellingdetail());
        $copyObj->setValidtax($this->getValidtax());
        $copyObj->setCommenttax($this->getCommenttax());
        $copyObj->setOriginalpub($this->getOriginalpub());
        $copyObj->setStatusorder($this->getStatusorder());
        $copyObj->setRanksearch($this->getRanksearch());
        $copyObj->setGsdoriginal($this->getGsdoriginal());
        $copyObj->setGsdstatus($this->getGsdstatus());
        $copyObj->setGsdversiondate($this->getGsdversiondate());
        $copyObj->setGsdexpert($this->getGsdexpert());
        $copyObj->setComment($this->getComment());
        $copyObj->setEtymology($this->getEtymology());
        $copyObj->setCol($this->getCol());
        $copyObj->setColId($this->getColId());
        $copyObj->setZoobankId($this->getZoobankId());
        $copyObj->setIonId($this->getIonId());
        $copyObj->setTsn($this->getTsn());
        $copyObj->setWormsId($this->getWormsId());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setSyncode(NULL); // this is a auto-increment column, so set to default value
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
     * @return SynonymsBack Clone of current object.
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
     * @return SynonymsBackPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SynonymsBackPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->syncode = null;
        $this->syngenus = null;
        $this->synspecies = null;
        $this->speccode = null;
        $this->valid = null;
        $this->author = null;
        $this->year = null;
        $this->cas_ref_no = null;
        $this->cas_spc = null;
        $this->taxonlevel = null;
        $this->syncodevalid = null;
        $this->lastepithet = null;
        $this->status = null;
        $this->synonymsref = null;
        $this->synonymy = null;
        $this->synonymydetail = null;
        $this->combination = null;
        $this->misspelling = null;
        $this->misspellingdetail = null;
        $this->validtax = null;
        $this->commenttax = null;
        $this->originalpub = null;
        $this->statusorder = null;
        $this->ranksearch = null;
        $this->gsdoriginal = null;
        $this->gsdstatus = null;
        $this->gsdversiondate = null;
        $this->gsdexpert = null;
        $this->comment = null;
        $this->etymology = null;
        $this->col = null;
        $this->col_id = null;
        $this->zoobank_id = null;
        $this->ion_id = null;
        $this->tsn = null;
        $this->worms_id = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->ts = null;
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
        return (string) $this->exportTo(SynonymsBackPeer::DEFAULT_STRING_FORMAT);
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
