<?php


/**
 * Base class that represents a row from the 'diseases' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseDiseases extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'DiseasesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        DiseasesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

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
     * The value for the diseasesrefno field.
     * @var        int
     */
    protected $diseasesrefno;

    /**
     * The value for the discode field.
     * @var        int
     */
    protected $discode;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the year field.
     * @var        string
     */
    protected $year;

    /**
     * The value for the locality field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $locality;

    /**
     * The value for the eggs field.
     * @var        int
     */
    protected $eggs;

    /**
     * The value for the larvae field.
     * @var        int
     */
    protected $larvae;

    /**
     * The value for the fry field.
     * @var        int
     */
    protected $fry;

    /**
     * The value for the juveniles field.
     * @var        int
     */
    protected $juveniles;

    /**
     * The value for the females field.
     * @var        int
     */
    protected $females;

    /**
     * The value for the males field.
     * @var        int
     */
    protected $males;

    /**
     * The value for the wild field.
     * @var        int
     */
    protected $wild;

    /**
     * The value for the culture field.
     * @var        int
     */
    protected $culture;

    /**
     * The value for the prevalence field.
     * @var        string
     */
    protected $prevalence;

    /**
     * The value for the intensity field.
     * @var        string
     */
    protected $intensity;

    /**
     * The value for the mortality field.
     * @var        string
     */
    protected $mortality;

    /**
     * The value for the typeofculture field.
     * @var        string
     */
    protected $typeofculture;

    /**
     * The value for the watertemp field.
     * @var        int
     */
    protected $watertemp;

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
     * The value for the remark field.
     * @var        string
     */
    protected $remark;

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
        $this->locality = '';
    }

    /**
     * Initializes internal state of BaseDiseases object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [diseasesrefno] column value.
     *
     * @return int
     */
    public function getDiseasesrefno()
    {

        return $this->diseasesrefno;
    }

    /**
     * Get the [discode] column value.
     *
     * @return int
     */
    public function getDiscode()
    {

        return $this->discode;
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
     * Get the [year] column value.
     *
     * @return string
     */
    public function getYear()
    {

        return $this->year;
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
     * Get the [eggs] column value.
     *
     * @return int
     */
    public function getEggs()
    {

        return $this->eggs;
    }

    /**
     * Get the [larvae] column value.
     *
     * @return int
     */
    public function getLarvae()
    {

        return $this->larvae;
    }

    /**
     * Get the [fry] column value.
     *
     * @return int
     */
    public function getFry()
    {

        return $this->fry;
    }

    /**
     * Get the [juveniles] column value.
     *
     * @return int
     */
    public function getJuveniles()
    {

        return $this->juveniles;
    }

    /**
     * Get the [females] column value.
     *
     * @return int
     */
    public function getFemales()
    {

        return $this->females;
    }

    /**
     * Get the [males] column value.
     *
     * @return int
     */
    public function getMales()
    {

        return $this->males;
    }

    /**
     * Get the [wild] column value.
     *
     * @return int
     */
    public function getWild()
    {

        return $this->wild;
    }

    /**
     * Get the [culture] column value.
     *
     * @return int
     */
    public function getCulture()
    {

        return $this->culture;
    }

    /**
     * Get the [prevalence] column value.
     *
     * @return string
     */
    public function getPrevalence()
    {

        return $this->prevalence;
    }

    /**
     * Get the [intensity] column value.
     *
     * @return string
     */
    public function getIntensity()
    {

        return $this->intensity;
    }

    /**
     * Get the [mortality] column value.
     *
     * @return string
     */
    public function getMortality()
    {

        return $this->mortality;
    }

    /**
     * Get the [typeofculture] column value.
     *
     * @return string
     */
    public function getTypeofculture()
    {

        return $this->typeofculture;
    }

    /**
     * Get the [watertemp] column value.
     *
     * @return int
     */
    public function getWatertemp()
    {

        return $this->watertemp;
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
     * Get the [remark] column value.
     *
     * @return string
     */
    public function getRemark()
    {

        return $this->remark;
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
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = DiseasesPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = DiseasesPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [diseasesrefno] column.
     *
     * @param  int $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setDiseasesrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->diseasesrefno !== $v) {
            $this->diseasesrefno = $v;
            $this->modifiedColumns[] = DiseasesPeer::DISEASESREFNO;
        }


        return $this;
    } // setDiseasesrefno()

    /**
     * Set the value of [discode] column.
     *
     * @param  int $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setDiscode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->discode !== $v) {
            $this->discode = $v;
            $this->modifiedColumns[] = DiseasesPeer::DISCODE;
        }


        return $this;
    } // setDiscode()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = DiseasesPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [year] column.
     *
     * @param  string $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setYear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->year !== $v) {
            $this->year = $v;
            $this->modifiedColumns[] = DiseasesPeer::YEAR;
        }


        return $this;
    } // setYear()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = DiseasesPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [eggs] column.
     *
     * @param  int $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setEggs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eggs !== $v) {
            $this->eggs = $v;
            $this->modifiedColumns[] = DiseasesPeer::EGGS;
        }


        return $this;
    } // setEggs()

    /**
     * Set the value of [larvae] column.
     *
     * @param  int $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setLarvae($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->larvae !== $v) {
            $this->larvae = $v;
            $this->modifiedColumns[] = DiseasesPeer::LARVAE;
        }


        return $this;
    } // setLarvae()

    /**
     * Set the value of [fry] column.
     *
     * @param  int $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setFry($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fry !== $v) {
            $this->fry = $v;
            $this->modifiedColumns[] = DiseasesPeer::FRY;
        }


        return $this;
    } // setFry()

    /**
     * Set the value of [juveniles] column.
     *
     * @param  int $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setJuveniles($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->juveniles !== $v) {
            $this->juveniles = $v;
            $this->modifiedColumns[] = DiseasesPeer::JUVENILES;
        }


        return $this;
    } // setJuveniles()

    /**
     * Set the value of [females] column.
     *
     * @param  int $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setFemales($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->females !== $v) {
            $this->females = $v;
            $this->modifiedColumns[] = DiseasesPeer::FEMALES;
        }


        return $this;
    } // setFemales()

    /**
     * Set the value of [males] column.
     *
     * @param  int $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setMales($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->males !== $v) {
            $this->males = $v;
            $this->modifiedColumns[] = DiseasesPeer::MALES;
        }


        return $this;
    } // setMales()

    /**
     * Set the value of [wild] column.
     *
     * @param  int $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setWild($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->wild !== $v) {
            $this->wild = $v;
            $this->modifiedColumns[] = DiseasesPeer::WILD;
        }


        return $this;
    } // setWild()

    /**
     * Set the value of [culture] column.
     *
     * @param  int $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setCulture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->culture !== $v) {
            $this->culture = $v;
            $this->modifiedColumns[] = DiseasesPeer::CULTURE;
        }


        return $this;
    } // setCulture()

    /**
     * Set the value of [prevalence] column.
     *
     * @param  string $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setPrevalence($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prevalence !== $v) {
            $this->prevalence = $v;
            $this->modifiedColumns[] = DiseasesPeer::PREVALENCE;
        }


        return $this;
    } // setPrevalence()

    /**
     * Set the value of [intensity] column.
     *
     * @param  string $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setIntensity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intensity !== $v) {
            $this->intensity = $v;
            $this->modifiedColumns[] = DiseasesPeer::INTENSITY;
        }


        return $this;
    } // setIntensity()

    /**
     * Set the value of [mortality] column.
     *
     * @param  string $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setMortality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mortality !== $v) {
            $this->mortality = $v;
            $this->modifiedColumns[] = DiseasesPeer::MORTALITY;
        }


        return $this;
    } // setMortality()

    /**
     * Set the value of [typeofculture] column.
     *
     * @param  string $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setTypeofculture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->typeofculture !== $v) {
            $this->typeofculture = $v;
            $this->modifiedColumns[] = DiseasesPeer::TYPEOFCULTURE;
        }


        return $this;
    } // setTypeofculture()

    /**
     * Set the value of [watertemp] column.
     *
     * @param  int $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setWatertemp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->watertemp !== $v) {
            $this->watertemp = $v;
            $this->modifiedColumns[] = DiseasesPeer::WATERTEMP;
        }


        return $this;
    } // setWatertemp()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = DiseasesPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Diseases The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = DiseasesPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = DiseasesPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Diseases The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = DiseasesPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = DiseasesPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Diseases The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = DiseasesPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [remark] column.
     *
     * @param  string $v new value
     * @return Diseases The current object (for fluent API support)
     */
    public function setRemark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remark !== $v) {
            $this->remark = $v;
            $this->modifiedColumns[] = DiseasesPeer::REMARK;
        }


        return $this;
    } // setRemark()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Diseases The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = DiseasesPeer::TS;
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
            if ($this->locality !== '') {
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

            $this->stockcode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->speccode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->diseasesrefno = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->discode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->c_code = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->year = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->locality = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->eggs = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->larvae = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->fry = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->juveniles = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->females = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->males = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->wild = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->culture = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->prevalence = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->intensity = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->mortality = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->typeofculture = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->watertemp = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->entered = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->dateentered = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->modified = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->datemodified = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->expert = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->datechecked = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->remark = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->ts = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 28; // 28 = DiseasesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Diseases object", $e);
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
            $con = Propel::getConnection(DiseasesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = DiseasesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(DiseasesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = DiseasesQuery::create()
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
            $con = Propel::getConnection(DiseasesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                DiseasesPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(DiseasesPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(DiseasesPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(DiseasesPeer::DISEASESREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`DiseasesRefNo`';
        }
        if ($this->isColumnModified(DiseasesPeer::DISCODE)) {
            $modifiedColumns[':p' . $index++]  = '`DisCode`';
        }
        if ($this->isColumnModified(DiseasesPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(DiseasesPeer::YEAR)) {
            $modifiedColumns[':p' . $index++]  = '`Year`';
        }
        if ($this->isColumnModified(DiseasesPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(DiseasesPeer::EGGS)) {
            $modifiedColumns[':p' . $index++]  = '`Eggs`';
        }
        if ($this->isColumnModified(DiseasesPeer::LARVAE)) {
            $modifiedColumns[':p' . $index++]  = '`Larvae`';
        }
        if ($this->isColumnModified(DiseasesPeer::FRY)) {
            $modifiedColumns[':p' . $index++]  = '`Fry`';
        }
        if ($this->isColumnModified(DiseasesPeer::JUVENILES)) {
            $modifiedColumns[':p' . $index++]  = '`Juveniles`';
        }
        if ($this->isColumnModified(DiseasesPeer::FEMALES)) {
            $modifiedColumns[':p' . $index++]  = '`Females`';
        }
        if ($this->isColumnModified(DiseasesPeer::MALES)) {
            $modifiedColumns[':p' . $index++]  = '`Males`';
        }
        if ($this->isColumnModified(DiseasesPeer::WILD)) {
            $modifiedColumns[':p' . $index++]  = '`Wild`';
        }
        if ($this->isColumnModified(DiseasesPeer::CULTURE)) {
            $modifiedColumns[':p' . $index++]  = '`Culture`';
        }
        if ($this->isColumnModified(DiseasesPeer::PREVALENCE)) {
            $modifiedColumns[':p' . $index++]  = '`Prevalence`';
        }
        if ($this->isColumnModified(DiseasesPeer::INTENSITY)) {
            $modifiedColumns[':p' . $index++]  = '`Intensity`';
        }
        if ($this->isColumnModified(DiseasesPeer::MORTALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Mortality`';
        }
        if ($this->isColumnModified(DiseasesPeer::TYPEOFCULTURE)) {
            $modifiedColumns[':p' . $index++]  = '`TypeofCulture`';
        }
        if ($this->isColumnModified(DiseasesPeer::WATERTEMP)) {
            $modifiedColumns[':p' . $index++]  = '`WaterTemp`';
        }
        if ($this->isColumnModified(DiseasesPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(DiseasesPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(DiseasesPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(DiseasesPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(DiseasesPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(DiseasesPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(DiseasesPeer::REMARK)) {
            $modifiedColumns[':p' . $index++]  = '`Remark`';
        }
        if ($this->isColumnModified(DiseasesPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `diseases` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`DiseasesRefNo`':
                        $stmt->bindValue($identifier, $this->diseasesrefno, PDO::PARAM_INT);
                        break;
                    case '`DisCode`':
                        $stmt->bindValue($identifier, $this->discode, PDO::PARAM_INT);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`Year`':
                        $stmt->bindValue($identifier, $this->year, PDO::PARAM_STR);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`Eggs`':
                        $stmt->bindValue($identifier, $this->eggs, PDO::PARAM_INT);
                        break;
                    case '`Larvae`':
                        $stmt->bindValue($identifier, $this->larvae, PDO::PARAM_INT);
                        break;
                    case '`Fry`':
                        $stmt->bindValue($identifier, $this->fry, PDO::PARAM_INT);
                        break;
                    case '`Juveniles`':
                        $stmt->bindValue($identifier, $this->juveniles, PDO::PARAM_INT);
                        break;
                    case '`Females`':
                        $stmt->bindValue($identifier, $this->females, PDO::PARAM_INT);
                        break;
                    case '`Males`':
                        $stmt->bindValue($identifier, $this->males, PDO::PARAM_INT);
                        break;
                    case '`Wild`':
                        $stmt->bindValue($identifier, $this->wild, PDO::PARAM_INT);
                        break;
                    case '`Culture`':
                        $stmt->bindValue($identifier, $this->culture, PDO::PARAM_INT);
                        break;
                    case '`Prevalence`':
                        $stmt->bindValue($identifier, $this->prevalence, PDO::PARAM_STR);
                        break;
                    case '`Intensity`':
                        $stmt->bindValue($identifier, $this->intensity, PDO::PARAM_STR);
                        break;
                    case '`Mortality`':
                        $stmt->bindValue($identifier, $this->mortality, PDO::PARAM_STR);
                        break;
                    case '`TypeofCulture`':
                        $stmt->bindValue($identifier, $this->typeofculture, PDO::PARAM_STR);
                        break;
                    case '`WaterTemp`':
                        $stmt->bindValue($identifier, $this->watertemp, PDO::PARAM_INT);
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
                    case '`Remark`':
                        $stmt->bindValue($identifier, $this->remark, PDO::PARAM_STR);
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


            if (($retval = DiseasesPeer::doValidate($this, $columns)) !== true) {
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
        $pos = DiseasesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getStockcode();
                break;
            case 1:
                return $this->getSpeccode();
                break;
            case 2:
                return $this->getDiseasesrefno();
                break;
            case 3:
                return $this->getDiscode();
                break;
            case 4:
                return $this->getCCode();
                break;
            case 5:
                return $this->getYear();
                break;
            case 6:
                return $this->getLocality();
                break;
            case 7:
                return $this->getEggs();
                break;
            case 8:
                return $this->getLarvae();
                break;
            case 9:
                return $this->getFry();
                break;
            case 10:
                return $this->getJuveniles();
                break;
            case 11:
                return $this->getFemales();
                break;
            case 12:
                return $this->getMales();
                break;
            case 13:
                return $this->getWild();
                break;
            case 14:
                return $this->getCulture();
                break;
            case 15:
                return $this->getPrevalence();
                break;
            case 16:
                return $this->getIntensity();
                break;
            case 17:
                return $this->getMortality();
                break;
            case 18:
                return $this->getTypeofculture();
                break;
            case 19:
                return $this->getWatertemp();
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
                return $this->getRemark();
                break;
            case 27:
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
        if (isset($alreadyDumpedObjects['Diseases'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Diseases'][serialize($this->getPrimaryKey())] = true;
        $keys = DiseasesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getStockcode(),
            $keys[1] => $this->getSpeccode(),
            $keys[2] => $this->getDiseasesrefno(),
            $keys[3] => $this->getDiscode(),
            $keys[4] => $this->getCCode(),
            $keys[5] => $this->getYear(),
            $keys[6] => $this->getLocality(),
            $keys[7] => $this->getEggs(),
            $keys[8] => $this->getLarvae(),
            $keys[9] => $this->getFry(),
            $keys[10] => $this->getJuveniles(),
            $keys[11] => $this->getFemales(),
            $keys[12] => $this->getMales(),
            $keys[13] => $this->getWild(),
            $keys[14] => $this->getCulture(),
            $keys[15] => $this->getPrevalence(),
            $keys[16] => $this->getIntensity(),
            $keys[17] => $this->getMortality(),
            $keys[18] => $this->getTypeofculture(),
            $keys[19] => $this->getWatertemp(),
            $keys[20] => $this->getEntered(),
            $keys[21] => $this->getDateentered(),
            $keys[22] => $this->getModified(),
            $keys[23] => $this->getDatemodified(),
            $keys[24] => $this->getExpert(),
            $keys[25] => $this->getDatechecked(),
            $keys[26] => $this->getRemark(),
            $keys[27] => $this->getTs(),
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
        $pos = DiseasesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setStockcode($value);
                break;
            case 1:
                $this->setSpeccode($value);
                break;
            case 2:
                $this->setDiseasesrefno($value);
                break;
            case 3:
                $this->setDiscode($value);
                break;
            case 4:
                $this->setCCode($value);
                break;
            case 5:
                $this->setYear($value);
                break;
            case 6:
                $this->setLocality($value);
                break;
            case 7:
                $this->setEggs($value);
                break;
            case 8:
                $this->setLarvae($value);
                break;
            case 9:
                $this->setFry($value);
                break;
            case 10:
                $this->setJuveniles($value);
                break;
            case 11:
                $this->setFemales($value);
                break;
            case 12:
                $this->setMales($value);
                break;
            case 13:
                $this->setWild($value);
                break;
            case 14:
                $this->setCulture($value);
                break;
            case 15:
                $this->setPrevalence($value);
                break;
            case 16:
                $this->setIntensity($value);
                break;
            case 17:
                $this->setMortality($value);
                break;
            case 18:
                $this->setTypeofculture($value);
                break;
            case 19:
                $this->setWatertemp($value);
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
                $this->setRemark($value);
                break;
            case 27:
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
        $keys = DiseasesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setStockcode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSpeccode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDiseasesrefno($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDiscode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCCode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setYear($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLocality($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setEggs($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLarvae($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setFry($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setJuveniles($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setFemales($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setMales($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setWild($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setCulture($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setPrevalence($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setIntensity($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setMortality($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setTypeofculture($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setWatertemp($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setEntered($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDateentered($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setModified($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDatemodified($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setExpert($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDatechecked($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setRemark($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setTs($arr[$keys[27]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(DiseasesPeer::DATABASE_NAME);

        if ($this->isColumnModified(DiseasesPeer::STOCKCODE)) $criteria->add(DiseasesPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(DiseasesPeer::SPECCODE)) $criteria->add(DiseasesPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(DiseasesPeer::DISEASESREFNO)) $criteria->add(DiseasesPeer::DISEASESREFNO, $this->diseasesrefno);
        if ($this->isColumnModified(DiseasesPeer::DISCODE)) $criteria->add(DiseasesPeer::DISCODE, $this->discode);
        if ($this->isColumnModified(DiseasesPeer::C_CODE)) $criteria->add(DiseasesPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(DiseasesPeer::YEAR)) $criteria->add(DiseasesPeer::YEAR, $this->year);
        if ($this->isColumnModified(DiseasesPeer::LOCALITY)) $criteria->add(DiseasesPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(DiseasesPeer::EGGS)) $criteria->add(DiseasesPeer::EGGS, $this->eggs);
        if ($this->isColumnModified(DiseasesPeer::LARVAE)) $criteria->add(DiseasesPeer::LARVAE, $this->larvae);
        if ($this->isColumnModified(DiseasesPeer::FRY)) $criteria->add(DiseasesPeer::FRY, $this->fry);
        if ($this->isColumnModified(DiseasesPeer::JUVENILES)) $criteria->add(DiseasesPeer::JUVENILES, $this->juveniles);
        if ($this->isColumnModified(DiseasesPeer::FEMALES)) $criteria->add(DiseasesPeer::FEMALES, $this->females);
        if ($this->isColumnModified(DiseasesPeer::MALES)) $criteria->add(DiseasesPeer::MALES, $this->males);
        if ($this->isColumnModified(DiseasesPeer::WILD)) $criteria->add(DiseasesPeer::WILD, $this->wild);
        if ($this->isColumnModified(DiseasesPeer::CULTURE)) $criteria->add(DiseasesPeer::CULTURE, $this->culture);
        if ($this->isColumnModified(DiseasesPeer::PREVALENCE)) $criteria->add(DiseasesPeer::PREVALENCE, $this->prevalence);
        if ($this->isColumnModified(DiseasesPeer::INTENSITY)) $criteria->add(DiseasesPeer::INTENSITY, $this->intensity);
        if ($this->isColumnModified(DiseasesPeer::MORTALITY)) $criteria->add(DiseasesPeer::MORTALITY, $this->mortality);
        if ($this->isColumnModified(DiseasesPeer::TYPEOFCULTURE)) $criteria->add(DiseasesPeer::TYPEOFCULTURE, $this->typeofculture);
        if ($this->isColumnModified(DiseasesPeer::WATERTEMP)) $criteria->add(DiseasesPeer::WATERTEMP, $this->watertemp);
        if ($this->isColumnModified(DiseasesPeer::ENTERED)) $criteria->add(DiseasesPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(DiseasesPeer::DATEENTERED)) $criteria->add(DiseasesPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(DiseasesPeer::MODIFIED)) $criteria->add(DiseasesPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(DiseasesPeer::DATEMODIFIED)) $criteria->add(DiseasesPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(DiseasesPeer::EXPERT)) $criteria->add(DiseasesPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(DiseasesPeer::DATECHECKED)) $criteria->add(DiseasesPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(DiseasesPeer::REMARK)) $criteria->add(DiseasesPeer::REMARK, $this->remark);
        if ($this->isColumnModified(DiseasesPeer::TS)) $criteria->add(DiseasesPeer::TS, $this->ts);

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
        $criteria = new Criteria(DiseasesPeer::DATABASE_NAME);
        $criteria->add(DiseasesPeer::STOCKCODE, $this->stockcode);
        $criteria->add(DiseasesPeer::DISEASESREFNO, $this->diseasesrefno);
        $criteria->add(DiseasesPeer::DISCODE, $this->discode);
        $criteria->add(DiseasesPeer::LOCALITY, $this->locality);

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
        $pks[1] = $this->getDiseasesrefno();
        $pks[2] = $this->getDiscode();
        $pks[3] = $this->getLocality();

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
        $this->setDiseasesrefno($keys[1]);
        $this->setDiscode($keys[2]);
        $this->setLocality($keys[3]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getStockcode()) && (null === $this->getDiseasesrefno()) && (null === $this->getDiscode()) && (null === $this->getLocality());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Diseases (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setDiseasesrefno($this->getDiseasesrefno());
        $copyObj->setDiscode($this->getDiscode());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setYear($this->getYear());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setEggs($this->getEggs());
        $copyObj->setLarvae($this->getLarvae());
        $copyObj->setFry($this->getFry());
        $copyObj->setJuveniles($this->getJuveniles());
        $copyObj->setFemales($this->getFemales());
        $copyObj->setMales($this->getMales());
        $copyObj->setWild($this->getWild());
        $copyObj->setCulture($this->getCulture());
        $copyObj->setPrevalence($this->getPrevalence());
        $copyObj->setIntensity($this->getIntensity());
        $copyObj->setMortality($this->getMortality());
        $copyObj->setTypeofculture($this->getTypeofculture());
        $copyObj->setWatertemp($this->getWatertemp());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setRemark($this->getRemark());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
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
     * @return Diseases Clone of current object.
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
     * @return DiseasesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new DiseasesPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->stockcode = null;
        $this->speccode = null;
        $this->diseasesrefno = null;
        $this->discode = null;
        $this->c_code = null;
        $this->year = null;
        $this->locality = null;
        $this->eggs = null;
        $this->larvae = null;
        $this->fry = null;
        $this->juveniles = null;
        $this->females = null;
        $this->males = null;
        $this->wild = null;
        $this->culture = null;
        $this->prevalence = null;
        $this->intensity = null;
        $this->mortality = null;
        $this->typeofculture = null;
        $this->watertemp = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->remark = null;
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
        return (string) $this->exportTo(DiseasesPeer::DEFAULT_STRING_FORMAT);
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
