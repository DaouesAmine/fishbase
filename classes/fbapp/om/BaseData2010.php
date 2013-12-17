<?php


/**
 * Base class that represents a row from the 'data2010' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseData2010 extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'Data2010Peer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        Data2010Peer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the spc100 field.
     * @var        int
     */
    protected $spc100;

    /**
     * The value for the cid field.
     * @var        int
     */
    protected $cid;

    /**
     * The value for the proxcell field.
     * @var        int
     */
    protected $proxcell;

    /**
     * The value for the pid field.
     * @var        int
     */
    protected $pid;

    /**
     * The value for the spc100_1 field.
     * @var        int
     */
    protected $spc100_1;

    /**
     * The value for the pkid field.
     * @var        string
     */
    protected $pkid;

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
     * Get the [spc100] column value.
     *
     * @return int
     */
    public function getSpc100()
    {

        return $this->spc100;
    }

    /**
     * Get the [cid] column value.
     *
     * @return int
     */
    public function getCid()
    {

        return $this->cid;
    }

    /**
     * Get the [proxcell] column value.
     *
     * @return int
     */
    public function getProxcell()
    {

        return $this->proxcell;
    }

    /**
     * Get the [pid] column value.
     *
     * @return int
     */
    public function getPid()
    {

        return $this->pid;
    }

    /**
     * Get the [spc100_1] column value.
     *
     * @return int
     */
    public function getSpc1001()
    {

        return $this->spc100_1;
    }

    /**
     * Get the [pkid] column value.
     *
     * @return string
     */
    public function getPkid()
    {

        return $this->pkid;
    }

    /**
     * Set the value of [spc100] column.
     *
     * @param  int $v new value
     * @return Data2010 The current object (for fluent API support)
     */
    public function setSpc100($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spc100 !== $v) {
            $this->spc100 = $v;
            $this->modifiedColumns[] = Data2010Peer::SPC100;
        }


        return $this;
    } // setSpc100()

    /**
     * Set the value of [cid] column.
     *
     * @param  int $v new value
     * @return Data2010 The current object (for fluent API support)
     */
    public function setCid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cid !== $v) {
            $this->cid = $v;
            $this->modifiedColumns[] = Data2010Peer::CID;
        }


        return $this;
    } // setCid()

    /**
     * Set the value of [proxcell] column.
     *
     * @param  int $v new value
     * @return Data2010 The current object (for fluent API support)
     */
    public function setProxcell($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->proxcell !== $v) {
            $this->proxcell = $v;
            $this->modifiedColumns[] = Data2010Peer::PROXCELL;
        }


        return $this;
    } // setProxcell()

    /**
     * Set the value of [pid] column.
     *
     * @param  int $v new value
     * @return Data2010 The current object (for fluent API support)
     */
    public function setPid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pid !== $v) {
            $this->pid = $v;
            $this->modifiedColumns[] = Data2010Peer::PID;
        }


        return $this;
    } // setPid()

    /**
     * Set the value of [spc100_1] column.
     *
     * @param  int $v new value
     * @return Data2010 The current object (for fluent API support)
     */
    public function setSpc1001($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spc100_1 !== $v) {
            $this->spc100_1 = $v;
            $this->modifiedColumns[] = Data2010Peer::SPC100_1;
        }


        return $this;
    } // setSpc1001()

    /**
     * Set the value of [pkid] column.
     *
     * @param  string $v new value
     * @return Data2010 The current object (for fluent API support)
     */
    public function setPkid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pkid !== $v) {
            $this->pkid = $v;
            $this->modifiedColumns[] = Data2010Peer::PKID;
        }


        return $this;
    } // setPkid()

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

            $this->spc100 = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->cid = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->proxcell = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->pid = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->spc100_1 = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->pkid = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = Data2010Peer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Data2010 object", $e);
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
            $con = Propel::getConnection(Data2010Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = Data2010Peer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(Data2010Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = Data2010Query::create()
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
            $con = Propel::getConnection(Data2010Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                Data2010Peer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = Data2010Peer::PKID;
        if (null !== $this->pkid) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . Data2010Peer::PKID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(Data2010Peer::SPC100)) {
            $modifiedColumns[':p' . $index++]  = '`spc100`';
        }
        if ($this->isColumnModified(Data2010Peer::CID)) {
            $modifiedColumns[':p' . $index++]  = '`cid`';
        }
        if ($this->isColumnModified(Data2010Peer::PROXCELL)) {
            $modifiedColumns[':p' . $index++]  = '`proxcell`';
        }
        if ($this->isColumnModified(Data2010Peer::PID)) {
            $modifiedColumns[':p' . $index++]  = '`pid`';
        }
        if ($this->isColumnModified(Data2010Peer::SPC100_1)) {
            $modifiedColumns[':p' . $index++]  = '`spc100_1`';
        }
        if ($this->isColumnModified(Data2010Peer::PKID)) {
            $modifiedColumns[':p' . $index++]  = '`PKID`';
        }

        $sql = sprintf(
            'INSERT INTO `data2010` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`spc100`':
                        $stmt->bindValue($identifier, $this->spc100, PDO::PARAM_INT);
                        break;
                    case '`cid`':
                        $stmt->bindValue($identifier, $this->cid, PDO::PARAM_INT);
                        break;
                    case '`proxcell`':
                        $stmt->bindValue($identifier, $this->proxcell, PDO::PARAM_INT);
                        break;
                    case '`pid`':
                        $stmt->bindValue($identifier, $this->pid, PDO::PARAM_INT);
                        break;
                    case '`spc100_1`':
                        $stmt->bindValue($identifier, $this->spc100_1, PDO::PARAM_INT);
                        break;
                    case '`PKID`':
                        $stmt->bindValue($identifier, $this->pkid, PDO::PARAM_STR);
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
        $this->setPkid($pk);

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


            if (($retval = Data2010Peer::doValidate($this, $columns)) !== true) {
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
        $pos = Data2010Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSpc100();
                break;
            case 1:
                return $this->getCid();
                break;
            case 2:
                return $this->getProxcell();
                break;
            case 3:
                return $this->getPid();
                break;
            case 4:
                return $this->getSpc1001();
                break;
            case 5:
                return $this->getPkid();
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
        if (isset($alreadyDumpedObjects['Data2010'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Data2010'][$this->getPrimaryKey()] = true;
        $keys = Data2010Peer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getSpc100(),
            $keys[1] => $this->getCid(),
            $keys[2] => $this->getProxcell(),
            $keys[3] => $this->getPid(),
            $keys[4] => $this->getSpc1001(),
            $keys[5] => $this->getPkid(),
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
        $pos = Data2010Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSpc100($value);
                break;
            case 1:
                $this->setCid($value);
                break;
            case 2:
                $this->setProxcell($value);
                break;
            case 3:
                $this->setPid($value);
                break;
            case 4:
                $this->setSpc1001($value);
                break;
            case 5:
                $this->setPkid($value);
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
        $keys = Data2010Peer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setSpc100($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCid($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setProxcell($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPid($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSpc1001($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPkid($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(Data2010Peer::DATABASE_NAME);

        if ($this->isColumnModified(Data2010Peer::SPC100)) $criteria->add(Data2010Peer::SPC100, $this->spc100);
        if ($this->isColumnModified(Data2010Peer::CID)) $criteria->add(Data2010Peer::CID, $this->cid);
        if ($this->isColumnModified(Data2010Peer::PROXCELL)) $criteria->add(Data2010Peer::PROXCELL, $this->proxcell);
        if ($this->isColumnModified(Data2010Peer::PID)) $criteria->add(Data2010Peer::PID, $this->pid);
        if ($this->isColumnModified(Data2010Peer::SPC100_1)) $criteria->add(Data2010Peer::SPC100_1, $this->spc100_1);
        if ($this->isColumnModified(Data2010Peer::PKID)) $criteria->add(Data2010Peer::PKID, $this->pkid);

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
        $criteria = new Criteria(Data2010Peer::DATABASE_NAME);
        $criteria->add(Data2010Peer::PKID, $this->pkid);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getPkid();
    }

    /**
     * Generic method to set the primary key (pkid column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setPkid($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getPkid();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Data2010 (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSpc100($this->getSpc100());
        $copyObj->setCid($this->getCid());
        $copyObj->setProxcell($this->getProxcell());
        $copyObj->setPid($this->getPid());
        $copyObj->setSpc1001($this->getSpc1001());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setPkid(NULL); // this is a auto-increment column, so set to default value
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
     * @return Data2010 Clone of current object.
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
     * @return Data2010Peer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new Data2010Peer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->spc100 = null;
        $this->cid = null;
        $this->proxcell = null;
        $this->pid = null;
        $this->spc100_1 = null;
        $this->pkid = null;
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
        return (string) $this->exportTo(Data2010Peer::DEFAULT_STRING_FORMAT);
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
