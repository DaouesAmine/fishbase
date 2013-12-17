<?php


/**
 * Base class that represents a row from the 'citesfb' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCitesfb extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CitesfbPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CitesfbPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the refno field.
     * @var        int
     */
    protected $refno;

    /**
     * The value for the pageno field.
     * @var        string
     */
    protected $pageno;

    /**
     * The value for the topic field.
     * @var        string
     */
    protected $topic;

    /**
     * The value for the referred field.
     * @var        string
     */
    protected $referred;

    /**
     * The value for the impact field.
     * @var        string
     */
    protected $impact;

    /**
     * The value for the data field.
     * @var        string
     */
    protected $data;

    /**
     * The value for the subject field.
     * @var        string
     */
    protected $subject;

    /**
     * The value for the remarks field.
     * @var        string
     */
    protected $remarks;

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
     * Get the [refno] column value.
     *
     * @return int
     */
    public function getRefno()
    {

        return $this->refno;
    }

    /**
     * Get the [pageno] column value.
     *
     * @return string
     */
    public function getPageno()
    {

        return $this->pageno;
    }

    /**
     * Get the [topic] column value.
     *
     * @return string
     */
    public function getTopic()
    {

        return $this->topic;
    }

    /**
     * Get the [referred] column value.
     *
     * @return string
     */
    public function getReferred()
    {

        return $this->referred;
    }

    /**
     * Get the [impact] column value.
     *
     * @return string
     */
    public function getImpact()
    {

        return $this->impact;
    }

    /**
     * Get the [data] column value.
     *
     * @return string
     */
    public function getData()
    {

        return $this->data;
    }

    /**
     * Get the [subject] column value.
     *
     * @return string
     */
    public function getSubject()
    {

        return $this->subject;
    }

    /**
     * Get the [remarks] column value.
     *
     * @return string
     */
    public function getRemarks()
    {

        return $this->remarks;
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
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateentered($format = '%x')
    {
        if ($this->dateentered === null) {
            return null;
        }

        if ($this->dateentered === '0000-00-00') {
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
     * Get the [datemodified] column value.
     *
     * @return string
     */
    public function getDatemodified()
    {

        return $this->datemodified;
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
     * Set the value of [refno] column.
     *
     * @param  int $v new value
     * @return Citesfb The current object (for fluent API support)
     */
    public function setRefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->refno !== $v) {
            $this->refno = $v;
            $this->modifiedColumns[] = CitesfbPeer::REFNO;
        }


        return $this;
    } // setRefno()

    /**
     * Set the value of [pageno] column.
     *
     * @param  string $v new value
     * @return Citesfb The current object (for fluent API support)
     */
    public function setPageno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pageno !== $v) {
            $this->pageno = $v;
            $this->modifiedColumns[] = CitesfbPeer::PAGENO;
        }


        return $this;
    } // setPageno()

    /**
     * Set the value of [topic] column.
     *
     * @param  string $v new value
     * @return Citesfb The current object (for fluent API support)
     */
    public function setTopic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->topic !== $v) {
            $this->topic = $v;
            $this->modifiedColumns[] = CitesfbPeer::TOPIC;
        }


        return $this;
    } // setTopic()

    /**
     * Set the value of [referred] column.
     *
     * @param  string $v new value
     * @return Citesfb The current object (for fluent API support)
     */
    public function setReferred($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->referred !== $v) {
            $this->referred = $v;
            $this->modifiedColumns[] = CitesfbPeer::REFERRED;
        }


        return $this;
    } // setReferred()

    /**
     * Set the value of [impact] column.
     *
     * @param  string $v new value
     * @return Citesfb The current object (for fluent API support)
     */
    public function setImpact($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->impact !== $v) {
            $this->impact = $v;
            $this->modifiedColumns[] = CitesfbPeer::IMPACT;
        }


        return $this;
    } // setImpact()

    /**
     * Set the value of [data] column.
     *
     * @param  string $v new value
     * @return Citesfb The current object (for fluent API support)
     */
    public function setData($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->data !== $v) {
            $this->data = $v;
            $this->modifiedColumns[] = CitesfbPeer::DATA;
        }


        return $this;
    } // setData()

    /**
     * Set the value of [subject] column.
     *
     * @param  string $v new value
     * @return Citesfb The current object (for fluent API support)
     */
    public function setSubject($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->subject !== $v) {
            $this->subject = $v;
            $this->modifiedColumns[] = CitesfbPeer::SUBJECT;
        }


        return $this;
    } // setSubject()

    /**
     * Set the value of [remarks] column.
     *
     * @param  string $v new value
     * @return Citesfb The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[] = CitesfbPeer::REMARKS;
        }


        return $this;
    } // setRemarks()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Citesfb The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = CitesfbPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Citesfb The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = CitesfbPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Citesfb The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = CitesfbPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Set the value of [datemodified] column.
     *
     * @param  string $v new value
     * @return Citesfb The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->datemodified !== $v) {
            $this->datemodified = $v;
            $this->modifiedColumns[] = CitesfbPeer::DATEMODIFIED;
        }


        return $this;
    } // setDatemodified()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Citesfb The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = CitesfbPeer::TS;
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

            $this->refno = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->pageno = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->topic = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->referred = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->impact = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->data = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->subject = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->remarks = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->entered = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->dateentered = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->modified = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->datemodified = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->ts = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 13; // 13 = CitesfbPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Citesfb object", $e);
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
            $con = Propel::getConnection(CitesfbPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CitesfbPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CitesfbPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CitesfbQuery::create()
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
            $con = Propel::getConnection(CitesfbPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CitesfbPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(CitesfbPeer::REFNO)) {
            $modifiedColumns[':p' . $index++]  = '`RefNo`';
        }
        if ($this->isColumnModified(CitesfbPeer::PAGENO)) {
            $modifiedColumns[':p' . $index++]  = '`PageNo`';
        }
        if ($this->isColumnModified(CitesfbPeer::TOPIC)) {
            $modifiedColumns[':p' . $index++]  = '`Topic`';
        }
        if ($this->isColumnModified(CitesfbPeer::REFERRED)) {
            $modifiedColumns[':p' . $index++]  = '`Referred`';
        }
        if ($this->isColumnModified(CitesfbPeer::IMPACT)) {
            $modifiedColumns[':p' . $index++]  = '`Impact`';
        }
        if ($this->isColumnModified(CitesfbPeer::DATA)) {
            $modifiedColumns[':p' . $index++]  = '`Data`';
        }
        if ($this->isColumnModified(CitesfbPeer::SUBJECT)) {
            $modifiedColumns[':p' . $index++]  = '`Subject`';
        }
        if ($this->isColumnModified(CitesfbPeer::REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`Remarks`';
        }
        if ($this->isColumnModified(CitesfbPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(CitesfbPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(CitesfbPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(CitesfbPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(CitesfbPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `citesfb` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`RefNo`':
                        $stmt->bindValue($identifier, $this->refno, PDO::PARAM_INT);
                        break;
                    case '`PageNo`':
                        $stmt->bindValue($identifier, $this->pageno, PDO::PARAM_STR);
                        break;
                    case '`Topic`':
                        $stmt->bindValue($identifier, $this->topic, PDO::PARAM_STR);
                        break;
                    case '`Referred`':
                        $stmt->bindValue($identifier, $this->referred, PDO::PARAM_STR);
                        break;
                    case '`Impact`':
                        $stmt->bindValue($identifier, $this->impact, PDO::PARAM_STR);
                        break;
                    case '`Data`':
                        $stmt->bindValue($identifier, $this->data, PDO::PARAM_STR);
                        break;
                    case '`Subject`':
                        $stmt->bindValue($identifier, $this->subject, PDO::PARAM_STR);
                        break;
                    case '`Remarks`':
                        $stmt->bindValue($identifier, $this->remarks, PDO::PARAM_STR);
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


            if (($retval = CitesfbPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CitesfbPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRefno();
                break;
            case 1:
                return $this->getPageno();
                break;
            case 2:
                return $this->getTopic();
                break;
            case 3:
                return $this->getReferred();
                break;
            case 4:
                return $this->getImpact();
                break;
            case 5:
                return $this->getData();
                break;
            case 6:
                return $this->getSubject();
                break;
            case 7:
                return $this->getRemarks();
                break;
            case 8:
                return $this->getEntered();
                break;
            case 9:
                return $this->getDateentered();
                break;
            case 10:
                return $this->getModified();
                break;
            case 11:
                return $this->getDatemodified();
                break;
            case 12:
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
        if (isset($alreadyDumpedObjects['Citesfb'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Citesfb'][$this->getPrimaryKey()] = true;
        $keys = CitesfbPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRefno(),
            $keys[1] => $this->getPageno(),
            $keys[2] => $this->getTopic(),
            $keys[3] => $this->getReferred(),
            $keys[4] => $this->getImpact(),
            $keys[5] => $this->getData(),
            $keys[6] => $this->getSubject(),
            $keys[7] => $this->getRemarks(),
            $keys[8] => $this->getEntered(),
            $keys[9] => $this->getDateentered(),
            $keys[10] => $this->getModified(),
            $keys[11] => $this->getDatemodified(),
            $keys[12] => $this->getTs(),
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
        $pos = CitesfbPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRefno($value);
                break;
            case 1:
                $this->setPageno($value);
                break;
            case 2:
                $this->setTopic($value);
                break;
            case 3:
                $this->setReferred($value);
                break;
            case 4:
                $this->setImpact($value);
                break;
            case 5:
                $this->setData($value);
                break;
            case 6:
                $this->setSubject($value);
                break;
            case 7:
                $this->setRemarks($value);
                break;
            case 8:
                $this->setEntered($value);
                break;
            case 9:
                $this->setDateentered($value);
                break;
            case 10:
                $this->setModified($value);
                break;
            case 11:
                $this->setDatemodified($value);
                break;
            case 12:
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
        $keys = CitesfbPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRefno($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setPageno($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setTopic($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setReferred($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setImpact($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setData($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSubject($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setRemarks($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setEntered($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDateentered($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setModified($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDatemodified($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setTs($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CitesfbPeer::DATABASE_NAME);

        if ($this->isColumnModified(CitesfbPeer::REFNO)) $criteria->add(CitesfbPeer::REFNO, $this->refno);
        if ($this->isColumnModified(CitesfbPeer::PAGENO)) $criteria->add(CitesfbPeer::PAGENO, $this->pageno);
        if ($this->isColumnModified(CitesfbPeer::TOPIC)) $criteria->add(CitesfbPeer::TOPIC, $this->topic);
        if ($this->isColumnModified(CitesfbPeer::REFERRED)) $criteria->add(CitesfbPeer::REFERRED, $this->referred);
        if ($this->isColumnModified(CitesfbPeer::IMPACT)) $criteria->add(CitesfbPeer::IMPACT, $this->impact);
        if ($this->isColumnModified(CitesfbPeer::DATA)) $criteria->add(CitesfbPeer::DATA, $this->data);
        if ($this->isColumnModified(CitesfbPeer::SUBJECT)) $criteria->add(CitesfbPeer::SUBJECT, $this->subject);
        if ($this->isColumnModified(CitesfbPeer::REMARKS)) $criteria->add(CitesfbPeer::REMARKS, $this->remarks);
        if ($this->isColumnModified(CitesfbPeer::ENTERED)) $criteria->add(CitesfbPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(CitesfbPeer::DATEENTERED)) $criteria->add(CitesfbPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(CitesfbPeer::MODIFIED)) $criteria->add(CitesfbPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(CitesfbPeer::DATEMODIFIED)) $criteria->add(CitesfbPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(CitesfbPeer::TS)) $criteria->add(CitesfbPeer::TS, $this->ts);

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
        $criteria = new Criteria(CitesfbPeer::DATABASE_NAME);
        $criteria->add(CitesfbPeer::REFNO, $this->refno);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getRefno();
    }

    /**
     * Generic method to set the primary key (refno column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setRefno($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getRefno();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Citesfb (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPageno($this->getPageno());
        $copyObj->setTopic($this->getTopic());
        $copyObj->setReferred($this->getReferred());
        $copyObj->setImpact($this->getImpact());
        $copyObj->setData($this->getData());
        $copyObj->setSubject($this->getSubject());
        $copyObj->setRemarks($this->getRemarks());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setRefno(NULL); // this is a auto-increment column, so set to default value
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
     * @return Citesfb Clone of current object.
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
     * @return CitesfbPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CitesfbPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->refno = null;
        $this->pageno = null;
        $this->topic = null;
        $this->referred = null;
        $this->impact = null;
        $this->data = null;
        $this->subject = null;
        $this->remarks = null;
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
        return (string) $this->exportTo(CitesfbPeer::DEFAULT_STRING_FORMAT);
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
