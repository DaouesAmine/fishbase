<?php


/**
 * Base class that represents a row from the 'fooditems' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFooditems extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FooditemsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FooditemsPeer
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
     * The value for the foodsrefno field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $foodsrefno;

    /**
     * The value for the foodi field.
     * @var        string
     */
    protected $foodi;

    /**
     * The value for the preystage field.
     * @var        string
     */
    protected $preystage;

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
     * The value for the commoness field.
     * @var        double
     */
    protected $commoness;

    /**
     * The value for the commonessii field.
     * @var        string
     */
    protected $commonessii;

    /**
     * The value for the foodgroup field.
     * @var        string
     */
    protected $foodgroup;

    /**
     * The value for the foodname field.
     * @var        string
     */
    protected $foodname;

    /**
     * The value for the preyspeccode field.
     * @var        int
     */
    protected $preyspeccode;

    /**
     * The value for the preyspeccodeslb field.
     * @var        int
     */
    protected $preyspeccodeslb;

    /**
     * The value for the alphacode field.
     * @var        string
     */
    protected $alphacode;

    /**
     * The value for the preytroph field.
     * @var        double
     */
    protected $preytroph;

    /**
     * The value for the preysetroph field.
     * @var        double
     */
    protected $preysetroph;

    /**
     * The value for the trophrefno field.
     * @var        int
     */
    protected $trophrefno;

    /**
     * The value for the predatorstage field.
     * @var        string
     */
    protected $predatorstage;

    /**
     * The value for the locality2 field.
     * @var        string
     */
    protected $locality2;

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
        $this->foodsrefno = 0;
    }

    /**
     * Initializes internal state of BaseFooditems object.
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
     * Get the [foodsrefno] column value.
     *
     * @return int
     */
    public function getFoodsrefno()
    {

        return $this->foodsrefno;
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
     * Get the [preystage] column value.
     *
     * @return string
     */
    public function getPreystage()
    {

        return $this->preystage;
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
     * Get the [commoness] column value.
     *
     * @return double
     */
    public function getCommoness()
    {

        return $this->commoness;
    }

    /**
     * Get the [commonessii] column value.
     *
     * @return string
     */
    public function getCommonessii()
    {

        return $this->commonessii;
    }

    /**
     * Get the [foodgroup] column value.
     *
     * @return string
     */
    public function getFoodgroup()
    {

        return $this->foodgroup;
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
     * Get the [preyspeccode] column value.
     *
     * @return int
     */
    public function getPreyspeccode()
    {

        return $this->preyspeccode;
    }

    /**
     * Get the [preyspeccodeslb] column value.
     *
     * @return int
     */
    public function getPreyspeccodeslb()
    {

        return $this->preyspeccodeslb;
    }

    /**
     * Get the [alphacode] column value.
     *
     * @return string
     */
    public function getAlphacode()
    {

        return $this->alphacode;
    }

    /**
     * Get the [preytroph] column value.
     *
     * @return double
     */
    public function getPreytroph()
    {

        return $this->preytroph;
    }

    /**
     * Get the [preysetroph] column value.
     *
     * @return double
     */
    public function getPreysetroph()
    {

        return $this->preysetroph;
    }

    /**
     * Get the [trophrefno] column value.
     *
     * @return int
     */
    public function getTrophrefno()
    {

        return $this->trophrefno;
    }

    /**
     * Get the [predatorstage] column value.
     *
     * @return string
     */
    public function getPredatorstage()
    {

        return $this->predatorstage;
    }

    /**
     * Get the [locality2] column value.
     *
     * @return string
     */
    public function getLocality2()
    {

        return $this->locality2;
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
     * @return Fooditems The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = FooditemsPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = FooditemsPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = FooditemsPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = FooditemsPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = FooditemsPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [foodsrefno] column.
     *
     * @param  int $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setFoodsrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->foodsrefno !== $v) {
            $this->foodsrefno = $v;
            $this->modifiedColumns[] = FooditemsPeer::FOODSREFNO;
        }


        return $this;
    } // setFoodsrefno()

    /**
     * Set the value of [foodi] column.
     *
     * @param  string $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setFoodi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->foodi !== $v) {
            $this->foodi = $v;
            $this->modifiedColumns[] = FooditemsPeer::FOODI;
        }


        return $this;
    } // setFoodi()

    /**
     * Set the value of [preystage] column.
     *
     * @param  string $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setPreystage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->preystage !== $v) {
            $this->preystage = $v;
            $this->modifiedColumns[] = FooditemsPeer::PREYSTAGE;
        }


        return $this;
    } // setPreystage()

    /**
     * Set the value of [foodii] column.
     *
     * @param  string $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setFoodii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->foodii !== $v) {
            $this->foodii = $v;
            $this->modifiedColumns[] = FooditemsPeer::FOODII;
        }


        return $this;
    } // setFoodii()

    /**
     * Set the value of [foodiii] column.
     *
     * @param  string $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setFoodiii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->foodiii !== $v) {
            $this->foodiii = $v;
            $this->modifiedColumns[] = FooditemsPeer::FOODIII;
        }


        return $this;
    } // setFoodiii()

    /**
     * Set the value of [commoness] column.
     *
     * @param  double $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setCommoness($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->commoness !== $v) {
            $this->commoness = $v;
            $this->modifiedColumns[] = FooditemsPeer::COMMONESS;
        }


        return $this;
    } // setCommoness()

    /**
     * Set the value of [commonessii] column.
     *
     * @param  string $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setCommonessii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonessii !== $v) {
            $this->commonessii = $v;
            $this->modifiedColumns[] = FooditemsPeer::COMMONESSII;
        }


        return $this;
    } // setCommonessii()

    /**
     * Set the value of [foodgroup] column.
     *
     * @param  string $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setFoodgroup($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->foodgroup !== $v) {
            $this->foodgroup = $v;
            $this->modifiedColumns[] = FooditemsPeer::FOODGROUP;
        }


        return $this;
    } // setFoodgroup()

    /**
     * Set the value of [foodname] column.
     *
     * @param  string $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setFoodname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->foodname !== $v) {
            $this->foodname = $v;
            $this->modifiedColumns[] = FooditemsPeer::FOODNAME;
        }


        return $this;
    } // setFoodname()

    /**
     * Set the value of [preyspeccode] column.
     *
     * @param  int $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setPreyspeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->preyspeccode !== $v) {
            $this->preyspeccode = $v;
            $this->modifiedColumns[] = FooditemsPeer::PREYSPECCODE;
        }


        return $this;
    } // setPreyspeccode()

    /**
     * Set the value of [preyspeccodeslb] column.
     *
     * @param  int $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setPreyspeccodeslb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->preyspeccodeslb !== $v) {
            $this->preyspeccodeslb = $v;
            $this->modifiedColumns[] = FooditemsPeer::PREYSPECCODESLB;
        }


        return $this;
    } // setPreyspeccodeslb()

    /**
     * Set the value of [alphacode] column.
     *
     * @param  string $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setAlphacode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alphacode !== $v) {
            $this->alphacode = $v;
            $this->modifiedColumns[] = FooditemsPeer::ALPHACODE;
        }


        return $this;
    } // setAlphacode()

    /**
     * Set the value of [preytroph] column.
     *
     * @param  double $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setPreytroph($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preytroph !== $v) {
            $this->preytroph = $v;
            $this->modifiedColumns[] = FooditemsPeer::PREYTROPH;
        }


        return $this;
    } // setPreytroph()

    /**
     * Set the value of [preysetroph] column.
     *
     * @param  double $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setPreysetroph($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preysetroph !== $v) {
            $this->preysetroph = $v;
            $this->modifiedColumns[] = FooditemsPeer::PREYSETROPH;
        }


        return $this;
    } // setPreysetroph()

    /**
     * Set the value of [trophrefno] column.
     *
     * @param  int $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setTrophrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->trophrefno !== $v) {
            $this->trophrefno = $v;
            $this->modifiedColumns[] = FooditemsPeer::TROPHREFNO;
        }


        return $this;
    } // setTrophrefno()

    /**
     * Set the value of [predatorstage] column.
     *
     * @param  string $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setPredatorstage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->predatorstage !== $v) {
            $this->predatorstage = $v;
            $this->modifiedColumns[] = FooditemsPeer::PREDATORSTAGE;
        }


        return $this;
    } // setPredatorstage()

    /**
     * Set the value of [locality2] column.
     *
     * @param  string $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setLocality2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality2 !== $v) {
            $this->locality2 = $v;
            $this->modifiedColumns[] = FooditemsPeer::LOCALITY2;
        }


        return $this;
    } // setLocality2()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = FooditemsPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Fooditems The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = FooditemsPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = FooditemsPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Fooditems The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = FooditemsPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Fooditems The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = FooditemsPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Fooditems The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = FooditemsPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Fooditems The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = FooditemsPeer::TS;
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
            if ($this->foodsrefno !== 0) {
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
            $this->locality = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->c_code = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->foodsrefno = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->foodi = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->preystage = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->foodii = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->foodiii = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->commoness = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->commonessii = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->foodgroup = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->foodname = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->preyspeccode = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->preyspeccodeslb = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->alphacode = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->preytroph = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->preysetroph = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->trophrefno = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->predatorstage = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->locality2 = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->entered = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->dateentered = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->modified = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->datemodified = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->expert = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->datechecked = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->ts = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 29; // 29 = FooditemsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Fooditems object", $e);
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
            $con = Propel::getConnection(FooditemsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FooditemsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(FooditemsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FooditemsQuery::create()
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
            $con = Propel::getConnection(FooditemsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                FooditemsPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(FooditemsPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(FooditemsPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(FooditemsPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(FooditemsPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(FooditemsPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(FooditemsPeer::FOODSREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`FoodsRefNo`';
        }
        if ($this->isColumnModified(FooditemsPeer::FOODI)) {
            $modifiedColumns[':p' . $index++]  = '`FoodI`';
        }
        if ($this->isColumnModified(FooditemsPeer::PREYSTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`PreyStage`';
        }
        if ($this->isColumnModified(FooditemsPeer::FOODII)) {
            $modifiedColumns[':p' . $index++]  = '`FoodII`';
        }
        if ($this->isColumnModified(FooditemsPeer::FOODIII)) {
            $modifiedColumns[':p' . $index++]  = '`FoodIII`';
        }
        if ($this->isColumnModified(FooditemsPeer::COMMONESS)) {
            $modifiedColumns[':p' . $index++]  = '`Commoness`';
        }
        if ($this->isColumnModified(FooditemsPeer::COMMONESSII)) {
            $modifiedColumns[':p' . $index++]  = '`CommonessII`';
        }
        if ($this->isColumnModified(FooditemsPeer::FOODGROUP)) {
            $modifiedColumns[':p' . $index++]  = '`Foodgroup`';
        }
        if ($this->isColumnModified(FooditemsPeer::FOODNAME)) {
            $modifiedColumns[':p' . $index++]  = '`Foodname`';
        }
        if ($this->isColumnModified(FooditemsPeer::PREYSPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`PreySpecCode`';
        }
        if ($this->isColumnModified(FooditemsPeer::PREYSPECCODESLB)) {
            $modifiedColumns[':p' . $index++]  = '`PreySpecCodeSLB`';
        }
        if ($this->isColumnModified(FooditemsPeer::ALPHACODE)) {
            $modifiedColumns[':p' . $index++]  = '`AlphaCode`';
        }
        if ($this->isColumnModified(FooditemsPeer::PREYTROPH)) {
            $modifiedColumns[':p' . $index++]  = '`PreyTroph`';
        }
        if ($this->isColumnModified(FooditemsPeer::PREYSETROPH)) {
            $modifiedColumns[':p' . $index++]  = '`PreySeTroph`';
        }
        if ($this->isColumnModified(FooditemsPeer::TROPHREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`TrophRefNo`';
        }
        if ($this->isColumnModified(FooditemsPeer::PREDATORSTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`PredatorStage`';
        }
        if ($this->isColumnModified(FooditemsPeer::LOCALITY2)) {
            $modifiedColumns[':p' . $index++]  = '`Locality2`';
        }
        if ($this->isColumnModified(FooditemsPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(FooditemsPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Dateentered`';
        }
        if ($this->isColumnModified(FooditemsPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(FooditemsPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Datemodified`';
        }
        if ($this->isColumnModified(FooditemsPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(FooditemsPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`Datechecked`';
        }
        if ($this->isColumnModified(FooditemsPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `fooditems` (%s) VALUES (%s)',
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
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`FoodsRefNo`':
                        $stmt->bindValue($identifier, $this->foodsrefno, PDO::PARAM_INT);
                        break;
                    case '`FoodI`':
                        $stmt->bindValue($identifier, $this->foodi, PDO::PARAM_STR);
                        break;
                    case '`PreyStage`':
                        $stmt->bindValue($identifier, $this->preystage, PDO::PARAM_STR);
                        break;
                    case '`FoodII`':
                        $stmt->bindValue($identifier, $this->foodii, PDO::PARAM_STR);
                        break;
                    case '`FoodIII`':
                        $stmt->bindValue($identifier, $this->foodiii, PDO::PARAM_STR);
                        break;
                    case '`Commoness`':
                        $stmt->bindValue($identifier, $this->commoness, PDO::PARAM_STR);
                        break;
                    case '`CommonessII`':
                        $stmt->bindValue($identifier, $this->commonessii, PDO::PARAM_STR);
                        break;
                    case '`Foodgroup`':
                        $stmt->bindValue($identifier, $this->foodgroup, PDO::PARAM_STR);
                        break;
                    case '`Foodname`':
                        $stmt->bindValue($identifier, $this->foodname, PDO::PARAM_STR);
                        break;
                    case '`PreySpecCode`':
                        $stmt->bindValue($identifier, $this->preyspeccode, PDO::PARAM_INT);
                        break;
                    case '`PreySpecCodeSLB`':
                        $stmt->bindValue($identifier, $this->preyspeccodeslb, PDO::PARAM_INT);
                        break;
                    case '`AlphaCode`':
                        $stmt->bindValue($identifier, $this->alphacode, PDO::PARAM_STR);
                        break;
                    case '`PreyTroph`':
                        $stmt->bindValue($identifier, $this->preytroph, PDO::PARAM_STR);
                        break;
                    case '`PreySeTroph`':
                        $stmt->bindValue($identifier, $this->preysetroph, PDO::PARAM_STR);
                        break;
                    case '`TrophRefNo`':
                        $stmt->bindValue($identifier, $this->trophrefno, PDO::PARAM_INT);
                        break;
                    case '`PredatorStage`':
                        $stmt->bindValue($identifier, $this->predatorstage, PDO::PARAM_STR);
                        break;
                    case '`Locality2`':
                        $stmt->bindValue($identifier, $this->locality2, PDO::PARAM_STR);
                        break;
                    case '`Entered`':
                        $stmt->bindValue($identifier, $this->entered, PDO::PARAM_INT);
                        break;
                    case '`Dateentered`':
                        $stmt->bindValue($identifier, $this->dateentered, PDO::PARAM_STR);
                        break;
                    case '`Modified`':
                        $stmt->bindValue($identifier, $this->modified, PDO::PARAM_INT);
                        break;
                    case '`Datemodified`':
                        $stmt->bindValue($identifier, $this->datemodified, PDO::PARAM_STR);
                        break;
                    case '`Expert`':
                        $stmt->bindValue($identifier, $this->expert, PDO::PARAM_INT);
                        break;
                    case '`Datechecked`':
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
        $this->setStockcode($pk);

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


            if (($retval = FooditemsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = FooditemsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getLocality();
                break;
            case 4:
                return $this->getCCode();
                break;
            case 5:
                return $this->getFoodsrefno();
                break;
            case 6:
                return $this->getFoodi();
                break;
            case 7:
                return $this->getPreystage();
                break;
            case 8:
                return $this->getFoodii();
                break;
            case 9:
                return $this->getFoodiii();
                break;
            case 10:
                return $this->getCommoness();
                break;
            case 11:
                return $this->getCommonessii();
                break;
            case 12:
                return $this->getFoodgroup();
                break;
            case 13:
                return $this->getFoodname();
                break;
            case 14:
                return $this->getPreyspeccode();
                break;
            case 15:
                return $this->getPreyspeccodeslb();
                break;
            case 16:
                return $this->getAlphacode();
                break;
            case 17:
                return $this->getPreytroph();
                break;
            case 18:
                return $this->getPreysetroph();
                break;
            case 19:
                return $this->getTrophrefno();
                break;
            case 20:
                return $this->getPredatorstage();
                break;
            case 21:
                return $this->getLocality2();
                break;
            case 22:
                return $this->getEntered();
                break;
            case 23:
                return $this->getDateentered();
                break;
            case 24:
                return $this->getModified();
                break;
            case 25:
                return $this->getDatemodified();
                break;
            case 26:
                return $this->getExpert();
                break;
            case 27:
                return $this->getDatechecked();
                break;
            case 28:
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
        if (isset($alreadyDumpedObjects['Fooditems'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Fooditems'][serialize($this->getPrimaryKey())] = true;
        $keys = FooditemsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getStockcode(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getLocality(),
            $keys[4] => $this->getCCode(),
            $keys[5] => $this->getFoodsrefno(),
            $keys[6] => $this->getFoodi(),
            $keys[7] => $this->getPreystage(),
            $keys[8] => $this->getFoodii(),
            $keys[9] => $this->getFoodiii(),
            $keys[10] => $this->getCommoness(),
            $keys[11] => $this->getCommonessii(),
            $keys[12] => $this->getFoodgroup(),
            $keys[13] => $this->getFoodname(),
            $keys[14] => $this->getPreyspeccode(),
            $keys[15] => $this->getPreyspeccodeslb(),
            $keys[16] => $this->getAlphacode(),
            $keys[17] => $this->getPreytroph(),
            $keys[18] => $this->getPreysetroph(),
            $keys[19] => $this->getTrophrefno(),
            $keys[20] => $this->getPredatorstage(),
            $keys[21] => $this->getLocality2(),
            $keys[22] => $this->getEntered(),
            $keys[23] => $this->getDateentered(),
            $keys[24] => $this->getModified(),
            $keys[25] => $this->getDatemodified(),
            $keys[26] => $this->getExpert(),
            $keys[27] => $this->getDatechecked(),
            $keys[28] => $this->getTs(),
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
        $pos = FooditemsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setLocality($value);
                break;
            case 4:
                $this->setCCode($value);
                break;
            case 5:
                $this->setFoodsrefno($value);
                break;
            case 6:
                $this->setFoodi($value);
                break;
            case 7:
                $this->setPreystage($value);
                break;
            case 8:
                $this->setFoodii($value);
                break;
            case 9:
                $this->setFoodiii($value);
                break;
            case 10:
                $this->setCommoness($value);
                break;
            case 11:
                $this->setCommonessii($value);
                break;
            case 12:
                $this->setFoodgroup($value);
                break;
            case 13:
                $this->setFoodname($value);
                break;
            case 14:
                $this->setPreyspeccode($value);
                break;
            case 15:
                $this->setPreyspeccodeslb($value);
                break;
            case 16:
                $this->setAlphacode($value);
                break;
            case 17:
                $this->setPreytroph($value);
                break;
            case 18:
                $this->setPreysetroph($value);
                break;
            case 19:
                $this->setTrophrefno($value);
                break;
            case 20:
                $this->setPredatorstage($value);
                break;
            case 21:
                $this->setLocality2($value);
                break;
            case 22:
                $this->setEntered($value);
                break;
            case 23:
                $this->setDateentered($value);
                break;
            case 24:
                $this->setModified($value);
                break;
            case 25:
                $this->setDatemodified($value);
                break;
            case 26:
                $this->setExpert($value);
                break;
            case 27:
                $this->setDatechecked($value);
                break;
            case 28:
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
        $keys = FooditemsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLocality($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCCode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setFoodsrefno($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setFoodi($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPreystage($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setFoodii($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setFoodiii($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCommoness($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setCommonessii($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setFoodgroup($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setFoodname($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setPreyspeccode($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setPreyspeccodeslb($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setAlphacode($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setPreytroph($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setPreysetroph($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setTrophrefno($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setPredatorstage($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setLocality2($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setEntered($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDateentered($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setModified($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDatemodified($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setExpert($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDatechecked($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setTs($arr[$keys[28]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FooditemsPeer::DATABASE_NAME);

        if ($this->isColumnModified(FooditemsPeer::AUTOCTR)) $criteria->add(FooditemsPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(FooditemsPeer::STOCKCODE)) $criteria->add(FooditemsPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(FooditemsPeer::SPECCODE)) $criteria->add(FooditemsPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(FooditemsPeer::LOCALITY)) $criteria->add(FooditemsPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(FooditemsPeer::C_CODE)) $criteria->add(FooditemsPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(FooditemsPeer::FOODSREFNO)) $criteria->add(FooditemsPeer::FOODSREFNO, $this->foodsrefno);
        if ($this->isColumnModified(FooditemsPeer::FOODI)) $criteria->add(FooditemsPeer::FOODI, $this->foodi);
        if ($this->isColumnModified(FooditemsPeer::PREYSTAGE)) $criteria->add(FooditemsPeer::PREYSTAGE, $this->preystage);
        if ($this->isColumnModified(FooditemsPeer::FOODII)) $criteria->add(FooditemsPeer::FOODII, $this->foodii);
        if ($this->isColumnModified(FooditemsPeer::FOODIII)) $criteria->add(FooditemsPeer::FOODIII, $this->foodiii);
        if ($this->isColumnModified(FooditemsPeer::COMMONESS)) $criteria->add(FooditemsPeer::COMMONESS, $this->commoness);
        if ($this->isColumnModified(FooditemsPeer::COMMONESSII)) $criteria->add(FooditemsPeer::COMMONESSII, $this->commonessii);
        if ($this->isColumnModified(FooditemsPeer::FOODGROUP)) $criteria->add(FooditemsPeer::FOODGROUP, $this->foodgroup);
        if ($this->isColumnModified(FooditemsPeer::FOODNAME)) $criteria->add(FooditemsPeer::FOODNAME, $this->foodname);
        if ($this->isColumnModified(FooditemsPeer::PREYSPECCODE)) $criteria->add(FooditemsPeer::PREYSPECCODE, $this->preyspeccode);
        if ($this->isColumnModified(FooditemsPeer::PREYSPECCODESLB)) $criteria->add(FooditemsPeer::PREYSPECCODESLB, $this->preyspeccodeslb);
        if ($this->isColumnModified(FooditemsPeer::ALPHACODE)) $criteria->add(FooditemsPeer::ALPHACODE, $this->alphacode);
        if ($this->isColumnModified(FooditemsPeer::PREYTROPH)) $criteria->add(FooditemsPeer::PREYTROPH, $this->preytroph);
        if ($this->isColumnModified(FooditemsPeer::PREYSETROPH)) $criteria->add(FooditemsPeer::PREYSETROPH, $this->preysetroph);
        if ($this->isColumnModified(FooditemsPeer::TROPHREFNO)) $criteria->add(FooditemsPeer::TROPHREFNO, $this->trophrefno);
        if ($this->isColumnModified(FooditemsPeer::PREDATORSTAGE)) $criteria->add(FooditemsPeer::PREDATORSTAGE, $this->predatorstage);
        if ($this->isColumnModified(FooditemsPeer::LOCALITY2)) $criteria->add(FooditemsPeer::LOCALITY2, $this->locality2);
        if ($this->isColumnModified(FooditemsPeer::ENTERED)) $criteria->add(FooditemsPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(FooditemsPeer::DATEENTERED)) $criteria->add(FooditemsPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(FooditemsPeer::MODIFIED)) $criteria->add(FooditemsPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(FooditemsPeer::DATEMODIFIED)) $criteria->add(FooditemsPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(FooditemsPeer::EXPERT)) $criteria->add(FooditemsPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(FooditemsPeer::DATECHECKED)) $criteria->add(FooditemsPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(FooditemsPeer::TS)) $criteria->add(FooditemsPeer::TS, $this->ts);

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
        $criteria = new Criteria(FooditemsPeer::DATABASE_NAME);
        $criteria->add(FooditemsPeer::STOCKCODE, $this->stockcode);
        $criteria->add(FooditemsPeer::FOODI, $this->foodi);
        $criteria->add(FooditemsPeer::PREYSTAGE, $this->preystage);
        $criteria->add(FooditemsPeer::FOODII, $this->foodii);
        $criteria->add(FooditemsPeer::FOODIII, $this->foodiii);
        $criteria->add(FooditemsPeer::FOODGROUP, $this->foodgroup);
        $criteria->add(FooditemsPeer::FOODNAME, $this->foodname);
        $criteria->add(FooditemsPeer::PREDATORSTAGE, $this->predatorstage);

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
        $pks[0] = $this->getStockcode();
        $pks[1] = $this->getFoodi();
        $pks[2] = $this->getPreystage();
        $pks[3] = $this->getFoodii();
        $pks[4] = $this->getFoodiii();
        $pks[5] = $this->getFoodgroup();
        $pks[6] = $this->getFoodname();
        $pks[7] = $this->getPredatorstage();

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
        $this->setStockcode($keys[0]);
        $this->setFoodi($keys[1]);
        $this->setPreystage($keys[2]);
        $this->setFoodii($keys[3]);
        $this->setFoodiii($keys[4]);
        $this->setFoodgroup($keys[5]);
        $this->setFoodname($keys[6]);
        $this->setPredatorstage($keys[7]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getStockcode()) && (null === $this->getFoodi()) && (null === $this->getPreystage()) && (null === $this->getFoodii()) && (null === $this->getFoodiii()) && (null === $this->getFoodgroup()) && (null === $this->getFoodname()) && (null === $this->getPredatorstage());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Fooditems (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setFoodsrefno($this->getFoodsrefno());
        $copyObj->setFoodi($this->getFoodi());
        $copyObj->setPreystage($this->getPreystage());
        $copyObj->setFoodii($this->getFoodii());
        $copyObj->setFoodiii($this->getFoodiii());
        $copyObj->setCommoness($this->getCommoness());
        $copyObj->setCommonessii($this->getCommonessii());
        $copyObj->setFoodgroup($this->getFoodgroup());
        $copyObj->setFoodname($this->getFoodname());
        $copyObj->setPreyspeccode($this->getPreyspeccode());
        $copyObj->setPreyspeccodeslb($this->getPreyspeccodeslb());
        $copyObj->setAlphacode($this->getAlphacode());
        $copyObj->setPreytroph($this->getPreytroph());
        $copyObj->setPreysetroph($this->getPreysetroph());
        $copyObj->setTrophrefno($this->getTrophrefno());
        $copyObj->setPredatorstage($this->getPredatorstage());
        $copyObj->setLocality2($this->getLocality2());
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
     * @return Fooditems Clone of current object.
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
     * @return FooditemsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FooditemsPeer();
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
        $this->locality = null;
        $this->c_code = null;
        $this->foodsrefno = null;
        $this->foodi = null;
        $this->preystage = null;
        $this->foodii = null;
        $this->foodiii = null;
        $this->commoness = null;
        $this->commonessii = null;
        $this->foodgroup = null;
        $this->foodname = null;
        $this->preyspeccode = null;
        $this->preyspeccodeslb = null;
        $this->alphacode = null;
        $this->preytroph = null;
        $this->preysetroph = null;
        $this->trophrefno = null;
        $this->predatorstage = null;
        $this->locality2 = null;
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
        return (string) $this->exportTo(FooditemsPeer::DEFAULT_STRING_FORMAT);
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
