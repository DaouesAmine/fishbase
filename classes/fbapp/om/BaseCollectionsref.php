<?php


/**
 * Base class that represents a row from the 'collectionsref' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCollectionsref extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CollectionsrefPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CollectionsrefPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the occurrencerefno field.
     * @var        int
     */
    protected $occurrencerefno;

    /**
     * The value for the museum field.
     * @var        string
     */
    protected $museum;

    /**
     * The value for the acronym field.
     * @var        string
     */
    protected $acronym;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the logoname field.
     * @var        string
     */
    protected $logoname;

    /**
     * The value for the url field.
     * @var        string
     */
    protected $url;

    /**
     * The value for the logo field.
     * @var        resource
     */
    protected $logo;

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
     * Get the [occurrencerefno] column value.
     *
     * @return int
     */
    public function getOccurrencerefno()
    {

        return $this->occurrencerefno;
    }

    /**
     * Get the [museum] column value.
     *
     * @return string
     */
    public function getMuseum()
    {

        return $this->museum;
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
     * Get the [c_code] column value.
     *
     * @return string
     */
    public function getCCode()
    {

        return $this->c_code;
    }

    /**
     * Get the [logoname] column value.
     *
     * @return string
     */
    public function getLogoname()
    {

        return $this->logoname;
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
     * Get the [logo] column value.
     *
     * @return resource
     */
    public function getLogo()
    {

        return $this->logo;
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
     * Set the value of [occurrencerefno] column.
     *
     * @param  int $v new value
     * @return Collectionsref The current object (for fluent API support)
     */
    public function setOccurrencerefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->occurrencerefno !== $v) {
            $this->occurrencerefno = $v;
            $this->modifiedColumns[] = CollectionsrefPeer::OCCURRENCEREFNO;
        }


        return $this;
    } // setOccurrencerefno()

    /**
     * Set the value of [museum] column.
     *
     * @param  string $v new value
     * @return Collectionsref The current object (for fluent API support)
     */
    public function setMuseum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->museum !== $v) {
            $this->museum = $v;
            $this->modifiedColumns[] = CollectionsrefPeer::MUSEUM;
        }


        return $this;
    } // setMuseum()

    /**
     * Set the value of [acronym] column.
     *
     * @param  string $v new value
     * @return Collectionsref The current object (for fluent API support)
     */
    public function setAcronym($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acronym !== $v) {
            $this->acronym = $v;
            $this->modifiedColumns[] = CollectionsrefPeer::ACRONYM;
        }


        return $this;
    } // setAcronym()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Collectionsref The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = CollectionsrefPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [logoname] column.
     *
     * @param  string $v new value
     * @return Collectionsref The current object (for fluent API support)
     */
    public function setLogoname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->logoname !== $v) {
            $this->logoname = $v;
            $this->modifiedColumns[] = CollectionsrefPeer::LOGONAME;
        }


        return $this;
    } // setLogoname()

    /**
     * Set the value of [url] column.
     *
     * @param  string $v new value
     * @return Collectionsref The current object (for fluent API support)
     */
    public function setUrl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url !== $v) {
            $this->url = $v;
            $this->modifiedColumns[] = CollectionsrefPeer::URL;
        }


        return $this;
    } // setUrl()

    /**
     * Set the value of [logo] column.
     *
     * @param  resource $v new value
     * @return Collectionsref The current object (for fluent API support)
     */
    public function setLogo($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->logo = fopen('php://memory', 'r+');
            fwrite($this->logo, $v);
            rewind($this->logo);
        } else { // it's already a stream
            $this->logo = $v;
        }
        $this->modifiedColumns[] = CollectionsrefPeer::LOGO;


        return $this;
    } // setLogo()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Collectionsref The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = CollectionsrefPeer::TS;
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

            $this->occurrencerefno = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->museum = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->acronym = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->c_code = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->logoname = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->url = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            if ($row[$startcol + 6] !== null) {
                $this->logo = fopen('php://memory', 'r+');
                fwrite($this->logo, $row[$startcol + 6]);
                rewind($this->logo);
            } else {
                $this->logo = null;
            }
            $this->ts = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = CollectionsrefPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Collectionsref object", $e);
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
            $con = Propel::getConnection(CollectionsrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CollectionsrefPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CollectionsrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CollectionsrefQuery::create()
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
            $con = Propel::getConnection(CollectionsrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CollectionsrefPeer::addInstanceToPool($this);
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
                // Rewind the logo LOB column, since PDO does not rewind after inserting value.
                if ($this->logo !== null && is_resource($this->logo)) {
                    rewind($this->logo);
                }

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
        if ($this->isColumnModified(CollectionsrefPeer::OCCURRENCEREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`OccurrenceRefNo`';
        }
        if ($this->isColumnModified(CollectionsrefPeer::MUSEUM)) {
            $modifiedColumns[':p' . $index++]  = '`Museum`';
        }
        if ($this->isColumnModified(CollectionsrefPeer::ACRONYM)) {
            $modifiedColumns[':p' . $index++]  = '`Acronym`';
        }
        if ($this->isColumnModified(CollectionsrefPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_code`';
        }
        if ($this->isColumnModified(CollectionsrefPeer::LOGONAME)) {
            $modifiedColumns[':p' . $index++]  = '`logoname`';
        }
        if ($this->isColumnModified(CollectionsrefPeer::URL)) {
            $modifiedColumns[':p' . $index++]  = '`URL`';
        }
        if ($this->isColumnModified(CollectionsrefPeer::LOGO)) {
            $modifiedColumns[':p' . $index++]  = '`Logo`';
        }
        if ($this->isColumnModified(CollectionsrefPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `collectionsref` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`OccurrenceRefNo`':
                        $stmt->bindValue($identifier, $this->occurrencerefno, PDO::PARAM_INT);
                        break;
                    case '`Museum`':
                        $stmt->bindValue($identifier, $this->museum, PDO::PARAM_STR);
                        break;
                    case '`Acronym`':
                        $stmt->bindValue($identifier, $this->acronym, PDO::PARAM_STR);
                        break;
                    case '`C_code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`logoname`':
                        $stmt->bindValue($identifier, $this->logoname, PDO::PARAM_STR);
                        break;
                    case '`URL`':
                        $stmt->bindValue($identifier, $this->url, PDO::PARAM_STR);
                        break;
                    case '`Logo`':
                        if (is_resource($this->logo)) {
                            rewind($this->logo);
                        }
                        $stmt->bindValue($identifier, $this->logo, PDO::PARAM_LOB);
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


            if (($retval = CollectionsrefPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CollectionsrefPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOccurrencerefno();
                break;
            case 1:
                return $this->getMuseum();
                break;
            case 2:
                return $this->getAcronym();
                break;
            case 3:
                return $this->getCCode();
                break;
            case 4:
                return $this->getLogoname();
                break;
            case 5:
                return $this->getUrl();
                break;
            case 6:
                return $this->getLogo();
                break;
            case 7:
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
        if (isset($alreadyDumpedObjects['Collectionsref'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Collectionsref'][$this->getPrimaryKey()] = true;
        $keys = CollectionsrefPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOccurrencerefno(),
            $keys[1] => $this->getMuseum(),
            $keys[2] => $this->getAcronym(),
            $keys[3] => $this->getCCode(),
            $keys[4] => $this->getLogoname(),
            $keys[5] => $this->getUrl(),
            $keys[6] => $this->getLogo(),
            $keys[7] => $this->getTs(),
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
        $pos = CollectionsrefPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOccurrencerefno($value);
                break;
            case 1:
                $this->setMuseum($value);
                break;
            case 2:
                $this->setAcronym($value);
                break;
            case 3:
                $this->setCCode($value);
                break;
            case 4:
                $this->setLogoname($value);
                break;
            case 5:
                $this->setUrl($value);
                break;
            case 6:
                $this->setLogo($value);
                break;
            case 7:
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
        $keys = CollectionsrefPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setOccurrencerefno($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMuseum($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAcronym($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCCode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLogoname($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setUrl($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLogo($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setTs($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CollectionsrefPeer::DATABASE_NAME);

        if ($this->isColumnModified(CollectionsrefPeer::OCCURRENCEREFNO)) $criteria->add(CollectionsrefPeer::OCCURRENCEREFNO, $this->occurrencerefno);
        if ($this->isColumnModified(CollectionsrefPeer::MUSEUM)) $criteria->add(CollectionsrefPeer::MUSEUM, $this->museum);
        if ($this->isColumnModified(CollectionsrefPeer::ACRONYM)) $criteria->add(CollectionsrefPeer::ACRONYM, $this->acronym);
        if ($this->isColumnModified(CollectionsrefPeer::C_CODE)) $criteria->add(CollectionsrefPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(CollectionsrefPeer::LOGONAME)) $criteria->add(CollectionsrefPeer::LOGONAME, $this->logoname);
        if ($this->isColumnModified(CollectionsrefPeer::URL)) $criteria->add(CollectionsrefPeer::URL, $this->url);
        if ($this->isColumnModified(CollectionsrefPeer::LOGO)) $criteria->add(CollectionsrefPeer::LOGO, $this->logo);
        if ($this->isColumnModified(CollectionsrefPeer::TS)) $criteria->add(CollectionsrefPeer::TS, $this->ts);

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
        $criteria = new Criteria(CollectionsrefPeer::DATABASE_NAME);
        $criteria->add(CollectionsrefPeer::OCCURRENCEREFNO, $this->occurrencerefno);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getOccurrencerefno();
    }

    /**
     * Generic method to set the primary key (occurrencerefno column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOccurrencerefno($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getOccurrencerefno();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Collectionsref (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setMuseum($this->getMuseum());
        $copyObj->setAcronym($this->getAcronym());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setLogoname($this->getLogoname());
        $copyObj->setUrl($this->getUrl());
        $copyObj->setLogo($this->getLogo());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setOccurrencerefno(NULL); // this is a auto-increment column, so set to default value
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
     * @return Collectionsref Clone of current object.
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
     * @return CollectionsrefPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CollectionsrefPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->occurrencerefno = null;
        $this->museum = null;
        $this->acronym = null;
        $this->c_code = null;
        $this->logoname = null;
        $this->url = null;
        $this->logo = null;
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
        return (string) $this->exportTo(CollectionsrefPeer::DEFAULT_STRING_FORMAT);
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
