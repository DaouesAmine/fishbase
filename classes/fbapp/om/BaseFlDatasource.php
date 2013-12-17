<?php


/**
 * Base class that represents a row from the 'fl_datasource' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFlDatasource extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FlDatasourcePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FlDatasourcePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the datasourcecode field.
     * @var        int
     */
    protected $datasourcecode;

    /**
     * The value for the author field.
     * Note: this column has a database default value of: ''
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
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $title;

    /**
     * The value for the source field.
     * @var        string
     */
    protected $source;

    /**
     * The value for the publisher field.
     * @var        string
     */
    protected $publisher;

    /**
     * The value for the volume field.
     * @var        string
     */
    protected $volume;

    /**
     * The value for the pagination field.
     * @var        string
     */
    protected $pagination;

    /**
     * The value for the originalsourceused field.
     * @var        string
     */
    protected $originalsourceused;

    /**
     * The value for the description field.
     * @var        string
     */
    protected $description;

    /**
     * The value for the editable field.
     * Note: this column has a database default value of: '-1'
     * @var        string
     */
    protected $editable;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->author = '';
        $this->title = '';
        $this->editable = '-1';
    }

    /**
     * Initializes internal state of BaseFlDatasource object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [datasourcecode] column value.
     *
     * @return int
     */
    public function getDatasourcecode()
    {

        return $this->datasourcecode;
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
     * Get the [publisher] column value.
     *
     * @return string
     */
    public function getPublisher()
    {

        return $this->publisher;
    }

    /**
     * Get the [volume] column value.
     *
     * @return string
     */
    public function getVolume()
    {

        return $this->volume;
    }

    /**
     * Get the [pagination] column value.
     *
     * @return string
     */
    public function getPagination()
    {

        return $this->pagination;
    }

    /**
     * Get the [originalsourceused] column value.
     *
     * @return string
     */
    public function getOriginalsourceused()
    {

        return $this->originalsourceused;
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
     * Get the [editable] column value.
     *
     * @return string
     */
    public function getEditable()
    {

        return $this->editable;
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
     * Set the value of [datasourcecode] column.
     *
     * @param  int $v new value
     * @return FlDatasource The current object (for fluent API support)
     */
    public function setDatasourcecode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->datasourcecode !== $v) {
            $this->datasourcecode = $v;
            $this->modifiedColumns[] = FlDatasourcePeer::DATASOURCECODE;
        }


        return $this;
    } // setDatasourcecode()

    /**
     * Set the value of [author] column.
     *
     * @param  string $v new value
     * @return FlDatasource The current object (for fluent API support)
     */
    public function setAuthor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->author !== $v) {
            $this->author = $v;
            $this->modifiedColumns[] = FlDatasourcePeer::AUTHOR;
        }


        return $this;
    } // setAuthor()

    /**
     * Set the value of [year] column.
     *
     * @param  int $v new value
     * @return FlDatasource The current object (for fluent API support)
     */
    public function setYear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->year !== $v) {
            $this->year = $v;
            $this->modifiedColumns[] = FlDatasourcePeer::YEAR;
        }


        return $this;
    } // setYear()

    /**
     * Set the value of [title] column.
     *
     * @param  string $v new value
     * @return FlDatasource The current object (for fluent API support)
     */
    public function setTitle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->title !== $v) {
            $this->title = $v;
            $this->modifiedColumns[] = FlDatasourcePeer::TITLE;
        }


        return $this;
    } // setTitle()

    /**
     * Set the value of [source] column.
     *
     * @param  string $v new value
     * @return FlDatasource The current object (for fluent API support)
     */
    public function setSource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->source !== $v) {
            $this->source = $v;
            $this->modifiedColumns[] = FlDatasourcePeer::SOURCE;
        }


        return $this;
    } // setSource()

    /**
     * Set the value of [publisher] column.
     *
     * @param  string $v new value
     * @return FlDatasource The current object (for fluent API support)
     */
    public function setPublisher($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->publisher !== $v) {
            $this->publisher = $v;
            $this->modifiedColumns[] = FlDatasourcePeer::PUBLISHER;
        }


        return $this;
    } // setPublisher()

    /**
     * Set the value of [volume] column.
     *
     * @param  string $v new value
     * @return FlDatasource The current object (for fluent API support)
     */
    public function setVolume($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->volume !== $v) {
            $this->volume = $v;
            $this->modifiedColumns[] = FlDatasourcePeer::VOLUME;
        }


        return $this;
    } // setVolume()

    /**
     * Set the value of [pagination] column.
     *
     * @param  string $v new value
     * @return FlDatasource The current object (for fluent API support)
     */
    public function setPagination($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pagination !== $v) {
            $this->pagination = $v;
            $this->modifiedColumns[] = FlDatasourcePeer::PAGINATION;
        }


        return $this;
    } // setPagination()

    /**
     * Set the value of [originalsourceused] column.
     *
     * @param  string $v new value
     * @return FlDatasource The current object (for fluent API support)
     */
    public function setOriginalsourceused($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->originalsourceused !== $v) {
            $this->originalsourceused = $v;
            $this->modifiedColumns[] = FlDatasourcePeer::ORIGINALSOURCEUSED;
        }


        return $this;
    } // setOriginalsourceused()

    /**
     * Set the value of [description] column.
     *
     * @param  string $v new value
     * @return FlDatasource The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[] = FlDatasourcePeer::DESCRIPTION;
        }


        return $this;
    } // setDescription()

    /**
     * Set the value of [editable] column.
     *
     * @param  string $v new value
     * @return FlDatasource The current object (for fluent API support)
     */
    public function setEditable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->editable !== $v) {
            $this->editable = $v;
            $this->modifiedColumns[] = FlDatasourcePeer::EDITABLE;
        }


        return $this;
    } // setEditable()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return FlDatasource The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = FlDatasourcePeer::TS;
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
            if ($this->author !== '') {
                return false;
            }

            if ($this->title !== '') {
                return false;
            }

            if ($this->editable !== '-1') {
                return false;
            }

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

            $this->datasourcecode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->author = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->year = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->title = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->source = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->publisher = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->volume = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->pagination = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->originalsourceused = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->description = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->editable = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->ts = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = FlDatasourcePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating FlDatasource object", $e);
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
            $con = Propel::getConnection(FlDatasourcePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FlDatasourcePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(FlDatasourcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FlDatasourceQuery::create()
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
            $con = Propel::getConnection(FlDatasourcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                FlDatasourcePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = FlDatasourcePeer::DATASOURCECODE;
        if (null !== $this->datasourcecode) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . FlDatasourcePeer::DATASOURCECODE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(FlDatasourcePeer::DATASOURCECODE)) {
            $modifiedColumns[':p' . $index++]  = '`DataSourceCode`';
        }
        if ($this->isColumnModified(FlDatasourcePeer::AUTHOR)) {
            $modifiedColumns[':p' . $index++]  = '`Author`';
        }
        if ($this->isColumnModified(FlDatasourcePeer::YEAR)) {
            $modifiedColumns[':p' . $index++]  = '`Year`';
        }
        if ($this->isColumnModified(FlDatasourcePeer::TITLE)) {
            $modifiedColumns[':p' . $index++]  = '`Title`';
        }
        if ($this->isColumnModified(FlDatasourcePeer::SOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`Source`';
        }
        if ($this->isColumnModified(FlDatasourcePeer::PUBLISHER)) {
            $modifiedColumns[':p' . $index++]  = '`Publisher`';
        }
        if ($this->isColumnModified(FlDatasourcePeer::VOLUME)) {
            $modifiedColumns[':p' . $index++]  = '`Volume`';
        }
        if ($this->isColumnModified(FlDatasourcePeer::PAGINATION)) {
            $modifiedColumns[':p' . $index++]  = '`Pagination`';
        }
        if ($this->isColumnModified(FlDatasourcePeer::ORIGINALSOURCEUSED)) {
            $modifiedColumns[':p' . $index++]  = '`OriginalSourceUsed`';
        }
        if ($this->isColumnModified(FlDatasourcePeer::DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`Description`';
        }
        if ($this->isColumnModified(FlDatasourcePeer::EDITABLE)) {
            $modifiedColumns[':p' . $index++]  = '`Editable`';
        }
        if ($this->isColumnModified(FlDatasourcePeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `fl_datasource` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`DataSourceCode`':
                        $stmt->bindValue($identifier, $this->datasourcecode, PDO::PARAM_INT);
                        break;
                    case '`Author`':
                        $stmt->bindValue($identifier, $this->author, PDO::PARAM_STR);
                        break;
                    case '`Year`':
                        $stmt->bindValue($identifier, $this->year, PDO::PARAM_INT);
                        break;
                    case '`Title`':
                        $stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
                        break;
                    case '`Source`':
                        $stmt->bindValue($identifier, $this->source, PDO::PARAM_STR);
                        break;
                    case '`Publisher`':
                        $stmt->bindValue($identifier, $this->publisher, PDO::PARAM_STR);
                        break;
                    case '`Volume`':
                        $stmt->bindValue($identifier, $this->volume, PDO::PARAM_STR);
                        break;
                    case '`Pagination`':
                        $stmt->bindValue($identifier, $this->pagination, PDO::PARAM_STR);
                        break;
                    case '`OriginalSourceUsed`':
                        $stmt->bindValue($identifier, $this->originalsourceused, PDO::PARAM_STR);
                        break;
                    case '`Description`':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case '`Editable`':
                        $stmt->bindValue($identifier, $this->editable, PDO::PARAM_STR);
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
        $this->setDatasourcecode($pk);

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


            if (($retval = FlDatasourcePeer::doValidate($this, $columns)) !== true) {
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
        $pos = FlDatasourcePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getDatasourcecode();
                break;
            case 1:
                return $this->getAuthor();
                break;
            case 2:
                return $this->getYear();
                break;
            case 3:
                return $this->getTitle();
                break;
            case 4:
                return $this->getSource();
                break;
            case 5:
                return $this->getPublisher();
                break;
            case 6:
                return $this->getVolume();
                break;
            case 7:
                return $this->getPagination();
                break;
            case 8:
                return $this->getOriginalsourceused();
                break;
            case 9:
                return $this->getDescription();
                break;
            case 10:
                return $this->getEditable();
                break;
            case 11:
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
        if (isset($alreadyDumpedObjects['FlDatasource'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['FlDatasource'][$this->getPrimaryKey()] = true;
        $keys = FlDatasourcePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getDatasourcecode(),
            $keys[1] => $this->getAuthor(),
            $keys[2] => $this->getYear(),
            $keys[3] => $this->getTitle(),
            $keys[4] => $this->getSource(),
            $keys[5] => $this->getPublisher(),
            $keys[6] => $this->getVolume(),
            $keys[7] => $this->getPagination(),
            $keys[8] => $this->getOriginalsourceused(),
            $keys[9] => $this->getDescription(),
            $keys[10] => $this->getEditable(),
            $keys[11] => $this->getTs(),
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
        $pos = FlDatasourcePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setDatasourcecode($value);
                break;
            case 1:
                $this->setAuthor($value);
                break;
            case 2:
                $this->setYear($value);
                break;
            case 3:
                $this->setTitle($value);
                break;
            case 4:
                $this->setSource($value);
                break;
            case 5:
                $this->setPublisher($value);
                break;
            case 6:
                $this->setVolume($value);
                break;
            case 7:
                $this->setPagination($value);
                break;
            case 8:
                $this->setOriginalsourceused($value);
                break;
            case 9:
                $this->setDescription($value);
                break;
            case 10:
                $this->setEditable($value);
                break;
            case 11:
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
        $keys = FlDatasourcePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setDatasourcecode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setAuthor($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setYear($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTitle($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSource($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPublisher($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setVolume($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPagination($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setOriginalsourceused($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDescription($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setEditable($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setTs($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FlDatasourcePeer::DATABASE_NAME);

        if ($this->isColumnModified(FlDatasourcePeer::DATASOURCECODE)) $criteria->add(FlDatasourcePeer::DATASOURCECODE, $this->datasourcecode);
        if ($this->isColumnModified(FlDatasourcePeer::AUTHOR)) $criteria->add(FlDatasourcePeer::AUTHOR, $this->author);
        if ($this->isColumnModified(FlDatasourcePeer::YEAR)) $criteria->add(FlDatasourcePeer::YEAR, $this->year);
        if ($this->isColumnModified(FlDatasourcePeer::TITLE)) $criteria->add(FlDatasourcePeer::TITLE, $this->title);
        if ($this->isColumnModified(FlDatasourcePeer::SOURCE)) $criteria->add(FlDatasourcePeer::SOURCE, $this->source);
        if ($this->isColumnModified(FlDatasourcePeer::PUBLISHER)) $criteria->add(FlDatasourcePeer::PUBLISHER, $this->publisher);
        if ($this->isColumnModified(FlDatasourcePeer::VOLUME)) $criteria->add(FlDatasourcePeer::VOLUME, $this->volume);
        if ($this->isColumnModified(FlDatasourcePeer::PAGINATION)) $criteria->add(FlDatasourcePeer::PAGINATION, $this->pagination);
        if ($this->isColumnModified(FlDatasourcePeer::ORIGINALSOURCEUSED)) $criteria->add(FlDatasourcePeer::ORIGINALSOURCEUSED, $this->originalsourceused);
        if ($this->isColumnModified(FlDatasourcePeer::DESCRIPTION)) $criteria->add(FlDatasourcePeer::DESCRIPTION, $this->description);
        if ($this->isColumnModified(FlDatasourcePeer::EDITABLE)) $criteria->add(FlDatasourcePeer::EDITABLE, $this->editable);
        if ($this->isColumnModified(FlDatasourcePeer::TS)) $criteria->add(FlDatasourcePeer::TS, $this->ts);

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
        $criteria = new Criteria(FlDatasourcePeer::DATABASE_NAME);
        $criteria->add(FlDatasourcePeer::DATASOURCECODE, $this->datasourcecode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getDatasourcecode();
    }

    /**
     * Generic method to set the primary key (datasourcecode column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setDatasourcecode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getDatasourcecode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of FlDatasource (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setAuthor($this->getAuthor());
        $copyObj->setYear($this->getYear());
        $copyObj->setTitle($this->getTitle());
        $copyObj->setSource($this->getSource());
        $copyObj->setPublisher($this->getPublisher());
        $copyObj->setVolume($this->getVolume());
        $copyObj->setPagination($this->getPagination());
        $copyObj->setOriginalsourceused($this->getOriginalsourceused());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setEditable($this->getEditable());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setDatasourcecode(NULL); // this is a auto-increment column, so set to default value
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
     * @return FlDatasource Clone of current object.
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
     * @return FlDatasourcePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FlDatasourcePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->datasourcecode = null;
        $this->author = null;
        $this->year = null;
        $this->title = null;
        $this->source = null;
        $this->publisher = null;
        $this->volume = null;
        $this->pagination = null;
        $this->originalsourceused = null;
        $this->description = null;
        $this->editable = null;
        $this->ts = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
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
        return (string) $this->exportTo(FlDatasourcePeer::DEFAULT_STRING_FORMAT);
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
