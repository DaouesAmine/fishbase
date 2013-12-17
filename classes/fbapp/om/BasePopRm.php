<?php


/**
 * Base class that represents a row from the 'pop_rm' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BasePopRm extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PopRmPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PopRmPeer
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
     * The value for the poprmref field.
     * @var        int
     */
    protected $poprmref;

    /**
     * The value for the data field.
     * @var        string
     */
    protected $data;

    /**
     * The value for the datasourceref field.
     * @var        int
     */
    protected $datasourceref;

    /**
     * The value for the rm field.
     * @var        double
     */
    protected $rm;

    /**
     * The value for the loo field.
     * @var        double
     */
    protected $loo;

    /**
     * The value for the tlinfinity field.
     * @var        double
     */
    protected $tlinfinity;

    /**
     * The value for the k field.
     * @var        double
     */
    protected $k;

    /**
     * The value for the type field.
     * @var        string
     */
    protected $type;

    /**
     * The value for the methodrm field.
     * @var        string
     */
    protected $methodrm;

    /**
     * The value for the winfinity field.
     * @var        double
     */
    protected $winfinity;

    /**
     * The value for the wm field.
     * @var        double
     */
    protected $wm;

    /**
     * The value for the linflmax field.
     * @var        string
     */
    protected $linflmax;

    /**
     * The value for the reliability field.
     * Note: this column has a database default value of: 'Not "checked"'
     * @var        string
     */
    protected $reliability;

    /**
     * The value for the loga field.
     * @var        double
     */
    protected $loga;

    /**
     * The value for the b field.
     * @var        double
     */
    protected $b;

    /**
     * The value for the m field.
     * @var        double
     */
    protected $m;

    /**
     * The value for the methodm field.
     * @var        string
     */
    protected $methodm;

    /**
     * The value for the mref field.
     * @var        int
     */
    protected $mref;

    /**
     * The value for the tm field.
     * @var        double
     */
    protected $tm;

    /**
     * The value for the lm field.
     * @var        double
     */
    protected $lm;

    /**
     * The value for the typelm field.
     * @var        string
     */
    protected $typelm;

    /**
     * The value for the tmax field.
     * @var        double
     */
    protected $tmax;

    /**
     * The value for the f field.
     * @var        double
     */
    protected $f;

    /**
     * The value for the lmloo field.
     * @var        double
     */
    protected $lmloo;

    /**
     * The value for the unsexedref field.
     * @var        int
     */
    protected $unsexedref;

    /**
     * The value for the locality field.
     * @var        string
     */
    protected $locality;

    /**
     * The value for the growthenviron field.
     * @var        string
     */
    protected $growthenviron;

    /**
     * The value for the temperature field.
     * @var        double
     */
    protected $temperature;

    /**
     * The value for the deltat field.
     * @var        double
     */
    protected $deltat;

    /**
     * The value for the tempref field.
     * @var        int
     */
    protected $tempref;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->reliability = 'Not "checked"';
    }

    /**
     * Initializes internal state of BasePopRm object.
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
     * Get the [poprmref] column value.
     *
     * @return int
     */
    public function getPoprmref()
    {

        return $this->poprmref;
    }

    /**
     * Get the [data] column value.
     *
     * @return string
     */
    public function getData()
    {

        return $this->data;
    }

    /**
     * Get the [datasourceref] column value.
     *
     * @return int
     */
    public function getDatasourceref()
    {

        return $this->datasourceref;
    }

    /**
     * Get the [rm] column value.
     *
     * @return double
     */
    public function getRm()
    {

        return $this->rm;
    }

    /**
     * Get the [loo] column value.
     *
     * @return double
     */
    public function getLoo()
    {

        return $this->loo;
    }

    /**
     * Get the [tlinfinity] column value.
     *
     * @return double
     */
    public function getTlinfinity()
    {

        return $this->tlinfinity;
    }

    /**
     * Get the [k] column value.
     *
     * @return double
     */
    public function getK()
    {

        return $this->k;
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
     * Get the [methodrm] column value.
     *
     * @return string
     */
    public function getMethodrm()
    {

        return $this->methodrm;
    }

    /**
     * Get the [winfinity] column value.
     *
     * @return double
     */
    public function getWinfinity()
    {

        return $this->winfinity;
    }

    /**
     * Get the [wm] column value.
     *
     * @return double
     */
    public function getWm()
    {

        return $this->wm;
    }

    /**
     * Get the [linflmax] column value.
     *
     * @return string
     */
    public function getLinflmax()
    {

        return $this->linflmax;
    }

    /**
     * Get the [reliability] column value.
     *
     * @return string
     */
    public function getReliability()
    {

        return $this->reliability;
    }

    /**
     * Get the [loga] column value.
     *
     * @return double
     */
    public function getLoga()
    {

        return $this->loga;
    }

    /**
     * Get the [b] column value.
     *
     * @return double
     */
    public function getB()
    {

        return $this->b;
    }

    /**
     * Get the [m] column value.
     *
     * @return double
     */
    public function getM()
    {

        return $this->m;
    }

    /**
     * Get the [methodm] column value.
     *
     * @return string
     */
    public function getMethodm()
    {

        return $this->methodm;
    }

    /**
     * Get the [mref] column value.
     *
     * @return int
     */
    public function getMref()
    {

        return $this->mref;
    }

    /**
     * Get the [tm] column value.
     *
     * @return double
     */
    public function getTm()
    {

        return $this->tm;
    }

    /**
     * Get the [lm] column value.
     *
     * @return double
     */
    public function getLm()
    {

        return $this->lm;
    }

    /**
     * Get the [typelm] column value.
     *
     * @return string
     */
    public function getTypelm()
    {

        return $this->typelm;
    }

    /**
     * Get the [tmax] column value.
     *
     * @return double
     */
    public function getTmax()
    {

        return $this->tmax;
    }

    /**
     * Get the [f] column value.
     *
     * @return double
     */
    public function getF()
    {

        return $this->f;
    }

    /**
     * Get the [lmloo] column value.
     *
     * @return double
     */
    public function getLmloo()
    {

        return $this->lmloo;
    }

    /**
     * Get the [unsexedref] column value.
     *
     * @return int
     */
    public function getUnsexedref()
    {

        return $this->unsexedref;
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
     * Get the [growthenviron] column value.
     *
     * @return string
     */
    public function getGrowthenviron()
    {

        return $this->growthenviron;
    }

    /**
     * Get the [temperature] column value.
     *
     * @return double
     */
    public function getTemperature()
    {

        return $this->temperature;
    }

    /**
     * Get the [deltat] column value.
     *
     * @return double
     */
    public function getDeltat()
    {

        return $this->deltat;
    }

    /**
     * Get the [tempref] column value.
     *
     * @return int
     */
    public function getTempref()
    {

        return $this->tempref;
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
     * @return PopRm The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = PopRmPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = PopRmPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = PopRmPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [poprmref] column.
     *
     * @param  int $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setPoprmref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->poprmref !== $v) {
            $this->poprmref = $v;
            $this->modifiedColumns[] = PopRmPeer::POPRMREF;
        }


        return $this;
    } // setPoprmref()

    /**
     * Set the value of [data] column.
     *
     * @param  string $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setData($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->data !== $v) {
            $this->data = $v;
            $this->modifiedColumns[] = PopRmPeer::DATA;
        }


        return $this;
    } // setData()

    /**
     * Set the value of [datasourceref] column.
     *
     * @param  int $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setDatasourceref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->datasourceref !== $v) {
            $this->datasourceref = $v;
            $this->modifiedColumns[] = PopRmPeer::DATASOURCEREF;
        }


        return $this;
    } // setDatasourceref()

    /**
     * Set the value of [rm] column.
     *
     * @param  double $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setRm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->rm !== $v) {
            $this->rm = $v;
            $this->modifiedColumns[] = PopRmPeer::RM;
        }


        return $this;
    } // setRm()

    /**
     * Set the value of [loo] column.
     *
     * @param  double $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setLoo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->loo !== $v) {
            $this->loo = $v;
            $this->modifiedColumns[] = PopRmPeer::LOO;
        }


        return $this;
    } // setLoo()

    /**
     * Set the value of [tlinfinity] column.
     *
     * @param  double $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setTlinfinity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tlinfinity !== $v) {
            $this->tlinfinity = $v;
            $this->modifiedColumns[] = PopRmPeer::TLINFINITY;
        }


        return $this;
    } // setTlinfinity()

    /**
     * Set the value of [k] column.
     *
     * @param  double $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setK($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->k !== $v) {
            $this->k = $v;
            $this->modifiedColumns[] = PopRmPeer::K;
        }


        return $this;
    } // setK()

    /**
     * Set the value of [type] column.
     *
     * @param  string $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[] = PopRmPeer::TYPE;
        }


        return $this;
    } // setType()

    /**
     * Set the value of [methodrm] column.
     *
     * @param  string $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setMethodrm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->methodrm !== $v) {
            $this->methodrm = $v;
            $this->modifiedColumns[] = PopRmPeer::METHODRM;
        }


        return $this;
    } // setMethodrm()

    /**
     * Set the value of [winfinity] column.
     *
     * @param  double $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setWinfinity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->winfinity !== $v) {
            $this->winfinity = $v;
            $this->modifiedColumns[] = PopRmPeer::WINFINITY;
        }


        return $this;
    } // setWinfinity()

    /**
     * Set the value of [wm] column.
     *
     * @param  double $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setWm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->wm !== $v) {
            $this->wm = $v;
            $this->modifiedColumns[] = PopRmPeer::WM;
        }


        return $this;
    } // setWm()

    /**
     * Set the value of [linflmax] column.
     *
     * @param  string $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setLinflmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->linflmax !== $v) {
            $this->linflmax = $v;
            $this->modifiedColumns[] = PopRmPeer::LINFLMAX;
        }


        return $this;
    } // setLinflmax()

    /**
     * Set the value of [reliability] column.
     *
     * @param  string $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setReliability($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reliability !== $v) {
            $this->reliability = $v;
            $this->modifiedColumns[] = PopRmPeer::RELIABILITY;
        }


        return $this;
    } // setReliability()

    /**
     * Set the value of [loga] column.
     *
     * @param  double $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setLoga($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->loga !== $v) {
            $this->loga = $v;
            $this->modifiedColumns[] = PopRmPeer::LOGA;
        }


        return $this;
    } // setLoga()

    /**
     * Set the value of [b] column.
     *
     * @param  double $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setB($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->b !== $v) {
            $this->b = $v;
            $this->modifiedColumns[] = PopRmPeer::B;
        }


        return $this;
    } // setB()

    /**
     * Set the value of [m] column.
     *
     * @param  double $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setM($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->m !== $v) {
            $this->m = $v;
            $this->modifiedColumns[] = PopRmPeer::M;
        }


        return $this;
    } // setM()

    /**
     * Set the value of [methodm] column.
     *
     * @param  string $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setMethodm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->methodm !== $v) {
            $this->methodm = $v;
            $this->modifiedColumns[] = PopRmPeer::METHODM;
        }


        return $this;
    } // setMethodm()

    /**
     * Set the value of [mref] column.
     *
     * @param  int $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setMref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mref !== $v) {
            $this->mref = $v;
            $this->modifiedColumns[] = PopRmPeer::MREF;
        }


        return $this;
    } // setMref()

    /**
     * Set the value of [tm] column.
     *
     * @param  double $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setTm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tm !== $v) {
            $this->tm = $v;
            $this->modifiedColumns[] = PopRmPeer::TM;
        }


        return $this;
    } // setTm()

    /**
     * Set the value of [lm] column.
     *
     * @param  double $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setLm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lm !== $v) {
            $this->lm = $v;
            $this->modifiedColumns[] = PopRmPeer::LM;
        }


        return $this;
    } // setLm()

    /**
     * Set the value of [typelm] column.
     *
     * @param  string $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setTypelm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->typelm !== $v) {
            $this->typelm = $v;
            $this->modifiedColumns[] = PopRmPeer::TYPELM;
        }


        return $this;
    } // setTypelm()

    /**
     * Set the value of [tmax] column.
     *
     * @param  double $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setTmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tmax !== $v) {
            $this->tmax = $v;
            $this->modifiedColumns[] = PopRmPeer::TMAX;
        }


        return $this;
    } // setTmax()

    /**
     * Set the value of [f] column.
     *
     * @param  double $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setF($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->f !== $v) {
            $this->f = $v;
            $this->modifiedColumns[] = PopRmPeer::F;
        }


        return $this;
    } // setF()

    /**
     * Set the value of [lmloo] column.
     *
     * @param  double $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setLmloo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lmloo !== $v) {
            $this->lmloo = $v;
            $this->modifiedColumns[] = PopRmPeer::LMLOO;
        }


        return $this;
    } // setLmloo()

    /**
     * Set the value of [unsexedref] column.
     *
     * @param  int $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setUnsexedref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->unsexedref !== $v) {
            $this->unsexedref = $v;
            $this->modifiedColumns[] = PopRmPeer::UNSEXEDREF;
        }


        return $this;
    } // setUnsexedref()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = PopRmPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [growthenviron] column.
     *
     * @param  string $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setGrowthenviron($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->growthenviron !== $v) {
            $this->growthenviron = $v;
            $this->modifiedColumns[] = PopRmPeer::GROWTHENVIRON;
        }


        return $this;
    } // setGrowthenviron()

    /**
     * Set the value of [temperature] column.
     *
     * @param  double $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setTemperature($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->temperature !== $v) {
            $this->temperature = $v;
            $this->modifiedColumns[] = PopRmPeer::TEMPERATURE;
        }


        return $this;
    } // setTemperature()

    /**
     * Set the value of [deltat] column.
     *
     * @param  double $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setDeltat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->deltat !== $v) {
            $this->deltat = $v;
            $this->modifiedColumns[] = PopRmPeer::DELTAT;
        }


        return $this;
    } // setDeltat()

    /**
     * Set the value of [tempref] column.
     *
     * @param  int $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setTempref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tempref !== $v) {
            $this->tempref = $v;
            $this->modifiedColumns[] = PopRmPeer::TEMPREF;
        }


        return $this;
    } // setTempref()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = PopRmPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = PopRmPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PopRm The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = PopRmPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = PopRmPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PopRm The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = PopRmPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return PopRm The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = PopRmPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PopRm The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = PopRmPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PopRm The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = PopRmPeer::TS;
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
            if ($this->reliability !== 'Not "checked"') {
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
            $this->stockcode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->speccode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->poprmref = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->data = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->datasourceref = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->rm = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->loo = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->tlinfinity = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->k = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->type = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->methodrm = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->winfinity = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->wm = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->linflmax = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->reliability = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->loga = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->b = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->m = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->methodm = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->mref = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->tm = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->lm = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->typelm = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->tmax = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
            $this->f = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->lmloo = ($row[$startcol + 26] !== null) ? (double) $row[$startcol + 26] : null;
            $this->unsexedref = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->locality = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->growthenviron = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->temperature = ($row[$startcol + 30] !== null) ? (double) $row[$startcol + 30] : null;
            $this->deltat = ($row[$startcol + 31] !== null) ? (double) $row[$startcol + 31] : null;
            $this->tempref = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->comment = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->entered = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->dateentered = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->modified = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->datemodified = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->expert = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->datechecked = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->ts = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 41; // 41 = PopRmPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating PopRm object", $e);
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
            $con = Propel::getConnection(PopRmPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PopRmPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(PopRmPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PopRmQuery::create()
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
            $con = Propel::getConnection(PopRmPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PopRmPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = PopRmPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PopRmPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PopRmPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`AutoCtr`';
        }
        if ($this->isColumnModified(PopRmPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(PopRmPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(PopRmPeer::POPRMREF)) {
            $modifiedColumns[':p' . $index++]  = '`PopRMRef`';
        }
        if ($this->isColumnModified(PopRmPeer::DATA)) {
            $modifiedColumns[':p' . $index++]  = '`Data`';
        }
        if ($this->isColumnModified(PopRmPeer::DATASOURCEREF)) {
            $modifiedColumns[':p' . $index++]  = '`DataSourceRef`';
        }
        if ($this->isColumnModified(PopRmPeer::RM)) {
            $modifiedColumns[':p' . $index++]  = '`rm`';
        }
        if ($this->isColumnModified(PopRmPeer::LOO)) {
            $modifiedColumns[':p' . $index++]  = '`Loo`';
        }
        if ($this->isColumnModified(PopRmPeer::TLINFINITY)) {
            $modifiedColumns[':p' . $index++]  = '`TLinfinity`';
        }
        if ($this->isColumnModified(PopRmPeer::K)) {
            $modifiedColumns[':p' . $index++]  = '`K`';
        }
        if ($this->isColumnModified(PopRmPeer::TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`Type`';
        }
        if ($this->isColumnModified(PopRmPeer::METHODRM)) {
            $modifiedColumns[':p' . $index++]  = '`Methodrm`';
        }
        if ($this->isColumnModified(PopRmPeer::WINFINITY)) {
            $modifiedColumns[':p' . $index++]  = '`Winfinity`';
        }
        if ($this->isColumnModified(PopRmPeer::WM)) {
            $modifiedColumns[':p' . $index++]  = '`Wm`';
        }
        if ($this->isColumnModified(PopRmPeer::LINFLMAX)) {
            $modifiedColumns[':p' . $index++]  = '`LinfLmax`';
        }
        if ($this->isColumnModified(PopRmPeer::RELIABILITY)) {
            $modifiedColumns[':p' . $index++]  = '`Reliability`';
        }
        if ($this->isColumnModified(PopRmPeer::LOGA)) {
            $modifiedColumns[':p' . $index++]  = '`loga`';
        }
        if ($this->isColumnModified(PopRmPeer::B)) {
            $modifiedColumns[':p' . $index++]  = '`b`';
        }
        if ($this->isColumnModified(PopRmPeer::M)) {
            $modifiedColumns[':p' . $index++]  = '`M`';
        }
        if ($this->isColumnModified(PopRmPeer::METHODM)) {
            $modifiedColumns[':p' . $index++]  = '`MethodM`';
        }
        if ($this->isColumnModified(PopRmPeer::MREF)) {
            $modifiedColumns[':p' . $index++]  = '`MRef`';
        }
        if ($this->isColumnModified(PopRmPeer::TM)) {
            $modifiedColumns[':p' . $index++]  = '`tm`';
        }
        if ($this->isColumnModified(PopRmPeer::LM)) {
            $modifiedColumns[':p' . $index++]  = '`Lm`';
        }
        if ($this->isColumnModified(PopRmPeer::TYPELM)) {
            $modifiedColumns[':p' . $index++]  = '`TypeLm`';
        }
        if ($this->isColumnModified(PopRmPeer::TMAX)) {
            $modifiedColumns[':p' . $index++]  = '`tmax`';
        }
        if ($this->isColumnModified(PopRmPeer::F)) {
            $modifiedColumns[':p' . $index++]  = '`F`';
        }
        if ($this->isColumnModified(PopRmPeer::LMLOO)) {
            $modifiedColumns[':p' . $index++]  = '`LmLoo`';
        }
        if ($this->isColumnModified(PopRmPeer::UNSEXEDREF)) {
            $modifiedColumns[':p' . $index++]  = '`unsexedRef`';
        }
        if ($this->isColumnModified(PopRmPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(PopRmPeer::GROWTHENVIRON)) {
            $modifiedColumns[':p' . $index++]  = '`GrowthEnviron`';
        }
        if ($this->isColumnModified(PopRmPeer::TEMPERATURE)) {
            $modifiedColumns[':p' . $index++]  = '`Temperature`';
        }
        if ($this->isColumnModified(PopRmPeer::DELTAT)) {
            $modifiedColumns[':p' . $index++]  = '`DeltaT`';
        }
        if ($this->isColumnModified(PopRmPeer::TEMPREF)) {
            $modifiedColumns[':p' . $index++]  = '`TempRef`';
        }
        if ($this->isColumnModified(PopRmPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Comment`';
        }
        if ($this->isColumnModified(PopRmPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(PopRmPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(PopRmPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(PopRmPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(PopRmPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(PopRmPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(PopRmPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `pop_rm` (%s) VALUES (%s)',
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
                    case '`PopRMRef`':
                        $stmt->bindValue($identifier, $this->poprmref, PDO::PARAM_INT);
                        break;
                    case '`Data`':
                        $stmt->bindValue($identifier, $this->data, PDO::PARAM_STR);
                        break;
                    case '`DataSourceRef`':
                        $stmt->bindValue($identifier, $this->datasourceref, PDO::PARAM_INT);
                        break;
                    case '`rm`':
                        $stmt->bindValue($identifier, $this->rm, PDO::PARAM_STR);
                        break;
                    case '`Loo`':
                        $stmt->bindValue($identifier, $this->loo, PDO::PARAM_STR);
                        break;
                    case '`TLinfinity`':
                        $stmt->bindValue($identifier, $this->tlinfinity, PDO::PARAM_STR);
                        break;
                    case '`K`':
                        $stmt->bindValue($identifier, $this->k, PDO::PARAM_STR);
                        break;
                    case '`Type`':
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_STR);
                        break;
                    case '`Methodrm`':
                        $stmt->bindValue($identifier, $this->methodrm, PDO::PARAM_STR);
                        break;
                    case '`Winfinity`':
                        $stmt->bindValue($identifier, $this->winfinity, PDO::PARAM_STR);
                        break;
                    case '`Wm`':
                        $stmt->bindValue($identifier, $this->wm, PDO::PARAM_STR);
                        break;
                    case '`LinfLmax`':
                        $stmt->bindValue($identifier, $this->linflmax, PDO::PARAM_STR);
                        break;
                    case '`Reliability`':
                        $stmt->bindValue($identifier, $this->reliability, PDO::PARAM_STR);
                        break;
                    case '`loga`':
                        $stmt->bindValue($identifier, $this->loga, PDO::PARAM_STR);
                        break;
                    case '`b`':
                        $stmt->bindValue($identifier, $this->b, PDO::PARAM_STR);
                        break;
                    case '`M`':
                        $stmt->bindValue($identifier, $this->m, PDO::PARAM_STR);
                        break;
                    case '`MethodM`':
                        $stmt->bindValue($identifier, $this->methodm, PDO::PARAM_STR);
                        break;
                    case '`MRef`':
                        $stmt->bindValue($identifier, $this->mref, PDO::PARAM_INT);
                        break;
                    case '`tm`':
                        $stmt->bindValue($identifier, $this->tm, PDO::PARAM_STR);
                        break;
                    case '`Lm`':
                        $stmt->bindValue($identifier, $this->lm, PDO::PARAM_STR);
                        break;
                    case '`TypeLm`':
                        $stmt->bindValue($identifier, $this->typelm, PDO::PARAM_STR);
                        break;
                    case '`tmax`':
                        $stmt->bindValue($identifier, $this->tmax, PDO::PARAM_STR);
                        break;
                    case '`F`':
                        $stmt->bindValue($identifier, $this->f, PDO::PARAM_STR);
                        break;
                    case '`LmLoo`':
                        $stmt->bindValue($identifier, $this->lmloo, PDO::PARAM_STR);
                        break;
                    case '`unsexedRef`':
                        $stmt->bindValue($identifier, $this->unsexedref, PDO::PARAM_INT);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`GrowthEnviron`':
                        $stmt->bindValue($identifier, $this->growthenviron, PDO::PARAM_STR);
                        break;
                    case '`Temperature`':
                        $stmt->bindValue($identifier, $this->temperature, PDO::PARAM_STR);
                        break;
                    case '`DeltaT`':
                        $stmt->bindValue($identifier, $this->deltat, PDO::PARAM_STR);
                        break;
                    case '`TempRef`':
                        $stmt->bindValue($identifier, $this->tempref, PDO::PARAM_INT);
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


            if (($retval = PopRmPeer::doValidate($this, $columns)) !== true) {
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
        $pos = PopRmPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getPoprmref();
                break;
            case 4:
                return $this->getData();
                break;
            case 5:
                return $this->getDatasourceref();
                break;
            case 6:
                return $this->getRm();
                break;
            case 7:
                return $this->getLoo();
                break;
            case 8:
                return $this->getTlinfinity();
                break;
            case 9:
                return $this->getK();
                break;
            case 10:
                return $this->getType();
                break;
            case 11:
                return $this->getMethodrm();
                break;
            case 12:
                return $this->getWinfinity();
                break;
            case 13:
                return $this->getWm();
                break;
            case 14:
                return $this->getLinflmax();
                break;
            case 15:
                return $this->getReliability();
                break;
            case 16:
                return $this->getLoga();
                break;
            case 17:
                return $this->getB();
                break;
            case 18:
                return $this->getM();
                break;
            case 19:
                return $this->getMethodm();
                break;
            case 20:
                return $this->getMref();
                break;
            case 21:
                return $this->getTm();
                break;
            case 22:
                return $this->getLm();
                break;
            case 23:
                return $this->getTypelm();
                break;
            case 24:
                return $this->getTmax();
                break;
            case 25:
                return $this->getF();
                break;
            case 26:
                return $this->getLmloo();
                break;
            case 27:
                return $this->getUnsexedref();
                break;
            case 28:
                return $this->getLocality();
                break;
            case 29:
                return $this->getGrowthenviron();
                break;
            case 30:
                return $this->getTemperature();
                break;
            case 31:
                return $this->getDeltat();
                break;
            case 32:
                return $this->getTempref();
                break;
            case 33:
                return $this->getComment();
                break;
            case 34:
                return $this->getEntered();
                break;
            case 35:
                return $this->getDateentered();
                break;
            case 36:
                return $this->getModified();
                break;
            case 37:
                return $this->getDatemodified();
                break;
            case 38:
                return $this->getExpert();
                break;
            case 39:
                return $this->getDatechecked();
                break;
            case 40:
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
        if (isset($alreadyDumpedObjects['PopRm'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['PopRm'][$this->getPrimaryKey()] = true;
        $keys = PopRmPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getStockcode(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getPoprmref(),
            $keys[4] => $this->getData(),
            $keys[5] => $this->getDatasourceref(),
            $keys[6] => $this->getRm(),
            $keys[7] => $this->getLoo(),
            $keys[8] => $this->getTlinfinity(),
            $keys[9] => $this->getK(),
            $keys[10] => $this->getType(),
            $keys[11] => $this->getMethodrm(),
            $keys[12] => $this->getWinfinity(),
            $keys[13] => $this->getWm(),
            $keys[14] => $this->getLinflmax(),
            $keys[15] => $this->getReliability(),
            $keys[16] => $this->getLoga(),
            $keys[17] => $this->getB(),
            $keys[18] => $this->getM(),
            $keys[19] => $this->getMethodm(),
            $keys[20] => $this->getMref(),
            $keys[21] => $this->getTm(),
            $keys[22] => $this->getLm(),
            $keys[23] => $this->getTypelm(),
            $keys[24] => $this->getTmax(),
            $keys[25] => $this->getF(),
            $keys[26] => $this->getLmloo(),
            $keys[27] => $this->getUnsexedref(),
            $keys[28] => $this->getLocality(),
            $keys[29] => $this->getGrowthenviron(),
            $keys[30] => $this->getTemperature(),
            $keys[31] => $this->getDeltat(),
            $keys[32] => $this->getTempref(),
            $keys[33] => $this->getComment(),
            $keys[34] => $this->getEntered(),
            $keys[35] => $this->getDateentered(),
            $keys[36] => $this->getModified(),
            $keys[37] => $this->getDatemodified(),
            $keys[38] => $this->getExpert(),
            $keys[39] => $this->getDatechecked(),
            $keys[40] => $this->getTs(),
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
        $pos = PopRmPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setPoprmref($value);
                break;
            case 4:
                $this->setData($value);
                break;
            case 5:
                $this->setDatasourceref($value);
                break;
            case 6:
                $this->setRm($value);
                break;
            case 7:
                $this->setLoo($value);
                break;
            case 8:
                $this->setTlinfinity($value);
                break;
            case 9:
                $this->setK($value);
                break;
            case 10:
                $this->setType($value);
                break;
            case 11:
                $this->setMethodrm($value);
                break;
            case 12:
                $this->setWinfinity($value);
                break;
            case 13:
                $this->setWm($value);
                break;
            case 14:
                $this->setLinflmax($value);
                break;
            case 15:
                $this->setReliability($value);
                break;
            case 16:
                $this->setLoga($value);
                break;
            case 17:
                $this->setB($value);
                break;
            case 18:
                $this->setM($value);
                break;
            case 19:
                $this->setMethodm($value);
                break;
            case 20:
                $this->setMref($value);
                break;
            case 21:
                $this->setTm($value);
                break;
            case 22:
                $this->setLm($value);
                break;
            case 23:
                $this->setTypelm($value);
                break;
            case 24:
                $this->setTmax($value);
                break;
            case 25:
                $this->setF($value);
                break;
            case 26:
                $this->setLmloo($value);
                break;
            case 27:
                $this->setUnsexedref($value);
                break;
            case 28:
                $this->setLocality($value);
                break;
            case 29:
                $this->setGrowthenviron($value);
                break;
            case 30:
                $this->setTemperature($value);
                break;
            case 31:
                $this->setDeltat($value);
                break;
            case 32:
                $this->setTempref($value);
                break;
            case 33:
                $this->setComment($value);
                break;
            case 34:
                $this->setEntered($value);
                break;
            case 35:
                $this->setDateentered($value);
                break;
            case 36:
                $this->setModified($value);
                break;
            case 37:
                $this->setDatemodified($value);
                break;
            case 38:
                $this->setExpert($value);
                break;
            case 39:
                $this->setDatechecked($value);
                break;
            case 40:
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
        $keys = PopRmPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPoprmref($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setData($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDatasourceref($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setRm($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLoo($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTlinfinity($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setK($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setType($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setMethodrm($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setWinfinity($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setWm($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setLinflmax($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setReliability($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setLoga($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setB($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setM($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setMethodm($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setMref($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setTm($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setLm($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setTypelm($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setTmax($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setF($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setLmloo($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setUnsexedref($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setLocality($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setGrowthenviron($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setTemperature($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setDeltat($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setTempref($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setComment($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setEntered($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setDateentered($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setModified($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setDatemodified($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setExpert($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setDatechecked($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setTs($arr[$keys[40]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PopRmPeer::DATABASE_NAME);

        if ($this->isColumnModified(PopRmPeer::AUTOCTR)) $criteria->add(PopRmPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(PopRmPeer::STOCKCODE)) $criteria->add(PopRmPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(PopRmPeer::SPECCODE)) $criteria->add(PopRmPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(PopRmPeer::POPRMREF)) $criteria->add(PopRmPeer::POPRMREF, $this->poprmref);
        if ($this->isColumnModified(PopRmPeer::DATA)) $criteria->add(PopRmPeer::DATA, $this->data);
        if ($this->isColumnModified(PopRmPeer::DATASOURCEREF)) $criteria->add(PopRmPeer::DATASOURCEREF, $this->datasourceref);
        if ($this->isColumnModified(PopRmPeer::RM)) $criteria->add(PopRmPeer::RM, $this->rm);
        if ($this->isColumnModified(PopRmPeer::LOO)) $criteria->add(PopRmPeer::LOO, $this->loo);
        if ($this->isColumnModified(PopRmPeer::TLINFINITY)) $criteria->add(PopRmPeer::TLINFINITY, $this->tlinfinity);
        if ($this->isColumnModified(PopRmPeer::K)) $criteria->add(PopRmPeer::K, $this->k);
        if ($this->isColumnModified(PopRmPeer::TYPE)) $criteria->add(PopRmPeer::TYPE, $this->type);
        if ($this->isColumnModified(PopRmPeer::METHODRM)) $criteria->add(PopRmPeer::METHODRM, $this->methodrm);
        if ($this->isColumnModified(PopRmPeer::WINFINITY)) $criteria->add(PopRmPeer::WINFINITY, $this->winfinity);
        if ($this->isColumnModified(PopRmPeer::WM)) $criteria->add(PopRmPeer::WM, $this->wm);
        if ($this->isColumnModified(PopRmPeer::LINFLMAX)) $criteria->add(PopRmPeer::LINFLMAX, $this->linflmax);
        if ($this->isColumnModified(PopRmPeer::RELIABILITY)) $criteria->add(PopRmPeer::RELIABILITY, $this->reliability);
        if ($this->isColumnModified(PopRmPeer::LOGA)) $criteria->add(PopRmPeer::LOGA, $this->loga);
        if ($this->isColumnModified(PopRmPeer::B)) $criteria->add(PopRmPeer::B, $this->b);
        if ($this->isColumnModified(PopRmPeer::M)) $criteria->add(PopRmPeer::M, $this->m);
        if ($this->isColumnModified(PopRmPeer::METHODM)) $criteria->add(PopRmPeer::METHODM, $this->methodm);
        if ($this->isColumnModified(PopRmPeer::MREF)) $criteria->add(PopRmPeer::MREF, $this->mref);
        if ($this->isColumnModified(PopRmPeer::TM)) $criteria->add(PopRmPeer::TM, $this->tm);
        if ($this->isColumnModified(PopRmPeer::LM)) $criteria->add(PopRmPeer::LM, $this->lm);
        if ($this->isColumnModified(PopRmPeer::TYPELM)) $criteria->add(PopRmPeer::TYPELM, $this->typelm);
        if ($this->isColumnModified(PopRmPeer::TMAX)) $criteria->add(PopRmPeer::TMAX, $this->tmax);
        if ($this->isColumnModified(PopRmPeer::F)) $criteria->add(PopRmPeer::F, $this->f);
        if ($this->isColumnModified(PopRmPeer::LMLOO)) $criteria->add(PopRmPeer::LMLOO, $this->lmloo);
        if ($this->isColumnModified(PopRmPeer::UNSEXEDREF)) $criteria->add(PopRmPeer::UNSEXEDREF, $this->unsexedref);
        if ($this->isColumnModified(PopRmPeer::LOCALITY)) $criteria->add(PopRmPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(PopRmPeer::GROWTHENVIRON)) $criteria->add(PopRmPeer::GROWTHENVIRON, $this->growthenviron);
        if ($this->isColumnModified(PopRmPeer::TEMPERATURE)) $criteria->add(PopRmPeer::TEMPERATURE, $this->temperature);
        if ($this->isColumnModified(PopRmPeer::DELTAT)) $criteria->add(PopRmPeer::DELTAT, $this->deltat);
        if ($this->isColumnModified(PopRmPeer::TEMPREF)) $criteria->add(PopRmPeer::TEMPREF, $this->tempref);
        if ($this->isColumnModified(PopRmPeer::COMMENT)) $criteria->add(PopRmPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(PopRmPeer::ENTERED)) $criteria->add(PopRmPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(PopRmPeer::DATEENTERED)) $criteria->add(PopRmPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(PopRmPeer::MODIFIED)) $criteria->add(PopRmPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(PopRmPeer::DATEMODIFIED)) $criteria->add(PopRmPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(PopRmPeer::EXPERT)) $criteria->add(PopRmPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(PopRmPeer::DATECHECKED)) $criteria->add(PopRmPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(PopRmPeer::TS)) $criteria->add(PopRmPeer::TS, $this->ts);

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
        $criteria = new Criteria(PopRmPeer::DATABASE_NAME);
        $criteria->add(PopRmPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of PopRm (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setPoprmref($this->getPoprmref());
        $copyObj->setData($this->getData());
        $copyObj->setDatasourceref($this->getDatasourceref());
        $copyObj->setRm($this->getRm());
        $copyObj->setLoo($this->getLoo());
        $copyObj->setTlinfinity($this->getTlinfinity());
        $copyObj->setK($this->getK());
        $copyObj->setType($this->getType());
        $copyObj->setMethodrm($this->getMethodrm());
        $copyObj->setWinfinity($this->getWinfinity());
        $copyObj->setWm($this->getWm());
        $copyObj->setLinflmax($this->getLinflmax());
        $copyObj->setReliability($this->getReliability());
        $copyObj->setLoga($this->getLoga());
        $copyObj->setB($this->getB());
        $copyObj->setM($this->getM());
        $copyObj->setMethodm($this->getMethodm());
        $copyObj->setMref($this->getMref());
        $copyObj->setTm($this->getTm());
        $copyObj->setLm($this->getLm());
        $copyObj->setTypelm($this->getTypelm());
        $copyObj->setTmax($this->getTmax());
        $copyObj->setF($this->getF());
        $copyObj->setLmloo($this->getLmloo());
        $copyObj->setUnsexedref($this->getUnsexedref());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setGrowthenviron($this->getGrowthenviron());
        $copyObj->setTemperature($this->getTemperature());
        $copyObj->setDeltat($this->getDeltat());
        $copyObj->setTempref($this->getTempref());
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
     * @return PopRm Clone of current object.
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
     * @return PopRmPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PopRmPeer();
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
        $this->poprmref = null;
        $this->data = null;
        $this->datasourceref = null;
        $this->rm = null;
        $this->loo = null;
        $this->tlinfinity = null;
        $this->k = null;
        $this->type = null;
        $this->methodrm = null;
        $this->winfinity = null;
        $this->wm = null;
        $this->linflmax = null;
        $this->reliability = null;
        $this->loga = null;
        $this->b = null;
        $this->m = null;
        $this->methodm = null;
        $this->mref = null;
        $this->tm = null;
        $this->lm = null;
        $this->typelm = null;
        $this->tmax = null;
        $this->f = null;
        $this->lmloo = null;
        $this->unsexedref = null;
        $this->locality = null;
        $this->growthenviron = null;
        $this->temperature = null;
        $this->deltat = null;
        $this->tempref = null;
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
        return (string) $this->exportTo(PopRmPeer::DEFAULT_STRING_FORMAT);
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
