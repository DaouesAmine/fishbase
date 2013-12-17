<?php


/**
 * Base class that represents a row from the 'speed' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseSpeed extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SpeedPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SpeedPeer
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
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the speedrefno field.
     * @var        int
     */
    protected $speedrefno;

    /**
     * The value for the length field.
     * @var        double
     */
    protected $length;

    /**
     * The value for the lengthtype field.
     * @var        string
     */
    protected $lengthtype;

    /**
     * The value for the speedls field.
     * @var        double
     */
    protected $speedls;

    /**
     * The value for the lengthtypespeed field.
     * @var        string
     */
    protected $lengthtypespeed;

    /**
     * The value for the speedms field.
     * @var        double
     */
    protected $speedms;

    /**
     * The value for the mode field.
     * @var        string
     */
    protected $mode;

    /**
     * The value for the dataref field.
     * @var        int
     */
    protected $dataref;

    /**
     * The value for the reliable field.
     * @var        string
     */
    protected $reliable;

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
     * @var        int
     */
    protected $expert;

    /**
     * The value for the datechecked field.
     * @var        string
     */
    protected $datechecked;

    /**
     * The value for the sla field.
     * @var        double
     */
    protected $sla;

    /**
     * The value for the slb field.
     * @var        double
     */
    protected $slb;

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
     * Get the [speedrefno] column value.
     *
     * @return int
     */
    public function getSpeedrefno()
    {

        return $this->speedrefno;
    }

    /**
     * Get the [length] column value.
     *
     * @return double
     */
    public function getLength()
    {

        return $this->length;
    }

    /**
     * Get the [lengthtype] column value.
     *
     * @return string
     */
    public function getLengthtype()
    {

        return $this->lengthtype;
    }

    /**
     * Get the [speedls] column value.
     *
     * @return double
     */
    public function getSpeedls()
    {

        return $this->speedls;
    }

    /**
     * Get the [lengthtypespeed] column value.
     *
     * @return string
     */
    public function getLengthtypespeed()
    {

        return $this->lengthtypespeed;
    }

    /**
     * Get the [speedms] column value.
     *
     * @return double
     */
    public function getSpeedms()
    {

        return $this->speedms;
    }

    /**
     * Get the [mode] column value.
     *
     * @return string
     */
    public function getMode()
    {

        return $this->mode;
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
     * Get the [reliable] column value.
     *
     * @return string
     */
    public function getReliable()
    {

        return $this->reliable;
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
     * Get the [sla] column value.
     *
     * @return double
     */
    public function getSla()
    {

        return $this->sla;
    }

    /**
     * Get the [slb] column value.
     *
     * @return double
     */
    public function getSlb()
    {

        return $this->slb;
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
     * @return Speed The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = SpeedPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Speed The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = SpeedPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Speed The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = SpeedPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [speedrefno] column.
     *
     * @param  int $v new value
     * @return Speed The current object (for fluent API support)
     */
    public function setSpeedrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speedrefno !== $v) {
            $this->speedrefno = $v;
            $this->modifiedColumns[] = SpeedPeer::SPEEDREFNO;
        }


        return $this;
    } // setSpeedrefno()

    /**
     * Set the value of [length] column.
     *
     * @param  double $v new value
     * @return Speed The current object (for fluent API support)
     */
    public function setLength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->length !== $v) {
            $this->length = $v;
            $this->modifiedColumns[] = SpeedPeer::LENGTH;
        }


        return $this;
    } // setLength()

    /**
     * Set the value of [lengthtype] column.
     *
     * @param  string $v new value
     * @return Speed The current object (for fluent API support)
     */
    public function setLengthtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lengthtype !== $v) {
            $this->lengthtype = $v;
            $this->modifiedColumns[] = SpeedPeer::LENGTHTYPE;
        }


        return $this;
    } // setLengthtype()

    /**
     * Set the value of [speedls] column.
     *
     * @param  double $v new value
     * @return Speed The current object (for fluent API support)
     */
    public function setSpeedls($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->speedls !== $v) {
            $this->speedls = $v;
            $this->modifiedColumns[] = SpeedPeer::SPEEDLS;
        }


        return $this;
    } // setSpeedls()

    /**
     * Set the value of [lengthtypespeed] column.
     *
     * @param  string $v new value
     * @return Speed The current object (for fluent API support)
     */
    public function setLengthtypespeed($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lengthtypespeed !== $v) {
            $this->lengthtypespeed = $v;
            $this->modifiedColumns[] = SpeedPeer::LENGTHTYPESPEED;
        }


        return $this;
    } // setLengthtypespeed()

    /**
     * Set the value of [speedms] column.
     *
     * @param  double $v new value
     * @return Speed The current object (for fluent API support)
     */
    public function setSpeedms($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->speedms !== $v) {
            $this->speedms = $v;
            $this->modifiedColumns[] = SpeedPeer::SPEEDMS;
        }


        return $this;
    } // setSpeedms()

    /**
     * Set the value of [mode] column.
     *
     * @param  string $v new value
     * @return Speed The current object (for fluent API support)
     */
    public function setMode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mode !== $v) {
            $this->mode = $v;
            $this->modifiedColumns[] = SpeedPeer::MODE;
        }


        return $this;
    } // setMode()

    /**
     * Set the value of [dataref] column.
     *
     * @param  int $v new value
     * @return Speed The current object (for fluent API support)
     */
    public function setDataref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dataref !== $v) {
            $this->dataref = $v;
            $this->modifiedColumns[] = SpeedPeer::DATAREF;
        }


        return $this;
    } // setDataref()

    /**
     * Set the value of [reliable] column.
     *
     * @param  string $v new value
     * @return Speed The current object (for fluent API support)
     */
    public function setReliable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reliable !== $v) {
            $this->reliable = $v;
            $this->modifiedColumns[] = SpeedPeer::RELIABLE;
        }


        return $this;
    } // setReliable()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return Speed The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = SpeedPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Speed The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = SpeedPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Speed The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = SpeedPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Speed The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = SpeedPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Speed The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = SpeedPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Speed The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = SpeedPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Speed The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = SpeedPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [sla] column.
     *
     * @param  double $v new value
     * @return Speed The current object (for fluent API support)
     */
    public function setSla($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sla !== $v) {
            $this->sla = $v;
            $this->modifiedColumns[] = SpeedPeer::SLA;
        }


        return $this;
    } // setSla()

    /**
     * Set the value of [slb] column.
     *
     * @param  double $v new value
     * @return Speed The current object (for fluent API support)
     */
    public function setSlb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->slb !== $v) {
            $this->slb = $v;
            $this->modifiedColumns[] = SpeedPeer::SLB;
        }


        return $this;
    } // setSlb()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Speed The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = SpeedPeer::TS;
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
            $this->stockcode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->speccode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->speedrefno = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->length = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
            $this->lengthtype = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->speedls = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->lengthtypespeed = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->speedms = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->mode = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->dataref = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->reliable = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->comment = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->entered = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->dateentered = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->modified = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->datemodified = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->expert = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->datechecked = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->sla = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->slb = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->ts = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 22; // 22 = SpeedPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Speed object", $e);
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
            $con = Propel::getConnection(SpeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SpeedPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(SpeedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SpeedQuery::create()
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
            $con = Propel::getConnection(SpeedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                SpeedPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = SpeedPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpeedPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpeedPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(SpeedPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(SpeedPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(SpeedPeer::SPEEDREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`SpeedRefNo`';
        }
        if ($this->isColumnModified(SpeedPeer::LENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`Length`';
        }
        if ($this->isColumnModified(SpeedPeer::LENGTHTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`LengthType`';
        }
        if ($this->isColumnModified(SpeedPeer::SPEEDLS)) {
            $modifiedColumns[':p' . $index++]  = '`SpeedLS`';
        }
        if ($this->isColumnModified(SpeedPeer::LENGTHTYPESPEED)) {
            $modifiedColumns[':p' . $index++]  = '`LengthTypeSpeed`';
        }
        if ($this->isColumnModified(SpeedPeer::SPEEDMS)) {
            $modifiedColumns[':p' . $index++]  = '`Speedms`';
        }
        if ($this->isColumnModified(SpeedPeer::MODE)) {
            $modifiedColumns[':p' . $index++]  = '`Mode`';
        }
        if ($this->isColumnModified(SpeedPeer::DATAREF)) {
            $modifiedColumns[':p' . $index++]  = '`DataRef`';
        }
        if ($this->isColumnModified(SpeedPeer::RELIABLE)) {
            $modifiedColumns[':p' . $index++]  = '`Reliable`';
        }
        if ($this->isColumnModified(SpeedPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Comment`';
        }
        if ($this->isColumnModified(SpeedPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(SpeedPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(SpeedPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(SpeedPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(SpeedPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(SpeedPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(SpeedPeer::SLA)) {
            $modifiedColumns[':p' . $index++]  = '`SLa`';
        }
        if ($this->isColumnModified(SpeedPeer::SLB)) {
            $modifiedColumns[':p' . $index++]  = '`SLb`';
        }
        if ($this->isColumnModified(SpeedPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `speed` (%s) VALUES (%s)',
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
                    case '`SpeedRefNo`':
                        $stmt->bindValue($identifier, $this->speedrefno, PDO::PARAM_INT);
                        break;
                    case '`Length`':
                        $stmt->bindValue($identifier, $this->length, PDO::PARAM_STR);
                        break;
                    case '`LengthType`':
                        $stmt->bindValue($identifier, $this->lengthtype, PDO::PARAM_STR);
                        break;
                    case '`SpeedLS`':
                        $stmt->bindValue($identifier, $this->speedls, PDO::PARAM_STR);
                        break;
                    case '`LengthTypeSpeed`':
                        $stmt->bindValue($identifier, $this->lengthtypespeed, PDO::PARAM_STR);
                        break;
                    case '`Speedms`':
                        $stmt->bindValue($identifier, $this->speedms, PDO::PARAM_STR);
                        break;
                    case '`Mode`':
                        $stmt->bindValue($identifier, $this->mode, PDO::PARAM_STR);
                        break;
                    case '`DataRef`':
                        $stmt->bindValue($identifier, $this->dataref, PDO::PARAM_INT);
                        break;
                    case '`Reliable`':
                        $stmt->bindValue($identifier, $this->reliable, PDO::PARAM_STR);
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
                        $stmt->bindValue($identifier, $this->expert, PDO::PARAM_INT);
                        break;
                    case '`DateChecked`':
                        $stmt->bindValue($identifier, $this->datechecked, PDO::PARAM_STR);
                        break;
                    case '`SLa`':
                        $stmt->bindValue($identifier, $this->sla, PDO::PARAM_STR);
                        break;
                    case '`SLb`':
                        $stmt->bindValue($identifier, $this->slb, PDO::PARAM_STR);
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


            if (($retval = SpeedPeer::doValidate($this, $columns)) !== true) {
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
        $pos = SpeedPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSpeedrefno();
                break;
            case 4:
                return $this->getLength();
                break;
            case 5:
                return $this->getLengthtype();
                break;
            case 6:
                return $this->getSpeedls();
                break;
            case 7:
                return $this->getLengthtypespeed();
                break;
            case 8:
                return $this->getSpeedms();
                break;
            case 9:
                return $this->getMode();
                break;
            case 10:
                return $this->getDataref();
                break;
            case 11:
                return $this->getReliable();
                break;
            case 12:
                return $this->getComment();
                break;
            case 13:
                return $this->getEntered();
                break;
            case 14:
                return $this->getDateentered();
                break;
            case 15:
                return $this->getModified();
                break;
            case 16:
                return $this->getDatemodified();
                break;
            case 17:
                return $this->getExpert();
                break;
            case 18:
                return $this->getDatechecked();
                break;
            case 19:
                return $this->getSla();
                break;
            case 20:
                return $this->getSlb();
                break;
            case 21:
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
        if (isset($alreadyDumpedObjects['Speed'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Speed'][$this->getPrimaryKey()] = true;
        $keys = SpeedPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getStockcode(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getSpeedrefno(),
            $keys[4] => $this->getLength(),
            $keys[5] => $this->getLengthtype(),
            $keys[6] => $this->getSpeedls(),
            $keys[7] => $this->getLengthtypespeed(),
            $keys[8] => $this->getSpeedms(),
            $keys[9] => $this->getMode(),
            $keys[10] => $this->getDataref(),
            $keys[11] => $this->getReliable(),
            $keys[12] => $this->getComment(),
            $keys[13] => $this->getEntered(),
            $keys[14] => $this->getDateentered(),
            $keys[15] => $this->getModified(),
            $keys[16] => $this->getDatemodified(),
            $keys[17] => $this->getExpert(),
            $keys[18] => $this->getDatechecked(),
            $keys[19] => $this->getSla(),
            $keys[20] => $this->getSlb(),
            $keys[21] => $this->getTs(),
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
        $pos = SpeedPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSpeedrefno($value);
                break;
            case 4:
                $this->setLength($value);
                break;
            case 5:
                $this->setLengthtype($value);
                break;
            case 6:
                $this->setSpeedls($value);
                break;
            case 7:
                $this->setLengthtypespeed($value);
                break;
            case 8:
                $this->setSpeedms($value);
                break;
            case 9:
                $this->setMode($value);
                break;
            case 10:
                $this->setDataref($value);
                break;
            case 11:
                $this->setReliable($value);
                break;
            case 12:
                $this->setComment($value);
                break;
            case 13:
                $this->setEntered($value);
                break;
            case 14:
                $this->setDateentered($value);
                break;
            case 15:
                $this->setModified($value);
                break;
            case 16:
                $this->setDatemodified($value);
                break;
            case 17:
                $this->setExpert($value);
                break;
            case 18:
                $this->setDatechecked($value);
                break;
            case 19:
                $this->setSla($value);
                break;
            case 20:
                $this->setSlb($value);
                break;
            case 21:
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
        $keys = SpeedPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSpeedrefno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLength($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLengthtype($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSpeedls($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLengthtypespeed($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setSpeedms($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setMode($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDataref($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setReliable($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setComment($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setEntered($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDateentered($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setModified($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setDatemodified($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setExpert($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setDatechecked($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setSla($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setSlb($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setTs($arr[$keys[21]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SpeedPeer::DATABASE_NAME);

        if ($this->isColumnModified(SpeedPeer::AUTOCTR)) $criteria->add(SpeedPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(SpeedPeer::STOCKCODE)) $criteria->add(SpeedPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(SpeedPeer::SPECCODE)) $criteria->add(SpeedPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(SpeedPeer::SPEEDREFNO)) $criteria->add(SpeedPeer::SPEEDREFNO, $this->speedrefno);
        if ($this->isColumnModified(SpeedPeer::LENGTH)) $criteria->add(SpeedPeer::LENGTH, $this->length);
        if ($this->isColumnModified(SpeedPeer::LENGTHTYPE)) $criteria->add(SpeedPeer::LENGTHTYPE, $this->lengthtype);
        if ($this->isColumnModified(SpeedPeer::SPEEDLS)) $criteria->add(SpeedPeer::SPEEDLS, $this->speedls);
        if ($this->isColumnModified(SpeedPeer::LENGTHTYPESPEED)) $criteria->add(SpeedPeer::LENGTHTYPESPEED, $this->lengthtypespeed);
        if ($this->isColumnModified(SpeedPeer::SPEEDMS)) $criteria->add(SpeedPeer::SPEEDMS, $this->speedms);
        if ($this->isColumnModified(SpeedPeer::MODE)) $criteria->add(SpeedPeer::MODE, $this->mode);
        if ($this->isColumnModified(SpeedPeer::DATAREF)) $criteria->add(SpeedPeer::DATAREF, $this->dataref);
        if ($this->isColumnModified(SpeedPeer::RELIABLE)) $criteria->add(SpeedPeer::RELIABLE, $this->reliable);
        if ($this->isColumnModified(SpeedPeer::COMMENT)) $criteria->add(SpeedPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(SpeedPeer::ENTERED)) $criteria->add(SpeedPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(SpeedPeer::DATEENTERED)) $criteria->add(SpeedPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(SpeedPeer::MODIFIED)) $criteria->add(SpeedPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(SpeedPeer::DATEMODIFIED)) $criteria->add(SpeedPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(SpeedPeer::EXPERT)) $criteria->add(SpeedPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(SpeedPeer::DATECHECKED)) $criteria->add(SpeedPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(SpeedPeer::SLA)) $criteria->add(SpeedPeer::SLA, $this->sla);
        if ($this->isColumnModified(SpeedPeer::SLB)) $criteria->add(SpeedPeer::SLB, $this->slb);
        if ($this->isColumnModified(SpeedPeer::TS)) $criteria->add(SpeedPeer::TS, $this->ts);

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
        $criteria = new Criteria(SpeedPeer::DATABASE_NAME);
        $criteria->add(SpeedPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of Speed (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setSpeedrefno($this->getSpeedrefno());
        $copyObj->setLength($this->getLength());
        $copyObj->setLengthtype($this->getLengthtype());
        $copyObj->setSpeedls($this->getSpeedls());
        $copyObj->setLengthtypespeed($this->getLengthtypespeed());
        $copyObj->setSpeedms($this->getSpeedms());
        $copyObj->setMode($this->getMode());
        $copyObj->setDataref($this->getDataref());
        $copyObj->setReliable($this->getReliable());
        $copyObj->setComment($this->getComment());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setSla($this->getSla());
        $copyObj->setSlb($this->getSlb());
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
     * @return Speed Clone of current object.
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
     * @return SpeedPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SpeedPeer();
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
        $this->speedrefno = null;
        $this->length = null;
        $this->lengthtype = null;
        $this->speedls = null;
        $this->lengthtypespeed = null;
        $this->speedms = null;
        $this->mode = null;
        $this->dataref = null;
        $this->reliable = null;
        $this->comment = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->sla = null;
        $this->slb = null;
        $this->ts = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
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
        return (string) $this->exportTo(SpeedPeer::DEFAULT_STRING_FORMAT);
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
