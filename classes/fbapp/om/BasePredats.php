<?php


/**
 * Base class that represents a row from the 'predats' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BasePredats extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PredatsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PredatsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the autoctr field.
     * @var        int
     */
    protected $autoctr;

    /**
     * The value for the stockcode field.
     * @var        int
     */
    protected $stockcode;

    /**
     * The value for the speccode field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the predatsrefno field.
     * @var        int
     */
    protected $predatsrefno;

    /**
     * The value for the locality field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $locality;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the predatstage field.
     * @var        string
     */
    protected $predatstage;

    /**
     * The value for the predatori field.
     * @var        string
     */
    protected $predatori;

    /**
     * The value for the predatorii field.
     * @var        string
     */
    protected $predatorii;

    /**
     * The value for the preystage field.
     * @var        string
     */
    protected $preystage;

    /**
     * The value for the predatorgroup field.
     * @var        string
     */
    protected $predatorgroup;

    /**
     * The value for the dietp field.
     * @var        double
     */
    protected $dietp;

    /**
     * The value for the stomachcontent field.
     * @var        string
     */
    protected $stomachcontent;

    /**
     * The value for the predatorname field.
     * @var        string
     */
    protected $predatorname;

    /**
     * The value for the predatcode field.
     * @var        int
     */
    protected $predatcode;

    /**
     * The value for the alphacode field.
     * @var        string
     */
    protected $alphacode;

    /**
     * The value for the maxlength field.
     * @var        double
     */
    protected $maxlength;

    /**
     * The value for the maxlengthtype field.
     * @var        string
     */
    protected $maxlengthtype;

    /**
     * The value for the predattroph field.
     * @var        double
     */
    protected $predattroph;

    /**
     * The value for the predatsetroph field.
     * @var        double
     */
    protected $predatsetroph;

    /**
     * The value for the predatref field.
     * @var        int
     */
    protected $predatref;

    /**
     * The value for the remarks field.
     * @var        string
     */
    protected $remarks;

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
        $this->speccode = 0;
        $this->locality = '';
    }

    /**
     * Initializes internal state of BasePredats object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [autoctr] column value.
     *
     * @return int
     */
    public function getAutoctr()
    {

        return $this->autoctr;
    }

    /**
     * Get the [stockcode] column value.
     *
     * @return int
     */
    public function getStockcode()
    {

        return $this->stockcode;
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
     * Get the [predatsrefno] column value.
     *
     * @return int
     */
    public function getPredatsrefno()
    {

        return $this->predatsrefno;
    }

    /**
     * Get the [locality] column value.
     *
     * @return string
     */
    public function getLocality()
    {

        return $this->locality;
    }

    /**
     * Get the [c_code] column value.
     *
     * @return string
     */
    public function getCCode()
    {

        return $this->c_code;
    }

    /**
     * Get the [predatstage] column value.
     *
     * @return string
     */
    public function getPredatstage()
    {

        return $this->predatstage;
    }

    /**
     * Get the [predatori] column value.
     *
     * @return string
     */
    public function getPredatori()
    {

        return $this->predatori;
    }

    /**
     * Get the [predatorii] column value.
     *
     * @return string
     */
    public function getPredatorii()
    {

        return $this->predatorii;
    }

    /**
     * Get the [preystage] column value.
     *
     * @return string
     */
    public function getPreystage()
    {

        return $this->preystage;
    }

    /**
     * Get the [predatorgroup] column value.
     *
     * @return string
     */
    public function getPredatorgroup()
    {

        return $this->predatorgroup;
    }

    /**
     * Get the [dietp] column value.
     *
     * @return double
     */
    public function getDietp()
    {

        return $this->dietp;
    }

    /**
     * Get the [stomachcontent] column value.
     *
     * @return string
     */
    public function getStomachcontent()
    {

        return $this->stomachcontent;
    }

    /**
     * Get the [predatorname] column value.
     *
     * @return string
     */
    public function getPredatorname()
    {

        return $this->predatorname;
    }

    /**
     * Get the [predatcode] column value.
     *
     * @return int
     */
    public function getPredatcode()
    {

        return $this->predatcode;
    }

    /**
     * Get the [alphacode] column value.
     *
     * @return string
     */
    public function getAlphacode()
    {

        return $this->alphacode;
    }

    /**
     * Get the [maxlength] column value.
     *
     * @return double
     */
    public function getMaxlength()
    {

        return $this->maxlength;
    }

    /**
     * Get the [maxlengthtype] column value.
     *
     * @return string
     */
    public function getMaxlengthtype()
    {

        return $this->maxlengthtype;
    }

    /**
     * Get the [predattroph] column value.
     *
     * @return double
     */
    public function getPredattroph()
    {

        return $this->predattroph;
    }

    /**
     * Get the [predatsetroph] column value.
     *
     * @return double
     */
    public function getPredatsetroph()
    {

        return $this->predatsetroph;
    }

    /**
     * Get the [predatref] column value.
     *
     * @return int
     */
    public function getPredatref()
    {

        return $this->predatref;
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
     * Set the value of [autoctr] column.
     *
     * @param  int $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = PredatsPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = PredatsPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = PredatsPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [predatsrefno] column.
     *
     * @param  int $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setPredatsrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->predatsrefno !== $v) {
            $this->predatsrefno = $v;
            $this->modifiedColumns[] = PredatsPeer::PREDATSREFNO;
        }


        return $this;
    } // setPredatsrefno()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = PredatsPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = PredatsPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [predatstage] column.
     *
     * @param  string $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setPredatstage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->predatstage !== $v) {
            $this->predatstage = $v;
            $this->modifiedColumns[] = PredatsPeer::PREDATSTAGE;
        }


        return $this;
    } // setPredatstage()

    /**
     * Set the value of [predatori] column.
     *
     * @param  string $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setPredatori($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->predatori !== $v) {
            $this->predatori = $v;
            $this->modifiedColumns[] = PredatsPeer::PREDATORI;
        }


        return $this;
    } // setPredatori()

    /**
     * Set the value of [predatorii] column.
     *
     * @param  string $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setPredatorii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->predatorii !== $v) {
            $this->predatorii = $v;
            $this->modifiedColumns[] = PredatsPeer::PREDATORII;
        }


        return $this;
    } // setPredatorii()

    /**
     * Set the value of [preystage] column.
     *
     * @param  string $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setPreystage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->preystage !== $v) {
            $this->preystage = $v;
            $this->modifiedColumns[] = PredatsPeer::PREYSTAGE;
        }


        return $this;
    } // setPreystage()

    /**
     * Set the value of [predatorgroup] column.
     *
     * @param  string $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setPredatorgroup($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->predatorgroup !== $v) {
            $this->predatorgroup = $v;
            $this->modifiedColumns[] = PredatsPeer::PREDATORGROUP;
        }


        return $this;
    } // setPredatorgroup()

    /**
     * Set the value of [dietp] column.
     *
     * @param  double $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setDietp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->dietp !== $v) {
            $this->dietp = $v;
            $this->modifiedColumns[] = PredatsPeer::DIETP;
        }


        return $this;
    } // setDietp()

    /**
     * Set the value of [stomachcontent] column.
     *
     * @param  string $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setStomachcontent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->stomachcontent !== $v) {
            $this->stomachcontent = $v;
            $this->modifiedColumns[] = PredatsPeer::STOMACHCONTENT;
        }


        return $this;
    } // setStomachcontent()

    /**
     * Set the value of [predatorname] column.
     *
     * @param  string $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setPredatorname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->predatorname !== $v) {
            $this->predatorname = $v;
            $this->modifiedColumns[] = PredatsPeer::PREDATORNAME;
        }


        return $this;
    } // setPredatorname()

    /**
     * Set the value of [predatcode] column.
     *
     * @param  int $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setPredatcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->predatcode !== $v) {
            $this->predatcode = $v;
            $this->modifiedColumns[] = PredatsPeer::PREDATCODE;
        }


        return $this;
    } // setPredatcode()

    /**
     * Set the value of [alphacode] column.
     *
     * @param  string $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setAlphacode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alphacode !== $v) {
            $this->alphacode = $v;
            $this->modifiedColumns[] = PredatsPeer::ALPHACODE;
        }


        return $this;
    } // setAlphacode()

    /**
     * Set the value of [maxlength] column.
     *
     * @param  double $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setMaxlength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->maxlength !== $v) {
            $this->maxlength = $v;
            $this->modifiedColumns[] = PredatsPeer::MAXLENGTH;
        }


        return $this;
    } // setMaxlength()

    /**
     * Set the value of [maxlengthtype] column.
     *
     * @param  string $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setMaxlengthtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->maxlengthtype !== $v) {
            $this->maxlengthtype = $v;
            $this->modifiedColumns[] = PredatsPeer::MAXLENGTHTYPE;
        }


        return $this;
    } // setMaxlengthtype()

    /**
     * Set the value of [predattroph] column.
     *
     * @param  double $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setPredattroph($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->predattroph !== $v) {
            $this->predattroph = $v;
            $this->modifiedColumns[] = PredatsPeer::PREDATTROPH;
        }


        return $this;
    } // setPredattroph()

    /**
     * Set the value of [predatsetroph] column.
     *
     * @param  double $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setPredatsetroph($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->predatsetroph !== $v) {
            $this->predatsetroph = $v;
            $this->modifiedColumns[] = PredatsPeer::PREDATSETROPH;
        }


        return $this;
    } // setPredatsetroph()

    /**
     * Set the value of [predatref] column.
     *
     * @param  int $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setPredatref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->predatref !== $v) {
            $this->predatref = $v;
            $this->modifiedColumns[] = PredatsPeer::PREDATREF;
        }


        return $this;
    } // setPredatref()

    /**
     * Set the value of [remarks] column.
     *
     * @param  string $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[] = PredatsPeer::REMARKS;
        }


        return $this;
    } // setRemarks()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = PredatsPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Predats The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = PredatsPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = PredatsPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Predats The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = PredatsPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Predats The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = PredatsPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Predats The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = PredatsPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Predats The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = PredatsPeer::TS;
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
            if ($this->speccode !== 0) {
                return false;
            }

            if ($this->locality !== '') {
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

            $this->autoctr = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->stockcode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->speccode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->predatsrefno = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->locality = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->c_code = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->predatstage = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->predatori = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->predatorii = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->preystage = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->predatorgroup = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->dietp = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->stomachcontent = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->predatorname = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->predatcode = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->alphacode = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->maxlength = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->maxlengthtype = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->predattroph = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->predatsetroph = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->predatref = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->remarks = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->entered = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->dateentered = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->modified = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->datemodified = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->expert = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->datechecked = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->ts = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 29; // 29 = PredatsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Predats object", $e);
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
            $con = Propel::getConnection(PredatsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PredatsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(PredatsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PredatsQuery::create()
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
            $con = Propel::getConnection(PredatsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PredatsPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(PredatsPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(PredatsPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(PredatsPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(PredatsPeer::PREDATSREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`PredatsRefNo`';
        }
        if ($this->isColumnModified(PredatsPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(PredatsPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(PredatsPeer::PREDATSTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`Predatstage`';
        }
        if ($this->isColumnModified(PredatsPeer::PREDATORI)) {
            $modifiedColumns[':p' . $index++]  = '`PredatorI`';
        }
        if ($this->isColumnModified(PredatsPeer::PREDATORII)) {
            $modifiedColumns[':p' . $index++]  = '`PredatorII`';
        }
        if ($this->isColumnModified(PredatsPeer::PREYSTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`PreyStage`';
        }
        if ($this->isColumnModified(PredatsPeer::PREDATORGROUP)) {
            $modifiedColumns[':p' . $index++]  = '`PredatorGroup`';
        }
        if ($this->isColumnModified(PredatsPeer::DIETP)) {
            $modifiedColumns[':p' . $index++]  = '`DietP`';
        }
        if ($this->isColumnModified(PredatsPeer::STOMACHCONTENT)) {
            $modifiedColumns[':p' . $index++]  = '`StomachContent`';
        }
        if ($this->isColumnModified(PredatsPeer::PREDATORNAME)) {
            $modifiedColumns[':p' . $index++]  = '`PredatorName`';
        }
        if ($this->isColumnModified(PredatsPeer::PREDATCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Predatcode`';
        }
        if ($this->isColumnModified(PredatsPeer::ALPHACODE)) {
            $modifiedColumns[':p' . $index++]  = '`AlphaCode`';
        }
        if ($this->isColumnModified(PredatsPeer::MAXLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`MaxLength`';
        }
        if ($this->isColumnModified(PredatsPeer::MAXLENGTHTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`MaxLengthType`';
        }
        if ($this->isColumnModified(PredatsPeer::PREDATTROPH)) {
            $modifiedColumns[':p' . $index++]  = '`PredatTroph`';
        }
        if ($this->isColumnModified(PredatsPeer::PREDATSETROPH)) {
            $modifiedColumns[':p' . $index++]  = '`PredatseTroph`';
        }
        if ($this->isColumnModified(PredatsPeer::PREDATREF)) {
            $modifiedColumns[':p' . $index++]  = '`PredatRef`';
        }
        if ($this->isColumnModified(PredatsPeer::REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`Remarks`';
        }
        if ($this->isColumnModified(PredatsPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(PredatsPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(PredatsPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(PredatsPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(PredatsPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(PredatsPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(PredatsPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `predats` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`autoctr`':
                        $stmt->bindValue($identifier, $this->autoctr, PDO::PARAM_INT);
                        break;
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`PredatsRefNo`':
                        $stmt->bindValue($identifier, $this->predatsrefno, PDO::PARAM_INT);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`Predatstage`':
                        $stmt->bindValue($identifier, $this->predatstage, PDO::PARAM_STR);
                        break;
                    case '`PredatorI`':
                        $stmt->bindValue($identifier, $this->predatori, PDO::PARAM_STR);
                        break;
                    case '`PredatorII`':
                        $stmt->bindValue($identifier, $this->predatorii, PDO::PARAM_STR);
                        break;
                    case '`PreyStage`':
                        $stmt->bindValue($identifier, $this->preystage, PDO::PARAM_STR);
                        break;
                    case '`PredatorGroup`':
                        $stmt->bindValue($identifier, $this->predatorgroup, PDO::PARAM_STR);
                        break;
                    case '`DietP`':
                        $stmt->bindValue($identifier, $this->dietp, PDO::PARAM_STR);
                        break;
                    case '`StomachContent`':
                        $stmt->bindValue($identifier, $this->stomachcontent, PDO::PARAM_STR);
                        break;
                    case '`PredatorName`':
                        $stmt->bindValue($identifier, $this->predatorname, PDO::PARAM_STR);
                        break;
                    case '`Predatcode`':
                        $stmt->bindValue($identifier, $this->predatcode, PDO::PARAM_INT);
                        break;
                    case '`AlphaCode`':
                        $stmt->bindValue($identifier, $this->alphacode, PDO::PARAM_STR);
                        break;
                    case '`MaxLength`':
                        $stmt->bindValue($identifier, $this->maxlength, PDO::PARAM_STR);
                        break;
                    case '`MaxLengthType`':
                        $stmt->bindValue($identifier, $this->maxlengthtype, PDO::PARAM_STR);
                        break;
                    case '`PredatTroph`':
                        $stmt->bindValue($identifier, $this->predattroph, PDO::PARAM_STR);
                        break;
                    case '`PredatseTroph`':
                        $stmt->bindValue($identifier, $this->predatsetroph, PDO::PARAM_STR);
                        break;
                    case '`PredatRef`':
                        $stmt->bindValue($identifier, $this->predatref, PDO::PARAM_INT);
                        break;
                    case '`Remarks`':
                        $stmt->bindValue($identifier, $this->remarks, PDO::PARAM_STR);
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
        $this->setStockcode($pk);

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


            if (($retval = PredatsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = PredatsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getAutoctr();
                break;
            case 1:
                return $this->getStockcode();
                break;
            case 2:
                return $this->getSpeccode();
                break;
            case 3:
                return $this->getPredatsrefno();
                break;
            case 4:
                return $this->getLocality();
                break;
            case 5:
                return $this->getCCode();
                break;
            case 6:
                return $this->getPredatstage();
                break;
            case 7:
                return $this->getPredatori();
                break;
            case 8:
                return $this->getPredatorii();
                break;
            case 9:
                return $this->getPreystage();
                break;
            case 10:
                return $this->getPredatorgroup();
                break;
            case 11:
                return $this->getDietp();
                break;
            case 12:
                return $this->getStomachcontent();
                break;
            case 13:
                return $this->getPredatorname();
                break;
            case 14:
                return $this->getPredatcode();
                break;
            case 15:
                return $this->getAlphacode();
                break;
            case 16:
                return $this->getMaxlength();
                break;
            case 17:
                return $this->getMaxlengthtype();
                break;
            case 18:
                return $this->getPredattroph();
                break;
            case 19:
                return $this->getPredatsetroph();
                break;
            case 20:
                return $this->getPredatref();
                break;
            case 21:
                return $this->getRemarks();
                break;
            case 22:
                return $this->getEntered();
                break;
            case 23:
                return $this->getDateentered();
                break;
            case 24:
                return $this->getModified();
                break;
            case 25:
                return $this->getDatemodified();
                break;
            case 26:
                return $this->getExpert();
                break;
            case 27:
                return $this->getDatechecked();
                break;
            case 28:
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
        if (isset($alreadyDumpedObjects['Predats'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Predats'][serialize($this->getPrimaryKey())] = true;
        $keys = PredatsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getStockcode(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getPredatsrefno(),
            $keys[4] => $this->getLocality(),
            $keys[5] => $this->getCCode(),
            $keys[6] => $this->getPredatstage(),
            $keys[7] => $this->getPredatori(),
            $keys[8] => $this->getPredatorii(),
            $keys[9] => $this->getPreystage(),
            $keys[10] => $this->getPredatorgroup(),
            $keys[11] => $this->getDietp(),
            $keys[12] => $this->getStomachcontent(),
            $keys[13] => $this->getPredatorname(),
            $keys[14] => $this->getPredatcode(),
            $keys[15] => $this->getAlphacode(),
            $keys[16] => $this->getMaxlength(),
            $keys[17] => $this->getMaxlengthtype(),
            $keys[18] => $this->getPredattroph(),
            $keys[19] => $this->getPredatsetroph(),
            $keys[20] => $this->getPredatref(),
            $keys[21] => $this->getRemarks(),
            $keys[22] => $this->getEntered(),
            $keys[23] => $this->getDateentered(),
            $keys[24] => $this->getModified(),
            $keys[25] => $this->getDatemodified(),
            $keys[26] => $this->getExpert(),
            $keys[27] => $this->getDatechecked(),
            $keys[28] => $this->getTs(),
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
        $pos = PredatsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setAutoctr($value);
                break;
            case 1:
                $this->setStockcode($value);
                break;
            case 2:
                $this->setSpeccode($value);
                break;
            case 3:
                $this->setPredatsrefno($value);
                break;
            case 4:
                $this->setLocality($value);
                break;
            case 5:
                $this->setCCode($value);
                break;
            case 6:
                $this->setPredatstage($value);
                break;
            case 7:
                $this->setPredatori($value);
                break;
            case 8:
                $this->setPredatorii($value);
                break;
            case 9:
                $this->setPreystage($value);
                break;
            case 10:
                $this->setPredatorgroup($value);
                break;
            case 11:
                $this->setDietp($value);
                break;
            case 12:
                $this->setStomachcontent($value);
                break;
            case 13:
                $this->setPredatorname($value);
                break;
            case 14:
                $this->setPredatcode($value);
                break;
            case 15:
                $this->setAlphacode($value);
                break;
            case 16:
                $this->setMaxlength($value);
                break;
            case 17:
                $this->setMaxlengthtype($value);
                break;
            case 18:
                $this->setPredattroph($value);
                break;
            case 19:
                $this->setPredatsetroph($value);
                break;
            case 20:
                $this->setPredatref($value);
                break;
            case 21:
                $this->setRemarks($value);
                break;
            case 22:
                $this->setEntered($value);
                break;
            case 23:
                $this->setDateentered($value);
                break;
            case 24:
                $this->setModified($value);
                break;
            case 25:
                $this->setDatemodified($value);
                break;
            case 26:
                $this->setExpert($value);
                break;
            case 27:
                $this->setDatechecked($value);
                break;
            case 28:
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
        $keys = PredatsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPredatsrefno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLocality($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCCode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPredatstage($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPredatori($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPredatorii($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPreystage($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPredatorgroup($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDietp($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setStomachcontent($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setPredatorname($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setPredatcode($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setAlphacode($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setMaxlength($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setMaxlengthtype($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setPredattroph($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setPredatsetroph($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setPredatref($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setRemarks($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setEntered($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDateentered($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setModified($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDatemodified($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setExpert($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDatechecked($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setTs($arr[$keys[28]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PredatsPeer::DATABASE_NAME);

        if ($this->isColumnModified(PredatsPeer::AUTOCTR)) $criteria->add(PredatsPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(PredatsPeer::STOCKCODE)) $criteria->add(PredatsPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(PredatsPeer::SPECCODE)) $criteria->add(PredatsPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(PredatsPeer::PREDATSREFNO)) $criteria->add(PredatsPeer::PREDATSREFNO, $this->predatsrefno);
        if ($this->isColumnModified(PredatsPeer::LOCALITY)) $criteria->add(PredatsPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(PredatsPeer::C_CODE)) $criteria->add(PredatsPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(PredatsPeer::PREDATSTAGE)) $criteria->add(PredatsPeer::PREDATSTAGE, $this->predatstage);
        if ($this->isColumnModified(PredatsPeer::PREDATORI)) $criteria->add(PredatsPeer::PREDATORI, $this->predatori);
        if ($this->isColumnModified(PredatsPeer::PREDATORII)) $criteria->add(PredatsPeer::PREDATORII, $this->predatorii);
        if ($this->isColumnModified(PredatsPeer::PREYSTAGE)) $criteria->add(PredatsPeer::PREYSTAGE, $this->preystage);
        if ($this->isColumnModified(PredatsPeer::PREDATORGROUP)) $criteria->add(PredatsPeer::PREDATORGROUP, $this->predatorgroup);
        if ($this->isColumnModified(PredatsPeer::DIETP)) $criteria->add(PredatsPeer::DIETP, $this->dietp);
        if ($this->isColumnModified(PredatsPeer::STOMACHCONTENT)) $criteria->add(PredatsPeer::STOMACHCONTENT, $this->stomachcontent);
        if ($this->isColumnModified(PredatsPeer::PREDATORNAME)) $criteria->add(PredatsPeer::PREDATORNAME, $this->predatorname);
        if ($this->isColumnModified(PredatsPeer::PREDATCODE)) $criteria->add(PredatsPeer::PREDATCODE, $this->predatcode);
        if ($this->isColumnModified(PredatsPeer::ALPHACODE)) $criteria->add(PredatsPeer::ALPHACODE, $this->alphacode);
        if ($this->isColumnModified(PredatsPeer::MAXLENGTH)) $criteria->add(PredatsPeer::MAXLENGTH, $this->maxlength);
        if ($this->isColumnModified(PredatsPeer::MAXLENGTHTYPE)) $criteria->add(PredatsPeer::MAXLENGTHTYPE, $this->maxlengthtype);
        if ($this->isColumnModified(PredatsPeer::PREDATTROPH)) $criteria->add(PredatsPeer::PREDATTROPH, $this->predattroph);
        if ($this->isColumnModified(PredatsPeer::PREDATSETROPH)) $criteria->add(PredatsPeer::PREDATSETROPH, $this->predatsetroph);
        if ($this->isColumnModified(PredatsPeer::PREDATREF)) $criteria->add(PredatsPeer::PREDATREF, $this->predatref);
        if ($this->isColumnModified(PredatsPeer::REMARKS)) $criteria->add(PredatsPeer::REMARKS, $this->remarks);
        if ($this->isColumnModified(PredatsPeer::ENTERED)) $criteria->add(PredatsPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(PredatsPeer::DATEENTERED)) $criteria->add(PredatsPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(PredatsPeer::MODIFIED)) $criteria->add(PredatsPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(PredatsPeer::DATEMODIFIED)) $criteria->add(PredatsPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(PredatsPeer::EXPERT)) $criteria->add(PredatsPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(PredatsPeer::DATECHECKED)) $criteria->add(PredatsPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(PredatsPeer::TS)) $criteria->add(PredatsPeer::TS, $this->ts);

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
        $criteria = new Criteria(PredatsPeer::DATABASE_NAME);
        $criteria->add(PredatsPeer::STOCKCODE, $this->stockcode);
        $criteria->add(PredatsPeer::PREDATSTAGE, $this->predatstage);
        $criteria->add(PredatsPeer::PREYSTAGE, $this->preystage);
        $criteria->add(PredatsPeer::PREDATORGROUP, $this->predatorgroup);
        $criteria->add(PredatsPeer::PREDATORNAME, $this->predatorname);

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
        $pks[0] = $this->getStockcode();
        $pks[1] = $this->getPredatstage();
        $pks[2] = $this->getPreystage();
        $pks[3] = $this->getPredatorgroup();
        $pks[4] = $this->getPredatorname();

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
        $this->setStockcode($keys[0]);
        $this->setPredatstage($keys[1]);
        $this->setPreystage($keys[2]);
        $this->setPredatorgroup($keys[3]);
        $this->setPredatorname($keys[4]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getStockcode()) && (null === $this->getPredatstage()) && (null === $this->getPreystage()) && (null === $this->getPredatorgroup()) && (null === $this->getPredatorname());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Predats (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setPredatsrefno($this->getPredatsrefno());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setPredatstage($this->getPredatstage());
        $copyObj->setPredatori($this->getPredatori());
        $copyObj->setPredatorii($this->getPredatorii());
        $copyObj->setPreystage($this->getPreystage());
        $copyObj->setPredatorgroup($this->getPredatorgroup());
        $copyObj->setDietp($this->getDietp());
        $copyObj->setStomachcontent($this->getStomachcontent());
        $copyObj->setPredatorname($this->getPredatorname());
        $copyObj->setPredatcode($this->getPredatcode());
        $copyObj->setAlphacode($this->getAlphacode());
        $copyObj->setMaxlength($this->getMaxlength());
        $copyObj->setMaxlengthtype($this->getMaxlengthtype());
        $copyObj->setPredattroph($this->getPredattroph());
        $copyObj->setPredatsetroph($this->getPredatsetroph());
        $copyObj->setPredatref($this->getPredatref());
        $copyObj->setRemarks($this->getRemarks());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setAutoctr(NULL); // this is a auto-increment column, so set to default value
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
     * @return Predats Clone of current object.
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
     * @return PredatsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PredatsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->stockcode = null;
        $this->speccode = null;
        $this->predatsrefno = null;
        $this->locality = null;
        $this->c_code = null;
        $this->predatstage = null;
        $this->predatori = null;
        $this->predatorii = null;
        $this->preystage = null;
        $this->predatorgroup = null;
        $this->dietp = null;
        $this->stomachcontent = null;
        $this->predatorname = null;
        $this->predatcode = null;
        $this->alphacode = null;
        $this->maxlength = null;
        $this->maxlengthtype = null;
        $this->predattroph = null;
        $this->predatsetroph = null;
        $this->predatref = null;
        $this->remarks = null;
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
        return (string) $this->exportTo(PredatsPeer::DEFAULT_STRING_FORMAT);
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
