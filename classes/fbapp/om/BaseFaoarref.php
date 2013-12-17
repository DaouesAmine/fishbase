<?php


/**
 * Base class that represents a row from the 'faoarref' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFaoarref extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FaoarrefPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FaoarrefPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the areacode field.
     * @var        int
     */
    protected $areacode;

    /**
     * The value for the fao field.
     * @var        string
     */
    protected $fao;

    /**
     * The value for the note field.
     * @var        string
     */
    protected $note;

    /**
     * The value for the coastline field.
     * @var        int
     */
    protected $coastline;

    /**
     * The value for the shelf field.
     * @var        double
     */
    protected $shelf;

    /**
     * The value for the eezarea field.
     * @var        double
     */
    protected $eezarea;

    /**
     * The value for the latdeg field.
     * @var        int
     */
    protected $latdeg;

    /**
     * The value for the latmin field.
     * @var        double
     */
    protected $latmin;

    /**
     * The value for the n_s field.
     * @var        string
     */
    protected $n_s;

    /**
     * The value for the longdeg field.
     * @var        int
     */
    protected $longdeg;

    /**
     * The value for the longmin field.
     * @var        double
     */
    protected $longmin;

    /**
     * The value for the e_w field.
     * @var        string
     */
    protected $e_w;

    /**
     * The value for the neighborn field.
     * @var        int
     */
    protected $neighborn;

    /**
     * The value for the neighbors field.
     * @var        int
     */
    protected $neighbors;

    /**
     * The value for the neighborw field.
     * @var        int
     */
    protected $neighborw;

    /**
     * The value for the neighbore field.
     * @var        int
     */
    protected $neighbore;

    /**
     * The value for the northernlatitude field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $northernlatitude;

    /**
     * The value for the northernlatitudens field.
     * @var        string
     */
    protected $northernlatitudens;

    /**
     * The value for the southernlatitude field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $southernlatitude;

    /**
     * The value for the southernlatitudens field.
     * @var        string
     */
    protected $southernlatitudens;

    /**
     * The value for the westernlongitude field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $westernlongitude;

    /**
     * The value for the westernlongitudeew field.
     * @var        string
     */
    protected $westernlongitudeew;

    /**
     * The value for the easternlongitude field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $easternlongitude;

    /**
     * The value for the easternlongitudeew field.
     * @var        string
     */
    protected $easternlongitudeew;

    /**
     * The value for the familiescount field.
     * @var        int
     */
    protected $familiescount;

    /**
     * The value for the familiesno field.
     * @var        int
     */
    protected $familiesno;

    /**
     * The value for the familiesref field.
     * @var        int
     */
    protected $familiesref;

    /**
     * The value for the speciescount field.
     * @var        int
     */
    protected $speciescount;

    /**
     * The value for the speciesno field.
     * @var        int
     */
    protected $speciesno;

    /**
     * The value for the speciesref field.
     * @var        int
     */
    protected $speciesref;

    /**
     * The value for the famfisheries field.
     * @var        int
     */
    protected $famfisheries;

    /**
     * The value for the specfisheries field.
     * @var        int
     */
    protected $specfisheries;

    /**
     * The value for the famaqua field.
     * @var        int
     */
    protected $famaqua;

    /**
     * The value for the specaqua field.
     * @var        int
     */
    protected $specaqua;

    /**
     * The value for the fambait field.
     * @var        int
     */
    protected $fambait;

    /**
     * The value for the specbait field.
     * @var        int
     */
    protected $specbait;

    /**
     * The value for the famornament field.
     * @var        int
     */
    protected $famornament;

    /**
     * The value for the specornament field.
     * @var        int
     */
    protected $specornament;

    /**
     * The value for the famsport field.
     * @var        int
     */
    protected $famsport;

    /**
     * The value for the specsport field.
     * @var        int
     */
    protected $specsport;

    /**
     * The value for the famhuman field.
     * @var        int
     */
    protected $famhuman;

    /**
     * The value for the spechuman field.
     * @var        int
     */
    protected $spechuman;

    /**
     * The value for the famthreat field.
     * @var        int
     */
    protected $famthreat;

    /**
     * The value for the specthreat field.
     * @var        int
     */
    protected $specthreat;

    /**
     * The value for the famintro field.
     * @var        int
     */
    protected $famintro;

    /**
     * The value for the specintro field.
     * @var        int
     */
    protected $specintro;

    /**
     * The value for the famdanger field.
     * @var        int
     */
    protected $famdanger;

    /**
     * The value for the specdanger field.
     * @var        int
     */
    protected $specdanger;

    /**
     * The value for the complete field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $complete;

    /**
     * The value for the completeref field.
     * @var        int
     */
    protected $completeref;

    /**
     * The value for the continentgrp field.
     * @var        string
     */
    protected $continentgrp;

    /**
     * The value for the modified field.
     * @var        string
     */
    protected $modified;

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
        $this->northernlatitude = 0;
        $this->southernlatitude = 0;
        $this->westernlongitude = 0;
        $this->easternlongitude = 0;
        $this->complete = false;
    }

    /**
     * Initializes internal state of BaseFaoarref object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [areacode] column value.
     *
     * @return int
     */
    public function getAreacode()
    {

        return $this->areacode;
    }

    /**
     * Get the [fao] column value.
     *
     * @return string
     */
    public function getFao()
    {

        return $this->fao;
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
     * Get the [coastline] column value.
     *
     * @return int
     */
    public function getCoastline()
    {

        return $this->coastline;
    }

    /**
     * Get the [shelf] column value.
     *
     * @return double
     */
    public function getShelf()
    {

        return $this->shelf;
    }

    /**
     * Get the [eezarea] column value.
     *
     * @return double
     */
    public function getEezarea()
    {

        return $this->eezarea;
    }

    /**
     * Get the [latdeg] column value.
     *
     * @return int
     */
    public function getLatdeg()
    {

        return $this->latdeg;
    }

    /**
     * Get the [latmin] column value.
     *
     * @return double
     */
    public function getLatmin()
    {

        return $this->latmin;
    }

    /**
     * Get the [n_s] column value.
     *
     * @return string
     */
    public function getNS()
    {

        return $this->n_s;
    }

    /**
     * Get the [longdeg] column value.
     *
     * @return int
     */
    public function getLongdeg()
    {

        return $this->longdeg;
    }

    /**
     * Get the [longmin] column value.
     *
     * @return double
     */
    public function getLongmin()
    {

        return $this->longmin;
    }

    /**
     * Get the [e_w] column value.
     *
     * @return string
     */
    public function getEW()
    {

        return $this->e_w;
    }

    /**
     * Get the [neighborn] column value.
     *
     * @return int
     */
    public function getNeighborn()
    {

        return $this->neighborn;
    }

    /**
     * Get the [neighbors] column value.
     *
     * @return int
     */
    public function getNeighbors()
    {

        return $this->neighbors;
    }

    /**
     * Get the [neighborw] column value.
     *
     * @return int
     */
    public function getNeighborw()
    {

        return $this->neighborw;
    }

    /**
     * Get the [neighbore] column value.
     *
     * @return int
     */
    public function getNeighbore()
    {

        return $this->neighbore;
    }

    /**
     * Get the [northernlatitude] column value.
     *
     * @return int
     */
    public function getNorthernlatitude()
    {

        return $this->northernlatitude;
    }

    /**
     * Get the [northernlatitudens] column value.
     *
     * @return string
     */
    public function getNorthernlatitudens()
    {

        return $this->northernlatitudens;
    }

    /**
     * Get the [southernlatitude] column value.
     *
     * @return int
     */
    public function getSouthernlatitude()
    {

        return $this->southernlatitude;
    }

    /**
     * Get the [southernlatitudens] column value.
     *
     * @return string
     */
    public function getSouthernlatitudens()
    {

        return $this->southernlatitudens;
    }

    /**
     * Get the [westernlongitude] column value.
     *
     * @return int
     */
    public function getWesternlongitude()
    {

        return $this->westernlongitude;
    }

    /**
     * Get the [westernlongitudeew] column value.
     *
     * @return string
     */
    public function getWesternlongitudeew()
    {

        return $this->westernlongitudeew;
    }

    /**
     * Get the [easternlongitude] column value.
     *
     * @return int
     */
    public function getEasternlongitude()
    {

        return $this->easternlongitude;
    }

    /**
     * Get the [easternlongitudeew] column value.
     *
     * @return string
     */
    public function getEasternlongitudeew()
    {

        return $this->easternlongitudeew;
    }

    /**
     * Get the [familiescount] column value.
     *
     * @return int
     */
    public function getFamiliescount()
    {

        return $this->familiescount;
    }

    /**
     * Get the [familiesno] column value.
     *
     * @return int
     */
    public function getFamiliesno()
    {

        return $this->familiesno;
    }

    /**
     * Get the [familiesref] column value.
     *
     * @return int
     */
    public function getFamiliesref()
    {

        return $this->familiesref;
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
     * Get the [speciesno] column value.
     *
     * @return int
     */
    public function getSpeciesno()
    {

        return $this->speciesno;
    }

    /**
     * Get the [speciesref] column value.
     *
     * @return int
     */
    public function getSpeciesref()
    {

        return $this->speciesref;
    }

    /**
     * Get the [famfisheries] column value.
     *
     * @return int
     */
    public function getFamfisheries()
    {

        return $this->famfisheries;
    }

    /**
     * Get the [specfisheries] column value.
     *
     * @return int
     */
    public function getSpecfisheries()
    {

        return $this->specfisheries;
    }

    /**
     * Get the [famaqua] column value.
     *
     * @return int
     */
    public function getFamaqua()
    {

        return $this->famaqua;
    }

    /**
     * Get the [specaqua] column value.
     *
     * @return int
     */
    public function getSpecaqua()
    {

        return $this->specaqua;
    }

    /**
     * Get the [fambait] column value.
     *
     * @return int
     */
    public function getFambait()
    {

        return $this->fambait;
    }

    /**
     * Get the [specbait] column value.
     *
     * @return int
     */
    public function getSpecbait()
    {

        return $this->specbait;
    }

    /**
     * Get the [famornament] column value.
     *
     * @return int
     */
    public function getFamornament()
    {

        return $this->famornament;
    }

    /**
     * Get the [specornament] column value.
     *
     * @return int
     */
    public function getSpecornament()
    {

        return $this->specornament;
    }

    /**
     * Get the [famsport] column value.
     *
     * @return int
     */
    public function getFamsport()
    {

        return $this->famsport;
    }

    /**
     * Get the [specsport] column value.
     *
     * @return int
     */
    public function getSpecsport()
    {

        return $this->specsport;
    }

    /**
     * Get the [famhuman] column value.
     *
     * @return int
     */
    public function getFamhuman()
    {

        return $this->famhuman;
    }

    /**
     * Get the [spechuman] column value.
     *
     * @return int
     */
    public function getSpechuman()
    {

        return $this->spechuman;
    }

    /**
     * Get the [famthreat] column value.
     *
     * @return int
     */
    public function getFamthreat()
    {

        return $this->famthreat;
    }

    /**
     * Get the [specthreat] column value.
     *
     * @return int
     */
    public function getSpecthreat()
    {

        return $this->specthreat;
    }

    /**
     * Get the [famintro] column value.
     *
     * @return int
     */
    public function getFamintro()
    {

        return $this->famintro;
    }

    /**
     * Get the [specintro] column value.
     *
     * @return int
     */
    public function getSpecintro()
    {

        return $this->specintro;
    }

    /**
     * Get the [famdanger] column value.
     *
     * @return int
     */
    public function getFamdanger()
    {

        return $this->famdanger;
    }

    /**
     * Get the [specdanger] column value.
     *
     * @return int
     */
    public function getSpecdanger()
    {

        return $this->specdanger;
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
     * Get the [completeref] column value.
     *
     * @return int
     */
    public function getCompleteref()
    {

        return $this->completeref;
    }

    /**
     * Get the [continentgrp] column value.
     *
     * @return string
     */
    public function getContinentgrp()
    {

        return $this->continentgrp;
    }

    /**
     * Get the [optionally formatted] temporal [modified] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getModified($format = 'Y-m-d H:i:s')
    {
        if ($this->modified === null) {
            return null;
        }

        if ($this->modified === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->modified);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->modified, true), $x);
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
     * Set the value of [areacode] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setAreacode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areacode !== $v) {
            $this->areacode = $v;
            $this->modifiedColumns[] = FaoarrefPeer::AREACODE;
        }


        return $this;
    } // setAreacode()

    /**
     * Set the value of [fao] column.
     *
     * @param  string $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setFao($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fao !== $v) {
            $this->fao = $v;
            $this->modifiedColumns[] = FaoarrefPeer::FAO;
        }


        return $this;
    } // setFao()

    /**
     * Set the value of [note] column.
     *
     * @param  string $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setNote($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->note !== $v) {
            $this->note = $v;
            $this->modifiedColumns[] = FaoarrefPeer::NOTE;
        }


        return $this;
    } // setNote()

    /**
     * Set the value of [coastline] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setCoastline($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->coastline !== $v) {
            $this->coastline = $v;
            $this->modifiedColumns[] = FaoarrefPeer::COASTLINE;
        }


        return $this;
    } // setCoastline()

    /**
     * Set the value of [shelf] column.
     *
     * @param  double $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setShelf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->shelf !== $v) {
            $this->shelf = $v;
            $this->modifiedColumns[] = FaoarrefPeer::SHELF;
        }


        return $this;
    } // setShelf()

    /**
     * Set the value of [eezarea] column.
     *
     * @param  double $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setEezarea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->eezarea !== $v) {
            $this->eezarea = $v;
            $this->modifiedColumns[] = FaoarrefPeer::EEZAREA;
        }


        return $this;
    } // setEezarea()

    /**
     * Set the value of [latdeg] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setLatdeg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->latdeg !== $v) {
            $this->latdeg = $v;
            $this->modifiedColumns[] = FaoarrefPeer::LATDEG;
        }


        return $this;
    } // setLatdeg()

    /**
     * Set the value of [latmin] column.
     *
     * @param  double $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setLatmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->latmin !== $v) {
            $this->latmin = $v;
            $this->modifiedColumns[] = FaoarrefPeer::LATMIN;
        }


        return $this;
    } // setLatmin()

    /**
     * Set the value of [n_s] column.
     *
     * @param  string $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setNS($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->n_s !== $v) {
            $this->n_s = $v;
            $this->modifiedColumns[] = FaoarrefPeer::N_S;
        }


        return $this;
    } // setNS()

    /**
     * Set the value of [longdeg] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setLongdeg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->longdeg !== $v) {
            $this->longdeg = $v;
            $this->modifiedColumns[] = FaoarrefPeer::LONGDEG;
        }


        return $this;
    } // setLongdeg()

    /**
     * Set the value of [longmin] column.
     *
     * @param  double $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setLongmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->longmin !== $v) {
            $this->longmin = $v;
            $this->modifiedColumns[] = FaoarrefPeer::LONGMIN;
        }


        return $this;
    } // setLongmin()

    /**
     * Set the value of [e_w] column.
     *
     * @param  string $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setEW($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->e_w !== $v) {
            $this->e_w = $v;
            $this->modifiedColumns[] = FaoarrefPeer::E_W;
        }


        return $this;
    } // setEW()

    /**
     * Set the value of [neighborn] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setNeighborn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->neighborn !== $v) {
            $this->neighborn = $v;
            $this->modifiedColumns[] = FaoarrefPeer::NEIGHBORN;
        }


        return $this;
    } // setNeighborn()

    /**
     * Set the value of [neighbors] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setNeighbors($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->neighbors !== $v) {
            $this->neighbors = $v;
            $this->modifiedColumns[] = FaoarrefPeer::NEIGHBORS;
        }


        return $this;
    } // setNeighbors()

    /**
     * Set the value of [neighborw] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setNeighborw($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->neighborw !== $v) {
            $this->neighborw = $v;
            $this->modifiedColumns[] = FaoarrefPeer::NEIGHBORW;
        }


        return $this;
    } // setNeighborw()

    /**
     * Set the value of [neighbore] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setNeighbore($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->neighbore !== $v) {
            $this->neighbore = $v;
            $this->modifiedColumns[] = FaoarrefPeer::NEIGHBORE;
        }


        return $this;
    } // setNeighbore()

    /**
     * Set the value of [northernlatitude] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setNorthernlatitude($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->northernlatitude !== $v) {
            $this->northernlatitude = $v;
            $this->modifiedColumns[] = FaoarrefPeer::NORTHERNLATITUDE;
        }


        return $this;
    } // setNorthernlatitude()

    /**
     * Set the value of [northernlatitudens] column.
     *
     * @param  string $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setNorthernlatitudens($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northernlatitudens !== $v) {
            $this->northernlatitudens = $v;
            $this->modifiedColumns[] = FaoarrefPeer::NORTHERNLATITUDENS;
        }


        return $this;
    } // setNorthernlatitudens()

    /**
     * Set the value of [southernlatitude] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setSouthernlatitude($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->southernlatitude !== $v) {
            $this->southernlatitude = $v;
            $this->modifiedColumns[] = FaoarrefPeer::SOUTHERNLATITUDE;
        }


        return $this;
    } // setSouthernlatitude()

    /**
     * Set the value of [southernlatitudens] column.
     *
     * @param  string $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setSouthernlatitudens($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->southernlatitudens !== $v) {
            $this->southernlatitudens = $v;
            $this->modifiedColumns[] = FaoarrefPeer::SOUTHERNLATITUDENS;
        }


        return $this;
    } // setSouthernlatitudens()

    /**
     * Set the value of [westernlongitude] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setWesternlongitude($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->westernlongitude !== $v) {
            $this->westernlongitude = $v;
            $this->modifiedColumns[] = FaoarrefPeer::WESTERNLONGITUDE;
        }


        return $this;
    } // setWesternlongitude()

    /**
     * Set the value of [westernlongitudeew] column.
     *
     * @param  string $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setWesternlongitudeew($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->westernlongitudeew !== $v) {
            $this->westernlongitudeew = $v;
            $this->modifiedColumns[] = FaoarrefPeer::WESTERNLONGITUDEEW;
        }


        return $this;
    } // setWesternlongitudeew()

    /**
     * Set the value of [easternlongitude] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setEasternlongitude($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->easternlongitude !== $v) {
            $this->easternlongitude = $v;
            $this->modifiedColumns[] = FaoarrefPeer::EASTERNLONGITUDE;
        }


        return $this;
    } // setEasternlongitude()

    /**
     * Set the value of [easternlongitudeew] column.
     *
     * @param  string $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setEasternlongitudeew($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->easternlongitudeew !== $v) {
            $this->easternlongitudeew = $v;
            $this->modifiedColumns[] = FaoarrefPeer::EASTERNLONGITUDEEW;
        }


        return $this;
    } // setEasternlongitudeew()

    /**
     * Set the value of [familiescount] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setFamiliescount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->familiescount !== $v) {
            $this->familiescount = $v;
            $this->modifiedColumns[] = FaoarrefPeer::FAMILIESCOUNT;
        }


        return $this;
    } // setFamiliescount()

    /**
     * Set the value of [familiesno] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setFamiliesno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->familiesno !== $v) {
            $this->familiesno = $v;
            $this->modifiedColumns[] = FaoarrefPeer::FAMILIESNO;
        }


        return $this;
    } // setFamiliesno()

    /**
     * Set the value of [familiesref] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setFamiliesref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->familiesref !== $v) {
            $this->familiesref = $v;
            $this->modifiedColumns[] = FaoarrefPeer::FAMILIESREF;
        }


        return $this;
    } // setFamiliesref()

    /**
     * Set the value of [speciescount] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setSpeciescount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speciescount !== $v) {
            $this->speciescount = $v;
            $this->modifiedColumns[] = FaoarrefPeer::SPECIESCOUNT;
        }


        return $this;
    } // setSpeciescount()

    /**
     * Set the value of [speciesno] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setSpeciesno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speciesno !== $v) {
            $this->speciesno = $v;
            $this->modifiedColumns[] = FaoarrefPeer::SPECIESNO;
        }


        return $this;
    } // setSpeciesno()

    /**
     * Set the value of [speciesref] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setSpeciesref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speciesref !== $v) {
            $this->speciesref = $v;
            $this->modifiedColumns[] = FaoarrefPeer::SPECIESREF;
        }


        return $this;
    } // setSpeciesref()

    /**
     * Set the value of [famfisheries] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setFamfisheries($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->famfisheries !== $v) {
            $this->famfisheries = $v;
            $this->modifiedColumns[] = FaoarrefPeer::FAMFISHERIES;
        }


        return $this;
    } // setFamfisheries()

    /**
     * Set the value of [specfisheries] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setSpecfisheries($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->specfisheries !== $v) {
            $this->specfisheries = $v;
            $this->modifiedColumns[] = FaoarrefPeer::SPECFISHERIES;
        }


        return $this;
    } // setSpecfisheries()

    /**
     * Set the value of [famaqua] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setFamaqua($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->famaqua !== $v) {
            $this->famaqua = $v;
            $this->modifiedColumns[] = FaoarrefPeer::FAMAQUA;
        }


        return $this;
    } // setFamaqua()

    /**
     * Set the value of [specaqua] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setSpecaqua($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->specaqua !== $v) {
            $this->specaqua = $v;
            $this->modifiedColumns[] = FaoarrefPeer::SPECAQUA;
        }


        return $this;
    } // setSpecaqua()

    /**
     * Set the value of [fambait] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setFambait($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fambait !== $v) {
            $this->fambait = $v;
            $this->modifiedColumns[] = FaoarrefPeer::FAMBAIT;
        }


        return $this;
    } // setFambait()

    /**
     * Set the value of [specbait] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setSpecbait($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->specbait !== $v) {
            $this->specbait = $v;
            $this->modifiedColumns[] = FaoarrefPeer::SPECBAIT;
        }


        return $this;
    } // setSpecbait()

    /**
     * Set the value of [famornament] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setFamornament($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->famornament !== $v) {
            $this->famornament = $v;
            $this->modifiedColumns[] = FaoarrefPeer::FAMORNAMENT;
        }


        return $this;
    } // setFamornament()

    /**
     * Set the value of [specornament] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setSpecornament($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->specornament !== $v) {
            $this->specornament = $v;
            $this->modifiedColumns[] = FaoarrefPeer::SPECORNAMENT;
        }


        return $this;
    } // setSpecornament()

    /**
     * Set the value of [famsport] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setFamsport($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->famsport !== $v) {
            $this->famsport = $v;
            $this->modifiedColumns[] = FaoarrefPeer::FAMSPORT;
        }


        return $this;
    } // setFamsport()

    /**
     * Set the value of [specsport] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setSpecsport($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->specsport !== $v) {
            $this->specsport = $v;
            $this->modifiedColumns[] = FaoarrefPeer::SPECSPORT;
        }


        return $this;
    } // setSpecsport()

    /**
     * Set the value of [famhuman] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setFamhuman($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->famhuman !== $v) {
            $this->famhuman = $v;
            $this->modifiedColumns[] = FaoarrefPeer::FAMHUMAN;
        }


        return $this;
    } // setFamhuman()

    /**
     * Set the value of [spechuman] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setSpechuman($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spechuman !== $v) {
            $this->spechuman = $v;
            $this->modifiedColumns[] = FaoarrefPeer::SPECHUMAN;
        }


        return $this;
    } // setSpechuman()

    /**
     * Set the value of [famthreat] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setFamthreat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->famthreat !== $v) {
            $this->famthreat = $v;
            $this->modifiedColumns[] = FaoarrefPeer::FAMTHREAT;
        }


        return $this;
    } // setFamthreat()

    /**
     * Set the value of [specthreat] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setSpecthreat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->specthreat !== $v) {
            $this->specthreat = $v;
            $this->modifiedColumns[] = FaoarrefPeer::SPECTHREAT;
        }


        return $this;
    } // setSpecthreat()

    /**
     * Set the value of [famintro] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setFamintro($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->famintro !== $v) {
            $this->famintro = $v;
            $this->modifiedColumns[] = FaoarrefPeer::FAMINTRO;
        }


        return $this;
    } // setFamintro()

    /**
     * Set the value of [specintro] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setSpecintro($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->specintro !== $v) {
            $this->specintro = $v;
            $this->modifiedColumns[] = FaoarrefPeer::SPECINTRO;
        }


        return $this;
    } // setSpecintro()

    /**
     * Set the value of [famdanger] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setFamdanger($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->famdanger !== $v) {
            $this->famdanger = $v;
            $this->modifiedColumns[] = FaoarrefPeer::FAMDANGER;
        }


        return $this;
    } // setFamdanger()

    /**
     * Set the value of [specdanger] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setSpecdanger($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->specdanger !== $v) {
            $this->specdanger = $v;
            $this->modifiedColumns[] = FaoarrefPeer::SPECDANGER;
        }


        return $this;
    } // setSpecdanger()

    /**
     * Sets the value of the [complete] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Faoarref The current object (for fluent API support)
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
            $this->modifiedColumns[] = FaoarrefPeer::COMPLETE;
        }


        return $this;
    } // setComplete()

    /**
     * Set the value of [completeref] column.
     *
     * @param  int $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setCompleteref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->completeref !== $v) {
            $this->completeref = $v;
            $this->modifiedColumns[] = FaoarrefPeer::COMPLETEREF;
        }


        return $this;
    } // setCompleteref()

    /**
     * Set the value of [continentgrp] column.
     *
     * @param  string $v new value
     * @return Faoarref The current object (for fluent API support)
     */
    public function setContinentgrp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->continentgrp !== $v) {
            $this->continentgrp = $v;
            $this->modifiedColumns[] = FaoarrefPeer::CONTINENTGRP;
        }


        return $this;
    } // setContinentgrp()

    /**
     * Sets the value of [modified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Faoarref The current object (for fluent API support)
     */
    public function setModified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modified !== null || $dt !== null) {
            $currentDateAsString = ($this->modified !== null && $tmpDt = new DateTime($this->modified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->modified = $newDateAsString;
                $this->modifiedColumns[] = FaoarrefPeer::MODIFIED;
            }
        } // if either are not null


        return $this;
    } // setModified()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Faoarref The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = FaoarrefPeer::TS;
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
            if ($this->northernlatitude !== 0) {
                return false;
            }

            if ($this->southernlatitude !== 0) {
                return false;
            }

            if ($this->westernlongitude !== 0) {
                return false;
            }

            if ($this->easternlongitude !== 0) {
                return false;
            }

            if ($this->complete !== false) {
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

            $this->areacode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->fao = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->note = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->coastline = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->shelf = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
            $this->eezarea = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
            $this->latdeg = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->latmin = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->n_s = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->longdeg = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->longmin = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->e_w = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->neighborn = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->neighbors = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->neighborw = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->neighbore = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->northernlatitude = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->northernlatitudens = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->southernlatitude = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->southernlatitudens = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->westernlongitude = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->westernlongitudeew = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->easternlongitude = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->easternlongitudeew = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->familiescount = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->familiesno = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->familiesref = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->speciescount = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->speciesno = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->speciesref = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->famfisheries = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->specfisheries = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->famaqua = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->specaqua = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->fambait = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->specbait = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->famornament = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->specornament = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->famsport = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->specsport = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->famhuman = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->spechuman = ($row[$startcol + 41] !== null) ? (int) $row[$startcol + 41] : null;
            $this->famthreat = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->specthreat = ($row[$startcol + 43] !== null) ? (int) $row[$startcol + 43] : null;
            $this->famintro = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->specintro = ($row[$startcol + 45] !== null) ? (int) $row[$startcol + 45] : null;
            $this->famdanger = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->specdanger = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->complete = ($row[$startcol + 48] !== null) ? (boolean) $row[$startcol + 48] : null;
            $this->completeref = ($row[$startcol + 49] !== null) ? (int) $row[$startcol + 49] : null;
            $this->continentgrp = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->modified = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->ts = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 53; // 53 = FaoarrefPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Faoarref object", $e);
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
            $con = Propel::getConnection(FaoarrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FaoarrefPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(FaoarrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FaoarrefQuery::create()
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
            $con = Propel::getConnection(FaoarrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                FaoarrefPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(FaoarrefPeer::AREACODE)) {
            $modifiedColumns[':p' . $index++]  = '`AreaCode`';
        }
        if ($this->isColumnModified(FaoarrefPeer::FAO)) {
            $modifiedColumns[':p' . $index++]  = '`FAO`';
        }
        if ($this->isColumnModified(FaoarrefPeer::NOTE)) {
            $modifiedColumns[':p' . $index++]  = '`Note`';
        }
        if ($this->isColumnModified(FaoarrefPeer::COASTLINE)) {
            $modifiedColumns[':p' . $index++]  = '`Coastline`';
        }
        if ($this->isColumnModified(FaoarrefPeer::SHELF)) {
            $modifiedColumns[':p' . $index++]  = '`Shelf`';
        }
        if ($this->isColumnModified(FaoarrefPeer::EEZAREA)) {
            $modifiedColumns[':p' . $index++]  = '`EEZarea`';
        }
        if ($this->isColumnModified(FaoarrefPeer::LATDEG)) {
            $modifiedColumns[':p' . $index++]  = '`LatDeg`';
        }
        if ($this->isColumnModified(FaoarrefPeer::LATMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LatMin`';
        }
        if ($this->isColumnModified(FaoarrefPeer::N_S)) {
            $modifiedColumns[':p' . $index++]  = '`N_S`';
        }
        if ($this->isColumnModified(FaoarrefPeer::LONGDEG)) {
            $modifiedColumns[':p' . $index++]  = '`LongDeg`';
        }
        if ($this->isColumnModified(FaoarrefPeer::LONGMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LongMin`';
        }
        if ($this->isColumnModified(FaoarrefPeer::E_W)) {
            $modifiedColumns[':p' . $index++]  = '`E_W`';
        }
        if ($this->isColumnModified(FaoarrefPeer::NEIGHBORN)) {
            $modifiedColumns[':p' . $index++]  = '`NeighborN`';
        }
        if ($this->isColumnModified(FaoarrefPeer::NEIGHBORS)) {
            $modifiedColumns[':p' . $index++]  = '`NeighborS`';
        }
        if ($this->isColumnModified(FaoarrefPeer::NEIGHBORW)) {
            $modifiedColumns[':p' . $index++]  = '`NeighborW`';
        }
        if ($this->isColumnModified(FaoarrefPeer::NEIGHBORE)) {
            $modifiedColumns[':p' . $index++]  = '`NeighborE`';
        }
        if ($this->isColumnModified(FaoarrefPeer::NORTHERNLATITUDE)) {
            $modifiedColumns[':p' . $index++]  = '`NorthernLatitude`';
        }
        if ($this->isColumnModified(FaoarrefPeer::NORTHERNLATITUDENS)) {
            $modifiedColumns[':p' . $index++]  = '`NorthernLatitudeNS`';
        }
        if ($this->isColumnModified(FaoarrefPeer::SOUTHERNLATITUDE)) {
            $modifiedColumns[':p' . $index++]  = '`SouthernLatitude`';
        }
        if ($this->isColumnModified(FaoarrefPeer::SOUTHERNLATITUDENS)) {
            $modifiedColumns[':p' . $index++]  = '`SouthernLatitudeNS`';
        }
        if ($this->isColumnModified(FaoarrefPeer::WESTERNLONGITUDE)) {
            $modifiedColumns[':p' . $index++]  = '`WesternLongitude`';
        }
        if ($this->isColumnModified(FaoarrefPeer::WESTERNLONGITUDEEW)) {
            $modifiedColumns[':p' . $index++]  = '`WesternLongitudeEW`';
        }
        if ($this->isColumnModified(FaoarrefPeer::EASTERNLONGITUDE)) {
            $modifiedColumns[':p' . $index++]  = '`EasternLongitude`';
        }
        if ($this->isColumnModified(FaoarrefPeer::EASTERNLONGITUDEEW)) {
            $modifiedColumns[':p' . $index++]  = '`EasternLongitudeEW`';
        }
        if ($this->isColumnModified(FaoarrefPeer::FAMILIESCOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`FamiliesCount`';
        }
        if ($this->isColumnModified(FaoarrefPeer::FAMILIESNO)) {
            $modifiedColumns[':p' . $index++]  = '`FamiliesNo`';
        }
        if ($this->isColumnModified(FaoarrefPeer::FAMILIESREF)) {
            $modifiedColumns[':p' . $index++]  = '`FamiliesRef`';
        }
        if ($this->isColumnModified(FaoarrefPeer::SPECIESCOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`SpeciesCount`';
        }
        if ($this->isColumnModified(FaoarrefPeer::SPECIESNO)) {
            $modifiedColumns[':p' . $index++]  = '`SpeciesNo`';
        }
        if ($this->isColumnModified(FaoarrefPeer::SPECIESREF)) {
            $modifiedColumns[':p' . $index++]  = '`SpeciesRef`';
        }
        if ($this->isColumnModified(FaoarrefPeer::FAMFISHERIES)) {
            $modifiedColumns[':p' . $index++]  = '`FamFisheries`';
        }
        if ($this->isColumnModified(FaoarrefPeer::SPECFISHERIES)) {
            $modifiedColumns[':p' . $index++]  = '`SpecFisheries`';
        }
        if ($this->isColumnModified(FaoarrefPeer::FAMAQUA)) {
            $modifiedColumns[':p' . $index++]  = '`FamAqua`';
        }
        if ($this->isColumnModified(FaoarrefPeer::SPECAQUA)) {
            $modifiedColumns[':p' . $index++]  = '`SpecAqua`';
        }
        if ($this->isColumnModified(FaoarrefPeer::FAMBAIT)) {
            $modifiedColumns[':p' . $index++]  = '`FamBait`';
        }
        if ($this->isColumnModified(FaoarrefPeer::SPECBAIT)) {
            $modifiedColumns[':p' . $index++]  = '`SpecBait`';
        }
        if ($this->isColumnModified(FaoarrefPeer::FAMORNAMENT)) {
            $modifiedColumns[':p' . $index++]  = '`FamOrnament`';
        }
        if ($this->isColumnModified(FaoarrefPeer::SPECORNAMENT)) {
            $modifiedColumns[':p' . $index++]  = '`SpecOrnament`';
        }
        if ($this->isColumnModified(FaoarrefPeer::FAMSPORT)) {
            $modifiedColumns[':p' . $index++]  = '`FamSport`';
        }
        if ($this->isColumnModified(FaoarrefPeer::SPECSPORT)) {
            $modifiedColumns[':p' . $index++]  = '`SpecSport`';
        }
        if ($this->isColumnModified(FaoarrefPeer::FAMHUMAN)) {
            $modifiedColumns[':p' . $index++]  = '`FamHuman`';
        }
        if ($this->isColumnModified(FaoarrefPeer::SPECHUMAN)) {
            $modifiedColumns[':p' . $index++]  = '`SpecHuman`';
        }
        if ($this->isColumnModified(FaoarrefPeer::FAMTHREAT)) {
            $modifiedColumns[':p' . $index++]  = '`FamThreat`';
        }
        if ($this->isColumnModified(FaoarrefPeer::SPECTHREAT)) {
            $modifiedColumns[':p' . $index++]  = '`SpecThreat`';
        }
        if ($this->isColumnModified(FaoarrefPeer::FAMINTRO)) {
            $modifiedColumns[':p' . $index++]  = '`FamIntro`';
        }
        if ($this->isColumnModified(FaoarrefPeer::SPECINTRO)) {
            $modifiedColumns[':p' . $index++]  = '`SpecIntro`';
        }
        if ($this->isColumnModified(FaoarrefPeer::FAMDANGER)) {
            $modifiedColumns[':p' . $index++]  = '`FamDanger`';
        }
        if ($this->isColumnModified(FaoarrefPeer::SPECDANGER)) {
            $modifiedColumns[':p' . $index++]  = '`SpecDanger`';
        }
        if ($this->isColumnModified(FaoarrefPeer::COMPLETE)) {
            $modifiedColumns[':p' . $index++]  = '`Complete`';
        }
        if ($this->isColumnModified(FaoarrefPeer::COMPLETEREF)) {
            $modifiedColumns[':p' . $index++]  = '`CompleteRef`';
        }
        if ($this->isColumnModified(FaoarrefPeer::CONTINENTGRP)) {
            $modifiedColumns[':p' . $index++]  = '`ContinentGrp`';
        }
        if ($this->isColumnModified(FaoarrefPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(FaoarrefPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `faoarref` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`AreaCode`':
                        $stmt->bindValue($identifier, $this->areacode, PDO::PARAM_INT);
                        break;
                    case '`FAO`':
                        $stmt->bindValue($identifier, $this->fao, PDO::PARAM_STR);
                        break;
                    case '`Note`':
                        $stmt->bindValue($identifier, $this->note, PDO::PARAM_STR);
                        break;
                    case '`Coastline`':
                        $stmt->bindValue($identifier, $this->coastline, PDO::PARAM_INT);
                        break;
                    case '`Shelf`':
                        $stmt->bindValue($identifier, $this->shelf, PDO::PARAM_STR);
                        break;
                    case '`EEZarea`':
                        $stmt->bindValue($identifier, $this->eezarea, PDO::PARAM_STR);
                        break;
                    case '`LatDeg`':
                        $stmt->bindValue($identifier, $this->latdeg, PDO::PARAM_INT);
                        break;
                    case '`LatMin`':
                        $stmt->bindValue($identifier, $this->latmin, PDO::PARAM_STR);
                        break;
                    case '`N_S`':
                        $stmt->bindValue($identifier, $this->n_s, PDO::PARAM_STR);
                        break;
                    case '`LongDeg`':
                        $stmt->bindValue($identifier, $this->longdeg, PDO::PARAM_INT);
                        break;
                    case '`LongMin`':
                        $stmt->bindValue($identifier, $this->longmin, PDO::PARAM_STR);
                        break;
                    case '`E_W`':
                        $stmt->bindValue($identifier, $this->e_w, PDO::PARAM_STR);
                        break;
                    case '`NeighborN`':
                        $stmt->bindValue($identifier, $this->neighborn, PDO::PARAM_INT);
                        break;
                    case '`NeighborS`':
                        $stmt->bindValue($identifier, $this->neighbors, PDO::PARAM_INT);
                        break;
                    case '`NeighborW`':
                        $stmt->bindValue($identifier, $this->neighborw, PDO::PARAM_INT);
                        break;
                    case '`NeighborE`':
                        $stmt->bindValue($identifier, $this->neighbore, PDO::PARAM_INT);
                        break;
                    case '`NorthernLatitude`':
                        $stmt->bindValue($identifier, $this->northernlatitude, PDO::PARAM_INT);
                        break;
                    case '`NorthernLatitudeNS`':
                        $stmt->bindValue($identifier, $this->northernlatitudens, PDO::PARAM_STR);
                        break;
                    case '`SouthernLatitude`':
                        $stmt->bindValue($identifier, $this->southernlatitude, PDO::PARAM_INT);
                        break;
                    case '`SouthernLatitudeNS`':
                        $stmt->bindValue($identifier, $this->southernlatitudens, PDO::PARAM_STR);
                        break;
                    case '`WesternLongitude`':
                        $stmt->bindValue($identifier, $this->westernlongitude, PDO::PARAM_INT);
                        break;
                    case '`WesternLongitudeEW`':
                        $stmt->bindValue($identifier, $this->westernlongitudeew, PDO::PARAM_STR);
                        break;
                    case '`EasternLongitude`':
                        $stmt->bindValue($identifier, $this->easternlongitude, PDO::PARAM_INT);
                        break;
                    case '`EasternLongitudeEW`':
                        $stmt->bindValue($identifier, $this->easternlongitudeew, PDO::PARAM_STR);
                        break;
                    case '`FamiliesCount`':
                        $stmt->bindValue($identifier, $this->familiescount, PDO::PARAM_INT);
                        break;
                    case '`FamiliesNo`':
                        $stmt->bindValue($identifier, $this->familiesno, PDO::PARAM_INT);
                        break;
                    case '`FamiliesRef`':
                        $stmt->bindValue($identifier, $this->familiesref, PDO::PARAM_INT);
                        break;
                    case '`SpeciesCount`':
                        $stmt->bindValue($identifier, $this->speciescount, PDO::PARAM_INT);
                        break;
                    case '`SpeciesNo`':
                        $stmt->bindValue($identifier, $this->speciesno, PDO::PARAM_INT);
                        break;
                    case '`SpeciesRef`':
                        $stmt->bindValue($identifier, $this->speciesref, PDO::PARAM_INT);
                        break;
                    case '`FamFisheries`':
                        $stmt->bindValue($identifier, $this->famfisheries, PDO::PARAM_INT);
                        break;
                    case '`SpecFisheries`':
                        $stmt->bindValue($identifier, $this->specfisheries, PDO::PARAM_INT);
                        break;
                    case '`FamAqua`':
                        $stmt->bindValue($identifier, $this->famaqua, PDO::PARAM_INT);
                        break;
                    case '`SpecAqua`':
                        $stmt->bindValue($identifier, $this->specaqua, PDO::PARAM_INT);
                        break;
                    case '`FamBait`':
                        $stmt->bindValue($identifier, $this->fambait, PDO::PARAM_INT);
                        break;
                    case '`SpecBait`':
                        $stmt->bindValue($identifier, $this->specbait, PDO::PARAM_INT);
                        break;
                    case '`FamOrnament`':
                        $stmt->bindValue($identifier, $this->famornament, PDO::PARAM_INT);
                        break;
                    case '`SpecOrnament`':
                        $stmt->bindValue($identifier, $this->specornament, PDO::PARAM_INT);
                        break;
                    case '`FamSport`':
                        $stmt->bindValue($identifier, $this->famsport, PDO::PARAM_INT);
                        break;
                    case '`SpecSport`':
                        $stmt->bindValue($identifier, $this->specsport, PDO::PARAM_INT);
                        break;
                    case '`FamHuman`':
                        $stmt->bindValue($identifier, $this->famhuman, PDO::PARAM_INT);
                        break;
                    case '`SpecHuman`':
                        $stmt->bindValue($identifier, $this->spechuman, PDO::PARAM_INT);
                        break;
                    case '`FamThreat`':
                        $stmt->bindValue($identifier, $this->famthreat, PDO::PARAM_INT);
                        break;
                    case '`SpecThreat`':
                        $stmt->bindValue($identifier, $this->specthreat, PDO::PARAM_INT);
                        break;
                    case '`FamIntro`':
                        $stmt->bindValue($identifier, $this->famintro, PDO::PARAM_INT);
                        break;
                    case '`SpecIntro`':
                        $stmt->bindValue($identifier, $this->specintro, PDO::PARAM_INT);
                        break;
                    case '`FamDanger`':
                        $stmt->bindValue($identifier, $this->famdanger, PDO::PARAM_INT);
                        break;
                    case '`SpecDanger`':
                        $stmt->bindValue($identifier, $this->specdanger, PDO::PARAM_INT);
                        break;
                    case '`Complete`':
                        $stmt->bindValue($identifier, (int) $this->complete, PDO::PARAM_INT);
                        break;
                    case '`CompleteRef`':
                        $stmt->bindValue($identifier, $this->completeref, PDO::PARAM_INT);
                        break;
                    case '`ContinentGrp`':
                        $stmt->bindValue($identifier, $this->continentgrp, PDO::PARAM_STR);
                        break;
                    case '`Modified`':
                        $stmt->bindValue($identifier, $this->modified, PDO::PARAM_STR);
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


            if (($retval = FaoarrefPeer::doValidate($this, $columns)) !== true) {
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
        $pos = FaoarrefPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getAreacode();
                break;
            case 1:
                return $this->getFao();
                break;
            case 2:
                return $this->getNote();
                break;
            case 3:
                return $this->getCoastline();
                break;
            case 4:
                return $this->getShelf();
                break;
            case 5:
                return $this->getEezarea();
                break;
            case 6:
                return $this->getLatdeg();
                break;
            case 7:
                return $this->getLatmin();
                break;
            case 8:
                return $this->getNS();
                break;
            case 9:
                return $this->getLongdeg();
                break;
            case 10:
                return $this->getLongmin();
                break;
            case 11:
                return $this->getEW();
                break;
            case 12:
                return $this->getNeighborn();
                break;
            case 13:
                return $this->getNeighbors();
                break;
            case 14:
                return $this->getNeighborw();
                break;
            case 15:
                return $this->getNeighbore();
                break;
            case 16:
                return $this->getNorthernlatitude();
                break;
            case 17:
                return $this->getNorthernlatitudens();
                break;
            case 18:
                return $this->getSouthernlatitude();
                break;
            case 19:
                return $this->getSouthernlatitudens();
                break;
            case 20:
                return $this->getWesternlongitude();
                break;
            case 21:
                return $this->getWesternlongitudeew();
                break;
            case 22:
                return $this->getEasternlongitude();
                break;
            case 23:
                return $this->getEasternlongitudeew();
                break;
            case 24:
                return $this->getFamiliescount();
                break;
            case 25:
                return $this->getFamiliesno();
                break;
            case 26:
                return $this->getFamiliesref();
                break;
            case 27:
                return $this->getSpeciescount();
                break;
            case 28:
                return $this->getSpeciesno();
                break;
            case 29:
                return $this->getSpeciesref();
                break;
            case 30:
                return $this->getFamfisheries();
                break;
            case 31:
                return $this->getSpecfisheries();
                break;
            case 32:
                return $this->getFamaqua();
                break;
            case 33:
                return $this->getSpecaqua();
                break;
            case 34:
                return $this->getFambait();
                break;
            case 35:
                return $this->getSpecbait();
                break;
            case 36:
                return $this->getFamornament();
                break;
            case 37:
                return $this->getSpecornament();
                break;
            case 38:
                return $this->getFamsport();
                break;
            case 39:
                return $this->getSpecsport();
                break;
            case 40:
                return $this->getFamhuman();
                break;
            case 41:
                return $this->getSpechuman();
                break;
            case 42:
                return $this->getFamthreat();
                break;
            case 43:
                return $this->getSpecthreat();
                break;
            case 44:
                return $this->getFamintro();
                break;
            case 45:
                return $this->getSpecintro();
                break;
            case 46:
                return $this->getFamdanger();
                break;
            case 47:
                return $this->getSpecdanger();
                break;
            case 48:
                return $this->getComplete();
                break;
            case 49:
                return $this->getCompleteref();
                break;
            case 50:
                return $this->getContinentgrp();
                break;
            case 51:
                return $this->getModified();
                break;
            case 52:
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
        if (isset($alreadyDumpedObjects['Faoarref'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Faoarref'][$this->getPrimaryKey()] = true;
        $keys = FaoarrefPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAreacode(),
            $keys[1] => $this->getFao(),
            $keys[2] => $this->getNote(),
            $keys[3] => $this->getCoastline(),
            $keys[4] => $this->getShelf(),
            $keys[5] => $this->getEezarea(),
            $keys[6] => $this->getLatdeg(),
            $keys[7] => $this->getLatmin(),
            $keys[8] => $this->getNS(),
            $keys[9] => $this->getLongdeg(),
            $keys[10] => $this->getLongmin(),
            $keys[11] => $this->getEW(),
            $keys[12] => $this->getNeighborn(),
            $keys[13] => $this->getNeighbors(),
            $keys[14] => $this->getNeighborw(),
            $keys[15] => $this->getNeighbore(),
            $keys[16] => $this->getNorthernlatitude(),
            $keys[17] => $this->getNorthernlatitudens(),
            $keys[18] => $this->getSouthernlatitude(),
            $keys[19] => $this->getSouthernlatitudens(),
            $keys[20] => $this->getWesternlongitude(),
            $keys[21] => $this->getWesternlongitudeew(),
            $keys[22] => $this->getEasternlongitude(),
            $keys[23] => $this->getEasternlongitudeew(),
            $keys[24] => $this->getFamiliescount(),
            $keys[25] => $this->getFamiliesno(),
            $keys[26] => $this->getFamiliesref(),
            $keys[27] => $this->getSpeciescount(),
            $keys[28] => $this->getSpeciesno(),
            $keys[29] => $this->getSpeciesref(),
            $keys[30] => $this->getFamfisheries(),
            $keys[31] => $this->getSpecfisheries(),
            $keys[32] => $this->getFamaqua(),
            $keys[33] => $this->getSpecaqua(),
            $keys[34] => $this->getFambait(),
            $keys[35] => $this->getSpecbait(),
            $keys[36] => $this->getFamornament(),
            $keys[37] => $this->getSpecornament(),
            $keys[38] => $this->getFamsport(),
            $keys[39] => $this->getSpecsport(),
            $keys[40] => $this->getFamhuman(),
            $keys[41] => $this->getSpechuman(),
            $keys[42] => $this->getFamthreat(),
            $keys[43] => $this->getSpecthreat(),
            $keys[44] => $this->getFamintro(),
            $keys[45] => $this->getSpecintro(),
            $keys[46] => $this->getFamdanger(),
            $keys[47] => $this->getSpecdanger(),
            $keys[48] => $this->getComplete(),
            $keys[49] => $this->getCompleteref(),
            $keys[50] => $this->getContinentgrp(),
            $keys[51] => $this->getModified(),
            $keys[52] => $this->getTs(),
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
        $pos = FaoarrefPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setAreacode($value);
                break;
            case 1:
                $this->setFao($value);
                break;
            case 2:
                $this->setNote($value);
                break;
            case 3:
                $this->setCoastline($value);
                break;
            case 4:
                $this->setShelf($value);
                break;
            case 5:
                $this->setEezarea($value);
                break;
            case 6:
                $this->setLatdeg($value);
                break;
            case 7:
                $this->setLatmin($value);
                break;
            case 8:
                $this->setNS($value);
                break;
            case 9:
                $this->setLongdeg($value);
                break;
            case 10:
                $this->setLongmin($value);
                break;
            case 11:
                $this->setEW($value);
                break;
            case 12:
                $this->setNeighborn($value);
                break;
            case 13:
                $this->setNeighbors($value);
                break;
            case 14:
                $this->setNeighborw($value);
                break;
            case 15:
                $this->setNeighbore($value);
                break;
            case 16:
                $this->setNorthernlatitude($value);
                break;
            case 17:
                $this->setNorthernlatitudens($value);
                break;
            case 18:
                $this->setSouthernlatitude($value);
                break;
            case 19:
                $this->setSouthernlatitudens($value);
                break;
            case 20:
                $this->setWesternlongitude($value);
                break;
            case 21:
                $this->setWesternlongitudeew($value);
                break;
            case 22:
                $this->setEasternlongitude($value);
                break;
            case 23:
                $this->setEasternlongitudeew($value);
                break;
            case 24:
                $this->setFamiliescount($value);
                break;
            case 25:
                $this->setFamiliesno($value);
                break;
            case 26:
                $this->setFamiliesref($value);
                break;
            case 27:
                $this->setSpeciescount($value);
                break;
            case 28:
                $this->setSpeciesno($value);
                break;
            case 29:
                $this->setSpeciesref($value);
                break;
            case 30:
                $this->setFamfisheries($value);
                break;
            case 31:
                $this->setSpecfisheries($value);
                break;
            case 32:
                $this->setFamaqua($value);
                break;
            case 33:
                $this->setSpecaqua($value);
                break;
            case 34:
                $this->setFambait($value);
                break;
            case 35:
                $this->setSpecbait($value);
                break;
            case 36:
                $this->setFamornament($value);
                break;
            case 37:
                $this->setSpecornament($value);
                break;
            case 38:
                $this->setFamsport($value);
                break;
            case 39:
                $this->setSpecsport($value);
                break;
            case 40:
                $this->setFamhuman($value);
                break;
            case 41:
                $this->setSpechuman($value);
                break;
            case 42:
                $this->setFamthreat($value);
                break;
            case 43:
                $this->setSpecthreat($value);
                break;
            case 44:
                $this->setFamintro($value);
                break;
            case 45:
                $this->setSpecintro($value);
                break;
            case 46:
                $this->setFamdanger($value);
                break;
            case 47:
                $this->setSpecdanger($value);
                break;
            case 48:
                $this->setComplete($value);
                break;
            case 49:
                $this->setCompleteref($value);
                break;
            case 50:
                $this->setContinentgrp($value);
                break;
            case 51:
                $this->setModified($value);
                break;
            case 52:
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
        $keys = FaoarrefPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAreacode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFao($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setNote($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCoastline($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setShelf($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEezarea($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLatdeg($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLatmin($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setNS($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLongdeg($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setLongmin($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setEW($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNeighborn($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setNeighbors($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setNeighborw($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setNeighbore($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setNorthernlatitude($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setNorthernlatitudens($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setSouthernlatitude($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setSouthernlatitudens($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setWesternlongitude($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setWesternlongitudeew($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setEasternlongitude($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setEasternlongitudeew($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setFamiliescount($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setFamiliesno($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setFamiliesref($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setSpeciescount($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setSpeciesno($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setSpeciesref($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setFamfisheries($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setSpecfisheries($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setFamaqua($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setSpecaqua($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setFambait($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setSpecbait($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setFamornament($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setSpecornament($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setFamsport($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setSpecsport($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setFamhuman($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setSpechuman($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setFamthreat($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setSpecthreat($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setFamintro($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setSpecintro($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setFamdanger($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setSpecdanger($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setComplete($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setCompleteref($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setContinentgrp($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setModified($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setTs($arr[$keys[52]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FaoarrefPeer::DATABASE_NAME);

        if ($this->isColumnModified(FaoarrefPeer::AREACODE)) $criteria->add(FaoarrefPeer::AREACODE, $this->areacode);
        if ($this->isColumnModified(FaoarrefPeer::FAO)) $criteria->add(FaoarrefPeer::FAO, $this->fao);
        if ($this->isColumnModified(FaoarrefPeer::NOTE)) $criteria->add(FaoarrefPeer::NOTE, $this->note);
        if ($this->isColumnModified(FaoarrefPeer::COASTLINE)) $criteria->add(FaoarrefPeer::COASTLINE, $this->coastline);
        if ($this->isColumnModified(FaoarrefPeer::SHELF)) $criteria->add(FaoarrefPeer::SHELF, $this->shelf);
        if ($this->isColumnModified(FaoarrefPeer::EEZAREA)) $criteria->add(FaoarrefPeer::EEZAREA, $this->eezarea);
        if ($this->isColumnModified(FaoarrefPeer::LATDEG)) $criteria->add(FaoarrefPeer::LATDEG, $this->latdeg);
        if ($this->isColumnModified(FaoarrefPeer::LATMIN)) $criteria->add(FaoarrefPeer::LATMIN, $this->latmin);
        if ($this->isColumnModified(FaoarrefPeer::N_S)) $criteria->add(FaoarrefPeer::N_S, $this->n_s);
        if ($this->isColumnModified(FaoarrefPeer::LONGDEG)) $criteria->add(FaoarrefPeer::LONGDEG, $this->longdeg);
        if ($this->isColumnModified(FaoarrefPeer::LONGMIN)) $criteria->add(FaoarrefPeer::LONGMIN, $this->longmin);
        if ($this->isColumnModified(FaoarrefPeer::E_W)) $criteria->add(FaoarrefPeer::E_W, $this->e_w);
        if ($this->isColumnModified(FaoarrefPeer::NEIGHBORN)) $criteria->add(FaoarrefPeer::NEIGHBORN, $this->neighborn);
        if ($this->isColumnModified(FaoarrefPeer::NEIGHBORS)) $criteria->add(FaoarrefPeer::NEIGHBORS, $this->neighbors);
        if ($this->isColumnModified(FaoarrefPeer::NEIGHBORW)) $criteria->add(FaoarrefPeer::NEIGHBORW, $this->neighborw);
        if ($this->isColumnModified(FaoarrefPeer::NEIGHBORE)) $criteria->add(FaoarrefPeer::NEIGHBORE, $this->neighbore);
        if ($this->isColumnModified(FaoarrefPeer::NORTHERNLATITUDE)) $criteria->add(FaoarrefPeer::NORTHERNLATITUDE, $this->northernlatitude);
        if ($this->isColumnModified(FaoarrefPeer::NORTHERNLATITUDENS)) $criteria->add(FaoarrefPeer::NORTHERNLATITUDENS, $this->northernlatitudens);
        if ($this->isColumnModified(FaoarrefPeer::SOUTHERNLATITUDE)) $criteria->add(FaoarrefPeer::SOUTHERNLATITUDE, $this->southernlatitude);
        if ($this->isColumnModified(FaoarrefPeer::SOUTHERNLATITUDENS)) $criteria->add(FaoarrefPeer::SOUTHERNLATITUDENS, $this->southernlatitudens);
        if ($this->isColumnModified(FaoarrefPeer::WESTERNLONGITUDE)) $criteria->add(FaoarrefPeer::WESTERNLONGITUDE, $this->westernlongitude);
        if ($this->isColumnModified(FaoarrefPeer::WESTERNLONGITUDEEW)) $criteria->add(FaoarrefPeer::WESTERNLONGITUDEEW, $this->westernlongitudeew);
        if ($this->isColumnModified(FaoarrefPeer::EASTERNLONGITUDE)) $criteria->add(FaoarrefPeer::EASTERNLONGITUDE, $this->easternlongitude);
        if ($this->isColumnModified(FaoarrefPeer::EASTERNLONGITUDEEW)) $criteria->add(FaoarrefPeer::EASTERNLONGITUDEEW, $this->easternlongitudeew);
        if ($this->isColumnModified(FaoarrefPeer::FAMILIESCOUNT)) $criteria->add(FaoarrefPeer::FAMILIESCOUNT, $this->familiescount);
        if ($this->isColumnModified(FaoarrefPeer::FAMILIESNO)) $criteria->add(FaoarrefPeer::FAMILIESNO, $this->familiesno);
        if ($this->isColumnModified(FaoarrefPeer::FAMILIESREF)) $criteria->add(FaoarrefPeer::FAMILIESREF, $this->familiesref);
        if ($this->isColumnModified(FaoarrefPeer::SPECIESCOUNT)) $criteria->add(FaoarrefPeer::SPECIESCOUNT, $this->speciescount);
        if ($this->isColumnModified(FaoarrefPeer::SPECIESNO)) $criteria->add(FaoarrefPeer::SPECIESNO, $this->speciesno);
        if ($this->isColumnModified(FaoarrefPeer::SPECIESREF)) $criteria->add(FaoarrefPeer::SPECIESREF, $this->speciesref);
        if ($this->isColumnModified(FaoarrefPeer::FAMFISHERIES)) $criteria->add(FaoarrefPeer::FAMFISHERIES, $this->famfisheries);
        if ($this->isColumnModified(FaoarrefPeer::SPECFISHERIES)) $criteria->add(FaoarrefPeer::SPECFISHERIES, $this->specfisheries);
        if ($this->isColumnModified(FaoarrefPeer::FAMAQUA)) $criteria->add(FaoarrefPeer::FAMAQUA, $this->famaqua);
        if ($this->isColumnModified(FaoarrefPeer::SPECAQUA)) $criteria->add(FaoarrefPeer::SPECAQUA, $this->specaqua);
        if ($this->isColumnModified(FaoarrefPeer::FAMBAIT)) $criteria->add(FaoarrefPeer::FAMBAIT, $this->fambait);
        if ($this->isColumnModified(FaoarrefPeer::SPECBAIT)) $criteria->add(FaoarrefPeer::SPECBAIT, $this->specbait);
        if ($this->isColumnModified(FaoarrefPeer::FAMORNAMENT)) $criteria->add(FaoarrefPeer::FAMORNAMENT, $this->famornament);
        if ($this->isColumnModified(FaoarrefPeer::SPECORNAMENT)) $criteria->add(FaoarrefPeer::SPECORNAMENT, $this->specornament);
        if ($this->isColumnModified(FaoarrefPeer::FAMSPORT)) $criteria->add(FaoarrefPeer::FAMSPORT, $this->famsport);
        if ($this->isColumnModified(FaoarrefPeer::SPECSPORT)) $criteria->add(FaoarrefPeer::SPECSPORT, $this->specsport);
        if ($this->isColumnModified(FaoarrefPeer::FAMHUMAN)) $criteria->add(FaoarrefPeer::FAMHUMAN, $this->famhuman);
        if ($this->isColumnModified(FaoarrefPeer::SPECHUMAN)) $criteria->add(FaoarrefPeer::SPECHUMAN, $this->spechuman);
        if ($this->isColumnModified(FaoarrefPeer::FAMTHREAT)) $criteria->add(FaoarrefPeer::FAMTHREAT, $this->famthreat);
        if ($this->isColumnModified(FaoarrefPeer::SPECTHREAT)) $criteria->add(FaoarrefPeer::SPECTHREAT, $this->specthreat);
        if ($this->isColumnModified(FaoarrefPeer::FAMINTRO)) $criteria->add(FaoarrefPeer::FAMINTRO, $this->famintro);
        if ($this->isColumnModified(FaoarrefPeer::SPECINTRO)) $criteria->add(FaoarrefPeer::SPECINTRO, $this->specintro);
        if ($this->isColumnModified(FaoarrefPeer::FAMDANGER)) $criteria->add(FaoarrefPeer::FAMDANGER, $this->famdanger);
        if ($this->isColumnModified(FaoarrefPeer::SPECDANGER)) $criteria->add(FaoarrefPeer::SPECDANGER, $this->specdanger);
        if ($this->isColumnModified(FaoarrefPeer::COMPLETE)) $criteria->add(FaoarrefPeer::COMPLETE, $this->complete);
        if ($this->isColumnModified(FaoarrefPeer::COMPLETEREF)) $criteria->add(FaoarrefPeer::COMPLETEREF, $this->completeref);
        if ($this->isColumnModified(FaoarrefPeer::CONTINENTGRP)) $criteria->add(FaoarrefPeer::CONTINENTGRP, $this->continentgrp);
        if ($this->isColumnModified(FaoarrefPeer::MODIFIED)) $criteria->add(FaoarrefPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(FaoarrefPeer::TS)) $criteria->add(FaoarrefPeer::TS, $this->ts);

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
        $criteria = new Criteria(FaoarrefPeer::DATABASE_NAME);
        $criteria->add(FaoarrefPeer::AREACODE, $this->areacode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getAreacode();
    }

    /**
     * Generic method to set the primary key (areacode column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setAreacode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getAreacode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Faoarref (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFao($this->getFao());
        $copyObj->setNote($this->getNote());
        $copyObj->setCoastline($this->getCoastline());
        $copyObj->setShelf($this->getShelf());
        $copyObj->setEezarea($this->getEezarea());
        $copyObj->setLatdeg($this->getLatdeg());
        $copyObj->setLatmin($this->getLatmin());
        $copyObj->setNS($this->getNS());
        $copyObj->setLongdeg($this->getLongdeg());
        $copyObj->setLongmin($this->getLongmin());
        $copyObj->setEW($this->getEW());
        $copyObj->setNeighborn($this->getNeighborn());
        $copyObj->setNeighbors($this->getNeighbors());
        $copyObj->setNeighborw($this->getNeighborw());
        $copyObj->setNeighbore($this->getNeighbore());
        $copyObj->setNorthernlatitude($this->getNorthernlatitude());
        $copyObj->setNorthernlatitudens($this->getNorthernlatitudens());
        $copyObj->setSouthernlatitude($this->getSouthernlatitude());
        $copyObj->setSouthernlatitudens($this->getSouthernlatitudens());
        $copyObj->setWesternlongitude($this->getWesternlongitude());
        $copyObj->setWesternlongitudeew($this->getWesternlongitudeew());
        $copyObj->setEasternlongitude($this->getEasternlongitude());
        $copyObj->setEasternlongitudeew($this->getEasternlongitudeew());
        $copyObj->setFamiliescount($this->getFamiliescount());
        $copyObj->setFamiliesno($this->getFamiliesno());
        $copyObj->setFamiliesref($this->getFamiliesref());
        $copyObj->setSpeciescount($this->getSpeciescount());
        $copyObj->setSpeciesno($this->getSpeciesno());
        $copyObj->setSpeciesref($this->getSpeciesref());
        $copyObj->setFamfisheries($this->getFamfisheries());
        $copyObj->setSpecfisheries($this->getSpecfisheries());
        $copyObj->setFamaqua($this->getFamaqua());
        $copyObj->setSpecaqua($this->getSpecaqua());
        $copyObj->setFambait($this->getFambait());
        $copyObj->setSpecbait($this->getSpecbait());
        $copyObj->setFamornament($this->getFamornament());
        $copyObj->setSpecornament($this->getSpecornament());
        $copyObj->setFamsport($this->getFamsport());
        $copyObj->setSpecsport($this->getSpecsport());
        $copyObj->setFamhuman($this->getFamhuman());
        $copyObj->setSpechuman($this->getSpechuman());
        $copyObj->setFamthreat($this->getFamthreat());
        $copyObj->setSpecthreat($this->getSpecthreat());
        $copyObj->setFamintro($this->getFamintro());
        $copyObj->setSpecintro($this->getSpecintro());
        $copyObj->setFamdanger($this->getFamdanger());
        $copyObj->setSpecdanger($this->getSpecdanger());
        $copyObj->setComplete($this->getComplete());
        $copyObj->setCompleteref($this->getCompleteref());
        $copyObj->setContinentgrp($this->getContinentgrp());
        $copyObj->setModified($this->getModified());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setAreacode(NULL); // this is a auto-increment column, so set to default value
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
     * @return Faoarref Clone of current object.
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
     * @return FaoarrefPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FaoarrefPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->areacode = null;
        $this->fao = null;
        $this->note = null;
        $this->coastline = null;
        $this->shelf = null;
        $this->eezarea = null;
        $this->latdeg = null;
        $this->latmin = null;
        $this->n_s = null;
        $this->longdeg = null;
        $this->longmin = null;
        $this->e_w = null;
        $this->neighborn = null;
        $this->neighbors = null;
        $this->neighborw = null;
        $this->neighbore = null;
        $this->northernlatitude = null;
        $this->northernlatitudens = null;
        $this->southernlatitude = null;
        $this->southernlatitudens = null;
        $this->westernlongitude = null;
        $this->westernlongitudeew = null;
        $this->easternlongitude = null;
        $this->easternlongitudeew = null;
        $this->familiescount = null;
        $this->familiesno = null;
        $this->familiesref = null;
        $this->speciescount = null;
        $this->speciesno = null;
        $this->speciesref = null;
        $this->famfisheries = null;
        $this->specfisheries = null;
        $this->famaqua = null;
        $this->specaqua = null;
        $this->fambait = null;
        $this->specbait = null;
        $this->famornament = null;
        $this->specornament = null;
        $this->famsport = null;
        $this->specsport = null;
        $this->famhuman = null;
        $this->spechuman = null;
        $this->famthreat = null;
        $this->specthreat = null;
        $this->famintro = null;
        $this->specintro = null;
        $this->famdanger = null;
        $this->specdanger = null;
        $this->complete = null;
        $this->completeref = null;
        $this->continentgrp = null;
        $this->modified = null;
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
        return (string) $this->exportTo(FaoarrefPeer::DEFAULT_STRING_FORMAT);
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
