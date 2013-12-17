<?php


/**
 * Base class that represents a row from the 'gazetteer' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseGazetteer extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'GazetteerPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GazetteerPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the gazetcode field.
     * @var        int
     */
    protected $gazetcode;

    /**
     * The value for the gazetteer field.
     * @var        string
     */
    protected $gazetteer;

    /**
     * The value for the othernames field.
     * @var        string
     */
    protected $othernames;

    /**
     * The value for the localitytype field.
     * @var        string
     */
    protected $localitytype;

    /**
     * The value for the seadrainage field.
     * @var        string
     */
    protected $seadrainage;

    /**
     * The value for the province field.
     * @var        string
     */
    protected $province;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the abb field.
     * @var        string
     */
    protected $abb;

    /**
     * The value for the areacodeinland field.
     * @var        int
     */
    protected $areacodeinland;

    /**
     * The value for the areacodemarine field.
     * @var        int
     */
    protected $areacodemarine;

    /**
     * The value for the latitudedeg field.
     * @var        int
     */
    protected $latitudedeg;

    /**
     * The value for the latitudemin field.
     * @var        int
     */
    protected $latitudemin;

    /**
     * The value for the northsouth field.
     * @var        string
     */
    protected $northsouth;

    /**
     * The value for the longitudedeg field.
     * @var        int
     */
    protected $longitudedeg;

    /**
     * The value for the longitudemin field.
     * @var        int
     */
    protected $longitudemin;

    /**
     * The value for the eastwest field.
     * @var        string
     */
    protected $eastwest;

    /**
     * The value for the accuracy field.
     * @var        string
     */
    protected $accuracy;

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
     * The value for the remark field.
     * @var        string
     */
    protected $remark;

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
     * Get the [gazetcode] column value.
     *
     * @return int
     */
    public function getGazetcode()
    {

        return $this->gazetcode;
    }

    /**
     * Get the [gazetteer] column value.
     *
     * @return string
     */
    public function getGazetteer()
    {

        return $this->gazetteer;
    }

    /**
     * Get the [othernames] column value.
     *
     * @return string
     */
    public function getOthernames()
    {

        return $this->othernames;
    }

    /**
     * Get the [localitytype] column value.
     *
     * @return string
     */
    public function getLocalitytype()
    {

        return $this->localitytype;
    }

    /**
     * Get the [seadrainage] column value.
     *
     * @return string
     */
    public function getSeadrainage()
    {

        return $this->seadrainage;
    }

    /**
     * Get the [province] column value.
     *
     * @return string
     */
    public function getProvince()
    {

        return $this->province;
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
     * Get the [abb] column value.
     *
     * @return string
     */
    public function getAbb()
    {

        return $this->abb;
    }

    /**
     * Get the [areacodeinland] column value.
     *
     * @return int
     */
    public function getAreacodeinland()
    {

        return $this->areacodeinland;
    }

    /**
     * Get the [areacodemarine] column value.
     *
     * @return int
     */
    public function getAreacodemarine()
    {

        return $this->areacodemarine;
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
     * @return int
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
     * @return int
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
     * Get the [accuracy] column value.
     *
     * @return string
     */
    public function getAccuracy()
    {

        return $this->accuracy;
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
     * Get the [remark] column value.
     *
     * @return string
     */
    public function getRemark()
    {

        return $this->remark;
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
     * Set the value of [gazetcode] column.
     *
     * @param  int $v new value
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setGazetcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gazetcode !== $v) {
            $this->gazetcode = $v;
            $this->modifiedColumns[] = GazetteerPeer::GAZETCODE;
        }


        return $this;
    } // setGazetcode()

    /**
     * Set the value of [gazetteer] column.
     *
     * @param  string $v new value
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setGazetteer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gazetteer !== $v) {
            $this->gazetteer = $v;
            $this->modifiedColumns[] = GazetteerPeer::GAZETTEER;
        }


        return $this;
    } // setGazetteer()

    /**
     * Set the value of [othernames] column.
     *
     * @param  string $v new value
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setOthernames($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->othernames !== $v) {
            $this->othernames = $v;
            $this->modifiedColumns[] = GazetteerPeer::OTHERNAMES;
        }


        return $this;
    } // setOthernames()

    /**
     * Set the value of [localitytype] column.
     *
     * @param  string $v new value
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setLocalitytype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->localitytype !== $v) {
            $this->localitytype = $v;
            $this->modifiedColumns[] = GazetteerPeer::LOCALITYTYPE;
        }


        return $this;
    } // setLocalitytype()

    /**
     * Set the value of [seadrainage] column.
     *
     * @param  string $v new value
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setSeadrainage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->seadrainage !== $v) {
            $this->seadrainage = $v;
            $this->modifiedColumns[] = GazetteerPeer::SEADRAINAGE;
        }


        return $this;
    } // setSeadrainage()

    /**
     * Set the value of [province] column.
     *
     * @param  string $v new value
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setProvince($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->province !== $v) {
            $this->province = $v;
            $this->modifiedColumns[] = GazetteerPeer::PROVINCE;
        }


        return $this;
    } // setProvince()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = GazetteerPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [abb] column.
     *
     * @param  string $v new value
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setAbb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abb !== $v) {
            $this->abb = $v;
            $this->modifiedColumns[] = GazetteerPeer::ABB;
        }


        return $this;
    } // setAbb()

    /**
     * Set the value of [areacodeinland] column.
     *
     * @param  int $v new value
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setAreacodeinland($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areacodeinland !== $v) {
            $this->areacodeinland = $v;
            $this->modifiedColumns[] = GazetteerPeer::AREACODEINLAND;
        }


        return $this;
    } // setAreacodeinland()

    /**
     * Set the value of [areacodemarine] column.
     *
     * @param  int $v new value
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setAreacodemarine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areacodemarine !== $v) {
            $this->areacodemarine = $v;
            $this->modifiedColumns[] = GazetteerPeer::AREACODEMARINE;
        }


        return $this;
    } // setAreacodemarine()

    /**
     * Set the value of [latitudedeg] column.
     *
     * @param  int $v new value
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setLatitudedeg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->latitudedeg !== $v) {
            $this->latitudedeg = $v;
            $this->modifiedColumns[] = GazetteerPeer::LATITUDEDEG;
        }


        return $this;
    } // setLatitudedeg()

    /**
     * Set the value of [latitudemin] column.
     *
     * @param  int $v new value
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setLatitudemin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->latitudemin !== $v) {
            $this->latitudemin = $v;
            $this->modifiedColumns[] = GazetteerPeer::LATITUDEMIN;
        }


        return $this;
    } // setLatitudemin()

    /**
     * Set the value of [northsouth] column.
     *
     * @param  string $v new value
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setNorthsouth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northsouth !== $v) {
            $this->northsouth = $v;
            $this->modifiedColumns[] = GazetteerPeer::NORTHSOUTH;
        }


        return $this;
    } // setNorthsouth()

    /**
     * Set the value of [longitudedeg] column.
     *
     * @param  int $v new value
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setLongitudedeg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->longitudedeg !== $v) {
            $this->longitudedeg = $v;
            $this->modifiedColumns[] = GazetteerPeer::LONGITUDEDEG;
        }


        return $this;
    } // setLongitudedeg()

    /**
     * Set the value of [longitudemin] column.
     *
     * @param  int $v new value
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setLongitudemin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->longitudemin !== $v) {
            $this->longitudemin = $v;
            $this->modifiedColumns[] = GazetteerPeer::LONGITUDEMIN;
        }


        return $this;
    } // setLongitudemin()

    /**
     * Set the value of [eastwest] column.
     *
     * @param  string $v new value
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setEastwest($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eastwest !== $v) {
            $this->eastwest = $v;
            $this->modifiedColumns[] = GazetteerPeer::EASTWEST;
        }


        return $this;
    } // setEastwest()

    /**
     * Set the value of [accuracy] column.
     *
     * @param  string $v new value
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setAccuracy($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->accuracy !== $v) {
            $this->accuracy = $v;
            $this->modifiedColumns[] = GazetteerPeer::ACCURACY;
        }


        return $this;
    } // setAccuracy()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = GazetteerPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = GazetteerPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = GazetteerPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = GazetteerPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = GazetteerPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = GazetteerPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [remark] column.
     *
     * @param  string $v new value
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setRemark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remark !== $v) {
            $this->remark = $v;
            $this->modifiedColumns[] = GazetteerPeer::REMARK;
        }


        return $this;
    } // setRemark()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Gazetteer The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = GazetteerPeer::TS;
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

            $this->gazetcode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->gazetteer = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->othernames = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->localitytype = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->seadrainage = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->province = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->c_code = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->abb = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->areacodeinland = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->areacodemarine = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->latitudedeg = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->latitudemin = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->northsouth = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->longitudedeg = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->longitudemin = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->eastwest = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->accuracy = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->entered = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->dateentered = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->modified = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->datemodified = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->expert = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->datechecked = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->remark = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->ts = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 25; // 25 = GazetteerPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Gazetteer object", $e);
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
            $con = Propel::getConnection(GazetteerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GazetteerPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GazetteerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GazetteerQuery::create()
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
            $con = Propel::getConnection(GazetteerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GazetteerPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = GazetteerPeer::GAZETCODE;
        if (null !== $this->gazetcode) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . GazetteerPeer::GAZETCODE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(GazetteerPeer::GAZETCODE)) {
            $modifiedColumns[':p' . $index++]  = '`GazetCode`';
        }
        if ($this->isColumnModified(GazetteerPeer::GAZETTEER)) {
            $modifiedColumns[':p' . $index++]  = '`Gazetteer`';
        }
        if ($this->isColumnModified(GazetteerPeer::OTHERNAMES)) {
            $modifiedColumns[':p' . $index++]  = '`OtherNames`';
        }
        if ($this->isColumnModified(GazetteerPeer::LOCALITYTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`LocalityType`';
        }
        if ($this->isColumnModified(GazetteerPeer::SEADRAINAGE)) {
            $modifiedColumns[':p' . $index++]  = '`SeaDrainage`';
        }
        if ($this->isColumnModified(GazetteerPeer::PROVINCE)) {
            $modifiedColumns[':p' . $index++]  = '`Province`';
        }
        if ($this->isColumnModified(GazetteerPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_CODE`';
        }
        if ($this->isColumnModified(GazetteerPeer::ABB)) {
            $modifiedColumns[':p' . $index++]  = '`ABB`';
        }
        if ($this->isColumnModified(GazetteerPeer::AREACODEINLAND)) {
            $modifiedColumns[':p' . $index++]  = '`AreaCodeInland`';
        }
        if ($this->isColumnModified(GazetteerPeer::AREACODEMARINE)) {
            $modifiedColumns[':p' . $index++]  = '`AreaCodeMarine`';
        }
        if ($this->isColumnModified(GazetteerPeer::LATITUDEDEG)) {
            $modifiedColumns[':p' . $index++]  = '`LatitudeDeg`';
        }
        if ($this->isColumnModified(GazetteerPeer::LATITUDEMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LatitudeMin`';
        }
        if ($this->isColumnModified(GazetteerPeer::NORTHSOUTH)) {
            $modifiedColumns[':p' . $index++]  = '`NorthSouth`';
        }
        if ($this->isColumnModified(GazetteerPeer::LONGITUDEDEG)) {
            $modifiedColumns[':p' . $index++]  = '`LongitudeDeg`';
        }
        if ($this->isColumnModified(GazetteerPeer::LONGITUDEMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LongitudeMin`';
        }
        if ($this->isColumnModified(GazetteerPeer::EASTWEST)) {
            $modifiedColumns[':p' . $index++]  = '`EastWest`';
        }
        if ($this->isColumnModified(GazetteerPeer::ACCURACY)) {
            $modifiedColumns[':p' . $index++]  = '`Accuracy`';
        }
        if ($this->isColumnModified(GazetteerPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(GazetteerPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(GazetteerPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(GazetteerPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(GazetteerPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(GazetteerPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(GazetteerPeer::REMARK)) {
            $modifiedColumns[':p' . $index++]  = '`Remark`';
        }
        if ($this->isColumnModified(GazetteerPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `gazetteer` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`GazetCode`':
                        $stmt->bindValue($identifier, $this->gazetcode, PDO::PARAM_INT);
                        break;
                    case '`Gazetteer`':
                        $stmt->bindValue($identifier, $this->gazetteer, PDO::PARAM_STR);
                        break;
                    case '`OtherNames`':
                        $stmt->bindValue($identifier, $this->othernames, PDO::PARAM_STR);
                        break;
                    case '`LocalityType`':
                        $stmt->bindValue($identifier, $this->localitytype, PDO::PARAM_STR);
                        break;
                    case '`SeaDrainage`':
                        $stmt->bindValue($identifier, $this->seadrainage, PDO::PARAM_STR);
                        break;
                    case '`Province`':
                        $stmt->bindValue($identifier, $this->province, PDO::PARAM_STR);
                        break;
                    case '`C_CODE`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`ABB`':
                        $stmt->bindValue($identifier, $this->abb, PDO::PARAM_STR);
                        break;
                    case '`AreaCodeInland`':
                        $stmt->bindValue($identifier, $this->areacodeinland, PDO::PARAM_INT);
                        break;
                    case '`AreaCodeMarine`':
                        $stmt->bindValue($identifier, $this->areacodemarine, PDO::PARAM_INT);
                        break;
                    case '`LatitudeDeg`':
                        $stmt->bindValue($identifier, $this->latitudedeg, PDO::PARAM_INT);
                        break;
                    case '`LatitudeMin`':
                        $stmt->bindValue($identifier, $this->latitudemin, PDO::PARAM_INT);
                        break;
                    case '`NorthSouth`':
                        $stmt->bindValue($identifier, $this->northsouth, PDO::PARAM_STR);
                        break;
                    case '`LongitudeDeg`':
                        $stmt->bindValue($identifier, $this->longitudedeg, PDO::PARAM_INT);
                        break;
                    case '`LongitudeMin`':
                        $stmt->bindValue($identifier, $this->longitudemin, PDO::PARAM_INT);
                        break;
                    case '`EastWest`':
                        $stmt->bindValue($identifier, $this->eastwest, PDO::PARAM_STR);
                        break;
                    case '`Accuracy`':
                        $stmt->bindValue($identifier, $this->accuracy, PDO::PARAM_STR);
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
                    case '`Remark`':
                        $stmt->bindValue($identifier, $this->remark, PDO::PARAM_STR);
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
        $this->setGazetcode($pk);

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


            if (($retval = GazetteerPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GazetteerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getGazetcode();
                break;
            case 1:
                return $this->getGazetteer();
                break;
            case 2:
                return $this->getOthernames();
                break;
            case 3:
                return $this->getLocalitytype();
                break;
            case 4:
                return $this->getSeadrainage();
                break;
            case 5:
                return $this->getProvince();
                break;
            case 6:
                return $this->getCCode();
                break;
            case 7:
                return $this->getAbb();
                break;
            case 8:
                return $this->getAreacodeinland();
                break;
            case 9:
                return $this->getAreacodemarine();
                break;
            case 10:
                return $this->getLatitudedeg();
                break;
            case 11:
                return $this->getLatitudemin();
                break;
            case 12:
                return $this->getNorthsouth();
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
                return $this->getAccuracy();
                break;
            case 17:
                return $this->getEntered();
                break;
            case 18:
                return $this->getDateentered();
                break;
            case 19:
                return $this->getModified();
                break;
            case 20:
                return $this->getDatemodified();
                break;
            case 21:
                return $this->getExpert();
                break;
            case 22:
                return $this->getDatechecked();
                break;
            case 23:
                return $this->getRemark();
                break;
            case 24:
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
        if (isset($alreadyDumpedObjects['Gazetteer'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Gazetteer'][$this->getPrimaryKey()] = true;
        $keys = GazetteerPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getGazetcode(),
            $keys[1] => $this->getGazetteer(),
            $keys[2] => $this->getOthernames(),
            $keys[3] => $this->getLocalitytype(),
            $keys[4] => $this->getSeadrainage(),
            $keys[5] => $this->getProvince(),
            $keys[6] => $this->getCCode(),
            $keys[7] => $this->getAbb(),
            $keys[8] => $this->getAreacodeinland(),
            $keys[9] => $this->getAreacodemarine(),
            $keys[10] => $this->getLatitudedeg(),
            $keys[11] => $this->getLatitudemin(),
            $keys[12] => $this->getNorthsouth(),
            $keys[13] => $this->getLongitudedeg(),
            $keys[14] => $this->getLongitudemin(),
            $keys[15] => $this->getEastwest(),
            $keys[16] => $this->getAccuracy(),
            $keys[17] => $this->getEntered(),
            $keys[18] => $this->getDateentered(),
            $keys[19] => $this->getModified(),
            $keys[20] => $this->getDatemodified(),
            $keys[21] => $this->getExpert(),
            $keys[22] => $this->getDatechecked(),
            $keys[23] => $this->getRemark(),
            $keys[24] => $this->getTs(),
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
        $pos = GazetteerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setGazetcode($value);
                break;
            case 1:
                $this->setGazetteer($value);
                break;
            case 2:
                $this->setOthernames($value);
                break;
            case 3:
                $this->setLocalitytype($value);
                break;
            case 4:
                $this->setSeadrainage($value);
                break;
            case 5:
                $this->setProvince($value);
                break;
            case 6:
                $this->setCCode($value);
                break;
            case 7:
                $this->setAbb($value);
                break;
            case 8:
                $this->setAreacodeinland($value);
                break;
            case 9:
                $this->setAreacodemarine($value);
                break;
            case 10:
                $this->setLatitudedeg($value);
                break;
            case 11:
                $this->setLatitudemin($value);
                break;
            case 12:
                $this->setNorthsouth($value);
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
                $this->setAccuracy($value);
                break;
            case 17:
                $this->setEntered($value);
                break;
            case 18:
                $this->setDateentered($value);
                break;
            case 19:
                $this->setModified($value);
                break;
            case 20:
                $this->setDatemodified($value);
                break;
            case 21:
                $this->setExpert($value);
                break;
            case 22:
                $this->setDatechecked($value);
                break;
            case 23:
                $this->setRemark($value);
                break;
            case 24:
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
        $keys = GazetteerPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setGazetcode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setGazetteer($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOthernames($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLocalitytype($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSeadrainage($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setProvince($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCCode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setAbb($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setAreacodeinland($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAreacodemarine($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setLatitudedeg($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setLatitudemin($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNorthsouth($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setLongitudedeg($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setLongitudemin($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setEastwest($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setAccuracy($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setEntered($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setDateentered($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setModified($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setDatemodified($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setExpert($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDatechecked($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setRemark($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setTs($arr[$keys[24]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GazetteerPeer::DATABASE_NAME);

        if ($this->isColumnModified(GazetteerPeer::GAZETCODE)) $criteria->add(GazetteerPeer::GAZETCODE, $this->gazetcode);
        if ($this->isColumnModified(GazetteerPeer::GAZETTEER)) $criteria->add(GazetteerPeer::GAZETTEER, $this->gazetteer);
        if ($this->isColumnModified(GazetteerPeer::OTHERNAMES)) $criteria->add(GazetteerPeer::OTHERNAMES, $this->othernames);
        if ($this->isColumnModified(GazetteerPeer::LOCALITYTYPE)) $criteria->add(GazetteerPeer::LOCALITYTYPE, $this->localitytype);
        if ($this->isColumnModified(GazetteerPeer::SEADRAINAGE)) $criteria->add(GazetteerPeer::SEADRAINAGE, $this->seadrainage);
        if ($this->isColumnModified(GazetteerPeer::PROVINCE)) $criteria->add(GazetteerPeer::PROVINCE, $this->province);
        if ($this->isColumnModified(GazetteerPeer::C_CODE)) $criteria->add(GazetteerPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(GazetteerPeer::ABB)) $criteria->add(GazetteerPeer::ABB, $this->abb);
        if ($this->isColumnModified(GazetteerPeer::AREACODEINLAND)) $criteria->add(GazetteerPeer::AREACODEINLAND, $this->areacodeinland);
        if ($this->isColumnModified(GazetteerPeer::AREACODEMARINE)) $criteria->add(GazetteerPeer::AREACODEMARINE, $this->areacodemarine);
        if ($this->isColumnModified(GazetteerPeer::LATITUDEDEG)) $criteria->add(GazetteerPeer::LATITUDEDEG, $this->latitudedeg);
        if ($this->isColumnModified(GazetteerPeer::LATITUDEMIN)) $criteria->add(GazetteerPeer::LATITUDEMIN, $this->latitudemin);
        if ($this->isColumnModified(GazetteerPeer::NORTHSOUTH)) $criteria->add(GazetteerPeer::NORTHSOUTH, $this->northsouth);
        if ($this->isColumnModified(GazetteerPeer::LONGITUDEDEG)) $criteria->add(GazetteerPeer::LONGITUDEDEG, $this->longitudedeg);
        if ($this->isColumnModified(GazetteerPeer::LONGITUDEMIN)) $criteria->add(GazetteerPeer::LONGITUDEMIN, $this->longitudemin);
        if ($this->isColumnModified(GazetteerPeer::EASTWEST)) $criteria->add(GazetteerPeer::EASTWEST, $this->eastwest);
        if ($this->isColumnModified(GazetteerPeer::ACCURACY)) $criteria->add(GazetteerPeer::ACCURACY, $this->accuracy);
        if ($this->isColumnModified(GazetteerPeer::ENTERED)) $criteria->add(GazetteerPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(GazetteerPeer::DATEENTERED)) $criteria->add(GazetteerPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(GazetteerPeer::MODIFIED)) $criteria->add(GazetteerPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(GazetteerPeer::DATEMODIFIED)) $criteria->add(GazetteerPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(GazetteerPeer::EXPERT)) $criteria->add(GazetteerPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(GazetteerPeer::DATECHECKED)) $criteria->add(GazetteerPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(GazetteerPeer::REMARK)) $criteria->add(GazetteerPeer::REMARK, $this->remark);
        if ($this->isColumnModified(GazetteerPeer::TS)) $criteria->add(GazetteerPeer::TS, $this->ts);

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
        $criteria = new Criteria(GazetteerPeer::DATABASE_NAME);
        $criteria->add(GazetteerPeer::GAZETCODE, $this->gazetcode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getGazetcode();
    }

    /**
     * Generic method to set the primary key (gazetcode column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setGazetcode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getGazetcode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Gazetteer (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setGazetteer($this->getGazetteer());
        $copyObj->setOthernames($this->getOthernames());
        $copyObj->setLocalitytype($this->getLocalitytype());
        $copyObj->setSeadrainage($this->getSeadrainage());
        $copyObj->setProvince($this->getProvince());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setAbb($this->getAbb());
        $copyObj->setAreacodeinland($this->getAreacodeinland());
        $copyObj->setAreacodemarine($this->getAreacodemarine());
        $copyObj->setLatitudedeg($this->getLatitudedeg());
        $copyObj->setLatitudemin($this->getLatitudemin());
        $copyObj->setNorthsouth($this->getNorthsouth());
        $copyObj->setLongitudedeg($this->getLongitudedeg());
        $copyObj->setLongitudemin($this->getLongitudemin());
        $copyObj->setEastwest($this->getEastwest());
        $copyObj->setAccuracy($this->getAccuracy());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setRemark($this->getRemark());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setGazetcode(NULL); // this is a auto-increment column, so set to default value
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
     * @return Gazetteer Clone of current object.
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
     * @return GazetteerPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GazetteerPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->gazetcode = null;
        $this->gazetteer = null;
        $this->othernames = null;
        $this->localitytype = null;
        $this->seadrainage = null;
        $this->province = null;
        $this->c_code = null;
        $this->abb = null;
        $this->areacodeinland = null;
        $this->areacodemarine = null;
        $this->latitudedeg = null;
        $this->latitudemin = null;
        $this->northsouth = null;
        $this->longitudedeg = null;
        $this->longitudemin = null;
        $this->eastwest = null;
        $this->accuracy = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->remark = null;
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
        return (string) $this->exportTo(GazetteerPeer::DEFAULT_STRING_FORMAT);
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
