<?php


/**
 * Base class that represents a row from the 'genera' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseGenera extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'GeneraPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GeneraPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the gencode field.
     * @var        int
     */
    protected $gencode;

    /**
     * The value for the genname field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $genname;

    /**
     * The value for the genauthoryear field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $genauthoryear;

    /**
     * The value for the genauthor field.
     * @var        string
     */
    protected $genauthor;

    /**
     * The value for the genyear field.
     * @var        int
     */
    protected $genyear;

    /**
     * The value for the geninex field.
     * @var        string
     */
    protected $geninex;

    /**
     * The value for the gencomname field.
     * @var        string
     */
    protected $gencomname;

    /**
     * The value for the genrefno field.
     * @var        int
     */
    protected $genrefno;

    /**
     * The value for the available field.
     * @var        string
     */
    protected $available;

    /**
     * The value for the genstatus field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $genstatus;

    /**
     * The value for the genstatusiczn field.
     * @var        string
     */
    protected $genstatusiczn;

    /**
     * The value for the gencodevalid field.
     * @var        int
     */
    protected $gencodevalid;

    /**
     * The value for the remark field.
     * @var        string
     */
    protected $remark;

    /**
     * The value for the etymology field.
     * @var        string
     */
    protected $etymology;

    /**
     * The value for the gender field.
     * @var        string
     */
    protected $gender;

    /**
     * The value for the subgenusof field.
     * @var        string
     */
    protected $subgenusof;

    /**
     * The value for the famcode field.
     * @var        int
     */
    protected $famcode;

    /**
     * The value for the subfamily field.
     * @var        string
     */
    protected $subfamily;

    /**
     * The value for the tribe field.
     * @var        string
     */
    protected $tribe;

    /**
     * The value for the bodyshapei field.
     * @var        string
     */
    protected $bodyshapei;

    /**
     * The value for the comment field.
     * @var        string
     */
    protected $comment;

    /**
     * The value for the syncode field.
     * @var        int
     */
    protected $syncode;

    /**
     * The value for the fb_sppnb field.
     * @var        int
     */
    protected $fb_sppnb;

    /**
     * The value for the coff_sppnb field.
     * @var        int
     */
    protected $coff_sppnb;

    /**
     * The value for the fow_sppnb field.
     * @var        int
     */
    protected $fow_sppnb;

    /**
     * The value for the gsd_genusfk field.
     * @var        int
     */
    protected $gsd_genusfk;

    /**
     * The value for the gsd_genusreffk field.
     * @var        int
     */
    protected $gsd_genusreffk;

    /**
     * The value for the distribution field.
     * @var        string
     */
    protected $distribution;

    /**
     * The value for the habitat field.
     * @var        string
     */
    protected $habitat;

    /**
     * The value for the watersalinity field.
     * @var        string
     */
    protected $watersalinity;

    /**
     * The value for the marine field.
     * @var        string
     */
    protected $marine;

    /**
     * The value for the brackish field.
     * @var        string
     */
    protected $brackish;

    /**
     * The value for the freshwater field.
     * @var        string
     */
    protected $freshwater;

    /**
     * The value for the diagnosis field.
     * @var        string
     */
    protected $diagnosis;

    /**
     * The value for the dspinesmin field.
     * @var        int
     */
    protected $dspinesmin;

    /**
     * The value for the dspinesmax field.
     * @var        int
     */
    protected $dspinesmax;

    /**
     * The value for the dsoftraysmin field.
     * @var        int
     */
    protected $dsoftraysmin;

    /**
     * The value for the dsoftraysmax field.
     * @var        int
     */
    protected $dsoftraysmax;

    /**
     * The value for the totaldsoftraysmin field.
     * @var        int
     */
    protected $totaldsoftraysmin;

    /**
     * The value for the totaldsoftraysmax field.
     * @var        int
     */
    protected $totaldsoftraysmax;

    /**
     * The value for the dsoftraysbranchmin field.
     * @var        int
     */
    protected $dsoftraysbranchmin;

    /**
     * The value for the dsoftraysbranchmax field.
     * @var        int
     */
    protected $dsoftraysbranchmax;

    /**
     * The value for the aspinesmin field.
     * @var        int
     */
    protected $aspinesmin;

    /**
     * The value for the aspinesmax field.
     * @var        int
     */
    protected $aspinesmax;

    /**
     * The value for the asoftraysmin field.
     * @var        int
     */
    protected $asoftraysmin;

    /**
     * The value for the asoftraysmax field.
     * @var        int
     */
    protected $asoftraysmax;

    /**
     * The value for the totalasoftraysmin field.
     * @var        int
     */
    protected $totalasoftraysmin;

    /**
     * The value for the totalasoftraysmax field.
     * @var        int
     */
    protected $totalasoftraysmax;

    /**
     * The value for the asoftraysbranchmin field.
     * @var        int
     */
    protected $asoftraysbranchmin;

    /**
     * The value for the asoftraysbranchmax field.
     * @var        int
     */
    protected $asoftraysbranchmax;

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
        $this->genname = '';
        $this->genauthoryear = '';
        $this->genstatus = '';
    }

    /**
     * Initializes internal state of BaseGenera object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [gencode] column value.
     *
     * @return int
     */
    public function getGencode()
    {

        return $this->gencode;
    }

    /**
     * Get the [genname] column value.
     *
     * @return string
     */
    public function getGenname()
    {

        return $this->genname;
    }

    /**
     * Get the [genauthoryear] column value.
     *
     * @return string
     */
    public function getGenauthoryear()
    {

        return $this->genauthoryear;
    }

    /**
     * Get the [genauthor] column value.
     *
     * @return string
     */
    public function getGenauthor()
    {

        return $this->genauthor;
    }

    /**
     * Get the [genyear] column value.
     *
     * @return int
     */
    public function getGenyear()
    {

        return $this->genyear;
    }

    /**
     * Get the [geninex] column value.
     *
     * @return string
     */
    public function getGeninex()
    {

        return $this->geninex;
    }

    /**
     * Get the [gencomname] column value.
     *
     * @return string
     */
    public function getGencomname()
    {

        return $this->gencomname;
    }

    /**
     * Get the [genrefno] column value.
     *
     * @return int
     */
    public function getGenrefno()
    {

        return $this->genrefno;
    }

    /**
     * Get the [available] column value.
     *
     * @return string
     */
    public function getAvailable()
    {

        return $this->available;
    }

    /**
     * Get the [genstatus] column value.
     *
     * @return string
     */
    public function getGenstatus()
    {

        return $this->genstatus;
    }

    /**
     * Get the [genstatusiczn] column value.
     *
     * @return string
     */
    public function getGenstatusiczn()
    {

        return $this->genstatusiczn;
    }

    /**
     * Get the [gencodevalid] column value.
     *
     * @return int
     */
    public function getGencodevalid()
    {

        return $this->gencodevalid;
    }

    /**
     * Get the [remark] column value.
     *
     * @return string
     */
    public function getRemark()
    {

        return $this->remark;
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
     * Get the [gender] column value.
     *
     * @return string
     */
    public function getGender()
    {

        return $this->gender;
    }

    /**
     * Get the [subgenusof] column value.
     *
     * @return string
     */
    public function getSubgenusof()
    {

        return $this->subgenusof;
    }

    /**
     * Get the [famcode] column value.
     *
     * @return int
     */
    public function getFamcode()
    {

        return $this->famcode;
    }

    /**
     * Get the [subfamily] column value.
     *
     * @return string
     */
    public function getSubfamily()
    {

        return $this->subfamily;
    }

    /**
     * Get the [tribe] column value.
     *
     * @return string
     */
    public function getTribe()
    {

        return $this->tribe;
    }

    /**
     * Get the [bodyshapei] column value.
     *
     * @return string
     */
    public function getBodyshapei()
    {

        return $this->bodyshapei;
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
     * Get the [syncode] column value.
     *
     * @return int
     */
    public function getSyncode()
    {

        return $this->syncode;
    }

    /**
     * Get the [fb_sppnb] column value.
     *
     * @return int
     */
    public function getFbSppnb()
    {

        return $this->fb_sppnb;
    }

    /**
     * Get the [coff_sppnb] column value.
     *
     * @return int
     */
    public function getCoffSppnb()
    {

        return $this->coff_sppnb;
    }

    /**
     * Get the [fow_sppnb] column value.
     *
     * @return int
     */
    public function getFowSppnb()
    {

        return $this->fow_sppnb;
    }

    /**
     * Get the [gsd_genusfk] column value.
     *
     * @return int
     */
    public function getGsdGenusfk()
    {

        return $this->gsd_genusfk;
    }

    /**
     * Get the [gsd_genusreffk] column value.
     *
     * @return int
     */
    public function getGsdGenusreffk()
    {

        return $this->gsd_genusreffk;
    }

    /**
     * Get the [distribution] column value.
     *
     * @return string
     */
    public function getDistribution()
    {

        return $this->distribution;
    }

    /**
     * Get the [habitat] column value.
     *
     * @return string
     */
    public function getHabitat()
    {

        return $this->habitat;
    }

    /**
     * Get the [watersalinity] column value.
     *
     * @return string
     */
    public function getWatersalinity()
    {

        return $this->watersalinity;
    }

    /**
     * Get the [marine] column value.
     *
     * @return string
     */
    public function getMarine()
    {

        return $this->marine;
    }

    /**
     * Get the [brackish] column value.
     *
     * @return string
     */
    public function getBrackish()
    {

        return $this->brackish;
    }

    /**
     * Get the [freshwater] column value.
     *
     * @return string
     */
    public function getFreshwater()
    {

        return $this->freshwater;
    }

    /**
     * Get the [diagnosis] column value.
     *
     * @return string
     */
    public function getDiagnosis()
    {

        return $this->diagnosis;
    }

    /**
     * Get the [dspinesmin] column value.
     *
     * @return int
     */
    public function getDspinesmin()
    {

        return $this->dspinesmin;
    }

    /**
     * Get the [dspinesmax] column value.
     *
     * @return int
     */
    public function getDspinesmax()
    {

        return $this->dspinesmax;
    }

    /**
     * Get the [dsoftraysmin] column value.
     *
     * @return int
     */
    public function getDsoftraysmin()
    {

        return $this->dsoftraysmin;
    }

    /**
     * Get the [dsoftraysmax] column value.
     *
     * @return int
     */
    public function getDsoftraysmax()
    {

        return $this->dsoftraysmax;
    }

    /**
     * Get the [totaldsoftraysmin] column value.
     *
     * @return int
     */
    public function getTotaldsoftraysmin()
    {

        return $this->totaldsoftraysmin;
    }

    /**
     * Get the [totaldsoftraysmax] column value.
     *
     * @return int
     */
    public function getTotaldsoftraysmax()
    {

        return $this->totaldsoftraysmax;
    }

    /**
     * Get the [dsoftraysbranchmin] column value.
     *
     * @return int
     */
    public function getDsoftraysbranchmin()
    {

        return $this->dsoftraysbranchmin;
    }

    /**
     * Get the [dsoftraysbranchmax] column value.
     *
     * @return int
     */
    public function getDsoftraysbranchmax()
    {

        return $this->dsoftraysbranchmax;
    }

    /**
     * Get the [aspinesmin] column value.
     *
     * @return int
     */
    public function getAspinesmin()
    {

        return $this->aspinesmin;
    }

    /**
     * Get the [aspinesmax] column value.
     *
     * @return int
     */
    public function getAspinesmax()
    {

        return $this->aspinesmax;
    }

    /**
     * Get the [asoftraysmin] column value.
     *
     * @return int
     */
    public function getAsoftraysmin()
    {

        return $this->asoftraysmin;
    }

    /**
     * Get the [asoftraysmax] column value.
     *
     * @return int
     */
    public function getAsoftraysmax()
    {

        return $this->asoftraysmax;
    }

    /**
     * Get the [totalasoftraysmin] column value.
     *
     * @return int
     */
    public function getTotalasoftraysmin()
    {

        return $this->totalasoftraysmin;
    }

    /**
     * Get the [totalasoftraysmax] column value.
     *
     * @return int
     */
    public function getTotalasoftraysmax()
    {

        return $this->totalasoftraysmax;
    }

    /**
     * Get the [asoftraysbranchmin] column value.
     *
     * @return int
     */
    public function getAsoftraysbranchmin()
    {

        return $this->asoftraysbranchmin;
    }

    /**
     * Get the [asoftraysbranchmax] column value.
     *
     * @return int
     */
    public function getAsoftraysbranchmax()
    {

        return $this->asoftraysbranchmax;
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
     * Set the value of [gencode] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setGencode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gencode !== $v) {
            $this->gencode = $v;
            $this->modifiedColumns[] = GeneraPeer::GENCODE;
        }


        return $this;
    } // setGencode()

    /**
     * Set the value of [genname] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setGenname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genname !== $v) {
            $this->genname = $v;
            $this->modifiedColumns[] = GeneraPeer::GENNAME;
        }


        return $this;
    } // setGenname()

    /**
     * Set the value of [genauthoryear] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setGenauthoryear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genauthoryear !== $v) {
            $this->genauthoryear = $v;
            $this->modifiedColumns[] = GeneraPeer::GENAUTHORYEAR;
        }


        return $this;
    } // setGenauthoryear()

    /**
     * Set the value of [genauthor] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setGenauthor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genauthor !== $v) {
            $this->genauthor = $v;
            $this->modifiedColumns[] = GeneraPeer::GENAUTHOR;
        }


        return $this;
    } // setGenauthor()

    /**
     * Set the value of [genyear] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setGenyear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->genyear !== $v) {
            $this->genyear = $v;
            $this->modifiedColumns[] = GeneraPeer::GENYEAR;
        }


        return $this;
    } // setGenyear()

    /**
     * Set the value of [geninex] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setGeninex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->geninex !== $v) {
            $this->geninex = $v;
            $this->modifiedColumns[] = GeneraPeer::GENINEX;
        }


        return $this;
    } // setGeninex()

    /**
     * Set the value of [gencomname] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setGencomname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gencomname !== $v) {
            $this->gencomname = $v;
            $this->modifiedColumns[] = GeneraPeer::GENCOMNAME;
        }


        return $this;
    } // setGencomname()

    /**
     * Set the value of [genrefno] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setGenrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->genrefno !== $v) {
            $this->genrefno = $v;
            $this->modifiedColumns[] = GeneraPeer::GENREFNO;
        }


        return $this;
    } // setGenrefno()

    /**
     * Set the value of [available] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setAvailable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->available !== $v) {
            $this->available = $v;
            $this->modifiedColumns[] = GeneraPeer::AVAILABLE;
        }


        return $this;
    } // setAvailable()

    /**
     * Set the value of [genstatus] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setGenstatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genstatus !== $v) {
            $this->genstatus = $v;
            $this->modifiedColumns[] = GeneraPeer::GENSTATUS;
        }


        return $this;
    } // setGenstatus()

    /**
     * Set the value of [genstatusiczn] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setGenstatusiczn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genstatusiczn !== $v) {
            $this->genstatusiczn = $v;
            $this->modifiedColumns[] = GeneraPeer::GENSTATUSICZN;
        }


        return $this;
    } // setGenstatusiczn()

    /**
     * Set the value of [gencodevalid] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setGencodevalid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gencodevalid !== $v) {
            $this->gencodevalid = $v;
            $this->modifiedColumns[] = GeneraPeer::GENCODEVALID;
        }


        return $this;
    } // setGencodevalid()

    /**
     * Set the value of [remark] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setRemark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remark !== $v) {
            $this->remark = $v;
            $this->modifiedColumns[] = GeneraPeer::REMARK;
        }


        return $this;
    } // setRemark()

    /**
     * Set the value of [etymology] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setEtymology($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etymology !== $v) {
            $this->etymology = $v;
            $this->modifiedColumns[] = GeneraPeer::ETYMOLOGY;
        }


        return $this;
    } // setEtymology()

    /**
     * Set the value of [gender] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setGender($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gender !== $v) {
            $this->gender = $v;
            $this->modifiedColumns[] = GeneraPeer::GENDER;
        }


        return $this;
    } // setGender()

    /**
     * Set the value of [subgenusof] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setSubgenusof($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->subgenusof !== $v) {
            $this->subgenusof = $v;
            $this->modifiedColumns[] = GeneraPeer::SUBGENUSOF;
        }


        return $this;
    } // setSubgenusof()

    /**
     * Set the value of [famcode] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setFamcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->famcode !== $v) {
            $this->famcode = $v;
            $this->modifiedColumns[] = GeneraPeer::FAMCODE;
        }


        return $this;
    } // setFamcode()

    /**
     * Set the value of [subfamily] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setSubfamily($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->subfamily !== $v) {
            $this->subfamily = $v;
            $this->modifiedColumns[] = GeneraPeer::SUBFAMILY;
        }


        return $this;
    } // setSubfamily()

    /**
     * Set the value of [tribe] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setTribe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tribe !== $v) {
            $this->tribe = $v;
            $this->modifiedColumns[] = GeneraPeer::TRIBE;
        }


        return $this;
    } // setTribe()

    /**
     * Set the value of [bodyshapei] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setBodyshapei($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bodyshapei !== $v) {
            $this->bodyshapei = $v;
            $this->modifiedColumns[] = GeneraPeer::BODYSHAPEI;
        }


        return $this;
    } // setBodyshapei()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = GeneraPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [syncode] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setSyncode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->syncode !== $v) {
            $this->syncode = $v;
            $this->modifiedColumns[] = GeneraPeer::SYNCODE;
        }


        return $this;
    } // setSyncode()

    /**
     * Set the value of [fb_sppnb] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setFbSppnb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fb_sppnb !== $v) {
            $this->fb_sppnb = $v;
            $this->modifiedColumns[] = GeneraPeer::FB_SPPNB;
        }


        return $this;
    } // setFbSppnb()

    /**
     * Set the value of [coff_sppnb] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setCoffSppnb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->coff_sppnb !== $v) {
            $this->coff_sppnb = $v;
            $this->modifiedColumns[] = GeneraPeer::COFF_SPPNB;
        }


        return $this;
    } // setCoffSppnb()

    /**
     * Set the value of [fow_sppnb] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setFowSppnb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fow_sppnb !== $v) {
            $this->fow_sppnb = $v;
            $this->modifiedColumns[] = GeneraPeer::FOW_SPPNB;
        }


        return $this;
    } // setFowSppnb()

    /**
     * Set the value of [gsd_genusfk] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setGsdGenusfk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gsd_genusfk !== $v) {
            $this->gsd_genusfk = $v;
            $this->modifiedColumns[] = GeneraPeer::GSD_GENUSFK;
        }


        return $this;
    } // setGsdGenusfk()

    /**
     * Set the value of [gsd_genusreffk] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setGsdGenusreffk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gsd_genusreffk !== $v) {
            $this->gsd_genusreffk = $v;
            $this->modifiedColumns[] = GeneraPeer::GSD_GENUSREFFK;
        }


        return $this;
    } // setGsdGenusreffk()

    /**
     * Set the value of [distribution] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setDistribution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->distribution !== $v) {
            $this->distribution = $v;
            $this->modifiedColumns[] = GeneraPeer::DISTRIBUTION;
        }


        return $this;
    } // setDistribution()

    /**
     * Set the value of [habitat] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setHabitat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->habitat !== $v) {
            $this->habitat = $v;
            $this->modifiedColumns[] = GeneraPeer::HABITAT;
        }


        return $this;
    } // setHabitat()

    /**
     * Set the value of [watersalinity] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setWatersalinity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->watersalinity !== $v) {
            $this->watersalinity = $v;
            $this->modifiedColumns[] = GeneraPeer::WATERSALINITY;
        }


        return $this;
    } // setWatersalinity()

    /**
     * Set the value of [marine] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setMarine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->marine !== $v) {
            $this->marine = $v;
            $this->modifiedColumns[] = GeneraPeer::MARINE;
        }


        return $this;
    } // setMarine()

    /**
     * Set the value of [brackish] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setBrackish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->brackish !== $v) {
            $this->brackish = $v;
            $this->modifiedColumns[] = GeneraPeer::BRACKISH;
        }


        return $this;
    } // setBrackish()

    /**
     * Set the value of [freshwater] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setFreshwater($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->freshwater !== $v) {
            $this->freshwater = $v;
            $this->modifiedColumns[] = GeneraPeer::FRESHWATER;
        }


        return $this;
    } // setFreshwater()

    /**
     * Set the value of [diagnosis] column.
     *
     * @param  string $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setDiagnosis($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->diagnosis !== $v) {
            $this->diagnosis = $v;
            $this->modifiedColumns[] = GeneraPeer::DIAGNOSIS;
        }


        return $this;
    } // setDiagnosis()

    /**
     * Set the value of [dspinesmin] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setDspinesmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dspinesmin !== $v) {
            $this->dspinesmin = $v;
            $this->modifiedColumns[] = GeneraPeer::DSPINESMIN;
        }


        return $this;
    } // setDspinesmin()

    /**
     * Set the value of [dspinesmax] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setDspinesmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dspinesmax !== $v) {
            $this->dspinesmax = $v;
            $this->modifiedColumns[] = GeneraPeer::DSPINESMAX;
        }


        return $this;
    } // setDspinesmax()

    /**
     * Set the value of [dsoftraysmin] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setDsoftraysmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dsoftraysmin !== $v) {
            $this->dsoftraysmin = $v;
            $this->modifiedColumns[] = GeneraPeer::DSOFTRAYSMIN;
        }


        return $this;
    } // setDsoftraysmin()

    /**
     * Set the value of [dsoftraysmax] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setDsoftraysmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dsoftraysmax !== $v) {
            $this->dsoftraysmax = $v;
            $this->modifiedColumns[] = GeneraPeer::DSOFTRAYSMAX;
        }


        return $this;
    } // setDsoftraysmax()

    /**
     * Set the value of [totaldsoftraysmin] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setTotaldsoftraysmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->totaldsoftraysmin !== $v) {
            $this->totaldsoftraysmin = $v;
            $this->modifiedColumns[] = GeneraPeer::TOTALDSOFTRAYSMIN;
        }


        return $this;
    } // setTotaldsoftraysmin()

    /**
     * Set the value of [totaldsoftraysmax] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setTotaldsoftraysmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->totaldsoftraysmax !== $v) {
            $this->totaldsoftraysmax = $v;
            $this->modifiedColumns[] = GeneraPeer::TOTALDSOFTRAYSMAX;
        }


        return $this;
    } // setTotaldsoftraysmax()

    /**
     * Set the value of [dsoftraysbranchmin] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setDsoftraysbranchmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dsoftraysbranchmin !== $v) {
            $this->dsoftraysbranchmin = $v;
            $this->modifiedColumns[] = GeneraPeer::DSOFTRAYSBRANCHMIN;
        }


        return $this;
    } // setDsoftraysbranchmin()

    /**
     * Set the value of [dsoftraysbranchmax] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setDsoftraysbranchmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dsoftraysbranchmax !== $v) {
            $this->dsoftraysbranchmax = $v;
            $this->modifiedColumns[] = GeneraPeer::DSOFTRAYSBRANCHMAX;
        }


        return $this;
    } // setDsoftraysbranchmax()

    /**
     * Set the value of [aspinesmin] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setAspinesmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aspinesmin !== $v) {
            $this->aspinesmin = $v;
            $this->modifiedColumns[] = GeneraPeer::ASPINESMIN;
        }


        return $this;
    } // setAspinesmin()

    /**
     * Set the value of [aspinesmax] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setAspinesmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aspinesmax !== $v) {
            $this->aspinesmax = $v;
            $this->modifiedColumns[] = GeneraPeer::ASPINESMAX;
        }


        return $this;
    } // setAspinesmax()

    /**
     * Set the value of [asoftraysmin] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setAsoftraysmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->asoftraysmin !== $v) {
            $this->asoftraysmin = $v;
            $this->modifiedColumns[] = GeneraPeer::ASOFTRAYSMIN;
        }


        return $this;
    } // setAsoftraysmin()

    /**
     * Set the value of [asoftraysmax] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setAsoftraysmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->asoftraysmax !== $v) {
            $this->asoftraysmax = $v;
            $this->modifiedColumns[] = GeneraPeer::ASOFTRAYSMAX;
        }


        return $this;
    } // setAsoftraysmax()

    /**
     * Set the value of [totalasoftraysmin] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setTotalasoftraysmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->totalasoftraysmin !== $v) {
            $this->totalasoftraysmin = $v;
            $this->modifiedColumns[] = GeneraPeer::TOTALASOFTRAYSMIN;
        }


        return $this;
    } // setTotalasoftraysmin()

    /**
     * Set the value of [totalasoftraysmax] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setTotalasoftraysmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->totalasoftraysmax !== $v) {
            $this->totalasoftraysmax = $v;
            $this->modifiedColumns[] = GeneraPeer::TOTALASOFTRAYSMAX;
        }


        return $this;
    } // setTotalasoftraysmax()

    /**
     * Set the value of [asoftraysbranchmin] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setAsoftraysbranchmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->asoftraysbranchmin !== $v) {
            $this->asoftraysbranchmin = $v;
            $this->modifiedColumns[] = GeneraPeer::ASOFTRAYSBRANCHMIN;
        }


        return $this;
    } // setAsoftraysbranchmin()

    /**
     * Set the value of [asoftraysbranchmax] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setAsoftraysbranchmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->asoftraysbranchmax !== $v) {
            $this->asoftraysbranchmax = $v;
            $this->modifiedColumns[] = GeneraPeer::ASOFTRAYSBRANCHMAX;
        }


        return $this;
    } // setAsoftraysbranchmax()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = GeneraPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Genera The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = GeneraPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = GeneraPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Genera The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = GeneraPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Genera The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = GeneraPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Genera The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = GeneraPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

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
            if ($this->genname !== '') {
                return false;
            }

            if ($this->genauthoryear !== '') {
                return false;
            }

            if ($this->genstatus !== '') {
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

            $this->gencode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->genname = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->genauthoryear = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->genauthor = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->genyear = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->geninex = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->gencomname = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->genrefno = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->available = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->genstatus = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->genstatusiczn = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->gencodevalid = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->remark = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->etymology = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->gender = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->subgenusof = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->famcode = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->subfamily = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->tribe = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->bodyshapei = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->comment = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->syncode = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->fb_sppnb = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->coff_sppnb = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->fow_sppnb = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->gsd_genusfk = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->gsd_genusreffk = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->distribution = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->habitat = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->watersalinity = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->marine = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->brackish = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->freshwater = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->diagnosis = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->dspinesmin = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->dspinesmax = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->dsoftraysmin = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->dsoftraysmax = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->totaldsoftraysmin = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->totaldsoftraysmax = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->dsoftraysbranchmin = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->dsoftraysbranchmax = ($row[$startcol + 41] !== null) ? (int) $row[$startcol + 41] : null;
            $this->aspinesmin = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->aspinesmax = ($row[$startcol + 43] !== null) ? (int) $row[$startcol + 43] : null;
            $this->asoftraysmin = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->asoftraysmax = ($row[$startcol + 45] !== null) ? (int) $row[$startcol + 45] : null;
            $this->totalasoftraysmin = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->totalasoftraysmax = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->asoftraysbranchmin = ($row[$startcol + 48] !== null) ? (int) $row[$startcol + 48] : null;
            $this->asoftraysbranchmax = ($row[$startcol + 49] !== null) ? (int) $row[$startcol + 49] : null;
            $this->entered = ($row[$startcol + 50] !== null) ? (int) $row[$startcol + 50] : null;
            $this->dateentered = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->modified = ($row[$startcol + 52] !== null) ? (int) $row[$startcol + 52] : null;
            $this->datemodified = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->expert = ($row[$startcol + 54] !== null) ? (int) $row[$startcol + 54] : null;
            $this->datechecked = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 56; // 56 = GeneraPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Genera object", $e);
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
            $con = Propel::getConnection(GeneraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GeneraPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GeneraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GeneraQuery::create()
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
            $con = Propel::getConnection(GeneraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GeneraPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GeneraPeer::GENCODE)) {
            $modifiedColumns[':p' . $index++]  = '`GenCode`';
        }
        if ($this->isColumnModified(GeneraPeer::GENNAME)) {
            $modifiedColumns[':p' . $index++]  = '`GenName`';
        }
        if ($this->isColumnModified(GeneraPeer::GENAUTHORYEAR)) {
            $modifiedColumns[':p' . $index++]  = '`GenAuthorYear`';
        }
        if ($this->isColumnModified(GeneraPeer::GENAUTHOR)) {
            $modifiedColumns[':p' . $index++]  = '`GenAuthor`';
        }
        if ($this->isColumnModified(GeneraPeer::GENYEAR)) {
            $modifiedColumns[':p' . $index++]  = '`GenYear`';
        }
        if ($this->isColumnModified(GeneraPeer::GENINEX)) {
            $modifiedColumns[':p' . $index++]  = '`GenInEx`';
        }
        if ($this->isColumnModified(GeneraPeer::GENCOMNAME)) {
            $modifiedColumns[':p' . $index++]  = '`GenComName`';
        }
        if ($this->isColumnModified(GeneraPeer::GENREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`GenRefno`';
        }
        if ($this->isColumnModified(GeneraPeer::AVAILABLE)) {
            $modifiedColumns[':p' . $index++]  = '`Available`';
        }
        if ($this->isColumnModified(GeneraPeer::GENSTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`GenStatus`';
        }
        if ($this->isColumnModified(GeneraPeer::GENSTATUSICZN)) {
            $modifiedColumns[':p' . $index++]  = '`GenStatusICZN`';
        }
        if ($this->isColumnModified(GeneraPeer::GENCODEVALID)) {
            $modifiedColumns[':p' . $index++]  = '`GenCodeValid`';
        }
        if ($this->isColumnModified(GeneraPeer::REMARK)) {
            $modifiedColumns[':p' . $index++]  = '`Remark`';
        }
        if ($this->isColumnModified(GeneraPeer::ETYMOLOGY)) {
            $modifiedColumns[':p' . $index++]  = '`Etymology`';
        }
        if ($this->isColumnModified(GeneraPeer::GENDER)) {
            $modifiedColumns[':p' . $index++]  = '`Gender`';
        }
        if ($this->isColumnModified(GeneraPeer::SUBGENUSOF)) {
            $modifiedColumns[':p' . $index++]  = '`SubgenusOf`';
        }
        if ($this->isColumnModified(GeneraPeer::FAMCODE)) {
            $modifiedColumns[':p' . $index++]  = '`FamCode`';
        }
        if ($this->isColumnModified(GeneraPeer::SUBFAMILY)) {
            $modifiedColumns[':p' . $index++]  = '`Subfamily`';
        }
        if ($this->isColumnModified(GeneraPeer::TRIBE)) {
            $modifiedColumns[':p' . $index++]  = '`Tribe`';
        }
        if ($this->isColumnModified(GeneraPeer::BODYSHAPEI)) {
            $modifiedColumns[':p' . $index++]  = '`BodyShapeI`';
        }
        if ($this->isColumnModified(GeneraPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Comment`';
        }
        if ($this->isColumnModified(GeneraPeer::SYNCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SynCode`';
        }
        if ($this->isColumnModified(GeneraPeer::FB_SPPNB)) {
            $modifiedColumns[':p' . $index++]  = '`FB_SppNb`';
        }
        if ($this->isColumnModified(GeneraPeer::COFF_SPPNB)) {
            $modifiedColumns[':p' . $index++]  = '`CofF_SppNb`';
        }
        if ($this->isColumnModified(GeneraPeer::FOW_SPPNB)) {
            $modifiedColumns[':p' . $index++]  = '`FoW_SppNb`';
        }
        if ($this->isColumnModified(GeneraPeer::GSD_GENUSFK)) {
            $modifiedColumns[':p' . $index++]  = '`GSD_GenusFk`';
        }
        if ($this->isColumnModified(GeneraPeer::GSD_GENUSREFFK)) {
            $modifiedColumns[':p' . $index++]  = '`GSD_GenusRefFk`';
        }
        if ($this->isColumnModified(GeneraPeer::DISTRIBUTION)) {
            $modifiedColumns[':p' . $index++]  = '`Distribution`';
        }
        if ($this->isColumnModified(GeneraPeer::HABITAT)) {
            $modifiedColumns[':p' . $index++]  = '`Habitat`';
        }
        if ($this->isColumnModified(GeneraPeer::WATERSALINITY)) {
            $modifiedColumns[':p' . $index++]  = '`WaterSalinity`';
        }
        if ($this->isColumnModified(GeneraPeer::MARINE)) {
            $modifiedColumns[':p' . $index++]  = '`Marine`';
        }
        if ($this->isColumnModified(GeneraPeer::BRACKISH)) {
            $modifiedColumns[':p' . $index++]  = '`Brackish`';
        }
        if ($this->isColumnModified(GeneraPeer::FRESHWATER)) {
            $modifiedColumns[':p' . $index++]  = '`Freshwater`';
        }
        if ($this->isColumnModified(GeneraPeer::DIAGNOSIS)) {
            $modifiedColumns[':p' . $index++]  = '`Diagnosis`';
        }
        if ($this->isColumnModified(GeneraPeer::DSPINESMIN)) {
            $modifiedColumns[':p' . $index++]  = '`DspinesMin`';
        }
        if ($this->isColumnModified(GeneraPeer::DSPINESMAX)) {
            $modifiedColumns[':p' . $index++]  = '`DspinesMax`';
        }
        if ($this->isColumnModified(GeneraPeer::DSOFTRAYSMIN)) {
            $modifiedColumns[':p' . $index++]  = '`DsoftRaysMin`';
        }
        if ($this->isColumnModified(GeneraPeer::DSOFTRAYSMAX)) {
            $modifiedColumns[':p' . $index++]  = '`DsoftRaysMax`';
        }
        if ($this->isColumnModified(GeneraPeer::TOTALDSOFTRAYSMIN)) {
            $modifiedColumns[':p' . $index++]  = '`TotalDsoftRaysMin`';
        }
        if ($this->isColumnModified(GeneraPeer::TOTALDSOFTRAYSMAX)) {
            $modifiedColumns[':p' . $index++]  = '`TotalDsoftRaysMax`';
        }
        if ($this->isColumnModified(GeneraPeer::DSOFTRAYSBRANCHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`DsoftRaysBranchMin`';
        }
        if ($this->isColumnModified(GeneraPeer::DSOFTRAYSBRANCHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`DsoftRaysBranchMax`';
        }
        if ($this->isColumnModified(GeneraPeer::ASPINESMIN)) {
            $modifiedColumns[':p' . $index++]  = '`AspinesMin`';
        }
        if ($this->isColumnModified(GeneraPeer::ASPINESMAX)) {
            $modifiedColumns[':p' . $index++]  = '`AspinesMax`';
        }
        if ($this->isColumnModified(GeneraPeer::ASOFTRAYSMIN)) {
            $modifiedColumns[':p' . $index++]  = '`AsoftRaysMin`';
        }
        if ($this->isColumnModified(GeneraPeer::ASOFTRAYSMAX)) {
            $modifiedColumns[':p' . $index++]  = '`AsoftRaysMax`';
        }
        if ($this->isColumnModified(GeneraPeer::TOTALASOFTRAYSMIN)) {
            $modifiedColumns[':p' . $index++]  = '`TotalAsoftRaysMin`';
        }
        if ($this->isColumnModified(GeneraPeer::TOTALASOFTRAYSMAX)) {
            $modifiedColumns[':p' . $index++]  = '`TotalAsoftRaysMax`';
        }
        if ($this->isColumnModified(GeneraPeer::ASOFTRAYSBRANCHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`AsoftRaysBranchMin`';
        }
        if ($this->isColumnModified(GeneraPeer::ASOFTRAYSBRANCHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`AsoftRaysBranchMax`';
        }
        if ($this->isColumnModified(GeneraPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(GeneraPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Dateentered`';
        }
        if ($this->isColumnModified(GeneraPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(GeneraPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Datemodified`';
        }
        if ($this->isColumnModified(GeneraPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(GeneraPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`Datechecked`';
        }

        $sql = sprintf(
            'INSERT INTO `genera` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`GenCode`':
                        $stmt->bindValue($identifier, $this->gencode, PDO::PARAM_INT);
                        break;
                    case '`GenName`':
                        $stmt->bindValue($identifier, $this->genname, PDO::PARAM_STR);
                        break;
                    case '`GenAuthorYear`':
                        $stmt->bindValue($identifier, $this->genauthoryear, PDO::PARAM_STR);
                        break;
                    case '`GenAuthor`':
                        $stmt->bindValue($identifier, $this->genauthor, PDO::PARAM_STR);
                        break;
                    case '`GenYear`':
                        $stmt->bindValue($identifier, $this->genyear, PDO::PARAM_INT);
                        break;
                    case '`GenInEx`':
                        $stmt->bindValue($identifier, $this->geninex, PDO::PARAM_STR);
                        break;
                    case '`GenComName`':
                        $stmt->bindValue($identifier, $this->gencomname, PDO::PARAM_STR);
                        break;
                    case '`GenRefno`':
                        $stmt->bindValue($identifier, $this->genrefno, PDO::PARAM_INT);
                        break;
                    case '`Available`':
                        $stmt->bindValue($identifier, $this->available, PDO::PARAM_STR);
                        break;
                    case '`GenStatus`':
                        $stmt->bindValue($identifier, $this->genstatus, PDO::PARAM_STR);
                        break;
                    case '`GenStatusICZN`':
                        $stmt->bindValue($identifier, $this->genstatusiczn, PDO::PARAM_STR);
                        break;
                    case '`GenCodeValid`':
                        $stmt->bindValue($identifier, $this->gencodevalid, PDO::PARAM_INT);
                        break;
                    case '`Remark`':
                        $stmt->bindValue($identifier, $this->remark, PDO::PARAM_STR);
                        break;
                    case '`Etymology`':
                        $stmt->bindValue($identifier, $this->etymology, PDO::PARAM_STR);
                        break;
                    case '`Gender`':
                        $stmt->bindValue($identifier, $this->gender, PDO::PARAM_STR);
                        break;
                    case '`SubgenusOf`':
                        $stmt->bindValue($identifier, $this->subgenusof, PDO::PARAM_STR);
                        break;
                    case '`FamCode`':
                        $stmt->bindValue($identifier, $this->famcode, PDO::PARAM_INT);
                        break;
                    case '`Subfamily`':
                        $stmt->bindValue($identifier, $this->subfamily, PDO::PARAM_STR);
                        break;
                    case '`Tribe`':
                        $stmt->bindValue($identifier, $this->tribe, PDO::PARAM_STR);
                        break;
                    case '`BodyShapeI`':
                        $stmt->bindValue($identifier, $this->bodyshapei, PDO::PARAM_STR);
                        break;
                    case '`Comment`':
                        $stmt->bindValue($identifier, $this->comment, PDO::PARAM_STR);
                        break;
                    case '`SynCode`':
                        $stmt->bindValue($identifier, $this->syncode, PDO::PARAM_INT);
                        break;
                    case '`FB_SppNb`':
                        $stmt->bindValue($identifier, $this->fb_sppnb, PDO::PARAM_INT);
                        break;
                    case '`CofF_SppNb`':
                        $stmt->bindValue($identifier, $this->coff_sppnb, PDO::PARAM_INT);
                        break;
                    case '`FoW_SppNb`':
                        $stmt->bindValue($identifier, $this->fow_sppnb, PDO::PARAM_INT);
                        break;
                    case '`GSD_GenusFk`':
                        $stmt->bindValue($identifier, $this->gsd_genusfk, PDO::PARAM_INT);
                        break;
                    case '`GSD_GenusRefFk`':
                        $stmt->bindValue($identifier, $this->gsd_genusreffk, PDO::PARAM_INT);
                        break;
                    case '`Distribution`':
                        $stmt->bindValue($identifier, $this->distribution, PDO::PARAM_STR);
                        break;
                    case '`Habitat`':
                        $stmt->bindValue($identifier, $this->habitat, PDO::PARAM_STR);
                        break;
                    case '`WaterSalinity`':
                        $stmt->bindValue($identifier, $this->watersalinity, PDO::PARAM_STR);
                        break;
                    case '`Marine`':
                        $stmt->bindValue($identifier, $this->marine, PDO::PARAM_STR);
                        break;
                    case '`Brackish`':
                        $stmt->bindValue($identifier, $this->brackish, PDO::PARAM_STR);
                        break;
                    case '`Freshwater`':
                        $stmt->bindValue($identifier, $this->freshwater, PDO::PARAM_STR);
                        break;
                    case '`Diagnosis`':
                        $stmt->bindValue($identifier, $this->diagnosis, PDO::PARAM_STR);
                        break;
                    case '`DspinesMin`':
                        $stmt->bindValue($identifier, $this->dspinesmin, PDO::PARAM_INT);
                        break;
                    case '`DspinesMax`':
                        $stmt->bindValue($identifier, $this->dspinesmax, PDO::PARAM_INT);
                        break;
                    case '`DsoftRaysMin`':
                        $stmt->bindValue($identifier, $this->dsoftraysmin, PDO::PARAM_INT);
                        break;
                    case '`DsoftRaysMax`':
                        $stmt->bindValue($identifier, $this->dsoftraysmax, PDO::PARAM_INT);
                        break;
                    case '`TotalDsoftRaysMin`':
                        $stmt->bindValue($identifier, $this->totaldsoftraysmin, PDO::PARAM_INT);
                        break;
                    case '`TotalDsoftRaysMax`':
                        $stmt->bindValue($identifier, $this->totaldsoftraysmax, PDO::PARAM_INT);
                        break;
                    case '`DsoftRaysBranchMin`':
                        $stmt->bindValue($identifier, $this->dsoftraysbranchmin, PDO::PARAM_INT);
                        break;
                    case '`DsoftRaysBranchMax`':
                        $stmt->bindValue($identifier, $this->dsoftraysbranchmax, PDO::PARAM_INT);
                        break;
                    case '`AspinesMin`':
                        $stmt->bindValue($identifier, $this->aspinesmin, PDO::PARAM_INT);
                        break;
                    case '`AspinesMax`':
                        $stmt->bindValue($identifier, $this->aspinesmax, PDO::PARAM_INT);
                        break;
                    case '`AsoftRaysMin`':
                        $stmt->bindValue($identifier, $this->asoftraysmin, PDO::PARAM_INT);
                        break;
                    case '`AsoftRaysMax`':
                        $stmt->bindValue($identifier, $this->asoftraysmax, PDO::PARAM_INT);
                        break;
                    case '`TotalAsoftRaysMin`':
                        $stmt->bindValue($identifier, $this->totalasoftraysmin, PDO::PARAM_INT);
                        break;
                    case '`TotalAsoftRaysMax`':
                        $stmt->bindValue($identifier, $this->totalasoftraysmax, PDO::PARAM_INT);
                        break;
                    case '`AsoftRaysBranchMin`':
                        $stmt->bindValue($identifier, $this->asoftraysbranchmin, PDO::PARAM_INT);
                        break;
                    case '`AsoftRaysBranchMax`':
                        $stmt->bindValue($identifier, $this->asoftraysbranchmax, PDO::PARAM_INT);
                        break;
                    case '`Entered`':
                        $stmt->bindValue($identifier, $this->entered, PDO::PARAM_INT);
                        break;
                    case '`Dateentered`':
                        $stmt->bindValue($identifier, $this->dateentered, PDO::PARAM_STR);
                        break;
                    case '`Modified`':
                        $stmt->bindValue($identifier, $this->modified, PDO::PARAM_INT);
                        break;
                    case '`Datemodified`':
                        $stmt->bindValue($identifier, $this->datemodified, PDO::PARAM_STR);
                        break;
                    case '`Expert`':
                        $stmt->bindValue($identifier, $this->expert, PDO::PARAM_INT);
                        break;
                    case '`Datechecked`':
                        $stmt->bindValue($identifier, $this->datechecked, PDO::PARAM_STR);
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
        $this->setGenname($pk);

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


            if (($retval = GeneraPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GeneraPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getGencode();
                break;
            case 1:
                return $this->getGenname();
                break;
            case 2:
                return $this->getGenauthoryear();
                break;
            case 3:
                return $this->getGenauthor();
                break;
            case 4:
                return $this->getGenyear();
                break;
            case 5:
                return $this->getGeninex();
                break;
            case 6:
                return $this->getGencomname();
                break;
            case 7:
                return $this->getGenrefno();
                break;
            case 8:
                return $this->getAvailable();
                break;
            case 9:
                return $this->getGenstatus();
                break;
            case 10:
                return $this->getGenstatusiczn();
                break;
            case 11:
                return $this->getGencodevalid();
                break;
            case 12:
                return $this->getRemark();
                break;
            case 13:
                return $this->getEtymology();
                break;
            case 14:
                return $this->getGender();
                break;
            case 15:
                return $this->getSubgenusof();
                break;
            case 16:
                return $this->getFamcode();
                break;
            case 17:
                return $this->getSubfamily();
                break;
            case 18:
                return $this->getTribe();
                break;
            case 19:
                return $this->getBodyshapei();
                break;
            case 20:
                return $this->getComment();
                break;
            case 21:
                return $this->getSyncode();
                break;
            case 22:
                return $this->getFbSppnb();
                break;
            case 23:
                return $this->getCoffSppnb();
                break;
            case 24:
                return $this->getFowSppnb();
                break;
            case 25:
                return $this->getGsdGenusfk();
                break;
            case 26:
                return $this->getGsdGenusreffk();
                break;
            case 27:
                return $this->getDistribution();
                break;
            case 28:
                return $this->getHabitat();
                break;
            case 29:
                return $this->getWatersalinity();
                break;
            case 30:
                return $this->getMarine();
                break;
            case 31:
                return $this->getBrackish();
                break;
            case 32:
                return $this->getFreshwater();
                break;
            case 33:
                return $this->getDiagnosis();
                break;
            case 34:
                return $this->getDspinesmin();
                break;
            case 35:
                return $this->getDspinesmax();
                break;
            case 36:
                return $this->getDsoftraysmin();
                break;
            case 37:
                return $this->getDsoftraysmax();
                break;
            case 38:
                return $this->getTotaldsoftraysmin();
                break;
            case 39:
                return $this->getTotaldsoftraysmax();
                break;
            case 40:
                return $this->getDsoftraysbranchmin();
                break;
            case 41:
                return $this->getDsoftraysbranchmax();
                break;
            case 42:
                return $this->getAspinesmin();
                break;
            case 43:
                return $this->getAspinesmax();
                break;
            case 44:
                return $this->getAsoftraysmin();
                break;
            case 45:
                return $this->getAsoftraysmax();
                break;
            case 46:
                return $this->getTotalasoftraysmin();
                break;
            case 47:
                return $this->getTotalasoftraysmax();
                break;
            case 48:
                return $this->getAsoftraysbranchmin();
                break;
            case 49:
                return $this->getAsoftraysbranchmax();
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
        if (isset($alreadyDumpedObjects['Genera'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Genera'][serialize($this->getPrimaryKey())] = true;
        $keys = GeneraPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getGencode(),
            $keys[1] => $this->getGenname(),
            $keys[2] => $this->getGenauthoryear(),
            $keys[3] => $this->getGenauthor(),
            $keys[4] => $this->getGenyear(),
            $keys[5] => $this->getGeninex(),
            $keys[6] => $this->getGencomname(),
            $keys[7] => $this->getGenrefno(),
            $keys[8] => $this->getAvailable(),
            $keys[9] => $this->getGenstatus(),
            $keys[10] => $this->getGenstatusiczn(),
            $keys[11] => $this->getGencodevalid(),
            $keys[12] => $this->getRemark(),
            $keys[13] => $this->getEtymology(),
            $keys[14] => $this->getGender(),
            $keys[15] => $this->getSubgenusof(),
            $keys[16] => $this->getFamcode(),
            $keys[17] => $this->getSubfamily(),
            $keys[18] => $this->getTribe(),
            $keys[19] => $this->getBodyshapei(),
            $keys[20] => $this->getComment(),
            $keys[21] => $this->getSyncode(),
            $keys[22] => $this->getFbSppnb(),
            $keys[23] => $this->getCoffSppnb(),
            $keys[24] => $this->getFowSppnb(),
            $keys[25] => $this->getGsdGenusfk(),
            $keys[26] => $this->getGsdGenusreffk(),
            $keys[27] => $this->getDistribution(),
            $keys[28] => $this->getHabitat(),
            $keys[29] => $this->getWatersalinity(),
            $keys[30] => $this->getMarine(),
            $keys[31] => $this->getBrackish(),
            $keys[32] => $this->getFreshwater(),
            $keys[33] => $this->getDiagnosis(),
            $keys[34] => $this->getDspinesmin(),
            $keys[35] => $this->getDspinesmax(),
            $keys[36] => $this->getDsoftraysmin(),
            $keys[37] => $this->getDsoftraysmax(),
            $keys[38] => $this->getTotaldsoftraysmin(),
            $keys[39] => $this->getTotaldsoftraysmax(),
            $keys[40] => $this->getDsoftraysbranchmin(),
            $keys[41] => $this->getDsoftraysbranchmax(),
            $keys[42] => $this->getAspinesmin(),
            $keys[43] => $this->getAspinesmax(),
            $keys[44] => $this->getAsoftraysmin(),
            $keys[45] => $this->getAsoftraysmax(),
            $keys[46] => $this->getTotalasoftraysmin(),
            $keys[47] => $this->getTotalasoftraysmax(),
            $keys[48] => $this->getAsoftraysbranchmin(),
            $keys[49] => $this->getAsoftraysbranchmax(),
            $keys[50] => $this->getEntered(),
            $keys[51] => $this->getDateentered(),
            $keys[52] => $this->getModified(),
            $keys[53] => $this->getDatemodified(),
            $keys[54] => $this->getExpert(),
            $keys[55] => $this->getDatechecked(),
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
        $pos = GeneraPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setGencode($value);
                break;
            case 1:
                $this->setGenname($value);
                break;
            case 2:
                $this->setGenauthoryear($value);
                break;
            case 3:
                $this->setGenauthor($value);
                break;
            case 4:
                $this->setGenyear($value);
                break;
            case 5:
                $this->setGeninex($value);
                break;
            case 6:
                $this->setGencomname($value);
                break;
            case 7:
                $this->setGenrefno($value);
                break;
            case 8:
                $this->setAvailable($value);
                break;
            case 9:
                $this->setGenstatus($value);
                break;
            case 10:
                $this->setGenstatusiczn($value);
                break;
            case 11:
                $this->setGencodevalid($value);
                break;
            case 12:
                $this->setRemark($value);
                break;
            case 13:
                $this->setEtymology($value);
                break;
            case 14:
                $this->setGender($value);
                break;
            case 15:
                $this->setSubgenusof($value);
                break;
            case 16:
                $this->setFamcode($value);
                break;
            case 17:
                $this->setSubfamily($value);
                break;
            case 18:
                $this->setTribe($value);
                break;
            case 19:
                $this->setBodyshapei($value);
                break;
            case 20:
                $this->setComment($value);
                break;
            case 21:
                $this->setSyncode($value);
                break;
            case 22:
                $this->setFbSppnb($value);
                break;
            case 23:
                $this->setCoffSppnb($value);
                break;
            case 24:
                $this->setFowSppnb($value);
                break;
            case 25:
                $this->setGsdGenusfk($value);
                break;
            case 26:
                $this->setGsdGenusreffk($value);
                break;
            case 27:
                $this->setDistribution($value);
                break;
            case 28:
                $this->setHabitat($value);
                break;
            case 29:
                $this->setWatersalinity($value);
                break;
            case 30:
                $this->setMarine($value);
                break;
            case 31:
                $this->setBrackish($value);
                break;
            case 32:
                $this->setFreshwater($value);
                break;
            case 33:
                $this->setDiagnosis($value);
                break;
            case 34:
                $this->setDspinesmin($value);
                break;
            case 35:
                $this->setDspinesmax($value);
                break;
            case 36:
                $this->setDsoftraysmin($value);
                break;
            case 37:
                $this->setDsoftraysmax($value);
                break;
            case 38:
                $this->setTotaldsoftraysmin($value);
                break;
            case 39:
                $this->setTotaldsoftraysmax($value);
                break;
            case 40:
                $this->setDsoftraysbranchmin($value);
                break;
            case 41:
                $this->setDsoftraysbranchmax($value);
                break;
            case 42:
                $this->setAspinesmin($value);
                break;
            case 43:
                $this->setAspinesmax($value);
                break;
            case 44:
                $this->setAsoftraysmin($value);
                break;
            case 45:
                $this->setAsoftraysmax($value);
                break;
            case 46:
                $this->setTotalasoftraysmin($value);
                break;
            case 47:
                $this->setTotalasoftraysmax($value);
                break;
            case 48:
                $this->setAsoftraysbranchmin($value);
                break;
            case 49:
                $this->setAsoftraysbranchmax($value);
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
        $keys = GeneraPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setGencode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setGenname($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setGenauthoryear($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setGenauthor($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setGenyear($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setGeninex($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setGencomname($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setGenrefno($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setAvailable($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setGenstatus($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setGenstatusiczn($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setGencodevalid($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setRemark($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setEtymology($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setGender($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setSubgenusof($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setFamcode($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setSubfamily($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setTribe($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setBodyshapei($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setComment($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setSyncode($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setFbSppnb($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setCoffSppnb($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setFowSppnb($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setGsdGenusfk($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setGsdGenusreffk($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDistribution($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setHabitat($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setWatersalinity($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setMarine($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setBrackish($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setFreshwater($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setDiagnosis($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setDspinesmin($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setDspinesmax($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setDsoftraysmin($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setDsoftraysmax($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setTotaldsoftraysmin($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setTotaldsoftraysmax($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setDsoftraysbranchmin($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setDsoftraysbranchmax($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setAspinesmin($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setAspinesmax($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setAsoftraysmin($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setAsoftraysmax($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setTotalasoftraysmin($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setTotalasoftraysmax($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setAsoftraysbranchmin($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setAsoftraysbranchmax($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setEntered($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setDateentered($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setModified($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setDatemodified($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setExpert($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setDatechecked($arr[$keys[55]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GeneraPeer::DATABASE_NAME);

        if ($this->isColumnModified(GeneraPeer::GENCODE)) $criteria->add(GeneraPeer::GENCODE, $this->gencode);
        if ($this->isColumnModified(GeneraPeer::GENNAME)) $criteria->add(GeneraPeer::GENNAME, $this->genname);
        if ($this->isColumnModified(GeneraPeer::GENAUTHORYEAR)) $criteria->add(GeneraPeer::GENAUTHORYEAR, $this->genauthoryear);
        if ($this->isColumnModified(GeneraPeer::GENAUTHOR)) $criteria->add(GeneraPeer::GENAUTHOR, $this->genauthor);
        if ($this->isColumnModified(GeneraPeer::GENYEAR)) $criteria->add(GeneraPeer::GENYEAR, $this->genyear);
        if ($this->isColumnModified(GeneraPeer::GENINEX)) $criteria->add(GeneraPeer::GENINEX, $this->geninex);
        if ($this->isColumnModified(GeneraPeer::GENCOMNAME)) $criteria->add(GeneraPeer::GENCOMNAME, $this->gencomname);
        if ($this->isColumnModified(GeneraPeer::GENREFNO)) $criteria->add(GeneraPeer::GENREFNO, $this->genrefno);
        if ($this->isColumnModified(GeneraPeer::AVAILABLE)) $criteria->add(GeneraPeer::AVAILABLE, $this->available);
        if ($this->isColumnModified(GeneraPeer::GENSTATUS)) $criteria->add(GeneraPeer::GENSTATUS, $this->genstatus);
        if ($this->isColumnModified(GeneraPeer::GENSTATUSICZN)) $criteria->add(GeneraPeer::GENSTATUSICZN, $this->genstatusiczn);
        if ($this->isColumnModified(GeneraPeer::GENCODEVALID)) $criteria->add(GeneraPeer::GENCODEVALID, $this->gencodevalid);
        if ($this->isColumnModified(GeneraPeer::REMARK)) $criteria->add(GeneraPeer::REMARK, $this->remark);
        if ($this->isColumnModified(GeneraPeer::ETYMOLOGY)) $criteria->add(GeneraPeer::ETYMOLOGY, $this->etymology);
        if ($this->isColumnModified(GeneraPeer::GENDER)) $criteria->add(GeneraPeer::GENDER, $this->gender);
        if ($this->isColumnModified(GeneraPeer::SUBGENUSOF)) $criteria->add(GeneraPeer::SUBGENUSOF, $this->subgenusof);
        if ($this->isColumnModified(GeneraPeer::FAMCODE)) $criteria->add(GeneraPeer::FAMCODE, $this->famcode);
        if ($this->isColumnModified(GeneraPeer::SUBFAMILY)) $criteria->add(GeneraPeer::SUBFAMILY, $this->subfamily);
        if ($this->isColumnModified(GeneraPeer::TRIBE)) $criteria->add(GeneraPeer::TRIBE, $this->tribe);
        if ($this->isColumnModified(GeneraPeer::BODYSHAPEI)) $criteria->add(GeneraPeer::BODYSHAPEI, $this->bodyshapei);
        if ($this->isColumnModified(GeneraPeer::COMMENT)) $criteria->add(GeneraPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(GeneraPeer::SYNCODE)) $criteria->add(GeneraPeer::SYNCODE, $this->syncode);
        if ($this->isColumnModified(GeneraPeer::FB_SPPNB)) $criteria->add(GeneraPeer::FB_SPPNB, $this->fb_sppnb);
        if ($this->isColumnModified(GeneraPeer::COFF_SPPNB)) $criteria->add(GeneraPeer::COFF_SPPNB, $this->coff_sppnb);
        if ($this->isColumnModified(GeneraPeer::FOW_SPPNB)) $criteria->add(GeneraPeer::FOW_SPPNB, $this->fow_sppnb);
        if ($this->isColumnModified(GeneraPeer::GSD_GENUSFK)) $criteria->add(GeneraPeer::GSD_GENUSFK, $this->gsd_genusfk);
        if ($this->isColumnModified(GeneraPeer::GSD_GENUSREFFK)) $criteria->add(GeneraPeer::GSD_GENUSREFFK, $this->gsd_genusreffk);
        if ($this->isColumnModified(GeneraPeer::DISTRIBUTION)) $criteria->add(GeneraPeer::DISTRIBUTION, $this->distribution);
        if ($this->isColumnModified(GeneraPeer::HABITAT)) $criteria->add(GeneraPeer::HABITAT, $this->habitat);
        if ($this->isColumnModified(GeneraPeer::WATERSALINITY)) $criteria->add(GeneraPeer::WATERSALINITY, $this->watersalinity);
        if ($this->isColumnModified(GeneraPeer::MARINE)) $criteria->add(GeneraPeer::MARINE, $this->marine);
        if ($this->isColumnModified(GeneraPeer::BRACKISH)) $criteria->add(GeneraPeer::BRACKISH, $this->brackish);
        if ($this->isColumnModified(GeneraPeer::FRESHWATER)) $criteria->add(GeneraPeer::FRESHWATER, $this->freshwater);
        if ($this->isColumnModified(GeneraPeer::DIAGNOSIS)) $criteria->add(GeneraPeer::DIAGNOSIS, $this->diagnosis);
        if ($this->isColumnModified(GeneraPeer::DSPINESMIN)) $criteria->add(GeneraPeer::DSPINESMIN, $this->dspinesmin);
        if ($this->isColumnModified(GeneraPeer::DSPINESMAX)) $criteria->add(GeneraPeer::DSPINESMAX, $this->dspinesmax);
        if ($this->isColumnModified(GeneraPeer::DSOFTRAYSMIN)) $criteria->add(GeneraPeer::DSOFTRAYSMIN, $this->dsoftraysmin);
        if ($this->isColumnModified(GeneraPeer::DSOFTRAYSMAX)) $criteria->add(GeneraPeer::DSOFTRAYSMAX, $this->dsoftraysmax);
        if ($this->isColumnModified(GeneraPeer::TOTALDSOFTRAYSMIN)) $criteria->add(GeneraPeer::TOTALDSOFTRAYSMIN, $this->totaldsoftraysmin);
        if ($this->isColumnModified(GeneraPeer::TOTALDSOFTRAYSMAX)) $criteria->add(GeneraPeer::TOTALDSOFTRAYSMAX, $this->totaldsoftraysmax);
        if ($this->isColumnModified(GeneraPeer::DSOFTRAYSBRANCHMIN)) $criteria->add(GeneraPeer::DSOFTRAYSBRANCHMIN, $this->dsoftraysbranchmin);
        if ($this->isColumnModified(GeneraPeer::DSOFTRAYSBRANCHMAX)) $criteria->add(GeneraPeer::DSOFTRAYSBRANCHMAX, $this->dsoftraysbranchmax);
        if ($this->isColumnModified(GeneraPeer::ASPINESMIN)) $criteria->add(GeneraPeer::ASPINESMIN, $this->aspinesmin);
        if ($this->isColumnModified(GeneraPeer::ASPINESMAX)) $criteria->add(GeneraPeer::ASPINESMAX, $this->aspinesmax);
        if ($this->isColumnModified(GeneraPeer::ASOFTRAYSMIN)) $criteria->add(GeneraPeer::ASOFTRAYSMIN, $this->asoftraysmin);
        if ($this->isColumnModified(GeneraPeer::ASOFTRAYSMAX)) $criteria->add(GeneraPeer::ASOFTRAYSMAX, $this->asoftraysmax);
        if ($this->isColumnModified(GeneraPeer::TOTALASOFTRAYSMIN)) $criteria->add(GeneraPeer::TOTALASOFTRAYSMIN, $this->totalasoftraysmin);
        if ($this->isColumnModified(GeneraPeer::TOTALASOFTRAYSMAX)) $criteria->add(GeneraPeer::TOTALASOFTRAYSMAX, $this->totalasoftraysmax);
        if ($this->isColumnModified(GeneraPeer::ASOFTRAYSBRANCHMIN)) $criteria->add(GeneraPeer::ASOFTRAYSBRANCHMIN, $this->asoftraysbranchmin);
        if ($this->isColumnModified(GeneraPeer::ASOFTRAYSBRANCHMAX)) $criteria->add(GeneraPeer::ASOFTRAYSBRANCHMAX, $this->asoftraysbranchmax);
        if ($this->isColumnModified(GeneraPeer::ENTERED)) $criteria->add(GeneraPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(GeneraPeer::DATEENTERED)) $criteria->add(GeneraPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(GeneraPeer::MODIFIED)) $criteria->add(GeneraPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(GeneraPeer::DATEMODIFIED)) $criteria->add(GeneraPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(GeneraPeer::EXPERT)) $criteria->add(GeneraPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(GeneraPeer::DATECHECKED)) $criteria->add(GeneraPeer::DATECHECKED, $this->datechecked);

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
        $criteria = new Criteria(GeneraPeer::DATABASE_NAME);
        $criteria->add(GeneraPeer::GENNAME, $this->genname);
        $criteria->add(GeneraPeer::GENAUTHORYEAR, $this->genauthoryear);
        $criteria->add(GeneraPeer::GENSTATUS, $this->genstatus);

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
        $pks[0] = $this->getGenname();
        $pks[1] = $this->getGenauthoryear();
        $pks[2] = $this->getGenstatus();

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
        $this->setGenname($keys[0]);
        $this->setGenauthoryear($keys[1]);
        $this->setGenstatus($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getGenname()) && (null === $this->getGenauthoryear()) && (null === $this->getGenstatus());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Genera (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setGenname($this->getGenname());
        $copyObj->setGenauthoryear($this->getGenauthoryear());
        $copyObj->setGenauthor($this->getGenauthor());
        $copyObj->setGenyear($this->getGenyear());
        $copyObj->setGeninex($this->getGeninex());
        $copyObj->setGencomname($this->getGencomname());
        $copyObj->setGenrefno($this->getGenrefno());
        $copyObj->setAvailable($this->getAvailable());
        $copyObj->setGenstatus($this->getGenstatus());
        $copyObj->setGenstatusiczn($this->getGenstatusiczn());
        $copyObj->setGencodevalid($this->getGencodevalid());
        $copyObj->setRemark($this->getRemark());
        $copyObj->setEtymology($this->getEtymology());
        $copyObj->setGender($this->getGender());
        $copyObj->setSubgenusof($this->getSubgenusof());
        $copyObj->setFamcode($this->getFamcode());
        $copyObj->setSubfamily($this->getSubfamily());
        $copyObj->setTribe($this->getTribe());
        $copyObj->setBodyshapei($this->getBodyshapei());
        $copyObj->setComment($this->getComment());
        $copyObj->setSyncode($this->getSyncode());
        $copyObj->setFbSppnb($this->getFbSppnb());
        $copyObj->setCoffSppnb($this->getCoffSppnb());
        $copyObj->setFowSppnb($this->getFowSppnb());
        $copyObj->setGsdGenusfk($this->getGsdGenusfk());
        $copyObj->setGsdGenusreffk($this->getGsdGenusreffk());
        $copyObj->setDistribution($this->getDistribution());
        $copyObj->setHabitat($this->getHabitat());
        $copyObj->setWatersalinity($this->getWatersalinity());
        $copyObj->setMarine($this->getMarine());
        $copyObj->setBrackish($this->getBrackish());
        $copyObj->setFreshwater($this->getFreshwater());
        $copyObj->setDiagnosis($this->getDiagnosis());
        $copyObj->setDspinesmin($this->getDspinesmin());
        $copyObj->setDspinesmax($this->getDspinesmax());
        $copyObj->setDsoftraysmin($this->getDsoftraysmin());
        $copyObj->setDsoftraysmax($this->getDsoftraysmax());
        $copyObj->setTotaldsoftraysmin($this->getTotaldsoftraysmin());
        $copyObj->setTotaldsoftraysmax($this->getTotaldsoftraysmax());
        $copyObj->setDsoftraysbranchmin($this->getDsoftraysbranchmin());
        $copyObj->setDsoftraysbranchmax($this->getDsoftraysbranchmax());
        $copyObj->setAspinesmin($this->getAspinesmin());
        $copyObj->setAspinesmax($this->getAspinesmax());
        $copyObj->setAsoftraysmin($this->getAsoftraysmin());
        $copyObj->setAsoftraysmax($this->getAsoftraysmax());
        $copyObj->setTotalasoftraysmin($this->getTotalasoftraysmin());
        $copyObj->setTotalasoftraysmax($this->getTotalasoftraysmax());
        $copyObj->setAsoftraysbranchmin($this->getAsoftraysbranchmin());
        $copyObj->setAsoftraysbranchmax($this->getAsoftraysbranchmax());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setGencode(NULL); // this is a auto-increment column, so set to default value
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
     * @return Genera Clone of current object.
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
     * @return GeneraPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GeneraPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->gencode = null;
        $this->genname = null;
        $this->genauthoryear = null;
        $this->genauthor = null;
        $this->genyear = null;
        $this->geninex = null;
        $this->gencomname = null;
        $this->genrefno = null;
        $this->available = null;
        $this->genstatus = null;
        $this->genstatusiczn = null;
        $this->gencodevalid = null;
        $this->remark = null;
        $this->etymology = null;
        $this->gender = null;
        $this->subgenusof = null;
        $this->famcode = null;
        $this->subfamily = null;
        $this->tribe = null;
        $this->bodyshapei = null;
        $this->comment = null;
        $this->syncode = null;
        $this->fb_sppnb = null;
        $this->coff_sppnb = null;
        $this->fow_sppnb = null;
        $this->gsd_genusfk = null;
        $this->gsd_genusreffk = null;
        $this->distribution = null;
        $this->habitat = null;
        $this->watersalinity = null;
        $this->marine = null;
        $this->brackish = null;
        $this->freshwater = null;
        $this->diagnosis = null;
        $this->dspinesmin = null;
        $this->dspinesmax = null;
        $this->dsoftraysmin = null;
        $this->dsoftraysmax = null;
        $this->totaldsoftraysmin = null;
        $this->totaldsoftraysmax = null;
        $this->dsoftraysbranchmin = null;
        $this->dsoftraysbranchmax = null;
        $this->aspinesmin = null;
        $this->aspinesmax = null;
        $this->asoftraysmin = null;
        $this->asoftraysmax = null;
        $this->totalasoftraysmin = null;
        $this->totalasoftraysmax = null;
        $this->asoftraysbranchmin = null;
        $this->asoftraysbranchmax = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
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
        return (string) $this->exportTo(GeneraPeer::DEFAULT_STRING_FORMAT);
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
