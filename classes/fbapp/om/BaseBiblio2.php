<?php


/**
 * Base class that represents a row from the 'biblio2' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseBiblio2 extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'Biblio2Peer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        Biblio2Peer
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
     * The value for the refno field.
     * @var        int
     */
    protected $refno;

    /**
     * The value for the syncodeprimary field.
     * @var        int
     */
    protected $syncodeprimary;

    /**
     * The value for the syncode field.
     * @var        int
     */
    protected $syncode;

    /**
     * The value for the refpage field.
     * @var        string
     */
    protected $refpage;

    /**
     * The value for the pagefirst field.
     * @var        int
     */
    protected $pagefirst;

    /**
     * The value for the pageinsort field.
     * @var        int
     */
    protected $pageinsort;

    /**
     * The value for the locality field.
     * @var        string
     */
    protected $locality;

    /**
     * The value for the comment field.
     * @var        string
     */
    protected $comment;

    /**
     * The value for the quote field.
     * @var        string
     */
    protected $quote;

    /**
     * The value for the entered field.
     * @var        int
     */
    protected $entered;

    /**
     * The value for the dateentered field.
     * @var        string
     */
    protected $dateentered;

    /**
     * The value for the modified field.
     * @var        int
     */
    protected $modified;

    /**
     * The value for the datemodified field.
     * @var        string
     */
    protected $datemodified;

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
     * Get the [refno] column value.
     *
     * @return int
     */
    public function getRefno()
    {

        return $this->refno;
    }

    /**
     * Get the [syncodeprimary] column value.
     *
     * @return int
     */
    public function getSyncodeprimary()
    {

        return $this->syncodeprimary;
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
     * Get the [refpage] column value.
     *
     * @return string
     */
    public function getRefpage()
    {

        return $this->refpage;
    }

    /**
     * Get the [pagefirst] column value.
     *
     * @return int
     */
    public function getPagefirst()
    {

        return $this->pagefirst;
    }

    /**
     * Get the [pageinsort] column value.
     *
     * @return int
     */
    public function getPageinsort()
    {

        return $this->pageinsort;
    }

    /**
     * Get the [locality] column value.
     *
     * @return string
     */
    public function getLocality()
    {

        return $this->locality;
    }

    /**
     * Get the [comment] column value.
     *
     * @return string
     */
    public function getComment()
    {

        return $this->comment;
    }

    /**
     * Get the [quote] column value.
     *
     * @return string
     */
    public function getQuote()
    {

        return $this->quote;
    }

    /**
     * Get the [entered] column value.
     *
     * @return int
     */
    public function getEntered()
    {

        return $this->entered;
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
     * Get the [modified] column value.
     *
     * @return int
     */
    public function getModified()
    {

        return $this->modified;
    }

    /**
     * Get the [optionally formatted] temporal [datemodified] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatemodified($format = 'Y-m-d H:i:s')
    {
        if ($this->datemodified === null) {
            return null;
        }

        if ($this->datemodified === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datemodified);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datemodified, true), $x);
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
     * @return Biblio2 The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = Biblio2Peer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [refno] column.
     *
     * @param  int $v new value
     * @return Biblio2 The current object (for fluent API support)
     */
    public function setRefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->refno !== $v) {
            $this->refno = $v;
            $this->modifiedColumns[] = Biblio2Peer::REFNO;
        }


        return $this;
    } // setRefno()

    /**
     * Set the value of [syncodeprimary] column.
     *
     * @param  int $v new value
     * @return Biblio2 The current object (for fluent API support)
     */
    public function setSyncodeprimary($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->syncodeprimary !== $v) {
            $this->syncodeprimary = $v;
            $this->modifiedColumns[] = Biblio2Peer::SYNCODEPRIMARY;
        }


        return $this;
    } // setSyncodeprimary()

    /**
     * Set the value of [syncode] column.
     *
     * @param  int $v new value
     * @return Biblio2 The current object (for fluent API support)
     */
    public function setSyncode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->syncode !== $v) {
            $this->syncode = $v;
            $this->modifiedColumns[] = Biblio2Peer::SYNCODE;
        }


        return $this;
    } // setSyncode()

    /**
     * Set the value of [refpage] column.
     *
     * @param  string $v new value
     * @return Biblio2 The current object (for fluent API support)
     */
    public function setRefpage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->refpage !== $v) {
            $this->refpage = $v;
            $this->modifiedColumns[] = Biblio2Peer::REFPAGE;
        }


        return $this;
    } // setRefpage()

    /**
     * Set the value of [pagefirst] column.
     *
     * @param  int $v new value
     * @return Biblio2 The current object (for fluent API support)
     */
    public function setPagefirst($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pagefirst !== $v) {
            $this->pagefirst = $v;
            $this->modifiedColumns[] = Biblio2Peer::PAGEFIRST;
        }


        return $this;
    } // setPagefirst()

    /**
     * Set the value of [pageinsort] column.
     *
     * @param  int $v new value
     * @return Biblio2 The current object (for fluent API support)
     */
    public function setPageinsort($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pageinsort !== $v) {
            $this->pageinsort = $v;
            $this->modifiedColumns[] = Biblio2Peer::PAGEINSORT;
        }


        return $this;
    } // setPageinsort()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Biblio2 The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = Biblio2Peer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return Biblio2 The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = Biblio2Peer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [quote] column.
     *
     * @param  string $v new value
     * @return Biblio2 The current object (for fluent API support)
     */
    public function setQuote($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->quote !== $v) {
            $this->quote = $v;
            $this->modifiedColumns[] = Biblio2Peer::QUOTE;
        }


        return $this;
    } // setQuote()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Biblio2 The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = Biblio2Peer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Biblio2 The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = Biblio2Peer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Biblio2 The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = Biblio2Peer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Biblio2 The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = Biblio2Peer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Biblio2 The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = Biblio2Peer::TS;
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
            $this->refno = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->syncodeprimary = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->syncode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->refpage = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->pagefirst = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->pageinsort = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->locality = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->comment = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->quote = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->entered = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->dateentered = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->modified = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->datemodified = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->ts = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = Biblio2Peer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Biblio2 object", $e);
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
            $con = Propel::getConnection(Biblio2Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = Biblio2Peer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(Biblio2Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = Biblio2Query::create()
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
            $con = Propel::getConnection(Biblio2Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                Biblio2Peer::addInstanceToPool($this);
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
        if ($this->isColumnModified(Biblio2Peer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(Biblio2Peer::REFNO)) {
            $modifiedColumns[':p' . $index++]  = '`RefNo`';
        }
        if ($this->isColumnModified(Biblio2Peer::SYNCODEPRIMARY)) {
            $modifiedColumns[':p' . $index++]  = '`SynCodePrimary`';
        }
        if ($this->isColumnModified(Biblio2Peer::SYNCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SynCode`';
        }
        if ($this->isColumnModified(Biblio2Peer::REFPAGE)) {
            $modifiedColumns[':p' . $index++]  = '`RefPage`';
        }
        if ($this->isColumnModified(Biblio2Peer::PAGEFIRST)) {
            $modifiedColumns[':p' . $index++]  = '`PageFirst`';
        }
        if ($this->isColumnModified(Biblio2Peer::PAGEINSORT)) {
            $modifiedColumns[':p' . $index++]  = '`PageInSort`';
        }
        if ($this->isColumnModified(Biblio2Peer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(Biblio2Peer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Comment`';
        }
        if ($this->isColumnModified(Biblio2Peer::QUOTE)) {
            $modifiedColumns[':p' . $index++]  = '`Quote`';
        }
        if ($this->isColumnModified(Biblio2Peer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(Biblio2Peer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(Biblio2Peer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(Biblio2Peer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(Biblio2Peer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `biblio2` (%s) VALUES (%s)',
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
                    case '`RefNo`':
                        $stmt->bindValue($identifier, $this->refno, PDO::PARAM_INT);
                        break;
                    case '`SynCodePrimary`':
                        $stmt->bindValue($identifier, $this->syncodeprimary, PDO::PARAM_INT);
                        break;
                    case '`SynCode`':
                        $stmt->bindValue($identifier, $this->syncode, PDO::PARAM_INT);
                        break;
                    case '`RefPage`':
                        $stmt->bindValue($identifier, $this->refpage, PDO::PARAM_STR);
                        break;
                    case '`PageFirst`':
                        $stmt->bindValue($identifier, $this->pagefirst, PDO::PARAM_INT);
                        break;
                    case '`PageInSort`':
                        $stmt->bindValue($identifier, $this->pageinsort, PDO::PARAM_INT);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`Comment`':
                        $stmt->bindValue($identifier, $this->comment, PDO::PARAM_STR);
                        break;
                    case '`Quote`':
                        $stmt->bindValue($identifier, $this->quote, PDO::PARAM_STR);
                        break;
                    case '`Entered`':
                        $stmt->bindValue($identifier, $this->entered, PDO::PARAM_INT);
                        break;
                    case '`DateEntered`':
                        $stmt->bindValue($identifier, $this->dateentered, PDO::PARAM_STR);
                        break;
                    case '`Modified`':
                        $stmt->bindValue($identifier, $this->modified, PDO::PARAM_INT);
                        break;
                    case '`DateModified`':
                        $stmt->bindValue($identifier, $this->datemodified, PDO::PARAM_STR);
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
        $this->setRefno($pk);

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


            if (($retval = Biblio2Peer::doValidate($this, $columns)) !== true) {
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
        $pos = Biblio2Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRefno();
                break;
            case 2:
                return $this->getSyncodeprimary();
                break;
            case 3:
                return $this->getSyncode();
                break;
            case 4:
                return $this->getRefpage();
                break;
            case 5:
                return $this->getPagefirst();
                break;
            case 6:
                return $this->getPageinsort();
                break;
            case 7:
                return $this->getLocality();
                break;
            case 8:
                return $this->getComment();
                break;
            case 9:
                return $this->getQuote();
                break;
            case 10:
                return $this->getEntered();
                break;
            case 11:
                return $this->getDateentered();
                break;
            case 12:
                return $this->getModified();
                break;
            case 13:
                return $this->getDatemodified();
                break;
            case 14:
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
        if (isset($alreadyDumpedObjects['Biblio2'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Biblio2'][serialize($this->getPrimaryKey())] = true;
        $keys = Biblio2Peer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getRefno(),
            $keys[2] => $this->getSyncodeprimary(),
            $keys[3] => $this->getSyncode(),
            $keys[4] => $this->getRefpage(),
            $keys[5] => $this->getPagefirst(),
            $keys[6] => $this->getPageinsort(),
            $keys[7] => $this->getLocality(),
            $keys[8] => $this->getComment(),
            $keys[9] => $this->getQuote(),
            $keys[10] => $this->getEntered(),
            $keys[11] => $this->getDateentered(),
            $keys[12] => $this->getModified(),
            $keys[13] => $this->getDatemodified(),
            $keys[14] => $this->getTs(),
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
        $pos = Biblio2Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRefno($value);
                break;
            case 2:
                $this->setSyncodeprimary($value);
                break;
            case 3:
                $this->setSyncode($value);
                break;
            case 4:
                $this->setRefpage($value);
                break;
            case 5:
                $this->setPagefirst($value);
                break;
            case 6:
                $this->setPageinsort($value);
                break;
            case 7:
                $this->setLocality($value);
                break;
            case 8:
                $this->setComment($value);
                break;
            case 9:
                $this->setQuote($value);
                break;
            case 10:
                $this->setEntered($value);
                break;
            case 11:
                $this->setDateentered($value);
                break;
            case 12:
                $this->setModified($value);
                break;
            case 13:
                $this->setDatemodified($value);
                break;
            case 14:
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
        $keys = Biblio2Peer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRefno($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSyncodeprimary($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSyncode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setRefpage($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPagefirst($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPageinsort($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLocality($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setComment($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setQuote($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setEntered($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateentered($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setModified($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDatemodified($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setTs($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(Biblio2Peer::DATABASE_NAME);

        if ($this->isColumnModified(Biblio2Peer::AUTOCTR)) $criteria->add(Biblio2Peer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(Biblio2Peer::REFNO)) $criteria->add(Biblio2Peer::REFNO, $this->refno);
        if ($this->isColumnModified(Biblio2Peer::SYNCODEPRIMARY)) $criteria->add(Biblio2Peer::SYNCODEPRIMARY, $this->syncodeprimary);
        if ($this->isColumnModified(Biblio2Peer::SYNCODE)) $criteria->add(Biblio2Peer::SYNCODE, $this->syncode);
        if ($this->isColumnModified(Biblio2Peer::REFPAGE)) $criteria->add(Biblio2Peer::REFPAGE, $this->refpage);
        if ($this->isColumnModified(Biblio2Peer::PAGEFIRST)) $criteria->add(Biblio2Peer::PAGEFIRST, $this->pagefirst);
        if ($this->isColumnModified(Biblio2Peer::PAGEINSORT)) $criteria->add(Biblio2Peer::PAGEINSORT, $this->pageinsort);
        if ($this->isColumnModified(Biblio2Peer::LOCALITY)) $criteria->add(Biblio2Peer::LOCALITY, $this->locality);
        if ($this->isColumnModified(Biblio2Peer::COMMENT)) $criteria->add(Biblio2Peer::COMMENT, $this->comment);
        if ($this->isColumnModified(Biblio2Peer::QUOTE)) $criteria->add(Biblio2Peer::QUOTE, $this->quote);
        if ($this->isColumnModified(Biblio2Peer::ENTERED)) $criteria->add(Biblio2Peer::ENTERED, $this->entered);
        if ($this->isColumnModified(Biblio2Peer::DATEENTERED)) $criteria->add(Biblio2Peer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(Biblio2Peer::MODIFIED)) $criteria->add(Biblio2Peer::MODIFIED, $this->modified);
        if ($this->isColumnModified(Biblio2Peer::DATEMODIFIED)) $criteria->add(Biblio2Peer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(Biblio2Peer::TS)) $criteria->add(Biblio2Peer::TS, $this->ts);

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
        $criteria = new Criteria(Biblio2Peer::DATABASE_NAME);
        $criteria->add(Biblio2Peer::REFNO, $this->refno);
        $criteria->add(Biblio2Peer::SYNCODEPRIMARY, $this->syncodeprimary);
        $criteria->add(Biblio2Peer::SYNCODE, $this->syncode);

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
        $pks[0] = $this->getRefno();
        $pks[1] = $this->getSyncodeprimary();
        $pks[2] = $this->getSyncode();

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
        $this->setRefno($keys[0]);
        $this->setSyncodeprimary($keys[1]);
        $this->setSyncode($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getRefno()) && (null === $this->getSyncodeprimary()) && (null === $this->getSyncode());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Biblio2 (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRefno($this->getRefno());
        $copyObj->setSyncodeprimary($this->getSyncodeprimary());
        $copyObj->setSyncode($this->getSyncode());
        $copyObj->setRefpage($this->getRefpage());
        $copyObj->setPagefirst($this->getPagefirst());
        $copyObj->setPageinsort($this->getPageinsort());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setComment($this->getComment());
        $copyObj->setQuote($this->getQuote());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
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
     * @return Biblio2 Clone of current object.
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
     * @return Biblio2Peer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new Biblio2Peer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->refno = null;
        $this->syncodeprimary = null;
        $this->syncode = null;
        $this->refpage = null;
        $this->pagefirst = null;
        $this->pageinsort = null;
        $this->locality = null;
        $this->comment = null;
        $this->quote = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
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
        return (string) $this->exportTo(Biblio2Peer::DEFAULT_STRING_FORMAT);
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
