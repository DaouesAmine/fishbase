<?php


/**
 * Base class that represents a row from the 'eggnurserysystem' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseEggnurserysystem extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EggnurserysystemPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EggnurserysystemPeer
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
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the stockcode field.
     * @var        int
     */
    protected $stockcode;

    /**
     * The value for the commonname field.
     * @var        string
     */
    protected $commonname;

    /**
     * The value for the species field.
     * @var        string
     */
    protected $species;

    /**
     * The value for the mainref field.
     * @var        int
     */
    protected $mainref;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the locality field.
     * @var        string
     */
    protected $locality;

    /**
     * The value for the dataref field.
     * @var        int
     */
    protected $dataref;

    /**
     * The value for the numberofeggs field.
     * @var        int
     */
    protected $numberofeggs;

    /**
     * The value for the unit field.
     * @var        string
     */
    protected $unit;

    /**
     * The value for the nurserysystemi field.
     * @var        string
     */
    protected $nurserysystemi;

    /**
     * The value for the nurserysystemii field.
     * @var        string
     */
    protected $nurserysystemii;

    /**
     * The value for the culturesystem field.
     * @var        string
     */
    protected $culturesystem;

    /**
     * The value for the mainwatersource field.
     * @var        string
     */
    protected $mainwatersource;

    /**
     * The value for the supplwatersource field.
     * @var        string
     */
    protected $supplwatersource;

    /**
     * The value for the tempmin field.
     * @var        double
     */
    protected $tempmin;

    /**
     * The value for the tempmax field.
     * @var        double
     */
    protected $tempmax;

    /**
     * The value for the salinmin field.
     * @var        double
     */
    protected $salinmin;

    /**
     * The value for the salinmax field.
     * @var        double
     */
    protected $salinmax;

    /**
     * The value for the phmin field.
     * @var        double
     */
    protected $phmin;

    /**
     * The value for the phmax field.
     * @var        double
     */
    protected $phmax;

    /**
     * The value for the oxygenmin field.
     * @var        double
     */
    protected $oxygenmin;

    /**
     * The value for the oxygenmax field.
     * @var        double
     */
    protected $oxygenmax;

    /**
     * The value for the hardnessmin field.
     * @var        double
     */
    protected $hardnessmin;

    /**
     * The value for the hardnessmax field.
     * @var        double
     */
    protected $hardnessmax;

    /**
     * The value for the illuminationmin field.
     * @var        int
     */
    protected $illuminationmin;

    /**
     * The value for the illuminationmax field.
     * @var        int
     */
    protected $illuminationmax;

    /**
     * The value for the eggmortalitymin field.
     * @var        double
     */
    protected $eggmortalitymin;

    /**
     * The value for the eggmortalitymax field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $eggmortalitymax;

    /**
     * The value for the eyeingmin field.
     * @var        int
     */
    protected $eyeingmin;

    /**
     * The value for the eyeingmax field.
     * @var        int
     */
    protected $eyeingmax;

    /**
     * The value for the hatchdegreemin field.
     * @var        int
     */
    protected $hatchdegreemin;

    /**
     * The value for the hatchdegreemax field.
     * @var        int
     */
    protected $hatchdegreemax;

    /**
     * The value for the hatchhoursmin field.
     * @var        double
     */
    protected $hatchhoursmin;

    /**
     * The value for the hatchhoursmax field.
     * @var        double
     */
    protected $hatchhoursmax;

    /**
     * The value for the productioncycle field.
     * @var        int
     */
    protected $productioncycle;

    /**
     * The value for the productionyear field.
     * @var        int
     */
    protected $productionyear;

    /**
     * The value for the comment field.
     * @var        string
     */
    protected $comment;

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
     * @var        double
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
        $this->eggmortalitymax = 0;
    }

    /**
     * Initializes internal state of BaseEggnurserysystem object.
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
     * Get the [speccode] column value.
     *
     * @return int
     */
    public function getSpeccode()
    {

        return $this->speccode;
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
     * Get the [commonname] column value.
     *
     * @return string
     */
    public function getCommonname()
    {

        return $this->commonname;
    }

    /**
     * Get the [species] column value.
     *
     * @return string
     */
    public function getSpecies()
    {

        return $this->species;
    }

    /**
     * Get the [mainref] column value.
     *
     * @return int
     */
    public function getMainref()
    {

        return $this->mainref;
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
     * Get the [locality] column value.
     *
     * @return string
     */
    public function getLocality()
    {

        return $this->locality;
    }

    /**
     * Get the [dataref] column value.
     *
     * @return int
     */
    public function getDataref()
    {

        return $this->dataref;
    }

    /**
     * Get the [numberofeggs] column value.
     *
     * @return int
     */
    public function getNumberofeggs()
    {

        return $this->numberofeggs;
    }

    /**
     * Get the [unit] column value.
     *
     * @return string
     */
    public function getUnit()
    {

        return $this->unit;
    }

    /**
     * Get the [nurserysystemi] column value.
     *
     * @return string
     */
    public function getNurserysystemi()
    {

        return $this->nurserysystemi;
    }

    /**
     * Get the [nurserysystemii] column value.
     *
     * @return string
     */
    public function getNurserysystemii()
    {

        return $this->nurserysystemii;
    }

    /**
     * Get the [culturesystem] column value.
     *
     * @return string
     */
    public function getCulturesystem()
    {

        return $this->culturesystem;
    }

    /**
     * Get the [mainwatersource] column value.
     *
     * @return string
     */
    public function getMainwatersource()
    {

        return $this->mainwatersource;
    }

    /**
     * Get the [supplwatersource] column value.
     *
     * @return string
     */
    public function getSupplwatersource()
    {

        return $this->supplwatersource;
    }

    /**
     * Get the [tempmin] column value.
     *
     * @return double
     */
    public function getTempmin()
    {

        return $this->tempmin;
    }

    /**
     * Get the [tempmax] column value.
     *
     * @return double
     */
    public function getTempmax()
    {

        return $this->tempmax;
    }

    /**
     * Get the [salinmin] column value.
     *
     * @return double
     */
    public function getSalinmin()
    {

        return $this->salinmin;
    }

    /**
     * Get the [salinmax] column value.
     *
     * @return double
     */
    public function getSalinmax()
    {

        return $this->salinmax;
    }

    /**
     * Get the [phmin] column value.
     *
     * @return double
     */
    public function getPhmin()
    {

        return $this->phmin;
    }

    /**
     * Get the [phmax] column value.
     *
     * @return double
     */
    public function getPhmax()
    {

        return $this->phmax;
    }

    /**
     * Get the [oxygenmin] column value.
     *
     * @return double
     */
    public function getOxygenmin()
    {

        return $this->oxygenmin;
    }

    /**
     * Get the [oxygenmax] column value.
     *
     * @return double
     */
    public function getOxygenmax()
    {

        return $this->oxygenmax;
    }

    /**
     * Get the [hardnessmin] column value.
     *
     * @return double
     */
    public function getHardnessmin()
    {

        return $this->hardnessmin;
    }

    /**
     * Get the [hardnessmax] column value.
     *
     * @return double
     */
    public function getHardnessmax()
    {

        return $this->hardnessmax;
    }

    /**
     * Get the [illuminationmin] column value.
     *
     * @return int
     */
    public function getIlluminationmin()
    {

        return $this->illuminationmin;
    }

    /**
     * Get the [illuminationmax] column value.
     *
     * @return int
     */
    public function getIlluminationmax()
    {

        return $this->illuminationmax;
    }

    /**
     * Get the [eggmortalitymin] column value.
     *
     * @return double
     */
    public function getEggmortalitymin()
    {

        return $this->eggmortalitymin;
    }

    /**
     * Get the [eggmortalitymax] column value.
     *
     * @return int
     */
    public function getEggmortalitymax()
    {

        return $this->eggmortalitymax;
    }

    /**
     * Get the [eyeingmin] column value.
     *
     * @return int
     */
    public function getEyeingmin()
    {

        return $this->eyeingmin;
    }

    /**
     * Get the [eyeingmax] column value.
     *
     * @return int
     */
    public function getEyeingmax()
    {

        return $this->eyeingmax;
    }

    /**
     * Get the [hatchdegreemin] column value.
     *
     * @return int
     */
    public function getHatchdegreemin()
    {

        return $this->hatchdegreemin;
    }

    /**
     * Get the [hatchdegreemax] column value.
     *
     * @return int
     */
    public function getHatchdegreemax()
    {

        return $this->hatchdegreemax;
    }

    /**
     * Get the [hatchhoursmin] column value.
     *
     * @return double
     */
    public function getHatchhoursmin()
    {

        return $this->hatchhoursmin;
    }

    /**
     * Get the [hatchhoursmax] column value.
     *
     * @return double
     */
    public function getHatchhoursmax()
    {

        return $this->hatchhoursmax;
    }

    /**
     * Get the [productioncycle] column value.
     *
     * @return int
     */
    public function getProductioncycle()
    {

        return $this->productioncycle;
    }

    /**
     * Get the [productionyear] column value.
     *
     * @return int
     */
    public function getProductionyear()
    {

        return $this->productionyear;
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
     * @return double
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
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [commonname] column.
     *
     * @param  string $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setCommonname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname !== $v) {
            $this->commonname = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::COMMONNAME;
        }


        return $this;
    } // setCommonname()

    /**
     * Set the value of [species] column.
     *
     * @param  string $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setSpecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->species !== $v) {
            $this->species = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::SPECIES;
        }


        return $this;
    } // setSpecies()

    /**
     * Set the value of [mainref] column.
     *
     * @param  int $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setMainref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mainref !== $v) {
            $this->mainref = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::MAINREF;
        }


        return $this;
    } // setMainref()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [dataref] column.
     *
     * @param  int $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setDataref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dataref !== $v) {
            $this->dataref = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::DATAREF;
        }


        return $this;
    } // setDataref()

    /**
     * Set the value of [numberofeggs] column.
     *
     * @param  int $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setNumberofeggs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->numberofeggs !== $v) {
            $this->numberofeggs = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::NUMBEROFEGGS;
        }


        return $this;
    } // setNumberofeggs()

    /**
     * Set the value of [unit] column.
     *
     * @param  string $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setUnit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unit !== $v) {
            $this->unit = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::UNIT;
        }


        return $this;
    } // setUnit()

    /**
     * Set the value of [nurserysystemi] column.
     *
     * @param  string $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setNurserysystemi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nurserysystemi !== $v) {
            $this->nurserysystemi = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::NURSERYSYSTEMI;
        }


        return $this;
    } // setNurserysystemi()

    /**
     * Set the value of [nurserysystemii] column.
     *
     * @param  string $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setNurserysystemii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nurserysystemii !== $v) {
            $this->nurserysystemii = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::NURSERYSYSTEMII;
        }


        return $this;
    } // setNurserysystemii()

    /**
     * Set the value of [culturesystem] column.
     *
     * @param  string $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setCulturesystem($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->culturesystem !== $v) {
            $this->culturesystem = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::CULTURESYSTEM;
        }


        return $this;
    } // setCulturesystem()

    /**
     * Set the value of [mainwatersource] column.
     *
     * @param  string $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setMainwatersource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mainwatersource !== $v) {
            $this->mainwatersource = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::MAINWATERSOURCE;
        }


        return $this;
    } // setMainwatersource()

    /**
     * Set the value of [supplwatersource] column.
     *
     * @param  string $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setSupplwatersource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->supplwatersource !== $v) {
            $this->supplwatersource = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::SUPPLWATERSOURCE;
        }


        return $this;
    } // setSupplwatersource()

    /**
     * Set the value of [tempmin] column.
     *
     * @param  double $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setTempmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tempmin !== $v) {
            $this->tempmin = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::TEMPMIN;
        }


        return $this;
    } // setTempmin()

    /**
     * Set the value of [tempmax] column.
     *
     * @param  double $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setTempmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tempmax !== $v) {
            $this->tempmax = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::TEMPMAX;
        }


        return $this;
    } // setTempmax()

    /**
     * Set the value of [salinmin] column.
     *
     * @param  double $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setSalinmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->salinmin !== $v) {
            $this->salinmin = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::SALINMIN;
        }


        return $this;
    } // setSalinmin()

    /**
     * Set the value of [salinmax] column.
     *
     * @param  double $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setSalinmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->salinmax !== $v) {
            $this->salinmax = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::SALINMAX;
        }


        return $this;
    } // setSalinmax()

    /**
     * Set the value of [phmin] column.
     *
     * @param  double $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setPhmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->phmin !== $v) {
            $this->phmin = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::PHMIN;
        }


        return $this;
    } // setPhmin()

    /**
     * Set the value of [phmax] column.
     *
     * @param  double $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setPhmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->phmax !== $v) {
            $this->phmax = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::PHMAX;
        }


        return $this;
    } // setPhmax()

    /**
     * Set the value of [oxygenmin] column.
     *
     * @param  double $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setOxygenmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oxygenmin !== $v) {
            $this->oxygenmin = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::OXYGENMIN;
        }


        return $this;
    } // setOxygenmin()

    /**
     * Set the value of [oxygenmax] column.
     *
     * @param  double $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setOxygenmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oxygenmax !== $v) {
            $this->oxygenmax = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::OXYGENMAX;
        }


        return $this;
    } // setOxygenmax()

    /**
     * Set the value of [hardnessmin] column.
     *
     * @param  double $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setHardnessmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->hardnessmin !== $v) {
            $this->hardnessmin = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::HARDNESSMIN;
        }


        return $this;
    } // setHardnessmin()

    /**
     * Set the value of [hardnessmax] column.
     *
     * @param  double $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setHardnessmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->hardnessmax !== $v) {
            $this->hardnessmax = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::HARDNESSMAX;
        }


        return $this;
    } // setHardnessmax()

    /**
     * Set the value of [illuminationmin] column.
     *
     * @param  int $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setIlluminationmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->illuminationmin !== $v) {
            $this->illuminationmin = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::ILLUMINATIONMIN;
        }


        return $this;
    } // setIlluminationmin()

    /**
     * Set the value of [illuminationmax] column.
     *
     * @param  int $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setIlluminationmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->illuminationmax !== $v) {
            $this->illuminationmax = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::ILLUMINATIONMAX;
        }


        return $this;
    } // setIlluminationmax()

    /**
     * Set the value of [eggmortalitymin] column.
     *
     * @param  double $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setEggmortalitymin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->eggmortalitymin !== $v) {
            $this->eggmortalitymin = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::EGGMORTALITYMIN;
        }


        return $this;
    } // setEggmortalitymin()

    /**
     * Set the value of [eggmortalitymax] column.
     *
     * @param  int $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setEggmortalitymax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eggmortalitymax !== $v) {
            $this->eggmortalitymax = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::EGGMORTALITYMAX;
        }


        return $this;
    } // setEggmortalitymax()

    /**
     * Set the value of [eyeingmin] column.
     *
     * @param  int $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setEyeingmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eyeingmin !== $v) {
            $this->eyeingmin = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::EYEINGMIN;
        }


        return $this;
    } // setEyeingmin()

    /**
     * Set the value of [eyeingmax] column.
     *
     * @param  int $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setEyeingmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eyeingmax !== $v) {
            $this->eyeingmax = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::EYEINGMAX;
        }


        return $this;
    } // setEyeingmax()

    /**
     * Set the value of [hatchdegreemin] column.
     *
     * @param  int $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setHatchdegreemin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hatchdegreemin !== $v) {
            $this->hatchdegreemin = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::HATCHDEGREEMIN;
        }


        return $this;
    } // setHatchdegreemin()

    /**
     * Set the value of [hatchdegreemax] column.
     *
     * @param  int $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setHatchdegreemax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hatchdegreemax !== $v) {
            $this->hatchdegreemax = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::HATCHDEGREEMAX;
        }


        return $this;
    } // setHatchdegreemax()

    /**
     * Set the value of [hatchhoursmin] column.
     *
     * @param  double $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setHatchhoursmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->hatchhoursmin !== $v) {
            $this->hatchhoursmin = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::HATCHHOURSMIN;
        }


        return $this;
    } // setHatchhoursmin()

    /**
     * Set the value of [hatchhoursmax] column.
     *
     * @param  double $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setHatchhoursmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->hatchhoursmax !== $v) {
            $this->hatchhoursmax = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::HATCHHOURSMAX;
        }


        return $this;
    } // setHatchhoursmax()

    /**
     * Set the value of [productioncycle] column.
     *
     * @param  int $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setProductioncycle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->productioncycle !== $v) {
            $this->productioncycle = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::PRODUCTIONCYCLE;
        }


        return $this;
    } // setProductioncycle()

    /**
     * Set the value of [productionyear] column.
     *
     * @param  int $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setProductionyear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->productionyear !== $v) {
            $this->productionyear = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::PRODUCTIONYEAR;
        }


        return $this;
    } // setProductionyear()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = EggnurserysystemPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = EggnurserysystemPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  double $v new value
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = EggnurserysystemPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = EggnurserysystemPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Eggnurserysystem The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = EggnurserysystemPeer::TS;
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
            if ($this->eggmortalitymax !== 0) {
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
            $this->speccode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->stockcode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->commonname = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->species = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->mainref = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->c_code = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->locality = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->dataref = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->numberofeggs = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->unit = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->nurserysystemi = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->nurserysystemii = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->culturesystem = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->mainwatersource = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->supplwatersource = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->tempmin = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->tempmax = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->salinmin = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->salinmax = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->phmin = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->phmax = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->oxygenmin = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->oxygenmax = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
            $this->hardnessmin = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
            $this->hardnessmax = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->illuminationmin = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->illuminationmax = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->eggmortalitymin = ($row[$startcol + 28] !== null) ? (double) $row[$startcol + 28] : null;
            $this->eggmortalitymax = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->eyeingmin = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->eyeingmax = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->hatchdegreemin = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->hatchdegreemax = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->hatchhoursmin = ($row[$startcol + 34] !== null) ? (double) $row[$startcol + 34] : null;
            $this->hatchhoursmax = ($row[$startcol + 35] !== null) ? (double) $row[$startcol + 35] : null;
            $this->productioncycle = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->productionyear = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->comment = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->entered = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->dateentered = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->modified = ($row[$startcol + 41] !== null) ? (int) $row[$startcol + 41] : null;
            $this->datemodified = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->expert = ($row[$startcol + 43] !== null) ? (double) $row[$startcol + 43] : null;
            $this->datechecked = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->ts = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 46; // 46 = EggnurserysystemPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Eggnurserysystem object", $e);
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
            $con = Propel::getConnection(EggnurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EggnurserysystemPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(EggnurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EggnurserysystemQuery::create()
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
            $con = Propel::getConnection(EggnurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EggnurserysystemPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = EggnurserysystemPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EggnurserysystemPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EggnurserysystemPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Speccode`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Stockcode`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::COMMONNAME)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::SPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`Species`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::MAINREF)) {
            $modifiedColumns[':p' . $index++]  = '`MainRef`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::DATAREF)) {
            $modifiedColumns[':p' . $index++]  = '`DataRef`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::NUMBEROFEGGS)) {
            $modifiedColumns[':p' . $index++]  = '`NumberofEggs`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::UNIT)) {
            $modifiedColumns[':p' . $index++]  = '`Unit`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::NURSERYSYSTEMI)) {
            $modifiedColumns[':p' . $index++]  = '`NurserySystemI`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::NURSERYSYSTEMII)) {
            $modifiedColumns[':p' . $index++]  = '`NurserySystemII`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::CULTURESYSTEM)) {
            $modifiedColumns[':p' . $index++]  = '`CultureSystem`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::MAINWATERSOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`MainWaterSource`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::SUPPLWATERSOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`SupplWaterSource`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::TEMPMIN)) {
            $modifiedColumns[':p' . $index++]  = '`TempMin`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::TEMPMAX)) {
            $modifiedColumns[':p' . $index++]  = '`TempMax`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::SALINMIN)) {
            $modifiedColumns[':p' . $index++]  = '`SalinMin`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::SALINMAX)) {
            $modifiedColumns[':p' . $index++]  = '`SalinMax`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::PHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`pHmin`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::PHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`pHmax`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::OXYGENMIN)) {
            $modifiedColumns[':p' . $index++]  = '`OxygenMin`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::OXYGENMAX)) {
            $modifiedColumns[':p' . $index++]  = '`OxygenMax`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::HARDNESSMIN)) {
            $modifiedColumns[':p' . $index++]  = '`HardnessMin`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::HARDNESSMAX)) {
            $modifiedColumns[':p' . $index++]  = '`HardnessMax`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::ILLUMINATIONMIN)) {
            $modifiedColumns[':p' . $index++]  = '`IlluminationMin`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::ILLUMINATIONMAX)) {
            $modifiedColumns[':p' . $index++]  = '`IlluminationMax`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::EGGMORTALITYMIN)) {
            $modifiedColumns[':p' . $index++]  = '`EggMortalityMin`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::EGGMORTALITYMAX)) {
            $modifiedColumns[':p' . $index++]  = '`EggMortalityMax`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::EYEINGMIN)) {
            $modifiedColumns[':p' . $index++]  = '`EyeingMin`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::EYEINGMAX)) {
            $modifiedColumns[':p' . $index++]  = '`EyeingMax`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::HATCHDEGREEMIN)) {
            $modifiedColumns[':p' . $index++]  = '`HatchDegreeMin`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::HATCHDEGREEMAX)) {
            $modifiedColumns[':p' . $index++]  = '`HatchDegreeMax`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::HATCHHOURSMIN)) {
            $modifiedColumns[':p' . $index++]  = '`HatchHoursMin`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::HATCHHOURSMAX)) {
            $modifiedColumns[':p' . $index++]  = '`HatchHoursMax`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::PRODUCTIONCYCLE)) {
            $modifiedColumns[':p' . $index++]  = '`ProductionCycle`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::PRODUCTIONYEAR)) {
            $modifiedColumns[':p' . $index++]  = '`ProductionYear`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Comment`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(EggnurserysystemPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `eggnurserysystem` (%s) VALUES (%s)',
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
                    case '`Speccode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`Stockcode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`CommonName`':
                        $stmt->bindValue($identifier, $this->commonname, PDO::PARAM_STR);
                        break;
                    case '`Species`':
                        $stmt->bindValue($identifier, $this->species, PDO::PARAM_STR);
                        break;
                    case '`MainRef`':
                        $stmt->bindValue($identifier, $this->mainref, PDO::PARAM_INT);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`DataRef`':
                        $stmt->bindValue($identifier, $this->dataref, PDO::PARAM_INT);
                        break;
                    case '`NumberofEggs`':
                        $stmt->bindValue($identifier, $this->numberofeggs, PDO::PARAM_INT);
                        break;
                    case '`Unit`':
                        $stmt->bindValue($identifier, $this->unit, PDO::PARAM_STR);
                        break;
                    case '`NurserySystemI`':
                        $stmt->bindValue($identifier, $this->nurserysystemi, PDO::PARAM_STR);
                        break;
                    case '`NurserySystemII`':
                        $stmt->bindValue($identifier, $this->nurserysystemii, PDO::PARAM_STR);
                        break;
                    case '`CultureSystem`':
                        $stmt->bindValue($identifier, $this->culturesystem, PDO::PARAM_STR);
                        break;
                    case '`MainWaterSource`':
                        $stmt->bindValue($identifier, $this->mainwatersource, PDO::PARAM_STR);
                        break;
                    case '`SupplWaterSource`':
                        $stmt->bindValue($identifier, $this->supplwatersource, PDO::PARAM_STR);
                        break;
                    case '`TempMin`':
                        $stmt->bindValue($identifier, $this->tempmin, PDO::PARAM_STR);
                        break;
                    case '`TempMax`':
                        $stmt->bindValue($identifier, $this->tempmax, PDO::PARAM_STR);
                        break;
                    case '`SalinMin`':
                        $stmt->bindValue($identifier, $this->salinmin, PDO::PARAM_STR);
                        break;
                    case '`SalinMax`':
                        $stmt->bindValue($identifier, $this->salinmax, PDO::PARAM_STR);
                        break;
                    case '`pHmin`':
                        $stmt->bindValue($identifier, $this->phmin, PDO::PARAM_STR);
                        break;
                    case '`pHmax`':
                        $stmt->bindValue($identifier, $this->phmax, PDO::PARAM_STR);
                        break;
                    case '`OxygenMin`':
                        $stmt->bindValue($identifier, $this->oxygenmin, PDO::PARAM_STR);
                        break;
                    case '`OxygenMax`':
                        $stmt->bindValue($identifier, $this->oxygenmax, PDO::PARAM_STR);
                        break;
                    case '`HardnessMin`':
                        $stmt->bindValue($identifier, $this->hardnessmin, PDO::PARAM_STR);
                        break;
                    case '`HardnessMax`':
                        $stmt->bindValue($identifier, $this->hardnessmax, PDO::PARAM_STR);
                        break;
                    case '`IlluminationMin`':
                        $stmt->bindValue($identifier, $this->illuminationmin, PDO::PARAM_INT);
                        break;
                    case '`IlluminationMax`':
                        $stmt->bindValue($identifier, $this->illuminationmax, PDO::PARAM_INT);
                        break;
                    case '`EggMortalityMin`':
                        $stmt->bindValue($identifier, $this->eggmortalitymin, PDO::PARAM_STR);
                        break;
                    case '`EggMortalityMax`':
                        $stmt->bindValue($identifier, $this->eggmortalitymax, PDO::PARAM_INT);
                        break;
                    case '`EyeingMin`':
                        $stmt->bindValue($identifier, $this->eyeingmin, PDO::PARAM_INT);
                        break;
                    case '`EyeingMax`':
                        $stmt->bindValue($identifier, $this->eyeingmax, PDO::PARAM_INT);
                        break;
                    case '`HatchDegreeMin`':
                        $stmt->bindValue($identifier, $this->hatchdegreemin, PDO::PARAM_INT);
                        break;
                    case '`HatchDegreeMax`':
                        $stmt->bindValue($identifier, $this->hatchdegreemax, PDO::PARAM_INT);
                        break;
                    case '`HatchHoursMin`':
                        $stmt->bindValue($identifier, $this->hatchhoursmin, PDO::PARAM_STR);
                        break;
                    case '`HatchHoursMax`':
                        $stmt->bindValue($identifier, $this->hatchhoursmax, PDO::PARAM_STR);
                        break;
                    case '`ProductionCycle`':
                        $stmt->bindValue($identifier, $this->productioncycle, PDO::PARAM_INT);
                        break;
                    case '`ProductionYear`':
                        $stmt->bindValue($identifier, $this->productionyear, PDO::PARAM_INT);
                        break;
                    case '`Comment`':
                        $stmt->bindValue($identifier, $this->comment, PDO::PARAM_STR);
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
                        $stmt->bindValue($identifier, $this->expert, PDO::PARAM_STR);
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
        $this->setAutoctr($pk);

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


            if (($retval = EggnurserysystemPeer::doValidate($this, $columns)) !== true) {
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
        $pos = EggnurserysystemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSpeccode();
                break;
            case 2:
                return $this->getStockcode();
                break;
            case 3:
                return $this->getCommonname();
                break;
            case 4:
                return $this->getSpecies();
                break;
            case 5:
                return $this->getMainref();
                break;
            case 6:
                return $this->getCCode();
                break;
            case 7:
                return $this->getLocality();
                break;
            case 8:
                return $this->getDataref();
                break;
            case 9:
                return $this->getNumberofeggs();
                break;
            case 10:
                return $this->getUnit();
                break;
            case 11:
                return $this->getNurserysystemi();
                break;
            case 12:
                return $this->getNurserysystemii();
                break;
            case 13:
                return $this->getCulturesystem();
                break;
            case 14:
                return $this->getMainwatersource();
                break;
            case 15:
                return $this->getSupplwatersource();
                break;
            case 16:
                return $this->getTempmin();
                break;
            case 17:
                return $this->getTempmax();
                break;
            case 18:
                return $this->getSalinmin();
                break;
            case 19:
                return $this->getSalinmax();
                break;
            case 20:
                return $this->getPhmin();
                break;
            case 21:
                return $this->getPhmax();
                break;
            case 22:
                return $this->getOxygenmin();
                break;
            case 23:
                return $this->getOxygenmax();
                break;
            case 24:
                return $this->getHardnessmin();
                break;
            case 25:
                return $this->getHardnessmax();
                break;
            case 26:
                return $this->getIlluminationmin();
                break;
            case 27:
                return $this->getIlluminationmax();
                break;
            case 28:
                return $this->getEggmortalitymin();
                break;
            case 29:
                return $this->getEggmortalitymax();
                break;
            case 30:
                return $this->getEyeingmin();
                break;
            case 31:
                return $this->getEyeingmax();
                break;
            case 32:
                return $this->getHatchdegreemin();
                break;
            case 33:
                return $this->getHatchdegreemax();
                break;
            case 34:
                return $this->getHatchhoursmin();
                break;
            case 35:
                return $this->getHatchhoursmax();
                break;
            case 36:
                return $this->getProductioncycle();
                break;
            case 37:
                return $this->getProductionyear();
                break;
            case 38:
                return $this->getComment();
                break;
            case 39:
                return $this->getEntered();
                break;
            case 40:
                return $this->getDateentered();
                break;
            case 41:
                return $this->getModified();
                break;
            case 42:
                return $this->getDatemodified();
                break;
            case 43:
                return $this->getExpert();
                break;
            case 44:
                return $this->getDatechecked();
                break;
            case 45:
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
        if (isset($alreadyDumpedObjects['Eggnurserysystem'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Eggnurserysystem'][serialize($this->getPrimaryKey())] = true;
        $keys = EggnurserysystemPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getSpeccode(),
            $keys[2] => $this->getStockcode(),
            $keys[3] => $this->getCommonname(),
            $keys[4] => $this->getSpecies(),
            $keys[5] => $this->getMainref(),
            $keys[6] => $this->getCCode(),
            $keys[7] => $this->getLocality(),
            $keys[8] => $this->getDataref(),
            $keys[9] => $this->getNumberofeggs(),
            $keys[10] => $this->getUnit(),
            $keys[11] => $this->getNurserysystemi(),
            $keys[12] => $this->getNurserysystemii(),
            $keys[13] => $this->getCulturesystem(),
            $keys[14] => $this->getMainwatersource(),
            $keys[15] => $this->getSupplwatersource(),
            $keys[16] => $this->getTempmin(),
            $keys[17] => $this->getTempmax(),
            $keys[18] => $this->getSalinmin(),
            $keys[19] => $this->getSalinmax(),
            $keys[20] => $this->getPhmin(),
            $keys[21] => $this->getPhmax(),
            $keys[22] => $this->getOxygenmin(),
            $keys[23] => $this->getOxygenmax(),
            $keys[24] => $this->getHardnessmin(),
            $keys[25] => $this->getHardnessmax(),
            $keys[26] => $this->getIlluminationmin(),
            $keys[27] => $this->getIlluminationmax(),
            $keys[28] => $this->getEggmortalitymin(),
            $keys[29] => $this->getEggmortalitymax(),
            $keys[30] => $this->getEyeingmin(),
            $keys[31] => $this->getEyeingmax(),
            $keys[32] => $this->getHatchdegreemin(),
            $keys[33] => $this->getHatchdegreemax(),
            $keys[34] => $this->getHatchhoursmin(),
            $keys[35] => $this->getHatchhoursmax(),
            $keys[36] => $this->getProductioncycle(),
            $keys[37] => $this->getProductionyear(),
            $keys[38] => $this->getComment(),
            $keys[39] => $this->getEntered(),
            $keys[40] => $this->getDateentered(),
            $keys[41] => $this->getModified(),
            $keys[42] => $this->getDatemodified(),
            $keys[43] => $this->getExpert(),
            $keys[44] => $this->getDatechecked(),
            $keys[45] => $this->getTs(),
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
        $pos = EggnurserysystemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSpeccode($value);
                break;
            case 2:
                $this->setStockcode($value);
                break;
            case 3:
                $this->setCommonname($value);
                break;
            case 4:
                $this->setSpecies($value);
                break;
            case 5:
                $this->setMainref($value);
                break;
            case 6:
                $this->setCCode($value);
                break;
            case 7:
                $this->setLocality($value);
                break;
            case 8:
                $this->setDataref($value);
                break;
            case 9:
                $this->setNumberofeggs($value);
                break;
            case 10:
                $this->setUnit($value);
                break;
            case 11:
                $this->setNurserysystemi($value);
                break;
            case 12:
                $this->setNurserysystemii($value);
                break;
            case 13:
                $this->setCulturesystem($value);
                break;
            case 14:
                $this->setMainwatersource($value);
                break;
            case 15:
                $this->setSupplwatersource($value);
                break;
            case 16:
                $this->setTempmin($value);
                break;
            case 17:
                $this->setTempmax($value);
                break;
            case 18:
                $this->setSalinmin($value);
                break;
            case 19:
                $this->setSalinmax($value);
                break;
            case 20:
                $this->setPhmin($value);
                break;
            case 21:
                $this->setPhmax($value);
                break;
            case 22:
                $this->setOxygenmin($value);
                break;
            case 23:
                $this->setOxygenmax($value);
                break;
            case 24:
                $this->setHardnessmin($value);
                break;
            case 25:
                $this->setHardnessmax($value);
                break;
            case 26:
                $this->setIlluminationmin($value);
                break;
            case 27:
                $this->setIlluminationmax($value);
                break;
            case 28:
                $this->setEggmortalitymin($value);
                break;
            case 29:
                $this->setEggmortalitymax($value);
                break;
            case 30:
                $this->setEyeingmin($value);
                break;
            case 31:
                $this->setEyeingmax($value);
                break;
            case 32:
                $this->setHatchdegreemin($value);
                break;
            case 33:
                $this->setHatchdegreemax($value);
                break;
            case 34:
                $this->setHatchhoursmin($value);
                break;
            case 35:
                $this->setHatchhoursmax($value);
                break;
            case 36:
                $this->setProductioncycle($value);
                break;
            case 37:
                $this->setProductionyear($value);
                break;
            case 38:
                $this->setComment($value);
                break;
            case 39:
                $this->setEntered($value);
                break;
            case 40:
                $this->setDateentered($value);
                break;
            case 41:
                $this->setModified($value);
                break;
            case 42:
                $this->setDatemodified($value);
                break;
            case 43:
                $this->setExpert($value);
                break;
            case 44:
                $this->setDatechecked($value);
                break;
            case 45:
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
        $keys = EggnurserysystemPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSpeccode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setStockcode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCommonname($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSpecies($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMainref($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCCode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLocality($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDataref($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setNumberofeggs($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setUnit($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setNurserysystemi($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNurserysystemii($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setCulturesystem($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setMainwatersource($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setSupplwatersource($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setTempmin($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setTempmax($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setSalinmin($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setSalinmax($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setPhmin($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setPhmax($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setOxygenmin($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setOxygenmax($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setHardnessmin($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setHardnessmax($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setIlluminationmin($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setIlluminationmax($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setEggmortalitymin($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setEggmortalitymax($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setEyeingmin($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setEyeingmax($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setHatchdegreemin($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setHatchdegreemax($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setHatchhoursmin($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setHatchhoursmax($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setProductioncycle($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setProductionyear($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setComment($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setEntered($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setDateentered($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setModified($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setDatemodified($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setExpert($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setDatechecked($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setTs($arr[$keys[45]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EggnurserysystemPeer::DATABASE_NAME);

        if ($this->isColumnModified(EggnurserysystemPeer::AUTOCTR)) $criteria->add(EggnurserysystemPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(EggnurserysystemPeer::SPECCODE)) $criteria->add(EggnurserysystemPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(EggnurserysystemPeer::STOCKCODE)) $criteria->add(EggnurserysystemPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(EggnurserysystemPeer::COMMONNAME)) $criteria->add(EggnurserysystemPeer::COMMONNAME, $this->commonname);
        if ($this->isColumnModified(EggnurserysystemPeer::SPECIES)) $criteria->add(EggnurserysystemPeer::SPECIES, $this->species);
        if ($this->isColumnModified(EggnurserysystemPeer::MAINREF)) $criteria->add(EggnurserysystemPeer::MAINREF, $this->mainref);
        if ($this->isColumnModified(EggnurserysystemPeer::C_CODE)) $criteria->add(EggnurserysystemPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(EggnurserysystemPeer::LOCALITY)) $criteria->add(EggnurserysystemPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(EggnurserysystemPeer::DATAREF)) $criteria->add(EggnurserysystemPeer::DATAREF, $this->dataref);
        if ($this->isColumnModified(EggnurserysystemPeer::NUMBEROFEGGS)) $criteria->add(EggnurserysystemPeer::NUMBEROFEGGS, $this->numberofeggs);
        if ($this->isColumnModified(EggnurserysystemPeer::UNIT)) $criteria->add(EggnurserysystemPeer::UNIT, $this->unit);
        if ($this->isColumnModified(EggnurserysystemPeer::NURSERYSYSTEMI)) $criteria->add(EggnurserysystemPeer::NURSERYSYSTEMI, $this->nurserysystemi);
        if ($this->isColumnModified(EggnurserysystemPeer::NURSERYSYSTEMII)) $criteria->add(EggnurserysystemPeer::NURSERYSYSTEMII, $this->nurserysystemii);
        if ($this->isColumnModified(EggnurserysystemPeer::CULTURESYSTEM)) $criteria->add(EggnurserysystemPeer::CULTURESYSTEM, $this->culturesystem);
        if ($this->isColumnModified(EggnurserysystemPeer::MAINWATERSOURCE)) $criteria->add(EggnurserysystemPeer::MAINWATERSOURCE, $this->mainwatersource);
        if ($this->isColumnModified(EggnurserysystemPeer::SUPPLWATERSOURCE)) $criteria->add(EggnurserysystemPeer::SUPPLWATERSOURCE, $this->supplwatersource);
        if ($this->isColumnModified(EggnurserysystemPeer::TEMPMIN)) $criteria->add(EggnurserysystemPeer::TEMPMIN, $this->tempmin);
        if ($this->isColumnModified(EggnurserysystemPeer::TEMPMAX)) $criteria->add(EggnurserysystemPeer::TEMPMAX, $this->tempmax);
        if ($this->isColumnModified(EggnurserysystemPeer::SALINMIN)) $criteria->add(EggnurserysystemPeer::SALINMIN, $this->salinmin);
        if ($this->isColumnModified(EggnurserysystemPeer::SALINMAX)) $criteria->add(EggnurserysystemPeer::SALINMAX, $this->salinmax);
        if ($this->isColumnModified(EggnurserysystemPeer::PHMIN)) $criteria->add(EggnurserysystemPeer::PHMIN, $this->phmin);
        if ($this->isColumnModified(EggnurserysystemPeer::PHMAX)) $criteria->add(EggnurserysystemPeer::PHMAX, $this->phmax);
        if ($this->isColumnModified(EggnurserysystemPeer::OXYGENMIN)) $criteria->add(EggnurserysystemPeer::OXYGENMIN, $this->oxygenmin);
        if ($this->isColumnModified(EggnurserysystemPeer::OXYGENMAX)) $criteria->add(EggnurserysystemPeer::OXYGENMAX, $this->oxygenmax);
        if ($this->isColumnModified(EggnurserysystemPeer::HARDNESSMIN)) $criteria->add(EggnurserysystemPeer::HARDNESSMIN, $this->hardnessmin);
        if ($this->isColumnModified(EggnurserysystemPeer::HARDNESSMAX)) $criteria->add(EggnurserysystemPeer::HARDNESSMAX, $this->hardnessmax);
        if ($this->isColumnModified(EggnurserysystemPeer::ILLUMINATIONMIN)) $criteria->add(EggnurserysystemPeer::ILLUMINATIONMIN, $this->illuminationmin);
        if ($this->isColumnModified(EggnurserysystemPeer::ILLUMINATIONMAX)) $criteria->add(EggnurserysystemPeer::ILLUMINATIONMAX, $this->illuminationmax);
        if ($this->isColumnModified(EggnurserysystemPeer::EGGMORTALITYMIN)) $criteria->add(EggnurserysystemPeer::EGGMORTALITYMIN, $this->eggmortalitymin);
        if ($this->isColumnModified(EggnurserysystemPeer::EGGMORTALITYMAX)) $criteria->add(EggnurserysystemPeer::EGGMORTALITYMAX, $this->eggmortalitymax);
        if ($this->isColumnModified(EggnurserysystemPeer::EYEINGMIN)) $criteria->add(EggnurserysystemPeer::EYEINGMIN, $this->eyeingmin);
        if ($this->isColumnModified(EggnurserysystemPeer::EYEINGMAX)) $criteria->add(EggnurserysystemPeer::EYEINGMAX, $this->eyeingmax);
        if ($this->isColumnModified(EggnurserysystemPeer::HATCHDEGREEMIN)) $criteria->add(EggnurserysystemPeer::HATCHDEGREEMIN, $this->hatchdegreemin);
        if ($this->isColumnModified(EggnurserysystemPeer::HATCHDEGREEMAX)) $criteria->add(EggnurserysystemPeer::HATCHDEGREEMAX, $this->hatchdegreemax);
        if ($this->isColumnModified(EggnurserysystemPeer::HATCHHOURSMIN)) $criteria->add(EggnurserysystemPeer::HATCHHOURSMIN, $this->hatchhoursmin);
        if ($this->isColumnModified(EggnurserysystemPeer::HATCHHOURSMAX)) $criteria->add(EggnurserysystemPeer::HATCHHOURSMAX, $this->hatchhoursmax);
        if ($this->isColumnModified(EggnurserysystemPeer::PRODUCTIONCYCLE)) $criteria->add(EggnurserysystemPeer::PRODUCTIONCYCLE, $this->productioncycle);
        if ($this->isColumnModified(EggnurserysystemPeer::PRODUCTIONYEAR)) $criteria->add(EggnurserysystemPeer::PRODUCTIONYEAR, $this->productionyear);
        if ($this->isColumnModified(EggnurserysystemPeer::COMMENT)) $criteria->add(EggnurserysystemPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(EggnurserysystemPeer::ENTERED)) $criteria->add(EggnurserysystemPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(EggnurserysystemPeer::DATEENTERED)) $criteria->add(EggnurserysystemPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(EggnurserysystemPeer::MODIFIED)) $criteria->add(EggnurserysystemPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(EggnurserysystemPeer::DATEMODIFIED)) $criteria->add(EggnurserysystemPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(EggnurserysystemPeer::EXPERT)) $criteria->add(EggnurserysystemPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(EggnurserysystemPeer::DATECHECKED)) $criteria->add(EggnurserysystemPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(EggnurserysystemPeer::TS)) $criteria->add(EggnurserysystemPeer::TS, $this->ts);

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
        $criteria = new Criteria(EggnurserysystemPeer::DATABASE_NAME);
        $criteria->add(EggnurserysystemPeer::AUTOCTR, $this->autoctr);
        $criteria->add(EggnurserysystemPeer::STOCKCODE, $this->stockcode);
        $criteria->add(EggnurserysystemPeer::MAINREF, $this->mainref);

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
        $pks[0] = $this->getAutoctr();
        $pks[1] = $this->getStockcode();
        $pks[2] = $this->getMainref();

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
        $this->setAutoctr($keys[0]);
        $this->setStockcode($keys[1]);
        $this->setMainref($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getAutoctr()) && (null === $this->getStockcode()) && (null === $this->getMainref());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Eggnurserysystem (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setCommonname($this->getCommonname());
        $copyObj->setSpecies($this->getSpecies());
        $copyObj->setMainref($this->getMainref());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setDataref($this->getDataref());
        $copyObj->setNumberofeggs($this->getNumberofeggs());
        $copyObj->setUnit($this->getUnit());
        $copyObj->setNurserysystemi($this->getNurserysystemi());
        $copyObj->setNurserysystemii($this->getNurserysystemii());
        $copyObj->setCulturesystem($this->getCulturesystem());
        $copyObj->setMainwatersource($this->getMainwatersource());
        $copyObj->setSupplwatersource($this->getSupplwatersource());
        $copyObj->setTempmin($this->getTempmin());
        $copyObj->setTempmax($this->getTempmax());
        $copyObj->setSalinmin($this->getSalinmin());
        $copyObj->setSalinmax($this->getSalinmax());
        $copyObj->setPhmin($this->getPhmin());
        $copyObj->setPhmax($this->getPhmax());
        $copyObj->setOxygenmin($this->getOxygenmin());
        $copyObj->setOxygenmax($this->getOxygenmax());
        $copyObj->setHardnessmin($this->getHardnessmin());
        $copyObj->setHardnessmax($this->getHardnessmax());
        $copyObj->setIlluminationmin($this->getIlluminationmin());
        $copyObj->setIlluminationmax($this->getIlluminationmax());
        $copyObj->setEggmortalitymin($this->getEggmortalitymin());
        $copyObj->setEggmortalitymax($this->getEggmortalitymax());
        $copyObj->setEyeingmin($this->getEyeingmin());
        $copyObj->setEyeingmax($this->getEyeingmax());
        $copyObj->setHatchdegreemin($this->getHatchdegreemin());
        $copyObj->setHatchdegreemax($this->getHatchdegreemax());
        $copyObj->setHatchhoursmin($this->getHatchhoursmin());
        $copyObj->setHatchhoursmax($this->getHatchhoursmax());
        $copyObj->setProductioncycle($this->getProductioncycle());
        $copyObj->setProductionyear($this->getProductionyear());
        $copyObj->setComment($this->getComment());
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
     * @return Eggnurserysystem Clone of current object.
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
     * @return EggnurserysystemPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EggnurserysystemPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->speccode = null;
        $this->stockcode = null;
        $this->commonname = null;
        $this->species = null;
        $this->mainref = null;
        $this->c_code = null;
        $this->locality = null;
        $this->dataref = null;
        $this->numberofeggs = null;
        $this->unit = null;
        $this->nurserysystemi = null;
        $this->nurserysystemii = null;
        $this->culturesystem = null;
        $this->mainwatersource = null;
        $this->supplwatersource = null;
        $this->tempmin = null;
        $this->tempmax = null;
        $this->salinmin = null;
        $this->salinmax = null;
        $this->phmin = null;
        $this->phmax = null;
        $this->oxygenmin = null;
        $this->oxygenmax = null;
        $this->hardnessmin = null;
        $this->hardnessmax = null;
        $this->illuminationmin = null;
        $this->illuminationmax = null;
        $this->eggmortalitymin = null;
        $this->eggmortalitymax = null;
        $this->eyeingmin = null;
        $this->eyeingmax = null;
        $this->hatchdegreemin = null;
        $this->hatchdegreemax = null;
        $this->hatchhoursmin = null;
        $this->hatchhoursmax = null;
        $this->productioncycle = null;
        $this->productionyear = null;
        $this->comment = null;
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
        return (string) $this->exportTo(EggnurserysystemPeer::DEFAULT_STRING_FORMAT);
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
