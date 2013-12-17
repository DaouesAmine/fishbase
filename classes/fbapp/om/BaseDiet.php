<?php


/**
 * Base class that represents a row from the 'diet' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseDiet extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'DietPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        DietPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the dietcode field.
     * @var        int
     */
    protected $dietcode;

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
     * The value for the dietrefno field.
     * @var        int
     */
    protected $dietrefno;

    /**
     * The value for the samplestage field.
     * @var        string
     */
    protected $samplestage;

    /**
     * The value for the samplesize field.
     * @var        int
     */
    protected $samplesize;

    /**
     * The value for the yearstart field.
     * @var        int
     */
    protected $yearstart;

    /**
     * The value for the yearend field.
     * @var        int
     */
    protected $yearend;

    /**
     * The value for the january field.
     * @var        int
     */
    protected $january;

    /**
     * The value for the february field.
     * @var        int
     */
    protected $february;

    /**
     * The value for the march field.
     * @var        int
     */
    protected $march;

    /**
     * The value for the april field.
     * @var        int
     */
    protected $april;

    /**
     * The value for the may field.
     * @var        int
     */
    protected $may;

    /**
     * The value for the june field.
     * @var        int
     */
    protected $june;

    /**
     * The value for the july field.
     * @var        int
     */
    protected $july;

    /**
     * The value for the august field.
     * @var        int
     */
    protected $august;

    /**
     * The value for the september field.
     * @var        int
     */
    protected $september;

    /**
     * The value for the october field.
     * @var        int
     */
    protected $october;

    /**
     * The value for the november field.
     * @var        int
     */
    protected $november;

    /**
     * The value for the december field.
     * @var        int
     */
    protected $december;

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
     * The value for the e_code field.
     * @var        int
     */
    protected $e_code;

    /**
     * The value for the method field.
     * @var        string
     */
    protected $method;

    /**
     * The value for the methodtype field.
     * @var        string
     */
    protected $methodtype;

    /**
     * The value for the remark field.
     * @var        string
     */
    protected $remark;

    /**
     * The value for the otheritems field.
     * @var        double
     */
    protected $otheritems;

    /**
     * The value for the percentempty field.
     * @var        double
     */
    protected $percentempty;

    /**
     * The value for the troph field.
     * @var        double
     */
    protected $troph;

    /**
     * The value for the setroph field.
     * @var        double
     */
    protected $setroph;

    /**
     * The value for the sizemin field.
     * @var        double
     */
    protected $sizemin;

    /**
     * The value for the sizemax field.
     * @var        double
     */
    protected $sizemax;

    /**
     * The value for the sizetype field.
     * @var        string
     */
    protected $sizetype;

    /**
     * The value for the fishlength field.
     * @var        double
     */
    protected $fishlength;

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
     * Get the [dietcode] column value.
     *
     * @return int
     */
    public function getDietcode()
    {

        return $this->dietcode;
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
     * Get the [dietrefno] column value.
     *
     * @return int
     */
    public function getDietrefno()
    {

        return $this->dietrefno;
    }

    /**
     * Get the [samplestage] column value.
     *
     * @return string
     */
    public function getSamplestage()
    {

        return $this->samplestage;
    }

    /**
     * Get the [samplesize] column value.
     *
     * @return int
     */
    public function getSamplesize()
    {

        return $this->samplesize;
    }

    /**
     * Get the [yearstart] column value.
     *
     * @return int
     */
    public function getYearstart()
    {

        return $this->yearstart;
    }

    /**
     * Get the [yearend] column value.
     *
     * @return int
     */
    public function getYearend()
    {

        return $this->yearend;
    }

    /**
     * Get the [january] column value.
     *
     * @return int
     */
    public function getJanuary()
    {

        return $this->january;
    }

    /**
     * Get the [february] column value.
     *
     * @return int
     */
    public function getFebruary()
    {

        return $this->february;
    }

    /**
     * Get the [march] column value.
     *
     * @return int
     */
    public function getMarch()
    {

        return $this->march;
    }

    /**
     * Get the [april] column value.
     *
     * @return int
     */
    public function getApril()
    {

        return $this->april;
    }

    /**
     * Get the [may] column value.
     *
     * @return int
     */
    public function getMay()
    {

        return $this->may;
    }

    /**
     * Get the [june] column value.
     *
     * @return int
     */
    public function getJune()
    {

        return $this->june;
    }

    /**
     * Get the [july] column value.
     *
     * @return int
     */
    public function getJuly()
    {

        return $this->july;
    }

    /**
     * Get the [august] column value.
     *
     * @return int
     */
    public function getAugust()
    {

        return $this->august;
    }

    /**
     * Get the [september] column value.
     *
     * @return int
     */
    public function getSeptember()
    {

        return $this->september;
    }

    /**
     * Get the [october] column value.
     *
     * @return int
     */
    public function getOctober()
    {

        return $this->october;
    }

    /**
     * Get the [november] column value.
     *
     * @return int
     */
    public function getNovember()
    {

        return $this->november;
    }

    /**
     * Get the [december] column value.
     *
     * @return int
     */
    public function getDecember()
    {

        return $this->december;
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
     * Get the [e_code] column value.
     *
     * @return int
     */
    public function getECode()
    {

        return $this->e_code;
    }

    /**
     * Get the [method] column value.
     *
     * @return string
     */
    public function getMethod()
    {

        return $this->method;
    }

    /**
     * Get the [methodtype] column value.
     *
     * @return string
     */
    public function getMethodtype()
    {

        return $this->methodtype;
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
     * Get the [otheritems] column value.
     *
     * @return double
     */
    public function getOtheritems()
    {

        return $this->otheritems;
    }

    /**
     * Get the [percentempty] column value.
     *
     * @return double
     */
    public function getPercentempty()
    {

        return $this->percentempty;
    }

    /**
     * Get the [troph] column value.
     *
     * @return double
     */
    public function getTroph()
    {

        return $this->troph;
    }

    /**
     * Get the [setroph] column value.
     *
     * @return double
     */
    public function getSetroph()
    {

        return $this->setroph;
    }

    /**
     * Get the [sizemin] column value.
     *
     * @return double
     */
    public function getSizemin()
    {

        return $this->sizemin;
    }

    /**
     * Get the [sizemax] column value.
     *
     * @return double
     */
    public function getSizemax()
    {

        return $this->sizemax;
    }

    /**
     * Get the [sizetype] column value.
     *
     * @return string
     */
    public function getSizetype()
    {

        return $this->sizetype;
    }

    /**
     * Get the [fishlength] column value.
     *
     * @return double
     */
    public function getFishlength()
    {

        return $this->fishlength;
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
     * Set the value of [dietcode] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setDietcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dietcode !== $v) {
            $this->dietcode = $v;
            $this->modifiedColumns[] = DietPeer::DIETCODE;
        }


        return $this;
    } // setDietcode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = DietPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = DietPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [dietrefno] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setDietrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dietrefno !== $v) {
            $this->dietrefno = $v;
            $this->modifiedColumns[] = DietPeer::DIETREFNO;
        }


        return $this;
    } // setDietrefno()

    /**
     * Set the value of [samplestage] column.
     *
     * @param  string $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setSamplestage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->samplestage !== $v) {
            $this->samplestage = $v;
            $this->modifiedColumns[] = DietPeer::SAMPLESTAGE;
        }


        return $this;
    } // setSamplestage()

    /**
     * Set the value of [samplesize] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setSamplesize($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->samplesize !== $v) {
            $this->samplesize = $v;
            $this->modifiedColumns[] = DietPeer::SAMPLESIZE;
        }


        return $this;
    } // setSamplesize()

    /**
     * Set the value of [yearstart] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setYearstart($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->yearstart !== $v) {
            $this->yearstart = $v;
            $this->modifiedColumns[] = DietPeer::YEARSTART;
        }


        return $this;
    } // setYearstart()

    /**
     * Set the value of [yearend] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setYearend($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->yearend !== $v) {
            $this->yearend = $v;
            $this->modifiedColumns[] = DietPeer::YEAREND;
        }


        return $this;
    } // setYearend()

    /**
     * Set the value of [january] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setJanuary($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->january !== $v) {
            $this->january = $v;
            $this->modifiedColumns[] = DietPeer::JANUARY;
        }


        return $this;
    } // setJanuary()

    /**
     * Set the value of [february] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setFebruary($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->february !== $v) {
            $this->february = $v;
            $this->modifiedColumns[] = DietPeer::FEBRUARY;
        }


        return $this;
    } // setFebruary()

    /**
     * Set the value of [march] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setMarch($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->march !== $v) {
            $this->march = $v;
            $this->modifiedColumns[] = DietPeer::MARCH;
        }


        return $this;
    } // setMarch()

    /**
     * Set the value of [april] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setApril($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->april !== $v) {
            $this->april = $v;
            $this->modifiedColumns[] = DietPeer::APRIL;
        }


        return $this;
    } // setApril()

    /**
     * Set the value of [may] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setMay($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->may !== $v) {
            $this->may = $v;
            $this->modifiedColumns[] = DietPeer::MAY;
        }


        return $this;
    } // setMay()

    /**
     * Set the value of [june] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setJune($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->june !== $v) {
            $this->june = $v;
            $this->modifiedColumns[] = DietPeer::JUNE;
        }


        return $this;
    } // setJune()

    /**
     * Set the value of [july] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setJuly($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->july !== $v) {
            $this->july = $v;
            $this->modifiedColumns[] = DietPeer::JULY;
        }


        return $this;
    } // setJuly()

    /**
     * Set the value of [august] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setAugust($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->august !== $v) {
            $this->august = $v;
            $this->modifiedColumns[] = DietPeer::AUGUST;
        }


        return $this;
    } // setAugust()

    /**
     * Set the value of [september] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setSeptember($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->september !== $v) {
            $this->september = $v;
            $this->modifiedColumns[] = DietPeer::SEPTEMBER;
        }


        return $this;
    } // setSeptember()

    /**
     * Set the value of [october] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setOctober($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->october !== $v) {
            $this->october = $v;
            $this->modifiedColumns[] = DietPeer::OCTOBER;
        }


        return $this;
    } // setOctober()

    /**
     * Set the value of [november] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setNovember($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->november !== $v) {
            $this->november = $v;
            $this->modifiedColumns[] = DietPeer::NOVEMBER;
        }


        return $this;
    } // setNovember()

    /**
     * Set the value of [december] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setDecember($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->december !== $v) {
            $this->december = $v;
            $this->modifiedColumns[] = DietPeer::DECEMBER;
        }


        return $this;
    } // setDecember()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = DietPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = DietPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [e_code] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setECode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->e_code !== $v) {
            $this->e_code = $v;
            $this->modifiedColumns[] = DietPeer::E_CODE;
        }


        return $this;
    } // setECode()

    /**
     * Set the value of [method] column.
     *
     * @param  string $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setMethod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->method !== $v) {
            $this->method = $v;
            $this->modifiedColumns[] = DietPeer::METHOD;
        }


        return $this;
    } // setMethod()

    /**
     * Set the value of [methodtype] column.
     *
     * @param  string $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setMethodtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->methodtype !== $v) {
            $this->methodtype = $v;
            $this->modifiedColumns[] = DietPeer::METHODTYPE;
        }


        return $this;
    } // setMethodtype()

    /**
     * Set the value of [remark] column.
     *
     * @param  string $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setRemark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remark !== $v) {
            $this->remark = $v;
            $this->modifiedColumns[] = DietPeer::REMARK;
        }


        return $this;
    } // setRemark()

    /**
     * Set the value of [otheritems] column.
     *
     * @param  double $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setOtheritems($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->otheritems !== $v) {
            $this->otheritems = $v;
            $this->modifiedColumns[] = DietPeer::OTHERITEMS;
        }


        return $this;
    } // setOtheritems()

    /**
     * Set the value of [percentempty] column.
     *
     * @param  double $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setPercentempty($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->percentempty !== $v) {
            $this->percentempty = $v;
            $this->modifiedColumns[] = DietPeer::PERCENTEMPTY;
        }


        return $this;
    } // setPercentempty()

    /**
     * Set the value of [troph] column.
     *
     * @param  double $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setTroph($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->troph !== $v) {
            $this->troph = $v;
            $this->modifiedColumns[] = DietPeer::TROPH;
        }


        return $this;
    } // setTroph()

    /**
     * Set the value of [setroph] column.
     *
     * @param  double $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setSetroph($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->setroph !== $v) {
            $this->setroph = $v;
            $this->modifiedColumns[] = DietPeer::SETROPH;
        }


        return $this;
    } // setSetroph()

    /**
     * Set the value of [sizemin] column.
     *
     * @param  double $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setSizemin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sizemin !== $v) {
            $this->sizemin = $v;
            $this->modifiedColumns[] = DietPeer::SIZEMIN;
        }


        return $this;
    } // setSizemin()

    /**
     * Set the value of [sizemax] column.
     *
     * @param  double $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setSizemax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sizemax !== $v) {
            $this->sizemax = $v;
            $this->modifiedColumns[] = DietPeer::SIZEMAX;
        }


        return $this;
    } // setSizemax()

    /**
     * Set the value of [sizetype] column.
     *
     * @param  string $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setSizetype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sizetype !== $v) {
            $this->sizetype = $v;
            $this->modifiedColumns[] = DietPeer::SIZETYPE;
        }


        return $this;
    } // setSizetype()

    /**
     * Set the value of [fishlength] column.
     *
     * @param  double $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setFishlength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->fishlength !== $v) {
            $this->fishlength = $v;
            $this->modifiedColumns[] = DietPeer::FISHLENGTH;
        }


        return $this;
    } // setFishlength()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = DietPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Diet The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = DietPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = DietPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Diet The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = DietPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Diet The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = DietPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Diet The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = DietPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

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

            $this->dietcode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->stockcode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->speccode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->dietrefno = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->samplestage = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->samplesize = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->yearstart = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->yearend = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->january = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->february = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->march = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->april = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->may = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->june = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->july = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->august = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->september = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->october = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->november = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->december = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->c_code = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->locality = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->e_code = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->method = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->methodtype = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->remark = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->otheritems = ($row[$startcol + 26] !== null) ? (double) $row[$startcol + 26] : null;
            $this->percentempty = ($row[$startcol + 27] !== null) ? (double) $row[$startcol + 27] : null;
            $this->troph = ($row[$startcol + 28] !== null) ? (double) $row[$startcol + 28] : null;
            $this->setroph = ($row[$startcol + 29] !== null) ? (double) $row[$startcol + 29] : null;
            $this->sizemin = ($row[$startcol + 30] !== null) ? (double) $row[$startcol + 30] : null;
            $this->sizemax = ($row[$startcol + 31] !== null) ? (double) $row[$startcol + 31] : null;
            $this->sizetype = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->fishlength = ($row[$startcol + 33] !== null) ? (double) $row[$startcol + 33] : null;
            $this->entered = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->dateentered = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->modified = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->datemodified = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->expert = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->datechecked = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 40; // 40 = DietPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Diet object", $e);
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
            $con = Propel::getConnection(DietPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = DietPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(DietPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = DietQuery::create()
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
            $con = Propel::getConnection(DietPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                DietPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(DietPeer::DIETCODE)) {
            $modifiedColumns[':p' . $index++]  = '`DietCode`';
        }
        if ($this->isColumnModified(DietPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(DietPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Speccode`';
        }
        if ($this->isColumnModified(DietPeer::DIETREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`DietRefNo`';
        }
        if ($this->isColumnModified(DietPeer::SAMPLESTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`SampleStage`';
        }
        if ($this->isColumnModified(DietPeer::SAMPLESIZE)) {
            $modifiedColumns[':p' . $index++]  = '`SampleSize`';
        }
        if ($this->isColumnModified(DietPeer::YEARSTART)) {
            $modifiedColumns[':p' . $index++]  = '`YearStart`';
        }
        if ($this->isColumnModified(DietPeer::YEAREND)) {
            $modifiedColumns[':p' . $index++]  = '`YearEnd`';
        }
        if ($this->isColumnModified(DietPeer::JANUARY)) {
            $modifiedColumns[':p' . $index++]  = '`January`';
        }
        if ($this->isColumnModified(DietPeer::FEBRUARY)) {
            $modifiedColumns[':p' . $index++]  = '`February`';
        }
        if ($this->isColumnModified(DietPeer::MARCH)) {
            $modifiedColumns[':p' . $index++]  = '`March`';
        }
        if ($this->isColumnModified(DietPeer::APRIL)) {
            $modifiedColumns[':p' . $index++]  = '`April`';
        }
        if ($this->isColumnModified(DietPeer::MAY)) {
            $modifiedColumns[':p' . $index++]  = '`May`';
        }
        if ($this->isColumnModified(DietPeer::JUNE)) {
            $modifiedColumns[':p' . $index++]  = '`June`';
        }
        if ($this->isColumnModified(DietPeer::JULY)) {
            $modifiedColumns[':p' . $index++]  = '`July`';
        }
        if ($this->isColumnModified(DietPeer::AUGUST)) {
            $modifiedColumns[':p' . $index++]  = '`August`';
        }
        if ($this->isColumnModified(DietPeer::SEPTEMBER)) {
            $modifiedColumns[':p' . $index++]  = '`September`';
        }
        if ($this->isColumnModified(DietPeer::OCTOBER)) {
            $modifiedColumns[':p' . $index++]  = '`October`';
        }
        if ($this->isColumnModified(DietPeer::NOVEMBER)) {
            $modifiedColumns[':p' . $index++]  = '`November`';
        }
        if ($this->isColumnModified(DietPeer::DECEMBER)) {
            $modifiedColumns[':p' . $index++]  = '`December`';
        }
        if ($this->isColumnModified(DietPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(DietPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(DietPeer::E_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`E_Code`';
        }
        if ($this->isColumnModified(DietPeer::METHOD)) {
            $modifiedColumns[':p' . $index++]  = '`Method`';
        }
        if ($this->isColumnModified(DietPeer::METHODTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`MethodType`';
        }
        if ($this->isColumnModified(DietPeer::REMARK)) {
            $modifiedColumns[':p' . $index++]  = '`Remark`';
        }
        if ($this->isColumnModified(DietPeer::OTHERITEMS)) {
            $modifiedColumns[':p' . $index++]  = '`OtherItems`';
        }
        if ($this->isColumnModified(DietPeer::PERCENTEMPTY)) {
            $modifiedColumns[':p' . $index++]  = '`PercentEmpty`';
        }
        if ($this->isColumnModified(DietPeer::TROPH)) {
            $modifiedColumns[':p' . $index++]  = '`Troph`';
        }
        if ($this->isColumnModified(DietPeer::SETROPH)) {
            $modifiedColumns[':p' . $index++]  = '`seTroph`';
        }
        if ($this->isColumnModified(DietPeer::SIZEMIN)) {
            $modifiedColumns[':p' . $index++]  = '`SizeMin`';
        }
        if ($this->isColumnModified(DietPeer::SIZEMAX)) {
            $modifiedColumns[':p' . $index++]  = '`SizeMax`';
        }
        if ($this->isColumnModified(DietPeer::SIZETYPE)) {
            $modifiedColumns[':p' . $index++]  = '`SizeType`';
        }
        if ($this->isColumnModified(DietPeer::FISHLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`FishLength`';
        }
        if ($this->isColumnModified(DietPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(DietPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(DietPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(DietPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(DietPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(DietPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }

        $sql = sprintf(
            'INSERT INTO `diet` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`DietCode`':
                        $stmt->bindValue($identifier, $this->dietcode, PDO::PARAM_INT);
                        break;
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`Speccode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`DietRefNo`':
                        $stmt->bindValue($identifier, $this->dietrefno, PDO::PARAM_INT);
                        break;
                    case '`SampleStage`':
                        $stmt->bindValue($identifier, $this->samplestage, PDO::PARAM_STR);
                        break;
                    case '`SampleSize`':
                        $stmt->bindValue($identifier, $this->samplesize, PDO::PARAM_INT);
                        break;
                    case '`YearStart`':
                        $stmt->bindValue($identifier, $this->yearstart, PDO::PARAM_INT);
                        break;
                    case '`YearEnd`':
                        $stmt->bindValue($identifier, $this->yearend, PDO::PARAM_INT);
                        break;
                    case '`January`':
                        $stmt->bindValue($identifier, $this->january, PDO::PARAM_INT);
                        break;
                    case '`February`':
                        $stmt->bindValue($identifier, $this->february, PDO::PARAM_INT);
                        break;
                    case '`March`':
                        $stmt->bindValue($identifier, $this->march, PDO::PARAM_INT);
                        break;
                    case '`April`':
                        $stmt->bindValue($identifier, $this->april, PDO::PARAM_INT);
                        break;
                    case '`May`':
                        $stmt->bindValue($identifier, $this->may, PDO::PARAM_INT);
                        break;
                    case '`June`':
                        $stmt->bindValue($identifier, $this->june, PDO::PARAM_INT);
                        break;
                    case '`July`':
                        $stmt->bindValue($identifier, $this->july, PDO::PARAM_INT);
                        break;
                    case '`August`':
                        $stmt->bindValue($identifier, $this->august, PDO::PARAM_INT);
                        break;
                    case '`September`':
                        $stmt->bindValue($identifier, $this->september, PDO::PARAM_INT);
                        break;
                    case '`October`':
                        $stmt->bindValue($identifier, $this->october, PDO::PARAM_INT);
                        break;
                    case '`November`':
                        $stmt->bindValue($identifier, $this->november, PDO::PARAM_INT);
                        break;
                    case '`December`':
                        $stmt->bindValue($identifier, $this->december, PDO::PARAM_INT);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`E_Code`':
                        $stmt->bindValue($identifier, $this->e_code, PDO::PARAM_INT);
                        break;
                    case '`Method`':
                        $stmt->bindValue($identifier, $this->method, PDO::PARAM_STR);
                        break;
                    case '`MethodType`':
                        $stmt->bindValue($identifier, $this->methodtype, PDO::PARAM_STR);
                        break;
                    case '`Remark`':
                        $stmt->bindValue($identifier, $this->remark, PDO::PARAM_STR);
                        break;
                    case '`OtherItems`':
                        $stmt->bindValue($identifier, $this->otheritems, PDO::PARAM_STR);
                        break;
                    case '`PercentEmpty`':
                        $stmt->bindValue($identifier, $this->percentempty, PDO::PARAM_STR);
                        break;
                    case '`Troph`':
                        $stmt->bindValue($identifier, $this->troph, PDO::PARAM_STR);
                        break;
                    case '`seTroph`':
                        $stmt->bindValue($identifier, $this->setroph, PDO::PARAM_STR);
                        break;
                    case '`SizeMin`':
                        $stmt->bindValue($identifier, $this->sizemin, PDO::PARAM_STR);
                        break;
                    case '`SizeMax`':
                        $stmt->bindValue($identifier, $this->sizemax, PDO::PARAM_STR);
                        break;
                    case '`SizeType`':
                        $stmt->bindValue($identifier, $this->sizetype, PDO::PARAM_STR);
                        break;
                    case '`FishLength`':
                        $stmt->bindValue($identifier, $this->fishlength, PDO::PARAM_STR);
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


            if (($retval = DietPeer::doValidate($this, $columns)) !== true) {
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
        $pos = DietPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getDietcode();
                break;
            case 1:
                return $this->getStockcode();
                break;
            case 2:
                return $this->getSpeccode();
                break;
            case 3:
                return $this->getDietrefno();
                break;
            case 4:
                return $this->getSamplestage();
                break;
            case 5:
                return $this->getSamplesize();
                break;
            case 6:
                return $this->getYearstart();
                break;
            case 7:
                return $this->getYearend();
                break;
            case 8:
                return $this->getJanuary();
                break;
            case 9:
                return $this->getFebruary();
                break;
            case 10:
                return $this->getMarch();
                break;
            case 11:
                return $this->getApril();
                break;
            case 12:
                return $this->getMay();
                break;
            case 13:
                return $this->getJune();
                break;
            case 14:
                return $this->getJuly();
                break;
            case 15:
                return $this->getAugust();
                break;
            case 16:
                return $this->getSeptember();
                break;
            case 17:
                return $this->getOctober();
                break;
            case 18:
                return $this->getNovember();
                break;
            case 19:
                return $this->getDecember();
                break;
            case 20:
                return $this->getCCode();
                break;
            case 21:
                return $this->getLocality();
                break;
            case 22:
                return $this->getECode();
                break;
            case 23:
                return $this->getMethod();
                break;
            case 24:
                return $this->getMethodtype();
                break;
            case 25:
                return $this->getRemark();
                break;
            case 26:
                return $this->getOtheritems();
                break;
            case 27:
                return $this->getPercentempty();
                break;
            case 28:
                return $this->getTroph();
                break;
            case 29:
                return $this->getSetroph();
                break;
            case 30:
                return $this->getSizemin();
                break;
            case 31:
                return $this->getSizemax();
                break;
            case 32:
                return $this->getSizetype();
                break;
            case 33:
                return $this->getFishlength();
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
        if (isset($alreadyDumpedObjects['Diet'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Diet'][serialize($this->getPrimaryKey())] = true;
        $keys = DietPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getDietcode(),
            $keys[1] => $this->getStockcode(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getDietrefno(),
            $keys[4] => $this->getSamplestage(),
            $keys[5] => $this->getSamplesize(),
            $keys[6] => $this->getYearstart(),
            $keys[7] => $this->getYearend(),
            $keys[8] => $this->getJanuary(),
            $keys[9] => $this->getFebruary(),
            $keys[10] => $this->getMarch(),
            $keys[11] => $this->getApril(),
            $keys[12] => $this->getMay(),
            $keys[13] => $this->getJune(),
            $keys[14] => $this->getJuly(),
            $keys[15] => $this->getAugust(),
            $keys[16] => $this->getSeptember(),
            $keys[17] => $this->getOctober(),
            $keys[18] => $this->getNovember(),
            $keys[19] => $this->getDecember(),
            $keys[20] => $this->getCCode(),
            $keys[21] => $this->getLocality(),
            $keys[22] => $this->getECode(),
            $keys[23] => $this->getMethod(),
            $keys[24] => $this->getMethodtype(),
            $keys[25] => $this->getRemark(),
            $keys[26] => $this->getOtheritems(),
            $keys[27] => $this->getPercentempty(),
            $keys[28] => $this->getTroph(),
            $keys[29] => $this->getSetroph(),
            $keys[30] => $this->getSizemin(),
            $keys[31] => $this->getSizemax(),
            $keys[32] => $this->getSizetype(),
            $keys[33] => $this->getFishlength(),
            $keys[34] => $this->getEntered(),
            $keys[35] => $this->getDateentered(),
            $keys[36] => $this->getModified(),
            $keys[37] => $this->getDatemodified(),
            $keys[38] => $this->getExpert(),
            $keys[39] => $this->getDatechecked(),
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
        $pos = DietPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setDietcode($value);
                break;
            case 1:
                $this->setStockcode($value);
                break;
            case 2:
                $this->setSpeccode($value);
                break;
            case 3:
                $this->setDietrefno($value);
                break;
            case 4:
                $this->setSamplestage($value);
                break;
            case 5:
                $this->setSamplesize($value);
                break;
            case 6:
                $this->setYearstart($value);
                break;
            case 7:
                $this->setYearend($value);
                break;
            case 8:
                $this->setJanuary($value);
                break;
            case 9:
                $this->setFebruary($value);
                break;
            case 10:
                $this->setMarch($value);
                break;
            case 11:
                $this->setApril($value);
                break;
            case 12:
                $this->setMay($value);
                break;
            case 13:
                $this->setJune($value);
                break;
            case 14:
                $this->setJuly($value);
                break;
            case 15:
                $this->setAugust($value);
                break;
            case 16:
                $this->setSeptember($value);
                break;
            case 17:
                $this->setOctober($value);
                break;
            case 18:
                $this->setNovember($value);
                break;
            case 19:
                $this->setDecember($value);
                break;
            case 20:
                $this->setCCode($value);
                break;
            case 21:
                $this->setLocality($value);
                break;
            case 22:
                $this->setECode($value);
                break;
            case 23:
                $this->setMethod($value);
                break;
            case 24:
                $this->setMethodtype($value);
                break;
            case 25:
                $this->setRemark($value);
                break;
            case 26:
                $this->setOtheritems($value);
                break;
            case 27:
                $this->setPercentempty($value);
                break;
            case 28:
                $this->setTroph($value);
                break;
            case 29:
                $this->setSetroph($value);
                break;
            case 30:
                $this->setSizemin($value);
                break;
            case 31:
                $this->setSizemax($value);
                break;
            case 32:
                $this->setSizetype($value);
                break;
            case 33:
                $this->setFishlength($value);
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
        $keys = DietPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setDietcode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDietrefno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSamplestage($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSamplesize($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setYearstart($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setYearend($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setJanuary($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setFebruary($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setMarch($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setApril($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setMay($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setJune($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setJuly($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setAugust($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setSeptember($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setOctober($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setNovember($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDecember($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setCCode($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setLocality($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setECode($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setMethod($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setMethodtype($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setRemark($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setOtheritems($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setPercentempty($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setTroph($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setSetroph($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setSizemin($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setSizemax($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setSizetype($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setFishlength($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setEntered($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setDateentered($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setModified($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setDatemodified($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setExpert($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setDatechecked($arr[$keys[39]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(DietPeer::DATABASE_NAME);

        if ($this->isColumnModified(DietPeer::DIETCODE)) $criteria->add(DietPeer::DIETCODE, $this->dietcode);
        if ($this->isColumnModified(DietPeer::STOCKCODE)) $criteria->add(DietPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(DietPeer::SPECCODE)) $criteria->add(DietPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(DietPeer::DIETREFNO)) $criteria->add(DietPeer::DIETREFNO, $this->dietrefno);
        if ($this->isColumnModified(DietPeer::SAMPLESTAGE)) $criteria->add(DietPeer::SAMPLESTAGE, $this->samplestage);
        if ($this->isColumnModified(DietPeer::SAMPLESIZE)) $criteria->add(DietPeer::SAMPLESIZE, $this->samplesize);
        if ($this->isColumnModified(DietPeer::YEARSTART)) $criteria->add(DietPeer::YEARSTART, $this->yearstart);
        if ($this->isColumnModified(DietPeer::YEAREND)) $criteria->add(DietPeer::YEAREND, $this->yearend);
        if ($this->isColumnModified(DietPeer::JANUARY)) $criteria->add(DietPeer::JANUARY, $this->january);
        if ($this->isColumnModified(DietPeer::FEBRUARY)) $criteria->add(DietPeer::FEBRUARY, $this->february);
        if ($this->isColumnModified(DietPeer::MARCH)) $criteria->add(DietPeer::MARCH, $this->march);
        if ($this->isColumnModified(DietPeer::APRIL)) $criteria->add(DietPeer::APRIL, $this->april);
        if ($this->isColumnModified(DietPeer::MAY)) $criteria->add(DietPeer::MAY, $this->may);
        if ($this->isColumnModified(DietPeer::JUNE)) $criteria->add(DietPeer::JUNE, $this->june);
        if ($this->isColumnModified(DietPeer::JULY)) $criteria->add(DietPeer::JULY, $this->july);
        if ($this->isColumnModified(DietPeer::AUGUST)) $criteria->add(DietPeer::AUGUST, $this->august);
        if ($this->isColumnModified(DietPeer::SEPTEMBER)) $criteria->add(DietPeer::SEPTEMBER, $this->september);
        if ($this->isColumnModified(DietPeer::OCTOBER)) $criteria->add(DietPeer::OCTOBER, $this->october);
        if ($this->isColumnModified(DietPeer::NOVEMBER)) $criteria->add(DietPeer::NOVEMBER, $this->november);
        if ($this->isColumnModified(DietPeer::DECEMBER)) $criteria->add(DietPeer::DECEMBER, $this->december);
        if ($this->isColumnModified(DietPeer::C_CODE)) $criteria->add(DietPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(DietPeer::LOCALITY)) $criteria->add(DietPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(DietPeer::E_CODE)) $criteria->add(DietPeer::E_CODE, $this->e_code);
        if ($this->isColumnModified(DietPeer::METHOD)) $criteria->add(DietPeer::METHOD, $this->method);
        if ($this->isColumnModified(DietPeer::METHODTYPE)) $criteria->add(DietPeer::METHODTYPE, $this->methodtype);
        if ($this->isColumnModified(DietPeer::REMARK)) $criteria->add(DietPeer::REMARK, $this->remark);
        if ($this->isColumnModified(DietPeer::OTHERITEMS)) $criteria->add(DietPeer::OTHERITEMS, $this->otheritems);
        if ($this->isColumnModified(DietPeer::PERCENTEMPTY)) $criteria->add(DietPeer::PERCENTEMPTY, $this->percentempty);
        if ($this->isColumnModified(DietPeer::TROPH)) $criteria->add(DietPeer::TROPH, $this->troph);
        if ($this->isColumnModified(DietPeer::SETROPH)) $criteria->add(DietPeer::SETROPH, $this->setroph);
        if ($this->isColumnModified(DietPeer::SIZEMIN)) $criteria->add(DietPeer::SIZEMIN, $this->sizemin);
        if ($this->isColumnModified(DietPeer::SIZEMAX)) $criteria->add(DietPeer::SIZEMAX, $this->sizemax);
        if ($this->isColumnModified(DietPeer::SIZETYPE)) $criteria->add(DietPeer::SIZETYPE, $this->sizetype);
        if ($this->isColumnModified(DietPeer::FISHLENGTH)) $criteria->add(DietPeer::FISHLENGTH, $this->fishlength);
        if ($this->isColumnModified(DietPeer::ENTERED)) $criteria->add(DietPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(DietPeer::DATEENTERED)) $criteria->add(DietPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(DietPeer::MODIFIED)) $criteria->add(DietPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(DietPeer::DATEMODIFIED)) $criteria->add(DietPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(DietPeer::EXPERT)) $criteria->add(DietPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(DietPeer::DATECHECKED)) $criteria->add(DietPeer::DATECHECKED, $this->datechecked);

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
        $criteria = new Criteria(DietPeer::DATABASE_NAME);
        $criteria->add(DietPeer::DIETCODE, $this->dietcode);
        $criteria->add(DietPeer::STOCKCODE, $this->stockcode);
        $criteria->add(DietPeer::SAMPLESTAGE, $this->samplestage);

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
        $pks[0] = $this->getDietcode();
        $pks[1] = $this->getStockcode();
        $pks[2] = $this->getSamplestage();

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
        $this->setDietcode($keys[0]);
        $this->setStockcode($keys[1]);
        $this->setSamplestage($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getDietcode()) && (null === $this->getStockcode()) && (null === $this->getSamplestage());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Diet (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setDietcode($this->getDietcode());
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setDietrefno($this->getDietrefno());
        $copyObj->setSamplestage($this->getSamplestage());
        $copyObj->setSamplesize($this->getSamplesize());
        $copyObj->setYearstart($this->getYearstart());
        $copyObj->setYearend($this->getYearend());
        $copyObj->setJanuary($this->getJanuary());
        $copyObj->setFebruary($this->getFebruary());
        $copyObj->setMarch($this->getMarch());
        $copyObj->setApril($this->getApril());
        $copyObj->setMay($this->getMay());
        $copyObj->setJune($this->getJune());
        $copyObj->setJuly($this->getJuly());
        $copyObj->setAugust($this->getAugust());
        $copyObj->setSeptember($this->getSeptember());
        $copyObj->setOctober($this->getOctober());
        $copyObj->setNovember($this->getNovember());
        $copyObj->setDecember($this->getDecember());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setECode($this->getECode());
        $copyObj->setMethod($this->getMethod());
        $copyObj->setMethodtype($this->getMethodtype());
        $copyObj->setRemark($this->getRemark());
        $copyObj->setOtheritems($this->getOtheritems());
        $copyObj->setPercentempty($this->getPercentempty());
        $copyObj->setTroph($this->getTroph());
        $copyObj->setSetroph($this->getSetroph());
        $copyObj->setSizemin($this->getSizemin());
        $copyObj->setSizemax($this->getSizemax());
        $copyObj->setSizetype($this->getSizetype());
        $copyObj->setFishlength($this->getFishlength());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
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
     * @return Diet Clone of current object.
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
     * @return DietPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new DietPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->dietcode = null;
        $this->stockcode = null;
        $this->speccode = null;
        $this->dietrefno = null;
        $this->samplestage = null;
        $this->samplesize = null;
        $this->yearstart = null;
        $this->yearend = null;
        $this->january = null;
        $this->february = null;
        $this->march = null;
        $this->april = null;
        $this->may = null;
        $this->june = null;
        $this->july = null;
        $this->august = null;
        $this->september = null;
        $this->october = null;
        $this->november = null;
        $this->december = null;
        $this->c_code = null;
        $this->locality = null;
        $this->e_code = null;
        $this->method = null;
        $this->methodtype = null;
        $this->remark = null;
        $this->otheritems = null;
        $this->percentempty = null;
        $this->troph = null;
        $this->setroph = null;
        $this->sizemin = null;
        $this->sizemax = null;
        $this->sizetype = null;
        $this->fishlength = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
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
        return (string) $this->exportTo(DietPeer::DEFAULT_STRING_FORMAT);
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
