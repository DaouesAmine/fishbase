<?php


/**
 * Base class that represents a row from the 'morphorders' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMorphorders extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'MorphordersPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        MorphordersPeer
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
     * The value for the class field.
     * @var        string
     */
    protected $class;

    /**
     * The value for the order field.
     * @var        string
     */
    protected $order;

    /**
     * The value for the minofslp field.
     * @var        int
     */
    protected $minofslp;

    /**
     * The value for the maxofslp field.
     * @var        int
     */
    protected $maxofslp;

    /**
     * The value for the minofflp field.
     * @var        int
     */
    protected $minofflp;

    /**
     * The value for the maxofflp field.
     * @var        int
     */
    protected $maxofflp;

    /**
     * The value for the minofhlp field.
     * @var        int
     */
    protected $minofhlp;

    /**
     * The value for the maxofhlp field.
     * @var        int
     */
    protected $maxofhlp;

    /**
     * The value for the minofpalp field.
     * @var        int
     */
    protected $minofpalp;

    /**
     * The value for the maxofpalp field.
     * @var        int
     */
    protected $maxofpalp;

    /**
     * The value for the minofpplp field.
     * @var        int
     */
    protected $minofpplp;

    /**
     * The value for the maxofpplp field.
     * @var        int
     */
    protected $maxofpplp;

    /**
     * The value for the minofppelp field.
     * @var        int
     */
    protected $minofppelp;

    /**
     * The value for the maxofppelp field.
     * @var        int
     */
    protected $maxofppelp;

    /**
     * The value for the minofedp field.
     * @var        double
     */
    protected $minofedp;

    /**
     * The value for the maxofedp field.
     * @var        double
     */
    protected $maxofedp;

    /**
     * The value for the minofpolp field.
     * @var        double
     */
    protected $minofpolp;

    /**
     * The value for the maxofpolp field.
     * @var        double
     */
    protected $maxofpolp;

    /**
     * The value for the minofbdp field.
     * @var        double
     */
    protected $minofbdp;

    /**
     * The value for the maxofbdp field.
     * @var        double
     */
    protected $maxofbdp;

    /**
     * The value for the minofchp field.
     * @var        double
     */
    protected $minofchp;

    /**
     * The value for the maxofchp field.
     * @var        double
     */
    protected $maxofchp;

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
     * Get the [class] column value.
     *
     * @return string
     */
    public function getClass()
    {

        return $this->class;
    }

    /**
     * Get the [order] column value.
     *
     * @return string
     */
    public function getOrder()
    {

        return $this->order;
    }

    /**
     * Get the [minofslp] column value.
     *
     * @return int
     */
    public function getMinofslp()
    {

        return $this->minofslp;
    }

    /**
     * Get the [maxofslp] column value.
     *
     * @return int
     */
    public function getMaxofslp()
    {

        return $this->maxofslp;
    }

    /**
     * Get the [minofflp] column value.
     *
     * @return int
     */
    public function getMinofflp()
    {

        return $this->minofflp;
    }

    /**
     * Get the [maxofflp] column value.
     *
     * @return int
     */
    public function getMaxofflp()
    {

        return $this->maxofflp;
    }

    /**
     * Get the [minofhlp] column value.
     *
     * @return int
     */
    public function getMinofhlp()
    {

        return $this->minofhlp;
    }

    /**
     * Get the [maxofhlp] column value.
     *
     * @return int
     */
    public function getMaxofhlp()
    {

        return $this->maxofhlp;
    }

    /**
     * Get the [minofpalp] column value.
     *
     * @return int
     */
    public function getMinofpalp()
    {

        return $this->minofpalp;
    }

    /**
     * Get the [maxofpalp] column value.
     *
     * @return int
     */
    public function getMaxofpalp()
    {

        return $this->maxofpalp;
    }

    /**
     * Get the [minofpplp] column value.
     *
     * @return int
     */
    public function getMinofpplp()
    {

        return $this->minofpplp;
    }

    /**
     * Get the [maxofpplp] column value.
     *
     * @return int
     */
    public function getMaxofpplp()
    {

        return $this->maxofpplp;
    }

    /**
     * Get the [minofppelp] column value.
     *
     * @return int
     */
    public function getMinofppelp()
    {

        return $this->minofppelp;
    }

    /**
     * Get the [maxofppelp] column value.
     *
     * @return int
     */
    public function getMaxofppelp()
    {

        return $this->maxofppelp;
    }

    /**
     * Get the [minofedp] column value.
     *
     * @return double
     */
    public function getMinofedp()
    {

        return $this->minofedp;
    }

    /**
     * Get the [maxofedp] column value.
     *
     * @return double
     */
    public function getMaxofedp()
    {

        return $this->maxofedp;
    }

    /**
     * Get the [minofpolp] column value.
     *
     * @return double
     */
    public function getMinofpolp()
    {

        return $this->minofpolp;
    }

    /**
     * Get the [maxofpolp] column value.
     *
     * @return double
     */
    public function getMaxofpolp()
    {

        return $this->maxofpolp;
    }

    /**
     * Get the [minofbdp] column value.
     *
     * @return double
     */
    public function getMinofbdp()
    {

        return $this->minofbdp;
    }

    /**
     * Get the [maxofbdp] column value.
     *
     * @return double
     */
    public function getMaxofbdp()
    {

        return $this->maxofbdp;
    }

    /**
     * Get the [minofchp] column value.
     *
     * @return double
     */
    public function getMinofchp()
    {

        return $this->minofchp;
    }

    /**
     * Get the [maxofchp] column value.
     *
     * @return double
     */
    public function getMaxofchp()
    {

        return $this->maxofchp;
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
     * @return Morphorders The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = MorphordersPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [class] column.
     *
     * @param  string $v new value
     * @return Morphorders The current object (for fluent API support)
     */
    public function setClass($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->class !== $v) {
            $this->class = $v;
            $this->modifiedColumns[] = MorphordersPeer::CLAZZ;
        }


        return $this;
    } // setClass()

    /**
     * Set the value of [order] column.
     *
     * @param  string $v new value
     * @return Morphorders The current object (for fluent API support)
     */
    public function setOrder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->order !== $v) {
            $this->order = $v;
            $this->modifiedColumns[] = MorphordersPeer::ORDER;
        }


        return $this;
    } // setOrder()

    /**
     * Set the value of [minofslp] column.
     *
     * @param  int $v new value
     * @return Morphorders The current object (for fluent API support)
     */
    public function setMinofslp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->minofslp !== $v) {
            $this->minofslp = $v;
            $this->modifiedColumns[] = MorphordersPeer::MINOFSLP;
        }


        return $this;
    } // setMinofslp()

    /**
     * Set the value of [maxofslp] column.
     *
     * @param  int $v new value
     * @return Morphorders The current object (for fluent API support)
     */
    public function setMaxofslp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->maxofslp !== $v) {
            $this->maxofslp = $v;
            $this->modifiedColumns[] = MorphordersPeer::MAXOFSLP;
        }


        return $this;
    } // setMaxofslp()

    /**
     * Set the value of [minofflp] column.
     *
     * @param  int $v new value
     * @return Morphorders The current object (for fluent API support)
     */
    public function setMinofflp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->minofflp !== $v) {
            $this->minofflp = $v;
            $this->modifiedColumns[] = MorphordersPeer::MINOFFLP;
        }


        return $this;
    } // setMinofflp()

    /**
     * Set the value of [maxofflp] column.
     *
     * @param  int $v new value
     * @return Morphorders The current object (for fluent API support)
     */
    public function setMaxofflp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->maxofflp !== $v) {
            $this->maxofflp = $v;
            $this->modifiedColumns[] = MorphordersPeer::MAXOFFLP;
        }


        return $this;
    } // setMaxofflp()

    /**
     * Set the value of [minofhlp] column.
     *
     * @param  int $v new value
     * @return Morphorders The current object (for fluent API support)
     */
    public function setMinofhlp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->minofhlp !== $v) {
            $this->minofhlp = $v;
            $this->modifiedColumns[] = MorphordersPeer::MINOFHLP;
        }


        return $this;
    } // setMinofhlp()

    /**
     * Set the value of [maxofhlp] column.
     *
     * @param  int $v new value
     * @return Morphorders The current object (for fluent API support)
     */
    public function setMaxofhlp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->maxofhlp !== $v) {
            $this->maxofhlp = $v;
            $this->modifiedColumns[] = MorphordersPeer::MAXOFHLP;
        }


        return $this;
    } // setMaxofhlp()

    /**
     * Set the value of [minofpalp] column.
     *
     * @param  int $v new value
     * @return Morphorders The current object (for fluent API support)
     */
    public function setMinofpalp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->minofpalp !== $v) {
            $this->minofpalp = $v;
            $this->modifiedColumns[] = MorphordersPeer::MINOFPALP;
        }


        return $this;
    } // setMinofpalp()

    /**
     * Set the value of [maxofpalp] column.
     *
     * @param  int $v new value
     * @return Morphorders The current object (for fluent API support)
     */
    public function setMaxofpalp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->maxofpalp !== $v) {
            $this->maxofpalp = $v;
            $this->modifiedColumns[] = MorphordersPeer::MAXOFPALP;
        }


        return $this;
    } // setMaxofpalp()

    /**
     * Set the value of [minofpplp] column.
     *
     * @param  int $v new value
     * @return Morphorders The current object (for fluent API support)
     */
    public function setMinofpplp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->minofpplp !== $v) {
            $this->minofpplp = $v;
            $this->modifiedColumns[] = MorphordersPeer::MINOFPPLP;
        }


        return $this;
    } // setMinofpplp()

    /**
     * Set the value of [maxofpplp] column.
     *
     * @param  int $v new value
     * @return Morphorders The current object (for fluent API support)
     */
    public function setMaxofpplp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->maxofpplp !== $v) {
            $this->maxofpplp = $v;
            $this->modifiedColumns[] = MorphordersPeer::MAXOFPPLP;
        }


        return $this;
    } // setMaxofpplp()

    /**
     * Set the value of [minofppelp] column.
     *
     * @param  int $v new value
     * @return Morphorders The current object (for fluent API support)
     */
    public function setMinofppelp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->minofppelp !== $v) {
            $this->minofppelp = $v;
            $this->modifiedColumns[] = MorphordersPeer::MINOFPPELP;
        }


        return $this;
    } // setMinofppelp()

    /**
     * Set the value of [maxofppelp] column.
     *
     * @param  int $v new value
     * @return Morphorders The current object (for fluent API support)
     */
    public function setMaxofppelp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->maxofppelp !== $v) {
            $this->maxofppelp = $v;
            $this->modifiedColumns[] = MorphordersPeer::MAXOFPPELP;
        }


        return $this;
    } // setMaxofppelp()

    /**
     * Set the value of [minofedp] column.
     *
     * @param  double $v new value
     * @return Morphorders The current object (for fluent API support)
     */
    public function setMinofedp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->minofedp !== $v) {
            $this->minofedp = $v;
            $this->modifiedColumns[] = MorphordersPeer::MINOFEDP;
        }


        return $this;
    } // setMinofedp()

    /**
     * Set the value of [maxofedp] column.
     *
     * @param  double $v new value
     * @return Morphorders The current object (for fluent API support)
     */
    public function setMaxofedp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->maxofedp !== $v) {
            $this->maxofedp = $v;
            $this->modifiedColumns[] = MorphordersPeer::MAXOFEDP;
        }


        return $this;
    } // setMaxofedp()

    /**
     * Set the value of [minofpolp] column.
     *
     * @param  double $v new value
     * @return Morphorders The current object (for fluent API support)
     */
    public function setMinofpolp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->minofpolp !== $v) {
            $this->minofpolp = $v;
            $this->modifiedColumns[] = MorphordersPeer::MINOFPOLP;
        }


        return $this;
    } // setMinofpolp()

    /**
     * Set the value of [maxofpolp] column.
     *
     * @param  double $v new value
     * @return Morphorders The current object (for fluent API support)
     */
    public function setMaxofpolp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->maxofpolp !== $v) {
            $this->maxofpolp = $v;
            $this->modifiedColumns[] = MorphordersPeer::MAXOFPOLP;
        }


        return $this;
    } // setMaxofpolp()

    /**
     * Set the value of [minofbdp] column.
     *
     * @param  double $v new value
     * @return Morphorders The current object (for fluent API support)
     */
    public function setMinofbdp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->minofbdp !== $v) {
            $this->minofbdp = $v;
            $this->modifiedColumns[] = MorphordersPeer::MINOFBDP;
        }


        return $this;
    } // setMinofbdp()

    /**
     * Set the value of [maxofbdp] column.
     *
     * @param  double $v new value
     * @return Morphorders The current object (for fluent API support)
     */
    public function setMaxofbdp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->maxofbdp !== $v) {
            $this->maxofbdp = $v;
            $this->modifiedColumns[] = MorphordersPeer::MAXOFBDP;
        }


        return $this;
    } // setMaxofbdp()

    /**
     * Set the value of [minofchp] column.
     *
     * @param  double $v new value
     * @return Morphorders The current object (for fluent API support)
     */
    public function setMinofchp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->minofchp !== $v) {
            $this->minofchp = $v;
            $this->modifiedColumns[] = MorphordersPeer::MINOFCHP;
        }


        return $this;
    } // setMinofchp()

    /**
     * Set the value of [maxofchp] column.
     *
     * @param  double $v new value
     * @return Morphorders The current object (for fluent API support)
     */
    public function setMaxofchp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->maxofchp !== $v) {
            $this->maxofchp = $v;
            $this->modifiedColumns[] = MorphordersPeer::MAXOFCHP;
        }


        return $this;
    } // setMaxofchp()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Morphorders The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = MorphordersPeer::TS;
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
            $this->class = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->order = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->minofslp = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->maxofslp = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->minofflp = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->maxofflp = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->minofhlp = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->maxofhlp = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->minofpalp = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->maxofpalp = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->minofpplp = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->maxofpplp = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->minofppelp = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->maxofppelp = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->minofedp = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
            $this->maxofedp = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->minofpolp = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->maxofpolp = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->minofbdp = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->maxofbdp = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->minofchp = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->maxofchp = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->ts = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 24; // 24 = MorphordersPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Morphorders object", $e);
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
            $con = Propel::getConnection(MorphordersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = MorphordersPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(MorphordersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = MorphordersQuery::create()
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
            $con = Propel::getConnection(MorphordersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                MorphordersPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = MorphordersPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . MorphordersPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(MorphordersPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`AutoCtr`';
        }
        if ($this->isColumnModified(MorphordersPeer::CLAZZ)) {
            $modifiedColumns[':p' . $index++]  = '`Class`';
        }
        if ($this->isColumnModified(MorphordersPeer::ORDER)) {
            $modifiedColumns[':p' . $index++]  = '`Order`';
        }
        if ($this->isColumnModified(MorphordersPeer::MINOFSLP)) {
            $modifiedColumns[':p' . $index++]  = '`MinOfSLp`';
        }
        if ($this->isColumnModified(MorphordersPeer::MAXOFSLP)) {
            $modifiedColumns[':p' . $index++]  = '`MaxOfSLp`';
        }
        if ($this->isColumnModified(MorphordersPeer::MINOFFLP)) {
            $modifiedColumns[':p' . $index++]  = '`MinOfFLp`';
        }
        if ($this->isColumnModified(MorphordersPeer::MAXOFFLP)) {
            $modifiedColumns[':p' . $index++]  = '`MaxOfFLp`';
        }
        if ($this->isColumnModified(MorphordersPeer::MINOFHLP)) {
            $modifiedColumns[':p' . $index++]  = '`MinOfHLp`';
        }
        if ($this->isColumnModified(MorphordersPeer::MAXOFHLP)) {
            $modifiedColumns[':p' . $index++]  = '`MaxOfHLp`';
        }
        if ($this->isColumnModified(MorphordersPeer::MINOFPALP)) {
            $modifiedColumns[':p' . $index++]  = '`MinOfPALp`';
        }
        if ($this->isColumnModified(MorphordersPeer::MAXOFPALP)) {
            $modifiedColumns[':p' . $index++]  = '`MaxOfPALp`';
        }
        if ($this->isColumnModified(MorphordersPeer::MINOFPPLP)) {
            $modifiedColumns[':p' . $index++]  = '`MinOfPPLp`';
        }
        if ($this->isColumnModified(MorphordersPeer::MAXOFPPLP)) {
            $modifiedColumns[':p' . $index++]  = '`MaxOfPPLp`';
        }
        if ($this->isColumnModified(MorphordersPeer::MINOFPPELP)) {
            $modifiedColumns[':p' . $index++]  = '`MinOfPPELp`';
        }
        if ($this->isColumnModified(MorphordersPeer::MAXOFPPELP)) {
            $modifiedColumns[':p' . $index++]  = '`MaxOfPPELp`';
        }
        if ($this->isColumnModified(MorphordersPeer::MINOFEDP)) {
            $modifiedColumns[':p' . $index++]  = '`MinOfEDp`';
        }
        if ($this->isColumnModified(MorphordersPeer::MAXOFEDP)) {
            $modifiedColumns[':p' . $index++]  = '`MaxOfEDp`';
        }
        if ($this->isColumnModified(MorphordersPeer::MINOFPOLP)) {
            $modifiedColumns[':p' . $index++]  = '`MinOfPOLp`';
        }
        if ($this->isColumnModified(MorphordersPeer::MAXOFPOLP)) {
            $modifiedColumns[':p' . $index++]  = '`MaxOfPOLp`';
        }
        if ($this->isColumnModified(MorphordersPeer::MINOFBDP)) {
            $modifiedColumns[':p' . $index++]  = '`MinOfBDp`';
        }
        if ($this->isColumnModified(MorphordersPeer::MAXOFBDP)) {
            $modifiedColumns[':p' . $index++]  = '`MaxOfBDp`';
        }
        if ($this->isColumnModified(MorphordersPeer::MINOFCHP)) {
            $modifiedColumns[':p' . $index++]  = '`MinOfCHp`';
        }
        if ($this->isColumnModified(MorphordersPeer::MAXOFCHP)) {
            $modifiedColumns[':p' . $index++]  = '`MaxOfCHp`';
        }
        if ($this->isColumnModified(MorphordersPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `morphorders` (%s) VALUES (%s)',
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
                    case '`Class`':
                        $stmt->bindValue($identifier, $this->class, PDO::PARAM_STR);
                        break;
                    case '`Order`':
                        $stmt->bindValue($identifier, $this->order, PDO::PARAM_STR);
                        break;
                    case '`MinOfSLp`':
                        $stmt->bindValue($identifier, $this->minofslp, PDO::PARAM_INT);
                        break;
                    case '`MaxOfSLp`':
                        $stmt->bindValue($identifier, $this->maxofslp, PDO::PARAM_INT);
                        break;
                    case '`MinOfFLp`':
                        $stmt->bindValue($identifier, $this->minofflp, PDO::PARAM_INT);
                        break;
                    case '`MaxOfFLp`':
                        $stmt->bindValue($identifier, $this->maxofflp, PDO::PARAM_INT);
                        break;
                    case '`MinOfHLp`':
                        $stmt->bindValue($identifier, $this->minofhlp, PDO::PARAM_INT);
                        break;
                    case '`MaxOfHLp`':
                        $stmt->bindValue($identifier, $this->maxofhlp, PDO::PARAM_INT);
                        break;
                    case '`MinOfPALp`':
                        $stmt->bindValue($identifier, $this->minofpalp, PDO::PARAM_INT);
                        break;
                    case '`MaxOfPALp`':
                        $stmt->bindValue($identifier, $this->maxofpalp, PDO::PARAM_INT);
                        break;
                    case '`MinOfPPLp`':
                        $stmt->bindValue($identifier, $this->minofpplp, PDO::PARAM_INT);
                        break;
                    case '`MaxOfPPLp`':
                        $stmt->bindValue($identifier, $this->maxofpplp, PDO::PARAM_INT);
                        break;
                    case '`MinOfPPELp`':
                        $stmt->bindValue($identifier, $this->minofppelp, PDO::PARAM_INT);
                        break;
                    case '`MaxOfPPELp`':
                        $stmt->bindValue($identifier, $this->maxofppelp, PDO::PARAM_INT);
                        break;
                    case '`MinOfEDp`':
                        $stmt->bindValue($identifier, $this->minofedp, PDO::PARAM_STR);
                        break;
                    case '`MaxOfEDp`':
                        $stmt->bindValue($identifier, $this->maxofedp, PDO::PARAM_STR);
                        break;
                    case '`MinOfPOLp`':
                        $stmt->bindValue($identifier, $this->minofpolp, PDO::PARAM_STR);
                        break;
                    case '`MaxOfPOLp`':
                        $stmt->bindValue($identifier, $this->maxofpolp, PDO::PARAM_STR);
                        break;
                    case '`MinOfBDp`':
                        $stmt->bindValue($identifier, $this->minofbdp, PDO::PARAM_STR);
                        break;
                    case '`MaxOfBDp`':
                        $stmt->bindValue($identifier, $this->maxofbdp, PDO::PARAM_STR);
                        break;
                    case '`MinOfCHp`':
                        $stmt->bindValue($identifier, $this->minofchp, PDO::PARAM_STR);
                        break;
                    case '`MaxOfCHp`':
                        $stmt->bindValue($identifier, $this->maxofchp, PDO::PARAM_STR);
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


            if (($retval = MorphordersPeer::doValidate($this, $columns)) !== true) {
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
        $pos = MorphordersPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getClass();
                break;
            case 2:
                return $this->getOrder();
                break;
            case 3:
                return $this->getMinofslp();
                break;
            case 4:
                return $this->getMaxofslp();
                break;
            case 5:
                return $this->getMinofflp();
                break;
            case 6:
                return $this->getMaxofflp();
                break;
            case 7:
                return $this->getMinofhlp();
                break;
            case 8:
                return $this->getMaxofhlp();
                break;
            case 9:
                return $this->getMinofpalp();
                break;
            case 10:
                return $this->getMaxofpalp();
                break;
            case 11:
                return $this->getMinofpplp();
                break;
            case 12:
                return $this->getMaxofpplp();
                break;
            case 13:
                return $this->getMinofppelp();
                break;
            case 14:
                return $this->getMaxofppelp();
                break;
            case 15:
                return $this->getMinofedp();
                break;
            case 16:
                return $this->getMaxofedp();
                break;
            case 17:
                return $this->getMinofpolp();
                break;
            case 18:
                return $this->getMaxofpolp();
                break;
            case 19:
                return $this->getMinofbdp();
                break;
            case 20:
                return $this->getMaxofbdp();
                break;
            case 21:
                return $this->getMinofchp();
                break;
            case 22:
                return $this->getMaxofchp();
                break;
            case 23:
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
        if (isset($alreadyDumpedObjects['Morphorders'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Morphorders'][$this->getPrimaryKey()] = true;
        $keys = MorphordersPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getClass(),
            $keys[2] => $this->getOrder(),
            $keys[3] => $this->getMinofslp(),
            $keys[4] => $this->getMaxofslp(),
            $keys[5] => $this->getMinofflp(),
            $keys[6] => $this->getMaxofflp(),
            $keys[7] => $this->getMinofhlp(),
            $keys[8] => $this->getMaxofhlp(),
            $keys[9] => $this->getMinofpalp(),
            $keys[10] => $this->getMaxofpalp(),
            $keys[11] => $this->getMinofpplp(),
            $keys[12] => $this->getMaxofpplp(),
            $keys[13] => $this->getMinofppelp(),
            $keys[14] => $this->getMaxofppelp(),
            $keys[15] => $this->getMinofedp(),
            $keys[16] => $this->getMaxofedp(),
            $keys[17] => $this->getMinofpolp(),
            $keys[18] => $this->getMaxofpolp(),
            $keys[19] => $this->getMinofbdp(),
            $keys[20] => $this->getMaxofbdp(),
            $keys[21] => $this->getMinofchp(),
            $keys[22] => $this->getMaxofchp(),
            $keys[23] => $this->getTs(),
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
        $pos = MorphordersPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setClass($value);
                break;
            case 2:
                $this->setOrder($value);
                break;
            case 3:
                $this->setMinofslp($value);
                break;
            case 4:
                $this->setMaxofslp($value);
                break;
            case 5:
                $this->setMinofflp($value);
                break;
            case 6:
                $this->setMaxofflp($value);
                break;
            case 7:
                $this->setMinofhlp($value);
                break;
            case 8:
                $this->setMaxofhlp($value);
                break;
            case 9:
                $this->setMinofpalp($value);
                break;
            case 10:
                $this->setMaxofpalp($value);
                break;
            case 11:
                $this->setMinofpplp($value);
                break;
            case 12:
                $this->setMaxofpplp($value);
                break;
            case 13:
                $this->setMinofppelp($value);
                break;
            case 14:
                $this->setMaxofppelp($value);
                break;
            case 15:
                $this->setMinofedp($value);
                break;
            case 16:
                $this->setMaxofedp($value);
                break;
            case 17:
                $this->setMinofpolp($value);
                break;
            case 18:
                $this->setMaxofpolp($value);
                break;
            case 19:
                $this->setMinofbdp($value);
                break;
            case 20:
                $this->setMaxofbdp($value);
                break;
            case 21:
                $this->setMinofchp($value);
                break;
            case 22:
                $this->setMaxofchp($value);
                break;
            case 23:
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
        $keys = MorphordersPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setClass($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOrder($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setMinofslp($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMaxofslp($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMinofflp($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMaxofflp($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setMinofhlp($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setMaxofhlp($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setMinofpalp($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setMaxofpalp($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setMinofpplp($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setMaxofpplp($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setMinofppelp($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setMaxofppelp($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setMinofedp($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setMaxofedp($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setMinofpolp($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setMaxofpolp($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setMinofbdp($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setMaxofbdp($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setMinofchp($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setMaxofchp($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setTs($arr[$keys[23]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(MorphordersPeer::DATABASE_NAME);

        if ($this->isColumnModified(MorphordersPeer::AUTOCTR)) $criteria->add(MorphordersPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(MorphordersPeer::CLAZZ)) $criteria->add(MorphordersPeer::CLAZZ, $this->class);
        if ($this->isColumnModified(MorphordersPeer::ORDER)) $criteria->add(MorphordersPeer::ORDER, $this->order);
        if ($this->isColumnModified(MorphordersPeer::MINOFSLP)) $criteria->add(MorphordersPeer::MINOFSLP, $this->minofslp);
        if ($this->isColumnModified(MorphordersPeer::MAXOFSLP)) $criteria->add(MorphordersPeer::MAXOFSLP, $this->maxofslp);
        if ($this->isColumnModified(MorphordersPeer::MINOFFLP)) $criteria->add(MorphordersPeer::MINOFFLP, $this->minofflp);
        if ($this->isColumnModified(MorphordersPeer::MAXOFFLP)) $criteria->add(MorphordersPeer::MAXOFFLP, $this->maxofflp);
        if ($this->isColumnModified(MorphordersPeer::MINOFHLP)) $criteria->add(MorphordersPeer::MINOFHLP, $this->minofhlp);
        if ($this->isColumnModified(MorphordersPeer::MAXOFHLP)) $criteria->add(MorphordersPeer::MAXOFHLP, $this->maxofhlp);
        if ($this->isColumnModified(MorphordersPeer::MINOFPALP)) $criteria->add(MorphordersPeer::MINOFPALP, $this->minofpalp);
        if ($this->isColumnModified(MorphordersPeer::MAXOFPALP)) $criteria->add(MorphordersPeer::MAXOFPALP, $this->maxofpalp);
        if ($this->isColumnModified(MorphordersPeer::MINOFPPLP)) $criteria->add(MorphordersPeer::MINOFPPLP, $this->minofpplp);
        if ($this->isColumnModified(MorphordersPeer::MAXOFPPLP)) $criteria->add(MorphordersPeer::MAXOFPPLP, $this->maxofpplp);
        if ($this->isColumnModified(MorphordersPeer::MINOFPPELP)) $criteria->add(MorphordersPeer::MINOFPPELP, $this->minofppelp);
        if ($this->isColumnModified(MorphordersPeer::MAXOFPPELP)) $criteria->add(MorphordersPeer::MAXOFPPELP, $this->maxofppelp);
        if ($this->isColumnModified(MorphordersPeer::MINOFEDP)) $criteria->add(MorphordersPeer::MINOFEDP, $this->minofedp);
        if ($this->isColumnModified(MorphordersPeer::MAXOFEDP)) $criteria->add(MorphordersPeer::MAXOFEDP, $this->maxofedp);
        if ($this->isColumnModified(MorphordersPeer::MINOFPOLP)) $criteria->add(MorphordersPeer::MINOFPOLP, $this->minofpolp);
        if ($this->isColumnModified(MorphordersPeer::MAXOFPOLP)) $criteria->add(MorphordersPeer::MAXOFPOLP, $this->maxofpolp);
        if ($this->isColumnModified(MorphordersPeer::MINOFBDP)) $criteria->add(MorphordersPeer::MINOFBDP, $this->minofbdp);
        if ($this->isColumnModified(MorphordersPeer::MAXOFBDP)) $criteria->add(MorphordersPeer::MAXOFBDP, $this->maxofbdp);
        if ($this->isColumnModified(MorphordersPeer::MINOFCHP)) $criteria->add(MorphordersPeer::MINOFCHP, $this->minofchp);
        if ($this->isColumnModified(MorphordersPeer::MAXOFCHP)) $criteria->add(MorphordersPeer::MAXOFCHP, $this->maxofchp);
        if ($this->isColumnModified(MorphordersPeer::TS)) $criteria->add(MorphordersPeer::TS, $this->ts);

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
        $criteria = new Criteria(MorphordersPeer::DATABASE_NAME);
        $criteria->add(MorphordersPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of Morphorders (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setClass($this->getClass());
        $copyObj->setOrder($this->getOrder());
        $copyObj->setMinofslp($this->getMinofslp());
        $copyObj->setMaxofslp($this->getMaxofslp());
        $copyObj->setMinofflp($this->getMinofflp());
        $copyObj->setMaxofflp($this->getMaxofflp());
        $copyObj->setMinofhlp($this->getMinofhlp());
        $copyObj->setMaxofhlp($this->getMaxofhlp());
        $copyObj->setMinofpalp($this->getMinofpalp());
        $copyObj->setMaxofpalp($this->getMaxofpalp());
        $copyObj->setMinofpplp($this->getMinofpplp());
        $copyObj->setMaxofpplp($this->getMaxofpplp());
        $copyObj->setMinofppelp($this->getMinofppelp());
        $copyObj->setMaxofppelp($this->getMaxofppelp());
        $copyObj->setMinofedp($this->getMinofedp());
        $copyObj->setMaxofedp($this->getMaxofedp());
        $copyObj->setMinofpolp($this->getMinofpolp());
        $copyObj->setMaxofpolp($this->getMaxofpolp());
        $copyObj->setMinofbdp($this->getMinofbdp());
        $copyObj->setMaxofbdp($this->getMaxofbdp());
        $copyObj->setMinofchp($this->getMinofchp());
        $copyObj->setMaxofchp($this->getMaxofchp());
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
     * @return Morphorders Clone of current object.
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
     * @return MorphordersPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new MorphordersPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->class = null;
        $this->order = null;
        $this->minofslp = null;
        $this->maxofslp = null;
        $this->minofflp = null;
        $this->maxofflp = null;
        $this->minofhlp = null;
        $this->maxofhlp = null;
        $this->minofpalp = null;
        $this->maxofpalp = null;
        $this->minofpplp = null;
        $this->maxofpplp = null;
        $this->minofppelp = null;
        $this->maxofppelp = null;
        $this->minofedp = null;
        $this->maxofedp = null;
        $this->minofpolp = null;
        $this->maxofpolp = null;
        $this->minofbdp = null;
        $this->maxofbdp = null;
        $this->minofchp = null;
        $this->maxofchp = null;
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
        return (string) $this->exportTo(MorphordersPeer::DEFAULT_STRING_FORMAT);
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
