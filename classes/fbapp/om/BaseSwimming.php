<?php


/**
 * Base class that represents a row from the 'swimming' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseSwimming extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SwimmingPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SwimmingPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the swimrefmain field.
     * @var        int
     */
    protected $swimrefmain;

    /**
     * The value for the adulttype field.
     * @var        string
     */
    protected $adulttype;

    /**
     * The value for the adultmode field.
     * @var        string
     */
    protected $adultmode;

    /**
     * The value for the adultref field.
     * @var        int
     */
    protected $adultref;

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
     * The value for the aspectratio field.
     * @var        double
     */
    protected $aspectratio;

    /**
     * The value for the aspectref field.
     * @var        int
     */
    protected $aspectref;

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
     * Get the [speccode] column value.
     *
     * @return int
     */
    public function getSpeccode()
    {

        return $this->speccode;
    }

    /**
     * Get the [swimrefmain] column value.
     *
     * @return int
     */
    public function getSwimrefmain()
    {

        return $this->swimrefmain;
    }

    /**
     * Get the [adulttype] column value.
     *
     * @return string
     */
    public function getAdulttype()
    {

        return $this->adulttype;
    }

    /**
     * Get the [adultmode] column value.
     *
     * @return string
     */
    public function getAdultmode()
    {

        return $this->adultmode;
    }

    /**
     * Get the [adultref] column value.
     *
     * @return int
     */
    public function getAdultref()
    {

        return $this->adultref;
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
     * Get the [aspectratio] column value.
     *
     * @return double
     */
    public function getAspectratio()
    {

        return $this->aspectratio;
    }

    /**
     * Get the [aspectref] column value.
     *
     * @return int
     */
    public function getAspectref()
    {

        return $this->aspectref;
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
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Swimming The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = SwimmingPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [swimrefmain] column.
     *
     * @param  int $v new value
     * @return Swimming The current object (for fluent API support)
     */
    public function setSwimrefmain($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->swimrefmain !== $v) {
            $this->swimrefmain = $v;
            $this->modifiedColumns[] = SwimmingPeer::SWIMREFMAIN;
        }


        return $this;
    } // setSwimrefmain()

    /**
     * Set the value of [adulttype] column.
     *
     * @param  string $v new value
     * @return Swimming The current object (for fluent API support)
     */
    public function setAdulttype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adulttype !== $v) {
            $this->adulttype = $v;
            $this->modifiedColumns[] = SwimmingPeer::ADULTTYPE;
        }


        return $this;
    } // setAdulttype()

    /**
     * Set the value of [adultmode] column.
     *
     * @param  string $v new value
     * @return Swimming The current object (for fluent API support)
     */
    public function setAdultmode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adultmode !== $v) {
            $this->adultmode = $v;
            $this->modifiedColumns[] = SwimmingPeer::ADULTMODE;
        }


        return $this;
    } // setAdultmode()

    /**
     * Set the value of [adultref] column.
     *
     * @param  int $v new value
     * @return Swimming The current object (for fluent API support)
     */
    public function setAdultref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->adultref !== $v) {
            $this->adultref = $v;
            $this->modifiedColumns[] = SwimmingPeer::ADULTREF;
        }


        return $this;
    } // setAdultref()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return Swimming The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = SwimmingPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Swimming The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = SwimmingPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Swimming The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = SwimmingPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Swimming The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = SwimmingPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Swimming The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = SwimmingPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Swimming The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = SwimmingPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Swimming The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = SwimmingPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [aspectratio] column.
     *
     * @param  double $v new value
     * @return Swimming The current object (for fluent API support)
     */
    public function setAspectratio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->aspectratio !== $v) {
            $this->aspectratio = $v;
            $this->modifiedColumns[] = SwimmingPeer::ASPECTRATIO;
        }


        return $this;
    } // setAspectratio()

    /**
     * Set the value of [aspectref] column.
     *
     * @param  int $v new value
     * @return Swimming The current object (for fluent API support)
     */
    public function setAspectref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aspectref !== $v) {
            $this->aspectref = $v;
            $this->modifiedColumns[] = SwimmingPeer::ASPECTREF;
        }


        return $this;
    } // setAspectref()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Swimming The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = SwimmingPeer::TS;
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

            $this->speccode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->swimrefmain = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->adulttype = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->adultmode = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->adultref = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->comment = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->entered = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->dateentered = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->modified = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->datemodified = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->expert = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->datechecked = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->aspectratio = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->aspectref = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->ts = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = SwimmingPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Swimming object", $e);
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
            $con = Propel::getConnection(SwimmingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SwimmingPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(SwimmingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SwimmingQuery::create()
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
            $con = Propel::getConnection(SwimmingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                SwimmingPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(SwimmingPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(SwimmingPeer::SWIMREFMAIN)) {
            $modifiedColumns[':p' . $index++]  = '`SwimRefMain`';
        }
        if ($this->isColumnModified(SwimmingPeer::ADULTTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`AdultType`';
        }
        if ($this->isColumnModified(SwimmingPeer::ADULTMODE)) {
            $modifiedColumns[':p' . $index++]  = '`AdultMode`';
        }
        if ($this->isColumnModified(SwimmingPeer::ADULTREF)) {
            $modifiedColumns[':p' . $index++]  = '`AdultRef`';
        }
        if ($this->isColumnModified(SwimmingPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Comment`';
        }
        if ($this->isColumnModified(SwimmingPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(SwimmingPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(SwimmingPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(SwimmingPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(SwimmingPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(SwimmingPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(SwimmingPeer::ASPECTRATIO)) {
            $modifiedColumns[':p' . $index++]  = '`AspectRatio`';
        }
        if ($this->isColumnModified(SwimmingPeer::ASPECTREF)) {
            $modifiedColumns[':p' . $index++]  = '`AspectRef`';
        }
        if ($this->isColumnModified(SwimmingPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `swimming` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`SwimRefMain`':
                        $stmt->bindValue($identifier, $this->swimrefmain, PDO::PARAM_INT);
                        break;
                    case '`AdultType`':
                        $stmt->bindValue($identifier, $this->adulttype, PDO::PARAM_STR);
                        break;
                    case '`AdultMode`':
                        $stmt->bindValue($identifier, $this->adultmode, PDO::PARAM_STR);
                        break;
                    case '`AdultRef`':
                        $stmt->bindValue($identifier, $this->adultref, PDO::PARAM_INT);
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
                    case '`AspectRatio`':
                        $stmt->bindValue($identifier, $this->aspectratio, PDO::PARAM_STR);
                        break;
                    case '`AspectRef`':
                        $stmt->bindValue($identifier, $this->aspectref, PDO::PARAM_INT);
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


            if (($retval = SwimmingPeer::doValidate($this, $columns)) !== true) {
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
        $pos = SwimmingPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSpeccode();
                break;
            case 1:
                return $this->getSwimrefmain();
                break;
            case 2:
                return $this->getAdulttype();
                break;
            case 3:
                return $this->getAdultmode();
                break;
            case 4:
                return $this->getAdultref();
                break;
            case 5:
                return $this->getComment();
                break;
            case 6:
                return $this->getEntered();
                break;
            case 7:
                return $this->getDateentered();
                break;
            case 8:
                return $this->getModified();
                break;
            case 9:
                return $this->getDatemodified();
                break;
            case 10:
                return $this->getExpert();
                break;
            case 11:
                return $this->getDatechecked();
                break;
            case 12:
                return $this->getAspectratio();
                break;
            case 13:
                return $this->getAspectref();
                break;
            case 14:
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
        if (isset($alreadyDumpedObjects['Swimming'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Swimming'][$this->getPrimaryKey()] = true;
        $keys = SwimmingPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getSpeccode(),
            $keys[1] => $this->getSwimrefmain(),
            $keys[2] => $this->getAdulttype(),
            $keys[3] => $this->getAdultmode(),
            $keys[4] => $this->getAdultref(),
            $keys[5] => $this->getComment(),
            $keys[6] => $this->getEntered(),
            $keys[7] => $this->getDateentered(),
            $keys[8] => $this->getModified(),
            $keys[9] => $this->getDatemodified(),
            $keys[10] => $this->getExpert(),
            $keys[11] => $this->getDatechecked(),
            $keys[12] => $this->getAspectratio(),
            $keys[13] => $this->getAspectref(),
            $keys[14] => $this->getTs(),
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
        $pos = SwimmingPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSpeccode($value);
                break;
            case 1:
                $this->setSwimrefmain($value);
                break;
            case 2:
                $this->setAdulttype($value);
                break;
            case 3:
                $this->setAdultmode($value);
                break;
            case 4:
                $this->setAdultref($value);
                break;
            case 5:
                $this->setComment($value);
                break;
            case 6:
                $this->setEntered($value);
                break;
            case 7:
                $this->setDateentered($value);
                break;
            case 8:
                $this->setModified($value);
                break;
            case 9:
                $this->setDatemodified($value);
                break;
            case 10:
                $this->setExpert($value);
                break;
            case 11:
                $this->setDatechecked($value);
                break;
            case 12:
                $this->setAspectratio($value);
                break;
            case 13:
                $this->setAspectref($value);
                break;
            case 14:
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
        $keys = SwimmingPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setSpeccode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSwimrefmain($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAdulttype($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAdultmode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAdultref($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setComment($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setEntered($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDateentered($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setModified($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDatemodified($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setExpert($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDatechecked($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setAspectratio($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setAspectref($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setTs($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SwimmingPeer::DATABASE_NAME);

        if ($this->isColumnModified(SwimmingPeer::SPECCODE)) $criteria->add(SwimmingPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(SwimmingPeer::SWIMREFMAIN)) $criteria->add(SwimmingPeer::SWIMREFMAIN, $this->swimrefmain);
        if ($this->isColumnModified(SwimmingPeer::ADULTTYPE)) $criteria->add(SwimmingPeer::ADULTTYPE, $this->adulttype);
        if ($this->isColumnModified(SwimmingPeer::ADULTMODE)) $criteria->add(SwimmingPeer::ADULTMODE, $this->adultmode);
        if ($this->isColumnModified(SwimmingPeer::ADULTREF)) $criteria->add(SwimmingPeer::ADULTREF, $this->adultref);
        if ($this->isColumnModified(SwimmingPeer::COMMENT)) $criteria->add(SwimmingPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(SwimmingPeer::ENTERED)) $criteria->add(SwimmingPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(SwimmingPeer::DATEENTERED)) $criteria->add(SwimmingPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(SwimmingPeer::MODIFIED)) $criteria->add(SwimmingPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(SwimmingPeer::DATEMODIFIED)) $criteria->add(SwimmingPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(SwimmingPeer::EXPERT)) $criteria->add(SwimmingPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(SwimmingPeer::DATECHECKED)) $criteria->add(SwimmingPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(SwimmingPeer::ASPECTRATIO)) $criteria->add(SwimmingPeer::ASPECTRATIO, $this->aspectratio);
        if ($this->isColumnModified(SwimmingPeer::ASPECTREF)) $criteria->add(SwimmingPeer::ASPECTREF, $this->aspectref);
        if ($this->isColumnModified(SwimmingPeer::TS)) $criteria->add(SwimmingPeer::TS, $this->ts);

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
        $criteria = new Criteria(SwimmingPeer::DATABASE_NAME);
        $criteria->add(SwimmingPeer::SPECCODE, $this->speccode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getSpeccode();
    }

    /**
     * Generic method to set the primary key (speccode column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setSpeccode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getSpeccode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Swimming (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSwimrefmain($this->getSwimrefmain());
        $copyObj->setAdulttype($this->getAdulttype());
        $copyObj->setAdultmode($this->getAdultmode());
        $copyObj->setAdultref($this->getAdultref());
        $copyObj->setComment($this->getComment());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setAspectratio($this->getAspectratio());
        $copyObj->setAspectref($this->getAspectref());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setSpeccode(NULL); // this is a auto-increment column, so set to default value
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
     * @return Swimming Clone of current object.
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
     * @return SwimmingPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SwimmingPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->speccode = null;
        $this->swimrefmain = null;
        $this->adulttype = null;
        $this->adultmode = null;
        $this->adultref = null;
        $this->comment = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->aspectratio = null;
        $this->aspectref = null;
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
        return (string) $this->exportTo(SwimmingPeer::DEFAULT_STRING_FORMAT);
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
