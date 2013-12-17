<?php


/**
 * Base class that represents a row from the 'oxygen' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseOxygen extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OxygenPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OxygenPeer
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
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the stockcode field.
     * @var        int
     */
    protected $stockcode;

    /**
     * The value for the oxygenrefno field.
     * @var        int
     */
    protected $oxygenrefno;

    /**
     * The value for the testcode field.
     * @var        string
     */
    protected $testcode;

    /**
     * The value for the familyoxref field.
     * @var        string
     */
    protected $familyoxref;

    /**
     * The value for the speciesoxref field.
     * @var        string
     */
    protected $speciesoxref;

    /**
     * The value for the weight field.
     * @var        double
     */
    protected $weight;

    /**
     * The value for the number field.
     * @var        int
     */
    protected $number;

    /**
     * The value for the sex field.
     * @var        string
     */
    protected $sex;

    /**
     * The value for the temp field.
     * @var        double
     */
    protected $temp;

    /**
     * The value for the salinity field.
     * @var        int
     */
    protected $salinity;

    /**
     * The value for the oxygen field.
     * @var        int
     */
    protected $oxygen;

    /**
     * The value for the oxygenmgl field.
     * @var        double
     */
    protected $oxygenmgl;

    /**
     * The value for the oxygencons field.
     * @var        double
     */
    protected $oxygencons;

    /**
     * The value for the metaboliclevel field.
     * @var        string
     */
    protected $metaboliclevel;

    /**
     * The value for the appliedstress field.
     * @var        string
     */
    protected $appliedstress;

    /**
     * The value for the dataref field.
     * @var        int
     */
    protected $dataref;

    /**
     * The value for the swimmingspeed field.
     * @var        double
     */
    protected $swimmingspeed;

    /**
     * The value for the comment field.
     * @var        string
     */
    protected $comment;

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
     * The value for the expert field.
     * @var        int
     */
    protected $expert;

    /**
     * The value for the datechecked field.
     * @var        string
     */
    protected $datechecked;

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
     * Get the [speccode] column value.
     *
     * @return int
     */
    public function getSpeccode()
    {

        return $this->speccode;
    }

    /**
     * Get the [stockcode] column value.
     *
     * @return int
     */
    public function getStockcode()
    {

        return $this->stockcode;
    }

    /**
     * Get the [oxygenrefno] column value.
     *
     * @return int
     */
    public function getOxygenrefno()
    {

        return $this->oxygenrefno;
    }

    /**
     * Get the [testcode] column value.
     *
     * @return string
     */
    public function getTestcode()
    {

        return $this->testcode;
    }

    /**
     * Get the [familyoxref] column value.
     *
     * @return string
     */
    public function getFamilyoxref()
    {

        return $this->familyoxref;
    }

    /**
     * Get the [speciesoxref] column value.
     *
     * @return string
     */
    public function getSpeciesoxref()
    {

        return $this->speciesoxref;
    }

    /**
     * Get the [weight] column value.
     *
     * @return double
     */
    public function getWeight()
    {

        return $this->weight;
    }

    /**
     * Get the [number] column value.
     *
     * @return int
     */
    public function getNumber()
    {

        return $this->number;
    }

    /**
     * Get the [sex] column value.
     *
     * @return string
     */
    public function getSex()
    {

        return $this->sex;
    }

    /**
     * Get the [temp] column value.
     *
     * @return double
     */
    public function getTemp()
    {

        return $this->temp;
    }

    /**
     * Get the [salinity] column value.
     *
     * @return int
     */
    public function getSalinity()
    {

        return $this->salinity;
    }

    /**
     * Get the [oxygen] column value.
     *
     * @return int
     */
    public function getOxygen()
    {

        return $this->oxygen;
    }

    /**
     * Get the [oxygenmgl] column value.
     *
     * @return double
     */
    public function getOxygenmgl()
    {

        return $this->oxygenmgl;
    }

    /**
     * Get the [oxygencons] column value.
     *
     * @return double
     */
    public function getOxygencons()
    {

        return $this->oxygencons;
    }

    /**
     * Get the [metaboliclevel] column value.
     *
     * @return string
     */
    public function getMetaboliclevel()
    {

        return $this->metaboliclevel;
    }

    /**
     * Get the [appliedstress] column value.
     *
     * @return string
     */
    public function getAppliedstress()
    {

        return $this->appliedstress;
    }

    /**
     * Get the [dataref] column value.
     *
     * @return int
     */
    public function getDataref()
    {

        return $this->dataref;
    }

    /**
     * Get the [swimmingspeed] column value.
     *
     * @return double
     */
    public function getSwimmingspeed()
    {

        return $this->swimmingspeed;
    }

    /**
     * Get the [comment] column value.
     *
     * @return string
     */
    public function getComment()
    {

        return $this->comment;
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
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateentered($format = 'Y-m-d H:i:s')
    {
        if ($this->dateentered === null) {
            return null;
        }

        if ($this->dateentered === '0000-00-00 00:00:00') {
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
     * Get the [optionally formatted] temporal [datemodified] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatemodified($format = 'Y-m-d H:i:s')
    {
        if ($this->datemodified === null) {
            return null;
        }

        if ($this->datemodified === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datemodified);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datemodified, true), $x);
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
     * Get the [expert] column value.
     *
     * @return int
     */
    public function getExpert()
    {

        return $this->expert;
    }

    /**
     * Get the [optionally formatted] temporal [datechecked] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatechecked($format = 'Y-m-d H:i:s')
    {
        if ($this->datechecked === null) {
            return null;
        }

        if ($this->datechecked === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datechecked);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datechecked, true), $x);
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
     * @return Oxygen The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = OxygenPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Oxygen The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = OxygenPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Oxygen The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = OxygenPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [oxygenrefno] column.
     *
     * @param  int $v new value
     * @return Oxygen The current object (for fluent API support)
     */
    public function setOxygenrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->oxygenrefno !== $v) {
            $this->oxygenrefno = $v;
            $this->modifiedColumns[] = OxygenPeer::OXYGENREFNO;
        }


        return $this;
    } // setOxygenrefno()

    /**
     * Set the value of [testcode] column.
     *
     * @param  string $v new value
     * @return Oxygen The current object (for fluent API support)
     */
    public function setTestcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->testcode !== $v) {
            $this->testcode = $v;
            $this->modifiedColumns[] = OxygenPeer::TESTCODE;
        }


        return $this;
    } // setTestcode()

    /**
     * Set the value of [familyoxref] column.
     *
     * @param  string $v new value
     * @return Oxygen The current object (for fluent API support)
     */
    public function setFamilyoxref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->familyoxref !== $v) {
            $this->familyoxref = $v;
            $this->modifiedColumns[] = OxygenPeer::FAMILYOXREF;
        }


        return $this;
    } // setFamilyoxref()

    /**
     * Set the value of [speciesoxref] column.
     *
     * @param  string $v new value
     * @return Oxygen The current object (for fluent API support)
     */
    public function setSpeciesoxref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->speciesoxref !== $v) {
            $this->speciesoxref = $v;
            $this->modifiedColumns[] = OxygenPeer::SPECIESOXREF;
        }


        return $this;
    } // setSpeciesoxref()

    /**
     * Set the value of [weight] column.
     *
     * @param  double $v new value
     * @return Oxygen The current object (for fluent API support)
     */
    public function setWeight($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->weight !== $v) {
            $this->weight = $v;
            $this->modifiedColumns[] = OxygenPeer::WEIGHT;
        }


        return $this;
    } // setWeight()

    /**
     * Set the value of [number] column.
     *
     * @param  int $v new value
     * @return Oxygen The current object (for fluent API support)
     */
    public function setNumber($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->number !== $v) {
            $this->number = $v;
            $this->modifiedColumns[] = OxygenPeer::NUMBER;
        }


        return $this;
    } // setNumber()

    /**
     * Set the value of [sex] column.
     *
     * @param  string $v new value
     * @return Oxygen The current object (for fluent API support)
     */
    public function setSex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sex !== $v) {
            $this->sex = $v;
            $this->modifiedColumns[] = OxygenPeer::SEX;
        }


        return $this;
    } // setSex()

    /**
     * Set the value of [temp] column.
     *
     * @param  double $v new value
     * @return Oxygen The current object (for fluent API support)
     */
    public function setTemp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->temp !== $v) {
            $this->temp = $v;
            $this->modifiedColumns[] = OxygenPeer::TEMP;
        }


        return $this;
    } // setTemp()

    /**
     * Set the value of [salinity] column.
     *
     * @param  int $v new value
     * @return Oxygen The current object (for fluent API support)
     */
    public function setSalinity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->salinity !== $v) {
            $this->salinity = $v;
            $this->modifiedColumns[] = OxygenPeer::SALINITY;
        }


        return $this;
    } // setSalinity()

    /**
     * Set the value of [oxygen] column.
     *
     * @param  int $v new value
     * @return Oxygen The current object (for fluent API support)
     */
    public function setOxygen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->oxygen !== $v) {
            $this->oxygen = $v;
            $this->modifiedColumns[] = OxygenPeer::OXYGEN;
        }


        return $this;
    } // setOxygen()

    /**
     * Set the value of [oxygenmgl] column.
     *
     * @param  double $v new value
     * @return Oxygen The current object (for fluent API support)
     */
    public function setOxygenmgl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oxygenmgl !== $v) {
            $this->oxygenmgl = $v;
            $this->modifiedColumns[] = OxygenPeer::OXYGENMGL;
        }


        return $this;
    } // setOxygenmgl()

    /**
     * Set the value of [oxygencons] column.
     *
     * @param  double $v new value
     * @return Oxygen The current object (for fluent API support)
     */
    public function setOxygencons($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oxygencons !== $v) {
            $this->oxygencons = $v;
            $this->modifiedColumns[] = OxygenPeer::OXYGENCONS;
        }


        return $this;
    } // setOxygencons()

    /**
     * Set the value of [metaboliclevel] column.
     *
     * @param  string $v new value
     * @return Oxygen The current object (for fluent API support)
     */
    public function setMetaboliclevel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->metaboliclevel !== $v) {
            $this->metaboliclevel = $v;
            $this->modifiedColumns[] = OxygenPeer::METABOLICLEVEL;
        }


        return $this;
    } // setMetaboliclevel()

    /**
     * Set the value of [appliedstress] column.
     *
     * @param  string $v new value
     * @return Oxygen The current object (for fluent API support)
     */
    public function setAppliedstress($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->appliedstress !== $v) {
            $this->appliedstress = $v;
            $this->modifiedColumns[] = OxygenPeer::APPLIEDSTRESS;
        }


        return $this;
    } // setAppliedstress()

    /**
     * Set the value of [dataref] column.
     *
     * @param  int $v new value
     * @return Oxygen The current object (for fluent API support)
     */
    public function setDataref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dataref !== $v) {
            $this->dataref = $v;
            $this->modifiedColumns[] = OxygenPeer::DATAREF;
        }


        return $this;
    } // setDataref()

    /**
     * Set the value of [swimmingspeed] column.
     *
     * @param  double $v new value
     * @return Oxygen The current object (for fluent API support)
     */
    public function setSwimmingspeed($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->swimmingspeed !== $v) {
            $this->swimmingspeed = $v;
            $this->modifiedColumns[] = OxygenPeer::SWIMMINGSPEED;
        }


        return $this;
    } // setSwimmingspeed()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return Oxygen The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = OxygenPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Oxygen The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = OxygenPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Oxygen The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = OxygenPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Oxygen The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = OxygenPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Oxygen The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = OxygenPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Oxygen The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = OxygenPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Oxygen The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = OxygenPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Oxygen The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = OxygenPeer::TS;
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
            $this->speccode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->stockcode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->oxygenrefno = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->testcode = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->familyoxref = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->speciesoxref = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->weight = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->number = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->sex = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->temp = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->salinity = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->oxygen = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->oxygenmgl = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->oxygencons = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->metaboliclevel = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->appliedstress = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->dataref = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->swimmingspeed = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->comment = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->entered = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->dateentered = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->modified = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->datemodified = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->expert = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->datechecked = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->ts = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 27; // 27 = OxygenPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Oxygen object", $e);
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
            $con = Propel::getConnection(OxygenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = OxygenPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(OxygenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = OxygenQuery::create()
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
            $con = Propel::getConnection(OxygenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                OxygenPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = OxygenPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . OxygenPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(OxygenPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(OxygenPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(OxygenPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(OxygenPeer::OXYGENREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`OxygenRefNo`';
        }
        if ($this->isColumnModified(OxygenPeer::TESTCODE)) {
            $modifiedColumns[':p' . $index++]  = '`TestCode`';
        }
        if ($this->isColumnModified(OxygenPeer::FAMILYOXREF)) {
            $modifiedColumns[':p' . $index++]  = '`FamilyOxRef`';
        }
        if ($this->isColumnModified(OxygenPeer::SPECIESOXREF)) {
            $modifiedColumns[':p' . $index++]  = '`SpeciesOxRef`';
        }
        if ($this->isColumnModified(OxygenPeer::WEIGHT)) {
            $modifiedColumns[':p' . $index++]  = '`Weight`';
        }
        if ($this->isColumnModified(OxygenPeer::NUMBER)) {
            $modifiedColumns[':p' . $index++]  = '`Number`';
        }
        if ($this->isColumnModified(OxygenPeer::SEX)) {
            $modifiedColumns[':p' . $index++]  = '`Sex`';
        }
        if ($this->isColumnModified(OxygenPeer::TEMP)) {
            $modifiedColumns[':p' . $index++]  = '`Temp`';
        }
        if ($this->isColumnModified(OxygenPeer::SALINITY)) {
            $modifiedColumns[':p' . $index++]  = '`Salinity`';
        }
        if ($this->isColumnModified(OxygenPeer::OXYGEN)) {
            $modifiedColumns[':p' . $index++]  = '`Oxygen`';
        }
        if ($this->isColumnModified(OxygenPeer::OXYGENMGL)) {
            $modifiedColumns[':p' . $index++]  = '`Oxygenmgl`';
        }
        if ($this->isColumnModified(OxygenPeer::OXYGENCONS)) {
            $modifiedColumns[':p' . $index++]  = '`OxygenCons`';
        }
        if ($this->isColumnModified(OxygenPeer::METABOLICLEVEL)) {
            $modifiedColumns[':p' . $index++]  = '`MetabolicLevel`';
        }
        if ($this->isColumnModified(OxygenPeer::APPLIEDSTRESS)) {
            $modifiedColumns[':p' . $index++]  = '`AppliedStress`';
        }
        if ($this->isColumnModified(OxygenPeer::DATAREF)) {
            $modifiedColumns[':p' . $index++]  = '`DataRef`';
        }
        if ($this->isColumnModified(OxygenPeer::SWIMMINGSPEED)) {
            $modifiedColumns[':p' . $index++]  = '`SwimmingSpeed`';
        }
        if ($this->isColumnModified(OxygenPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Comment`';
        }
        if ($this->isColumnModified(OxygenPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(OxygenPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(OxygenPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(OxygenPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(OxygenPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(OxygenPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(OxygenPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `oxygen` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`autoctr`':
                        $stmt->bindValue($identifier, $this->autoctr, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`OxygenRefNo`':
                        $stmt->bindValue($identifier, $this->oxygenrefno, PDO::PARAM_INT);
                        break;
                    case '`TestCode`':
                        $stmt->bindValue($identifier, $this->testcode, PDO::PARAM_STR);
                        break;
                    case '`FamilyOxRef`':
                        $stmt->bindValue($identifier, $this->familyoxref, PDO::PARAM_STR);
                        break;
                    case '`SpeciesOxRef`':
                        $stmt->bindValue($identifier, $this->speciesoxref, PDO::PARAM_STR);
                        break;
                    case '`Weight`':
                        $stmt->bindValue($identifier, $this->weight, PDO::PARAM_STR);
                        break;
                    case '`Number`':
                        $stmt->bindValue($identifier, $this->number, PDO::PARAM_INT);
                        break;
                    case '`Sex`':
                        $stmt->bindValue($identifier, $this->sex, PDO::PARAM_STR);
                        break;
                    case '`Temp`':
                        $stmt->bindValue($identifier, $this->temp, PDO::PARAM_STR);
                        break;
                    case '`Salinity`':
                        $stmt->bindValue($identifier, $this->salinity, PDO::PARAM_INT);
                        break;
                    case '`Oxygen`':
                        $stmt->bindValue($identifier, $this->oxygen, PDO::PARAM_INT);
                        break;
                    case '`Oxygenmgl`':
                        $stmt->bindValue($identifier, $this->oxygenmgl, PDO::PARAM_STR);
                        break;
                    case '`OxygenCons`':
                        $stmt->bindValue($identifier, $this->oxygencons, PDO::PARAM_STR);
                        break;
                    case '`MetabolicLevel`':
                        $stmt->bindValue($identifier, $this->metaboliclevel, PDO::PARAM_STR);
                        break;
                    case '`AppliedStress`':
                        $stmt->bindValue($identifier, $this->appliedstress, PDO::PARAM_STR);
                        break;
                    case '`DataRef`':
                        $stmt->bindValue($identifier, $this->dataref, PDO::PARAM_INT);
                        break;
                    case '`SwimmingSpeed`':
                        $stmt->bindValue($identifier, $this->swimmingspeed, PDO::PARAM_STR);
                        break;
                    case '`Comment`':
                        $stmt->bindValue($identifier, $this->comment, PDO::PARAM_STR);
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
                    case '`Expert`':
                        $stmt->bindValue($identifier, $this->expert, PDO::PARAM_INT);
                        break;
                    case '`DateChecked`':
                        $stmt->bindValue($identifier, $this->datechecked, PDO::PARAM_STR);
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


            if (($retval = OxygenPeer::doValidate($this, $columns)) !== true) {
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
        $pos = OxygenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getStockcode();
                break;
            case 3:
                return $this->getOxygenrefno();
                break;
            case 4:
                return $this->getTestcode();
                break;
            case 5:
                return $this->getFamilyoxref();
                break;
            case 6:
                return $this->getSpeciesoxref();
                break;
            case 7:
                return $this->getWeight();
                break;
            case 8:
                return $this->getNumber();
                break;
            case 9:
                return $this->getSex();
                break;
            case 10:
                return $this->getTemp();
                break;
            case 11:
                return $this->getSalinity();
                break;
            case 12:
                return $this->getOxygen();
                break;
            case 13:
                return $this->getOxygenmgl();
                break;
            case 14:
                return $this->getOxygencons();
                break;
            case 15:
                return $this->getMetaboliclevel();
                break;
            case 16:
                return $this->getAppliedstress();
                break;
            case 17:
                return $this->getDataref();
                break;
            case 18:
                return $this->getSwimmingspeed();
                break;
            case 19:
                return $this->getComment();
                break;
            case 20:
                return $this->getEntered();
                break;
            case 21:
                return $this->getDateentered();
                break;
            case 22:
                return $this->getModified();
                break;
            case 23:
                return $this->getDatemodified();
                break;
            case 24:
                return $this->getExpert();
                break;
            case 25:
                return $this->getDatechecked();
                break;
            case 26:
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
        if (isset($alreadyDumpedObjects['Oxygen'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Oxygen'][$this->getPrimaryKey()] = true;
        $keys = OxygenPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getSpeccode(),
            $keys[2] => $this->getStockcode(),
            $keys[3] => $this->getOxygenrefno(),
            $keys[4] => $this->getTestcode(),
            $keys[5] => $this->getFamilyoxref(),
            $keys[6] => $this->getSpeciesoxref(),
            $keys[7] => $this->getWeight(),
            $keys[8] => $this->getNumber(),
            $keys[9] => $this->getSex(),
            $keys[10] => $this->getTemp(),
            $keys[11] => $this->getSalinity(),
            $keys[12] => $this->getOxygen(),
            $keys[13] => $this->getOxygenmgl(),
            $keys[14] => $this->getOxygencons(),
            $keys[15] => $this->getMetaboliclevel(),
            $keys[16] => $this->getAppliedstress(),
            $keys[17] => $this->getDataref(),
            $keys[18] => $this->getSwimmingspeed(),
            $keys[19] => $this->getComment(),
            $keys[20] => $this->getEntered(),
            $keys[21] => $this->getDateentered(),
            $keys[22] => $this->getModified(),
            $keys[23] => $this->getDatemodified(),
            $keys[24] => $this->getExpert(),
            $keys[25] => $this->getDatechecked(),
            $keys[26] => $this->getTs(),
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
        $pos = OxygenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setStockcode($value);
                break;
            case 3:
                $this->setOxygenrefno($value);
                break;
            case 4:
                $this->setTestcode($value);
                break;
            case 5:
                $this->setFamilyoxref($value);
                break;
            case 6:
                $this->setSpeciesoxref($value);
                break;
            case 7:
                $this->setWeight($value);
                break;
            case 8:
                $this->setNumber($value);
                break;
            case 9:
                $this->setSex($value);
                break;
            case 10:
                $this->setTemp($value);
                break;
            case 11:
                $this->setSalinity($value);
                break;
            case 12:
                $this->setOxygen($value);
                break;
            case 13:
                $this->setOxygenmgl($value);
                break;
            case 14:
                $this->setOxygencons($value);
                break;
            case 15:
                $this->setMetaboliclevel($value);
                break;
            case 16:
                $this->setAppliedstress($value);
                break;
            case 17:
                $this->setDataref($value);
                break;
            case 18:
                $this->setSwimmingspeed($value);
                break;
            case 19:
                $this->setComment($value);
                break;
            case 20:
                $this->setEntered($value);
                break;
            case 21:
                $this->setDateentered($value);
                break;
            case 22:
                $this->setModified($value);
                break;
            case 23:
                $this->setDatemodified($value);
                break;
            case 24:
                $this->setExpert($value);
                break;
            case 25:
                $this->setDatechecked($value);
                break;
            case 26:
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
        $keys = OxygenPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSpeccode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setStockcode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOxygenrefno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTestcode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setFamilyoxref($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSpeciesoxref($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setWeight($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setNumber($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setSex($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTemp($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setSalinity($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setOxygen($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setOxygenmgl($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setOxygencons($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setMetaboliclevel($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setAppliedstress($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setDataref($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setSwimmingspeed($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setComment($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setEntered($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDateentered($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setModified($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDatemodified($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setExpert($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDatechecked($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setTs($arr[$keys[26]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OxygenPeer::DATABASE_NAME);

        if ($this->isColumnModified(OxygenPeer::AUTOCTR)) $criteria->add(OxygenPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(OxygenPeer::SPECCODE)) $criteria->add(OxygenPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(OxygenPeer::STOCKCODE)) $criteria->add(OxygenPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(OxygenPeer::OXYGENREFNO)) $criteria->add(OxygenPeer::OXYGENREFNO, $this->oxygenrefno);
        if ($this->isColumnModified(OxygenPeer::TESTCODE)) $criteria->add(OxygenPeer::TESTCODE, $this->testcode);
        if ($this->isColumnModified(OxygenPeer::FAMILYOXREF)) $criteria->add(OxygenPeer::FAMILYOXREF, $this->familyoxref);
        if ($this->isColumnModified(OxygenPeer::SPECIESOXREF)) $criteria->add(OxygenPeer::SPECIESOXREF, $this->speciesoxref);
        if ($this->isColumnModified(OxygenPeer::WEIGHT)) $criteria->add(OxygenPeer::WEIGHT, $this->weight);
        if ($this->isColumnModified(OxygenPeer::NUMBER)) $criteria->add(OxygenPeer::NUMBER, $this->number);
        if ($this->isColumnModified(OxygenPeer::SEX)) $criteria->add(OxygenPeer::SEX, $this->sex);
        if ($this->isColumnModified(OxygenPeer::TEMP)) $criteria->add(OxygenPeer::TEMP, $this->temp);
        if ($this->isColumnModified(OxygenPeer::SALINITY)) $criteria->add(OxygenPeer::SALINITY, $this->salinity);
        if ($this->isColumnModified(OxygenPeer::OXYGEN)) $criteria->add(OxygenPeer::OXYGEN, $this->oxygen);
        if ($this->isColumnModified(OxygenPeer::OXYGENMGL)) $criteria->add(OxygenPeer::OXYGENMGL, $this->oxygenmgl);
        if ($this->isColumnModified(OxygenPeer::OXYGENCONS)) $criteria->add(OxygenPeer::OXYGENCONS, $this->oxygencons);
        if ($this->isColumnModified(OxygenPeer::METABOLICLEVEL)) $criteria->add(OxygenPeer::METABOLICLEVEL, $this->metaboliclevel);
        if ($this->isColumnModified(OxygenPeer::APPLIEDSTRESS)) $criteria->add(OxygenPeer::APPLIEDSTRESS, $this->appliedstress);
        if ($this->isColumnModified(OxygenPeer::DATAREF)) $criteria->add(OxygenPeer::DATAREF, $this->dataref);
        if ($this->isColumnModified(OxygenPeer::SWIMMINGSPEED)) $criteria->add(OxygenPeer::SWIMMINGSPEED, $this->swimmingspeed);
        if ($this->isColumnModified(OxygenPeer::COMMENT)) $criteria->add(OxygenPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(OxygenPeer::ENTERED)) $criteria->add(OxygenPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(OxygenPeer::DATEENTERED)) $criteria->add(OxygenPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(OxygenPeer::MODIFIED)) $criteria->add(OxygenPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(OxygenPeer::DATEMODIFIED)) $criteria->add(OxygenPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(OxygenPeer::EXPERT)) $criteria->add(OxygenPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(OxygenPeer::DATECHECKED)) $criteria->add(OxygenPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(OxygenPeer::TS)) $criteria->add(OxygenPeer::TS, $this->ts);

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
        $criteria = new Criteria(OxygenPeer::DATABASE_NAME);
        $criteria->add(OxygenPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of Oxygen (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setOxygenrefno($this->getOxygenrefno());
        $copyObj->setTestcode($this->getTestcode());
        $copyObj->setFamilyoxref($this->getFamilyoxref());
        $copyObj->setSpeciesoxref($this->getSpeciesoxref());
        $copyObj->setWeight($this->getWeight());
        $copyObj->setNumber($this->getNumber());
        $copyObj->setSex($this->getSex());
        $copyObj->setTemp($this->getTemp());
        $copyObj->setSalinity($this->getSalinity());
        $copyObj->setOxygen($this->getOxygen());
        $copyObj->setOxygenmgl($this->getOxygenmgl());
        $copyObj->setOxygencons($this->getOxygencons());
        $copyObj->setMetaboliclevel($this->getMetaboliclevel());
        $copyObj->setAppliedstress($this->getAppliedstress());
        $copyObj->setDataref($this->getDataref());
        $copyObj->setSwimmingspeed($this->getSwimmingspeed());
        $copyObj->setComment($this->getComment());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
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
     * @return Oxygen Clone of current object.
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
     * @return OxygenPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OxygenPeer();
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
        $this->stockcode = null;
        $this->oxygenrefno = null;
        $this->testcode = null;
        $this->familyoxref = null;
        $this->speciesoxref = null;
        $this->weight = null;
        $this->number = null;
        $this->sex = null;
        $this->temp = null;
        $this->salinity = null;
        $this->oxygen = null;
        $this->oxygenmgl = null;
        $this->oxygencons = null;
        $this->metaboliclevel = null;
        $this->appliedstress = null;
        $this->dataref = null;
        $this->swimmingspeed = null;
        $this->comment = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
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
        return (string) $this->exportTo(OxygenPeer::DEFAULT_STRING_FORMAT);
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
