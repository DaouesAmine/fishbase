<?php


/**
 * Base class that represents a row from the 'fl_storagedetails' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFlStoragedetails extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FlStoragedetailsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FlStoragedetailsPeer
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
     * The value for the distributionstage field.
     * @var        string
     */
    protected $distributionstage;

    /**
     * The value for the otherdistributionstage field.
     * @var        string
     */
    protected $otherdistributionstage;

    /**
     * The value for the durationofstoragemin field.
     * @var        double
     */
    protected $durationofstoragemin;

    /**
     * The value for the durationofstoragemax field.
     * @var        double
     */
    protected $durationofstoragemax;

    /**
     * The value for the storagemethod field.
     * @var        string
     */
    protected $storagemethod;

    /**
     * The value for the storagetemperaturemin field.
     * @var        double
     */
    protected $storagetemperaturemin;

    /**
     * The value for the storagetemperaturemax field.
     * @var        double
     */
    protected $storagetemperaturemax;

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
     * The value for the saltcontent field.
     * @var        double
     */
    protected $saltcontent;

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
     * Initializes internal state of BaseFlStoragedetails object.
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
     * Get the [distributionstage] column value.
     *
     * @return string
     */
    public function getDistributionstage()
    {

        return $this->distributionstage;
    }

    /**
     * Get the [otherdistributionstage] column value.
     *
     * @return string
     */
    public function getOtherdistributionstage()
    {

        return $this->otherdistributionstage;
    }

    /**
     * Get the [durationofstoragemin] column value.
     *
     * @return double
     */
    public function getDurationofstoragemin()
    {

        return $this->durationofstoragemin;
    }

    /**
     * Get the [durationofstoragemax] column value.
     *
     * @return double
     */
    public function getDurationofstoragemax()
    {

        return $this->durationofstoragemax;
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
     * Get the [storagetemperaturemin] column value.
     *
     * @return double
     */
    public function getStoragetemperaturemin()
    {

        return $this->storagetemperaturemin;
    }

    /**
     * Get the [storagetemperaturemax] column value.
     *
     * @return double
     */
    public function getStoragetemperaturemax()
    {

        return $this->storagetemperaturemax;
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
     * Get the [saltcontent] column value.
     *
     * @return double
     */
    public function getSaltcontent()
    {

        return $this->saltcontent;
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
     * @return FlStoragedetails The current object (for fluent API support)
     */
    public function setLosscode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->losscode !== $v) {
            $this->losscode = $v;
            $this->modifiedColumns[] = FlStoragedetailsPeer::LOSSCODE;
        }


        return $this;
    } // setLosscode()

    /**
     * Set the value of [distributionstage] column.
     *
     * @param  string $v new value
     * @return FlStoragedetails The current object (for fluent API support)
     */
    public function setDistributionstage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->distributionstage !== $v) {
            $this->distributionstage = $v;
            $this->modifiedColumns[] = FlStoragedetailsPeer::DISTRIBUTIONSTAGE;
        }


        return $this;
    } // setDistributionstage()

    /**
     * Set the value of [otherdistributionstage] column.
     *
     * @param  string $v new value
     * @return FlStoragedetails The current object (for fluent API support)
     */
    public function setOtherdistributionstage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->otherdistributionstage !== $v) {
            $this->otherdistributionstage = $v;
            $this->modifiedColumns[] = FlStoragedetailsPeer::OTHERDISTRIBUTIONSTAGE;
        }


        return $this;
    } // setOtherdistributionstage()

    /**
     * Set the value of [durationofstoragemin] column.
     *
     * @param  double $v new value
     * @return FlStoragedetails The current object (for fluent API support)
     */
    public function setDurationofstoragemin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->durationofstoragemin !== $v) {
            $this->durationofstoragemin = $v;
            $this->modifiedColumns[] = FlStoragedetailsPeer::DURATIONOFSTORAGEMIN;
        }


        return $this;
    } // setDurationofstoragemin()

    /**
     * Set the value of [durationofstoragemax] column.
     *
     * @param  double $v new value
     * @return FlStoragedetails The current object (for fluent API support)
     */
    public function setDurationofstoragemax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->durationofstoragemax !== $v) {
            $this->durationofstoragemax = $v;
            $this->modifiedColumns[] = FlStoragedetailsPeer::DURATIONOFSTORAGEMAX;
        }


        return $this;
    } // setDurationofstoragemax()

    /**
     * Set the value of [storagemethod] column.
     *
     * @param  string $v new value
     * @return FlStoragedetails The current object (for fluent API support)
     */
    public function setStoragemethod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->storagemethod !== $v) {
            $this->storagemethod = $v;
            $this->modifiedColumns[] = FlStoragedetailsPeer::STORAGEMETHOD;
        }


        return $this;
    } // setStoragemethod()

    /**
     * Set the value of [storagetemperaturemin] column.
     *
     * @param  double $v new value
     * @return FlStoragedetails The current object (for fluent API support)
     */
    public function setStoragetemperaturemin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->storagetemperaturemin !== $v) {
            $this->storagetemperaturemin = $v;
            $this->modifiedColumns[] = FlStoragedetailsPeer::STORAGETEMPERATUREMIN;
        }


        return $this;
    } // setStoragetemperaturemin()

    /**
     * Set the value of [storagetemperaturemax] column.
     *
     * @param  double $v new value
     * @return FlStoragedetails The current object (for fluent API support)
     */
    public function setStoragetemperaturemax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->storagetemperaturemax !== $v) {
            $this->storagetemperaturemax = $v;
            $this->modifiedColumns[] = FlStoragedetailsPeer::STORAGETEMPERATUREMAX;
        }


        return $this;
    } // setStoragetemperaturemax()

    /**
     * Set the value of [storagecontainers] column.
     *
     * @param  string $v new value
     * @return FlStoragedetails The current object (for fluent API support)
     */
    public function setStoragecontainers($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->storagecontainers !== $v) {
            $this->storagecontainers = $v;
            $this->modifiedColumns[] = FlStoragedetailsPeer::STORAGECONTAINERS;
        }


        return $this;
    } // setStoragecontainers()

    /**
     * Set the value of [storagetreatments] column.
     *
     * @param  string $v new value
     * @return FlStoragedetails The current object (for fluent API support)
     */
    public function setStoragetreatments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->storagetreatments !== $v) {
            $this->storagetreatments = $v;
            $this->modifiedColumns[] = FlStoragedetailsPeer::STORAGETREATMENTS;
        }


        return $this;
    } // setStoragetreatments()

    /**
     * Set the value of [saltcontent] column.
     *
     * @param  double $v new value
     * @return FlStoragedetails The current object (for fluent API support)
     */
    public function setSaltcontent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->saltcontent !== $v) {
            $this->saltcontent = $v;
            $this->modifiedColumns[] = FlStoragedetailsPeer::SALTCONTENT;
        }


        return $this;
    } // setSaltcontent()

    /**
     * Set the value of [editable] column.
     *
     * @param  string $v new value
     * @return FlStoragedetails The current object (for fluent API support)
     */
    public function setEditable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->editable !== $v) {
            $this->editable = $v;
            $this->modifiedColumns[] = FlStoragedetailsPeer::EDITABLE;
        }


        return $this;
    } // setEditable()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return FlStoragedetails The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = FlStoragedetailsPeer::TS;
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
            $this->distributionstage = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->otherdistributionstage = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->durationofstoragemin = ($row[$startcol + 3] !== null) ? (double) $row[$startcol + 3] : null;
            $this->durationofstoragemax = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
            $this->storagemethod = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->storagetemperaturemin = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->storagetemperaturemax = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->storagecontainers = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->storagetreatments = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->saltcontent = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->editable = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->ts = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 13; // 13 = FlStoragedetailsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating FlStoragedetails object", $e);
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
            $con = Propel::getConnection(FlStoragedetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FlStoragedetailsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(FlStoragedetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FlStoragedetailsQuery::create()
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
            $con = Propel::getConnection(FlStoragedetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                FlStoragedetailsPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(FlStoragedetailsPeer::LOSSCODE)) {
            $modifiedColumns[':p' . $index++]  = '`LossCode`';
        }
        if ($this->isColumnModified(FlStoragedetailsPeer::DISTRIBUTIONSTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`DistributionStage`';
        }
        if ($this->isColumnModified(FlStoragedetailsPeer::OTHERDISTRIBUTIONSTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`OtherDistributionStage`';
        }
        if ($this->isColumnModified(FlStoragedetailsPeer::DURATIONOFSTORAGEMIN)) {
            $modifiedColumns[':p' . $index++]  = '`DurationOfStorageMin`';
        }
        if ($this->isColumnModified(FlStoragedetailsPeer::DURATIONOFSTORAGEMAX)) {
            $modifiedColumns[':p' . $index++]  = '`DurationOfStorageMax`';
        }
        if ($this->isColumnModified(FlStoragedetailsPeer::STORAGEMETHOD)) {
            $modifiedColumns[':p' . $index++]  = '`StorageMethod`';
        }
        if ($this->isColumnModified(FlStoragedetailsPeer::STORAGETEMPERATUREMIN)) {
            $modifiedColumns[':p' . $index++]  = '`StorageTemperatureMin`';
        }
        if ($this->isColumnModified(FlStoragedetailsPeer::STORAGETEMPERATUREMAX)) {
            $modifiedColumns[':p' . $index++]  = '`StorageTemperatureMax`';
        }
        if ($this->isColumnModified(FlStoragedetailsPeer::STORAGECONTAINERS)) {
            $modifiedColumns[':p' . $index++]  = '`StorageContainers`';
        }
        if ($this->isColumnModified(FlStoragedetailsPeer::STORAGETREATMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`StorageTreatments`';
        }
        if ($this->isColumnModified(FlStoragedetailsPeer::SALTCONTENT)) {
            $modifiedColumns[':p' . $index++]  = '`SaltContent`';
        }
        if ($this->isColumnModified(FlStoragedetailsPeer::EDITABLE)) {
            $modifiedColumns[':p' . $index++]  = '`Editable`';
        }
        if ($this->isColumnModified(FlStoragedetailsPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `fl_storagedetails` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`LossCode`':
                        $stmt->bindValue($identifier, $this->losscode, PDO::PARAM_INT);
                        break;
                    case '`DistributionStage`':
                        $stmt->bindValue($identifier, $this->distributionstage, PDO::PARAM_STR);
                        break;
                    case '`OtherDistributionStage`':
                        $stmt->bindValue($identifier, $this->otherdistributionstage, PDO::PARAM_STR);
                        break;
                    case '`DurationOfStorageMin`':
                        $stmt->bindValue($identifier, $this->durationofstoragemin, PDO::PARAM_STR);
                        break;
                    case '`DurationOfStorageMax`':
                        $stmt->bindValue($identifier, $this->durationofstoragemax, PDO::PARAM_STR);
                        break;
                    case '`StorageMethod`':
                        $stmt->bindValue($identifier, $this->storagemethod, PDO::PARAM_STR);
                        break;
                    case '`StorageTemperatureMin`':
                        $stmt->bindValue($identifier, $this->storagetemperaturemin, PDO::PARAM_STR);
                        break;
                    case '`StorageTemperatureMax`':
                        $stmt->bindValue($identifier, $this->storagetemperaturemax, PDO::PARAM_STR);
                        break;
                    case '`StorageContainers`':
                        $stmt->bindValue($identifier, $this->storagecontainers, PDO::PARAM_STR);
                        break;
                    case '`StorageTreatments`':
                        $stmt->bindValue($identifier, $this->storagetreatments, PDO::PARAM_STR);
                        break;
                    case '`SaltContent`':
                        $stmt->bindValue($identifier, $this->saltcontent, PDO::PARAM_STR);
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


            if (($retval = FlStoragedetailsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = FlStoragedetailsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getDistributionstage();
                break;
            case 2:
                return $this->getOtherdistributionstage();
                break;
            case 3:
                return $this->getDurationofstoragemin();
                break;
            case 4:
                return $this->getDurationofstoragemax();
                break;
            case 5:
                return $this->getStoragemethod();
                break;
            case 6:
                return $this->getStoragetemperaturemin();
                break;
            case 7:
                return $this->getStoragetemperaturemax();
                break;
            case 8:
                return $this->getStoragecontainers();
                break;
            case 9:
                return $this->getStoragetreatments();
                break;
            case 10:
                return $this->getSaltcontent();
                break;
            case 11:
                return $this->getEditable();
                break;
            case 12:
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
        if (isset($alreadyDumpedObjects['FlStoragedetails'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['FlStoragedetails'][$this->getPrimaryKey()] = true;
        $keys = FlStoragedetailsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getLosscode(),
            $keys[1] => $this->getDistributionstage(),
            $keys[2] => $this->getOtherdistributionstage(),
            $keys[3] => $this->getDurationofstoragemin(),
            $keys[4] => $this->getDurationofstoragemax(),
            $keys[5] => $this->getStoragemethod(),
            $keys[6] => $this->getStoragetemperaturemin(),
            $keys[7] => $this->getStoragetemperaturemax(),
            $keys[8] => $this->getStoragecontainers(),
            $keys[9] => $this->getStoragetreatments(),
            $keys[10] => $this->getSaltcontent(),
            $keys[11] => $this->getEditable(),
            $keys[12] => $this->getTs(),
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
        $pos = FlStoragedetailsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setDistributionstage($value);
                break;
            case 2:
                $this->setOtherdistributionstage($value);
                break;
            case 3:
                $this->setDurationofstoragemin($value);
                break;
            case 4:
                $this->setDurationofstoragemax($value);
                break;
            case 5:
                $this->setStoragemethod($value);
                break;
            case 6:
                $this->setStoragetemperaturemin($value);
                break;
            case 7:
                $this->setStoragetemperaturemax($value);
                break;
            case 8:
                $this->setStoragecontainers($value);
                break;
            case 9:
                $this->setStoragetreatments($value);
                break;
            case 10:
                $this->setSaltcontent($value);
                break;
            case 11:
                $this->setEditable($value);
                break;
            case 12:
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
        $keys = FlStoragedetailsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setLosscode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setDistributionstage($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOtherdistributionstage($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDurationofstoragemin($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDurationofstoragemax($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setStoragemethod($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setStoragetemperaturemin($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setStoragetemperaturemax($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setStoragecontainers($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setStoragetreatments($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setSaltcontent($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setEditable($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setTs($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FlStoragedetailsPeer::DATABASE_NAME);

        if ($this->isColumnModified(FlStoragedetailsPeer::LOSSCODE)) $criteria->add(FlStoragedetailsPeer::LOSSCODE, $this->losscode);
        if ($this->isColumnModified(FlStoragedetailsPeer::DISTRIBUTIONSTAGE)) $criteria->add(FlStoragedetailsPeer::DISTRIBUTIONSTAGE, $this->distributionstage);
        if ($this->isColumnModified(FlStoragedetailsPeer::OTHERDISTRIBUTIONSTAGE)) $criteria->add(FlStoragedetailsPeer::OTHERDISTRIBUTIONSTAGE, $this->otherdistributionstage);
        if ($this->isColumnModified(FlStoragedetailsPeer::DURATIONOFSTORAGEMIN)) $criteria->add(FlStoragedetailsPeer::DURATIONOFSTORAGEMIN, $this->durationofstoragemin);
        if ($this->isColumnModified(FlStoragedetailsPeer::DURATIONOFSTORAGEMAX)) $criteria->add(FlStoragedetailsPeer::DURATIONOFSTORAGEMAX, $this->durationofstoragemax);
        if ($this->isColumnModified(FlStoragedetailsPeer::STORAGEMETHOD)) $criteria->add(FlStoragedetailsPeer::STORAGEMETHOD, $this->storagemethod);
        if ($this->isColumnModified(FlStoragedetailsPeer::STORAGETEMPERATUREMIN)) $criteria->add(FlStoragedetailsPeer::STORAGETEMPERATUREMIN, $this->storagetemperaturemin);
        if ($this->isColumnModified(FlStoragedetailsPeer::STORAGETEMPERATUREMAX)) $criteria->add(FlStoragedetailsPeer::STORAGETEMPERATUREMAX, $this->storagetemperaturemax);
        if ($this->isColumnModified(FlStoragedetailsPeer::STORAGECONTAINERS)) $criteria->add(FlStoragedetailsPeer::STORAGECONTAINERS, $this->storagecontainers);
        if ($this->isColumnModified(FlStoragedetailsPeer::STORAGETREATMENTS)) $criteria->add(FlStoragedetailsPeer::STORAGETREATMENTS, $this->storagetreatments);
        if ($this->isColumnModified(FlStoragedetailsPeer::SALTCONTENT)) $criteria->add(FlStoragedetailsPeer::SALTCONTENT, $this->saltcontent);
        if ($this->isColumnModified(FlStoragedetailsPeer::EDITABLE)) $criteria->add(FlStoragedetailsPeer::EDITABLE, $this->editable);
        if ($this->isColumnModified(FlStoragedetailsPeer::TS)) $criteria->add(FlStoragedetailsPeer::TS, $this->ts);

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
        $criteria = new Criteria(FlStoragedetailsPeer::DATABASE_NAME);
        $criteria->add(FlStoragedetailsPeer::LOSSCODE, $this->losscode);

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
     * @param object $copyObj An object of FlStoragedetails (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setDistributionstage($this->getDistributionstage());
        $copyObj->setOtherdistributionstage($this->getOtherdistributionstage());
        $copyObj->setDurationofstoragemin($this->getDurationofstoragemin());
        $copyObj->setDurationofstoragemax($this->getDurationofstoragemax());
        $copyObj->setStoragemethod($this->getStoragemethod());
        $copyObj->setStoragetemperaturemin($this->getStoragetemperaturemin());
        $copyObj->setStoragetemperaturemax($this->getStoragetemperaturemax());
        $copyObj->setStoragecontainers($this->getStoragecontainers());
        $copyObj->setStoragetreatments($this->getStoragetreatments());
        $copyObj->setSaltcontent($this->getSaltcontent());
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
     * @return FlStoragedetails Clone of current object.
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
     * @return FlStoragedetailsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FlStoragedetailsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->losscode = null;
        $this->distributionstage = null;
        $this->otherdistributionstage = null;
        $this->durationofstoragemin = null;
        $this->durationofstoragemax = null;
        $this->storagemethod = null;
        $this->storagetemperaturemin = null;
        $this->storagetemperaturemax = null;
        $this->storagecontainers = null;
        $this->storagetreatments = null;
        $this->saltcontent = null;
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
        return (string) $this->exportTo(FlStoragedetailsPeer::DEFAULT_STRING_FORMAT);
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
