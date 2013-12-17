<?php


/**
 * Base class that represents a row from the 'fl_lossesfinance' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFlLossesfinance extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FlLossesfinancePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FlLossesfinancePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the losscode field.
     * @var        int
     */
    protected $losscode;

    /**
     * The value for the currency field.
     * @var        string
     */
    protected $currency;

    /**
     * The value for the bestprice field.
     * @var        double
     */
    protected $bestprice;

    /**
     * The value for the valueofbatch field.
     * @var        double
     */
    protected $valueofbatch;

    /**
     * The value for the valueofphysicalloss field.
     * @var        double
     */
    protected $valueofphysicalloss;

    /**
     * The value for the lowerprice field.
     * @var        double
     */
    protected $lowerprice;

    /**
     * The value for the lowerpricepofbestprice field.
     * @var        double
     */
    protected $lowerpricepofbestprice;

    /**
     * The value for the valueofqualityloss field.
     * @var        double
     */
    protected $valueofqualityloss;

    /**
     * The value for the totalvalueofloss field.
     * @var        double
     */
    protected $totalvalueofloss;

    /**
     * The value for the totallosspbyvalueminimum field.
     * @var        double
     */
    protected $totallosspbyvalueminimum;

    /**
     * The value for the totallosspbyvaluemaximum field.
     * @var        double
     */
    protected $totallosspbyvaluemaximum;

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
        $this->editable = '-1';
    }

    /**
     * Initializes internal state of BaseFlLossesfinance object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [losscode] column value.
     *
     * @return int
     */
    public function getLosscode()
    {

        return $this->losscode;
    }

    /**
     * Get the [currency] column value.
     *
     * @return string
     */
    public function getCurrency()
    {

        return $this->currency;
    }

    /**
     * Get the [bestprice] column value.
     *
     * @return double
     */
    public function getBestprice()
    {

        return $this->bestprice;
    }

    /**
     * Get the [valueofbatch] column value.
     *
     * @return double
     */
    public function getValueofbatch()
    {

        return $this->valueofbatch;
    }

    /**
     * Get the [valueofphysicalloss] column value.
     *
     * @return double
     */
    public function getValueofphysicalloss()
    {

        return $this->valueofphysicalloss;
    }

    /**
     * Get the [lowerprice] column value.
     *
     * @return double
     */
    public function getLowerprice()
    {

        return $this->lowerprice;
    }

    /**
     * Get the [lowerpricepofbestprice] column value.
     *
     * @return double
     */
    public function getLowerpricepofbestprice()
    {

        return $this->lowerpricepofbestprice;
    }

    /**
     * Get the [valueofqualityloss] column value.
     *
     * @return double
     */
    public function getValueofqualityloss()
    {

        return $this->valueofqualityloss;
    }

    /**
     * Get the [totalvalueofloss] column value.
     *
     * @return double
     */
    public function getTotalvalueofloss()
    {

        return $this->totalvalueofloss;
    }

    /**
     * Get the [totallosspbyvalueminimum] column value.
     *
     * @return double
     */
    public function getTotallosspbyvalueminimum()
    {

        return $this->totallosspbyvalueminimum;
    }

    /**
     * Get the [totallosspbyvaluemaximum] column value.
     *
     * @return double
     */
    public function getTotallosspbyvaluemaximum()
    {

        return $this->totallosspbyvaluemaximum;
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
     * Set the value of [losscode] column.
     *
     * @param  int $v new value
     * @return FlLossesfinance The current object (for fluent API support)
     */
    public function setLosscode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->losscode !== $v) {
            $this->losscode = $v;
            $this->modifiedColumns[] = FlLossesfinancePeer::LOSSCODE;
        }


        return $this;
    } // setLosscode()

    /**
     * Set the value of [currency] column.
     *
     * @param  string $v new value
     * @return FlLossesfinance The current object (for fluent API support)
     */
    public function setCurrency($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->currency !== $v) {
            $this->currency = $v;
            $this->modifiedColumns[] = FlLossesfinancePeer::CURRENCY;
        }


        return $this;
    } // setCurrency()

    /**
     * Set the value of [bestprice] column.
     *
     * @param  double $v new value
     * @return FlLossesfinance The current object (for fluent API support)
     */
    public function setBestprice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->bestprice !== $v) {
            $this->bestprice = $v;
            $this->modifiedColumns[] = FlLossesfinancePeer::BESTPRICE;
        }


        return $this;
    } // setBestprice()

    /**
     * Set the value of [valueofbatch] column.
     *
     * @param  double $v new value
     * @return FlLossesfinance The current object (for fluent API support)
     */
    public function setValueofbatch($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->valueofbatch !== $v) {
            $this->valueofbatch = $v;
            $this->modifiedColumns[] = FlLossesfinancePeer::VALUEOFBATCH;
        }


        return $this;
    } // setValueofbatch()

    /**
     * Set the value of [valueofphysicalloss] column.
     *
     * @param  double $v new value
     * @return FlLossesfinance The current object (for fluent API support)
     */
    public function setValueofphysicalloss($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->valueofphysicalloss !== $v) {
            $this->valueofphysicalloss = $v;
            $this->modifiedColumns[] = FlLossesfinancePeer::VALUEOFPHYSICALLOSS;
        }


        return $this;
    } // setValueofphysicalloss()

    /**
     * Set the value of [lowerprice] column.
     *
     * @param  double $v new value
     * @return FlLossesfinance The current object (for fluent API support)
     */
    public function setLowerprice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lowerprice !== $v) {
            $this->lowerprice = $v;
            $this->modifiedColumns[] = FlLossesfinancePeer::LOWERPRICE;
        }


        return $this;
    } // setLowerprice()

    /**
     * Set the value of [lowerpricepofbestprice] column.
     *
     * @param  double $v new value
     * @return FlLossesfinance The current object (for fluent API support)
     */
    public function setLowerpricepofbestprice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lowerpricepofbestprice !== $v) {
            $this->lowerpricepofbestprice = $v;
            $this->modifiedColumns[] = FlLossesfinancePeer::LOWERPRICEPOFBESTPRICE;
        }


        return $this;
    } // setLowerpricepofbestprice()

    /**
     * Set the value of [valueofqualityloss] column.
     *
     * @param  double $v new value
     * @return FlLossesfinance The current object (for fluent API support)
     */
    public function setValueofqualityloss($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->valueofqualityloss !== $v) {
            $this->valueofqualityloss = $v;
            $this->modifiedColumns[] = FlLossesfinancePeer::VALUEOFQUALITYLOSS;
        }


        return $this;
    } // setValueofqualityloss()

    /**
     * Set the value of [totalvalueofloss] column.
     *
     * @param  double $v new value
     * @return FlLossesfinance The current object (for fluent API support)
     */
    public function setTotalvalueofloss($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->totalvalueofloss !== $v) {
            $this->totalvalueofloss = $v;
            $this->modifiedColumns[] = FlLossesfinancePeer::TOTALVALUEOFLOSS;
        }


        return $this;
    } // setTotalvalueofloss()

    /**
     * Set the value of [totallosspbyvalueminimum] column.
     *
     * @param  double $v new value
     * @return FlLossesfinance The current object (for fluent API support)
     */
    public function setTotallosspbyvalueminimum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->totallosspbyvalueminimum !== $v) {
            $this->totallosspbyvalueminimum = $v;
            $this->modifiedColumns[] = FlLossesfinancePeer::TOTALLOSSPBYVALUEMINIMUM;
        }


        return $this;
    } // setTotallosspbyvalueminimum()

    /**
     * Set the value of [totallosspbyvaluemaximum] column.
     *
     * @param  double $v new value
     * @return FlLossesfinance The current object (for fluent API support)
     */
    public function setTotallosspbyvaluemaximum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->totallosspbyvaluemaximum !== $v) {
            $this->totallosspbyvaluemaximum = $v;
            $this->modifiedColumns[] = FlLossesfinancePeer::TOTALLOSSPBYVALUEMAXIMUM;
        }


        return $this;
    } // setTotallosspbyvaluemaximum()

    /**
     * Set the value of [editable] column.
     *
     * @param  string $v new value
     * @return FlLossesfinance The current object (for fluent API support)
     */
    public function setEditable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->editable !== $v) {
            $this->editable = $v;
            $this->modifiedColumns[] = FlLossesfinancePeer::EDITABLE;
        }


        return $this;
    } // setEditable()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return FlLossesfinance The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = FlLossesfinancePeer::TS;
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

            $this->losscode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->currency = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->bestprice = ($row[$startcol + 2] !== null) ? (double) $row[$startcol + 2] : null;
            $this->valueofbatch = ($row[$startcol + 3] !== null) ? (double) $row[$startcol + 3] : null;
            $this->valueofphysicalloss = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
            $this->lowerprice = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
            $this->lowerpricepofbestprice = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->valueofqualityloss = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->totalvalueofloss = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->totallosspbyvalueminimum = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->totallosspbyvaluemaximum = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->editable = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->ts = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 13; // 13 = FlLossesfinancePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating FlLossesfinance object", $e);
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
            $con = Propel::getConnection(FlLossesfinancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FlLossesfinancePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(FlLossesfinancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FlLossesfinanceQuery::create()
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
            $con = Propel::getConnection(FlLossesfinancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                FlLossesfinancePeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(FlLossesfinancePeer::LOSSCODE)) {
            $modifiedColumns[':p' . $index++]  = '`LossCode`';
        }
        if ($this->isColumnModified(FlLossesfinancePeer::CURRENCY)) {
            $modifiedColumns[':p' . $index++]  = '`currency`';
        }
        if ($this->isColumnModified(FlLossesfinancePeer::BESTPRICE)) {
            $modifiedColumns[':p' . $index++]  = '`BestPrice`';
        }
        if ($this->isColumnModified(FlLossesfinancePeer::VALUEOFBATCH)) {
            $modifiedColumns[':p' . $index++]  = '`ValueOfBatch`';
        }
        if ($this->isColumnModified(FlLossesfinancePeer::VALUEOFPHYSICALLOSS)) {
            $modifiedColumns[':p' . $index++]  = '`ValueOfPhysicalLoss`';
        }
        if ($this->isColumnModified(FlLossesfinancePeer::LOWERPRICE)) {
            $modifiedColumns[':p' . $index++]  = '`LowerPrice`';
        }
        if ($this->isColumnModified(FlLossesfinancePeer::LOWERPRICEPOFBESTPRICE)) {
            $modifiedColumns[':p' . $index++]  = '`LowerPricePofBestPrice`';
        }
        if ($this->isColumnModified(FlLossesfinancePeer::VALUEOFQUALITYLOSS)) {
            $modifiedColumns[':p' . $index++]  = '`ValueOfQualityLoss`';
        }
        if ($this->isColumnModified(FlLossesfinancePeer::TOTALVALUEOFLOSS)) {
            $modifiedColumns[':p' . $index++]  = '`TotalValueofLoss`';
        }
        if ($this->isColumnModified(FlLossesfinancePeer::TOTALLOSSPBYVALUEMINIMUM)) {
            $modifiedColumns[':p' . $index++]  = '`TotalLossPByValueMinimum`';
        }
        if ($this->isColumnModified(FlLossesfinancePeer::TOTALLOSSPBYVALUEMAXIMUM)) {
            $modifiedColumns[':p' . $index++]  = '`TotalLossPByValueMaximum`';
        }
        if ($this->isColumnModified(FlLossesfinancePeer::EDITABLE)) {
            $modifiedColumns[':p' . $index++]  = '`Editable`';
        }
        if ($this->isColumnModified(FlLossesfinancePeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `fl_lossesfinance` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`LossCode`':
                        $stmt->bindValue($identifier, $this->losscode, PDO::PARAM_INT);
                        break;
                    case '`currency`':
                        $stmt->bindValue($identifier, $this->currency, PDO::PARAM_STR);
                        break;
                    case '`BestPrice`':
                        $stmt->bindValue($identifier, $this->bestprice, PDO::PARAM_STR);
                        break;
                    case '`ValueOfBatch`':
                        $stmt->bindValue($identifier, $this->valueofbatch, PDO::PARAM_STR);
                        break;
                    case '`ValueOfPhysicalLoss`':
                        $stmt->bindValue($identifier, $this->valueofphysicalloss, PDO::PARAM_STR);
                        break;
                    case '`LowerPrice`':
                        $stmt->bindValue($identifier, $this->lowerprice, PDO::PARAM_STR);
                        break;
                    case '`LowerPricePofBestPrice`':
                        $stmt->bindValue($identifier, $this->lowerpricepofbestprice, PDO::PARAM_STR);
                        break;
                    case '`ValueOfQualityLoss`':
                        $stmt->bindValue($identifier, $this->valueofqualityloss, PDO::PARAM_STR);
                        break;
                    case '`TotalValueofLoss`':
                        $stmt->bindValue($identifier, $this->totalvalueofloss, PDO::PARAM_STR);
                        break;
                    case '`TotalLossPByValueMinimum`':
                        $stmt->bindValue($identifier, $this->totallosspbyvalueminimum, PDO::PARAM_STR);
                        break;
                    case '`TotalLossPByValueMaximum`':
                        $stmt->bindValue($identifier, $this->totallosspbyvaluemaximum, PDO::PARAM_STR);
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


            if (($retval = FlLossesfinancePeer::doValidate($this, $columns)) !== true) {
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
        $pos = FlLossesfinancePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getLosscode();
                break;
            case 1:
                return $this->getCurrency();
                break;
            case 2:
                return $this->getBestprice();
                break;
            case 3:
                return $this->getValueofbatch();
                break;
            case 4:
                return $this->getValueofphysicalloss();
                break;
            case 5:
                return $this->getLowerprice();
                break;
            case 6:
                return $this->getLowerpricepofbestprice();
                break;
            case 7:
                return $this->getValueofqualityloss();
                break;
            case 8:
                return $this->getTotalvalueofloss();
                break;
            case 9:
                return $this->getTotallosspbyvalueminimum();
                break;
            case 10:
                return $this->getTotallosspbyvaluemaximum();
                break;
            case 11:
                return $this->getEditable();
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
        if (isset($alreadyDumpedObjects['FlLossesfinance'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['FlLossesfinance'][$this->getPrimaryKey()] = true;
        $keys = FlLossesfinancePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getLosscode(),
            $keys[1] => $this->getCurrency(),
            $keys[2] => $this->getBestprice(),
            $keys[3] => $this->getValueofbatch(),
            $keys[4] => $this->getValueofphysicalloss(),
            $keys[5] => $this->getLowerprice(),
            $keys[6] => $this->getLowerpricepofbestprice(),
            $keys[7] => $this->getValueofqualityloss(),
            $keys[8] => $this->getTotalvalueofloss(),
            $keys[9] => $this->getTotallosspbyvalueminimum(),
            $keys[10] => $this->getTotallosspbyvaluemaximum(),
            $keys[11] => $this->getEditable(),
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
        $pos = FlLossesfinancePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setLosscode($value);
                break;
            case 1:
                $this->setCurrency($value);
                break;
            case 2:
                $this->setBestprice($value);
                break;
            case 3:
                $this->setValueofbatch($value);
                break;
            case 4:
                $this->setValueofphysicalloss($value);
                break;
            case 5:
                $this->setLowerprice($value);
                break;
            case 6:
                $this->setLowerpricepofbestprice($value);
                break;
            case 7:
                $this->setValueofqualityloss($value);
                break;
            case 8:
                $this->setTotalvalueofloss($value);
                break;
            case 9:
                $this->setTotallosspbyvalueminimum($value);
                break;
            case 10:
                $this->setTotallosspbyvaluemaximum($value);
                break;
            case 11:
                $this->setEditable($value);
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
        $keys = FlLossesfinancePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setLosscode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCurrency($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setBestprice($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setValueofbatch($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setValueofphysicalloss($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLowerprice($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLowerpricepofbestprice($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setValueofqualityloss($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTotalvalueofloss($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTotallosspbyvalueminimum($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTotallosspbyvaluemaximum($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setEditable($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setTs($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FlLossesfinancePeer::DATABASE_NAME);

        if ($this->isColumnModified(FlLossesfinancePeer::LOSSCODE)) $criteria->add(FlLossesfinancePeer::LOSSCODE, $this->losscode);
        if ($this->isColumnModified(FlLossesfinancePeer::CURRENCY)) $criteria->add(FlLossesfinancePeer::CURRENCY, $this->currency);
        if ($this->isColumnModified(FlLossesfinancePeer::BESTPRICE)) $criteria->add(FlLossesfinancePeer::BESTPRICE, $this->bestprice);
        if ($this->isColumnModified(FlLossesfinancePeer::VALUEOFBATCH)) $criteria->add(FlLossesfinancePeer::VALUEOFBATCH, $this->valueofbatch);
        if ($this->isColumnModified(FlLossesfinancePeer::VALUEOFPHYSICALLOSS)) $criteria->add(FlLossesfinancePeer::VALUEOFPHYSICALLOSS, $this->valueofphysicalloss);
        if ($this->isColumnModified(FlLossesfinancePeer::LOWERPRICE)) $criteria->add(FlLossesfinancePeer::LOWERPRICE, $this->lowerprice);
        if ($this->isColumnModified(FlLossesfinancePeer::LOWERPRICEPOFBESTPRICE)) $criteria->add(FlLossesfinancePeer::LOWERPRICEPOFBESTPRICE, $this->lowerpricepofbestprice);
        if ($this->isColumnModified(FlLossesfinancePeer::VALUEOFQUALITYLOSS)) $criteria->add(FlLossesfinancePeer::VALUEOFQUALITYLOSS, $this->valueofqualityloss);
        if ($this->isColumnModified(FlLossesfinancePeer::TOTALVALUEOFLOSS)) $criteria->add(FlLossesfinancePeer::TOTALVALUEOFLOSS, $this->totalvalueofloss);
        if ($this->isColumnModified(FlLossesfinancePeer::TOTALLOSSPBYVALUEMINIMUM)) $criteria->add(FlLossesfinancePeer::TOTALLOSSPBYVALUEMINIMUM, $this->totallosspbyvalueminimum);
        if ($this->isColumnModified(FlLossesfinancePeer::TOTALLOSSPBYVALUEMAXIMUM)) $criteria->add(FlLossesfinancePeer::TOTALLOSSPBYVALUEMAXIMUM, $this->totallosspbyvaluemaximum);
        if ($this->isColumnModified(FlLossesfinancePeer::EDITABLE)) $criteria->add(FlLossesfinancePeer::EDITABLE, $this->editable);
        if ($this->isColumnModified(FlLossesfinancePeer::TS)) $criteria->add(FlLossesfinancePeer::TS, $this->ts);

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
        $criteria = new Criteria(FlLossesfinancePeer::DATABASE_NAME);
        $criteria->add(FlLossesfinancePeer::LOSSCODE, $this->losscode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getLosscode();
    }

    /**
     * Generic method to set the primary key (losscode column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setLosscode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getLosscode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of FlLossesfinance (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCurrency($this->getCurrency());
        $copyObj->setBestprice($this->getBestprice());
        $copyObj->setValueofbatch($this->getValueofbatch());
        $copyObj->setValueofphysicalloss($this->getValueofphysicalloss());
        $copyObj->setLowerprice($this->getLowerprice());
        $copyObj->setLowerpricepofbestprice($this->getLowerpricepofbestprice());
        $copyObj->setValueofqualityloss($this->getValueofqualityloss());
        $copyObj->setTotalvalueofloss($this->getTotalvalueofloss());
        $copyObj->setTotallosspbyvalueminimum($this->getTotallosspbyvalueminimum());
        $copyObj->setTotallosspbyvaluemaximum($this->getTotallosspbyvaluemaximum());
        $copyObj->setEditable($this->getEditable());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setLosscode(NULL); // this is a auto-increment column, so set to default value
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
     * @return FlLossesfinance Clone of current object.
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
     * @return FlLossesfinancePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FlLossesfinancePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->losscode = null;
        $this->currency = null;
        $this->bestprice = null;
        $this->valueofbatch = null;
        $this->valueofphysicalloss = null;
        $this->lowerprice = null;
        $this->lowerpricepofbestprice = null;
        $this->valueofqualityloss = null;
        $this->totalvalueofloss = null;
        $this->totallosspbyvalueminimum = null;
        $this->totallosspbyvaluemaximum = null;
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
        return (string) $this->exportTo(FlLossesfinancePeer::DEFAULT_STRING_FORMAT);
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
