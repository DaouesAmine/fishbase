<?php


/**
 * Base class that represents a row from the 'fl_losses' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFlLosses extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FlLossesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FlLossesPeer
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
     * The value for the fishcode field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $fishcode;

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
     * The value for the datasourcecode field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $datasourcecode;

    /**
     * The value for the locationcode field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $locationcode;

    /**
     * The value for the estimatecode field.
     * @var        string
     */
    protected $estimatecode;

    /**
     * The value for the lossstage field.
     * @var        string
     */
    protected $lossstage;

    /**
     * The value for the periodofstudy field.
     * @var        string
     */
    protected $periodofstudy;

    /**
     * The value for the previousprocess field.
     * @var        string
     */
    protected $previousprocess;

    /**
     * The value for the previoustreatment field.
     * @var        string
     */
    protected $previoustreatment;

    /**
     * The value for the fishsizemin field.
     * @var        double
     */
    protected $fishsizemin;

    /**
     * The value for the fishsizemax field.
     * @var        double
     */
    protected $fishsizemax;

    /**
     * The value for the endusebestquality field.
     * @var        string
     */
    protected $endusebestquality;

    /**
     * The value for the enduselowerquality field.
     * @var        string
     */
    protected $enduselowerquality;

    /**
     * The value for the reasonforloss field.
     * @var        string
     */
    protected $reasonforloss;

    /**
     * The value for the insecttype field.
     * @var        string
     */
    protected $insecttype;

    /**
     * The value for the batchweight field.
     * @var        double
     */
    protected $batchweight;

    /**
     * The value for the weightofphysicalloss field.
     * @var        double
     */
    protected $weightofphysicalloss;

    /**
     * The value for the physicallossmin field.
     * @var        double
     */
    protected $physicallossmin;

    /**
     * The value for the physicallossmax field.
     * @var        double
     */
    protected $physicallossmax;

    /**
     * The value for the weightlosingquality field.
     * @var        double
     */
    protected $weightlosingquality;

    /**
     * The value for the pweightlosingqualitymin field.
     * @var        double
     */
    protected $pweightlosingqualitymin;

    /**
     * The value for the pweightlosingqualitymax field.
     * @var        double
     */
    protected $pweightlosingqualitymax;

    /**
     * The value for the pfishaffectedbynumbermin field.
     * @var        double
     */
    protected $pfishaffectedbynumbermin;

    /**
     * The value for the pfishaffectedbynumbermax field.
     * @var        double
     */
    protected $pfishaffectedbynumbermax;

    /**
     * The value for the costs field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $costs;

    /**
     * The value for the others field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $others;

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
        $this->fishcode = 0;
        $this->datasourcecode = 0;
        $this->locationcode = 0;
        $this->costs = '0';
        $this->others = '0';
        $this->editable = '-1';
    }

    /**
     * Initializes internal state of BaseFlLosses object.
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
     * Get the [fishcode] column value.
     *
     * @return int
     */
    public function getFishcode()
    {

        return $this->fishcode;
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
     * Get the [datasourcecode] column value.
     *
     * @return int
     */
    public function getDatasourcecode()
    {

        return $this->datasourcecode;
    }

    /**
     * Get the [locationcode] column value.
     *
     * @return int
     */
    public function getLocationcode()
    {

        return $this->locationcode;
    }

    /**
     * Get the [estimatecode] column value.
     *
     * @return string
     */
    public function getEstimatecode()
    {

        return $this->estimatecode;
    }

    /**
     * Get the [lossstage] column value.
     *
     * @return string
     */
    public function getLossstage()
    {

        return $this->lossstage;
    }

    /**
     * Get the [periodofstudy] column value.
     *
     * @return string
     */
    public function getPeriodofstudy()
    {

        return $this->periodofstudy;
    }

    /**
     * Get the [previousprocess] column value.
     *
     * @return string
     */
    public function getPreviousprocess()
    {

        return $this->previousprocess;
    }

    /**
     * Get the [previoustreatment] column value.
     *
     * @return string
     */
    public function getPrevioustreatment()
    {

        return $this->previoustreatment;
    }

    /**
     * Get the [fishsizemin] column value.
     *
     * @return double
     */
    public function getFishsizemin()
    {

        return $this->fishsizemin;
    }

    /**
     * Get the [fishsizemax] column value.
     *
     * @return double
     */
    public function getFishsizemax()
    {

        return $this->fishsizemax;
    }

    /**
     * Get the [endusebestquality] column value.
     *
     * @return string
     */
    public function getEndusebestquality()
    {

        return $this->endusebestquality;
    }

    /**
     * Get the [enduselowerquality] column value.
     *
     * @return string
     */
    public function getEnduselowerquality()
    {

        return $this->enduselowerquality;
    }

    /**
     * Get the [reasonforloss] column value.
     *
     * @return string
     */
    public function getReasonforloss()
    {

        return $this->reasonforloss;
    }

    /**
     * Get the [insecttype] column value.
     *
     * @return string
     */
    public function getInsecttype()
    {

        return $this->insecttype;
    }

    /**
     * Get the [batchweight] column value.
     *
     * @return double
     */
    public function getBatchweight()
    {

        return $this->batchweight;
    }

    /**
     * Get the [weightofphysicalloss] column value.
     *
     * @return double
     */
    public function getWeightofphysicalloss()
    {

        return $this->weightofphysicalloss;
    }

    /**
     * Get the [physicallossmin] column value.
     *
     * @return double
     */
    public function getPhysicallossmin()
    {

        return $this->physicallossmin;
    }

    /**
     * Get the [physicallossmax] column value.
     *
     * @return double
     */
    public function getPhysicallossmax()
    {

        return $this->physicallossmax;
    }

    /**
     * Get the [weightlosingquality] column value.
     *
     * @return double
     */
    public function getWeightlosingquality()
    {

        return $this->weightlosingquality;
    }

    /**
     * Get the [pweightlosingqualitymin] column value.
     *
     * @return double
     */
    public function getPweightlosingqualitymin()
    {

        return $this->pweightlosingqualitymin;
    }

    /**
     * Get the [pweightlosingqualitymax] column value.
     *
     * @return double
     */
    public function getPweightlosingqualitymax()
    {

        return $this->pweightlosingqualitymax;
    }

    /**
     * Get the [pfishaffectedbynumbermin] column value.
     *
     * @return double
     */
    public function getPfishaffectedbynumbermin()
    {

        return $this->pfishaffectedbynumbermin;
    }

    /**
     * Get the [pfishaffectedbynumbermax] column value.
     *
     * @return double
     */
    public function getPfishaffectedbynumbermax()
    {

        return $this->pfishaffectedbynumbermax;
    }

    /**
     * Get the [costs] column value.
     *
     * @return string
     */
    public function getCosts()
    {

        return $this->costs;
    }

    /**
     * Get the [others] column value.
     *
     * @return string
     */
    public function getOthers()
    {

        return $this->others;
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
     * @return FlLosses The current object (for fluent API support)
     */
    public function setLosscode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->losscode !== $v) {
            $this->losscode = $v;
            $this->modifiedColumns[] = FlLossesPeer::LOSSCODE;
        }


        return $this;
    } // setLosscode()

    /**
     * Set the value of [fishcode] column.
     *
     * @param  int $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setFishcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fishcode !== $v) {
            $this->fishcode = $v;
            $this->modifiedColumns[] = FlLossesPeer::FISHCODE;
        }


        return $this;
    } // setFishcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = FlLossesPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = FlLossesPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [datasourcecode] column.
     *
     * @param  int $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setDatasourcecode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->datasourcecode !== $v) {
            $this->datasourcecode = $v;
            $this->modifiedColumns[] = FlLossesPeer::DATASOURCECODE;
        }


        return $this;
    } // setDatasourcecode()

    /**
     * Set the value of [locationcode] column.
     *
     * @param  int $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setLocationcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->locationcode !== $v) {
            $this->locationcode = $v;
            $this->modifiedColumns[] = FlLossesPeer::LOCATIONCODE;
        }


        return $this;
    } // setLocationcode()

    /**
     * Set the value of [estimatecode] column.
     *
     * @param  string $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setEstimatecode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->estimatecode !== $v) {
            $this->estimatecode = $v;
            $this->modifiedColumns[] = FlLossesPeer::ESTIMATECODE;
        }


        return $this;
    } // setEstimatecode()

    /**
     * Set the value of [lossstage] column.
     *
     * @param  string $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setLossstage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lossstage !== $v) {
            $this->lossstage = $v;
            $this->modifiedColumns[] = FlLossesPeer::LOSSSTAGE;
        }


        return $this;
    } // setLossstage()

    /**
     * Set the value of [periodofstudy] column.
     *
     * @param  string $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setPeriodofstudy($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->periodofstudy !== $v) {
            $this->periodofstudy = $v;
            $this->modifiedColumns[] = FlLossesPeer::PERIODOFSTUDY;
        }


        return $this;
    } // setPeriodofstudy()

    /**
     * Set the value of [previousprocess] column.
     *
     * @param  string $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setPreviousprocess($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->previousprocess !== $v) {
            $this->previousprocess = $v;
            $this->modifiedColumns[] = FlLossesPeer::PREVIOUSPROCESS;
        }


        return $this;
    } // setPreviousprocess()

    /**
     * Set the value of [previoustreatment] column.
     *
     * @param  string $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setPrevioustreatment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->previoustreatment !== $v) {
            $this->previoustreatment = $v;
            $this->modifiedColumns[] = FlLossesPeer::PREVIOUSTREATMENT;
        }


        return $this;
    } // setPrevioustreatment()

    /**
     * Set the value of [fishsizemin] column.
     *
     * @param  double $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setFishsizemin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->fishsizemin !== $v) {
            $this->fishsizemin = $v;
            $this->modifiedColumns[] = FlLossesPeer::FISHSIZEMIN;
        }


        return $this;
    } // setFishsizemin()

    /**
     * Set the value of [fishsizemax] column.
     *
     * @param  double $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setFishsizemax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->fishsizemax !== $v) {
            $this->fishsizemax = $v;
            $this->modifiedColumns[] = FlLossesPeer::FISHSIZEMAX;
        }


        return $this;
    } // setFishsizemax()

    /**
     * Set the value of [endusebestquality] column.
     *
     * @param  string $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setEndusebestquality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->endusebestquality !== $v) {
            $this->endusebestquality = $v;
            $this->modifiedColumns[] = FlLossesPeer::ENDUSEBESTQUALITY;
        }


        return $this;
    } // setEndusebestquality()

    /**
     * Set the value of [enduselowerquality] column.
     *
     * @param  string $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setEnduselowerquality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->enduselowerquality !== $v) {
            $this->enduselowerquality = $v;
            $this->modifiedColumns[] = FlLossesPeer::ENDUSELOWERQUALITY;
        }


        return $this;
    } // setEnduselowerquality()

    /**
     * Set the value of [reasonforloss] column.
     *
     * @param  string $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setReasonforloss($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reasonforloss !== $v) {
            $this->reasonforloss = $v;
            $this->modifiedColumns[] = FlLossesPeer::REASONFORLOSS;
        }


        return $this;
    } // setReasonforloss()

    /**
     * Set the value of [insecttype] column.
     *
     * @param  string $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setInsecttype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->insecttype !== $v) {
            $this->insecttype = $v;
            $this->modifiedColumns[] = FlLossesPeer::INSECTTYPE;
        }


        return $this;
    } // setInsecttype()

    /**
     * Set the value of [batchweight] column.
     *
     * @param  double $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setBatchweight($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->batchweight !== $v) {
            $this->batchweight = $v;
            $this->modifiedColumns[] = FlLossesPeer::BATCHWEIGHT;
        }


        return $this;
    } // setBatchweight()

    /**
     * Set the value of [weightofphysicalloss] column.
     *
     * @param  double $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setWeightofphysicalloss($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->weightofphysicalloss !== $v) {
            $this->weightofphysicalloss = $v;
            $this->modifiedColumns[] = FlLossesPeer::WEIGHTOFPHYSICALLOSS;
        }


        return $this;
    } // setWeightofphysicalloss()

    /**
     * Set the value of [physicallossmin] column.
     *
     * @param  double $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setPhysicallossmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->physicallossmin !== $v) {
            $this->physicallossmin = $v;
            $this->modifiedColumns[] = FlLossesPeer::PHYSICALLOSSMIN;
        }


        return $this;
    } // setPhysicallossmin()

    /**
     * Set the value of [physicallossmax] column.
     *
     * @param  double $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setPhysicallossmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->physicallossmax !== $v) {
            $this->physicallossmax = $v;
            $this->modifiedColumns[] = FlLossesPeer::PHYSICALLOSSMAX;
        }


        return $this;
    } // setPhysicallossmax()

    /**
     * Set the value of [weightlosingquality] column.
     *
     * @param  double $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setWeightlosingquality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->weightlosingquality !== $v) {
            $this->weightlosingquality = $v;
            $this->modifiedColumns[] = FlLossesPeer::WEIGHTLOSINGQUALITY;
        }


        return $this;
    } // setWeightlosingquality()

    /**
     * Set the value of [pweightlosingqualitymin] column.
     *
     * @param  double $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setPweightlosingqualitymin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pweightlosingqualitymin !== $v) {
            $this->pweightlosingqualitymin = $v;
            $this->modifiedColumns[] = FlLossesPeer::PWEIGHTLOSINGQUALITYMIN;
        }


        return $this;
    } // setPweightlosingqualitymin()

    /**
     * Set the value of [pweightlosingqualitymax] column.
     *
     * @param  double $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setPweightlosingqualitymax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pweightlosingqualitymax !== $v) {
            $this->pweightlosingqualitymax = $v;
            $this->modifiedColumns[] = FlLossesPeer::PWEIGHTLOSINGQUALITYMAX;
        }


        return $this;
    } // setPweightlosingqualitymax()

    /**
     * Set the value of [pfishaffectedbynumbermin] column.
     *
     * @param  double $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setPfishaffectedbynumbermin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pfishaffectedbynumbermin !== $v) {
            $this->pfishaffectedbynumbermin = $v;
            $this->modifiedColumns[] = FlLossesPeer::PFISHAFFECTEDBYNUMBERMIN;
        }


        return $this;
    } // setPfishaffectedbynumbermin()

    /**
     * Set the value of [pfishaffectedbynumbermax] column.
     *
     * @param  double $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setPfishaffectedbynumbermax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pfishaffectedbynumbermax !== $v) {
            $this->pfishaffectedbynumbermax = $v;
            $this->modifiedColumns[] = FlLossesPeer::PFISHAFFECTEDBYNUMBERMAX;
        }


        return $this;
    } // setPfishaffectedbynumbermax()

    /**
     * Set the value of [costs] column.
     *
     * @param  string $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setCosts($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->costs !== $v) {
            $this->costs = $v;
            $this->modifiedColumns[] = FlLossesPeer::COSTS;
        }


        return $this;
    } // setCosts()

    /**
     * Set the value of [others] column.
     *
     * @param  string $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setOthers($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->others !== $v) {
            $this->others = $v;
            $this->modifiedColumns[] = FlLossesPeer::OTHERS;
        }


        return $this;
    } // setOthers()

    /**
     * Set the value of [editable] column.
     *
     * @param  string $v new value
     * @return FlLosses The current object (for fluent API support)
     */
    public function setEditable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->editable !== $v) {
            $this->editable = $v;
            $this->modifiedColumns[] = FlLossesPeer::EDITABLE;
        }


        return $this;
    } // setEditable()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return FlLosses The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = FlLossesPeer::TS;
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
            if ($this->fishcode !== 0) {
                return false;
            }

            if ($this->datasourcecode !== 0) {
                return false;
            }

            if ($this->locationcode !== 0) {
                return false;
            }

            if ($this->costs !== '0') {
                return false;
            }

            if ($this->others !== '0') {
                return false;
            }

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
            $this->fishcode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->speccode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->stockcode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->datasourcecode = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->locationcode = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->estimatecode = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->lossstage = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->periodofstudy = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->previousprocess = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->previoustreatment = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->fishsizemin = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->fishsizemax = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->endusebestquality = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->enduselowerquality = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->reasonforloss = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->insecttype = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->batchweight = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->weightofphysicalloss = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->physicallossmin = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->physicallossmax = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->weightlosingquality = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->pweightlosingqualitymin = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->pweightlosingqualitymax = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
            $this->pfishaffectedbynumbermin = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
            $this->pfishaffectedbynumbermax = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->costs = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->others = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->editable = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->ts = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 30; // 30 = FlLossesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating FlLosses object", $e);
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
            $con = Propel::getConnection(FlLossesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FlLossesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(FlLossesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FlLossesQuery::create()
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
            $con = Propel::getConnection(FlLossesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                FlLossesPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = FlLossesPeer::LOSSCODE;
        if (null !== $this->losscode) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . FlLossesPeer::LOSSCODE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(FlLossesPeer::LOSSCODE)) {
            $modifiedColumns[':p' . $index++]  = '`LossCode`';
        }
        if ($this->isColumnModified(FlLossesPeer::FISHCODE)) {
            $modifiedColumns[':p' . $index++]  = '`FishCode`';
        }
        if ($this->isColumnModified(FlLossesPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Speccode`';
        }
        if ($this->isColumnModified(FlLossesPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Stockcode`';
        }
        if ($this->isColumnModified(FlLossesPeer::DATASOURCECODE)) {
            $modifiedColumns[':p' . $index++]  = '`DataSourceCode`';
        }
        if ($this->isColumnModified(FlLossesPeer::LOCATIONCODE)) {
            $modifiedColumns[':p' . $index++]  = '`LocationCode`';
        }
        if ($this->isColumnModified(FlLossesPeer::ESTIMATECODE)) {
            $modifiedColumns[':p' . $index++]  = '`EstimateCode`';
        }
        if ($this->isColumnModified(FlLossesPeer::LOSSSTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`LossStage`';
        }
        if ($this->isColumnModified(FlLossesPeer::PERIODOFSTUDY)) {
            $modifiedColumns[':p' . $index++]  = '`PeriodofStudy`';
        }
        if ($this->isColumnModified(FlLossesPeer::PREVIOUSPROCESS)) {
            $modifiedColumns[':p' . $index++]  = '`PreviousProcess`';
        }
        if ($this->isColumnModified(FlLossesPeer::PREVIOUSTREATMENT)) {
            $modifiedColumns[':p' . $index++]  = '`PreviousTreatment`';
        }
        if ($this->isColumnModified(FlLossesPeer::FISHSIZEMIN)) {
            $modifiedColumns[':p' . $index++]  = '`FishSizeMin`';
        }
        if ($this->isColumnModified(FlLossesPeer::FISHSIZEMAX)) {
            $modifiedColumns[':p' . $index++]  = '`FishSizeMax`';
        }
        if ($this->isColumnModified(FlLossesPeer::ENDUSEBESTQUALITY)) {
            $modifiedColumns[':p' . $index++]  = '`EndUseBestQuality`';
        }
        if ($this->isColumnModified(FlLossesPeer::ENDUSELOWERQUALITY)) {
            $modifiedColumns[':p' . $index++]  = '`EndUseLowerQuality`';
        }
        if ($this->isColumnModified(FlLossesPeer::REASONFORLOSS)) {
            $modifiedColumns[':p' . $index++]  = '`ReasonForLoss`';
        }
        if ($this->isColumnModified(FlLossesPeer::INSECTTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`InsectType`';
        }
        if ($this->isColumnModified(FlLossesPeer::BATCHWEIGHT)) {
            $modifiedColumns[':p' . $index++]  = '`BatchWeight`';
        }
        if ($this->isColumnModified(FlLossesPeer::WEIGHTOFPHYSICALLOSS)) {
            $modifiedColumns[':p' . $index++]  = '`WeightOfPhysicalLoss`';
        }
        if ($this->isColumnModified(FlLossesPeer::PHYSICALLOSSMIN)) {
            $modifiedColumns[':p' . $index++]  = '`PhysicalLossMin`';
        }
        if ($this->isColumnModified(FlLossesPeer::PHYSICALLOSSMAX)) {
            $modifiedColumns[':p' . $index++]  = '`PhysicalLossMax`';
        }
        if ($this->isColumnModified(FlLossesPeer::WEIGHTLOSINGQUALITY)) {
            $modifiedColumns[':p' . $index++]  = '`WeightLosingQuality`';
        }
        if ($this->isColumnModified(FlLossesPeer::PWEIGHTLOSINGQUALITYMIN)) {
            $modifiedColumns[':p' . $index++]  = '`PWeightLosingQualityMin`';
        }
        if ($this->isColumnModified(FlLossesPeer::PWEIGHTLOSINGQUALITYMAX)) {
            $modifiedColumns[':p' . $index++]  = '`PWeightLosingQualityMax`';
        }
        if ($this->isColumnModified(FlLossesPeer::PFISHAFFECTEDBYNUMBERMIN)) {
            $modifiedColumns[':p' . $index++]  = '`PFishAffectedByNumberMin`';
        }
        if ($this->isColumnModified(FlLossesPeer::PFISHAFFECTEDBYNUMBERMAX)) {
            $modifiedColumns[':p' . $index++]  = '`PFishAffectedByNumberMax`';
        }
        if ($this->isColumnModified(FlLossesPeer::COSTS)) {
            $modifiedColumns[':p' . $index++]  = '`Costs`';
        }
        if ($this->isColumnModified(FlLossesPeer::OTHERS)) {
            $modifiedColumns[':p' . $index++]  = '`Others`';
        }
        if ($this->isColumnModified(FlLossesPeer::EDITABLE)) {
            $modifiedColumns[':p' . $index++]  = '`Editable`';
        }
        if ($this->isColumnModified(FlLossesPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `fl_losses` (%s) VALUES (%s)',
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
                    case '`FishCode`':
                        $stmt->bindValue($identifier, $this->fishcode, PDO::PARAM_INT);
                        break;
                    case '`Speccode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`Stockcode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`DataSourceCode`':
                        $stmt->bindValue($identifier, $this->datasourcecode, PDO::PARAM_INT);
                        break;
                    case '`LocationCode`':
                        $stmt->bindValue($identifier, $this->locationcode, PDO::PARAM_INT);
                        break;
                    case '`EstimateCode`':
                        $stmt->bindValue($identifier, $this->estimatecode, PDO::PARAM_STR);
                        break;
                    case '`LossStage`':
                        $stmt->bindValue($identifier, $this->lossstage, PDO::PARAM_STR);
                        break;
                    case '`PeriodofStudy`':
                        $stmt->bindValue($identifier, $this->periodofstudy, PDO::PARAM_STR);
                        break;
                    case '`PreviousProcess`':
                        $stmt->bindValue($identifier, $this->previousprocess, PDO::PARAM_STR);
                        break;
                    case '`PreviousTreatment`':
                        $stmt->bindValue($identifier, $this->previoustreatment, PDO::PARAM_STR);
                        break;
                    case '`FishSizeMin`':
                        $stmt->bindValue($identifier, $this->fishsizemin, PDO::PARAM_STR);
                        break;
                    case '`FishSizeMax`':
                        $stmt->bindValue($identifier, $this->fishsizemax, PDO::PARAM_STR);
                        break;
                    case '`EndUseBestQuality`':
                        $stmt->bindValue($identifier, $this->endusebestquality, PDO::PARAM_STR);
                        break;
                    case '`EndUseLowerQuality`':
                        $stmt->bindValue($identifier, $this->enduselowerquality, PDO::PARAM_STR);
                        break;
                    case '`ReasonForLoss`':
                        $stmt->bindValue($identifier, $this->reasonforloss, PDO::PARAM_STR);
                        break;
                    case '`InsectType`':
                        $stmt->bindValue($identifier, $this->insecttype, PDO::PARAM_STR);
                        break;
                    case '`BatchWeight`':
                        $stmt->bindValue($identifier, $this->batchweight, PDO::PARAM_STR);
                        break;
                    case '`WeightOfPhysicalLoss`':
                        $stmt->bindValue($identifier, $this->weightofphysicalloss, PDO::PARAM_STR);
                        break;
                    case '`PhysicalLossMin`':
                        $stmt->bindValue($identifier, $this->physicallossmin, PDO::PARAM_STR);
                        break;
                    case '`PhysicalLossMax`':
                        $stmt->bindValue($identifier, $this->physicallossmax, PDO::PARAM_STR);
                        break;
                    case '`WeightLosingQuality`':
                        $stmt->bindValue($identifier, $this->weightlosingquality, PDO::PARAM_STR);
                        break;
                    case '`PWeightLosingQualityMin`':
                        $stmt->bindValue($identifier, $this->pweightlosingqualitymin, PDO::PARAM_STR);
                        break;
                    case '`PWeightLosingQualityMax`':
                        $stmt->bindValue($identifier, $this->pweightlosingqualitymax, PDO::PARAM_STR);
                        break;
                    case '`PFishAffectedByNumberMin`':
                        $stmt->bindValue($identifier, $this->pfishaffectedbynumbermin, PDO::PARAM_STR);
                        break;
                    case '`PFishAffectedByNumberMax`':
                        $stmt->bindValue($identifier, $this->pfishaffectedbynumbermax, PDO::PARAM_STR);
                        break;
                    case '`Costs`':
                        $stmt->bindValue($identifier, $this->costs, PDO::PARAM_STR);
                        break;
                    case '`Others`':
                        $stmt->bindValue($identifier, $this->others, PDO::PARAM_STR);
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

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setLosscode($pk);

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


            if (($retval = FlLossesPeer::doValidate($this, $columns)) !== true) {
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
        $pos = FlLossesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getFishcode();
                break;
            case 2:
                return $this->getSpeccode();
                break;
            case 3:
                return $this->getStockcode();
                break;
            case 4:
                return $this->getDatasourcecode();
                break;
            case 5:
                return $this->getLocationcode();
                break;
            case 6:
                return $this->getEstimatecode();
                break;
            case 7:
                return $this->getLossstage();
                break;
            case 8:
                return $this->getPeriodofstudy();
                break;
            case 9:
                return $this->getPreviousprocess();
                break;
            case 10:
                return $this->getPrevioustreatment();
                break;
            case 11:
                return $this->getFishsizemin();
                break;
            case 12:
                return $this->getFishsizemax();
                break;
            case 13:
                return $this->getEndusebestquality();
                break;
            case 14:
                return $this->getEnduselowerquality();
                break;
            case 15:
                return $this->getReasonforloss();
                break;
            case 16:
                return $this->getInsecttype();
                break;
            case 17:
                return $this->getBatchweight();
                break;
            case 18:
                return $this->getWeightofphysicalloss();
                break;
            case 19:
                return $this->getPhysicallossmin();
                break;
            case 20:
                return $this->getPhysicallossmax();
                break;
            case 21:
                return $this->getWeightlosingquality();
                break;
            case 22:
                return $this->getPweightlosingqualitymin();
                break;
            case 23:
                return $this->getPweightlosingqualitymax();
                break;
            case 24:
                return $this->getPfishaffectedbynumbermin();
                break;
            case 25:
                return $this->getPfishaffectedbynumbermax();
                break;
            case 26:
                return $this->getCosts();
                break;
            case 27:
                return $this->getOthers();
                break;
            case 28:
                return $this->getEditable();
                break;
            case 29:
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
        if (isset($alreadyDumpedObjects['FlLosses'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['FlLosses'][$this->getPrimaryKey()] = true;
        $keys = FlLossesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getLosscode(),
            $keys[1] => $this->getFishcode(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getStockcode(),
            $keys[4] => $this->getDatasourcecode(),
            $keys[5] => $this->getLocationcode(),
            $keys[6] => $this->getEstimatecode(),
            $keys[7] => $this->getLossstage(),
            $keys[8] => $this->getPeriodofstudy(),
            $keys[9] => $this->getPreviousprocess(),
            $keys[10] => $this->getPrevioustreatment(),
            $keys[11] => $this->getFishsizemin(),
            $keys[12] => $this->getFishsizemax(),
            $keys[13] => $this->getEndusebestquality(),
            $keys[14] => $this->getEnduselowerquality(),
            $keys[15] => $this->getReasonforloss(),
            $keys[16] => $this->getInsecttype(),
            $keys[17] => $this->getBatchweight(),
            $keys[18] => $this->getWeightofphysicalloss(),
            $keys[19] => $this->getPhysicallossmin(),
            $keys[20] => $this->getPhysicallossmax(),
            $keys[21] => $this->getWeightlosingquality(),
            $keys[22] => $this->getPweightlosingqualitymin(),
            $keys[23] => $this->getPweightlosingqualitymax(),
            $keys[24] => $this->getPfishaffectedbynumbermin(),
            $keys[25] => $this->getPfishaffectedbynumbermax(),
            $keys[26] => $this->getCosts(),
            $keys[27] => $this->getOthers(),
            $keys[28] => $this->getEditable(),
            $keys[29] => $this->getTs(),
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
        $pos = FlLossesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setFishcode($value);
                break;
            case 2:
                $this->setSpeccode($value);
                break;
            case 3:
                $this->setStockcode($value);
                break;
            case 4:
                $this->setDatasourcecode($value);
                break;
            case 5:
                $this->setLocationcode($value);
                break;
            case 6:
                $this->setEstimatecode($value);
                break;
            case 7:
                $this->setLossstage($value);
                break;
            case 8:
                $this->setPeriodofstudy($value);
                break;
            case 9:
                $this->setPreviousprocess($value);
                break;
            case 10:
                $this->setPrevioustreatment($value);
                break;
            case 11:
                $this->setFishsizemin($value);
                break;
            case 12:
                $this->setFishsizemax($value);
                break;
            case 13:
                $this->setEndusebestquality($value);
                break;
            case 14:
                $this->setEnduselowerquality($value);
                break;
            case 15:
                $this->setReasonforloss($value);
                break;
            case 16:
                $this->setInsecttype($value);
                break;
            case 17:
                $this->setBatchweight($value);
                break;
            case 18:
                $this->setWeightofphysicalloss($value);
                break;
            case 19:
                $this->setPhysicallossmin($value);
                break;
            case 20:
                $this->setPhysicallossmax($value);
                break;
            case 21:
                $this->setWeightlosingquality($value);
                break;
            case 22:
                $this->setPweightlosingqualitymin($value);
                break;
            case 23:
                $this->setPweightlosingqualitymax($value);
                break;
            case 24:
                $this->setPfishaffectedbynumbermin($value);
                break;
            case 25:
                $this->setPfishaffectedbynumbermax($value);
                break;
            case 26:
                $this->setCosts($value);
                break;
            case 27:
                $this->setOthers($value);
                break;
            case 28:
                $this->setEditable($value);
                break;
            case 29:
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
        $keys = FlLossesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setLosscode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFishcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setStockcode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDatasourcecode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLocationcode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setEstimatecode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLossstage($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPeriodofstudy($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPreviousprocess($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPrevioustreatment($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setFishsizemin($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setFishsizemax($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setEndusebestquality($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setEnduselowerquality($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setReasonforloss($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setInsecttype($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setBatchweight($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setWeightofphysicalloss($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setPhysicallossmin($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setPhysicallossmax($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setWeightlosingquality($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setPweightlosingqualitymin($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setPweightlosingqualitymax($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setPfishaffectedbynumbermin($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setPfishaffectedbynumbermax($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setCosts($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setOthers($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setEditable($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setTs($arr[$keys[29]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FlLossesPeer::DATABASE_NAME);

        if ($this->isColumnModified(FlLossesPeer::LOSSCODE)) $criteria->add(FlLossesPeer::LOSSCODE, $this->losscode);
        if ($this->isColumnModified(FlLossesPeer::FISHCODE)) $criteria->add(FlLossesPeer::FISHCODE, $this->fishcode);
        if ($this->isColumnModified(FlLossesPeer::SPECCODE)) $criteria->add(FlLossesPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(FlLossesPeer::STOCKCODE)) $criteria->add(FlLossesPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(FlLossesPeer::DATASOURCECODE)) $criteria->add(FlLossesPeer::DATASOURCECODE, $this->datasourcecode);
        if ($this->isColumnModified(FlLossesPeer::LOCATIONCODE)) $criteria->add(FlLossesPeer::LOCATIONCODE, $this->locationcode);
        if ($this->isColumnModified(FlLossesPeer::ESTIMATECODE)) $criteria->add(FlLossesPeer::ESTIMATECODE, $this->estimatecode);
        if ($this->isColumnModified(FlLossesPeer::LOSSSTAGE)) $criteria->add(FlLossesPeer::LOSSSTAGE, $this->lossstage);
        if ($this->isColumnModified(FlLossesPeer::PERIODOFSTUDY)) $criteria->add(FlLossesPeer::PERIODOFSTUDY, $this->periodofstudy);
        if ($this->isColumnModified(FlLossesPeer::PREVIOUSPROCESS)) $criteria->add(FlLossesPeer::PREVIOUSPROCESS, $this->previousprocess);
        if ($this->isColumnModified(FlLossesPeer::PREVIOUSTREATMENT)) $criteria->add(FlLossesPeer::PREVIOUSTREATMENT, $this->previoustreatment);
        if ($this->isColumnModified(FlLossesPeer::FISHSIZEMIN)) $criteria->add(FlLossesPeer::FISHSIZEMIN, $this->fishsizemin);
        if ($this->isColumnModified(FlLossesPeer::FISHSIZEMAX)) $criteria->add(FlLossesPeer::FISHSIZEMAX, $this->fishsizemax);
        if ($this->isColumnModified(FlLossesPeer::ENDUSEBESTQUALITY)) $criteria->add(FlLossesPeer::ENDUSEBESTQUALITY, $this->endusebestquality);
        if ($this->isColumnModified(FlLossesPeer::ENDUSELOWERQUALITY)) $criteria->add(FlLossesPeer::ENDUSELOWERQUALITY, $this->enduselowerquality);
        if ($this->isColumnModified(FlLossesPeer::REASONFORLOSS)) $criteria->add(FlLossesPeer::REASONFORLOSS, $this->reasonforloss);
        if ($this->isColumnModified(FlLossesPeer::INSECTTYPE)) $criteria->add(FlLossesPeer::INSECTTYPE, $this->insecttype);
        if ($this->isColumnModified(FlLossesPeer::BATCHWEIGHT)) $criteria->add(FlLossesPeer::BATCHWEIGHT, $this->batchweight);
        if ($this->isColumnModified(FlLossesPeer::WEIGHTOFPHYSICALLOSS)) $criteria->add(FlLossesPeer::WEIGHTOFPHYSICALLOSS, $this->weightofphysicalloss);
        if ($this->isColumnModified(FlLossesPeer::PHYSICALLOSSMIN)) $criteria->add(FlLossesPeer::PHYSICALLOSSMIN, $this->physicallossmin);
        if ($this->isColumnModified(FlLossesPeer::PHYSICALLOSSMAX)) $criteria->add(FlLossesPeer::PHYSICALLOSSMAX, $this->physicallossmax);
        if ($this->isColumnModified(FlLossesPeer::WEIGHTLOSINGQUALITY)) $criteria->add(FlLossesPeer::WEIGHTLOSINGQUALITY, $this->weightlosingquality);
        if ($this->isColumnModified(FlLossesPeer::PWEIGHTLOSINGQUALITYMIN)) $criteria->add(FlLossesPeer::PWEIGHTLOSINGQUALITYMIN, $this->pweightlosingqualitymin);
        if ($this->isColumnModified(FlLossesPeer::PWEIGHTLOSINGQUALITYMAX)) $criteria->add(FlLossesPeer::PWEIGHTLOSINGQUALITYMAX, $this->pweightlosingqualitymax);
        if ($this->isColumnModified(FlLossesPeer::PFISHAFFECTEDBYNUMBERMIN)) $criteria->add(FlLossesPeer::PFISHAFFECTEDBYNUMBERMIN, $this->pfishaffectedbynumbermin);
        if ($this->isColumnModified(FlLossesPeer::PFISHAFFECTEDBYNUMBERMAX)) $criteria->add(FlLossesPeer::PFISHAFFECTEDBYNUMBERMAX, $this->pfishaffectedbynumbermax);
        if ($this->isColumnModified(FlLossesPeer::COSTS)) $criteria->add(FlLossesPeer::COSTS, $this->costs);
        if ($this->isColumnModified(FlLossesPeer::OTHERS)) $criteria->add(FlLossesPeer::OTHERS, $this->others);
        if ($this->isColumnModified(FlLossesPeer::EDITABLE)) $criteria->add(FlLossesPeer::EDITABLE, $this->editable);
        if ($this->isColumnModified(FlLossesPeer::TS)) $criteria->add(FlLossesPeer::TS, $this->ts);

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
        $criteria = new Criteria(FlLossesPeer::DATABASE_NAME);
        $criteria->add(FlLossesPeer::LOSSCODE, $this->losscode);

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
     * @param object $copyObj An object of FlLosses (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFishcode($this->getFishcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setDatasourcecode($this->getDatasourcecode());
        $copyObj->setLocationcode($this->getLocationcode());
        $copyObj->setEstimatecode($this->getEstimatecode());
        $copyObj->setLossstage($this->getLossstage());
        $copyObj->setPeriodofstudy($this->getPeriodofstudy());
        $copyObj->setPreviousprocess($this->getPreviousprocess());
        $copyObj->setPrevioustreatment($this->getPrevioustreatment());
        $copyObj->setFishsizemin($this->getFishsizemin());
        $copyObj->setFishsizemax($this->getFishsizemax());
        $copyObj->setEndusebestquality($this->getEndusebestquality());
        $copyObj->setEnduselowerquality($this->getEnduselowerquality());
        $copyObj->setReasonforloss($this->getReasonforloss());
        $copyObj->setInsecttype($this->getInsecttype());
        $copyObj->setBatchweight($this->getBatchweight());
        $copyObj->setWeightofphysicalloss($this->getWeightofphysicalloss());
        $copyObj->setPhysicallossmin($this->getPhysicallossmin());
        $copyObj->setPhysicallossmax($this->getPhysicallossmax());
        $copyObj->setWeightlosingquality($this->getWeightlosingquality());
        $copyObj->setPweightlosingqualitymin($this->getPweightlosingqualitymin());
        $copyObj->setPweightlosingqualitymax($this->getPweightlosingqualitymax());
        $copyObj->setPfishaffectedbynumbermin($this->getPfishaffectedbynumbermin());
        $copyObj->setPfishaffectedbynumbermax($this->getPfishaffectedbynumbermax());
        $copyObj->setCosts($this->getCosts());
        $copyObj->setOthers($this->getOthers());
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
     * @return FlLosses Clone of current object.
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
     * @return FlLossesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FlLossesPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->losscode = null;
        $this->fishcode = null;
        $this->speccode = null;
        $this->stockcode = null;
        $this->datasourcecode = null;
        $this->locationcode = null;
        $this->estimatecode = null;
        $this->lossstage = null;
        $this->periodofstudy = null;
        $this->previousprocess = null;
        $this->previoustreatment = null;
        $this->fishsizemin = null;
        $this->fishsizemax = null;
        $this->endusebestquality = null;
        $this->enduselowerquality = null;
        $this->reasonforloss = null;
        $this->insecttype = null;
        $this->batchweight = null;
        $this->weightofphysicalloss = null;
        $this->physicallossmin = null;
        $this->physicallossmax = null;
        $this->weightlosingquality = null;
        $this->pweightlosingqualitymin = null;
        $this->pweightlosingqualitymax = null;
        $this->pfishaffectedbynumbermin = null;
        $this->pfishaffectedbynumbermax = null;
        $this->costs = null;
        $this->others = null;
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
        return (string) $this->exportTo(FlLossesPeer::DEFAULT_STRING_FORMAT);
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
