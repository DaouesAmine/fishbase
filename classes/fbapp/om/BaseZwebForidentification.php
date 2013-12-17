<?php


/**
 * Base class that represents a row from the 'zweb_foridentification' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseZwebForidentification extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ZwebForidentificationPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ZwebForidentificationPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the famcode field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $famcode;

    /**
     * The value for the family field.
     * @var        string
     */
    protected $family;

    /**
     * The value for the commonname field.
     * @var        string
     */
    protected $commonname;

    /**
     * The value for the ordnum field.
     * @var        int
     */
    protected $ordnum;

    /**
     * The value for the aspinesmin field.
     * @var        int
     */
    protected $aspinesmin;

    /**
     * The value for the aspinesmax field.
     * @var        int
     */
    protected $aspinesmax;

    /**
     * The value for the dspinesmin field.
     * @var        int
     */
    protected $dspinesmin;

    /**
     * The value for the dspinesmax field.
     * @var        int
     */
    protected $dspinesmax;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the areacode field.
     * @var        int
     */
    protected $areacode;

    /**
     * The value for the fam field.
     * @var        string
     */
    protected $fam;

    /**
     * The value for the e_code field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $e_code;

    /**
     * The value for the ts field.
     * @var        string
     */
    protected $ts;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->famcode = 0;
        $this->e_code = 0;
    }

    /**
     * Initializes internal state of BaseZwebForidentification object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [famcode] column value.
     *
     * @return int
     */
    public function getFamcode()
    {

        return $this->famcode;
    }

    /**
     * Get the [family] column value.
     *
     * @return string
     */
    public function getFamily()
    {

        return $this->family;
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
     * Get the [ordnum] column value.
     *
     * @return int
     */
    public function getOrdnum()
    {

        return $this->ordnum;
    }

    /**
     * Get the [aspinesmin] column value.
     *
     * @return int
     */
    public function getAspinesmin()
    {

        return $this->aspinesmin;
    }

    /**
     * Get the [aspinesmax] column value.
     *
     * @return int
     */
    public function getAspinesmax()
    {

        return $this->aspinesmax;
    }

    /**
     * Get the [dspinesmin] column value.
     *
     * @return int
     */
    public function getDspinesmin()
    {

        return $this->dspinesmin;
    }

    /**
     * Get the [dspinesmax] column value.
     *
     * @return int
     */
    public function getDspinesmax()
    {

        return $this->dspinesmax;
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
     * Get the [areacode] column value.
     *
     * @return int
     */
    public function getAreacode()
    {

        return $this->areacode;
    }

    /**
     * Get the [fam] column value.
     *
     * @return string
     */
    public function getFam()
    {

        return $this->fam;
    }

    /**
     * Get the [e_code] column value.
     *
     * @return int
     */
    public function getECode()
    {

        return $this->e_code;
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
     * Get the [pkid] column value.
     *
     * @return string
     */
    public function getPkid()
    {

        return $this->pkid;
    }

    /**
     * Set the value of [famcode] column.
     *
     * @param  int $v new value
     * @return ZwebForidentification The current object (for fluent API support)
     */
    public function setFamcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->famcode !== $v) {
            $this->famcode = $v;
            $this->modifiedColumns[] = ZwebForidentificationPeer::FAMCODE;
        }


        return $this;
    } // setFamcode()

    /**
     * Set the value of [family] column.
     *
     * @param  string $v new value
     * @return ZwebForidentification The current object (for fluent API support)
     */
    public function setFamily($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->family !== $v) {
            $this->family = $v;
            $this->modifiedColumns[] = ZwebForidentificationPeer::FAMILY;
        }


        return $this;
    } // setFamily()

    /**
     * Set the value of [commonname] column.
     *
     * @param  string $v new value
     * @return ZwebForidentification The current object (for fluent API support)
     */
    public function setCommonname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname !== $v) {
            $this->commonname = $v;
            $this->modifiedColumns[] = ZwebForidentificationPeer::COMMONNAME;
        }


        return $this;
    } // setCommonname()

    /**
     * Set the value of [ordnum] column.
     *
     * @param  int $v new value
     * @return ZwebForidentification The current object (for fluent API support)
     */
    public function setOrdnum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ordnum !== $v) {
            $this->ordnum = $v;
            $this->modifiedColumns[] = ZwebForidentificationPeer::ORDNUM;
        }


        return $this;
    } // setOrdnum()

    /**
     * Set the value of [aspinesmin] column.
     *
     * @param  int $v new value
     * @return ZwebForidentification The current object (for fluent API support)
     */
    public function setAspinesmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aspinesmin !== $v) {
            $this->aspinesmin = $v;
            $this->modifiedColumns[] = ZwebForidentificationPeer::ASPINESMIN;
        }


        return $this;
    } // setAspinesmin()

    /**
     * Set the value of [aspinesmax] column.
     *
     * @param  int $v new value
     * @return ZwebForidentification The current object (for fluent API support)
     */
    public function setAspinesmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aspinesmax !== $v) {
            $this->aspinesmax = $v;
            $this->modifiedColumns[] = ZwebForidentificationPeer::ASPINESMAX;
        }


        return $this;
    } // setAspinesmax()

    /**
     * Set the value of [dspinesmin] column.
     *
     * @param  int $v new value
     * @return ZwebForidentification The current object (for fluent API support)
     */
    public function setDspinesmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dspinesmin !== $v) {
            $this->dspinesmin = $v;
            $this->modifiedColumns[] = ZwebForidentificationPeer::DSPINESMIN;
        }


        return $this;
    } // setDspinesmin()

    /**
     * Set the value of [dspinesmax] column.
     *
     * @param  int $v new value
     * @return ZwebForidentification The current object (for fluent API support)
     */
    public function setDspinesmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dspinesmax !== $v) {
            $this->dspinesmax = $v;
            $this->modifiedColumns[] = ZwebForidentificationPeer::DSPINESMAX;
        }


        return $this;
    } // setDspinesmax()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return ZwebForidentification The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = ZwebForidentificationPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [areacode] column.
     *
     * @param  int $v new value
     * @return ZwebForidentification The current object (for fluent API support)
     */
    public function setAreacode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areacode !== $v) {
            $this->areacode = $v;
            $this->modifiedColumns[] = ZwebForidentificationPeer::AREACODE;
        }


        return $this;
    } // setAreacode()

    /**
     * Set the value of [fam] column.
     *
     * @param  string $v new value
     * @return ZwebForidentification The current object (for fluent API support)
     */
    public function setFam($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fam !== $v) {
            $this->fam = $v;
            $this->modifiedColumns[] = ZwebForidentificationPeer::FAM;
        }


        return $this;
    } // setFam()

    /**
     * Set the value of [e_code] column.
     *
     * @param  int $v new value
     * @return ZwebForidentification The current object (for fluent API support)
     */
    public function setECode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->e_code !== $v) {
            $this->e_code = $v;
            $this->modifiedColumns[] = ZwebForidentificationPeer::E_CODE;
        }


        return $this;
    } // setECode()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return ZwebForidentification The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = ZwebForidentificationPeer::TS;
            }
        } // if either are not null


        return $this;
    } // setTs()

    /**
     * Set the value of [pkid] column.
     *
     * @param  string $v new value
     * @return ZwebForidentification The current object (for fluent API support)
     */
    public function setPkid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pkid !== $v) {
            $this->pkid = $v;
            $this->modifiedColumns[] = ZwebForidentificationPeer::PKID;
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
            if ($this->famcode !== 0) {
                return false;
            }

            if ($this->e_code !== 0) {
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

            $this->famcode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->family = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->commonname = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->ordnum = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->aspinesmin = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->aspinesmax = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->dspinesmin = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->dspinesmax = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->c_code = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->areacode = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->fam = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->e_code = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->ts = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->pkid = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = ZwebForidentificationPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ZwebForidentification object", $e);
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
            $con = Propel::getConnection(ZwebForidentificationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ZwebForidentificationPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(ZwebForidentificationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ZwebForidentificationQuery::create()
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
            $con = Propel::getConnection(ZwebForidentificationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ZwebForidentificationPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = ZwebForidentificationPeer::PKID;
        if (null !== $this->pkid) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ZwebForidentificationPeer::PKID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ZwebForidentificationPeer::FAMCODE)) {
            $modifiedColumns[':p' . $index++]  = '`FamCode`';
        }
        if ($this->isColumnModified(ZwebForidentificationPeer::FAMILY)) {
            $modifiedColumns[':p' . $index++]  = '`Family`';
        }
        if ($this->isColumnModified(ZwebForidentificationPeer::COMMONNAME)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName`';
        }
        if ($this->isColumnModified(ZwebForidentificationPeer::ORDNUM)) {
            $modifiedColumns[':p' . $index++]  = '`Ordnum`';
        }
        if ($this->isColumnModified(ZwebForidentificationPeer::ASPINESMIN)) {
            $modifiedColumns[':p' . $index++]  = '`AspinesMin`';
        }
        if ($this->isColumnModified(ZwebForidentificationPeer::ASPINESMAX)) {
            $modifiedColumns[':p' . $index++]  = '`AspinesMax`';
        }
        if ($this->isColumnModified(ZwebForidentificationPeer::DSPINESMIN)) {
            $modifiedColumns[':p' . $index++]  = '`DspinesMin`';
        }
        if ($this->isColumnModified(ZwebForidentificationPeer::DSPINESMAX)) {
            $modifiedColumns[':p' . $index++]  = '`DspinesMax`';
        }
        if ($this->isColumnModified(ZwebForidentificationPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(ZwebForidentificationPeer::AREACODE)) {
            $modifiedColumns[':p' . $index++]  = '`AreaCode`';
        }
        if ($this->isColumnModified(ZwebForidentificationPeer::FAM)) {
            $modifiedColumns[':p' . $index++]  = '`FAM`';
        }
        if ($this->isColumnModified(ZwebForidentificationPeer::E_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`e_code`';
        }
        if ($this->isColumnModified(ZwebForidentificationPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }
        if ($this->isColumnModified(ZwebForidentificationPeer::PKID)) {
            $modifiedColumns[':p' . $index++]  = '`PKID`';
        }

        $sql = sprintf(
            'INSERT INTO `zweb_foridentification` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`FamCode`':
                        $stmt->bindValue($identifier, $this->famcode, PDO::PARAM_INT);
                        break;
                    case '`Family`':
                        $stmt->bindValue($identifier, $this->family, PDO::PARAM_STR);
                        break;
                    case '`CommonName`':
                        $stmt->bindValue($identifier, $this->commonname, PDO::PARAM_STR);
                        break;
                    case '`Ordnum`':
                        $stmt->bindValue($identifier, $this->ordnum, PDO::PARAM_INT);
                        break;
                    case '`AspinesMin`':
                        $stmt->bindValue($identifier, $this->aspinesmin, PDO::PARAM_INT);
                        break;
                    case '`AspinesMax`':
                        $stmt->bindValue($identifier, $this->aspinesmax, PDO::PARAM_INT);
                        break;
                    case '`DspinesMin`':
                        $stmt->bindValue($identifier, $this->dspinesmin, PDO::PARAM_INT);
                        break;
                    case '`DspinesMax`':
                        $stmt->bindValue($identifier, $this->dspinesmax, PDO::PARAM_INT);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`AreaCode`':
                        $stmt->bindValue($identifier, $this->areacode, PDO::PARAM_INT);
                        break;
                    case '`FAM`':
                        $stmt->bindValue($identifier, $this->fam, PDO::PARAM_STR);
                        break;
                    case '`e_code`':
                        $stmt->bindValue($identifier, $this->e_code, PDO::PARAM_INT);
                        break;
                    case '`TS`':
                        $stmt->bindValue($identifier, $this->ts, PDO::PARAM_STR);
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


            if (($retval = ZwebForidentificationPeer::doValidate($this, $columns)) !== true) {
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
        $pos = ZwebForidentificationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getFamcode();
                break;
            case 1:
                return $this->getFamily();
                break;
            case 2:
                return $this->getCommonname();
                break;
            case 3:
                return $this->getOrdnum();
                break;
            case 4:
                return $this->getAspinesmin();
                break;
            case 5:
                return $this->getAspinesmax();
                break;
            case 6:
                return $this->getDspinesmin();
                break;
            case 7:
                return $this->getDspinesmax();
                break;
            case 8:
                return $this->getCCode();
                break;
            case 9:
                return $this->getAreacode();
                break;
            case 10:
                return $this->getFam();
                break;
            case 11:
                return $this->getECode();
                break;
            case 12:
                return $this->getTs();
                break;
            case 13:
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
        if (isset($alreadyDumpedObjects['ZwebForidentification'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ZwebForidentification'][$this->getPrimaryKey()] = true;
        $keys = ZwebForidentificationPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getFamcode(),
            $keys[1] => $this->getFamily(),
            $keys[2] => $this->getCommonname(),
            $keys[3] => $this->getOrdnum(),
            $keys[4] => $this->getAspinesmin(),
            $keys[5] => $this->getAspinesmax(),
            $keys[6] => $this->getDspinesmin(),
            $keys[7] => $this->getDspinesmax(),
            $keys[8] => $this->getCCode(),
            $keys[9] => $this->getAreacode(),
            $keys[10] => $this->getFam(),
            $keys[11] => $this->getECode(),
            $keys[12] => $this->getTs(),
            $keys[13] => $this->getPkid(),
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
        $pos = ZwebForidentificationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setFamcode($value);
                break;
            case 1:
                $this->setFamily($value);
                break;
            case 2:
                $this->setCommonname($value);
                break;
            case 3:
                $this->setOrdnum($value);
                break;
            case 4:
                $this->setAspinesmin($value);
                break;
            case 5:
                $this->setAspinesmax($value);
                break;
            case 6:
                $this->setDspinesmin($value);
                break;
            case 7:
                $this->setDspinesmax($value);
                break;
            case 8:
                $this->setCCode($value);
                break;
            case 9:
                $this->setAreacode($value);
                break;
            case 10:
                $this->setFam($value);
                break;
            case 11:
                $this->setECode($value);
                break;
            case 12:
                $this->setTs($value);
                break;
            case 13:
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
        $keys = ZwebForidentificationPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setFamcode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFamily($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCommonname($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOrdnum($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAspinesmin($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAspinesmax($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDspinesmin($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDspinesmax($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCCode($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAreacode($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setFam($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setECode($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setTs($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setPkid($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ZwebForidentificationPeer::DATABASE_NAME);

        if ($this->isColumnModified(ZwebForidentificationPeer::FAMCODE)) $criteria->add(ZwebForidentificationPeer::FAMCODE, $this->famcode);
        if ($this->isColumnModified(ZwebForidentificationPeer::FAMILY)) $criteria->add(ZwebForidentificationPeer::FAMILY, $this->family);
        if ($this->isColumnModified(ZwebForidentificationPeer::COMMONNAME)) $criteria->add(ZwebForidentificationPeer::COMMONNAME, $this->commonname);
        if ($this->isColumnModified(ZwebForidentificationPeer::ORDNUM)) $criteria->add(ZwebForidentificationPeer::ORDNUM, $this->ordnum);
        if ($this->isColumnModified(ZwebForidentificationPeer::ASPINESMIN)) $criteria->add(ZwebForidentificationPeer::ASPINESMIN, $this->aspinesmin);
        if ($this->isColumnModified(ZwebForidentificationPeer::ASPINESMAX)) $criteria->add(ZwebForidentificationPeer::ASPINESMAX, $this->aspinesmax);
        if ($this->isColumnModified(ZwebForidentificationPeer::DSPINESMIN)) $criteria->add(ZwebForidentificationPeer::DSPINESMIN, $this->dspinesmin);
        if ($this->isColumnModified(ZwebForidentificationPeer::DSPINESMAX)) $criteria->add(ZwebForidentificationPeer::DSPINESMAX, $this->dspinesmax);
        if ($this->isColumnModified(ZwebForidentificationPeer::C_CODE)) $criteria->add(ZwebForidentificationPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(ZwebForidentificationPeer::AREACODE)) $criteria->add(ZwebForidentificationPeer::AREACODE, $this->areacode);
        if ($this->isColumnModified(ZwebForidentificationPeer::FAM)) $criteria->add(ZwebForidentificationPeer::FAM, $this->fam);
        if ($this->isColumnModified(ZwebForidentificationPeer::E_CODE)) $criteria->add(ZwebForidentificationPeer::E_CODE, $this->e_code);
        if ($this->isColumnModified(ZwebForidentificationPeer::TS)) $criteria->add(ZwebForidentificationPeer::TS, $this->ts);
        if ($this->isColumnModified(ZwebForidentificationPeer::PKID)) $criteria->add(ZwebForidentificationPeer::PKID, $this->pkid);

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
        $criteria = new Criteria(ZwebForidentificationPeer::DATABASE_NAME);
        $criteria->add(ZwebForidentificationPeer::PKID, $this->pkid);

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
     * @param object $copyObj An object of ZwebForidentification (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFamcode($this->getFamcode());
        $copyObj->setFamily($this->getFamily());
        $copyObj->setCommonname($this->getCommonname());
        $copyObj->setOrdnum($this->getOrdnum());
        $copyObj->setAspinesmin($this->getAspinesmin());
        $copyObj->setAspinesmax($this->getAspinesmax());
        $copyObj->setDspinesmin($this->getDspinesmin());
        $copyObj->setDspinesmax($this->getDspinesmax());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setAreacode($this->getAreacode());
        $copyObj->setFam($this->getFam());
        $copyObj->setECode($this->getECode());
        $copyObj->setTs($this->getTs());
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
     * @return ZwebForidentification Clone of current object.
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
     * @return ZwebForidentificationPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ZwebForidentificationPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->famcode = null;
        $this->family = null;
        $this->commonname = null;
        $this->ordnum = null;
        $this->aspinesmin = null;
        $this->aspinesmax = null;
        $this->dspinesmin = null;
        $this->dspinesmax = null;
        $this->c_code = null;
        $this->areacode = null;
        $this->fam = null;
        $this->e_code = null;
        $this->ts = null;
        $this->pkid = null;
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
        return (string) $this->exportTo(ZwebForidentificationPeer::DEFAULT_STRING_FORMAT);
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
