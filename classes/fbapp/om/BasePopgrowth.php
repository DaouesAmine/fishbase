<?php


/**
 * Base class that represents a row from the 'popgrowth' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BasePopgrowth extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PopgrowthPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PopgrowthPeer
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
     * The value for the e_code field.
     * @var        int
     */
    protected $e_code;

    /**
     * The value for the popgrowthref field.
     * @var        int
     */
    protected $popgrowthref;

    /**
     * The value for the sex field.
     * @var        string
     */
    protected $sex;

    /**
     * The value for the data field.
     * @var        string
     */
    protected $data;

    /**
     * The value for the datasourceref field.
     * @var        int
     */
    protected $datasourceref;

    /**
     * The value for the loo field.
     * @var        double
     */
    protected $loo;

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
     * The value for the se_loo field.
     * @var        double
     */
    protected $se_loo;

    /**
     * The value for the sd_loo field.
     * @var        double
     */
    protected $sd_loo;

    /**
     * The value for the lcl_loo field.
     * @var        double
     */
    protected $lcl_loo;

    /**
     * The value for the ucl_loo field.
     * @var        double
     */
    protected $ucl_loo;

    /**
     * The value for the assumeddistloo field.
     * @var        string
     */
    protected $assumeddistloo;

    /**
     * The value for the tlinfinity field.
     * @var        double
     */
    protected $tlinfinity;

    /**
     * The value for the k field.
     * @var        double
     */
    protected $k;

    /**
     * The value for the se_k field.
     * @var        double
     */
    protected $se_k;

    /**
     * The value for the sd_k field.
     * @var        double
     */
    protected $sd_k;

    /**
     * The value for the lcl_k field.
     * @var        double
     */
    protected $lcl_k;

    /**
     * The value for the ucl_k field.
     * @var        double
     */
    protected $ucl_k;

    /**
     * The value for the assumeddistk field.
     * @var        string
     */
    protected $assumeddistk;

    /**
     * The value for the to field.
     * @var        double
     */
    protected $to;

    /**
     * The value for the se_to field.
     * @var        double
     */
    protected $se_to;

    /**
     * The value for the sd_to field.
     * @var        double
     */
    protected $sd_to;

    /**
     * The value for the lcl_to field.
     * @var        double
     */
    protected $lcl_to;

    /**
     * The value for the ucl_to field.
     * @var        double
     */
    protected $ucl_to;

    /**
     * The value for the type field.
     * @var        string
     */
    protected $type;

    /**
     * The value for the methodgrowth field.
     * @var        string
     */
    protected $methodgrowth;

    /**
     * The value for the winfinity field.
     * @var        double
     */
    protected $winfinity;

    /**
     * The value for the linflmax field.
     * @var        boolean
     */
    protected $linflmax;

    /**
     * The value for the auxim field.
     * Note: this column has a database default value of: 'Not "checked"'
     * @var        string
     */
    protected $auxim;

    /**
     * The value for the logklogloo field.
     * @var        double
     */
    protected $logklogloo;

    /**
     * The value for the sourcewinfinity field.
     * @var        string
     */
    protected $sourcewinfinity;

    /**
     * The value for the b field.
     * @var        double
     */
    protected $b;

    /**
     * The value for the c field.
     * @var        double
     */
    protected $c;

    /**
     * The value for the tmax field.
     * @var        double
     */
    protected $tmax;

    /**
     * The value for the tmaxref field.
     * @var        int
     */
    protected $tmaxref;

    /**
     * The value for the tm field.
     * @var        double
     */
    protected $tm;

    /**
     * The value for the m field.
     * @var        double
     */
    protected $m;

    /**
     * The value for the methodm field.
     * @var        string
     */
    protected $methodm;

    /**
     * The value for the mquality field.
     * @var        string
     */
    protected $mquality;

    /**
     * The value for the mref field.
     * @var        int
     */
    protected $mref;

    /**
     * The value for the number_m field.
     * @var        int
     */
    protected $number_m;

    /**
     * The value for the r2_m field.
     * @var        double
     */
    protected $r2_m;

    /**
     * The value for the se_m field.
     * @var        double
     */
    protected $se_m;

    /**
     * The value for the sd_m field.
     * @var        double
     */
    protected $sd_m;

    /**
     * The value for the lcl_m field.
     * @var        double
     */
    protected $lcl_m;

    /**
     * The value for the ucl_m field.
     * @var        double
     */
    protected $ucl_m;

    /**
     * The value for the assumeddistm field.
     * @var        string
     */
    protected $assumeddistm;

    /**
     * The value for the lm field.
     * @var        double
     */
    protected $lm;

    /**
     * The value for the lmloo field.
     * @var        double
     */
    protected $lmloo;

    /**
     * The value for the lmsex field.
     * @var        string
     */
    protected $lmsex;

    /**
     * The value for the typelm field.
     * @var        string
     */
    protected $typelm;

    /**
     * The value for the unsexedref field.
     * @var        int
     */
    protected $unsexedref;

    /**
     * The value for the lmmale field.
     * @var        double
     */
    protected $lmmale;

    /**
     * The value for the lmloomale field.
     * @var        double
     */
    protected $lmloomale;

    /**
     * The value for the lmfemale field.
     * @var        double
     */
    protected $lmfemale;

    /**
     * The value for the lmloofemale field.
     * @var        double
     */
    protected $lmloofemale;

    /**
     * The value for the locality field.
     * @var        string
     */
    protected $locality;

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
     * The value for the yearremark field.
     * @var        string
     */
    protected $yearremark;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the growthenviron field.
     * @var        string
     */
    protected $growthenviron;

    /**
     * The value for the temperature field.
     * @var        double
     */
    protected $temperature;

    /**
     * The value for the deltat field.
     * @var        double
     */
    protected $deltat;

    /**
     * The value for the tempref field.
     * @var        int
     */
    protected $tempref;

    /**
     * The value for the rm field.
     * @var        double
     */
    protected $rm;

    /**
     * The value for the comment field.
     * @var        string
     */
    protected $comment;

    /**
     * The value for the comment2 field.
     * @var        string
     */
    protected $comment2;

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
        $this->auxim = 'Not "checked"';
    }

    /**
     * Initializes internal state of BasePopgrowth object.
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
     * Get the [e_code] column value.
     *
     * @return int
     */
    public function getECode()
    {

        return $this->e_code;
    }

    /**
     * Get the [popgrowthref] column value.
     *
     * @return int
     */
    public function getPopgrowthref()
    {

        return $this->popgrowthref;
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
     * Get the [data] column value.
     *
     * @return string
     */
    public function getData()
    {

        return $this->data;
    }

    /**
     * Get the [datasourceref] column value.
     *
     * @return int
     */
    public function getDatasourceref()
    {

        return $this->datasourceref;
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
     * Get the [se_loo] column value.
     *
     * @return double
     */
    public function getSeLoo()
    {

        return $this->se_loo;
    }

    /**
     * Get the [sd_loo] column value.
     *
     * @return double
     */
    public function getSdLoo()
    {

        return $this->sd_loo;
    }

    /**
     * Get the [lcl_loo] column value.
     *
     * @return double
     */
    public function getLclLoo()
    {

        return $this->lcl_loo;
    }

    /**
     * Get the [ucl_loo] column value.
     *
     * @return double
     */
    public function getUclLoo()
    {

        return $this->ucl_loo;
    }

    /**
     * Get the [assumeddistloo] column value.
     *
     * @return string
     */
    public function getAssumeddistloo()
    {

        return $this->assumeddistloo;
    }

    /**
     * Get the [tlinfinity] column value.
     *
     * @return double
     */
    public function getTlinfinity()
    {

        return $this->tlinfinity;
    }

    /**
     * Get the [k] column value.
     *
     * @return double
     */
    public function getK()
    {

        return $this->k;
    }

    /**
     * Get the [se_k] column value.
     *
     * @return double
     */
    public function getSeK()
    {

        return $this->se_k;
    }

    /**
     * Get the [sd_k] column value.
     *
     * @return double
     */
    public function getSdK()
    {

        return $this->sd_k;
    }

    /**
     * Get the [lcl_k] column value.
     *
     * @return double
     */
    public function getLclK()
    {

        return $this->lcl_k;
    }

    /**
     * Get the [ucl_k] column value.
     *
     * @return double
     */
    public function getUclK()
    {

        return $this->ucl_k;
    }

    /**
     * Get the [assumeddistk] column value.
     *
     * @return string
     */
    public function getAssumeddistk()
    {

        return $this->assumeddistk;
    }

    /**
     * Get the [to] column value.
     *
     * @return double
     */
    public function getTo()
    {

        return $this->to;
    }

    /**
     * Get the [se_to] column value.
     *
     * @return double
     */
    public function getSeTo()
    {

        return $this->se_to;
    }

    /**
     * Get the [sd_to] column value.
     *
     * @return double
     */
    public function getSdTo()
    {

        return $this->sd_to;
    }

    /**
     * Get the [lcl_to] column value.
     *
     * @return double
     */
    public function getLclTo()
    {

        return $this->lcl_to;
    }

    /**
     * Get the [ucl_to] column value.
     *
     * @return double
     */
    public function getUclTo()
    {

        return $this->ucl_to;
    }

    /**
     * Get the [type] column value.
     *
     * @return string
     */
    public function getType()
    {

        return $this->type;
    }

    /**
     * Get the [methodgrowth] column value.
     *
     * @return string
     */
    public function getMethodgrowth()
    {

        return $this->methodgrowth;
    }

    /**
     * Get the [winfinity] column value.
     *
     * @return double
     */
    public function getWinfinity()
    {

        return $this->winfinity;
    }

    /**
     * Get the [linflmax] column value.
     *
     * @return boolean
     */
    public function getLinflmax()
    {

        return $this->linflmax;
    }

    /**
     * Get the [auxim] column value.
     *
     * @return string
     */
    public function getAuxim()
    {

        return $this->auxim;
    }

    /**
     * Get the [logklogloo] column value.
     *
     * @return double
     */
    public function getLogklogloo()
    {

        return $this->logklogloo;
    }

    /**
     * Get the [sourcewinfinity] column value.
     *
     * @return string
     */
    public function getSourcewinfinity()
    {

        return $this->sourcewinfinity;
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
     * Get the [c] column value.
     *
     * @return double
     */
    public function getC()
    {

        return $this->c;
    }

    /**
     * Get the [tmax] column value.
     *
     * @return double
     */
    public function getTmax()
    {

        return $this->tmax;
    }

    /**
     * Get the [tmaxref] column value.
     *
     * @return int
     */
    public function getTmaxref()
    {

        return $this->tmaxref;
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
     * Get the [m] column value.
     *
     * @return double
     */
    public function getM()
    {

        return $this->m;
    }

    /**
     * Get the [methodm] column value.
     *
     * @return string
     */
    public function getMethodm()
    {

        return $this->methodm;
    }

    /**
     * Get the [mquality] column value.
     *
     * @return string
     */
    public function getMquality()
    {

        return $this->mquality;
    }

    /**
     * Get the [mref] column value.
     *
     * @return int
     */
    public function getMref()
    {

        return $this->mref;
    }

    /**
     * Get the [number_m] column value.
     *
     * @return int
     */
    public function getNumberM()
    {

        return $this->number_m;
    }

    /**
     * Get the [r2_m] column value.
     *
     * @return double
     */
    public function getR2M()
    {

        return $this->r2_m;
    }

    /**
     * Get the [se_m] column value.
     *
     * @return double
     */
    public function getSeM()
    {

        return $this->se_m;
    }

    /**
     * Get the [sd_m] column value.
     *
     * @return double
     */
    public function getSdM()
    {

        return $this->sd_m;
    }

    /**
     * Get the [lcl_m] column value.
     *
     * @return double
     */
    public function getLclM()
    {

        return $this->lcl_m;
    }

    /**
     * Get the [ucl_m] column value.
     *
     * @return double
     */
    public function getUclM()
    {

        return $this->ucl_m;
    }

    /**
     * Get the [assumeddistm] column value.
     *
     * @return string
     */
    public function getAssumeddistm()
    {

        return $this->assumeddistm;
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
     * Get the [lmloo] column value.
     *
     * @return double
     */
    public function getLmloo()
    {

        return $this->lmloo;
    }

    /**
     * Get the [lmsex] column value.
     *
     * @return string
     */
    public function getLmsex()
    {

        return $this->lmsex;
    }

    /**
     * Get the [typelm] column value.
     *
     * @return string
     */
    public function getTypelm()
    {

        return $this->typelm;
    }

    /**
     * Get the [unsexedref] column value.
     *
     * @return int
     */
    public function getUnsexedref()
    {

        return $this->unsexedref;
    }

    /**
     * Get the [lmmale] column value.
     *
     * @return double
     */
    public function getLmmale()
    {

        return $this->lmmale;
    }

    /**
     * Get the [lmloomale] column value.
     *
     * @return double
     */
    public function getLmloomale()
    {

        return $this->lmloomale;
    }

    /**
     * Get the [lmfemale] column value.
     *
     * @return double
     */
    public function getLmfemale()
    {

        return $this->lmfemale;
    }

    /**
     * Get the [lmloofemale] column value.
     *
     * @return double
     */
    public function getLmloofemale()
    {

        return $this->lmloofemale;
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
     * Get the [yearremark] column value.
     *
     * @return string
     */
    public function getYearremark()
    {

        return $this->yearremark;
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
     * Get the [growthenviron] column value.
     *
     * @return string
     */
    public function getGrowthenviron()
    {

        return $this->growthenviron;
    }

    /**
     * Get the [temperature] column value.
     *
     * @return double
     */
    public function getTemperature()
    {

        return $this->temperature;
    }

    /**
     * Get the [deltat] column value.
     *
     * @return double
     */
    public function getDeltat()
    {

        return $this->deltat;
    }

    /**
     * Get the [tempref] column value.
     *
     * @return int
     */
    public function getTempref()
    {

        return $this->tempref;
    }

    /**
     * Get the [rm] column value.
     *
     * @return double
     */
    public function getRm()
    {

        return $this->rm;
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
     * Get the [comment2] column value.
     *
     * @return string
     */
    public function getComment2()
    {

        return $this->comment2;
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
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = PopgrowthPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = PopgrowthPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = PopgrowthPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [e_code] column.
     *
     * @param  int $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setECode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->e_code !== $v) {
            $this->e_code = $v;
            $this->modifiedColumns[] = PopgrowthPeer::E_CODE;
        }


        return $this;
    } // setECode()

    /**
     * Set the value of [popgrowthref] column.
     *
     * @param  int $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setPopgrowthref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->popgrowthref !== $v) {
            $this->popgrowthref = $v;
            $this->modifiedColumns[] = PopgrowthPeer::POPGROWTHREF;
        }


        return $this;
    } // setPopgrowthref()

    /**
     * Set the value of [sex] column.
     *
     * @param  string $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setSex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sex !== $v) {
            $this->sex = $v;
            $this->modifiedColumns[] = PopgrowthPeer::SEX;
        }


        return $this;
    } // setSex()

    /**
     * Set the value of [data] column.
     *
     * @param  string $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setData($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->data !== $v) {
            $this->data = $v;
            $this->modifiedColumns[] = PopgrowthPeer::DATA;
        }


        return $this;
    } // setData()

    /**
     * Set the value of [datasourceref] column.
     *
     * @param  int $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setDatasourceref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->datasourceref !== $v) {
            $this->datasourceref = $v;
            $this->modifiedColumns[] = PopgrowthPeer::DATASOURCEREF;
        }


        return $this;
    } // setDatasourceref()

    /**
     * Set the value of [loo] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setLoo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->loo !== $v) {
            $this->loo = $v;
            $this->modifiedColumns[] = PopgrowthPeer::LOO;
        }


        return $this;
    } // setLoo()

    /**
     * Set the value of [number] column.
     *
     * @param  int $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setNumber($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->number !== $v) {
            $this->number = $v;
            $this->modifiedColumns[] = PopgrowthPeer::NUMBER;
        }


        return $this;
    } // setNumber()

    /**
     * Set the value of [r2] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setR2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->r2 !== $v) {
            $this->r2 = $v;
            $this->modifiedColumns[] = PopgrowthPeer::R2;
        }


        return $this;
    } // setR2()

    /**
     * Set the value of [se_loo] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setSeLoo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->se_loo !== $v) {
            $this->se_loo = $v;
            $this->modifiedColumns[] = PopgrowthPeer::SE_LOO;
        }


        return $this;
    } // setSeLoo()

    /**
     * Set the value of [sd_loo] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setSdLoo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sd_loo !== $v) {
            $this->sd_loo = $v;
            $this->modifiedColumns[] = PopgrowthPeer::SD_LOO;
        }


        return $this;
    } // setSdLoo()

    /**
     * Set the value of [lcl_loo] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setLclLoo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lcl_loo !== $v) {
            $this->lcl_loo = $v;
            $this->modifiedColumns[] = PopgrowthPeer::LCL_LOO;
        }


        return $this;
    } // setLclLoo()

    /**
     * Set the value of [ucl_loo] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setUclLoo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ucl_loo !== $v) {
            $this->ucl_loo = $v;
            $this->modifiedColumns[] = PopgrowthPeer::UCL_LOO;
        }


        return $this;
    } // setUclLoo()

    /**
     * Set the value of [assumeddistloo] column.
     *
     * @param  string $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setAssumeddistloo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->assumeddistloo !== $v) {
            $this->assumeddistloo = $v;
            $this->modifiedColumns[] = PopgrowthPeer::ASSUMEDDISTLOO;
        }


        return $this;
    } // setAssumeddistloo()

    /**
     * Set the value of [tlinfinity] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setTlinfinity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tlinfinity !== $v) {
            $this->tlinfinity = $v;
            $this->modifiedColumns[] = PopgrowthPeer::TLINFINITY;
        }


        return $this;
    } // setTlinfinity()

    /**
     * Set the value of [k] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setK($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->k !== $v) {
            $this->k = $v;
            $this->modifiedColumns[] = PopgrowthPeer::K;
        }


        return $this;
    } // setK()

    /**
     * Set the value of [se_k] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setSeK($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->se_k !== $v) {
            $this->se_k = $v;
            $this->modifiedColumns[] = PopgrowthPeer::SE_K;
        }


        return $this;
    } // setSeK()

    /**
     * Set the value of [sd_k] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setSdK($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sd_k !== $v) {
            $this->sd_k = $v;
            $this->modifiedColumns[] = PopgrowthPeer::SD_K;
        }


        return $this;
    } // setSdK()

    /**
     * Set the value of [lcl_k] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setLclK($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lcl_k !== $v) {
            $this->lcl_k = $v;
            $this->modifiedColumns[] = PopgrowthPeer::LCL_K;
        }


        return $this;
    } // setLclK()

    /**
     * Set the value of [ucl_k] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setUclK($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ucl_k !== $v) {
            $this->ucl_k = $v;
            $this->modifiedColumns[] = PopgrowthPeer::UCL_K;
        }


        return $this;
    } // setUclK()

    /**
     * Set the value of [assumeddistk] column.
     *
     * @param  string $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setAssumeddistk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->assumeddistk !== $v) {
            $this->assumeddistk = $v;
            $this->modifiedColumns[] = PopgrowthPeer::ASSUMEDDISTK;
        }


        return $this;
    } // setAssumeddistk()

    /**
     * Set the value of [to] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setTo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->to !== $v) {
            $this->to = $v;
            $this->modifiedColumns[] = PopgrowthPeer::TO;
        }


        return $this;
    } // setTo()

    /**
     * Set the value of [se_to] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setSeTo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->se_to !== $v) {
            $this->se_to = $v;
            $this->modifiedColumns[] = PopgrowthPeer::SE_TO;
        }


        return $this;
    } // setSeTo()

    /**
     * Set the value of [sd_to] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setSdTo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sd_to !== $v) {
            $this->sd_to = $v;
            $this->modifiedColumns[] = PopgrowthPeer::SD_TO;
        }


        return $this;
    } // setSdTo()

    /**
     * Set the value of [lcl_to] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setLclTo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lcl_to !== $v) {
            $this->lcl_to = $v;
            $this->modifiedColumns[] = PopgrowthPeer::LCL_TO;
        }


        return $this;
    } // setLclTo()

    /**
     * Set the value of [ucl_to] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setUclTo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ucl_to !== $v) {
            $this->ucl_to = $v;
            $this->modifiedColumns[] = PopgrowthPeer::UCL_TO;
        }


        return $this;
    } // setUclTo()

    /**
     * Set the value of [type] column.
     *
     * @param  string $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[] = PopgrowthPeer::TYPE;
        }


        return $this;
    } // setType()

    /**
     * Set the value of [methodgrowth] column.
     *
     * @param  string $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setMethodgrowth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->methodgrowth !== $v) {
            $this->methodgrowth = $v;
            $this->modifiedColumns[] = PopgrowthPeer::METHODGROWTH;
        }


        return $this;
    } // setMethodgrowth()

    /**
     * Set the value of [winfinity] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setWinfinity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->winfinity !== $v) {
            $this->winfinity = $v;
            $this->modifiedColumns[] = PopgrowthPeer::WINFINITY;
        }


        return $this;
    } // setWinfinity()

    /**
     * Sets the value of the [linflmax] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setLinflmax($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->linflmax !== $v) {
            $this->linflmax = $v;
            $this->modifiedColumns[] = PopgrowthPeer::LINFLMAX;
        }


        return $this;
    } // setLinflmax()

    /**
     * Set the value of [auxim] column.
     *
     * @param  string $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setAuxim($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->auxim !== $v) {
            $this->auxim = $v;
            $this->modifiedColumns[] = PopgrowthPeer::AUXIM;
        }


        return $this;
    } // setAuxim()

    /**
     * Set the value of [logklogloo] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setLogklogloo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->logklogloo !== $v) {
            $this->logklogloo = $v;
            $this->modifiedColumns[] = PopgrowthPeer::LOGKLOGLOO;
        }


        return $this;
    } // setLogklogloo()

    /**
     * Set the value of [sourcewinfinity] column.
     *
     * @param  string $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setSourcewinfinity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sourcewinfinity !== $v) {
            $this->sourcewinfinity = $v;
            $this->modifiedColumns[] = PopgrowthPeer::SOURCEWINFINITY;
        }


        return $this;
    } // setSourcewinfinity()

    /**
     * Set the value of [b] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setB($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->b !== $v) {
            $this->b = $v;
            $this->modifiedColumns[] = PopgrowthPeer::B;
        }


        return $this;
    } // setB()

    /**
     * Set the value of [c] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setC($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->c !== $v) {
            $this->c = $v;
            $this->modifiedColumns[] = PopgrowthPeer::C;
        }


        return $this;
    } // setC()

    /**
     * Set the value of [tmax] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setTmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tmax !== $v) {
            $this->tmax = $v;
            $this->modifiedColumns[] = PopgrowthPeer::TMAX;
        }


        return $this;
    } // setTmax()

    /**
     * Set the value of [tmaxref] column.
     *
     * @param  int $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setTmaxref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tmaxref !== $v) {
            $this->tmaxref = $v;
            $this->modifiedColumns[] = PopgrowthPeer::TMAXREF;
        }


        return $this;
    } // setTmaxref()

    /**
     * Set the value of [tm] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setTm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tm !== $v) {
            $this->tm = $v;
            $this->modifiedColumns[] = PopgrowthPeer::TM;
        }


        return $this;
    } // setTm()

    /**
     * Set the value of [m] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setM($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->m !== $v) {
            $this->m = $v;
            $this->modifiedColumns[] = PopgrowthPeer::M;
        }


        return $this;
    } // setM()

    /**
     * Set the value of [methodm] column.
     *
     * @param  string $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setMethodm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->methodm !== $v) {
            $this->methodm = $v;
            $this->modifiedColumns[] = PopgrowthPeer::METHODM;
        }


        return $this;
    } // setMethodm()

    /**
     * Set the value of [mquality] column.
     *
     * @param  string $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setMquality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mquality !== $v) {
            $this->mquality = $v;
            $this->modifiedColumns[] = PopgrowthPeer::MQUALITY;
        }


        return $this;
    } // setMquality()

    /**
     * Set the value of [mref] column.
     *
     * @param  int $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setMref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mref !== $v) {
            $this->mref = $v;
            $this->modifiedColumns[] = PopgrowthPeer::MREF;
        }


        return $this;
    } // setMref()

    /**
     * Set the value of [number_m] column.
     *
     * @param  int $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setNumberM($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->number_m !== $v) {
            $this->number_m = $v;
            $this->modifiedColumns[] = PopgrowthPeer::NUMBER_M;
        }


        return $this;
    } // setNumberM()

    /**
     * Set the value of [r2_m] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setR2M($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->r2_m !== $v) {
            $this->r2_m = $v;
            $this->modifiedColumns[] = PopgrowthPeer::R2_M;
        }


        return $this;
    } // setR2M()

    /**
     * Set the value of [se_m] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setSeM($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->se_m !== $v) {
            $this->se_m = $v;
            $this->modifiedColumns[] = PopgrowthPeer::SE_M;
        }


        return $this;
    } // setSeM()

    /**
     * Set the value of [sd_m] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setSdM($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sd_m !== $v) {
            $this->sd_m = $v;
            $this->modifiedColumns[] = PopgrowthPeer::SD_M;
        }


        return $this;
    } // setSdM()

    /**
     * Set the value of [lcl_m] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setLclM($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lcl_m !== $v) {
            $this->lcl_m = $v;
            $this->modifiedColumns[] = PopgrowthPeer::LCL_M;
        }


        return $this;
    } // setLclM()

    /**
     * Set the value of [ucl_m] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setUclM($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ucl_m !== $v) {
            $this->ucl_m = $v;
            $this->modifiedColumns[] = PopgrowthPeer::UCL_M;
        }


        return $this;
    } // setUclM()

    /**
     * Set the value of [assumeddistm] column.
     *
     * @param  string $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setAssumeddistm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->assumeddistm !== $v) {
            $this->assumeddistm = $v;
            $this->modifiedColumns[] = PopgrowthPeer::ASSUMEDDISTM;
        }


        return $this;
    } // setAssumeddistm()

    /**
     * Set the value of [lm] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setLm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lm !== $v) {
            $this->lm = $v;
            $this->modifiedColumns[] = PopgrowthPeer::LM;
        }


        return $this;
    } // setLm()

    /**
     * Set the value of [lmloo] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setLmloo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lmloo !== $v) {
            $this->lmloo = $v;
            $this->modifiedColumns[] = PopgrowthPeer::LMLOO;
        }


        return $this;
    } // setLmloo()

    /**
     * Set the value of [lmsex] column.
     *
     * @param  string $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setLmsex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lmsex !== $v) {
            $this->lmsex = $v;
            $this->modifiedColumns[] = PopgrowthPeer::LMSEX;
        }


        return $this;
    } // setLmsex()

    /**
     * Set the value of [typelm] column.
     *
     * @param  string $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setTypelm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->typelm !== $v) {
            $this->typelm = $v;
            $this->modifiedColumns[] = PopgrowthPeer::TYPELM;
        }


        return $this;
    } // setTypelm()

    /**
     * Set the value of [unsexedref] column.
     *
     * @param  int $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setUnsexedref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->unsexedref !== $v) {
            $this->unsexedref = $v;
            $this->modifiedColumns[] = PopgrowthPeer::UNSEXEDREF;
        }


        return $this;
    } // setUnsexedref()

    /**
     * Set the value of [lmmale] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setLmmale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lmmale !== $v) {
            $this->lmmale = $v;
            $this->modifiedColumns[] = PopgrowthPeer::LMMALE;
        }


        return $this;
    } // setLmmale()

    /**
     * Set the value of [lmloomale] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setLmloomale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lmloomale !== $v) {
            $this->lmloomale = $v;
            $this->modifiedColumns[] = PopgrowthPeer::LMLOOMALE;
        }


        return $this;
    } // setLmloomale()

    /**
     * Set the value of [lmfemale] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setLmfemale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lmfemale !== $v) {
            $this->lmfemale = $v;
            $this->modifiedColumns[] = PopgrowthPeer::LMFEMALE;
        }


        return $this;
    } // setLmfemale()

    /**
     * Set the value of [lmloofemale] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setLmloofemale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lmloofemale !== $v) {
            $this->lmloofemale = $v;
            $this->modifiedColumns[] = PopgrowthPeer::LMLOOFEMALE;
        }


        return $this;
    } // setLmloofemale()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = PopgrowthPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [yearstart] column.
     *
     * @param  int $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setYearstart($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->yearstart !== $v) {
            $this->yearstart = $v;
            $this->modifiedColumns[] = PopgrowthPeer::YEARSTART;
        }


        return $this;
    } // setYearstart()

    /**
     * Set the value of [yearend] column.
     *
     * @param  int $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setYearend($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->yearend !== $v) {
            $this->yearend = $v;
            $this->modifiedColumns[] = PopgrowthPeer::YEAREND;
        }


        return $this;
    } // setYearend()

    /**
     * Set the value of [yearremark] column.
     *
     * @param  string $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setYearremark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->yearremark !== $v) {
            $this->yearremark = $v;
            $this->modifiedColumns[] = PopgrowthPeer::YEARREMARK;
        }


        return $this;
    } // setYearremark()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = PopgrowthPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [growthenviron] column.
     *
     * @param  string $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setGrowthenviron($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->growthenviron !== $v) {
            $this->growthenviron = $v;
            $this->modifiedColumns[] = PopgrowthPeer::GROWTHENVIRON;
        }


        return $this;
    } // setGrowthenviron()

    /**
     * Set the value of [temperature] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setTemperature($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->temperature !== $v) {
            $this->temperature = $v;
            $this->modifiedColumns[] = PopgrowthPeer::TEMPERATURE;
        }


        return $this;
    } // setTemperature()

    /**
     * Set the value of [deltat] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setDeltat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->deltat !== $v) {
            $this->deltat = $v;
            $this->modifiedColumns[] = PopgrowthPeer::DELTAT;
        }


        return $this;
    } // setDeltat()

    /**
     * Set the value of [tempref] column.
     *
     * @param  int $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setTempref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tempref !== $v) {
            $this->tempref = $v;
            $this->modifiedColumns[] = PopgrowthPeer::TEMPREF;
        }


        return $this;
    } // setTempref()

    /**
     * Set the value of [rm] column.
     *
     * @param  double $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setRm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->rm !== $v) {
            $this->rm = $v;
            $this->modifiedColumns[] = PopgrowthPeer::RM;
        }


        return $this;
    } // setRm()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = PopgrowthPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [comment2] column.
     *
     * @param  string $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setComment2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment2 !== $v) {
            $this->comment2 = $v;
            $this->modifiedColumns[] = PopgrowthPeer::COMMENT2;
        }


        return $this;
    } // setComment2()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = PopgrowthPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = PopgrowthPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = PopgrowthPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = PopgrowthPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = PopgrowthPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = PopgrowthPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Popgrowth The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = PopgrowthPeer::TS;
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
            if ($this->auxim !== 'Not "checked"') {
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
            $this->e_code = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->popgrowthref = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->sex = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->data = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->datasourceref = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->loo = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->number = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->r2 = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->se_loo = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->sd_loo = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->lcl_loo = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->ucl_loo = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->assumeddistloo = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->tlinfinity = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->k = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->se_k = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->sd_k = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->lcl_k = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->ucl_k = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->assumeddistk = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->to = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
            $this->se_to = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
            $this->sd_to = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->lcl_to = ($row[$startcol + 26] !== null) ? (double) $row[$startcol + 26] : null;
            $this->ucl_to = ($row[$startcol + 27] !== null) ? (double) $row[$startcol + 27] : null;
            $this->type = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->methodgrowth = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->winfinity = ($row[$startcol + 30] !== null) ? (double) $row[$startcol + 30] : null;
            $this->linflmax = ($row[$startcol + 31] !== null) ? (boolean) $row[$startcol + 31] : null;
            $this->auxim = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->logklogloo = ($row[$startcol + 33] !== null) ? (double) $row[$startcol + 33] : null;
            $this->sourcewinfinity = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->b = ($row[$startcol + 35] !== null) ? (double) $row[$startcol + 35] : null;
            $this->c = ($row[$startcol + 36] !== null) ? (double) $row[$startcol + 36] : null;
            $this->tmax = ($row[$startcol + 37] !== null) ? (double) $row[$startcol + 37] : null;
            $this->tmaxref = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->tm = ($row[$startcol + 39] !== null) ? (double) $row[$startcol + 39] : null;
            $this->m = ($row[$startcol + 40] !== null) ? (double) $row[$startcol + 40] : null;
            $this->methodm = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->mquality = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->mref = ($row[$startcol + 43] !== null) ? (int) $row[$startcol + 43] : null;
            $this->number_m = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->r2_m = ($row[$startcol + 45] !== null) ? (double) $row[$startcol + 45] : null;
            $this->se_m = ($row[$startcol + 46] !== null) ? (double) $row[$startcol + 46] : null;
            $this->sd_m = ($row[$startcol + 47] !== null) ? (double) $row[$startcol + 47] : null;
            $this->lcl_m = ($row[$startcol + 48] !== null) ? (double) $row[$startcol + 48] : null;
            $this->ucl_m = ($row[$startcol + 49] !== null) ? (double) $row[$startcol + 49] : null;
            $this->assumeddistm = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->lm = ($row[$startcol + 51] !== null) ? (double) $row[$startcol + 51] : null;
            $this->lmloo = ($row[$startcol + 52] !== null) ? (double) $row[$startcol + 52] : null;
            $this->lmsex = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->typelm = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->unsexedref = ($row[$startcol + 55] !== null) ? (int) $row[$startcol + 55] : null;
            $this->lmmale = ($row[$startcol + 56] !== null) ? (double) $row[$startcol + 56] : null;
            $this->lmloomale = ($row[$startcol + 57] !== null) ? (double) $row[$startcol + 57] : null;
            $this->lmfemale = ($row[$startcol + 58] !== null) ? (double) $row[$startcol + 58] : null;
            $this->lmloofemale = ($row[$startcol + 59] !== null) ? (double) $row[$startcol + 59] : null;
            $this->locality = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->yearstart = ($row[$startcol + 61] !== null) ? (int) $row[$startcol + 61] : null;
            $this->yearend = ($row[$startcol + 62] !== null) ? (int) $row[$startcol + 62] : null;
            $this->yearremark = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->c_code = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->growthenviron = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->temperature = ($row[$startcol + 66] !== null) ? (double) $row[$startcol + 66] : null;
            $this->deltat = ($row[$startcol + 67] !== null) ? (double) $row[$startcol + 67] : null;
            $this->tempref = ($row[$startcol + 68] !== null) ? (int) $row[$startcol + 68] : null;
            $this->rm = ($row[$startcol + 69] !== null) ? (double) $row[$startcol + 69] : null;
            $this->comment = ($row[$startcol + 70] !== null) ? (string) $row[$startcol + 70] : null;
            $this->comment2 = ($row[$startcol + 71] !== null) ? (string) $row[$startcol + 71] : null;
            $this->entered = ($row[$startcol + 72] !== null) ? (int) $row[$startcol + 72] : null;
            $this->dateentered = ($row[$startcol + 73] !== null) ? (string) $row[$startcol + 73] : null;
            $this->modified = ($row[$startcol + 74] !== null) ? (int) $row[$startcol + 74] : null;
            $this->datemodified = ($row[$startcol + 75] !== null) ? (string) $row[$startcol + 75] : null;
            $this->expert = ($row[$startcol + 76] !== null) ? (int) $row[$startcol + 76] : null;
            $this->datechecked = ($row[$startcol + 77] !== null) ? (string) $row[$startcol + 77] : null;
            $this->ts = ($row[$startcol + 78] !== null) ? (string) $row[$startcol + 78] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 79; // 79 = PopgrowthPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Popgrowth object", $e);
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
            $con = Propel::getConnection(PopgrowthPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PopgrowthPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(PopgrowthPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PopgrowthQuery::create()
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
            $con = Propel::getConnection(PopgrowthPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PopgrowthPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = PopgrowthPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PopgrowthPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PopgrowthPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`AutoCtr`';
        }
        if ($this->isColumnModified(PopgrowthPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(PopgrowthPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(PopgrowthPeer::E_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`E_CODE`';
        }
        if ($this->isColumnModified(PopgrowthPeer::POPGROWTHREF)) {
            $modifiedColumns[':p' . $index++]  = '`PopGrowthRef`';
        }
        if ($this->isColumnModified(PopgrowthPeer::SEX)) {
            $modifiedColumns[':p' . $index++]  = '`Sex`';
        }
        if ($this->isColumnModified(PopgrowthPeer::DATA)) {
            $modifiedColumns[':p' . $index++]  = '`Data`';
        }
        if ($this->isColumnModified(PopgrowthPeer::DATASOURCEREF)) {
            $modifiedColumns[':p' . $index++]  = '`DataSourceRef`';
        }
        if ($this->isColumnModified(PopgrowthPeer::LOO)) {
            $modifiedColumns[':p' . $index++]  = '`Loo`';
        }
        if ($this->isColumnModified(PopgrowthPeer::NUMBER)) {
            $modifiedColumns[':p' . $index++]  = '`Number`';
        }
        if ($this->isColumnModified(PopgrowthPeer::R2)) {
            $modifiedColumns[':p' . $index++]  = '`r2`';
        }
        if ($this->isColumnModified(PopgrowthPeer::SE_LOO)) {
            $modifiedColumns[':p' . $index++]  = '`SE_Loo`';
        }
        if ($this->isColumnModified(PopgrowthPeer::SD_LOO)) {
            $modifiedColumns[':p' . $index++]  = '`SD_Loo`';
        }
        if ($this->isColumnModified(PopgrowthPeer::LCL_LOO)) {
            $modifiedColumns[':p' . $index++]  = '`LCL_Loo`';
        }
        if ($this->isColumnModified(PopgrowthPeer::UCL_LOO)) {
            $modifiedColumns[':p' . $index++]  = '`UCL_Loo`';
        }
        if ($this->isColumnModified(PopgrowthPeer::ASSUMEDDISTLOO)) {
            $modifiedColumns[':p' . $index++]  = '`AssumedDistLoo`';
        }
        if ($this->isColumnModified(PopgrowthPeer::TLINFINITY)) {
            $modifiedColumns[':p' . $index++]  = '`TLinfinity`';
        }
        if ($this->isColumnModified(PopgrowthPeer::K)) {
            $modifiedColumns[':p' . $index++]  = '`K`';
        }
        if ($this->isColumnModified(PopgrowthPeer::SE_K)) {
            $modifiedColumns[':p' . $index++]  = '`SE_K`';
        }
        if ($this->isColumnModified(PopgrowthPeer::SD_K)) {
            $modifiedColumns[':p' . $index++]  = '`SD_K`';
        }
        if ($this->isColumnModified(PopgrowthPeer::LCL_K)) {
            $modifiedColumns[':p' . $index++]  = '`LCL_K`';
        }
        if ($this->isColumnModified(PopgrowthPeer::UCL_K)) {
            $modifiedColumns[':p' . $index++]  = '`UCL_K`';
        }
        if ($this->isColumnModified(PopgrowthPeer::ASSUMEDDISTK)) {
            $modifiedColumns[':p' . $index++]  = '`AssumedDistK`';
        }
        if ($this->isColumnModified(PopgrowthPeer::TO)) {
            $modifiedColumns[':p' . $index++]  = '`to`';
        }
        if ($this->isColumnModified(PopgrowthPeer::SE_TO)) {
            $modifiedColumns[':p' . $index++]  = '`SE_to`';
        }
        if ($this->isColumnModified(PopgrowthPeer::SD_TO)) {
            $modifiedColumns[':p' . $index++]  = '`SD_to`';
        }
        if ($this->isColumnModified(PopgrowthPeer::LCL_TO)) {
            $modifiedColumns[':p' . $index++]  = '`LCL_to`';
        }
        if ($this->isColumnModified(PopgrowthPeer::UCL_TO)) {
            $modifiedColumns[':p' . $index++]  = '`UCL_to`';
        }
        if ($this->isColumnModified(PopgrowthPeer::TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`Type`';
        }
        if ($this->isColumnModified(PopgrowthPeer::METHODGROWTH)) {
            $modifiedColumns[':p' . $index++]  = '`MethodGrowth`';
        }
        if ($this->isColumnModified(PopgrowthPeer::WINFINITY)) {
            $modifiedColumns[':p' . $index++]  = '`Winfinity`';
        }
        if ($this->isColumnModified(PopgrowthPeer::LINFLMAX)) {
            $modifiedColumns[':p' . $index++]  = '`LinfLmax`';
        }
        if ($this->isColumnModified(PopgrowthPeer::AUXIM)) {
            $modifiedColumns[':p' . $index++]  = '`Auxim`';
        }
        if ($this->isColumnModified(PopgrowthPeer::LOGKLOGLOO)) {
            $modifiedColumns[':p' . $index++]  = '`LogKLogLoo`';
        }
        if ($this->isColumnModified(PopgrowthPeer::SOURCEWINFINITY)) {
            $modifiedColumns[':p' . $index++]  = '`SourceWinfinity`';
        }
        if ($this->isColumnModified(PopgrowthPeer::B)) {
            $modifiedColumns[':p' . $index++]  = '`b`';
        }
        if ($this->isColumnModified(PopgrowthPeer::C)) {
            $modifiedColumns[':p' . $index++]  = '`C`';
        }
        if ($this->isColumnModified(PopgrowthPeer::TMAX)) {
            $modifiedColumns[':p' . $index++]  = '`tmax`';
        }
        if ($this->isColumnModified(PopgrowthPeer::TMAXREF)) {
            $modifiedColumns[':p' . $index++]  = '`tmaxRef`';
        }
        if ($this->isColumnModified(PopgrowthPeer::TM)) {
            $modifiedColumns[':p' . $index++]  = '`tm`';
        }
        if ($this->isColumnModified(PopgrowthPeer::M)) {
            $modifiedColumns[':p' . $index++]  = '`M`';
        }
        if ($this->isColumnModified(PopgrowthPeer::METHODM)) {
            $modifiedColumns[':p' . $index++]  = '`MethodM`';
        }
        if ($this->isColumnModified(PopgrowthPeer::MQUALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Mquality`';
        }
        if ($this->isColumnModified(PopgrowthPeer::MREF)) {
            $modifiedColumns[':p' . $index++]  = '`MRef`';
        }
        if ($this->isColumnModified(PopgrowthPeer::NUMBER_M)) {
            $modifiedColumns[':p' . $index++]  = '`Number_M`';
        }
        if ($this->isColumnModified(PopgrowthPeer::R2_M)) {
            $modifiedColumns[':p' . $index++]  = '`r2_M`';
        }
        if ($this->isColumnModified(PopgrowthPeer::SE_M)) {
            $modifiedColumns[':p' . $index++]  = '`SE_M`';
        }
        if ($this->isColumnModified(PopgrowthPeer::SD_M)) {
            $modifiedColumns[':p' . $index++]  = '`SD_M`';
        }
        if ($this->isColumnModified(PopgrowthPeer::LCL_M)) {
            $modifiedColumns[':p' . $index++]  = '`LCL_M`';
        }
        if ($this->isColumnModified(PopgrowthPeer::UCL_M)) {
            $modifiedColumns[':p' . $index++]  = '`UCL_M`';
        }
        if ($this->isColumnModified(PopgrowthPeer::ASSUMEDDISTM)) {
            $modifiedColumns[':p' . $index++]  = '`AssumedDistM`';
        }
        if ($this->isColumnModified(PopgrowthPeer::LM)) {
            $modifiedColumns[':p' . $index++]  = '`Lm`';
        }
        if ($this->isColumnModified(PopgrowthPeer::LMLOO)) {
            $modifiedColumns[':p' . $index++]  = '`LmLoo`';
        }
        if ($this->isColumnModified(PopgrowthPeer::LMSEX)) {
            $modifiedColumns[':p' . $index++]  = '`LmSex`';
        }
        if ($this->isColumnModified(PopgrowthPeer::TYPELM)) {
            $modifiedColumns[':p' . $index++]  = '`TypeLm`';
        }
        if ($this->isColumnModified(PopgrowthPeer::UNSEXEDREF)) {
            $modifiedColumns[':p' . $index++]  = '`unsexedRef`';
        }
        if ($this->isColumnModified(PopgrowthPeer::LMMALE)) {
            $modifiedColumns[':p' . $index++]  = '`LmMale`';
        }
        if ($this->isColumnModified(PopgrowthPeer::LMLOOMALE)) {
            $modifiedColumns[':p' . $index++]  = '`LmLooMale`';
        }
        if ($this->isColumnModified(PopgrowthPeer::LMFEMALE)) {
            $modifiedColumns[':p' . $index++]  = '`LmFemale`';
        }
        if ($this->isColumnModified(PopgrowthPeer::LMLOOFEMALE)) {
            $modifiedColumns[':p' . $index++]  = '`LmLooFemale`';
        }
        if ($this->isColumnModified(PopgrowthPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(PopgrowthPeer::YEARSTART)) {
            $modifiedColumns[':p' . $index++]  = '`YearStart`';
        }
        if ($this->isColumnModified(PopgrowthPeer::YEAREND)) {
            $modifiedColumns[':p' . $index++]  = '`YearEnd`';
        }
        if ($this->isColumnModified(PopgrowthPeer::YEARREMARK)) {
            $modifiedColumns[':p' . $index++]  = '`YearRemark`';
        }
        if ($this->isColumnModified(PopgrowthPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(PopgrowthPeer::GROWTHENVIRON)) {
            $modifiedColumns[':p' . $index++]  = '`GrowthEnviron`';
        }
        if ($this->isColumnModified(PopgrowthPeer::TEMPERATURE)) {
            $modifiedColumns[':p' . $index++]  = '`Temperature`';
        }
        if ($this->isColumnModified(PopgrowthPeer::DELTAT)) {
            $modifiedColumns[':p' . $index++]  = '`DeltaT`';
        }
        if ($this->isColumnModified(PopgrowthPeer::TEMPREF)) {
            $modifiedColumns[':p' . $index++]  = '`TempRef`';
        }
        if ($this->isColumnModified(PopgrowthPeer::RM)) {
            $modifiedColumns[':p' . $index++]  = '`Rm`';
        }
        if ($this->isColumnModified(PopgrowthPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Comment`';
        }
        if ($this->isColumnModified(PopgrowthPeer::COMMENT2)) {
            $modifiedColumns[':p' . $index++]  = '`Comment2`';
        }
        if ($this->isColumnModified(PopgrowthPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(PopgrowthPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(PopgrowthPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(PopgrowthPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(PopgrowthPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(PopgrowthPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(PopgrowthPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `popgrowth` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`AutoCtr`':
                        $stmt->bindValue($identifier, $this->autoctr, PDO::PARAM_INT);
                        break;
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`E_CODE`':
                        $stmt->bindValue($identifier, $this->e_code, PDO::PARAM_INT);
                        break;
                    case '`PopGrowthRef`':
                        $stmt->bindValue($identifier, $this->popgrowthref, PDO::PARAM_INT);
                        break;
                    case '`Sex`':
                        $stmt->bindValue($identifier, $this->sex, PDO::PARAM_STR);
                        break;
                    case '`Data`':
                        $stmt->bindValue($identifier, $this->data, PDO::PARAM_STR);
                        break;
                    case '`DataSourceRef`':
                        $stmt->bindValue($identifier, $this->datasourceref, PDO::PARAM_INT);
                        break;
                    case '`Loo`':
                        $stmt->bindValue($identifier, $this->loo, PDO::PARAM_STR);
                        break;
                    case '`Number`':
                        $stmt->bindValue($identifier, $this->number, PDO::PARAM_INT);
                        break;
                    case '`r2`':
                        $stmt->bindValue($identifier, $this->r2, PDO::PARAM_STR);
                        break;
                    case '`SE_Loo`':
                        $stmt->bindValue($identifier, $this->se_loo, PDO::PARAM_STR);
                        break;
                    case '`SD_Loo`':
                        $stmt->bindValue($identifier, $this->sd_loo, PDO::PARAM_STR);
                        break;
                    case '`LCL_Loo`':
                        $stmt->bindValue($identifier, $this->lcl_loo, PDO::PARAM_STR);
                        break;
                    case '`UCL_Loo`':
                        $stmt->bindValue($identifier, $this->ucl_loo, PDO::PARAM_STR);
                        break;
                    case '`AssumedDistLoo`':
                        $stmt->bindValue($identifier, $this->assumeddistloo, PDO::PARAM_STR);
                        break;
                    case '`TLinfinity`':
                        $stmt->bindValue($identifier, $this->tlinfinity, PDO::PARAM_STR);
                        break;
                    case '`K`':
                        $stmt->bindValue($identifier, $this->k, PDO::PARAM_STR);
                        break;
                    case '`SE_K`':
                        $stmt->bindValue($identifier, $this->se_k, PDO::PARAM_STR);
                        break;
                    case '`SD_K`':
                        $stmt->bindValue($identifier, $this->sd_k, PDO::PARAM_STR);
                        break;
                    case '`LCL_K`':
                        $stmt->bindValue($identifier, $this->lcl_k, PDO::PARAM_STR);
                        break;
                    case '`UCL_K`':
                        $stmt->bindValue($identifier, $this->ucl_k, PDO::PARAM_STR);
                        break;
                    case '`AssumedDistK`':
                        $stmt->bindValue($identifier, $this->assumeddistk, PDO::PARAM_STR);
                        break;
                    case '`to`':
                        $stmt->bindValue($identifier, $this->to, PDO::PARAM_STR);
                        break;
                    case '`SE_to`':
                        $stmt->bindValue($identifier, $this->se_to, PDO::PARAM_STR);
                        break;
                    case '`SD_to`':
                        $stmt->bindValue($identifier, $this->sd_to, PDO::PARAM_STR);
                        break;
                    case '`LCL_to`':
                        $stmt->bindValue($identifier, $this->lcl_to, PDO::PARAM_STR);
                        break;
                    case '`UCL_to`':
                        $stmt->bindValue($identifier, $this->ucl_to, PDO::PARAM_STR);
                        break;
                    case '`Type`':
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_STR);
                        break;
                    case '`MethodGrowth`':
                        $stmt->bindValue($identifier, $this->methodgrowth, PDO::PARAM_STR);
                        break;
                    case '`Winfinity`':
                        $stmt->bindValue($identifier, $this->winfinity, PDO::PARAM_STR);
                        break;
                    case '`LinfLmax`':
                        $stmt->bindValue($identifier, (int) $this->linflmax, PDO::PARAM_INT);
                        break;
                    case '`Auxim`':
                        $stmt->bindValue($identifier, $this->auxim, PDO::PARAM_STR);
                        break;
                    case '`LogKLogLoo`':
                        $stmt->bindValue($identifier, $this->logklogloo, PDO::PARAM_STR);
                        break;
                    case '`SourceWinfinity`':
                        $stmt->bindValue($identifier, $this->sourcewinfinity, PDO::PARAM_STR);
                        break;
                    case '`b`':
                        $stmt->bindValue($identifier, $this->b, PDO::PARAM_STR);
                        break;
                    case '`C`':
                        $stmt->bindValue($identifier, $this->c, PDO::PARAM_STR);
                        break;
                    case '`tmax`':
                        $stmt->bindValue($identifier, $this->tmax, PDO::PARAM_STR);
                        break;
                    case '`tmaxRef`':
                        $stmt->bindValue($identifier, $this->tmaxref, PDO::PARAM_INT);
                        break;
                    case '`tm`':
                        $stmt->bindValue($identifier, $this->tm, PDO::PARAM_STR);
                        break;
                    case '`M`':
                        $stmt->bindValue($identifier, $this->m, PDO::PARAM_STR);
                        break;
                    case '`MethodM`':
                        $stmt->bindValue($identifier, $this->methodm, PDO::PARAM_STR);
                        break;
                    case '`Mquality`':
                        $stmt->bindValue($identifier, $this->mquality, PDO::PARAM_STR);
                        break;
                    case '`MRef`':
                        $stmt->bindValue($identifier, $this->mref, PDO::PARAM_INT);
                        break;
                    case '`Number_M`':
                        $stmt->bindValue($identifier, $this->number_m, PDO::PARAM_INT);
                        break;
                    case '`r2_M`':
                        $stmt->bindValue($identifier, $this->r2_m, PDO::PARAM_STR);
                        break;
                    case '`SE_M`':
                        $stmt->bindValue($identifier, $this->se_m, PDO::PARAM_STR);
                        break;
                    case '`SD_M`':
                        $stmt->bindValue($identifier, $this->sd_m, PDO::PARAM_STR);
                        break;
                    case '`LCL_M`':
                        $stmt->bindValue($identifier, $this->lcl_m, PDO::PARAM_STR);
                        break;
                    case '`UCL_M`':
                        $stmt->bindValue($identifier, $this->ucl_m, PDO::PARAM_STR);
                        break;
                    case '`AssumedDistM`':
                        $stmt->bindValue($identifier, $this->assumeddistm, PDO::PARAM_STR);
                        break;
                    case '`Lm`':
                        $stmt->bindValue($identifier, $this->lm, PDO::PARAM_STR);
                        break;
                    case '`LmLoo`':
                        $stmt->bindValue($identifier, $this->lmloo, PDO::PARAM_STR);
                        break;
                    case '`LmSex`':
                        $stmt->bindValue($identifier, $this->lmsex, PDO::PARAM_STR);
                        break;
                    case '`TypeLm`':
                        $stmt->bindValue($identifier, $this->typelm, PDO::PARAM_STR);
                        break;
                    case '`unsexedRef`':
                        $stmt->bindValue($identifier, $this->unsexedref, PDO::PARAM_INT);
                        break;
                    case '`LmMale`':
                        $stmt->bindValue($identifier, $this->lmmale, PDO::PARAM_STR);
                        break;
                    case '`LmLooMale`':
                        $stmt->bindValue($identifier, $this->lmloomale, PDO::PARAM_STR);
                        break;
                    case '`LmFemale`':
                        $stmt->bindValue($identifier, $this->lmfemale, PDO::PARAM_STR);
                        break;
                    case '`LmLooFemale`':
                        $stmt->bindValue($identifier, $this->lmloofemale, PDO::PARAM_STR);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`YearStart`':
                        $stmt->bindValue($identifier, $this->yearstart, PDO::PARAM_INT);
                        break;
                    case '`YearEnd`':
                        $stmt->bindValue($identifier, $this->yearend, PDO::PARAM_INT);
                        break;
                    case '`YearRemark`':
                        $stmt->bindValue($identifier, $this->yearremark, PDO::PARAM_STR);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`GrowthEnviron`':
                        $stmt->bindValue($identifier, $this->growthenviron, PDO::PARAM_STR);
                        break;
                    case '`Temperature`':
                        $stmt->bindValue($identifier, $this->temperature, PDO::PARAM_STR);
                        break;
                    case '`DeltaT`':
                        $stmt->bindValue($identifier, $this->deltat, PDO::PARAM_STR);
                        break;
                    case '`TempRef`':
                        $stmt->bindValue($identifier, $this->tempref, PDO::PARAM_INT);
                        break;
                    case '`Rm`':
                        $stmt->bindValue($identifier, $this->rm, PDO::PARAM_STR);
                        break;
                    case '`Comment`':
                        $stmt->bindValue($identifier, $this->comment, PDO::PARAM_STR);
                        break;
                    case '`Comment2`':
                        $stmt->bindValue($identifier, $this->comment2, PDO::PARAM_STR);
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


            if (($retval = PopgrowthPeer::doValidate($this, $columns)) !== true) {
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
        $pos = PopgrowthPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getECode();
                break;
            case 4:
                return $this->getPopgrowthref();
                break;
            case 5:
                return $this->getSex();
                break;
            case 6:
                return $this->getData();
                break;
            case 7:
                return $this->getDatasourceref();
                break;
            case 8:
                return $this->getLoo();
                break;
            case 9:
                return $this->getNumber();
                break;
            case 10:
                return $this->getR2();
                break;
            case 11:
                return $this->getSeLoo();
                break;
            case 12:
                return $this->getSdLoo();
                break;
            case 13:
                return $this->getLclLoo();
                break;
            case 14:
                return $this->getUclLoo();
                break;
            case 15:
                return $this->getAssumeddistloo();
                break;
            case 16:
                return $this->getTlinfinity();
                break;
            case 17:
                return $this->getK();
                break;
            case 18:
                return $this->getSeK();
                break;
            case 19:
                return $this->getSdK();
                break;
            case 20:
                return $this->getLclK();
                break;
            case 21:
                return $this->getUclK();
                break;
            case 22:
                return $this->getAssumeddistk();
                break;
            case 23:
                return $this->getTo();
                break;
            case 24:
                return $this->getSeTo();
                break;
            case 25:
                return $this->getSdTo();
                break;
            case 26:
                return $this->getLclTo();
                break;
            case 27:
                return $this->getUclTo();
                break;
            case 28:
                return $this->getType();
                break;
            case 29:
                return $this->getMethodgrowth();
                break;
            case 30:
                return $this->getWinfinity();
                break;
            case 31:
                return $this->getLinflmax();
                break;
            case 32:
                return $this->getAuxim();
                break;
            case 33:
                return $this->getLogklogloo();
                break;
            case 34:
                return $this->getSourcewinfinity();
                break;
            case 35:
                return $this->getB();
                break;
            case 36:
                return $this->getC();
                break;
            case 37:
                return $this->getTmax();
                break;
            case 38:
                return $this->getTmaxref();
                break;
            case 39:
                return $this->getTm();
                break;
            case 40:
                return $this->getM();
                break;
            case 41:
                return $this->getMethodm();
                break;
            case 42:
                return $this->getMquality();
                break;
            case 43:
                return $this->getMref();
                break;
            case 44:
                return $this->getNumberM();
                break;
            case 45:
                return $this->getR2M();
                break;
            case 46:
                return $this->getSeM();
                break;
            case 47:
                return $this->getSdM();
                break;
            case 48:
                return $this->getLclM();
                break;
            case 49:
                return $this->getUclM();
                break;
            case 50:
                return $this->getAssumeddistm();
                break;
            case 51:
                return $this->getLm();
                break;
            case 52:
                return $this->getLmloo();
                break;
            case 53:
                return $this->getLmsex();
                break;
            case 54:
                return $this->getTypelm();
                break;
            case 55:
                return $this->getUnsexedref();
                break;
            case 56:
                return $this->getLmmale();
                break;
            case 57:
                return $this->getLmloomale();
                break;
            case 58:
                return $this->getLmfemale();
                break;
            case 59:
                return $this->getLmloofemale();
                break;
            case 60:
                return $this->getLocality();
                break;
            case 61:
                return $this->getYearstart();
                break;
            case 62:
                return $this->getYearend();
                break;
            case 63:
                return $this->getYearremark();
                break;
            case 64:
                return $this->getCCode();
                break;
            case 65:
                return $this->getGrowthenviron();
                break;
            case 66:
                return $this->getTemperature();
                break;
            case 67:
                return $this->getDeltat();
                break;
            case 68:
                return $this->getTempref();
                break;
            case 69:
                return $this->getRm();
                break;
            case 70:
                return $this->getComment();
                break;
            case 71:
                return $this->getComment2();
                break;
            case 72:
                return $this->getEntered();
                break;
            case 73:
                return $this->getDateentered();
                break;
            case 74:
                return $this->getModified();
                break;
            case 75:
                return $this->getDatemodified();
                break;
            case 76:
                return $this->getExpert();
                break;
            case 77:
                return $this->getDatechecked();
                break;
            case 78:
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
        if (isset($alreadyDumpedObjects['Popgrowth'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Popgrowth'][$this->getPrimaryKey()] = true;
        $keys = PopgrowthPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getStockcode(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getECode(),
            $keys[4] => $this->getPopgrowthref(),
            $keys[5] => $this->getSex(),
            $keys[6] => $this->getData(),
            $keys[7] => $this->getDatasourceref(),
            $keys[8] => $this->getLoo(),
            $keys[9] => $this->getNumber(),
            $keys[10] => $this->getR2(),
            $keys[11] => $this->getSeLoo(),
            $keys[12] => $this->getSdLoo(),
            $keys[13] => $this->getLclLoo(),
            $keys[14] => $this->getUclLoo(),
            $keys[15] => $this->getAssumeddistloo(),
            $keys[16] => $this->getTlinfinity(),
            $keys[17] => $this->getK(),
            $keys[18] => $this->getSeK(),
            $keys[19] => $this->getSdK(),
            $keys[20] => $this->getLclK(),
            $keys[21] => $this->getUclK(),
            $keys[22] => $this->getAssumeddistk(),
            $keys[23] => $this->getTo(),
            $keys[24] => $this->getSeTo(),
            $keys[25] => $this->getSdTo(),
            $keys[26] => $this->getLclTo(),
            $keys[27] => $this->getUclTo(),
            $keys[28] => $this->getType(),
            $keys[29] => $this->getMethodgrowth(),
            $keys[30] => $this->getWinfinity(),
            $keys[31] => $this->getLinflmax(),
            $keys[32] => $this->getAuxim(),
            $keys[33] => $this->getLogklogloo(),
            $keys[34] => $this->getSourcewinfinity(),
            $keys[35] => $this->getB(),
            $keys[36] => $this->getC(),
            $keys[37] => $this->getTmax(),
            $keys[38] => $this->getTmaxref(),
            $keys[39] => $this->getTm(),
            $keys[40] => $this->getM(),
            $keys[41] => $this->getMethodm(),
            $keys[42] => $this->getMquality(),
            $keys[43] => $this->getMref(),
            $keys[44] => $this->getNumberM(),
            $keys[45] => $this->getR2M(),
            $keys[46] => $this->getSeM(),
            $keys[47] => $this->getSdM(),
            $keys[48] => $this->getLclM(),
            $keys[49] => $this->getUclM(),
            $keys[50] => $this->getAssumeddistm(),
            $keys[51] => $this->getLm(),
            $keys[52] => $this->getLmloo(),
            $keys[53] => $this->getLmsex(),
            $keys[54] => $this->getTypelm(),
            $keys[55] => $this->getUnsexedref(),
            $keys[56] => $this->getLmmale(),
            $keys[57] => $this->getLmloomale(),
            $keys[58] => $this->getLmfemale(),
            $keys[59] => $this->getLmloofemale(),
            $keys[60] => $this->getLocality(),
            $keys[61] => $this->getYearstart(),
            $keys[62] => $this->getYearend(),
            $keys[63] => $this->getYearremark(),
            $keys[64] => $this->getCCode(),
            $keys[65] => $this->getGrowthenviron(),
            $keys[66] => $this->getTemperature(),
            $keys[67] => $this->getDeltat(),
            $keys[68] => $this->getTempref(),
            $keys[69] => $this->getRm(),
            $keys[70] => $this->getComment(),
            $keys[71] => $this->getComment2(),
            $keys[72] => $this->getEntered(),
            $keys[73] => $this->getDateentered(),
            $keys[74] => $this->getModified(),
            $keys[75] => $this->getDatemodified(),
            $keys[76] => $this->getExpert(),
            $keys[77] => $this->getDatechecked(),
            $keys[78] => $this->getTs(),
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
        $pos = PopgrowthPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setECode($value);
                break;
            case 4:
                $this->setPopgrowthref($value);
                break;
            case 5:
                $this->setSex($value);
                break;
            case 6:
                $this->setData($value);
                break;
            case 7:
                $this->setDatasourceref($value);
                break;
            case 8:
                $this->setLoo($value);
                break;
            case 9:
                $this->setNumber($value);
                break;
            case 10:
                $this->setR2($value);
                break;
            case 11:
                $this->setSeLoo($value);
                break;
            case 12:
                $this->setSdLoo($value);
                break;
            case 13:
                $this->setLclLoo($value);
                break;
            case 14:
                $this->setUclLoo($value);
                break;
            case 15:
                $this->setAssumeddistloo($value);
                break;
            case 16:
                $this->setTlinfinity($value);
                break;
            case 17:
                $this->setK($value);
                break;
            case 18:
                $this->setSeK($value);
                break;
            case 19:
                $this->setSdK($value);
                break;
            case 20:
                $this->setLclK($value);
                break;
            case 21:
                $this->setUclK($value);
                break;
            case 22:
                $this->setAssumeddistk($value);
                break;
            case 23:
                $this->setTo($value);
                break;
            case 24:
                $this->setSeTo($value);
                break;
            case 25:
                $this->setSdTo($value);
                break;
            case 26:
                $this->setLclTo($value);
                break;
            case 27:
                $this->setUclTo($value);
                break;
            case 28:
                $this->setType($value);
                break;
            case 29:
                $this->setMethodgrowth($value);
                break;
            case 30:
                $this->setWinfinity($value);
                break;
            case 31:
                $this->setLinflmax($value);
                break;
            case 32:
                $this->setAuxim($value);
                break;
            case 33:
                $this->setLogklogloo($value);
                break;
            case 34:
                $this->setSourcewinfinity($value);
                break;
            case 35:
                $this->setB($value);
                break;
            case 36:
                $this->setC($value);
                break;
            case 37:
                $this->setTmax($value);
                break;
            case 38:
                $this->setTmaxref($value);
                break;
            case 39:
                $this->setTm($value);
                break;
            case 40:
                $this->setM($value);
                break;
            case 41:
                $this->setMethodm($value);
                break;
            case 42:
                $this->setMquality($value);
                break;
            case 43:
                $this->setMref($value);
                break;
            case 44:
                $this->setNumberM($value);
                break;
            case 45:
                $this->setR2M($value);
                break;
            case 46:
                $this->setSeM($value);
                break;
            case 47:
                $this->setSdM($value);
                break;
            case 48:
                $this->setLclM($value);
                break;
            case 49:
                $this->setUclM($value);
                break;
            case 50:
                $this->setAssumeddistm($value);
                break;
            case 51:
                $this->setLm($value);
                break;
            case 52:
                $this->setLmloo($value);
                break;
            case 53:
                $this->setLmsex($value);
                break;
            case 54:
                $this->setTypelm($value);
                break;
            case 55:
                $this->setUnsexedref($value);
                break;
            case 56:
                $this->setLmmale($value);
                break;
            case 57:
                $this->setLmloomale($value);
                break;
            case 58:
                $this->setLmfemale($value);
                break;
            case 59:
                $this->setLmloofemale($value);
                break;
            case 60:
                $this->setLocality($value);
                break;
            case 61:
                $this->setYearstart($value);
                break;
            case 62:
                $this->setYearend($value);
                break;
            case 63:
                $this->setYearremark($value);
                break;
            case 64:
                $this->setCCode($value);
                break;
            case 65:
                $this->setGrowthenviron($value);
                break;
            case 66:
                $this->setTemperature($value);
                break;
            case 67:
                $this->setDeltat($value);
                break;
            case 68:
                $this->setTempref($value);
                break;
            case 69:
                $this->setRm($value);
                break;
            case 70:
                $this->setComment($value);
                break;
            case 71:
                $this->setComment2($value);
                break;
            case 72:
                $this->setEntered($value);
                break;
            case 73:
                $this->setDateentered($value);
                break;
            case 74:
                $this->setModified($value);
                break;
            case 75:
                $this->setDatemodified($value);
                break;
            case 76:
                $this->setExpert($value);
                break;
            case 77:
                $this->setDatechecked($value);
                break;
            case 78:
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
        $keys = PopgrowthPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setECode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPopgrowthref($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSex($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setData($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDatasourceref($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLoo($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setNumber($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setR2($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setSeLoo($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setSdLoo($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setLclLoo($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setUclLoo($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setAssumeddistloo($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setTlinfinity($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setK($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setSeK($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setSdK($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setLclK($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setUclK($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setAssumeddistk($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setTo($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setSeTo($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setSdTo($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setLclTo($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setUclTo($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setType($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setMethodgrowth($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setWinfinity($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setLinflmax($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setAuxim($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setLogklogloo($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setSourcewinfinity($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setB($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setC($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setTmax($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setTmaxref($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setTm($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setM($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setMethodm($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setMquality($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setMref($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setNumberM($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setR2M($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setSeM($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setSdM($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setLclM($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setUclM($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setAssumeddistm($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setLm($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setLmloo($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setLmsex($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setTypelm($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setUnsexedref($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setLmmale($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setLmloomale($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setLmfemale($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setLmloofemale($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setLocality($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setYearstart($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setYearend($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setYearremark($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setCCode($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setGrowthenviron($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setTemperature($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setDeltat($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setTempref($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setRm($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setComment($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setComment2($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setEntered($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setDateentered($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setModified($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setDatemodified($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setExpert($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setDatechecked($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setTs($arr[$keys[78]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PopgrowthPeer::DATABASE_NAME);

        if ($this->isColumnModified(PopgrowthPeer::AUTOCTR)) $criteria->add(PopgrowthPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(PopgrowthPeer::STOCKCODE)) $criteria->add(PopgrowthPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(PopgrowthPeer::SPECCODE)) $criteria->add(PopgrowthPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(PopgrowthPeer::E_CODE)) $criteria->add(PopgrowthPeer::E_CODE, $this->e_code);
        if ($this->isColumnModified(PopgrowthPeer::POPGROWTHREF)) $criteria->add(PopgrowthPeer::POPGROWTHREF, $this->popgrowthref);
        if ($this->isColumnModified(PopgrowthPeer::SEX)) $criteria->add(PopgrowthPeer::SEX, $this->sex);
        if ($this->isColumnModified(PopgrowthPeer::DATA)) $criteria->add(PopgrowthPeer::DATA, $this->data);
        if ($this->isColumnModified(PopgrowthPeer::DATASOURCEREF)) $criteria->add(PopgrowthPeer::DATASOURCEREF, $this->datasourceref);
        if ($this->isColumnModified(PopgrowthPeer::LOO)) $criteria->add(PopgrowthPeer::LOO, $this->loo);
        if ($this->isColumnModified(PopgrowthPeer::NUMBER)) $criteria->add(PopgrowthPeer::NUMBER, $this->number);
        if ($this->isColumnModified(PopgrowthPeer::R2)) $criteria->add(PopgrowthPeer::R2, $this->r2);
        if ($this->isColumnModified(PopgrowthPeer::SE_LOO)) $criteria->add(PopgrowthPeer::SE_LOO, $this->se_loo);
        if ($this->isColumnModified(PopgrowthPeer::SD_LOO)) $criteria->add(PopgrowthPeer::SD_LOO, $this->sd_loo);
        if ($this->isColumnModified(PopgrowthPeer::LCL_LOO)) $criteria->add(PopgrowthPeer::LCL_LOO, $this->lcl_loo);
        if ($this->isColumnModified(PopgrowthPeer::UCL_LOO)) $criteria->add(PopgrowthPeer::UCL_LOO, $this->ucl_loo);
        if ($this->isColumnModified(PopgrowthPeer::ASSUMEDDISTLOO)) $criteria->add(PopgrowthPeer::ASSUMEDDISTLOO, $this->assumeddistloo);
        if ($this->isColumnModified(PopgrowthPeer::TLINFINITY)) $criteria->add(PopgrowthPeer::TLINFINITY, $this->tlinfinity);
        if ($this->isColumnModified(PopgrowthPeer::K)) $criteria->add(PopgrowthPeer::K, $this->k);
        if ($this->isColumnModified(PopgrowthPeer::SE_K)) $criteria->add(PopgrowthPeer::SE_K, $this->se_k);
        if ($this->isColumnModified(PopgrowthPeer::SD_K)) $criteria->add(PopgrowthPeer::SD_K, $this->sd_k);
        if ($this->isColumnModified(PopgrowthPeer::LCL_K)) $criteria->add(PopgrowthPeer::LCL_K, $this->lcl_k);
        if ($this->isColumnModified(PopgrowthPeer::UCL_K)) $criteria->add(PopgrowthPeer::UCL_K, $this->ucl_k);
        if ($this->isColumnModified(PopgrowthPeer::ASSUMEDDISTK)) $criteria->add(PopgrowthPeer::ASSUMEDDISTK, $this->assumeddistk);
        if ($this->isColumnModified(PopgrowthPeer::TO)) $criteria->add(PopgrowthPeer::TO, $this->to);
        if ($this->isColumnModified(PopgrowthPeer::SE_TO)) $criteria->add(PopgrowthPeer::SE_TO, $this->se_to);
        if ($this->isColumnModified(PopgrowthPeer::SD_TO)) $criteria->add(PopgrowthPeer::SD_TO, $this->sd_to);
        if ($this->isColumnModified(PopgrowthPeer::LCL_TO)) $criteria->add(PopgrowthPeer::LCL_TO, $this->lcl_to);
        if ($this->isColumnModified(PopgrowthPeer::UCL_TO)) $criteria->add(PopgrowthPeer::UCL_TO, $this->ucl_to);
        if ($this->isColumnModified(PopgrowthPeer::TYPE)) $criteria->add(PopgrowthPeer::TYPE, $this->type);
        if ($this->isColumnModified(PopgrowthPeer::METHODGROWTH)) $criteria->add(PopgrowthPeer::METHODGROWTH, $this->methodgrowth);
        if ($this->isColumnModified(PopgrowthPeer::WINFINITY)) $criteria->add(PopgrowthPeer::WINFINITY, $this->winfinity);
        if ($this->isColumnModified(PopgrowthPeer::LINFLMAX)) $criteria->add(PopgrowthPeer::LINFLMAX, $this->linflmax);
        if ($this->isColumnModified(PopgrowthPeer::AUXIM)) $criteria->add(PopgrowthPeer::AUXIM, $this->auxim);
        if ($this->isColumnModified(PopgrowthPeer::LOGKLOGLOO)) $criteria->add(PopgrowthPeer::LOGKLOGLOO, $this->logklogloo);
        if ($this->isColumnModified(PopgrowthPeer::SOURCEWINFINITY)) $criteria->add(PopgrowthPeer::SOURCEWINFINITY, $this->sourcewinfinity);
        if ($this->isColumnModified(PopgrowthPeer::B)) $criteria->add(PopgrowthPeer::B, $this->b);
        if ($this->isColumnModified(PopgrowthPeer::C)) $criteria->add(PopgrowthPeer::C, $this->c);
        if ($this->isColumnModified(PopgrowthPeer::TMAX)) $criteria->add(PopgrowthPeer::TMAX, $this->tmax);
        if ($this->isColumnModified(PopgrowthPeer::TMAXREF)) $criteria->add(PopgrowthPeer::TMAXREF, $this->tmaxref);
        if ($this->isColumnModified(PopgrowthPeer::TM)) $criteria->add(PopgrowthPeer::TM, $this->tm);
        if ($this->isColumnModified(PopgrowthPeer::M)) $criteria->add(PopgrowthPeer::M, $this->m);
        if ($this->isColumnModified(PopgrowthPeer::METHODM)) $criteria->add(PopgrowthPeer::METHODM, $this->methodm);
        if ($this->isColumnModified(PopgrowthPeer::MQUALITY)) $criteria->add(PopgrowthPeer::MQUALITY, $this->mquality);
        if ($this->isColumnModified(PopgrowthPeer::MREF)) $criteria->add(PopgrowthPeer::MREF, $this->mref);
        if ($this->isColumnModified(PopgrowthPeer::NUMBER_M)) $criteria->add(PopgrowthPeer::NUMBER_M, $this->number_m);
        if ($this->isColumnModified(PopgrowthPeer::R2_M)) $criteria->add(PopgrowthPeer::R2_M, $this->r2_m);
        if ($this->isColumnModified(PopgrowthPeer::SE_M)) $criteria->add(PopgrowthPeer::SE_M, $this->se_m);
        if ($this->isColumnModified(PopgrowthPeer::SD_M)) $criteria->add(PopgrowthPeer::SD_M, $this->sd_m);
        if ($this->isColumnModified(PopgrowthPeer::LCL_M)) $criteria->add(PopgrowthPeer::LCL_M, $this->lcl_m);
        if ($this->isColumnModified(PopgrowthPeer::UCL_M)) $criteria->add(PopgrowthPeer::UCL_M, $this->ucl_m);
        if ($this->isColumnModified(PopgrowthPeer::ASSUMEDDISTM)) $criteria->add(PopgrowthPeer::ASSUMEDDISTM, $this->assumeddistm);
        if ($this->isColumnModified(PopgrowthPeer::LM)) $criteria->add(PopgrowthPeer::LM, $this->lm);
        if ($this->isColumnModified(PopgrowthPeer::LMLOO)) $criteria->add(PopgrowthPeer::LMLOO, $this->lmloo);
        if ($this->isColumnModified(PopgrowthPeer::LMSEX)) $criteria->add(PopgrowthPeer::LMSEX, $this->lmsex);
        if ($this->isColumnModified(PopgrowthPeer::TYPELM)) $criteria->add(PopgrowthPeer::TYPELM, $this->typelm);
        if ($this->isColumnModified(PopgrowthPeer::UNSEXEDREF)) $criteria->add(PopgrowthPeer::UNSEXEDREF, $this->unsexedref);
        if ($this->isColumnModified(PopgrowthPeer::LMMALE)) $criteria->add(PopgrowthPeer::LMMALE, $this->lmmale);
        if ($this->isColumnModified(PopgrowthPeer::LMLOOMALE)) $criteria->add(PopgrowthPeer::LMLOOMALE, $this->lmloomale);
        if ($this->isColumnModified(PopgrowthPeer::LMFEMALE)) $criteria->add(PopgrowthPeer::LMFEMALE, $this->lmfemale);
        if ($this->isColumnModified(PopgrowthPeer::LMLOOFEMALE)) $criteria->add(PopgrowthPeer::LMLOOFEMALE, $this->lmloofemale);
        if ($this->isColumnModified(PopgrowthPeer::LOCALITY)) $criteria->add(PopgrowthPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(PopgrowthPeer::YEARSTART)) $criteria->add(PopgrowthPeer::YEARSTART, $this->yearstart);
        if ($this->isColumnModified(PopgrowthPeer::YEAREND)) $criteria->add(PopgrowthPeer::YEAREND, $this->yearend);
        if ($this->isColumnModified(PopgrowthPeer::YEARREMARK)) $criteria->add(PopgrowthPeer::YEARREMARK, $this->yearremark);
        if ($this->isColumnModified(PopgrowthPeer::C_CODE)) $criteria->add(PopgrowthPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(PopgrowthPeer::GROWTHENVIRON)) $criteria->add(PopgrowthPeer::GROWTHENVIRON, $this->growthenviron);
        if ($this->isColumnModified(PopgrowthPeer::TEMPERATURE)) $criteria->add(PopgrowthPeer::TEMPERATURE, $this->temperature);
        if ($this->isColumnModified(PopgrowthPeer::DELTAT)) $criteria->add(PopgrowthPeer::DELTAT, $this->deltat);
        if ($this->isColumnModified(PopgrowthPeer::TEMPREF)) $criteria->add(PopgrowthPeer::TEMPREF, $this->tempref);
        if ($this->isColumnModified(PopgrowthPeer::RM)) $criteria->add(PopgrowthPeer::RM, $this->rm);
        if ($this->isColumnModified(PopgrowthPeer::COMMENT)) $criteria->add(PopgrowthPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(PopgrowthPeer::COMMENT2)) $criteria->add(PopgrowthPeer::COMMENT2, $this->comment2);
        if ($this->isColumnModified(PopgrowthPeer::ENTERED)) $criteria->add(PopgrowthPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(PopgrowthPeer::DATEENTERED)) $criteria->add(PopgrowthPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(PopgrowthPeer::MODIFIED)) $criteria->add(PopgrowthPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(PopgrowthPeer::DATEMODIFIED)) $criteria->add(PopgrowthPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(PopgrowthPeer::EXPERT)) $criteria->add(PopgrowthPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(PopgrowthPeer::DATECHECKED)) $criteria->add(PopgrowthPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(PopgrowthPeer::TS)) $criteria->add(PopgrowthPeer::TS, $this->ts);

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
        $criteria = new Criteria(PopgrowthPeer::DATABASE_NAME);
        $criteria->add(PopgrowthPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of Popgrowth (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setECode($this->getECode());
        $copyObj->setPopgrowthref($this->getPopgrowthref());
        $copyObj->setSex($this->getSex());
        $copyObj->setData($this->getData());
        $copyObj->setDatasourceref($this->getDatasourceref());
        $copyObj->setLoo($this->getLoo());
        $copyObj->setNumber($this->getNumber());
        $copyObj->setR2($this->getR2());
        $copyObj->setSeLoo($this->getSeLoo());
        $copyObj->setSdLoo($this->getSdLoo());
        $copyObj->setLclLoo($this->getLclLoo());
        $copyObj->setUclLoo($this->getUclLoo());
        $copyObj->setAssumeddistloo($this->getAssumeddistloo());
        $copyObj->setTlinfinity($this->getTlinfinity());
        $copyObj->setK($this->getK());
        $copyObj->setSeK($this->getSeK());
        $copyObj->setSdK($this->getSdK());
        $copyObj->setLclK($this->getLclK());
        $copyObj->setUclK($this->getUclK());
        $copyObj->setAssumeddistk($this->getAssumeddistk());
        $copyObj->setTo($this->getTo());
        $copyObj->setSeTo($this->getSeTo());
        $copyObj->setSdTo($this->getSdTo());
        $copyObj->setLclTo($this->getLclTo());
        $copyObj->setUclTo($this->getUclTo());
        $copyObj->setType($this->getType());
        $copyObj->setMethodgrowth($this->getMethodgrowth());
        $copyObj->setWinfinity($this->getWinfinity());
        $copyObj->setLinflmax($this->getLinflmax());
        $copyObj->setAuxim($this->getAuxim());
        $copyObj->setLogklogloo($this->getLogklogloo());
        $copyObj->setSourcewinfinity($this->getSourcewinfinity());
        $copyObj->setB($this->getB());
        $copyObj->setC($this->getC());
        $copyObj->setTmax($this->getTmax());
        $copyObj->setTmaxref($this->getTmaxref());
        $copyObj->setTm($this->getTm());
        $copyObj->setM($this->getM());
        $copyObj->setMethodm($this->getMethodm());
        $copyObj->setMquality($this->getMquality());
        $copyObj->setMref($this->getMref());
        $copyObj->setNumberM($this->getNumberM());
        $copyObj->setR2M($this->getR2M());
        $copyObj->setSeM($this->getSeM());
        $copyObj->setSdM($this->getSdM());
        $copyObj->setLclM($this->getLclM());
        $copyObj->setUclM($this->getUclM());
        $copyObj->setAssumeddistm($this->getAssumeddistm());
        $copyObj->setLm($this->getLm());
        $copyObj->setLmloo($this->getLmloo());
        $copyObj->setLmsex($this->getLmsex());
        $copyObj->setTypelm($this->getTypelm());
        $copyObj->setUnsexedref($this->getUnsexedref());
        $copyObj->setLmmale($this->getLmmale());
        $copyObj->setLmloomale($this->getLmloomale());
        $copyObj->setLmfemale($this->getLmfemale());
        $copyObj->setLmloofemale($this->getLmloofemale());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setYearstart($this->getYearstart());
        $copyObj->setYearend($this->getYearend());
        $copyObj->setYearremark($this->getYearremark());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setGrowthenviron($this->getGrowthenviron());
        $copyObj->setTemperature($this->getTemperature());
        $copyObj->setDeltat($this->getDeltat());
        $copyObj->setTempref($this->getTempref());
        $copyObj->setRm($this->getRm());
        $copyObj->setComment($this->getComment());
        $copyObj->setComment2($this->getComment2());
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
     * @return Popgrowth Clone of current object.
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
     * @return PopgrowthPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PopgrowthPeer();
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
        $this->e_code = null;
        $this->popgrowthref = null;
        $this->sex = null;
        $this->data = null;
        $this->datasourceref = null;
        $this->loo = null;
        $this->number = null;
        $this->r2 = null;
        $this->se_loo = null;
        $this->sd_loo = null;
        $this->lcl_loo = null;
        $this->ucl_loo = null;
        $this->assumeddistloo = null;
        $this->tlinfinity = null;
        $this->k = null;
        $this->se_k = null;
        $this->sd_k = null;
        $this->lcl_k = null;
        $this->ucl_k = null;
        $this->assumeddistk = null;
        $this->to = null;
        $this->se_to = null;
        $this->sd_to = null;
        $this->lcl_to = null;
        $this->ucl_to = null;
        $this->type = null;
        $this->methodgrowth = null;
        $this->winfinity = null;
        $this->linflmax = null;
        $this->auxim = null;
        $this->logklogloo = null;
        $this->sourcewinfinity = null;
        $this->b = null;
        $this->c = null;
        $this->tmax = null;
        $this->tmaxref = null;
        $this->tm = null;
        $this->m = null;
        $this->methodm = null;
        $this->mquality = null;
        $this->mref = null;
        $this->number_m = null;
        $this->r2_m = null;
        $this->se_m = null;
        $this->sd_m = null;
        $this->lcl_m = null;
        $this->ucl_m = null;
        $this->assumeddistm = null;
        $this->lm = null;
        $this->lmloo = null;
        $this->lmsex = null;
        $this->typelm = null;
        $this->unsexedref = null;
        $this->lmmale = null;
        $this->lmloomale = null;
        $this->lmfemale = null;
        $this->lmloofemale = null;
        $this->locality = null;
        $this->yearstart = null;
        $this->yearend = null;
        $this->yearremark = null;
        $this->c_code = null;
        $this->growthenviron = null;
        $this->temperature = null;
        $this->deltat = null;
        $this->tempref = null;
        $this->rm = null;
        $this->comment = null;
        $this->comment2 = null;
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
        return (string) $this->exportTo(PopgrowthPeer::DEFAULT_STRING_FORMAT);
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
