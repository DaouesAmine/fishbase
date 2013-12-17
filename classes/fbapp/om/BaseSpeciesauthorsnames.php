<?php


/**
 * Base class that represents a row from the 'speciesauthorsnames' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseSpeciesauthorsnames extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SpeciesauthorsnamesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SpeciesauthorsnamesPeer
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
     * The value for the valid field.
     * @var        boolean
     */
    protected $valid;

    /**
     * The value for the c7speciesid field.
     * @var        int
     */
    protected $c7speciesid;

    /**
     * The value for the seqno field.
     * @var        int
     */
    protected $seqno;

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
     * The value for the author field.
     * @var        string
     */
    protected $author;

    /**
     * The value for the url field.
     * @var        string
     */
    protected $url;

    /**
     * The value for the autnameinit field.
     * @var        string
     */
    protected $autnameinit;

    /**
     * The value for the autname field.
     * @var        string
     */
    protected $autname;

    /**
     * The value for the c7fauthoryearoc field.
     * @var        string
     */
    protected $c7fauthoryearoc;

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
     * Get the [syncode] column value.
     *
     * @return int
     */
    public function getSyncode()
    {

        return $this->syncode;
    }

    /**
     * Get the [valid] column value.
     *
     * @return boolean
     */
    public function getValid()
    {

        return $this->valid;
    }

    /**
     * Get the [c7speciesid] column value.
     *
     * @return int
     */
    public function getC7speciesid()
    {

        return $this->c7speciesid;
    }

    /**
     * Get the [seqno] column value.
     *
     * @return int
     */
    public function getSeqno()
    {

        return $this->seqno;
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
     * Get the [author] column value.
     *
     * @return string
     */
    public function getAuthor()
    {

        return $this->author;
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
     * Get the [autnameinit] column value.
     *
     * @return string
     */
    public function getAutnameinit()
    {

        return $this->autnameinit;
    }

    /**
     * Get the [autname] column value.
     *
     * @return string
     */
    public function getAutname()
    {

        return $this->autname;
    }

    /**
     * Get the [c7fauthoryearoc] column value.
     *
     * @return string
     */
    public function getC7fauthoryearoc()
    {

        return $this->c7fauthoryearoc;
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
     * @return Speciesauthorsnames The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = SpeciesauthorsnamesPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [syncode] column.
     *
     * @param  int $v new value
     * @return Speciesauthorsnames The current object (for fluent API support)
     */
    public function setSyncode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->syncode !== $v) {
            $this->syncode = $v;
            $this->modifiedColumns[] = SpeciesauthorsnamesPeer::SYNCODE;
        }


        return $this;
    } // setSyncode()

    /**
     * Sets the value of the [valid] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Speciesauthorsnames The current object (for fluent API support)
     */
    public function setValid($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->valid !== $v) {
            $this->valid = $v;
            $this->modifiedColumns[] = SpeciesauthorsnamesPeer::VALID;
        }


        return $this;
    } // setValid()

    /**
     * Set the value of [c7speciesid] column.
     *
     * @param  int $v new value
     * @return Speciesauthorsnames The current object (for fluent API support)
     */
    public function setC7speciesid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->c7speciesid !== $v) {
            $this->c7speciesid = $v;
            $this->modifiedColumns[] = SpeciesauthorsnamesPeer::C7SPECIESID;
        }


        return $this;
    } // setC7speciesid()

    /**
     * Set the value of [seqno] column.
     *
     * @param  int $v new value
     * @return Speciesauthorsnames The current object (for fluent API support)
     */
    public function setSeqno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->seqno !== $v) {
            $this->seqno = $v;
            $this->modifiedColumns[] = SpeciesauthorsnamesPeer::SEQNO;
        }


        return $this;
    } // setSeqno()

    /**
     * Set the value of [syngenus] column.
     *
     * @param  string $v new value
     * @return Speciesauthorsnames The current object (for fluent API support)
     */
    public function setSyngenus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->syngenus !== $v) {
            $this->syngenus = $v;
            $this->modifiedColumns[] = SpeciesauthorsnamesPeer::SYNGENUS;
        }


        return $this;
    } // setSyngenus()

    /**
     * Set the value of [synspecies] column.
     *
     * @param  string $v new value
     * @return Speciesauthorsnames The current object (for fluent API support)
     */
    public function setSynspecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->synspecies !== $v) {
            $this->synspecies = $v;
            $this->modifiedColumns[] = SpeciesauthorsnamesPeer::SYNSPECIES;
        }


        return $this;
    } // setSynspecies()

    /**
     * Set the value of [author] column.
     *
     * @param  string $v new value
     * @return Speciesauthorsnames The current object (for fluent API support)
     */
    public function setAuthor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->author !== $v) {
            $this->author = $v;
            $this->modifiedColumns[] = SpeciesauthorsnamesPeer::AUTHOR;
        }


        return $this;
    } // setAuthor()

    /**
     * Set the value of [url] column.
     *
     * @param  string $v new value
     * @return Speciesauthorsnames The current object (for fluent API support)
     */
    public function setUrl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url !== $v) {
            $this->url = $v;
            $this->modifiedColumns[] = SpeciesauthorsnamesPeer::URL;
        }


        return $this;
    } // setUrl()

    /**
     * Set the value of [autnameinit] column.
     *
     * @param  string $v new value
     * @return Speciesauthorsnames The current object (for fluent API support)
     */
    public function setAutnameinit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->autnameinit !== $v) {
            $this->autnameinit = $v;
            $this->modifiedColumns[] = SpeciesauthorsnamesPeer::AUTNAMEINIT;
        }


        return $this;
    } // setAutnameinit()

    /**
     * Set the value of [autname] column.
     *
     * @param  string $v new value
     * @return Speciesauthorsnames The current object (for fluent API support)
     */
    public function setAutname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->autname !== $v) {
            $this->autname = $v;
            $this->modifiedColumns[] = SpeciesauthorsnamesPeer::AUTNAME;
        }


        return $this;
    } // setAutname()

    /**
     * Set the value of [c7fauthoryearoc] column.
     *
     * @param  string $v new value
     * @return Speciesauthorsnames The current object (for fluent API support)
     */
    public function setC7fauthoryearoc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c7fauthoryearoc !== $v) {
            $this->c7fauthoryearoc = $v;
            $this->modifiedColumns[] = SpeciesauthorsnamesPeer::C7FAUTHORYEAROC;
        }


        return $this;
    } // setC7fauthoryearoc()

    /**
     * Set the value of [pkid] column.
     *
     * @param  string $v new value
     * @return Speciesauthorsnames The current object (for fluent API support)
     */
    public function setPkid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pkid !== $v) {
            $this->pkid = $v;
            $this->modifiedColumns[] = SpeciesauthorsnamesPeer::PKID;
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
            $this->syncode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->valid = ($row[$startcol + 2] !== null) ? (boolean) $row[$startcol + 2] : null;
            $this->c7speciesid = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->seqno = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->syngenus = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->synspecies = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->author = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->url = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->autnameinit = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->autname = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->c7fauthoryearoc = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->pkid = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 13; // 13 = SpeciesauthorsnamesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Speciesauthorsnames object", $e);
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
            $con = Propel::getConnection(SpeciesauthorsnamesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SpeciesauthorsnamesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(SpeciesauthorsnamesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SpeciesauthorsnamesQuery::create()
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
            $con = Propel::getConnection(SpeciesauthorsnamesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                SpeciesauthorsnamesPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = SpeciesauthorsnamesPeer::PKID;
        if (null !== $this->pkid) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpeciesauthorsnamesPeer::PKID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::SYNCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SynCode`';
        }
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::VALID)) {
            $modifiedColumns[':p' . $index++]  = '`Valid`';
        }
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::C7SPECIESID)) {
            $modifiedColumns[':p' . $index++]  = '`c7SpeciesId`';
        }
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::SEQNO)) {
            $modifiedColumns[':p' . $index++]  = '`SeqNo`';
        }
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::SYNGENUS)) {
            $modifiedColumns[':p' . $index++]  = '`SynGenus`';
        }
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::SYNSPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`SynSpecies`';
        }
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::AUTHOR)) {
            $modifiedColumns[':p' . $index++]  = '`Author`';
        }
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::URL)) {
            $modifiedColumns[':p' . $index++]  = '`URL`';
        }
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::AUTNAMEINIT)) {
            $modifiedColumns[':p' . $index++]  = '`AutNameInit`';
        }
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::AUTNAME)) {
            $modifiedColumns[':p' . $index++]  = '`AutName`';
        }
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::C7FAUTHORYEAROC)) {
            $modifiedColumns[':p' . $index++]  = '`c7fAuthorYearOC`';
        }
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::PKID)) {
            $modifiedColumns[':p' . $index++]  = '`PKID`';
        }

        $sql = sprintf(
            'INSERT INTO `speciesauthorsnames` (%s) VALUES (%s)',
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
                    case '`Valid`':
                        $stmt->bindValue($identifier, (int) $this->valid, PDO::PARAM_INT);
                        break;
                    case '`c7SpeciesId`':
                        $stmt->bindValue($identifier, $this->c7speciesid, PDO::PARAM_INT);
                        break;
                    case '`SeqNo`':
                        $stmt->bindValue($identifier, $this->seqno, PDO::PARAM_INT);
                        break;
                    case '`SynGenus`':
                        $stmt->bindValue($identifier, $this->syngenus, PDO::PARAM_STR);
                        break;
                    case '`SynSpecies`':
                        $stmt->bindValue($identifier, $this->synspecies, PDO::PARAM_STR);
                        break;
                    case '`Author`':
                        $stmt->bindValue($identifier, $this->author, PDO::PARAM_STR);
                        break;
                    case '`URL`':
                        $stmt->bindValue($identifier, $this->url, PDO::PARAM_STR);
                        break;
                    case '`AutNameInit`':
                        $stmt->bindValue($identifier, $this->autnameinit, PDO::PARAM_STR);
                        break;
                    case '`AutName`':
                        $stmt->bindValue($identifier, $this->autname, PDO::PARAM_STR);
                        break;
                    case '`c7fAuthorYearOC`':
                        $stmt->bindValue($identifier, $this->c7fauthoryearoc, PDO::PARAM_STR);
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


            if (($retval = SpeciesauthorsnamesPeer::doValidate($this, $columns)) !== true) {
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
        $pos = SpeciesauthorsnamesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getValid();
                break;
            case 3:
                return $this->getC7speciesid();
                break;
            case 4:
                return $this->getSeqno();
                break;
            case 5:
                return $this->getSyngenus();
                break;
            case 6:
                return $this->getSynspecies();
                break;
            case 7:
                return $this->getAuthor();
                break;
            case 8:
                return $this->getUrl();
                break;
            case 9:
                return $this->getAutnameinit();
                break;
            case 10:
                return $this->getAutname();
                break;
            case 11:
                return $this->getC7fauthoryearoc();
                break;
            case 12:
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
        if (isset($alreadyDumpedObjects['Speciesauthorsnames'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Speciesauthorsnames'][$this->getPrimaryKey()] = true;
        $keys = SpeciesauthorsnamesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getSpeccode(),
            $keys[1] => $this->getSyncode(),
            $keys[2] => $this->getValid(),
            $keys[3] => $this->getC7speciesid(),
            $keys[4] => $this->getSeqno(),
            $keys[5] => $this->getSyngenus(),
            $keys[6] => $this->getSynspecies(),
            $keys[7] => $this->getAuthor(),
            $keys[8] => $this->getUrl(),
            $keys[9] => $this->getAutnameinit(),
            $keys[10] => $this->getAutname(),
            $keys[11] => $this->getC7fauthoryearoc(),
            $keys[12] => $this->getPkid(),
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
        $pos = SpeciesauthorsnamesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setValid($value);
                break;
            case 3:
                $this->setC7speciesid($value);
                break;
            case 4:
                $this->setSeqno($value);
                break;
            case 5:
                $this->setSyngenus($value);
                break;
            case 6:
                $this->setSynspecies($value);
                break;
            case 7:
                $this->setAuthor($value);
                break;
            case 8:
                $this->setUrl($value);
                break;
            case 9:
                $this->setAutnameinit($value);
                break;
            case 10:
                $this->setAutname($value);
                break;
            case 11:
                $this->setC7fauthoryearoc($value);
                break;
            case 12:
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
        $keys = SpeciesauthorsnamesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setSpeccode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSyncode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setValid($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setC7speciesid($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSeqno($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSyngenus($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSynspecies($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setAuthor($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setUrl($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAutnameinit($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAutname($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setC7fauthoryearoc($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setPkid($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SpeciesauthorsnamesPeer::DATABASE_NAME);

        if ($this->isColumnModified(SpeciesauthorsnamesPeer::SPECCODE)) $criteria->add(SpeciesauthorsnamesPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::SYNCODE)) $criteria->add(SpeciesauthorsnamesPeer::SYNCODE, $this->syncode);
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::VALID)) $criteria->add(SpeciesauthorsnamesPeer::VALID, $this->valid);
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::C7SPECIESID)) $criteria->add(SpeciesauthorsnamesPeer::C7SPECIESID, $this->c7speciesid);
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::SEQNO)) $criteria->add(SpeciesauthorsnamesPeer::SEQNO, $this->seqno);
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::SYNGENUS)) $criteria->add(SpeciesauthorsnamesPeer::SYNGENUS, $this->syngenus);
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::SYNSPECIES)) $criteria->add(SpeciesauthorsnamesPeer::SYNSPECIES, $this->synspecies);
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::AUTHOR)) $criteria->add(SpeciesauthorsnamesPeer::AUTHOR, $this->author);
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::URL)) $criteria->add(SpeciesauthorsnamesPeer::URL, $this->url);
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::AUTNAMEINIT)) $criteria->add(SpeciesauthorsnamesPeer::AUTNAMEINIT, $this->autnameinit);
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::AUTNAME)) $criteria->add(SpeciesauthorsnamesPeer::AUTNAME, $this->autname);
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::C7FAUTHORYEAROC)) $criteria->add(SpeciesauthorsnamesPeer::C7FAUTHORYEAROC, $this->c7fauthoryearoc);
        if ($this->isColumnModified(SpeciesauthorsnamesPeer::PKID)) $criteria->add(SpeciesauthorsnamesPeer::PKID, $this->pkid);

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
        $criteria = new Criteria(SpeciesauthorsnamesPeer::DATABASE_NAME);
        $criteria->add(SpeciesauthorsnamesPeer::PKID, $this->pkid);

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
     * @param object $copyObj An object of Speciesauthorsnames (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setSyncode($this->getSyncode());
        $copyObj->setValid($this->getValid());
        $copyObj->setC7speciesid($this->getC7speciesid());
        $copyObj->setSeqno($this->getSeqno());
        $copyObj->setSyngenus($this->getSyngenus());
        $copyObj->setSynspecies($this->getSynspecies());
        $copyObj->setAuthor($this->getAuthor());
        $copyObj->setUrl($this->getUrl());
        $copyObj->setAutnameinit($this->getAutnameinit());
        $copyObj->setAutname($this->getAutname());
        $copyObj->setC7fauthoryearoc($this->getC7fauthoryearoc());
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
     * @return Speciesauthorsnames Clone of current object.
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
     * @return SpeciesauthorsnamesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SpeciesauthorsnamesPeer();
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
        $this->valid = null;
        $this->c7speciesid = null;
        $this->seqno = null;
        $this->syngenus = null;
        $this->synspecies = null;
        $this->author = null;
        $this->url = null;
        $this->autnameinit = null;
        $this->autname = null;
        $this->c7fauthoryearoc = null;
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
        return (string) $this->exportTo(SpeciesauthorsnamesPeer::DEFAULT_STRING_FORMAT);
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
