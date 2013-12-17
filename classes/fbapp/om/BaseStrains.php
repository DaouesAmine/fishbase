<?php


/**
 * Base class that represents a row from the 'strains' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseStrains extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'StrainsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        StrainsPeer
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
     * The value for the strainsrefno field.
     * @var        int
     */
    protected $strainsrefno;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the straincode field.
     * @var        string
     */
    protected $straincode;

    /**
     * The value for the trait field.
     * @var        string
     */
    protected $trait;

    /**
     * The value for the pic field.
     * @var        string
     */
    protected $pic;

    /**
     * The value for the breedingstrategy field.
     * @var        string
     */
    protected $breedingstrategy;

    /**
     * The value for the viability field.
     * @var        int
     */
    protected $viability;

    /**
     * The value for the sizeoffounding field.
     * @var        int
     */
    protected $sizeoffounding;

    /**
     * The value for the sizeoffoundingf field.
     * @var        int
     */
    protected $sizeoffoundingf;

    /**
     * The value for the sizeoffoundingm field.
     * @var        int
     */
    protected $sizeoffoundingm;

    /**
     * The value for the numberofbroodstock field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $numberofbroodstock;

    /**
     * The value for the breedingyear field.
     * @var        int
     */
    protected $breedingyear;

    /**
     * The value for the source field.
     * @var        string
     */
    protected $source;

    /**
     * The value for the sourceii field.
     * @var        string
     */
    protected $sourceii;

    /**
     * The value for the straincodefounder field.
     * @var        string
     */
    protected $straincodefounder;

    /**
     * The value for the arrivaloffounder field.
     * @var        int
     */
    protected $arrivaloffounder;

    /**
     * The value for the availability field.
     * @var        string
     */
    protected $availability;

    /**
     * The value for the remarksref field.
     * @var        int
     */
    protected $remarksref;

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
     * The value for the addremark field.
     * @var        string
     */
    protected $addremark;

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
        $this->numberofbroodstock = 0;
    }

    /**
     * Initializes internal state of BaseStrains object.
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
     * Get the [strainsrefno] column value.
     *
     * @return int
     */
    public function getStrainsrefno()
    {

        return $this->strainsrefno;
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
     * Get the [straincode] column value.
     *
     * @return string
     */
    public function getStraincode()
    {

        return $this->straincode;
    }

    /**
     * Get the [trait] column value.
     *
     * @return string
     */
    public function getTrait()
    {

        return $this->trait;
    }

    /**
     * Get the [pic] column value.
     *
     * @return string
     */
    public function getPic()
    {

        return $this->pic;
    }

    /**
     * Get the [breedingstrategy] column value.
     *
     * @return string
     */
    public function getBreedingstrategy()
    {

        return $this->breedingstrategy;
    }

    /**
     * Get the [viability] column value.
     *
     * @return int
     */
    public function getViability()
    {

        return $this->viability;
    }

    /**
     * Get the [sizeoffounding] column value.
     *
     * @return int
     */
    public function getSizeoffounding()
    {

        return $this->sizeoffounding;
    }

    /**
     * Get the [sizeoffoundingf] column value.
     *
     * @return int
     */
    public function getSizeoffoundingf()
    {

        return $this->sizeoffoundingf;
    }

    /**
     * Get the [sizeoffoundingm] column value.
     *
     * @return int
     */
    public function getSizeoffoundingm()
    {

        return $this->sizeoffoundingm;
    }

    /**
     * Get the [numberofbroodstock] column value.
     *
     * @return int
     */
    public function getNumberofbroodstock()
    {

        return $this->numberofbroodstock;
    }

    /**
     * Get the [breedingyear] column value.
     *
     * @return int
     */
    public function getBreedingyear()
    {

        return $this->breedingyear;
    }

    /**
     * Get the [source] column value.
     *
     * @return string
     */
    public function getSource()
    {

        return $this->source;
    }

    /**
     * Get the [sourceii] column value.
     *
     * @return string
     */
    public function getSourceii()
    {

        return $this->sourceii;
    }

    /**
     * Get the [straincodefounder] column value.
     *
     * @return string
     */
    public function getStraincodefounder()
    {

        return $this->straincodefounder;
    }

    /**
     * Get the [arrivaloffounder] column value.
     *
     * @return int
     */
    public function getArrivaloffounder()
    {

        return $this->arrivaloffounder;
    }

    /**
     * Get the [availability] column value.
     *
     * @return string
     */
    public function getAvailability()
    {

        return $this->availability;
    }

    /**
     * Get the [remarksref] column value.
     *
     * @return int
     */
    public function getRemarksref()
    {

        return $this->remarksref;
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
     * Get the [addremark] column value.
     *
     * @return string
     */
    public function getAddremark()
    {

        return $this->addremark;
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
     * @return Strains The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = StrainsPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = StrainsPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [strainsrefno] column.
     *
     * @param  int $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setStrainsrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->strainsrefno !== $v) {
            $this->strainsrefno = $v;
            $this->modifiedColumns[] = StrainsPeer::STRAINSREFNO;
        }


        return $this;
    } // setStrainsrefno()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = StrainsPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [straincode] column.
     *
     * @param  string $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setStraincode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->straincode !== $v) {
            $this->straincode = $v;
            $this->modifiedColumns[] = StrainsPeer::STRAINCODE;
        }


        return $this;
    } // setStraincode()

    /**
     * Set the value of [trait] column.
     *
     * @param  string $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setTrait($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->trait !== $v) {
            $this->trait = $v;
            $this->modifiedColumns[] = StrainsPeer::TRAIT;
        }


        return $this;
    } // setTrait()

    /**
     * Set the value of [pic] column.
     *
     * @param  string $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setPic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pic !== $v) {
            $this->pic = $v;
            $this->modifiedColumns[] = StrainsPeer::PIC;
        }


        return $this;
    } // setPic()

    /**
     * Set the value of [breedingstrategy] column.
     *
     * @param  string $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setBreedingstrategy($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->breedingstrategy !== $v) {
            $this->breedingstrategy = $v;
            $this->modifiedColumns[] = StrainsPeer::BREEDINGSTRATEGY;
        }


        return $this;
    } // setBreedingstrategy()

    /**
     * Set the value of [viability] column.
     *
     * @param  int $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setViability($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->viability !== $v) {
            $this->viability = $v;
            $this->modifiedColumns[] = StrainsPeer::VIABILITY;
        }


        return $this;
    } // setViability()

    /**
     * Set the value of [sizeoffounding] column.
     *
     * @param  int $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setSizeoffounding($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sizeoffounding !== $v) {
            $this->sizeoffounding = $v;
            $this->modifiedColumns[] = StrainsPeer::SIZEOFFOUNDING;
        }


        return $this;
    } // setSizeoffounding()

    /**
     * Set the value of [sizeoffoundingf] column.
     *
     * @param  int $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setSizeoffoundingf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sizeoffoundingf !== $v) {
            $this->sizeoffoundingf = $v;
            $this->modifiedColumns[] = StrainsPeer::SIZEOFFOUNDINGF;
        }


        return $this;
    } // setSizeoffoundingf()

    /**
     * Set the value of [sizeoffoundingm] column.
     *
     * @param  int $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setSizeoffoundingm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sizeoffoundingm !== $v) {
            $this->sizeoffoundingm = $v;
            $this->modifiedColumns[] = StrainsPeer::SIZEOFFOUNDINGM;
        }


        return $this;
    } // setSizeoffoundingm()

    /**
     * Set the value of [numberofbroodstock] column.
     *
     * @param  int $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setNumberofbroodstock($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->numberofbroodstock !== $v) {
            $this->numberofbroodstock = $v;
            $this->modifiedColumns[] = StrainsPeer::NUMBEROFBROODSTOCK;
        }


        return $this;
    } // setNumberofbroodstock()

    /**
     * Set the value of [breedingyear] column.
     *
     * @param  int $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setBreedingyear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->breedingyear !== $v) {
            $this->breedingyear = $v;
            $this->modifiedColumns[] = StrainsPeer::BREEDINGYEAR;
        }


        return $this;
    } // setBreedingyear()

    /**
     * Set the value of [source] column.
     *
     * @param  string $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setSource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->source !== $v) {
            $this->source = $v;
            $this->modifiedColumns[] = StrainsPeer::SOURCE;
        }


        return $this;
    } // setSource()

    /**
     * Set the value of [sourceii] column.
     *
     * @param  string $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setSourceii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sourceii !== $v) {
            $this->sourceii = $v;
            $this->modifiedColumns[] = StrainsPeer::SOURCEII;
        }


        return $this;
    } // setSourceii()

    /**
     * Set the value of [straincodefounder] column.
     *
     * @param  string $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setStraincodefounder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->straincodefounder !== $v) {
            $this->straincodefounder = $v;
            $this->modifiedColumns[] = StrainsPeer::STRAINCODEFOUNDER;
        }


        return $this;
    } // setStraincodefounder()

    /**
     * Set the value of [arrivaloffounder] column.
     *
     * @param  int $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setArrivaloffounder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->arrivaloffounder !== $v) {
            $this->arrivaloffounder = $v;
            $this->modifiedColumns[] = StrainsPeer::ARRIVALOFFOUNDER;
        }


        return $this;
    } // setArrivaloffounder()

    /**
     * Set the value of [availability] column.
     *
     * @param  string $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setAvailability($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->availability !== $v) {
            $this->availability = $v;
            $this->modifiedColumns[] = StrainsPeer::AVAILABILITY;
        }


        return $this;
    } // setAvailability()

    /**
     * Set the value of [remarksref] column.
     *
     * @param  int $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setRemarksref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->remarksref !== $v) {
            $this->remarksref = $v;
            $this->modifiedColumns[] = StrainsPeer::REMARKSREF;
        }


        return $this;
    } // setRemarksref()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = StrainsPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Strains The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = StrainsPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = StrainsPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Strains The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = StrainsPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = StrainsPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Strains The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = StrainsPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [addremark] column.
     *
     * @param  string $v new value
     * @return Strains The current object (for fluent API support)
     */
    public function setAddremark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->addremark !== $v) {
            $this->addremark = $v;
            $this->modifiedColumns[] = StrainsPeer::ADDREMARK;
        }


        return $this;
    } // setAddremark()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Strains The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = StrainsPeer::TS;
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
            if ($this->numberofbroodstock !== 0) {
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
            $this->strainsrefno = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->c_code = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->straincode = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->trait = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->pic = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->breedingstrategy = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->viability = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->sizeoffounding = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->sizeoffoundingf = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->sizeoffoundingm = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->numberofbroodstock = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->breedingyear = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->source = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->sourceii = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->straincodefounder = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->arrivaloffounder = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->availability = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->remarksref = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->entered = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->dateentered = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->modified = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->datemodified = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->expert = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->datechecked = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->addremark = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->ts = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 28; // 28 = StrainsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Strains object", $e);
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
            $con = Propel::getConnection(StrainsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = StrainsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(StrainsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = StrainsQuery::create()
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
            $con = Propel::getConnection(StrainsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                StrainsPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(StrainsPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(StrainsPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(StrainsPeer::STRAINSREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`StrainsRefNo`';
        }
        if ($this->isColumnModified(StrainsPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(StrainsPeer::STRAINCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StrainCode`';
        }
        if ($this->isColumnModified(StrainsPeer::TRAIT)) {
            $modifiedColumns[':p' . $index++]  = '`Trait`';
        }
        if ($this->isColumnModified(StrainsPeer::PIC)) {
            $modifiedColumns[':p' . $index++]  = '`Pic`';
        }
        if ($this->isColumnModified(StrainsPeer::BREEDINGSTRATEGY)) {
            $modifiedColumns[':p' . $index++]  = '`BreedingStrategy`';
        }
        if ($this->isColumnModified(StrainsPeer::VIABILITY)) {
            $modifiedColumns[':p' . $index++]  = '`Viability`';
        }
        if ($this->isColumnModified(StrainsPeer::SIZEOFFOUNDING)) {
            $modifiedColumns[':p' . $index++]  = '`SizeofFounding`';
        }
        if ($this->isColumnModified(StrainsPeer::SIZEOFFOUNDINGF)) {
            $modifiedColumns[':p' . $index++]  = '`SizeofFoundingF`';
        }
        if ($this->isColumnModified(StrainsPeer::SIZEOFFOUNDINGM)) {
            $modifiedColumns[':p' . $index++]  = '`SizeofFoundingM`';
        }
        if ($this->isColumnModified(StrainsPeer::NUMBEROFBROODSTOCK)) {
            $modifiedColumns[':p' . $index++]  = '`NumberofBroodstock`';
        }
        if ($this->isColumnModified(StrainsPeer::BREEDINGYEAR)) {
            $modifiedColumns[':p' . $index++]  = '`BreedingYear`';
        }
        if ($this->isColumnModified(StrainsPeer::SOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`Source`';
        }
        if ($this->isColumnModified(StrainsPeer::SOURCEII)) {
            $modifiedColumns[':p' . $index++]  = '`SourceII`';
        }
        if ($this->isColumnModified(StrainsPeer::STRAINCODEFOUNDER)) {
            $modifiedColumns[':p' . $index++]  = '`StrainCodeFounder`';
        }
        if ($this->isColumnModified(StrainsPeer::ARRIVALOFFOUNDER)) {
            $modifiedColumns[':p' . $index++]  = '`ArrivalofFounder`';
        }
        if ($this->isColumnModified(StrainsPeer::AVAILABILITY)) {
            $modifiedColumns[':p' . $index++]  = '`Availability`';
        }
        if ($this->isColumnModified(StrainsPeer::REMARKSREF)) {
            $modifiedColumns[':p' . $index++]  = '`RemarksRef`';
        }
        if ($this->isColumnModified(StrainsPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(StrainsPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(StrainsPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(StrainsPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(StrainsPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(StrainsPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(StrainsPeer::ADDREMARK)) {
            $modifiedColumns[':p' . $index++]  = '`AddRemark`';
        }
        if ($this->isColumnModified(StrainsPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `strains` (%s) VALUES (%s)',
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
                    case '`StrainsRefNo`':
                        $stmt->bindValue($identifier, $this->strainsrefno, PDO::PARAM_INT);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`StrainCode`':
                        $stmt->bindValue($identifier, $this->straincode, PDO::PARAM_STR);
                        break;
                    case '`Trait`':
                        $stmt->bindValue($identifier, $this->trait, PDO::PARAM_STR);
                        break;
                    case '`Pic`':
                        $stmt->bindValue($identifier, $this->pic, PDO::PARAM_STR);
                        break;
                    case '`BreedingStrategy`':
                        $stmt->bindValue($identifier, $this->breedingstrategy, PDO::PARAM_STR);
                        break;
                    case '`Viability`':
                        $stmt->bindValue($identifier, $this->viability, PDO::PARAM_INT);
                        break;
                    case '`SizeofFounding`':
                        $stmt->bindValue($identifier, $this->sizeoffounding, PDO::PARAM_INT);
                        break;
                    case '`SizeofFoundingF`':
                        $stmt->bindValue($identifier, $this->sizeoffoundingf, PDO::PARAM_INT);
                        break;
                    case '`SizeofFoundingM`':
                        $stmt->bindValue($identifier, $this->sizeoffoundingm, PDO::PARAM_INT);
                        break;
                    case '`NumberofBroodstock`':
                        $stmt->bindValue($identifier, $this->numberofbroodstock, PDO::PARAM_INT);
                        break;
                    case '`BreedingYear`':
                        $stmt->bindValue($identifier, $this->breedingyear, PDO::PARAM_INT);
                        break;
                    case '`Source`':
                        $stmt->bindValue($identifier, $this->source, PDO::PARAM_STR);
                        break;
                    case '`SourceII`':
                        $stmt->bindValue($identifier, $this->sourceii, PDO::PARAM_STR);
                        break;
                    case '`StrainCodeFounder`':
                        $stmt->bindValue($identifier, $this->straincodefounder, PDO::PARAM_STR);
                        break;
                    case '`ArrivalofFounder`':
                        $stmt->bindValue($identifier, $this->arrivaloffounder, PDO::PARAM_INT);
                        break;
                    case '`Availability`':
                        $stmt->bindValue($identifier, $this->availability, PDO::PARAM_STR);
                        break;
                    case '`RemarksRef`':
                        $stmt->bindValue($identifier, $this->remarksref, PDO::PARAM_INT);
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
                    case '`AddRemark`':
                        $stmt->bindValue($identifier, $this->addremark, PDO::PARAM_STR);
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


            if (($retval = StrainsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = StrainsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getStrainsrefno();
                break;
            case 3:
                return $this->getCCode();
                break;
            case 4:
                return $this->getStraincode();
                break;
            case 5:
                return $this->getTrait();
                break;
            case 6:
                return $this->getPic();
                break;
            case 7:
                return $this->getBreedingstrategy();
                break;
            case 8:
                return $this->getViability();
                break;
            case 9:
                return $this->getSizeoffounding();
                break;
            case 10:
                return $this->getSizeoffoundingf();
                break;
            case 11:
                return $this->getSizeoffoundingm();
                break;
            case 12:
                return $this->getNumberofbroodstock();
                break;
            case 13:
                return $this->getBreedingyear();
                break;
            case 14:
                return $this->getSource();
                break;
            case 15:
                return $this->getSourceii();
                break;
            case 16:
                return $this->getStraincodefounder();
                break;
            case 17:
                return $this->getArrivaloffounder();
                break;
            case 18:
                return $this->getAvailability();
                break;
            case 19:
                return $this->getRemarksref();
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
                return $this->getAddremark();
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
        if (isset($alreadyDumpedObjects['Strains'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Strains'][serialize($this->getPrimaryKey())] = true;
        $keys = StrainsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getStockcode(),
            $keys[1] => $this->getSpeccode(),
            $keys[2] => $this->getStrainsrefno(),
            $keys[3] => $this->getCCode(),
            $keys[4] => $this->getStraincode(),
            $keys[5] => $this->getTrait(),
            $keys[6] => $this->getPic(),
            $keys[7] => $this->getBreedingstrategy(),
            $keys[8] => $this->getViability(),
            $keys[9] => $this->getSizeoffounding(),
            $keys[10] => $this->getSizeoffoundingf(),
            $keys[11] => $this->getSizeoffoundingm(),
            $keys[12] => $this->getNumberofbroodstock(),
            $keys[13] => $this->getBreedingyear(),
            $keys[14] => $this->getSource(),
            $keys[15] => $this->getSourceii(),
            $keys[16] => $this->getStraincodefounder(),
            $keys[17] => $this->getArrivaloffounder(),
            $keys[18] => $this->getAvailability(),
            $keys[19] => $this->getRemarksref(),
            $keys[20] => $this->getEntered(),
            $keys[21] => $this->getDateentered(),
            $keys[22] => $this->getModified(),
            $keys[23] => $this->getDatemodified(),
            $keys[24] => $this->getExpert(),
            $keys[25] => $this->getDatechecked(),
            $keys[26] => $this->getAddremark(),
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
        $pos = StrainsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setStrainsrefno($value);
                break;
            case 3:
                $this->setCCode($value);
                break;
            case 4:
                $this->setStraincode($value);
                break;
            case 5:
                $this->setTrait($value);
                break;
            case 6:
                $this->setPic($value);
                break;
            case 7:
                $this->setBreedingstrategy($value);
                break;
            case 8:
                $this->setViability($value);
                break;
            case 9:
                $this->setSizeoffounding($value);
                break;
            case 10:
                $this->setSizeoffoundingf($value);
                break;
            case 11:
                $this->setSizeoffoundingm($value);
                break;
            case 12:
                $this->setNumberofbroodstock($value);
                break;
            case 13:
                $this->setBreedingyear($value);
                break;
            case 14:
                $this->setSource($value);
                break;
            case 15:
                $this->setSourceii($value);
                break;
            case 16:
                $this->setStraincodefounder($value);
                break;
            case 17:
                $this->setArrivaloffounder($value);
                break;
            case 18:
                $this->setAvailability($value);
                break;
            case 19:
                $this->setRemarksref($value);
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
                $this->setAddremark($value);
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
        $keys = StrainsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setStockcode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSpeccode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setStrainsrefno($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCCode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setStraincode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTrait($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPic($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setBreedingstrategy($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setViability($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setSizeoffounding($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setSizeoffoundingf($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setSizeoffoundingm($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNumberofbroodstock($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setBreedingyear($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setSource($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setSourceii($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setStraincodefounder($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setArrivaloffounder($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setAvailability($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setRemarksref($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setEntered($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDateentered($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setModified($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDatemodified($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setExpert($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDatechecked($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setAddremark($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setTs($arr[$keys[27]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(StrainsPeer::DATABASE_NAME);

        if ($this->isColumnModified(StrainsPeer::STOCKCODE)) $criteria->add(StrainsPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(StrainsPeer::SPECCODE)) $criteria->add(StrainsPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(StrainsPeer::STRAINSREFNO)) $criteria->add(StrainsPeer::STRAINSREFNO, $this->strainsrefno);
        if ($this->isColumnModified(StrainsPeer::C_CODE)) $criteria->add(StrainsPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(StrainsPeer::STRAINCODE)) $criteria->add(StrainsPeer::STRAINCODE, $this->straincode);
        if ($this->isColumnModified(StrainsPeer::TRAIT)) $criteria->add(StrainsPeer::TRAIT, $this->trait);
        if ($this->isColumnModified(StrainsPeer::PIC)) $criteria->add(StrainsPeer::PIC, $this->pic);
        if ($this->isColumnModified(StrainsPeer::BREEDINGSTRATEGY)) $criteria->add(StrainsPeer::BREEDINGSTRATEGY, $this->breedingstrategy);
        if ($this->isColumnModified(StrainsPeer::VIABILITY)) $criteria->add(StrainsPeer::VIABILITY, $this->viability);
        if ($this->isColumnModified(StrainsPeer::SIZEOFFOUNDING)) $criteria->add(StrainsPeer::SIZEOFFOUNDING, $this->sizeoffounding);
        if ($this->isColumnModified(StrainsPeer::SIZEOFFOUNDINGF)) $criteria->add(StrainsPeer::SIZEOFFOUNDINGF, $this->sizeoffoundingf);
        if ($this->isColumnModified(StrainsPeer::SIZEOFFOUNDINGM)) $criteria->add(StrainsPeer::SIZEOFFOUNDINGM, $this->sizeoffoundingm);
        if ($this->isColumnModified(StrainsPeer::NUMBEROFBROODSTOCK)) $criteria->add(StrainsPeer::NUMBEROFBROODSTOCK, $this->numberofbroodstock);
        if ($this->isColumnModified(StrainsPeer::BREEDINGYEAR)) $criteria->add(StrainsPeer::BREEDINGYEAR, $this->breedingyear);
        if ($this->isColumnModified(StrainsPeer::SOURCE)) $criteria->add(StrainsPeer::SOURCE, $this->source);
        if ($this->isColumnModified(StrainsPeer::SOURCEII)) $criteria->add(StrainsPeer::SOURCEII, $this->sourceii);
        if ($this->isColumnModified(StrainsPeer::STRAINCODEFOUNDER)) $criteria->add(StrainsPeer::STRAINCODEFOUNDER, $this->straincodefounder);
        if ($this->isColumnModified(StrainsPeer::ARRIVALOFFOUNDER)) $criteria->add(StrainsPeer::ARRIVALOFFOUNDER, $this->arrivaloffounder);
        if ($this->isColumnModified(StrainsPeer::AVAILABILITY)) $criteria->add(StrainsPeer::AVAILABILITY, $this->availability);
        if ($this->isColumnModified(StrainsPeer::REMARKSREF)) $criteria->add(StrainsPeer::REMARKSREF, $this->remarksref);
        if ($this->isColumnModified(StrainsPeer::ENTERED)) $criteria->add(StrainsPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(StrainsPeer::DATEENTERED)) $criteria->add(StrainsPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(StrainsPeer::MODIFIED)) $criteria->add(StrainsPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(StrainsPeer::DATEMODIFIED)) $criteria->add(StrainsPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(StrainsPeer::EXPERT)) $criteria->add(StrainsPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(StrainsPeer::DATECHECKED)) $criteria->add(StrainsPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(StrainsPeer::ADDREMARK)) $criteria->add(StrainsPeer::ADDREMARK, $this->addremark);
        if ($this->isColumnModified(StrainsPeer::TS)) $criteria->add(StrainsPeer::TS, $this->ts);

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
        $criteria = new Criteria(StrainsPeer::DATABASE_NAME);
        $criteria->add(StrainsPeer::STOCKCODE, $this->stockcode);
        $criteria->add(StrainsPeer::STRAINCODE, $this->straincode);

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
        $pks[1] = $this->getStraincode();

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
        $this->setStraincode($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getStockcode()) && (null === $this->getStraincode());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Strains (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setStrainsrefno($this->getStrainsrefno());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setStraincode($this->getStraincode());
        $copyObj->setTrait($this->getTrait());
        $copyObj->setPic($this->getPic());
        $copyObj->setBreedingstrategy($this->getBreedingstrategy());
        $copyObj->setViability($this->getViability());
        $copyObj->setSizeoffounding($this->getSizeoffounding());
        $copyObj->setSizeoffoundingf($this->getSizeoffoundingf());
        $copyObj->setSizeoffoundingm($this->getSizeoffoundingm());
        $copyObj->setNumberofbroodstock($this->getNumberofbroodstock());
        $copyObj->setBreedingyear($this->getBreedingyear());
        $copyObj->setSource($this->getSource());
        $copyObj->setSourceii($this->getSourceii());
        $copyObj->setStraincodefounder($this->getStraincodefounder());
        $copyObj->setArrivaloffounder($this->getArrivaloffounder());
        $copyObj->setAvailability($this->getAvailability());
        $copyObj->setRemarksref($this->getRemarksref());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setAddremark($this->getAddremark());
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
     * @return Strains Clone of current object.
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
     * @return StrainsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new StrainsPeer();
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
        $this->strainsrefno = null;
        $this->c_code = null;
        $this->straincode = null;
        $this->trait = null;
        $this->pic = null;
        $this->breedingstrategy = null;
        $this->viability = null;
        $this->sizeoffounding = null;
        $this->sizeoffoundingf = null;
        $this->sizeoffoundingm = null;
        $this->numberofbroodstock = null;
        $this->breedingyear = null;
        $this->source = null;
        $this->sourceii = null;
        $this->straincodefounder = null;
        $this->arrivaloffounder = null;
        $this->availability = null;
        $this->remarksref = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->addremark = null;
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
        return (string) $this->exportTo(StrainsPeer::DEFAULT_STRING_FORMAT);
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
