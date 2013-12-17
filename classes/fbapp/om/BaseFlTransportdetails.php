<?php


/**
 * Base class that represents a row from the 'fl_transportdetails' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFlTransportdetails extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FlTransportdetailsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FlTransportdetailsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the losscode field.
     * @var        int
     */
    protected $losscode;

    /**
     * The value for the transportmethod field.
     * @var        string
     */
    protected $transportmethod;

    /**
     * The value for the othertransportmethod field.
     * @var        string
     */
    protected $othertransportmethod;

    /**
     * The value for the distancetransported field.
     * @var        double
     */
    protected $distancetransported;

    /**
     * The value for the durationofjourney field.
     * @var        double
     */
    protected $durationofjourney;

    /**
     * The value for the storagemethod field.
     * @var        string
     */
    protected $storagemethod;

    /**
     * The value for the storagecontainers field.
     * @var        string
     */
    protected $storagecontainers;

    /**
     * The value for the storagetreatments field.
     * @var        string
     */
    protected $storagetreatments;

    /**
     * The value for the editable field.
     * Note: this column has a database default value of: '-1'
     * @var        string
     */
    protected $editable;

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
        $this->editable = '-1';
    }

    /**
     * Initializes internal state of BaseFlTransportdetails object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [losscode] column value.
     *
     * @return int
     */
    public function getLosscode()
    {

        return $this->losscode;
    }

    /**
     * Get the [transportmethod] column value.
     *
     * @return string
     */
    public function getTransportmethod()
    {

        return $this->transportmethod;
    }

    /**
     * Get the [othertransportmethod] column value.
     *
     * @return string
     */
    public function getOthertransportmethod()
    {

        return $this->othertransportmethod;
    }

    /**
     * Get the [distancetransported] column value.
     *
     * @return double
     */
    public function getDistancetransported()
    {

        return $this->distancetransported;
    }

    /**
     * Get the [durationofjourney] column value.
     *
     * @return double
     */
    public function getDurationofjourney()
    {

        return $this->durationofjourney;
    }

    /**
     * Get the [storagemethod] column value.
     *
     * @return string
     */
    public function getStoragemethod()
    {

        return $this->storagemethod;
    }

    /**
     * Get the [storagecontainers] column value.
     *
     * @return string
     */
    public function getStoragecontainers()
    {

        return $this->storagecontainers;
    }

    /**
     * Get the [storagetreatments] column value.
     *
     * @return string
     */
    public function getStoragetreatments()
    {

        return $this->storagetreatments;
    }

    /**
     * Get the [editable] column value.
     *
     * @return string
     */
    public function getEditable()
    {

        return $this->editable;
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
     * Set the value of [losscode] column.
     *
     * @param  int $v new value
     * @return FlTransportdetails The current object (for fluent API support)
     */
    public function setLosscode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->losscode !== $v) {
            $this->losscode = $v;
            $this->modifiedColumns[] = FlTransportdetailsPeer::LOSSCODE;
        }


        return $this;
    } // setLosscode()

    /**
     * Set the value of [transportmethod] column.
     *
     * @param  string $v new value
     * @return FlTransportdetails The current object (for fluent API support)
     */
    public function setTransportmethod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->transportmethod !== $v) {
            $this->transportmethod = $v;
            $this->modifiedColumns[] = FlTransportdetailsPeer::TRANSPORTMETHOD;
        }


        return $this;
    } // setTransportmethod()

    /**
     * Set the value of [othertransportmethod] column.
     *
     * @param  string $v new value
     * @return FlTransportdetails The current object (for fluent API support)
     */
    public function setOthertransportmethod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->othertransportmethod !== $v) {
            $this->othertransportmethod = $v;
            $this->modifiedColumns[] = FlTransportdetailsPeer::OTHERTRANSPORTMETHOD;
        }


        return $this;
    } // setOthertransportmethod()

    /**
     * Set the value of [distancetransported] column.
     *
     * @param  double $v new value
     * @return FlTransportdetails The current object (for fluent API support)
     */
    public function setDistancetransported($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->distancetransported !== $v) {
            $this->distancetransported = $v;
            $this->modifiedColumns[] = FlTransportdetailsPeer::DISTANCETRANSPORTED;
        }


        return $this;
    } // setDistancetransported()

    /**
     * Set the value of [durationofjourney] column.
     *
     * @param  double $v new value
     * @return FlTransportdetails The current object (for fluent API support)
     */
    public function setDurationofjourney($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->durationofjourney !== $v) {
            $this->durationofjourney = $v;
            $this->modifiedColumns[] = FlTransportdetailsPeer::DURATIONOFJOURNEY;
        }


        return $this;
    } // setDurationofjourney()

    /**
     * Set the value of [storagemethod] column.
     *
     * @param  string $v new value
     * @return FlTransportdetails The current object (for fluent API support)
     */
    public function setStoragemethod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->storagemethod !== $v) {
            $this->storagemethod = $v;
            $this->modifiedColumns[] = FlTransportdetailsPeer::STORAGEMETHOD;
        }


        return $this;
    } // setStoragemethod()

    /**
     * Set the value of [storagecontainers] column.
     *
     * @param  string $v new value
     * @return FlTransportdetails The current object (for fluent API support)
     */
    public function setStoragecontainers($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->storagecontainers !== $v) {
            $this->storagecontainers = $v;
            $this->modifiedColumns[] = FlTransportdetailsPeer::STORAGECONTAINERS;
        }


        return $this;
    } // setStoragecontainers()

    /**
     * Set the value of [storagetreatments] column.
     *
     * @param  string $v new value
     * @return FlTransportdetails The current object (for fluent API support)
     */
    public function setStoragetreatments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->storagetreatments !== $v) {
            $this->storagetreatments = $v;
            $this->modifiedColumns[] = FlTransportdetailsPeer::STORAGETREATMENTS;
        }


        return $this;
    } // setStoragetreatments()

    /**
     * Set the value of [editable] column.
     *
     * @param  string $v new value
     * @return FlTransportdetails The current object (for fluent API support)
     */
    public function setEditable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->editable !== $v) {
            $this->editable = $v;
            $this->modifiedColumns[] = FlTransportdetailsPeer::EDITABLE;
        }


        return $this;
    } // setEditable()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return FlTransportdetails The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = FlTransportdetailsPeer::TS;
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
            if ($this->editable !== '-1') {
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

            $this->losscode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->transportmethod = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->othertransportmethod = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->distancetransported = ($row[$startcol + 3] !== null) ? (double) $row[$startcol + 3] : null;
            $this->durationofjourney = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
            $this->storagemethod = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->storagecontainers = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->storagetreatments = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->editable = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->ts = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = FlTransportdetailsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating FlTransportdetails object", $e);
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
            $con = Propel::getConnection(FlTransportdetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FlTransportdetailsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(FlTransportdetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FlTransportdetailsQuery::create()
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
            $con = Propel::getConnection(FlTransportdetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                FlTransportdetailsPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(FlTransportdetailsPeer::LOSSCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Losscode`';
        }
        if ($this->isColumnModified(FlTransportdetailsPeer::TRANSPORTMETHOD)) {
            $modifiedColumns[':p' . $index++]  = '`TransportMethod`';
        }
        if ($this->isColumnModified(FlTransportdetailsPeer::OTHERTRANSPORTMETHOD)) {
            $modifiedColumns[':p' . $index++]  = '`OtherTransportMethod`';
        }
        if ($this->isColumnModified(FlTransportdetailsPeer::DISTANCETRANSPORTED)) {
            $modifiedColumns[':p' . $index++]  = '`DistanceTransported`';
        }
        if ($this->isColumnModified(FlTransportdetailsPeer::DURATIONOFJOURNEY)) {
            $modifiedColumns[':p' . $index++]  = '`DurationOfJourney`';
        }
        if ($this->isColumnModified(FlTransportdetailsPeer::STORAGEMETHOD)) {
            $modifiedColumns[':p' . $index++]  = '`StorageMethod`';
        }
        if ($this->isColumnModified(FlTransportdetailsPeer::STORAGECONTAINERS)) {
            $modifiedColumns[':p' . $index++]  = '`StorageContainers`';
        }
        if ($this->isColumnModified(FlTransportdetailsPeer::STORAGETREATMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`StorageTreatments`';
        }
        if ($this->isColumnModified(FlTransportdetailsPeer::EDITABLE)) {
            $modifiedColumns[':p' . $index++]  = '`Editable`';
        }
        if ($this->isColumnModified(FlTransportdetailsPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `fl_transportdetails` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`Losscode`':
                        $stmt->bindValue($identifier, $this->losscode, PDO::PARAM_INT);
                        break;
                    case '`TransportMethod`':
                        $stmt->bindValue($identifier, $this->transportmethod, PDO::PARAM_STR);
                        break;
                    case '`OtherTransportMethod`':
                        $stmt->bindValue($identifier, $this->othertransportmethod, PDO::PARAM_STR);
                        break;
                    case '`DistanceTransported`':
                        $stmt->bindValue($identifier, $this->distancetransported, PDO::PARAM_STR);
                        break;
                    case '`DurationOfJourney`':
                        $stmt->bindValue($identifier, $this->durationofjourney, PDO::PARAM_STR);
                        break;
                    case '`StorageMethod`':
                        $stmt->bindValue($identifier, $this->storagemethod, PDO::PARAM_STR);
                        break;
                    case '`StorageContainers`':
                        $stmt->bindValue($identifier, $this->storagecontainers, PDO::PARAM_STR);
                        break;
                    case '`StorageTreatments`':
                        $stmt->bindValue($identifier, $this->storagetreatments, PDO::PARAM_STR);
                        break;
                    case '`Editable`':
                        $stmt->bindValue($identifier, $this->editable, PDO::PARAM_STR);
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


            if (($retval = FlTransportdetailsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = FlTransportdetailsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getLosscode();
                break;
            case 1:
                return $this->getTransportmethod();
                break;
            case 2:
                return $this->getOthertransportmethod();
                break;
            case 3:
                return $this->getDistancetransported();
                break;
            case 4:
                return $this->getDurationofjourney();
                break;
            case 5:
                return $this->getStoragemethod();
                break;
            case 6:
                return $this->getStoragecontainers();
                break;
            case 7:
                return $this->getStoragetreatments();
                break;
            case 8:
                return $this->getEditable();
                break;
            case 9:
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
        if (isset($alreadyDumpedObjects['FlTransportdetails'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['FlTransportdetails'][$this->getPrimaryKey()] = true;
        $keys = FlTransportdetailsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getLosscode(),
            $keys[1] => $this->getTransportmethod(),
            $keys[2] => $this->getOthertransportmethod(),
            $keys[3] => $this->getDistancetransported(),
            $keys[4] => $this->getDurationofjourney(),
            $keys[5] => $this->getStoragemethod(),
            $keys[6] => $this->getStoragecontainers(),
            $keys[7] => $this->getStoragetreatments(),
            $keys[8] => $this->getEditable(),
            $keys[9] => $this->getTs(),
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
        $pos = FlTransportdetailsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setLosscode($value);
                break;
            case 1:
                $this->setTransportmethod($value);
                break;
            case 2:
                $this->setOthertransportmethod($value);
                break;
            case 3:
                $this->setDistancetransported($value);
                break;
            case 4:
                $this->setDurationofjourney($value);
                break;
            case 5:
                $this->setStoragemethod($value);
                break;
            case 6:
                $this->setStoragecontainers($value);
                break;
            case 7:
                $this->setStoragetreatments($value);
                break;
            case 8:
                $this->setEditable($value);
                break;
            case 9:
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
        $keys = FlTransportdetailsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setLosscode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setTransportmethod($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOthertransportmethod($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDistancetransported($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDurationofjourney($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setStoragemethod($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setStoragecontainers($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setStoragetreatments($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setEditable($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTs($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FlTransportdetailsPeer::DATABASE_NAME);

        if ($this->isColumnModified(FlTransportdetailsPeer::LOSSCODE)) $criteria->add(FlTransportdetailsPeer::LOSSCODE, $this->losscode);
        if ($this->isColumnModified(FlTransportdetailsPeer::TRANSPORTMETHOD)) $criteria->add(FlTransportdetailsPeer::TRANSPORTMETHOD, $this->transportmethod);
        if ($this->isColumnModified(FlTransportdetailsPeer::OTHERTRANSPORTMETHOD)) $criteria->add(FlTransportdetailsPeer::OTHERTRANSPORTMETHOD, $this->othertransportmethod);
        if ($this->isColumnModified(FlTransportdetailsPeer::DISTANCETRANSPORTED)) $criteria->add(FlTransportdetailsPeer::DISTANCETRANSPORTED, $this->distancetransported);
        if ($this->isColumnModified(FlTransportdetailsPeer::DURATIONOFJOURNEY)) $criteria->add(FlTransportdetailsPeer::DURATIONOFJOURNEY, $this->durationofjourney);
        if ($this->isColumnModified(FlTransportdetailsPeer::STORAGEMETHOD)) $criteria->add(FlTransportdetailsPeer::STORAGEMETHOD, $this->storagemethod);
        if ($this->isColumnModified(FlTransportdetailsPeer::STORAGECONTAINERS)) $criteria->add(FlTransportdetailsPeer::STORAGECONTAINERS, $this->storagecontainers);
        if ($this->isColumnModified(FlTransportdetailsPeer::STORAGETREATMENTS)) $criteria->add(FlTransportdetailsPeer::STORAGETREATMENTS, $this->storagetreatments);
        if ($this->isColumnModified(FlTransportdetailsPeer::EDITABLE)) $criteria->add(FlTransportdetailsPeer::EDITABLE, $this->editable);
        if ($this->isColumnModified(FlTransportdetailsPeer::TS)) $criteria->add(FlTransportdetailsPeer::TS, $this->ts);

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
        $criteria = new Criteria(FlTransportdetailsPeer::DATABASE_NAME);
        $criteria->add(FlTransportdetailsPeer::LOSSCODE, $this->losscode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getLosscode();
    }

    /**
     * Generic method to set the primary key (losscode column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setLosscode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getLosscode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of FlTransportdetails (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setTransportmethod($this->getTransportmethod());
        $copyObj->setOthertransportmethod($this->getOthertransportmethod());
        $copyObj->setDistancetransported($this->getDistancetransported());
        $copyObj->setDurationofjourney($this->getDurationofjourney());
        $copyObj->setStoragemethod($this->getStoragemethod());
        $copyObj->setStoragecontainers($this->getStoragecontainers());
        $copyObj->setStoragetreatments($this->getStoragetreatments());
        $copyObj->setEditable($this->getEditable());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setLosscode(NULL); // this is a auto-increment column, so set to default value
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
     * @return FlTransportdetails Clone of current object.
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
     * @return FlTransportdetailsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FlTransportdetailsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->losscode = null;
        $this->transportmethod = null;
        $this->othertransportmethod = null;
        $this->distancetransported = null;
        $this->durationofjourney = null;
        $this->storagemethod = null;
        $this->storagecontainers = null;
        $this->storagetreatments = null;
        $this->editable = null;
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
        return (string) $this->exportTo(FlTransportdetailsPeer::DEFAULT_STRING_FORMAT);
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
