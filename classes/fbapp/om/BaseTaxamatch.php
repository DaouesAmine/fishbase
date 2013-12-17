<?php


/**
 * Base class that represents a row from the 'taxamatch' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseTaxamatch extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TaxamatchPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TaxamatchPeer
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
     * The value for the syncode field.
     * @var        int
     */
    protected $syncode;

    /**
     * The value for the syngenus field.
     * @var        string
     */
    protected $syngenus;

    /**
     * The value for the synspecies field.
     * @var        string
     */
    protected $synspecies;

    /**
     * The value for the status field.
     * @var        string
     */
    protected $status;

    /**
     * The value for the lastepithet field.
     * @var        string
     */
    protected $lastepithet;

    /**
     * The value for the normalizegenus field.
     * @var        string
     */
    protected $normalizegenus;

    /**
     * The value for the normalizespecies field.
     * @var        string
     */
    protected $normalizespecies;

    /**
     * The value for the normalizelastepithet field.
     * @var        string
     */
    protected $normalizelastepithet;

    /**
     * The value for the soundexgenus field.
     * @var        string
     */
    protected $soundexgenus;

    /**
     * The value for the soundexspecies field.
     * @var        string
     */
    protected $soundexspecies;

    /**
     * The value for the soundexlastepithet field.
     * @var        string
     */
    protected $soundexlastepithet;

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
     * Get the [syncode] column value.
     *
     * @return int
     */
    public function getSyncode()
    {

        return $this->syncode;
    }

    /**
     * Get the [syngenus] column value.
     *
     * @return string
     */
    public function getSyngenus()
    {

        return $this->syngenus;
    }

    /**
     * Get the [synspecies] column value.
     *
     * @return string
     */
    public function getSynspecies()
    {

        return $this->synspecies;
    }

    /**
     * Get the [status] column value.
     *
     * @return string
     */
    public function getStatus()
    {

        return $this->status;
    }

    /**
     * Get the [lastepithet] column value.
     *
     * @return string
     */
    public function getLastepithet()
    {

        return $this->lastepithet;
    }

    /**
     * Get the [normalizegenus] column value.
     *
     * @return string
     */
    public function getNormalizegenus()
    {

        return $this->normalizegenus;
    }

    /**
     * Get the [normalizespecies] column value.
     *
     * @return string
     */
    public function getNormalizespecies()
    {

        return $this->normalizespecies;
    }

    /**
     * Get the [normalizelastepithet] column value.
     *
     * @return string
     */
    public function getNormalizelastepithet()
    {

        return $this->normalizelastepithet;
    }

    /**
     * Get the [soundexgenus] column value.
     *
     * @return string
     */
    public function getSoundexgenus()
    {

        return $this->soundexgenus;
    }

    /**
     * Get the [soundexspecies] column value.
     *
     * @return string
     */
    public function getSoundexspecies()
    {

        return $this->soundexspecies;
    }

    /**
     * Get the [soundexlastepithet] column value.
     *
     * @return string
     */
    public function getSoundexlastepithet()
    {

        return $this->soundexlastepithet;
    }

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Taxamatch The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = TaxamatchPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [syncode] column.
     *
     * @param  int $v new value
     * @return Taxamatch The current object (for fluent API support)
     */
    public function setSyncode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->syncode !== $v) {
            $this->syncode = $v;
            $this->modifiedColumns[] = TaxamatchPeer::SYNCODE;
        }


        return $this;
    } // setSyncode()

    /**
     * Set the value of [syngenus] column.
     *
     * @param  string $v new value
     * @return Taxamatch The current object (for fluent API support)
     */
    public function setSyngenus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->syngenus !== $v) {
            $this->syngenus = $v;
            $this->modifiedColumns[] = TaxamatchPeer::SYNGENUS;
        }


        return $this;
    } // setSyngenus()

    /**
     * Set the value of [synspecies] column.
     *
     * @param  string $v new value
     * @return Taxamatch The current object (for fluent API support)
     */
    public function setSynspecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->synspecies !== $v) {
            $this->synspecies = $v;
            $this->modifiedColumns[] = TaxamatchPeer::SYNSPECIES;
        }


        return $this;
    } // setSynspecies()

    /**
     * Set the value of [status] column.
     *
     * @param  string $v new value
     * @return Taxamatch The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[] = TaxamatchPeer::STATUS;
        }


        return $this;
    } // setStatus()

    /**
     * Set the value of [lastepithet] column.
     *
     * @param  string $v new value
     * @return Taxamatch The current object (for fluent API support)
     */
    public function setLastepithet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lastepithet !== $v) {
            $this->lastepithet = $v;
            $this->modifiedColumns[] = TaxamatchPeer::LASTEPITHET;
        }


        return $this;
    } // setLastepithet()

    /**
     * Set the value of [normalizegenus] column.
     *
     * @param  string $v new value
     * @return Taxamatch The current object (for fluent API support)
     */
    public function setNormalizegenus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->normalizegenus !== $v) {
            $this->normalizegenus = $v;
            $this->modifiedColumns[] = TaxamatchPeer::NORMALIZEGENUS;
        }


        return $this;
    } // setNormalizegenus()

    /**
     * Set the value of [normalizespecies] column.
     *
     * @param  string $v new value
     * @return Taxamatch The current object (for fluent API support)
     */
    public function setNormalizespecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->normalizespecies !== $v) {
            $this->normalizespecies = $v;
            $this->modifiedColumns[] = TaxamatchPeer::NORMALIZESPECIES;
        }


        return $this;
    } // setNormalizespecies()

    /**
     * Set the value of [normalizelastepithet] column.
     *
     * @param  string $v new value
     * @return Taxamatch The current object (for fluent API support)
     */
    public function setNormalizelastepithet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->normalizelastepithet !== $v) {
            $this->normalizelastepithet = $v;
            $this->modifiedColumns[] = TaxamatchPeer::NORMALIZELASTEPITHET;
        }


        return $this;
    } // setNormalizelastepithet()

    /**
     * Set the value of [soundexgenus] column.
     *
     * @param  string $v new value
     * @return Taxamatch The current object (for fluent API support)
     */
    public function setSoundexgenus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->soundexgenus !== $v) {
            $this->soundexgenus = $v;
            $this->modifiedColumns[] = TaxamatchPeer::SOUNDEXGENUS;
        }


        return $this;
    } // setSoundexgenus()

    /**
     * Set the value of [soundexspecies] column.
     *
     * @param  string $v new value
     * @return Taxamatch The current object (for fluent API support)
     */
    public function setSoundexspecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->soundexspecies !== $v) {
            $this->soundexspecies = $v;
            $this->modifiedColumns[] = TaxamatchPeer::SOUNDEXSPECIES;
        }


        return $this;
    } // setSoundexspecies()

    /**
     * Set the value of [soundexlastepithet] column.
     *
     * @param  string $v new value
     * @return Taxamatch The current object (for fluent API support)
     */
    public function setSoundexlastepithet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->soundexlastepithet !== $v) {
            $this->soundexlastepithet = $v;
            $this->modifiedColumns[] = TaxamatchPeer::SOUNDEXLASTEPITHET;
        }


        return $this;
    } // setSoundexlastepithet()

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
            $this->syncode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->syngenus = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->synspecies = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->status = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->lastepithet = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->normalizegenus = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->normalizespecies = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->normalizelastepithet = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->soundexgenus = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->soundexspecies = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->soundexlastepithet = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = TaxamatchPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Taxamatch object", $e);
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
            $con = Propel::getConnection(TaxamatchPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TaxamatchPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(TaxamatchPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TaxamatchQuery::create()
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
            $con = Propel::getConnection(TaxamatchPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                TaxamatchPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(TaxamatchPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(TaxamatchPeer::SYNCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SynCode`';
        }
        if ($this->isColumnModified(TaxamatchPeer::SYNGENUS)) {
            $modifiedColumns[':p' . $index++]  = '`SynGenus`';
        }
        if ($this->isColumnModified(TaxamatchPeer::SYNSPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`SynSpecies`';
        }
        if ($this->isColumnModified(TaxamatchPeer::STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`Status`';
        }
        if ($this->isColumnModified(TaxamatchPeer::LASTEPITHET)) {
            $modifiedColumns[':p' . $index++]  = '`LastEpithet`';
        }
        if ($this->isColumnModified(TaxamatchPeer::NORMALIZEGENUS)) {
            $modifiedColumns[':p' . $index++]  = '`NormalizeGenus`';
        }
        if ($this->isColumnModified(TaxamatchPeer::NORMALIZESPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`NormalizeSpecies`';
        }
        if ($this->isColumnModified(TaxamatchPeer::NORMALIZELASTEPITHET)) {
            $modifiedColumns[':p' . $index++]  = '`NormalizeLastEpithet`';
        }
        if ($this->isColumnModified(TaxamatchPeer::SOUNDEXGENUS)) {
            $modifiedColumns[':p' . $index++]  = '`SoundexGenus`';
        }
        if ($this->isColumnModified(TaxamatchPeer::SOUNDEXSPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`SoundexSpecies`';
        }
        if ($this->isColumnModified(TaxamatchPeer::SOUNDEXLASTEPITHET)) {
            $modifiedColumns[':p' . $index++]  = '`SoundexLastEpithet`';
        }

        $sql = sprintf(
            'INSERT INTO `taxamatch` (%s) VALUES (%s)',
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
                    case '`SynCode`':
                        $stmt->bindValue($identifier, $this->syncode, PDO::PARAM_INT);
                        break;
                    case '`SynGenus`':
                        $stmt->bindValue($identifier, $this->syngenus, PDO::PARAM_STR);
                        break;
                    case '`SynSpecies`':
                        $stmt->bindValue($identifier, $this->synspecies, PDO::PARAM_STR);
                        break;
                    case '`Status`':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_STR);
                        break;
                    case '`LastEpithet`':
                        $stmt->bindValue($identifier, $this->lastepithet, PDO::PARAM_STR);
                        break;
                    case '`NormalizeGenus`':
                        $stmt->bindValue($identifier, $this->normalizegenus, PDO::PARAM_STR);
                        break;
                    case '`NormalizeSpecies`':
                        $stmt->bindValue($identifier, $this->normalizespecies, PDO::PARAM_STR);
                        break;
                    case '`NormalizeLastEpithet`':
                        $stmt->bindValue($identifier, $this->normalizelastepithet, PDO::PARAM_STR);
                        break;
                    case '`SoundexGenus`':
                        $stmt->bindValue($identifier, $this->soundexgenus, PDO::PARAM_STR);
                        break;
                    case '`SoundexSpecies`':
                        $stmt->bindValue($identifier, $this->soundexspecies, PDO::PARAM_STR);
                        break;
                    case '`SoundexLastEpithet`':
                        $stmt->bindValue($identifier, $this->soundexlastepithet, PDO::PARAM_STR);
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


            if (($retval = TaxamatchPeer::doValidate($this, $columns)) !== true) {
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
        $pos = TaxamatchPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSyncode();
                break;
            case 2:
                return $this->getSyngenus();
                break;
            case 3:
                return $this->getSynspecies();
                break;
            case 4:
                return $this->getStatus();
                break;
            case 5:
                return $this->getLastepithet();
                break;
            case 6:
                return $this->getNormalizegenus();
                break;
            case 7:
                return $this->getNormalizespecies();
                break;
            case 8:
                return $this->getNormalizelastepithet();
                break;
            case 9:
                return $this->getSoundexgenus();
                break;
            case 10:
                return $this->getSoundexspecies();
                break;
            case 11:
                return $this->getSoundexlastepithet();
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
        if (isset($alreadyDumpedObjects['Taxamatch'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Taxamatch'][serialize($this->getPrimaryKey())] = true;
        $keys = TaxamatchPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getSpeccode(),
            $keys[1] => $this->getSyncode(),
            $keys[2] => $this->getSyngenus(),
            $keys[3] => $this->getSynspecies(),
            $keys[4] => $this->getStatus(),
            $keys[5] => $this->getLastepithet(),
            $keys[6] => $this->getNormalizegenus(),
            $keys[7] => $this->getNormalizespecies(),
            $keys[8] => $this->getNormalizelastepithet(),
            $keys[9] => $this->getSoundexgenus(),
            $keys[10] => $this->getSoundexspecies(),
            $keys[11] => $this->getSoundexlastepithet(),
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
        $pos = TaxamatchPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSyncode($value);
                break;
            case 2:
                $this->setSyngenus($value);
                break;
            case 3:
                $this->setSynspecies($value);
                break;
            case 4:
                $this->setStatus($value);
                break;
            case 5:
                $this->setLastepithet($value);
                break;
            case 6:
                $this->setNormalizegenus($value);
                break;
            case 7:
                $this->setNormalizespecies($value);
                break;
            case 8:
                $this->setNormalizelastepithet($value);
                break;
            case 9:
                $this->setSoundexgenus($value);
                break;
            case 10:
                $this->setSoundexspecies($value);
                break;
            case 11:
                $this->setSoundexlastepithet($value);
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
        $keys = TaxamatchPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setSpeccode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSyncode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSyngenus($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSynspecies($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setStatus($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLastepithet($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setNormalizegenus($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNormalizespecies($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setNormalizelastepithet($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setSoundexgenus($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setSoundexspecies($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setSoundexlastepithet($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TaxamatchPeer::DATABASE_NAME);

        if ($this->isColumnModified(TaxamatchPeer::SPECCODE)) $criteria->add(TaxamatchPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(TaxamatchPeer::SYNCODE)) $criteria->add(TaxamatchPeer::SYNCODE, $this->syncode);
        if ($this->isColumnModified(TaxamatchPeer::SYNGENUS)) $criteria->add(TaxamatchPeer::SYNGENUS, $this->syngenus);
        if ($this->isColumnModified(TaxamatchPeer::SYNSPECIES)) $criteria->add(TaxamatchPeer::SYNSPECIES, $this->synspecies);
        if ($this->isColumnModified(TaxamatchPeer::STATUS)) $criteria->add(TaxamatchPeer::STATUS, $this->status);
        if ($this->isColumnModified(TaxamatchPeer::LASTEPITHET)) $criteria->add(TaxamatchPeer::LASTEPITHET, $this->lastepithet);
        if ($this->isColumnModified(TaxamatchPeer::NORMALIZEGENUS)) $criteria->add(TaxamatchPeer::NORMALIZEGENUS, $this->normalizegenus);
        if ($this->isColumnModified(TaxamatchPeer::NORMALIZESPECIES)) $criteria->add(TaxamatchPeer::NORMALIZESPECIES, $this->normalizespecies);
        if ($this->isColumnModified(TaxamatchPeer::NORMALIZELASTEPITHET)) $criteria->add(TaxamatchPeer::NORMALIZELASTEPITHET, $this->normalizelastepithet);
        if ($this->isColumnModified(TaxamatchPeer::SOUNDEXGENUS)) $criteria->add(TaxamatchPeer::SOUNDEXGENUS, $this->soundexgenus);
        if ($this->isColumnModified(TaxamatchPeer::SOUNDEXSPECIES)) $criteria->add(TaxamatchPeer::SOUNDEXSPECIES, $this->soundexspecies);
        if ($this->isColumnModified(TaxamatchPeer::SOUNDEXLASTEPITHET)) $criteria->add(TaxamatchPeer::SOUNDEXLASTEPITHET, $this->soundexlastepithet);

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
        $criteria = new Criteria(TaxamatchPeer::DATABASE_NAME);
        $criteria->add(TaxamatchPeer::SPECCODE, $this->speccode);
        $criteria->add(TaxamatchPeer::SYNCODE, $this->syncode);

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
        $pks[0] = $this->getSpeccode();
        $pks[1] = $this->getSyncode();

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
        $this->setSpeccode($keys[0]);
        $this->setSyncode($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getSpeccode()) && (null === $this->getSyncode());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Taxamatch (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setSyncode($this->getSyncode());
        $copyObj->setSyngenus($this->getSyngenus());
        $copyObj->setSynspecies($this->getSynspecies());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setLastepithet($this->getLastepithet());
        $copyObj->setNormalizegenus($this->getNormalizegenus());
        $copyObj->setNormalizespecies($this->getNormalizespecies());
        $copyObj->setNormalizelastepithet($this->getNormalizelastepithet());
        $copyObj->setSoundexgenus($this->getSoundexgenus());
        $copyObj->setSoundexspecies($this->getSoundexspecies());
        $copyObj->setSoundexlastepithet($this->getSoundexlastepithet());
        if ($makeNew) {
            $copyObj->setNew(true);
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
     * @return Taxamatch Clone of current object.
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
     * @return TaxamatchPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TaxamatchPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->speccode = null;
        $this->syncode = null;
        $this->syngenus = null;
        $this->synspecies = null;
        $this->status = null;
        $this->lastepithet = null;
        $this->normalizegenus = null;
        $this->normalizespecies = null;
        $this->normalizelastepithet = null;
        $this->soundexgenus = null;
        $this->soundexspecies = null;
        $this->soundexlastepithet = null;
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
        return (string) $this->exportTo(TaxamatchPeer::DEFAULT_STRING_FORMAT);
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
