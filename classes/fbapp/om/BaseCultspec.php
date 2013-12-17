<?php


/**
 * Base class that represents a row from the 'cultspec' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCultspec extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CultspecPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CultspecPeer
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
     * The value for the cultspecrefno field.
     * @var        int
     */
    protected $cultspecrefno;

    /**
     * The value for the cultcode field.
     * @var        int
     */
    protected $cultcode;

    /**
     * The value for the stockingrate field.
     * @var        double
     */
    protected $stockingrate;

    /**
     * The value for the unitstocking field.
     * @var        string
     */
    protected $unitstocking;

    /**
     * The value for the totalstocking field.
     * @var        double
     */
    protected $totalstocking;

    /**
     * The value for the stockinglength field.
     * @var        double
     */
    protected $stockinglength;

    /**
     * The value for the typestocklength field.
     * @var        string
     */
    protected $typestocklength;

    /**
     * The value for the commentstocklength field.
     * @var        string
     */
    protected $commentstocklength;

    /**
     * The value for the weightstocking field.
     * @var        double
     */
    protected $weightstocking;

    /**
     * The value for the stockingage field.
     * @var        int
     */
    protected $stockingage;

    /**
     * The value for the loounsexed field.
     * @var        double
     */
    protected $loounsexed;

    /**
     * The value for the kunsexed field.
     * @var        double
     */
    protected $kunsexed;

    /**
     * The value for the method field.
     * @var        string
     */
    protected $method;

    /**
     * The value for the loofemale field.
     * @var        double
     */
    protected $loofemale;

    /**
     * The value for the kfemale field.
     * @var        double
     */
    protected $kfemale;

    /**
     * The value for the loomale field.
     * @var        double
     */
    protected $loomale;

    /**
     * The value for the kmale field.
     * @var        double
     */
    protected $kmale;

    /**
     * The value for the remarksongrowth field.
     * @var        string
     */
    protected $remarksongrowth;

    /**
     * The value for the productionperiod field.
     * @var        int
     */
    protected $productionperiod;

    /**
     * The value for the harvestingpractice field.
     * @var        string
     */
    protected $harvestingpractice;

    /**
     * The value for the harvestinglength field.
     * @var        double
     */
    protected $harvestinglength;

    /**
     * The value for the typeharvestlength field.
     * @var        string
     */
    protected $typeharvestlength;

    /**
     * The value for the commentharvlength field.
     * @var        string
     */
    protected $commentharvlength;

    /**
     * The value for the harvestingweight field.
     * @var        double
     */
    protected $harvestingweight;

    /**
     * The value for the matureatharvest field.
     * @var        string
     */
    protected $matureatharvest;

    /**
     * The value for the mperiod field.
     * @var        double
     */
    protected $mperiod;

    /**
     * The value for the productioncycle field.
     * @var        double
     */
    protected $productioncycle;

    /**
     * The value for the unitcycle field.
     * @var        string
     */
    protected $unitcycle;

    /**
     * The value for the productionyear field.
     * @var        double
     */
    protected $productionyear;

    /**
     * The value for the unityear field.
     * @var        string
     */
    protected $unityear;

    /**
     * The value for the productionyearext field.
     * @var        double
     */
    protected $productionyearext;

    /**
     * The value for the unityearext field.
     * @var        string
     */
    protected $unityearext;

    /**
     * The value for the comment field.
     * @var        string
     */
    protected $comment;

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
     * Get the [cultspecrefno] column value.
     *
     * @return int
     */
    public function getCultspecrefno()
    {

        return $this->cultspecrefno;
    }

    /**
     * Get the [cultcode] column value.
     *
     * @return int
     */
    public function getCultcode()
    {

        return $this->cultcode;
    }

    /**
     * Get the [stockingrate] column value.
     *
     * @return double
     */
    public function getStockingrate()
    {

        return $this->stockingrate;
    }

    /**
     * Get the [unitstocking] column value.
     *
     * @return string
     */
    public function getUnitstocking()
    {

        return $this->unitstocking;
    }

    /**
     * Get the [totalstocking] column value.
     *
     * @return double
     */
    public function getTotalstocking()
    {

        return $this->totalstocking;
    }

    /**
     * Get the [stockinglength] column value.
     *
     * @return double
     */
    public function getStockinglength()
    {

        return $this->stockinglength;
    }

    /**
     * Get the [typestocklength] column value.
     *
     * @return string
     */
    public function getTypestocklength()
    {

        return $this->typestocklength;
    }

    /**
     * Get the [commentstocklength] column value.
     *
     * @return string
     */
    public function getCommentstocklength()
    {

        return $this->commentstocklength;
    }

    /**
     * Get the [weightstocking] column value.
     *
     * @return double
     */
    public function getWeightstocking()
    {

        return $this->weightstocking;
    }

    /**
     * Get the [stockingage] column value.
     *
     * @return int
     */
    public function getStockingage()
    {

        return $this->stockingage;
    }

    /**
     * Get the [loounsexed] column value.
     *
     * @return double
     */
    public function getLoounsexed()
    {

        return $this->loounsexed;
    }

    /**
     * Get the [kunsexed] column value.
     *
     * @return double
     */
    public function getKunsexed()
    {

        return $this->kunsexed;
    }

    /**
     * Get the [method] column value.
     *
     * @return string
     */
    public function getMethod()
    {

        return $this->method;
    }

    /**
     * Get the [loofemale] column value.
     *
     * @return double
     */
    public function getLoofemale()
    {

        return $this->loofemale;
    }

    /**
     * Get the [kfemale] column value.
     *
     * @return double
     */
    public function getKfemale()
    {

        return $this->kfemale;
    }

    /**
     * Get the [loomale] column value.
     *
     * @return double
     */
    public function getLoomale()
    {

        return $this->loomale;
    }

    /**
     * Get the [kmale] column value.
     *
     * @return double
     */
    public function getKmale()
    {

        return $this->kmale;
    }

    /**
     * Get the [remarksongrowth] column value.
     *
     * @return string
     */
    public function getRemarksongrowth()
    {

        return $this->remarksongrowth;
    }

    /**
     * Get the [productionperiod] column value.
     *
     * @return int
     */
    public function getProductionperiod()
    {

        return $this->productionperiod;
    }

    /**
     * Get the [harvestingpractice] column value.
     *
     * @return string
     */
    public function getHarvestingpractice()
    {

        return $this->harvestingpractice;
    }

    /**
     * Get the [harvestinglength] column value.
     *
     * @return double
     */
    public function getHarvestinglength()
    {

        return $this->harvestinglength;
    }

    /**
     * Get the [typeharvestlength] column value.
     *
     * @return string
     */
    public function getTypeharvestlength()
    {

        return $this->typeharvestlength;
    }

    /**
     * Get the [commentharvlength] column value.
     *
     * @return string
     */
    public function getCommentharvlength()
    {

        return $this->commentharvlength;
    }

    /**
     * Get the [harvestingweight] column value.
     *
     * @return double
     */
    public function getHarvestingweight()
    {

        return $this->harvestingweight;
    }

    /**
     * Get the [matureatharvest] column value.
     *
     * @return string
     */
    public function getMatureatharvest()
    {

        return $this->matureatharvest;
    }

    /**
     * Get the [mperiod] column value.
     *
     * @return double
     */
    public function getMperiod()
    {

        return $this->mperiod;
    }

    /**
     * Get the [productioncycle] column value.
     *
     * @return double
     */
    public function getProductioncycle()
    {

        return $this->productioncycle;
    }

    /**
     * Get the [unitcycle] column value.
     *
     * @return string
     */
    public function getUnitcycle()
    {

        return $this->unitcycle;
    }

    /**
     * Get the [productionyear] column value.
     *
     * @return double
     */
    public function getProductionyear()
    {

        return $this->productionyear;
    }

    /**
     * Get the [unityear] column value.
     *
     * @return string
     */
    public function getUnityear()
    {

        return $this->unityear;
    }

    /**
     * Get the [productionyearext] column value.
     *
     * @return double
     */
    public function getProductionyearext()
    {

        return $this->productionyearext;
    }

    /**
     * Get the [unityearext] column value.
     *
     * @return string
     */
    public function getUnityearext()
    {

        return $this->unityearext;
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
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = CultspecPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = CultspecPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [cultspecrefno] column.
     *
     * @param  int $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setCultspecrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cultspecrefno !== $v) {
            $this->cultspecrefno = $v;
            $this->modifiedColumns[] = CultspecPeer::CULTSPECREFNO;
        }


        return $this;
    } // setCultspecrefno()

    /**
     * Set the value of [cultcode] column.
     *
     * @param  int $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setCultcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cultcode !== $v) {
            $this->cultcode = $v;
            $this->modifiedColumns[] = CultspecPeer::CULTCODE;
        }


        return $this;
    } // setCultcode()

    /**
     * Set the value of [stockingrate] column.
     *
     * @param  double $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setStockingrate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->stockingrate !== $v) {
            $this->stockingrate = $v;
            $this->modifiedColumns[] = CultspecPeer::STOCKINGRATE;
        }


        return $this;
    } // setStockingrate()

    /**
     * Set the value of [unitstocking] column.
     *
     * @param  string $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setUnitstocking($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unitstocking !== $v) {
            $this->unitstocking = $v;
            $this->modifiedColumns[] = CultspecPeer::UNITSTOCKING;
        }


        return $this;
    } // setUnitstocking()

    /**
     * Set the value of [totalstocking] column.
     *
     * @param  double $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setTotalstocking($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->totalstocking !== $v) {
            $this->totalstocking = $v;
            $this->modifiedColumns[] = CultspecPeer::TOTALSTOCKING;
        }


        return $this;
    } // setTotalstocking()

    /**
     * Set the value of [stockinglength] column.
     *
     * @param  double $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setStockinglength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->stockinglength !== $v) {
            $this->stockinglength = $v;
            $this->modifiedColumns[] = CultspecPeer::STOCKINGLENGTH;
        }


        return $this;
    } // setStockinglength()

    /**
     * Set the value of [typestocklength] column.
     *
     * @param  string $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setTypestocklength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->typestocklength !== $v) {
            $this->typestocklength = $v;
            $this->modifiedColumns[] = CultspecPeer::TYPESTOCKLENGTH;
        }


        return $this;
    } // setTypestocklength()

    /**
     * Set the value of [commentstocklength] column.
     *
     * @param  string $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setCommentstocklength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentstocklength !== $v) {
            $this->commentstocklength = $v;
            $this->modifiedColumns[] = CultspecPeer::COMMENTSTOCKLENGTH;
        }


        return $this;
    } // setCommentstocklength()

    /**
     * Set the value of [weightstocking] column.
     *
     * @param  double $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setWeightstocking($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->weightstocking !== $v) {
            $this->weightstocking = $v;
            $this->modifiedColumns[] = CultspecPeer::WEIGHTSTOCKING;
        }


        return $this;
    } // setWeightstocking()

    /**
     * Set the value of [stockingage] column.
     *
     * @param  int $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setStockingage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockingage !== $v) {
            $this->stockingage = $v;
            $this->modifiedColumns[] = CultspecPeer::STOCKINGAGE;
        }


        return $this;
    } // setStockingage()

    /**
     * Set the value of [loounsexed] column.
     *
     * @param  double $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setLoounsexed($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->loounsexed !== $v) {
            $this->loounsexed = $v;
            $this->modifiedColumns[] = CultspecPeer::LOOUNSEXED;
        }


        return $this;
    } // setLoounsexed()

    /**
     * Set the value of [kunsexed] column.
     *
     * @param  double $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setKunsexed($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->kunsexed !== $v) {
            $this->kunsexed = $v;
            $this->modifiedColumns[] = CultspecPeer::KUNSEXED;
        }


        return $this;
    } // setKunsexed()

    /**
     * Set the value of [method] column.
     *
     * @param  string $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setMethod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->method !== $v) {
            $this->method = $v;
            $this->modifiedColumns[] = CultspecPeer::METHOD;
        }


        return $this;
    } // setMethod()

    /**
     * Set the value of [loofemale] column.
     *
     * @param  double $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setLoofemale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->loofemale !== $v) {
            $this->loofemale = $v;
            $this->modifiedColumns[] = CultspecPeer::LOOFEMALE;
        }


        return $this;
    } // setLoofemale()

    /**
     * Set the value of [kfemale] column.
     *
     * @param  double $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setKfemale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->kfemale !== $v) {
            $this->kfemale = $v;
            $this->modifiedColumns[] = CultspecPeer::KFEMALE;
        }


        return $this;
    } // setKfemale()

    /**
     * Set the value of [loomale] column.
     *
     * @param  double $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setLoomale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->loomale !== $v) {
            $this->loomale = $v;
            $this->modifiedColumns[] = CultspecPeer::LOOMALE;
        }


        return $this;
    } // setLoomale()

    /**
     * Set the value of [kmale] column.
     *
     * @param  double $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setKmale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->kmale !== $v) {
            $this->kmale = $v;
            $this->modifiedColumns[] = CultspecPeer::KMALE;
        }


        return $this;
    } // setKmale()

    /**
     * Set the value of [remarksongrowth] column.
     *
     * @param  string $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setRemarksongrowth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarksongrowth !== $v) {
            $this->remarksongrowth = $v;
            $this->modifiedColumns[] = CultspecPeer::REMARKSONGROWTH;
        }


        return $this;
    } // setRemarksongrowth()

    /**
     * Set the value of [productionperiod] column.
     *
     * @param  int $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setProductionperiod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->productionperiod !== $v) {
            $this->productionperiod = $v;
            $this->modifiedColumns[] = CultspecPeer::PRODUCTIONPERIOD;
        }


        return $this;
    } // setProductionperiod()

    /**
     * Set the value of [harvestingpractice] column.
     *
     * @param  string $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setHarvestingpractice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->harvestingpractice !== $v) {
            $this->harvestingpractice = $v;
            $this->modifiedColumns[] = CultspecPeer::HARVESTINGPRACTICE;
        }


        return $this;
    } // setHarvestingpractice()

    /**
     * Set the value of [harvestinglength] column.
     *
     * @param  double $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setHarvestinglength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->harvestinglength !== $v) {
            $this->harvestinglength = $v;
            $this->modifiedColumns[] = CultspecPeer::HARVESTINGLENGTH;
        }


        return $this;
    } // setHarvestinglength()

    /**
     * Set the value of [typeharvestlength] column.
     *
     * @param  string $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setTypeharvestlength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->typeharvestlength !== $v) {
            $this->typeharvestlength = $v;
            $this->modifiedColumns[] = CultspecPeer::TYPEHARVESTLENGTH;
        }


        return $this;
    } // setTypeharvestlength()

    /**
     * Set the value of [commentharvlength] column.
     *
     * @param  string $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setCommentharvlength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentharvlength !== $v) {
            $this->commentharvlength = $v;
            $this->modifiedColumns[] = CultspecPeer::COMMENTHARVLENGTH;
        }


        return $this;
    } // setCommentharvlength()

    /**
     * Set the value of [harvestingweight] column.
     *
     * @param  double $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setHarvestingweight($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->harvestingweight !== $v) {
            $this->harvestingweight = $v;
            $this->modifiedColumns[] = CultspecPeer::HARVESTINGWEIGHT;
        }


        return $this;
    } // setHarvestingweight()

    /**
     * Set the value of [matureatharvest] column.
     *
     * @param  string $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setMatureatharvest($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->matureatharvest !== $v) {
            $this->matureatharvest = $v;
            $this->modifiedColumns[] = CultspecPeer::MATUREATHARVEST;
        }


        return $this;
    } // setMatureatharvest()

    /**
     * Set the value of [mperiod] column.
     *
     * @param  double $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setMperiod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->mperiod !== $v) {
            $this->mperiod = $v;
            $this->modifiedColumns[] = CultspecPeer::MPERIOD;
        }


        return $this;
    } // setMperiod()

    /**
     * Set the value of [productioncycle] column.
     *
     * @param  double $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setProductioncycle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->productioncycle !== $v) {
            $this->productioncycle = $v;
            $this->modifiedColumns[] = CultspecPeer::PRODUCTIONCYCLE;
        }


        return $this;
    } // setProductioncycle()

    /**
     * Set the value of [unitcycle] column.
     *
     * @param  string $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setUnitcycle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unitcycle !== $v) {
            $this->unitcycle = $v;
            $this->modifiedColumns[] = CultspecPeer::UNITCYCLE;
        }


        return $this;
    } // setUnitcycle()

    /**
     * Set the value of [productionyear] column.
     *
     * @param  double $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setProductionyear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->productionyear !== $v) {
            $this->productionyear = $v;
            $this->modifiedColumns[] = CultspecPeer::PRODUCTIONYEAR;
        }


        return $this;
    } // setProductionyear()

    /**
     * Set the value of [unityear] column.
     *
     * @param  string $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setUnityear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unityear !== $v) {
            $this->unityear = $v;
            $this->modifiedColumns[] = CultspecPeer::UNITYEAR;
        }


        return $this;
    } // setUnityear()

    /**
     * Set the value of [productionyearext] column.
     *
     * @param  double $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setProductionyearext($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->productionyearext !== $v) {
            $this->productionyearext = $v;
            $this->modifiedColumns[] = CultspecPeer::PRODUCTIONYEAREXT;
        }


        return $this;
    } // setProductionyearext()

    /**
     * Set the value of [unityearext] column.
     *
     * @param  string $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setUnityearext($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unityearext !== $v) {
            $this->unityearext = $v;
            $this->modifiedColumns[] = CultspecPeer::UNITYEAREXT;
        }


        return $this;
    } // setUnityearext()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = CultspecPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = CultspecPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cultspec The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = CultspecPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = CultspecPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cultspec The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = CultspecPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Cultspec The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = CultspecPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cultspec The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = CultspecPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cultspec The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = CultspecPeer::TS;
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
            $this->cultspecrefno = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->cultcode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->stockingrate = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
            $this->unitstocking = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->totalstocking = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->stockinglength = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->typestocklength = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->commentstocklength = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->weightstocking = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->stockingage = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->loounsexed = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->kunsexed = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->method = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->loofemale = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
            $this->kfemale = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->loomale = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->kmale = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->remarksongrowth = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->productionperiod = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->harvestingpractice = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->harvestinglength = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->typeharvestlength = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->commentharvlength = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->harvestingweight = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->matureatharvest = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->mperiod = ($row[$startcol + 27] !== null) ? (double) $row[$startcol + 27] : null;
            $this->productioncycle = ($row[$startcol + 28] !== null) ? (double) $row[$startcol + 28] : null;
            $this->unitcycle = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->productionyear = ($row[$startcol + 30] !== null) ? (double) $row[$startcol + 30] : null;
            $this->unityear = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->productionyearext = ($row[$startcol + 32] !== null) ? (double) $row[$startcol + 32] : null;
            $this->unityearext = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->comment = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->entered = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->dateentered = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->modified = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->datemodified = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->expert = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->datechecked = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->ts = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 42; // 42 = CultspecPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Cultspec object", $e);
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
            $con = Propel::getConnection(CultspecPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CultspecPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CultspecPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CultspecQuery::create()
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
            $con = Propel::getConnection(CultspecPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CultspecPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(CultspecPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(CultspecPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(CultspecPeer::CULTSPECREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`CultSpecRefNo`';
        }
        if ($this->isColumnModified(CultspecPeer::CULTCODE)) {
            $modifiedColumns[':p' . $index++]  = '`CultCode`';
        }
        if ($this->isColumnModified(CultspecPeer::STOCKINGRATE)) {
            $modifiedColumns[':p' . $index++]  = '`StockingRate`';
        }
        if ($this->isColumnModified(CultspecPeer::UNITSTOCKING)) {
            $modifiedColumns[':p' . $index++]  = '`UnitStocking`';
        }
        if ($this->isColumnModified(CultspecPeer::TOTALSTOCKING)) {
            $modifiedColumns[':p' . $index++]  = '`TotalStocking`';
        }
        if ($this->isColumnModified(CultspecPeer::STOCKINGLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`StockingLength`';
        }
        if ($this->isColumnModified(CultspecPeer::TYPESTOCKLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`TypeStockLength`';
        }
        if ($this->isColumnModified(CultspecPeer::COMMENTSTOCKLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`CommentStockLength`';
        }
        if ($this->isColumnModified(CultspecPeer::WEIGHTSTOCKING)) {
            $modifiedColumns[':p' . $index++]  = '`WeightStocking`';
        }
        if ($this->isColumnModified(CultspecPeer::STOCKINGAGE)) {
            $modifiedColumns[':p' . $index++]  = '`StockingAge`';
        }
        if ($this->isColumnModified(CultspecPeer::LOOUNSEXED)) {
            $modifiedColumns[':p' . $index++]  = '`LooUnsexed`';
        }
        if ($this->isColumnModified(CultspecPeer::KUNSEXED)) {
            $modifiedColumns[':p' . $index++]  = '`KUnsexed`';
        }
        if ($this->isColumnModified(CultspecPeer::METHOD)) {
            $modifiedColumns[':p' . $index++]  = '`Method`';
        }
        if ($this->isColumnModified(CultspecPeer::LOOFEMALE)) {
            $modifiedColumns[':p' . $index++]  = '`LooFemale`';
        }
        if ($this->isColumnModified(CultspecPeer::KFEMALE)) {
            $modifiedColumns[':p' . $index++]  = '`KFemale`';
        }
        if ($this->isColumnModified(CultspecPeer::LOOMALE)) {
            $modifiedColumns[':p' . $index++]  = '`LooMale`';
        }
        if ($this->isColumnModified(CultspecPeer::KMALE)) {
            $modifiedColumns[':p' . $index++]  = '`KMale`';
        }
        if ($this->isColumnModified(CultspecPeer::REMARKSONGROWTH)) {
            $modifiedColumns[':p' . $index++]  = '`RemarksonGrowth`';
        }
        if ($this->isColumnModified(CultspecPeer::PRODUCTIONPERIOD)) {
            $modifiedColumns[':p' . $index++]  = '`ProductionPeriod`';
        }
        if ($this->isColumnModified(CultspecPeer::HARVESTINGPRACTICE)) {
            $modifiedColumns[':p' . $index++]  = '`HarvestingPractice`';
        }
        if ($this->isColumnModified(CultspecPeer::HARVESTINGLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`HarvestingLength`';
        }
        if ($this->isColumnModified(CultspecPeer::TYPEHARVESTLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`TypeHarvestLength`';
        }
        if ($this->isColumnModified(CultspecPeer::COMMENTHARVLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`CommentHarvLength`';
        }
        if ($this->isColumnModified(CultspecPeer::HARVESTINGWEIGHT)) {
            $modifiedColumns[':p' . $index++]  = '`HarvestingWeight`';
        }
        if ($this->isColumnModified(CultspecPeer::MATUREATHARVEST)) {
            $modifiedColumns[':p' . $index++]  = '`MatureatHarvest`';
        }
        if ($this->isColumnModified(CultspecPeer::MPERIOD)) {
            $modifiedColumns[':p' . $index++]  = '`MPeriod`';
        }
        if ($this->isColumnModified(CultspecPeer::PRODUCTIONCYCLE)) {
            $modifiedColumns[':p' . $index++]  = '`ProductionCycle`';
        }
        if ($this->isColumnModified(CultspecPeer::UNITCYCLE)) {
            $modifiedColumns[':p' . $index++]  = '`UnitCycle`';
        }
        if ($this->isColumnModified(CultspecPeer::PRODUCTIONYEAR)) {
            $modifiedColumns[':p' . $index++]  = '`ProductionYear`';
        }
        if ($this->isColumnModified(CultspecPeer::UNITYEAR)) {
            $modifiedColumns[':p' . $index++]  = '`UnitYear`';
        }
        if ($this->isColumnModified(CultspecPeer::PRODUCTIONYEAREXT)) {
            $modifiedColumns[':p' . $index++]  = '`ProductionYearExt`';
        }
        if ($this->isColumnModified(CultspecPeer::UNITYEAREXT)) {
            $modifiedColumns[':p' . $index++]  = '`UnitYearExt`';
        }
        if ($this->isColumnModified(CultspecPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Comment`';
        }
        if ($this->isColumnModified(CultspecPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(CultspecPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(CultspecPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(CultspecPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(CultspecPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(CultspecPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(CultspecPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `cultspec` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`CultSpecRefNo`':
                        $stmt->bindValue($identifier, $this->cultspecrefno, PDO::PARAM_INT);
                        break;
                    case '`CultCode`':
                        $stmt->bindValue($identifier, $this->cultcode, PDO::PARAM_INT);
                        break;
                    case '`StockingRate`':
                        $stmt->bindValue($identifier, $this->stockingrate, PDO::PARAM_STR);
                        break;
                    case '`UnitStocking`':
                        $stmt->bindValue($identifier, $this->unitstocking, PDO::PARAM_STR);
                        break;
                    case '`TotalStocking`':
                        $stmt->bindValue($identifier, $this->totalstocking, PDO::PARAM_STR);
                        break;
                    case '`StockingLength`':
                        $stmt->bindValue($identifier, $this->stockinglength, PDO::PARAM_STR);
                        break;
                    case '`TypeStockLength`':
                        $stmt->bindValue($identifier, $this->typestocklength, PDO::PARAM_STR);
                        break;
                    case '`CommentStockLength`':
                        $stmt->bindValue($identifier, $this->commentstocklength, PDO::PARAM_STR);
                        break;
                    case '`WeightStocking`':
                        $stmt->bindValue($identifier, $this->weightstocking, PDO::PARAM_STR);
                        break;
                    case '`StockingAge`':
                        $stmt->bindValue($identifier, $this->stockingage, PDO::PARAM_INT);
                        break;
                    case '`LooUnsexed`':
                        $stmt->bindValue($identifier, $this->loounsexed, PDO::PARAM_STR);
                        break;
                    case '`KUnsexed`':
                        $stmt->bindValue($identifier, $this->kunsexed, PDO::PARAM_STR);
                        break;
                    case '`Method`':
                        $stmt->bindValue($identifier, $this->method, PDO::PARAM_STR);
                        break;
                    case '`LooFemale`':
                        $stmt->bindValue($identifier, $this->loofemale, PDO::PARAM_STR);
                        break;
                    case '`KFemale`':
                        $stmt->bindValue($identifier, $this->kfemale, PDO::PARAM_STR);
                        break;
                    case '`LooMale`':
                        $stmt->bindValue($identifier, $this->loomale, PDO::PARAM_STR);
                        break;
                    case '`KMale`':
                        $stmt->bindValue($identifier, $this->kmale, PDO::PARAM_STR);
                        break;
                    case '`RemarksonGrowth`':
                        $stmt->bindValue($identifier, $this->remarksongrowth, PDO::PARAM_STR);
                        break;
                    case '`ProductionPeriod`':
                        $stmt->bindValue($identifier, $this->productionperiod, PDO::PARAM_INT);
                        break;
                    case '`HarvestingPractice`':
                        $stmt->bindValue($identifier, $this->harvestingpractice, PDO::PARAM_STR);
                        break;
                    case '`HarvestingLength`':
                        $stmt->bindValue($identifier, $this->harvestinglength, PDO::PARAM_STR);
                        break;
                    case '`TypeHarvestLength`':
                        $stmt->bindValue($identifier, $this->typeharvestlength, PDO::PARAM_STR);
                        break;
                    case '`CommentHarvLength`':
                        $stmt->bindValue($identifier, $this->commentharvlength, PDO::PARAM_STR);
                        break;
                    case '`HarvestingWeight`':
                        $stmt->bindValue($identifier, $this->harvestingweight, PDO::PARAM_STR);
                        break;
                    case '`MatureatHarvest`':
                        $stmt->bindValue($identifier, $this->matureatharvest, PDO::PARAM_STR);
                        break;
                    case '`MPeriod`':
                        $stmt->bindValue($identifier, $this->mperiod, PDO::PARAM_STR);
                        break;
                    case '`ProductionCycle`':
                        $stmt->bindValue($identifier, $this->productioncycle, PDO::PARAM_STR);
                        break;
                    case '`UnitCycle`':
                        $stmt->bindValue($identifier, $this->unitcycle, PDO::PARAM_STR);
                        break;
                    case '`ProductionYear`':
                        $stmt->bindValue($identifier, $this->productionyear, PDO::PARAM_STR);
                        break;
                    case '`UnitYear`':
                        $stmt->bindValue($identifier, $this->unityear, PDO::PARAM_STR);
                        break;
                    case '`ProductionYearExt`':
                        $stmt->bindValue($identifier, $this->productionyearext, PDO::PARAM_STR);
                        break;
                    case '`UnitYearExt`':
                        $stmt->bindValue($identifier, $this->unityearext, PDO::PARAM_STR);
                        break;
                    case '`Comment`':
                        $stmt->bindValue($identifier, $this->comment, PDO::PARAM_STR);
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


            if (($retval = CultspecPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CultspecPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getCultspecrefno();
                break;
            case 3:
                return $this->getCultcode();
                break;
            case 4:
                return $this->getStockingrate();
                break;
            case 5:
                return $this->getUnitstocking();
                break;
            case 6:
                return $this->getTotalstocking();
                break;
            case 7:
                return $this->getStockinglength();
                break;
            case 8:
                return $this->getTypestocklength();
                break;
            case 9:
                return $this->getCommentstocklength();
                break;
            case 10:
                return $this->getWeightstocking();
                break;
            case 11:
                return $this->getStockingage();
                break;
            case 12:
                return $this->getLoounsexed();
                break;
            case 13:
                return $this->getKunsexed();
                break;
            case 14:
                return $this->getMethod();
                break;
            case 15:
                return $this->getLoofemale();
                break;
            case 16:
                return $this->getKfemale();
                break;
            case 17:
                return $this->getLoomale();
                break;
            case 18:
                return $this->getKmale();
                break;
            case 19:
                return $this->getRemarksongrowth();
                break;
            case 20:
                return $this->getProductionperiod();
                break;
            case 21:
                return $this->getHarvestingpractice();
                break;
            case 22:
                return $this->getHarvestinglength();
                break;
            case 23:
                return $this->getTypeharvestlength();
                break;
            case 24:
                return $this->getCommentharvlength();
                break;
            case 25:
                return $this->getHarvestingweight();
                break;
            case 26:
                return $this->getMatureatharvest();
                break;
            case 27:
                return $this->getMperiod();
                break;
            case 28:
                return $this->getProductioncycle();
                break;
            case 29:
                return $this->getUnitcycle();
                break;
            case 30:
                return $this->getProductionyear();
                break;
            case 31:
                return $this->getUnityear();
                break;
            case 32:
                return $this->getProductionyearext();
                break;
            case 33:
                return $this->getUnityearext();
                break;
            case 34:
                return $this->getComment();
                break;
            case 35:
                return $this->getEntered();
                break;
            case 36:
                return $this->getDateentered();
                break;
            case 37:
                return $this->getModified();
                break;
            case 38:
                return $this->getDatemodified();
                break;
            case 39:
                return $this->getExpert();
                break;
            case 40:
                return $this->getDatechecked();
                break;
            case 41:
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
        if (isset($alreadyDumpedObjects['Cultspec'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Cultspec'][serialize($this->getPrimaryKey())] = true;
        $keys = CultspecPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getStockcode(),
            $keys[1] => $this->getSpeccode(),
            $keys[2] => $this->getCultspecrefno(),
            $keys[3] => $this->getCultcode(),
            $keys[4] => $this->getStockingrate(),
            $keys[5] => $this->getUnitstocking(),
            $keys[6] => $this->getTotalstocking(),
            $keys[7] => $this->getStockinglength(),
            $keys[8] => $this->getTypestocklength(),
            $keys[9] => $this->getCommentstocklength(),
            $keys[10] => $this->getWeightstocking(),
            $keys[11] => $this->getStockingage(),
            $keys[12] => $this->getLoounsexed(),
            $keys[13] => $this->getKunsexed(),
            $keys[14] => $this->getMethod(),
            $keys[15] => $this->getLoofemale(),
            $keys[16] => $this->getKfemale(),
            $keys[17] => $this->getLoomale(),
            $keys[18] => $this->getKmale(),
            $keys[19] => $this->getRemarksongrowth(),
            $keys[20] => $this->getProductionperiod(),
            $keys[21] => $this->getHarvestingpractice(),
            $keys[22] => $this->getHarvestinglength(),
            $keys[23] => $this->getTypeharvestlength(),
            $keys[24] => $this->getCommentharvlength(),
            $keys[25] => $this->getHarvestingweight(),
            $keys[26] => $this->getMatureatharvest(),
            $keys[27] => $this->getMperiod(),
            $keys[28] => $this->getProductioncycle(),
            $keys[29] => $this->getUnitcycle(),
            $keys[30] => $this->getProductionyear(),
            $keys[31] => $this->getUnityear(),
            $keys[32] => $this->getProductionyearext(),
            $keys[33] => $this->getUnityearext(),
            $keys[34] => $this->getComment(),
            $keys[35] => $this->getEntered(),
            $keys[36] => $this->getDateentered(),
            $keys[37] => $this->getModified(),
            $keys[38] => $this->getDatemodified(),
            $keys[39] => $this->getExpert(),
            $keys[40] => $this->getDatechecked(),
            $keys[41] => $this->getTs(),
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
        $pos = CultspecPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setCultspecrefno($value);
                break;
            case 3:
                $this->setCultcode($value);
                break;
            case 4:
                $this->setStockingrate($value);
                break;
            case 5:
                $this->setUnitstocking($value);
                break;
            case 6:
                $this->setTotalstocking($value);
                break;
            case 7:
                $this->setStockinglength($value);
                break;
            case 8:
                $this->setTypestocklength($value);
                break;
            case 9:
                $this->setCommentstocklength($value);
                break;
            case 10:
                $this->setWeightstocking($value);
                break;
            case 11:
                $this->setStockingage($value);
                break;
            case 12:
                $this->setLoounsexed($value);
                break;
            case 13:
                $this->setKunsexed($value);
                break;
            case 14:
                $this->setMethod($value);
                break;
            case 15:
                $this->setLoofemale($value);
                break;
            case 16:
                $this->setKfemale($value);
                break;
            case 17:
                $this->setLoomale($value);
                break;
            case 18:
                $this->setKmale($value);
                break;
            case 19:
                $this->setRemarksongrowth($value);
                break;
            case 20:
                $this->setProductionperiod($value);
                break;
            case 21:
                $this->setHarvestingpractice($value);
                break;
            case 22:
                $this->setHarvestinglength($value);
                break;
            case 23:
                $this->setTypeharvestlength($value);
                break;
            case 24:
                $this->setCommentharvlength($value);
                break;
            case 25:
                $this->setHarvestingweight($value);
                break;
            case 26:
                $this->setMatureatharvest($value);
                break;
            case 27:
                $this->setMperiod($value);
                break;
            case 28:
                $this->setProductioncycle($value);
                break;
            case 29:
                $this->setUnitcycle($value);
                break;
            case 30:
                $this->setProductionyear($value);
                break;
            case 31:
                $this->setUnityear($value);
                break;
            case 32:
                $this->setProductionyearext($value);
                break;
            case 33:
                $this->setUnityearext($value);
                break;
            case 34:
                $this->setComment($value);
                break;
            case 35:
                $this->setEntered($value);
                break;
            case 36:
                $this->setDateentered($value);
                break;
            case 37:
                $this->setModified($value);
                break;
            case 38:
                $this->setDatemodified($value);
                break;
            case 39:
                $this->setExpert($value);
                break;
            case 40:
                $this->setDatechecked($value);
                break;
            case 41:
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
        $keys = CultspecPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setStockcode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSpeccode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCultspecrefno($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCultcode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setStockingrate($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setUnitstocking($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTotalstocking($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setStockinglength($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTypestocklength($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCommentstocklength($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setWeightstocking($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setStockingage($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setLoounsexed($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setKunsexed($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setMethod($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setLoofemale($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setKfemale($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setLoomale($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setKmale($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setRemarksongrowth($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setProductionperiod($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setHarvestingpractice($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setHarvestinglength($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setTypeharvestlength($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setCommentharvlength($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setHarvestingweight($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setMatureatharvest($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setMperiod($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setProductioncycle($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setUnitcycle($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setProductionyear($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setUnityear($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setProductionyearext($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setUnityearext($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setComment($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setEntered($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setDateentered($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setModified($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setDatemodified($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setExpert($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setDatechecked($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setTs($arr[$keys[41]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CultspecPeer::DATABASE_NAME);

        if ($this->isColumnModified(CultspecPeer::STOCKCODE)) $criteria->add(CultspecPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(CultspecPeer::SPECCODE)) $criteria->add(CultspecPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(CultspecPeer::CULTSPECREFNO)) $criteria->add(CultspecPeer::CULTSPECREFNO, $this->cultspecrefno);
        if ($this->isColumnModified(CultspecPeer::CULTCODE)) $criteria->add(CultspecPeer::CULTCODE, $this->cultcode);
        if ($this->isColumnModified(CultspecPeer::STOCKINGRATE)) $criteria->add(CultspecPeer::STOCKINGRATE, $this->stockingrate);
        if ($this->isColumnModified(CultspecPeer::UNITSTOCKING)) $criteria->add(CultspecPeer::UNITSTOCKING, $this->unitstocking);
        if ($this->isColumnModified(CultspecPeer::TOTALSTOCKING)) $criteria->add(CultspecPeer::TOTALSTOCKING, $this->totalstocking);
        if ($this->isColumnModified(CultspecPeer::STOCKINGLENGTH)) $criteria->add(CultspecPeer::STOCKINGLENGTH, $this->stockinglength);
        if ($this->isColumnModified(CultspecPeer::TYPESTOCKLENGTH)) $criteria->add(CultspecPeer::TYPESTOCKLENGTH, $this->typestocklength);
        if ($this->isColumnModified(CultspecPeer::COMMENTSTOCKLENGTH)) $criteria->add(CultspecPeer::COMMENTSTOCKLENGTH, $this->commentstocklength);
        if ($this->isColumnModified(CultspecPeer::WEIGHTSTOCKING)) $criteria->add(CultspecPeer::WEIGHTSTOCKING, $this->weightstocking);
        if ($this->isColumnModified(CultspecPeer::STOCKINGAGE)) $criteria->add(CultspecPeer::STOCKINGAGE, $this->stockingage);
        if ($this->isColumnModified(CultspecPeer::LOOUNSEXED)) $criteria->add(CultspecPeer::LOOUNSEXED, $this->loounsexed);
        if ($this->isColumnModified(CultspecPeer::KUNSEXED)) $criteria->add(CultspecPeer::KUNSEXED, $this->kunsexed);
        if ($this->isColumnModified(CultspecPeer::METHOD)) $criteria->add(CultspecPeer::METHOD, $this->method);
        if ($this->isColumnModified(CultspecPeer::LOOFEMALE)) $criteria->add(CultspecPeer::LOOFEMALE, $this->loofemale);
        if ($this->isColumnModified(CultspecPeer::KFEMALE)) $criteria->add(CultspecPeer::KFEMALE, $this->kfemale);
        if ($this->isColumnModified(CultspecPeer::LOOMALE)) $criteria->add(CultspecPeer::LOOMALE, $this->loomale);
        if ($this->isColumnModified(CultspecPeer::KMALE)) $criteria->add(CultspecPeer::KMALE, $this->kmale);
        if ($this->isColumnModified(CultspecPeer::REMARKSONGROWTH)) $criteria->add(CultspecPeer::REMARKSONGROWTH, $this->remarksongrowth);
        if ($this->isColumnModified(CultspecPeer::PRODUCTIONPERIOD)) $criteria->add(CultspecPeer::PRODUCTIONPERIOD, $this->productionperiod);
        if ($this->isColumnModified(CultspecPeer::HARVESTINGPRACTICE)) $criteria->add(CultspecPeer::HARVESTINGPRACTICE, $this->harvestingpractice);
        if ($this->isColumnModified(CultspecPeer::HARVESTINGLENGTH)) $criteria->add(CultspecPeer::HARVESTINGLENGTH, $this->harvestinglength);
        if ($this->isColumnModified(CultspecPeer::TYPEHARVESTLENGTH)) $criteria->add(CultspecPeer::TYPEHARVESTLENGTH, $this->typeharvestlength);
        if ($this->isColumnModified(CultspecPeer::COMMENTHARVLENGTH)) $criteria->add(CultspecPeer::COMMENTHARVLENGTH, $this->commentharvlength);
        if ($this->isColumnModified(CultspecPeer::HARVESTINGWEIGHT)) $criteria->add(CultspecPeer::HARVESTINGWEIGHT, $this->harvestingweight);
        if ($this->isColumnModified(CultspecPeer::MATUREATHARVEST)) $criteria->add(CultspecPeer::MATUREATHARVEST, $this->matureatharvest);
        if ($this->isColumnModified(CultspecPeer::MPERIOD)) $criteria->add(CultspecPeer::MPERIOD, $this->mperiod);
        if ($this->isColumnModified(CultspecPeer::PRODUCTIONCYCLE)) $criteria->add(CultspecPeer::PRODUCTIONCYCLE, $this->productioncycle);
        if ($this->isColumnModified(CultspecPeer::UNITCYCLE)) $criteria->add(CultspecPeer::UNITCYCLE, $this->unitcycle);
        if ($this->isColumnModified(CultspecPeer::PRODUCTIONYEAR)) $criteria->add(CultspecPeer::PRODUCTIONYEAR, $this->productionyear);
        if ($this->isColumnModified(CultspecPeer::UNITYEAR)) $criteria->add(CultspecPeer::UNITYEAR, $this->unityear);
        if ($this->isColumnModified(CultspecPeer::PRODUCTIONYEAREXT)) $criteria->add(CultspecPeer::PRODUCTIONYEAREXT, $this->productionyearext);
        if ($this->isColumnModified(CultspecPeer::UNITYEAREXT)) $criteria->add(CultspecPeer::UNITYEAREXT, $this->unityearext);
        if ($this->isColumnModified(CultspecPeer::COMMENT)) $criteria->add(CultspecPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(CultspecPeer::ENTERED)) $criteria->add(CultspecPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(CultspecPeer::DATEENTERED)) $criteria->add(CultspecPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(CultspecPeer::MODIFIED)) $criteria->add(CultspecPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(CultspecPeer::DATEMODIFIED)) $criteria->add(CultspecPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(CultspecPeer::EXPERT)) $criteria->add(CultspecPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(CultspecPeer::DATECHECKED)) $criteria->add(CultspecPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(CultspecPeer::TS)) $criteria->add(CultspecPeer::TS, $this->ts);

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
        $criteria = new Criteria(CultspecPeer::DATABASE_NAME);
        $criteria->add(CultspecPeer::STOCKCODE, $this->stockcode);
        $criteria->add(CultspecPeer::CULTCODE, $this->cultcode);

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
        $pks[1] = $this->getCultcode();

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
        $this->setCultcode($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getStockcode()) && (null === $this->getCultcode());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Cultspec (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setCultspecrefno($this->getCultspecrefno());
        $copyObj->setCultcode($this->getCultcode());
        $copyObj->setStockingrate($this->getStockingrate());
        $copyObj->setUnitstocking($this->getUnitstocking());
        $copyObj->setTotalstocking($this->getTotalstocking());
        $copyObj->setStockinglength($this->getStockinglength());
        $copyObj->setTypestocklength($this->getTypestocklength());
        $copyObj->setCommentstocklength($this->getCommentstocklength());
        $copyObj->setWeightstocking($this->getWeightstocking());
        $copyObj->setStockingage($this->getStockingage());
        $copyObj->setLoounsexed($this->getLoounsexed());
        $copyObj->setKunsexed($this->getKunsexed());
        $copyObj->setMethod($this->getMethod());
        $copyObj->setLoofemale($this->getLoofemale());
        $copyObj->setKfemale($this->getKfemale());
        $copyObj->setLoomale($this->getLoomale());
        $copyObj->setKmale($this->getKmale());
        $copyObj->setRemarksongrowth($this->getRemarksongrowth());
        $copyObj->setProductionperiod($this->getProductionperiod());
        $copyObj->setHarvestingpractice($this->getHarvestingpractice());
        $copyObj->setHarvestinglength($this->getHarvestinglength());
        $copyObj->setTypeharvestlength($this->getTypeharvestlength());
        $copyObj->setCommentharvlength($this->getCommentharvlength());
        $copyObj->setHarvestingweight($this->getHarvestingweight());
        $copyObj->setMatureatharvest($this->getMatureatharvest());
        $copyObj->setMperiod($this->getMperiod());
        $copyObj->setProductioncycle($this->getProductioncycle());
        $copyObj->setUnitcycle($this->getUnitcycle());
        $copyObj->setProductionyear($this->getProductionyear());
        $copyObj->setUnityear($this->getUnityear());
        $copyObj->setProductionyearext($this->getProductionyearext());
        $copyObj->setUnityearext($this->getUnityearext());
        $copyObj->setComment($this->getComment());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setTs($this->getTs());
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
     * @return Cultspec Clone of current object.
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
     * @return CultspecPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CultspecPeer();
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
        $this->cultspecrefno = null;
        $this->cultcode = null;
        $this->stockingrate = null;
        $this->unitstocking = null;
        $this->totalstocking = null;
        $this->stockinglength = null;
        $this->typestocklength = null;
        $this->commentstocklength = null;
        $this->weightstocking = null;
        $this->stockingage = null;
        $this->loounsexed = null;
        $this->kunsexed = null;
        $this->method = null;
        $this->loofemale = null;
        $this->kfemale = null;
        $this->loomale = null;
        $this->kmale = null;
        $this->remarksongrowth = null;
        $this->productionperiod = null;
        $this->harvestingpractice = null;
        $this->harvestinglength = null;
        $this->typeharvestlength = null;
        $this->commentharvlength = null;
        $this->harvestingweight = null;
        $this->matureatharvest = null;
        $this->mperiod = null;
        $this->productioncycle = null;
        $this->unitcycle = null;
        $this->productionyear = null;
        $this->unityear = null;
        $this->productionyearext = null;
        $this->unityearext = null;
        $this->comment = null;
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
        return (string) $this->exportTo(CultspecPeer::DEFAULT_STRING_FORMAT);
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
