<?php


/**
 * Base class that represents a row from the 'frynurserysystem' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFrynurserysystem extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FrynurserysystemPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FrynurserysystemPeer
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
     * The value for the commonname field.
     * @var        string
     */
    protected $commonname;

    /**
     * The value for the species field.
     * @var        string
     */
    protected $species;

    /**
     * The value for the mainref field.
     * @var        int
     */
    protected $mainref;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the locality field.
     * @var        string
     */
    protected $locality;

    /**
     * The value for the dataref field.
     * @var        int
     */
    protected $dataref;

    /**
     * The value for the numberoffry field.
     * @var        int
     */
    protected $numberoffry;

    /**
     * The value for the nurserysystemi field.
     * @var        string
     */
    protected $nurserysystemi;

    /**
     * The value for the nurserysystemii field.
     * @var        string
     */
    protected $nurserysystemii;

    /**
     * The value for the culturesystem field.
     * @var        string
     */
    protected $culturesystem;

    /**
     * The value for the mainwatersource field.
     * @var        string
     */
    protected $mainwatersource;

    /**
     * The value for the supplwatersource field.
     * @var        string
     */
    protected $supplwatersource;

    /**
     * The value for the tempmin field.
     * @var        double
     */
    protected $tempmin;

    /**
     * The value for the tempmax field.
     * @var        double
     */
    protected $tempmax;

    /**
     * The value for the salinmin field.
     * @var        double
     */
    protected $salinmin;

    /**
     * The value for the salinmax field.
     * @var        double
     */
    protected $salinmax;

    /**
     * The value for the phmin field.
     * @var        double
     */
    protected $phmin;

    /**
     * The value for the phmax field.
     * @var        double
     */
    protected $phmax;

    /**
     * The value for the oxygenmin field.
     * @var        double
     */
    protected $oxygenmin;

    /**
     * The value for the oxygenmax field.
     * @var        double
     */
    protected $oxygenmax;

    /**
     * The value for the illuminationmin field.
     * @var        int
     */
    protected $illuminationmin;

    /**
     * The value for the illuminationmax field.
     * @var        int
     */
    protected $illuminationmax;

    /**
     * The value for the stockingdensityorg field.
     * @var        string
     */
    protected $stockingdensityorg;

    /**
     * The value for the stockingdensity field.
     * @var        int
     */
    protected $stockingdensity;

    /**
     * The value for the unit field.
     * @var        string
     */
    protected $unit;

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
     * The value for the productionperiode field.
     * @var        string
     */
    protected $productionperiode;

    /**
     * The value for the timetoalevinsdaysmin field.
     * @var        int
     */
    protected $timetoalevinsdaysmin;

    /**
     * The value for the timetoalevinsdaysmax field.
     * @var        int
     */
    protected $timetoalevinsdaysmax;

    /**
     * The value for the timetoalevinsdaysdegmin field.
     * @var        int
     */
    protected $timetoalevinsdaysdegmin;

    /**
     * The value for the timetoalevinsdaysdegmax field.
     * @var        int
     */
    protected $timetoalevinsdaysdegmax;

    /**
     * The value for the mortalityrateorg field.
     * @var        string
     */
    protected $mortalityrateorg;

    /**
     * The value for the mortalityratemin field.
     * @var        double
     */
    protected $mortalityratemin;

    /**
     * The value for the mortalityratemax field.
     * @var        double
     */
    protected $mortalityratemax;

    /**
     * The value for the growthrate field.
     * @var        string
     */
    protected $growthrate;

    /**
     * The value for the fcr field.
     * @var        double
     */
    protected $fcr;

    /**
     * The value for the productioncycle field.
     * @var        int
     */
    protected $productioncycle;

    /**
     * The value for the unitcycle field.
     * @var        string
     */
    protected $unitcycle;

    /**
     * The value for the productionyearorg field.
     * @var        string
     */
    protected $productionyearorg;

    /**
     * The value for the productionyear field.
     * @var        int
     */
    protected $productionyear;

    /**
     * The value for the unityear field.
     * @var        string
     */
    protected $unityear;

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
     * Get the [commonname] column value.
     *
     * @return string
     */
    public function getCommonname()
    {

        return $this->commonname;
    }

    /**
     * Get the [species] column value.
     *
     * @return string
     */
    public function getSpecies()
    {

        return $this->species;
    }

    /**
     * Get the [mainref] column value.
     *
     * @return int
     */
    public function getMainref()
    {

        return $this->mainref;
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
     * Get the [locality] column value.
     *
     * @return string
     */
    public function getLocality()
    {

        return $this->locality;
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
     * Get the [numberoffry] column value.
     *
     * @return int
     */
    public function getNumberoffry()
    {

        return $this->numberoffry;
    }

    /**
     * Get the [nurserysystemi] column value.
     *
     * @return string
     */
    public function getNurserysystemi()
    {

        return $this->nurserysystemi;
    }

    /**
     * Get the [nurserysystemii] column value.
     *
     * @return string
     */
    public function getNurserysystemii()
    {

        return $this->nurserysystemii;
    }

    /**
     * Get the [culturesystem] column value.
     *
     * @return string
     */
    public function getCulturesystem()
    {

        return $this->culturesystem;
    }

    /**
     * Get the [mainwatersource] column value.
     *
     * @return string
     */
    public function getMainwatersource()
    {

        return $this->mainwatersource;
    }

    /**
     * Get the [supplwatersource] column value.
     *
     * @return string
     */
    public function getSupplwatersource()
    {

        return $this->supplwatersource;
    }

    /**
     * Get the [tempmin] column value.
     *
     * @return double
     */
    public function getTempmin()
    {

        return $this->tempmin;
    }

    /**
     * Get the [tempmax] column value.
     *
     * @return double
     */
    public function getTempmax()
    {

        return $this->tempmax;
    }

    /**
     * Get the [salinmin] column value.
     *
     * @return double
     */
    public function getSalinmin()
    {

        return $this->salinmin;
    }

    /**
     * Get the [salinmax] column value.
     *
     * @return double
     */
    public function getSalinmax()
    {

        return $this->salinmax;
    }

    /**
     * Get the [phmin] column value.
     *
     * @return double
     */
    public function getPhmin()
    {

        return $this->phmin;
    }

    /**
     * Get the [phmax] column value.
     *
     * @return double
     */
    public function getPhmax()
    {

        return $this->phmax;
    }

    /**
     * Get the [oxygenmin] column value.
     *
     * @return double
     */
    public function getOxygenmin()
    {

        return $this->oxygenmin;
    }

    /**
     * Get the [oxygenmax] column value.
     *
     * @return double
     */
    public function getOxygenmax()
    {

        return $this->oxygenmax;
    }

    /**
     * Get the [illuminationmin] column value.
     *
     * @return int
     */
    public function getIlluminationmin()
    {

        return $this->illuminationmin;
    }

    /**
     * Get the [illuminationmax] column value.
     *
     * @return int
     */
    public function getIlluminationmax()
    {

        return $this->illuminationmax;
    }

    /**
     * Get the [stockingdensityorg] column value.
     *
     * @return string
     */
    public function getStockingdensityorg()
    {

        return $this->stockingdensityorg;
    }

    /**
     * Get the [stockingdensity] column value.
     *
     * @return int
     */
    public function getStockingdensity()
    {

        return $this->stockingdensity;
    }

    /**
     * Get the [unit] column value.
     *
     * @return string
     */
    public function getUnit()
    {

        return $this->unit;
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
     * Get the [productionperiode] column value.
     *
     * @return string
     */
    public function getProductionperiode()
    {

        return $this->productionperiode;
    }

    /**
     * Get the [timetoalevinsdaysmin] column value.
     *
     * @return int
     */
    public function getTimetoalevinsdaysmin()
    {

        return $this->timetoalevinsdaysmin;
    }

    /**
     * Get the [timetoalevinsdaysmax] column value.
     *
     * @return int
     */
    public function getTimetoalevinsdaysmax()
    {

        return $this->timetoalevinsdaysmax;
    }

    /**
     * Get the [timetoalevinsdaysdegmin] column value.
     *
     * @return int
     */
    public function getTimetoalevinsdaysdegmin()
    {

        return $this->timetoalevinsdaysdegmin;
    }

    /**
     * Get the [timetoalevinsdaysdegmax] column value.
     *
     * @return int
     */
    public function getTimetoalevinsdaysdegmax()
    {

        return $this->timetoalevinsdaysdegmax;
    }

    /**
     * Get the [mortalityrateorg] column value.
     *
     * @return string
     */
    public function getMortalityrateorg()
    {

        return $this->mortalityrateorg;
    }

    /**
     * Get the [mortalityratemin] column value.
     *
     * @return double
     */
    public function getMortalityratemin()
    {

        return $this->mortalityratemin;
    }

    /**
     * Get the [mortalityratemax] column value.
     *
     * @return double
     */
    public function getMortalityratemax()
    {

        return $this->mortalityratemax;
    }

    /**
     * Get the [growthrate] column value.
     *
     * @return string
     */
    public function getGrowthrate()
    {

        return $this->growthrate;
    }

    /**
     * Get the [fcr] column value.
     *
     * @return double
     */
    public function getFcr()
    {

        return $this->fcr;
    }

    /**
     * Get the [productioncycle] column value.
     *
     * @return int
     */
    public function getProductioncycle()
    {

        return $this->productioncycle;
    }

    /**
     * Get the [unitcycle] column value.
     *
     * @return string
     */
    public function getUnitcycle()
    {

        return $this->unitcycle;
    }

    /**
     * Get the [productionyearorg] column value.
     *
     * @return string
     */
    public function getProductionyearorg()
    {

        return $this->productionyearorg;
    }

    /**
     * Get the [productionyear] column value.
     *
     * @return int
     */
    public function getProductionyear()
    {

        return $this->productionyear;
    }

    /**
     * Get the [unityear] column value.
     *
     * @return string
     */
    public function getUnityear()
    {

        return $this->unityear;
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
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [commonname] column.
     *
     * @param  string $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setCommonname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname !== $v) {
            $this->commonname = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::COMMONNAME;
        }


        return $this;
    } // setCommonname()

    /**
     * Set the value of [species] column.
     *
     * @param  string $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setSpecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->species !== $v) {
            $this->species = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::SPECIES;
        }


        return $this;
    } // setSpecies()

    /**
     * Set the value of [mainref] column.
     *
     * @param  int $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setMainref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mainref !== $v) {
            $this->mainref = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::MAINREF;
        }


        return $this;
    } // setMainref()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [dataref] column.
     *
     * @param  int $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setDataref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dataref !== $v) {
            $this->dataref = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::DATAREF;
        }


        return $this;
    } // setDataref()

    /**
     * Set the value of [numberoffry] column.
     *
     * @param  int $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setNumberoffry($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->numberoffry !== $v) {
            $this->numberoffry = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::NUMBEROFFRY;
        }


        return $this;
    } // setNumberoffry()

    /**
     * Set the value of [nurserysystemi] column.
     *
     * @param  string $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setNurserysystemi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nurserysystemi !== $v) {
            $this->nurserysystemi = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::NURSERYSYSTEMI;
        }


        return $this;
    } // setNurserysystemi()

    /**
     * Set the value of [nurserysystemii] column.
     *
     * @param  string $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setNurserysystemii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nurserysystemii !== $v) {
            $this->nurserysystemii = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::NURSERYSYSTEMII;
        }


        return $this;
    } // setNurserysystemii()

    /**
     * Set the value of [culturesystem] column.
     *
     * @param  string $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setCulturesystem($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->culturesystem !== $v) {
            $this->culturesystem = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::CULTURESYSTEM;
        }


        return $this;
    } // setCulturesystem()

    /**
     * Set the value of [mainwatersource] column.
     *
     * @param  string $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setMainwatersource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mainwatersource !== $v) {
            $this->mainwatersource = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::MAINWATERSOURCE;
        }


        return $this;
    } // setMainwatersource()

    /**
     * Set the value of [supplwatersource] column.
     *
     * @param  string $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setSupplwatersource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->supplwatersource !== $v) {
            $this->supplwatersource = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::SUPPLWATERSOURCE;
        }


        return $this;
    } // setSupplwatersource()

    /**
     * Set the value of [tempmin] column.
     *
     * @param  double $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setTempmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tempmin !== $v) {
            $this->tempmin = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::TEMPMIN;
        }


        return $this;
    } // setTempmin()

    /**
     * Set the value of [tempmax] column.
     *
     * @param  double $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setTempmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tempmax !== $v) {
            $this->tempmax = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::TEMPMAX;
        }


        return $this;
    } // setTempmax()

    /**
     * Set the value of [salinmin] column.
     *
     * @param  double $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setSalinmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->salinmin !== $v) {
            $this->salinmin = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::SALINMIN;
        }


        return $this;
    } // setSalinmin()

    /**
     * Set the value of [salinmax] column.
     *
     * @param  double $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setSalinmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->salinmax !== $v) {
            $this->salinmax = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::SALINMAX;
        }


        return $this;
    } // setSalinmax()

    /**
     * Set the value of [phmin] column.
     *
     * @param  double $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setPhmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->phmin !== $v) {
            $this->phmin = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::PHMIN;
        }


        return $this;
    } // setPhmin()

    /**
     * Set the value of [phmax] column.
     *
     * @param  double $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setPhmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->phmax !== $v) {
            $this->phmax = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::PHMAX;
        }


        return $this;
    } // setPhmax()

    /**
     * Set the value of [oxygenmin] column.
     *
     * @param  double $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setOxygenmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oxygenmin !== $v) {
            $this->oxygenmin = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::OXYGENMIN;
        }


        return $this;
    } // setOxygenmin()

    /**
     * Set the value of [oxygenmax] column.
     *
     * @param  double $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setOxygenmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oxygenmax !== $v) {
            $this->oxygenmax = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::OXYGENMAX;
        }


        return $this;
    } // setOxygenmax()

    /**
     * Set the value of [illuminationmin] column.
     *
     * @param  int $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setIlluminationmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->illuminationmin !== $v) {
            $this->illuminationmin = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::ILLUMINATIONMIN;
        }


        return $this;
    } // setIlluminationmin()

    /**
     * Set the value of [illuminationmax] column.
     *
     * @param  int $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setIlluminationmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->illuminationmax !== $v) {
            $this->illuminationmax = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::ILLUMINATIONMAX;
        }


        return $this;
    } // setIlluminationmax()

    /**
     * Set the value of [stockingdensityorg] column.
     *
     * @param  string $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setStockingdensityorg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->stockingdensityorg !== $v) {
            $this->stockingdensityorg = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::STOCKINGDENSITYORG;
        }


        return $this;
    } // setStockingdensityorg()

    /**
     * Set the value of [stockingdensity] column.
     *
     * @param  int $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setStockingdensity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockingdensity !== $v) {
            $this->stockingdensity = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::STOCKINGDENSITY;
        }


        return $this;
    } // setStockingdensity()

    /**
     * Set the value of [unit] column.
     *
     * @param  string $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setUnit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unit !== $v) {
            $this->unit = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::UNIT;
        }


        return $this;
    } // setUnit()

    /**
     * Set the value of [foodi] column.
     *
     * @param  string $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setFoodi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->foodi !== $v) {
            $this->foodi = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::FOODI;
        }


        return $this;
    } // setFoodi()

    /**
     * Set the value of [foodii] column.
     *
     * @param  string $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setFoodii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->foodii !== $v) {
            $this->foodii = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::FOODII;
        }


        return $this;
    } // setFoodii()

    /**
     * Set the value of [productionperiode] column.
     *
     * @param  string $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setProductionperiode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->productionperiode !== $v) {
            $this->productionperiode = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::PRODUCTIONPERIODE;
        }


        return $this;
    } // setProductionperiode()

    /**
     * Set the value of [timetoalevinsdaysmin] column.
     *
     * @param  int $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setTimetoalevinsdaysmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->timetoalevinsdaysmin !== $v) {
            $this->timetoalevinsdaysmin = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::TIMETOALEVINSDAYSMIN;
        }


        return $this;
    } // setTimetoalevinsdaysmin()

    /**
     * Set the value of [timetoalevinsdaysmax] column.
     *
     * @param  int $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setTimetoalevinsdaysmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->timetoalevinsdaysmax !== $v) {
            $this->timetoalevinsdaysmax = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::TIMETOALEVINSDAYSMAX;
        }


        return $this;
    } // setTimetoalevinsdaysmax()

    /**
     * Set the value of [timetoalevinsdaysdegmin] column.
     *
     * @param  int $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setTimetoalevinsdaysdegmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->timetoalevinsdaysdegmin !== $v) {
            $this->timetoalevinsdaysdegmin = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::TIMETOALEVINSDAYSDEGMIN;
        }


        return $this;
    } // setTimetoalevinsdaysdegmin()

    /**
     * Set the value of [timetoalevinsdaysdegmax] column.
     *
     * @param  int $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setTimetoalevinsdaysdegmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->timetoalevinsdaysdegmax !== $v) {
            $this->timetoalevinsdaysdegmax = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::TIMETOALEVINSDAYSDEGMAX;
        }


        return $this;
    } // setTimetoalevinsdaysdegmax()

    /**
     * Set the value of [mortalityrateorg] column.
     *
     * @param  string $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setMortalityrateorg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mortalityrateorg !== $v) {
            $this->mortalityrateorg = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::MORTALITYRATEORG;
        }


        return $this;
    } // setMortalityrateorg()

    /**
     * Set the value of [mortalityratemin] column.
     *
     * @param  double $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setMortalityratemin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->mortalityratemin !== $v) {
            $this->mortalityratemin = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::MORTALITYRATEMIN;
        }


        return $this;
    } // setMortalityratemin()

    /**
     * Set the value of [mortalityratemax] column.
     *
     * @param  double $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setMortalityratemax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->mortalityratemax !== $v) {
            $this->mortalityratemax = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::MORTALITYRATEMAX;
        }


        return $this;
    } // setMortalityratemax()

    /**
     * Set the value of [growthrate] column.
     *
     * @param  string $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setGrowthrate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->growthrate !== $v) {
            $this->growthrate = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::GROWTHRATE;
        }


        return $this;
    } // setGrowthrate()

    /**
     * Set the value of [fcr] column.
     *
     * @param  double $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setFcr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->fcr !== $v) {
            $this->fcr = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::FCR;
        }


        return $this;
    } // setFcr()

    /**
     * Set the value of [productioncycle] column.
     *
     * @param  int $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setProductioncycle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->productioncycle !== $v) {
            $this->productioncycle = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::PRODUCTIONCYCLE;
        }


        return $this;
    } // setProductioncycle()

    /**
     * Set the value of [unitcycle] column.
     *
     * @param  string $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setUnitcycle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unitcycle !== $v) {
            $this->unitcycle = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::UNITCYCLE;
        }


        return $this;
    } // setUnitcycle()

    /**
     * Set the value of [productionyearorg] column.
     *
     * @param  string $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setProductionyearorg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->productionyearorg !== $v) {
            $this->productionyearorg = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::PRODUCTIONYEARORG;
        }


        return $this;
    } // setProductionyearorg()

    /**
     * Set the value of [productionyear] column.
     *
     * @param  int $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setProductionyear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->productionyear !== $v) {
            $this->productionyear = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::PRODUCTIONYEAR;
        }


        return $this;
    } // setProductionyear()

    /**
     * Set the value of [unityear] column.
     *
     * @param  string $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setUnityear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unityear !== $v) {
            $this->unityear = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::UNITYEAR;
        }


        return $this;
    } // setUnityear()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = FrynurserysystemPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = FrynurserysystemPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = FrynurserysystemPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = FrynurserysystemPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Frynurserysystem The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = FrynurserysystemPeer::TS;
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
            $this->commonname = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->species = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->mainref = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->c_code = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->locality = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->dataref = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->numberoffry = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->nurserysystemi = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->nurserysystemii = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->culturesystem = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->mainwatersource = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->supplwatersource = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->tempmin = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
            $this->tempmax = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->salinmin = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->salinmax = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->phmin = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->phmax = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->oxygenmin = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->oxygenmax = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->illuminationmin = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->illuminationmax = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->stockingdensityorg = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->stockingdensity = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->unit = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->foodi = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->foodii = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->productionperiode = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->timetoalevinsdaysmin = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->timetoalevinsdaysmax = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->timetoalevinsdaysdegmin = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->timetoalevinsdaysdegmax = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->mortalityrateorg = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->mortalityratemin = ($row[$startcol + 36] !== null) ? (double) $row[$startcol + 36] : null;
            $this->mortalityratemax = ($row[$startcol + 37] !== null) ? (double) $row[$startcol + 37] : null;
            $this->growthrate = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->fcr = ($row[$startcol + 39] !== null) ? (double) $row[$startcol + 39] : null;
            $this->productioncycle = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->unitcycle = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->productionyearorg = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->productionyear = ($row[$startcol + 43] !== null) ? (int) $row[$startcol + 43] : null;
            $this->unityear = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->comment = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->entered = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->dateentered = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->modified = ($row[$startcol + 48] !== null) ? (int) $row[$startcol + 48] : null;
            $this->datemodified = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->expert = ($row[$startcol + 50] !== null) ? (int) $row[$startcol + 50] : null;
            $this->datechecked = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->ts = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 53; // 53 = FrynurserysystemPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Frynurserysystem object", $e);
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
            $con = Propel::getConnection(FrynurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FrynurserysystemPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(FrynurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FrynurserysystemQuery::create()
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
            $con = Propel::getConnection(FrynurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                FrynurserysystemPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = FrynurserysystemPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . FrynurserysystemPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(FrynurserysystemPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Speccode`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Stockcode`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::COMMONNAME)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::SPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`Species`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::MAINREF)) {
            $modifiedColumns[':p' . $index++]  = '`MainRef`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::DATAREF)) {
            $modifiedColumns[':p' . $index++]  = '`DataRef`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::NUMBEROFFRY)) {
            $modifiedColumns[':p' . $index++]  = '`NumberofFry`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::NURSERYSYSTEMI)) {
            $modifiedColumns[':p' . $index++]  = '`NurserySystemI`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::NURSERYSYSTEMII)) {
            $modifiedColumns[':p' . $index++]  = '`NurserySystemII`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::CULTURESYSTEM)) {
            $modifiedColumns[':p' . $index++]  = '`CultureSystem`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::MAINWATERSOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`MainWaterSource`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::SUPPLWATERSOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`SupplWaterSource`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::TEMPMIN)) {
            $modifiedColumns[':p' . $index++]  = '`TempMin`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::TEMPMAX)) {
            $modifiedColumns[':p' . $index++]  = '`TempMax`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::SALINMIN)) {
            $modifiedColumns[':p' . $index++]  = '`SalinMin`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::SALINMAX)) {
            $modifiedColumns[':p' . $index++]  = '`SalinMax`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::PHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`pHMin`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::PHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`pHMax`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::OXYGENMIN)) {
            $modifiedColumns[':p' . $index++]  = '`OxygenMin`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::OXYGENMAX)) {
            $modifiedColumns[':p' . $index++]  = '`OxygenMax`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::ILLUMINATIONMIN)) {
            $modifiedColumns[':p' . $index++]  = '`IlluminationMin`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::ILLUMINATIONMAX)) {
            $modifiedColumns[':p' . $index++]  = '`IlluminationMax`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::STOCKINGDENSITYORG)) {
            $modifiedColumns[':p' . $index++]  = '`StockingDensityOrg`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::STOCKINGDENSITY)) {
            $modifiedColumns[':p' . $index++]  = '`StockingDensity`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::UNIT)) {
            $modifiedColumns[':p' . $index++]  = '`Unit`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::FOODI)) {
            $modifiedColumns[':p' . $index++]  = '`FoodI`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::FOODII)) {
            $modifiedColumns[':p' . $index++]  = '`FoodII`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::PRODUCTIONPERIODE)) {
            $modifiedColumns[':p' . $index++]  = '`ProductionPeriode`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::TIMETOALEVINSDAYSMIN)) {
            $modifiedColumns[':p' . $index++]  = '`TimetoAlevinsDaysMin`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::TIMETOALEVINSDAYSMAX)) {
            $modifiedColumns[':p' . $index++]  = '`TimetoAlevinsDaysMax`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::TIMETOALEVINSDAYSDEGMIN)) {
            $modifiedColumns[':p' . $index++]  = '`TimetoAlevinsDaysDegMin`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::TIMETOALEVINSDAYSDEGMAX)) {
            $modifiedColumns[':p' . $index++]  = '`TimetoAlevinsDaysDegMax`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::MORTALITYRATEORG)) {
            $modifiedColumns[':p' . $index++]  = '`MortalityrateOrg`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::MORTALITYRATEMIN)) {
            $modifiedColumns[':p' . $index++]  = '`MortalityRateMin`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::MORTALITYRATEMAX)) {
            $modifiedColumns[':p' . $index++]  = '`MortalityRateMax`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::GROWTHRATE)) {
            $modifiedColumns[':p' . $index++]  = '`GrowthRate`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::FCR)) {
            $modifiedColumns[':p' . $index++]  = '`FCR`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::PRODUCTIONCYCLE)) {
            $modifiedColumns[':p' . $index++]  = '`ProductionCycle`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::UNITCYCLE)) {
            $modifiedColumns[':p' . $index++]  = '`UnitCycle`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::PRODUCTIONYEARORG)) {
            $modifiedColumns[':p' . $index++]  = '`ProductionYearOrg`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::PRODUCTIONYEAR)) {
            $modifiedColumns[':p' . $index++]  = '`ProductionYear`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::UNITYEAR)) {
            $modifiedColumns[':p' . $index++]  = '`UnitYear`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Comment`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(FrynurserysystemPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `frynurserysystem` (%s) VALUES (%s)',
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
                    case '`Speccode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`Stockcode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`CommonName`':
                        $stmt->bindValue($identifier, $this->commonname, PDO::PARAM_STR);
                        break;
                    case '`Species`':
                        $stmt->bindValue($identifier, $this->species, PDO::PARAM_STR);
                        break;
                    case '`MainRef`':
                        $stmt->bindValue($identifier, $this->mainref, PDO::PARAM_INT);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`DataRef`':
                        $stmt->bindValue($identifier, $this->dataref, PDO::PARAM_INT);
                        break;
                    case '`NumberofFry`':
                        $stmt->bindValue($identifier, $this->numberoffry, PDO::PARAM_INT);
                        break;
                    case '`NurserySystemI`':
                        $stmt->bindValue($identifier, $this->nurserysystemi, PDO::PARAM_STR);
                        break;
                    case '`NurserySystemII`':
                        $stmt->bindValue($identifier, $this->nurserysystemii, PDO::PARAM_STR);
                        break;
                    case '`CultureSystem`':
                        $stmt->bindValue($identifier, $this->culturesystem, PDO::PARAM_STR);
                        break;
                    case '`MainWaterSource`':
                        $stmt->bindValue($identifier, $this->mainwatersource, PDO::PARAM_STR);
                        break;
                    case '`SupplWaterSource`':
                        $stmt->bindValue($identifier, $this->supplwatersource, PDO::PARAM_STR);
                        break;
                    case '`TempMin`':
                        $stmt->bindValue($identifier, $this->tempmin, PDO::PARAM_STR);
                        break;
                    case '`TempMax`':
                        $stmt->bindValue($identifier, $this->tempmax, PDO::PARAM_STR);
                        break;
                    case '`SalinMin`':
                        $stmt->bindValue($identifier, $this->salinmin, PDO::PARAM_STR);
                        break;
                    case '`SalinMax`':
                        $stmt->bindValue($identifier, $this->salinmax, PDO::PARAM_STR);
                        break;
                    case '`pHMin`':
                        $stmt->bindValue($identifier, $this->phmin, PDO::PARAM_STR);
                        break;
                    case '`pHMax`':
                        $stmt->bindValue($identifier, $this->phmax, PDO::PARAM_STR);
                        break;
                    case '`OxygenMin`':
                        $stmt->bindValue($identifier, $this->oxygenmin, PDO::PARAM_STR);
                        break;
                    case '`OxygenMax`':
                        $stmt->bindValue($identifier, $this->oxygenmax, PDO::PARAM_STR);
                        break;
                    case '`IlluminationMin`':
                        $stmt->bindValue($identifier, $this->illuminationmin, PDO::PARAM_INT);
                        break;
                    case '`IlluminationMax`':
                        $stmt->bindValue($identifier, $this->illuminationmax, PDO::PARAM_INT);
                        break;
                    case '`StockingDensityOrg`':
                        $stmt->bindValue($identifier, $this->stockingdensityorg, PDO::PARAM_STR);
                        break;
                    case '`StockingDensity`':
                        $stmt->bindValue($identifier, $this->stockingdensity, PDO::PARAM_INT);
                        break;
                    case '`Unit`':
                        $stmt->bindValue($identifier, $this->unit, PDO::PARAM_STR);
                        break;
                    case '`FoodI`':
                        $stmt->bindValue($identifier, $this->foodi, PDO::PARAM_STR);
                        break;
                    case '`FoodII`':
                        $stmt->bindValue($identifier, $this->foodii, PDO::PARAM_STR);
                        break;
                    case '`ProductionPeriode`':
                        $stmt->bindValue($identifier, $this->productionperiode, PDO::PARAM_STR);
                        break;
                    case '`TimetoAlevinsDaysMin`':
                        $stmt->bindValue($identifier, $this->timetoalevinsdaysmin, PDO::PARAM_INT);
                        break;
                    case '`TimetoAlevinsDaysMax`':
                        $stmt->bindValue($identifier, $this->timetoalevinsdaysmax, PDO::PARAM_INT);
                        break;
                    case '`TimetoAlevinsDaysDegMin`':
                        $stmt->bindValue($identifier, $this->timetoalevinsdaysdegmin, PDO::PARAM_INT);
                        break;
                    case '`TimetoAlevinsDaysDegMax`':
                        $stmt->bindValue($identifier, $this->timetoalevinsdaysdegmax, PDO::PARAM_INT);
                        break;
                    case '`MortalityrateOrg`':
                        $stmt->bindValue($identifier, $this->mortalityrateorg, PDO::PARAM_STR);
                        break;
                    case '`MortalityRateMin`':
                        $stmt->bindValue($identifier, $this->mortalityratemin, PDO::PARAM_STR);
                        break;
                    case '`MortalityRateMax`':
                        $stmt->bindValue($identifier, $this->mortalityratemax, PDO::PARAM_STR);
                        break;
                    case '`GrowthRate`':
                        $stmt->bindValue($identifier, $this->growthrate, PDO::PARAM_STR);
                        break;
                    case '`FCR`':
                        $stmt->bindValue($identifier, $this->fcr, PDO::PARAM_STR);
                        break;
                    case '`ProductionCycle`':
                        $stmt->bindValue($identifier, $this->productioncycle, PDO::PARAM_INT);
                        break;
                    case '`UnitCycle`':
                        $stmt->bindValue($identifier, $this->unitcycle, PDO::PARAM_STR);
                        break;
                    case '`ProductionYearOrg`':
                        $stmt->bindValue($identifier, $this->productionyearorg, PDO::PARAM_STR);
                        break;
                    case '`ProductionYear`':
                        $stmt->bindValue($identifier, $this->productionyear, PDO::PARAM_INT);
                        break;
                    case '`UnitYear`':
                        $stmt->bindValue($identifier, $this->unityear, PDO::PARAM_STR);
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


            if (($retval = FrynurserysystemPeer::doValidate($this, $columns)) !== true) {
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
        $pos = FrynurserysystemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getCommonname();
                break;
            case 4:
                return $this->getSpecies();
                break;
            case 5:
                return $this->getMainref();
                break;
            case 6:
                return $this->getCCode();
                break;
            case 7:
                return $this->getLocality();
                break;
            case 8:
                return $this->getDataref();
                break;
            case 9:
                return $this->getNumberoffry();
                break;
            case 10:
                return $this->getNurserysystemi();
                break;
            case 11:
                return $this->getNurserysystemii();
                break;
            case 12:
                return $this->getCulturesystem();
                break;
            case 13:
                return $this->getMainwatersource();
                break;
            case 14:
                return $this->getSupplwatersource();
                break;
            case 15:
                return $this->getTempmin();
                break;
            case 16:
                return $this->getTempmax();
                break;
            case 17:
                return $this->getSalinmin();
                break;
            case 18:
                return $this->getSalinmax();
                break;
            case 19:
                return $this->getPhmin();
                break;
            case 20:
                return $this->getPhmax();
                break;
            case 21:
                return $this->getOxygenmin();
                break;
            case 22:
                return $this->getOxygenmax();
                break;
            case 23:
                return $this->getIlluminationmin();
                break;
            case 24:
                return $this->getIlluminationmax();
                break;
            case 25:
                return $this->getStockingdensityorg();
                break;
            case 26:
                return $this->getStockingdensity();
                break;
            case 27:
                return $this->getUnit();
                break;
            case 28:
                return $this->getFoodi();
                break;
            case 29:
                return $this->getFoodii();
                break;
            case 30:
                return $this->getProductionperiode();
                break;
            case 31:
                return $this->getTimetoalevinsdaysmin();
                break;
            case 32:
                return $this->getTimetoalevinsdaysmax();
                break;
            case 33:
                return $this->getTimetoalevinsdaysdegmin();
                break;
            case 34:
                return $this->getTimetoalevinsdaysdegmax();
                break;
            case 35:
                return $this->getMortalityrateorg();
                break;
            case 36:
                return $this->getMortalityratemin();
                break;
            case 37:
                return $this->getMortalityratemax();
                break;
            case 38:
                return $this->getGrowthrate();
                break;
            case 39:
                return $this->getFcr();
                break;
            case 40:
                return $this->getProductioncycle();
                break;
            case 41:
                return $this->getUnitcycle();
                break;
            case 42:
                return $this->getProductionyearorg();
                break;
            case 43:
                return $this->getProductionyear();
                break;
            case 44:
                return $this->getUnityear();
                break;
            case 45:
                return $this->getComment();
                break;
            case 46:
                return $this->getEntered();
                break;
            case 47:
                return $this->getDateentered();
                break;
            case 48:
                return $this->getModified();
                break;
            case 49:
                return $this->getDatemodified();
                break;
            case 50:
                return $this->getExpert();
                break;
            case 51:
                return $this->getDatechecked();
                break;
            case 52:
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
        if (isset($alreadyDumpedObjects['Frynurserysystem'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Frynurserysystem'][serialize($this->getPrimaryKey())] = true;
        $keys = FrynurserysystemPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getSpeccode(),
            $keys[2] => $this->getStockcode(),
            $keys[3] => $this->getCommonname(),
            $keys[4] => $this->getSpecies(),
            $keys[5] => $this->getMainref(),
            $keys[6] => $this->getCCode(),
            $keys[7] => $this->getLocality(),
            $keys[8] => $this->getDataref(),
            $keys[9] => $this->getNumberoffry(),
            $keys[10] => $this->getNurserysystemi(),
            $keys[11] => $this->getNurserysystemii(),
            $keys[12] => $this->getCulturesystem(),
            $keys[13] => $this->getMainwatersource(),
            $keys[14] => $this->getSupplwatersource(),
            $keys[15] => $this->getTempmin(),
            $keys[16] => $this->getTempmax(),
            $keys[17] => $this->getSalinmin(),
            $keys[18] => $this->getSalinmax(),
            $keys[19] => $this->getPhmin(),
            $keys[20] => $this->getPhmax(),
            $keys[21] => $this->getOxygenmin(),
            $keys[22] => $this->getOxygenmax(),
            $keys[23] => $this->getIlluminationmin(),
            $keys[24] => $this->getIlluminationmax(),
            $keys[25] => $this->getStockingdensityorg(),
            $keys[26] => $this->getStockingdensity(),
            $keys[27] => $this->getUnit(),
            $keys[28] => $this->getFoodi(),
            $keys[29] => $this->getFoodii(),
            $keys[30] => $this->getProductionperiode(),
            $keys[31] => $this->getTimetoalevinsdaysmin(),
            $keys[32] => $this->getTimetoalevinsdaysmax(),
            $keys[33] => $this->getTimetoalevinsdaysdegmin(),
            $keys[34] => $this->getTimetoalevinsdaysdegmax(),
            $keys[35] => $this->getMortalityrateorg(),
            $keys[36] => $this->getMortalityratemin(),
            $keys[37] => $this->getMortalityratemax(),
            $keys[38] => $this->getGrowthrate(),
            $keys[39] => $this->getFcr(),
            $keys[40] => $this->getProductioncycle(),
            $keys[41] => $this->getUnitcycle(),
            $keys[42] => $this->getProductionyearorg(),
            $keys[43] => $this->getProductionyear(),
            $keys[44] => $this->getUnityear(),
            $keys[45] => $this->getComment(),
            $keys[46] => $this->getEntered(),
            $keys[47] => $this->getDateentered(),
            $keys[48] => $this->getModified(),
            $keys[49] => $this->getDatemodified(),
            $keys[50] => $this->getExpert(),
            $keys[51] => $this->getDatechecked(),
            $keys[52] => $this->getTs(),
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
        $pos = FrynurserysystemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setCommonname($value);
                break;
            case 4:
                $this->setSpecies($value);
                break;
            case 5:
                $this->setMainref($value);
                break;
            case 6:
                $this->setCCode($value);
                break;
            case 7:
                $this->setLocality($value);
                break;
            case 8:
                $this->setDataref($value);
                break;
            case 9:
                $this->setNumberoffry($value);
                break;
            case 10:
                $this->setNurserysystemi($value);
                break;
            case 11:
                $this->setNurserysystemii($value);
                break;
            case 12:
                $this->setCulturesystem($value);
                break;
            case 13:
                $this->setMainwatersource($value);
                break;
            case 14:
                $this->setSupplwatersource($value);
                break;
            case 15:
                $this->setTempmin($value);
                break;
            case 16:
                $this->setTempmax($value);
                break;
            case 17:
                $this->setSalinmin($value);
                break;
            case 18:
                $this->setSalinmax($value);
                break;
            case 19:
                $this->setPhmin($value);
                break;
            case 20:
                $this->setPhmax($value);
                break;
            case 21:
                $this->setOxygenmin($value);
                break;
            case 22:
                $this->setOxygenmax($value);
                break;
            case 23:
                $this->setIlluminationmin($value);
                break;
            case 24:
                $this->setIlluminationmax($value);
                break;
            case 25:
                $this->setStockingdensityorg($value);
                break;
            case 26:
                $this->setStockingdensity($value);
                break;
            case 27:
                $this->setUnit($value);
                break;
            case 28:
                $this->setFoodi($value);
                break;
            case 29:
                $this->setFoodii($value);
                break;
            case 30:
                $this->setProductionperiode($value);
                break;
            case 31:
                $this->setTimetoalevinsdaysmin($value);
                break;
            case 32:
                $this->setTimetoalevinsdaysmax($value);
                break;
            case 33:
                $this->setTimetoalevinsdaysdegmin($value);
                break;
            case 34:
                $this->setTimetoalevinsdaysdegmax($value);
                break;
            case 35:
                $this->setMortalityrateorg($value);
                break;
            case 36:
                $this->setMortalityratemin($value);
                break;
            case 37:
                $this->setMortalityratemax($value);
                break;
            case 38:
                $this->setGrowthrate($value);
                break;
            case 39:
                $this->setFcr($value);
                break;
            case 40:
                $this->setProductioncycle($value);
                break;
            case 41:
                $this->setUnitcycle($value);
                break;
            case 42:
                $this->setProductionyearorg($value);
                break;
            case 43:
                $this->setProductionyear($value);
                break;
            case 44:
                $this->setUnityear($value);
                break;
            case 45:
                $this->setComment($value);
                break;
            case 46:
                $this->setEntered($value);
                break;
            case 47:
                $this->setDateentered($value);
                break;
            case 48:
                $this->setModified($value);
                break;
            case 49:
                $this->setDatemodified($value);
                break;
            case 50:
                $this->setExpert($value);
                break;
            case 51:
                $this->setDatechecked($value);
                break;
            case 52:
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
        $keys = FrynurserysystemPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSpeccode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setStockcode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCommonname($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSpecies($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMainref($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCCode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLocality($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDataref($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setNumberoffry($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setNurserysystemi($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setNurserysystemii($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCulturesystem($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setMainwatersource($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setSupplwatersource($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setTempmin($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setTempmax($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setSalinmin($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setSalinmax($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setPhmin($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setPhmax($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setOxygenmin($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setOxygenmax($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setIlluminationmin($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setIlluminationmax($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setStockingdensityorg($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setStockingdensity($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setUnit($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setFoodi($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setFoodii($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setProductionperiode($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setTimetoalevinsdaysmin($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setTimetoalevinsdaysmax($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setTimetoalevinsdaysdegmin($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setTimetoalevinsdaysdegmax($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setMortalityrateorg($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setMortalityratemin($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setMortalityratemax($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setGrowthrate($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setFcr($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setProductioncycle($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setUnitcycle($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setProductionyearorg($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setProductionyear($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setUnityear($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setComment($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setEntered($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setDateentered($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setModified($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setDatemodified($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setExpert($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setDatechecked($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setTs($arr[$keys[52]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FrynurserysystemPeer::DATABASE_NAME);

        if ($this->isColumnModified(FrynurserysystemPeer::AUTOCTR)) $criteria->add(FrynurserysystemPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(FrynurserysystemPeer::SPECCODE)) $criteria->add(FrynurserysystemPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(FrynurserysystemPeer::STOCKCODE)) $criteria->add(FrynurserysystemPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(FrynurserysystemPeer::COMMONNAME)) $criteria->add(FrynurserysystemPeer::COMMONNAME, $this->commonname);
        if ($this->isColumnModified(FrynurserysystemPeer::SPECIES)) $criteria->add(FrynurserysystemPeer::SPECIES, $this->species);
        if ($this->isColumnModified(FrynurserysystemPeer::MAINREF)) $criteria->add(FrynurserysystemPeer::MAINREF, $this->mainref);
        if ($this->isColumnModified(FrynurserysystemPeer::C_CODE)) $criteria->add(FrynurserysystemPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(FrynurserysystemPeer::LOCALITY)) $criteria->add(FrynurserysystemPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(FrynurserysystemPeer::DATAREF)) $criteria->add(FrynurserysystemPeer::DATAREF, $this->dataref);
        if ($this->isColumnModified(FrynurserysystemPeer::NUMBEROFFRY)) $criteria->add(FrynurserysystemPeer::NUMBEROFFRY, $this->numberoffry);
        if ($this->isColumnModified(FrynurserysystemPeer::NURSERYSYSTEMI)) $criteria->add(FrynurserysystemPeer::NURSERYSYSTEMI, $this->nurserysystemi);
        if ($this->isColumnModified(FrynurserysystemPeer::NURSERYSYSTEMII)) $criteria->add(FrynurserysystemPeer::NURSERYSYSTEMII, $this->nurserysystemii);
        if ($this->isColumnModified(FrynurserysystemPeer::CULTURESYSTEM)) $criteria->add(FrynurserysystemPeer::CULTURESYSTEM, $this->culturesystem);
        if ($this->isColumnModified(FrynurserysystemPeer::MAINWATERSOURCE)) $criteria->add(FrynurserysystemPeer::MAINWATERSOURCE, $this->mainwatersource);
        if ($this->isColumnModified(FrynurserysystemPeer::SUPPLWATERSOURCE)) $criteria->add(FrynurserysystemPeer::SUPPLWATERSOURCE, $this->supplwatersource);
        if ($this->isColumnModified(FrynurserysystemPeer::TEMPMIN)) $criteria->add(FrynurserysystemPeer::TEMPMIN, $this->tempmin);
        if ($this->isColumnModified(FrynurserysystemPeer::TEMPMAX)) $criteria->add(FrynurserysystemPeer::TEMPMAX, $this->tempmax);
        if ($this->isColumnModified(FrynurserysystemPeer::SALINMIN)) $criteria->add(FrynurserysystemPeer::SALINMIN, $this->salinmin);
        if ($this->isColumnModified(FrynurserysystemPeer::SALINMAX)) $criteria->add(FrynurserysystemPeer::SALINMAX, $this->salinmax);
        if ($this->isColumnModified(FrynurserysystemPeer::PHMIN)) $criteria->add(FrynurserysystemPeer::PHMIN, $this->phmin);
        if ($this->isColumnModified(FrynurserysystemPeer::PHMAX)) $criteria->add(FrynurserysystemPeer::PHMAX, $this->phmax);
        if ($this->isColumnModified(FrynurserysystemPeer::OXYGENMIN)) $criteria->add(FrynurserysystemPeer::OXYGENMIN, $this->oxygenmin);
        if ($this->isColumnModified(FrynurserysystemPeer::OXYGENMAX)) $criteria->add(FrynurserysystemPeer::OXYGENMAX, $this->oxygenmax);
        if ($this->isColumnModified(FrynurserysystemPeer::ILLUMINATIONMIN)) $criteria->add(FrynurserysystemPeer::ILLUMINATIONMIN, $this->illuminationmin);
        if ($this->isColumnModified(FrynurserysystemPeer::ILLUMINATIONMAX)) $criteria->add(FrynurserysystemPeer::ILLUMINATIONMAX, $this->illuminationmax);
        if ($this->isColumnModified(FrynurserysystemPeer::STOCKINGDENSITYORG)) $criteria->add(FrynurserysystemPeer::STOCKINGDENSITYORG, $this->stockingdensityorg);
        if ($this->isColumnModified(FrynurserysystemPeer::STOCKINGDENSITY)) $criteria->add(FrynurserysystemPeer::STOCKINGDENSITY, $this->stockingdensity);
        if ($this->isColumnModified(FrynurserysystemPeer::UNIT)) $criteria->add(FrynurserysystemPeer::UNIT, $this->unit);
        if ($this->isColumnModified(FrynurserysystemPeer::FOODI)) $criteria->add(FrynurserysystemPeer::FOODI, $this->foodi);
        if ($this->isColumnModified(FrynurserysystemPeer::FOODII)) $criteria->add(FrynurserysystemPeer::FOODII, $this->foodii);
        if ($this->isColumnModified(FrynurserysystemPeer::PRODUCTIONPERIODE)) $criteria->add(FrynurserysystemPeer::PRODUCTIONPERIODE, $this->productionperiode);
        if ($this->isColumnModified(FrynurserysystemPeer::TIMETOALEVINSDAYSMIN)) $criteria->add(FrynurserysystemPeer::TIMETOALEVINSDAYSMIN, $this->timetoalevinsdaysmin);
        if ($this->isColumnModified(FrynurserysystemPeer::TIMETOALEVINSDAYSMAX)) $criteria->add(FrynurserysystemPeer::TIMETOALEVINSDAYSMAX, $this->timetoalevinsdaysmax);
        if ($this->isColumnModified(FrynurserysystemPeer::TIMETOALEVINSDAYSDEGMIN)) $criteria->add(FrynurserysystemPeer::TIMETOALEVINSDAYSDEGMIN, $this->timetoalevinsdaysdegmin);
        if ($this->isColumnModified(FrynurserysystemPeer::TIMETOALEVINSDAYSDEGMAX)) $criteria->add(FrynurserysystemPeer::TIMETOALEVINSDAYSDEGMAX, $this->timetoalevinsdaysdegmax);
        if ($this->isColumnModified(FrynurserysystemPeer::MORTALITYRATEORG)) $criteria->add(FrynurserysystemPeer::MORTALITYRATEORG, $this->mortalityrateorg);
        if ($this->isColumnModified(FrynurserysystemPeer::MORTALITYRATEMIN)) $criteria->add(FrynurserysystemPeer::MORTALITYRATEMIN, $this->mortalityratemin);
        if ($this->isColumnModified(FrynurserysystemPeer::MORTALITYRATEMAX)) $criteria->add(FrynurserysystemPeer::MORTALITYRATEMAX, $this->mortalityratemax);
        if ($this->isColumnModified(FrynurserysystemPeer::GROWTHRATE)) $criteria->add(FrynurserysystemPeer::GROWTHRATE, $this->growthrate);
        if ($this->isColumnModified(FrynurserysystemPeer::FCR)) $criteria->add(FrynurserysystemPeer::FCR, $this->fcr);
        if ($this->isColumnModified(FrynurserysystemPeer::PRODUCTIONCYCLE)) $criteria->add(FrynurserysystemPeer::PRODUCTIONCYCLE, $this->productioncycle);
        if ($this->isColumnModified(FrynurserysystemPeer::UNITCYCLE)) $criteria->add(FrynurserysystemPeer::UNITCYCLE, $this->unitcycle);
        if ($this->isColumnModified(FrynurserysystemPeer::PRODUCTIONYEARORG)) $criteria->add(FrynurserysystemPeer::PRODUCTIONYEARORG, $this->productionyearorg);
        if ($this->isColumnModified(FrynurserysystemPeer::PRODUCTIONYEAR)) $criteria->add(FrynurserysystemPeer::PRODUCTIONYEAR, $this->productionyear);
        if ($this->isColumnModified(FrynurserysystemPeer::UNITYEAR)) $criteria->add(FrynurserysystemPeer::UNITYEAR, $this->unityear);
        if ($this->isColumnModified(FrynurserysystemPeer::COMMENT)) $criteria->add(FrynurserysystemPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(FrynurserysystemPeer::ENTERED)) $criteria->add(FrynurserysystemPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(FrynurserysystemPeer::DATEENTERED)) $criteria->add(FrynurserysystemPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(FrynurserysystemPeer::MODIFIED)) $criteria->add(FrynurserysystemPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(FrynurserysystemPeer::DATEMODIFIED)) $criteria->add(FrynurserysystemPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(FrynurserysystemPeer::EXPERT)) $criteria->add(FrynurserysystemPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(FrynurserysystemPeer::DATECHECKED)) $criteria->add(FrynurserysystemPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(FrynurserysystemPeer::TS)) $criteria->add(FrynurserysystemPeer::TS, $this->ts);

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
        $criteria = new Criteria(FrynurserysystemPeer::DATABASE_NAME);
        $criteria->add(FrynurserysystemPeer::AUTOCTR, $this->autoctr);
        $criteria->add(FrynurserysystemPeer::STOCKCODE, $this->stockcode);
        $criteria->add(FrynurserysystemPeer::MAINREF, $this->mainref);

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
        $pks[0] = $this->getAutoctr();
        $pks[1] = $this->getStockcode();
        $pks[2] = $this->getMainref();

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
        $this->setAutoctr($keys[0]);
        $this->setStockcode($keys[1]);
        $this->setMainref($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getAutoctr()) && (null === $this->getStockcode()) && (null === $this->getMainref());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Frynurserysystem (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setCommonname($this->getCommonname());
        $copyObj->setSpecies($this->getSpecies());
        $copyObj->setMainref($this->getMainref());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setDataref($this->getDataref());
        $copyObj->setNumberoffry($this->getNumberoffry());
        $copyObj->setNurserysystemi($this->getNurserysystemi());
        $copyObj->setNurserysystemii($this->getNurserysystemii());
        $copyObj->setCulturesystem($this->getCulturesystem());
        $copyObj->setMainwatersource($this->getMainwatersource());
        $copyObj->setSupplwatersource($this->getSupplwatersource());
        $copyObj->setTempmin($this->getTempmin());
        $copyObj->setTempmax($this->getTempmax());
        $copyObj->setSalinmin($this->getSalinmin());
        $copyObj->setSalinmax($this->getSalinmax());
        $copyObj->setPhmin($this->getPhmin());
        $copyObj->setPhmax($this->getPhmax());
        $copyObj->setOxygenmin($this->getOxygenmin());
        $copyObj->setOxygenmax($this->getOxygenmax());
        $copyObj->setIlluminationmin($this->getIlluminationmin());
        $copyObj->setIlluminationmax($this->getIlluminationmax());
        $copyObj->setStockingdensityorg($this->getStockingdensityorg());
        $copyObj->setStockingdensity($this->getStockingdensity());
        $copyObj->setUnit($this->getUnit());
        $copyObj->setFoodi($this->getFoodi());
        $copyObj->setFoodii($this->getFoodii());
        $copyObj->setProductionperiode($this->getProductionperiode());
        $copyObj->setTimetoalevinsdaysmin($this->getTimetoalevinsdaysmin());
        $copyObj->setTimetoalevinsdaysmax($this->getTimetoalevinsdaysmax());
        $copyObj->setTimetoalevinsdaysdegmin($this->getTimetoalevinsdaysdegmin());
        $copyObj->setTimetoalevinsdaysdegmax($this->getTimetoalevinsdaysdegmax());
        $copyObj->setMortalityrateorg($this->getMortalityrateorg());
        $copyObj->setMortalityratemin($this->getMortalityratemin());
        $copyObj->setMortalityratemax($this->getMortalityratemax());
        $copyObj->setGrowthrate($this->getGrowthrate());
        $copyObj->setFcr($this->getFcr());
        $copyObj->setProductioncycle($this->getProductioncycle());
        $copyObj->setUnitcycle($this->getUnitcycle());
        $copyObj->setProductionyearorg($this->getProductionyearorg());
        $copyObj->setProductionyear($this->getProductionyear());
        $copyObj->setUnityear($this->getUnityear());
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
     * @return Frynurserysystem Clone of current object.
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
     * @return FrynurserysystemPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FrynurserysystemPeer();
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
        $this->commonname = null;
        $this->species = null;
        $this->mainref = null;
        $this->c_code = null;
        $this->locality = null;
        $this->dataref = null;
        $this->numberoffry = null;
        $this->nurserysystemi = null;
        $this->nurserysystemii = null;
        $this->culturesystem = null;
        $this->mainwatersource = null;
        $this->supplwatersource = null;
        $this->tempmin = null;
        $this->tempmax = null;
        $this->salinmin = null;
        $this->salinmax = null;
        $this->phmin = null;
        $this->phmax = null;
        $this->oxygenmin = null;
        $this->oxygenmax = null;
        $this->illuminationmin = null;
        $this->illuminationmax = null;
        $this->stockingdensityorg = null;
        $this->stockingdensity = null;
        $this->unit = null;
        $this->foodi = null;
        $this->foodii = null;
        $this->productionperiode = null;
        $this->timetoalevinsdaysmin = null;
        $this->timetoalevinsdaysmax = null;
        $this->timetoalevinsdaysdegmin = null;
        $this->timetoalevinsdaysdegmax = null;
        $this->mortalityrateorg = null;
        $this->mortalityratemin = null;
        $this->mortalityratemax = null;
        $this->growthrate = null;
        $this->fcr = null;
        $this->productioncycle = null;
        $this->unitcycle = null;
        $this->productionyearorg = null;
        $this->productionyear = null;
        $this->unityear = null;
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
        return (string) $this->exportTo(FrynurserysystemPeer::DEFAULT_STRING_FORMAT);
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
