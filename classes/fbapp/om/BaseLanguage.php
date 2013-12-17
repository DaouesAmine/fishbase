<?php


/**
 * Base class that represents a row from the 'language' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseLanguage extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'LanguagePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        LanguagePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the langcode field.
     * @var        int
     */
    protected $langcode;

    /**
     * The value for the languagename field.
     * @var        string
     */
    protected $languagename;

    /**
     * The value for the alternatename field.
     * @var        string
     */
    protected $alternatename;

    /**
     * The value for the firstlanguagespeakers field.
     * @var        double
     */
    protected $firstlanguagespeakers;

    /**
     * The value for the langgroupcode field.
     * @var        int
     */
    protected $langgroupcode;

    /**
     * The value for the languagesubgroup field.
     * @var        string
     */
    protected $languagesubgroup;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the languageref field.
     * @var        int
     */
    protected $languageref;

    /**
     * The value for the remarks field.
     * @var        string
     */
    protected $remarks;

    /**
     * The value for the secondlanguagespeakers field.
     * @var        double
     */
    protected $secondlanguagespeakers;

    /**
     * The value for the url field.
     * @var        string
     */
    protected $url;

    /**
     * The value for the used field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $used;

    /**
     * The value for the namescount field.
     * @var        int
     */
    protected $namescount;

    /**
     * The value for the speciescount field.
     * @var        int
     */
    protected $speciescount;

    /**
     * The value for the familiescount field.
     * @var        int
     */
    protected $familiescount;

    /**
     * The value for the namescount_slb field.
     * @var        int
     */
    protected $namescount_slb;

    /**
     * The value for the speciescount_slb field.
     * @var        int
     */
    protected $speciescount_slb;

    /**
     * The value for the familiescount_slb field.
     * @var        int
     */
    protected $familiescount_slb;

    /**
     * The value for the lastupdate field.
     * @var        string
     */
    protected $lastupdate;

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
        $this->used = 0;
    }

    /**
     * Initializes internal state of BaseLanguage object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [langcode] column value.
     *
     * @return int
     */
    public function getLangcode()
    {

        return $this->langcode;
    }

    /**
     * Get the [languagename] column value.
     *
     * @return string
     */
    public function getLanguagename()
    {

        return $this->languagename;
    }

    /**
     * Get the [alternatename] column value.
     *
     * @return string
     */
    public function getAlternatename()
    {

        return $this->alternatename;
    }

    /**
     * Get the [firstlanguagespeakers] column value.
     *
     * @return double
     */
    public function getFirstlanguagespeakers()
    {

        return $this->firstlanguagespeakers;
    }

    /**
     * Get the [langgroupcode] column value.
     *
     * @return int
     */
    public function getLanggroupcode()
    {

        return $this->langgroupcode;
    }

    /**
     * Get the [languagesubgroup] column value.
     *
     * @return string
     */
    public function getLanguagesubgroup()
    {

        return $this->languagesubgroup;
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
     * Get the [languageref] column value.
     *
     * @return int
     */
    public function getLanguageref()
    {

        return $this->languageref;
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
     * Get the [secondlanguagespeakers] column value.
     *
     * @return double
     */
    public function getSecondlanguagespeakers()
    {

        return $this->secondlanguagespeakers;
    }

    /**
     * Get the [url] column value.
     *
     * @return string
     */
    public function getUrl()
    {

        return $this->url;
    }

    /**
     * Get the [used] column value.
     *
     * @return int
     */
    public function getUsed()
    {

        return $this->used;
    }

    /**
     * Get the [namescount] column value.
     *
     * @return int
     */
    public function getNamescount()
    {

        return $this->namescount;
    }

    /**
     * Get the [speciescount] column value.
     *
     * @return int
     */
    public function getSpeciescount()
    {

        return $this->speciescount;
    }

    /**
     * Get the [familiescount] column value.
     *
     * @return int
     */
    public function getFamiliescount()
    {

        return $this->familiescount;
    }

    /**
     * Get the [namescount_slb] column value.
     *
     * @return int
     */
    public function getNamescountSlb()
    {

        return $this->namescount_slb;
    }

    /**
     * Get the [speciescount_slb] column value.
     *
     * @return int
     */
    public function getSpeciescountSlb()
    {

        return $this->speciescount_slb;
    }

    /**
     * Get the [familiescount_slb] column value.
     *
     * @return int
     */
    public function getFamiliescountSlb()
    {

        return $this->familiescount_slb;
    }

    /**
     * Get the [optionally formatted] temporal [lastupdate] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getLastupdate($format = '%x')
    {
        if ($this->lastupdate === null) {
            return null;
        }

        if ($this->lastupdate === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->lastupdate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->lastupdate, true), $x);
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
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateentered($format = '%x')
    {
        if ($this->dateentered === null) {
            return null;
        }

        if ($this->dateentered === '0000-00-00') {
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
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatemodified($format = '%x')
    {
        if ($this->datemodified === null) {
            return null;
        }

        if ($this->datemodified === '0000-00-00') {
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
     * Set the value of [langcode] column.
     *
     * @param  int $v new value
     * @return Language The current object (for fluent API support)
     */
    public function setLangcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->langcode !== $v) {
            $this->langcode = $v;
            $this->modifiedColumns[] = LanguagePeer::LANGCODE;
        }


        return $this;
    } // setLangcode()

    /**
     * Set the value of [languagename] column.
     *
     * @param  string $v new value
     * @return Language The current object (for fluent API support)
     */
    public function setLanguagename($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->languagename !== $v) {
            $this->languagename = $v;
            $this->modifiedColumns[] = LanguagePeer::LANGUAGENAME;
        }


        return $this;
    } // setLanguagename()

    /**
     * Set the value of [alternatename] column.
     *
     * @param  string $v new value
     * @return Language The current object (for fluent API support)
     */
    public function setAlternatename($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alternatename !== $v) {
            $this->alternatename = $v;
            $this->modifiedColumns[] = LanguagePeer::ALTERNATENAME;
        }


        return $this;
    } // setAlternatename()

    /**
     * Set the value of [firstlanguagespeakers] column.
     *
     * @param  double $v new value
     * @return Language The current object (for fluent API support)
     */
    public function setFirstlanguagespeakers($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->firstlanguagespeakers !== $v) {
            $this->firstlanguagespeakers = $v;
            $this->modifiedColumns[] = LanguagePeer::FIRSTLANGUAGESPEAKERS;
        }


        return $this;
    } // setFirstlanguagespeakers()

    /**
     * Set the value of [langgroupcode] column.
     *
     * @param  int $v new value
     * @return Language The current object (for fluent API support)
     */
    public function setLanggroupcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->langgroupcode !== $v) {
            $this->langgroupcode = $v;
            $this->modifiedColumns[] = LanguagePeer::LANGGROUPCODE;
        }


        return $this;
    } // setLanggroupcode()

    /**
     * Set the value of [languagesubgroup] column.
     *
     * @param  string $v new value
     * @return Language The current object (for fluent API support)
     */
    public function setLanguagesubgroup($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->languagesubgroup !== $v) {
            $this->languagesubgroup = $v;
            $this->modifiedColumns[] = LanguagePeer::LANGUAGESUBGROUP;
        }


        return $this;
    } // setLanguagesubgroup()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Language The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = LanguagePeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [languageref] column.
     *
     * @param  int $v new value
     * @return Language The current object (for fluent API support)
     */
    public function setLanguageref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->languageref !== $v) {
            $this->languageref = $v;
            $this->modifiedColumns[] = LanguagePeer::LANGUAGEREF;
        }


        return $this;
    } // setLanguageref()

    /**
     * Set the value of [remarks] column.
     *
     * @param  string $v new value
     * @return Language The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[] = LanguagePeer::REMARKS;
        }


        return $this;
    } // setRemarks()

    /**
     * Set the value of [secondlanguagespeakers] column.
     *
     * @param  double $v new value
     * @return Language The current object (for fluent API support)
     */
    public function setSecondlanguagespeakers($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->secondlanguagespeakers !== $v) {
            $this->secondlanguagespeakers = $v;
            $this->modifiedColumns[] = LanguagePeer::SECONDLANGUAGESPEAKERS;
        }


        return $this;
    } // setSecondlanguagespeakers()

    /**
     * Set the value of [url] column.
     *
     * @param  string $v new value
     * @return Language The current object (for fluent API support)
     */
    public function setUrl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url !== $v) {
            $this->url = $v;
            $this->modifiedColumns[] = LanguagePeer::URL;
        }


        return $this;
    } // setUrl()

    /**
     * Set the value of [used] column.
     *
     * @param  int $v new value
     * @return Language The current object (for fluent API support)
     */
    public function setUsed($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->used !== $v) {
            $this->used = $v;
            $this->modifiedColumns[] = LanguagePeer::USED;
        }


        return $this;
    } // setUsed()

    /**
     * Set the value of [namescount] column.
     *
     * @param  int $v new value
     * @return Language The current object (for fluent API support)
     */
    public function setNamescount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->namescount !== $v) {
            $this->namescount = $v;
            $this->modifiedColumns[] = LanguagePeer::NAMESCOUNT;
        }


        return $this;
    } // setNamescount()

    /**
     * Set the value of [speciescount] column.
     *
     * @param  int $v new value
     * @return Language The current object (for fluent API support)
     */
    public function setSpeciescount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speciescount !== $v) {
            $this->speciescount = $v;
            $this->modifiedColumns[] = LanguagePeer::SPECIESCOUNT;
        }


        return $this;
    } // setSpeciescount()

    /**
     * Set the value of [familiescount] column.
     *
     * @param  int $v new value
     * @return Language The current object (for fluent API support)
     */
    public function setFamiliescount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->familiescount !== $v) {
            $this->familiescount = $v;
            $this->modifiedColumns[] = LanguagePeer::FAMILIESCOUNT;
        }


        return $this;
    } // setFamiliescount()

    /**
     * Set the value of [namescount_slb] column.
     *
     * @param  int $v new value
     * @return Language The current object (for fluent API support)
     */
    public function setNamescountSlb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->namescount_slb !== $v) {
            $this->namescount_slb = $v;
            $this->modifiedColumns[] = LanguagePeer::NAMESCOUNT_SLB;
        }


        return $this;
    } // setNamescountSlb()

    /**
     * Set the value of [speciescount_slb] column.
     *
     * @param  int $v new value
     * @return Language The current object (for fluent API support)
     */
    public function setSpeciescountSlb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speciescount_slb !== $v) {
            $this->speciescount_slb = $v;
            $this->modifiedColumns[] = LanguagePeer::SPECIESCOUNT_SLB;
        }


        return $this;
    } // setSpeciescountSlb()

    /**
     * Set the value of [familiescount_slb] column.
     *
     * @param  int $v new value
     * @return Language The current object (for fluent API support)
     */
    public function setFamiliescountSlb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->familiescount_slb !== $v) {
            $this->familiescount_slb = $v;
            $this->modifiedColumns[] = LanguagePeer::FAMILIESCOUNT_SLB;
        }


        return $this;
    } // setFamiliescountSlb()

    /**
     * Sets the value of [lastupdate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Language The current object (for fluent API support)
     */
    public function setLastupdate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lastupdate !== null || $dt !== null) {
            $currentDateAsString = ($this->lastupdate !== null && $tmpDt = new DateTime($this->lastupdate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->lastupdate = $newDateAsString;
                $this->modifiedColumns[] = LanguagePeer::LASTUPDATE;
            }
        } // if either are not null


        return $this;
    } // setLastupdate()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Language The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = LanguagePeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Language The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = LanguagePeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Language The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = LanguagePeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Language The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = LanguagePeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Language The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = LanguagePeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Set the value of [datechecked] column.
     *
     * @param  string $v new value
     * @return Language The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->datechecked !== $v) {
            $this->datechecked = $v;
            $this->modifiedColumns[] = LanguagePeer::DATECHECKED;
        }


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Language The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = LanguagePeer::TS;
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
            if ($this->used !== 0) {
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

            $this->langcode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->languagename = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->alternatename = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->firstlanguagespeakers = ($row[$startcol + 3] !== null) ? (double) $row[$startcol + 3] : null;
            $this->langgroupcode = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->languagesubgroup = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->c_code = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->languageref = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->remarks = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->secondlanguagespeakers = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->url = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->used = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->namescount = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->speciescount = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->familiescount = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->namescount_slb = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->speciescount_slb = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->familiescount_slb = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->lastupdate = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->entered = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->dateentered = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->modified = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->datemodified = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->expert = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->datechecked = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->ts = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 26; // 26 = LanguagePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Language object", $e);
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
            $con = Propel::getConnection(LanguagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = LanguagePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(LanguagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = LanguageQuery::create()
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
            $con = Propel::getConnection(LanguagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                LanguagePeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(LanguagePeer::LANGCODE)) {
            $modifiedColumns[':p' . $index++]  = '`LangCode`';
        }
        if ($this->isColumnModified(LanguagePeer::LANGUAGENAME)) {
            $modifiedColumns[':p' . $index++]  = '`LanguageName`';
        }
        if ($this->isColumnModified(LanguagePeer::ALTERNATENAME)) {
            $modifiedColumns[':p' . $index++]  = '`AlternateName`';
        }
        if ($this->isColumnModified(LanguagePeer::FIRSTLANGUAGESPEAKERS)) {
            $modifiedColumns[':p' . $index++]  = '`FirstLanguageSpeakers`';
        }
        if ($this->isColumnModified(LanguagePeer::LANGGROUPCODE)) {
            $modifiedColumns[':p' . $index++]  = '`LangGroupCode`';
        }
        if ($this->isColumnModified(LanguagePeer::LANGUAGESUBGROUP)) {
            $modifiedColumns[':p' . $index++]  = '`LanguageSubgroup`';
        }
        if ($this->isColumnModified(LanguagePeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(LanguagePeer::LANGUAGEREF)) {
            $modifiedColumns[':p' . $index++]  = '`LanguageRef`';
        }
        if ($this->isColumnModified(LanguagePeer::REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`Remarks`';
        }
        if ($this->isColumnModified(LanguagePeer::SECONDLANGUAGESPEAKERS)) {
            $modifiedColumns[':p' . $index++]  = '`SecondLanguageSpeakers`';
        }
        if ($this->isColumnModified(LanguagePeer::URL)) {
            $modifiedColumns[':p' . $index++]  = '`URL`';
        }
        if ($this->isColumnModified(LanguagePeer::USED)) {
            $modifiedColumns[':p' . $index++]  = '`Used`';
        }
        if ($this->isColumnModified(LanguagePeer::NAMESCOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`NamesCount`';
        }
        if ($this->isColumnModified(LanguagePeer::SPECIESCOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`SpeciesCount`';
        }
        if ($this->isColumnModified(LanguagePeer::FAMILIESCOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`FamiliesCount`';
        }
        if ($this->isColumnModified(LanguagePeer::NAMESCOUNT_SLB)) {
            $modifiedColumns[':p' . $index++]  = '`NamesCount_SLB`';
        }
        if ($this->isColumnModified(LanguagePeer::SPECIESCOUNT_SLB)) {
            $modifiedColumns[':p' . $index++]  = '`SpeciesCount_SLB`';
        }
        if ($this->isColumnModified(LanguagePeer::FAMILIESCOUNT_SLB)) {
            $modifiedColumns[':p' . $index++]  = '`FamiliesCount_SLB`';
        }
        if ($this->isColumnModified(LanguagePeer::LASTUPDATE)) {
            $modifiedColumns[':p' . $index++]  = '`LastUpdate`';
        }
        if ($this->isColumnModified(LanguagePeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(LanguagePeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(LanguagePeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(LanguagePeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(LanguagePeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(LanguagePeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(LanguagePeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `language` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`LangCode`':
                        $stmt->bindValue($identifier, $this->langcode, PDO::PARAM_INT);
                        break;
                    case '`LanguageName`':
                        $stmt->bindValue($identifier, $this->languagename, PDO::PARAM_STR);
                        break;
                    case '`AlternateName`':
                        $stmt->bindValue($identifier, $this->alternatename, PDO::PARAM_STR);
                        break;
                    case '`FirstLanguageSpeakers`':
                        $stmt->bindValue($identifier, $this->firstlanguagespeakers, PDO::PARAM_STR);
                        break;
                    case '`LangGroupCode`':
                        $stmt->bindValue($identifier, $this->langgroupcode, PDO::PARAM_INT);
                        break;
                    case '`LanguageSubgroup`':
                        $stmt->bindValue($identifier, $this->languagesubgroup, PDO::PARAM_STR);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`LanguageRef`':
                        $stmt->bindValue($identifier, $this->languageref, PDO::PARAM_INT);
                        break;
                    case '`Remarks`':
                        $stmt->bindValue($identifier, $this->remarks, PDO::PARAM_STR);
                        break;
                    case '`SecondLanguageSpeakers`':
                        $stmt->bindValue($identifier, $this->secondlanguagespeakers, PDO::PARAM_STR);
                        break;
                    case '`URL`':
                        $stmt->bindValue($identifier, $this->url, PDO::PARAM_STR);
                        break;
                    case '`Used`':
                        $stmt->bindValue($identifier, $this->used, PDO::PARAM_INT);
                        break;
                    case '`NamesCount`':
                        $stmt->bindValue($identifier, $this->namescount, PDO::PARAM_INT);
                        break;
                    case '`SpeciesCount`':
                        $stmt->bindValue($identifier, $this->speciescount, PDO::PARAM_INT);
                        break;
                    case '`FamiliesCount`':
                        $stmt->bindValue($identifier, $this->familiescount, PDO::PARAM_INT);
                        break;
                    case '`NamesCount_SLB`':
                        $stmt->bindValue($identifier, $this->namescount_slb, PDO::PARAM_INT);
                        break;
                    case '`SpeciesCount_SLB`':
                        $stmt->bindValue($identifier, $this->speciescount_slb, PDO::PARAM_INT);
                        break;
                    case '`FamiliesCount_SLB`':
                        $stmt->bindValue($identifier, $this->familiescount_slb, PDO::PARAM_INT);
                        break;
                    case '`LastUpdate`':
                        $stmt->bindValue($identifier, $this->lastupdate, PDO::PARAM_STR);
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
        $this->setLanguagename($pk);

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


            if (($retval = LanguagePeer::doValidate($this, $columns)) !== true) {
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
        $pos = LanguagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getLangcode();
                break;
            case 1:
                return $this->getLanguagename();
                break;
            case 2:
                return $this->getAlternatename();
                break;
            case 3:
                return $this->getFirstlanguagespeakers();
                break;
            case 4:
                return $this->getLanggroupcode();
                break;
            case 5:
                return $this->getLanguagesubgroup();
                break;
            case 6:
                return $this->getCCode();
                break;
            case 7:
                return $this->getLanguageref();
                break;
            case 8:
                return $this->getRemarks();
                break;
            case 9:
                return $this->getSecondlanguagespeakers();
                break;
            case 10:
                return $this->getUrl();
                break;
            case 11:
                return $this->getUsed();
                break;
            case 12:
                return $this->getNamescount();
                break;
            case 13:
                return $this->getSpeciescount();
                break;
            case 14:
                return $this->getFamiliescount();
                break;
            case 15:
                return $this->getNamescountSlb();
                break;
            case 16:
                return $this->getSpeciescountSlb();
                break;
            case 17:
                return $this->getFamiliescountSlb();
                break;
            case 18:
                return $this->getLastupdate();
                break;
            case 19:
                return $this->getEntered();
                break;
            case 20:
                return $this->getDateentered();
                break;
            case 21:
                return $this->getModified();
                break;
            case 22:
                return $this->getDatemodified();
                break;
            case 23:
                return $this->getExpert();
                break;
            case 24:
                return $this->getDatechecked();
                break;
            case 25:
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
        if (isset($alreadyDumpedObjects['Language'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Language'][$this->getPrimaryKey()] = true;
        $keys = LanguagePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getLangcode(),
            $keys[1] => $this->getLanguagename(),
            $keys[2] => $this->getAlternatename(),
            $keys[3] => $this->getFirstlanguagespeakers(),
            $keys[4] => $this->getLanggroupcode(),
            $keys[5] => $this->getLanguagesubgroup(),
            $keys[6] => $this->getCCode(),
            $keys[7] => $this->getLanguageref(),
            $keys[8] => $this->getRemarks(),
            $keys[9] => $this->getSecondlanguagespeakers(),
            $keys[10] => $this->getUrl(),
            $keys[11] => $this->getUsed(),
            $keys[12] => $this->getNamescount(),
            $keys[13] => $this->getSpeciescount(),
            $keys[14] => $this->getFamiliescount(),
            $keys[15] => $this->getNamescountSlb(),
            $keys[16] => $this->getSpeciescountSlb(),
            $keys[17] => $this->getFamiliescountSlb(),
            $keys[18] => $this->getLastupdate(),
            $keys[19] => $this->getEntered(),
            $keys[20] => $this->getDateentered(),
            $keys[21] => $this->getModified(),
            $keys[22] => $this->getDatemodified(),
            $keys[23] => $this->getExpert(),
            $keys[24] => $this->getDatechecked(),
            $keys[25] => $this->getTs(),
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
        $pos = LanguagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setLangcode($value);
                break;
            case 1:
                $this->setLanguagename($value);
                break;
            case 2:
                $this->setAlternatename($value);
                break;
            case 3:
                $this->setFirstlanguagespeakers($value);
                break;
            case 4:
                $this->setLanggroupcode($value);
                break;
            case 5:
                $this->setLanguagesubgroup($value);
                break;
            case 6:
                $this->setCCode($value);
                break;
            case 7:
                $this->setLanguageref($value);
                break;
            case 8:
                $this->setRemarks($value);
                break;
            case 9:
                $this->setSecondlanguagespeakers($value);
                break;
            case 10:
                $this->setUrl($value);
                break;
            case 11:
                $this->setUsed($value);
                break;
            case 12:
                $this->setNamescount($value);
                break;
            case 13:
                $this->setSpeciescount($value);
                break;
            case 14:
                $this->setFamiliescount($value);
                break;
            case 15:
                $this->setNamescountSlb($value);
                break;
            case 16:
                $this->setSpeciescountSlb($value);
                break;
            case 17:
                $this->setFamiliescountSlb($value);
                break;
            case 18:
                $this->setLastupdate($value);
                break;
            case 19:
                $this->setEntered($value);
                break;
            case 20:
                $this->setDateentered($value);
                break;
            case 21:
                $this->setModified($value);
                break;
            case 22:
                $this->setDatemodified($value);
                break;
            case 23:
                $this->setExpert($value);
                break;
            case 24:
                $this->setDatechecked($value);
                break;
            case 25:
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
        $keys = LanguagePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setLangcode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setLanguagename($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAlternatename($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setFirstlanguagespeakers($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLanggroupcode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLanguagesubgroup($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCCode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLanguageref($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setRemarks($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setSecondlanguagespeakers($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setUrl($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setUsed($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNamescount($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setSpeciescount($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setFamiliescount($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setNamescountSlb($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setSpeciescountSlb($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setFamiliescountSlb($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setLastupdate($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setEntered($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setDateentered($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setModified($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDatemodified($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setExpert($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setDatechecked($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setTs($arr[$keys[25]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(LanguagePeer::DATABASE_NAME);

        if ($this->isColumnModified(LanguagePeer::LANGCODE)) $criteria->add(LanguagePeer::LANGCODE, $this->langcode);
        if ($this->isColumnModified(LanguagePeer::LANGUAGENAME)) $criteria->add(LanguagePeer::LANGUAGENAME, $this->languagename);
        if ($this->isColumnModified(LanguagePeer::ALTERNATENAME)) $criteria->add(LanguagePeer::ALTERNATENAME, $this->alternatename);
        if ($this->isColumnModified(LanguagePeer::FIRSTLANGUAGESPEAKERS)) $criteria->add(LanguagePeer::FIRSTLANGUAGESPEAKERS, $this->firstlanguagespeakers);
        if ($this->isColumnModified(LanguagePeer::LANGGROUPCODE)) $criteria->add(LanguagePeer::LANGGROUPCODE, $this->langgroupcode);
        if ($this->isColumnModified(LanguagePeer::LANGUAGESUBGROUP)) $criteria->add(LanguagePeer::LANGUAGESUBGROUP, $this->languagesubgroup);
        if ($this->isColumnModified(LanguagePeer::C_CODE)) $criteria->add(LanguagePeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(LanguagePeer::LANGUAGEREF)) $criteria->add(LanguagePeer::LANGUAGEREF, $this->languageref);
        if ($this->isColumnModified(LanguagePeer::REMARKS)) $criteria->add(LanguagePeer::REMARKS, $this->remarks);
        if ($this->isColumnModified(LanguagePeer::SECONDLANGUAGESPEAKERS)) $criteria->add(LanguagePeer::SECONDLANGUAGESPEAKERS, $this->secondlanguagespeakers);
        if ($this->isColumnModified(LanguagePeer::URL)) $criteria->add(LanguagePeer::URL, $this->url);
        if ($this->isColumnModified(LanguagePeer::USED)) $criteria->add(LanguagePeer::USED, $this->used);
        if ($this->isColumnModified(LanguagePeer::NAMESCOUNT)) $criteria->add(LanguagePeer::NAMESCOUNT, $this->namescount);
        if ($this->isColumnModified(LanguagePeer::SPECIESCOUNT)) $criteria->add(LanguagePeer::SPECIESCOUNT, $this->speciescount);
        if ($this->isColumnModified(LanguagePeer::FAMILIESCOUNT)) $criteria->add(LanguagePeer::FAMILIESCOUNT, $this->familiescount);
        if ($this->isColumnModified(LanguagePeer::NAMESCOUNT_SLB)) $criteria->add(LanguagePeer::NAMESCOUNT_SLB, $this->namescount_slb);
        if ($this->isColumnModified(LanguagePeer::SPECIESCOUNT_SLB)) $criteria->add(LanguagePeer::SPECIESCOUNT_SLB, $this->speciescount_slb);
        if ($this->isColumnModified(LanguagePeer::FAMILIESCOUNT_SLB)) $criteria->add(LanguagePeer::FAMILIESCOUNT_SLB, $this->familiescount_slb);
        if ($this->isColumnModified(LanguagePeer::LASTUPDATE)) $criteria->add(LanguagePeer::LASTUPDATE, $this->lastupdate);
        if ($this->isColumnModified(LanguagePeer::ENTERED)) $criteria->add(LanguagePeer::ENTERED, $this->entered);
        if ($this->isColumnModified(LanguagePeer::DATEENTERED)) $criteria->add(LanguagePeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(LanguagePeer::MODIFIED)) $criteria->add(LanguagePeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(LanguagePeer::DATEMODIFIED)) $criteria->add(LanguagePeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(LanguagePeer::EXPERT)) $criteria->add(LanguagePeer::EXPERT, $this->expert);
        if ($this->isColumnModified(LanguagePeer::DATECHECKED)) $criteria->add(LanguagePeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(LanguagePeer::TS)) $criteria->add(LanguagePeer::TS, $this->ts);

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
        $criteria = new Criteria(LanguagePeer::DATABASE_NAME);
        $criteria->add(LanguagePeer::LANGUAGENAME, $this->languagename);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getLanguagename();
    }

    /**
     * Generic method to set the primary key (languagename column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setLanguagename($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getLanguagename();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Language (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setLangcode($this->getLangcode());
        $copyObj->setAlternatename($this->getAlternatename());
        $copyObj->setFirstlanguagespeakers($this->getFirstlanguagespeakers());
        $copyObj->setLanggroupcode($this->getLanggroupcode());
        $copyObj->setLanguagesubgroup($this->getLanguagesubgroup());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setLanguageref($this->getLanguageref());
        $copyObj->setRemarks($this->getRemarks());
        $copyObj->setSecondlanguagespeakers($this->getSecondlanguagespeakers());
        $copyObj->setUrl($this->getUrl());
        $copyObj->setUsed($this->getUsed());
        $copyObj->setNamescount($this->getNamescount());
        $copyObj->setSpeciescount($this->getSpeciescount());
        $copyObj->setFamiliescount($this->getFamiliescount());
        $copyObj->setNamescountSlb($this->getNamescountSlb());
        $copyObj->setSpeciescountSlb($this->getSpeciescountSlb());
        $copyObj->setFamiliescountSlb($this->getFamiliescountSlb());
        $copyObj->setLastupdate($this->getLastupdate());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setLanguagename(NULL); // this is a auto-increment column, so set to default value
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
     * @return Language Clone of current object.
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
     * @return LanguagePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new LanguagePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->langcode = null;
        $this->languagename = null;
        $this->alternatename = null;
        $this->firstlanguagespeakers = null;
        $this->langgroupcode = null;
        $this->languagesubgroup = null;
        $this->c_code = null;
        $this->languageref = null;
        $this->remarks = null;
        $this->secondlanguagespeakers = null;
        $this->url = null;
        $this->used = null;
        $this->namescount = null;
        $this->speciescount = null;
        $this->familiescount = null;
        $this->namescount_slb = null;
        $this->speciescount_slb = null;
        $this->familiescount_slb = null;
        $this->lastupdate = null;
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
        return (string) $this->exportTo(LanguagePeer::DEFAULT_STRING_FORMAT);
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
