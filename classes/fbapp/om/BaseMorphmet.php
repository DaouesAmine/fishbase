<?php


/**
 * Base class that represents a row from the 'morphmet' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMorphmet extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'MorphmetPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        MorphmetPeer
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
     * The value for the picname field.
     * @var        string
     */
    protected $picname;

    /**
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the tl field.
     * @var        int
     */
    protected $tl;

    /**
     * The value for the sl field.
     * @var        int
     */
    protected $sl;

    /**
     * The value for the fl field.
     * @var        int
     */
    protected $fl;

    /**
     * The value for the hl field.
     * @var        int
     */
    protected $hl;

    /**
     * The value for the pal field.
     * @var        int
     */
    protected $pal;

    /**
     * The value for the pdl field.
     * @var        int
     */
    protected $pdl;

    /**
     * The value for the ppl field.
     * @var        int
     */
    protected $ppl;

    /**
     * The value for the ppel field.
     * @var        int
     */
    protected $ppel;

    /**
     * The value for the ed field.
     * @var        int
     */
    protected $ed;

    /**
     * The value for the pol field.
     * @var        int
     */
    protected $pol;

    /**
     * The value for the bd field.
     * @var        int
     */
    protected $bd;

    /**
     * The value for the ch field.
     * @var        int
     */
    protected $ch;

    /**
     * The value for the ca field.
     * @var        int
     */
    protected $ca;

    /**
     * The value for the snouttipx field.
     * @var        int
     */
    protected $snouttipx;

    /**
     * The value for the snouttipy field.
     * @var        int
     */
    protected $snouttipy;

    /**
     * The value for the caudaloriginx field.
     * @var        int
     */
    protected $caudaloriginx;

    /**
     * The value for the caudaloriginy field.
     * @var        int
     */
    protected $caudaloriginy;

    /**
     * The value for the tlendx field.
     * @var        int
     */
    protected $tlendx;

    /**
     * The value for the tlendy field.
     * @var        int
     */
    protected $tlendy;

    /**
     * The value for the dorsaloriginx field.
     * @var        int
     */
    protected $dorsaloriginx;

    /**
     * The value for the dorsaloriginy field.
     * @var        int
     */
    protected $dorsaloriginy;

    /**
     * The value for the analoriginx field.
     * @var        int
     */
    protected $analoriginx;

    /**
     * The value for the analoriginy field.
     * @var        int
     */
    protected $analoriginy;

    /**
     * The value for the eyefrontx field.
     * @var        int
     */
    protected $eyefrontx;

    /**
     * The value for the eyefronty field.
     * @var        int
     */
    protected $eyefronty;

    /**
     * The value for the eyeendx field.
     * @var        int
     */
    protected $eyeendx;

    /**
     * The value for the eyeendy field.
     * @var        int
     */
    protected $eyeendy;

    /**
     * The value for the opercleendx field.
     * @var        int
     */
    protected $opercleendx;

    /**
     * The value for the opercleendy field.
     * @var        int
     */
    protected $opercleendy;

    /**
     * The value for the maxdepthdorsalx field.
     * @var        int
     */
    protected $maxdepthdorsalx;

    /**
     * The value for the maxdepthdorsaly field.
     * @var        int
     */
    protected $maxdepthdorsaly;

    /**
     * The value for the maxdepthventralx field.
     * @var        int
     */
    protected $maxdepthventralx;

    /**
     * The value for the maxdepthventraly field.
     * @var        int
     */
    protected $maxdepthventraly;

    /**
     * The value for the pectoraloriginx field.
     * @var        int
     */
    protected $pectoraloriginx;

    /**
     * The value for the pectoraloriginy field.
     * @var        int
     */
    protected $pectoraloriginy;

    /**
     * The value for the pelvicoriginx field.
     * @var        int
     */
    protected $pelvicoriginx;

    /**
     * The value for the pelvicoriginy field.
     * @var        int
     */
    protected $pelvicoriginy;

    /**
     * The value for the flendx field.
     * @var        int
     */
    protected $flendx;

    /**
     * The value for the flendy field.
     * @var        int
     */
    protected $flendy;

    /**
     * The value for the caudalupperx field.
     * @var        int
     */
    protected $caudalupperx;

    /**
     * The value for the caudaluppery field.
     * @var        int
     */
    protected $caudaluppery;

    /**
     * The value for the caudallowerx field.
     * @var        int
     */
    protected $caudallowerx;

    /**
     * The value for the caudallowery field.
     * @var        int
     */
    protected $caudallowery;

    /**
     * The value for the aspectratio field.
     * @var        double
     */
    protected $aspectratio;

    /**
     * The value for the doubtful field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $doubtful;

    /**
     * The value for the remarks field.
     * @var        string
     */
    protected $remarks;

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
        $this->doubtful = 0;
    }

    /**
     * Initializes internal state of BaseMorphmet object.
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
     * Get the [picname] column value.
     *
     * @return string
     */
    public function getPicname()
    {

        return $this->picname;
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
     * Get the [tl] column value.
     *
     * @return int
     */
    public function getTl()
    {

        return $this->tl;
    }

    /**
     * Get the [sl] column value.
     *
     * @return int
     */
    public function getSl()
    {

        return $this->sl;
    }

    /**
     * Get the [fl] column value.
     *
     * @return int
     */
    public function getFl()
    {

        return $this->fl;
    }

    /**
     * Get the [hl] column value.
     *
     * @return int
     */
    public function getHl()
    {

        return $this->hl;
    }

    /**
     * Get the [pal] column value.
     *
     * @return int
     */
    public function getPal()
    {

        return $this->pal;
    }

    /**
     * Get the [pdl] column value.
     *
     * @return int
     */
    public function getPdl()
    {

        return $this->pdl;
    }

    /**
     * Get the [ppl] column value.
     *
     * @return int
     */
    public function getPpl()
    {

        return $this->ppl;
    }

    /**
     * Get the [ppel] column value.
     *
     * @return int
     */
    public function getPpel()
    {

        return $this->ppel;
    }

    /**
     * Get the [ed] column value.
     *
     * @return int
     */
    public function getEd()
    {

        return $this->ed;
    }

    /**
     * Get the [pol] column value.
     *
     * @return int
     */
    public function getPol()
    {

        return $this->pol;
    }

    /**
     * Get the [bd] column value.
     *
     * @return int
     */
    public function getBd()
    {

        return $this->bd;
    }

    /**
     * Get the [ch] column value.
     *
     * @return int
     */
    public function getCh()
    {

        return $this->ch;
    }

    /**
     * Get the [ca] column value.
     *
     * @return int
     */
    public function getCa()
    {

        return $this->ca;
    }

    /**
     * Get the [snouttipx] column value.
     *
     * @return int
     */
    public function getSnouttipx()
    {

        return $this->snouttipx;
    }

    /**
     * Get the [snouttipy] column value.
     *
     * @return int
     */
    public function getSnouttipy()
    {

        return $this->snouttipy;
    }

    /**
     * Get the [caudaloriginx] column value.
     *
     * @return int
     */
    public function getCaudaloriginx()
    {

        return $this->caudaloriginx;
    }

    /**
     * Get the [caudaloriginy] column value.
     *
     * @return int
     */
    public function getCaudaloriginy()
    {

        return $this->caudaloriginy;
    }

    /**
     * Get the [tlendx] column value.
     *
     * @return int
     */
    public function getTlendx()
    {

        return $this->tlendx;
    }

    /**
     * Get the [tlendy] column value.
     *
     * @return int
     */
    public function getTlendy()
    {

        return $this->tlendy;
    }

    /**
     * Get the [dorsaloriginx] column value.
     *
     * @return int
     */
    public function getDorsaloriginx()
    {

        return $this->dorsaloriginx;
    }

    /**
     * Get the [dorsaloriginy] column value.
     *
     * @return int
     */
    public function getDorsaloriginy()
    {

        return $this->dorsaloriginy;
    }

    /**
     * Get the [analoriginx] column value.
     *
     * @return int
     */
    public function getAnaloriginx()
    {

        return $this->analoriginx;
    }

    /**
     * Get the [analoriginy] column value.
     *
     * @return int
     */
    public function getAnaloriginy()
    {

        return $this->analoriginy;
    }

    /**
     * Get the [eyefrontx] column value.
     *
     * @return int
     */
    public function getEyefrontx()
    {

        return $this->eyefrontx;
    }

    /**
     * Get the [eyefronty] column value.
     *
     * @return int
     */
    public function getEyefronty()
    {

        return $this->eyefronty;
    }

    /**
     * Get the [eyeendx] column value.
     *
     * @return int
     */
    public function getEyeendx()
    {

        return $this->eyeendx;
    }

    /**
     * Get the [eyeendy] column value.
     *
     * @return int
     */
    public function getEyeendy()
    {

        return $this->eyeendy;
    }

    /**
     * Get the [opercleendx] column value.
     *
     * @return int
     */
    public function getOpercleendx()
    {

        return $this->opercleendx;
    }

    /**
     * Get the [opercleendy] column value.
     *
     * @return int
     */
    public function getOpercleendy()
    {

        return $this->opercleendy;
    }

    /**
     * Get the [maxdepthdorsalx] column value.
     *
     * @return int
     */
    public function getMaxdepthdorsalx()
    {

        return $this->maxdepthdorsalx;
    }

    /**
     * Get the [maxdepthdorsaly] column value.
     *
     * @return int
     */
    public function getMaxdepthdorsaly()
    {

        return $this->maxdepthdorsaly;
    }

    /**
     * Get the [maxdepthventralx] column value.
     *
     * @return int
     */
    public function getMaxdepthventralx()
    {

        return $this->maxdepthventralx;
    }

    /**
     * Get the [maxdepthventraly] column value.
     *
     * @return int
     */
    public function getMaxdepthventraly()
    {

        return $this->maxdepthventraly;
    }

    /**
     * Get the [pectoraloriginx] column value.
     *
     * @return int
     */
    public function getPectoraloriginx()
    {

        return $this->pectoraloriginx;
    }

    /**
     * Get the [pectoraloriginy] column value.
     *
     * @return int
     */
    public function getPectoraloriginy()
    {

        return $this->pectoraloriginy;
    }

    /**
     * Get the [pelvicoriginx] column value.
     *
     * @return int
     */
    public function getPelvicoriginx()
    {

        return $this->pelvicoriginx;
    }

    /**
     * Get the [pelvicoriginy] column value.
     *
     * @return int
     */
    public function getPelvicoriginy()
    {

        return $this->pelvicoriginy;
    }

    /**
     * Get the [flendx] column value.
     *
     * @return int
     */
    public function getFlendx()
    {

        return $this->flendx;
    }

    /**
     * Get the [flendy] column value.
     *
     * @return int
     */
    public function getFlendy()
    {

        return $this->flendy;
    }

    /**
     * Get the [caudalupperx] column value.
     *
     * @return int
     */
    public function getCaudalupperx()
    {

        return $this->caudalupperx;
    }

    /**
     * Get the [caudaluppery] column value.
     *
     * @return int
     */
    public function getCaudaluppery()
    {

        return $this->caudaluppery;
    }

    /**
     * Get the [caudallowerx] column value.
     *
     * @return int
     */
    public function getCaudallowerx()
    {

        return $this->caudallowerx;
    }

    /**
     * Get the [caudallowery] column value.
     *
     * @return int
     */
    public function getCaudallowery()
    {

        return $this->caudallowery;
    }

    /**
     * Get the [aspectratio] column value.
     *
     * @return double
     */
    public function getAspectratio()
    {

        return $this->aspectratio;
    }

    /**
     * Get the [doubtful] column value.
     *
     * @return int
     */
    public function getDoubtful()
    {

        return $this->doubtful;
    }

    /**
     * Get the [remarks] column value.
     *
     * @return string
     */
    public function getRemarks()
    {

        return $this->remarks;
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
     * @return Morphmet The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = MorphmetPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [picname] column.
     *
     * @param  string $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setPicname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->picname !== $v) {
            $this->picname = $v;
            $this->modifiedColumns[] = MorphmetPeer::PICNAME;
        }


        return $this;
    } // setPicname()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = MorphmetPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [tl] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setTl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tl !== $v) {
            $this->tl = $v;
            $this->modifiedColumns[] = MorphmetPeer::TL;
        }


        return $this;
    } // setTl()

    /**
     * Set the value of [sl] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setSl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sl !== $v) {
            $this->sl = $v;
            $this->modifiedColumns[] = MorphmetPeer::SL;
        }


        return $this;
    } // setSl()

    /**
     * Set the value of [fl] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setFl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fl !== $v) {
            $this->fl = $v;
            $this->modifiedColumns[] = MorphmetPeer::FL;
        }


        return $this;
    } // setFl()

    /**
     * Set the value of [hl] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setHl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hl !== $v) {
            $this->hl = $v;
            $this->modifiedColumns[] = MorphmetPeer::HL;
        }


        return $this;
    } // setHl()

    /**
     * Set the value of [pal] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setPal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pal !== $v) {
            $this->pal = $v;
            $this->modifiedColumns[] = MorphmetPeer::PAL;
        }


        return $this;
    } // setPal()

    /**
     * Set the value of [pdl] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setPdl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pdl !== $v) {
            $this->pdl = $v;
            $this->modifiedColumns[] = MorphmetPeer::PDL;
        }


        return $this;
    } // setPdl()

    /**
     * Set the value of [ppl] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setPpl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ppl !== $v) {
            $this->ppl = $v;
            $this->modifiedColumns[] = MorphmetPeer::PPL;
        }


        return $this;
    } // setPpl()

    /**
     * Set the value of [ppel] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setPpel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ppel !== $v) {
            $this->ppel = $v;
            $this->modifiedColumns[] = MorphmetPeer::PPEL;
        }


        return $this;
    } // setPpel()

    /**
     * Set the value of [ed] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setEd($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ed !== $v) {
            $this->ed = $v;
            $this->modifiedColumns[] = MorphmetPeer::ED;
        }


        return $this;
    } // setEd()

    /**
     * Set the value of [pol] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setPol($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pol !== $v) {
            $this->pol = $v;
            $this->modifiedColumns[] = MorphmetPeer::POL;
        }


        return $this;
    } // setPol()

    /**
     * Set the value of [bd] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setBd($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bd !== $v) {
            $this->bd = $v;
            $this->modifiedColumns[] = MorphmetPeer::BD;
        }


        return $this;
    } // setBd()

    /**
     * Set the value of [ch] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setCh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ch !== $v) {
            $this->ch = $v;
            $this->modifiedColumns[] = MorphmetPeer::CH;
        }


        return $this;
    } // setCh()

    /**
     * Set the value of [ca] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setCa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ca !== $v) {
            $this->ca = $v;
            $this->modifiedColumns[] = MorphmetPeer::CA;
        }


        return $this;
    } // setCa()

    /**
     * Set the value of [snouttipx] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setSnouttipx($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->snouttipx !== $v) {
            $this->snouttipx = $v;
            $this->modifiedColumns[] = MorphmetPeer::SNOUTTIPX;
        }


        return $this;
    } // setSnouttipx()

    /**
     * Set the value of [snouttipy] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setSnouttipy($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->snouttipy !== $v) {
            $this->snouttipy = $v;
            $this->modifiedColumns[] = MorphmetPeer::SNOUTTIPY;
        }


        return $this;
    } // setSnouttipy()

    /**
     * Set the value of [caudaloriginx] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setCaudaloriginx($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->caudaloriginx !== $v) {
            $this->caudaloriginx = $v;
            $this->modifiedColumns[] = MorphmetPeer::CAUDALORIGINX;
        }


        return $this;
    } // setCaudaloriginx()

    /**
     * Set the value of [caudaloriginy] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setCaudaloriginy($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->caudaloriginy !== $v) {
            $this->caudaloriginy = $v;
            $this->modifiedColumns[] = MorphmetPeer::CAUDALORIGINY;
        }


        return $this;
    } // setCaudaloriginy()

    /**
     * Set the value of [tlendx] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setTlendx($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tlendx !== $v) {
            $this->tlendx = $v;
            $this->modifiedColumns[] = MorphmetPeer::TLENDX;
        }


        return $this;
    } // setTlendx()

    /**
     * Set the value of [tlendy] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setTlendy($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tlendy !== $v) {
            $this->tlendy = $v;
            $this->modifiedColumns[] = MorphmetPeer::TLENDY;
        }


        return $this;
    } // setTlendy()

    /**
     * Set the value of [dorsaloriginx] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setDorsaloriginx($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dorsaloriginx !== $v) {
            $this->dorsaloriginx = $v;
            $this->modifiedColumns[] = MorphmetPeer::DORSALORIGINX;
        }


        return $this;
    } // setDorsaloriginx()

    /**
     * Set the value of [dorsaloriginy] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setDorsaloriginy($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dorsaloriginy !== $v) {
            $this->dorsaloriginy = $v;
            $this->modifiedColumns[] = MorphmetPeer::DORSALORIGINY;
        }


        return $this;
    } // setDorsaloriginy()

    /**
     * Set the value of [analoriginx] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setAnaloriginx($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->analoriginx !== $v) {
            $this->analoriginx = $v;
            $this->modifiedColumns[] = MorphmetPeer::ANALORIGINX;
        }


        return $this;
    } // setAnaloriginx()

    /**
     * Set the value of [analoriginy] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setAnaloriginy($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->analoriginy !== $v) {
            $this->analoriginy = $v;
            $this->modifiedColumns[] = MorphmetPeer::ANALORIGINY;
        }


        return $this;
    } // setAnaloriginy()

    /**
     * Set the value of [eyefrontx] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setEyefrontx($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eyefrontx !== $v) {
            $this->eyefrontx = $v;
            $this->modifiedColumns[] = MorphmetPeer::EYEFRONTX;
        }


        return $this;
    } // setEyefrontx()

    /**
     * Set the value of [eyefronty] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setEyefronty($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eyefronty !== $v) {
            $this->eyefronty = $v;
            $this->modifiedColumns[] = MorphmetPeer::EYEFRONTY;
        }


        return $this;
    } // setEyefronty()

    /**
     * Set the value of [eyeendx] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setEyeendx($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eyeendx !== $v) {
            $this->eyeendx = $v;
            $this->modifiedColumns[] = MorphmetPeer::EYEENDX;
        }


        return $this;
    } // setEyeendx()

    /**
     * Set the value of [eyeendy] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setEyeendy($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eyeendy !== $v) {
            $this->eyeendy = $v;
            $this->modifiedColumns[] = MorphmetPeer::EYEENDY;
        }


        return $this;
    } // setEyeendy()

    /**
     * Set the value of [opercleendx] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setOpercleendx($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->opercleendx !== $v) {
            $this->opercleendx = $v;
            $this->modifiedColumns[] = MorphmetPeer::OPERCLEENDX;
        }


        return $this;
    } // setOpercleendx()

    /**
     * Set the value of [opercleendy] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setOpercleendy($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->opercleendy !== $v) {
            $this->opercleendy = $v;
            $this->modifiedColumns[] = MorphmetPeer::OPERCLEENDY;
        }


        return $this;
    } // setOpercleendy()

    /**
     * Set the value of [maxdepthdorsalx] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setMaxdepthdorsalx($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->maxdepthdorsalx !== $v) {
            $this->maxdepthdorsalx = $v;
            $this->modifiedColumns[] = MorphmetPeer::MAXDEPTHDORSALX;
        }


        return $this;
    } // setMaxdepthdorsalx()

    /**
     * Set the value of [maxdepthdorsaly] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setMaxdepthdorsaly($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->maxdepthdorsaly !== $v) {
            $this->maxdepthdorsaly = $v;
            $this->modifiedColumns[] = MorphmetPeer::MAXDEPTHDORSALY;
        }


        return $this;
    } // setMaxdepthdorsaly()

    /**
     * Set the value of [maxdepthventralx] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setMaxdepthventralx($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->maxdepthventralx !== $v) {
            $this->maxdepthventralx = $v;
            $this->modifiedColumns[] = MorphmetPeer::MAXDEPTHVENTRALX;
        }


        return $this;
    } // setMaxdepthventralx()

    /**
     * Set the value of [maxdepthventraly] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setMaxdepthventraly($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->maxdepthventraly !== $v) {
            $this->maxdepthventraly = $v;
            $this->modifiedColumns[] = MorphmetPeer::MAXDEPTHVENTRALY;
        }


        return $this;
    } // setMaxdepthventraly()

    /**
     * Set the value of [pectoraloriginx] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setPectoraloriginx($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pectoraloriginx !== $v) {
            $this->pectoraloriginx = $v;
            $this->modifiedColumns[] = MorphmetPeer::PECTORALORIGINX;
        }


        return $this;
    } // setPectoraloriginx()

    /**
     * Set the value of [pectoraloriginy] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setPectoraloriginy($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pectoraloriginy !== $v) {
            $this->pectoraloriginy = $v;
            $this->modifiedColumns[] = MorphmetPeer::PECTORALORIGINY;
        }


        return $this;
    } // setPectoraloriginy()

    /**
     * Set the value of [pelvicoriginx] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setPelvicoriginx($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pelvicoriginx !== $v) {
            $this->pelvicoriginx = $v;
            $this->modifiedColumns[] = MorphmetPeer::PELVICORIGINX;
        }


        return $this;
    } // setPelvicoriginx()

    /**
     * Set the value of [pelvicoriginy] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setPelvicoriginy($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pelvicoriginy !== $v) {
            $this->pelvicoriginy = $v;
            $this->modifiedColumns[] = MorphmetPeer::PELVICORIGINY;
        }


        return $this;
    } // setPelvicoriginy()

    /**
     * Set the value of [flendx] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setFlendx($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->flendx !== $v) {
            $this->flendx = $v;
            $this->modifiedColumns[] = MorphmetPeer::FLENDX;
        }


        return $this;
    } // setFlendx()

    /**
     * Set the value of [flendy] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setFlendy($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->flendy !== $v) {
            $this->flendy = $v;
            $this->modifiedColumns[] = MorphmetPeer::FLENDY;
        }


        return $this;
    } // setFlendy()

    /**
     * Set the value of [caudalupperx] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setCaudalupperx($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->caudalupperx !== $v) {
            $this->caudalupperx = $v;
            $this->modifiedColumns[] = MorphmetPeer::CAUDALUPPERX;
        }


        return $this;
    } // setCaudalupperx()

    /**
     * Set the value of [caudaluppery] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setCaudaluppery($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->caudaluppery !== $v) {
            $this->caudaluppery = $v;
            $this->modifiedColumns[] = MorphmetPeer::CAUDALUPPERY;
        }


        return $this;
    } // setCaudaluppery()

    /**
     * Set the value of [caudallowerx] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setCaudallowerx($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->caudallowerx !== $v) {
            $this->caudallowerx = $v;
            $this->modifiedColumns[] = MorphmetPeer::CAUDALLOWERX;
        }


        return $this;
    } // setCaudallowerx()

    /**
     * Set the value of [caudallowery] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setCaudallowery($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->caudallowery !== $v) {
            $this->caudallowery = $v;
            $this->modifiedColumns[] = MorphmetPeer::CAUDALLOWERY;
        }


        return $this;
    } // setCaudallowery()

    /**
     * Set the value of [aspectratio] column.
     *
     * @param  double $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setAspectratio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->aspectratio !== $v) {
            $this->aspectratio = $v;
            $this->modifiedColumns[] = MorphmetPeer::ASPECTRATIO;
        }


        return $this;
    } // setAspectratio()

    /**
     * Set the value of [doubtful] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setDoubtful($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->doubtful !== $v) {
            $this->doubtful = $v;
            $this->modifiedColumns[] = MorphmetPeer::DOUBTFUL;
        }


        return $this;
    } // setDoubtful()

    /**
     * Set the value of [remarks] column.
     *
     * @param  string $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[] = MorphmetPeer::REMARKS;
        }


        return $this;
    } // setRemarks()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = MorphmetPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Morphmet The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = MorphmetPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = MorphmetPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Morphmet The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = MorphmetPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Morphmet The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = MorphmetPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Morphmet The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = MorphmetPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Morphmet The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = MorphmetPeer::TS;
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
            if ($this->doubtful !== 0) {
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
            $this->picname = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->speccode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->tl = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->sl = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->fl = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->hl = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->pal = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->pdl = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->ppl = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->ppel = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->ed = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->pol = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->bd = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->ch = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->ca = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->snouttipx = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->snouttipy = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->caudaloriginx = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->caudaloriginy = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->tlendx = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->tlendy = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->dorsaloriginx = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->dorsaloriginy = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->analoriginx = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->analoriginy = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->eyefrontx = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->eyefronty = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->eyeendx = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->eyeendy = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->opercleendx = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->opercleendy = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->maxdepthdorsalx = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->maxdepthdorsaly = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->maxdepthventralx = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->maxdepthventraly = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->pectoraloriginx = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->pectoraloriginy = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->pelvicoriginx = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->pelvicoriginy = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->flendx = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->flendy = ($row[$startcol + 41] !== null) ? (int) $row[$startcol + 41] : null;
            $this->caudalupperx = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->caudaluppery = ($row[$startcol + 43] !== null) ? (int) $row[$startcol + 43] : null;
            $this->caudallowerx = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->caudallowery = ($row[$startcol + 45] !== null) ? (int) $row[$startcol + 45] : null;
            $this->aspectratio = ($row[$startcol + 46] !== null) ? (double) $row[$startcol + 46] : null;
            $this->doubtful = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->remarks = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->entered = ($row[$startcol + 49] !== null) ? (int) $row[$startcol + 49] : null;
            $this->dateentered = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->modified = ($row[$startcol + 51] !== null) ? (int) $row[$startcol + 51] : null;
            $this->datemodified = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->expert = ($row[$startcol + 53] !== null) ? (int) $row[$startcol + 53] : null;
            $this->datechecked = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->ts = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 56; // 56 = MorphmetPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Morphmet object", $e);
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
            $con = Propel::getConnection(MorphmetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = MorphmetPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(MorphmetPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = MorphmetQuery::create()
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
            $con = Propel::getConnection(MorphmetPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                MorphmetPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(MorphmetPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(MorphmetPeer::PICNAME)) {
            $modifiedColumns[':p' . $index++]  = '`PicName`';
        }
        if ($this->isColumnModified(MorphmetPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Speccode`';
        }
        if ($this->isColumnModified(MorphmetPeer::TL)) {
            $modifiedColumns[':p' . $index++]  = '`TL`';
        }
        if ($this->isColumnModified(MorphmetPeer::SL)) {
            $modifiedColumns[':p' . $index++]  = '`SL`';
        }
        if ($this->isColumnModified(MorphmetPeer::FL)) {
            $modifiedColumns[':p' . $index++]  = '`FL`';
        }
        if ($this->isColumnModified(MorphmetPeer::HL)) {
            $modifiedColumns[':p' . $index++]  = '`HL`';
        }
        if ($this->isColumnModified(MorphmetPeer::PAL)) {
            $modifiedColumns[':p' . $index++]  = '`PAL`';
        }
        if ($this->isColumnModified(MorphmetPeer::PDL)) {
            $modifiedColumns[':p' . $index++]  = '`PDL`';
        }
        if ($this->isColumnModified(MorphmetPeer::PPL)) {
            $modifiedColumns[':p' . $index++]  = '`PPL`';
        }
        if ($this->isColumnModified(MorphmetPeer::PPEL)) {
            $modifiedColumns[':p' . $index++]  = '`PPEL`';
        }
        if ($this->isColumnModified(MorphmetPeer::ED)) {
            $modifiedColumns[':p' . $index++]  = '`ED`';
        }
        if ($this->isColumnModified(MorphmetPeer::POL)) {
            $modifiedColumns[':p' . $index++]  = '`POL`';
        }
        if ($this->isColumnModified(MorphmetPeer::BD)) {
            $modifiedColumns[':p' . $index++]  = '`BD`';
        }
        if ($this->isColumnModified(MorphmetPeer::CH)) {
            $modifiedColumns[':p' . $index++]  = '`CH`';
        }
        if ($this->isColumnModified(MorphmetPeer::CA)) {
            $modifiedColumns[':p' . $index++]  = '`CA`';
        }
        if ($this->isColumnModified(MorphmetPeer::SNOUTTIPX)) {
            $modifiedColumns[':p' . $index++]  = '`SnoutTipX`';
        }
        if ($this->isColumnModified(MorphmetPeer::SNOUTTIPY)) {
            $modifiedColumns[':p' . $index++]  = '`SnoutTipY`';
        }
        if ($this->isColumnModified(MorphmetPeer::CAUDALORIGINX)) {
            $modifiedColumns[':p' . $index++]  = '`CaudalOriginX`';
        }
        if ($this->isColumnModified(MorphmetPeer::CAUDALORIGINY)) {
            $modifiedColumns[':p' . $index++]  = '`CaudalOriginY`';
        }
        if ($this->isColumnModified(MorphmetPeer::TLENDX)) {
            $modifiedColumns[':p' . $index++]  = '`TLEndX`';
        }
        if ($this->isColumnModified(MorphmetPeer::TLENDY)) {
            $modifiedColumns[':p' . $index++]  = '`TLEndY`';
        }
        if ($this->isColumnModified(MorphmetPeer::DORSALORIGINX)) {
            $modifiedColumns[':p' . $index++]  = '`DorsalOriginX`';
        }
        if ($this->isColumnModified(MorphmetPeer::DORSALORIGINY)) {
            $modifiedColumns[':p' . $index++]  = '`DorsalOriginY`';
        }
        if ($this->isColumnModified(MorphmetPeer::ANALORIGINX)) {
            $modifiedColumns[':p' . $index++]  = '`AnalOriginX`';
        }
        if ($this->isColumnModified(MorphmetPeer::ANALORIGINY)) {
            $modifiedColumns[':p' . $index++]  = '`AnalOriginY`';
        }
        if ($this->isColumnModified(MorphmetPeer::EYEFRONTX)) {
            $modifiedColumns[':p' . $index++]  = '`EyeFrontX`';
        }
        if ($this->isColumnModified(MorphmetPeer::EYEFRONTY)) {
            $modifiedColumns[':p' . $index++]  = '`EyeFrontY`';
        }
        if ($this->isColumnModified(MorphmetPeer::EYEENDX)) {
            $modifiedColumns[':p' . $index++]  = '`EyeEndX`';
        }
        if ($this->isColumnModified(MorphmetPeer::EYEENDY)) {
            $modifiedColumns[':p' . $index++]  = '`EyeEndY`';
        }
        if ($this->isColumnModified(MorphmetPeer::OPERCLEENDX)) {
            $modifiedColumns[':p' . $index++]  = '`OpercleEndX`';
        }
        if ($this->isColumnModified(MorphmetPeer::OPERCLEENDY)) {
            $modifiedColumns[':p' . $index++]  = '`OpercleEndY`';
        }
        if ($this->isColumnModified(MorphmetPeer::MAXDEPTHDORSALX)) {
            $modifiedColumns[':p' . $index++]  = '`MaxDepthDorsalX`';
        }
        if ($this->isColumnModified(MorphmetPeer::MAXDEPTHDORSALY)) {
            $modifiedColumns[':p' . $index++]  = '`MaxDepthDorsalY`';
        }
        if ($this->isColumnModified(MorphmetPeer::MAXDEPTHVENTRALX)) {
            $modifiedColumns[':p' . $index++]  = '`MaxDepthVentralX`';
        }
        if ($this->isColumnModified(MorphmetPeer::MAXDEPTHVENTRALY)) {
            $modifiedColumns[':p' . $index++]  = '`MaxDepthVentralY`';
        }
        if ($this->isColumnModified(MorphmetPeer::PECTORALORIGINX)) {
            $modifiedColumns[':p' . $index++]  = '`PectoralOriginX`';
        }
        if ($this->isColumnModified(MorphmetPeer::PECTORALORIGINY)) {
            $modifiedColumns[':p' . $index++]  = '`PectoralOriginY`';
        }
        if ($this->isColumnModified(MorphmetPeer::PELVICORIGINX)) {
            $modifiedColumns[':p' . $index++]  = '`PelvicOriginX`';
        }
        if ($this->isColumnModified(MorphmetPeer::PELVICORIGINY)) {
            $modifiedColumns[':p' . $index++]  = '`PelvicOriginY`';
        }
        if ($this->isColumnModified(MorphmetPeer::FLENDX)) {
            $modifiedColumns[':p' . $index++]  = '`FLEndX`';
        }
        if ($this->isColumnModified(MorphmetPeer::FLENDY)) {
            $modifiedColumns[':p' . $index++]  = '`FLEndY`';
        }
        if ($this->isColumnModified(MorphmetPeer::CAUDALUPPERX)) {
            $modifiedColumns[':p' . $index++]  = '`CaudalUpperX`';
        }
        if ($this->isColumnModified(MorphmetPeer::CAUDALUPPERY)) {
            $modifiedColumns[':p' . $index++]  = '`CaudalUpperY`';
        }
        if ($this->isColumnModified(MorphmetPeer::CAUDALLOWERX)) {
            $modifiedColumns[':p' . $index++]  = '`CaudalLowerX`';
        }
        if ($this->isColumnModified(MorphmetPeer::CAUDALLOWERY)) {
            $modifiedColumns[':p' . $index++]  = '`CaudalLowerY`';
        }
        if ($this->isColumnModified(MorphmetPeer::ASPECTRATIO)) {
            $modifiedColumns[':p' . $index++]  = '`AspectRatio`';
        }
        if ($this->isColumnModified(MorphmetPeer::DOUBTFUL)) {
            $modifiedColumns[':p' . $index++]  = '`Doubtful`';
        }
        if ($this->isColumnModified(MorphmetPeer::REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`Remarks`';
        }
        if ($this->isColumnModified(MorphmetPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(MorphmetPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(MorphmetPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(MorphmetPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(MorphmetPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(MorphmetPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(MorphmetPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `morphmet` (%s) VALUES (%s)',
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
                    case '`PicName`':
                        $stmt->bindValue($identifier, $this->picname, PDO::PARAM_STR);
                        break;
                    case '`Speccode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`TL`':
                        $stmt->bindValue($identifier, $this->tl, PDO::PARAM_INT);
                        break;
                    case '`SL`':
                        $stmt->bindValue($identifier, $this->sl, PDO::PARAM_INT);
                        break;
                    case '`FL`':
                        $stmt->bindValue($identifier, $this->fl, PDO::PARAM_INT);
                        break;
                    case '`HL`':
                        $stmt->bindValue($identifier, $this->hl, PDO::PARAM_INT);
                        break;
                    case '`PAL`':
                        $stmt->bindValue($identifier, $this->pal, PDO::PARAM_INT);
                        break;
                    case '`PDL`':
                        $stmt->bindValue($identifier, $this->pdl, PDO::PARAM_INT);
                        break;
                    case '`PPL`':
                        $stmt->bindValue($identifier, $this->ppl, PDO::PARAM_INT);
                        break;
                    case '`PPEL`':
                        $stmt->bindValue($identifier, $this->ppel, PDO::PARAM_INT);
                        break;
                    case '`ED`':
                        $stmt->bindValue($identifier, $this->ed, PDO::PARAM_INT);
                        break;
                    case '`POL`':
                        $stmt->bindValue($identifier, $this->pol, PDO::PARAM_INT);
                        break;
                    case '`BD`':
                        $stmt->bindValue($identifier, $this->bd, PDO::PARAM_INT);
                        break;
                    case '`CH`':
                        $stmt->bindValue($identifier, $this->ch, PDO::PARAM_INT);
                        break;
                    case '`CA`':
                        $stmt->bindValue($identifier, $this->ca, PDO::PARAM_INT);
                        break;
                    case '`SnoutTipX`':
                        $stmt->bindValue($identifier, $this->snouttipx, PDO::PARAM_INT);
                        break;
                    case '`SnoutTipY`':
                        $stmt->bindValue($identifier, $this->snouttipy, PDO::PARAM_INT);
                        break;
                    case '`CaudalOriginX`':
                        $stmt->bindValue($identifier, $this->caudaloriginx, PDO::PARAM_INT);
                        break;
                    case '`CaudalOriginY`':
                        $stmt->bindValue($identifier, $this->caudaloriginy, PDO::PARAM_INT);
                        break;
                    case '`TLEndX`':
                        $stmt->bindValue($identifier, $this->tlendx, PDO::PARAM_INT);
                        break;
                    case '`TLEndY`':
                        $stmt->bindValue($identifier, $this->tlendy, PDO::PARAM_INT);
                        break;
                    case '`DorsalOriginX`':
                        $stmt->bindValue($identifier, $this->dorsaloriginx, PDO::PARAM_INT);
                        break;
                    case '`DorsalOriginY`':
                        $stmt->bindValue($identifier, $this->dorsaloriginy, PDO::PARAM_INT);
                        break;
                    case '`AnalOriginX`':
                        $stmt->bindValue($identifier, $this->analoriginx, PDO::PARAM_INT);
                        break;
                    case '`AnalOriginY`':
                        $stmt->bindValue($identifier, $this->analoriginy, PDO::PARAM_INT);
                        break;
                    case '`EyeFrontX`':
                        $stmt->bindValue($identifier, $this->eyefrontx, PDO::PARAM_INT);
                        break;
                    case '`EyeFrontY`':
                        $stmt->bindValue($identifier, $this->eyefronty, PDO::PARAM_INT);
                        break;
                    case '`EyeEndX`':
                        $stmt->bindValue($identifier, $this->eyeendx, PDO::PARAM_INT);
                        break;
                    case '`EyeEndY`':
                        $stmt->bindValue($identifier, $this->eyeendy, PDO::PARAM_INT);
                        break;
                    case '`OpercleEndX`':
                        $stmt->bindValue($identifier, $this->opercleendx, PDO::PARAM_INT);
                        break;
                    case '`OpercleEndY`':
                        $stmt->bindValue($identifier, $this->opercleendy, PDO::PARAM_INT);
                        break;
                    case '`MaxDepthDorsalX`':
                        $stmt->bindValue($identifier, $this->maxdepthdorsalx, PDO::PARAM_INT);
                        break;
                    case '`MaxDepthDorsalY`':
                        $stmt->bindValue($identifier, $this->maxdepthdorsaly, PDO::PARAM_INT);
                        break;
                    case '`MaxDepthVentralX`':
                        $stmt->bindValue($identifier, $this->maxdepthventralx, PDO::PARAM_INT);
                        break;
                    case '`MaxDepthVentralY`':
                        $stmt->bindValue($identifier, $this->maxdepthventraly, PDO::PARAM_INT);
                        break;
                    case '`PectoralOriginX`':
                        $stmt->bindValue($identifier, $this->pectoraloriginx, PDO::PARAM_INT);
                        break;
                    case '`PectoralOriginY`':
                        $stmt->bindValue($identifier, $this->pectoraloriginy, PDO::PARAM_INT);
                        break;
                    case '`PelvicOriginX`':
                        $stmt->bindValue($identifier, $this->pelvicoriginx, PDO::PARAM_INT);
                        break;
                    case '`PelvicOriginY`':
                        $stmt->bindValue($identifier, $this->pelvicoriginy, PDO::PARAM_INT);
                        break;
                    case '`FLEndX`':
                        $stmt->bindValue($identifier, $this->flendx, PDO::PARAM_INT);
                        break;
                    case '`FLEndY`':
                        $stmt->bindValue($identifier, $this->flendy, PDO::PARAM_INT);
                        break;
                    case '`CaudalUpperX`':
                        $stmt->bindValue($identifier, $this->caudalupperx, PDO::PARAM_INT);
                        break;
                    case '`CaudalUpperY`':
                        $stmt->bindValue($identifier, $this->caudaluppery, PDO::PARAM_INT);
                        break;
                    case '`CaudalLowerX`':
                        $stmt->bindValue($identifier, $this->caudallowerx, PDO::PARAM_INT);
                        break;
                    case '`CaudalLowerY`':
                        $stmt->bindValue($identifier, $this->caudallowery, PDO::PARAM_INT);
                        break;
                    case '`AspectRatio`':
                        $stmt->bindValue($identifier, $this->aspectratio, PDO::PARAM_STR);
                        break;
                    case '`Doubtful`':
                        $stmt->bindValue($identifier, $this->doubtful, PDO::PARAM_INT);
                        break;
                    case '`Remarks`':
                        $stmt->bindValue($identifier, $this->remarks, PDO::PARAM_STR);
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
        $this->setPicname($pk);

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


            if (($retval = MorphmetPeer::doValidate($this, $columns)) !== true) {
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
        $pos = MorphmetPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getPicname();
                break;
            case 2:
                return $this->getSpeccode();
                break;
            case 3:
                return $this->getTl();
                break;
            case 4:
                return $this->getSl();
                break;
            case 5:
                return $this->getFl();
                break;
            case 6:
                return $this->getHl();
                break;
            case 7:
                return $this->getPal();
                break;
            case 8:
                return $this->getPdl();
                break;
            case 9:
                return $this->getPpl();
                break;
            case 10:
                return $this->getPpel();
                break;
            case 11:
                return $this->getEd();
                break;
            case 12:
                return $this->getPol();
                break;
            case 13:
                return $this->getBd();
                break;
            case 14:
                return $this->getCh();
                break;
            case 15:
                return $this->getCa();
                break;
            case 16:
                return $this->getSnouttipx();
                break;
            case 17:
                return $this->getSnouttipy();
                break;
            case 18:
                return $this->getCaudaloriginx();
                break;
            case 19:
                return $this->getCaudaloriginy();
                break;
            case 20:
                return $this->getTlendx();
                break;
            case 21:
                return $this->getTlendy();
                break;
            case 22:
                return $this->getDorsaloriginx();
                break;
            case 23:
                return $this->getDorsaloriginy();
                break;
            case 24:
                return $this->getAnaloriginx();
                break;
            case 25:
                return $this->getAnaloriginy();
                break;
            case 26:
                return $this->getEyefrontx();
                break;
            case 27:
                return $this->getEyefronty();
                break;
            case 28:
                return $this->getEyeendx();
                break;
            case 29:
                return $this->getEyeendy();
                break;
            case 30:
                return $this->getOpercleendx();
                break;
            case 31:
                return $this->getOpercleendy();
                break;
            case 32:
                return $this->getMaxdepthdorsalx();
                break;
            case 33:
                return $this->getMaxdepthdorsaly();
                break;
            case 34:
                return $this->getMaxdepthventralx();
                break;
            case 35:
                return $this->getMaxdepthventraly();
                break;
            case 36:
                return $this->getPectoraloriginx();
                break;
            case 37:
                return $this->getPectoraloriginy();
                break;
            case 38:
                return $this->getPelvicoriginx();
                break;
            case 39:
                return $this->getPelvicoriginy();
                break;
            case 40:
                return $this->getFlendx();
                break;
            case 41:
                return $this->getFlendy();
                break;
            case 42:
                return $this->getCaudalupperx();
                break;
            case 43:
                return $this->getCaudaluppery();
                break;
            case 44:
                return $this->getCaudallowerx();
                break;
            case 45:
                return $this->getCaudallowery();
                break;
            case 46:
                return $this->getAspectratio();
                break;
            case 47:
                return $this->getDoubtful();
                break;
            case 48:
                return $this->getRemarks();
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
            case 55:
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
        if (isset($alreadyDumpedObjects['Morphmet'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Morphmet'][$this->getPrimaryKey()] = true;
        $keys = MorphmetPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getPicname(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getTl(),
            $keys[4] => $this->getSl(),
            $keys[5] => $this->getFl(),
            $keys[6] => $this->getHl(),
            $keys[7] => $this->getPal(),
            $keys[8] => $this->getPdl(),
            $keys[9] => $this->getPpl(),
            $keys[10] => $this->getPpel(),
            $keys[11] => $this->getEd(),
            $keys[12] => $this->getPol(),
            $keys[13] => $this->getBd(),
            $keys[14] => $this->getCh(),
            $keys[15] => $this->getCa(),
            $keys[16] => $this->getSnouttipx(),
            $keys[17] => $this->getSnouttipy(),
            $keys[18] => $this->getCaudaloriginx(),
            $keys[19] => $this->getCaudaloriginy(),
            $keys[20] => $this->getTlendx(),
            $keys[21] => $this->getTlendy(),
            $keys[22] => $this->getDorsaloriginx(),
            $keys[23] => $this->getDorsaloriginy(),
            $keys[24] => $this->getAnaloriginx(),
            $keys[25] => $this->getAnaloriginy(),
            $keys[26] => $this->getEyefrontx(),
            $keys[27] => $this->getEyefronty(),
            $keys[28] => $this->getEyeendx(),
            $keys[29] => $this->getEyeendy(),
            $keys[30] => $this->getOpercleendx(),
            $keys[31] => $this->getOpercleendy(),
            $keys[32] => $this->getMaxdepthdorsalx(),
            $keys[33] => $this->getMaxdepthdorsaly(),
            $keys[34] => $this->getMaxdepthventralx(),
            $keys[35] => $this->getMaxdepthventraly(),
            $keys[36] => $this->getPectoraloriginx(),
            $keys[37] => $this->getPectoraloriginy(),
            $keys[38] => $this->getPelvicoriginx(),
            $keys[39] => $this->getPelvicoriginy(),
            $keys[40] => $this->getFlendx(),
            $keys[41] => $this->getFlendy(),
            $keys[42] => $this->getCaudalupperx(),
            $keys[43] => $this->getCaudaluppery(),
            $keys[44] => $this->getCaudallowerx(),
            $keys[45] => $this->getCaudallowery(),
            $keys[46] => $this->getAspectratio(),
            $keys[47] => $this->getDoubtful(),
            $keys[48] => $this->getRemarks(),
            $keys[49] => $this->getEntered(),
            $keys[50] => $this->getDateentered(),
            $keys[51] => $this->getModified(),
            $keys[52] => $this->getDatemodified(),
            $keys[53] => $this->getExpert(),
            $keys[54] => $this->getDatechecked(),
            $keys[55] => $this->getTs(),
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
        $pos = MorphmetPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setPicname($value);
                break;
            case 2:
                $this->setSpeccode($value);
                break;
            case 3:
                $this->setTl($value);
                break;
            case 4:
                $this->setSl($value);
                break;
            case 5:
                $this->setFl($value);
                break;
            case 6:
                $this->setHl($value);
                break;
            case 7:
                $this->setPal($value);
                break;
            case 8:
                $this->setPdl($value);
                break;
            case 9:
                $this->setPpl($value);
                break;
            case 10:
                $this->setPpel($value);
                break;
            case 11:
                $this->setEd($value);
                break;
            case 12:
                $this->setPol($value);
                break;
            case 13:
                $this->setBd($value);
                break;
            case 14:
                $this->setCh($value);
                break;
            case 15:
                $this->setCa($value);
                break;
            case 16:
                $this->setSnouttipx($value);
                break;
            case 17:
                $this->setSnouttipy($value);
                break;
            case 18:
                $this->setCaudaloriginx($value);
                break;
            case 19:
                $this->setCaudaloriginy($value);
                break;
            case 20:
                $this->setTlendx($value);
                break;
            case 21:
                $this->setTlendy($value);
                break;
            case 22:
                $this->setDorsaloriginx($value);
                break;
            case 23:
                $this->setDorsaloriginy($value);
                break;
            case 24:
                $this->setAnaloriginx($value);
                break;
            case 25:
                $this->setAnaloriginy($value);
                break;
            case 26:
                $this->setEyefrontx($value);
                break;
            case 27:
                $this->setEyefronty($value);
                break;
            case 28:
                $this->setEyeendx($value);
                break;
            case 29:
                $this->setEyeendy($value);
                break;
            case 30:
                $this->setOpercleendx($value);
                break;
            case 31:
                $this->setOpercleendy($value);
                break;
            case 32:
                $this->setMaxdepthdorsalx($value);
                break;
            case 33:
                $this->setMaxdepthdorsaly($value);
                break;
            case 34:
                $this->setMaxdepthventralx($value);
                break;
            case 35:
                $this->setMaxdepthventraly($value);
                break;
            case 36:
                $this->setPectoraloriginx($value);
                break;
            case 37:
                $this->setPectoraloriginy($value);
                break;
            case 38:
                $this->setPelvicoriginx($value);
                break;
            case 39:
                $this->setPelvicoriginy($value);
                break;
            case 40:
                $this->setFlendx($value);
                break;
            case 41:
                $this->setFlendy($value);
                break;
            case 42:
                $this->setCaudalupperx($value);
                break;
            case 43:
                $this->setCaudaluppery($value);
                break;
            case 44:
                $this->setCaudallowerx($value);
                break;
            case 45:
                $this->setCaudallowery($value);
                break;
            case 46:
                $this->setAspectratio($value);
                break;
            case 47:
                $this->setDoubtful($value);
                break;
            case 48:
                $this->setRemarks($value);
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
            case 55:
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
        $keys = MorphmetPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setPicname($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTl($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSl($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setFl($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setHl($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPal($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPdl($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPpl($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPpel($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setEd($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setPol($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setBd($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setCh($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setCa($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setSnouttipx($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setSnouttipy($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setCaudaloriginx($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setCaudaloriginy($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setTlendx($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setTlendy($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDorsaloriginx($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDorsaloriginy($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setAnaloriginx($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setAnaloriginy($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setEyefrontx($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setEyefronty($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setEyeendx($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setEyeendy($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setOpercleendx($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setOpercleendy($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setMaxdepthdorsalx($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setMaxdepthdorsaly($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setMaxdepthventralx($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setMaxdepthventraly($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setPectoraloriginx($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setPectoraloriginy($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setPelvicoriginx($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setPelvicoriginy($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setFlendx($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setFlendy($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setCaudalupperx($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setCaudaluppery($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setCaudallowerx($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setCaudallowery($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setAspectratio($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setDoubtful($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setRemarks($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setEntered($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setDateentered($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setModified($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setDatemodified($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setExpert($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setDatechecked($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setTs($arr[$keys[55]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(MorphmetPeer::DATABASE_NAME);

        if ($this->isColumnModified(MorphmetPeer::AUTOCTR)) $criteria->add(MorphmetPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(MorphmetPeer::PICNAME)) $criteria->add(MorphmetPeer::PICNAME, $this->picname);
        if ($this->isColumnModified(MorphmetPeer::SPECCODE)) $criteria->add(MorphmetPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(MorphmetPeer::TL)) $criteria->add(MorphmetPeer::TL, $this->tl);
        if ($this->isColumnModified(MorphmetPeer::SL)) $criteria->add(MorphmetPeer::SL, $this->sl);
        if ($this->isColumnModified(MorphmetPeer::FL)) $criteria->add(MorphmetPeer::FL, $this->fl);
        if ($this->isColumnModified(MorphmetPeer::HL)) $criteria->add(MorphmetPeer::HL, $this->hl);
        if ($this->isColumnModified(MorphmetPeer::PAL)) $criteria->add(MorphmetPeer::PAL, $this->pal);
        if ($this->isColumnModified(MorphmetPeer::PDL)) $criteria->add(MorphmetPeer::PDL, $this->pdl);
        if ($this->isColumnModified(MorphmetPeer::PPL)) $criteria->add(MorphmetPeer::PPL, $this->ppl);
        if ($this->isColumnModified(MorphmetPeer::PPEL)) $criteria->add(MorphmetPeer::PPEL, $this->ppel);
        if ($this->isColumnModified(MorphmetPeer::ED)) $criteria->add(MorphmetPeer::ED, $this->ed);
        if ($this->isColumnModified(MorphmetPeer::POL)) $criteria->add(MorphmetPeer::POL, $this->pol);
        if ($this->isColumnModified(MorphmetPeer::BD)) $criteria->add(MorphmetPeer::BD, $this->bd);
        if ($this->isColumnModified(MorphmetPeer::CH)) $criteria->add(MorphmetPeer::CH, $this->ch);
        if ($this->isColumnModified(MorphmetPeer::CA)) $criteria->add(MorphmetPeer::CA, $this->ca);
        if ($this->isColumnModified(MorphmetPeer::SNOUTTIPX)) $criteria->add(MorphmetPeer::SNOUTTIPX, $this->snouttipx);
        if ($this->isColumnModified(MorphmetPeer::SNOUTTIPY)) $criteria->add(MorphmetPeer::SNOUTTIPY, $this->snouttipy);
        if ($this->isColumnModified(MorphmetPeer::CAUDALORIGINX)) $criteria->add(MorphmetPeer::CAUDALORIGINX, $this->caudaloriginx);
        if ($this->isColumnModified(MorphmetPeer::CAUDALORIGINY)) $criteria->add(MorphmetPeer::CAUDALORIGINY, $this->caudaloriginy);
        if ($this->isColumnModified(MorphmetPeer::TLENDX)) $criteria->add(MorphmetPeer::TLENDX, $this->tlendx);
        if ($this->isColumnModified(MorphmetPeer::TLENDY)) $criteria->add(MorphmetPeer::TLENDY, $this->tlendy);
        if ($this->isColumnModified(MorphmetPeer::DORSALORIGINX)) $criteria->add(MorphmetPeer::DORSALORIGINX, $this->dorsaloriginx);
        if ($this->isColumnModified(MorphmetPeer::DORSALORIGINY)) $criteria->add(MorphmetPeer::DORSALORIGINY, $this->dorsaloriginy);
        if ($this->isColumnModified(MorphmetPeer::ANALORIGINX)) $criteria->add(MorphmetPeer::ANALORIGINX, $this->analoriginx);
        if ($this->isColumnModified(MorphmetPeer::ANALORIGINY)) $criteria->add(MorphmetPeer::ANALORIGINY, $this->analoriginy);
        if ($this->isColumnModified(MorphmetPeer::EYEFRONTX)) $criteria->add(MorphmetPeer::EYEFRONTX, $this->eyefrontx);
        if ($this->isColumnModified(MorphmetPeer::EYEFRONTY)) $criteria->add(MorphmetPeer::EYEFRONTY, $this->eyefronty);
        if ($this->isColumnModified(MorphmetPeer::EYEENDX)) $criteria->add(MorphmetPeer::EYEENDX, $this->eyeendx);
        if ($this->isColumnModified(MorphmetPeer::EYEENDY)) $criteria->add(MorphmetPeer::EYEENDY, $this->eyeendy);
        if ($this->isColumnModified(MorphmetPeer::OPERCLEENDX)) $criteria->add(MorphmetPeer::OPERCLEENDX, $this->opercleendx);
        if ($this->isColumnModified(MorphmetPeer::OPERCLEENDY)) $criteria->add(MorphmetPeer::OPERCLEENDY, $this->opercleendy);
        if ($this->isColumnModified(MorphmetPeer::MAXDEPTHDORSALX)) $criteria->add(MorphmetPeer::MAXDEPTHDORSALX, $this->maxdepthdorsalx);
        if ($this->isColumnModified(MorphmetPeer::MAXDEPTHDORSALY)) $criteria->add(MorphmetPeer::MAXDEPTHDORSALY, $this->maxdepthdorsaly);
        if ($this->isColumnModified(MorphmetPeer::MAXDEPTHVENTRALX)) $criteria->add(MorphmetPeer::MAXDEPTHVENTRALX, $this->maxdepthventralx);
        if ($this->isColumnModified(MorphmetPeer::MAXDEPTHVENTRALY)) $criteria->add(MorphmetPeer::MAXDEPTHVENTRALY, $this->maxdepthventraly);
        if ($this->isColumnModified(MorphmetPeer::PECTORALORIGINX)) $criteria->add(MorphmetPeer::PECTORALORIGINX, $this->pectoraloriginx);
        if ($this->isColumnModified(MorphmetPeer::PECTORALORIGINY)) $criteria->add(MorphmetPeer::PECTORALORIGINY, $this->pectoraloriginy);
        if ($this->isColumnModified(MorphmetPeer::PELVICORIGINX)) $criteria->add(MorphmetPeer::PELVICORIGINX, $this->pelvicoriginx);
        if ($this->isColumnModified(MorphmetPeer::PELVICORIGINY)) $criteria->add(MorphmetPeer::PELVICORIGINY, $this->pelvicoriginy);
        if ($this->isColumnModified(MorphmetPeer::FLENDX)) $criteria->add(MorphmetPeer::FLENDX, $this->flendx);
        if ($this->isColumnModified(MorphmetPeer::FLENDY)) $criteria->add(MorphmetPeer::FLENDY, $this->flendy);
        if ($this->isColumnModified(MorphmetPeer::CAUDALUPPERX)) $criteria->add(MorphmetPeer::CAUDALUPPERX, $this->caudalupperx);
        if ($this->isColumnModified(MorphmetPeer::CAUDALUPPERY)) $criteria->add(MorphmetPeer::CAUDALUPPERY, $this->caudaluppery);
        if ($this->isColumnModified(MorphmetPeer::CAUDALLOWERX)) $criteria->add(MorphmetPeer::CAUDALLOWERX, $this->caudallowerx);
        if ($this->isColumnModified(MorphmetPeer::CAUDALLOWERY)) $criteria->add(MorphmetPeer::CAUDALLOWERY, $this->caudallowery);
        if ($this->isColumnModified(MorphmetPeer::ASPECTRATIO)) $criteria->add(MorphmetPeer::ASPECTRATIO, $this->aspectratio);
        if ($this->isColumnModified(MorphmetPeer::DOUBTFUL)) $criteria->add(MorphmetPeer::DOUBTFUL, $this->doubtful);
        if ($this->isColumnModified(MorphmetPeer::REMARKS)) $criteria->add(MorphmetPeer::REMARKS, $this->remarks);
        if ($this->isColumnModified(MorphmetPeer::ENTERED)) $criteria->add(MorphmetPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(MorphmetPeer::DATEENTERED)) $criteria->add(MorphmetPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(MorphmetPeer::MODIFIED)) $criteria->add(MorphmetPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(MorphmetPeer::DATEMODIFIED)) $criteria->add(MorphmetPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(MorphmetPeer::EXPERT)) $criteria->add(MorphmetPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(MorphmetPeer::DATECHECKED)) $criteria->add(MorphmetPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(MorphmetPeer::TS)) $criteria->add(MorphmetPeer::TS, $this->ts);

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
        $criteria = new Criteria(MorphmetPeer::DATABASE_NAME);
        $criteria->add(MorphmetPeer::PICNAME, $this->picname);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getPicname();
    }

    /**
     * Generic method to set the primary key (picname column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setPicname($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getPicname();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Morphmet (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setAutoctr($this->getAutoctr());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setTl($this->getTl());
        $copyObj->setSl($this->getSl());
        $copyObj->setFl($this->getFl());
        $copyObj->setHl($this->getHl());
        $copyObj->setPal($this->getPal());
        $copyObj->setPdl($this->getPdl());
        $copyObj->setPpl($this->getPpl());
        $copyObj->setPpel($this->getPpel());
        $copyObj->setEd($this->getEd());
        $copyObj->setPol($this->getPol());
        $copyObj->setBd($this->getBd());
        $copyObj->setCh($this->getCh());
        $copyObj->setCa($this->getCa());
        $copyObj->setSnouttipx($this->getSnouttipx());
        $copyObj->setSnouttipy($this->getSnouttipy());
        $copyObj->setCaudaloriginx($this->getCaudaloriginx());
        $copyObj->setCaudaloriginy($this->getCaudaloriginy());
        $copyObj->setTlendx($this->getTlendx());
        $copyObj->setTlendy($this->getTlendy());
        $copyObj->setDorsaloriginx($this->getDorsaloriginx());
        $copyObj->setDorsaloriginy($this->getDorsaloriginy());
        $copyObj->setAnaloriginx($this->getAnaloriginx());
        $copyObj->setAnaloriginy($this->getAnaloriginy());
        $copyObj->setEyefrontx($this->getEyefrontx());
        $copyObj->setEyefronty($this->getEyefronty());
        $copyObj->setEyeendx($this->getEyeendx());
        $copyObj->setEyeendy($this->getEyeendy());
        $copyObj->setOpercleendx($this->getOpercleendx());
        $copyObj->setOpercleendy($this->getOpercleendy());
        $copyObj->setMaxdepthdorsalx($this->getMaxdepthdorsalx());
        $copyObj->setMaxdepthdorsaly($this->getMaxdepthdorsaly());
        $copyObj->setMaxdepthventralx($this->getMaxdepthventralx());
        $copyObj->setMaxdepthventraly($this->getMaxdepthventraly());
        $copyObj->setPectoraloriginx($this->getPectoraloriginx());
        $copyObj->setPectoraloriginy($this->getPectoraloriginy());
        $copyObj->setPelvicoriginx($this->getPelvicoriginx());
        $copyObj->setPelvicoriginy($this->getPelvicoriginy());
        $copyObj->setFlendx($this->getFlendx());
        $copyObj->setFlendy($this->getFlendy());
        $copyObj->setCaudalupperx($this->getCaudalupperx());
        $copyObj->setCaudaluppery($this->getCaudaluppery());
        $copyObj->setCaudallowerx($this->getCaudallowerx());
        $copyObj->setCaudallowery($this->getCaudallowery());
        $copyObj->setAspectratio($this->getAspectratio());
        $copyObj->setDoubtful($this->getDoubtful());
        $copyObj->setRemarks($this->getRemarks());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setPicname(NULL); // this is a auto-increment column, so set to default value
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
     * @return Morphmet Clone of current object.
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
     * @return MorphmetPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new MorphmetPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->picname = null;
        $this->speccode = null;
        $this->tl = null;
        $this->sl = null;
        $this->fl = null;
        $this->hl = null;
        $this->pal = null;
        $this->pdl = null;
        $this->ppl = null;
        $this->ppel = null;
        $this->ed = null;
        $this->pol = null;
        $this->bd = null;
        $this->ch = null;
        $this->ca = null;
        $this->snouttipx = null;
        $this->snouttipy = null;
        $this->caudaloriginx = null;
        $this->caudaloriginy = null;
        $this->tlendx = null;
        $this->tlendy = null;
        $this->dorsaloriginx = null;
        $this->dorsaloriginy = null;
        $this->analoriginx = null;
        $this->analoriginy = null;
        $this->eyefrontx = null;
        $this->eyefronty = null;
        $this->eyeendx = null;
        $this->eyeendy = null;
        $this->opercleendx = null;
        $this->opercleendy = null;
        $this->maxdepthdorsalx = null;
        $this->maxdepthdorsaly = null;
        $this->maxdepthventralx = null;
        $this->maxdepthventraly = null;
        $this->pectoraloriginx = null;
        $this->pectoraloriginy = null;
        $this->pelvicoriginx = null;
        $this->pelvicoriginy = null;
        $this->flendx = null;
        $this->flendy = null;
        $this->caudalupperx = null;
        $this->caudaluppery = null;
        $this->caudallowerx = null;
        $this->caudallowery = null;
        $this->aspectratio = null;
        $this->doubtful = null;
        $this->remarks = null;
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
        return (string) $this->exportTo(MorphmetPeer::DEFAULT_STRING_FORMAT);
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
