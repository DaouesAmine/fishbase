<?php


/**
 * Base class that represents a row from the 'dispic' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseDispic extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'DispicPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        DispicPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the picnum field.
     * @var        string
     */
    protected $picnum;

    /**
     * The value for the remarks field.
     * @var        string
     */
    protected $remarks;

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
     * The value for the discode field.
     * @var        int
     */
    protected $discode;

    /**
     * The value for the refno field.
     * @var        int
     */
    protected $refno;

    /**
     * The value for the photographer field.
     * @var        string
     */
    protected $photographer;

    /**
     * The value for the year field.
     * @var        string
     */
    protected $year;

    /**
     * The value for the locality field.
     * @var        string
     */
    protected $locality;

    /**
     * The value for the picfile field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $picfile;

    /**
     * The value for the copyright field.
     * @var        string
     */
    protected $copyright;

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
     * The value for the scanned field.
     * @var        boolean
     */
    protected $scanned;

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
        $this->picfile = '';
    }

    /**
     * Initializes internal state of BaseDispic object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [picnum] column value.
     *
     * @return string
     */
    public function getPicnum()
    {

        return $this->picnum;
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
     * Get the [discode] column value.
     *
     * @return int
     */
    public function getDiscode()
    {

        return $this->discode;
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
     * Get the [photographer] column value.
     *
     * @return string
     */
    public function getPhotographer()
    {

        return $this->photographer;
    }

    /**
     * Get the [year] column value.
     *
     * @return string
     */
    public function getYear()
    {

        return $this->year;
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
     * Get the [picfile] column value.
     *
     * @return string
     */
    public function getPicfile()
    {

        return $this->picfile;
    }

    /**
     * Get the [copyright] column value.
     *
     * @return string
     */
    public function getCopyright()
    {

        return $this->copyright;
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
     * Get the [scanned] column value.
     *
     * @return boolean
     */
    public function getScanned()
    {

        return $this->scanned;
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
     * Set the value of [picnum] column.
     *
     * @param  string $v new value
     * @return Dispic The current object (for fluent API support)
     */
    public function setPicnum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->picnum !== $v) {
            $this->picnum = $v;
            $this->modifiedColumns[] = DispicPeer::PICNUM;
        }


        return $this;
    } // setPicnum()

    /**
     * Set the value of [remarks] column.
     *
     * @param  string $v new value
     * @return Dispic The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[] = DispicPeer::REMARKS;
        }


        return $this;
    } // setRemarks()

    /**
     * Set the value of [genus] column.
     *
     * @param  string $v new value
     * @return Dispic The current object (for fluent API support)
     */
    public function setGenus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genus !== $v) {
            $this->genus = $v;
            $this->modifiedColumns[] = DispicPeer::GENUS;
        }


        return $this;
    } // setGenus()

    /**
     * Set the value of [species] column.
     *
     * @param  string $v new value
     * @return Dispic The current object (for fluent API support)
     */
    public function setSpecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->species !== $v) {
            $this->species = $v;
            $this->modifiedColumns[] = DispicPeer::SPECIES;
        }


        return $this;
    } // setSpecies()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Dispic The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = DispicPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Dispic The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = DispicPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [discode] column.
     *
     * @param  int $v new value
     * @return Dispic The current object (for fluent API support)
     */
    public function setDiscode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->discode !== $v) {
            $this->discode = $v;
            $this->modifiedColumns[] = DispicPeer::DISCODE;
        }


        return $this;
    } // setDiscode()

    /**
     * Set the value of [refno] column.
     *
     * @param  int $v new value
     * @return Dispic The current object (for fluent API support)
     */
    public function setRefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->refno !== $v) {
            $this->refno = $v;
            $this->modifiedColumns[] = DispicPeer::REFNO;
        }


        return $this;
    } // setRefno()

    /**
     * Set the value of [photographer] column.
     *
     * @param  string $v new value
     * @return Dispic The current object (for fluent API support)
     */
    public function setPhotographer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->photographer !== $v) {
            $this->photographer = $v;
            $this->modifiedColumns[] = DispicPeer::PHOTOGRAPHER;
        }


        return $this;
    } // setPhotographer()

    /**
     * Set the value of [year] column.
     *
     * @param  string $v new value
     * @return Dispic The current object (for fluent API support)
     */
    public function setYear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->year !== $v) {
            $this->year = $v;
            $this->modifiedColumns[] = DispicPeer::YEAR;
        }


        return $this;
    } // setYear()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Dispic The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = DispicPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [picfile] column.
     *
     * @param  string $v new value
     * @return Dispic The current object (for fluent API support)
     */
    public function setPicfile($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->picfile !== $v) {
            $this->picfile = $v;
            $this->modifiedColumns[] = DispicPeer::PICFILE;
        }


        return $this;
    } // setPicfile()

    /**
     * Set the value of [copyright] column.
     *
     * @param  string $v new value
     * @return Dispic The current object (for fluent API support)
     */
    public function setCopyright($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->copyright !== $v) {
            $this->copyright = $v;
            $this->modifiedColumns[] = DispicPeer::COPYRIGHT;
        }


        return $this;
    } // setCopyright()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Dispic The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = DispicPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Dispic The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = DispicPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Dispic The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = DispicPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Dispic The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = DispicPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Dispic The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = DispicPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Dispic The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = DispicPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of the [scanned] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Dispic The current object (for fluent API support)
     */
    public function setScanned($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->scanned !== $v) {
            $this->scanned = $v;
            $this->modifiedColumns[] = DispicPeer::SCANNED;
        }


        return $this;
    } // setScanned()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Dispic The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = DispicPeer::TS;
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
            if ($this->picfile !== '') {
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

            $this->picnum = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->remarks = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->genus = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->species = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->speccode = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->stockcode = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->discode = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->refno = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->photographer = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->year = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->locality = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->picfile = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->copyright = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->entered = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->dateentered = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->modified = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->datemodified = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->expert = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->datechecked = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->scanned = ($row[$startcol + 19] !== null) ? (boolean) $row[$startcol + 19] : null;
            $this->ts = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 21; // 21 = DispicPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Dispic object", $e);
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
            $con = Propel::getConnection(DispicPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = DispicPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(DispicPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = DispicQuery::create()
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
            $con = Propel::getConnection(DispicPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                DispicPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(DispicPeer::PICNUM)) {
            $modifiedColumns[':p' . $index++]  = '`PicNum`';
        }
        if ($this->isColumnModified(DispicPeer::REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`Remarks`';
        }
        if ($this->isColumnModified(DispicPeer::GENUS)) {
            $modifiedColumns[':p' . $index++]  = '`Genus`';
        }
        if ($this->isColumnModified(DispicPeer::SPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`Species`';
        }
        if ($this->isColumnModified(DispicPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(DispicPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(DispicPeer::DISCODE)) {
            $modifiedColumns[':p' . $index++]  = '`DisCode`';
        }
        if ($this->isColumnModified(DispicPeer::REFNO)) {
            $modifiedColumns[':p' . $index++]  = '`RefNo`';
        }
        if ($this->isColumnModified(DispicPeer::PHOTOGRAPHER)) {
            $modifiedColumns[':p' . $index++]  = '`Photographer`';
        }
        if ($this->isColumnModified(DispicPeer::YEAR)) {
            $modifiedColumns[':p' . $index++]  = '`Year`';
        }
        if ($this->isColumnModified(DispicPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(DispicPeer::PICFILE)) {
            $modifiedColumns[':p' . $index++]  = '`PicFile`';
        }
        if ($this->isColumnModified(DispicPeer::COPYRIGHT)) {
            $modifiedColumns[':p' . $index++]  = '`Copyright`';
        }
        if ($this->isColumnModified(DispicPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(DispicPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(DispicPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(DispicPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(DispicPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(DispicPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(DispicPeer::SCANNED)) {
            $modifiedColumns[':p' . $index++]  = '`Scanned`';
        }
        if ($this->isColumnModified(DispicPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `dispic` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`PicNum`':
                        $stmt->bindValue($identifier, $this->picnum, PDO::PARAM_STR);
                        break;
                    case '`Remarks`':
                        $stmt->bindValue($identifier, $this->remarks, PDO::PARAM_STR);
                        break;
                    case '`Genus`':
                        $stmt->bindValue($identifier, $this->genus, PDO::PARAM_STR);
                        break;
                    case '`Species`':
                        $stmt->bindValue($identifier, $this->species, PDO::PARAM_STR);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`DisCode`':
                        $stmt->bindValue($identifier, $this->discode, PDO::PARAM_INT);
                        break;
                    case '`RefNo`':
                        $stmt->bindValue($identifier, $this->refno, PDO::PARAM_INT);
                        break;
                    case '`Photographer`':
                        $stmt->bindValue($identifier, $this->photographer, PDO::PARAM_STR);
                        break;
                    case '`Year`':
                        $stmt->bindValue($identifier, $this->year, PDO::PARAM_STR);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`PicFile`':
                        $stmt->bindValue($identifier, $this->picfile, PDO::PARAM_STR);
                        break;
                    case '`Copyright`':
                        $stmt->bindValue($identifier, $this->copyright, PDO::PARAM_STR);
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
                    case '`Scanned`':
                        $stmt->bindValue($identifier, (int) $this->scanned, PDO::PARAM_INT);
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


            if (($retval = DispicPeer::doValidate($this, $columns)) !== true) {
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
        $pos = DispicPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getPicnum();
                break;
            case 1:
                return $this->getRemarks();
                break;
            case 2:
                return $this->getGenus();
                break;
            case 3:
                return $this->getSpecies();
                break;
            case 4:
                return $this->getSpeccode();
                break;
            case 5:
                return $this->getStockcode();
                break;
            case 6:
                return $this->getDiscode();
                break;
            case 7:
                return $this->getRefno();
                break;
            case 8:
                return $this->getPhotographer();
                break;
            case 9:
                return $this->getYear();
                break;
            case 10:
                return $this->getLocality();
                break;
            case 11:
                return $this->getPicfile();
                break;
            case 12:
                return $this->getCopyright();
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
                return $this->getScanned();
                break;
            case 20:
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
        if (isset($alreadyDumpedObjects['Dispic'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Dispic'][$this->getPrimaryKey()] = true;
        $keys = DispicPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getPicnum(),
            $keys[1] => $this->getRemarks(),
            $keys[2] => $this->getGenus(),
            $keys[3] => $this->getSpecies(),
            $keys[4] => $this->getSpeccode(),
            $keys[5] => $this->getStockcode(),
            $keys[6] => $this->getDiscode(),
            $keys[7] => $this->getRefno(),
            $keys[8] => $this->getPhotographer(),
            $keys[9] => $this->getYear(),
            $keys[10] => $this->getLocality(),
            $keys[11] => $this->getPicfile(),
            $keys[12] => $this->getCopyright(),
            $keys[13] => $this->getEntered(),
            $keys[14] => $this->getDateentered(),
            $keys[15] => $this->getModified(),
            $keys[16] => $this->getDatemodified(),
            $keys[17] => $this->getExpert(),
            $keys[18] => $this->getDatechecked(),
            $keys[19] => $this->getScanned(),
            $keys[20] => $this->getTs(),
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
        $pos = DispicPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setPicnum($value);
                break;
            case 1:
                $this->setRemarks($value);
                break;
            case 2:
                $this->setGenus($value);
                break;
            case 3:
                $this->setSpecies($value);
                break;
            case 4:
                $this->setSpeccode($value);
                break;
            case 5:
                $this->setStockcode($value);
                break;
            case 6:
                $this->setDiscode($value);
                break;
            case 7:
                $this->setRefno($value);
                break;
            case 8:
                $this->setPhotographer($value);
                break;
            case 9:
                $this->setYear($value);
                break;
            case 10:
                $this->setLocality($value);
                break;
            case 11:
                $this->setPicfile($value);
                break;
            case 12:
                $this->setCopyright($value);
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
                $this->setScanned($value);
                break;
            case 20:
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
        $keys = DispicPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setPicnum($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRemarks($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setGenus($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSpecies($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSpeccode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setStockcode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDiscode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setRefno($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPhotographer($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setYear($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setLocality($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setPicfile($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCopyright($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setEntered($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDateentered($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setModified($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setDatemodified($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setExpert($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setDatechecked($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setScanned($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setTs($arr[$keys[20]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(DispicPeer::DATABASE_NAME);

        if ($this->isColumnModified(DispicPeer::PICNUM)) $criteria->add(DispicPeer::PICNUM, $this->picnum);
        if ($this->isColumnModified(DispicPeer::REMARKS)) $criteria->add(DispicPeer::REMARKS, $this->remarks);
        if ($this->isColumnModified(DispicPeer::GENUS)) $criteria->add(DispicPeer::GENUS, $this->genus);
        if ($this->isColumnModified(DispicPeer::SPECIES)) $criteria->add(DispicPeer::SPECIES, $this->species);
        if ($this->isColumnModified(DispicPeer::SPECCODE)) $criteria->add(DispicPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(DispicPeer::STOCKCODE)) $criteria->add(DispicPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(DispicPeer::DISCODE)) $criteria->add(DispicPeer::DISCODE, $this->discode);
        if ($this->isColumnModified(DispicPeer::REFNO)) $criteria->add(DispicPeer::REFNO, $this->refno);
        if ($this->isColumnModified(DispicPeer::PHOTOGRAPHER)) $criteria->add(DispicPeer::PHOTOGRAPHER, $this->photographer);
        if ($this->isColumnModified(DispicPeer::YEAR)) $criteria->add(DispicPeer::YEAR, $this->year);
        if ($this->isColumnModified(DispicPeer::LOCALITY)) $criteria->add(DispicPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(DispicPeer::PICFILE)) $criteria->add(DispicPeer::PICFILE, $this->picfile);
        if ($this->isColumnModified(DispicPeer::COPYRIGHT)) $criteria->add(DispicPeer::COPYRIGHT, $this->copyright);
        if ($this->isColumnModified(DispicPeer::ENTERED)) $criteria->add(DispicPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(DispicPeer::DATEENTERED)) $criteria->add(DispicPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(DispicPeer::MODIFIED)) $criteria->add(DispicPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(DispicPeer::DATEMODIFIED)) $criteria->add(DispicPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(DispicPeer::EXPERT)) $criteria->add(DispicPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(DispicPeer::DATECHECKED)) $criteria->add(DispicPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(DispicPeer::SCANNED)) $criteria->add(DispicPeer::SCANNED, $this->scanned);
        if ($this->isColumnModified(DispicPeer::TS)) $criteria->add(DispicPeer::TS, $this->ts);

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
        $criteria = new Criteria(DispicPeer::DATABASE_NAME);
        $criteria->add(DispicPeer::PICFILE, $this->picfile);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getPicfile();
    }

    /**
     * Generic method to set the primary key (picfile column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setPicfile($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getPicfile();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Dispic (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPicnum($this->getPicnum());
        $copyObj->setRemarks($this->getRemarks());
        $copyObj->setGenus($this->getGenus());
        $copyObj->setSpecies($this->getSpecies());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setDiscode($this->getDiscode());
        $copyObj->setRefno($this->getRefno());
        $copyObj->setPhotographer($this->getPhotographer());
        $copyObj->setYear($this->getYear());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setCopyright($this->getCopyright());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setScanned($this->getScanned());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setPicfile(''); // this is a auto-increment column, so set to default value
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
     * @return Dispic Clone of current object.
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
     * @return DispicPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new DispicPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->picnum = null;
        $this->remarks = null;
        $this->genus = null;
        $this->species = null;
        $this->speccode = null;
        $this->stockcode = null;
        $this->discode = null;
        $this->refno = null;
        $this->photographer = null;
        $this->year = null;
        $this->locality = null;
        $this->picfile = null;
        $this->copyright = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->scanned = null;
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
        return (string) $this->exportTo(DispicPeer::DEFAULT_STRING_FORMAT);
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
