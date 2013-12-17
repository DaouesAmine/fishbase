<?php


/**
 * Base class that represents a row from the 'intrcase' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseIntrcase extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'IntrcasePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        IntrcasePeer
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
     * The value for the intrcaserefno field.
     * @var        int
     */
    protected $intrcaserefno;

    /**
     * The value for the stockcode field.
     * @var        int
     */
    protected $stockcode;

    /**
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the year field.
     * @var        int
     */
    protected $year;

    /**
     * The value for the rangemin field.
     * @var        int
     */
    protected $rangemin;

    /**
     * The value for the rangemax field.
     * @var        int
     */
    protected $rangemax;

    /**
     * The value for the period field.
     * @var        string
     */
    protected $period;

    /**
     * The value for the periodorder field.
     * @var        string
     */
    protected $periodorder;

    /**
     * The value for the to field.
     * @var        string
     */
    protected $to;

    /**
     * The value for the c_code_to field.
     * @var        string
     */
    protected $c_code_to;

    /**
     * The value for the area_to field.
     * @var        int
     */
    protected $area_to;

    /**
     * The value for the from field.
     * @var        string
     */
    protected $from;

    /**
     * The value for the c_code_from field.
     * @var        string
     */
    protected $c_code_from;

    /**
     * The value for the area_from field.
     * @var        int
     */
    protected $area_from;

    /**
     * The value for the reason field.
     * @var        string
     */
    protected $reason;

    /**
     * The value for the otherreason field.
     * @var        string
     */
    protected $otherreason;

    /**
     * The value for the otherreason2 field.
     * @var        string
     */
    protected $otherreason2;

    /**
     * The value for the reasonorder field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $reasonorder;

    /**
     * The value for the introducer field.
     * @var        string
     */
    protected $introducer;

    /**
     * The value for the estabwild field.
     * @var        string
     */
    protected $estabwild;

    /**
     * The value for the estabtype field.
     * @var        string
     */
    protected $estabtype;

    /**
     * The value for the estabaqua field.
     * @var        int
     */
    protected $estabaqua;

    /**
     * The value for the comaqua field.
     * @var        string
     */
    protected $comaqua;

    /**
     * The value for the repromode field.
     * @var        string
     */
    protected $repromode;

    /**
     * The value for the ecoleff field.
     * @var        string
     */
    protected $ecoleff;

    /**
     * The value for the ecolefftype field.
     * @var        string
     */
    protected $ecolefftype;

    /**
     * The value for the impacts field.
     * @var        string
     */
    protected $impacts;

    /**
     * The value for the socioeff field.
     * @var        string
     */
    protected $socioeff;

    /**
     * The value for the socioefftype field.
     * @var        string
     */
    protected $socioefftype;

    /**
     * The value for the intrsourceref field.
     * @var        int
     */
    protected $intrsourceref;

    /**
     * The value for the recordsource field.
     * @var        string
     */
    protected $recordsource;

    /**
     * The value for the invasive field.
     * @var        int
     */
    protected $invasive;

    /**
     * The value for the invasiveref field.
     * @var        int
     */
    protected $invasiveref;

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
     * The value for the comments field.
     * @var        string
     */
    protected $comments;

    /**
     * The value for the remarks field.
     * @var        string
     */
    protected $remarks;

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
        $this->reasonorder = 0;
    }

    /**
     * Initializes internal state of BaseIntrcase object.
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
     * Get the [intrcaserefno] column value.
     *
     * @return int
     */
    public function getIntrcaserefno()
    {

        return $this->intrcaserefno;
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
     * Get the [year] column value.
     *
     * @return int
     */
    public function getYear()
    {

        return $this->year;
    }

    /**
     * Get the [rangemin] column value.
     *
     * @return int
     */
    public function getRangemin()
    {

        return $this->rangemin;
    }

    /**
     * Get the [rangemax] column value.
     *
     * @return int
     */
    public function getRangemax()
    {

        return $this->rangemax;
    }

    /**
     * Get the [period] column value.
     *
     * @return string
     */
    public function getPeriod()
    {

        return $this->period;
    }

    /**
     * Get the [periodorder] column value.
     *
     * @return string
     */
    public function getPeriodorder()
    {

        return $this->periodorder;
    }

    /**
     * Get the [to] column value.
     *
     * @return string
     */
    public function getTo()
    {

        return $this->to;
    }

    /**
     * Get the [c_code_to] column value.
     *
     * @return string
     */
    public function getCCodeTo()
    {

        return $this->c_code_to;
    }

    /**
     * Get the [area_to] column value.
     *
     * @return int
     */
    public function getAreaTo()
    {

        return $this->area_to;
    }

    /**
     * Get the [from] column value.
     *
     * @return string
     */
    public function getFrom()
    {

        return $this->from;
    }

    /**
     * Get the [c_code_from] column value.
     *
     * @return string
     */
    public function getCCodeFrom()
    {

        return $this->c_code_from;
    }

    /**
     * Get the [area_from] column value.
     *
     * @return int
     */
    public function getAreaFrom()
    {

        return $this->area_from;
    }

    /**
     * Get the [reason] column value.
     *
     * @return string
     */
    public function getReason()
    {

        return $this->reason;
    }

    /**
     * Get the [otherreason] column value.
     *
     * @return string
     */
    public function getOtherreason()
    {

        return $this->otherreason;
    }

    /**
     * Get the [otherreason2] column value.
     *
     * @return string
     */
    public function getOtherreason2()
    {

        return $this->otherreason2;
    }

    /**
     * Get the [reasonorder] column value.
     *
     * @return int
     */
    public function getReasonorder()
    {

        return $this->reasonorder;
    }

    /**
     * Get the [introducer] column value.
     *
     * @return string
     */
    public function getIntroducer()
    {

        return $this->introducer;
    }

    /**
     * Get the [estabwild] column value.
     *
     * @return string
     */
    public function getEstabwild()
    {

        return $this->estabwild;
    }

    /**
     * Get the [estabtype] column value.
     *
     * @return string
     */
    public function getEstabtype()
    {

        return $this->estabtype;
    }

    /**
     * Get the [estabaqua] column value.
     *
     * @return int
     */
    public function getEstabaqua()
    {

        return $this->estabaqua;
    }

    /**
     * Get the [comaqua] column value.
     *
     * @return string
     */
    public function getComaqua()
    {

        return $this->comaqua;
    }

    /**
     * Get the [repromode] column value.
     *
     * @return string
     */
    public function getRepromode()
    {

        return $this->repromode;
    }

    /**
     * Get the [ecoleff] column value.
     *
     * @return string
     */
    public function getEcoleff()
    {

        return $this->ecoleff;
    }

    /**
     * Get the [ecolefftype] column value.
     *
     * @return string
     */
    public function getEcolefftype()
    {

        return $this->ecolefftype;
    }

    /**
     * Get the [impacts] column value.
     *
     * @return string
     */
    public function getImpacts()
    {

        return $this->impacts;
    }

    /**
     * Get the [socioeff] column value.
     *
     * @return string
     */
    public function getSocioeff()
    {

        return $this->socioeff;
    }

    /**
     * Get the [socioefftype] column value.
     *
     * @return string
     */
    public function getSocioefftype()
    {

        return $this->socioefftype;
    }

    /**
     * Get the [intrsourceref] column value.
     *
     * @return int
     */
    public function getIntrsourceref()
    {

        return $this->intrsourceref;
    }

    /**
     * Get the [recordsource] column value.
     *
     * @return string
     */
    public function getRecordsource()
    {

        return $this->recordsource;
    }

    /**
     * Get the [invasive] column value.
     *
     * @return int
     */
    public function getInvasive()
    {

        return $this->invasive;
    }

    /**
     * Get the [invasiveref] column value.
     *
     * @return int
     */
    public function getInvasiveref()
    {

        return $this->invasiveref;
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
     * Get the [comments] column value.
     *
     * @return string
     */
    public function getComments()
    {

        return $this->comments;
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
     * @return Intrcase The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = IntrcasePeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [intrcaserefno] column.
     *
     * @param  int $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setIntrcaserefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->intrcaserefno !== $v) {
            $this->intrcaserefno = $v;
            $this->modifiedColumns[] = IntrcasePeer::INTRCASEREFNO;
        }


        return $this;
    } // setIntrcaserefno()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = IntrcasePeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = IntrcasePeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [year] column.
     *
     * @param  int $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setYear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->year !== $v) {
            $this->year = $v;
            $this->modifiedColumns[] = IntrcasePeer::YEAR;
        }


        return $this;
    } // setYear()

    /**
     * Set the value of [rangemin] column.
     *
     * @param  int $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setRangemin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rangemin !== $v) {
            $this->rangemin = $v;
            $this->modifiedColumns[] = IntrcasePeer::RANGEMIN;
        }


        return $this;
    } // setRangemin()

    /**
     * Set the value of [rangemax] column.
     *
     * @param  int $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setRangemax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rangemax !== $v) {
            $this->rangemax = $v;
            $this->modifiedColumns[] = IntrcasePeer::RANGEMAX;
        }


        return $this;
    } // setRangemax()

    /**
     * Set the value of [period] column.
     *
     * @param  string $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setPeriod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->period !== $v) {
            $this->period = $v;
            $this->modifiedColumns[] = IntrcasePeer::PERIOD;
        }


        return $this;
    } // setPeriod()

    /**
     * Set the value of [periodorder] column.
     *
     * @param  string $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setPeriodorder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->periodorder !== $v) {
            $this->periodorder = $v;
            $this->modifiedColumns[] = IntrcasePeer::PERIODORDER;
        }


        return $this;
    } // setPeriodorder()

    /**
     * Set the value of [to] column.
     *
     * @param  string $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setTo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->to !== $v) {
            $this->to = $v;
            $this->modifiedColumns[] = IntrcasePeer::TO;
        }


        return $this;
    } // setTo()

    /**
     * Set the value of [c_code_to] column.
     *
     * @param  string $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setCCodeTo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code_to !== $v) {
            $this->c_code_to = $v;
            $this->modifiedColumns[] = IntrcasePeer::C_CODE_TO;
        }


        return $this;
    } // setCCodeTo()

    /**
     * Set the value of [area_to] column.
     *
     * @param  int $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setAreaTo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->area_to !== $v) {
            $this->area_to = $v;
            $this->modifiedColumns[] = IntrcasePeer::AREA_TO;
        }


        return $this;
    } // setAreaTo()

    /**
     * Set the value of [from] column.
     *
     * @param  string $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setFrom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->from !== $v) {
            $this->from = $v;
            $this->modifiedColumns[] = IntrcasePeer::FROM;
        }


        return $this;
    } // setFrom()

    /**
     * Set the value of [c_code_from] column.
     *
     * @param  string $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setCCodeFrom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code_from !== $v) {
            $this->c_code_from = $v;
            $this->modifiedColumns[] = IntrcasePeer::C_CODE_FROM;
        }


        return $this;
    } // setCCodeFrom()

    /**
     * Set the value of [area_from] column.
     *
     * @param  int $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setAreaFrom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->area_from !== $v) {
            $this->area_from = $v;
            $this->modifiedColumns[] = IntrcasePeer::AREA_FROM;
        }


        return $this;
    } // setAreaFrom()

    /**
     * Set the value of [reason] column.
     *
     * @param  string $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setReason($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reason !== $v) {
            $this->reason = $v;
            $this->modifiedColumns[] = IntrcasePeer::REASON;
        }


        return $this;
    } // setReason()

    /**
     * Set the value of [otherreason] column.
     *
     * @param  string $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setOtherreason($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->otherreason !== $v) {
            $this->otherreason = $v;
            $this->modifiedColumns[] = IntrcasePeer::OTHERREASON;
        }


        return $this;
    } // setOtherreason()

    /**
     * Set the value of [otherreason2] column.
     *
     * @param  string $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setOtherreason2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->otherreason2 !== $v) {
            $this->otherreason2 = $v;
            $this->modifiedColumns[] = IntrcasePeer::OTHERREASON2;
        }


        return $this;
    } // setOtherreason2()

    /**
     * Set the value of [reasonorder] column.
     *
     * @param  int $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setReasonorder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reasonorder !== $v) {
            $this->reasonorder = $v;
            $this->modifiedColumns[] = IntrcasePeer::REASONORDER;
        }


        return $this;
    } // setReasonorder()

    /**
     * Set the value of [introducer] column.
     *
     * @param  string $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setIntroducer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->introducer !== $v) {
            $this->introducer = $v;
            $this->modifiedColumns[] = IntrcasePeer::INTRODUCER;
        }


        return $this;
    } // setIntroducer()

    /**
     * Set the value of [estabwild] column.
     *
     * @param  string $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setEstabwild($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->estabwild !== $v) {
            $this->estabwild = $v;
            $this->modifiedColumns[] = IntrcasePeer::ESTABWILD;
        }


        return $this;
    } // setEstabwild()

    /**
     * Set the value of [estabtype] column.
     *
     * @param  string $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setEstabtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->estabtype !== $v) {
            $this->estabtype = $v;
            $this->modifiedColumns[] = IntrcasePeer::ESTABTYPE;
        }


        return $this;
    } // setEstabtype()

    /**
     * Set the value of [estabaqua] column.
     *
     * @param  int $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setEstabaqua($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->estabaqua !== $v) {
            $this->estabaqua = $v;
            $this->modifiedColumns[] = IntrcasePeer::ESTABAQUA;
        }


        return $this;
    } // setEstabaqua()

    /**
     * Set the value of [comaqua] column.
     *
     * @param  string $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setComaqua($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comaqua !== $v) {
            $this->comaqua = $v;
            $this->modifiedColumns[] = IntrcasePeer::COMAQUA;
        }


        return $this;
    } // setComaqua()

    /**
     * Set the value of [repromode] column.
     *
     * @param  string $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setRepromode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->repromode !== $v) {
            $this->repromode = $v;
            $this->modifiedColumns[] = IntrcasePeer::REPROMODE;
        }


        return $this;
    } // setRepromode()

    /**
     * Set the value of [ecoleff] column.
     *
     * @param  string $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setEcoleff($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecoleff !== $v) {
            $this->ecoleff = $v;
            $this->modifiedColumns[] = IntrcasePeer::ECOLEFF;
        }


        return $this;
    } // setEcoleff()

    /**
     * Set the value of [ecolefftype] column.
     *
     * @param  string $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setEcolefftype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecolefftype !== $v) {
            $this->ecolefftype = $v;
            $this->modifiedColumns[] = IntrcasePeer::ECOLEFFTYPE;
        }


        return $this;
    } // setEcolefftype()

    /**
     * Set the value of [impacts] column.
     *
     * @param  string $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setImpacts($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->impacts !== $v) {
            $this->impacts = $v;
            $this->modifiedColumns[] = IntrcasePeer::IMPACTS;
        }


        return $this;
    } // setImpacts()

    /**
     * Set the value of [socioeff] column.
     *
     * @param  string $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setSocioeff($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socioeff !== $v) {
            $this->socioeff = $v;
            $this->modifiedColumns[] = IntrcasePeer::SOCIOEFF;
        }


        return $this;
    } // setSocioeff()

    /**
     * Set the value of [socioefftype] column.
     *
     * @param  string $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setSocioefftype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socioefftype !== $v) {
            $this->socioefftype = $v;
            $this->modifiedColumns[] = IntrcasePeer::SOCIOEFFTYPE;
        }


        return $this;
    } // setSocioefftype()

    /**
     * Set the value of [intrsourceref] column.
     *
     * @param  int $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setIntrsourceref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->intrsourceref !== $v) {
            $this->intrsourceref = $v;
            $this->modifiedColumns[] = IntrcasePeer::INTRSOURCEREF;
        }


        return $this;
    } // setIntrsourceref()

    /**
     * Set the value of [recordsource] column.
     *
     * @param  string $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setRecordsource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->recordsource !== $v) {
            $this->recordsource = $v;
            $this->modifiedColumns[] = IntrcasePeer::RECORDSOURCE;
        }


        return $this;
    } // setRecordsource()

    /**
     * Set the value of [invasive] column.
     *
     * @param  int $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setInvasive($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->invasive !== $v) {
            $this->invasive = $v;
            $this->modifiedColumns[] = IntrcasePeer::INVASIVE;
        }


        return $this;
    } // setInvasive()

    /**
     * Set the value of [invasiveref] column.
     *
     * @param  int $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setInvasiveref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->invasiveref !== $v) {
            $this->invasiveref = $v;
            $this->modifiedColumns[] = IntrcasePeer::INVASIVEREF;
        }


        return $this;
    } // setInvasiveref()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = IntrcasePeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Intrcase The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = IntrcasePeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = IntrcasePeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Intrcase The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = IntrcasePeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = IntrcasePeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Intrcase The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = IntrcasePeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [comments] column.
     *
     * @param  string $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setComments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comments !== $v) {
            $this->comments = $v;
            $this->modifiedColumns[] = IntrcasePeer::COMMENTS;
        }


        return $this;
    } // setComments()

    /**
     * Set the value of [remarks] column.
     *
     * @param  string $v new value
     * @return Intrcase The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[] = IntrcasePeer::REMARKS;
        }


        return $this;
    } // setRemarks()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Intrcase The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = IntrcasePeer::TS;
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
            if ($this->reasonorder !== 0) {
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
            $this->intrcaserefno = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->stockcode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->speccode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->year = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->rangemin = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->rangemax = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->period = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->periodorder = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->to = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->c_code_to = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->area_to = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->from = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->c_code_from = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->area_from = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->reason = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->otherreason = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->otherreason2 = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->reasonorder = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->introducer = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->estabwild = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->estabtype = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->estabaqua = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->comaqua = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->repromode = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->ecoleff = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->ecolefftype = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->impacts = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->socioeff = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->socioefftype = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->intrsourceref = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->recordsource = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->invasive = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->invasiveref = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->entered = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->dateentered = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->modified = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->datemodified = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->expert = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->datechecked = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->comments = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->remarks = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->ts = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 43; // 43 = IntrcasePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Intrcase object", $e);
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
            $con = Propel::getConnection(IntrcasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = IntrcasePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(IntrcasePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = IntrcaseQuery::create()
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
            $con = Propel::getConnection(IntrcasePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                IntrcasePeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(IntrcasePeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(IntrcasePeer::INTRCASEREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`IntrCaseRefNo`';
        }
        if ($this->isColumnModified(IntrcasePeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(IntrcasePeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(IntrcasePeer::YEAR)) {
            $modifiedColumns[':p' . $index++]  = '`Year`';
        }
        if ($this->isColumnModified(IntrcasePeer::RANGEMIN)) {
            $modifiedColumns[':p' . $index++]  = '`RangeMin`';
        }
        if ($this->isColumnModified(IntrcasePeer::RANGEMAX)) {
            $modifiedColumns[':p' . $index++]  = '`RangeMax`';
        }
        if ($this->isColumnModified(IntrcasePeer::PERIOD)) {
            $modifiedColumns[':p' . $index++]  = '`Period`';
        }
        if ($this->isColumnModified(IntrcasePeer::PERIODORDER)) {
            $modifiedColumns[':p' . $index++]  = '`PeriodOrder`';
        }
        if ($this->isColumnModified(IntrcasePeer::TO)) {
            $modifiedColumns[':p' . $index++]  = '`TO`';
        }
        if ($this->isColumnModified(IntrcasePeer::C_CODE_TO)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code_To`';
        }
        if ($this->isColumnModified(IntrcasePeer::AREA_TO)) {
            $modifiedColumns[':p' . $index++]  = '`Area_To`';
        }
        if ($this->isColumnModified(IntrcasePeer::FROM)) {
            $modifiedColumns[':p' . $index++]  = '`From`';
        }
        if ($this->isColumnModified(IntrcasePeer::C_CODE_FROM)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code_From`';
        }
        if ($this->isColumnModified(IntrcasePeer::AREA_FROM)) {
            $modifiedColumns[':p' . $index++]  = '`Area_From`';
        }
        if ($this->isColumnModified(IntrcasePeer::REASON)) {
            $modifiedColumns[':p' . $index++]  = '`Reason`';
        }
        if ($this->isColumnModified(IntrcasePeer::OTHERREASON)) {
            $modifiedColumns[':p' . $index++]  = '`OtherReason`';
        }
        if ($this->isColumnModified(IntrcasePeer::OTHERREASON2)) {
            $modifiedColumns[':p' . $index++]  = '`OtherReason2`';
        }
        if ($this->isColumnModified(IntrcasePeer::REASONORDER)) {
            $modifiedColumns[':p' . $index++]  = '`ReasonOrder`';
        }
        if ($this->isColumnModified(IntrcasePeer::INTRODUCER)) {
            $modifiedColumns[':p' . $index++]  = '`Introducer`';
        }
        if ($this->isColumnModified(IntrcasePeer::ESTABWILD)) {
            $modifiedColumns[':p' . $index++]  = '`Estabwild`';
        }
        if ($this->isColumnModified(IntrcasePeer::ESTABTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`EstabType`';
        }
        if ($this->isColumnModified(IntrcasePeer::ESTABAQUA)) {
            $modifiedColumns[':p' . $index++]  = '`EstabAqua`';
        }
        if ($this->isColumnModified(IntrcasePeer::COMAQUA)) {
            $modifiedColumns[':p' . $index++]  = '`ComAqua`';
        }
        if ($this->isColumnModified(IntrcasePeer::REPROMODE)) {
            $modifiedColumns[':p' . $index++]  = '`ReproMode`';
        }
        if ($this->isColumnModified(IntrcasePeer::ECOLEFF)) {
            $modifiedColumns[':p' . $index++]  = '`EcolEff`';
        }
        if ($this->isColumnModified(IntrcasePeer::ECOLEFFTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`EcolEffType`';
        }
        if ($this->isColumnModified(IntrcasePeer::IMPACTS)) {
            $modifiedColumns[':p' . $index++]  = '`Impacts`';
        }
        if ($this->isColumnModified(IntrcasePeer::SOCIOEFF)) {
            $modifiedColumns[':p' . $index++]  = '`SocioEff`';
        }
        if ($this->isColumnModified(IntrcasePeer::SOCIOEFFTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`SocioEffType`';
        }
        if ($this->isColumnModified(IntrcasePeer::INTRSOURCEREF)) {
            $modifiedColumns[':p' . $index++]  = '`IntrSourceRef`';
        }
        if ($this->isColumnModified(IntrcasePeer::RECORDSOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`RecordSource`';
        }
        if ($this->isColumnModified(IntrcasePeer::INVASIVE)) {
            $modifiedColumns[':p' . $index++]  = '`Invasive`';
        }
        if ($this->isColumnModified(IntrcasePeer::INVASIVEREF)) {
            $modifiedColumns[':p' . $index++]  = '`InvasiveRef`';
        }
        if ($this->isColumnModified(IntrcasePeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(IntrcasePeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(IntrcasePeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(IntrcasePeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(IntrcasePeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(IntrcasePeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(IntrcasePeer::COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`Comments`';
        }
        if ($this->isColumnModified(IntrcasePeer::REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`Remarks`';
        }
        if ($this->isColumnModified(IntrcasePeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `intrcase` (%s) VALUES (%s)',
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
                    case '`IntrCaseRefNo`':
                        $stmt->bindValue($identifier, $this->intrcaserefno, PDO::PARAM_INT);
                        break;
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`Year`':
                        $stmt->bindValue($identifier, $this->year, PDO::PARAM_INT);
                        break;
                    case '`RangeMin`':
                        $stmt->bindValue($identifier, $this->rangemin, PDO::PARAM_INT);
                        break;
                    case '`RangeMax`':
                        $stmt->bindValue($identifier, $this->rangemax, PDO::PARAM_INT);
                        break;
                    case '`Period`':
                        $stmt->bindValue($identifier, $this->period, PDO::PARAM_STR);
                        break;
                    case '`PeriodOrder`':
                        $stmt->bindValue($identifier, $this->periodorder, PDO::PARAM_STR);
                        break;
                    case '`TO`':
                        $stmt->bindValue($identifier, $this->to, PDO::PARAM_STR);
                        break;
                    case '`C_Code_To`':
                        $stmt->bindValue($identifier, $this->c_code_to, PDO::PARAM_STR);
                        break;
                    case '`Area_To`':
                        $stmt->bindValue($identifier, $this->area_to, PDO::PARAM_INT);
                        break;
                    case '`From`':
                        $stmt->bindValue($identifier, $this->from, PDO::PARAM_STR);
                        break;
                    case '`C_Code_From`':
                        $stmt->bindValue($identifier, $this->c_code_from, PDO::PARAM_STR);
                        break;
                    case '`Area_From`':
                        $stmt->bindValue($identifier, $this->area_from, PDO::PARAM_INT);
                        break;
                    case '`Reason`':
                        $stmt->bindValue($identifier, $this->reason, PDO::PARAM_STR);
                        break;
                    case '`OtherReason`':
                        $stmt->bindValue($identifier, $this->otherreason, PDO::PARAM_STR);
                        break;
                    case '`OtherReason2`':
                        $stmt->bindValue($identifier, $this->otherreason2, PDO::PARAM_STR);
                        break;
                    case '`ReasonOrder`':
                        $stmt->bindValue($identifier, $this->reasonorder, PDO::PARAM_INT);
                        break;
                    case '`Introducer`':
                        $stmt->bindValue($identifier, $this->introducer, PDO::PARAM_STR);
                        break;
                    case '`Estabwild`':
                        $stmt->bindValue($identifier, $this->estabwild, PDO::PARAM_STR);
                        break;
                    case '`EstabType`':
                        $stmt->bindValue($identifier, $this->estabtype, PDO::PARAM_STR);
                        break;
                    case '`EstabAqua`':
                        $stmt->bindValue($identifier, $this->estabaqua, PDO::PARAM_INT);
                        break;
                    case '`ComAqua`':
                        $stmt->bindValue($identifier, $this->comaqua, PDO::PARAM_STR);
                        break;
                    case '`ReproMode`':
                        $stmt->bindValue($identifier, $this->repromode, PDO::PARAM_STR);
                        break;
                    case '`EcolEff`':
                        $stmt->bindValue($identifier, $this->ecoleff, PDO::PARAM_STR);
                        break;
                    case '`EcolEffType`':
                        $stmt->bindValue($identifier, $this->ecolefftype, PDO::PARAM_STR);
                        break;
                    case '`Impacts`':
                        $stmt->bindValue($identifier, $this->impacts, PDO::PARAM_STR);
                        break;
                    case '`SocioEff`':
                        $stmt->bindValue($identifier, $this->socioeff, PDO::PARAM_STR);
                        break;
                    case '`SocioEffType`':
                        $stmt->bindValue($identifier, $this->socioefftype, PDO::PARAM_STR);
                        break;
                    case '`IntrSourceRef`':
                        $stmt->bindValue($identifier, $this->intrsourceref, PDO::PARAM_INT);
                        break;
                    case '`RecordSource`':
                        $stmt->bindValue($identifier, $this->recordsource, PDO::PARAM_STR);
                        break;
                    case '`Invasive`':
                        $stmt->bindValue($identifier, $this->invasive, PDO::PARAM_INT);
                        break;
                    case '`InvasiveRef`':
                        $stmt->bindValue($identifier, $this->invasiveref, PDO::PARAM_INT);
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
                    case '`Comments`':
                        $stmt->bindValue($identifier, $this->comments, PDO::PARAM_STR);
                        break;
                    case '`Remarks`':
                        $stmt->bindValue($identifier, $this->remarks, PDO::PARAM_STR);
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


            if (($retval = IntrcasePeer::doValidate($this, $columns)) !== true) {
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
        $pos = IntrcasePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIntrcaserefno();
                break;
            case 2:
                return $this->getStockcode();
                break;
            case 3:
                return $this->getSpeccode();
                break;
            case 4:
                return $this->getYear();
                break;
            case 5:
                return $this->getRangemin();
                break;
            case 6:
                return $this->getRangemax();
                break;
            case 7:
                return $this->getPeriod();
                break;
            case 8:
                return $this->getPeriodorder();
                break;
            case 9:
                return $this->getTo();
                break;
            case 10:
                return $this->getCCodeTo();
                break;
            case 11:
                return $this->getAreaTo();
                break;
            case 12:
                return $this->getFrom();
                break;
            case 13:
                return $this->getCCodeFrom();
                break;
            case 14:
                return $this->getAreaFrom();
                break;
            case 15:
                return $this->getReason();
                break;
            case 16:
                return $this->getOtherreason();
                break;
            case 17:
                return $this->getOtherreason2();
                break;
            case 18:
                return $this->getReasonorder();
                break;
            case 19:
                return $this->getIntroducer();
                break;
            case 20:
                return $this->getEstabwild();
                break;
            case 21:
                return $this->getEstabtype();
                break;
            case 22:
                return $this->getEstabaqua();
                break;
            case 23:
                return $this->getComaqua();
                break;
            case 24:
                return $this->getRepromode();
                break;
            case 25:
                return $this->getEcoleff();
                break;
            case 26:
                return $this->getEcolefftype();
                break;
            case 27:
                return $this->getImpacts();
                break;
            case 28:
                return $this->getSocioeff();
                break;
            case 29:
                return $this->getSocioefftype();
                break;
            case 30:
                return $this->getIntrsourceref();
                break;
            case 31:
                return $this->getRecordsource();
                break;
            case 32:
                return $this->getInvasive();
                break;
            case 33:
                return $this->getInvasiveref();
                break;
            case 34:
                return $this->getEntered();
                break;
            case 35:
                return $this->getDateentered();
                break;
            case 36:
                return $this->getModified();
                break;
            case 37:
                return $this->getDatemodified();
                break;
            case 38:
                return $this->getExpert();
                break;
            case 39:
                return $this->getDatechecked();
                break;
            case 40:
                return $this->getComments();
                break;
            case 41:
                return $this->getRemarks();
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
        if (isset($alreadyDumpedObjects['Intrcase'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Intrcase'][serialize($this->getPrimaryKey())] = true;
        $keys = IntrcasePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getIntrcaserefno(),
            $keys[2] => $this->getStockcode(),
            $keys[3] => $this->getSpeccode(),
            $keys[4] => $this->getYear(),
            $keys[5] => $this->getRangemin(),
            $keys[6] => $this->getRangemax(),
            $keys[7] => $this->getPeriod(),
            $keys[8] => $this->getPeriodorder(),
            $keys[9] => $this->getTo(),
            $keys[10] => $this->getCCodeTo(),
            $keys[11] => $this->getAreaTo(),
            $keys[12] => $this->getFrom(),
            $keys[13] => $this->getCCodeFrom(),
            $keys[14] => $this->getAreaFrom(),
            $keys[15] => $this->getReason(),
            $keys[16] => $this->getOtherreason(),
            $keys[17] => $this->getOtherreason2(),
            $keys[18] => $this->getReasonorder(),
            $keys[19] => $this->getIntroducer(),
            $keys[20] => $this->getEstabwild(),
            $keys[21] => $this->getEstabtype(),
            $keys[22] => $this->getEstabaqua(),
            $keys[23] => $this->getComaqua(),
            $keys[24] => $this->getRepromode(),
            $keys[25] => $this->getEcoleff(),
            $keys[26] => $this->getEcolefftype(),
            $keys[27] => $this->getImpacts(),
            $keys[28] => $this->getSocioeff(),
            $keys[29] => $this->getSocioefftype(),
            $keys[30] => $this->getIntrsourceref(),
            $keys[31] => $this->getRecordsource(),
            $keys[32] => $this->getInvasive(),
            $keys[33] => $this->getInvasiveref(),
            $keys[34] => $this->getEntered(),
            $keys[35] => $this->getDateentered(),
            $keys[36] => $this->getModified(),
            $keys[37] => $this->getDatemodified(),
            $keys[38] => $this->getExpert(),
            $keys[39] => $this->getDatechecked(),
            $keys[40] => $this->getComments(),
            $keys[41] => $this->getRemarks(),
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
        $pos = IntrcasePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIntrcaserefno($value);
                break;
            case 2:
                $this->setStockcode($value);
                break;
            case 3:
                $this->setSpeccode($value);
                break;
            case 4:
                $this->setYear($value);
                break;
            case 5:
                $this->setRangemin($value);
                break;
            case 6:
                $this->setRangemax($value);
                break;
            case 7:
                $this->setPeriod($value);
                break;
            case 8:
                $this->setPeriodorder($value);
                break;
            case 9:
                $this->setTo($value);
                break;
            case 10:
                $this->setCCodeTo($value);
                break;
            case 11:
                $this->setAreaTo($value);
                break;
            case 12:
                $this->setFrom($value);
                break;
            case 13:
                $this->setCCodeFrom($value);
                break;
            case 14:
                $this->setAreaFrom($value);
                break;
            case 15:
                $this->setReason($value);
                break;
            case 16:
                $this->setOtherreason($value);
                break;
            case 17:
                $this->setOtherreason2($value);
                break;
            case 18:
                $this->setReasonorder($value);
                break;
            case 19:
                $this->setIntroducer($value);
                break;
            case 20:
                $this->setEstabwild($value);
                break;
            case 21:
                $this->setEstabtype($value);
                break;
            case 22:
                $this->setEstabaqua($value);
                break;
            case 23:
                $this->setComaqua($value);
                break;
            case 24:
                $this->setRepromode($value);
                break;
            case 25:
                $this->setEcoleff($value);
                break;
            case 26:
                $this->setEcolefftype($value);
                break;
            case 27:
                $this->setImpacts($value);
                break;
            case 28:
                $this->setSocioeff($value);
                break;
            case 29:
                $this->setSocioefftype($value);
                break;
            case 30:
                $this->setIntrsourceref($value);
                break;
            case 31:
                $this->setRecordsource($value);
                break;
            case 32:
                $this->setInvasive($value);
                break;
            case 33:
                $this->setInvasiveref($value);
                break;
            case 34:
                $this->setEntered($value);
                break;
            case 35:
                $this->setDateentered($value);
                break;
            case 36:
                $this->setModified($value);
                break;
            case 37:
                $this->setDatemodified($value);
                break;
            case 38:
                $this->setExpert($value);
                break;
            case 39:
                $this->setDatechecked($value);
                break;
            case 40:
                $this->setComments($value);
                break;
            case 41:
                $this->setRemarks($value);
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
        $keys = IntrcasePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIntrcaserefno($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setStockcode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSpeccode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setYear($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setRangemin($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setRangemax($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPeriod($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPeriodorder($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTo($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCCodeTo($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAreaTo($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setFrom($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setCCodeFrom($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setAreaFrom($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setReason($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setOtherreason($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setOtherreason2($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setReasonorder($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setIntroducer($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setEstabwild($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setEstabtype($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setEstabaqua($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setComaqua($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setRepromode($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setEcoleff($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setEcolefftype($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setImpacts($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setSocioeff($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setSocioefftype($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setIntrsourceref($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setRecordsource($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setInvasive($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setInvasiveref($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setEntered($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setDateentered($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setModified($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setDatemodified($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setExpert($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setDatechecked($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setComments($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setRemarks($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setTs($arr[$keys[42]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(IntrcasePeer::DATABASE_NAME);

        if ($this->isColumnModified(IntrcasePeer::AUTOCTR)) $criteria->add(IntrcasePeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(IntrcasePeer::INTRCASEREFNO)) $criteria->add(IntrcasePeer::INTRCASEREFNO, $this->intrcaserefno);
        if ($this->isColumnModified(IntrcasePeer::STOCKCODE)) $criteria->add(IntrcasePeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(IntrcasePeer::SPECCODE)) $criteria->add(IntrcasePeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(IntrcasePeer::YEAR)) $criteria->add(IntrcasePeer::YEAR, $this->year);
        if ($this->isColumnModified(IntrcasePeer::RANGEMIN)) $criteria->add(IntrcasePeer::RANGEMIN, $this->rangemin);
        if ($this->isColumnModified(IntrcasePeer::RANGEMAX)) $criteria->add(IntrcasePeer::RANGEMAX, $this->rangemax);
        if ($this->isColumnModified(IntrcasePeer::PERIOD)) $criteria->add(IntrcasePeer::PERIOD, $this->period);
        if ($this->isColumnModified(IntrcasePeer::PERIODORDER)) $criteria->add(IntrcasePeer::PERIODORDER, $this->periodorder);
        if ($this->isColumnModified(IntrcasePeer::TO)) $criteria->add(IntrcasePeer::TO, $this->to);
        if ($this->isColumnModified(IntrcasePeer::C_CODE_TO)) $criteria->add(IntrcasePeer::C_CODE_TO, $this->c_code_to);
        if ($this->isColumnModified(IntrcasePeer::AREA_TO)) $criteria->add(IntrcasePeer::AREA_TO, $this->area_to);
        if ($this->isColumnModified(IntrcasePeer::FROM)) $criteria->add(IntrcasePeer::FROM, $this->from);
        if ($this->isColumnModified(IntrcasePeer::C_CODE_FROM)) $criteria->add(IntrcasePeer::C_CODE_FROM, $this->c_code_from);
        if ($this->isColumnModified(IntrcasePeer::AREA_FROM)) $criteria->add(IntrcasePeer::AREA_FROM, $this->area_from);
        if ($this->isColumnModified(IntrcasePeer::REASON)) $criteria->add(IntrcasePeer::REASON, $this->reason);
        if ($this->isColumnModified(IntrcasePeer::OTHERREASON)) $criteria->add(IntrcasePeer::OTHERREASON, $this->otherreason);
        if ($this->isColumnModified(IntrcasePeer::OTHERREASON2)) $criteria->add(IntrcasePeer::OTHERREASON2, $this->otherreason2);
        if ($this->isColumnModified(IntrcasePeer::REASONORDER)) $criteria->add(IntrcasePeer::REASONORDER, $this->reasonorder);
        if ($this->isColumnModified(IntrcasePeer::INTRODUCER)) $criteria->add(IntrcasePeer::INTRODUCER, $this->introducer);
        if ($this->isColumnModified(IntrcasePeer::ESTABWILD)) $criteria->add(IntrcasePeer::ESTABWILD, $this->estabwild);
        if ($this->isColumnModified(IntrcasePeer::ESTABTYPE)) $criteria->add(IntrcasePeer::ESTABTYPE, $this->estabtype);
        if ($this->isColumnModified(IntrcasePeer::ESTABAQUA)) $criteria->add(IntrcasePeer::ESTABAQUA, $this->estabaqua);
        if ($this->isColumnModified(IntrcasePeer::COMAQUA)) $criteria->add(IntrcasePeer::COMAQUA, $this->comaqua);
        if ($this->isColumnModified(IntrcasePeer::REPROMODE)) $criteria->add(IntrcasePeer::REPROMODE, $this->repromode);
        if ($this->isColumnModified(IntrcasePeer::ECOLEFF)) $criteria->add(IntrcasePeer::ECOLEFF, $this->ecoleff);
        if ($this->isColumnModified(IntrcasePeer::ECOLEFFTYPE)) $criteria->add(IntrcasePeer::ECOLEFFTYPE, $this->ecolefftype);
        if ($this->isColumnModified(IntrcasePeer::IMPACTS)) $criteria->add(IntrcasePeer::IMPACTS, $this->impacts);
        if ($this->isColumnModified(IntrcasePeer::SOCIOEFF)) $criteria->add(IntrcasePeer::SOCIOEFF, $this->socioeff);
        if ($this->isColumnModified(IntrcasePeer::SOCIOEFFTYPE)) $criteria->add(IntrcasePeer::SOCIOEFFTYPE, $this->socioefftype);
        if ($this->isColumnModified(IntrcasePeer::INTRSOURCEREF)) $criteria->add(IntrcasePeer::INTRSOURCEREF, $this->intrsourceref);
        if ($this->isColumnModified(IntrcasePeer::RECORDSOURCE)) $criteria->add(IntrcasePeer::RECORDSOURCE, $this->recordsource);
        if ($this->isColumnModified(IntrcasePeer::INVASIVE)) $criteria->add(IntrcasePeer::INVASIVE, $this->invasive);
        if ($this->isColumnModified(IntrcasePeer::INVASIVEREF)) $criteria->add(IntrcasePeer::INVASIVEREF, $this->invasiveref);
        if ($this->isColumnModified(IntrcasePeer::ENTERED)) $criteria->add(IntrcasePeer::ENTERED, $this->entered);
        if ($this->isColumnModified(IntrcasePeer::DATEENTERED)) $criteria->add(IntrcasePeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(IntrcasePeer::MODIFIED)) $criteria->add(IntrcasePeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(IntrcasePeer::DATEMODIFIED)) $criteria->add(IntrcasePeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(IntrcasePeer::EXPERT)) $criteria->add(IntrcasePeer::EXPERT, $this->expert);
        if ($this->isColumnModified(IntrcasePeer::DATECHECKED)) $criteria->add(IntrcasePeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(IntrcasePeer::COMMENTS)) $criteria->add(IntrcasePeer::COMMENTS, $this->comments);
        if ($this->isColumnModified(IntrcasePeer::REMARKS)) $criteria->add(IntrcasePeer::REMARKS, $this->remarks);
        if ($this->isColumnModified(IntrcasePeer::TS)) $criteria->add(IntrcasePeer::TS, $this->ts);

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
        $criteria = new Criteria(IntrcasePeer::DATABASE_NAME);
        $criteria->add(IntrcasePeer::STOCKCODE, $this->stockcode);
        $criteria->add(IntrcasePeer::PERIOD, $this->period);
        $criteria->add(IntrcasePeer::C_CODE_TO, $this->c_code_to);
        $criteria->add(IntrcasePeer::FROM, $this->from);

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
        $pks[1] = $this->getPeriod();
        $pks[2] = $this->getCCodeTo();
        $pks[3] = $this->getFrom();

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
        $this->setPeriod($keys[1]);
        $this->setCCodeTo($keys[2]);
        $this->setFrom($keys[3]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getStockcode()) && (null === $this->getPeriod()) && (null === $this->getCCodeTo()) && (null === $this->getFrom());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Intrcase (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIntrcaserefno($this->getIntrcaserefno());
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setYear($this->getYear());
        $copyObj->setRangemin($this->getRangemin());
        $copyObj->setRangemax($this->getRangemax());
        $copyObj->setPeriod($this->getPeriod());
        $copyObj->setPeriodorder($this->getPeriodorder());
        $copyObj->setTo($this->getTo());
        $copyObj->setCCodeTo($this->getCCodeTo());
        $copyObj->setAreaTo($this->getAreaTo());
        $copyObj->setFrom($this->getFrom());
        $copyObj->setCCodeFrom($this->getCCodeFrom());
        $copyObj->setAreaFrom($this->getAreaFrom());
        $copyObj->setReason($this->getReason());
        $copyObj->setOtherreason($this->getOtherreason());
        $copyObj->setOtherreason2($this->getOtherreason2());
        $copyObj->setReasonorder($this->getReasonorder());
        $copyObj->setIntroducer($this->getIntroducer());
        $copyObj->setEstabwild($this->getEstabwild());
        $copyObj->setEstabtype($this->getEstabtype());
        $copyObj->setEstabaqua($this->getEstabaqua());
        $copyObj->setComaqua($this->getComaqua());
        $copyObj->setRepromode($this->getRepromode());
        $copyObj->setEcoleff($this->getEcoleff());
        $copyObj->setEcolefftype($this->getEcolefftype());
        $copyObj->setImpacts($this->getImpacts());
        $copyObj->setSocioeff($this->getSocioeff());
        $copyObj->setSocioefftype($this->getSocioefftype());
        $copyObj->setIntrsourceref($this->getIntrsourceref());
        $copyObj->setRecordsource($this->getRecordsource());
        $copyObj->setInvasive($this->getInvasive());
        $copyObj->setInvasiveref($this->getInvasiveref());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setComments($this->getComments());
        $copyObj->setRemarks($this->getRemarks());
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
     * @return Intrcase Clone of current object.
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
     * @return IntrcasePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new IntrcasePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->intrcaserefno = null;
        $this->stockcode = null;
        $this->speccode = null;
        $this->year = null;
        $this->rangemin = null;
        $this->rangemax = null;
        $this->period = null;
        $this->periodorder = null;
        $this->to = null;
        $this->c_code_to = null;
        $this->area_to = null;
        $this->from = null;
        $this->c_code_from = null;
        $this->area_from = null;
        $this->reason = null;
        $this->otherreason = null;
        $this->otherreason2 = null;
        $this->reasonorder = null;
        $this->introducer = null;
        $this->estabwild = null;
        $this->estabtype = null;
        $this->estabaqua = null;
        $this->comaqua = null;
        $this->repromode = null;
        $this->ecoleff = null;
        $this->ecolefftype = null;
        $this->impacts = null;
        $this->socioeff = null;
        $this->socioefftype = null;
        $this->intrsourceref = null;
        $this->recordsource = null;
        $this->invasive = null;
        $this->invasiveref = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->comments = null;
        $this->remarks = null;
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
        return (string) $this->exportTo(IntrcasePeer::DEFAULT_STRING_FORMAT);
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
