<?php


/**
 * Base class that represents a row from the 'icescatch' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseIcescatch extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'IcescatchPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        IcescatchPeer
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
     * The value for the specode field.
     * @var        string
     */
    protected $specode;

    /**
     * The value for the areacode field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $areacode;

    /**
     * The value for the country field.
     * @var        string
     */
    protected $country;

    /**
     * The value for the countrycode field.
     * @var        string
     */
    protected $countrycode;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the species field.
     * @var        string
     */
    protected $species;

    /**
     * The value for the alphacode field.
     * @var        string
     */
    protected $alphacode;

    /**
     * The value for the area field.
     * @var        string
     */
    protected $area;

    /**
     * The value for the area2 field.
     * @var        string
     */
    protected $area2;

    /**
     * The value for the 1973 field.
     * @var        double
     */
    protected $1973;

    /**
     * The value for the 1974 field.
     * @var        double
     */
    protected $1974;

    /**
     * The value for the 1975 field.
     * @var        double
     */
    protected $1975;

    /**
     * The value for the 1976 field.
     * @var        double
     */
    protected $1976;

    /**
     * The value for the 1977 field.
     * @var        double
     */
    protected $1977;

    /**
     * The value for the 1978 field.
     * @var        double
     */
    protected $1978;

    /**
     * The value for the 1979 field.
     * @var        double
     */
    protected $1979;

    /**
     * The value for the 1980 field.
     * @var        double
     */
    protected $1980;

    /**
     * The value for the 1981 field.
     * @var        double
     */
    protected $1981;

    /**
     * The value for the 1982 field.
     * @var        double
     */
    protected $1982;

    /**
     * The value for the 1983 field.
     * @var        double
     */
    protected $1983;

    /**
     * The value for the 1984 field.
     * @var        double
     */
    protected $1984;

    /**
     * The value for the 1985 field.
     * @var        double
     */
    protected $1985;

    /**
     * The value for the 1986 field.
     * @var        double
     */
    protected $1986;

    /**
     * The value for the 1987 field.
     * @var        double
     */
    protected $1987;

    /**
     * The value for the 1988 field.
     * @var        double
     */
    protected $1988;

    /**
     * The value for the 1989 field.
     * @var        double
     */
    protected $1989;

    /**
     * The value for the 1990 field.
     * @var        double
     */
    protected $1990;

    /**
     * The value for the 1991 field.
     * @var        double
     */
    protected $1991;

    /**
     * The value for the 1992 field.
     * @var        double
     */
    protected $1992;

    /**
     * The value for the 1993 field.
     * @var        double
     */
    protected $1993;

    /**
     * The value for the 1994 field.
     * @var        double
     */
    protected $1994;

    /**
     * The value for the 1995 field.
     * @var        double
     */
    protected $1995;

    /**
     * The value for the 1996 field.
     * @var        double
     */
    protected $1996;

    /**
     * The value for the 1997 field.
     * @var        double
     */
    protected $1997;

    /**
     * The value for the 1998 field.
     * @var        double
     */
    protected $1998;

    /**
     * The value for the 1999 field.
     * @var        double
     */
    protected $1999;

    /**
     * The value for the 2000 field.
     * @var        double
     */
    protected $2000;

    /**
     * The value for the 2001 field.
     * @var        double
     */
    protected $2001;

    /**
     * The value for the 2002 field.
     * @var        double
     */
    protected $2002;

    /**
     * The value for the 2003 field.
     * @var        double
     */
    protected $2003;

    /**
     * The value for the 2004 field.
     * @var        double
     */
    protected $2004;

    /**
     * The value for the 2005 field.
     * @var        double
     */
    protected $2005;

    /**
     * The value for the 2006 field.
     * @var        double
     */
    protected $2006;

    /**
     * The value for the 2007 field.
     * @var        double
     */
    protected $2007;

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
        $this->areacode = 0;
    }

    /**
     * Initializes internal state of BaseIcescatch object.
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
     * Get the [specode] column value.
     *
     * @return string
     */
    public function getSpecode()
    {

        return $this->specode;
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
     * Get the [country] column value.
     *
     * @return string
     */
    public function getCountry()
    {

        return $this->country;
    }

    /**
     * Get the [countrycode] column value.
     *
     * @return string
     */
    public function getCountrycode()
    {

        return $this->countrycode;
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
     * Get the [species] column value.
     *
     * @return string
     */
    public function getSpecies()
    {

        return $this->species;
    }

    /**
     * Get the [alphacode] column value.
     *
     * @return string
     */
    public function getAlphacode()
    {

        return $this->alphacode;
    }

    /**
     * Get the [area] column value.
     *
     * @return string
     */
    public function getArea()
    {

        return $this->area;
    }

    /**
     * Get the [area2] column value.
     *
     * @return string
     */
    public function getArea2()
    {

        return $this->area2;
    }

    /**
     * Get the [1973] column value.
     *
     * @return double
     */
    public function get1973()
    {

        return $this->1973;
    }

    /**
     * Get the [1974] column value.
     *
     * @return double
     */
    public function get1974()
    {

        return $this->1974;
    }

    /**
     * Get the [1975] column value.
     *
     * @return double
     */
    public function get1975()
    {

        return $this->1975;
    }

    /**
     * Get the [1976] column value.
     *
     * @return double
     */
    public function get1976()
    {

        return $this->1976;
    }

    /**
     * Get the [1977] column value.
     *
     * @return double
     */
    public function get1977()
    {

        return $this->1977;
    }

    /**
     * Get the [1978] column value.
     *
     * @return double
     */
    public function get1978()
    {

        return $this->1978;
    }

    /**
     * Get the [1979] column value.
     *
     * @return double
     */
    public function get1979()
    {

        return $this->1979;
    }

    /**
     * Get the [1980] column value.
     *
     * @return double
     */
    public function get1980()
    {

        return $this->1980;
    }

    /**
     * Get the [1981] column value.
     *
     * @return double
     */
    public function get1981()
    {

        return $this->1981;
    }

    /**
     * Get the [1982] column value.
     *
     * @return double
     */
    public function get1982()
    {

        return $this->1982;
    }

    /**
     * Get the [1983] column value.
     *
     * @return double
     */
    public function get1983()
    {

        return $this->1983;
    }

    /**
     * Get the [1984] column value.
     *
     * @return double
     */
    public function get1984()
    {

        return $this->1984;
    }

    /**
     * Get the [1985] column value.
     *
     * @return double
     */
    public function get1985()
    {

        return $this->1985;
    }

    /**
     * Get the [1986] column value.
     *
     * @return double
     */
    public function get1986()
    {

        return $this->1986;
    }

    /**
     * Get the [1987] column value.
     *
     * @return double
     */
    public function get1987()
    {

        return $this->1987;
    }

    /**
     * Get the [1988] column value.
     *
     * @return double
     */
    public function get1988()
    {

        return $this->1988;
    }

    /**
     * Get the [1989] column value.
     *
     * @return double
     */
    public function get1989()
    {

        return $this->1989;
    }

    /**
     * Get the [1990] column value.
     *
     * @return double
     */
    public function get1990()
    {

        return $this->1990;
    }

    /**
     * Get the [1991] column value.
     *
     * @return double
     */
    public function get1991()
    {

        return $this->1991;
    }

    /**
     * Get the [1992] column value.
     *
     * @return double
     */
    public function get1992()
    {

        return $this->1992;
    }

    /**
     * Get the [1993] column value.
     *
     * @return double
     */
    public function get1993()
    {

        return $this->1993;
    }

    /**
     * Get the [1994] column value.
     *
     * @return double
     */
    public function get1994()
    {

        return $this->1994;
    }

    /**
     * Get the [1995] column value.
     *
     * @return double
     */
    public function get1995()
    {

        return $this->1995;
    }

    /**
     * Get the [1996] column value.
     *
     * @return double
     */
    public function get1996()
    {

        return $this->1996;
    }

    /**
     * Get the [1997] column value.
     *
     * @return double
     */
    public function get1997()
    {

        return $this->1997;
    }

    /**
     * Get the [1998] column value.
     *
     * @return double
     */
    public function get1998()
    {

        return $this->1998;
    }

    /**
     * Get the [1999] column value.
     *
     * @return double
     */
    public function get1999()
    {

        return $this->1999;
    }

    /**
     * Get the [2000] column value.
     *
     * @return double
     */
    public function get2000()
    {

        return $this->2000;
    }

    /**
     * Get the [2001] column value.
     *
     * @return double
     */
    public function get2001()
    {

        return $this->2001;
    }

    /**
     * Get the [2002] column value.
     *
     * @return double
     */
    public function get2002()
    {

        return $this->2002;
    }

    /**
     * Get the [2003] column value.
     *
     * @return double
     */
    public function get2003()
    {

        return $this->2003;
    }

    /**
     * Get the [2004] column value.
     *
     * @return double
     */
    public function get2004()
    {

        return $this->2004;
    }

    /**
     * Get the [2005] column value.
     *
     * @return double
     */
    public function get2005()
    {

        return $this->2005;
    }

    /**
     * Get the [2006] column value.
     *
     * @return double
     */
    public function get2006()
    {

        return $this->2006;
    }

    /**
     * Get the [2007] column value.
     *
     * @return double
     */
    public function get2007()
    {

        return $this->2007;
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
     * @return Icescatch The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = IcescatchPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [specode] column.
     *
     * @param  string $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function setSpecode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->specode !== $v) {
            $this->specode = $v;
            $this->modifiedColumns[] = IcescatchPeer::SPECODE;
        }


        return $this;
    } // setSpecode()

    /**
     * Set the value of [areacode] column.
     *
     * @param  int $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function setAreacode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areacode !== $v) {
            $this->areacode = $v;
            $this->modifiedColumns[] = IcescatchPeer::AREACODE;
        }


        return $this;
    } // setAreacode()

    /**
     * Set the value of [country] column.
     *
     * @param  string $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function setCountry($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->country !== $v) {
            $this->country = $v;
            $this->modifiedColumns[] = IcescatchPeer::COUNTRY;
        }


        return $this;
    } // setCountry()

    /**
     * Set the value of [countrycode] column.
     *
     * @param  string $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function setCountrycode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->countrycode !== $v) {
            $this->countrycode = $v;
            $this->modifiedColumns[] = IcescatchPeer::COUNTRYCODE;
        }


        return $this;
    } // setCountrycode()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = IcescatchPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [species] column.
     *
     * @param  string $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function setSpecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->species !== $v) {
            $this->species = $v;
            $this->modifiedColumns[] = IcescatchPeer::SPECIES;
        }


        return $this;
    } // setSpecies()

    /**
     * Set the value of [alphacode] column.
     *
     * @param  string $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function setAlphacode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alphacode !== $v) {
            $this->alphacode = $v;
            $this->modifiedColumns[] = IcescatchPeer::ALPHACODE;
        }


        return $this;
    } // setAlphacode()

    /**
     * Set the value of [area] column.
     *
     * @param  string $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function setArea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->area !== $v) {
            $this->area = $v;
            $this->modifiedColumns[] = IcescatchPeer::AREA;
        }


        return $this;
    } // setArea()

    /**
     * Set the value of [area2] column.
     *
     * @param  string $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function setArea2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->area2 !== $v) {
            $this->area2 = $v;
            $this->modifiedColumns[] = IcescatchPeer::AREA2;
        }


        return $this;
    } // setArea2()

    /**
     * Set the value of [1973] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1973($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1973 !== $v) {
            $this->1973 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1973;
        }


        return $this;
    } // set1973()

    /**
     * Set the value of [1974] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1974($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1974 !== $v) {
            $this->1974 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1974;
        }


        return $this;
    } // set1974()

    /**
     * Set the value of [1975] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1975($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1975 !== $v) {
            $this->1975 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1975;
        }


        return $this;
    } // set1975()

    /**
     * Set the value of [1976] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1976($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1976 !== $v) {
            $this->1976 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1976;
        }


        return $this;
    } // set1976()

    /**
     * Set the value of [1977] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1977($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1977 !== $v) {
            $this->1977 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1977;
        }


        return $this;
    } // set1977()

    /**
     * Set the value of [1978] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1978($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1978 !== $v) {
            $this->1978 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1978;
        }


        return $this;
    } // set1978()

    /**
     * Set the value of [1979] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1979($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1979 !== $v) {
            $this->1979 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1979;
        }


        return $this;
    } // set1979()

    /**
     * Set the value of [1980] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1980($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1980 !== $v) {
            $this->1980 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1980;
        }


        return $this;
    } // set1980()

    /**
     * Set the value of [1981] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1981($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1981 !== $v) {
            $this->1981 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1981;
        }


        return $this;
    } // set1981()

    /**
     * Set the value of [1982] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1982($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1982 !== $v) {
            $this->1982 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1982;
        }


        return $this;
    } // set1982()

    /**
     * Set the value of [1983] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1983($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1983 !== $v) {
            $this->1983 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1983;
        }


        return $this;
    } // set1983()

    /**
     * Set the value of [1984] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1984($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1984 !== $v) {
            $this->1984 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1984;
        }


        return $this;
    } // set1984()

    /**
     * Set the value of [1985] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1985($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1985 !== $v) {
            $this->1985 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1985;
        }


        return $this;
    } // set1985()

    /**
     * Set the value of [1986] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1986($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1986 !== $v) {
            $this->1986 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1986;
        }


        return $this;
    } // set1986()

    /**
     * Set the value of [1987] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1987($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1987 !== $v) {
            $this->1987 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1987;
        }


        return $this;
    } // set1987()

    /**
     * Set the value of [1988] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1988($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1988 !== $v) {
            $this->1988 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1988;
        }


        return $this;
    } // set1988()

    /**
     * Set the value of [1989] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1989($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1989 !== $v) {
            $this->1989 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1989;
        }


        return $this;
    } // set1989()

    /**
     * Set the value of [1990] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1990($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1990 !== $v) {
            $this->1990 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1990;
        }


        return $this;
    } // set1990()

    /**
     * Set the value of [1991] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1991($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1991 !== $v) {
            $this->1991 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1991;
        }


        return $this;
    } // set1991()

    /**
     * Set the value of [1992] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1992($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1992 !== $v) {
            $this->1992 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1992;
        }


        return $this;
    } // set1992()

    /**
     * Set the value of [1993] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1993($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1993 !== $v) {
            $this->1993 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1993;
        }


        return $this;
    } // set1993()

    /**
     * Set the value of [1994] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1994($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1994 !== $v) {
            $this->1994 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1994;
        }


        return $this;
    } // set1994()

    /**
     * Set the value of [1995] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1995($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1995 !== $v) {
            $this->1995 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1995;
        }


        return $this;
    } // set1995()

    /**
     * Set the value of [1996] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1996($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1996 !== $v) {
            $this->1996 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1996;
        }


        return $this;
    } // set1996()

    /**
     * Set the value of [1997] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1997($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1997 !== $v) {
            $this->1997 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1997;
        }


        return $this;
    } // set1997()

    /**
     * Set the value of [1998] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1998($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1998 !== $v) {
            $this->1998 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1998;
        }


        return $this;
    } // set1998()

    /**
     * Set the value of [1999] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set1999($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->1999 !== $v) {
            $this->1999 = $v;
            $this->modifiedColumns[] = IcescatchPeer::1999;
        }


        return $this;
    } // set1999()

    /**
     * Set the value of [2000] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set2000($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->2000 !== $v) {
            $this->2000 = $v;
            $this->modifiedColumns[] = IcescatchPeer::2000;
        }


        return $this;
    } // set2000()

    /**
     * Set the value of [2001] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set2001($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->2001 !== $v) {
            $this->2001 = $v;
            $this->modifiedColumns[] = IcescatchPeer::2001;
        }


        return $this;
    } // set2001()

    /**
     * Set the value of [2002] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set2002($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->2002 !== $v) {
            $this->2002 = $v;
            $this->modifiedColumns[] = IcescatchPeer::2002;
        }


        return $this;
    } // set2002()

    /**
     * Set the value of [2003] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set2003($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->2003 !== $v) {
            $this->2003 = $v;
            $this->modifiedColumns[] = IcescatchPeer::2003;
        }


        return $this;
    } // set2003()

    /**
     * Set the value of [2004] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set2004($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->2004 !== $v) {
            $this->2004 = $v;
            $this->modifiedColumns[] = IcescatchPeer::2004;
        }


        return $this;
    } // set2004()

    /**
     * Set the value of [2005] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set2005($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->2005 !== $v) {
            $this->2005 = $v;
            $this->modifiedColumns[] = IcescatchPeer::2005;
        }


        return $this;
    } // set2005()

    /**
     * Set the value of [2006] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set2006($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->2006 !== $v) {
            $this->2006 = $v;
            $this->modifiedColumns[] = IcescatchPeer::2006;
        }


        return $this;
    } // set2006()

    /**
     * Set the value of [2007] column.
     *
     * @param  double $v new value
     * @return Icescatch The current object (for fluent API support)
     */
    public function set2007($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->2007 !== $v) {
            $this->2007 = $v;
            $this->modifiedColumns[] = IcescatchPeer::2007;
        }


        return $this;
    } // set2007()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Icescatch The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = IcescatchPeer::TS;
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
            if ($this->areacode !== 0) {
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
            $this->specode = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->areacode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->country = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->countrycode = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->c_code = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->species = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->alphacode = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->area = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->area2 = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->1973 = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->1974 = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->1975 = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->1976 = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->1977 = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->1978 = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
            $this->1979 = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->1980 = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->1981 = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->1982 = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->1983 = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->1984 = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->1985 = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->1986 = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
            $this->1987 = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
            $this->1988 = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->1989 = ($row[$startcol + 26] !== null) ? (double) $row[$startcol + 26] : null;
            $this->1990 = ($row[$startcol + 27] !== null) ? (double) $row[$startcol + 27] : null;
            $this->1991 = ($row[$startcol + 28] !== null) ? (double) $row[$startcol + 28] : null;
            $this->1992 = ($row[$startcol + 29] !== null) ? (double) $row[$startcol + 29] : null;
            $this->1993 = ($row[$startcol + 30] !== null) ? (double) $row[$startcol + 30] : null;
            $this->1994 = ($row[$startcol + 31] !== null) ? (double) $row[$startcol + 31] : null;
            $this->1995 = ($row[$startcol + 32] !== null) ? (double) $row[$startcol + 32] : null;
            $this->1996 = ($row[$startcol + 33] !== null) ? (double) $row[$startcol + 33] : null;
            $this->1997 = ($row[$startcol + 34] !== null) ? (double) $row[$startcol + 34] : null;
            $this->1998 = ($row[$startcol + 35] !== null) ? (double) $row[$startcol + 35] : null;
            $this->1999 = ($row[$startcol + 36] !== null) ? (double) $row[$startcol + 36] : null;
            $this->2000 = ($row[$startcol + 37] !== null) ? (double) $row[$startcol + 37] : null;
            $this->2001 = ($row[$startcol + 38] !== null) ? (double) $row[$startcol + 38] : null;
            $this->2002 = ($row[$startcol + 39] !== null) ? (double) $row[$startcol + 39] : null;
            $this->2003 = ($row[$startcol + 40] !== null) ? (double) $row[$startcol + 40] : null;
            $this->2004 = ($row[$startcol + 41] !== null) ? (double) $row[$startcol + 41] : null;
            $this->2005 = ($row[$startcol + 42] !== null) ? (double) $row[$startcol + 42] : null;
            $this->2006 = ($row[$startcol + 43] !== null) ? (double) $row[$startcol + 43] : null;
            $this->2007 = ($row[$startcol + 44] !== null) ? (double) $row[$startcol + 44] : null;
            $this->ts = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 46; // 46 = IcescatchPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Icescatch object", $e);
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
            $con = Propel::getConnection(IcescatchPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = IcescatchPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(IcescatchPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = IcescatchQuery::create()
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
            $con = Propel::getConnection(IcescatchPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                IcescatchPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = IcescatchPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . IcescatchPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(IcescatchPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`AutoCtr`';
        }
        if ($this->isColumnModified(IcescatchPeer::SPECODE)) {
            $modifiedColumns[':p' . $index++]  = '`Specode`';
        }
        if ($this->isColumnModified(IcescatchPeer::AREACODE)) {
            $modifiedColumns[':p' . $index++]  = '`Areacode`';
        }
        if ($this->isColumnModified(IcescatchPeer::COUNTRY)) {
            $modifiedColumns[':p' . $index++]  = '`Country`';
        }
        if ($this->isColumnModified(IcescatchPeer::COUNTRYCODE)) {
            $modifiedColumns[':p' . $index++]  = '`CountryCode`';
        }
        if ($this->isColumnModified(IcescatchPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(IcescatchPeer::SPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`Species`';
        }
        if ($this->isColumnModified(IcescatchPeer::ALPHACODE)) {
            $modifiedColumns[':p' . $index++]  = '`AlphaCode`';
        }
        if ($this->isColumnModified(IcescatchPeer::AREA)) {
            $modifiedColumns[':p' . $index++]  = '`Area`';
        }
        if ($this->isColumnModified(IcescatchPeer::AREA2)) {
            $modifiedColumns[':p' . $index++]  = '`Area2`';
        }
        if ($this->isColumnModified(IcescatchPeer::1973)) {
            $modifiedColumns[':p' . $index++]  = '`1973`';
        }
        if ($this->isColumnModified(IcescatchPeer::1974)) {
            $modifiedColumns[':p' . $index++]  = '`1974`';
        }
        if ($this->isColumnModified(IcescatchPeer::1975)) {
            $modifiedColumns[':p' . $index++]  = '`1975`';
        }
        if ($this->isColumnModified(IcescatchPeer::1976)) {
            $modifiedColumns[':p' . $index++]  = '`1976`';
        }
        if ($this->isColumnModified(IcescatchPeer::1977)) {
            $modifiedColumns[':p' . $index++]  = '`1977`';
        }
        if ($this->isColumnModified(IcescatchPeer::1978)) {
            $modifiedColumns[':p' . $index++]  = '`1978`';
        }
        if ($this->isColumnModified(IcescatchPeer::1979)) {
            $modifiedColumns[':p' . $index++]  = '`1979`';
        }
        if ($this->isColumnModified(IcescatchPeer::1980)) {
            $modifiedColumns[':p' . $index++]  = '`1980`';
        }
        if ($this->isColumnModified(IcescatchPeer::1981)) {
            $modifiedColumns[':p' . $index++]  = '`1981`';
        }
        if ($this->isColumnModified(IcescatchPeer::1982)) {
            $modifiedColumns[':p' . $index++]  = '`1982`';
        }
        if ($this->isColumnModified(IcescatchPeer::1983)) {
            $modifiedColumns[':p' . $index++]  = '`1983`';
        }
        if ($this->isColumnModified(IcescatchPeer::1984)) {
            $modifiedColumns[':p' . $index++]  = '`1984`';
        }
        if ($this->isColumnModified(IcescatchPeer::1985)) {
            $modifiedColumns[':p' . $index++]  = '`1985`';
        }
        if ($this->isColumnModified(IcescatchPeer::1986)) {
            $modifiedColumns[':p' . $index++]  = '`1986`';
        }
        if ($this->isColumnModified(IcescatchPeer::1987)) {
            $modifiedColumns[':p' . $index++]  = '`1987`';
        }
        if ($this->isColumnModified(IcescatchPeer::1988)) {
            $modifiedColumns[':p' . $index++]  = '`1988`';
        }
        if ($this->isColumnModified(IcescatchPeer::1989)) {
            $modifiedColumns[':p' . $index++]  = '`1989`';
        }
        if ($this->isColumnModified(IcescatchPeer::1990)) {
            $modifiedColumns[':p' . $index++]  = '`1990`';
        }
        if ($this->isColumnModified(IcescatchPeer::1991)) {
            $modifiedColumns[':p' . $index++]  = '`1991`';
        }
        if ($this->isColumnModified(IcescatchPeer::1992)) {
            $modifiedColumns[':p' . $index++]  = '`1992`';
        }
        if ($this->isColumnModified(IcescatchPeer::1993)) {
            $modifiedColumns[':p' . $index++]  = '`1993`';
        }
        if ($this->isColumnModified(IcescatchPeer::1994)) {
            $modifiedColumns[':p' . $index++]  = '`1994`';
        }
        if ($this->isColumnModified(IcescatchPeer::1995)) {
            $modifiedColumns[':p' . $index++]  = '`1995`';
        }
        if ($this->isColumnModified(IcescatchPeer::1996)) {
            $modifiedColumns[':p' . $index++]  = '`1996`';
        }
        if ($this->isColumnModified(IcescatchPeer::1997)) {
            $modifiedColumns[':p' . $index++]  = '`1997`';
        }
        if ($this->isColumnModified(IcescatchPeer::1998)) {
            $modifiedColumns[':p' . $index++]  = '`1998`';
        }
        if ($this->isColumnModified(IcescatchPeer::1999)) {
            $modifiedColumns[':p' . $index++]  = '`1999`';
        }
        if ($this->isColumnModified(IcescatchPeer::2000)) {
            $modifiedColumns[':p' . $index++]  = '`2000`';
        }
        if ($this->isColumnModified(IcescatchPeer::2001)) {
            $modifiedColumns[':p' . $index++]  = '`2001`';
        }
        if ($this->isColumnModified(IcescatchPeer::2002)) {
            $modifiedColumns[':p' . $index++]  = '`2002`';
        }
        if ($this->isColumnModified(IcescatchPeer::2003)) {
            $modifiedColumns[':p' . $index++]  = '`2003`';
        }
        if ($this->isColumnModified(IcescatchPeer::2004)) {
            $modifiedColumns[':p' . $index++]  = '`2004`';
        }
        if ($this->isColumnModified(IcescatchPeer::2005)) {
            $modifiedColumns[':p' . $index++]  = '`2005`';
        }
        if ($this->isColumnModified(IcescatchPeer::2006)) {
            $modifiedColumns[':p' . $index++]  = '`2006`';
        }
        if ($this->isColumnModified(IcescatchPeer::2007)) {
            $modifiedColumns[':p' . $index++]  = '`2007`';
        }
        if ($this->isColumnModified(IcescatchPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `icescatch` (%s) VALUES (%s)',
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
                    case '`Specode`':
                        $stmt->bindValue($identifier, $this->specode, PDO::PARAM_STR);
                        break;
                    case '`Areacode`':
                        $stmt->bindValue($identifier, $this->areacode, PDO::PARAM_INT);
                        break;
                    case '`Country`':
                        $stmt->bindValue($identifier, $this->country, PDO::PARAM_STR);
                        break;
                    case '`CountryCode`':
                        $stmt->bindValue($identifier, $this->countrycode, PDO::PARAM_STR);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`Species`':
                        $stmt->bindValue($identifier, $this->species, PDO::PARAM_STR);
                        break;
                    case '`AlphaCode`':
                        $stmt->bindValue($identifier, $this->alphacode, PDO::PARAM_STR);
                        break;
                    case '`Area`':
                        $stmt->bindValue($identifier, $this->area, PDO::PARAM_STR);
                        break;
                    case '`Area2`':
                        $stmt->bindValue($identifier, $this->area2, PDO::PARAM_STR);
                        break;
                    case '`1973`':
                        $stmt->bindValue($identifier, $this->1973, PDO::PARAM_STR);
                        break;
                    case '`1974`':
                        $stmt->bindValue($identifier, $this->1974, PDO::PARAM_STR);
                        break;
                    case '`1975`':
                        $stmt->bindValue($identifier, $this->1975, PDO::PARAM_STR);
                        break;
                    case '`1976`':
                        $stmt->bindValue($identifier, $this->1976, PDO::PARAM_STR);
                        break;
                    case '`1977`':
                        $stmt->bindValue($identifier, $this->1977, PDO::PARAM_STR);
                        break;
                    case '`1978`':
                        $stmt->bindValue($identifier, $this->1978, PDO::PARAM_STR);
                        break;
                    case '`1979`':
                        $stmt->bindValue($identifier, $this->1979, PDO::PARAM_STR);
                        break;
                    case '`1980`':
                        $stmt->bindValue($identifier, $this->1980, PDO::PARAM_STR);
                        break;
                    case '`1981`':
                        $stmt->bindValue($identifier, $this->1981, PDO::PARAM_STR);
                        break;
                    case '`1982`':
                        $stmt->bindValue($identifier, $this->1982, PDO::PARAM_STR);
                        break;
                    case '`1983`':
                        $stmt->bindValue($identifier, $this->1983, PDO::PARAM_STR);
                        break;
                    case '`1984`':
                        $stmt->bindValue($identifier, $this->1984, PDO::PARAM_STR);
                        break;
                    case '`1985`':
                        $stmt->bindValue($identifier, $this->1985, PDO::PARAM_STR);
                        break;
                    case '`1986`':
                        $stmt->bindValue($identifier, $this->1986, PDO::PARAM_STR);
                        break;
                    case '`1987`':
                        $stmt->bindValue($identifier, $this->1987, PDO::PARAM_STR);
                        break;
                    case '`1988`':
                        $stmt->bindValue($identifier, $this->1988, PDO::PARAM_STR);
                        break;
                    case '`1989`':
                        $stmt->bindValue($identifier, $this->1989, PDO::PARAM_STR);
                        break;
                    case '`1990`':
                        $stmt->bindValue($identifier, $this->1990, PDO::PARAM_STR);
                        break;
                    case '`1991`':
                        $stmt->bindValue($identifier, $this->1991, PDO::PARAM_STR);
                        break;
                    case '`1992`':
                        $stmt->bindValue($identifier, $this->1992, PDO::PARAM_STR);
                        break;
                    case '`1993`':
                        $stmt->bindValue($identifier, $this->1993, PDO::PARAM_STR);
                        break;
                    case '`1994`':
                        $stmt->bindValue($identifier, $this->1994, PDO::PARAM_STR);
                        break;
                    case '`1995`':
                        $stmt->bindValue($identifier, $this->1995, PDO::PARAM_STR);
                        break;
                    case '`1996`':
                        $stmt->bindValue($identifier, $this->1996, PDO::PARAM_STR);
                        break;
                    case '`1997`':
                        $stmt->bindValue($identifier, $this->1997, PDO::PARAM_STR);
                        break;
                    case '`1998`':
                        $stmt->bindValue($identifier, $this->1998, PDO::PARAM_STR);
                        break;
                    case '`1999`':
                        $stmt->bindValue($identifier, $this->1999, PDO::PARAM_STR);
                        break;
                    case '`2000`':
                        $stmt->bindValue($identifier, $this->2000, PDO::PARAM_STR);
                        break;
                    case '`2001`':
                        $stmt->bindValue($identifier, $this->2001, PDO::PARAM_STR);
                        break;
                    case '`2002`':
                        $stmt->bindValue($identifier, $this->2002, PDO::PARAM_STR);
                        break;
                    case '`2003`':
                        $stmt->bindValue($identifier, $this->2003, PDO::PARAM_STR);
                        break;
                    case '`2004`':
                        $stmt->bindValue($identifier, $this->2004, PDO::PARAM_STR);
                        break;
                    case '`2005`':
                        $stmt->bindValue($identifier, $this->2005, PDO::PARAM_STR);
                        break;
                    case '`2006`':
                        $stmt->bindValue($identifier, $this->2006, PDO::PARAM_STR);
                        break;
                    case '`2007`':
                        $stmt->bindValue($identifier, $this->2007, PDO::PARAM_STR);
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


            if (($retval = IcescatchPeer::doValidate($this, $columns)) !== true) {
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
        $pos = IcescatchPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSpecode();
                break;
            case 2:
                return $this->getAreacode();
                break;
            case 3:
                return $this->getCountry();
                break;
            case 4:
                return $this->getCountrycode();
                break;
            case 5:
                return $this->getCCode();
                break;
            case 6:
                return $this->getSpecies();
                break;
            case 7:
                return $this->getAlphacode();
                break;
            case 8:
                return $this->getArea();
                break;
            case 9:
                return $this->getArea2();
                break;
            case 10:
                return $this->get1973();
                break;
            case 11:
                return $this->get1974();
                break;
            case 12:
                return $this->get1975();
                break;
            case 13:
                return $this->get1976();
                break;
            case 14:
                return $this->get1977();
                break;
            case 15:
                return $this->get1978();
                break;
            case 16:
                return $this->get1979();
                break;
            case 17:
                return $this->get1980();
                break;
            case 18:
                return $this->get1981();
                break;
            case 19:
                return $this->get1982();
                break;
            case 20:
                return $this->get1983();
                break;
            case 21:
                return $this->get1984();
                break;
            case 22:
                return $this->get1985();
                break;
            case 23:
                return $this->get1986();
                break;
            case 24:
                return $this->get1987();
                break;
            case 25:
                return $this->get1988();
                break;
            case 26:
                return $this->get1989();
                break;
            case 27:
                return $this->get1990();
                break;
            case 28:
                return $this->get1991();
                break;
            case 29:
                return $this->get1992();
                break;
            case 30:
                return $this->get1993();
                break;
            case 31:
                return $this->get1994();
                break;
            case 32:
                return $this->get1995();
                break;
            case 33:
                return $this->get1996();
                break;
            case 34:
                return $this->get1997();
                break;
            case 35:
                return $this->get1998();
                break;
            case 36:
                return $this->get1999();
                break;
            case 37:
                return $this->get2000();
                break;
            case 38:
                return $this->get2001();
                break;
            case 39:
                return $this->get2002();
                break;
            case 40:
                return $this->get2003();
                break;
            case 41:
                return $this->get2004();
                break;
            case 42:
                return $this->get2005();
                break;
            case 43:
                return $this->get2006();
                break;
            case 44:
                return $this->get2007();
                break;
            case 45:
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
        if (isset($alreadyDumpedObjects['Icescatch'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Icescatch'][$this->getPrimaryKey()] = true;
        $keys = IcescatchPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getSpecode(),
            $keys[2] => $this->getAreacode(),
            $keys[3] => $this->getCountry(),
            $keys[4] => $this->getCountrycode(),
            $keys[5] => $this->getCCode(),
            $keys[6] => $this->getSpecies(),
            $keys[7] => $this->getAlphacode(),
            $keys[8] => $this->getArea(),
            $keys[9] => $this->getArea2(),
            $keys[10] => $this->get1973(),
            $keys[11] => $this->get1974(),
            $keys[12] => $this->get1975(),
            $keys[13] => $this->get1976(),
            $keys[14] => $this->get1977(),
            $keys[15] => $this->get1978(),
            $keys[16] => $this->get1979(),
            $keys[17] => $this->get1980(),
            $keys[18] => $this->get1981(),
            $keys[19] => $this->get1982(),
            $keys[20] => $this->get1983(),
            $keys[21] => $this->get1984(),
            $keys[22] => $this->get1985(),
            $keys[23] => $this->get1986(),
            $keys[24] => $this->get1987(),
            $keys[25] => $this->get1988(),
            $keys[26] => $this->get1989(),
            $keys[27] => $this->get1990(),
            $keys[28] => $this->get1991(),
            $keys[29] => $this->get1992(),
            $keys[30] => $this->get1993(),
            $keys[31] => $this->get1994(),
            $keys[32] => $this->get1995(),
            $keys[33] => $this->get1996(),
            $keys[34] => $this->get1997(),
            $keys[35] => $this->get1998(),
            $keys[36] => $this->get1999(),
            $keys[37] => $this->get2000(),
            $keys[38] => $this->get2001(),
            $keys[39] => $this->get2002(),
            $keys[40] => $this->get2003(),
            $keys[41] => $this->get2004(),
            $keys[42] => $this->get2005(),
            $keys[43] => $this->get2006(),
            $keys[44] => $this->get2007(),
            $keys[45] => $this->getTs(),
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
        $pos = IcescatchPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSpecode($value);
                break;
            case 2:
                $this->setAreacode($value);
                break;
            case 3:
                $this->setCountry($value);
                break;
            case 4:
                $this->setCountrycode($value);
                break;
            case 5:
                $this->setCCode($value);
                break;
            case 6:
                $this->setSpecies($value);
                break;
            case 7:
                $this->setAlphacode($value);
                break;
            case 8:
                $this->setArea($value);
                break;
            case 9:
                $this->setArea2($value);
                break;
            case 10:
                $this->set1973($value);
                break;
            case 11:
                $this->set1974($value);
                break;
            case 12:
                $this->set1975($value);
                break;
            case 13:
                $this->set1976($value);
                break;
            case 14:
                $this->set1977($value);
                break;
            case 15:
                $this->set1978($value);
                break;
            case 16:
                $this->set1979($value);
                break;
            case 17:
                $this->set1980($value);
                break;
            case 18:
                $this->set1981($value);
                break;
            case 19:
                $this->set1982($value);
                break;
            case 20:
                $this->set1983($value);
                break;
            case 21:
                $this->set1984($value);
                break;
            case 22:
                $this->set1985($value);
                break;
            case 23:
                $this->set1986($value);
                break;
            case 24:
                $this->set1987($value);
                break;
            case 25:
                $this->set1988($value);
                break;
            case 26:
                $this->set1989($value);
                break;
            case 27:
                $this->set1990($value);
                break;
            case 28:
                $this->set1991($value);
                break;
            case 29:
                $this->set1992($value);
                break;
            case 30:
                $this->set1993($value);
                break;
            case 31:
                $this->set1994($value);
                break;
            case 32:
                $this->set1995($value);
                break;
            case 33:
                $this->set1996($value);
                break;
            case 34:
                $this->set1997($value);
                break;
            case 35:
                $this->set1998($value);
                break;
            case 36:
                $this->set1999($value);
                break;
            case 37:
                $this->set2000($value);
                break;
            case 38:
                $this->set2001($value);
                break;
            case 39:
                $this->set2002($value);
                break;
            case 40:
                $this->set2003($value);
                break;
            case 41:
                $this->set2004($value);
                break;
            case 42:
                $this->set2005($value);
                break;
            case 43:
                $this->set2006($value);
                break;
            case 44:
                $this->set2007($value);
                break;
            case 45:
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
        $keys = IcescatchPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSpecode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAreacode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCountry($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCountrycode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCCode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSpecies($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setAlphacode($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setArea($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setArea2($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->set1973($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->set1974($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->set1975($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->set1976($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->set1977($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->set1978($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->set1979($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->set1980($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->set1981($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->set1982($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->set1983($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->set1984($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->set1985($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->set1986($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->set1987($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->set1988($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->set1989($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->set1990($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->set1991($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->set1992($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->set1993($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->set1994($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->set1995($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->set1996($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->set1997($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->set1998($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->set1999($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->set2000($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->set2001($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->set2002($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->set2003($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->set2004($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->set2005($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->set2006($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->set2007($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setTs($arr[$keys[45]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(IcescatchPeer::DATABASE_NAME);

        if ($this->isColumnModified(IcescatchPeer::AUTOCTR)) $criteria->add(IcescatchPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(IcescatchPeer::SPECODE)) $criteria->add(IcescatchPeer::SPECODE, $this->specode);
        if ($this->isColumnModified(IcescatchPeer::AREACODE)) $criteria->add(IcescatchPeer::AREACODE, $this->areacode);
        if ($this->isColumnModified(IcescatchPeer::COUNTRY)) $criteria->add(IcescatchPeer::COUNTRY, $this->country);
        if ($this->isColumnModified(IcescatchPeer::COUNTRYCODE)) $criteria->add(IcescatchPeer::COUNTRYCODE, $this->countrycode);
        if ($this->isColumnModified(IcescatchPeer::C_CODE)) $criteria->add(IcescatchPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(IcescatchPeer::SPECIES)) $criteria->add(IcescatchPeer::SPECIES, $this->species);
        if ($this->isColumnModified(IcescatchPeer::ALPHACODE)) $criteria->add(IcescatchPeer::ALPHACODE, $this->alphacode);
        if ($this->isColumnModified(IcescatchPeer::AREA)) $criteria->add(IcescatchPeer::AREA, $this->area);
        if ($this->isColumnModified(IcescatchPeer::AREA2)) $criteria->add(IcescatchPeer::AREA2, $this->area2);
        if ($this->isColumnModified(IcescatchPeer::1973)) $criteria->add(IcescatchPeer::1973, $this->1973);
        if ($this->isColumnModified(IcescatchPeer::1974)) $criteria->add(IcescatchPeer::1974, $this->1974);
        if ($this->isColumnModified(IcescatchPeer::1975)) $criteria->add(IcescatchPeer::1975, $this->1975);
        if ($this->isColumnModified(IcescatchPeer::1976)) $criteria->add(IcescatchPeer::1976, $this->1976);
        if ($this->isColumnModified(IcescatchPeer::1977)) $criteria->add(IcescatchPeer::1977, $this->1977);
        if ($this->isColumnModified(IcescatchPeer::1978)) $criteria->add(IcescatchPeer::1978, $this->1978);
        if ($this->isColumnModified(IcescatchPeer::1979)) $criteria->add(IcescatchPeer::1979, $this->1979);
        if ($this->isColumnModified(IcescatchPeer::1980)) $criteria->add(IcescatchPeer::1980, $this->1980);
        if ($this->isColumnModified(IcescatchPeer::1981)) $criteria->add(IcescatchPeer::1981, $this->1981);
        if ($this->isColumnModified(IcescatchPeer::1982)) $criteria->add(IcescatchPeer::1982, $this->1982);
        if ($this->isColumnModified(IcescatchPeer::1983)) $criteria->add(IcescatchPeer::1983, $this->1983);
        if ($this->isColumnModified(IcescatchPeer::1984)) $criteria->add(IcescatchPeer::1984, $this->1984);
        if ($this->isColumnModified(IcescatchPeer::1985)) $criteria->add(IcescatchPeer::1985, $this->1985);
        if ($this->isColumnModified(IcescatchPeer::1986)) $criteria->add(IcescatchPeer::1986, $this->1986);
        if ($this->isColumnModified(IcescatchPeer::1987)) $criteria->add(IcescatchPeer::1987, $this->1987);
        if ($this->isColumnModified(IcescatchPeer::1988)) $criteria->add(IcescatchPeer::1988, $this->1988);
        if ($this->isColumnModified(IcescatchPeer::1989)) $criteria->add(IcescatchPeer::1989, $this->1989);
        if ($this->isColumnModified(IcescatchPeer::1990)) $criteria->add(IcescatchPeer::1990, $this->1990);
        if ($this->isColumnModified(IcescatchPeer::1991)) $criteria->add(IcescatchPeer::1991, $this->1991);
        if ($this->isColumnModified(IcescatchPeer::1992)) $criteria->add(IcescatchPeer::1992, $this->1992);
        if ($this->isColumnModified(IcescatchPeer::1993)) $criteria->add(IcescatchPeer::1993, $this->1993);
        if ($this->isColumnModified(IcescatchPeer::1994)) $criteria->add(IcescatchPeer::1994, $this->1994);
        if ($this->isColumnModified(IcescatchPeer::1995)) $criteria->add(IcescatchPeer::1995, $this->1995);
        if ($this->isColumnModified(IcescatchPeer::1996)) $criteria->add(IcescatchPeer::1996, $this->1996);
        if ($this->isColumnModified(IcescatchPeer::1997)) $criteria->add(IcescatchPeer::1997, $this->1997);
        if ($this->isColumnModified(IcescatchPeer::1998)) $criteria->add(IcescatchPeer::1998, $this->1998);
        if ($this->isColumnModified(IcescatchPeer::1999)) $criteria->add(IcescatchPeer::1999, $this->1999);
        if ($this->isColumnModified(IcescatchPeer::2000)) $criteria->add(IcescatchPeer::2000, $this->2000);
        if ($this->isColumnModified(IcescatchPeer::2001)) $criteria->add(IcescatchPeer::2001, $this->2001);
        if ($this->isColumnModified(IcescatchPeer::2002)) $criteria->add(IcescatchPeer::2002, $this->2002);
        if ($this->isColumnModified(IcescatchPeer::2003)) $criteria->add(IcescatchPeer::2003, $this->2003);
        if ($this->isColumnModified(IcescatchPeer::2004)) $criteria->add(IcescatchPeer::2004, $this->2004);
        if ($this->isColumnModified(IcescatchPeer::2005)) $criteria->add(IcescatchPeer::2005, $this->2005);
        if ($this->isColumnModified(IcescatchPeer::2006)) $criteria->add(IcescatchPeer::2006, $this->2006);
        if ($this->isColumnModified(IcescatchPeer::2007)) $criteria->add(IcescatchPeer::2007, $this->2007);
        if ($this->isColumnModified(IcescatchPeer::TS)) $criteria->add(IcescatchPeer::TS, $this->ts);

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
        $criteria = new Criteria(IcescatchPeer::DATABASE_NAME);
        $criteria->add(IcescatchPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of Icescatch (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSpecode($this->getSpecode());
        $copyObj->setAreacode($this->getAreacode());
        $copyObj->setCountry($this->getCountry());
        $copyObj->setCountrycode($this->getCountrycode());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setSpecies($this->getSpecies());
        $copyObj->setAlphacode($this->getAlphacode());
        $copyObj->setArea($this->getArea());
        $copyObj->setArea2($this->getArea2());
        $copyObj->set1973($this->get1973());
        $copyObj->set1974($this->get1974());
        $copyObj->set1975($this->get1975());
        $copyObj->set1976($this->get1976());
        $copyObj->set1977($this->get1977());
        $copyObj->set1978($this->get1978());
        $copyObj->set1979($this->get1979());
        $copyObj->set1980($this->get1980());
        $copyObj->set1981($this->get1981());
        $copyObj->set1982($this->get1982());
        $copyObj->set1983($this->get1983());
        $copyObj->set1984($this->get1984());
        $copyObj->set1985($this->get1985());
        $copyObj->set1986($this->get1986());
        $copyObj->set1987($this->get1987());
        $copyObj->set1988($this->get1988());
        $copyObj->set1989($this->get1989());
        $copyObj->set1990($this->get1990());
        $copyObj->set1991($this->get1991());
        $copyObj->set1992($this->get1992());
        $copyObj->set1993($this->get1993());
        $copyObj->set1994($this->get1994());
        $copyObj->set1995($this->get1995());
        $copyObj->set1996($this->get1996());
        $copyObj->set1997($this->get1997());
        $copyObj->set1998($this->get1998());
        $copyObj->set1999($this->get1999());
        $copyObj->set2000($this->get2000());
        $copyObj->set2001($this->get2001());
        $copyObj->set2002($this->get2002());
        $copyObj->set2003($this->get2003());
        $copyObj->set2004($this->get2004());
        $copyObj->set2005($this->get2005());
        $copyObj->set2006($this->get2006());
        $copyObj->set2007($this->get2007());
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
     * @return Icescatch Clone of current object.
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
     * @return IcescatchPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new IcescatchPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->specode = null;
        $this->areacode = null;
        $this->country = null;
        $this->countrycode = null;
        $this->c_code = null;
        $this->species = null;
        $this->alphacode = null;
        $this->area = null;
        $this->area2 = null;
        $this->1973 = null;
        $this->1974 = null;
        $this->1975 = null;
        $this->1976 = null;
        $this->1977 = null;
        $this->1978 = null;
        $this->1979 = null;
        $this->1980 = null;
        $this->1981 = null;
        $this->1982 = null;
        $this->1983 = null;
        $this->1984 = null;
        $this->1985 = null;
        $this->1986 = null;
        $this->1987 = null;
        $this->1988 = null;
        $this->1989 = null;
        $this->1990 = null;
        $this->1991 = null;
        $this->1992 = null;
        $this->1993 = null;
        $this->1994 = null;
        $this->1995 = null;
        $this->1996 = null;
        $this->1997 = null;
        $this->1998 = null;
        $this->1999 = null;
        $this->2000 = null;
        $this->2001 = null;
        $this->2002 = null;
        $this->2003 = null;
        $this->2004 = null;
        $this->2005 = null;
        $this->2006 = null;
        $this->2007 = null;
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
        return (string) $this->exportTo(IcescatchPeer::DEFAULT_STRING_FORMAT);
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
