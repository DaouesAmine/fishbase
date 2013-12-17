<?php


/**
 * Base class that represents a row from the 'elecstudies' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseElecstudies extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ElecstudiesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ElecstudiesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

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
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the elecdatrefno field.
     * @var        int
     */
    protected $elecdatrefno;

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
     * The value for the totalloci field.
     * @var        int
     */
    protected $totalloci;

    /**
     * The value for the expheterozygosity field.
     * @var        double
     */
    protected $expheterozygosity;

    /**
     * The value for the heterozygosity field.
     * @var        double
     */
    protected $heterozygosity;

    /**
     * The value for the polymorphicloci field.
     * @var        double
     */
    protected $polymorphicloci;

    /**
     * The value for the comments field.
     * @var        string
     */
    protected $comments;

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
     * The value for the checked field.
     * @var        int
     */
    protected $checked;

    /**
     * The value for the datechecked field.
     * @var        string
     */
    protected $datechecked;

    /**
     * The value for the source field.
     * @var        string
     */
    protected $source;

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
     * Get the [speccode] column value.
     *
     * @return int
     */
    public function getSpeccode()
    {

        return $this->speccode;
    }

    /**
     * Get the [elecdatrefno] column value.
     *
     * @return int
     */
    public function getElecdatrefno()
    {

        return $this->elecdatrefno;
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
     * Get the [totalloci] column value.
     *
     * @return int
     */
    public function getTotalloci()
    {

        return $this->totalloci;
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
     * Get the [heterozygosity] column value.
     *
     * @return double
     */
    public function getHeterozygosity()
    {

        return $this->heterozygosity;
    }

    /**
     * Get the [polymorphicloci] column value.
     *
     * @return double
     */
    public function getPolymorphicloci()
    {

        return $this->polymorphicloci;
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
     * Get the [checked] column value.
     *
     * @return int
     */
    public function getChecked()
    {

        return $this->checked;
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
     * Get the [source] column value.
     *
     * @return string
     */
    public function getSource()
    {

        return $this->source;
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
     * Set the value of [studcode] column.
     *
     * @param  int $v new value
     * @return Elecstudies The current object (for fluent API support)
     */
    public function setStudcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->studcode !== $v) {
            $this->studcode = $v;
            $this->modifiedColumns[] = ElecstudiesPeer::STUDCODE;
        }


        return $this;
    } // setStudcode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Elecstudies The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = ElecstudiesPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Elecstudies The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = ElecstudiesPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [elecdatrefno] column.
     *
     * @param  int $v new value
     * @return Elecstudies The current object (for fluent API support)
     */
    public function setElecdatrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->elecdatrefno !== $v) {
            $this->elecdatrefno = $v;
            $this->modifiedColumns[] = ElecstudiesPeer::ELECDATREFNO;
        }


        return $this;
    } // setElecdatrefno()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Elecstudies The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = ElecstudiesPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Elecstudies The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = ElecstudiesPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [totalloci] column.
     *
     * @param  int $v new value
     * @return Elecstudies The current object (for fluent API support)
     */
    public function setTotalloci($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->totalloci !== $v) {
            $this->totalloci = $v;
            $this->modifiedColumns[] = ElecstudiesPeer::TOTALLOCI;
        }


        return $this;
    } // setTotalloci()

    /**
     * Set the value of [expheterozygosity] column.
     *
     * @param  double $v new value
     * @return Elecstudies The current object (for fluent API support)
     */
    public function setExpheterozygosity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->expheterozygosity !== $v) {
            $this->expheterozygosity = $v;
            $this->modifiedColumns[] = ElecstudiesPeer::EXPHETEROZYGOSITY;
        }


        return $this;
    } // setExpheterozygosity()

    /**
     * Set the value of [heterozygosity] column.
     *
     * @param  double $v new value
     * @return Elecstudies The current object (for fluent API support)
     */
    public function setHeterozygosity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->heterozygosity !== $v) {
            $this->heterozygosity = $v;
            $this->modifiedColumns[] = ElecstudiesPeer::HETEROZYGOSITY;
        }


        return $this;
    } // setHeterozygosity()

    /**
     * Set the value of [polymorphicloci] column.
     *
     * @param  double $v new value
     * @return Elecstudies The current object (for fluent API support)
     */
    public function setPolymorphicloci($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->polymorphicloci !== $v) {
            $this->polymorphicloci = $v;
            $this->modifiedColumns[] = ElecstudiesPeer::POLYMORPHICLOCI;
        }


        return $this;
    } // setPolymorphicloci()

    /**
     * Set the value of [comments] column.
     *
     * @param  string $v new value
     * @return Elecstudies The current object (for fluent API support)
     */
    public function setComments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comments !== $v) {
            $this->comments = $v;
            $this->modifiedColumns[] = ElecstudiesPeer::COMMENTS;
        }


        return $this;
    } // setComments()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Elecstudies The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = ElecstudiesPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Elecstudies The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = ElecstudiesPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Elecstudies The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = ElecstudiesPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Elecstudies The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = ElecstudiesPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [checked] column.
     *
     * @param  int $v new value
     * @return Elecstudies The current object (for fluent API support)
     */
    public function setChecked($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->checked !== $v) {
            $this->checked = $v;
            $this->modifiedColumns[] = ElecstudiesPeer::CHECKED;
        }


        return $this;
    } // setChecked()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Elecstudies The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = ElecstudiesPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [source] column.
     *
     * @param  string $v new value
     * @return Elecstudies The current object (for fluent API support)
     */
    public function setSource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->source !== $v) {
            $this->source = $v;
            $this->modifiedColumns[] = ElecstudiesPeer::SOURCE;
        }


        return $this;
    } // setSource()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Elecstudies The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = ElecstudiesPeer::TS;
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

            $this->studcode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->stockcode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->speccode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->elecdatrefno = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->locality = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->c_code = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->totalloci = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->expheterozygosity = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->heterozygosity = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->polymorphicloci = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->comments = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->entered = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->dateentered = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->modified = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->datemodified = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->checked = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->datechecked = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->source = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->ts = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 19; // 19 = ElecstudiesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Elecstudies object", $e);
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
            $con = Propel::getConnection(ElecstudiesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ElecstudiesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(ElecstudiesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ElecstudiesQuery::create()
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
            $con = Propel::getConnection(ElecstudiesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ElecstudiesPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = ElecstudiesPeer::STUDCODE;
        if (null !== $this->studcode) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ElecstudiesPeer::STUDCODE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ElecstudiesPeer::STUDCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StudCode`';
        }
        if ($this->isColumnModified(ElecstudiesPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(ElecstudiesPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(ElecstudiesPeer::ELECDATREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`ElecDatRefNo`';
        }
        if ($this->isColumnModified(ElecstudiesPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(ElecstudiesPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(ElecstudiesPeer::TOTALLOCI)) {
            $modifiedColumns[':p' . $index++]  = '`TotalLoci`';
        }
        if ($this->isColumnModified(ElecstudiesPeer::EXPHETEROZYGOSITY)) {
            $modifiedColumns[':p' . $index++]  = '`ExpHeterozygosity`';
        }
        if ($this->isColumnModified(ElecstudiesPeer::HETEROZYGOSITY)) {
            $modifiedColumns[':p' . $index++]  = '`Heterozygosity`';
        }
        if ($this->isColumnModified(ElecstudiesPeer::POLYMORPHICLOCI)) {
            $modifiedColumns[':p' . $index++]  = '`PolymorphicLoci`';
        }
        if ($this->isColumnModified(ElecstudiesPeer::COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`Comments`';
        }
        if ($this->isColumnModified(ElecstudiesPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(ElecstudiesPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(ElecstudiesPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(ElecstudiesPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(ElecstudiesPeer::CHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`Checked`';
        }
        if ($this->isColumnModified(ElecstudiesPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(ElecstudiesPeer::SOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`Source`';
        }
        if ($this->isColumnModified(ElecstudiesPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `elecstudies` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`StudCode`':
                        $stmt->bindValue($identifier, $this->studcode, PDO::PARAM_INT);
                        break;
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`ElecDatRefNo`':
                        $stmt->bindValue($identifier, $this->elecdatrefno, PDO::PARAM_INT);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`TotalLoci`':
                        $stmt->bindValue($identifier, $this->totalloci, PDO::PARAM_INT);
                        break;
                    case '`ExpHeterozygosity`':
                        $stmt->bindValue($identifier, $this->expheterozygosity, PDO::PARAM_STR);
                        break;
                    case '`Heterozygosity`':
                        $stmt->bindValue($identifier, $this->heterozygosity, PDO::PARAM_STR);
                        break;
                    case '`PolymorphicLoci`':
                        $stmt->bindValue($identifier, $this->polymorphicloci, PDO::PARAM_STR);
                        break;
                    case '`Comments`':
                        $stmt->bindValue($identifier, $this->comments, PDO::PARAM_STR);
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
                    case '`Checked`':
                        $stmt->bindValue($identifier, $this->checked, PDO::PARAM_INT);
                        break;
                    case '`DateChecked`':
                        $stmt->bindValue($identifier, $this->datechecked, PDO::PARAM_STR);
                        break;
                    case '`Source`':
                        $stmt->bindValue($identifier, $this->source, PDO::PARAM_STR);
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


            if (($retval = ElecstudiesPeer::doValidate($this, $columns)) !== true) {
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
        $pos = ElecstudiesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getStudcode();
                break;
            case 1:
                return $this->getStockcode();
                break;
            case 2:
                return $this->getSpeccode();
                break;
            case 3:
                return $this->getElecdatrefno();
                break;
            case 4:
                return $this->getLocality();
                break;
            case 5:
                return $this->getCCode();
                break;
            case 6:
                return $this->getTotalloci();
                break;
            case 7:
                return $this->getExpheterozygosity();
                break;
            case 8:
                return $this->getHeterozygosity();
                break;
            case 9:
                return $this->getPolymorphicloci();
                break;
            case 10:
                return $this->getComments();
                break;
            case 11:
                return $this->getEntered();
                break;
            case 12:
                return $this->getDateentered();
                break;
            case 13:
                return $this->getModified();
                break;
            case 14:
                return $this->getDatemodified();
                break;
            case 15:
                return $this->getChecked();
                break;
            case 16:
                return $this->getDatechecked();
                break;
            case 17:
                return $this->getSource();
                break;
            case 18:
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
        if (isset($alreadyDumpedObjects['Elecstudies'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Elecstudies'][$this->getPrimaryKey()] = true;
        $keys = ElecstudiesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getStudcode(),
            $keys[1] => $this->getStockcode(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getElecdatrefno(),
            $keys[4] => $this->getLocality(),
            $keys[5] => $this->getCCode(),
            $keys[6] => $this->getTotalloci(),
            $keys[7] => $this->getExpheterozygosity(),
            $keys[8] => $this->getHeterozygosity(),
            $keys[9] => $this->getPolymorphicloci(),
            $keys[10] => $this->getComments(),
            $keys[11] => $this->getEntered(),
            $keys[12] => $this->getDateentered(),
            $keys[13] => $this->getModified(),
            $keys[14] => $this->getDatemodified(),
            $keys[15] => $this->getChecked(),
            $keys[16] => $this->getDatechecked(),
            $keys[17] => $this->getSource(),
            $keys[18] => $this->getTs(),
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
        $pos = ElecstudiesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setStudcode($value);
                break;
            case 1:
                $this->setStockcode($value);
                break;
            case 2:
                $this->setSpeccode($value);
                break;
            case 3:
                $this->setElecdatrefno($value);
                break;
            case 4:
                $this->setLocality($value);
                break;
            case 5:
                $this->setCCode($value);
                break;
            case 6:
                $this->setTotalloci($value);
                break;
            case 7:
                $this->setExpheterozygosity($value);
                break;
            case 8:
                $this->setHeterozygosity($value);
                break;
            case 9:
                $this->setPolymorphicloci($value);
                break;
            case 10:
                $this->setComments($value);
                break;
            case 11:
                $this->setEntered($value);
                break;
            case 12:
                $this->setDateentered($value);
                break;
            case 13:
                $this->setModified($value);
                break;
            case 14:
                $this->setDatemodified($value);
                break;
            case 15:
                $this->setChecked($value);
                break;
            case 16:
                $this->setDatechecked($value);
                break;
            case 17:
                $this->setSource($value);
                break;
            case 18:
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
        $keys = ElecstudiesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setStudcode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setElecdatrefno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLocality($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCCode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTotalloci($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setExpheterozygosity($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setHeterozygosity($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPolymorphicloci($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setComments($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setEntered($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDateentered($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setModified($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDatemodified($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setChecked($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setDatechecked($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setSource($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setTs($arr[$keys[18]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ElecstudiesPeer::DATABASE_NAME);

        if ($this->isColumnModified(ElecstudiesPeer::STUDCODE)) $criteria->add(ElecstudiesPeer::STUDCODE, $this->studcode);
        if ($this->isColumnModified(ElecstudiesPeer::STOCKCODE)) $criteria->add(ElecstudiesPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(ElecstudiesPeer::SPECCODE)) $criteria->add(ElecstudiesPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(ElecstudiesPeer::ELECDATREFNO)) $criteria->add(ElecstudiesPeer::ELECDATREFNO, $this->elecdatrefno);
        if ($this->isColumnModified(ElecstudiesPeer::LOCALITY)) $criteria->add(ElecstudiesPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(ElecstudiesPeer::C_CODE)) $criteria->add(ElecstudiesPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(ElecstudiesPeer::TOTALLOCI)) $criteria->add(ElecstudiesPeer::TOTALLOCI, $this->totalloci);
        if ($this->isColumnModified(ElecstudiesPeer::EXPHETEROZYGOSITY)) $criteria->add(ElecstudiesPeer::EXPHETEROZYGOSITY, $this->expheterozygosity);
        if ($this->isColumnModified(ElecstudiesPeer::HETEROZYGOSITY)) $criteria->add(ElecstudiesPeer::HETEROZYGOSITY, $this->heterozygosity);
        if ($this->isColumnModified(ElecstudiesPeer::POLYMORPHICLOCI)) $criteria->add(ElecstudiesPeer::POLYMORPHICLOCI, $this->polymorphicloci);
        if ($this->isColumnModified(ElecstudiesPeer::COMMENTS)) $criteria->add(ElecstudiesPeer::COMMENTS, $this->comments);
        if ($this->isColumnModified(ElecstudiesPeer::ENTERED)) $criteria->add(ElecstudiesPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(ElecstudiesPeer::DATEENTERED)) $criteria->add(ElecstudiesPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(ElecstudiesPeer::MODIFIED)) $criteria->add(ElecstudiesPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(ElecstudiesPeer::DATEMODIFIED)) $criteria->add(ElecstudiesPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(ElecstudiesPeer::CHECKED)) $criteria->add(ElecstudiesPeer::CHECKED, $this->checked);
        if ($this->isColumnModified(ElecstudiesPeer::DATECHECKED)) $criteria->add(ElecstudiesPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(ElecstudiesPeer::SOURCE)) $criteria->add(ElecstudiesPeer::SOURCE, $this->source);
        if ($this->isColumnModified(ElecstudiesPeer::TS)) $criteria->add(ElecstudiesPeer::TS, $this->ts);

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
        $criteria = new Criteria(ElecstudiesPeer::DATABASE_NAME);
        $criteria->add(ElecstudiesPeer::STUDCODE, $this->studcode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getStudcode();
    }

    /**
     * Generic method to set the primary key (studcode column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setStudcode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getStudcode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Elecstudies (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setElecdatrefno($this->getElecdatrefno());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setTotalloci($this->getTotalloci());
        $copyObj->setExpheterozygosity($this->getExpheterozygosity());
        $copyObj->setHeterozygosity($this->getHeterozygosity());
        $copyObj->setPolymorphicloci($this->getPolymorphicloci());
        $copyObj->setComments($this->getComments());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setChecked($this->getChecked());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setSource($this->getSource());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setStudcode(NULL); // this is a auto-increment column, so set to default value
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
     * @return Elecstudies Clone of current object.
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
     * @return ElecstudiesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ElecstudiesPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->studcode = null;
        $this->stockcode = null;
        $this->speccode = null;
        $this->elecdatrefno = null;
        $this->locality = null;
        $this->c_code = null;
        $this->totalloci = null;
        $this->expheterozygosity = null;
        $this->heterozygosity = null;
        $this->polymorphicloci = null;
        $this->comments = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->checked = null;
        $this->datechecked = null;
        $this->source = null;
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
        return (string) $this->exportTo(ElecstudiesPeer::DEFAULT_STRING_FORMAT);
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
