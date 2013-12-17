<?php


/**
 * Base class that represents a row from the 'fubh' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFubh extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FubhPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FubhPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the print_date_byskit field.
     * @var        string
     */
    protected $print_date_byskit;

    /**
     * The value for the active field.
     * @var        boolean
     */
    protected $active;

    /**
     * The value for the period field.
     * @var        string
     */
    protected $period;

    /**
     * The value for the extant_finfish_1 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $extant_finfish_1;

    /**
     * The value for the extant_finfish_2 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $extant_finfish_2;

    /**
     * The value for the extant_finfish_3 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $extant_finfish_3;

    /**
     * The value for the extant_finfish_4 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $extant_finfish_4;

    /**
     * The value for the extant_finfish_5 field.
     * @var        string
     */
    protected $extant_finfish_5;

    /**
     * The value for the used_fisheries_1 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $used_fisheries_1;

    /**
     * The value for the used_fisheries_2 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $used_fisheries_2;

    /**
     * The value for the used_fisheries_3 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $used_fisheries_3;

    /**
     * The value for the used_fisheries_4 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $used_fisheries_4;

    /**
     * The value for the used_fisheries_5 field.
     * @var        string
     */
    protected $used_fisheries_5;

    /**
     * The value for the used_aquac_1 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $used_aquac_1;

    /**
     * The value for the used_aquac_2 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $used_aquac_2;

    /**
     * The value for the used_aquac_3 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $used_aquac_3;

    /**
     * The value for the used_aquac_4 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $used_aquac_4;

    /**
     * The value for the used_aquac_5 field.
     * @var        string
     */
    protected $used_aquac_5;

    /**
     * The value for the used_bait_1 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $used_bait_1;

    /**
     * The value for the used_bait_2 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $used_bait_2;

    /**
     * The value for the used_bait_3 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $used_bait_3;

    /**
     * The value for the used_bait_4 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $used_bait_4;

    /**
     * The value for the used_bait_5 field.
     * @var        string
     */
    protected $used_bait_5;

    /**
     * The value for the used_trade_1 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $used_trade_1;

    /**
     * The value for the used_trade_2 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $used_trade_2;

    /**
     * The value for the used_trade_3 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $used_trade_3;

    /**
     * The value for the used_trade_4 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $used_trade_4;

    /**
     * The value for the used_trade_5 field.
     * @var        string
     */
    protected $used_trade_5;

    /**
     * The value for the trade_marine_1 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $trade_marine_1;

    /**
     * The value for the trade_marine_2 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $trade_marine_2;

    /**
     * The value for the trade_marine_3 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $trade_marine_3;

    /**
     * The value for the trade_marine_4 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $trade_marine_4;

    /**
     * The value for the trade_marine_5 field.
     * @var        string
     */
    protected $trade_marine_5;

    /**
     * The value for the trade_fresh_1 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $trade_fresh_1;

    /**
     * The value for the trade_fresh_2 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $trade_fresh_2;

    /**
     * The value for the trade_fresh_3 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $trade_fresh_3;

    /**
     * The value for the trade_fresh_4 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $trade_fresh_4;

    /**
     * The value for the trade_fresh_5 field.
     * @var        string
     */
    protected $trade_fresh_5;

    /**
     * The value for the trade_bred_1 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $trade_bred_1;

    /**
     * The value for the trade_bred_2 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $trade_bred_2;

    /**
     * The value for the trade_bred_3 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $trade_bred_3;

    /**
     * The value for the trade_bred_4 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $trade_bred_4;

    /**
     * The value for the trade_bred_5 field.
     * @var        string
     */
    protected $trade_bred_5;

    /**
     * The value for the used_sport_1 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $used_sport_1;

    /**
     * The value for the used_sport_2 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $used_sport_2;

    /**
     * The value for the used_sport_3 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $used_sport_3;

    /**
     * The value for the used_sport_4 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $used_sport_4;

    /**
     * The value for the used_sport_5 field.
     * @var        string
     */
    protected $used_sport_5;

    /**
     * The value for the tot_used_1 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $tot_used_1;

    /**
     * The value for the tot_used_2 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $tot_used_2;

    /**
     * The value for the tot_used_3 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $tot_used_3;

    /**
     * The value for the tot_used_4 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $tot_used_4;

    /**
     * The value for the tot_used_5 field.
     * @var        string
     */
    protected $tot_used_5;

    /**
     * The value for the threat_1 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $threat_1;

    /**
     * The value for the threat_2 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $threat_2;

    /**
     * The value for the threat_3 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $threat_3;

    /**
     * The value for the threat_4 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $threat_4;

    /**
     * The value for the threat_5 field.
     * @var        string
     */
    protected $threat_5;

    /**
     * The value for the intro_1 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $intro_1;

    /**
     * The value for the intro_2 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $intro_2;

    /**
     * The value for the intro_3 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $intro_3;

    /**
     * The value for the intro_4 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $intro_4;

    /**
     * The value for the intro_5 field.
     * @var        string
     */
    protected $intro_5;

    /**
     * The value for the danger_1 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $danger_1;

    /**
     * The value for the danger_2 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $danger_2;

    /**
     * The value for the danger_3 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $danger_3;

    /**
     * The value for the danger_4 field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $danger_4;

    /**
     * The value for the danger_5 field.
     * @var        string
     */
    protected $danger_5;

    /**
     * The value for the note field.
     * @var        string
     */
    protected $note;

    /**
     * The value for the no_species field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $no_species;

    /**
     * The value for the no_fresh field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $no_fresh;

    /**
     * The value for the no_marine field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $no_marine;

    /**
     * The value for the no_brackish field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $no_brackish;

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
        $this->extant_finfish_1 = 0;
        $this->extant_finfish_2 = 0;
        $this->extant_finfish_3 = 0;
        $this->extant_finfish_4 = 0;
        $this->used_fisheries_1 = 0;
        $this->used_fisheries_2 = 0;
        $this->used_fisheries_3 = 0;
        $this->used_fisheries_4 = 0;
        $this->used_aquac_1 = 0;
        $this->used_aquac_2 = 0;
        $this->used_aquac_3 = 0;
        $this->used_aquac_4 = 0;
        $this->used_bait_1 = 0;
        $this->used_bait_2 = 0;
        $this->used_bait_3 = 0;
        $this->used_bait_4 = 0;
        $this->used_trade_1 = 0;
        $this->used_trade_2 = 0;
        $this->used_trade_3 = 0;
        $this->used_trade_4 = 0;
        $this->trade_marine_1 = 0;
        $this->trade_marine_2 = 0;
        $this->trade_marine_3 = 0;
        $this->trade_marine_4 = 0;
        $this->trade_fresh_1 = 0;
        $this->trade_fresh_2 = 0;
        $this->trade_fresh_3 = 0;
        $this->trade_fresh_4 = 0;
        $this->trade_bred_1 = 0;
        $this->trade_bred_2 = 0;
        $this->trade_bred_3 = 0;
        $this->trade_bred_4 = 0;
        $this->used_sport_1 = 0;
        $this->used_sport_2 = 0;
        $this->used_sport_3 = 0;
        $this->used_sport_4 = 0;
        $this->tot_used_1 = 0;
        $this->tot_used_2 = 0;
        $this->tot_used_3 = 0;
        $this->tot_used_4 = 0;
        $this->threat_1 = 0;
        $this->threat_2 = 0;
        $this->threat_3 = 0;
        $this->threat_4 = 0;
        $this->intro_1 = 0;
        $this->intro_2 = 0;
        $this->intro_3 = 0;
        $this->intro_4 = 0;
        $this->danger_1 = 0;
        $this->danger_2 = 0;
        $this->danger_3 = 0;
        $this->danger_4 = 0;
        $this->no_species = 0;
        $this->no_fresh = 0;
        $this->no_marine = 0;
        $this->no_brackish = 0;
    }

    /**
     * Initializes internal state of BaseFubh object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [optionally formatted] temporal [print_date_byskit] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPrintDateByskit($format = 'Y-m-d H:i:s')
    {
        if ($this->print_date_byskit === null) {
            return null;
        }

        if ($this->print_date_byskit === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->print_date_byskit);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->print_date_byskit, true), $x);
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
     * Get the [active] column value.
     *
     * @return boolean
     */
    public function getActive()
    {

        return $this->active;
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
     * Get the [extant_finfish_1] column value.
     *
     * @return int
     */
    public function getExtantFinfish1()
    {

        return $this->extant_finfish_1;
    }

    /**
     * Get the [extant_finfish_2] column value.
     *
     * @return double
     */
    public function getExtantFinfish2()
    {

        return $this->extant_finfish_2;
    }

    /**
     * Get the [extant_finfish_3] column value.
     *
     * @return int
     */
    public function getExtantFinfish3()
    {

        return $this->extant_finfish_3;
    }

    /**
     * Get the [extant_finfish_4] column value.
     *
     * @return double
     */
    public function getExtantFinfish4()
    {

        return $this->extant_finfish_4;
    }

    /**
     * Get the [extant_finfish_5] column value.
     *
     * @return string
     */
    public function getExtantFinfish5()
    {

        return $this->extant_finfish_5;
    }

    /**
     * Get the [used_fisheries_1] column value.
     *
     * @return int
     */
    public function getUsedFisheries1()
    {

        return $this->used_fisheries_1;
    }

    /**
     * Get the [used_fisheries_2] column value.
     *
     * @return double
     */
    public function getUsedFisheries2()
    {

        return $this->used_fisheries_2;
    }

    /**
     * Get the [used_fisheries_3] column value.
     *
     * @return int
     */
    public function getUsedFisheries3()
    {

        return $this->used_fisheries_3;
    }

    /**
     * Get the [used_fisheries_4] column value.
     *
     * @return double
     */
    public function getUsedFisheries4()
    {

        return $this->used_fisheries_4;
    }

    /**
     * Get the [used_fisheries_5] column value.
     *
     * @return string
     */
    public function getUsedFisheries5()
    {

        return $this->used_fisheries_5;
    }

    /**
     * Get the [used_aquac_1] column value.
     *
     * @return int
     */
    public function getUsedAquac1()
    {

        return $this->used_aquac_1;
    }

    /**
     * Get the [used_aquac_2] column value.
     *
     * @return double
     */
    public function getUsedAquac2()
    {

        return $this->used_aquac_2;
    }

    /**
     * Get the [used_aquac_3] column value.
     *
     * @return int
     */
    public function getUsedAquac3()
    {

        return $this->used_aquac_3;
    }

    /**
     * Get the [used_aquac_4] column value.
     *
     * @return double
     */
    public function getUsedAquac4()
    {

        return $this->used_aquac_4;
    }

    /**
     * Get the [used_aquac_5] column value.
     *
     * @return string
     */
    public function getUsedAquac5()
    {

        return $this->used_aquac_5;
    }

    /**
     * Get the [used_bait_1] column value.
     *
     * @return int
     */
    public function getUsedBait1()
    {

        return $this->used_bait_1;
    }

    /**
     * Get the [used_bait_2] column value.
     *
     * @return double
     */
    public function getUsedBait2()
    {

        return $this->used_bait_2;
    }

    /**
     * Get the [used_bait_3] column value.
     *
     * @return int
     */
    public function getUsedBait3()
    {

        return $this->used_bait_3;
    }

    /**
     * Get the [used_bait_4] column value.
     *
     * @return double
     */
    public function getUsedBait4()
    {

        return $this->used_bait_4;
    }

    /**
     * Get the [used_bait_5] column value.
     *
     * @return string
     */
    public function getUsedBait5()
    {

        return $this->used_bait_5;
    }

    /**
     * Get the [used_trade_1] column value.
     *
     * @return int
     */
    public function getUsedTrade1()
    {

        return $this->used_trade_1;
    }

    /**
     * Get the [used_trade_2] column value.
     *
     * @return double
     */
    public function getUsedTrade2()
    {

        return $this->used_trade_2;
    }

    /**
     * Get the [used_trade_3] column value.
     *
     * @return int
     */
    public function getUsedTrade3()
    {

        return $this->used_trade_3;
    }

    /**
     * Get the [used_trade_4] column value.
     *
     * @return double
     */
    public function getUsedTrade4()
    {

        return $this->used_trade_4;
    }

    /**
     * Get the [used_trade_5] column value.
     *
     * @return string
     */
    public function getUsedTrade5()
    {

        return $this->used_trade_5;
    }

    /**
     * Get the [trade_marine_1] column value.
     *
     * @return int
     */
    public function getTradeMarine1()
    {

        return $this->trade_marine_1;
    }

    /**
     * Get the [trade_marine_2] column value.
     *
     * @return double
     */
    public function getTradeMarine2()
    {

        return $this->trade_marine_2;
    }

    /**
     * Get the [trade_marine_3] column value.
     *
     * @return int
     */
    public function getTradeMarine3()
    {

        return $this->trade_marine_3;
    }

    /**
     * Get the [trade_marine_4] column value.
     *
     * @return double
     */
    public function getTradeMarine4()
    {

        return $this->trade_marine_4;
    }

    /**
     * Get the [trade_marine_5] column value.
     *
     * @return string
     */
    public function getTradeMarine5()
    {

        return $this->trade_marine_5;
    }

    /**
     * Get the [trade_fresh_1] column value.
     *
     * @return int
     */
    public function getTradeFresh1()
    {

        return $this->trade_fresh_1;
    }

    /**
     * Get the [trade_fresh_2] column value.
     *
     * @return double
     */
    public function getTradeFresh2()
    {

        return $this->trade_fresh_2;
    }

    /**
     * Get the [trade_fresh_3] column value.
     *
     * @return int
     */
    public function getTradeFresh3()
    {

        return $this->trade_fresh_3;
    }

    /**
     * Get the [trade_fresh_4] column value.
     *
     * @return double
     */
    public function getTradeFresh4()
    {

        return $this->trade_fresh_4;
    }

    /**
     * Get the [trade_fresh_5] column value.
     *
     * @return string
     */
    public function getTradeFresh5()
    {

        return $this->trade_fresh_5;
    }

    /**
     * Get the [trade_bred_1] column value.
     *
     * @return int
     */
    public function getTradeBred1()
    {

        return $this->trade_bred_1;
    }

    /**
     * Get the [trade_bred_2] column value.
     *
     * @return double
     */
    public function getTradeBred2()
    {

        return $this->trade_bred_2;
    }

    /**
     * Get the [trade_bred_3] column value.
     *
     * @return int
     */
    public function getTradeBred3()
    {

        return $this->trade_bred_3;
    }

    /**
     * Get the [trade_bred_4] column value.
     *
     * @return double
     */
    public function getTradeBred4()
    {

        return $this->trade_bred_4;
    }

    /**
     * Get the [trade_bred_5] column value.
     *
     * @return string
     */
    public function getTradeBred5()
    {

        return $this->trade_bred_5;
    }

    /**
     * Get the [used_sport_1] column value.
     *
     * @return int
     */
    public function getUsedSport1()
    {

        return $this->used_sport_1;
    }

    /**
     * Get the [used_sport_2] column value.
     *
     * @return double
     */
    public function getUsedSport2()
    {

        return $this->used_sport_2;
    }

    /**
     * Get the [used_sport_3] column value.
     *
     * @return int
     */
    public function getUsedSport3()
    {

        return $this->used_sport_3;
    }

    /**
     * Get the [used_sport_4] column value.
     *
     * @return double
     */
    public function getUsedSport4()
    {

        return $this->used_sport_4;
    }

    /**
     * Get the [used_sport_5] column value.
     *
     * @return string
     */
    public function getUsedSport5()
    {

        return $this->used_sport_5;
    }

    /**
     * Get the [tot_used_1] column value.
     *
     * @return int
     */
    public function getTotUsed1()
    {

        return $this->tot_used_1;
    }

    /**
     * Get the [tot_used_2] column value.
     *
     * @return double
     */
    public function getTotUsed2()
    {

        return $this->tot_used_2;
    }

    /**
     * Get the [tot_used_3] column value.
     *
     * @return int
     */
    public function getTotUsed3()
    {

        return $this->tot_used_3;
    }

    /**
     * Get the [tot_used_4] column value.
     *
     * @return double
     */
    public function getTotUsed4()
    {

        return $this->tot_used_4;
    }

    /**
     * Get the [tot_used_5] column value.
     *
     * @return string
     */
    public function getTotUsed5()
    {

        return $this->tot_used_5;
    }

    /**
     * Get the [threat_1] column value.
     *
     * @return int
     */
    public function getThreat1()
    {

        return $this->threat_1;
    }

    /**
     * Get the [threat_2] column value.
     *
     * @return double
     */
    public function getThreat2()
    {

        return $this->threat_2;
    }

    /**
     * Get the [threat_3] column value.
     *
     * @return int
     */
    public function getThreat3()
    {

        return $this->threat_3;
    }

    /**
     * Get the [threat_4] column value.
     *
     * @return double
     */
    public function getThreat4()
    {

        return $this->threat_4;
    }

    /**
     * Get the [threat_5] column value.
     *
     * @return string
     */
    public function getThreat5()
    {

        return $this->threat_5;
    }

    /**
     * Get the [intro_1] column value.
     *
     * @return int
     */
    public function getIntro1()
    {

        return $this->intro_1;
    }

    /**
     * Get the [intro_2] column value.
     *
     * @return double
     */
    public function getIntro2()
    {

        return $this->intro_2;
    }

    /**
     * Get the [intro_3] column value.
     *
     * @return int
     */
    public function getIntro3()
    {

        return $this->intro_3;
    }

    /**
     * Get the [intro_4] column value.
     *
     * @return double
     */
    public function getIntro4()
    {

        return $this->intro_4;
    }

    /**
     * Get the [intro_5] column value.
     *
     * @return string
     */
    public function getIntro5()
    {

        return $this->intro_5;
    }

    /**
     * Get the [danger_1] column value.
     *
     * @return int
     */
    public function getDanger1()
    {

        return $this->danger_1;
    }

    /**
     * Get the [danger_2] column value.
     *
     * @return double
     */
    public function getDanger2()
    {

        return $this->danger_2;
    }

    /**
     * Get the [danger_3] column value.
     *
     * @return int
     */
    public function getDanger3()
    {

        return $this->danger_3;
    }

    /**
     * Get the [danger_4] column value.
     *
     * @return double
     */
    public function getDanger4()
    {

        return $this->danger_4;
    }

    /**
     * Get the [danger_5] column value.
     *
     * @return string
     */
    public function getDanger5()
    {

        return $this->danger_5;
    }

    /**
     * Get the [note] column value.
     *
     * @return string
     */
    public function getNote()
    {

        return $this->note;
    }

    /**
     * Get the [no_species] column value.
     *
     * @return int
     */
    public function getNoSpecies()
    {

        return $this->no_species;
    }

    /**
     * Get the [no_fresh] column value.
     *
     * @return int
     */
    public function getNoFresh()
    {

        return $this->no_fresh;
    }

    /**
     * Get the [no_marine] column value.
     *
     * @return int
     */
    public function getNoMarine()
    {

        return $this->no_marine;
    }

    /**
     * Get the [no_brackish] column value.
     *
     * @return int
     */
    public function getNoBrackish()
    {

        return $this->no_brackish;
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
     * Sets the value of [print_date_byskit] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Fubh The current object (for fluent API support)
     */
    public function setPrintDateByskit($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->print_date_byskit !== null || $dt !== null) {
            $currentDateAsString = ($this->print_date_byskit !== null && $tmpDt = new DateTime($this->print_date_byskit)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->print_date_byskit = $newDateAsString;
                $this->modifiedColumns[] = FubhPeer::PRINT_DATE_BYSKIT;
            }
        } // if either are not null


        return $this;
    } // setPrintDateByskit()

    /**
     * Sets the value of the [active] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setActive($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->active !== $v) {
            $this->active = $v;
            $this->modifiedColumns[] = FubhPeer::ACTIVE;
        }


        return $this;
    } // setActive()

    /**
     * Sets the value of [period] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Fubh The current object (for fluent API support)
     */
    public function setPeriod($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->period !== null || $dt !== null) {
            $currentDateAsString = ($this->period !== null && $tmpDt = new DateTime($this->period)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->period = $newDateAsString;
                $this->modifiedColumns[] = FubhPeer::PERIOD;
            }
        } // if either are not null


        return $this;
    } // setPeriod()

    /**
     * Set the value of [extant_finfish_1] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setExtantFinfish1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->extant_finfish_1 !== $v) {
            $this->extant_finfish_1 = $v;
            $this->modifiedColumns[] = FubhPeer::EXTANT_FINFISH_1;
        }


        return $this;
    } // setExtantFinfish1()

    /**
     * Set the value of [extant_finfish_2] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setExtantFinfish2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->extant_finfish_2 !== $v) {
            $this->extant_finfish_2 = $v;
            $this->modifiedColumns[] = FubhPeer::EXTANT_FINFISH_2;
        }


        return $this;
    } // setExtantFinfish2()

    /**
     * Set the value of [extant_finfish_3] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setExtantFinfish3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->extant_finfish_3 !== $v) {
            $this->extant_finfish_3 = $v;
            $this->modifiedColumns[] = FubhPeer::EXTANT_FINFISH_3;
        }


        return $this;
    } // setExtantFinfish3()

    /**
     * Set the value of [extant_finfish_4] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setExtantFinfish4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->extant_finfish_4 !== $v) {
            $this->extant_finfish_4 = $v;
            $this->modifiedColumns[] = FubhPeer::EXTANT_FINFISH_4;
        }


        return $this;
    } // setExtantFinfish4()

    /**
     * Set the value of [extant_finfish_5] column.
     *
     * @param  string $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setExtantFinfish5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->extant_finfish_5 !== $v) {
            $this->extant_finfish_5 = $v;
            $this->modifiedColumns[] = FubhPeer::EXTANT_FINFISH_5;
        }


        return $this;
    } // setExtantFinfish5()

    /**
     * Set the value of [used_fisheries_1] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedFisheries1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->used_fisheries_1 !== $v) {
            $this->used_fisheries_1 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_FISHERIES_1;
        }


        return $this;
    } // setUsedFisheries1()

    /**
     * Set the value of [used_fisheries_2] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedFisheries2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->used_fisheries_2 !== $v) {
            $this->used_fisheries_2 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_FISHERIES_2;
        }


        return $this;
    } // setUsedFisheries2()

    /**
     * Set the value of [used_fisheries_3] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedFisheries3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->used_fisheries_3 !== $v) {
            $this->used_fisheries_3 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_FISHERIES_3;
        }


        return $this;
    } // setUsedFisheries3()

    /**
     * Set the value of [used_fisheries_4] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedFisheries4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->used_fisheries_4 !== $v) {
            $this->used_fisheries_4 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_FISHERIES_4;
        }


        return $this;
    } // setUsedFisheries4()

    /**
     * Set the value of [used_fisheries_5] column.
     *
     * @param  string $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedFisheries5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->used_fisheries_5 !== $v) {
            $this->used_fisheries_5 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_FISHERIES_5;
        }


        return $this;
    } // setUsedFisheries5()

    /**
     * Set the value of [used_aquac_1] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedAquac1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->used_aquac_1 !== $v) {
            $this->used_aquac_1 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_AQUAC_1;
        }


        return $this;
    } // setUsedAquac1()

    /**
     * Set the value of [used_aquac_2] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedAquac2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->used_aquac_2 !== $v) {
            $this->used_aquac_2 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_AQUAC_2;
        }


        return $this;
    } // setUsedAquac2()

    /**
     * Set the value of [used_aquac_3] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedAquac3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->used_aquac_3 !== $v) {
            $this->used_aquac_3 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_AQUAC_3;
        }


        return $this;
    } // setUsedAquac3()

    /**
     * Set the value of [used_aquac_4] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedAquac4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->used_aquac_4 !== $v) {
            $this->used_aquac_4 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_AQUAC_4;
        }


        return $this;
    } // setUsedAquac4()

    /**
     * Set the value of [used_aquac_5] column.
     *
     * @param  string $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedAquac5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->used_aquac_5 !== $v) {
            $this->used_aquac_5 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_AQUAC_5;
        }


        return $this;
    } // setUsedAquac5()

    /**
     * Set the value of [used_bait_1] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedBait1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->used_bait_1 !== $v) {
            $this->used_bait_1 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_BAIT_1;
        }


        return $this;
    } // setUsedBait1()

    /**
     * Set the value of [used_bait_2] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedBait2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->used_bait_2 !== $v) {
            $this->used_bait_2 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_BAIT_2;
        }


        return $this;
    } // setUsedBait2()

    /**
     * Set the value of [used_bait_3] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedBait3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->used_bait_3 !== $v) {
            $this->used_bait_3 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_BAIT_3;
        }


        return $this;
    } // setUsedBait3()

    /**
     * Set the value of [used_bait_4] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedBait4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->used_bait_4 !== $v) {
            $this->used_bait_4 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_BAIT_4;
        }


        return $this;
    } // setUsedBait4()

    /**
     * Set the value of [used_bait_5] column.
     *
     * @param  string $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedBait5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->used_bait_5 !== $v) {
            $this->used_bait_5 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_BAIT_5;
        }


        return $this;
    } // setUsedBait5()

    /**
     * Set the value of [used_trade_1] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedTrade1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->used_trade_1 !== $v) {
            $this->used_trade_1 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_TRADE_1;
        }


        return $this;
    } // setUsedTrade1()

    /**
     * Set the value of [used_trade_2] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedTrade2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->used_trade_2 !== $v) {
            $this->used_trade_2 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_TRADE_2;
        }


        return $this;
    } // setUsedTrade2()

    /**
     * Set the value of [used_trade_3] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedTrade3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->used_trade_3 !== $v) {
            $this->used_trade_3 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_TRADE_3;
        }


        return $this;
    } // setUsedTrade3()

    /**
     * Set the value of [used_trade_4] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedTrade4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->used_trade_4 !== $v) {
            $this->used_trade_4 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_TRADE_4;
        }


        return $this;
    } // setUsedTrade4()

    /**
     * Set the value of [used_trade_5] column.
     *
     * @param  string $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedTrade5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->used_trade_5 !== $v) {
            $this->used_trade_5 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_TRADE_5;
        }


        return $this;
    } // setUsedTrade5()

    /**
     * Set the value of [trade_marine_1] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setTradeMarine1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->trade_marine_1 !== $v) {
            $this->trade_marine_1 = $v;
            $this->modifiedColumns[] = FubhPeer::TRADE_MARINE_1;
        }


        return $this;
    } // setTradeMarine1()

    /**
     * Set the value of [trade_marine_2] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setTradeMarine2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->trade_marine_2 !== $v) {
            $this->trade_marine_2 = $v;
            $this->modifiedColumns[] = FubhPeer::TRADE_MARINE_2;
        }


        return $this;
    } // setTradeMarine2()

    /**
     * Set the value of [trade_marine_3] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setTradeMarine3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->trade_marine_3 !== $v) {
            $this->trade_marine_3 = $v;
            $this->modifiedColumns[] = FubhPeer::TRADE_MARINE_3;
        }


        return $this;
    } // setTradeMarine3()

    /**
     * Set the value of [trade_marine_4] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setTradeMarine4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->trade_marine_4 !== $v) {
            $this->trade_marine_4 = $v;
            $this->modifiedColumns[] = FubhPeer::TRADE_MARINE_4;
        }


        return $this;
    } // setTradeMarine4()

    /**
     * Set the value of [trade_marine_5] column.
     *
     * @param  string $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setTradeMarine5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->trade_marine_5 !== $v) {
            $this->trade_marine_5 = $v;
            $this->modifiedColumns[] = FubhPeer::TRADE_MARINE_5;
        }


        return $this;
    } // setTradeMarine5()

    /**
     * Set the value of [trade_fresh_1] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setTradeFresh1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->trade_fresh_1 !== $v) {
            $this->trade_fresh_1 = $v;
            $this->modifiedColumns[] = FubhPeer::TRADE_FRESH_1;
        }


        return $this;
    } // setTradeFresh1()

    /**
     * Set the value of [trade_fresh_2] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setTradeFresh2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->trade_fresh_2 !== $v) {
            $this->trade_fresh_2 = $v;
            $this->modifiedColumns[] = FubhPeer::TRADE_FRESH_2;
        }


        return $this;
    } // setTradeFresh2()

    /**
     * Set the value of [trade_fresh_3] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setTradeFresh3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->trade_fresh_3 !== $v) {
            $this->trade_fresh_3 = $v;
            $this->modifiedColumns[] = FubhPeer::TRADE_FRESH_3;
        }


        return $this;
    } // setTradeFresh3()

    /**
     * Set the value of [trade_fresh_4] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setTradeFresh4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->trade_fresh_4 !== $v) {
            $this->trade_fresh_4 = $v;
            $this->modifiedColumns[] = FubhPeer::TRADE_FRESH_4;
        }


        return $this;
    } // setTradeFresh4()

    /**
     * Set the value of [trade_fresh_5] column.
     *
     * @param  string $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setTradeFresh5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->trade_fresh_5 !== $v) {
            $this->trade_fresh_5 = $v;
            $this->modifiedColumns[] = FubhPeer::TRADE_FRESH_5;
        }


        return $this;
    } // setTradeFresh5()

    /**
     * Set the value of [trade_bred_1] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setTradeBred1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->trade_bred_1 !== $v) {
            $this->trade_bred_1 = $v;
            $this->modifiedColumns[] = FubhPeer::TRADE_BRED_1;
        }


        return $this;
    } // setTradeBred1()

    /**
     * Set the value of [trade_bred_2] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setTradeBred2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->trade_bred_2 !== $v) {
            $this->trade_bred_2 = $v;
            $this->modifiedColumns[] = FubhPeer::TRADE_BRED_2;
        }


        return $this;
    } // setTradeBred2()

    /**
     * Set the value of [trade_bred_3] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setTradeBred3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->trade_bred_3 !== $v) {
            $this->trade_bred_3 = $v;
            $this->modifiedColumns[] = FubhPeer::TRADE_BRED_3;
        }


        return $this;
    } // setTradeBred3()

    /**
     * Set the value of [trade_bred_4] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setTradeBred4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->trade_bred_4 !== $v) {
            $this->trade_bred_4 = $v;
            $this->modifiedColumns[] = FubhPeer::TRADE_BRED_4;
        }


        return $this;
    } // setTradeBred4()

    /**
     * Set the value of [trade_bred_5] column.
     *
     * @param  string $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setTradeBred5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->trade_bred_5 !== $v) {
            $this->trade_bred_5 = $v;
            $this->modifiedColumns[] = FubhPeer::TRADE_BRED_5;
        }


        return $this;
    } // setTradeBred5()

    /**
     * Set the value of [used_sport_1] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedSport1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->used_sport_1 !== $v) {
            $this->used_sport_1 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_SPORT_1;
        }


        return $this;
    } // setUsedSport1()

    /**
     * Set the value of [used_sport_2] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedSport2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->used_sport_2 !== $v) {
            $this->used_sport_2 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_SPORT_2;
        }


        return $this;
    } // setUsedSport2()

    /**
     * Set the value of [used_sport_3] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedSport3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->used_sport_3 !== $v) {
            $this->used_sport_3 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_SPORT_3;
        }


        return $this;
    } // setUsedSport3()

    /**
     * Set the value of [used_sport_4] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedSport4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->used_sport_4 !== $v) {
            $this->used_sport_4 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_SPORT_4;
        }


        return $this;
    } // setUsedSport4()

    /**
     * Set the value of [used_sport_5] column.
     *
     * @param  string $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setUsedSport5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->used_sport_5 !== $v) {
            $this->used_sport_5 = $v;
            $this->modifiedColumns[] = FubhPeer::USED_SPORT_5;
        }


        return $this;
    } // setUsedSport5()

    /**
     * Set the value of [tot_used_1] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setTotUsed1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tot_used_1 !== $v) {
            $this->tot_used_1 = $v;
            $this->modifiedColumns[] = FubhPeer::TOT_USED_1;
        }


        return $this;
    } // setTotUsed1()

    /**
     * Set the value of [tot_used_2] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setTotUsed2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tot_used_2 !== $v) {
            $this->tot_used_2 = $v;
            $this->modifiedColumns[] = FubhPeer::TOT_USED_2;
        }


        return $this;
    } // setTotUsed2()

    /**
     * Set the value of [tot_used_3] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setTotUsed3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tot_used_3 !== $v) {
            $this->tot_used_3 = $v;
            $this->modifiedColumns[] = FubhPeer::TOT_USED_3;
        }


        return $this;
    } // setTotUsed3()

    /**
     * Set the value of [tot_used_4] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setTotUsed4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tot_used_4 !== $v) {
            $this->tot_used_4 = $v;
            $this->modifiedColumns[] = FubhPeer::TOT_USED_4;
        }


        return $this;
    } // setTotUsed4()

    /**
     * Set the value of [tot_used_5] column.
     *
     * @param  string $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setTotUsed5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tot_used_5 !== $v) {
            $this->tot_used_5 = $v;
            $this->modifiedColumns[] = FubhPeer::TOT_USED_5;
        }


        return $this;
    } // setTotUsed5()

    /**
     * Set the value of [threat_1] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setThreat1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->threat_1 !== $v) {
            $this->threat_1 = $v;
            $this->modifiedColumns[] = FubhPeer::THREAT_1;
        }


        return $this;
    } // setThreat1()

    /**
     * Set the value of [threat_2] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setThreat2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->threat_2 !== $v) {
            $this->threat_2 = $v;
            $this->modifiedColumns[] = FubhPeer::THREAT_2;
        }


        return $this;
    } // setThreat2()

    /**
     * Set the value of [threat_3] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setThreat3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->threat_3 !== $v) {
            $this->threat_3 = $v;
            $this->modifiedColumns[] = FubhPeer::THREAT_3;
        }


        return $this;
    } // setThreat3()

    /**
     * Set the value of [threat_4] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setThreat4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->threat_4 !== $v) {
            $this->threat_4 = $v;
            $this->modifiedColumns[] = FubhPeer::THREAT_4;
        }


        return $this;
    } // setThreat4()

    /**
     * Set the value of [threat_5] column.
     *
     * @param  string $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setThreat5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->threat_5 !== $v) {
            $this->threat_5 = $v;
            $this->modifiedColumns[] = FubhPeer::THREAT_5;
        }


        return $this;
    } // setThreat5()

    /**
     * Set the value of [intro_1] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setIntro1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->intro_1 !== $v) {
            $this->intro_1 = $v;
            $this->modifiedColumns[] = FubhPeer::INTRO_1;
        }


        return $this;
    } // setIntro1()

    /**
     * Set the value of [intro_2] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setIntro2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->intro_2 !== $v) {
            $this->intro_2 = $v;
            $this->modifiedColumns[] = FubhPeer::INTRO_2;
        }


        return $this;
    } // setIntro2()

    /**
     * Set the value of [intro_3] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setIntro3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->intro_3 !== $v) {
            $this->intro_3 = $v;
            $this->modifiedColumns[] = FubhPeer::INTRO_3;
        }


        return $this;
    } // setIntro3()

    /**
     * Set the value of [intro_4] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setIntro4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->intro_4 !== $v) {
            $this->intro_4 = $v;
            $this->modifiedColumns[] = FubhPeer::INTRO_4;
        }


        return $this;
    } // setIntro4()

    /**
     * Set the value of [intro_5] column.
     *
     * @param  string $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setIntro5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intro_5 !== $v) {
            $this->intro_5 = $v;
            $this->modifiedColumns[] = FubhPeer::INTRO_5;
        }


        return $this;
    } // setIntro5()

    /**
     * Set the value of [danger_1] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setDanger1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->danger_1 !== $v) {
            $this->danger_1 = $v;
            $this->modifiedColumns[] = FubhPeer::DANGER_1;
        }


        return $this;
    } // setDanger1()

    /**
     * Set the value of [danger_2] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setDanger2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->danger_2 !== $v) {
            $this->danger_2 = $v;
            $this->modifiedColumns[] = FubhPeer::DANGER_2;
        }


        return $this;
    } // setDanger2()

    /**
     * Set the value of [danger_3] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setDanger3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->danger_3 !== $v) {
            $this->danger_3 = $v;
            $this->modifiedColumns[] = FubhPeer::DANGER_3;
        }


        return $this;
    } // setDanger3()

    /**
     * Set the value of [danger_4] column.
     *
     * @param  double $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setDanger4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->danger_4 !== $v) {
            $this->danger_4 = $v;
            $this->modifiedColumns[] = FubhPeer::DANGER_4;
        }


        return $this;
    } // setDanger4()

    /**
     * Set the value of [danger_5] column.
     *
     * @param  string $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setDanger5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->danger_5 !== $v) {
            $this->danger_5 = $v;
            $this->modifiedColumns[] = FubhPeer::DANGER_5;
        }


        return $this;
    } // setDanger5()

    /**
     * Set the value of [note] column.
     *
     * @param  string $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setNote($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->note !== $v) {
            $this->note = $v;
            $this->modifiedColumns[] = FubhPeer::NOTE;
        }


        return $this;
    } // setNote()

    /**
     * Set the value of [no_species] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setNoSpecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->no_species !== $v) {
            $this->no_species = $v;
            $this->modifiedColumns[] = FubhPeer::NO_SPECIES;
        }


        return $this;
    } // setNoSpecies()

    /**
     * Set the value of [no_fresh] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setNoFresh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->no_fresh !== $v) {
            $this->no_fresh = $v;
            $this->modifiedColumns[] = FubhPeer::NO_FRESH;
        }


        return $this;
    } // setNoFresh()

    /**
     * Set the value of [no_marine] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setNoMarine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->no_marine !== $v) {
            $this->no_marine = $v;
            $this->modifiedColumns[] = FubhPeer::NO_MARINE;
        }


        return $this;
    } // setNoMarine()

    /**
     * Set the value of [no_brackish] column.
     *
     * @param  int $v new value
     * @return Fubh The current object (for fluent API support)
     */
    public function setNoBrackish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->no_brackish !== $v) {
            $this->no_brackish = $v;
            $this->modifiedColumns[] = FubhPeer::NO_BRACKISH;
        }


        return $this;
    } // setNoBrackish()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Fubh The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = FubhPeer::TS;
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
            if ($this->extant_finfish_1 !== 0) {
                return false;
            }

            if ($this->extant_finfish_2 !== 0) {
                return false;
            }

            if ($this->extant_finfish_3 !== 0) {
                return false;
            }

            if ($this->extant_finfish_4 !== 0) {
                return false;
            }

            if ($this->used_fisheries_1 !== 0) {
                return false;
            }

            if ($this->used_fisheries_2 !== 0) {
                return false;
            }

            if ($this->used_fisheries_3 !== 0) {
                return false;
            }

            if ($this->used_fisheries_4 !== 0) {
                return false;
            }

            if ($this->used_aquac_1 !== 0) {
                return false;
            }

            if ($this->used_aquac_2 !== 0) {
                return false;
            }

            if ($this->used_aquac_3 !== 0) {
                return false;
            }

            if ($this->used_aquac_4 !== 0) {
                return false;
            }

            if ($this->used_bait_1 !== 0) {
                return false;
            }

            if ($this->used_bait_2 !== 0) {
                return false;
            }

            if ($this->used_bait_3 !== 0) {
                return false;
            }

            if ($this->used_bait_4 !== 0) {
                return false;
            }

            if ($this->used_trade_1 !== 0) {
                return false;
            }

            if ($this->used_trade_2 !== 0) {
                return false;
            }

            if ($this->used_trade_3 !== 0) {
                return false;
            }

            if ($this->used_trade_4 !== 0) {
                return false;
            }

            if ($this->trade_marine_1 !== 0) {
                return false;
            }

            if ($this->trade_marine_2 !== 0) {
                return false;
            }

            if ($this->trade_marine_3 !== 0) {
                return false;
            }

            if ($this->trade_marine_4 !== 0) {
                return false;
            }

            if ($this->trade_fresh_1 !== 0) {
                return false;
            }

            if ($this->trade_fresh_2 !== 0) {
                return false;
            }

            if ($this->trade_fresh_3 !== 0) {
                return false;
            }

            if ($this->trade_fresh_4 !== 0) {
                return false;
            }

            if ($this->trade_bred_1 !== 0) {
                return false;
            }

            if ($this->trade_bred_2 !== 0) {
                return false;
            }

            if ($this->trade_bred_3 !== 0) {
                return false;
            }

            if ($this->trade_bred_4 !== 0) {
                return false;
            }

            if ($this->used_sport_1 !== 0) {
                return false;
            }

            if ($this->used_sport_2 !== 0) {
                return false;
            }

            if ($this->used_sport_3 !== 0) {
                return false;
            }

            if ($this->used_sport_4 !== 0) {
                return false;
            }

            if ($this->tot_used_1 !== 0) {
                return false;
            }

            if ($this->tot_used_2 !== 0) {
                return false;
            }

            if ($this->tot_used_3 !== 0) {
                return false;
            }

            if ($this->tot_used_4 !== 0) {
                return false;
            }

            if ($this->threat_1 !== 0) {
                return false;
            }

            if ($this->threat_2 !== 0) {
                return false;
            }

            if ($this->threat_3 !== 0) {
                return false;
            }

            if ($this->threat_4 !== 0) {
                return false;
            }

            if ($this->intro_1 !== 0) {
                return false;
            }

            if ($this->intro_2 !== 0) {
                return false;
            }

            if ($this->intro_3 !== 0) {
                return false;
            }

            if ($this->intro_4 !== 0) {
                return false;
            }

            if ($this->danger_1 !== 0) {
                return false;
            }

            if ($this->danger_2 !== 0) {
                return false;
            }

            if ($this->danger_3 !== 0) {
                return false;
            }

            if ($this->danger_4 !== 0) {
                return false;
            }

            if ($this->no_species !== 0) {
                return false;
            }

            if ($this->no_fresh !== 0) {
                return false;
            }

            if ($this->no_marine !== 0) {
                return false;
            }

            if ($this->no_brackish !== 0) {
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

            $this->print_date_byskit = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->active = ($row[$startcol + 1] !== null) ? (boolean) $row[$startcol + 1] : null;
            $this->period = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->extant_finfish_1 = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->extant_finfish_2 = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
            $this->extant_finfish_3 = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->extant_finfish_4 = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->extant_finfish_5 = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->used_fisheries_1 = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->used_fisheries_2 = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->used_fisheries_3 = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->used_fisheries_4 = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->used_fisheries_5 = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->used_aquac_1 = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->used_aquac_2 = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->used_aquac_3 = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->used_aquac_4 = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->used_aquac_5 = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->used_bait_1 = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->used_bait_2 = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->used_bait_3 = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->used_bait_4 = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->used_bait_5 = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->used_trade_1 = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->used_trade_2 = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
            $this->used_trade_3 = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->used_trade_4 = ($row[$startcol + 26] !== null) ? (double) $row[$startcol + 26] : null;
            $this->used_trade_5 = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->trade_marine_1 = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->trade_marine_2 = ($row[$startcol + 29] !== null) ? (double) $row[$startcol + 29] : null;
            $this->trade_marine_3 = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->trade_marine_4 = ($row[$startcol + 31] !== null) ? (double) $row[$startcol + 31] : null;
            $this->trade_marine_5 = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->trade_fresh_1 = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->trade_fresh_2 = ($row[$startcol + 34] !== null) ? (double) $row[$startcol + 34] : null;
            $this->trade_fresh_3 = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->trade_fresh_4 = ($row[$startcol + 36] !== null) ? (double) $row[$startcol + 36] : null;
            $this->trade_fresh_5 = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->trade_bred_1 = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->trade_bred_2 = ($row[$startcol + 39] !== null) ? (double) $row[$startcol + 39] : null;
            $this->trade_bred_3 = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->trade_bred_4 = ($row[$startcol + 41] !== null) ? (double) $row[$startcol + 41] : null;
            $this->trade_bred_5 = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->used_sport_1 = ($row[$startcol + 43] !== null) ? (int) $row[$startcol + 43] : null;
            $this->used_sport_2 = ($row[$startcol + 44] !== null) ? (double) $row[$startcol + 44] : null;
            $this->used_sport_3 = ($row[$startcol + 45] !== null) ? (int) $row[$startcol + 45] : null;
            $this->used_sport_4 = ($row[$startcol + 46] !== null) ? (double) $row[$startcol + 46] : null;
            $this->used_sport_5 = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->tot_used_1 = ($row[$startcol + 48] !== null) ? (int) $row[$startcol + 48] : null;
            $this->tot_used_2 = ($row[$startcol + 49] !== null) ? (double) $row[$startcol + 49] : null;
            $this->tot_used_3 = ($row[$startcol + 50] !== null) ? (int) $row[$startcol + 50] : null;
            $this->tot_used_4 = ($row[$startcol + 51] !== null) ? (double) $row[$startcol + 51] : null;
            $this->tot_used_5 = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->threat_1 = ($row[$startcol + 53] !== null) ? (int) $row[$startcol + 53] : null;
            $this->threat_2 = ($row[$startcol + 54] !== null) ? (double) $row[$startcol + 54] : null;
            $this->threat_3 = ($row[$startcol + 55] !== null) ? (int) $row[$startcol + 55] : null;
            $this->threat_4 = ($row[$startcol + 56] !== null) ? (double) $row[$startcol + 56] : null;
            $this->threat_5 = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->intro_1 = ($row[$startcol + 58] !== null) ? (int) $row[$startcol + 58] : null;
            $this->intro_2 = ($row[$startcol + 59] !== null) ? (double) $row[$startcol + 59] : null;
            $this->intro_3 = ($row[$startcol + 60] !== null) ? (int) $row[$startcol + 60] : null;
            $this->intro_4 = ($row[$startcol + 61] !== null) ? (double) $row[$startcol + 61] : null;
            $this->intro_5 = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->danger_1 = ($row[$startcol + 63] !== null) ? (int) $row[$startcol + 63] : null;
            $this->danger_2 = ($row[$startcol + 64] !== null) ? (double) $row[$startcol + 64] : null;
            $this->danger_3 = ($row[$startcol + 65] !== null) ? (int) $row[$startcol + 65] : null;
            $this->danger_4 = ($row[$startcol + 66] !== null) ? (double) $row[$startcol + 66] : null;
            $this->danger_5 = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->note = ($row[$startcol + 68] !== null) ? (string) $row[$startcol + 68] : null;
            $this->no_species = ($row[$startcol + 69] !== null) ? (int) $row[$startcol + 69] : null;
            $this->no_fresh = ($row[$startcol + 70] !== null) ? (int) $row[$startcol + 70] : null;
            $this->no_marine = ($row[$startcol + 71] !== null) ? (int) $row[$startcol + 71] : null;
            $this->no_brackish = ($row[$startcol + 72] !== null) ? (int) $row[$startcol + 72] : null;
            $this->ts = ($row[$startcol + 73] !== null) ? (string) $row[$startcol + 73] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 74; // 74 = FubhPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Fubh object", $e);
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
            $con = Propel::getConnection(FubhPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FubhPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(FubhPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FubhQuery::create()
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
            $con = Propel::getConnection(FubhPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                FubhPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(FubhPeer::PRINT_DATE_BYSKIT)) {
            $modifiedColumns[':p' . $index++]  = '`print_date_bySkit`';
        }
        if ($this->isColumnModified(FubhPeer::ACTIVE)) {
            $modifiedColumns[':p' . $index++]  = '`active`';
        }
        if ($this->isColumnModified(FubhPeer::PERIOD)) {
            $modifiedColumns[':p' . $index++]  = '`Period`';
        }
        if ($this->isColumnModified(FubhPeer::EXTANT_FINFISH_1)) {
            $modifiedColumns[':p' . $index++]  = '`extant_finfish_1`';
        }
        if ($this->isColumnModified(FubhPeer::EXTANT_FINFISH_2)) {
            $modifiedColumns[':p' . $index++]  = '`extant_finfish_2`';
        }
        if ($this->isColumnModified(FubhPeer::EXTANT_FINFISH_3)) {
            $modifiedColumns[':p' . $index++]  = '`extant_finfish_3`';
        }
        if ($this->isColumnModified(FubhPeer::EXTANT_FINFISH_4)) {
            $modifiedColumns[':p' . $index++]  = '`extant_finfish_4`';
        }
        if ($this->isColumnModified(FubhPeer::EXTANT_FINFISH_5)) {
            $modifiedColumns[':p' . $index++]  = '`extant_finfish_5`';
        }
        if ($this->isColumnModified(FubhPeer::USED_FISHERIES_1)) {
            $modifiedColumns[':p' . $index++]  = '`used_fisheries_1`';
        }
        if ($this->isColumnModified(FubhPeer::USED_FISHERIES_2)) {
            $modifiedColumns[':p' . $index++]  = '`used_fisheries_2`';
        }
        if ($this->isColumnModified(FubhPeer::USED_FISHERIES_3)) {
            $modifiedColumns[':p' . $index++]  = '`used_fisheries_3`';
        }
        if ($this->isColumnModified(FubhPeer::USED_FISHERIES_4)) {
            $modifiedColumns[':p' . $index++]  = '`used_fisheries_4`';
        }
        if ($this->isColumnModified(FubhPeer::USED_FISHERIES_5)) {
            $modifiedColumns[':p' . $index++]  = '`used_fisheries_5`';
        }
        if ($this->isColumnModified(FubhPeer::USED_AQUAC_1)) {
            $modifiedColumns[':p' . $index++]  = '`used_aquac_1`';
        }
        if ($this->isColumnModified(FubhPeer::USED_AQUAC_2)) {
            $modifiedColumns[':p' . $index++]  = '`used_aquac_2`';
        }
        if ($this->isColumnModified(FubhPeer::USED_AQUAC_3)) {
            $modifiedColumns[':p' . $index++]  = '`used_aquac_3`';
        }
        if ($this->isColumnModified(FubhPeer::USED_AQUAC_4)) {
            $modifiedColumns[':p' . $index++]  = '`used_aquac_4`';
        }
        if ($this->isColumnModified(FubhPeer::USED_AQUAC_5)) {
            $modifiedColumns[':p' . $index++]  = '`used_aquac_5`';
        }
        if ($this->isColumnModified(FubhPeer::USED_BAIT_1)) {
            $modifiedColumns[':p' . $index++]  = '`used_bait_1`';
        }
        if ($this->isColumnModified(FubhPeer::USED_BAIT_2)) {
            $modifiedColumns[':p' . $index++]  = '`used_bait_2`';
        }
        if ($this->isColumnModified(FubhPeer::USED_BAIT_3)) {
            $modifiedColumns[':p' . $index++]  = '`used_bait_3`';
        }
        if ($this->isColumnModified(FubhPeer::USED_BAIT_4)) {
            $modifiedColumns[':p' . $index++]  = '`used_bait_4`';
        }
        if ($this->isColumnModified(FubhPeer::USED_BAIT_5)) {
            $modifiedColumns[':p' . $index++]  = '`used_bait_5`';
        }
        if ($this->isColumnModified(FubhPeer::USED_TRADE_1)) {
            $modifiedColumns[':p' . $index++]  = '`used_trade_1`';
        }
        if ($this->isColumnModified(FubhPeer::USED_TRADE_2)) {
            $modifiedColumns[':p' . $index++]  = '`used_trade_2`';
        }
        if ($this->isColumnModified(FubhPeer::USED_TRADE_3)) {
            $modifiedColumns[':p' . $index++]  = '`used_trade_3`';
        }
        if ($this->isColumnModified(FubhPeer::USED_TRADE_4)) {
            $modifiedColumns[':p' . $index++]  = '`used_trade_4`';
        }
        if ($this->isColumnModified(FubhPeer::USED_TRADE_5)) {
            $modifiedColumns[':p' . $index++]  = '`used_trade_5`';
        }
        if ($this->isColumnModified(FubhPeer::TRADE_MARINE_1)) {
            $modifiedColumns[':p' . $index++]  = '`trade_marine_1`';
        }
        if ($this->isColumnModified(FubhPeer::TRADE_MARINE_2)) {
            $modifiedColumns[':p' . $index++]  = '`trade_marine_2`';
        }
        if ($this->isColumnModified(FubhPeer::TRADE_MARINE_3)) {
            $modifiedColumns[':p' . $index++]  = '`trade_marine_3`';
        }
        if ($this->isColumnModified(FubhPeer::TRADE_MARINE_4)) {
            $modifiedColumns[':p' . $index++]  = '`trade_marine_4`';
        }
        if ($this->isColumnModified(FubhPeer::TRADE_MARINE_5)) {
            $modifiedColumns[':p' . $index++]  = '`trade_marine_5`';
        }
        if ($this->isColumnModified(FubhPeer::TRADE_FRESH_1)) {
            $modifiedColumns[':p' . $index++]  = '`trade_fresh_1`';
        }
        if ($this->isColumnModified(FubhPeer::TRADE_FRESH_2)) {
            $modifiedColumns[':p' . $index++]  = '`trade_fresh_2`';
        }
        if ($this->isColumnModified(FubhPeer::TRADE_FRESH_3)) {
            $modifiedColumns[':p' . $index++]  = '`trade_fresh_3`';
        }
        if ($this->isColumnModified(FubhPeer::TRADE_FRESH_4)) {
            $modifiedColumns[':p' . $index++]  = '`trade_fresh_4`';
        }
        if ($this->isColumnModified(FubhPeer::TRADE_FRESH_5)) {
            $modifiedColumns[':p' . $index++]  = '`trade_fresh_5`';
        }
        if ($this->isColumnModified(FubhPeer::TRADE_BRED_1)) {
            $modifiedColumns[':p' . $index++]  = '`trade_bred_1`';
        }
        if ($this->isColumnModified(FubhPeer::TRADE_BRED_2)) {
            $modifiedColumns[':p' . $index++]  = '`trade_bred_2`';
        }
        if ($this->isColumnModified(FubhPeer::TRADE_BRED_3)) {
            $modifiedColumns[':p' . $index++]  = '`trade_bred_3`';
        }
        if ($this->isColumnModified(FubhPeer::TRADE_BRED_4)) {
            $modifiedColumns[':p' . $index++]  = '`trade_bred_4`';
        }
        if ($this->isColumnModified(FubhPeer::TRADE_BRED_5)) {
            $modifiedColumns[':p' . $index++]  = '`trade_bred_5`';
        }
        if ($this->isColumnModified(FubhPeer::USED_SPORT_1)) {
            $modifiedColumns[':p' . $index++]  = '`used_sport_1`';
        }
        if ($this->isColumnModified(FubhPeer::USED_SPORT_2)) {
            $modifiedColumns[':p' . $index++]  = '`used_sport_2`';
        }
        if ($this->isColumnModified(FubhPeer::USED_SPORT_3)) {
            $modifiedColumns[':p' . $index++]  = '`used_sport_3`';
        }
        if ($this->isColumnModified(FubhPeer::USED_SPORT_4)) {
            $modifiedColumns[':p' . $index++]  = '`used_sport_4`';
        }
        if ($this->isColumnModified(FubhPeer::USED_SPORT_5)) {
            $modifiedColumns[':p' . $index++]  = '`used_sport_5`';
        }
        if ($this->isColumnModified(FubhPeer::TOT_USED_1)) {
            $modifiedColumns[':p' . $index++]  = '`tot_used_1`';
        }
        if ($this->isColumnModified(FubhPeer::TOT_USED_2)) {
            $modifiedColumns[':p' . $index++]  = '`tot_used_2`';
        }
        if ($this->isColumnModified(FubhPeer::TOT_USED_3)) {
            $modifiedColumns[':p' . $index++]  = '`tot_used_3`';
        }
        if ($this->isColumnModified(FubhPeer::TOT_USED_4)) {
            $modifiedColumns[':p' . $index++]  = '`tot_used_4`';
        }
        if ($this->isColumnModified(FubhPeer::TOT_USED_5)) {
            $modifiedColumns[':p' . $index++]  = '`tot_used_5`';
        }
        if ($this->isColumnModified(FubhPeer::THREAT_1)) {
            $modifiedColumns[':p' . $index++]  = '`threat_1`';
        }
        if ($this->isColumnModified(FubhPeer::THREAT_2)) {
            $modifiedColumns[':p' . $index++]  = '`threat_2`';
        }
        if ($this->isColumnModified(FubhPeer::THREAT_3)) {
            $modifiedColumns[':p' . $index++]  = '`threat_3`';
        }
        if ($this->isColumnModified(FubhPeer::THREAT_4)) {
            $modifiedColumns[':p' . $index++]  = '`threat_4`';
        }
        if ($this->isColumnModified(FubhPeer::THREAT_5)) {
            $modifiedColumns[':p' . $index++]  = '`threat_5`';
        }
        if ($this->isColumnModified(FubhPeer::INTRO_1)) {
            $modifiedColumns[':p' . $index++]  = '`intro_1`';
        }
        if ($this->isColumnModified(FubhPeer::INTRO_2)) {
            $modifiedColumns[':p' . $index++]  = '`intro_2`';
        }
        if ($this->isColumnModified(FubhPeer::INTRO_3)) {
            $modifiedColumns[':p' . $index++]  = '`intro_3`';
        }
        if ($this->isColumnModified(FubhPeer::INTRO_4)) {
            $modifiedColumns[':p' . $index++]  = '`intro_4`';
        }
        if ($this->isColumnModified(FubhPeer::INTRO_5)) {
            $modifiedColumns[':p' . $index++]  = '`intro_5`';
        }
        if ($this->isColumnModified(FubhPeer::DANGER_1)) {
            $modifiedColumns[':p' . $index++]  = '`danger_1`';
        }
        if ($this->isColumnModified(FubhPeer::DANGER_2)) {
            $modifiedColumns[':p' . $index++]  = '`danger_2`';
        }
        if ($this->isColumnModified(FubhPeer::DANGER_3)) {
            $modifiedColumns[':p' . $index++]  = '`danger_3`';
        }
        if ($this->isColumnModified(FubhPeer::DANGER_4)) {
            $modifiedColumns[':p' . $index++]  = '`danger_4`';
        }
        if ($this->isColumnModified(FubhPeer::DANGER_5)) {
            $modifiedColumns[':p' . $index++]  = '`danger_5`';
        }
        if ($this->isColumnModified(FubhPeer::NOTE)) {
            $modifiedColumns[':p' . $index++]  = '`note`';
        }
        if ($this->isColumnModified(FubhPeer::NO_SPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`no_species`';
        }
        if ($this->isColumnModified(FubhPeer::NO_FRESH)) {
            $modifiedColumns[':p' . $index++]  = '`no_fresh`';
        }
        if ($this->isColumnModified(FubhPeer::NO_MARINE)) {
            $modifiedColumns[':p' . $index++]  = '`no_marine`';
        }
        if ($this->isColumnModified(FubhPeer::NO_BRACKISH)) {
            $modifiedColumns[':p' . $index++]  = '`no_brackish`';
        }
        if ($this->isColumnModified(FubhPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `fubh` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`print_date_bySkit`':
                        $stmt->bindValue($identifier, $this->print_date_byskit, PDO::PARAM_STR);
                        break;
                    case '`active`':
                        $stmt->bindValue($identifier, (int) $this->active, PDO::PARAM_INT);
                        break;
                    case '`Period`':
                        $stmt->bindValue($identifier, $this->period, PDO::PARAM_STR);
                        break;
                    case '`extant_finfish_1`':
                        $stmt->bindValue($identifier, $this->extant_finfish_1, PDO::PARAM_INT);
                        break;
                    case '`extant_finfish_2`':
                        $stmt->bindValue($identifier, $this->extant_finfish_2, PDO::PARAM_STR);
                        break;
                    case '`extant_finfish_3`':
                        $stmt->bindValue($identifier, $this->extant_finfish_3, PDO::PARAM_INT);
                        break;
                    case '`extant_finfish_4`':
                        $stmt->bindValue($identifier, $this->extant_finfish_4, PDO::PARAM_STR);
                        break;
                    case '`extant_finfish_5`':
                        $stmt->bindValue($identifier, $this->extant_finfish_5, PDO::PARAM_STR);
                        break;
                    case '`used_fisheries_1`':
                        $stmt->bindValue($identifier, $this->used_fisheries_1, PDO::PARAM_INT);
                        break;
                    case '`used_fisheries_2`':
                        $stmt->bindValue($identifier, $this->used_fisheries_2, PDO::PARAM_STR);
                        break;
                    case '`used_fisheries_3`':
                        $stmt->bindValue($identifier, $this->used_fisheries_3, PDO::PARAM_INT);
                        break;
                    case '`used_fisheries_4`':
                        $stmt->bindValue($identifier, $this->used_fisheries_4, PDO::PARAM_STR);
                        break;
                    case '`used_fisheries_5`':
                        $stmt->bindValue($identifier, $this->used_fisheries_5, PDO::PARAM_STR);
                        break;
                    case '`used_aquac_1`':
                        $stmt->bindValue($identifier, $this->used_aquac_1, PDO::PARAM_INT);
                        break;
                    case '`used_aquac_2`':
                        $stmt->bindValue($identifier, $this->used_aquac_2, PDO::PARAM_STR);
                        break;
                    case '`used_aquac_3`':
                        $stmt->bindValue($identifier, $this->used_aquac_3, PDO::PARAM_INT);
                        break;
                    case '`used_aquac_4`':
                        $stmt->bindValue($identifier, $this->used_aquac_4, PDO::PARAM_STR);
                        break;
                    case '`used_aquac_5`':
                        $stmt->bindValue($identifier, $this->used_aquac_5, PDO::PARAM_STR);
                        break;
                    case '`used_bait_1`':
                        $stmt->bindValue($identifier, $this->used_bait_1, PDO::PARAM_INT);
                        break;
                    case '`used_bait_2`':
                        $stmt->bindValue($identifier, $this->used_bait_2, PDO::PARAM_STR);
                        break;
                    case '`used_bait_3`':
                        $stmt->bindValue($identifier, $this->used_bait_3, PDO::PARAM_INT);
                        break;
                    case '`used_bait_4`':
                        $stmt->bindValue($identifier, $this->used_bait_4, PDO::PARAM_STR);
                        break;
                    case '`used_bait_5`':
                        $stmt->bindValue($identifier, $this->used_bait_5, PDO::PARAM_STR);
                        break;
                    case '`used_trade_1`':
                        $stmt->bindValue($identifier, $this->used_trade_1, PDO::PARAM_INT);
                        break;
                    case '`used_trade_2`':
                        $stmt->bindValue($identifier, $this->used_trade_2, PDO::PARAM_STR);
                        break;
                    case '`used_trade_3`':
                        $stmt->bindValue($identifier, $this->used_trade_3, PDO::PARAM_INT);
                        break;
                    case '`used_trade_4`':
                        $stmt->bindValue($identifier, $this->used_trade_4, PDO::PARAM_STR);
                        break;
                    case '`used_trade_5`':
                        $stmt->bindValue($identifier, $this->used_trade_5, PDO::PARAM_STR);
                        break;
                    case '`trade_marine_1`':
                        $stmt->bindValue($identifier, $this->trade_marine_1, PDO::PARAM_INT);
                        break;
                    case '`trade_marine_2`':
                        $stmt->bindValue($identifier, $this->trade_marine_2, PDO::PARAM_STR);
                        break;
                    case '`trade_marine_3`':
                        $stmt->bindValue($identifier, $this->trade_marine_3, PDO::PARAM_INT);
                        break;
                    case '`trade_marine_4`':
                        $stmt->bindValue($identifier, $this->trade_marine_4, PDO::PARAM_STR);
                        break;
                    case '`trade_marine_5`':
                        $stmt->bindValue($identifier, $this->trade_marine_5, PDO::PARAM_STR);
                        break;
                    case '`trade_fresh_1`':
                        $stmt->bindValue($identifier, $this->trade_fresh_1, PDO::PARAM_INT);
                        break;
                    case '`trade_fresh_2`':
                        $stmt->bindValue($identifier, $this->trade_fresh_2, PDO::PARAM_STR);
                        break;
                    case '`trade_fresh_3`':
                        $stmt->bindValue($identifier, $this->trade_fresh_3, PDO::PARAM_INT);
                        break;
                    case '`trade_fresh_4`':
                        $stmt->bindValue($identifier, $this->trade_fresh_4, PDO::PARAM_STR);
                        break;
                    case '`trade_fresh_5`':
                        $stmt->bindValue($identifier, $this->trade_fresh_5, PDO::PARAM_STR);
                        break;
                    case '`trade_bred_1`':
                        $stmt->bindValue($identifier, $this->trade_bred_1, PDO::PARAM_INT);
                        break;
                    case '`trade_bred_2`':
                        $stmt->bindValue($identifier, $this->trade_bred_2, PDO::PARAM_STR);
                        break;
                    case '`trade_bred_3`':
                        $stmt->bindValue($identifier, $this->trade_bred_3, PDO::PARAM_INT);
                        break;
                    case '`trade_bred_4`':
                        $stmt->bindValue($identifier, $this->trade_bred_4, PDO::PARAM_STR);
                        break;
                    case '`trade_bred_5`':
                        $stmt->bindValue($identifier, $this->trade_bred_5, PDO::PARAM_STR);
                        break;
                    case '`used_sport_1`':
                        $stmt->bindValue($identifier, $this->used_sport_1, PDO::PARAM_INT);
                        break;
                    case '`used_sport_2`':
                        $stmt->bindValue($identifier, $this->used_sport_2, PDO::PARAM_STR);
                        break;
                    case '`used_sport_3`':
                        $stmt->bindValue($identifier, $this->used_sport_3, PDO::PARAM_INT);
                        break;
                    case '`used_sport_4`':
                        $stmt->bindValue($identifier, $this->used_sport_4, PDO::PARAM_STR);
                        break;
                    case '`used_sport_5`':
                        $stmt->bindValue($identifier, $this->used_sport_5, PDO::PARAM_STR);
                        break;
                    case '`tot_used_1`':
                        $stmt->bindValue($identifier, $this->tot_used_1, PDO::PARAM_INT);
                        break;
                    case '`tot_used_2`':
                        $stmt->bindValue($identifier, $this->tot_used_2, PDO::PARAM_STR);
                        break;
                    case '`tot_used_3`':
                        $stmt->bindValue($identifier, $this->tot_used_3, PDO::PARAM_INT);
                        break;
                    case '`tot_used_4`':
                        $stmt->bindValue($identifier, $this->tot_used_4, PDO::PARAM_STR);
                        break;
                    case '`tot_used_5`':
                        $stmt->bindValue($identifier, $this->tot_used_5, PDO::PARAM_STR);
                        break;
                    case '`threat_1`':
                        $stmt->bindValue($identifier, $this->threat_1, PDO::PARAM_INT);
                        break;
                    case '`threat_2`':
                        $stmt->bindValue($identifier, $this->threat_2, PDO::PARAM_STR);
                        break;
                    case '`threat_3`':
                        $stmt->bindValue($identifier, $this->threat_3, PDO::PARAM_INT);
                        break;
                    case '`threat_4`':
                        $stmt->bindValue($identifier, $this->threat_4, PDO::PARAM_STR);
                        break;
                    case '`threat_5`':
                        $stmt->bindValue($identifier, $this->threat_5, PDO::PARAM_STR);
                        break;
                    case '`intro_1`':
                        $stmt->bindValue($identifier, $this->intro_1, PDO::PARAM_INT);
                        break;
                    case '`intro_2`':
                        $stmt->bindValue($identifier, $this->intro_2, PDO::PARAM_STR);
                        break;
                    case '`intro_3`':
                        $stmt->bindValue($identifier, $this->intro_3, PDO::PARAM_INT);
                        break;
                    case '`intro_4`':
                        $stmt->bindValue($identifier, $this->intro_4, PDO::PARAM_STR);
                        break;
                    case '`intro_5`':
                        $stmt->bindValue($identifier, $this->intro_5, PDO::PARAM_STR);
                        break;
                    case '`danger_1`':
                        $stmt->bindValue($identifier, $this->danger_1, PDO::PARAM_INT);
                        break;
                    case '`danger_2`':
                        $stmt->bindValue($identifier, $this->danger_2, PDO::PARAM_STR);
                        break;
                    case '`danger_3`':
                        $stmt->bindValue($identifier, $this->danger_3, PDO::PARAM_INT);
                        break;
                    case '`danger_4`':
                        $stmt->bindValue($identifier, $this->danger_4, PDO::PARAM_STR);
                        break;
                    case '`danger_5`':
                        $stmt->bindValue($identifier, $this->danger_5, PDO::PARAM_STR);
                        break;
                    case '`note`':
                        $stmt->bindValue($identifier, $this->note, PDO::PARAM_STR);
                        break;
                    case '`no_species`':
                        $stmt->bindValue($identifier, $this->no_species, PDO::PARAM_INT);
                        break;
                    case '`no_fresh`':
                        $stmt->bindValue($identifier, $this->no_fresh, PDO::PARAM_INT);
                        break;
                    case '`no_marine`':
                        $stmt->bindValue($identifier, $this->no_marine, PDO::PARAM_INT);
                        break;
                    case '`no_brackish`':
                        $stmt->bindValue($identifier, $this->no_brackish, PDO::PARAM_INT);
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


            if (($retval = FubhPeer::doValidate($this, $columns)) !== true) {
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
        $pos = FubhPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getPrintDateByskit();
                break;
            case 1:
                return $this->getActive();
                break;
            case 2:
                return $this->getPeriod();
                break;
            case 3:
                return $this->getExtantFinfish1();
                break;
            case 4:
                return $this->getExtantFinfish2();
                break;
            case 5:
                return $this->getExtantFinfish3();
                break;
            case 6:
                return $this->getExtantFinfish4();
                break;
            case 7:
                return $this->getExtantFinfish5();
                break;
            case 8:
                return $this->getUsedFisheries1();
                break;
            case 9:
                return $this->getUsedFisheries2();
                break;
            case 10:
                return $this->getUsedFisheries3();
                break;
            case 11:
                return $this->getUsedFisheries4();
                break;
            case 12:
                return $this->getUsedFisheries5();
                break;
            case 13:
                return $this->getUsedAquac1();
                break;
            case 14:
                return $this->getUsedAquac2();
                break;
            case 15:
                return $this->getUsedAquac3();
                break;
            case 16:
                return $this->getUsedAquac4();
                break;
            case 17:
                return $this->getUsedAquac5();
                break;
            case 18:
                return $this->getUsedBait1();
                break;
            case 19:
                return $this->getUsedBait2();
                break;
            case 20:
                return $this->getUsedBait3();
                break;
            case 21:
                return $this->getUsedBait4();
                break;
            case 22:
                return $this->getUsedBait5();
                break;
            case 23:
                return $this->getUsedTrade1();
                break;
            case 24:
                return $this->getUsedTrade2();
                break;
            case 25:
                return $this->getUsedTrade3();
                break;
            case 26:
                return $this->getUsedTrade4();
                break;
            case 27:
                return $this->getUsedTrade5();
                break;
            case 28:
                return $this->getTradeMarine1();
                break;
            case 29:
                return $this->getTradeMarine2();
                break;
            case 30:
                return $this->getTradeMarine3();
                break;
            case 31:
                return $this->getTradeMarine4();
                break;
            case 32:
                return $this->getTradeMarine5();
                break;
            case 33:
                return $this->getTradeFresh1();
                break;
            case 34:
                return $this->getTradeFresh2();
                break;
            case 35:
                return $this->getTradeFresh3();
                break;
            case 36:
                return $this->getTradeFresh4();
                break;
            case 37:
                return $this->getTradeFresh5();
                break;
            case 38:
                return $this->getTradeBred1();
                break;
            case 39:
                return $this->getTradeBred2();
                break;
            case 40:
                return $this->getTradeBred3();
                break;
            case 41:
                return $this->getTradeBred4();
                break;
            case 42:
                return $this->getTradeBred5();
                break;
            case 43:
                return $this->getUsedSport1();
                break;
            case 44:
                return $this->getUsedSport2();
                break;
            case 45:
                return $this->getUsedSport3();
                break;
            case 46:
                return $this->getUsedSport4();
                break;
            case 47:
                return $this->getUsedSport5();
                break;
            case 48:
                return $this->getTotUsed1();
                break;
            case 49:
                return $this->getTotUsed2();
                break;
            case 50:
                return $this->getTotUsed3();
                break;
            case 51:
                return $this->getTotUsed4();
                break;
            case 52:
                return $this->getTotUsed5();
                break;
            case 53:
                return $this->getThreat1();
                break;
            case 54:
                return $this->getThreat2();
                break;
            case 55:
                return $this->getThreat3();
                break;
            case 56:
                return $this->getThreat4();
                break;
            case 57:
                return $this->getThreat5();
                break;
            case 58:
                return $this->getIntro1();
                break;
            case 59:
                return $this->getIntro2();
                break;
            case 60:
                return $this->getIntro3();
                break;
            case 61:
                return $this->getIntro4();
                break;
            case 62:
                return $this->getIntro5();
                break;
            case 63:
                return $this->getDanger1();
                break;
            case 64:
                return $this->getDanger2();
                break;
            case 65:
                return $this->getDanger3();
                break;
            case 66:
                return $this->getDanger4();
                break;
            case 67:
                return $this->getDanger5();
                break;
            case 68:
                return $this->getNote();
                break;
            case 69:
                return $this->getNoSpecies();
                break;
            case 70:
                return $this->getNoFresh();
                break;
            case 71:
                return $this->getNoMarine();
                break;
            case 72:
                return $this->getNoBrackish();
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
        if (isset($alreadyDumpedObjects['Fubh'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Fubh'][$this->getPrimaryKey()] = true;
        $keys = FubhPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getPrintDateByskit(),
            $keys[1] => $this->getActive(),
            $keys[2] => $this->getPeriod(),
            $keys[3] => $this->getExtantFinfish1(),
            $keys[4] => $this->getExtantFinfish2(),
            $keys[5] => $this->getExtantFinfish3(),
            $keys[6] => $this->getExtantFinfish4(),
            $keys[7] => $this->getExtantFinfish5(),
            $keys[8] => $this->getUsedFisheries1(),
            $keys[9] => $this->getUsedFisheries2(),
            $keys[10] => $this->getUsedFisheries3(),
            $keys[11] => $this->getUsedFisheries4(),
            $keys[12] => $this->getUsedFisheries5(),
            $keys[13] => $this->getUsedAquac1(),
            $keys[14] => $this->getUsedAquac2(),
            $keys[15] => $this->getUsedAquac3(),
            $keys[16] => $this->getUsedAquac4(),
            $keys[17] => $this->getUsedAquac5(),
            $keys[18] => $this->getUsedBait1(),
            $keys[19] => $this->getUsedBait2(),
            $keys[20] => $this->getUsedBait3(),
            $keys[21] => $this->getUsedBait4(),
            $keys[22] => $this->getUsedBait5(),
            $keys[23] => $this->getUsedTrade1(),
            $keys[24] => $this->getUsedTrade2(),
            $keys[25] => $this->getUsedTrade3(),
            $keys[26] => $this->getUsedTrade4(),
            $keys[27] => $this->getUsedTrade5(),
            $keys[28] => $this->getTradeMarine1(),
            $keys[29] => $this->getTradeMarine2(),
            $keys[30] => $this->getTradeMarine3(),
            $keys[31] => $this->getTradeMarine4(),
            $keys[32] => $this->getTradeMarine5(),
            $keys[33] => $this->getTradeFresh1(),
            $keys[34] => $this->getTradeFresh2(),
            $keys[35] => $this->getTradeFresh3(),
            $keys[36] => $this->getTradeFresh4(),
            $keys[37] => $this->getTradeFresh5(),
            $keys[38] => $this->getTradeBred1(),
            $keys[39] => $this->getTradeBred2(),
            $keys[40] => $this->getTradeBred3(),
            $keys[41] => $this->getTradeBred4(),
            $keys[42] => $this->getTradeBred5(),
            $keys[43] => $this->getUsedSport1(),
            $keys[44] => $this->getUsedSport2(),
            $keys[45] => $this->getUsedSport3(),
            $keys[46] => $this->getUsedSport4(),
            $keys[47] => $this->getUsedSport5(),
            $keys[48] => $this->getTotUsed1(),
            $keys[49] => $this->getTotUsed2(),
            $keys[50] => $this->getTotUsed3(),
            $keys[51] => $this->getTotUsed4(),
            $keys[52] => $this->getTotUsed5(),
            $keys[53] => $this->getThreat1(),
            $keys[54] => $this->getThreat2(),
            $keys[55] => $this->getThreat3(),
            $keys[56] => $this->getThreat4(),
            $keys[57] => $this->getThreat5(),
            $keys[58] => $this->getIntro1(),
            $keys[59] => $this->getIntro2(),
            $keys[60] => $this->getIntro3(),
            $keys[61] => $this->getIntro4(),
            $keys[62] => $this->getIntro5(),
            $keys[63] => $this->getDanger1(),
            $keys[64] => $this->getDanger2(),
            $keys[65] => $this->getDanger3(),
            $keys[66] => $this->getDanger4(),
            $keys[67] => $this->getDanger5(),
            $keys[68] => $this->getNote(),
            $keys[69] => $this->getNoSpecies(),
            $keys[70] => $this->getNoFresh(),
            $keys[71] => $this->getNoMarine(),
            $keys[72] => $this->getNoBrackish(),
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
        $pos = FubhPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setPrintDateByskit($value);
                break;
            case 1:
                $this->setActive($value);
                break;
            case 2:
                $this->setPeriod($value);
                break;
            case 3:
                $this->setExtantFinfish1($value);
                break;
            case 4:
                $this->setExtantFinfish2($value);
                break;
            case 5:
                $this->setExtantFinfish3($value);
                break;
            case 6:
                $this->setExtantFinfish4($value);
                break;
            case 7:
                $this->setExtantFinfish5($value);
                break;
            case 8:
                $this->setUsedFisheries1($value);
                break;
            case 9:
                $this->setUsedFisheries2($value);
                break;
            case 10:
                $this->setUsedFisheries3($value);
                break;
            case 11:
                $this->setUsedFisheries4($value);
                break;
            case 12:
                $this->setUsedFisheries5($value);
                break;
            case 13:
                $this->setUsedAquac1($value);
                break;
            case 14:
                $this->setUsedAquac2($value);
                break;
            case 15:
                $this->setUsedAquac3($value);
                break;
            case 16:
                $this->setUsedAquac4($value);
                break;
            case 17:
                $this->setUsedAquac5($value);
                break;
            case 18:
                $this->setUsedBait1($value);
                break;
            case 19:
                $this->setUsedBait2($value);
                break;
            case 20:
                $this->setUsedBait3($value);
                break;
            case 21:
                $this->setUsedBait4($value);
                break;
            case 22:
                $this->setUsedBait5($value);
                break;
            case 23:
                $this->setUsedTrade1($value);
                break;
            case 24:
                $this->setUsedTrade2($value);
                break;
            case 25:
                $this->setUsedTrade3($value);
                break;
            case 26:
                $this->setUsedTrade4($value);
                break;
            case 27:
                $this->setUsedTrade5($value);
                break;
            case 28:
                $this->setTradeMarine1($value);
                break;
            case 29:
                $this->setTradeMarine2($value);
                break;
            case 30:
                $this->setTradeMarine3($value);
                break;
            case 31:
                $this->setTradeMarine4($value);
                break;
            case 32:
                $this->setTradeMarine5($value);
                break;
            case 33:
                $this->setTradeFresh1($value);
                break;
            case 34:
                $this->setTradeFresh2($value);
                break;
            case 35:
                $this->setTradeFresh3($value);
                break;
            case 36:
                $this->setTradeFresh4($value);
                break;
            case 37:
                $this->setTradeFresh5($value);
                break;
            case 38:
                $this->setTradeBred1($value);
                break;
            case 39:
                $this->setTradeBred2($value);
                break;
            case 40:
                $this->setTradeBred3($value);
                break;
            case 41:
                $this->setTradeBred4($value);
                break;
            case 42:
                $this->setTradeBred5($value);
                break;
            case 43:
                $this->setUsedSport1($value);
                break;
            case 44:
                $this->setUsedSport2($value);
                break;
            case 45:
                $this->setUsedSport3($value);
                break;
            case 46:
                $this->setUsedSport4($value);
                break;
            case 47:
                $this->setUsedSport5($value);
                break;
            case 48:
                $this->setTotUsed1($value);
                break;
            case 49:
                $this->setTotUsed2($value);
                break;
            case 50:
                $this->setTotUsed3($value);
                break;
            case 51:
                $this->setTotUsed4($value);
                break;
            case 52:
                $this->setTotUsed5($value);
                break;
            case 53:
                $this->setThreat1($value);
                break;
            case 54:
                $this->setThreat2($value);
                break;
            case 55:
                $this->setThreat3($value);
                break;
            case 56:
                $this->setThreat4($value);
                break;
            case 57:
                $this->setThreat5($value);
                break;
            case 58:
                $this->setIntro1($value);
                break;
            case 59:
                $this->setIntro2($value);
                break;
            case 60:
                $this->setIntro3($value);
                break;
            case 61:
                $this->setIntro4($value);
                break;
            case 62:
                $this->setIntro5($value);
                break;
            case 63:
                $this->setDanger1($value);
                break;
            case 64:
                $this->setDanger2($value);
                break;
            case 65:
                $this->setDanger3($value);
                break;
            case 66:
                $this->setDanger4($value);
                break;
            case 67:
                $this->setDanger5($value);
                break;
            case 68:
                $this->setNote($value);
                break;
            case 69:
                $this->setNoSpecies($value);
                break;
            case 70:
                $this->setNoFresh($value);
                break;
            case 71:
                $this->setNoMarine($value);
                break;
            case 72:
                $this->setNoBrackish($value);
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
        $keys = FubhPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setPrintDateByskit($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setActive($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPeriod($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setExtantFinfish1($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setExtantFinfish2($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setExtantFinfish3($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setExtantFinfish4($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setExtantFinfish5($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setUsedFisheries1($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setUsedFisheries2($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setUsedFisheries3($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setUsedFisheries4($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setUsedFisheries5($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setUsedAquac1($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setUsedAquac2($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setUsedAquac3($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setUsedAquac4($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setUsedAquac5($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setUsedBait1($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setUsedBait2($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setUsedBait3($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setUsedBait4($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setUsedBait5($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setUsedTrade1($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setUsedTrade2($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setUsedTrade3($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setUsedTrade4($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setUsedTrade5($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setTradeMarine1($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setTradeMarine2($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setTradeMarine3($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setTradeMarine4($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setTradeMarine5($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setTradeFresh1($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setTradeFresh2($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setTradeFresh3($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setTradeFresh4($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setTradeFresh5($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setTradeBred1($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setTradeBred2($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setTradeBred3($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setTradeBred4($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setTradeBred5($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setUsedSport1($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setUsedSport2($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setUsedSport3($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setUsedSport4($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setUsedSport5($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setTotUsed1($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setTotUsed2($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setTotUsed3($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setTotUsed4($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setTotUsed5($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setThreat1($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setThreat2($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setThreat3($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setThreat4($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setThreat5($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setIntro1($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setIntro2($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setIntro3($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setIntro4($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setIntro5($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setDanger1($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setDanger2($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setDanger3($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setDanger4($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setDanger5($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setNote($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setNoSpecies($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setNoFresh($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setNoMarine($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setNoBrackish($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setTs($arr[$keys[73]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FubhPeer::DATABASE_NAME);

        if ($this->isColumnModified(FubhPeer::PRINT_DATE_BYSKIT)) $criteria->add(FubhPeer::PRINT_DATE_BYSKIT, $this->print_date_byskit);
        if ($this->isColumnModified(FubhPeer::ACTIVE)) $criteria->add(FubhPeer::ACTIVE, $this->active);
        if ($this->isColumnModified(FubhPeer::PERIOD)) $criteria->add(FubhPeer::PERIOD, $this->period);
        if ($this->isColumnModified(FubhPeer::EXTANT_FINFISH_1)) $criteria->add(FubhPeer::EXTANT_FINFISH_1, $this->extant_finfish_1);
        if ($this->isColumnModified(FubhPeer::EXTANT_FINFISH_2)) $criteria->add(FubhPeer::EXTANT_FINFISH_2, $this->extant_finfish_2);
        if ($this->isColumnModified(FubhPeer::EXTANT_FINFISH_3)) $criteria->add(FubhPeer::EXTANT_FINFISH_3, $this->extant_finfish_3);
        if ($this->isColumnModified(FubhPeer::EXTANT_FINFISH_4)) $criteria->add(FubhPeer::EXTANT_FINFISH_4, $this->extant_finfish_4);
        if ($this->isColumnModified(FubhPeer::EXTANT_FINFISH_5)) $criteria->add(FubhPeer::EXTANT_FINFISH_5, $this->extant_finfish_5);
        if ($this->isColumnModified(FubhPeer::USED_FISHERIES_1)) $criteria->add(FubhPeer::USED_FISHERIES_1, $this->used_fisheries_1);
        if ($this->isColumnModified(FubhPeer::USED_FISHERIES_2)) $criteria->add(FubhPeer::USED_FISHERIES_2, $this->used_fisheries_2);
        if ($this->isColumnModified(FubhPeer::USED_FISHERIES_3)) $criteria->add(FubhPeer::USED_FISHERIES_3, $this->used_fisheries_3);
        if ($this->isColumnModified(FubhPeer::USED_FISHERIES_4)) $criteria->add(FubhPeer::USED_FISHERIES_4, $this->used_fisheries_4);
        if ($this->isColumnModified(FubhPeer::USED_FISHERIES_5)) $criteria->add(FubhPeer::USED_FISHERIES_5, $this->used_fisheries_5);
        if ($this->isColumnModified(FubhPeer::USED_AQUAC_1)) $criteria->add(FubhPeer::USED_AQUAC_1, $this->used_aquac_1);
        if ($this->isColumnModified(FubhPeer::USED_AQUAC_2)) $criteria->add(FubhPeer::USED_AQUAC_2, $this->used_aquac_2);
        if ($this->isColumnModified(FubhPeer::USED_AQUAC_3)) $criteria->add(FubhPeer::USED_AQUAC_3, $this->used_aquac_3);
        if ($this->isColumnModified(FubhPeer::USED_AQUAC_4)) $criteria->add(FubhPeer::USED_AQUAC_4, $this->used_aquac_4);
        if ($this->isColumnModified(FubhPeer::USED_AQUAC_5)) $criteria->add(FubhPeer::USED_AQUAC_5, $this->used_aquac_5);
        if ($this->isColumnModified(FubhPeer::USED_BAIT_1)) $criteria->add(FubhPeer::USED_BAIT_1, $this->used_bait_1);
        if ($this->isColumnModified(FubhPeer::USED_BAIT_2)) $criteria->add(FubhPeer::USED_BAIT_2, $this->used_bait_2);
        if ($this->isColumnModified(FubhPeer::USED_BAIT_3)) $criteria->add(FubhPeer::USED_BAIT_3, $this->used_bait_3);
        if ($this->isColumnModified(FubhPeer::USED_BAIT_4)) $criteria->add(FubhPeer::USED_BAIT_4, $this->used_bait_4);
        if ($this->isColumnModified(FubhPeer::USED_BAIT_5)) $criteria->add(FubhPeer::USED_BAIT_5, $this->used_bait_5);
        if ($this->isColumnModified(FubhPeer::USED_TRADE_1)) $criteria->add(FubhPeer::USED_TRADE_1, $this->used_trade_1);
        if ($this->isColumnModified(FubhPeer::USED_TRADE_2)) $criteria->add(FubhPeer::USED_TRADE_2, $this->used_trade_2);
        if ($this->isColumnModified(FubhPeer::USED_TRADE_3)) $criteria->add(FubhPeer::USED_TRADE_3, $this->used_trade_3);
        if ($this->isColumnModified(FubhPeer::USED_TRADE_4)) $criteria->add(FubhPeer::USED_TRADE_4, $this->used_trade_4);
        if ($this->isColumnModified(FubhPeer::USED_TRADE_5)) $criteria->add(FubhPeer::USED_TRADE_5, $this->used_trade_5);
        if ($this->isColumnModified(FubhPeer::TRADE_MARINE_1)) $criteria->add(FubhPeer::TRADE_MARINE_1, $this->trade_marine_1);
        if ($this->isColumnModified(FubhPeer::TRADE_MARINE_2)) $criteria->add(FubhPeer::TRADE_MARINE_2, $this->trade_marine_2);
        if ($this->isColumnModified(FubhPeer::TRADE_MARINE_3)) $criteria->add(FubhPeer::TRADE_MARINE_3, $this->trade_marine_3);
        if ($this->isColumnModified(FubhPeer::TRADE_MARINE_4)) $criteria->add(FubhPeer::TRADE_MARINE_4, $this->trade_marine_4);
        if ($this->isColumnModified(FubhPeer::TRADE_MARINE_5)) $criteria->add(FubhPeer::TRADE_MARINE_5, $this->trade_marine_5);
        if ($this->isColumnModified(FubhPeer::TRADE_FRESH_1)) $criteria->add(FubhPeer::TRADE_FRESH_1, $this->trade_fresh_1);
        if ($this->isColumnModified(FubhPeer::TRADE_FRESH_2)) $criteria->add(FubhPeer::TRADE_FRESH_2, $this->trade_fresh_2);
        if ($this->isColumnModified(FubhPeer::TRADE_FRESH_3)) $criteria->add(FubhPeer::TRADE_FRESH_3, $this->trade_fresh_3);
        if ($this->isColumnModified(FubhPeer::TRADE_FRESH_4)) $criteria->add(FubhPeer::TRADE_FRESH_4, $this->trade_fresh_4);
        if ($this->isColumnModified(FubhPeer::TRADE_FRESH_5)) $criteria->add(FubhPeer::TRADE_FRESH_5, $this->trade_fresh_5);
        if ($this->isColumnModified(FubhPeer::TRADE_BRED_1)) $criteria->add(FubhPeer::TRADE_BRED_1, $this->trade_bred_1);
        if ($this->isColumnModified(FubhPeer::TRADE_BRED_2)) $criteria->add(FubhPeer::TRADE_BRED_2, $this->trade_bred_2);
        if ($this->isColumnModified(FubhPeer::TRADE_BRED_3)) $criteria->add(FubhPeer::TRADE_BRED_3, $this->trade_bred_3);
        if ($this->isColumnModified(FubhPeer::TRADE_BRED_4)) $criteria->add(FubhPeer::TRADE_BRED_4, $this->trade_bred_4);
        if ($this->isColumnModified(FubhPeer::TRADE_BRED_5)) $criteria->add(FubhPeer::TRADE_BRED_5, $this->trade_bred_5);
        if ($this->isColumnModified(FubhPeer::USED_SPORT_1)) $criteria->add(FubhPeer::USED_SPORT_1, $this->used_sport_1);
        if ($this->isColumnModified(FubhPeer::USED_SPORT_2)) $criteria->add(FubhPeer::USED_SPORT_2, $this->used_sport_2);
        if ($this->isColumnModified(FubhPeer::USED_SPORT_3)) $criteria->add(FubhPeer::USED_SPORT_3, $this->used_sport_3);
        if ($this->isColumnModified(FubhPeer::USED_SPORT_4)) $criteria->add(FubhPeer::USED_SPORT_4, $this->used_sport_4);
        if ($this->isColumnModified(FubhPeer::USED_SPORT_5)) $criteria->add(FubhPeer::USED_SPORT_5, $this->used_sport_5);
        if ($this->isColumnModified(FubhPeer::TOT_USED_1)) $criteria->add(FubhPeer::TOT_USED_1, $this->tot_used_1);
        if ($this->isColumnModified(FubhPeer::TOT_USED_2)) $criteria->add(FubhPeer::TOT_USED_2, $this->tot_used_2);
        if ($this->isColumnModified(FubhPeer::TOT_USED_3)) $criteria->add(FubhPeer::TOT_USED_3, $this->tot_used_3);
        if ($this->isColumnModified(FubhPeer::TOT_USED_4)) $criteria->add(FubhPeer::TOT_USED_4, $this->tot_used_4);
        if ($this->isColumnModified(FubhPeer::TOT_USED_5)) $criteria->add(FubhPeer::TOT_USED_5, $this->tot_used_5);
        if ($this->isColumnModified(FubhPeer::THREAT_1)) $criteria->add(FubhPeer::THREAT_1, $this->threat_1);
        if ($this->isColumnModified(FubhPeer::THREAT_2)) $criteria->add(FubhPeer::THREAT_2, $this->threat_2);
        if ($this->isColumnModified(FubhPeer::THREAT_3)) $criteria->add(FubhPeer::THREAT_3, $this->threat_3);
        if ($this->isColumnModified(FubhPeer::THREAT_4)) $criteria->add(FubhPeer::THREAT_4, $this->threat_4);
        if ($this->isColumnModified(FubhPeer::THREAT_5)) $criteria->add(FubhPeer::THREAT_5, $this->threat_5);
        if ($this->isColumnModified(FubhPeer::INTRO_1)) $criteria->add(FubhPeer::INTRO_1, $this->intro_1);
        if ($this->isColumnModified(FubhPeer::INTRO_2)) $criteria->add(FubhPeer::INTRO_2, $this->intro_2);
        if ($this->isColumnModified(FubhPeer::INTRO_3)) $criteria->add(FubhPeer::INTRO_3, $this->intro_3);
        if ($this->isColumnModified(FubhPeer::INTRO_4)) $criteria->add(FubhPeer::INTRO_4, $this->intro_4);
        if ($this->isColumnModified(FubhPeer::INTRO_5)) $criteria->add(FubhPeer::INTRO_5, $this->intro_5);
        if ($this->isColumnModified(FubhPeer::DANGER_1)) $criteria->add(FubhPeer::DANGER_1, $this->danger_1);
        if ($this->isColumnModified(FubhPeer::DANGER_2)) $criteria->add(FubhPeer::DANGER_2, $this->danger_2);
        if ($this->isColumnModified(FubhPeer::DANGER_3)) $criteria->add(FubhPeer::DANGER_3, $this->danger_3);
        if ($this->isColumnModified(FubhPeer::DANGER_4)) $criteria->add(FubhPeer::DANGER_4, $this->danger_4);
        if ($this->isColumnModified(FubhPeer::DANGER_5)) $criteria->add(FubhPeer::DANGER_5, $this->danger_5);
        if ($this->isColumnModified(FubhPeer::NOTE)) $criteria->add(FubhPeer::NOTE, $this->note);
        if ($this->isColumnModified(FubhPeer::NO_SPECIES)) $criteria->add(FubhPeer::NO_SPECIES, $this->no_species);
        if ($this->isColumnModified(FubhPeer::NO_FRESH)) $criteria->add(FubhPeer::NO_FRESH, $this->no_fresh);
        if ($this->isColumnModified(FubhPeer::NO_MARINE)) $criteria->add(FubhPeer::NO_MARINE, $this->no_marine);
        if ($this->isColumnModified(FubhPeer::NO_BRACKISH)) $criteria->add(FubhPeer::NO_BRACKISH, $this->no_brackish);
        if ($this->isColumnModified(FubhPeer::TS)) $criteria->add(FubhPeer::TS, $this->ts);

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
        $criteria = new Criteria(FubhPeer::DATABASE_NAME);
        $criteria->add(FubhPeer::PERIOD, $this->period);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getPeriod();
    }

    /**
     * Generic method to set the primary key (period column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setPeriod($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getPeriod();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Fubh (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPrintDateByskit($this->getPrintDateByskit());
        $copyObj->setActive($this->getActive());
        $copyObj->setExtantFinfish1($this->getExtantFinfish1());
        $copyObj->setExtantFinfish2($this->getExtantFinfish2());
        $copyObj->setExtantFinfish3($this->getExtantFinfish3());
        $copyObj->setExtantFinfish4($this->getExtantFinfish4());
        $copyObj->setExtantFinfish5($this->getExtantFinfish5());
        $copyObj->setUsedFisheries1($this->getUsedFisheries1());
        $copyObj->setUsedFisheries2($this->getUsedFisheries2());
        $copyObj->setUsedFisheries3($this->getUsedFisheries3());
        $copyObj->setUsedFisheries4($this->getUsedFisheries4());
        $copyObj->setUsedFisheries5($this->getUsedFisheries5());
        $copyObj->setUsedAquac1($this->getUsedAquac1());
        $copyObj->setUsedAquac2($this->getUsedAquac2());
        $copyObj->setUsedAquac3($this->getUsedAquac3());
        $copyObj->setUsedAquac4($this->getUsedAquac4());
        $copyObj->setUsedAquac5($this->getUsedAquac5());
        $copyObj->setUsedBait1($this->getUsedBait1());
        $copyObj->setUsedBait2($this->getUsedBait2());
        $copyObj->setUsedBait3($this->getUsedBait3());
        $copyObj->setUsedBait4($this->getUsedBait4());
        $copyObj->setUsedBait5($this->getUsedBait5());
        $copyObj->setUsedTrade1($this->getUsedTrade1());
        $copyObj->setUsedTrade2($this->getUsedTrade2());
        $copyObj->setUsedTrade3($this->getUsedTrade3());
        $copyObj->setUsedTrade4($this->getUsedTrade4());
        $copyObj->setUsedTrade5($this->getUsedTrade5());
        $copyObj->setTradeMarine1($this->getTradeMarine1());
        $copyObj->setTradeMarine2($this->getTradeMarine2());
        $copyObj->setTradeMarine3($this->getTradeMarine3());
        $copyObj->setTradeMarine4($this->getTradeMarine4());
        $copyObj->setTradeMarine5($this->getTradeMarine5());
        $copyObj->setTradeFresh1($this->getTradeFresh1());
        $copyObj->setTradeFresh2($this->getTradeFresh2());
        $copyObj->setTradeFresh3($this->getTradeFresh3());
        $copyObj->setTradeFresh4($this->getTradeFresh4());
        $copyObj->setTradeFresh5($this->getTradeFresh5());
        $copyObj->setTradeBred1($this->getTradeBred1());
        $copyObj->setTradeBred2($this->getTradeBred2());
        $copyObj->setTradeBred3($this->getTradeBred3());
        $copyObj->setTradeBred4($this->getTradeBred4());
        $copyObj->setTradeBred5($this->getTradeBred5());
        $copyObj->setUsedSport1($this->getUsedSport1());
        $copyObj->setUsedSport2($this->getUsedSport2());
        $copyObj->setUsedSport3($this->getUsedSport3());
        $copyObj->setUsedSport4($this->getUsedSport4());
        $copyObj->setUsedSport5($this->getUsedSport5());
        $copyObj->setTotUsed1($this->getTotUsed1());
        $copyObj->setTotUsed2($this->getTotUsed2());
        $copyObj->setTotUsed3($this->getTotUsed3());
        $copyObj->setTotUsed4($this->getTotUsed4());
        $copyObj->setTotUsed5($this->getTotUsed5());
        $copyObj->setThreat1($this->getThreat1());
        $copyObj->setThreat2($this->getThreat2());
        $copyObj->setThreat3($this->getThreat3());
        $copyObj->setThreat4($this->getThreat4());
        $copyObj->setThreat5($this->getThreat5());
        $copyObj->setIntro1($this->getIntro1());
        $copyObj->setIntro2($this->getIntro2());
        $copyObj->setIntro3($this->getIntro3());
        $copyObj->setIntro4($this->getIntro4());
        $copyObj->setIntro5($this->getIntro5());
        $copyObj->setDanger1($this->getDanger1());
        $copyObj->setDanger2($this->getDanger2());
        $copyObj->setDanger3($this->getDanger3());
        $copyObj->setDanger4($this->getDanger4());
        $copyObj->setDanger5($this->getDanger5());
        $copyObj->setNote($this->getNote());
        $copyObj->setNoSpecies($this->getNoSpecies());
        $copyObj->setNoFresh($this->getNoFresh());
        $copyObj->setNoMarine($this->getNoMarine());
        $copyObj->setNoBrackish($this->getNoBrackish());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setPeriod(NULL); // this is a auto-increment column, so set to default value
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
     * @return Fubh Clone of current object.
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
     * @return FubhPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FubhPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->print_date_byskit = null;
        $this->active = null;
        $this->period = null;
        $this->extant_finfish_1 = null;
        $this->extant_finfish_2 = null;
        $this->extant_finfish_3 = null;
        $this->extant_finfish_4 = null;
        $this->extant_finfish_5 = null;
        $this->used_fisheries_1 = null;
        $this->used_fisheries_2 = null;
        $this->used_fisheries_3 = null;
        $this->used_fisheries_4 = null;
        $this->used_fisheries_5 = null;
        $this->used_aquac_1 = null;
        $this->used_aquac_2 = null;
        $this->used_aquac_3 = null;
        $this->used_aquac_4 = null;
        $this->used_aquac_5 = null;
        $this->used_bait_1 = null;
        $this->used_bait_2 = null;
        $this->used_bait_3 = null;
        $this->used_bait_4 = null;
        $this->used_bait_5 = null;
        $this->used_trade_1 = null;
        $this->used_trade_2 = null;
        $this->used_trade_3 = null;
        $this->used_trade_4 = null;
        $this->used_trade_5 = null;
        $this->trade_marine_1 = null;
        $this->trade_marine_2 = null;
        $this->trade_marine_3 = null;
        $this->trade_marine_4 = null;
        $this->trade_marine_5 = null;
        $this->trade_fresh_1 = null;
        $this->trade_fresh_2 = null;
        $this->trade_fresh_3 = null;
        $this->trade_fresh_4 = null;
        $this->trade_fresh_5 = null;
        $this->trade_bred_1 = null;
        $this->trade_bred_2 = null;
        $this->trade_bred_3 = null;
        $this->trade_bred_4 = null;
        $this->trade_bred_5 = null;
        $this->used_sport_1 = null;
        $this->used_sport_2 = null;
        $this->used_sport_3 = null;
        $this->used_sport_4 = null;
        $this->used_sport_5 = null;
        $this->tot_used_1 = null;
        $this->tot_used_2 = null;
        $this->tot_used_3 = null;
        $this->tot_used_4 = null;
        $this->tot_used_5 = null;
        $this->threat_1 = null;
        $this->threat_2 = null;
        $this->threat_3 = null;
        $this->threat_4 = null;
        $this->threat_5 = null;
        $this->intro_1 = null;
        $this->intro_2 = null;
        $this->intro_3 = null;
        $this->intro_4 = null;
        $this->intro_5 = null;
        $this->danger_1 = null;
        $this->danger_2 = null;
        $this->danger_3 = null;
        $this->danger_4 = null;
        $this->danger_5 = null;
        $this->note = null;
        $this->no_species = null;
        $this->no_fresh = null;
        $this->no_marine = null;
        $this->no_brackish = null;
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
        return (string) $this->exportTo(FubhPeer::DEFAULT_STRING_FORMAT);
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
