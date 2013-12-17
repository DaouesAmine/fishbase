<?php


/**
 * Base class that represents a row from the 'abundance' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseAbundance extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'AbundancePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AbundancePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the abundancecode field.
     * @var        int
     */
    protected $abundancecode;

    /**
     * The value for the stockcode field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $stockcode;

    /**
     * The value for the speccode field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the mainref field.
     * @var        int
     */
    protected $mainref;

    /**
     * The value for the locality field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $locality;

    /**
     * The value for the c_code field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the e_code field.
     * @var        int
     */
    protected $e_code;

    /**
     * The value for the introduced field.
     * @var        boolean
     */
    protected $introduced;

    /**
     * The value for the year_intro field.
     * @var        int
     */
    protected $year_intro;

    /**
     * The value for the lifestage1 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lifestage1;

    /**
     * The value for the sex field.
     * @var        string
     */
    protected $sex;

    /**
     * The value for the lifestage2 field.
     * @var        string
     */
    protected $lifestage2;

    /**
     * The value for the sexual field.
     * @var        boolean
     */
    protected $sexual;

    /**
     * The value for the asexual field.
     * @var        boolean
     */
    protected $asexual;

    /**
     * The value for the abundance_quan field.
     * @var        double
     */
    protected $abundance_quan;

    /**
     * The value for the abundance_quanunit field.
     * @var        string
     */
    protected $abundance_quanunit;

    /**
     * The value for the abundance_semiquan field.
     * @var        string
     */
    protected $abundance_semiquan;

    /**
     * The value for the abundance_semiquanunit field.
     * @var        string
     */
    protected $abundance_semiquanunit;

    /**
     * The value for the abundance_qual field.
     * @var        string
     */
    protected $abundance_qual;

    /**
     * The value for the depth field.
     * @var        double
     */
    protected $depth;

    /**
     * The value for the depthunit field.
     * @var        string
     */
    protected $depthunit;

    /**
     * The value for the year_occur1 field.
     * @var        int
     */
    protected $year_occur1;

    /**
     * The value for the year_occur2 field.
     * @var        int
     */
    protected $year_occur2;

    /**
     * The value for the date_occur1 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $date_occur1;

    /**
     * The value for the date_occur2 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $date_occur2;

    /**
     * The value for the seasonal field.
     * @var        string
     */
    protected $seasonal;

    /**
     * The value for the period field.
     * @var        string
     */
    protected $period;

    /**
     * The value for the recordtype field.
     * @var        string
     */
    protected $recordtype;

    /**
     * The value for the method field.
     * @var        string
     */
    protected $method;

    /**
     * The value for the remarks field.
     * @var        string
     */
    protected $remarks;

    /**
     * The value for the invasivereport field.
     * @var        string
     */
    protected $invasivereport;

    /**
     * The value for the invasivenessdegree field.
     * @var        string
     */
    protected $invasivenessdegree;

    /**
     * The value for the reporttype field.
     * @var        string
     */
    protected $reporttype;

    /**
     * The value for the invasiveref field.
     * @var        int
     */
    protected $invasiveref;

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
        $this->stockcode = 0;
        $this->speccode = 0;
        $this->locality = '';
        $this->c_code = '';
        $this->lifestage1 = '';
        $this->date_occur1 = '';
        $this->date_occur2 = '';
    }

    /**
     * Initializes internal state of BaseAbundance object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [abundancecode] column value.
     *
     * @return int
     */
    public function getAbundancecode()
    {

        return $this->abundancecode;
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
     * Get the [mainref] column value.
     *
     * @return int
     */
    public function getMainref()
    {

        return $this->mainref;
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
     * Get the [introduced] column value.
     *
     * @return boolean
     */
    public function getIntroduced()
    {

        return $this->introduced;
    }

    /**
     * Get the [year_intro] column value.
     *
     * @return int
     */
    public function getYearIntro()
    {

        return $this->year_intro;
    }

    /**
     * Get the [lifestage1] column value.
     *
     * @return string
     */
    public function getLifestage1()
    {

        return $this->lifestage1;
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
     * Get the [lifestage2] column value.
     *
     * @return string
     */
    public function getLifestage2()
    {

        return $this->lifestage2;
    }

    /**
     * Get the [sexual] column value.
     *
     * @return boolean
     */
    public function getSexual()
    {

        return $this->sexual;
    }

    /**
     * Get the [asexual] column value.
     *
     * @return boolean
     */
    public function getAsexual()
    {

        return $this->asexual;
    }

    /**
     * Get the [abundance_quan] column value.
     *
     * @return double
     */
    public function getAbundanceQuan()
    {

        return $this->abundance_quan;
    }

    /**
     * Get the [abundance_quanunit] column value.
     *
     * @return string
     */
    public function getAbundanceQuanunit()
    {

        return $this->abundance_quanunit;
    }

    /**
     * Get the [abundance_semiquan] column value.
     *
     * @return string
     */
    public function getAbundanceSemiquan()
    {

        return $this->abundance_semiquan;
    }

    /**
     * Get the [abundance_semiquanunit] column value.
     *
     * @return string
     */
    public function getAbundanceSemiquanunit()
    {

        return $this->abundance_semiquanunit;
    }

    /**
     * Get the [abundance_qual] column value.
     *
     * @return string
     */
    public function getAbundanceQual()
    {

        return $this->abundance_qual;
    }

    /**
     * Get the [depth] column value.
     *
     * @return double
     */
    public function getDepth()
    {

        return $this->depth;
    }

    /**
     * Get the [depthunit] column value.
     *
     * @return string
     */
    public function getDepthunit()
    {

        return $this->depthunit;
    }

    /**
     * Get the [year_occur1] column value.
     *
     * @return int
     */
    public function getYearOccur1()
    {

        return $this->year_occur1;
    }

    /**
     * Get the [year_occur2] column value.
     *
     * @return int
     */
    public function getYearOccur2()
    {

        return $this->year_occur2;
    }

    /**
     * Get the [date_occur1] column value.
     *
     * @return string
     */
    public function getDateOccur1()
    {

        return $this->date_occur1;
    }

    /**
     * Get the [date_occur2] column value.
     *
     * @return string
     */
    public function getDateOccur2()
    {

        return $this->date_occur2;
    }

    /**
     * Get the [seasonal] column value.
     *
     * @return string
     */
    public function getSeasonal()
    {

        return $this->seasonal;
    }

    /**
     * Get the [period] column value.
     *
     * @return string
     */
    public function getPeriod()
    {

        return $this->period;
    }

    /**
     * Get the [recordtype] column value.
     *
     * @return string
     */
    public function getRecordtype()
    {

        return $this->recordtype;
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
     * Get the [remarks] column value.
     *
     * @return string
     */
    public function getRemarks()
    {

        return $this->remarks;
    }

    /**
     * Get the [invasivereport] column value.
     *
     * @return string
     */
    public function getInvasivereport()
    {

        return $this->invasivereport;
    }

    /**
     * Get the [invasivenessdegree] column value.
     *
     * @return string
     */
    public function getInvasivenessdegree()
    {

        return $this->invasivenessdegree;
    }

    /**
     * Get the [reporttype] column value.
     *
     * @return string
     */
    public function getReporttype()
    {

        return $this->reporttype;
    }

    /**
     * Get the [invasiveref] column value.
     *
     * @return int
     */
    public function getInvasiveref()
    {

        return $this->invasiveref;
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
     * Get the [dateentered] column value.
     *
     * @return string
     */
    public function getDateentered()
    {

        return $this->dateentered;
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
     * Get the [datemodified] column value.
     *
     * @return string
     */
    public function getDatemodified()
    {

        return $this->datemodified;
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
     * Get the [datechecked] column value.
     *
     * @return string
     */
    public function getDatechecked()
    {

        return $this->datechecked;
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
     * Set the value of [abundancecode] column.
     *
     * @param  int $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setAbundancecode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->abundancecode !== $v) {
            $this->abundancecode = $v;
            $this->modifiedColumns[] = AbundancePeer::ABUNDANCECODE;
        }


        return $this;
    } // setAbundancecode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = AbundancePeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = AbundancePeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [mainref] column.
     *
     * @param  int $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setMainref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mainref !== $v) {
            $this->mainref = $v;
            $this->modifiedColumns[] = AbundancePeer::MAINREF;
        }


        return $this;
    } // setMainref()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = AbundancePeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = AbundancePeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [e_code] column.
     *
     * @param  int $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setECode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->e_code !== $v) {
            $this->e_code = $v;
            $this->modifiedColumns[] = AbundancePeer::E_CODE;
        }


        return $this;
    } // setECode()

    /**
     * Sets the value of the [introduced] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setIntroduced($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->introduced !== $v) {
            $this->introduced = $v;
            $this->modifiedColumns[] = AbundancePeer::INTRODUCED;
        }


        return $this;
    } // setIntroduced()

    /**
     * Set the value of [year_intro] column.
     *
     * @param  int $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setYearIntro($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->year_intro !== $v) {
            $this->year_intro = $v;
            $this->modifiedColumns[] = AbundancePeer::YEAR_INTRO;
        }


        return $this;
    } // setYearIntro()

    /**
     * Set the value of [lifestage1] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setLifestage1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lifestage1 !== $v) {
            $this->lifestage1 = $v;
            $this->modifiedColumns[] = AbundancePeer::LIFESTAGE1;
        }


        return $this;
    } // setLifestage1()

    /**
     * Set the value of [sex] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setSex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sex !== $v) {
            $this->sex = $v;
            $this->modifiedColumns[] = AbundancePeer::SEX;
        }


        return $this;
    } // setSex()

    /**
     * Set the value of [lifestage2] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setLifestage2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lifestage2 !== $v) {
            $this->lifestage2 = $v;
            $this->modifiedColumns[] = AbundancePeer::LIFESTAGE2;
        }


        return $this;
    } // setLifestage2()

    /**
     * Sets the value of the [sexual] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setSexual($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->sexual !== $v) {
            $this->sexual = $v;
            $this->modifiedColumns[] = AbundancePeer::SEXUAL;
        }


        return $this;
    } // setSexual()

    /**
     * Sets the value of the [asexual] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setAsexual($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->asexual !== $v) {
            $this->asexual = $v;
            $this->modifiedColumns[] = AbundancePeer::ASEXUAL;
        }


        return $this;
    } // setAsexual()

    /**
     * Set the value of [abundance_quan] column.
     *
     * @param  double $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setAbundanceQuan($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->abundance_quan !== $v) {
            $this->abundance_quan = $v;
            $this->modifiedColumns[] = AbundancePeer::ABUNDANCE_QUAN;
        }


        return $this;
    } // setAbundanceQuan()

    /**
     * Set the value of [abundance_quanunit] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setAbundanceQuanunit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abundance_quanunit !== $v) {
            $this->abundance_quanunit = $v;
            $this->modifiedColumns[] = AbundancePeer::ABUNDANCE_QUANUNIT;
        }


        return $this;
    } // setAbundanceQuanunit()

    /**
     * Set the value of [abundance_semiquan] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setAbundanceSemiquan($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abundance_semiquan !== $v) {
            $this->abundance_semiquan = $v;
            $this->modifiedColumns[] = AbundancePeer::ABUNDANCE_SEMIQUAN;
        }


        return $this;
    } // setAbundanceSemiquan()

    /**
     * Set the value of [abundance_semiquanunit] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setAbundanceSemiquanunit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abundance_semiquanunit !== $v) {
            $this->abundance_semiquanunit = $v;
            $this->modifiedColumns[] = AbundancePeer::ABUNDANCE_SEMIQUANUNIT;
        }


        return $this;
    } // setAbundanceSemiquanunit()

    /**
     * Set the value of [abundance_qual] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setAbundanceQual($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abundance_qual !== $v) {
            $this->abundance_qual = $v;
            $this->modifiedColumns[] = AbundancePeer::ABUNDANCE_QUAL;
        }


        return $this;
    } // setAbundanceQual()

    /**
     * Set the value of [depth] column.
     *
     * @param  double $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setDepth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depth !== $v) {
            $this->depth = $v;
            $this->modifiedColumns[] = AbundancePeer::DEPTH;
        }


        return $this;
    } // setDepth()

    /**
     * Set the value of [depthunit] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setDepthunit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->depthunit !== $v) {
            $this->depthunit = $v;
            $this->modifiedColumns[] = AbundancePeer::DEPTHUNIT;
        }


        return $this;
    } // setDepthunit()

    /**
     * Set the value of [year_occur1] column.
     *
     * @param  int $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setYearOccur1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->year_occur1 !== $v) {
            $this->year_occur1 = $v;
            $this->modifiedColumns[] = AbundancePeer::YEAR_OCCUR1;
        }


        return $this;
    } // setYearOccur1()

    /**
     * Set the value of [year_occur2] column.
     *
     * @param  int $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setYearOccur2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->year_occur2 !== $v) {
            $this->year_occur2 = $v;
            $this->modifiedColumns[] = AbundancePeer::YEAR_OCCUR2;
        }


        return $this;
    } // setYearOccur2()

    /**
     * Set the value of [date_occur1] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setDateOccur1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_occur1 !== $v) {
            $this->date_occur1 = $v;
            $this->modifiedColumns[] = AbundancePeer::DATE_OCCUR1;
        }


        return $this;
    } // setDateOccur1()

    /**
     * Set the value of [date_occur2] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setDateOccur2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_occur2 !== $v) {
            $this->date_occur2 = $v;
            $this->modifiedColumns[] = AbundancePeer::DATE_OCCUR2;
        }


        return $this;
    } // setDateOccur2()

    /**
     * Set the value of [seasonal] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setSeasonal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->seasonal !== $v) {
            $this->seasonal = $v;
            $this->modifiedColumns[] = AbundancePeer::SEASONAL;
        }


        return $this;
    } // setSeasonal()

    /**
     * Set the value of [period] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setPeriod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->period !== $v) {
            $this->period = $v;
            $this->modifiedColumns[] = AbundancePeer::PERIOD;
        }


        return $this;
    } // setPeriod()

    /**
     * Set the value of [recordtype] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setRecordtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->recordtype !== $v) {
            $this->recordtype = $v;
            $this->modifiedColumns[] = AbundancePeer::RECORDTYPE;
        }


        return $this;
    } // setRecordtype()

    /**
     * Set the value of [method] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setMethod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->method !== $v) {
            $this->method = $v;
            $this->modifiedColumns[] = AbundancePeer::METHOD;
        }


        return $this;
    } // setMethod()

    /**
     * Set the value of [remarks] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[] = AbundancePeer::REMARKS;
        }


        return $this;
    } // setRemarks()

    /**
     * Set the value of [invasivereport] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setInvasivereport($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->invasivereport !== $v) {
            $this->invasivereport = $v;
            $this->modifiedColumns[] = AbundancePeer::INVASIVEREPORT;
        }


        return $this;
    } // setInvasivereport()

    /**
     * Set the value of [invasivenessdegree] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setInvasivenessdegree($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->invasivenessdegree !== $v) {
            $this->invasivenessdegree = $v;
            $this->modifiedColumns[] = AbundancePeer::INVASIVENESSDEGREE;
        }


        return $this;
    } // setInvasivenessdegree()

    /**
     * Set the value of [reporttype] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setReporttype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reporttype !== $v) {
            $this->reporttype = $v;
            $this->modifiedColumns[] = AbundancePeer::REPORTTYPE;
        }


        return $this;
    } // setReporttype()

    /**
     * Set the value of [invasiveref] column.
     *
     * @param  int $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setInvasiveref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->invasiveref !== $v) {
            $this->invasiveref = $v;
            $this->modifiedColumns[] = AbundancePeer::INVASIVEREF;
        }


        return $this;
    } // setInvasiveref()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = AbundancePeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Set the value of [dateentered] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dateentered !== $v) {
            $this->dateentered = $v;
            $this->modifiedColumns[] = AbundancePeer::DATEENTERED;
        }


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = AbundancePeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Set the value of [datemodified] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->datemodified !== $v) {
            $this->datemodified = $v;
            $this->modifiedColumns[] = AbundancePeer::DATEMODIFIED;
        }


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = AbundancePeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Set the value of [datechecked] column.
     *
     * @param  string $v new value
     * @return Abundance The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->datechecked !== $v) {
            $this->datechecked = $v;
            $this->modifiedColumns[] = AbundancePeer::DATECHECKED;
        }


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Abundance The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = AbundancePeer::TS;
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
            if ($this->stockcode !== 0) {
                return false;
            }

            if ($this->speccode !== 0) {
                return false;
            }

            if ($this->locality !== '') {
                return false;
            }

            if ($this->c_code !== '') {
                return false;
            }

            if ($this->lifestage1 !== '') {
                return false;
            }

            if ($this->date_occur1 !== '') {
                return false;
            }

            if ($this->date_occur2 !== '') {
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

            $this->abundancecode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->stockcode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->speccode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->mainref = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->locality = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->c_code = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->e_code = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->introduced = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
            $this->year_intro = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->lifestage1 = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->sex = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->lifestage2 = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->sexual = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
            $this->asexual = ($row[$startcol + 13] !== null) ? (boolean) $row[$startcol + 13] : null;
            $this->abundance_quan = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->abundance_quanunit = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->abundance_semiquan = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->abundance_semiquanunit = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->abundance_qual = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->depth = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->depthunit = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->year_occur1 = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->year_occur2 = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->date_occur1 = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->date_occur2 = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->seasonal = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->period = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->recordtype = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->method = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->remarks = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->invasivereport = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->invasivenessdegree = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->reporttype = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->invasiveref = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->entered = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->dateentered = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->modified = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->datemodified = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->expert = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->datechecked = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->ts = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 41; // 41 = AbundancePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Abundance object", $e);
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
            $con = Propel::getConnection(AbundancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AbundancePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(AbundancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AbundanceQuery::create()
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
            $con = Propel::getConnection(AbundancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                AbundancePeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(AbundancePeer::ABUNDANCECODE)) {
            $modifiedColumns[':p' . $index++]  = '`AbundanceCode`';
        }
        if ($this->isColumnModified(AbundancePeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(AbundancePeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(AbundancePeer::MAINREF)) {
            $modifiedColumns[':p' . $index++]  = '`MainRef`';
        }
        if ($this->isColumnModified(AbundancePeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(AbundancePeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(AbundancePeer::E_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`E_CODE`';
        }
        if ($this->isColumnModified(AbundancePeer::INTRODUCED)) {
            $modifiedColumns[':p' . $index++]  = '`Introduced`';
        }
        if ($this->isColumnModified(AbundancePeer::YEAR_INTRO)) {
            $modifiedColumns[':p' . $index++]  = '`Year_intro`';
        }
        if ($this->isColumnModified(AbundancePeer::LIFESTAGE1)) {
            $modifiedColumns[':p' . $index++]  = '`LifeStage1`';
        }
        if ($this->isColumnModified(AbundancePeer::SEX)) {
            $modifiedColumns[':p' . $index++]  = '`Sex`';
        }
        if ($this->isColumnModified(AbundancePeer::LIFESTAGE2)) {
            $modifiedColumns[':p' . $index++]  = '`Lifestage2`';
        }
        if ($this->isColumnModified(AbundancePeer::SEXUAL)) {
            $modifiedColumns[':p' . $index++]  = '`Sexual`';
        }
        if ($this->isColumnModified(AbundancePeer::ASEXUAL)) {
            $modifiedColumns[':p' . $index++]  = '`Asexual`';
        }
        if ($this->isColumnModified(AbundancePeer::ABUNDANCE_QUAN)) {
            $modifiedColumns[':p' . $index++]  = '`Abundance_Quan`';
        }
        if ($this->isColumnModified(AbundancePeer::ABUNDANCE_QUANUNIT)) {
            $modifiedColumns[':p' . $index++]  = '`Abundance_QuanUnit`';
        }
        if ($this->isColumnModified(AbundancePeer::ABUNDANCE_SEMIQUAN)) {
            $modifiedColumns[':p' . $index++]  = '`Abundance_SemiQuan`';
        }
        if ($this->isColumnModified(AbundancePeer::ABUNDANCE_SEMIQUANUNIT)) {
            $modifiedColumns[':p' . $index++]  = '`Abundance_SemiQuanUnit`';
        }
        if ($this->isColumnModified(AbundancePeer::ABUNDANCE_QUAL)) {
            $modifiedColumns[':p' . $index++]  = '`Abundance_Qual`';
        }
        if ($this->isColumnModified(AbundancePeer::DEPTH)) {
            $modifiedColumns[':p' . $index++]  = '`Depth`';
        }
        if ($this->isColumnModified(AbundancePeer::DEPTHUNIT)) {
            $modifiedColumns[':p' . $index++]  = '`DepthUnit`';
        }
        if ($this->isColumnModified(AbundancePeer::YEAR_OCCUR1)) {
            $modifiedColumns[':p' . $index++]  = '`Year_Occur1`';
        }
        if ($this->isColumnModified(AbundancePeer::YEAR_OCCUR2)) {
            $modifiedColumns[':p' . $index++]  = '`Year_Occur2`';
        }
        if ($this->isColumnModified(AbundancePeer::DATE_OCCUR1)) {
            $modifiedColumns[':p' . $index++]  = '`Date_Occur1`';
        }
        if ($this->isColumnModified(AbundancePeer::DATE_OCCUR2)) {
            $modifiedColumns[':p' . $index++]  = '`Date_Occur2`';
        }
        if ($this->isColumnModified(AbundancePeer::SEASONAL)) {
            $modifiedColumns[':p' . $index++]  = '`Seasonal`';
        }
        if ($this->isColumnModified(AbundancePeer::PERIOD)) {
            $modifiedColumns[':p' . $index++]  = '`Period`';
        }
        if ($this->isColumnModified(AbundancePeer::RECORDTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`RecordType`';
        }
        if ($this->isColumnModified(AbundancePeer::METHOD)) {
            $modifiedColumns[':p' . $index++]  = '`Method`';
        }
        if ($this->isColumnModified(AbundancePeer::REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`Remarks`';
        }
        if ($this->isColumnModified(AbundancePeer::INVASIVEREPORT)) {
            $modifiedColumns[':p' . $index++]  = '`InvasiveReport`';
        }
        if ($this->isColumnModified(AbundancePeer::INVASIVENESSDEGREE)) {
            $modifiedColumns[':p' . $index++]  = '`InvasivenessDegree`';
        }
        if ($this->isColumnModified(AbundancePeer::REPORTTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`ReportType`';
        }
        if ($this->isColumnModified(AbundancePeer::INVASIVEREF)) {
            $modifiedColumns[':p' . $index++]  = '`InvasiveRef`';
        }
        if ($this->isColumnModified(AbundancePeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(AbundancePeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(AbundancePeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(AbundancePeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(AbundancePeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(AbundancePeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(AbundancePeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `abundance` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`AbundanceCode`':
                        $stmt->bindValue($identifier, $this->abundancecode, PDO::PARAM_INT);
                        break;
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`MainRef`':
                        $stmt->bindValue($identifier, $this->mainref, PDO::PARAM_INT);
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
                    case '`Introduced`':
                        $stmt->bindValue($identifier, (int) $this->introduced, PDO::PARAM_INT);
                        break;
                    case '`Year_intro`':
                        $stmt->bindValue($identifier, $this->year_intro, PDO::PARAM_INT);
                        break;
                    case '`LifeStage1`':
                        $stmt->bindValue($identifier, $this->lifestage1, PDO::PARAM_STR);
                        break;
                    case '`Sex`':
                        $stmt->bindValue($identifier, $this->sex, PDO::PARAM_STR);
                        break;
                    case '`Lifestage2`':
                        $stmt->bindValue($identifier, $this->lifestage2, PDO::PARAM_STR);
                        break;
                    case '`Sexual`':
                        $stmt->bindValue($identifier, (int) $this->sexual, PDO::PARAM_INT);
                        break;
                    case '`Asexual`':
                        $stmt->bindValue($identifier, (int) $this->asexual, PDO::PARAM_INT);
                        break;
                    case '`Abundance_Quan`':
                        $stmt->bindValue($identifier, $this->abundance_quan, PDO::PARAM_STR);
                        break;
                    case '`Abundance_QuanUnit`':
                        $stmt->bindValue($identifier, $this->abundance_quanunit, PDO::PARAM_STR);
                        break;
                    case '`Abundance_SemiQuan`':
                        $stmt->bindValue($identifier, $this->abundance_semiquan, PDO::PARAM_STR);
                        break;
                    case '`Abundance_SemiQuanUnit`':
                        $stmt->bindValue($identifier, $this->abundance_semiquanunit, PDO::PARAM_STR);
                        break;
                    case '`Abundance_Qual`':
                        $stmt->bindValue($identifier, $this->abundance_qual, PDO::PARAM_STR);
                        break;
                    case '`Depth`':
                        $stmt->bindValue($identifier, $this->depth, PDO::PARAM_STR);
                        break;
                    case '`DepthUnit`':
                        $stmt->bindValue($identifier, $this->depthunit, PDO::PARAM_STR);
                        break;
                    case '`Year_Occur1`':
                        $stmt->bindValue($identifier, $this->year_occur1, PDO::PARAM_INT);
                        break;
                    case '`Year_Occur2`':
                        $stmt->bindValue($identifier, $this->year_occur2, PDO::PARAM_INT);
                        break;
                    case '`Date_Occur1`':
                        $stmt->bindValue($identifier, $this->date_occur1, PDO::PARAM_STR);
                        break;
                    case '`Date_Occur2`':
                        $stmt->bindValue($identifier, $this->date_occur2, PDO::PARAM_STR);
                        break;
                    case '`Seasonal`':
                        $stmt->bindValue($identifier, $this->seasonal, PDO::PARAM_STR);
                        break;
                    case '`Period`':
                        $stmt->bindValue($identifier, $this->period, PDO::PARAM_STR);
                        break;
                    case '`RecordType`':
                        $stmt->bindValue($identifier, $this->recordtype, PDO::PARAM_STR);
                        break;
                    case '`Method`':
                        $stmt->bindValue($identifier, $this->method, PDO::PARAM_STR);
                        break;
                    case '`Remarks`':
                        $stmt->bindValue($identifier, $this->remarks, PDO::PARAM_STR);
                        break;
                    case '`InvasiveReport`':
                        $stmt->bindValue($identifier, $this->invasivereport, PDO::PARAM_STR);
                        break;
                    case '`InvasivenessDegree`':
                        $stmt->bindValue($identifier, $this->invasivenessdegree, PDO::PARAM_STR);
                        break;
                    case '`ReportType`':
                        $stmt->bindValue($identifier, $this->reporttype, PDO::PARAM_STR);
                        break;
                    case '`InvasiveRef`':
                        $stmt->bindValue($identifier, $this->invasiveref, PDO::PARAM_INT);
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


            if (($retval = AbundancePeer::doValidate($this, $columns)) !== true) {
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
        $pos = AbundancePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getAbundancecode();
                break;
            case 1:
                return $this->getStockcode();
                break;
            case 2:
                return $this->getSpeccode();
                break;
            case 3:
                return $this->getMainref();
                break;
            case 4:
                return $this->getLocality();
                break;
            case 5:
                return $this->getCCode();
                break;
            case 6:
                return $this->getECode();
                break;
            case 7:
                return $this->getIntroduced();
                break;
            case 8:
                return $this->getYearIntro();
                break;
            case 9:
                return $this->getLifestage1();
                break;
            case 10:
                return $this->getSex();
                break;
            case 11:
                return $this->getLifestage2();
                break;
            case 12:
                return $this->getSexual();
                break;
            case 13:
                return $this->getAsexual();
                break;
            case 14:
                return $this->getAbundanceQuan();
                break;
            case 15:
                return $this->getAbundanceQuanunit();
                break;
            case 16:
                return $this->getAbundanceSemiquan();
                break;
            case 17:
                return $this->getAbundanceSemiquanunit();
                break;
            case 18:
                return $this->getAbundanceQual();
                break;
            case 19:
                return $this->getDepth();
                break;
            case 20:
                return $this->getDepthunit();
                break;
            case 21:
                return $this->getYearOccur1();
                break;
            case 22:
                return $this->getYearOccur2();
                break;
            case 23:
                return $this->getDateOccur1();
                break;
            case 24:
                return $this->getDateOccur2();
                break;
            case 25:
                return $this->getSeasonal();
                break;
            case 26:
                return $this->getPeriod();
                break;
            case 27:
                return $this->getRecordtype();
                break;
            case 28:
                return $this->getMethod();
                break;
            case 29:
                return $this->getRemarks();
                break;
            case 30:
                return $this->getInvasivereport();
                break;
            case 31:
                return $this->getInvasivenessdegree();
                break;
            case 32:
                return $this->getReporttype();
                break;
            case 33:
                return $this->getInvasiveref();
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
            case 40:
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
        if (isset($alreadyDumpedObjects['Abundance'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Abundance'][serialize($this->getPrimaryKey())] = true;
        $keys = AbundancePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAbundancecode(),
            $keys[1] => $this->getStockcode(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getMainref(),
            $keys[4] => $this->getLocality(),
            $keys[5] => $this->getCCode(),
            $keys[6] => $this->getECode(),
            $keys[7] => $this->getIntroduced(),
            $keys[8] => $this->getYearIntro(),
            $keys[9] => $this->getLifestage1(),
            $keys[10] => $this->getSex(),
            $keys[11] => $this->getLifestage2(),
            $keys[12] => $this->getSexual(),
            $keys[13] => $this->getAsexual(),
            $keys[14] => $this->getAbundanceQuan(),
            $keys[15] => $this->getAbundanceQuanunit(),
            $keys[16] => $this->getAbundanceSemiquan(),
            $keys[17] => $this->getAbundanceSemiquanunit(),
            $keys[18] => $this->getAbundanceQual(),
            $keys[19] => $this->getDepth(),
            $keys[20] => $this->getDepthunit(),
            $keys[21] => $this->getYearOccur1(),
            $keys[22] => $this->getYearOccur2(),
            $keys[23] => $this->getDateOccur1(),
            $keys[24] => $this->getDateOccur2(),
            $keys[25] => $this->getSeasonal(),
            $keys[26] => $this->getPeriod(),
            $keys[27] => $this->getRecordtype(),
            $keys[28] => $this->getMethod(),
            $keys[29] => $this->getRemarks(),
            $keys[30] => $this->getInvasivereport(),
            $keys[31] => $this->getInvasivenessdegree(),
            $keys[32] => $this->getReporttype(),
            $keys[33] => $this->getInvasiveref(),
            $keys[34] => $this->getEntered(),
            $keys[35] => $this->getDateentered(),
            $keys[36] => $this->getModified(),
            $keys[37] => $this->getDatemodified(),
            $keys[38] => $this->getExpert(),
            $keys[39] => $this->getDatechecked(),
            $keys[40] => $this->getTs(),
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
        $pos = AbundancePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setAbundancecode($value);
                break;
            case 1:
                $this->setStockcode($value);
                break;
            case 2:
                $this->setSpeccode($value);
                break;
            case 3:
                $this->setMainref($value);
                break;
            case 4:
                $this->setLocality($value);
                break;
            case 5:
                $this->setCCode($value);
                break;
            case 6:
                $this->setECode($value);
                break;
            case 7:
                $this->setIntroduced($value);
                break;
            case 8:
                $this->setYearIntro($value);
                break;
            case 9:
                $this->setLifestage1($value);
                break;
            case 10:
                $this->setSex($value);
                break;
            case 11:
                $this->setLifestage2($value);
                break;
            case 12:
                $this->setSexual($value);
                break;
            case 13:
                $this->setAsexual($value);
                break;
            case 14:
                $this->setAbundanceQuan($value);
                break;
            case 15:
                $this->setAbundanceQuanunit($value);
                break;
            case 16:
                $this->setAbundanceSemiquan($value);
                break;
            case 17:
                $this->setAbundanceSemiquanunit($value);
                break;
            case 18:
                $this->setAbundanceQual($value);
                break;
            case 19:
                $this->setDepth($value);
                break;
            case 20:
                $this->setDepthunit($value);
                break;
            case 21:
                $this->setYearOccur1($value);
                break;
            case 22:
                $this->setYearOccur2($value);
                break;
            case 23:
                $this->setDateOccur1($value);
                break;
            case 24:
                $this->setDateOccur2($value);
                break;
            case 25:
                $this->setSeasonal($value);
                break;
            case 26:
                $this->setPeriod($value);
                break;
            case 27:
                $this->setRecordtype($value);
                break;
            case 28:
                $this->setMethod($value);
                break;
            case 29:
                $this->setRemarks($value);
                break;
            case 30:
                $this->setInvasivereport($value);
                break;
            case 31:
                $this->setInvasivenessdegree($value);
                break;
            case 32:
                $this->setReporttype($value);
                break;
            case 33:
                $this->setInvasiveref($value);
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
            case 40:
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
        $keys = AbundancePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAbundancecode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setMainref($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLocality($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCCode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setECode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIntroduced($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setYearIntro($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLifestage1($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setSex($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setLifestage2($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setSexual($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setAsexual($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setAbundanceQuan($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setAbundanceQuanunit($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setAbundanceSemiquan($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setAbundanceSemiquanunit($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setAbundanceQual($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDepth($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setDepthunit($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setYearOccur1($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setYearOccur2($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDateOccur1($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setDateOccur2($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setSeasonal($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setPeriod($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setRecordtype($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setMethod($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setRemarks($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setInvasivereport($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setInvasivenessdegree($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setReporttype($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setInvasiveref($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setEntered($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setDateentered($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setModified($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setDatemodified($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setExpert($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setDatechecked($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setTs($arr[$keys[40]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AbundancePeer::DATABASE_NAME);

        if ($this->isColumnModified(AbundancePeer::ABUNDANCECODE)) $criteria->add(AbundancePeer::ABUNDANCECODE, $this->abundancecode);
        if ($this->isColumnModified(AbundancePeer::STOCKCODE)) $criteria->add(AbundancePeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(AbundancePeer::SPECCODE)) $criteria->add(AbundancePeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(AbundancePeer::MAINREF)) $criteria->add(AbundancePeer::MAINREF, $this->mainref);
        if ($this->isColumnModified(AbundancePeer::LOCALITY)) $criteria->add(AbundancePeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(AbundancePeer::C_CODE)) $criteria->add(AbundancePeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(AbundancePeer::E_CODE)) $criteria->add(AbundancePeer::E_CODE, $this->e_code);
        if ($this->isColumnModified(AbundancePeer::INTRODUCED)) $criteria->add(AbundancePeer::INTRODUCED, $this->introduced);
        if ($this->isColumnModified(AbundancePeer::YEAR_INTRO)) $criteria->add(AbundancePeer::YEAR_INTRO, $this->year_intro);
        if ($this->isColumnModified(AbundancePeer::LIFESTAGE1)) $criteria->add(AbundancePeer::LIFESTAGE1, $this->lifestage1);
        if ($this->isColumnModified(AbundancePeer::SEX)) $criteria->add(AbundancePeer::SEX, $this->sex);
        if ($this->isColumnModified(AbundancePeer::LIFESTAGE2)) $criteria->add(AbundancePeer::LIFESTAGE2, $this->lifestage2);
        if ($this->isColumnModified(AbundancePeer::SEXUAL)) $criteria->add(AbundancePeer::SEXUAL, $this->sexual);
        if ($this->isColumnModified(AbundancePeer::ASEXUAL)) $criteria->add(AbundancePeer::ASEXUAL, $this->asexual);
        if ($this->isColumnModified(AbundancePeer::ABUNDANCE_QUAN)) $criteria->add(AbundancePeer::ABUNDANCE_QUAN, $this->abundance_quan);
        if ($this->isColumnModified(AbundancePeer::ABUNDANCE_QUANUNIT)) $criteria->add(AbundancePeer::ABUNDANCE_QUANUNIT, $this->abundance_quanunit);
        if ($this->isColumnModified(AbundancePeer::ABUNDANCE_SEMIQUAN)) $criteria->add(AbundancePeer::ABUNDANCE_SEMIQUAN, $this->abundance_semiquan);
        if ($this->isColumnModified(AbundancePeer::ABUNDANCE_SEMIQUANUNIT)) $criteria->add(AbundancePeer::ABUNDANCE_SEMIQUANUNIT, $this->abundance_semiquanunit);
        if ($this->isColumnModified(AbundancePeer::ABUNDANCE_QUAL)) $criteria->add(AbundancePeer::ABUNDANCE_QUAL, $this->abundance_qual);
        if ($this->isColumnModified(AbundancePeer::DEPTH)) $criteria->add(AbundancePeer::DEPTH, $this->depth);
        if ($this->isColumnModified(AbundancePeer::DEPTHUNIT)) $criteria->add(AbundancePeer::DEPTHUNIT, $this->depthunit);
        if ($this->isColumnModified(AbundancePeer::YEAR_OCCUR1)) $criteria->add(AbundancePeer::YEAR_OCCUR1, $this->year_occur1);
        if ($this->isColumnModified(AbundancePeer::YEAR_OCCUR2)) $criteria->add(AbundancePeer::YEAR_OCCUR2, $this->year_occur2);
        if ($this->isColumnModified(AbundancePeer::DATE_OCCUR1)) $criteria->add(AbundancePeer::DATE_OCCUR1, $this->date_occur1);
        if ($this->isColumnModified(AbundancePeer::DATE_OCCUR2)) $criteria->add(AbundancePeer::DATE_OCCUR2, $this->date_occur2);
        if ($this->isColumnModified(AbundancePeer::SEASONAL)) $criteria->add(AbundancePeer::SEASONAL, $this->seasonal);
        if ($this->isColumnModified(AbundancePeer::PERIOD)) $criteria->add(AbundancePeer::PERIOD, $this->period);
        if ($this->isColumnModified(AbundancePeer::RECORDTYPE)) $criteria->add(AbundancePeer::RECORDTYPE, $this->recordtype);
        if ($this->isColumnModified(AbundancePeer::METHOD)) $criteria->add(AbundancePeer::METHOD, $this->method);
        if ($this->isColumnModified(AbundancePeer::REMARKS)) $criteria->add(AbundancePeer::REMARKS, $this->remarks);
        if ($this->isColumnModified(AbundancePeer::INVASIVEREPORT)) $criteria->add(AbundancePeer::INVASIVEREPORT, $this->invasivereport);
        if ($this->isColumnModified(AbundancePeer::INVASIVENESSDEGREE)) $criteria->add(AbundancePeer::INVASIVENESSDEGREE, $this->invasivenessdegree);
        if ($this->isColumnModified(AbundancePeer::REPORTTYPE)) $criteria->add(AbundancePeer::REPORTTYPE, $this->reporttype);
        if ($this->isColumnModified(AbundancePeer::INVASIVEREF)) $criteria->add(AbundancePeer::INVASIVEREF, $this->invasiveref);
        if ($this->isColumnModified(AbundancePeer::ENTERED)) $criteria->add(AbundancePeer::ENTERED, $this->entered);
        if ($this->isColumnModified(AbundancePeer::DATEENTERED)) $criteria->add(AbundancePeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(AbundancePeer::MODIFIED)) $criteria->add(AbundancePeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(AbundancePeer::DATEMODIFIED)) $criteria->add(AbundancePeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(AbundancePeer::EXPERT)) $criteria->add(AbundancePeer::EXPERT, $this->expert);
        if ($this->isColumnModified(AbundancePeer::DATECHECKED)) $criteria->add(AbundancePeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(AbundancePeer::TS)) $criteria->add(AbundancePeer::TS, $this->ts);

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
        $criteria = new Criteria(AbundancePeer::DATABASE_NAME);
        $criteria->add(AbundancePeer::STOCKCODE, $this->stockcode);
        $criteria->add(AbundancePeer::SPECCODE, $this->speccode);
        $criteria->add(AbundancePeer::LOCALITY, $this->locality);
        $criteria->add(AbundancePeer::C_CODE, $this->c_code);
        $criteria->add(AbundancePeer::LIFESTAGE1, $this->lifestage1);
        $criteria->add(AbundancePeer::DATE_OCCUR1, $this->date_occur1);
        $criteria->add(AbundancePeer::DATE_OCCUR2, $this->date_occur2);

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
        $pks[1] = $this->getSpeccode();
        $pks[2] = $this->getLocality();
        $pks[3] = $this->getCCode();
        $pks[4] = $this->getLifestage1();
        $pks[5] = $this->getDateOccur1();
        $pks[6] = $this->getDateOccur2();

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
        $this->setSpeccode($keys[1]);
        $this->setLocality($keys[2]);
        $this->setCCode($keys[3]);
        $this->setLifestage1($keys[4]);
        $this->setDateOccur1($keys[5]);
        $this->setDateOccur2($keys[6]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getStockcode()) && (null === $this->getSpeccode()) && (null === $this->getLocality()) && (null === $this->getCCode()) && (null === $this->getLifestage1()) && (null === $this->getDateOccur1()) && (null === $this->getDateOccur2());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Abundance (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setMainref($this->getMainref());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setECode($this->getECode());
        $copyObj->setIntroduced($this->getIntroduced());
        $copyObj->setYearIntro($this->getYearIntro());
        $copyObj->setLifestage1($this->getLifestage1());
        $copyObj->setSex($this->getSex());
        $copyObj->setLifestage2($this->getLifestage2());
        $copyObj->setSexual($this->getSexual());
        $copyObj->setAsexual($this->getAsexual());
        $copyObj->setAbundanceQuan($this->getAbundanceQuan());
        $copyObj->setAbundanceQuanunit($this->getAbundanceQuanunit());
        $copyObj->setAbundanceSemiquan($this->getAbundanceSemiquan());
        $copyObj->setAbundanceSemiquanunit($this->getAbundanceSemiquanunit());
        $copyObj->setAbundanceQual($this->getAbundanceQual());
        $copyObj->setDepth($this->getDepth());
        $copyObj->setDepthunit($this->getDepthunit());
        $copyObj->setYearOccur1($this->getYearOccur1());
        $copyObj->setYearOccur2($this->getYearOccur2());
        $copyObj->setDateOccur1($this->getDateOccur1());
        $copyObj->setDateOccur2($this->getDateOccur2());
        $copyObj->setSeasonal($this->getSeasonal());
        $copyObj->setPeriod($this->getPeriod());
        $copyObj->setRecordtype($this->getRecordtype());
        $copyObj->setMethod($this->getMethod());
        $copyObj->setRemarks($this->getRemarks());
        $copyObj->setInvasivereport($this->getInvasivereport());
        $copyObj->setInvasivenessdegree($this->getInvasivenessdegree());
        $copyObj->setReporttype($this->getReporttype());
        $copyObj->setInvasiveref($this->getInvasiveref());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setAbundancecode(NULL); // this is a auto-increment column, so set to default value
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
     * @return Abundance Clone of current object.
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
     * @return AbundancePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AbundancePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->abundancecode = null;
        $this->stockcode = null;
        $this->speccode = null;
        $this->mainref = null;
        $this->locality = null;
        $this->c_code = null;
        $this->e_code = null;
        $this->introduced = null;
        $this->year_intro = null;
        $this->lifestage1 = null;
        $this->sex = null;
        $this->lifestage2 = null;
        $this->sexual = null;
        $this->asexual = null;
        $this->abundance_quan = null;
        $this->abundance_quanunit = null;
        $this->abundance_semiquan = null;
        $this->abundance_semiquanunit = null;
        $this->abundance_qual = null;
        $this->depth = null;
        $this->depthunit = null;
        $this->year_occur1 = null;
        $this->year_occur2 = null;
        $this->date_occur1 = null;
        $this->date_occur2 = null;
        $this->seasonal = null;
        $this->period = null;
        $this->recordtype = null;
        $this->method = null;
        $this->remarks = null;
        $this->invasivereport = null;
        $this->invasivenessdegree = null;
        $this->reporttype = null;
        $this->invasiveref = null;
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
        return (string) $this->exportTo(AbundancePeer::DEFAULT_STRING_FORMAT);
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
