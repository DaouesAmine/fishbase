<?php


/**
 * Base class that represents a row from the 'myersdata' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMyersdata extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'MyersdataPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        MyersdataPeer
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
     * The value for the id field.
     * @var        string
     */
    protected $id;

    /**
     * The value for the reclag field.
     * @var        double
     */
    protected $reclag;

    /**
     * The value for the recyear field.
     * @var        double
     */
    protected $recyear;

    /**
     * The value for the ssb field.
     * @var        double
     */
    protected $ssb;

    /**
     * The value for the rec field.
     * @var        double
     */
    protected $rec;

    /**
     * The value for the ssbscaled field.
     * @var        double
     */
    protected $ssbscaled;

    /**
     * The value for the recscaled field.
     * @var        double
     */
    protected $recscaled;

    /**
     * The value for the land field.
     * @var        double
     */
    protected $land;

    /**
     * The value for the frpl field.
     * @var        double
     */
    protected $frpl;

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
     * Get the [id] column value.
     *
     * @return string
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [reclag] column value.
     *
     * @return double
     */
    public function getReclag()
    {

        return $this->reclag;
    }

    /**
     * Get the [recyear] column value.
     *
     * @return double
     */
    public function getRecyear()
    {

        return $this->recyear;
    }

    /**
     * Get the [ssb] column value.
     *
     * @return double
     */
    public function getSsb()
    {

        return $this->ssb;
    }

    /**
     * Get the [rec] column value.
     *
     * @return double
     */
    public function getRec()
    {

        return $this->rec;
    }

    /**
     * Get the [ssbscaled] column value.
     *
     * @return double
     */
    public function getSsbscaled()
    {

        return $this->ssbscaled;
    }

    /**
     * Get the [recscaled] column value.
     *
     * @return double
     */
    public function getRecscaled()
    {

        return $this->recscaled;
    }

    /**
     * Get the [land] column value.
     *
     * @return double
     */
    public function getLand()
    {

        return $this->land;
    }

    /**
     * Get the [frpl] column value.
     *
     * @return double
     */
    public function getFrpl()
    {

        return $this->frpl;
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
     * @return Myersdata The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = MyersdataPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [id] column.
     *
     * @param  string $v new value
     * @return Myersdata The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = MyersdataPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [reclag] column.
     *
     * @param  double $v new value
     * @return Myersdata The current object (for fluent API support)
     */
    public function setReclag($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->reclag !== $v) {
            $this->reclag = $v;
            $this->modifiedColumns[] = MyersdataPeer::RECLAG;
        }


        return $this;
    } // setReclag()

    /**
     * Set the value of [recyear] column.
     *
     * @param  double $v new value
     * @return Myersdata The current object (for fluent API support)
     */
    public function setRecyear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->recyear !== $v) {
            $this->recyear = $v;
            $this->modifiedColumns[] = MyersdataPeer::RECYEAR;
        }


        return $this;
    } // setRecyear()

    /**
     * Set the value of [ssb] column.
     *
     * @param  double $v new value
     * @return Myersdata The current object (for fluent API support)
     */
    public function setSsb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ssb !== $v) {
            $this->ssb = $v;
            $this->modifiedColumns[] = MyersdataPeer::SSB;
        }


        return $this;
    } // setSsb()

    /**
     * Set the value of [rec] column.
     *
     * @param  double $v new value
     * @return Myersdata The current object (for fluent API support)
     */
    public function setRec($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->rec !== $v) {
            $this->rec = $v;
            $this->modifiedColumns[] = MyersdataPeer::REC;
        }


        return $this;
    } // setRec()

    /**
     * Set the value of [ssbscaled] column.
     *
     * @param  double $v new value
     * @return Myersdata The current object (for fluent API support)
     */
    public function setSsbscaled($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ssbscaled !== $v) {
            $this->ssbscaled = $v;
            $this->modifiedColumns[] = MyersdataPeer::SSBSCALED;
        }


        return $this;
    } // setSsbscaled()

    /**
     * Set the value of [recscaled] column.
     *
     * @param  double $v new value
     * @return Myersdata The current object (for fluent API support)
     */
    public function setRecscaled($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->recscaled !== $v) {
            $this->recscaled = $v;
            $this->modifiedColumns[] = MyersdataPeer::RECSCALED;
        }


        return $this;
    } // setRecscaled()

    /**
     * Set the value of [land] column.
     *
     * @param  double $v new value
     * @return Myersdata The current object (for fluent API support)
     */
    public function setLand($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->land !== $v) {
            $this->land = $v;
            $this->modifiedColumns[] = MyersdataPeer::LAND;
        }


        return $this;
    } // setLand()

    /**
     * Set the value of [frpl] column.
     *
     * @param  double $v new value
     * @return Myersdata The current object (for fluent API support)
     */
    public function setFrpl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->frpl !== $v) {
            $this->frpl = $v;
            $this->modifiedColumns[] = MyersdataPeer::FRPL;
        }


        return $this;
    } // setFrpl()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Myersdata The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = MyersdataPeer::TS;
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
            $this->id = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->reclag = ($row[$startcol + 2] !== null) ? (double) $row[$startcol + 2] : null;
            $this->recyear = ($row[$startcol + 3] !== null) ? (double) $row[$startcol + 3] : null;
            $this->ssb = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
            $this->rec = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
            $this->ssbscaled = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->recscaled = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->land = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->frpl = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->ts = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = MyersdataPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Myersdata object", $e);
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
            $con = Propel::getConnection(MyersdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = MyersdataPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(MyersdataPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = MyersdataQuery::create()
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
            $con = Propel::getConnection(MyersdataPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                MyersdataPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(MyersdataPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(MyersdataPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(MyersdataPeer::RECLAG)) {
            $modifiedColumns[':p' . $index++]  = '`RecLag`';
        }
        if ($this->isColumnModified(MyersdataPeer::RECYEAR)) {
            $modifiedColumns[':p' . $index++]  = '`RecYear`';
        }
        if ($this->isColumnModified(MyersdataPeer::SSB)) {
            $modifiedColumns[':p' . $index++]  = '`ssb`';
        }
        if ($this->isColumnModified(MyersdataPeer::REC)) {
            $modifiedColumns[':p' . $index++]  = '`Rec`';
        }
        if ($this->isColumnModified(MyersdataPeer::SSBSCALED)) {
            $modifiedColumns[':p' . $index++]  = '`ssbscaled`';
        }
        if ($this->isColumnModified(MyersdataPeer::RECSCALED)) {
            $modifiedColumns[':p' . $index++]  = '`RecScaled`';
        }
        if ($this->isColumnModified(MyersdataPeer::LAND)) {
            $modifiedColumns[':p' . $index++]  = '`land`';
        }
        if ($this->isColumnModified(MyersdataPeer::FRPL)) {
            $modifiedColumns[':p' . $index++]  = '`frpl`';
        }
        if ($this->isColumnModified(MyersdataPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `myersdata` (%s) VALUES (%s)',
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
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_STR);
                        break;
                    case '`RecLag`':
                        $stmt->bindValue($identifier, $this->reclag, PDO::PARAM_STR);
                        break;
                    case '`RecYear`':
                        $stmt->bindValue($identifier, $this->recyear, PDO::PARAM_STR);
                        break;
                    case '`ssb`':
                        $stmt->bindValue($identifier, $this->ssb, PDO::PARAM_STR);
                        break;
                    case '`Rec`':
                        $stmt->bindValue($identifier, $this->rec, PDO::PARAM_STR);
                        break;
                    case '`ssbscaled`':
                        $stmt->bindValue($identifier, $this->ssbscaled, PDO::PARAM_STR);
                        break;
                    case '`RecScaled`':
                        $stmt->bindValue($identifier, $this->recscaled, PDO::PARAM_STR);
                        break;
                    case '`land`':
                        $stmt->bindValue($identifier, $this->land, PDO::PARAM_STR);
                        break;
                    case '`frpl`':
                        $stmt->bindValue($identifier, $this->frpl, PDO::PARAM_STR);
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
        $this->setId($pk);

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


            if (($retval = MyersdataPeer::doValidate($this, $columns)) !== true) {
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
        $pos = MyersdataPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getId();
                break;
            case 2:
                return $this->getReclag();
                break;
            case 3:
                return $this->getRecyear();
                break;
            case 4:
                return $this->getSsb();
                break;
            case 5:
                return $this->getRec();
                break;
            case 6:
                return $this->getSsbscaled();
                break;
            case 7:
                return $this->getRecscaled();
                break;
            case 8:
                return $this->getLand();
                break;
            case 9:
                return $this->getFrpl();
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
        if (isset($alreadyDumpedObjects['Myersdata'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Myersdata'][serialize($this->getPrimaryKey())] = true;
        $keys = MyersdataPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getId(),
            $keys[2] => $this->getReclag(),
            $keys[3] => $this->getRecyear(),
            $keys[4] => $this->getSsb(),
            $keys[5] => $this->getRec(),
            $keys[6] => $this->getSsbscaled(),
            $keys[7] => $this->getRecscaled(),
            $keys[8] => $this->getLand(),
            $keys[9] => $this->getFrpl(),
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
        $pos = MyersdataPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setId($value);
                break;
            case 2:
                $this->setReclag($value);
                break;
            case 3:
                $this->setRecyear($value);
                break;
            case 4:
                $this->setSsb($value);
                break;
            case 5:
                $this->setRec($value);
                break;
            case 6:
                $this->setSsbscaled($value);
                break;
            case 7:
                $this->setRecscaled($value);
                break;
            case 8:
                $this->setLand($value);
                break;
            case 9:
                $this->setFrpl($value);
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
        $keys = MyersdataPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setReclag($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRecyear($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSsb($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setRec($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSsbscaled($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setRecscaled($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLand($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setFrpl($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTs($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(MyersdataPeer::DATABASE_NAME);

        if ($this->isColumnModified(MyersdataPeer::AUTOCTR)) $criteria->add(MyersdataPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(MyersdataPeer::ID)) $criteria->add(MyersdataPeer::ID, $this->id);
        if ($this->isColumnModified(MyersdataPeer::RECLAG)) $criteria->add(MyersdataPeer::RECLAG, $this->reclag);
        if ($this->isColumnModified(MyersdataPeer::RECYEAR)) $criteria->add(MyersdataPeer::RECYEAR, $this->recyear);
        if ($this->isColumnModified(MyersdataPeer::SSB)) $criteria->add(MyersdataPeer::SSB, $this->ssb);
        if ($this->isColumnModified(MyersdataPeer::REC)) $criteria->add(MyersdataPeer::REC, $this->rec);
        if ($this->isColumnModified(MyersdataPeer::SSBSCALED)) $criteria->add(MyersdataPeer::SSBSCALED, $this->ssbscaled);
        if ($this->isColumnModified(MyersdataPeer::RECSCALED)) $criteria->add(MyersdataPeer::RECSCALED, $this->recscaled);
        if ($this->isColumnModified(MyersdataPeer::LAND)) $criteria->add(MyersdataPeer::LAND, $this->land);
        if ($this->isColumnModified(MyersdataPeer::FRPL)) $criteria->add(MyersdataPeer::FRPL, $this->frpl);
        if ($this->isColumnModified(MyersdataPeer::TS)) $criteria->add(MyersdataPeer::TS, $this->ts);

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
        $criteria = new Criteria(MyersdataPeer::DATABASE_NAME);
        $criteria->add(MyersdataPeer::ID, $this->id);
        $criteria->add(MyersdataPeer::RECYEAR, $this->recyear);

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
        $pks[0] = $this->getId();
        $pks[1] = $this->getRecyear();

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
        $this->setId($keys[0]);
        $this->setRecyear($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getId()) && (null === $this->getRecyear());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Myersdata (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setId($this->getId());
        $copyObj->setReclag($this->getReclag());
        $copyObj->setRecyear($this->getRecyear());
        $copyObj->setSsb($this->getSsb());
        $copyObj->setRec($this->getRec());
        $copyObj->setSsbscaled($this->getSsbscaled());
        $copyObj->setRecscaled($this->getRecscaled());
        $copyObj->setLand($this->getLand());
        $copyObj->setFrpl($this->getFrpl());
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
     * @return Myersdata Clone of current object.
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
     * @return MyersdataPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new MyersdataPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->id = null;
        $this->reclag = null;
        $this->recyear = null;
        $this->ssb = null;
        $this->rec = null;
        $this->ssbscaled = null;
        $this->recscaled = null;
        $this->land = null;
        $this->frpl = null;
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
        return (string) $this->exportTo(MyersdataPeer::DEFAULT_STRING_FORMAT);
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
