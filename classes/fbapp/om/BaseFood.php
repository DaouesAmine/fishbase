<?php


/**
 * Base class that represents a row from the 'food' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFood extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FoodPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FoodPeer
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
     * The value for the foodi field.
     * @var        string
     */
    protected $foodi;

    /**
     * The value for the foodii field.
     * @var        string
     */
    protected $foodii;

    /**
     * The value for the foodiii field.
     * @var        string
     */
    protected $foodiii;

    /**
     * The value for the genfood field.
     * @var        string
     */
    protected $genfood;

    /**
     * The value for the specfood field.
     * @var        string
     */
    protected $specfood;

    /**
     * The value for the comname field.
     * @var        string
     */
    protected $comname;

    /**
     * The value for the stage field.
     * @var        string
     */
    protected $stage;

    /**
     * The value for the rank field.
     * @var        double
     */
    protected $rank;

    /**
     * The value for the foodirank field.
     * @var        double
     */
    protected $foodirank;

    /**
     * The value for the foodiirank field.
     * @var        double
     */
    protected $foodiirank;

    /**
     * The value for the foodiiirank field.
     * @var        double
     */
    protected $foodiiirank;

    /**
     * The value for the troph field.
     * @var        double
     */
    protected $troph;

    /**
     * The value for the trophse field.
     * @var        double
     */
    protected $trophse;

    /**
     * The value for the refno field.
     * @var        int
     */
    protected $refno;

    /**
     * The value for the remark field.
     * @var        string
     */
    protected $remark;

    /**
     * The value for the maxlength field.
     * @var        double
     */
    protected $maxlength;

    /**
     * The value for the minlength field.
     * @var        double
     */
    protected $minlength;

    /**
     * The value for the foodflag field.
     * @var        int
     */
    protected $foodflag;

    /**
     * The value for the predflag field.
     * @var        int
     */
    protected $predflag;

    /**
     * The value for the newtroph field.
     * @var        int
     */
    protected $newtroph;

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
     * Get the [foodi] column value.
     *
     * @return string
     */
    public function getFoodi()
    {

        return $this->foodi;
    }

    /**
     * Get the [foodii] column value.
     *
     * @return string
     */
    public function getFoodii()
    {

        return $this->foodii;
    }

    /**
     * Get the [foodiii] column value.
     *
     * @return string
     */
    public function getFoodiii()
    {

        return $this->foodiii;
    }

    /**
     * Get the [genfood] column value.
     *
     * @return string
     */
    public function getGenfood()
    {

        return $this->genfood;
    }

    /**
     * Get the [specfood] column value.
     *
     * @return string
     */
    public function getSpecfood()
    {

        return $this->specfood;
    }

    /**
     * Get the [comname] column value.
     *
     * @return string
     */
    public function getComname()
    {

        return $this->comname;
    }

    /**
     * Get the [stage] column value.
     *
     * @return string
     */
    public function getStage()
    {

        return $this->stage;
    }

    /**
     * Get the [rank] column value.
     *
     * @return double
     */
    public function getRank()
    {

        return $this->rank;
    }

    /**
     * Get the [foodirank] column value.
     *
     * @return double
     */
    public function getFoodirank()
    {

        return $this->foodirank;
    }

    /**
     * Get the [foodiirank] column value.
     *
     * @return double
     */
    public function getFoodiirank()
    {

        return $this->foodiirank;
    }

    /**
     * Get the [foodiiirank] column value.
     *
     * @return double
     */
    public function getFoodiiirank()
    {

        return $this->foodiiirank;
    }

    /**
     * Get the [troph] column value.
     *
     * @return double
     */
    public function getTroph()
    {

        return $this->troph;
    }

    /**
     * Get the [trophse] column value.
     *
     * @return double
     */
    public function getTrophse()
    {

        return $this->trophse;
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
     * Get the [remark] column value.
     *
     * @return string
     */
    public function getRemark()
    {

        return $this->remark;
    }

    /**
     * Get the [maxlength] column value.
     *
     * @return double
     */
    public function getMaxlength()
    {

        return $this->maxlength;
    }

    /**
     * Get the [minlength] column value.
     *
     * @return double
     */
    public function getMinlength()
    {

        return $this->minlength;
    }

    /**
     * Get the [foodflag] column value.
     *
     * @return int
     */
    public function getFoodflag()
    {

        return $this->foodflag;
    }

    /**
     * Get the [predflag] column value.
     *
     * @return int
     */
    public function getPredflag()
    {

        return $this->predflag;
    }

    /**
     * Get the [newtroph] column value.
     *
     * @return int
     */
    public function getNewtroph()
    {

        return $this->newtroph;
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
     * @return Food The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = FoodPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [foodi] column.
     *
     * @param  string $v new value
     * @return Food The current object (for fluent API support)
     */
    public function setFoodi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->foodi !== $v) {
            $this->foodi = $v;
            $this->modifiedColumns[] = FoodPeer::FOODI;
        }


        return $this;
    } // setFoodi()

    /**
     * Set the value of [foodii] column.
     *
     * @param  string $v new value
     * @return Food The current object (for fluent API support)
     */
    public function setFoodii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->foodii !== $v) {
            $this->foodii = $v;
            $this->modifiedColumns[] = FoodPeer::FOODII;
        }


        return $this;
    } // setFoodii()

    /**
     * Set the value of [foodiii] column.
     *
     * @param  string $v new value
     * @return Food The current object (for fluent API support)
     */
    public function setFoodiii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->foodiii !== $v) {
            $this->foodiii = $v;
            $this->modifiedColumns[] = FoodPeer::FOODIII;
        }


        return $this;
    } // setFoodiii()

    /**
     * Set the value of [genfood] column.
     *
     * @param  string $v new value
     * @return Food The current object (for fluent API support)
     */
    public function setGenfood($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genfood !== $v) {
            $this->genfood = $v;
            $this->modifiedColumns[] = FoodPeer::GENFOOD;
        }


        return $this;
    } // setGenfood()

    /**
     * Set the value of [specfood] column.
     *
     * @param  string $v new value
     * @return Food The current object (for fluent API support)
     */
    public function setSpecfood($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->specfood !== $v) {
            $this->specfood = $v;
            $this->modifiedColumns[] = FoodPeer::SPECFOOD;
        }


        return $this;
    } // setSpecfood()

    /**
     * Set the value of [comname] column.
     *
     * @param  string $v new value
     * @return Food The current object (for fluent API support)
     */
    public function setComname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comname !== $v) {
            $this->comname = $v;
            $this->modifiedColumns[] = FoodPeer::COMNAME;
        }


        return $this;
    } // setComname()

    /**
     * Set the value of [stage] column.
     *
     * @param  string $v new value
     * @return Food The current object (for fluent API support)
     */
    public function setStage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->stage !== $v) {
            $this->stage = $v;
            $this->modifiedColumns[] = FoodPeer::STAGE;
        }


        return $this;
    } // setStage()

    /**
     * Set the value of [rank] column.
     *
     * @param  double $v new value
     * @return Food The current object (for fluent API support)
     */
    public function setRank($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->rank !== $v) {
            $this->rank = $v;
            $this->modifiedColumns[] = FoodPeer::RANK;
        }


        return $this;
    } // setRank()

    /**
     * Set the value of [foodirank] column.
     *
     * @param  double $v new value
     * @return Food The current object (for fluent API support)
     */
    public function setFoodirank($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->foodirank !== $v) {
            $this->foodirank = $v;
            $this->modifiedColumns[] = FoodPeer::FOODIRANK;
        }


        return $this;
    } // setFoodirank()

    /**
     * Set the value of [foodiirank] column.
     *
     * @param  double $v new value
     * @return Food The current object (for fluent API support)
     */
    public function setFoodiirank($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->foodiirank !== $v) {
            $this->foodiirank = $v;
            $this->modifiedColumns[] = FoodPeer::FOODIIRANK;
        }


        return $this;
    } // setFoodiirank()

    /**
     * Set the value of [foodiiirank] column.
     *
     * @param  double $v new value
     * @return Food The current object (for fluent API support)
     */
    public function setFoodiiirank($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->foodiiirank !== $v) {
            $this->foodiiirank = $v;
            $this->modifiedColumns[] = FoodPeer::FOODIIIRANK;
        }


        return $this;
    } // setFoodiiirank()

    /**
     * Set the value of [troph] column.
     *
     * @param  double $v new value
     * @return Food The current object (for fluent API support)
     */
    public function setTroph($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->troph !== $v) {
            $this->troph = $v;
            $this->modifiedColumns[] = FoodPeer::TROPH;
        }


        return $this;
    } // setTroph()

    /**
     * Set the value of [trophse] column.
     *
     * @param  double $v new value
     * @return Food The current object (for fluent API support)
     */
    public function setTrophse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->trophse !== $v) {
            $this->trophse = $v;
            $this->modifiedColumns[] = FoodPeer::TROPHSE;
        }


        return $this;
    } // setTrophse()

    /**
     * Set the value of [refno] column.
     *
     * @param  int $v new value
     * @return Food The current object (for fluent API support)
     */
    public function setRefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->refno !== $v) {
            $this->refno = $v;
            $this->modifiedColumns[] = FoodPeer::REFNO;
        }


        return $this;
    } // setRefno()

    /**
     * Set the value of [remark] column.
     *
     * @param  string $v new value
     * @return Food The current object (for fluent API support)
     */
    public function setRemark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remark !== $v) {
            $this->remark = $v;
            $this->modifiedColumns[] = FoodPeer::REMARK;
        }


        return $this;
    } // setRemark()

    /**
     * Set the value of [maxlength] column.
     *
     * @param  double $v new value
     * @return Food The current object (for fluent API support)
     */
    public function setMaxlength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->maxlength !== $v) {
            $this->maxlength = $v;
            $this->modifiedColumns[] = FoodPeer::MAXLENGTH;
        }


        return $this;
    } // setMaxlength()

    /**
     * Set the value of [minlength] column.
     *
     * @param  double $v new value
     * @return Food The current object (for fluent API support)
     */
    public function setMinlength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->minlength !== $v) {
            $this->minlength = $v;
            $this->modifiedColumns[] = FoodPeer::MINLENGTH;
        }


        return $this;
    } // setMinlength()

    /**
     * Set the value of [foodflag] column.
     *
     * @param  int $v new value
     * @return Food The current object (for fluent API support)
     */
    public function setFoodflag($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->foodflag !== $v) {
            $this->foodflag = $v;
            $this->modifiedColumns[] = FoodPeer::FOODFLAG;
        }


        return $this;
    } // setFoodflag()

    /**
     * Set the value of [predflag] column.
     *
     * @param  int $v new value
     * @return Food The current object (for fluent API support)
     */
    public function setPredflag($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->predflag !== $v) {
            $this->predflag = $v;
            $this->modifiedColumns[] = FoodPeer::PREDFLAG;
        }


        return $this;
    } // setPredflag()

    /**
     * Set the value of [newtroph] column.
     *
     * @param  int $v new value
     * @return Food The current object (for fluent API support)
     */
    public function setNewtroph($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->newtroph !== $v) {
            $this->newtroph = $v;
            $this->modifiedColumns[] = FoodPeer::NEWTROPH;
        }


        return $this;
    } // setNewtroph()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Food The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = FoodPeer::TS;
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
            $this->foodi = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->foodii = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->foodiii = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->genfood = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->specfood = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->comname = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->stage = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->rank = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->foodirank = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->foodiirank = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->foodiiirank = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->troph = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->trophse = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->refno = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->remark = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->maxlength = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->minlength = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->foodflag = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->predflag = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->newtroph = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->ts = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 22; // 22 = FoodPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Food object", $e);
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
            $con = Propel::getConnection(FoodPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FoodPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(FoodPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FoodQuery::create()
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
            $con = Propel::getConnection(FoodPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                FoodPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = FoodPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . FoodPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(FoodPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`AutoCtr`';
        }
        if ($this->isColumnModified(FoodPeer::FOODI)) {
            $modifiedColumns[':p' . $index++]  = '`FOODI`';
        }
        if ($this->isColumnModified(FoodPeer::FOODII)) {
            $modifiedColumns[':p' . $index++]  = '`FOODII`';
        }
        if ($this->isColumnModified(FoodPeer::FOODIII)) {
            $modifiedColumns[':p' . $index++]  = '`FOODIII`';
        }
        if ($this->isColumnModified(FoodPeer::GENFOOD)) {
            $modifiedColumns[':p' . $index++]  = '`GenFood`';
        }
        if ($this->isColumnModified(FoodPeer::SPECFOOD)) {
            $modifiedColumns[':p' . $index++]  = '`SpecFood`';
        }
        if ($this->isColumnModified(FoodPeer::COMNAME)) {
            $modifiedColumns[':p' . $index++]  = '`ComName`';
        }
        if ($this->isColumnModified(FoodPeer::STAGE)) {
            $modifiedColumns[':p' . $index++]  = '`Stage`';
        }
        if ($this->isColumnModified(FoodPeer::RANK)) {
            $modifiedColumns[':p' . $index++]  = '`Rank`';
        }
        if ($this->isColumnModified(FoodPeer::FOODIRANK)) {
            $modifiedColumns[':p' . $index++]  = '`FoodIRank`';
        }
        if ($this->isColumnModified(FoodPeer::FOODIIRANK)) {
            $modifiedColumns[':p' . $index++]  = '`FoodIIRank`';
        }
        if ($this->isColumnModified(FoodPeer::FOODIIIRANK)) {
            $modifiedColumns[':p' . $index++]  = '`FoodIIIRank`';
        }
        if ($this->isColumnModified(FoodPeer::TROPH)) {
            $modifiedColumns[':p' . $index++]  = '`Troph`';
        }
        if ($this->isColumnModified(FoodPeer::TROPHSE)) {
            $modifiedColumns[':p' . $index++]  = '`TrophSe`';
        }
        if ($this->isColumnModified(FoodPeer::REFNO)) {
            $modifiedColumns[':p' . $index++]  = '`Refno`';
        }
        if ($this->isColumnModified(FoodPeer::REMARK)) {
            $modifiedColumns[':p' . $index++]  = '`Remark`';
        }
        if ($this->isColumnModified(FoodPeer::MAXLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`MaxLength`';
        }
        if ($this->isColumnModified(FoodPeer::MINLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`MinLength`';
        }
        if ($this->isColumnModified(FoodPeer::FOODFLAG)) {
            $modifiedColumns[':p' . $index++]  = '`FoodFlag`';
        }
        if ($this->isColumnModified(FoodPeer::PREDFLAG)) {
            $modifiedColumns[':p' . $index++]  = '`PredFlag`';
        }
        if ($this->isColumnModified(FoodPeer::NEWTROPH)) {
            $modifiedColumns[':p' . $index++]  = '`NewTroph`';
        }
        if ($this->isColumnModified(FoodPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `food` (%s) VALUES (%s)',
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
                    case '`FOODI`':
                        $stmt->bindValue($identifier, $this->foodi, PDO::PARAM_STR);
                        break;
                    case '`FOODII`':
                        $stmt->bindValue($identifier, $this->foodii, PDO::PARAM_STR);
                        break;
                    case '`FOODIII`':
                        $stmt->bindValue($identifier, $this->foodiii, PDO::PARAM_STR);
                        break;
                    case '`GenFood`':
                        $stmt->bindValue($identifier, $this->genfood, PDO::PARAM_STR);
                        break;
                    case '`SpecFood`':
                        $stmt->bindValue($identifier, $this->specfood, PDO::PARAM_STR);
                        break;
                    case '`ComName`':
                        $stmt->bindValue($identifier, $this->comname, PDO::PARAM_STR);
                        break;
                    case '`Stage`':
                        $stmt->bindValue($identifier, $this->stage, PDO::PARAM_STR);
                        break;
                    case '`Rank`':
                        $stmt->bindValue($identifier, $this->rank, PDO::PARAM_STR);
                        break;
                    case '`FoodIRank`':
                        $stmt->bindValue($identifier, $this->foodirank, PDO::PARAM_STR);
                        break;
                    case '`FoodIIRank`':
                        $stmt->bindValue($identifier, $this->foodiirank, PDO::PARAM_STR);
                        break;
                    case '`FoodIIIRank`':
                        $stmt->bindValue($identifier, $this->foodiiirank, PDO::PARAM_STR);
                        break;
                    case '`Troph`':
                        $stmt->bindValue($identifier, $this->troph, PDO::PARAM_STR);
                        break;
                    case '`TrophSe`':
                        $stmt->bindValue($identifier, $this->trophse, PDO::PARAM_STR);
                        break;
                    case '`Refno`':
                        $stmt->bindValue($identifier, $this->refno, PDO::PARAM_INT);
                        break;
                    case '`Remark`':
                        $stmt->bindValue($identifier, $this->remark, PDO::PARAM_STR);
                        break;
                    case '`MaxLength`':
                        $stmt->bindValue($identifier, $this->maxlength, PDO::PARAM_STR);
                        break;
                    case '`MinLength`':
                        $stmt->bindValue($identifier, $this->minlength, PDO::PARAM_STR);
                        break;
                    case '`FoodFlag`':
                        $stmt->bindValue($identifier, $this->foodflag, PDO::PARAM_INT);
                        break;
                    case '`PredFlag`':
                        $stmt->bindValue($identifier, $this->predflag, PDO::PARAM_INT);
                        break;
                    case '`NewTroph`':
                        $stmt->bindValue($identifier, $this->newtroph, PDO::PARAM_INT);
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


            if (($retval = FoodPeer::doValidate($this, $columns)) !== true) {
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
        $pos = FoodPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getFoodi();
                break;
            case 2:
                return $this->getFoodii();
                break;
            case 3:
                return $this->getFoodiii();
                break;
            case 4:
                return $this->getGenfood();
                break;
            case 5:
                return $this->getSpecfood();
                break;
            case 6:
                return $this->getComname();
                break;
            case 7:
                return $this->getStage();
                break;
            case 8:
                return $this->getRank();
                break;
            case 9:
                return $this->getFoodirank();
                break;
            case 10:
                return $this->getFoodiirank();
                break;
            case 11:
                return $this->getFoodiiirank();
                break;
            case 12:
                return $this->getTroph();
                break;
            case 13:
                return $this->getTrophse();
                break;
            case 14:
                return $this->getRefno();
                break;
            case 15:
                return $this->getRemark();
                break;
            case 16:
                return $this->getMaxlength();
                break;
            case 17:
                return $this->getMinlength();
                break;
            case 18:
                return $this->getFoodflag();
                break;
            case 19:
                return $this->getPredflag();
                break;
            case 20:
                return $this->getNewtroph();
                break;
            case 21:
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
        if (isset($alreadyDumpedObjects['Food'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Food'][$this->getPrimaryKey()] = true;
        $keys = FoodPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getFoodi(),
            $keys[2] => $this->getFoodii(),
            $keys[3] => $this->getFoodiii(),
            $keys[4] => $this->getGenfood(),
            $keys[5] => $this->getSpecfood(),
            $keys[6] => $this->getComname(),
            $keys[7] => $this->getStage(),
            $keys[8] => $this->getRank(),
            $keys[9] => $this->getFoodirank(),
            $keys[10] => $this->getFoodiirank(),
            $keys[11] => $this->getFoodiiirank(),
            $keys[12] => $this->getTroph(),
            $keys[13] => $this->getTrophse(),
            $keys[14] => $this->getRefno(),
            $keys[15] => $this->getRemark(),
            $keys[16] => $this->getMaxlength(),
            $keys[17] => $this->getMinlength(),
            $keys[18] => $this->getFoodflag(),
            $keys[19] => $this->getPredflag(),
            $keys[20] => $this->getNewtroph(),
            $keys[21] => $this->getTs(),
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
        $pos = FoodPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setFoodi($value);
                break;
            case 2:
                $this->setFoodii($value);
                break;
            case 3:
                $this->setFoodiii($value);
                break;
            case 4:
                $this->setGenfood($value);
                break;
            case 5:
                $this->setSpecfood($value);
                break;
            case 6:
                $this->setComname($value);
                break;
            case 7:
                $this->setStage($value);
                break;
            case 8:
                $this->setRank($value);
                break;
            case 9:
                $this->setFoodirank($value);
                break;
            case 10:
                $this->setFoodiirank($value);
                break;
            case 11:
                $this->setFoodiiirank($value);
                break;
            case 12:
                $this->setTroph($value);
                break;
            case 13:
                $this->setTrophse($value);
                break;
            case 14:
                $this->setRefno($value);
                break;
            case 15:
                $this->setRemark($value);
                break;
            case 16:
                $this->setMaxlength($value);
                break;
            case 17:
                $this->setMinlength($value);
                break;
            case 18:
                $this->setFoodflag($value);
                break;
            case 19:
                $this->setPredflag($value);
                break;
            case 20:
                $this->setNewtroph($value);
                break;
            case 21:
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
        $keys = FoodPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFoodi($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setFoodii($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setFoodiii($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setGenfood($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSpecfood($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setComname($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setStage($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setRank($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setFoodirank($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setFoodiirank($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setFoodiiirank($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setTroph($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setTrophse($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setRefno($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setRemark($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setMaxlength($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setMinlength($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setFoodflag($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setPredflag($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setNewtroph($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setTs($arr[$keys[21]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FoodPeer::DATABASE_NAME);

        if ($this->isColumnModified(FoodPeer::AUTOCTR)) $criteria->add(FoodPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(FoodPeer::FOODI)) $criteria->add(FoodPeer::FOODI, $this->foodi);
        if ($this->isColumnModified(FoodPeer::FOODII)) $criteria->add(FoodPeer::FOODII, $this->foodii);
        if ($this->isColumnModified(FoodPeer::FOODIII)) $criteria->add(FoodPeer::FOODIII, $this->foodiii);
        if ($this->isColumnModified(FoodPeer::GENFOOD)) $criteria->add(FoodPeer::GENFOOD, $this->genfood);
        if ($this->isColumnModified(FoodPeer::SPECFOOD)) $criteria->add(FoodPeer::SPECFOOD, $this->specfood);
        if ($this->isColumnModified(FoodPeer::COMNAME)) $criteria->add(FoodPeer::COMNAME, $this->comname);
        if ($this->isColumnModified(FoodPeer::STAGE)) $criteria->add(FoodPeer::STAGE, $this->stage);
        if ($this->isColumnModified(FoodPeer::RANK)) $criteria->add(FoodPeer::RANK, $this->rank);
        if ($this->isColumnModified(FoodPeer::FOODIRANK)) $criteria->add(FoodPeer::FOODIRANK, $this->foodirank);
        if ($this->isColumnModified(FoodPeer::FOODIIRANK)) $criteria->add(FoodPeer::FOODIIRANK, $this->foodiirank);
        if ($this->isColumnModified(FoodPeer::FOODIIIRANK)) $criteria->add(FoodPeer::FOODIIIRANK, $this->foodiiirank);
        if ($this->isColumnModified(FoodPeer::TROPH)) $criteria->add(FoodPeer::TROPH, $this->troph);
        if ($this->isColumnModified(FoodPeer::TROPHSE)) $criteria->add(FoodPeer::TROPHSE, $this->trophse);
        if ($this->isColumnModified(FoodPeer::REFNO)) $criteria->add(FoodPeer::REFNO, $this->refno);
        if ($this->isColumnModified(FoodPeer::REMARK)) $criteria->add(FoodPeer::REMARK, $this->remark);
        if ($this->isColumnModified(FoodPeer::MAXLENGTH)) $criteria->add(FoodPeer::MAXLENGTH, $this->maxlength);
        if ($this->isColumnModified(FoodPeer::MINLENGTH)) $criteria->add(FoodPeer::MINLENGTH, $this->minlength);
        if ($this->isColumnModified(FoodPeer::FOODFLAG)) $criteria->add(FoodPeer::FOODFLAG, $this->foodflag);
        if ($this->isColumnModified(FoodPeer::PREDFLAG)) $criteria->add(FoodPeer::PREDFLAG, $this->predflag);
        if ($this->isColumnModified(FoodPeer::NEWTROPH)) $criteria->add(FoodPeer::NEWTROPH, $this->newtroph);
        if ($this->isColumnModified(FoodPeer::TS)) $criteria->add(FoodPeer::TS, $this->ts);

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
        $criteria = new Criteria(FoodPeer::DATABASE_NAME);
        $criteria->add(FoodPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of Food (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFoodi($this->getFoodi());
        $copyObj->setFoodii($this->getFoodii());
        $copyObj->setFoodiii($this->getFoodiii());
        $copyObj->setGenfood($this->getGenfood());
        $copyObj->setSpecfood($this->getSpecfood());
        $copyObj->setComname($this->getComname());
        $copyObj->setStage($this->getStage());
        $copyObj->setRank($this->getRank());
        $copyObj->setFoodirank($this->getFoodirank());
        $copyObj->setFoodiirank($this->getFoodiirank());
        $copyObj->setFoodiiirank($this->getFoodiiirank());
        $copyObj->setTroph($this->getTroph());
        $copyObj->setTrophse($this->getTrophse());
        $copyObj->setRefno($this->getRefno());
        $copyObj->setRemark($this->getRemark());
        $copyObj->setMaxlength($this->getMaxlength());
        $copyObj->setMinlength($this->getMinlength());
        $copyObj->setFoodflag($this->getFoodflag());
        $copyObj->setPredflag($this->getPredflag());
        $copyObj->setNewtroph($this->getNewtroph());
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
     * @return Food Clone of current object.
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
     * @return FoodPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FoodPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->foodi = null;
        $this->foodii = null;
        $this->foodiii = null;
        $this->genfood = null;
        $this->specfood = null;
        $this->comname = null;
        $this->stage = null;
        $this->rank = null;
        $this->foodirank = null;
        $this->foodiirank = null;
        $this->foodiiirank = null;
        $this->troph = null;
        $this->trophse = null;
        $this->refno = null;
        $this->remark = null;
        $this->maxlength = null;
        $this->minlength = null;
        $this->foodflag = null;
        $this->predflag = null;
        $this->newtroph = null;
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
        return (string) $this->exportTo(FoodPeer::DEFAULT_STRING_FORMAT);
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
