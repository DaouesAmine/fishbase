<?php


/**
 * Base class that represents a row from the 'aquarium' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseAquarium extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'AquariumPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AquariumPeer
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
     * The value for the aqcode field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $aqcode;

    /**
     * The value for the genusused field.
     * @var        string
     */
    protected $genusused;

    /**
     * The value for the speciesused field.
     * @var        string
     */
    protected $speciesused;

    /**
     * The value for the form field.
     * @var        string
     */
    protected $form;

    /**
     * The value for the males field.
     * @var        int
     */
    protected $males;

    /**
     * The value for the females field.
     * @var        int
     */
    protected $females;

    /**
     * The value for the unknown field.
     * @var        int
     */
    protected $unknown;

    /**
     * The value for the supplier field.
     * @var        string
     */
    protected $supplier;

    /**
     * The value for the source field.
     * @var        string
     */
    protected $source;

    /**
     * The value for the provenance field.
     * @var        string
     */
    protected $provenance;

    /**
     * The value for the breeding field.
     * @var        string
     */
    protected $breeding;

    /**
     * The value for the husbandry field.
     * @var        string
     */
    protected $husbandry;

    /**
     * The value for the research field.
     * @var        string
     */
    protected $research;

    /**
     * The value for the month field.
     * @var        int
     */
    protected $month;

    /**
     * The value for the year field.
     * @var        int
     */
    protected $year;

    /**
     * The value for the queries field.
     * @var        string
     */
    protected $queries;

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
        $this->aqcode = 0;
    }

    /**
     * Initializes internal state of BaseAquarium object.
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
     * Get the [speccode] column value.
     *
     * @return int
     */
    public function getSpeccode()
    {

        return $this->speccode;
    }

    /**
     * Get the [aqcode] column value.
     *
     * @return int
     */
    public function getAqcode()
    {

        return $this->aqcode;
    }

    /**
     * Get the [genusused] column value.
     *
     * @return string
     */
    public function getGenusused()
    {

        return $this->genusused;
    }

    /**
     * Get the [speciesused] column value.
     *
     * @return string
     */
    public function getSpeciesused()
    {

        return $this->speciesused;
    }

    /**
     * Get the [form] column value.
     *
     * @return string
     */
    public function getForm()
    {

        return $this->form;
    }

    /**
     * Get the [males] column value.
     *
     * @return int
     */
    public function getMales()
    {

        return $this->males;
    }

    /**
     * Get the [females] column value.
     *
     * @return int
     */
    public function getFemales()
    {

        return $this->females;
    }

    /**
     * Get the [unknown] column value.
     *
     * @return int
     */
    public function getUnknown()
    {

        return $this->unknown;
    }

    /**
     * Get the [supplier] column value.
     *
     * @return string
     */
    public function getSupplier()
    {

        return $this->supplier;
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
     * Get the [provenance] column value.
     *
     * @return string
     */
    public function getProvenance()
    {

        return $this->provenance;
    }

    /**
     * Get the [breeding] column value.
     *
     * @return string
     */
    public function getBreeding()
    {

        return $this->breeding;
    }

    /**
     * Get the [husbandry] column value.
     *
     * @return string
     */
    public function getHusbandry()
    {

        return $this->husbandry;
    }

    /**
     * Get the [research] column value.
     *
     * @return string
     */
    public function getResearch()
    {

        return $this->research;
    }

    /**
     * Get the [month] column value.
     *
     * @return int
     */
    public function getMonth()
    {

        return $this->month;
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
     * Get the [queries] column value.
     *
     * @return string
     */
    public function getQueries()
    {

        return $this->queries;
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
     * @return Aquarium The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = AquariumPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Aquarium The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = AquariumPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Aquarium The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = AquariumPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [aqcode] column.
     *
     * @param  int $v new value
     * @return Aquarium The current object (for fluent API support)
     */
    public function setAqcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aqcode !== $v) {
            $this->aqcode = $v;
            $this->modifiedColumns[] = AquariumPeer::AQCODE;
        }


        return $this;
    } // setAqcode()

    /**
     * Set the value of [genusused] column.
     *
     * @param  string $v new value
     * @return Aquarium The current object (for fluent API support)
     */
    public function setGenusused($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genusused !== $v) {
            $this->genusused = $v;
            $this->modifiedColumns[] = AquariumPeer::GENUSUSED;
        }


        return $this;
    } // setGenusused()

    /**
     * Set the value of [speciesused] column.
     *
     * @param  string $v new value
     * @return Aquarium The current object (for fluent API support)
     */
    public function setSpeciesused($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->speciesused !== $v) {
            $this->speciesused = $v;
            $this->modifiedColumns[] = AquariumPeer::SPECIESUSED;
        }


        return $this;
    } // setSpeciesused()

    /**
     * Set the value of [form] column.
     *
     * @param  string $v new value
     * @return Aquarium The current object (for fluent API support)
     */
    public function setForm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->form !== $v) {
            $this->form = $v;
            $this->modifiedColumns[] = AquariumPeer::FORM;
        }


        return $this;
    } // setForm()

    /**
     * Set the value of [males] column.
     *
     * @param  int $v new value
     * @return Aquarium The current object (for fluent API support)
     */
    public function setMales($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->males !== $v) {
            $this->males = $v;
            $this->modifiedColumns[] = AquariumPeer::MALES;
        }


        return $this;
    } // setMales()

    /**
     * Set the value of [females] column.
     *
     * @param  int $v new value
     * @return Aquarium The current object (for fluent API support)
     */
    public function setFemales($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->females !== $v) {
            $this->females = $v;
            $this->modifiedColumns[] = AquariumPeer::FEMALES;
        }


        return $this;
    } // setFemales()

    /**
     * Set the value of [unknown] column.
     *
     * @param  int $v new value
     * @return Aquarium The current object (for fluent API support)
     */
    public function setUnknown($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->unknown !== $v) {
            $this->unknown = $v;
            $this->modifiedColumns[] = AquariumPeer::UNKNOWN;
        }


        return $this;
    } // setUnknown()

    /**
     * Set the value of [supplier] column.
     *
     * @param  string $v new value
     * @return Aquarium The current object (for fluent API support)
     */
    public function setSupplier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->supplier !== $v) {
            $this->supplier = $v;
            $this->modifiedColumns[] = AquariumPeer::SUPPLIER;
        }


        return $this;
    } // setSupplier()

    /**
     * Set the value of [source] column.
     *
     * @param  string $v new value
     * @return Aquarium The current object (for fluent API support)
     */
    public function setSource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->source !== $v) {
            $this->source = $v;
            $this->modifiedColumns[] = AquariumPeer::SOURCE;
        }


        return $this;
    } // setSource()

    /**
     * Set the value of [provenance] column.
     *
     * @param  string $v new value
     * @return Aquarium The current object (for fluent API support)
     */
    public function setProvenance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->provenance !== $v) {
            $this->provenance = $v;
            $this->modifiedColumns[] = AquariumPeer::PROVENANCE;
        }


        return $this;
    } // setProvenance()

    /**
     * Set the value of [breeding] column.
     *
     * @param  string $v new value
     * @return Aquarium The current object (for fluent API support)
     */
    public function setBreeding($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->breeding !== $v) {
            $this->breeding = $v;
            $this->modifiedColumns[] = AquariumPeer::BREEDING;
        }


        return $this;
    } // setBreeding()

    /**
     * Set the value of [husbandry] column.
     *
     * @param  string $v new value
     * @return Aquarium The current object (for fluent API support)
     */
    public function setHusbandry($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->husbandry !== $v) {
            $this->husbandry = $v;
            $this->modifiedColumns[] = AquariumPeer::HUSBANDRY;
        }


        return $this;
    } // setHusbandry()

    /**
     * Set the value of [research] column.
     *
     * @param  string $v new value
     * @return Aquarium The current object (for fluent API support)
     */
    public function setResearch($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->research !== $v) {
            $this->research = $v;
            $this->modifiedColumns[] = AquariumPeer::RESEARCH;
        }


        return $this;
    } // setResearch()

    /**
     * Set the value of [month] column.
     *
     * @param  int $v new value
     * @return Aquarium The current object (for fluent API support)
     */
    public function setMonth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->month !== $v) {
            $this->month = $v;
            $this->modifiedColumns[] = AquariumPeer::MONTH;
        }


        return $this;
    } // setMonth()

    /**
     * Set the value of [year] column.
     *
     * @param  int $v new value
     * @return Aquarium The current object (for fluent API support)
     */
    public function setYear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->year !== $v) {
            $this->year = $v;
            $this->modifiedColumns[] = AquariumPeer::YEAR;
        }


        return $this;
    } // setYear()

    /**
     * Set the value of [queries] column.
     *
     * @param  string $v new value
     * @return Aquarium The current object (for fluent API support)
     */
    public function setQueries($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->queries !== $v) {
            $this->queries = $v;
            $this->modifiedColumns[] = AquariumPeer::QUERIES;
        }


        return $this;
    } // setQueries()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Aquarium The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = AquariumPeer::TS;
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
            if ($this->aqcode !== 0) {
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
            $this->speccode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->aqcode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->genusused = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->speciesused = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->form = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->males = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->females = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->unknown = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->supplier = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->source = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->provenance = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->breeding = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->husbandry = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->research = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->month = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->year = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->queries = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->ts = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 20; // 20 = AquariumPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Aquarium object", $e);
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
            $con = Propel::getConnection(AquariumPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AquariumPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(AquariumPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AquariumQuery::create()
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
            $con = Propel::getConnection(AquariumPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                AquariumPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = AquariumPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . AquariumPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(AquariumPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`AutoCtr`';
        }
        if ($this->isColumnModified(AquariumPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Stockcode`';
        }
        if ($this->isColumnModified(AquariumPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(AquariumPeer::AQCODE)) {
            $modifiedColumns[':p' . $index++]  = '`AqCode`';
        }
        if ($this->isColumnModified(AquariumPeer::GENUSUSED)) {
            $modifiedColumns[':p' . $index++]  = '`GenusUsed`';
        }
        if ($this->isColumnModified(AquariumPeer::SPECIESUSED)) {
            $modifiedColumns[':p' . $index++]  = '`SpeciesUsed`';
        }
        if ($this->isColumnModified(AquariumPeer::FORM)) {
            $modifiedColumns[':p' . $index++]  = '`Form`';
        }
        if ($this->isColumnModified(AquariumPeer::MALES)) {
            $modifiedColumns[':p' . $index++]  = '`Males`';
        }
        if ($this->isColumnModified(AquariumPeer::FEMALES)) {
            $modifiedColumns[':p' . $index++]  = '`Females`';
        }
        if ($this->isColumnModified(AquariumPeer::UNKNOWN)) {
            $modifiedColumns[':p' . $index++]  = '`Unknown`';
        }
        if ($this->isColumnModified(AquariumPeer::SUPPLIER)) {
            $modifiedColumns[':p' . $index++]  = '`Supplier`';
        }
        if ($this->isColumnModified(AquariumPeer::SOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`Source`';
        }
        if ($this->isColumnModified(AquariumPeer::PROVENANCE)) {
            $modifiedColumns[':p' . $index++]  = '`Provenance`';
        }
        if ($this->isColumnModified(AquariumPeer::BREEDING)) {
            $modifiedColumns[':p' . $index++]  = '`Breeding`';
        }
        if ($this->isColumnModified(AquariumPeer::HUSBANDRY)) {
            $modifiedColumns[':p' . $index++]  = '`Husbandry`';
        }
        if ($this->isColumnModified(AquariumPeer::RESEARCH)) {
            $modifiedColumns[':p' . $index++]  = '`Research`';
        }
        if ($this->isColumnModified(AquariumPeer::MONTH)) {
            $modifiedColumns[':p' . $index++]  = '`Month`';
        }
        if ($this->isColumnModified(AquariumPeer::YEAR)) {
            $modifiedColumns[':p' . $index++]  = '`Year`';
        }
        if ($this->isColumnModified(AquariumPeer::QUERIES)) {
            $modifiedColumns[':p' . $index++]  = '`Queries`';
        }
        if ($this->isColumnModified(AquariumPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `aquarium` (%s) VALUES (%s)',
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
                    case '`Stockcode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`AqCode`':
                        $stmt->bindValue($identifier, $this->aqcode, PDO::PARAM_INT);
                        break;
                    case '`GenusUsed`':
                        $stmt->bindValue($identifier, $this->genusused, PDO::PARAM_STR);
                        break;
                    case '`SpeciesUsed`':
                        $stmt->bindValue($identifier, $this->speciesused, PDO::PARAM_STR);
                        break;
                    case '`Form`':
                        $stmt->bindValue($identifier, $this->form, PDO::PARAM_STR);
                        break;
                    case '`Males`':
                        $stmt->bindValue($identifier, $this->males, PDO::PARAM_INT);
                        break;
                    case '`Females`':
                        $stmt->bindValue($identifier, $this->females, PDO::PARAM_INT);
                        break;
                    case '`Unknown`':
                        $stmt->bindValue($identifier, $this->unknown, PDO::PARAM_INT);
                        break;
                    case '`Supplier`':
                        $stmt->bindValue($identifier, $this->supplier, PDO::PARAM_STR);
                        break;
                    case '`Source`':
                        $stmt->bindValue($identifier, $this->source, PDO::PARAM_STR);
                        break;
                    case '`Provenance`':
                        $stmt->bindValue($identifier, $this->provenance, PDO::PARAM_STR);
                        break;
                    case '`Breeding`':
                        $stmt->bindValue($identifier, $this->breeding, PDO::PARAM_STR);
                        break;
                    case '`Husbandry`':
                        $stmt->bindValue($identifier, $this->husbandry, PDO::PARAM_STR);
                        break;
                    case '`Research`':
                        $stmt->bindValue($identifier, $this->research, PDO::PARAM_STR);
                        break;
                    case '`Month`':
                        $stmt->bindValue($identifier, $this->month, PDO::PARAM_INT);
                        break;
                    case '`Year`':
                        $stmt->bindValue($identifier, $this->year, PDO::PARAM_INT);
                        break;
                    case '`Queries`':
                        $stmt->bindValue($identifier, $this->queries, PDO::PARAM_STR);
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


            if (($retval = AquariumPeer::doValidate($this, $columns)) !== true) {
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
        $pos = AquariumPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getAqcode();
                break;
            case 4:
                return $this->getGenusused();
                break;
            case 5:
                return $this->getSpeciesused();
                break;
            case 6:
                return $this->getForm();
                break;
            case 7:
                return $this->getMales();
                break;
            case 8:
                return $this->getFemales();
                break;
            case 9:
                return $this->getUnknown();
                break;
            case 10:
                return $this->getSupplier();
                break;
            case 11:
                return $this->getSource();
                break;
            case 12:
                return $this->getProvenance();
                break;
            case 13:
                return $this->getBreeding();
                break;
            case 14:
                return $this->getHusbandry();
                break;
            case 15:
                return $this->getResearch();
                break;
            case 16:
                return $this->getMonth();
                break;
            case 17:
                return $this->getYear();
                break;
            case 18:
                return $this->getQueries();
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
        if (isset($alreadyDumpedObjects['Aquarium'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Aquarium'][$this->getPrimaryKey()] = true;
        $keys = AquariumPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getStockcode(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getAqcode(),
            $keys[4] => $this->getGenusused(),
            $keys[5] => $this->getSpeciesused(),
            $keys[6] => $this->getForm(),
            $keys[7] => $this->getMales(),
            $keys[8] => $this->getFemales(),
            $keys[9] => $this->getUnknown(),
            $keys[10] => $this->getSupplier(),
            $keys[11] => $this->getSource(),
            $keys[12] => $this->getProvenance(),
            $keys[13] => $this->getBreeding(),
            $keys[14] => $this->getHusbandry(),
            $keys[15] => $this->getResearch(),
            $keys[16] => $this->getMonth(),
            $keys[17] => $this->getYear(),
            $keys[18] => $this->getQueries(),
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
        $pos = AquariumPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setAqcode($value);
                break;
            case 4:
                $this->setGenusused($value);
                break;
            case 5:
                $this->setSpeciesused($value);
                break;
            case 6:
                $this->setForm($value);
                break;
            case 7:
                $this->setMales($value);
                break;
            case 8:
                $this->setFemales($value);
                break;
            case 9:
                $this->setUnknown($value);
                break;
            case 10:
                $this->setSupplier($value);
                break;
            case 11:
                $this->setSource($value);
                break;
            case 12:
                $this->setProvenance($value);
                break;
            case 13:
                $this->setBreeding($value);
                break;
            case 14:
                $this->setHusbandry($value);
                break;
            case 15:
                $this->setResearch($value);
                break;
            case 16:
                $this->setMonth($value);
                break;
            case 17:
                $this->setYear($value);
                break;
            case 18:
                $this->setQueries($value);
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
        $keys = AquariumPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAqcode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setGenusused($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSpeciesused($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setForm($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setMales($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setFemales($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setUnknown($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setSupplier($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setSource($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setProvenance($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setBreeding($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setHusbandry($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setResearch($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setMonth($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setYear($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setQueries($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setTs($arr[$keys[19]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AquariumPeer::DATABASE_NAME);

        if ($this->isColumnModified(AquariumPeer::AUTOCTR)) $criteria->add(AquariumPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(AquariumPeer::STOCKCODE)) $criteria->add(AquariumPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(AquariumPeer::SPECCODE)) $criteria->add(AquariumPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(AquariumPeer::AQCODE)) $criteria->add(AquariumPeer::AQCODE, $this->aqcode);
        if ($this->isColumnModified(AquariumPeer::GENUSUSED)) $criteria->add(AquariumPeer::GENUSUSED, $this->genusused);
        if ($this->isColumnModified(AquariumPeer::SPECIESUSED)) $criteria->add(AquariumPeer::SPECIESUSED, $this->speciesused);
        if ($this->isColumnModified(AquariumPeer::FORM)) $criteria->add(AquariumPeer::FORM, $this->form);
        if ($this->isColumnModified(AquariumPeer::MALES)) $criteria->add(AquariumPeer::MALES, $this->males);
        if ($this->isColumnModified(AquariumPeer::FEMALES)) $criteria->add(AquariumPeer::FEMALES, $this->females);
        if ($this->isColumnModified(AquariumPeer::UNKNOWN)) $criteria->add(AquariumPeer::UNKNOWN, $this->unknown);
        if ($this->isColumnModified(AquariumPeer::SUPPLIER)) $criteria->add(AquariumPeer::SUPPLIER, $this->supplier);
        if ($this->isColumnModified(AquariumPeer::SOURCE)) $criteria->add(AquariumPeer::SOURCE, $this->source);
        if ($this->isColumnModified(AquariumPeer::PROVENANCE)) $criteria->add(AquariumPeer::PROVENANCE, $this->provenance);
        if ($this->isColumnModified(AquariumPeer::BREEDING)) $criteria->add(AquariumPeer::BREEDING, $this->breeding);
        if ($this->isColumnModified(AquariumPeer::HUSBANDRY)) $criteria->add(AquariumPeer::HUSBANDRY, $this->husbandry);
        if ($this->isColumnModified(AquariumPeer::RESEARCH)) $criteria->add(AquariumPeer::RESEARCH, $this->research);
        if ($this->isColumnModified(AquariumPeer::MONTH)) $criteria->add(AquariumPeer::MONTH, $this->month);
        if ($this->isColumnModified(AquariumPeer::YEAR)) $criteria->add(AquariumPeer::YEAR, $this->year);
        if ($this->isColumnModified(AquariumPeer::QUERIES)) $criteria->add(AquariumPeer::QUERIES, $this->queries);
        if ($this->isColumnModified(AquariumPeer::TS)) $criteria->add(AquariumPeer::TS, $this->ts);

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
        $criteria = new Criteria(AquariumPeer::DATABASE_NAME);
        $criteria->add(AquariumPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of Aquarium (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setAqcode($this->getAqcode());
        $copyObj->setGenusused($this->getGenusused());
        $copyObj->setSpeciesused($this->getSpeciesused());
        $copyObj->setForm($this->getForm());
        $copyObj->setMales($this->getMales());
        $copyObj->setFemales($this->getFemales());
        $copyObj->setUnknown($this->getUnknown());
        $copyObj->setSupplier($this->getSupplier());
        $copyObj->setSource($this->getSource());
        $copyObj->setProvenance($this->getProvenance());
        $copyObj->setBreeding($this->getBreeding());
        $copyObj->setHusbandry($this->getHusbandry());
        $copyObj->setResearch($this->getResearch());
        $copyObj->setMonth($this->getMonth());
        $copyObj->setYear($this->getYear());
        $copyObj->setQueries($this->getQueries());
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
     * @return Aquarium Clone of current object.
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
     * @return AquariumPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AquariumPeer();
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
        $this->aqcode = null;
        $this->genusused = null;
        $this->speciesused = null;
        $this->form = null;
        $this->males = null;
        $this->females = null;
        $this->unknown = null;
        $this->supplier = null;
        $this->source = null;
        $this->provenance = null;
        $this->breeding = null;
        $this->husbandry = null;
        $this->research = null;
        $this->month = null;
        $this->year = null;
        $this->queries = null;
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
        return (string) $this->exportTo(AquariumPeer::DEFAULT_STRING_FORMAT);
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
