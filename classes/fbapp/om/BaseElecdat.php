<?php


/**
 * Base class that represents a row from the 'elecdat' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseElecdat extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ElecdatPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ElecdatPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the elecode field.
     * @var        int
     */
    protected $elecode;

    /**
     * The value for the studcode field.
     * @var        int
     */
    protected $studcode;

    /**
     * The value for the stockcode field.
     * @var        int
     */
    protected $stockcode;

    /**
     * The value for the methodused field.
     * @var        string
     */
    protected $methodused;

    /**
     * The value for the buffersystem field.
     * @var        string
     */
    protected $buffersystem;

    /**
     * The value for the ph field.
     * @var        double
     */
    protected $ph;

    /**
     * The value for the tissue field.
     * @var        string
     */
    protected $tissue;

    /**
     * The value for the samples field.
     * @var        int
     */
    protected $samples;

    /**
     * The value for the enzyme field.
     * @var        string
     */
    protected $enzyme;

    /**
     * The value for the locus field.
     * @var        string
     */
    protected $locus;

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
     * The value for the comment field.
     * @var        string
     */
    protected $comment;

    /**
     * The value for the expheterozygosity field.
     * @var        double
     */
    protected $expheterozygosity;

    /**
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

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
     * Get the [elecode] column value.
     *
     * @return int
     */
    public function getElecode()
    {

        return $this->elecode;
    }

    /**
     * Get the [studcode] column value.
     *
     * @return int
     */
    public function getStudcode()
    {

        return $this->studcode;
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
     * Get the [methodused] column value.
     *
     * @return string
     */
    public function getMethodused()
    {

        return $this->methodused;
    }

    /**
     * Get the [buffersystem] column value.
     *
     * @return string
     */
    public function getBuffersystem()
    {

        return $this->buffersystem;
    }

    /**
     * Get the [ph] column value.
     *
     * @return double
     */
    public function getPh()
    {

        return $this->ph;
    }

    /**
     * Get the [tissue] column value.
     *
     * @return string
     */
    public function getTissue()
    {

        return $this->tissue;
    }

    /**
     * Get the [samples] column value.
     *
     * @return int
     */
    public function getSamples()
    {

        return $this->samples;
    }

    /**
     * Get the [enzyme] column value.
     *
     * @return string
     */
    public function getEnzyme()
    {

        return $this->enzyme;
    }

    /**
     * Get the [locus] column value.
     *
     * @return string
     */
    public function getLocus()
    {

        return $this->locus;
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
     * Get the [comment] column value.
     *
     * @return string
     */
    public function getComment()
    {

        return $this->comment;
    }

    /**
     * Get the [expheterozygosity] column value.
     *
     * @return double
     */
    public function getExpheterozygosity()
    {

        return $this->expheterozygosity;
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
     * Set the value of [elecode] column.
     *
     * @param  int $v new value
     * @return Elecdat The current object (for fluent API support)
     */
    public function setElecode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->elecode !== $v) {
            $this->elecode = $v;
            $this->modifiedColumns[] = ElecdatPeer::ELECODE;
        }


        return $this;
    } // setElecode()

    /**
     * Set the value of [studcode] column.
     *
     * @param  int $v new value
     * @return Elecdat The current object (for fluent API support)
     */
    public function setStudcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->studcode !== $v) {
            $this->studcode = $v;
            $this->modifiedColumns[] = ElecdatPeer::STUDCODE;
        }


        return $this;
    } // setStudcode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Elecdat The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = ElecdatPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [methodused] column.
     *
     * @param  string $v new value
     * @return Elecdat The current object (for fluent API support)
     */
    public function setMethodused($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->methodused !== $v) {
            $this->methodused = $v;
            $this->modifiedColumns[] = ElecdatPeer::METHODUSED;
        }


        return $this;
    } // setMethodused()

    /**
     * Set the value of [buffersystem] column.
     *
     * @param  string $v new value
     * @return Elecdat The current object (for fluent API support)
     */
    public function setBuffersystem($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->buffersystem !== $v) {
            $this->buffersystem = $v;
            $this->modifiedColumns[] = ElecdatPeer::BUFFERSYSTEM;
        }


        return $this;
    } // setBuffersystem()

    /**
     * Set the value of [ph] column.
     *
     * @param  double $v new value
     * @return Elecdat The current object (for fluent API support)
     */
    public function setPh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ph !== $v) {
            $this->ph = $v;
            $this->modifiedColumns[] = ElecdatPeer::PH;
        }


        return $this;
    } // setPh()

    /**
     * Set the value of [tissue] column.
     *
     * @param  string $v new value
     * @return Elecdat The current object (for fluent API support)
     */
    public function setTissue($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tissue !== $v) {
            $this->tissue = $v;
            $this->modifiedColumns[] = ElecdatPeer::TISSUE;
        }


        return $this;
    } // setTissue()

    /**
     * Set the value of [samples] column.
     *
     * @param  int $v new value
     * @return Elecdat The current object (for fluent API support)
     */
    public function setSamples($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->samples !== $v) {
            $this->samples = $v;
            $this->modifiedColumns[] = ElecdatPeer::SAMPLES;
        }


        return $this;
    } // setSamples()

    /**
     * Set the value of [enzyme] column.
     *
     * @param  string $v new value
     * @return Elecdat The current object (for fluent API support)
     */
    public function setEnzyme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->enzyme !== $v) {
            $this->enzyme = $v;
            $this->modifiedColumns[] = ElecdatPeer::ENZYME;
        }


        return $this;
    } // setEnzyme()

    /**
     * Set the value of [locus] column.
     *
     * @param  string $v new value
     * @return Elecdat The current object (for fluent API support)
     */
    public function setLocus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locus !== $v) {
            $this->locus = $v;
            $this->modifiedColumns[] = ElecdatPeer::LOCUS;
        }


        return $this;
    } // setLocus()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Elecdat The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = ElecdatPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Elecdat The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = ElecdatPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Elecdat The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = ElecdatPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Elecdat The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = ElecdatPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Elecdat The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = ElecdatPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Elecdat The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = ElecdatPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return Elecdat The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = ElecdatPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [expheterozygosity] column.
     *
     * @param  double $v new value
     * @return Elecdat The current object (for fluent API support)
     */
    public function setExpheterozygosity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->expheterozygosity !== $v) {
            $this->expheterozygosity = $v;
            $this->modifiedColumns[] = ElecdatPeer::EXPHETEROZYGOSITY;
        }


        return $this;
    } // setExpheterozygosity()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Elecdat The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = ElecdatPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Elecdat The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = ElecdatPeer::TS;
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

            $this->elecode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->studcode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->stockcode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->methodused = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->buffersystem = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->ph = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
            $this->tissue = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->samples = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->enzyme = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->locus = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->entered = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->dateentered = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->modified = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->datemodified = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->expert = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->datechecked = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->comment = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->expheterozygosity = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->speccode = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->ts = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 20; // 20 = ElecdatPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Elecdat object", $e);
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
            $con = Propel::getConnection(ElecdatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ElecdatPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(ElecdatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ElecdatQuery::create()
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
            $con = Propel::getConnection(ElecdatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ElecdatPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(ElecdatPeer::ELECODE)) {
            $modifiedColumns[':p' . $index++]  = '`EleCode`';
        }
        if ($this->isColumnModified(ElecdatPeer::STUDCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StudCode`';
        }
        if ($this->isColumnModified(ElecdatPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(ElecdatPeer::METHODUSED)) {
            $modifiedColumns[':p' . $index++]  = '`MethodUsed`';
        }
        if ($this->isColumnModified(ElecdatPeer::BUFFERSYSTEM)) {
            $modifiedColumns[':p' . $index++]  = '`BufferSystem`';
        }
        if ($this->isColumnModified(ElecdatPeer::PH)) {
            $modifiedColumns[':p' . $index++]  = '`pH`';
        }
        if ($this->isColumnModified(ElecdatPeer::TISSUE)) {
            $modifiedColumns[':p' . $index++]  = '`Tissue`';
        }
        if ($this->isColumnModified(ElecdatPeer::SAMPLES)) {
            $modifiedColumns[':p' . $index++]  = '`Samples`';
        }
        if ($this->isColumnModified(ElecdatPeer::ENZYME)) {
            $modifiedColumns[':p' . $index++]  = '`Enzyme`';
        }
        if ($this->isColumnModified(ElecdatPeer::LOCUS)) {
            $modifiedColumns[':p' . $index++]  = '`Locus`';
        }
        if ($this->isColumnModified(ElecdatPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(ElecdatPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(ElecdatPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(ElecdatPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(ElecdatPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(ElecdatPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(ElecdatPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Comment`';
        }
        if ($this->isColumnModified(ElecdatPeer::EXPHETEROZYGOSITY)) {
            $modifiedColumns[':p' . $index++]  = '`ExpHeterozygosity`';
        }
        if ($this->isColumnModified(ElecdatPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(ElecdatPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `elecdat` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`EleCode`':
                        $stmt->bindValue($identifier, $this->elecode, PDO::PARAM_INT);
                        break;
                    case '`StudCode`':
                        $stmt->bindValue($identifier, $this->studcode, PDO::PARAM_INT);
                        break;
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`MethodUsed`':
                        $stmt->bindValue($identifier, $this->methodused, PDO::PARAM_STR);
                        break;
                    case '`BufferSystem`':
                        $stmt->bindValue($identifier, $this->buffersystem, PDO::PARAM_STR);
                        break;
                    case '`pH`':
                        $stmt->bindValue($identifier, $this->ph, PDO::PARAM_STR);
                        break;
                    case '`Tissue`':
                        $stmt->bindValue($identifier, $this->tissue, PDO::PARAM_STR);
                        break;
                    case '`Samples`':
                        $stmt->bindValue($identifier, $this->samples, PDO::PARAM_INT);
                        break;
                    case '`Enzyme`':
                        $stmt->bindValue($identifier, $this->enzyme, PDO::PARAM_STR);
                        break;
                    case '`Locus`':
                        $stmt->bindValue($identifier, $this->locus, PDO::PARAM_STR);
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
                    case '`Comment`':
                        $stmt->bindValue($identifier, $this->comment, PDO::PARAM_STR);
                        break;
                    case '`ExpHeterozygosity`':
                        $stmt->bindValue($identifier, $this->expheterozygosity, PDO::PARAM_STR);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
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
        $this->setStudcode($pk);

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


            if (($retval = ElecdatPeer::doValidate($this, $columns)) !== true) {
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
        $pos = ElecdatPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getElecode();
                break;
            case 1:
                return $this->getStudcode();
                break;
            case 2:
                return $this->getStockcode();
                break;
            case 3:
                return $this->getMethodused();
                break;
            case 4:
                return $this->getBuffersystem();
                break;
            case 5:
                return $this->getPh();
                break;
            case 6:
                return $this->getTissue();
                break;
            case 7:
                return $this->getSamples();
                break;
            case 8:
                return $this->getEnzyme();
                break;
            case 9:
                return $this->getLocus();
                break;
            case 10:
                return $this->getEntered();
                break;
            case 11:
                return $this->getDateentered();
                break;
            case 12:
                return $this->getModified();
                break;
            case 13:
                return $this->getDatemodified();
                break;
            case 14:
                return $this->getExpert();
                break;
            case 15:
                return $this->getDatechecked();
                break;
            case 16:
                return $this->getComment();
                break;
            case 17:
                return $this->getExpheterozygosity();
                break;
            case 18:
                return $this->getSpeccode();
                break;
            case 19:
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
        if (isset($alreadyDumpedObjects['Elecdat'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Elecdat'][serialize($this->getPrimaryKey())] = true;
        $keys = ElecdatPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getElecode(),
            $keys[1] => $this->getStudcode(),
            $keys[2] => $this->getStockcode(),
            $keys[3] => $this->getMethodused(),
            $keys[4] => $this->getBuffersystem(),
            $keys[5] => $this->getPh(),
            $keys[6] => $this->getTissue(),
            $keys[7] => $this->getSamples(),
            $keys[8] => $this->getEnzyme(),
            $keys[9] => $this->getLocus(),
            $keys[10] => $this->getEntered(),
            $keys[11] => $this->getDateentered(),
            $keys[12] => $this->getModified(),
            $keys[13] => $this->getDatemodified(),
            $keys[14] => $this->getExpert(),
            $keys[15] => $this->getDatechecked(),
            $keys[16] => $this->getComment(),
            $keys[17] => $this->getExpheterozygosity(),
            $keys[18] => $this->getSpeccode(),
            $keys[19] => $this->getTs(),
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
        $pos = ElecdatPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setElecode($value);
                break;
            case 1:
                $this->setStudcode($value);
                break;
            case 2:
                $this->setStockcode($value);
                break;
            case 3:
                $this->setMethodused($value);
                break;
            case 4:
                $this->setBuffersystem($value);
                break;
            case 5:
                $this->setPh($value);
                break;
            case 6:
                $this->setTissue($value);
                break;
            case 7:
                $this->setSamples($value);
                break;
            case 8:
                $this->setEnzyme($value);
                break;
            case 9:
                $this->setLocus($value);
                break;
            case 10:
                $this->setEntered($value);
                break;
            case 11:
                $this->setDateentered($value);
                break;
            case 12:
                $this->setModified($value);
                break;
            case 13:
                $this->setDatemodified($value);
                break;
            case 14:
                $this->setExpert($value);
                break;
            case 15:
                $this->setDatechecked($value);
                break;
            case 16:
                $this->setComment($value);
                break;
            case 17:
                $this->setExpheterozygosity($value);
                break;
            case 18:
                $this->setSpeccode($value);
                break;
            case 19:
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
        $keys = ElecdatPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setElecode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStudcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setStockcode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setMethodused($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setBuffersystem($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPh($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTissue($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSamples($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setEnzyme($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLocus($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setEntered($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateentered($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setModified($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDatemodified($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setExpert($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDatechecked($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setComment($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setExpheterozygosity($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setSpeccode($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setTs($arr[$keys[19]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ElecdatPeer::DATABASE_NAME);

        if ($this->isColumnModified(ElecdatPeer::ELECODE)) $criteria->add(ElecdatPeer::ELECODE, $this->elecode);
        if ($this->isColumnModified(ElecdatPeer::STUDCODE)) $criteria->add(ElecdatPeer::STUDCODE, $this->studcode);
        if ($this->isColumnModified(ElecdatPeer::STOCKCODE)) $criteria->add(ElecdatPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(ElecdatPeer::METHODUSED)) $criteria->add(ElecdatPeer::METHODUSED, $this->methodused);
        if ($this->isColumnModified(ElecdatPeer::BUFFERSYSTEM)) $criteria->add(ElecdatPeer::BUFFERSYSTEM, $this->buffersystem);
        if ($this->isColumnModified(ElecdatPeer::PH)) $criteria->add(ElecdatPeer::PH, $this->ph);
        if ($this->isColumnModified(ElecdatPeer::TISSUE)) $criteria->add(ElecdatPeer::TISSUE, $this->tissue);
        if ($this->isColumnModified(ElecdatPeer::SAMPLES)) $criteria->add(ElecdatPeer::SAMPLES, $this->samples);
        if ($this->isColumnModified(ElecdatPeer::ENZYME)) $criteria->add(ElecdatPeer::ENZYME, $this->enzyme);
        if ($this->isColumnModified(ElecdatPeer::LOCUS)) $criteria->add(ElecdatPeer::LOCUS, $this->locus);
        if ($this->isColumnModified(ElecdatPeer::ENTERED)) $criteria->add(ElecdatPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(ElecdatPeer::DATEENTERED)) $criteria->add(ElecdatPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(ElecdatPeer::MODIFIED)) $criteria->add(ElecdatPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(ElecdatPeer::DATEMODIFIED)) $criteria->add(ElecdatPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(ElecdatPeer::EXPERT)) $criteria->add(ElecdatPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(ElecdatPeer::DATECHECKED)) $criteria->add(ElecdatPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(ElecdatPeer::COMMENT)) $criteria->add(ElecdatPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(ElecdatPeer::EXPHETEROZYGOSITY)) $criteria->add(ElecdatPeer::EXPHETEROZYGOSITY, $this->expheterozygosity);
        if ($this->isColumnModified(ElecdatPeer::SPECCODE)) $criteria->add(ElecdatPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(ElecdatPeer::TS)) $criteria->add(ElecdatPeer::TS, $this->ts);

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
        $criteria = new Criteria(ElecdatPeer::DATABASE_NAME);
        $criteria->add(ElecdatPeer::STUDCODE, $this->studcode);
        $criteria->add(ElecdatPeer::STOCKCODE, $this->stockcode);
        $criteria->add(ElecdatPeer::BUFFERSYSTEM, $this->buffersystem);
        $criteria->add(ElecdatPeer::TISSUE, $this->tissue);
        $criteria->add(ElecdatPeer::SAMPLES, $this->samples);
        $criteria->add(ElecdatPeer::ENZYME, $this->enzyme);
        $criteria->add(ElecdatPeer::LOCUS, $this->locus);

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
        $pks[0] = $this->getStudcode();
        $pks[1] = $this->getStockcode();
        $pks[2] = $this->getBuffersystem();
        $pks[3] = $this->getTissue();
        $pks[4] = $this->getSamples();
        $pks[5] = $this->getEnzyme();
        $pks[6] = $this->getLocus();

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
        $this->setStudcode($keys[0]);
        $this->setStockcode($keys[1]);
        $this->setBuffersystem($keys[2]);
        $this->setTissue($keys[3]);
        $this->setSamples($keys[4]);
        $this->setEnzyme($keys[5]);
        $this->setLocus($keys[6]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getStudcode()) && (null === $this->getStockcode()) && (null === $this->getBuffersystem()) && (null === $this->getTissue()) && (null === $this->getSamples()) && (null === $this->getEnzyme()) && (null === $this->getLocus());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Elecdat (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStudcode($this->getStudcode());
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setMethodused($this->getMethodused());
        $copyObj->setBuffersystem($this->getBuffersystem());
        $copyObj->setPh($this->getPh());
        $copyObj->setTissue($this->getTissue());
        $copyObj->setSamples($this->getSamples());
        $copyObj->setEnzyme($this->getEnzyme());
        $copyObj->setLocus($this->getLocus());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setComment($this->getComment());
        $copyObj->setExpheterozygosity($this->getExpheterozygosity());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setElecode(NULL); // this is a auto-increment column, so set to default value
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
     * @return Elecdat Clone of current object.
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
     * @return ElecdatPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ElecdatPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->elecode = null;
        $this->studcode = null;
        $this->stockcode = null;
        $this->methodused = null;
        $this->buffersystem = null;
        $this->ph = null;
        $this->tissue = null;
        $this->samples = null;
        $this->enzyme = null;
        $this->locus = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->comment = null;
        $this->expheterozygosity = null;
        $this->speccode = null;
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
        return (string) $this->exportTo(ElecdatPeer::DEFAULT_STRING_FORMAT);
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
