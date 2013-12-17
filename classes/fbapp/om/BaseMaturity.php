<?php


/**
 * Base class that represents a row from the 'maturity' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMaturity extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'MaturityPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        MaturityPeer
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
     * The value for the maturityrefno field.
     * @var        int
     */
    protected $maturityrefno;

    /**
     * The value for the sex field.
     * @var        string
     */
    protected $sex;

    /**
     * The value for the agematmin field.
     * @var        double
     */
    protected $agematmin;

    /**
     * The value for the agematmin2 field.
     * @var        double
     */
    protected $agematmin2;

    /**
     * The value for the agematref field.
     * @var        int
     */
    protected $agematref;

    /**
     * The value for the tm field.
     * @var        double
     */
    protected $tm;

    /**
     * The value for the number field.
     * @var        int
     */
    protected $number;

    /**
     * The value for the r2 field.
     * @var        double
     */
    protected $r2;

    /**
     * The value for the se_tm field.
     * @var        double
     */
    protected $se_tm;

    /**
     * The value for the sd_tm field.
     * @var        double
     */
    protected $sd_tm;

    /**
     * The value for the lcl_tm field.
     * @var        double
     */
    protected $lcl_tm;

    /**
     * The value for the ucl_tm field.
     * @var        double
     */
    protected $ucl_tm;

    /**
     * The value for the lengthmatmin field.
     * @var        double
     */
    protected $lengthmatmin;

    /**
     * The value for the lengthmatmin2 field.
     * @var        double
     */
    protected $lengthmatmin2;

    /**
     * The value for the type1 field.
     * @var        string
     */
    protected $type1;

    /**
     * The value for the lengthmatref field.
     * @var        int
     */
    protected $lengthmatref;

    /**
     * The value for the lm field.
     * @var        double
     */
    protected $lm;

    /**
     * The value for the se_lm field.
     * @var        double
     */
    protected $se_lm;

    /**
     * The value for the sd_lm field.
     * @var        double
     */
    protected $sd_lm;

    /**
     * The value for the lcl_lm field.
     * @var        double
     */
    protected $lcl_lm;

    /**
     * The value for the ucl_lm field.
     * @var        double
     */
    protected $ucl_lm;

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
     * The value for the e_code field.
     * @var        int
     */
    protected $e_code;

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
     * Get the [maturityrefno] column value.
     *
     * @return int
     */
    public function getMaturityrefno()
    {

        return $this->maturityrefno;
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
     * Get the [agematmin] column value.
     *
     * @return double
     */
    public function getAgematmin()
    {

        return $this->agematmin;
    }

    /**
     * Get the [agematmin2] column value.
     *
     * @return double
     */
    public function getAgematmin2()
    {

        return $this->agematmin2;
    }

    /**
     * Get the [agematref] column value.
     *
     * @return int
     */
    public function getAgematref()
    {

        return $this->agematref;
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
     * Get the [number] column value.
     *
     * @return int
     */
    public function getNumber()
    {

        return $this->number;
    }

    /**
     * Get the [r2] column value.
     *
     * @return double
     */
    public function getR2()
    {

        return $this->r2;
    }

    /**
     * Get the [se_tm] column value.
     *
     * @return double
     */
    public function getSeTm()
    {

        return $this->se_tm;
    }

    /**
     * Get the [sd_tm] column value.
     *
     * @return double
     */
    public function getSdTm()
    {

        return $this->sd_tm;
    }

    /**
     * Get the [lcl_tm] column value.
     *
     * @return double
     */
    public function getLclTm()
    {

        return $this->lcl_tm;
    }

    /**
     * Get the [ucl_tm] column value.
     *
     * @return double
     */
    public function getUclTm()
    {

        return $this->ucl_tm;
    }

    /**
     * Get the [lengthmatmin] column value.
     *
     * @return double
     */
    public function getLengthmatmin()
    {

        return $this->lengthmatmin;
    }

    /**
     * Get the [lengthmatmin2] column value.
     *
     * @return double
     */
    public function getLengthmatmin2()
    {

        return $this->lengthmatmin2;
    }

    /**
     * Get the [type1] column value.
     *
     * @return string
     */
    public function getType1()
    {

        return $this->type1;
    }

    /**
     * Get the [lengthmatref] column value.
     *
     * @return int
     */
    public function getLengthmatref()
    {

        return $this->lengthmatref;
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
     * Get the [se_lm] column value.
     *
     * @return double
     */
    public function getSeLm()
    {

        return $this->se_lm;
    }

    /**
     * Get the [sd_lm] column value.
     *
     * @return double
     */
    public function getSdLm()
    {

        return $this->sd_lm;
    }

    /**
     * Get the [lcl_lm] column value.
     *
     * @return double
     */
    public function getLclLm()
    {

        return $this->lcl_lm;
    }

    /**
     * Get the [ucl_lm] column value.
     *
     * @return double
     */
    public function getUclLm()
    {

        return $this->ucl_lm;
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
     * Get the [e_code] column value.
     *
     * @return int
     */
    public function getECode()
    {

        return $this->e_code;
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
     * @return Maturity The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = MaturityPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = MaturityPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = MaturityPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [maturityrefno] column.
     *
     * @param  int $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setMaturityrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->maturityrefno !== $v) {
            $this->maturityrefno = $v;
            $this->modifiedColumns[] = MaturityPeer::MATURITYREFNO;
        }


        return $this;
    } // setMaturityrefno()

    /**
     * Set the value of [sex] column.
     *
     * @param  string $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setSex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sex !== $v) {
            $this->sex = $v;
            $this->modifiedColumns[] = MaturityPeer::SEX;
        }


        return $this;
    } // setSex()

    /**
     * Set the value of [agematmin] column.
     *
     * @param  double $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setAgematmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->agematmin !== $v) {
            $this->agematmin = $v;
            $this->modifiedColumns[] = MaturityPeer::AGEMATMIN;
        }


        return $this;
    } // setAgematmin()

    /**
     * Set the value of [agematmin2] column.
     *
     * @param  double $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setAgematmin2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->agematmin2 !== $v) {
            $this->agematmin2 = $v;
            $this->modifiedColumns[] = MaturityPeer::AGEMATMIN2;
        }


        return $this;
    } // setAgematmin2()

    /**
     * Set the value of [agematref] column.
     *
     * @param  int $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setAgematref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->agematref !== $v) {
            $this->agematref = $v;
            $this->modifiedColumns[] = MaturityPeer::AGEMATREF;
        }


        return $this;
    } // setAgematref()

    /**
     * Set the value of [tm] column.
     *
     * @param  double $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setTm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tm !== $v) {
            $this->tm = $v;
            $this->modifiedColumns[] = MaturityPeer::TM;
        }


        return $this;
    } // setTm()

    /**
     * Set the value of [number] column.
     *
     * @param  int $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setNumber($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->number !== $v) {
            $this->number = $v;
            $this->modifiedColumns[] = MaturityPeer::NUMBER;
        }


        return $this;
    } // setNumber()

    /**
     * Set the value of [r2] column.
     *
     * @param  double $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setR2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->r2 !== $v) {
            $this->r2 = $v;
            $this->modifiedColumns[] = MaturityPeer::R2;
        }


        return $this;
    } // setR2()

    /**
     * Set the value of [se_tm] column.
     *
     * @param  double $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setSeTm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->se_tm !== $v) {
            $this->se_tm = $v;
            $this->modifiedColumns[] = MaturityPeer::SE_TM;
        }


        return $this;
    } // setSeTm()

    /**
     * Set the value of [sd_tm] column.
     *
     * @param  double $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setSdTm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sd_tm !== $v) {
            $this->sd_tm = $v;
            $this->modifiedColumns[] = MaturityPeer::SD_TM;
        }


        return $this;
    } // setSdTm()

    /**
     * Set the value of [lcl_tm] column.
     *
     * @param  double $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setLclTm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lcl_tm !== $v) {
            $this->lcl_tm = $v;
            $this->modifiedColumns[] = MaturityPeer::LCL_TM;
        }


        return $this;
    } // setLclTm()

    /**
     * Set the value of [ucl_tm] column.
     *
     * @param  double $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setUclTm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ucl_tm !== $v) {
            $this->ucl_tm = $v;
            $this->modifiedColumns[] = MaturityPeer::UCL_TM;
        }


        return $this;
    } // setUclTm()

    /**
     * Set the value of [lengthmatmin] column.
     *
     * @param  double $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setLengthmatmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lengthmatmin !== $v) {
            $this->lengthmatmin = $v;
            $this->modifiedColumns[] = MaturityPeer::LENGTHMATMIN;
        }


        return $this;
    } // setLengthmatmin()

    /**
     * Set the value of [lengthmatmin2] column.
     *
     * @param  double $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setLengthmatmin2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lengthmatmin2 !== $v) {
            $this->lengthmatmin2 = $v;
            $this->modifiedColumns[] = MaturityPeer::LENGTHMATMIN2;
        }


        return $this;
    } // setLengthmatmin2()

    /**
     * Set the value of [type1] column.
     *
     * @param  string $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setType1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type1 !== $v) {
            $this->type1 = $v;
            $this->modifiedColumns[] = MaturityPeer::TYPE1;
        }


        return $this;
    } // setType1()

    /**
     * Set the value of [lengthmatref] column.
     *
     * @param  int $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setLengthmatref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lengthmatref !== $v) {
            $this->lengthmatref = $v;
            $this->modifiedColumns[] = MaturityPeer::LENGTHMATREF;
        }


        return $this;
    } // setLengthmatref()

    /**
     * Set the value of [lm] column.
     *
     * @param  double $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setLm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lm !== $v) {
            $this->lm = $v;
            $this->modifiedColumns[] = MaturityPeer::LM;
        }


        return $this;
    } // setLm()

    /**
     * Set the value of [se_lm] column.
     *
     * @param  double $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setSeLm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->se_lm !== $v) {
            $this->se_lm = $v;
            $this->modifiedColumns[] = MaturityPeer::SE_LM;
        }


        return $this;
    } // setSeLm()

    /**
     * Set the value of [sd_lm] column.
     *
     * @param  double $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setSdLm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sd_lm !== $v) {
            $this->sd_lm = $v;
            $this->modifiedColumns[] = MaturityPeer::SD_LM;
        }


        return $this;
    } // setSdLm()

    /**
     * Set the value of [lcl_lm] column.
     *
     * @param  double $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setLclLm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lcl_lm !== $v) {
            $this->lcl_lm = $v;
            $this->modifiedColumns[] = MaturityPeer::LCL_LM;
        }


        return $this;
    } // setLclLm()

    /**
     * Set the value of [ucl_lm] column.
     *
     * @param  double $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setUclLm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ucl_lm !== $v) {
            $this->ucl_lm = $v;
            $this->modifiedColumns[] = MaturityPeer::UCL_LM;
        }


        return $this;
    } // setUclLm()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = MaturityPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = MaturityPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [e_code] column.
     *
     * @param  int $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setECode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->e_code !== $v) {
            $this->e_code = $v;
            $this->modifiedColumns[] = MaturityPeer::E_CODE;
        }


        return $this;
    } // setECode()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = MaturityPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = MaturityPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Maturity The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = MaturityPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = MaturityPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Maturity The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = MaturityPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Maturity The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = MaturityPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Maturity The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = MaturityPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Maturity The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = MaturityPeer::TS;
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
            $this->maturityrefno = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->sex = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->agematmin = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
            $this->agematmin2 = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->agematref = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->tm = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->number = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->r2 = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->se_tm = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->sd_tm = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->lcl_tm = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->ucl_tm = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->lengthmatmin = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
            $this->lengthmatmin2 = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->type1 = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->lengthmatref = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->lm = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->se_lm = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->sd_lm = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->lcl_lm = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->ucl_lm = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
            $this->locality = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->c_code = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->e_code = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->comment = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->entered = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->dateentered = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->modified = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->datemodified = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->expert = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->datechecked = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->ts = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 35; // 35 = MaturityPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Maturity object", $e);
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
            $con = Propel::getConnection(MaturityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = MaturityPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(MaturityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = MaturityQuery::create()
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
            $con = Propel::getConnection(MaturityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                MaturityPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(MaturityPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(MaturityPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Speccode`';
        }
        if ($this->isColumnModified(MaturityPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(MaturityPeer::MATURITYREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`MaturityRefNo`';
        }
        if ($this->isColumnModified(MaturityPeer::SEX)) {
            $modifiedColumns[':p' . $index++]  = '`Sex`';
        }
        if ($this->isColumnModified(MaturityPeer::AGEMATMIN)) {
            $modifiedColumns[':p' . $index++]  = '`AgeMatMin`';
        }
        if ($this->isColumnModified(MaturityPeer::AGEMATMIN2)) {
            $modifiedColumns[':p' . $index++]  = '`AgeMatMin2`';
        }
        if ($this->isColumnModified(MaturityPeer::AGEMATREF)) {
            $modifiedColumns[':p' . $index++]  = '`AgeMatRef`';
        }
        if ($this->isColumnModified(MaturityPeer::TM)) {
            $modifiedColumns[':p' . $index++]  = '`tm`';
        }
        if ($this->isColumnModified(MaturityPeer::NUMBER)) {
            $modifiedColumns[':p' . $index++]  = '`Number`';
        }
        if ($this->isColumnModified(MaturityPeer::R2)) {
            $modifiedColumns[':p' . $index++]  = '`r2`';
        }
        if ($this->isColumnModified(MaturityPeer::SE_TM)) {
            $modifiedColumns[':p' . $index++]  = '`SE_tm`';
        }
        if ($this->isColumnModified(MaturityPeer::SD_TM)) {
            $modifiedColumns[':p' . $index++]  = '`SD_tm`';
        }
        if ($this->isColumnModified(MaturityPeer::LCL_TM)) {
            $modifiedColumns[':p' . $index++]  = '`LCL_tm`';
        }
        if ($this->isColumnModified(MaturityPeer::UCL_TM)) {
            $modifiedColumns[':p' . $index++]  = '`UCL_tm`';
        }
        if ($this->isColumnModified(MaturityPeer::LENGTHMATMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LengthMatMin`';
        }
        if ($this->isColumnModified(MaturityPeer::LENGTHMATMIN2)) {
            $modifiedColumns[':p' . $index++]  = '`LengthMatMin2`';
        }
        if ($this->isColumnModified(MaturityPeer::TYPE1)) {
            $modifiedColumns[':p' . $index++]  = '`Type1`';
        }
        if ($this->isColumnModified(MaturityPeer::LENGTHMATREF)) {
            $modifiedColumns[':p' . $index++]  = '`LengthMatRef`';
        }
        if ($this->isColumnModified(MaturityPeer::LM)) {
            $modifiedColumns[':p' . $index++]  = '`Lm`';
        }
        if ($this->isColumnModified(MaturityPeer::SE_LM)) {
            $modifiedColumns[':p' . $index++]  = '`SE_Lm`';
        }
        if ($this->isColumnModified(MaturityPeer::SD_LM)) {
            $modifiedColumns[':p' . $index++]  = '`SD_Lm`';
        }
        if ($this->isColumnModified(MaturityPeer::LCL_LM)) {
            $modifiedColumns[':p' . $index++]  = '`LCL_Lm`';
        }
        if ($this->isColumnModified(MaturityPeer::UCL_LM)) {
            $modifiedColumns[':p' . $index++]  = '`UCL_Lm`';
        }
        if ($this->isColumnModified(MaturityPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(MaturityPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(MaturityPeer::E_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`E_CODE`';
        }
        if ($this->isColumnModified(MaturityPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Comment`';
        }
        if ($this->isColumnModified(MaturityPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(MaturityPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(MaturityPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(MaturityPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(MaturityPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(MaturityPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(MaturityPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `maturity` (%s) VALUES (%s)',
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
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`MaturityRefNo`':
                        $stmt->bindValue($identifier, $this->maturityrefno, PDO::PARAM_INT);
                        break;
                    case '`Sex`':
                        $stmt->bindValue($identifier, $this->sex, PDO::PARAM_STR);
                        break;
                    case '`AgeMatMin`':
                        $stmt->bindValue($identifier, $this->agematmin, PDO::PARAM_STR);
                        break;
                    case '`AgeMatMin2`':
                        $stmt->bindValue($identifier, $this->agematmin2, PDO::PARAM_STR);
                        break;
                    case '`AgeMatRef`':
                        $stmt->bindValue($identifier, $this->agematref, PDO::PARAM_INT);
                        break;
                    case '`tm`':
                        $stmt->bindValue($identifier, $this->tm, PDO::PARAM_STR);
                        break;
                    case '`Number`':
                        $stmt->bindValue($identifier, $this->number, PDO::PARAM_INT);
                        break;
                    case '`r2`':
                        $stmt->bindValue($identifier, $this->r2, PDO::PARAM_STR);
                        break;
                    case '`SE_tm`':
                        $stmt->bindValue($identifier, $this->se_tm, PDO::PARAM_STR);
                        break;
                    case '`SD_tm`':
                        $stmt->bindValue($identifier, $this->sd_tm, PDO::PARAM_STR);
                        break;
                    case '`LCL_tm`':
                        $stmt->bindValue($identifier, $this->lcl_tm, PDO::PARAM_STR);
                        break;
                    case '`UCL_tm`':
                        $stmt->bindValue($identifier, $this->ucl_tm, PDO::PARAM_STR);
                        break;
                    case '`LengthMatMin`':
                        $stmt->bindValue($identifier, $this->lengthmatmin, PDO::PARAM_STR);
                        break;
                    case '`LengthMatMin2`':
                        $stmt->bindValue($identifier, $this->lengthmatmin2, PDO::PARAM_STR);
                        break;
                    case '`Type1`':
                        $stmt->bindValue($identifier, $this->type1, PDO::PARAM_STR);
                        break;
                    case '`LengthMatRef`':
                        $stmt->bindValue($identifier, $this->lengthmatref, PDO::PARAM_INT);
                        break;
                    case '`Lm`':
                        $stmt->bindValue($identifier, $this->lm, PDO::PARAM_STR);
                        break;
                    case '`SE_Lm`':
                        $stmt->bindValue($identifier, $this->se_lm, PDO::PARAM_STR);
                        break;
                    case '`SD_Lm`':
                        $stmt->bindValue($identifier, $this->sd_lm, PDO::PARAM_STR);
                        break;
                    case '`LCL_Lm`':
                        $stmt->bindValue($identifier, $this->lcl_lm, PDO::PARAM_STR);
                        break;
                    case '`UCL_Lm`':
                        $stmt->bindValue($identifier, $this->ucl_lm, PDO::PARAM_STR);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`E_CODE`':
                        $stmt->bindValue($identifier, $this->e_code, PDO::PARAM_INT);
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


            if (($retval = MaturityPeer::doValidate($this, $columns)) !== true) {
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
        $pos = MaturityPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getMaturityrefno();
                break;
            case 4:
                return $this->getSex();
                break;
            case 5:
                return $this->getAgematmin();
                break;
            case 6:
                return $this->getAgematmin2();
                break;
            case 7:
                return $this->getAgematref();
                break;
            case 8:
                return $this->getTm();
                break;
            case 9:
                return $this->getNumber();
                break;
            case 10:
                return $this->getR2();
                break;
            case 11:
                return $this->getSeTm();
                break;
            case 12:
                return $this->getSdTm();
                break;
            case 13:
                return $this->getLclTm();
                break;
            case 14:
                return $this->getUclTm();
                break;
            case 15:
                return $this->getLengthmatmin();
                break;
            case 16:
                return $this->getLengthmatmin2();
                break;
            case 17:
                return $this->getType1();
                break;
            case 18:
                return $this->getLengthmatref();
                break;
            case 19:
                return $this->getLm();
                break;
            case 20:
                return $this->getSeLm();
                break;
            case 21:
                return $this->getSdLm();
                break;
            case 22:
                return $this->getLclLm();
                break;
            case 23:
                return $this->getUclLm();
                break;
            case 24:
                return $this->getLocality();
                break;
            case 25:
                return $this->getCCode();
                break;
            case 26:
                return $this->getECode();
                break;
            case 27:
                return $this->getComment();
                break;
            case 28:
                return $this->getEntered();
                break;
            case 29:
                return $this->getDateentered();
                break;
            case 30:
                return $this->getModified();
                break;
            case 31:
                return $this->getDatemodified();
                break;
            case 32:
                return $this->getExpert();
                break;
            case 33:
                return $this->getDatechecked();
                break;
            case 34:
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
        if (isset($alreadyDumpedObjects['Maturity'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Maturity'][serialize($this->getPrimaryKey())] = true;
        $keys = MaturityPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getSpeccode(),
            $keys[2] => $this->getStockcode(),
            $keys[3] => $this->getMaturityrefno(),
            $keys[4] => $this->getSex(),
            $keys[5] => $this->getAgematmin(),
            $keys[6] => $this->getAgematmin2(),
            $keys[7] => $this->getAgematref(),
            $keys[8] => $this->getTm(),
            $keys[9] => $this->getNumber(),
            $keys[10] => $this->getR2(),
            $keys[11] => $this->getSeTm(),
            $keys[12] => $this->getSdTm(),
            $keys[13] => $this->getLclTm(),
            $keys[14] => $this->getUclTm(),
            $keys[15] => $this->getLengthmatmin(),
            $keys[16] => $this->getLengthmatmin2(),
            $keys[17] => $this->getType1(),
            $keys[18] => $this->getLengthmatref(),
            $keys[19] => $this->getLm(),
            $keys[20] => $this->getSeLm(),
            $keys[21] => $this->getSdLm(),
            $keys[22] => $this->getLclLm(),
            $keys[23] => $this->getUclLm(),
            $keys[24] => $this->getLocality(),
            $keys[25] => $this->getCCode(),
            $keys[26] => $this->getECode(),
            $keys[27] => $this->getComment(),
            $keys[28] => $this->getEntered(),
            $keys[29] => $this->getDateentered(),
            $keys[30] => $this->getModified(),
            $keys[31] => $this->getDatemodified(),
            $keys[32] => $this->getExpert(),
            $keys[33] => $this->getDatechecked(),
            $keys[34] => $this->getTs(),
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
        $pos = MaturityPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setMaturityrefno($value);
                break;
            case 4:
                $this->setSex($value);
                break;
            case 5:
                $this->setAgematmin($value);
                break;
            case 6:
                $this->setAgematmin2($value);
                break;
            case 7:
                $this->setAgematref($value);
                break;
            case 8:
                $this->setTm($value);
                break;
            case 9:
                $this->setNumber($value);
                break;
            case 10:
                $this->setR2($value);
                break;
            case 11:
                $this->setSeTm($value);
                break;
            case 12:
                $this->setSdTm($value);
                break;
            case 13:
                $this->setLclTm($value);
                break;
            case 14:
                $this->setUclTm($value);
                break;
            case 15:
                $this->setLengthmatmin($value);
                break;
            case 16:
                $this->setLengthmatmin2($value);
                break;
            case 17:
                $this->setType1($value);
                break;
            case 18:
                $this->setLengthmatref($value);
                break;
            case 19:
                $this->setLm($value);
                break;
            case 20:
                $this->setSeLm($value);
                break;
            case 21:
                $this->setSdLm($value);
                break;
            case 22:
                $this->setLclLm($value);
                break;
            case 23:
                $this->setUclLm($value);
                break;
            case 24:
                $this->setLocality($value);
                break;
            case 25:
                $this->setCCode($value);
                break;
            case 26:
                $this->setECode($value);
                break;
            case 27:
                $this->setComment($value);
                break;
            case 28:
                $this->setEntered($value);
                break;
            case 29:
                $this->setDateentered($value);
                break;
            case 30:
                $this->setModified($value);
                break;
            case 31:
                $this->setDatemodified($value);
                break;
            case 32:
                $this->setExpert($value);
                break;
            case 33:
                $this->setDatechecked($value);
                break;
            case 34:
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
        $keys = MaturityPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSpeccode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setStockcode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setMaturityrefno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSex($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAgematmin($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAgematmin2($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setAgematref($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTm($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setNumber($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setR2($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setSeTm($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setSdTm($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setLclTm($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setUclTm($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setLengthmatmin($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setLengthmatmin2($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setType1($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setLengthmatref($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setLm($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setSeLm($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setSdLm($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setLclLm($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setUclLm($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setLocality($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setCCode($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setECode($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setComment($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setEntered($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setDateentered($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setModified($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setDatemodified($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setExpert($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setDatechecked($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setTs($arr[$keys[34]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(MaturityPeer::DATABASE_NAME);

        if ($this->isColumnModified(MaturityPeer::AUTOCTR)) $criteria->add(MaturityPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(MaturityPeer::SPECCODE)) $criteria->add(MaturityPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(MaturityPeer::STOCKCODE)) $criteria->add(MaturityPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(MaturityPeer::MATURITYREFNO)) $criteria->add(MaturityPeer::MATURITYREFNO, $this->maturityrefno);
        if ($this->isColumnModified(MaturityPeer::SEX)) $criteria->add(MaturityPeer::SEX, $this->sex);
        if ($this->isColumnModified(MaturityPeer::AGEMATMIN)) $criteria->add(MaturityPeer::AGEMATMIN, $this->agematmin);
        if ($this->isColumnModified(MaturityPeer::AGEMATMIN2)) $criteria->add(MaturityPeer::AGEMATMIN2, $this->agematmin2);
        if ($this->isColumnModified(MaturityPeer::AGEMATREF)) $criteria->add(MaturityPeer::AGEMATREF, $this->agematref);
        if ($this->isColumnModified(MaturityPeer::TM)) $criteria->add(MaturityPeer::TM, $this->tm);
        if ($this->isColumnModified(MaturityPeer::NUMBER)) $criteria->add(MaturityPeer::NUMBER, $this->number);
        if ($this->isColumnModified(MaturityPeer::R2)) $criteria->add(MaturityPeer::R2, $this->r2);
        if ($this->isColumnModified(MaturityPeer::SE_TM)) $criteria->add(MaturityPeer::SE_TM, $this->se_tm);
        if ($this->isColumnModified(MaturityPeer::SD_TM)) $criteria->add(MaturityPeer::SD_TM, $this->sd_tm);
        if ($this->isColumnModified(MaturityPeer::LCL_TM)) $criteria->add(MaturityPeer::LCL_TM, $this->lcl_tm);
        if ($this->isColumnModified(MaturityPeer::UCL_TM)) $criteria->add(MaturityPeer::UCL_TM, $this->ucl_tm);
        if ($this->isColumnModified(MaturityPeer::LENGTHMATMIN)) $criteria->add(MaturityPeer::LENGTHMATMIN, $this->lengthmatmin);
        if ($this->isColumnModified(MaturityPeer::LENGTHMATMIN2)) $criteria->add(MaturityPeer::LENGTHMATMIN2, $this->lengthmatmin2);
        if ($this->isColumnModified(MaturityPeer::TYPE1)) $criteria->add(MaturityPeer::TYPE1, $this->type1);
        if ($this->isColumnModified(MaturityPeer::LENGTHMATREF)) $criteria->add(MaturityPeer::LENGTHMATREF, $this->lengthmatref);
        if ($this->isColumnModified(MaturityPeer::LM)) $criteria->add(MaturityPeer::LM, $this->lm);
        if ($this->isColumnModified(MaturityPeer::SE_LM)) $criteria->add(MaturityPeer::SE_LM, $this->se_lm);
        if ($this->isColumnModified(MaturityPeer::SD_LM)) $criteria->add(MaturityPeer::SD_LM, $this->sd_lm);
        if ($this->isColumnModified(MaturityPeer::LCL_LM)) $criteria->add(MaturityPeer::LCL_LM, $this->lcl_lm);
        if ($this->isColumnModified(MaturityPeer::UCL_LM)) $criteria->add(MaturityPeer::UCL_LM, $this->ucl_lm);
        if ($this->isColumnModified(MaturityPeer::LOCALITY)) $criteria->add(MaturityPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(MaturityPeer::C_CODE)) $criteria->add(MaturityPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(MaturityPeer::E_CODE)) $criteria->add(MaturityPeer::E_CODE, $this->e_code);
        if ($this->isColumnModified(MaturityPeer::COMMENT)) $criteria->add(MaturityPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(MaturityPeer::ENTERED)) $criteria->add(MaturityPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(MaturityPeer::DATEENTERED)) $criteria->add(MaturityPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(MaturityPeer::MODIFIED)) $criteria->add(MaturityPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(MaturityPeer::DATEMODIFIED)) $criteria->add(MaturityPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(MaturityPeer::EXPERT)) $criteria->add(MaturityPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(MaturityPeer::DATECHECKED)) $criteria->add(MaturityPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(MaturityPeer::TS)) $criteria->add(MaturityPeer::TS, $this->ts);

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
        $criteria = new Criteria(MaturityPeer::DATABASE_NAME);
        $criteria->add(MaturityPeer::STOCKCODE, $this->stockcode);
        $criteria->add(MaturityPeer::MATURITYREFNO, $this->maturityrefno);
        $criteria->add(MaturityPeer::SEX, $this->sex);
        $criteria->add(MaturityPeer::LOCALITY, $this->locality);

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
        $pks[1] = $this->getMaturityrefno();
        $pks[2] = $this->getSex();
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
        $this->setMaturityrefno($keys[1]);
        $this->setSex($keys[2]);
        $this->setLocality($keys[3]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getStockcode()) && (null === $this->getMaturityrefno()) && (null === $this->getSex()) && (null === $this->getLocality());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Maturity (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setMaturityrefno($this->getMaturityrefno());
        $copyObj->setSex($this->getSex());
        $copyObj->setAgematmin($this->getAgematmin());
        $copyObj->setAgematmin2($this->getAgematmin2());
        $copyObj->setAgematref($this->getAgematref());
        $copyObj->setTm($this->getTm());
        $copyObj->setNumber($this->getNumber());
        $copyObj->setR2($this->getR2());
        $copyObj->setSeTm($this->getSeTm());
        $copyObj->setSdTm($this->getSdTm());
        $copyObj->setLclTm($this->getLclTm());
        $copyObj->setUclTm($this->getUclTm());
        $copyObj->setLengthmatmin($this->getLengthmatmin());
        $copyObj->setLengthmatmin2($this->getLengthmatmin2());
        $copyObj->setType1($this->getType1());
        $copyObj->setLengthmatref($this->getLengthmatref());
        $copyObj->setLm($this->getLm());
        $copyObj->setSeLm($this->getSeLm());
        $copyObj->setSdLm($this->getSdLm());
        $copyObj->setLclLm($this->getLclLm());
        $copyObj->setUclLm($this->getUclLm());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setECode($this->getECode());
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
     * @return Maturity Clone of current object.
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
     * @return MaturityPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new MaturityPeer();
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
        $this->maturityrefno = null;
        $this->sex = null;
        $this->agematmin = null;
        $this->agematmin2 = null;
        $this->agematref = null;
        $this->tm = null;
        $this->number = null;
        $this->r2 = null;
        $this->se_tm = null;
        $this->sd_tm = null;
        $this->lcl_tm = null;
        $this->ucl_tm = null;
        $this->lengthmatmin = null;
        $this->lengthmatmin2 = null;
        $this->type1 = null;
        $this->lengthmatref = null;
        $this->lm = null;
        $this->se_lm = null;
        $this->sd_lm = null;
        $this->lcl_lm = null;
        $this->ucl_lm = null;
        $this->locality = null;
        $this->c_code = null;
        $this->e_code = null;
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
        return (string) $this->exportTo(MaturityPeer::DEFAULT_STRING_FORMAT);
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
