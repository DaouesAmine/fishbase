<?php


/**
 * Base class that represents a row from the 'graphcateg' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseGraphcateg extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'GraphcategPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GraphcategPeer
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
     * The value for the africa field.
     * @var        int
     */
    protected $africa;

    /**
     * The value for the amernc field.
     * @var        int
     */
    protected $amernc;

    /**
     * The value for the amers field.
     * @var        int
     */
    protected $amers;

    /**
     * The value for the amerns field.
     * @var        int
     */
    protected $amerns;

    /**
     * The value for the asia field.
     * @var        int
     */
    protected $asia;

    /**
     * The value for the oceania field.
     * @var        int
     */
    protected $oceania;

    /**
     * The value for the antarctica field.
     * @var        int
     */
    protected $antarctica;

    /**
     * The value for the europe field.
     * @var        int
     */
    protected $europe;

    /**
     * The value for the euroaf field.
     * @var        int
     */
    protected $euroaf;

    /**
     * The value for the ussr field.
     * @var        int
     */
    protected $ussr;

    /**
     * The value for the pacific field.
     * @var        int
     */
    protected $pacific;

    /**
     * The value for the atlantic field.
     * @var        int
     */
    protected $atlantic;

    /**
     * The value for the indian field.
     * @var        int
     */
    protected $indian;

    /**
     * The value for the medit field.
     * @var        int
     */
    protected $medit;

    /**
     * The value for the salinity field.
     * @var        string
     */
    protected $salinity;

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
     * Get the [speccode] column value.
     *
     * @return int
     */
    public function getSpeccode()
    {

        return $this->speccode;
    }

    /**
     * Get the [africa] column value.
     *
     * @return int
     */
    public function getAfrica()
    {

        return $this->africa;
    }

    /**
     * Get the [amernc] column value.
     *
     * @return int
     */
    public function getAmernc()
    {

        return $this->amernc;
    }

    /**
     * Get the [amers] column value.
     *
     * @return int
     */
    public function getAmers()
    {

        return $this->amers;
    }

    /**
     * Get the [amerns] column value.
     *
     * @return int
     */
    public function getAmerns()
    {

        return $this->amerns;
    }

    /**
     * Get the [asia] column value.
     *
     * @return int
     */
    public function getAsia()
    {

        return $this->asia;
    }

    /**
     * Get the [oceania] column value.
     *
     * @return int
     */
    public function getOceania()
    {

        return $this->oceania;
    }

    /**
     * Get the [antarctica] column value.
     *
     * @return int
     */
    public function getAntarctica()
    {

        return $this->antarctica;
    }

    /**
     * Get the [europe] column value.
     *
     * @return int
     */
    public function getEurope()
    {

        return $this->europe;
    }

    /**
     * Get the [euroaf] column value.
     *
     * @return int
     */
    public function getEuroaf()
    {

        return $this->euroaf;
    }

    /**
     * Get the [ussr] column value.
     *
     * @return int
     */
    public function getUssr()
    {

        return $this->ussr;
    }

    /**
     * Get the [pacific] column value.
     *
     * @return int
     */
    public function getPacific()
    {

        return $this->pacific;
    }

    /**
     * Get the [atlantic] column value.
     *
     * @return int
     */
    public function getAtlantic()
    {

        return $this->atlantic;
    }

    /**
     * Get the [indian] column value.
     *
     * @return int
     */
    public function getIndian()
    {

        return $this->indian;
    }

    /**
     * Get the [medit] column value.
     *
     * @return int
     */
    public function getMedit()
    {

        return $this->medit;
    }

    /**
     * Get the [salinity] column value.
     *
     * @return string
     */
    public function getSalinity()
    {

        return $this->salinity;
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
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Graphcateg The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = GraphcategPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [africa] column.
     *
     * @param  int $v new value
     * @return Graphcateg The current object (for fluent API support)
     */
    public function setAfrica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->africa !== $v) {
            $this->africa = $v;
            $this->modifiedColumns[] = GraphcategPeer::AFRICA;
        }


        return $this;
    } // setAfrica()

    /**
     * Set the value of [amernc] column.
     *
     * @param  int $v new value
     * @return Graphcateg The current object (for fluent API support)
     */
    public function setAmernc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->amernc !== $v) {
            $this->amernc = $v;
            $this->modifiedColumns[] = GraphcategPeer::AMERNC;
        }


        return $this;
    } // setAmernc()

    /**
     * Set the value of [amers] column.
     *
     * @param  int $v new value
     * @return Graphcateg The current object (for fluent API support)
     */
    public function setAmers($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->amers !== $v) {
            $this->amers = $v;
            $this->modifiedColumns[] = GraphcategPeer::AMERS;
        }


        return $this;
    } // setAmers()

    /**
     * Set the value of [amerns] column.
     *
     * @param  int $v new value
     * @return Graphcateg The current object (for fluent API support)
     */
    public function setAmerns($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->amerns !== $v) {
            $this->amerns = $v;
            $this->modifiedColumns[] = GraphcategPeer::AMERNS;
        }


        return $this;
    } // setAmerns()

    /**
     * Set the value of [asia] column.
     *
     * @param  int $v new value
     * @return Graphcateg The current object (for fluent API support)
     */
    public function setAsia($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->asia !== $v) {
            $this->asia = $v;
            $this->modifiedColumns[] = GraphcategPeer::ASIA;
        }


        return $this;
    } // setAsia()

    /**
     * Set the value of [oceania] column.
     *
     * @param  int $v new value
     * @return Graphcateg The current object (for fluent API support)
     */
    public function setOceania($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->oceania !== $v) {
            $this->oceania = $v;
            $this->modifiedColumns[] = GraphcategPeer::OCEANIA;
        }


        return $this;
    } // setOceania()

    /**
     * Set the value of [antarctica] column.
     *
     * @param  int $v new value
     * @return Graphcateg The current object (for fluent API support)
     */
    public function setAntarctica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->antarctica !== $v) {
            $this->antarctica = $v;
            $this->modifiedColumns[] = GraphcategPeer::ANTARCTICA;
        }


        return $this;
    } // setAntarctica()

    /**
     * Set the value of [europe] column.
     *
     * @param  int $v new value
     * @return Graphcateg The current object (for fluent API support)
     */
    public function setEurope($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->europe !== $v) {
            $this->europe = $v;
            $this->modifiedColumns[] = GraphcategPeer::EUROPE;
        }


        return $this;
    } // setEurope()

    /**
     * Set the value of [euroaf] column.
     *
     * @param  int $v new value
     * @return Graphcateg The current object (for fluent API support)
     */
    public function setEuroaf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->euroaf !== $v) {
            $this->euroaf = $v;
            $this->modifiedColumns[] = GraphcategPeer::EUROAF;
        }


        return $this;
    } // setEuroaf()

    /**
     * Set the value of [ussr] column.
     *
     * @param  int $v new value
     * @return Graphcateg The current object (for fluent API support)
     */
    public function setUssr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ussr !== $v) {
            $this->ussr = $v;
            $this->modifiedColumns[] = GraphcategPeer::USSR;
        }


        return $this;
    } // setUssr()

    /**
     * Set the value of [pacific] column.
     *
     * @param  int $v new value
     * @return Graphcateg The current object (for fluent API support)
     */
    public function setPacific($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pacific !== $v) {
            $this->pacific = $v;
            $this->modifiedColumns[] = GraphcategPeer::PACIFIC;
        }


        return $this;
    } // setPacific()

    /**
     * Set the value of [atlantic] column.
     *
     * @param  int $v new value
     * @return Graphcateg The current object (for fluent API support)
     */
    public function setAtlantic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->atlantic !== $v) {
            $this->atlantic = $v;
            $this->modifiedColumns[] = GraphcategPeer::ATLANTIC;
        }


        return $this;
    } // setAtlantic()

    /**
     * Set the value of [indian] column.
     *
     * @param  int $v new value
     * @return Graphcateg The current object (for fluent API support)
     */
    public function setIndian($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->indian !== $v) {
            $this->indian = $v;
            $this->modifiedColumns[] = GraphcategPeer::INDIAN;
        }


        return $this;
    } // setIndian()

    /**
     * Set the value of [medit] column.
     *
     * @param  int $v new value
     * @return Graphcateg The current object (for fluent API support)
     */
    public function setMedit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->medit !== $v) {
            $this->medit = $v;
            $this->modifiedColumns[] = GraphcategPeer::MEDIT;
        }


        return $this;
    } // setMedit()

    /**
     * Set the value of [salinity] column.
     *
     * @param  string $v new value
     * @return Graphcateg The current object (for fluent API support)
     */
    public function setSalinity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->salinity !== $v) {
            $this->salinity = $v;
            $this->modifiedColumns[] = GraphcategPeer::SALINITY;
        }


        return $this;
    } // setSalinity()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Graphcateg The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = GraphcategPeer::TS;
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

            $this->speccode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->africa = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->amernc = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->amers = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->amerns = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->asia = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->oceania = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->antarctica = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->europe = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->euroaf = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->ussr = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->pacific = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->atlantic = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->indian = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->medit = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->salinity = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->ts = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 17; // 17 = GraphcategPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Graphcateg object", $e);
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
            $con = Propel::getConnection(GraphcategPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GraphcategPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GraphcategPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GraphcategQuery::create()
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
            $con = Propel::getConnection(GraphcategPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GraphcategPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GraphcategPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Speccode`';
        }
        if ($this->isColumnModified(GraphcategPeer::AFRICA)) {
            $modifiedColumns[':p' . $index++]  = '`Africa`';
        }
        if ($this->isColumnModified(GraphcategPeer::AMERNC)) {
            $modifiedColumns[':p' . $index++]  = '`AmerNC`';
        }
        if ($this->isColumnModified(GraphcategPeer::AMERS)) {
            $modifiedColumns[':p' . $index++]  = '`AmerS`';
        }
        if ($this->isColumnModified(GraphcategPeer::AMERNS)) {
            $modifiedColumns[':p' . $index++]  = '`AmerNS`';
        }
        if ($this->isColumnModified(GraphcategPeer::ASIA)) {
            $modifiedColumns[':p' . $index++]  = '`Asia`';
        }
        if ($this->isColumnModified(GraphcategPeer::OCEANIA)) {
            $modifiedColumns[':p' . $index++]  = '`Oceania`';
        }
        if ($this->isColumnModified(GraphcategPeer::ANTARCTICA)) {
            $modifiedColumns[':p' . $index++]  = '`Antarctica`';
        }
        if ($this->isColumnModified(GraphcategPeer::EUROPE)) {
            $modifiedColumns[':p' . $index++]  = '`Europe`';
        }
        if ($this->isColumnModified(GraphcategPeer::EUROAF)) {
            $modifiedColumns[':p' . $index++]  = '`EuroAf`';
        }
        if ($this->isColumnModified(GraphcategPeer::USSR)) {
            $modifiedColumns[':p' . $index++]  = '`USSR`';
        }
        if ($this->isColumnModified(GraphcategPeer::PACIFIC)) {
            $modifiedColumns[':p' . $index++]  = '`Pacific`';
        }
        if ($this->isColumnModified(GraphcategPeer::ATLANTIC)) {
            $modifiedColumns[':p' . $index++]  = '`Atlantic`';
        }
        if ($this->isColumnModified(GraphcategPeer::INDIAN)) {
            $modifiedColumns[':p' . $index++]  = '`Indian`';
        }
        if ($this->isColumnModified(GraphcategPeer::MEDIT)) {
            $modifiedColumns[':p' . $index++]  = '`Medit`';
        }
        if ($this->isColumnModified(GraphcategPeer::SALINITY)) {
            $modifiedColumns[':p' . $index++]  = '`Salinity`';
        }
        if ($this->isColumnModified(GraphcategPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `graphcateg` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`Speccode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`Africa`':
                        $stmt->bindValue($identifier, $this->africa, PDO::PARAM_INT);
                        break;
                    case '`AmerNC`':
                        $stmt->bindValue($identifier, $this->amernc, PDO::PARAM_INT);
                        break;
                    case '`AmerS`':
                        $stmt->bindValue($identifier, $this->amers, PDO::PARAM_INT);
                        break;
                    case '`AmerNS`':
                        $stmt->bindValue($identifier, $this->amerns, PDO::PARAM_INT);
                        break;
                    case '`Asia`':
                        $stmt->bindValue($identifier, $this->asia, PDO::PARAM_INT);
                        break;
                    case '`Oceania`':
                        $stmt->bindValue($identifier, $this->oceania, PDO::PARAM_INT);
                        break;
                    case '`Antarctica`':
                        $stmt->bindValue($identifier, $this->antarctica, PDO::PARAM_INT);
                        break;
                    case '`Europe`':
                        $stmt->bindValue($identifier, $this->europe, PDO::PARAM_INT);
                        break;
                    case '`EuroAf`':
                        $stmt->bindValue($identifier, $this->euroaf, PDO::PARAM_INT);
                        break;
                    case '`USSR`':
                        $stmt->bindValue($identifier, $this->ussr, PDO::PARAM_INT);
                        break;
                    case '`Pacific`':
                        $stmt->bindValue($identifier, $this->pacific, PDO::PARAM_INT);
                        break;
                    case '`Atlantic`':
                        $stmt->bindValue($identifier, $this->atlantic, PDO::PARAM_INT);
                        break;
                    case '`Indian`':
                        $stmt->bindValue($identifier, $this->indian, PDO::PARAM_INT);
                        break;
                    case '`Medit`':
                        $stmt->bindValue($identifier, $this->medit, PDO::PARAM_INT);
                        break;
                    case '`Salinity`':
                        $stmt->bindValue($identifier, $this->salinity, PDO::PARAM_STR);
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


            if (($retval = GraphcategPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GraphcategPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getAfrica();
                break;
            case 2:
                return $this->getAmernc();
                break;
            case 3:
                return $this->getAmers();
                break;
            case 4:
                return $this->getAmerns();
                break;
            case 5:
                return $this->getAsia();
                break;
            case 6:
                return $this->getOceania();
                break;
            case 7:
                return $this->getAntarctica();
                break;
            case 8:
                return $this->getEurope();
                break;
            case 9:
                return $this->getEuroaf();
                break;
            case 10:
                return $this->getUssr();
                break;
            case 11:
                return $this->getPacific();
                break;
            case 12:
                return $this->getAtlantic();
                break;
            case 13:
                return $this->getIndian();
                break;
            case 14:
                return $this->getMedit();
                break;
            case 15:
                return $this->getSalinity();
                break;
            case 16:
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
        if (isset($alreadyDumpedObjects['Graphcateg'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Graphcateg'][$this->getPrimaryKey()] = true;
        $keys = GraphcategPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getSpeccode(),
            $keys[1] => $this->getAfrica(),
            $keys[2] => $this->getAmernc(),
            $keys[3] => $this->getAmers(),
            $keys[4] => $this->getAmerns(),
            $keys[5] => $this->getAsia(),
            $keys[6] => $this->getOceania(),
            $keys[7] => $this->getAntarctica(),
            $keys[8] => $this->getEurope(),
            $keys[9] => $this->getEuroaf(),
            $keys[10] => $this->getUssr(),
            $keys[11] => $this->getPacific(),
            $keys[12] => $this->getAtlantic(),
            $keys[13] => $this->getIndian(),
            $keys[14] => $this->getMedit(),
            $keys[15] => $this->getSalinity(),
            $keys[16] => $this->getTs(),
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
        $pos = GraphcategPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setAfrica($value);
                break;
            case 2:
                $this->setAmernc($value);
                break;
            case 3:
                $this->setAmers($value);
                break;
            case 4:
                $this->setAmerns($value);
                break;
            case 5:
                $this->setAsia($value);
                break;
            case 6:
                $this->setOceania($value);
                break;
            case 7:
                $this->setAntarctica($value);
                break;
            case 8:
                $this->setEurope($value);
                break;
            case 9:
                $this->setEuroaf($value);
                break;
            case 10:
                $this->setUssr($value);
                break;
            case 11:
                $this->setPacific($value);
                break;
            case 12:
                $this->setAtlantic($value);
                break;
            case 13:
                $this->setIndian($value);
                break;
            case 14:
                $this->setMedit($value);
                break;
            case 15:
                $this->setSalinity($value);
                break;
            case 16:
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
        $keys = GraphcategPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setSpeccode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setAfrica($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAmernc($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAmers($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAmerns($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAsia($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setOceania($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setAntarctica($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setEurope($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setEuroaf($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setUssr($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setPacific($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setAtlantic($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setIndian($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setMedit($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setSalinity($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setTs($arr[$keys[16]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GraphcategPeer::DATABASE_NAME);

        if ($this->isColumnModified(GraphcategPeer::SPECCODE)) $criteria->add(GraphcategPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(GraphcategPeer::AFRICA)) $criteria->add(GraphcategPeer::AFRICA, $this->africa);
        if ($this->isColumnModified(GraphcategPeer::AMERNC)) $criteria->add(GraphcategPeer::AMERNC, $this->amernc);
        if ($this->isColumnModified(GraphcategPeer::AMERS)) $criteria->add(GraphcategPeer::AMERS, $this->amers);
        if ($this->isColumnModified(GraphcategPeer::AMERNS)) $criteria->add(GraphcategPeer::AMERNS, $this->amerns);
        if ($this->isColumnModified(GraphcategPeer::ASIA)) $criteria->add(GraphcategPeer::ASIA, $this->asia);
        if ($this->isColumnModified(GraphcategPeer::OCEANIA)) $criteria->add(GraphcategPeer::OCEANIA, $this->oceania);
        if ($this->isColumnModified(GraphcategPeer::ANTARCTICA)) $criteria->add(GraphcategPeer::ANTARCTICA, $this->antarctica);
        if ($this->isColumnModified(GraphcategPeer::EUROPE)) $criteria->add(GraphcategPeer::EUROPE, $this->europe);
        if ($this->isColumnModified(GraphcategPeer::EUROAF)) $criteria->add(GraphcategPeer::EUROAF, $this->euroaf);
        if ($this->isColumnModified(GraphcategPeer::USSR)) $criteria->add(GraphcategPeer::USSR, $this->ussr);
        if ($this->isColumnModified(GraphcategPeer::PACIFIC)) $criteria->add(GraphcategPeer::PACIFIC, $this->pacific);
        if ($this->isColumnModified(GraphcategPeer::ATLANTIC)) $criteria->add(GraphcategPeer::ATLANTIC, $this->atlantic);
        if ($this->isColumnModified(GraphcategPeer::INDIAN)) $criteria->add(GraphcategPeer::INDIAN, $this->indian);
        if ($this->isColumnModified(GraphcategPeer::MEDIT)) $criteria->add(GraphcategPeer::MEDIT, $this->medit);
        if ($this->isColumnModified(GraphcategPeer::SALINITY)) $criteria->add(GraphcategPeer::SALINITY, $this->salinity);
        if ($this->isColumnModified(GraphcategPeer::TS)) $criteria->add(GraphcategPeer::TS, $this->ts);

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
        $criteria = new Criteria(GraphcategPeer::DATABASE_NAME);
        $criteria->add(GraphcategPeer::SPECCODE, $this->speccode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getSpeccode();
    }

    /**
     * Generic method to set the primary key (speccode column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setSpeccode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getSpeccode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Graphcateg (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setAfrica($this->getAfrica());
        $copyObj->setAmernc($this->getAmernc());
        $copyObj->setAmers($this->getAmers());
        $copyObj->setAmerns($this->getAmerns());
        $copyObj->setAsia($this->getAsia());
        $copyObj->setOceania($this->getOceania());
        $copyObj->setAntarctica($this->getAntarctica());
        $copyObj->setEurope($this->getEurope());
        $copyObj->setEuroaf($this->getEuroaf());
        $copyObj->setUssr($this->getUssr());
        $copyObj->setPacific($this->getPacific());
        $copyObj->setAtlantic($this->getAtlantic());
        $copyObj->setIndian($this->getIndian());
        $copyObj->setMedit($this->getMedit());
        $copyObj->setSalinity($this->getSalinity());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setSpeccode(NULL); // this is a auto-increment column, so set to default value
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
     * @return Graphcateg Clone of current object.
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
     * @return GraphcategPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GraphcategPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->speccode = null;
        $this->africa = null;
        $this->amernc = null;
        $this->amers = null;
        $this->amerns = null;
        $this->asia = null;
        $this->oceania = null;
        $this->antarctica = null;
        $this->europe = null;
        $this->euroaf = null;
        $this->ussr = null;
        $this->pacific = null;
        $this->atlantic = null;
        $this->indian = null;
        $this->medit = null;
        $this->salinity = null;
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
        return (string) $this->exportTo(GraphcategPeer::DEFAULT_STRING_FORMAT);
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
