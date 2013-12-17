<?php


/**
 * Base class that represents a row from the 'keys' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseKeys extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'KeysPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        KeysPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the keycode field.
     * @var        int
     */
    protected $keycode;

    /**
     * The value for the description field.
     * @var        string
     */
    protected $description;

    /**
     * The value for the refno field.
     * @var        int
     */
    protected $refno;

    /**
     * The value for the comments field.
     * @var        string
     */
    protected $comments;

    /**
     * The value for the remarks field.
     * @var        string
     */
    protected $remarks;

    /**
     * The value for the ordnum field.
     * @var        int
     */
    protected $ordnum;

    /**
     * The value for the famcode field.
     * @var        int
     */
    protected $famcode;

    /**
     * The value for the genus field.
     * @var        string
     */
    protected $genus;

    /**
     * The value for the areacode field.
     * @var        int
     */
    protected $areacode;

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
     * The value for the pic1 field.
     * @var        string
     */
    protected $pic1;

    /**
     * The value for the pic2 field.
     * @var        string
     */
    protected $pic2;

    /**
     * The value for the pic3 field.
     * @var        string
     */
    protected $pic3;

    /**
     * The value for the pic4 field.
     * @var        string
     */
    protected $pic4;

    /**
     * The value for the pic5 field.
     * @var        string
     */
    protected $pic5;

    /**
     * The value for the pic6 field.
     * @var        string
     */
    protected $pic6;

    /**
     * The value for the pic7 field.
     * @var        string
     */
    protected $pic7;

    /**
     * The value for the pic8 field.
     * @var        string
     */
    protected $pic8;

    /**
     * The value for the pic9 field.
     * @var        string
     */
    protected $pic9;

    /**
     * The value for the pic10 field.
     * @var        string
     */
    protected $pic10;

    /**
     * The value for the larvalbase field.
     * @var        int
     */
    protected $larvalbase;

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
     * The value for the lucid field.
     * @var        int
     */
    protected $lucid;

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
     * Get the [keycode] column value.
     *
     * @return int
     */
    public function getKeycode()
    {

        return $this->keycode;
    }

    /**
     * Get the [description] column value.
     *
     * @return string
     */
    public function getDescription()
    {

        return $this->description;
    }

    /**
     * Get the [refno] column value.
     *
     * @return int
     */
    public function getRefno()
    {

        return $this->refno;
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
     * Get the [remarks] column value.
     *
     * @return string
     */
    public function getRemarks()
    {

        return $this->remarks;
    }

    /**
     * Get the [ordnum] column value.
     *
     * @return int
     */
    public function getOrdnum()
    {

        return $this->ordnum;
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
     * Get the [genus] column value.
     *
     * @return string
     */
    public function getGenus()
    {

        return $this->genus;
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
     * Get the [pic1] column value.
     *
     * @return string
     */
    public function getPic1()
    {

        return $this->pic1;
    }

    /**
     * Get the [pic2] column value.
     *
     * @return string
     */
    public function getPic2()
    {

        return $this->pic2;
    }

    /**
     * Get the [pic3] column value.
     *
     * @return string
     */
    public function getPic3()
    {

        return $this->pic3;
    }

    /**
     * Get the [pic4] column value.
     *
     * @return string
     */
    public function getPic4()
    {

        return $this->pic4;
    }

    /**
     * Get the [pic5] column value.
     *
     * @return string
     */
    public function getPic5()
    {

        return $this->pic5;
    }

    /**
     * Get the [pic6] column value.
     *
     * @return string
     */
    public function getPic6()
    {

        return $this->pic6;
    }

    /**
     * Get the [pic7] column value.
     *
     * @return string
     */
    public function getPic7()
    {

        return $this->pic7;
    }

    /**
     * Get the [pic8] column value.
     *
     * @return string
     */
    public function getPic8()
    {

        return $this->pic8;
    }

    /**
     * Get the [pic9] column value.
     *
     * @return string
     */
    public function getPic9()
    {

        return $this->pic9;
    }

    /**
     * Get the [pic10] column value.
     *
     * @return string
     */
    public function getPic10()
    {

        return $this->pic10;
    }

    /**
     * Get the [larvalbase] column value.
     *
     * @return int
     */
    public function getLarvalbase()
    {

        return $this->larvalbase;
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
     * Get the [lucid] column value.
     *
     * @return int
     */
    public function getLucid()
    {

        return $this->lucid;
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
     * Set the value of [keycode] column.
     *
     * @param  int $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setKeycode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->keycode !== $v) {
            $this->keycode = $v;
            $this->modifiedColumns[] = KeysPeer::KEYCODE;
        }


        return $this;
    } // setKeycode()

    /**
     * Set the value of [description] column.
     *
     * @param  string $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[] = KeysPeer::DESCRIPTION;
        }


        return $this;
    } // setDescription()

    /**
     * Set the value of [refno] column.
     *
     * @param  int $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setRefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->refno !== $v) {
            $this->refno = $v;
            $this->modifiedColumns[] = KeysPeer::REFNO;
        }


        return $this;
    } // setRefno()

    /**
     * Set the value of [comments] column.
     *
     * @param  string $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setComments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comments !== $v) {
            $this->comments = $v;
            $this->modifiedColumns[] = KeysPeer::COMMENTS;
        }


        return $this;
    } // setComments()

    /**
     * Set the value of [remarks] column.
     *
     * @param  string $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[] = KeysPeer::REMARKS;
        }


        return $this;
    } // setRemarks()

    /**
     * Set the value of [ordnum] column.
     *
     * @param  int $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setOrdnum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ordnum !== $v) {
            $this->ordnum = $v;
            $this->modifiedColumns[] = KeysPeer::ORDNUM;
        }


        return $this;
    } // setOrdnum()

    /**
     * Set the value of [famcode] column.
     *
     * @param  int $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setFamcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->famcode !== $v) {
            $this->famcode = $v;
            $this->modifiedColumns[] = KeysPeer::FAMCODE;
        }


        return $this;
    } // setFamcode()

    /**
     * Set the value of [genus] column.
     *
     * @param  string $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setGenus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genus !== $v) {
            $this->genus = $v;
            $this->modifiedColumns[] = KeysPeer::GENUS;
        }


        return $this;
    } // setGenus()

    /**
     * Set the value of [areacode] column.
     *
     * @param  int $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setAreacode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areacode !== $v) {
            $this->areacode = $v;
            $this->modifiedColumns[] = KeysPeer::AREACODE;
        }


        return $this;
    } // setAreacode()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = KeysPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [e_code] column.
     *
     * @param  int $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setECode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->e_code !== $v) {
            $this->e_code = $v;
            $this->modifiedColumns[] = KeysPeer::E_CODE;
        }


        return $this;
    } // setECode()

    /**
     * Set the value of [pic1] column.
     *
     * @param  string $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setPic1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pic1 !== $v) {
            $this->pic1 = $v;
            $this->modifiedColumns[] = KeysPeer::PIC1;
        }


        return $this;
    } // setPic1()

    /**
     * Set the value of [pic2] column.
     *
     * @param  string $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setPic2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pic2 !== $v) {
            $this->pic2 = $v;
            $this->modifiedColumns[] = KeysPeer::PIC2;
        }


        return $this;
    } // setPic2()

    /**
     * Set the value of [pic3] column.
     *
     * @param  string $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setPic3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pic3 !== $v) {
            $this->pic3 = $v;
            $this->modifiedColumns[] = KeysPeer::PIC3;
        }


        return $this;
    } // setPic3()

    /**
     * Set the value of [pic4] column.
     *
     * @param  string $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setPic4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pic4 !== $v) {
            $this->pic4 = $v;
            $this->modifiedColumns[] = KeysPeer::PIC4;
        }


        return $this;
    } // setPic4()

    /**
     * Set the value of [pic5] column.
     *
     * @param  string $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setPic5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pic5 !== $v) {
            $this->pic5 = $v;
            $this->modifiedColumns[] = KeysPeer::PIC5;
        }


        return $this;
    } // setPic5()

    /**
     * Set the value of [pic6] column.
     *
     * @param  string $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setPic6($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pic6 !== $v) {
            $this->pic6 = $v;
            $this->modifiedColumns[] = KeysPeer::PIC6;
        }


        return $this;
    } // setPic6()

    /**
     * Set the value of [pic7] column.
     *
     * @param  string $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setPic7($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pic7 !== $v) {
            $this->pic7 = $v;
            $this->modifiedColumns[] = KeysPeer::PIC7;
        }


        return $this;
    } // setPic7()

    /**
     * Set the value of [pic8] column.
     *
     * @param  string $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setPic8($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pic8 !== $v) {
            $this->pic8 = $v;
            $this->modifiedColumns[] = KeysPeer::PIC8;
        }


        return $this;
    } // setPic8()

    /**
     * Set the value of [pic9] column.
     *
     * @param  string $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setPic9($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pic9 !== $v) {
            $this->pic9 = $v;
            $this->modifiedColumns[] = KeysPeer::PIC9;
        }


        return $this;
    } // setPic9()

    /**
     * Set the value of [pic10] column.
     *
     * @param  string $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setPic10($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pic10 !== $v) {
            $this->pic10 = $v;
            $this->modifiedColumns[] = KeysPeer::PIC10;
        }


        return $this;
    } // setPic10()

    /**
     * Set the value of [larvalbase] column.
     *
     * @param  int $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setLarvalbase($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->larvalbase !== $v) {
            $this->larvalbase = $v;
            $this->modifiedColumns[] = KeysPeer::LARVALBASE;
        }


        return $this;
    } // setLarvalbase()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = KeysPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Keys The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = KeysPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = KeysPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Keys The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = KeysPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = KeysPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Keys The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = KeysPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [lucid] column.
     *
     * @param  int $v new value
     * @return Keys The current object (for fluent API support)
     */
    public function setLucid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lucid !== $v) {
            $this->lucid = $v;
            $this->modifiedColumns[] = KeysPeer::LUCID;
        }


        return $this;
    } // setLucid()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Keys The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = KeysPeer::TS;
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

            $this->keycode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->description = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->refno = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->comments = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->remarks = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->ordnum = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->famcode = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->genus = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->areacode = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->c_code = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->e_code = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->pic1 = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->pic2 = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->pic3 = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->pic4 = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->pic5 = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->pic6 = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->pic7 = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->pic8 = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->pic9 = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->pic10 = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->larvalbase = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->entered = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->dateentered = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->modified = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->datemodified = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->expert = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->datechecked = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->lucid = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->ts = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 30; // 30 = KeysPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Keys object", $e);
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
            $con = Propel::getConnection(KeysPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = KeysPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(KeysPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = KeysQuery::create()
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
            $con = Propel::getConnection(KeysPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                KeysPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(KeysPeer::KEYCODE)) {
            $modifiedColumns[':p' . $index++]  = '`KeyCode`';
        }
        if ($this->isColumnModified(KeysPeer::DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`Description`';
        }
        if ($this->isColumnModified(KeysPeer::REFNO)) {
            $modifiedColumns[':p' . $index++]  = '`RefNo`';
        }
        if ($this->isColumnModified(KeysPeer::COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`Comments`';
        }
        if ($this->isColumnModified(KeysPeer::REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`Remarks`';
        }
        if ($this->isColumnModified(KeysPeer::ORDNUM)) {
            $modifiedColumns[':p' . $index++]  = '`OrdNum`';
        }
        if ($this->isColumnModified(KeysPeer::FAMCODE)) {
            $modifiedColumns[':p' . $index++]  = '`FamCode`';
        }
        if ($this->isColumnModified(KeysPeer::GENUS)) {
            $modifiedColumns[':p' . $index++]  = '`Genus`';
        }
        if ($this->isColumnModified(KeysPeer::AREACODE)) {
            $modifiedColumns[':p' . $index++]  = '`AreaCode`';
        }
        if ($this->isColumnModified(KeysPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_code`';
        }
        if ($this->isColumnModified(KeysPeer::E_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`E_code`';
        }
        if ($this->isColumnModified(KeysPeer::PIC1)) {
            $modifiedColumns[':p' . $index++]  = '`Pic1`';
        }
        if ($this->isColumnModified(KeysPeer::PIC2)) {
            $modifiedColumns[':p' . $index++]  = '`Pic2`';
        }
        if ($this->isColumnModified(KeysPeer::PIC3)) {
            $modifiedColumns[':p' . $index++]  = '`Pic3`';
        }
        if ($this->isColumnModified(KeysPeer::PIC4)) {
            $modifiedColumns[':p' . $index++]  = '`Pic4`';
        }
        if ($this->isColumnModified(KeysPeer::PIC5)) {
            $modifiedColumns[':p' . $index++]  = '`Pic5`';
        }
        if ($this->isColumnModified(KeysPeer::PIC6)) {
            $modifiedColumns[':p' . $index++]  = '`Pic6`';
        }
        if ($this->isColumnModified(KeysPeer::PIC7)) {
            $modifiedColumns[':p' . $index++]  = '`Pic7`';
        }
        if ($this->isColumnModified(KeysPeer::PIC8)) {
            $modifiedColumns[':p' . $index++]  = '`Pic8`';
        }
        if ($this->isColumnModified(KeysPeer::PIC9)) {
            $modifiedColumns[':p' . $index++]  = '`Pic9`';
        }
        if ($this->isColumnModified(KeysPeer::PIC10)) {
            $modifiedColumns[':p' . $index++]  = '`Pic10`';
        }
        if ($this->isColumnModified(KeysPeer::LARVALBASE)) {
            $modifiedColumns[':p' . $index++]  = '`LarvalBase`';
        }
        if ($this->isColumnModified(KeysPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(KeysPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(KeysPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(KeysPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(KeysPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(KeysPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(KeysPeer::LUCID)) {
            $modifiedColumns[':p' . $index++]  = '`Lucid`';
        }
        if ($this->isColumnModified(KeysPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `keys` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`KeyCode`':
                        $stmt->bindValue($identifier, $this->keycode, PDO::PARAM_INT);
                        break;
                    case '`Description`':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case '`RefNo`':
                        $stmt->bindValue($identifier, $this->refno, PDO::PARAM_INT);
                        break;
                    case '`Comments`':
                        $stmt->bindValue($identifier, $this->comments, PDO::PARAM_STR);
                        break;
                    case '`Remarks`':
                        $stmt->bindValue($identifier, $this->remarks, PDO::PARAM_STR);
                        break;
                    case '`OrdNum`':
                        $stmt->bindValue($identifier, $this->ordnum, PDO::PARAM_INT);
                        break;
                    case '`FamCode`':
                        $stmt->bindValue($identifier, $this->famcode, PDO::PARAM_INT);
                        break;
                    case '`Genus`':
                        $stmt->bindValue($identifier, $this->genus, PDO::PARAM_STR);
                        break;
                    case '`AreaCode`':
                        $stmt->bindValue($identifier, $this->areacode, PDO::PARAM_INT);
                        break;
                    case '`C_code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`E_code`':
                        $stmt->bindValue($identifier, $this->e_code, PDO::PARAM_INT);
                        break;
                    case '`Pic1`':
                        $stmt->bindValue($identifier, $this->pic1, PDO::PARAM_STR);
                        break;
                    case '`Pic2`':
                        $stmt->bindValue($identifier, $this->pic2, PDO::PARAM_STR);
                        break;
                    case '`Pic3`':
                        $stmt->bindValue($identifier, $this->pic3, PDO::PARAM_STR);
                        break;
                    case '`Pic4`':
                        $stmt->bindValue($identifier, $this->pic4, PDO::PARAM_STR);
                        break;
                    case '`Pic5`':
                        $stmt->bindValue($identifier, $this->pic5, PDO::PARAM_STR);
                        break;
                    case '`Pic6`':
                        $stmt->bindValue($identifier, $this->pic6, PDO::PARAM_STR);
                        break;
                    case '`Pic7`':
                        $stmt->bindValue($identifier, $this->pic7, PDO::PARAM_STR);
                        break;
                    case '`Pic8`':
                        $stmt->bindValue($identifier, $this->pic8, PDO::PARAM_STR);
                        break;
                    case '`Pic9`':
                        $stmt->bindValue($identifier, $this->pic9, PDO::PARAM_STR);
                        break;
                    case '`Pic10`':
                        $stmt->bindValue($identifier, $this->pic10, PDO::PARAM_STR);
                        break;
                    case '`LarvalBase`':
                        $stmt->bindValue($identifier, $this->larvalbase, PDO::PARAM_INT);
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
                    case '`Lucid`':
                        $stmt->bindValue($identifier, $this->lucid, PDO::PARAM_INT);
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


            if (($retval = KeysPeer::doValidate($this, $columns)) !== true) {
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
        $pos = KeysPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getKeycode();
                break;
            case 1:
                return $this->getDescription();
                break;
            case 2:
                return $this->getRefno();
                break;
            case 3:
                return $this->getComments();
                break;
            case 4:
                return $this->getRemarks();
                break;
            case 5:
                return $this->getOrdnum();
                break;
            case 6:
                return $this->getFamcode();
                break;
            case 7:
                return $this->getGenus();
                break;
            case 8:
                return $this->getAreacode();
                break;
            case 9:
                return $this->getCCode();
                break;
            case 10:
                return $this->getECode();
                break;
            case 11:
                return $this->getPic1();
                break;
            case 12:
                return $this->getPic2();
                break;
            case 13:
                return $this->getPic3();
                break;
            case 14:
                return $this->getPic4();
                break;
            case 15:
                return $this->getPic5();
                break;
            case 16:
                return $this->getPic6();
                break;
            case 17:
                return $this->getPic7();
                break;
            case 18:
                return $this->getPic8();
                break;
            case 19:
                return $this->getPic9();
                break;
            case 20:
                return $this->getPic10();
                break;
            case 21:
                return $this->getLarvalbase();
                break;
            case 22:
                return $this->getEntered();
                break;
            case 23:
                return $this->getDateentered();
                break;
            case 24:
                return $this->getModified();
                break;
            case 25:
                return $this->getDatemodified();
                break;
            case 26:
                return $this->getExpert();
                break;
            case 27:
                return $this->getDatechecked();
                break;
            case 28:
                return $this->getLucid();
                break;
            case 29:
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
        if (isset($alreadyDumpedObjects['Keys'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Keys'][$this->getPrimaryKey()] = true;
        $keys = KeysPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getKeycode(),
            $keys[1] => $this->getDescription(),
            $keys[2] => $this->getRefno(),
            $keys[3] => $this->getComments(),
            $keys[4] => $this->getRemarks(),
            $keys[5] => $this->getOrdnum(),
            $keys[6] => $this->getFamcode(),
            $keys[7] => $this->getGenus(),
            $keys[8] => $this->getAreacode(),
            $keys[9] => $this->getCCode(),
            $keys[10] => $this->getECode(),
            $keys[11] => $this->getPic1(),
            $keys[12] => $this->getPic2(),
            $keys[13] => $this->getPic3(),
            $keys[14] => $this->getPic4(),
            $keys[15] => $this->getPic5(),
            $keys[16] => $this->getPic6(),
            $keys[17] => $this->getPic7(),
            $keys[18] => $this->getPic8(),
            $keys[19] => $this->getPic9(),
            $keys[20] => $this->getPic10(),
            $keys[21] => $this->getLarvalbase(),
            $keys[22] => $this->getEntered(),
            $keys[23] => $this->getDateentered(),
            $keys[24] => $this->getModified(),
            $keys[25] => $this->getDatemodified(),
            $keys[26] => $this->getExpert(),
            $keys[27] => $this->getDatechecked(),
            $keys[28] => $this->getLucid(),
            $keys[29] => $this->getTs(),
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
        $pos = KeysPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setKeycode($value);
                break;
            case 1:
                $this->setDescription($value);
                break;
            case 2:
                $this->setRefno($value);
                break;
            case 3:
                $this->setComments($value);
                break;
            case 4:
                $this->setRemarks($value);
                break;
            case 5:
                $this->setOrdnum($value);
                break;
            case 6:
                $this->setFamcode($value);
                break;
            case 7:
                $this->setGenus($value);
                break;
            case 8:
                $this->setAreacode($value);
                break;
            case 9:
                $this->setCCode($value);
                break;
            case 10:
                $this->setECode($value);
                break;
            case 11:
                $this->setPic1($value);
                break;
            case 12:
                $this->setPic2($value);
                break;
            case 13:
                $this->setPic3($value);
                break;
            case 14:
                $this->setPic4($value);
                break;
            case 15:
                $this->setPic5($value);
                break;
            case 16:
                $this->setPic6($value);
                break;
            case 17:
                $this->setPic7($value);
                break;
            case 18:
                $this->setPic8($value);
                break;
            case 19:
                $this->setPic9($value);
                break;
            case 20:
                $this->setPic10($value);
                break;
            case 21:
                $this->setLarvalbase($value);
                break;
            case 22:
                $this->setEntered($value);
                break;
            case 23:
                $this->setDateentered($value);
                break;
            case 24:
                $this->setModified($value);
                break;
            case 25:
                $this->setDatemodified($value);
                break;
            case 26:
                $this->setExpert($value);
                break;
            case 27:
                $this->setDatechecked($value);
                break;
            case 28:
                $this->setLucid($value);
                break;
            case 29:
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
        $keys = KeysPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setKeycode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setDescription($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRefno($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setComments($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setRemarks($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOrdnum($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setFamcode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setGenus($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setAreacode($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCCode($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setECode($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setPic1($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setPic2($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setPic3($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setPic4($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setPic5($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setPic6($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setPic7($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setPic8($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setPic9($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setPic10($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setLarvalbase($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setEntered($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDateentered($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setModified($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDatemodified($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setExpert($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDatechecked($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setLucid($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setTs($arr[$keys[29]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(KeysPeer::DATABASE_NAME);

        if ($this->isColumnModified(KeysPeer::KEYCODE)) $criteria->add(KeysPeer::KEYCODE, $this->keycode);
        if ($this->isColumnModified(KeysPeer::DESCRIPTION)) $criteria->add(KeysPeer::DESCRIPTION, $this->description);
        if ($this->isColumnModified(KeysPeer::REFNO)) $criteria->add(KeysPeer::REFNO, $this->refno);
        if ($this->isColumnModified(KeysPeer::COMMENTS)) $criteria->add(KeysPeer::COMMENTS, $this->comments);
        if ($this->isColumnModified(KeysPeer::REMARKS)) $criteria->add(KeysPeer::REMARKS, $this->remarks);
        if ($this->isColumnModified(KeysPeer::ORDNUM)) $criteria->add(KeysPeer::ORDNUM, $this->ordnum);
        if ($this->isColumnModified(KeysPeer::FAMCODE)) $criteria->add(KeysPeer::FAMCODE, $this->famcode);
        if ($this->isColumnModified(KeysPeer::GENUS)) $criteria->add(KeysPeer::GENUS, $this->genus);
        if ($this->isColumnModified(KeysPeer::AREACODE)) $criteria->add(KeysPeer::AREACODE, $this->areacode);
        if ($this->isColumnModified(KeysPeer::C_CODE)) $criteria->add(KeysPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(KeysPeer::E_CODE)) $criteria->add(KeysPeer::E_CODE, $this->e_code);
        if ($this->isColumnModified(KeysPeer::PIC1)) $criteria->add(KeysPeer::PIC1, $this->pic1);
        if ($this->isColumnModified(KeysPeer::PIC2)) $criteria->add(KeysPeer::PIC2, $this->pic2);
        if ($this->isColumnModified(KeysPeer::PIC3)) $criteria->add(KeysPeer::PIC3, $this->pic3);
        if ($this->isColumnModified(KeysPeer::PIC4)) $criteria->add(KeysPeer::PIC4, $this->pic4);
        if ($this->isColumnModified(KeysPeer::PIC5)) $criteria->add(KeysPeer::PIC5, $this->pic5);
        if ($this->isColumnModified(KeysPeer::PIC6)) $criteria->add(KeysPeer::PIC6, $this->pic6);
        if ($this->isColumnModified(KeysPeer::PIC7)) $criteria->add(KeysPeer::PIC7, $this->pic7);
        if ($this->isColumnModified(KeysPeer::PIC8)) $criteria->add(KeysPeer::PIC8, $this->pic8);
        if ($this->isColumnModified(KeysPeer::PIC9)) $criteria->add(KeysPeer::PIC9, $this->pic9);
        if ($this->isColumnModified(KeysPeer::PIC10)) $criteria->add(KeysPeer::PIC10, $this->pic10);
        if ($this->isColumnModified(KeysPeer::LARVALBASE)) $criteria->add(KeysPeer::LARVALBASE, $this->larvalbase);
        if ($this->isColumnModified(KeysPeer::ENTERED)) $criteria->add(KeysPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(KeysPeer::DATEENTERED)) $criteria->add(KeysPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(KeysPeer::MODIFIED)) $criteria->add(KeysPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(KeysPeer::DATEMODIFIED)) $criteria->add(KeysPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(KeysPeer::EXPERT)) $criteria->add(KeysPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(KeysPeer::DATECHECKED)) $criteria->add(KeysPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(KeysPeer::LUCID)) $criteria->add(KeysPeer::LUCID, $this->lucid);
        if ($this->isColumnModified(KeysPeer::TS)) $criteria->add(KeysPeer::TS, $this->ts);

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
        $criteria = new Criteria(KeysPeer::DATABASE_NAME);
        $criteria->add(KeysPeer::KEYCODE, $this->keycode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getKeycode();
    }

    /**
     * Generic method to set the primary key (keycode column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setKeycode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getKeycode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Keys (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setDescription($this->getDescription());
        $copyObj->setRefno($this->getRefno());
        $copyObj->setComments($this->getComments());
        $copyObj->setRemarks($this->getRemarks());
        $copyObj->setOrdnum($this->getOrdnum());
        $copyObj->setFamcode($this->getFamcode());
        $copyObj->setGenus($this->getGenus());
        $copyObj->setAreacode($this->getAreacode());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setECode($this->getECode());
        $copyObj->setPic1($this->getPic1());
        $copyObj->setPic2($this->getPic2());
        $copyObj->setPic3($this->getPic3());
        $copyObj->setPic4($this->getPic4());
        $copyObj->setPic5($this->getPic5());
        $copyObj->setPic6($this->getPic6());
        $copyObj->setPic7($this->getPic7());
        $copyObj->setPic8($this->getPic8());
        $copyObj->setPic9($this->getPic9());
        $copyObj->setPic10($this->getPic10());
        $copyObj->setLarvalbase($this->getLarvalbase());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setLucid($this->getLucid());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setKeycode(NULL); // this is a auto-increment column, so set to default value
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
     * @return Keys Clone of current object.
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
     * @return KeysPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new KeysPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->keycode = null;
        $this->description = null;
        $this->refno = null;
        $this->comments = null;
        $this->remarks = null;
        $this->ordnum = null;
        $this->famcode = null;
        $this->genus = null;
        $this->areacode = null;
        $this->c_code = null;
        $this->e_code = null;
        $this->pic1 = null;
        $this->pic2 = null;
        $this->pic3 = null;
        $this->pic4 = null;
        $this->pic5 = null;
        $this->pic6 = null;
        $this->pic7 = null;
        $this->pic8 = null;
        $this->pic9 = null;
        $this->pic10 = null;
        $this->larvalbase = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->lucid = null;
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
        return (string) $this->exportTo(KeysPeer::DEFAULT_STRING_FORMAT);
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
