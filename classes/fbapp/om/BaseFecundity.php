<?php


/**
 * Base class that represents a row from the 'fecundity' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFecundity extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FecundityPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FecundityPeer
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
     * The value for the mainrefno field.
     * @var        int
     */
    protected $mainrefno;

    /**
     * The value for the sourceref field.
     * @var        int
     */
    protected $sourceref;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the e_code field.
     * @var        int
     */
    protected $e_code;

    /**
     * The value for the locality field.
     * @var        string
     */
    protected $locality;

    /**
     * The value for the fecunditymin field.
     * @var        int
     */
    protected $fecunditymin;

    /**
     * The value for the weightmin field.
     * @var        double
     */
    protected $weightmin;

    /**
     * The value for the lengthfecunmin field.
     * @var        double
     */
    protected $lengthfecunmin;

    /**
     * The value for the lengthtypefecmin field.
     * @var        string
     */
    protected $lengthtypefecmin;

    /**
     * The value for the fecunditymax field.
     * @var        int
     */
    protected $fecunditymax;

    /**
     * The value for the weightmax field.
     * @var        double
     */
    protected $weightmax;

    /**
     * The value for the lengthfecunmax field.
     * @var        double
     */
    protected $lengthfecunmax;

    /**
     * The value for the lengthtypefecmax field.
     * @var        string
     */
    protected $lengthtypefecmax;

    /**
     * The value for the feccomment field.
     * @var        string
     */
    protected $feccomment;

    /**
     * The value for the fecundityref field.
     * @var        int
     */
    protected $fecundityref;

    /**
     * The value for the relfecunditymin field.
     * @var        int
     */
    protected $relfecunditymin;

    /**
     * The value for the fecunminref field.
     * @var        int
     */
    protected $fecunminref;

    /**
     * The value for the relfecunditymean field.
     * @var        int
     */
    protected $relfecunditymean;

    /**
     * The value for the fecunmeanref field.
     * @var        int
     */
    protected $fecunmeanref;

    /**
     * The value for the relfecunditymax field.
     * @var        int
     */
    protected $relfecunditymax;

    /**
     * The value for the fecunmaxref field.
     * @var        int
     */
    protected $fecunmaxref;

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
     * The value for the lengthtype field.
     * @var        string
     */
    protected $lengthtype;

    /**
     * The value for the number field.
     * @var        int
     */
    protected $number;

    /**
     * The value for the a field.
     * @var        double
     */
    protected $a;

    /**
     * The value for the b field.
     * @var        double
     */
    protected $b;

    /**
     * The value for the r2 field.
     * @var        double
     */
    protected $r2;

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
     * The value for the spawningcycles field.
     * @var        double
     */
    protected $spawningcycles;

    /**
     * The value for the spcycleref field.
     * @var        int
     */
    protected $spcycleref;

    /**
     * The value for the addinfos field.
     * @var        string
     */
    protected $addinfos;

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
     * The value for the autoctr_spawn field.
     * @var        int
     */
    protected $autoctr_spawn;

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
     * Get the [mainrefno] column value.
     *
     * @return int
     */
    public function getMainrefno()
    {

        return $this->mainrefno;
    }

    /**
     * Get the [sourceref] column value.
     *
     * @return int
     */
    public function getSourceref()
    {

        return $this->sourceref;
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
     * Get the [e_code] column value.
     *
     * @return int
     */
    public function getECode()
    {

        return $this->e_code;
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
     * Get the [fecunditymin] column value.
     *
     * @return int
     */
    public function getFecunditymin()
    {

        return $this->fecunditymin;
    }

    /**
     * Get the [weightmin] column value.
     *
     * @return double
     */
    public function getWeightmin()
    {

        return $this->weightmin;
    }

    /**
     * Get the [lengthfecunmin] column value.
     *
     * @return double
     */
    public function getLengthfecunmin()
    {

        return $this->lengthfecunmin;
    }

    /**
     * Get the [lengthtypefecmin] column value.
     *
     * @return string
     */
    public function getLengthtypefecmin()
    {

        return $this->lengthtypefecmin;
    }

    /**
     * Get the [fecunditymax] column value.
     *
     * @return int
     */
    public function getFecunditymax()
    {

        return $this->fecunditymax;
    }

    /**
     * Get the [weightmax] column value.
     *
     * @return double
     */
    public function getWeightmax()
    {

        return $this->weightmax;
    }

    /**
     * Get the [lengthfecunmax] column value.
     *
     * @return double
     */
    public function getLengthfecunmax()
    {

        return $this->lengthfecunmax;
    }

    /**
     * Get the [lengthtypefecmax] column value.
     *
     * @return string
     */
    public function getLengthtypefecmax()
    {

        return $this->lengthtypefecmax;
    }

    /**
     * Get the [feccomment] column value.
     *
     * @return string
     */
    public function getFeccomment()
    {

        return $this->feccomment;
    }

    /**
     * Get the [fecundityref] column value.
     *
     * @return int
     */
    public function getFecundityref()
    {

        return $this->fecundityref;
    }

    /**
     * Get the [relfecunditymin] column value.
     *
     * @return int
     */
    public function getRelfecunditymin()
    {

        return $this->relfecunditymin;
    }

    /**
     * Get the [fecunminref] column value.
     *
     * @return int
     */
    public function getFecunminref()
    {

        return $this->fecunminref;
    }

    /**
     * Get the [relfecunditymean] column value.
     *
     * @return int
     */
    public function getRelfecunditymean()
    {

        return $this->relfecunditymean;
    }

    /**
     * Get the [fecunmeanref] column value.
     *
     * @return int
     */
    public function getFecunmeanref()
    {

        return $this->fecunmeanref;
    }

    /**
     * Get the [relfecunditymax] column value.
     *
     * @return int
     */
    public function getRelfecunditymax()
    {

        return $this->relfecunditymax;
    }

    /**
     * Get the [fecunmaxref] column value.
     *
     * @return int
     */
    public function getFecunmaxref()
    {

        return $this->fecunmaxref;
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
     * Get the [lengthtype] column value.
     *
     * @return string
     */
    public function getLengthtype()
    {

        return $this->lengthtype;
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
     * Get the [a] column value.
     *
     * @return double
     */
    public function getA()
    {

        return $this->a;
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
     * Get the [r2] column value.
     *
     * @return double
     */
    public function getR2()
    {

        return $this->r2;
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
     * Get the [spawningcycles] column value.
     *
     * @return double
     */
    public function getSpawningcycles()
    {

        return $this->spawningcycles;
    }

    /**
     * Get the [spcycleref] column value.
     *
     * @return int
     */
    public function getSpcycleref()
    {

        return $this->spcycleref;
    }

    /**
     * Get the [addinfos] column value.
     *
     * @return string
     */
    public function getAddinfos()
    {

        return $this->addinfos;
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
     * Get the [autoctr_spawn] column value.
     *
     * @return int
     */
    public function getAutoctrSpawn()
    {

        return $this->autoctr_spawn;
    }

    /**
     * Set the value of [autoctr] column.
     *
     * @param  int $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = FecundityPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = FecundityPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = FecundityPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [mainrefno] column.
     *
     * @param  int $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setMainrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mainrefno !== $v) {
            $this->mainrefno = $v;
            $this->modifiedColumns[] = FecundityPeer::MAINREFNO;
        }


        return $this;
    } // setMainrefno()

    /**
     * Set the value of [sourceref] column.
     *
     * @param  int $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setSourceref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sourceref !== $v) {
            $this->sourceref = $v;
            $this->modifiedColumns[] = FecundityPeer::SOURCEREF;
        }


        return $this;
    } // setSourceref()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = FecundityPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [e_code] column.
     *
     * @param  int $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setECode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->e_code !== $v) {
            $this->e_code = $v;
            $this->modifiedColumns[] = FecundityPeer::E_CODE;
        }


        return $this;
    } // setECode()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = FecundityPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [fecunditymin] column.
     *
     * @param  int $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setFecunditymin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fecunditymin !== $v) {
            $this->fecunditymin = $v;
            $this->modifiedColumns[] = FecundityPeer::FECUNDITYMIN;
        }


        return $this;
    } // setFecunditymin()

    /**
     * Set the value of [weightmin] column.
     *
     * @param  double $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setWeightmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->weightmin !== $v) {
            $this->weightmin = $v;
            $this->modifiedColumns[] = FecundityPeer::WEIGHTMIN;
        }


        return $this;
    } // setWeightmin()

    /**
     * Set the value of [lengthfecunmin] column.
     *
     * @param  double $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setLengthfecunmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lengthfecunmin !== $v) {
            $this->lengthfecunmin = $v;
            $this->modifiedColumns[] = FecundityPeer::LENGTHFECUNMIN;
        }


        return $this;
    } // setLengthfecunmin()

    /**
     * Set the value of [lengthtypefecmin] column.
     *
     * @param  string $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setLengthtypefecmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lengthtypefecmin !== $v) {
            $this->lengthtypefecmin = $v;
            $this->modifiedColumns[] = FecundityPeer::LENGTHTYPEFECMIN;
        }


        return $this;
    } // setLengthtypefecmin()

    /**
     * Set the value of [fecunditymax] column.
     *
     * @param  int $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setFecunditymax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fecunditymax !== $v) {
            $this->fecunditymax = $v;
            $this->modifiedColumns[] = FecundityPeer::FECUNDITYMAX;
        }


        return $this;
    } // setFecunditymax()

    /**
     * Set the value of [weightmax] column.
     *
     * @param  double $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setWeightmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->weightmax !== $v) {
            $this->weightmax = $v;
            $this->modifiedColumns[] = FecundityPeer::WEIGHTMAX;
        }


        return $this;
    } // setWeightmax()

    /**
     * Set the value of [lengthfecunmax] column.
     *
     * @param  double $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setLengthfecunmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lengthfecunmax !== $v) {
            $this->lengthfecunmax = $v;
            $this->modifiedColumns[] = FecundityPeer::LENGTHFECUNMAX;
        }


        return $this;
    } // setLengthfecunmax()

    /**
     * Set the value of [lengthtypefecmax] column.
     *
     * @param  string $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setLengthtypefecmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lengthtypefecmax !== $v) {
            $this->lengthtypefecmax = $v;
            $this->modifiedColumns[] = FecundityPeer::LENGTHTYPEFECMAX;
        }


        return $this;
    } // setLengthtypefecmax()

    /**
     * Set the value of [feccomment] column.
     *
     * @param  string $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setFeccomment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->feccomment !== $v) {
            $this->feccomment = $v;
            $this->modifiedColumns[] = FecundityPeer::FECCOMMENT;
        }


        return $this;
    } // setFeccomment()

    /**
     * Set the value of [fecundityref] column.
     *
     * @param  int $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setFecundityref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fecundityref !== $v) {
            $this->fecundityref = $v;
            $this->modifiedColumns[] = FecundityPeer::FECUNDITYREF;
        }


        return $this;
    } // setFecundityref()

    /**
     * Set the value of [relfecunditymin] column.
     *
     * @param  int $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setRelfecunditymin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->relfecunditymin !== $v) {
            $this->relfecunditymin = $v;
            $this->modifiedColumns[] = FecundityPeer::RELFECUNDITYMIN;
        }


        return $this;
    } // setRelfecunditymin()

    /**
     * Set the value of [fecunminref] column.
     *
     * @param  int $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setFecunminref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fecunminref !== $v) {
            $this->fecunminref = $v;
            $this->modifiedColumns[] = FecundityPeer::FECUNMINREF;
        }


        return $this;
    } // setFecunminref()

    /**
     * Set the value of [relfecunditymean] column.
     *
     * @param  int $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setRelfecunditymean($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->relfecunditymean !== $v) {
            $this->relfecunditymean = $v;
            $this->modifiedColumns[] = FecundityPeer::RELFECUNDITYMEAN;
        }


        return $this;
    } // setRelfecunditymean()

    /**
     * Set the value of [fecunmeanref] column.
     *
     * @param  int $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setFecunmeanref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fecunmeanref !== $v) {
            $this->fecunmeanref = $v;
            $this->modifiedColumns[] = FecundityPeer::FECUNMEANREF;
        }


        return $this;
    } // setFecunmeanref()

    /**
     * Set the value of [relfecunditymax] column.
     *
     * @param  int $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setRelfecunditymax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->relfecunditymax !== $v) {
            $this->relfecunditymax = $v;
            $this->modifiedColumns[] = FecundityPeer::RELFECUNDITYMAX;
        }


        return $this;
    } // setRelfecunditymax()

    /**
     * Set the value of [fecunmaxref] column.
     *
     * @param  int $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setFecunmaxref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fecunmaxref !== $v) {
            $this->fecunmaxref = $v;
            $this->modifiedColumns[] = FecundityPeer::FECUNMAXREF;
        }


        return $this;
    } // setFecunmaxref()

    /**
     * Set the value of [lengthmin] column.
     *
     * @param  double $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setLengthmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lengthmin !== $v) {
            $this->lengthmin = $v;
            $this->modifiedColumns[] = FecundityPeer::LENGTHMIN;
        }


        return $this;
    } // setLengthmin()

    /**
     * Set the value of [lengthmax] column.
     *
     * @param  double $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setLengthmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lengthmax !== $v) {
            $this->lengthmax = $v;
            $this->modifiedColumns[] = FecundityPeer::LENGTHMAX;
        }


        return $this;
    } // setLengthmax()

    /**
     * Set the value of [lengthtype] column.
     *
     * @param  string $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setLengthtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lengthtype !== $v) {
            $this->lengthtype = $v;
            $this->modifiedColumns[] = FecundityPeer::LENGTHTYPE;
        }


        return $this;
    } // setLengthtype()

    /**
     * Set the value of [number] column.
     *
     * @param  int $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setNumber($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->number !== $v) {
            $this->number = $v;
            $this->modifiedColumns[] = FecundityPeer::NUMBER;
        }


        return $this;
    } // setNumber()

    /**
     * Set the value of [a] column.
     *
     * @param  double $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setA($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->a !== $v) {
            $this->a = $v;
            $this->modifiedColumns[] = FecundityPeer::A;
        }


        return $this;
    } // setA()

    /**
     * Set the value of [b] column.
     *
     * @param  double $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setB($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->b !== $v) {
            $this->b = $v;
            $this->modifiedColumns[] = FecundityPeer::B;
        }


        return $this;
    } // setB()

    /**
     * Set the value of [r2] column.
     *
     * @param  double $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setR2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->r2 !== $v) {
            $this->r2 = $v;
            $this->modifiedColumns[] = FecundityPeer::R2;
        }


        return $this;
    } // setR2()

    /**
     * Set the value of [sea] column.
     *
     * @param  double $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setSea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sea !== $v) {
            $this->sea = $v;
            $this->modifiedColumns[] = FecundityPeer::SEA;
        }


        return $this;
    } // setSea()

    /**
     * Set the value of [seb] column.
     *
     * @param  double $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setSeb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->seb !== $v) {
            $this->seb = $v;
            $this->modifiedColumns[] = FecundityPeer::SEB;
        }


        return $this;
    } // setSeb()

    /**
     * Set the value of [sda] column.
     *
     * @param  double $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setSda($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sda !== $v) {
            $this->sda = $v;
            $this->modifiedColumns[] = FecundityPeer::SDA;
        }


        return $this;
    } // setSda()

    /**
     * Set the value of [sdb] column.
     *
     * @param  double $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setSdb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sdb !== $v) {
            $this->sdb = $v;
            $this->modifiedColumns[] = FecundityPeer::SDB;
        }


        return $this;
    } // setSdb()

    /**
     * Set the value of [lcla] column.
     *
     * @param  double $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setLcla($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lcla !== $v) {
            $this->lcla = $v;
            $this->modifiedColumns[] = FecundityPeer::LCLA;
        }


        return $this;
    } // setLcla()

    /**
     * Set the value of [ucla] column.
     *
     * @param  double $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setUcla($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ucla !== $v) {
            $this->ucla = $v;
            $this->modifiedColumns[] = FecundityPeer::UCLA;
        }


        return $this;
    } // setUcla()

    /**
     * Set the value of [lclb] column.
     *
     * @param  double $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setLclb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lclb !== $v) {
            $this->lclb = $v;
            $this->modifiedColumns[] = FecundityPeer::LCLB;
        }


        return $this;
    } // setLclb()

    /**
     * Set the value of [uclb] column.
     *
     * @param  double $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setUclb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->uclb !== $v) {
            $this->uclb = $v;
            $this->modifiedColumns[] = FecundityPeer::UCLB;
        }


        return $this;
    } // setUclb()

    /**
     * Set the value of [spawningcycles] column.
     *
     * @param  double $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setSpawningcycles($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->spawningcycles !== $v) {
            $this->spawningcycles = $v;
            $this->modifiedColumns[] = FecundityPeer::SPAWNINGCYCLES;
        }


        return $this;
    } // setSpawningcycles()

    /**
     * Set the value of [spcycleref] column.
     *
     * @param  int $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setSpcycleref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spcycleref !== $v) {
            $this->spcycleref = $v;
            $this->modifiedColumns[] = FecundityPeer::SPCYCLEREF;
        }


        return $this;
    } // setSpcycleref()

    /**
     * Set the value of [addinfos] column.
     *
     * @param  string $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setAddinfos($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->addinfos !== $v) {
            $this->addinfos = $v;
            $this->modifiedColumns[] = FecundityPeer::ADDINFOS;
        }


        return $this;
    } // setAddinfos()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = FecundityPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Fecundity The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = FecundityPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = FecundityPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Fecundity The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = FecundityPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = FecundityPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Fecundity The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = FecundityPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [autoctr_spawn] column.
     *
     * @param  int $v new value
     * @return Fecundity The current object (for fluent API support)
     */
    public function setAutoctrSpawn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr_spawn !== $v) {
            $this->autoctr_spawn = $v;
            $this->modifiedColumns[] = FecundityPeer::AUTOCTR_SPAWN;
        }


        return $this;
    } // setAutoctrSpawn()

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
            $this->mainrefno = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->sourceref = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->c_code = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->e_code = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->locality = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->fecunditymin = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->weightmin = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->lengthfecunmin = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->lengthtypefecmin = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->fecunditymax = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->weightmax = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->lengthfecunmax = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->lengthtypefecmax = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->feccomment = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->fecundityref = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->relfecunditymin = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->fecunminref = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->relfecunditymean = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->fecunmeanref = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->relfecunditymax = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->fecunmaxref = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->lengthmin = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
            $this->lengthmax = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->lengthtype = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->number = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->a = ($row[$startcol + 28] !== null) ? (double) $row[$startcol + 28] : null;
            $this->b = ($row[$startcol + 29] !== null) ? (double) $row[$startcol + 29] : null;
            $this->r2 = ($row[$startcol + 30] !== null) ? (double) $row[$startcol + 30] : null;
            $this->sea = ($row[$startcol + 31] !== null) ? (double) $row[$startcol + 31] : null;
            $this->seb = ($row[$startcol + 32] !== null) ? (double) $row[$startcol + 32] : null;
            $this->sda = ($row[$startcol + 33] !== null) ? (double) $row[$startcol + 33] : null;
            $this->sdb = ($row[$startcol + 34] !== null) ? (double) $row[$startcol + 34] : null;
            $this->lcla = ($row[$startcol + 35] !== null) ? (double) $row[$startcol + 35] : null;
            $this->ucla = ($row[$startcol + 36] !== null) ? (double) $row[$startcol + 36] : null;
            $this->lclb = ($row[$startcol + 37] !== null) ? (double) $row[$startcol + 37] : null;
            $this->uclb = ($row[$startcol + 38] !== null) ? (double) $row[$startcol + 38] : null;
            $this->spawningcycles = ($row[$startcol + 39] !== null) ? (double) $row[$startcol + 39] : null;
            $this->spcycleref = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->addinfos = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->entered = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->dateentered = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->modified = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->datemodified = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->expert = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->datechecked = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->autoctr_spawn = ($row[$startcol + 48] !== null) ? (int) $row[$startcol + 48] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 49; // 49 = FecundityPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Fecundity object", $e);
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
            $con = Propel::getConnection(FecundityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FecundityPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(FecundityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FecundityQuery::create()
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
            $con = Propel::getConnection(FecundityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                FecundityPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = FecundityPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . FecundityPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(FecundityPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(FecundityPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(FecundityPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(FecundityPeer::MAINREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`MainRefNo`';
        }
        if ($this->isColumnModified(FecundityPeer::SOURCEREF)) {
            $modifiedColumns[':p' . $index++]  = '`SourceRef`';
        }
        if ($this->isColumnModified(FecundityPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(FecundityPeer::E_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`E_CODE`';
        }
        if ($this->isColumnModified(FecundityPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(FecundityPeer::FECUNDITYMIN)) {
            $modifiedColumns[':p' . $index++]  = '`FecundityMin`';
        }
        if ($this->isColumnModified(FecundityPeer::WEIGHTMIN)) {
            $modifiedColumns[':p' . $index++]  = '`WeightMin`';
        }
        if ($this->isColumnModified(FecundityPeer::LENGTHFECUNMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LengthFecunMin`';
        }
        if ($this->isColumnModified(FecundityPeer::LENGTHTYPEFECMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LengthTypeFecMin`';
        }
        if ($this->isColumnModified(FecundityPeer::FECUNDITYMAX)) {
            $modifiedColumns[':p' . $index++]  = '`FecundityMax`';
        }
        if ($this->isColumnModified(FecundityPeer::WEIGHTMAX)) {
            $modifiedColumns[':p' . $index++]  = '`WeightMax`';
        }
        if ($this->isColumnModified(FecundityPeer::LENGTHFECUNMAX)) {
            $modifiedColumns[':p' . $index++]  = '`LengthFecunMax`';
        }
        if ($this->isColumnModified(FecundityPeer::LENGTHTYPEFECMAX)) {
            $modifiedColumns[':p' . $index++]  = '`LengthTypeFecMax`';
        }
        if ($this->isColumnModified(FecundityPeer::FECCOMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`FecComment`';
        }
        if ($this->isColumnModified(FecundityPeer::FECUNDITYREF)) {
            $modifiedColumns[':p' . $index++]  = '`FecundityRef`';
        }
        if ($this->isColumnModified(FecundityPeer::RELFECUNDITYMIN)) {
            $modifiedColumns[':p' . $index++]  = '`RelFecundityMin`';
        }
        if ($this->isColumnModified(FecundityPeer::FECUNMINREF)) {
            $modifiedColumns[':p' . $index++]  = '`FecunMinRef`';
        }
        if ($this->isColumnModified(FecundityPeer::RELFECUNDITYMEAN)) {
            $modifiedColumns[':p' . $index++]  = '`RelFecundityMean`';
        }
        if ($this->isColumnModified(FecundityPeer::FECUNMEANREF)) {
            $modifiedColumns[':p' . $index++]  = '`FecunMeanRef`';
        }
        if ($this->isColumnModified(FecundityPeer::RELFECUNDITYMAX)) {
            $modifiedColumns[':p' . $index++]  = '`RelFecundityMax`';
        }
        if ($this->isColumnModified(FecundityPeer::FECUNMAXREF)) {
            $modifiedColumns[':p' . $index++]  = '`FecunMaxRef`';
        }
        if ($this->isColumnModified(FecundityPeer::LENGTHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LengthMin`';
        }
        if ($this->isColumnModified(FecundityPeer::LENGTHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`LengthMax`';
        }
        if ($this->isColumnModified(FecundityPeer::LENGTHTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`LengthType`';
        }
        if ($this->isColumnModified(FecundityPeer::NUMBER)) {
            $modifiedColumns[':p' . $index++]  = '`Number`';
        }
        if ($this->isColumnModified(FecundityPeer::A)) {
            $modifiedColumns[':p' . $index++]  = '`a`';
        }
        if ($this->isColumnModified(FecundityPeer::B)) {
            $modifiedColumns[':p' . $index++]  = '`b`';
        }
        if ($this->isColumnModified(FecundityPeer::R2)) {
            $modifiedColumns[':p' . $index++]  = '`r2`';
        }
        if ($this->isColumnModified(FecundityPeer::SEA)) {
            $modifiedColumns[':p' . $index++]  = '`SEa`';
        }
        if ($this->isColumnModified(FecundityPeer::SEB)) {
            $modifiedColumns[':p' . $index++]  = '`SEb`';
        }
        if ($this->isColumnModified(FecundityPeer::SDA)) {
            $modifiedColumns[':p' . $index++]  = '`SDa`';
        }
        if ($this->isColumnModified(FecundityPeer::SDB)) {
            $modifiedColumns[':p' . $index++]  = '`SDb`';
        }
        if ($this->isColumnModified(FecundityPeer::LCLA)) {
            $modifiedColumns[':p' . $index++]  = '`LCLa`';
        }
        if ($this->isColumnModified(FecundityPeer::UCLA)) {
            $modifiedColumns[':p' . $index++]  = '`UCLa`';
        }
        if ($this->isColumnModified(FecundityPeer::LCLB)) {
            $modifiedColumns[':p' . $index++]  = '`LCLb`';
        }
        if ($this->isColumnModified(FecundityPeer::UCLB)) {
            $modifiedColumns[':p' . $index++]  = '`UCLb`';
        }
        if ($this->isColumnModified(FecundityPeer::SPAWNINGCYCLES)) {
            $modifiedColumns[':p' . $index++]  = '`SpawningCycles`';
        }
        if ($this->isColumnModified(FecundityPeer::SPCYCLEREF)) {
            $modifiedColumns[':p' . $index++]  = '`SpCycleRef`';
        }
        if ($this->isColumnModified(FecundityPeer::ADDINFOS)) {
            $modifiedColumns[':p' . $index++]  = '`AddInfos`';
        }
        if ($this->isColumnModified(FecundityPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(FecundityPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Dateentered`';
        }
        if ($this->isColumnModified(FecundityPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(FecundityPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Datemodified`';
        }
        if ($this->isColumnModified(FecundityPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(FecundityPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`Datechecked`';
        }
        if ($this->isColumnModified(FecundityPeer::AUTOCTR_SPAWN)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr_spawn`';
        }

        $sql = sprintf(
            'INSERT INTO `fecundity` (%s) VALUES (%s)',
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
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`MainRefNo`':
                        $stmt->bindValue($identifier, $this->mainrefno, PDO::PARAM_INT);
                        break;
                    case '`SourceRef`':
                        $stmt->bindValue($identifier, $this->sourceref, PDO::PARAM_INT);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`E_CODE`':
                        $stmt->bindValue($identifier, $this->e_code, PDO::PARAM_INT);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`FecundityMin`':
                        $stmt->bindValue($identifier, $this->fecunditymin, PDO::PARAM_INT);
                        break;
                    case '`WeightMin`':
                        $stmt->bindValue($identifier, $this->weightmin, PDO::PARAM_STR);
                        break;
                    case '`LengthFecunMin`':
                        $stmt->bindValue($identifier, $this->lengthfecunmin, PDO::PARAM_STR);
                        break;
                    case '`LengthTypeFecMin`':
                        $stmt->bindValue($identifier, $this->lengthtypefecmin, PDO::PARAM_STR);
                        break;
                    case '`FecundityMax`':
                        $stmt->bindValue($identifier, $this->fecunditymax, PDO::PARAM_INT);
                        break;
                    case '`WeightMax`':
                        $stmt->bindValue($identifier, $this->weightmax, PDO::PARAM_STR);
                        break;
                    case '`LengthFecunMax`':
                        $stmt->bindValue($identifier, $this->lengthfecunmax, PDO::PARAM_STR);
                        break;
                    case '`LengthTypeFecMax`':
                        $stmt->bindValue($identifier, $this->lengthtypefecmax, PDO::PARAM_STR);
                        break;
                    case '`FecComment`':
                        $stmt->bindValue($identifier, $this->feccomment, PDO::PARAM_STR);
                        break;
                    case '`FecundityRef`':
                        $stmt->bindValue($identifier, $this->fecundityref, PDO::PARAM_INT);
                        break;
                    case '`RelFecundityMin`':
                        $stmt->bindValue($identifier, $this->relfecunditymin, PDO::PARAM_INT);
                        break;
                    case '`FecunMinRef`':
                        $stmt->bindValue($identifier, $this->fecunminref, PDO::PARAM_INT);
                        break;
                    case '`RelFecundityMean`':
                        $stmt->bindValue($identifier, $this->relfecunditymean, PDO::PARAM_INT);
                        break;
                    case '`FecunMeanRef`':
                        $stmt->bindValue($identifier, $this->fecunmeanref, PDO::PARAM_INT);
                        break;
                    case '`RelFecundityMax`':
                        $stmt->bindValue($identifier, $this->relfecunditymax, PDO::PARAM_INT);
                        break;
                    case '`FecunMaxRef`':
                        $stmt->bindValue($identifier, $this->fecunmaxref, PDO::PARAM_INT);
                        break;
                    case '`LengthMin`':
                        $stmt->bindValue($identifier, $this->lengthmin, PDO::PARAM_STR);
                        break;
                    case '`LengthMax`':
                        $stmt->bindValue($identifier, $this->lengthmax, PDO::PARAM_STR);
                        break;
                    case '`LengthType`':
                        $stmt->bindValue($identifier, $this->lengthtype, PDO::PARAM_STR);
                        break;
                    case '`Number`':
                        $stmt->bindValue($identifier, $this->number, PDO::PARAM_INT);
                        break;
                    case '`a`':
                        $stmt->bindValue($identifier, $this->a, PDO::PARAM_STR);
                        break;
                    case '`b`':
                        $stmt->bindValue($identifier, $this->b, PDO::PARAM_STR);
                        break;
                    case '`r2`':
                        $stmt->bindValue($identifier, $this->r2, PDO::PARAM_STR);
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
                    case '`SpawningCycles`':
                        $stmt->bindValue($identifier, $this->spawningcycles, PDO::PARAM_STR);
                        break;
                    case '`SpCycleRef`':
                        $stmt->bindValue($identifier, $this->spcycleref, PDO::PARAM_INT);
                        break;
                    case '`AddInfos`':
                        $stmt->bindValue($identifier, $this->addinfos, PDO::PARAM_STR);
                        break;
                    case '`Entered`':
                        $stmt->bindValue($identifier, $this->entered, PDO::PARAM_INT);
                        break;
                    case '`Dateentered`':
                        $stmt->bindValue($identifier, $this->dateentered, PDO::PARAM_STR);
                        break;
                    case '`Modified`':
                        $stmt->bindValue($identifier, $this->modified, PDO::PARAM_INT);
                        break;
                    case '`Datemodified`':
                        $stmt->bindValue($identifier, $this->datemodified, PDO::PARAM_STR);
                        break;
                    case '`Expert`':
                        $stmt->bindValue($identifier, $this->expert, PDO::PARAM_INT);
                        break;
                    case '`Datechecked`':
                        $stmt->bindValue($identifier, $this->datechecked, PDO::PARAM_STR);
                        break;
                    case '`autoctr_spawn`':
                        $stmt->bindValue($identifier, $this->autoctr_spawn, PDO::PARAM_INT);
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


            if (($retval = FecundityPeer::doValidate($this, $columns)) !== true) {
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
        $pos = FecundityPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getMainrefno();
                break;
            case 4:
                return $this->getSourceref();
                break;
            case 5:
                return $this->getCCode();
                break;
            case 6:
                return $this->getECode();
                break;
            case 7:
                return $this->getLocality();
                break;
            case 8:
                return $this->getFecunditymin();
                break;
            case 9:
                return $this->getWeightmin();
                break;
            case 10:
                return $this->getLengthfecunmin();
                break;
            case 11:
                return $this->getLengthtypefecmin();
                break;
            case 12:
                return $this->getFecunditymax();
                break;
            case 13:
                return $this->getWeightmax();
                break;
            case 14:
                return $this->getLengthfecunmax();
                break;
            case 15:
                return $this->getLengthtypefecmax();
                break;
            case 16:
                return $this->getFeccomment();
                break;
            case 17:
                return $this->getFecundityref();
                break;
            case 18:
                return $this->getRelfecunditymin();
                break;
            case 19:
                return $this->getFecunminref();
                break;
            case 20:
                return $this->getRelfecunditymean();
                break;
            case 21:
                return $this->getFecunmeanref();
                break;
            case 22:
                return $this->getRelfecunditymax();
                break;
            case 23:
                return $this->getFecunmaxref();
                break;
            case 24:
                return $this->getLengthmin();
                break;
            case 25:
                return $this->getLengthmax();
                break;
            case 26:
                return $this->getLengthtype();
                break;
            case 27:
                return $this->getNumber();
                break;
            case 28:
                return $this->getA();
                break;
            case 29:
                return $this->getB();
                break;
            case 30:
                return $this->getR2();
                break;
            case 31:
                return $this->getSea();
                break;
            case 32:
                return $this->getSeb();
                break;
            case 33:
                return $this->getSda();
                break;
            case 34:
                return $this->getSdb();
                break;
            case 35:
                return $this->getLcla();
                break;
            case 36:
                return $this->getUcla();
                break;
            case 37:
                return $this->getLclb();
                break;
            case 38:
                return $this->getUclb();
                break;
            case 39:
                return $this->getSpawningcycles();
                break;
            case 40:
                return $this->getSpcycleref();
                break;
            case 41:
                return $this->getAddinfos();
                break;
            case 42:
                return $this->getEntered();
                break;
            case 43:
                return $this->getDateentered();
                break;
            case 44:
                return $this->getModified();
                break;
            case 45:
                return $this->getDatemodified();
                break;
            case 46:
                return $this->getExpert();
                break;
            case 47:
                return $this->getDatechecked();
                break;
            case 48:
                return $this->getAutoctrSpawn();
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
        if (isset($alreadyDumpedObjects['Fecundity'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Fecundity'][$this->getPrimaryKey()] = true;
        $keys = FecundityPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getStockcode(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getMainrefno(),
            $keys[4] => $this->getSourceref(),
            $keys[5] => $this->getCCode(),
            $keys[6] => $this->getECode(),
            $keys[7] => $this->getLocality(),
            $keys[8] => $this->getFecunditymin(),
            $keys[9] => $this->getWeightmin(),
            $keys[10] => $this->getLengthfecunmin(),
            $keys[11] => $this->getLengthtypefecmin(),
            $keys[12] => $this->getFecunditymax(),
            $keys[13] => $this->getWeightmax(),
            $keys[14] => $this->getLengthfecunmax(),
            $keys[15] => $this->getLengthtypefecmax(),
            $keys[16] => $this->getFeccomment(),
            $keys[17] => $this->getFecundityref(),
            $keys[18] => $this->getRelfecunditymin(),
            $keys[19] => $this->getFecunminref(),
            $keys[20] => $this->getRelfecunditymean(),
            $keys[21] => $this->getFecunmeanref(),
            $keys[22] => $this->getRelfecunditymax(),
            $keys[23] => $this->getFecunmaxref(),
            $keys[24] => $this->getLengthmin(),
            $keys[25] => $this->getLengthmax(),
            $keys[26] => $this->getLengthtype(),
            $keys[27] => $this->getNumber(),
            $keys[28] => $this->getA(),
            $keys[29] => $this->getB(),
            $keys[30] => $this->getR2(),
            $keys[31] => $this->getSea(),
            $keys[32] => $this->getSeb(),
            $keys[33] => $this->getSda(),
            $keys[34] => $this->getSdb(),
            $keys[35] => $this->getLcla(),
            $keys[36] => $this->getUcla(),
            $keys[37] => $this->getLclb(),
            $keys[38] => $this->getUclb(),
            $keys[39] => $this->getSpawningcycles(),
            $keys[40] => $this->getSpcycleref(),
            $keys[41] => $this->getAddinfos(),
            $keys[42] => $this->getEntered(),
            $keys[43] => $this->getDateentered(),
            $keys[44] => $this->getModified(),
            $keys[45] => $this->getDatemodified(),
            $keys[46] => $this->getExpert(),
            $keys[47] => $this->getDatechecked(),
            $keys[48] => $this->getAutoctrSpawn(),
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
        $pos = FecundityPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setMainrefno($value);
                break;
            case 4:
                $this->setSourceref($value);
                break;
            case 5:
                $this->setCCode($value);
                break;
            case 6:
                $this->setECode($value);
                break;
            case 7:
                $this->setLocality($value);
                break;
            case 8:
                $this->setFecunditymin($value);
                break;
            case 9:
                $this->setWeightmin($value);
                break;
            case 10:
                $this->setLengthfecunmin($value);
                break;
            case 11:
                $this->setLengthtypefecmin($value);
                break;
            case 12:
                $this->setFecunditymax($value);
                break;
            case 13:
                $this->setWeightmax($value);
                break;
            case 14:
                $this->setLengthfecunmax($value);
                break;
            case 15:
                $this->setLengthtypefecmax($value);
                break;
            case 16:
                $this->setFeccomment($value);
                break;
            case 17:
                $this->setFecundityref($value);
                break;
            case 18:
                $this->setRelfecunditymin($value);
                break;
            case 19:
                $this->setFecunminref($value);
                break;
            case 20:
                $this->setRelfecunditymean($value);
                break;
            case 21:
                $this->setFecunmeanref($value);
                break;
            case 22:
                $this->setRelfecunditymax($value);
                break;
            case 23:
                $this->setFecunmaxref($value);
                break;
            case 24:
                $this->setLengthmin($value);
                break;
            case 25:
                $this->setLengthmax($value);
                break;
            case 26:
                $this->setLengthtype($value);
                break;
            case 27:
                $this->setNumber($value);
                break;
            case 28:
                $this->setA($value);
                break;
            case 29:
                $this->setB($value);
                break;
            case 30:
                $this->setR2($value);
                break;
            case 31:
                $this->setSea($value);
                break;
            case 32:
                $this->setSeb($value);
                break;
            case 33:
                $this->setSda($value);
                break;
            case 34:
                $this->setSdb($value);
                break;
            case 35:
                $this->setLcla($value);
                break;
            case 36:
                $this->setUcla($value);
                break;
            case 37:
                $this->setLclb($value);
                break;
            case 38:
                $this->setUclb($value);
                break;
            case 39:
                $this->setSpawningcycles($value);
                break;
            case 40:
                $this->setSpcycleref($value);
                break;
            case 41:
                $this->setAddinfos($value);
                break;
            case 42:
                $this->setEntered($value);
                break;
            case 43:
                $this->setDateentered($value);
                break;
            case 44:
                $this->setModified($value);
                break;
            case 45:
                $this->setDatemodified($value);
                break;
            case 46:
                $this->setExpert($value);
                break;
            case 47:
                $this->setDatechecked($value);
                break;
            case 48:
                $this->setAutoctrSpawn($value);
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
        $keys = FecundityPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setMainrefno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSourceref($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCCode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setECode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLocality($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setFecunditymin($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setWeightmin($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setLengthfecunmin($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setLengthtypefecmin($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setFecunditymax($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setWeightmax($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setLengthfecunmax($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setLengthtypefecmax($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setFeccomment($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setFecundityref($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setRelfecunditymin($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setFecunminref($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setRelfecunditymean($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setFecunmeanref($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setRelfecunditymax($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setFecunmaxref($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setLengthmin($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setLengthmax($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setLengthtype($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setNumber($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setA($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setB($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setR2($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setSea($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setSeb($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setSda($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setSdb($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setLcla($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setUcla($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setLclb($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setUclb($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setSpawningcycles($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setSpcycleref($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setAddinfos($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setEntered($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setDateentered($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setModified($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setDatemodified($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setExpert($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setDatechecked($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setAutoctrSpawn($arr[$keys[48]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FecundityPeer::DATABASE_NAME);

        if ($this->isColumnModified(FecundityPeer::AUTOCTR)) $criteria->add(FecundityPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(FecundityPeer::STOCKCODE)) $criteria->add(FecundityPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(FecundityPeer::SPECCODE)) $criteria->add(FecundityPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(FecundityPeer::MAINREFNO)) $criteria->add(FecundityPeer::MAINREFNO, $this->mainrefno);
        if ($this->isColumnModified(FecundityPeer::SOURCEREF)) $criteria->add(FecundityPeer::SOURCEREF, $this->sourceref);
        if ($this->isColumnModified(FecundityPeer::C_CODE)) $criteria->add(FecundityPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(FecundityPeer::E_CODE)) $criteria->add(FecundityPeer::E_CODE, $this->e_code);
        if ($this->isColumnModified(FecundityPeer::LOCALITY)) $criteria->add(FecundityPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(FecundityPeer::FECUNDITYMIN)) $criteria->add(FecundityPeer::FECUNDITYMIN, $this->fecunditymin);
        if ($this->isColumnModified(FecundityPeer::WEIGHTMIN)) $criteria->add(FecundityPeer::WEIGHTMIN, $this->weightmin);
        if ($this->isColumnModified(FecundityPeer::LENGTHFECUNMIN)) $criteria->add(FecundityPeer::LENGTHFECUNMIN, $this->lengthfecunmin);
        if ($this->isColumnModified(FecundityPeer::LENGTHTYPEFECMIN)) $criteria->add(FecundityPeer::LENGTHTYPEFECMIN, $this->lengthtypefecmin);
        if ($this->isColumnModified(FecundityPeer::FECUNDITYMAX)) $criteria->add(FecundityPeer::FECUNDITYMAX, $this->fecunditymax);
        if ($this->isColumnModified(FecundityPeer::WEIGHTMAX)) $criteria->add(FecundityPeer::WEIGHTMAX, $this->weightmax);
        if ($this->isColumnModified(FecundityPeer::LENGTHFECUNMAX)) $criteria->add(FecundityPeer::LENGTHFECUNMAX, $this->lengthfecunmax);
        if ($this->isColumnModified(FecundityPeer::LENGTHTYPEFECMAX)) $criteria->add(FecundityPeer::LENGTHTYPEFECMAX, $this->lengthtypefecmax);
        if ($this->isColumnModified(FecundityPeer::FECCOMMENT)) $criteria->add(FecundityPeer::FECCOMMENT, $this->feccomment);
        if ($this->isColumnModified(FecundityPeer::FECUNDITYREF)) $criteria->add(FecundityPeer::FECUNDITYREF, $this->fecundityref);
        if ($this->isColumnModified(FecundityPeer::RELFECUNDITYMIN)) $criteria->add(FecundityPeer::RELFECUNDITYMIN, $this->relfecunditymin);
        if ($this->isColumnModified(FecundityPeer::FECUNMINREF)) $criteria->add(FecundityPeer::FECUNMINREF, $this->fecunminref);
        if ($this->isColumnModified(FecundityPeer::RELFECUNDITYMEAN)) $criteria->add(FecundityPeer::RELFECUNDITYMEAN, $this->relfecunditymean);
        if ($this->isColumnModified(FecundityPeer::FECUNMEANREF)) $criteria->add(FecundityPeer::FECUNMEANREF, $this->fecunmeanref);
        if ($this->isColumnModified(FecundityPeer::RELFECUNDITYMAX)) $criteria->add(FecundityPeer::RELFECUNDITYMAX, $this->relfecunditymax);
        if ($this->isColumnModified(FecundityPeer::FECUNMAXREF)) $criteria->add(FecundityPeer::FECUNMAXREF, $this->fecunmaxref);
        if ($this->isColumnModified(FecundityPeer::LENGTHMIN)) $criteria->add(FecundityPeer::LENGTHMIN, $this->lengthmin);
        if ($this->isColumnModified(FecundityPeer::LENGTHMAX)) $criteria->add(FecundityPeer::LENGTHMAX, $this->lengthmax);
        if ($this->isColumnModified(FecundityPeer::LENGTHTYPE)) $criteria->add(FecundityPeer::LENGTHTYPE, $this->lengthtype);
        if ($this->isColumnModified(FecundityPeer::NUMBER)) $criteria->add(FecundityPeer::NUMBER, $this->number);
        if ($this->isColumnModified(FecundityPeer::A)) $criteria->add(FecundityPeer::A, $this->a);
        if ($this->isColumnModified(FecundityPeer::B)) $criteria->add(FecundityPeer::B, $this->b);
        if ($this->isColumnModified(FecundityPeer::R2)) $criteria->add(FecundityPeer::R2, $this->r2);
        if ($this->isColumnModified(FecundityPeer::SEA)) $criteria->add(FecundityPeer::SEA, $this->sea);
        if ($this->isColumnModified(FecundityPeer::SEB)) $criteria->add(FecundityPeer::SEB, $this->seb);
        if ($this->isColumnModified(FecundityPeer::SDA)) $criteria->add(FecundityPeer::SDA, $this->sda);
        if ($this->isColumnModified(FecundityPeer::SDB)) $criteria->add(FecundityPeer::SDB, $this->sdb);
        if ($this->isColumnModified(FecundityPeer::LCLA)) $criteria->add(FecundityPeer::LCLA, $this->lcla);
        if ($this->isColumnModified(FecundityPeer::UCLA)) $criteria->add(FecundityPeer::UCLA, $this->ucla);
        if ($this->isColumnModified(FecundityPeer::LCLB)) $criteria->add(FecundityPeer::LCLB, $this->lclb);
        if ($this->isColumnModified(FecundityPeer::UCLB)) $criteria->add(FecundityPeer::UCLB, $this->uclb);
        if ($this->isColumnModified(FecundityPeer::SPAWNINGCYCLES)) $criteria->add(FecundityPeer::SPAWNINGCYCLES, $this->spawningcycles);
        if ($this->isColumnModified(FecundityPeer::SPCYCLEREF)) $criteria->add(FecundityPeer::SPCYCLEREF, $this->spcycleref);
        if ($this->isColumnModified(FecundityPeer::ADDINFOS)) $criteria->add(FecundityPeer::ADDINFOS, $this->addinfos);
        if ($this->isColumnModified(FecundityPeer::ENTERED)) $criteria->add(FecundityPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(FecundityPeer::DATEENTERED)) $criteria->add(FecundityPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(FecundityPeer::MODIFIED)) $criteria->add(FecundityPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(FecundityPeer::DATEMODIFIED)) $criteria->add(FecundityPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(FecundityPeer::EXPERT)) $criteria->add(FecundityPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(FecundityPeer::DATECHECKED)) $criteria->add(FecundityPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(FecundityPeer::AUTOCTR_SPAWN)) $criteria->add(FecundityPeer::AUTOCTR_SPAWN, $this->autoctr_spawn);

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
        $criteria = new Criteria(FecundityPeer::DATABASE_NAME);
        $criteria->add(FecundityPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of Fecundity (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setMainrefno($this->getMainrefno());
        $copyObj->setSourceref($this->getSourceref());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setECode($this->getECode());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setFecunditymin($this->getFecunditymin());
        $copyObj->setWeightmin($this->getWeightmin());
        $copyObj->setLengthfecunmin($this->getLengthfecunmin());
        $copyObj->setLengthtypefecmin($this->getLengthtypefecmin());
        $copyObj->setFecunditymax($this->getFecunditymax());
        $copyObj->setWeightmax($this->getWeightmax());
        $copyObj->setLengthfecunmax($this->getLengthfecunmax());
        $copyObj->setLengthtypefecmax($this->getLengthtypefecmax());
        $copyObj->setFeccomment($this->getFeccomment());
        $copyObj->setFecundityref($this->getFecundityref());
        $copyObj->setRelfecunditymin($this->getRelfecunditymin());
        $copyObj->setFecunminref($this->getFecunminref());
        $copyObj->setRelfecunditymean($this->getRelfecunditymean());
        $copyObj->setFecunmeanref($this->getFecunmeanref());
        $copyObj->setRelfecunditymax($this->getRelfecunditymax());
        $copyObj->setFecunmaxref($this->getFecunmaxref());
        $copyObj->setLengthmin($this->getLengthmin());
        $copyObj->setLengthmax($this->getLengthmax());
        $copyObj->setLengthtype($this->getLengthtype());
        $copyObj->setNumber($this->getNumber());
        $copyObj->setA($this->getA());
        $copyObj->setB($this->getB());
        $copyObj->setR2($this->getR2());
        $copyObj->setSea($this->getSea());
        $copyObj->setSeb($this->getSeb());
        $copyObj->setSda($this->getSda());
        $copyObj->setSdb($this->getSdb());
        $copyObj->setLcla($this->getLcla());
        $copyObj->setUcla($this->getUcla());
        $copyObj->setLclb($this->getLclb());
        $copyObj->setUclb($this->getUclb());
        $copyObj->setSpawningcycles($this->getSpawningcycles());
        $copyObj->setSpcycleref($this->getSpcycleref());
        $copyObj->setAddinfos($this->getAddinfos());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setAutoctrSpawn($this->getAutoctrSpawn());
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
     * @return Fecundity Clone of current object.
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
     * @return FecundityPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FecundityPeer();
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
        $this->mainrefno = null;
        $this->sourceref = null;
        $this->c_code = null;
        $this->e_code = null;
        $this->locality = null;
        $this->fecunditymin = null;
        $this->weightmin = null;
        $this->lengthfecunmin = null;
        $this->lengthtypefecmin = null;
        $this->fecunditymax = null;
        $this->weightmax = null;
        $this->lengthfecunmax = null;
        $this->lengthtypefecmax = null;
        $this->feccomment = null;
        $this->fecundityref = null;
        $this->relfecunditymin = null;
        $this->fecunminref = null;
        $this->relfecunditymean = null;
        $this->fecunmeanref = null;
        $this->relfecunditymax = null;
        $this->fecunmaxref = null;
        $this->lengthmin = null;
        $this->lengthmax = null;
        $this->lengthtype = null;
        $this->number = null;
        $this->a = null;
        $this->b = null;
        $this->r2 = null;
        $this->sea = null;
        $this->seb = null;
        $this->sda = null;
        $this->sdb = null;
        $this->lcla = null;
        $this->ucla = null;
        $this->lclb = null;
        $this->uclb = null;
        $this->spawningcycles = null;
        $this->spcycleref = null;
        $this->addinfos = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->autoctr_spawn = null;
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
        return (string) $this->exportTo(FecundityPeer::DEFAULT_STRING_FORMAT);
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
