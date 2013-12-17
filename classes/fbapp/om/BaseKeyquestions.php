<?php


/**
 * Base class that represents a row from the 'keyquestions' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseKeyquestions extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'KeyquestionsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        KeyquestionsPeer
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
     * The value for the keycode field.
     * @var        int
     */
    protected $keycode;

    /**
     * The value for the couplenum field.
     * @var        int
     */
    protected $couplenum;

    /**
     * The value for the couplepart field.
     * @var        string
     */
    protected $couplepart;

    /**
     * The value for the question field.
     * @var        string
     */
    protected $question;

    /**
     * The value for the nextcouple field.
     * @var        int
     */
    protected $nextcouple;

    /**
     * The value for the prevcouple field.
     * @var        int
     */
    protected $prevcouple;

    /**
     * The value for the ordnum field.
     * @var        int
     */
    protected $ordnum;

    /**
     * The value for the famcode field.
     * @var        int
     */
    protected $famcode;

    /**
     * The value for the genus field.
     * @var        string
     */
    protected $genus;

    /**
     * The value for the gencode field.
     * @var        int
     */
    protected $gencode;

    /**
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the syncode field.
     * @var        int
     */
    protected $syncode;

    /**
     * The value for the picname field.
     * @var        string
     */
    protected $picname;

    /**
     * The value for the nextkey field.
     * @var        int
     */
    protected $nextkey;

    /**
     * The value for the dateentered field.
     * @var        string
     */
    protected $dateentered;

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
     * Get the [keycode] column value.
     *
     * @return int
     */
    public function getKeycode()
    {

        return $this->keycode;
    }

    /**
     * Get the [couplenum] column value.
     *
     * @return int
     */
    public function getCouplenum()
    {

        return $this->couplenum;
    }

    /**
     * Get the [couplepart] column value.
     *
     * @return string
     */
    public function getCouplepart()
    {

        return $this->couplepart;
    }

    /**
     * Get the [question] column value.
     *
     * @return string
     */
    public function getQuestion()
    {

        return $this->question;
    }

    /**
     * Get the [nextcouple] column value.
     *
     * @return int
     */
    public function getNextcouple()
    {

        return $this->nextcouple;
    }

    /**
     * Get the [prevcouple] column value.
     *
     * @return int
     */
    public function getPrevcouple()
    {

        return $this->prevcouple;
    }

    /**
     * Get the [ordnum] column value.
     *
     * @return int
     */
    public function getOrdnum()
    {

        return $this->ordnum;
    }

    /**
     * Get the [famcode] column value.
     *
     * @return int
     */
    public function getFamcode()
    {

        return $this->famcode;
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
     * Get the [gencode] column value.
     *
     * @return int
     */
    public function getGencode()
    {

        return $this->gencode;
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
     * Get the [syncode] column value.
     *
     * @return int
     */
    public function getSyncode()
    {

        return $this->syncode;
    }

    /**
     * Get the [picname] column value.
     *
     * @return string
     */
    public function getPicname()
    {

        return $this->picname;
    }

    /**
     * Get the [nextkey] column value.
     *
     * @return int
     */
    public function getNextkey()
    {

        return $this->nextkey;
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
     * @return Keyquestions The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = KeyquestionsPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [keycode] column.
     *
     * @param  int $v new value
     * @return Keyquestions The current object (for fluent API support)
     */
    public function setKeycode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->keycode !== $v) {
            $this->keycode = $v;
            $this->modifiedColumns[] = KeyquestionsPeer::KEYCODE;
        }


        return $this;
    } // setKeycode()

    /**
     * Set the value of [couplenum] column.
     *
     * @param  int $v new value
     * @return Keyquestions The current object (for fluent API support)
     */
    public function setCouplenum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->couplenum !== $v) {
            $this->couplenum = $v;
            $this->modifiedColumns[] = KeyquestionsPeer::COUPLENUM;
        }


        return $this;
    } // setCouplenum()

    /**
     * Set the value of [couplepart] column.
     *
     * @param  string $v new value
     * @return Keyquestions The current object (for fluent API support)
     */
    public function setCouplepart($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->couplepart !== $v) {
            $this->couplepart = $v;
            $this->modifiedColumns[] = KeyquestionsPeer::COUPLEPART;
        }


        return $this;
    } // setCouplepart()

    /**
     * Set the value of [question] column.
     *
     * @param  string $v new value
     * @return Keyquestions The current object (for fluent API support)
     */
    public function setQuestion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->question !== $v) {
            $this->question = $v;
            $this->modifiedColumns[] = KeyquestionsPeer::QUESTION;
        }


        return $this;
    } // setQuestion()

    /**
     * Set the value of [nextcouple] column.
     *
     * @param  int $v new value
     * @return Keyquestions The current object (for fluent API support)
     */
    public function setNextcouple($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->nextcouple !== $v) {
            $this->nextcouple = $v;
            $this->modifiedColumns[] = KeyquestionsPeer::NEXTCOUPLE;
        }


        return $this;
    } // setNextcouple()

    /**
     * Set the value of [prevcouple] column.
     *
     * @param  int $v new value
     * @return Keyquestions The current object (for fluent API support)
     */
    public function setPrevcouple($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->prevcouple !== $v) {
            $this->prevcouple = $v;
            $this->modifiedColumns[] = KeyquestionsPeer::PREVCOUPLE;
        }


        return $this;
    } // setPrevcouple()

    /**
     * Set the value of [ordnum] column.
     *
     * @param  int $v new value
     * @return Keyquestions The current object (for fluent API support)
     */
    public function setOrdnum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ordnum !== $v) {
            $this->ordnum = $v;
            $this->modifiedColumns[] = KeyquestionsPeer::ORDNUM;
        }


        return $this;
    } // setOrdnum()

    /**
     * Set the value of [famcode] column.
     *
     * @param  int $v new value
     * @return Keyquestions The current object (for fluent API support)
     */
    public function setFamcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->famcode !== $v) {
            $this->famcode = $v;
            $this->modifiedColumns[] = KeyquestionsPeer::FAMCODE;
        }


        return $this;
    } // setFamcode()

    /**
     * Set the value of [genus] column.
     *
     * @param  string $v new value
     * @return Keyquestions The current object (for fluent API support)
     */
    public function setGenus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genus !== $v) {
            $this->genus = $v;
            $this->modifiedColumns[] = KeyquestionsPeer::GENUS;
        }


        return $this;
    } // setGenus()

    /**
     * Set the value of [gencode] column.
     *
     * @param  int $v new value
     * @return Keyquestions The current object (for fluent API support)
     */
    public function setGencode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gencode !== $v) {
            $this->gencode = $v;
            $this->modifiedColumns[] = KeyquestionsPeer::GENCODE;
        }


        return $this;
    } // setGencode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Keyquestions The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = KeyquestionsPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [syncode] column.
     *
     * @param  int $v new value
     * @return Keyquestions The current object (for fluent API support)
     */
    public function setSyncode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->syncode !== $v) {
            $this->syncode = $v;
            $this->modifiedColumns[] = KeyquestionsPeer::SYNCODE;
        }


        return $this;
    } // setSyncode()

    /**
     * Set the value of [picname] column.
     *
     * @param  string $v new value
     * @return Keyquestions The current object (for fluent API support)
     */
    public function setPicname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->picname !== $v) {
            $this->picname = $v;
            $this->modifiedColumns[] = KeyquestionsPeer::PICNAME;
        }


        return $this;
    } // setPicname()

    /**
     * Set the value of [nextkey] column.
     *
     * @param  int $v new value
     * @return Keyquestions The current object (for fluent API support)
     */
    public function setNextkey($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->nextkey !== $v) {
            $this->nextkey = $v;
            $this->modifiedColumns[] = KeyquestionsPeer::NEXTKEY;
        }


        return $this;
    } // setNextkey()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Keyquestions The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = KeyquestionsPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Keyquestions The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = KeyquestionsPeer::TS;
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
            $this->keycode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->couplenum = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->couplepart = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->question = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->nextcouple = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->prevcouple = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->ordnum = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->famcode = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->genus = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->gencode = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->speccode = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->syncode = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->picname = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->nextkey = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->dateentered = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->ts = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 17; // 17 = KeyquestionsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Keyquestions object", $e);
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
            $con = Propel::getConnection(KeyquestionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = KeyquestionsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(KeyquestionsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = KeyquestionsQuery::create()
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
            $con = Propel::getConnection(KeyquestionsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                KeyquestionsPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(KeyquestionsPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(KeyquestionsPeer::KEYCODE)) {
            $modifiedColumns[':p' . $index++]  = '`KeyCode`';
        }
        if ($this->isColumnModified(KeyquestionsPeer::COUPLENUM)) {
            $modifiedColumns[':p' . $index++]  = '`CoupleNum`';
        }
        if ($this->isColumnModified(KeyquestionsPeer::COUPLEPART)) {
            $modifiedColumns[':p' . $index++]  = '`CouplePart`';
        }
        if ($this->isColumnModified(KeyquestionsPeer::QUESTION)) {
            $modifiedColumns[':p' . $index++]  = '`Question`';
        }
        if ($this->isColumnModified(KeyquestionsPeer::NEXTCOUPLE)) {
            $modifiedColumns[':p' . $index++]  = '`NextCouple`';
        }
        if ($this->isColumnModified(KeyquestionsPeer::PREVCOUPLE)) {
            $modifiedColumns[':p' . $index++]  = '`PrevCouple`';
        }
        if ($this->isColumnModified(KeyquestionsPeer::ORDNUM)) {
            $modifiedColumns[':p' . $index++]  = '`OrdNum`';
        }
        if ($this->isColumnModified(KeyquestionsPeer::FAMCODE)) {
            $modifiedColumns[':p' . $index++]  = '`FamCode`';
        }
        if ($this->isColumnModified(KeyquestionsPeer::GENUS)) {
            $modifiedColumns[':p' . $index++]  = '`Genus`';
        }
        if ($this->isColumnModified(KeyquestionsPeer::GENCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Gencode`';
        }
        if ($this->isColumnModified(KeyquestionsPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(KeyquestionsPeer::SYNCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Syncode`';
        }
        if ($this->isColumnModified(KeyquestionsPeer::PICNAME)) {
            $modifiedColumns[':p' . $index++]  = '`PicName`';
        }
        if ($this->isColumnModified(KeyquestionsPeer::NEXTKEY)) {
            $modifiedColumns[':p' . $index++]  = '`NextKey`';
        }
        if ($this->isColumnModified(KeyquestionsPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(KeyquestionsPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `keyquestions` (%s) VALUES (%s)',
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
                    case '`KeyCode`':
                        $stmt->bindValue($identifier, $this->keycode, PDO::PARAM_INT);
                        break;
                    case '`CoupleNum`':
                        $stmt->bindValue($identifier, $this->couplenum, PDO::PARAM_INT);
                        break;
                    case '`CouplePart`':
                        $stmt->bindValue($identifier, $this->couplepart, PDO::PARAM_STR);
                        break;
                    case '`Question`':
                        $stmt->bindValue($identifier, $this->question, PDO::PARAM_STR);
                        break;
                    case '`NextCouple`':
                        $stmt->bindValue($identifier, $this->nextcouple, PDO::PARAM_INT);
                        break;
                    case '`PrevCouple`':
                        $stmt->bindValue($identifier, $this->prevcouple, PDO::PARAM_INT);
                        break;
                    case '`OrdNum`':
                        $stmt->bindValue($identifier, $this->ordnum, PDO::PARAM_INT);
                        break;
                    case '`FamCode`':
                        $stmt->bindValue($identifier, $this->famcode, PDO::PARAM_INT);
                        break;
                    case '`Genus`':
                        $stmt->bindValue($identifier, $this->genus, PDO::PARAM_STR);
                        break;
                    case '`Gencode`':
                        $stmt->bindValue($identifier, $this->gencode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`Syncode`':
                        $stmt->bindValue($identifier, $this->syncode, PDO::PARAM_INT);
                        break;
                    case '`PicName`':
                        $stmt->bindValue($identifier, $this->picname, PDO::PARAM_STR);
                        break;
                    case '`NextKey`':
                        $stmt->bindValue($identifier, $this->nextkey, PDO::PARAM_INT);
                        break;
                    case '`DateEntered`':
                        $stmt->bindValue($identifier, $this->dateentered, PDO::PARAM_STR);
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
        $this->setKeycode($pk);

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


            if (($retval = KeyquestionsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = KeyquestionsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getKeycode();
                break;
            case 2:
                return $this->getCouplenum();
                break;
            case 3:
                return $this->getCouplepart();
                break;
            case 4:
                return $this->getQuestion();
                break;
            case 5:
                return $this->getNextcouple();
                break;
            case 6:
                return $this->getPrevcouple();
                break;
            case 7:
                return $this->getOrdnum();
                break;
            case 8:
                return $this->getFamcode();
                break;
            case 9:
                return $this->getGenus();
                break;
            case 10:
                return $this->getGencode();
                break;
            case 11:
                return $this->getSpeccode();
                break;
            case 12:
                return $this->getSyncode();
                break;
            case 13:
                return $this->getPicname();
                break;
            case 14:
                return $this->getNextkey();
                break;
            case 15:
                return $this->getDateentered();
                break;
            case 16:
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
        if (isset($alreadyDumpedObjects['Keyquestions'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Keyquestions'][serialize($this->getPrimaryKey())] = true;
        $keys = KeyquestionsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getKeycode(),
            $keys[2] => $this->getCouplenum(),
            $keys[3] => $this->getCouplepart(),
            $keys[4] => $this->getQuestion(),
            $keys[5] => $this->getNextcouple(),
            $keys[6] => $this->getPrevcouple(),
            $keys[7] => $this->getOrdnum(),
            $keys[8] => $this->getFamcode(),
            $keys[9] => $this->getGenus(),
            $keys[10] => $this->getGencode(),
            $keys[11] => $this->getSpeccode(),
            $keys[12] => $this->getSyncode(),
            $keys[13] => $this->getPicname(),
            $keys[14] => $this->getNextkey(),
            $keys[15] => $this->getDateentered(),
            $keys[16] => $this->getTs(),
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
        $pos = KeyquestionsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setKeycode($value);
                break;
            case 2:
                $this->setCouplenum($value);
                break;
            case 3:
                $this->setCouplepart($value);
                break;
            case 4:
                $this->setQuestion($value);
                break;
            case 5:
                $this->setNextcouple($value);
                break;
            case 6:
                $this->setPrevcouple($value);
                break;
            case 7:
                $this->setOrdnum($value);
                break;
            case 8:
                $this->setFamcode($value);
                break;
            case 9:
                $this->setGenus($value);
                break;
            case 10:
                $this->setGencode($value);
                break;
            case 11:
                $this->setSpeccode($value);
                break;
            case 12:
                $this->setSyncode($value);
                break;
            case 13:
                $this->setPicname($value);
                break;
            case 14:
                $this->setNextkey($value);
                break;
            case 15:
                $this->setDateentered($value);
                break;
            case 16:
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
        $keys = KeyquestionsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setKeycode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCouplenum($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCouplepart($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setQuestion($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setNextcouple($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPrevcouple($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setOrdnum($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setFamcode($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setGenus($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setGencode($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setSpeccode($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setSyncode($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setPicname($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setNextkey($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDateentered($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setTs($arr[$keys[16]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(KeyquestionsPeer::DATABASE_NAME);

        if ($this->isColumnModified(KeyquestionsPeer::AUTOCTR)) $criteria->add(KeyquestionsPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(KeyquestionsPeer::KEYCODE)) $criteria->add(KeyquestionsPeer::KEYCODE, $this->keycode);
        if ($this->isColumnModified(KeyquestionsPeer::COUPLENUM)) $criteria->add(KeyquestionsPeer::COUPLENUM, $this->couplenum);
        if ($this->isColumnModified(KeyquestionsPeer::COUPLEPART)) $criteria->add(KeyquestionsPeer::COUPLEPART, $this->couplepart);
        if ($this->isColumnModified(KeyquestionsPeer::QUESTION)) $criteria->add(KeyquestionsPeer::QUESTION, $this->question);
        if ($this->isColumnModified(KeyquestionsPeer::NEXTCOUPLE)) $criteria->add(KeyquestionsPeer::NEXTCOUPLE, $this->nextcouple);
        if ($this->isColumnModified(KeyquestionsPeer::PREVCOUPLE)) $criteria->add(KeyquestionsPeer::PREVCOUPLE, $this->prevcouple);
        if ($this->isColumnModified(KeyquestionsPeer::ORDNUM)) $criteria->add(KeyquestionsPeer::ORDNUM, $this->ordnum);
        if ($this->isColumnModified(KeyquestionsPeer::FAMCODE)) $criteria->add(KeyquestionsPeer::FAMCODE, $this->famcode);
        if ($this->isColumnModified(KeyquestionsPeer::GENUS)) $criteria->add(KeyquestionsPeer::GENUS, $this->genus);
        if ($this->isColumnModified(KeyquestionsPeer::GENCODE)) $criteria->add(KeyquestionsPeer::GENCODE, $this->gencode);
        if ($this->isColumnModified(KeyquestionsPeer::SPECCODE)) $criteria->add(KeyquestionsPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(KeyquestionsPeer::SYNCODE)) $criteria->add(KeyquestionsPeer::SYNCODE, $this->syncode);
        if ($this->isColumnModified(KeyquestionsPeer::PICNAME)) $criteria->add(KeyquestionsPeer::PICNAME, $this->picname);
        if ($this->isColumnModified(KeyquestionsPeer::NEXTKEY)) $criteria->add(KeyquestionsPeer::NEXTKEY, $this->nextkey);
        if ($this->isColumnModified(KeyquestionsPeer::DATEENTERED)) $criteria->add(KeyquestionsPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(KeyquestionsPeer::TS)) $criteria->add(KeyquestionsPeer::TS, $this->ts);

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
        $criteria = new Criteria(KeyquestionsPeer::DATABASE_NAME);
        $criteria->add(KeyquestionsPeer::KEYCODE, $this->keycode);
        $criteria->add(KeyquestionsPeer::COUPLENUM, $this->couplenum);
        $criteria->add(KeyquestionsPeer::COUPLEPART, $this->couplepart);

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
        $pks[0] = $this->getKeycode();
        $pks[1] = $this->getCouplenum();
        $pks[2] = $this->getCouplepart();

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
        $this->setKeycode($keys[0]);
        $this->setCouplenum($keys[1]);
        $this->setCouplepart($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getKeycode()) && (null === $this->getCouplenum()) && (null === $this->getCouplepart());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Keyquestions (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setKeycode($this->getKeycode());
        $copyObj->setCouplenum($this->getCouplenum());
        $copyObj->setCouplepart($this->getCouplepart());
        $copyObj->setQuestion($this->getQuestion());
        $copyObj->setNextcouple($this->getNextcouple());
        $copyObj->setPrevcouple($this->getPrevcouple());
        $copyObj->setOrdnum($this->getOrdnum());
        $copyObj->setFamcode($this->getFamcode());
        $copyObj->setGenus($this->getGenus());
        $copyObj->setGencode($this->getGencode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setSyncode($this->getSyncode());
        $copyObj->setPicname($this->getPicname());
        $copyObj->setNextkey($this->getNextkey());
        $copyObj->setDateentered($this->getDateentered());
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
     * @return Keyquestions Clone of current object.
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
     * @return KeyquestionsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new KeyquestionsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->keycode = null;
        $this->couplenum = null;
        $this->couplepart = null;
        $this->question = null;
        $this->nextcouple = null;
        $this->prevcouple = null;
        $this->ordnum = null;
        $this->famcode = null;
        $this->genus = null;
        $this->gencode = null;
        $this->speccode = null;
        $this->syncode = null;
        $this->picname = null;
        $this->nextkey = null;
        $this->dateentered = null;
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
        return (string) $this->exportTo(KeyquestionsPeer::DEFAULT_STRING_FORMAT);
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
