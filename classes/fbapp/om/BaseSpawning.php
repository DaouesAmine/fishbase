<?php


/**
 * Base class that represents a row from the 'spawning' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseSpawning extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SpawningPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SpawningPeer
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
     * The value for the spawningrefno field.
     * @var        int
     */
    protected $spawningrefno;

    /**
     * The value for the sourceref field.
     * @var        int
     */
    protected $sourceref;

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
     * The value for the spawningground field.
     * @var        string
     */
    protected $spawningground;

    /**
     * The value for the spawningarea field.
     * @var        string
     */
    protected $spawningarea;

    /**
     * The value for the jan field.
     * @var        double
     */
    protected $jan;

    /**
     * The value for the feb field.
     * @var        double
     */
    protected $feb;

    /**
     * The value for the mar field.
     * @var        double
     */
    protected $mar;

    /**
     * The value for the apr field.
     * @var        double
     */
    protected $apr;

    /**
     * The value for the may field.
     * @var        double
     */
    protected $may;

    /**
     * The value for the jun field.
     * @var        double
     */
    protected $jun;

    /**
     * The value for the jul field.
     * @var        double
     */
    protected $jul;

    /**
     * The value for the aug field.
     * @var        double
     */
    protected $aug;

    /**
     * The value for the sep field.
     * @var        double
     */
    protected $sep;

    /**
     * The value for the oct field.
     * @var        double
     */
    protected $oct;

    /**
     * The value for the nov field.
     * @var        double
     */
    protected $nov;

    /**
     * The value for the dec field.
     * @var        double
     */
    protected $dec;

    /**
     * The value for the gsi field.
     * @var        int
     */
    protected $gsi;

    /**
     * The value for the percentfemales field.
     * @var        int
     */
    protected $percentfemales;

    /**
     * The value for the templow field.
     * @var        double
     */
    protected $templow;

    /**
     * The value for the temphigh field.
     * @var        double
     */
    protected $temphigh;

    /**
     * The value for the sexratiomid field.
     * @var        double
     */
    protected $sexratiomid;

    /**
     * The value for the sexrmodref field.
     * @var        int
     */
    protected $sexrmodref;

    /**
     * The value for the fecunditymin field.
     * @var        int
     */
    protected $fecunditymin;

    /**
     * The value for the weightmin field.
     * @var        double
     */
    protected $weightmin;

    /**
     * The value for the lengthfecunmin field.
     * @var        double
     */
    protected $lengthfecunmin;

    /**
     * The value for the lengthtypefecmin field.
     * @var        string
     */
    protected $lengthtypefecmin;

    /**
     * The value for the fecundityref field.
     * @var        int
     */
    protected $fecundityref;

    /**
     * The value for the fecunditymax field.
     * @var        int
     */
    protected $fecunditymax;

    /**
     * The value for the weightmax field.
     * @var        double
     */
    protected $weightmax;

    /**
     * The value for the lengthfecunmax field.
     * @var        double
     */
    protected $lengthfecunmax;

    /**
     * The value for the lengthtypefecmax field.
     * @var        string
     */
    protected $lengthtypefecmax;

    /**
     * The value for the feccomment field.
     * @var        string
     */
    protected $feccomment;

    /**
     * The value for the spawningcycles field.
     * Note: this column has a database default value of: 1
     * @var        double
     */
    protected $spawningcycles;

    /**
     * The value for the spcycleref field.
     * @var        int
     */
    protected $spcycleref;

    /**
     * The value for the gestationmin field.
     * @var        int
     */
    protected $gestationmin;

    /**
     * The value for the gestationminref field.
     * @var        int
     */
    protected $gestationminref;

    /**
     * The value for the gestationmax field.
     * @var        int
     */
    protected $gestationmax;

    /**
     * The value for the gestationmaxref field.
     * @var        int
     */
    protected $gestationmaxref;

    /**
     * The value for the lengthoffspringmin field.
     * @var        double
     */
    protected $lengthoffspringmin;

    /**
     * The value for the lengthoffminref field.
     * @var        int
     */
    protected $lengthoffminref;

    /**
     * The value for the lengthoffspringmax field.
     * @var        double
     */
    protected $lengthoffspringmax;

    /**
     * The value for the lengthoffmaxref field.
     * @var        int
     */
    protected $lengthoffmaxref;

    /**
     * The value for the relfecunditymin field.
     * @var        int
     */
    protected $relfecunditymin;

    /**
     * The value for the fecunminref field.
     * @var        int
     */
    protected $fecunminref;

    /**
     * The value for the relfecunditymean field.
     * @var        int
     */
    protected $relfecunditymean;

    /**
     * The value for the fecunmeanref field.
     * @var        int
     */
    protected $fecunmeanref;

    /**
     * The value for the relfecunditymax field.
     * @var        int
     */
    protected $relfecunditymax;

    /**
     * The value for the fecunmaxref field.
     * @var        int
     */
    protected $fecunmaxref;

    /**
     * The value for the lengthmin field.
     * @var        double
     */
    protected $lengthmin;

    /**
     * The value for the lengthmax field.
     * @var        double
     */
    protected $lengthmax;

    /**
     * The value for the lengthtype field.
     * @var        string
     */
    protected $lengthtype;

    /**
     * The value for the number field.
     * @var        int
     */
    protected $number;

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
     * The value for the corrcoeff field.
     * @var        double
     */
    protected $corrcoeff;

    /**
     * The value for the dailyspawnmin field.
     * @var        double
     */
    protected $dailyspawnmin;

    /**
     * The value for the spawnminref field.
     * @var        int
     */
    protected $spawnminref;

    /**
     * The value for the dailyspawnmean field.
     * @var        double
     */
    protected $dailyspawnmean;

    /**
     * The value for the spawnmeanref field.
     * @var        int
     */
    protected $spawnmeanref;

    /**
     * The value for the dailyspawnmax field.
     * @var        double
     */
    protected $dailyspawnmax;

    /**
     * The value for the spawnmaxref field.
     * @var        int
     */
    protected $spawnmaxref;

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
     * The value for the addinfos field.
     * @var        string
     */
    protected $addinfos;

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
        $this->spawningcycles = 1;
    }

    /**
     * Initializes internal state of BaseSpawning object.
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
     * Get the [spawningrefno] column value.
     *
     * @return int
     */
    public function getSpawningrefno()
    {

        return $this->spawningrefno;
    }

    /**
     * Get the [sourceref] column value.
     *
     * @return int
     */
    public function getSourceref()
    {

        return $this->sourceref;
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
     * Get the [spawningground] column value.
     *
     * @return string
     */
    public function getSpawningground()
    {

        return $this->spawningground;
    }

    /**
     * Get the [spawningarea] column value.
     *
     * @return string
     */
    public function getSpawningarea()
    {

        return $this->spawningarea;
    }

    /**
     * Get the [jan] column value.
     *
     * @return double
     */
    public function getJan()
    {

        return $this->jan;
    }

    /**
     * Get the [feb] column value.
     *
     * @return double
     */
    public function getFeb()
    {

        return $this->feb;
    }

    /**
     * Get the [mar] column value.
     *
     * @return double
     */
    public function getMar()
    {

        return $this->mar;
    }

    /**
     * Get the [apr] column value.
     *
     * @return double
     */
    public function getApr()
    {

        return $this->apr;
    }

    /**
     * Get the [may] column value.
     *
     * @return double
     */
    public function getMay()
    {

        return $this->may;
    }

    /**
     * Get the [jun] column value.
     *
     * @return double
     */
    public function getJun()
    {

        return $this->jun;
    }

    /**
     * Get the [jul] column value.
     *
     * @return double
     */
    public function getJul()
    {

        return $this->jul;
    }

    /**
     * Get the [aug] column value.
     *
     * @return double
     */
    public function getAug()
    {

        return $this->aug;
    }

    /**
     * Get the [sep] column value.
     *
     * @return double
     */
    public function getSep()
    {

        return $this->sep;
    }

    /**
     * Get the [oct] column value.
     *
     * @return double
     */
    public function getOct()
    {

        return $this->oct;
    }

    /**
     * Get the [nov] column value.
     *
     * @return double
     */
    public function getNov()
    {

        return $this->nov;
    }

    /**
     * Get the [dec] column value.
     *
     * @return double
     */
    public function getDec()
    {

        return $this->dec;
    }

    /**
     * Get the [gsi] column value.
     *
     * @return int
     */
    public function getGsi()
    {

        return $this->gsi;
    }

    /**
     * Get the [percentfemales] column value.
     *
     * @return int
     */
    public function getPercentfemales()
    {

        return $this->percentfemales;
    }

    /**
     * Get the [templow] column value.
     *
     * @return double
     */
    public function getTemplow()
    {

        return $this->templow;
    }

    /**
     * Get the [temphigh] column value.
     *
     * @return double
     */
    public function getTemphigh()
    {

        return $this->temphigh;
    }

    /**
     * Get the [sexratiomid] column value.
     *
     * @return double
     */
    public function getSexratiomid()
    {

        return $this->sexratiomid;
    }

    /**
     * Get the [sexrmodref] column value.
     *
     * @return int
     */
    public function getSexrmodref()
    {

        return $this->sexrmodref;
    }

    /**
     * Get the [fecunditymin] column value.
     *
     * @return int
     */
    public function getFecunditymin()
    {

        return $this->fecunditymin;
    }

    /**
     * Get the [weightmin] column value.
     *
     * @return double
     */
    public function getWeightmin()
    {

        return $this->weightmin;
    }

    /**
     * Get the [lengthfecunmin] column value.
     *
     * @return double
     */
    public function getLengthfecunmin()
    {

        return $this->lengthfecunmin;
    }

    /**
     * Get the [lengthtypefecmin] column value.
     *
     * @return string
     */
    public function getLengthtypefecmin()
    {

        return $this->lengthtypefecmin;
    }

    /**
     * Get the [fecundityref] column value.
     *
     * @return int
     */
    public function getFecundityref()
    {

        return $this->fecundityref;
    }

    /**
     * Get the [fecunditymax] column value.
     *
     * @return int
     */
    public function getFecunditymax()
    {

        return $this->fecunditymax;
    }

    /**
     * Get the [weightmax] column value.
     *
     * @return double
     */
    public function getWeightmax()
    {

        return $this->weightmax;
    }

    /**
     * Get the [lengthfecunmax] column value.
     *
     * @return double
     */
    public function getLengthfecunmax()
    {

        return $this->lengthfecunmax;
    }

    /**
     * Get the [lengthtypefecmax] column value.
     *
     * @return string
     */
    public function getLengthtypefecmax()
    {

        return $this->lengthtypefecmax;
    }

    /**
     * Get the [feccomment] column value.
     *
     * @return string
     */
    public function getFeccomment()
    {

        return $this->feccomment;
    }

    /**
     * Get the [spawningcycles] column value.
     *
     * @return double
     */
    public function getSpawningcycles()
    {

        return $this->spawningcycles;
    }

    /**
     * Get the [spcycleref] column value.
     *
     * @return int
     */
    public function getSpcycleref()
    {

        return $this->spcycleref;
    }

    /**
     * Get the [gestationmin] column value.
     *
     * @return int
     */
    public function getGestationmin()
    {

        return $this->gestationmin;
    }

    /**
     * Get the [gestationminref] column value.
     *
     * @return int
     */
    public function getGestationminref()
    {

        return $this->gestationminref;
    }

    /**
     * Get the [gestationmax] column value.
     *
     * @return int
     */
    public function getGestationmax()
    {

        return $this->gestationmax;
    }

    /**
     * Get the [gestationmaxref] column value.
     *
     * @return int
     */
    public function getGestationmaxref()
    {

        return $this->gestationmaxref;
    }

    /**
     * Get the [lengthoffspringmin] column value.
     *
     * @return double
     */
    public function getLengthoffspringmin()
    {

        return $this->lengthoffspringmin;
    }

    /**
     * Get the [lengthoffminref] column value.
     *
     * @return int
     */
    public function getLengthoffminref()
    {

        return $this->lengthoffminref;
    }

    /**
     * Get the [lengthoffspringmax] column value.
     *
     * @return double
     */
    public function getLengthoffspringmax()
    {

        return $this->lengthoffspringmax;
    }

    /**
     * Get the [lengthoffmaxref] column value.
     *
     * @return int
     */
    public function getLengthoffmaxref()
    {

        return $this->lengthoffmaxref;
    }

    /**
     * Get the [relfecunditymin] column value.
     *
     * @return int
     */
    public function getRelfecunditymin()
    {

        return $this->relfecunditymin;
    }

    /**
     * Get the [fecunminref] column value.
     *
     * @return int
     */
    public function getFecunminref()
    {

        return $this->fecunminref;
    }

    /**
     * Get the [relfecunditymean] column value.
     *
     * @return int
     */
    public function getRelfecunditymean()
    {

        return $this->relfecunditymean;
    }

    /**
     * Get the [fecunmeanref] column value.
     *
     * @return int
     */
    public function getFecunmeanref()
    {

        return $this->fecunmeanref;
    }

    /**
     * Get the [relfecunditymax] column value.
     *
     * @return int
     */
    public function getRelfecunditymax()
    {

        return $this->relfecunditymax;
    }

    /**
     * Get the [fecunmaxref] column value.
     *
     * @return int
     */
    public function getFecunmaxref()
    {

        return $this->fecunmaxref;
    }

    /**
     * Get the [lengthmin] column value.
     *
     * @return double
     */
    public function getLengthmin()
    {

        return $this->lengthmin;
    }

    /**
     * Get the [lengthmax] column value.
     *
     * @return double
     */
    public function getLengthmax()
    {

        return $this->lengthmax;
    }

    /**
     * Get the [lengthtype] column value.
     *
     * @return string
     */
    public function getLengthtype()
    {

        return $this->lengthtype;
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
     * Get the [corrcoeff] column value.
     *
     * @return double
     */
    public function getCorrcoeff()
    {

        return $this->corrcoeff;
    }

    /**
     * Get the [dailyspawnmin] column value.
     *
     * @return double
     */
    public function getDailyspawnmin()
    {

        return $this->dailyspawnmin;
    }

    /**
     * Get the [spawnminref] column value.
     *
     * @return int
     */
    public function getSpawnminref()
    {

        return $this->spawnminref;
    }

    /**
     * Get the [dailyspawnmean] column value.
     *
     * @return double
     */
    public function getDailyspawnmean()
    {

        return $this->dailyspawnmean;
    }

    /**
     * Get the [spawnmeanref] column value.
     *
     * @return int
     */
    public function getSpawnmeanref()
    {

        return $this->spawnmeanref;
    }

    /**
     * Get the [dailyspawnmax] column value.
     *
     * @return double
     */
    public function getDailyspawnmax()
    {

        return $this->dailyspawnmax;
    }

    /**
     * Get the [spawnmaxref] column value.
     *
     * @return int
     */
    public function getSpawnmaxref()
    {

        return $this->spawnmaxref;
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
     * Get the [addinfos] column value.
     *
     * @return string
     */
    public function getAddinfos()
    {

        return $this->addinfos;
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
     * @return Spawning The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = SpawningPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = SpawningPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = SpawningPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [spawningrefno] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setSpawningrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spawningrefno !== $v) {
            $this->spawningrefno = $v;
            $this->modifiedColumns[] = SpawningPeer::SPAWNINGREFNO;
        }


        return $this;
    } // setSpawningrefno()

    /**
     * Set the value of [sourceref] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setSourceref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sourceref !== $v) {
            $this->sourceref = $v;
            $this->modifiedColumns[] = SpawningPeer::SOURCEREF;
        }


        return $this;
    } // setSourceref()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = SpawningPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [e_code] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setECode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->e_code !== $v) {
            $this->e_code = $v;
            $this->modifiedColumns[] = SpawningPeer::E_CODE;
        }


        return $this;
    } // setECode()

    /**
     * Set the value of [spawningground] column.
     *
     * @param  string $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setSpawningground($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->spawningground !== $v) {
            $this->spawningground = $v;
            $this->modifiedColumns[] = SpawningPeer::SPAWNINGGROUND;
        }


        return $this;
    } // setSpawningground()

    /**
     * Set the value of [spawningarea] column.
     *
     * @param  string $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setSpawningarea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->spawningarea !== $v) {
            $this->spawningarea = $v;
            $this->modifiedColumns[] = SpawningPeer::SPAWNINGAREA;
        }


        return $this;
    } // setSpawningarea()

    /**
     * Set the value of [jan] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setJan($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->jan !== $v) {
            $this->jan = $v;
            $this->modifiedColumns[] = SpawningPeer::JAN;
        }


        return $this;
    } // setJan()

    /**
     * Set the value of [feb] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setFeb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->feb !== $v) {
            $this->feb = $v;
            $this->modifiedColumns[] = SpawningPeer::FEB;
        }


        return $this;
    } // setFeb()

    /**
     * Set the value of [mar] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setMar($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->mar !== $v) {
            $this->mar = $v;
            $this->modifiedColumns[] = SpawningPeer::MAR;
        }


        return $this;
    } // setMar()

    /**
     * Set the value of [apr] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setApr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->apr !== $v) {
            $this->apr = $v;
            $this->modifiedColumns[] = SpawningPeer::APR;
        }


        return $this;
    } // setApr()

    /**
     * Set the value of [may] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setMay($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->may !== $v) {
            $this->may = $v;
            $this->modifiedColumns[] = SpawningPeer::MAY;
        }


        return $this;
    } // setMay()

    /**
     * Set the value of [jun] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setJun($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->jun !== $v) {
            $this->jun = $v;
            $this->modifiedColumns[] = SpawningPeer::JUN;
        }


        return $this;
    } // setJun()

    /**
     * Set the value of [jul] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setJul($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->jul !== $v) {
            $this->jul = $v;
            $this->modifiedColumns[] = SpawningPeer::JUL;
        }


        return $this;
    } // setJul()

    /**
     * Set the value of [aug] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setAug($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->aug !== $v) {
            $this->aug = $v;
            $this->modifiedColumns[] = SpawningPeer::AUG;
        }


        return $this;
    } // setAug()

    /**
     * Set the value of [sep] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setSep($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sep !== $v) {
            $this->sep = $v;
            $this->modifiedColumns[] = SpawningPeer::SEP;
        }


        return $this;
    } // setSep()

    /**
     * Set the value of [oct] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setOct($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oct !== $v) {
            $this->oct = $v;
            $this->modifiedColumns[] = SpawningPeer::OCT;
        }


        return $this;
    } // setOct()

    /**
     * Set the value of [nov] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setNov($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->nov !== $v) {
            $this->nov = $v;
            $this->modifiedColumns[] = SpawningPeer::NOV;
        }


        return $this;
    } // setNov()

    /**
     * Set the value of [dec] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setDec($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->dec !== $v) {
            $this->dec = $v;
            $this->modifiedColumns[] = SpawningPeer::DEC;
        }


        return $this;
    } // setDec()

    /**
     * Set the value of [gsi] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setGsi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gsi !== $v) {
            $this->gsi = $v;
            $this->modifiedColumns[] = SpawningPeer::GSI;
        }


        return $this;
    } // setGsi()

    /**
     * Set the value of [percentfemales] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setPercentfemales($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->percentfemales !== $v) {
            $this->percentfemales = $v;
            $this->modifiedColumns[] = SpawningPeer::PERCENTFEMALES;
        }


        return $this;
    } // setPercentfemales()

    /**
     * Set the value of [templow] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setTemplow($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->templow !== $v) {
            $this->templow = $v;
            $this->modifiedColumns[] = SpawningPeer::TEMPLOW;
        }


        return $this;
    } // setTemplow()

    /**
     * Set the value of [temphigh] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setTemphigh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->temphigh !== $v) {
            $this->temphigh = $v;
            $this->modifiedColumns[] = SpawningPeer::TEMPHIGH;
        }


        return $this;
    } // setTemphigh()

    /**
     * Set the value of [sexratiomid] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setSexratiomid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sexratiomid !== $v) {
            $this->sexratiomid = $v;
            $this->modifiedColumns[] = SpawningPeer::SEXRATIOMID;
        }


        return $this;
    } // setSexratiomid()

    /**
     * Set the value of [sexrmodref] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setSexrmodref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sexrmodref !== $v) {
            $this->sexrmodref = $v;
            $this->modifiedColumns[] = SpawningPeer::SEXRMODREF;
        }


        return $this;
    } // setSexrmodref()

    /**
     * Set the value of [fecunditymin] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setFecunditymin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fecunditymin !== $v) {
            $this->fecunditymin = $v;
            $this->modifiedColumns[] = SpawningPeer::FECUNDITYMIN;
        }


        return $this;
    } // setFecunditymin()

    /**
     * Set the value of [weightmin] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setWeightmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->weightmin !== $v) {
            $this->weightmin = $v;
            $this->modifiedColumns[] = SpawningPeer::WEIGHTMIN;
        }


        return $this;
    } // setWeightmin()

    /**
     * Set the value of [lengthfecunmin] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setLengthfecunmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lengthfecunmin !== $v) {
            $this->lengthfecunmin = $v;
            $this->modifiedColumns[] = SpawningPeer::LENGTHFECUNMIN;
        }


        return $this;
    } // setLengthfecunmin()

    /**
     * Set the value of [lengthtypefecmin] column.
     *
     * @param  string $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setLengthtypefecmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lengthtypefecmin !== $v) {
            $this->lengthtypefecmin = $v;
            $this->modifiedColumns[] = SpawningPeer::LENGTHTYPEFECMIN;
        }


        return $this;
    } // setLengthtypefecmin()

    /**
     * Set the value of [fecundityref] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setFecundityref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fecundityref !== $v) {
            $this->fecundityref = $v;
            $this->modifiedColumns[] = SpawningPeer::FECUNDITYREF;
        }


        return $this;
    } // setFecundityref()

    /**
     * Set the value of [fecunditymax] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setFecunditymax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fecunditymax !== $v) {
            $this->fecunditymax = $v;
            $this->modifiedColumns[] = SpawningPeer::FECUNDITYMAX;
        }


        return $this;
    } // setFecunditymax()

    /**
     * Set the value of [weightmax] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setWeightmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->weightmax !== $v) {
            $this->weightmax = $v;
            $this->modifiedColumns[] = SpawningPeer::WEIGHTMAX;
        }


        return $this;
    } // setWeightmax()

    /**
     * Set the value of [lengthfecunmax] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setLengthfecunmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lengthfecunmax !== $v) {
            $this->lengthfecunmax = $v;
            $this->modifiedColumns[] = SpawningPeer::LENGTHFECUNMAX;
        }


        return $this;
    } // setLengthfecunmax()

    /**
     * Set the value of [lengthtypefecmax] column.
     *
     * @param  string $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setLengthtypefecmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lengthtypefecmax !== $v) {
            $this->lengthtypefecmax = $v;
            $this->modifiedColumns[] = SpawningPeer::LENGTHTYPEFECMAX;
        }


        return $this;
    } // setLengthtypefecmax()

    /**
     * Set the value of [feccomment] column.
     *
     * @param  string $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setFeccomment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->feccomment !== $v) {
            $this->feccomment = $v;
            $this->modifiedColumns[] = SpawningPeer::FECCOMMENT;
        }


        return $this;
    } // setFeccomment()

    /**
     * Set the value of [spawningcycles] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setSpawningcycles($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->spawningcycles !== $v) {
            $this->spawningcycles = $v;
            $this->modifiedColumns[] = SpawningPeer::SPAWNINGCYCLES;
        }


        return $this;
    } // setSpawningcycles()

    /**
     * Set the value of [spcycleref] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setSpcycleref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spcycleref !== $v) {
            $this->spcycleref = $v;
            $this->modifiedColumns[] = SpawningPeer::SPCYCLEREF;
        }


        return $this;
    } // setSpcycleref()

    /**
     * Set the value of [gestationmin] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setGestationmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gestationmin !== $v) {
            $this->gestationmin = $v;
            $this->modifiedColumns[] = SpawningPeer::GESTATIONMIN;
        }


        return $this;
    } // setGestationmin()

    /**
     * Set the value of [gestationminref] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setGestationminref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gestationminref !== $v) {
            $this->gestationminref = $v;
            $this->modifiedColumns[] = SpawningPeer::GESTATIONMINREF;
        }


        return $this;
    } // setGestationminref()

    /**
     * Set the value of [gestationmax] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setGestationmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gestationmax !== $v) {
            $this->gestationmax = $v;
            $this->modifiedColumns[] = SpawningPeer::GESTATIONMAX;
        }


        return $this;
    } // setGestationmax()

    /**
     * Set the value of [gestationmaxref] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setGestationmaxref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gestationmaxref !== $v) {
            $this->gestationmaxref = $v;
            $this->modifiedColumns[] = SpawningPeer::GESTATIONMAXREF;
        }


        return $this;
    } // setGestationmaxref()

    /**
     * Set the value of [lengthoffspringmin] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setLengthoffspringmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lengthoffspringmin !== $v) {
            $this->lengthoffspringmin = $v;
            $this->modifiedColumns[] = SpawningPeer::LENGTHOFFSPRINGMIN;
        }


        return $this;
    } // setLengthoffspringmin()

    /**
     * Set the value of [lengthoffminref] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setLengthoffminref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lengthoffminref !== $v) {
            $this->lengthoffminref = $v;
            $this->modifiedColumns[] = SpawningPeer::LENGTHOFFMINREF;
        }


        return $this;
    } // setLengthoffminref()

    /**
     * Set the value of [lengthoffspringmax] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setLengthoffspringmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lengthoffspringmax !== $v) {
            $this->lengthoffspringmax = $v;
            $this->modifiedColumns[] = SpawningPeer::LENGTHOFFSPRINGMAX;
        }


        return $this;
    } // setLengthoffspringmax()

    /**
     * Set the value of [lengthoffmaxref] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setLengthoffmaxref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lengthoffmaxref !== $v) {
            $this->lengthoffmaxref = $v;
            $this->modifiedColumns[] = SpawningPeer::LENGTHOFFMAXREF;
        }


        return $this;
    } // setLengthoffmaxref()

    /**
     * Set the value of [relfecunditymin] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setRelfecunditymin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->relfecunditymin !== $v) {
            $this->relfecunditymin = $v;
            $this->modifiedColumns[] = SpawningPeer::RELFECUNDITYMIN;
        }


        return $this;
    } // setRelfecunditymin()

    /**
     * Set the value of [fecunminref] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setFecunminref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fecunminref !== $v) {
            $this->fecunminref = $v;
            $this->modifiedColumns[] = SpawningPeer::FECUNMINREF;
        }


        return $this;
    } // setFecunminref()

    /**
     * Set the value of [relfecunditymean] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setRelfecunditymean($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->relfecunditymean !== $v) {
            $this->relfecunditymean = $v;
            $this->modifiedColumns[] = SpawningPeer::RELFECUNDITYMEAN;
        }


        return $this;
    } // setRelfecunditymean()

    /**
     * Set the value of [fecunmeanref] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setFecunmeanref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fecunmeanref !== $v) {
            $this->fecunmeanref = $v;
            $this->modifiedColumns[] = SpawningPeer::FECUNMEANREF;
        }


        return $this;
    } // setFecunmeanref()

    /**
     * Set the value of [relfecunditymax] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setRelfecunditymax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->relfecunditymax !== $v) {
            $this->relfecunditymax = $v;
            $this->modifiedColumns[] = SpawningPeer::RELFECUNDITYMAX;
        }


        return $this;
    } // setRelfecunditymax()

    /**
     * Set the value of [fecunmaxref] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setFecunmaxref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fecunmaxref !== $v) {
            $this->fecunmaxref = $v;
            $this->modifiedColumns[] = SpawningPeer::FECUNMAXREF;
        }


        return $this;
    } // setFecunmaxref()

    /**
     * Set the value of [lengthmin] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setLengthmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lengthmin !== $v) {
            $this->lengthmin = $v;
            $this->modifiedColumns[] = SpawningPeer::LENGTHMIN;
        }


        return $this;
    } // setLengthmin()

    /**
     * Set the value of [lengthmax] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setLengthmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lengthmax !== $v) {
            $this->lengthmax = $v;
            $this->modifiedColumns[] = SpawningPeer::LENGTHMAX;
        }


        return $this;
    } // setLengthmax()

    /**
     * Set the value of [lengthtype] column.
     *
     * @param  string $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setLengthtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lengthtype !== $v) {
            $this->lengthtype = $v;
            $this->modifiedColumns[] = SpawningPeer::LENGTHTYPE;
        }


        return $this;
    } // setLengthtype()

    /**
     * Set the value of [number] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setNumber($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->number !== $v) {
            $this->number = $v;
            $this->modifiedColumns[] = SpawningPeer::NUMBER;
        }


        return $this;
    } // setNumber()

    /**
     * Set the value of [a] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setA($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->a !== $v) {
            $this->a = $v;
            $this->modifiedColumns[] = SpawningPeer::A;
        }


        return $this;
    } // setA()

    /**
     * Set the value of [b] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setB($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->b !== $v) {
            $this->b = $v;
            $this->modifiedColumns[] = SpawningPeer::B;
        }


        return $this;
    } // setB()

    /**
     * Set the value of [corrcoeff] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setCorrcoeff($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->corrcoeff !== $v) {
            $this->corrcoeff = $v;
            $this->modifiedColumns[] = SpawningPeer::CORRCOEFF;
        }


        return $this;
    } // setCorrcoeff()

    /**
     * Set the value of [dailyspawnmin] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setDailyspawnmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->dailyspawnmin !== $v) {
            $this->dailyspawnmin = $v;
            $this->modifiedColumns[] = SpawningPeer::DAILYSPAWNMIN;
        }


        return $this;
    } // setDailyspawnmin()

    /**
     * Set the value of [spawnminref] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setSpawnminref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spawnminref !== $v) {
            $this->spawnminref = $v;
            $this->modifiedColumns[] = SpawningPeer::SPAWNMINREF;
        }


        return $this;
    } // setSpawnminref()

    /**
     * Set the value of [dailyspawnmean] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setDailyspawnmean($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->dailyspawnmean !== $v) {
            $this->dailyspawnmean = $v;
            $this->modifiedColumns[] = SpawningPeer::DAILYSPAWNMEAN;
        }


        return $this;
    } // setDailyspawnmean()

    /**
     * Set the value of [spawnmeanref] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setSpawnmeanref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spawnmeanref !== $v) {
            $this->spawnmeanref = $v;
            $this->modifiedColumns[] = SpawningPeer::SPAWNMEANREF;
        }


        return $this;
    } // setSpawnmeanref()

    /**
     * Set the value of [dailyspawnmax] column.
     *
     * @param  double $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setDailyspawnmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->dailyspawnmax !== $v) {
            $this->dailyspawnmax = $v;
            $this->modifiedColumns[] = SpawningPeer::DAILYSPAWNMAX;
        }


        return $this;
    } // setDailyspawnmax()

    /**
     * Set the value of [spawnmaxref] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setSpawnmaxref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spawnmaxref !== $v) {
            $this->spawnmaxref = $v;
            $this->modifiedColumns[] = SpawningPeer::SPAWNMAXREF;
        }


        return $this;
    } // setSpawnmaxref()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = SpawningPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Spawning The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = SpawningPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = SpawningPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Spawning The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = SpawningPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = SpawningPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Spawning The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = SpawningPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [addinfos] column.
     *
     * @param  string $v new value
     * @return Spawning The current object (for fluent API support)
     */
    public function setAddinfos($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->addinfos !== $v) {
            $this->addinfos = $v;
            $this->modifiedColumns[] = SpawningPeer::ADDINFOS;
        }


        return $this;
    } // setAddinfos()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Spawning The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = SpawningPeer::TS;
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
            if ($this->spawningcycles !== 1) {
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
            $this->stockcode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->speccode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->spawningrefno = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->sourceref = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->c_code = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->e_code = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->spawningground = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->spawningarea = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->jan = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->feb = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->mar = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->apr = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->may = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->jun = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->jul = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
            $this->aug = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->sep = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->oct = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->nov = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->dec = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->gsi = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->percentfemales = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->templow = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
            $this->temphigh = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
            $this->sexratiomid = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->sexrmodref = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->fecunditymin = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->weightmin = ($row[$startcol + 28] !== null) ? (double) $row[$startcol + 28] : null;
            $this->lengthfecunmin = ($row[$startcol + 29] !== null) ? (double) $row[$startcol + 29] : null;
            $this->lengthtypefecmin = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->fecundityref = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->fecunditymax = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->weightmax = ($row[$startcol + 33] !== null) ? (double) $row[$startcol + 33] : null;
            $this->lengthfecunmax = ($row[$startcol + 34] !== null) ? (double) $row[$startcol + 34] : null;
            $this->lengthtypefecmax = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->feccomment = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->spawningcycles = ($row[$startcol + 37] !== null) ? (double) $row[$startcol + 37] : null;
            $this->spcycleref = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->gestationmin = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->gestationminref = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->gestationmax = ($row[$startcol + 41] !== null) ? (int) $row[$startcol + 41] : null;
            $this->gestationmaxref = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->lengthoffspringmin = ($row[$startcol + 43] !== null) ? (double) $row[$startcol + 43] : null;
            $this->lengthoffminref = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->lengthoffspringmax = ($row[$startcol + 45] !== null) ? (double) $row[$startcol + 45] : null;
            $this->lengthoffmaxref = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->relfecunditymin = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->fecunminref = ($row[$startcol + 48] !== null) ? (int) $row[$startcol + 48] : null;
            $this->relfecunditymean = ($row[$startcol + 49] !== null) ? (int) $row[$startcol + 49] : null;
            $this->fecunmeanref = ($row[$startcol + 50] !== null) ? (int) $row[$startcol + 50] : null;
            $this->relfecunditymax = ($row[$startcol + 51] !== null) ? (int) $row[$startcol + 51] : null;
            $this->fecunmaxref = ($row[$startcol + 52] !== null) ? (int) $row[$startcol + 52] : null;
            $this->lengthmin = ($row[$startcol + 53] !== null) ? (double) $row[$startcol + 53] : null;
            $this->lengthmax = ($row[$startcol + 54] !== null) ? (double) $row[$startcol + 54] : null;
            $this->lengthtype = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->number = ($row[$startcol + 56] !== null) ? (int) $row[$startcol + 56] : null;
            $this->a = ($row[$startcol + 57] !== null) ? (double) $row[$startcol + 57] : null;
            $this->b = ($row[$startcol + 58] !== null) ? (double) $row[$startcol + 58] : null;
            $this->corrcoeff = ($row[$startcol + 59] !== null) ? (double) $row[$startcol + 59] : null;
            $this->dailyspawnmin = ($row[$startcol + 60] !== null) ? (double) $row[$startcol + 60] : null;
            $this->spawnminref = ($row[$startcol + 61] !== null) ? (int) $row[$startcol + 61] : null;
            $this->dailyspawnmean = ($row[$startcol + 62] !== null) ? (double) $row[$startcol + 62] : null;
            $this->spawnmeanref = ($row[$startcol + 63] !== null) ? (int) $row[$startcol + 63] : null;
            $this->dailyspawnmax = ($row[$startcol + 64] !== null) ? (double) $row[$startcol + 64] : null;
            $this->spawnmaxref = ($row[$startcol + 65] !== null) ? (int) $row[$startcol + 65] : null;
            $this->entered = ($row[$startcol + 66] !== null) ? (int) $row[$startcol + 66] : null;
            $this->dateentered = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->modified = ($row[$startcol + 68] !== null) ? (int) $row[$startcol + 68] : null;
            $this->datemodified = ($row[$startcol + 69] !== null) ? (string) $row[$startcol + 69] : null;
            $this->expert = ($row[$startcol + 70] !== null) ? (int) $row[$startcol + 70] : null;
            $this->datechecked = ($row[$startcol + 71] !== null) ? (string) $row[$startcol + 71] : null;
            $this->addinfos = ($row[$startcol + 72] !== null) ? (string) $row[$startcol + 72] : null;
            $this->ts = ($row[$startcol + 73] !== null) ? (string) $row[$startcol + 73] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 74; // 74 = SpawningPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Spawning object", $e);
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
            $con = Propel::getConnection(SpawningPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SpawningPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(SpawningPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SpawningQuery::create()
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
            $con = Propel::getConnection(SpawningPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                SpawningPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(SpawningPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(SpawningPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(SpawningPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(SpawningPeer::SPAWNINGREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`SpawningRefNo`';
        }
        if ($this->isColumnModified(SpawningPeer::SOURCEREF)) {
            $modifiedColumns[':p' . $index++]  = '`SourceRef`';
        }
        if ($this->isColumnModified(SpawningPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(SpawningPeer::E_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`E_CODE`';
        }
        if ($this->isColumnModified(SpawningPeer::SPAWNINGGROUND)) {
            $modifiedColumns[':p' . $index++]  = '`SpawningGround`';
        }
        if ($this->isColumnModified(SpawningPeer::SPAWNINGAREA)) {
            $modifiedColumns[':p' . $index++]  = '`Spawningarea`';
        }
        if ($this->isColumnModified(SpawningPeer::JAN)) {
            $modifiedColumns[':p' . $index++]  = '`Jan`';
        }
        if ($this->isColumnModified(SpawningPeer::FEB)) {
            $modifiedColumns[':p' . $index++]  = '`Feb`';
        }
        if ($this->isColumnModified(SpawningPeer::MAR)) {
            $modifiedColumns[':p' . $index++]  = '`Mar`';
        }
        if ($this->isColumnModified(SpawningPeer::APR)) {
            $modifiedColumns[':p' . $index++]  = '`Apr`';
        }
        if ($this->isColumnModified(SpawningPeer::MAY)) {
            $modifiedColumns[':p' . $index++]  = '`May`';
        }
        if ($this->isColumnModified(SpawningPeer::JUN)) {
            $modifiedColumns[':p' . $index++]  = '`Jun`';
        }
        if ($this->isColumnModified(SpawningPeer::JUL)) {
            $modifiedColumns[':p' . $index++]  = '`Jul`';
        }
        if ($this->isColumnModified(SpawningPeer::AUG)) {
            $modifiedColumns[':p' . $index++]  = '`Aug`';
        }
        if ($this->isColumnModified(SpawningPeer::SEP)) {
            $modifiedColumns[':p' . $index++]  = '`Sep`';
        }
        if ($this->isColumnModified(SpawningPeer::OCT)) {
            $modifiedColumns[':p' . $index++]  = '`Oct`';
        }
        if ($this->isColumnModified(SpawningPeer::NOV)) {
            $modifiedColumns[':p' . $index++]  = '`Nov`';
        }
        if ($this->isColumnModified(SpawningPeer::DEC)) {
            $modifiedColumns[':p' . $index++]  = '`Dec`';
        }
        if ($this->isColumnModified(SpawningPeer::GSI)) {
            $modifiedColumns[':p' . $index++]  = '`GSI`';
        }
        if ($this->isColumnModified(SpawningPeer::PERCENTFEMALES)) {
            $modifiedColumns[':p' . $index++]  = '`PercentFemales`';
        }
        if ($this->isColumnModified(SpawningPeer::TEMPLOW)) {
            $modifiedColumns[':p' . $index++]  = '`TempLow`';
        }
        if ($this->isColumnModified(SpawningPeer::TEMPHIGH)) {
            $modifiedColumns[':p' . $index++]  = '`TempHigh`';
        }
        if ($this->isColumnModified(SpawningPeer::SEXRATIOMID)) {
            $modifiedColumns[':p' . $index++]  = '`SexRatiomid`';
        }
        if ($this->isColumnModified(SpawningPeer::SEXRMODREF)) {
            $modifiedColumns[':p' . $index++]  = '`SexRmodRef`';
        }
        if ($this->isColumnModified(SpawningPeer::FECUNDITYMIN)) {
            $modifiedColumns[':p' . $index++]  = '`FecundityMin`';
        }
        if ($this->isColumnModified(SpawningPeer::WEIGHTMIN)) {
            $modifiedColumns[':p' . $index++]  = '`WeightMin`';
        }
        if ($this->isColumnModified(SpawningPeer::LENGTHFECUNMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LengthFecunMin`';
        }
        if ($this->isColumnModified(SpawningPeer::LENGTHTYPEFECMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LengthTypeFecMin`';
        }
        if ($this->isColumnModified(SpawningPeer::FECUNDITYREF)) {
            $modifiedColumns[':p' . $index++]  = '`FecundityRef`';
        }
        if ($this->isColumnModified(SpawningPeer::FECUNDITYMAX)) {
            $modifiedColumns[':p' . $index++]  = '`FecundityMax`';
        }
        if ($this->isColumnModified(SpawningPeer::WEIGHTMAX)) {
            $modifiedColumns[':p' . $index++]  = '`WeightMax`';
        }
        if ($this->isColumnModified(SpawningPeer::LENGTHFECUNMAX)) {
            $modifiedColumns[':p' . $index++]  = '`LengthFecunMax`';
        }
        if ($this->isColumnModified(SpawningPeer::LENGTHTYPEFECMAX)) {
            $modifiedColumns[':p' . $index++]  = '`LengthTypeFecMax`';
        }
        if ($this->isColumnModified(SpawningPeer::FECCOMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`FecComment`';
        }
        if ($this->isColumnModified(SpawningPeer::SPAWNINGCYCLES)) {
            $modifiedColumns[':p' . $index++]  = '`SpawningCycles`';
        }
        if ($this->isColumnModified(SpawningPeer::SPCYCLEREF)) {
            $modifiedColumns[':p' . $index++]  = '`SpCycleRef`';
        }
        if ($this->isColumnModified(SpawningPeer::GESTATIONMIN)) {
            $modifiedColumns[':p' . $index++]  = '`GestationMin`';
        }
        if ($this->isColumnModified(SpawningPeer::GESTATIONMINREF)) {
            $modifiedColumns[':p' . $index++]  = '`GestationMinRef`';
        }
        if ($this->isColumnModified(SpawningPeer::GESTATIONMAX)) {
            $modifiedColumns[':p' . $index++]  = '`GestationMax`';
        }
        if ($this->isColumnModified(SpawningPeer::GESTATIONMAXREF)) {
            $modifiedColumns[':p' . $index++]  = '`GestationMaxRef`';
        }
        if ($this->isColumnModified(SpawningPeer::LENGTHOFFSPRINGMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LengthOffspringMin`';
        }
        if ($this->isColumnModified(SpawningPeer::LENGTHOFFMINREF)) {
            $modifiedColumns[':p' . $index++]  = '`LengthOffMinRef`';
        }
        if ($this->isColumnModified(SpawningPeer::LENGTHOFFSPRINGMAX)) {
            $modifiedColumns[':p' . $index++]  = '`LengthOffspringMax`';
        }
        if ($this->isColumnModified(SpawningPeer::LENGTHOFFMAXREF)) {
            $modifiedColumns[':p' . $index++]  = '`LengthOffMaxRef`';
        }
        if ($this->isColumnModified(SpawningPeer::RELFECUNDITYMIN)) {
            $modifiedColumns[':p' . $index++]  = '`RelFecundityMin`';
        }
        if ($this->isColumnModified(SpawningPeer::FECUNMINREF)) {
            $modifiedColumns[':p' . $index++]  = '`FecunMinRef`';
        }
        if ($this->isColumnModified(SpawningPeer::RELFECUNDITYMEAN)) {
            $modifiedColumns[':p' . $index++]  = '`RelFecundityMean`';
        }
        if ($this->isColumnModified(SpawningPeer::FECUNMEANREF)) {
            $modifiedColumns[':p' . $index++]  = '`FecunMeanRef`';
        }
        if ($this->isColumnModified(SpawningPeer::RELFECUNDITYMAX)) {
            $modifiedColumns[':p' . $index++]  = '`RelFecundityMax`';
        }
        if ($this->isColumnModified(SpawningPeer::FECUNMAXREF)) {
            $modifiedColumns[':p' . $index++]  = '`FecunMaxRef`';
        }
        if ($this->isColumnModified(SpawningPeer::LENGTHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LengthMin`';
        }
        if ($this->isColumnModified(SpawningPeer::LENGTHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`LengthMax`';
        }
        if ($this->isColumnModified(SpawningPeer::LENGTHTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`LengthType`';
        }
        if ($this->isColumnModified(SpawningPeer::NUMBER)) {
            $modifiedColumns[':p' . $index++]  = '`Number`';
        }
        if ($this->isColumnModified(SpawningPeer::A)) {
            $modifiedColumns[':p' . $index++]  = '`a`';
        }
        if ($this->isColumnModified(SpawningPeer::B)) {
            $modifiedColumns[':p' . $index++]  = '`b`';
        }
        if ($this->isColumnModified(SpawningPeer::CORRCOEFF)) {
            $modifiedColumns[':p' . $index++]  = '`CorrCoeff`';
        }
        if ($this->isColumnModified(SpawningPeer::DAILYSPAWNMIN)) {
            $modifiedColumns[':p' . $index++]  = '`Dailyspawnmin`';
        }
        if ($this->isColumnModified(SpawningPeer::SPAWNMINREF)) {
            $modifiedColumns[':p' . $index++]  = '`SpawnMinRef`';
        }
        if ($this->isColumnModified(SpawningPeer::DAILYSPAWNMEAN)) {
            $modifiedColumns[':p' . $index++]  = '`Dailyspawnmean`';
        }
        if ($this->isColumnModified(SpawningPeer::SPAWNMEANREF)) {
            $modifiedColumns[':p' . $index++]  = '`SpawnMeanRef`';
        }
        if ($this->isColumnModified(SpawningPeer::DAILYSPAWNMAX)) {
            $modifiedColumns[':p' . $index++]  = '`Dailyspawnmax`';
        }
        if ($this->isColumnModified(SpawningPeer::SPAWNMAXREF)) {
            $modifiedColumns[':p' . $index++]  = '`SpawnMaxRef`';
        }
        if ($this->isColumnModified(SpawningPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(SpawningPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Dateentered`';
        }
        if ($this->isColumnModified(SpawningPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(SpawningPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Datemodified`';
        }
        if ($this->isColumnModified(SpawningPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(SpawningPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`Datechecked`';
        }
        if ($this->isColumnModified(SpawningPeer::ADDINFOS)) {
            $modifiedColumns[':p' . $index++]  = '`AddInfos`';
        }
        if ($this->isColumnModified(SpawningPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `spawning` (%s) VALUES (%s)',
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
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`SpawningRefNo`':
                        $stmt->bindValue($identifier, $this->spawningrefno, PDO::PARAM_INT);
                        break;
                    case '`SourceRef`':
                        $stmt->bindValue($identifier, $this->sourceref, PDO::PARAM_INT);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`E_CODE`':
                        $stmt->bindValue($identifier, $this->e_code, PDO::PARAM_INT);
                        break;
                    case '`SpawningGround`':
                        $stmt->bindValue($identifier, $this->spawningground, PDO::PARAM_STR);
                        break;
                    case '`Spawningarea`':
                        $stmt->bindValue($identifier, $this->spawningarea, PDO::PARAM_STR);
                        break;
                    case '`Jan`':
                        $stmt->bindValue($identifier, $this->jan, PDO::PARAM_STR);
                        break;
                    case '`Feb`':
                        $stmt->bindValue($identifier, $this->feb, PDO::PARAM_STR);
                        break;
                    case '`Mar`':
                        $stmt->bindValue($identifier, $this->mar, PDO::PARAM_STR);
                        break;
                    case '`Apr`':
                        $stmt->bindValue($identifier, $this->apr, PDO::PARAM_STR);
                        break;
                    case '`May`':
                        $stmt->bindValue($identifier, $this->may, PDO::PARAM_STR);
                        break;
                    case '`Jun`':
                        $stmt->bindValue($identifier, $this->jun, PDO::PARAM_STR);
                        break;
                    case '`Jul`':
                        $stmt->bindValue($identifier, $this->jul, PDO::PARAM_STR);
                        break;
                    case '`Aug`':
                        $stmt->bindValue($identifier, $this->aug, PDO::PARAM_STR);
                        break;
                    case '`Sep`':
                        $stmt->bindValue($identifier, $this->sep, PDO::PARAM_STR);
                        break;
                    case '`Oct`':
                        $stmt->bindValue($identifier, $this->oct, PDO::PARAM_STR);
                        break;
                    case '`Nov`':
                        $stmt->bindValue($identifier, $this->nov, PDO::PARAM_STR);
                        break;
                    case '`Dec`':
                        $stmt->bindValue($identifier, $this->dec, PDO::PARAM_STR);
                        break;
                    case '`GSI`':
                        $stmt->bindValue($identifier, $this->gsi, PDO::PARAM_INT);
                        break;
                    case '`PercentFemales`':
                        $stmt->bindValue($identifier, $this->percentfemales, PDO::PARAM_INT);
                        break;
                    case '`TempLow`':
                        $stmt->bindValue($identifier, $this->templow, PDO::PARAM_STR);
                        break;
                    case '`TempHigh`':
                        $stmt->bindValue($identifier, $this->temphigh, PDO::PARAM_STR);
                        break;
                    case '`SexRatiomid`':
                        $stmt->bindValue($identifier, $this->sexratiomid, PDO::PARAM_STR);
                        break;
                    case '`SexRmodRef`':
                        $stmt->bindValue($identifier, $this->sexrmodref, PDO::PARAM_INT);
                        break;
                    case '`FecundityMin`':
                        $stmt->bindValue($identifier, $this->fecunditymin, PDO::PARAM_INT);
                        break;
                    case '`WeightMin`':
                        $stmt->bindValue($identifier, $this->weightmin, PDO::PARAM_STR);
                        break;
                    case '`LengthFecunMin`':
                        $stmt->bindValue($identifier, $this->lengthfecunmin, PDO::PARAM_STR);
                        break;
                    case '`LengthTypeFecMin`':
                        $stmt->bindValue($identifier, $this->lengthtypefecmin, PDO::PARAM_STR);
                        break;
                    case '`FecundityRef`':
                        $stmt->bindValue($identifier, $this->fecundityref, PDO::PARAM_INT);
                        break;
                    case '`FecundityMax`':
                        $stmt->bindValue($identifier, $this->fecunditymax, PDO::PARAM_INT);
                        break;
                    case '`WeightMax`':
                        $stmt->bindValue($identifier, $this->weightmax, PDO::PARAM_STR);
                        break;
                    case '`LengthFecunMax`':
                        $stmt->bindValue($identifier, $this->lengthfecunmax, PDO::PARAM_STR);
                        break;
                    case '`LengthTypeFecMax`':
                        $stmt->bindValue($identifier, $this->lengthtypefecmax, PDO::PARAM_STR);
                        break;
                    case '`FecComment`':
                        $stmt->bindValue($identifier, $this->feccomment, PDO::PARAM_STR);
                        break;
                    case '`SpawningCycles`':
                        $stmt->bindValue($identifier, $this->spawningcycles, PDO::PARAM_STR);
                        break;
                    case '`SpCycleRef`':
                        $stmt->bindValue($identifier, $this->spcycleref, PDO::PARAM_INT);
                        break;
                    case '`GestationMin`':
                        $stmt->bindValue($identifier, $this->gestationmin, PDO::PARAM_INT);
                        break;
                    case '`GestationMinRef`':
                        $stmt->bindValue($identifier, $this->gestationminref, PDO::PARAM_INT);
                        break;
                    case '`GestationMax`':
                        $stmt->bindValue($identifier, $this->gestationmax, PDO::PARAM_INT);
                        break;
                    case '`GestationMaxRef`':
                        $stmt->bindValue($identifier, $this->gestationmaxref, PDO::PARAM_INT);
                        break;
                    case '`LengthOffspringMin`':
                        $stmt->bindValue($identifier, $this->lengthoffspringmin, PDO::PARAM_STR);
                        break;
                    case '`LengthOffMinRef`':
                        $stmt->bindValue($identifier, $this->lengthoffminref, PDO::PARAM_INT);
                        break;
                    case '`LengthOffspringMax`':
                        $stmt->bindValue($identifier, $this->lengthoffspringmax, PDO::PARAM_STR);
                        break;
                    case '`LengthOffMaxRef`':
                        $stmt->bindValue($identifier, $this->lengthoffmaxref, PDO::PARAM_INT);
                        break;
                    case '`RelFecundityMin`':
                        $stmt->bindValue($identifier, $this->relfecunditymin, PDO::PARAM_INT);
                        break;
                    case '`FecunMinRef`':
                        $stmt->bindValue($identifier, $this->fecunminref, PDO::PARAM_INT);
                        break;
                    case '`RelFecundityMean`':
                        $stmt->bindValue($identifier, $this->relfecunditymean, PDO::PARAM_INT);
                        break;
                    case '`FecunMeanRef`':
                        $stmt->bindValue($identifier, $this->fecunmeanref, PDO::PARAM_INT);
                        break;
                    case '`RelFecundityMax`':
                        $stmt->bindValue($identifier, $this->relfecunditymax, PDO::PARAM_INT);
                        break;
                    case '`FecunMaxRef`':
                        $stmt->bindValue($identifier, $this->fecunmaxref, PDO::PARAM_INT);
                        break;
                    case '`LengthMin`':
                        $stmt->bindValue($identifier, $this->lengthmin, PDO::PARAM_STR);
                        break;
                    case '`LengthMax`':
                        $stmt->bindValue($identifier, $this->lengthmax, PDO::PARAM_STR);
                        break;
                    case '`LengthType`':
                        $stmt->bindValue($identifier, $this->lengthtype, PDO::PARAM_STR);
                        break;
                    case '`Number`':
                        $stmt->bindValue($identifier, $this->number, PDO::PARAM_INT);
                        break;
                    case '`a`':
                        $stmt->bindValue($identifier, $this->a, PDO::PARAM_STR);
                        break;
                    case '`b`':
                        $stmt->bindValue($identifier, $this->b, PDO::PARAM_STR);
                        break;
                    case '`CorrCoeff`':
                        $stmt->bindValue($identifier, $this->corrcoeff, PDO::PARAM_STR);
                        break;
                    case '`Dailyspawnmin`':
                        $stmt->bindValue($identifier, $this->dailyspawnmin, PDO::PARAM_STR);
                        break;
                    case '`SpawnMinRef`':
                        $stmt->bindValue($identifier, $this->spawnminref, PDO::PARAM_INT);
                        break;
                    case '`Dailyspawnmean`':
                        $stmt->bindValue($identifier, $this->dailyspawnmean, PDO::PARAM_STR);
                        break;
                    case '`SpawnMeanRef`':
                        $stmt->bindValue($identifier, $this->spawnmeanref, PDO::PARAM_INT);
                        break;
                    case '`Dailyspawnmax`':
                        $stmt->bindValue($identifier, $this->dailyspawnmax, PDO::PARAM_STR);
                        break;
                    case '`SpawnMaxRef`':
                        $stmt->bindValue($identifier, $this->spawnmaxref, PDO::PARAM_INT);
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
                    case '`AddInfos`':
                        $stmt->bindValue($identifier, $this->addinfos, PDO::PARAM_STR);
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


            if (($retval = SpawningPeer::doValidate($this, $columns)) !== true) {
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
        $pos = SpawningPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getStockcode();
                break;
            case 2:
                return $this->getSpeccode();
                break;
            case 3:
                return $this->getSpawningrefno();
                break;
            case 4:
                return $this->getSourceref();
                break;
            case 5:
                return $this->getCCode();
                break;
            case 6:
                return $this->getECode();
                break;
            case 7:
                return $this->getSpawningground();
                break;
            case 8:
                return $this->getSpawningarea();
                break;
            case 9:
                return $this->getJan();
                break;
            case 10:
                return $this->getFeb();
                break;
            case 11:
                return $this->getMar();
                break;
            case 12:
                return $this->getApr();
                break;
            case 13:
                return $this->getMay();
                break;
            case 14:
                return $this->getJun();
                break;
            case 15:
                return $this->getJul();
                break;
            case 16:
                return $this->getAug();
                break;
            case 17:
                return $this->getSep();
                break;
            case 18:
                return $this->getOct();
                break;
            case 19:
                return $this->getNov();
                break;
            case 20:
                return $this->getDec();
                break;
            case 21:
                return $this->getGsi();
                break;
            case 22:
                return $this->getPercentfemales();
                break;
            case 23:
                return $this->getTemplow();
                break;
            case 24:
                return $this->getTemphigh();
                break;
            case 25:
                return $this->getSexratiomid();
                break;
            case 26:
                return $this->getSexrmodref();
                break;
            case 27:
                return $this->getFecunditymin();
                break;
            case 28:
                return $this->getWeightmin();
                break;
            case 29:
                return $this->getLengthfecunmin();
                break;
            case 30:
                return $this->getLengthtypefecmin();
                break;
            case 31:
                return $this->getFecundityref();
                break;
            case 32:
                return $this->getFecunditymax();
                break;
            case 33:
                return $this->getWeightmax();
                break;
            case 34:
                return $this->getLengthfecunmax();
                break;
            case 35:
                return $this->getLengthtypefecmax();
                break;
            case 36:
                return $this->getFeccomment();
                break;
            case 37:
                return $this->getSpawningcycles();
                break;
            case 38:
                return $this->getSpcycleref();
                break;
            case 39:
                return $this->getGestationmin();
                break;
            case 40:
                return $this->getGestationminref();
                break;
            case 41:
                return $this->getGestationmax();
                break;
            case 42:
                return $this->getGestationmaxref();
                break;
            case 43:
                return $this->getLengthoffspringmin();
                break;
            case 44:
                return $this->getLengthoffminref();
                break;
            case 45:
                return $this->getLengthoffspringmax();
                break;
            case 46:
                return $this->getLengthoffmaxref();
                break;
            case 47:
                return $this->getRelfecunditymin();
                break;
            case 48:
                return $this->getFecunminref();
                break;
            case 49:
                return $this->getRelfecunditymean();
                break;
            case 50:
                return $this->getFecunmeanref();
                break;
            case 51:
                return $this->getRelfecunditymax();
                break;
            case 52:
                return $this->getFecunmaxref();
                break;
            case 53:
                return $this->getLengthmin();
                break;
            case 54:
                return $this->getLengthmax();
                break;
            case 55:
                return $this->getLengthtype();
                break;
            case 56:
                return $this->getNumber();
                break;
            case 57:
                return $this->getA();
                break;
            case 58:
                return $this->getB();
                break;
            case 59:
                return $this->getCorrcoeff();
                break;
            case 60:
                return $this->getDailyspawnmin();
                break;
            case 61:
                return $this->getSpawnminref();
                break;
            case 62:
                return $this->getDailyspawnmean();
                break;
            case 63:
                return $this->getSpawnmeanref();
                break;
            case 64:
                return $this->getDailyspawnmax();
                break;
            case 65:
                return $this->getSpawnmaxref();
                break;
            case 66:
                return $this->getEntered();
                break;
            case 67:
                return $this->getDateentered();
                break;
            case 68:
                return $this->getModified();
                break;
            case 69:
                return $this->getDatemodified();
                break;
            case 70:
                return $this->getExpert();
                break;
            case 71:
                return $this->getDatechecked();
                break;
            case 72:
                return $this->getAddinfos();
                break;
            case 73:
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
        if (isset($alreadyDumpedObjects['Spawning'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Spawning'][serialize($this->getPrimaryKey())] = true;
        $keys = SpawningPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getStockcode(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getSpawningrefno(),
            $keys[4] => $this->getSourceref(),
            $keys[5] => $this->getCCode(),
            $keys[6] => $this->getECode(),
            $keys[7] => $this->getSpawningground(),
            $keys[8] => $this->getSpawningarea(),
            $keys[9] => $this->getJan(),
            $keys[10] => $this->getFeb(),
            $keys[11] => $this->getMar(),
            $keys[12] => $this->getApr(),
            $keys[13] => $this->getMay(),
            $keys[14] => $this->getJun(),
            $keys[15] => $this->getJul(),
            $keys[16] => $this->getAug(),
            $keys[17] => $this->getSep(),
            $keys[18] => $this->getOct(),
            $keys[19] => $this->getNov(),
            $keys[20] => $this->getDec(),
            $keys[21] => $this->getGsi(),
            $keys[22] => $this->getPercentfemales(),
            $keys[23] => $this->getTemplow(),
            $keys[24] => $this->getTemphigh(),
            $keys[25] => $this->getSexratiomid(),
            $keys[26] => $this->getSexrmodref(),
            $keys[27] => $this->getFecunditymin(),
            $keys[28] => $this->getWeightmin(),
            $keys[29] => $this->getLengthfecunmin(),
            $keys[30] => $this->getLengthtypefecmin(),
            $keys[31] => $this->getFecundityref(),
            $keys[32] => $this->getFecunditymax(),
            $keys[33] => $this->getWeightmax(),
            $keys[34] => $this->getLengthfecunmax(),
            $keys[35] => $this->getLengthtypefecmax(),
            $keys[36] => $this->getFeccomment(),
            $keys[37] => $this->getSpawningcycles(),
            $keys[38] => $this->getSpcycleref(),
            $keys[39] => $this->getGestationmin(),
            $keys[40] => $this->getGestationminref(),
            $keys[41] => $this->getGestationmax(),
            $keys[42] => $this->getGestationmaxref(),
            $keys[43] => $this->getLengthoffspringmin(),
            $keys[44] => $this->getLengthoffminref(),
            $keys[45] => $this->getLengthoffspringmax(),
            $keys[46] => $this->getLengthoffmaxref(),
            $keys[47] => $this->getRelfecunditymin(),
            $keys[48] => $this->getFecunminref(),
            $keys[49] => $this->getRelfecunditymean(),
            $keys[50] => $this->getFecunmeanref(),
            $keys[51] => $this->getRelfecunditymax(),
            $keys[52] => $this->getFecunmaxref(),
            $keys[53] => $this->getLengthmin(),
            $keys[54] => $this->getLengthmax(),
            $keys[55] => $this->getLengthtype(),
            $keys[56] => $this->getNumber(),
            $keys[57] => $this->getA(),
            $keys[58] => $this->getB(),
            $keys[59] => $this->getCorrcoeff(),
            $keys[60] => $this->getDailyspawnmin(),
            $keys[61] => $this->getSpawnminref(),
            $keys[62] => $this->getDailyspawnmean(),
            $keys[63] => $this->getSpawnmeanref(),
            $keys[64] => $this->getDailyspawnmax(),
            $keys[65] => $this->getSpawnmaxref(),
            $keys[66] => $this->getEntered(),
            $keys[67] => $this->getDateentered(),
            $keys[68] => $this->getModified(),
            $keys[69] => $this->getDatemodified(),
            $keys[70] => $this->getExpert(),
            $keys[71] => $this->getDatechecked(),
            $keys[72] => $this->getAddinfos(),
            $keys[73] => $this->getTs(),
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
        $pos = SpawningPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setStockcode($value);
                break;
            case 2:
                $this->setSpeccode($value);
                break;
            case 3:
                $this->setSpawningrefno($value);
                break;
            case 4:
                $this->setSourceref($value);
                break;
            case 5:
                $this->setCCode($value);
                break;
            case 6:
                $this->setECode($value);
                break;
            case 7:
                $this->setSpawningground($value);
                break;
            case 8:
                $this->setSpawningarea($value);
                break;
            case 9:
                $this->setJan($value);
                break;
            case 10:
                $this->setFeb($value);
                break;
            case 11:
                $this->setMar($value);
                break;
            case 12:
                $this->setApr($value);
                break;
            case 13:
                $this->setMay($value);
                break;
            case 14:
                $this->setJun($value);
                break;
            case 15:
                $this->setJul($value);
                break;
            case 16:
                $this->setAug($value);
                break;
            case 17:
                $this->setSep($value);
                break;
            case 18:
                $this->setOct($value);
                break;
            case 19:
                $this->setNov($value);
                break;
            case 20:
                $this->setDec($value);
                break;
            case 21:
                $this->setGsi($value);
                break;
            case 22:
                $this->setPercentfemales($value);
                break;
            case 23:
                $this->setTemplow($value);
                break;
            case 24:
                $this->setTemphigh($value);
                break;
            case 25:
                $this->setSexratiomid($value);
                break;
            case 26:
                $this->setSexrmodref($value);
                break;
            case 27:
                $this->setFecunditymin($value);
                break;
            case 28:
                $this->setWeightmin($value);
                break;
            case 29:
                $this->setLengthfecunmin($value);
                break;
            case 30:
                $this->setLengthtypefecmin($value);
                break;
            case 31:
                $this->setFecundityref($value);
                break;
            case 32:
                $this->setFecunditymax($value);
                break;
            case 33:
                $this->setWeightmax($value);
                break;
            case 34:
                $this->setLengthfecunmax($value);
                break;
            case 35:
                $this->setLengthtypefecmax($value);
                break;
            case 36:
                $this->setFeccomment($value);
                break;
            case 37:
                $this->setSpawningcycles($value);
                break;
            case 38:
                $this->setSpcycleref($value);
                break;
            case 39:
                $this->setGestationmin($value);
                break;
            case 40:
                $this->setGestationminref($value);
                break;
            case 41:
                $this->setGestationmax($value);
                break;
            case 42:
                $this->setGestationmaxref($value);
                break;
            case 43:
                $this->setLengthoffspringmin($value);
                break;
            case 44:
                $this->setLengthoffminref($value);
                break;
            case 45:
                $this->setLengthoffspringmax($value);
                break;
            case 46:
                $this->setLengthoffmaxref($value);
                break;
            case 47:
                $this->setRelfecunditymin($value);
                break;
            case 48:
                $this->setFecunminref($value);
                break;
            case 49:
                $this->setRelfecunditymean($value);
                break;
            case 50:
                $this->setFecunmeanref($value);
                break;
            case 51:
                $this->setRelfecunditymax($value);
                break;
            case 52:
                $this->setFecunmaxref($value);
                break;
            case 53:
                $this->setLengthmin($value);
                break;
            case 54:
                $this->setLengthmax($value);
                break;
            case 55:
                $this->setLengthtype($value);
                break;
            case 56:
                $this->setNumber($value);
                break;
            case 57:
                $this->setA($value);
                break;
            case 58:
                $this->setB($value);
                break;
            case 59:
                $this->setCorrcoeff($value);
                break;
            case 60:
                $this->setDailyspawnmin($value);
                break;
            case 61:
                $this->setSpawnminref($value);
                break;
            case 62:
                $this->setDailyspawnmean($value);
                break;
            case 63:
                $this->setSpawnmeanref($value);
                break;
            case 64:
                $this->setDailyspawnmax($value);
                break;
            case 65:
                $this->setSpawnmaxref($value);
                break;
            case 66:
                $this->setEntered($value);
                break;
            case 67:
                $this->setDateentered($value);
                break;
            case 68:
                $this->setModified($value);
                break;
            case 69:
                $this->setDatemodified($value);
                break;
            case 70:
                $this->setExpert($value);
                break;
            case 71:
                $this->setDatechecked($value);
                break;
            case 72:
                $this->setAddinfos($value);
                break;
            case 73:
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
        $keys = SpawningPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSpawningrefno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSourceref($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCCode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setECode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSpawningground($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setSpawningarea($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setJan($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setFeb($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setMar($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setApr($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setMay($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setJun($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setJul($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setAug($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setSep($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setOct($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setNov($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setDec($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setGsi($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setPercentfemales($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setTemplow($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setTemphigh($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setSexratiomid($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setSexrmodref($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setFecunditymin($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setWeightmin($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setLengthfecunmin($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setLengthtypefecmin($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setFecundityref($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setFecunditymax($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setWeightmax($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setLengthfecunmax($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setLengthtypefecmax($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setFeccomment($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setSpawningcycles($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setSpcycleref($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setGestationmin($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setGestationminref($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setGestationmax($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setGestationmaxref($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setLengthoffspringmin($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setLengthoffminref($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setLengthoffspringmax($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setLengthoffmaxref($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setRelfecunditymin($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setFecunminref($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setRelfecunditymean($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setFecunmeanref($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setRelfecunditymax($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setFecunmaxref($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setLengthmin($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setLengthmax($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setLengthtype($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setNumber($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setA($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setB($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setCorrcoeff($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setDailyspawnmin($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setSpawnminref($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setDailyspawnmean($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setSpawnmeanref($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setDailyspawnmax($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setSpawnmaxref($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setEntered($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setDateentered($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setModified($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setDatemodified($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setExpert($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setDatechecked($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setAddinfos($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setTs($arr[$keys[73]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SpawningPeer::DATABASE_NAME);

        if ($this->isColumnModified(SpawningPeer::AUTOCTR)) $criteria->add(SpawningPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(SpawningPeer::STOCKCODE)) $criteria->add(SpawningPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(SpawningPeer::SPECCODE)) $criteria->add(SpawningPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(SpawningPeer::SPAWNINGREFNO)) $criteria->add(SpawningPeer::SPAWNINGREFNO, $this->spawningrefno);
        if ($this->isColumnModified(SpawningPeer::SOURCEREF)) $criteria->add(SpawningPeer::SOURCEREF, $this->sourceref);
        if ($this->isColumnModified(SpawningPeer::C_CODE)) $criteria->add(SpawningPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(SpawningPeer::E_CODE)) $criteria->add(SpawningPeer::E_CODE, $this->e_code);
        if ($this->isColumnModified(SpawningPeer::SPAWNINGGROUND)) $criteria->add(SpawningPeer::SPAWNINGGROUND, $this->spawningground);
        if ($this->isColumnModified(SpawningPeer::SPAWNINGAREA)) $criteria->add(SpawningPeer::SPAWNINGAREA, $this->spawningarea);
        if ($this->isColumnModified(SpawningPeer::JAN)) $criteria->add(SpawningPeer::JAN, $this->jan);
        if ($this->isColumnModified(SpawningPeer::FEB)) $criteria->add(SpawningPeer::FEB, $this->feb);
        if ($this->isColumnModified(SpawningPeer::MAR)) $criteria->add(SpawningPeer::MAR, $this->mar);
        if ($this->isColumnModified(SpawningPeer::APR)) $criteria->add(SpawningPeer::APR, $this->apr);
        if ($this->isColumnModified(SpawningPeer::MAY)) $criteria->add(SpawningPeer::MAY, $this->may);
        if ($this->isColumnModified(SpawningPeer::JUN)) $criteria->add(SpawningPeer::JUN, $this->jun);
        if ($this->isColumnModified(SpawningPeer::JUL)) $criteria->add(SpawningPeer::JUL, $this->jul);
        if ($this->isColumnModified(SpawningPeer::AUG)) $criteria->add(SpawningPeer::AUG, $this->aug);
        if ($this->isColumnModified(SpawningPeer::SEP)) $criteria->add(SpawningPeer::SEP, $this->sep);
        if ($this->isColumnModified(SpawningPeer::OCT)) $criteria->add(SpawningPeer::OCT, $this->oct);
        if ($this->isColumnModified(SpawningPeer::NOV)) $criteria->add(SpawningPeer::NOV, $this->nov);
        if ($this->isColumnModified(SpawningPeer::DEC)) $criteria->add(SpawningPeer::DEC, $this->dec);
        if ($this->isColumnModified(SpawningPeer::GSI)) $criteria->add(SpawningPeer::GSI, $this->gsi);
        if ($this->isColumnModified(SpawningPeer::PERCENTFEMALES)) $criteria->add(SpawningPeer::PERCENTFEMALES, $this->percentfemales);
        if ($this->isColumnModified(SpawningPeer::TEMPLOW)) $criteria->add(SpawningPeer::TEMPLOW, $this->templow);
        if ($this->isColumnModified(SpawningPeer::TEMPHIGH)) $criteria->add(SpawningPeer::TEMPHIGH, $this->temphigh);
        if ($this->isColumnModified(SpawningPeer::SEXRATIOMID)) $criteria->add(SpawningPeer::SEXRATIOMID, $this->sexratiomid);
        if ($this->isColumnModified(SpawningPeer::SEXRMODREF)) $criteria->add(SpawningPeer::SEXRMODREF, $this->sexrmodref);
        if ($this->isColumnModified(SpawningPeer::FECUNDITYMIN)) $criteria->add(SpawningPeer::FECUNDITYMIN, $this->fecunditymin);
        if ($this->isColumnModified(SpawningPeer::WEIGHTMIN)) $criteria->add(SpawningPeer::WEIGHTMIN, $this->weightmin);
        if ($this->isColumnModified(SpawningPeer::LENGTHFECUNMIN)) $criteria->add(SpawningPeer::LENGTHFECUNMIN, $this->lengthfecunmin);
        if ($this->isColumnModified(SpawningPeer::LENGTHTYPEFECMIN)) $criteria->add(SpawningPeer::LENGTHTYPEFECMIN, $this->lengthtypefecmin);
        if ($this->isColumnModified(SpawningPeer::FECUNDITYREF)) $criteria->add(SpawningPeer::FECUNDITYREF, $this->fecundityref);
        if ($this->isColumnModified(SpawningPeer::FECUNDITYMAX)) $criteria->add(SpawningPeer::FECUNDITYMAX, $this->fecunditymax);
        if ($this->isColumnModified(SpawningPeer::WEIGHTMAX)) $criteria->add(SpawningPeer::WEIGHTMAX, $this->weightmax);
        if ($this->isColumnModified(SpawningPeer::LENGTHFECUNMAX)) $criteria->add(SpawningPeer::LENGTHFECUNMAX, $this->lengthfecunmax);
        if ($this->isColumnModified(SpawningPeer::LENGTHTYPEFECMAX)) $criteria->add(SpawningPeer::LENGTHTYPEFECMAX, $this->lengthtypefecmax);
        if ($this->isColumnModified(SpawningPeer::FECCOMMENT)) $criteria->add(SpawningPeer::FECCOMMENT, $this->feccomment);
        if ($this->isColumnModified(SpawningPeer::SPAWNINGCYCLES)) $criteria->add(SpawningPeer::SPAWNINGCYCLES, $this->spawningcycles);
        if ($this->isColumnModified(SpawningPeer::SPCYCLEREF)) $criteria->add(SpawningPeer::SPCYCLEREF, $this->spcycleref);
        if ($this->isColumnModified(SpawningPeer::GESTATIONMIN)) $criteria->add(SpawningPeer::GESTATIONMIN, $this->gestationmin);
        if ($this->isColumnModified(SpawningPeer::GESTATIONMINREF)) $criteria->add(SpawningPeer::GESTATIONMINREF, $this->gestationminref);
        if ($this->isColumnModified(SpawningPeer::GESTATIONMAX)) $criteria->add(SpawningPeer::GESTATIONMAX, $this->gestationmax);
        if ($this->isColumnModified(SpawningPeer::GESTATIONMAXREF)) $criteria->add(SpawningPeer::GESTATIONMAXREF, $this->gestationmaxref);
        if ($this->isColumnModified(SpawningPeer::LENGTHOFFSPRINGMIN)) $criteria->add(SpawningPeer::LENGTHOFFSPRINGMIN, $this->lengthoffspringmin);
        if ($this->isColumnModified(SpawningPeer::LENGTHOFFMINREF)) $criteria->add(SpawningPeer::LENGTHOFFMINREF, $this->lengthoffminref);
        if ($this->isColumnModified(SpawningPeer::LENGTHOFFSPRINGMAX)) $criteria->add(SpawningPeer::LENGTHOFFSPRINGMAX, $this->lengthoffspringmax);
        if ($this->isColumnModified(SpawningPeer::LENGTHOFFMAXREF)) $criteria->add(SpawningPeer::LENGTHOFFMAXREF, $this->lengthoffmaxref);
        if ($this->isColumnModified(SpawningPeer::RELFECUNDITYMIN)) $criteria->add(SpawningPeer::RELFECUNDITYMIN, $this->relfecunditymin);
        if ($this->isColumnModified(SpawningPeer::FECUNMINREF)) $criteria->add(SpawningPeer::FECUNMINREF, $this->fecunminref);
        if ($this->isColumnModified(SpawningPeer::RELFECUNDITYMEAN)) $criteria->add(SpawningPeer::RELFECUNDITYMEAN, $this->relfecunditymean);
        if ($this->isColumnModified(SpawningPeer::FECUNMEANREF)) $criteria->add(SpawningPeer::FECUNMEANREF, $this->fecunmeanref);
        if ($this->isColumnModified(SpawningPeer::RELFECUNDITYMAX)) $criteria->add(SpawningPeer::RELFECUNDITYMAX, $this->relfecunditymax);
        if ($this->isColumnModified(SpawningPeer::FECUNMAXREF)) $criteria->add(SpawningPeer::FECUNMAXREF, $this->fecunmaxref);
        if ($this->isColumnModified(SpawningPeer::LENGTHMIN)) $criteria->add(SpawningPeer::LENGTHMIN, $this->lengthmin);
        if ($this->isColumnModified(SpawningPeer::LENGTHMAX)) $criteria->add(SpawningPeer::LENGTHMAX, $this->lengthmax);
        if ($this->isColumnModified(SpawningPeer::LENGTHTYPE)) $criteria->add(SpawningPeer::LENGTHTYPE, $this->lengthtype);
        if ($this->isColumnModified(SpawningPeer::NUMBER)) $criteria->add(SpawningPeer::NUMBER, $this->number);
        if ($this->isColumnModified(SpawningPeer::A)) $criteria->add(SpawningPeer::A, $this->a);
        if ($this->isColumnModified(SpawningPeer::B)) $criteria->add(SpawningPeer::B, $this->b);
        if ($this->isColumnModified(SpawningPeer::CORRCOEFF)) $criteria->add(SpawningPeer::CORRCOEFF, $this->corrcoeff);
        if ($this->isColumnModified(SpawningPeer::DAILYSPAWNMIN)) $criteria->add(SpawningPeer::DAILYSPAWNMIN, $this->dailyspawnmin);
        if ($this->isColumnModified(SpawningPeer::SPAWNMINREF)) $criteria->add(SpawningPeer::SPAWNMINREF, $this->spawnminref);
        if ($this->isColumnModified(SpawningPeer::DAILYSPAWNMEAN)) $criteria->add(SpawningPeer::DAILYSPAWNMEAN, $this->dailyspawnmean);
        if ($this->isColumnModified(SpawningPeer::SPAWNMEANREF)) $criteria->add(SpawningPeer::SPAWNMEANREF, $this->spawnmeanref);
        if ($this->isColumnModified(SpawningPeer::DAILYSPAWNMAX)) $criteria->add(SpawningPeer::DAILYSPAWNMAX, $this->dailyspawnmax);
        if ($this->isColumnModified(SpawningPeer::SPAWNMAXREF)) $criteria->add(SpawningPeer::SPAWNMAXREF, $this->spawnmaxref);
        if ($this->isColumnModified(SpawningPeer::ENTERED)) $criteria->add(SpawningPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(SpawningPeer::DATEENTERED)) $criteria->add(SpawningPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(SpawningPeer::MODIFIED)) $criteria->add(SpawningPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(SpawningPeer::DATEMODIFIED)) $criteria->add(SpawningPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(SpawningPeer::EXPERT)) $criteria->add(SpawningPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(SpawningPeer::DATECHECKED)) $criteria->add(SpawningPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(SpawningPeer::ADDINFOS)) $criteria->add(SpawningPeer::ADDINFOS, $this->addinfos);
        if ($this->isColumnModified(SpawningPeer::TS)) $criteria->add(SpawningPeer::TS, $this->ts);

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
        $criteria = new Criteria(SpawningPeer::DATABASE_NAME);
        $criteria->add(SpawningPeer::STOCKCODE, $this->stockcode);
        $criteria->add(SpawningPeer::SPAWNINGREFNO, $this->spawningrefno);
        $criteria->add(SpawningPeer::SPAWNINGAREA, $this->spawningarea);

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
        $pks[1] = $this->getSpawningrefno();
        $pks[2] = $this->getSpawningarea();

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
        $this->setSpawningrefno($keys[1]);
        $this->setSpawningarea($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getStockcode()) && (null === $this->getSpawningrefno()) && (null === $this->getSpawningarea());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Spawning (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setSpawningrefno($this->getSpawningrefno());
        $copyObj->setSourceref($this->getSourceref());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setECode($this->getECode());
        $copyObj->setSpawningground($this->getSpawningground());
        $copyObj->setSpawningarea($this->getSpawningarea());
        $copyObj->setJan($this->getJan());
        $copyObj->setFeb($this->getFeb());
        $copyObj->setMar($this->getMar());
        $copyObj->setApr($this->getApr());
        $copyObj->setMay($this->getMay());
        $copyObj->setJun($this->getJun());
        $copyObj->setJul($this->getJul());
        $copyObj->setAug($this->getAug());
        $copyObj->setSep($this->getSep());
        $copyObj->setOct($this->getOct());
        $copyObj->setNov($this->getNov());
        $copyObj->setDec($this->getDec());
        $copyObj->setGsi($this->getGsi());
        $copyObj->setPercentfemales($this->getPercentfemales());
        $copyObj->setTemplow($this->getTemplow());
        $copyObj->setTemphigh($this->getTemphigh());
        $copyObj->setSexratiomid($this->getSexratiomid());
        $copyObj->setSexrmodref($this->getSexrmodref());
        $copyObj->setFecunditymin($this->getFecunditymin());
        $copyObj->setWeightmin($this->getWeightmin());
        $copyObj->setLengthfecunmin($this->getLengthfecunmin());
        $copyObj->setLengthtypefecmin($this->getLengthtypefecmin());
        $copyObj->setFecundityref($this->getFecundityref());
        $copyObj->setFecunditymax($this->getFecunditymax());
        $copyObj->setWeightmax($this->getWeightmax());
        $copyObj->setLengthfecunmax($this->getLengthfecunmax());
        $copyObj->setLengthtypefecmax($this->getLengthtypefecmax());
        $copyObj->setFeccomment($this->getFeccomment());
        $copyObj->setSpawningcycles($this->getSpawningcycles());
        $copyObj->setSpcycleref($this->getSpcycleref());
        $copyObj->setGestationmin($this->getGestationmin());
        $copyObj->setGestationminref($this->getGestationminref());
        $copyObj->setGestationmax($this->getGestationmax());
        $copyObj->setGestationmaxref($this->getGestationmaxref());
        $copyObj->setLengthoffspringmin($this->getLengthoffspringmin());
        $copyObj->setLengthoffminref($this->getLengthoffminref());
        $copyObj->setLengthoffspringmax($this->getLengthoffspringmax());
        $copyObj->setLengthoffmaxref($this->getLengthoffmaxref());
        $copyObj->setRelfecunditymin($this->getRelfecunditymin());
        $copyObj->setFecunminref($this->getFecunminref());
        $copyObj->setRelfecunditymean($this->getRelfecunditymean());
        $copyObj->setFecunmeanref($this->getFecunmeanref());
        $copyObj->setRelfecunditymax($this->getRelfecunditymax());
        $copyObj->setFecunmaxref($this->getFecunmaxref());
        $copyObj->setLengthmin($this->getLengthmin());
        $copyObj->setLengthmax($this->getLengthmax());
        $copyObj->setLengthtype($this->getLengthtype());
        $copyObj->setNumber($this->getNumber());
        $copyObj->setA($this->getA());
        $copyObj->setB($this->getB());
        $copyObj->setCorrcoeff($this->getCorrcoeff());
        $copyObj->setDailyspawnmin($this->getDailyspawnmin());
        $copyObj->setSpawnminref($this->getSpawnminref());
        $copyObj->setDailyspawnmean($this->getDailyspawnmean());
        $copyObj->setSpawnmeanref($this->getSpawnmeanref());
        $copyObj->setDailyspawnmax($this->getDailyspawnmax());
        $copyObj->setSpawnmaxref($this->getSpawnmaxref());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setAddinfos($this->getAddinfos());
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
     * @return Spawning Clone of current object.
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
     * @return SpawningPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SpawningPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->stockcode = null;
        $this->speccode = null;
        $this->spawningrefno = null;
        $this->sourceref = null;
        $this->c_code = null;
        $this->e_code = null;
        $this->spawningground = null;
        $this->spawningarea = null;
        $this->jan = null;
        $this->feb = null;
        $this->mar = null;
        $this->apr = null;
        $this->may = null;
        $this->jun = null;
        $this->jul = null;
        $this->aug = null;
        $this->sep = null;
        $this->oct = null;
        $this->nov = null;
        $this->dec = null;
        $this->gsi = null;
        $this->percentfemales = null;
        $this->templow = null;
        $this->temphigh = null;
        $this->sexratiomid = null;
        $this->sexrmodref = null;
        $this->fecunditymin = null;
        $this->weightmin = null;
        $this->lengthfecunmin = null;
        $this->lengthtypefecmin = null;
        $this->fecundityref = null;
        $this->fecunditymax = null;
        $this->weightmax = null;
        $this->lengthfecunmax = null;
        $this->lengthtypefecmax = null;
        $this->feccomment = null;
        $this->spawningcycles = null;
        $this->spcycleref = null;
        $this->gestationmin = null;
        $this->gestationminref = null;
        $this->gestationmax = null;
        $this->gestationmaxref = null;
        $this->lengthoffspringmin = null;
        $this->lengthoffminref = null;
        $this->lengthoffspringmax = null;
        $this->lengthoffmaxref = null;
        $this->relfecunditymin = null;
        $this->fecunminref = null;
        $this->relfecunditymean = null;
        $this->fecunmeanref = null;
        $this->relfecunditymax = null;
        $this->fecunmaxref = null;
        $this->lengthmin = null;
        $this->lengthmax = null;
        $this->lengthtype = null;
        $this->number = null;
        $this->a = null;
        $this->b = null;
        $this->corrcoeff = null;
        $this->dailyspawnmin = null;
        $this->spawnminref = null;
        $this->dailyspawnmean = null;
        $this->spawnmeanref = null;
        $this->dailyspawnmax = null;
        $this->spawnmaxref = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->addinfos = null;
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
        return (string) $this->exportTo(SpawningPeer::DEFAULT_STRING_FORMAT);
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
