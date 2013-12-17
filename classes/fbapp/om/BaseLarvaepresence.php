<?php


/**
 * Base class that represents a row from the 'larvaepresence' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseLarvaepresence extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'LarvaepresencePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        LarvaepresencePeer
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
     * The value for the larvalrefno field.
     * @var        int
     */
    protected $larvalrefno;

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
     * The value for the larvalarea field.
     * @var        string
     */
    protected $larvalarea;

    /**
     * The value for the latitudedeg field.
     * @var        int
     */
    protected $latitudedeg;

    /**
     * The value for the latitudemin field.
     * @var        double
     */
    protected $latitudemin;

    /**
     * The value for the northsouth field.
     * @var        string
     */
    protected $northsouth;

    /**
     * The value for the latitudedegto field.
     * @var        int
     */
    protected $latitudedegto;

    /**
     * The value for the latitudeminto field.
     * @var        double
     */
    protected $latitudeminto;

    /**
     * The value for the northsouthto field.
     * @var        string
     */
    protected $northsouthto;

    /**
     * The value for the longitudedeg field.
     * @var        int
     */
    protected $longitudedeg;

    /**
     * The value for the longitudemin field.
     * @var        double
     */
    protected $longitudemin;

    /**
     * The value for the eastwest field.
     * @var        string
     */
    protected $eastwest;

    /**
     * The value for the longitudedegto field.
     * @var        int
     */
    protected $longitudedegto;

    /**
     * The value for the longitudeminto field.
     * @var        double
     */
    protected $longitudeminto;

    /**
     * The value for the eastwestto field.
     * @var        string
     */
    protected $eastwestto;

    /**
     * The value for the jan field.
     * @var        double
     */
    protected $jan;

    /**
     * The value for the feb field.
     * @var        double
     */
    protected $feb;

    /**
     * The value for the mar field.
     * @var        double
     */
    protected $mar;

    /**
     * The value for the apr field.
     * @var        double
     */
    protected $apr;

    /**
     * The value for the may field.
     * @var        double
     */
    protected $may;

    /**
     * The value for the jun field.
     * @var        double
     */
    protected $jun;

    /**
     * The value for the jul field.
     * @var        double
     */
    protected $jul;

    /**
     * The value for the aug field.
     * @var        double
     */
    protected $aug;

    /**
     * The value for the sep field.
     * @var        double
     */
    protected $sep;

    /**
     * The value for the oct field.
     * @var        double
     */
    protected $oct;

    /**
     * The value for the nov field.
     * @var        double
     */
    protected $nov;

    /**
     * The value for the dec field.
     * @var        double
     */
    protected $dec;

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
     * The value for the larvpresremarks field.
     * @var        string
     */
    protected $larvpresremarks;

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
     * Get the [larvalrefno] column value.
     *
     * @return int
     */
    public function getLarvalrefno()
    {

        return $this->larvalrefno;
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
     * Get the [larvalarea] column value.
     *
     * @return string
     */
    public function getLarvalarea()
    {

        return $this->larvalarea;
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
     * @return double
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
     * Get the [latitudedegto] column value.
     *
     * @return int
     */
    public function getLatitudedegto()
    {

        return $this->latitudedegto;
    }

    /**
     * Get the [latitudeminto] column value.
     *
     * @return double
     */
    public function getLatitudeminto()
    {

        return $this->latitudeminto;
    }

    /**
     * Get the [northsouthto] column value.
     *
     * @return string
     */
    public function getNorthsouthto()
    {

        return $this->northsouthto;
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
     * @return double
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
     * Get the [longitudedegto] column value.
     *
     * @return int
     */
    public function getLongitudedegto()
    {

        return $this->longitudedegto;
    }

    /**
     * Get the [longitudeminto] column value.
     *
     * @return double
     */
    public function getLongitudeminto()
    {

        return $this->longitudeminto;
    }

    /**
     * Get the [eastwestto] column value.
     *
     * @return string
     */
    public function getEastwestto()
    {

        return $this->eastwestto;
    }

    /**
     * Get the [jan] column value.
     *
     * @return double
     */
    public function getJan()
    {

        return $this->jan;
    }

    /**
     * Get the [feb] column value.
     *
     * @return double
     */
    public function getFeb()
    {

        return $this->feb;
    }

    /**
     * Get the [mar] column value.
     *
     * @return double
     */
    public function getMar()
    {

        return $this->mar;
    }

    /**
     * Get the [apr] column value.
     *
     * @return double
     */
    public function getApr()
    {

        return $this->apr;
    }

    /**
     * Get the [may] column value.
     *
     * @return double
     */
    public function getMay()
    {

        return $this->may;
    }

    /**
     * Get the [jun] column value.
     *
     * @return double
     */
    public function getJun()
    {

        return $this->jun;
    }

    /**
     * Get the [jul] column value.
     *
     * @return double
     */
    public function getJul()
    {

        return $this->jul;
    }

    /**
     * Get the [aug] column value.
     *
     * @return double
     */
    public function getAug()
    {

        return $this->aug;
    }

    /**
     * Get the [sep] column value.
     *
     * @return double
     */
    public function getSep()
    {

        return $this->sep;
    }

    /**
     * Get the [oct] column value.
     *
     * @return double
     */
    public function getOct()
    {

        return $this->oct;
    }

    /**
     * Get the [nov] column value.
     *
     * @return double
     */
    public function getNov()
    {

        return $this->nov;
    }

    /**
     * Get the [dec] column value.
     *
     * @return double
     */
    public function getDec()
    {

        return $this->dec;
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
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateentered($format = '%x')
    {
        if ($this->dateentered === null) {
            return null;
        }

        if ($this->dateentered === '0000-00-00') {
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
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatemodified($format = '%x')
    {
        if ($this->datemodified === null) {
            return null;
        }

        if ($this->datemodified === '0000-00-00') {
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
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatechecked($format = '%x')
    {
        if ($this->datechecked === null) {
            return null;
        }

        if ($this->datechecked === '0000-00-00') {
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
     * Get the [larvpresremarks] column value.
     *
     * @return string
     */
    public function getLarvpresremarks()
    {

        return $this->larvpresremarks;
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
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [larvalrefno] column.
     *
     * @param  int $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setLarvalrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->larvalrefno !== $v) {
            $this->larvalrefno = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::LARVALREFNO;
        }


        return $this;
    } // setLarvalrefno()

    /**
     * Set the value of [sourceref] column.
     *
     * @param  int $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setSourceref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sourceref !== $v) {
            $this->sourceref = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::SOURCEREF;
        }


        return $this;
    } // setSourceref()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [larvalarea] column.
     *
     * @param  string $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setLarvalarea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->larvalarea !== $v) {
            $this->larvalarea = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::LARVALAREA;
        }


        return $this;
    } // setLarvalarea()

    /**
     * Set the value of [latitudedeg] column.
     *
     * @param  int $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setLatitudedeg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->latitudedeg !== $v) {
            $this->latitudedeg = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::LATITUDEDEG;
        }


        return $this;
    } // setLatitudedeg()

    /**
     * Set the value of [latitudemin] column.
     *
     * @param  double $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setLatitudemin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->latitudemin !== $v) {
            $this->latitudemin = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::LATITUDEMIN;
        }


        return $this;
    } // setLatitudemin()

    /**
     * Set the value of [northsouth] column.
     *
     * @param  string $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setNorthsouth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northsouth !== $v) {
            $this->northsouth = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::NORTHSOUTH;
        }


        return $this;
    } // setNorthsouth()

    /**
     * Set the value of [latitudedegto] column.
     *
     * @param  int $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setLatitudedegto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->latitudedegto !== $v) {
            $this->latitudedegto = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::LATITUDEDEGTO;
        }


        return $this;
    } // setLatitudedegto()

    /**
     * Set the value of [latitudeminto] column.
     *
     * @param  double $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setLatitudeminto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->latitudeminto !== $v) {
            $this->latitudeminto = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::LATITUDEMINTO;
        }


        return $this;
    } // setLatitudeminto()

    /**
     * Set the value of [northsouthto] column.
     *
     * @param  string $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setNorthsouthto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northsouthto !== $v) {
            $this->northsouthto = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::NORTHSOUTHTO;
        }


        return $this;
    } // setNorthsouthto()

    /**
     * Set the value of [longitudedeg] column.
     *
     * @param  int $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setLongitudedeg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->longitudedeg !== $v) {
            $this->longitudedeg = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::LONGITUDEDEG;
        }


        return $this;
    } // setLongitudedeg()

    /**
     * Set the value of [longitudemin] column.
     *
     * @param  double $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setLongitudemin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->longitudemin !== $v) {
            $this->longitudemin = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::LONGITUDEMIN;
        }


        return $this;
    } // setLongitudemin()

    /**
     * Set the value of [eastwest] column.
     *
     * @param  string $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setEastwest($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eastwest !== $v) {
            $this->eastwest = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::EASTWEST;
        }


        return $this;
    } // setEastwest()

    /**
     * Set the value of [longitudedegto] column.
     *
     * @param  int $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setLongitudedegto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->longitudedegto !== $v) {
            $this->longitudedegto = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::LONGITUDEDEGTO;
        }


        return $this;
    } // setLongitudedegto()

    /**
     * Set the value of [longitudeminto] column.
     *
     * @param  double $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setLongitudeminto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->longitudeminto !== $v) {
            $this->longitudeminto = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::LONGITUDEMINTO;
        }


        return $this;
    } // setLongitudeminto()

    /**
     * Set the value of [eastwestto] column.
     *
     * @param  string $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setEastwestto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eastwestto !== $v) {
            $this->eastwestto = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::EASTWESTTO;
        }


        return $this;
    } // setEastwestto()

    /**
     * Set the value of [jan] column.
     *
     * @param  double $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setJan($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->jan !== $v) {
            $this->jan = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::JAN;
        }


        return $this;
    } // setJan()

    /**
     * Set the value of [feb] column.
     *
     * @param  double $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setFeb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->feb !== $v) {
            $this->feb = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::FEB;
        }


        return $this;
    } // setFeb()

    /**
     * Set the value of [mar] column.
     *
     * @param  double $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setMar($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->mar !== $v) {
            $this->mar = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::MAR;
        }


        return $this;
    } // setMar()

    /**
     * Set the value of [apr] column.
     *
     * @param  double $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setApr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->apr !== $v) {
            $this->apr = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::APR;
        }


        return $this;
    } // setApr()

    /**
     * Set the value of [may] column.
     *
     * @param  double $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setMay($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->may !== $v) {
            $this->may = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::MAY;
        }


        return $this;
    } // setMay()

    /**
     * Set the value of [jun] column.
     *
     * @param  double $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setJun($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->jun !== $v) {
            $this->jun = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::JUN;
        }


        return $this;
    } // setJun()

    /**
     * Set the value of [jul] column.
     *
     * @param  double $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setJul($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->jul !== $v) {
            $this->jul = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::JUL;
        }


        return $this;
    } // setJul()

    /**
     * Set the value of [aug] column.
     *
     * @param  double $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setAug($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->aug !== $v) {
            $this->aug = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::AUG;
        }


        return $this;
    } // setAug()

    /**
     * Set the value of [sep] column.
     *
     * @param  double $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setSep($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sep !== $v) {
            $this->sep = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::SEP;
        }


        return $this;
    } // setSep()

    /**
     * Set the value of [oct] column.
     *
     * @param  double $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setOct($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oct !== $v) {
            $this->oct = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::OCT;
        }


        return $this;
    } // setOct()

    /**
     * Set the value of [nov] column.
     *
     * @param  double $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setNov($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->nov !== $v) {
            $this->nov = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::NOV;
        }


        return $this;
    } // setNov()

    /**
     * Set the value of [dec] column.
     *
     * @param  double $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setDec($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->dec !== $v) {
            $this->dec = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::DEC;
        }


        return $this;
    } // setDec()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = LarvaepresencePeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = LarvaepresencePeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = LarvaepresencePeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [larvpresremarks] column.
     *
     * @param  string $v new value
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setLarvpresremarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->larvpresremarks !== $v) {
            $this->larvpresremarks = $v;
            $this->modifiedColumns[] = LarvaepresencePeer::LARVPRESREMARKS;
        }


        return $this;
    } // setLarvpresremarks()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Larvaepresence The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = LarvaepresencePeer::TS;
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
            $this->larvalrefno = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->sourceref = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->c_code = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->larvalarea = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->latitudedeg = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->latitudemin = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->northsouth = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->latitudedegto = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->latitudeminto = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->northsouthto = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->longitudedeg = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->longitudemin = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->eastwest = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->longitudedegto = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->longitudeminto = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->eastwestto = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->jan = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->feb = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->mar = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->apr = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->may = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
            $this->jun = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
            $this->jul = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->aug = ($row[$startcol + 26] !== null) ? (double) $row[$startcol + 26] : null;
            $this->sep = ($row[$startcol + 27] !== null) ? (double) $row[$startcol + 27] : null;
            $this->oct = ($row[$startcol + 28] !== null) ? (double) $row[$startcol + 28] : null;
            $this->nov = ($row[$startcol + 29] !== null) ? (double) $row[$startcol + 29] : null;
            $this->dec = ($row[$startcol + 30] !== null) ? (double) $row[$startcol + 30] : null;
            $this->entered = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->dateentered = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->modified = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->datemodified = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->expert = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->datechecked = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->larvpresremarks = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->ts = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 39; // 39 = LarvaepresencePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Larvaepresence object", $e);
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
            $con = Propel::getConnection(LarvaepresencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = LarvaepresencePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(LarvaepresencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = LarvaepresenceQuery::create()
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
            $con = Propel::getConnection(LarvaepresencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                LarvaepresencePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = LarvaepresencePeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . LarvaepresencePeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(LarvaepresencePeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`Autoctr`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::LARVALREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`LarvalRefNo`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::SOURCEREF)) {
            $modifiedColumns[':p' . $index++]  = '`SourceRef`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::LARVALAREA)) {
            $modifiedColumns[':p' . $index++]  = '`Larvalarea`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::LATITUDEDEG)) {
            $modifiedColumns[':p' . $index++]  = '`LatitudeDeg`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::LATITUDEMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LatitudeMin`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::NORTHSOUTH)) {
            $modifiedColumns[':p' . $index++]  = '`NorthSouth`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::LATITUDEDEGTO)) {
            $modifiedColumns[':p' . $index++]  = '`LatitudeDegTo`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::LATITUDEMINTO)) {
            $modifiedColumns[':p' . $index++]  = '`LatitudeMinTo`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::NORTHSOUTHTO)) {
            $modifiedColumns[':p' . $index++]  = '`NorthSouthTo`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::LONGITUDEDEG)) {
            $modifiedColumns[':p' . $index++]  = '`LongitudeDeg`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::LONGITUDEMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LongitudeMin`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::EASTWEST)) {
            $modifiedColumns[':p' . $index++]  = '`EastWest`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::LONGITUDEDEGTO)) {
            $modifiedColumns[':p' . $index++]  = '`LongitudeDegTo`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::LONGITUDEMINTO)) {
            $modifiedColumns[':p' . $index++]  = '`LongitudeMinTo`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::EASTWESTTO)) {
            $modifiedColumns[':p' . $index++]  = '`EastWestTo`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::JAN)) {
            $modifiedColumns[':p' . $index++]  = '`Jan`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::FEB)) {
            $modifiedColumns[':p' . $index++]  = '`Feb`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::MAR)) {
            $modifiedColumns[':p' . $index++]  = '`Mar`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::APR)) {
            $modifiedColumns[':p' . $index++]  = '`Apr`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::MAY)) {
            $modifiedColumns[':p' . $index++]  = '`May`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::JUN)) {
            $modifiedColumns[':p' . $index++]  = '`Jun`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::JUL)) {
            $modifiedColumns[':p' . $index++]  = '`Jul`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::AUG)) {
            $modifiedColumns[':p' . $index++]  = '`Aug`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::SEP)) {
            $modifiedColumns[':p' . $index++]  = '`Sep`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::OCT)) {
            $modifiedColumns[':p' . $index++]  = '`Oct`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::NOV)) {
            $modifiedColumns[':p' . $index++]  = '`Nov`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::DEC)) {
            $modifiedColumns[':p' . $index++]  = '`Dec`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::LARVPRESREMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`LarvPresRemarks`';
        }
        if ($this->isColumnModified(LarvaepresencePeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `larvaepresence` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`Autoctr`':
                        $stmt->bindValue($identifier, $this->autoctr, PDO::PARAM_INT);
                        break;
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`LarvalRefNo`':
                        $stmt->bindValue($identifier, $this->larvalrefno, PDO::PARAM_INT);
                        break;
                    case '`SourceRef`':
                        $stmt->bindValue($identifier, $this->sourceref, PDO::PARAM_INT);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`Larvalarea`':
                        $stmt->bindValue($identifier, $this->larvalarea, PDO::PARAM_STR);
                        break;
                    case '`LatitudeDeg`':
                        $stmt->bindValue($identifier, $this->latitudedeg, PDO::PARAM_INT);
                        break;
                    case '`LatitudeMin`':
                        $stmt->bindValue($identifier, $this->latitudemin, PDO::PARAM_STR);
                        break;
                    case '`NorthSouth`':
                        $stmt->bindValue($identifier, $this->northsouth, PDO::PARAM_STR);
                        break;
                    case '`LatitudeDegTo`':
                        $stmt->bindValue($identifier, $this->latitudedegto, PDO::PARAM_INT);
                        break;
                    case '`LatitudeMinTo`':
                        $stmt->bindValue($identifier, $this->latitudeminto, PDO::PARAM_STR);
                        break;
                    case '`NorthSouthTo`':
                        $stmt->bindValue($identifier, $this->northsouthto, PDO::PARAM_STR);
                        break;
                    case '`LongitudeDeg`':
                        $stmt->bindValue($identifier, $this->longitudedeg, PDO::PARAM_INT);
                        break;
                    case '`LongitudeMin`':
                        $stmt->bindValue($identifier, $this->longitudemin, PDO::PARAM_STR);
                        break;
                    case '`EastWest`':
                        $stmt->bindValue($identifier, $this->eastwest, PDO::PARAM_STR);
                        break;
                    case '`LongitudeDegTo`':
                        $stmt->bindValue($identifier, $this->longitudedegto, PDO::PARAM_INT);
                        break;
                    case '`LongitudeMinTo`':
                        $stmt->bindValue($identifier, $this->longitudeminto, PDO::PARAM_STR);
                        break;
                    case '`EastWestTo`':
                        $stmt->bindValue($identifier, $this->eastwestto, PDO::PARAM_STR);
                        break;
                    case '`Jan`':
                        $stmt->bindValue($identifier, $this->jan, PDO::PARAM_STR);
                        break;
                    case '`Feb`':
                        $stmt->bindValue($identifier, $this->feb, PDO::PARAM_STR);
                        break;
                    case '`Mar`':
                        $stmt->bindValue($identifier, $this->mar, PDO::PARAM_STR);
                        break;
                    case '`Apr`':
                        $stmt->bindValue($identifier, $this->apr, PDO::PARAM_STR);
                        break;
                    case '`May`':
                        $stmt->bindValue($identifier, $this->may, PDO::PARAM_STR);
                        break;
                    case '`Jun`':
                        $stmt->bindValue($identifier, $this->jun, PDO::PARAM_STR);
                        break;
                    case '`Jul`':
                        $stmt->bindValue($identifier, $this->jul, PDO::PARAM_STR);
                        break;
                    case '`Aug`':
                        $stmt->bindValue($identifier, $this->aug, PDO::PARAM_STR);
                        break;
                    case '`Sep`':
                        $stmt->bindValue($identifier, $this->sep, PDO::PARAM_STR);
                        break;
                    case '`Oct`':
                        $stmt->bindValue($identifier, $this->oct, PDO::PARAM_STR);
                        break;
                    case '`Nov`':
                        $stmt->bindValue($identifier, $this->nov, PDO::PARAM_STR);
                        break;
                    case '`Dec`':
                        $stmt->bindValue($identifier, $this->dec, PDO::PARAM_STR);
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
                    case '`LarvPresRemarks`':
                        $stmt->bindValue($identifier, $this->larvpresremarks, PDO::PARAM_STR);
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


            if (($retval = LarvaepresencePeer::doValidate($this, $columns)) !== true) {
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
        $pos = LarvaepresencePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getLarvalrefno();
                break;
            case 4:
                return $this->getSourceref();
                break;
            case 5:
                return $this->getCCode();
                break;
            case 6:
                return $this->getLarvalarea();
                break;
            case 7:
                return $this->getLatitudedeg();
                break;
            case 8:
                return $this->getLatitudemin();
                break;
            case 9:
                return $this->getNorthsouth();
                break;
            case 10:
                return $this->getLatitudedegto();
                break;
            case 11:
                return $this->getLatitudeminto();
                break;
            case 12:
                return $this->getNorthsouthto();
                break;
            case 13:
                return $this->getLongitudedeg();
                break;
            case 14:
                return $this->getLongitudemin();
                break;
            case 15:
                return $this->getEastwest();
                break;
            case 16:
                return $this->getLongitudedegto();
                break;
            case 17:
                return $this->getLongitudeminto();
                break;
            case 18:
                return $this->getEastwestto();
                break;
            case 19:
                return $this->getJan();
                break;
            case 20:
                return $this->getFeb();
                break;
            case 21:
                return $this->getMar();
                break;
            case 22:
                return $this->getApr();
                break;
            case 23:
                return $this->getMay();
                break;
            case 24:
                return $this->getJun();
                break;
            case 25:
                return $this->getJul();
                break;
            case 26:
                return $this->getAug();
                break;
            case 27:
                return $this->getSep();
                break;
            case 28:
                return $this->getOct();
                break;
            case 29:
                return $this->getNov();
                break;
            case 30:
                return $this->getDec();
                break;
            case 31:
                return $this->getEntered();
                break;
            case 32:
                return $this->getDateentered();
                break;
            case 33:
                return $this->getModified();
                break;
            case 34:
                return $this->getDatemodified();
                break;
            case 35:
                return $this->getExpert();
                break;
            case 36:
                return $this->getDatechecked();
                break;
            case 37:
                return $this->getLarvpresremarks();
                break;
            case 38:
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
        if (isset($alreadyDumpedObjects['Larvaepresence'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Larvaepresence'][serialize($this->getPrimaryKey())] = true;
        $keys = LarvaepresencePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getStockcode(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getLarvalrefno(),
            $keys[4] => $this->getSourceref(),
            $keys[5] => $this->getCCode(),
            $keys[6] => $this->getLarvalarea(),
            $keys[7] => $this->getLatitudedeg(),
            $keys[8] => $this->getLatitudemin(),
            $keys[9] => $this->getNorthsouth(),
            $keys[10] => $this->getLatitudedegto(),
            $keys[11] => $this->getLatitudeminto(),
            $keys[12] => $this->getNorthsouthto(),
            $keys[13] => $this->getLongitudedeg(),
            $keys[14] => $this->getLongitudemin(),
            $keys[15] => $this->getEastwest(),
            $keys[16] => $this->getLongitudedegto(),
            $keys[17] => $this->getLongitudeminto(),
            $keys[18] => $this->getEastwestto(),
            $keys[19] => $this->getJan(),
            $keys[20] => $this->getFeb(),
            $keys[21] => $this->getMar(),
            $keys[22] => $this->getApr(),
            $keys[23] => $this->getMay(),
            $keys[24] => $this->getJun(),
            $keys[25] => $this->getJul(),
            $keys[26] => $this->getAug(),
            $keys[27] => $this->getSep(),
            $keys[28] => $this->getOct(),
            $keys[29] => $this->getNov(),
            $keys[30] => $this->getDec(),
            $keys[31] => $this->getEntered(),
            $keys[32] => $this->getDateentered(),
            $keys[33] => $this->getModified(),
            $keys[34] => $this->getDatemodified(),
            $keys[35] => $this->getExpert(),
            $keys[36] => $this->getDatechecked(),
            $keys[37] => $this->getLarvpresremarks(),
            $keys[38] => $this->getTs(),
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
        $pos = LarvaepresencePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setLarvalrefno($value);
                break;
            case 4:
                $this->setSourceref($value);
                break;
            case 5:
                $this->setCCode($value);
                break;
            case 6:
                $this->setLarvalarea($value);
                break;
            case 7:
                $this->setLatitudedeg($value);
                break;
            case 8:
                $this->setLatitudemin($value);
                break;
            case 9:
                $this->setNorthsouth($value);
                break;
            case 10:
                $this->setLatitudedegto($value);
                break;
            case 11:
                $this->setLatitudeminto($value);
                break;
            case 12:
                $this->setNorthsouthto($value);
                break;
            case 13:
                $this->setLongitudedeg($value);
                break;
            case 14:
                $this->setLongitudemin($value);
                break;
            case 15:
                $this->setEastwest($value);
                break;
            case 16:
                $this->setLongitudedegto($value);
                break;
            case 17:
                $this->setLongitudeminto($value);
                break;
            case 18:
                $this->setEastwestto($value);
                break;
            case 19:
                $this->setJan($value);
                break;
            case 20:
                $this->setFeb($value);
                break;
            case 21:
                $this->setMar($value);
                break;
            case 22:
                $this->setApr($value);
                break;
            case 23:
                $this->setMay($value);
                break;
            case 24:
                $this->setJun($value);
                break;
            case 25:
                $this->setJul($value);
                break;
            case 26:
                $this->setAug($value);
                break;
            case 27:
                $this->setSep($value);
                break;
            case 28:
                $this->setOct($value);
                break;
            case 29:
                $this->setNov($value);
                break;
            case 30:
                $this->setDec($value);
                break;
            case 31:
                $this->setEntered($value);
                break;
            case 32:
                $this->setDateentered($value);
                break;
            case 33:
                $this->setModified($value);
                break;
            case 34:
                $this->setDatemodified($value);
                break;
            case 35:
                $this->setExpert($value);
                break;
            case 36:
                $this->setDatechecked($value);
                break;
            case 37:
                $this->setLarvpresremarks($value);
                break;
            case 38:
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
        $keys = LarvaepresencePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLarvalrefno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSourceref($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCCode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLarvalarea($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLatitudedeg($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLatitudemin($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setNorthsouth($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setLatitudedegto($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setLatitudeminto($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNorthsouthto($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setLongitudedeg($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setLongitudemin($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setEastwest($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setLongitudedegto($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setLongitudeminto($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setEastwestto($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setJan($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setFeb($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setMar($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setApr($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setMay($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setJun($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setJul($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setAug($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setSep($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setOct($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setNov($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setDec($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setEntered($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setDateentered($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setModified($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setDatemodified($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setExpert($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setDatechecked($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setLarvpresremarks($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setTs($arr[$keys[38]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(LarvaepresencePeer::DATABASE_NAME);

        if ($this->isColumnModified(LarvaepresencePeer::AUTOCTR)) $criteria->add(LarvaepresencePeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(LarvaepresencePeer::STOCKCODE)) $criteria->add(LarvaepresencePeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(LarvaepresencePeer::SPECCODE)) $criteria->add(LarvaepresencePeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(LarvaepresencePeer::LARVALREFNO)) $criteria->add(LarvaepresencePeer::LARVALREFNO, $this->larvalrefno);
        if ($this->isColumnModified(LarvaepresencePeer::SOURCEREF)) $criteria->add(LarvaepresencePeer::SOURCEREF, $this->sourceref);
        if ($this->isColumnModified(LarvaepresencePeer::C_CODE)) $criteria->add(LarvaepresencePeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(LarvaepresencePeer::LARVALAREA)) $criteria->add(LarvaepresencePeer::LARVALAREA, $this->larvalarea);
        if ($this->isColumnModified(LarvaepresencePeer::LATITUDEDEG)) $criteria->add(LarvaepresencePeer::LATITUDEDEG, $this->latitudedeg);
        if ($this->isColumnModified(LarvaepresencePeer::LATITUDEMIN)) $criteria->add(LarvaepresencePeer::LATITUDEMIN, $this->latitudemin);
        if ($this->isColumnModified(LarvaepresencePeer::NORTHSOUTH)) $criteria->add(LarvaepresencePeer::NORTHSOUTH, $this->northsouth);
        if ($this->isColumnModified(LarvaepresencePeer::LATITUDEDEGTO)) $criteria->add(LarvaepresencePeer::LATITUDEDEGTO, $this->latitudedegto);
        if ($this->isColumnModified(LarvaepresencePeer::LATITUDEMINTO)) $criteria->add(LarvaepresencePeer::LATITUDEMINTO, $this->latitudeminto);
        if ($this->isColumnModified(LarvaepresencePeer::NORTHSOUTHTO)) $criteria->add(LarvaepresencePeer::NORTHSOUTHTO, $this->northsouthto);
        if ($this->isColumnModified(LarvaepresencePeer::LONGITUDEDEG)) $criteria->add(LarvaepresencePeer::LONGITUDEDEG, $this->longitudedeg);
        if ($this->isColumnModified(LarvaepresencePeer::LONGITUDEMIN)) $criteria->add(LarvaepresencePeer::LONGITUDEMIN, $this->longitudemin);
        if ($this->isColumnModified(LarvaepresencePeer::EASTWEST)) $criteria->add(LarvaepresencePeer::EASTWEST, $this->eastwest);
        if ($this->isColumnModified(LarvaepresencePeer::LONGITUDEDEGTO)) $criteria->add(LarvaepresencePeer::LONGITUDEDEGTO, $this->longitudedegto);
        if ($this->isColumnModified(LarvaepresencePeer::LONGITUDEMINTO)) $criteria->add(LarvaepresencePeer::LONGITUDEMINTO, $this->longitudeminto);
        if ($this->isColumnModified(LarvaepresencePeer::EASTWESTTO)) $criteria->add(LarvaepresencePeer::EASTWESTTO, $this->eastwestto);
        if ($this->isColumnModified(LarvaepresencePeer::JAN)) $criteria->add(LarvaepresencePeer::JAN, $this->jan);
        if ($this->isColumnModified(LarvaepresencePeer::FEB)) $criteria->add(LarvaepresencePeer::FEB, $this->feb);
        if ($this->isColumnModified(LarvaepresencePeer::MAR)) $criteria->add(LarvaepresencePeer::MAR, $this->mar);
        if ($this->isColumnModified(LarvaepresencePeer::APR)) $criteria->add(LarvaepresencePeer::APR, $this->apr);
        if ($this->isColumnModified(LarvaepresencePeer::MAY)) $criteria->add(LarvaepresencePeer::MAY, $this->may);
        if ($this->isColumnModified(LarvaepresencePeer::JUN)) $criteria->add(LarvaepresencePeer::JUN, $this->jun);
        if ($this->isColumnModified(LarvaepresencePeer::JUL)) $criteria->add(LarvaepresencePeer::JUL, $this->jul);
        if ($this->isColumnModified(LarvaepresencePeer::AUG)) $criteria->add(LarvaepresencePeer::AUG, $this->aug);
        if ($this->isColumnModified(LarvaepresencePeer::SEP)) $criteria->add(LarvaepresencePeer::SEP, $this->sep);
        if ($this->isColumnModified(LarvaepresencePeer::OCT)) $criteria->add(LarvaepresencePeer::OCT, $this->oct);
        if ($this->isColumnModified(LarvaepresencePeer::NOV)) $criteria->add(LarvaepresencePeer::NOV, $this->nov);
        if ($this->isColumnModified(LarvaepresencePeer::DEC)) $criteria->add(LarvaepresencePeer::DEC, $this->dec);
        if ($this->isColumnModified(LarvaepresencePeer::ENTERED)) $criteria->add(LarvaepresencePeer::ENTERED, $this->entered);
        if ($this->isColumnModified(LarvaepresencePeer::DATEENTERED)) $criteria->add(LarvaepresencePeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(LarvaepresencePeer::MODIFIED)) $criteria->add(LarvaepresencePeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(LarvaepresencePeer::DATEMODIFIED)) $criteria->add(LarvaepresencePeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(LarvaepresencePeer::EXPERT)) $criteria->add(LarvaepresencePeer::EXPERT, $this->expert);
        if ($this->isColumnModified(LarvaepresencePeer::DATECHECKED)) $criteria->add(LarvaepresencePeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(LarvaepresencePeer::LARVPRESREMARKS)) $criteria->add(LarvaepresencePeer::LARVPRESREMARKS, $this->larvpresremarks);
        if ($this->isColumnModified(LarvaepresencePeer::TS)) $criteria->add(LarvaepresencePeer::TS, $this->ts);

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
        $criteria = new Criteria(LarvaepresencePeer::DATABASE_NAME);
        $criteria->add(LarvaepresencePeer::AUTOCTR, $this->autoctr);
        $criteria->add(LarvaepresencePeer::STOCKCODE, $this->stockcode);
        $criteria->add(LarvaepresencePeer::LARVALREFNO, $this->larvalrefno);
        $criteria->add(LarvaepresencePeer::LARVALAREA, $this->larvalarea);

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
        $pks[0] = $this->getAutoctr();
        $pks[1] = $this->getStockcode();
        $pks[2] = $this->getLarvalrefno();
        $pks[3] = $this->getLarvalarea();

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
        $this->setAutoctr($keys[0]);
        $this->setStockcode($keys[1]);
        $this->setLarvalrefno($keys[2]);
        $this->setLarvalarea($keys[3]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getAutoctr()) && (null === $this->getStockcode()) && (null === $this->getLarvalrefno()) && (null === $this->getLarvalarea());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Larvaepresence (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setLarvalrefno($this->getLarvalrefno());
        $copyObj->setSourceref($this->getSourceref());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setLarvalarea($this->getLarvalarea());
        $copyObj->setLatitudedeg($this->getLatitudedeg());
        $copyObj->setLatitudemin($this->getLatitudemin());
        $copyObj->setNorthsouth($this->getNorthsouth());
        $copyObj->setLatitudedegto($this->getLatitudedegto());
        $copyObj->setLatitudeminto($this->getLatitudeminto());
        $copyObj->setNorthsouthto($this->getNorthsouthto());
        $copyObj->setLongitudedeg($this->getLongitudedeg());
        $copyObj->setLongitudemin($this->getLongitudemin());
        $copyObj->setEastwest($this->getEastwest());
        $copyObj->setLongitudedegto($this->getLongitudedegto());
        $copyObj->setLongitudeminto($this->getLongitudeminto());
        $copyObj->setEastwestto($this->getEastwestto());
        $copyObj->setJan($this->getJan());
        $copyObj->setFeb($this->getFeb());
        $copyObj->setMar($this->getMar());
        $copyObj->setApr($this->getApr());
        $copyObj->setMay($this->getMay());
        $copyObj->setJun($this->getJun());
        $copyObj->setJul($this->getJul());
        $copyObj->setAug($this->getAug());
        $copyObj->setSep($this->getSep());
        $copyObj->setOct($this->getOct());
        $copyObj->setNov($this->getNov());
        $copyObj->setDec($this->getDec());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setLarvpresremarks($this->getLarvpresremarks());
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
     * @return Larvaepresence Clone of current object.
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
     * @return LarvaepresencePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new LarvaepresencePeer();
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
        $this->larvalrefno = null;
        $this->sourceref = null;
        $this->c_code = null;
        $this->larvalarea = null;
        $this->latitudedeg = null;
        $this->latitudemin = null;
        $this->northsouth = null;
        $this->latitudedegto = null;
        $this->latitudeminto = null;
        $this->northsouthto = null;
        $this->longitudedeg = null;
        $this->longitudemin = null;
        $this->eastwest = null;
        $this->longitudedegto = null;
        $this->longitudeminto = null;
        $this->eastwestto = null;
        $this->jan = null;
        $this->feb = null;
        $this->mar = null;
        $this->apr = null;
        $this->may = null;
        $this->jun = null;
        $this->jul = null;
        $this->aug = null;
        $this->sep = null;
        $this->oct = null;
        $this->nov = null;
        $this->dec = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->larvpresremarks = null;
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
        return (string) $this->exportTo(LarvaepresencePeer::DEFAULT_STRING_FORMAT);
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
