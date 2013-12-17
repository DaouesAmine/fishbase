<?php


/**
 * Base class that represents a row from the 'estimate' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseEstimate extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EstimatePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EstimatePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the speccode field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the maxlengthtl field.
     * @var        double
     */
    protected $maxlengthtl;

    /**
     * The value for the tlobserved field.
     * @var        string
     */
    protected $tlobserved;

    /**
     * The value for the troph field.
     * @var        double
     */
    protected $troph;

    /**
     * The value for the setroph field.
     * @var        double
     */
    protected $setroph;

    /**
     * The value for the trophobserved field.
     * @var        string
     */
    protected $trophobserved;

    /**
     * The value for the trophpredicted field.
     * @var        double
     */
    protected $trophpredicted;

    /**
     * The value for the setrophpredicted field.
     * @var        double
     */
    protected $setrophpredicted;

    /**
     * The value for the a field.
     * @var        double
     */
    protected $a;

    /**
     * The value for the sd_log10a field.
     * @var        double
     */
    protected $sd_log10a;

    /**
     * The value for the b field.
     * @var        double
     */
    protected $b;

    /**
     * The value for the sd_b field.
     * @var        double
     */
    protected $sd_b;

    /**
     * The value for the method_ab field.
     * @var        string
     */
    protected $method_ab;

    /**
     * The value for the k field.
     * @var        double
     */
    protected $k;

    /**
     * The value for the sd_logk field.
     * @var        double
     */
    protected $sd_logk;

    /**
     * The value for the linf field.
     * @var        double
     */
    protected $linf;

    /**
     * The value for the sd_loglinf field.
     * @var        double
     */
    protected $sd_loglinf;

    /**
     * The value for the lengthtype field.
     * @var        string
     */
    protected $lengthtype;

    /**
     * The value for the comdepthmin field.
     * @var        int
     */
    protected $comdepthmin;

    /**
     * The value for the comdepthmax field.
     * @var        int
     */
    protected $comdepthmax;

    /**
     * The value for the comdepminobserved field.
     * @var        string
     */
    protected $comdepminobserved;

    /**
     * The value for the comdepmaxobserved field.
     * @var        string
     */
    protected $comdepmaxobserved;

    /**
     * The value for the depthmin field.
     * @var        int
     */
    protected $depthmin;

    /**
     * The value for the depthmax field.
     * @var        int
     */
    protected $depthmax;

    /**
     * The value for the depthminestimate field.
     * @var        string
     */
    protected $depthminestimate;

    /**
     * The value for the depthmaxestimate field.
     * @var        string
     */
    protected $depthmaxestimate;

    /**
     * The value for the lastmodified field.
     * @var        string
     */
    protected $lastmodified;

    /**
     * The value for the maxlengthsl field.
     * @var        double
     */
    protected $maxlengthsl;

    /**
     * The value for the kobserved field.
     * @var        string
     */
    protected $kobserved;

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
        $this->speccode = 0;
    }

    /**
     * Initializes internal state of BaseEstimate object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [maxlengthtl] column value.
     *
     * @return double
     */
    public function getMaxlengthtl()
    {

        return $this->maxlengthtl;
    }

    /**
     * Get the [tlobserved] column value.
     *
     * @return string
     */
    public function getTlobserved()
    {

        return $this->tlobserved;
    }

    /**
     * Get the [troph] column value.
     *
     * @return double
     */
    public function getTroph()
    {

        return $this->troph;
    }

    /**
     * Get the [setroph] column value.
     *
     * @return double
     */
    public function getSetroph()
    {

        return $this->setroph;
    }

    /**
     * Get the [trophobserved] column value.
     *
     * @return string
     */
    public function getTrophobserved()
    {

        return $this->trophobserved;
    }

    /**
     * Get the [trophpredicted] column value.
     *
     * @return double
     */
    public function getTrophpredicted()
    {

        return $this->trophpredicted;
    }

    /**
     * Get the [setrophpredicted] column value.
     *
     * @return double
     */
    public function getSetrophpredicted()
    {

        return $this->setrophpredicted;
    }

    /**
     * Get the [a] column value.
     *
     * @return double
     */
    public function getA()
    {

        return $this->a;
    }

    /**
     * Get the [sd_log10a] column value.
     *
     * @return double
     */
    public function getSdLog10a()
    {

        return $this->sd_log10a;
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
     * Get the [sd_b] column value.
     *
     * @return double
     */
    public function getSdB()
    {

        return $this->sd_b;
    }

    /**
     * Get the [method_ab] column value.
     *
     * @return string
     */
    public function getMethodAb()
    {

        return $this->method_ab;
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
     * Get the [sd_logk] column value.
     *
     * @return double
     */
    public function getSdLogk()
    {

        return $this->sd_logk;
    }

    /**
     * Get the [linf] column value.
     *
     * @return double
     */
    public function getLinf()
    {

        return $this->linf;
    }

    /**
     * Get the [sd_loglinf] column value.
     *
     * @return double
     */
    public function getSdLoglinf()
    {

        return $this->sd_loglinf;
    }

    /**
     * Get the [lengthtype] column value.
     *
     * @return string
     */
    public function getLengthtype()
    {

        return $this->lengthtype;
    }

    /**
     * Get the [comdepthmin] column value.
     *
     * @return int
     */
    public function getComdepthmin()
    {

        return $this->comdepthmin;
    }

    /**
     * Get the [comdepthmax] column value.
     *
     * @return int
     */
    public function getComdepthmax()
    {

        return $this->comdepthmax;
    }

    /**
     * Get the [comdepminobserved] column value.
     *
     * @return string
     */
    public function getComdepminobserved()
    {

        return $this->comdepminobserved;
    }

    /**
     * Get the [comdepmaxobserved] column value.
     *
     * @return string
     */
    public function getComdepmaxobserved()
    {

        return $this->comdepmaxobserved;
    }

    /**
     * Get the [depthmin] column value.
     *
     * @return int
     */
    public function getDepthmin()
    {

        return $this->depthmin;
    }

    /**
     * Get the [depthmax] column value.
     *
     * @return int
     */
    public function getDepthmax()
    {

        return $this->depthmax;
    }

    /**
     * Get the [depthminestimate] column value.
     *
     * @return string
     */
    public function getDepthminestimate()
    {

        return $this->depthminestimate;
    }

    /**
     * Get the [depthmaxestimate] column value.
     *
     * @return string
     */
    public function getDepthmaxestimate()
    {

        return $this->depthmaxestimate;
    }

    /**
     * Get the [optionally formatted] temporal [lastmodified] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getLastmodified($format = 'Y-m-d H:i:s')
    {
        if ($this->lastmodified === null) {
            return null;
        }

        if ($this->lastmodified === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->lastmodified);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->lastmodified, true), $x);
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
     * Get the [maxlengthsl] column value.
     *
     * @return double
     */
    public function getMaxlengthsl()
    {

        return $this->maxlengthsl;
    }

    /**
     * Get the [kobserved] column value.
     *
     * @return string
     */
    public function getKobserved()
    {

        return $this->kobserved;
    }

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = EstimatePeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [maxlengthtl] column.
     *
     * @param  double $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setMaxlengthtl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->maxlengthtl !== $v) {
            $this->maxlengthtl = $v;
            $this->modifiedColumns[] = EstimatePeer::MAXLENGTHTL;
        }


        return $this;
    } // setMaxlengthtl()

    /**
     * Set the value of [tlobserved] column.
     *
     * @param  string $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setTlobserved($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tlobserved !== $v) {
            $this->tlobserved = $v;
            $this->modifiedColumns[] = EstimatePeer::TLOBSERVED;
        }


        return $this;
    } // setTlobserved()

    /**
     * Set the value of [troph] column.
     *
     * @param  double $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setTroph($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->troph !== $v) {
            $this->troph = $v;
            $this->modifiedColumns[] = EstimatePeer::TROPH;
        }


        return $this;
    } // setTroph()

    /**
     * Set the value of [setroph] column.
     *
     * @param  double $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setSetroph($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->setroph !== $v) {
            $this->setroph = $v;
            $this->modifiedColumns[] = EstimatePeer::SETROPH;
        }


        return $this;
    } // setSetroph()

    /**
     * Set the value of [trophobserved] column.
     *
     * @param  string $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setTrophobserved($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->trophobserved !== $v) {
            $this->trophobserved = $v;
            $this->modifiedColumns[] = EstimatePeer::TROPHOBSERVED;
        }


        return $this;
    } // setTrophobserved()

    /**
     * Set the value of [trophpredicted] column.
     *
     * @param  double $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setTrophpredicted($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->trophpredicted !== $v) {
            $this->trophpredicted = $v;
            $this->modifiedColumns[] = EstimatePeer::TROPHPREDICTED;
        }


        return $this;
    } // setTrophpredicted()

    /**
     * Set the value of [setrophpredicted] column.
     *
     * @param  double $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setSetrophpredicted($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->setrophpredicted !== $v) {
            $this->setrophpredicted = $v;
            $this->modifiedColumns[] = EstimatePeer::SETROPHPREDICTED;
        }


        return $this;
    } // setSetrophpredicted()

    /**
     * Set the value of [a] column.
     *
     * @param  double $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setA($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->a !== $v) {
            $this->a = $v;
            $this->modifiedColumns[] = EstimatePeer::A;
        }


        return $this;
    } // setA()

    /**
     * Set the value of [sd_log10a] column.
     *
     * @param  double $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setSdLog10a($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sd_log10a !== $v) {
            $this->sd_log10a = $v;
            $this->modifiedColumns[] = EstimatePeer::SD_LOG10A;
        }


        return $this;
    } // setSdLog10a()

    /**
     * Set the value of [b] column.
     *
     * @param  double $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setB($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->b !== $v) {
            $this->b = $v;
            $this->modifiedColumns[] = EstimatePeer::B;
        }


        return $this;
    } // setB()

    /**
     * Set the value of [sd_b] column.
     *
     * @param  double $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setSdB($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sd_b !== $v) {
            $this->sd_b = $v;
            $this->modifiedColumns[] = EstimatePeer::SD_B;
        }


        return $this;
    } // setSdB()

    /**
     * Set the value of [method_ab] column.
     *
     * @param  string $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setMethodAb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->method_ab !== $v) {
            $this->method_ab = $v;
            $this->modifiedColumns[] = EstimatePeer::METHOD_AB;
        }


        return $this;
    } // setMethodAb()

    /**
     * Set the value of [k] column.
     *
     * @param  double $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setK($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->k !== $v) {
            $this->k = $v;
            $this->modifiedColumns[] = EstimatePeer::K;
        }


        return $this;
    } // setK()

    /**
     * Set the value of [sd_logk] column.
     *
     * @param  double $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setSdLogk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sd_logk !== $v) {
            $this->sd_logk = $v;
            $this->modifiedColumns[] = EstimatePeer::SD_LOGK;
        }


        return $this;
    } // setSdLogk()

    /**
     * Set the value of [linf] column.
     *
     * @param  double $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setLinf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->linf !== $v) {
            $this->linf = $v;
            $this->modifiedColumns[] = EstimatePeer::LINF;
        }


        return $this;
    } // setLinf()

    /**
     * Set the value of [sd_loglinf] column.
     *
     * @param  double $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setSdLoglinf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sd_loglinf !== $v) {
            $this->sd_loglinf = $v;
            $this->modifiedColumns[] = EstimatePeer::SD_LOGLINF;
        }


        return $this;
    } // setSdLoglinf()

    /**
     * Set the value of [lengthtype] column.
     *
     * @param  string $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setLengthtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lengthtype !== $v) {
            $this->lengthtype = $v;
            $this->modifiedColumns[] = EstimatePeer::LENGTHTYPE;
        }


        return $this;
    } // setLengthtype()

    /**
     * Set the value of [comdepthmin] column.
     *
     * @param  int $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setComdepthmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->comdepthmin !== $v) {
            $this->comdepthmin = $v;
            $this->modifiedColumns[] = EstimatePeer::COMDEPTHMIN;
        }


        return $this;
    } // setComdepthmin()

    /**
     * Set the value of [comdepthmax] column.
     *
     * @param  int $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setComdepthmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->comdepthmax !== $v) {
            $this->comdepthmax = $v;
            $this->modifiedColumns[] = EstimatePeer::COMDEPTHMAX;
        }


        return $this;
    } // setComdepthmax()

    /**
     * Set the value of [comdepminobserved] column.
     *
     * @param  string $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setComdepminobserved($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comdepminobserved !== $v) {
            $this->comdepminobserved = $v;
            $this->modifiedColumns[] = EstimatePeer::COMDEPMINOBSERVED;
        }


        return $this;
    } // setComdepminobserved()

    /**
     * Set the value of [comdepmaxobserved] column.
     *
     * @param  string $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setComdepmaxobserved($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comdepmaxobserved !== $v) {
            $this->comdepmaxobserved = $v;
            $this->modifiedColumns[] = EstimatePeer::COMDEPMAXOBSERVED;
        }


        return $this;
    } // setComdepmaxobserved()

    /**
     * Set the value of [depthmin] column.
     *
     * @param  int $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setDepthmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->depthmin !== $v) {
            $this->depthmin = $v;
            $this->modifiedColumns[] = EstimatePeer::DEPTHMIN;
        }


        return $this;
    } // setDepthmin()

    /**
     * Set the value of [depthmax] column.
     *
     * @param  int $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setDepthmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->depthmax !== $v) {
            $this->depthmax = $v;
            $this->modifiedColumns[] = EstimatePeer::DEPTHMAX;
        }


        return $this;
    } // setDepthmax()

    /**
     * Set the value of [depthminestimate] column.
     *
     * @param  string $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setDepthminestimate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->depthminestimate !== $v) {
            $this->depthminestimate = $v;
            $this->modifiedColumns[] = EstimatePeer::DEPTHMINESTIMATE;
        }


        return $this;
    } // setDepthminestimate()

    /**
     * Set the value of [depthmaxestimate] column.
     *
     * @param  string $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setDepthmaxestimate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->depthmaxestimate !== $v) {
            $this->depthmaxestimate = $v;
            $this->modifiedColumns[] = EstimatePeer::DEPTHMAXESTIMATE;
        }


        return $this;
    } // setDepthmaxestimate()

    /**
     * Sets the value of [lastmodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Estimate The current object (for fluent API support)
     */
    public function setLastmodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lastmodified !== null || $dt !== null) {
            $currentDateAsString = ($this->lastmodified !== null && $tmpDt = new DateTime($this->lastmodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->lastmodified = $newDateAsString;
                $this->modifiedColumns[] = EstimatePeer::LASTMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setLastmodified()

    /**
     * Set the value of [maxlengthsl] column.
     *
     * @param  double $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setMaxlengthsl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->maxlengthsl !== $v) {
            $this->maxlengthsl = $v;
            $this->modifiedColumns[] = EstimatePeer::MAXLENGTHSL;
        }


        return $this;
    } // setMaxlengthsl()

    /**
     * Set the value of [kobserved] column.
     *
     * @param  string $v new value
     * @return Estimate The current object (for fluent API support)
     */
    public function setKobserved($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->kobserved !== $v) {
            $this->kobserved = $v;
            $this->modifiedColumns[] = EstimatePeer::KOBSERVED;
        }


        return $this;
    } // setKobserved()

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
            if ($this->speccode !== 0) {
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

            $this->speccode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->maxlengthtl = ($row[$startcol + 1] !== null) ? (double) $row[$startcol + 1] : null;
            $this->tlobserved = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->troph = ($row[$startcol + 3] !== null) ? (double) $row[$startcol + 3] : null;
            $this->setroph = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
            $this->trophobserved = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->trophpredicted = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->setrophpredicted = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->a = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->sd_log10a = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->b = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->sd_b = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->method_ab = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->k = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->sd_logk = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->linf = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
            $this->sd_loglinf = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->lengthtype = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->comdepthmin = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->comdepthmax = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->comdepminobserved = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->comdepmaxobserved = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->depthmin = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->depthmax = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->depthminestimate = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->depthmaxestimate = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->lastmodified = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->maxlengthsl = ($row[$startcol + 27] !== null) ? (double) $row[$startcol + 27] : null;
            $this->kobserved = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 29; // 29 = EstimatePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Estimate object", $e);
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
            $con = Propel::getConnection(EstimatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EstimatePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(EstimatePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EstimateQuery::create()
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
            $con = Propel::getConnection(EstimatePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EstimatePeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(EstimatePeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(EstimatePeer::MAXLENGTHTL)) {
            $modifiedColumns[':p' . $index++]  = '`MaxLengthTL`';
        }
        if ($this->isColumnModified(EstimatePeer::TLOBSERVED)) {
            $modifiedColumns[':p' . $index++]  = '`TLObserved`';
        }
        if ($this->isColumnModified(EstimatePeer::TROPH)) {
            $modifiedColumns[':p' . $index++]  = '`Troph`';
        }
        if ($this->isColumnModified(EstimatePeer::SETROPH)) {
            $modifiedColumns[':p' . $index++]  = '`seTroph`';
        }
        if ($this->isColumnModified(EstimatePeer::TROPHOBSERVED)) {
            $modifiedColumns[':p' . $index++]  = '`TrophObserved`';
        }
        if ($this->isColumnModified(EstimatePeer::TROPHPREDICTED)) {
            $modifiedColumns[':p' . $index++]  = '`TrophPredicted`';
        }
        if ($this->isColumnModified(EstimatePeer::SETROPHPREDICTED)) {
            $modifiedColumns[':p' . $index++]  = '`seTrophPredicted`';
        }
        if ($this->isColumnModified(EstimatePeer::A)) {
            $modifiedColumns[':p' . $index++]  = '`a`';
        }
        if ($this->isColumnModified(EstimatePeer::SD_LOG10A)) {
            $modifiedColumns[':p' . $index++]  = '`sd_log10a`';
        }
        if ($this->isColumnModified(EstimatePeer::B)) {
            $modifiedColumns[':p' . $index++]  = '`b`';
        }
        if ($this->isColumnModified(EstimatePeer::SD_B)) {
            $modifiedColumns[':p' . $index++]  = '`sd_b`';
        }
        if ($this->isColumnModified(EstimatePeer::METHOD_AB)) {
            $modifiedColumns[':p' . $index++]  = '`Method_ab`';
        }
        if ($this->isColumnModified(EstimatePeer::K)) {
            $modifiedColumns[':p' . $index++]  = '`K`';
        }
        if ($this->isColumnModified(EstimatePeer::SD_LOGK)) {
            $modifiedColumns[':p' . $index++]  = '`SD_logK`';
        }
        if ($this->isColumnModified(EstimatePeer::LINF)) {
            $modifiedColumns[':p' . $index++]  = '`Linf`';
        }
        if ($this->isColumnModified(EstimatePeer::SD_LOGLINF)) {
            $modifiedColumns[':p' . $index++]  = '`SD_logLinf`';
        }
        if ($this->isColumnModified(EstimatePeer::LENGTHTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`LengthType`';
        }
        if ($this->isColumnModified(EstimatePeer::COMDEPTHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`ComDepthMin`';
        }
        if ($this->isColumnModified(EstimatePeer::COMDEPTHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`ComDepthMax`';
        }
        if ($this->isColumnModified(EstimatePeer::COMDEPMINOBSERVED)) {
            $modifiedColumns[':p' . $index++]  = '`ComDepMinObserved`';
        }
        if ($this->isColumnModified(EstimatePeer::COMDEPMAXOBSERVED)) {
            $modifiedColumns[':p' . $index++]  = '`ComDepMaxObserved`';
        }
        if ($this->isColumnModified(EstimatePeer::DEPTHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`DepthMin`';
        }
        if ($this->isColumnModified(EstimatePeer::DEPTHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`DepthMax`';
        }
        if ($this->isColumnModified(EstimatePeer::DEPTHMINESTIMATE)) {
            $modifiedColumns[':p' . $index++]  = '`DepthMinEstimate`';
        }
        if ($this->isColumnModified(EstimatePeer::DEPTHMAXESTIMATE)) {
            $modifiedColumns[':p' . $index++]  = '`DepthMaxEstimate`';
        }
        if ($this->isColumnModified(EstimatePeer::LASTMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`LastModified`';
        }
        if ($this->isColumnModified(EstimatePeer::MAXLENGTHSL)) {
            $modifiedColumns[':p' . $index++]  = '`MaxLengthSL`';
        }
        if ($this->isColumnModified(EstimatePeer::KOBSERVED)) {
            $modifiedColumns[':p' . $index++]  = '`KObserved`';
        }

        $sql = sprintf(
            'INSERT INTO `estimate` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`MaxLengthTL`':
                        $stmt->bindValue($identifier, $this->maxlengthtl, PDO::PARAM_STR);
                        break;
                    case '`TLObserved`':
                        $stmt->bindValue($identifier, $this->tlobserved, PDO::PARAM_STR);
                        break;
                    case '`Troph`':
                        $stmt->bindValue($identifier, $this->troph, PDO::PARAM_STR);
                        break;
                    case '`seTroph`':
                        $stmt->bindValue($identifier, $this->setroph, PDO::PARAM_STR);
                        break;
                    case '`TrophObserved`':
                        $stmt->bindValue($identifier, $this->trophobserved, PDO::PARAM_STR);
                        break;
                    case '`TrophPredicted`':
                        $stmt->bindValue($identifier, $this->trophpredicted, PDO::PARAM_STR);
                        break;
                    case '`seTrophPredicted`':
                        $stmt->bindValue($identifier, $this->setrophpredicted, PDO::PARAM_STR);
                        break;
                    case '`a`':
                        $stmt->bindValue($identifier, $this->a, PDO::PARAM_STR);
                        break;
                    case '`sd_log10a`':
                        $stmt->bindValue($identifier, $this->sd_log10a, PDO::PARAM_STR);
                        break;
                    case '`b`':
                        $stmt->bindValue($identifier, $this->b, PDO::PARAM_STR);
                        break;
                    case '`sd_b`':
                        $stmt->bindValue($identifier, $this->sd_b, PDO::PARAM_STR);
                        break;
                    case '`Method_ab`':
                        $stmt->bindValue($identifier, $this->method_ab, PDO::PARAM_STR);
                        break;
                    case '`K`':
                        $stmt->bindValue($identifier, $this->k, PDO::PARAM_STR);
                        break;
                    case '`SD_logK`':
                        $stmt->bindValue($identifier, $this->sd_logk, PDO::PARAM_STR);
                        break;
                    case '`Linf`':
                        $stmt->bindValue($identifier, $this->linf, PDO::PARAM_STR);
                        break;
                    case '`SD_logLinf`':
                        $stmt->bindValue($identifier, $this->sd_loglinf, PDO::PARAM_STR);
                        break;
                    case '`LengthType`':
                        $stmt->bindValue($identifier, $this->lengthtype, PDO::PARAM_STR);
                        break;
                    case '`ComDepthMin`':
                        $stmt->bindValue($identifier, $this->comdepthmin, PDO::PARAM_INT);
                        break;
                    case '`ComDepthMax`':
                        $stmt->bindValue($identifier, $this->comdepthmax, PDO::PARAM_INT);
                        break;
                    case '`ComDepMinObserved`':
                        $stmt->bindValue($identifier, $this->comdepminobserved, PDO::PARAM_STR);
                        break;
                    case '`ComDepMaxObserved`':
                        $stmt->bindValue($identifier, $this->comdepmaxobserved, PDO::PARAM_STR);
                        break;
                    case '`DepthMin`':
                        $stmt->bindValue($identifier, $this->depthmin, PDO::PARAM_INT);
                        break;
                    case '`DepthMax`':
                        $stmt->bindValue($identifier, $this->depthmax, PDO::PARAM_INT);
                        break;
                    case '`DepthMinEstimate`':
                        $stmt->bindValue($identifier, $this->depthminestimate, PDO::PARAM_STR);
                        break;
                    case '`DepthMaxEstimate`':
                        $stmt->bindValue($identifier, $this->depthmaxestimate, PDO::PARAM_STR);
                        break;
                    case '`LastModified`':
                        $stmt->bindValue($identifier, $this->lastmodified, PDO::PARAM_STR);
                        break;
                    case '`MaxLengthSL`':
                        $stmt->bindValue($identifier, $this->maxlengthsl, PDO::PARAM_STR);
                        break;
                    case '`KObserved`':
                        $stmt->bindValue($identifier, $this->kobserved, PDO::PARAM_STR);
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


            if (($retval = EstimatePeer::doValidate($this, $columns)) !== true) {
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
        $pos = EstimatePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSpeccode();
                break;
            case 1:
                return $this->getMaxlengthtl();
                break;
            case 2:
                return $this->getTlobserved();
                break;
            case 3:
                return $this->getTroph();
                break;
            case 4:
                return $this->getSetroph();
                break;
            case 5:
                return $this->getTrophobserved();
                break;
            case 6:
                return $this->getTrophpredicted();
                break;
            case 7:
                return $this->getSetrophpredicted();
                break;
            case 8:
                return $this->getA();
                break;
            case 9:
                return $this->getSdLog10a();
                break;
            case 10:
                return $this->getB();
                break;
            case 11:
                return $this->getSdB();
                break;
            case 12:
                return $this->getMethodAb();
                break;
            case 13:
                return $this->getK();
                break;
            case 14:
                return $this->getSdLogk();
                break;
            case 15:
                return $this->getLinf();
                break;
            case 16:
                return $this->getSdLoglinf();
                break;
            case 17:
                return $this->getLengthtype();
                break;
            case 18:
                return $this->getComdepthmin();
                break;
            case 19:
                return $this->getComdepthmax();
                break;
            case 20:
                return $this->getComdepminobserved();
                break;
            case 21:
                return $this->getComdepmaxobserved();
                break;
            case 22:
                return $this->getDepthmin();
                break;
            case 23:
                return $this->getDepthmax();
                break;
            case 24:
                return $this->getDepthminestimate();
                break;
            case 25:
                return $this->getDepthmaxestimate();
                break;
            case 26:
                return $this->getLastmodified();
                break;
            case 27:
                return $this->getMaxlengthsl();
                break;
            case 28:
                return $this->getKobserved();
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
        if (isset($alreadyDumpedObjects['Estimate'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Estimate'][$this->getPrimaryKey()] = true;
        $keys = EstimatePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getSpeccode(),
            $keys[1] => $this->getMaxlengthtl(),
            $keys[2] => $this->getTlobserved(),
            $keys[3] => $this->getTroph(),
            $keys[4] => $this->getSetroph(),
            $keys[5] => $this->getTrophobserved(),
            $keys[6] => $this->getTrophpredicted(),
            $keys[7] => $this->getSetrophpredicted(),
            $keys[8] => $this->getA(),
            $keys[9] => $this->getSdLog10a(),
            $keys[10] => $this->getB(),
            $keys[11] => $this->getSdB(),
            $keys[12] => $this->getMethodAb(),
            $keys[13] => $this->getK(),
            $keys[14] => $this->getSdLogk(),
            $keys[15] => $this->getLinf(),
            $keys[16] => $this->getSdLoglinf(),
            $keys[17] => $this->getLengthtype(),
            $keys[18] => $this->getComdepthmin(),
            $keys[19] => $this->getComdepthmax(),
            $keys[20] => $this->getComdepminobserved(),
            $keys[21] => $this->getComdepmaxobserved(),
            $keys[22] => $this->getDepthmin(),
            $keys[23] => $this->getDepthmax(),
            $keys[24] => $this->getDepthminestimate(),
            $keys[25] => $this->getDepthmaxestimate(),
            $keys[26] => $this->getLastmodified(),
            $keys[27] => $this->getMaxlengthsl(),
            $keys[28] => $this->getKobserved(),
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
        $pos = EstimatePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSpeccode($value);
                break;
            case 1:
                $this->setMaxlengthtl($value);
                break;
            case 2:
                $this->setTlobserved($value);
                break;
            case 3:
                $this->setTroph($value);
                break;
            case 4:
                $this->setSetroph($value);
                break;
            case 5:
                $this->setTrophobserved($value);
                break;
            case 6:
                $this->setTrophpredicted($value);
                break;
            case 7:
                $this->setSetrophpredicted($value);
                break;
            case 8:
                $this->setA($value);
                break;
            case 9:
                $this->setSdLog10a($value);
                break;
            case 10:
                $this->setB($value);
                break;
            case 11:
                $this->setSdB($value);
                break;
            case 12:
                $this->setMethodAb($value);
                break;
            case 13:
                $this->setK($value);
                break;
            case 14:
                $this->setSdLogk($value);
                break;
            case 15:
                $this->setLinf($value);
                break;
            case 16:
                $this->setSdLoglinf($value);
                break;
            case 17:
                $this->setLengthtype($value);
                break;
            case 18:
                $this->setComdepthmin($value);
                break;
            case 19:
                $this->setComdepthmax($value);
                break;
            case 20:
                $this->setComdepminobserved($value);
                break;
            case 21:
                $this->setComdepmaxobserved($value);
                break;
            case 22:
                $this->setDepthmin($value);
                break;
            case 23:
                $this->setDepthmax($value);
                break;
            case 24:
                $this->setDepthminestimate($value);
                break;
            case 25:
                $this->setDepthmaxestimate($value);
                break;
            case 26:
                $this->setLastmodified($value);
                break;
            case 27:
                $this->setMaxlengthsl($value);
                break;
            case 28:
                $this->setKobserved($value);
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
        $keys = EstimatePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setSpeccode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMaxlengthtl($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setTlobserved($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTroph($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSetroph($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTrophobserved($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTrophpredicted($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSetrophpredicted($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setA($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setSdLog10a($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setB($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setSdB($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setMethodAb($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setK($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setSdLogk($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setLinf($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setSdLoglinf($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setLengthtype($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setComdepthmin($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setComdepthmax($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setComdepminobserved($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setComdepmaxobserved($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDepthmin($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDepthmax($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setDepthminestimate($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDepthmaxestimate($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setLastmodified($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setMaxlengthsl($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setKobserved($arr[$keys[28]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EstimatePeer::DATABASE_NAME);

        if ($this->isColumnModified(EstimatePeer::SPECCODE)) $criteria->add(EstimatePeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(EstimatePeer::MAXLENGTHTL)) $criteria->add(EstimatePeer::MAXLENGTHTL, $this->maxlengthtl);
        if ($this->isColumnModified(EstimatePeer::TLOBSERVED)) $criteria->add(EstimatePeer::TLOBSERVED, $this->tlobserved);
        if ($this->isColumnModified(EstimatePeer::TROPH)) $criteria->add(EstimatePeer::TROPH, $this->troph);
        if ($this->isColumnModified(EstimatePeer::SETROPH)) $criteria->add(EstimatePeer::SETROPH, $this->setroph);
        if ($this->isColumnModified(EstimatePeer::TROPHOBSERVED)) $criteria->add(EstimatePeer::TROPHOBSERVED, $this->trophobserved);
        if ($this->isColumnModified(EstimatePeer::TROPHPREDICTED)) $criteria->add(EstimatePeer::TROPHPREDICTED, $this->trophpredicted);
        if ($this->isColumnModified(EstimatePeer::SETROPHPREDICTED)) $criteria->add(EstimatePeer::SETROPHPREDICTED, $this->setrophpredicted);
        if ($this->isColumnModified(EstimatePeer::A)) $criteria->add(EstimatePeer::A, $this->a);
        if ($this->isColumnModified(EstimatePeer::SD_LOG10A)) $criteria->add(EstimatePeer::SD_LOG10A, $this->sd_log10a);
        if ($this->isColumnModified(EstimatePeer::B)) $criteria->add(EstimatePeer::B, $this->b);
        if ($this->isColumnModified(EstimatePeer::SD_B)) $criteria->add(EstimatePeer::SD_B, $this->sd_b);
        if ($this->isColumnModified(EstimatePeer::METHOD_AB)) $criteria->add(EstimatePeer::METHOD_AB, $this->method_ab);
        if ($this->isColumnModified(EstimatePeer::K)) $criteria->add(EstimatePeer::K, $this->k);
        if ($this->isColumnModified(EstimatePeer::SD_LOGK)) $criteria->add(EstimatePeer::SD_LOGK, $this->sd_logk);
        if ($this->isColumnModified(EstimatePeer::LINF)) $criteria->add(EstimatePeer::LINF, $this->linf);
        if ($this->isColumnModified(EstimatePeer::SD_LOGLINF)) $criteria->add(EstimatePeer::SD_LOGLINF, $this->sd_loglinf);
        if ($this->isColumnModified(EstimatePeer::LENGTHTYPE)) $criteria->add(EstimatePeer::LENGTHTYPE, $this->lengthtype);
        if ($this->isColumnModified(EstimatePeer::COMDEPTHMIN)) $criteria->add(EstimatePeer::COMDEPTHMIN, $this->comdepthmin);
        if ($this->isColumnModified(EstimatePeer::COMDEPTHMAX)) $criteria->add(EstimatePeer::COMDEPTHMAX, $this->comdepthmax);
        if ($this->isColumnModified(EstimatePeer::COMDEPMINOBSERVED)) $criteria->add(EstimatePeer::COMDEPMINOBSERVED, $this->comdepminobserved);
        if ($this->isColumnModified(EstimatePeer::COMDEPMAXOBSERVED)) $criteria->add(EstimatePeer::COMDEPMAXOBSERVED, $this->comdepmaxobserved);
        if ($this->isColumnModified(EstimatePeer::DEPTHMIN)) $criteria->add(EstimatePeer::DEPTHMIN, $this->depthmin);
        if ($this->isColumnModified(EstimatePeer::DEPTHMAX)) $criteria->add(EstimatePeer::DEPTHMAX, $this->depthmax);
        if ($this->isColumnModified(EstimatePeer::DEPTHMINESTIMATE)) $criteria->add(EstimatePeer::DEPTHMINESTIMATE, $this->depthminestimate);
        if ($this->isColumnModified(EstimatePeer::DEPTHMAXESTIMATE)) $criteria->add(EstimatePeer::DEPTHMAXESTIMATE, $this->depthmaxestimate);
        if ($this->isColumnModified(EstimatePeer::LASTMODIFIED)) $criteria->add(EstimatePeer::LASTMODIFIED, $this->lastmodified);
        if ($this->isColumnModified(EstimatePeer::MAXLENGTHSL)) $criteria->add(EstimatePeer::MAXLENGTHSL, $this->maxlengthsl);
        if ($this->isColumnModified(EstimatePeer::KOBSERVED)) $criteria->add(EstimatePeer::KOBSERVED, $this->kobserved);

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
        $criteria = new Criteria(EstimatePeer::DATABASE_NAME);
        $criteria->add(EstimatePeer::SPECCODE, $this->speccode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getSpeccode();
    }

    /**
     * Generic method to set the primary key (speccode column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setSpeccode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getSpeccode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Estimate (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setMaxlengthtl($this->getMaxlengthtl());
        $copyObj->setTlobserved($this->getTlobserved());
        $copyObj->setTroph($this->getTroph());
        $copyObj->setSetroph($this->getSetroph());
        $copyObj->setTrophobserved($this->getTrophobserved());
        $copyObj->setTrophpredicted($this->getTrophpredicted());
        $copyObj->setSetrophpredicted($this->getSetrophpredicted());
        $copyObj->setA($this->getA());
        $copyObj->setSdLog10a($this->getSdLog10a());
        $copyObj->setB($this->getB());
        $copyObj->setSdB($this->getSdB());
        $copyObj->setMethodAb($this->getMethodAb());
        $copyObj->setK($this->getK());
        $copyObj->setSdLogk($this->getSdLogk());
        $copyObj->setLinf($this->getLinf());
        $copyObj->setSdLoglinf($this->getSdLoglinf());
        $copyObj->setLengthtype($this->getLengthtype());
        $copyObj->setComdepthmin($this->getComdepthmin());
        $copyObj->setComdepthmax($this->getComdepthmax());
        $copyObj->setComdepminobserved($this->getComdepminobserved());
        $copyObj->setComdepmaxobserved($this->getComdepmaxobserved());
        $copyObj->setDepthmin($this->getDepthmin());
        $copyObj->setDepthmax($this->getDepthmax());
        $copyObj->setDepthminestimate($this->getDepthminestimate());
        $copyObj->setDepthmaxestimate($this->getDepthmaxestimate());
        $copyObj->setLastmodified($this->getLastmodified());
        $copyObj->setMaxlengthsl($this->getMaxlengthsl());
        $copyObj->setKobserved($this->getKobserved());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setSpeccode('0'); // this is a auto-increment column, so set to default value
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
     * @return Estimate Clone of current object.
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
     * @return EstimatePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EstimatePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->speccode = null;
        $this->maxlengthtl = null;
        $this->tlobserved = null;
        $this->troph = null;
        $this->setroph = null;
        $this->trophobserved = null;
        $this->trophpredicted = null;
        $this->setrophpredicted = null;
        $this->a = null;
        $this->sd_log10a = null;
        $this->b = null;
        $this->sd_b = null;
        $this->method_ab = null;
        $this->k = null;
        $this->sd_logk = null;
        $this->linf = null;
        $this->sd_loglinf = null;
        $this->lengthtype = null;
        $this->comdepthmin = null;
        $this->comdepthmax = null;
        $this->comdepminobserved = null;
        $this->comdepmaxobserved = null;
        $this->depthmin = null;
        $this->depthmax = null;
        $this->depthminestimate = null;
        $this->depthmaxestimate = null;
        $this->lastmodified = null;
        $this->maxlengthsl = null;
        $this->kobserved = null;
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
        return (string) $this->exportTo(EstimatePeer::DEFAULT_STRING_FORMAT);
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
