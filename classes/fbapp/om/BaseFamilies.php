<?php


/**
 * Base class that represents a row from the 'families' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFamilies extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FamiliesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FamiliesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the famcode field.
     * @var        int
     */
    protected $famcode;

    /**
     * The value for the sortid field.
     * @var        int
     */
    protected $sortid;

    /**
     * The value for the family field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $family;

    /**
     * The value for the authoryear field.
     * @var        string
     */
    protected $authoryear;

    /**
     * The value for the qualification field.
     * @var        string
     */
    protected $qualification;

    /**
     * The value for the commonname field.
     * @var        string
     */
    protected $commonname;

    /**
     * The value for the familiesrefno field.
     * @var        int
     */
    protected $familiesrefno;

    /**
     * The value for the synonym field.
     * @var        int
     */
    protected $synonym;

    /**
     * The value for the order field.
     * @var        string
     */
    protected $order;

    /**
     * The value for the ordnum field.
     * @var        int
     */
    protected $ordnum;

    /**
     * The value for the class field.
     * @var        string
     */
    protected $class;

    /**
     * The value for the classnum field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $classnum;

    /**
     * The value for the genera field.
     * @var        int
     */
    protected $genera;

    /**
     * The value for the species field.
     * @var        int
     */
    protected $species;

    /**
     * The value for the bodyshapei field.
     * @var        string
     */
    protected $bodyshapei;

    /**
     * The value for the speciescount field.
     * @var        int
     */
    protected $speciescount;

    /**
     * The value for the marine field.
     * @var        boolean
     */
    protected $marine;

    /**
     * The value for the brackish field.
     * @var        boolean
     */
    protected $brackish;

    /**
     * The value for the freshwater field.
     * @var        boolean
     */
    protected $freshwater;

    /**
     * The value for the watersalinity field.
     * @var        string
     */
    protected $watersalinity;

    /**
     * The value for the aquarium field.
     * @var        string
     */
    protected $aquarium;

    /**
     * The value for the reprguild field.
     * @var        string
     */
    protected $reprguild;

    /**
     * The value for the swimmode field.
     * @var        string
     */
    protected $swimmode;

    /**
     * The value for the activity field.
     * @var        string
     */
    protected $activity;

    /**
     * The value for the periodrange field.
     * @var        string
     */
    protected $periodrange;

    /**
     * The value for the period field.
     * @var        string
     */
    protected $period;

    /**
     * The value for the epochrange field.
     * @var        string
     */
    protected $epochrange;

    /**
     * The value for the epoch field.
     * @var        string
     */
    protected $epoch;

    /**
     * The value for the fossilref field.
     * @var        int
     */
    protected $fossilref;

    /**
     * The value for the fampic field.
     * @var        string
     */
    protected $fampic;

    /**
     * The value for the larvpic field.
     * @var        string
     */
    protected $larvpic;

    /**
     * The value for the validgenera field.
     * @var        int
     */
    protected $validgenera;

    /**
     * The value for the complete field.
     * @var        boolean
     */
    protected $complete;

    /**
     * The value for the source field.
     * @var        string
     */
    protected $source;

    /**
     * The value for the aspinesmin field.
     * @var        int
     */
    protected $aspinesmin;

    /**
     * The value for the aspinesmax field.
     * @var        int
     */
    protected $aspinesmax;

    /**
     * The value for the araysmin field.
     * @var        int
     */
    protected $araysmin;

    /**
     * The value for the araysmax field.
     * @var        int
     */
    protected $araysmax;

    /**
     * The value for the dspinesmin field.
     * @var        int
     */
    protected $dspinesmin;

    /**
     * The value for the dspinesmax field.
     * @var        int
     */
    protected $dspinesmax;

    /**
     * The value for the draysmin field.
     * @var        int
     */
    protected $draysmin;

    /**
     * The value for the draysmax field.
     * @var        int
     */
    protected $draysmax;

    /**
     * The value for the northernmost field.
     * @var        int
     */
    protected $northernmost;

    /**
     * The value for the northsouthn field.
     * @var        string
     */
    protected $northsouthn;

    /**
     * The value for the southernmost field.
     * @var        int
     */
    protected $southernmost;

    /**
     * The value for the northsouths field.
     * @var        string
     */
    protected $northsouths;

    /**
     * The value for the westernmost field.
     * @var        int
     */
    protected $westernmost;

    /**
     * The value for the westeastw field.
     * @var        string
     */
    protected $westeastw;

    /**
     * The value for the easternmost field.
     * @var        int
     */
    protected $easternmost;

    /**
     * The value for the westeaste field.
     * @var        string
     */
    protected $westeaste;

    /**
     * The value for the phiprime field.
     * @var        double
     */
    protected $phiprime;

    /**
     * The value for the division field.
     * @var        string
     */
    protected $division;

    /**
     * The value for the experts field.
     * @var        string
     */
    protected $experts;

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
     * The value for the remark field.
     * @var        string
     */
    protected $remark;

    /**
     * The value for the etymology field.
     * @var        string
     */
    protected $etymology;

    /**
     * The value for the familyexpert field.
     * @var        int
     */
    protected $familyexpert;

    /**
     * The value for the fbcontact field.
     * @var        int
     */
    protected $fbcontact;

    /**
     * The value for the clofexpert field.
     * @var        string
     */
    protected $clofexpert;

    /**
     * The value for the commonname_greek field.
     * @var        string
     */
    protected $commonname_greek;

    /**
     * The value for the commonname_greek_u field.
     * @var        string
     */
    protected $commonname_greek_u;

    /**
     * The value for the commonname_russian field.
     * @var        string
     */
    protected $commonname_russian;

    /**
     * The value for the commonname_russian_original field.
     * @var        string
     */
    protected $commonname_russian_original;

    /**
     * The value for the commonname_german field.
     * @var        string
     */
    protected $commonname_german;

    /**
     * The value for the commonname_french field.
     * @var        string
     */
    protected $commonname_french;

    /**
     * The value for the commonname_italian field.
     * @var        string
     */
    protected $commonname_italian;

    /**
     * The value for the commonname_dutch field.
     * @var        string
     */
    protected $commonname_dutch;

    /**
     * The value for the commonname_chinese field.
     * @var        string
     */
    protected $commonname_chinese;

    /**
     * The value for the commonname_chinese_u field.
     * @var        string
     */
    protected $commonname_chinese_u;

    /**
     * The value for the commonname_spanish field.
     * @var        string
     */
    protected $commonname_spanish;

    /**
     * The value for the commonname_portuguese field.
     * @var        string
     */
    protected $commonname_portuguese;

    /**
     * The value for the commonname_swedish field.
     * @var        string
     */
    protected $commonname_swedish;

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
        $this->family = '';
        $this->classnum = 0;
    }

    /**
     * Initializes internal state of BaseFamilies object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [famcode] column value.
     *
     * @return int
     */
    public function getFamcode()
    {

        return $this->famcode;
    }

    /**
     * Get the [sortid] column value.
     *
     * @return int
     */
    public function getSortid()
    {

        return $this->sortid;
    }

    /**
     * Get the [family] column value.
     *
     * @return string
     */
    public function getFamily()
    {

        return $this->family;
    }

    /**
     * Get the [authoryear] column value.
     *
     * @return string
     */
    public function getAuthoryear()
    {

        return $this->authoryear;
    }

    /**
     * Get the [qualification] column value.
     *
     * @return string
     */
    public function getQualification()
    {

        return $this->qualification;
    }

    /**
     * Get the [commonname] column value.
     *
     * @return string
     */
    public function getCommonname()
    {

        return $this->commonname;
    }

    /**
     * Get the [familiesrefno] column value.
     *
     * @return int
     */
    public function getFamiliesrefno()
    {

        return $this->familiesrefno;
    }

    /**
     * Get the [synonym] column value.
     *
     * @return int
     */
    public function getSynonym()
    {

        return $this->synonym;
    }

    /**
     * Get the [order] column value.
     *
     * @return string
     */
    public function getOrder()
    {

        return $this->order;
    }

    /**
     * Get the [ordnum] column value.
     *
     * @return int
     */
    public function getOrdnum()
    {

        return $this->ordnum;
    }

    /**
     * Get the [class] column value.
     *
     * @return string
     */
    public function getClass()
    {

        return $this->class;
    }

    /**
     * Get the [classnum] column value.
     *
     * @return int
     */
    public function getClassnum()
    {

        return $this->classnum;
    }

    /**
     * Get the [genera] column value.
     *
     * @return int
     */
    public function getGenera()
    {

        return $this->genera;
    }

    /**
     * Get the [species] column value.
     *
     * @return int
     */
    public function getSpecies()
    {

        return $this->species;
    }

    /**
     * Get the [bodyshapei] column value.
     *
     * @return string
     */
    public function getBodyshapei()
    {

        return $this->bodyshapei;
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
     * Get the [marine] column value.
     *
     * @return boolean
     */
    public function getMarine()
    {

        return $this->marine;
    }

    /**
     * Get the [brackish] column value.
     *
     * @return boolean
     */
    public function getBrackish()
    {

        return $this->brackish;
    }

    /**
     * Get the [freshwater] column value.
     *
     * @return boolean
     */
    public function getFreshwater()
    {

        return $this->freshwater;
    }

    /**
     * Get the [watersalinity] column value.
     *
     * @return string
     */
    public function getWatersalinity()
    {

        return $this->watersalinity;
    }

    /**
     * Get the [aquarium] column value.
     *
     * @return string
     */
    public function getAquarium()
    {

        return $this->aquarium;
    }

    /**
     * Get the [reprguild] column value.
     *
     * @return string
     */
    public function getReprguild()
    {

        return $this->reprguild;
    }

    /**
     * Get the [swimmode] column value.
     *
     * @return string
     */
    public function getSwimmode()
    {

        return $this->swimmode;
    }

    /**
     * Get the [activity] column value.
     *
     * @return string
     */
    public function getActivity()
    {

        return $this->activity;
    }

    /**
     * Get the [periodrange] column value.
     *
     * @return string
     */
    public function getPeriodrange()
    {

        return $this->periodrange;
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
     * Get the [epochrange] column value.
     *
     * @return string
     */
    public function getEpochrange()
    {

        return $this->epochrange;
    }

    /**
     * Get the [epoch] column value.
     *
     * @return string
     */
    public function getEpoch()
    {

        return $this->epoch;
    }

    /**
     * Get the [fossilref] column value.
     *
     * @return int
     */
    public function getFossilref()
    {

        return $this->fossilref;
    }

    /**
     * Get the [fampic] column value.
     *
     * @return string
     */
    public function getFampic()
    {

        return $this->fampic;
    }

    /**
     * Get the [larvpic] column value.
     *
     * @return string
     */
    public function getLarvpic()
    {

        return $this->larvpic;
    }

    /**
     * Get the [validgenera] column value.
     *
     * @return int
     */
    public function getValidgenera()
    {

        return $this->validgenera;
    }

    /**
     * Get the [complete] column value.
     *
     * @return boolean
     */
    public function getComplete()
    {

        return $this->complete;
    }

    /**
     * Get the [source] column value.
     *
     * @return string
     */
    public function getSource()
    {

        return $this->source;
    }

    /**
     * Get the [aspinesmin] column value.
     *
     * @return int
     */
    public function getAspinesmin()
    {

        return $this->aspinesmin;
    }

    /**
     * Get the [aspinesmax] column value.
     *
     * @return int
     */
    public function getAspinesmax()
    {

        return $this->aspinesmax;
    }

    /**
     * Get the [araysmin] column value.
     *
     * @return int
     */
    public function getAraysmin()
    {

        return $this->araysmin;
    }

    /**
     * Get the [araysmax] column value.
     *
     * @return int
     */
    public function getAraysmax()
    {

        return $this->araysmax;
    }

    /**
     * Get the [dspinesmin] column value.
     *
     * @return int
     */
    public function getDspinesmin()
    {

        return $this->dspinesmin;
    }

    /**
     * Get the [dspinesmax] column value.
     *
     * @return int
     */
    public function getDspinesmax()
    {

        return $this->dspinesmax;
    }

    /**
     * Get the [draysmin] column value.
     *
     * @return int
     */
    public function getDraysmin()
    {

        return $this->draysmin;
    }

    /**
     * Get the [draysmax] column value.
     *
     * @return int
     */
    public function getDraysmax()
    {

        return $this->draysmax;
    }

    /**
     * Get the [northernmost] column value.
     *
     * @return int
     */
    public function getNorthernmost()
    {

        return $this->northernmost;
    }

    /**
     * Get the [northsouthn] column value.
     *
     * @return string
     */
    public function getNorthsouthn()
    {

        return $this->northsouthn;
    }

    /**
     * Get the [southernmost] column value.
     *
     * @return int
     */
    public function getSouthernmost()
    {

        return $this->southernmost;
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
     * Get the [westernmost] column value.
     *
     * @return int
     */
    public function getWesternmost()
    {

        return $this->westernmost;
    }

    /**
     * Get the [westeastw] column value.
     *
     * @return string
     */
    public function getWesteastw()
    {

        return $this->westeastw;
    }

    /**
     * Get the [easternmost] column value.
     *
     * @return int
     */
    public function getEasternmost()
    {

        return $this->easternmost;
    }

    /**
     * Get the [westeaste] column value.
     *
     * @return string
     */
    public function getWesteaste()
    {

        return $this->westeaste;
    }

    /**
     * Get the [phiprime] column value.
     *
     * @return double
     */
    public function getPhiprime()
    {

        return $this->phiprime;
    }

    /**
     * Get the [division] column value.
     *
     * @return string
     */
    public function getDivision()
    {

        return $this->division;
    }

    /**
     * Get the [experts] column value.
     *
     * @return string
     */
    public function getExperts()
    {

        return $this->experts;
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
     * Get the [remark] column value.
     *
     * @return string
     */
    public function getRemark()
    {

        return $this->remark;
    }

    /**
     * Get the [etymology] column value.
     *
     * @return string
     */
    public function getEtymology()
    {

        return $this->etymology;
    }

    /**
     * Get the [familyexpert] column value.
     *
     * @return int
     */
    public function getFamilyexpert()
    {

        return $this->familyexpert;
    }

    /**
     * Get the [fbcontact] column value.
     *
     * @return int
     */
    public function getFbcontact()
    {

        return $this->fbcontact;
    }

    /**
     * Get the [clofexpert] column value.
     *
     * @return string
     */
    public function getClofexpert()
    {

        return $this->clofexpert;
    }

    /**
     * Get the [commonname_greek] column value.
     *
     * @return string
     */
    public function getCommonnameGreek()
    {

        return $this->commonname_greek;
    }

    /**
     * Get the [commonname_greek_u] column value.
     *
     * @return string
     */
    public function getCommonnameGreekU()
    {

        return $this->commonname_greek_u;
    }

    /**
     * Get the [commonname_russian] column value.
     *
     * @return string
     */
    public function getCommonnameRussian()
    {

        return $this->commonname_russian;
    }

    /**
     * Get the [commonname_russian_original] column value.
     *
     * @return string
     */
    public function getCommonnameRussianOriginal()
    {

        return $this->commonname_russian_original;
    }

    /**
     * Get the [commonname_german] column value.
     *
     * @return string
     */
    public function getCommonnameGerman()
    {

        return $this->commonname_german;
    }

    /**
     * Get the [commonname_french] column value.
     *
     * @return string
     */
    public function getCommonnameFrench()
    {

        return $this->commonname_french;
    }

    /**
     * Get the [commonname_italian] column value.
     *
     * @return string
     */
    public function getCommonnameItalian()
    {

        return $this->commonname_italian;
    }

    /**
     * Get the [commonname_dutch] column value.
     *
     * @return string
     */
    public function getCommonnameDutch()
    {

        return $this->commonname_dutch;
    }

    /**
     * Get the [commonname_chinese] column value.
     *
     * @return string
     */
    public function getCommonnameChinese()
    {

        return $this->commonname_chinese;
    }

    /**
     * Get the [commonname_chinese_u] column value.
     *
     * @return string
     */
    public function getCommonnameChineseU()
    {

        return $this->commonname_chinese_u;
    }

    /**
     * Get the [commonname_spanish] column value.
     *
     * @return string
     */
    public function getCommonnameSpanish()
    {

        return $this->commonname_spanish;
    }

    /**
     * Get the [commonname_portuguese] column value.
     *
     * @return string
     */
    public function getCommonnamePortuguese()
    {

        return $this->commonname_portuguese;
    }

    /**
     * Get the [commonname_swedish] column value.
     *
     * @return string
     */
    public function getCommonnameSwedish()
    {

        return $this->commonname_swedish;
    }

    /**
     * Set the value of [famcode] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setFamcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->famcode !== $v) {
            $this->famcode = $v;
            $this->modifiedColumns[] = FamiliesPeer::FAMCODE;
        }


        return $this;
    } // setFamcode()

    /**
     * Set the value of [sortid] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setSortid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sortid !== $v) {
            $this->sortid = $v;
            $this->modifiedColumns[] = FamiliesPeer::SORTID;
        }


        return $this;
    } // setSortid()

    /**
     * Set the value of [family] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setFamily($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->family !== $v) {
            $this->family = $v;
            $this->modifiedColumns[] = FamiliesPeer::FAMILY;
        }


        return $this;
    } // setFamily()

    /**
     * Set the value of [authoryear] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setAuthoryear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->authoryear !== $v) {
            $this->authoryear = $v;
            $this->modifiedColumns[] = FamiliesPeer::AUTHORYEAR;
        }


        return $this;
    } // setAuthoryear()

    /**
     * Set the value of [qualification] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setQualification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->qualification !== $v) {
            $this->qualification = $v;
            $this->modifiedColumns[] = FamiliesPeer::QUALIFICATION;
        }


        return $this;
    } // setQualification()

    /**
     * Set the value of [commonname] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setCommonname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname !== $v) {
            $this->commonname = $v;
            $this->modifiedColumns[] = FamiliesPeer::COMMONNAME;
        }


        return $this;
    } // setCommonname()

    /**
     * Set the value of [familiesrefno] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setFamiliesrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->familiesrefno !== $v) {
            $this->familiesrefno = $v;
            $this->modifiedColumns[] = FamiliesPeer::FAMILIESREFNO;
        }


        return $this;
    } // setFamiliesrefno()

    /**
     * Set the value of [synonym] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setSynonym($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->synonym !== $v) {
            $this->synonym = $v;
            $this->modifiedColumns[] = FamiliesPeer::SYNONYM;
        }


        return $this;
    } // setSynonym()

    /**
     * Set the value of [order] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setOrder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->order !== $v) {
            $this->order = $v;
            $this->modifiedColumns[] = FamiliesPeer::ORDER;
        }


        return $this;
    } // setOrder()

    /**
     * Set the value of [ordnum] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setOrdnum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ordnum !== $v) {
            $this->ordnum = $v;
            $this->modifiedColumns[] = FamiliesPeer::ORDNUM;
        }


        return $this;
    } // setOrdnum()

    /**
     * Set the value of [class] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setClass($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->class !== $v) {
            $this->class = $v;
            $this->modifiedColumns[] = FamiliesPeer::CLAZZ;
        }


        return $this;
    } // setClass()

    /**
     * Set the value of [classnum] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setClassnum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->classnum !== $v) {
            $this->classnum = $v;
            $this->modifiedColumns[] = FamiliesPeer::CLASSNUM;
        }


        return $this;
    } // setClassnum()

    /**
     * Set the value of [genera] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setGenera($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->genera !== $v) {
            $this->genera = $v;
            $this->modifiedColumns[] = FamiliesPeer::GENERA;
        }


        return $this;
    } // setGenera()

    /**
     * Set the value of [species] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setSpecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->species !== $v) {
            $this->species = $v;
            $this->modifiedColumns[] = FamiliesPeer::SPECIES;
        }


        return $this;
    } // setSpecies()

    /**
     * Set the value of [bodyshapei] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setBodyshapei($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bodyshapei !== $v) {
            $this->bodyshapei = $v;
            $this->modifiedColumns[] = FamiliesPeer::BODYSHAPEI;
        }


        return $this;
    } // setBodyshapei()

    /**
     * Set the value of [speciescount] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setSpeciescount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speciescount !== $v) {
            $this->speciescount = $v;
            $this->modifiedColumns[] = FamiliesPeer::SPECIESCOUNT;
        }


        return $this;
    } // setSpeciescount()

    /**
     * Sets the value of the [marine] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Families The current object (for fluent API support)
     */
    public function setMarine($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->marine !== $v) {
            $this->marine = $v;
            $this->modifiedColumns[] = FamiliesPeer::MARINE;
        }


        return $this;
    } // setMarine()

    /**
     * Sets the value of the [brackish] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Families The current object (for fluent API support)
     */
    public function setBrackish($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->brackish !== $v) {
            $this->brackish = $v;
            $this->modifiedColumns[] = FamiliesPeer::BRACKISH;
        }


        return $this;
    } // setBrackish()

    /**
     * Sets the value of the [freshwater] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Families The current object (for fluent API support)
     */
    public function setFreshwater($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->freshwater !== $v) {
            $this->freshwater = $v;
            $this->modifiedColumns[] = FamiliesPeer::FRESHWATER;
        }


        return $this;
    } // setFreshwater()

    /**
     * Set the value of [watersalinity] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setWatersalinity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->watersalinity !== $v) {
            $this->watersalinity = $v;
            $this->modifiedColumns[] = FamiliesPeer::WATERSALINITY;
        }


        return $this;
    } // setWatersalinity()

    /**
     * Set the value of [aquarium] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setAquarium($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->aquarium !== $v) {
            $this->aquarium = $v;
            $this->modifiedColumns[] = FamiliesPeer::AQUARIUM;
        }


        return $this;
    } // setAquarium()

    /**
     * Set the value of [reprguild] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setReprguild($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reprguild !== $v) {
            $this->reprguild = $v;
            $this->modifiedColumns[] = FamiliesPeer::REPRGUILD;
        }


        return $this;
    } // setReprguild()

    /**
     * Set the value of [swimmode] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setSwimmode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->swimmode !== $v) {
            $this->swimmode = $v;
            $this->modifiedColumns[] = FamiliesPeer::SWIMMODE;
        }


        return $this;
    } // setSwimmode()

    /**
     * Set the value of [activity] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setActivity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->activity !== $v) {
            $this->activity = $v;
            $this->modifiedColumns[] = FamiliesPeer::ACTIVITY;
        }


        return $this;
    } // setActivity()

    /**
     * Set the value of [periodrange] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setPeriodrange($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->periodrange !== $v) {
            $this->periodrange = $v;
            $this->modifiedColumns[] = FamiliesPeer::PERIODRANGE;
        }


        return $this;
    } // setPeriodrange()

    /**
     * Set the value of [period] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setPeriod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->period !== $v) {
            $this->period = $v;
            $this->modifiedColumns[] = FamiliesPeer::PERIOD;
        }


        return $this;
    } // setPeriod()

    /**
     * Set the value of [epochrange] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setEpochrange($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->epochrange !== $v) {
            $this->epochrange = $v;
            $this->modifiedColumns[] = FamiliesPeer::EPOCHRANGE;
        }


        return $this;
    } // setEpochrange()

    /**
     * Set the value of [epoch] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setEpoch($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->epoch !== $v) {
            $this->epoch = $v;
            $this->modifiedColumns[] = FamiliesPeer::EPOCH;
        }


        return $this;
    } // setEpoch()

    /**
     * Set the value of [fossilref] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setFossilref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fossilref !== $v) {
            $this->fossilref = $v;
            $this->modifiedColumns[] = FamiliesPeer::FOSSILREF;
        }


        return $this;
    } // setFossilref()

    /**
     * Set the value of [fampic] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setFampic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fampic !== $v) {
            $this->fampic = $v;
            $this->modifiedColumns[] = FamiliesPeer::FAMPIC;
        }


        return $this;
    } // setFampic()

    /**
     * Set the value of [larvpic] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setLarvpic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->larvpic !== $v) {
            $this->larvpic = $v;
            $this->modifiedColumns[] = FamiliesPeer::LARVPIC;
        }


        return $this;
    } // setLarvpic()

    /**
     * Set the value of [validgenera] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setValidgenera($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->validgenera !== $v) {
            $this->validgenera = $v;
            $this->modifiedColumns[] = FamiliesPeer::VALIDGENERA;
        }


        return $this;
    } // setValidgenera()

    /**
     * Sets the value of the [complete] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Families The current object (for fluent API support)
     */
    public function setComplete($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->complete !== $v) {
            $this->complete = $v;
            $this->modifiedColumns[] = FamiliesPeer::COMPLETE;
        }


        return $this;
    } // setComplete()

    /**
     * Set the value of [source] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setSource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->source !== $v) {
            $this->source = $v;
            $this->modifiedColumns[] = FamiliesPeer::SOURCE;
        }


        return $this;
    } // setSource()

    /**
     * Set the value of [aspinesmin] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setAspinesmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aspinesmin !== $v) {
            $this->aspinesmin = $v;
            $this->modifiedColumns[] = FamiliesPeer::ASPINESMIN;
        }


        return $this;
    } // setAspinesmin()

    /**
     * Set the value of [aspinesmax] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setAspinesmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aspinesmax !== $v) {
            $this->aspinesmax = $v;
            $this->modifiedColumns[] = FamiliesPeer::ASPINESMAX;
        }


        return $this;
    } // setAspinesmax()

    /**
     * Set the value of [araysmin] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setAraysmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->araysmin !== $v) {
            $this->araysmin = $v;
            $this->modifiedColumns[] = FamiliesPeer::ARAYSMIN;
        }


        return $this;
    } // setAraysmin()

    /**
     * Set the value of [araysmax] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setAraysmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->araysmax !== $v) {
            $this->araysmax = $v;
            $this->modifiedColumns[] = FamiliesPeer::ARAYSMAX;
        }


        return $this;
    } // setAraysmax()

    /**
     * Set the value of [dspinesmin] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setDspinesmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dspinesmin !== $v) {
            $this->dspinesmin = $v;
            $this->modifiedColumns[] = FamiliesPeer::DSPINESMIN;
        }


        return $this;
    } // setDspinesmin()

    /**
     * Set the value of [dspinesmax] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setDspinesmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dspinesmax !== $v) {
            $this->dspinesmax = $v;
            $this->modifiedColumns[] = FamiliesPeer::DSPINESMAX;
        }


        return $this;
    } // setDspinesmax()

    /**
     * Set the value of [draysmin] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setDraysmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->draysmin !== $v) {
            $this->draysmin = $v;
            $this->modifiedColumns[] = FamiliesPeer::DRAYSMIN;
        }


        return $this;
    } // setDraysmin()

    /**
     * Set the value of [draysmax] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setDraysmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->draysmax !== $v) {
            $this->draysmax = $v;
            $this->modifiedColumns[] = FamiliesPeer::DRAYSMAX;
        }


        return $this;
    } // setDraysmax()

    /**
     * Set the value of [northernmost] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setNorthernmost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->northernmost !== $v) {
            $this->northernmost = $v;
            $this->modifiedColumns[] = FamiliesPeer::NORTHERNMOST;
        }


        return $this;
    } // setNorthernmost()

    /**
     * Set the value of [northsouthn] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setNorthsouthn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northsouthn !== $v) {
            $this->northsouthn = $v;
            $this->modifiedColumns[] = FamiliesPeer::NORTHSOUTHN;
        }


        return $this;
    } // setNorthsouthn()

    /**
     * Set the value of [southernmost] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setSouthernmost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->southernmost !== $v) {
            $this->southernmost = $v;
            $this->modifiedColumns[] = FamiliesPeer::SOUTHERNMOST;
        }


        return $this;
    } // setSouthernmost()

    /**
     * Set the value of [northsouths] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setNorthsouths($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northsouths !== $v) {
            $this->northsouths = $v;
            $this->modifiedColumns[] = FamiliesPeer::NORTHSOUTHS;
        }


        return $this;
    } // setNorthsouths()

    /**
     * Set the value of [westernmost] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setWesternmost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->westernmost !== $v) {
            $this->westernmost = $v;
            $this->modifiedColumns[] = FamiliesPeer::WESTERNMOST;
        }


        return $this;
    } // setWesternmost()

    /**
     * Set the value of [westeastw] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setWesteastw($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->westeastw !== $v) {
            $this->westeastw = $v;
            $this->modifiedColumns[] = FamiliesPeer::WESTEASTW;
        }


        return $this;
    } // setWesteastw()

    /**
     * Set the value of [easternmost] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setEasternmost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->easternmost !== $v) {
            $this->easternmost = $v;
            $this->modifiedColumns[] = FamiliesPeer::EASTERNMOST;
        }


        return $this;
    } // setEasternmost()

    /**
     * Set the value of [westeaste] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setWesteaste($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->westeaste !== $v) {
            $this->westeaste = $v;
            $this->modifiedColumns[] = FamiliesPeer::WESTEASTE;
        }


        return $this;
    } // setWesteaste()

    /**
     * Set the value of [phiprime] column.
     *
     * @param  double $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setPhiprime($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->phiprime !== $v) {
            $this->phiprime = $v;
            $this->modifiedColumns[] = FamiliesPeer::PHIPRIME;
        }


        return $this;
    } // setPhiprime()

    /**
     * Set the value of [division] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setDivision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->division !== $v) {
            $this->division = $v;
            $this->modifiedColumns[] = FamiliesPeer::DIVISION;
        }


        return $this;
    } // setDivision()

    /**
     * Set the value of [experts] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setExperts($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->experts !== $v) {
            $this->experts = $v;
            $this->modifiedColumns[] = FamiliesPeer::EXPERTS;
        }


        return $this;
    } // setExperts()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = FamiliesPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Families The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = FamiliesPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = FamiliesPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Families The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = FamiliesPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = FamiliesPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Families The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = FamiliesPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [remark] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setRemark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remark !== $v) {
            $this->remark = $v;
            $this->modifiedColumns[] = FamiliesPeer::REMARK;
        }


        return $this;
    } // setRemark()

    /**
     * Set the value of [etymology] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setEtymology($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etymology !== $v) {
            $this->etymology = $v;
            $this->modifiedColumns[] = FamiliesPeer::ETYMOLOGY;
        }


        return $this;
    } // setEtymology()

    /**
     * Set the value of [familyexpert] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setFamilyexpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->familyexpert !== $v) {
            $this->familyexpert = $v;
            $this->modifiedColumns[] = FamiliesPeer::FAMILYEXPERT;
        }


        return $this;
    } // setFamilyexpert()

    /**
     * Set the value of [fbcontact] column.
     *
     * @param  int $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setFbcontact($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fbcontact !== $v) {
            $this->fbcontact = $v;
            $this->modifiedColumns[] = FamiliesPeer::FBCONTACT;
        }


        return $this;
    } // setFbcontact()

    /**
     * Set the value of [clofexpert] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setClofexpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->clofexpert !== $v) {
            $this->clofexpert = $v;
            $this->modifiedColumns[] = FamiliesPeer::CLOFEXPERT;
        }


        return $this;
    } // setClofexpert()

    /**
     * Set the value of [commonname_greek] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setCommonnameGreek($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_greek !== $v) {
            $this->commonname_greek = $v;
            $this->modifiedColumns[] = FamiliesPeer::COMMONNAME_GREEK;
        }


        return $this;
    } // setCommonnameGreek()

    /**
     * Set the value of [commonname_greek_u] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setCommonnameGreekU($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_greek_u !== $v) {
            $this->commonname_greek_u = $v;
            $this->modifiedColumns[] = FamiliesPeer::COMMONNAME_GREEK_U;
        }


        return $this;
    } // setCommonnameGreekU()

    /**
     * Set the value of [commonname_russian] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setCommonnameRussian($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_russian !== $v) {
            $this->commonname_russian = $v;
            $this->modifiedColumns[] = FamiliesPeer::COMMONNAME_RUSSIAN;
        }


        return $this;
    } // setCommonnameRussian()

    /**
     * Set the value of [commonname_russian_original] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setCommonnameRussianOriginal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_russian_original !== $v) {
            $this->commonname_russian_original = $v;
            $this->modifiedColumns[] = FamiliesPeer::COMMONNAME_RUSSIAN_ORIGINAL;
        }


        return $this;
    } // setCommonnameRussianOriginal()

    /**
     * Set the value of [commonname_german] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setCommonnameGerman($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_german !== $v) {
            $this->commonname_german = $v;
            $this->modifiedColumns[] = FamiliesPeer::COMMONNAME_GERMAN;
        }


        return $this;
    } // setCommonnameGerman()

    /**
     * Set the value of [commonname_french] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setCommonnameFrench($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_french !== $v) {
            $this->commonname_french = $v;
            $this->modifiedColumns[] = FamiliesPeer::COMMONNAME_FRENCH;
        }


        return $this;
    } // setCommonnameFrench()

    /**
     * Set the value of [commonname_italian] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setCommonnameItalian($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_italian !== $v) {
            $this->commonname_italian = $v;
            $this->modifiedColumns[] = FamiliesPeer::COMMONNAME_ITALIAN;
        }


        return $this;
    } // setCommonnameItalian()

    /**
     * Set the value of [commonname_dutch] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setCommonnameDutch($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_dutch !== $v) {
            $this->commonname_dutch = $v;
            $this->modifiedColumns[] = FamiliesPeer::COMMONNAME_DUTCH;
        }


        return $this;
    } // setCommonnameDutch()

    /**
     * Set the value of [commonname_chinese] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setCommonnameChinese($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_chinese !== $v) {
            $this->commonname_chinese = $v;
            $this->modifiedColumns[] = FamiliesPeer::COMMONNAME_CHINESE;
        }


        return $this;
    } // setCommonnameChinese()

    /**
     * Set the value of [commonname_chinese_u] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setCommonnameChineseU($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_chinese_u !== $v) {
            $this->commonname_chinese_u = $v;
            $this->modifiedColumns[] = FamiliesPeer::COMMONNAME_CHINESE_U;
        }


        return $this;
    } // setCommonnameChineseU()

    /**
     * Set the value of [commonname_spanish] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setCommonnameSpanish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_spanish !== $v) {
            $this->commonname_spanish = $v;
            $this->modifiedColumns[] = FamiliesPeer::COMMONNAME_SPANISH;
        }


        return $this;
    } // setCommonnameSpanish()

    /**
     * Set the value of [commonname_portuguese] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setCommonnamePortuguese($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_portuguese !== $v) {
            $this->commonname_portuguese = $v;
            $this->modifiedColumns[] = FamiliesPeer::COMMONNAME_PORTUGUESE;
        }


        return $this;
    } // setCommonnamePortuguese()

    /**
     * Set the value of [commonname_swedish] column.
     *
     * @param  string $v new value
     * @return Families The current object (for fluent API support)
     */
    public function setCommonnameSwedish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_swedish !== $v) {
            $this->commonname_swedish = $v;
            $this->modifiedColumns[] = FamiliesPeer::COMMONNAME_SWEDISH;
        }


        return $this;
    } // setCommonnameSwedish()

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
            if ($this->family !== '') {
                return false;
            }

            if ($this->classnum !== 0) {
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

            $this->famcode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->sortid = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->family = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->authoryear = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->qualification = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->commonname = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->familiesrefno = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->synonym = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->order = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->ordnum = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->class = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->classnum = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->genera = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->species = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->bodyshapei = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->speciescount = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->marine = ($row[$startcol + 16] !== null) ? (boolean) $row[$startcol + 16] : null;
            $this->brackish = ($row[$startcol + 17] !== null) ? (boolean) $row[$startcol + 17] : null;
            $this->freshwater = ($row[$startcol + 18] !== null) ? (boolean) $row[$startcol + 18] : null;
            $this->watersalinity = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->aquarium = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->reprguild = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->swimmode = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->activity = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->periodrange = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->period = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->epochrange = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->epoch = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->fossilref = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->fampic = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->larvpic = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->validgenera = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->complete = ($row[$startcol + 32] !== null) ? (boolean) $row[$startcol + 32] : null;
            $this->source = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->aspinesmin = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->aspinesmax = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->araysmin = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->araysmax = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->dspinesmin = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->dspinesmax = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->draysmin = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->draysmax = ($row[$startcol + 41] !== null) ? (int) $row[$startcol + 41] : null;
            $this->northernmost = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->northsouthn = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->southernmost = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->northsouths = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->westernmost = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->westeastw = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->easternmost = ($row[$startcol + 48] !== null) ? (int) $row[$startcol + 48] : null;
            $this->westeaste = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->phiprime = ($row[$startcol + 50] !== null) ? (double) $row[$startcol + 50] : null;
            $this->division = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->experts = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->entered = ($row[$startcol + 53] !== null) ? (int) $row[$startcol + 53] : null;
            $this->dateentered = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->modified = ($row[$startcol + 55] !== null) ? (int) $row[$startcol + 55] : null;
            $this->datemodified = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->expert = ($row[$startcol + 57] !== null) ? (int) $row[$startcol + 57] : null;
            $this->datechecked = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->remark = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->etymology = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->familyexpert = ($row[$startcol + 61] !== null) ? (int) $row[$startcol + 61] : null;
            $this->fbcontact = ($row[$startcol + 62] !== null) ? (int) $row[$startcol + 62] : null;
            $this->clofexpert = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->commonname_greek = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->commonname_greek_u = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->commonname_russian = ($row[$startcol + 66] !== null) ? (string) $row[$startcol + 66] : null;
            $this->commonname_russian_original = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->commonname_german = ($row[$startcol + 68] !== null) ? (string) $row[$startcol + 68] : null;
            $this->commonname_french = ($row[$startcol + 69] !== null) ? (string) $row[$startcol + 69] : null;
            $this->commonname_italian = ($row[$startcol + 70] !== null) ? (string) $row[$startcol + 70] : null;
            $this->commonname_dutch = ($row[$startcol + 71] !== null) ? (string) $row[$startcol + 71] : null;
            $this->commonname_chinese = ($row[$startcol + 72] !== null) ? (string) $row[$startcol + 72] : null;
            $this->commonname_chinese_u = ($row[$startcol + 73] !== null) ? (string) $row[$startcol + 73] : null;
            $this->commonname_spanish = ($row[$startcol + 74] !== null) ? (string) $row[$startcol + 74] : null;
            $this->commonname_portuguese = ($row[$startcol + 75] !== null) ? (string) $row[$startcol + 75] : null;
            $this->commonname_swedish = ($row[$startcol + 76] !== null) ? (string) $row[$startcol + 76] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 77; // 77 = FamiliesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Families object", $e);
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
            $con = Propel::getConnection(FamiliesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FamiliesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(FamiliesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FamiliesQuery::create()
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
            $con = Propel::getConnection(FamiliesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                FamiliesPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(FamiliesPeer::FAMCODE)) {
            $modifiedColumns[':p' . $index++]  = '`FamCode`';
        }
        if ($this->isColumnModified(FamiliesPeer::SORTID)) {
            $modifiedColumns[':p' . $index++]  = '`SortID`';
        }
        if ($this->isColumnModified(FamiliesPeer::FAMILY)) {
            $modifiedColumns[':p' . $index++]  = '`Family`';
        }
        if ($this->isColumnModified(FamiliesPeer::AUTHORYEAR)) {
            $modifiedColumns[':p' . $index++]  = '`AuthorYear`';
        }
        if ($this->isColumnModified(FamiliesPeer::QUALIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`Qualification`';
        }
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName`';
        }
        if ($this->isColumnModified(FamiliesPeer::FAMILIESREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`FamiliesRefNo`';
        }
        if ($this->isColumnModified(FamiliesPeer::SYNONYM)) {
            $modifiedColumns[':p' . $index++]  = '`Synonym`';
        }
        if ($this->isColumnModified(FamiliesPeer::ORDER)) {
            $modifiedColumns[':p' . $index++]  = '`Order`';
        }
        if ($this->isColumnModified(FamiliesPeer::ORDNUM)) {
            $modifiedColumns[':p' . $index++]  = '`Ordnum`';
        }
        if ($this->isColumnModified(FamiliesPeer::CLAZZ)) {
            $modifiedColumns[':p' . $index++]  = '`Class`';
        }
        if ($this->isColumnModified(FamiliesPeer::CLASSNUM)) {
            $modifiedColumns[':p' . $index++]  = '`ClassNum`';
        }
        if ($this->isColumnModified(FamiliesPeer::GENERA)) {
            $modifiedColumns[':p' . $index++]  = '`Genera`';
        }
        if ($this->isColumnModified(FamiliesPeer::SPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`Species`';
        }
        if ($this->isColumnModified(FamiliesPeer::BODYSHAPEI)) {
            $modifiedColumns[':p' . $index++]  = '`BodyShapeI`';
        }
        if ($this->isColumnModified(FamiliesPeer::SPECIESCOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`SpeciesCount`';
        }
        if ($this->isColumnModified(FamiliesPeer::MARINE)) {
            $modifiedColumns[':p' . $index++]  = '`Marine`';
        }
        if ($this->isColumnModified(FamiliesPeer::BRACKISH)) {
            $modifiedColumns[':p' . $index++]  = '`Brackish`';
        }
        if ($this->isColumnModified(FamiliesPeer::FRESHWATER)) {
            $modifiedColumns[':p' . $index++]  = '`Freshwater`';
        }
        if ($this->isColumnModified(FamiliesPeer::WATERSALINITY)) {
            $modifiedColumns[':p' . $index++]  = '`WaterSalinity`';
        }
        if ($this->isColumnModified(FamiliesPeer::AQUARIUM)) {
            $modifiedColumns[':p' . $index++]  = '`Aquarium`';
        }
        if ($this->isColumnModified(FamiliesPeer::REPRGUILD)) {
            $modifiedColumns[':p' . $index++]  = '`ReprGuild`';
        }
        if ($this->isColumnModified(FamiliesPeer::SWIMMODE)) {
            $modifiedColumns[':p' . $index++]  = '`SwimMode`';
        }
        if ($this->isColumnModified(FamiliesPeer::ACTIVITY)) {
            $modifiedColumns[':p' . $index++]  = '`Activity`';
        }
        if ($this->isColumnModified(FamiliesPeer::PERIODRANGE)) {
            $modifiedColumns[':p' . $index++]  = '`PeriodRange`';
        }
        if ($this->isColumnModified(FamiliesPeer::PERIOD)) {
            $modifiedColumns[':p' . $index++]  = '`Period`';
        }
        if ($this->isColumnModified(FamiliesPeer::EPOCHRANGE)) {
            $modifiedColumns[':p' . $index++]  = '`EpochRange`';
        }
        if ($this->isColumnModified(FamiliesPeer::EPOCH)) {
            $modifiedColumns[':p' . $index++]  = '`Epoch`';
        }
        if ($this->isColumnModified(FamiliesPeer::FOSSILREF)) {
            $modifiedColumns[':p' . $index++]  = '`FossilRef`';
        }
        if ($this->isColumnModified(FamiliesPeer::FAMPIC)) {
            $modifiedColumns[':p' . $index++]  = '`FamPic`';
        }
        if ($this->isColumnModified(FamiliesPeer::LARVPIC)) {
            $modifiedColumns[':p' . $index++]  = '`LarvPic`';
        }
        if ($this->isColumnModified(FamiliesPeer::VALIDGENERA)) {
            $modifiedColumns[':p' . $index++]  = '`ValidGenera`';
        }
        if ($this->isColumnModified(FamiliesPeer::COMPLETE)) {
            $modifiedColumns[':p' . $index++]  = '`Complete`';
        }
        if ($this->isColumnModified(FamiliesPeer::SOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`Source`';
        }
        if ($this->isColumnModified(FamiliesPeer::ASPINESMIN)) {
            $modifiedColumns[':p' . $index++]  = '`AspinesMin`';
        }
        if ($this->isColumnModified(FamiliesPeer::ASPINESMAX)) {
            $modifiedColumns[':p' . $index++]  = '`AspinesMax`';
        }
        if ($this->isColumnModified(FamiliesPeer::ARAYSMIN)) {
            $modifiedColumns[':p' . $index++]  = '`AraysMin`';
        }
        if ($this->isColumnModified(FamiliesPeer::ARAYSMAX)) {
            $modifiedColumns[':p' . $index++]  = '`AraysMax`';
        }
        if ($this->isColumnModified(FamiliesPeer::DSPINESMIN)) {
            $modifiedColumns[':p' . $index++]  = '`DspinesMin`';
        }
        if ($this->isColumnModified(FamiliesPeer::DSPINESMAX)) {
            $modifiedColumns[':p' . $index++]  = '`DspinesMax`';
        }
        if ($this->isColumnModified(FamiliesPeer::DRAYSMIN)) {
            $modifiedColumns[':p' . $index++]  = '`DraysMin`';
        }
        if ($this->isColumnModified(FamiliesPeer::DRAYSMAX)) {
            $modifiedColumns[':p' . $index++]  = '`DraysMax`';
        }
        if ($this->isColumnModified(FamiliesPeer::NORTHERNMOST)) {
            $modifiedColumns[':p' . $index++]  = '`Northernmost`';
        }
        if ($this->isColumnModified(FamiliesPeer::NORTHSOUTHN)) {
            $modifiedColumns[':p' . $index++]  = '`NorthSouthN`';
        }
        if ($this->isColumnModified(FamiliesPeer::SOUTHERNMOST)) {
            $modifiedColumns[':p' . $index++]  = '`Southernmost`';
        }
        if ($this->isColumnModified(FamiliesPeer::NORTHSOUTHS)) {
            $modifiedColumns[':p' . $index++]  = '`NorthSouthS`';
        }
        if ($this->isColumnModified(FamiliesPeer::WESTERNMOST)) {
            $modifiedColumns[':p' . $index++]  = '`Westernmost`';
        }
        if ($this->isColumnModified(FamiliesPeer::WESTEASTW)) {
            $modifiedColumns[':p' . $index++]  = '`WestEastW`';
        }
        if ($this->isColumnModified(FamiliesPeer::EASTERNMOST)) {
            $modifiedColumns[':p' . $index++]  = '`Easternmost`';
        }
        if ($this->isColumnModified(FamiliesPeer::WESTEASTE)) {
            $modifiedColumns[':p' . $index++]  = '`WestEastE`';
        }
        if ($this->isColumnModified(FamiliesPeer::PHIPRIME)) {
            $modifiedColumns[':p' . $index++]  = '`PhiPrime`';
        }
        if ($this->isColumnModified(FamiliesPeer::DIVISION)) {
            $modifiedColumns[':p' . $index++]  = '`Division`';
        }
        if ($this->isColumnModified(FamiliesPeer::EXPERTS)) {
            $modifiedColumns[':p' . $index++]  = '`Experts`';
        }
        if ($this->isColumnModified(FamiliesPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(FamiliesPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(FamiliesPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(FamiliesPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(FamiliesPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(FamiliesPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(FamiliesPeer::REMARK)) {
            $modifiedColumns[':p' . $index++]  = '`Remark`';
        }
        if ($this->isColumnModified(FamiliesPeer::ETYMOLOGY)) {
            $modifiedColumns[':p' . $index++]  = '`Etymology`';
        }
        if ($this->isColumnModified(FamiliesPeer::FAMILYEXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`FamilyExpert`';
        }
        if ($this->isColumnModified(FamiliesPeer::FBCONTACT)) {
            $modifiedColumns[':p' . $index++]  = '`FBContact`';
        }
        if ($this->isColumnModified(FamiliesPeer::CLOFEXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`CLOFExpert`';
        }
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_GREEK)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_Greek`';
        }
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_GREEK_U)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_Greek_u`';
        }
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_RUSSIAN)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_Russian`';
        }
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_RUSSIAN_ORIGINAL)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_Russian_original`';
        }
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_GERMAN)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_German`';
        }
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_FRENCH)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_French`';
        }
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_ITALIAN)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_Italian`';
        }
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_DUTCH)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_Dutch`';
        }
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_CHINESE)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_Chinese`';
        }
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_CHINESE_U)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_Chinese_u`';
        }
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_SPANISH)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_Spanish`';
        }
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_PORTUGUESE)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_Portuguese`';
        }
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_SWEDISH)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_Swedish`';
        }

        $sql = sprintf(
            'INSERT INTO `families` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`FamCode`':
                        $stmt->bindValue($identifier, $this->famcode, PDO::PARAM_INT);
                        break;
                    case '`SortID`':
                        $stmt->bindValue($identifier, $this->sortid, PDO::PARAM_INT);
                        break;
                    case '`Family`':
                        $stmt->bindValue($identifier, $this->family, PDO::PARAM_STR);
                        break;
                    case '`AuthorYear`':
                        $stmt->bindValue($identifier, $this->authoryear, PDO::PARAM_STR);
                        break;
                    case '`Qualification`':
                        $stmt->bindValue($identifier, $this->qualification, PDO::PARAM_STR);
                        break;
                    case '`CommonName`':
                        $stmt->bindValue($identifier, $this->commonname, PDO::PARAM_STR);
                        break;
                    case '`FamiliesRefNo`':
                        $stmt->bindValue($identifier, $this->familiesrefno, PDO::PARAM_INT);
                        break;
                    case '`Synonym`':
                        $stmt->bindValue($identifier, $this->synonym, PDO::PARAM_INT);
                        break;
                    case '`Order`':
                        $stmt->bindValue($identifier, $this->order, PDO::PARAM_STR);
                        break;
                    case '`Ordnum`':
                        $stmt->bindValue($identifier, $this->ordnum, PDO::PARAM_INT);
                        break;
                    case '`Class`':
                        $stmt->bindValue($identifier, $this->class, PDO::PARAM_STR);
                        break;
                    case '`ClassNum`':
                        $stmt->bindValue($identifier, $this->classnum, PDO::PARAM_INT);
                        break;
                    case '`Genera`':
                        $stmt->bindValue($identifier, $this->genera, PDO::PARAM_INT);
                        break;
                    case '`Species`':
                        $stmt->bindValue($identifier, $this->species, PDO::PARAM_INT);
                        break;
                    case '`BodyShapeI`':
                        $stmt->bindValue($identifier, $this->bodyshapei, PDO::PARAM_STR);
                        break;
                    case '`SpeciesCount`':
                        $stmt->bindValue($identifier, $this->speciescount, PDO::PARAM_INT);
                        break;
                    case '`Marine`':
                        $stmt->bindValue($identifier, (int) $this->marine, PDO::PARAM_INT);
                        break;
                    case '`Brackish`':
                        $stmt->bindValue($identifier, (int) $this->brackish, PDO::PARAM_INT);
                        break;
                    case '`Freshwater`':
                        $stmt->bindValue($identifier, (int) $this->freshwater, PDO::PARAM_INT);
                        break;
                    case '`WaterSalinity`':
                        $stmt->bindValue($identifier, $this->watersalinity, PDO::PARAM_STR);
                        break;
                    case '`Aquarium`':
                        $stmt->bindValue($identifier, $this->aquarium, PDO::PARAM_STR);
                        break;
                    case '`ReprGuild`':
                        $stmt->bindValue($identifier, $this->reprguild, PDO::PARAM_STR);
                        break;
                    case '`SwimMode`':
                        $stmt->bindValue($identifier, $this->swimmode, PDO::PARAM_STR);
                        break;
                    case '`Activity`':
                        $stmt->bindValue($identifier, $this->activity, PDO::PARAM_STR);
                        break;
                    case '`PeriodRange`':
                        $stmt->bindValue($identifier, $this->periodrange, PDO::PARAM_STR);
                        break;
                    case '`Period`':
                        $stmt->bindValue($identifier, $this->period, PDO::PARAM_STR);
                        break;
                    case '`EpochRange`':
                        $stmt->bindValue($identifier, $this->epochrange, PDO::PARAM_STR);
                        break;
                    case '`Epoch`':
                        $stmt->bindValue($identifier, $this->epoch, PDO::PARAM_STR);
                        break;
                    case '`FossilRef`':
                        $stmt->bindValue($identifier, $this->fossilref, PDO::PARAM_INT);
                        break;
                    case '`FamPic`':
                        $stmt->bindValue($identifier, $this->fampic, PDO::PARAM_STR);
                        break;
                    case '`LarvPic`':
                        $stmt->bindValue($identifier, $this->larvpic, PDO::PARAM_STR);
                        break;
                    case '`ValidGenera`':
                        $stmt->bindValue($identifier, $this->validgenera, PDO::PARAM_INT);
                        break;
                    case '`Complete`':
                        $stmt->bindValue($identifier, (int) $this->complete, PDO::PARAM_INT);
                        break;
                    case '`Source`':
                        $stmt->bindValue($identifier, $this->source, PDO::PARAM_STR);
                        break;
                    case '`AspinesMin`':
                        $stmt->bindValue($identifier, $this->aspinesmin, PDO::PARAM_INT);
                        break;
                    case '`AspinesMax`':
                        $stmt->bindValue($identifier, $this->aspinesmax, PDO::PARAM_INT);
                        break;
                    case '`AraysMin`':
                        $stmt->bindValue($identifier, $this->araysmin, PDO::PARAM_INT);
                        break;
                    case '`AraysMax`':
                        $stmt->bindValue($identifier, $this->araysmax, PDO::PARAM_INT);
                        break;
                    case '`DspinesMin`':
                        $stmt->bindValue($identifier, $this->dspinesmin, PDO::PARAM_INT);
                        break;
                    case '`DspinesMax`':
                        $stmt->bindValue($identifier, $this->dspinesmax, PDO::PARAM_INT);
                        break;
                    case '`DraysMin`':
                        $stmt->bindValue($identifier, $this->draysmin, PDO::PARAM_INT);
                        break;
                    case '`DraysMax`':
                        $stmt->bindValue($identifier, $this->draysmax, PDO::PARAM_INT);
                        break;
                    case '`Northernmost`':
                        $stmt->bindValue($identifier, $this->northernmost, PDO::PARAM_INT);
                        break;
                    case '`NorthSouthN`':
                        $stmt->bindValue($identifier, $this->northsouthn, PDO::PARAM_STR);
                        break;
                    case '`Southernmost`':
                        $stmt->bindValue($identifier, $this->southernmost, PDO::PARAM_INT);
                        break;
                    case '`NorthSouthS`':
                        $stmt->bindValue($identifier, $this->northsouths, PDO::PARAM_STR);
                        break;
                    case '`Westernmost`':
                        $stmt->bindValue($identifier, $this->westernmost, PDO::PARAM_INT);
                        break;
                    case '`WestEastW`':
                        $stmt->bindValue($identifier, $this->westeastw, PDO::PARAM_STR);
                        break;
                    case '`Easternmost`':
                        $stmt->bindValue($identifier, $this->easternmost, PDO::PARAM_INT);
                        break;
                    case '`WestEastE`':
                        $stmt->bindValue($identifier, $this->westeaste, PDO::PARAM_STR);
                        break;
                    case '`PhiPrime`':
                        $stmt->bindValue($identifier, $this->phiprime, PDO::PARAM_STR);
                        break;
                    case '`Division`':
                        $stmt->bindValue($identifier, $this->division, PDO::PARAM_STR);
                        break;
                    case '`Experts`':
                        $stmt->bindValue($identifier, $this->experts, PDO::PARAM_STR);
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
                    case '`Remark`':
                        $stmt->bindValue($identifier, $this->remark, PDO::PARAM_STR);
                        break;
                    case '`Etymology`':
                        $stmt->bindValue($identifier, $this->etymology, PDO::PARAM_STR);
                        break;
                    case '`FamilyExpert`':
                        $stmt->bindValue($identifier, $this->familyexpert, PDO::PARAM_INT);
                        break;
                    case '`FBContact`':
                        $stmt->bindValue($identifier, $this->fbcontact, PDO::PARAM_INT);
                        break;
                    case '`CLOFExpert`':
                        $stmt->bindValue($identifier, $this->clofexpert, PDO::PARAM_STR);
                        break;
                    case '`CommonName_Greek`':
                        $stmt->bindValue($identifier, $this->commonname_greek, PDO::PARAM_STR);
                        break;
                    case '`CommonName_Greek_u`':
                        $stmt->bindValue($identifier, $this->commonname_greek_u, PDO::PARAM_STR);
                        break;
                    case '`CommonName_Russian`':
                        $stmt->bindValue($identifier, $this->commonname_russian, PDO::PARAM_STR);
                        break;
                    case '`CommonName_Russian_original`':
                        $stmt->bindValue($identifier, $this->commonname_russian_original, PDO::PARAM_STR);
                        break;
                    case '`CommonName_German`':
                        $stmt->bindValue($identifier, $this->commonname_german, PDO::PARAM_STR);
                        break;
                    case '`CommonName_French`':
                        $stmt->bindValue($identifier, $this->commonname_french, PDO::PARAM_STR);
                        break;
                    case '`CommonName_Italian`':
                        $stmt->bindValue($identifier, $this->commonname_italian, PDO::PARAM_STR);
                        break;
                    case '`CommonName_Dutch`':
                        $stmt->bindValue($identifier, $this->commonname_dutch, PDO::PARAM_STR);
                        break;
                    case '`CommonName_Chinese`':
                        $stmt->bindValue($identifier, $this->commonname_chinese, PDO::PARAM_STR);
                        break;
                    case '`CommonName_Chinese_u`':
                        $stmt->bindValue($identifier, $this->commonname_chinese_u, PDO::PARAM_STR);
                        break;
                    case '`CommonName_Spanish`':
                        $stmt->bindValue($identifier, $this->commonname_spanish, PDO::PARAM_STR);
                        break;
                    case '`CommonName_Portuguese`':
                        $stmt->bindValue($identifier, $this->commonname_portuguese, PDO::PARAM_STR);
                        break;
                    case '`CommonName_Swedish`':
                        $stmt->bindValue($identifier, $this->commonname_swedish, PDO::PARAM_STR);
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
        $this->setFamily($pk);

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


            if (($retval = FamiliesPeer::doValidate($this, $columns)) !== true) {
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
        $pos = FamiliesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getFamcode();
                break;
            case 1:
                return $this->getSortid();
                break;
            case 2:
                return $this->getFamily();
                break;
            case 3:
                return $this->getAuthoryear();
                break;
            case 4:
                return $this->getQualification();
                break;
            case 5:
                return $this->getCommonname();
                break;
            case 6:
                return $this->getFamiliesrefno();
                break;
            case 7:
                return $this->getSynonym();
                break;
            case 8:
                return $this->getOrder();
                break;
            case 9:
                return $this->getOrdnum();
                break;
            case 10:
                return $this->getClass();
                break;
            case 11:
                return $this->getClassnum();
                break;
            case 12:
                return $this->getGenera();
                break;
            case 13:
                return $this->getSpecies();
                break;
            case 14:
                return $this->getBodyshapei();
                break;
            case 15:
                return $this->getSpeciescount();
                break;
            case 16:
                return $this->getMarine();
                break;
            case 17:
                return $this->getBrackish();
                break;
            case 18:
                return $this->getFreshwater();
                break;
            case 19:
                return $this->getWatersalinity();
                break;
            case 20:
                return $this->getAquarium();
                break;
            case 21:
                return $this->getReprguild();
                break;
            case 22:
                return $this->getSwimmode();
                break;
            case 23:
                return $this->getActivity();
                break;
            case 24:
                return $this->getPeriodrange();
                break;
            case 25:
                return $this->getPeriod();
                break;
            case 26:
                return $this->getEpochrange();
                break;
            case 27:
                return $this->getEpoch();
                break;
            case 28:
                return $this->getFossilref();
                break;
            case 29:
                return $this->getFampic();
                break;
            case 30:
                return $this->getLarvpic();
                break;
            case 31:
                return $this->getValidgenera();
                break;
            case 32:
                return $this->getComplete();
                break;
            case 33:
                return $this->getSource();
                break;
            case 34:
                return $this->getAspinesmin();
                break;
            case 35:
                return $this->getAspinesmax();
                break;
            case 36:
                return $this->getAraysmin();
                break;
            case 37:
                return $this->getAraysmax();
                break;
            case 38:
                return $this->getDspinesmin();
                break;
            case 39:
                return $this->getDspinesmax();
                break;
            case 40:
                return $this->getDraysmin();
                break;
            case 41:
                return $this->getDraysmax();
                break;
            case 42:
                return $this->getNorthernmost();
                break;
            case 43:
                return $this->getNorthsouthn();
                break;
            case 44:
                return $this->getSouthernmost();
                break;
            case 45:
                return $this->getNorthsouths();
                break;
            case 46:
                return $this->getWesternmost();
                break;
            case 47:
                return $this->getWesteastw();
                break;
            case 48:
                return $this->getEasternmost();
                break;
            case 49:
                return $this->getWesteaste();
                break;
            case 50:
                return $this->getPhiprime();
                break;
            case 51:
                return $this->getDivision();
                break;
            case 52:
                return $this->getExperts();
                break;
            case 53:
                return $this->getEntered();
                break;
            case 54:
                return $this->getDateentered();
                break;
            case 55:
                return $this->getModified();
                break;
            case 56:
                return $this->getDatemodified();
                break;
            case 57:
                return $this->getExpert();
                break;
            case 58:
                return $this->getDatechecked();
                break;
            case 59:
                return $this->getRemark();
                break;
            case 60:
                return $this->getEtymology();
                break;
            case 61:
                return $this->getFamilyexpert();
                break;
            case 62:
                return $this->getFbcontact();
                break;
            case 63:
                return $this->getClofexpert();
                break;
            case 64:
                return $this->getCommonnameGreek();
                break;
            case 65:
                return $this->getCommonnameGreekU();
                break;
            case 66:
                return $this->getCommonnameRussian();
                break;
            case 67:
                return $this->getCommonnameRussianOriginal();
                break;
            case 68:
                return $this->getCommonnameGerman();
                break;
            case 69:
                return $this->getCommonnameFrench();
                break;
            case 70:
                return $this->getCommonnameItalian();
                break;
            case 71:
                return $this->getCommonnameDutch();
                break;
            case 72:
                return $this->getCommonnameChinese();
                break;
            case 73:
                return $this->getCommonnameChineseU();
                break;
            case 74:
                return $this->getCommonnameSpanish();
                break;
            case 75:
                return $this->getCommonnamePortuguese();
                break;
            case 76:
                return $this->getCommonnameSwedish();
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
        if (isset($alreadyDumpedObjects['Families'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Families'][$this->getPrimaryKey()] = true;
        $keys = FamiliesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getFamcode(),
            $keys[1] => $this->getSortid(),
            $keys[2] => $this->getFamily(),
            $keys[3] => $this->getAuthoryear(),
            $keys[4] => $this->getQualification(),
            $keys[5] => $this->getCommonname(),
            $keys[6] => $this->getFamiliesrefno(),
            $keys[7] => $this->getSynonym(),
            $keys[8] => $this->getOrder(),
            $keys[9] => $this->getOrdnum(),
            $keys[10] => $this->getClass(),
            $keys[11] => $this->getClassnum(),
            $keys[12] => $this->getGenera(),
            $keys[13] => $this->getSpecies(),
            $keys[14] => $this->getBodyshapei(),
            $keys[15] => $this->getSpeciescount(),
            $keys[16] => $this->getMarine(),
            $keys[17] => $this->getBrackish(),
            $keys[18] => $this->getFreshwater(),
            $keys[19] => $this->getWatersalinity(),
            $keys[20] => $this->getAquarium(),
            $keys[21] => $this->getReprguild(),
            $keys[22] => $this->getSwimmode(),
            $keys[23] => $this->getActivity(),
            $keys[24] => $this->getPeriodrange(),
            $keys[25] => $this->getPeriod(),
            $keys[26] => $this->getEpochrange(),
            $keys[27] => $this->getEpoch(),
            $keys[28] => $this->getFossilref(),
            $keys[29] => $this->getFampic(),
            $keys[30] => $this->getLarvpic(),
            $keys[31] => $this->getValidgenera(),
            $keys[32] => $this->getComplete(),
            $keys[33] => $this->getSource(),
            $keys[34] => $this->getAspinesmin(),
            $keys[35] => $this->getAspinesmax(),
            $keys[36] => $this->getAraysmin(),
            $keys[37] => $this->getAraysmax(),
            $keys[38] => $this->getDspinesmin(),
            $keys[39] => $this->getDspinesmax(),
            $keys[40] => $this->getDraysmin(),
            $keys[41] => $this->getDraysmax(),
            $keys[42] => $this->getNorthernmost(),
            $keys[43] => $this->getNorthsouthn(),
            $keys[44] => $this->getSouthernmost(),
            $keys[45] => $this->getNorthsouths(),
            $keys[46] => $this->getWesternmost(),
            $keys[47] => $this->getWesteastw(),
            $keys[48] => $this->getEasternmost(),
            $keys[49] => $this->getWesteaste(),
            $keys[50] => $this->getPhiprime(),
            $keys[51] => $this->getDivision(),
            $keys[52] => $this->getExperts(),
            $keys[53] => $this->getEntered(),
            $keys[54] => $this->getDateentered(),
            $keys[55] => $this->getModified(),
            $keys[56] => $this->getDatemodified(),
            $keys[57] => $this->getExpert(),
            $keys[58] => $this->getDatechecked(),
            $keys[59] => $this->getRemark(),
            $keys[60] => $this->getEtymology(),
            $keys[61] => $this->getFamilyexpert(),
            $keys[62] => $this->getFbcontact(),
            $keys[63] => $this->getClofexpert(),
            $keys[64] => $this->getCommonnameGreek(),
            $keys[65] => $this->getCommonnameGreekU(),
            $keys[66] => $this->getCommonnameRussian(),
            $keys[67] => $this->getCommonnameRussianOriginal(),
            $keys[68] => $this->getCommonnameGerman(),
            $keys[69] => $this->getCommonnameFrench(),
            $keys[70] => $this->getCommonnameItalian(),
            $keys[71] => $this->getCommonnameDutch(),
            $keys[72] => $this->getCommonnameChinese(),
            $keys[73] => $this->getCommonnameChineseU(),
            $keys[74] => $this->getCommonnameSpanish(),
            $keys[75] => $this->getCommonnamePortuguese(),
            $keys[76] => $this->getCommonnameSwedish(),
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
        $pos = FamiliesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setFamcode($value);
                break;
            case 1:
                $this->setSortid($value);
                break;
            case 2:
                $this->setFamily($value);
                break;
            case 3:
                $this->setAuthoryear($value);
                break;
            case 4:
                $this->setQualification($value);
                break;
            case 5:
                $this->setCommonname($value);
                break;
            case 6:
                $this->setFamiliesrefno($value);
                break;
            case 7:
                $this->setSynonym($value);
                break;
            case 8:
                $this->setOrder($value);
                break;
            case 9:
                $this->setOrdnum($value);
                break;
            case 10:
                $this->setClass($value);
                break;
            case 11:
                $this->setClassnum($value);
                break;
            case 12:
                $this->setGenera($value);
                break;
            case 13:
                $this->setSpecies($value);
                break;
            case 14:
                $this->setBodyshapei($value);
                break;
            case 15:
                $this->setSpeciescount($value);
                break;
            case 16:
                $this->setMarine($value);
                break;
            case 17:
                $this->setBrackish($value);
                break;
            case 18:
                $this->setFreshwater($value);
                break;
            case 19:
                $this->setWatersalinity($value);
                break;
            case 20:
                $this->setAquarium($value);
                break;
            case 21:
                $this->setReprguild($value);
                break;
            case 22:
                $this->setSwimmode($value);
                break;
            case 23:
                $this->setActivity($value);
                break;
            case 24:
                $this->setPeriodrange($value);
                break;
            case 25:
                $this->setPeriod($value);
                break;
            case 26:
                $this->setEpochrange($value);
                break;
            case 27:
                $this->setEpoch($value);
                break;
            case 28:
                $this->setFossilref($value);
                break;
            case 29:
                $this->setFampic($value);
                break;
            case 30:
                $this->setLarvpic($value);
                break;
            case 31:
                $this->setValidgenera($value);
                break;
            case 32:
                $this->setComplete($value);
                break;
            case 33:
                $this->setSource($value);
                break;
            case 34:
                $this->setAspinesmin($value);
                break;
            case 35:
                $this->setAspinesmax($value);
                break;
            case 36:
                $this->setAraysmin($value);
                break;
            case 37:
                $this->setAraysmax($value);
                break;
            case 38:
                $this->setDspinesmin($value);
                break;
            case 39:
                $this->setDspinesmax($value);
                break;
            case 40:
                $this->setDraysmin($value);
                break;
            case 41:
                $this->setDraysmax($value);
                break;
            case 42:
                $this->setNorthernmost($value);
                break;
            case 43:
                $this->setNorthsouthn($value);
                break;
            case 44:
                $this->setSouthernmost($value);
                break;
            case 45:
                $this->setNorthsouths($value);
                break;
            case 46:
                $this->setWesternmost($value);
                break;
            case 47:
                $this->setWesteastw($value);
                break;
            case 48:
                $this->setEasternmost($value);
                break;
            case 49:
                $this->setWesteaste($value);
                break;
            case 50:
                $this->setPhiprime($value);
                break;
            case 51:
                $this->setDivision($value);
                break;
            case 52:
                $this->setExperts($value);
                break;
            case 53:
                $this->setEntered($value);
                break;
            case 54:
                $this->setDateentered($value);
                break;
            case 55:
                $this->setModified($value);
                break;
            case 56:
                $this->setDatemodified($value);
                break;
            case 57:
                $this->setExpert($value);
                break;
            case 58:
                $this->setDatechecked($value);
                break;
            case 59:
                $this->setRemark($value);
                break;
            case 60:
                $this->setEtymology($value);
                break;
            case 61:
                $this->setFamilyexpert($value);
                break;
            case 62:
                $this->setFbcontact($value);
                break;
            case 63:
                $this->setClofexpert($value);
                break;
            case 64:
                $this->setCommonnameGreek($value);
                break;
            case 65:
                $this->setCommonnameGreekU($value);
                break;
            case 66:
                $this->setCommonnameRussian($value);
                break;
            case 67:
                $this->setCommonnameRussianOriginal($value);
                break;
            case 68:
                $this->setCommonnameGerman($value);
                break;
            case 69:
                $this->setCommonnameFrench($value);
                break;
            case 70:
                $this->setCommonnameItalian($value);
                break;
            case 71:
                $this->setCommonnameDutch($value);
                break;
            case 72:
                $this->setCommonnameChinese($value);
                break;
            case 73:
                $this->setCommonnameChineseU($value);
                break;
            case 74:
                $this->setCommonnameSpanish($value);
                break;
            case 75:
                $this->setCommonnamePortuguese($value);
                break;
            case 76:
                $this->setCommonnameSwedish($value);
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
        $keys = FamiliesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setFamcode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSortid($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setFamily($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAuthoryear($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setQualification($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCommonname($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setFamiliesrefno($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSynonym($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setOrder($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setOrdnum($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setClass($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setClassnum($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setGenera($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setSpecies($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setBodyshapei($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setSpeciescount($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setMarine($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setBrackish($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setFreshwater($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setWatersalinity($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setAquarium($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setReprguild($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setSwimmode($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setActivity($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setPeriodrange($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setPeriod($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setEpochrange($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setEpoch($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setFossilref($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setFampic($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setLarvpic($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setValidgenera($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setComplete($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setSource($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setAspinesmin($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setAspinesmax($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setAraysmin($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setAraysmax($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setDspinesmin($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setDspinesmax($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setDraysmin($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setDraysmax($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setNorthernmost($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setNorthsouthn($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setSouthernmost($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setNorthsouths($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setWesternmost($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setWesteastw($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setEasternmost($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setWesteaste($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setPhiprime($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setDivision($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setExperts($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setEntered($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setDateentered($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setModified($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setDatemodified($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setExpert($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setDatechecked($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setRemark($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setEtymology($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setFamilyexpert($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setFbcontact($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setClofexpert($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setCommonnameGreek($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setCommonnameGreekU($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setCommonnameRussian($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setCommonnameRussianOriginal($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setCommonnameGerman($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setCommonnameFrench($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setCommonnameItalian($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setCommonnameDutch($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setCommonnameChinese($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setCommonnameChineseU($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setCommonnameSpanish($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setCommonnamePortuguese($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setCommonnameSwedish($arr[$keys[76]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FamiliesPeer::DATABASE_NAME);

        if ($this->isColumnModified(FamiliesPeer::FAMCODE)) $criteria->add(FamiliesPeer::FAMCODE, $this->famcode);
        if ($this->isColumnModified(FamiliesPeer::SORTID)) $criteria->add(FamiliesPeer::SORTID, $this->sortid);
        if ($this->isColumnModified(FamiliesPeer::FAMILY)) $criteria->add(FamiliesPeer::FAMILY, $this->family);
        if ($this->isColumnModified(FamiliesPeer::AUTHORYEAR)) $criteria->add(FamiliesPeer::AUTHORYEAR, $this->authoryear);
        if ($this->isColumnModified(FamiliesPeer::QUALIFICATION)) $criteria->add(FamiliesPeer::QUALIFICATION, $this->qualification);
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME)) $criteria->add(FamiliesPeer::COMMONNAME, $this->commonname);
        if ($this->isColumnModified(FamiliesPeer::FAMILIESREFNO)) $criteria->add(FamiliesPeer::FAMILIESREFNO, $this->familiesrefno);
        if ($this->isColumnModified(FamiliesPeer::SYNONYM)) $criteria->add(FamiliesPeer::SYNONYM, $this->synonym);
        if ($this->isColumnModified(FamiliesPeer::ORDER)) $criteria->add(FamiliesPeer::ORDER, $this->order);
        if ($this->isColumnModified(FamiliesPeer::ORDNUM)) $criteria->add(FamiliesPeer::ORDNUM, $this->ordnum);
        if ($this->isColumnModified(FamiliesPeer::CLAZZ)) $criteria->add(FamiliesPeer::CLAZZ, $this->class);
        if ($this->isColumnModified(FamiliesPeer::CLASSNUM)) $criteria->add(FamiliesPeer::CLASSNUM, $this->classnum);
        if ($this->isColumnModified(FamiliesPeer::GENERA)) $criteria->add(FamiliesPeer::GENERA, $this->genera);
        if ($this->isColumnModified(FamiliesPeer::SPECIES)) $criteria->add(FamiliesPeer::SPECIES, $this->species);
        if ($this->isColumnModified(FamiliesPeer::BODYSHAPEI)) $criteria->add(FamiliesPeer::BODYSHAPEI, $this->bodyshapei);
        if ($this->isColumnModified(FamiliesPeer::SPECIESCOUNT)) $criteria->add(FamiliesPeer::SPECIESCOUNT, $this->speciescount);
        if ($this->isColumnModified(FamiliesPeer::MARINE)) $criteria->add(FamiliesPeer::MARINE, $this->marine);
        if ($this->isColumnModified(FamiliesPeer::BRACKISH)) $criteria->add(FamiliesPeer::BRACKISH, $this->brackish);
        if ($this->isColumnModified(FamiliesPeer::FRESHWATER)) $criteria->add(FamiliesPeer::FRESHWATER, $this->freshwater);
        if ($this->isColumnModified(FamiliesPeer::WATERSALINITY)) $criteria->add(FamiliesPeer::WATERSALINITY, $this->watersalinity);
        if ($this->isColumnModified(FamiliesPeer::AQUARIUM)) $criteria->add(FamiliesPeer::AQUARIUM, $this->aquarium);
        if ($this->isColumnModified(FamiliesPeer::REPRGUILD)) $criteria->add(FamiliesPeer::REPRGUILD, $this->reprguild);
        if ($this->isColumnModified(FamiliesPeer::SWIMMODE)) $criteria->add(FamiliesPeer::SWIMMODE, $this->swimmode);
        if ($this->isColumnModified(FamiliesPeer::ACTIVITY)) $criteria->add(FamiliesPeer::ACTIVITY, $this->activity);
        if ($this->isColumnModified(FamiliesPeer::PERIODRANGE)) $criteria->add(FamiliesPeer::PERIODRANGE, $this->periodrange);
        if ($this->isColumnModified(FamiliesPeer::PERIOD)) $criteria->add(FamiliesPeer::PERIOD, $this->period);
        if ($this->isColumnModified(FamiliesPeer::EPOCHRANGE)) $criteria->add(FamiliesPeer::EPOCHRANGE, $this->epochrange);
        if ($this->isColumnModified(FamiliesPeer::EPOCH)) $criteria->add(FamiliesPeer::EPOCH, $this->epoch);
        if ($this->isColumnModified(FamiliesPeer::FOSSILREF)) $criteria->add(FamiliesPeer::FOSSILREF, $this->fossilref);
        if ($this->isColumnModified(FamiliesPeer::FAMPIC)) $criteria->add(FamiliesPeer::FAMPIC, $this->fampic);
        if ($this->isColumnModified(FamiliesPeer::LARVPIC)) $criteria->add(FamiliesPeer::LARVPIC, $this->larvpic);
        if ($this->isColumnModified(FamiliesPeer::VALIDGENERA)) $criteria->add(FamiliesPeer::VALIDGENERA, $this->validgenera);
        if ($this->isColumnModified(FamiliesPeer::COMPLETE)) $criteria->add(FamiliesPeer::COMPLETE, $this->complete);
        if ($this->isColumnModified(FamiliesPeer::SOURCE)) $criteria->add(FamiliesPeer::SOURCE, $this->source);
        if ($this->isColumnModified(FamiliesPeer::ASPINESMIN)) $criteria->add(FamiliesPeer::ASPINESMIN, $this->aspinesmin);
        if ($this->isColumnModified(FamiliesPeer::ASPINESMAX)) $criteria->add(FamiliesPeer::ASPINESMAX, $this->aspinesmax);
        if ($this->isColumnModified(FamiliesPeer::ARAYSMIN)) $criteria->add(FamiliesPeer::ARAYSMIN, $this->araysmin);
        if ($this->isColumnModified(FamiliesPeer::ARAYSMAX)) $criteria->add(FamiliesPeer::ARAYSMAX, $this->araysmax);
        if ($this->isColumnModified(FamiliesPeer::DSPINESMIN)) $criteria->add(FamiliesPeer::DSPINESMIN, $this->dspinesmin);
        if ($this->isColumnModified(FamiliesPeer::DSPINESMAX)) $criteria->add(FamiliesPeer::DSPINESMAX, $this->dspinesmax);
        if ($this->isColumnModified(FamiliesPeer::DRAYSMIN)) $criteria->add(FamiliesPeer::DRAYSMIN, $this->draysmin);
        if ($this->isColumnModified(FamiliesPeer::DRAYSMAX)) $criteria->add(FamiliesPeer::DRAYSMAX, $this->draysmax);
        if ($this->isColumnModified(FamiliesPeer::NORTHERNMOST)) $criteria->add(FamiliesPeer::NORTHERNMOST, $this->northernmost);
        if ($this->isColumnModified(FamiliesPeer::NORTHSOUTHN)) $criteria->add(FamiliesPeer::NORTHSOUTHN, $this->northsouthn);
        if ($this->isColumnModified(FamiliesPeer::SOUTHERNMOST)) $criteria->add(FamiliesPeer::SOUTHERNMOST, $this->southernmost);
        if ($this->isColumnModified(FamiliesPeer::NORTHSOUTHS)) $criteria->add(FamiliesPeer::NORTHSOUTHS, $this->northsouths);
        if ($this->isColumnModified(FamiliesPeer::WESTERNMOST)) $criteria->add(FamiliesPeer::WESTERNMOST, $this->westernmost);
        if ($this->isColumnModified(FamiliesPeer::WESTEASTW)) $criteria->add(FamiliesPeer::WESTEASTW, $this->westeastw);
        if ($this->isColumnModified(FamiliesPeer::EASTERNMOST)) $criteria->add(FamiliesPeer::EASTERNMOST, $this->easternmost);
        if ($this->isColumnModified(FamiliesPeer::WESTEASTE)) $criteria->add(FamiliesPeer::WESTEASTE, $this->westeaste);
        if ($this->isColumnModified(FamiliesPeer::PHIPRIME)) $criteria->add(FamiliesPeer::PHIPRIME, $this->phiprime);
        if ($this->isColumnModified(FamiliesPeer::DIVISION)) $criteria->add(FamiliesPeer::DIVISION, $this->division);
        if ($this->isColumnModified(FamiliesPeer::EXPERTS)) $criteria->add(FamiliesPeer::EXPERTS, $this->experts);
        if ($this->isColumnModified(FamiliesPeer::ENTERED)) $criteria->add(FamiliesPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(FamiliesPeer::DATEENTERED)) $criteria->add(FamiliesPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(FamiliesPeer::MODIFIED)) $criteria->add(FamiliesPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(FamiliesPeer::DATEMODIFIED)) $criteria->add(FamiliesPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(FamiliesPeer::EXPERT)) $criteria->add(FamiliesPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(FamiliesPeer::DATECHECKED)) $criteria->add(FamiliesPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(FamiliesPeer::REMARK)) $criteria->add(FamiliesPeer::REMARK, $this->remark);
        if ($this->isColumnModified(FamiliesPeer::ETYMOLOGY)) $criteria->add(FamiliesPeer::ETYMOLOGY, $this->etymology);
        if ($this->isColumnModified(FamiliesPeer::FAMILYEXPERT)) $criteria->add(FamiliesPeer::FAMILYEXPERT, $this->familyexpert);
        if ($this->isColumnModified(FamiliesPeer::FBCONTACT)) $criteria->add(FamiliesPeer::FBCONTACT, $this->fbcontact);
        if ($this->isColumnModified(FamiliesPeer::CLOFEXPERT)) $criteria->add(FamiliesPeer::CLOFEXPERT, $this->clofexpert);
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_GREEK)) $criteria->add(FamiliesPeer::COMMONNAME_GREEK, $this->commonname_greek);
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_GREEK_U)) $criteria->add(FamiliesPeer::COMMONNAME_GREEK_U, $this->commonname_greek_u);
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_RUSSIAN)) $criteria->add(FamiliesPeer::COMMONNAME_RUSSIAN, $this->commonname_russian);
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_RUSSIAN_ORIGINAL)) $criteria->add(FamiliesPeer::COMMONNAME_RUSSIAN_ORIGINAL, $this->commonname_russian_original);
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_GERMAN)) $criteria->add(FamiliesPeer::COMMONNAME_GERMAN, $this->commonname_german);
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_FRENCH)) $criteria->add(FamiliesPeer::COMMONNAME_FRENCH, $this->commonname_french);
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_ITALIAN)) $criteria->add(FamiliesPeer::COMMONNAME_ITALIAN, $this->commonname_italian);
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_DUTCH)) $criteria->add(FamiliesPeer::COMMONNAME_DUTCH, $this->commonname_dutch);
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_CHINESE)) $criteria->add(FamiliesPeer::COMMONNAME_CHINESE, $this->commonname_chinese);
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_CHINESE_U)) $criteria->add(FamiliesPeer::COMMONNAME_CHINESE_U, $this->commonname_chinese_u);
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_SPANISH)) $criteria->add(FamiliesPeer::COMMONNAME_SPANISH, $this->commonname_spanish);
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_PORTUGUESE)) $criteria->add(FamiliesPeer::COMMONNAME_PORTUGUESE, $this->commonname_portuguese);
        if ($this->isColumnModified(FamiliesPeer::COMMONNAME_SWEDISH)) $criteria->add(FamiliesPeer::COMMONNAME_SWEDISH, $this->commonname_swedish);

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
        $criteria = new Criteria(FamiliesPeer::DATABASE_NAME);
        $criteria->add(FamiliesPeer::FAMILY, $this->family);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getFamily();
    }

    /**
     * Generic method to set the primary key (family column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setFamily($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getFamily();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Families (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFamcode($this->getFamcode());
        $copyObj->setSortid($this->getSortid());
        $copyObj->setAuthoryear($this->getAuthoryear());
        $copyObj->setQualification($this->getQualification());
        $copyObj->setCommonname($this->getCommonname());
        $copyObj->setFamiliesrefno($this->getFamiliesrefno());
        $copyObj->setSynonym($this->getSynonym());
        $copyObj->setOrder($this->getOrder());
        $copyObj->setOrdnum($this->getOrdnum());
        $copyObj->setClass($this->getClass());
        $copyObj->setClassnum($this->getClassnum());
        $copyObj->setGenera($this->getGenera());
        $copyObj->setSpecies($this->getSpecies());
        $copyObj->setBodyshapei($this->getBodyshapei());
        $copyObj->setSpeciescount($this->getSpeciescount());
        $copyObj->setMarine($this->getMarine());
        $copyObj->setBrackish($this->getBrackish());
        $copyObj->setFreshwater($this->getFreshwater());
        $copyObj->setWatersalinity($this->getWatersalinity());
        $copyObj->setAquarium($this->getAquarium());
        $copyObj->setReprguild($this->getReprguild());
        $copyObj->setSwimmode($this->getSwimmode());
        $copyObj->setActivity($this->getActivity());
        $copyObj->setPeriodrange($this->getPeriodrange());
        $copyObj->setPeriod($this->getPeriod());
        $copyObj->setEpochrange($this->getEpochrange());
        $copyObj->setEpoch($this->getEpoch());
        $copyObj->setFossilref($this->getFossilref());
        $copyObj->setFampic($this->getFampic());
        $copyObj->setLarvpic($this->getLarvpic());
        $copyObj->setValidgenera($this->getValidgenera());
        $copyObj->setComplete($this->getComplete());
        $copyObj->setSource($this->getSource());
        $copyObj->setAspinesmin($this->getAspinesmin());
        $copyObj->setAspinesmax($this->getAspinesmax());
        $copyObj->setAraysmin($this->getAraysmin());
        $copyObj->setAraysmax($this->getAraysmax());
        $copyObj->setDspinesmin($this->getDspinesmin());
        $copyObj->setDspinesmax($this->getDspinesmax());
        $copyObj->setDraysmin($this->getDraysmin());
        $copyObj->setDraysmax($this->getDraysmax());
        $copyObj->setNorthernmost($this->getNorthernmost());
        $copyObj->setNorthsouthn($this->getNorthsouthn());
        $copyObj->setSouthernmost($this->getSouthernmost());
        $copyObj->setNorthsouths($this->getNorthsouths());
        $copyObj->setWesternmost($this->getWesternmost());
        $copyObj->setWesteastw($this->getWesteastw());
        $copyObj->setEasternmost($this->getEasternmost());
        $copyObj->setWesteaste($this->getWesteaste());
        $copyObj->setPhiprime($this->getPhiprime());
        $copyObj->setDivision($this->getDivision());
        $copyObj->setExperts($this->getExperts());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setRemark($this->getRemark());
        $copyObj->setEtymology($this->getEtymology());
        $copyObj->setFamilyexpert($this->getFamilyexpert());
        $copyObj->setFbcontact($this->getFbcontact());
        $copyObj->setClofexpert($this->getClofexpert());
        $copyObj->setCommonnameGreek($this->getCommonnameGreek());
        $copyObj->setCommonnameGreekU($this->getCommonnameGreekU());
        $copyObj->setCommonnameRussian($this->getCommonnameRussian());
        $copyObj->setCommonnameRussianOriginal($this->getCommonnameRussianOriginal());
        $copyObj->setCommonnameGerman($this->getCommonnameGerman());
        $copyObj->setCommonnameFrench($this->getCommonnameFrench());
        $copyObj->setCommonnameItalian($this->getCommonnameItalian());
        $copyObj->setCommonnameDutch($this->getCommonnameDutch());
        $copyObj->setCommonnameChinese($this->getCommonnameChinese());
        $copyObj->setCommonnameChineseU($this->getCommonnameChineseU());
        $copyObj->setCommonnameSpanish($this->getCommonnameSpanish());
        $copyObj->setCommonnamePortuguese($this->getCommonnamePortuguese());
        $copyObj->setCommonnameSwedish($this->getCommonnameSwedish());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setFamily(''); // this is a auto-increment column, so set to default value
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
     * @return Families Clone of current object.
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
     * @return FamiliesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FamiliesPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->famcode = null;
        $this->sortid = null;
        $this->family = null;
        $this->authoryear = null;
        $this->qualification = null;
        $this->commonname = null;
        $this->familiesrefno = null;
        $this->synonym = null;
        $this->order = null;
        $this->ordnum = null;
        $this->class = null;
        $this->classnum = null;
        $this->genera = null;
        $this->species = null;
        $this->bodyshapei = null;
        $this->speciescount = null;
        $this->marine = null;
        $this->brackish = null;
        $this->freshwater = null;
        $this->watersalinity = null;
        $this->aquarium = null;
        $this->reprguild = null;
        $this->swimmode = null;
        $this->activity = null;
        $this->periodrange = null;
        $this->period = null;
        $this->epochrange = null;
        $this->epoch = null;
        $this->fossilref = null;
        $this->fampic = null;
        $this->larvpic = null;
        $this->validgenera = null;
        $this->complete = null;
        $this->source = null;
        $this->aspinesmin = null;
        $this->aspinesmax = null;
        $this->araysmin = null;
        $this->araysmax = null;
        $this->dspinesmin = null;
        $this->dspinesmax = null;
        $this->draysmin = null;
        $this->draysmax = null;
        $this->northernmost = null;
        $this->northsouthn = null;
        $this->southernmost = null;
        $this->northsouths = null;
        $this->westernmost = null;
        $this->westeastw = null;
        $this->easternmost = null;
        $this->westeaste = null;
        $this->phiprime = null;
        $this->division = null;
        $this->experts = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->remark = null;
        $this->etymology = null;
        $this->familyexpert = null;
        $this->fbcontact = null;
        $this->clofexpert = null;
        $this->commonname_greek = null;
        $this->commonname_greek_u = null;
        $this->commonname_russian = null;
        $this->commonname_russian_original = null;
        $this->commonname_german = null;
        $this->commonname_french = null;
        $this->commonname_italian = null;
        $this->commonname_dutch = null;
        $this->commonname_chinese = null;
        $this->commonname_chinese_u = null;
        $this->commonname_spanish = null;
        $this->commonname_portuguese = null;
        $this->commonname_swedish = null;
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
        return (string) $this->exportTo(FamiliesPeer::DEFAULT_STRING_FORMAT);
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
