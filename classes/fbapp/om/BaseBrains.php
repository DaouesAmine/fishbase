<?php


/**
 * Base class that represents a row from the 'brains' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseBrains extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'BrainsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        BrainsPeer
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
     * The value for the name field.
     * @var        string
     */
    protected $name;

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
     * The value for the locality field.
     * @var        string
     */
    protected $locality;

    /**
     * The value for the number field.
     * @var        int
     */
    protected $number;

    /**
     * The value for the year field.
     * @var        int
     */
    protected $year;

    /**
     * The value for the bodyweight field.
     * @var        double
     */
    protected $bodyweight;

    /**
     * The value for the brainweight field.
     * @var        double
     */
    protected $brainweight;

    /**
     * The value for the enccoeff field.
     * @var        double
     */
    protected $enccoeff;

    /**
     * The value for the encindex field.
     * @var        int
     */
    protected $encindex;

    /**
     * The value for the sl field.
     * @var        double
     */
    protected $sl;

    /**
     * The value for the tl field.
     * @var        double
     */
    protected $tl;

    /**
     * The value for the brainsrefno field.
     * @var        int
     */
    protected $brainsrefno;

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
     * Get the [autoctr] column value.
     *
     * @return int
     */
    public function getAutoctr()
    {

        return $this->autoctr;
    }

    /**
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {

        return $this->name;
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
     * Get the [locality] column value.
     *
     * @return string
     */
    public function getLocality()
    {

        return $this->locality;
    }

    /**
     * Get the [number] column value.
     *
     * @return int
     */
    public function getNumber()
    {

        return $this->number;
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
     * Get the [bodyweight] column value.
     *
     * @return double
     */
    public function getBodyweight()
    {

        return $this->bodyweight;
    }

    /**
     * Get the [brainweight] column value.
     *
     * @return double
     */
    public function getBrainweight()
    {

        return $this->brainweight;
    }

    /**
     * Get the [enccoeff] column value.
     *
     * @return double
     */
    public function getEnccoeff()
    {

        return $this->enccoeff;
    }

    /**
     * Get the [encindex] column value.
     *
     * @return int
     */
    public function getEncindex()
    {

        return $this->encindex;
    }

    /**
     * Get the [sl] column value.
     *
     * @return double
     */
    public function getSl()
    {

        return $this->sl;
    }

    /**
     * Get the [tl] column value.
     *
     * @return double
     */
    public function getTl()
    {

        return $this->tl;
    }

    /**
     * Get the [brainsrefno] column value.
     *
     * @return int
     */
    public function getBrainsrefno()
    {

        return $this->brainsrefno;
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
     * @return Brains The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = BrainsPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return Brains The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = BrainsPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [genus] column.
     *
     * @param  string $v new value
     * @return Brains The current object (for fluent API support)
     */
    public function setGenus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genus !== $v) {
            $this->genus = $v;
            $this->modifiedColumns[] = BrainsPeer::GENUS;
        }


        return $this;
    } // setGenus()

    /**
     * Set the value of [species] column.
     *
     * @param  string $v new value
     * @return Brains The current object (for fluent API support)
     */
    public function setSpecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->species !== $v) {
            $this->species = $v;
            $this->modifiedColumns[] = BrainsPeer::SPECIES;
        }


        return $this;
    } // setSpecies()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Brains The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = BrainsPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Brains The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = BrainsPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Brains The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = BrainsPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [number] column.
     *
     * @param  int $v new value
     * @return Brains The current object (for fluent API support)
     */
    public function setNumber($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->number !== $v) {
            $this->number = $v;
            $this->modifiedColumns[] = BrainsPeer::NUMBER;
        }


        return $this;
    } // setNumber()

    /**
     * Set the value of [year] column.
     *
     * @param  int $v new value
     * @return Brains The current object (for fluent API support)
     */
    public function setYear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->year !== $v) {
            $this->year = $v;
            $this->modifiedColumns[] = BrainsPeer::YEAR;
        }


        return $this;
    } // setYear()

    /**
     * Set the value of [bodyweight] column.
     *
     * @param  double $v new value
     * @return Brains The current object (for fluent API support)
     */
    public function setBodyweight($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->bodyweight !== $v) {
            $this->bodyweight = $v;
            $this->modifiedColumns[] = BrainsPeer::BODYWEIGHT;
        }


        return $this;
    } // setBodyweight()

    /**
     * Set the value of [brainweight] column.
     *
     * @param  double $v new value
     * @return Brains The current object (for fluent API support)
     */
    public function setBrainweight($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->brainweight !== $v) {
            $this->brainweight = $v;
            $this->modifiedColumns[] = BrainsPeer::BRAINWEIGHT;
        }


        return $this;
    } // setBrainweight()

    /**
     * Set the value of [enccoeff] column.
     *
     * @param  double $v new value
     * @return Brains The current object (for fluent API support)
     */
    public function setEnccoeff($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->enccoeff !== $v) {
            $this->enccoeff = $v;
            $this->modifiedColumns[] = BrainsPeer::ENCCOEFF;
        }


        return $this;
    } // setEnccoeff()

    /**
     * Set the value of [encindex] column.
     *
     * @param  int $v new value
     * @return Brains The current object (for fluent API support)
     */
    public function setEncindex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->encindex !== $v) {
            $this->encindex = $v;
            $this->modifiedColumns[] = BrainsPeer::ENCINDEX;
        }


        return $this;
    } // setEncindex()

    /**
     * Set the value of [sl] column.
     *
     * @param  double $v new value
     * @return Brains The current object (for fluent API support)
     */
    public function setSl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sl !== $v) {
            $this->sl = $v;
            $this->modifiedColumns[] = BrainsPeer::SL;
        }


        return $this;
    } // setSl()

    /**
     * Set the value of [tl] column.
     *
     * @param  double $v new value
     * @return Brains The current object (for fluent API support)
     */
    public function setTl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tl !== $v) {
            $this->tl = $v;
            $this->modifiedColumns[] = BrainsPeer::TL;
        }


        return $this;
    } // setTl()

    /**
     * Set the value of [brainsrefno] column.
     *
     * @param  int $v new value
     * @return Brains The current object (for fluent API support)
     */
    public function setBrainsrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->brainsrefno !== $v) {
            $this->brainsrefno = $v;
            $this->modifiedColumns[] = BrainsPeer::BRAINSREFNO;
        }


        return $this;
    } // setBrainsrefno()

    /**
     * Set the value of [remarks] column.
     *
     * @param  string $v new value
     * @return Brains The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[] = BrainsPeer::REMARKS;
        }


        return $this;
    } // setRemarks()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Brains The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = BrainsPeer::TS;
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
            $this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->genus = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->species = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->speccode = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->stockcode = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->locality = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->number = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->year = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->bodyweight = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->brainweight = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->enccoeff = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->encindex = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->sl = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->tl = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->brainsrefno = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->remarks = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->ts = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 18; // 18 = BrainsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Brains object", $e);
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
            $con = Propel::getConnection(BrainsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = BrainsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(BrainsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = BrainsQuery::create()
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
            $con = Propel::getConnection(BrainsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                BrainsPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = BrainsPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . BrainsPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(BrainsPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(BrainsPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`Name`';
        }
        if ($this->isColumnModified(BrainsPeer::GENUS)) {
            $modifiedColumns[':p' . $index++]  = '`Genus`';
        }
        if ($this->isColumnModified(BrainsPeer::SPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`Species`';
        }
        if ($this->isColumnModified(BrainsPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(BrainsPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(BrainsPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(BrainsPeer::NUMBER)) {
            $modifiedColumns[':p' . $index++]  = '`Number`';
        }
        if ($this->isColumnModified(BrainsPeer::YEAR)) {
            $modifiedColumns[':p' . $index++]  = '`Year`';
        }
        if ($this->isColumnModified(BrainsPeer::BODYWEIGHT)) {
            $modifiedColumns[':p' . $index++]  = '`BodyWeight`';
        }
        if ($this->isColumnModified(BrainsPeer::BRAINWEIGHT)) {
            $modifiedColumns[':p' . $index++]  = '`BrainWeight`';
        }
        if ($this->isColumnModified(BrainsPeer::ENCCOEFF)) {
            $modifiedColumns[':p' . $index++]  = '`EncCoeff`';
        }
        if ($this->isColumnModified(BrainsPeer::ENCINDEX)) {
            $modifiedColumns[':p' . $index++]  = '`EncIndex`';
        }
        if ($this->isColumnModified(BrainsPeer::SL)) {
            $modifiedColumns[':p' . $index++]  = '`SL`';
        }
        if ($this->isColumnModified(BrainsPeer::TL)) {
            $modifiedColumns[':p' . $index++]  = '`TL`';
        }
        if ($this->isColumnModified(BrainsPeer::BRAINSREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`BRAINSRefNo`';
        }
        if ($this->isColumnModified(BrainsPeer::REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`Remarks`';
        }
        if ($this->isColumnModified(BrainsPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `brains` (%s) VALUES (%s)',
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
                    case '`Name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
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
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`Number`':
                        $stmt->bindValue($identifier, $this->number, PDO::PARAM_INT);
                        break;
                    case '`Year`':
                        $stmt->bindValue($identifier, $this->year, PDO::PARAM_INT);
                        break;
                    case '`BodyWeight`':
                        $stmt->bindValue($identifier, $this->bodyweight, PDO::PARAM_STR);
                        break;
                    case '`BrainWeight`':
                        $stmt->bindValue($identifier, $this->brainweight, PDO::PARAM_STR);
                        break;
                    case '`EncCoeff`':
                        $stmt->bindValue($identifier, $this->enccoeff, PDO::PARAM_STR);
                        break;
                    case '`EncIndex`':
                        $stmt->bindValue($identifier, $this->encindex, PDO::PARAM_INT);
                        break;
                    case '`SL`':
                        $stmt->bindValue($identifier, $this->sl, PDO::PARAM_STR);
                        break;
                    case '`TL`':
                        $stmt->bindValue($identifier, $this->tl, PDO::PARAM_STR);
                        break;
                    case '`BRAINSRefNo`':
                        $stmt->bindValue($identifier, $this->brainsrefno, PDO::PARAM_INT);
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


            if (($retval = BrainsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = BrainsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getName();
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
                return $this->getLocality();
                break;
            case 7:
                return $this->getNumber();
                break;
            case 8:
                return $this->getYear();
                break;
            case 9:
                return $this->getBodyweight();
                break;
            case 10:
                return $this->getBrainweight();
                break;
            case 11:
                return $this->getEnccoeff();
                break;
            case 12:
                return $this->getEncindex();
                break;
            case 13:
                return $this->getSl();
                break;
            case 14:
                return $this->getTl();
                break;
            case 15:
                return $this->getBrainsrefno();
                break;
            case 16:
                return $this->getRemarks();
                break;
            case 17:
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
        if (isset($alreadyDumpedObjects['Brains'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Brains'][$this->getPrimaryKey()] = true;
        $keys = BrainsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getGenus(),
            $keys[3] => $this->getSpecies(),
            $keys[4] => $this->getSpeccode(),
            $keys[5] => $this->getStockcode(),
            $keys[6] => $this->getLocality(),
            $keys[7] => $this->getNumber(),
            $keys[8] => $this->getYear(),
            $keys[9] => $this->getBodyweight(),
            $keys[10] => $this->getBrainweight(),
            $keys[11] => $this->getEnccoeff(),
            $keys[12] => $this->getEncindex(),
            $keys[13] => $this->getSl(),
            $keys[14] => $this->getTl(),
            $keys[15] => $this->getBrainsrefno(),
            $keys[16] => $this->getRemarks(),
            $keys[17] => $this->getTs(),
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
        $pos = BrainsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setName($value);
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
                $this->setLocality($value);
                break;
            case 7:
                $this->setNumber($value);
                break;
            case 8:
                $this->setYear($value);
                break;
            case 9:
                $this->setBodyweight($value);
                break;
            case 10:
                $this->setBrainweight($value);
                break;
            case 11:
                $this->setEnccoeff($value);
                break;
            case 12:
                $this->setEncindex($value);
                break;
            case 13:
                $this->setSl($value);
                break;
            case 14:
                $this->setTl($value);
                break;
            case 15:
                $this->setBrainsrefno($value);
                break;
            case 16:
                $this->setRemarks($value);
                break;
            case 17:
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
        $keys = BrainsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setGenus($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSpecies($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSpeccode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setStockcode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLocality($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNumber($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setYear($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setBodyweight($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setBrainweight($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setEnccoeff($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setEncindex($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setSl($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setTl($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setBrainsrefno($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setRemarks($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setTs($arr[$keys[17]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(BrainsPeer::DATABASE_NAME);

        if ($this->isColumnModified(BrainsPeer::AUTOCTR)) $criteria->add(BrainsPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(BrainsPeer::NAME)) $criteria->add(BrainsPeer::NAME, $this->name);
        if ($this->isColumnModified(BrainsPeer::GENUS)) $criteria->add(BrainsPeer::GENUS, $this->genus);
        if ($this->isColumnModified(BrainsPeer::SPECIES)) $criteria->add(BrainsPeer::SPECIES, $this->species);
        if ($this->isColumnModified(BrainsPeer::SPECCODE)) $criteria->add(BrainsPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(BrainsPeer::STOCKCODE)) $criteria->add(BrainsPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(BrainsPeer::LOCALITY)) $criteria->add(BrainsPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(BrainsPeer::NUMBER)) $criteria->add(BrainsPeer::NUMBER, $this->number);
        if ($this->isColumnModified(BrainsPeer::YEAR)) $criteria->add(BrainsPeer::YEAR, $this->year);
        if ($this->isColumnModified(BrainsPeer::BODYWEIGHT)) $criteria->add(BrainsPeer::BODYWEIGHT, $this->bodyweight);
        if ($this->isColumnModified(BrainsPeer::BRAINWEIGHT)) $criteria->add(BrainsPeer::BRAINWEIGHT, $this->brainweight);
        if ($this->isColumnModified(BrainsPeer::ENCCOEFF)) $criteria->add(BrainsPeer::ENCCOEFF, $this->enccoeff);
        if ($this->isColumnModified(BrainsPeer::ENCINDEX)) $criteria->add(BrainsPeer::ENCINDEX, $this->encindex);
        if ($this->isColumnModified(BrainsPeer::SL)) $criteria->add(BrainsPeer::SL, $this->sl);
        if ($this->isColumnModified(BrainsPeer::TL)) $criteria->add(BrainsPeer::TL, $this->tl);
        if ($this->isColumnModified(BrainsPeer::BRAINSREFNO)) $criteria->add(BrainsPeer::BRAINSREFNO, $this->brainsrefno);
        if ($this->isColumnModified(BrainsPeer::REMARKS)) $criteria->add(BrainsPeer::REMARKS, $this->remarks);
        if ($this->isColumnModified(BrainsPeer::TS)) $criteria->add(BrainsPeer::TS, $this->ts);

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
        $criteria = new Criteria(BrainsPeer::DATABASE_NAME);
        $criteria->add(BrainsPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of Brains (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setGenus($this->getGenus());
        $copyObj->setSpecies($this->getSpecies());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setNumber($this->getNumber());
        $copyObj->setYear($this->getYear());
        $copyObj->setBodyweight($this->getBodyweight());
        $copyObj->setBrainweight($this->getBrainweight());
        $copyObj->setEnccoeff($this->getEnccoeff());
        $copyObj->setEncindex($this->getEncindex());
        $copyObj->setSl($this->getSl());
        $copyObj->setTl($this->getTl());
        $copyObj->setBrainsrefno($this->getBrainsrefno());
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
     * @return Brains Clone of current object.
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
     * @return BrainsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new BrainsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->name = null;
        $this->genus = null;
        $this->species = null;
        $this->speccode = null;
        $this->stockcode = null;
        $this->locality = null;
        $this->number = null;
        $this->year = null;
        $this->bodyweight = null;
        $this->brainweight = null;
        $this->enccoeff = null;
        $this->encindex = null;
        $this->sl = null;
        $this->tl = null;
        $this->brainsrefno = null;
        $this->remarks = null;
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
        return (string) $this->exportTo(BrainsPeer::DEFAULT_STRING_FORMAT);
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
