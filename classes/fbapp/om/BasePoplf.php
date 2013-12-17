<?php


/**
 * Base class that represents a row from the 'poplf' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BasePoplf extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PoplfPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PoplfPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the lfcode field.
     * @var        int
     */
    protected $lfcode;

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
     * The value for the lfrefno field.
     * @var        int
     */
    protected $lfrefno;

    /**
     * The value for the sex field.
     * @var        string
     */
    protected $sex;

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
     * The value for the latdeg field.
     * @var        int
     */
    protected $latdeg;

    /**
     * The value for the latmin field.
     * @var        double
     */
    protected $latmin;

    /**
     * The value for the northsouth field.
     * @var        string
     */
    protected $northsouth;

    /**
     * The value for the latdegs field.
     * @var        int
     */
    protected $latdegs;

    /**
     * The value for the latmins field.
     * @var        double
     */
    protected $latmins;

    /**
     * The value for the northsouths field.
     * @var        string
     */
    protected $northsouths;

    /**
     * The value for the longdeg field.
     * @var        int
     */
    protected $longdeg;

    /**
     * The value for the longmin field.
     * @var        double
     */
    protected $longmin;

    /**
     * The value for the eastwest field.
     * @var        string
     */
    protected $eastwest;

    /**
     * The value for the longdege field.
     * @var        int
     */
    protected $longdege;

    /**
     * The value for the longmine field.
     * @var        double
     */
    protected $longmine;

    /**
     * The value for the eastweste field.
     * @var        string
     */
    protected $eastweste;

    /**
     * The value for the accuracy field.
     * @var        string
     */
    protected $accuracy;

    /**
     * The value for the depthmin field.
     * @var        int
     */
    protected $depthmin;

    /**
     * The value for the depthmax field.
     * @var        int
     */
    protected $depthmax;

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
     * The value for the mlmin field.
     * @var        double
     */
    protected $mlmin;

    /**
     * The value for the mlmax field.
     * @var        double
     */
    protected $mlmax;

    /**
     * The value for the meanlength field.
     * @var        double
     */
    protected $meanlength;

    /**
     * The value for the lm field.
     * @var        double
     */
    protected $lm;

    /**
     * The value for the loo field.
     * @var        double
     */
    protected $loo;

    /**
     * The value for the lopt field.
     * @var        double
     */
    protected $lopt;

    /**
     * The value for the lc field.
     * @var        double
     */
    protected $lc;

    /**
     * The value for the sourcelinf field.
     * @var        string
     */
    protected $sourcelinf;

    /**
     * The value for the a field.
     * @var        double
     */
    protected $a;

    /**
     * The value for the b field.
     * @var        double
     */
    protected $b;

    /**
     * The value for the lwref field.
     * @var        int
     */
    protected $lwref;

    /**
     * The value for the ltype field.
     * @var        string
     */
    protected $ltype;

    /**
     * The value for the f field.
     * @var        double
     */
    protected $f;

    /**
     * The value for the z field.
     * @var        double
     */
    protected $z;

    /**
     * The value for the e field.
     * @var        double
     */
    protected $e;

    /**
     * The value for the m field.
     * @var        double
     */
    protected $m;

    /**
     * The value for the unexploited field.
     * @var        int
     */
    protected $unexploited;

    /**
     * The value for the datatype field.
     * @var        string
     */
    protected $datatype;

    /**
     * The value for the growthloo field.
     * @var        double
     */
    protected $growthloo;

    /**
     * The value for the growthk field.
     * @var        double
     */
    protected $growthk;

    /**
     * The value for the growthref field.
     * @var        int
     */
    protected $growthref;

    /**
     * The value for the growthm field.
     * @var        double
     */
    protected $growthm;

    /**
     * The value for the growthmref field.
     * @var        int
     */
    protected $growthmref;

    /**
     * The value for the tm field.
     * @var        double
     */
    protected $tm;

    /**
     * The value for the frequencytype field.
     * @var        string
     */
    protected $frequencytype;

    /**
     * The value for the classinterval field.
     * @var        double
     */
    protected $classinterval;

    /**
     * The value for the gear field.
     * @var        string
     */
    protected $gear;

    /**
     * The value for the gearii field.
     * @var        string
     */
    protected $gearii;

    /**
     * The value for the yearfrom field.
     * @var        int
     */
    protected $yearfrom;

    /**
     * The value for the yearto field.
     * @var        int
     */
    protected $yearto;

    /**
     * The value for the remark field.
     * @var        string
     */
    protected $remark;

    /**
     * The value for the provider field.
     * @var        string
     */
    protected $provider;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

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
     * Get the [lfcode] column value.
     *
     * @return int
     */
    public function getLfcode()
    {

        return $this->lfcode;
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
     * Get the [lfrefno] column value.
     *
     * @return int
     */
    public function getLfrefno()
    {

        return $this->lfrefno;
    }

    /**
     * Get the [sex] column value.
     *
     * @return string
     */
    public function getSex()
    {

        return $this->sex;
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
     * Get the [latdeg] column value.
     *
     * @return int
     */
    public function getLatdeg()
    {

        return $this->latdeg;
    }

    /**
     * Get the [latmin] column value.
     *
     * @return double
     */
    public function getLatmin()
    {

        return $this->latmin;
    }

    /**
     * Get the [northsouth] column value.
     *
     * @return string
     */
    public function getNorthsouth()
    {

        return $this->northsouth;
    }

    /**
     * Get the [latdegs] column value.
     *
     * @return int
     */
    public function getLatdegs()
    {

        return $this->latdegs;
    }

    /**
     * Get the [latmins] column value.
     *
     * @return double
     */
    public function getLatmins()
    {

        return $this->latmins;
    }

    /**
     * Get the [northsouths] column value.
     *
     * @return string
     */
    public function getNorthsouths()
    {

        return $this->northsouths;
    }

    /**
     * Get the [longdeg] column value.
     *
     * @return int
     */
    public function getLongdeg()
    {

        return $this->longdeg;
    }

    /**
     * Get the [longmin] column value.
     *
     * @return double
     */
    public function getLongmin()
    {

        return $this->longmin;
    }

    /**
     * Get the [eastwest] column value.
     *
     * @return string
     */
    public function getEastwest()
    {

        return $this->eastwest;
    }

    /**
     * Get the [longdege] column value.
     *
     * @return int
     */
    public function getLongdege()
    {

        return $this->longdege;
    }

    /**
     * Get the [longmine] column value.
     *
     * @return double
     */
    public function getLongmine()
    {

        return $this->longmine;
    }

    /**
     * Get the [eastweste] column value.
     *
     * @return string
     */
    public function getEastweste()
    {

        return $this->eastweste;
    }

    /**
     * Get the [accuracy] column value.
     *
     * @return string
     */
    public function getAccuracy()
    {

        return $this->accuracy;
    }

    /**
     * Get the [depthmin] column value.
     *
     * @return int
     */
    public function getDepthmin()
    {

        return $this->depthmin;
    }

    /**
     * Get the [depthmax] column value.
     *
     * @return int
     */
    public function getDepthmax()
    {

        return $this->depthmax;
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
     * Get the [mlmin] column value.
     *
     * @return double
     */
    public function getMlmin()
    {

        return $this->mlmin;
    }

    /**
     * Get the [mlmax] column value.
     *
     * @return double
     */
    public function getMlmax()
    {

        return $this->mlmax;
    }

    /**
     * Get the [meanlength] column value.
     *
     * @return double
     */
    public function getMeanlength()
    {

        return $this->meanlength;
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
     * Get the [loo] column value.
     *
     * @return double
     */
    public function getLoo()
    {

        return $this->loo;
    }

    /**
     * Get the [lopt] column value.
     *
     * @return double
     */
    public function getLopt()
    {

        return $this->lopt;
    }

    /**
     * Get the [lc] column value.
     *
     * @return double
     */
    public function getLc()
    {

        return $this->lc;
    }

    /**
     * Get the [sourcelinf] column value.
     *
     * @return string
     */
    public function getSourcelinf()
    {

        return $this->sourcelinf;
    }

    /**
     * Get the [a] column value.
     *
     * @return double
     */
    public function getA()
    {

        return $this->a;
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
     * Get the [lwref] column value.
     *
     * @return int
     */
    public function getLwref()
    {

        return $this->lwref;
    }

    /**
     * Get the [ltype] column value.
     *
     * @return string
     */
    public function getLtype()
    {

        return $this->ltype;
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
     * Get the [z] column value.
     *
     * @return double
     */
    public function getZ()
    {

        return $this->z;
    }

    /**
     * Get the [e] column value.
     *
     * @return double
     */
    public function getE()
    {

        return $this->e;
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
     * Get the [unexploited] column value.
     *
     * @return int
     */
    public function getUnexploited()
    {

        return $this->unexploited;
    }

    /**
     * Get the [datatype] column value.
     *
     * @return string
     */
    public function getDatatype()
    {

        return $this->datatype;
    }

    /**
     * Get the [growthloo] column value.
     *
     * @return double
     */
    public function getGrowthloo()
    {

        return $this->growthloo;
    }

    /**
     * Get the [growthk] column value.
     *
     * @return double
     */
    public function getGrowthk()
    {

        return $this->growthk;
    }

    /**
     * Get the [growthref] column value.
     *
     * @return int
     */
    public function getGrowthref()
    {

        return $this->growthref;
    }

    /**
     * Get the [growthm] column value.
     *
     * @return double
     */
    public function getGrowthm()
    {

        return $this->growthm;
    }

    /**
     * Get the [growthmref] column value.
     *
     * @return int
     */
    public function getGrowthmref()
    {

        return $this->growthmref;
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
     * Get the [frequencytype] column value.
     *
     * @return string
     */
    public function getFrequencytype()
    {

        return $this->frequencytype;
    }

    /**
     * Get the [classinterval] column value.
     *
     * @return double
     */
    public function getClassinterval()
    {

        return $this->classinterval;
    }

    /**
     * Get the [gear] column value.
     *
     * @return string
     */
    public function getGear()
    {

        return $this->gear;
    }

    /**
     * Get the [gearii] column value.
     *
     * @return string
     */
    public function getGearii()
    {

        return $this->gearii;
    }

    /**
     * Get the [yearfrom] column value.
     *
     * @return int
     */
    public function getYearfrom()
    {

        return $this->yearfrom;
    }

    /**
     * Get the [yearto] column value.
     *
     * @return int
     */
    public function getYearto()
    {

        return $this->yearto;
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
     * Get the [provider] column value.
     *
     * @return string
     */
    public function getProvider()
    {

        return $this->provider;
    }

    /**
     * Get the [email] column value.
     *
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
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
     * Set the value of [lfcode] column.
     *
     * @param  int $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setLfcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lfcode !== $v) {
            $this->lfcode = $v;
            $this->modifiedColumns[] = PoplfPeer::LFCODE;
        }


        return $this;
    } // setLfcode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = PoplfPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = PoplfPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [lfrefno] column.
     *
     * @param  int $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setLfrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lfrefno !== $v) {
            $this->lfrefno = $v;
            $this->modifiedColumns[] = PoplfPeer::LFREFNO;
        }


        return $this;
    } // setLfrefno()

    /**
     * Set the value of [sex] column.
     *
     * @param  string $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setSex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sex !== $v) {
            $this->sex = $v;
            $this->modifiedColumns[] = PoplfPeer::SEX;
        }


        return $this;
    } // setSex()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = PoplfPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = PoplfPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [latdeg] column.
     *
     * @param  int $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setLatdeg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->latdeg !== $v) {
            $this->latdeg = $v;
            $this->modifiedColumns[] = PoplfPeer::LATDEG;
        }


        return $this;
    } // setLatdeg()

    /**
     * Set the value of [latmin] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setLatmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->latmin !== $v) {
            $this->latmin = $v;
            $this->modifiedColumns[] = PoplfPeer::LATMIN;
        }


        return $this;
    } // setLatmin()

    /**
     * Set the value of [northsouth] column.
     *
     * @param  string $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setNorthsouth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northsouth !== $v) {
            $this->northsouth = $v;
            $this->modifiedColumns[] = PoplfPeer::NORTHSOUTH;
        }


        return $this;
    } // setNorthsouth()

    /**
     * Set the value of [latdegs] column.
     *
     * @param  int $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setLatdegs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->latdegs !== $v) {
            $this->latdegs = $v;
            $this->modifiedColumns[] = PoplfPeer::LATDEGS;
        }


        return $this;
    } // setLatdegs()

    /**
     * Set the value of [latmins] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setLatmins($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->latmins !== $v) {
            $this->latmins = $v;
            $this->modifiedColumns[] = PoplfPeer::LATMINS;
        }


        return $this;
    } // setLatmins()

    /**
     * Set the value of [northsouths] column.
     *
     * @param  string $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setNorthsouths($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northsouths !== $v) {
            $this->northsouths = $v;
            $this->modifiedColumns[] = PoplfPeer::NORTHSOUTHS;
        }


        return $this;
    } // setNorthsouths()

    /**
     * Set the value of [longdeg] column.
     *
     * @param  int $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setLongdeg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->longdeg !== $v) {
            $this->longdeg = $v;
            $this->modifiedColumns[] = PoplfPeer::LONGDEG;
        }


        return $this;
    } // setLongdeg()

    /**
     * Set the value of [longmin] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setLongmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->longmin !== $v) {
            $this->longmin = $v;
            $this->modifiedColumns[] = PoplfPeer::LONGMIN;
        }


        return $this;
    } // setLongmin()

    /**
     * Set the value of [eastwest] column.
     *
     * @param  string $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setEastwest($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eastwest !== $v) {
            $this->eastwest = $v;
            $this->modifiedColumns[] = PoplfPeer::EASTWEST;
        }


        return $this;
    } // setEastwest()

    /**
     * Set the value of [longdege] column.
     *
     * @param  int $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setLongdege($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->longdege !== $v) {
            $this->longdege = $v;
            $this->modifiedColumns[] = PoplfPeer::LONGDEGE;
        }


        return $this;
    } // setLongdege()

    /**
     * Set the value of [longmine] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setLongmine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->longmine !== $v) {
            $this->longmine = $v;
            $this->modifiedColumns[] = PoplfPeer::LONGMINE;
        }


        return $this;
    } // setLongmine()

    /**
     * Set the value of [eastweste] column.
     *
     * @param  string $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setEastweste($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eastweste !== $v) {
            $this->eastweste = $v;
            $this->modifiedColumns[] = PoplfPeer::EASTWESTE;
        }


        return $this;
    } // setEastweste()

    /**
     * Set the value of [accuracy] column.
     *
     * @param  string $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setAccuracy($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->accuracy !== $v) {
            $this->accuracy = $v;
            $this->modifiedColumns[] = PoplfPeer::ACCURACY;
        }


        return $this;
    } // setAccuracy()

    /**
     * Set the value of [depthmin] column.
     *
     * @param  int $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setDepthmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->depthmin !== $v) {
            $this->depthmin = $v;
            $this->modifiedColumns[] = PoplfPeer::DEPTHMIN;
        }


        return $this;
    } // setDepthmin()

    /**
     * Set the value of [depthmax] column.
     *
     * @param  int $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setDepthmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->depthmax !== $v) {
            $this->depthmax = $v;
            $this->modifiedColumns[] = PoplfPeer::DEPTHMAX;
        }


        return $this;
    } // setDepthmax()

    /**
     * Set the value of [tempmin] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setTempmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tempmin !== $v) {
            $this->tempmin = $v;
            $this->modifiedColumns[] = PoplfPeer::TEMPMIN;
        }


        return $this;
    } // setTempmin()

    /**
     * Set the value of [tempmax] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setTempmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tempmax !== $v) {
            $this->tempmax = $v;
            $this->modifiedColumns[] = PoplfPeer::TEMPMAX;
        }


        return $this;
    } // setTempmax()

    /**
     * Set the value of [mlmin] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setMlmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->mlmin !== $v) {
            $this->mlmin = $v;
            $this->modifiedColumns[] = PoplfPeer::MLMIN;
        }


        return $this;
    } // setMlmin()

    /**
     * Set the value of [mlmax] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setMlmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->mlmax !== $v) {
            $this->mlmax = $v;
            $this->modifiedColumns[] = PoplfPeer::MLMAX;
        }


        return $this;
    } // setMlmax()

    /**
     * Set the value of [meanlength] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setMeanlength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->meanlength !== $v) {
            $this->meanlength = $v;
            $this->modifiedColumns[] = PoplfPeer::MEANLENGTH;
        }


        return $this;
    } // setMeanlength()

    /**
     * Set the value of [lm] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setLm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lm !== $v) {
            $this->lm = $v;
            $this->modifiedColumns[] = PoplfPeer::LM;
        }


        return $this;
    } // setLm()

    /**
     * Set the value of [loo] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setLoo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->loo !== $v) {
            $this->loo = $v;
            $this->modifiedColumns[] = PoplfPeer::LOO;
        }


        return $this;
    } // setLoo()

    /**
     * Set the value of [lopt] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setLopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lopt !== $v) {
            $this->lopt = $v;
            $this->modifiedColumns[] = PoplfPeer::LOPT;
        }


        return $this;
    } // setLopt()

    /**
     * Set the value of [lc] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setLc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lc !== $v) {
            $this->lc = $v;
            $this->modifiedColumns[] = PoplfPeer::LC;
        }


        return $this;
    } // setLc()

    /**
     * Set the value of [sourcelinf] column.
     *
     * @param  string $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setSourcelinf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sourcelinf !== $v) {
            $this->sourcelinf = $v;
            $this->modifiedColumns[] = PoplfPeer::SOURCELINF;
        }


        return $this;
    } // setSourcelinf()

    /**
     * Set the value of [a] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setA($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->a !== $v) {
            $this->a = $v;
            $this->modifiedColumns[] = PoplfPeer::A;
        }


        return $this;
    } // setA()

    /**
     * Set the value of [b] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setB($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->b !== $v) {
            $this->b = $v;
            $this->modifiedColumns[] = PoplfPeer::B;
        }


        return $this;
    } // setB()

    /**
     * Set the value of [lwref] column.
     *
     * @param  int $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setLwref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lwref !== $v) {
            $this->lwref = $v;
            $this->modifiedColumns[] = PoplfPeer::LWREF;
        }


        return $this;
    } // setLwref()

    /**
     * Set the value of [ltype] column.
     *
     * @param  string $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setLtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ltype !== $v) {
            $this->ltype = $v;
            $this->modifiedColumns[] = PoplfPeer::LTYPE;
        }


        return $this;
    } // setLtype()

    /**
     * Set the value of [f] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setF($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->f !== $v) {
            $this->f = $v;
            $this->modifiedColumns[] = PoplfPeer::F;
        }


        return $this;
    } // setF()

    /**
     * Set the value of [z] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setZ($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->z !== $v) {
            $this->z = $v;
            $this->modifiedColumns[] = PoplfPeer::Z;
        }


        return $this;
    } // setZ()

    /**
     * Set the value of [e] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setE($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->e !== $v) {
            $this->e = $v;
            $this->modifiedColumns[] = PoplfPeer::E;
        }


        return $this;
    } // setE()

    /**
     * Set the value of [m] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setM($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->m !== $v) {
            $this->m = $v;
            $this->modifiedColumns[] = PoplfPeer::M;
        }


        return $this;
    } // setM()

    /**
     * Set the value of [unexploited] column.
     *
     * @param  int $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setUnexploited($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->unexploited !== $v) {
            $this->unexploited = $v;
            $this->modifiedColumns[] = PoplfPeer::UNEXPLOITED;
        }


        return $this;
    } // setUnexploited()

    /**
     * Set the value of [datatype] column.
     *
     * @param  string $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setDatatype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->datatype !== $v) {
            $this->datatype = $v;
            $this->modifiedColumns[] = PoplfPeer::DATATYPE;
        }


        return $this;
    } // setDatatype()

    /**
     * Set the value of [growthloo] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setGrowthloo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->growthloo !== $v) {
            $this->growthloo = $v;
            $this->modifiedColumns[] = PoplfPeer::GROWTHLOO;
        }


        return $this;
    } // setGrowthloo()

    /**
     * Set the value of [growthk] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setGrowthk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->growthk !== $v) {
            $this->growthk = $v;
            $this->modifiedColumns[] = PoplfPeer::GROWTHK;
        }


        return $this;
    } // setGrowthk()

    /**
     * Set the value of [growthref] column.
     *
     * @param  int $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setGrowthref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->growthref !== $v) {
            $this->growthref = $v;
            $this->modifiedColumns[] = PoplfPeer::GROWTHREF;
        }


        return $this;
    } // setGrowthref()

    /**
     * Set the value of [growthm] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setGrowthm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->growthm !== $v) {
            $this->growthm = $v;
            $this->modifiedColumns[] = PoplfPeer::GROWTHM;
        }


        return $this;
    } // setGrowthm()

    /**
     * Set the value of [growthmref] column.
     *
     * @param  int $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setGrowthmref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->growthmref !== $v) {
            $this->growthmref = $v;
            $this->modifiedColumns[] = PoplfPeer::GROWTHMREF;
        }


        return $this;
    } // setGrowthmref()

    /**
     * Set the value of [tm] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setTm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tm !== $v) {
            $this->tm = $v;
            $this->modifiedColumns[] = PoplfPeer::TM;
        }


        return $this;
    } // setTm()

    /**
     * Set the value of [frequencytype] column.
     *
     * @param  string $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setFrequencytype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->frequencytype !== $v) {
            $this->frequencytype = $v;
            $this->modifiedColumns[] = PoplfPeer::FREQUENCYTYPE;
        }


        return $this;
    } // setFrequencytype()

    /**
     * Set the value of [classinterval] column.
     *
     * @param  double $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setClassinterval($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->classinterval !== $v) {
            $this->classinterval = $v;
            $this->modifiedColumns[] = PoplfPeer::CLASSINTERVAL;
        }


        return $this;
    } // setClassinterval()

    /**
     * Set the value of [gear] column.
     *
     * @param  string $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setGear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gear !== $v) {
            $this->gear = $v;
            $this->modifiedColumns[] = PoplfPeer::GEAR;
        }


        return $this;
    } // setGear()

    /**
     * Set the value of [gearii] column.
     *
     * @param  string $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setGearii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gearii !== $v) {
            $this->gearii = $v;
            $this->modifiedColumns[] = PoplfPeer::GEARII;
        }


        return $this;
    } // setGearii()

    /**
     * Set the value of [yearfrom] column.
     *
     * @param  int $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setYearfrom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->yearfrom !== $v) {
            $this->yearfrom = $v;
            $this->modifiedColumns[] = PoplfPeer::YEARFROM;
        }


        return $this;
    } // setYearfrom()

    /**
     * Set the value of [yearto] column.
     *
     * @param  int $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setYearto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->yearto !== $v) {
            $this->yearto = $v;
            $this->modifiedColumns[] = PoplfPeer::YEARTO;
        }


        return $this;
    } // setYearto()

    /**
     * Set the value of [remark] column.
     *
     * @param  string $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setRemark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remark !== $v) {
            $this->remark = $v;
            $this->modifiedColumns[] = PoplfPeer::REMARK;
        }


        return $this;
    } // setRemark()

    /**
     * Set the value of [provider] column.
     *
     * @param  string $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setProvider($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->provider !== $v) {
            $this->provider = $v;
            $this->modifiedColumns[] = PoplfPeer::PROVIDER;
        }


        return $this;
    } // setProvider()

    /**
     * Set the value of [email] column.
     *
     * @param  string $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = PoplfPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = PoplfPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Poplf The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = PoplfPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = PoplfPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Poplf The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = PoplfPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Poplf The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = PoplfPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Poplf The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = PoplfPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Poplf The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = PoplfPeer::TS;
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

            $this->lfcode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->stockcode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->speccode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->lfrefno = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->sex = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->locality = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->c_code = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->latdeg = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->latmin = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->northsouth = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->latdegs = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->latmins = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->northsouths = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->longdeg = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->longmin = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->eastwest = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->longdege = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->longmine = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->eastweste = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->accuracy = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->depthmin = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->depthmax = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->tempmin = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->tempmax = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
            $this->mlmin = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
            $this->mlmax = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->meanlength = ($row[$startcol + 26] !== null) ? (double) $row[$startcol + 26] : null;
            $this->lm = ($row[$startcol + 27] !== null) ? (double) $row[$startcol + 27] : null;
            $this->loo = ($row[$startcol + 28] !== null) ? (double) $row[$startcol + 28] : null;
            $this->lopt = ($row[$startcol + 29] !== null) ? (double) $row[$startcol + 29] : null;
            $this->lc = ($row[$startcol + 30] !== null) ? (double) $row[$startcol + 30] : null;
            $this->sourcelinf = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->a = ($row[$startcol + 32] !== null) ? (double) $row[$startcol + 32] : null;
            $this->b = ($row[$startcol + 33] !== null) ? (double) $row[$startcol + 33] : null;
            $this->lwref = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->ltype = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->f = ($row[$startcol + 36] !== null) ? (double) $row[$startcol + 36] : null;
            $this->z = ($row[$startcol + 37] !== null) ? (double) $row[$startcol + 37] : null;
            $this->e = ($row[$startcol + 38] !== null) ? (double) $row[$startcol + 38] : null;
            $this->m = ($row[$startcol + 39] !== null) ? (double) $row[$startcol + 39] : null;
            $this->unexploited = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->datatype = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->growthloo = ($row[$startcol + 42] !== null) ? (double) $row[$startcol + 42] : null;
            $this->growthk = ($row[$startcol + 43] !== null) ? (double) $row[$startcol + 43] : null;
            $this->growthref = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->growthm = ($row[$startcol + 45] !== null) ? (double) $row[$startcol + 45] : null;
            $this->growthmref = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->tm = ($row[$startcol + 47] !== null) ? (double) $row[$startcol + 47] : null;
            $this->frequencytype = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->classinterval = ($row[$startcol + 49] !== null) ? (double) $row[$startcol + 49] : null;
            $this->gear = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->gearii = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->yearfrom = ($row[$startcol + 52] !== null) ? (int) $row[$startcol + 52] : null;
            $this->yearto = ($row[$startcol + 53] !== null) ? (int) $row[$startcol + 53] : null;
            $this->remark = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->provider = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->email = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->entered = ($row[$startcol + 57] !== null) ? (int) $row[$startcol + 57] : null;
            $this->dateentered = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->modified = ($row[$startcol + 59] !== null) ? (int) $row[$startcol + 59] : null;
            $this->datemodified = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->expert = ($row[$startcol + 61] !== null) ? (int) $row[$startcol + 61] : null;
            $this->datechecked = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->ts = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 64; // 64 = PoplfPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Poplf object", $e);
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
            $con = Propel::getConnection(PoplfPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PoplfPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(PoplfPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PoplfQuery::create()
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
            $con = Propel::getConnection(PoplfPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PoplfPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = PoplfPeer::LFCODE;
        if (null !== $this->lfcode) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PoplfPeer::LFCODE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PoplfPeer::LFCODE)) {
            $modifiedColumns[':p' . $index++]  = '`LFCode`';
        }
        if ($this->isColumnModified(PoplfPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Stockcode`';
        }
        if ($this->isColumnModified(PoplfPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Speccode`';
        }
        if ($this->isColumnModified(PoplfPeer::LFREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`LFRefno`';
        }
        if ($this->isColumnModified(PoplfPeer::SEX)) {
            $modifiedColumns[':p' . $index++]  = '`Sex`';
        }
        if ($this->isColumnModified(PoplfPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(PoplfPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(PoplfPeer::LATDEG)) {
            $modifiedColumns[':p' . $index++]  = '`LatDeg`';
        }
        if ($this->isColumnModified(PoplfPeer::LATMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LatMin`';
        }
        if ($this->isColumnModified(PoplfPeer::NORTHSOUTH)) {
            $modifiedColumns[':p' . $index++]  = '`NorthSouth`';
        }
        if ($this->isColumnModified(PoplfPeer::LATDEGS)) {
            $modifiedColumns[':p' . $index++]  = '`LatDegS`';
        }
        if ($this->isColumnModified(PoplfPeer::LATMINS)) {
            $modifiedColumns[':p' . $index++]  = '`LatMinS`';
        }
        if ($this->isColumnModified(PoplfPeer::NORTHSOUTHS)) {
            $modifiedColumns[':p' . $index++]  = '`NorthSouthS`';
        }
        if ($this->isColumnModified(PoplfPeer::LONGDEG)) {
            $modifiedColumns[':p' . $index++]  = '`LongDeg`';
        }
        if ($this->isColumnModified(PoplfPeer::LONGMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LongMin`';
        }
        if ($this->isColumnModified(PoplfPeer::EASTWEST)) {
            $modifiedColumns[':p' . $index++]  = '`EastWest`';
        }
        if ($this->isColumnModified(PoplfPeer::LONGDEGE)) {
            $modifiedColumns[':p' . $index++]  = '`LongDegE`';
        }
        if ($this->isColumnModified(PoplfPeer::LONGMINE)) {
            $modifiedColumns[':p' . $index++]  = '`LongMinE`';
        }
        if ($this->isColumnModified(PoplfPeer::EASTWESTE)) {
            $modifiedColumns[':p' . $index++]  = '`EastWestE`';
        }
        if ($this->isColumnModified(PoplfPeer::ACCURACY)) {
            $modifiedColumns[':p' . $index++]  = '`Accuracy`';
        }
        if ($this->isColumnModified(PoplfPeer::DEPTHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`DepthMin`';
        }
        if ($this->isColumnModified(PoplfPeer::DEPTHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`DepthMax`';
        }
        if ($this->isColumnModified(PoplfPeer::TEMPMIN)) {
            $modifiedColumns[':p' . $index++]  = '`TempMin`';
        }
        if ($this->isColumnModified(PoplfPeer::TEMPMAX)) {
            $modifiedColumns[':p' . $index++]  = '`TempMax`';
        }
        if ($this->isColumnModified(PoplfPeer::MLMIN)) {
            $modifiedColumns[':p' . $index++]  = '`MLMin`';
        }
        if ($this->isColumnModified(PoplfPeer::MLMAX)) {
            $modifiedColumns[':p' . $index++]  = '`MLMax`';
        }
        if ($this->isColumnModified(PoplfPeer::MEANLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`MeanLength`';
        }
        if ($this->isColumnModified(PoplfPeer::LM)) {
            $modifiedColumns[':p' . $index++]  = '`Lm`';
        }
        if ($this->isColumnModified(PoplfPeer::LOO)) {
            $modifiedColumns[':p' . $index++]  = '`Loo`';
        }
        if ($this->isColumnModified(PoplfPeer::LOPT)) {
            $modifiedColumns[':p' . $index++]  = '`Lopt`';
        }
        if ($this->isColumnModified(PoplfPeer::LC)) {
            $modifiedColumns[':p' . $index++]  = '`Lc`';
        }
        if ($this->isColumnModified(PoplfPeer::SOURCELINF)) {
            $modifiedColumns[':p' . $index++]  = '`SourceLinf`';
        }
        if ($this->isColumnModified(PoplfPeer::A)) {
            $modifiedColumns[':p' . $index++]  = '`a`';
        }
        if ($this->isColumnModified(PoplfPeer::B)) {
            $modifiedColumns[':p' . $index++]  = '`b`';
        }
        if ($this->isColumnModified(PoplfPeer::LWREF)) {
            $modifiedColumns[':p' . $index++]  = '`LWRef`';
        }
        if ($this->isColumnModified(PoplfPeer::LTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`LType`';
        }
        if ($this->isColumnModified(PoplfPeer::F)) {
            $modifiedColumns[':p' . $index++]  = '`F`';
        }
        if ($this->isColumnModified(PoplfPeer::Z)) {
            $modifiedColumns[':p' . $index++]  = '`Z`';
        }
        if ($this->isColumnModified(PoplfPeer::E)) {
            $modifiedColumns[':p' . $index++]  = '`E`';
        }
        if ($this->isColumnModified(PoplfPeer::M)) {
            $modifiedColumns[':p' . $index++]  = '`M`';
        }
        if ($this->isColumnModified(PoplfPeer::UNEXPLOITED)) {
            $modifiedColumns[':p' . $index++]  = '`Unexploited`';
        }
        if ($this->isColumnModified(PoplfPeer::DATATYPE)) {
            $modifiedColumns[':p' . $index++]  = '`DataType`';
        }
        if ($this->isColumnModified(PoplfPeer::GROWTHLOO)) {
            $modifiedColumns[':p' . $index++]  = '`GrowthLoo`';
        }
        if ($this->isColumnModified(PoplfPeer::GROWTHK)) {
            $modifiedColumns[':p' . $index++]  = '`GrowthK`';
        }
        if ($this->isColumnModified(PoplfPeer::GROWTHREF)) {
            $modifiedColumns[':p' . $index++]  = '`GrowthRef`';
        }
        if ($this->isColumnModified(PoplfPeer::GROWTHM)) {
            $modifiedColumns[':p' . $index++]  = '`GrowthM`';
        }
        if ($this->isColumnModified(PoplfPeer::GROWTHMREF)) {
            $modifiedColumns[':p' . $index++]  = '`GrowthMRef`';
        }
        if ($this->isColumnModified(PoplfPeer::TM)) {
            $modifiedColumns[':p' . $index++]  = '`tm`';
        }
        if ($this->isColumnModified(PoplfPeer::FREQUENCYTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`FrequencyType`';
        }
        if ($this->isColumnModified(PoplfPeer::CLASSINTERVAL)) {
            $modifiedColumns[':p' . $index++]  = '`ClassInterval`';
        }
        if ($this->isColumnModified(PoplfPeer::GEAR)) {
            $modifiedColumns[':p' . $index++]  = '`Gear`';
        }
        if ($this->isColumnModified(PoplfPeer::GEARII)) {
            $modifiedColumns[':p' . $index++]  = '`GearII`';
        }
        if ($this->isColumnModified(PoplfPeer::YEARFROM)) {
            $modifiedColumns[':p' . $index++]  = '`YearFrom`';
        }
        if ($this->isColumnModified(PoplfPeer::YEARTO)) {
            $modifiedColumns[':p' . $index++]  = '`YearTo`';
        }
        if ($this->isColumnModified(PoplfPeer::REMARK)) {
            $modifiedColumns[':p' . $index++]  = '`Remark`';
        }
        if ($this->isColumnModified(PoplfPeer::PROVIDER)) {
            $modifiedColumns[':p' . $index++]  = '`Provider`';
        }
        if ($this->isColumnModified(PoplfPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`EMail`';
        }
        if ($this->isColumnModified(PoplfPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(PoplfPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(PoplfPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(PoplfPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(PoplfPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(PoplfPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(PoplfPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `poplf` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`LFCode`':
                        $stmt->bindValue($identifier, $this->lfcode, PDO::PARAM_INT);
                        break;
                    case '`Stockcode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`Speccode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`LFRefno`':
                        $stmt->bindValue($identifier, $this->lfrefno, PDO::PARAM_INT);
                        break;
                    case '`Sex`':
                        $stmt->bindValue($identifier, $this->sex, PDO::PARAM_STR);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`LatDeg`':
                        $stmt->bindValue($identifier, $this->latdeg, PDO::PARAM_INT);
                        break;
                    case '`LatMin`':
                        $stmt->bindValue($identifier, $this->latmin, PDO::PARAM_STR);
                        break;
                    case '`NorthSouth`':
                        $stmt->bindValue($identifier, $this->northsouth, PDO::PARAM_STR);
                        break;
                    case '`LatDegS`':
                        $stmt->bindValue($identifier, $this->latdegs, PDO::PARAM_INT);
                        break;
                    case '`LatMinS`':
                        $stmt->bindValue($identifier, $this->latmins, PDO::PARAM_STR);
                        break;
                    case '`NorthSouthS`':
                        $stmt->bindValue($identifier, $this->northsouths, PDO::PARAM_STR);
                        break;
                    case '`LongDeg`':
                        $stmt->bindValue($identifier, $this->longdeg, PDO::PARAM_INT);
                        break;
                    case '`LongMin`':
                        $stmt->bindValue($identifier, $this->longmin, PDO::PARAM_STR);
                        break;
                    case '`EastWest`':
                        $stmt->bindValue($identifier, $this->eastwest, PDO::PARAM_STR);
                        break;
                    case '`LongDegE`':
                        $stmt->bindValue($identifier, $this->longdege, PDO::PARAM_INT);
                        break;
                    case '`LongMinE`':
                        $stmt->bindValue($identifier, $this->longmine, PDO::PARAM_STR);
                        break;
                    case '`EastWestE`':
                        $stmt->bindValue($identifier, $this->eastweste, PDO::PARAM_STR);
                        break;
                    case '`Accuracy`':
                        $stmt->bindValue($identifier, $this->accuracy, PDO::PARAM_STR);
                        break;
                    case '`DepthMin`':
                        $stmt->bindValue($identifier, $this->depthmin, PDO::PARAM_INT);
                        break;
                    case '`DepthMax`':
                        $stmt->bindValue($identifier, $this->depthmax, PDO::PARAM_INT);
                        break;
                    case '`TempMin`':
                        $stmt->bindValue($identifier, $this->tempmin, PDO::PARAM_STR);
                        break;
                    case '`TempMax`':
                        $stmt->bindValue($identifier, $this->tempmax, PDO::PARAM_STR);
                        break;
                    case '`MLMin`':
                        $stmt->bindValue($identifier, $this->mlmin, PDO::PARAM_STR);
                        break;
                    case '`MLMax`':
                        $stmt->bindValue($identifier, $this->mlmax, PDO::PARAM_STR);
                        break;
                    case '`MeanLength`':
                        $stmt->bindValue($identifier, $this->meanlength, PDO::PARAM_STR);
                        break;
                    case '`Lm`':
                        $stmt->bindValue($identifier, $this->lm, PDO::PARAM_STR);
                        break;
                    case '`Loo`':
                        $stmt->bindValue($identifier, $this->loo, PDO::PARAM_STR);
                        break;
                    case '`Lopt`':
                        $stmt->bindValue($identifier, $this->lopt, PDO::PARAM_STR);
                        break;
                    case '`Lc`':
                        $stmt->bindValue($identifier, $this->lc, PDO::PARAM_STR);
                        break;
                    case '`SourceLinf`':
                        $stmt->bindValue($identifier, $this->sourcelinf, PDO::PARAM_STR);
                        break;
                    case '`a`':
                        $stmt->bindValue($identifier, $this->a, PDO::PARAM_STR);
                        break;
                    case '`b`':
                        $stmt->bindValue($identifier, $this->b, PDO::PARAM_STR);
                        break;
                    case '`LWRef`':
                        $stmt->bindValue($identifier, $this->lwref, PDO::PARAM_INT);
                        break;
                    case '`LType`':
                        $stmt->bindValue($identifier, $this->ltype, PDO::PARAM_STR);
                        break;
                    case '`F`':
                        $stmt->bindValue($identifier, $this->f, PDO::PARAM_STR);
                        break;
                    case '`Z`':
                        $stmt->bindValue($identifier, $this->z, PDO::PARAM_STR);
                        break;
                    case '`E`':
                        $stmt->bindValue($identifier, $this->e, PDO::PARAM_STR);
                        break;
                    case '`M`':
                        $stmt->bindValue($identifier, $this->m, PDO::PARAM_STR);
                        break;
                    case '`Unexploited`':
                        $stmt->bindValue($identifier, $this->unexploited, PDO::PARAM_INT);
                        break;
                    case '`DataType`':
                        $stmt->bindValue($identifier, $this->datatype, PDO::PARAM_STR);
                        break;
                    case '`GrowthLoo`':
                        $stmt->bindValue($identifier, $this->growthloo, PDO::PARAM_STR);
                        break;
                    case '`GrowthK`':
                        $stmt->bindValue($identifier, $this->growthk, PDO::PARAM_STR);
                        break;
                    case '`GrowthRef`':
                        $stmt->bindValue($identifier, $this->growthref, PDO::PARAM_INT);
                        break;
                    case '`GrowthM`':
                        $stmt->bindValue($identifier, $this->growthm, PDO::PARAM_STR);
                        break;
                    case '`GrowthMRef`':
                        $stmt->bindValue($identifier, $this->growthmref, PDO::PARAM_INT);
                        break;
                    case '`tm`':
                        $stmt->bindValue($identifier, $this->tm, PDO::PARAM_STR);
                        break;
                    case '`FrequencyType`':
                        $stmt->bindValue($identifier, $this->frequencytype, PDO::PARAM_STR);
                        break;
                    case '`ClassInterval`':
                        $stmt->bindValue($identifier, $this->classinterval, PDO::PARAM_STR);
                        break;
                    case '`Gear`':
                        $stmt->bindValue($identifier, $this->gear, PDO::PARAM_STR);
                        break;
                    case '`GearII`':
                        $stmt->bindValue($identifier, $this->gearii, PDO::PARAM_STR);
                        break;
                    case '`YearFrom`':
                        $stmt->bindValue($identifier, $this->yearfrom, PDO::PARAM_INT);
                        break;
                    case '`YearTo`':
                        $stmt->bindValue($identifier, $this->yearto, PDO::PARAM_INT);
                        break;
                    case '`Remark`':
                        $stmt->bindValue($identifier, $this->remark, PDO::PARAM_STR);
                        break;
                    case '`Provider`':
                        $stmt->bindValue($identifier, $this->provider, PDO::PARAM_STR);
                        break;
                    case '`EMail`':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
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
        $this->setLfcode($pk);

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


            if (($retval = PoplfPeer::doValidate($this, $columns)) !== true) {
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
        $pos = PoplfPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getLfcode();
                break;
            case 1:
                return $this->getStockcode();
                break;
            case 2:
                return $this->getSpeccode();
                break;
            case 3:
                return $this->getLfrefno();
                break;
            case 4:
                return $this->getSex();
                break;
            case 5:
                return $this->getLocality();
                break;
            case 6:
                return $this->getCCode();
                break;
            case 7:
                return $this->getLatdeg();
                break;
            case 8:
                return $this->getLatmin();
                break;
            case 9:
                return $this->getNorthsouth();
                break;
            case 10:
                return $this->getLatdegs();
                break;
            case 11:
                return $this->getLatmins();
                break;
            case 12:
                return $this->getNorthsouths();
                break;
            case 13:
                return $this->getLongdeg();
                break;
            case 14:
                return $this->getLongmin();
                break;
            case 15:
                return $this->getEastwest();
                break;
            case 16:
                return $this->getLongdege();
                break;
            case 17:
                return $this->getLongmine();
                break;
            case 18:
                return $this->getEastweste();
                break;
            case 19:
                return $this->getAccuracy();
                break;
            case 20:
                return $this->getDepthmin();
                break;
            case 21:
                return $this->getDepthmax();
                break;
            case 22:
                return $this->getTempmin();
                break;
            case 23:
                return $this->getTempmax();
                break;
            case 24:
                return $this->getMlmin();
                break;
            case 25:
                return $this->getMlmax();
                break;
            case 26:
                return $this->getMeanlength();
                break;
            case 27:
                return $this->getLm();
                break;
            case 28:
                return $this->getLoo();
                break;
            case 29:
                return $this->getLopt();
                break;
            case 30:
                return $this->getLc();
                break;
            case 31:
                return $this->getSourcelinf();
                break;
            case 32:
                return $this->getA();
                break;
            case 33:
                return $this->getB();
                break;
            case 34:
                return $this->getLwref();
                break;
            case 35:
                return $this->getLtype();
                break;
            case 36:
                return $this->getF();
                break;
            case 37:
                return $this->getZ();
                break;
            case 38:
                return $this->getE();
                break;
            case 39:
                return $this->getM();
                break;
            case 40:
                return $this->getUnexploited();
                break;
            case 41:
                return $this->getDatatype();
                break;
            case 42:
                return $this->getGrowthloo();
                break;
            case 43:
                return $this->getGrowthk();
                break;
            case 44:
                return $this->getGrowthref();
                break;
            case 45:
                return $this->getGrowthm();
                break;
            case 46:
                return $this->getGrowthmref();
                break;
            case 47:
                return $this->getTm();
                break;
            case 48:
                return $this->getFrequencytype();
                break;
            case 49:
                return $this->getClassinterval();
                break;
            case 50:
                return $this->getGear();
                break;
            case 51:
                return $this->getGearii();
                break;
            case 52:
                return $this->getYearfrom();
                break;
            case 53:
                return $this->getYearto();
                break;
            case 54:
                return $this->getRemark();
                break;
            case 55:
                return $this->getProvider();
                break;
            case 56:
                return $this->getEmail();
                break;
            case 57:
                return $this->getEntered();
                break;
            case 58:
                return $this->getDateentered();
                break;
            case 59:
                return $this->getModified();
                break;
            case 60:
                return $this->getDatemodified();
                break;
            case 61:
                return $this->getExpert();
                break;
            case 62:
                return $this->getDatechecked();
                break;
            case 63:
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
        if (isset($alreadyDumpedObjects['Poplf'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Poplf'][serialize($this->getPrimaryKey())] = true;
        $keys = PoplfPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getLfcode(),
            $keys[1] => $this->getStockcode(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getLfrefno(),
            $keys[4] => $this->getSex(),
            $keys[5] => $this->getLocality(),
            $keys[6] => $this->getCCode(),
            $keys[7] => $this->getLatdeg(),
            $keys[8] => $this->getLatmin(),
            $keys[9] => $this->getNorthsouth(),
            $keys[10] => $this->getLatdegs(),
            $keys[11] => $this->getLatmins(),
            $keys[12] => $this->getNorthsouths(),
            $keys[13] => $this->getLongdeg(),
            $keys[14] => $this->getLongmin(),
            $keys[15] => $this->getEastwest(),
            $keys[16] => $this->getLongdege(),
            $keys[17] => $this->getLongmine(),
            $keys[18] => $this->getEastweste(),
            $keys[19] => $this->getAccuracy(),
            $keys[20] => $this->getDepthmin(),
            $keys[21] => $this->getDepthmax(),
            $keys[22] => $this->getTempmin(),
            $keys[23] => $this->getTempmax(),
            $keys[24] => $this->getMlmin(),
            $keys[25] => $this->getMlmax(),
            $keys[26] => $this->getMeanlength(),
            $keys[27] => $this->getLm(),
            $keys[28] => $this->getLoo(),
            $keys[29] => $this->getLopt(),
            $keys[30] => $this->getLc(),
            $keys[31] => $this->getSourcelinf(),
            $keys[32] => $this->getA(),
            $keys[33] => $this->getB(),
            $keys[34] => $this->getLwref(),
            $keys[35] => $this->getLtype(),
            $keys[36] => $this->getF(),
            $keys[37] => $this->getZ(),
            $keys[38] => $this->getE(),
            $keys[39] => $this->getM(),
            $keys[40] => $this->getUnexploited(),
            $keys[41] => $this->getDatatype(),
            $keys[42] => $this->getGrowthloo(),
            $keys[43] => $this->getGrowthk(),
            $keys[44] => $this->getGrowthref(),
            $keys[45] => $this->getGrowthm(),
            $keys[46] => $this->getGrowthmref(),
            $keys[47] => $this->getTm(),
            $keys[48] => $this->getFrequencytype(),
            $keys[49] => $this->getClassinterval(),
            $keys[50] => $this->getGear(),
            $keys[51] => $this->getGearii(),
            $keys[52] => $this->getYearfrom(),
            $keys[53] => $this->getYearto(),
            $keys[54] => $this->getRemark(),
            $keys[55] => $this->getProvider(),
            $keys[56] => $this->getEmail(),
            $keys[57] => $this->getEntered(),
            $keys[58] => $this->getDateentered(),
            $keys[59] => $this->getModified(),
            $keys[60] => $this->getDatemodified(),
            $keys[61] => $this->getExpert(),
            $keys[62] => $this->getDatechecked(),
            $keys[63] => $this->getTs(),
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
        $pos = PoplfPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setLfcode($value);
                break;
            case 1:
                $this->setStockcode($value);
                break;
            case 2:
                $this->setSpeccode($value);
                break;
            case 3:
                $this->setLfrefno($value);
                break;
            case 4:
                $this->setSex($value);
                break;
            case 5:
                $this->setLocality($value);
                break;
            case 6:
                $this->setCCode($value);
                break;
            case 7:
                $this->setLatdeg($value);
                break;
            case 8:
                $this->setLatmin($value);
                break;
            case 9:
                $this->setNorthsouth($value);
                break;
            case 10:
                $this->setLatdegs($value);
                break;
            case 11:
                $this->setLatmins($value);
                break;
            case 12:
                $this->setNorthsouths($value);
                break;
            case 13:
                $this->setLongdeg($value);
                break;
            case 14:
                $this->setLongmin($value);
                break;
            case 15:
                $this->setEastwest($value);
                break;
            case 16:
                $this->setLongdege($value);
                break;
            case 17:
                $this->setLongmine($value);
                break;
            case 18:
                $this->setEastweste($value);
                break;
            case 19:
                $this->setAccuracy($value);
                break;
            case 20:
                $this->setDepthmin($value);
                break;
            case 21:
                $this->setDepthmax($value);
                break;
            case 22:
                $this->setTempmin($value);
                break;
            case 23:
                $this->setTempmax($value);
                break;
            case 24:
                $this->setMlmin($value);
                break;
            case 25:
                $this->setMlmax($value);
                break;
            case 26:
                $this->setMeanlength($value);
                break;
            case 27:
                $this->setLm($value);
                break;
            case 28:
                $this->setLoo($value);
                break;
            case 29:
                $this->setLopt($value);
                break;
            case 30:
                $this->setLc($value);
                break;
            case 31:
                $this->setSourcelinf($value);
                break;
            case 32:
                $this->setA($value);
                break;
            case 33:
                $this->setB($value);
                break;
            case 34:
                $this->setLwref($value);
                break;
            case 35:
                $this->setLtype($value);
                break;
            case 36:
                $this->setF($value);
                break;
            case 37:
                $this->setZ($value);
                break;
            case 38:
                $this->setE($value);
                break;
            case 39:
                $this->setM($value);
                break;
            case 40:
                $this->setUnexploited($value);
                break;
            case 41:
                $this->setDatatype($value);
                break;
            case 42:
                $this->setGrowthloo($value);
                break;
            case 43:
                $this->setGrowthk($value);
                break;
            case 44:
                $this->setGrowthref($value);
                break;
            case 45:
                $this->setGrowthm($value);
                break;
            case 46:
                $this->setGrowthmref($value);
                break;
            case 47:
                $this->setTm($value);
                break;
            case 48:
                $this->setFrequencytype($value);
                break;
            case 49:
                $this->setClassinterval($value);
                break;
            case 50:
                $this->setGear($value);
                break;
            case 51:
                $this->setGearii($value);
                break;
            case 52:
                $this->setYearfrom($value);
                break;
            case 53:
                $this->setYearto($value);
                break;
            case 54:
                $this->setRemark($value);
                break;
            case 55:
                $this->setProvider($value);
                break;
            case 56:
                $this->setEmail($value);
                break;
            case 57:
                $this->setEntered($value);
                break;
            case 58:
                $this->setDateentered($value);
                break;
            case 59:
                $this->setModified($value);
                break;
            case 60:
                $this->setDatemodified($value);
                break;
            case 61:
                $this->setExpert($value);
                break;
            case 62:
                $this->setDatechecked($value);
                break;
            case 63:
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
        $keys = PoplfPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setLfcode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLfrefno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSex($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLocality($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCCode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLatdeg($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLatmin($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setNorthsouth($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setLatdegs($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setLatmins($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNorthsouths($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setLongdeg($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setLongmin($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setEastwest($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setLongdege($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setLongmine($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setEastweste($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setAccuracy($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setDepthmin($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDepthmax($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setTempmin($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setTempmax($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setMlmin($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setMlmax($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setMeanlength($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setLm($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setLoo($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setLopt($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setLc($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setSourcelinf($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setA($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setB($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setLwref($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setLtype($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setF($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setZ($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setE($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setM($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setUnexploited($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setDatatype($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setGrowthloo($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setGrowthk($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setGrowthref($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setGrowthm($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setGrowthmref($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setTm($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setFrequencytype($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setClassinterval($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setGear($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setGearii($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setYearfrom($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setYearto($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setRemark($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setProvider($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setEmail($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setEntered($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setDateentered($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setModified($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setDatemodified($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setExpert($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setDatechecked($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setTs($arr[$keys[63]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PoplfPeer::DATABASE_NAME);

        if ($this->isColumnModified(PoplfPeer::LFCODE)) $criteria->add(PoplfPeer::LFCODE, $this->lfcode);
        if ($this->isColumnModified(PoplfPeer::STOCKCODE)) $criteria->add(PoplfPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(PoplfPeer::SPECCODE)) $criteria->add(PoplfPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(PoplfPeer::LFREFNO)) $criteria->add(PoplfPeer::LFREFNO, $this->lfrefno);
        if ($this->isColumnModified(PoplfPeer::SEX)) $criteria->add(PoplfPeer::SEX, $this->sex);
        if ($this->isColumnModified(PoplfPeer::LOCALITY)) $criteria->add(PoplfPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(PoplfPeer::C_CODE)) $criteria->add(PoplfPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(PoplfPeer::LATDEG)) $criteria->add(PoplfPeer::LATDEG, $this->latdeg);
        if ($this->isColumnModified(PoplfPeer::LATMIN)) $criteria->add(PoplfPeer::LATMIN, $this->latmin);
        if ($this->isColumnModified(PoplfPeer::NORTHSOUTH)) $criteria->add(PoplfPeer::NORTHSOUTH, $this->northsouth);
        if ($this->isColumnModified(PoplfPeer::LATDEGS)) $criteria->add(PoplfPeer::LATDEGS, $this->latdegs);
        if ($this->isColumnModified(PoplfPeer::LATMINS)) $criteria->add(PoplfPeer::LATMINS, $this->latmins);
        if ($this->isColumnModified(PoplfPeer::NORTHSOUTHS)) $criteria->add(PoplfPeer::NORTHSOUTHS, $this->northsouths);
        if ($this->isColumnModified(PoplfPeer::LONGDEG)) $criteria->add(PoplfPeer::LONGDEG, $this->longdeg);
        if ($this->isColumnModified(PoplfPeer::LONGMIN)) $criteria->add(PoplfPeer::LONGMIN, $this->longmin);
        if ($this->isColumnModified(PoplfPeer::EASTWEST)) $criteria->add(PoplfPeer::EASTWEST, $this->eastwest);
        if ($this->isColumnModified(PoplfPeer::LONGDEGE)) $criteria->add(PoplfPeer::LONGDEGE, $this->longdege);
        if ($this->isColumnModified(PoplfPeer::LONGMINE)) $criteria->add(PoplfPeer::LONGMINE, $this->longmine);
        if ($this->isColumnModified(PoplfPeer::EASTWESTE)) $criteria->add(PoplfPeer::EASTWESTE, $this->eastweste);
        if ($this->isColumnModified(PoplfPeer::ACCURACY)) $criteria->add(PoplfPeer::ACCURACY, $this->accuracy);
        if ($this->isColumnModified(PoplfPeer::DEPTHMIN)) $criteria->add(PoplfPeer::DEPTHMIN, $this->depthmin);
        if ($this->isColumnModified(PoplfPeer::DEPTHMAX)) $criteria->add(PoplfPeer::DEPTHMAX, $this->depthmax);
        if ($this->isColumnModified(PoplfPeer::TEMPMIN)) $criteria->add(PoplfPeer::TEMPMIN, $this->tempmin);
        if ($this->isColumnModified(PoplfPeer::TEMPMAX)) $criteria->add(PoplfPeer::TEMPMAX, $this->tempmax);
        if ($this->isColumnModified(PoplfPeer::MLMIN)) $criteria->add(PoplfPeer::MLMIN, $this->mlmin);
        if ($this->isColumnModified(PoplfPeer::MLMAX)) $criteria->add(PoplfPeer::MLMAX, $this->mlmax);
        if ($this->isColumnModified(PoplfPeer::MEANLENGTH)) $criteria->add(PoplfPeer::MEANLENGTH, $this->meanlength);
        if ($this->isColumnModified(PoplfPeer::LM)) $criteria->add(PoplfPeer::LM, $this->lm);
        if ($this->isColumnModified(PoplfPeer::LOO)) $criteria->add(PoplfPeer::LOO, $this->loo);
        if ($this->isColumnModified(PoplfPeer::LOPT)) $criteria->add(PoplfPeer::LOPT, $this->lopt);
        if ($this->isColumnModified(PoplfPeer::LC)) $criteria->add(PoplfPeer::LC, $this->lc);
        if ($this->isColumnModified(PoplfPeer::SOURCELINF)) $criteria->add(PoplfPeer::SOURCELINF, $this->sourcelinf);
        if ($this->isColumnModified(PoplfPeer::A)) $criteria->add(PoplfPeer::A, $this->a);
        if ($this->isColumnModified(PoplfPeer::B)) $criteria->add(PoplfPeer::B, $this->b);
        if ($this->isColumnModified(PoplfPeer::LWREF)) $criteria->add(PoplfPeer::LWREF, $this->lwref);
        if ($this->isColumnModified(PoplfPeer::LTYPE)) $criteria->add(PoplfPeer::LTYPE, $this->ltype);
        if ($this->isColumnModified(PoplfPeer::F)) $criteria->add(PoplfPeer::F, $this->f);
        if ($this->isColumnModified(PoplfPeer::Z)) $criteria->add(PoplfPeer::Z, $this->z);
        if ($this->isColumnModified(PoplfPeer::E)) $criteria->add(PoplfPeer::E, $this->e);
        if ($this->isColumnModified(PoplfPeer::M)) $criteria->add(PoplfPeer::M, $this->m);
        if ($this->isColumnModified(PoplfPeer::UNEXPLOITED)) $criteria->add(PoplfPeer::UNEXPLOITED, $this->unexploited);
        if ($this->isColumnModified(PoplfPeer::DATATYPE)) $criteria->add(PoplfPeer::DATATYPE, $this->datatype);
        if ($this->isColumnModified(PoplfPeer::GROWTHLOO)) $criteria->add(PoplfPeer::GROWTHLOO, $this->growthloo);
        if ($this->isColumnModified(PoplfPeer::GROWTHK)) $criteria->add(PoplfPeer::GROWTHK, $this->growthk);
        if ($this->isColumnModified(PoplfPeer::GROWTHREF)) $criteria->add(PoplfPeer::GROWTHREF, $this->growthref);
        if ($this->isColumnModified(PoplfPeer::GROWTHM)) $criteria->add(PoplfPeer::GROWTHM, $this->growthm);
        if ($this->isColumnModified(PoplfPeer::GROWTHMREF)) $criteria->add(PoplfPeer::GROWTHMREF, $this->growthmref);
        if ($this->isColumnModified(PoplfPeer::TM)) $criteria->add(PoplfPeer::TM, $this->tm);
        if ($this->isColumnModified(PoplfPeer::FREQUENCYTYPE)) $criteria->add(PoplfPeer::FREQUENCYTYPE, $this->frequencytype);
        if ($this->isColumnModified(PoplfPeer::CLASSINTERVAL)) $criteria->add(PoplfPeer::CLASSINTERVAL, $this->classinterval);
        if ($this->isColumnModified(PoplfPeer::GEAR)) $criteria->add(PoplfPeer::GEAR, $this->gear);
        if ($this->isColumnModified(PoplfPeer::GEARII)) $criteria->add(PoplfPeer::GEARII, $this->gearii);
        if ($this->isColumnModified(PoplfPeer::YEARFROM)) $criteria->add(PoplfPeer::YEARFROM, $this->yearfrom);
        if ($this->isColumnModified(PoplfPeer::YEARTO)) $criteria->add(PoplfPeer::YEARTO, $this->yearto);
        if ($this->isColumnModified(PoplfPeer::REMARK)) $criteria->add(PoplfPeer::REMARK, $this->remark);
        if ($this->isColumnModified(PoplfPeer::PROVIDER)) $criteria->add(PoplfPeer::PROVIDER, $this->provider);
        if ($this->isColumnModified(PoplfPeer::EMAIL)) $criteria->add(PoplfPeer::EMAIL, $this->email);
        if ($this->isColumnModified(PoplfPeer::ENTERED)) $criteria->add(PoplfPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(PoplfPeer::DATEENTERED)) $criteria->add(PoplfPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(PoplfPeer::MODIFIED)) $criteria->add(PoplfPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(PoplfPeer::DATEMODIFIED)) $criteria->add(PoplfPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(PoplfPeer::EXPERT)) $criteria->add(PoplfPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(PoplfPeer::DATECHECKED)) $criteria->add(PoplfPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(PoplfPeer::TS)) $criteria->add(PoplfPeer::TS, $this->ts);

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
        $criteria = new Criteria(PoplfPeer::DATABASE_NAME);
        $criteria->add(PoplfPeer::LFCODE, $this->lfcode);
        $criteria->add(PoplfPeer::STOCKCODE, $this->stockcode);
        $criteria->add(PoplfPeer::SEX, $this->sex);
        $criteria->add(PoplfPeer::LOCALITY, $this->locality);
        $criteria->add(PoplfPeer::C_CODE, $this->c_code);
        $criteria->add(PoplfPeer::GEAR, $this->gear);

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
        $pks[0] = $this->getLfcode();
        $pks[1] = $this->getStockcode();
        $pks[2] = $this->getSex();
        $pks[3] = $this->getLocality();
        $pks[4] = $this->getCCode();
        $pks[5] = $this->getGear();

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
        $this->setLfcode($keys[0]);
        $this->setStockcode($keys[1]);
        $this->setSex($keys[2]);
        $this->setLocality($keys[3]);
        $this->setCCode($keys[4]);
        $this->setGear($keys[5]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getLfcode()) && (null === $this->getStockcode()) && (null === $this->getSex()) && (null === $this->getLocality()) && (null === $this->getCCode()) && (null === $this->getGear());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Poplf (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setLfrefno($this->getLfrefno());
        $copyObj->setSex($this->getSex());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setLatdeg($this->getLatdeg());
        $copyObj->setLatmin($this->getLatmin());
        $copyObj->setNorthsouth($this->getNorthsouth());
        $copyObj->setLatdegs($this->getLatdegs());
        $copyObj->setLatmins($this->getLatmins());
        $copyObj->setNorthsouths($this->getNorthsouths());
        $copyObj->setLongdeg($this->getLongdeg());
        $copyObj->setLongmin($this->getLongmin());
        $copyObj->setEastwest($this->getEastwest());
        $copyObj->setLongdege($this->getLongdege());
        $copyObj->setLongmine($this->getLongmine());
        $copyObj->setEastweste($this->getEastweste());
        $copyObj->setAccuracy($this->getAccuracy());
        $copyObj->setDepthmin($this->getDepthmin());
        $copyObj->setDepthmax($this->getDepthmax());
        $copyObj->setTempmin($this->getTempmin());
        $copyObj->setTempmax($this->getTempmax());
        $copyObj->setMlmin($this->getMlmin());
        $copyObj->setMlmax($this->getMlmax());
        $copyObj->setMeanlength($this->getMeanlength());
        $copyObj->setLm($this->getLm());
        $copyObj->setLoo($this->getLoo());
        $copyObj->setLopt($this->getLopt());
        $copyObj->setLc($this->getLc());
        $copyObj->setSourcelinf($this->getSourcelinf());
        $copyObj->setA($this->getA());
        $copyObj->setB($this->getB());
        $copyObj->setLwref($this->getLwref());
        $copyObj->setLtype($this->getLtype());
        $copyObj->setF($this->getF());
        $copyObj->setZ($this->getZ());
        $copyObj->setE($this->getE());
        $copyObj->setM($this->getM());
        $copyObj->setUnexploited($this->getUnexploited());
        $copyObj->setDatatype($this->getDatatype());
        $copyObj->setGrowthloo($this->getGrowthloo());
        $copyObj->setGrowthk($this->getGrowthk());
        $copyObj->setGrowthref($this->getGrowthref());
        $copyObj->setGrowthm($this->getGrowthm());
        $copyObj->setGrowthmref($this->getGrowthmref());
        $copyObj->setTm($this->getTm());
        $copyObj->setFrequencytype($this->getFrequencytype());
        $copyObj->setClassinterval($this->getClassinterval());
        $copyObj->setGear($this->getGear());
        $copyObj->setGearii($this->getGearii());
        $copyObj->setYearfrom($this->getYearfrom());
        $copyObj->setYearto($this->getYearto());
        $copyObj->setRemark($this->getRemark());
        $copyObj->setProvider($this->getProvider());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setLfcode(NULL); // this is a auto-increment column, so set to default value
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
     * @return Poplf Clone of current object.
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
     * @return PoplfPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PoplfPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->lfcode = null;
        $this->stockcode = null;
        $this->speccode = null;
        $this->lfrefno = null;
        $this->sex = null;
        $this->locality = null;
        $this->c_code = null;
        $this->latdeg = null;
        $this->latmin = null;
        $this->northsouth = null;
        $this->latdegs = null;
        $this->latmins = null;
        $this->northsouths = null;
        $this->longdeg = null;
        $this->longmin = null;
        $this->eastwest = null;
        $this->longdege = null;
        $this->longmine = null;
        $this->eastweste = null;
        $this->accuracy = null;
        $this->depthmin = null;
        $this->depthmax = null;
        $this->tempmin = null;
        $this->tempmax = null;
        $this->mlmin = null;
        $this->mlmax = null;
        $this->meanlength = null;
        $this->lm = null;
        $this->loo = null;
        $this->lopt = null;
        $this->lc = null;
        $this->sourcelinf = null;
        $this->a = null;
        $this->b = null;
        $this->lwref = null;
        $this->ltype = null;
        $this->f = null;
        $this->z = null;
        $this->e = null;
        $this->m = null;
        $this->unexploited = null;
        $this->datatype = null;
        $this->growthloo = null;
        $this->growthk = null;
        $this->growthref = null;
        $this->growthm = null;
        $this->growthmref = null;
        $this->tm = null;
        $this->frequencytype = null;
        $this->classinterval = null;
        $this->gear = null;
        $this->gearii = null;
        $this->yearfrom = null;
        $this->yearto = null;
        $this->remark = null;
        $this->provider = null;
        $this->email = null;
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
        return (string) $this->exportTo(PoplfPeer::DEFAULT_STRING_FORMAT);
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
