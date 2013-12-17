<?php


/**
 * Base class that represents a row from the 'seafoodad' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseSeafoodad extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SeafoodadPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SeafoodadPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the autoctr field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $autoctr;

    /**
     * The value for the guideid field.
     * @var        int
     */
    protected $guideid;

    /**
     * The value for the commonname field.
     * @var        string
     */
    protected $commonname;

    /**
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the slbspeccode field.
     * @var        int
     */
    protected $slbspeccode;

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
     * The value for the seafoodgroup field.
     * @var        string
     */
    protected $seafoodgroup;

    /**
     * The value for the status field.
     * @var        string
     */
    protected $status;

    /**
     * The value for the locality field.
     * @var        string
     */
    protected $locality;

    /**
     * The value for the c_code_caught field.
     * @var        string
     */
    protected $c_code_caught;

    /**
     * The value for the guideurl field.
     * @var        string
     */
    protected $guideurl;

    /**
     * The value for the remarks field.
     * @var        string
     */
    protected $remarks;

    /**
     * The value for the dateentered field.
     * @var        string
     */
    protected $dateentered;

    /**
     * The value for the status_order field.
     * @var        int
     */
    protected $status_order;

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
        $this->autoctr = 0;
    }

    /**
     * Initializes internal state of BaseSeafoodad object.
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
     * Get the [guideid] column value.
     *
     * @return int
     */
    public function getGuideid()
    {

        return $this->guideid;
    }

    /**
     * Get the [commonname] column value.
     *
     * @return string
     */
    public function getCommonname()
    {

        return $this->commonname;
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
     * Get the [slbspeccode] column value.
     *
     * @return int
     */
    public function getSlbspeccode()
    {

        return $this->slbspeccode;
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
     * Get the [seafoodgroup] column value.
     *
     * @return string
     */
    public function getSeafoodgroup()
    {

        return $this->seafoodgroup;
    }

    /**
     * Get the [status] column value.
     *
     * @return string
     */
    public function getStatus()
    {

        return $this->status;
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
     * Get the [c_code_caught] column value.
     *
     * @return string
     */
    public function getCCodeCaught()
    {

        return $this->c_code_caught;
    }

    /**
     * Get the [guideurl] column value.
     *
     * @return string
     */
    public function getGuideurl()
    {

        return $this->guideurl;
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
     * Get the [status_order] column value.
     *
     * @return int
     */
    public function getStatusOrder()
    {

        return $this->status_order;
    }

    /**
     * Set the value of [autoctr] column.
     *
     * @param  int $v new value
     * @return Seafoodad The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = SeafoodadPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [guideid] column.
     *
     * @param  int $v new value
     * @return Seafoodad The current object (for fluent API support)
     */
    public function setGuideid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->guideid !== $v) {
            $this->guideid = $v;
            $this->modifiedColumns[] = SeafoodadPeer::GUIDEID;
        }


        return $this;
    } // setGuideid()

    /**
     * Set the value of [commonname] column.
     *
     * @param  string $v new value
     * @return Seafoodad The current object (for fluent API support)
     */
    public function setCommonname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname !== $v) {
            $this->commonname = $v;
            $this->modifiedColumns[] = SeafoodadPeer::COMMONNAME;
        }


        return $this;
    } // setCommonname()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Seafoodad The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = SeafoodadPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [slbspeccode] column.
     *
     * @param  int $v new value
     * @return Seafoodad The current object (for fluent API support)
     */
    public function setSlbspeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->slbspeccode !== $v) {
            $this->slbspeccode = $v;
            $this->modifiedColumns[] = SeafoodadPeer::SLBSPECCODE;
        }


        return $this;
    } // setSlbspeccode()

    /**
     * Set the value of [genus] column.
     *
     * @param  string $v new value
     * @return Seafoodad The current object (for fluent API support)
     */
    public function setGenus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genus !== $v) {
            $this->genus = $v;
            $this->modifiedColumns[] = SeafoodadPeer::GENUS;
        }


        return $this;
    } // setGenus()

    /**
     * Set the value of [species] column.
     *
     * @param  string $v new value
     * @return Seafoodad The current object (for fluent API support)
     */
    public function setSpecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->species !== $v) {
            $this->species = $v;
            $this->modifiedColumns[] = SeafoodadPeer::SPECIES;
        }


        return $this;
    } // setSpecies()

    /**
     * Set the value of [seafoodgroup] column.
     *
     * @param  string $v new value
     * @return Seafoodad The current object (for fluent API support)
     */
    public function setSeafoodgroup($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->seafoodgroup !== $v) {
            $this->seafoodgroup = $v;
            $this->modifiedColumns[] = SeafoodadPeer::SEAFOODGROUP;
        }


        return $this;
    } // setSeafoodgroup()

    /**
     * Set the value of [status] column.
     *
     * @param  string $v new value
     * @return Seafoodad The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[] = SeafoodadPeer::STATUS;
        }


        return $this;
    } // setStatus()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Seafoodad The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = SeafoodadPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [c_code_caught] column.
     *
     * @param  string $v new value
     * @return Seafoodad The current object (for fluent API support)
     */
    public function setCCodeCaught($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code_caught !== $v) {
            $this->c_code_caught = $v;
            $this->modifiedColumns[] = SeafoodadPeer::C_CODE_CAUGHT;
        }


        return $this;
    } // setCCodeCaught()

    /**
     * Set the value of [guideurl] column.
     *
     * @param  string $v new value
     * @return Seafoodad The current object (for fluent API support)
     */
    public function setGuideurl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->guideurl !== $v) {
            $this->guideurl = $v;
            $this->modifiedColumns[] = SeafoodadPeer::GUIDEURL;
        }


        return $this;
    } // setGuideurl()

    /**
     * Set the value of [remarks] column.
     *
     * @param  string $v new value
     * @return Seafoodad The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[] = SeafoodadPeer::REMARKS;
        }


        return $this;
    } // setRemarks()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Seafoodad The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = SeafoodadPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [status_order] column.
     *
     * @param  int $v new value
     * @return Seafoodad The current object (for fluent API support)
     */
    public function setStatusOrder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->status_order !== $v) {
            $this->status_order = $v;
            $this->modifiedColumns[] = SeafoodadPeer::STATUS_ORDER;
        }


        return $this;
    } // setStatusOrder()

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
            if ($this->autoctr !== 0) {
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
            $this->guideid = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->commonname = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->speccode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->slbspeccode = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->genus = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->species = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->seafoodgroup = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->status = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->locality = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->c_code_caught = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->guideurl = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->remarks = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->dateentered = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->status_order = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = SeafoodadPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Seafoodad object", $e);
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
            $con = Propel::getConnection(SeafoodadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SeafoodadPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(SeafoodadPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SeafoodadQuery::create()
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
            $con = Propel::getConnection(SeafoodadPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                SeafoodadPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(SeafoodadPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(SeafoodadPeer::GUIDEID)) {
            $modifiedColumns[':p' . $index++]  = '`GuideID`';
        }
        if ($this->isColumnModified(SeafoodadPeer::COMMONNAME)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName`';
        }
        if ($this->isColumnModified(SeafoodadPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Speccode`';
        }
        if ($this->isColumnModified(SeafoodadPeer::SLBSPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SLBSpeccode`';
        }
        if ($this->isColumnModified(SeafoodadPeer::GENUS)) {
            $modifiedColumns[':p' . $index++]  = '`Genus`';
        }
        if ($this->isColumnModified(SeafoodadPeer::SPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`Species`';
        }
        if ($this->isColumnModified(SeafoodadPeer::SEAFOODGROUP)) {
            $modifiedColumns[':p' . $index++]  = '`SeafoodGroup`';
        }
        if ($this->isColumnModified(SeafoodadPeer::STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`Status`';
        }
        if ($this->isColumnModified(SeafoodadPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(SeafoodadPeer::C_CODE_CAUGHT)) {
            $modifiedColumns[':p' . $index++]  = '`c_code_caught`';
        }
        if ($this->isColumnModified(SeafoodadPeer::GUIDEURL)) {
            $modifiedColumns[':p' . $index++]  = '`GuideURL`';
        }
        if ($this->isColumnModified(SeafoodadPeer::REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`Remarks`';
        }
        if ($this->isColumnModified(SeafoodadPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(SeafoodadPeer::STATUS_ORDER)) {
            $modifiedColumns[':p' . $index++]  = '`status_order`';
        }

        $sql = sprintf(
            'INSERT INTO `seafoodad` (%s) VALUES (%s)',
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
                    case '`GuideID`':
                        $stmt->bindValue($identifier, $this->guideid, PDO::PARAM_INT);
                        break;
                    case '`CommonName`':
                        $stmt->bindValue($identifier, $this->commonname, PDO::PARAM_STR);
                        break;
                    case '`Speccode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`SLBSpeccode`':
                        $stmt->bindValue($identifier, $this->slbspeccode, PDO::PARAM_INT);
                        break;
                    case '`Genus`':
                        $stmt->bindValue($identifier, $this->genus, PDO::PARAM_STR);
                        break;
                    case '`Species`':
                        $stmt->bindValue($identifier, $this->species, PDO::PARAM_STR);
                        break;
                    case '`SeafoodGroup`':
                        $stmt->bindValue($identifier, $this->seafoodgroup, PDO::PARAM_STR);
                        break;
                    case '`Status`':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_STR);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`c_code_caught`':
                        $stmt->bindValue($identifier, $this->c_code_caught, PDO::PARAM_STR);
                        break;
                    case '`GuideURL`':
                        $stmt->bindValue($identifier, $this->guideurl, PDO::PARAM_STR);
                        break;
                    case '`Remarks`':
                        $stmt->bindValue($identifier, $this->remarks, PDO::PARAM_STR);
                        break;
                    case '`DateEntered`':
                        $stmt->bindValue($identifier, $this->dateentered, PDO::PARAM_STR);
                        break;
                    case '`status_order`':
                        $stmt->bindValue($identifier, $this->status_order, PDO::PARAM_INT);
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


            if (($retval = SeafoodadPeer::doValidate($this, $columns)) !== true) {
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
        $pos = SeafoodadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getGuideid();
                break;
            case 2:
                return $this->getCommonname();
                break;
            case 3:
                return $this->getSpeccode();
                break;
            case 4:
                return $this->getSlbspeccode();
                break;
            case 5:
                return $this->getGenus();
                break;
            case 6:
                return $this->getSpecies();
                break;
            case 7:
                return $this->getSeafoodgroup();
                break;
            case 8:
                return $this->getStatus();
                break;
            case 9:
                return $this->getLocality();
                break;
            case 10:
                return $this->getCCodeCaught();
                break;
            case 11:
                return $this->getGuideurl();
                break;
            case 12:
                return $this->getRemarks();
                break;
            case 13:
                return $this->getDateentered();
                break;
            case 14:
                return $this->getStatusOrder();
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
        if (isset($alreadyDumpedObjects['Seafoodad'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Seafoodad'][$this->getPrimaryKey()] = true;
        $keys = SeafoodadPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getGuideid(),
            $keys[2] => $this->getCommonname(),
            $keys[3] => $this->getSpeccode(),
            $keys[4] => $this->getSlbspeccode(),
            $keys[5] => $this->getGenus(),
            $keys[6] => $this->getSpecies(),
            $keys[7] => $this->getSeafoodgroup(),
            $keys[8] => $this->getStatus(),
            $keys[9] => $this->getLocality(),
            $keys[10] => $this->getCCodeCaught(),
            $keys[11] => $this->getGuideurl(),
            $keys[12] => $this->getRemarks(),
            $keys[13] => $this->getDateentered(),
            $keys[14] => $this->getStatusOrder(),
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
        $pos = SeafoodadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setGuideid($value);
                break;
            case 2:
                $this->setCommonname($value);
                break;
            case 3:
                $this->setSpeccode($value);
                break;
            case 4:
                $this->setSlbspeccode($value);
                break;
            case 5:
                $this->setGenus($value);
                break;
            case 6:
                $this->setSpecies($value);
                break;
            case 7:
                $this->setSeafoodgroup($value);
                break;
            case 8:
                $this->setStatus($value);
                break;
            case 9:
                $this->setLocality($value);
                break;
            case 10:
                $this->setCCodeCaught($value);
                break;
            case 11:
                $this->setGuideurl($value);
                break;
            case 12:
                $this->setRemarks($value);
                break;
            case 13:
                $this->setDateentered($value);
                break;
            case 14:
                $this->setStatusOrder($value);
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
        $keys = SeafoodadPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setGuideid($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCommonname($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSpeccode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSlbspeccode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setGenus($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSpecies($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSeafoodgroup($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setStatus($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLocality($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCCodeCaught($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setGuideurl($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setRemarks($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDateentered($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setStatusOrder($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SeafoodadPeer::DATABASE_NAME);

        if ($this->isColumnModified(SeafoodadPeer::AUTOCTR)) $criteria->add(SeafoodadPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(SeafoodadPeer::GUIDEID)) $criteria->add(SeafoodadPeer::GUIDEID, $this->guideid);
        if ($this->isColumnModified(SeafoodadPeer::COMMONNAME)) $criteria->add(SeafoodadPeer::COMMONNAME, $this->commonname);
        if ($this->isColumnModified(SeafoodadPeer::SPECCODE)) $criteria->add(SeafoodadPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(SeafoodadPeer::SLBSPECCODE)) $criteria->add(SeafoodadPeer::SLBSPECCODE, $this->slbspeccode);
        if ($this->isColumnModified(SeafoodadPeer::GENUS)) $criteria->add(SeafoodadPeer::GENUS, $this->genus);
        if ($this->isColumnModified(SeafoodadPeer::SPECIES)) $criteria->add(SeafoodadPeer::SPECIES, $this->species);
        if ($this->isColumnModified(SeafoodadPeer::SEAFOODGROUP)) $criteria->add(SeafoodadPeer::SEAFOODGROUP, $this->seafoodgroup);
        if ($this->isColumnModified(SeafoodadPeer::STATUS)) $criteria->add(SeafoodadPeer::STATUS, $this->status);
        if ($this->isColumnModified(SeafoodadPeer::LOCALITY)) $criteria->add(SeafoodadPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(SeafoodadPeer::C_CODE_CAUGHT)) $criteria->add(SeafoodadPeer::C_CODE_CAUGHT, $this->c_code_caught);
        if ($this->isColumnModified(SeafoodadPeer::GUIDEURL)) $criteria->add(SeafoodadPeer::GUIDEURL, $this->guideurl);
        if ($this->isColumnModified(SeafoodadPeer::REMARKS)) $criteria->add(SeafoodadPeer::REMARKS, $this->remarks);
        if ($this->isColumnModified(SeafoodadPeer::DATEENTERED)) $criteria->add(SeafoodadPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(SeafoodadPeer::STATUS_ORDER)) $criteria->add(SeafoodadPeer::STATUS_ORDER, $this->status_order);

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
        $criteria = new Criteria(SeafoodadPeer::DATABASE_NAME);
        $criteria->add(SeafoodadPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of Seafoodad (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setGuideid($this->getGuideid());
        $copyObj->setCommonname($this->getCommonname());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setSlbspeccode($this->getSlbspeccode());
        $copyObj->setGenus($this->getGenus());
        $copyObj->setSpecies($this->getSpecies());
        $copyObj->setSeafoodgroup($this->getSeafoodgroup());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setCCodeCaught($this->getCCodeCaught());
        $copyObj->setGuideurl($this->getGuideurl());
        $copyObj->setRemarks($this->getRemarks());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setStatusOrder($this->getStatusOrder());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setAutoctr('0'); // this is a auto-increment column, so set to default value
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
     * @return Seafoodad Clone of current object.
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
     * @return SeafoodadPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SeafoodadPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->guideid = null;
        $this->commonname = null;
        $this->speccode = null;
        $this->slbspeccode = null;
        $this->genus = null;
        $this->species = null;
        $this->seafoodgroup = null;
        $this->status = null;
        $this->locality = null;
        $this->c_code_caught = null;
        $this->guideurl = null;
        $this->remarks = null;
        $this->dateentered = null;
        $this->status_order = null;
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
        return (string) $this->exportTo(SeafoodadPeer::DEFAULT_STRING_FORMAT);
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
