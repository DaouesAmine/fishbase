<?php


/**
 * Base class that represents a row from the 'broodstock' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseBroodstock extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'BroodstockPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        BroodstockPeer
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
     * The value for the breedingi field.
     * @var        string
     */
    protected $breedingi;

    /**
     * The value for the fecundity field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $fecundity;

    /**
     * The value for the countriesandregions field.
     * @var        string
     */
    protected $countriesandregions;

    /**
     * The value for the breedingii field.
     * @var        string
     */
    protected $breedingii;

    /**
     * The value for the breedingiii field.
     * @var        string
     */
    protected $breedingiii;

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
     * The value for the spawningtempmin field.
     * @var        double
     */
    protected $spawningtempmin;

    /**
     * The value for the spawningtempmax field.
     * @var        double
     */
    protected $spawningtempmax;

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
     * The value for the hardnessmin field.
     * @var        double
     */
    protected $hardnessmin;

    /**
     * The value for the hardnessmax field.
     * @var        double
     */
    protected $hardnessmax;

    /**
     * The value for the broodstockstockingrate field.
     * @var        double
     */
    protected $broodstockstockingrate;

    /**
     * The value for the broodstockfemale field.
     * @var        int
     */
    protected $broodstockfemale;

    /**
     * The value for the broodstockmale field.
     * @var        int
     */
    protected $broodstockmale;

    /**
     * The value for the sexratio field.
     * @var        string
     */
    protected $sexratio;

    /**
     * The value for the eggproduction field.
     * @var        double
     */
    protected $eggproduction;

    /**
     * The value for the postmortality field.
     * @var        string
     */
    protected $postmortality;

    /**
     * The value for the fcr field.
     * @var        double
     */
    protected $fcr;

    /**
     * The value for the comments field.
     * @var        string
     */
    protected $comments;

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
        $this->fecundity = 0;
    }

    /**
     * Initializes internal state of BaseBroodstock object.
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
     * Get the [breedingi] column value.
     *
     * @return string
     */
    public function getBreedingi()
    {

        return $this->breedingi;
    }

    /**
     * Get the [fecundity] column value.
     *
     * @return int
     */
    public function getFecundity()
    {

        return $this->fecundity;
    }

    /**
     * Get the [countriesandregions] column value.
     *
     * @return string
     */
    public function getCountriesandregions()
    {

        return $this->countriesandregions;
    }

    /**
     * Get the [breedingii] column value.
     *
     * @return string
     */
    public function getBreedingii()
    {

        return $this->breedingii;
    }

    /**
     * Get the [breedingiii] column value.
     *
     * @return string
     */
    public function getBreedingiii()
    {

        return $this->breedingiii;
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
     * Get the [spawningtempmin] column value.
     *
     * @return double
     */
    public function getSpawningtempmin()
    {

        return $this->spawningtempmin;
    }

    /**
     * Get the [spawningtempmax] column value.
     *
     * @return double
     */
    public function getSpawningtempmax()
    {

        return $this->spawningtempmax;
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
     * Get the [hardnessmin] column value.
     *
     * @return double
     */
    public function getHardnessmin()
    {

        return $this->hardnessmin;
    }

    /**
     * Get the [hardnessmax] column value.
     *
     * @return double
     */
    public function getHardnessmax()
    {

        return $this->hardnessmax;
    }

    /**
     * Get the [broodstockstockingrate] column value.
     *
     * @return double
     */
    public function getBroodstockstockingrate()
    {

        return $this->broodstockstockingrate;
    }

    /**
     * Get the [broodstockfemale] column value.
     *
     * @return int
     */
    public function getBroodstockfemale()
    {

        return $this->broodstockfemale;
    }

    /**
     * Get the [broodstockmale] column value.
     *
     * @return int
     */
    public function getBroodstockmale()
    {

        return $this->broodstockmale;
    }

    /**
     * Get the [sexratio] column value.
     *
     * @return string
     */
    public function getSexratio()
    {

        return $this->sexratio;
    }

    /**
     * Get the [eggproduction] column value.
     *
     * @return double
     */
    public function getEggproduction()
    {

        return $this->eggproduction;
    }

    /**
     * Get the [postmortality] column value.
     *
     * @return string
     */
    public function getPostmortality()
    {

        return $this->postmortality;
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
     * Get the [comments] column value.
     *
     * @return string
     */
    public function getComments()
    {

        return $this->comments;
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
     * @return Broodstock The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = BroodstockPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = BroodstockPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = BroodstockPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [species] column.
     *
     * @param  string $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setSpecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->species !== $v) {
            $this->species = $v;
            $this->modifiedColumns[] = BroodstockPeer::SPECIES;
        }


        return $this;
    } // setSpecies()

    /**
     * Set the value of [commonname] column.
     *
     * @param  string $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setCommonname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname !== $v) {
            $this->commonname = $v;
            $this->modifiedColumns[] = BroodstockPeer::COMMONNAME;
        }


        return $this;
    } // setCommonname()

    /**
     * Set the value of [mainref] column.
     *
     * @param  int $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setMainref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mainref !== $v) {
            $this->mainref = $v;
            $this->modifiedColumns[] = BroodstockPeer::MAINREF;
        }


        return $this;
    } // setMainref()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = BroodstockPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = BroodstockPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [dataref] column.
     *
     * @param  int $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setDataref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dataref !== $v) {
            $this->dataref = $v;
            $this->modifiedColumns[] = BroodstockPeer::DATAREF;
        }


        return $this;
    } // setDataref()

    /**
     * Set the value of [breedingi] column.
     *
     * @param  string $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setBreedingi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->breedingi !== $v) {
            $this->breedingi = $v;
            $this->modifiedColumns[] = BroodstockPeer::BREEDINGI;
        }


        return $this;
    } // setBreedingi()

    /**
     * Set the value of [fecundity] column.
     *
     * @param  int $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setFecundity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fecundity !== $v) {
            $this->fecundity = $v;
            $this->modifiedColumns[] = BroodstockPeer::FECUNDITY;
        }


        return $this;
    } // setFecundity()

    /**
     * Set the value of [countriesandregions] column.
     *
     * @param  string $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setCountriesandregions($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->countriesandregions !== $v) {
            $this->countriesandregions = $v;
            $this->modifiedColumns[] = BroodstockPeer::COUNTRIESANDREGIONS;
        }


        return $this;
    } // setCountriesandregions()

    /**
     * Set the value of [breedingii] column.
     *
     * @param  string $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setBreedingii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->breedingii !== $v) {
            $this->breedingii = $v;
            $this->modifiedColumns[] = BroodstockPeer::BREEDINGII;
        }


        return $this;
    } // setBreedingii()

    /**
     * Set the value of [breedingiii] column.
     *
     * @param  string $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setBreedingiii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->breedingiii !== $v) {
            $this->breedingiii = $v;
            $this->modifiedColumns[] = BroodstockPeer::BREEDINGIII;
        }


        return $this;
    } // setBreedingiii()

    /**
     * Set the value of [culturesystem] column.
     *
     * @param  string $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setCulturesystem($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->culturesystem !== $v) {
            $this->culturesystem = $v;
            $this->modifiedColumns[] = BroodstockPeer::CULTURESYSTEM;
        }


        return $this;
    } // setCulturesystem()

    /**
     * Set the value of [mainwatersource] column.
     *
     * @param  string $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setMainwatersource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mainwatersource !== $v) {
            $this->mainwatersource = $v;
            $this->modifiedColumns[] = BroodstockPeer::MAINWATERSOURCE;
        }


        return $this;
    } // setMainwatersource()

    /**
     * Set the value of [supplwatersource] column.
     *
     * @param  string $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setSupplwatersource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->supplwatersource !== $v) {
            $this->supplwatersource = $v;
            $this->modifiedColumns[] = BroodstockPeer::SUPPLWATERSOURCE;
        }


        return $this;
    } // setSupplwatersource()

    /**
     * Set the value of [tempmin] column.
     *
     * @param  double $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setTempmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tempmin !== $v) {
            $this->tempmin = $v;
            $this->modifiedColumns[] = BroodstockPeer::TEMPMIN;
        }


        return $this;
    } // setTempmin()

    /**
     * Set the value of [tempmax] column.
     *
     * @param  double $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setTempmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tempmax !== $v) {
            $this->tempmax = $v;
            $this->modifiedColumns[] = BroodstockPeer::TEMPMAX;
        }


        return $this;
    } // setTempmax()

    /**
     * Set the value of [spawningtempmin] column.
     *
     * @param  double $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setSpawningtempmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->spawningtempmin !== $v) {
            $this->spawningtempmin = $v;
            $this->modifiedColumns[] = BroodstockPeer::SPAWNINGTEMPMIN;
        }


        return $this;
    } // setSpawningtempmin()

    /**
     * Set the value of [spawningtempmax] column.
     *
     * @param  double $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setSpawningtempmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->spawningtempmax !== $v) {
            $this->spawningtempmax = $v;
            $this->modifiedColumns[] = BroodstockPeer::SPAWNINGTEMPMAX;
        }


        return $this;
    } // setSpawningtempmax()

    /**
     * Set the value of [salinmin] column.
     *
     * @param  double $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setSalinmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->salinmin !== $v) {
            $this->salinmin = $v;
            $this->modifiedColumns[] = BroodstockPeer::SALINMIN;
        }


        return $this;
    } // setSalinmin()

    /**
     * Set the value of [salinmax] column.
     *
     * @param  double $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setSalinmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->salinmax !== $v) {
            $this->salinmax = $v;
            $this->modifiedColumns[] = BroodstockPeer::SALINMAX;
        }


        return $this;
    } // setSalinmax()

    /**
     * Set the value of [phmin] column.
     *
     * @param  double $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setPhmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->phmin !== $v) {
            $this->phmin = $v;
            $this->modifiedColumns[] = BroodstockPeer::PHMIN;
        }


        return $this;
    } // setPhmin()

    /**
     * Set the value of [phmax] column.
     *
     * @param  double $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setPhmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->phmax !== $v) {
            $this->phmax = $v;
            $this->modifiedColumns[] = BroodstockPeer::PHMAX;
        }


        return $this;
    } // setPhmax()

    /**
     * Set the value of [oxygenmin] column.
     *
     * @param  double $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setOxygenmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oxygenmin !== $v) {
            $this->oxygenmin = $v;
            $this->modifiedColumns[] = BroodstockPeer::OXYGENMIN;
        }


        return $this;
    } // setOxygenmin()

    /**
     * Set the value of [oxygenmax] column.
     *
     * @param  double $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setOxygenmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oxygenmax !== $v) {
            $this->oxygenmax = $v;
            $this->modifiedColumns[] = BroodstockPeer::OXYGENMAX;
        }


        return $this;
    } // setOxygenmax()

    /**
     * Set the value of [hardnessmin] column.
     *
     * @param  double $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setHardnessmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->hardnessmin !== $v) {
            $this->hardnessmin = $v;
            $this->modifiedColumns[] = BroodstockPeer::HARDNESSMIN;
        }


        return $this;
    } // setHardnessmin()

    /**
     * Set the value of [hardnessmax] column.
     *
     * @param  double $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setHardnessmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->hardnessmax !== $v) {
            $this->hardnessmax = $v;
            $this->modifiedColumns[] = BroodstockPeer::HARDNESSMAX;
        }


        return $this;
    } // setHardnessmax()

    /**
     * Set the value of [broodstockstockingrate] column.
     *
     * @param  double $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setBroodstockstockingrate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->broodstockstockingrate !== $v) {
            $this->broodstockstockingrate = $v;
            $this->modifiedColumns[] = BroodstockPeer::BROODSTOCKSTOCKINGRATE;
        }


        return $this;
    } // setBroodstockstockingrate()

    /**
     * Set the value of [broodstockfemale] column.
     *
     * @param  int $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setBroodstockfemale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->broodstockfemale !== $v) {
            $this->broodstockfemale = $v;
            $this->modifiedColumns[] = BroodstockPeer::BROODSTOCKFEMALE;
        }


        return $this;
    } // setBroodstockfemale()

    /**
     * Set the value of [broodstockmale] column.
     *
     * @param  int $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setBroodstockmale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->broodstockmale !== $v) {
            $this->broodstockmale = $v;
            $this->modifiedColumns[] = BroodstockPeer::BROODSTOCKMALE;
        }


        return $this;
    } // setBroodstockmale()

    /**
     * Set the value of [sexratio] column.
     *
     * @param  string $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setSexratio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sexratio !== $v) {
            $this->sexratio = $v;
            $this->modifiedColumns[] = BroodstockPeer::SEXRATIO;
        }


        return $this;
    } // setSexratio()

    /**
     * Set the value of [eggproduction] column.
     *
     * @param  double $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setEggproduction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->eggproduction !== $v) {
            $this->eggproduction = $v;
            $this->modifiedColumns[] = BroodstockPeer::EGGPRODUCTION;
        }


        return $this;
    } // setEggproduction()

    /**
     * Set the value of [postmortality] column.
     *
     * @param  string $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setPostmortality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->postmortality !== $v) {
            $this->postmortality = $v;
            $this->modifiedColumns[] = BroodstockPeer::POSTMORTALITY;
        }


        return $this;
    } // setPostmortality()

    /**
     * Set the value of [fcr] column.
     *
     * @param  double $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setFcr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->fcr !== $v) {
            $this->fcr = $v;
            $this->modifiedColumns[] = BroodstockPeer::FCR;
        }


        return $this;
    } // setFcr()

    /**
     * Set the value of [comments] column.
     *
     * @param  string $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setComments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comments !== $v) {
            $this->comments = $v;
            $this->modifiedColumns[] = BroodstockPeer::COMMENTS;
        }


        return $this;
    } // setComments()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = BroodstockPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Broodstock The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = BroodstockPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = BroodstockPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Broodstock The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = BroodstockPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Broodstock The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = BroodstockPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Broodstock The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = BroodstockPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Broodstock The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = BroodstockPeer::TS;
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
            if ($this->fecundity !== 0) {
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
            $this->speccode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->stockcode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->species = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->commonname = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->mainref = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->c_code = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->locality = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->dataref = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->breedingi = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->fecundity = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->countriesandregions = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->breedingii = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->breedingiii = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->culturesystem = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->mainwatersource = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->supplwatersource = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->tempmin = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->tempmax = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->spawningtempmin = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->spawningtempmax = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->salinmin = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->salinmax = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->phmin = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
            $this->phmax = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
            $this->oxygenmin = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->oxygenmax = ($row[$startcol + 26] !== null) ? (double) $row[$startcol + 26] : null;
            $this->hardnessmin = ($row[$startcol + 27] !== null) ? (double) $row[$startcol + 27] : null;
            $this->hardnessmax = ($row[$startcol + 28] !== null) ? (double) $row[$startcol + 28] : null;
            $this->broodstockstockingrate = ($row[$startcol + 29] !== null) ? (double) $row[$startcol + 29] : null;
            $this->broodstockfemale = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->broodstockmale = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->sexratio = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->eggproduction = ($row[$startcol + 33] !== null) ? (double) $row[$startcol + 33] : null;
            $this->postmortality = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->fcr = ($row[$startcol + 35] !== null) ? (double) $row[$startcol + 35] : null;
            $this->comments = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->entered = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->dateentered = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->modified = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->datemodified = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->expert = ($row[$startcol + 41] !== null) ? (int) $row[$startcol + 41] : null;
            $this->datechecked = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->ts = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 44; // 44 = BroodstockPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Broodstock object", $e);
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
            $con = Propel::getConnection(BroodstockPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = BroodstockPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(BroodstockPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = BroodstockQuery::create()
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
            $con = Propel::getConnection(BroodstockPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                BroodstockPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = BroodstockPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . BroodstockPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(BroodstockPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(BroodstockPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Speccode`';
        }
        if ($this->isColumnModified(BroodstockPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Stockcode`';
        }
        if ($this->isColumnModified(BroodstockPeer::SPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`Species`';
        }
        if ($this->isColumnModified(BroodstockPeer::COMMONNAME)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName`';
        }
        if ($this->isColumnModified(BroodstockPeer::MAINREF)) {
            $modifiedColumns[':p' . $index++]  = '`MainRef`';
        }
        if ($this->isColumnModified(BroodstockPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(BroodstockPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(BroodstockPeer::DATAREF)) {
            $modifiedColumns[':p' . $index++]  = '`DataRef`';
        }
        if ($this->isColumnModified(BroodstockPeer::BREEDINGI)) {
            $modifiedColumns[':p' . $index++]  = '`BreedingI`';
        }
        if ($this->isColumnModified(BroodstockPeer::FECUNDITY)) {
            $modifiedColumns[':p' . $index++]  = '`Fecundity`';
        }
        if ($this->isColumnModified(BroodstockPeer::COUNTRIESANDREGIONS)) {
            $modifiedColumns[':p' . $index++]  = '`CountriesandRegions`';
        }
        if ($this->isColumnModified(BroodstockPeer::BREEDINGII)) {
            $modifiedColumns[':p' . $index++]  = '`BreedingII`';
        }
        if ($this->isColumnModified(BroodstockPeer::BREEDINGIII)) {
            $modifiedColumns[':p' . $index++]  = '`BreedingIII`';
        }
        if ($this->isColumnModified(BroodstockPeer::CULTURESYSTEM)) {
            $modifiedColumns[':p' . $index++]  = '`CultureSystem`';
        }
        if ($this->isColumnModified(BroodstockPeer::MAINWATERSOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`MainwaterSource`';
        }
        if ($this->isColumnModified(BroodstockPeer::SUPPLWATERSOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`SupplWaterSource`';
        }
        if ($this->isColumnModified(BroodstockPeer::TEMPMIN)) {
            $modifiedColumns[':p' . $index++]  = '`TempMin`';
        }
        if ($this->isColumnModified(BroodstockPeer::TEMPMAX)) {
            $modifiedColumns[':p' . $index++]  = '`TempMax`';
        }
        if ($this->isColumnModified(BroodstockPeer::SPAWNINGTEMPMIN)) {
            $modifiedColumns[':p' . $index++]  = '`SpawningTempMin`';
        }
        if ($this->isColumnModified(BroodstockPeer::SPAWNINGTEMPMAX)) {
            $modifiedColumns[':p' . $index++]  = '`SpawningTempMax`';
        }
        if ($this->isColumnModified(BroodstockPeer::SALINMIN)) {
            $modifiedColumns[':p' . $index++]  = '`SalinMin`';
        }
        if ($this->isColumnModified(BroodstockPeer::SALINMAX)) {
            $modifiedColumns[':p' . $index++]  = '`SalinMax`';
        }
        if ($this->isColumnModified(BroodstockPeer::PHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`pHMin`';
        }
        if ($this->isColumnModified(BroodstockPeer::PHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`pHMax`';
        }
        if ($this->isColumnModified(BroodstockPeer::OXYGENMIN)) {
            $modifiedColumns[':p' . $index++]  = '`OxygenMin`';
        }
        if ($this->isColumnModified(BroodstockPeer::OXYGENMAX)) {
            $modifiedColumns[':p' . $index++]  = '`OxygenMax`';
        }
        if ($this->isColumnModified(BroodstockPeer::HARDNESSMIN)) {
            $modifiedColumns[':p' . $index++]  = '`HardnessMin`';
        }
        if ($this->isColumnModified(BroodstockPeer::HARDNESSMAX)) {
            $modifiedColumns[':p' . $index++]  = '`HardnessMax`';
        }
        if ($this->isColumnModified(BroodstockPeer::BROODSTOCKSTOCKINGRATE)) {
            $modifiedColumns[':p' . $index++]  = '`BroodstockStockingRate`';
        }
        if ($this->isColumnModified(BroodstockPeer::BROODSTOCKFEMALE)) {
            $modifiedColumns[':p' . $index++]  = '`Broodstockfemale`';
        }
        if ($this->isColumnModified(BroodstockPeer::BROODSTOCKMALE)) {
            $modifiedColumns[':p' . $index++]  = '`Broodstockmale`';
        }
        if ($this->isColumnModified(BroodstockPeer::SEXRATIO)) {
            $modifiedColumns[':p' . $index++]  = '`SexRatio`';
        }
        if ($this->isColumnModified(BroodstockPeer::EGGPRODUCTION)) {
            $modifiedColumns[':p' . $index++]  = '`EggProduction`';
        }
        if ($this->isColumnModified(BroodstockPeer::POSTMORTALITY)) {
            $modifiedColumns[':p' . $index++]  = '`PostMortality`';
        }
        if ($this->isColumnModified(BroodstockPeer::FCR)) {
            $modifiedColumns[':p' . $index++]  = '`FCR`';
        }
        if ($this->isColumnModified(BroodstockPeer::COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`Comments`';
        }
        if ($this->isColumnModified(BroodstockPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(BroodstockPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(BroodstockPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(BroodstockPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(BroodstockPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(BroodstockPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(BroodstockPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `broodstock` (%s) VALUES (%s)',
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
                    case '`BreedingI`':
                        $stmt->bindValue($identifier, $this->breedingi, PDO::PARAM_STR);
                        break;
                    case '`Fecundity`':
                        $stmt->bindValue($identifier, $this->fecundity, PDO::PARAM_INT);
                        break;
                    case '`CountriesandRegions`':
                        $stmt->bindValue($identifier, $this->countriesandregions, PDO::PARAM_STR);
                        break;
                    case '`BreedingII`':
                        $stmt->bindValue($identifier, $this->breedingii, PDO::PARAM_STR);
                        break;
                    case '`BreedingIII`':
                        $stmt->bindValue($identifier, $this->breedingiii, PDO::PARAM_STR);
                        break;
                    case '`CultureSystem`':
                        $stmt->bindValue($identifier, $this->culturesystem, PDO::PARAM_STR);
                        break;
                    case '`MainwaterSource`':
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
                    case '`SpawningTempMin`':
                        $stmt->bindValue($identifier, $this->spawningtempmin, PDO::PARAM_STR);
                        break;
                    case '`SpawningTempMax`':
                        $stmt->bindValue($identifier, $this->spawningtempmax, PDO::PARAM_STR);
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
                    case '`HardnessMin`':
                        $stmt->bindValue($identifier, $this->hardnessmin, PDO::PARAM_STR);
                        break;
                    case '`HardnessMax`':
                        $stmt->bindValue($identifier, $this->hardnessmax, PDO::PARAM_STR);
                        break;
                    case '`BroodstockStockingRate`':
                        $stmt->bindValue($identifier, $this->broodstockstockingrate, PDO::PARAM_STR);
                        break;
                    case '`Broodstockfemale`':
                        $stmt->bindValue($identifier, $this->broodstockfemale, PDO::PARAM_INT);
                        break;
                    case '`Broodstockmale`':
                        $stmt->bindValue($identifier, $this->broodstockmale, PDO::PARAM_INT);
                        break;
                    case '`SexRatio`':
                        $stmt->bindValue($identifier, $this->sexratio, PDO::PARAM_STR);
                        break;
                    case '`EggProduction`':
                        $stmt->bindValue($identifier, $this->eggproduction, PDO::PARAM_STR);
                        break;
                    case '`PostMortality`':
                        $stmt->bindValue($identifier, $this->postmortality, PDO::PARAM_STR);
                        break;
                    case '`FCR`':
                        $stmt->bindValue($identifier, $this->fcr, PDO::PARAM_STR);
                        break;
                    case '`Comments`':
                        $stmt->bindValue($identifier, $this->comments, PDO::PARAM_STR);
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


            if (($retval = BroodstockPeer::doValidate($this, $columns)) !== true) {
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
        $pos = BroodstockPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getBreedingi();
                break;
            case 10:
                return $this->getFecundity();
                break;
            case 11:
                return $this->getCountriesandregions();
                break;
            case 12:
                return $this->getBreedingii();
                break;
            case 13:
                return $this->getBreedingiii();
                break;
            case 14:
                return $this->getCulturesystem();
                break;
            case 15:
                return $this->getMainwatersource();
                break;
            case 16:
                return $this->getSupplwatersource();
                break;
            case 17:
                return $this->getTempmin();
                break;
            case 18:
                return $this->getTempmax();
                break;
            case 19:
                return $this->getSpawningtempmin();
                break;
            case 20:
                return $this->getSpawningtempmax();
                break;
            case 21:
                return $this->getSalinmin();
                break;
            case 22:
                return $this->getSalinmax();
                break;
            case 23:
                return $this->getPhmin();
                break;
            case 24:
                return $this->getPhmax();
                break;
            case 25:
                return $this->getOxygenmin();
                break;
            case 26:
                return $this->getOxygenmax();
                break;
            case 27:
                return $this->getHardnessmin();
                break;
            case 28:
                return $this->getHardnessmax();
                break;
            case 29:
                return $this->getBroodstockstockingrate();
                break;
            case 30:
                return $this->getBroodstockfemale();
                break;
            case 31:
                return $this->getBroodstockmale();
                break;
            case 32:
                return $this->getSexratio();
                break;
            case 33:
                return $this->getEggproduction();
                break;
            case 34:
                return $this->getPostmortality();
                break;
            case 35:
                return $this->getFcr();
                break;
            case 36:
                return $this->getComments();
                break;
            case 37:
                return $this->getEntered();
                break;
            case 38:
                return $this->getDateentered();
                break;
            case 39:
                return $this->getModified();
                break;
            case 40:
                return $this->getDatemodified();
                break;
            case 41:
                return $this->getExpert();
                break;
            case 42:
                return $this->getDatechecked();
                break;
            case 43:
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
        if (isset($alreadyDumpedObjects['Broodstock'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Broodstock'][serialize($this->getPrimaryKey())] = true;
        $keys = BroodstockPeer::getFieldNames($keyType);
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
            $keys[9] => $this->getBreedingi(),
            $keys[10] => $this->getFecundity(),
            $keys[11] => $this->getCountriesandregions(),
            $keys[12] => $this->getBreedingii(),
            $keys[13] => $this->getBreedingiii(),
            $keys[14] => $this->getCulturesystem(),
            $keys[15] => $this->getMainwatersource(),
            $keys[16] => $this->getSupplwatersource(),
            $keys[17] => $this->getTempmin(),
            $keys[18] => $this->getTempmax(),
            $keys[19] => $this->getSpawningtempmin(),
            $keys[20] => $this->getSpawningtempmax(),
            $keys[21] => $this->getSalinmin(),
            $keys[22] => $this->getSalinmax(),
            $keys[23] => $this->getPhmin(),
            $keys[24] => $this->getPhmax(),
            $keys[25] => $this->getOxygenmin(),
            $keys[26] => $this->getOxygenmax(),
            $keys[27] => $this->getHardnessmin(),
            $keys[28] => $this->getHardnessmax(),
            $keys[29] => $this->getBroodstockstockingrate(),
            $keys[30] => $this->getBroodstockfemale(),
            $keys[31] => $this->getBroodstockmale(),
            $keys[32] => $this->getSexratio(),
            $keys[33] => $this->getEggproduction(),
            $keys[34] => $this->getPostmortality(),
            $keys[35] => $this->getFcr(),
            $keys[36] => $this->getComments(),
            $keys[37] => $this->getEntered(),
            $keys[38] => $this->getDateentered(),
            $keys[39] => $this->getModified(),
            $keys[40] => $this->getDatemodified(),
            $keys[41] => $this->getExpert(),
            $keys[42] => $this->getDatechecked(),
            $keys[43] => $this->getTs(),
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
        $pos = BroodstockPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setBreedingi($value);
                break;
            case 10:
                $this->setFecundity($value);
                break;
            case 11:
                $this->setCountriesandregions($value);
                break;
            case 12:
                $this->setBreedingii($value);
                break;
            case 13:
                $this->setBreedingiii($value);
                break;
            case 14:
                $this->setCulturesystem($value);
                break;
            case 15:
                $this->setMainwatersource($value);
                break;
            case 16:
                $this->setSupplwatersource($value);
                break;
            case 17:
                $this->setTempmin($value);
                break;
            case 18:
                $this->setTempmax($value);
                break;
            case 19:
                $this->setSpawningtempmin($value);
                break;
            case 20:
                $this->setSpawningtempmax($value);
                break;
            case 21:
                $this->setSalinmin($value);
                break;
            case 22:
                $this->setSalinmax($value);
                break;
            case 23:
                $this->setPhmin($value);
                break;
            case 24:
                $this->setPhmax($value);
                break;
            case 25:
                $this->setOxygenmin($value);
                break;
            case 26:
                $this->setOxygenmax($value);
                break;
            case 27:
                $this->setHardnessmin($value);
                break;
            case 28:
                $this->setHardnessmax($value);
                break;
            case 29:
                $this->setBroodstockstockingrate($value);
                break;
            case 30:
                $this->setBroodstockfemale($value);
                break;
            case 31:
                $this->setBroodstockmale($value);
                break;
            case 32:
                $this->setSexratio($value);
                break;
            case 33:
                $this->setEggproduction($value);
                break;
            case 34:
                $this->setPostmortality($value);
                break;
            case 35:
                $this->setFcr($value);
                break;
            case 36:
                $this->setComments($value);
                break;
            case 37:
                $this->setEntered($value);
                break;
            case 38:
                $this->setDateentered($value);
                break;
            case 39:
                $this->setModified($value);
                break;
            case 40:
                $this->setDatemodified($value);
                break;
            case 41:
                $this->setExpert($value);
                break;
            case 42:
                $this->setDatechecked($value);
                break;
            case 43:
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
        $keys = BroodstockPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSpeccode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setStockcode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSpecies($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCommonname($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMainref($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCCode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLocality($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDataref($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setBreedingi($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setFecundity($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setCountriesandregions($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setBreedingii($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setBreedingiii($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setCulturesystem($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setMainwatersource($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setSupplwatersource($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setTempmin($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setTempmax($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setSpawningtempmin($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setSpawningtempmax($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setSalinmin($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setSalinmax($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setPhmin($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setPhmax($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setOxygenmin($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setOxygenmax($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setHardnessmin($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setHardnessmax($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setBroodstockstockingrate($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setBroodstockfemale($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setBroodstockmale($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setSexratio($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setEggproduction($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setPostmortality($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setFcr($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setComments($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setEntered($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setDateentered($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setModified($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setDatemodified($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setExpert($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setDatechecked($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setTs($arr[$keys[43]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(BroodstockPeer::DATABASE_NAME);

        if ($this->isColumnModified(BroodstockPeer::AUTOCTR)) $criteria->add(BroodstockPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(BroodstockPeer::SPECCODE)) $criteria->add(BroodstockPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(BroodstockPeer::STOCKCODE)) $criteria->add(BroodstockPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(BroodstockPeer::SPECIES)) $criteria->add(BroodstockPeer::SPECIES, $this->species);
        if ($this->isColumnModified(BroodstockPeer::COMMONNAME)) $criteria->add(BroodstockPeer::COMMONNAME, $this->commonname);
        if ($this->isColumnModified(BroodstockPeer::MAINREF)) $criteria->add(BroodstockPeer::MAINREF, $this->mainref);
        if ($this->isColumnModified(BroodstockPeer::C_CODE)) $criteria->add(BroodstockPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(BroodstockPeer::LOCALITY)) $criteria->add(BroodstockPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(BroodstockPeer::DATAREF)) $criteria->add(BroodstockPeer::DATAREF, $this->dataref);
        if ($this->isColumnModified(BroodstockPeer::BREEDINGI)) $criteria->add(BroodstockPeer::BREEDINGI, $this->breedingi);
        if ($this->isColumnModified(BroodstockPeer::FECUNDITY)) $criteria->add(BroodstockPeer::FECUNDITY, $this->fecundity);
        if ($this->isColumnModified(BroodstockPeer::COUNTRIESANDREGIONS)) $criteria->add(BroodstockPeer::COUNTRIESANDREGIONS, $this->countriesandregions);
        if ($this->isColumnModified(BroodstockPeer::BREEDINGII)) $criteria->add(BroodstockPeer::BREEDINGII, $this->breedingii);
        if ($this->isColumnModified(BroodstockPeer::BREEDINGIII)) $criteria->add(BroodstockPeer::BREEDINGIII, $this->breedingiii);
        if ($this->isColumnModified(BroodstockPeer::CULTURESYSTEM)) $criteria->add(BroodstockPeer::CULTURESYSTEM, $this->culturesystem);
        if ($this->isColumnModified(BroodstockPeer::MAINWATERSOURCE)) $criteria->add(BroodstockPeer::MAINWATERSOURCE, $this->mainwatersource);
        if ($this->isColumnModified(BroodstockPeer::SUPPLWATERSOURCE)) $criteria->add(BroodstockPeer::SUPPLWATERSOURCE, $this->supplwatersource);
        if ($this->isColumnModified(BroodstockPeer::TEMPMIN)) $criteria->add(BroodstockPeer::TEMPMIN, $this->tempmin);
        if ($this->isColumnModified(BroodstockPeer::TEMPMAX)) $criteria->add(BroodstockPeer::TEMPMAX, $this->tempmax);
        if ($this->isColumnModified(BroodstockPeer::SPAWNINGTEMPMIN)) $criteria->add(BroodstockPeer::SPAWNINGTEMPMIN, $this->spawningtempmin);
        if ($this->isColumnModified(BroodstockPeer::SPAWNINGTEMPMAX)) $criteria->add(BroodstockPeer::SPAWNINGTEMPMAX, $this->spawningtempmax);
        if ($this->isColumnModified(BroodstockPeer::SALINMIN)) $criteria->add(BroodstockPeer::SALINMIN, $this->salinmin);
        if ($this->isColumnModified(BroodstockPeer::SALINMAX)) $criteria->add(BroodstockPeer::SALINMAX, $this->salinmax);
        if ($this->isColumnModified(BroodstockPeer::PHMIN)) $criteria->add(BroodstockPeer::PHMIN, $this->phmin);
        if ($this->isColumnModified(BroodstockPeer::PHMAX)) $criteria->add(BroodstockPeer::PHMAX, $this->phmax);
        if ($this->isColumnModified(BroodstockPeer::OXYGENMIN)) $criteria->add(BroodstockPeer::OXYGENMIN, $this->oxygenmin);
        if ($this->isColumnModified(BroodstockPeer::OXYGENMAX)) $criteria->add(BroodstockPeer::OXYGENMAX, $this->oxygenmax);
        if ($this->isColumnModified(BroodstockPeer::HARDNESSMIN)) $criteria->add(BroodstockPeer::HARDNESSMIN, $this->hardnessmin);
        if ($this->isColumnModified(BroodstockPeer::HARDNESSMAX)) $criteria->add(BroodstockPeer::HARDNESSMAX, $this->hardnessmax);
        if ($this->isColumnModified(BroodstockPeer::BROODSTOCKSTOCKINGRATE)) $criteria->add(BroodstockPeer::BROODSTOCKSTOCKINGRATE, $this->broodstockstockingrate);
        if ($this->isColumnModified(BroodstockPeer::BROODSTOCKFEMALE)) $criteria->add(BroodstockPeer::BROODSTOCKFEMALE, $this->broodstockfemale);
        if ($this->isColumnModified(BroodstockPeer::BROODSTOCKMALE)) $criteria->add(BroodstockPeer::BROODSTOCKMALE, $this->broodstockmale);
        if ($this->isColumnModified(BroodstockPeer::SEXRATIO)) $criteria->add(BroodstockPeer::SEXRATIO, $this->sexratio);
        if ($this->isColumnModified(BroodstockPeer::EGGPRODUCTION)) $criteria->add(BroodstockPeer::EGGPRODUCTION, $this->eggproduction);
        if ($this->isColumnModified(BroodstockPeer::POSTMORTALITY)) $criteria->add(BroodstockPeer::POSTMORTALITY, $this->postmortality);
        if ($this->isColumnModified(BroodstockPeer::FCR)) $criteria->add(BroodstockPeer::FCR, $this->fcr);
        if ($this->isColumnModified(BroodstockPeer::COMMENTS)) $criteria->add(BroodstockPeer::COMMENTS, $this->comments);
        if ($this->isColumnModified(BroodstockPeer::ENTERED)) $criteria->add(BroodstockPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(BroodstockPeer::DATEENTERED)) $criteria->add(BroodstockPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(BroodstockPeer::MODIFIED)) $criteria->add(BroodstockPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(BroodstockPeer::DATEMODIFIED)) $criteria->add(BroodstockPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(BroodstockPeer::EXPERT)) $criteria->add(BroodstockPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(BroodstockPeer::DATECHECKED)) $criteria->add(BroodstockPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(BroodstockPeer::TS)) $criteria->add(BroodstockPeer::TS, $this->ts);

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
        $criteria = new Criteria(BroodstockPeer::DATABASE_NAME);
        $criteria->add(BroodstockPeer::AUTOCTR, $this->autoctr);
        $criteria->add(BroodstockPeer::STOCKCODE, $this->stockcode);
        $criteria->add(BroodstockPeer::MAINREF, $this->mainref);

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
     * @param object $copyObj An object of Broodstock (or compatible) type.
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
        $copyObj->setBreedingi($this->getBreedingi());
        $copyObj->setFecundity($this->getFecundity());
        $copyObj->setCountriesandregions($this->getCountriesandregions());
        $copyObj->setBreedingii($this->getBreedingii());
        $copyObj->setBreedingiii($this->getBreedingiii());
        $copyObj->setCulturesystem($this->getCulturesystem());
        $copyObj->setMainwatersource($this->getMainwatersource());
        $copyObj->setSupplwatersource($this->getSupplwatersource());
        $copyObj->setTempmin($this->getTempmin());
        $copyObj->setTempmax($this->getTempmax());
        $copyObj->setSpawningtempmin($this->getSpawningtempmin());
        $copyObj->setSpawningtempmax($this->getSpawningtempmax());
        $copyObj->setSalinmin($this->getSalinmin());
        $copyObj->setSalinmax($this->getSalinmax());
        $copyObj->setPhmin($this->getPhmin());
        $copyObj->setPhmax($this->getPhmax());
        $copyObj->setOxygenmin($this->getOxygenmin());
        $copyObj->setOxygenmax($this->getOxygenmax());
        $copyObj->setHardnessmin($this->getHardnessmin());
        $copyObj->setHardnessmax($this->getHardnessmax());
        $copyObj->setBroodstockstockingrate($this->getBroodstockstockingrate());
        $copyObj->setBroodstockfemale($this->getBroodstockfemale());
        $copyObj->setBroodstockmale($this->getBroodstockmale());
        $copyObj->setSexratio($this->getSexratio());
        $copyObj->setEggproduction($this->getEggproduction());
        $copyObj->setPostmortality($this->getPostmortality());
        $copyObj->setFcr($this->getFcr());
        $copyObj->setComments($this->getComments());
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
     * @return Broodstock Clone of current object.
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
     * @return BroodstockPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new BroodstockPeer();
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
        $this->breedingi = null;
        $this->fecundity = null;
        $this->countriesandregions = null;
        $this->breedingii = null;
        $this->breedingiii = null;
        $this->culturesystem = null;
        $this->mainwatersource = null;
        $this->supplwatersource = null;
        $this->tempmin = null;
        $this->tempmax = null;
        $this->spawningtempmin = null;
        $this->spawningtempmax = null;
        $this->salinmin = null;
        $this->salinmax = null;
        $this->phmin = null;
        $this->phmax = null;
        $this->oxygenmin = null;
        $this->oxygenmax = null;
        $this->hardnessmin = null;
        $this->hardnessmax = null;
        $this->broodstockstockingrate = null;
        $this->broodstockfemale = null;
        $this->broodstockmale = null;
        $this->sexratio = null;
        $this->eggproduction = null;
        $this->postmortality = null;
        $this->fcr = null;
        $this->comments = null;
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
        return (string) $this->exportTo(BroodstockPeer::DEFAULT_STRING_FORMAT);
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
