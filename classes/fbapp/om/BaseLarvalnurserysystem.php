<?php


/**
 * Base class that represents a row from the 'larvalnurserysystem' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseLarvalnurserysystem extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'LarvalnurserysystemPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        LarvalnurserysystemPeer
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
     * The value for the species field.
     * @var        string
     */
    protected $species;

    /**
     * The value for the commonname field.
     * @var        string
     */
    protected $commonname;

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
     * The value for the numberoflarvaeorg field.
     * @var        string
     */
    protected $numberoflarvaeorg;

    /**
     * The value for the numberoflarvae field.
     * @var        int
     */
    protected $numberoflarvae;

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
     * @var        double
     */
    protected $illuminationmin;

    /**
     * The value for the illuminationmax field.
     * @var        double
     */
    protected $illuminationmax;

    /**
     * The value for the stockingdensityorg field.
     * @var        string
     */
    protected $stockingdensityorg;

    /**
     * The value for the stockingdensity field.
     * @var        double
     */
    protected $stockingdensity;

    /**
     * The value for the firstfeeddaysmin field.
     * @var        int
     */
    protected $firstfeeddaysmin;

    /**
     * The value for the firstfeeddaysmax field.
     * @var        int
     */
    protected $firstfeeddaysmax;

    /**
     * The value for the firstfeeddaysdegmin field.
     * @var        int
     */
    protected $firstfeeddaysdegmin;

    /**
     * The value for the firstfeeddaysdegmax field.
     * @var        int
     */
    protected $firstfeeddaysdegmax;

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
     * The value for the hatchingtofrydaysmin field.
     * @var        int
     */
    protected $hatchingtofrydaysmin;

    /**
     * The value for the hatchingtofrydaysmax field.
     * @var        int
     */
    protected $hatchingtofrydaysmax;

    /**
     * The value for the hatchingtofrydaysdegmin field.
     * @var        int
     */
    protected $hatchingtofrydaysdegmin;

    /**
     * The value for the hatchingtofrydaysdegmax field.
     * @var        int
     */
    protected $hatchingtofrydaysdegmax;

    /**
     * The value for the mortalityrate field.
     * @var        string
     */
    protected $mortalityrate;

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
     * Get the [species] column value.
     *
     * @return string
     */
    public function getSpecies()
    {

        return $this->species;
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
     * Get the [numberoflarvaeorg] column value.
     *
     * @return string
     */
    public function getNumberoflarvaeorg()
    {

        return $this->numberoflarvaeorg;
    }

    /**
     * Get the [numberoflarvae] column value.
     *
     * @return int
     */
    public function getNumberoflarvae()
    {

        return $this->numberoflarvae;
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
     * @return double
     */
    public function getIlluminationmin()
    {

        return $this->illuminationmin;
    }

    /**
     * Get the [illuminationmax] column value.
     *
     * @return double
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
     * @return double
     */
    public function getStockingdensity()
    {

        return $this->stockingdensity;
    }

    /**
     * Get the [firstfeeddaysmin] column value.
     *
     * @return int
     */
    public function getFirstfeeddaysmin()
    {

        return $this->firstfeeddaysmin;
    }

    /**
     * Get the [firstfeeddaysmax] column value.
     *
     * @return int
     */
    public function getFirstfeeddaysmax()
    {

        return $this->firstfeeddaysmax;
    }

    /**
     * Get the [firstfeeddaysdegmin] column value.
     *
     * @return int
     */
    public function getFirstfeeddaysdegmin()
    {

        return $this->firstfeeddaysdegmin;
    }

    /**
     * Get the [firstfeeddaysdegmax] column value.
     *
     * @return int
     */
    public function getFirstfeeddaysdegmax()
    {

        return $this->firstfeeddaysdegmax;
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
     * Get the [hatchingtofrydaysmin] column value.
     *
     * @return int
     */
    public function getHatchingtofrydaysmin()
    {

        return $this->hatchingtofrydaysmin;
    }

    /**
     * Get the [hatchingtofrydaysmax] column value.
     *
     * @return int
     */
    public function getHatchingtofrydaysmax()
    {

        return $this->hatchingtofrydaysmax;
    }

    /**
     * Get the [hatchingtofrydaysdegmin] column value.
     *
     * @return int
     */
    public function getHatchingtofrydaysdegmin()
    {

        return $this->hatchingtofrydaysdegmin;
    }

    /**
     * Get the [hatchingtofrydaysdegmax] column value.
     *
     * @return int
     */
    public function getHatchingtofrydaysdegmax()
    {

        return $this->hatchingtofrydaysdegmax;
    }

    /**
     * Get the [mortalityrate] column value.
     *
     * @return string
     */
    public function getMortalityrate()
    {

        return $this->mortalityrate;
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
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [species] column.
     *
     * @param  string $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setSpecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->species !== $v) {
            $this->species = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::SPECIES;
        }


        return $this;
    } // setSpecies()

    /**
     * Set the value of [commonname] column.
     *
     * @param  string $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setCommonname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname !== $v) {
            $this->commonname = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::COMMONNAME;
        }


        return $this;
    } // setCommonname()

    /**
     * Set the value of [mainref] column.
     *
     * @param  int $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setMainref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mainref !== $v) {
            $this->mainref = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::MAINREF;
        }


        return $this;
    } // setMainref()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [dataref] column.
     *
     * @param  int $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setDataref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dataref !== $v) {
            $this->dataref = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::DATAREF;
        }


        return $this;
    } // setDataref()

    /**
     * Set the value of [numberoflarvaeorg] column.
     *
     * @param  string $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setNumberoflarvaeorg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numberoflarvaeorg !== $v) {
            $this->numberoflarvaeorg = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::NUMBEROFLARVAEORG;
        }


        return $this;
    } // setNumberoflarvaeorg()

    /**
     * Set the value of [numberoflarvae] column.
     *
     * @param  int $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setNumberoflarvae($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->numberoflarvae !== $v) {
            $this->numberoflarvae = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::NUMBEROFLARVAE;
        }


        return $this;
    } // setNumberoflarvae()

    /**
     * Set the value of [nurserysystemi] column.
     *
     * @param  string $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setNurserysystemi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nurserysystemi !== $v) {
            $this->nurserysystemi = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::NURSERYSYSTEMI;
        }


        return $this;
    } // setNurserysystemi()

    /**
     * Set the value of [nurserysystemii] column.
     *
     * @param  string $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setNurserysystemii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nurserysystemii !== $v) {
            $this->nurserysystemii = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::NURSERYSYSTEMII;
        }


        return $this;
    } // setNurserysystemii()

    /**
     * Set the value of [culturesystem] column.
     *
     * @param  string $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setCulturesystem($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->culturesystem !== $v) {
            $this->culturesystem = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::CULTURESYSTEM;
        }


        return $this;
    } // setCulturesystem()

    /**
     * Set the value of [mainwatersource] column.
     *
     * @param  string $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setMainwatersource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mainwatersource !== $v) {
            $this->mainwatersource = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::MAINWATERSOURCE;
        }


        return $this;
    } // setMainwatersource()

    /**
     * Set the value of [supplwatersource] column.
     *
     * @param  string $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setSupplwatersource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->supplwatersource !== $v) {
            $this->supplwatersource = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::SUPPLWATERSOURCE;
        }


        return $this;
    } // setSupplwatersource()

    /**
     * Set the value of [tempmin] column.
     *
     * @param  double $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setTempmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tempmin !== $v) {
            $this->tempmin = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::TEMPMIN;
        }


        return $this;
    } // setTempmin()

    /**
     * Set the value of [tempmax] column.
     *
     * @param  double $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setTempmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tempmax !== $v) {
            $this->tempmax = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::TEMPMAX;
        }


        return $this;
    } // setTempmax()

    /**
     * Set the value of [salinmin] column.
     *
     * @param  double $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setSalinmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->salinmin !== $v) {
            $this->salinmin = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::SALINMIN;
        }


        return $this;
    } // setSalinmin()

    /**
     * Set the value of [salinmax] column.
     *
     * @param  double $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setSalinmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->salinmax !== $v) {
            $this->salinmax = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::SALINMAX;
        }


        return $this;
    } // setSalinmax()

    /**
     * Set the value of [phmin] column.
     *
     * @param  double $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setPhmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->phmin !== $v) {
            $this->phmin = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::PHMIN;
        }


        return $this;
    } // setPhmin()

    /**
     * Set the value of [phmax] column.
     *
     * @param  double $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setPhmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->phmax !== $v) {
            $this->phmax = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::PHMAX;
        }


        return $this;
    } // setPhmax()

    /**
     * Set the value of [oxygenmin] column.
     *
     * @param  double $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setOxygenmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oxygenmin !== $v) {
            $this->oxygenmin = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::OXYGENMIN;
        }


        return $this;
    } // setOxygenmin()

    /**
     * Set the value of [oxygenmax] column.
     *
     * @param  double $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setOxygenmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oxygenmax !== $v) {
            $this->oxygenmax = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::OXYGENMAX;
        }


        return $this;
    } // setOxygenmax()

    /**
     * Set the value of [illuminationmin] column.
     *
     * @param  double $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setIlluminationmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->illuminationmin !== $v) {
            $this->illuminationmin = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::ILLUMINATIONMIN;
        }


        return $this;
    } // setIlluminationmin()

    /**
     * Set the value of [illuminationmax] column.
     *
     * @param  double $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setIlluminationmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->illuminationmax !== $v) {
            $this->illuminationmax = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::ILLUMINATIONMAX;
        }


        return $this;
    } // setIlluminationmax()

    /**
     * Set the value of [stockingdensityorg] column.
     *
     * @param  string $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setStockingdensityorg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->stockingdensityorg !== $v) {
            $this->stockingdensityorg = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::STOCKINGDENSITYORG;
        }


        return $this;
    } // setStockingdensityorg()

    /**
     * Set the value of [stockingdensity] column.
     *
     * @param  double $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setStockingdensity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->stockingdensity !== $v) {
            $this->stockingdensity = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::STOCKINGDENSITY;
        }


        return $this;
    } // setStockingdensity()

    /**
     * Set the value of [firstfeeddaysmin] column.
     *
     * @param  int $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setFirstfeeddaysmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->firstfeeddaysmin !== $v) {
            $this->firstfeeddaysmin = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::FIRSTFEEDDAYSMIN;
        }


        return $this;
    } // setFirstfeeddaysmin()

    /**
     * Set the value of [firstfeeddaysmax] column.
     *
     * @param  int $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setFirstfeeddaysmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->firstfeeddaysmax !== $v) {
            $this->firstfeeddaysmax = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::FIRSTFEEDDAYSMAX;
        }


        return $this;
    } // setFirstfeeddaysmax()

    /**
     * Set the value of [firstfeeddaysdegmin] column.
     *
     * @param  int $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setFirstfeeddaysdegmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->firstfeeddaysdegmin !== $v) {
            $this->firstfeeddaysdegmin = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::FIRSTFEEDDAYSDEGMIN;
        }


        return $this;
    } // setFirstfeeddaysdegmin()

    /**
     * Set the value of [firstfeeddaysdegmax] column.
     *
     * @param  int $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setFirstfeeddaysdegmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->firstfeeddaysdegmax !== $v) {
            $this->firstfeeddaysdegmax = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::FIRSTFEEDDAYSDEGMAX;
        }


        return $this;
    } // setFirstfeeddaysdegmax()

    /**
     * Set the value of [unit] column.
     *
     * @param  string $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setUnit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unit !== $v) {
            $this->unit = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::UNIT;
        }


        return $this;
    } // setUnit()

    /**
     * Set the value of [foodi] column.
     *
     * @param  string $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setFoodi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->foodi !== $v) {
            $this->foodi = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::FOODI;
        }


        return $this;
    } // setFoodi()

    /**
     * Set the value of [foodii] column.
     *
     * @param  string $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setFoodii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->foodii !== $v) {
            $this->foodii = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::FOODII;
        }


        return $this;
    } // setFoodii()

    /**
     * Set the value of [productionperiode] column.
     *
     * @param  string $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setProductionperiode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->productionperiode !== $v) {
            $this->productionperiode = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::PRODUCTIONPERIODE;
        }


        return $this;
    } // setProductionperiode()

    /**
     * Set the value of [hatchingtofrydaysmin] column.
     *
     * @param  int $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setHatchingtofrydaysmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hatchingtofrydaysmin !== $v) {
            $this->hatchingtofrydaysmin = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::HATCHINGTOFRYDAYSMIN;
        }


        return $this;
    } // setHatchingtofrydaysmin()

    /**
     * Set the value of [hatchingtofrydaysmax] column.
     *
     * @param  int $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setHatchingtofrydaysmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hatchingtofrydaysmax !== $v) {
            $this->hatchingtofrydaysmax = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::HATCHINGTOFRYDAYSMAX;
        }


        return $this;
    } // setHatchingtofrydaysmax()

    /**
     * Set the value of [hatchingtofrydaysdegmin] column.
     *
     * @param  int $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setHatchingtofrydaysdegmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hatchingtofrydaysdegmin !== $v) {
            $this->hatchingtofrydaysdegmin = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::HATCHINGTOFRYDAYSDEGMIN;
        }


        return $this;
    } // setHatchingtofrydaysdegmin()

    /**
     * Set the value of [hatchingtofrydaysdegmax] column.
     *
     * @param  int $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setHatchingtofrydaysdegmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hatchingtofrydaysdegmax !== $v) {
            $this->hatchingtofrydaysdegmax = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::HATCHINGTOFRYDAYSDEGMAX;
        }


        return $this;
    } // setHatchingtofrydaysdegmax()

    /**
     * Set the value of [mortalityrate] column.
     *
     * @param  string $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setMortalityrate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mortalityrate !== $v) {
            $this->mortalityrate = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::MORTALITYRATE;
        }


        return $this;
    } // setMortalityrate()

    /**
     * Set the value of [mortalityratemin] column.
     *
     * @param  double $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setMortalityratemin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->mortalityratemin !== $v) {
            $this->mortalityratemin = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::MORTALITYRATEMIN;
        }


        return $this;
    } // setMortalityratemin()

    /**
     * Set the value of [mortalityratemax] column.
     *
     * @param  double $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setMortalityratemax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->mortalityratemax !== $v) {
            $this->mortalityratemax = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::MORTALITYRATEMAX;
        }


        return $this;
    } // setMortalityratemax()

    /**
     * Set the value of [growthrate] column.
     *
     * @param  string $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setGrowthrate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->growthrate !== $v) {
            $this->growthrate = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::GROWTHRATE;
        }


        return $this;
    } // setGrowthrate()

    /**
     * Set the value of [fcr] column.
     *
     * @param  double $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setFcr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->fcr !== $v) {
            $this->fcr = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::FCR;
        }


        return $this;
    } // setFcr()

    /**
     * Set the value of [productioncycle] column.
     *
     * @param  int $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setProductioncycle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->productioncycle !== $v) {
            $this->productioncycle = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::PRODUCTIONCYCLE;
        }


        return $this;
    } // setProductioncycle()

    /**
     * Set the value of [unitcycle] column.
     *
     * @param  string $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setUnitcycle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unitcycle !== $v) {
            $this->unitcycle = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::UNITCYCLE;
        }


        return $this;
    } // setUnitcycle()

    /**
     * Set the value of [productionyear] column.
     *
     * @param  int $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setProductionyear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->productionyear !== $v) {
            $this->productionyear = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::PRODUCTIONYEAR;
        }


        return $this;
    } // setProductionyear()

    /**
     * Set the value of [unityear] column.
     *
     * @param  string $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setUnityear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unityear !== $v) {
            $this->unityear = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::UNITYEAR;
        }


        return $this;
    } // setUnityear()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = LarvalnurserysystemPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = LarvalnurserysystemPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = LarvalnurserysystemPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = LarvalnurserysystemPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Larvalnurserysystem The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = LarvalnurserysystemPeer::TS;
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
            $this->species = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->commonname = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->mainref = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->c_code = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->locality = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->dataref = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->numberoflarvaeorg = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->numberoflarvae = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->nurserysystemi = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->nurserysystemii = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->culturesystem = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->mainwatersource = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->supplwatersource = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->tempmin = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->tempmax = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->salinmin = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->salinmax = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->phmin = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->phmax = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->oxygenmin = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->oxygenmax = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
            $this->illuminationmin = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
            $this->illuminationmax = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->stockingdensityorg = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->stockingdensity = ($row[$startcol + 27] !== null) ? (double) $row[$startcol + 27] : null;
            $this->firstfeeddaysmin = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->firstfeeddaysmax = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->firstfeeddaysdegmin = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->firstfeeddaysdegmax = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->unit = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->foodi = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->foodii = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->productionperiode = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->hatchingtofrydaysmin = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->hatchingtofrydaysmax = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->hatchingtofrydaysdegmin = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->hatchingtofrydaysdegmax = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->mortalityrate = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->mortalityratemin = ($row[$startcol + 41] !== null) ? (double) $row[$startcol + 41] : null;
            $this->mortalityratemax = ($row[$startcol + 42] !== null) ? (double) $row[$startcol + 42] : null;
            $this->growthrate = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->fcr = ($row[$startcol + 44] !== null) ? (double) $row[$startcol + 44] : null;
            $this->productioncycle = ($row[$startcol + 45] !== null) ? (int) $row[$startcol + 45] : null;
            $this->unitcycle = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->productionyear = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->unityear = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->comment = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->entered = ($row[$startcol + 50] !== null) ? (int) $row[$startcol + 50] : null;
            $this->dateentered = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->modified = ($row[$startcol + 52] !== null) ? (int) $row[$startcol + 52] : null;
            $this->datemodified = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->expert = ($row[$startcol + 54] !== null) ? (int) $row[$startcol + 54] : null;
            $this->datechecked = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->ts = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 57; // 57 = LarvalnurserysystemPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Larvalnurserysystem object", $e);
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
            $con = Propel::getConnection(LarvalnurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = LarvalnurserysystemPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(LarvalnurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = LarvalnurserysystemQuery::create()
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
            $con = Propel::getConnection(LarvalnurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                LarvalnurserysystemPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = LarvalnurserysystemPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . LarvalnurserysystemPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(LarvalnurserysystemPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Speccode`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Stockcode`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::SPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`Species`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::COMMONNAME)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::MAINREF)) {
            $modifiedColumns[':p' . $index++]  = '`MainRef`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::DATAREF)) {
            $modifiedColumns[':p' . $index++]  = '`DataRef`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::NUMBEROFLARVAEORG)) {
            $modifiedColumns[':p' . $index++]  = '`NumberofLarvaeOrg`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::NUMBEROFLARVAE)) {
            $modifiedColumns[':p' . $index++]  = '`NumberofLarvae`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::NURSERYSYSTEMI)) {
            $modifiedColumns[':p' . $index++]  = '`NurserySystemI`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::NURSERYSYSTEMII)) {
            $modifiedColumns[':p' . $index++]  = '`NurserySystemII`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::CULTURESYSTEM)) {
            $modifiedColumns[':p' . $index++]  = '`CultureSystem`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::MAINWATERSOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`MainWaterSource`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::SUPPLWATERSOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`SupplWaterSource`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::TEMPMIN)) {
            $modifiedColumns[':p' . $index++]  = '`TempMin`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::TEMPMAX)) {
            $modifiedColumns[':p' . $index++]  = '`TempMax`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::SALINMIN)) {
            $modifiedColumns[':p' . $index++]  = '`SalinMin`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::SALINMAX)) {
            $modifiedColumns[':p' . $index++]  = '`SalinMax`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::PHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`pHMin`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::PHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`pHMax`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::OXYGENMIN)) {
            $modifiedColumns[':p' . $index++]  = '`OxygenMin`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::OXYGENMAX)) {
            $modifiedColumns[':p' . $index++]  = '`OxygenMax`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::ILLUMINATIONMIN)) {
            $modifiedColumns[':p' . $index++]  = '`IlluminationMin`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::ILLUMINATIONMAX)) {
            $modifiedColumns[':p' . $index++]  = '`IlluminationMax`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::STOCKINGDENSITYORG)) {
            $modifiedColumns[':p' . $index++]  = '`StockingDensityOrg`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::STOCKINGDENSITY)) {
            $modifiedColumns[':p' . $index++]  = '`StockingDensity`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::FIRSTFEEDDAYSMIN)) {
            $modifiedColumns[':p' . $index++]  = '`FirstFeedDaysMin`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::FIRSTFEEDDAYSMAX)) {
            $modifiedColumns[':p' . $index++]  = '`FirstFeedDaysMax`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::FIRSTFEEDDAYSDEGMIN)) {
            $modifiedColumns[':p' . $index++]  = '`FirstFeedDaysDegMin`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::FIRSTFEEDDAYSDEGMAX)) {
            $modifiedColumns[':p' . $index++]  = '`FirstFeedDaysDegMax`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::UNIT)) {
            $modifiedColumns[':p' . $index++]  = '`Unit`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::FOODI)) {
            $modifiedColumns[':p' . $index++]  = '`FoodI`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::FOODII)) {
            $modifiedColumns[':p' . $index++]  = '`FoodII`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::PRODUCTIONPERIODE)) {
            $modifiedColumns[':p' . $index++]  = '`ProductionPeriode`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSMIN)) {
            $modifiedColumns[':p' . $index++]  = '`HatchingtoFryDaysMin`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSMAX)) {
            $modifiedColumns[':p' . $index++]  = '`HatchingtoFryDaysMax`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSDEGMIN)) {
            $modifiedColumns[':p' . $index++]  = '`HatchingtoFryDaysDegMin`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSDEGMAX)) {
            $modifiedColumns[':p' . $index++]  = '`HatchingtoFryDaysDegMax`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::MORTALITYRATE)) {
            $modifiedColumns[':p' . $index++]  = '`MortalityRate`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::MORTALITYRATEMIN)) {
            $modifiedColumns[':p' . $index++]  = '`MortalityRateMin`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::MORTALITYRATEMAX)) {
            $modifiedColumns[':p' . $index++]  = '`MortalityRateMax`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::GROWTHRATE)) {
            $modifiedColumns[':p' . $index++]  = '`GrowthRate`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::FCR)) {
            $modifiedColumns[':p' . $index++]  = '`FCR`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::PRODUCTIONCYCLE)) {
            $modifiedColumns[':p' . $index++]  = '`ProductionCycle`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::UNITCYCLE)) {
            $modifiedColumns[':p' . $index++]  = '`UnitCycle`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::PRODUCTIONYEAR)) {
            $modifiedColumns[':p' . $index++]  = '`ProductionYear`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::UNITYEAR)) {
            $modifiedColumns[':p' . $index++]  = '`UnitYear`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Comment`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(LarvalnurserysystemPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `larvalnurserysystem` (%s) VALUES (%s)',
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
                    case '`Species`':
                        $stmt->bindValue($identifier, $this->species, PDO::PARAM_STR);
                        break;
                    case '`CommonName`':
                        $stmt->bindValue($identifier, $this->commonname, PDO::PARAM_STR);
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
                    case '`NumberofLarvaeOrg`':
                        $stmt->bindValue($identifier, $this->numberoflarvaeorg, PDO::PARAM_STR);
                        break;
                    case '`NumberofLarvae`':
                        $stmt->bindValue($identifier, $this->numberoflarvae, PDO::PARAM_INT);
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
                        $stmt->bindValue($identifier, $this->illuminationmin, PDO::PARAM_STR);
                        break;
                    case '`IlluminationMax`':
                        $stmt->bindValue($identifier, $this->illuminationmax, PDO::PARAM_STR);
                        break;
                    case '`StockingDensityOrg`':
                        $stmt->bindValue($identifier, $this->stockingdensityorg, PDO::PARAM_STR);
                        break;
                    case '`StockingDensity`':
                        $stmt->bindValue($identifier, $this->stockingdensity, PDO::PARAM_STR);
                        break;
                    case '`FirstFeedDaysMin`':
                        $stmt->bindValue($identifier, $this->firstfeeddaysmin, PDO::PARAM_INT);
                        break;
                    case '`FirstFeedDaysMax`':
                        $stmt->bindValue($identifier, $this->firstfeeddaysmax, PDO::PARAM_INT);
                        break;
                    case '`FirstFeedDaysDegMin`':
                        $stmt->bindValue($identifier, $this->firstfeeddaysdegmin, PDO::PARAM_INT);
                        break;
                    case '`FirstFeedDaysDegMax`':
                        $stmt->bindValue($identifier, $this->firstfeeddaysdegmax, PDO::PARAM_INT);
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
                    case '`HatchingtoFryDaysMin`':
                        $stmt->bindValue($identifier, $this->hatchingtofrydaysmin, PDO::PARAM_INT);
                        break;
                    case '`HatchingtoFryDaysMax`':
                        $stmt->bindValue($identifier, $this->hatchingtofrydaysmax, PDO::PARAM_INT);
                        break;
                    case '`HatchingtoFryDaysDegMin`':
                        $stmt->bindValue($identifier, $this->hatchingtofrydaysdegmin, PDO::PARAM_INT);
                        break;
                    case '`HatchingtoFryDaysDegMax`':
                        $stmt->bindValue($identifier, $this->hatchingtofrydaysdegmax, PDO::PARAM_INT);
                        break;
                    case '`MortalityRate`':
                        $stmt->bindValue($identifier, $this->mortalityrate, PDO::PARAM_STR);
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


            if (($retval = LarvalnurserysystemPeer::doValidate($this, $columns)) !== true) {
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
        $pos = LarvalnurserysystemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSpecies();
                break;
            case 4:
                return $this->getCommonname();
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
                return $this->getNumberoflarvaeorg();
                break;
            case 10:
                return $this->getNumberoflarvae();
                break;
            case 11:
                return $this->getNurserysystemi();
                break;
            case 12:
                return $this->getNurserysystemii();
                break;
            case 13:
                return $this->getCulturesystem();
                break;
            case 14:
                return $this->getMainwatersource();
                break;
            case 15:
                return $this->getSupplwatersource();
                break;
            case 16:
                return $this->getTempmin();
                break;
            case 17:
                return $this->getTempmax();
                break;
            case 18:
                return $this->getSalinmin();
                break;
            case 19:
                return $this->getSalinmax();
                break;
            case 20:
                return $this->getPhmin();
                break;
            case 21:
                return $this->getPhmax();
                break;
            case 22:
                return $this->getOxygenmin();
                break;
            case 23:
                return $this->getOxygenmax();
                break;
            case 24:
                return $this->getIlluminationmin();
                break;
            case 25:
                return $this->getIlluminationmax();
                break;
            case 26:
                return $this->getStockingdensityorg();
                break;
            case 27:
                return $this->getStockingdensity();
                break;
            case 28:
                return $this->getFirstfeeddaysmin();
                break;
            case 29:
                return $this->getFirstfeeddaysmax();
                break;
            case 30:
                return $this->getFirstfeeddaysdegmin();
                break;
            case 31:
                return $this->getFirstfeeddaysdegmax();
                break;
            case 32:
                return $this->getUnit();
                break;
            case 33:
                return $this->getFoodi();
                break;
            case 34:
                return $this->getFoodii();
                break;
            case 35:
                return $this->getProductionperiode();
                break;
            case 36:
                return $this->getHatchingtofrydaysmin();
                break;
            case 37:
                return $this->getHatchingtofrydaysmax();
                break;
            case 38:
                return $this->getHatchingtofrydaysdegmin();
                break;
            case 39:
                return $this->getHatchingtofrydaysdegmax();
                break;
            case 40:
                return $this->getMortalityrate();
                break;
            case 41:
                return $this->getMortalityratemin();
                break;
            case 42:
                return $this->getMortalityratemax();
                break;
            case 43:
                return $this->getGrowthrate();
                break;
            case 44:
                return $this->getFcr();
                break;
            case 45:
                return $this->getProductioncycle();
                break;
            case 46:
                return $this->getUnitcycle();
                break;
            case 47:
                return $this->getProductionyear();
                break;
            case 48:
                return $this->getUnityear();
                break;
            case 49:
                return $this->getComment();
                break;
            case 50:
                return $this->getEntered();
                break;
            case 51:
                return $this->getDateentered();
                break;
            case 52:
                return $this->getModified();
                break;
            case 53:
                return $this->getDatemodified();
                break;
            case 54:
                return $this->getExpert();
                break;
            case 55:
                return $this->getDatechecked();
                break;
            case 56:
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
        if (isset($alreadyDumpedObjects['Larvalnurserysystem'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Larvalnurserysystem'][serialize($this->getPrimaryKey())] = true;
        $keys = LarvalnurserysystemPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getSpeccode(),
            $keys[2] => $this->getStockcode(),
            $keys[3] => $this->getSpecies(),
            $keys[4] => $this->getCommonname(),
            $keys[5] => $this->getMainref(),
            $keys[6] => $this->getCCode(),
            $keys[7] => $this->getLocality(),
            $keys[8] => $this->getDataref(),
            $keys[9] => $this->getNumberoflarvaeorg(),
            $keys[10] => $this->getNumberoflarvae(),
            $keys[11] => $this->getNurserysystemi(),
            $keys[12] => $this->getNurserysystemii(),
            $keys[13] => $this->getCulturesystem(),
            $keys[14] => $this->getMainwatersource(),
            $keys[15] => $this->getSupplwatersource(),
            $keys[16] => $this->getTempmin(),
            $keys[17] => $this->getTempmax(),
            $keys[18] => $this->getSalinmin(),
            $keys[19] => $this->getSalinmax(),
            $keys[20] => $this->getPhmin(),
            $keys[21] => $this->getPhmax(),
            $keys[22] => $this->getOxygenmin(),
            $keys[23] => $this->getOxygenmax(),
            $keys[24] => $this->getIlluminationmin(),
            $keys[25] => $this->getIlluminationmax(),
            $keys[26] => $this->getStockingdensityorg(),
            $keys[27] => $this->getStockingdensity(),
            $keys[28] => $this->getFirstfeeddaysmin(),
            $keys[29] => $this->getFirstfeeddaysmax(),
            $keys[30] => $this->getFirstfeeddaysdegmin(),
            $keys[31] => $this->getFirstfeeddaysdegmax(),
            $keys[32] => $this->getUnit(),
            $keys[33] => $this->getFoodi(),
            $keys[34] => $this->getFoodii(),
            $keys[35] => $this->getProductionperiode(),
            $keys[36] => $this->getHatchingtofrydaysmin(),
            $keys[37] => $this->getHatchingtofrydaysmax(),
            $keys[38] => $this->getHatchingtofrydaysdegmin(),
            $keys[39] => $this->getHatchingtofrydaysdegmax(),
            $keys[40] => $this->getMortalityrate(),
            $keys[41] => $this->getMortalityratemin(),
            $keys[42] => $this->getMortalityratemax(),
            $keys[43] => $this->getGrowthrate(),
            $keys[44] => $this->getFcr(),
            $keys[45] => $this->getProductioncycle(),
            $keys[46] => $this->getUnitcycle(),
            $keys[47] => $this->getProductionyear(),
            $keys[48] => $this->getUnityear(),
            $keys[49] => $this->getComment(),
            $keys[50] => $this->getEntered(),
            $keys[51] => $this->getDateentered(),
            $keys[52] => $this->getModified(),
            $keys[53] => $this->getDatemodified(),
            $keys[54] => $this->getExpert(),
            $keys[55] => $this->getDatechecked(),
            $keys[56] => $this->getTs(),
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
        $pos = LarvalnurserysystemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSpecies($value);
                break;
            case 4:
                $this->setCommonname($value);
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
                $this->setNumberoflarvaeorg($value);
                break;
            case 10:
                $this->setNumberoflarvae($value);
                break;
            case 11:
                $this->setNurserysystemi($value);
                break;
            case 12:
                $this->setNurserysystemii($value);
                break;
            case 13:
                $this->setCulturesystem($value);
                break;
            case 14:
                $this->setMainwatersource($value);
                break;
            case 15:
                $this->setSupplwatersource($value);
                break;
            case 16:
                $this->setTempmin($value);
                break;
            case 17:
                $this->setTempmax($value);
                break;
            case 18:
                $this->setSalinmin($value);
                break;
            case 19:
                $this->setSalinmax($value);
                break;
            case 20:
                $this->setPhmin($value);
                break;
            case 21:
                $this->setPhmax($value);
                break;
            case 22:
                $this->setOxygenmin($value);
                break;
            case 23:
                $this->setOxygenmax($value);
                break;
            case 24:
                $this->setIlluminationmin($value);
                break;
            case 25:
                $this->setIlluminationmax($value);
                break;
            case 26:
                $this->setStockingdensityorg($value);
                break;
            case 27:
                $this->setStockingdensity($value);
                break;
            case 28:
                $this->setFirstfeeddaysmin($value);
                break;
            case 29:
                $this->setFirstfeeddaysmax($value);
                break;
            case 30:
                $this->setFirstfeeddaysdegmin($value);
                break;
            case 31:
                $this->setFirstfeeddaysdegmax($value);
                break;
            case 32:
                $this->setUnit($value);
                break;
            case 33:
                $this->setFoodi($value);
                break;
            case 34:
                $this->setFoodii($value);
                break;
            case 35:
                $this->setProductionperiode($value);
                break;
            case 36:
                $this->setHatchingtofrydaysmin($value);
                break;
            case 37:
                $this->setHatchingtofrydaysmax($value);
                break;
            case 38:
                $this->setHatchingtofrydaysdegmin($value);
                break;
            case 39:
                $this->setHatchingtofrydaysdegmax($value);
                break;
            case 40:
                $this->setMortalityrate($value);
                break;
            case 41:
                $this->setMortalityratemin($value);
                break;
            case 42:
                $this->setMortalityratemax($value);
                break;
            case 43:
                $this->setGrowthrate($value);
                break;
            case 44:
                $this->setFcr($value);
                break;
            case 45:
                $this->setProductioncycle($value);
                break;
            case 46:
                $this->setUnitcycle($value);
                break;
            case 47:
                $this->setProductionyear($value);
                break;
            case 48:
                $this->setUnityear($value);
                break;
            case 49:
                $this->setComment($value);
                break;
            case 50:
                $this->setEntered($value);
                break;
            case 51:
                $this->setDateentered($value);
                break;
            case 52:
                $this->setModified($value);
                break;
            case 53:
                $this->setDatemodified($value);
                break;
            case 54:
                $this->setExpert($value);
                break;
            case 55:
                $this->setDatechecked($value);
                break;
            case 56:
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
        $keys = LarvalnurserysystemPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSpeccode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setStockcode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSpecies($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCommonname($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMainref($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCCode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLocality($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDataref($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setNumberoflarvaeorg($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setNumberoflarvae($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setNurserysystemi($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNurserysystemii($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setCulturesystem($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setMainwatersource($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setSupplwatersource($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setTempmin($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setTempmax($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setSalinmin($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setSalinmax($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setPhmin($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setPhmax($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setOxygenmin($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setOxygenmax($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setIlluminationmin($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setIlluminationmax($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setStockingdensityorg($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setStockingdensity($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setFirstfeeddaysmin($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setFirstfeeddaysmax($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setFirstfeeddaysdegmin($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setFirstfeeddaysdegmax($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setUnit($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setFoodi($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setFoodii($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setProductionperiode($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setHatchingtofrydaysmin($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setHatchingtofrydaysmax($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setHatchingtofrydaysdegmin($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setHatchingtofrydaysdegmax($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setMortalityrate($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setMortalityratemin($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setMortalityratemax($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setGrowthrate($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setFcr($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setProductioncycle($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setUnitcycle($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setProductionyear($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setUnityear($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setComment($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setEntered($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setDateentered($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setModified($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setDatemodified($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setExpert($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setDatechecked($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setTs($arr[$keys[56]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(LarvalnurserysystemPeer::DATABASE_NAME);

        if ($this->isColumnModified(LarvalnurserysystemPeer::AUTOCTR)) $criteria->add(LarvalnurserysystemPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(LarvalnurserysystemPeer::SPECCODE)) $criteria->add(LarvalnurserysystemPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(LarvalnurserysystemPeer::STOCKCODE)) $criteria->add(LarvalnurserysystemPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(LarvalnurserysystemPeer::SPECIES)) $criteria->add(LarvalnurserysystemPeer::SPECIES, $this->species);
        if ($this->isColumnModified(LarvalnurserysystemPeer::COMMONNAME)) $criteria->add(LarvalnurserysystemPeer::COMMONNAME, $this->commonname);
        if ($this->isColumnModified(LarvalnurserysystemPeer::MAINREF)) $criteria->add(LarvalnurserysystemPeer::MAINREF, $this->mainref);
        if ($this->isColumnModified(LarvalnurserysystemPeer::C_CODE)) $criteria->add(LarvalnurserysystemPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(LarvalnurserysystemPeer::LOCALITY)) $criteria->add(LarvalnurserysystemPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(LarvalnurserysystemPeer::DATAREF)) $criteria->add(LarvalnurserysystemPeer::DATAREF, $this->dataref);
        if ($this->isColumnModified(LarvalnurserysystemPeer::NUMBEROFLARVAEORG)) $criteria->add(LarvalnurserysystemPeer::NUMBEROFLARVAEORG, $this->numberoflarvaeorg);
        if ($this->isColumnModified(LarvalnurserysystemPeer::NUMBEROFLARVAE)) $criteria->add(LarvalnurserysystemPeer::NUMBEROFLARVAE, $this->numberoflarvae);
        if ($this->isColumnModified(LarvalnurserysystemPeer::NURSERYSYSTEMI)) $criteria->add(LarvalnurserysystemPeer::NURSERYSYSTEMI, $this->nurserysystemi);
        if ($this->isColumnModified(LarvalnurserysystemPeer::NURSERYSYSTEMII)) $criteria->add(LarvalnurserysystemPeer::NURSERYSYSTEMII, $this->nurserysystemii);
        if ($this->isColumnModified(LarvalnurserysystemPeer::CULTURESYSTEM)) $criteria->add(LarvalnurserysystemPeer::CULTURESYSTEM, $this->culturesystem);
        if ($this->isColumnModified(LarvalnurserysystemPeer::MAINWATERSOURCE)) $criteria->add(LarvalnurserysystemPeer::MAINWATERSOURCE, $this->mainwatersource);
        if ($this->isColumnModified(LarvalnurserysystemPeer::SUPPLWATERSOURCE)) $criteria->add(LarvalnurserysystemPeer::SUPPLWATERSOURCE, $this->supplwatersource);
        if ($this->isColumnModified(LarvalnurserysystemPeer::TEMPMIN)) $criteria->add(LarvalnurserysystemPeer::TEMPMIN, $this->tempmin);
        if ($this->isColumnModified(LarvalnurserysystemPeer::TEMPMAX)) $criteria->add(LarvalnurserysystemPeer::TEMPMAX, $this->tempmax);
        if ($this->isColumnModified(LarvalnurserysystemPeer::SALINMIN)) $criteria->add(LarvalnurserysystemPeer::SALINMIN, $this->salinmin);
        if ($this->isColumnModified(LarvalnurserysystemPeer::SALINMAX)) $criteria->add(LarvalnurserysystemPeer::SALINMAX, $this->salinmax);
        if ($this->isColumnModified(LarvalnurserysystemPeer::PHMIN)) $criteria->add(LarvalnurserysystemPeer::PHMIN, $this->phmin);
        if ($this->isColumnModified(LarvalnurserysystemPeer::PHMAX)) $criteria->add(LarvalnurserysystemPeer::PHMAX, $this->phmax);
        if ($this->isColumnModified(LarvalnurserysystemPeer::OXYGENMIN)) $criteria->add(LarvalnurserysystemPeer::OXYGENMIN, $this->oxygenmin);
        if ($this->isColumnModified(LarvalnurserysystemPeer::OXYGENMAX)) $criteria->add(LarvalnurserysystemPeer::OXYGENMAX, $this->oxygenmax);
        if ($this->isColumnModified(LarvalnurserysystemPeer::ILLUMINATIONMIN)) $criteria->add(LarvalnurserysystemPeer::ILLUMINATIONMIN, $this->illuminationmin);
        if ($this->isColumnModified(LarvalnurserysystemPeer::ILLUMINATIONMAX)) $criteria->add(LarvalnurserysystemPeer::ILLUMINATIONMAX, $this->illuminationmax);
        if ($this->isColumnModified(LarvalnurserysystemPeer::STOCKINGDENSITYORG)) $criteria->add(LarvalnurserysystemPeer::STOCKINGDENSITYORG, $this->stockingdensityorg);
        if ($this->isColumnModified(LarvalnurserysystemPeer::STOCKINGDENSITY)) $criteria->add(LarvalnurserysystemPeer::STOCKINGDENSITY, $this->stockingdensity);
        if ($this->isColumnModified(LarvalnurserysystemPeer::FIRSTFEEDDAYSMIN)) $criteria->add(LarvalnurserysystemPeer::FIRSTFEEDDAYSMIN, $this->firstfeeddaysmin);
        if ($this->isColumnModified(LarvalnurserysystemPeer::FIRSTFEEDDAYSMAX)) $criteria->add(LarvalnurserysystemPeer::FIRSTFEEDDAYSMAX, $this->firstfeeddaysmax);
        if ($this->isColumnModified(LarvalnurserysystemPeer::FIRSTFEEDDAYSDEGMIN)) $criteria->add(LarvalnurserysystemPeer::FIRSTFEEDDAYSDEGMIN, $this->firstfeeddaysdegmin);
        if ($this->isColumnModified(LarvalnurserysystemPeer::FIRSTFEEDDAYSDEGMAX)) $criteria->add(LarvalnurserysystemPeer::FIRSTFEEDDAYSDEGMAX, $this->firstfeeddaysdegmax);
        if ($this->isColumnModified(LarvalnurserysystemPeer::UNIT)) $criteria->add(LarvalnurserysystemPeer::UNIT, $this->unit);
        if ($this->isColumnModified(LarvalnurserysystemPeer::FOODI)) $criteria->add(LarvalnurserysystemPeer::FOODI, $this->foodi);
        if ($this->isColumnModified(LarvalnurserysystemPeer::FOODII)) $criteria->add(LarvalnurserysystemPeer::FOODII, $this->foodii);
        if ($this->isColumnModified(LarvalnurserysystemPeer::PRODUCTIONPERIODE)) $criteria->add(LarvalnurserysystemPeer::PRODUCTIONPERIODE, $this->productionperiode);
        if ($this->isColumnModified(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSMIN)) $criteria->add(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSMIN, $this->hatchingtofrydaysmin);
        if ($this->isColumnModified(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSMAX)) $criteria->add(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSMAX, $this->hatchingtofrydaysmax);
        if ($this->isColumnModified(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSDEGMIN)) $criteria->add(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSDEGMIN, $this->hatchingtofrydaysdegmin);
        if ($this->isColumnModified(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSDEGMAX)) $criteria->add(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSDEGMAX, $this->hatchingtofrydaysdegmax);
        if ($this->isColumnModified(LarvalnurserysystemPeer::MORTALITYRATE)) $criteria->add(LarvalnurserysystemPeer::MORTALITYRATE, $this->mortalityrate);
        if ($this->isColumnModified(LarvalnurserysystemPeer::MORTALITYRATEMIN)) $criteria->add(LarvalnurserysystemPeer::MORTALITYRATEMIN, $this->mortalityratemin);
        if ($this->isColumnModified(LarvalnurserysystemPeer::MORTALITYRATEMAX)) $criteria->add(LarvalnurserysystemPeer::MORTALITYRATEMAX, $this->mortalityratemax);
        if ($this->isColumnModified(LarvalnurserysystemPeer::GROWTHRATE)) $criteria->add(LarvalnurserysystemPeer::GROWTHRATE, $this->growthrate);
        if ($this->isColumnModified(LarvalnurserysystemPeer::FCR)) $criteria->add(LarvalnurserysystemPeer::FCR, $this->fcr);
        if ($this->isColumnModified(LarvalnurserysystemPeer::PRODUCTIONCYCLE)) $criteria->add(LarvalnurserysystemPeer::PRODUCTIONCYCLE, $this->productioncycle);
        if ($this->isColumnModified(LarvalnurserysystemPeer::UNITCYCLE)) $criteria->add(LarvalnurserysystemPeer::UNITCYCLE, $this->unitcycle);
        if ($this->isColumnModified(LarvalnurserysystemPeer::PRODUCTIONYEAR)) $criteria->add(LarvalnurserysystemPeer::PRODUCTIONYEAR, $this->productionyear);
        if ($this->isColumnModified(LarvalnurserysystemPeer::UNITYEAR)) $criteria->add(LarvalnurserysystemPeer::UNITYEAR, $this->unityear);
        if ($this->isColumnModified(LarvalnurserysystemPeer::COMMENT)) $criteria->add(LarvalnurserysystemPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(LarvalnurserysystemPeer::ENTERED)) $criteria->add(LarvalnurserysystemPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(LarvalnurserysystemPeer::DATEENTERED)) $criteria->add(LarvalnurserysystemPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(LarvalnurserysystemPeer::MODIFIED)) $criteria->add(LarvalnurserysystemPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(LarvalnurserysystemPeer::DATEMODIFIED)) $criteria->add(LarvalnurserysystemPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(LarvalnurserysystemPeer::EXPERT)) $criteria->add(LarvalnurserysystemPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(LarvalnurserysystemPeer::DATECHECKED)) $criteria->add(LarvalnurserysystemPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(LarvalnurserysystemPeer::TS)) $criteria->add(LarvalnurserysystemPeer::TS, $this->ts);

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
        $criteria = new Criteria(LarvalnurserysystemPeer::DATABASE_NAME);
        $criteria->add(LarvalnurserysystemPeer::AUTOCTR, $this->autoctr);
        $criteria->add(LarvalnurserysystemPeer::STOCKCODE, $this->stockcode);
        $criteria->add(LarvalnurserysystemPeer::MAINREF, $this->mainref);

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
     * @param object $copyObj An object of Larvalnurserysystem (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpecies($this->getSpecies());
        $copyObj->setCommonname($this->getCommonname());
        $copyObj->setMainref($this->getMainref());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setDataref($this->getDataref());
        $copyObj->setNumberoflarvaeorg($this->getNumberoflarvaeorg());
        $copyObj->setNumberoflarvae($this->getNumberoflarvae());
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
        $copyObj->setFirstfeeddaysmin($this->getFirstfeeddaysmin());
        $copyObj->setFirstfeeddaysmax($this->getFirstfeeddaysmax());
        $copyObj->setFirstfeeddaysdegmin($this->getFirstfeeddaysdegmin());
        $copyObj->setFirstfeeddaysdegmax($this->getFirstfeeddaysdegmax());
        $copyObj->setUnit($this->getUnit());
        $copyObj->setFoodi($this->getFoodi());
        $copyObj->setFoodii($this->getFoodii());
        $copyObj->setProductionperiode($this->getProductionperiode());
        $copyObj->setHatchingtofrydaysmin($this->getHatchingtofrydaysmin());
        $copyObj->setHatchingtofrydaysmax($this->getHatchingtofrydaysmax());
        $copyObj->setHatchingtofrydaysdegmin($this->getHatchingtofrydaysdegmin());
        $copyObj->setHatchingtofrydaysdegmax($this->getHatchingtofrydaysdegmax());
        $copyObj->setMortalityrate($this->getMortalityrate());
        $copyObj->setMortalityratemin($this->getMortalityratemin());
        $copyObj->setMortalityratemax($this->getMortalityratemax());
        $copyObj->setGrowthrate($this->getGrowthrate());
        $copyObj->setFcr($this->getFcr());
        $copyObj->setProductioncycle($this->getProductioncycle());
        $copyObj->setUnitcycle($this->getUnitcycle());
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
     * @return Larvalnurserysystem Clone of current object.
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
     * @return LarvalnurserysystemPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new LarvalnurserysystemPeer();
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
        $this->species = null;
        $this->commonname = null;
        $this->mainref = null;
        $this->c_code = null;
        $this->locality = null;
        $this->dataref = null;
        $this->numberoflarvaeorg = null;
        $this->numberoflarvae = null;
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
        $this->firstfeeddaysmin = null;
        $this->firstfeeddaysmax = null;
        $this->firstfeeddaysdegmin = null;
        $this->firstfeeddaysdegmax = null;
        $this->unit = null;
        $this->foodi = null;
        $this->foodii = null;
        $this->productionperiode = null;
        $this->hatchingtofrydaysmin = null;
        $this->hatchingtofrydaysmax = null;
        $this->hatchingtofrydaysdegmin = null;
        $this->hatchingtofrydaysdegmax = null;
        $this->mortalityrate = null;
        $this->mortalityratemin = null;
        $this->mortalityratemax = null;
        $this->growthrate = null;
        $this->fcr = null;
        $this->productioncycle = null;
        $this->unitcycle = null;
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
        return (string) $this->exportTo(LarvalnurserysystemPeer::DEFAULT_STRING_FORMAT);
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
