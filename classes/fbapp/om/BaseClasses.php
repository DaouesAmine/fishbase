<?php


/**
 * Base class that represents a row from the 'classes' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseClasses extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ClassesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ClassesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the classnum field.
     * @var        int
     */
    protected $classnum;

    /**
     * The value for the class field.
     * @var        string
     */
    protected $class;

    /**
     * The value for the classrefno field.
     * @var        int
     */
    protected $classrefno;

    /**
     * The value for the sortno field.
     * @var        int
     */
    protected $sortno;

    /**
     * The value for the synonym field.
     * @var        int
     */
    protected $synonym;

    /**
     * The value for the authoryear field.
     * @var        string
     */
    protected $authoryear;

    /**
     * The value for the commonname field.
     * @var        string
     */
    protected $commonname;

    /**
     * The value for the bodyshapei field.
     * @var        string
     */
    protected $bodyshapei;

    /**
     * The value for the watersalinity field.
     * @var        string
     */
    protected $watersalinity;

    /**
     * The value for the speciescount field.
     * @var        int
     */
    protected $speciescount;

    /**
     * The value for the superclass field.
     * @var        string
     */
    protected $superclass;

    /**
     * The value for the subclass field.
     * @var        string
     */
    protected $subclass;

    /**
     * The value for the remarks field.
     * @var        string
     */
    protected $remarks;

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
     * Get the [classnum] column value.
     *
     * @return int
     */
    public function getClassnum()
    {

        return $this->classnum;
    }

    /**
     * Get the [class] column value.
     *
     * @return string
     */
    public function getClass()
    {

        return $this->class;
    }

    /**
     * Get the [classrefno] column value.
     *
     * @return int
     */
    public function getClassrefno()
    {

        return $this->classrefno;
    }

    /**
     * Get the [sortno] column value.
     *
     * @return int
     */
    public function getSortno()
    {

        return $this->sortno;
    }

    /**
     * Get the [synonym] column value.
     *
     * @return int
     */
    public function getSynonym()
    {

        return $this->synonym;
    }

    /**
     * Get the [authoryear] column value.
     *
     * @return string
     */
    public function getAuthoryear()
    {

        return $this->authoryear;
    }

    /**
     * Get the [commonname] column value.
     *
     * @return string
     */
    public function getCommonname()
    {

        return $this->commonname;
    }

    /**
     * Get the [bodyshapei] column value.
     *
     * @return string
     */
    public function getBodyshapei()
    {

        return $this->bodyshapei;
    }

    /**
     * Get the [watersalinity] column value.
     *
     * @return string
     */
    public function getWatersalinity()
    {

        return $this->watersalinity;
    }

    /**
     * Get the [speciescount] column value.
     *
     * @return int
     */
    public function getSpeciescount()
    {

        return $this->speciescount;
    }

    /**
     * Get the [superclass] column value.
     *
     * @return string
     */
    public function getSuperclass()
    {

        return $this->superclass;
    }

    /**
     * Get the [subclass] column value.
     *
     * @return string
     */
    public function getSubclass()
    {

        return $this->subclass;
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
     * Set the value of [classnum] column.
     *
     * @param  int $v new value
     * @return Classes The current object (for fluent API support)
     */
    public function setClassnum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->classnum !== $v) {
            $this->classnum = $v;
            $this->modifiedColumns[] = ClassesPeer::CLASSNUM;
        }


        return $this;
    } // setClassnum()

    /**
     * Set the value of [class] column.
     *
     * @param  string $v new value
     * @return Classes The current object (for fluent API support)
     */
    public function setClass($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->class !== $v) {
            $this->class = $v;
            $this->modifiedColumns[] = ClassesPeer::CLAZZ;
        }


        return $this;
    } // setClass()

    /**
     * Set the value of [classrefno] column.
     *
     * @param  int $v new value
     * @return Classes The current object (for fluent API support)
     */
    public function setClassrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->classrefno !== $v) {
            $this->classrefno = $v;
            $this->modifiedColumns[] = ClassesPeer::CLASSREFNO;
        }


        return $this;
    } // setClassrefno()

    /**
     * Set the value of [sortno] column.
     *
     * @param  int $v new value
     * @return Classes The current object (for fluent API support)
     */
    public function setSortno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sortno !== $v) {
            $this->sortno = $v;
            $this->modifiedColumns[] = ClassesPeer::SORTNO;
        }


        return $this;
    } // setSortno()

    /**
     * Set the value of [synonym] column.
     *
     * @param  int $v new value
     * @return Classes The current object (for fluent API support)
     */
    public function setSynonym($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->synonym !== $v) {
            $this->synonym = $v;
            $this->modifiedColumns[] = ClassesPeer::SYNONYM;
        }


        return $this;
    } // setSynonym()

    /**
     * Set the value of [authoryear] column.
     *
     * @param  string $v new value
     * @return Classes The current object (for fluent API support)
     */
    public function setAuthoryear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->authoryear !== $v) {
            $this->authoryear = $v;
            $this->modifiedColumns[] = ClassesPeer::AUTHORYEAR;
        }


        return $this;
    } // setAuthoryear()

    /**
     * Set the value of [commonname] column.
     *
     * @param  string $v new value
     * @return Classes The current object (for fluent API support)
     */
    public function setCommonname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname !== $v) {
            $this->commonname = $v;
            $this->modifiedColumns[] = ClassesPeer::COMMONNAME;
        }


        return $this;
    } // setCommonname()

    /**
     * Set the value of [bodyshapei] column.
     *
     * @param  string $v new value
     * @return Classes The current object (for fluent API support)
     */
    public function setBodyshapei($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bodyshapei !== $v) {
            $this->bodyshapei = $v;
            $this->modifiedColumns[] = ClassesPeer::BODYSHAPEI;
        }


        return $this;
    } // setBodyshapei()

    /**
     * Set the value of [watersalinity] column.
     *
     * @param  string $v new value
     * @return Classes The current object (for fluent API support)
     */
    public function setWatersalinity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->watersalinity !== $v) {
            $this->watersalinity = $v;
            $this->modifiedColumns[] = ClassesPeer::WATERSALINITY;
        }


        return $this;
    } // setWatersalinity()

    /**
     * Set the value of [speciescount] column.
     *
     * @param  int $v new value
     * @return Classes The current object (for fluent API support)
     */
    public function setSpeciescount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speciescount !== $v) {
            $this->speciescount = $v;
            $this->modifiedColumns[] = ClassesPeer::SPECIESCOUNT;
        }


        return $this;
    } // setSpeciescount()

    /**
     * Set the value of [superclass] column.
     *
     * @param  string $v new value
     * @return Classes The current object (for fluent API support)
     */
    public function setSuperclass($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->superclass !== $v) {
            $this->superclass = $v;
            $this->modifiedColumns[] = ClassesPeer::SUPERCLASS;
        }


        return $this;
    } // setSuperclass()

    /**
     * Set the value of [subclass] column.
     *
     * @param  string $v new value
     * @return Classes The current object (for fluent API support)
     */
    public function setSubclass($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->subclass !== $v) {
            $this->subclass = $v;
            $this->modifiedColumns[] = ClassesPeer::SUBCLASS;
        }


        return $this;
    } // setSubclass()

    /**
     * Set the value of [remarks] column.
     *
     * @param  string $v new value
     * @return Classes The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[] = ClassesPeer::REMARKS;
        }


        return $this;
    } // setRemarks()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Classes The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = ClassesPeer::TS;
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

            $this->classnum = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->class = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->classrefno = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->sortno = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->synonym = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->authoryear = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->commonname = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->bodyshapei = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->watersalinity = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->speciescount = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->superclass = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->subclass = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->remarks = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->ts = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = ClassesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Classes object", $e);
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
            $con = Propel::getConnection(ClassesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ClassesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(ClassesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ClassesQuery::create()
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
            $con = Propel::getConnection(ClassesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ClassesPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(ClassesPeer::CLASSNUM)) {
            $modifiedColumns[':p' . $index++]  = '`ClassNum`';
        }
        if ($this->isColumnModified(ClassesPeer::CLAZZ)) {
            $modifiedColumns[':p' . $index++]  = '`Class`';
        }
        if ($this->isColumnModified(ClassesPeer::CLASSREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`ClassRefNo`';
        }
        if ($this->isColumnModified(ClassesPeer::SORTNO)) {
            $modifiedColumns[':p' . $index++]  = '`SortNo`';
        }
        if ($this->isColumnModified(ClassesPeer::SYNONYM)) {
            $modifiedColumns[':p' . $index++]  = '`Synonym`';
        }
        if ($this->isColumnModified(ClassesPeer::AUTHORYEAR)) {
            $modifiedColumns[':p' . $index++]  = '`AuthorYear`';
        }
        if ($this->isColumnModified(ClassesPeer::COMMONNAME)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName`';
        }
        if ($this->isColumnModified(ClassesPeer::BODYSHAPEI)) {
            $modifiedColumns[':p' . $index++]  = '`BodyShapeI`';
        }
        if ($this->isColumnModified(ClassesPeer::WATERSALINITY)) {
            $modifiedColumns[':p' . $index++]  = '`WaterSalinity`';
        }
        if ($this->isColumnModified(ClassesPeer::SPECIESCOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`SpeciesCount`';
        }
        if ($this->isColumnModified(ClassesPeer::SUPERCLASS)) {
            $modifiedColumns[':p' . $index++]  = '`SuperClass`';
        }
        if ($this->isColumnModified(ClassesPeer::SUBCLASS)) {
            $modifiedColumns[':p' . $index++]  = '`Subclass`';
        }
        if ($this->isColumnModified(ClassesPeer::REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`Remarks`';
        }
        if ($this->isColumnModified(ClassesPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `classes` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ClassNum`':
                        $stmt->bindValue($identifier, $this->classnum, PDO::PARAM_INT);
                        break;
                    case '`Class`':
                        $stmt->bindValue($identifier, $this->class, PDO::PARAM_STR);
                        break;
                    case '`ClassRefNo`':
                        $stmt->bindValue($identifier, $this->classrefno, PDO::PARAM_INT);
                        break;
                    case '`SortNo`':
                        $stmt->bindValue($identifier, $this->sortno, PDO::PARAM_INT);
                        break;
                    case '`Synonym`':
                        $stmt->bindValue($identifier, $this->synonym, PDO::PARAM_INT);
                        break;
                    case '`AuthorYear`':
                        $stmt->bindValue($identifier, $this->authoryear, PDO::PARAM_STR);
                        break;
                    case '`CommonName`':
                        $stmt->bindValue($identifier, $this->commonname, PDO::PARAM_STR);
                        break;
                    case '`BodyShapeI`':
                        $stmt->bindValue($identifier, $this->bodyshapei, PDO::PARAM_STR);
                        break;
                    case '`WaterSalinity`':
                        $stmt->bindValue($identifier, $this->watersalinity, PDO::PARAM_STR);
                        break;
                    case '`SpeciesCount`':
                        $stmt->bindValue($identifier, $this->speciescount, PDO::PARAM_INT);
                        break;
                    case '`SuperClass`':
                        $stmt->bindValue($identifier, $this->superclass, PDO::PARAM_STR);
                        break;
                    case '`Subclass`':
                        $stmt->bindValue($identifier, $this->subclass, PDO::PARAM_STR);
                        break;
                    case '`Remarks`':
                        $stmt->bindValue($identifier, $this->remarks, PDO::PARAM_STR);
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


            if (($retval = ClassesPeer::doValidate($this, $columns)) !== true) {
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
        $pos = ClassesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getClassnum();
                break;
            case 1:
                return $this->getClass();
                break;
            case 2:
                return $this->getClassrefno();
                break;
            case 3:
                return $this->getSortno();
                break;
            case 4:
                return $this->getSynonym();
                break;
            case 5:
                return $this->getAuthoryear();
                break;
            case 6:
                return $this->getCommonname();
                break;
            case 7:
                return $this->getBodyshapei();
                break;
            case 8:
                return $this->getWatersalinity();
                break;
            case 9:
                return $this->getSpeciescount();
                break;
            case 10:
                return $this->getSuperclass();
                break;
            case 11:
                return $this->getSubclass();
                break;
            case 12:
                return $this->getRemarks();
                break;
            case 13:
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
        if (isset($alreadyDumpedObjects['Classes'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Classes'][$this->getPrimaryKey()] = true;
        $keys = ClassesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getClassnum(),
            $keys[1] => $this->getClass(),
            $keys[2] => $this->getClassrefno(),
            $keys[3] => $this->getSortno(),
            $keys[4] => $this->getSynonym(),
            $keys[5] => $this->getAuthoryear(),
            $keys[6] => $this->getCommonname(),
            $keys[7] => $this->getBodyshapei(),
            $keys[8] => $this->getWatersalinity(),
            $keys[9] => $this->getSpeciescount(),
            $keys[10] => $this->getSuperclass(),
            $keys[11] => $this->getSubclass(),
            $keys[12] => $this->getRemarks(),
            $keys[13] => $this->getTs(),
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
        $pos = ClassesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setClassnum($value);
                break;
            case 1:
                $this->setClass($value);
                break;
            case 2:
                $this->setClassrefno($value);
                break;
            case 3:
                $this->setSortno($value);
                break;
            case 4:
                $this->setSynonym($value);
                break;
            case 5:
                $this->setAuthoryear($value);
                break;
            case 6:
                $this->setCommonname($value);
                break;
            case 7:
                $this->setBodyshapei($value);
                break;
            case 8:
                $this->setWatersalinity($value);
                break;
            case 9:
                $this->setSpeciescount($value);
                break;
            case 10:
                $this->setSuperclass($value);
                break;
            case 11:
                $this->setSubclass($value);
                break;
            case 12:
                $this->setRemarks($value);
                break;
            case 13:
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
        $keys = ClassesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setClassnum($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setClass($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setClassrefno($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSortno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSynonym($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAuthoryear($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCommonname($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setBodyshapei($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setWatersalinity($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setSpeciescount($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setSuperclass($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setSubclass($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setRemarks($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setTs($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ClassesPeer::DATABASE_NAME);

        if ($this->isColumnModified(ClassesPeer::CLASSNUM)) $criteria->add(ClassesPeer::CLASSNUM, $this->classnum);
        if ($this->isColumnModified(ClassesPeer::CLAZZ)) $criteria->add(ClassesPeer::CLAZZ, $this->class);
        if ($this->isColumnModified(ClassesPeer::CLASSREFNO)) $criteria->add(ClassesPeer::CLASSREFNO, $this->classrefno);
        if ($this->isColumnModified(ClassesPeer::SORTNO)) $criteria->add(ClassesPeer::SORTNO, $this->sortno);
        if ($this->isColumnModified(ClassesPeer::SYNONYM)) $criteria->add(ClassesPeer::SYNONYM, $this->synonym);
        if ($this->isColumnModified(ClassesPeer::AUTHORYEAR)) $criteria->add(ClassesPeer::AUTHORYEAR, $this->authoryear);
        if ($this->isColumnModified(ClassesPeer::COMMONNAME)) $criteria->add(ClassesPeer::COMMONNAME, $this->commonname);
        if ($this->isColumnModified(ClassesPeer::BODYSHAPEI)) $criteria->add(ClassesPeer::BODYSHAPEI, $this->bodyshapei);
        if ($this->isColumnModified(ClassesPeer::WATERSALINITY)) $criteria->add(ClassesPeer::WATERSALINITY, $this->watersalinity);
        if ($this->isColumnModified(ClassesPeer::SPECIESCOUNT)) $criteria->add(ClassesPeer::SPECIESCOUNT, $this->speciescount);
        if ($this->isColumnModified(ClassesPeer::SUPERCLASS)) $criteria->add(ClassesPeer::SUPERCLASS, $this->superclass);
        if ($this->isColumnModified(ClassesPeer::SUBCLASS)) $criteria->add(ClassesPeer::SUBCLASS, $this->subclass);
        if ($this->isColumnModified(ClassesPeer::REMARKS)) $criteria->add(ClassesPeer::REMARKS, $this->remarks);
        if ($this->isColumnModified(ClassesPeer::TS)) $criteria->add(ClassesPeer::TS, $this->ts);

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
        $criteria = new Criteria(ClassesPeer::DATABASE_NAME);
        $criteria->add(ClassesPeer::CLAZZ, $this->class);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getClass();
    }

    /**
     * Generic method to set the primary key (class column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setClass($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getClass();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Classes (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setClassnum($this->getClassnum());
        $copyObj->setClassrefno($this->getClassrefno());
        $copyObj->setSortno($this->getSortno());
        $copyObj->setSynonym($this->getSynonym());
        $copyObj->setAuthoryear($this->getAuthoryear());
        $copyObj->setCommonname($this->getCommonname());
        $copyObj->setBodyshapei($this->getBodyshapei());
        $copyObj->setWatersalinity($this->getWatersalinity());
        $copyObj->setSpeciescount($this->getSpeciescount());
        $copyObj->setSuperclass($this->getSuperclass());
        $copyObj->setSubclass($this->getSubclass());
        $copyObj->setRemarks($this->getRemarks());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setClass(NULL); // this is a auto-increment column, so set to default value
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
     * @return Classes Clone of current object.
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
     * @return ClassesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ClassesPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->classnum = null;
        $this->class = null;
        $this->classrefno = null;
        $this->sortno = null;
        $this->synonym = null;
        $this->authoryear = null;
        $this->commonname = null;
        $this->bodyshapei = null;
        $this->watersalinity = null;
        $this->speciescount = null;
        $this->superclass = null;
        $this->subclass = null;
        $this->remarks = null;
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
        return (string) $this->exportTo(ClassesPeer::DEFAULT_STRING_FORMAT);
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
