<?php


/**
 * Base class that represents a row from the 'abnorm' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseAbnorm extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'AbnormPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AbnormPeer
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
     * The value for the family field.
     * @var        string
     */
    protected $family;

    /**
     * The value for the genus field.
     * @var        string
     */
    protected $genus;

    /**
     * The value for the species field.
     * @var        string
     */
    protected $species;

    /**
     * The value for the commonname field.
     * @var        string
     */
    protected $commonname;

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
     * The value for the lifestage field.
     * @var        string
     */
    protected $lifestage;

    /**
     * The value for the location field.
     * @var        string
     */
    protected $location;

    /**
     * The value for the season field.
     * @var        string
     */
    protected $season;

    /**
     * The value for the abnormalitydisease field.
     * @var        string
     */
    protected $abnormalitydisease;

    /**
     * The value for the prevalence field.
     * @var        string
     */
    protected $prevalence;

    /**
     * The value for the stressor field.
     * @var        string
     */
    protected $stressor;

    /**
     * The value for the labfield field.
     * @var        string
     */
    protected $labfield;

    /**
     * The value for the concentration field.
     * @var        string
     */
    protected $concentration;

    /**
     * The value for the abnormrefno field.
     * @var        int
     */
    protected $abnormrefno;

    /**
     * The value for the secondrefno field.
     * @var        int
     */
    protected $secondrefno;

    /**
     * The value for the notes field.
     * @var        string
     */
    protected $notes;

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
     * Note: this column has a database default value of: (expression) CURRENT_TIMESTAMP
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
    }

    /**
     * Initializes internal state of BaseAbnorm object.
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
     * Get the [family] column value.
     *
     * @return string
     */
    public function getFamily()
    {

        return $this->family;
    }

    /**
     * Get the [genus] column value.
     *
     * @return string
     */
    public function getGenus()
    {

        return $this->genus;
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
     * Get the [commonname] column value.
     *
     * @return string
     */
    public function getCommonname()
    {

        return $this->commonname;
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
     * Get the [lifestage] column value.
     *
     * @return string
     */
    public function getLifestage()
    {

        return $this->lifestage;
    }

    /**
     * Get the [location] column value.
     *
     * @return string
     */
    public function getLocation()
    {

        return $this->location;
    }

    /**
     * Get the [season] column value.
     *
     * @return string
     */
    public function getSeason()
    {

        return $this->season;
    }

    /**
     * Get the [abnormalitydisease] column value.
     *
     * @return string
     */
    public function getAbnormalitydisease()
    {

        return $this->abnormalitydisease;
    }

    /**
     * Get the [prevalence] column value.
     *
     * @return string
     */
    public function getPrevalence()
    {

        return $this->prevalence;
    }

    /**
     * Get the [stressor] column value.
     *
     * @return string
     */
    public function getStressor()
    {

        return $this->stressor;
    }

    /**
     * Get the [labfield] column value.
     *
     * @return string
     */
    public function getLabfield()
    {

        return $this->labfield;
    }

    /**
     * Get the [concentration] column value.
     *
     * @return string
     */
    public function getConcentration()
    {

        return $this->concentration;
    }

    /**
     * Get the [abnormrefno] column value.
     *
     * @return int
     */
    public function getAbnormrefno()
    {

        return $this->abnormrefno;
    }

    /**
     * Get the [secondrefno] column value.
     *
     * @return int
     */
    public function getSecondrefno()
    {

        return $this->secondrefno;
    }

    /**
     * Get the [notes] column value.
     *
     * @return string
     */
    public function getNotes()
    {

        return $this->notes;
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
     * @return Abnorm The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = AbnormPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [family] column.
     *
     * @param  string $v new value
     * @return Abnorm The current object (for fluent API support)
     */
    public function setFamily($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->family !== $v) {
            $this->family = $v;
            $this->modifiedColumns[] = AbnormPeer::FAMILY;
        }


        return $this;
    } // setFamily()

    /**
     * Set the value of [genus] column.
     *
     * @param  string $v new value
     * @return Abnorm The current object (for fluent API support)
     */
    public function setGenus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genus !== $v) {
            $this->genus = $v;
            $this->modifiedColumns[] = AbnormPeer::GENUS;
        }


        return $this;
    } // setGenus()

    /**
     * Set the value of [species] column.
     *
     * @param  string $v new value
     * @return Abnorm The current object (for fluent API support)
     */
    public function setSpecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->species !== $v) {
            $this->species = $v;
            $this->modifiedColumns[] = AbnormPeer::SPECIES;
        }


        return $this;
    } // setSpecies()

    /**
     * Set the value of [commonname] column.
     *
     * @param  string $v new value
     * @return Abnorm The current object (for fluent API support)
     */
    public function setCommonname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname !== $v) {
            $this->commonname = $v;
            $this->modifiedColumns[] = AbnormPeer::COMMONNAME;
        }


        return $this;
    } // setCommonname()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Abnorm The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = AbnormPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Abnorm The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = AbnormPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [lifestage] column.
     *
     * @param  string $v new value
     * @return Abnorm The current object (for fluent API support)
     */
    public function setLifestage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lifestage !== $v) {
            $this->lifestage = $v;
            $this->modifiedColumns[] = AbnormPeer::LIFESTAGE;
        }


        return $this;
    } // setLifestage()

    /**
     * Set the value of [location] column.
     *
     * @param  string $v new value
     * @return Abnorm The current object (for fluent API support)
     */
    public function setLocation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->location !== $v) {
            $this->location = $v;
            $this->modifiedColumns[] = AbnormPeer::LOCATION;
        }


        return $this;
    } // setLocation()

    /**
     * Set the value of [season] column.
     *
     * @param  string $v new value
     * @return Abnorm The current object (for fluent API support)
     */
    public function setSeason($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->season !== $v) {
            $this->season = $v;
            $this->modifiedColumns[] = AbnormPeer::SEASON;
        }


        return $this;
    } // setSeason()

    /**
     * Set the value of [abnormalitydisease] column.
     *
     * @param  string $v new value
     * @return Abnorm The current object (for fluent API support)
     */
    public function setAbnormalitydisease($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abnormalitydisease !== $v) {
            $this->abnormalitydisease = $v;
            $this->modifiedColumns[] = AbnormPeer::ABNORMALITYDISEASE;
        }


        return $this;
    } // setAbnormalitydisease()

    /**
     * Set the value of [prevalence] column.
     *
     * @param  string $v new value
     * @return Abnorm The current object (for fluent API support)
     */
    public function setPrevalence($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prevalence !== $v) {
            $this->prevalence = $v;
            $this->modifiedColumns[] = AbnormPeer::PREVALENCE;
        }


        return $this;
    } // setPrevalence()

    /**
     * Set the value of [stressor] column.
     *
     * @param  string $v new value
     * @return Abnorm The current object (for fluent API support)
     */
    public function setStressor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->stressor !== $v) {
            $this->stressor = $v;
            $this->modifiedColumns[] = AbnormPeer::STRESSOR;
        }


        return $this;
    } // setStressor()

    /**
     * Set the value of [labfield] column.
     *
     * @param  string $v new value
     * @return Abnorm The current object (for fluent API support)
     */
    public function setLabfield($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->labfield !== $v) {
            $this->labfield = $v;
            $this->modifiedColumns[] = AbnormPeer::LABFIELD;
        }


        return $this;
    } // setLabfield()

    /**
     * Set the value of [concentration] column.
     *
     * @param  string $v new value
     * @return Abnorm The current object (for fluent API support)
     */
    public function setConcentration($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->concentration !== $v) {
            $this->concentration = $v;
            $this->modifiedColumns[] = AbnormPeer::CONCENTRATION;
        }


        return $this;
    } // setConcentration()

    /**
     * Set the value of [abnormrefno] column.
     *
     * @param  int $v new value
     * @return Abnorm The current object (for fluent API support)
     */
    public function setAbnormrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->abnormrefno !== $v) {
            $this->abnormrefno = $v;
            $this->modifiedColumns[] = AbnormPeer::ABNORMREFNO;
        }


        return $this;
    } // setAbnormrefno()

    /**
     * Set the value of [secondrefno] column.
     *
     * @param  int $v new value
     * @return Abnorm The current object (for fluent API support)
     */
    public function setSecondrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->secondrefno !== $v) {
            $this->secondrefno = $v;
            $this->modifiedColumns[] = AbnormPeer::SECONDREFNO;
        }


        return $this;
    } // setSecondrefno()

    /**
     * Set the value of [notes] column.
     *
     * @param  string $v new value
     * @return Abnorm The current object (for fluent API support)
     */
    public function setNotes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->notes !== $v) {
            $this->notes = $v;
            $this->modifiedColumns[] = AbnormPeer::NOTES;
        }


        return $this;
    } // setNotes()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Abnorm The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = AbnormPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Abnorm The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = AbnormPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Abnorm The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = AbnormPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Abnorm The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = AbnormPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Abnorm The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = AbnormPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Abnorm The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = AbnormPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Abnorm The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = AbnormPeer::TS;
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
            $this->family = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->genus = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->species = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->commonname = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->speccode = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->stockcode = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->lifestage = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->location = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->season = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->abnormalitydisease = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->prevalence = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->stressor = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->labfield = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->concentration = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->abnormrefno = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->secondrefno = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->notes = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->entered = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->dateentered = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->modified = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->datemodified = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->expert = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->datechecked = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->ts = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 25; // 25 = AbnormPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Abnorm object", $e);
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
            $con = Propel::getConnection(AbnormPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AbnormPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(AbnormPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AbnormQuery::create()
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
            $con = Propel::getConnection(AbnormPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                AbnormPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = AbnormPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . AbnormPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(AbnormPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`AutoCtr`';
        }
        if ($this->isColumnModified(AbnormPeer::FAMILY)) {
            $modifiedColumns[':p' . $index++]  = '`Family`';
        }
        if ($this->isColumnModified(AbnormPeer::GENUS)) {
            $modifiedColumns[':p' . $index++]  = '`Genus`';
        }
        if ($this->isColumnModified(AbnormPeer::SPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`Species`';
        }
        if ($this->isColumnModified(AbnormPeer::COMMONNAME)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName`';
        }
        if ($this->isColumnModified(AbnormPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(AbnormPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(AbnormPeer::LIFESTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`LifeStage`';
        }
        if ($this->isColumnModified(AbnormPeer::LOCATION)) {
            $modifiedColumns[':p' . $index++]  = '`Location`';
        }
        if ($this->isColumnModified(AbnormPeer::SEASON)) {
            $modifiedColumns[':p' . $index++]  = '`Season`';
        }
        if ($this->isColumnModified(AbnormPeer::ABNORMALITYDISEASE)) {
            $modifiedColumns[':p' . $index++]  = '`AbnormalityDisease`';
        }
        if ($this->isColumnModified(AbnormPeer::PREVALENCE)) {
            $modifiedColumns[':p' . $index++]  = '`Prevalence`';
        }
        if ($this->isColumnModified(AbnormPeer::STRESSOR)) {
            $modifiedColumns[':p' . $index++]  = '`Stressor`';
        }
        if ($this->isColumnModified(AbnormPeer::LABFIELD)) {
            $modifiedColumns[':p' . $index++]  = '`LabField`';
        }
        if ($this->isColumnModified(AbnormPeer::CONCENTRATION)) {
            $modifiedColumns[':p' . $index++]  = '`Concentration`';
        }
        if ($this->isColumnModified(AbnormPeer::ABNORMREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`ABNORMRefNo`';
        }
        if ($this->isColumnModified(AbnormPeer::SECONDREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`SecondRefNo`';
        }
        if ($this->isColumnModified(AbnormPeer::NOTES)) {
            $modifiedColumns[':p' . $index++]  = '`Notes`';
        }
        if ($this->isColumnModified(AbnormPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(AbnormPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(AbnormPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(AbnormPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(AbnormPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(AbnormPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(AbnormPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `abnorm` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`AutoCtr`':
                        $stmt->bindValue($identifier, $this->autoctr, PDO::PARAM_INT);
                        break;
                    case '`Family`':
                        $stmt->bindValue($identifier, $this->family, PDO::PARAM_STR);
                        break;
                    case '`Genus`':
                        $stmt->bindValue($identifier, $this->genus, PDO::PARAM_STR);
                        break;
                    case '`Species`':
                        $stmt->bindValue($identifier, $this->species, PDO::PARAM_STR);
                        break;
                    case '`CommonName`':
                        $stmt->bindValue($identifier, $this->commonname, PDO::PARAM_STR);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`LifeStage`':
                        $stmt->bindValue($identifier, $this->lifestage, PDO::PARAM_STR);
                        break;
                    case '`Location`':
                        $stmt->bindValue($identifier, $this->location, PDO::PARAM_STR);
                        break;
                    case '`Season`':
                        $stmt->bindValue($identifier, $this->season, PDO::PARAM_STR);
                        break;
                    case '`AbnormalityDisease`':
                        $stmt->bindValue($identifier, $this->abnormalitydisease, PDO::PARAM_STR);
                        break;
                    case '`Prevalence`':
                        $stmt->bindValue($identifier, $this->prevalence, PDO::PARAM_STR);
                        break;
                    case '`Stressor`':
                        $stmt->bindValue($identifier, $this->stressor, PDO::PARAM_STR);
                        break;
                    case '`LabField`':
                        $stmt->bindValue($identifier, $this->labfield, PDO::PARAM_STR);
                        break;
                    case '`Concentration`':
                        $stmt->bindValue($identifier, $this->concentration, PDO::PARAM_STR);
                        break;
                    case '`ABNORMRefNo`':
                        $stmt->bindValue($identifier, $this->abnormrefno, PDO::PARAM_INT);
                        break;
                    case '`SecondRefNo`':
                        $stmt->bindValue($identifier, $this->secondrefno, PDO::PARAM_INT);
                        break;
                    case '`Notes`':
                        $stmt->bindValue($identifier, $this->notes, PDO::PARAM_STR);
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


            if (($retval = AbnormPeer::doValidate($this, $columns)) !== true) {
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
        $pos = AbnormPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getFamily();
                break;
            case 2:
                return $this->getGenus();
                break;
            case 3:
                return $this->getSpecies();
                break;
            case 4:
                return $this->getCommonname();
                break;
            case 5:
                return $this->getSpeccode();
                break;
            case 6:
                return $this->getStockcode();
                break;
            case 7:
                return $this->getLifestage();
                break;
            case 8:
                return $this->getLocation();
                break;
            case 9:
                return $this->getSeason();
                break;
            case 10:
                return $this->getAbnormalitydisease();
                break;
            case 11:
                return $this->getPrevalence();
                break;
            case 12:
                return $this->getStressor();
                break;
            case 13:
                return $this->getLabfield();
                break;
            case 14:
                return $this->getConcentration();
                break;
            case 15:
                return $this->getAbnormrefno();
                break;
            case 16:
                return $this->getSecondrefno();
                break;
            case 17:
                return $this->getNotes();
                break;
            case 18:
                return $this->getEntered();
                break;
            case 19:
                return $this->getDateentered();
                break;
            case 20:
                return $this->getModified();
                break;
            case 21:
                return $this->getDatemodified();
                break;
            case 22:
                return $this->getExpert();
                break;
            case 23:
                return $this->getDatechecked();
                break;
            case 24:
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
        if (isset($alreadyDumpedObjects['Abnorm'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Abnorm'][$this->getPrimaryKey()] = true;
        $keys = AbnormPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getFamily(),
            $keys[2] => $this->getGenus(),
            $keys[3] => $this->getSpecies(),
            $keys[4] => $this->getCommonname(),
            $keys[5] => $this->getSpeccode(),
            $keys[6] => $this->getStockcode(),
            $keys[7] => $this->getLifestage(),
            $keys[8] => $this->getLocation(),
            $keys[9] => $this->getSeason(),
            $keys[10] => $this->getAbnormalitydisease(),
            $keys[11] => $this->getPrevalence(),
            $keys[12] => $this->getStressor(),
            $keys[13] => $this->getLabfield(),
            $keys[14] => $this->getConcentration(),
            $keys[15] => $this->getAbnormrefno(),
            $keys[16] => $this->getSecondrefno(),
            $keys[17] => $this->getNotes(),
            $keys[18] => $this->getEntered(),
            $keys[19] => $this->getDateentered(),
            $keys[20] => $this->getModified(),
            $keys[21] => $this->getDatemodified(),
            $keys[22] => $this->getExpert(),
            $keys[23] => $this->getDatechecked(),
            $keys[24] => $this->getTs(),
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
        $pos = AbnormPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setFamily($value);
                break;
            case 2:
                $this->setGenus($value);
                break;
            case 3:
                $this->setSpecies($value);
                break;
            case 4:
                $this->setCommonname($value);
                break;
            case 5:
                $this->setSpeccode($value);
                break;
            case 6:
                $this->setStockcode($value);
                break;
            case 7:
                $this->setLifestage($value);
                break;
            case 8:
                $this->setLocation($value);
                break;
            case 9:
                $this->setSeason($value);
                break;
            case 10:
                $this->setAbnormalitydisease($value);
                break;
            case 11:
                $this->setPrevalence($value);
                break;
            case 12:
                $this->setStressor($value);
                break;
            case 13:
                $this->setLabfield($value);
                break;
            case 14:
                $this->setConcentration($value);
                break;
            case 15:
                $this->setAbnormrefno($value);
                break;
            case 16:
                $this->setSecondrefno($value);
                break;
            case 17:
                $this->setNotes($value);
                break;
            case 18:
                $this->setEntered($value);
                break;
            case 19:
                $this->setDateentered($value);
                break;
            case 20:
                $this->setModified($value);
                break;
            case 21:
                $this->setDatemodified($value);
                break;
            case 22:
                $this->setExpert($value);
                break;
            case 23:
                $this->setDatechecked($value);
                break;
            case 24:
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
        $keys = AbnormPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFamily($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setGenus($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSpecies($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCommonname($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSpeccode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setStockcode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLifestage($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLocation($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setSeason($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAbnormalitydisease($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setPrevalence($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setStressor($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setLabfield($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setConcentration($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setAbnormrefno($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setSecondrefno($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setNotes($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setEntered($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDateentered($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setModified($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDatemodified($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setExpert($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDatechecked($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setTs($arr[$keys[24]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AbnormPeer::DATABASE_NAME);

        if ($this->isColumnModified(AbnormPeer::AUTOCTR)) $criteria->add(AbnormPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(AbnormPeer::FAMILY)) $criteria->add(AbnormPeer::FAMILY, $this->family);
        if ($this->isColumnModified(AbnormPeer::GENUS)) $criteria->add(AbnormPeer::GENUS, $this->genus);
        if ($this->isColumnModified(AbnormPeer::SPECIES)) $criteria->add(AbnormPeer::SPECIES, $this->species);
        if ($this->isColumnModified(AbnormPeer::COMMONNAME)) $criteria->add(AbnormPeer::COMMONNAME, $this->commonname);
        if ($this->isColumnModified(AbnormPeer::SPECCODE)) $criteria->add(AbnormPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(AbnormPeer::STOCKCODE)) $criteria->add(AbnormPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(AbnormPeer::LIFESTAGE)) $criteria->add(AbnormPeer::LIFESTAGE, $this->lifestage);
        if ($this->isColumnModified(AbnormPeer::LOCATION)) $criteria->add(AbnormPeer::LOCATION, $this->location);
        if ($this->isColumnModified(AbnormPeer::SEASON)) $criteria->add(AbnormPeer::SEASON, $this->season);
        if ($this->isColumnModified(AbnormPeer::ABNORMALITYDISEASE)) $criteria->add(AbnormPeer::ABNORMALITYDISEASE, $this->abnormalitydisease);
        if ($this->isColumnModified(AbnormPeer::PREVALENCE)) $criteria->add(AbnormPeer::PREVALENCE, $this->prevalence);
        if ($this->isColumnModified(AbnormPeer::STRESSOR)) $criteria->add(AbnormPeer::STRESSOR, $this->stressor);
        if ($this->isColumnModified(AbnormPeer::LABFIELD)) $criteria->add(AbnormPeer::LABFIELD, $this->labfield);
        if ($this->isColumnModified(AbnormPeer::CONCENTRATION)) $criteria->add(AbnormPeer::CONCENTRATION, $this->concentration);
        if ($this->isColumnModified(AbnormPeer::ABNORMREFNO)) $criteria->add(AbnormPeer::ABNORMREFNO, $this->abnormrefno);
        if ($this->isColumnModified(AbnormPeer::SECONDREFNO)) $criteria->add(AbnormPeer::SECONDREFNO, $this->secondrefno);
        if ($this->isColumnModified(AbnormPeer::NOTES)) $criteria->add(AbnormPeer::NOTES, $this->notes);
        if ($this->isColumnModified(AbnormPeer::ENTERED)) $criteria->add(AbnormPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(AbnormPeer::DATEENTERED)) $criteria->add(AbnormPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(AbnormPeer::MODIFIED)) $criteria->add(AbnormPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(AbnormPeer::DATEMODIFIED)) $criteria->add(AbnormPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(AbnormPeer::EXPERT)) $criteria->add(AbnormPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(AbnormPeer::DATECHECKED)) $criteria->add(AbnormPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(AbnormPeer::TS)) $criteria->add(AbnormPeer::TS, $this->ts);

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
        $criteria = new Criteria(AbnormPeer::DATABASE_NAME);
        $criteria->add(AbnormPeer::AUTOCTR, $this->autoctr);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getAutoctr();
    }

    /**
     * Generic method to set the primary key (autoctr column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setAutoctr($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getAutoctr();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Abnorm (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFamily($this->getFamily());
        $copyObj->setGenus($this->getGenus());
        $copyObj->setSpecies($this->getSpecies());
        $copyObj->setCommonname($this->getCommonname());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setLifestage($this->getLifestage());
        $copyObj->setLocation($this->getLocation());
        $copyObj->setSeason($this->getSeason());
        $copyObj->setAbnormalitydisease($this->getAbnormalitydisease());
        $copyObj->setPrevalence($this->getPrevalence());
        $copyObj->setStressor($this->getStressor());
        $copyObj->setLabfield($this->getLabfield());
        $copyObj->setConcentration($this->getConcentration());
        $copyObj->setAbnormrefno($this->getAbnormrefno());
        $copyObj->setSecondrefno($this->getSecondrefno());
        $copyObj->setNotes($this->getNotes());
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
     * @return Abnorm Clone of current object.
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
     * @return AbnormPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AbnormPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->family = null;
        $this->genus = null;
        $this->species = null;
        $this->commonname = null;
        $this->speccode = null;
        $this->stockcode = null;
        $this->lifestage = null;
        $this->location = null;
        $this->season = null;
        $this->abnormalitydisease = null;
        $this->prevalence = null;
        $this->stressor = null;
        $this->labfield = null;
        $this->concentration = null;
        $this->abnormrefno = null;
        $this->secondrefno = null;
        $this->notes = null;
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
        return (string) $this->exportTo(AbnormPeer::DEFAULT_STRING_FORMAT);
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
