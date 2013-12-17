<?php


/**
 * Base class that represents a row from the 'webuse' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseWebuse extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'WebusePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        WebusePeer
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
     * The value for the period field.
     * @var        string
     */
    protected $period;

    /**
     * The value for the year field.
     * @var        int
     */
    protected $year;

    /**
     * The value for the month field.
     * @var        int
     */
    protected $month;

    /**
     * The value for the hits field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $hits;

    /**
     * The value for the hitsnotviewed field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $hitsnotviewed;

    /**
     * The value for the sessions field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $sessions;

    /**
     * The value for the uniqueusers field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $uniqueusers;

    /**
     * The value for the visitsvisitors field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $visitsvisitors;

    /**
     * The value for the pages field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $pages;

    /**
     * The value for the pagesvisit field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $pagesvisit;

    /**
     * The value for the returnusers field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $returnusers;

    /**
     * The value for the powerusers field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $powerusers;

    /**
     * The value for the bookmarksessions field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $bookmarksessions;

    /**
     * The value for the bookmark field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $bookmark;

    /**
     * The value for the duration field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $duration;

    /**
     * The value for the bandwidth_old field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $bandwidth_old;

    /**
     * The value for the bandwidth field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $bandwidth;

    /**
     * The value for the bwnotviewed field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $bwnotviewed;

    /**
     * The value for the usa field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $usa;

    /**
     * The value for the international field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $international;

    /**
     * The value for the unknown field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $unknown;

    /**
     * The value for the countries field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $countries;

    /**
     * The value for the devcountries field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $devcountries;

    /**
     * The value for the devcountsess field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $devcountsess;

    /**
     * The value for the acpcountries field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $acpcountries;

    /**
     * The value for the acpcountsess field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $acpcountsess;

    /**
     * The value for the otheros field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $otheros;

    /**
     * The value for the topday field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $topday;

    /**
     * The value for the topdaydate field.
     * @var        string
     */
    protected $topdaydate;

    /**
     * The value for the downloads field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $downloads;

    /**
     * The value for the summarydir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $summarydir;

    /**
     * The value for the nomenclaturedir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $nomenclaturedir;

    /**
     * The value for the comnamesdir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $comnamesdir;

    /**
     * The value for the referencesdir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $referencesdir;

    /**
     * The value for the photosdir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $photosdir;

    /**
     * The value for the forumdir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $forumdir;

    /**
     * The value for the tourdir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $tourdir;

    /**
     * The value for the chatdir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $chatdir;

    /**
     * The value for the popdyndir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $popdyndir;

    /**
     * The value for the reproductiondir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $reproductiondir;

    /**
     * The value for the trophicdir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $trophicdir;

    /**
     * The value for the countrydir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $countrydir;

    /**
     * The value for the eschmeyerdir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $eschmeyerdir;

    /**
     * The value for the fbbookdir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $fbbookdir;

    /**
     * The value for the fishquizdir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $fishquizdir;

    /**
     * The value for the museumdir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $museumdir;

    /**
     * The value for the glossarydir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $glossarydir;

    /**
     * The value for the mapdir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $mapdir;

    /**
     * The value for the identification field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $identification;

    /**
     * The value for the dateentered field.
     * @var        string
     */
    protected $dateentered;

    /**
     * The value for the larvalbasedir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $larvalbasedir;

    /**
     * The value for the diseasedir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $diseasedir;

    /**
     * The value for the toolsdir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $toolsdir;

    /**
     * The value for the identificationdir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $identificationdir;

    /**
     * The value for the keysdir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $keysdir;

    /**
     * The value for the fieldguidesdir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $fieldguidesdir;

    /**
     * The value for the fishonlinedir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $fishonlinedir;

    /**
     * The value for the downloaddir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $downloaddir;

    /**
     * The value for the ecologydir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $ecologydir;

    /**
     * The value for the physiologydir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $physiologydir;

    /**
     * The value for the geneticsdir field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $geneticsdir;

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
        $this->hits = 0;
        $this->hitsnotviewed = 0;
        $this->sessions = 0;
        $this->uniqueusers = 0;
        $this->visitsvisitors = 0;
        $this->pages = 0;
        $this->pagesvisit = 0;
        $this->returnusers = 0;
        $this->powerusers = 0;
        $this->bookmarksessions = 0;
        $this->bookmark = 0;
        $this->duration = 0;
        $this->bandwidth_old = 0;
        $this->bandwidth = 0;
        $this->bwnotviewed = 0;
        $this->usa = 0;
        $this->international = 0;
        $this->unknown = 0;
        $this->countries = 0;
        $this->devcountries = 0;
        $this->devcountsess = 0;
        $this->acpcountries = 0;
        $this->acpcountsess = 0;
        $this->otheros = 0;
        $this->topday = 0;
        $this->downloads = 0;
        $this->summarydir = 0;
        $this->nomenclaturedir = 0;
        $this->comnamesdir = 0;
        $this->referencesdir = 0;
        $this->photosdir = 0;
        $this->forumdir = 0;
        $this->tourdir = 0;
        $this->chatdir = 0;
        $this->popdyndir = 0;
        $this->reproductiondir = 0;
        $this->trophicdir = 0;
        $this->countrydir = 0;
        $this->eschmeyerdir = 0;
        $this->fbbookdir = 0;
        $this->fishquizdir = 0;
        $this->museumdir = 0;
        $this->glossarydir = 0;
        $this->mapdir = 0;
        $this->identification = 0;
        $this->larvalbasedir = 0;
        $this->diseasedir = 0;
        $this->toolsdir = 0;
        $this->identificationdir = 0;
        $this->keysdir = 0;
        $this->fieldguidesdir = 0;
        $this->fishonlinedir = 0;
        $this->downloaddir = 0;
        $this->ecologydir = 0;
        $this->physiologydir = 0;
        $this->geneticsdir = 0;
    }

    /**
     * Initializes internal state of BaseWebuse object.
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
     * Get the [optionally formatted] temporal [period] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPeriod($format = 'Y-m-d H:i:s')
    {
        if ($this->period === null) {
            return null;
        }

        if ($this->period === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->period);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->period, true), $x);
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
     * Get the [year] column value.
     *
     * @return int
     */
    public function getYear()
    {

        return $this->year;
    }

    /**
     * Get the [month] column value.
     *
     * @return int
     */
    public function getMonth()
    {

        return $this->month;
    }

    /**
     * Get the [hits] column value.
     *
     * @return int
     */
    public function getHits()
    {

        return $this->hits;
    }

    /**
     * Get the [hitsnotviewed] column value.
     *
     * @return int
     */
    public function getHitsnotviewed()
    {

        return $this->hitsnotviewed;
    }

    /**
     * Get the [sessions] column value.
     *
     * @return int
     */
    public function getSessions()
    {

        return $this->sessions;
    }

    /**
     * Get the [uniqueusers] column value.
     *
     * @return int
     */
    public function getUniqueusers()
    {

        return $this->uniqueusers;
    }

    /**
     * Get the [visitsvisitors] column value.
     *
     * @return double
     */
    public function getVisitsvisitors()
    {

        return $this->visitsvisitors;
    }

    /**
     * Get the [pages] column value.
     *
     * @return int
     */
    public function getPages()
    {

        return $this->pages;
    }

    /**
     * Get the [pagesvisit] column value.
     *
     * @return double
     */
    public function getPagesvisit()
    {

        return $this->pagesvisit;
    }

    /**
     * Get the [returnusers] column value.
     *
     * @return int
     */
    public function getReturnusers()
    {

        return $this->returnusers;
    }

    /**
     * Get the [powerusers] column value.
     *
     * @return int
     */
    public function getPowerusers()
    {

        return $this->powerusers;
    }

    /**
     * Get the [bookmarksessions] column value.
     *
     * @return int
     */
    public function getBookmarksessions()
    {

        return $this->bookmarksessions;
    }

    /**
     * Get the [bookmark] column value.
     *
     * @return double
     */
    public function getBookmark()
    {

        return $this->bookmark;
    }

    /**
     * Get the [duration] column value.
     *
     * @return double
     */
    public function getDuration()
    {

        return $this->duration;
    }

    /**
     * Get the [bandwidth_old] column value.
     *
     * @return double
     */
    public function getBandwidthOld()
    {

        return $this->bandwidth_old;
    }

    /**
     * Get the [bandwidth] column value.
     *
     * @return double
     */
    public function getBandwidth()
    {

        return $this->bandwidth;
    }

    /**
     * Get the [bwnotviewed] column value.
     *
     * @return double
     */
    public function getBwnotviewed()
    {

        return $this->bwnotviewed;
    }

    /**
     * Get the [usa] column value.
     *
     * @return int
     */
    public function getUsa()
    {

        return $this->usa;
    }

    /**
     * Get the [international] column value.
     *
     * @return int
     */
    public function getInternational()
    {

        return $this->international;
    }

    /**
     * Get the [unknown] column value.
     *
     * @return int
     */
    public function getUnknown()
    {

        return $this->unknown;
    }

    /**
     * Get the [countries] column value.
     *
     * @return int
     */
    public function getCountries()
    {

        return $this->countries;
    }

    /**
     * Get the [devcountries] column value.
     *
     * @return int
     */
    public function getDevcountries()
    {

        return $this->devcountries;
    }

    /**
     * Get the [devcountsess] column value.
     *
     * @return int
     */
    public function getDevcountsess()
    {

        return $this->devcountsess;
    }

    /**
     * Get the [acpcountries] column value.
     *
     * @return int
     */
    public function getAcpcountries()
    {

        return $this->acpcountries;
    }

    /**
     * Get the [acpcountsess] column value.
     *
     * @return int
     */
    public function getAcpcountsess()
    {

        return $this->acpcountsess;
    }

    /**
     * Get the [otheros] column value.
     *
     * @return int
     */
    public function getOtheros()
    {

        return $this->otheros;
    }

    /**
     * Get the [topday] column value.
     *
     * @return int
     */
    public function getTopday()
    {

        return $this->topday;
    }

    /**
     * Get the [optionally formatted] temporal [topdaydate] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getTopdaydate($format = 'Y-m-d H:i:s')
    {
        if ($this->topdaydate === null) {
            return null;
        }

        if ($this->topdaydate === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->topdaydate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->topdaydate, true), $x);
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
     * Get the [downloads] column value.
     *
     * @return int
     */
    public function getDownloads()
    {

        return $this->downloads;
    }

    /**
     * Get the [summarydir] column value.
     *
     * @return double
     */
    public function getSummarydir()
    {

        return $this->summarydir;
    }

    /**
     * Get the [nomenclaturedir] column value.
     *
     * @return double
     */
    public function getNomenclaturedir()
    {

        return $this->nomenclaturedir;
    }

    /**
     * Get the [comnamesdir] column value.
     *
     * @return double
     */
    public function getComnamesdir()
    {

        return $this->comnamesdir;
    }

    /**
     * Get the [referencesdir] column value.
     *
     * @return double
     */
    public function getReferencesdir()
    {

        return $this->referencesdir;
    }

    /**
     * Get the [photosdir] column value.
     *
     * @return double
     */
    public function getPhotosdir()
    {

        return $this->photosdir;
    }

    /**
     * Get the [forumdir] column value.
     *
     * @return double
     */
    public function getForumdir()
    {

        return $this->forumdir;
    }

    /**
     * Get the [tourdir] column value.
     *
     * @return double
     */
    public function getTourdir()
    {

        return $this->tourdir;
    }

    /**
     * Get the [chatdir] column value.
     *
     * @return double
     */
    public function getChatdir()
    {

        return $this->chatdir;
    }

    /**
     * Get the [popdyndir] column value.
     *
     * @return double
     */
    public function getPopdyndir()
    {

        return $this->popdyndir;
    }

    /**
     * Get the [reproductiondir] column value.
     *
     * @return double
     */
    public function getReproductiondir()
    {

        return $this->reproductiondir;
    }

    /**
     * Get the [trophicdir] column value.
     *
     * @return double
     */
    public function getTrophicdir()
    {

        return $this->trophicdir;
    }

    /**
     * Get the [countrydir] column value.
     *
     * @return double
     */
    public function getCountrydir()
    {

        return $this->countrydir;
    }

    /**
     * Get the [eschmeyerdir] column value.
     *
     * @return double
     */
    public function getEschmeyerdir()
    {

        return $this->eschmeyerdir;
    }

    /**
     * Get the [fbbookdir] column value.
     *
     * @return double
     */
    public function getFbbookdir()
    {

        return $this->fbbookdir;
    }

    /**
     * Get the [fishquizdir] column value.
     *
     * @return double
     */
    public function getFishquizdir()
    {

        return $this->fishquizdir;
    }

    /**
     * Get the [museumdir] column value.
     *
     * @return double
     */
    public function getMuseumdir()
    {

        return $this->museumdir;
    }

    /**
     * Get the [glossarydir] column value.
     *
     * @return double
     */
    public function getGlossarydir()
    {

        return $this->glossarydir;
    }

    /**
     * Get the [mapdir] column value.
     *
     * @return double
     */
    public function getMapdir()
    {

        return $this->mapdir;
    }

    /**
     * Get the [identification] column value.
     *
     * @return double
     */
    public function getIdentification()
    {

        return $this->identification;
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
     * Get the [larvalbasedir] column value.
     *
     * @return double
     */
    public function getLarvalbasedir()
    {

        return $this->larvalbasedir;
    }

    /**
     * Get the [diseasedir] column value.
     *
     * @return double
     */
    public function getDiseasedir()
    {

        return $this->diseasedir;
    }

    /**
     * Get the [toolsdir] column value.
     *
     * @return double
     */
    public function getToolsdir()
    {

        return $this->toolsdir;
    }

    /**
     * Get the [identificationdir] column value.
     *
     * @return double
     */
    public function getIdentificationdir()
    {

        return $this->identificationdir;
    }

    /**
     * Get the [keysdir] column value.
     *
     * @return double
     */
    public function getKeysdir()
    {

        return $this->keysdir;
    }

    /**
     * Get the [fieldguidesdir] column value.
     *
     * @return double
     */
    public function getFieldguidesdir()
    {

        return $this->fieldguidesdir;
    }

    /**
     * Get the [fishonlinedir] column value.
     *
     * @return double
     */
    public function getFishonlinedir()
    {

        return $this->fishonlinedir;
    }

    /**
     * Get the [downloaddir] column value.
     *
     * @return double
     */
    public function getDownloaddir()
    {

        return $this->downloaddir;
    }

    /**
     * Get the [ecologydir] column value.
     *
     * @return double
     */
    public function getEcologydir()
    {

        return $this->ecologydir;
    }

    /**
     * Get the [physiologydir] column value.
     *
     * @return double
     */
    public function getPhysiologydir()
    {

        return $this->physiologydir;
    }

    /**
     * Get the [geneticsdir] column value.
     *
     * @return double
     */
    public function getGeneticsdir()
    {

        return $this->geneticsdir;
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
     * @return Webuse The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = WebusePeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Sets the value of [period] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Webuse The current object (for fluent API support)
     */
    public function setPeriod($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->period !== null || $dt !== null) {
            $currentDateAsString = ($this->period !== null && $tmpDt = new DateTime($this->period)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->period = $newDateAsString;
                $this->modifiedColumns[] = WebusePeer::PERIOD;
            }
        } // if either are not null


        return $this;
    } // setPeriod()

    /**
     * Set the value of [year] column.
     *
     * @param  int $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setYear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->year !== $v) {
            $this->year = $v;
            $this->modifiedColumns[] = WebusePeer::YEAR;
        }


        return $this;
    } // setYear()

    /**
     * Set the value of [month] column.
     *
     * @param  int $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setMonth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->month !== $v) {
            $this->month = $v;
            $this->modifiedColumns[] = WebusePeer::MONTH;
        }


        return $this;
    } // setMonth()

    /**
     * Set the value of [hits] column.
     *
     * @param  int $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setHits($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hits !== $v) {
            $this->hits = $v;
            $this->modifiedColumns[] = WebusePeer::HITS;
        }


        return $this;
    } // setHits()

    /**
     * Set the value of [hitsnotviewed] column.
     *
     * @param  int $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setHitsnotviewed($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hitsnotviewed !== $v) {
            $this->hitsnotviewed = $v;
            $this->modifiedColumns[] = WebusePeer::HITSNOTVIEWED;
        }


        return $this;
    } // setHitsnotviewed()

    /**
     * Set the value of [sessions] column.
     *
     * @param  int $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setSessions($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sessions !== $v) {
            $this->sessions = $v;
            $this->modifiedColumns[] = WebusePeer::SESSIONS;
        }


        return $this;
    } // setSessions()

    /**
     * Set the value of [uniqueusers] column.
     *
     * @param  int $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setUniqueusers($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->uniqueusers !== $v) {
            $this->uniqueusers = $v;
            $this->modifiedColumns[] = WebusePeer::UNIQUEUSERS;
        }


        return $this;
    } // setUniqueusers()

    /**
     * Set the value of [visitsvisitors] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setVisitsvisitors($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->visitsvisitors !== $v) {
            $this->visitsvisitors = $v;
            $this->modifiedColumns[] = WebusePeer::VISITSVISITORS;
        }


        return $this;
    } // setVisitsvisitors()

    /**
     * Set the value of [pages] column.
     *
     * @param  int $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setPages($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pages !== $v) {
            $this->pages = $v;
            $this->modifiedColumns[] = WebusePeer::PAGES;
        }


        return $this;
    } // setPages()

    /**
     * Set the value of [pagesvisit] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setPagesvisit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pagesvisit !== $v) {
            $this->pagesvisit = $v;
            $this->modifiedColumns[] = WebusePeer::PAGESVISIT;
        }


        return $this;
    } // setPagesvisit()

    /**
     * Set the value of [returnusers] column.
     *
     * @param  int $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setReturnusers($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->returnusers !== $v) {
            $this->returnusers = $v;
            $this->modifiedColumns[] = WebusePeer::RETURNUSERS;
        }


        return $this;
    } // setReturnusers()

    /**
     * Set the value of [powerusers] column.
     *
     * @param  int $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setPowerusers($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->powerusers !== $v) {
            $this->powerusers = $v;
            $this->modifiedColumns[] = WebusePeer::POWERUSERS;
        }


        return $this;
    } // setPowerusers()

    /**
     * Set the value of [bookmarksessions] column.
     *
     * @param  int $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setBookmarksessions($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bookmarksessions !== $v) {
            $this->bookmarksessions = $v;
            $this->modifiedColumns[] = WebusePeer::BOOKMARKSESSIONS;
        }


        return $this;
    } // setBookmarksessions()

    /**
     * Set the value of [bookmark] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setBookmark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->bookmark !== $v) {
            $this->bookmark = $v;
            $this->modifiedColumns[] = WebusePeer::BOOKMARK;
        }


        return $this;
    } // setBookmark()

    /**
     * Set the value of [duration] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setDuration($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->duration !== $v) {
            $this->duration = $v;
            $this->modifiedColumns[] = WebusePeer::DURATION;
        }


        return $this;
    } // setDuration()

    /**
     * Set the value of [bandwidth_old] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setBandwidthOld($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->bandwidth_old !== $v) {
            $this->bandwidth_old = $v;
            $this->modifiedColumns[] = WebusePeer::BANDWIDTH_OLD;
        }


        return $this;
    } // setBandwidthOld()

    /**
     * Set the value of [bandwidth] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setBandwidth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->bandwidth !== $v) {
            $this->bandwidth = $v;
            $this->modifiedColumns[] = WebusePeer::BANDWIDTH;
        }


        return $this;
    } // setBandwidth()

    /**
     * Set the value of [bwnotviewed] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setBwnotviewed($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->bwnotviewed !== $v) {
            $this->bwnotviewed = $v;
            $this->modifiedColumns[] = WebusePeer::BWNOTVIEWED;
        }


        return $this;
    } // setBwnotviewed()

    /**
     * Set the value of [usa] column.
     *
     * @param  int $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setUsa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->usa !== $v) {
            $this->usa = $v;
            $this->modifiedColumns[] = WebusePeer::USA;
        }


        return $this;
    } // setUsa()

    /**
     * Set the value of [international] column.
     *
     * @param  int $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setInternational($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->international !== $v) {
            $this->international = $v;
            $this->modifiedColumns[] = WebusePeer::INTERNATIONAL;
        }


        return $this;
    } // setInternational()

    /**
     * Set the value of [unknown] column.
     *
     * @param  int $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setUnknown($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->unknown !== $v) {
            $this->unknown = $v;
            $this->modifiedColumns[] = WebusePeer::UNKNOWN;
        }


        return $this;
    } // setUnknown()

    /**
     * Set the value of [countries] column.
     *
     * @param  int $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setCountries($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->countries !== $v) {
            $this->countries = $v;
            $this->modifiedColumns[] = WebusePeer::COUNTRIES;
        }


        return $this;
    } // setCountries()

    /**
     * Set the value of [devcountries] column.
     *
     * @param  int $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setDevcountries($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->devcountries !== $v) {
            $this->devcountries = $v;
            $this->modifiedColumns[] = WebusePeer::DEVCOUNTRIES;
        }


        return $this;
    } // setDevcountries()

    /**
     * Set the value of [devcountsess] column.
     *
     * @param  int $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setDevcountsess($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->devcountsess !== $v) {
            $this->devcountsess = $v;
            $this->modifiedColumns[] = WebusePeer::DEVCOUNTSESS;
        }


        return $this;
    } // setDevcountsess()

    /**
     * Set the value of [acpcountries] column.
     *
     * @param  int $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setAcpcountries($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->acpcountries !== $v) {
            $this->acpcountries = $v;
            $this->modifiedColumns[] = WebusePeer::ACPCOUNTRIES;
        }


        return $this;
    } // setAcpcountries()

    /**
     * Set the value of [acpcountsess] column.
     *
     * @param  int $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setAcpcountsess($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->acpcountsess !== $v) {
            $this->acpcountsess = $v;
            $this->modifiedColumns[] = WebusePeer::ACPCOUNTSESS;
        }


        return $this;
    } // setAcpcountsess()

    /**
     * Set the value of [otheros] column.
     *
     * @param  int $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setOtheros($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->otheros !== $v) {
            $this->otheros = $v;
            $this->modifiedColumns[] = WebusePeer::OTHEROS;
        }


        return $this;
    } // setOtheros()

    /**
     * Set the value of [topday] column.
     *
     * @param  int $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setTopday($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->topday !== $v) {
            $this->topday = $v;
            $this->modifiedColumns[] = WebusePeer::TOPDAY;
        }


        return $this;
    } // setTopday()

    /**
     * Sets the value of [topdaydate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Webuse The current object (for fluent API support)
     */
    public function setTopdaydate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->topdaydate !== null || $dt !== null) {
            $currentDateAsString = ($this->topdaydate !== null && $tmpDt = new DateTime($this->topdaydate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->topdaydate = $newDateAsString;
                $this->modifiedColumns[] = WebusePeer::TOPDAYDATE;
            }
        } // if either are not null


        return $this;
    } // setTopdaydate()

    /**
     * Set the value of [downloads] column.
     *
     * @param  int $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setDownloads($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->downloads !== $v) {
            $this->downloads = $v;
            $this->modifiedColumns[] = WebusePeer::DOWNLOADS;
        }


        return $this;
    } // setDownloads()

    /**
     * Set the value of [summarydir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setSummarydir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->summarydir !== $v) {
            $this->summarydir = $v;
            $this->modifiedColumns[] = WebusePeer::SUMMARYDIR;
        }


        return $this;
    } // setSummarydir()

    /**
     * Set the value of [nomenclaturedir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setNomenclaturedir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->nomenclaturedir !== $v) {
            $this->nomenclaturedir = $v;
            $this->modifiedColumns[] = WebusePeer::NOMENCLATUREDIR;
        }


        return $this;
    } // setNomenclaturedir()

    /**
     * Set the value of [comnamesdir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setComnamesdir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->comnamesdir !== $v) {
            $this->comnamesdir = $v;
            $this->modifiedColumns[] = WebusePeer::COMNAMESDIR;
        }


        return $this;
    } // setComnamesdir()

    /**
     * Set the value of [referencesdir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setReferencesdir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->referencesdir !== $v) {
            $this->referencesdir = $v;
            $this->modifiedColumns[] = WebusePeer::REFERENCESDIR;
        }


        return $this;
    } // setReferencesdir()

    /**
     * Set the value of [photosdir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setPhotosdir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->photosdir !== $v) {
            $this->photosdir = $v;
            $this->modifiedColumns[] = WebusePeer::PHOTOSDIR;
        }


        return $this;
    } // setPhotosdir()

    /**
     * Set the value of [forumdir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setForumdir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->forumdir !== $v) {
            $this->forumdir = $v;
            $this->modifiedColumns[] = WebusePeer::FORUMDIR;
        }


        return $this;
    } // setForumdir()

    /**
     * Set the value of [tourdir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setTourdir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tourdir !== $v) {
            $this->tourdir = $v;
            $this->modifiedColumns[] = WebusePeer::TOURDIR;
        }


        return $this;
    } // setTourdir()

    /**
     * Set the value of [chatdir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setChatdir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->chatdir !== $v) {
            $this->chatdir = $v;
            $this->modifiedColumns[] = WebusePeer::CHATDIR;
        }


        return $this;
    } // setChatdir()

    /**
     * Set the value of [popdyndir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setPopdyndir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->popdyndir !== $v) {
            $this->popdyndir = $v;
            $this->modifiedColumns[] = WebusePeer::POPDYNDIR;
        }


        return $this;
    } // setPopdyndir()

    /**
     * Set the value of [reproductiondir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setReproductiondir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->reproductiondir !== $v) {
            $this->reproductiondir = $v;
            $this->modifiedColumns[] = WebusePeer::REPRODUCTIONDIR;
        }


        return $this;
    } // setReproductiondir()

    /**
     * Set the value of [trophicdir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setTrophicdir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->trophicdir !== $v) {
            $this->trophicdir = $v;
            $this->modifiedColumns[] = WebusePeer::TROPHICDIR;
        }


        return $this;
    } // setTrophicdir()

    /**
     * Set the value of [countrydir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setCountrydir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->countrydir !== $v) {
            $this->countrydir = $v;
            $this->modifiedColumns[] = WebusePeer::COUNTRYDIR;
        }


        return $this;
    } // setCountrydir()

    /**
     * Set the value of [eschmeyerdir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setEschmeyerdir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->eschmeyerdir !== $v) {
            $this->eschmeyerdir = $v;
            $this->modifiedColumns[] = WebusePeer::ESCHMEYERDIR;
        }


        return $this;
    } // setEschmeyerdir()

    /**
     * Set the value of [fbbookdir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setFbbookdir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->fbbookdir !== $v) {
            $this->fbbookdir = $v;
            $this->modifiedColumns[] = WebusePeer::FBBOOKDIR;
        }


        return $this;
    } // setFbbookdir()

    /**
     * Set the value of [fishquizdir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setFishquizdir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->fishquizdir !== $v) {
            $this->fishquizdir = $v;
            $this->modifiedColumns[] = WebusePeer::FISHQUIZDIR;
        }


        return $this;
    } // setFishquizdir()

    /**
     * Set the value of [museumdir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setMuseumdir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->museumdir !== $v) {
            $this->museumdir = $v;
            $this->modifiedColumns[] = WebusePeer::MUSEUMDIR;
        }


        return $this;
    } // setMuseumdir()

    /**
     * Set the value of [glossarydir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setGlossarydir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->glossarydir !== $v) {
            $this->glossarydir = $v;
            $this->modifiedColumns[] = WebusePeer::GLOSSARYDIR;
        }


        return $this;
    } // setGlossarydir()

    /**
     * Set the value of [mapdir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setMapdir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->mapdir !== $v) {
            $this->mapdir = $v;
            $this->modifiedColumns[] = WebusePeer::MAPDIR;
        }


        return $this;
    } // setMapdir()

    /**
     * Set the value of [identification] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setIdentification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->identification !== $v) {
            $this->identification = $v;
            $this->modifiedColumns[] = WebusePeer::IDENTIFICATION;
        }


        return $this;
    } // setIdentification()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Webuse The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = WebusePeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [larvalbasedir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setLarvalbasedir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->larvalbasedir !== $v) {
            $this->larvalbasedir = $v;
            $this->modifiedColumns[] = WebusePeer::LARVALBASEDIR;
        }


        return $this;
    } // setLarvalbasedir()

    /**
     * Set the value of [diseasedir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setDiseasedir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->diseasedir !== $v) {
            $this->diseasedir = $v;
            $this->modifiedColumns[] = WebusePeer::DISEASEDIR;
        }


        return $this;
    } // setDiseasedir()

    /**
     * Set the value of [toolsdir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setToolsdir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->toolsdir !== $v) {
            $this->toolsdir = $v;
            $this->modifiedColumns[] = WebusePeer::TOOLSDIR;
        }


        return $this;
    } // setToolsdir()

    /**
     * Set the value of [identificationdir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setIdentificationdir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->identificationdir !== $v) {
            $this->identificationdir = $v;
            $this->modifiedColumns[] = WebusePeer::IDENTIFICATIONDIR;
        }


        return $this;
    } // setIdentificationdir()

    /**
     * Set the value of [keysdir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setKeysdir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->keysdir !== $v) {
            $this->keysdir = $v;
            $this->modifiedColumns[] = WebusePeer::KEYSDIR;
        }


        return $this;
    } // setKeysdir()

    /**
     * Set the value of [fieldguidesdir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setFieldguidesdir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->fieldguidesdir !== $v) {
            $this->fieldguidesdir = $v;
            $this->modifiedColumns[] = WebusePeer::FIELDGUIDESDIR;
        }


        return $this;
    } // setFieldguidesdir()

    /**
     * Set the value of [fishonlinedir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setFishonlinedir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->fishonlinedir !== $v) {
            $this->fishonlinedir = $v;
            $this->modifiedColumns[] = WebusePeer::FISHONLINEDIR;
        }


        return $this;
    } // setFishonlinedir()

    /**
     * Set the value of [downloaddir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setDownloaddir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->downloaddir !== $v) {
            $this->downloaddir = $v;
            $this->modifiedColumns[] = WebusePeer::DOWNLOADDIR;
        }


        return $this;
    } // setDownloaddir()

    /**
     * Set the value of [ecologydir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setEcologydir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ecologydir !== $v) {
            $this->ecologydir = $v;
            $this->modifiedColumns[] = WebusePeer::ECOLOGYDIR;
        }


        return $this;
    } // setEcologydir()

    /**
     * Set the value of [physiologydir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setPhysiologydir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->physiologydir !== $v) {
            $this->physiologydir = $v;
            $this->modifiedColumns[] = WebusePeer::PHYSIOLOGYDIR;
        }


        return $this;
    } // setPhysiologydir()

    /**
     * Set the value of [geneticsdir] column.
     *
     * @param  double $v new value
     * @return Webuse The current object (for fluent API support)
     */
    public function setGeneticsdir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->geneticsdir !== $v) {
            $this->geneticsdir = $v;
            $this->modifiedColumns[] = WebusePeer::GENETICSDIR;
        }


        return $this;
    } // setGeneticsdir()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Webuse The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = WebusePeer::TS;
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
            if ($this->hits !== 0) {
                return false;
            }

            if ($this->hitsnotviewed !== 0) {
                return false;
            }

            if ($this->sessions !== 0) {
                return false;
            }

            if ($this->uniqueusers !== 0) {
                return false;
            }

            if ($this->visitsvisitors !== 0) {
                return false;
            }

            if ($this->pages !== 0) {
                return false;
            }

            if ($this->pagesvisit !== 0) {
                return false;
            }

            if ($this->returnusers !== 0) {
                return false;
            }

            if ($this->powerusers !== 0) {
                return false;
            }

            if ($this->bookmarksessions !== 0) {
                return false;
            }

            if ($this->bookmark !== 0) {
                return false;
            }

            if ($this->duration !== 0) {
                return false;
            }

            if ($this->bandwidth_old !== 0) {
                return false;
            }

            if ($this->bandwidth !== 0) {
                return false;
            }

            if ($this->bwnotviewed !== 0) {
                return false;
            }

            if ($this->usa !== 0) {
                return false;
            }

            if ($this->international !== 0) {
                return false;
            }

            if ($this->unknown !== 0) {
                return false;
            }

            if ($this->countries !== 0) {
                return false;
            }

            if ($this->devcountries !== 0) {
                return false;
            }

            if ($this->devcountsess !== 0) {
                return false;
            }

            if ($this->acpcountries !== 0) {
                return false;
            }

            if ($this->acpcountsess !== 0) {
                return false;
            }

            if ($this->otheros !== 0) {
                return false;
            }

            if ($this->topday !== 0) {
                return false;
            }

            if ($this->downloads !== 0) {
                return false;
            }

            if ($this->summarydir !== 0) {
                return false;
            }

            if ($this->nomenclaturedir !== 0) {
                return false;
            }

            if ($this->comnamesdir !== 0) {
                return false;
            }

            if ($this->referencesdir !== 0) {
                return false;
            }

            if ($this->photosdir !== 0) {
                return false;
            }

            if ($this->forumdir !== 0) {
                return false;
            }

            if ($this->tourdir !== 0) {
                return false;
            }

            if ($this->chatdir !== 0) {
                return false;
            }

            if ($this->popdyndir !== 0) {
                return false;
            }

            if ($this->reproductiondir !== 0) {
                return false;
            }

            if ($this->trophicdir !== 0) {
                return false;
            }

            if ($this->countrydir !== 0) {
                return false;
            }

            if ($this->eschmeyerdir !== 0) {
                return false;
            }

            if ($this->fbbookdir !== 0) {
                return false;
            }

            if ($this->fishquizdir !== 0) {
                return false;
            }

            if ($this->museumdir !== 0) {
                return false;
            }

            if ($this->glossarydir !== 0) {
                return false;
            }

            if ($this->mapdir !== 0) {
                return false;
            }

            if ($this->identification !== 0) {
                return false;
            }

            if ($this->larvalbasedir !== 0) {
                return false;
            }

            if ($this->diseasedir !== 0) {
                return false;
            }

            if ($this->toolsdir !== 0) {
                return false;
            }

            if ($this->identificationdir !== 0) {
                return false;
            }

            if ($this->keysdir !== 0) {
                return false;
            }

            if ($this->fieldguidesdir !== 0) {
                return false;
            }

            if ($this->fishonlinedir !== 0) {
                return false;
            }

            if ($this->downloaddir !== 0) {
                return false;
            }

            if ($this->ecologydir !== 0) {
                return false;
            }

            if ($this->physiologydir !== 0) {
                return false;
            }

            if ($this->geneticsdir !== 0) {
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
            $this->period = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->year = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->month = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->hits = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->hitsnotviewed = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->sessions = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->uniqueusers = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->visitsvisitors = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->pages = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->pagesvisit = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->returnusers = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->powerusers = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->bookmarksessions = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->bookmark = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->duration = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
            $this->bandwidth_old = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->bandwidth = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->bwnotviewed = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->usa = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->international = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->unknown = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->countries = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->devcountries = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->devcountsess = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->acpcountries = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->acpcountsess = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->otheros = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->topday = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->topdaydate = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->downloads = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->summarydir = ($row[$startcol + 31] !== null) ? (double) $row[$startcol + 31] : null;
            $this->nomenclaturedir = ($row[$startcol + 32] !== null) ? (double) $row[$startcol + 32] : null;
            $this->comnamesdir = ($row[$startcol + 33] !== null) ? (double) $row[$startcol + 33] : null;
            $this->referencesdir = ($row[$startcol + 34] !== null) ? (double) $row[$startcol + 34] : null;
            $this->photosdir = ($row[$startcol + 35] !== null) ? (double) $row[$startcol + 35] : null;
            $this->forumdir = ($row[$startcol + 36] !== null) ? (double) $row[$startcol + 36] : null;
            $this->tourdir = ($row[$startcol + 37] !== null) ? (double) $row[$startcol + 37] : null;
            $this->chatdir = ($row[$startcol + 38] !== null) ? (double) $row[$startcol + 38] : null;
            $this->popdyndir = ($row[$startcol + 39] !== null) ? (double) $row[$startcol + 39] : null;
            $this->reproductiondir = ($row[$startcol + 40] !== null) ? (double) $row[$startcol + 40] : null;
            $this->trophicdir = ($row[$startcol + 41] !== null) ? (double) $row[$startcol + 41] : null;
            $this->countrydir = ($row[$startcol + 42] !== null) ? (double) $row[$startcol + 42] : null;
            $this->eschmeyerdir = ($row[$startcol + 43] !== null) ? (double) $row[$startcol + 43] : null;
            $this->fbbookdir = ($row[$startcol + 44] !== null) ? (double) $row[$startcol + 44] : null;
            $this->fishquizdir = ($row[$startcol + 45] !== null) ? (double) $row[$startcol + 45] : null;
            $this->museumdir = ($row[$startcol + 46] !== null) ? (double) $row[$startcol + 46] : null;
            $this->glossarydir = ($row[$startcol + 47] !== null) ? (double) $row[$startcol + 47] : null;
            $this->mapdir = ($row[$startcol + 48] !== null) ? (double) $row[$startcol + 48] : null;
            $this->identification = ($row[$startcol + 49] !== null) ? (double) $row[$startcol + 49] : null;
            $this->dateentered = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->larvalbasedir = ($row[$startcol + 51] !== null) ? (double) $row[$startcol + 51] : null;
            $this->diseasedir = ($row[$startcol + 52] !== null) ? (double) $row[$startcol + 52] : null;
            $this->toolsdir = ($row[$startcol + 53] !== null) ? (double) $row[$startcol + 53] : null;
            $this->identificationdir = ($row[$startcol + 54] !== null) ? (double) $row[$startcol + 54] : null;
            $this->keysdir = ($row[$startcol + 55] !== null) ? (double) $row[$startcol + 55] : null;
            $this->fieldguidesdir = ($row[$startcol + 56] !== null) ? (double) $row[$startcol + 56] : null;
            $this->fishonlinedir = ($row[$startcol + 57] !== null) ? (double) $row[$startcol + 57] : null;
            $this->downloaddir = ($row[$startcol + 58] !== null) ? (double) $row[$startcol + 58] : null;
            $this->ecologydir = ($row[$startcol + 59] !== null) ? (double) $row[$startcol + 59] : null;
            $this->physiologydir = ($row[$startcol + 60] !== null) ? (double) $row[$startcol + 60] : null;
            $this->geneticsdir = ($row[$startcol + 61] !== null) ? (double) $row[$startcol + 61] : null;
            $this->ts = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 63; // 63 = WebusePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Webuse object", $e);
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
            $con = Propel::getConnection(WebusePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = WebusePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(WebusePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = WebuseQuery::create()
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
            $con = Propel::getConnection(WebusePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                WebusePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = WebusePeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . WebusePeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(WebusePeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(WebusePeer::PERIOD)) {
            $modifiedColumns[':p' . $index++]  = '`period`';
        }
        if ($this->isColumnModified(WebusePeer::YEAR)) {
            $modifiedColumns[':p' . $index++]  = '`Year`';
        }
        if ($this->isColumnModified(WebusePeer::MONTH)) {
            $modifiedColumns[':p' . $index++]  = '`Month`';
        }
        if ($this->isColumnModified(WebusePeer::HITS)) {
            $modifiedColumns[':p' . $index++]  = '`Hits`';
        }
        if ($this->isColumnModified(WebusePeer::HITSNOTVIEWED)) {
            $modifiedColumns[':p' . $index++]  = '`HitsNotViewed`';
        }
        if ($this->isColumnModified(WebusePeer::SESSIONS)) {
            $modifiedColumns[':p' . $index++]  = '`Sessions`';
        }
        if ($this->isColumnModified(WebusePeer::UNIQUEUSERS)) {
            $modifiedColumns[':p' . $index++]  = '`UniqueUsers`';
        }
        if ($this->isColumnModified(WebusePeer::VISITSVISITORS)) {
            $modifiedColumns[':p' . $index++]  = '`VisitsVisitors`';
        }
        if ($this->isColumnModified(WebusePeer::PAGES)) {
            $modifiedColumns[':p' . $index++]  = '`Pages`';
        }
        if ($this->isColumnModified(WebusePeer::PAGESVISIT)) {
            $modifiedColumns[':p' . $index++]  = '`PagesVisit`';
        }
        if ($this->isColumnModified(WebusePeer::RETURNUSERS)) {
            $modifiedColumns[':p' . $index++]  = '`ReturnUsers`';
        }
        if ($this->isColumnModified(WebusePeer::POWERUSERS)) {
            $modifiedColumns[':p' . $index++]  = '`PowerUsers`';
        }
        if ($this->isColumnModified(WebusePeer::BOOKMARKSESSIONS)) {
            $modifiedColumns[':p' . $index++]  = '`BookMarkSessions`';
        }
        if ($this->isColumnModified(WebusePeer::BOOKMARK)) {
            $modifiedColumns[':p' . $index++]  = '`BookMark`';
        }
        if ($this->isColumnModified(WebusePeer::DURATION)) {
            $modifiedColumns[':p' . $index++]  = '`Duration`';
        }
        if ($this->isColumnModified(WebusePeer::BANDWIDTH_OLD)) {
            $modifiedColumns[':p' . $index++]  = '`Bandwidth_old`';
        }
        if ($this->isColumnModified(WebusePeer::BANDWIDTH)) {
            $modifiedColumns[':p' . $index++]  = '`Bandwidth`';
        }
        if ($this->isColumnModified(WebusePeer::BWNOTVIEWED)) {
            $modifiedColumns[':p' . $index++]  = '`BWNotViewed`';
        }
        if ($this->isColumnModified(WebusePeer::USA)) {
            $modifiedColumns[':p' . $index++]  = '`USA`';
        }
        if ($this->isColumnModified(WebusePeer::INTERNATIONAL)) {
            $modifiedColumns[':p' . $index++]  = '`International`';
        }
        if ($this->isColumnModified(WebusePeer::UNKNOWN)) {
            $modifiedColumns[':p' . $index++]  = '`Unknown`';
        }
        if ($this->isColumnModified(WebusePeer::COUNTRIES)) {
            $modifiedColumns[':p' . $index++]  = '`Countries`';
        }
        if ($this->isColumnModified(WebusePeer::DEVCOUNTRIES)) {
            $modifiedColumns[':p' . $index++]  = '`DevCountries`';
        }
        if ($this->isColumnModified(WebusePeer::DEVCOUNTSESS)) {
            $modifiedColumns[':p' . $index++]  = '`DevCountSess`';
        }
        if ($this->isColumnModified(WebusePeer::ACPCOUNTRIES)) {
            $modifiedColumns[':p' . $index++]  = '`ACPCountries`';
        }
        if ($this->isColumnModified(WebusePeer::ACPCOUNTSESS)) {
            $modifiedColumns[':p' . $index++]  = '`ACPCountSess`';
        }
        if ($this->isColumnModified(WebusePeer::OTHEROS)) {
            $modifiedColumns[':p' . $index++]  = '`OtherOS`';
        }
        if ($this->isColumnModified(WebusePeer::TOPDAY)) {
            $modifiedColumns[':p' . $index++]  = '`TopDay`';
        }
        if ($this->isColumnModified(WebusePeer::TOPDAYDATE)) {
            $modifiedColumns[':p' . $index++]  = '`TopDayDate`';
        }
        if ($this->isColumnModified(WebusePeer::DOWNLOADS)) {
            $modifiedColumns[':p' . $index++]  = '`Downloads`';
        }
        if ($this->isColumnModified(WebusePeer::SUMMARYDIR)) {
            $modifiedColumns[':p' . $index++]  = '`SummaryDir`';
        }
        if ($this->isColumnModified(WebusePeer::NOMENCLATUREDIR)) {
            $modifiedColumns[':p' . $index++]  = '`NomenclatureDir`';
        }
        if ($this->isColumnModified(WebusePeer::COMNAMESDIR)) {
            $modifiedColumns[':p' . $index++]  = '`ComNamesDir`';
        }
        if ($this->isColumnModified(WebusePeer::REFERENCESDIR)) {
            $modifiedColumns[':p' . $index++]  = '`ReferencesDir`';
        }
        if ($this->isColumnModified(WebusePeer::PHOTOSDIR)) {
            $modifiedColumns[':p' . $index++]  = '`PhotosDir`';
        }
        if ($this->isColumnModified(WebusePeer::FORUMDIR)) {
            $modifiedColumns[':p' . $index++]  = '`ForumDir`';
        }
        if ($this->isColumnModified(WebusePeer::TOURDIR)) {
            $modifiedColumns[':p' . $index++]  = '`TourDir`';
        }
        if ($this->isColumnModified(WebusePeer::CHATDIR)) {
            $modifiedColumns[':p' . $index++]  = '`ChatDir`';
        }
        if ($this->isColumnModified(WebusePeer::POPDYNDIR)) {
            $modifiedColumns[':p' . $index++]  = '`PopdynDir`';
        }
        if ($this->isColumnModified(WebusePeer::REPRODUCTIONDIR)) {
            $modifiedColumns[':p' . $index++]  = '`ReproductionDir`';
        }
        if ($this->isColumnModified(WebusePeer::TROPHICDIR)) {
            $modifiedColumns[':p' . $index++]  = '`TrophicDir`';
        }
        if ($this->isColumnModified(WebusePeer::COUNTRYDIR)) {
            $modifiedColumns[':p' . $index++]  = '`CountryDir`';
        }
        if ($this->isColumnModified(WebusePeer::ESCHMEYERDIR)) {
            $modifiedColumns[':p' . $index++]  = '`EschmeyerDir`';
        }
        if ($this->isColumnModified(WebusePeer::FBBOOKDIR)) {
            $modifiedColumns[':p' . $index++]  = '`FBBookDir`';
        }
        if ($this->isColumnModified(WebusePeer::FISHQUIZDIR)) {
            $modifiedColumns[':p' . $index++]  = '`FishQuizDir`';
        }
        if ($this->isColumnModified(WebusePeer::MUSEUMDIR)) {
            $modifiedColumns[':p' . $index++]  = '`MuseumDir`';
        }
        if ($this->isColumnModified(WebusePeer::GLOSSARYDIR)) {
            $modifiedColumns[':p' . $index++]  = '`GlossaryDir`';
        }
        if ($this->isColumnModified(WebusePeer::MAPDIR)) {
            $modifiedColumns[':p' . $index++]  = '`MapDir`';
        }
        if ($this->isColumnModified(WebusePeer::IDENTIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`Identification`';
        }
        if ($this->isColumnModified(WebusePeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(WebusePeer::LARVALBASEDIR)) {
            $modifiedColumns[':p' . $index++]  = '`LarvalBaseDir`';
        }
        if ($this->isColumnModified(WebusePeer::DISEASEDIR)) {
            $modifiedColumns[':p' . $index++]  = '`DiseaseDir`';
        }
        if ($this->isColumnModified(WebusePeer::TOOLSDIR)) {
            $modifiedColumns[':p' . $index++]  = '`ToolsDir`';
        }
        if ($this->isColumnModified(WebusePeer::IDENTIFICATIONDIR)) {
            $modifiedColumns[':p' . $index++]  = '`IdentificationDir`';
        }
        if ($this->isColumnModified(WebusePeer::KEYSDIR)) {
            $modifiedColumns[':p' . $index++]  = '`KeysDir`';
        }
        if ($this->isColumnModified(WebusePeer::FIELDGUIDESDIR)) {
            $modifiedColumns[':p' . $index++]  = '`FieldGuidesDir`';
        }
        if ($this->isColumnModified(WebusePeer::FISHONLINEDIR)) {
            $modifiedColumns[':p' . $index++]  = '`FishOnLineDir`';
        }
        if ($this->isColumnModified(WebusePeer::DOWNLOADDIR)) {
            $modifiedColumns[':p' . $index++]  = '`DownloadDir`';
        }
        if ($this->isColumnModified(WebusePeer::ECOLOGYDIR)) {
            $modifiedColumns[':p' . $index++]  = '`EcologyDir`';
        }
        if ($this->isColumnModified(WebusePeer::PHYSIOLOGYDIR)) {
            $modifiedColumns[':p' . $index++]  = '`PhysiologyDir`';
        }
        if ($this->isColumnModified(WebusePeer::GENETICSDIR)) {
            $modifiedColumns[':p' . $index++]  = '`GeneticsDir`';
        }
        if ($this->isColumnModified(WebusePeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `webuse` (%s) VALUES (%s)',
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
                    case '`period`':
                        $stmt->bindValue($identifier, $this->period, PDO::PARAM_STR);
                        break;
                    case '`Year`':
                        $stmt->bindValue($identifier, $this->year, PDO::PARAM_INT);
                        break;
                    case '`Month`':
                        $stmt->bindValue($identifier, $this->month, PDO::PARAM_INT);
                        break;
                    case '`Hits`':
                        $stmt->bindValue($identifier, $this->hits, PDO::PARAM_INT);
                        break;
                    case '`HitsNotViewed`':
                        $stmt->bindValue($identifier, $this->hitsnotviewed, PDO::PARAM_INT);
                        break;
                    case '`Sessions`':
                        $stmt->bindValue($identifier, $this->sessions, PDO::PARAM_INT);
                        break;
                    case '`UniqueUsers`':
                        $stmt->bindValue($identifier, $this->uniqueusers, PDO::PARAM_INT);
                        break;
                    case '`VisitsVisitors`':
                        $stmt->bindValue($identifier, $this->visitsvisitors, PDO::PARAM_STR);
                        break;
                    case '`Pages`':
                        $stmt->bindValue($identifier, $this->pages, PDO::PARAM_INT);
                        break;
                    case '`PagesVisit`':
                        $stmt->bindValue($identifier, $this->pagesvisit, PDO::PARAM_STR);
                        break;
                    case '`ReturnUsers`':
                        $stmt->bindValue($identifier, $this->returnusers, PDO::PARAM_INT);
                        break;
                    case '`PowerUsers`':
                        $stmt->bindValue($identifier, $this->powerusers, PDO::PARAM_INT);
                        break;
                    case '`BookMarkSessions`':
                        $stmt->bindValue($identifier, $this->bookmarksessions, PDO::PARAM_INT);
                        break;
                    case '`BookMark`':
                        $stmt->bindValue($identifier, $this->bookmark, PDO::PARAM_STR);
                        break;
                    case '`Duration`':
                        $stmt->bindValue($identifier, $this->duration, PDO::PARAM_STR);
                        break;
                    case '`Bandwidth_old`':
                        $stmt->bindValue($identifier, $this->bandwidth_old, PDO::PARAM_STR);
                        break;
                    case '`Bandwidth`':
                        $stmt->bindValue($identifier, $this->bandwidth, PDO::PARAM_STR);
                        break;
                    case '`BWNotViewed`':
                        $stmt->bindValue($identifier, $this->bwnotviewed, PDO::PARAM_STR);
                        break;
                    case '`USA`':
                        $stmt->bindValue($identifier, $this->usa, PDO::PARAM_INT);
                        break;
                    case '`International`':
                        $stmt->bindValue($identifier, $this->international, PDO::PARAM_INT);
                        break;
                    case '`Unknown`':
                        $stmt->bindValue($identifier, $this->unknown, PDO::PARAM_INT);
                        break;
                    case '`Countries`':
                        $stmt->bindValue($identifier, $this->countries, PDO::PARAM_INT);
                        break;
                    case '`DevCountries`':
                        $stmt->bindValue($identifier, $this->devcountries, PDO::PARAM_INT);
                        break;
                    case '`DevCountSess`':
                        $stmt->bindValue($identifier, $this->devcountsess, PDO::PARAM_INT);
                        break;
                    case '`ACPCountries`':
                        $stmt->bindValue($identifier, $this->acpcountries, PDO::PARAM_INT);
                        break;
                    case '`ACPCountSess`':
                        $stmt->bindValue($identifier, $this->acpcountsess, PDO::PARAM_INT);
                        break;
                    case '`OtherOS`':
                        $stmt->bindValue($identifier, $this->otheros, PDO::PARAM_INT);
                        break;
                    case '`TopDay`':
                        $stmt->bindValue($identifier, $this->topday, PDO::PARAM_INT);
                        break;
                    case '`TopDayDate`':
                        $stmt->bindValue($identifier, $this->topdaydate, PDO::PARAM_STR);
                        break;
                    case '`Downloads`':
                        $stmt->bindValue($identifier, $this->downloads, PDO::PARAM_INT);
                        break;
                    case '`SummaryDir`':
                        $stmt->bindValue($identifier, $this->summarydir, PDO::PARAM_STR);
                        break;
                    case '`NomenclatureDir`':
                        $stmt->bindValue($identifier, $this->nomenclaturedir, PDO::PARAM_STR);
                        break;
                    case '`ComNamesDir`':
                        $stmt->bindValue($identifier, $this->comnamesdir, PDO::PARAM_STR);
                        break;
                    case '`ReferencesDir`':
                        $stmt->bindValue($identifier, $this->referencesdir, PDO::PARAM_STR);
                        break;
                    case '`PhotosDir`':
                        $stmt->bindValue($identifier, $this->photosdir, PDO::PARAM_STR);
                        break;
                    case '`ForumDir`':
                        $stmt->bindValue($identifier, $this->forumdir, PDO::PARAM_STR);
                        break;
                    case '`TourDir`':
                        $stmt->bindValue($identifier, $this->tourdir, PDO::PARAM_STR);
                        break;
                    case '`ChatDir`':
                        $stmt->bindValue($identifier, $this->chatdir, PDO::PARAM_STR);
                        break;
                    case '`PopdynDir`':
                        $stmt->bindValue($identifier, $this->popdyndir, PDO::PARAM_STR);
                        break;
                    case '`ReproductionDir`':
                        $stmt->bindValue($identifier, $this->reproductiondir, PDO::PARAM_STR);
                        break;
                    case '`TrophicDir`':
                        $stmt->bindValue($identifier, $this->trophicdir, PDO::PARAM_STR);
                        break;
                    case '`CountryDir`':
                        $stmt->bindValue($identifier, $this->countrydir, PDO::PARAM_STR);
                        break;
                    case '`EschmeyerDir`':
                        $stmt->bindValue($identifier, $this->eschmeyerdir, PDO::PARAM_STR);
                        break;
                    case '`FBBookDir`':
                        $stmt->bindValue($identifier, $this->fbbookdir, PDO::PARAM_STR);
                        break;
                    case '`FishQuizDir`':
                        $stmt->bindValue($identifier, $this->fishquizdir, PDO::PARAM_STR);
                        break;
                    case '`MuseumDir`':
                        $stmt->bindValue($identifier, $this->museumdir, PDO::PARAM_STR);
                        break;
                    case '`GlossaryDir`':
                        $stmt->bindValue($identifier, $this->glossarydir, PDO::PARAM_STR);
                        break;
                    case '`MapDir`':
                        $stmt->bindValue($identifier, $this->mapdir, PDO::PARAM_STR);
                        break;
                    case '`Identification`':
                        $stmt->bindValue($identifier, $this->identification, PDO::PARAM_STR);
                        break;
                    case '`DateEntered`':
                        $stmt->bindValue($identifier, $this->dateentered, PDO::PARAM_STR);
                        break;
                    case '`LarvalBaseDir`':
                        $stmt->bindValue($identifier, $this->larvalbasedir, PDO::PARAM_STR);
                        break;
                    case '`DiseaseDir`':
                        $stmt->bindValue($identifier, $this->diseasedir, PDO::PARAM_STR);
                        break;
                    case '`ToolsDir`':
                        $stmt->bindValue($identifier, $this->toolsdir, PDO::PARAM_STR);
                        break;
                    case '`IdentificationDir`':
                        $stmt->bindValue($identifier, $this->identificationdir, PDO::PARAM_STR);
                        break;
                    case '`KeysDir`':
                        $stmt->bindValue($identifier, $this->keysdir, PDO::PARAM_STR);
                        break;
                    case '`FieldGuidesDir`':
                        $stmt->bindValue($identifier, $this->fieldguidesdir, PDO::PARAM_STR);
                        break;
                    case '`FishOnLineDir`':
                        $stmt->bindValue($identifier, $this->fishonlinedir, PDO::PARAM_STR);
                        break;
                    case '`DownloadDir`':
                        $stmt->bindValue($identifier, $this->downloaddir, PDO::PARAM_STR);
                        break;
                    case '`EcologyDir`':
                        $stmt->bindValue($identifier, $this->ecologydir, PDO::PARAM_STR);
                        break;
                    case '`PhysiologyDir`':
                        $stmt->bindValue($identifier, $this->physiologydir, PDO::PARAM_STR);
                        break;
                    case '`GeneticsDir`':
                        $stmt->bindValue($identifier, $this->geneticsdir, PDO::PARAM_STR);
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


            if (($retval = WebusePeer::doValidate($this, $columns)) !== true) {
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
        $pos = WebusePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getPeriod();
                break;
            case 2:
                return $this->getYear();
                break;
            case 3:
                return $this->getMonth();
                break;
            case 4:
                return $this->getHits();
                break;
            case 5:
                return $this->getHitsnotviewed();
                break;
            case 6:
                return $this->getSessions();
                break;
            case 7:
                return $this->getUniqueusers();
                break;
            case 8:
                return $this->getVisitsvisitors();
                break;
            case 9:
                return $this->getPages();
                break;
            case 10:
                return $this->getPagesvisit();
                break;
            case 11:
                return $this->getReturnusers();
                break;
            case 12:
                return $this->getPowerusers();
                break;
            case 13:
                return $this->getBookmarksessions();
                break;
            case 14:
                return $this->getBookmark();
                break;
            case 15:
                return $this->getDuration();
                break;
            case 16:
                return $this->getBandwidthOld();
                break;
            case 17:
                return $this->getBandwidth();
                break;
            case 18:
                return $this->getBwnotviewed();
                break;
            case 19:
                return $this->getUsa();
                break;
            case 20:
                return $this->getInternational();
                break;
            case 21:
                return $this->getUnknown();
                break;
            case 22:
                return $this->getCountries();
                break;
            case 23:
                return $this->getDevcountries();
                break;
            case 24:
                return $this->getDevcountsess();
                break;
            case 25:
                return $this->getAcpcountries();
                break;
            case 26:
                return $this->getAcpcountsess();
                break;
            case 27:
                return $this->getOtheros();
                break;
            case 28:
                return $this->getTopday();
                break;
            case 29:
                return $this->getTopdaydate();
                break;
            case 30:
                return $this->getDownloads();
                break;
            case 31:
                return $this->getSummarydir();
                break;
            case 32:
                return $this->getNomenclaturedir();
                break;
            case 33:
                return $this->getComnamesdir();
                break;
            case 34:
                return $this->getReferencesdir();
                break;
            case 35:
                return $this->getPhotosdir();
                break;
            case 36:
                return $this->getForumdir();
                break;
            case 37:
                return $this->getTourdir();
                break;
            case 38:
                return $this->getChatdir();
                break;
            case 39:
                return $this->getPopdyndir();
                break;
            case 40:
                return $this->getReproductiondir();
                break;
            case 41:
                return $this->getTrophicdir();
                break;
            case 42:
                return $this->getCountrydir();
                break;
            case 43:
                return $this->getEschmeyerdir();
                break;
            case 44:
                return $this->getFbbookdir();
                break;
            case 45:
                return $this->getFishquizdir();
                break;
            case 46:
                return $this->getMuseumdir();
                break;
            case 47:
                return $this->getGlossarydir();
                break;
            case 48:
                return $this->getMapdir();
                break;
            case 49:
                return $this->getIdentification();
                break;
            case 50:
                return $this->getDateentered();
                break;
            case 51:
                return $this->getLarvalbasedir();
                break;
            case 52:
                return $this->getDiseasedir();
                break;
            case 53:
                return $this->getToolsdir();
                break;
            case 54:
                return $this->getIdentificationdir();
                break;
            case 55:
                return $this->getKeysdir();
                break;
            case 56:
                return $this->getFieldguidesdir();
                break;
            case 57:
                return $this->getFishonlinedir();
                break;
            case 58:
                return $this->getDownloaddir();
                break;
            case 59:
                return $this->getEcologydir();
                break;
            case 60:
                return $this->getPhysiologydir();
                break;
            case 61:
                return $this->getGeneticsdir();
                break;
            case 62:
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
        if (isset($alreadyDumpedObjects['Webuse'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Webuse'][$this->getPrimaryKey()] = true;
        $keys = WebusePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getPeriod(),
            $keys[2] => $this->getYear(),
            $keys[3] => $this->getMonth(),
            $keys[4] => $this->getHits(),
            $keys[5] => $this->getHitsnotviewed(),
            $keys[6] => $this->getSessions(),
            $keys[7] => $this->getUniqueusers(),
            $keys[8] => $this->getVisitsvisitors(),
            $keys[9] => $this->getPages(),
            $keys[10] => $this->getPagesvisit(),
            $keys[11] => $this->getReturnusers(),
            $keys[12] => $this->getPowerusers(),
            $keys[13] => $this->getBookmarksessions(),
            $keys[14] => $this->getBookmark(),
            $keys[15] => $this->getDuration(),
            $keys[16] => $this->getBandwidthOld(),
            $keys[17] => $this->getBandwidth(),
            $keys[18] => $this->getBwnotviewed(),
            $keys[19] => $this->getUsa(),
            $keys[20] => $this->getInternational(),
            $keys[21] => $this->getUnknown(),
            $keys[22] => $this->getCountries(),
            $keys[23] => $this->getDevcountries(),
            $keys[24] => $this->getDevcountsess(),
            $keys[25] => $this->getAcpcountries(),
            $keys[26] => $this->getAcpcountsess(),
            $keys[27] => $this->getOtheros(),
            $keys[28] => $this->getTopday(),
            $keys[29] => $this->getTopdaydate(),
            $keys[30] => $this->getDownloads(),
            $keys[31] => $this->getSummarydir(),
            $keys[32] => $this->getNomenclaturedir(),
            $keys[33] => $this->getComnamesdir(),
            $keys[34] => $this->getReferencesdir(),
            $keys[35] => $this->getPhotosdir(),
            $keys[36] => $this->getForumdir(),
            $keys[37] => $this->getTourdir(),
            $keys[38] => $this->getChatdir(),
            $keys[39] => $this->getPopdyndir(),
            $keys[40] => $this->getReproductiondir(),
            $keys[41] => $this->getTrophicdir(),
            $keys[42] => $this->getCountrydir(),
            $keys[43] => $this->getEschmeyerdir(),
            $keys[44] => $this->getFbbookdir(),
            $keys[45] => $this->getFishquizdir(),
            $keys[46] => $this->getMuseumdir(),
            $keys[47] => $this->getGlossarydir(),
            $keys[48] => $this->getMapdir(),
            $keys[49] => $this->getIdentification(),
            $keys[50] => $this->getDateentered(),
            $keys[51] => $this->getLarvalbasedir(),
            $keys[52] => $this->getDiseasedir(),
            $keys[53] => $this->getToolsdir(),
            $keys[54] => $this->getIdentificationdir(),
            $keys[55] => $this->getKeysdir(),
            $keys[56] => $this->getFieldguidesdir(),
            $keys[57] => $this->getFishonlinedir(),
            $keys[58] => $this->getDownloaddir(),
            $keys[59] => $this->getEcologydir(),
            $keys[60] => $this->getPhysiologydir(),
            $keys[61] => $this->getGeneticsdir(),
            $keys[62] => $this->getTs(),
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
        $pos = WebusePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setPeriod($value);
                break;
            case 2:
                $this->setYear($value);
                break;
            case 3:
                $this->setMonth($value);
                break;
            case 4:
                $this->setHits($value);
                break;
            case 5:
                $this->setHitsnotviewed($value);
                break;
            case 6:
                $this->setSessions($value);
                break;
            case 7:
                $this->setUniqueusers($value);
                break;
            case 8:
                $this->setVisitsvisitors($value);
                break;
            case 9:
                $this->setPages($value);
                break;
            case 10:
                $this->setPagesvisit($value);
                break;
            case 11:
                $this->setReturnusers($value);
                break;
            case 12:
                $this->setPowerusers($value);
                break;
            case 13:
                $this->setBookmarksessions($value);
                break;
            case 14:
                $this->setBookmark($value);
                break;
            case 15:
                $this->setDuration($value);
                break;
            case 16:
                $this->setBandwidthOld($value);
                break;
            case 17:
                $this->setBandwidth($value);
                break;
            case 18:
                $this->setBwnotviewed($value);
                break;
            case 19:
                $this->setUsa($value);
                break;
            case 20:
                $this->setInternational($value);
                break;
            case 21:
                $this->setUnknown($value);
                break;
            case 22:
                $this->setCountries($value);
                break;
            case 23:
                $this->setDevcountries($value);
                break;
            case 24:
                $this->setDevcountsess($value);
                break;
            case 25:
                $this->setAcpcountries($value);
                break;
            case 26:
                $this->setAcpcountsess($value);
                break;
            case 27:
                $this->setOtheros($value);
                break;
            case 28:
                $this->setTopday($value);
                break;
            case 29:
                $this->setTopdaydate($value);
                break;
            case 30:
                $this->setDownloads($value);
                break;
            case 31:
                $this->setSummarydir($value);
                break;
            case 32:
                $this->setNomenclaturedir($value);
                break;
            case 33:
                $this->setComnamesdir($value);
                break;
            case 34:
                $this->setReferencesdir($value);
                break;
            case 35:
                $this->setPhotosdir($value);
                break;
            case 36:
                $this->setForumdir($value);
                break;
            case 37:
                $this->setTourdir($value);
                break;
            case 38:
                $this->setChatdir($value);
                break;
            case 39:
                $this->setPopdyndir($value);
                break;
            case 40:
                $this->setReproductiondir($value);
                break;
            case 41:
                $this->setTrophicdir($value);
                break;
            case 42:
                $this->setCountrydir($value);
                break;
            case 43:
                $this->setEschmeyerdir($value);
                break;
            case 44:
                $this->setFbbookdir($value);
                break;
            case 45:
                $this->setFishquizdir($value);
                break;
            case 46:
                $this->setMuseumdir($value);
                break;
            case 47:
                $this->setGlossarydir($value);
                break;
            case 48:
                $this->setMapdir($value);
                break;
            case 49:
                $this->setIdentification($value);
                break;
            case 50:
                $this->setDateentered($value);
                break;
            case 51:
                $this->setLarvalbasedir($value);
                break;
            case 52:
                $this->setDiseasedir($value);
                break;
            case 53:
                $this->setToolsdir($value);
                break;
            case 54:
                $this->setIdentificationdir($value);
                break;
            case 55:
                $this->setKeysdir($value);
                break;
            case 56:
                $this->setFieldguidesdir($value);
                break;
            case 57:
                $this->setFishonlinedir($value);
                break;
            case 58:
                $this->setDownloaddir($value);
                break;
            case 59:
                $this->setEcologydir($value);
                break;
            case 60:
                $this->setPhysiologydir($value);
                break;
            case 61:
                $this->setGeneticsdir($value);
                break;
            case 62:
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
        $keys = WebusePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setPeriod($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setYear($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setMonth($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setHits($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setHitsnotviewed($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSessions($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setUniqueusers($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setVisitsvisitors($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPages($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPagesvisit($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setReturnusers($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setPowerusers($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setBookmarksessions($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setBookmark($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDuration($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setBandwidthOld($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setBandwidth($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setBwnotviewed($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setUsa($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setInternational($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setUnknown($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setCountries($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDevcountries($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setDevcountsess($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setAcpcountries($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setAcpcountsess($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setOtheros($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setTopday($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setTopdaydate($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setDownloads($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setSummarydir($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setNomenclaturedir($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setComnamesdir($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setReferencesdir($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setPhotosdir($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setForumdir($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setTourdir($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setChatdir($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setPopdyndir($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setReproductiondir($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setTrophicdir($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setCountrydir($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setEschmeyerdir($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setFbbookdir($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setFishquizdir($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setMuseumdir($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setGlossarydir($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setMapdir($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setIdentification($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setDateentered($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setLarvalbasedir($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setDiseasedir($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setToolsdir($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setIdentificationdir($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setKeysdir($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setFieldguidesdir($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setFishonlinedir($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setDownloaddir($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setEcologydir($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setPhysiologydir($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setGeneticsdir($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setTs($arr[$keys[62]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(WebusePeer::DATABASE_NAME);

        if ($this->isColumnModified(WebusePeer::AUTOCTR)) $criteria->add(WebusePeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(WebusePeer::PERIOD)) $criteria->add(WebusePeer::PERIOD, $this->period);
        if ($this->isColumnModified(WebusePeer::YEAR)) $criteria->add(WebusePeer::YEAR, $this->year);
        if ($this->isColumnModified(WebusePeer::MONTH)) $criteria->add(WebusePeer::MONTH, $this->month);
        if ($this->isColumnModified(WebusePeer::HITS)) $criteria->add(WebusePeer::HITS, $this->hits);
        if ($this->isColumnModified(WebusePeer::HITSNOTVIEWED)) $criteria->add(WebusePeer::HITSNOTVIEWED, $this->hitsnotviewed);
        if ($this->isColumnModified(WebusePeer::SESSIONS)) $criteria->add(WebusePeer::SESSIONS, $this->sessions);
        if ($this->isColumnModified(WebusePeer::UNIQUEUSERS)) $criteria->add(WebusePeer::UNIQUEUSERS, $this->uniqueusers);
        if ($this->isColumnModified(WebusePeer::VISITSVISITORS)) $criteria->add(WebusePeer::VISITSVISITORS, $this->visitsvisitors);
        if ($this->isColumnModified(WebusePeer::PAGES)) $criteria->add(WebusePeer::PAGES, $this->pages);
        if ($this->isColumnModified(WebusePeer::PAGESVISIT)) $criteria->add(WebusePeer::PAGESVISIT, $this->pagesvisit);
        if ($this->isColumnModified(WebusePeer::RETURNUSERS)) $criteria->add(WebusePeer::RETURNUSERS, $this->returnusers);
        if ($this->isColumnModified(WebusePeer::POWERUSERS)) $criteria->add(WebusePeer::POWERUSERS, $this->powerusers);
        if ($this->isColumnModified(WebusePeer::BOOKMARKSESSIONS)) $criteria->add(WebusePeer::BOOKMARKSESSIONS, $this->bookmarksessions);
        if ($this->isColumnModified(WebusePeer::BOOKMARK)) $criteria->add(WebusePeer::BOOKMARK, $this->bookmark);
        if ($this->isColumnModified(WebusePeer::DURATION)) $criteria->add(WebusePeer::DURATION, $this->duration);
        if ($this->isColumnModified(WebusePeer::BANDWIDTH_OLD)) $criteria->add(WebusePeer::BANDWIDTH_OLD, $this->bandwidth_old);
        if ($this->isColumnModified(WebusePeer::BANDWIDTH)) $criteria->add(WebusePeer::BANDWIDTH, $this->bandwidth);
        if ($this->isColumnModified(WebusePeer::BWNOTVIEWED)) $criteria->add(WebusePeer::BWNOTVIEWED, $this->bwnotviewed);
        if ($this->isColumnModified(WebusePeer::USA)) $criteria->add(WebusePeer::USA, $this->usa);
        if ($this->isColumnModified(WebusePeer::INTERNATIONAL)) $criteria->add(WebusePeer::INTERNATIONAL, $this->international);
        if ($this->isColumnModified(WebusePeer::UNKNOWN)) $criteria->add(WebusePeer::UNKNOWN, $this->unknown);
        if ($this->isColumnModified(WebusePeer::COUNTRIES)) $criteria->add(WebusePeer::COUNTRIES, $this->countries);
        if ($this->isColumnModified(WebusePeer::DEVCOUNTRIES)) $criteria->add(WebusePeer::DEVCOUNTRIES, $this->devcountries);
        if ($this->isColumnModified(WebusePeer::DEVCOUNTSESS)) $criteria->add(WebusePeer::DEVCOUNTSESS, $this->devcountsess);
        if ($this->isColumnModified(WebusePeer::ACPCOUNTRIES)) $criteria->add(WebusePeer::ACPCOUNTRIES, $this->acpcountries);
        if ($this->isColumnModified(WebusePeer::ACPCOUNTSESS)) $criteria->add(WebusePeer::ACPCOUNTSESS, $this->acpcountsess);
        if ($this->isColumnModified(WebusePeer::OTHEROS)) $criteria->add(WebusePeer::OTHEROS, $this->otheros);
        if ($this->isColumnModified(WebusePeer::TOPDAY)) $criteria->add(WebusePeer::TOPDAY, $this->topday);
        if ($this->isColumnModified(WebusePeer::TOPDAYDATE)) $criteria->add(WebusePeer::TOPDAYDATE, $this->topdaydate);
        if ($this->isColumnModified(WebusePeer::DOWNLOADS)) $criteria->add(WebusePeer::DOWNLOADS, $this->downloads);
        if ($this->isColumnModified(WebusePeer::SUMMARYDIR)) $criteria->add(WebusePeer::SUMMARYDIR, $this->summarydir);
        if ($this->isColumnModified(WebusePeer::NOMENCLATUREDIR)) $criteria->add(WebusePeer::NOMENCLATUREDIR, $this->nomenclaturedir);
        if ($this->isColumnModified(WebusePeer::COMNAMESDIR)) $criteria->add(WebusePeer::COMNAMESDIR, $this->comnamesdir);
        if ($this->isColumnModified(WebusePeer::REFERENCESDIR)) $criteria->add(WebusePeer::REFERENCESDIR, $this->referencesdir);
        if ($this->isColumnModified(WebusePeer::PHOTOSDIR)) $criteria->add(WebusePeer::PHOTOSDIR, $this->photosdir);
        if ($this->isColumnModified(WebusePeer::FORUMDIR)) $criteria->add(WebusePeer::FORUMDIR, $this->forumdir);
        if ($this->isColumnModified(WebusePeer::TOURDIR)) $criteria->add(WebusePeer::TOURDIR, $this->tourdir);
        if ($this->isColumnModified(WebusePeer::CHATDIR)) $criteria->add(WebusePeer::CHATDIR, $this->chatdir);
        if ($this->isColumnModified(WebusePeer::POPDYNDIR)) $criteria->add(WebusePeer::POPDYNDIR, $this->popdyndir);
        if ($this->isColumnModified(WebusePeer::REPRODUCTIONDIR)) $criteria->add(WebusePeer::REPRODUCTIONDIR, $this->reproductiondir);
        if ($this->isColumnModified(WebusePeer::TROPHICDIR)) $criteria->add(WebusePeer::TROPHICDIR, $this->trophicdir);
        if ($this->isColumnModified(WebusePeer::COUNTRYDIR)) $criteria->add(WebusePeer::COUNTRYDIR, $this->countrydir);
        if ($this->isColumnModified(WebusePeer::ESCHMEYERDIR)) $criteria->add(WebusePeer::ESCHMEYERDIR, $this->eschmeyerdir);
        if ($this->isColumnModified(WebusePeer::FBBOOKDIR)) $criteria->add(WebusePeer::FBBOOKDIR, $this->fbbookdir);
        if ($this->isColumnModified(WebusePeer::FISHQUIZDIR)) $criteria->add(WebusePeer::FISHQUIZDIR, $this->fishquizdir);
        if ($this->isColumnModified(WebusePeer::MUSEUMDIR)) $criteria->add(WebusePeer::MUSEUMDIR, $this->museumdir);
        if ($this->isColumnModified(WebusePeer::GLOSSARYDIR)) $criteria->add(WebusePeer::GLOSSARYDIR, $this->glossarydir);
        if ($this->isColumnModified(WebusePeer::MAPDIR)) $criteria->add(WebusePeer::MAPDIR, $this->mapdir);
        if ($this->isColumnModified(WebusePeer::IDENTIFICATION)) $criteria->add(WebusePeer::IDENTIFICATION, $this->identification);
        if ($this->isColumnModified(WebusePeer::DATEENTERED)) $criteria->add(WebusePeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(WebusePeer::LARVALBASEDIR)) $criteria->add(WebusePeer::LARVALBASEDIR, $this->larvalbasedir);
        if ($this->isColumnModified(WebusePeer::DISEASEDIR)) $criteria->add(WebusePeer::DISEASEDIR, $this->diseasedir);
        if ($this->isColumnModified(WebusePeer::TOOLSDIR)) $criteria->add(WebusePeer::TOOLSDIR, $this->toolsdir);
        if ($this->isColumnModified(WebusePeer::IDENTIFICATIONDIR)) $criteria->add(WebusePeer::IDENTIFICATIONDIR, $this->identificationdir);
        if ($this->isColumnModified(WebusePeer::KEYSDIR)) $criteria->add(WebusePeer::KEYSDIR, $this->keysdir);
        if ($this->isColumnModified(WebusePeer::FIELDGUIDESDIR)) $criteria->add(WebusePeer::FIELDGUIDESDIR, $this->fieldguidesdir);
        if ($this->isColumnModified(WebusePeer::FISHONLINEDIR)) $criteria->add(WebusePeer::FISHONLINEDIR, $this->fishonlinedir);
        if ($this->isColumnModified(WebusePeer::DOWNLOADDIR)) $criteria->add(WebusePeer::DOWNLOADDIR, $this->downloaddir);
        if ($this->isColumnModified(WebusePeer::ECOLOGYDIR)) $criteria->add(WebusePeer::ECOLOGYDIR, $this->ecologydir);
        if ($this->isColumnModified(WebusePeer::PHYSIOLOGYDIR)) $criteria->add(WebusePeer::PHYSIOLOGYDIR, $this->physiologydir);
        if ($this->isColumnModified(WebusePeer::GENETICSDIR)) $criteria->add(WebusePeer::GENETICSDIR, $this->geneticsdir);
        if ($this->isColumnModified(WebusePeer::TS)) $criteria->add(WebusePeer::TS, $this->ts);

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
        $criteria = new Criteria(WebusePeer::DATABASE_NAME);
        $criteria->add(WebusePeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of Webuse (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPeriod($this->getPeriod());
        $copyObj->setYear($this->getYear());
        $copyObj->setMonth($this->getMonth());
        $copyObj->setHits($this->getHits());
        $copyObj->setHitsnotviewed($this->getHitsnotviewed());
        $copyObj->setSessions($this->getSessions());
        $copyObj->setUniqueusers($this->getUniqueusers());
        $copyObj->setVisitsvisitors($this->getVisitsvisitors());
        $copyObj->setPages($this->getPages());
        $copyObj->setPagesvisit($this->getPagesvisit());
        $copyObj->setReturnusers($this->getReturnusers());
        $copyObj->setPowerusers($this->getPowerusers());
        $copyObj->setBookmarksessions($this->getBookmarksessions());
        $copyObj->setBookmark($this->getBookmark());
        $copyObj->setDuration($this->getDuration());
        $copyObj->setBandwidthOld($this->getBandwidthOld());
        $copyObj->setBandwidth($this->getBandwidth());
        $copyObj->setBwnotviewed($this->getBwnotviewed());
        $copyObj->setUsa($this->getUsa());
        $copyObj->setInternational($this->getInternational());
        $copyObj->setUnknown($this->getUnknown());
        $copyObj->setCountries($this->getCountries());
        $copyObj->setDevcountries($this->getDevcountries());
        $copyObj->setDevcountsess($this->getDevcountsess());
        $copyObj->setAcpcountries($this->getAcpcountries());
        $copyObj->setAcpcountsess($this->getAcpcountsess());
        $copyObj->setOtheros($this->getOtheros());
        $copyObj->setTopday($this->getTopday());
        $copyObj->setTopdaydate($this->getTopdaydate());
        $copyObj->setDownloads($this->getDownloads());
        $copyObj->setSummarydir($this->getSummarydir());
        $copyObj->setNomenclaturedir($this->getNomenclaturedir());
        $copyObj->setComnamesdir($this->getComnamesdir());
        $copyObj->setReferencesdir($this->getReferencesdir());
        $copyObj->setPhotosdir($this->getPhotosdir());
        $copyObj->setForumdir($this->getForumdir());
        $copyObj->setTourdir($this->getTourdir());
        $copyObj->setChatdir($this->getChatdir());
        $copyObj->setPopdyndir($this->getPopdyndir());
        $copyObj->setReproductiondir($this->getReproductiondir());
        $copyObj->setTrophicdir($this->getTrophicdir());
        $copyObj->setCountrydir($this->getCountrydir());
        $copyObj->setEschmeyerdir($this->getEschmeyerdir());
        $copyObj->setFbbookdir($this->getFbbookdir());
        $copyObj->setFishquizdir($this->getFishquizdir());
        $copyObj->setMuseumdir($this->getMuseumdir());
        $copyObj->setGlossarydir($this->getGlossarydir());
        $copyObj->setMapdir($this->getMapdir());
        $copyObj->setIdentification($this->getIdentification());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setLarvalbasedir($this->getLarvalbasedir());
        $copyObj->setDiseasedir($this->getDiseasedir());
        $copyObj->setToolsdir($this->getToolsdir());
        $copyObj->setIdentificationdir($this->getIdentificationdir());
        $copyObj->setKeysdir($this->getKeysdir());
        $copyObj->setFieldguidesdir($this->getFieldguidesdir());
        $copyObj->setFishonlinedir($this->getFishonlinedir());
        $copyObj->setDownloaddir($this->getDownloaddir());
        $copyObj->setEcologydir($this->getEcologydir());
        $copyObj->setPhysiologydir($this->getPhysiologydir());
        $copyObj->setGeneticsdir($this->getGeneticsdir());
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
     * @return Webuse Clone of current object.
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
     * @return WebusePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new WebusePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->period = null;
        $this->year = null;
        $this->month = null;
        $this->hits = null;
        $this->hitsnotviewed = null;
        $this->sessions = null;
        $this->uniqueusers = null;
        $this->visitsvisitors = null;
        $this->pages = null;
        $this->pagesvisit = null;
        $this->returnusers = null;
        $this->powerusers = null;
        $this->bookmarksessions = null;
        $this->bookmark = null;
        $this->duration = null;
        $this->bandwidth_old = null;
        $this->bandwidth = null;
        $this->bwnotviewed = null;
        $this->usa = null;
        $this->international = null;
        $this->unknown = null;
        $this->countries = null;
        $this->devcountries = null;
        $this->devcountsess = null;
        $this->acpcountries = null;
        $this->acpcountsess = null;
        $this->otheros = null;
        $this->topday = null;
        $this->topdaydate = null;
        $this->downloads = null;
        $this->summarydir = null;
        $this->nomenclaturedir = null;
        $this->comnamesdir = null;
        $this->referencesdir = null;
        $this->photosdir = null;
        $this->forumdir = null;
        $this->tourdir = null;
        $this->chatdir = null;
        $this->popdyndir = null;
        $this->reproductiondir = null;
        $this->trophicdir = null;
        $this->countrydir = null;
        $this->eschmeyerdir = null;
        $this->fbbookdir = null;
        $this->fishquizdir = null;
        $this->museumdir = null;
        $this->glossarydir = null;
        $this->mapdir = null;
        $this->identification = null;
        $this->dateentered = null;
        $this->larvalbasedir = null;
        $this->diseasedir = null;
        $this->toolsdir = null;
        $this->identificationdir = null;
        $this->keysdir = null;
        $this->fieldguidesdir = null;
        $this->fishonlinedir = null;
        $this->downloaddir = null;
        $this->ecologydir = null;
        $this->physiologydir = null;
        $this->geneticsdir = null;
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
        return (string) $this->exportTo(WebusePeer::DEFAULT_STRING_FORMAT);
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
