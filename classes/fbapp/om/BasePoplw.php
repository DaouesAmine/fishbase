<?php


/**
 * Base class that represents a row from the 'poplw' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BasePoplw extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PoplwPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PoplwPeer
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
     * The value for the famcode field.
     * @var        int
     */
    protected $famcode;

    /**
     * The value for the poplwref field.
     * @var        int
     */
    protected $poplwref;

    /**
     * The value for the lengthmin field.
     * @var        double
     */
    protected $lengthmin;

    /**
     * The value for the lengthmax field.
     * @var        double
     */
    protected $lengthmax;

    /**
     * The value for the type field.
     * @var        string
     */
    protected $type;

    /**
     * The value for the lmaxcompare field.
     * @var        string
     */
    protected $lmaxcompare;

    /**
     * The value for the esq field.
     * @var        string
     */
    protected $esq;

    /**
     * The value for the number field.
     * @var        int
     */
    protected $number;

    /**
     * The value for the sex field.
     * @var        string
     */
    protected $sex;

    /**
     * The value for the a field.
     * @var        double
     */
    protected $a;

    /**
     * The value for the atl field.
     * @var        double
     */
    protected $atl;

    /**
     * The value for the b field.
     * @var        double
     */
    protected $b;

    /**
     * The value for the coeffdetermination field.
     * @var        double
     */
    protected $coeffdetermination;

    /**
     * The value for the sea field.
     * @var        double
     */
    protected $sea;

    /**
     * The value for the seb field.
     * @var        double
     */
    protected $seb;

    /**
     * The value for the sda field.
     * @var        double
     */
    protected $sda;

    /**
     * The value for the sdb field.
     * @var        double
     */
    protected $sdb;

    /**
     * The value for the lcla field.
     * @var        double
     */
    protected $lcla;

    /**
     * The value for the ucla field.
     * @var        double
     */
    protected $ucla;

    /**
     * The value for the lclb field.
     * @var        double
     */
    protected $lclb;

    /**
     * The value for the uclb field.
     * @var        double
     */
    protected $uclb;

    /**
     * The value for the method field.
     * @var        string
     */
    protected $method;

    /**
     * The value for the locality field.
     * @var        string
     */
    protected $locality;

    /**
     * The value for the dataref field.
     * @var        int
     */
    protected $dataref;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

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
     * Get the [autoctr] column value.
     *
     * @return int
     */
    public function getAutoctr()
    {

        return $this->autoctr;
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
     * Get the [speccode] column value.
     *
     * @return int
     */
    public function getSpeccode()
    {

        return $this->speccode;
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
     * Get the [poplwref] column value.
     *
     * @return int
     */
    public function getPoplwref()
    {

        return $this->poplwref;
    }

    /**
     * Get the [lengthmin] column value.
     *
     * @return double
     */
    public function getLengthmin()
    {

        return $this->lengthmin;
    }

    /**
     * Get the [lengthmax] column value.
     *
     * @return double
     */
    public function getLengthmax()
    {

        return $this->lengthmax;
    }

    /**
     * Get the [type] column value.
     *
     * @return string
     */
    public function getType()
    {

        return $this->type;
    }

    /**
     * Get the [lmaxcompare] column value.
     *
     * @return string
     */
    public function getLmaxcompare()
    {

        return $this->lmaxcompare;
    }

    /**
     * Get the [esq] column value.
     *
     * @return string
     */
    public function getEsq()
    {

        return $this->esq;
    }

    /**
     * Get the [number] column value.
     *
     * @return int
     */
    public function getNumber()
    {

        return $this->number;
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
     * Get the [a] column value.
     *
     * @return double
     */
    public function getA()
    {

        return $this->a;
    }

    /**
     * Get the [atl] column value.
     *
     * @return double
     */
    public function getAtl()
    {

        return $this->atl;
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
     * Get the [coeffdetermination] column value.
     *
     * @return double
     */
    public function getCoeffdetermination()
    {

        return $this->coeffdetermination;
    }

    /**
     * Get the [sea] column value.
     *
     * @return double
     */
    public function getSea()
    {

        return $this->sea;
    }

    /**
     * Get the [seb] column value.
     *
     * @return double
     */
    public function getSeb()
    {

        return $this->seb;
    }

    /**
     * Get the [sda] column value.
     *
     * @return double
     */
    public function getSda()
    {

        return $this->sda;
    }

    /**
     * Get the [sdb] column value.
     *
     * @return double
     */
    public function getSdb()
    {

        return $this->sdb;
    }

    /**
     * Get the [lcla] column value.
     *
     * @return double
     */
    public function getLcla()
    {

        return $this->lcla;
    }

    /**
     * Get the [ucla] column value.
     *
     * @return double
     */
    public function getUcla()
    {

        return $this->ucla;
    }

    /**
     * Get the [lclb] column value.
     *
     * @return double
     */
    public function getLclb()
    {

        return $this->lclb;
    }

    /**
     * Get the [uclb] column value.
     *
     * @return double
     */
    public function getUclb()
    {

        return $this->uclb;
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
     * Get the [locality] column value.
     *
     * @return string
     */
    public function getLocality()
    {

        return $this->locality;
    }

    /**
     * Get the [dataref] column value.
     *
     * @return int
     */
    public function getDataref()
    {

        return $this->dataref;
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
     * Set the value of [autoctr] column.
     *
     * @param  int $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = PoplwPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = PoplwPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = PoplwPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [famcode] column.
     *
     * @param  int $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setFamcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->famcode !== $v) {
            $this->famcode = $v;
            $this->modifiedColumns[] = PoplwPeer::FAMCODE;
        }


        return $this;
    } // setFamcode()

    /**
     * Set the value of [poplwref] column.
     *
     * @param  int $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setPoplwref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->poplwref !== $v) {
            $this->poplwref = $v;
            $this->modifiedColumns[] = PoplwPeer::POPLWREF;
        }


        return $this;
    } // setPoplwref()

    /**
     * Set the value of [lengthmin] column.
     *
     * @param  double $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setLengthmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lengthmin !== $v) {
            $this->lengthmin = $v;
            $this->modifiedColumns[] = PoplwPeer::LENGTHMIN;
        }


        return $this;
    } // setLengthmin()

    /**
     * Set the value of [lengthmax] column.
     *
     * @param  double $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setLengthmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lengthmax !== $v) {
            $this->lengthmax = $v;
            $this->modifiedColumns[] = PoplwPeer::LENGTHMAX;
        }


        return $this;
    } // setLengthmax()

    /**
     * Set the value of [type] column.
     *
     * @param  string $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[] = PoplwPeer::TYPE;
        }


        return $this;
    } // setType()

    /**
     * Set the value of [lmaxcompare] column.
     *
     * @param  string $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setLmaxcompare($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lmaxcompare !== $v) {
            $this->lmaxcompare = $v;
            $this->modifiedColumns[] = PoplwPeer::LMAXCOMPARE;
        }


        return $this;
    } // setLmaxcompare()

    /**
     * Set the value of [esq] column.
     *
     * @param  string $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setEsq($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->esq !== $v) {
            $this->esq = $v;
            $this->modifiedColumns[] = PoplwPeer::ESQ;
        }


        return $this;
    } // setEsq()

    /**
     * Set the value of [number] column.
     *
     * @param  int $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setNumber($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->number !== $v) {
            $this->number = $v;
            $this->modifiedColumns[] = PoplwPeer::NUMBER;
        }


        return $this;
    } // setNumber()

    /**
     * Set the value of [sex] column.
     *
     * @param  string $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setSex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sex !== $v) {
            $this->sex = $v;
            $this->modifiedColumns[] = PoplwPeer::SEX;
        }


        return $this;
    } // setSex()

    /**
     * Set the value of [a] column.
     *
     * @param  double $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setA($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->a !== $v) {
            $this->a = $v;
            $this->modifiedColumns[] = PoplwPeer::A;
        }


        return $this;
    } // setA()

    /**
     * Set the value of [atl] column.
     *
     * @param  double $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setAtl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->atl !== $v) {
            $this->atl = $v;
            $this->modifiedColumns[] = PoplwPeer::ATL;
        }


        return $this;
    } // setAtl()

    /**
     * Set the value of [b] column.
     *
     * @param  double $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setB($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->b !== $v) {
            $this->b = $v;
            $this->modifiedColumns[] = PoplwPeer::B;
        }


        return $this;
    } // setB()

    /**
     * Set the value of [coeffdetermination] column.
     *
     * @param  double $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setCoeffdetermination($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->coeffdetermination !== $v) {
            $this->coeffdetermination = $v;
            $this->modifiedColumns[] = PoplwPeer::COEFFDETERMINATION;
        }


        return $this;
    } // setCoeffdetermination()

    /**
     * Set the value of [sea] column.
     *
     * @param  double $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setSea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sea !== $v) {
            $this->sea = $v;
            $this->modifiedColumns[] = PoplwPeer::SEA;
        }


        return $this;
    } // setSea()

    /**
     * Set the value of [seb] column.
     *
     * @param  double $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setSeb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->seb !== $v) {
            $this->seb = $v;
            $this->modifiedColumns[] = PoplwPeer::SEB;
        }


        return $this;
    } // setSeb()

    /**
     * Set the value of [sda] column.
     *
     * @param  double $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setSda($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sda !== $v) {
            $this->sda = $v;
            $this->modifiedColumns[] = PoplwPeer::SDA;
        }


        return $this;
    } // setSda()

    /**
     * Set the value of [sdb] column.
     *
     * @param  double $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setSdb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sdb !== $v) {
            $this->sdb = $v;
            $this->modifiedColumns[] = PoplwPeer::SDB;
        }


        return $this;
    } // setSdb()

    /**
     * Set the value of [lcla] column.
     *
     * @param  double $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setLcla($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lcla !== $v) {
            $this->lcla = $v;
            $this->modifiedColumns[] = PoplwPeer::LCLA;
        }


        return $this;
    } // setLcla()

    /**
     * Set the value of [ucla] column.
     *
     * @param  double $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setUcla($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ucla !== $v) {
            $this->ucla = $v;
            $this->modifiedColumns[] = PoplwPeer::UCLA;
        }


        return $this;
    } // setUcla()

    /**
     * Set the value of [lclb] column.
     *
     * @param  double $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setLclb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lclb !== $v) {
            $this->lclb = $v;
            $this->modifiedColumns[] = PoplwPeer::LCLB;
        }


        return $this;
    } // setLclb()

    /**
     * Set the value of [uclb] column.
     *
     * @param  double $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setUclb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->uclb !== $v) {
            $this->uclb = $v;
            $this->modifiedColumns[] = PoplwPeer::UCLB;
        }


        return $this;
    } // setUclb()

    /**
     * Set the value of [method] column.
     *
     * @param  string $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setMethod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->method !== $v) {
            $this->method = $v;
            $this->modifiedColumns[] = PoplwPeer::METHOD;
        }


        return $this;
    } // setMethod()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = PoplwPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [dataref] column.
     *
     * @param  int $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setDataref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dataref !== $v) {
            $this->dataref = $v;
            $this->modifiedColumns[] = PoplwPeer::DATAREF;
        }


        return $this;
    } // setDataref()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = PoplwPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = PoplwPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = PoplwPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Poplw The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = PoplwPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = PoplwPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Poplw The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = PoplwPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Poplw The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = PoplwPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Poplw The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = PoplwPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Poplw The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = PoplwPeer::TS;
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

            $this->autoctr = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->stockcode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->speccode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->famcode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->poplwref = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->lengthmin = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
            $this->lengthmax = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->type = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->lmaxcompare = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->esq = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->number = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->sex = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->a = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->atl = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->b = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->coeffdetermination = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
            $this->sea = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->seb = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->sda = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->sdb = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->lcla = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->ucla = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->lclb = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->uclb = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
            $this->method = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->locality = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->dataref = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->c_code = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->comment = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->entered = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->dateentered = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->modified = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->datemodified = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->expert = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->datechecked = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->ts = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 36; // 36 = PoplwPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Poplw object", $e);
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
            $con = Propel::getConnection(PoplwPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PoplwPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(PoplwPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PoplwQuery::create()
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
            $con = Propel::getConnection(PoplwPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PoplwPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = PoplwPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PoplwPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PoplwPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`AutoCtr`';
        }
        if ($this->isColumnModified(PoplwPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(PoplwPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(PoplwPeer::FAMCODE)) {
            $modifiedColumns[':p' . $index++]  = '`FamCode`';
        }
        if ($this->isColumnModified(PoplwPeer::POPLWREF)) {
            $modifiedColumns[':p' . $index++]  = '`PopLWRef`';
        }
        if ($this->isColumnModified(PoplwPeer::LENGTHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LengthMin`';
        }
        if ($this->isColumnModified(PoplwPeer::LENGTHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`LengthMax`';
        }
        if ($this->isColumnModified(PoplwPeer::TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`Type`';
        }
        if ($this->isColumnModified(PoplwPeer::LMAXCOMPARE)) {
            $modifiedColumns[':p' . $index++]  = '`LmaxCompare`';
        }
        if ($this->isColumnModified(PoplwPeer::ESQ)) {
            $modifiedColumns[':p' . $index++]  = '`EsQ`';
        }
        if ($this->isColumnModified(PoplwPeer::NUMBER)) {
            $modifiedColumns[':p' . $index++]  = '`Number`';
        }
        if ($this->isColumnModified(PoplwPeer::SEX)) {
            $modifiedColumns[':p' . $index++]  = '`Sex`';
        }
        if ($this->isColumnModified(PoplwPeer::A)) {
            $modifiedColumns[':p' . $index++]  = '`a`';
        }
        if ($this->isColumnModified(PoplwPeer::ATL)) {
            $modifiedColumns[':p' . $index++]  = '`aTL`';
        }
        if ($this->isColumnModified(PoplwPeer::B)) {
            $modifiedColumns[':p' . $index++]  = '`b`';
        }
        if ($this->isColumnModified(PoplwPeer::COEFFDETERMINATION)) {
            $modifiedColumns[':p' . $index++]  = '`CoeffDetermination`';
        }
        if ($this->isColumnModified(PoplwPeer::SEA)) {
            $modifiedColumns[':p' . $index++]  = '`SEa`';
        }
        if ($this->isColumnModified(PoplwPeer::SEB)) {
            $modifiedColumns[':p' . $index++]  = '`SEb`';
        }
        if ($this->isColumnModified(PoplwPeer::SDA)) {
            $modifiedColumns[':p' . $index++]  = '`SDa`';
        }
        if ($this->isColumnModified(PoplwPeer::SDB)) {
            $modifiedColumns[':p' . $index++]  = '`SDb`';
        }
        if ($this->isColumnModified(PoplwPeer::LCLA)) {
            $modifiedColumns[':p' . $index++]  = '`LCLa`';
        }
        if ($this->isColumnModified(PoplwPeer::UCLA)) {
            $modifiedColumns[':p' . $index++]  = '`UCLa`';
        }
        if ($this->isColumnModified(PoplwPeer::LCLB)) {
            $modifiedColumns[':p' . $index++]  = '`LCLb`';
        }
        if ($this->isColumnModified(PoplwPeer::UCLB)) {
            $modifiedColumns[':p' . $index++]  = '`UCLb`';
        }
        if ($this->isColumnModified(PoplwPeer::METHOD)) {
            $modifiedColumns[':p' . $index++]  = '`Method`';
        }
        if ($this->isColumnModified(PoplwPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(PoplwPeer::DATAREF)) {
            $modifiedColumns[':p' . $index++]  = '`DataRef`';
        }
        if ($this->isColumnModified(PoplwPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(PoplwPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Comment`';
        }
        if ($this->isColumnModified(PoplwPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(PoplwPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(PoplwPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(PoplwPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(PoplwPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(PoplwPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(PoplwPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `poplw` (%s) VALUES (%s)',
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
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`FamCode`':
                        $stmt->bindValue($identifier, $this->famcode, PDO::PARAM_INT);
                        break;
                    case '`PopLWRef`':
                        $stmt->bindValue($identifier, $this->poplwref, PDO::PARAM_INT);
                        break;
                    case '`LengthMin`':
                        $stmt->bindValue($identifier, $this->lengthmin, PDO::PARAM_STR);
                        break;
                    case '`LengthMax`':
                        $stmt->bindValue($identifier, $this->lengthmax, PDO::PARAM_STR);
                        break;
                    case '`Type`':
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_STR);
                        break;
                    case '`LmaxCompare`':
                        $stmt->bindValue($identifier, $this->lmaxcompare, PDO::PARAM_STR);
                        break;
                    case '`EsQ`':
                        $stmt->bindValue($identifier, $this->esq, PDO::PARAM_STR);
                        break;
                    case '`Number`':
                        $stmt->bindValue($identifier, $this->number, PDO::PARAM_INT);
                        break;
                    case '`Sex`':
                        $stmt->bindValue($identifier, $this->sex, PDO::PARAM_STR);
                        break;
                    case '`a`':
                        $stmt->bindValue($identifier, $this->a, PDO::PARAM_STR);
                        break;
                    case '`aTL`':
                        $stmt->bindValue($identifier, $this->atl, PDO::PARAM_STR);
                        break;
                    case '`b`':
                        $stmt->bindValue($identifier, $this->b, PDO::PARAM_STR);
                        break;
                    case '`CoeffDetermination`':
                        $stmt->bindValue($identifier, $this->coeffdetermination, PDO::PARAM_STR);
                        break;
                    case '`SEa`':
                        $stmt->bindValue($identifier, $this->sea, PDO::PARAM_STR);
                        break;
                    case '`SEb`':
                        $stmt->bindValue($identifier, $this->seb, PDO::PARAM_STR);
                        break;
                    case '`SDa`':
                        $stmt->bindValue($identifier, $this->sda, PDO::PARAM_STR);
                        break;
                    case '`SDb`':
                        $stmt->bindValue($identifier, $this->sdb, PDO::PARAM_STR);
                        break;
                    case '`LCLa`':
                        $stmt->bindValue($identifier, $this->lcla, PDO::PARAM_STR);
                        break;
                    case '`UCLa`':
                        $stmt->bindValue($identifier, $this->ucla, PDO::PARAM_STR);
                        break;
                    case '`LCLb`':
                        $stmt->bindValue($identifier, $this->lclb, PDO::PARAM_STR);
                        break;
                    case '`UCLb`':
                        $stmt->bindValue($identifier, $this->uclb, PDO::PARAM_STR);
                        break;
                    case '`Method`':
                        $stmt->bindValue($identifier, $this->method, PDO::PARAM_STR);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`DataRef`':
                        $stmt->bindValue($identifier, $this->dataref, PDO::PARAM_INT);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
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


            if (($retval = PoplwPeer::doValidate($this, $columns)) !== true) {
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
        $pos = PoplwPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getStockcode();
                break;
            case 2:
                return $this->getSpeccode();
                break;
            case 3:
                return $this->getFamcode();
                break;
            case 4:
                return $this->getPoplwref();
                break;
            case 5:
                return $this->getLengthmin();
                break;
            case 6:
                return $this->getLengthmax();
                break;
            case 7:
                return $this->getType();
                break;
            case 8:
                return $this->getLmaxcompare();
                break;
            case 9:
                return $this->getEsq();
                break;
            case 10:
                return $this->getNumber();
                break;
            case 11:
                return $this->getSex();
                break;
            case 12:
                return $this->getA();
                break;
            case 13:
                return $this->getAtl();
                break;
            case 14:
                return $this->getB();
                break;
            case 15:
                return $this->getCoeffdetermination();
                break;
            case 16:
                return $this->getSea();
                break;
            case 17:
                return $this->getSeb();
                break;
            case 18:
                return $this->getSda();
                break;
            case 19:
                return $this->getSdb();
                break;
            case 20:
                return $this->getLcla();
                break;
            case 21:
                return $this->getUcla();
                break;
            case 22:
                return $this->getLclb();
                break;
            case 23:
                return $this->getUclb();
                break;
            case 24:
                return $this->getMethod();
                break;
            case 25:
                return $this->getLocality();
                break;
            case 26:
                return $this->getDataref();
                break;
            case 27:
                return $this->getCCode();
                break;
            case 28:
                return $this->getComment();
                break;
            case 29:
                return $this->getEntered();
                break;
            case 30:
                return $this->getDateentered();
                break;
            case 31:
                return $this->getModified();
                break;
            case 32:
                return $this->getDatemodified();
                break;
            case 33:
                return $this->getExpert();
                break;
            case 34:
                return $this->getDatechecked();
                break;
            case 35:
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
        if (isset($alreadyDumpedObjects['Poplw'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Poplw'][$this->getPrimaryKey()] = true;
        $keys = PoplwPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getStockcode(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getFamcode(),
            $keys[4] => $this->getPoplwref(),
            $keys[5] => $this->getLengthmin(),
            $keys[6] => $this->getLengthmax(),
            $keys[7] => $this->getType(),
            $keys[8] => $this->getLmaxcompare(),
            $keys[9] => $this->getEsq(),
            $keys[10] => $this->getNumber(),
            $keys[11] => $this->getSex(),
            $keys[12] => $this->getA(),
            $keys[13] => $this->getAtl(),
            $keys[14] => $this->getB(),
            $keys[15] => $this->getCoeffdetermination(),
            $keys[16] => $this->getSea(),
            $keys[17] => $this->getSeb(),
            $keys[18] => $this->getSda(),
            $keys[19] => $this->getSdb(),
            $keys[20] => $this->getLcla(),
            $keys[21] => $this->getUcla(),
            $keys[22] => $this->getLclb(),
            $keys[23] => $this->getUclb(),
            $keys[24] => $this->getMethod(),
            $keys[25] => $this->getLocality(),
            $keys[26] => $this->getDataref(),
            $keys[27] => $this->getCCode(),
            $keys[28] => $this->getComment(),
            $keys[29] => $this->getEntered(),
            $keys[30] => $this->getDateentered(),
            $keys[31] => $this->getModified(),
            $keys[32] => $this->getDatemodified(),
            $keys[33] => $this->getExpert(),
            $keys[34] => $this->getDatechecked(),
            $keys[35] => $this->getTs(),
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
        $pos = PoplwPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setStockcode($value);
                break;
            case 2:
                $this->setSpeccode($value);
                break;
            case 3:
                $this->setFamcode($value);
                break;
            case 4:
                $this->setPoplwref($value);
                break;
            case 5:
                $this->setLengthmin($value);
                break;
            case 6:
                $this->setLengthmax($value);
                break;
            case 7:
                $this->setType($value);
                break;
            case 8:
                $this->setLmaxcompare($value);
                break;
            case 9:
                $this->setEsq($value);
                break;
            case 10:
                $this->setNumber($value);
                break;
            case 11:
                $this->setSex($value);
                break;
            case 12:
                $this->setA($value);
                break;
            case 13:
                $this->setAtl($value);
                break;
            case 14:
                $this->setB($value);
                break;
            case 15:
                $this->setCoeffdetermination($value);
                break;
            case 16:
                $this->setSea($value);
                break;
            case 17:
                $this->setSeb($value);
                break;
            case 18:
                $this->setSda($value);
                break;
            case 19:
                $this->setSdb($value);
                break;
            case 20:
                $this->setLcla($value);
                break;
            case 21:
                $this->setUcla($value);
                break;
            case 22:
                $this->setLclb($value);
                break;
            case 23:
                $this->setUclb($value);
                break;
            case 24:
                $this->setMethod($value);
                break;
            case 25:
                $this->setLocality($value);
                break;
            case 26:
                $this->setDataref($value);
                break;
            case 27:
                $this->setCCode($value);
                break;
            case 28:
                $this->setComment($value);
                break;
            case 29:
                $this->setEntered($value);
                break;
            case 30:
                $this->setDateentered($value);
                break;
            case 31:
                $this->setModified($value);
                break;
            case 32:
                $this->setDatemodified($value);
                break;
            case 33:
                $this->setExpert($value);
                break;
            case 34:
                $this->setDatechecked($value);
                break;
            case 35:
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
        $keys = PoplwPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setFamcode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPoplwref($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLengthmin($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLengthmax($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setType($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLmaxcompare($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setEsq($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setNumber($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setSex($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setA($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setAtl($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setB($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setCoeffdetermination($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setSea($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setSeb($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setSda($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setSdb($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setLcla($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setUcla($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setLclb($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setUclb($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setMethod($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setLocality($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setDataref($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setCCode($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setComment($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setEntered($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setDateentered($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setModified($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setDatemodified($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setExpert($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setDatechecked($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setTs($arr[$keys[35]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PoplwPeer::DATABASE_NAME);

        if ($this->isColumnModified(PoplwPeer::AUTOCTR)) $criteria->add(PoplwPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(PoplwPeer::STOCKCODE)) $criteria->add(PoplwPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(PoplwPeer::SPECCODE)) $criteria->add(PoplwPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(PoplwPeer::FAMCODE)) $criteria->add(PoplwPeer::FAMCODE, $this->famcode);
        if ($this->isColumnModified(PoplwPeer::POPLWREF)) $criteria->add(PoplwPeer::POPLWREF, $this->poplwref);
        if ($this->isColumnModified(PoplwPeer::LENGTHMIN)) $criteria->add(PoplwPeer::LENGTHMIN, $this->lengthmin);
        if ($this->isColumnModified(PoplwPeer::LENGTHMAX)) $criteria->add(PoplwPeer::LENGTHMAX, $this->lengthmax);
        if ($this->isColumnModified(PoplwPeer::TYPE)) $criteria->add(PoplwPeer::TYPE, $this->type);
        if ($this->isColumnModified(PoplwPeer::LMAXCOMPARE)) $criteria->add(PoplwPeer::LMAXCOMPARE, $this->lmaxcompare);
        if ($this->isColumnModified(PoplwPeer::ESQ)) $criteria->add(PoplwPeer::ESQ, $this->esq);
        if ($this->isColumnModified(PoplwPeer::NUMBER)) $criteria->add(PoplwPeer::NUMBER, $this->number);
        if ($this->isColumnModified(PoplwPeer::SEX)) $criteria->add(PoplwPeer::SEX, $this->sex);
        if ($this->isColumnModified(PoplwPeer::A)) $criteria->add(PoplwPeer::A, $this->a);
        if ($this->isColumnModified(PoplwPeer::ATL)) $criteria->add(PoplwPeer::ATL, $this->atl);
        if ($this->isColumnModified(PoplwPeer::B)) $criteria->add(PoplwPeer::B, $this->b);
        if ($this->isColumnModified(PoplwPeer::COEFFDETERMINATION)) $criteria->add(PoplwPeer::COEFFDETERMINATION, $this->coeffdetermination);
        if ($this->isColumnModified(PoplwPeer::SEA)) $criteria->add(PoplwPeer::SEA, $this->sea);
        if ($this->isColumnModified(PoplwPeer::SEB)) $criteria->add(PoplwPeer::SEB, $this->seb);
        if ($this->isColumnModified(PoplwPeer::SDA)) $criteria->add(PoplwPeer::SDA, $this->sda);
        if ($this->isColumnModified(PoplwPeer::SDB)) $criteria->add(PoplwPeer::SDB, $this->sdb);
        if ($this->isColumnModified(PoplwPeer::LCLA)) $criteria->add(PoplwPeer::LCLA, $this->lcla);
        if ($this->isColumnModified(PoplwPeer::UCLA)) $criteria->add(PoplwPeer::UCLA, $this->ucla);
        if ($this->isColumnModified(PoplwPeer::LCLB)) $criteria->add(PoplwPeer::LCLB, $this->lclb);
        if ($this->isColumnModified(PoplwPeer::UCLB)) $criteria->add(PoplwPeer::UCLB, $this->uclb);
        if ($this->isColumnModified(PoplwPeer::METHOD)) $criteria->add(PoplwPeer::METHOD, $this->method);
        if ($this->isColumnModified(PoplwPeer::LOCALITY)) $criteria->add(PoplwPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(PoplwPeer::DATAREF)) $criteria->add(PoplwPeer::DATAREF, $this->dataref);
        if ($this->isColumnModified(PoplwPeer::C_CODE)) $criteria->add(PoplwPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(PoplwPeer::COMMENT)) $criteria->add(PoplwPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(PoplwPeer::ENTERED)) $criteria->add(PoplwPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(PoplwPeer::DATEENTERED)) $criteria->add(PoplwPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(PoplwPeer::MODIFIED)) $criteria->add(PoplwPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(PoplwPeer::DATEMODIFIED)) $criteria->add(PoplwPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(PoplwPeer::EXPERT)) $criteria->add(PoplwPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(PoplwPeer::DATECHECKED)) $criteria->add(PoplwPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(PoplwPeer::TS)) $criteria->add(PoplwPeer::TS, $this->ts);

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
        $criteria = new Criteria(PoplwPeer::DATABASE_NAME);
        $criteria->add(PoplwPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of Poplw (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setFamcode($this->getFamcode());
        $copyObj->setPoplwref($this->getPoplwref());
        $copyObj->setLengthmin($this->getLengthmin());
        $copyObj->setLengthmax($this->getLengthmax());
        $copyObj->setType($this->getType());
        $copyObj->setLmaxcompare($this->getLmaxcompare());
        $copyObj->setEsq($this->getEsq());
        $copyObj->setNumber($this->getNumber());
        $copyObj->setSex($this->getSex());
        $copyObj->setA($this->getA());
        $copyObj->setAtl($this->getAtl());
        $copyObj->setB($this->getB());
        $copyObj->setCoeffdetermination($this->getCoeffdetermination());
        $copyObj->setSea($this->getSea());
        $copyObj->setSeb($this->getSeb());
        $copyObj->setSda($this->getSda());
        $copyObj->setSdb($this->getSdb());
        $copyObj->setLcla($this->getLcla());
        $copyObj->setUcla($this->getUcla());
        $copyObj->setLclb($this->getLclb());
        $copyObj->setUclb($this->getUclb());
        $copyObj->setMethod($this->getMethod());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setDataref($this->getDataref());
        $copyObj->setCCode($this->getCCode());
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
     * @return Poplw Clone of current object.
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
     * @return PoplwPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PoplwPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->stockcode = null;
        $this->speccode = null;
        $this->famcode = null;
        $this->poplwref = null;
        $this->lengthmin = null;
        $this->lengthmax = null;
        $this->type = null;
        $this->lmaxcompare = null;
        $this->esq = null;
        $this->number = null;
        $this->sex = null;
        $this->a = null;
        $this->atl = null;
        $this->b = null;
        $this->coeffdetermination = null;
        $this->sea = null;
        $this->seb = null;
        $this->sda = null;
        $this->sdb = null;
        $this->lcla = null;
        $this->ucla = null;
        $this->lclb = null;
        $this->uclb = null;
        $this->method = null;
        $this->locality = null;
        $this->dataref = null;
        $this->c_code = null;
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
        return (string) $this->exportTo(PoplwPeer::DEFAULT_STRING_FORMAT);
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
