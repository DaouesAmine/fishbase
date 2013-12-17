<?php


/**
 * Base class that represents a row from the 'zweb_cn3' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseZwebCn3 extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ZwebCn3Peer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ZwebCn3Peer
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
     * The value for the comname field.
     * @var        string
     */
    protected $comname;

    /**
     * The value for the nametype field.
     * @var        string
     */
    protected $nametype;

    /**
     * The value for the nt field.
     * @var        int
     */
    protected $nt;

    /**
     * The value for the rank1 field.
     * @var        int
     */
    protected $rank1;

    /**
     * The value for the eng field.
     * @var        int
     */
    protected $eng;

    /**
     * The value for the fre field.
     * @var        int
     */
    protected $fre;

    /**
     * The value for the spa field.
     * @var        int
     */
    protected $spa;

    /**
     * The value for the autoctr field.
     * @var        int
     */
    protected $autoctr;

    /**
     * The value for the unicodetext field.
     * @var        string
     */
    protected $unicodetext;

    /**
     * The value for the script field.
     * @var        string
     */
    protected $script;

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
     * Get the [speccode] column value.
     *
     * @return int
     */
    public function getSpeccode()
    {

        return $this->speccode;
    }

    /**
     * Get the [comname] column value.
     *
     * @return string
     */
    public function getComname()
    {

        return $this->comname;
    }

    /**
     * Get the [nametype] column value.
     *
     * @return string
     */
    public function getNametype()
    {

        return $this->nametype;
    }

    /**
     * Get the [nt] column value.
     *
     * @return int
     */
    public function getNt()
    {

        return $this->nt;
    }

    /**
     * Get the [rank1] column value.
     *
     * @return int
     */
    public function getRank1()
    {

        return $this->rank1;
    }

    /**
     * Get the [eng] column value.
     *
     * @return int
     */
    public function getEng()
    {

        return $this->eng;
    }

    /**
     * Get the [fre] column value.
     *
     * @return int
     */
    public function getFre()
    {

        return $this->fre;
    }

    /**
     * Get the [spa] column value.
     *
     * @return int
     */
    public function getSpa()
    {

        return $this->spa;
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
     * Get the [unicodetext] column value.
     *
     * @return string
     */
    public function getUnicodetext()
    {

        return $this->unicodetext;
    }

    /**
     * Get the [script] column value.
     *
     * @return string
     */
    public function getScript()
    {

        return $this->script;
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
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return ZwebCn3 The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = ZwebCn3Peer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [comname] column.
     *
     * @param  string $v new value
     * @return ZwebCn3 The current object (for fluent API support)
     */
    public function setComname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comname !== $v) {
            $this->comname = $v;
            $this->modifiedColumns[] = ZwebCn3Peer::COMNAME;
        }


        return $this;
    } // setComname()

    /**
     * Set the value of [nametype] column.
     *
     * @param  string $v new value
     * @return ZwebCn3 The current object (for fluent API support)
     */
    public function setNametype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nametype !== $v) {
            $this->nametype = $v;
            $this->modifiedColumns[] = ZwebCn3Peer::NAMETYPE;
        }


        return $this;
    } // setNametype()

    /**
     * Set the value of [nt] column.
     *
     * @param  int $v new value
     * @return ZwebCn3 The current object (for fluent API support)
     */
    public function setNt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->nt !== $v) {
            $this->nt = $v;
            $this->modifiedColumns[] = ZwebCn3Peer::NT;
        }


        return $this;
    } // setNt()

    /**
     * Set the value of [rank1] column.
     *
     * @param  int $v new value
     * @return ZwebCn3 The current object (for fluent API support)
     */
    public function setRank1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rank1 !== $v) {
            $this->rank1 = $v;
            $this->modifiedColumns[] = ZwebCn3Peer::RANK1;
        }


        return $this;
    } // setRank1()

    /**
     * Set the value of [eng] column.
     *
     * @param  int $v new value
     * @return ZwebCn3 The current object (for fluent API support)
     */
    public function setEng($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eng !== $v) {
            $this->eng = $v;
            $this->modifiedColumns[] = ZwebCn3Peer::ENG;
        }


        return $this;
    } // setEng()

    /**
     * Set the value of [fre] column.
     *
     * @param  int $v new value
     * @return ZwebCn3 The current object (for fluent API support)
     */
    public function setFre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fre !== $v) {
            $this->fre = $v;
            $this->modifiedColumns[] = ZwebCn3Peer::FRE;
        }


        return $this;
    } // setFre()

    /**
     * Set the value of [spa] column.
     *
     * @param  int $v new value
     * @return ZwebCn3 The current object (for fluent API support)
     */
    public function setSpa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spa !== $v) {
            $this->spa = $v;
            $this->modifiedColumns[] = ZwebCn3Peer::SPA;
        }


        return $this;
    } // setSpa()

    /**
     * Set the value of [autoctr] column.
     *
     * @param  int $v new value
     * @return ZwebCn3 The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = ZwebCn3Peer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [unicodetext] column.
     *
     * @param  string $v new value
     * @return ZwebCn3 The current object (for fluent API support)
     */
    public function setUnicodetext($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unicodetext !== $v) {
            $this->unicodetext = $v;
            $this->modifiedColumns[] = ZwebCn3Peer::UNICODETEXT;
        }


        return $this;
    } // setUnicodetext()

    /**
     * Set the value of [script] column.
     *
     * @param  string $v new value
     * @return ZwebCn3 The current object (for fluent API support)
     */
    public function setScript($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->script !== $v) {
            $this->script = $v;
            $this->modifiedColumns[] = ZwebCn3Peer::SCRIPT;
        }


        return $this;
    } // setScript()

    /**
     * Set the value of [pkid] column.
     *
     * @param  string $v new value
     * @return ZwebCn3 The current object (for fluent API support)
     */
    public function setPkid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pkid !== $v) {
            $this->pkid = $v;
            $this->modifiedColumns[] = ZwebCn3Peer::PKID;
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

            $this->speccode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->comname = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->nametype = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->nt = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->rank1 = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->eng = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->fre = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->spa = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->autoctr = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->unicodetext = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->script = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->pkid = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = ZwebCn3Peer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ZwebCn3 object", $e);
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
            $con = Propel::getConnection(ZwebCn3Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ZwebCn3Peer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(ZwebCn3Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ZwebCn3Query::create()
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
            $con = Propel::getConnection(ZwebCn3Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ZwebCn3Peer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = ZwebCn3Peer::PKID;
        if (null !== $this->pkid) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ZwebCn3Peer::PKID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ZwebCn3Peer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(ZwebCn3Peer::COMNAME)) {
            $modifiedColumns[':p' . $index++]  = '`ComName`';
        }
        if ($this->isColumnModified(ZwebCn3Peer::NAMETYPE)) {
            $modifiedColumns[':p' . $index++]  = '`NameType`';
        }
        if ($this->isColumnModified(ZwebCn3Peer::NT)) {
            $modifiedColumns[':p' . $index++]  = '`NT`';
        }
        if ($this->isColumnModified(ZwebCn3Peer::RANK1)) {
            $modifiedColumns[':p' . $index++]  = '`Rank1`';
        }
        if ($this->isColumnModified(ZwebCn3Peer::ENG)) {
            $modifiedColumns[':p' . $index++]  = '`Eng`';
        }
        if ($this->isColumnModified(ZwebCn3Peer::FRE)) {
            $modifiedColumns[':p' . $index++]  = '`Fre`';
        }
        if ($this->isColumnModified(ZwebCn3Peer::SPA)) {
            $modifiedColumns[':p' . $index++]  = '`Spa`';
        }
        if ($this->isColumnModified(ZwebCn3Peer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(ZwebCn3Peer::UNICODETEXT)) {
            $modifiedColumns[':p' . $index++]  = '`UnicodeText`';
        }
        if ($this->isColumnModified(ZwebCn3Peer::SCRIPT)) {
            $modifiedColumns[':p' . $index++]  = '`Script`';
        }
        if ($this->isColumnModified(ZwebCn3Peer::PKID)) {
            $modifiedColumns[':p' . $index++]  = '`PKID`';
        }

        $sql = sprintf(
            'INSERT INTO `zweb_cn3` (%s) VALUES (%s)',
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
                    case '`ComName`':
                        $stmt->bindValue($identifier, $this->comname, PDO::PARAM_STR);
                        break;
                    case '`NameType`':
                        $stmt->bindValue($identifier, $this->nametype, PDO::PARAM_STR);
                        break;
                    case '`NT`':
                        $stmt->bindValue($identifier, $this->nt, PDO::PARAM_INT);
                        break;
                    case '`Rank1`':
                        $stmt->bindValue($identifier, $this->rank1, PDO::PARAM_INT);
                        break;
                    case '`Eng`':
                        $stmt->bindValue($identifier, $this->eng, PDO::PARAM_INT);
                        break;
                    case '`Fre`':
                        $stmt->bindValue($identifier, $this->fre, PDO::PARAM_INT);
                        break;
                    case '`Spa`':
                        $stmt->bindValue($identifier, $this->spa, PDO::PARAM_INT);
                        break;
                    case '`autoctr`':
                        $stmt->bindValue($identifier, $this->autoctr, PDO::PARAM_INT);
                        break;
                    case '`UnicodeText`':
                        $stmt->bindValue($identifier, $this->unicodetext, PDO::PARAM_STR);
                        break;
                    case '`Script`':
                        $stmt->bindValue($identifier, $this->script, PDO::PARAM_STR);
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


            if (($retval = ZwebCn3Peer::doValidate($this, $columns)) !== true) {
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
        $pos = ZwebCn3Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getComname();
                break;
            case 2:
                return $this->getNametype();
                break;
            case 3:
                return $this->getNt();
                break;
            case 4:
                return $this->getRank1();
                break;
            case 5:
                return $this->getEng();
                break;
            case 6:
                return $this->getFre();
                break;
            case 7:
                return $this->getSpa();
                break;
            case 8:
                return $this->getAutoctr();
                break;
            case 9:
                return $this->getUnicodetext();
                break;
            case 10:
                return $this->getScript();
                break;
            case 11:
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
        if (isset($alreadyDumpedObjects['ZwebCn3'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ZwebCn3'][$this->getPrimaryKey()] = true;
        $keys = ZwebCn3Peer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getSpeccode(),
            $keys[1] => $this->getComname(),
            $keys[2] => $this->getNametype(),
            $keys[3] => $this->getNt(),
            $keys[4] => $this->getRank1(),
            $keys[5] => $this->getEng(),
            $keys[6] => $this->getFre(),
            $keys[7] => $this->getSpa(),
            $keys[8] => $this->getAutoctr(),
            $keys[9] => $this->getUnicodetext(),
            $keys[10] => $this->getScript(),
            $keys[11] => $this->getPkid(),
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
        $pos = ZwebCn3Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setComname($value);
                break;
            case 2:
                $this->setNametype($value);
                break;
            case 3:
                $this->setNt($value);
                break;
            case 4:
                $this->setRank1($value);
                break;
            case 5:
                $this->setEng($value);
                break;
            case 6:
                $this->setFre($value);
                break;
            case 7:
                $this->setSpa($value);
                break;
            case 8:
                $this->setAutoctr($value);
                break;
            case 9:
                $this->setUnicodetext($value);
                break;
            case 10:
                $this->setScript($value);
                break;
            case 11:
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
        $keys = ZwebCn3Peer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setSpeccode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setComname($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setNametype($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNt($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setRank1($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEng($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setFre($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSpa($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setAutoctr($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setUnicodetext($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setScript($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setPkid($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ZwebCn3Peer::DATABASE_NAME);

        if ($this->isColumnModified(ZwebCn3Peer::SPECCODE)) $criteria->add(ZwebCn3Peer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(ZwebCn3Peer::COMNAME)) $criteria->add(ZwebCn3Peer::COMNAME, $this->comname);
        if ($this->isColumnModified(ZwebCn3Peer::NAMETYPE)) $criteria->add(ZwebCn3Peer::NAMETYPE, $this->nametype);
        if ($this->isColumnModified(ZwebCn3Peer::NT)) $criteria->add(ZwebCn3Peer::NT, $this->nt);
        if ($this->isColumnModified(ZwebCn3Peer::RANK1)) $criteria->add(ZwebCn3Peer::RANK1, $this->rank1);
        if ($this->isColumnModified(ZwebCn3Peer::ENG)) $criteria->add(ZwebCn3Peer::ENG, $this->eng);
        if ($this->isColumnModified(ZwebCn3Peer::FRE)) $criteria->add(ZwebCn3Peer::FRE, $this->fre);
        if ($this->isColumnModified(ZwebCn3Peer::SPA)) $criteria->add(ZwebCn3Peer::SPA, $this->spa);
        if ($this->isColumnModified(ZwebCn3Peer::AUTOCTR)) $criteria->add(ZwebCn3Peer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(ZwebCn3Peer::UNICODETEXT)) $criteria->add(ZwebCn3Peer::UNICODETEXT, $this->unicodetext);
        if ($this->isColumnModified(ZwebCn3Peer::SCRIPT)) $criteria->add(ZwebCn3Peer::SCRIPT, $this->script);
        if ($this->isColumnModified(ZwebCn3Peer::PKID)) $criteria->add(ZwebCn3Peer::PKID, $this->pkid);

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
        $criteria = new Criteria(ZwebCn3Peer::DATABASE_NAME);
        $criteria->add(ZwebCn3Peer::PKID, $this->pkid);

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
     * @param object $copyObj An object of ZwebCn3 (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setComname($this->getComname());
        $copyObj->setNametype($this->getNametype());
        $copyObj->setNt($this->getNt());
        $copyObj->setRank1($this->getRank1());
        $copyObj->setEng($this->getEng());
        $copyObj->setFre($this->getFre());
        $copyObj->setSpa($this->getSpa());
        $copyObj->setAutoctr($this->getAutoctr());
        $copyObj->setUnicodetext($this->getUnicodetext());
        $copyObj->setScript($this->getScript());
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
     * @return ZwebCn3 Clone of current object.
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
     * @return ZwebCn3Peer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ZwebCn3Peer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->speccode = null;
        $this->comname = null;
        $this->nametype = null;
        $this->nt = null;
        $this->rank1 = null;
        $this->eng = null;
        $this->fre = null;
        $this->spa = null;
        $this->autoctr = null;
        $this->unicodetext = null;
        $this->script = null;
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
        return (string) $this->exportTo(ZwebCn3Peer::DEFAULT_STRING_FORMAT);
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
