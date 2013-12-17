<?php


/**
 * Base class that represents a row from the 'massconversion' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMassconversion extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'MassconversionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        MassconversionPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the recordno field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $recordno;

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
     * The value for the nameused field.
     * @var        string
     */
    protected $nameused;

    /**
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the stockcode field.
     * @var        int
     */
    protected $stockcode;

    /**
     * The value for the massconvmainref field.
     * @var        int
     */
    protected $massconvmainref;

    /**
     * The value for the massconvrefno field.
     * @var        int
     */
    protected $massconvrefno;

    /**
     * The value for the locality field.
     * @var        string
     */
    protected $locality;

    /**
     * The value for the country field.
     * @var        string
     */
    protected $country;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the sex field.
     * @var        string
     */
    protected $sex;

    /**
     * The value for the lifestage field.
     * @var        string
     */
    protected $lifestage;

    /**
     * The value for the dm_wm field.
     * @var        double
     */
    protected $dm_wm;

    /**
     * The value for the dm_wmcalc field.
     * @var        string
     */
    protected $dm_wmcalc;

    /**
     * The value for the afdm_dm field.
     * @var        double
     */
    protected $afdm_dm;

    /**
     * The value for the afdm_dmcalc field.
     * @var        string
     */
    protected $afdm_dmcalc;

    /**
     * The value for the afdm_wm field.
     * @var        double
     */
    protected $afdm_wm;

    /**
     * The value for the afdm_wmcalc field.
     * @var        string
     */
    protected $afdm_wmcalc;

    /**
     * The value for the protein_dm field.
     * @var        double
     */
    protected $protein_dm;

    /**
     * The value for the protein_dmcalc field.
     * @var        string
     */
    protected $protein_dmcalc;

    /**
     * The value for the carbhydr_dm field.
     * @var        double
     */
    protected $carbhydr_dm;

    /**
     * The value for the carbhydr_dmcalc field.
     * @var        string
     */
    protected $carbhydr_dmcalc;

    /**
     * The value for the lipid_dm field.
     * @var        double
     */
    protected $lipid_dm;

    /**
     * The value for the lipid_dmcalc field.
     * @var        string
     */
    protected $lipid_dmcalc;

    /**
     * The value for the c_dm field.
     * @var        double
     */
    protected $c_dm;

    /**
     * The value for the c_dmcalc field.
     * @var        string
     */
    protected $c_dmcalc;

    /**
     * The value for the n_dm field.
     * @var        double
     */
    protected $n_dm;

    /**
     * The value for the n_dmcalc field.
     * @var        string
     */
    protected $n_dmcalc;

    /**
     * The value for the p_dm field.
     * @var        double
     */
    protected $p_dm;

    /**
     * The value for the p_dmcalc field.
     * @var        string
     */
    protected $p_dmcalc;

    /**
     * The value for the c_afdm field.
     * @var        double
     */
    protected $c_afdm;

    /**
     * The value for the c_afdmcalc field.
     * @var        string
     */
    protected $c_afdmcalc;

    /**
     * The value for the n_afdm field.
     * @var        double
     */
    protected $n_afdm;

    /**
     * The value for the n_afdmcalc field.
     * @var        string
     */
    protected $n_afdmcalc;

    /**
     * The value for the p_afdm field.
     * @var        double
     */
    protected $p_afdm;

    /**
     * The value for the p_afdmcalc field.
     * @var        string
     */
    protected $p_afdmcalc;

    /**
     * The value for the j_mgwm field.
     * @var        double
     */
    protected $j_mgwm;

    /**
     * The value for the j_mgwmcalc field.
     * @var        string
     */
    protected $j_mgwmcalc;

    /**
     * The value for the j_mgdm field.
     * @var        double
     */
    protected $j_mgdm;

    /**
     * The value for the j_mgdmcalc field.
     * @var        string
     */
    protected $j_mgdmcalc;

    /**
     * The value for the j_mgafdm field.
     * @var        double
     */
    protected $j_mgafdm;

    /**
     * The value for the j_mgafdmcalc field.
     * @var        string
     */
    protected $j_mgafdmcalc;

    /**
     * The value for the j_mgc field.
     * @var        double
     */
    protected $j_mgc;

    /**
     * The value for the j_mgccalc field.
     * @var        string
     */
    protected $j_mgccalc;

    /**
     * The value for the c_nmass field.
     * @var        double
     */
    protected $c_nmass;

    /**
     * The value for the c_pmass field.
     * @var        double
     */
    protected $c_pmass;

    /**
     * The value for the n_pmass field.
     * @var        double
     */
    protected $n_pmass;

    /**
     * The value for the comments field.
     * @var        string
     */
    protected $comments;

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
        $this->recordno = 0;
    }

    /**
     * Initializes internal state of BaseMassconversion object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [recordno] column value.
     *
     * @return int
     */
    public function getRecordno()
    {

        return $this->recordno;
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
     * Get the [nameused] column value.
     *
     * @return string
     */
    public function getNameused()
    {

        return $this->nameused;
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
     * Get the [stockcode] column value.
     *
     * @return int
     */
    public function getStockcode()
    {

        return $this->stockcode;
    }

    /**
     * Get the [massconvmainref] column value.
     *
     * @return int
     */
    public function getMassconvmainref()
    {

        return $this->massconvmainref;
    }

    /**
     * Get the [massconvrefno] column value.
     *
     * @return int
     */
    public function getMassconvrefno()
    {

        return $this->massconvrefno;
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
     * Get the [country] column value.
     *
     * @return string
     */
    public function getCountry()
    {

        return $this->country;
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
     * Get the [sex] column value.
     *
     * @return string
     */
    public function getSex()
    {

        return $this->sex;
    }

    /**
     * Get the [lifestage] column value.
     *
     * @return string
     */
    public function getLifestage()
    {

        return $this->lifestage;
    }

    /**
     * Get the [dm_wm] column value.
     *
     * @return double
     */
    public function getDmWm()
    {

        return $this->dm_wm;
    }

    /**
     * Get the [dm_wmcalc] column value.
     *
     * @return string
     */
    public function getDmWmcalc()
    {

        return $this->dm_wmcalc;
    }

    /**
     * Get the [afdm_dm] column value.
     *
     * @return double
     */
    public function getAfdmDm()
    {

        return $this->afdm_dm;
    }

    /**
     * Get the [afdm_dmcalc] column value.
     *
     * @return string
     */
    public function getAfdmDmcalc()
    {

        return $this->afdm_dmcalc;
    }

    /**
     * Get the [afdm_wm] column value.
     *
     * @return double
     */
    public function getAfdmWm()
    {

        return $this->afdm_wm;
    }

    /**
     * Get the [afdm_wmcalc] column value.
     *
     * @return string
     */
    public function getAfdmWmcalc()
    {

        return $this->afdm_wmcalc;
    }

    /**
     * Get the [protein_dm] column value.
     *
     * @return double
     */
    public function getProteinDm()
    {

        return $this->protein_dm;
    }

    /**
     * Get the [protein_dmcalc] column value.
     *
     * @return string
     */
    public function getProteinDmcalc()
    {

        return $this->protein_dmcalc;
    }

    /**
     * Get the [carbhydr_dm] column value.
     *
     * @return double
     */
    public function getCarbhydrDm()
    {

        return $this->carbhydr_dm;
    }

    /**
     * Get the [carbhydr_dmcalc] column value.
     *
     * @return string
     */
    public function getCarbhydrDmcalc()
    {

        return $this->carbhydr_dmcalc;
    }

    /**
     * Get the [lipid_dm] column value.
     *
     * @return double
     */
    public function getLipidDm()
    {

        return $this->lipid_dm;
    }

    /**
     * Get the [lipid_dmcalc] column value.
     *
     * @return string
     */
    public function getLipidDmcalc()
    {

        return $this->lipid_dmcalc;
    }

    /**
     * Get the [c_dm] column value.
     *
     * @return double
     */
    public function getCDm()
    {

        return $this->c_dm;
    }

    /**
     * Get the [c_dmcalc] column value.
     *
     * @return string
     */
    public function getCDmcalc()
    {

        return $this->c_dmcalc;
    }

    /**
     * Get the [n_dm] column value.
     *
     * @return double
     */
    public function getNDm()
    {

        return $this->n_dm;
    }

    /**
     * Get the [n_dmcalc] column value.
     *
     * @return string
     */
    public function getNDmcalc()
    {

        return $this->n_dmcalc;
    }

    /**
     * Get the [p_dm] column value.
     *
     * @return double
     */
    public function getPDm()
    {

        return $this->p_dm;
    }

    /**
     * Get the [p_dmcalc] column value.
     *
     * @return string
     */
    public function getPDmcalc()
    {

        return $this->p_dmcalc;
    }

    /**
     * Get the [c_afdm] column value.
     *
     * @return double
     */
    public function getCAfdm()
    {

        return $this->c_afdm;
    }

    /**
     * Get the [c_afdmcalc] column value.
     *
     * @return string
     */
    public function getCAfdmcalc()
    {

        return $this->c_afdmcalc;
    }

    /**
     * Get the [n_afdm] column value.
     *
     * @return double
     */
    public function getNAfdm()
    {

        return $this->n_afdm;
    }

    /**
     * Get the [n_afdmcalc] column value.
     *
     * @return string
     */
    public function getNAfdmcalc()
    {

        return $this->n_afdmcalc;
    }

    /**
     * Get the [p_afdm] column value.
     *
     * @return double
     */
    public function getPAfdm()
    {

        return $this->p_afdm;
    }

    /**
     * Get the [p_afdmcalc] column value.
     *
     * @return string
     */
    public function getPAfdmcalc()
    {

        return $this->p_afdmcalc;
    }

    /**
     * Get the [j_mgwm] column value.
     *
     * @return double
     */
    public function getJMgwm()
    {

        return $this->j_mgwm;
    }

    /**
     * Get the [j_mgwmcalc] column value.
     *
     * @return string
     */
    public function getJMgwmcalc()
    {

        return $this->j_mgwmcalc;
    }

    /**
     * Get the [j_mgdm] column value.
     *
     * @return double
     */
    public function getJMgdm()
    {

        return $this->j_mgdm;
    }

    /**
     * Get the [j_mgdmcalc] column value.
     *
     * @return string
     */
    public function getJMgdmcalc()
    {

        return $this->j_mgdmcalc;
    }

    /**
     * Get the [j_mgafdm] column value.
     *
     * @return double
     */
    public function getJMgafdm()
    {

        return $this->j_mgafdm;
    }

    /**
     * Get the [j_mgafdmcalc] column value.
     *
     * @return string
     */
    public function getJMgafdmcalc()
    {

        return $this->j_mgafdmcalc;
    }

    /**
     * Get the [j_mgc] column value.
     *
     * @return double
     */
    public function getJMgc()
    {

        return $this->j_mgc;
    }

    /**
     * Get the [j_mgccalc] column value.
     *
     * @return string
     */
    public function getJMgccalc()
    {

        return $this->j_mgccalc;
    }

    /**
     * Get the [c_nmass] column value.
     *
     * @return double
     */
    public function getCNmass()
    {

        return $this->c_nmass;
    }

    /**
     * Get the [c_pmass] column value.
     *
     * @return double
     */
    public function getCPmass()
    {

        return $this->c_pmass;
    }

    /**
     * Get the [n_pmass] column value.
     *
     * @return double
     */
    public function getNPmass()
    {

        return $this->n_pmass;
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
     * Set the value of [recordno] column.
     *
     * @param  int $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setRecordno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->recordno !== $v) {
            $this->recordno = $v;
            $this->modifiedColumns[] = MassconversionPeer::RECORDNO;
        }


        return $this;
    } // setRecordno()

    /**
     * Set the value of [genus] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setGenus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genus !== $v) {
            $this->genus = $v;
            $this->modifiedColumns[] = MassconversionPeer::GENUS;
        }


        return $this;
    } // setGenus()

    /**
     * Set the value of [species] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setSpecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->species !== $v) {
            $this->species = $v;
            $this->modifiedColumns[] = MassconversionPeer::SPECIES;
        }


        return $this;
    } // setSpecies()

    /**
     * Set the value of [nameused] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setNameused($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nameused !== $v) {
            $this->nameused = $v;
            $this->modifiedColumns[] = MassconversionPeer::NAMEUSED;
        }


        return $this;
    } // setNameused()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = MassconversionPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = MassconversionPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [massconvmainref] column.
     *
     * @param  int $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setMassconvmainref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->massconvmainref !== $v) {
            $this->massconvmainref = $v;
            $this->modifiedColumns[] = MassconversionPeer::MASSCONVMAINREF;
        }


        return $this;
    } // setMassconvmainref()

    /**
     * Set the value of [massconvrefno] column.
     *
     * @param  int $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setMassconvrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->massconvrefno !== $v) {
            $this->massconvrefno = $v;
            $this->modifiedColumns[] = MassconversionPeer::MASSCONVREFNO;
        }


        return $this;
    } // setMassconvrefno()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = MassconversionPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [country] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setCountry($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->country !== $v) {
            $this->country = $v;
            $this->modifiedColumns[] = MassconversionPeer::COUNTRY;
        }


        return $this;
    } // setCountry()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = MassconversionPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [sex] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setSex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sex !== $v) {
            $this->sex = $v;
            $this->modifiedColumns[] = MassconversionPeer::SEX;
        }


        return $this;
    } // setSex()

    /**
     * Set the value of [lifestage] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setLifestage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lifestage !== $v) {
            $this->lifestage = $v;
            $this->modifiedColumns[] = MassconversionPeer::LIFESTAGE;
        }


        return $this;
    } // setLifestage()

    /**
     * Set the value of [dm_wm] column.
     *
     * @param  double $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setDmWm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->dm_wm !== $v) {
            $this->dm_wm = $v;
            $this->modifiedColumns[] = MassconversionPeer::DM_WM;
        }


        return $this;
    } // setDmWm()

    /**
     * Set the value of [dm_wmcalc] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setDmWmcalc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dm_wmcalc !== $v) {
            $this->dm_wmcalc = $v;
            $this->modifiedColumns[] = MassconversionPeer::DM_WMCALC;
        }


        return $this;
    } // setDmWmcalc()

    /**
     * Set the value of [afdm_dm] column.
     *
     * @param  double $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setAfdmDm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->afdm_dm !== $v) {
            $this->afdm_dm = $v;
            $this->modifiedColumns[] = MassconversionPeer::AFDM_DM;
        }


        return $this;
    } // setAfdmDm()

    /**
     * Set the value of [afdm_dmcalc] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setAfdmDmcalc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->afdm_dmcalc !== $v) {
            $this->afdm_dmcalc = $v;
            $this->modifiedColumns[] = MassconversionPeer::AFDM_DMCALC;
        }


        return $this;
    } // setAfdmDmcalc()

    /**
     * Set the value of [afdm_wm] column.
     *
     * @param  double $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setAfdmWm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->afdm_wm !== $v) {
            $this->afdm_wm = $v;
            $this->modifiedColumns[] = MassconversionPeer::AFDM_WM;
        }


        return $this;
    } // setAfdmWm()

    /**
     * Set the value of [afdm_wmcalc] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setAfdmWmcalc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->afdm_wmcalc !== $v) {
            $this->afdm_wmcalc = $v;
            $this->modifiedColumns[] = MassconversionPeer::AFDM_WMCALC;
        }


        return $this;
    } // setAfdmWmcalc()

    /**
     * Set the value of [protein_dm] column.
     *
     * @param  double $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setProteinDm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->protein_dm !== $v) {
            $this->protein_dm = $v;
            $this->modifiedColumns[] = MassconversionPeer::PROTEIN_DM;
        }


        return $this;
    } // setProteinDm()

    /**
     * Set the value of [protein_dmcalc] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setProteinDmcalc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->protein_dmcalc !== $v) {
            $this->protein_dmcalc = $v;
            $this->modifiedColumns[] = MassconversionPeer::PROTEIN_DMCALC;
        }


        return $this;
    } // setProteinDmcalc()

    /**
     * Set the value of [carbhydr_dm] column.
     *
     * @param  double $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setCarbhydrDm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->carbhydr_dm !== $v) {
            $this->carbhydr_dm = $v;
            $this->modifiedColumns[] = MassconversionPeer::CARBHYDR_DM;
        }


        return $this;
    } // setCarbhydrDm()

    /**
     * Set the value of [carbhydr_dmcalc] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setCarbhydrDmcalc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->carbhydr_dmcalc !== $v) {
            $this->carbhydr_dmcalc = $v;
            $this->modifiedColumns[] = MassconversionPeer::CARBHYDR_DMCALC;
        }


        return $this;
    } // setCarbhydrDmcalc()

    /**
     * Set the value of [lipid_dm] column.
     *
     * @param  double $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setLipidDm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lipid_dm !== $v) {
            $this->lipid_dm = $v;
            $this->modifiedColumns[] = MassconversionPeer::LIPID_DM;
        }


        return $this;
    } // setLipidDm()

    /**
     * Set the value of [lipid_dmcalc] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setLipidDmcalc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lipid_dmcalc !== $v) {
            $this->lipid_dmcalc = $v;
            $this->modifiedColumns[] = MassconversionPeer::LIPID_DMCALC;
        }


        return $this;
    } // setLipidDmcalc()

    /**
     * Set the value of [c_dm] column.
     *
     * @param  double $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setCDm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->c_dm !== $v) {
            $this->c_dm = $v;
            $this->modifiedColumns[] = MassconversionPeer::C_DM;
        }


        return $this;
    } // setCDm()

    /**
     * Set the value of [c_dmcalc] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setCDmcalc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_dmcalc !== $v) {
            $this->c_dmcalc = $v;
            $this->modifiedColumns[] = MassconversionPeer::C_DMCALC;
        }


        return $this;
    } // setCDmcalc()

    /**
     * Set the value of [n_dm] column.
     *
     * @param  double $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setNDm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->n_dm !== $v) {
            $this->n_dm = $v;
            $this->modifiedColumns[] = MassconversionPeer::N_DM;
        }


        return $this;
    } // setNDm()

    /**
     * Set the value of [n_dmcalc] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setNDmcalc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->n_dmcalc !== $v) {
            $this->n_dmcalc = $v;
            $this->modifiedColumns[] = MassconversionPeer::N_DMCALC;
        }


        return $this;
    } // setNDmcalc()

    /**
     * Set the value of [p_dm] column.
     *
     * @param  double $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setPDm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->p_dm !== $v) {
            $this->p_dm = $v;
            $this->modifiedColumns[] = MassconversionPeer::P_DM;
        }


        return $this;
    } // setPDm()

    /**
     * Set the value of [p_dmcalc] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setPDmcalc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->p_dmcalc !== $v) {
            $this->p_dmcalc = $v;
            $this->modifiedColumns[] = MassconversionPeer::P_DMCALC;
        }


        return $this;
    } // setPDmcalc()

    /**
     * Set the value of [c_afdm] column.
     *
     * @param  double $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setCAfdm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->c_afdm !== $v) {
            $this->c_afdm = $v;
            $this->modifiedColumns[] = MassconversionPeer::C_AFDM;
        }


        return $this;
    } // setCAfdm()

    /**
     * Set the value of [c_afdmcalc] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setCAfdmcalc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_afdmcalc !== $v) {
            $this->c_afdmcalc = $v;
            $this->modifiedColumns[] = MassconversionPeer::C_AFDMCALC;
        }


        return $this;
    } // setCAfdmcalc()

    /**
     * Set the value of [n_afdm] column.
     *
     * @param  double $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setNAfdm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->n_afdm !== $v) {
            $this->n_afdm = $v;
            $this->modifiedColumns[] = MassconversionPeer::N_AFDM;
        }


        return $this;
    } // setNAfdm()

    /**
     * Set the value of [n_afdmcalc] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setNAfdmcalc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->n_afdmcalc !== $v) {
            $this->n_afdmcalc = $v;
            $this->modifiedColumns[] = MassconversionPeer::N_AFDMCALC;
        }


        return $this;
    } // setNAfdmcalc()

    /**
     * Set the value of [p_afdm] column.
     *
     * @param  double $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setPAfdm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->p_afdm !== $v) {
            $this->p_afdm = $v;
            $this->modifiedColumns[] = MassconversionPeer::P_AFDM;
        }


        return $this;
    } // setPAfdm()

    /**
     * Set the value of [p_afdmcalc] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setPAfdmcalc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->p_afdmcalc !== $v) {
            $this->p_afdmcalc = $v;
            $this->modifiedColumns[] = MassconversionPeer::P_AFDMCALC;
        }


        return $this;
    } // setPAfdmcalc()

    /**
     * Set the value of [j_mgwm] column.
     *
     * @param  double $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setJMgwm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->j_mgwm !== $v) {
            $this->j_mgwm = $v;
            $this->modifiedColumns[] = MassconversionPeer::J_MGWM;
        }


        return $this;
    } // setJMgwm()

    /**
     * Set the value of [j_mgwmcalc] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setJMgwmcalc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->j_mgwmcalc !== $v) {
            $this->j_mgwmcalc = $v;
            $this->modifiedColumns[] = MassconversionPeer::J_MGWMCALC;
        }


        return $this;
    } // setJMgwmcalc()

    /**
     * Set the value of [j_mgdm] column.
     *
     * @param  double $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setJMgdm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->j_mgdm !== $v) {
            $this->j_mgdm = $v;
            $this->modifiedColumns[] = MassconversionPeer::J_MGDM;
        }


        return $this;
    } // setJMgdm()

    /**
     * Set the value of [j_mgdmcalc] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setJMgdmcalc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->j_mgdmcalc !== $v) {
            $this->j_mgdmcalc = $v;
            $this->modifiedColumns[] = MassconversionPeer::J_MGDMCALC;
        }


        return $this;
    } // setJMgdmcalc()

    /**
     * Set the value of [j_mgafdm] column.
     *
     * @param  double $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setJMgafdm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->j_mgafdm !== $v) {
            $this->j_mgafdm = $v;
            $this->modifiedColumns[] = MassconversionPeer::J_MGAFDM;
        }


        return $this;
    } // setJMgafdm()

    /**
     * Set the value of [j_mgafdmcalc] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setJMgafdmcalc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->j_mgafdmcalc !== $v) {
            $this->j_mgafdmcalc = $v;
            $this->modifiedColumns[] = MassconversionPeer::J_MGAFDMCALC;
        }


        return $this;
    } // setJMgafdmcalc()

    /**
     * Set the value of [j_mgc] column.
     *
     * @param  double $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setJMgc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->j_mgc !== $v) {
            $this->j_mgc = $v;
            $this->modifiedColumns[] = MassconversionPeer::J_MGC;
        }


        return $this;
    } // setJMgc()

    /**
     * Set the value of [j_mgccalc] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setJMgccalc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->j_mgccalc !== $v) {
            $this->j_mgccalc = $v;
            $this->modifiedColumns[] = MassconversionPeer::J_MGCCALC;
        }


        return $this;
    } // setJMgccalc()

    /**
     * Set the value of [c_nmass] column.
     *
     * @param  double $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setCNmass($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->c_nmass !== $v) {
            $this->c_nmass = $v;
            $this->modifiedColumns[] = MassconversionPeer::C_NMASS;
        }


        return $this;
    } // setCNmass()

    /**
     * Set the value of [c_pmass] column.
     *
     * @param  double $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setCPmass($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->c_pmass !== $v) {
            $this->c_pmass = $v;
            $this->modifiedColumns[] = MassconversionPeer::C_PMASS;
        }


        return $this;
    } // setCPmass()

    /**
     * Set the value of [n_pmass] column.
     *
     * @param  double $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setNPmass($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->n_pmass !== $v) {
            $this->n_pmass = $v;
            $this->modifiedColumns[] = MassconversionPeer::N_PMASS;
        }


        return $this;
    } // setNPmass()

    /**
     * Set the value of [comments] column.
     *
     * @param  string $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setComments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comments !== $v) {
            $this->comments = $v;
            $this->modifiedColumns[] = MassconversionPeer::COMMENTS;
        }


        return $this;
    } // setComments()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = MassconversionPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Massconversion The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = MassconversionPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = MassconversionPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Massconversion The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = MassconversionPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Massconversion The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = MassconversionPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Massconversion The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = MassconversionPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

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
            if ($this->recordno !== 0) {
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

            $this->recordno = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->genus = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->species = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->nameused = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->speccode = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->stockcode = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->massconvmainref = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->massconvrefno = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->locality = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->country = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->c_code = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->sex = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->lifestage = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->dm_wm = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->dm_wmcalc = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->afdm_dm = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
            $this->afdm_dmcalc = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->afdm_wm = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->afdm_wmcalc = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->protein_dm = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->protein_dmcalc = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->carbhydr_dm = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->carbhydr_dmcalc = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->lipid_dm = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
            $this->lipid_dmcalc = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->c_dm = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->c_dmcalc = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->n_dm = ($row[$startcol + 27] !== null) ? (double) $row[$startcol + 27] : null;
            $this->n_dmcalc = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->p_dm = ($row[$startcol + 29] !== null) ? (double) $row[$startcol + 29] : null;
            $this->p_dmcalc = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->c_afdm = ($row[$startcol + 31] !== null) ? (double) $row[$startcol + 31] : null;
            $this->c_afdmcalc = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->n_afdm = ($row[$startcol + 33] !== null) ? (double) $row[$startcol + 33] : null;
            $this->n_afdmcalc = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->p_afdm = ($row[$startcol + 35] !== null) ? (double) $row[$startcol + 35] : null;
            $this->p_afdmcalc = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->j_mgwm = ($row[$startcol + 37] !== null) ? (double) $row[$startcol + 37] : null;
            $this->j_mgwmcalc = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->j_mgdm = ($row[$startcol + 39] !== null) ? (double) $row[$startcol + 39] : null;
            $this->j_mgdmcalc = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->j_mgafdm = ($row[$startcol + 41] !== null) ? (double) $row[$startcol + 41] : null;
            $this->j_mgafdmcalc = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->j_mgc = ($row[$startcol + 43] !== null) ? (double) $row[$startcol + 43] : null;
            $this->j_mgccalc = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->c_nmass = ($row[$startcol + 45] !== null) ? (double) $row[$startcol + 45] : null;
            $this->c_pmass = ($row[$startcol + 46] !== null) ? (double) $row[$startcol + 46] : null;
            $this->n_pmass = ($row[$startcol + 47] !== null) ? (double) $row[$startcol + 47] : null;
            $this->comments = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->entered = ($row[$startcol + 49] !== null) ? (int) $row[$startcol + 49] : null;
            $this->dateentered = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->modified = ($row[$startcol + 51] !== null) ? (int) $row[$startcol + 51] : null;
            $this->datemodified = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->expert = ($row[$startcol + 53] !== null) ? (int) $row[$startcol + 53] : null;
            $this->datechecked = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 55; // 55 = MassconversionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Massconversion object", $e);
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
            $con = Propel::getConnection(MassconversionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = MassconversionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(MassconversionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = MassconversionQuery::create()
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
            $con = Propel::getConnection(MassconversionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                MassconversionPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(MassconversionPeer::RECORDNO)) {
            $modifiedColumns[':p' . $index++]  = '`RecordNo`';
        }
        if ($this->isColumnModified(MassconversionPeer::GENUS)) {
            $modifiedColumns[':p' . $index++]  = '`Genus`';
        }
        if ($this->isColumnModified(MassconversionPeer::SPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`Species`';
        }
        if ($this->isColumnModified(MassconversionPeer::NAMEUSED)) {
            $modifiedColumns[':p' . $index++]  = '`NameUsed`';
        }
        if ($this->isColumnModified(MassconversionPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Speccode`';
        }
        if ($this->isColumnModified(MassconversionPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(MassconversionPeer::MASSCONVMAINREF)) {
            $modifiedColumns[':p' . $index++]  = '`MassConvMainRef`';
        }
        if ($this->isColumnModified(MassconversionPeer::MASSCONVREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`MassConvRefNo`';
        }
        if ($this->isColumnModified(MassconversionPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(MassconversionPeer::COUNTRY)) {
            $modifiedColumns[':p' . $index++]  = '`Country`';
        }
        if ($this->isColumnModified(MassconversionPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_code`';
        }
        if ($this->isColumnModified(MassconversionPeer::SEX)) {
            $modifiedColumns[':p' . $index++]  = '`Sex`';
        }
        if ($this->isColumnModified(MassconversionPeer::LIFESTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`LifeStage`';
        }
        if ($this->isColumnModified(MassconversionPeer::DM_WM)) {
            $modifiedColumns[':p' . $index++]  = '`DM_WM`';
        }
        if ($this->isColumnModified(MassconversionPeer::DM_WMCALC)) {
            $modifiedColumns[':p' . $index++]  = '`DM_WMcalc`';
        }
        if ($this->isColumnModified(MassconversionPeer::AFDM_DM)) {
            $modifiedColumns[':p' . $index++]  = '`AFDM_DM`';
        }
        if ($this->isColumnModified(MassconversionPeer::AFDM_DMCALC)) {
            $modifiedColumns[':p' . $index++]  = '`AFDM_DMcalc`';
        }
        if ($this->isColumnModified(MassconversionPeer::AFDM_WM)) {
            $modifiedColumns[':p' . $index++]  = '`AFDM_WM`';
        }
        if ($this->isColumnModified(MassconversionPeer::AFDM_WMCALC)) {
            $modifiedColumns[':p' . $index++]  = '`AFDM_WMcalc`';
        }
        if ($this->isColumnModified(MassconversionPeer::PROTEIN_DM)) {
            $modifiedColumns[':p' . $index++]  = '`Protein_DM`';
        }
        if ($this->isColumnModified(MassconversionPeer::PROTEIN_DMCALC)) {
            $modifiedColumns[':p' . $index++]  = '`Protein_DMcalc`';
        }
        if ($this->isColumnModified(MassconversionPeer::CARBHYDR_DM)) {
            $modifiedColumns[':p' . $index++]  = '`Carbhydr_DM`';
        }
        if ($this->isColumnModified(MassconversionPeer::CARBHYDR_DMCALC)) {
            $modifiedColumns[':p' . $index++]  = '`Carbhydr_DMcalc`';
        }
        if ($this->isColumnModified(MassconversionPeer::LIPID_DM)) {
            $modifiedColumns[':p' . $index++]  = '`Lipid_DM`';
        }
        if ($this->isColumnModified(MassconversionPeer::LIPID_DMCALC)) {
            $modifiedColumns[':p' . $index++]  = '`Lipid_DMcalc`';
        }
        if ($this->isColumnModified(MassconversionPeer::C_DM)) {
            $modifiedColumns[':p' . $index++]  = '`C_DM`';
        }
        if ($this->isColumnModified(MassconversionPeer::C_DMCALC)) {
            $modifiedColumns[':p' . $index++]  = '`C_DMcalc`';
        }
        if ($this->isColumnModified(MassconversionPeer::N_DM)) {
            $modifiedColumns[':p' . $index++]  = '`N_DM`';
        }
        if ($this->isColumnModified(MassconversionPeer::N_DMCALC)) {
            $modifiedColumns[':p' . $index++]  = '`N_DMcalc`';
        }
        if ($this->isColumnModified(MassconversionPeer::P_DM)) {
            $modifiedColumns[':p' . $index++]  = '`P_DM`';
        }
        if ($this->isColumnModified(MassconversionPeer::P_DMCALC)) {
            $modifiedColumns[':p' . $index++]  = '`P_DMcalc`';
        }
        if ($this->isColumnModified(MassconversionPeer::C_AFDM)) {
            $modifiedColumns[':p' . $index++]  = '`C_AFDM`';
        }
        if ($this->isColumnModified(MassconversionPeer::C_AFDMCALC)) {
            $modifiedColumns[':p' . $index++]  = '`C_AFDMcalc`';
        }
        if ($this->isColumnModified(MassconversionPeer::N_AFDM)) {
            $modifiedColumns[':p' . $index++]  = '`N_AFDM`';
        }
        if ($this->isColumnModified(MassconversionPeer::N_AFDMCALC)) {
            $modifiedColumns[':p' . $index++]  = '`N_AFDMcalc`';
        }
        if ($this->isColumnModified(MassconversionPeer::P_AFDM)) {
            $modifiedColumns[':p' . $index++]  = '`P_AFDM`';
        }
        if ($this->isColumnModified(MassconversionPeer::P_AFDMCALC)) {
            $modifiedColumns[':p' . $index++]  = '`P_AFDMcalc`';
        }
        if ($this->isColumnModified(MassconversionPeer::J_MGWM)) {
            $modifiedColumns[':p' . $index++]  = '`J_mgWM`';
        }
        if ($this->isColumnModified(MassconversionPeer::J_MGWMCALC)) {
            $modifiedColumns[':p' . $index++]  = '`J_mgWMcalc`';
        }
        if ($this->isColumnModified(MassconversionPeer::J_MGDM)) {
            $modifiedColumns[':p' . $index++]  = '`J_mgDM`';
        }
        if ($this->isColumnModified(MassconversionPeer::J_MGDMCALC)) {
            $modifiedColumns[':p' . $index++]  = '`J_mgDMcalc`';
        }
        if ($this->isColumnModified(MassconversionPeer::J_MGAFDM)) {
            $modifiedColumns[':p' . $index++]  = '`J_mgAFDM`';
        }
        if ($this->isColumnModified(MassconversionPeer::J_MGAFDMCALC)) {
            $modifiedColumns[':p' . $index++]  = '`J_mgAFDMcalc`';
        }
        if ($this->isColumnModified(MassconversionPeer::J_MGC)) {
            $modifiedColumns[':p' . $index++]  = '`J_mgC`';
        }
        if ($this->isColumnModified(MassconversionPeer::J_MGCCALC)) {
            $modifiedColumns[':p' . $index++]  = '`J_mgCcalc`';
        }
        if ($this->isColumnModified(MassconversionPeer::C_NMASS)) {
            $modifiedColumns[':p' . $index++]  = '`C_Nmass`';
        }
        if ($this->isColumnModified(MassconversionPeer::C_PMASS)) {
            $modifiedColumns[':p' . $index++]  = '`C_Pmass`';
        }
        if ($this->isColumnModified(MassconversionPeer::N_PMASS)) {
            $modifiedColumns[':p' . $index++]  = '`N_Pmass`';
        }
        if ($this->isColumnModified(MassconversionPeer::COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`Comments`';
        }
        if ($this->isColumnModified(MassconversionPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(MassconversionPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(MassconversionPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(MassconversionPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(MassconversionPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(MassconversionPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }

        $sql = sprintf(
            'INSERT INTO `massconversion` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`RecordNo`':
                        $stmt->bindValue($identifier, $this->recordno, PDO::PARAM_INT);
                        break;
                    case '`Genus`':
                        $stmt->bindValue($identifier, $this->genus, PDO::PARAM_STR);
                        break;
                    case '`Species`':
                        $stmt->bindValue($identifier, $this->species, PDO::PARAM_STR);
                        break;
                    case '`NameUsed`':
                        $stmt->bindValue($identifier, $this->nameused, PDO::PARAM_STR);
                        break;
                    case '`Speccode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`MassConvMainRef`':
                        $stmt->bindValue($identifier, $this->massconvmainref, PDO::PARAM_INT);
                        break;
                    case '`MassConvRefNo`':
                        $stmt->bindValue($identifier, $this->massconvrefno, PDO::PARAM_INT);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`Country`':
                        $stmt->bindValue($identifier, $this->country, PDO::PARAM_STR);
                        break;
                    case '`C_code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`Sex`':
                        $stmt->bindValue($identifier, $this->sex, PDO::PARAM_STR);
                        break;
                    case '`LifeStage`':
                        $stmt->bindValue($identifier, $this->lifestage, PDO::PARAM_STR);
                        break;
                    case '`DM_WM`':
                        $stmt->bindValue($identifier, $this->dm_wm, PDO::PARAM_STR);
                        break;
                    case '`DM_WMcalc`':
                        $stmt->bindValue($identifier, $this->dm_wmcalc, PDO::PARAM_STR);
                        break;
                    case '`AFDM_DM`':
                        $stmt->bindValue($identifier, $this->afdm_dm, PDO::PARAM_STR);
                        break;
                    case '`AFDM_DMcalc`':
                        $stmt->bindValue($identifier, $this->afdm_dmcalc, PDO::PARAM_STR);
                        break;
                    case '`AFDM_WM`':
                        $stmt->bindValue($identifier, $this->afdm_wm, PDO::PARAM_STR);
                        break;
                    case '`AFDM_WMcalc`':
                        $stmt->bindValue($identifier, $this->afdm_wmcalc, PDO::PARAM_STR);
                        break;
                    case '`Protein_DM`':
                        $stmt->bindValue($identifier, $this->protein_dm, PDO::PARAM_STR);
                        break;
                    case '`Protein_DMcalc`':
                        $stmt->bindValue($identifier, $this->protein_dmcalc, PDO::PARAM_STR);
                        break;
                    case '`Carbhydr_DM`':
                        $stmt->bindValue($identifier, $this->carbhydr_dm, PDO::PARAM_STR);
                        break;
                    case '`Carbhydr_DMcalc`':
                        $stmt->bindValue($identifier, $this->carbhydr_dmcalc, PDO::PARAM_STR);
                        break;
                    case '`Lipid_DM`':
                        $stmt->bindValue($identifier, $this->lipid_dm, PDO::PARAM_STR);
                        break;
                    case '`Lipid_DMcalc`':
                        $stmt->bindValue($identifier, $this->lipid_dmcalc, PDO::PARAM_STR);
                        break;
                    case '`C_DM`':
                        $stmt->bindValue($identifier, $this->c_dm, PDO::PARAM_STR);
                        break;
                    case '`C_DMcalc`':
                        $stmt->bindValue($identifier, $this->c_dmcalc, PDO::PARAM_STR);
                        break;
                    case '`N_DM`':
                        $stmt->bindValue($identifier, $this->n_dm, PDO::PARAM_STR);
                        break;
                    case '`N_DMcalc`':
                        $stmt->bindValue($identifier, $this->n_dmcalc, PDO::PARAM_STR);
                        break;
                    case '`P_DM`':
                        $stmt->bindValue($identifier, $this->p_dm, PDO::PARAM_STR);
                        break;
                    case '`P_DMcalc`':
                        $stmt->bindValue($identifier, $this->p_dmcalc, PDO::PARAM_STR);
                        break;
                    case '`C_AFDM`':
                        $stmt->bindValue($identifier, $this->c_afdm, PDO::PARAM_STR);
                        break;
                    case '`C_AFDMcalc`':
                        $stmt->bindValue($identifier, $this->c_afdmcalc, PDO::PARAM_STR);
                        break;
                    case '`N_AFDM`':
                        $stmt->bindValue($identifier, $this->n_afdm, PDO::PARAM_STR);
                        break;
                    case '`N_AFDMcalc`':
                        $stmt->bindValue($identifier, $this->n_afdmcalc, PDO::PARAM_STR);
                        break;
                    case '`P_AFDM`':
                        $stmt->bindValue($identifier, $this->p_afdm, PDO::PARAM_STR);
                        break;
                    case '`P_AFDMcalc`':
                        $stmt->bindValue($identifier, $this->p_afdmcalc, PDO::PARAM_STR);
                        break;
                    case '`J_mgWM`':
                        $stmt->bindValue($identifier, $this->j_mgwm, PDO::PARAM_STR);
                        break;
                    case '`J_mgWMcalc`':
                        $stmt->bindValue($identifier, $this->j_mgwmcalc, PDO::PARAM_STR);
                        break;
                    case '`J_mgDM`':
                        $stmt->bindValue($identifier, $this->j_mgdm, PDO::PARAM_STR);
                        break;
                    case '`J_mgDMcalc`':
                        $stmt->bindValue($identifier, $this->j_mgdmcalc, PDO::PARAM_STR);
                        break;
                    case '`J_mgAFDM`':
                        $stmt->bindValue($identifier, $this->j_mgafdm, PDO::PARAM_STR);
                        break;
                    case '`J_mgAFDMcalc`':
                        $stmt->bindValue($identifier, $this->j_mgafdmcalc, PDO::PARAM_STR);
                        break;
                    case '`J_mgC`':
                        $stmt->bindValue($identifier, $this->j_mgc, PDO::PARAM_STR);
                        break;
                    case '`J_mgCcalc`':
                        $stmt->bindValue($identifier, $this->j_mgccalc, PDO::PARAM_STR);
                        break;
                    case '`C_Nmass`':
                        $stmt->bindValue($identifier, $this->c_nmass, PDO::PARAM_STR);
                        break;
                    case '`C_Pmass`':
                        $stmt->bindValue($identifier, $this->c_pmass, PDO::PARAM_STR);
                        break;
                    case '`N_Pmass`':
                        $stmt->bindValue($identifier, $this->n_pmass, PDO::PARAM_STR);
                        break;
                    case '`Comments`':
                        $stmt->bindValue($identifier, $this->comments, PDO::PARAM_STR);
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


            if (($retval = MassconversionPeer::doValidate($this, $columns)) !== true) {
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
        $pos = MassconversionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRecordno();
                break;
            case 1:
                return $this->getGenus();
                break;
            case 2:
                return $this->getSpecies();
                break;
            case 3:
                return $this->getNameused();
                break;
            case 4:
                return $this->getSpeccode();
                break;
            case 5:
                return $this->getStockcode();
                break;
            case 6:
                return $this->getMassconvmainref();
                break;
            case 7:
                return $this->getMassconvrefno();
                break;
            case 8:
                return $this->getLocality();
                break;
            case 9:
                return $this->getCountry();
                break;
            case 10:
                return $this->getCCode();
                break;
            case 11:
                return $this->getSex();
                break;
            case 12:
                return $this->getLifestage();
                break;
            case 13:
                return $this->getDmWm();
                break;
            case 14:
                return $this->getDmWmcalc();
                break;
            case 15:
                return $this->getAfdmDm();
                break;
            case 16:
                return $this->getAfdmDmcalc();
                break;
            case 17:
                return $this->getAfdmWm();
                break;
            case 18:
                return $this->getAfdmWmcalc();
                break;
            case 19:
                return $this->getProteinDm();
                break;
            case 20:
                return $this->getProteinDmcalc();
                break;
            case 21:
                return $this->getCarbhydrDm();
                break;
            case 22:
                return $this->getCarbhydrDmcalc();
                break;
            case 23:
                return $this->getLipidDm();
                break;
            case 24:
                return $this->getLipidDmcalc();
                break;
            case 25:
                return $this->getCDm();
                break;
            case 26:
                return $this->getCDmcalc();
                break;
            case 27:
                return $this->getNDm();
                break;
            case 28:
                return $this->getNDmcalc();
                break;
            case 29:
                return $this->getPDm();
                break;
            case 30:
                return $this->getPDmcalc();
                break;
            case 31:
                return $this->getCAfdm();
                break;
            case 32:
                return $this->getCAfdmcalc();
                break;
            case 33:
                return $this->getNAfdm();
                break;
            case 34:
                return $this->getNAfdmcalc();
                break;
            case 35:
                return $this->getPAfdm();
                break;
            case 36:
                return $this->getPAfdmcalc();
                break;
            case 37:
                return $this->getJMgwm();
                break;
            case 38:
                return $this->getJMgwmcalc();
                break;
            case 39:
                return $this->getJMgdm();
                break;
            case 40:
                return $this->getJMgdmcalc();
                break;
            case 41:
                return $this->getJMgafdm();
                break;
            case 42:
                return $this->getJMgafdmcalc();
                break;
            case 43:
                return $this->getJMgc();
                break;
            case 44:
                return $this->getJMgccalc();
                break;
            case 45:
                return $this->getCNmass();
                break;
            case 46:
                return $this->getCPmass();
                break;
            case 47:
                return $this->getNPmass();
                break;
            case 48:
                return $this->getComments();
                break;
            case 49:
                return $this->getEntered();
                break;
            case 50:
                return $this->getDateentered();
                break;
            case 51:
                return $this->getModified();
                break;
            case 52:
                return $this->getDatemodified();
                break;
            case 53:
                return $this->getExpert();
                break;
            case 54:
                return $this->getDatechecked();
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
        if (isset($alreadyDumpedObjects['Massconversion'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Massconversion'][$this->getPrimaryKey()] = true;
        $keys = MassconversionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRecordno(),
            $keys[1] => $this->getGenus(),
            $keys[2] => $this->getSpecies(),
            $keys[3] => $this->getNameused(),
            $keys[4] => $this->getSpeccode(),
            $keys[5] => $this->getStockcode(),
            $keys[6] => $this->getMassconvmainref(),
            $keys[7] => $this->getMassconvrefno(),
            $keys[8] => $this->getLocality(),
            $keys[9] => $this->getCountry(),
            $keys[10] => $this->getCCode(),
            $keys[11] => $this->getSex(),
            $keys[12] => $this->getLifestage(),
            $keys[13] => $this->getDmWm(),
            $keys[14] => $this->getDmWmcalc(),
            $keys[15] => $this->getAfdmDm(),
            $keys[16] => $this->getAfdmDmcalc(),
            $keys[17] => $this->getAfdmWm(),
            $keys[18] => $this->getAfdmWmcalc(),
            $keys[19] => $this->getProteinDm(),
            $keys[20] => $this->getProteinDmcalc(),
            $keys[21] => $this->getCarbhydrDm(),
            $keys[22] => $this->getCarbhydrDmcalc(),
            $keys[23] => $this->getLipidDm(),
            $keys[24] => $this->getLipidDmcalc(),
            $keys[25] => $this->getCDm(),
            $keys[26] => $this->getCDmcalc(),
            $keys[27] => $this->getNDm(),
            $keys[28] => $this->getNDmcalc(),
            $keys[29] => $this->getPDm(),
            $keys[30] => $this->getPDmcalc(),
            $keys[31] => $this->getCAfdm(),
            $keys[32] => $this->getCAfdmcalc(),
            $keys[33] => $this->getNAfdm(),
            $keys[34] => $this->getNAfdmcalc(),
            $keys[35] => $this->getPAfdm(),
            $keys[36] => $this->getPAfdmcalc(),
            $keys[37] => $this->getJMgwm(),
            $keys[38] => $this->getJMgwmcalc(),
            $keys[39] => $this->getJMgdm(),
            $keys[40] => $this->getJMgdmcalc(),
            $keys[41] => $this->getJMgafdm(),
            $keys[42] => $this->getJMgafdmcalc(),
            $keys[43] => $this->getJMgc(),
            $keys[44] => $this->getJMgccalc(),
            $keys[45] => $this->getCNmass(),
            $keys[46] => $this->getCPmass(),
            $keys[47] => $this->getNPmass(),
            $keys[48] => $this->getComments(),
            $keys[49] => $this->getEntered(),
            $keys[50] => $this->getDateentered(),
            $keys[51] => $this->getModified(),
            $keys[52] => $this->getDatemodified(),
            $keys[53] => $this->getExpert(),
            $keys[54] => $this->getDatechecked(),
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
        $pos = MassconversionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRecordno($value);
                break;
            case 1:
                $this->setGenus($value);
                break;
            case 2:
                $this->setSpecies($value);
                break;
            case 3:
                $this->setNameused($value);
                break;
            case 4:
                $this->setSpeccode($value);
                break;
            case 5:
                $this->setStockcode($value);
                break;
            case 6:
                $this->setMassconvmainref($value);
                break;
            case 7:
                $this->setMassconvrefno($value);
                break;
            case 8:
                $this->setLocality($value);
                break;
            case 9:
                $this->setCountry($value);
                break;
            case 10:
                $this->setCCode($value);
                break;
            case 11:
                $this->setSex($value);
                break;
            case 12:
                $this->setLifestage($value);
                break;
            case 13:
                $this->setDmWm($value);
                break;
            case 14:
                $this->setDmWmcalc($value);
                break;
            case 15:
                $this->setAfdmDm($value);
                break;
            case 16:
                $this->setAfdmDmcalc($value);
                break;
            case 17:
                $this->setAfdmWm($value);
                break;
            case 18:
                $this->setAfdmWmcalc($value);
                break;
            case 19:
                $this->setProteinDm($value);
                break;
            case 20:
                $this->setProteinDmcalc($value);
                break;
            case 21:
                $this->setCarbhydrDm($value);
                break;
            case 22:
                $this->setCarbhydrDmcalc($value);
                break;
            case 23:
                $this->setLipidDm($value);
                break;
            case 24:
                $this->setLipidDmcalc($value);
                break;
            case 25:
                $this->setCDm($value);
                break;
            case 26:
                $this->setCDmcalc($value);
                break;
            case 27:
                $this->setNDm($value);
                break;
            case 28:
                $this->setNDmcalc($value);
                break;
            case 29:
                $this->setPDm($value);
                break;
            case 30:
                $this->setPDmcalc($value);
                break;
            case 31:
                $this->setCAfdm($value);
                break;
            case 32:
                $this->setCAfdmcalc($value);
                break;
            case 33:
                $this->setNAfdm($value);
                break;
            case 34:
                $this->setNAfdmcalc($value);
                break;
            case 35:
                $this->setPAfdm($value);
                break;
            case 36:
                $this->setPAfdmcalc($value);
                break;
            case 37:
                $this->setJMgwm($value);
                break;
            case 38:
                $this->setJMgwmcalc($value);
                break;
            case 39:
                $this->setJMgdm($value);
                break;
            case 40:
                $this->setJMgdmcalc($value);
                break;
            case 41:
                $this->setJMgafdm($value);
                break;
            case 42:
                $this->setJMgafdmcalc($value);
                break;
            case 43:
                $this->setJMgc($value);
                break;
            case 44:
                $this->setJMgccalc($value);
                break;
            case 45:
                $this->setCNmass($value);
                break;
            case 46:
                $this->setCPmass($value);
                break;
            case 47:
                $this->setNPmass($value);
                break;
            case 48:
                $this->setComments($value);
                break;
            case 49:
                $this->setEntered($value);
                break;
            case 50:
                $this->setDateentered($value);
                break;
            case 51:
                $this->setModified($value);
                break;
            case 52:
                $this->setDatemodified($value);
                break;
            case 53:
                $this->setExpert($value);
                break;
            case 54:
                $this->setDatechecked($value);
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
        $keys = MassconversionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRecordno($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setGenus($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpecies($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNameused($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSpeccode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setStockcode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMassconvmainref($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setMassconvrefno($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLocality($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCountry($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCCode($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setSex($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setLifestage($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDmWm($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDmWmcalc($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setAfdmDm($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setAfdmDmcalc($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setAfdmWm($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setAfdmWmcalc($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setProteinDm($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setProteinDmcalc($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setCarbhydrDm($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setCarbhydrDmcalc($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setLipidDm($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setLipidDmcalc($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setCDm($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setCDmcalc($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setNDm($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setNDmcalc($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setPDm($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setPDmcalc($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setCAfdm($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setCAfdmcalc($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setNAfdm($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setNAfdmcalc($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setPAfdm($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setPAfdmcalc($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setJMgwm($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setJMgwmcalc($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setJMgdm($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setJMgdmcalc($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setJMgafdm($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setJMgafdmcalc($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setJMgc($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setJMgccalc($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setCNmass($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setCPmass($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setNPmass($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setComments($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setEntered($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setDateentered($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setModified($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setDatemodified($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setExpert($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setDatechecked($arr[$keys[54]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(MassconversionPeer::DATABASE_NAME);

        if ($this->isColumnModified(MassconversionPeer::RECORDNO)) $criteria->add(MassconversionPeer::RECORDNO, $this->recordno);
        if ($this->isColumnModified(MassconversionPeer::GENUS)) $criteria->add(MassconversionPeer::GENUS, $this->genus);
        if ($this->isColumnModified(MassconversionPeer::SPECIES)) $criteria->add(MassconversionPeer::SPECIES, $this->species);
        if ($this->isColumnModified(MassconversionPeer::NAMEUSED)) $criteria->add(MassconversionPeer::NAMEUSED, $this->nameused);
        if ($this->isColumnModified(MassconversionPeer::SPECCODE)) $criteria->add(MassconversionPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(MassconversionPeer::STOCKCODE)) $criteria->add(MassconversionPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(MassconversionPeer::MASSCONVMAINREF)) $criteria->add(MassconversionPeer::MASSCONVMAINREF, $this->massconvmainref);
        if ($this->isColumnModified(MassconversionPeer::MASSCONVREFNO)) $criteria->add(MassconversionPeer::MASSCONVREFNO, $this->massconvrefno);
        if ($this->isColumnModified(MassconversionPeer::LOCALITY)) $criteria->add(MassconversionPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(MassconversionPeer::COUNTRY)) $criteria->add(MassconversionPeer::COUNTRY, $this->country);
        if ($this->isColumnModified(MassconversionPeer::C_CODE)) $criteria->add(MassconversionPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(MassconversionPeer::SEX)) $criteria->add(MassconversionPeer::SEX, $this->sex);
        if ($this->isColumnModified(MassconversionPeer::LIFESTAGE)) $criteria->add(MassconversionPeer::LIFESTAGE, $this->lifestage);
        if ($this->isColumnModified(MassconversionPeer::DM_WM)) $criteria->add(MassconversionPeer::DM_WM, $this->dm_wm);
        if ($this->isColumnModified(MassconversionPeer::DM_WMCALC)) $criteria->add(MassconversionPeer::DM_WMCALC, $this->dm_wmcalc);
        if ($this->isColumnModified(MassconversionPeer::AFDM_DM)) $criteria->add(MassconversionPeer::AFDM_DM, $this->afdm_dm);
        if ($this->isColumnModified(MassconversionPeer::AFDM_DMCALC)) $criteria->add(MassconversionPeer::AFDM_DMCALC, $this->afdm_dmcalc);
        if ($this->isColumnModified(MassconversionPeer::AFDM_WM)) $criteria->add(MassconversionPeer::AFDM_WM, $this->afdm_wm);
        if ($this->isColumnModified(MassconversionPeer::AFDM_WMCALC)) $criteria->add(MassconversionPeer::AFDM_WMCALC, $this->afdm_wmcalc);
        if ($this->isColumnModified(MassconversionPeer::PROTEIN_DM)) $criteria->add(MassconversionPeer::PROTEIN_DM, $this->protein_dm);
        if ($this->isColumnModified(MassconversionPeer::PROTEIN_DMCALC)) $criteria->add(MassconversionPeer::PROTEIN_DMCALC, $this->protein_dmcalc);
        if ($this->isColumnModified(MassconversionPeer::CARBHYDR_DM)) $criteria->add(MassconversionPeer::CARBHYDR_DM, $this->carbhydr_dm);
        if ($this->isColumnModified(MassconversionPeer::CARBHYDR_DMCALC)) $criteria->add(MassconversionPeer::CARBHYDR_DMCALC, $this->carbhydr_dmcalc);
        if ($this->isColumnModified(MassconversionPeer::LIPID_DM)) $criteria->add(MassconversionPeer::LIPID_DM, $this->lipid_dm);
        if ($this->isColumnModified(MassconversionPeer::LIPID_DMCALC)) $criteria->add(MassconversionPeer::LIPID_DMCALC, $this->lipid_dmcalc);
        if ($this->isColumnModified(MassconversionPeer::C_DM)) $criteria->add(MassconversionPeer::C_DM, $this->c_dm);
        if ($this->isColumnModified(MassconversionPeer::C_DMCALC)) $criteria->add(MassconversionPeer::C_DMCALC, $this->c_dmcalc);
        if ($this->isColumnModified(MassconversionPeer::N_DM)) $criteria->add(MassconversionPeer::N_DM, $this->n_dm);
        if ($this->isColumnModified(MassconversionPeer::N_DMCALC)) $criteria->add(MassconversionPeer::N_DMCALC, $this->n_dmcalc);
        if ($this->isColumnModified(MassconversionPeer::P_DM)) $criteria->add(MassconversionPeer::P_DM, $this->p_dm);
        if ($this->isColumnModified(MassconversionPeer::P_DMCALC)) $criteria->add(MassconversionPeer::P_DMCALC, $this->p_dmcalc);
        if ($this->isColumnModified(MassconversionPeer::C_AFDM)) $criteria->add(MassconversionPeer::C_AFDM, $this->c_afdm);
        if ($this->isColumnModified(MassconversionPeer::C_AFDMCALC)) $criteria->add(MassconversionPeer::C_AFDMCALC, $this->c_afdmcalc);
        if ($this->isColumnModified(MassconversionPeer::N_AFDM)) $criteria->add(MassconversionPeer::N_AFDM, $this->n_afdm);
        if ($this->isColumnModified(MassconversionPeer::N_AFDMCALC)) $criteria->add(MassconversionPeer::N_AFDMCALC, $this->n_afdmcalc);
        if ($this->isColumnModified(MassconversionPeer::P_AFDM)) $criteria->add(MassconversionPeer::P_AFDM, $this->p_afdm);
        if ($this->isColumnModified(MassconversionPeer::P_AFDMCALC)) $criteria->add(MassconversionPeer::P_AFDMCALC, $this->p_afdmcalc);
        if ($this->isColumnModified(MassconversionPeer::J_MGWM)) $criteria->add(MassconversionPeer::J_MGWM, $this->j_mgwm);
        if ($this->isColumnModified(MassconversionPeer::J_MGWMCALC)) $criteria->add(MassconversionPeer::J_MGWMCALC, $this->j_mgwmcalc);
        if ($this->isColumnModified(MassconversionPeer::J_MGDM)) $criteria->add(MassconversionPeer::J_MGDM, $this->j_mgdm);
        if ($this->isColumnModified(MassconversionPeer::J_MGDMCALC)) $criteria->add(MassconversionPeer::J_MGDMCALC, $this->j_mgdmcalc);
        if ($this->isColumnModified(MassconversionPeer::J_MGAFDM)) $criteria->add(MassconversionPeer::J_MGAFDM, $this->j_mgafdm);
        if ($this->isColumnModified(MassconversionPeer::J_MGAFDMCALC)) $criteria->add(MassconversionPeer::J_MGAFDMCALC, $this->j_mgafdmcalc);
        if ($this->isColumnModified(MassconversionPeer::J_MGC)) $criteria->add(MassconversionPeer::J_MGC, $this->j_mgc);
        if ($this->isColumnModified(MassconversionPeer::J_MGCCALC)) $criteria->add(MassconversionPeer::J_MGCCALC, $this->j_mgccalc);
        if ($this->isColumnModified(MassconversionPeer::C_NMASS)) $criteria->add(MassconversionPeer::C_NMASS, $this->c_nmass);
        if ($this->isColumnModified(MassconversionPeer::C_PMASS)) $criteria->add(MassconversionPeer::C_PMASS, $this->c_pmass);
        if ($this->isColumnModified(MassconversionPeer::N_PMASS)) $criteria->add(MassconversionPeer::N_PMASS, $this->n_pmass);
        if ($this->isColumnModified(MassconversionPeer::COMMENTS)) $criteria->add(MassconversionPeer::COMMENTS, $this->comments);
        if ($this->isColumnModified(MassconversionPeer::ENTERED)) $criteria->add(MassconversionPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(MassconversionPeer::DATEENTERED)) $criteria->add(MassconversionPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(MassconversionPeer::MODIFIED)) $criteria->add(MassconversionPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(MassconversionPeer::DATEMODIFIED)) $criteria->add(MassconversionPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(MassconversionPeer::EXPERT)) $criteria->add(MassconversionPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(MassconversionPeer::DATECHECKED)) $criteria->add(MassconversionPeer::DATECHECKED, $this->datechecked);

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
        $criteria = new Criteria(MassconversionPeer::DATABASE_NAME);
        $criteria->add(MassconversionPeer::RECORDNO, $this->recordno);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getRecordno();
    }

    /**
     * Generic method to set the primary key (recordno column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setRecordno($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getRecordno();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Massconversion (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setGenus($this->getGenus());
        $copyObj->setSpecies($this->getSpecies());
        $copyObj->setNameused($this->getNameused());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setMassconvmainref($this->getMassconvmainref());
        $copyObj->setMassconvrefno($this->getMassconvrefno());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setCountry($this->getCountry());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setSex($this->getSex());
        $copyObj->setLifestage($this->getLifestage());
        $copyObj->setDmWm($this->getDmWm());
        $copyObj->setDmWmcalc($this->getDmWmcalc());
        $copyObj->setAfdmDm($this->getAfdmDm());
        $copyObj->setAfdmDmcalc($this->getAfdmDmcalc());
        $copyObj->setAfdmWm($this->getAfdmWm());
        $copyObj->setAfdmWmcalc($this->getAfdmWmcalc());
        $copyObj->setProteinDm($this->getProteinDm());
        $copyObj->setProteinDmcalc($this->getProteinDmcalc());
        $copyObj->setCarbhydrDm($this->getCarbhydrDm());
        $copyObj->setCarbhydrDmcalc($this->getCarbhydrDmcalc());
        $copyObj->setLipidDm($this->getLipidDm());
        $copyObj->setLipidDmcalc($this->getLipidDmcalc());
        $copyObj->setCDm($this->getCDm());
        $copyObj->setCDmcalc($this->getCDmcalc());
        $copyObj->setNDm($this->getNDm());
        $copyObj->setNDmcalc($this->getNDmcalc());
        $copyObj->setPDm($this->getPDm());
        $copyObj->setPDmcalc($this->getPDmcalc());
        $copyObj->setCAfdm($this->getCAfdm());
        $copyObj->setCAfdmcalc($this->getCAfdmcalc());
        $copyObj->setNAfdm($this->getNAfdm());
        $copyObj->setNAfdmcalc($this->getNAfdmcalc());
        $copyObj->setPAfdm($this->getPAfdm());
        $copyObj->setPAfdmcalc($this->getPAfdmcalc());
        $copyObj->setJMgwm($this->getJMgwm());
        $copyObj->setJMgwmcalc($this->getJMgwmcalc());
        $copyObj->setJMgdm($this->getJMgdm());
        $copyObj->setJMgdmcalc($this->getJMgdmcalc());
        $copyObj->setJMgafdm($this->getJMgafdm());
        $copyObj->setJMgafdmcalc($this->getJMgafdmcalc());
        $copyObj->setJMgc($this->getJMgc());
        $copyObj->setJMgccalc($this->getJMgccalc());
        $copyObj->setCNmass($this->getCNmass());
        $copyObj->setCPmass($this->getCPmass());
        $copyObj->setNPmass($this->getNPmass());
        $copyObj->setComments($this->getComments());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setRecordno('0'); // this is a auto-increment column, so set to default value
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
     * @return Massconversion Clone of current object.
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
     * @return MassconversionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new MassconversionPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->recordno = null;
        $this->genus = null;
        $this->species = null;
        $this->nameused = null;
        $this->speccode = null;
        $this->stockcode = null;
        $this->massconvmainref = null;
        $this->massconvrefno = null;
        $this->locality = null;
        $this->country = null;
        $this->c_code = null;
        $this->sex = null;
        $this->lifestage = null;
        $this->dm_wm = null;
        $this->dm_wmcalc = null;
        $this->afdm_dm = null;
        $this->afdm_dmcalc = null;
        $this->afdm_wm = null;
        $this->afdm_wmcalc = null;
        $this->protein_dm = null;
        $this->protein_dmcalc = null;
        $this->carbhydr_dm = null;
        $this->carbhydr_dmcalc = null;
        $this->lipid_dm = null;
        $this->lipid_dmcalc = null;
        $this->c_dm = null;
        $this->c_dmcalc = null;
        $this->n_dm = null;
        $this->n_dmcalc = null;
        $this->p_dm = null;
        $this->p_dmcalc = null;
        $this->c_afdm = null;
        $this->c_afdmcalc = null;
        $this->n_afdm = null;
        $this->n_afdmcalc = null;
        $this->p_afdm = null;
        $this->p_afdmcalc = null;
        $this->j_mgwm = null;
        $this->j_mgwmcalc = null;
        $this->j_mgdm = null;
        $this->j_mgdmcalc = null;
        $this->j_mgafdm = null;
        $this->j_mgafdmcalc = null;
        $this->j_mgc = null;
        $this->j_mgccalc = null;
        $this->c_nmass = null;
        $this->c_pmass = null;
        $this->n_pmass = null;
        $this->comments = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
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
        return (string) $this->exportTo(MassconversionPeer::DEFAULT_STRING_FORMAT);
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
