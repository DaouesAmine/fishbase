<?php


/**
 * Base class that represents a row from the 'glossary' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseGlossary extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'GlossaryPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GlossaryPeer
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
     * The value for the termenglish field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $termenglish;

    /**
     * The value for the termenglishscnd field.
     * @var        string
     */
    protected $termenglishscnd;

    /**
     * The value for the termengishthird field.
     * @var        string
     */
    protected $termengishthird;

    /**
     * The value for the abbreviation field.
     * @var        string
     */
    protected $abbreviation;

    /**
     * The value for the termfrench field.
     * @var        string
     */
    protected $termfrench;

    /**
     * The value for the termspanish field.
     * @var        string
     */
    protected $termspanish;

    /**
     * The value for the termportuguese field.
     * @var        string
     */
    protected $termportuguese;

    /**
     * The value for the termrussian field.
     * @var        string
     */
    protected $termrussian;

    /**
     * The value for the termcyrillic field.
     * @var        string
     */
    protected $termcyrillic;

    /**
     * The value for the termcyrillic_u field.
     * @var        string
     */
    protected $termcyrillic_u;

    /**
     * The value for the termchinese field.
     * @var        string
     */
    protected $termchinese;

    /**
     * The value for the termchinese_u field.
     * @var        string
     */
    protected $termchinese_u;

    /**
     * The value for the see1 field.
     * @var        string
     */
    protected $see1;

    /**
     * The value for the see2 field.
     * @var        string
     */
    protected $see2;

    /**
     * The value for the see3 field.
     * @var        string
     */
    protected $see3;

    /**
     * The value for the picname field.
     * @var        string
     */
    protected $picname;

    /**
     * The value for the genetics field.
     * @var        int
     */
    protected $genetics;

    /**
     * The value for the comments field.
     * @var        string
     */
    protected $comments;

    /**
     * The value for the entered field.
     * Note: this column has a database default value of: 0
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
     * The value for the english field.
     * @var        string
     */
    protected $english;

    /**
     * The value for the grammar field.
     * @var        string
     */
    protected $grammar;

    /**
     * The value for the gender field.
     * @var        string
     */
    protected $gender;

    /**
     * The value for the frenchdef field.
     * @var        string
     */
    protected $frenchdef;

    /**
     * The value for the enteredfr field.
     * @var        int
     */
    protected $enteredfr;

    /**
     * The value for the dateenteredfr field.
     * @var        string
     */
    protected $dateenteredfr;

    /**
     * The value for the modifiedfr field.
     * @var        int
     */
    protected $modifiedfr;

    /**
     * The value for the datemodifiedfr field.
     * @var        string
     */
    protected $datemodifiedfr;

    /**
     * The value for the expertfr field.
     * @var        int
     */
    protected $expertfr;

    /**
     * The value for the datecheckedfr field.
     * @var        string
     */
    protected $datecheckedfr;

    /**
     * The value for the spanishdef field.
     * @var        string
     */
    protected $spanishdef;

    /**
     * The value for the enteredsp field.
     * @var        int
     */
    protected $enteredsp;

    /**
     * The value for the dateenteredsp field.
     * @var        string
     */
    protected $dateenteredsp;

    /**
     * The value for the modifiedsp field.
     * @var        int
     */
    protected $modifiedsp;

    /**
     * The value for the datemodifiedsp field.
     * @var        string
     */
    protected $datemodifiedsp;

    /**
     * The value for the expertsp field.
     * @var        int
     */
    protected $expertsp;

    /**
     * The value for the datecheckedsp field.
     * @var        string
     */
    protected $datecheckedsp;

    /**
     * The value for the portuguesedef field.
     * @var        string
     */
    protected $portuguesedef;

    /**
     * The value for the enteredpr field.
     * @var        int
     */
    protected $enteredpr;

    /**
     * The value for the dateenteredpr field.
     * @var        string
     */
    protected $dateenteredpr;

    /**
     * The value for the modifiedpr field.
     * @var        int
     */
    protected $modifiedpr;

    /**
     * The value for the datemodifiedpr field.
     * @var        string
     */
    protected $datemodifiedpr;

    /**
     * The value for the expertpr field.
     * @var        int
     */
    protected $expertpr;

    /**
     * The value for the datecheckedpr field.
     * @var        string
     */
    protected $datecheckedpr;

    /**
     * The value for the russiandef field.
     * @var        string
     */
    protected $russiandef;

    /**
     * The value for the enteredrus field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $enteredrus;

    /**
     * The value for the dateenteredrus field.
     * @var        string
     */
    protected $dateenteredrus;

    /**
     * The value for the modifiedrus field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $modifiedrus;

    /**
     * The value for the datemodifiedrus field.
     * @var        string
     */
    protected $datemodifiedrus;

    /**
     * The value for the expertrus field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $expertrus;

    /**
     * The value for the datecheckedrus field.
     * @var        string
     */
    protected $datecheckedrus;

    /**
     * The value for the cyrillicdef field.
     * @var        string
     */
    protected $cyrillicdef;

    /**
     * The value for the enteredcyr field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $enteredcyr;

    /**
     * The value for the dateenteredcyr field.
     * @var        string
     */
    protected $dateenteredcyr;

    /**
     * The value for the modifiedcyr field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $modifiedcyr;

    /**
     * The value for the datemodifiedcyr field.
     * @var        string
     */
    protected $datemodifiedcyr;

    /**
     * The value for the expertcyr field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $expertcyr;

    /**
     * The value for the datecheckedcyr field.
     * @var        string
     */
    protected $datecheckedcyr;

    /**
     * The value for the chinesedef field.
     * @var        string
     */
    protected $chinesedef;

    /**
     * The value for the enteredchi field.
     * @var        int
     */
    protected $enteredchi;

    /**
     * The value for the dateenteredchi field.
     * @var        string
     */
    protected $dateenteredchi;

    /**
     * The value for the modifiedchi field.
     * @var        int
     */
    protected $modifiedchi;

    /**
     * The value for the datemodifiedchi field.
     * @var        string
     */
    protected $datemodifiedchi;

    /**
     * The value for the expertchi field.
     * @var        int
     */
    protected $expertchi;

    /**
     * The value for the datecheckedchi field.
     * @var        string
     */
    protected $datecheckedchi;

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
        $this->termenglish = '';
        $this->entered = 0;
        $this->enteredrus = 0;
        $this->modifiedrus = 0;
        $this->expertrus = 0;
        $this->enteredcyr = 0;
        $this->modifiedcyr = 0;
        $this->expertcyr = 0;
    }

    /**
     * Initializes internal state of BaseGlossary object.
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
     * Get the [termenglish] column value.
     *
     * @return string
     */
    public function getTermenglish()
    {

        return $this->termenglish;
    }

    /**
     * Get the [termenglishscnd] column value.
     *
     * @return string
     */
    public function getTermenglishscnd()
    {

        return $this->termenglishscnd;
    }

    /**
     * Get the [termengishthird] column value.
     *
     * @return string
     */
    public function getTermengishthird()
    {

        return $this->termengishthird;
    }

    /**
     * Get the [abbreviation] column value.
     *
     * @return string
     */
    public function getAbbreviation()
    {

        return $this->abbreviation;
    }

    /**
     * Get the [termfrench] column value.
     *
     * @return string
     */
    public function getTermfrench()
    {

        return $this->termfrench;
    }

    /**
     * Get the [termspanish] column value.
     *
     * @return string
     */
    public function getTermspanish()
    {

        return $this->termspanish;
    }

    /**
     * Get the [termportuguese] column value.
     *
     * @return string
     */
    public function getTermportuguese()
    {

        return $this->termportuguese;
    }

    /**
     * Get the [termrussian] column value.
     *
     * @return string
     */
    public function getTermrussian()
    {

        return $this->termrussian;
    }

    /**
     * Get the [termcyrillic] column value.
     *
     * @return string
     */
    public function getTermcyrillic()
    {

        return $this->termcyrillic;
    }

    /**
     * Get the [termcyrillic_u] column value.
     *
     * @return string
     */
    public function getTermcyrillicU()
    {

        return $this->termcyrillic_u;
    }

    /**
     * Get the [termchinese] column value.
     *
     * @return string
     */
    public function getTermchinese()
    {

        return $this->termchinese;
    }

    /**
     * Get the [termchinese_u] column value.
     *
     * @return string
     */
    public function getTermchineseU()
    {

        return $this->termchinese_u;
    }

    /**
     * Get the [see1] column value.
     *
     * @return string
     */
    public function getSee1()
    {

        return $this->see1;
    }

    /**
     * Get the [see2] column value.
     *
     * @return string
     */
    public function getSee2()
    {

        return $this->see2;
    }

    /**
     * Get the [see3] column value.
     *
     * @return string
     */
    public function getSee3()
    {

        return $this->see3;
    }

    /**
     * Get the [picname] column value.
     *
     * @return string
     */
    public function getPicname()
    {

        return $this->picname;
    }

    /**
     * Get the [genetics] column value.
     *
     * @return int
     */
    public function getGenetics()
    {

        return $this->genetics;
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
     * Get the [english] column value.
     *
     * @return string
     */
    public function getEnglish()
    {

        return $this->english;
    }

    /**
     * Get the [grammar] column value.
     *
     * @return string
     */
    public function getGrammar()
    {

        return $this->grammar;
    }

    /**
     * Get the [gender] column value.
     *
     * @return string
     */
    public function getGender()
    {

        return $this->gender;
    }

    /**
     * Get the [frenchdef] column value.
     *
     * @return string
     */
    public function getFrenchdef()
    {

        return $this->frenchdef;
    }

    /**
     * Get the [enteredfr] column value.
     *
     * @return int
     */
    public function getEnteredfr()
    {

        return $this->enteredfr;
    }

    /**
     * Get the [optionally formatted] temporal [dateenteredfr] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateenteredfr($format = 'Y-m-d H:i:s')
    {
        if ($this->dateenteredfr === null) {
            return null;
        }

        if ($this->dateenteredfr === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dateenteredfr);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dateenteredfr, true), $x);
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
     * Get the [modifiedfr] column value.
     *
     * @return int
     */
    public function getModifiedfr()
    {

        return $this->modifiedfr;
    }

    /**
     * Get the [optionally formatted] temporal [datemodifiedfr] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatemodifiedfr($format = 'Y-m-d H:i:s')
    {
        if ($this->datemodifiedfr === null) {
            return null;
        }

        if ($this->datemodifiedfr === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datemodifiedfr);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datemodifiedfr, true), $x);
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
     * Get the [expertfr] column value.
     *
     * @return int
     */
    public function getExpertfr()
    {

        return $this->expertfr;
    }

    /**
     * Get the [optionally formatted] temporal [datecheckedfr] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatecheckedfr($format = 'Y-m-d H:i:s')
    {
        if ($this->datecheckedfr === null) {
            return null;
        }

        if ($this->datecheckedfr === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datecheckedfr);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datecheckedfr, true), $x);
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
     * Get the [spanishdef] column value.
     *
     * @return string
     */
    public function getSpanishdef()
    {

        return $this->spanishdef;
    }

    /**
     * Get the [enteredsp] column value.
     *
     * @return int
     */
    public function getEnteredsp()
    {

        return $this->enteredsp;
    }

    /**
     * Get the [optionally formatted] temporal [dateenteredsp] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateenteredsp($format = 'Y-m-d H:i:s')
    {
        if ($this->dateenteredsp === null) {
            return null;
        }

        if ($this->dateenteredsp === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dateenteredsp);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dateenteredsp, true), $x);
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
     * Get the [modifiedsp] column value.
     *
     * @return int
     */
    public function getModifiedsp()
    {

        return $this->modifiedsp;
    }

    /**
     * Get the [optionally formatted] temporal [datemodifiedsp] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatemodifiedsp($format = 'Y-m-d H:i:s')
    {
        if ($this->datemodifiedsp === null) {
            return null;
        }

        if ($this->datemodifiedsp === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datemodifiedsp);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datemodifiedsp, true), $x);
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
     * Get the [expertsp] column value.
     *
     * @return int
     */
    public function getExpertsp()
    {

        return $this->expertsp;
    }

    /**
     * Get the [datecheckedsp] column value.
     *
     * @return string
     */
    public function getDatecheckedsp()
    {

        return $this->datecheckedsp;
    }

    /**
     * Get the [portuguesedef] column value.
     *
     * @return string
     */
    public function getPortuguesedef()
    {

        return $this->portuguesedef;
    }

    /**
     * Get the [enteredpr] column value.
     *
     * @return int
     */
    public function getEnteredpr()
    {

        return $this->enteredpr;
    }

    /**
     * Get the [optionally formatted] temporal [dateenteredpr] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateenteredpr($format = 'Y-m-d H:i:s')
    {
        if ($this->dateenteredpr === null) {
            return null;
        }

        if ($this->dateenteredpr === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dateenteredpr);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dateenteredpr, true), $x);
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
     * Get the [modifiedpr] column value.
     *
     * @return int
     */
    public function getModifiedpr()
    {

        return $this->modifiedpr;
    }

    /**
     * Get the [optionally formatted] temporal [datemodifiedpr] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatemodifiedpr($format = 'Y-m-d H:i:s')
    {
        if ($this->datemodifiedpr === null) {
            return null;
        }

        if ($this->datemodifiedpr === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datemodifiedpr);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datemodifiedpr, true), $x);
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
     * Get the [expertpr] column value.
     *
     * @return int
     */
    public function getExpertpr()
    {

        return $this->expertpr;
    }

    /**
     * Get the [optionally formatted] temporal [datecheckedpr] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatecheckedpr($format = 'Y-m-d H:i:s')
    {
        if ($this->datecheckedpr === null) {
            return null;
        }

        if ($this->datecheckedpr === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datecheckedpr);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datecheckedpr, true), $x);
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
     * Get the [russiandef] column value.
     *
     * @return string
     */
    public function getRussiandef()
    {

        return $this->russiandef;
    }

    /**
     * Get the [enteredrus] column value.
     *
     * @return int
     */
    public function getEnteredrus()
    {

        return $this->enteredrus;
    }

    /**
     * Get the [dateenteredrus] column value.
     *
     * @return string
     */
    public function getDateenteredrus()
    {

        return $this->dateenteredrus;
    }

    /**
     * Get the [modifiedrus] column value.
     *
     * @return int
     */
    public function getModifiedrus()
    {

        return $this->modifiedrus;
    }

    /**
     * Get the [optionally formatted] temporal [datemodifiedrus] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatemodifiedrus($format = 'Y-m-d H:i:s')
    {
        if ($this->datemodifiedrus === null) {
            return null;
        }

        if ($this->datemodifiedrus === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datemodifiedrus);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datemodifiedrus, true), $x);
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
     * Get the [expertrus] column value.
     *
     * @return int
     */
    public function getExpertrus()
    {

        return $this->expertrus;
    }

    /**
     * Get the [optionally formatted] temporal [datecheckedrus] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatecheckedrus($format = 'Y-m-d H:i:s')
    {
        if ($this->datecheckedrus === null) {
            return null;
        }

        if ($this->datecheckedrus === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datecheckedrus);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datecheckedrus, true), $x);
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
     * Get the [cyrillicdef] column value.
     *
     * @return string
     */
    public function getCyrillicdef()
    {

        return $this->cyrillicdef;
    }

    /**
     * Get the [enteredcyr] column value.
     *
     * @return int
     */
    public function getEnteredcyr()
    {

        return $this->enteredcyr;
    }

    /**
     * Get the [optionally formatted] temporal [dateenteredcyr] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateenteredcyr($format = 'Y-m-d H:i:s')
    {
        if ($this->dateenteredcyr === null) {
            return null;
        }

        if ($this->dateenteredcyr === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dateenteredcyr);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dateenteredcyr, true), $x);
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
     * Get the [modifiedcyr] column value.
     *
     * @return int
     */
    public function getModifiedcyr()
    {

        return $this->modifiedcyr;
    }

    /**
     * Get the [optionally formatted] temporal [datemodifiedcyr] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatemodifiedcyr($format = 'Y-m-d H:i:s')
    {
        if ($this->datemodifiedcyr === null) {
            return null;
        }

        if ($this->datemodifiedcyr === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datemodifiedcyr);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datemodifiedcyr, true), $x);
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
     * Get the [expertcyr] column value.
     *
     * @return int
     */
    public function getExpertcyr()
    {

        return $this->expertcyr;
    }

    /**
     * Get the [optionally formatted] temporal [datecheckedcyr] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatecheckedcyr($format = 'Y-m-d H:i:s')
    {
        if ($this->datecheckedcyr === null) {
            return null;
        }

        if ($this->datecheckedcyr === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datecheckedcyr);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datecheckedcyr, true), $x);
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
     * Get the [chinesedef] column value.
     *
     * @return string
     */
    public function getChinesedef()
    {

        return $this->chinesedef;
    }

    /**
     * Get the [enteredchi] column value.
     *
     * @return int
     */
    public function getEnteredchi()
    {

        return $this->enteredchi;
    }

    /**
     * Get the [optionally formatted] temporal [dateenteredchi] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateenteredchi($format = 'Y-m-d H:i:s')
    {
        if ($this->dateenteredchi === null) {
            return null;
        }

        if ($this->dateenteredchi === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dateenteredchi);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dateenteredchi, true), $x);
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
     * Get the [modifiedchi] column value.
     *
     * @return int
     */
    public function getModifiedchi()
    {

        return $this->modifiedchi;
    }

    /**
     * Get the [optionally formatted] temporal [datemodifiedchi] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatemodifiedchi($format = 'Y-m-d H:i:s')
    {
        if ($this->datemodifiedchi === null) {
            return null;
        }

        if ($this->datemodifiedchi === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datemodifiedchi);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datemodifiedchi, true), $x);
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
     * Get the [expertchi] column value.
     *
     * @return int
     */
    public function getExpertchi()
    {

        return $this->expertchi;
    }

    /**
     * Get the [optionally formatted] temporal [datecheckedchi] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatecheckedchi($format = 'Y-m-d H:i:s')
    {
        if ($this->datecheckedchi === null) {
            return null;
        }

        if ($this->datecheckedchi === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datecheckedchi);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datecheckedchi, true), $x);
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
     * @return Glossary The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = GlossaryPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [termenglish] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setTermenglish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->termenglish !== $v) {
            $this->termenglish = $v;
            $this->modifiedColumns[] = GlossaryPeer::TERMENGLISH;
        }


        return $this;
    } // setTermenglish()

    /**
     * Set the value of [termenglishscnd] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setTermenglishscnd($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->termenglishscnd !== $v) {
            $this->termenglishscnd = $v;
            $this->modifiedColumns[] = GlossaryPeer::TERMENGLISHSCND;
        }


        return $this;
    } // setTermenglishscnd()

    /**
     * Set the value of [termengishthird] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setTermengishthird($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->termengishthird !== $v) {
            $this->termengishthird = $v;
            $this->modifiedColumns[] = GlossaryPeer::TERMENGISHTHIRD;
        }


        return $this;
    } // setTermengishthird()

    /**
     * Set the value of [abbreviation] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setAbbreviation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abbreviation !== $v) {
            $this->abbreviation = $v;
            $this->modifiedColumns[] = GlossaryPeer::ABBREVIATION;
        }


        return $this;
    } // setAbbreviation()

    /**
     * Set the value of [termfrench] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setTermfrench($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->termfrench !== $v) {
            $this->termfrench = $v;
            $this->modifiedColumns[] = GlossaryPeer::TERMFRENCH;
        }


        return $this;
    } // setTermfrench()

    /**
     * Set the value of [termspanish] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setTermspanish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->termspanish !== $v) {
            $this->termspanish = $v;
            $this->modifiedColumns[] = GlossaryPeer::TERMSPANISH;
        }


        return $this;
    } // setTermspanish()

    /**
     * Set the value of [termportuguese] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setTermportuguese($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->termportuguese !== $v) {
            $this->termportuguese = $v;
            $this->modifiedColumns[] = GlossaryPeer::TERMPORTUGUESE;
        }


        return $this;
    } // setTermportuguese()

    /**
     * Set the value of [termrussian] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setTermrussian($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->termrussian !== $v) {
            $this->termrussian = $v;
            $this->modifiedColumns[] = GlossaryPeer::TERMRUSSIAN;
        }


        return $this;
    } // setTermrussian()

    /**
     * Set the value of [termcyrillic] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setTermcyrillic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->termcyrillic !== $v) {
            $this->termcyrillic = $v;
            $this->modifiedColumns[] = GlossaryPeer::TERMCYRILLIC;
        }


        return $this;
    } // setTermcyrillic()

    /**
     * Set the value of [termcyrillic_u] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setTermcyrillicU($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->termcyrillic_u !== $v) {
            $this->termcyrillic_u = $v;
            $this->modifiedColumns[] = GlossaryPeer::TERMCYRILLIC_U;
        }


        return $this;
    } // setTermcyrillicU()

    /**
     * Set the value of [termchinese] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setTermchinese($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->termchinese !== $v) {
            $this->termchinese = $v;
            $this->modifiedColumns[] = GlossaryPeer::TERMCHINESE;
        }


        return $this;
    } // setTermchinese()

    /**
     * Set the value of [termchinese_u] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setTermchineseU($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->termchinese_u !== $v) {
            $this->termchinese_u = $v;
            $this->modifiedColumns[] = GlossaryPeer::TERMCHINESE_U;
        }


        return $this;
    } // setTermchineseU()

    /**
     * Set the value of [see1] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setSee1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->see1 !== $v) {
            $this->see1 = $v;
            $this->modifiedColumns[] = GlossaryPeer::SEE1;
        }


        return $this;
    } // setSee1()

    /**
     * Set the value of [see2] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setSee2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->see2 !== $v) {
            $this->see2 = $v;
            $this->modifiedColumns[] = GlossaryPeer::SEE2;
        }


        return $this;
    } // setSee2()

    /**
     * Set the value of [see3] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setSee3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->see3 !== $v) {
            $this->see3 = $v;
            $this->modifiedColumns[] = GlossaryPeer::SEE3;
        }


        return $this;
    } // setSee3()

    /**
     * Set the value of [picname] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setPicname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->picname !== $v) {
            $this->picname = $v;
            $this->modifiedColumns[] = GlossaryPeer::PICNAME;
        }


        return $this;
    } // setPicname()

    /**
     * Set the value of [genetics] column.
     *
     * @param  int $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setGenetics($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->genetics !== $v) {
            $this->genetics = $v;
            $this->modifiedColumns[] = GlossaryPeer::GENETICS;
        }


        return $this;
    } // setGenetics()

    /**
     * Set the value of [comments] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setComments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comments !== $v) {
            $this->comments = $v;
            $this->modifiedColumns[] = GlossaryPeer::COMMENTS;
        }


        return $this;
    } // setComments()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = GlossaryPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Glossary The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = GlossaryPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = GlossaryPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Glossary The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = GlossaryPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = GlossaryPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Glossary The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = GlossaryPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [english] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setEnglish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->english !== $v) {
            $this->english = $v;
            $this->modifiedColumns[] = GlossaryPeer::ENGLISH;
        }


        return $this;
    } // setEnglish()

    /**
     * Set the value of [grammar] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setGrammar($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->grammar !== $v) {
            $this->grammar = $v;
            $this->modifiedColumns[] = GlossaryPeer::GRAMMAR;
        }


        return $this;
    } // setGrammar()

    /**
     * Set the value of [gender] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setGender($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gender !== $v) {
            $this->gender = $v;
            $this->modifiedColumns[] = GlossaryPeer::GENDER;
        }


        return $this;
    } // setGender()

    /**
     * Set the value of [frenchdef] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setFrenchdef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->frenchdef !== $v) {
            $this->frenchdef = $v;
            $this->modifiedColumns[] = GlossaryPeer::FRENCHDEF;
        }


        return $this;
    } // setFrenchdef()

    /**
     * Set the value of [enteredfr] column.
     *
     * @param  int $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setEnteredfr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->enteredfr !== $v) {
            $this->enteredfr = $v;
            $this->modifiedColumns[] = GlossaryPeer::ENTEREDFR;
        }


        return $this;
    } // setEnteredfr()

    /**
     * Sets the value of [dateenteredfr] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Glossary The current object (for fluent API support)
     */
    public function setDateenteredfr($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateenteredfr !== null || $dt !== null) {
            $currentDateAsString = ($this->dateenteredfr !== null && $tmpDt = new DateTime($this->dateenteredfr)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateenteredfr = $newDateAsString;
                $this->modifiedColumns[] = GlossaryPeer::DATEENTEREDFR;
            }
        } // if either are not null


        return $this;
    } // setDateenteredfr()

    /**
     * Set the value of [modifiedfr] column.
     *
     * @param  int $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setModifiedfr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modifiedfr !== $v) {
            $this->modifiedfr = $v;
            $this->modifiedColumns[] = GlossaryPeer::MODIFIEDFR;
        }


        return $this;
    } // setModifiedfr()

    /**
     * Sets the value of [datemodifiedfr] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Glossary The current object (for fluent API support)
     */
    public function setDatemodifiedfr($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodifiedfr !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodifiedfr !== null && $tmpDt = new DateTime($this->datemodifiedfr)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodifiedfr = $newDateAsString;
                $this->modifiedColumns[] = GlossaryPeer::DATEMODIFIEDFR;
            }
        } // if either are not null


        return $this;
    } // setDatemodifiedfr()

    /**
     * Set the value of [expertfr] column.
     *
     * @param  int $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setExpertfr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expertfr !== $v) {
            $this->expertfr = $v;
            $this->modifiedColumns[] = GlossaryPeer::EXPERTFR;
        }


        return $this;
    } // setExpertfr()

    /**
     * Sets the value of [datecheckedfr] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Glossary The current object (for fluent API support)
     */
    public function setDatecheckedfr($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datecheckedfr !== null || $dt !== null) {
            $currentDateAsString = ($this->datecheckedfr !== null && $tmpDt = new DateTime($this->datecheckedfr)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datecheckedfr = $newDateAsString;
                $this->modifiedColumns[] = GlossaryPeer::DATECHECKEDFR;
            }
        } // if either are not null


        return $this;
    } // setDatecheckedfr()

    /**
     * Set the value of [spanishdef] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setSpanishdef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->spanishdef !== $v) {
            $this->spanishdef = $v;
            $this->modifiedColumns[] = GlossaryPeer::SPANISHDEF;
        }


        return $this;
    } // setSpanishdef()

    /**
     * Set the value of [enteredsp] column.
     *
     * @param  int $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setEnteredsp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->enteredsp !== $v) {
            $this->enteredsp = $v;
            $this->modifiedColumns[] = GlossaryPeer::ENTEREDSP;
        }


        return $this;
    } // setEnteredsp()

    /**
     * Sets the value of [dateenteredsp] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Glossary The current object (for fluent API support)
     */
    public function setDateenteredsp($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateenteredsp !== null || $dt !== null) {
            $currentDateAsString = ($this->dateenteredsp !== null && $tmpDt = new DateTime($this->dateenteredsp)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateenteredsp = $newDateAsString;
                $this->modifiedColumns[] = GlossaryPeer::DATEENTEREDSP;
            }
        } // if either are not null


        return $this;
    } // setDateenteredsp()

    /**
     * Set the value of [modifiedsp] column.
     *
     * @param  int $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setModifiedsp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modifiedsp !== $v) {
            $this->modifiedsp = $v;
            $this->modifiedColumns[] = GlossaryPeer::MODIFIEDSP;
        }


        return $this;
    } // setModifiedsp()

    /**
     * Sets the value of [datemodifiedsp] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Glossary The current object (for fluent API support)
     */
    public function setDatemodifiedsp($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodifiedsp !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodifiedsp !== null && $tmpDt = new DateTime($this->datemodifiedsp)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodifiedsp = $newDateAsString;
                $this->modifiedColumns[] = GlossaryPeer::DATEMODIFIEDSP;
            }
        } // if either are not null


        return $this;
    } // setDatemodifiedsp()

    /**
     * Set the value of [expertsp] column.
     *
     * @param  int $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setExpertsp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expertsp !== $v) {
            $this->expertsp = $v;
            $this->modifiedColumns[] = GlossaryPeer::EXPERTSP;
        }


        return $this;
    } // setExpertsp()

    /**
     * Set the value of [datecheckedsp] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setDatecheckedsp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->datecheckedsp !== $v) {
            $this->datecheckedsp = $v;
            $this->modifiedColumns[] = GlossaryPeer::DATECHECKEDSP;
        }


        return $this;
    } // setDatecheckedsp()

    /**
     * Set the value of [portuguesedef] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setPortuguesedef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->portuguesedef !== $v) {
            $this->portuguesedef = $v;
            $this->modifiedColumns[] = GlossaryPeer::PORTUGUESEDEF;
        }


        return $this;
    } // setPortuguesedef()

    /**
     * Set the value of [enteredpr] column.
     *
     * @param  int $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setEnteredpr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->enteredpr !== $v) {
            $this->enteredpr = $v;
            $this->modifiedColumns[] = GlossaryPeer::ENTEREDPR;
        }


        return $this;
    } // setEnteredpr()

    /**
     * Sets the value of [dateenteredpr] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Glossary The current object (for fluent API support)
     */
    public function setDateenteredpr($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateenteredpr !== null || $dt !== null) {
            $currentDateAsString = ($this->dateenteredpr !== null && $tmpDt = new DateTime($this->dateenteredpr)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateenteredpr = $newDateAsString;
                $this->modifiedColumns[] = GlossaryPeer::DATEENTEREDPR;
            }
        } // if either are not null


        return $this;
    } // setDateenteredpr()

    /**
     * Set the value of [modifiedpr] column.
     *
     * @param  int $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setModifiedpr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modifiedpr !== $v) {
            $this->modifiedpr = $v;
            $this->modifiedColumns[] = GlossaryPeer::MODIFIEDPR;
        }


        return $this;
    } // setModifiedpr()

    /**
     * Sets the value of [datemodifiedpr] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Glossary The current object (for fluent API support)
     */
    public function setDatemodifiedpr($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodifiedpr !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodifiedpr !== null && $tmpDt = new DateTime($this->datemodifiedpr)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodifiedpr = $newDateAsString;
                $this->modifiedColumns[] = GlossaryPeer::DATEMODIFIEDPR;
            }
        } // if either are not null


        return $this;
    } // setDatemodifiedpr()

    /**
     * Set the value of [expertpr] column.
     *
     * @param  int $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setExpertpr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expertpr !== $v) {
            $this->expertpr = $v;
            $this->modifiedColumns[] = GlossaryPeer::EXPERTPR;
        }


        return $this;
    } // setExpertpr()

    /**
     * Sets the value of [datecheckedpr] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Glossary The current object (for fluent API support)
     */
    public function setDatecheckedpr($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datecheckedpr !== null || $dt !== null) {
            $currentDateAsString = ($this->datecheckedpr !== null && $tmpDt = new DateTime($this->datecheckedpr)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datecheckedpr = $newDateAsString;
                $this->modifiedColumns[] = GlossaryPeer::DATECHECKEDPR;
            }
        } // if either are not null


        return $this;
    } // setDatecheckedpr()

    /**
     * Set the value of [russiandef] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setRussiandef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->russiandef !== $v) {
            $this->russiandef = $v;
            $this->modifiedColumns[] = GlossaryPeer::RUSSIANDEF;
        }


        return $this;
    } // setRussiandef()

    /**
     * Set the value of [enteredrus] column.
     *
     * @param  int $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setEnteredrus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->enteredrus !== $v) {
            $this->enteredrus = $v;
            $this->modifiedColumns[] = GlossaryPeer::ENTEREDRUS;
        }


        return $this;
    } // setEnteredrus()

    /**
     * Set the value of [dateenteredrus] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setDateenteredrus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dateenteredrus !== $v) {
            $this->dateenteredrus = $v;
            $this->modifiedColumns[] = GlossaryPeer::DATEENTEREDRUS;
        }


        return $this;
    } // setDateenteredrus()

    /**
     * Set the value of [modifiedrus] column.
     *
     * @param  int $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setModifiedrus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modifiedrus !== $v) {
            $this->modifiedrus = $v;
            $this->modifiedColumns[] = GlossaryPeer::MODIFIEDRUS;
        }


        return $this;
    } // setModifiedrus()

    /**
     * Sets the value of [datemodifiedrus] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Glossary The current object (for fluent API support)
     */
    public function setDatemodifiedrus($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodifiedrus !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodifiedrus !== null && $tmpDt = new DateTime($this->datemodifiedrus)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodifiedrus = $newDateAsString;
                $this->modifiedColumns[] = GlossaryPeer::DATEMODIFIEDRUS;
            }
        } // if either are not null


        return $this;
    } // setDatemodifiedrus()

    /**
     * Set the value of [expertrus] column.
     *
     * @param  int $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setExpertrus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expertrus !== $v) {
            $this->expertrus = $v;
            $this->modifiedColumns[] = GlossaryPeer::EXPERTRUS;
        }


        return $this;
    } // setExpertrus()

    /**
     * Sets the value of [datecheckedrus] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Glossary The current object (for fluent API support)
     */
    public function setDatecheckedrus($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datecheckedrus !== null || $dt !== null) {
            $currentDateAsString = ($this->datecheckedrus !== null && $tmpDt = new DateTime($this->datecheckedrus)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datecheckedrus = $newDateAsString;
                $this->modifiedColumns[] = GlossaryPeer::DATECHECKEDRUS;
            }
        } // if either are not null


        return $this;
    } // setDatecheckedrus()

    /**
     * Set the value of [cyrillicdef] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setCyrillicdef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cyrillicdef !== $v) {
            $this->cyrillicdef = $v;
            $this->modifiedColumns[] = GlossaryPeer::CYRILLICDEF;
        }


        return $this;
    } // setCyrillicdef()

    /**
     * Set the value of [enteredcyr] column.
     *
     * @param  int $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setEnteredcyr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->enteredcyr !== $v) {
            $this->enteredcyr = $v;
            $this->modifiedColumns[] = GlossaryPeer::ENTEREDCYR;
        }


        return $this;
    } // setEnteredcyr()

    /**
     * Sets the value of [dateenteredcyr] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Glossary The current object (for fluent API support)
     */
    public function setDateenteredcyr($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateenteredcyr !== null || $dt !== null) {
            $currentDateAsString = ($this->dateenteredcyr !== null && $tmpDt = new DateTime($this->dateenteredcyr)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateenteredcyr = $newDateAsString;
                $this->modifiedColumns[] = GlossaryPeer::DATEENTEREDCYR;
            }
        } // if either are not null


        return $this;
    } // setDateenteredcyr()

    /**
     * Set the value of [modifiedcyr] column.
     *
     * @param  int $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setModifiedcyr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modifiedcyr !== $v) {
            $this->modifiedcyr = $v;
            $this->modifiedColumns[] = GlossaryPeer::MODIFIEDCYR;
        }


        return $this;
    } // setModifiedcyr()

    /**
     * Sets the value of [datemodifiedcyr] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Glossary The current object (for fluent API support)
     */
    public function setDatemodifiedcyr($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodifiedcyr !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodifiedcyr !== null && $tmpDt = new DateTime($this->datemodifiedcyr)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodifiedcyr = $newDateAsString;
                $this->modifiedColumns[] = GlossaryPeer::DATEMODIFIEDCYR;
            }
        } // if either are not null


        return $this;
    } // setDatemodifiedcyr()

    /**
     * Set the value of [expertcyr] column.
     *
     * @param  int $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setExpertcyr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expertcyr !== $v) {
            $this->expertcyr = $v;
            $this->modifiedColumns[] = GlossaryPeer::EXPERTCYR;
        }


        return $this;
    } // setExpertcyr()

    /**
     * Sets the value of [datecheckedcyr] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Glossary The current object (for fluent API support)
     */
    public function setDatecheckedcyr($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datecheckedcyr !== null || $dt !== null) {
            $currentDateAsString = ($this->datecheckedcyr !== null && $tmpDt = new DateTime($this->datecheckedcyr)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datecheckedcyr = $newDateAsString;
                $this->modifiedColumns[] = GlossaryPeer::DATECHECKEDCYR;
            }
        } // if either are not null


        return $this;
    } // setDatecheckedcyr()

    /**
     * Set the value of [chinesedef] column.
     *
     * @param  string $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setChinesedef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chinesedef !== $v) {
            $this->chinesedef = $v;
            $this->modifiedColumns[] = GlossaryPeer::CHINESEDEF;
        }


        return $this;
    } // setChinesedef()

    /**
     * Set the value of [enteredchi] column.
     *
     * @param  int $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setEnteredchi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->enteredchi !== $v) {
            $this->enteredchi = $v;
            $this->modifiedColumns[] = GlossaryPeer::ENTEREDCHI;
        }


        return $this;
    } // setEnteredchi()

    /**
     * Sets the value of [dateenteredchi] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Glossary The current object (for fluent API support)
     */
    public function setDateenteredchi($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateenteredchi !== null || $dt !== null) {
            $currentDateAsString = ($this->dateenteredchi !== null && $tmpDt = new DateTime($this->dateenteredchi)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateenteredchi = $newDateAsString;
                $this->modifiedColumns[] = GlossaryPeer::DATEENTEREDCHI;
            }
        } // if either are not null


        return $this;
    } // setDateenteredchi()

    /**
     * Set the value of [modifiedchi] column.
     *
     * @param  int $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setModifiedchi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modifiedchi !== $v) {
            $this->modifiedchi = $v;
            $this->modifiedColumns[] = GlossaryPeer::MODIFIEDCHI;
        }


        return $this;
    } // setModifiedchi()

    /**
     * Sets the value of [datemodifiedchi] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Glossary The current object (for fluent API support)
     */
    public function setDatemodifiedchi($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodifiedchi !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodifiedchi !== null && $tmpDt = new DateTime($this->datemodifiedchi)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodifiedchi = $newDateAsString;
                $this->modifiedColumns[] = GlossaryPeer::DATEMODIFIEDCHI;
            }
        } // if either are not null


        return $this;
    } // setDatemodifiedchi()

    /**
     * Set the value of [expertchi] column.
     *
     * @param  int $v new value
     * @return Glossary The current object (for fluent API support)
     */
    public function setExpertchi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expertchi !== $v) {
            $this->expertchi = $v;
            $this->modifiedColumns[] = GlossaryPeer::EXPERTCHI;
        }


        return $this;
    } // setExpertchi()

    /**
     * Sets the value of [datecheckedchi] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Glossary The current object (for fluent API support)
     */
    public function setDatecheckedchi($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datecheckedchi !== null || $dt !== null) {
            $currentDateAsString = ($this->datecheckedchi !== null && $tmpDt = new DateTime($this->datecheckedchi)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datecheckedchi = $newDateAsString;
                $this->modifiedColumns[] = GlossaryPeer::DATECHECKEDCHI;
            }
        } // if either are not null


        return $this;
    } // setDatecheckedchi()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Glossary The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = GlossaryPeer::TS;
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
            if ($this->termenglish !== '') {
                return false;
            }

            if ($this->entered !== 0) {
                return false;
            }

            if ($this->enteredrus !== 0) {
                return false;
            }

            if ($this->modifiedrus !== 0) {
                return false;
            }

            if ($this->expertrus !== 0) {
                return false;
            }

            if ($this->enteredcyr !== 0) {
                return false;
            }

            if ($this->modifiedcyr !== 0) {
                return false;
            }

            if ($this->expertcyr !== 0) {
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
            $this->termenglish = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->termenglishscnd = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->termengishthird = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->abbreviation = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->termfrench = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->termspanish = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->termportuguese = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->termrussian = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->termcyrillic = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->termcyrillic_u = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->termchinese = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->termchinese_u = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->see1 = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->see2 = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->see3 = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->picname = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->genetics = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->comments = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->entered = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->dateentered = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->modified = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->datemodified = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->expert = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->datechecked = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->english = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->grammar = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->gender = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->frenchdef = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->enteredfr = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->dateenteredfr = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->modifiedfr = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->datemodifiedfr = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->expertfr = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->datecheckedfr = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->spanishdef = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->enteredsp = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->dateenteredsp = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->modifiedsp = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->datemodifiedsp = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->expertsp = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->datecheckedsp = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->portuguesedef = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->enteredpr = ($row[$startcol + 43] !== null) ? (int) $row[$startcol + 43] : null;
            $this->dateenteredpr = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->modifiedpr = ($row[$startcol + 45] !== null) ? (int) $row[$startcol + 45] : null;
            $this->datemodifiedpr = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->expertpr = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->datecheckedpr = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->russiandef = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->enteredrus = ($row[$startcol + 50] !== null) ? (int) $row[$startcol + 50] : null;
            $this->dateenteredrus = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->modifiedrus = ($row[$startcol + 52] !== null) ? (int) $row[$startcol + 52] : null;
            $this->datemodifiedrus = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->expertrus = ($row[$startcol + 54] !== null) ? (int) $row[$startcol + 54] : null;
            $this->datecheckedrus = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->cyrillicdef = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->enteredcyr = ($row[$startcol + 57] !== null) ? (int) $row[$startcol + 57] : null;
            $this->dateenteredcyr = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->modifiedcyr = ($row[$startcol + 59] !== null) ? (int) $row[$startcol + 59] : null;
            $this->datemodifiedcyr = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->expertcyr = ($row[$startcol + 61] !== null) ? (int) $row[$startcol + 61] : null;
            $this->datecheckedcyr = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->chinesedef = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->enteredchi = ($row[$startcol + 64] !== null) ? (int) $row[$startcol + 64] : null;
            $this->dateenteredchi = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->modifiedchi = ($row[$startcol + 66] !== null) ? (int) $row[$startcol + 66] : null;
            $this->datemodifiedchi = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->expertchi = ($row[$startcol + 68] !== null) ? (int) $row[$startcol + 68] : null;
            $this->datecheckedchi = ($row[$startcol + 69] !== null) ? (string) $row[$startcol + 69] : null;
            $this->ts = ($row[$startcol + 70] !== null) ? (string) $row[$startcol + 70] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 71; // 71 = GlossaryPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Glossary object", $e);
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
            $con = Propel::getConnection(GlossaryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GlossaryPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GlossaryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GlossaryQuery::create()
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
            $con = Propel::getConnection(GlossaryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GlossaryPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = GlossaryPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . GlossaryPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(GlossaryPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(GlossaryPeer::TERMENGLISH)) {
            $modifiedColumns[':p' . $index++]  = '`TermEnglish`';
        }
        if ($this->isColumnModified(GlossaryPeer::TERMENGLISHSCND)) {
            $modifiedColumns[':p' . $index++]  = '`TermEnglishScnd`';
        }
        if ($this->isColumnModified(GlossaryPeer::TERMENGISHTHIRD)) {
            $modifiedColumns[':p' . $index++]  = '`TermEngishThird`';
        }
        if ($this->isColumnModified(GlossaryPeer::ABBREVIATION)) {
            $modifiedColumns[':p' . $index++]  = '`Abbreviation`';
        }
        if ($this->isColumnModified(GlossaryPeer::TERMFRENCH)) {
            $modifiedColumns[':p' . $index++]  = '`TermFrench`';
        }
        if ($this->isColumnModified(GlossaryPeer::TERMSPANISH)) {
            $modifiedColumns[':p' . $index++]  = '`TermSpanish`';
        }
        if ($this->isColumnModified(GlossaryPeer::TERMPORTUGUESE)) {
            $modifiedColumns[':p' . $index++]  = '`TermPortuguese`';
        }
        if ($this->isColumnModified(GlossaryPeer::TERMRUSSIAN)) {
            $modifiedColumns[':p' . $index++]  = '`TermRussian`';
        }
        if ($this->isColumnModified(GlossaryPeer::TERMCYRILLIC)) {
            $modifiedColumns[':p' . $index++]  = '`TermCyrillic`';
        }
        if ($this->isColumnModified(GlossaryPeer::TERMCYRILLIC_U)) {
            $modifiedColumns[':p' . $index++]  = '`TermCyrillic_u`';
        }
        if ($this->isColumnModified(GlossaryPeer::TERMCHINESE)) {
            $modifiedColumns[':p' . $index++]  = '`TermChinese`';
        }
        if ($this->isColumnModified(GlossaryPeer::TERMCHINESE_U)) {
            $modifiedColumns[':p' . $index++]  = '`TermChinese_u`';
        }
        if ($this->isColumnModified(GlossaryPeer::SEE1)) {
            $modifiedColumns[':p' . $index++]  = '`See1`';
        }
        if ($this->isColumnModified(GlossaryPeer::SEE2)) {
            $modifiedColumns[':p' . $index++]  = '`See2`';
        }
        if ($this->isColumnModified(GlossaryPeer::SEE3)) {
            $modifiedColumns[':p' . $index++]  = '`See3`';
        }
        if ($this->isColumnModified(GlossaryPeer::PICNAME)) {
            $modifiedColumns[':p' . $index++]  = '`Picname`';
        }
        if ($this->isColumnModified(GlossaryPeer::GENETICS)) {
            $modifiedColumns[':p' . $index++]  = '`Genetics`';
        }
        if ($this->isColumnModified(GlossaryPeer::COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`Comments`';
        }
        if ($this->isColumnModified(GlossaryPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(GlossaryPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Dateentered`';
        }
        if ($this->isColumnModified(GlossaryPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(GlossaryPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Datemodified`';
        }
        if ($this->isColumnModified(GlossaryPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(GlossaryPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`Datechecked`';
        }
        if ($this->isColumnModified(GlossaryPeer::ENGLISH)) {
            $modifiedColumns[':p' . $index++]  = '`English`';
        }
        if ($this->isColumnModified(GlossaryPeer::GRAMMAR)) {
            $modifiedColumns[':p' . $index++]  = '`Grammar`';
        }
        if ($this->isColumnModified(GlossaryPeer::GENDER)) {
            $modifiedColumns[':p' . $index++]  = '`Gender`';
        }
        if ($this->isColumnModified(GlossaryPeer::FRENCHDEF)) {
            $modifiedColumns[':p' . $index++]  = '`FrenchDef`';
        }
        if ($this->isColumnModified(GlossaryPeer::ENTEREDFR)) {
            $modifiedColumns[':p' . $index++]  = '`EnteredFR`';
        }
        if ($this->isColumnModified(GlossaryPeer::DATEENTEREDFR)) {
            $modifiedColumns[':p' . $index++]  = '`DateEnteredFR`';
        }
        if ($this->isColumnModified(GlossaryPeer::MODIFIEDFR)) {
            $modifiedColumns[':p' . $index++]  = '`ModifiedFR`';
        }
        if ($this->isColumnModified(GlossaryPeer::DATEMODIFIEDFR)) {
            $modifiedColumns[':p' . $index++]  = '`DateModifiedFR`';
        }
        if ($this->isColumnModified(GlossaryPeer::EXPERTFR)) {
            $modifiedColumns[':p' . $index++]  = '`ExpertFR`';
        }
        if ($this->isColumnModified(GlossaryPeer::DATECHECKEDFR)) {
            $modifiedColumns[':p' . $index++]  = '`DateCheckedFR`';
        }
        if ($this->isColumnModified(GlossaryPeer::SPANISHDEF)) {
            $modifiedColumns[':p' . $index++]  = '`SpanishDef`';
        }
        if ($this->isColumnModified(GlossaryPeer::ENTEREDSP)) {
            $modifiedColumns[':p' . $index++]  = '`EnteredSP`';
        }
        if ($this->isColumnModified(GlossaryPeer::DATEENTEREDSP)) {
            $modifiedColumns[':p' . $index++]  = '`DateEnteredSP`';
        }
        if ($this->isColumnModified(GlossaryPeer::MODIFIEDSP)) {
            $modifiedColumns[':p' . $index++]  = '`ModifiedSP`';
        }
        if ($this->isColumnModified(GlossaryPeer::DATEMODIFIEDSP)) {
            $modifiedColumns[':p' . $index++]  = '`DateModifiedSP`';
        }
        if ($this->isColumnModified(GlossaryPeer::EXPERTSP)) {
            $modifiedColumns[':p' . $index++]  = '`ExpertSP`';
        }
        if ($this->isColumnModified(GlossaryPeer::DATECHECKEDSP)) {
            $modifiedColumns[':p' . $index++]  = '`DateCheckedSP`';
        }
        if ($this->isColumnModified(GlossaryPeer::PORTUGUESEDEF)) {
            $modifiedColumns[':p' . $index++]  = '`PortugueseDef`';
        }
        if ($this->isColumnModified(GlossaryPeer::ENTEREDPR)) {
            $modifiedColumns[':p' . $index++]  = '`EnteredPR`';
        }
        if ($this->isColumnModified(GlossaryPeer::DATEENTEREDPR)) {
            $modifiedColumns[':p' . $index++]  = '`DateEnteredPR`';
        }
        if ($this->isColumnModified(GlossaryPeer::MODIFIEDPR)) {
            $modifiedColumns[':p' . $index++]  = '`ModifiedPR`';
        }
        if ($this->isColumnModified(GlossaryPeer::DATEMODIFIEDPR)) {
            $modifiedColumns[':p' . $index++]  = '`DateModifiedPR`';
        }
        if ($this->isColumnModified(GlossaryPeer::EXPERTPR)) {
            $modifiedColumns[':p' . $index++]  = '`ExpertPR`';
        }
        if ($this->isColumnModified(GlossaryPeer::DATECHECKEDPR)) {
            $modifiedColumns[':p' . $index++]  = '`DateCheckedPR`';
        }
        if ($this->isColumnModified(GlossaryPeer::RUSSIANDEF)) {
            $modifiedColumns[':p' . $index++]  = '`RussianDef`';
        }
        if ($this->isColumnModified(GlossaryPeer::ENTEREDRUS)) {
            $modifiedColumns[':p' . $index++]  = '`EnteredRus`';
        }
        if ($this->isColumnModified(GlossaryPeer::DATEENTEREDRUS)) {
            $modifiedColumns[':p' . $index++]  = '`DateEnteredRus`';
        }
        if ($this->isColumnModified(GlossaryPeer::MODIFIEDRUS)) {
            $modifiedColumns[':p' . $index++]  = '`ModifiedRus`';
        }
        if ($this->isColumnModified(GlossaryPeer::DATEMODIFIEDRUS)) {
            $modifiedColumns[':p' . $index++]  = '`DateModifiedRus`';
        }
        if ($this->isColumnModified(GlossaryPeer::EXPERTRUS)) {
            $modifiedColumns[':p' . $index++]  = '`ExpertRus`';
        }
        if ($this->isColumnModified(GlossaryPeer::DATECHECKEDRUS)) {
            $modifiedColumns[':p' . $index++]  = '`DateCheckedRus`';
        }
        if ($this->isColumnModified(GlossaryPeer::CYRILLICDEF)) {
            $modifiedColumns[':p' . $index++]  = '`CyrillicDef`';
        }
        if ($this->isColumnModified(GlossaryPeer::ENTEREDCYR)) {
            $modifiedColumns[':p' . $index++]  = '`EnteredCyr`';
        }
        if ($this->isColumnModified(GlossaryPeer::DATEENTEREDCYR)) {
            $modifiedColumns[':p' . $index++]  = '`DateEnteredCyr`';
        }
        if ($this->isColumnModified(GlossaryPeer::MODIFIEDCYR)) {
            $modifiedColumns[':p' . $index++]  = '`ModifiedCyr`';
        }
        if ($this->isColumnModified(GlossaryPeer::DATEMODIFIEDCYR)) {
            $modifiedColumns[':p' . $index++]  = '`DateModifiedCyr`';
        }
        if ($this->isColumnModified(GlossaryPeer::EXPERTCYR)) {
            $modifiedColumns[':p' . $index++]  = '`ExpertCyr`';
        }
        if ($this->isColumnModified(GlossaryPeer::DATECHECKEDCYR)) {
            $modifiedColumns[':p' . $index++]  = '`DateCheckedCyr`';
        }
        if ($this->isColumnModified(GlossaryPeer::CHINESEDEF)) {
            $modifiedColumns[':p' . $index++]  = '`ChineseDef`';
        }
        if ($this->isColumnModified(GlossaryPeer::ENTEREDCHI)) {
            $modifiedColumns[':p' . $index++]  = '`EnteredChi`';
        }
        if ($this->isColumnModified(GlossaryPeer::DATEENTEREDCHI)) {
            $modifiedColumns[':p' . $index++]  = '`DateEnteredChi`';
        }
        if ($this->isColumnModified(GlossaryPeer::MODIFIEDCHI)) {
            $modifiedColumns[':p' . $index++]  = '`ModifiedChi`';
        }
        if ($this->isColumnModified(GlossaryPeer::DATEMODIFIEDCHI)) {
            $modifiedColumns[':p' . $index++]  = '`DateModifiedChi`';
        }
        if ($this->isColumnModified(GlossaryPeer::EXPERTCHI)) {
            $modifiedColumns[':p' . $index++]  = '`ExpertChi`';
        }
        if ($this->isColumnModified(GlossaryPeer::DATECHECKEDCHI)) {
            $modifiedColumns[':p' . $index++]  = '`DateCheckedChi`';
        }
        if ($this->isColumnModified(GlossaryPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `glossary` (%s) VALUES (%s)',
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
                    case '`TermEnglish`':
                        $stmt->bindValue($identifier, $this->termenglish, PDO::PARAM_STR);
                        break;
                    case '`TermEnglishScnd`':
                        $stmt->bindValue($identifier, $this->termenglishscnd, PDO::PARAM_STR);
                        break;
                    case '`TermEngishThird`':
                        $stmt->bindValue($identifier, $this->termengishthird, PDO::PARAM_STR);
                        break;
                    case '`Abbreviation`':
                        $stmt->bindValue($identifier, $this->abbreviation, PDO::PARAM_STR);
                        break;
                    case '`TermFrench`':
                        $stmt->bindValue($identifier, $this->termfrench, PDO::PARAM_STR);
                        break;
                    case '`TermSpanish`':
                        $stmt->bindValue($identifier, $this->termspanish, PDO::PARAM_STR);
                        break;
                    case '`TermPortuguese`':
                        $stmt->bindValue($identifier, $this->termportuguese, PDO::PARAM_STR);
                        break;
                    case '`TermRussian`':
                        $stmt->bindValue($identifier, $this->termrussian, PDO::PARAM_STR);
                        break;
                    case '`TermCyrillic`':
                        $stmt->bindValue($identifier, $this->termcyrillic, PDO::PARAM_STR);
                        break;
                    case '`TermCyrillic_u`':
                        $stmt->bindValue($identifier, $this->termcyrillic_u, PDO::PARAM_STR);
                        break;
                    case '`TermChinese`':
                        $stmt->bindValue($identifier, $this->termchinese, PDO::PARAM_STR);
                        break;
                    case '`TermChinese_u`':
                        $stmt->bindValue($identifier, $this->termchinese_u, PDO::PARAM_STR);
                        break;
                    case '`See1`':
                        $stmt->bindValue($identifier, $this->see1, PDO::PARAM_STR);
                        break;
                    case '`See2`':
                        $stmt->bindValue($identifier, $this->see2, PDO::PARAM_STR);
                        break;
                    case '`See3`':
                        $stmt->bindValue($identifier, $this->see3, PDO::PARAM_STR);
                        break;
                    case '`Picname`':
                        $stmt->bindValue($identifier, $this->picname, PDO::PARAM_STR);
                        break;
                    case '`Genetics`':
                        $stmt->bindValue($identifier, $this->genetics, PDO::PARAM_INT);
                        break;
                    case '`Comments`':
                        $stmt->bindValue($identifier, $this->comments, PDO::PARAM_STR);
                        break;
                    case '`Entered`':
                        $stmt->bindValue($identifier, $this->entered, PDO::PARAM_INT);
                        break;
                    case '`Dateentered`':
                        $stmt->bindValue($identifier, $this->dateentered, PDO::PARAM_STR);
                        break;
                    case '`Modified`':
                        $stmt->bindValue($identifier, $this->modified, PDO::PARAM_INT);
                        break;
                    case '`Datemodified`':
                        $stmt->bindValue($identifier, $this->datemodified, PDO::PARAM_STR);
                        break;
                    case '`Expert`':
                        $stmt->bindValue($identifier, $this->expert, PDO::PARAM_INT);
                        break;
                    case '`Datechecked`':
                        $stmt->bindValue($identifier, $this->datechecked, PDO::PARAM_STR);
                        break;
                    case '`English`':
                        $stmt->bindValue($identifier, $this->english, PDO::PARAM_STR);
                        break;
                    case '`Grammar`':
                        $stmt->bindValue($identifier, $this->grammar, PDO::PARAM_STR);
                        break;
                    case '`Gender`':
                        $stmt->bindValue($identifier, $this->gender, PDO::PARAM_STR);
                        break;
                    case '`FrenchDef`':
                        $stmt->bindValue($identifier, $this->frenchdef, PDO::PARAM_STR);
                        break;
                    case '`EnteredFR`':
                        $stmt->bindValue($identifier, $this->enteredfr, PDO::PARAM_INT);
                        break;
                    case '`DateEnteredFR`':
                        $stmt->bindValue($identifier, $this->dateenteredfr, PDO::PARAM_STR);
                        break;
                    case '`ModifiedFR`':
                        $stmt->bindValue($identifier, $this->modifiedfr, PDO::PARAM_INT);
                        break;
                    case '`DateModifiedFR`':
                        $stmt->bindValue($identifier, $this->datemodifiedfr, PDO::PARAM_STR);
                        break;
                    case '`ExpertFR`':
                        $stmt->bindValue($identifier, $this->expertfr, PDO::PARAM_INT);
                        break;
                    case '`DateCheckedFR`':
                        $stmt->bindValue($identifier, $this->datecheckedfr, PDO::PARAM_STR);
                        break;
                    case '`SpanishDef`':
                        $stmt->bindValue($identifier, $this->spanishdef, PDO::PARAM_STR);
                        break;
                    case '`EnteredSP`':
                        $stmt->bindValue($identifier, $this->enteredsp, PDO::PARAM_INT);
                        break;
                    case '`DateEnteredSP`':
                        $stmt->bindValue($identifier, $this->dateenteredsp, PDO::PARAM_STR);
                        break;
                    case '`ModifiedSP`':
                        $stmt->bindValue($identifier, $this->modifiedsp, PDO::PARAM_INT);
                        break;
                    case '`DateModifiedSP`':
                        $stmt->bindValue($identifier, $this->datemodifiedsp, PDO::PARAM_STR);
                        break;
                    case '`ExpertSP`':
                        $stmt->bindValue($identifier, $this->expertsp, PDO::PARAM_INT);
                        break;
                    case '`DateCheckedSP`':
                        $stmt->bindValue($identifier, $this->datecheckedsp, PDO::PARAM_STR);
                        break;
                    case '`PortugueseDef`':
                        $stmt->bindValue($identifier, $this->portuguesedef, PDO::PARAM_STR);
                        break;
                    case '`EnteredPR`':
                        $stmt->bindValue($identifier, $this->enteredpr, PDO::PARAM_INT);
                        break;
                    case '`DateEnteredPR`':
                        $stmt->bindValue($identifier, $this->dateenteredpr, PDO::PARAM_STR);
                        break;
                    case '`ModifiedPR`':
                        $stmt->bindValue($identifier, $this->modifiedpr, PDO::PARAM_INT);
                        break;
                    case '`DateModifiedPR`':
                        $stmt->bindValue($identifier, $this->datemodifiedpr, PDO::PARAM_STR);
                        break;
                    case '`ExpertPR`':
                        $stmt->bindValue($identifier, $this->expertpr, PDO::PARAM_INT);
                        break;
                    case '`DateCheckedPR`':
                        $stmt->bindValue($identifier, $this->datecheckedpr, PDO::PARAM_STR);
                        break;
                    case '`RussianDef`':
                        $stmt->bindValue($identifier, $this->russiandef, PDO::PARAM_STR);
                        break;
                    case '`EnteredRus`':
                        $stmt->bindValue($identifier, $this->enteredrus, PDO::PARAM_INT);
                        break;
                    case '`DateEnteredRus`':
                        $stmt->bindValue($identifier, $this->dateenteredrus, PDO::PARAM_STR);
                        break;
                    case '`ModifiedRus`':
                        $stmt->bindValue($identifier, $this->modifiedrus, PDO::PARAM_INT);
                        break;
                    case '`DateModifiedRus`':
                        $stmt->bindValue($identifier, $this->datemodifiedrus, PDO::PARAM_STR);
                        break;
                    case '`ExpertRus`':
                        $stmt->bindValue($identifier, $this->expertrus, PDO::PARAM_INT);
                        break;
                    case '`DateCheckedRus`':
                        $stmt->bindValue($identifier, $this->datecheckedrus, PDO::PARAM_STR);
                        break;
                    case '`CyrillicDef`':
                        $stmt->bindValue($identifier, $this->cyrillicdef, PDO::PARAM_STR);
                        break;
                    case '`EnteredCyr`':
                        $stmt->bindValue($identifier, $this->enteredcyr, PDO::PARAM_INT);
                        break;
                    case '`DateEnteredCyr`':
                        $stmt->bindValue($identifier, $this->dateenteredcyr, PDO::PARAM_STR);
                        break;
                    case '`ModifiedCyr`':
                        $stmt->bindValue($identifier, $this->modifiedcyr, PDO::PARAM_INT);
                        break;
                    case '`DateModifiedCyr`':
                        $stmt->bindValue($identifier, $this->datemodifiedcyr, PDO::PARAM_STR);
                        break;
                    case '`ExpertCyr`':
                        $stmt->bindValue($identifier, $this->expertcyr, PDO::PARAM_INT);
                        break;
                    case '`DateCheckedCyr`':
                        $stmt->bindValue($identifier, $this->datecheckedcyr, PDO::PARAM_STR);
                        break;
                    case '`ChineseDef`':
                        $stmt->bindValue($identifier, $this->chinesedef, PDO::PARAM_STR);
                        break;
                    case '`EnteredChi`':
                        $stmt->bindValue($identifier, $this->enteredchi, PDO::PARAM_INT);
                        break;
                    case '`DateEnteredChi`':
                        $stmt->bindValue($identifier, $this->dateenteredchi, PDO::PARAM_STR);
                        break;
                    case '`ModifiedChi`':
                        $stmt->bindValue($identifier, $this->modifiedchi, PDO::PARAM_INT);
                        break;
                    case '`DateModifiedChi`':
                        $stmt->bindValue($identifier, $this->datemodifiedchi, PDO::PARAM_STR);
                        break;
                    case '`ExpertChi`':
                        $stmt->bindValue($identifier, $this->expertchi, PDO::PARAM_INT);
                        break;
                    case '`DateCheckedChi`':
                        $stmt->bindValue($identifier, $this->datecheckedchi, PDO::PARAM_STR);
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


            if (($retval = GlossaryPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GlossaryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getTermenglish();
                break;
            case 2:
                return $this->getTermenglishscnd();
                break;
            case 3:
                return $this->getTermengishthird();
                break;
            case 4:
                return $this->getAbbreviation();
                break;
            case 5:
                return $this->getTermfrench();
                break;
            case 6:
                return $this->getTermspanish();
                break;
            case 7:
                return $this->getTermportuguese();
                break;
            case 8:
                return $this->getTermrussian();
                break;
            case 9:
                return $this->getTermcyrillic();
                break;
            case 10:
                return $this->getTermcyrillicU();
                break;
            case 11:
                return $this->getTermchinese();
                break;
            case 12:
                return $this->getTermchineseU();
                break;
            case 13:
                return $this->getSee1();
                break;
            case 14:
                return $this->getSee2();
                break;
            case 15:
                return $this->getSee3();
                break;
            case 16:
                return $this->getPicname();
                break;
            case 17:
                return $this->getGenetics();
                break;
            case 18:
                return $this->getComments();
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
                return $this->getEnglish();
                break;
            case 26:
                return $this->getGrammar();
                break;
            case 27:
                return $this->getGender();
                break;
            case 28:
                return $this->getFrenchdef();
                break;
            case 29:
                return $this->getEnteredfr();
                break;
            case 30:
                return $this->getDateenteredfr();
                break;
            case 31:
                return $this->getModifiedfr();
                break;
            case 32:
                return $this->getDatemodifiedfr();
                break;
            case 33:
                return $this->getExpertfr();
                break;
            case 34:
                return $this->getDatecheckedfr();
                break;
            case 35:
                return $this->getSpanishdef();
                break;
            case 36:
                return $this->getEnteredsp();
                break;
            case 37:
                return $this->getDateenteredsp();
                break;
            case 38:
                return $this->getModifiedsp();
                break;
            case 39:
                return $this->getDatemodifiedsp();
                break;
            case 40:
                return $this->getExpertsp();
                break;
            case 41:
                return $this->getDatecheckedsp();
                break;
            case 42:
                return $this->getPortuguesedef();
                break;
            case 43:
                return $this->getEnteredpr();
                break;
            case 44:
                return $this->getDateenteredpr();
                break;
            case 45:
                return $this->getModifiedpr();
                break;
            case 46:
                return $this->getDatemodifiedpr();
                break;
            case 47:
                return $this->getExpertpr();
                break;
            case 48:
                return $this->getDatecheckedpr();
                break;
            case 49:
                return $this->getRussiandef();
                break;
            case 50:
                return $this->getEnteredrus();
                break;
            case 51:
                return $this->getDateenteredrus();
                break;
            case 52:
                return $this->getModifiedrus();
                break;
            case 53:
                return $this->getDatemodifiedrus();
                break;
            case 54:
                return $this->getExpertrus();
                break;
            case 55:
                return $this->getDatecheckedrus();
                break;
            case 56:
                return $this->getCyrillicdef();
                break;
            case 57:
                return $this->getEnteredcyr();
                break;
            case 58:
                return $this->getDateenteredcyr();
                break;
            case 59:
                return $this->getModifiedcyr();
                break;
            case 60:
                return $this->getDatemodifiedcyr();
                break;
            case 61:
                return $this->getExpertcyr();
                break;
            case 62:
                return $this->getDatecheckedcyr();
                break;
            case 63:
                return $this->getChinesedef();
                break;
            case 64:
                return $this->getEnteredchi();
                break;
            case 65:
                return $this->getDateenteredchi();
                break;
            case 66:
                return $this->getModifiedchi();
                break;
            case 67:
                return $this->getDatemodifiedchi();
                break;
            case 68:
                return $this->getExpertchi();
                break;
            case 69:
                return $this->getDatecheckedchi();
                break;
            case 70:
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
        if (isset($alreadyDumpedObjects['Glossary'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Glossary'][$this->getPrimaryKey()] = true;
        $keys = GlossaryPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getTermenglish(),
            $keys[2] => $this->getTermenglishscnd(),
            $keys[3] => $this->getTermengishthird(),
            $keys[4] => $this->getAbbreviation(),
            $keys[5] => $this->getTermfrench(),
            $keys[6] => $this->getTermspanish(),
            $keys[7] => $this->getTermportuguese(),
            $keys[8] => $this->getTermrussian(),
            $keys[9] => $this->getTermcyrillic(),
            $keys[10] => $this->getTermcyrillicU(),
            $keys[11] => $this->getTermchinese(),
            $keys[12] => $this->getTermchineseU(),
            $keys[13] => $this->getSee1(),
            $keys[14] => $this->getSee2(),
            $keys[15] => $this->getSee3(),
            $keys[16] => $this->getPicname(),
            $keys[17] => $this->getGenetics(),
            $keys[18] => $this->getComments(),
            $keys[19] => $this->getEntered(),
            $keys[20] => $this->getDateentered(),
            $keys[21] => $this->getModified(),
            $keys[22] => $this->getDatemodified(),
            $keys[23] => $this->getExpert(),
            $keys[24] => $this->getDatechecked(),
            $keys[25] => $this->getEnglish(),
            $keys[26] => $this->getGrammar(),
            $keys[27] => $this->getGender(),
            $keys[28] => $this->getFrenchdef(),
            $keys[29] => $this->getEnteredfr(),
            $keys[30] => $this->getDateenteredfr(),
            $keys[31] => $this->getModifiedfr(),
            $keys[32] => $this->getDatemodifiedfr(),
            $keys[33] => $this->getExpertfr(),
            $keys[34] => $this->getDatecheckedfr(),
            $keys[35] => $this->getSpanishdef(),
            $keys[36] => $this->getEnteredsp(),
            $keys[37] => $this->getDateenteredsp(),
            $keys[38] => $this->getModifiedsp(),
            $keys[39] => $this->getDatemodifiedsp(),
            $keys[40] => $this->getExpertsp(),
            $keys[41] => $this->getDatecheckedsp(),
            $keys[42] => $this->getPortuguesedef(),
            $keys[43] => $this->getEnteredpr(),
            $keys[44] => $this->getDateenteredpr(),
            $keys[45] => $this->getModifiedpr(),
            $keys[46] => $this->getDatemodifiedpr(),
            $keys[47] => $this->getExpertpr(),
            $keys[48] => $this->getDatecheckedpr(),
            $keys[49] => $this->getRussiandef(),
            $keys[50] => $this->getEnteredrus(),
            $keys[51] => $this->getDateenteredrus(),
            $keys[52] => $this->getModifiedrus(),
            $keys[53] => $this->getDatemodifiedrus(),
            $keys[54] => $this->getExpertrus(),
            $keys[55] => $this->getDatecheckedrus(),
            $keys[56] => $this->getCyrillicdef(),
            $keys[57] => $this->getEnteredcyr(),
            $keys[58] => $this->getDateenteredcyr(),
            $keys[59] => $this->getModifiedcyr(),
            $keys[60] => $this->getDatemodifiedcyr(),
            $keys[61] => $this->getExpertcyr(),
            $keys[62] => $this->getDatecheckedcyr(),
            $keys[63] => $this->getChinesedef(),
            $keys[64] => $this->getEnteredchi(),
            $keys[65] => $this->getDateenteredchi(),
            $keys[66] => $this->getModifiedchi(),
            $keys[67] => $this->getDatemodifiedchi(),
            $keys[68] => $this->getExpertchi(),
            $keys[69] => $this->getDatecheckedchi(),
            $keys[70] => $this->getTs(),
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
        $pos = GlossaryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setTermenglish($value);
                break;
            case 2:
                $this->setTermenglishscnd($value);
                break;
            case 3:
                $this->setTermengishthird($value);
                break;
            case 4:
                $this->setAbbreviation($value);
                break;
            case 5:
                $this->setTermfrench($value);
                break;
            case 6:
                $this->setTermspanish($value);
                break;
            case 7:
                $this->setTermportuguese($value);
                break;
            case 8:
                $this->setTermrussian($value);
                break;
            case 9:
                $this->setTermcyrillic($value);
                break;
            case 10:
                $this->setTermcyrillicU($value);
                break;
            case 11:
                $this->setTermchinese($value);
                break;
            case 12:
                $this->setTermchineseU($value);
                break;
            case 13:
                $this->setSee1($value);
                break;
            case 14:
                $this->setSee2($value);
                break;
            case 15:
                $this->setSee3($value);
                break;
            case 16:
                $this->setPicname($value);
                break;
            case 17:
                $this->setGenetics($value);
                break;
            case 18:
                $this->setComments($value);
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
                $this->setEnglish($value);
                break;
            case 26:
                $this->setGrammar($value);
                break;
            case 27:
                $this->setGender($value);
                break;
            case 28:
                $this->setFrenchdef($value);
                break;
            case 29:
                $this->setEnteredfr($value);
                break;
            case 30:
                $this->setDateenteredfr($value);
                break;
            case 31:
                $this->setModifiedfr($value);
                break;
            case 32:
                $this->setDatemodifiedfr($value);
                break;
            case 33:
                $this->setExpertfr($value);
                break;
            case 34:
                $this->setDatecheckedfr($value);
                break;
            case 35:
                $this->setSpanishdef($value);
                break;
            case 36:
                $this->setEnteredsp($value);
                break;
            case 37:
                $this->setDateenteredsp($value);
                break;
            case 38:
                $this->setModifiedsp($value);
                break;
            case 39:
                $this->setDatemodifiedsp($value);
                break;
            case 40:
                $this->setExpertsp($value);
                break;
            case 41:
                $this->setDatecheckedsp($value);
                break;
            case 42:
                $this->setPortuguesedef($value);
                break;
            case 43:
                $this->setEnteredpr($value);
                break;
            case 44:
                $this->setDateenteredpr($value);
                break;
            case 45:
                $this->setModifiedpr($value);
                break;
            case 46:
                $this->setDatemodifiedpr($value);
                break;
            case 47:
                $this->setExpertpr($value);
                break;
            case 48:
                $this->setDatecheckedpr($value);
                break;
            case 49:
                $this->setRussiandef($value);
                break;
            case 50:
                $this->setEnteredrus($value);
                break;
            case 51:
                $this->setDateenteredrus($value);
                break;
            case 52:
                $this->setModifiedrus($value);
                break;
            case 53:
                $this->setDatemodifiedrus($value);
                break;
            case 54:
                $this->setExpertrus($value);
                break;
            case 55:
                $this->setDatecheckedrus($value);
                break;
            case 56:
                $this->setCyrillicdef($value);
                break;
            case 57:
                $this->setEnteredcyr($value);
                break;
            case 58:
                $this->setDateenteredcyr($value);
                break;
            case 59:
                $this->setModifiedcyr($value);
                break;
            case 60:
                $this->setDatemodifiedcyr($value);
                break;
            case 61:
                $this->setExpertcyr($value);
                break;
            case 62:
                $this->setDatecheckedcyr($value);
                break;
            case 63:
                $this->setChinesedef($value);
                break;
            case 64:
                $this->setEnteredchi($value);
                break;
            case 65:
                $this->setDateenteredchi($value);
                break;
            case 66:
                $this->setModifiedchi($value);
                break;
            case 67:
                $this->setDatemodifiedchi($value);
                break;
            case 68:
                $this->setExpertchi($value);
                break;
            case 69:
                $this->setDatecheckedchi($value);
                break;
            case 70:
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
        $keys = GlossaryPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setTermenglish($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setTermenglishscnd($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTermengishthird($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAbbreviation($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTermfrench($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTermspanish($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setTermportuguese($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTermrussian($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTermcyrillic($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTermcyrillicU($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setTermchinese($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setTermchineseU($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setSee1($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setSee2($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setSee3($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setPicname($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setGenetics($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setComments($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setEntered($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setDateentered($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setModified($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDatemodified($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setExpert($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setDatechecked($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setEnglish($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setGrammar($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setGender($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setFrenchdef($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setEnteredfr($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setDateenteredfr($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setModifiedfr($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setDatemodifiedfr($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setExpertfr($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setDatecheckedfr($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setSpanishdef($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setEnteredsp($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setDateenteredsp($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setModifiedsp($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setDatemodifiedsp($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setExpertsp($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setDatecheckedsp($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setPortuguesedef($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setEnteredpr($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setDateenteredpr($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setModifiedpr($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setDatemodifiedpr($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setExpertpr($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setDatecheckedpr($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setRussiandef($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setEnteredrus($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setDateenteredrus($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setModifiedrus($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setDatemodifiedrus($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setExpertrus($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setDatecheckedrus($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setCyrillicdef($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setEnteredcyr($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setDateenteredcyr($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setModifiedcyr($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setDatemodifiedcyr($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setExpertcyr($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setDatecheckedcyr($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setChinesedef($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setEnteredchi($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setDateenteredchi($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setModifiedchi($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setDatemodifiedchi($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setExpertchi($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setDatecheckedchi($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setTs($arr[$keys[70]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GlossaryPeer::DATABASE_NAME);

        if ($this->isColumnModified(GlossaryPeer::AUTOCTR)) $criteria->add(GlossaryPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(GlossaryPeer::TERMENGLISH)) $criteria->add(GlossaryPeer::TERMENGLISH, $this->termenglish);
        if ($this->isColumnModified(GlossaryPeer::TERMENGLISHSCND)) $criteria->add(GlossaryPeer::TERMENGLISHSCND, $this->termenglishscnd);
        if ($this->isColumnModified(GlossaryPeer::TERMENGISHTHIRD)) $criteria->add(GlossaryPeer::TERMENGISHTHIRD, $this->termengishthird);
        if ($this->isColumnModified(GlossaryPeer::ABBREVIATION)) $criteria->add(GlossaryPeer::ABBREVIATION, $this->abbreviation);
        if ($this->isColumnModified(GlossaryPeer::TERMFRENCH)) $criteria->add(GlossaryPeer::TERMFRENCH, $this->termfrench);
        if ($this->isColumnModified(GlossaryPeer::TERMSPANISH)) $criteria->add(GlossaryPeer::TERMSPANISH, $this->termspanish);
        if ($this->isColumnModified(GlossaryPeer::TERMPORTUGUESE)) $criteria->add(GlossaryPeer::TERMPORTUGUESE, $this->termportuguese);
        if ($this->isColumnModified(GlossaryPeer::TERMRUSSIAN)) $criteria->add(GlossaryPeer::TERMRUSSIAN, $this->termrussian);
        if ($this->isColumnModified(GlossaryPeer::TERMCYRILLIC)) $criteria->add(GlossaryPeer::TERMCYRILLIC, $this->termcyrillic);
        if ($this->isColumnModified(GlossaryPeer::TERMCYRILLIC_U)) $criteria->add(GlossaryPeer::TERMCYRILLIC_U, $this->termcyrillic_u);
        if ($this->isColumnModified(GlossaryPeer::TERMCHINESE)) $criteria->add(GlossaryPeer::TERMCHINESE, $this->termchinese);
        if ($this->isColumnModified(GlossaryPeer::TERMCHINESE_U)) $criteria->add(GlossaryPeer::TERMCHINESE_U, $this->termchinese_u);
        if ($this->isColumnModified(GlossaryPeer::SEE1)) $criteria->add(GlossaryPeer::SEE1, $this->see1);
        if ($this->isColumnModified(GlossaryPeer::SEE2)) $criteria->add(GlossaryPeer::SEE2, $this->see2);
        if ($this->isColumnModified(GlossaryPeer::SEE3)) $criteria->add(GlossaryPeer::SEE3, $this->see3);
        if ($this->isColumnModified(GlossaryPeer::PICNAME)) $criteria->add(GlossaryPeer::PICNAME, $this->picname);
        if ($this->isColumnModified(GlossaryPeer::GENETICS)) $criteria->add(GlossaryPeer::GENETICS, $this->genetics);
        if ($this->isColumnModified(GlossaryPeer::COMMENTS)) $criteria->add(GlossaryPeer::COMMENTS, $this->comments);
        if ($this->isColumnModified(GlossaryPeer::ENTERED)) $criteria->add(GlossaryPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(GlossaryPeer::DATEENTERED)) $criteria->add(GlossaryPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(GlossaryPeer::MODIFIED)) $criteria->add(GlossaryPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(GlossaryPeer::DATEMODIFIED)) $criteria->add(GlossaryPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(GlossaryPeer::EXPERT)) $criteria->add(GlossaryPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(GlossaryPeer::DATECHECKED)) $criteria->add(GlossaryPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(GlossaryPeer::ENGLISH)) $criteria->add(GlossaryPeer::ENGLISH, $this->english);
        if ($this->isColumnModified(GlossaryPeer::GRAMMAR)) $criteria->add(GlossaryPeer::GRAMMAR, $this->grammar);
        if ($this->isColumnModified(GlossaryPeer::GENDER)) $criteria->add(GlossaryPeer::GENDER, $this->gender);
        if ($this->isColumnModified(GlossaryPeer::FRENCHDEF)) $criteria->add(GlossaryPeer::FRENCHDEF, $this->frenchdef);
        if ($this->isColumnModified(GlossaryPeer::ENTEREDFR)) $criteria->add(GlossaryPeer::ENTEREDFR, $this->enteredfr);
        if ($this->isColumnModified(GlossaryPeer::DATEENTEREDFR)) $criteria->add(GlossaryPeer::DATEENTEREDFR, $this->dateenteredfr);
        if ($this->isColumnModified(GlossaryPeer::MODIFIEDFR)) $criteria->add(GlossaryPeer::MODIFIEDFR, $this->modifiedfr);
        if ($this->isColumnModified(GlossaryPeer::DATEMODIFIEDFR)) $criteria->add(GlossaryPeer::DATEMODIFIEDFR, $this->datemodifiedfr);
        if ($this->isColumnModified(GlossaryPeer::EXPERTFR)) $criteria->add(GlossaryPeer::EXPERTFR, $this->expertfr);
        if ($this->isColumnModified(GlossaryPeer::DATECHECKEDFR)) $criteria->add(GlossaryPeer::DATECHECKEDFR, $this->datecheckedfr);
        if ($this->isColumnModified(GlossaryPeer::SPANISHDEF)) $criteria->add(GlossaryPeer::SPANISHDEF, $this->spanishdef);
        if ($this->isColumnModified(GlossaryPeer::ENTEREDSP)) $criteria->add(GlossaryPeer::ENTEREDSP, $this->enteredsp);
        if ($this->isColumnModified(GlossaryPeer::DATEENTEREDSP)) $criteria->add(GlossaryPeer::DATEENTEREDSP, $this->dateenteredsp);
        if ($this->isColumnModified(GlossaryPeer::MODIFIEDSP)) $criteria->add(GlossaryPeer::MODIFIEDSP, $this->modifiedsp);
        if ($this->isColumnModified(GlossaryPeer::DATEMODIFIEDSP)) $criteria->add(GlossaryPeer::DATEMODIFIEDSP, $this->datemodifiedsp);
        if ($this->isColumnModified(GlossaryPeer::EXPERTSP)) $criteria->add(GlossaryPeer::EXPERTSP, $this->expertsp);
        if ($this->isColumnModified(GlossaryPeer::DATECHECKEDSP)) $criteria->add(GlossaryPeer::DATECHECKEDSP, $this->datecheckedsp);
        if ($this->isColumnModified(GlossaryPeer::PORTUGUESEDEF)) $criteria->add(GlossaryPeer::PORTUGUESEDEF, $this->portuguesedef);
        if ($this->isColumnModified(GlossaryPeer::ENTEREDPR)) $criteria->add(GlossaryPeer::ENTEREDPR, $this->enteredpr);
        if ($this->isColumnModified(GlossaryPeer::DATEENTEREDPR)) $criteria->add(GlossaryPeer::DATEENTEREDPR, $this->dateenteredpr);
        if ($this->isColumnModified(GlossaryPeer::MODIFIEDPR)) $criteria->add(GlossaryPeer::MODIFIEDPR, $this->modifiedpr);
        if ($this->isColumnModified(GlossaryPeer::DATEMODIFIEDPR)) $criteria->add(GlossaryPeer::DATEMODIFIEDPR, $this->datemodifiedpr);
        if ($this->isColumnModified(GlossaryPeer::EXPERTPR)) $criteria->add(GlossaryPeer::EXPERTPR, $this->expertpr);
        if ($this->isColumnModified(GlossaryPeer::DATECHECKEDPR)) $criteria->add(GlossaryPeer::DATECHECKEDPR, $this->datecheckedpr);
        if ($this->isColumnModified(GlossaryPeer::RUSSIANDEF)) $criteria->add(GlossaryPeer::RUSSIANDEF, $this->russiandef);
        if ($this->isColumnModified(GlossaryPeer::ENTEREDRUS)) $criteria->add(GlossaryPeer::ENTEREDRUS, $this->enteredrus);
        if ($this->isColumnModified(GlossaryPeer::DATEENTEREDRUS)) $criteria->add(GlossaryPeer::DATEENTEREDRUS, $this->dateenteredrus);
        if ($this->isColumnModified(GlossaryPeer::MODIFIEDRUS)) $criteria->add(GlossaryPeer::MODIFIEDRUS, $this->modifiedrus);
        if ($this->isColumnModified(GlossaryPeer::DATEMODIFIEDRUS)) $criteria->add(GlossaryPeer::DATEMODIFIEDRUS, $this->datemodifiedrus);
        if ($this->isColumnModified(GlossaryPeer::EXPERTRUS)) $criteria->add(GlossaryPeer::EXPERTRUS, $this->expertrus);
        if ($this->isColumnModified(GlossaryPeer::DATECHECKEDRUS)) $criteria->add(GlossaryPeer::DATECHECKEDRUS, $this->datecheckedrus);
        if ($this->isColumnModified(GlossaryPeer::CYRILLICDEF)) $criteria->add(GlossaryPeer::CYRILLICDEF, $this->cyrillicdef);
        if ($this->isColumnModified(GlossaryPeer::ENTEREDCYR)) $criteria->add(GlossaryPeer::ENTEREDCYR, $this->enteredcyr);
        if ($this->isColumnModified(GlossaryPeer::DATEENTEREDCYR)) $criteria->add(GlossaryPeer::DATEENTEREDCYR, $this->dateenteredcyr);
        if ($this->isColumnModified(GlossaryPeer::MODIFIEDCYR)) $criteria->add(GlossaryPeer::MODIFIEDCYR, $this->modifiedcyr);
        if ($this->isColumnModified(GlossaryPeer::DATEMODIFIEDCYR)) $criteria->add(GlossaryPeer::DATEMODIFIEDCYR, $this->datemodifiedcyr);
        if ($this->isColumnModified(GlossaryPeer::EXPERTCYR)) $criteria->add(GlossaryPeer::EXPERTCYR, $this->expertcyr);
        if ($this->isColumnModified(GlossaryPeer::DATECHECKEDCYR)) $criteria->add(GlossaryPeer::DATECHECKEDCYR, $this->datecheckedcyr);
        if ($this->isColumnModified(GlossaryPeer::CHINESEDEF)) $criteria->add(GlossaryPeer::CHINESEDEF, $this->chinesedef);
        if ($this->isColumnModified(GlossaryPeer::ENTEREDCHI)) $criteria->add(GlossaryPeer::ENTEREDCHI, $this->enteredchi);
        if ($this->isColumnModified(GlossaryPeer::DATEENTEREDCHI)) $criteria->add(GlossaryPeer::DATEENTEREDCHI, $this->dateenteredchi);
        if ($this->isColumnModified(GlossaryPeer::MODIFIEDCHI)) $criteria->add(GlossaryPeer::MODIFIEDCHI, $this->modifiedchi);
        if ($this->isColumnModified(GlossaryPeer::DATEMODIFIEDCHI)) $criteria->add(GlossaryPeer::DATEMODIFIEDCHI, $this->datemodifiedchi);
        if ($this->isColumnModified(GlossaryPeer::EXPERTCHI)) $criteria->add(GlossaryPeer::EXPERTCHI, $this->expertchi);
        if ($this->isColumnModified(GlossaryPeer::DATECHECKEDCHI)) $criteria->add(GlossaryPeer::DATECHECKEDCHI, $this->datecheckedchi);
        if ($this->isColumnModified(GlossaryPeer::TS)) $criteria->add(GlossaryPeer::TS, $this->ts);

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
        $criteria = new Criteria(GlossaryPeer::DATABASE_NAME);
        $criteria->add(GlossaryPeer::AUTOCTR, $this->autoctr);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getAutoctr();
    }

    /**
     * Generic method to set the primary key (autoctr column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setAutoctr($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getAutoctr();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Glossary (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setTermenglish($this->getTermenglish());
        $copyObj->setTermenglishscnd($this->getTermenglishscnd());
        $copyObj->setTermengishthird($this->getTermengishthird());
        $copyObj->setAbbreviation($this->getAbbreviation());
        $copyObj->setTermfrench($this->getTermfrench());
        $copyObj->setTermspanish($this->getTermspanish());
        $copyObj->setTermportuguese($this->getTermportuguese());
        $copyObj->setTermrussian($this->getTermrussian());
        $copyObj->setTermcyrillic($this->getTermcyrillic());
        $copyObj->setTermcyrillicU($this->getTermcyrillicU());
        $copyObj->setTermchinese($this->getTermchinese());
        $copyObj->setTermchineseU($this->getTermchineseU());
        $copyObj->setSee1($this->getSee1());
        $copyObj->setSee2($this->getSee2());
        $copyObj->setSee3($this->getSee3());
        $copyObj->setPicname($this->getPicname());
        $copyObj->setGenetics($this->getGenetics());
        $copyObj->setComments($this->getComments());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setEnglish($this->getEnglish());
        $copyObj->setGrammar($this->getGrammar());
        $copyObj->setGender($this->getGender());
        $copyObj->setFrenchdef($this->getFrenchdef());
        $copyObj->setEnteredfr($this->getEnteredfr());
        $copyObj->setDateenteredfr($this->getDateenteredfr());
        $copyObj->setModifiedfr($this->getModifiedfr());
        $copyObj->setDatemodifiedfr($this->getDatemodifiedfr());
        $copyObj->setExpertfr($this->getExpertfr());
        $copyObj->setDatecheckedfr($this->getDatecheckedfr());
        $copyObj->setSpanishdef($this->getSpanishdef());
        $copyObj->setEnteredsp($this->getEnteredsp());
        $copyObj->setDateenteredsp($this->getDateenteredsp());
        $copyObj->setModifiedsp($this->getModifiedsp());
        $copyObj->setDatemodifiedsp($this->getDatemodifiedsp());
        $copyObj->setExpertsp($this->getExpertsp());
        $copyObj->setDatecheckedsp($this->getDatecheckedsp());
        $copyObj->setPortuguesedef($this->getPortuguesedef());
        $copyObj->setEnteredpr($this->getEnteredpr());
        $copyObj->setDateenteredpr($this->getDateenteredpr());
        $copyObj->setModifiedpr($this->getModifiedpr());
        $copyObj->setDatemodifiedpr($this->getDatemodifiedpr());
        $copyObj->setExpertpr($this->getExpertpr());
        $copyObj->setDatecheckedpr($this->getDatecheckedpr());
        $copyObj->setRussiandef($this->getRussiandef());
        $copyObj->setEnteredrus($this->getEnteredrus());
        $copyObj->setDateenteredrus($this->getDateenteredrus());
        $copyObj->setModifiedrus($this->getModifiedrus());
        $copyObj->setDatemodifiedrus($this->getDatemodifiedrus());
        $copyObj->setExpertrus($this->getExpertrus());
        $copyObj->setDatecheckedrus($this->getDatecheckedrus());
        $copyObj->setCyrillicdef($this->getCyrillicdef());
        $copyObj->setEnteredcyr($this->getEnteredcyr());
        $copyObj->setDateenteredcyr($this->getDateenteredcyr());
        $copyObj->setModifiedcyr($this->getModifiedcyr());
        $copyObj->setDatemodifiedcyr($this->getDatemodifiedcyr());
        $copyObj->setExpertcyr($this->getExpertcyr());
        $copyObj->setDatecheckedcyr($this->getDatecheckedcyr());
        $copyObj->setChinesedef($this->getChinesedef());
        $copyObj->setEnteredchi($this->getEnteredchi());
        $copyObj->setDateenteredchi($this->getDateenteredchi());
        $copyObj->setModifiedchi($this->getModifiedchi());
        $copyObj->setDatemodifiedchi($this->getDatemodifiedchi());
        $copyObj->setExpertchi($this->getExpertchi());
        $copyObj->setDatecheckedchi($this->getDatecheckedchi());
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
     * @return Glossary Clone of current object.
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
     * @return GlossaryPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GlossaryPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->termenglish = null;
        $this->termenglishscnd = null;
        $this->termengishthird = null;
        $this->abbreviation = null;
        $this->termfrench = null;
        $this->termspanish = null;
        $this->termportuguese = null;
        $this->termrussian = null;
        $this->termcyrillic = null;
        $this->termcyrillic_u = null;
        $this->termchinese = null;
        $this->termchinese_u = null;
        $this->see1 = null;
        $this->see2 = null;
        $this->see3 = null;
        $this->picname = null;
        $this->genetics = null;
        $this->comments = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->english = null;
        $this->grammar = null;
        $this->gender = null;
        $this->frenchdef = null;
        $this->enteredfr = null;
        $this->dateenteredfr = null;
        $this->modifiedfr = null;
        $this->datemodifiedfr = null;
        $this->expertfr = null;
        $this->datecheckedfr = null;
        $this->spanishdef = null;
        $this->enteredsp = null;
        $this->dateenteredsp = null;
        $this->modifiedsp = null;
        $this->datemodifiedsp = null;
        $this->expertsp = null;
        $this->datecheckedsp = null;
        $this->portuguesedef = null;
        $this->enteredpr = null;
        $this->dateenteredpr = null;
        $this->modifiedpr = null;
        $this->datemodifiedpr = null;
        $this->expertpr = null;
        $this->datecheckedpr = null;
        $this->russiandef = null;
        $this->enteredrus = null;
        $this->dateenteredrus = null;
        $this->modifiedrus = null;
        $this->datemodifiedrus = null;
        $this->expertrus = null;
        $this->datecheckedrus = null;
        $this->cyrillicdef = null;
        $this->enteredcyr = null;
        $this->dateenteredcyr = null;
        $this->modifiedcyr = null;
        $this->datemodifiedcyr = null;
        $this->expertcyr = null;
        $this->datecheckedcyr = null;
        $this->chinesedef = null;
        $this->enteredchi = null;
        $this->dateenteredchi = null;
        $this->modifiedchi = null;
        $this->datemodifiedchi = null;
        $this->expertchi = null;
        $this->datecheckedchi = null;
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
        return (string) $this->exportTo(GlossaryPeer::DEFAULT_STRING_FORMAT);
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
