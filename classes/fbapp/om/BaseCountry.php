<?php


/**
 * Base class that represents a row from the 'country' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCountry extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CountryPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CountryPeer
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
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the countryrefno field.
     * @var        int
     */
    protected $countryrefno;

    /**
     * The value for the alsoref field.
     * @var        int
     */
    protected $alsoref;

    /**
     * The value for the status field.
     * Note: this column has a database default value of: 'native'
     * @var        string
     */
    protected $status;

    /**
     * The value for the currentpresence field.
     * @var        string
     */
    protected $currentpresence;

    /**
     * The value for the freshwater field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $freshwater;

    /**
     * The value for the brackish field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $brackish;

    /**
     * The value for the saltwater field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $saltwater;

    /**
     * The value for the comments field.
     * @var        string
     */
    protected $comments;

    /**
     * The value for the abundance field.
     * @var        string
     */
    protected $abundance;

    /**
     * The value for the refabundance field.
     * @var        int
     */
    protected $refabundance;

    /**
     * The value for the importance field.
     * @var        string
     */
    protected $importance;

    /**
     * The value for the refimportance field.
     * @var        int
     */
    protected $refimportance;

    /**
     * The value for the exvesselprice field.
     * @var        double
     */
    protected $exvesselprice;

    /**
     * The value for the aquaculture field.
     * @var        string
     */
    protected $aquaculture;

    /**
     * The value for the refaquaculture field.
     * @var        int
     */
    protected $refaquaculture;

    /**
     * The value for the liveexportorg field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $liveexportorg;

    /**
     * The value for the liveexport field.
     * @var        string
     */
    protected $liveexport;

    /**
     * The value for the refliveexport field.
     * @var        int
     */
    protected $refliveexport;

    /**
     * The value for the game field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $game;

    /**
     * The value for the bait field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $bait;

    /**
     * The value for the regulations field.
     * @var        string
     */
    protected $regulations;

    /**
     * The value for the refregulations field.
     * @var        int
     */
    protected $refregulations;

    /**
     * The value for the threatened field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $threatened;

    /**
     * The value for the countrysubcomp field.
     * @var        int
     */
    protected $countrysubcomp;

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
        $this->status = 'native';
        $this->freshwater = 0;
        $this->brackish = 0;
        $this->saltwater = 0;
        $this->liveexportorg = 0;
        $this->game = 0;
        $this->bait = 0;
        $this->threatened = 0;
    }

    /**
     * Initializes internal state of BaseCountry object.
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
     * Get the [c_code] column value.
     *
     * @return string
     */
    public function getCCode()
    {

        return $this->c_code;
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
     * Get the [countryrefno] column value.
     *
     * @return int
     */
    public function getCountryrefno()
    {

        return $this->countryrefno;
    }

    /**
     * Get the [alsoref] column value.
     *
     * @return int
     */
    public function getAlsoref()
    {

        return $this->alsoref;
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
     * Get the [currentpresence] column value.
     *
     * @return string
     */
    public function getCurrentpresence()
    {

        return $this->currentpresence;
    }

    /**
     * Get the [freshwater] column value.
     *
     * @return int
     */
    public function getFreshwater()
    {

        return $this->freshwater;
    }

    /**
     * Get the [brackish] column value.
     *
     * @return int
     */
    public function getBrackish()
    {

        return $this->brackish;
    }

    /**
     * Get the [saltwater] column value.
     *
     * @return int
     */
    public function getSaltwater()
    {

        return $this->saltwater;
    }

    /**
     * Get the [comments] column value.
     *
     * @return string
     */
    public function getComments()
    {

        return $this->comments;
    }

    /**
     * Get the [abundance] column value.
     *
     * @return string
     */
    public function getAbundance()
    {

        return $this->abundance;
    }

    /**
     * Get the [refabundance] column value.
     *
     * @return int
     */
    public function getRefabundance()
    {

        return $this->refabundance;
    }

    /**
     * Get the [importance] column value.
     *
     * @return string
     */
    public function getImportance()
    {

        return $this->importance;
    }

    /**
     * Get the [refimportance] column value.
     *
     * @return int
     */
    public function getRefimportance()
    {

        return $this->refimportance;
    }

    /**
     * Get the [exvesselprice] column value.
     *
     * @return double
     */
    public function getExvesselprice()
    {

        return $this->exvesselprice;
    }

    /**
     * Get the [aquaculture] column value.
     *
     * @return string
     */
    public function getAquaculture()
    {

        return $this->aquaculture;
    }

    /**
     * Get the [refaquaculture] column value.
     *
     * @return int
     */
    public function getRefaquaculture()
    {

        return $this->refaquaculture;
    }

    /**
     * Get the [liveexportorg] column value.
     *
     * @return int
     */
    public function getLiveexportorg()
    {

        return $this->liveexportorg;
    }

    /**
     * Get the [liveexport] column value.
     *
     * @return string
     */
    public function getLiveexport()
    {

        return $this->liveexport;
    }

    /**
     * Get the [refliveexport] column value.
     *
     * @return int
     */
    public function getRefliveexport()
    {

        return $this->refliveexport;
    }

    /**
     * Get the [game] column value.
     *
     * @return int
     */
    public function getGame()
    {

        return $this->game;
    }

    /**
     * Get the [bait] column value.
     *
     * @return int
     */
    public function getBait()
    {

        return $this->bait;
    }

    /**
     * Get the [regulations] column value.
     *
     * @return string
     */
    public function getRegulations()
    {

        return $this->regulations;
    }

    /**
     * Get the [refregulations] column value.
     *
     * @return int
     */
    public function getRefregulations()
    {

        return $this->refregulations;
    }

    /**
     * Get the [threatened] column value.
     *
     * @return int
     */
    public function getThreatened()
    {

        return $this->threatened;
    }

    /**
     * Get the [countrysubcomp] column value.
     *
     * @return int
     */
    public function getCountrysubcomp()
    {

        return $this->countrysubcomp;
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
     * @return Country The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = CountryPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = CountryPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = CountryPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = CountryPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [countryrefno] column.
     *
     * @param  int $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setCountryrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->countryrefno !== $v) {
            $this->countryrefno = $v;
            $this->modifiedColumns[] = CountryPeer::COUNTRYREFNO;
        }


        return $this;
    } // setCountryrefno()

    /**
     * Set the value of [alsoref] column.
     *
     * @param  int $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setAlsoref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->alsoref !== $v) {
            $this->alsoref = $v;
            $this->modifiedColumns[] = CountryPeer::ALSOREF;
        }


        return $this;
    } // setAlsoref()

    /**
     * Set the value of [status] column.
     *
     * @param  string $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[] = CountryPeer::STATUS;
        }


        return $this;
    } // setStatus()

    /**
     * Set the value of [currentpresence] column.
     *
     * @param  string $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setCurrentpresence($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->currentpresence !== $v) {
            $this->currentpresence = $v;
            $this->modifiedColumns[] = CountryPeer::CURRENTPRESENCE;
        }


        return $this;
    } // setCurrentpresence()

    /**
     * Set the value of [freshwater] column.
     *
     * @param  int $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setFreshwater($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->freshwater !== $v) {
            $this->freshwater = $v;
            $this->modifiedColumns[] = CountryPeer::FRESHWATER;
        }


        return $this;
    } // setFreshwater()

    /**
     * Set the value of [brackish] column.
     *
     * @param  int $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setBrackish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->brackish !== $v) {
            $this->brackish = $v;
            $this->modifiedColumns[] = CountryPeer::BRACKISH;
        }


        return $this;
    } // setBrackish()

    /**
     * Set the value of [saltwater] column.
     *
     * @param  int $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setSaltwater($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->saltwater !== $v) {
            $this->saltwater = $v;
            $this->modifiedColumns[] = CountryPeer::SALTWATER;
        }


        return $this;
    } // setSaltwater()

    /**
     * Set the value of [comments] column.
     *
     * @param  string $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setComments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comments !== $v) {
            $this->comments = $v;
            $this->modifiedColumns[] = CountryPeer::COMMENTS;
        }


        return $this;
    } // setComments()

    /**
     * Set the value of [abundance] column.
     *
     * @param  string $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setAbundance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abundance !== $v) {
            $this->abundance = $v;
            $this->modifiedColumns[] = CountryPeer::ABUNDANCE;
        }


        return $this;
    } // setAbundance()

    /**
     * Set the value of [refabundance] column.
     *
     * @param  int $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setRefabundance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->refabundance !== $v) {
            $this->refabundance = $v;
            $this->modifiedColumns[] = CountryPeer::REFABUNDANCE;
        }


        return $this;
    } // setRefabundance()

    /**
     * Set the value of [importance] column.
     *
     * @param  string $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setImportance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->importance !== $v) {
            $this->importance = $v;
            $this->modifiedColumns[] = CountryPeer::IMPORTANCE;
        }


        return $this;
    } // setImportance()

    /**
     * Set the value of [refimportance] column.
     *
     * @param  int $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setRefimportance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->refimportance !== $v) {
            $this->refimportance = $v;
            $this->modifiedColumns[] = CountryPeer::REFIMPORTANCE;
        }


        return $this;
    } // setRefimportance()

    /**
     * Set the value of [exvesselprice] column.
     *
     * @param  double $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setExvesselprice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->exvesselprice !== $v) {
            $this->exvesselprice = $v;
            $this->modifiedColumns[] = CountryPeer::EXVESSELPRICE;
        }


        return $this;
    } // setExvesselprice()

    /**
     * Set the value of [aquaculture] column.
     *
     * @param  string $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setAquaculture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->aquaculture !== $v) {
            $this->aquaculture = $v;
            $this->modifiedColumns[] = CountryPeer::AQUACULTURE;
        }


        return $this;
    } // setAquaculture()

    /**
     * Set the value of [refaquaculture] column.
     *
     * @param  int $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setRefaquaculture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->refaquaculture !== $v) {
            $this->refaquaculture = $v;
            $this->modifiedColumns[] = CountryPeer::REFAQUACULTURE;
        }


        return $this;
    } // setRefaquaculture()

    /**
     * Set the value of [liveexportorg] column.
     *
     * @param  int $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setLiveexportorg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->liveexportorg !== $v) {
            $this->liveexportorg = $v;
            $this->modifiedColumns[] = CountryPeer::LIVEEXPORTORG;
        }


        return $this;
    } // setLiveexportorg()

    /**
     * Set the value of [liveexport] column.
     *
     * @param  string $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setLiveexport($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->liveexport !== $v) {
            $this->liveexport = $v;
            $this->modifiedColumns[] = CountryPeer::LIVEEXPORT;
        }


        return $this;
    } // setLiveexport()

    /**
     * Set the value of [refliveexport] column.
     *
     * @param  int $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setRefliveexport($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->refliveexport !== $v) {
            $this->refliveexport = $v;
            $this->modifiedColumns[] = CountryPeer::REFLIVEEXPORT;
        }


        return $this;
    } // setRefliveexport()

    /**
     * Set the value of [game] column.
     *
     * @param  int $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setGame($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->game !== $v) {
            $this->game = $v;
            $this->modifiedColumns[] = CountryPeer::GAME;
        }


        return $this;
    } // setGame()

    /**
     * Set the value of [bait] column.
     *
     * @param  int $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setBait($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bait !== $v) {
            $this->bait = $v;
            $this->modifiedColumns[] = CountryPeer::BAIT;
        }


        return $this;
    } // setBait()

    /**
     * Set the value of [regulations] column.
     *
     * @param  string $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setRegulations($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->regulations !== $v) {
            $this->regulations = $v;
            $this->modifiedColumns[] = CountryPeer::REGULATIONS;
        }


        return $this;
    } // setRegulations()

    /**
     * Set the value of [refregulations] column.
     *
     * @param  int $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setRefregulations($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->refregulations !== $v) {
            $this->refregulations = $v;
            $this->modifiedColumns[] = CountryPeer::REFREGULATIONS;
        }


        return $this;
    } // setRefregulations()

    /**
     * Set the value of [threatened] column.
     *
     * @param  int $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setThreatened($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->threatened !== $v) {
            $this->threatened = $v;
            $this->modifiedColumns[] = CountryPeer::THREATENED;
        }


        return $this;
    } // setThreatened()

    /**
     * Set the value of [countrysubcomp] column.
     *
     * @param  int $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setCountrysubcomp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->countrysubcomp !== $v) {
            $this->countrysubcomp = $v;
            $this->modifiedColumns[] = CountryPeer::COUNTRYSUBCOMP;
        }


        return $this;
    } // setCountrysubcomp()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = CountryPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Country The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = CountryPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = CountryPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Country The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = CountryPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Country The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = CountryPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Country The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = CountryPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Country The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = CountryPeer::TS;
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
            if ($this->status !== 'native') {
                return false;
            }

            if ($this->freshwater !== 0) {
                return false;
            }

            if ($this->brackish !== 0) {
                return false;
            }

            if ($this->saltwater !== 0) {
                return false;
            }

            if ($this->liveexportorg !== 0) {
                return false;
            }

            if ($this->game !== 0) {
                return false;
            }

            if ($this->bait !== 0) {
                return false;
            }

            if ($this->threatened !== 0) {
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
            $this->c_code = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->speccode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->countryrefno = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->alsoref = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->status = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->currentpresence = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->freshwater = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->brackish = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->saltwater = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->comments = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->abundance = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->refabundance = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->importance = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->refimportance = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->exvesselprice = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->aquaculture = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->refaquaculture = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->liveexportorg = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->liveexport = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->refliveexport = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->game = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->bait = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->regulations = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->refregulations = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->threatened = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->countrysubcomp = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->entered = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->dateentered = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->modified = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->datemodified = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->expert = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->datechecked = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->ts = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 35; // 35 = CountryPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Country object", $e);
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
            $con = Propel::getConnection(CountryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CountryPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CountryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CountryQuery::create()
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
            $con = Propel::getConnection(CountryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CountryPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(CountryPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(CountryPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Stockcode`';
        }
        if ($this->isColumnModified(CountryPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(CountryPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(CountryPeer::COUNTRYREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`CountryRefNo`';
        }
        if ($this->isColumnModified(CountryPeer::ALSOREF)) {
            $modifiedColumns[':p' . $index++]  = '`AlsoRef`';
        }
        if ($this->isColumnModified(CountryPeer::STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`Status`';
        }
        if ($this->isColumnModified(CountryPeer::CURRENTPRESENCE)) {
            $modifiedColumns[':p' . $index++]  = '`CurrentPresence`';
        }
        if ($this->isColumnModified(CountryPeer::FRESHWATER)) {
            $modifiedColumns[':p' . $index++]  = '`Freshwater`';
        }
        if ($this->isColumnModified(CountryPeer::BRACKISH)) {
            $modifiedColumns[':p' . $index++]  = '`Brackish`';
        }
        if ($this->isColumnModified(CountryPeer::SALTWATER)) {
            $modifiedColumns[':p' . $index++]  = '`Saltwater`';
        }
        if ($this->isColumnModified(CountryPeer::COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`Comments`';
        }
        if ($this->isColumnModified(CountryPeer::ABUNDANCE)) {
            $modifiedColumns[':p' . $index++]  = '`Abundance`';
        }
        if ($this->isColumnModified(CountryPeer::REFABUNDANCE)) {
            $modifiedColumns[':p' . $index++]  = '`RefAbundance`';
        }
        if ($this->isColumnModified(CountryPeer::IMPORTANCE)) {
            $modifiedColumns[':p' . $index++]  = '`Importance`';
        }
        if ($this->isColumnModified(CountryPeer::REFIMPORTANCE)) {
            $modifiedColumns[':p' . $index++]  = '`RefImportance`';
        }
        if ($this->isColumnModified(CountryPeer::EXVESSELPRICE)) {
            $modifiedColumns[':p' . $index++]  = '`ExVesselPrice`';
        }
        if ($this->isColumnModified(CountryPeer::AQUACULTURE)) {
            $modifiedColumns[':p' . $index++]  = '`Aquaculture`';
        }
        if ($this->isColumnModified(CountryPeer::REFAQUACULTURE)) {
            $modifiedColumns[':p' . $index++]  = '`RefAquaculture`';
        }
        if ($this->isColumnModified(CountryPeer::LIVEEXPORTORG)) {
            $modifiedColumns[':p' . $index++]  = '`LiveExportOrg`';
        }
        if ($this->isColumnModified(CountryPeer::LIVEEXPORT)) {
            $modifiedColumns[':p' . $index++]  = '`LiveExport`';
        }
        if ($this->isColumnModified(CountryPeer::REFLIVEEXPORT)) {
            $modifiedColumns[':p' . $index++]  = '`RefLiveExport`';
        }
        if ($this->isColumnModified(CountryPeer::GAME)) {
            $modifiedColumns[':p' . $index++]  = '`Game`';
        }
        if ($this->isColumnModified(CountryPeer::BAIT)) {
            $modifiedColumns[':p' . $index++]  = '`Bait`';
        }
        if ($this->isColumnModified(CountryPeer::REGULATIONS)) {
            $modifiedColumns[':p' . $index++]  = '`Regulations`';
        }
        if ($this->isColumnModified(CountryPeer::REFREGULATIONS)) {
            $modifiedColumns[':p' . $index++]  = '`RefRegulations`';
        }
        if ($this->isColumnModified(CountryPeer::THREATENED)) {
            $modifiedColumns[':p' . $index++]  = '`Threatened`';
        }
        if ($this->isColumnModified(CountryPeer::COUNTRYSUBCOMP)) {
            $modifiedColumns[':p' . $index++]  = '`CountrySubComp`';
        }
        if ($this->isColumnModified(CountryPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(CountryPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(CountryPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(CountryPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(CountryPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(CountryPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(CountryPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `country` (%s) VALUES (%s)',
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
                    case '`Stockcode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`CountryRefNo`':
                        $stmt->bindValue($identifier, $this->countryrefno, PDO::PARAM_INT);
                        break;
                    case '`AlsoRef`':
                        $stmt->bindValue($identifier, $this->alsoref, PDO::PARAM_INT);
                        break;
                    case '`Status`':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_STR);
                        break;
                    case '`CurrentPresence`':
                        $stmt->bindValue($identifier, $this->currentpresence, PDO::PARAM_STR);
                        break;
                    case '`Freshwater`':
                        $stmt->bindValue($identifier, $this->freshwater, PDO::PARAM_INT);
                        break;
                    case '`Brackish`':
                        $stmt->bindValue($identifier, $this->brackish, PDO::PARAM_INT);
                        break;
                    case '`Saltwater`':
                        $stmt->bindValue($identifier, $this->saltwater, PDO::PARAM_INT);
                        break;
                    case '`Comments`':
                        $stmt->bindValue($identifier, $this->comments, PDO::PARAM_STR);
                        break;
                    case '`Abundance`':
                        $stmt->bindValue($identifier, $this->abundance, PDO::PARAM_STR);
                        break;
                    case '`RefAbundance`':
                        $stmt->bindValue($identifier, $this->refabundance, PDO::PARAM_INT);
                        break;
                    case '`Importance`':
                        $stmt->bindValue($identifier, $this->importance, PDO::PARAM_STR);
                        break;
                    case '`RefImportance`':
                        $stmt->bindValue($identifier, $this->refimportance, PDO::PARAM_INT);
                        break;
                    case '`ExVesselPrice`':
                        $stmt->bindValue($identifier, $this->exvesselprice, PDO::PARAM_STR);
                        break;
                    case '`Aquaculture`':
                        $stmt->bindValue($identifier, $this->aquaculture, PDO::PARAM_STR);
                        break;
                    case '`RefAquaculture`':
                        $stmt->bindValue($identifier, $this->refaquaculture, PDO::PARAM_INT);
                        break;
                    case '`LiveExportOrg`':
                        $stmt->bindValue($identifier, $this->liveexportorg, PDO::PARAM_INT);
                        break;
                    case '`LiveExport`':
                        $stmt->bindValue($identifier, $this->liveexport, PDO::PARAM_STR);
                        break;
                    case '`RefLiveExport`':
                        $stmt->bindValue($identifier, $this->refliveexport, PDO::PARAM_INT);
                        break;
                    case '`Game`':
                        $stmt->bindValue($identifier, $this->game, PDO::PARAM_INT);
                        break;
                    case '`Bait`':
                        $stmt->bindValue($identifier, $this->bait, PDO::PARAM_INT);
                        break;
                    case '`Regulations`':
                        $stmt->bindValue($identifier, $this->regulations, PDO::PARAM_STR);
                        break;
                    case '`RefRegulations`':
                        $stmt->bindValue($identifier, $this->refregulations, PDO::PARAM_INT);
                        break;
                    case '`Threatened`':
                        $stmt->bindValue($identifier, $this->threatened, PDO::PARAM_INT);
                        break;
                    case '`CountrySubComp`':
                        $stmt->bindValue($identifier, $this->countrysubcomp, PDO::PARAM_INT);
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


            if (($retval = CountryPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CountryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getCCode();
                break;
            case 3:
                return $this->getSpeccode();
                break;
            case 4:
                return $this->getCountryrefno();
                break;
            case 5:
                return $this->getAlsoref();
                break;
            case 6:
                return $this->getStatus();
                break;
            case 7:
                return $this->getCurrentpresence();
                break;
            case 8:
                return $this->getFreshwater();
                break;
            case 9:
                return $this->getBrackish();
                break;
            case 10:
                return $this->getSaltwater();
                break;
            case 11:
                return $this->getComments();
                break;
            case 12:
                return $this->getAbundance();
                break;
            case 13:
                return $this->getRefabundance();
                break;
            case 14:
                return $this->getImportance();
                break;
            case 15:
                return $this->getRefimportance();
                break;
            case 16:
                return $this->getExvesselprice();
                break;
            case 17:
                return $this->getAquaculture();
                break;
            case 18:
                return $this->getRefaquaculture();
                break;
            case 19:
                return $this->getLiveexportorg();
                break;
            case 20:
                return $this->getLiveexport();
                break;
            case 21:
                return $this->getRefliveexport();
                break;
            case 22:
                return $this->getGame();
                break;
            case 23:
                return $this->getBait();
                break;
            case 24:
                return $this->getRegulations();
                break;
            case 25:
                return $this->getRefregulations();
                break;
            case 26:
                return $this->getThreatened();
                break;
            case 27:
                return $this->getCountrysubcomp();
                break;
            case 28:
                return $this->getEntered();
                break;
            case 29:
                return $this->getDateentered();
                break;
            case 30:
                return $this->getModified();
                break;
            case 31:
                return $this->getDatemodified();
                break;
            case 32:
                return $this->getExpert();
                break;
            case 33:
                return $this->getDatechecked();
                break;
            case 34:
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
        if (isset($alreadyDumpedObjects['Country'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Country'][serialize($this->getPrimaryKey())] = true;
        $keys = CountryPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getStockcode(),
            $keys[2] => $this->getCCode(),
            $keys[3] => $this->getSpeccode(),
            $keys[4] => $this->getCountryrefno(),
            $keys[5] => $this->getAlsoref(),
            $keys[6] => $this->getStatus(),
            $keys[7] => $this->getCurrentpresence(),
            $keys[8] => $this->getFreshwater(),
            $keys[9] => $this->getBrackish(),
            $keys[10] => $this->getSaltwater(),
            $keys[11] => $this->getComments(),
            $keys[12] => $this->getAbundance(),
            $keys[13] => $this->getRefabundance(),
            $keys[14] => $this->getImportance(),
            $keys[15] => $this->getRefimportance(),
            $keys[16] => $this->getExvesselprice(),
            $keys[17] => $this->getAquaculture(),
            $keys[18] => $this->getRefaquaculture(),
            $keys[19] => $this->getLiveexportorg(),
            $keys[20] => $this->getLiveexport(),
            $keys[21] => $this->getRefliveexport(),
            $keys[22] => $this->getGame(),
            $keys[23] => $this->getBait(),
            $keys[24] => $this->getRegulations(),
            $keys[25] => $this->getRefregulations(),
            $keys[26] => $this->getThreatened(),
            $keys[27] => $this->getCountrysubcomp(),
            $keys[28] => $this->getEntered(),
            $keys[29] => $this->getDateentered(),
            $keys[30] => $this->getModified(),
            $keys[31] => $this->getDatemodified(),
            $keys[32] => $this->getExpert(),
            $keys[33] => $this->getDatechecked(),
            $keys[34] => $this->getTs(),
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
        $pos = CountryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setCCode($value);
                break;
            case 3:
                $this->setSpeccode($value);
                break;
            case 4:
                $this->setCountryrefno($value);
                break;
            case 5:
                $this->setAlsoref($value);
                break;
            case 6:
                $this->setStatus($value);
                break;
            case 7:
                $this->setCurrentpresence($value);
                break;
            case 8:
                $this->setFreshwater($value);
                break;
            case 9:
                $this->setBrackish($value);
                break;
            case 10:
                $this->setSaltwater($value);
                break;
            case 11:
                $this->setComments($value);
                break;
            case 12:
                $this->setAbundance($value);
                break;
            case 13:
                $this->setRefabundance($value);
                break;
            case 14:
                $this->setImportance($value);
                break;
            case 15:
                $this->setRefimportance($value);
                break;
            case 16:
                $this->setExvesselprice($value);
                break;
            case 17:
                $this->setAquaculture($value);
                break;
            case 18:
                $this->setRefaquaculture($value);
                break;
            case 19:
                $this->setLiveexportorg($value);
                break;
            case 20:
                $this->setLiveexport($value);
                break;
            case 21:
                $this->setRefliveexport($value);
                break;
            case 22:
                $this->setGame($value);
                break;
            case 23:
                $this->setBait($value);
                break;
            case 24:
                $this->setRegulations($value);
                break;
            case 25:
                $this->setRefregulations($value);
                break;
            case 26:
                $this->setThreatened($value);
                break;
            case 27:
                $this->setCountrysubcomp($value);
                break;
            case 28:
                $this->setEntered($value);
                break;
            case 29:
                $this->setDateentered($value);
                break;
            case 30:
                $this->setModified($value);
                break;
            case 31:
                $this->setDatemodified($value);
                break;
            case 32:
                $this->setExpert($value);
                break;
            case 33:
                $this->setDatechecked($value);
                break;
            case 34:
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
        $keys = CountryPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCCode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSpeccode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCountryrefno($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAlsoref($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setStatus($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCurrentpresence($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setFreshwater($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setBrackish($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setSaltwater($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setComments($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setAbundance($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setRefabundance($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setImportance($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setRefimportance($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setExvesselprice($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setAquaculture($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setRefaquaculture($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setLiveexportorg($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setLiveexport($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setRefliveexport($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setGame($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setBait($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setRegulations($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setRefregulations($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setThreatened($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setCountrysubcomp($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setEntered($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setDateentered($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setModified($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setDatemodified($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setExpert($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setDatechecked($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setTs($arr[$keys[34]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CountryPeer::DATABASE_NAME);

        if ($this->isColumnModified(CountryPeer::AUTOCTR)) $criteria->add(CountryPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(CountryPeer::STOCKCODE)) $criteria->add(CountryPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(CountryPeer::C_CODE)) $criteria->add(CountryPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(CountryPeer::SPECCODE)) $criteria->add(CountryPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(CountryPeer::COUNTRYREFNO)) $criteria->add(CountryPeer::COUNTRYREFNO, $this->countryrefno);
        if ($this->isColumnModified(CountryPeer::ALSOREF)) $criteria->add(CountryPeer::ALSOREF, $this->alsoref);
        if ($this->isColumnModified(CountryPeer::STATUS)) $criteria->add(CountryPeer::STATUS, $this->status);
        if ($this->isColumnModified(CountryPeer::CURRENTPRESENCE)) $criteria->add(CountryPeer::CURRENTPRESENCE, $this->currentpresence);
        if ($this->isColumnModified(CountryPeer::FRESHWATER)) $criteria->add(CountryPeer::FRESHWATER, $this->freshwater);
        if ($this->isColumnModified(CountryPeer::BRACKISH)) $criteria->add(CountryPeer::BRACKISH, $this->brackish);
        if ($this->isColumnModified(CountryPeer::SALTWATER)) $criteria->add(CountryPeer::SALTWATER, $this->saltwater);
        if ($this->isColumnModified(CountryPeer::COMMENTS)) $criteria->add(CountryPeer::COMMENTS, $this->comments);
        if ($this->isColumnModified(CountryPeer::ABUNDANCE)) $criteria->add(CountryPeer::ABUNDANCE, $this->abundance);
        if ($this->isColumnModified(CountryPeer::REFABUNDANCE)) $criteria->add(CountryPeer::REFABUNDANCE, $this->refabundance);
        if ($this->isColumnModified(CountryPeer::IMPORTANCE)) $criteria->add(CountryPeer::IMPORTANCE, $this->importance);
        if ($this->isColumnModified(CountryPeer::REFIMPORTANCE)) $criteria->add(CountryPeer::REFIMPORTANCE, $this->refimportance);
        if ($this->isColumnModified(CountryPeer::EXVESSELPRICE)) $criteria->add(CountryPeer::EXVESSELPRICE, $this->exvesselprice);
        if ($this->isColumnModified(CountryPeer::AQUACULTURE)) $criteria->add(CountryPeer::AQUACULTURE, $this->aquaculture);
        if ($this->isColumnModified(CountryPeer::REFAQUACULTURE)) $criteria->add(CountryPeer::REFAQUACULTURE, $this->refaquaculture);
        if ($this->isColumnModified(CountryPeer::LIVEEXPORTORG)) $criteria->add(CountryPeer::LIVEEXPORTORG, $this->liveexportorg);
        if ($this->isColumnModified(CountryPeer::LIVEEXPORT)) $criteria->add(CountryPeer::LIVEEXPORT, $this->liveexport);
        if ($this->isColumnModified(CountryPeer::REFLIVEEXPORT)) $criteria->add(CountryPeer::REFLIVEEXPORT, $this->refliveexport);
        if ($this->isColumnModified(CountryPeer::GAME)) $criteria->add(CountryPeer::GAME, $this->game);
        if ($this->isColumnModified(CountryPeer::BAIT)) $criteria->add(CountryPeer::BAIT, $this->bait);
        if ($this->isColumnModified(CountryPeer::REGULATIONS)) $criteria->add(CountryPeer::REGULATIONS, $this->regulations);
        if ($this->isColumnModified(CountryPeer::REFREGULATIONS)) $criteria->add(CountryPeer::REFREGULATIONS, $this->refregulations);
        if ($this->isColumnModified(CountryPeer::THREATENED)) $criteria->add(CountryPeer::THREATENED, $this->threatened);
        if ($this->isColumnModified(CountryPeer::COUNTRYSUBCOMP)) $criteria->add(CountryPeer::COUNTRYSUBCOMP, $this->countrysubcomp);
        if ($this->isColumnModified(CountryPeer::ENTERED)) $criteria->add(CountryPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(CountryPeer::DATEENTERED)) $criteria->add(CountryPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(CountryPeer::MODIFIED)) $criteria->add(CountryPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(CountryPeer::DATEMODIFIED)) $criteria->add(CountryPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(CountryPeer::EXPERT)) $criteria->add(CountryPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(CountryPeer::DATECHECKED)) $criteria->add(CountryPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(CountryPeer::TS)) $criteria->add(CountryPeer::TS, $this->ts);

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
        $criteria = new Criteria(CountryPeer::DATABASE_NAME);
        $criteria->add(CountryPeer::STOCKCODE, $this->stockcode);
        $criteria->add(CountryPeer::C_CODE, $this->c_code);

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
        $pks[1] = $this->getCCode();

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
        $this->setCCode($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getStockcode()) && (null === $this->getCCode());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Country (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setCountryrefno($this->getCountryrefno());
        $copyObj->setAlsoref($this->getAlsoref());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setCurrentpresence($this->getCurrentpresence());
        $copyObj->setFreshwater($this->getFreshwater());
        $copyObj->setBrackish($this->getBrackish());
        $copyObj->setSaltwater($this->getSaltwater());
        $copyObj->setComments($this->getComments());
        $copyObj->setAbundance($this->getAbundance());
        $copyObj->setRefabundance($this->getRefabundance());
        $copyObj->setImportance($this->getImportance());
        $copyObj->setRefimportance($this->getRefimportance());
        $copyObj->setExvesselprice($this->getExvesselprice());
        $copyObj->setAquaculture($this->getAquaculture());
        $copyObj->setRefaquaculture($this->getRefaquaculture());
        $copyObj->setLiveexportorg($this->getLiveexportorg());
        $copyObj->setLiveexport($this->getLiveexport());
        $copyObj->setRefliveexport($this->getRefliveexport());
        $copyObj->setGame($this->getGame());
        $copyObj->setBait($this->getBait());
        $copyObj->setRegulations($this->getRegulations());
        $copyObj->setRefregulations($this->getRefregulations());
        $copyObj->setThreatened($this->getThreatened());
        $copyObj->setCountrysubcomp($this->getCountrysubcomp());
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
     * @return Country Clone of current object.
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
     * @return CountryPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CountryPeer();
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
        $this->c_code = null;
        $this->speccode = null;
        $this->countryrefno = null;
        $this->alsoref = null;
        $this->status = null;
        $this->currentpresence = null;
        $this->freshwater = null;
        $this->brackish = null;
        $this->saltwater = null;
        $this->comments = null;
        $this->abundance = null;
        $this->refabundance = null;
        $this->importance = null;
        $this->refimportance = null;
        $this->exvesselprice = null;
        $this->aquaculture = null;
        $this->refaquaculture = null;
        $this->liveexportorg = null;
        $this->liveexport = null;
        $this->refliveexport = null;
        $this->game = null;
        $this->bait = null;
        $this->regulations = null;
        $this->refregulations = null;
        $this->threatened = null;
        $this->countrysubcomp = null;
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
        return (string) $this->exportTo(CountryPeer::DEFAULT_STRING_FORMAT);
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
