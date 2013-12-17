<?php


/**
 * Base class that represents a row from the 'urls' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseUrls extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'UrlsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        UrlsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the num field.
     * @var        int
     */
    protected $num;

    /**
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the url field.
     * @var        string
     */
    protected $url;

    /**
     * The value for the description field.
     * @var        string
     */
    protected $description;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the dateentered field.
     * @var        string
     */
    protected $dateentered;

    /**
     * The value for the novote field.
     * @var        int
     */
    protected $novote;

    /**
     * The value for the yesvote field.
     * @var        int
     */
    protected $yesvote;

    /**
     * The value for the requiredx field.
     * @var        string
     */
    protected $requiredx;

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
     * Get the [num] column value.
     *
     * @return int
     */
    public function getNum()
    {

        return $this->num;
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
     * Get the [url] column value.
     *
     * @return string
     */
    public function getUrl()
    {

        return $this->url;
    }

    /**
     * Get the [description] column value.
     *
     * @return string
     */
    public function getDescription()
    {

        return $this->description;
    }

    /**
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {

        return $this->name;
    }

    /**
     * Get the [email] column value.
     *
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
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
     * Get the [novote] column value.
     *
     * @return int
     */
    public function getNovote()
    {

        return $this->novote;
    }

    /**
     * Get the [yesvote] column value.
     *
     * @return int
     */
    public function getYesvote()
    {

        return $this->yesvote;
    }

    /**
     * Get the [requiredx] column value.
     *
     * @return string
     */
    public function getRequiredx()
    {

        return $this->requiredx;
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
     * Set the value of [num] column.
     *
     * @param  int $v new value
     * @return Urls The current object (for fluent API support)
     */
    public function setNum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->num !== $v) {
            $this->num = $v;
            $this->modifiedColumns[] = UrlsPeer::NUM;
        }


        return $this;
    } // setNum()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Urls The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = UrlsPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [url] column.
     *
     * @param  string $v new value
     * @return Urls The current object (for fluent API support)
     */
    public function setUrl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url !== $v) {
            $this->url = $v;
            $this->modifiedColumns[] = UrlsPeer::URL;
        }


        return $this;
    } // setUrl()

    /**
     * Set the value of [description] column.
     *
     * @param  string $v new value
     * @return Urls The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[] = UrlsPeer::DESCRIPTION;
        }


        return $this;
    } // setDescription()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return Urls The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = UrlsPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [email] column.
     *
     * @param  string $v new value
     * @return Urls The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = UrlsPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Urls The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = UrlsPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [novote] column.
     *
     * @param  int $v new value
     * @return Urls The current object (for fluent API support)
     */
    public function setNovote($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->novote !== $v) {
            $this->novote = $v;
            $this->modifiedColumns[] = UrlsPeer::NOVOTE;
        }


        return $this;
    } // setNovote()

    /**
     * Set the value of [yesvote] column.
     *
     * @param  int $v new value
     * @return Urls The current object (for fluent API support)
     */
    public function setYesvote($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->yesvote !== $v) {
            $this->yesvote = $v;
            $this->modifiedColumns[] = UrlsPeer::YESVOTE;
        }


        return $this;
    } // setYesvote()

    /**
     * Set the value of [requiredx] column.
     *
     * @param  string $v new value
     * @return Urls The current object (for fluent API support)
     */
    public function setRequiredx($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->requiredx !== $v) {
            $this->requiredx = $v;
            $this->modifiedColumns[] = UrlsPeer::REQUIREDX;
        }


        return $this;
    } // setRequiredx()

    /**
     * Set the value of [pkid] column.
     *
     * @param  string $v new value
     * @return Urls The current object (for fluent API support)
     */
    public function setPkid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pkid !== $v) {
            $this->pkid = $v;
            $this->modifiedColumns[] = UrlsPeer::PKID;
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

            $this->num = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->speccode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->url = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->description = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->name = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->email = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->dateentered = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->novote = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->yesvote = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->requiredx = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->pkid = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = UrlsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Urls object", $e);
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
            $con = Propel::getConnection(UrlsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = UrlsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(UrlsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = UrlsQuery::create()
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
            $con = Propel::getConnection(UrlsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                UrlsPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = UrlsPeer::PKID;
        if (null !== $this->pkid) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . UrlsPeer::PKID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(UrlsPeer::NUM)) {
            $modifiedColumns[':p' . $index++]  = '`num`';
        }
        if ($this->isColumnModified(UrlsPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`speccode`';
        }
        if ($this->isColumnModified(UrlsPeer::URL)) {
            $modifiedColumns[':p' . $index++]  = '`url`';
        }
        if ($this->isColumnModified(UrlsPeer::DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`description`';
        }
        if ($this->isColumnModified(UrlsPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(UrlsPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(UrlsPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`dateentered`';
        }
        if ($this->isColumnModified(UrlsPeer::NOVOTE)) {
            $modifiedColumns[':p' . $index++]  = '`novote`';
        }
        if ($this->isColumnModified(UrlsPeer::YESVOTE)) {
            $modifiedColumns[':p' . $index++]  = '`yesvote`';
        }
        if ($this->isColumnModified(UrlsPeer::REQUIREDX)) {
            $modifiedColumns[':p' . $index++]  = '`requiredx`';
        }
        if ($this->isColumnModified(UrlsPeer::PKID)) {
            $modifiedColumns[':p' . $index++]  = '`PKID`';
        }

        $sql = sprintf(
            'INSERT INTO `urls` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`num`':
                        $stmt->bindValue($identifier, $this->num, PDO::PARAM_INT);
                        break;
                    case '`speccode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`url`':
                        $stmt->bindValue($identifier, $this->url, PDO::PARAM_STR);
                        break;
                    case '`description`':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`email`':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`dateentered`':
                        $stmt->bindValue($identifier, $this->dateentered, PDO::PARAM_STR);
                        break;
                    case '`novote`':
                        $stmt->bindValue($identifier, $this->novote, PDO::PARAM_INT);
                        break;
                    case '`yesvote`':
                        $stmt->bindValue($identifier, $this->yesvote, PDO::PARAM_INT);
                        break;
                    case '`requiredx`':
                        $stmt->bindValue($identifier, $this->requiredx, PDO::PARAM_STR);
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


            if (($retval = UrlsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = UrlsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getNum();
                break;
            case 1:
                return $this->getSpeccode();
                break;
            case 2:
                return $this->getUrl();
                break;
            case 3:
                return $this->getDescription();
                break;
            case 4:
                return $this->getName();
                break;
            case 5:
                return $this->getEmail();
                break;
            case 6:
                return $this->getDateentered();
                break;
            case 7:
                return $this->getNovote();
                break;
            case 8:
                return $this->getYesvote();
                break;
            case 9:
                return $this->getRequiredx();
                break;
            case 10:
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
        if (isset($alreadyDumpedObjects['Urls'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Urls'][$this->getPrimaryKey()] = true;
        $keys = UrlsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getNum(),
            $keys[1] => $this->getSpeccode(),
            $keys[2] => $this->getUrl(),
            $keys[3] => $this->getDescription(),
            $keys[4] => $this->getName(),
            $keys[5] => $this->getEmail(),
            $keys[6] => $this->getDateentered(),
            $keys[7] => $this->getNovote(),
            $keys[8] => $this->getYesvote(),
            $keys[9] => $this->getRequiredx(),
            $keys[10] => $this->getPkid(),
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
        $pos = UrlsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setNum($value);
                break;
            case 1:
                $this->setSpeccode($value);
                break;
            case 2:
                $this->setUrl($value);
                break;
            case 3:
                $this->setDescription($value);
                break;
            case 4:
                $this->setName($value);
                break;
            case 5:
                $this->setEmail($value);
                break;
            case 6:
                $this->setDateentered($value);
                break;
            case 7:
                $this->setNovote($value);
                break;
            case 8:
                $this->setYesvote($value);
                break;
            case 9:
                $this->setRequiredx($value);
                break;
            case 10:
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
        $keys = UrlsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setNum($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSpeccode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setUrl($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDescription($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setName($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEmail($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDateentered($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNovote($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setYesvote($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setRequiredx($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPkid($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(UrlsPeer::DATABASE_NAME);

        if ($this->isColumnModified(UrlsPeer::NUM)) $criteria->add(UrlsPeer::NUM, $this->num);
        if ($this->isColumnModified(UrlsPeer::SPECCODE)) $criteria->add(UrlsPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(UrlsPeer::URL)) $criteria->add(UrlsPeer::URL, $this->url);
        if ($this->isColumnModified(UrlsPeer::DESCRIPTION)) $criteria->add(UrlsPeer::DESCRIPTION, $this->description);
        if ($this->isColumnModified(UrlsPeer::NAME)) $criteria->add(UrlsPeer::NAME, $this->name);
        if ($this->isColumnModified(UrlsPeer::EMAIL)) $criteria->add(UrlsPeer::EMAIL, $this->email);
        if ($this->isColumnModified(UrlsPeer::DATEENTERED)) $criteria->add(UrlsPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(UrlsPeer::NOVOTE)) $criteria->add(UrlsPeer::NOVOTE, $this->novote);
        if ($this->isColumnModified(UrlsPeer::YESVOTE)) $criteria->add(UrlsPeer::YESVOTE, $this->yesvote);
        if ($this->isColumnModified(UrlsPeer::REQUIREDX)) $criteria->add(UrlsPeer::REQUIREDX, $this->requiredx);
        if ($this->isColumnModified(UrlsPeer::PKID)) $criteria->add(UrlsPeer::PKID, $this->pkid);

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
        $criteria = new Criteria(UrlsPeer::DATABASE_NAME);
        $criteria->add(UrlsPeer::PKID, $this->pkid);

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
     * @param object $copyObj An object of Urls (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNum($this->getNum());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setUrl($this->getUrl());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setName($this->getName());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setNovote($this->getNovote());
        $copyObj->setYesvote($this->getYesvote());
        $copyObj->setRequiredx($this->getRequiredx());
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
     * @return Urls Clone of current object.
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
     * @return UrlsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new UrlsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->num = null;
        $this->speccode = null;
        $this->url = null;
        $this->description = null;
        $this->name = null;
        $this->email = null;
        $this->dateentered = null;
        $this->novote = null;
        $this->yesvote = null;
        $this->requiredx = null;
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
        return (string) $this->exportTo(UrlsPeer::DEFAULT_STRING_FORMAT);
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
