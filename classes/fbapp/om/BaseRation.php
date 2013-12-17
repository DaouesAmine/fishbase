<?php


/**
 * Base class that represents a row from the 'ration' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseRation extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RationPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RationPeer
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
     * The value for the stockcode field.
     * @var        int
     */
    protected $stockcode;

    /**
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the rdrefno field.
     * @var        int
     */
    protected $rdrefno;

    /**
     * The value for the dataref1 field.
     * @var        int
     */
    protected $dataref1;

    /**
     * The value for the evacrate1 field.
     * @var        double
     */
    protected $evacrate1;

    /**
     * The value for the foodi field.
     * @var        string
     */
    protected $foodi;

    /**
     * The value for the rd1 field.
     * @var        double
     */
    protected $rd1;

    /**
     * The value for the foodii field.
     * @var        string
     */
    protected $foodii;

    /**
     * The value for the gce field.
     * @var        double
     */
    protected $gce;

    /**
     * The value for the foodname field.
     * @var        string
     */
    protected $foodname;

    /**
     * The value for the tbw field.
     * @var        double
     */
    protected $tbw;

    /**
     * The value for the water field.
     * @var        double
     */
    protected $water;

    /**
     * The value for the locality field.
     * @var        string
     */
    protected $locality;

    /**
     * The value for the salinity field.
     * @var        string
     */
    protected $salinity;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the comrdk1 field.
     * @var        string
     */
    protected $comrdk1;

    /**
     * The value for the methrdevacref field.
     * @var        int
     */
    protected $methrdevacref;

    /**
     * The value for the evacrate2 field.
     * @var        string
     */
    protected $evacrate2;

    /**
     * The value for the feedbegin1 field.
     * @var        string
     */
    protected $feedbegin1;

    /**
     * The value for the feedbegin2 field.
     * @var        string
     */
    protected $feedbegin2;

    /**
     * The value for the rd2 field.
     * @var        string
     */
    protected $rd2;

    /**
     * The value for the feedstop1 field.
     * @var        string
     */
    protected $feedstop1;

    /**
     * The value for the feedstop2 field.
     * @var        string
     */
    protected $feedstop2;

    /**
     * The value for the dailyfeedingcycle field.
     * @var        string
     */
    protected $dailyfeedingcycle;

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
     * Get the [stockcode] column value.
     *
     * @return int
     */
    public function getStockcode()
    {

        return $this->stockcode;
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
     * Get the [rdrefno] column value.
     *
     * @return int
     */
    public function getRdrefno()
    {

        return $this->rdrefno;
    }

    /**
     * Get the [dataref1] column value.
     *
     * @return int
     */
    public function getDataref1()
    {

        return $this->dataref1;
    }

    /**
     * Get the [evacrate1] column value.
     *
     * @return double
     */
    public function getEvacrate1()
    {

        return $this->evacrate1;
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
     * Get the [rd1] column value.
     *
     * @return double
     */
    public function getRd1()
    {

        return $this->rd1;
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
     * Get the [gce] column value.
     *
     * @return double
     */
    public function getGce()
    {

        return $this->gce;
    }

    /**
     * Get the [foodname] column value.
     *
     * @return string
     */
    public function getFoodname()
    {

        return $this->foodname;
    }

    /**
     * Get the [tbw] column value.
     *
     * @return double
     */
    public function getTbw()
    {

        return $this->tbw;
    }

    /**
     * Get the [water] column value.
     *
     * @return double
     */
    public function getWater()
    {

        return $this->water;
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
     * Get the [salinity] column value.
     *
     * @return string
     */
    public function getSalinity()
    {

        return $this->salinity;
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
     * Get the [comrdk1] column value.
     *
     * @return string
     */
    public function getComrdk1()
    {

        return $this->comrdk1;
    }

    /**
     * Get the [methrdevacref] column value.
     *
     * @return int
     */
    public function getMethrdevacref()
    {

        return $this->methrdevacref;
    }

    /**
     * Get the [evacrate2] column value.
     *
     * @return string
     */
    public function getEvacrate2()
    {

        return $this->evacrate2;
    }

    /**
     * Get the [optionally formatted] temporal [feedbegin1] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFeedbegin1($format = '%X')
    {
        if ($this->feedbegin1 === null) {
            return null;
        }


        try {
            $dt = new DateTime($this->feedbegin1);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->feedbegin1, true), $x);
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
     * Get the [optionally formatted] temporal [feedbegin2] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFeedbegin2($format = '%X')
    {
        if ($this->feedbegin2 === null) {
            return null;
        }


        try {
            $dt = new DateTime($this->feedbegin2);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->feedbegin2, true), $x);
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
     * Get the [rd2] column value.
     *
     * @return string
     */
    public function getRd2()
    {

        return $this->rd2;
    }

    /**
     * Get the [optionally formatted] temporal [feedstop1] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFeedstop1($format = '%X')
    {
        if ($this->feedstop1 === null) {
            return null;
        }


        try {
            $dt = new DateTime($this->feedstop1);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->feedstop1, true), $x);
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
     * Get the [optionally formatted] temporal [feedstop2] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFeedstop2($format = '%X')
    {
        if ($this->feedstop2 === null) {
            return null;
        }


        try {
            $dt = new DateTime($this->feedstop2);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->feedstop2, true), $x);
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
     * Get the [dailyfeedingcycle] column value.
     *
     * @return string
     */
    public function getDailyfeedingcycle()
    {

        return $this->dailyfeedingcycle;
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
     * @return Ration The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = RationPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = RationPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = RationPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [rdrefno] column.
     *
     * @param  int $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setRdrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rdrefno !== $v) {
            $this->rdrefno = $v;
            $this->modifiedColumns[] = RationPeer::RDREFNO;
        }


        return $this;
    } // setRdrefno()

    /**
     * Set the value of [dataref1] column.
     *
     * @param  int $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setDataref1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dataref1 !== $v) {
            $this->dataref1 = $v;
            $this->modifiedColumns[] = RationPeer::DATAREF1;
        }


        return $this;
    } // setDataref1()

    /**
     * Set the value of [evacrate1] column.
     *
     * @param  double $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setEvacrate1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->evacrate1 !== $v) {
            $this->evacrate1 = $v;
            $this->modifiedColumns[] = RationPeer::EVACRATE1;
        }


        return $this;
    } // setEvacrate1()

    /**
     * Set the value of [foodi] column.
     *
     * @param  string $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setFoodi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->foodi !== $v) {
            $this->foodi = $v;
            $this->modifiedColumns[] = RationPeer::FOODI;
        }


        return $this;
    } // setFoodi()

    /**
     * Set the value of [rd1] column.
     *
     * @param  double $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setRd1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->rd1 !== $v) {
            $this->rd1 = $v;
            $this->modifiedColumns[] = RationPeer::RD1;
        }


        return $this;
    } // setRd1()

    /**
     * Set the value of [foodii] column.
     *
     * @param  string $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setFoodii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->foodii !== $v) {
            $this->foodii = $v;
            $this->modifiedColumns[] = RationPeer::FOODII;
        }


        return $this;
    } // setFoodii()

    /**
     * Set the value of [gce] column.
     *
     * @param  double $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setGce($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->gce !== $v) {
            $this->gce = $v;
            $this->modifiedColumns[] = RationPeer::GCE;
        }


        return $this;
    } // setGce()

    /**
     * Set the value of [foodname] column.
     *
     * @param  string $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setFoodname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->foodname !== $v) {
            $this->foodname = $v;
            $this->modifiedColumns[] = RationPeer::FOODNAME;
        }


        return $this;
    } // setFoodname()

    /**
     * Set the value of [tbw] column.
     *
     * @param  double $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setTbw($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tbw !== $v) {
            $this->tbw = $v;
            $this->modifiedColumns[] = RationPeer::TBW;
        }


        return $this;
    } // setTbw()

    /**
     * Set the value of [water] column.
     *
     * @param  double $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setWater($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->water !== $v) {
            $this->water = $v;
            $this->modifiedColumns[] = RationPeer::WATER;
        }


        return $this;
    } // setWater()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = RationPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [salinity] column.
     *
     * @param  string $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setSalinity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->salinity !== $v) {
            $this->salinity = $v;
            $this->modifiedColumns[] = RationPeer::SALINITY;
        }


        return $this;
    } // setSalinity()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = RationPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [comrdk1] column.
     *
     * @param  string $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setComrdk1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comrdk1 !== $v) {
            $this->comrdk1 = $v;
            $this->modifiedColumns[] = RationPeer::COMRDK1;
        }


        return $this;
    } // setComrdk1()

    /**
     * Set the value of [methrdevacref] column.
     *
     * @param  int $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setMethrdevacref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->methrdevacref !== $v) {
            $this->methrdevacref = $v;
            $this->modifiedColumns[] = RationPeer::METHRDEVACREF;
        }


        return $this;
    } // setMethrdevacref()

    /**
     * Set the value of [evacrate2] column.
     *
     * @param  string $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setEvacrate2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->evacrate2 !== $v) {
            $this->evacrate2 = $v;
            $this->modifiedColumns[] = RationPeer::EVACRATE2;
        }


        return $this;
    } // setEvacrate2()

    /**
     * Sets the value of [feedbegin1] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ration The current object (for fluent API support)
     */
    public function setFeedbegin1($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->feedbegin1 !== null || $dt !== null) {
            $currentDateAsString = ($this->feedbegin1 !== null && $tmpDt = new DateTime($this->feedbegin1)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->feedbegin1 = $newDateAsString;
                $this->modifiedColumns[] = RationPeer::FEEDBEGIN1;
            }
        } // if either are not null


        return $this;
    } // setFeedbegin1()

    /**
     * Sets the value of [feedbegin2] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ration The current object (for fluent API support)
     */
    public function setFeedbegin2($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->feedbegin2 !== null || $dt !== null) {
            $currentDateAsString = ($this->feedbegin2 !== null && $tmpDt = new DateTime($this->feedbegin2)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->feedbegin2 = $newDateAsString;
                $this->modifiedColumns[] = RationPeer::FEEDBEGIN2;
            }
        } // if either are not null


        return $this;
    } // setFeedbegin2()

    /**
     * Set the value of [rd2] column.
     *
     * @param  string $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setRd2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->rd2 !== $v) {
            $this->rd2 = $v;
            $this->modifiedColumns[] = RationPeer::RD2;
        }


        return $this;
    } // setRd2()

    /**
     * Sets the value of [feedstop1] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ration The current object (for fluent API support)
     */
    public function setFeedstop1($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->feedstop1 !== null || $dt !== null) {
            $currentDateAsString = ($this->feedstop1 !== null && $tmpDt = new DateTime($this->feedstop1)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->feedstop1 = $newDateAsString;
                $this->modifiedColumns[] = RationPeer::FEEDSTOP1;
            }
        } // if either are not null


        return $this;
    } // setFeedstop1()

    /**
     * Sets the value of [feedstop2] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ration The current object (for fluent API support)
     */
    public function setFeedstop2($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->feedstop2 !== null || $dt !== null) {
            $currentDateAsString = ($this->feedstop2 !== null && $tmpDt = new DateTime($this->feedstop2)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->feedstop2 = $newDateAsString;
                $this->modifiedColumns[] = RationPeer::FEEDSTOP2;
            }
        } // if either are not null


        return $this;
    } // setFeedstop2()

    /**
     * Set the value of [dailyfeedingcycle] column.
     *
     * @param  string $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setDailyfeedingcycle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dailyfeedingcycle !== $v) {
            $this->dailyfeedingcycle = $v;
            $this->modifiedColumns[] = RationPeer::DAILYFEEDINGCYCLE;
        }


        return $this;
    } // setDailyfeedingcycle()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = RationPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = RationPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ration The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = RationPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = RationPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ration The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = RationPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Ration The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = RationPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ration The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = RationPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ration The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = RationPeer::TS;
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
            $this->stockcode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->speccode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->rdrefno = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->dataref1 = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->evacrate1 = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
            $this->foodi = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->rd1 = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->foodii = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->gce = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->foodname = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->tbw = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->water = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->locality = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->salinity = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->c_code = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->comrdk1 = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->methrdevacref = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->evacrate2 = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->feedbegin1 = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->feedbegin2 = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->rd2 = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->feedstop1 = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->feedstop2 = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->dailyfeedingcycle = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->comment = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->entered = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->dateentered = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->modified = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->datemodified = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->expert = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->datechecked = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->ts = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 33; // 33 = RationPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Ration object", $e);
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
            $con = Propel::getConnection(RationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RationPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(RationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RationQuery::create()
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
            $con = Propel::getConnection(RationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                RationPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = RationPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . RationPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(RationPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`AutoCtr`';
        }
        if ($this->isColumnModified(RationPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(RationPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(RationPeer::RDREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`RDRefNo`';
        }
        if ($this->isColumnModified(RationPeer::DATAREF1)) {
            $modifiedColumns[':p' . $index++]  = '`DataRef1`';
        }
        if ($this->isColumnModified(RationPeer::EVACRATE1)) {
            $modifiedColumns[':p' . $index++]  = '`EvacRate1`';
        }
        if ($this->isColumnModified(RationPeer::FOODI)) {
            $modifiedColumns[':p' . $index++]  = '`FoodI`';
        }
        if ($this->isColumnModified(RationPeer::RD1)) {
            $modifiedColumns[':p' . $index++]  = '`Rd1`';
        }
        if ($this->isColumnModified(RationPeer::FOODII)) {
            $modifiedColumns[':p' . $index++]  = '`FoodII`';
        }
        if ($this->isColumnModified(RationPeer::GCE)) {
            $modifiedColumns[':p' . $index++]  = '`GCE`';
        }
        if ($this->isColumnModified(RationPeer::FOODNAME)) {
            $modifiedColumns[':p' . $index++]  = '`FoodName`';
        }
        if ($this->isColumnModified(RationPeer::TBW)) {
            $modifiedColumns[':p' . $index++]  = '`TBW`';
        }
        if ($this->isColumnModified(RationPeer::WATER)) {
            $modifiedColumns[':p' . $index++]  = '`Water`';
        }
        if ($this->isColumnModified(RationPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(RationPeer::SALINITY)) {
            $modifiedColumns[':p' . $index++]  = '`Salinity`';
        }
        if ($this->isColumnModified(RationPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(RationPeer::COMRDK1)) {
            $modifiedColumns[':p' . $index++]  = '`ComRDK1`';
        }
        if ($this->isColumnModified(RationPeer::METHRDEVACREF)) {
            $modifiedColumns[':p' . $index++]  = '`MethRDEvacRef`';
        }
        if ($this->isColumnModified(RationPeer::EVACRATE2)) {
            $modifiedColumns[':p' . $index++]  = '`EvacRate2`';
        }
        if ($this->isColumnModified(RationPeer::FEEDBEGIN1)) {
            $modifiedColumns[':p' . $index++]  = '`FeedBegin1`';
        }
        if ($this->isColumnModified(RationPeer::FEEDBEGIN2)) {
            $modifiedColumns[':p' . $index++]  = '`FeedBegin2`';
        }
        if ($this->isColumnModified(RationPeer::RD2)) {
            $modifiedColumns[':p' . $index++]  = '`RD2`';
        }
        if ($this->isColumnModified(RationPeer::FEEDSTOP1)) {
            $modifiedColumns[':p' . $index++]  = '`FeedStop1`';
        }
        if ($this->isColumnModified(RationPeer::FEEDSTOP2)) {
            $modifiedColumns[':p' . $index++]  = '`FeedStop2`';
        }
        if ($this->isColumnModified(RationPeer::DAILYFEEDINGCYCLE)) {
            $modifiedColumns[':p' . $index++]  = '`DailyFeedingCycle`';
        }
        if ($this->isColumnModified(RationPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Comment`';
        }
        if ($this->isColumnModified(RationPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(RationPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(RationPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(RationPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(RationPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(RationPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(RationPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `ration` (%s) VALUES (%s)',
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
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`RDRefNo`':
                        $stmt->bindValue($identifier, $this->rdrefno, PDO::PARAM_INT);
                        break;
                    case '`DataRef1`':
                        $stmt->bindValue($identifier, $this->dataref1, PDO::PARAM_INT);
                        break;
                    case '`EvacRate1`':
                        $stmt->bindValue($identifier, $this->evacrate1, PDO::PARAM_STR);
                        break;
                    case '`FoodI`':
                        $stmt->bindValue($identifier, $this->foodi, PDO::PARAM_STR);
                        break;
                    case '`Rd1`':
                        $stmt->bindValue($identifier, $this->rd1, PDO::PARAM_STR);
                        break;
                    case '`FoodII`':
                        $stmt->bindValue($identifier, $this->foodii, PDO::PARAM_STR);
                        break;
                    case '`GCE`':
                        $stmt->bindValue($identifier, $this->gce, PDO::PARAM_STR);
                        break;
                    case '`FoodName`':
                        $stmt->bindValue($identifier, $this->foodname, PDO::PARAM_STR);
                        break;
                    case '`TBW`':
                        $stmt->bindValue($identifier, $this->tbw, PDO::PARAM_STR);
                        break;
                    case '`Water`':
                        $stmt->bindValue($identifier, $this->water, PDO::PARAM_STR);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`Salinity`':
                        $stmt->bindValue($identifier, $this->salinity, PDO::PARAM_STR);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`ComRDK1`':
                        $stmt->bindValue($identifier, $this->comrdk1, PDO::PARAM_STR);
                        break;
                    case '`MethRDEvacRef`':
                        $stmt->bindValue($identifier, $this->methrdevacref, PDO::PARAM_INT);
                        break;
                    case '`EvacRate2`':
                        $stmt->bindValue($identifier, $this->evacrate2, PDO::PARAM_STR);
                        break;
                    case '`FeedBegin1`':
                        $stmt->bindValue($identifier, $this->feedbegin1, PDO::PARAM_STR);
                        break;
                    case '`FeedBegin2`':
                        $stmt->bindValue($identifier, $this->feedbegin2, PDO::PARAM_STR);
                        break;
                    case '`RD2`':
                        $stmt->bindValue($identifier, $this->rd2, PDO::PARAM_STR);
                        break;
                    case '`FeedStop1`':
                        $stmt->bindValue($identifier, $this->feedstop1, PDO::PARAM_STR);
                        break;
                    case '`FeedStop2`':
                        $stmt->bindValue($identifier, $this->feedstop2, PDO::PARAM_STR);
                        break;
                    case '`DailyFeedingCycle`':
                        $stmt->bindValue($identifier, $this->dailyfeedingcycle, PDO::PARAM_STR);
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


            if (($retval = RationPeer::doValidate($this, $columns)) !== true) {
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
        $pos = RationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getStockcode();
                break;
            case 2:
                return $this->getSpeccode();
                break;
            case 3:
                return $this->getRdrefno();
                break;
            case 4:
                return $this->getDataref1();
                break;
            case 5:
                return $this->getEvacrate1();
                break;
            case 6:
                return $this->getFoodi();
                break;
            case 7:
                return $this->getRd1();
                break;
            case 8:
                return $this->getFoodii();
                break;
            case 9:
                return $this->getGce();
                break;
            case 10:
                return $this->getFoodname();
                break;
            case 11:
                return $this->getTbw();
                break;
            case 12:
                return $this->getWater();
                break;
            case 13:
                return $this->getLocality();
                break;
            case 14:
                return $this->getSalinity();
                break;
            case 15:
                return $this->getCCode();
                break;
            case 16:
                return $this->getComrdk1();
                break;
            case 17:
                return $this->getMethrdevacref();
                break;
            case 18:
                return $this->getEvacrate2();
                break;
            case 19:
                return $this->getFeedbegin1();
                break;
            case 20:
                return $this->getFeedbegin2();
                break;
            case 21:
                return $this->getRd2();
                break;
            case 22:
                return $this->getFeedstop1();
                break;
            case 23:
                return $this->getFeedstop2();
                break;
            case 24:
                return $this->getDailyfeedingcycle();
                break;
            case 25:
                return $this->getComment();
                break;
            case 26:
                return $this->getEntered();
                break;
            case 27:
                return $this->getDateentered();
                break;
            case 28:
                return $this->getModified();
                break;
            case 29:
                return $this->getDatemodified();
                break;
            case 30:
                return $this->getExpert();
                break;
            case 31:
                return $this->getDatechecked();
                break;
            case 32:
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
        if (isset($alreadyDumpedObjects['Ration'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Ration'][$this->getPrimaryKey()] = true;
        $keys = RationPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getStockcode(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getRdrefno(),
            $keys[4] => $this->getDataref1(),
            $keys[5] => $this->getEvacrate1(),
            $keys[6] => $this->getFoodi(),
            $keys[7] => $this->getRd1(),
            $keys[8] => $this->getFoodii(),
            $keys[9] => $this->getGce(),
            $keys[10] => $this->getFoodname(),
            $keys[11] => $this->getTbw(),
            $keys[12] => $this->getWater(),
            $keys[13] => $this->getLocality(),
            $keys[14] => $this->getSalinity(),
            $keys[15] => $this->getCCode(),
            $keys[16] => $this->getComrdk1(),
            $keys[17] => $this->getMethrdevacref(),
            $keys[18] => $this->getEvacrate2(),
            $keys[19] => $this->getFeedbegin1(),
            $keys[20] => $this->getFeedbegin2(),
            $keys[21] => $this->getRd2(),
            $keys[22] => $this->getFeedstop1(),
            $keys[23] => $this->getFeedstop2(),
            $keys[24] => $this->getDailyfeedingcycle(),
            $keys[25] => $this->getComment(),
            $keys[26] => $this->getEntered(),
            $keys[27] => $this->getDateentered(),
            $keys[28] => $this->getModified(),
            $keys[29] => $this->getDatemodified(),
            $keys[30] => $this->getExpert(),
            $keys[31] => $this->getDatechecked(),
            $keys[32] => $this->getTs(),
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
        $pos = RationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setStockcode($value);
                break;
            case 2:
                $this->setSpeccode($value);
                break;
            case 3:
                $this->setRdrefno($value);
                break;
            case 4:
                $this->setDataref1($value);
                break;
            case 5:
                $this->setEvacrate1($value);
                break;
            case 6:
                $this->setFoodi($value);
                break;
            case 7:
                $this->setRd1($value);
                break;
            case 8:
                $this->setFoodii($value);
                break;
            case 9:
                $this->setGce($value);
                break;
            case 10:
                $this->setFoodname($value);
                break;
            case 11:
                $this->setTbw($value);
                break;
            case 12:
                $this->setWater($value);
                break;
            case 13:
                $this->setLocality($value);
                break;
            case 14:
                $this->setSalinity($value);
                break;
            case 15:
                $this->setCCode($value);
                break;
            case 16:
                $this->setComrdk1($value);
                break;
            case 17:
                $this->setMethrdevacref($value);
                break;
            case 18:
                $this->setEvacrate2($value);
                break;
            case 19:
                $this->setFeedbegin1($value);
                break;
            case 20:
                $this->setFeedbegin2($value);
                break;
            case 21:
                $this->setRd2($value);
                break;
            case 22:
                $this->setFeedstop1($value);
                break;
            case 23:
                $this->setFeedstop2($value);
                break;
            case 24:
                $this->setDailyfeedingcycle($value);
                break;
            case 25:
                $this->setComment($value);
                break;
            case 26:
                $this->setEntered($value);
                break;
            case 27:
                $this->setDateentered($value);
                break;
            case 28:
                $this->setModified($value);
                break;
            case 29:
                $this->setDatemodified($value);
                break;
            case 30:
                $this->setExpert($value);
                break;
            case 31:
                $this->setDatechecked($value);
                break;
            case 32:
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
        $keys = RationPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRdrefno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDataref1($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEvacrate1($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setFoodi($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setRd1($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setFoodii($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setGce($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setFoodname($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setTbw($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setWater($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setLocality($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setSalinity($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setCCode($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setComrdk1($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setMethrdevacref($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setEvacrate2($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setFeedbegin1($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setFeedbegin2($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setRd2($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setFeedstop1($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setFeedstop2($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setDailyfeedingcycle($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setComment($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setEntered($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDateentered($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setModified($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setDatemodified($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setExpert($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setDatechecked($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setTs($arr[$keys[32]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RationPeer::DATABASE_NAME);

        if ($this->isColumnModified(RationPeer::AUTOCTR)) $criteria->add(RationPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(RationPeer::STOCKCODE)) $criteria->add(RationPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(RationPeer::SPECCODE)) $criteria->add(RationPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(RationPeer::RDREFNO)) $criteria->add(RationPeer::RDREFNO, $this->rdrefno);
        if ($this->isColumnModified(RationPeer::DATAREF1)) $criteria->add(RationPeer::DATAREF1, $this->dataref1);
        if ($this->isColumnModified(RationPeer::EVACRATE1)) $criteria->add(RationPeer::EVACRATE1, $this->evacrate1);
        if ($this->isColumnModified(RationPeer::FOODI)) $criteria->add(RationPeer::FOODI, $this->foodi);
        if ($this->isColumnModified(RationPeer::RD1)) $criteria->add(RationPeer::RD1, $this->rd1);
        if ($this->isColumnModified(RationPeer::FOODII)) $criteria->add(RationPeer::FOODII, $this->foodii);
        if ($this->isColumnModified(RationPeer::GCE)) $criteria->add(RationPeer::GCE, $this->gce);
        if ($this->isColumnModified(RationPeer::FOODNAME)) $criteria->add(RationPeer::FOODNAME, $this->foodname);
        if ($this->isColumnModified(RationPeer::TBW)) $criteria->add(RationPeer::TBW, $this->tbw);
        if ($this->isColumnModified(RationPeer::WATER)) $criteria->add(RationPeer::WATER, $this->water);
        if ($this->isColumnModified(RationPeer::LOCALITY)) $criteria->add(RationPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(RationPeer::SALINITY)) $criteria->add(RationPeer::SALINITY, $this->salinity);
        if ($this->isColumnModified(RationPeer::C_CODE)) $criteria->add(RationPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(RationPeer::COMRDK1)) $criteria->add(RationPeer::COMRDK1, $this->comrdk1);
        if ($this->isColumnModified(RationPeer::METHRDEVACREF)) $criteria->add(RationPeer::METHRDEVACREF, $this->methrdevacref);
        if ($this->isColumnModified(RationPeer::EVACRATE2)) $criteria->add(RationPeer::EVACRATE2, $this->evacrate2);
        if ($this->isColumnModified(RationPeer::FEEDBEGIN1)) $criteria->add(RationPeer::FEEDBEGIN1, $this->feedbegin1);
        if ($this->isColumnModified(RationPeer::FEEDBEGIN2)) $criteria->add(RationPeer::FEEDBEGIN2, $this->feedbegin2);
        if ($this->isColumnModified(RationPeer::RD2)) $criteria->add(RationPeer::RD2, $this->rd2);
        if ($this->isColumnModified(RationPeer::FEEDSTOP1)) $criteria->add(RationPeer::FEEDSTOP1, $this->feedstop1);
        if ($this->isColumnModified(RationPeer::FEEDSTOP2)) $criteria->add(RationPeer::FEEDSTOP2, $this->feedstop2);
        if ($this->isColumnModified(RationPeer::DAILYFEEDINGCYCLE)) $criteria->add(RationPeer::DAILYFEEDINGCYCLE, $this->dailyfeedingcycle);
        if ($this->isColumnModified(RationPeer::COMMENT)) $criteria->add(RationPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(RationPeer::ENTERED)) $criteria->add(RationPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(RationPeer::DATEENTERED)) $criteria->add(RationPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(RationPeer::MODIFIED)) $criteria->add(RationPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(RationPeer::DATEMODIFIED)) $criteria->add(RationPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(RationPeer::EXPERT)) $criteria->add(RationPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(RationPeer::DATECHECKED)) $criteria->add(RationPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(RationPeer::TS)) $criteria->add(RationPeer::TS, $this->ts);

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
        $criteria = new Criteria(RationPeer::DATABASE_NAME);
        $criteria->add(RationPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of Ration (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setRdrefno($this->getRdrefno());
        $copyObj->setDataref1($this->getDataref1());
        $copyObj->setEvacrate1($this->getEvacrate1());
        $copyObj->setFoodi($this->getFoodi());
        $copyObj->setRd1($this->getRd1());
        $copyObj->setFoodii($this->getFoodii());
        $copyObj->setGce($this->getGce());
        $copyObj->setFoodname($this->getFoodname());
        $copyObj->setTbw($this->getTbw());
        $copyObj->setWater($this->getWater());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setSalinity($this->getSalinity());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setComrdk1($this->getComrdk1());
        $copyObj->setMethrdevacref($this->getMethrdevacref());
        $copyObj->setEvacrate2($this->getEvacrate2());
        $copyObj->setFeedbegin1($this->getFeedbegin1());
        $copyObj->setFeedbegin2($this->getFeedbegin2());
        $copyObj->setRd2($this->getRd2());
        $copyObj->setFeedstop1($this->getFeedstop1());
        $copyObj->setFeedstop2($this->getFeedstop2());
        $copyObj->setDailyfeedingcycle($this->getDailyfeedingcycle());
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
     * @return Ration Clone of current object.
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
     * @return RationPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RationPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->stockcode = null;
        $this->speccode = null;
        $this->rdrefno = null;
        $this->dataref1 = null;
        $this->evacrate1 = null;
        $this->foodi = null;
        $this->rd1 = null;
        $this->foodii = null;
        $this->gce = null;
        $this->foodname = null;
        $this->tbw = null;
        $this->water = null;
        $this->locality = null;
        $this->salinity = null;
        $this->c_code = null;
        $this->comrdk1 = null;
        $this->methrdevacref = null;
        $this->evacrate2 = null;
        $this->feedbegin1 = null;
        $this->feedbegin2 = null;
        $this->rd2 = null;
        $this->feedstop1 = null;
        $this->feedstop2 = null;
        $this->dailyfeedingcycle = null;
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
        return (string) $this->exportTo(RationPeer::DEFAULT_STRING_FORMAT);
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
