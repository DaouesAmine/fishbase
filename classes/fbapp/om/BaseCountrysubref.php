<?php


/**
 * Base class that represents a row from the 'countrysubref' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCountrysubref extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CountrysubrefPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CountrysubrefPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the csub_code field.
     * @var        string
     */
    protected $csub_code;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the countrysub field.
     * @var        string
     */
    protected $countrysub;

    /**
     * The value for the othername field.
     * @var        string
     */
    protected $othername;

    /**
     * The value for the countrysubtype field.
     * @var        string
     */
    protected $countrysubtype;

    /**
     * The value for the countrysubrank field.
     * @var        int
     */
    protected $countrysubrank;

    /**
     * The value for the comments field.
     * @var        string
     */
    protected $comments;

    /**
     * The value for the northernlatitude field.
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
     * @var        int
     */
    protected $southernlatitude;

    /**
     * The value for the southernlatitudens field.
     * @var        string
     */
    protected $southernlatitudens;

    /**
     * The value for the easternlongitude field.
     * @var        int
     */
    protected $easternlongitude;

    /**
     * The value for the easternlongitudeew field.
     * @var        string
     */
    protected $easternlongitudeew;

    /**
     * The value for the westernlongitude field.
     * @var        int
     */
    protected $westernlongitude;

    /**
     * The value for the westernlongitudeew field.
     * @var        string
     */
    protected $westernlongitudeew;

    /**
     * The value for the capital field.
     * @var        string
     */
    protected $capital;

    /**
     * The value for the latdec field.
     * @var        double
     */
    protected $latdec;

    /**
     * The value for the northsouth field.
     * @var        string
     */
    protected $northsouth;

    /**
     * The value for the longdec field.
     * @var        double
     */
    protected $longdec;

    /**
     * The value for the eastwest field.
     * @var        string
     */
    protected $eastwest;

    /**
     * The value for the polarboreal field.
     * @var        boolean
     */
    protected $polarboreal;

    /**
     * The value for the temperate field.
     * @var        boolean
     */
    protected $temperate;

    /**
     * The value for the subtropical field.
     * @var        boolean
     */
    protected $subtropical;

    /**
     * The value for the tropical field.
     * @var        boolean
     */
    protected $tropical;

    /**
     * The value for the areacodeinland field.
     * @var        int
     */
    protected $areacodeinland;

    /**
     * The value for the areacodemarinei field.
     * @var        int
     */
    protected $areacodemarinei;

    /**
     * The value for the areacodemarineii field.
     * @var        int
     */
    protected $areacodemarineii;

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
     * Get the [csub_code] column value.
     *
     * @return string
     */
    public function getCsubCode()
    {

        return $this->csub_code;
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
     * Get the [countrysub] column value.
     *
     * @return string
     */
    public function getCountrysub()
    {

        return $this->countrysub;
    }

    /**
     * Get the [othername] column value.
     *
     * @return string
     */
    public function getOthername()
    {

        return $this->othername;
    }

    /**
     * Get the [countrysubtype] column value.
     *
     * @return string
     */
    public function getCountrysubtype()
    {

        return $this->countrysubtype;
    }

    /**
     * Get the [countrysubrank] column value.
     *
     * @return int
     */
    public function getCountrysubrank()
    {

        return $this->countrysubrank;
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
     * Get the [capital] column value.
     *
     * @return string
     */
    public function getCapital()
    {

        return $this->capital;
    }

    /**
     * Get the [latdec] column value.
     *
     * @return double
     */
    public function getLatdec()
    {

        return $this->latdec;
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
     * Get the [longdec] column value.
     *
     * @return double
     */
    public function getLongdec()
    {

        return $this->longdec;
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
     * Get the [polarboreal] column value.
     *
     * @return boolean
     */
    public function getPolarboreal()
    {

        return $this->polarboreal;
    }

    /**
     * Get the [temperate] column value.
     *
     * @return boolean
     */
    public function getTemperate()
    {

        return $this->temperate;
    }

    /**
     * Get the [subtropical] column value.
     *
     * @return boolean
     */
    public function getSubtropical()
    {

        return $this->subtropical;
    }

    /**
     * Get the [tropical] column value.
     *
     * @return boolean
     */
    public function getTropical()
    {

        return $this->tropical;
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
     * Get the [areacodemarinei] column value.
     *
     * @return int
     */
    public function getAreacodemarinei()
    {

        return $this->areacodemarinei;
    }

    /**
     * Get the [areacodemarineii] column value.
     *
     * @return int
     */
    public function getAreacodemarineii()
    {

        return $this->areacodemarineii;
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
     * Get the [dateentered] column value.
     *
     * @return string
     */
    public function getDateentered()
    {

        return $this->dateentered;
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
     * Get the [datemodified] column value.
     *
     * @return string
     */
    public function getDatemodified()
    {

        return $this->datemodified;
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
     * Get the [datechecked] column value.
     *
     * @return string
     */
    public function getDatechecked()
    {

        return $this->datechecked;
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
     * Set the value of [csub_code] column.
     *
     * @param  string $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setCsubCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->csub_code !== $v) {
            $this->csub_code = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::CSUB_CODE;
        }


        return $this;
    } // setCsubCode()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [countrysub] column.
     *
     * @param  string $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setCountrysub($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->countrysub !== $v) {
            $this->countrysub = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::COUNTRYSUB;
        }


        return $this;
    } // setCountrysub()

    /**
     * Set the value of [othername] column.
     *
     * @param  string $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setOthername($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->othername !== $v) {
            $this->othername = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::OTHERNAME;
        }


        return $this;
    } // setOthername()

    /**
     * Set the value of [countrysubtype] column.
     *
     * @param  string $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setCountrysubtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->countrysubtype !== $v) {
            $this->countrysubtype = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::COUNTRYSUBTYPE;
        }


        return $this;
    } // setCountrysubtype()

    /**
     * Set the value of [countrysubrank] column.
     *
     * @param  int $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setCountrysubrank($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->countrysubrank !== $v) {
            $this->countrysubrank = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::COUNTRYSUBRANK;
        }


        return $this;
    } // setCountrysubrank()

    /**
     * Set the value of [comments] column.
     *
     * @param  string $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setComments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comments !== $v) {
            $this->comments = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::COMMENTS;
        }


        return $this;
    } // setComments()

    /**
     * Set the value of [northernlatitude] column.
     *
     * @param  int $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setNorthernlatitude($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->northernlatitude !== $v) {
            $this->northernlatitude = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::NORTHERNLATITUDE;
        }


        return $this;
    } // setNorthernlatitude()

    /**
     * Set the value of [northernlatitudens] column.
     *
     * @param  string $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setNorthernlatitudens($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northernlatitudens !== $v) {
            $this->northernlatitudens = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::NORTHERNLATITUDENS;
        }


        return $this;
    } // setNorthernlatitudens()

    /**
     * Set the value of [southernlatitude] column.
     *
     * @param  int $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setSouthernlatitude($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->southernlatitude !== $v) {
            $this->southernlatitude = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::SOUTHERNLATITUDE;
        }


        return $this;
    } // setSouthernlatitude()

    /**
     * Set the value of [southernlatitudens] column.
     *
     * @param  string $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setSouthernlatitudens($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->southernlatitudens !== $v) {
            $this->southernlatitudens = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::SOUTHERNLATITUDENS;
        }


        return $this;
    } // setSouthernlatitudens()

    /**
     * Set the value of [easternlongitude] column.
     *
     * @param  int $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setEasternlongitude($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->easternlongitude !== $v) {
            $this->easternlongitude = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::EASTERNLONGITUDE;
        }


        return $this;
    } // setEasternlongitude()

    /**
     * Set the value of [easternlongitudeew] column.
     *
     * @param  string $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setEasternlongitudeew($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->easternlongitudeew !== $v) {
            $this->easternlongitudeew = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::EASTERNLONGITUDEEW;
        }


        return $this;
    } // setEasternlongitudeew()

    /**
     * Set the value of [westernlongitude] column.
     *
     * @param  int $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setWesternlongitude($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->westernlongitude !== $v) {
            $this->westernlongitude = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::WESTERNLONGITUDE;
        }


        return $this;
    } // setWesternlongitude()

    /**
     * Set the value of [westernlongitudeew] column.
     *
     * @param  string $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setWesternlongitudeew($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->westernlongitudeew !== $v) {
            $this->westernlongitudeew = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::WESTERNLONGITUDEEW;
        }


        return $this;
    } // setWesternlongitudeew()

    /**
     * Set the value of [capital] column.
     *
     * @param  string $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setCapital($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->capital !== $v) {
            $this->capital = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::CAPITAL;
        }


        return $this;
    } // setCapital()

    /**
     * Set the value of [latdec] column.
     *
     * @param  double $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setLatdec($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->latdec !== $v) {
            $this->latdec = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::LATDEC;
        }


        return $this;
    } // setLatdec()

    /**
     * Set the value of [northsouth] column.
     *
     * @param  string $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setNorthsouth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northsouth !== $v) {
            $this->northsouth = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::NORTHSOUTH;
        }


        return $this;
    } // setNorthsouth()

    /**
     * Set the value of [longdec] column.
     *
     * @param  double $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setLongdec($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->longdec !== $v) {
            $this->longdec = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::LONGDEC;
        }


        return $this;
    } // setLongdec()

    /**
     * Set the value of [eastwest] column.
     *
     * @param  string $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setEastwest($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eastwest !== $v) {
            $this->eastwest = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::EASTWEST;
        }


        return $this;
    } // setEastwest()

    /**
     * Sets the value of the [polarboreal] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setPolarboreal($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->polarboreal !== $v) {
            $this->polarboreal = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::POLARBOREAL;
        }


        return $this;
    } // setPolarboreal()

    /**
     * Sets the value of the [temperate] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setTemperate($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->temperate !== $v) {
            $this->temperate = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::TEMPERATE;
        }


        return $this;
    } // setTemperate()

    /**
     * Sets the value of the [subtropical] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setSubtropical($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->subtropical !== $v) {
            $this->subtropical = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::SUBTROPICAL;
        }


        return $this;
    } // setSubtropical()

    /**
     * Sets the value of the [tropical] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setTropical($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->tropical !== $v) {
            $this->tropical = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::TROPICAL;
        }


        return $this;
    } // setTropical()

    /**
     * Set the value of [areacodeinland] column.
     *
     * @param  int $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setAreacodeinland($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areacodeinland !== $v) {
            $this->areacodeinland = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::AREACODEINLAND;
        }


        return $this;
    } // setAreacodeinland()

    /**
     * Set the value of [areacodemarinei] column.
     *
     * @param  int $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setAreacodemarinei($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areacodemarinei !== $v) {
            $this->areacodemarinei = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::AREACODEMARINEI;
        }


        return $this;
    } // setAreacodemarinei()

    /**
     * Set the value of [areacodemarineii] column.
     *
     * @param  int $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setAreacodemarineii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areacodemarineii !== $v) {
            $this->areacodemarineii = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::AREACODEMARINEII;
        }


        return $this;
    } // setAreacodemarineii()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Set the value of [dateentered] column.
     *
     * @param  string $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dateentered !== $v) {
            $this->dateentered = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::DATEENTERED;
        }


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Set the value of [datemodified] column.
     *
     * @param  string $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->datemodified !== $v) {
            $this->datemodified = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::DATEMODIFIED;
        }


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Set the value of [datechecked] column.
     *
     * @param  string $v new value
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->datechecked !== $v) {
            $this->datechecked = $v;
            $this->modifiedColumns[] = CountrysubrefPeer::DATECHECKED;
        }


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Countrysubref The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = CountrysubrefPeer::TS;
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

            $this->csub_code = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->c_code = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->countrysub = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->othername = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->countrysubtype = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->countrysubrank = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->comments = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->northernlatitude = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->northernlatitudens = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->southernlatitude = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->southernlatitudens = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->easternlongitude = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->easternlongitudeew = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->westernlongitude = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->westernlongitudeew = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->capital = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->latdec = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->northsouth = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->longdec = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->eastwest = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->polarboreal = ($row[$startcol + 20] !== null) ? (boolean) $row[$startcol + 20] : null;
            $this->temperate = ($row[$startcol + 21] !== null) ? (boolean) $row[$startcol + 21] : null;
            $this->subtropical = ($row[$startcol + 22] !== null) ? (boolean) $row[$startcol + 22] : null;
            $this->tropical = ($row[$startcol + 23] !== null) ? (boolean) $row[$startcol + 23] : null;
            $this->areacodeinland = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->areacodemarinei = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->areacodemarineii = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->entered = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->dateentered = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->modified = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->datemodified = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->expert = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->datechecked = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->ts = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 34; // 34 = CountrysubrefPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Countrysubref object", $e);
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
            $con = Propel::getConnection(CountrysubrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CountrysubrefPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CountrysubrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CountrysubrefQuery::create()
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
            $con = Propel::getConnection(CountrysubrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CountrysubrefPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(CountrysubrefPeer::CSUB_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`CSub_Code`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::COUNTRYSUB)) {
            $modifiedColumns[':p' . $index++]  = '`CountrySub`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::OTHERNAME)) {
            $modifiedColumns[':p' . $index++]  = '`OtherName`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::COUNTRYSUBTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`CountrySubType`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::COUNTRYSUBRANK)) {
            $modifiedColumns[':p' . $index++]  = '`CountrySubRank`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`Comments`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::NORTHERNLATITUDE)) {
            $modifiedColumns[':p' . $index++]  = '`NorthernLatitude`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::NORTHERNLATITUDENS)) {
            $modifiedColumns[':p' . $index++]  = '`NorthernLatitudeNS`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::SOUTHERNLATITUDE)) {
            $modifiedColumns[':p' . $index++]  = '`SouthernLatitude`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::SOUTHERNLATITUDENS)) {
            $modifiedColumns[':p' . $index++]  = '`SouthernLatitudeNS`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::EASTERNLONGITUDE)) {
            $modifiedColumns[':p' . $index++]  = '`EasternLongitude`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::EASTERNLONGITUDEEW)) {
            $modifiedColumns[':p' . $index++]  = '`EasternLongitudeEW`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::WESTERNLONGITUDE)) {
            $modifiedColumns[':p' . $index++]  = '`WesternLongitude`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::WESTERNLONGITUDEEW)) {
            $modifiedColumns[':p' . $index++]  = '`WesternLongitudeEW`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::CAPITAL)) {
            $modifiedColumns[':p' . $index++]  = '`Capital`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::LATDEC)) {
            $modifiedColumns[':p' . $index++]  = '`LatDec`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::NORTHSOUTH)) {
            $modifiedColumns[':p' . $index++]  = '`NorthSouth`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::LONGDEC)) {
            $modifiedColumns[':p' . $index++]  = '`LongDec`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::EASTWEST)) {
            $modifiedColumns[':p' . $index++]  = '`EastWest`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::POLARBOREAL)) {
            $modifiedColumns[':p' . $index++]  = '`PolarBoreal`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::TEMPERATE)) {
            $modifiedColumns[':p' . $index++]  = '`Temperate`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::SUBTROPICAL)) {
            $modifiedColumns[':p' . $index++]  = '`Subtropical`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::TROPICAL)) {
            $modifiedColumns[':p' . $index++]  = '`Tropical`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::AREACODEINLAND)) {
            $modifiedColumns[':p' . $index++]  = '`AreaCodeInland`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::AREACODEMARINEI)) {
            $modifiedColumns[':p' . $index++]  = '`AreaCodeMarineI`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::AREACODEMARINEII)) {
            $modifiedColumns[':p' . $index++]  = '`AreaCodeMarineII`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(CountrysubrefPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `countrysubref` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`CSub_Code`':
                        $stmt->bindValue($identifier, $this->csub_code, PDO::PARAM_STR);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`CountrySub`':
                        $stmt->bindValue($identifier, $this->countrysub, PDO::PARAM_STR);
                        break;
                    case '`OtherName`':
                        $stmt->bindValue($identifier, $this->othername, PDO::PARAM_STR);
                        break;
                    case '`CountrySubType`':
                        $stmt->bindValue($identifier, $this->countrysubtype, PDO::PARAM_STR);
                        break;
                    case '`CountrySubRank`':
                        $stmt->bindValue($identifier, $this->countrysubrank, PDO::PARAM_INT);
                        break;
                    case '`Comments`':
                        $stmt->bindValue($identifier, $this->comments, PDO::PARAM_STR);
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
                    case '`EasternLongitude`':
                        $stmt->bindValue($identifier, $this->easternlongitude, PDO::PARAM_INT);
                        break;
                    case '`EasternLongitudeEW`':
                        $stmt->bindValue($identifier, $this->easternlongitudeew, PDO::PARAM_STR);
                        break;
                    case '`WesternLongitude`':
                        $stmt->bindValue($identifier, $this->westernlongitude, PDO::PARAM_INT);
                        break;
                    case '`WesternLongitudeEW`':
                        $stmt->bindValue($identifier, $this->westernlongitudeew, PDO::PARAM_STR);
                        break;
                    case '`Capital`':
                        $stmt->bindValue($identifier, $this->capital, PDO::PARAM_STR);
                        break;
                    case '`LatDec`':
                        $stmt->bindValue($identifier, $this->latdec, PDO::PARAM_STR);
                        break;
                    case '`NorthSouth`':
                        $stmt->bindValue($identifier, $this->northsouth, PDO::PARAM_STR);
                        break;
                    case '`LongDec`':
                        $stmt->bindValue($identifier, $this->longdec, PDO::PARAM_STR);
                        break;
                    case '`EastWest`':
                        $stmt->bindValue($identifier, $this->eastwest, PDO::PARAM_STR);
                        break;
                    case '`PolarBoreal`':
                        $stmt->bindValue($identifier, (int) $this->polarboreal, PDO::PARAM_INT);
                        break;
                    case '`Temperate`':
                        $stmt->bindValue($identifier, (int) $this->temperate, PDO::PARAM_INT);
                        break;
                    case '`Subtropical`':
                        $stmt->bindValue($identifier, (int) $this->subtropical, PDO::PARAM_INT);
                        break;
                    case '`Tropical`':
                        $stmt->bindValue($identifier, (int) $this->tropical, PDO::PARAM_INT);
                        break;
                    case '`AreaCodeInland`':
                        $stmt->bindValue($identifier, $this->areacodeinland, PDO::PARAM_INT);
                        break;
                    case '`AreaCodeMarineI`':
                        $stmt->bindValue($identifier, $this->areacodemarinei, PDO::PARAM_INT);
                        break;
                    case '`AreaCodeMarineII`':
                        $stmt->bindValue($identifier, $this->areacodemarineii, PDO::PARAM_INT);
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


            if (($retval = CountrysubrefPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CountrysubrefPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getCsubCode();
                break;
            case 1:
                return $this->getCCode();
                break;
            case 2:
                return $this->getCountrysub();
                break;
            case 3:
                return $this->getOthername();
                break;
            case 4:
                return $this->getCountrysubtype();
                break;
            case 5:
                return $this->getCountrysubrank();
                break;
            case 6:
                return $this->getComments();
                break;
            case 7:
                return $this->getNorthernlatitude();
                break;
            case 8:
                return $this->getNorthernlatitudens();
                break;
            case 9:
                return $this->getSouthernlatitude();
                break;
            case 10:
                return $this->getSouthernlatitudens();
                break;
            case 11:
                return $this->getEasternlongitude();
                break;
            case 12:
                return $this->getEasternlongitudeew();
                break;
            case 13:
                return $this->getWesternlongitude();
                break;
            case 14:
                return $this->getWesternlongitudeew();
                break;
            case 15:
                return $this->getCapital();
                break;
            case 16:
                return $this->getLatdec();
                break;
            case 17:
                return $this->getNorthsouth();
                break;
            case 18:
                return $this->getLongdec();
                break;
            case 19:
                return $this->getEastwest();
                break;
            case 20:
                return $this->getPolarboreal();
                break;
            case 21:
                return $this->getTemperate();
                break;
            case 22:
                return $this->getSubtropical();
                break;
            case 23:
                return $this->getTropical();
                break;
            case 24:
                return $this->getAreacodeinland();
                break;
            case 25:
                return $this->getAreacodemarinei();
                break;
            case 26:
                return $this->getAreacodemarineii();
                break;
            case 27:
                return $this->getEntered();
                break;
            case 28:
                return $this->getDateentered();
                break;
            case 29:
                return $this->getModified();
                break;
            case 30:
                return $this->getDatemodified();
                break;
            case 31:
                return $this->getExpert();
                break;
            case 32:
                return $this->getDatechecked();
                break;
            case 33:
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
        if (isset($alreadyDumpedObjects['Countrysubref'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Countrysubref'][$this->getPrimaryKey()] = true;
        $keys = CountrysubrefPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getCsubCode(),
            $keys[1] => $this->getCCode(),
            $keys[2] => $this->getCountrysub(),
            $keys[3] => $this->getOthername(),
            $keys[4] => $this->getCountrysubtype(),
            $keys[5] => $this->getCountrysubrank(),
            $keys[6] => $this->getComments(),
            $keys[7] => $this->getNorthernlatitude(),
            $keys[8] => $this->getNorthernlatitudens(),
            $keys[9] => $this->getSouthernlatitude(),
            $keys[10] => $this->getSouthernlatitudens(),
            $keys[11] => $this->getEasternlongitude(),
            $keys[12] => $this->getEasternlongitudeew(),
            $keys[13] => $this->getWesternlongitude(),
            $keys[14] => $this->getWesternlongitudeew(),
            $keys[15] => $this->getCapital(),
            $keys[16] => $this->getLatdec(),
            $keys[17] => $this->getNorthsouth(),
            $keys[18] => $this->getLongdec(),
            $keys[19] => $this->getEastwest(),
            $keys[20] => $this->getPolarboreal(),
            $keys[21] => $this->getTemperate(),
            $keys[22] => $this->getSubtropical(),
            $keys[23] => $this->getTropical(),
            $keys[24] => $this->getAreacodeinland(),
            $keys[25] => $this->getAreacodemarinei(),
            $keys[26] => $this->getAreacodemarineii(),
            $keys[27] => $this->getEntered(),
            $keys[28] => $this->getDateentered(),
            $keys[29] => $this->getModified(),
            $keys[30] => $this->getDatemodified(),
            $keys[31] => $this->getExpert(),
            $keys[32] => $this->getDatechecked(),
            $keys[33] => $this->getTs(),
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
        $pos = CountrysubrefPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setCsubCode($value);
                break;
            case 1:
                $this->setCCode($value);
                break;
            case 2:
                $this->setCountrysub($value);
                break;
            case 3:
                $this->setOthername($value);
                break;
            case 4:
                $this->setCountrysubtype($value);
                break;
            case 5:
                $this->setCountrysubrank($value);
                break;
            case 6:
                $this->setComments($value);
                break;
            case 7:
                $this->setNorthernlatitude($value);
                break;
            case 8:
                $this->setNorthernlatitudens($value);
                break;
            case 9:
                $this->setSouthernlatitude($value);
                break;
            case 10:
                $this->setSouthernlatitudens($value);
                break;
            case 11:
                $this->setEasternlongitude($value);
                break;
            case 12:
                $this->setEasternlongitudeew($value);
                break;
            case 13:
                $this->setWesternlongitude($value);
                break;
            case 14:
                $this->setWesternlongitudeew($value);
                break;
            case 15:
                $this->setCapital($value);
                break;
            case 16:
                $this->setLatdec($value);
                break;
            case 17:
                $this->setNorthsouth($value);
                break;
            case 18:
                $this->setLongdec($value);
                break;
            case 19:
                $this->setEastwest($value);
                break;
            case 20:
                $this->setPolarboreal($value);
                break;
            case 21:
                $this->setTemperate($value);
                break;
            case 22:
                $this->setSubtropical($value);
                break;
            case 23:
                $this->setTropical($value);
                break;
            case 24:
                $this->setAreacodeinland($value);
                break;
            case 25:
                $this->setAreacodemarinei($value);
                break;
            case 26:
                $this->setAreacodemarineii($value);
                break;
            case 27:
                $this->setEntered($value);
                break;
            case 28:
                $this->setDateentered($value);
                break;
            case 29:
                $this->setModified($value);
                break;
            case 30:
                $this->setDatemodified($value);
                break;
            case 31:
                $this->setExpert($value);
                break;
            case 32:
                $this->setDatechecked($value);
                break;
            case 33:
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
        $keys = CountrysubrefPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setCsubCode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCCode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCountrysub($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOthername($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCountrysubtype($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCountrysubrank($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setComments($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNorthernlatitude($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setNorthernlatitudens($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setSouthernlatitude($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setSouthernlatitudens($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setEasternlongitude($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setEasternlongitudeew($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setWesternlongitude($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setWesternlongitudeew($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setCapital($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setLatdec($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setNorthsouth($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setLongdec($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setEastwest($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setPolarboreal($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setTemperate($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setSubtropical($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setTropical($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setAreacodeinland($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setAreacodemarinei($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setAreacodemarineii($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setEntered($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setDateentered($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setModified($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setDatemodified($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setExpert($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setDatechecked($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setTs($arr[$keys[33]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CountrysubrefPeer::DATABASE_NAME);

        if ($this->isColumnModified(CountrysubrefPeer::CSUB_CODE)) $criteria->add(CountrysubrefPeer::CSUB_CODE, $this->csub_code);
        if ($this->isColumnModified(CountrysubrefPeer::C_CODE)) $criteria->add(CountrysubrefPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(CountrysubrefPeer::COUNTRYSUB)) $criteria->add(CountrysubrefPeer::COUNTRYSUB, $this->countrysub);
        if ($this->isColumnModified(CountrysubrefPeer::OTHERNAME)) $criteria->add(CountrysubrefPeer::OTHERNAME, $this->othername);
        if ($this->isColumnModified(CountrysubrefPeer::COUNTRYSUBTYPE)) $criteria->add(CountrysubrefPeer::COUNTRYSUBTYPE, $this->countrysubtype);
        if ($this->isColumnModified(CountrysubrefPeer::COUNTRYSUBRANK)) $criteria->add(CountrysubrefPeer::COUNTRYSUBRANK, $this->countrysubrank);
        if ($this->isColumnModified(CountrysubrefPeer::COMMENTS)) $criteria->add(CountrysubrefPeer::COMMENTS, $this->comments);
        if ($this->isColumnModified(CountrysubrefPeer::NORTHERNLATITUDE)) $criteria->add(CountrysubrefPeer::NORTHERNLATITUDE, $this->northernlatitude);
        if ($this->isColumnModified(CountrysubrefPeer::NORTHERNLATITUDENS)) $criteria->add(CountrysubrefPeer::NORTHERNLATITUDENS, $this->northernlatitudens);
        if ($this->isColumnModified(CountrysubrefPeer::SOUTHERNLATITUDE)) $criteria->add(CountrysubrefPeer::SOUTHERNLATITUDE, $this->southernlatitude);
        if ($this->isColumnModified(CountrysubrefPeer::SOUTHERNLATITUDENS)) $criteria->add(CountrysubrefPeer::SOUTHERNLATITUDENS, $this->southernlatitudens);
        if ($this->isColumnModified(CountrysubrefPeer::EASTERNLONGITUDE)) $criteria->add(CountrysubrefPeer::EASTERNLONGITUDE, $this->easternlongitude);
        if ($this->isColumnModified(CountrysubrefPeer::EASTERNLONGITUDEEW)) $criteria->add(CountrysubrefPeer::EASTERNLONGITUDEEW, $this->easternlongitudeew);
        if ($this->isColumnModified(CountrysubrefPeer::WESTERNLONGITUDE)) $criteria->add(CountrysubrefPeer::WESTERNLONGITUDE, $this->westernlongitude);
        if ($this->isColumnModified(CountrysubrefPeer::WESTERNLONGITUDEEW)) $criteria->add(CountrysubrefPeer::WESTERNLONGITUDEEW, $this->westernlongitudeew);
        if ($this->isColumnModified(CountrysubrefPeer::CAPITAL)) $criteria->add(CountrysubrefPeer::CAPITAL, $this->capital);
        if ($this->isColumnModified(CountrysubrefPeer::LATDEC)) $criteria->add(CountrysubrefPeer::LATDEC, $this->latdec);
        if ($this->isColumnModified(CountrysubrefPeer::NORTHSOUTH)) $criteria->add(CountrysubrefPeer::NORTHSOUTH, $this->northsouth);
        if ($this->isColumnModified(CountrysubrefPeer::LONGDEC)) $criteria->add(CountrysubrefPeer::LONGDEC, $this->longdec);
        if ($this->isColumnModified(CountrysubrefPeer::EASTWEST)) $criteria->add(CountrysubrefPeer::EASTWEST, $this->eastwest);
        if ($this->isColumnModified(CountrysubrefPeer::POLARBOREAL)) $criteria->add(CountrysubrefPeer::POLARBOREAL, $this->polarboreal);
        if ($this->isColumnModified(CountrysubrefPeer::TEMPERATE)) $criteria->add(CountrysubrefPeer::TEMPERATE, $this->temperate);
        if ($this->isColumnModified(CountrysubrefPeer::SUBTROPICAL)) $criteria->add(CountrysubrefPeer::SUBTROPICAL, $this->subtropical);
        if ($this->isColumnModified(CountrysubrefPeer::TROPICAL)) $criteria->add(CountrysubrefPeer::TROPICAL, $this->tropical);
        if ($this->isColumnModified(CountrysubrefPeer::AREACODEINLAND)) $criteria->add(CountrysubrefPeer::AREACODEINLAND, $this->areacodeinland);
        if ($this->isColumnModified(CountrysubrefPeer::AREACODEMARINEI)) $criteria->add(CountrysubrefPeer::AREACODEMARINEI, $this->areacodemarinei);
        if ($this->isColumnModified(CountrysubrefPeer::AREACODEMARINEII)) $criteria->add(CountrysubrefPeer::AREACODEMARINEII, $this->areacodemarineii);
        if ($this->isColumnModified(CountrysubrefPeer::ENTERED)) $criteria->add(CountrysubrefPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(CountrysubrefPeer::DATEENTERED)) $criteria->add(CountrysubrefPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(CountrysubrefPeer::MODIFIED)) $criteria->add(CountrysubrefPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(CountrysubrefPeer::DATEMODIFIED)) $criteria->add(CountrysubrefPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(CountrysubrefPeer::EXPERT)) $criteria->add(CountrysubrefPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(CountrysubrefPeer::DATECHECKED)) $criteria->add(CountrysubrefPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(CountrysubrefPeer::TS)) $criteria->add(CountrysubrefPeer::TS, $this->ts);

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
        $criteria = new Criteria(CountrysubrefPeer::DATABASE_NAME);
        $criteria->add(CountrysubrefPeer::CSUB_CODE, $this->csub_code);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getCsubCode();
    }

    /**
     * Generic method to set the primary key (csub_code column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setCsubCode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getCsubCode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Countrysubref (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCCode($this->getCCode());
        $copyObj->setCountrysub($this->getCountrysub());
        $copyObj->setOthername($this->getOthername());
        $copyObj->setCountrysubtype($this->getCountrysubtype());
        $copyObj->setCountrysubrank($this->getCountrysubrank());
        $copyObj->setComments($this->getComments());
        $copyObj->setNorthernlatitude($this->getNorthernlatitude());
        $copyObj->setNorthernlatitudens($this->getNorthernlatitudens());
        $copyObj->setSouthernlatitude($this->getSouthernlatitude());
        $copyObj->setSouthernlatitudens($this->getSouthernlatitudens());
        $copyObj->setEasternlongitude($this->getEasternlongitude());
        $copyObj->setEasternlongitudeew($this->getEasternlongitudeew());
        $copyObj->setWesternlongitude($this->getWesternlongitude());
        $copyObj->setWesternlongitudeew($this->getWesternlongitudeew());
        $copyObj->setCapital($this->getCapital());
        $copyObj->setLatdec($this->getLatdec());
        $copyObj->setNorthsouth($this->getNorthsouth());
        $copyObj->setLongdec($this->getLongdec());
        $copyObj->setEastwest($this->getEastwest());
        $copyObj->setPolarboreal($this->getPolarboreal());
        $copyObj->setTemperate($this->getTemperate());
        $copyObj->setSubtropical($this->getSubtropical());
        $copyObj->setTropical($this->getTropical());
        $copyObj->setAreacodeinland($this->getAreacodeinland());
        $copyObj->setAreacodemarinei($this->getAreacodemarinei());
        $copyObj->setAreacodemarineii($this->getAreacodemarineii());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setCsubCode(NULL); // this is a auto-increment column, so set to default value
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
     * @return Countrysubref Clone of current object.
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
     * @return CountrysubrefPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CountrysubrefPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->csub_code = null;
        $this->c_code = null;
        $this->countrysub = null;
        $this->othername = null;
        $this->countrysubtype = null;
        $this->countrysubrank = null;
        $this->comments = null;
        $this->northernlatitude = null;
        $this->northernlatitudens = null;
        $this->southernlatitude = null;
        $this->southernlatitudens = null;
        $this->easternlongitude = null;
        $this->easternlongitudeew = null;
        $this->westernlongitude = null;
        $this->westernlongitudeew = null;
        $this->capital = null;
        $this->latdec = null;
        $this->northsouth = null;
        $this->longdec = null;
        $this->eastwest = null;
        $this->polarboreal = null;
        $this->temperate = null;
        $this->subtropical = null;
        $this->tropical = null;
        $this->areacodeinland = null;
        $this->areacodemarinei = null;
        $this->areacodemarineii = null;
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
        return (string) $this->exportTo(CountrysubrefPeer::DEFAULT_STRING_FORMAT);
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
