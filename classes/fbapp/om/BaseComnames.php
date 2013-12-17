<?php


/**
 * Base class that represents a row from the 'comnames' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseComnames extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ComnamesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ComnamesPeer
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
     * The value for the comname field.
     * @var        string
     */
    protected $comname;

    /**
     * The value for the transliteration field.
     * @var        string
     */
    protected $transliteration;

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
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the language field.
     * @var        string
     */
    protected $language;

    /**
     * The value for the script field.
     * @var        string
     */
    protected $script;

    /**
     * The value for the unicodetext field.
     * @var        string
     */
    protected $unicodetext;

    /**
     * The value for the nametype field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nametype;

    /**
     * The value for the preferredname field.
     * @var        int
     */
    protected $preferredname;

    /**
     * The value for the tradename field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $tradename;

    /**
     * The value for the tradenameref field.
     * @var        int
     */
    protected $tradenameref;

    /**
     * The value for the comnamesrefno field.
     * @var        int
     */
    protected $comnamesrefno;

    /**
     * The value for the misspelling field.
     * @var        int
     */
    protected $misspelling;

    /**
     * The value for the size field.
     * @var        string
     */
    protected $size;

    /**
     * The value for the sex field.
     * @var        string
     */
    protected $sex;

    /**
     * The value for the language2 field.
     * @var        string
     */
    protected $language2;

    /**
     * The value for the locality2 field.
     * @var        string
     */
    protected $locality2;

    /**
     * The value for the rank field.
     * @var        int
     */
    protected $rank;

    /**
     * The value for the remarks field.
     * @var        string
     */
    protected $remarks;

    /**
     * The value for the secondword field.
     * @var        string
     */
    protected $secondword;

    /**
     * The value for the thirdword field.
     * @var        string
     */
    protected $thirdword;

    /**
     * The value for the fourthword field.
     * @var        string
     */
    protected $fourthword;

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
     * The value for the core field.
     * @var        string
     */
    protected $core;

    /**
     * The value for the modifier1 field.
     * @var        string
     */
    protected $modifier1;

    /**
     * The value for the modifier2 field.
     * @var        string
     */
    protected $modifier2;

    /**
     * The value for the cloffsca field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $cloffsca;

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
        $this->nametype = '';
        $this->tradename = 0;
        $this->cloffsca = 0;
    }

    /**
     * Initializes internal state of BaseComnames object.
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
     * Get the [comname] column value.
     *
     * @return string
     */
    public function getComname()
    {

        return $this->comname;
    }

    /**
     * Get the [transliteration] column value.
     *
     * @return string
     */
    public function getTransliteration()
    {

        return $this->transliteration;
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
     * Get the [c_code] column value.
     *
     * @return string
     */
    public function getCCode()
    {

        return $this->c_code;
    }

    /**
     * Get the [language] column value.
     *
     * @return string
     */
    public function getLanguage()
    {

        return $this->language;
    }

    /**
     * Get the [script] column value.
     *
     * @return string
     */
    public function getScript()
    {

        return $this->script;
    }

    /**
     * Get the [unicodetext] column value.
     *
     * @return string
     */
    public function getUnicodetext()
    {

        return $this->unicodetext;
    }

    /**
     * Get the [nametype] column value.
     *
     * @return string
     */
    public function getNametype()
    {

        return $this->nametype;
    }

    /**
     * Get the [preferredname] column value.
     *
     * @return int
     */
    public function getPreferredname()
    {

        return $this->preferredname;
    }

    /**
     * Get the [tradename] column value.
     *
     * @return int
     */
    public function getTradename()
    {

        return $this->tradename;
    }

    /**
     * Get the [tradenameref] column value.
     *
     * @return int
     */
    public function getTradenameref()
    {

        return $this->tradenameref;
    }

    /**
     * Get the [comnamesrefno] column value.
     *
     * @return int
     */
    public function getComnamesrefno()
    {

        return $this->comnamesrefno;
    }

    /**
     * Get the [misspelling] column value.
     *
     * @return int
     */
    public function getMisspelling()
    {

        return $this->misspelling;
    }

    /**
     * Get the [size] column value.
     *
     * @return string
     */
    public function getSize()
    {

        return $this->size;
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
     * Get the [language2] column value.
     *
     * @return string
     */
    public function getLanguage2()
    {

        return $this->language2;
    }

    /**
     * Get the [locality2] column value.
     *
     * @return string
     */
    public function getLocality2()
    {

        return $this->locality2;
    }

    /**
     * Get the [rank] column value.
     *
     * @return int
     */
    public function getRank()
    {

        return $this->rank;
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
     * Get the [secondword] column value.
     *
     * @return string
     */
    public function getSecondword()
    {

        return $this->secondword;
    }

    /**
     * Get the [thirdword] column value.
     *
     * @return string
     */
    public function getThirdword()
    {

        return $this->thirdword;
    }

    /**
     * Get the [fourthword] column value.
     *
     * @return string
     */
    public function getFourthword()
    {

        return $this->fourthword;
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
     * Get the [core] column value.
     *
     * @return string
     */
    public function getCore()
    {

        return $this->core;
    }

    /**
     * Get the [modifier1] column value.
     *
     * @return string
     */
    public function getModifier1()
    {

        return $this->modifier1;
    }

    /**
     * Get the [modifier2] column value.
     *
     * @return string
     */
    public function getModifier2()
    {

        return $this->modifier2;
    }

    /**
     * Get the [cloffsca] column value.
     *
     * @return int
     */
    public function getCloffsca()
    {

        return $this->cloffsca;
    }

    /**
     * Set the value of [autoctr] column.
     *
     * @param  int $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = ComnamesPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [comname] column.
     *
     * @param  string $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setComname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comname !== $v) {
            $this->comname = $v;
            $this->modifiedColumns[] = ComnamesPeer::COMNAME;
        }


        return $this;
    } // setComname()

    /**
     * Set the value of [transliteration] column.
     *
     * @param  string $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setTransliteration($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->transliteration !== $v) {
            $this->transliteration = $v;
            $this->modifiedColumns[] = ComnamesPeer::TRANSLITERATION;
        }


        return $this;
    } // setTransliteration()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = ComnamesPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = ComnamesPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = ComnamesPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [language] column.
     *
     * @param  string $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setLanguage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->language !== $v) {
            $this->language = $v;
            $this->modifiedColumns[] = ComnamesPeer::LANGUAGE;
        }


        return $this;
    } // setLanguage()

    /**
     * Set the value of [script] column.
     *
     * @param  string $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setScript($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->script !== $v) {
            $this->script = $v;
            $this->modifiedColumns[] = ComnamesPeer::SCRIPT;
        }


        return $this;
    } // setScript()

    /**
     * Set the value of [unicodetext] column.
     *
     * @param  string $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setUnicodetext($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unicodetext !== $v) {
            $this->unicodetext = $v;
            $this->modifiedColumns[] = ComnamesPeer::UNICODETEXT;
        }


        return $this;
    } // setUnicodetext()

    /**
     * Set the value of [nametype] column.
     *
     * @param  string $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setNametype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nametype !== $v) {
            $this->nametype = $v;
            $this->modifiedColumns[] = ComnamesPeer::NAMETYPE;
        }


        return $this;
    } // setNametype()

    /**
     * Set the value of [preferredname] column.
     *
     * @param  int $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setPreferredname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->preferredname !== $v) {
            $this->preferredname = $v;
            $this->modifiedColumns[] = ComnamesPeer::PREFERREDNAME;
        }


        return $this;
    } // setPreferredname()

    /**
     * Set the value of [tradename] column.
     *
     * @param  int $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setTradename($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tradename !== $v) {
            $this->tradename = $v;
            $this->modifiedColumns[] = ComnamesPeer::TRADENAME;
        }


        return $this;
    } // setTradename()

    /**
     * Set the value of [tradenameref] column.
     *
     * @param  int $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setTradenameref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tradenameref !== $v) {
            $this->tradenameref = $v;
            $this->modifiedColumns[] = ComnamesPeer::TRADENAMEREF;
        }


        return $this;
    } // setTradenameref()

    /**
     * Set the value of [comnamesrefno] column.
     *
     * @param  int $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setComnamesrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->comnamesrefno !== $v) {
            $this->comnamesrefno = $v;
            $this->modifiedColumns[] = ComnamesPeer::COMNAMESREFNO;
        }


        return $this;
    } // setComnamesrefno()

    /**
     * Set the value of [misspelling] column.
     *
     * @param  int $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setMisspelling($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->misspelling !== $v) {
            $this->misspelling = $v;
            $this->modifiedColumns[] = ComnamesPeer::MISSPELLING;
        }


        return $this;
    } // setMisspelling()

    /**
     * Set the value of [size] column.
     *
     * @param  string $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setSize($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->size !== $v) {
            $this->size = $v;
            $this->modifiedColumns[] = ComnamesPeer::SIZE;
        }


        return $this;
    } // setSize()

    /**
     * Set the value of [sex] column.
     *
     * @param  string $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setSex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sex !== $v) {
            $this->sex = $v;
            $this->modifiedColumns[] = ComnamesPeer::SEX;
        }


        return $this;
    } // setSex()

    /**
     * Set the value of [language2] column.
     *
     * @param  string $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setLanguage2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->language2 !== $v) {
            $this->language2 = $v;
            $this->modifiedColumns[] = ComnamesPeer::LANGUAGE2;
        }


        return $this;
    } // setLanguage2()

    /**
     * Set the value of [locality2] column.
     *
     * @param  string $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setLocality2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality2 !== $v) {
            $this->locality2 = $v;
            $this->modifiedColumns[] = ComnamesPeer::LOCALITY2;
        }


        return $this;
    } // setLocality2()

    /**
     * Set the value of [rank] column.
     *
     * @param  int $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setRank($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rank !== $v) {
            $this->rank = $v;
            $this->modifiedColumns[] = ComnamesPeer::RANK;
        }


        return $this;
    } // setRank()

    /**
     * Set the value of [remarks] column.
     *
     * @param  string $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[] = ComnamesPeer::REMARKS;
        }


        return $this;
    } // setRemarks()

    /**
     * Set the value of [secondword] column.
     *
     * @param  string $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setSecondword($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->secondword !== $v) {
            $this->secondword = $v;
            $this->modifiedColumns[] = ComnamesPeer::SECONDWORD;
        }


        return $this;
    } // setSecondword()

    /**
     * Set the value of [thirdword] column.
     *
     * @param  string $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setThirdword($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->thirdword !== $v) {
            $this->thirdword = $v;
            $this->modifiedColumns[] = ComnamesPeer::THIRDWORD;
        }


        return $this;
    } // setThirdword()

    /**
     * Set the value of [fourthword] column.
     *
     * @param  string $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setFourthword($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fourthword !== $v) {
            $this->fourthword = $v;
            $this->modifiedColumns[] = ComnamesPeer::FOURTHWORD;
        }


        return $this;
    } // setFourthword()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = ComnamesPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Comnames The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = ComnamesPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = ComnamesPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Comnames The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = ComnamesPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = ComnamesPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Comnames The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = ComnamesPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [core] column.
     *
     * @param  string $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setCore($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->core !== $v) {
            $this->core = $v;
            $this->modifiedColumns[] = ComnamesPeer::CORE;
        }


        return $this;
    } // setCore()

    /**
     * Set the value of [modifier1] column.
     *
     * @param  string $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setModifier1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->modifier1 !== $v) {
            $this->modifier1 = $v;
            $this->modifiedColumns[] = ComnamesPeer::MODIFIER1;
        }


        return $this;
    } // setModifier1()

    /**
     * Set the value of [modifier2] column.
     *
     * @param  string $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setModifier2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->modifier2 !== $v) {
            $this->modifier2 = $v;
            $this->modifiedColumns[] = ComnamesPeer::MODIFIER2;
        }


        return $this;
    } // setModifier2()

    /**
     * Set the value of [cloffsca] column.
     *
     * @param  int $v new value
     * @return Comnames The current object (for fluent API support)
     */
    public function setCloffsca($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cloffsca !== $v) {
            $this->cloffsca = $v;
            $this->modifiedColumns[] = ComnamesPeer::CLOFFSCA;
        }


        return $this;
    } // setCloffsca()

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
            if ($this->nametype !== '') {
                return false;
            }

            if ($this->tradename !== 0) {
                return false;
            }

            if ($this->cloffsca !== 0) {
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
            $this->comname = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->transliteration = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->stockcode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->speccode = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->c_code = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->language = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->script = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->unicodetext = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->nametype = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->preferredname = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->tradename = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->tradenameref = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->comnamesrefno = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->misspelling = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->size = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->sex = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->language2 = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->locality2 = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->rank = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->remarks = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->secondword = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->thirdword = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->fourthword = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->entered = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->dateentered = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->modified = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->datemodified = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->expert = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->datechecked = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->core = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->modifier1 = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->modifier2 = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->cloffsca = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 34; // 34 = ComnamesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Comnames object", $e);
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
            $con = Propel::getConnection(ComnamesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ComnamesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(ComnamesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ComnamesQuery::create()
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
            $con = Propel::getConnection(ComnamesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ComnamesPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(ComnamesPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(ComnamesPeer::COMNAME)) {
            $modifiedColumns[':p' . $index++]  = '`ComName`';
        }
        if ($this->isColumnModified(ComnamesPeer::TRANSLITERATION)) {
            $modifiedColumns[':p' . $index++]  = '`Transliteration`';
        }
        if ($this->isColumnModified(ComnamesPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(ComnamesPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(ComnamesPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(ComnamesPeer::LANGUAGE)) {
            $modifiedColumns[':p' . $index++]  = '`Language`';
        }
        if ($this->isColumnModified(ComnamesPeer::SCRIPT)) {
            $modifiedColumns[':p' . $index++]  = '`Script`';
        }
        if ($this->isColumnModified(ComnamesPeer::UNICODETEXT)) {
            $modifiedColumns[':p' . $index++]  = '`UnicodeText`';
        }
        if ($this->isColumnModified(ComnamesPeer::NAMETYPE)) {
            $modifiedColumns[':p' . $index++]  = '`NameType`';
        }
        if ($this->isColumnModified(ComnamesPeer::PREFERREDNAME)) {
            $modifiedColumns[':p' . $index++]  = '`PreferredName`';
        }
        if ($this->isColumnModified(ComnamesPeer::TRADENAME)) {
            $modifiedColumns[':p' . $index++]  = '`TradeName`';
        }
        if ($this->isColumnModified(ComnamesPeer::TRADENAMEREF)) {
            $modifiedColumns[':p' . $index++]  = '`TradeNameRef`';
        }
        if ($this->isColumnModified(ComnamesPeer::COMNAMESREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`ComNamesRefNo`';
        }
        if ($this->isColumnModified(ComnamesPeer::MISSPELLING)) {
            $modifiedColumns[':p' . $index++]  = '`Misspelling`';
        }
        if ($this->isColumnModified(ComnamesPeer::SIZE)) {
            $modifiedColumns[':p' . $index++]  = '`Size`';
        }
        if ($this->isColumnModified(ComnamesPeer::SEX)) {
            $modifiedColumns[':p' . $index++]  = '`Sex`';
        }
        if ($this->isColumnModified(ComnamesPeer::LANGUAGE2)) {
            $modifiedColumns[':p' . $index++]  = '`Language2`';
        }
        if ($this->isColumnModified(ComnamesPeer::LOCALITY2)) {
            $modifiedColumns[':p' . $index++]  = '`Locality2`';
        }
        if ($this->isColumnModified(ComnamesPeer::RANK)) {
            $modifiedColumns[':p' . $index++]  = '`Rank`';
        }
        if ($this->isColumnModified(ComnamesPeer::REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`Remarks`';
        }
        if ($this->isColumnModified(ComnamesPeer::SECONDWORD)) {
            $modifiedColumns[':p' . $index++]  = '`SecondWord`';
        }
        if ($this->isColumnModified(ComnamesPeer::THIRDWORD)) {
            $modifiedColumns[':p' . $index++]  = '`ThirdWord`';
        }
        if ($this->isColumnModified(ComnamesPeer::FOURTHWORD)) {
            $modifiedColumns[':p' . $index++]  = '`FourthWord`';
        }
        if ($this->isColumnModified(ComnamesPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(ComnamesPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(ComnamesPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(ComnamesPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(ComnamesPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(ComnamesPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(ComnamesPeer::CORE)) {
            $modifiedColumns[':p' . $index++]  = '`Core`';
        }
        if ($this->isColumnModified(ComnamesPeer::MODIFIER1)) {
            $modifiedColumns[':p' . $index++]  = '`modifier1`';
        }
        if ($this->isColumnModified(ComnamesPeer::MODIFIER2)) {
            $modifiedColumns[':p' . $index++]  = '`modifier2`';
        }
        if ($this->isColumnModified(ComnamesPeer::CLOFFSCA)) {
            $modifiedColumns[':p' . $index++]  = '`CLOFFSCA`';
        }

        $sql = sprintf(
            'INSERT INTO `comnames` (%s) VALUES (%s)',
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
                    case '`ComName`':
                        $stmt->bindValue($identifier, $this->comname, PDO::PARAM_STR);
                        break;
                    case '`Transliteration`':
                        $stmt->bindValue($identifier, $this->transliteration, PDO::PARAM_STR);
                        break;
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`Language`':
                        $stmt->bindValue($identifier, $this->language, PDO::PARAM_STR);
                        break;
                    case '`Script`':
                        $stmt->bindValue($identifier, $this->script, PDO::PARAM_STR);
                        break;
                    case '`UnicodeText`':
                        $stmt->bindValue($identifier, $this->unicodetext, PDO::PARAM_STR);
                        break;
                    case '`NameType`':
                        $stmt->bindValue($identifier, $this->nametype, PDO::PARAM_STR);
                        break;
                    case '`PreferredName`':
                        $stmt->bindValue($identifier, $this->preferredname, PDO::PARAM_INT);
                        break;
                    case '`TradeName`':
                        $stmt->bindValue($identifier, $this->tradename, PDO::PARAM_INT);
                        break;
                    case '`TradeNameRef`':
                        $stmt->bindValue($identifier, $this->tradenameref, PDO::PARAM_INT);
                        break;
                    case '`ComNamesRefNo`':
                        $stmt->bindValue($identifier, $this->comnamesrefno, PDO::PARAM_INT);
                        break;
                    case '`Misspelling`':
                        $stmt->bindValue($identifier, $this->misspelling, PDO::PARAM_INT);
                        break;
                    case '`Size`':
                        $stmt->bindValue($identifier, $this->size, PDO::PARAM_STR);
                        break;
                    case '`Sex`':
                        $stmt->bindValue($identifier, $this->sex, PDO::PARAM_STR);
                        break;
                    case '`Language2`':
                        $stmt->bindValue($identifier, $this->language2, PDO::PARAM_STR);
                        break;
                    case '`Locality2`':
                        $stmt->bindValue($identifier, $this->locality2, PDO::PARAM_STR);
                        break;
                    case '`Rank`':
                        $stmt->bindValue($identifier, $this->rank, PDO::PARAM_INT);
                        break;
                    case '`Remarks`':
                        $stmt->bindValue($identifier, $this->remarks, PDO::PARAM_STR);
                        break;
                    case '`SecondWord`':
                        $stmt->bindValue($identifier, $this->secondword, PDO::PARAM_STR);
                        break;
                    case '`ThirdWord`':
                        $stmt->bindValue($identifier, $this->thirdword, PDO::PARAM_STR);
                        break;
                    case '`FourthWord`':
                        $stmt->bindValue($identifier, $this->fourthword, PDO::PARAM_STR);
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
                    case '`Core`':
                        $stmt->bindValue($identifier, $this->core, PDO::PARAM_STR);
                        break;
                    case '`modifier1`':
                        $stmt->bindValue($identifier, $this->modifier1, PDO::PARAM_STR);
                        break;
                    case '`modifier2`':
                        $stmt->bindValue($identifier, $this->modifier2, PDO::PARAM_STR);
                        break;
                    case '`CLOFFSCA`':
                        $stmt->bindValue($identifier, $this->cloffsca, PDO::PARAM_INT);
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


            if (($retval = ComnamesPeer::doValidate($this, $columns)) !== true) {
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
        $pos = ComnamesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getComname();
                break;
            case 2:
                return $this->getTransliteration();
                break;
            case 3:
                return $this->getStockcode();
                break;
            case 4:
                return $this->getSpeccode();
                break;
            case 5:
                return $this->getCCode();
                break;
            case 6:
                return $this->getLanguage();
                break;
            case 7:
                return $this->getScript();
                break;
            case 8:
                return $this->getUnicodetext();
                break;
            case 9:
                return $this->getNametype();
                break;
            case 10:
                return $this->getPreferredname();
                break;
            case 11:
                return $this->getTradename();
                break;
            case 12:
                return $this->getTradenameref();
                break;
            case 13:
                return $this->getComnamesrefno();
                break;
            case 14:
                return $this->getMisspelling();
                break;
            case 15:
                return $this->getSize();
                break;
            case 16:
                return $this->getSex();
                break;
            case 17:
                return $this->getLanguage2();
                break;
            case 18:
                return $this->getLocality2();
                break;
            case 19:
                return $this->getRank();
                break;
            case 20:
                return $this->getRemarks();
                break;
            case 21:
                return $this->getSecondword();
                break;
            case 22:
                return $this->getThirdword();
                break;
            case 23:
                return $this->getFourthword();
                break;
            case 24:
                return $this->getEntered();
                break;
            case 25:
                return $this->getDateentered();
                break;
            case 26:
                return $this->getModified();
                break;
            case 27:
                return $this->getDatemodified();
                break;
            case 28:
                return $this->getExpert();
                break;
            case 29:
                return $this->getDatechecked();
                break;
            case 30:
                return $this->getCore();
                break;
            case 31:
                return $this->getModifier1();
                break;
            case 32:
                return $this->getModifier2();
                break;
            case 33:
                return $this->getCloffsca();
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
        if (isset($alreadyDumpedObjects['Comnames'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Comnames'][serialize($this->getPrimaryKey())] = true;
        $keys = ComnamesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getComname(),
            $keys[2] => $this->getTransliteration(),
            $keys[3] => $this->getStockcode(),
            $keys[4] => $this->getSpeccode(),
            $keys[5] => $this->getCCode(),
            $keys[6] => $this->getLanguage(),
            $keys[7] => $this->getScript(),
            $keys[8] => $this->getUnicodetext(),
            $keys[9] => $this->getNametype(),
            $keys[10] => $this->getPreferredname(),
            $keys[11] => $this->getTradename(),
            $keys[12] => $this->getTradenameref(),
            $keys[13] => $this->getComnamesrefno(),
            $keys[14] => $this->getMisspelling(),
            $keys[15] => $this->getSize(),
            $keys[16] => $this->getSex(),
            $keys[17] => $this->getLanguage2(),
            $keys[18] => $this->getLocality2(),
            $keys[19] => $this->getRank(),
            $keys[20] => $this->getRemarks(),
            $keys[21] => $this->getSecondword(),
            $keys[22] => $this->getThirdword(),
            $keys[23] => $this->getFourthword(),
            $keys[24] => $this->getEntered(),
            $keys[25] => $this->getDateentered(),
            $keys[26] => $this->getModified(),
            $keys[27] => $this->getDatemodified(),
            $keys[28] => $this->getExpert(),
            $keys[29] => $this->getDatechecked(),
            $keys[30] => $this->getCore(),
            $keys[31] => $this->getModifier1(),
            $keys[32] => $this->getModifier2(),
            $keys[33] => $this->getCloffsca(),
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
        $pos = ComnamesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setComname($value);
                break;
            case 2:
                $this->setTransliteration($value);
                break;
            case 3:
                $this->setStockcode($value);
                break;
            case 4:
                $this->setSpeccode($value);
                break;
            case 5:
                $this->setCCode($value);
                break;
            case 6:
                $this->setLanguage($value);
                break;
            case 7:
                $this->setScript($value);
                break;
            case 8:
                $this->setUnicodetext($value);
                break;
            case 9:
                $this->setNametype($value);
                break;
            case 10:
                $this->setPreferredname($value);
                break;
            case 11:
                $this->setTradename($value);
                break;
            case 12:
                $this->setTradenameref($value);
                break;
            case 13:
                $this->setComnamesrefno($value);
                break;
            case 14:
                $this->setMisspelling($value);
                break;
            case 15:
                $this->setSize($value);
                break;
            case 16:
                $this->setSex($value);
                break;
            case 17:
                $this->setLanguage2($value);
                break;
            case 18:
                $this->setLocality2($value);
                break;
            case 19:
                $this->setRank($value);
                break;
            case 20:
                $this->setRemarks($value);
                break;
            case 21:
                $this->setSecondword($value);
                break;
            case 22:
                $this->setThirdword($value);
                break;
            case 23:
                $this->setFourthword($value);
                break;
            case 24:
                $this->setEntered($value);
                break;
            case 25:
                $this->setDateentered($value);
                break;
            case 26:
                $this->setModified($value);
                break;
            case 27:
                $this->setDatemodified($value);
                break;
            case 28:
                $this->setExpert($value);
                break;
            case 29:
                $this->setDatechecked($value);
                break;
            case 30:
                $this->setCore($value);
                break;
            case 31:
                $this->setModifier1($value);
                break;
            case 32:
                $this->setModifier2($value);
                break;
            case 33:
                $this->setCloffsca($value);
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
        $keys = ComnamesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setComname($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setTransliteration($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setStockcode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSpeccode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCCode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLanguage($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setScript($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setUnicodetext($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setNametype($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPreferredname($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setTradename($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setTradenameref($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setComnamesrefno($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setMisspelling($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setSize($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setSex($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setLanguage2($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setLocality2($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setRank($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setRemarks($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setSecondword($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setThirdword($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setFourthword($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setEntered($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDateentered($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setModified($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDatemodified($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setExpert($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setDatechecked($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setCore($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setModifier1($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setModifier2($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setCloffsca($arr[$keys[33]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ComnamesPeer::DATABASE_NAME);

        if ($this->isColumnModified(ComnamesPeer::AUTOCTR)) $criteria->add(ComnamesPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(ComnamesPeer::COMNAME)) $criteria->add(ComnamesPeer::COMNAME, $this->comname);
        if ($this->isColumnModified(ComnamesPeer::TRANSLITERATION)) $criteria->add(ComnamesPeer::TRANSLITERATION, $this->transliteration);
        if ($this->isColumnModified(ComnamesPeer::STOCKCODE)) $criteria->add(ComnamesPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(ComnamesPeer::SPECCODE)) $criteria->add(ComnamesPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(ComnamesPeer::C_CODE)) $criteria->add(ComnamesPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(ComnamesPeer::LANGUAGE)) $criteria->add(ComnamesPeer::LANGUAGE, $this->language);
        if ($this->isColumnModified(ComnamesPeer::SCRIPT)) $criteria->add(ComnamesPeer::SCRIPT, $this->script);
        if ($this->isColumnModified(ComnamesPeer::UNICODETEXT)) $criteria->add(ComnamesPeer::UNICODETEXT, $this->unicodetext);
        if ($this->isColumnModified(ComnamesPeer::NAMETYPE)) $criteria->add(ComnamesPeer::NAMETYPE, $this->nametype);
        if ($this->isColumnModified(ComnamesPeer::PREFERREDNAME)) $criteria->add(ComnamesPeer::PREFERREDNAME, $this->preferredname);
        if ($this->isColumnModified(ComnamesPeer::TRADENAME)) $criteria->add(ComnamesPeer::TRADENAME, $this->tradename);
        if ($this->isColumnModified(ComnamesPeer::TRADENAMEREF)) $criteria->add(ComnamesPeer::TRADENAMEREF, $this->tradenameref);
        if ($this->isColumnModified(ComnamesPeer::COMNAMESREFNO)) $criteria->add(ComnamesPeer::COMNAMESREFNO, $this->comnamesrefno);
        if ($this->isColumnModified(ComnamesPeer::MISSPELLING)) $criteria->add(ComnamesPeer::MISSPELLING, $this->misspelling);
        if ($this->isColumnModified(ComnamesPeer::SIZE)) $criteria->add(ComnamesPeer::SIZE, $this->size);
        if ($this->isColumnModified(ComnamesPeer::SEX)) $criteria->add(ComnamesPeer::SEX, $this->sex);
        if ($this->isColumnModified(ComnamesPeer::LANGUAGE2)) $criteria->add(ComnamesPeer::LANGUAGE2, $this->language2);
        if ($this->isColumnModified(ComnamesPeer::LOCALITY2)) $criteria->add(ComnamesPeer::LOCALITY2, $this->locality2);
        if ($this->isColumnModified(ComnamesPeer::RANK)) $criteria->add(ComnamesPeer::RANK, $this->rank);
        if ($this->isColumnModified(ComnamesPeer::REMARKS)) $criteria->add(ComnamesPeer::REMARKS, $this->remarks);
        if ($this->isColumnModified(ComnamesPeer::SECONDWORD)) $criteria->add(ComnamesPeer::SECONDWORD, $this->secondword);
        if ($this->isColumnModified(ComnamesPeer::THIRDWORD)) $criteria->add(ComnamesPeer::THIRDWORD, $this->thirdword);
        if ($this->isColumnModified(ComnamesPeer::FOURTHWORD)) $criteria->add(ComnamesPeer::FOURTHWORD, $this->fourthword);
        if ($this->isColumnModified(ComnamesPeer::ENTERED)) $criteria->add(ComnamesPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(ComnamesPeer::DATEENTERED)) $criteria->add(ComnamesPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(ComnamesPeer::MODIFIED)) $criteria->add(ComnamesPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(ComnamesPeer::DATEMODIFIED)) $criteria->add(ComnamesPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(ComnamesPeer::EXPERT)) $criteria->add(ComnamesPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(ComnamesPeer::DATECHECKED)) $criteria->add(ComnamesPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(ComnamesPeer::CORE)) $criteria->add(ComnamesPeer::CORE, $this->core);
        if ($this->isColumnModified(ComnamesPeer::MODIFIER1)) $criteria->add(ComnamesPeer::MODIFIER1, $this->modifier1);
        if ($this->isColumnModified(ComnamesPeer::MODIFIER2)) $criteria->add(ComnamesPeer::MODIFIER2, $this->modifier2);
        if ($this->isColumnModified(ComnamesPeer::CLOFFSCA)) $criteria->add(ComnamesPeer::CLOFFSCA, $this->cloffsca);

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
        $criteria = new Criteria(ComnamesPeer::DATABASE_NAME);
        $criteria->add(ComnamesPeer::AUTOCTR, $this->autoctr);
        $criteria->add(ComnamesPeer::COMNAME, $this->comname);
        $criteria->add(ComnamesPeer::STOCKCODE, $this->stockcode);
        $criteria->add(ComnamesPeer::C_CODE, $this->c_code);
        $criteria->add(ComnamesPeer::LANGUAGE, $this->language);
        $criteria->add(ComnamesPeer::NAMETYPE, $this->nametype);

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
        $pks[1] = $this->getComname();
        $pks[2] = $this->getStockcode();
        $pks[3] = $this->getCCode();
        $pks[4] = $this->getLanguage();
        $pks[5] = $this->getNametype();

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
        $this->setComname($keys[1]);
        $this->setStockcode($keys[2]);
        $this->setCCode($keys[3]);
        $this->setLanguage($keys[4]);
        $this->setNametype($keys[5]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getAutoctr()) && (null === $this->getComname()) && (null === $this->getStockcode()) && (null === $this->getCCode()) && (null === $this->getLanguage()) && (null === $this->getNametype());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Comnames (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setAutoctr($this->getAutoctr());
        $copyObj->setComname($this->getComname());
        $copyObj->setTransliteration($this->getTransliteration());
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setLanguage($this->getLanguage());
        $copyObj->setScript($this->getScript());
        $copyObj->setUnicodetext($this->getUnicodetext());
        $copyObj->setNametype($this->getNametype());
        $copyObj->setPreferredname($this->getPreferredname());
        $copyObj->setTradename($this->getTradename());
        $copyObj->setTradenameref($this->getTradenameref());
        $copyObj->setComnamesrefno($this->getComnamesrefno());
        $copyObj->setMisspelling($this->getMisspelling());
        $copyObj->setSize($this->getSize());
        $copyObj->setSex($this->getSex());
        $copyObj->setLanguage2($this->getLanguage2());
        $copyObj->setLocality2($this->getLocality2());
        $copyObj->setRank($this->getRank());
        $copyObj->setRemarks($this->getRemarks());
        $copyObj->setSecondword($this->getSecondword());
        $copyObj->setThirdword($this->getThirdword());
        $copyObj->setFourthword($this->getFourthword());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setCore($this->getCore());
        $copyObj->setModifier1($this->getModifier1());
        $copyObj->setModifier2($this->getModifier2());
        $copyObj->setCloffsca($this->getCloffsca());
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
     * @return Comnames Clone of current object.
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
     * @return ComnamesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ComnamesPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->comname = null;
        $this->transliteration = null;
        $this->stockcode = null;
        $this->speccode = null;
        $this->c_code = null;
        $this->language = null;
        $this->script = null;
        $this->unicodetext = null;
        $this->nametype = null;
        $this->preferredname = null;
        $this->tradename = null;
        $this->tradenameref = null;
        $this->comnamesrefno = null;
        $this->misspelling = null;
        $this->size = null;
        $this->sex = null;
        $this->language2 = null;
        $this->locality2 = null;
        $this->rank = null;
        $this->remarks = null;
        $this->secondword = null;
        $this->thirdword = null;
        $this->fourthword = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->core = null;
        $this->modifier1 = null;
        $this->modifier2 = null;
        $this->cloffsca = null;
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
        return (string) $this->exportTo(ComnamesPeer::DEFAULT_STRING_FORMAT);
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
