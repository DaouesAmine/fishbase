<?php


/**
 * Base class that represents a row from the 'foodtroph' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFoodtroph extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FoodtrophPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FoodtrophPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the foodlevel field.
     * @var        int
     */
    protected $foodlevel;

    /**
     * The value for the food field.
     * @var        string
     */
    protected $food;

    /**
     * The value for the tl field.
     * @var        double
     */
    protected $tl;

    /**
     * The value for the setl field.
     * @var        double
     */
    protected $setl;

    /**
     * The value for the refno field.
     * @var        double
     */
    protected $refno;

    /**
     * The value for the remark field.
     * @var        string
     */
    protected $remark;

    /**
     * The value for the maxlength field.
     * @var        double
     */
    protected $maxlength;

    /**
     * The value for the minlength field.
     * @var        double
     */
    protected $minlength;

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
     * Get the [foodlevel] column value.
     *
     * @return int
     */
    public function getFoodlevel()
    {

        return $this->foodlevel;
    }

    /**
     * Get the [food] column value.
     *
     * @return string
     */
    public function getFood()
    {

        return $this->food;
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
     * Get the [setl] column value.
     *
     * @return double
     */
    public function getSetl()
    {

        return $this->setl;
    }

    /**
     * Get the [refno] column value.
     *
     * @return double
     */
    public function getRefno()
    {

        return $this->refno;
    }

    /**
     * Get the [remark] column value.
     *
     * @return string
     */
    public function getRemark()
    {

        return $this->remark;
    }

    /**
     * Get the [maxlength] column value.
     *
     * @return double
     */
    public function getMaxlength()
    {

        return $this->maxlength;
    }

    /**
     * Get the [minlength] column value.
     *
     * @return double
     */
    public function getMinlength()
    {

        return $this->minlength;
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
     * Set the value of [foodlevel] column.
     *
     * @param  int $v new value
     * @return Foodtroph The current object (for fluent API support)
     */
    public function setFoodlevel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->foodlevel !== $v) {
            $this->foodlevel = $v;
            $this->modifiedColumns[] = FoodtrophPeer::FOODLEVEL;
        }


        return $this;
    } // setFoodlevel()

    /**
     * Set the value of [food] column.
     *
     * @param  string $v new value
     * @return Foodtroph The current object (for fluent API support)
     */
    public function setFood($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->food !== $v) {
            $this->food = $v;
            $this->modifiedColumns[] = FoodtrophPeer::FOOD;
        }


        return $this;
    } // setFood()

    /**
     * Set the value of [tl] column.
     *
     * @param  double $v new value
     * @return Foodtroph The current object (for fluent API support)
     */
    public function setTl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tl !== $v) {
            $this->tl = $v;
            $this->modifiedColumns[] = FoodtrophPeer::TL;
        }


        return $this;
    } // setTl()

    /**
     * Set the value of [setl] column.
     *
     * @param  double $v new value
     * @return Foodtroph The current object (for fluent API support)
     */
    public function setSetl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->setl !== $v) {
            $this->setl = $v;
            $this->modifiedColumns[] = FoodtrophPeer::SETL;
        }


        return $this;
    } // setSetl()

    /**
     * Set the value of [refno] column.
     *
     * @param  double $v new value
     * @return Foodtroph The current object (for fluent API support)
     */
    public function setRefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->refno !== $v) {
            $this->refno = $v;
            $this->modifiedColumns[] = FoodtrophPeer::REFNO;
        }


        return $this;
    } // setRefno()

    /**
     * Set the value of [remark] column.
     *
     * @param  string $v new value
     * @return Foodtroph The current object (for fluent API support)
     */
    public function setRemark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remark !== $v) {
            $this->remark = $v;
            $this->modifiedColumns[] = FoodtrophPeer::REMARK;
        }


        return $this;
    } // setRemark()

    /**
     * Set the value of [maxlength] column.
     *
     * @param  double $v new value
     * @return Foodtroph The current object (for fluent API support)
     */
    public function setMaxlength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->maxlength !== $v) {
            $this->maxlength = $v;
            $this->modifiedColumns[] = FoodtrophPeer::MAXLENGTH;
        }


        return $this;
    } // setMaxlength()

    /**
     * Set the value of [minlength] column.
     *
     * @param  double $v new value
     * @return Foodtroph The current object (for fluent API support)
     */
    public function setMinlength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->minlength !== $v) {
            $this->minlength = $v;
            $this->modifiedColumns[] = FoodtrophPeer::MINLENGTH;
        }


        return $this;
    } // setMinlength()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Foodtroph The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = FoodtrophPeer::TS;
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

            $this->foodlevel = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->food = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->tl = ($row[$startcol + 2] !== null) ? (double) $row[$startcol + 2] : null;
            $this->setl = ($row[$startcol + 3] !== null) ? (double) $row[$startcol + 3] : null;
            $this->refno = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
            $this->remark = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->maxlength = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->minlength = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->ts = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = FoodtrophPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Foodtroph object", $e);
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
            $con = Propel::getConnection(FoodtrophPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FoodtrophPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(FoodtrophPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FoodtrophQuery::create()
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
            $con = Propel::getConnection(FoodtrophPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                FoodtrophPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = FoodtrophPeer::FOODLEVEL;
        if (null !== $this->foodlevel) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . FoodtrophPeer::FOODLEVEL . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(FoodtrophPeer::FOODLEVEL)) {
            $modifiedColumns[':p' . $index++]  = '`FoodLevel`';
        }
        if ($this->isColumnModified(FoodtrophPeer::FOOD)) {
            $modifiedColumns[':p' . $index++]  = '`Food`';
        }
        if ($this->isColumnModified(FoodtrophPeer::TL)) {
            $modifiedColumns[':p' . $index++]  = '`TL`';
        }
        if ($this->isColumnModified(FoodtrophPeer::SETL)) {
            $modifiedColumns[':p' . $index++]  = '`SETL`';
        }
        if ($this->isColumnModified(FoodtrophPeer::REFNO)) {
            $modifiedColumns[':p' . $index++]  = '`RefNo`';
        }
        if ($this->isColumnModified(FoodtrophPeer::REMARK)) {
            $modifiedColumns[':p' . $index++]  = '`Remark`';
        }
        if ($this->isColumnModified(FoodtrophPeer::MAXLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`MaxLength`';
        }
        if ($this->isColumnModified(FoodtrophPeer::MINLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`MinLength`';
        }
        if ($this->isColumnModified(FoodtrophPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `foodtroph` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`FoodLevel`':
                        $stmt->bindValue($identifier, $this->foodlevel, PDO::PARAM_INT);
                        break;
                    case '`Food`':
                        $stmt->bindValue($identifier, $this->food, PDO::PARAM_STR);
                        break;
                    case '`TL`':
                        $stmt->bindValue($identifier, $this->tl, PDO::PARAM_STR);
                        break;
                    case '`SETL`':
                        $stmt->bindValue($identifier, $this->setl, PDO::PARAM_STR);
                        break;
                    case '`RefNo`':
                        $stmt->bindValue($identifier, $this->refno, PDO::PARAM_STR);
                        break;
                    case '`Remark`':
                        $stmt->bindValue($identifier, $this->remark, PDO::PARAM_STR);
                        break;
                    case '`MaxLength`':
                        $stmt->bindValue($identifier, $this->maxlength, PDO::PARAM_STR);
                        break;
                    case '`MinLength`':
                        $stmt->bindValue($identifier, $this->minlength, PDO::PARAM_STR);
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
        $this->setFoodlevel($pk);

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


            if (($retval = FoodtrophPeer::doValidate($this, $columns)) !== true) {
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
        $pos = FoodtrophPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getFoodlevel();
                break;
            case 1:
                return $this->getFood();
                break;
            case 2:
                return $this->getTl();
                break;
            case 3:
                return $this->getSetl();
                break;
            case 4:
                return $this->getRefno();
                break;
            case 5:
                return $this->getRemark();
                break;
            case 6:
                return $this->getMaxlength();
                break;
            case 7:
                return $this->getMinlength();
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
        if (isset($alreadyDumpedObjects['Foodtroph'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Foodtroph'][serialize($this->getPrimaryKey())] = true;
        $keys = FoodtrophPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getFoodlevel(),
            $keys[1] => $this->getFood(),
            $keys[2] => $this->getTl(),
            $keys[3] => $this->getSetl(),
            $keys[4] => $this->getRefno(),
            $keys[5] => $this->getRemark(),
            $keys[6] => $this->getMaxlength(),
            $keys[7] => $this->getMinlength(),
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
        $pos = FoodtrophPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setFoodlevel($value);
                break;
            case 1:
                $this->setFood($value);
                break;
            case 2:
                $this->setTl($value);
                break;
            case 3:
                $this->setSetl($value);
                break;
            case 4:
                $this->setRefno($value);
                break;
            case 5:
                $this->setRemark($value);
                break;
            case 6:
                $this->setMaxlength($value);
                break;
            case 7:
                $this->setMinlength($value);
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
        $keys = FoodtrophPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setFoodlevel($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFood($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setTl($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSetl($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setRefno($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setRemark($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMaxlength($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setMinlength($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTs($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FoodtrophPeer::DATABASE_NAME);

        if ($this->isColumnModified(FoodtrophPeer::FOODLEVEL)) $criteria->add(FoodtrophPeer::FOODLEVEL, $this->foodlevel);
        if ($this->isColumnModified(FoodtrophPeer::FOOD)) $criteria->add(FoodtrophPeer::FOOD, $this->food);
        if ($this->isColumnModified(FoodtrophPeer::TL)) $criteria->add(FoodtrophPeer::TL, $this->tl);
        if ($this->isColumnModified(FoodtrophPeer::SETL)) $criteria->add(FoodtrophPeer::SETL, $this->setl);
        if ($this->isColumnModified(FoodtrophPeer::REFNO)) $criteria->add(FoodtrophPeer::REFNO, $this->refno);
        if ($this->isColumnModified(FoodtrophPeer::REMARK)) $criteria->add(FoodtrophPeer::REMARK, $this->remark);
        if ($this->isColumnModified(FoodtrophPeer::MAXLENGTH)) $criteria->add(FoodtrophPeer::MAXLENGTH, $this->maxlength);
        if ($this->isColumnModified(FoodtrophPeer::MINLENGTH)) $criteria->add(FoodtrophPeer::MINLENGTH, $this->minlength);
        if ($this->isColumnModified(FoodtrophPeer::TS)) $criteria->add(FoodtrophPeer::TS, $this->ts);

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
        $criteria = new Criteria(FoodtrophPeer::DATABASE_NAME);
        $criteria->add(FoodtrophPeer::FOODLEVEL, $this->foodlevel);
        $criteria->add(FoodtrophPeer::FOOD, $this->food);

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
        $pks[0] = $this->getFoodlevel();
        $pks[1] = $this->getFood();

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
        $this->setFoodlevel($keys[0]);
        $this->setFood($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getFoodlevel()) && (null === $this->getFood());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Foodtroph (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFood($this->getFood());
        $copyObj->setTl($this->getTl());
        $copyObj->setSetl($this->getSetl());
        $copyObj->setRefno($this->getRefno());
        $copyObj->setRemark($this->getRemark());
        $copyObj->setMaxlength($this->getMaxlength());
        $copyObj->setMinlength($this->getMinlength());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setFoodlevel(NULL); // this is a auto-increment column, so set to default value
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
     * @return Foodtroph Clone of current object.
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
     * @return FoodtrophPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FoodtrophPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->foodlevel = null;
        $this->food = null;
        $this->tl = null;
        $this->setl = null;
        $this->refno = null;
        $this->remark = null;
        $this->maxlength = null;
        $this->minlength = null;
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
        return (string) $this->exportTo(FoodtrophPeer::DEFAULT_STRING_FORMAT);
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