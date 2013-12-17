<?php


/**
 * Base class that represents a row from the 'larvdyn' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseLarvdyn extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'LarvdynPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        LarvdynPeer
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
     * The value for the larvdynrefno field.
     * @var        int
     */
    protected $larvdynrefno;

    /**
     * The value for the ecosystem field.
     * @var        string
     */
    protected $ecosystem;

    /**
     * The value for the temperature field.
     * @var        double
     */
    protected $temperature;

    /**
     * The value for the duration field.
     * @var        double
     */
    protected $duration;

    /**
     * The value for the whatch field.
     * @var        int
     */
    protected $whatch;

    /**
     * The value for the wmeta field.
     * @var        int
     */
    protected $wmeta;

    /**
     * The value for the growth field.
     * @var        double
     */
    protected $growth;

    /**
     * The value for the mortality field.
     * @var        double
     */
    protected $mortality;

    /**
     * The value for the oxygencons field.
     * @var        double
     */
    protected $oxygencons;

    /**
     * The value for the ingestion field.
     * @var        double
     */
    protected $ingestion;

    /**
     * The value for the remark field.
     * @var        string
     */
    protected $remark;

    /**
     * The value for the refs field.
     * @var        string
     */
    protected $refs;

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
     * Get the [larvdynrefno] column value.
     *
     * @return int
     */
    public function getLarvdynrefno()
    {

        return $this->larvdynrefno;
    }

    /**
     * Get the [ecosystem] column value.
     *
     * @return string
     */
    public function getEcosystem()
    {

        return $this->ecosystem;
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
     * Get the [duration] column value.
     *
     * @return double
     */
    public function getDuration()
    {

        return $this->duration;
    }

    /**
     * Get the [whatch] column value.
     *
     * @return int
     */
    public function getWhatch()
    {

        return $this->whatch;
    }

    /**
     * Get the [wmeta] column value.
     *
     * @return int
     */
    public function getWmeta()
    {

        return $this->wmeta;
    }

    /**
     * Get the [growth] column value.
     *
     * @return double
     */
    public function getGrowth()
    {

        return $this->growth;
    }

    /**
     * Get the [mortality] column value.
     *
     * @return double
     */
    public function getMortality()
    {

        return $this->mortality;
    }

    /**
     * Get the [oxygencons] column value.
     *
     * @return double
     */
    public function getOxygencons()
    {

        return $this->oxygencons;
    }

    /**
     * Get the [ingestion] column value.
     *
     * @return double
     */
    public function getIngestion()
    {

        return $this->ingestion;
    }

    /**
     * Get the [remark] column value.
     *
     * @return string
     */
    public function getRemark()
    {

        return $this->remark;
    }

    /**
     * Get the [refs] column value.
     *
     * @return string
     */
    public function getRefs()
    {

        return $this->refs;
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
     * Get the [datechecked] column value.
     *
     * @return string
     */
    public function getDatechecked()
    {

        return $this->datechecked;
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
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = LarvdynPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = LarvdynPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = LarvdynPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [genus] column.
     *
     * @param  string $v new value
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setGenus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genus !== $v) {
            $this->genus = $v;
            $this->modifiedColumns[] = LarvdynPeer::GENUS;
        }


        return $this;
    } // setGenus()

    /**
     * Set the value of [species] column.
     *
     * @param  string $v new value
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setSpecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->species !== $v) {
            $this->species = $v;
            $this->modifiedColumns[] = LarvdynPeer::SPECIES;
        }


        return $this;
    } // setSpecies()

    /**
     * Set the value of [larvdynrefno] column.
     *
     * @param  int $v new value
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setLarvdynrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->larvdynrefno !== $v) {
            $this->larvdynrefno = $v;
            $this->modifiedColumns[] = LarvdynPeer::LARVDYNREFNO;
        }


        return $this;
    } // setLarvdynrefno()

    /**
     * Set the value of [ecosystem] column.
     *
     * @param  string $v new value
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setEcosystem($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecosystem !== $v) {
            $this->ecosystem = $v;
            $this->modifiedColumns[] = LarvdynPeer::ECOSYSTEM;
        }


        return $this;
    } // setEcosystem()

    /**
     * Set the value of [temperature] column.
     *
     * @param  double $v new value
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setTemperature($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->temperature !== $v) {
            $this->temperature = $v;
            $this->modifiedColumns[] = LarvdynPeer::TEMPERATURE;
        }


        return $this;
    } // setTemperature()

    /**
     * Set the value of [duration] column.
     *
     * @param  double $v new value
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setDuration($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->duration !== $v) {
            $this->duration = $v;
            $this->modifiedColumns[] = LarvdynPeer::DURATION;
        }


        return $this;
    } // setDuration()

    /**
     * Set the value of [whatch] column.
     *
     * @param  int $v new value
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setWhatch($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->whatch !== $v) {
            $this->whatch = $v;
            $this->modifiedColumns[] = LarvdynPeer::WHATCH;
        }


        return $this;
    } // setWhatch()

    /**
     * Set the value of [wmeta] column.
     *
     * @param  int $v new value
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setWmeta($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->wmeta !== $v) {
            $this->wmeta = $v;
            $this->modifiedColumns[] = LarvdynPeer::WMETA;
        }


        return $this;
    } // setWmeta()

    /**
     * Set the value of [growth] column.
     *
     * @param  double $v new value
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setGrowth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->growth !== $v) {
            $this->growth = $v;
            $this->modifiedColumns[] = LarvdynPeer::GROWTH;
        }


        return $this;
    } // setGrowth()

    /**
     * Set the value of [mortality] column.
     *
     * @param  double $v new value
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setMortality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->mortality !== $v) {
            $this->mortality = $v;
            $this->modifiedColumns[] = LarvdynPeer::MORTALITY;
        }


        return $this;
    } // setMortality()

    /**
     * Set the value of [oxygencons] column.
     *
     * @param  double $v new value
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setOxygencons($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oxygencons !== $v) {
            $this->oxygencons = $v;
            $this->modifiedColumns[] = LarvdynPeer::OXYGENCONS;
        }


        return $this;
    } // setOxygencons()

    /**
     * Set the value of [ingestion] column.
     *
     * @param  double $v new value
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setIngestion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ingestion !== $v) {
            $this->ingestion = $v;
            $this->modifiedColumns[] = LarvdynPeer::INGESTION;
        }


        return $this;
    } // setIngestion()

    /**
     * Set the value of [remark] column.
     *
     * @param  string $v new value
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setRemark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remark !== $v) {
            $this->remark = $v;
            $this->modifiedColumns[] = LarvdynPeer::REMARK;
        }


        return $this;
    } // setRemark()

    /**
     * Set the value of [refs] column.
     *
     * @param  string $v new value
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setRefs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->refs !== $v) {
            $this->refs = $v;
            $this->modifiedColumns[] = LarvdynPeer::REFS;
        }


        return $this;
    } // setRefs()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = LarvdynPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = LarvdynPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = LarvdynPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = LarvdynPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = LarvdynPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Set the value of [datechecked] column.
     *
     * @param  string $v new value
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->datechecked !== $v) {
            $this->datechecked = $v;
            $this->modifiedColumns[] = LarvdynPeer::DATECHECKED;
        }


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Larvdyn The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = LarvdynPeer::TS;
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
            $this->genus = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->species = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->larvdynrefno = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->ecosystem = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->temperature = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->duration = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->whatch = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->wmeta = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->growth = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->mortality = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->oxygencons = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->ingestion = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->remark = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->refs = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->entered = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->dateentered = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->modified = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->datemodified = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->expert = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->datechecked = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->ts = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 24; // 24 = LarvdynPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Larvdyn object", $e);
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
            $con = Propel::getConnection(LarvdynPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = LarvdynPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(LarvdynPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = LarvdynQuery::create()
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
            $con = Propel::getConnection(LarvdynPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                LarvdynPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = LarvdynPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . LarvdynPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(LarvdynPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(LarvdynPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(LarvdynPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(LarvdynPeer::GENUS)) {
            $modifiedColumns[':p' . $index++]  = '`Genus`';
        }
        if ($this->isColumnModified(LarvdynPeer::SPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`Species`';
        }
        if ($this->isColumnModified(LarvdynPeer::LARVDYNREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`LarvDynRefNo`';
        }
        if ($this->isColumnModified(LarvdynPeer::ECOSYSTEM)) {
            $modifiedColumns[':p' . $index++]  = '`Ecosystem`';
        }
        if ($this->isColumnModified(LarvdynPeer::TEMPERATURE)) {
            $modifiedColumns[':p' . $index++]  = '`Temperature`';
        }
        if ($this->isColumnModified(LarvdynPeer::DURATION)) {
            $modifiedColumns[':p' . $index++]  = '`Duration`';
        }
        if ($this->isColumnModified(LarvdynPeer::WHATCH)) {
            $modifiedColumns[':p' . $index++]  = '`WHatch`';
        }
        if ($this->isColumnModified(LarvdynPeer::WMETA)) {
            $modifiedColumns[':p' . $index++]  = '`WMeta`';
        }
        if ($this->isColumnModified(LarvdynPeer::GROWTH)) {
            $modifiedColumns[':p' . $index++]  = '`Growth`';
        }
        if ($this->isColumnModified(LarvdynPeer::MORTALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Mortality`';
        }
        if ($this->isColumnModified(LarvdynPeer::OXYGENCONS)) {
            $modifiedColumns[':p' . $index++]  = '`OxygenCons`';
        }
        if ($this->isColumnModified(LarvdynPeer::INGESTION)) {
            $modifiedColumns[':p' . $index++]  = '`Ingestion`';
        }
        if ($this->isColumnModified(LarvdynPeer::REMARK)) {
            $modifiedColumns[':p' . $index++]  = '`Remark`';
        }
        if ($this->isColumnModified(LarvdynPeer::REFS)) {
            $modifiedColumns[':p' . $index++]  = '`Refs`';
        }
        if ($this->isColumnModified(LarvdynPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(LarvdynPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Dateentered`';
        }
        if ($this->isColumnModified(LarvdynPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(LarvdynPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Datemodified`';
        }
        if ($this->isColumnModified(LarvdynPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(LarvdynPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`Datechecked`';
        }
        if ($this->isColumnModified(LarvdynPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `larvdyn` (%s) VALUES (%s)',
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
                    case '`Genus`':
                        $stmt->bindValue($identifier, $this->genus, PDO::PARAM_STR);
                        break;
                    case '`Species`':
                        $stmt->bindValue($identifier, $this->species, PDO::PARAM_STR);
                        break;
                    case '`LarvDynRefNo`':
                        $stmt->bindValue($identifier, $this->larvdynrefno, PDO::PARAM_INT);
                        break;
                    case '`Ecosystem`':
                        $stmt->bindValue($identifier, $this->ecosystem, PDO::PARAM_STR);
                        break;
                    case '`Temperature`':
                        $stmt->bindValue($identifier, $this->temperature, PDO::PARAM_STR);
                        break;
                    case '`Duration`':
                        $stmt->bindValue($identifier, $this->duration, PDO::PARAM_STR);
                        break;
                    case '`WHatch`':
                        $stmt->bindValue($identifier, $this->whatch, PDO::PARAM_INT);
                        break;
                    case '`WMeta`':
                        $stmt->bindValue($identifier, $this->wmeta, PDO::PARAM_INT);
                        break;
                    case '`Growth`':
                        $stmt->bindValue($identifier, $this->growth, PDO::PARAM_STR);
                        break;
                    case '`Mortality`':
                        $stmt->bindValue($identifier, $this->mortality, PDO::PARAM_STR);
                        break;
                    case '`OxygenCons`':
                        $stmt->bindValue($identifier, $this->oxygencons, PDO::PARAM_STR);
                        break;
                    case '`Ingestion`':
                        $stmt->bindValue($identifier, $this->ingestion, PDO::PARAM_STR);
                        break;
                    case '`Remark`':
                        $stmt->bindValue($identifier, $this->remark, PDO::PARAM_STR);
                        break;
                    case '`Refs`':
                        $stmt->bindValue($identifier, $this->refs, PDO::PARAM_STR);
                        break;
                    case '`Entered`':
                        $stmt->bindValue($identifier, $this->entered, PDO::PARAM_INT);
                        break;
                    case '`Dateentered`':
                        $stmt->bindValue($identifier, $this->dateentered, PDO::PARAM_STR);
                        break;
                    case '`Modified`':
                        $stmt->bindValue($identifier, $this->modified, PDO::PARAM_INT);
                        break;
                    case '`Datemodified`':
                        $stmt->bindValue($identifier, $this->datemodified, PDO::PARAM_STR);
                        break;
                    case '`Expert`':
                        $stmt->bindValue($identifier, $this->expert, PDO::PARAM_INT);
                        break;
                    case '`Datechecked`':
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


            if (($retval = LarvdynPeer::doValidate($this, $columns)) !== true) {
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
        $pos = LarvdynPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getGenus();
                break;
            case 4:
                return $this->getSpecies();
                break;
            case 5:
                return $this->getLarvdynrefno();
                break;
            case 6:
                return $this->getEcosystem();
                break;
            case 7:
                return $this->getTemperature();
                break;
            case 8:
                return $this->getDuration();
                break;
            case 9:
                return $this->getWhatch();
                break;
            case 10:
                return $this->getWmeta();
                break;
            case 11:
                return $this->getGrowth();
                break;
            case 12:
                return $this->getMortality();
                break;
            case 13:
                return $this->getOxygencons();
                break;
            case 14:
                return $this->getIngestion();
                break;
            case 15:
                return $this->getRemark();
                break;
            case 16:
                return $this->getRefs();
                break;
            case 17:
                return $this->getEntered();
                break;
            case 18:
                return $this->getDateentered();
                break;
            case 19:
                return $this->getModified();
                break;
            case 20:
                return $this->getDatemodified();
                break;
            case 21:
                return $this->getExpert();
                break;
            case 22:
                return $this->getDatechecked();
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
        if (isset($alreadyDumpedObjects['Larvdyn'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Larvdyn'][$this->getPrimaryKey()] = true;
        $keys = LarvdynPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getStockcode(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getGenus(),
            $keys[4] => $this->getSpecies(),
            $keys[5] => $this->getLarvdynrefno(),
            $keys[6] => $this->getEcosystem(),
            $keys[7] => $this->getTemperature(),
            $keys[8] => $this->getDuration(),
            $keys[9] => $this->getWhatch(),
            $keys[10] => $this->getWmeta(),
            $keys[11] => $this->getGrowth(),
            $keys[12] => $this->getMortality(),
            $keys[13] => $this->getOxygencons(),
            $keys[14] => $this->getIngestion(),
            $keys[15] => $this->getRemark(),
            $keys[16] => $this->getRefs(),
            $keys[17] => $this->getEntered(),
            $keys[18] => $this->getDateentered(),
            $keys[19] => $this->getModified(),
            $keys[20] => $this->getDatemodified(),
            $keys[21] => $this->getExpert(),
            $keys[22] => $this->getDatechecked(),
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
        $pos = LarvdynPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setGenus($value);
                break;
            case 4:
                $this->setSpecies($value);
                break;
            case 5:
                $this->setLarvdynrefno($value);
                break;
            case 6:
                $this->setEcosystem($value);
                break;
            case 7:
                $this->setTemperature($value);
                break;
            case 8:
                $this->setDuration($value);
                break;
            case 9:
                $this->setWhatch($value);
                break;
            case 10:
                $this->setWmeta($value);
                break;
            case 11:
                $this->setGrowth($value);
                break;
            case 12:
                $this->setMortality($value);
                break;
            case 13:
                $this->setOxygencons($value);
                break;
            case 14:
                $this->setIngestion($value);
                break;
            case 15:
                $this->setRemark($value);
                break;
            case 16:
                $this->setRefs($value);
                break;
            case 17:
                $this->setEntered($value);
                break;
            case 18:
                $this->setDateentered($value);
                break;
            case 19:
                $this->setModified($value);
                break;
            case 20:
                $this->setDatemodified($value);
                break;
            case 21:
                $this->setExpert($value);
                break;
            case 22:
                $this->setDatechecked($value);
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
        $keys = LarvdynPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setGenus($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSpecies($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLarvdynrefno($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setEcosystem($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setTemperature($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDuration($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setWhatch($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setWmeta($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setGrowth($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setMortality($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setOxygencons($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setIngestion($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setRemark($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setRefs($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setEntered($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setDateentered($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setModified($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setDatemodified($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setExpert($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDatechecked($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setTs($arr[$keys[23]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(LarvdynPeer::DATABASE_NAME);

        if ($this->isColumnModified(LarvdynPeer::AUTOCTR)) $criteria->add(LarvdynPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(LarvdynPeer::STOCKCODE)) $criteria->add(LarvdynPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(LarvdynPeer::SPECCODE)) $criteria->add(LarvdynPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(LarvdynPeer::GENUS)) $criteria->add(LarvdynPeer::GENUS, $this->genus);
        if ($this->isColumnModified(LarvdynPeer::SPECIES)) $criteria->add(LarvdynPeer::SPECIES, $this->species);
        if ($this->isColumnModified(LarvdynPeer::LARVDYNREFNO)) $criteria->add(LarvdynPeer::LARVDYNREFNO, $this->larvdynrefno);
        if ($this->isColumnModified(LarvdynPeer::ECOSYSTEM)) $criteria->add(LarvdynPeer::ECOSYSTEM, $this->ecosystem);
        if ($this->isColumnModified(LarvdynPeer::TEMPERATURE)) $criteria->add(LarvdynPeer::TEMPERATURE, $this->temperature);
        if ($this->isColumnModified(LarvdynPeer::DURATION)) $criteria->add(LarvdynPeer::DURATION, $this->duration);
        if ($this->isColumnModified(LarvdynPeer::WHATCH)) $criteria->add(LarvdynPeer::WHATCH, $this->whatch);
        if ($this->isColumnModified(LarvdynPeer::WMETA)) $criteria->add(LarvdynPeer::WMETA, $this->wmeta);
        if ($this->isColumnModified(LarvdynPeer::GROWTH)) $criteria->add(LarvdynPeer::GROWTH, $this->growth);
        if ($this->isColumnModified(LarvdynPeer::MORTALITY)) $criteria->add(LarvdynPeer::MORTALITY, $this->mortality);
        if ($this->isColumnModified(LarvdynPeer::OXYGENCONS)) $criteria->add(LarvdynPeer::OXYGENCONS, $this->oxygencons);
        if ($this->isColumnModified(LarvdynPeer::INGESTION)) $criteria->add(LarvdynPeer::INGESTION, $this->ingestion);
        if ($this->isColumnModified(LarvdynPeer::REMARK)) $criteria->add(LarvdynPeer::REMARK, $this->remark);
        if ($this->isColumnModified(LarvdynPeer::REFS)) $criteria->add(LarvdynPeer::REFS, $this->refs);
        if ($this->isColumnModified(LarvdynPeer::ENTERED)) $criteria->add(LarvdynPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(LarvdynPeer::DATEENTERED)) $criteria->add(LarvdynPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(LarvdynPeer::MODIFIED)) $criteria->add(LarvdynPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(LarvdynPeer::DATEMODIFIED)) $criteria->add(LarvdynPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(LarvdynPeer::EXPERT)) $criteria->add(LarvdynPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(LarvdynPeer::DATECHECKED)) $criteria->add(LarvdynPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(LarvdynPeer::TS)) $criteria->add(LarvdynPeer::TS, $this->ts);

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
        $criteria = new Criteria(LarvdynPeer::DATABASE_NAME);
        $criteria->add(LarvdynPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of Larvdyn (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setGenus($this->getGenus());
        $copyObj->setSpecies($this->getSpecies());
        $copyObj->setLarvdynrefno($this->getLarvdynrefno());
        $copyObj->setEcosystem($this->getEcosystem());
        $copyObj->setTemperature($this->getTemperature());
        $copyObj->setDuration($this->getDuration());
        $copyObj->setWhatch($this->getWhatch());
        $copyObj->setWmeta($this->getWmeta());
        $copyObj->setGrowth($this->getGrowth());
        $copyObj->setMortality($this->getMortality());
        $copyObj->setOxygencons($this->getOxygencons());
        $copyObj->setIngestion($this->getIngestion());
        $copyObj->setRemark($this->getRemark());
        $copyObj->setRefs($this->getRefs());
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
     * @return Larvdyn Clone of current object.
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
     * @return LarvdynPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new LarvdynPeer();
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
        $this->genus = null;
        $this->species = null;
        $this->larvdynrefno = null;
        $this->ecosystem = null;
        $this->temperature = null;
        $this->duration = null;
        $this->whatch = null;
        $this->wmeta = null;
        $this->growth = null;
        $this->mortality = null;
        $this->oxygencons = null;
        $this->ingestion = null;
        $this->remark = null;
        $this->refs = null;
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
        return (string) $this->exportTo(LarvdynPeer::DEFAULT_STRING_FORMAT);
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
