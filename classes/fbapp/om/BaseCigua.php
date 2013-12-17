<?php


/**
 * Base class that represents a row from the 'cigua' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCigua extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CiguaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CiguaPeer
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
     * The value for the record_no field.
     * @var        double
     */
    protected $record_no;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the country field.
     * @var        string
     */
    protected $country;

    /**
     * The value for the location field.
     * @var        string
     */
    protected $location;

    /**
     * The value for the latitudedeg field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $latitudedeg;

    /**
     * The value for the latitudemin field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $latitudemin;

    /**
     * The value for the northsouth field.
     * @var        string
     */
    protected $northsouth;

    /**
     * The value for the longitudedeg field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $longitudedeg;

    /**
     * The value for the longitudemin field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $longitudemin;

    /**
     * The value for the eastwest field.
     * @var        string
     */
    protected $eastwest;

    /**
     * The value for the daterec field.
     * @var        string
     */
    protected $daterec;

    /**
     * The value for the fish_y_n field.
     * @var        int
     */
    protected $fish_y_n;

    /**
     * The value for the crab field.
     * @var        int
     */
    protected $crab;

    /**
     * The value for the lobst field.
     * @var        int
     */
    protected $lobst;

    /**
     * The value for the othcrust field.
     * @var        int
     */
    protected $othcrust;

    /**
     * The value for the gastr field.
     * @var        int
     */
    protected $gastr;

    /**
     * The value for the bivalve field.
     * @var        int
     */
    protected $bivalve;

    /**
     * The value for the other_moll field.
     * @var        int
     */
    protected $other_moll;

    /**
     * The value for the beach field.
     * @var        int
     */
    protected $beach;

    /**
     * The value for the reef_patch field.
     * @var        int
     */
    protected $reef_patch;

    /**
     * The value for the lagoon field.
     * @var        int
     */
    protected $lagoon;

    /**
     * The value for the river field.
     * @var        int
     */
    protected $river;

    /**
     * The value for the mangrove field.
     * @var        int
     */
    protected $mangrove;

    /**
     * The value for the outer_reef field.
     * @var        int
     */
    protected $outer_reef;

    /**
     * The value for the open_sea field.
     * @var        int
     */
    protected $open_sea;

    /**
     * The value for the freshnoice field.
     * @var        int
     */
    protected $freshnoice;

    /**
     * The value for the fresh_ce field.
     * @var        int
     */
    protected $fresh_ce;

    /**
     * The value for the frozen field.
     * @var        int
     */
    protected $frozen;

    /**
     * The value for the salted field.
     * @var        int
     */
    protected $salted;

    /**
     * The value for the dried field.
     * @var        int
     */
    protected $dried;

    /**
     * The value for the smoked field.
     * @var        int
     */
    protected $smoked;

    /**
     * The value for the pickled field.
     * @var        int
     */
    protected $pickled;

    /**
     * The value for the head field.
     * @var        int
     */
    protected $head;

    /**
     * The value for the flesh field.
     * @var        int
     */
    protected $flesh;

    /**
     * The value for the skin field.
     * @var        int
     */
    protected $skin;

    /**
     * The value for the liver field.
     * @var        int
     */
    protected $liver;

    /**
     * The value for the roe field.
     * @var        int
     */
    protected $roe;

    /**
     * The value for the other_orga field.
     * @var        int
     */
    protected $other_orga;

    /**
     * The value for the unprepared field.
     * @var        int
     */
    protected $unprepared;

    /**
     * The value for the marinated field.
     * @var        int
     */
    protected $marinated;

    /**
     * The value for the cooked field.
     * @var        int
     */
    protected $cooked;

    /**
     * The value for the ate_this_m field.
     * @var        double
     */
    protected $ate_this_m;

    /**
     * The value for the felt_sick field.
     * @var        double
     */
    protected $felt_sick;

    /**
     * The value for the were_admit field.
     * @var        double
     */
    protected $were_admit;

    /**
     * The value for the local_name field.
     * @var        string
     */
    protected $local_name;

    /**
     * The value for the english_na field.
     * @var        string
     */
    protected $english_na;

    /**
     * The value for the scientific field.
     * @var        string
     */
    protected $scientific;

    /**
     * The value for the vendor field.
     * @var        string
     */
    protected $vendor;

    /**
     * The value for the areacaught field.
     * @var        string
     */
    protected $areacaught;

    /**
     * The value for the date_eaten field.
     * @var        string
     */
    protected $date_eaten;

    /**
     * The value for the time_eaten field.
     * @var        string
     */
    protected $time_eaten;

    /**
     * The value for the date_sick field.
     * @var        string
     */
    protected $date_sick;

    /**
     * The value for the time_sick field.
     * @var        string
     */
    protected $time_sick;

    /**
     * The value for the burning_pa field.
     * @var        int
     */
    protected $burning_pa;

    /**
     * The value for the tingling_n field.
     * @var        int
     */
    protected $tingling_n;

    /**
     * The value for the urinate_di field.
     * @var        int
     */
    protected $urinate_di;

    /**
     * The value for the difficultw field.
     * @var        int
     */
    protected $difficultw;

    /**
     * The value for the difficultt field.
     * @var        int
     */
    protected $difficultt;

    /**
     * The value for the difficulty field.
     * @var        int
     */
    protected $difficulty;

    /**
     * The value for the eye_irrita field.
     * @var        int
     */
    protected $eye_irrita;

    /**
     * The value for the pin_pricki field.
     * @var        int
     */
    protected $pin_pricki;

    /**
     * The value for the strange_ta field.
     * @var        int
     */
    protected $strange_ta;

    /**
     * The value for the skin_itchi field.
     * @var        int
     */
    protected $skin_itchi;

    /**
     * The value for the excess_sal field.
     * @var        int
     */
    protected $excess_sal;

    /**
     * The value for the excess_swt field.
     * @var        int
     */
    protected $excess_swt;

    /**
     * The value for the diarrhoea field.
     * @var        int
     */
    protected $diarrhoea;

    /**
     * The value for the vomiting field.
     * @var        int
     */
    protected $vomiting;

    /**
     * The value for the fever_chil field.
     * @var        int
     */
    protected $fever_chil;

    /**
     * The value for the headache field.
     * @var        int
     */
    protected $headache;

    /**
     * The value for the joint_ache field.
     * @var        int
     */
    protected $joint_ache;

    /**
     * The value for the muscle_cra field.
     * @var        int
     */
    protected $muscle_cra;

    /**
     * The value for the pulse field.
     * @var        int
     */
    protected $pulse;

    /**
     * The value for the systolic field.
     * @var        int
     */
    protected $systolic;

    /**
     * The value for the diastolic field.
     * @var        double
     */
    protected $diastolic;

    /**
     * The value for the pupils field.
     * @var        double
     */
    protected $pupils;

    /**
     * The value for the death field.
     * @var        double
     */
    protected $death;

    /**
     * The value for the comments field.
     * @var        string
     */
    protected $comments;

    /**
     * The value for the famcode field.
     * @var        int
     */
    protected $famcode;

    /**
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the genus field.
     * @var        string
     */
    protected $genus;

    /**
     * The value for the species field.
     * @var        string
     */
    protected $species;

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
        $this->latitudedeg = 0;
        $this->latitudemin = 0;
        $this->longitudedeg = 0;
        $this->longitudemin = 0;
    }

    /**
     * Initializes internal state of BaseCigua object.
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
     * Get the [record_no] column value.
     *
     * @return double
     */
    public function getRecordNo()
    {

        return $this->record_no;
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
     * Get the [country] column value.
     *
     * @return string
     */
    public function getCountry()
    {

        return $this->country;
    }

    /**
     * Get the [location] column value.
     *
     * @return string
     */
    public function getLocation()
    {

        return $this->location;
    }

    /**
     * Get the [latitudedeg] column value.
     *
     * @return int
     */
    public function getLatitudedeg()
    {

        return $this->latitudedeg;
    }

    /**
     * Get the [latitudemin] column value.
     *
     * @return int
     */
    public function getLatitudemin()
    {

        return $this->latitudemin;
    }

    /**
     * Get the [northsouth] column value.
     *
     * @return string
     */
    public function getNorthsouth()
    {

        return $this->northsouth;
    }

    /**
     * Get the [longitudedeg] column value.
     *
     * @return int
     */
    public function getLongitudedeg()
    {

        return $this->longitudedeg;
    }

    /**
     * Get the [longitudemin] column value.
     *
     * @return int
     */
    public function getLongitudemin()
    {

        return $this->longitudemin;
    }

    /**
     * Get the [eastwest] column value.
     *
     * @return string
     */
    public function getEastwest()
    {

        return $this->eastwest;
    }

    /**
     * Get the [optionally formatted] temporal [daterec] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDaterec($format = 'Y-m-d H:i:s')
    {
        if ($this->daterec === null) {
            return null;
        }

        if ($this->daterec === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->daterec);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->daterec, true), $x);
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
     * Get the [fish_y_n] column value.
     *
     * @return int
     */
    public function getFishYN()
    {

        return $this->fish_y_n;
    }

    /**
     * Get the [crab] column value.
     *
     * @return int
     */
    public function getCrab()
    {

        return $this->crab;
    }

    /**
     * Get the [lobst] column value.
     *
     * @return int
     */
    public function getLobst()
    {

        return $this->lobst;
    }

    /**
     * Get the [othcrust] column value.
     *
     * @return int
     */
    public function getOthcrust()
    {

        return $this->othcrust;
    }

    /**
     * Get the [gastr] column value.
     *
     * @return int
     */
    public function getGastr()
    {

        return $this->gastr;
    }

    /**
     * Get the [bivalve] column value.
     *
     * @return int
     */
    public function getBivalve()
    {

        return $this->bivalve;
    }

    /**
     * Get the [other_moll] column value.
     *
     * @return int
     */
    public function getOtherMoll()
    {

        return $this->other_moll;
    }

    /**
     * Get the [beach] column value.
     *
     * @return int
     */
    public function getBeach()
    {

        return $this->beach;
    }

    /**
     * Get the [reef_patch] column value.
     *
     * @return int
     */
    public function getReefPatch()
    {

        return $this->reef_patch;
    }

    /**
     * Get the [lagoon] column value.
     *
     * @return int
     */
    public function getLagoon()
    {

        return $this->lagoon;
    }

    /**
     * Get the [river] column value.
     *
     * @return int
     */
    public function getRiver()
    {

        return $this->river;
    }

    /**
     * Get the [mangrove] column value.
     *
     * @return int
     */
    public function getMangrove()
    {

        return $this->mangrove;
    }

    /**
     * Get the [outer_reef] column value.
     *
     * @return int
     */
    public function getOuterReef()
    {

        return $this->outer_reef;
    }

    /**
     * Get the [open_sea] column value.
     *
     * @return int
     */
    public function getOpenSea()
    {

        return $this->open_sea;
    }

    /**
     * Get the [freshnoice] column value.
     *
     * @return int
     */
    public function getFreshnoice()
    {

        return $this->freshnoice;
    }

    /**
     * Get the [fresh_ce] column value.
     *
     * @return int
     */
    public function getFreshCe()
    {

        return $this->fresh_ce;
    }

    /**
     * Get the [frozen] column value.
     *
     * @return int
     */
    public function getFrozen()
    {

        return $this->frozen;
    }

    /**
     * Get the [salted] column value.
     *
     * @return int
     */
    public function getSalted()
    {

        return $this->salted;
    }

    /**
     * Get the [dried] column value.
     *
     * @return int
     */
    public function getDried()
    {

        return $this->dried;
    }

    /**
     * Get the [smoked] column value.
     *
     * @return int
     */
    public function getSmoked()
    {

        return $this->smoked;
    }

    /**
     * Get the [pickled] column value.
     *
     * @return int
     */
    public function getPickled()
    {

        return $this->pickled;
    }

    /**
     * Get the [head] column value.
     *
     * @return int
     */
    public function getHead()
    {

        return $this->head;
    }

    /**
     * Get the [flesh] column value.
     *
     * @return int
     */
    public function getFlesh()
    {

        return $this->flesh;
    }

    /**
     * Get the [skin] column value.
     *
     * @return int
     */
    public function getSkin()
    {

        return $this->skin;
    }

    /**
     * Get the [liver] column value.
     *
     * @return int
     */
    public function getLiver()
    {

        return $this->liver;
    }

    /**
     * Get the [roe] column value.
     *
     * @return int
     */
    public function getRoe()
    {

        return $this->roe;
    }

    /**
     * Get the [other_orga] column value.
     *
     * @return int
     */
    public function getOtherOrga()
    {

        return $this->other_orga;
    }

    /**
     * Get the [unprepared] column value.
     *
     * @return int
     */
    public function getUnprepared()
    {

        return $this->unprepared;
    }

    /**
     * Get the [marinated] column value.
     *
     * @return int
     */
    public function getMarinated()
    {

        return $this->marinated;
    }

    /**
     * Get the [cooked] column value.
     *
     * @return int
     */
    public function getCooked()
    {

        return $this->cooked;
    }

    /**
     * Get the [ate_this_m] column value.
     *
     * @return double
     */
    public function getAteThisM()
    {

        return $this->ate_this_m;
    }

    /**
     * Get the [felt_sick] column value.
     *
     * @return double
     */
    public function getFeltSick()
    {

        return $this->felt_sick;
    }

    /**
     * Get the [were_admit] column value.
     *
     * @return double
     */
    public function getWereAdmit()
    {

        return $this->were_admit;
    }

    /**
     * Get the [local_name] column value.
     *
     * @return string
     */
    public function getLocalName()
    {

        return $this->local_name;
    }

    /**
     * Get the [english_na] column value.
     *
     * @return string
     */
    public function getEnglishNa()
    {

        return $this->english_na;
    }

    /**
     * Get the [scientific] column value.
     *
     * @return string
     */
    public function getScientific()
    {

        return $this->scientific;
    }

    /**
     * Get the [vendor] column value.
     *
     * @return string
     */
    public function getVendor()
    {

        return $this->vendor;
    }

    /**
     * Get the [areacaught] column value.
     *
     * @return string
     */
    public function getAreacaught()
    {

        return $this->areacaught;
    }

    /**
     * Get the [optionally formatted] temporal [date_eaten] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateEaten($format = 'Y-m-d H:i:s')
    {
        if ($this->date_eaten === null) {
            return null;
        }

        if ($this->date_eaten === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_eaten);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_eaten, true), $x);
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
     * Get the [time_eaten] column value.
     *
     * @return string
     */
    public function getTimeEaten()
    {

        return $this->time_eaten;
    }

    /**
     * Get the [optionally formatted] temporal [date_sick] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateSick($format = 'Y-m-d H:i:s')
    {
        if ($this->date_sick === null) {
            return null;
        }

        if ($this->date_sick === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_sick);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_sick, true), $x);
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
     * Get the [time_sick] column value.
     *
     * @return string
     */
    public function getTimeSick()
    {

        return $this->time_sick;
    }

    /**
     * Get the [burning_pa] column value.
     *
     * @return int
     */
    public function getBurningPa()
    {

        return $this->burning_pa;
    }

    /**
     * Get the [tingling_n] column value.
     *
     * @return int
     */
    public function getTinglingN()
    {

        return $this->tingling_n;
    }

    /**
     * Get the [urinate_di] column value.
     *
     * @return int
     */
    public function getUrinateDi()
    {

        return $this->urinate_di;
    }

    /**
     * Get the [difficultw] column value.
     *
     * @return int
     */
    public function getDifficultw()
    {

        return $this->difficultw;
    }

    /**
     * Get the [difficultt] column value.
     *
     * @return int
     */
    public function getDifficultt()
    {

        return $this->difficultt;
    }

    /**
     * Get the [difficulty] column value.
     *
     * @return int
     */
    public function getDifficulty()
    {

        return $this->difficulty;
    }

    /**
     * Get the [eye_irrita] column value.
     *
     * @return int
     */
    public function getEyeIrrita()
    {

        return $this->eye_irrita;
    }

    /**
     * Get the [pin_pricki] column value.
     *
     * @return int
     */
    public function getPinPricki()
    {

        return $this->pin_pricki;
    }

    /**
     * Get the [strange_ta] column value.
     *
     * @return int
     */
    public function getStrangeTa()
    {

        return $this->strange_ta;
    }

    /**
     * Get the [skin_itchi] column value.
     *
     * @return int
     */
    public function getSkinItchi()
    {

        return $this->skin_itchi;
    }

    /**
     * Get the [excess_sal] column value.
     *
     * @return int
     */
    public function getExcessSal()
    {

        return $this->excess_sal;
    }

    /**
     * Get the [excess_swt] column value.
     *
     * @return int
     */
    public function getExcessSwt()
    {

        return $this->excess_swt;
    }

    /**
     * Get the [diarrhoea] column value.
     *
     * @return int
     */
    public function getDiarrhoea()
    {

        return $this->diarrhoea;
    }

    /**
     * Get the [vomiting] column value.
     *
     * @return int
     */
    public function getVomiting()
    {

        return $this->vomiting;
    }

    /**
     * Get the [fever_chil] column value.
     *
     * @return int
     */
    public function getFeverChil()
    {

        return $this->fever_chil;
    }

    /**
     * Get the [headache] column value.
     *
     * @return int
     */
    public function getHeadache()
    {

        return $this->headache;
    }

    /**
     * Get the [joint_ache] column value.
     *
     * @return int
     */
    public function getJointAche()
    {

        return $this->joint_ache;
    }

    /**
     * Get the [muscle_cra] column value.
     *
     * @return int
     */
    public function getMuscleCra()
    {

        return $this->muscle_cra;
    }

    /**
     * Get the [pulse] column value.
     *
     * @return int
     */
    public function getPulse()
    {

        return $this->pulse;
    }

    /**
     * Get the [systolic] column value.
     *
     * @return int
     */
    public function getSystolic()
    {

        return $this->systolic;
    }

    /**
     * Get the [diastolic] column value.
     *
     * @return double
     */
    public function getDiastolic()
    {

        return $this->diastolic;
    }

    /**
     * Get the [pupils] column value.
     *
     * @return double
     */
    public function getPupils()
    {

        return $this->pupils;
    }

    /**
     * Get the [death] column value.
     *
     * @return double
     */
    public function getDeath()
    {

        return $this->death;
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
     * Get the [famcode] column value.
     *
     * @return int
     */
    public function getFamcode()
    {

        return $this->famcode;
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
     * Get the [genus] column value.
     *
     * @return string
     */
    public function getGenus()
    {

        return $this->genus;
    }

    /**
     * Get the [species] column value.
     *
     * @return string
     */
    public function getSpecies()
    {

        return $this->species;
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
     * @return Cigua The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = CiguaPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [record_no] column.
     *
     * @param  double $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setRecordNo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->record_no !== $v) {
            $this->record_no = $v;
            $this->modifiedColumns[] = CiguaPeer::RECORD_NO;
        }


        return $this;
    } // setRecordNo()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = CiguaPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [country] column.
     *
     * @param  string $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setCountry($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->country !== $v) {
            $this->country = $v;
            $this->modifiedColumns[] = CiguaPeer::COUNTRY;
        }


        return $this;
    } // setCountry()

    /**
     * Set the value of [location] column.
     *
     * @param  string $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setLocation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->location !== $v) {
            $this->location = $v;
            $this->modifiedColumns[] = CiguaPeer::LOCATION;
        }


        return $this;
    } // setLocation()

    /**
     * Set the value of [latitudedeg] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setLatitudedeg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->latitudedeg !== $v) {
            $this->latitudedeg = $v;
            $this->modifiedColumns[] = CiguaPeer::LATITUDEDEG;
        }


        return $this;
    } // setLatitudedeg()

    /**
     * Set the value of [latitudemin] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setLatitudemin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->latitudemin !== $v) {
            $this->latitudemin = $v;
            $this->modifiedColumns[] = CiguaPeer::LATITUDEMIN;
        }


        return $this;
    } // setLatitudemin()

    /**
     * Set the value of [northsouth] column.
     *
     * @param  string $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setNorthsouth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northsouth !== $v) {
            $this->northsouth = $v;
            $this->modifiedColumns[] = CiguaPeer::NORTHSOUTH;
        }


        return $this;
    } // setNorthsouth()

    /**
     * Set the value of [longitudedeg] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setLongitudedeg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->longitudedeg !== $v) {
            $this->longitudedeg = $v;
            $this->modifiedColumns[] = CiguaPeer::LONGITUDEDEG;
        }


        return $this;
    } // setLongitudedeg()

    /**
     * Set the value of [longitudemin] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setLongitudemin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->longitudemin !== $v) {
            $this->longitudemin = $v;
            $this->modifiedColumns[] = CiguaPeer::LONGITUDEMIN;
        }


        return $this;
    } // setLongitudemin()

    /**
     * Set the value of [eastwest] column.
     *
     * @param  string $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setEastwest($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eastwest !== $v) {
            $this->eastwest = $v;
            $this->modifiedColumns[] = CiguaPeer::EASTWEST;
        }


        return $this;
    } // setEastwest()

    /**
     * Sets the value of [daterec] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cigua The current object (for fluent API support)
     */
    public function setDaterec($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->daterec !== null || $dt !== null) {
            $currentDateAsString = ($this->daterec !== null && $tmpDt = new DateTime($this->daterec)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->daterec = $newDateAsString;
                $this->modifiedColumns[] = CiguaPeer::DATEREC;
            }
        } // if either are not null


        return $this;
    } // setDaterec()

    /**
     * Set the value of [fish_y_n] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setFishYN($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fish_y_n !== $v) {
            $this->fish_y_n = $v;
            $this->modifiedColumns[] = CiguaPeer::FISH_Y_N;
        }


        return $this;
    } // setFishYN()

    /**
     * Set the value of [crab] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setCrab($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->crab !== $v) {
            $this->crab = $v;
            $this->modifiedColumns[] = CiguaPeer::CRAB;
        }


        return $this;
    } // setCrab()

    /**
     * Set the value of [lobst] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setLobst($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lobst !== $v) {
            $this->lobst = $v;
            $this->modifiedColumns[] = CiguaPeer::LOBST;
        }


        return $this;
    } // setLobst()

    /**
     * Set the value of [othcrust] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setOthcrust($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->othcrust !== $v) {
            $this->othcrust = $v;
            $this->modifiedColumns[] = CiguaPeer::OTHCRUST;
        }


        return $this;
    } // setOthcrust()

    /**
     * Set the value of [gastr] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setGastr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gastr !== $v) {
            $this->gastr = $v;
            $this->modifiedColumns[] = CiguaPeer::GASTR;
        }


        return $this;
    } // setGastr()

    /**
     * Set the value of [bivalve] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setBivalve($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bivalve !== $v) {
            $this->bivalve = $v;
            $this->modifiedColumns[] = CiguaPeer::BIVALVE;
        }


        return $this;
    } // setBivalve()

    /**
     * Set the value of [other_moll] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setOtherMoll($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->other_moll !== $v) {
            $this->other_moll = $v;
            $this->modifiedColumns[] = CiguaPeer::OTHER_MOLL;
        }


        return $this;
    } // setOtherMoll()

    /**
     * Set the value of [beach] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setBeach($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->beach !== $v) {
            $this->beach = $v;
            $this->modifiedColumns[] = CiguaPeer::BEACH;
        }


        return $this;
    } // setBeach()

    /**
     * Set the value of [reef_patch] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setReefPatch($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reef_patch !== $v) {
            $this->reef_patch = $v;
            $this->modifiedColumns[] = CiguaPeer::REEF_PATCH;
        }


        return $this;
    } // setReefPatch()

    /**
     * Set the value of [lagoon] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setLagoon($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lagoon !== $v) {
            $this->lagoon = $v;
            $this->modifiedColumns[] = CiguaPeer::LAGOON;
        }


        return $this;
    } // setLagoon()

    /**
     * Set the value of [river] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setRiver($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->river !== $v) {
            $this->river = $v;
            $this->modifiedColumns[] = CiguaPeer::RIVER;
        }


        return $this;
    } // setRiver()

    /**
     * Set the value of [mangrove] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setMangrove($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mangrove !== $v) {
            $this->mangrove = $v;
            $this->modifiedColumns[] = CiguaPeer::MANGROVE;
        }


        return $this;
    } // setMangrove()

    /**
     * Set the value of [outer_reef] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setOuterReef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->outer_reef !== $v) {
            $this->outer_reef = $v;
            $this->modifiedColumns[] = CiguaPeer::OUTER_REEF;
        }


        return $this;
    } // setOuterReef()

    /**
     * Set the value of [open_sea] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setOpenSea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->open_sea !== $v) {
            $this->open_sea = $v;
            $this->modifiedColumns[] = CiguaPeer::OPEN_SEA;
        }


        return $this;
    } // setOpenSea()

    /**
     * Set the value of [freshnoice] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setFreshnoice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->freshnoice !== $v) {
            $this->freshnoice = $v;
            $this->modifiedColumns[] = CiguaPeer::FRESHNOICE;
        }


        return $this;
    } // setFreshnoice()

    /**
     * Set the value of [fresh_ce] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setFreshCe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fresh_ce !== $v) {
            $this->fresh_ce = $v;
            $this->modifiedColumns[] = CiguaPeer::FRESH_CE;
        }


        return $this;
    } // setFreshCe()

    /**
     * Set the value of [frozen] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setFrozen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->frozen !== $v) {
            $this->frozen = $v;
            $this->modifiedColumns[] = CiguaPeer::FROZEN;
        }


        return $this;
    } // setFrozen()

    /**
     * Set the value of [salted] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setSalted($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->salted !== $v) {
            $this->salted = $v;
            $this->modifiedColumns[] = CiguaPeer::SALTED;
        }


        return $this;
    } // setSalted()

    /**
     * Set the value of [dried] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setDried($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dried !== $v) {
            $this->dried = $v;
            $this->modifiedColumns[] = CiguaPeer::DRIED;
        }


        return $this;
    } // setDried()

    /**
     * Set the value of [smoked] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setSmoked($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->smoked !== $v) {
            $this->smoked = $v;
            $this->modifiedColumns[] = CiguaPeer::SMOKED;
        }


        return $this;
    } // setSmoked()

    /**
     * Set the value of [pickled] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setPickled($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pickled !== $v) {
            $this->pickled = $v;
            $this->modifiedColumns[] = CiguaPeer::PICKLED;
        }


        return $this;
    } // setPickled()

    /**
     * Set the value of [head] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setHead($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->head !== $v) {
            $this->head = $v;
            $this->modifiedColumns[] = CiguaPeer::HEAD;
        }


        return $this;
    } // setHead()

    /**
     * Set the value of [flesh] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setFlesh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->flesh !== $v) {
            $this->flesh = $v;
            $this->modifiedColumns[] = CiguaPeer::FLESH;
        }


        return $this;
    } // setFlesh()

    /**
     * Set the value of [skin] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setSkin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->skin !== $v) {
            $this->skin = $v;
            $this->modifiedColumns[] = CiguaPeer::SKIN;
        }


        return $this;
    } // setSkin()

    /**
     * Set the value of [liver] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setLiver($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->liver !== $v) {
            $this->liver = $v;
            $this->modifiedColumns[] = CiguaPeer::LIVER;
        }


        return $this;
    } // setLiver()

    /**
     * Set the value of [roe] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setRoe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->roe !== $v) {
            $this->roe = $v;
            $this->modifiedColumns[] = CiguaPeer::ROE;
        }


        return $this;
    } // setRoe()

    /**
     * Set the value of [other_orga] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setOtherOrga($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->other_orga !== $v) {
            $this->other_orga = $v;
            $this->modifiedColumns[] = CiguaPeer::OTHER_ORGA;
        }


        return $this;
    } // setOtherOrga()

    /**
     * Set the value of [unprepared] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setUnprepared($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->unprepared !== $v) {
            $this->unprepared = $v;
            $this->modifiedColumns[] = CiguaPeer::UNPREPARED;
        }


        return $this;
    } // setUnprepared()

    /**
     * Set the value of [marinated] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setMarinated($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->marinated !== $v) {
            $this->marinated = $v;
            $this->modifiedColumns[] = CiguaPeer::MARINATED;
        }


        return $this;
    } // setMarinated()

    /**
     * Set the value of [cooked] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setCooked($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cooked !== $v) {
            $this->cooked = $v;
            $this->modifiedColumns[] = CiguaPeer::COOKED;
        }


        return $this;
    } // setCooked()

    /**
     * Set the value of [ate_this_m] column.
     *
     * @param  double $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setAteThisM($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ate_this_m !== $v) {
            $this->ate_this_m = $v;
            $this->modifiedColumns[] = CiguaPeer::ATE_THIS_M;
        }


        return $this;
    } // setAteThisM()

    /**
     * Set the value of [felt_sick] column.
     *
     * @param  double $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setFeltSick($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->felt_sick !== $v) {
            $this->felt_sick = $v;
            $this->modifiedColumns[] = CiguaPeer::FELT_SICK;
        }


        return $this;
    } // setFeltSick()

    /**
     * Set the value of [were_admit] column.
     *
     * @param  double $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setWereAdmit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->were_admit !== $v) {
            $this->were_admit = $v;
            $this->modifiedColumns[] = CiguaPeer::WERE_ADMIT;
        }


        return $this;
    } // setWereAdmit()

    /**
     * Set the value of [local_name] column.
     *
     * @param  string $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setLocalName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->local_name !== $v) {
            $this->local_name = $v;
            $this->modifiedColumns[] = CiguaPeer::LOCAL_NAME;
        }


        return $this;
    } // setLocalName()

    /**
     * Set the value of [english_na] column.
     *
     * @param  string $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setEnglishNa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->english_na !== $v) {
            $this->english_na = $v;
            $this->modifiedColumns[] = CiguaPeer::ENGLISH_NA;
        }


        return $this;
    } // setEnglishNa()

    /**
     * Set the value of [scientific] column.
     *
     * @param  string $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setScientific($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->scientific !== $v) {
            $this->scientific = $v;
            $this->modifiedColumns[] = CiguaPeer::SCIENTIFIC;
        }


        return $this;
    } // setScientific()

    /**
     * Set the value of [vendor] column.
     *
     * @param  string $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setVendor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->vendor !== $v) {
            $this->vendor = $v;
            $this->modifiedColumns[] = CiguaPeer::VENDOR;
        }


        return $this;
    } // setVendor()

    /**
     * Set the value of [areacaught] column.
     *
     * @param  string $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setAreacaught($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->areacaught !== $v) {
            $this->areacaught = $v;
            $this->modifiedColumns[] = CiguaPeer::AREACAUGHT;
        }


        return $this;
    } // setAreacaught()

    /**
     * Sets the value of [date_eaten] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cigua The current object (for fluent API support)
     */
    public function setDateEaten($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_eaten !== null || $dt !== null) {
            $currentDateAsString = ($this->date_eaten !== null && $tmpDt = new DateTime($this->date_eaten)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_eaten = $newDateAsString;
                $this->modifiedColumns[] = CiguaPeer::DATE_EATEN;
            }
        } // if either are not null


        return $this;
    } // setDateEaten()

    /**
     * Set the value of [time_eaten] column.
     *
     * @param  string $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setTimeEaten($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->time_eaten !== $v) {
            $this->time_eaten = $v;
            $this->modifiedColumns[] = CiguaPeer::TIME_EATEN;
        }


        return $this;
    } // setTimeEaten()

    /**
     * Sets the value of [date_sick] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cigua The current object (for fluent API support)
     */
    public function setDateSick($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_sick !== null || $dt !== null) {
            $currentDateAsString = ($this->date_sick !== null && $tmpDt = new DateTime($this->date_sick)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_sick = $newDateAsString;
                $this->modifiedColumns[] = CiguaPeer::DATE_SICK;
            }
        } // if either are not null


        return $this;
    } // setDateSick()

    /**
     * Set the value of [time_sick] column.
     *
     * @param  string $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setTimeSick($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->time_sick !== $v) {
            $this->time_sick = $v;
            $this->modifiedColumns[] = CiguaPeer::TIME_SICK;
        }


        return $this;
    } // setTimeSick()

    /**
     * Set the value of [burning_pa] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setBurningPa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->burning_pa !== $v) {
            $this->burning_pa = $v;
            $this->modifiedColumns[] = CiguaPeer::BURNING_PA;
        }


        return $this;
    } // setBurningPa()

    /**
     * Set the value of [tingling_n] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setTinglingN($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tingling_n !== $v) {
            $this->tingling_n = $v;
            $this->modifiedColumns[] = CiguaPeer::TINGLING_N;
        }


        return $this;
    } // setTinglingN()

    /**
     * Set the value of [urinate_di] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setUrinateDi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->urinate_di !== $v) {
            $this->urinate_di = $v;
            $this->modifiedColumns[] = CiguaPeer::URINATE_DI;
        }


        return $this;
    } // setUrinateDi()

    /**
     * Set the value of [difficultw] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setDifficultw($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->difficultw !== $v) {
            $this->difficultw = $v;
            $this->modifiedColumns[] = CiguaPeer::DIFFICULTW;
        }


        return $this;
    } // setDifficultw()

    /**
     * Set the value of [difficultt] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setDifficultt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->difficultt !== $v) {
            $this->difficultt = $v;
            $this->modifiedColumns[] = CiguaPeer::DIFFICULTT;
        }


        return $this;
    } // setDifficultt()

    /**
     * Set the value of [difficulty] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setDifficulty($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->difficulty !== $v) {
            $this->difficulty = $v;
            $this->modifiedColumns[] = CiguaPeer::DIFFICULTY;
        }


        return $this;
    } // setDifficulty()

    /**
     * Set the value of [eye_irrita] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setEyeIrrita($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eye_irrita !== $v) {
            $this->eye_irrita = $v;
            $this->modifiedColumns[] = CiguaPeer::EYE_IRRITA;
        }


        return $this;
    } // setEyeIrrita()

    /**
     * Set the value of [pin_pricki] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setPinPricki($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pin_pricki !== $v) {
            $this->pin_pricki = $v;
            $this->modifiedColumns[] = CiguaPeer::PIN_PRICKI;
        }


        return $this;
    } // setPinPricki()

    /**
     * Set the value of [strange_ta] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setStrangeTa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->strange_ta !== $v) {
            $this->strange_ta = $v;
            $this->modifiedColumns[] = CiguaPeer::STRANGE_TA;
        }


        return $this;
    } // setStrangeTa()

    /**
     * Set the value of [skin_itchi] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setSkinItchi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->skin_itchi !== $v) {
            $this->skin_itchi = $v;
            $this->modifiedColumns[] = CiguaPeer::SKIN_ITCHI;
        }


        return $this;
    } // setSkinItchi()

    /**
     * Set the value of [excess_sal] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setExcessSal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->excess_sal !== $v) {
            $this->excess_sal = $v;
            $this->modifiedColumns[] = CiguaPeer::EXCESS_SAL;
        }


        return $this;
    } // setExcessSal()

    /**
     * Set the value of [excess_swt] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setExcessSwt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->excess_swt !== $v) {
            $this->excess_swt = $v;
            $this->modifiedColumns[] = CiguaPeer::EXCESS_SWT;
        }


        return $this;
    } // setExcessSwt()

    /**
     * Set the value of [diarrhoea] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setDiarrhoea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->diarrhoea !== $v) {
            $this->diarrhoea = $v;
            $this->modifiedColumns[] = CiguaPeer::DIARRHOEA;
        }


        return $this;
    } // setDiarrhoea()

    /**
     * Set the value of [vomiting] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setVomiting($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vomiting !== $v) {
            $this->vomiting = $v;
            $this->modifiedColumns[] = CiguaPeer::VOMITING;
        }


        return $this;
    } // setVomiting()

    /**
     * Set the value of [fever_chil] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setFeverChil($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fever_chil !== $v) {
            $this->fever_chil = $v;
            $this->modifiedColumns[] = CiguaPeer::FEVER_CHIL;
        }


        return $this;
    } // setFeverChil()

    /**
     * Set the value of [headache] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setHeadache($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->headache !== $v) {
            $this->headache = $v;
            $this->modifiedColumns[] = CiguaPeer::HEADACHE;
        }


        return $this;
    } // setHeadache()

    /**
     * Set the value of [joint_ache] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setJointAche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->joint_ache !== $v) {
            $this->joint_ache = $v;
            $this->modifiedColumns[] = CiguaPeer::JOINT_ACHE;
        }


        return $this;
    } // setJointAche()

    /**
     * Set the value of [muscle_cra] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setMuscleCra($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->muscle_cra !== $v) {
            $this->muscle_cra = $v;
            $this->modifiedColumns[] = CiguaPeer::MUSCLE_CRA;
        }


        return $this;
    } // setMuscleCra()

    /**
     * Set the value of [pulse] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setPulse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pulse !== $v) {
            $this->pulse = $v;
            $this->modifiedColumns[] = CiguaPeer::PULSE;
        }


        return $this;
    } // setPulse()

    /**
     * Set the value of [systolic] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setSystolic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->systolic !== $v) {
            $this->systolic = $v;
            $this->modifiedColumns[] = CiguaPeer::SYSTOLIC;
        }


        return $this;
    } // setSystolic()

    /**
     * Set the value of [diastolic] column.
     *
     * @param  double $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setDiastolic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->diastolic !== $v) {
            $this->diastolic = $v;
            $this->modifiedColumns[] = CiguaPeer::DIASTOLIC;
        }


        return $this;
    } // setDiastolic()

    /**
     * Set the value of [pupils] column.
     *
     * @param  double $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setPupils($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pupils !== $v) {
            $this->pupils = $v;
            $this->modifiedColumns[] = CiguaPeer::PUPILS;
        }


        return $this;
    } // setPupils()

    /**
     * Set the value of [death] column.
     *
     * @param  double $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setDeath($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->death !== $v) {
            $this->death = $v;
            $this->modifiedColumns[] = CiguaPeer::DEATH;
        }


        return $this;
    } // setDeath()

    /**
     * Set the value of [comments] column.
     *
     * @param  string $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setComments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comments !== $v) {
            $this->comments = $v;
            $this->modifiedColumns[] = CiguaPeer::COMMENTS;
        }


        return $this;
    } // setComments()

    /**
     * Set the value of [famcode] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setFamcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->famcode !== $v) {
            $this->famcode = $v;
            $this->modifiedColumns[] = CiguaPeer::FAMCODE;
        }


        return $this;
    } // setFamcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = CiguaPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [genus] column.
     *
     * @param  string $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setGenus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genus !== $v) {
            $this->genus = $v;
            $this->modifiedColumns[] = CiguaPeer::GENUS;
        }


        return $this;
    } // setGenus()

    /**
     * Set the value of [species] column.
     *
     * @param  string $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setSpecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->species !== $v) {
            $this->species = $v;
            $this->modifiedColumns[] = CiguaPeer::SPECIES;
        }


        return $this;
    } // setSpecies()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = CiguaPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cigua The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = CiguaPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = CiguaPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cigua The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = CiguaPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Cigua The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = CiguaPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cigua The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = CiguaPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cigua The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = CiguaPeer::TS;
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
            if ($this->latitudedeg !== 0) {
                return false;
            }

            if ($this->latitudemin !== 0) {
                return false;
            }

            if ($this->longitudedeg !== 0) {
                return false;
            }

            if ($this->longitudemin !== 0) {
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
            $this->record_no = ($row[$startcol + 1] !== null) ? (double) $row[$startcol + 1] : null;
            $this->c_code = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->country = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->location = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->latitudedeg = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->latitudemin = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->northsouth = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->longitudedeg = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->longitudemin = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->eastwest = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->daterec = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->fish_y_n = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->crab = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->lobst = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->othcrust = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->gastr = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->bivalve = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->other_moll = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->beach = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->reef_patch = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->lagoon = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->river = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->mangrove = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->outer_reef = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->open_sea = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->freshnoice = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->fresh_ce = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->frozen = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->salted = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->dried = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->smoked = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->pickled = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->head = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->flesh = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->skin = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->liver = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->roe = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->other_orga = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->unprepared = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->marinated = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->cooked = ($row[$startcol + 41] !== null) ? (int) $row[$startcol + 41] : null;
            $this->ate_this_m = ($row[$startcol + 42] !== null) ? (double) $row[$startcol + 42] : null;
            $this->felt_sick = ($row[$startcol + 43] !== null) ? (double) $row[$startcol + 43] : null;
            $this->were_admit = ($row[$startcol + 44] !== null) ? (double) $row[$startcol + 44] : null;
            $this->local_name = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->english_na = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->scientific = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->vendor = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->areacaught = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->date_eaten = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->time_eaten = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->date_sick = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->time_sick = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->burning_pa = ($row[$startcol + 54] !== null) ? (int) $row[$startcol + 54] : null;
            $this->tingling_n = ($row[$startcol + 55] !== null) ? (int) $row[$startcol + 55] : null;
            $this->urinate_di = ($row[$startcol + 56] !== null) ? (int) $row[$startcol + 56] : null;
            $this->difficultw = ($row[$startcol + 57] !== null) ? (int) $row[$startcol + 57] : null;
            $this->difficultt = ($row[$startcol + 58] !== null) ? (int) $row[$startcol + 58] : null;
            $this->difficulty = ($row[$startcol + 59] !== null) ? (int) $row[$startcol + 59] : null;
            $this->eye_irrita = ($row[$startcol + 60] !== null) ? (int) $row[$startcol + 60] : null;
            $this->pin_pricki = ($row[$startcol + 61] !== null) ? (int) $row[$startcol + 61] : null;
            $this->strange_ta = ($row[$startcol + 62] !== null) ? (int) $row[$startcol + 62] : null;
            $this->skin_itchi = ($row[$startcol + 63] !== null) ? (int) $row[$startcol + 63] : null;
            $this->excess_sal = ($row[$startcol + 64] !== null) ? (int) $row[$startcol + 64] : null;
            $this->excess_swt = ($row[$startcol + 65] !== null) ? (int) $row[$startcol + 65] : null;
            $this->diarrhoea = ($row[$startcol + 66] !== null) ? (int) $row[$startcol + 66] : null;
            $this->vomiting = ($row[$startcol + 67] !== null) ? (int) $row[$startcol + 67] : null;
            $this->fever_chil = ($row[$startcol + 68] !== null) ? (int) $row[$startcol + 68] : null;
            $this->headache = ($row[$startcol + 69] !== null) ? (int) $row[$startcol + 69] : null;
            $this->joint_ache = ($row[$startcol + 70] !== null) ? (int) $row[$startcol + 70] : null;
            $this->muscle_cra = ($row[$startcol + 71] !== null) ? (int) $row[$startcol + 71] : null;
            $this->pulse = ($row[$startcol + 72] !== null) ? (int) $row[$startcol + 72] : null;
            $this->systolic = ($row[$startcol + 73] !== null) ? (int) $row[$startcol + 73] : null;
            $this->diastolic = ($row[$startcol + 74] !== null) ? (double) $row[$startcol + 74] : null;
            $this->pupils = ($row[$startcol + 75] !== null) ? (double) $row[$startcol + 75] : null;
            $this->death = ($row[$startcol + 76] !== null) ? (double) $row[$startcol + 76] : null;
            $this->comments = ($row[$startcol + 77] !== null) ? (string) $row[$startcol + 77] : null;
            $this->famcode = ($row[$startcol + 78] !== null) ? (int) $row[$startcol + 78] : null;
            $this->speccode = ($row[$startcol + 79] !== null) ? (int) $row[$startcol + 79] : null;
            $this->genus = ($row[$startcol + 80] !== null) ? (string) $row[$startcol + 80] : null;
            $this->species = ($row[$startcol + 81] !== null) ? (string) $row[$startcol + 81] : null;
            $this->entered = ($row[$startcol + 82] !== null) ? (int) $row[$startcol + 82] : null;
            $this->dateentered = ($row[$startcol + 83] !== null) ? (string) $row[$startcol + 83] : null;
            $this->modified = ($row[$startcol + 84] !== null) ? (int) $row[$startcol + 84] : null;
            $this->datemodified = ($row[$startcol + 85] !== null) ? (string) $row[$startcol + 85] : null;
            $this->expert = ($row[$startcol + 86] !== null) ? (int) $row[$startcol + 86] : null;
            $this->datechecked = ($row[$startcol + 87] !== null) ? (string) $row[$startcol + 87] : null;
            $this->ts = ($row[$startcol + 88] !== null) ? (string) $row[$startcol + 88] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 89; // 89 = CiguaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Cigua object", $e);
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
            $con = Propel::getConnection(CiguaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CiguaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CiguaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CiguaQuery::create()
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
            $con = Propel::getConnection(CiguaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CiguaPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CiguaPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CiguaPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CiguaPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`AutoCtr`';
        }
        if ($this->isColumnModified(CiguaPeer::RECORD_NO)) {
            $modifiedColumns[':p' . $index++]  = '`RECORD_NO`';
        }
        if ($this->isColumnModified(CiguaPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(CiguaPeer::COUNTRY)) {
            $modifiedColumns[':p' . $index++]  = '`COUNTRY`';
        }
        if ($this->isColumnModified(CiguaPeer::LOCATION)) {
            $modifiedColumns[':p' . $index++]  = '`LOCATION`';
        }
        if ($this->isColumnModified(CiguaPeer::LATITUDEDEG)) {
            $modifiedColumns[':p' . $index++]  = '`LatitudeDeg`';
        }
        if ($this->isColumnModified(CiguaPeer::LATITUDEMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LatitudeMin`';
        }
        if ($this->isColumnModified(CiguaPeer::NORTHSOUTH)) {
            $modifiedColumns[':p' . $index++]  = '`NorthSouth`';
        }
        if ($this->isColumnModified(CiguaPeer::LONGITUDEDEG)) {
            $modifiedColumns[':p' . $index++]  = '`LongitudeDeg`';
        }
        if ($this->isColumnModified(CiguaPeer::LONGITUDEMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LongitudeMin`';
        }
        if ($this->isColumnModified(CiguaPeer::EASTWEST)) {
            $modifiedColumns[':p' . $index++]  = '`EastWest`';
        }
        if ($this->isColumnModified(CiguaPeer::DATEREC)) {
            $modifiedColumns[':p' . $index++]  = '`DATEREC`';
        }
        if ($this->isColumnModified(CiguaPeer::FISH_Y_N)) {
            $modifiedColumns[':p' . $index++]  = '`FISH_Y_N`';
        }
        if ($this->isColumnModified(CiguaPeer::CRAB)) {
            $modifiedColumns[':p' . $index++]  = '`CRAB`';
        }
        if ($this->isColumnModified(CiguaPeer::LOBST)) {
            $modifiedColumns[':p' . $index++]  = '`LOBST`';
        }
        if ($this->isColumnModified(CiguaPeer::OTHCRUST)) {
            $modifiedColumns[':p' . $index++]  = '`OTHCRUST`';
        }
        if ($this->isColumnModified(CiguaPeer::GASTR)) {
            $modifiedColumns[':p' . $index++]  = '`GASTR`';
        }
        if ($this->isColumnModified(CiguaPeer::BIVALVE)) {
            $modifiedColumns[':p' . $index++]  = '`BIVALVE`';
        }
        if ($this->isColumnModified(CiguaPeer::OTHER_MOLL)) {
            $modifiedColumns[':p' . $index++]  = '`OTHER_MOLL`';
        }
        if ($this->isColumnModified(CiguaPeer::BEACH)) {
            $modifiedColumns[':p' . $index++]  = '`BEACH`';
        }
        if ($this->isColumnModified(CiguaPeer::REEF_PATCH)) {
            $modifiedColumns[':p' . $index++]  = '`REEF_PATCH`';
        }
        if ($this->isColumnModified(CiguaPeer::LAGOON)) {
            $modifiedColumns[':p' . $index++]  = '`LAGOON`';
        }
        if ($this->isColumnModified(CiguaPeer::RIVER)) {
            $modifiedColumns[':p' . $index++]  = '`RIVER`';
        }
        if ($this->isColumnModified(CiguaPeer::MANGROVE)) {
            $modifiedColumns[':p' . $index++]  = '`MANGROVE`';
        }
        if ($this->isColumnModified(CiguaPeer::OUTER_REEF)) {
            $modifiedColumns[':p' . $index++]  = '`OUTER_REEF`';
        }
        if ($this->isColumnModified(CiguaPeer::OPEN_SEA)) {
            $modifiedColumns[':p' . $index++]  = '`OPEN_SEA`';
        }
        if ($this->isColumnModified(CiguaPeer::FRESHNOICE)) {
            $modifiedColumns[':p' . $index++]  = '`FRESHNOICE`';
        }
        if ($this->isColumnModified(CiguaPeer::FRESH_CE)) {
            $modifiedColumns[':p' . $index++]  = '`FRESH_CE`';
        }
        if ($this->isColumnModified(CiguaPeer::FROZEN)) {
            $modifiedColumns[':p' . $index++]  = '`FROZEN`';
        }
        if ($this->isColumnModified(CiguaPeer::SALTED)) {
            $modifiedColumns[':p' . $index++]  = '`SALTED`';
        }
        if ($this->isColumnModified(CiguaPeer::DRIED)) {
            $modifiedColumns[':p' . $index++]  = '`DRIED`';
        }
        if ($this->isColumnModified(CiguaPeer::SMOKED)) {
            $modifiedColumns[':p' . $index++]  = '`SMOKED`';
        }
        if ($this->isColumnModified(CiguaPeer::PICKLED)) {
            $modifiedColumns[':p' . $index++]  = '`PICKLED`';
        }
        if ($this->isColumnModified(CiguaPeer::HEAD)) {
            $modifiedColumns[':p' . $index++]  = '`HEAD`';
        }
        if ($this->isColumnModified(CiguaPeer::FLESH)) {
            $modifiedColumns[':p' . $index++]  = '`FLESH`';
        }
        if ($this->isColumnModified(CiguaPeer::SKIN)) {
            $modifiedColumns[':p' . $index++]  = '`SKIN`';
        }
        if ($this->isColumnModified(CiguaPeer::LIVER)) {
            $modifiedColumns[':p' . $index++]  = '`LIVER`';
        }
        if ($this->isColumnModified(CiguaPeer::ROE)) {
            $modifiedColumns[':p' . $index++]  = '`ROE`';
        }
        if ($this->isColumnModified(CiguaPeer::OTHER_ORGA)) {
            $modifiedColumns[':p' . $index++]  = '`OTHER_ORGA`';
        }
        if ($this->isColumnModified(CiguaPeer::UNPREPARED)) {
            $modifiedColumns[':p' . $index++]  = '`UNPREPARED`';
        }
        if ($this->isColumnModified(CiguaPeer::MARINATED)) {
            $modifiedColumns[':p' . $index++]  = '`MARINATED`';
        }
        if ($this->isColumnModified(CiguaPeer::COOKED)) {
            $modifiedColumns[':p' . $index++]  = '`COOKED`';
        }
        if ($this->isColumnModified(CiguaPeer::ATE_THIS_M)) {
            $modifiedColumns[':p' . $index++]  = '`ATE_THIS_M`';
        }
        if ($this->isColumnModified(CiguaPeer::FELT_SICK)) {
            $modifiedColumns[':p' . $index++]  = '`FELT_SICK`';
        }
        if ($this->isColumnModified(CiguaPeer::WERE_ADMIT)) {
            $modifiedColumns[':p' . $index++]  = '`WERE_ADMIT`';
        }
        if ($this->isColumnModified(CiguaPeer::LOCAL_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`LOCAL_NAME`';
        }
        if ($this->isColumnModified(CiguaPeer::ENGLISH_NA)) {
            $modifiedColumns[':p' . $index++]  = '`ENGLISH_NA`';
        }
        if ($this->isColumnModified(CiguaPeer::SCIENTIFIC)) {
            $modifiedColumns[':p' . $index++]  = '`SCIENTIFIC`';
        }
        if ($this->isColumnModified(CiguaPeer::VENDOR)) {
            $modifiedColumns[':p' . $index++]  = '`VENDOR`';
        }
        if ($this->isColumnModified(CiguaPeer::AREACAUGHT)) {
            $modifiedColumns[':p' . $index++]  = '`AREACAUGHT`';
        }
        if ($this->isColumnModified(CiguaPeer::DATE_EATEN)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_EATEN`';
        }
        if ($this->isColumnModified(CiguaPeer::TIME_EATEN)) {
            $modifiedColumns[':p' . $index++]  = '`TIME_EATEN`';
        }
        if ($this->isColumnModified(CiguaPeer::DATE_SICK)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_SICK`';
        }
        if ($this->isColumnModified(CiguaPeer::TIME_SICK)) {
            $modifiedColumns[':p' . $index++]  = '`TIME_SICK`';
        }
        if ($this->isColumnModified(CiguaPeer::BURNING_PA)) {
            $modifiedColumns[':p' . $index++]  = '`BURNING_PA`';
        }
        if ($this->isColumnModified(CiguaPeer::TINGLING_N)) {
            $modifiedColumns[':p' . $index++]  = '`TINGLING_N`';
        }
        if ($this->isColumnModified(CiguaPeer::URINATE_DI)) {
            $modifiedColumns[':p' . $index++]  = '`URINATE_DI`';
        }
        if ($this->isColumnModified(CiguaPeer::DIFFICULTW)) {
            $modifiedColumns[':p' . $index++]  = '`DIFFICULTW`';
        }
        if ($this->isColumnModified(CiguaPeer::DIFFICULTT)) {
            $modifiedColumns[':p' . $index++]  = '`DIFFICULTT`';
        }
        if ($this->isColumnModified(CiguaPeer::DIFFICULTY)) {
            $modifiedColumns[':p' . $index++]  = '`DIFFICULTY`';
        }
        if ($this->isColumnModified(CiguaPeer::EYE_IRRITA)) {
            $modifiedColumns[':p' . $index++]  = '`EYE_IRRITA`';
        }
        if ($this->isColumnModified(CiguaPeer::PIN_PRICKI)) {
            $modifiedColumns[':p' . $index++]  = '`PIN_PRICKI`';
        }
        if ($this->isColumnModified(CiguaPeer::STRANGE_TA)) {
            $modifiedColumns[':p' . $index++]  = '`STRANGE_TA`';
        }
        if ($this->isColumnModified(CiguaPeer::SKIN_ITCHI)) {
            $modifiedColumns[':p' . $index++]  = '`SKIN_ITCHI`';
        }
        if ($this->isColumnModified(CiguaPeer::EXCESS_SAL)) {
            $modifiedColumns[':p' . $index++]  = '`EXCESS_SAL`';
        }
        if ($this->isColumnModified(CiguaPeer::EXCESS_SWT)) {
            $modifiedColumns[':p' . $index++]  = '`EXCESS_SWT`';
        }
        if ($this->isColumnModified(CiguaPeer::DIARRHOEA)) {
            $modifiedColumns[':p' . $index++]  = '`DIARRHOEA`';
        }
        if ($this->isColumnModified(CiguaPeer::VOMITING)) {
            $modifiedColumns[':p' . $index++]  = '`VOMITING`';
        }
        if ($this->isColumnModified(CiguaPeer::FEVER_CHIL)) {
            $modifiedColumns[':p' . $index++]  = '`FEVER_CHIL`';
        }
        if ($this->isColumnModified(CiguaPeer::HEADACHE)) {
            $modifiedColumns[':p' . $index++]  = '`HEADACHE`';
        }
        if ($this->isColumnModified(CiguaPeer::JOINT_ACHE)) {
            $modifiedColumns[':p' . $index++]  = '`JOINT_ACHE`';
        }
        if ($this->isColumnModified(CiguaPeer::MUSCLE_CRA)) {
            $modifiedColumns[':p' . $index++]  = '`MUSCLE_CRA`';
        }
        if ($this->isColumnModified(CiguaPeer::PULSE)) {
            $modifiedColumns[':p' . $index++]  = '`PULSE`';
        }
        if ($this->isColumnModified(CiguaPeer::SYSTOLIC)) {
            $modifiedColumns[':p' . $index++]  = '`SYSTOLIC`';
        }
        if ($this->isColumnModified(CiguaPeer::DIASTOLIC)) {
            $modifiedColumns[':p' . $index++]  = '`DIASTOLIC`';
        }
        if ($this->isColumnModified(CiguaPeer::PUPILS)) {
            $modifiedColumns[':p' . $index++]  = '`PUPILS`';
        }
        if ($this->isColumnModified(CiguaPeer::DEATH)) {
            $modifiedColumns[':p' . $index++]  = '`DEATH`';
        }
        if ($this->isColumnModified(CiguaPeer::COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`COMMENTS`';
        }
        if ($this->isColumnModified(CiguaPeer::FAMCODE)) {
            $modifiedColumns[':p' . $index++]  = '`FamCode`';
        }
        if ($this->isColumnModified(CiguaPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(CiguaPeer::GENUS)) {
            $modifiedColumns[':p' . $index++]  = '`Genus`';
        }
        if ($this->isColumnModified(CiguaPeer::SPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`Species`';
        }
        if ($this->isColumnModified(CiguaPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(CiguaPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(CiguaPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(CiguaPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(CiguaPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(CiguaPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(CiguaPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `cigua` (%s) VALUES (%s)',
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
                    case '`RECORD_NO`':
                        $stmt->bindValue($identifier, $this->record_no, PDO::PARAM_STR);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`COUNTRY`':
                        $stmt->bindValue($identifier, $this->country, PDO::PARAM_STR);
                        break;
                    case '`LOCATION`':
                        $stmt->bindValue($identifier, $this->location, PDO::PARAM_STR);
                        break;
                    case '`LatitudeDeg`':
                        $stmt->bindValue($identifier, $this->latitudedeg, PDO::PARAM_INT);
                        break;
                    case '`LatitudeMin`':
                        $stmt->bindValue($identifier, $this->latitudemin, PDO::PARAM_INT);
                        break;
                    case '`NorthSouth`':
                        $stmt->bindValue($identifier, $this->northsouth, PDO::PARAM_STR);
                        break;
                    case '`LongitudeDeg`':
                        $stmt->bindValue($identifier, $this->longitudedeg, PDO::PARAM_INT);
                        break;
                    case '`LongitudeMin`':
                        $stmt->bindValue($identifier, $this->longitudemin, PDO::PARAM_INT);
                        break;
                    case '`EastWest`':
                        $stmt->bindValue($identifier, $this->eastwest, PDO::PARAM_STR);
                        break;
                    case '`DATEREC`':
                        $stmt->bindValue($identifier, $this->daterec, PDO::PARAM_STR);
                        break;
                    case '`FISH_Y_N`':
                        $stmt->bindValue($identifier, $this->fish_y_n, PDO::PARAM_INT);
                        break;
                    case '`CRAB`':
                        $stmt->bindValue($identifier, $this->crab, PDO::PARAM_INT);
                        break;
                    case '`LOBST`':
                        $stmt->bindValue($identifier, $this->lobst, PDO::PARAM_INT);
                        break;
                    case '`OTHCRUST`':
                        $stmt->bindValue($identifier, $this->othcrust, PDO::PARAM_INT);
                        break;
                    case '`GASTR`':
                        $stmt->bindValue($identifier, $this->gastr, PDO::PARAM_INT);
                        break;
                    case '`BIVALVE`':
                        $stmt->bindValue($identifier, $this->bivalve, PDO::PARAM_INT);
                        break;
                    case '`OTHER_MOLL`':
                        $stmt->bindValue($identifier, $this->other_moll, PDO::PARAM_INT);
                        break;
                    case '`BEACH`':
                        $stmt->bindValue($identifier, $this->beach, PDO::PARAM_INT);
                        break;
                    case '`REEF_PATCH`':
                        $stmt->bindValue($identifier, $this->reef_patch, PDO::PARAM_INT);
                        break;
                    case '`LAGOON`':
                        $stmt->bindValue($identifier, $this->lagoon, PDO::PARAM_INT);
                        break;
                    case '`RIVER`':
                        $stmt->bindValue($identifier, $this->river, PDO::PARAM_INT);
                        break;
                    case '`MANGROVE`':
                        $stmt->bindValue($identifier, $this->mangrove, PDO::PARAM_INT);
                        break;
                    case '`OUTER_REEF`':
                        $stmt->bindValue($identifier, $this->outer_reef, PDO::PARAM_INT);
                        break;
                    case '`OPEN_SEA`':
                        $stmt->bindValue($identifier, $this->open_sea, PDO::PARAM_INT);
                        break;
                    case '`FRESHNOICE`':
                        $stmt->bindValue($identifier, $this->freshnoice, PDO::PARAM_INT);
                        break;
                    case '`FRESH_CE`':
                        $stmt->bindValue($identifier, $this->fresh_ce, PDO::PARAM_INT);
                        break;
                    case '`FROZEN`':
                        $stmt->bindValue($identifier, $this->frozen, PDO::PARAM_INT);
                        break;
                    case '`SALTED`':
                        $stmt->bindValue($identifier, $this->salted, PDO::PARAM_INT);
                        break;
                    case '`DRIED`':
                        $stmt->bindValue($identifier, $this->dried, PDO::PARAM_INT);
                        break;
                    case '`SMOKED`':
                        $stmt->bindValue($identifier, $this->smoked, PDO::PARAM_INT);
                        break;
                    case '`PICKLED`':
                        $stmt->bindValue($identifier, $this->pickled, PDO::PARAM_INT);
                        break;
                    case '`HEAD`':
                        $stmt->bindValue($identifier, $this->head, PDO::PARAM_INT);
                        break;
                    case '`FLESH`':
                        $stmt->bindValue($identifier, $this->flesh, PDO::PARAM_INT);
                        break;
                    case '`SKIN`':
                        $stmt->bindValue($identifier, $this->skin, PDO::PARAM_INT);
                        break;
                    case '`LIVER`':
                        $stmt->bindValue($identifier, $this->liver, PDO::PARAM_INT);
                        break;
                    case '`ROE`':
                        $stmt->bindValue($identifier, $this->roe, PDO::PARAM_INT);
                        break;
                    case '`OTHER_ORGA`':
                        $stmt->bindValue($identifier, $this->other_orga, PDO::PARAM_INT);
                        break;
                    case '`UNPREPARED`':
                        $stmt->bindValue($identifier, $this->unprepared, PDO::PARAM_INT);
                        break;
                    case '`MARINATED`':
                        $stmt->bindValue($identifier, $this->marinated, PDO::PARAM_INT);
                        break;
                    case '`COOKED`':
                        $stmt->bindValue($identifier, $this->cooked, PDO::PARAM_INT);
                        break;
                    case '`ATE_THIS_M`':
                        $stmt->bindValue($identifier, $this->ate_this_m, PDO::PARAM_STR);
                        break;
                    case '`FELT_SICK`':
                        $stmt->bindValue($identifier, $this->felt_sick, PDO::PARAM_STR);
                        break;
                    case '`WERE_ADMIT`':
                        $stmt->bindValue($identifier, $this->were_admit, PDO::PARAM_STR);
                        break;
                    case '`LOCAL_NAME`':
                        $stmt->bindValue($identifier, $this->local_name, PDO::PARAM_STR);
                        break;
                    case '`ENGLISH_NA`':
                        $stmt->bindValue($identifier, $this->english_na, PDO::PARAM_STR);
                        break;
                    case '`SCIENTIFIC`':
                        $stmt->bindValue($identifier, $this->scientific, PDO::PARAM_STR);
                        break;
                    case '`VENDOR`':
                        $stmt->bindValue($identifier, $this->vendor, PDO::PARAM_STR);
                        break;
                    case '`AREACAUGHT`':
                        $stmt->bindValue($identifier, $this->areacaught, PDO::PARAM_STR);
                        break;
                    case '`DATE_EATEN`':
                        $stmt->bindValue($identifier, $this->date_eaten, PDO::PARAM_STR);
                        break;
                    case '`TIME_EATEN`':
                        $stmt->bindValue($identifier, $this->time_eaten, PDO::PARAM_STR);
                        break;
                    case '`DATE_SICK`':
                        $stmt->bindValue($identifier, $this->date_sick, PDO::PARAM_STR);
                        break;
                    case '`TIME_SICK`':
                        $stmt->bindValue($identifier, $this->time_sick, PDO::PARAM_STR);
                        break;
                    case '`BURNING_PA`':
                        $stmt->bindValue($identifier, $this->burning_pa, PDO::PARAM_INT);
                        break;
                    case '`TINGLING_N`':
                        $stmt->bindValue($identifier, $this->tingling_n, PDO::PARAM_INT);
                        break;
                    case '`URINATE_DI`':
                        $stmt->bindValue($identifier, $this->urinate_di, PDO::PARAM_INT);
                        break;
                    case '`DIFFICULTW`':
                        $stmt->bindValue($identifier, $this->difficultw, PDO::PARAM_INT);
                        break;
                    case '`DIFFICULTT`':
                        $stmt->bindValue($identifier, $this->difficultt, PDO::PARAM_INT);
                        break;
                    case '`DIFFICULTY`':
                        $stmt->bindValue($identifier, $this->difficulty, PDO::PARAM_INT);
                        break;
                    case '`EYE_IRRITA`':
                        $stmt->bindValue($identifier, $this->eye_irrita, PDO::PARAM_INT);
                        break;
                    case '`PIN_PRICKI`':
                        $stmt->bindValue($identifier, $this->pin_pricki, PDO::PARAM_INT);
                        break;
                    case '`STRANGE_TA`':
                        $stmt->bindValue($identifier, $this->strange_ta, PDO::PARAM_INT);
                        break;
                    case '`SKIN_ITCHI`':
                        $stmt->bindValue($identifier, $this->skin_itchi, PDO::PARAM_INT);
                        break;
                    case '`EXCESS_SAL`':
                        $stmt->bindValue($identifier, $this->excess_sal, PDO::PARAM_INT);
                        break;
                    case '`EXCESS_SWT`':
                        $stmt->bindValue($identifier, $this->excess_swt, PDO::PARAM_INT);
                        break;
                    case '`DIARRHOEA`':
                        $stmt->bindValue($identifier, $this->diarrhoea, PDO::PARAM_INT);
                        break;
                    case '`VOMITING`':
                        $stmt->bindValue($identifier, $this->vomiting, PDO::PARAM_INT);
                        break;
                    case '`FEVER_CHIL`':
                        $stmt->bindValue($identifier, $this->fever_chil, PDO::PARAM_INT);
                        break;
                    case '`HEADACHE`':
                        $stmt->bindValue($identifier, $this->headache, PDO::PARAM_INT);
                        break;
                    case '`JOINT_ACHE`':
                        $stmt->bindValue($identifier, $this->joint_ache, PDO::PARAM_INT);
                        break;
                    case '`MUSCLE_CRA`':
                        $stmt->bindValue($identifier, $this->muscle_cra, PDO::PARAM_INT);
                        break;
                    case '`PULSE`':
                        $stmt->bindValue($identifier, $this->pulse, PDO::PARAM_INT);
                        break;
                    case '`SYSTOLIC`':
                        $stmt->bindValue($identifier, $this->systolic, PDO::PARAM_INT);
                        break;
                    case '`DIASTOLIC`':
                        $stmt->bindValue($identifier, $this->diastolic, PDO::PARAM_STR);
                        break;
                    case '`PUPILS`':
                        $stmt->bindValue($identifier, $this->pupils, PDO::PARAM_STR);
                        break;
                    case '`DEATH`':
                        $stmt->bindValue($identifier, $this->death, PDO::PARAM_STR);
                        break;
                    case '`COMMENTS`':
                        $stmt->bindValue($identifier, $this->comments, PDO::PARAM_STR);
                        break;
                    case '`FamCode`':
                        $stmt->bindValue($identifier, $this->famcode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`Genus`':
                        $stmt->bindValue($identifier, $this->genus, PDO::PARAM_STR);
                        break;
                    case '`Species`':
                        $stmt->bindValue($identifier, $this->species, PDO::PARAM_STR);
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


            if (($retval = CiguaPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CiguaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRecordNo();
                break;
            case 2:
                return $this->getCCode();
                break;
            case 3:
                return $this->getCountry();
                break;
            case 4:
                return $this->getLocation();
                break;
            case 5:
                return $this->getLatitudedeg();
                break;
            case 6:
                return $this->getLatitudemin();
                break;
            case 7:
                return $this->getNorthsouth();
                break;
            case 8:
                return $this->getLongitudedeg();
                break;
            case 9:
                return $this->getLongitudemin();
                break;
            case 10:
                return $this->getEastwest();
                break;
            case 11:
                return $this->getDaterec();
                break;
            case 12:
                return $this->getFishYN();
                break;
            case 13:
                return $this->getCrab();
                break;
            case 14:
                return $this->getLobst();
                break;
            case 15:
                return $this->getOthcrust();
                break;
            case 16:
                return $this->getGastr();
                break;
            case 17:
                return $this->getBivalve();
                break;
            case 18:
                return $this->getOtherMoll();
                break;
            case 19:
                return $this->getBeach();
                break;
            case 20:
                return $this->getReefPatch();
                break;
            case 21:
                return $this->getLagoon();
                break;
            case 22:
                return $this->getRiver();
                break;
            case 23:
                return $this->getMangrove();
                break;
            case 24:
                return $this->getOuterReef();
                break;
            case 25:
                return $this->getOpenSea();
                break;
            case 26:
                return $this->getFreshnoice();
                break;
            case 27:
                return $this->getFreshCe();
                break;
            case 28:
                return $this->getFrozen();
                break;
            case 29:
                return $this->getSalted();
                break;
            case 30:
                return $this->getDried();
                break;
            case 31:
                return $this->getSmoked();
                break;
            case 32:
                return $this->getPickled();
                break;
            case 33:
                return $this->getHead();
                break;
            case 34:
                return $this->getFlesh();
                break;
            case 35:
                return $this->getSkin();
                break;
            case 36:
                return $this->getLiver();
                break;
            case 37:
                return $this->getRoe();
                break;
            case 38:
                return $this->getOtherOrga();
                break;
            case 39:
                return $this->getUnprepared();
                break;
            case 40:
                return $this->getMarinated();
                break;
            case 41:
                return $this->getCooked();
                break;
            case 42:
                return $this->getAteThisM();
                break;
            case 43:
                return $this->getFeltSick();
                break;
            case 44:
                return $this->getWereAdmit();
                break;
            case 45:
                return $this->getLocalName();
                break;
            case 46:
                return $this->getEnglishNa();
                break;
            case 47:
                return $this->getScientific();
                break;
            case 48:
                return $this->getVendor();
                break;
            case 49:
                return $this->getAreacaught();
                break;
            case 50:
                return $this->getDateEaten();
                break;
            case 51:
                return $this->getTimeEaten();
                break;
            case 52:
                return $this->getDateSick();
                break;
            case 53:
                return $this->getTimeSick();
                break;
            case 54:
                return $this->getBurningPa();
                break;
            case 55:
                return $this->getTinglingN();
                break;
            case 56:
                return $this->getUrinateDi();
                break;
            case 57:
                return $this->getDifficultw();
                break;
            case 58:
                return $this->getDifficultt();
                break;
            case 59:
                return $this->getDifficulty();
                break;
            case 60:
                return $this->getEyeIrrita();
                break;
            case 61:
                return $this->getPinPricki();
                break;
            case 62:
                return $this->getStrangeTa();
                break;
            case 63:
                return $this->getSkinItchi();
                break;
            case 64:
                return $this->getExcessSal();
                break;
            case 65:
                return $this->getExcessSwt();
                break;
            case 66:
                return $this->getDiarrhoea();
                break;
            case 67:
                return $this->getVomiting();
                break;
            case 68:
                return $this->getFeverChil();
                break;
            case 69:
                return $this->getHeadache();
                break;
            case 70:
                return $this->getJointAche();
                break;
            case 71:
                return $this->getMuscleCra();
                break;
            case 72:
                return $this->getPulse();
                break;
            case 73:
                return $this->getSystolic();
                break;
            case 74:
                return $this->getDiastolic();
                break;
            case 75:
                return $this->getPupils();
                break;
            case 76:
                return $this->getDeath();
                break;
            case 77:
                return $this->getComments();
                break;
            case 78:
                return $this->getFamcode();
                break;
            case 79:
                return $this->getSpeccode();
                break;
            case 80:
                return $this->getGenus();
                break;
            case 81:
                return $this->getSpecies();
                break;
            case 82:
                return $this->getEntered();
                break;
            case 83:
                return $this->getDateentered();
                break;
            case 84:
                return $this->getModified();
                break;
            case 85:
                return $this->getDatemodified();
                break;
            case 86:
                return $this->getExpert();
                break;
            case 87:
                return $this->getDatechecked();
                break;
            case 88:
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
        if (isset($alreadyDumpedObjects['Cigua'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Cigua'][$this->getPrimaryKey()] = true;
        $keys = CiguaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getRecordNo(),
            $keys[2] => $this->getCCode(),
            $keys[3] => $this->getCountry(),
            $keys[4] => $this->getLocation(),
            $keys[5] => $this->getLatitudedeg(),
            $keys[6] => $this->getLatitudemin(),
            $keys[7] => $this->getNorthsouth(),
            $keys[8] => $this->getLongitudedeg(),
            $keys[9] => $this->getLongitudemin(),
            $keys[10] => $this->getEastwest(),
            $keys[11] => $this->getDaterec(),
            $keys[12] => $this->getFishYN(),
            $keys[13] => $this->getCrab(),
            $keys[14] => $this->getLobst(),
            $keys[15] => $this->getOthcrust(),
            $keys[16] => $this->getGastr(),
            $keys[17] => $this->getBivalve(),
            $keys[18] => $this->getOtherMoll(),
            $keys[19] => $this->getBeach(),
            $keys[20] => $this->getReefPatch(),
            $keys[21] => $this->getLagoon(),
            $keys[22] => $this->getRiver(),
            $keys[23] => $this->getMangrove(),
            $keys[24] => $this->getOuterReef(),
            $keys[25] => $this->getOpenSea(),
            $keys[26] => $this->getFreshnoice(),
            $keys[27] => $this->getFreshCe(),
            $keys[28] => $this->getFrozen(),
            $keys[29] => $this->getSalted(),
            $keys[30] => $this->getDried(),
            $keys[31] => $this->getSmoked(),
            $keys[32] => $this->getPickled(),
            $keys[33] => $this->getHead(),
            $keys[34] => $this->getFlesh(),
            $keys[35] => $this->getSkin(),
            $keys[36] => $this->getLiver(),
            $keys[37] => $this->getRoe(),
            $keys[38] => $this->getOtherOrga(),
            $keys[39] => $this->getUnprepared(),
            $keys[40] => $this->getMarinated(),
            $keys[41] => $this->getCooked(),
            $keys[42] => $this->getAteThisM(),
            $keys[43] => $this->getFeltSick(),
            $keys[44] => $this->getWereAdmit(),
            $keys[45] => $this->getLocalName(),
            $keys[46] => $this->getEnglishNa(),
            $keys[47] => $this->getScientific(),
            $keys[48] => $this->getVendor(),
            $keys[49] => $this->getAreacaught(),
            $keys[50] => $this->getDateEaten(),
            $keys[51] => $this->getTimeEaten(),
            $keys[52] => $this->getDateSick(),
            $keys[53] => $this->getTimeSick(),
            $keys[54] => $this->getBurningPa(),
            $keys[55] => $this->getTinglingN(),
            $keys[56] => $this->getUrinateDi(),
            $keys[57] => $this->getDifficultw(),
            $keys[58] => $this->getDifficultt(),
            $keys[59] => $this->getDifficulty(),
            $keys[60] => $this->getEyeIrrita(),
            $keys[61] => $this->getPinPricki(),
            $keys[62] => $this->getStrangeTa(),
            $keys[63] => $this->getSkinItchi(),
            $keys[64] => $this->getExcessSal(),
            $keys[65] => $this->getExcessSwt(),
            $keys[66] => $this->getDiarrhoea(),
            $keys[67] => $this->getVomiting(),
            $keys[68] => $this->getFeverChil(),
            $keys[69] => $this->getHeadache(),
            $keys[70] => $this->getJointAche(),
            $keys[71] => $this->getMuscleCra(),
            $keys[72] => $this->getPulse(),
            $keys[73] => $this->getSystolic(),
            $keys[74] => $this->getDiastolic(),
            $keys[75] => $this->getPupils(),
            $keys[76] => $this->getDeath(),
            $keys[77] => $this->getComments(),
            $keys[78] => $this->getFamcode(),
            $keys[79] => $this->getSpeccode(),
            $keys[80] => $this->getGenus(),
            $keys[81] => $this->getSpecies(),
            $keys[82] => $this->getEntered(),
            $keys[83] => $this->getDateentered(),
            $keys[84] => $this->getModified(),
            $keys[85] => $this->getDatemodified(),
            $keys[86] => $this->getExpert(),
            $keys[87] => $this->getDatechecked(),
            $keys[88] => $this->getTs(),
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
        $pos = CiguaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRecordNo($value);
                break;
            case 2:
                $this->setCCode($value);
                break;
            case 3:
                $this->setCountry($value);
                break;
            case 4:
                $this->setLocation($value);
                break;
            case 5:
                $this->setLatitudedeg($value);
                break;
            case 6:
                $this->setLatitudemin($value);
                break;
            case 7:
                $this->setNorthsouth($value);
                break;
            case 8:
                $this->setLongitudedeg($value);
                break;
            case 9:
                $this->setLongitudemin($value);
                break;
            case 10:
                $this->setEastwest($value);
                break;
            case 11:
                $this->setDaterec($value);
                break;
            case 12:
                $this->setFishYN($value);
                break;
            case 13:
                $this->setCrab($value);
                break;
            case 14:
                $this->setLobst($value);
                break;
            case 15:
                $this->setOthcrust($value);
                break;
            case 16:
                $this->setGastr($value);
                break;
            case 17:
                $this->setBivalve($value);
                break;
            case 18:
                $this->setOtherMoll($value);
                break;
            case 19:
                $this->setBeach($value);
                break;
            case 20:
                $this->setReefPatch($value);
                break;
            case 21:
                $this->setLagoon($value);
                break;
            case 22:
                $this->setRiver($value);
                break;
            case 23:
                $this->setMangrove($value);
                break;
            case 24:
                $this->setOuterReef($value);
                break;
            case 25:
                $this->setOpenSea($value);
                break;
            case 26:
                $this->setFreshnoice($value);
                break;
            case 27:
                $this->setFreshCe($value);
                break;
            case 28:
                $this->setFrozen($value);
                break;
            case 29:
                $this->setSalted($value);
                break;
            case 30:
                $this->setDried($value);
                break;
            case 31:
                $this->setSmoked($value);
                break;
            case 32:
                $this->setPickled($value);
                break;
            case 33:
                $this->setHead($value);
                break;
            case 34:
                $this->setFlesh($value);
                break;
            case 35:
                $this->setSkin($value);
                break;
            case 36:
                $this->setLiver($value);
                break;
            case 37:
                $this->setRoe($value);
                break;
            case 38:
                $this->setOtherOrga($value);
                break;
            case 39:
                $this->setUnprepared($value);
                break;
            case 40:
                $this->setMarinated($value);
                break;
            case 41:
                $this->setCooked($value);
                break;
            case 42:
                $this->setAteThisM($value);
                break;
            case 43:
                $this->setFeltSick($value);
                break;
            case 44:
                $this->setWereAdmit($value);
                break;
            case 45:
                $this->setLocalName($value);
                break;
            case 46:
                $this->setEnglishNa($value);
                break;
            case 47:
                $this->setScientific($value);
                break;
            case 48:
                $this->setVendor($value);
                break;
            case 49:
                $this->setAreacaught($value);
                break;
            case 50:
                $this->setDateEaten($value);
                break;
            case 51:
                $this->setTimeEaten($value);
                break;
            case 52:
                $this->setDateSick($value);
                break;
            case 53:
                $this->setTimeSick($value);
                break;
            case 54:
                $this->setBurningPa($value);
                break;
            case 55:
                $this->setTinglingN($value);
                break;
            case 56:
                $this->setUrinateDi($value);
                break;
            case 57:
                $this->setDifficultw($value);
                break;
            case 58:
                $this->setDifficultt($value);
                break;
            case 59:
                $this->setDifficulty($value);
                break;
            case 60:
                $this->setEyeIrrita($value);
                break;
            case 61:
                $this->setPinPricki($value);
                break;
            case 62:
                $this->setStrangeTa($value);
                break;
            case 63:
                $this->setSkinItchi($value);
                break;
            case 64:
                $this->setExcessSal($value);
                break;
            case 65:
                $this->setExcessSwt($value);
                break;
            case 66:
                $this->setDiarrhoea($value);
                break;
            case 67:
                $this->setVomiting($value);
                break;
            case 68:
                $this->setFeverChil($value);
                break;
            case 69:
                $this->setHeadache($value);
                break;
            case 70:
                $this->setJointAche($value);
                break;
            case 71:
                $this->setMuscleCra($value);
                break;
            case 72:
                $this->setPulse($value);
                break;
            case 73:
                $this->setSystolic($value);
                break;
            case 74:
                $this->setDiastolic($value);
                break;
            case 75:
                $this->setPupils($value);
                break;
            case 76:
                $this->setDeath($value);
                break;
            case 77:
                $this->setComments($value);
                break;
            case 78:
                $this->setFamcode($value);
                break;
            case 79:
                $this->setSpeccode($value);
                break;
            case 80:
                $this->setGenus($value);
                break;
            case 81:
                $this->setSpecies($value);
                break;
            case 82:
                $this->setEntered($value);
                break;
            case 83:
                $this->setDateentered($value);
                break;
            case 84:
                $this->setModified($value);
                break;
            case 85:
                $this->setDatemodified($value);
                break;
            case 86:
                $this->setExpert($value);
                break;
            case 87:
                $this->setDatechecked($value);
                break;
            case 88:
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
        $keys = CiguaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRecordNo($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCCode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCountry($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLocation($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLatitudedeg($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLatitudemin($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNorthsouth($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLongitudedeg($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLongitudemin($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setEastwest($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDaterec($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setFishYN($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setCrab($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setLobst($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setOthcrust($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setGastr($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setBivalve($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setOtherMoll($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setBeach($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setReefPatch($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setLagoon($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setRiver($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setMangrove($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setOuterReef($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setOpenSea($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setFreshnoice($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setFreshCe($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setFrozen($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setSalted($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setDried($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setSmoked($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setPickled($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setHead($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setFlesh($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setSkin($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setLiver($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setRoe($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setOtherOrga($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setUnprepared($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setMarinated($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setCooked($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setAteThisM($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setFeltSick($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setWereAdmit($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setLocalName($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setEnglishNa($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setScientific($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setVendor($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setAreacaught($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setDateEaten($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setTimeEaten($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setDateSick($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setTimeSick($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setBurningPa($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setTinglingN($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setUrinateDi($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setDifficultw($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setDifficultt($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setDifficulty($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setEyeIrrita($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setPinPricki($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setStrangeTa($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setSkinItchi($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setExcessSal($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setExcessSwt($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setDiarrhoea($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setVomiting($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setFeverChil($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setHeadache($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setJointAche($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setMuscleCra($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setPulse($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setSystolic($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setDiastolic($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setPupils($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setDeath($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setComments($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setFamcode($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setSpeccode($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setGenus($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setSpecies($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setEntered($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setDateentered($arr[$keys[83]]);
        if (array_key_exists($keys[84], $arr)) $this->setModified($arr[$keys[84]]);
        if (array_key_exists($keys[85], $arr)) $this->setDatemodified($arr[$keys[85]]);
        if (array_key_exists($keys[86], $arr)) $this->setExpert($arr[$keys[86]]);
        if (array_key_exists($keys[87], $arr)) $this->setDatechecked($arr[$keys[87]]);
        if (array_key_exists($keys[88], $arr)) $this->setTs($arr[$keys[88]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CiguaPeer::DATABASE_NAME);

        if ($this->isColumnModified(CiguaPeer::AUTOCTR)) $criteria->add(CiguaPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(CiguaPeer::RECORD_NO)) $criteria->add(CiguaPeer::RECORD_NO, $this->record_no);
        if ($this->isColumnModified(CiguaPeer::C_CODE)) $criteria->add(CiguaPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(CiguaPeer::COUNTRY)) $criteria->add(CiguaPeer::COUNTRY, $this->country);
        if ($this->isColumnModified(CiguaPeer::LOCATION)) $criteria->add(CiguaPeer::LOCATION, $this->location);
        if ($this->isColumnModified(CiguaPeer::LATITUDEDEG)) $criteria->add(CiguaPeer::LATITUDEDEG, $this->latitudedeg);
        if ($this->isColumnModified(CiguaPeer::LATITUDEMIN)) $criteria->add(CiguaPeer::LATITUDEMIN, $this->latitudemin);
        if ($this->isColumnModified(CiguaPeer::NORTHSOUTH)) $criteria->add(CiguaPeer::NORTHSOUTH, $this->northsouth);
        if ($this->isColumnModified(CiguaPeer::LONGITUDEDEG)) $criteria->add(CiguaPeer::LONGITUDEDEG, $this->longitudedeg);
        if ($this->isColumnModified(CiguaPeer::LONGITUDEMIN)) $criteria->add(CiguaPeer::LONGITUDEMIN, $this->longitudemin);
        if ($this->isColumnModified(CiguaPeer::EASTWEST)) $criteria->add(CiguaPeer::EASTWEST, $this->eastwest);
        if ($this->isColumnModified(CiguaPeer::DATEREC)) $criteria->add(CiguaPeer::DATEREC, $this->daterec);
        if ($this->isColumnModified(CiguaPeer::FISH_Y_N)) $criteria->add(CiguaPeer::FISH_Y_N, $this->fish_y_n);
        if ($this->isColumnModified(CiguaPeer::CRAB)) $criteria->add(CiguaPeer::CRAB, $this->crab);
        if ($this->isColumnModified(CiguaPeer::LOBST)) $criteria->add(CiguaPeer::LOBST, $this->lobst);
        if ($this->isColumnModified(CiguaPeer::OTHCRUST)) $criteria->add(CiguaPeer::OTHCRUST, $this->othcrust);
        if ($this->isColumnModified(CiguaPeer::GASTR)) $criteria->add(CiguaPeer::GASTR, $this->gastr);
        if ($this->isColumnModified(CiguaPeer::BIVALVE)) $criteria->add(CiguaPeer::BIVALVE, $this->bivalve);
        if ($this->isColumnModified(CiguaPeer::OTHER_MOLL)) $criteria->add(CiguaPeer::OTHER_MOLL, $this->other_moll);
        if ($this->isColumnModified(CiguaPeer::BEACH)) $criteria->add(CiguaPeer::BEACH, $this->beach);
        if ($this->isColumnModified(CiguaPeer::REEF_PATCH)) $criteria->add(CiguaPeer::REEF_PATCH, $this->reef_patch);
        if ($this->isColumnModified(CiguaPeer::LAGOON)) $criteria->add(CiguaPeer::LAGOON, $this->lagoon);
        if ($this->isColumnModified(CiguaPeer::RIVER)) $criteria->add(CiguaPeer::RIVER, $this->river);
        if ($this->isColumnModified(CiguaPeer::MANGROVE)) $criteria->add(CiguaPeer::MANGROVE, $this->mangrove);
        if ($this->isColumnModified(CiguaPeer::OUTER_REEF)) $criteria->add(CiguaPeer::OUTER_REEF, $this->outer_reef);
        if ($this->isColumnModified(CiguaPeer::OPEN_SEA)) $criteria->add(CiguaPeer::OPEN_SEA, $this->open_sea);
        if ($this->isColumnModified(CiguaPeer::FRESHNOICE)) $criteria->add(CiguaPeer::FRESHNOICE, $this->freshnoice);
        if ($this->isColumnModified(CiguaPeer::FRESH_CE)) $criteria->add(CiguaPeer::FRESH_CE, $this->fresh_ce);
        if ($this->isColumnModified(CiguaPeer::FROZEN)) $criteria->add(CiguaPeer::FROZEN, $this->frozen);
        if ($this->isColumnModified(CiguaPeer::SALTED)) $criteria->add(CiguaPeer::SALTED, $this->salted);
        if ($this->isColumnModified(CiguaPeer::DRIED)) $criteria->add(CiguaPeer::DRIED, $this->dried);
        if ($this->isColumnModified(CiguaPeer::SMOKED)) $criteria->add(CiguaPeer::SMOKED, $this->smoked);
        if ($this->isColumnModified(CiguaPeer::PICKLED)) $criteria->add(CiguaPeer::PICKLED, $this->pickled);
        if ($this->isColumnModified(CiguaPeer::HEAD)) $criteria->add(CiguaPeer::HEAD, $this->head);
        if ($this->isColumnModified(CiguaPeer::FLESH)) $criteria->add(CiguaPeer::FLESH, $this->flesh);
        if ($this->isColumnModified(CiguaPeer::SKIN)) $criteria->add(CiguaPeer::SKIN, $this->skin);
        if ($this->isColumnModified(CiguaPeer::LIVER)) $criteria->add(CiguaPeer::LIVER, $this->liver);
        if ($this->isColumnModified(CiguaPeer::ROE)) $criteria->add(CiguaPeer::ROE, $this->roe);
        if ($this->isColumnModified(CiguaPeer::OTHER_ORGA)) $criteria->add(CiguaPeer::OTHER_ORGA, $this->other_orga);
        if ($this->isColumnModified(CiguaPeer::UNPREPARED)) $criteria->add(CiguaPeer::UNPREPARED, $this->unprepared);
        if ($this->isColumnModified(CiguaPeer::MARINATED)) $criteria->add(CiguaPeer::MARINATED, $this->marinated);
        if ($this->isColumnModified(CiguaPeer::COOKED)) $criteria->add(CiguaPeer::COOKED, $this->cooked);
        if ($this->isColumnModified(CiguaPeer::ATE_THIS_M)) $criteria->add(CiguaPeer::ATE_THIS_M, $this->ate_this_m);
        if ($this->isColumnModified(CiguaPeer::FELT_SICK)) $criteria->add(CiguaPeer::FELT_SICK, $this->felt_sick);
        if ($this->isColumnModified(CiguaPeer::WERE_ADMIT)) $criteria->add(CiguaPeer::WERE_ADMIT, $this->were_admit);
        if ($this->isColumnModified(CiguaPeer::LOCAL_NAME)) $criteria->add(CiguaPeer::LOCAL_NAME, $this->local_name);
        if ($this->isColumnModified(CiguaPeer::ENGLISH_NA)) $criteria->add(CiguaPeer::ENGLISH_NA, $this->english_na);
        if ($this->isColumnModified(CiguaPeer::SCIENTIFIC)) $criteria->add(CiguaPeer::SCIENTIFIC, $this->scientific);
        if ($this->isColumnModified(CiguaPeer::VENDOR)) $criteria->add(CiguaPeer::VENDOR, $this->vendor);
        if ($this->isColumnModified(CiguaPeer::AREACAUGHT)) $criteria->add(CiguaPeer::AREACAUGHT, $this->areacaught);
        if ($this->isColumnModified(CiguaPeer::DATE_EATEN)) $criteria->add(CiguaPeer::DATE_EATEN, $this->date_eaten);
        if ($this->isColumnModified(CiguaPeer::TIME_EATEN)) $criteria->add(CiguaPeer::TIME_EATEN, $this->time_eaten);
        if ($this->isColumnModified(CiguaPeer::DATE_SICK)) $criteria->add(CiguaPeer::DATE_SICK, $this->date_sick);
        if ($this->isColumnModified(CiguaPeer::TIME_SICK)) $criteria->add(CiguaPeer::TIME_SICK, $this->time_sick);
        if ($this->isColumnModified(CiguaPeer::BURNING_PA)) $criteria->add(CiguaPeer::BURNING_PA, $this->burning_pa);
        if ($this->isColumnModified(CiguaPeer::TINGLING_N)) $criteria->add(CiguaPeer::TINGLING_N, $this->tingling_n);
        if ($this->isColumnModified(CiguaPeer::URINATE_DI)) $criteria->add(CiguaPeer::URINATE_DI, $this->urinate_di);
        if ($this->isColumnModified(CiguaPeer::DIFFICULTW)) $criteria->add(CiguaPeer::DIFFICULTW, $this->difficultw);
        if ($this->isColumnModified(CiguaPeer::DIFFICULTT)) $criteria->add(CiguaPeer::DIFFICULTT, $this->difficultt);
        if ($this->isColumnModified(CiguaPeer::DIFFICULTY)) $criteria->add(CiguaPeer::DIFFICULTY, $this->difficulty);
        if ($this->isColumnModified(CiguaPeer::EYE_IRRITA)) $criteria->add(CiguaPeer::EYE_IRRITA, $this->eye_irrita);
        if ($this->isColumnModified(CiguaPeer::PIN_PRICKI)) $criteria->add(CiguaPeer::PIN_PRICKI, $this->pin_pricki);
        if ($this->isColumnModified(CiguaPeer::STRANGE_TA)) $criteria->add(CiguaPeer::STRANGE_TA, $this->strange_ta);
        if ($this->isColumnModified(CiguaPeer::SKIN_ITCHI)) $criteria->add(CiguaPeer::SKIN_ITCHI, $this->skin_itchi);
        if ($this->isColumnModified(CiguaPeer::EXCESS_SAL)) $criteria->add(CiguaPeer::EXCESS_SAL, $this->excess_sal);
        if ($this->isColumnModified(CiguaPeer::EXCESS_SWT)) $criteria->add(CiguaPeer::EXCESS_SWT, $this->excess_swt);
        if ($this->isColumnModified(CiguaPeer::DIARRHOEA)) $criteria->add(CiguaPeer::DIARRHOEA, $this->diarrhoea);
        if ($this->isColumnModified(CiguaPeer::VOMITING)) $criteria->add(CiguaPeer::VOMITING, $this->vomiting);
        if ($this->isColumnModified(CiguaPeer::FEVER_CHIL)) $criteria->add(CiguaPeer::FEVER_CHIL, $this->fever_chil);
        if ($this->isColumnModified(CiguaPeer::HEADACHE)) $criteria->add(CiguaPeer::HEADACHE, $this->headache);
        if ($this->isColumnModified(CiguaPeer::JOINT_ACHE)) $criteria->add(CiguaPeer::JOINT_ACHE, $this->joint_ache);
        if ($this->isColumnModified(CiguaPeer::MUSCLE_CRA)) $criteria->add(CiguaPeer::MUSCLE_CRA, $this->muscle_cra);
        if ($this->isColumnModified(CiguaPeer::PULSE)) $criteria->add(CiguaPeer::PULSE, $this->pulse);
        if ($this->isColumnModified(CiguaPeer::SYSTOLIC)) $criteria->add(CiguaPeer::SYSTOLIC, $this->systolic);
        if ($this->isColumnModified(CiguaPeer::DIASTOLIC)) $criteria->add(CiguaPeer::DIASTOLIC, $this->diastolic);
        if ($this->isColumnModified(CiguaPeer::PUPILS)) $criteria->add(CiguaPeer::PUPILS, $this->pupils);
        if ($this->isColumnModified(CiguaPeer::DEATH)) $criteria->add(CiguaPeer::DEATH, $this->death);
        if ($this->isColumnModified(CiguaPeer::COMMENTS)) $criteria->add(CiguaPeer::COMMENTS, $this->comments);
        if ($this->isColumnModified(CiguaPeer::FAMCODE)) $criteria->add(CiguaPeer::FAMCODE, $this->famcode);
        if ($this->isColumnModified(CiguaPeer::SPECCODE)) $criteria->add(CiguaPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(CiguaPeer::GENUS)) $criteria->add(CiguaPeer::GENUS, $this->genus);
        if ($this->isColumnModified(CiguaPeer::SPECIES)) $criteria->add(CiguaPeer::SPECIES, $this->species);
        if ($this->isColumnModified(CiguaPeer::ENTERED)) $criteria->add(CiguaPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(CiguaPeer::DATEENTERED)) $criteria->add(CiguaPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(CiguaPeer::MODIFIED)) $criteria->add(CiguaPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(CiguaPeer::DATEMODIFIED)) $criteria->add(CiguaPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(CiguaPeer::EXPERT)) $criteria->add(CiguaPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(CiguaPeer::DATECHECKED)) $criteria->add(CiguaPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(CiguaPeer::TS)) $criteria->add(CiguaPeer::TS, $this->ts);

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
        $criteria = new Criteria(CiguaPeer::DATABASE_NAME);
        $criteria->add(CiguaPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of Cigua (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRecordNo($this->getRecordNo());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setCountry($this->getCountry());
        $copyObj->setLocation($this->getLocation());
        $copyObj->setLatitudedeg($this->getLatitudedeg());
        $copyObj->setLatitudemin($this->getLatitudemin());
        $copyObj->setNorthsouth($this->getNorthsouth());
        $copyObj->setLongitudedeg($this->getLongitudedeg());
        $copyObj->setLongitudemin($this->getLongitudemin());
        $copyObj->setEastwest($this->getEastwest());
        $copyObj->setDaterec($this->getDaterec());
        $copyObj->setFishYN($this->getFishYN());
        $copyObj->setCrab($this->getCrab());
        $copyObj->setLobst($this->getLobst());
        $copyObj->setOthcrust($this->getOthcrust());
        $copyObj->setGastr($this->getGastr());
        $copyObj->setBivalve($this->getBivalve());
        $copyObj->setOtherMoll($this->getOtherMoll());
        $copyObj->setBeach($this->getBeach());
        $copyObj->setReefPatch($this->getReefPatch());
        $copyObj->setLagoon($this->getLagoon());
        $copyObj->setRiver($this->getRiver());
        $copyObj->setMangrove($this->getMangrove());
        $copyObj->setOuterReef($this->getOuterReef());
        $copyObj->setOpenSea($this->getOpenSea());
        $copyObj->setFreshnoice($this->getFreshnoice());
        $copyObj->setFreshCe($this->getFreshCe());
        $copyObj->setFrozen($this->getFrozen());
        $copyObj->setSalted($this->getSalted());
        $copyObj->setDried($this->getDried());
        $copyObj->setSmoked($this->getSmoked());
        $copyObj->setPickled($this->getPickled());
        $copyObj->setHead($this->getHead());
        $copyObj->setFlesh($this->getFlesh());
        $copyObj->setSkin($this->getSkin());
        $copyObj->setLiver($this->getLiver());
        $copyObj->setRoe($this->getRoe());
        $copyObj->setOtherOrga($this->getOtherOrga());
        $copyObj->setUnprepared($this->getUnprepared());
        $copyObj->setMarinated($this->getMarinated());
        $copyObj->setCooked($this->getCooked());
        $copyObj->setAteThisM($this->getAteThisM());
        $copyObj->setFeltSick($this->getFeltSick());
        $copyObj->setWereAdmit($this->getWereAdmit());
        $copyObj->setLocalName($this->getLocalName());
        $copyObj->setEnglishNa($this->getEnglishNa());
        $copyObj->setScientific($this->getScientific());
        $copyObj->setVendor($this->getVendor());
        $copyObj->setAreacaught($this->getAreacaught());
        $copyObj->setDateEaten($this->getDateEaten());
        $copyObj->setTimeEaten($this->getTimeEaten());
        $copyObj->setDateSick($this->getDateSick());
        $copyObj->setTimeSick($this->getTimeSick());
        $copyObj->setBurningPa($this->getBurningPa());
        $copyObj->setTinglingN($this->getTinglingN());
        $copyObj->setUrinateDi($this->getUrinateDi());
        $copyObj->setDifficultw($this->getDifficultw());
        $copyObj->setDifficultt($this->getDifficultt());
        $copyObj->setDifficulty($this->getDifficulty());
        $copyObj->setEyeIrrita($this->getEyeIrrita());
        $copyObj->setPinPricki($this->getPinPricki());
        $copyObj->setStrangeTa($this->getStrangeTa());
        $copyObj->setSkinItchi($this->getSkinItchi());
        $copyObj->setExcessSal($this->getExcessSal());
        $copyObj->setExcessSwt($this->getExcessSwt());
        $copyObj->setDiarrhoea($this->getDiarrhoea());
        $copyObj->setVomiting($this->getVomiting());
        $copyObj->setFeverChil($this->getFeverChil());
        $copyObj->setHeadache($this->getHeadache());
        $copyObj->setJointAche($this->getJointAche());
        $copyObj->setMuscleCra($this->getMuscleCra());
        $copyObj->setPulse($this->getPulse());
        $copyObj->setSystolic($this->getSystolic());
        $copyObj->setDiastolic($this->getDiastolic());
        $copyObj->setPupils($this->getPupils());
        $copyObj->setDeath($this->getDeath());
        $copyObj->setComments($this->getComments());
        $copyObj->setFamcode($this->getFamcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setGenus($this->getGenus());
        $copyObj->setSpecies($this->getSpecies());
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
     * @return Cigua Clone of current object.
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
     * @return CiguaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CiguaPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->record_no = null;
        $this->c_code = null;
        $this->country = null;
        $this->location = null;
        $this->latitudedeg = null;
        $this->latitudemin = null;
        $this->northsouth = null;
        $this->longitudedeg = null;
        $this->longitudemin = null;
        $this->eastwest = null;
        $this->daterec = null;
        $this->fish_y_n = null;
        $this->crab = null;
        $this->lobst = null;
        $this->othcrust = null;
        $this->gastr = null;
        $this->bivalve = null;
        $this->other_moll = null;
        $this->beach = null;
        $this->reef_patch = null;
        $this->lagoon = null;
        $this->river = null;
        $this->mangrove = null;
        $this->outer_reef = null;
        $this->open_sea = null;
        $this->freshnoice = null;
        $this->fresh_ce = null;
        $this->frozen = null;
        $this->salted = null;
        $this->dried = null;
        $this->smoked = null;
        $this->pickled = null;
        $this->head = null;
        $this->flesh = null;
        $this->skin = null;
        $this->liver = null;
        $this->roe = null;
        $this->other_orga = null;
        $this->unprepared = null;
        $this->marinated = null;
        $this->cooked = null;
        $this->ate_this_m = null;
        $this->felt_sick = null;
        $this->were_admit = null;
        $this->local_name = null;
        $this->english_na = null;
        $this->scientific = null;
        $this->vendor = null;
        $this->areacaught = null;
        $this->date_eaten = null;
        $this->time_eaten = null;
        $this->date_sick = null;
        $this->time_sick = null;
        $this->burning_pa = null;
        $this->tingling_n = null;
        $this->urinate_di = null;
        $this->difficultw = null;
        $this->difficultt = null;
        $this->difficulty = null;
        $this->eye_irrita = null;
        $this->pin_pricki = null;
        $this->strange_ta = null;
        $this->skin_itchi = null;
        $this->excess_sal = null;
        $this->excess_swt = null;
        $this->diarrhoea = null;
        $this->vomiting = null;
        $this->fever_chil = null;
        $this->headache = null;
        $this->joint_ache = null;
        $this->muscle_cra = null;
        $this->pulse = null;
        $this->systolic = null;
        $this->diastolic = null;
        $this->pupils = null;
        $this->death = null;
        $this->comments = null;
        $this->famcode = null;
        $this->speccode = null;
        $this->genus = null;
        $this->species = null;
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
        return (string) $this->exportTo(CiguaPeer::DEFAULT_STRING_FORMAT);
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
