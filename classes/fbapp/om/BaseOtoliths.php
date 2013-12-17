<?php


/**
 * Base class that represents a row from the 'otoliths' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseOtoliths extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OtolithsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OtolithsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the otolithid field.
     * @var        int
     */
    protected $otolithid;

    /**
     * The value for the otolithsrefno field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $otolithsrefno;

    /**
     * The value for the genusused field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $genusused;

    /**
     * The value for the speciesused field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $speciesused;

    /**
     * The value for the syncode field.
     * @var        int
     */
    protected $syncode;

    /**
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the syncodevalid field.
     * @var        int
     */
    protected $syncodevalid;

    /**
     * The value for the lengthfish field.
     * @var        double
     */
    protected $lengthfish;

    /**
     * The value for the locality field.
     * @var        string
     */
    protected $locality;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the e_code field.
     * @var        int
     */
    protected $e_code;

    /**
     * The value for the plate field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $plate;

    /**
     * The value for the figure field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $figure;

    /**
     * The value for the position field.
     * @var        string
     */
    protected $position;

    /**
     * The value for the face field.
     * @var        string
     */
    protected $face;

    /**
     * The value for the type field.
     * @var        string
     */
    protected $type;

    /**
     * The value for the lengthotolith field.
     * @var        double
     */
    protected $lengthotolith;

    /**
     * The value for the heightotolith field.
     * @var        double
     */
    protected $heightotolith;

    /**
     * The value for the figfilename field.
     * @var        string
     */
    protected $figfilename;

    /**
     * The value for the authname field.
     * @var        string
     */
    protected $authname;

    /**
     * The value for the fkpoisson field.
     * @var        double
     */
    protected $fkpoisson;

    /**
     * The value for the fktaxon field.
     * @var        int
     */
    protected $fktaxon;

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
        $this->otolithsrefno = 0;
        $this->genusused = '';
        $this->speciesused = '';
        $this->plate = '';
        $this->figure = '';
    }

    /**
     * Initializes internal state of BaseOtoliths object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [otolithid] column value.
     *
     * @return int
     */
    public function getOtolithid()
    {

        return $this->otolithid;
    }

    /**
     * Get the [otolithsrefno] column value.
     *
     * @return int
     */
    public function getOtolithsrefno()
    {

        return $this->otolithsrefno;
    }

    /**
     * Get the [genusused] column value.
     *
     * @return string
     */
    public function getGenusused()
    {

        return $this->genusused;
    }

    /**
     * Get the [speciesused] column value.
     *
     * @return string
     */
    public function getSpeciesused()
    {

        return $this->speciesused;
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
     * Get the [speccode] column value.
     *
     * @return int
     */
    public function getSpeccode()
    {

        return $this->speccode;
    }

    /**
     * Get the [syncodevalid] column value.
     *
     * @return int
     */
    public function getSyncodevalid()
    {

        return $this->syncodevalid;
    }

    /**
     * Get the [lengthfish] column value.
     *
     * @return double
     */
    public function getLengthfish()
    {

        return $this->lengthfish;
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
     * Get the [c_code] column value.
     *
     * @return string
     */
    public function getCCode()
    {

        return $this->c_code;
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
     * Get the [plate] column value.
     *
     * @return string
     */
    public function getPlate()
    {

        return $this->plate;
    }

    /**
     * Get the [figure] column value.
     *
     * @return string
     */
    public function getFigure()
    {

        return $this->figure;
    }

    /**
     * Get the [position] column value.
     *
     * @return string
     */
    public function getPosition()
    {

        return $this->position;
    }

    /**
     * Get the [face] column value.
     *
     * @return string
     */
    public function getFace()
    {

        return $this->face;
    }

    /**
     * Get the [type] column value.
     *
     * @return string
     */
    public function getType()
    {

        return $this->type;
    }

    /**
     * Get the [lengthotolith] column value.
     *
     * @return double
     */
    public function getLengthotolith()
    {

        return $this->lengthotolith;
    }

    /**
     * Get the [heightotolith] column value.
     *
     * @return double
     */
    public function getHeightotolith()
    {

        return $this->heightotolith;
    }

    /**
     * Get the [figfilename] column value.
     *
     * @return string
     */
    public function getFigfilename()
    {

        return $this->figfilename;
    }

    /**
     * Get the [authname] column value.
     *
     * @return string
     */
    public function getAuthname()
    {

        return $this->authname;
    }

    /**
     * Get the [fkpoisson] column value.
     *
     * @return double
     */
    public function getFkpoisson()
    {

        return $this->fkpoisson;
    }

    /**
     * Get the [fktaxon] column value.
     *
     * @return int
     */
    public function getFktaxon()
    {

        return $this->fktaxon;
    }

    /**
     * Set the value of [otolithid] column.
     *
     * @param  int $v new value
     * @return Otoliths The current object (for fluent API support)
     */
    public function setOtolithid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->otolithid !== $v) {
            $this->otolithid = $v;
            $this->modifiedColumns[] = OtolithsPeer::OTOLITHID;
        }


        return $this;
    } // setOtolithid()

    /**
     * Set the value of [otolithsrefno] column.
     *
     * @param  int $v new value
     * @return Otoliths The current object (for fluent API support)
     */
    public function setOtolithsrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->otolithsrefno !== $v) {
            $this->otolithsrefno = $v;
            $this->modifiedColumns[] = OtolithsPeer::OTOLITHSREFNO;
        }


        return $this;
    } // setOtolithsrefno()

    /**
     * Set the value of [genusused] column.
     *
     * @param  string $v new value
     * @return Otoliths The current object (for fluent API support)
     */
    public function setGenusused($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genusused !== $v) {
            $this->genusused = $v;
            $this->modifiedColumns[] = OtolithsPeer::GENUSUSED;
        }


        return $this;
    } // setGenusused()

    /**
     * Set the value of [speciesused] column.
     *
     * @param  string $v new value
     * @return Otoliths The current object (for fluent API support)
     */
    public function setSpeciesused($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->speciesused !== $v) {
            $this->speciesused = $v;
            $this->modifiedColumns[] = OtolithsPeer::SPECIESUSED;
        }


        return $this;
    } // setSpeciesused()

    /**
     * Set the value of [syncode] column.
     *
     * @param  int $v new value
     * @return Otoliths The current object (for fluent API support)
     */
    public function setSyncode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->syncode !== $v) {
            $this->syncode = $v;
            $this->modifiedColumns[] = OtolithsPeer::SYNCODE;
        }


        return $this;
    } // setSyncode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Otoliths The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = OtolithsPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [syncodevalid] column.
     *
     * @param  int $v new value
     * @return Otoliths The current object (for fluent API support)
     */
    public function setSyncodevalid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->syncodevalid !== $v) {
            $this->syncodevalid = $v;
            $this->modifiedColumns[] = OtolithsPeer::SYNCODEVALID;
        }


        return $this;
    } // setSyncodevalid()

    /**
     * Set the value of [lengthfish] column.
     *
     * @param  double $v new value
     * @return Otoliths The current object (for fluent API support)
     */
    public function setLengthfish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lengthfish !== $v) {
            $this->lengthfish = $v;
            $this->modifiedColumns[] = OtolithsPeer::LENGTHFISH;
        }


        return $this;
    } // setLengthfish()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Otoliths The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = OtolithsPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Otoliths The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = OtolithsPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [e_code] column.
     *
     * @param  int $v new value
     * @return Otoliths The current object (for fluent API support)
     */
    public function setECode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->e_code !== $v) {
            $this->e_code = $v;
            $this->modifiedColumns[] = OtolithsPeer::E_CODE;
        }


        return $this;
    } // setECode()

    /**
     * Set the value of [plate] column.
     *
     * @param  string $v new value
     * @return Otoliths The current object (for fluent API support)
     */
    public function setPlate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->plate !== $v) {
            $this->plate = $v;
            $this->modifiedColumns[] = OtolithsPeer::PLATE;
        }


        return $this;
    } // setPlate()

    /**
     * Set the value of [figure] column.
     *
     * @param  string $v new value
     * @return Otoliths The current object (for fluent API support)
     */
    public function setFigure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->figure !== $v) {
            $this->figure = $v;
            $this->modifiedColumns[] = OtolithsPeer::FIGURE;
        }


        return $this;
    } // setFigure()

    /**
     * Set the value of [position] column.
     *
     * @param  string $v new value
     * @return Otoliths The current object (for fluent API support)
     */
    public function setPosition($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->position !== $v) {
            $this->position = $v;
            $this->modifiedColumns[] = OtolithsPeer::POSITION;
        }


        return $this;
    } // setPosition()

    /**
     * Set the value of [face] column.
     *
     * @param  string $v new value
     * @return Otoliths The current object (for fluent API support)
     */
    public function setFace($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->face !== $v) {
            $this->face = $v;
            $this->modifiedColumns[] = OtolithsPeer::FACE;
        }


        return $this;
    } // setFace()

    /**
     * Set the value of [type] column.
     *
     * @param  string $v new value
     * @return Otoliths The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[] = OtolithsPeer::TYPE;
        }


        return $this;
    } // setType()

    /**
     * Set the value of [lengthotolith] column.
     *
     * @param  double $v new value
     * @return Otoliths The current object (for fluent API support)
     */
    public function setLengthotolith($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lengthotolith !== $v) {
            $this->lengthotolith = $v;
            $this->modifiedColumns[] = OtolithsPeer::LENGTHOTOLITH;
        }


        return $this;
    } // setLengthotolith()

    /**
     * Set the value of [heightotolith] column.
     *
     * @param  double $v new value
     * @return Otoliths The current object (for fluent API support)
     */
    public function setHeightotolith($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->heightotolith !== $v) {
            $this->heightotolith = $v;
            $this->modifiedColumns[] = OtolithsPeer::HEIGHTOTOLITH;
        }


        return $this;
    } // setHeightotolith()

    /**
     * Set the value of [figfilename] column.
     *
     * @param  string $v new value
     * @return Otoliths The current object (for fluent API support)
     */
    public function setFigfilename($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->figfilename !== $v) {
            $this->figfilename = $v;
            $this->modifiedColumns[] = OtolithsPeer::FIGFILENAME;
        }


        return $this;
    } // setFigfilename()

    /**
     * Set the value of [authname] column.
     *
     * @param  string $v new value
     * @return Otoliths The current object (for fluent API support)
     */
    public function setAuthname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->authname !== $v) {
            $this->authname = $v;
            $this->modifiedColumns[] = OtolithsPeer::AUTHNAME;
        }


        return $this;
    } // setAuthname()

    /**
     * Set the value of [fkpoisson] column.
     *
     * @param  double $v new value
     * @return Otoliths The current object (for fluent API support)
     */
    public function setFkpoisson($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->fkpoisson !== $v) {
            $this->fkpoisson = $v;
            $this->modifiedColumns[] = OtolithsPeer::FKPOISSON;
        }


        return $this;
    } // setFkpoisson()

    /**
     * Set the value of [fktaxon] column.
     *
     * @param  int $v new value
     * @return Otoliths The current object (for fluent API support)
     */
    public function setFktaxon($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fktaxon !== $v) {
            $this->fktaxon = $v;
            $this->modifiedColumns[] = OtolithsPeer::FKTAXON;
        }


        return $this;
    } // setFktaxon()

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
            if ($this->otolithsrefno !== 0) {
                return false;
            }

            if ($this->genusused !== '') {
                return false;
            }

            if ($this->speciesused !== '') {
                return false;
            }

            if ($this->plate !== '') {
                return false;
            }

            if ($this->figure !== '') {
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

            $this->otolithid = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->otolithsrefno = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->genusused = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->speciesused = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->syncode = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->speccode = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->syncodevalid = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->lengthfish = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->locality = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->c_code = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->e_code = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->plate = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->figure = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->position = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->face = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->type = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->lengthotolith = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->heightotolith = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->figfilename = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->authname = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->fkpoisson = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->fktaxon = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 22; // 22 = OtolithsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Otoliths object", $e);
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
            $con = Propel::getConnection(OtolithsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = OtolithsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(OtolithsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = OtolithsQuery::create()
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
            $con = Propel::getConnection(OtolithsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                OtolithsPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(OtolithsPeer::OTOLITHID)) {
            $modifiedColumns[':p' . $index++]  = '`OtolithID`';
        }
        if ($this->isColumnModified(OtolithsPeer::OTOLITHSREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`OtolithsRefno`';
        }
        if ($this->isColumnModified(OtolithsPeer::GENUSUSED)) {
            $modifiedColumns[':p' . $index++]  = '`GenusUsed`';
        }
        if ($this->isColumnModified(OtolithsPeer::SPECIESUSED)) {
            $modifiedColumns[':p' . $index++]  = '`SpeciesUsed`';
        }
        if ($this->isColumnModified(OtolithsPeer::SYNCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SynCode`';
        }
        if ($this->isColumnModified(OtolithsPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(OtolithsPeer::SYNCODEVALID)) {
            $modifiedColumns[':p' . $index++]  = '`SynCodeValid`';
        }
        if ($this->isColumnModified(OtolithsPeer::LENGTHFISH)) {
            $modifiedColumns[':p' . $index++]  = '`LengthFish`';
        }
        if ($this->isColumnModified(OtolithsPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(OtolithsPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(OtolithsPeer::E_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`E_CODE`';
        }
        if ($this->isColumnModified(OtolithsPeer::PLATE)) {
            $modifiedColumns[':p' . $index++]  = '`Plate`';
        }
        if ($this->isColumnModified(OtolithsPeer::FIGURE)) {
            $modifiedColumns[':p' . $index++]  = '`Figure`';
        }
        if ($this->isColumnModified(OtolithsPeer::POSITION)) {
            $modifiedColumns[':p' . $index++]  = '`Position`';
        }
        if ($this->isColumnModified(OtolithsPeer::FACE)) {
            $modifiedColumns[':p' . $index++]  = '`Face`';
        }
        if ($this->isColumnModified(OtolithsPeer::TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`Type`';
        }
        if ($this->isColumnModified(OtolithsPeer::LENGTHOTOLITH)) {
            $modifiedColumns[':p' . $index++]  = '`LengthOtolith`';
        }
        if ($this->isColumnModified(OtolithsPeer::HEIGHTOTOLITH)) {
            $modifiedColumns[':p' . $index++]  = '`HeightOtolith`';
        }
        if ($this->isColumnModified(OtolithsPeer::FIGFILENAME)) {
            $modifiedColumns[':p' . $index++]  = '`FigFileName`';
        }
        if ($this->isColumnModified(OtolithsPeer::AUTHNAME)) {
            $modifiedColumns[':p' . $index++]  = '`AuthName`';
        }
        if ($this->isColumnModified(OtolithsPeer::FKPOISSON)) {
            $modifiedColumns[':p' . $index++]  = '`fkpoisson`';
        }
        if ($this->isColumnModified(OtolithsPeer::FKTAXON)) {
            $modifiedColumns[':p' . $index++]  = '`fktaxon`';
        }

        $sql = sprintf(
            'INSERT INTO `otoliths` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`OtolithID`':
                        $stmt->bindValue($identifier, $this->otolithid, PDO::PARAM_INT);
                        break;
                    case '`OtolithsRefno`':
                        $stmt->bindValue($identifier, $this->otolithsrefno, PDO::PARAM_INT);
                        break;
                    case '`GenusUsed`':
                        $stmt->bindValue($identifier, $this->genusused, PDO::PARAM_STR);
                        break;
                    case '`SpeciesUsed`':
                        $stmt->bindValue($identifier, $this->speciesused, PDO::PARAM_STR);
                        break;
                    case '`SynCode`':
                        $stmt->bindValue($identifier, $this->syncode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`SynCodeValid`':
                        $stmt->bindValue($identifier, $this->syncodevalid, PDO::PARAM_INT);
                        break;
                    case '`LengthFish`':
                        $stmt->bindValue($identifier, $this->lengthfish, PDO::PARAM_STR);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`E_CODE`':
                        $stmt->bindValue($identifier, $this->e_code, PDO::PARAM_INT);
                        break;
                    case '`Plate`':
                        $stmt->bindValue($identifier, $this->plate, PDO::PARAM_STR);
                        break;
                    case '`Figure`':
                        $stmt->bindValue($identifier, $this->figure, PDO::PARAM_STR);
                        break;
                    case '`Position`':
                        $stmt->bindValue($identifier, $this->position, PDO::PARAM_STR);
                        break;
                    case '`Face`':
                        $stmt->bindValue($identifier, $this->face, PDO::PARAM_STR);
                        break;
                    case '`Type`':
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_STR);
                        break;
                    case '`LengthOtolith`':
                        $stmt->bindValue($identifier, $this->lengthotolith, PDO::PARAM_STR);
                        break;
                    case '`HeightOtolith`':
                        $stmt->bindValue($identifier, $this->heightotolith, PDO::PARAM_STR);
                        break;
                    case '`FigFileName`':
                        $stmt->bindValue($identifier, $this->figfilename, PDO::PARAM_STR);
                        break;
                    case '`AuthName`':
                        $stmt->bindValue($identifier, $this->authname, PDO::PARAM_STR);
                        break;
                    case '`fkpoisson`':
                        $stmt->bindValue($identifier, $this->fkpoisson, PDO::PARAM_STR);
                        break;
                    case '`fktaxon`':
                        $stmt->bindValue($identifier, $this->fktaxon, PDO::PARAM_INT);
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
        $this->setOtolithsrefno($pk);

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


            if (($retval = OtolithsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = OtolithsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOtolithid();
                break;
            case 1:
                return $this->getOtolithsrefno();
                break;
            case 2:
                return $this->getGenusused();
                break;
            case 3:
                return $this->getSpeciesused();
                break;
            case 4:
                return $this->getSyncode();
                break;
            case 5:
                return $this->getSpeccode();
                break;
            case 6:
                return $this->getSyncodevalid();
                break;
            case 7:
                return $this->getLengthfish();
                break;
            case 8:
                return $this->getLocality();
                break;
            case 9:
                return $this->getCCode();
                break;
            case 10:
                return $this->getECode();
                break;
            case 11:
                return $this->getPlate();
                break;
            case 12:
                return $this->getFigure();
                break;
            case 13:
                return $this->getPosition();
                break;
            case 14:
                return $this->getFace();
                break;
            case 15:
                return $this->getType();
                break;
            case 16:
                return $this->getLengthotolith();
                break;
            case 17:
                return $this->getHeightotolith();
                break;
            case 18:
                return $this->getFigfilename();
                break;
            case 19:
                return $this->getAuthname();
                break;
            case 20:
                return $this->getFkpoisson();
                break;
            case 21:
                return $this->getFktaxon();
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
        if (isset($alreadyDumpedObjects['Otoliths'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Otoliths'][serialize($this->getPrimaryKey())] = true;
        $keys = OtolithsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOtolithid(),
            $keys[1] => $this->getOtolithsrefno(),
            $keys[2] => $this->getGenusused(),
            $keys[3] => $this->getSpeciesused(),
            $keys[4] => $this->getSyncode(),
            $keys[5] => $this->getSpeccode(),
            $keys[6] => $this->getSyncodevalid(),
            $keys[7] => $this->getLengthfish(),
            $keys[8] => $this->getLocality(),
            $keys[9] => $this->getCCode(),
            $keys[10] => $this->getECode(),
            $keys[11] => $this->getPlate(),
            $keys[12] => $this->getFigure(),
            $keys[13] => $this->getPosition(),
            $keys[14] => $this->getFace(),
            $keys[15] => $this->getType(),
            $keys[16] => $this->getLengthotolith(),
            $keys[17] => $this->getHeightotolith(),
            $keys[18] => $this->getFigfilename(),
            $keys[19] => $this->getAuthname(),
            $keys[20] => $this->getFkpoisson(),
            $keys[21] => $this->getFktaxon(),
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
        $pos = OtolithsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOtolithid($value);
                break;
            case 1:
                $this->setOtolithsrefno($value);
                break;
            case 2:
                $this->setGenusused($value);
                break;
            case 3:
                $this->setSpeciesused($value);
                break;
            case 4:
                $this->setSyncode($value);
                break;
            case 5:
                $this->setSpeccode($value);
                break;
            case 6:
                $this->setSyncodevalid($value);
                break;
            case 7:
                $this->setLengthfish($value);
                break;
            case 8:
                $this->setLocality($value);
                break;
            case 9:
                $this->setCCode($value);
                break;
            case 10:
                $this->setECode($value);
                break;
            case 11:
                $this->setPlate($value);
                break;
            case 12:
                $this->setFigure($value);
                break;
            case 13:
                $this->setPosition($value);
                break;
            case 14:
                $this->setFace($value);
                break;
            case 15:
                $this->setType($value);
                break;
            case 16:
                $this->setLengthotolith($value);
                break;
            case 17:
                $this->setHeightotolith($value);
                break;
            case 18:
                $this->setFigfilename($value);
                break;
            case 19:
                $this->setAuthname($value);
                break;
            case 20:
                $this->setFkpoisson($value);
                break;
            case 21:
                $this->setFktaxon($value);
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
        $keys = OtolithsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setOtolithid($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOtolithsrefno($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setGenusused($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSpeciesused($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSyncode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSpeccode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSyncodevalid($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLengthfish($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLocality($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCCode($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setECode($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setPlate($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setFigure($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setPosition($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setFace($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setType($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setLengthotolith($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setHeightotolith($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setFigfilename($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setAuthname($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setFkpoisson($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setFktaxon($arr[$keys[21]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OtolithsPeer::DATABASE_NAME);

        if ($this->isColumnModified(OtolithsPeer::OTOLITHID)) $criteria->add(OtolithsPeer::OTOLITHID, $this->otolithid);
        if ($this->isColumnModified(OtolithsPeer::OTOLITHSREFNO)) $criteria->add(OtolithsPeer::OTOLITHSREFNO, $this->otolithsrefno);
        if ($this->isColumnModified(OtolithsPeer::GENUSUSED)) $criteria->add(OtolithsPeer::GENUSUSED, $this->genusused);
        if ($this->isColumnModified(OtolithsPeer::SPECIESUSED)) $criteria->add(OtolithsPeer::SPECIESUSED, $this->speciesused);
        if ($this->isColumnModified(OtolithsPeer::SYNCODE)) $criteria->add(OtolithsPeer::SYNCODE, $this->syncode);
        if ($this->isColumnModified(OtolithsPeer::SPECCODE)) $criteria->add(OtolithsPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(OtolithsPeer::SYNCODEVALID)) $criteria->add(OtolithsPeer::SYNCODEVALID, $this->syncodevalid);
        if ($this->isColumnModified(OtolithsPeer::LENGTHFISH)) $criteria->add(OtolithsPeer::LENGTHFISH, $this->lengthfish);
        if ($this->isColumnModified(OtolithsPeer::LOCALITY)) $criteria->add(OtolithsPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(OtolithsPeer::C_CODE)) $criteria->add(OtolithsPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(OtolithsPeer::E_CODE)) $criteria->add(OtolithsPeer::E_CODE, $this->e_code);
        if ($this->isColumnModified(OtolithsPeer::PLATE)) $criteria->add(OtolithsPeer::PLATE, $this->plate);
        if ($this->isColumnModified(OtolithsPeer::FIGURE)) $criteria->add(OtolithsPeer::FIGURE, $this->figure);
        if ($this->isColumnModified(OtolithsPeer::POSITION)) $criteria->add(OtolithsPeer::POSITION, $this->position);
        if ($this->isColumnModified(OtolithsPeer::FACE)) $criteria->add(OtolithsPeer::FACE, $this->face);
        if ($this->isColumnModified(OtolithsPeer::TYPE)) $criteria->add(OtolithsPeer::TYPE, $this->type);
        if ($this->isColumnModified(OtolithsPeer::LENGTHOTOLITH)) $criteria->add(OtolithsPeer::LENGTHOTOLITH, $this->lengthotolith);
        if ($this->isColumnModified(OtolithsPeer::HEIGHTOTOLITH)) $criteria->add(OtolithsPeer::HEIGHTOTOLITH, $this->heightotolith);
        if ($this->isColumnModified(OtolithsPeer::FIGFILENAME)) $criteria->add(OtolithsPeer::FIGFILENAME, $this->figfilename);
        if ($this->isColumnModified(OtolithsPeer::AUTHNAME)) $criteria->add(OtolithsPeer::AUTHNAME, $this->authname);
        if ($this->isColumnModified(OtolithsPeer::FKPOISSON)) $criteria->add(OtolithsPeer::FKPOISSON, $this->fkpoisson);
        if ($this->isColumnModified(OtolithsPeer::FKTAXON)) $criteria->add(OtolithsPeer::FKTAXON, $this->fktaxon);

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
        $criteria = new Criteria(OtolithsPeer::DATABASE_NAME);
        $criteria->add(OtolithsPeer::OTOLITHSREFNO, $this->otolithsrefno);
        $criteria->add(OtolithsPeer::GENUSUSED, $this->genusused);
        $criteria->add(OtolithsPeer::SPECIESUSED, $this->speciesused);
        $criteria->add(OtolithsPeer::PLATE, $this->plate);
        $criteria->add(OtolithsPeer::FIGURE, $this->figure);

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
        $pks[0] = $this->getOtolithsrefno();
        $pks[1] = $this->getGenusused();
        $pks[2] = $this->getSpeciesused();
        $pks[3] = $this->getPlate();
        $pks[4] = $this->getFigure();

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
        $this->setOtolithsrefno($keys[0]);
        $this->setGenusused($keys[1]);
        $this->setSpeciesused($keys[2]);
        $this->setPlate($keys[3]);
        $this->setFigure($keys[4]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getOtolithsrefno()) && (null === $this->getGenusused()) && (null === $this->getSpeciesused()) && (null === $this->getPlate()) && (null === $this->getFigure());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Otoliths (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOtolithsrefno($this->getOtolithsrefno());
        $copyObj->setGenusused($this->getGenusused());
        $copyObj->setSpeciesused($this->getSpeciesused());
        $copyObj->setSyncode($this->getSyncode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setSyncodevalid($this->getSyncodevalid());
        $copyObj->setLengthfish($this->getLengthfish());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setECode($this->getECode());
        $copyObj->setPlate($this->getPlate());
        $copyObj->setFigure($this->getFigure());
        $copyObj->setPosition($this->getPosition());
        $copyObj->setFace($this->getFace());
        $copyObj->setType($this->getType());
        $copyObj->setLengthotolith($this->getLengthotolith());
        $copyObj->setHeightotolith($this->getHeightotolith());
        $copyObj->setFigfilename($this->getFigfilename());
        $copyObj->setAuthname($this->getAuthname());
        $copyObj->setFkpoisson($this->getFkpoisson());
        $copyObj->setFktaxon($this->getFktaxon());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setOtolithid(NULL); // this is a auto-increment column, so set to default value
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
     * @return Otoliths Clone of current object.
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
     * @return OtolithsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OtolithsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->otolithid = null;
        $this->otolithsrefno = null;
        $this->genusused = null;
        $this->speciesused = null;
        $this->syncode = null;
        $this->speccode = null;
        $this->syncodevalid = null;
        $this->lengthfish = null;
        $this->locality = null;
        $this->c_code = null;
        $this->e_code = null;
        $this->plate = null;
        $this->figure = null;
        $this->position = null;
        $this->face = null;
        $this->type = null;
        $this->lengthotolith = null;
        $this->heightotolith = null;
        $this->figfilename = null;
        $this->authname = null;
        $this->fkpoisson = null;
        $this->fktaxon = null;
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
        return (string) $this->exportTo(OtolithsPeer::DEFAULT_STRING_FORMAT);
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
