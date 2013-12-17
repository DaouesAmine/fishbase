<?php


/**
 * Base class that represents a row from the 'aquariumref' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseAquariumref extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'AquariumrefPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AquariumrefPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the aqcode field.
     * @var        int
     */
    protected $aqcode;

    /**
     * The value for the acronym field.
     * @var        string
     */
    protected $acronym;

    /**
     * The value for the aquariumname field.
     * @var        string
     */
    protected $aquariumname;

    /**
     * The value for the address field.
     * @var        string
     */
    protected $address;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the url field.
     * @var        string
     */
    protected $url;

    /**
     * The value for the contactname field.
     * @var        string
     */
    protected $contactname;

    /**
     * The value for the contactemail field.
     * @var        string
     */
    protected $contactemail;

    /**
     * The value for the comments field.
     * @var        string
     */
    protected $comments;

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
     * Get the [aqcode] column value.
     *
     * @return int
     */
    public function getAqcode()
    {

        return $this->aqcode;
    }

    /**
     * Get the [acronym] column value.
     *
     * @return string
     */
    public function getAcronym()
    {

        return $this->acronym;
    }

    /**
     * Get the [aquariumname] column value.
     *
     * @return string
     */
    public function getAquariumname()
    {

        return $this->aquariumname;
    }

    /**
     * Get the [address] column value.
     *
     * @return string
     */
    public function getAddress()
    {

        return $this->address;
    }

    /**
     * Get the [c_code] column value.
     *
     * @return string
     */
    public function getCCode()
    {

        return $this->c_code;
    }

    /**
     * Get the [url] column value.
     *
     * @return string
     */
    public function getUrl()
    {

        return $this->url;
    }

    /**
     * Get the [contactname] column value.
     *
     * @return string
     */
    public function getContactname()
    {

        return $this->contactname;
    }

    /**
     * Get the [contactemail] column value.
     *
     * @return string
     */
    public function getContactemail()
    {

        return $this->contactemail;
    }

    /**
     * Get the [comments] column value.
     *
     * @return string
     */
    public function getComments()
    {

        return $this->comments;
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
     * Set the value of [aqcode] column.
     *
     * @param  int $v new value
     * @return Aquariumref The current object (for fluent API support)
     */
    public function setAqcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aqcode !== $v) {
            $this->aqcode = $v;
            $this->modifiedColumns[] = AquariumrefPeer::AQCODE;
        }


        return $this;
    } // setAqcode()

    /**
     * Set the value of [acronym] column.
     *
     * @param  string $v new value
     * @return Aquariumref The current object (for fluent API support)
     */
    public function setAcronym($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acronym !== $v) {
            $this->acronym = $v;
            $this->modifiedColumns[] = AquariumrefPeer::ACRONYM;
        }


        return $this;
    } // setAcronym()

    /**
     * Set the value of [aquariumname] column.
     *
     * @param  string $v new value
     * @return Aquariumref The current object (for fluent API support)
     */
    public function setAquariumname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->aquariumname !== $v) {
            $this->aquariumname = $v;
            $this->modifiedColumns[] = AquariumrefPeer::AQUARIUMNAME;
        }


        return $this;
    } // setAquariumname()

    /**
     * Set the value of [address] column.
     *
     * @param  string $v new value
     * @return Aquariumref The current object (for fluent API support)
     */
    public function setAddress($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->address !== $v) {
            $this->address = $v;
            $this->modifiedColumns[] = AquariumrefPeer::ADDRESS;
        }


        return $this;
    } // setAddress()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Aquariumref The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = AquariumrefPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [url] column.
     *
     * @param  string $v new value
     * @return Aquariumref The current object (for fluent API support)
     */
    public function setUrl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url !== $v) {
            $this->url = $v;
            $this->modifiedColumns[] = AquariumrefPeer::URL;
        }


        return $this;
    } // setUrl()

    /**
     * Set the value of [contactname] column.
     *
     * @param  string $v new value
     * @return Aquariumref The current object (for fluent API support)
     */
    public function setContactname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->contactname !== $v) {
            $this->contactname = $v;
            $this->modifiedColumns[] = AquariumrefPeer::CONTACTNAME;
        }


        return $this;
    } // setContactname()

    /**
     * Set the value of [contactemail] column.
     *
     * @param  string $v new value
     * @return Aquariumref The current object (for fluent API support)
     */
    public function setContactemail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->contactemail !== $v) {
            $this->contactemail = $v;
            $this->modifiedColumns[] = AquariumrefPeer::CONTACTEMAIL;
        }


        return $this;
    } // setContactemail()

    /**
     * Set the value of [comments] column.
     *
     * @param  string $v new value
     * @return Aquariumref The current object (for fluent API support)
     */
    public function setComments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comments !== $v) {
            $this->comments = $v;
            $this->modifiedColumns[] = AquariumrefPeer::COMMENTS;
        }


        return $this;
    } // setComments()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Aquariumref The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = AquariumrefPeer::TS;
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

            $this->aqcode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->acronym = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->aquariumname = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->address = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->c_code = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->url = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->contactname = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->contactemail = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->comments = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->ts = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = AquariumrefPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Aquariumref object", $e);
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
            $con = Propel::getConnection(AquariumrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AquariumrefPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(AquariumrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AquariumrefQuery::create()
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
            $con = Propel::getConnection(AquariumrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                AquariumrefPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = AquariumrefPeer::AQCODE;
        if (null !== $this->aqcode) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . AquariumrefPeer::AQCODE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(AquariumrefPeer::AQCODE)) {
            $modifiedColumns[':p' . $index++]  = '`AqCode`';
        }
        if ($this->isColumnModified(AquariumrefPeer::ACRONYM)) {
            $modifiedColumns[':p' . $index++]  = '`Acronym`';
        }
        if ($this->isColumnModified(AquariumrefPeer::AQUARIUMNAME)) {
            $modifiedColumns[':p' . $index++]  = '`AquariumName`';
        }
        if ($this->isColumnModified(AquariumrefPeer::ADDRESS)) {
            $modifiedColumns[':p' . $index++]  = '`Address`';
        }
        if ($this->isColumnModified(AquariumrefPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_code`';
        }
        if ($this->isColumnModified(AquariumrefPeer::URL)) {
            $modifiedColumns[':p' . $index++]  = '`URL`';
        }
        if ($this->isColumnModified(AquariumrefPeer::CONTACTNAME)) {
            $modifiedColumns[':p' . $index++]  = '`ContactName`';
        }
        if ($this->isColumnModified(AquariumrefPeer::CONTACTEMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`ContactEmail`';
        }
        if ($this->isColumnModified(AquariumrefPeer::COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`Comments`';
        }
        if ($this->isColumnModified(AquariumrefPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `aquariumref` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`AqCode`':
                        $stmt->bindValue($identifier, $this->aqcode, PDO::PARAM_INT);
                        break;
                    case '`Acronym`':
                        $stmt->bindValue($identifier, $this->acronym, PDO::PARAM_STR);
                        break;
                    case '`AquariumName`':
                        $stmt->bindValue($identifier, $this->aquariumname, PDO::PARAM_STR);
                        break;
                    case '`Address`':
                        $stmt->bindValue($identifier, $this->address, PDO::PARAM_STR);
                        break;
                    case '`C_code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`URL`':
                        $stmt->bindValue($identifier, $this->url, PDO::PARAM_STR);
                        break;
                    case '`ContactName`':
                        $stmt->bindValue($identifier, $this->contactname, PDO::PARAM_STR);
                        break;
                    case '`ContactEmail`':
                        $stmt->bindValue($identifier, $this->contactemail, PDO::PARAM_STR);
                        break;
                    case '`Comments`':
                        $stmt->bindValue($identifier, $this->comments, PDO::PARAM_STR);
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
        $this->setAqcode($pk);

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


            if (($retval = AquariumrefPeer::doValidate($this, $columns)) !== true) {
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
        $pos = AquariumrefPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getAqcode();
                break;
            case 1:
                return $this->getAcronym();
                break;
            case 2:
                return $this->getAquariumname();
                break;
            case 3:
                return $this->getAddress();
                break;
            case 4:
                return $this->getCCode();
                break;
            case 5:
                return $this->getUrl();
                break;
            case 6:
                return $this->getContactname();
                break;
            case 7:
                return $this->getContactemail();
                break;
            case 8:
                return $this->getComments();
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
        if (isset($alreadyDumpedObjects['Aquariumref'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Aquariumref'][$this->getPrimaryKey()] = true;
        $keys = AquariumrefPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAqcode(),
            $keys[1] => $this->getAcronym(),
            $keys[2] => $this->getAquariumname(),
            $keys[3] => $this->getAddress(),
            $keys[4] => $this->getCCode(),
            $keys[5] => $this->getUrl(),
            $keys[6] => $this->getContactname(),
            $keys[7] => $this->getContactemail(),
            $keys[8] => $this->getComments(),
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
        $pos = AquariumrefPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setAqcode($value);
                break;
            case 1:
                $this->setAcronym($value);
                break;
            case 2:
                $this->setAquariumname($value);
                break;
            case 3:
                $this->setAddress($value);
                break;
            case 4:
                $this->setCCode($value);
                break;
            case 5:
                $this->setUrl($value);
                break;
            case 6:
                $this->setContactname($value);
                break;
            case 7:
                $this->setContactemail($value);
                break;
            case 8:
                $this->setComments($value);
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
        $keys = AquariumrefPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAqcode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setAcronym($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAquariumname($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAddress($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCCode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setUrl($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setContactname($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setContactemail($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setComments($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTs($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AquariumrefPeer::DATABASE_NAME);

        if ($this->isColumnModified(AquariumrefPeer::AQCODE)) $criteria->add(AquariumrefPeer::AQCODE, $this->aqcode);
        if ($this->isColumnModified(AquariumrefPeer::ACRONYM)) $criteria->add(AquariumrefPeer::ACRONYM, $this->acronym);
        if ($this->isColumnModified(AquariumrefPeer::AQUARIUMNAME)) $criteria->add(AquariumrefPeer::AQUARIUMNAME, $this->aquariumname);
        if ($this->isColumnModified(AquariumrefPeer::ADDRESS)) $criteria->add(AquariumrefPeer::ADDRESS, $this->address);
        if ($this->isColumnModified(AquariumrefPeer::C_CODE)) $criteria->add(AquariumrefPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(AquariumrefPeer::URL)) $criteria->add(AquariumrefPeer::URL, $this->url);
        if ($this->isColumnModified(AquariumrefPeer::CONTACTNAME)) $criteria->add(AquariumrefPeer::CONTACTNAME, $this->contactname);
        if ($this->isColumnModified(AquariumrefPeer::CONTACTEMAIL)) $criteria->add(AquariumrefPeer::CONTACTEMAIL, $this->contactemail);
        if ($this->isColumnModified(AquariumrefPeer::COMMENTS)) $criteria->add(AquariumrefPeer::COMMENTS, $this->comments);
        if ($this->isColumnModified(AquariumrefPeer::TS)) $criteria->add(AquariumrefPeer::TS, $this->ts);

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
        $criteria = new Criteria(AquariumrefPeer::DATABASE_NAME);
        $criteria->add(AquariumrefPeer::AQCODE, $this->aqcode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getAqcode();
    }

    /**
     * Generic method to set the primary key (aqcode column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setAqcode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getAqcode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Aquariumref (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setAcronym($this->getAcronym());
        $copyObj->setAquariumname($this->getAquariumname());
        $copyObj->setAddress($this->getAddress());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setUrl($this->getUrl());
        $copyObj->setContactname($this->getContactname());
        $copyObj->setContactemail($this->getContactemail());
        $copyObj->setComments($this->getComments());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setAqcode(NULL); // this is a auto-increment column, so set to default value
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
     * @return Aquariumref Clone of current object.
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
     * @return AquariumrefPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AquariumrefPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->aqcode = null;
        $this->acronym = null;
        $this->aquariumname = null;
        $this->address = null;
        $this->c_code = null;
        $this->url = null;
        $this->contactname = null;
        $this->contactemail = null;
        $this->comments = null;
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
        return (string) $this->exportTo(AquariumrefPeer::DEFAULT_STRING_FORMAT);
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
