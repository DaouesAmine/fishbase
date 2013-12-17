<?php


/**
 * Base class that represents a row from the 'eggs' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseEggs extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EggsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EggsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

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
     * The value for the eggsrefno field.
     * @var        int
     */
    protected $eggsrefno;

    /**
     * The value for the watereggref field.
     * @var        int
     */
    protected $watereggref;

    /**
     * The value for the watertempmax field.
     * @var        double
     */
    protected $watertempmax;

    /**
     * The value for the waterdepthmax field.
     * @var        int
     */
    protected $waterdepthmax;

    /**
     * The value for the salinitymax field.
     * @var        double
     */
    protected $salinitymax;

    /**
     * The value for the ph field.
     * @var        double
     */
    protected $ph;

    /**
     * The value for the oxygenmax field.
     * @var        double
     */
    protected $oxygenmax;

    /**
     * The value for the watertempmin field.
     * @var        double
     */
    protected $watertempmin;

    /**
     * The value for the waterdepthmin field.
     * @var        int
     */
    protected $waterdepthmin;

    /**
     * The value for the salinitymin field.
     * @var        double
     */
    protected $salinitymin;

    /**
     * The value for the phmin field.
     * @var        double
     */
    protected $phmin;

    /**
     * The value for the oxygenmin field.
     * @var        double
     */
    protected $oxygenmin;

    /**
     * The value for the watertempmod field.
     * @var        double
     */
    protected $watertempmod;

    /**
     * The value for the waterdepthmid field.
     * @var        int
     */
    protected $waterdepthmid;

    /**
     * The value for the salinitymod field.
     * @var        double
     */
    protected $salinitymod;

    /**
     * The value for the phmod field.
     * @var        double
     */
    protected $phmod;

    /**
     * The value for the oxygenmod field.
     * @var        double
     */
    protected $oxygenmod;

    /**
     * The value for the wategg3 field.
     * @var        string
     */
    protected $wategg3;

    /**
     * The value for the placeofdev field.
     * @var        string
     */
    protected $placeofdev;

    /**
     * The value for the shapeofegg field.
     * @var        string
     */
    protected $shapeofegg;

    /**
     * The value for the pic field.
     * @var        string
     */
    protected $pic;

    /**
     * The value for the attributes field.
     * @var        string
     */
    protected $attributes;

    /**
     * The value for the attributesii field.
     * @var        string
     */
    protected $attributesii;

    /**
     * The value for the colourofegg field.
     * @var        string
     */
    protected $colourofegg;

    /**
     * The value for the colouroilglobule field.
     * @var        string
     */
    protected $colouroilglobule;

    /**
     * The value for the oilglobules field.
     * @var        int
     */
    protected $oilglobules;

    /**
     * The value for the oilglobmaxref field.
     * @var        int
     */
    protected $oilglobmaxref;

    /**
     * The value for the oilglobulesmin field.
     * @var        int
     */
    protected $oilglobulesmin;

    /**
     * The value for the oilglobminref field.
     * @var        int
     */
    protected $oilglobminref;

    /**
     * The value for the oilglobulesmod field.
     * @var        int
     */
    protected $oilglobulesmod;

    /**
     * The value for the oilglobmodref field.
     * @var        int
     */
    protected $oilglobmodref;

    /**
     * The value for the oildiametermax2 field.
     * @var        double
     */
    protected $oildiametermax2;

    /**
     * The value for the oildiamaxref field.
     * @var        int
     */
    protected $oildiamaxref;

    /**
     * The value for the oildiametermin2 field.
     * @var        double
     */
    protected $oildiametermin2;

    /**
     * The value for the oildiaminref field.
     * @var        int
     */
    protected $oildiaminref;

    /**
     * The value for the oildiametermod field.
     * @var        double
     */
    protected $oildiametermod;

    /**
     * The value for the oildiamodref field.
     * @var        int
     */
    protected $oildiamodref;

    /**
     * The value for the eggdiammax field.
     * @var        double
     */
    protected $eggdiammax;

    /**
     * The value for the eggdiammaxref field.
     * @var        int
     */
    protected $eggdiammaxref;

    /**
     * The value for the eggdiammin field.
     * @var        double
     */
    protected $eggdiammin;

    /**
     * The value for the eggdiamminref field.
     * @var        int
     */
    protected $eggdiamminref;

    /**
     * The value for the eggdiammod field.
     * @var        double
     */
    protected $eggdiammod;

    /**
     * The value for the eggdiammodref field.
     * @var        int
     */
    protected $eggdiammodref;

    /**
     * The value for the referencediammax field.
     * @var        double
     */
    protected $referencediammax;

    /**
     * The value for the referencediammin field.
     * @var        double
     */
    protected $referencediammin;

    /**
     * The value for the referencediammod field.
     * @var        double
     */
    protected $referencediammod;

    /**
     * The value for the measurementsref field.
     * @var        int
     */
    protected $measurementsref;

    /**
     * The value for the perivitwidthmax field.
     * @var        double
     */
    protected $perivitwidthmax;

    /**
     * The value for the perivitwidthmin field.
     * @var        double
     */
    protected $perivitwidthmin;

    /**
     * The value for the perivitwidthmod field.
     * @var        double
     */
    protected $perivitwidthmod;

    /**
     * The value for the chorionthickmax field.
     * @var        double
     */
    protected $chorionthickmax;

    /**
     * The value for the chorionthickmin field.
     * @var        double
     */
    protected $chorionthickmin;

    /**
     * The value for the chorionthickmod field.
     * @var        double
     */
    protected $chorionthickmod;

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
     * The value for the addchars field.
     * @var        string
     */
    protected $addchars;

    /**
     * The value for the wateggs field.
     * @var        string
     */
    protected $wateggs;

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
     * Get the [eggsrefno] column value.
     *
     * @return int
     */
    public function getEggsrefno()
    {

        return $this->eggsrefno;
    }

    /**
     * Get the [watereggref] column value.
     *
     * @return int
     */
    public function getWatereggref()
    {

        return $this->watereggref;
    }

    /**
     * Get the [watertempmax] column value.
     *
     * @return double
     */
    public function getWatertempmax()
    {

        return $this->watertempmax;
    }

    /**
     * Get the [waterdepthmax] column value.
     *
     * @return int
     */
    public function getWaterdepthmax()
    {

        return $this->waterdepthmax;
    }

    /**
     * Get the [salinitymax] column value.
     *
     * @return double
     */
    public function getSalinitymax()
    {

        return $this->salinitymax;
    }

    /**
     * Get the [ph] column value.
     *
     * @return double
     */
    public function getPh()
    {

        return $this->ph;
    }

    /**
     * Get the [oxygenmax] column value.
     *
     * @return double
     */
    public function getOxygenmax()
    {

        return $this->oxygenmax;
    }

    /**
     * Get the [watertempmin] column value.
     *
     * @return double
     */
    public function getWatertempmin()
    {

        return $this->watertempmin;
    }

    /**
     * Get the [waterdepthmin] column value.
     *
     * @return int
     */
    public function getWaterdepthmin()
    {

        return $this->waterdepthmin;
    }

    /**
     * Get the [salinitymin] column value.
     *
     * @return double
     */
    public function getSalinitymin()
    {

        return $this->salinitymin;
    }

    /**
     * Get the [phmin] column value.
     *
     * @return double
     */
    public function getPhmin()
    {

        return $this->phmin;
    }

    /**
     * Get the [oxygenmin] column value.
     *
     * @return double
     */
    public function getOxygenmin()
    {

        return $this->oxygenmin;
    }

    /**
     * Get the [watertempmod] column value.
     *
     * @return double
     */
    public function getWatertempmod()
    {

        return $this->watertempmod;
    }

    /**
     * Get the [waterdepthmid] column value.
     *
     * @return int
     */
    public function getWaterdepthmid()
    {

        return $this->waterdepthmid;
    }

    /**
     * Get the [salinitymod] column value.
     *
     * @return double
     */
    public function getSalinitymod()
    {

        return $this->salinitymod;
    }

    /**
     * Get the [phmod] column value.
     *
     * @return double
     */
    public function getPhmod()
    {

        return $this->phmod;
    }

    /**
     * Get the [oxygenmod] column value.
     *
     * @return double
     */
    public function getOxygenmod()
    {

        return $this->oxygenmod;
    }

    /**
     * Get the [wategg3] column value.
     *
     * @return string
     */
    public function getWategg3()
    {

        return $this->wategg3;
    }

    /**
     * Get the [placeofdev] column value.
     *
     * @return string
     */
    public function getPlaceofdev()
    {

        return $this->placeofdev;
    }

    /**
     * Get the [shapeofegg] column value.
     *
     * @return string
     */
    public function getShapeofegg()
    {

        return $this->shapeofegg;
    }

    /**
     * Get the [pic] column value.
     *
     * @return string
     */
    public function getPic()
    {

        return $this->pic;
    }

    /**
     * Get the [attributes] column value.
     *
     * @return string
     */
    public function getAttributes()
    {

        return $this->attributes;
    }

    /**
     * Get the [attributesii] column value.
     *
     * @return string
     */
    public function getAttributesii()
    {

        return $this->attributesii;
    }

    /**
     * Get the [colourofegg] column value.
     *
     * @return string
     */
    public function getColourofegg()
    {

        return $this->colourofegg;
    }

    /**
     * Get the [colouroilglobule] column value.
     *
     * @return string
     */
    public function getColouroilglobule()
    {

        return $this->colouroilglobule;
    }

    /**
     * Get the [oilglobules] column value.
     *
     * @return int
     */
    public function getOilglobules()
    {

        return $this->oilglobules;
    }

    /**
     * Get the [oilglobmaxref] column value.
     *
     * @return int
     */
    public function getOilglobmaxref()
    {

        return $this->oilglobmaxref;
    }

    /**
     * Get the [oilglobulesmin] column value.
     *
     * @return int
     */
    public function getOilglobulesmin()
    {

        return $this->oilglobulesmin;
    }

    /**
     * Get the [oilglobminref] column value.
     *
     * @return int
     */
    public function getOilglobminref()
    {

        return $this->oilglobminref;
    }

    /**
     * Get the [oilglobulesmod] column value.
     *
     * @return int
     */
    public function getOilglobulesmod()
    {

        return $this->oilglobulesmod;
    }

    /**
     * Get the [oilglobmodref] column value.
     *
     * @return int
     */
    public function getOilglobmodref()
    {

        return $this->oilglobmodref;
    }

    /**
     * Get the [oildiametermax2] column value.
     *
     * @return double
     */
    public function getOildiametermax2()
    {

        return $this->oildiametermax2;
    }

    /**
     * Get the [oildiamaxref] column value.
     *
     * @return int
     */
    public function getOildiamaxref()
    {

        return $this->oildiamaxref;
    }

    /**
     * Get the [oildiametermin2] column value.
     *
     * @return double
     */
    public function getOildiametermin2()
    {

        return $this->oildiametermin2;
    }

    /**
     * Get the [oildiaminref] column value.
     *
     * @return int
     */
    public function getOildiaminref()
    {

        return $this->oildiaminref;
    }

    /**
     * Get the [oildiametermod] column value.
     *
     * @return double
     */
    public function getOildiametermod()
    {

        return $this->oildiametermod;
    }

    /**
     * Get the [oildiamodref] column value.
     *
     * @return int
     */
    public function getOildiamodref()
    {

        return $this->oildiamodref;
    }

    /**
     * Get the [eggdiammax] column value.
     *
     * @return double
     */
    public function getEggdiammax()
    {

        return $this->eggdiammax;
    }

    /**
     * Get the [eggdiammaxref] column value.
     *
     * @return int
     */
    public function getEggdiammaxref()
    {

        return $this->eggdiammaxref;
    }

    /**
     * Get the [eggdiammin] column value.
     *
     * @return double
     */
    public function getEggdiammin()
    {

        return $this->eggdiammin;
    }

    /**
     * Get the [eggdiamminref] column value.
     *
     * @return int
     */
    public function getEggdiamminref()
    {

        return $this->eggdiamminref;
    }

    /**
     * Get the [eggdiammod] column value.
     *
     * @return double
     */
    public function getEggdiammod()
    {

        return $this->eggdiammod;
    }

    /**
     * Get the [eggdiammodref] column value.
     *
     * @return int
     */
    public function getEggdiammodref()
    {

        return $this->eggdiammodref;
    }

    /**
     * Get the [referencediammax] column value.
     *
     * @return double
     */
    public function getReferencediammax()
    {

        return $this->referencediammax;
    }

    /**
     * Get the [referencediammin] column value.
     *
     * @return double
     */
    public function getReferencediammin()
    {

        return $this->referencediammin;
    }

    /**
     * Get the [referencediammod] column value.
     *
     * @return double
     */
    public function getReferencediammod()
    {

        return $this->referencediammod;
    }

    /**
     * Get the [measurementsref] column value.
     *
     * @return int
     */
    public function getMeasurementsref()
    {

        return $this->measurementsref;
    }

    /**
     * Get the [perivitwidthmax] column value.
     *
     * @return double
     */
    public function getPerivitwidthmax()
    {

        return $this->perivitwidthmax;
    }

    /**
     * Get the [perivitwidthmin] column value.
     *
     * @return double
     */
    public function getPerivitwidthmin()
    {

        return $this->perivitwidthmin;
    }

    /**
     * Get the [perivitwidthmod] column value.
     *
     * @return double
     */
    public function getPerivitwidthmod()
    {

        return $this->perivitwidthmod;
    }

    /**
     * Get the [chorionthickmax] column value.
     *
     * @return double
     */
    public function getChorionthickmax()
    {

        return $this->chorionthickmax;
    }

    /**
     * Get the [chorionthickmin] column value.
     *
     * @return double
     */
    public function getChorionthickmin()
    {

        return $this->chorionthickmin;
    }

    /**
     * Get the [chorionthickmod] column value.
     *
     * @return double
     */
    public function getChorionthickmod()
    {

        return $this->chorionthickmod;
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
     * Get the [addchars] column value.
     *
     * @return string
     */
    public function getAddchars()
    {

        return $this->addchars;
    }

    /**
     * Get the [wateggs] column value.
     *
     * @return string
     */
    public function getWateggs()
    {

        return $this->wateggs;
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
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = EggsPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = EggsPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [eggsrefno] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setEggsrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eggsrefno !== $v) {
            $this->eggsrefno = $v;
            $this->modifiedColumns[] = EggsPeer::EGGSREFNO;
        }


        return $this;
    } // setEggsrefno()

    /**
     * Set the value of [watereggref] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setWatereggref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->watereggref !== $v) {
            $this->watereggref = $v;
            $this->modifiedColumns[] = EggsPeer::WATEREGGREF;
        }


        return $this;
    } // setWatereggref()

    /**
     * Set the value of [watertempmax] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setWatertempmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->watertempmax !== $v) {
            $this->watertempmax = $v;
            $this->modifiedColumns[] = EggsPeer::WATERTEMPMAX;
        }


        return $this;
    } // setWatertempmax()

    /**
     * Set the value of [waterdepthmax] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setWaterdepthmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->waterdepthmax !== $v) {
            $this->waterdepthmax = $v;
            $this->modifiedColumns[] = EggsPeer::WATERDEPTHMAX;
        }


        return $this;
    } // setWaterdepthmax()

    /**
     * Set the value of [salinitymax] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setSalinitymax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->salinitymax !== $v) {
            $this->salinitymax = $v;
            $this->modifiedColumns[] = EggsPeer::SALINITYMAX;
        }


        return $this;
    } // setSalinitymax()

    /**
     * Set the value of [ph] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setPh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ph !== $v) {
            $this->ph = $v;
            $this->modifiedColumns[] = EggsPeer::PH;
        }


        return $this;
    } // setPh()

    /**
     * Set the value of [oxygenmax] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setOxygenmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oxygenmax !== $v) {
            $this->oxygenmax = $v;
            $this->modifiedColumns[] = EggsPeer::OXYGENMAX;
        }


        return $this;
    } // setOxygenmax()

    /**
     * Set the value of [watertempmin] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setWatertempmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->watertempmin !== $v) {
            $this->watertempmin = $v;
            $this->modifiedColumns[] = EggsPeer::WATERTEMPMIN;
        }


        return $this;
    } // setWatertempmin()

    /**
     * Set the value of [waterdepthmin] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setWaterdepthmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->waterdepthmin !== $v) {
            $this->waterdepthmin = $v;
            $this->modifiedColumns[] = EggsPeer::WATERDEPTHMIN;
        }


        return $this;
    } // setWaterdepthmin()

    /**
     * Set the value of [salinitymin] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setSalinitymin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->salinitymin !== $v) {
            $this->salinitymin = $v;
            $this->modifiedColumns[] = EggsPeer::SALINITYMIN;
        }


        return $this;
    } // setSalinitymin()

    /**
     * Set the value of [phmin] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setPhmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->phmin !== $v) {
            $this->phmin = $v;
            $this->modifiedColumns[] = EggsPeer::PHMIN;
        }


        return $this;
    } // setPhmin()

    /**
     * Set the value of [oxygenmin] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setOxygenmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oxygenmin !== $v) {
            $this->oxygenmin = $v;
            $this->modifiedColumns[] = EggsPeer::OXYGENMIN;
        }


        return $this;
    } // setOxygenmin()

    /**
     * Set the value of [watertempmod] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setWatertempmod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->watertempmod !== $v) {
            $this->watertempmod = $v;
            $this->modifiedColumns[] = EggsPeer::WATERTEMPMOD;
        }


        return $this;
    } // setWatertempmod()

    /**
     * Set the value of [waterdepthmid] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setWaterdepthmid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->waterdepthmid !== $v) {
            $this->waterdepthmid = $v;
            $this->modifiedColumns[] = EggsPeer::WATERDEPTHMID;
        }


        return $this;
    } // setWaterdepthmid()

    /**
     * Set the value of [salinitymod] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setSalinitymod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->salinitymod !== $v) {
            $this->salinitymod = $v;
            $this->modifiedColumns[] = EggsPeer::SALINITYMOD;
        }


        return $this;
    } // setSalinitymod()

    /**
     * Set the value of [phmod] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setPhmod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->phmod !== $v) {
            $this->phmod = $v;
            $this->modifiedColumns[] = EggsPeer::PHMOD;
        }


        return $this;
    } // setPhmod()

    /**
     * Set the value of [oxygenmod] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setOxygenmod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oxygenmod !== $v) {
            $this->oxygenmod = $v;
            $this->modifiedColumns[] = EggsPeer::OXYGENMOD;
        }


        return $this;
    } // setOxygenmod()

    /**
     * Set the value of [wategg3] column.
     *
     * @param  string $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setWategg3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->wategg3 !== $v) {
            $this->wategg3 = $v;
            $this->modifiedColumns[] = EggsPeer::WATEGG3;
        }


        return $this;
    } // setWategg3()

    /**
     * Set the value of [placeofdev] column.
     *
     * @param  string $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setPlaceofdev($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->placeofdev !== $v) {
            $this->placeofdev = $v;
            $this->modifiedColumns[] = EggsPeer::PLACEOFDEV;
        }


        return $this;
    } // setPlaceofdev()

    /**
     * Set the value of [shapeofegg] column.
     *
     * @param  string $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setShapeofegg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->shapeofegg !== $v) {
            $this->shapeofegg = $v;
            $this->modifiedColumns[] = EggsPeer::SHAPEOFEGG;
        }


        return $this;
    } // setShapeofegg()

    /**
     * Set the value of [pic] column.
     *
     * @param  string $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setPic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pic !== $v) {
            $this->pic = $v;
            $this->modifiedColumns[] = EggsPeer::PIC;
        }


        return $this;
    } // setPic()

    /**
     * Set the value of [attributes] column.
     *
     * @param  string $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setAttributes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->attributes !== $v) {
            $this->attributes = $v;
            $this->modifiedColumns[] = EggsPeer::ATTRIBUTES;
        }


        return $this;
    } // setAttributes()

    /**
     * Set the value of [attributesii] column.
     *
     * @param  string $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setAttributesii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->attributesii !== $v) {
            $this->attributesii = $v;
            $this->modifiedColumns[] = EggsPeer::ATTRIBUTESII;
        }


        return $this;
    } // setAttributesii()

    /**
     * Set the value of [colourofegg] column.
     *
     * @param  string $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setColourofegg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->colourofegg !== $v) {
            $this->colourofegg = $v;
            $this->modifiedColumns[] = EggsPeer::COLOUROFEGG;
        }


        return $this;
    } // setColourofegg()

    /**
     * Set the value of [colouroilglobule] column.
     *
     * @param  string $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setColouroilglobule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->colouroilglobule !== $v) {
            $this->colouroilglobule = $v;
            $this->modifiedColumns[] = EggsPeer::COLOUROILGLOBULE;
        }


        return $this;
    } // setColouroilglobule()

    /**
     * Set the value of [oilglobules] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setOilglobules($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->oilglobules !== $v) {
            $this->oilglobules = $v;
            $this->modifiedColumns[] = EggsPeer::OILGLOBULES;
        }


        return $this;
    } // setOilglobules()

    /**
     * Set the value of [oilglobmaxref] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setOilglobmaxref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->oilglobmaxref !== $v) {
            $this->oilglobmaxref = $v;
            $this->modifiedColumns[] = EggsPeer::OILGLOBMAXREF;
        }


        return $this;
    } // setOilglobmaxref()

    /**
     * Set the value of [oilglobulesmin] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setOilglobulesmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->oilglobulesmin !== $v) {
            $this->oilglobulesmin = $v;
            $this->modifiedColumns[] = EggsPeer::OILGLOBULESMIN;
        }


        return $this;
    } // setOilglobulesmin()

    /**
     * Set the value of [oilglobminref] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setOilglobminref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->oilglobminref !== $v) {
            $this->oilglobminref = $v;
            $this->modifiedColumns[] = EggsPeer::OILGLOBMINREF;
        }


        return $this;
    } // setOilglobminref()

    /**
     * Set the value of [oilglobulesmod] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setOilglobulesmod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->oilglobulesmod !== $v) {
            $this->oilglobulesmod = $v;
            $this->modifiedColumns[] = EggsPeer::OILGLOBULESMOD;
        }


        return $this;
    } // setOilglobulesmod()

    /**
     * Set the value of [oilglobmodref] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setOilglobmodref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->oilglobmodref !== $v) {
            $this->oilglobmodref = $v;
            $this->modifiedColumns[] = EggsPeer::OILGLOBMODREF;
        }


        return $this;
    } // setOilglobmodref()

    /**
     * Set the value of [oildiametermax2] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setOildiametermax2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oildiametermax2 !== $v) {
            $this->oildiametermax2 = $v;
            $this->modifiedColumns[] = EggsPeer::OILDIAMETERMAX2;
        }


        return $this;
    } // setOildiametermax2()

    /**
     * Set the value of [oildiamaxref] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setOildiamaxref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->oildiamaxref !== $v) {
            $this->oildiamaxref = $v;
            $this->modifiedColumns[] = EggsPeer::OILDIAMAXREF;
        }


        return $this;
    } // setOildiamaxref()

    /**
     * Set the value of [oildiametermin2] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setOildiametermin2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oildiametermin2 !== $v) {
            $this->oildiametermin2 = $v;
            $this->modifiedColumns[] = EggsPeer::OILDIAMETERMIN2;
        }


        return $this;
    } // setOildiametermin2()

    /**
     * Set the value of [oildiaminref] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setOildiaminref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->oildiaminref !== $v) {
            $this->oildiaminref = $v;
            $this->modifiedColumns[] = EggsPeer::OILDIAMINREF;
        }


        return $this;
    } // setOildiaminref()

    /**
     * Set the value of [oildiametermod] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setOildiametermod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oildiametermod !== $v) {
            $this->oildiametermod = $v;
            $this->modifiedColumns[] = EggsPeer::OILDIAMETERMOD;
        }


        return $this;
    } // setOildiametermod()

    /**
     * Set the value of [oildiamodref] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setOildiamodref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->oildiamodref !== $v) {
            $this->oildiamodref = $v;
            $this->modifiedColumns[] = EggsPeer::OILDIAMODREF;
        }


        return $this;
    } // setOildiamodref()

    /**
     * Set the value of [eggdiammax] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setEggdiammax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->eggdiammax !== $v) {
            $this->eggdiammax = $v;
            $this->modifiedColumns[] = EggsPeer::EGGDIAMMAX;
        }


        return $this;
    } // setEggdiammax()

    /**
     * Set the value of [eggdiammaxref] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setEggdiammaxref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eggdiammaxref !== $v) {
            $this->eggdiammaxref = $v;
            $this->modifiedColumns[] = EggsPeer::EGGDIAMMAXREF;
        }


        return $this;
    } // setEggdiammaxref()

    /**
     * Set the value of [eggdiammin] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setEggdiammin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->eggdiammin !== $v) {
            $this->eggdiammin = $v;
            $this->modifiedColumns[] = EggsPeer::EGGDIAMMIN;
        }


        return $this;
    } // setEggdiammin()

    /**
     * Set the value of [eggdiamminref] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setEggdiamminref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eggdiamminref !== $v) {
            $this->eggdiamminref = $v;
            $this->modifiedColumns[] = EggsPeer::EGGDIAMMINREF;
        }


        return $this;
    } // setEggdiamminref()

    /**
     * Set the value of [eggdiammod] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setEggdiammod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->eggdiammod !== $v) {
            $this->eggdiammod = $v;
            $this->modifiedColumns[] = EggsPeer::EGGDIAMMOD;
        }


        return $this;
    } // setEggdiammod()

    /**
     * Set the value of [eggdiammodref] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setEggdiammodref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eggdiammodref !== $v) {
            $this->eggdiammodref = $v;
            $this->modifiedColumns[] = EggsPeer::EGGDIAMMODREF;
        }


        return $this;
    } // setEggdiammodref()

    /**
     * Set the value of [referencediammax] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setReferencediammax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->referencediammax !== $v) {
            $this->referencediammax = $v;
            $this->modifiedColumns[] = EggsPeer::REFERENCEDIAMMAX;
        }


        return $this;
    } // setReferencediammax()

    /**
     * Set the value of [referencediammin] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setReferencediammin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->referencediammin !== $v) {
            $this->referencediammin = $v;
            $this->modifiedColumns[] = EggsPeer::REFERENCEDIAMMIN;
        }


        return $this;
    } // setReferencediammin()

    /**
     * Set the value of [referencediammod] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setReferencediammod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->referencediammod !== $v) {
            $this->referencediammod = $v;
            $this->modifiedColumns[] = EggsPeer::REFERENCEDIAMMOD;
        }


        return $this;
    } // setReferencediammod()

    /**
     * Set the value of [measurementsref] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setMeasurementsref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->measurementsref !== $v) {
            $this->measurementsref = $v;
            $this->modifiedColumns[] = EggsPeer::MEASUREMENTSREF;
        }


        return $this;
    } // setMeasurementsref()

    /**
     * Set the value of [perivitwidthmax] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setPerivitwidthmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->perivitwidthmax !== $v) {
            $this->perivitwidthmax = $v;
            $this->modifiedColumns[] = EggsPeer::PERIVITWIDTHMAX;
        }


        return $this;
    } // setPerivitwidthmax()

    /**
     * Set the value of [perivitwidthmin] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setPerivitwidthmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->perivitwidthmin !== $v) {
            $this->perivitwidthmin = $v;
            $this->modifiedColumns[] = EggsPeer::PERIVITWIDTHMIN;
        }


        return $this;
    } // setPerivitwidthmin()

    /**
     * Set the value of [perivitwidthmod] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setPerivitwidthmod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->perivitwidthmod !== $v) {
            $this->perivitwidthmod = $v;
            $this->modifiedColumns[] = EggsPeer::PERIVITWIDTHMOD;
        }


        return $this;
    } // setPerivitwidthmod()

    /**
     * Set the value of [chorionthickmax] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setChorionthickmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->chorionthickmax !== $v) {
            $this->chorionthickmax = $v;
            $this->modifiedColumns[] = EggsPeer::CHORIONTHICKMAX;
        }


        return $this;
    } // setChorionthickmax()

    /**
     * Set the value of [chorionthickmin] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setChorionthickmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->chorionthickmin !== $v) {
            $this->chorionthickmin = $v;
            $this->modifiedColumns[] = EggsPeer::CHORIONTHICKMIN;
        }


        return $this;
    } // setChorionthickmin()

    /**
     * Set the value of [chorionthickmod] column.
     *
     * @param  double $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setChorionthickmod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->chorionthickmod !== $v) {
            $this->chorionthickmod = $v;
            $this->modifiedColumns[] = EggsPeer::CHORIONTHICKMOD;
        }


        return $this;
    } // setChorionthickmod()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = EggsPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Eggs The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = EggsPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = EggsPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Eggs The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = EggsPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = EggsPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Eggs The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = EggsPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [addchars] column.
     *
     * @param  string $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setAddchars($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->addchars !== $v) {
            $this->addchars = $v;
            $this->modifiedColumns[] = EggsPeer::ADDCHARS;
        }


        return $this;
    } // setAddchars()

    /**
     * Set the value of [wateggs] column.
     *
     * @param  string $v new value
     * @return Eggs The current object (for fluent API support)
     */
    public function setWateggs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->wateggs !== $v) {
            $this->wateggs = $v;
            $this->modifiedColumns[] = EggsPeer::WATEGGS;
        }


        return $this;
    } // setWateggs()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Eggs The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = EggsPeer::TS;
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

            $this->stockcode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->speccode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->eggsrefno = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->watereggref = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->watertempmax = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
            $this->waterdepthmax = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->salinitymax = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->ph = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->oxygenmax = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->watertempmin = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->waterdepthmin = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->salinitymin = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->phmin = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->oxygenmin = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->watertempmod = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->waterdepthmid = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->salinitymod = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->phmod = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->oxygenmod = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->wategg3 = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->placeofdev = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->shapeofegg = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->pic = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->attributes = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->attributesii = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->colourofegg = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->colouroilglobule = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->oilglobules = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->oilglobmaxref = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->oilglobulesmin = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->oilglobminref = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->oilglobulesmod = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->oilglobmodref = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->oildiametermax2 = ($row[$startcol + 33] !== null) ? (double) $row[$startcol + 33] : null;
            $this->oildiamaxref = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->oildiametermin2 = ($row[$startcol + 35] !== null) ? (double) $row[$startcol + 35] : null;
            $this->oildiaminref = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->oildiametermod = ($row[$startcol + 37] !== null) ? (double) $row[$startcol + 37] : null;
            $this->oildiamodref = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->eggdiammax = ($row[$startcol + 39] !== null) ? (double) $row[$startcol + 39] : null;
            $this->eggdiammaxref = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->eggdiammin = ($row[$startcol + 41] !== null) ? (double) $row[$startcol + 41] : null;
            $this->eggdiamminref = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->eggdiammod = ($row[$startcol + 43] !== null) ? (double) $row[$startcol + 43] : null;
            $this->eggdiammodref = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->referencediammax = ($row[$startcol + 45] !== null) ? (double) $row[$startcol + 45] : null;
            $this->referencediammin = ($row[$startcol + 46] !== null) ? (double) $row[$startcol + 46] : null;
            $this->referencediammod = ($row[$startcol + 47] !== null) ? (double) $row[$startcol + 47] : null;
            $this->measurementsref = ($row[$startcol + 48] !== null) ? (int) $row[$startcol + 48] : null;
            $this->perivitwidthmax = ($row[$startcol + 49] !== null) ? (double) $row[$startcol + 49] : null;
            $this->perivitwidthmin = ($row[$startcol + 50] !== null) ? (double) $row[$startcol + 50] : null;
            $this->perivitwidthmod = ($row[$startcol + 51] !== null) ? (double) $row[$startcol + 51] : null;
            $this->chorionthickmax = ($row[$startcol + 52] !== null) ? (double) $row[$startcol + 52] : null;
            $this->chorionthickmin = ($row[$startcol + 53] !== null) ? (double) $row[$startcol + 53] : null;
            $this->chorionthickmod = ($row[$startcol + 54] !== null) ? (double) $row[$startcol + 54] : null;
            $this->entered = ($row[$startcol + 55] !== null) ? (int) $row[$startcol + 55] : null;
            $this->dateentered = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->modified = ($row[$startcol + 57] !== null) ? (int) $row[$startcol + 57] : null;
            $this->datemodified = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->expert = ($row[$startcol + 59] !== null) ? (int) $row[$startcol + 59] : null;
            $this->datechecked = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->addchars = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->wateggs = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->ts = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 64; // 64 = EggsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Eggs object", $e);
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
            $con = Propel::getConnection(EggsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EggsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(EggsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EggsQuery::create()
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
            $con = Propel::getConnection(EggsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EggsPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(EggsPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Stockcode`';
        }
        if ($this->isColumnModified(EggsPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Speccode`';
        }
        if ($this->isColumnModified(EggsPeer::EGGSREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`EggsRefNo`';
        }
        if ($this->isColumnModified(EggsPeer::WATEREGGREF)) {
            $modifiedColumns[':p' . $index++]  = '`WaterEggRef`';
        }
        if ($this->isColumnModified(EggsPeer::WATERTEMPMAX)) {
            $modifiedColumns[':p' . $index++]  = '`Watertempmax`';
        }
        if ($this->isColumnModified(EggsPeer::WATERDEPTHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`Waterdepthmax`';
        }
        if ($this->isColumnModified(EggsPeer::SALINITYMAX)) {
            $modifiedColumns[':p' . $index++]  = '`Salinitymax`';
        }
        if ($this->isColumnModified(EggsPeer::PH)) {
            $modifiedColumns[':p' . $index++]  = '`pH`';
        }
        if ($this->isColumnModified(EggsPeer::OXYGENMAX)) {
            $modifiedColumns[':p' . $index++]  = '`Oxygenmax`';
        }
        if ($this->isColumnModified(EggsPeer::WATERTEMPMIN)) {
            $modifiedColumns[':p' . $index++]  = '`Watertempmin`';
        }
        if ($this->isColumnModified(EggsPeer::WATERDEPTHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`Waterdepthmin`';
        }
        if ($this->isColumnModified(EggsPeer::SALINITYMIN)) {
            $modifiedColumns[':p' . $index++]  = '`Salinitymin`';
        }
        if ($this->isColumnModified(EggsPeer::PHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`pHmin`';
        }
        if ($this->isColumnModified(EggsPeer::OXYGENMIN)) {
            $modifiedColumns[':p' . $index++]  = '`Oxygenmin`';
        }
        if ($this->isColumnModified(EggsPeer::WATERTEMPMOD)) {
            $modifiedColumns[':p' . $index++]  = '`Watertempmod`';
        }
        if ($this->isColumnModified(EggsPeer::WATERDEPTHMID)) {
            $modifiedColumns[':p' . $index++]  = '`Waterdepthmid`';
        }
        if ($this->isColumnModified(EggsPeer::SALINITYMOD)) {
            $modifiedColumns[':p' . $index++]  = '`Salinitymod`';
        }
        if ($this->isColumnModified(EggsPeer::PHMOD)) {
            $modifiedColumns[':p' . $index++]  = '`pHmod`';
        }
        if ($this->isColumnModified(EggsPeer::OXYGENMOD)) {
            $modifiedColumns[':p' . $index++]  = '`Oxygenmod`';
        }
        if ($this->isColumnModified(EggsPeer::WATEGG3)) {
            $modifiedColumns[':p' . $index++]  = '`WatEgg3`';
        }
        if ($this->isColumnModified(EggsPeer::PLACEOFDEV)) {
            $modifiedColumns[':p' . $index++]  = '`Placeofdev`';
        }
        if ($this->isColumnModified(EggsPeer::SHAPEOFEGG)) {
            $modifiedColumns[':p' . $index++]  = '`Shapeofegg`';
        }
        if ($this->isColumnModified(EggsPeer::PIC)) {
            $modifiedColumns[':p' . $index++]  = '`Pic`';
        }
        if ($this->isColumnModified(EggsPeer::ATTRIBUTES)) {
            $modifiedColumns[':p' . $index++]  = '`Attributes`';
        }
        if ($this->isColumnModified(EggsPeer::ATTRIBUTESII)) {
            $modifiedColumns[':p' . $index++]  = '`AttributesII`';
        }
        if ($this->isColumnModified(EggsPeer::COLOUROFEGG)) {
            $modifiedColumns[':p' . $index++]  = '`Colourofegg`';
        }
        if ($this->isColumnModified(EggsPeer::COLOUROILGLOBULE)) {
            $modifiedColumns[':p' . $index++]  = '`Colouroilglobule`';
        }
        if ($this->isColumnModified(EggsPeer::OILGLOBULES)) {
            $modifiedColumns[':p' . $index++]  = '`Oilglobules`';
        }
        if ($this->isColumnModified(EggsPeer::OILGLOBMAXREF)) {
            $modifiedColumns[':p' . $index++]  = '`OilglobmaxRef`';
        }
        if ($this->isColumnModified(EggsPeer::OILGLOBULESMIN)) {
            $modifiedColumns[':p' . $index++]  = '`Oilglobulesmin`';
        }
        if ($this->isColumnModified(EggsPeer::OILGLOBMINREF)) {
            $modifiedColumns[':p' . $index++]  = '`OilglobminRef`';
        }
        if ($this->isColumnModified(EggsPeer::OILGLOBULESMOD)) {
            $modifiedColumns[':p' . $index++]  = '`Oilglobulesmod`';
        }
        if ($this->isColumnModified(EggsPeer::OILGLOBMODREF)) {
            $modifiedColumns[':p' . $index++]  = '`OilglobmodRef`';
        }
        if ($this->isColumnModified(EggsPeer::OILDIAMETERMAX2)) {
            $modifiedColumns[':p' . $index++]  = '`Oildiametermax2`';
        }
        if ($this->isColumnModified(EggsPeer::OILDIAMAXREF)) {
            $modifiedColumns[':p' . $index++]  = '`OildiamaxRef`';
        }
        if ($this->isColumnModified(EggsPeer::OILDIAMETERMIN2)) {
            $modifiedColumns[':p' . $index++]  = '`Oildiametermin2`';
        }
        if ($this->isColumnModified(EggsPeer::OILDIAMINREF)) {
            $modifiedColumns[':p' . $index++]  = '`OildiaminRef`';
        }
        if ($this->isColumnModified(EggsPeer::OILDIAMETERMOD)) {
            $modifiedColumns[':p' . $index++]  = '`Oildiametermod`';
        }
        if ($this->isColumnModified(EggsPeer::OILDIAMODREF)) {
            $modifiedColumns[':p' . $index++]  = '`OildiamodRef`';
        }
        if ($this->isColumnModified(EggsPeer::EGGDIAMMAX)) {
            $modifiedColumns[':p' . $index++]  = '`Eggdiammax`';
        }
        if ($this->isColumnModified(EggsPeer::EGGDIAMMAXREF)) {
            $modifiedColumns[':p' . $index++]  = '`EggdiammaxRef`';
        }
        if ($this->isColumnModified(EggsPeer::EGGDIAMMIN)) {
            $modifiedColumns[':p' . $index++]  = '`Eggdiammin`';
        }
        if ($this->isColumnModified(EggsPeer::EGGDIAMMINREF)) {
            $modifiedColumns[':p' . $index++]  = '`EggdiamminRef`';
        }
        if ($this->isColumnModified(EggsPeer::EGGDIAMMOD)) {
            $modifiedColumns[':p' . $index++]  = '`Eggdiammod`';
        }
        if ($this->isColumnModified(EggsPeer::EGGDIAMMODREF)) {
            $modifiedColumns[':p' . $index++]  = '`EggdiammodRef`';
        }
        if ($this->isColumnModified(EggsPeer::REFERENCEDIAMMAX)) {
            $modifiedColumns[':p' . $index++]  = '`Referencediammax`';
        }
        if ($this->isColumnModified(EggsPeer::REFERENCEDIAMMIN)) {
            $modifiedColumns[':p' . $index++]  = '`Referencediammin`';
        }
        if ($this->isColumnModified(EggsPeer::REFERENCEDIAMMOD)) {
            $modifiedColumns[':p' . $index++]  = '`Referencediammod`';
        }
        if ($this->isColumnModified(EggsPeer::MEASUREMENTSREF)) {
            $modifiedColumns[':p' . $index++]  = '`MeasurementsRef`';
        }
        if ($this->isColumnModified(EggsPeer::PERIVITWIDTHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`Perivitwidthmax`';
        }
        if ($this->isColumnModified(EggsPeer::PERIVITWIDTHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`Perivitwidthmin`';
        }
        if ($this->isColumnModified(EggsPeer::PERIVITWIDTHMOD)) {
            $modifiedColumns[':p' . $index++]  = '`Perivitwidthmod`';
        }
        if ($this->isColumnModified(EggsPeer::CHORIONTHICKMAX)) {
            $modifiedColumns[':p' . $index++]  = '`Chorionthickmax`';
        }
        if ($this->isColumnModified(EggsPeer::CHORIONTHICKMIN)) {
            $modifiedColumns[':p' . $index++]  = '`Chorionthickmin`';
        }
        if ($this->isColumnModified(EggsPeer::CHORIONTHICKMOD)) {
            $modifiedColumns[':p' . $index++]  = '`Chorionthickmod`';
        }
        if ($this->isColumnModified(EggsPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(EggsPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(EggsPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(EggsPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(EggsPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(EggsPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(EggsPeer::ADDCHARS)) {
            $modifiedColumns[':p' . $index++]  = '`AddChars`';
        }
        if ($this->isColumnModified(EggsPeer::WATEGGS)) {
            $modifiedColumns[':p' . $index++]  = '`WatEggs`';
        }
        if ($this->isColumnModified(EggsPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `eggs` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`Stockcode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`Speccode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`EggsRefNo`':
                        $stmt->bindValue($identifier, $this->eggsrefno, PDO::PARAM_INT);
                        break;
                    case '`WaterEggRef`':
                        $stmt->bindValue($identifier, $this->watereggref, PDO::PARAM_INT);
                        break;
                    case '`Watertempmax`':
                        $stmt->bindValue($identifier, $this->watertempmax, PDO::PARAM_STR);
                        break;
                    case '`Waterdepthmax`':
                        $stmt->bindValue($identifier, $this->waterdepthmax, PDO::PARAM_INT);
                        break;
                    case '`Salinitymax`':
                        $stmt->bindValue($identifier, $this->salinitymax, PDO::PARAM_STR);
                        break;
                    case '`pH`':
                        $stmt->bindValue($identifier, $this->ph, PDO::PARAM_STR);
                        break;
                    case '`Oxygenmax`':
                        $stmt->bindValue($identifier, $this->oxygenmax, PDO::PARAM_STR);
                        break;
                    case '`Watertempmin`':
                        $stmt->bindValue($identifier, $this->watertempmin, PDO::PARAM_STR);
                        break;
                    case '`Waterdepthmin`':
                        $stmt->bindValue($identifier, $this->waterdepthmin, PDO::PARAM_INT);
                        break;
                    case '`Salinitymin`':
                        $stmt->bindValue($identifier, $this->salinitymin, PDO::PARAM_STR);
                        break;
                    case '`pHmin`':
                        $stmt->bindValue($identifier, $this->phmin, PDO::PARAM_STR);
                        break;
                    case '`Oxygenmin`':
                        $stmt->bindValue($identifier, $this->oxygenmin, PDO::PARAM_STR);
                        break;
                    case '`Watertempmod`':
                        $stmt->bindValue($identifier, $this->watertempmod, PDO::PARAM_STR);
                        break;
                    case '`Waterdepthmid`':
                        $stmt->bindValue($identifier, $this->waterdepthmid, PDO::PARAM_INT);
                        break;
                    case '`Salinitymod`':
                        $stmt->bindValue($identifier, $this->salinitymod, PDO::PARAM_STR);
                        break;
                    case '`pHmod`':
                        $stmt->bindValue($identifier, $this->phmod, PDO::PARAM_STR);
                        break;
                    case '`Oxygenmod`':
                        $stmt->bindValue($identifier, $this->oxygenmod, PDO::PARAM_STR);
                        break;
                    case '`WatEgg3`':
                        $stmt->bindValue($identifier, $this->wategg3, PDO::PARAM_STR);
                        break;
                    case '`Placeofdev`':
                        $stmt->bindValue($identifier, $this->placeofdev, PDO::PARAM_STR);
                        break;
                    case '`Shapeofegg`':
                        $stmt->bindValue($identifier, $this->shapeofegg, PDO::PARAM_STR);
                        break;
                    case '`Pic`':
                        $stmt->bindValue($identifier, $this->pic, PDO::PARAM_STR);
                        break;
                    case '`Attributes`':
                        $stmt->bindValue($identifier, $this->attributes, PDO::PARAM_STR);
                        break;
                    case '`AttributesII`':
                        $stmt->bindValue($identifier, $this->attributesii, PDO::PARAM_STR);
                        break;
                    case '`Colourofegg`':
                        $stmt->bindValue($identifier, $this->colourofegg, PDO::PARAM_STR);
                        break;
                    case '`Colouroilglobule`':
                        $stmt->bindValue($identifier, $this->colouroilglobule, PDO::PARAM_STR);
                        break;
                    case '`Oilglobules`':
                        $stmt->bindValue($identifier, $this->oilglobules, PDO::PARAM_INT);
                        break;
                    case '`OilglobmaxRef`':
                        $stmt->bindValue($identifier, $this->oilglobmaxref, PDO::PARAM_INT);
                        break;
                    case '`Oilglobulesmin`':
                        $stmt->bindValue($identifier, $this->oilglobulesmin, PDO::PARAM_INT);
                        break;
                    case '`OilglobminRef`':
                        $stmt->bindValue($identifier, $this->oilglobminref, PDO::PARAM_INT);
                        break;
                    case '`Oilglobulesmod`':
                        $stmt->bindValue($identifier, $this->oilglobulesmod, PDO::PARAM_INT);
                        break;
                    case '`OilglobmodRef`':
                        $stmt->bindValue($identifier, $this->oilglobmodref, PDO::PARAM_INT);
                        break;
                    case '`Oildiametermax2`':
                        $stmt->bindValue($identifier, $this->oildiametermax2, PDO::PARAM_STR);
                        break;
                    case '`OildiamaxRef`':
                        $stmt->bindValue($identifier, $this->oildiamaxref, PDO::PARAM_INT);
                        break;
                    case '`Oildiametermin2`':
                        $stmt->bindValue($identifier, $this->oildiametermin2, PDO::PARAM_STR);
                        break;
                    case '`OildiaminRef`':
                        $stmt->bindValue($identifier, $this->oildiaminref, PDO::PARAM_INT);
                        break;
                    case '`Oildiametermod`':
                        $stmt->bindValue($identifier, $this->oildiametermod, PDO::PARAM_STR);
                        break;
                    case '`OildiamodRef`':
                        $stmt->bindValue($identifier, $this->oildiamodref, PDO::PARAM_INT);
                        break;
                    case '`Eggdiammax`':
                        $stmt->bindValue($identifier, $this->eggdiammax, PDO::PARAM_STR);
                        break;
                    case '`EggdiammaxRef`':
                        $stmt->bindValue($identifier, $this->eggdiammaxref, PDO::PARAM_INT);
                        break;
                    case '`Eggdiammin`':
                        $stmt->bindValue($identifier, $this->eggdiammin, PDO::PARAM_STR);
                        break;
                    case '`EggdiamminRef`':
                        $stmt->bindValue($identifier, $this->eggdiamminref, PDO::PARAM_INT);
                        break;
                    case '`Eggdiammod`':
                        $stmt->bindValue($identifier, $this->eggdiammod, PDO::PARAM_STR);
                        break;
                    case '`EggdiammodRef`':
                        $stmt->bindValue($identifier, $this->eggdiammodref, PDO::PARAM_INT);
                        break;
                    case '`Referencediammax`':
                        $stmt->bindValue($identifier, $this->referencediammax, PDO::PARAM_STR);
                        break;
                    case '`Referencediammin`':
                        $stmt->bindValue($identifier, $this->referencediammin, PDO::PARAM_STR);
                        break;
                    case '`Referencediammod`':
                        $stmt->bindValue($identifier, $this->referencediammod, PDO::PARAM_STR);
                        break;
                    case '`MeasurementsRef`':
                        $stmt->bindValue($identifier, $this->measurementsref, PDO::PARAM_INT);
                        break;
                    case '`Perivitwidthmax`':
                        $stmt->bindValue($identifier, $this->perivitwidthmax, PDO::PARAM_STR);
                        break;
                    case '`Perivitwidthmin`':
                        $stmt->bindValue($identifier, $this->perivitwidthmin, PDO::PARAM_STR);
                        break;
                    case '`Perivitwidthmod`':
                        $stmt->bindValue($identifier, $this->perivitwidthmod, PDO::PARAM_STR);
                        break;
                    case '`Chorionthickmax`':
                        $stmt->bindValue($identifier, $this->chorionthickmax, PDO::PARAM_STR);
                        break;
                    case '`Chorionthickmin`':
                        $stmt->bindValue($identifier, $this->chorionthickmin, PDO::PARAM_STR);
                        break;
                    case '`Chorionthickmod`':
                        $stmt->bindValue($identifier, $this->chorionthickmod, PDO::PARAM_STR);
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
                    case '`AddChars`':
                        $stmt->bindValue($identifier, $this->addchars, PDO::PARAM_STR);
                        break;
                    case '`WatEggs`':
                        $stmt->bindValue($identifier, $this->wateggs, PDO::PARAM_STR);
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


            if (($retval = EggsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = EggsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getStockcode();
                break;
            case 1:
                return $this->getSpeccode();
                break;
            case 2:
                return $this->getEggsrefno();
                break;
            case 3:
                return $this->getWatereggref();
                break;
            case 4:
                return $this->getWatertempmax();
                break;
            case 5:
                return $this->getWaterdepthmax();
                break;
            case 6:
                return $this->getSalinitymax();
                break;
            case 7:
                return $this->getPh();
                break;
            case 8:
                return $this->getOxygenmax();
                break;
            case 9:
                return $this->getWatertempmin();
                break;
            case 10:
                return $this->getWaterdepthmin();
                break;
            case 11:
                return $this->getSalinitymin();
                break;
            case 12:
                return $this->getPhmin();
                break;
            case 13:
                return $this->getOxygenmin();
                break;
            case 14:
                return $this->getWatertempmod();
                break;
            case 15:
                return $this->getWaterdepthmid();
                break;
            case 16:
                return $this->getSalinitymod();
                break;
            case 17:
                return $this->getPhmod();
                break;
            case 18:
                return $this->getOxygenmod();
                break;
            case 19:
                return $this->getWategg3();
                break;
            case 20:
                return $this->getPlaceofdev();
                break;
            case 21:
                return $this->getShapeofegg();
                break;
            case 22:
                return $this->getPic();
                break;
            case 23:
                return $this->getAttributes();
                break;
            case 24:
                return $this->getAttributesii();
                break;
            case 25:
                return $this->getColourofegg();
                break;
            case 26:
                return $this->getColouroilglobule();
                break;
            case 27:
                return $this->getOilglobules();
                break;
            case 28:
                return $this->getOilglobmaxref();
                break;
            case 29:
                return $this->getOilglobulesmin();
                break;
            case 30:
                return $this->getOilglobminref();
                break;
            case 31:
                return $this->getOilglobulesmod();
                break;
            case 32:
                return $this->getOilglobmodref();
                break;
            case 33:
                return $this->getOildiametermax2();
                break;
            case 34:
                return $this->getOildiamaxref();
                break;
            case 35:
                return $this->getOildiametermin2();
                break;
            case 36:
                return $this->getOildiaminref();
                break;
            case 37:
                return $this->getOildiametermod();
                break;
            case 38:
                return $this->getOildiamodref();
                break;
            case 39:
                return $this->getEggdiammax();
                break;
            case 40:
                return $this->getEggdiammaxref();
                break;
            case 41:
                return $this->getEggdiammin();
                break;
            case 42:
                return $this->getEggdiamminref();
                break;
            case 43:
                return $this->getEggdiammod();
                break;
            case 44:
                return $this->getEggdiammodref();
                break;
            case 45:
                return $this->getReferencediammax();
                break;
            case 46:
                return $this->getReferencediammin();
                break;
            case 47:
                return $this->getReferencediammod();
                break;
            case 48:
                return $this->getMeasurementsref();
                break;
            case 49:
                return $this->getPerivitwidthmax();
                break;
            case 50:
                return $this->getPerivitwidthmin();
                break;
            case 51:
                return $this->getPerivitwidthmod();
                break;
            case 52:
                return $this->getChorionthickmax();
                break;
            case 53:
                return $this->getChorionthickmin();
                break;
            case 54:
                return $this->getChorionthickmod();
                break;
            case 55:
                return $this->getEntered();
                break;
            case 56:
                return $this->getDateentered();
                break;
            case 57:
                return $this->getModified();
                break;
            case 58:
                return $this->getDatemodified();
                break;
            case 59:
                return $this->getExpert();
                break;
            case 60:
                return $this->getDatechecked();
                break;
            case 61:
                return $this->getAddchars();
                break;
            case 62:
                return $this->getWateggs();
                break;
            case 63:
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
        if (isset($alreadyDumpedObjects['Eggs'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Eggs'][$this->getPrimaryKey()] = true;
        $keys = EggsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getStockcode(),
            $keys[1] => $this->getSpeccode(),
            $keys[2] => $this->getEggsrefno(),
            $keys[3] => $this->getWatereggref(),
            $keys[4] => $this->getWatertempmax(),
            $keys[5] => $this->getWaterdepthmax(),
            $keys[6] => $this->getSalinitymax(),
            $keys[7] => $this->getPh(),
            $keys[8] => $this->getOxygenmax(),
            $keys[9] => $this->getWatertempmin(),
            $keys[10] => $this->getWaterdepthmin(),
            $keys[11] => $this->getSalinitymin(),
            $keys[12] => $this->getPhmin(),
            $keys[13] => $this->getOxygenmin(),
            $keys[14] => $this->getWatertempmod(),
            $keys[15] => $this->getWaterdepthmid(),
            $keys[16] => $this->getSalinitymod(),
            $keys[17] => $this->getPhmod(),
            $keys[18] => $this->getOxygenmod(),
            $keys[19] => $this->getWategg3(),
            $keys[20] => $this->getPlaceofdev(),
            $keys[21] => $this->getShapeofegg(),
            $keys[22] => $this->getPic(),
            $keys[23] => $this->getAttributes(),
            $keys[24] => $this->getAttributesii(),
            $keys[25] => $this->getColourofegg(),
            $keys[26] => $this->getColouroilglobule(),
            $keys[27] => $this->getOilglobules(),
            $keys[28] => $this->getOilglobmaxref(),
            $keys[29] => $this->getOilglobulesmin(),
            $keys[30] => $this->getOilglobminref(),
            $keys[31] => $this->getOilglobulesmod(),
            $keys[32] => $this->getOilglobmodref(),
            $keys[33] => $this->getOildiametermax2(),
            $keys[34] => $this->getOildiamaxref(),
            $keys[35] => $this->getOildiametermin2(),
            $keys[36] => $this->getOildiaminref(),
            $keys[37] => $this->getOildiametermod(),
            $keys[38] => $this->getOildiamodref(),
            $keys[39] => $this->getEggdiammax(),
            $keys[40] => $this->getEggdiammaxref(),
            $keys[41] => $this->getEggdiammin(),
            $keys[42] => $this->getEggdiamminref(),
            $keys[43] => $this->getEggdiammod(),
            $keys[44] => $this->getEggdiammodref(),
            $keys[45] => $this->getReferencediammax(),
            $keys[46] => $this->getReferencediammin(),
            $keys[47] => $this->getReferencediammod(),
            $keys[48] => $this->getMeasurementsref(),
            $keys[49] => $this->getPerivitwidthmax(),
            $keys[50] => $this->getPerivitwidthmin(),
            $keys[51] => $this->getPerivitwidthmod(),
            $keys[52] => $this->getChorionthickmax(),
            $keys[53] => $this->getChorionthickmin(),
            $keys[54] => $this->getChorionthickmod(),
            $keys[55] => $this->getEntered(),
            $keys[56] => $this->getDateentered(),
            $keys[57] => $this->getModified(),
            $keys[58] => $this->getDatemodified(),
            $keys[59] => $this->getExpert(),
            $keys[60] => $this->getDatechecked(),
            $keys[61] => $this->getAddchars(),
            $keys[62] => $this->getWateggs(),
            $keys[63] => $this->getTs(),
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
        $pos = EggsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setStockcode($value);
                break;
            case 1:
                $this->setSpeccode($value);
                break;
            case 2:
                $this->setEggsrefno($value);
                break;
            case 3:
                $this->setWatereggref($value);
                break;
            case 4:
                $this->setWatertempmax($value);
                break;
            case 5:
                $this->setWaterdepthmax($value);
                break;
            case 6:
                $this->setSalinitymax($value);
                break;
            case 7:
                $this->setPh($value);
                break;
            case 8:
                $this->setOxygenmax($value);
                break;
            case 9:
                $this->setWatertempmin($value);
                break;
            case 10:
                $this->setWaterdepthmin($value);
                break;
            case 11:
                $this->setSalinitymin($value);
                break;
            case 12:
                $this->setPhmin($value);
                break;
            case 13:
                $this->setOxygenmin($value);
                break;
            case 14:
                $this->setWatertempmod($value);
                break;
            case 15:
                $this->setWaterdepthmid($value);
                break;
            case 16:
                $this->setSalinitymod($value);
                break;
            case 17:
                $this->setPhmod($value);
                break;
            case 18:
                $this->setOxygenmod($value);
                break;
            case 19:
                $this->setWategg3($value);
                break;
            case 20:
                $this->setPlaceofdev($value);
                break;
            case 21:
                $this->setShapeofegg($value);
                break;
            case 22:
                $this->setPic($value);
                break;
            case 23:
                $this->setAttributes($value);
                break;
            case 24:
                $this->setAttributesii($value);
                break;
            case 25:
                $this->setColourofegg($value);
                break;
            case 26:
                $this->setColouroilglobule($value);
                break;
            case 27:
                $this->setOilglobules($value);
                break;
            case 28:
                $this->setOilglobmaxref($value);
                break;
            case 29:
                $this->setOilglobulesmin($value);
                break;
            case 30:
                $this->setOilglobminref($value);
                break;
            case 31:
                $this->setOilglobulesmod($value);
                break;
            case 32:
                $this->setOilglobmodref($value);
                break;
            case 33:
                $this->setOildiametermax2($value);
                break;
            case 34:
                $this->setOildiamaxref($value);
                break;
            case 35:
                $this->setOildiametermin2($value);
                break;
            case 36:
                $this->setOildiaminref($value);
                break;
            case 37:
                $this->setOildiametermod($value);
                break;
            case 38:
                $this->setOildiamodref($value);
                break;
            case 39:
                $this->setEggdiammax($value);
                break;
            case 40:
                $this->setEggdiammaxref($value);
                break;
            case 41:
                $this->setEggdiammin($value);
                break;
            case 42:
                $this->setEggdiamminref($value);
                break;
            case 43:
                $this->setEggdiammod($value);
                break;
            case 44:
                $this->setEggdiammodref($value);
                break;
            case 45:
                $this->setReferencediammax($value);
                break;
            case 46:
                $this->setReferencediammin($value);
                break;
            case 47:
                $this->setReferencediammod($value);
                break;
            case 48:
                $this->setMeasurementsref($value);
                break;
            case 49:
                $this->setPerivitwidthmax($value);
                break;
            case 50:
                $this->setPerivitwidthmin($value);
                break;
            case 51:
                $this->setPerivitwidthmod($value);
                break;
            case 52:
                $this->setChorionthickmax($value);
                break;
            case 53:
                $this->setChorionthickmin($value);
                break;
            case 54:
                $this->setChorionthickmod($value);
                break;
            case 55:
                $this->setEntered($value);
                break;
            case 56:
                $this->setDateentered($value);
                break;
            case 57:
                $this->setModified($value);
                break;
            case 58:
                $this->setDatemodified($value);
                break;
            case 59:
                $this->setExpert($value);
                break;
            case 60:
                $this->setDatechecked($value);
                break;
            case 61:
                $this->setAddchars($value);
                break;
            case 62:
                $this->setWateggs($value);
                break;
            case 63:
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
        $keys = EggsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setStockcode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSpeccode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEggsrefno($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setWatereggref($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setWatertempmax($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setWaterdepthmax($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSalinitymax($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPh($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setOxygenmax($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setWatertempmin($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setWaterdepthmin($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setSalinitymin($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setPhmin($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setOxygenmin($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setWatertempmod($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setWaterdepthmid($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setSalinitymod($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setPhmod($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setOxygenmod($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setWategg3($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setPlaceofdev($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setShapeofegg($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setPic($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setAttributes($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setAttributesii($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setColourofegg($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setColouroilglobule($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setOilglobules($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setOilglobmaxref($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setOilglobulesmin($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setOilglobminref($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setOilglobulesmod($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setOilglobmodref($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setOildiametermax2($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setOildiamaxref($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setOildiametermin2($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setOildiaminref($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setOildiametermod($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setOildiamodref($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setEggdiammax($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setEggdiammaxref($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setEggdiammin($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setEggdiamminref($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setEggdiammod($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setEggdiammodref($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setReferencediammax($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setReferencediammin($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setReferencediammod($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setMeasurementsref($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setPerivitwidthmax($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setPerivitwidthmin($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setPerivitwidthmod($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setChorionthickmax($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setChorionthickmin($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setChorionthickmod($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setEntered($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setDateentered($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setModified($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setDatemodified($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setExpert($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setDatechecked($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setAddchars($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setWateggs($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setTs($arr[$keys[63]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EggsPeer::DATABASE_NAME);

        if ($this->isColumnModified(EggsPeer::STOCKCODE)) $criteria->add(EggsPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(EggsPeer::SPECCODE)) $criteria->add(EggsPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(EggsPeer::EGGSREFNO)) $criteria->add(EggsPeer::EGGSREFNO, $this->eggsrefno);
        if ($this->isColumnModified(EggsPeer::WATEREGGREF)) $criteria->add(EggsPeer::WATEREGGREF, $this->watereggref);
        if ($this->isColumnModified(EggsPeer::WATERTEMPMAX)) $criteria->add(EggsPeer::WATERTEMPMAX, $this->watertempmax);
        if ($this->isColumnModified(EggsPeer::WATERDEPTHMAX)) $criteria->add(EggsPeer::WATERDEPTHMAX, $this->waterdepthmax);
        if ($this->isColumnModified(EggsPeer::SALINITYMAX)) $criteria->add(EggsPeer::SALINITYMAX, $this->salinitymax);
        if ($this->isColumnModified(EggsPeer::PH)) $criteria->add(EggsPeer::PH, $this->ph);
        if ($this->isColumnModified(EggsPeer::OXYGENMAX)) $criteria->add(EggsPeer::OXYGENMAX, $this->oxygenmax);
        if ($this->isColumnModified(EggsPeer::WATERTEMPMIN)) $criteria->add(EggsPeer::WATERTEMPMIN, $this->watertempmin);
        if ($this->isColumnModified(EggsPeer::WATERDEPTHMIN)) $criteria->add(EggsPeer::WATERDEPTHMIN, $this->waterdepthmin);
        if ($this->isColumnModified(EggsPeer::SALINITYMIN)) $criteria->add(EggsPeer::SALINITYMIN, $this->salinitymin);
        if ($this->isColumnModified(EggsPeer::PHMIN)) $criteria->add(EggsPeer::PHMIN, $this->phmin);
        if ($this->isColumnModified(EggsPeer::OXYGENMIN)) $criteria->add(EggsPeer::OXYGENMIN, $this->oxygenmin);
        if ($this->isColumnModified(EggsPeer::WATERTEMPMOD)) $criteria->add(EggsPeer::WATERTEMPMOD, $this->watertempmod);
        if ($this->isColumnModified(EggsPeer::WATERDEPTHMID)) $criteria->add(EggsPeer::WATERDEPTHMID, $this->waterdepthmid);
        if ($this->isColumnModified(EggsPeer::SALINITYMOD)) $criteria->add(EggsPeer::SALINITYMOD, $this->salinitymod);
        if ($this->isColumnModified(EggsPeer::PHMOD)) $criteria->add(EggsPeer::PHMOD, $this->phmod);
        if ($this->isColumnModified(EggsPeer::OXYGENMOD)) $criteria->add(EggsPeer::OXYGENMOD, $this->oxygenmod);
        if ($this->isColumnModified(EggsPeer::WATEGG3)) $criteria->add(EggsPeer::WATEGG3, $this->wategg3);
        if ($this->isColumnModified(EggsPeer::PLACEOFDEV)) $criteria->add(EggsPeer::PLACEOFDEV, $this->placeofdev);
        if ($this->isColumnModified(EggsPeer::SHAPEOFEGG)) $criteria->add(EggsPeer::SHAPEOFEGG, $this->shapeofegg);
        if ($this->isColumnModified(EggsPeer::PIC)) $criteria->add(EggsPeer::PIC, $this->pic);
        if ($this->isColumnModified(EggsPeer::ATTRIBUTES)) $criteria->add(EggsPeer::ATTRIBUTES, $this->attributes);
        if ($this->isColumnModified(EggsPeer::ATTRIBUTESII)) $criteria->add(EggsPeer::ATTRIBUTESII, $this->attributesii);
        if ($this->isColumnModified(EggsPeer::COLOUROFEGG)) $criteria->add(EggsPeer::COLOUROFEGG, $this->colourofegg);
        if ($this->isColumnModified(EggsPeer::COLOUROILGLOBULE)) $criteria->add(EggsPeer::COLOUROILGLOBULE, $this->colouroilglobule);
        if ($this->isColumnModified(EggsPeer::OILGLOBULES)) $criteria->add(EggsPeer::OILGLOBULES, $this->oilglobules);
        if ($this->isColumnModified(EggsPeer::OILGLOBMAXREF)) $criteria->add(EggsPeer::OILGLOBMAXREF, $this->oilglobmaxref);
        if ($this->isColumnModified(EggsPeer::OILGLOBULESMIN)) $criteria->add(EggsPeer::OILGLOBULESMIN, $this->oilglobulesmin);
        if ($this->isColumnModified(EggsPeer::OILGLOBMINREF)) $criteria->add(EggsPeer::OILGLOBMINREF, $this->oilglobminref);
        if ($this->isColumnModified(EggsPeer::OILGLOBULESMOD)) $criteria->add(EggsPeer::OILGLOBULESMOD, $this->oilglobulesmod);
        if ($this->isColumnModified(EggsPeer::OILGLOBMODREF)) $criteria->add(EggsPeer::OILGLOBMODREF, $this->oilglobmodref);
        if ($this->isColumnModified(EggsPeer::OILDIAMETERMAX2)) $criteria->add(EggsPeer::OILDIAMETERMAX2, $this->oildiametermax2);
        if ($this->isColumnModified(EggsPeer::OILDIAMAXREF)) $criteria->add(EggsPeer::OILDIAMAXREF, $this->oildiamaxref);
        if ($this->isColumnModified(EggsPeer::OILDIAMETERMIN2)) $criteria->add(EggsPeer::OILDIAMETERMIN2, $this->oildiametermin2);
        if ($this->isColumnModified(EggsPeer::OILDIAMINREF)) $criteria->add(EggsPeer::OILDIAMINREF, $this->oildiaminref);
        if ($this->isColumnModified(EggsPeer::OILDIAMETERMOD)) $criteria->add(EggsPeer::OILDIAMETERMOD, $this->oildiametermod);
        if ($this->isColumnModified(EggsPeer::OILDIAMODREF)) $criteria->add(EggsPeer::OILDIAMODREF, $this->oildiamodref);
        if ($this->isColumnModified(EggsPeer::EGGDIAMMAX)) $criteria->add(EggsPeer::EGGDIAMMAX, $this->eggdiammax);
        if ($this->isColumnModified(EggsPeer::EGGDIAMMAXREF)) $criteria->add(EggsPeer::EGGDIAMMAXREF, $this->eggdiammaxref);
        if ($this->isColumnModified(EggsPeer::EGGDIAMMIN)) $criteria->add(EggsPeer::EGGDIAMMIN, $this->eggdiammin);
        if ($this->isColumnModified(EggsPeer::EGGDIAMMINREF)) $criteria->add(EggsPeer::EGGDIAMMINREF, $this->eggdiamminref);
        if ($this->isColumnModified(EggsPeer::EGGDIAMMOD)) $criteria->add(EggsPeer::EGGDIAMMOD, $this->eggdiammod);
        if ($this->isColumnModified(EggsPeer::EGGDIAMMODREF)) $criteria->add(EggsPeer::EGGDIAMMODREF, $this->eggdiammodref);
        if ($this->isColumnModified(EggsPeer::REFERENCEDIAMMAX)) $criteria->add(EggsPeer::REFERENCEDIAMMAX, $this->referencediammax);
        if ($this->isColumnModified(EggsPeer::REFERENCEDIAMMIN)) $criteria->add(EggsPeer::REFERENCEDIAMMIN, $this->referencediammin);
        if ($this->isColumnModified(EggsPeer::REFERENCEDIAMMOD)) $criteria->add(EggsPeer::REFERENCEDIAMMOD, $this->referencediammod);
        if ($this->isColumnModified(EggsPeer::MEASUREMENTSREF)) $criteria->add(EggsPeer::MEASUREMENTSREF, $this->measurementsref);
        if ($this->isColumnModified(EggsPeer::PERIVITWIDTHMAX)) $criteria->add(EggsPeer::PERIVITWIDTHMAX, $this->perivitwidthmax);
        if ($this->isColumnModified(EggsPeer::PERIVITWIDTHMIN)) $criteria->add(EggsPeer::PERIVITWIDTHMIN, $this->perivitwidthmin);
        if ($this->isColumnModified(EggsPeer::PERIVITWIDTHMOD)) $criteria->add(EggsPeer::PERIVITWIDTHMOD, $this->perivitwidthmod);
        if ($this->isColumnModified(EggsPeer::CHORIONTHICKMAX)) $criteria->add(EggsPeer::CHORIONTHICKMAX, $this->chorionthickmax);
        if ($this->isColumnModified(EggsPeer::CHORIONTHICKMIN)) $criteria->add(EggsPeer::CHORIONTHICKMIN, $this->chorionthickmin);
        if ($this->isColumnModified(EggsPeer::CHORIONTHICKMOD)) $criteria->add(EggsPeer::CHORIONTHICKMOD, $this->chorionthickmod);
        if ($this->isColumnModified(EggsPeer::ENTERED)) $criteria->add(EggsPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(EggsPeer::DATEENTERED)) $criteria->add(EggsPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(EggsPeer::MODIFIED)) $criteria->add(EggsPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(EggsPeer::DATEMODIFIED)) $criteria->add(EggsPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(EggsPeer::EXPERT)) $criteria->add(EggsPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(EggsPeer::DATECHECKED)) $criteria->add(EggsPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(EggsPeer::ADDCHARS)) $criteria->add(EggsPeer::ADDCHARS, $this->addchars);
        if ($this->isColumnModified(EggsPeer::WATEGGS)) $criteria->add(EggsPeer::WATEGGS, $this->wateggs);
        if ($this->isColumnModified(EggsPeer::TS)) $criteria->add(EggsPeer::TS, $this->ts);

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
        $criteria = new Criteria(EggsPeer::DATABASE_NAME);
        $criteria->add(EggsPeer::STOCKCODE, $this->stockcode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getStockcode();
    }

    /**
     * Generic method to set the primary key (stockcode column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setStockcode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getStockcode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Eggs (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setEggsrefno($this->getEggsrefno());
        $copyObj->setWatereggref($this->getWatereggref());
        $copyObj->setWatertempmax($this->getWatertempmax());
        $copyObj->setWaterdepthmax($this->getWaterdepthmax());
        $copyObj->setSalinitymax($this->getSalinitymax());
        $copyObj->setPh($this->getPh());
        $copyObj->setOxygenmax($this->getOxygenmax());
        $copyObj->setWatertempmin($this->getWatertempmin());
        $copyObj->setWaterdepthmin($this->getWaterdepthmin());
        $copyObj->setSalinitymin($this->getSalinitymin());
        $copyObj->setPhmin($this->getPhmin());
        $copyObj->setOxygenmin($this->getOxygenmin());
        $copyObj->setWatertempmod($this->getWatertempmod());
        $copyObj->setWaterdepthmid($this->getWaterdepthmid());
        $copyObj->setSalinitymod($this->getSalinitymod());
        $copyObj->setPhmod($this->getPhmod());
        $copyObj->setOxygenmod($this->getOxygenmod());
        $copyObj->setWategg3($this->getWategg3());
        $copyObj->setPlaceofdev($this->getPlaceofdev());
        $copyObj->setShapeofegg($this->getShapeofegg());
        $copyObj->setPic($this->getPic());
        $copyObj->setAttributes($this->getAttributes());
        $copyObj->setAttributesii($this->getAttributesii());
        $copyObj->setColourofegg($this->getColourofegg());
        $copyObj->setColouroilglobule($this->getColouroilglobule());
        $copyObj->setOilglobules($this->getOilglobules());
        $copyObj->setOilglobmaxref($this->getOilglobmaxref());
        $copyObj->setOilglobulesmin($this->getOilglobulesmin());
        $copyObj->setOilglobminref($this->getOilglobminref());
        $copyObj->setOilglobulesmod($this->getOilglobulesmod());
        $copyObj->setOilglobmodref($this->getOilglobmodref());
        $copyObj->setOildiametermax2($this->getOildiametermax2());
        $copyObj->setOildiamaxref($this->getOildiamaxref());
        $copyObj->setOildiametermin2($this->getOildiametermin2());
        $copyObj->setOildiaminref($this->getOildiaminref());
        $copyObj->setOildiametermod($this->getOildiametermod());
        $copyObj->setOildiamodref($this->getOildiamodref());
        $copyObj->setEggdiammax($this->getEggdiammax());
        $copyObj->setEggdiammaxref($this->getEggdiammaxref());
        $copyObj->setEggdiammin($this->getEggdiammin());
        $copyObj->setEggdiamminref($this->getEggdiamminref());
        $copyObj->setEggdiammod($this->getEggdiammod());
        $copyObj->setEggdiammodref($this->getEggdiammodref());
        $copyObj->setReferencediammax($this->getReferencediammax());
        $copyObj->setReferencediammin($this->getReferencediammin());
        $copyObj->setReferencediammod($this->getReferencediammod());
        $copyObj->setMeasurementsref($this->getMeasurementsref());
        $copyObj->setPerivitwidthmax($this->getPerivitwidthmax());
        $copyObj->setPerivitwidthmin($this->getPerivitwidthmin());
        $copyObj->setPerivitwidthmod($this->getPerivitwidthmod());
        $copyObj->setChorionthickmax($this->getChorionthickmax());
        $copyObj->setChorionthickmin($this->getChorionthickmin());
        $copyObj->setChorionthickmod($this->getChorionthickmod());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setAddchars($this->getAddchars());
        $copyObj->setWateggs($this->getWateggs());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setStockcode(NULL); // this is a auto-increment column, so set to default value
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
     * @return Eggs Clone of current object.
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
     * @return EggsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EggsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->stockcode = null;
        $this->speccode = null;
        $this->eggsrefno = null;
        $this->watereggref = null;
        $this->watertempmax = null;
        $this->waterdepthmax = null;
        $this->salinitymax = null;
        $this->ph = null;
        $this->oxygenmax = null;
        $this->watertempmin = null;
        $this->waterdepthmin = null;
        $this->salinitymin = null;
        $this->phmin = null;
        $this->oxygenmin = null;
        $this->watertempmod = null;
        $this->waterdepthmid = null;
        $this->salinitymod = null;
        $this->phmod = null;
        $this->oxygenmod = null;
        $this->wategg3 = null;
        $this->placeofdev = null;
        $this->shapeofegg = null;
        $this->pic = null;
        $this->attributes = null;
        $this->attributesii = null;
        $this->colourofegg = null;
        $this->colouroilglobule = null;
        $this->oilglobules = null;
        $this->oilglobmaxref = null;
        $this->oilglobulesmin = null;
        $this->oilglobminref = null;
        $this->oilglobulesmod = null;
        $this->oilglobmodref = null;
        $this->oildiametermax2 = null;
        $this->oildiamaxref = null;
        $this->oildiametermin2 = null;
        $this->oildiaminref = null;
        $this->oildiametermod = null;
        $this->oildiamodref = null;
        $this->eggdiammax = null;
        $this->eggdiammaxref = null;
        $this->eggdiammin = null;
        $this->eggdiamminref = null;
        $this->eggdiammod = null;
        $this->eggdiammodref = null;
        $this->referencediammax = null;
        $this->referencediammin = null;
        $this->referencediammod = null;
        $this->measurementsref = null;
        $this->perivitwidthmax = null;
        $this->perivitwidthmin = null;
        $this->perivitwidthmod = null;
        $this->chorionthickmax = null;
        $this->chorionthickmin = null;
        $this->chorionthickmod = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->addchars = null;
        $this->wateggs = null;
        $this->ts = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
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
        return (string) $this->exportTo(EggsPeer::DEFAULT_STRING_FORMAT);
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
