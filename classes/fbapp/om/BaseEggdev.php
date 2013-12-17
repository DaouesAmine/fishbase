<?php


/**
 * Base class that represents a row from the 'eggdev' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseEggdev extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EggdevPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EggdevPeer
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
     * The value for the eggdevrefno field.
     * @var        int
     */
    protected $eggdevrefno;

    /**
     * The value for the locality field.
     * @var        string
     */
    protected $locality;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the temperature field.
     * @var        double
     */
    protected $temperature;

    /**
     * The value for the salinity field.
     * @var        double
     */
    protected $salinity;

    /**
     * The value for the salinity2 field.
     * @var        string
     */
    protected $salinity2;

    /**
     * The value for the eggdiameter field.
     * @var        double
     */
    protected $eggdiameter;

    /**
     * The value for the eggdevtime field.
     * @var        double
     */
    protected $eggdevtime;

    /**
     * The value for the dataref field.
     * @var        int
     */
    protected $dataref;

    /**
     * The value for the datatype field.
     * @var        string
     */
    protected $datatype;

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
     * Get the [eggdevrefno] column value.
     *
     * @return int
     */
    public function getEggdevrefno()
    {

        return $this->eggdevrefno;
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
     * Get the [temperature] column value.
     *
     * @return double
     */
    public function getTemperature()
    {

        return $this->temperature;
    }

    /**
     * Get the [salinity] column value.
     *
     * @return double
     */
    public function getSalinity()
    {

        return $this->salinity;
    }

    /**
     * Get the [salinity2] column value.
     *
     * @return string
     */
    public function getSalinity2()
    {

        return $this->salinity2;
    }

    /**
     * Get the [eggdiameter] column value.
     *
     * @return double
     */
    public function getEggdiameter()
    {

        return $this->eggdiameter;
    }

    /**
     * Get the [eggdevtime] column value.
     *
     * @return double
     */
    public function getEggdevtime()
    {

        return $this->eggdevtime;
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
     * Get the [datatype] column value.
     *
     * @return string
     */
    public function getDatatype()
    {

        return $this->datatype;
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
     * @return Eggdev The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = EggdevPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Eggdev The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = EggdevPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Eggdev The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = EggdevPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [eggdevrefno] column.
     *
     * @param  int $v new value
     * @return Eggdev The current object (for fluent API support)
     */
    public function setEggdevrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eggdevrefno !== $v) {
            $this->eggdevrefno = $v;
            $this->modifiedColumns[] = EggdevPeer::EGGDEVREFNO;
        }


        return $this;
    } // setEggdevrefno()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Eggdev The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = EggdevPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Eggdev The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = EggdevPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [temperature] column.
     *
     * @param  double $v new value
     * @return Eggdev The current object (for fluent API support)
     */
    public function setTemperature($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->temperature !== $v) {
            $this->temperature = $v;
            $this->modifiedColumns[] = EggdevPeer::TEMPERATURE;
        }


        return $this;
    } // setTemperature()

    /**
     * Set the value of [salinity] column.
     *
     * @param  double $v new value
     * @return Eggdev The current object (for fluent API support)
     */
    public function setSalinity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->salinity !== $v) {
            $this->salinity = $v;
            $this->modifiedColumns[] = EggdevPeer::SALINITY;
        }


        return $this;
    } // setSalinity()

    /**
     * Set the value of [salinity2] column.
     *
     * @param  string $v new value
     * @return Eggdev The current object (for fluent API support)
     */
    public function setSalinity2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->salinity2 !== $v) {
            $this->salinity2 = $v;
            $this->modifiedColumns[] = EggdevPeer::SALINITY2;
        }


        return $this;
    } // setSalinity2()

    /**
     * Set the value of [eggdiameter] column.
     *
     * @param  double $v new value
     * @return Eggdev The current object (for fluent API support)
     */
    public function setEggdiameter($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->eggdiameter !== $v) {
            $this->eggdiameter = $v;
            $this->modifiedColumns[] = EggdevPeer::EGGDIAMETER;
        }


        return $this;
    } // setEggdiameter()

    /**
     * Set the value of [eggdevtime] column.
     *
     * @param  double $v new value
     * @return Eggdev The current object (for fluent API support)
     */
    public function setEggdevtime($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->eggdevtime !== $v) {
            $this->eggdevtime = $v;
            $this->modifiedColumns[] = EggdevPeer::EGGDEVTIME;
        }


        return $this;
    } // setEggdevtime()

    /**
     * Set the value of [dataref] column.
     *
     * @param  int $v new value
     * @return Eggdev The current object (for fluent API support)
     */
    public function setDataref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dataref !== $v) {
            $this->dataref = $v;
            $this->modifiedColumns[] = EggdevPeer::DATAREF;
        }


        return $this;
    } // setDataref()

    /**
     * Set the value of [datatype] column.
     *
     * @param  string $v new value
     * @return Eggdev The current object (for fluent API support)
     */
    public function setDatatype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->datatype !== $v) {
            $this->datatype = $v;
            $this->modifiedColumns[] = EggdevPeer::DATATYPE;
        }


        return $this;
    } // setDatatype()

    /**
     * Set the value of [remarks] column.
     *
     * @param  string $v new value
     * @return Eggdev The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[] = EggdevPeer::REMARKS;
        }


        return $this;
    } // setRemarks()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Eggdev The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = EggdevPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Eggdev The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = EggdevPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Eggdev The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = EggdevPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Eggdev The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = EggdevPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Eggdev The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = EggdevPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Eggdev The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = EggdevPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Eggdev The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = EggdevPeer::TS;
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
            $this->eggdevrefno = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->locality = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->c_code = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->temperature = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->salinity = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->salinity2 = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->eggdiameter = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->eggdevtime = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->dataref = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->datatype = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->remarks = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->entered = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->dateentered = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->modified = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->datemodified = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->expert = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->datechecked = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->ts = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 21; // 21 = EggdevPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Eggdev object", $e);
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
            $con = Propel::getConnection(EggdevPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EggdevPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(EggdevPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EggdevQuery::create()
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
            $con = Propel::getConnection(EggdevPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EggdevPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = EggdevPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EggdevPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EggdevPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`AutoCtr`';
        }
        if ($this->isColumnModified(EggdevPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(EggdevPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(EggdevPeer::EGGDEVREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`EggDevRefNo`';
        }
        if ($this->isColumnModified(EggdevPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(EggdevPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(EggdevPeer::TEMPERATURE)) {
            $modifiedColumns[':p' . $index++]  = '`Temperature`';
        }
        if ($this->isColumnModified(EggdevPeer::SALINITY)) {
            $modifiedColumns[':p' . $index++]  = '`Salinity`';
        }
        if ($this->isColumnModified(EggdevPeer::SALINITY2)) {
            $modifiedColumns[':p' . $index++]  = '`Salinity2`';
        }
        if ($this->isColumnModified(EggdevPeer::EGGDIAMETER)) {
            $modifiedColumns[':p' . $index++]  = '`EggDiameter`';
        }
        if ($this->isColumnModified(EggdevPeer::EGGDEVTIME)) {
            $modifiedColumns[':p' . $index++]  = '`EggDevTime`';
        }
        if ($this->isColumnModified(EggdevPeer::DATAREF)) {
            $modifiedColumns[':p' . $index++]  = '`DataRef`';
        }
        if ($this->isColumnModified(EggdevPeer::DATATYPE)) {
            $modifiedColumns[':p' . $index++]  = '`DataType`';
        }
        if ($this->isColumnModified(EggdevPeer::REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`Remarks`';
        }
        if ($this->isColumnModified(EggdevPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(EggdevPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(EggdevPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(EggdevPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(EggdevPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(EggdevPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(EggdevPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `eggdev` (%s) VALUES (%s)',
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
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`EggDevRefNo`':
                        $stmt->bindValue($identifier, $this->eggdevrefno, PDO::PARAM_INT);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`Temperature`':
                        $stmt->bindValue($identifier, $this->temperature, PDO::PARAM_STR);
                        break;
                    case '`Salinity`':
                        $stmt->bindValue($identifier, $this->salinity, PDO::PARAM_STR);
                        break;
                    case '`Salinity2`':
                        $stmt->bindValue($identifier, $this->salinity2, PDO::PARAM_STR);
                        break;
                    case '`EggDiameter`':
                        $stmt->bindValue($identifier, $this->eggdiameter, PDO::PARAM_STR);
                        break;
                    case '`EggDevTime`':
                        $stmt->bindValue($identifier, $this->eggdevtime, PDO::PARAM_STR);
                        break;
                    case '`DataRef`':
                        $stmt->bindValue($identifier, $this->dataref, PDO::PARAM_INT);
                        break;
                    case '`DataType`':
                        $stmt->bindValue($identifier, $this->datatype, PDO::PARAM_STR);
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


            if (($retval = EggdevPeer::doValidate($this, $columns)) !== true) {
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
        $pos = EggdevPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getEggdevrefno();
                break;
            case 4:
                return $this->getLocality();
                break;
            case 5:
                return $this->getCCode();
                break;
            case 6:
                return $this->getTemperature();
                break;
            case 7:
                return $this->getSalinity();
                break;
            case 8:
                return $this->getSalinity2();
                break;
            case 9:
                return $this->getEggdiameter();
                break;
            case 10:
                return $this->getEggdevtime();
                break;
            case 11:
                return $this->getDataref();
                break;
            case 12:
                return $this->getDatatype();
                break;
            case 13:
                return $this->getRemarks();
                break;
            case 14:
                return $this->getEntered();
                break;
            case 15:
                return $this->getDateentered();
                break;
            case 16:
                return $this->getModified();
                break;
            case 17:
                return $this->getDatemodified();
                break;
            case 18:
                return $this->getExpert();
                break;
            case 19:
                return $this->getDatechecked();
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
        if (isset($alreadyDumpedObjects['Eggdev'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Eggdev'][$this->getPrimaryKey()] = true;
        $keys = EggdevPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getStockcode(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getEggdevrefno(),
            $keys[4] => $this->getLocality(),
            $keys[5] => $this->getCCode(),
            $keys[6] => $this->getTemperature(),
            $keys[7] => $this->getSalinity(),
            $keys[8] => $this->getSalinity2(),
            $keys[9] => $this->getEggdiameter(),
            $keys[10] => $this->getEggdevtime(),
            $keys[11] => $this->getDataref(),
            $keys[12] => $this->getDatatype(),
            $keys[13] => $this->getRemarks(),
            $keys[14] => $this->getEntered(),
            $keys[15] => $this->getDateentered(),
            $keys[16] => $this->getModified(),
            $keys[17] => $this->getDatemodified(),
            $keys[18] => $this->getExpert(),
            $keys[19] => $this->getDatechecked(),
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
        $pos = EggdevPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setEggdevrefno($value);
                break;
            case 4:
                $this->setLocality($value);
                break;
            case 5:
                $this->setCCode($value);
                break;
            case 6:
                $this->setTemperature($value);
                break;
            case 7:
                $this->setSalinity($value);
                break;
            case 8:
                $this->setSalinity2($value);
                break;
            case 9:
                $this->setEggdiameter($value);
                break;
            case 10:
                $this->setEggdevtime($value);
                break;
            case 11:
                $this->setDataref($value);
                break;
            case 12:
                $this->setDatatype($value);
                break;
            case 13:
                $this->setRemarks($value);
                break;
            case 14:
                $this->setEntered($value);
                break;
            case 15:
                $this->setDateentered($value);
                break;
            case 16:
                $this->setModified($value);
                break;
            case 17:
                $this->setDatemodified($value);
                break;
            case 18:
                $this->setExpert($value);
                break;
            case 19:
                $this->setDatechecked($value);
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
        $keys = EggdevPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEggdevrefno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLocality($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCCode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTemperature($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSalinity($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setSalinity2($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setEggdiameter($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setEggdevtime($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDataref($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDatatype($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setRemarks($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setEntered($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDateentered($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setModified($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setDatemodified($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setExpert($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDatechecked($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setTs($arr[$keys[20]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EggdevPeer::DATABASE_NAME);

        if ($this->isColumnModified(EggdevPeer::AUTOCTR)) $criteria->add(EggdevPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(EggdevPeer::STOCKCODE)) $criteria->add(EggdevPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(EggdevPeer::SPECCODE)) $criteria->add(EggdevPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(EggdevPeer::EGGDEVREFNO)) $criteria->add(EggdevPeer::EGGDEVREFNO, $this->eggdevrefno);
        if ($this->isColumnModified(EggdevPeer::LOCALITY)) $criteria->add(EggdevPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(EggdevPeer::C_CODE)) $criteria->add(EggdevPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(EggdevPeer::TEMPERATURE)) $criteria->add(EggdevPeer::TEMPERATURE, $this->temperature);
        if ($this->isColumnModified(EggdevPeer::SALINITY)) $criteria->add(EggdevPeer::SALINITY, $this->salinity);
        if ($this->isColumnModified(EggdevPeer::SALINITY2)) $criteria->add(EggdevPeer::SALINITY2, $this->salinity2);
        if ($this->isColumnModified(EggdevPeer::EGGDIAMETER)) $criteria->add(EggdevPeer::EGGDIAMETER, $this->eggdiameter);
        if ($this->isColumnModified(EggdevPeer::EGGDEVTIME)) $criteria->add(EggdevPeer::EGGDEVTIME, $this->eggdevtime);
        if ($this->isColumnModified(EggdevPeer::DATAREF)) $criteria->add(EggdevPeer::DATAREF, $this->dataref);
        if ($this->isColumnModified(EggdevPeer::DATATYPE)) $criteria->add(EggdevPeer::DATATYPE, $this->datatype);
        if ($this->isColumnModified(EggdevPeer::REMARKS)) $criteria->add(EggdevPeer::REMARKS, $this->remarks);
        if ($this->isColumnModified(EggdevPeer::ENTERED)) $criteria->add(EggdevPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(EggdevPeer::DATEENTERED)) $criteria->add(EggdevPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(EggdevPeer::MODIFIED)) $criteria->add(EggdevPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(EggdevPeer::DATEMODIFIED)) $criteria->add(EggdevPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(EggdevPeer::EXPERT)) $criteria->add(EggdevPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(EggdevPeer::DATECHECKED)) $criteria->add(EggdevPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(EggdevPeer::TS)) $criteria->add(EggdevPeer::TS, $this->ts);

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
        $criteria = new Criteria(EggdevPeer::DATABASE_NAME);
        $criteria->add(EggdevPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of Eggdev (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setEggdevrefno($this->getEggdevrefno());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setTemperature($this->getTemperature());
        $copyObj->setSalinity($this->getSalinity());
        $copyObj->setSalinity2($this->getSalinity2());
        $copyObj->setEggdiameter($this->getEggdiameter());
        $copyObj->setEggdevtime($this->getEggdevtime());
        $copyObj->setDataref($this->getDataref());
        $copyObj->setDatatype($this->getDatatype());
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
     * @return Eggdev Clone of current object.
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
     * @return EggdevPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EggdevPeer();
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
        $this->eggdevrefno = null;
        $this->locality = null;
        $this->c_code = null;
        $this->temperature = null;
        $this->salinity = null;
        $this->salinity2 = null;
        $this->eggdiameter = null;
        $this->eggdevtime = null;
        $this->dataref = null;
        $this->datatype = null;
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
        return (string) $this->exportTo(EggdevPeer::DEFAULT_STRING_FORMAT);
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
