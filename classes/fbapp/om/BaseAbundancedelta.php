<?php


/**
 * Base class that represents a row from the 'abundancedelta' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseAbundancedelta extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'AbundancedeltaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AbundancedeltaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the a_deltacode field.
     * @var        int
     */
    protected $a_deltacode;

    /**
     * The value for the abundancecode field.
     * @var        int
     */
    protected $abundancecode;

    /**
     * The value for the ecochange1 field.
     * @var        boolean
     */
    protected $ecochange1;

    /**
     * The value for the ecochange2 field.
     * @var        string
     */
    protected $ecochange2;

    /**
     * The value for the ecochange3 field.
     * @var        string
     */
    protected $ecochange3;

    /**
     * The value for the ecochange4 field.
     * @var        string
     */
    protected $ecochange4;

    /**
     * The value for the ecochange_ref field.
     * @var        int
     */
    protected $ecochange_ref;

    /**
     * The value for the abiochange1 field.
     * @var        boolean
     */
    protected $abiochange1;

    /**
     * The value for the abiochange2 field.
     * @var        string
     */
    protected $abiochange2;

    /**
     * The value for the abiochange3 field.
     * @var        string
     */
    protected $abiochange3;

    /**
     * The value for the abiochange4 field.
     * @var        string
     */
    protected $abiochange4;

    /**
     * The value for the abiochange_ref field.
     * @var        int
     */
    protected $abiochange_ref;

    /**
     * The value for the ecohealth1 field.
     * @var        string
     */
    protected $ecohealth1;

    /**
     * The value for the ecohealth2 field.
     * @var        string
     */
    protected $ecohealth2;

    /**
     * The value for the ecohealth_ref field.
     * @var        int
     */
    protected $ecohealth_ref;

    /**
     * The value for the humaninterest1 field.
     * @var        string
     */
    protected $humaninterest1;

    /**
     * The value for the humaninterest2 field.
     * @var        string
     */
    protected $humaninterest2;

    /**
     * The value for the humaninterest_ref field.
     * @var        int
     */
    protected $humaninterest_ref;

    /**
     * The value for the remarks field.
     * @var        string
     */
    protected $remarks;

    /**
     * The value for the affectedtype field.
     * @var        string
     */
    protected $affectedtype;

    /**
     * The value for the affectedgenus field.
     * @var        string
     */
    protected $affectedgenus;

    /**
     * The value for the affectedspecies field.
     * @var        string
     */
    protected $affectedspecies;

    /**
     * The value for the affectedspeccode field.
     * @var        int
     */
    protected $affectedspeccode;

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
     * Get the [a_deltacode] column value.
     *
     * @return int
     */
    public function getADeltacode()
    {

        return $this->a_deltacode;
    }

    /**
     * Get the [abundancecode] column value.
     *
     * @return int
     */
    public function getAbundancecode()
    {

        return $this->abundancecode;
    }

    /**
     * Get the [ecochange1] column value.
     *
     * @return boolean
     */
    public function getEcochange1()
    {

        return $this->ecochange1;
    }

    /**
     * Get the [ecochange2] column value.
     *
     * @return string
     */
    public function getEcochange2()
    {

        return $this->ecochange2;
    }

    /**
     * Get the [ecochange3] column value.
     *
     * @return string
     */
    public function getEcochange3()
    {

        return $this->ecochange3;
    }

    /**
     * Get the [ecochange4] column value.
     *
     * @return string
     */
    public function getEcochange4()
    {

        return $this->ecochange4;
    }

    /**
     * Get the [ecochange_ref] column value.
     *
     * @return int
     */
    public function getEcochangeRef()
    {

        return $this->ecochange_ref;
    }

    /**
     * Get the [abiochange1] column value.
     *
     * @return boolean
     */
    public function getAbiochange1()
    {

        return $this->abiochange1;
    }

    /**
     * Get the [abiochange2] column value.
     *
     * @return string
     */
    public function getAbiochange2()
    {

        return $this->abiochange2;
    }

    /**
     * Get the [abiochange3] column value.
     *
     * @return string
     */
    public function getAbiochange3()
    {

        return $this->abiochange3;
    }

    /**
     * Get the [abiochange4] column value.
     *
     * @return string
     */
    public function getAbiochange4()
    {

        return $this->abiochange4;
    }

    /**
     * Get the [abiochange_ref] column value.
     *
     * @return int
     */
    public function getAbiochangeRef()
    {

        return $this->abiochange_ref;
    }

    /**
     * Get the [ecohealth1] column value.
     *
     * @return string
     */
    public function getEcohealth1()
    {

        return $this->ecohealth1;
    }

    /**
     * Get the [ecohealth2] column value.
     *
     * @return string
     */
    public function getEcohealth2()
    {

        return $this->ecohealth2;
    }

    /**
     * Get the [ecohealth_ref] column value.
     *
     * @return int
     */
    public function getEcohealthRef()
    {

        return $this->ecohealth_ref;
    }

    /**
     * Get the [humaninterest1] column value.
     *
     * @return string
     */
    public function getHumaninterest1()
    {

        return $this->humaninterest1;
    }

    /**
     * Get the [humaninterest2] column value.
     *
     * @return string
     */
    public function getHumaninterest2()
    {

        return $this->humaninterest2;
    }

    /**
     * Get the [humaninterest_ref] column value.
     *
     * @return int
     */
    public function getHumaninterestRef()
    {

        return $this->humaninterest_ref;
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
     * Get the [affectedtype] column value.
     *
     * @return string
     */
    public function getAffectedtype()
    {

        return $this->affectedtype;
    }

    /**
     * Get the [affectedgenus] column value.
     *
     * @return string
     */
    public function getAffectedgenus()
    {

        return $this->affectedgenus;
    }

    /**
     * Get the [affectedspecies] column value.
     *
     * @return string
     */
    public function getAffectedspecies()
    {

        return $this->affectedspecies;
    }

    /**
     * Get the [affectedspeccode] column value.
     *
     * @return int
     */
    public function getAffectedspeccode()
    {

        return $this->affectedspeccode;
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
     * Set the value of [a_deltacode] column.
     *
     * @param  int $v new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setADeltacode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->a_deltacode !== $v) {
            $this->a_deltacode = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::A_DELTACODE;
        }


        return $this;
    } // setADeltacode()

    /**
     * Set the value of [abundancecode] column.
     *
     * @param  int $v new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setAbundancecode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->abundancecode !== $v) {
            $this->abundancecode = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::ABUNDANCECODE;
        }


        return $this;
    } // setAbundancecode()

    /**
     * Sets the value of the [ecochange1] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setEcochange1($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->ecochange1 !== $v) {
            $this->ecochange1 = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::ECOCHANGE1;
        }


        return $this;
    } // setEcochange1()

    /**
     * Set the value of [ecochange2] column.
     *
     * @param  string $v new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setEcochange2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecochange2 !== $v) {
            $this->ecochange2 = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::ECOCHANGE2;
        }


        return $this;
    } // setEcochange2()

    /**
     * Set the value of [ecochange3] column.
     *
     * @param  string $v new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setEcochange3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecochange3 !== $v) {
            $this->ecochange3 = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::ECOCHANGE3;
        }


        return $this;
    } // setEcochange3()

    /**
     * Set the value of [ecochange4] column.
     *
     * @param  string $v new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setEcochange4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecochange4 !== $v) {
            $this->ecochange4 = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::ECOCHANGE4;
        }


        return $this;
    } // setEcochange4()

    /**
     * Set the value of [ecochange_ref] column.
     *
     * @param  int $v new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setEcochangeRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ecochange_ref !== $v) {
            $this->ecochange_ref = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::ECOCHANGE_REF;
        }


        return $this;
    } // setEcochangeRef()

    /**
     * Sets the value of the [abiochange1] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setAbiochange1($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->abiochange1 !== $v) {
            $this->abiochange1 = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::ABIOCHANGE1;
        }


        return $this;
    } // setAbiochange1()

    /**
     * Set the value of [abiochange2] column.
     *
     * @param  string $v new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setAbiochange2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abiochange2 !== $v) {
            $this->abiochange2 = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::ABIOCHANGE2;
        }


        return $this;
    } // setAbiochange2()

    /**
     * Set the value of [abiochange3] column.
     *
     * @param  string $v new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setAbiochange3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abiochange3 !== $v) {
            $this->abiochange3 = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::ABIOCHANGE3;
        }


        return $this;
    } // setAbiochange3()

    /**
     * Set the value of [abiochange4] column.
     *
     * @param  string $v new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setAbiochange4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abiochange4 !== $v) {
            $this->abiochange4 = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::ABIOCHANGE4;
        }


        return $this;
    } // setAbiochange4()

    /**
     * Set the value of [abiochange_ref] column.
     *
     * @param  int $v new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setAbiochangeRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->abiochange_ref !== $v) {
            $this->abiochange_ref = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::ABIOCHANGE_REF;
        }


        return $this;
    } // setAbiochangeRef()

    /**
     * Set the value of [ecohealth1] column.
     *
     * @param  string $v new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setEcohealth1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecohealth1 !== $v) {
            $this->ecohealth1 = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::ECOHEALTH1;
        }


        return $this;
    } // setEcohealth1()

    /**
     * Set the value of [ecohealth2] column.
     *
     * @param  string $v new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setEcohealth2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecohealth2 !== $v) {
            $this->ecohealth2 = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::ECOHEALTH2;
        }


        return $this;
    } // setEcohealth2()

    /**
     * Set the value of [ecohealth_ref] column.
     *
     * @param  int $v new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setEcohealthRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ecohealth_ref !== $v) {
            $this->ecohealth_ref = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::ECOHEALTH_REF;
        }


        return $this;
    } // setEcohealthRef()

    /**
     * Set the value of [humaninterest1] column.
     *
     * @param  string $v new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setHumaninterest1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->humaninterest1 !== $v) {
            $this->humaninterest1 = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::HUMANINTEREST1;
        }


        return $this;
    } // setHumaninterest1()

    /**
     * Set the value of [humaninterest2] column.
     *
     * @param  string $v new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setHumaninterest2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->humaninterest2 !== $v) {
            $this->humaninterest2 = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::HUMANINTEREST2;
        }


        return $this;
    } // setHumaninterest2()

    /**
     * Set the value of [humaninterest_ref] column.
     *
     * @param  int $v new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setHumaninterestRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->humaninterest_ref !== $v) {
            $this->humaninterest_ref = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::HUMANINTEREST_REF;
        }


        return $this;
    } // setHumaninterestRef()

    /**
     * Set the value of [remarks] column.
     *
     * @param  string $v new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::REMARKS;
        }


        return $this;
    } // setRemarks()

    /**
     * Set the value of [affectedtype] column.
     *
     * @param  string $v new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setAffectedtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->affectedtype !== $v) {
            $this->affectedtype = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::AFFECTEDTYPE;
        }


        return $this;
    } // setAffectedtype()

    /**
     * Set the value of [affectedgenus] column.
     *
     * @param  string $v new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setAffectedgenus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->affectedgenus !== $v) {
            $this->affectedgenus = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::AFFECTEDGENUS;
        }


        return $this;
    } // setAffectedgenus()

    /**
     * Set the value of [affectedspecies] column.
     *
     * @param  string $v new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setAffectedspecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->affectedspecies !== $v) {
            $this->affectedspecies = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::AFFECTEDSPECIES;
        }


        return $this;
    } // setAffectedspecies()

    /**
     * Set the value of [affectedspeccode] column.
     *
     * @param  int $v new value
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setAffectedspeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->affectedspeccode !== $v) {
            $this->affectedspeccode = $v;
            $this->modifiedColumns[] = AbundancedeltaPeer::AFFECTEDSPECCODE;
        }


        return $this;
    } // setAffectedspeccode()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Abundancedelta The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = AbundancedeltaPeer::TS;
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

            $this->a_deltacode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->abundancecode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->ecochange1 = ($row[$startcol + 2] !== null) ? (boolean) $row[$startcol + 2] : null;
            $this->ecochange2 = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->ecochange3 = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->ecochange4 = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->ecochange_ref = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->abiochange1 = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
            $this->abiochange2 = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->abiochange3 = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->abiochange4 = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->abiochange_ref = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->ecohealth1 = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->ecohealth2 = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->ecohealth_ref = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->humaninterest1 = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->humaninterest2 = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->humaninterest_ref = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->remarks = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->affectedtype = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->affectedgenus = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->affectedspecies = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->affectedspeccode = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->ts = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 24; // 24 = AbundancedeltaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Abundancedelta object", $e);
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
            $con = Propel::getConnection(AbundancedeltaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AbundancedeltaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(AbundancedeltaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AbundancedeltaQuery::create()
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
            $con = Propel::getConnection(AbundancedeltaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                AbundancedeltaPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = AbundancedeltaPeer::A_DELTACODE;
        if (null !== $this->a_deltacode) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . AbundancedeltaPeer::A_DELTACODE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(AbundancedeltaPeer::A_DELTACODE)) {
            $modifiedColumns[':p' . $index++]  = '`A_DeltaCode`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::ABUNDANCECODE)) {
            $modifiedColumns[':p' . $index++]  = '`AbundanceCode`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::ECOCHANGE1)) {
            $modifiedColumns[':p' . $index++]  = '`EcoChange1`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::ECOCHANGE2)) {
            $modifiedColumns[':p' . $index++]  = '`EcoChange2`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::ECOCHANGE3)) {
            $modifiedColumns[':p' . $index++]  = '`EcoChange3`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::ECOCHANGE4)) {
            $modifiedColumns[':p' . $index++]  = '`EcoChange4`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::ECOCHANGE_REF)) {
            $modifiedColumns[':p' . $index++]  = '`EcoChange_Ref`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::ABIOCHANGE1)) {
            $modifiedColumns[':p' . $index++]  = '`AbioChange1`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::ABIOCHANGE2)) {
            $modifiedColumns[':p' . $index++]  = '`AbioChange2`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::ABIOCHANGE3)) {
            $modifiedColumns[':p' . $index++]  = '`AbioChange3`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::ABIOCHANGE4)) {
            $modifiedColumns[':p' . $index++]  = '`AbioChange4`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::ABIOCHANGE_REF)) {
            $modifiedColumns[':p' . $index++]  = '`AbioChange_Ref`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::ECOHEALTH1)) {
            $modifiedColumns[':p' . $index++]  = '`EcoHealth1`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::ECOHEALTH2)) {
            $modifiedColumns[':p' . $index++]  = '`EcoHealth2`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::ECOHEALTH_REF)) {
            $modifiedColumns[':p' . $index++]  = '`EcoHealth_Ref`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::HUMANINTEREST1)) {
            $modifiedColumns[':p' . $index++]  = '`HumanInterest1`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::HUMANINTEREST2)) {
            $modifiedColumns[':p' . $index++]  = '`HumanInterest2`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::HUMANINTEREST_REF)) {
            $modifiedColumns[':p' . $index++]  = '`HumanInterest_Ref`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`Remarks`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::AFFECTEDTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`AffectedType`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::AFFECTEDGENUS)) {
            $modifiedColumns[':p' . $index++]  = '`AffectedGenus`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::AFFECTEDSPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`AffectedSpecies`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::AFFECTEDSPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`AffectedSpecCode`';
        }
        if ($this->isColumnModified(AbundancedeltaPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `abundancedelta` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`A_DeltaCode`':
                        $stmt->bindValue($identifier, $this->a_deltacode, PDO::PARAM_INT);
                        break;
                    case '`AbundanceCode`':
                        $stmt->bindValue($identifier, $this->abundancecode, PDO::PARAM_INT);
                        break;
                    case '`EcoChange1`':
                        $stmt->bindValue($identifier, (int) $this->ecochange1, PDO::PARAM_INT);
                        break;
                    case '`EcoChange2`':
                        $stmt->bindValue($identifier, $this->ecochange2, PDO::PARAM_STR);
                        break;
                    case '`EcoChange3`':
                        $stmt->bindValue($identifier, $this->ecochange3, PDO::PARAM_STR);
                        break;
                    case '`EcoChange4`':
                        $stmt->bindValue($identifier, $this->ecochange4, PDO::PARAM_STR);
                        break;
                    case '`EcoChange_Ref`':
                        $stmt->bindValue($identifier, $this->ecochange_ref, PDO::PARAM_INT);
                        break;
                    case '`AbioChange1`':
                        $stmt->bindValue($identifier, (int) $this->abiochange1, PDO::PARAM_INT);
                        break;
                    case '`AbioChange2`':
                        $stmt->bindValue($identifier, $this->abiochange2, PDO::PARAM_STR);
                        break;
                    case '`AbioChange3`':
                        $stmt->bindValue($identifier, $this->abiochange3, PDO::PARAM_STR);
                        break;
                    case '`AbioChange4`':
                        $stmt->bindValue($identifier, $this->abiochange4, PDO::PARAM_STR);
                        break;
                    case '`AbioChange_Ref`':
                        $stmt->bindValue($identifier, $this->abiochange_ref, PDO::PARAM_INT);
                        break;
                    case '`EcoHealth1`':
                        $stmt->bindValue($identifier, $this->ecohealth1, PDO::PARAM_STR);
                        break;
                    case '`EcoHealth2`':
                        $stmt->bindValue($identifier, $this->ecohealth2, PDO::PARAM_STR);
                        break;
                    case '`EcoHealth_Ref`':
                        $stmt->bindValue($identifier, $this->ecohealth_ref, PDO::PARAM_INT);
                        break;
                    case '`HumanInterest1`':
                        $stmt->bindValue($identifier, $this->humaninterest1, PDO::PARAM_STR);
                        break;
                    case '`HumanInterest2`':
                        $stmt->bindValue($identifier, $this->humaninterest2, PDO::PARAM_STR);
                        break;
                    case '`HumanInterest_Ref`':
                        $stmt->bindValue($identifier, $this->humaninterest_ref, PDO::PARAM_INT);
                        break;
                    case '`Remarks`':
                        $stmt->bindValue($identifier, $this->remarks, PDO::PARAM_STR);
                        break;
                    case '`AffectedType`':
                        $stmt->bindValue($identifier, $this->affectedtype, PDO::PARAM_STR);
                        break;
                    case '`AffectedGenus`':
                        $stmt->bindValue($identifier, $this->affectedgenus, PDO::PARAM_STR);
                        break;
                    case '`AffectedSpecies`':
                        $stmt->bindValue($identifier, $this->affectedspecies, PDO::PARAM_STR);
                        break;
                    case '`AffectedSpecCode`':
                        $stmt->bindValue($identifier, $this->affectedspeccode, PDO::PARAM_INT);
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
        $this->setADeltacode($pk);

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


            if (($retval = AbundancedeltaPeer::doValidate($this, $columns)) !== true) {
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
        $pos = AbundancedeltaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getADeltacode();
                break;
            case 1:
                return $this->getAbundancecode();
                break;
            case 2:
                return $this->getEcochange1();
                break;
            case 3:
                return $this->getEcochange2();
                break;
            case 4:
                return $this->getEcochange3();
                break;
            case 5:
                return $this->getEcochange4();
                break;
            case 6:
                return $this->getEcochangeRef();
                break;
            case 7:
                return $this->getAbiochange1();
                break;
            case 8:
                return $this->getAbiochange2();
                break;
            case 9:
                return $this->getAbiochange3();
                break;
            case 10:
                return $this->getAbiochange4();
                break;
            case 11:
                return $this->getAbiochangeRef();
                break;
            case 12:
                return $this->getEcohealth1();
                break;
            case 13:
                return $this->getEcohealth2();
                break;
            case 14:
                return $this->getEcohealthRef();
                break;
            case 15:
                return $this->getHumaninterest1();
                break;
            case 16:
                return $this->getHumaninterest2();
                break;
            case 17:
                return $this->getHumaninterestRef();
                break;
            case 18:
                return $this->getRemarks();
                break;
            case 19:
                return $this->getAffectedtype();
                break;
            case 20:
                return $this->getAffectedgenus();
                break;
            case 21:
                return $this->getAffectedspecies();
                break;
            case 22:
                return $this->getAffectedspeccode();
                break;
            case 23:
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
        if (isset($alreadyDumpedObjects['Abundancedelta'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Abundancedelta'][$this->getPrimaryKey()] = true;
        $keys = AbundancedeltaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getADeltacode(),
            $keys[1] => $this->getAbundancecode(),
            $keys[2] => $this->getEcochange1(),
            $keys[3] => $this->getEcochange2(),
            $keys[4] => $this->getEcochange3(),
            $keys[5] => $this->getEcochange4(),
            $keys[6] => $this->getEcochangeRef(),
            $keys[7] => $this->getAbiochange1(),
            $keys[8] => $this->getAbiochange2(),
            $keys[9] => $this->getAbiochange3(),
            $keys[10] => $this->getAbiochange4(),
            $keys[11] => $this->getAbiochangeRef(),
            $keys[12] => $this->getEcohealth1(),
            $keys[13] => $this->getEcohealth2(),
            $keys[14] => $this->getEcohealthRef(),
            $keys[15] => $this->getHumaninterest1(),
            $keys[16] => $this->getHumaninterest2(),
            $keys[17] => $this->getHumaninterestRef(),
            $keys[18] => $this->getRemarks(),
            $keys[19] => $this->getAffectedtype(),
            $keys[20] => $this->getAffectedgenus(),
            $keys[21] => $this->getAffectedspecies(),
            $keys[22] => $this->getAffectedspeccode(),
            $keys[23] => $this->getTs(),
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
        $pos = AbundancedeltaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setADeltacode($value);
                break;
            case 1:
                $this->setAbundancecode($value);
                break;
            case 2:
                $this->setEcochange1($value);
                break;
            case 3:
                $this->setEcochange2($value);
                break;
            case 4:
                $this->setEcochange3($value);
                break;
            case 5:
                $this->setEcochange4($value);
                break;
            case 6:
                $this->setEcochangeRef($value);
                break;
            case 7:
                $this->setAbiochange1($value);
                break;
            case 8:
                $this->setAbiochange2($value);
                break;
            case 9:
                $this->setAbiochange3($value);
                break;
            case 10:
                $this->setAbiochange4($value);
                break;
            case 11:
                $this->setAbiochangeRef($value);
                break;
            case 12:
                $this->setEcohealth1($value);
                break;
            case 13:
                $this->setEcohealth2($value);
                break;
            case 14:
                $this->setEcohealthRef($value);
                break;
            case 15:
                $this->setHumaninterest1($value);
                break;
            case 16:
                $this->setHumaninterest2($value);
                break;
            case 17:
                $this->setHumaninterestRef($value);
                break;
            case 18:
                $this->setRemarks($value);
                break;
            case 19:
                $this->setAffectedtype($value);
                break;
            case 20:
                $this->setAffectedgenus($value);
                break;
            case 21:
                $this->setAffectedspecies($value);
                break;
            case 22:
                $this->setAffectedspeccode($value);
                break;
            case 23:
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
        $keys = AbundancedeltaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setADeltacode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setAbundancecode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEcochange1($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEcochange2($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setEcochange3($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEcochange4($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setEcochangeRef($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setAbiochange1($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setAbiochange2($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAbiochange3($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAbiochange4($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAbiochangeRef($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setEcohealth1($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setEcohealth2($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setEcohealthRef($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setHumaninterest1($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setHumaninterest2($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setHumaninterestRef($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setRemarks($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setAffectedtype($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setAffectedgenus($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setAffectedspecies($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setAffectedspeccode($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setTs($arr[$keys[23]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AbundancedeltaPeer::DATABASE_NAME);

        if ($this->isColumnModified(AbundancedeltaPeer::A_DELTACODE)) $criteria->add(AbundancedeltaPeer::A_DELTACODE, $this->a_deltacode);
        if ($this->isColumnModified(AbundancedeltaPeer::ABUNDANCECODE)) $criteria->add(AbundancedeltaPeer::ABUNDANCECODE, $this->abundancecode);
        if ($this->isColumnModified(AbundancedeltaPeer::ECOCHANGE1)) $criteria->add(AbundancedeltaPeer::ECOCHANGE1, $this->ecochange1);
        if ($this->isColumnModified(AbundancedeltaPeer::ECOCHANGE2)) $criteria->add(AbundancedeltaPeer::ECOCHANGE2, $this->ecochange2);
        if ($this->isColumnModified(AbundancedeltaPeer::ECOCHANGE3)) $criteria->add(AbundancedeltaPeer::ECOCHANGE3, $this->ecochange3);
        if ($this->isColumnModified(AbundancedeltaPeer::ECOCHANGE4)) $criteria->add(AbundancedeltaPeer::ECOCHANGE4, $this->ecochange4);
        if ($this->isColumnModified(AbundancedeltaPeer::ECOCHANGE_REF)) $criteria->add(AbundancedeltaPeer::ECOCHANGE_REF, $this->ecochange_ref);
        if ($this->isColumnModified(AbundancedeltaPeer::ABIOCHANGE1)) $criteria->add(AbundancedeltaPeer::ABIOCHANGE1, $this->abiochange1);
        if ($this->isColumnModified(AbundancedeltaPeer::ABIOCHANGE2)) $criteria->add(AbundancedeltaPeer::ABIOCHANGE2, $this->abiochange2);
        if ($this->isColumnModified(AbundancedeltaPeer::ABIOCHANGE3)) $criteria->add(AbundancedeltaPeer::ABIOCHANGE3, $this->abiochange3);
        if ($this->isColumnModified(AbundancedeltaPeer::ABIOCHANGE4)) $criteria->add(AbundancedeltaPeer::ABIOCHANGE4, $this->abiochange4);
        if ($this->isColumnModified(AbundancedeltaPeer::ABIOCHANGE_REF)) $criteria->add(AbundancedeltaPeer::ABIOCHANGE_REF, $this->abiochange_ref);
        if ($this->isColumnModified(AbundancedeltaPeer::ECOHEALTH1)) $criteria->add(AbundancedeltaPeer::ECOHEALTH1, $this->ecohealth1);
        if ($this->isColumnModified(AbundancedeltaPeer::ECOHEALTH2)) $criteria->add(AbundancedeltaPeer::ECOHEALTH2, $this->ecohealth2);
        if ($this->isColumnModified(AbundancedeltaPeer::ECOHEALTH_REF)) $criteria->add(AbundancedeltaPeer::ECOHEALTH_REF, $this->ecohealth_ref);
        if ($this->isColumnModified(AbundancedeltaPeer::HUMANINTEREST1)) $criteria->add(AbundancedeltaPeer::HUMANINTEREST1, $this->humaninterest1);
        if ($this->isColumnModified(AbundancedeltaPeer::HUMANINTEREST2)) $criteria->add(AbundancedeltaPeer::HUMANINTEREST2, $this->humaninterest2);
        if ($this->isColumnModified(AbundancedeltaPeer::HUMANINTEREST_REF)) $criteria->add(AbundancedeltaPeer::HUMANINTEREST_REF, $this->humaninterest_ref);
        if ($this->isColumnModified(AbundancedeltaPeer::REMARKS)) $criteria->add(AbundancedeltaPeer::REMARKS, $this->remarks);
        if ($this->isColumnModified(AbundancedeltaPeer::AFFECTEDTYPE)) $criteria->add(AbundancedeltaPeer::AFFECTEDTYPE, $this->affectedtype);
        if ($this->isColumnModified(AbundancedeltaPeer::AFFECTEDGENUS)) $criteria->add(AbundancedeltaPeer::AFFECTEDGENUS, $this->affectedgenus);
        if ($this->isColumnModified(AbundancedeltaPeer::AFFECTEDSPECIES)) $criteria->add(AbundancedeltaPeer::AFFECTEDSPECIES, $this->affectedspecies);
        if ($this->isColumnModified(AbundancedeltaPeer::AFFECTEDSPECCODE)) $criteria->add(AbundancedeltaPeer::AFFECTEDSPECCODE, $this->affectedspeccode);
        if ($this->isColumnModified(AbundancedeltaPeer::TS)) $criteria->add(AbundancedeltaPeer::TS, $this->ts);

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
        $criteria = new Criteria(AbundancedeltaPeer::DATABASE_NAME);
        $criteria->add(AbundancedeltaPeer::A_DELTACODE, $this->a_deltacode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getADeltacode();
    }

    /**
     * Generic method to set the primary key (a_deltacode column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setADeltacode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getADeltacode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Abundancedelta (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setAbundancecode($this->getAbundancecode());
        $copyObj->setEcochange1($this->getEcochange1());
        $copyObj->setEcochange2($this->getEcochange2());
        $copyObj->setEcochange3($this->getEcochange3());
        $copyObj->setEcochange4($this->getEcochange4());
        $copyObj->setEcochangeRef($this->getEcochangeRef());
        $copyObj->setAbiochange1($this->getAbiochange1());
        $copyObj->setAbiochange2($this->getAbiochange2());
        $copyObj->setAbiochange3($this->getAbiochange3());
        $copyObj->setAbiochange4($this->getAbiochange4());
        $copyObj->setAbiochangeRef($this->getAbiochangeRef());
        $copyObj->setEcohealth1($this->getEcohealth1());
        $copyObj->setEcohealth2($this->getEcohealth2());
        $copyObj->setEcohealthRef($this->getEcohealthRef());
        $copyObj->setHumaninterest1($this->getHumaninterest1());
        $copyObj->setHumaninterest2($this->getHumaninterest2());
        $copyObj->setHumaninterestRef($this->getHumaninterestRef());
        $copyObj->setRemarks($this->getRemarks());
        $copyObj->setAffectedtype($this->getAffectedtype());
        $copyObj->setAffectedgenus($this->getAffectedgenus());
        $copyObj->setAffectedspecies($this->getAffectedspecies());
        $copyObj->setAffectedspeccode($this->getAffectedspeccode());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setADeltacode(NULL); // this is a auto-increment column, so set to default value
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
     * @return Abundancedelta Clone of current object.
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
     * @return AbundancedeltaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AbundancedeltaPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->a_deltacode = null;
        $this->abundancecode = null;
        $this->ecochange1 = null;
        $this->ecochange2 = null;
        $this->ecochange3 = null;
        $this->ecochange4 = null;
        $this->ecochange_ref = null;
        $this->abiochange1 = null;
        $this->abiochange2 = null;
        $this->abiochange3 = null;
        $this->abiochange4 = null;
        $this->abiochange_ref = null;
        $this->ecohealth1 = null;
        $this->ecohealth2 = null;
        $this->ecohealth_ref = null;
        $this->humaninterest1 = null;
        $this->humaninterest2 = null;
        $this->humaninterest_ref = null;
        $this->remarks = null;
        $this->affectedtype = null;
        $this->affectedgenus = null;
        $this->affectedspecies = null;
        $this->affectedspeccode = null;
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
        return (string) $this->exportTo(AbundancedeltaPeer::DEFAULT_STRING_FORMAT);
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
