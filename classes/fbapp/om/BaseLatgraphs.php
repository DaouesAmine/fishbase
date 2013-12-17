<?php


/**
 * Base class that represents a row from the 'latgraphs' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseLatgraphs extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'LatgraphsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        LatgraphsPeer
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
     * The value for the northernmost field.
     * @var        int
     */
    protected $northernmost;

    /**
     * The value for the northsouths field.
     * @var        string
     */
    protected $northsouths;

    /**
     * The value for the southermost field.
     * @var        int
     */
    protected $southermost;

    /**
     * The value for the northsouthn field.
     * @var        string
     */
    protected $northsouthn;

    /**
     * The value for the latbeg field.
     * @var        int
     */
    protected $latbeg;

    /**
     * The value for the latend field.
     * @var        int
     */
    protected $latend;

    /**
     * The value for the loclass field.
     * @var        int
     */
    protected $loclass;

    /**
     * The value for the hiclass field.
     * @var        int
     */
    protected $hiclass;

    /**
     * The value for the totclass field.
     * @var        int
     */
    protected $totclass;

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
     * Get the [northernmost] column value.
     *
     * @return int
     */
    public function getNorthernmost()
    {

        return $this->northernmost;
    }

    /**
     * Get the [northsouths] column value.
     *
     * @return string
     */
    public function getNorthsouths()
    {

        return $this->northsouths;
    }

    /**
     * Get the [southermost] column value.
     *
     * @return int
     */
    public function getSouthermost()
    {

        return $this->southermost;
    }

    /**
     * Get the [northsouthn] column value.
     *
     * @return string
     */
    public function getNorthsouthn()
    {

        return $this->northsouthn;
    }

    /**
     * Get the [latbeg] column value.
     *
     * @return int
     */
    public function getLatbeg()
    {

        return $this->latbeg;
    }

    /**
     * Get the [latend] column value.
     *
     * @return int
     */
    public function getLatend()
    {

        return $this->latend;
    }

    /**
     * Get the [loclass] column value.
     *
     * @return int
     */
    public function getLoclass()
    {

        return $this->loclass;
    }

    /**
     * Get the [hiclass] column value.
     *
     * @return int
     */
    public function getHiclass()
    {

        return $this->hiclass;
    }

    /**
     * Get the [totclass] column value.
     *
     * @return int
     */
    public function getTotclass()
    {

        return $this->totclass;
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
     * @return Latgraphs The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = LatgraphsPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [northernmost] column.
     *
     * @param  int $v new value
     * @return Latgraphs The current object (for fluent API support)
     */
    public function setNorthernmost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->northernmost !== $v) {
            $this->northernmost = $v;
            $this->modifiedColumns[] = LatgraphsPeer::NORTHERNMOST;
        }


        return $this;
    } // setNorthernmost()

    /**
     * Set the value of [northsouths] column.
     *
     * @param  string $v new value
     * @return Latgraphs The current object (for fluent API support)
     */
    public function setNorthsouths($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northsouths !== $v) {
            $this->northsouths = $v;
            $this->modifiedColumns[] = LatgraphsPeer::NORTHSOUTHS;
        }


        return $this;
    } // setNorthsouths()

    /**
     * Set the value of [southermost] column.
     *
     * @param  int $v new value
     * @return Latgraphs The current object (for fluent API support)
     */
    public function setSouthermost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->southermost !== $v) {
            $this->southermost = $v;
            $this->modifiedColumns[] = LatgraphsPeer::SOUTHERMOST;
        }


        return $this;
    } // setSouthermost()

    /**
     * Set the value of [northsouthn] column.
     *
     * @param  string $v new value
     * @return Latgraphs The current object (for fluent API support)
     */
    public function setNorthsouthn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northsouthn !== $v) {
            $this->northsouthn = $v;
            $this->modifiedColumns[] = LatgraphsPeer::NORTHSOUTHN;
        }


        return $this;
    } // setNorthsouthn()

    /**
     * Set the value of [latbeg] column.
     *
     * @param  int $v new value
     * @return Latgraphs The current object (for fluent API support)
     */
    public function setLatbeg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->latbeg !== $v) {
            $this->latbeg = $v;
            $this->modifiedColumns[] = LatgraphsPeer::LATBEG;
        }


        return $this;
    } // setLatbeg()

    /**
     * Set the value of [latend] column.
     *
     * @param  int $v new value
     * @return Latgraphs The current object (for fluent API support)
     */
    public function setLatend($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->latend !== $v) {
            $this->latend = $v;
            $this->modifiedColumns[] = LatgraphsPeer::LATEND;
        }


        return $this;
    } // setLatend()

    /**
     * Set the value of [loclass] column.
     *
     * @param  int $v new value
     * @return Latgraphs The current object (for fluent API support)
     */
    public function setLoclass($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->loclass !== $v) {
            $this->loclass = $v;
            $this->modifiedColumns[] = LatgraphsPeer::LOCLASS;
        }


        return $this;
    } // setLoclass()

    /**
     * Set the value of [hiclass] column.
     *
     * @param  int $v new value
     * @return Latgraphs The current object (for fluent API support)
     */
    public function setHiclass($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hiclass !== $v) {
            $this->hiclass = $v;
            $this->modifiedColumns[] = LatgraphsPeer::HICLASS;
        }


        return $this;
    } // setHiclass()

    /**
     * Set the value of [totclass] column.
     *
     * @param  int $v new value
     * @return Latgraphs The current object (for fluent API support)
     */
    public function setTotclass($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->totclass !== $v) {
            $this->totclass = $v;
            $this->modifiedColumns[] = LatgraphsPeer::TOTCLASS;
        }


        return $this;
    } // setTotclass()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Latgraphs The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = LatgraphsPeer::TS;
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
            $this->northernmost = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->northsouths = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->southermost = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->northsouthn = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->latbeg = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->latend = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->loclass = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->hiclass = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->totclass = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->ts = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = LatgraphsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Latgraphs object", $e);
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
            $con = Propel::getConnection(LatgraphsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = LatgraphsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(LatgraphsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = LatgraphsQuery::create()
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
            $con = Propel::getConnection(LatgraphsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                LatgraphsPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(LatgraphsPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(LatgraphsPeer::NORTHERNMOST)) {
            $modifiedColumns[':p' . $index++]  = '`Northernmost`';
        }
        if ($this->isColumnModified(LatgraphsPeer::NORTHSOUTHS)) {
            $modifiedColumns[':p' . $index++]  = '`NorthSouthS`';
        }
        if ($this->isColumnModified(LatgraphsPeer::SOUTHERMOST)) {
            $modifiedColumns[':p' . $index++]  = '`Southermost`';
        }
        if ($this->isColumnModified(LatgraphsPeer::NORTHSOUTHN)) {
            $modifiedColumns[':p' . $index++]  = '`NorthSouthN`';
        }
        if ($this->isColumnModified(LatgraphsPeer::LATBEG)) {
            $modifiedColumns[':p' . $index++]  = '`LatBeg`';
        }
        if ($this->isColumnModified(LatgraphsPeer::LATEND)) {
            $modifiedColumns[':p' . $index++]  = '`LatEnd`';
        }
        if ($this->isColumnModified(LatgraphsPeer::LOCLASS)) {
            $modifiedColumns[':p' . $index++]  = '`LoClass`';
        }
        if ($this->isColumnModified(LatgraphsPeer::HICLASS)) {
            $modifiedColumns[':p' . $index++]  = '`HiClass`';
        }
        if ($this->isColumnModified(LatgraphsPeer::TOTCLASS)) {
            $modifiedColumns[':p' . $index++]  = '`TotClass`';
        }
        if ($this->isColumnModified(LatgraphsPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `latgraphs` (%s) VALUES (%s)',
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
                    case '`Northernmost`':
                        $stmt->bindValue($identifier, $this->northernmost, PDO::PARAM_INT);
                        break;
                    case '`NorthSouthS`':
                        $stmt->bindValue($identifier, $this->northsouths, PDO::PARAM_STR);
                        break;
                    case '`Southermost`':
                        $stmt->bindValue($identifier, $this->southermost, PDO::PARAM_INT);
                        break;
                    case '`NorthSouthN`':
                        $stmt->bindValue($identifier, $this->northsouthn, PDO::PARAM_STR);
                        break;
                    case '`LatBeg`':
                        $stmt->bindValue($identifier, $this->latbeg, PDO::PARAM_INT);
                        break;
                    case '`LatEnd`':
                        $stmt->bindValue($identifier, $this->latend, PDO::PARAM_INT);
                        break;
                    case '`LoClass`':
                        $stmt->bindValue($identifier, $this->loclass, PDO::PARAM_INT);
                        break;
                    case '`HiClass`':
                        $stmt->bindValue($identifier, $this->hiclass, PDO::PARAM_INT);
                        break;
                    case '`TotClass`':
                        $stmt->bindValue($identifier, $this->totclass, PDO::PARAM_INT);
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


            if (($retval = LatgraphsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = LatgraphsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getNorthernmost();
                break;
            case 2:
                return $this->getNorthsouths();
                break;
            case 3:
                return $this->getSouthermost();
                break;
            case 4:
                return $this->getNorthsouthn();
                break;
            case 5:
                return $this->getLatbeg();
                break;
            case 6:
                return $this->getLatend();
                break;
            case 7:
                return $this->getLoclass();
                break;
            case 8:
                return $this->getHiclass();
                break;
            case 9:
                return $this->getTotclass();
                break;
            case 10:
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
        if (isset($alreadyDumpedObjects['Latgraphs'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Latgraphs'][$this->getPrimaryKey()] = true;
        $keys = LatgraphsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getSpeccode(),
            $keys[1] => $this->getNorthernmost(),
            $keys[2] => $this->getNorthsouths(),
            $keys[3] => $this->getSouthermost(),
            $keys[4] => $this->getNorthsouthn(),
            $keys[5] => $this->getLatbeg(),
            $keys[6] => $this->getLatend(),
            $keys[7] => $this->getLoclass(),
            $keys[8] => $this->getHiclass(),
            $keys[9] => $this->getTotclass(),
            $keys[10] => $this->getTs(),
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
        $pos = LatgraphsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setNorthernmost($value);
                break;
            case 2:
                $this->setNorthsouths($value);
                break;
            case 3:
                $this->setSouthermost($value);
                break;
            case 4:
                $this->setNorthsouthn($value);
                break;
            case 5:
                $this->setLatbeg($value);
                break;
            case 6:
                $this->setLatend($value);
                break;
            case 7:
                $this->setLoclass($value);
                break;
            case 8:
                $this->setHiclass($value);
                break;
            case 9:
                $this->setTotclass($value);
                break;
            case 10:
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
        $keys = LatgraphsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setSpeccode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setNorthernmost($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setNorthsouths($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSouthermost($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNorthsouthn($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLatbeg($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLatend($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLoclass($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setHiclass($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTotclass($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTs($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(LatgraphsPeer::DATABASE_NAME);

        if ($this->isColumnModified(LatgraphsPeer::SPECCODE)) $criteria->add(LatgraphsPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(LatgraphsPeer::NORTHERNMOST)) $criteria->add(LatgraphsPeer::NORTHERNMOST, $this->northernmost);
        if ($this->isColumnModified(LatgraphsPeer::NORTHSOUTHS)) $criteria->add(LatgraphsPeer::NORTHSOUTHS, $this->northsouths);
        if ($this->isColumnModified(LatgraphsPeer::SOUTHERMOST)) $criteria->add(LatgraphsPeer::SOUTHERMOST, $this->southermost);
        if ($this->isColumnModified(LatgraphsPeer::NORTHSOUTHN)) $criteria->add(LatgraphsPeer::NORTHSOUTHN, $this->northsouthn);
        if ($this->isColumnModified(LatgraphsPeer::LATBEG)) $criteria->add(LatgraphsPeer::LATBEG, $this->latbeg);
        if ($this->isColumnModified(LatgraphsPeer::LATEND)) $criteria->add(LatgraphsPeer::LATEND, $this->latend);
        if ($this->isColumnModified(LatgraphsPeer::LOCLASS)) $criteria->add(LatgraphsPeer::LOCLASS, $this->loclass);
        if ($this->isColumnModified(LatgraphsPeer::HICLASS)) $criteria->add(LatgraphsPeer::HICLASS, $this->hiclass);
        if ($this->isColumnModified(LatgraphsPeer::TOTCLASS)) $criteria->add(LatgraphsPeer::TOTCLASS, $this->totclass);
        if ($this->isColumnModified(LatgraphsPeer::TS)) $criteria->add(LatgraphsPeer::TS, $this->ts);

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
        $criteria = new Criteria(LatgraphsPeer::DATABASE_NAME);
        $criteria->add(LatgraphsPeer::SPECCODE, $this->speccode);

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
     * @param object $copyObj An object of Latgraphs (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNorthernmost($this->getNorthernmost());
        $copyObj->setNorthsouths($this->getNorthsouths());
        $copyObj->setSouthermost($this->getSouthermost());
        $copyObj->setNorthsouthn($this->getNorthsouthn());
        $copyObj->setLatbeg($this->getLatbeg());
        $copyObj->setLatend($this->getLatend());
        $copyObj->setLoclass($this->getLoclass());
        $copyObj->setHiclass($this->getHiclass());
        $copyObj->setTotclass($this->getTotclass());
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
     * @return Latgraphs Clone of current object.
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
     * @return LatgraphsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new LatgraphsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->speccode = null;
        $this->northernmost = null;
        $this->northsouths = null;
        $this->southermost = null;
        $this->northsouthn = null;
        $this->latbeg = null;
        $this->latend = null;
        $this->loclass = null;
        $this->hiclass = null;
        $this->totclass = null;
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
        return (string) $this->exportTo(LatgraphsPeer::DEFAULT_STRING_FORMAT);
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
