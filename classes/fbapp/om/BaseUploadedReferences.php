<?php


/**
 * Base class that represents a row from the 'uploaded_references' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseUploadedReferences extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'UploadedReferencesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        UploadedReferencesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the author field.
     * @var        string
     */
    protected $author;

    /**
     * The value for the year field.
     * @var        int
     */
    protected $year;

    /**
     * The value for the title field.
     * @var        string
     */
    protected $title;

    /**
     * The value for the source field.
     * @var        string
     */
    protected $source;

    /**
     * The value for the nameused field.
     * @var        string
     */
    protected $nameused;

    /**
     * The value for the file field.
     * @var        string
     */
    protected $file;

    /**
     * The value for the keywords field.
     * @var        string
     */
    protected $keywords;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the country field.
     * @var        string
     */
    protected $country;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

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
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {

        return $this->id;
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
     * Get the [author] column value.
     *
     * @return string
     */
    public function getAuthor()
    {

        return $this->author;
    }

    /**
     * Get the [year] column value.
     *
     * @return int
     */
    public function getYear()
    {

        return $this->year;
    }

    /**
     * Get the [title] column value.
     *
     * @return string
     */
    public function getTitle()
    {

        return $this->title;
    }

    /**
     * Get the [source] column value.
     *
     * @return string
     */
    public function getSource()
    {

        return $this->source;
    }

    /**
     * Get the [nameused] column value.
     *
     * @return string
     */
    public function getNameused()
    {

        return $this->nameused;
    }

    /**
     * Get the [file] column value.
     *
     * @return string
     */
    public function getFile()
    {

        return $this->file;
    }

    /**
     * Get the [keywords] column value.
     *
     * @return string
     */
    public function getKeywords()
    {

        return $this->keywords;
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
     * Get the [country] column value.
     *
     * @return string
     */
    public function getCountry()
    {

        return $this->country;
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
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return UploadedReferences The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = UploadedReferencesPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return UploadedReferences The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = UploadedReferencesPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [author] column.
     *
     * @param  string $v new value
     * @return UploadedReferences The current object (for fluent API support)
     */
    public function setAuthor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->author !== $v) {
            $this->author = $v;
            $this->modifiedColumns[] = UploadedReferencesPeer::AUTHOR;
        }


        return $this;
    } // setAuthor()

    /**
     * Set the value of [year] column.
     *
     * @param  int $v new value
     * @return UploadedReferences The current object (for fluent API support)
     */
    public function setYear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->year !== $v) {
            $this->year = $v;
            $this->modifiedColumns[] = UploadedReferencesPeer::YEAR;
        }


        return $this;
    } // setYear()

    /**
     * Set the value of [title] column.
     *
     * @param  string $v new value
     * @return UploadedReferences The current object (for fluent API support)
     */
    public function setTitle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->title !== $v) {
            $this->title = $v;
            $this->modifiedColumns[] = UploadedReferencesPeer::TITLE;
        }


        return $this;
    } // setTitle()

    /**
     * Set the value of [source] column.
     *
     * @param  string $v new value
     * @return UploadedReferences The current object (for fluent API support)
     */
    public function setSource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->source !== $v) {
            $this->source = $v;
            $this->modifiedColumns[] = UploadedReferencesPeer::SOURCE;
        }


        return $this;
    } // setSource()

    /**
     * Set the value of [nameused] column.
     *
     * @param  string $v new value
     * @return UploadedReferences The current object (for fluent API support)
     */
    public function setNameused($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nameused !== $v) {
            $this->nameused = $v;
            $this->modifiedColumns[] = UploadedReferencesPeer::NAMEUSED;
        }


        return $this;
    } // setNameused()

    /**
     * Set the value of [file] column.
     *
     * @param  string $v new value
     * @return UploadedReferences The current object (for fluent API support)
     */
    public function setFile($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->file !== $v) {
            $this->file = $v;
            $this->modifiedColumns[] = UploadedReferencesPeer::FILE;
        }


        return $this;
    } // setFile()

    /**
     * Set the value of [keywords] column.
     *
     * @param  string $v new value
     * @return UploadedReferences The current object (for fluent API support)
     */
    public function setKeywords($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->keywords !== $v) {
            $this->keywords = $v;
            $this->modifiedColumns[] = UploadedReferencesPeer::KEYWORDS;
        }


        return $this;
    } // setKeywords()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return UploadedReferences The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = UploadedReferencesPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [country] column.
     *
     * @param  string $v new value
     * @return UploadedReferences The current object (for fluent API support)
     */
    public function setCountry($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->country !== $v) {
            $this->country = $v;
            $this->modifiedColumns[] = UploadedReferencesPeer::COUNTRY;
        }


        return $this;
    } // setCountry()

    /**
     * Set the value of [email] column.
     *
     * @param  string $v new value
     * @return UploadedReferences The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = UploadedReferencesPeer::EMAIL;
        }


        return $this;
    } // setEmail()

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

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->speccode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->author = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->year = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->title = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->source = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->nameused = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->file = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->keywords = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->name = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->country = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->email = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = UploadedReferencesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating UploadedReferences object", $e);
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
            $con = Propel::getConnection(UploadedReferencesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = UploadedReferencesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(UploadedReferencesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = UploadedReferencesQuery::create()
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
            $con = Propel::getConnection(UploadedReferencesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                UploadedReferencesPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = UploadedReferencesPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . UploadedReferencesPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(UploadedReferencesPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(UploadedReferencesPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`speccode`';
        }
        if ($this->isColumnModified(UploadedReferencesPeer::AUTHOR)) {
            $modifiedColumns[':p' . $index++]  = '`author`';
        }
        if ($this->isColumnModified(UploadedReferencesPeer::YEAR)) {
            $modifiedColumns[':p' . $index++]  = '`year`';
        }
        if ($this->isColumnModified(UploadedReferencesPeer::TITLE)) {
            $modifiedColumns[':p' . $index++]  = '`title`';
        }
        if ($this->isColumnModified(UploadedReferencesPeer::SOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`source`';
        }
        if ($this->isColumnModified(UploadedReferencesPeer::NAMEUSED)) {
            $modifiedColumns[':p' . $index++]  = '`nameused`';
        }
        if ($this->isColumnModified(UploadedReferencesPeer::FILE)) {
            $modifiedColumns[':p' . $index++]  = '`file`';
        }
        if ($this->isColumnModified(UploadedReferencesPeer::KEYWORDS)) {
            $modifiedColumns[':p' . $index++]  = '`keywords`';
        }
        if ($this->isColumnModified(UploadedReferencesPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(UploadedReferencesPeer::COUNTRY)) {
            $modifiedColumns[':p' . $index++]  = '`country`';
        }
        if ($this->isColumnModified(UploadedReferencesPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }

        $sql = sprintf(
            'INSERT INTO `uploaded_references` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`speccode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`author`':
                        $stmt->bindValue($identifier, $this->author, PDO::PARAM_STR);
                        break;
                    case '`year`':
                        $stmt->bindValue($identifier, $this->year, PDO::PARAM_INT);
                        break;
                    case '`title`':
                        $stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
                        break;
                    case '`source`':
                        $stmt->bindValue($identifier, $this->source, PDO::PARAM_STR);
                        break;
                    case '`nameused`':
                        $stmt->bindValue($identifier, $this->nameused, PDO::PARAM_STR);
                        break;
                    case '`file`':
                        $stmt->bindValue($identifier, $this->file, PDO::PARAM_STR);
                        break;
                    case '`keywords`':
                        $stmt->bindValue($identifier, $this->keywords, PDO::PARAM_STR);
                        break;
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`country`':
                        $stmt->bindValue($identifier, $this->country, PDO::PARAM_STR);
                        break;
                    case '`email`':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
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


            if (($retval = UploadedReferencesPeer::doValidate($this, $columns)) !== true) {
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
        $pos = UploadedReferencesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getId();
                break;
            case 1:
                return $this->getSpeccode();
                break;
            case 2:
                return $this->getAuthor();
                break;
            case 3:
                return $this->getYear();
                break;
            case 4:
                return $this->getTitle();
                break;
            case 5:
                return $this->getSource();
                break;
            case 6:
                return $this->getNameused();
                break;
            case 7:
                return $this->getFile();
                break;
            case 8:
                return $this->getKeywords();
                break;
            case 9:
                return $this->getName();
                break;
            case 10:
                return $this->getCountry();
                break;
            case 11:
                return $this->getEmail();
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
        if (isset($alreadyDumpedObjects['UploadedReferences'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['UploadedReferences'][$this->getPrimaryKey()] = true;
        $keys = UploadedReferencesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getSpeccode(),
            $keys[2] => $this->getAuthor(),
            $keys[3] => $this->getYear(),
            $keys[4] => $this->getTitle(),
            $keys[5] => $this->getSource(),
            $keys[6] => $this->getNameused(),
            $keys[7] => $this->getFile(),
            $keys[8] => $this->getKeywords(),
            $keys[9] => $this->getName(),
            $keys[10] => $this->getCountry(),
            $keys[11] => $this->getEmail(),
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
        $pos = UploadedReferencesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setId($value);
                break;
            case 1:
                $this->setSpeccode($value);
                break;
            case 2:
                $this->setAuthor($value);
                break;
            case 3:
                $this->setYear($value);
                break;
            case 4:
                $this->setTitle($value);
                break;
            case 5:
                $this->setSource($value);
                break;
            case 6:
                $this->setNameused($value);
                break;
            case 7:
                $this->setFile($value);
                break;
            case 8:
                $this->setKeywords($value);
                break;
            case 9:
                $this->setName($value);
                break;
            case 10:
                $this->setCountry($value);
                break;
            case 11:
                $this->setEmail($value);
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
        $keys = UploadedReferencesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSpeccode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAuthor($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setYear($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTitle($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSource($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setNameused($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setFile($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setKeywords($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setName($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCountry($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setEmail($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(UploadedReferencesPeer::DATABASE_NAME);

        if ($this->isColumnModified(UploadedReferencesPeer::ID)) $criteria->add(UploadedReferencesPeer::ID, $this->id);
        if ($this->isColumnModified(UploadedReferencesPeer::SPECCODE)) $criteria->add(UploadedReferencesPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(UploadedReferencesPeer::AUTHOR)) $criteria->add(UploadedReferencesPeer::AUTHOR, $this->author);
        if ($this->isColumnModified(UploadedReferencesPeer::YEAR)) $criteria->add(UploadedReferencesPeer::YEAR, $this->year);
        if ($this->isColumnModified(UploadedReferencesPeer::TITLE)) $criteria->add(UploadedReferencesPeer::TITLE, $this->title);
        if ($this->isColumnModified(UploadedReferencesPeer::SOURCE)) $criteria->add(UploadedReferencesPeer::SOURCE, $this->source);
        if ($this->isColumnModified(UploadedReferencesPeer::NAMEUSED)) $criteria->add(UploadedReferencesPeer::NAMEUSED, $this->nameused);
        if ($this->isColumnModified(UploadedReferencesPeer::FILE)) $criteria->add(UploadedReferencesPeer::FILE, $this->file);
        if ($this->isColumnModified(UploadedReferencesPeer::KEYWORDS)) $criteria->add(UploadedReferencesPeer::KEYWORDS, $this->keywords);
        if ($this->isColumnModified(UploadedReferencesPeer::NAME)) $criteria->add(UploadedReferencesPeer::NAME, $this->name);
        if ($this->isColumnModified(UploadedReferencesPeer::COUNTRY)) $criteria->add(UploadedReferencesPeer::COUNTRY, $this->country);
        if ($this->isColumnModified(UploadedReferencesPeer::EMAIL)) $criteria->add(UploadedReferencesPeer::EMAIL, $this->email);

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
        $criteria = new Criteria(UploadedReferencesPeer::DATABASE_NAME);
        $criteria->add(UploadedReferencesPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of UploadedReferences (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setAuthor($this->getAuthor());
        $copyObj->setYear($this->getYear());
        $copyObj->setTitle($this->getTitle());
        $copyObj->setSource($this->getSource());
        $copyObj->setNameused($this->getNameused());
        $copyObj->setFile($this->getFile());
        $copyObj->setKeywords($this->getKeywords());
        $copyObj->setName($this->getName());
        $copyObj->setCountry($this->getCountry());
        $copyObj->setEmail($this->getEmail());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
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
     * @return UploadedReferences Clone of current object.
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
     * @return UploadedReferencesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new UploadedReferencesPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->speccode = null;
        $this->author = null;
        $this->year = null;
        $this->title = null;
        $this->source = null;
        $this->nameused = null;
        $this->file = null;
        $this->keywords = null;
        $this->name = null;
        $this->country = null;
        $this->email = null;
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
        return (string) $this->exportTo(UploadedReferencesPeer::DEFAULT_STRING_FORMAT);
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
