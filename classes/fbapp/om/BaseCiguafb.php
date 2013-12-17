<?php


/**
 * Base class that represents a row from the 'ciguafb' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCiguafb extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CiguafbPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CiguafbPeer
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
     * The value for the speccode field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the validgenus field.
     * @var        string
     */
    protected $validgenus;

    /**
     * The value for the validspecies field.
     * @var        string
     */
    protected $validspecies;

    /**
     * The value for the countryct field.
     * @var        string
     */
    protected $countryct;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the frequencyct field.
     * @var        string
     */
    protected $frequencyct;

    /**
     * The value for the distributionct field.
     * @var        string
     */
    protected $distributionct;

    /**
     * The value for the notect field.
     * @var        string
     */
    protected $notect;

    /**
     * The value for the refcountryct field.
     * @var        int
     */
    protected $refcountryct;

    /**
     * The value for the dalzelcode field.
     * @var        int
     */
    protected $dalzelcode;

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
        $this->speccode = 0;
    }

    /**
     * Initializes internal state of BaseCiguafb object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [speccode] column value.
     *
     * @return int
     */
    public function getSpeccode()
    {

        return $this->speccode;
    }

    /**
     * Get the [validgenus] column value.
     *
     * @return string
     */
    public function getValidgenus()
    {

        return $this->validgenus;
    }

    /**
     * Get the [validspecies] column value.
     *
     * @return string
     */
    public function getValidspecies()
    {

        return $this->validspecies;
    }

    /**
     * Get the [countryct] column value.
     *
     * @return string
     */
    public function getCountryct()
    {

        return $this->countryct;
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
     * Get the [frequencyct] column value.
     *
     * @return string
     */
    public function getFrequencyct()
    {

        return $this->frequencyct;
    }

    /**
     * Get the [distributionct] column value.
     *
     * @return string
     */
    public function getDistributionct()
    {

        return $this->distributionct;
    }

    /**
     * Get the [notect] column value.
     *
     * @return string
     */
    public function getNotect()
    {

        return $this->notect;
    }

    /**
     * Get the [refcountryct] column value.
     *
     * @return int
     */
    public function getRefcountryct()
    {

        return $this->refcountryct;
    }

    /**
     * Get the [dalzelcode] column value.
     *
     * @return int
     */
    public function getDalzelcode()
    {

        return $this->dalzelcode;
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
     * @return Ciguafb The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = CiguafbPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Ciguafb The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = CiguafbPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [validgenus] column.
     *
     * @param  string $v new value
     * @return Ciguafb The current object (for fluent API support)
     */
    public function setValidgenus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->validgenus !== $v) {
            $this->validgenus = $v;
            $this->modifiedColumns[] = CiguafbPeer::VALIDGENUS;
        }


        return $this;
    } // setValidgenus()

    /**
     * Set the value of [validspecies] column.
     *
     * @param  string $v new value
     * @return Ciguafb The current object (for fluent API support)
     */
    public function setValidspecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->validspecies !== $v) {
            $this->validspecies = $v;
            $this->modifiedColumns[] = CiguafbPeer::VALIDSPECIES;
        }


        return $this;
    } // setValidspecies()

    /**
     * Set the value of [countryct] column.
     *
     * @param  string $v new value
     * @return Ciguafb The current object (for fluent API support)
     */
    public function setCountryct($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->countryct !== $v) {
            $this->countryct = $v;
            $this->modifiedColumns[] = CiguafbPeer::COUNTRYCT;
        }


        return $this;
    } // setCountryct()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Ciguafb The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = CiguafbPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [frequencyct] column.
     *
     * @param  string $v new value
     * @return Ciguafb The current object (for fluent API support)
     */
    public function setFrequencyct($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->frequencyct !== $v) {
            $this->frequencyct = $v;
            $this->modifiedColumns[] = CiguafbPeer::FREQUENCYCT;
        }


        return $this;
    } // setFrequencyct()

    /**
     * Set the value of [distributionct] column.
     *
     * @param  string $v new value
     * @return Ciguafb The current object (for fluent API support)
     */
    public function setDistributionct($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->distributionct !== $v) {
            $this->distributionct = $v;
            $this->modifiedColumns[] = CiguafbPeer::DISTRIBUTIONCT;
        }


        return $this;
    } // setDistributionct()

    /**
     * Set the value of [notect] column.
     *
     * @param  string $v new value
     * @return Ciguafb The current object (for fluent API support)
     */
    public function setNotect($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->notect !== $v) {
            $this->notect = $v;
            $this->modifiedColumns[] = CiguafbPeer::NOTECT;
        }


        return $this;
    } // setNotect()

    /**
     * Set the value of [refcountryct] column.
     *
     * @param  int $v new value
     * @return Ciguafb The current object (for fluent API support)
     */
    public function setRefcountryct($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->refcountryct !== $v) {
            $this->refcountryct = $v;
            $this->modifiedColumns[] = CiguafbPeer::REFCOUNTRYCT;
        }


        return $this;
    } // setRefcountryct()

    /**
     * Set the value of [dalzelcode] column.
     *
     * @param  int $v new value
     * @return Ciguafb The current object (for fluent API support)
     */
    public function setDalzelcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dalzelcode !== $v) {
            $this->dalzelcode = $v;
            $this->modifiedColumns[] = CiguafbPeer::DALZELCODE;
        }


        return $this;
    } // setDalzelcode()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ciguafb The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = CiguafbPeer::TS;
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
            if ($this->speccode !== 0) {
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

            $this->autoctr = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->speccode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->validgenus = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->validspecies = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->countryct = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->c_code = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->frequencyct = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->distributionct = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->notect = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->refcountryct = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->dalzelcode = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->ts = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = CiguafbPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Ciguafb object", $e);
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
            $con = Propel::getConnection(CiguafbPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CiguafbPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CiguafbPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CiguafbQuery::create()
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
            $con = Propel::getConnection(CiguafbPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CiguafbPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CiguafbPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CiguafbPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CiguafbPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`AutoCtr`';
        }
        if ($this->isColumnModified(CiguafbPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(CiguafbPeer::VALIDGENUS)) {
            $modifiedColumns[':p' . $index++]  = '`ValidGenus`';
        }
        if ($this->isColumnModified(CiguafbPeer::VALIDSPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`ValidSpecies`';
        }
        if ($this->isColumnModified(CiguafbPeer::COUNTRYCT)) {
            $modifiedColumns[':p' . $index++]  = '`CountryCT`';
        }
        if ($this->isColumnModified(CiguafbPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(CiguafbPeer::FREQUENCYCT)) {
            $modifiedColumns[':p' . $index++]  = '`FrequencyCT`';
        }
        if ($this->isColumnModified(CiguafbPeer::DISTRIBUTIONCT)) {
            $modifiedColumns[':p' . $index++]  = '`DistributionCT`';
        }
        if ($this->isColumnModified(CiguafbPeer::NOTECT)) {
            $modifiedColumns[':p' . $index++]  = '`NoteCT`';
        }
        if ($this->isColumnModified(CiguafbPeer::REFCOUNTRYCT)) {
            $modifiedColumns[':p' . $index++]  = '`RefCountryCT`';
        }
        if ($this->isColumnModified(CiguafbPeer::DALZELCODE)) {
            $modifiedColumns[':p' . $index++]  = '`DalzelCode`';
        }
        if ($this->isColumnModified(CiguafbPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `ciguafb` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`AutoCtr`':
                        $stmt->bindValue($identifier, $this->autoctr, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`ValidGenus`':
                        $stmt->bindValue($identifier, $this->validgenus, PDO::PARAM_STR);
                        break;
                    case '`ValidSpecies`':
                        $stmt->bindValue($identifier, $this->validspecies, PDO::PARAM_STR);
                        break;
                    case '`CountryCT`':
                        $stmt->bindValue($identifier, $this->countryct, PDO::PARAM_STR);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`FrequencyCT`':
                        $stmt->bindValue($identifier, $this->frequencyct, PDO::PARAM_STR);
                        break;
                    case '`DistributionCT`':
                        $stmt->bindValue($identifier, $this->distributionct, PDO::PARAM_STR);
                        break;
                    case '`NoteCT`':
                        $stmt->bindValue($identifier, $this->notect, PDO::PARAM_STR);
                        break;
                    case '`RefCountryCT`':
                        $stmt->bindValue($identifier, $this->refcountryct, PDO::PARAM_INT);
                        break;
                    case '`DalzelCode`':
                        $stmt->bindValue($identifier, $this->dalzelcode, PDO::PARAM_INT);
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
        $this->setAutoctr($pk);

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


            if (($retval = CiguafbPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CiguafbPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSpeccode();
                break;
            case 2:
                return $this->getValidgenus();
                break;
            case 3:
                return $this->getValidspecies();
                break;
            case 4:
                return $this->getCountryct();
                break;
            case 5:
                return $this->getCCode();
                break;
            case 6:
                return $this->getFrequencyct();
                break;
            case 7:
                return $this->getDistributionct();
                break;
            case 8:
                return $this->getNotect();
                break;
            case 9:
                return $this->getRefcountryct();
                break;
            case 10:
                return $this->getDalzelcode();
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
        if (isset($alreadyDumpedObjects['Ciguafb'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Ciguafb'][$this->getPrimaryKey()] = true;
        $keys = CiguafbPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getSpeccode(),
            $keys[2] => $this->getValidgenus(),
            $keys[3] => $this->getValidspecies(),
            $keys[4] => $this->getCountryct(),
            $keys[5] => $this->getCCode(),
            $keys[6] => $this->getFrequencyct(),
            $keys[7] => $this->getDistributionct(),
            $keys[8] => $this->getNotect(),
            $keys[9] => $this->getRefcountryct(),
            $keys[10] => $this->getDalzelcode(),
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
        $pos = CiguafbPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSpeccode($value);
                break;
            case 2:
                $this->setValidgenus($value);
                break;
            case 3:
                $this->setValidspecies($value);
                break;
            case 4:
                $this->setCountryct($value);
                break;
            case 5:
                $this->setCCode($value);
                break;
            case 6:
                $this->setFrequencyct($value);
                break;
            case 7:
                $this->setDistributionct($value);
                break;
            case 8:
                $this->setNotect($value);
                break;
            case 9:
                $this->setRefcountryct($value);
                break;
            case 10:
                $this->setDalzelcode($value);
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
        $keys = CiguafbPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSpeccode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setValidgenus($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setValidspecies($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCountryct($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCCode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setFrequencyct($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDistributionct($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setNotect($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setRefcountryct($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDalzelcode($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setTs($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CiguafbPeer::DATABASE_NAME);

        if ($this->isColumnModified(CiguafbPeer::AUTOCTR)) $criteria->add(CiguafbPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(CiguafbPeer::SPECCODE)) $criteria->add(CiguafbPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(CiguafbPeer::VALIDGENUS)) $criteria->add(CiguafbPeer::VALIDGENUS, $this->validgenus);
        if ($this->isColumnModified(CiguafbPeer::VALIDSPECIES)) $criteria->add(CiguafbPeer::VALIDSPECIES, $this->validspecies);
        if ($this->isColumnModified(CiguafbPeer::COUNTRYCT)) $criteria->add(CiguafbPeer::COUNTRYCT, $this->countryct);
        if ($this->isColumnModified(CiguafbPeer::C_CODE)) $criteria->add(CiguafbPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(CiguafbPeer::FREQUENCYCT)) $criteria->add(CiguafbPeer::FREQUENCYCT, $this->frequencyct);
        if ($this->isColumnModified(CiguafbPeer::DISTRIBUTIONCT)) $criteria->add(CiguafbPeer::DISTRIBUTIONCT, $this->distributionct);
        if ($this->isColumnModified(CiguafbPeer::NOTECT)) $criteria->add(CiguafbPeer::NOTECT, $this->notect);
        if ($this->isColumnModified(CiguafbPeer::REFCOUNTRYCT)) $criteria->add(CiguafbPeer::REFCOUNTRYCT, $this->refcountryct);
        if ($this->isColumnModified(CiguafbPeer::DALZELCODE)) $criteria->add(CiguafbPeer::DALZELCODE, $this->dalzelcode);
        if ($this->isColumnModified(CiguafbPeer::TS)) $criteria->add(CiguafbPeer::TS, $this->ts);

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
        $criteria = new Criteria(CiguafbPeer::DATABASE_NAME);
        $criteria->add(CiguafbPeer::AUTOCTR, $this->autoctr);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getAutoctr();
    }

    /**
     * Generic method to set the primary key (autoctr column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setAutoctr($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getAutoctr();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Ciguafb (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setValidgenus($this->getValidgenus());
        $copyObj->setValidspecies($this->getValidspecies());
        $copyObj->setCountryct($this->getCountryct());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setFrequencyct($this->getFrequencyct());
        $copyObj->setDistributionct($this->getDistributionct());
        $copyObj->setNotect($this->getNotect());
        $copyObj->setRefcountryct($this->getRefcountryct());
        $copyObj->setDalzelcode($this->getDalzelcode());
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
     * @return Ciguafb Clone of current object.
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
     * @return CiguafbPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CiguafbPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->speccode = null;
        $this->validgenus = null;
        $this->validspecies = null;
        $this->countryct = null;
        $this->c_code = null;
        $this->frequencyct = null;
        $this->distributionct = null;
        $this->notect = null;
        $this->refcountryct = null;
        $this->dalzelcode = null;
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
        return (string) $this->exportTo(CiguafbPeer::DEFAULT_STRING_FORMAT);
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
