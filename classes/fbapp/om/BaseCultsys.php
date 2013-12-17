<?php


/**
 * Base class that represents a row from the 'cultsys' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCultsys extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CultsysPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CultsysPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the cultcode field.
     * @var        int
     */
    protected $cultcode;

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
     * The value for the cultsysrefno field.
     * @var        int
     */
    protected $cultsysrefno;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the nameoffarm field.
     * @var        string
     */
    protected $nameoffarm;

    /**
     * The value for the year field.
     * @var        int
     */
    protected $year;

    /**
     * The value for the latitude field.
     * @var        double
     */
    protected $latitude;

    /**
     * The value for the ns field.
     * @var        string
     */
    protected $ns;

    /**
     * The value for the longitude field.
     * @var        double
     */
    protected $longitude;

    /**
     * The value for the ew field.
     * @var        string
     */
    protected $ew;

    /**
     * The value for the altitude field.
     * @var        int
     */
    protected $altitude;

    /**
     * The value for the environment field.
     * @var        string
     */
    protected $environment;

    /**
     * The value for the typeofculture field.
     * @var        string
     */
    protected $typeofculture;

    /**
     * The value for the sexoffish field.
     * @var        string
     */
    protected $sexoffish;

    /**
     * The value for the culturei field.
     * @var        string
     */
    protected $culturei;

    /**
     * The value for the cultureii field.
     * @var        string
     */
    protected $cultureii;

    /**
     * The value for the unitcycle field.
     * @var        string
     */
    protected $unitcycle;

    /**
     * The value for the productionunits field.
     * @var        int
     */
    protected $productionunits;

    /**
     * The value for the area field.
     * @var        double
     */
    protected $area;

    /**
     * The value for the averagedepth field.
     * @var        double
     */
    protected $averagedepth;

    /**
     * The value for the volume field.
     * @var        double
     */
    protected $volume;

    /**
     * The value for the mainwatersource field.
     * @var        string
     */
    protected $mainwatersource;

    /**
     * The value for the suppwatersource field.
     * @var        string
     */
    protected $suppwatersource;

    /**
     * The value for the tempmax field.
     * @var        double
     */
    protected $tempmax;

    /**
     * The value for the salinmax field.
     * @var        double
     */
    protected $salinmax;

    /**
     * The value for the phmax field.
     * @var        double
     */
    protected $phmax;

    /**
     * The value for the oxygenmax field.
     * @var        double
     */
    protected $oxygenmax;

    /**
     * The value for the saturationmax field.
     * @var        double
     */
    protected $saturationmax;

    /**
     * The value for the alcalinitymax field.
     * @var        double
     */
    protected $alcalinitymax;

    /**
     * The value for the tempmin field.
     * @var        double
     */
    protected $tempmin;

    /**
     * The value for the salinmin field.
     * @var        double
     */
    protected $salinmin;

    /**
     * The value for the phmin field.
     * @var        double
     */
    protected $phmin;

    /**
     * The value for the oxygenmin field.
     * @var        double
     */
    protected $oxygenmin;

    /**
     * The value for the saturationmin field.
     * @var        double
     */
    protected $saturationmin;

    /**
     * The value for the alcalinitymin field.
     * @var        double
     */
    protected $alcalinitymin;

    /**
     * The value for the tempmod field.
     * @var        double
     */
    protected $tempmod;

    /**
     * The value for the salinmod field.
     * @var        double
     */
    protected $salinmod;

    /**
     * The value for the phmod field.
     * @var        double
     */
    protected $phmod;

    /**
     * The value for the oxygenmod field.
     * @var        double
     */
    protected $oxygenmod;

    /**
     * The value for the saturationmod field.
     * @var        double
     */
    protected $saturationmod;

    /**
     * The value for the alcalinitymod field.
     * @var        double
     */
    protected $alcalinitymod;

    /**
     * The value for the foodi field.
     * @var        string
     */
    protected $foodi;

    /**
     * The value for the feedquality field.
     * @var        double
     */
    protected $feedquality;

    /**
     * The value for the feedtotal field.
     * @var        double
     */
    protected $feedtotal;

    /**
     * The value for the feedtype field.
     * @var        string
     */
    protected $feedtype;

    /**
     * The value for the feedquanity field.
     * @var        double
     */
    protected $feedquanity;

    /**
     * The value for the n field.
     * @var        double
     */
    protected $n;

    /**
     * The value for the nunit field.
     * @var        string
     */
    protected $nunit;

    /**
     * The value for the p field.
     * @var        double
     */
    protected $p;

    /**
     * The value for the punit field.
     * @var        string
     */
    protected $punit;

    /**
     * The value for the productionperiod field.
     * @var        int
     */
    protected $productionperiod;

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
     * The value for the describecult field.
     * @var        string
     */
    protected $describecult;

    /**
     * The value for the describefood field.
     * @var        string
     */
    protected $describefood;

    /**
     * The value for the comments field.
     * @var        string
     */
    protected $comments;

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
     * Get the [cultcode] column value.
     *
     * @return int
     */
    public function getCultcode()
    {

        return $this->cultcode;
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
     * Get the [cultsysrefno] column value.
     *
     * @return int
     */
    public function getCultsysrefno()
    {

        return $this->cultsysrefno;
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
     * Get the [nameoffarm] column value.
     *
     * @return string
     */
    public function getNameoffarm()
    {

        return $this->nameoffarm;
    }

    /**
     * Get the [year] column value.
     *
     * @return int
     */
    public function getYear()
    {

        return $this->year;
    }

    /**
     * Get the [latitude] column value.
     *
     * @return double
     */
    public function getLatitude()
    {

        return $this->latitude;
    }

    /**
     * Get the [ns] column value.
     *
     * @return string
     */
    public function getNs()
    {

        return $this->ns;
    }

    /**
     * Get the [longitude] column value.
     *
     * @return double
     */
    public function getLongitude()
    {

        return $this->longitude;
    }

    /**
     * Get the [ew] column value.
     *
     * @return string
     */
    public function getEw()
    {

        return $this->ew;
    }

    /**
     * Get the [altitude] column value.
     *
     * @return int
     */
    public function getAltitude()
    {

        return $this->altitude;
    }

    /**
     * Get the [environment] column value.
     *
     * @return string
     */
    public function getEnvironment()
    {

        return $this->environment;
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
     * Get the [sexoffish] column value.
     *
     * @return string
     */
    public function getSexoffish()
    {

        return $this->sexoffish;
    }

    /**
     * Get the [culturei] column value.
     *
     * @return string
     */
    public function getCulturei()
    {

        return $this->culturei;
    }

    /**
     * Get the [cultureii] column value.
     *
     * @return string
     */
    public function getCultureii()
    {

        return $this->cultureii;
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
     * Get the [productionunits] column value.
     *
     * @return int
     */
    public function getProductionunits()
    {

        return $this->productionunits;
    }

    /**
     * Get the [area] column value.
     *
     * @return double
     */
    public function getArea()
    {

        return $this->area;
    }

    /**
     * Get the [averagedepth] column value.
     *
     * @return double
     */
    public function getAveragedepth()
    {

        return $this->averagedepth;
    }

    /**
     * Get the [volume] column value.
     *
     * @return double
     */
    public function getVolume()
    {

        return $this->volume;
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
     * Get the [suppwatersource] column value.
     *
     * @return string
     */
    public function getSuppwatersource()
    {

        return $this->suppwatersource;
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
     * Get the [salinmax] column value.
     *
     * @return double
     */
    public function getSalinmax()
    {

        return $this->salinmax;
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
     * Get the [oxygenmax] column value.
     *
     * @return double
     */
    public function getOxygenmax()
    {

        return $this->oxygenmax;
    }

    /**
     * Get the [saturationmax] column value.
     *
     * @return double
     */
    public function getSaturationmax()
    {

        return $this->saturationmax;
    }

    /**
     * Get the [alcalinitymax] column value.
     *
     * @return double
     */
    public function getAlcalinitymax()
    {

        return $this->alcalinitymax;
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
     * Get the [salinmin] column value.
     *
     * @return double
     */
    public function getSalinmin()
    {

        return $this->salinmin;
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
     * Get the [oxygenmin] column value.
     *
     * @return double
     */
    public function getOxygenmin()
    {

        return $this->oxygenmin;
    }

    /**
     * Get the [saturationmin] column value.
     *
     * @return double
     */
    public function getSaturationmin()
    {

        return $this->saturationmin;
    }

    /**
     * Get the [alcalinitymin] column value.
     *
     * @return double
     */
    public function getAlcalinitymin()
    {

        return $this->alcalinitymin;
    }

    /**
     * Get the [tempmod] column value.
     *
     * @return double
     */
    public function getTempmod()
    {

        return $this->tempmod;
    }

    /**
     * Get the [salinmod] column value.
     *
     * @return double
     */
    public function getSalinmod()
    {

        return $this->salinmod;
    }

    /**
     * Get the [phmod] column value.
     *
     * @return double
     */
    public function getPhmod()
    {

        return $this->phmod;
    }

    /**
     * Get the [oxygenmod] column value.
     *
     * @return double
     */
    public function getOxygenmod()
    {

        return $this->oxygenmod;
    }

    /**
     * Get the [saturationmod] column value.
     *
     * @return double
     */
    public function getSaturationmod()
    {

        return $this->saturationmod;
    }

    /**
     * Get the [alcalinitymod] column value.
     *
     * @return double
     */
    public function getAlcalinitymod()
    {

        return $this->alcalinitymod;
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
     * Get the [feedquality] column value.
     *
     * @return double
     */
    public function getFeedquality()
    {

        return $this->feedquality;
    }

    /**
     * Get the [feedtotal] column value.
     *
     * @return double
     */
    public function getFeedtotal()
    {

        return $this->feedtotal;
    }

    /**
     * Get the [feedtype] column value.
     *
     * @return string
     */
    public function getFeedtype()
    {

        return $this->feedtype;
    }

    /**
     * Get the [feedquanity] column value.
     *
     * @return double
     */
    public function getFeedquanity()
    {

        return $this->feedquanity;
    }

    /**
     * Get the [n] column value.
     *
     * @return double
     */
    public function getN()
    {

        return $this->n;
    }

    /**
     * Get the [nunit] column value.
     *
     * @return string
     */
    public function getNunit()
    {

        return $this->nunit;
    }

    /**
     * Get the [p] column value.
     *
     * @return double
     */
    public function getP()
    {

        return $this->p;
    }

    /**
     * Get the [punit] column value.
     *
     * @return string
     */
    public function getPunit()
    {

        return $this->punit;
    }

    /**
     * Get the [productionperiod] column value.
     *
     * @return int
     */
    public function getProductionperiod()
    {

        return $this->productionperiod;
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
     * Get the [describecult] column value.
     *
     * @return string
     */
    public function getDescribecult()
    {

        return $this->describecult;
    }

    /**
     * Get the [describefood] column value.
     *
     * @return string
     */
    public function getDescribefood()
    {

        return $this->describefood;
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
     * Set the value of [cultcode] column.
     *
     * @param  int $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setCultcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cultcode !== $v) {
            $this->cultcode = $v;
            $this->modifiedColumns[] = CultsysPeer::CULTCODE;
        }


        return $this;
    } // setCultcode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = CultsysPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = CultsysPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [cultsysrefno] column.
     *
     * @param  int $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setCultsysrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cultsysrefno !== $v) {
            $this->cultsysrefno = $v;
            $this->modifiedColumns[] = CultsysPeer::CULTSYSREFNO;
        }


        return $this;
    } // setCultsysrefno()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = CultsysPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [nameoffarm] column.
     *
     * @param  string $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setNameoffarm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nameoffarm !== $v) {
            $this->nameoffarm = $v;
            $this->modifiedColumns[] = CultsysPeer::NAMEOFFARM;
        }


        return $this;
    } // setNameoffarm()

    /**
     * Set the value of [year] column.
     *
     * @param  int $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setYear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->year !== $v) {
            $this->year = $v;
            $this->modifiedColumns[] = CultsysPeer::YEAR;
        }


        return $this;
    } // setYear()

    /**
     * Set the value of [latitude] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setLatitude($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->latitude !== $v) {
            $this->latitude = $v;
            $this->modifiedColumns[] = CultsysPeer::LATITUDE;
        }


        return $this;
    } // setLatitude()

    /**
     * Set the value of [ns] column.
     *
     * @param  string $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setNs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ns !== $v) {
            $this->ns = $v;
            $this->modifiedColumns[] = CultsysPeer::NS;
        }


        return $this;
    } // setNs()

    /**
     * Set the value of [longitude] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setLongitude($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->longitude !== $v) {
            $this->longitude = $v;
            $this->modifiedColumns[] = CultsysPeer::LONGITUDE;
        }


        return $this;
    } // setLongitude()

    /**
     * Set the value of [ew] column.
     *
     * @param  string $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setEw($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ew !== $v) {
            $this->ew = $v;
            $this->modifiedColumns[] = CultsysPeer::EW;
        }


        return $this;
    } // setEw()

    /**
     * Set the value of [altitude] column.
     *
     * @param  int $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setAltitude($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->altitude !== $v) {
            $this->altitude = $v;
            $this->modifiedColumns[] = CultsysPeer::ALTITUDE;
        }


        return $this;
    } // setAltitude()

    /**
     * Set the value of [environment] column.
     *
     * @param  string $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setEnvironment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->environment !== $v) {
            $this->environment = $v;
            $this->modifiedColumns[] = CultsysPeer::ENVIRONMENT;
        }


        return $this;
    } // setEnvironment()

    /**
     * Set the value of [typeofculture] column.
     *
     * @param  string $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setTypeofculture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->typeofculture !== $v) {
            $this->typeofculture = $v;
            $this->modifiedColumns[] = CultsysPeer::TYPEOFCULTURE;
        }


        return $this;
    } // setTypeofculture()

    /**
     * Set the value of [sexoffish] column.
     *
     * @param  string $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setSexoffish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sexoffish !== $v) {
            $this->sexoffish = $v;
            $this->modifiedColumns[] = CultsysPeer::SEXOFFISH;
        }


        return $this;
    } // setSexoffish()

    /**
     * Set the value of [culturei] column.
     *
     * @param  string $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setCulturei($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->culturei !== $v) {
            $this->culturei = $v;
            $this->modifiedColumns[] = CultsysPeer::CULTUREI;
        }


        return $this;
    } // setCulturei()

    /**
     * Set the value of [cultureii] column.
     *
     * @param  string $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setCultureii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cultureii !== $v) {
            $this->cultureii = $v;
            $this->modifiedColumns[] = CultsysPeer::CULTUREII;
        }


        return $this;
    } // setCultureii()

    /**
     * Set the value of [unitcycle] column.
     *
     * @param  string $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setUnitcycle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unitcycle !== $v) {
            $this->unitcycle = $v;
            $this->modifiedColumns[] = CultsysPeer::UNITCYCLE;
        }


        return $this;
    } // setUnitcycle()

    /**
     * Set the value of [productionunits] column.
     *
     * @param  int $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setProductionunits($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->productionunits !== $v) {
            $this->productionunits = $v;
            $this->modifiedColumns[] = CultsysPeer::PRODUCTIONUNITS;
        }


        return $this;
    } // setProductionunits()

    /**
     * Set the value of [area] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setArea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->area !== $v) {
            $this->area = $v;
            $this->modifiedColumns[] = CultsysPeer::AREA;
        }


        return $this;
    } // setArea()

    /**
     * Set the value of [averagedepth] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setAveragedepth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->averagedepth !== $v) {
            $this->averagedepth = $v;
            $this->modifiedColumns[] = CultsysPeer::AVERAGEDEPTH;
        }


        return $this;
    } // setAveragedepth()

    /**
     * Set the value of [volume] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setVolume($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->volume !== $v) {
            $this->volume = $v;
            $this->modifiedColumns[] = CultsysPeer::VOLUME;
        }


        return $this;
    } // setVolume()

    /**
     * Set the value of [mainwatersource] column.
     *
     * @param  string $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setMainwatersource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mainwatersource !== $v) {
            $this->mainwatersource = $v;
            $this->modifiedColumns[] = CultsysPeer::MAINWATERSOURCE;
        }


        return $this;
    } // setMainwatersource()

    /**
     * Set the value of [suppwatersource] column.
     *
     * @param  string $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setSuppwatersource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->suppwatersource !== $v) {
            $this->suppwatersource = $v;
            $this->modifiedColumns[] = CultsysPeer::SUPPWATERSOURCE;
        }


        return $this;
    } // setSuppwatersource()

    /**
     * Set the value of [tempmax] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setTempmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tempmax !== $v) {
            $this->tempmax = $v;
            $this->modifiedColumns[] = CultsysPeer::TEMPMAX;
        }


        return $this;
    } // setTempmax()

    /**
     * Set the value of [salinmax] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setSalinmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->salinmax !== $v) {
            $this->salinmax = $v;
            $this->modifiedColumns[] = CultsysPeer::SALINMAX;
        }


        return $this;
    } // setSalinmax()

    /**
     * Set the value of [phmax] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setPhmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->phmax !== $v) {
            $this->phmax = $v;
            $this->modifiedColumns[] = CultsysPeer::PHMAX;
        }


        return $this;
    } // setPhmax()

    /**
     * Set the value of [oxygenmax] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setOxygenmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oxygenmax !== $v) {
            $this->oxygenmax = $v;
            $this->modifiedColumns[] = CultsysPeer::OXYGENMAX;
        }


        return $this;
    } // setOxygenmax()

    /**
     * Set the value of [saturationmax] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setSaturationmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->saturationmax !== $v) {
            $this->saturationmax = $v;
            $this->modifiedColumns[] = CultsysPeer::SATURATIONMAX;
        }


        return $this;
    } // setSaturationmax()

    /**
     * Set the value of [alcalinitymax] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setAlcalinitymax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->alcalinitymax !== $v) {
            $this->alcalinitymax = $v;
            $this->modifiedColumns[] = CultsysPeer::ALCALINITYMAX;
        }


        return $this;
    } // setAlcalinitymax()

    /**
     * Set the value of [tempmin] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setTempmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tempmin !== $v) {
            $this->tempmin = $v;
            $this->modifiedColumns[] = CultsysPeer::TEMPMIN;
        }


        return $this;
    } // setTempmin()

    /**
     * Set the value of [salinmin] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setSalinmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->salinmin !== $v) {
            $this->salinmin = $v;
            $this->modifiedColumns[] = CultsysPeer::SALINMIN;
        }


        return $this;
    } // setSalinmin()

    /**
     * Set the value of [phmin] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setPhmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->phmin !== $v) {
            $this->phmin = $v;
            $this->modifiedColumns[] = CultsysPeer::PHMIN;
        }


        return $this;
    } // setPhmin()

    /**
     * Set the value of [oxygenmin] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setOxygenmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oxygenmin !== $v) {
            $this->oxygenmin = $v;
            $this->modifiedColumns[] = CultsysPeer::OXYGENMIN;
        }


        return $this;
    } // setOxygenmin()

    /**
     * Set the value of [saturationmin] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setSaturationmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->saturationmin !== $v) {
            $this->saturationmin = $v;
            $this->modifiedColumns[] = CultsysPeer::SATURATIONMIN;
        }


        return $this;
    } // setSaturationmin()

    /**
     * Set the value of [alcalinitymin] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setAlcalinitymin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->alcalinitymin !== $v) {
            $this->alcalinitymin = $v;
            $this->modifiedColumns[] = CultsysPeer::ALCALINITYMIN;
        }


        return $this;
    } // setAlcalinitymin()

    /**
     * Set the value of [tempmod] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setTempmod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tempmod !== $v) {
            $this->tempmod = $v;
            $this->modifiedColumns[] = CultsysPeer::TEMPMOD;
        }


        return $this;
    } // setTempmod()

    /**
     * Set the value of [salinmod] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setSalinmod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->salinmod !== $v) {
            $this->salinmod = $v;
            $this->modifiedColumns[] = CultsysPeer::SALINMOD;
        }


        return $this;
    } // setSalinmod()

    /**
     * Set the value of [phmod] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setPhmod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->phmod !== $v) {
            $this->phmod = $v;
            $this->modifiedColumns[] = CultsysPeer::PHMOD;
        }


        return $this;
    } // setPhmod()

    /**
     * Set the value of [oxygenmod] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setOxygenmod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oxygenmod !== $v) {
            $this->oxygenmod = $v;
            $this->modifiedColumns[] = CultsysPeer::OXYGENMOD;
        }


        return $this;
    } // setOxygenmod()

    /**
     * Set the value of [saturationmod] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setSaturationmod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->saturationmod !== $v) {
            $this->saturationmod = $v;
            $this->modifiedColumns[] = CultsysPeer::SATURATIONMOD;
        }


        return $this;
    } // setSaturationmod()

    /**
     * Set the value of [alcalinitymod] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setAlcalinitymod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->alcalinitymod !== $v) {
            $this->alcalinitymod = $v;
            $this->modifiedColumns[] = CultsysPeer::ALCALINITYMOD;
        }


        return $this;
    } // setAlcalinitymod()

    /**
     * Set the value of [foodi] column.
     *
     * @param  string $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setFoodi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->foodi !== $v) {
            $this->foodi = $v;
            $this->modifiedColumns[] = CultsysPeer::FOODI;
        }


        return $this;
    } // setFoodi()

    /**
     * Set the value of [feedquality] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setFeedquality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->feedquality !== $v) {
            $this->feedquality = $v;
            $this->modifiedColumns[] = CultsysPeer::FEEDQUALITY;
        }


        return $this;
    } // setFeedquality()

    /**
     * Set the value of [feedtotal] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setFeedtotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->feedtotal !== $v) {
            $this->feedtotal = $v;
            $this->modifiedColumns[] = CultsysPeer::FEEDTOTAL;
        }


        return $this;
    } // setFeedtotal()

    /**
     * Set the value of [feedtype] column.
     *
     * @param  string $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setFeedtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->feedtype !== $v) {
            $this->feedtype = $v;
            $this->modifiedColumns[] = CultsysPeer::FEEDTYPE;
        }


        return $this;
    } // setFeedtype()

    /**
     * Set the value of [feedquanity] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setFeedquanity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->feedquanity !== $v) {
            $this->feedquanity = $v;
            $this->modifiedColumns[] = CultsysPeer::FEEDQUANITY;
        }


        return $this;
    } // setFeedquanity()

    /**
     * Set the value of [n] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setN($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->n !== $v) {
            $this->n = $v;
            $this->modifiedColumns[] = CultsysPeer::N;
        }


        return $this;
    } // setN()

    /**
     * Set the value of [nunit] column.
     *
     * @param  string $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setNunit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nunit !== $v) {
            $this->nunit = $v;
            $this->modifiedColumns[] = CultsysPeer::NUNIT;
        }


        return $this;
    } // setNunit()

    /**
     * Set the value of [p] column.
     *
     * @param  double $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setP($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->p !== $v) {
            $this->p = $v;
            $this->modifiedColumns[] = CultsysPeer::P;
        }


        return $this;
    } // setP()

    /**
     * Set the value of [punit] column.
     *
     * @param  string $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setPunit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->punit !== $v) {
            $this->punit = $v;
            $this->modifiedColumns[] = CultsysPeer::PUNIT;
        }


        return $this;
    } // setPunit()

    /**
     * Set the value of [productionperiod] column.
     *
     * @param  int $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setProductionperiod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->productionperiod !== $v) {
            $this->productionperiod = $v;
            $this->modifiedColumns[] = CultsysPeer::PRODUCTIONPERIOD;
        }


        return $this;
    } // setProductionperiod()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = CultsysPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cultsys The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = CultsysPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = CultsysPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cultsys The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = CultsysPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = CultsysPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cultsys The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = CultsysPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [describecult] column.
     *
     * @param  string $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setDescribecult($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->describecult !== $v) {
            $this->describecult = $v;
            $this->modifiedColumns[] = CultsysPeer::DESCRIBECULT;
        }


        return $this;
    } // setDescribecult()

    /**
     * Set the value of [describefood] column.
     *
     * @param  string $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setDescribefood($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->describefood !== $v) {
            $this->describefood = $v;
            $this->modifiedColumns[] = CultsysPeer::DESCRIBEFOOD;
        }


        return $this;
    } // setDescribefood()

    /**
     * Set the value of [comments] column.
     *
     * @param  string $v new value
     * @return Cultsys The current object (for fluent API support)
     */
    public function setComments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comments !== $v) {
            $this->comments = $v;
            $this->modifiedColumns[] = CultsysPeer::COMMENTS;
        }


        return $this;
    } // setComments()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cultsys The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = CultsysPeer::TS;
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

            $this->cultcode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->stockcode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->speccode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->cultsysrefno = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->c_code = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->nameoffarm = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->year = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->latitude = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->ns = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->longitude = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->ew = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->altitude = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->environment = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->typeofculture = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->sexoffish = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->culturei = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->cultureii = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->unitcycle = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->productionunits = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->area = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->averagedepth = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->volume = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->mainwatersource = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->suppwatersource = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->tempmax = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
            $this->salinmax = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->phmax = ($row[$startcol + 26] !== null) ? (double) $row[$startcol + 26] : null;
            $this->oxygenmax = ($row[$startcol + 27] !== null) ? (double) $row[$startcol + 27] : null;
            $this->saturationmax = ($row[$startcol + 28] !== null) ? (double) $row[$startcol + 28] : null;
            $this->alcalinitymax = ($row[$startcol + 29] !== null) ? (double) $row[$startcol + 29] : null;
            $this->tempmin = ($row[$startcol + 30] !== null) ? (double) $row[$startcol + 30] : null;
            $this->salinmin = ($row[$startcol + 31] !== null) ? (double) $row[$startcol + 31] : null;
            $this->phmin = ($row[$startcol + 32] !== null) ? (double) $row[$startcol + 32] : null;
            $this->oxygenmin = ($row[$startcol + 33] !== null) ? (double) $row[$startcol + 33] : null;
            $this->saturationmin = ($row[$startcol + 34] !== null) ? (double) $row[$startcol + 34] : null;
            $this->alcalinitymin = ($row[$startcol + 35] !== null) ? (double) $row[$startcol + 35] : null;
            $this->tempmod = ($row[$startcol + 36] !== null) ? (double) $row[$startcol + 36] : null;
            $this->salinmod = ($row[$startcol + 37] !== null) ? (double) $row[$startcol + 37] : null;
            $this->phmod = ($row[$startcol + 38] !== null) ? (double) $row[$startcol + 38] : null;
            $this->oxygenmod = ($row[$startcol + 39] !== null) ? (double) $row[$startcol + 39] : null;
            $this->saturationmod = ($row[$startcol + 40] !== null) ? (double) $row[$startcol + 40] : null;
            $this->alcalinitymod = ($row[$startcol + 41] !== null) ? (double) $row[$startcol + 41] : null;
            $this->foodi = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->feedquality = ($row[$startcol + 43] !== null) ? (double) $row[$startcol + 43] : null;
            $this->feedtotal = ($row[$startcol + 44] !== null) ? (double) $row[$startcol + 44] : null;
            $this->feedtype = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->feedquanity = ($row[$startcol + 46] !== null) ? (double) $row[$startcol + 46] : null;
            $this->n = ($row[$startcol + 47] !== null) ? (double) $row[$startcol + 47] : null;
            $this->nunit = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->p = ($row[$startcol + 49] !== null) ? (double) $row[$startcol + 49] : null;
            $this->punit = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->productionperiod = ($row[$startcol + 51] !== null) ? (int) $row[$startcol + 51] : null;
            $this->entered = ($row[$startcol + 52] !== null) ? (int) $row[$startcol + 52] : null;
            $this->dateentered = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->modified = ($row[$startcol + 54] !== null) ? (int) $row[$startcol + 54] : null;
            $this->datemodified = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->expert = ($row[$startcol + 56] !== null) ? (int) $row[$startcol + 56] : null;
            $this->datechecked = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->describecult = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->describefood = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->comments = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->ts = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 62; // 62 = CultsysPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Cultsys object", $e);
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
            $con = Propel::getConnection(CultsysPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CultsysPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CultsysPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CultsysQuery::create()
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
            $con = Propel::getConnection(CultsysPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CultsysPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(CultsysPeer::CULTCODE)) {
            $modifiedColumns[':p' . $index++]  = '`CultCode`';
        }
        if ($this->isColumnModified(CultsysPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(CultsysPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(CultsysPeer::CULTSYSREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`CultSysRefNo`';
        }
        if ($this->isColumnModified(CultsysPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(CultsysPeer::NAMEOFFARM)) {
            $modifiedColumns[':p' . $index++]  = '`NameofFarm`';
        }
        if ($this->isColumnModified(CultsysPeer::YEAR)) {
            $modifiedColumns[':p' . $index++]  = '`Year`';
        }
        if ($this->isColumnModified(CultsysPeer::LATITUDE)) {
            $modifiedColumns[':p' . $index++]  = '`Latitude`';
        }
        if ($this->isColumnModified(CultsysPeer::NS)) {
            $modifiedColumns[':p' . $index++]  = '`NS`';
        }
        if ($this->isColumnModified(CultsysPeer::LONGITUDE)) {
            $modifiedColumns[':p' . $index++]  = '`Longitude`';
        }
        if ($this->isColumnModified(CultsysPeer::EW)) {
            $modifiedColumns[':p' . $index++]  = '`EW`';
        }
        if ($this->isColumnModified(CultsysPeer::ALTITUDE)) {
            $modifiedColumns[':p' . $index++]  = '`Altitude`';
        }
        if ($this->isColumnModified(CultsysPeer::ENVIRONMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Environment`';
        }
        if ($this->isColumnModified(CultsysPeer::TYPEOFCULTURE)) {
            $modifiedColumns[':p' . $index++]  = '`TypeofCulture`';
        }
        if ($this->isColumnModified(CultsysPeer::SEXOFFISH)) {
            $modifiedColumns[':p' . $index++]  = '`SexofFish`';
        }
        if ($this->isColumnModified(CultsysPeer::CULTUREI)) {
            $modifiedColumns[':p' . $index++]  = '`CultureI`';
        }
        if ($this->isColumnModified(CultsysPeer::CULTUREII)) {
            $modifiedColumns[':p' . $index++]  = '`CultureII`';
        }
        if ($this->isColumnModified(CultsysPeer::UNITCYCLE)) {
            $modifiedColumns[':p' . $index++]  = '`UnitCycle`';
        }
        if ($this->isColumnModified(CultsysPeer::PRODUCTIONUNITS)) {
            $modifiedColumns[':p' . $index++]  = '`ProductionUnits`';
        }
        if ($this->isColumnModified(CultsysPeer::AREA)) {
            $modifiedColumns[':p' . $index++]  = '`Area`';
        }
        if ($this->isColumnModified(CultsysPeer::AVERAGEDEPTH)) {
            $modifiedColumns[':p' . $index++]  = '`AverageDepth`';
        }
        if ($this->isColumnModified(CultsysPeer::VOLUME)) {
            $modifiedColumns[':p' . $index++]  = '`Volume`';
        }
        if ($this->isColumnModified(CultsysPeer::MAINWATERSOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`MainWaterSource`';
        }
        if ($this->isColumnModified(CultsysPeer::SUPPWATERSOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`SuppWaterSource`';
        }
        if ($this->isColumnModified(CultsysPeer::TEMPMAX)) {
            $modifiedColumns[':p' . $index++]  = '`TempMax`';
        }
        if ($this->isColumnModified(CultsysPeer::SALINMAX)) {
            $modifiedColumns[':p' . $index++]  = '`SalinMax`';
        }
        if ($this->isColumnModified(CultsysPeer::PHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`pHMax`';
        }
        if ($this->isColumnModified(CultsysPeer::OXYGENMAX)) {
            $modifiedColumns[':p' . $index++]  = '`OxygenMax`';
        }
        if ($this->isColumnModified(CultsysPeer::SATURATIONMAX)) {
            $modifiedColumns[':p' . $index++]  = '`SaturationMax`';
        }
        if ($this->isColumnModified(CultsysPeer::ALCALINITYMAX)) {
            $modifiedColumns[':p' . $index++]  = '`AlcalinityMax`';
        }
        if ($this->isColumnModified(CultsysPeer::TEMPMIN)) {
            $modifiedColumns[':p' . $index++]  = '`TempMin`';
        }
        if ($this->isColumnModified(CultsysPeer::SALINMIN)) {
            $modifiedColumns[':p' . $index++]  = '`SalinMin`';
        }
        if ($this->isColumnModified(CultsysPeer::PHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`pHMin`';
        }
        if ($this->isColumnModified(CultsysPeer::OXYGENMIN)) {
            $modifiedColumns[':p' . $index++]  = '`OxygenMin`';
        }
        if ($this->isColumnModified(CultsysPeer::SATURATIONMIN)) {
            $modifiedColumns[':p' . $index++]  = '`SaturationMin`';
        }
        if ($this->isColumnModified(CultsysPeer::ALCALINITYMIN)) {
            $modifiedColumns[':p' . $index++]  = '`AlcalinityMin`';
        }
        if ($this->isColumnModified(CultsysPeer::TEMPMOD)) {
            $modifiedColumns[':p' . $index++]  = '`TempMod`';
        }
        if ($this->isColumnModified(CultsysPeer::SALINMOD)) {
            $modifiedColumns[':p' . $index++]  = '`SalinMod`';
        }
        if ($this->isColumnModified(CultsysPeer::PHMOD)) {
            $modifiedColumns[':p' . $index++]  = '`pHMod`';
        }
        if ($this->isColumnModified(CultsysPeer::OXYGENMOD)) {
            $modifiedColumns[':p' . $index++]  = '`OxygenMod`';
        }
        if ($this->isColumnModified(CultsysPeer::SATURATIONMOD)) {
            $modifiedColumns[':p' . $index++]  = '`SaturationMod`';
        }
        if ($this->isColumnModified(CultsysPeer::ALCALINITYMOD)) {
            $modifiedColumns[':p' . $index++]  = '`AlcalinityMod`';
        }
        if ($this->isColumnModified(CultsysPeer::FOODI)) {
            $modifiedColumns[':p' . $index++]  = '`FoodI`';
        }
        if ($this->isColumnModified(CultsysPeer::FEEDQUALITY)) {
            $modifiedColumns[':p' . $index++]  = '`FeedQuality`';
        }
        if ($this->isColumnModified(CultsysPeer::FEEDTOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`FeedTotal`';
        }
        if ($this->isColumnModified(CultsysPeer::FEEDTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`FeedType`';
        }
        if ($this->isColumnModified(CultsysPeer::FEEDQUANITY)) {
            $modifiedColumns[':p' . $index++]  = '`FeedQuanity`';
        }
        if ($this->isColumnModified(CultsysPeer::N)) {
            $modifiedColumns[':p' . $index++]  = '`N`';
        }
        if ($this->isColumnModified(CultsysPeer::NUNIT)) {
            $modifiedColumns[':p' . $index++]  = '`NUnit`';
        }
        if ($this->isColumnModified(CultsysPeer::P)) {
            $modifiedColumns[':p' . $index++]  = '`P`';
        }
        if ($this->isColumnModified(CultsysPeer::PUNIT)) {
            $modifiedColumns[':p' . $index++]  = '`PUnit`';
        }
        if ($this->isColumnModified(CultsysPeer::PRODUCTIONPERIOD)) {
            $modifiedColumns[':p' . $index++]  = '`ProductionPeriod`';
        }
        if ($this->isColumnModified(CultsysPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(CultsysPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(CultsysPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(CultsysPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(CultsysPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(CultsysPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(CultsysPeer::DESCRIBECULT)) {
            $modifiedColumns[':p' . $index++]  = '`DescribeCult`';
        }
        if ($this->isColumnModified(CultsysPeer::DESCRIBEFOOD)) {
            $modifiedColumns[':p' . $index++]  = '`DescribeFood`';
        }
        if ($this->isColumnModified(CultsysPeer::COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`Comments`';
        }
        if ($this->isColumnModified(CultsysPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `cultsys` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`CultCode`':
                        $stmt->bindValue($identifier, $this->cultcode, PDO::PARAM_INT);
                        break;
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`CultSysRefNo`':
                        $stmt->bindValue($identifier, $this->cultsysrefno, PDO::PARAM_INT);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`NameofFarm`':
                        $stmt->bindValue($identifier, $this->nameoffarm, PDO::PARAM_STR);
                        break;
                    case '`Year`':
                        $stmt->bindValue($identifier, $this->year, PDO::PARAM_INT);
                        break;
                    case '`Latitude`':
                        $stmt->bindValue($identifier, $this->latitude, PDO::PARAM_STR);
                        break;
                    case '`NS`':
                        $stmt->bindValue($identifier, $this->ns, PDO::PARAM_STR);
                        break;
                    case '`Longitude`':
                        $stmt->bindValue($identifier, $this->longitude, PDO::PARAM_STR);
                        break;
                    case '`EW`':
                        $stmt->bindValue($identifier, $this->ew, PDO::PARAM_STR);
                        break;
                    case '`Altitude`':
                        $stmt->bindValue($identifier, $this->altitude, PDO::PARAM_INT);
                        break;
                    case '`Environment`':
                        $stmt->bindValue($identifier, $this->environment, PDO::PARAM_STR);
                        break;
                    case '`TypeofCulture`':
                        $stmt->bindValue($identifier, $this->typeofculture, PDO::PARAM_STR);
                        break;
                    case '`SexofFish`':
                        $stmt->bindValue($identifier, $this->sexoffish, PDO::PARAM_STR);
                        break;
                    case '`CultureI`':
                        $stmt->bindValue($identifier, $this->culturei, PDO::PARAM_STR);
                        break;
                    case '`CultureII`':
                        $stmt->bindValue($identifier, $this->cultureii, PDO::PARAM_STR);
                        break;
                    case '`UnitCycle`':
                        $stmt->bindValue($identifier, $this->unitcycle, PDO::PARAM_STR);
                        break;
                    case '`ProductionUnits`':
                        $stmt->bindValue($identifier, $this->productionunits, PDO::PARAM_INT);
                        break;
                    case '`Area`':
                        $stmt->bindValue($identifier, $this->area, PDO::PARAM_STR);
                        break;
                    case '`AverageDepth`':
                        $stmt->bindValue($identifier, $this->averagedepth, PDO::PARAM_STR);
                        break;
                    case '`Volume`':
                        $stmt->bindValue($identifier, $this->volume, PDO::PARAM_STR);
                        break;
                    case '`MainWaterSource`':
                        $stmt->bindValue($identifier, $this->mainwatersource, PDO::PARAM_STR);
                        break;
                    case '`SuppWaterSource`':
                        $stmt->bindValue($identifier, $this->suppwatersource, PDO::PARAM_STR);
                        break;
                    case '`TempMax`':
                        $stmt->bindValue($identifier, $this->tempmax, PDO::PARAM_STR);
                        break;
                    case '`SalinMax`':
                        $stmt->bindValue($identifier, $this->salinmax, PDO::PARAM_STR);
                        break;
                    case '`pHMax`':
                        $stmt->bindValue($identifier, $this->phmax, PDO::PARAM_STR);
                        break;
                    case '`OxygenMax`':
                        $stmt->bindValue($identifier, $this->oxygenmax, PDO::PARAM_STR);
                        break;
                    case '`SaturationMax`':
                        $stmt->bindValue($identifier, $this->saturationmax, PDO::PARAM_STR);
                        break;
                    case '`AlcalinityMax`':
                        $stmt->bindValue($identifier, $this->alcalinitymax, PDO::PARAM_STR);
                        break;
                    case '`TempMin`':
                        $stmt->bindValue($identifier, $this->tempmin, PDO::PARAM_STR);
                        break;
                    case '`SalinMin`':
                        $stmt->bindValue($identifier, $this->salinmin, PDO::PARAM_STR);
                        break;
                    case '`pHMin`':
                        $stmt->bindValue($identifier, $this->phmin, PDO::PARAM_STR);
                        break;
                    case '`OxygenMin`':
                        $stmt->bindValue($identifier, $this->oxygenmin, PDO::PARAM_STR);
                        break;
                    case '`SaturationMin`':
                        $stmt->bindValue($identifier, $this->saturationmin, PDO::PARAM_STR);
                        break;
                    case '`AlcalinityMin`':
                        $stmt->bindValue($identifier, $this->alcalinitymin, PDO::PARAM_STR);
                        break;
                    case '`TempMod`':
                        $stmt->bindValue($identifier, $this->tempmod, PDO::PARAM_STR);
                        break;
                    case '`SalinMod`':
                        $stmt->bindValue($identifier, $this->salinmod, PDO::PARAM_STR);
                        break;
                    case '`pHMod`':
                        $stmt->bindValue($identifier, $this->phmod, PDO::PARAM_STR);
                        break;
                    case '`OxygenMod`':
                        $stmt->bindValue($identifier, $this->oxygenmod, PDO::PARAM_STR);
                        break;
                    case '`SaturationMod`':
                        $stmt->bindValue($identifier, $this->saturationmod, PDO::PARAM_STR);
                        break;
                    case '`AlcalinityMod`':
                        $stmt->bindValue($identifier, $this->alcalinitymod, PDO::PARAM_STR);
                        break;
                    case '`FoodI`':
                        $stmt->bindValue($identifier, $this->foodi, PDO::PARAM_STR);
                        break;
                    case '`FeedQuality`':
                        $stmt->bindValue($identifier, $this->feedquality, PDO::PARAM_STR);
                        break;
                    case '`FeedTotal`':
                        $stmt->bindValue($identifier, $this->feedtotal, PDO::PARAM_STR);
                        break;
                    case '`FeedType`':
                        $stmt->bindValue($identifier, $this->feedtype, PDO::PARAM_STR);
                        break;
                    case '`FeedQuanity`':
                        $stmt->bindValue($identifier, $this->feedquanity, PDO::PARAM_STR);
                        break;
                    case '`N`':
                        $stmt->bindValue($identifier, $this->n, PDO::PARAM_STR);
                        break;
                    case '`NUnit`':
                        $stmt->bindValue($identifier, $this->nunit, PDO::PARAM_STR);
                        break;
                    case '`P`':
                        $stmt->bindValue($identifier, $this->p, PDO::PARAM_STR);
                        break;
                    case '`PUnit`':
                        $stmt->bindValue($identifier, $this->punit, PDO::PARAM_STR);
                        break;
                    case '`ProductionPeriod`':
                        $stmt->bindValue($identifier, $this->productionperiod, PDO::PARAM_INT);
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
                    case '`DescribeCult`':
                        $stmt->bindValue($identifier, $this->describecult, PDO::PARAM_STR);
                        break;
                    case '`DescribeFood`':
                        $stmt->bindValue($identifier, $this->describefood, PDO::PARAM_STR);
                        break;
                    case '`Comments`':
                        $stmt->bindValue($identifier, $this->comments, PDO::PARAM_STR);
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


            if (($retval = CultsysPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CultsysPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getCultcode();
                break;
            case 1:
                return $this->getStockcode();
                break;
            case 2:
                return $this->getSpeccode();
                break;
            case 3:
                return $this->getCultsysrefno();
                break;
            case 4:
                return $this->getCCode();
                break;
            case 5:
                return $this->getNameoffarm();
                break;
            case 6:
                return $this->getYear();
                break;
            case 7:
                return $this->getLatitude();
                break;
            case 8:
                return $this->getNs();
                break;
            case 9:
                return $this->getLongitude();
                break;
            case 10:
                return $this->getEw();
                break;
            case 11:
                return $this->getAltitude();
                break;
            case 12:
                return $this->getEnvironment();
                break;
            case 13:
                return $this->getTypeofculture();
                break;
            case 14:
                return $this->getSexoffish();
                break;
            case 15:
                return $this->getCulturei();
                break;
            case 16:
                return $this->getCultureii();
                break;
            case 17:
                return $this->getUnitcycle();
                break;
            case 18:
                return $this->getProductionunits();
                break;
            case 19:
                return $this->getArea();
                break;
            case 20:
                return $this->getAveragedepth();
                break;
            case 21:
                return $this->getVolume();
                break;
            case 22:
                return $this->getMainwatersource();
                break;
            case 23:
                return $this->getSuppwatersource();
                break;
            case 24:
                return $this->getTempmax();
                break;
            case 25:
                return $this->getSalinmax();
                break;
            case 26:
                return $this->getPhmax();
                break;
            case 27:
                return $this->getOxygenmax();
                break;
            case 28:
                return $this->getSaturationmax();
                break;
            case 29:
                return $this->getAlcalinitymax();
                break;
            case 30:
                return $this->getTempmin();
                break;
            case 31:
                return $this->getSalinmin();
                break;
            case 32:
                return $this->getPhmin();
                break;
            case 33:
                return $this->getOxygenmin();
                break;
            case 34:
                return $this->getSaturationmin();
                break;
            case 35:
                return $this->getAlcalinitymin();
                break;
            case 36:
                return $this->getTempmod();
                break;
            case 37:
                return $this->getSalinmod();
                break;
            case 38:
                return $this->getPhmod();
                break;
            case 39:
                return $this->getOxygenmod();
                break;
            case 40:
                return $this->getSaturationmod();
                break;
            case 41:
                return $this->getAlcalinitymod();
                break;
            case 42:
                return $this->getFoodi();
                break;
            case 43:
                return $this->getFeedquality();
                break;
            case 44:
                return $this->getFeedtotal();
                break;
            case 45:
                return $this->getFeedtype();
                break;
            case 46:
                return $this->getFeedquanity();
                break;
            case 47:
                return $this->getN();
                break;
            case 48:
                return $this->getNunit();
                break;
            case 49:
                return $this->getP();
                break;
            case 50:
                return $this->getPunit();
                break;
            case 51:
                return $this->getProductionperiod();
                break;
            case 52:
                return $this->getEntered();
                break;
            case 53:
                return $this->getDateentered();
                break;
            case 54:
                return $this->getModified();
                break;
            case 55:
                return $this->getDatemodified();
                break;
            case 56:
                return $this->getExpert();
                break;
            case 57:
                return $this->getDatechecked();
                break;
            case 58:
                return $this->getDescribecult();
                break;
            case 59:
                return $this->getDescribefood();
                break;
            case 60:
                return $this->getComments();
                break;
            case 61:
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
        if (isset($alreadyDumpedObjects['Cultsys'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Cultsys'][serialize($this->getPrimaryKey())] = true;
        $keys = CultsysPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getCultcode(),
            $keys[1] => $this->getStockcode(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getCultsysrefno(),
            $keys[4] => $this->getCCode(),
            $keys[5] => $this->getNameoffarm(),
            $keys[6] => $this->getYear(),
            $keys[7] => $this->getLatitude(),
            $keys[8] => $this->getNs(),
            $keys[9] => $this->getLongitude(),
            $keys[10] => $this->getEw(),
            $keys[11] => $this->getAltitude(),
            $keys[12] => $this->getEnvironment(),
            $keys[13] => $this->getTypeofculture(),
            $keys[14] => $this->getSexoffish(),
            $keys[15] => $this->getCulturei(),
            $keys[16] => $this->getCultureii(),
            $keys[17] => $this->getUnitcycle(),
            $keys[18] => $this->getProductionunits(),
            $keys[19] => $this->getArea(),
            $keys[20] => $this->getAveragedepth(),
            $keys[21] => $this->getVolume(),
            $keys[22] => $this->getMainwatersource(),
            $keys[23] => $this->getSuppwatersource(),
            $keys[24] => $this->getTempmax(),
            $keys[25] => $this->getSalinmax(),
            $keys[26] => $this->getPhmax(),
            $keys[27] => $this->getOxygenmax(),
            $keys[28] => $this->getSaturationmax(),
            $keys[29] => $this->getAlcalinitymax(),
            $keys[30] => $this->getTempmin(),
            $keys[31] => $this->getSalinmin(),
            $keys[32] => $this->getPhmin(),
            $keys[33] => $this->getOxygenmin(),
            $keys[34] => $this->getSaturationmin(),
            $keys[35] => $this->getAlcalinitymin(),
            $keys[36] => $this->getTempmod(),
            $keys[37] => $this->getSalinmod(),
            $keys[38] => $this->getPhmod(),
            $keys[39] => $this->getOxygenmod(),
            $keys[40] => $this->getSaturationmod(),
            $keys[41] => $this->getAlcalinitymod(),
            $keys[42] => $this->getFoodi(),
            $keys[43] => $this->getFeedquality(),
            $keys[44] => $this->getFeedtotal(),
            $keys[45] => $this->getFeedtype(),
            $keys[46] => $this->getFeedquanity(),
            $keys[47] => $this->getN(),
            $keys[48] => $this->getNunit(),
            $keys[49] => $this->getP(),
            $keys[50] => $this->getPunit(),
            $keys[51] => $this->getProductionperiod(),
            $keys[52] => $this->getEntered(),
            $keys[53] => $this->getDateentered(),
            $keys[54] => $this->getModified(),
            $keys[55] => $this->getDatemodified(),
            $keys[56] => $this->getExpert(),
            $keys[57] => $this->getDatechecked(),
            $keys[58] => $this->getDescribecult(),
            $keys[59] => $this->getDescribefood(),
            $keys[60] => $this->getComments(),
            $keys[61] => $this->getTs(),
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
        $pos = CultsysPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setCultcode($value);
                break;
            case 1:
                $this->setStockcode($value);
                break;
            case 2:
                $this->setSpeccode($value);
                break;
            case 3:
                $this->setCultsysrefno($value);
                break;
            case 4:
                $this->setCCode($value);
                break;
            case 5:
                $this->setNameoffarm($value);
                break;
            case 6:
                $this->setYear($value);
                break;
            case 7:
                $this->setLatitude($value);
                break;
            case 8:
                $this->setNs($value);
                break;
            case 9:
                $this->setLongitude($value);
                break;
            case 10:
                $this->setEw($value);
                break;
            case 11:
                $this->setAltitude($value);
                break;
            case 12:
                $this->setEnvironment($value);
                break;
            case 13:
                $this->setTypeofculture($value);
                break;
            case 14:
                $this->setSexoffish($value);
                break;
            case 15:
                $this->setCulturei($value);
                break;
            case 16:
                $this->setCultureii($value);
                break;
            case 17:
                $this->setUnitcycle($value);
                break;
            case 18:
                $this->setProductionunits($value);
                break;
            case 19:
                $this->setArea($value);
                break;
            case 20:
                $this->setAveragedepth($value);
                break;
            case 21:
                $this->setVolume($value);
                break;
            case 22:
                $this->setMainwatersource($value);
                break;
            case 23:
                $this->setSuppwatersource($value);
                break;
            case 24:
                $this->setTempmax($value);
                break;
            case 25:
                $this->setSalinmax($value);
                break;
            case 26:
                $this->setPhmax($value);
                break;
            case 27:
                $this->setOxygenmax($value);
                break;
            case 28:
                $this->setSaturationmax($value);
                break;
            case 29:
                $this->setAlcalinitymax($value);
                break;
            case 30:
                $this->setTempmin($value);
                break;
            case 31:
                $this->setSalinmin($value);
                break;
            case 32:
                $this->setPhmin($value);
                break;
            case 33:
                $this->setOxygenmin($value);
                break;
            case 34:
                $this->setSaturationmin($value);
                break;
            case 35:
                $this->setAlcalinitymin($value);
                break;
            case 36:
                $this->setTempmod($value);
                break;
            case 37:
                $this->setSalinmod($value);
                break;
            case 38:
                $this->setPhmod($value);
                break;
            case 39:
                $this->setOxygenmod($value);
                break;
            case 40:
                $this->setSaturationmod($value);
                break;
            case 41:
                $this->setAlcalinitymod($value);
                break;
            case 42:
                $this->setFoodi($value);
                break;
            case 43:
                $this->setFeedquality($value);
                break;
            case 44:
                $this->setFeedtotal($value);
                break;
            case 45:
                $this->setFeedtype($value);
                break;
            case 46:
                $this->setFeedquanity($value);
                break;
            case 47:
                $this->setN($value);
                break;
            case 48:
                $this->setNunit($value);
                break;
            case 49:
                $this->setP($value);
                break;
            case 50:
                $this->setPunit($value);
                break;
            case 51:
                $this->setProductionperiod($value);
                break;
            case 52:
                $this->setEntered($value);
                break;
            case 53:
                $this->setDateentered($value);
                break;
            case 54:
                $this->setModified($value);
                break;
            case 55:
                $this->setDatemodified($value);
                break;
            case 56:
                $this->setExpert($value);
                break;
            case 57:
                $this->setDatechecked($value);
                break;
            case 58:
                $this->setDescribecult($value);
                break;
            case 59:
                $this->setDescribefood($value);
                break;
            case 60:
                $this->setComments($value);
                break;
            case 61:
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
        $keys = CultsysPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setCultcode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCultsysrefno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCCode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setNameoffarm($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setYear($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLatitude($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setNs($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLongitude($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setEw($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAltitude($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setEnvironment($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setTypeofculture($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setSexoffish($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setCulturei($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setCultureii($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setUnitcycle($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setProductionunits($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setArea($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setAveragedepth($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setVolume($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setMainwatersource($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setSuppwatersource($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setTempmax($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setSalinmax($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setPhmax($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setOxygenmax($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setSaturationmax($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setAlcalinitymax($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setTempmin($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setSalinmin($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setPhmin($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setOxygenmin($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setSaturationmin($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setAlcalinitymin($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setTempmod($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setSalinmod($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setPhmod($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setOxygenmod($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setSaturationmod($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setAlcalinitymod($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setFoodi($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setFeedquality($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setFeedtotal($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setFeedtype($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setFeedquanity($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setN($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setNunit($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setP($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setPunit($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setProductionperiod($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setEntered($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setDateentered($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setModified($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setDatemodified($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setExpert($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setDatechecked($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setDescribecult($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setDescribefood($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setComments($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setTs($arr[$keys[61]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CultsysPeer::DATABASE_NAME);

        if ($this->isColumnModified(CultsysPeer::CULTCODE)) $criteria->add(CultsysPeer::CULTCODE, $this->cultcode);
        if ($this->isColumnModified(CultsysPeer::STOCKCODE)) $criteria->add(CultsysPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(CultsysPeer::SPECCODE)) $criteria->add(CultsysPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(CultsysPeer::CULTSYSREFNO)) $criteria->add(CultsysPeer::CULTSYSREFNO, $this->cultsysrefno);
        if ($this->isColumnModified(CultsysPeer::C_CODE)) $criteria->add(CultsysPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(CultsysPeer::NAMEOFFARM)) $criteria->add(CultsysPeer::NAMEOFFARM, $this->nameoffarm);
        if ($this->isColumnModified(CultsysPeer::YEAR)) $criteria->add(CultsysPeer::YEAR, $this->year);
        if ($this->isColumnModified(CultsysPeer::LATITUDE)) $criteria->add(CultsysPeer::LATITUDE, $this->latitude);
        if ($this->isColumnModified(CultsysPeer::NS)) $criteria->add(CultsysPeer::NS, $this->ns);
        if ($this->isColumnModified(CultsysPeer::LONGITUDE)) $criteria->add(CultsysPeer::LONGITUDE, $this->longitude);
        if ($this->isColumnModified(CultsysPeer::EW)) $criteria->add(CultsysPeer::EW, $this->ew);
        if ($this->isColumnModified(CultsysPeer::ALTITUDE)) $criteria->add(CultsysPeer::ALTITUDE, $this->altitude);
        if ($this->isColumnModified(CultsysPeer::ENVIRONMENT)) $criteria->add(CultsysPeer::ENVIRONMENT, $this->environment);
        if ($this->isColumnModified(CultsysPeer::TYPEOFCULTURE)) $criteria->add(CultsysPeer::TYPEOFCULTURE, $this->typeofculture);
        if ($this->isColumnModified(CultsysPeer::SEXOFFISH)) $criteria->add(CultsysPeer::SEXOFFISH, $this->sexoffish);
        if ($this->isColumnModified(CultsysPeer::CULTUREI)) $criteria->add(CultsysPeer::CULTUREI, $this->culturei);
        if ($this->isColumnModified(CultsysPeer::CULTUREII)) $criteria->add(CultsysPeer::CULTUREII, $this->cultureii);
        if ($this->isColumnModified(CultsysPeer::UNITCYCLE)) $criteria->add(CultsysPeer::UNITCYCLE, $this->unitcycle);
        if ($this->isColumnModified(CultsysPeer::PRODUCTIONUNITS)) $criteria->add(CultsysPeer::PRODUCTIONUNITS, $this->productionunits);
        if ($this->isColumnModified(CultsysPeer::AREA)) $criteria->add(CultsysPeer::AREA, $this->area);
        if ($this->isColumnModified(CultsysPeer::AVERAGEDEPTH)) $criteria->add(CultsysPeer::AVERAGEDEPTH, $this->averagedepth);
        if ($this->isColumnModified(CultsysPeer::VOLUME)) $criteria->add(CultsysPeer::VOLUME, $this->volume);
        if ($this->isColumnModified(CultsysPeer::MAINWATERSOURCE)) $criteria->add(CultsysPeer::MAINWATERSOURCE, $this->mainwatersource);
        if ($this->isColumnModified(CultsysPeer::SUPPWATERSOURCE)) $criteria->add(CultsysPeer::SUPPWATERSOURCE, $this->suppwatersource);
        if ($this->isColumnModified(CultsysPeer::TEMPMAX)) $criteria->add(CultsysPeer::TEMPMAX, $this->tempmax);
        if ($this->isColumnModified(CultsysPeer::SALINMAX)) $criteria->add(CultsysPeer::SALINMAX, $this->salinmax);
        if ($this->isColumnModified(CultsysPeer::PHMAX)) $criteria->add(CultsysPeer::PHMAX, $this->phmax);
        if ($this->isColumnModified(CultsysPeer::OXYGENMAX)) $criteria->add(CultsysPeer::OXYGENMAX, $this->oxygenmax);
        if ($this->isColumnModified(CultsysPeer::SATURATIONMAX)) $criteria->add(CultsysPeer::SATURATIONMAX, $this->saturationmax);
        if ($this->isColumnModified(CultsysPeer::ALCALINITYMAX)) $criteria->add(CultsysPeer::ALCALINITYMAX, $this->alcalinitymax);
        if ($this->isColumnModified(CultsysPeer::TEMPMIN)) $criteria->add(CultsysPeer::TEMPMIN, $this->tempmin);
        if ($this->isColumnModified(CultsysPeer::SALINMIN)) $criteria->add(CultsysPeer::SALINMIN, $this->salinmin);
        if ($this->isColumnModified(CultsysPeer::PHMIN)) $criteria->add(CultsysPeer::PHMIN, $this->phmin);
        if ($this->isColumnModified(CultsysPeer::OXYGENMIN)) $criteria->add(CultsysPeer::OXYGENMIN, $this->oxygenmin);
        if ($this->isColumnModified(CultsysPeer::SATURATIONMIN)) $criteria->add(CultsysPeer::SATURATIONMIN, $this->saturationmin);
        if ($this->isColumnModified(CultsysPeer::ALCALINITYMIN)) $criteria->add(CultsysPeer::ALCALINITYMIN, $this->alcalinitymin);
        if ($this->isColumnModified(CultsysPeer::TEMPMOD)) $criteria->add(CultsysPeer::TEMPMOD, $this->tempmod);
        if ($this->isColumnModified(CultsysPeer::SALINMOD)) $criteria->add(CultsysPeer::SALINMOD, $this->salinmod);
        if ($this->isColumnModified(CultsysPeer::PHMOD)) $criteria->add(CultsysPeer::PHMOD, $this->phmod);
        if ($this->isColumnModified(CultsysPeer::OXYGENMOD)) $criteria->add(CultsysPeer::OXYGENMOD, $this->oxygenmod);
        if ($this->isColumnModified(CultsysPeer::SATURATIONMOD)) $criteria->add(CultsysPeer::SATURATIONMOD, $this->saturationmod);
        if ($this->isColumnModified(CultsysPeer::ALCALINITYMOD)) $criteria->add(CultsysPeer::ALCALINITYMOD, $this->alcalinitymod);
        if ($this->isColumnModified(CultsysPeer::FOODI)) $criteria->add(CultsysPeer::FOODI, $this->foodi);
        if ($this->isColumnModified(CultsysPeer::FEEDQUALITY)) $criteria->add(CultsysPeer::FEEDQUALITY, $this->feedquality);
        if ($this->isColumnModified(CultsysPeer::FEEDTOTAL)) $criteria->add(CultsysPeer::FEEDTOTAL, $this->feedtotal);
        if ($this->isColumnModified(CultsysPeer::FEEDTYPE)) $criteria->add(CultsysPeer::FEEDTYPE, $this->feedtype);
        if ($this->isColumnModified(CultsysPeer::FEEDQUANITY)) $criteria->add(CultsysPeer::FEEDQUANITY, $this->feedquanity);
        if ($this->isColumnModified(CultsysPeer::N)) $criteria->add(CultsysPeer::N, $this->n);
        if ($this->isColumnModified(CultsysPeer::NUNIT)) $criteria->add(CultsysPeer::NUNIT, $this->nunit);
        if ($this->isColumnModified(CultsysPeer::P)) $criteria->add(CultsysPeer::P, $this->p);
        if ($this->isColumnModified(CultsysPeer::PUNIT)) $criteria->add(CultsysPeer::PUNIT, $this->punit);
        if ($this->isColumnModified(CultsysPeer::PRODUCTIONPERIOD)) $criteria->add(CultsysPeer::PRODUCTIONPERIOD, $this->productionperiod);
        if ($this->isColumnModified(CultsysPeer::ENTERED)) $criteria->add(CultsysPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(CultsysPeer::DATEENTERED)) $criteria->add(CultsysPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(CultsysPeer::MODIFIED)) $criteria->add(CultsysPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(CultsysPeer::DATEMODIFIED)) $criteria->add(CultsysPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(CultsysPeer::EXPERT)) $criteria->add(CultsysPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(CultsysPeer::DATECHECKED)) $criteria->add(CultsysPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(CultsysPeer::DESCRIBECULT)) $criteria->add(CultsysPeer::DESCRIBECULT, $this->describecult);
        if ($this->isColumnModified(CultsysPeer::DESCRIBEFOOD)) $criteria->add(CultsysPeer::DESCRIBEFOOD, $this->describefood);
        if ($this->isColumnModified(CultsysPeer::COMMENTS)) $criteria->add(CultsysPeer::COMMENTS, $this->comments);
        if ($this->isColumnModified(CultsysPeer::TS)) $criteria->add(CultsysPeer::TS, $this->ts);

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
        $criteria = new Criteria(CultsysPeer::DATABASE_NAME);
        $criteria->add(CultsysPeer::STOCKCODE, $this->stockcode);
        $criteria->add(CultsysPeer::CULTSYSREFNO, $this->cultsysrefno);
        $criteria->add(CultsysPeer::ENVIRONMENT, $this->environment);

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
        $pks[1] = $this->getCultsysrefno();
        $pks[2] = $this->getEnvironment();

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
        $this->setCultsysrefno($keys[1]);
        $this->setEnvironment($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getStockcode()) && (null === $this->getCultsysrefno()) && (null === $this->getEnvironment());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Cultsys (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setCultsysrefno($this->getCultsysrefno());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setNameoffarm($this->getNameoffarm());
        $copyObj->setYear($this->getYear());
        $copyObj->setLatitude($this->getLatitude());
        $copyObj->setNs($this->getNs());
        $copyObj->setLongitude($this->getLongitude());
        $copyObj->setEw($this->getEw());
        $copyObj->setAltitude($this->getAltitude());
        $copyObj->setEnvironment($this->getEnvironment());
        $copyObj->setTypeofculture($this->getTypeofculture());
        $copyObj->setSexoffish($this->getSexoffish());
        $copyObj->setCulturei($this->getCulturei());
        $copyObj->setCultureii($this->getCultureii());
        $copyObj->setUnitcycle($this->getUnitcycle());
        $copyObj->setProductionunits($this->getProductionunits());
        $copyObj->setArea($this->getArea());
        $copyObj->setAveragedepth($this->getAveragedepth());
        $copyObj->setVolume($this->getVolume());
        $copyObj->setMainwatersource($this->getMainwatersource());
        $copyObj->setSuppwatersource($this->getSuppwatersource());
        $copyObj->setTempmax($this->getTempmax());
        $copyObj->setSalinmax($this->getSalinmax());
        $copyObj->setPhmax($this->getPhmax());
        $copyObj->setOxygenmax($this->getOxygenmax());
        $copyObj->setSaturationmax($this->getSaturationmax());
        $copyObj->setAlcalinitymax($this->getAlcalinitymax());
        $copyObj->setTempmin($this->getTempmin());
        $copyObj->setSalinmin($this->getSalinmin());
        $copyObj->setPhmin($this->getPhmin());
        $copyObj->setOxygenmin($this->getOxygenmin());
        $copyObj->setSaturationmin($this->getSaturationmin());
        $copyObj->setAlcalinitymin($this->getAlcalinitymin());
        $copyObj->setTempmod($this->getTempmod());
        $copyObj->setSalinmod($this->getSalinmod());
        $copyObj->setPhmod($this->getPhmod());
        $copyObj->setOxygenmod($this->getOxygenmod());
        $copyObj->setSaturationmod($this->getSaturationmod());
        $copyObj->setAlcalinitymod($this->getAlcalinitymod());
        $copyObj->setFoodi($this->getFoodi());
        $copyObj->setFeedquality($this->getFeedquality());
        $copyObj->setFeedtotal($this->getFeedtotal());
        $copyObj->setFeedtype($this->getFeedtype());
        $copyObj->setFeedquanity($this->getFeedquanity());
        $copyObj->setN($this->getN());
        $copyObj->setNunit($this->getNunit());
        $copyObj->setP($this->getP());
        $copyObj->setPunit($this->getPunit());
        $copyObj->setProductionperiod($this->getProductionperiod());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setDescribecult($this->getDescribecult());
        $copyObj->setDescribefood($this->getDescribefood());
        $copyObj->setComments($this->getComments());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setCultcode(NULL); // this is a auto-increment column, so set to default value
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
     * @return Cultsys Clone of current object.
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
     * @return CultsysPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CultsysPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->cultcode = null;
        $this->stockcode = null;
        $this->speccode = null;
        $this->cultsysrefno = null;
        $this->c_code = null;
        $this->nameoffarm = null;
        $this->year = null;
        $this->latitude = null;
        $this->ns = null;
        $this->longitude = null;
        $this->ew = null;
        $this->altitude = null;
        $this->environment = null;
        $this->typeofculture = null;
        $this->sexoffish = null;
        $this->culturei = null;
        $this->cultureii = null;
        $this->unitcycle = null;
        $this->productionunits = null;
        $this->area = null;
        $this->averagedepth = null;
        $this->volume = null;
        $this->mainwatersource = null;
        $this->suppwatersource = null;
        $this->tempmax = null;
        $this->salinmax = null;
        $this->phmax = null;
        $this->oxygenmax = null;
        $this->saturationmax = null;
        $this->alcalinitymax = null;
        $this->tempmin = null;
        $this->salinmin = null;
        $this->phmin = null;
        $this->oxygenmin = null;
        $this->saturationmin = null;
        $this->alcalinitymin = null;
        $this->tempmod = null;
        $this->salinmod = null;
        $this->phmod = null;
        $this->oxygenmod = null;
        $this->saturationmod = null;
        $this->alcalinitymod = null;
        $this->foodi = null;
        $this->feedquality = null;
        $this->feedtotal = null;
        $this->feedtype = null;
        $this->feedquanity = null;
        $this->n = null;
        $this->nunit = null;
        $this->p = null;
        $this->punit = null;
        $this->productionperiod = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->describecult = null;
        $this->describefood = null;
        $this->comments = null;
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
        return (string) $this->exportTo(CultsysPeer::DEFAULT_STRING_FORMAT);
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
