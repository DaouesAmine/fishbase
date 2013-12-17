<?php


/**
 * Base class that represents a row from the 'fl_fishingdetails' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFlFishingdetails extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FlFishingdetailsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FlFishingdetailsPeer
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
     * The value for the fishingstagedetail field.
     * @var        string
     */
    protected $fishingstagedetail;

    /**
     * The value for the fishingmethod field.
     * @var        string
     */
    protected $fishingmethod;

    /**
     * The value for the otherfishingmethod field.
     * @var        string
     */
    protected $otherfishingmethod;

    /**
     * The value for the fishinggearinwater field.
     * @var        string
     */
    protected $fishinggearinwater;

    /**
     * The value for the hoursuntillanding field.
     * @var        string
     */
    protected $hoursuntillanding;

    /**
     * The value for the storagemethodboat field.
     * @var        string
     */
    protected $storagemethodboat;

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
     * Initializes internal state of BaseFlFishingdetails object.
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
     * Get the [fishingstagedetail] column value.
     *
     * @return string
     */
    public function getFishingstagedetail()
    {

        return $this->fishingstagedetail;
    }

    /**
     * Get the [fishingmethod] column value.
     *
     * @return string
     */
    public function getFishingmethod()
    {

        return $this->fishingmethod;
    }

    /**
     * Get the [otherfishingmethod] column value.
     *
     * @return string
     */
    public function getOtherfishingmethod()
    {

        return $this->otherfishingmethod;
    }

    /**
     * Get the [fishinggearinwater] column value.
     *
     * @return string
     */
    public function getFishinggearinwater()
    {

        return $this->fishinggearinwater;
    }

    /**
     * Get the [hoursuntillanding] column value.
     *
     * @return string
     */
    public function getHoursuntillanding()
    {

        return $this->hoursuntillanding;
    }

    /**
     * Get the [storagemethodboat] column value.
     *
     * @return string
     */
    public function getStoragemethodboat()
    {

        return $this->storagemethodboat;
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
     * @return FlFishingdetails The current object (for fluent API support)
     */
    public function setLosscode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->losscode !== $v) {
            $this->losscode = $v;
            $this->modifiedColumns[] = FlFishingdetailsPeer::LOSSCODE;
        }


        return $this;
    } // setLosscode()

    /**
     * Set the value of [fishingstagedetail] column.
     *
     * @param  string $v new value
     * @return FlFishingdetails The current object (for fluent API support)
     */
    public function setFishingstagedetail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fishingstagedetail !== $v) {
            $this->fishingstagedetail = $v;
            $this->modifiedColumns[] = FlFishingdetailsPeer::FISHINGSTAGEDETAIL;
        }


        return $this;
    } // setFishingstagedetail()

    /**
     * Set the value of [fishingmethod] column.
     *
     * @param  string $v new value
     * @return FlFishingdetails The current object (for fluent API support)
     */
    public function setFishingmethod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fishingmethod !== $v) {
            $this->fishingmethod = $v;
            $this->modifiedColumns[] = FlFishingdetailsPeer::FISHINGMETHOD;
        }


        return $this;
    } // setFishingmethod()

    /**
     * Set the value of [otherfishingmethod] column.
     *
     * @param  string $v new value
     * @return FlFishingdetails The current object (for fluent API support)
     */
    public function setOtherfishingmethod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->otherfishingmethod !== $v) {
            $this->otherfishingmethod = $v;
            $this->modifiedColumns[] = FlFishingdetailsPeer::OTHERFISHINGMETHOD;
        }


        return $this;
    } // setOtherfishingmethod()

    /**
     * Set the value of [fishinggearinwater] column.
     *
     * @param  string $v new value
     * @return FlFishingdetails The current object (for fluent API support)
     */
    public function setFishinggearinwater($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fishinggearinwater !== $v) {
            $this->fishinggearinwater = $v;
            $this->modifiedColumns[] = FlFishingdetailsPeer::FISHINGGEARINWATER;
        }


        return $this;
    } // setFishinggearinwater()

    /**
     * Set the value of [hoursuntillanding] column.
     *
     * @param  string $v new value
     * @return FlFishingdetails The current object (for fluent API support)
     */
    public function setHoursuntillanding($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hoursuntillanding !== $v) {
            $this->hoursuntillanding = $v;
            $this->modifiedColumns[] = FlFishingdetailsPeer::HOURSUNTILLANDING;
        }


        return $this;
    } // setHoursuntillanding()

    /**
     * Set the value of [storagemethodboat] column.
     *
     * @param  string $v new value
     * @return FlFishingdetails The current object (for fluent API support)
     */
    public function setStoragemethodboat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->storagemethodboat !== $v) {
            $this->storagemethodboat = $v;
            $this->modifiedColumns[] = FlFishingdetailsPeer::STORAGEMETHODBOAT;
        }


        return $this;
    } // setStoragemethodboat()

    /**
     * Set the value of [editable] column.
     *
     * @param  string $v new value
     * @return FlFishingdetails The current object (for fluent API support)
     */
    public function setEditable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->editable !== $v) {
            $this->editable = $v;
            $this->modifiedColumns[] = FlFishingdetailsPeer::EDITABLE;
        }


        return $this;
    } // setEditable()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return FlFishingdetails The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = FlFishingdetailsPeer::TS;
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
            $this->fishingstagedetail = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->fishingmethod = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->otherfishingmethod = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->fishinggearinwater = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->hoursuntillanding = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->storagemethodboat = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->editable = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->ts = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = FlFishingdetailsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating FlFishingdetails object", $e);
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
            $con = Propel::getConnection(FlFishingdetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FlFishingdetailsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(FlFishingdetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FlFishingdetailsQuery::create()
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
            $con = Propel::getConnection(FlFishingdetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                FlFishingdetailsPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(FlFishingdetailsPeer::LOSSCODE)) {
            $modifiedColumns[':p' . $index++]  = '`LossCode`';
        }
        if ($this->isColumnModified(FlFishingdetailsPeer::FISHINGSTAGEDETAIL)) {
            $modifiedColumns[':p' . $index++]  = '`FishingStageDetail`';
        }
        if ($this->isColumnModified(FlFishingdetailsPeer::FISHINGMETHOD)) {
            $modifiedColumns[':p' . $index++]  = '`FishingMethod`';
        }
        if ($this->isColumnModified(FlFishingdetailsPeer::OTHERFISHINGMETHOD)) {
            $modifiedColumns[':p' . $index++]  = '`OtherFishingMethod`';
        }
        if ($this->isColumnModified(FlFishingdetailsPeer::FISHINGGEARINWATER)) {
            $modifiedColumns[':p' . $index++]  = '`FishingGearInWater`';
        }
        if ($this->isColumnModified(FlFishingdetailsPeer::HOURSUNTILLANDING)) {
            $modifiedColumns[':p' . $index++]  = '`HoursUntilLanding`';
        }
        if ($this->isColumnModified(FlFishingdetailsPeer::STORAGEMETHODBOAT)) {
            $modifiedColumns[':p' . $index++]  = '`StorageMethodBoat`';
        }
        if ($this->isColumnModified(FlFishingdetailsPeer::EDITABLE)) {
            $modifiedColumns[':p' . $index++]  = '`Editable`';
        }
        if ($this->isColumnModified(FlFishingdetailsPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `fl_fishingdetails` (%s) VALUES (%s)',
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
                    case '`FishingStageDetail`':
                        $stmt->bindValue($identifier, $this->fishingstagedetail, PDO::PARAM_STR);
                        break;
                    case '`FishingMethod`':
                        $stmt->bindValue($identifier, $this->fishingmethod, PDO::PARAM_STR);
                        break;
                    case '`OtherFishingMethod`':
                        $stmt->bindValue($identifier, $this->otherfishingmethod, PDO::PARAM_STR);
                        break;
                    case '`FishingGearInWater`':
                        $stmt->bindValue($identifier, $this->fishinggearinwater, PDO::PARAM_STR);
                        break;
                    case '`HoursUntilLanding`':
                        $stmt->bindValue($identifier, $this->hoursuntillanding, PDO::PARAM_STR);
                        break;
                    case '`StorageMethodBoat`':
                        $stmt->bindValue($identifier, $this->storagemethodboat, PDO::PARAM_STR);
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


            if (($retval = FlFishingdetailsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = FlFishingdetailsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getFishingstagedetail();
                break;
            case 2:
                return $this->getFishingmethod();
                break;
            case 3:
                return $this->getOtherfishingmethod();
                break;
            case 4:
                return $this->getFishinggearinwater();
                break;
            case 5:
                return $this->getHoursuntillanding();
                break;
            case 6:
                return $this->getStoragemethodboat();
                break;
            case 7:
                return $this->getEditable();
                break;
            case 8:
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
        if (isset($alreadyDumpedObjects['FlFishingdetails'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['FlFishingdetails'][$this->getPrimaryKey()] = true;
        $keys = FlFishingdetailsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getLosscode(),
            $keys[1] => $this->getFishingstagedetail(),
            $keys[2] => $this->getFishingmethod(),
            $keys[3] => $this->getOtherfishingmethod(),
            $keys[4] => $this->getFishinggearinwater(),
            $keys[5] => $this->getHoursuntillanding(),
            $keys[6] => $this->getStoragemethodboat(),
            $keys[7] => $this->getEditable(),
            $keys[8] => $this->getTs(),
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
        $pos = FlFishingdetailsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setFishingstagedetail($value);
                break;
            case 2:
                $this->setFishingmethod($value);
                break;
            case 3:
                $this->setOtherfishingmethod($value);
                break;
            case 4:
                $this->setFishinggearinwater($value);
                break;
            case 5:
                $this->setHoursuntillanding($value);
                break;
            case 6:
                $this->setStoragemethodboat($value);
                break;
            case 7:
                $this->setEditable($value);
                break;
            case 8:
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
        $keys = FlFishingdetailsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setLosscode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFishingstagedetail($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setFishingmethod($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOtherfishingmethod($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setFishinggearinwater($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setHoursuntillanding($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setStoragemethodboat($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setEditable($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTs($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FlFishingdetailsPeer::DATABASE_NAME);

        if ($this->isColumnModified(FlFishingdetailsPeer::LOSSCODE)) $criteria->add(FlFishingdetailsPeer::LOSSCODE, $this->losscode);
        if ($this->isColumnModified(FlFishingdetailsPeer::FISHINGSTAGEDETAIL)) $criteria->add(FlFishingdetailsPeer::FISHINGSTAGEDETAIL, $this->fishingstagedetail);
        if ($this->isColumnModified(FlFishingdetailsPeer::FISHINGMETHOD)) $criteria->add(FlFishingdetailsPeer::FISHINGMETHOD, $this->fishingmethod);
        if ($this->isColumnModified(FlFishingdetailsPeer::OTHERFISHINGMETHOD)) $criteria->add(FlFishingdetailsPeer::OTHERFISHINGMETHOD, $this->otherfishingmethod);
        if ($this->isColumnModified(FlFishingdetailsPeer::FISHINGGEARINWATER)) $criteria->add(FlFishingdetailsPeer::FISHINGGEARINWATER, $this->fishinggearinwater);
        if ($this->isColumnModified(FlFishingdetailsPeer::HOURSUNTILLANDING)) $criteria->add(FlFishingdetailsPeer::HOURSUNTILLANDING, $this->hoursuntillanding);
        if ($this->isColumnModified(FlFishingdetailsPeer::STORAGEMETHODBOAT)) $criteria->add(FlFishingdetailsPeer::STORAGEMETHODBOAT, $this->storagemethodboat);
        if ($this->isColumnModified(FlFishingdetailsPeer::EDITABLE)) $criteria->add(FlFishingdetailsPeer::EDITABLE, $this->editable);
        if ($this->isColumnModified(FlFishingdetailsPeer::TS)) $criteria->add(FlFishingdetailsPeer::TS, $this->ts);

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
        $criteria = new Criteria(FlFishingdetailsPeer::DATABASE_NAME);
        $criteria->add(FlFishingdetailsPeer::LOSSCODE, $this->losscode);

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
     * @param object $copyObj An object of FlFishingdetails (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFishingstagedetail($this->getFishingstagedetail());
        $copyObj->setFishingmethod($this->getFishingmethod());
        $copyObj->setOtherfishingmethod($this->getOtherfishingmethod());
        $copyObj->setFishinggearinwater($this->getFishinggearinwater());
        $copyObj->setHoursuntillanding($this->getHoursuntillanding());
        $copyObj->setStoragemethodboat($this->getStoragemethodboat());
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
     * @return FlFishingdetails Clone of current object.
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
     * @return FlFishingdetailsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FlFishingdetailsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->losscode = null;
        $this->fishingstagedetail = null;
        $this->fishingmethod = null;
        $this->otherfishingmethod = null;
        $this->fishinggearinwater = null;
        $this->hoursuntillanding = null;
        $this->storagemethodboat = null;
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
        return (string) $this->exportTo(FlFishingdetailsPeer::DEFAULT_STRING_FORMAT);
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
