<?php


/**
 * Base class that represents a row from the 'museum' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMuseum extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'MuseumPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        MuseumPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the occurrencerefno field.
     * @var        int
     */
    protected $occurrencerefno;

    /**
     * The value for the museum field.
     * @var        string
     */
    protected $museum;

    /**
     * The value for the acronym field.
     * @var        string
     */
    protected $acronym;

    /**
     * The value for the address field.
     * @var        string
     */
    protected $address;

    /**
     * The value for the city field.
     * @var        string
     */
    protected $city;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the logourl field.
     * @var        string
     */
    protected $logourl;

    /**
     * The value for the online field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $online;

    /**
     * The value for the remarks field.
     * @var        string
     */
    protected $remarks;

    /**
     * The value for the homepageurl field.
     * @var        string
     */
    protected $homepageurl;

    /**
     * The value for the onlinedatabase field.
     * @var        string
     */
    protected $onlinedatabase;

    /**
     * The value for the cataloguenumprefix1 field.
     * @var        string
     */
    protected $cataloguenumprefix1;

    /**
     * The value for the cataloguenumberprefix2 field.
     * @var        string
     */
    protected $cataloguenumberprefix2;

    /**
     * The value for the cataloguenumberprefix3 field.
     * @var        string
     */
    protected $cataloguenumberprefix3;

    /**
     * The value for the contactperson1 field.
     * @var        string
     */
    protected $contactperson1;

    /**
     * The value for the contactperson1email field.
     * @var        string
     */
    protected $contactperson1email;

    /**
     * The value for the contactperson2 field.
     * @var        string
     */
    protected $contactperson2;

    /**
     * The value for the contactperson2email field.
     * @var        string
     */
    protected $contactperson2email;

    /**
     * The value for the firstversiondate field.
     * @var        string
     */
    protected $firstversiondate;

    /**
     * The value for the versiondate field.
     * @var        string
     */
    protected $versiondate;

    /**
     * The value for the validity field.
     * @var        string
     */
    protected $validity;

    /**
     * The value for the lastupdatedate field.
     * @var        string
     */
    protected $lastupdatedate;

    /**
     * The value for the databaseformat field.
     * @var        string
     */
    protected $databaseformat;

    /**
     * The value for the accessions field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $accessions;

    /**
     * The value for the species field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $species;

    /**
     * The value for the families field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $families;

    /**
     * The value for the countries field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $countries;

    /**
     * The value for the topcountry field.
     * @var        string
     */
    protected $topcountry;

    /**
     * The value for the topcountryrecords field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $topcountryrecords;

    /**
     * The value for the coordinates field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $coordinates;

    /**
     * The value for the percentcoordinates field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $percentcoordinates;

    /**
     * The value for the dateoldestrecord field.
     * @var        string
     */
    protected $dateoldestrecord;

    /**
     * The value for the datemostrecentrecord field.
     * @var        string
     */
    protected $datemostrecentrecord;

    /**
     * The value for the yearoldestrecord field.
     * @var        string
     */
    protected $yearoldestrecord;

    /**
     * The value for the yearmostrecentrecord field.
     * @var        string
     */
    protected $yearmostrecentrecord;

    /**
     * The value for the entered field.
     * Note: this column has a database default value of: 0
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
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $modified;

    /**
     * The value for the datemodified field.
     * @var        string
     */
    protected $datemodified;

    /**
     * The value for the validnames field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $validnames;

    /**
     * The value for the percentvalid field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $percentvalid;

    /**
     * The value for the synonyms field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $synonyms;

    /**
     * The value for the percentsynonym field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $percentsynonym;

    /**
     * The value for the non-matching field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $non-matching;

    /**
     * The value for the percentnon-matching field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $percentnon-matching;

    /**
     * The value for the ambiguousname field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $ambiguousname;

    /**
     * The value for the percentambiguous field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $percentambiguous;

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
        $this->online = 0;
        $this->accessions = 0;
        $this->species = 0;
        $this->families = 0;
        $this->countries = 0;
        $this->topcountryrecords = 0;
        $this->coordinates = 0;
        $this->percentcoordinates = 0;
        $this->entered = 0;
        $this->modified = 0;
        $this->validnames = 0;
        $this->percentvalid = 0;
        $this->synonyms = 0;
        $this->percentsynonym = 0;
        $this->non-matching = 0;
        $this->percentnon-matching = 0;
        $this->ambiguousname = 0;
        $this->percentambiguous = 0;
    }

    /**
     * Initializes internal state of BaseMuseum object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [occurrencerefno] column value.
     *
     * @return int
     */
    public function getOccurrencerefno()
    {

        return $this->occurrencerefno;
    }

    /**
     * Get the [museum] column value.
     *
     * @return string
     */
    public function getMuseum()
    {

        return $this->museum;
    }

    /**
     * Get the [acronym] column value.
     *
     * @return string
     */
    public function getAcronym()
    {

        return $this->acronym;
    }

    /**
     * Get the [address] column value.
     *
     * @return string
     */
    public function getAddress()
    {

        return $this->address;
    }

    /**
     * Get the [city] column value.
     *
     * @return string
     */
    public function getCity()
    {

        return $this->city;
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
     * Get the [logourl] column value.
     *
     * @return string
     */
    public function getLogourl()
    {

        return $this->logourl;
    }

    /**
     * Get the [online] column value.
     *
     * @return int
     */
    public function getOnline()
    {

        return $this->online;
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
     * Get the [homepageurl] column value.
     *
     * @return string
     */
    public function getHomepageurl()
    {

        return $this->homepageurl;
    }

    /**
     * Get the [onlinedatabase] column value.
     *
     * @return string
     */
    public function getOnlinedatabase()
    {

        return $this->onlinedatabase;
    }

    /**
     * Get the [cataloguenumprefix1] column value.
     *
     * @return string
     */
    public function getCataloguenumprefix1()
    {

        return $this->cataloguenumprefix1;
    }

    /**
     * Get the [cataloguenumberprefix2] column value.
     *
     * @return string
     */
    public function getCataloguenumberprefix2()
    {

        return $this->cataloguenumberprefix2;
    }

    /**
     * Get the [cataloguenumberprefix3] column value.
     *
     * @return string
     */
    public function getCataloguenumberprefix3()
    {

        return $this->cataloguenumberprefix3;
    }

    /**
     * Get the [contactperson1] column value.
     *
     * @return string
     */
    public function getContactperson1()
    {

        return $this->contactperson1;
    }

    /**
     * Get the [contactperson1email] column value.
     *
     * @return string
     */
    public function getContactperson1email()
    {

        return $this->contactperson1email;
    }

    /**
     * Get the [contactperson2] column value.
     *
     * @return string
     */
    public function getContactperson2()
    {

        return $this->contactperson2;
    }

    /**
     * Get the [contactperson2email] column value.
     *
     * @return string
     */
    public function getContactperson2email()
    {

        return $this->contactperson2email;
    }

    /**
     * Get the [optionally formatted] temporal [firstversiondate] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFirstversiondate($format = 'Y-m-d H:i:s')
    {
        if ($this->firstversiondate === null) {
            return null;
        }

        if ($this->firstversiondate === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->firstversiondate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->firstversiondate, true), $x);
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
     * Get the [optionally formatted] temporal [versiondate] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getVersiondate($format = 'Y-m-d H:i:s')
    {
        if ($this->versiondate === null) {
            return null;
        }

        if ($this->versiondate === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->versiondate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->versiondate, true), $x);
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
     * Get the [validity] column value.
     *
     * @return string
     */
    public function getValidity()
    {

        return $this->validity;
    }

    /**
     * Get the [optionally formatted] temporal [lastupdatedate] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getLastupdatedate($format = 'Y-m-d H:i:s')
    {
        if ($this->lastupdatedate === null) {
            return null;
        }

        if ($this->lastupdatedate === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->lastupdatedate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->lastupdatedate, true), $x);
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
     * Get the [databaseformat] column value.
     *
     * @return string
     */
    public function getDatabaseformat()
    {

        return $this->databaseformat;
    }

    /**
     * Get the [accessions] column value.
     *
     * @return int
     */
    public function getAccessions()
    {

        return $this->accessions;
    }

    /**
     * Get the [species] column value.
     *
     * @return int
     */
    public function getSpecies()
    {

        return $this->species;
    }

    /**
     * Get the [families] column value.
     *
     * @return int
     */
    public function getFamilies()
    {

        return $this->families;
    }

    /**
     * Get the [countries] column value.
     *
     * @return int
     */
    public function getCountries()
    {

        return $this->countries;
    }

    /**
     * Get the [topcountry] column value.
     *
     * @return string
     */
    public function getTopcountry()
    {

        return $this->topcountry;
    }

    /**
     * Get the [topcountryrecords] column value.
     *
     * @return int
     */
    public function getTopcountryrecords()
    {

        return $this->topcountryrecords;
    }

    /**
     * Get the [coordinates] column value.
     *
     * @return int
     */
    public function getCoordinates()
    {

        return $this->coordinates;
    }

    /**
     * Get the [percentcoordinates] column value.
     *
     * @return int
     */
    public function getPercentcoordinates()
    {

        return $this->percentcoordinates;
    }

    /**
     * Get the [dateoldestrecord] column value.
     *
     * @return string
     */
    public function getDateoldestrecord()
    {

        return $this->dateoldestrecord;
    }

    /**
     * Get the [datemostrecentrecord] column value.
     *
     * @return string
     */
    public function getDatemostrecentrecord()
    {

        return $this->datemostrecentrecord;
    }

    /**
     * Get the [yearoldestrecord] column value.
     *
     * @return string
     */
    public function getYearoldestrecord()
    {

        return $this->yearoldestrecord;
    }

    /**
     * Get the [yearmostrecentrecord] column value.
     *
     * @return string
     */
    public function getYearmostrecentrecord()
    {

        return $this->yearmostrecentrecord;
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
     * Get the [validnames] column value.
     *
     * @return int
     */
    public function getValidnames()
    {

        return $this->validnames;
    }

    /**
     * Get the [percentvalid] column value.
     *
     * @return double
     */
    public function getPercentvalid()
    {

        return $this->percentvalid;
    }

    /**
     * Get the [synonyms] column value.
     *
     * @return int
     */
    public function getSynonyms()
    {

        return $this->synonyms;
    }

    /**
     * Get the [percentsynonym] column value.
     *
     * @return double
     */
    public function getPercentsynonym()
    {

        return $this->percentsynonym;
    }

    /**
     * Get the [non-matching] column value.
     *
     * @return int
     */
    public function getNonmatching()
    {

        return $this->non-matching;
    }

    /**
     * Get the [percentnon-matching] column value.
     *
     * @return double
     */
    public function getPercentnonmatching()
    {

        return $this->percentnon-matching;
    }

    /**
     * Get the [ambiguousname] column value.
     *
     * @return int
     */
    public function getAmbiguousname()
    {

        return $this->ambiguousname;
    }

    /**
     * Get the [percentambiguous] column value.
     *
     * @return double
     */
    public function getPercentambiguous()
    {

        return $this->percentambiguous;
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
     * Set the value of [occurrencerefno] column.
     *
     * @param  int $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setOccurrencerefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->occurrencerefno !== $v) {
            $this->occurrencerefno = $v;
            $this->modifiedColumns[] = MuseumPeer::OCCURRENCEREFNO;
        }


        return $this;
    } // setOccurrencerefno()

    /**
     * Set the value of [museum] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setMuseum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->museum !== $v) {
            $this->museum = $v;
            $this->modifiedColumns[] = MuseumPeer::MUSEUM;
        }


        return $this;
    } // setMuseum()

    /**
     * Set the value of [acronym] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setAcronym($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acronym !== $v) {
            $this->acronym = $v;
            $this->modifiedColumns[] = MuseumPeer::ACRONYM;
        }


        return $this;
    } // setAcronym()

    /**
     * Set the value of [address] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setAddress($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->address !== $v) {
            $this->address = $v;
            $this->modifiedColumns[] = MuseumPeer::ADDRESS;
        }


        return $this;
    } // setAddress()

    /**
     * Set the value of [city] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setCity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->city !== $v) {
            $this->city = $v;
            $this->modifiedColumns[] = MuseumPeer::CITY;
        }


        return $this;
    } // setCity()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = MuseumPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [logourl] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setLogourl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->logourl !== $v) {
            $this->logourl = $v;
            $this->modifiedColumns[] = MuseumPeer::LOGOURL;
        }


        return $this;
    } // setLogourl()

    /**
     * Set the value of [online] column.
     *
     * @param  int $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setOnline($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->online !== $v) {
            $this->online = $v;
            $this->modifiedColumns[] = MuseumPeer::ONLINE;
        }


        return $this;
    } // setOnline()

    /**
     * Set the value of [remarks] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[] = MuseumPeer::REMARKS;
        }


        return $this;
    } // setRemarks()

    /**
     * Set the value of [homepageurl] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setHomepageurl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->homepageurl !== $v) {
            $this->homepageurl = $v;
            $this->modifiedColumns[] = MuseumPeer::HOMEPAGEURL;
        }


        return $this;
    } // setHomepageurl()

    /**
     * Set the value of [onlinedatabase] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setOnlinedatabase($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->onlinedatabase !== $v) {
            $this->onlinedatabase = $v;
            $this->modifiedColumns[] = MuseumPeer::ONLINEDATABASE;
        }


        return $this;
    } // setOnlinedatabase()

    /**
     * Set the value of [cataloguenumprefix1] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setCataloguenumprefix1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cataloguenumprefix1 !== $v) {
            $this->cataloguenumprefix1 = $v;
            $this->modifiedColumns[] = MuseumPeer::CATALOGUENUMPREFIX1;
        }


        return $this;
    } // setCataloguenumprefix1()

    /**
     * Set the value of [cataloguenumberprefix2] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setCataloguenumberprefix2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cataloguenumberprefix2 !== $v) {
            $this->cataloguenumberprefix2 = $v;
            $this->modifiedColumns[] = MuseumPeer::CATALOGUENUMBERPREFIX2;
        }


        return $this;
    } // setCataloguenumberprefix2()

    /**
     * Set the value of [cataloguenumberprefix3] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setCataloguenumberprefix3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cataloguenumberprefix3 !== $v) {
            $this->cataloguenumberprefix3 = $v;
            $this->modifiedColumns[] = MuseumPeer::CATALOGUENUMBERPREFIX3;
        }


        return $this;
    } // setCataloguenumberprefix3()

    /**
     * Set the value of [contactperson1] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setContactperson1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->contactperson1 !== $v) {
            $this->contactperson1 = $v;
            $this->modifiedColumns[] = MuseumPeer::CONTACTPERSON1;
        }


        return $this;
    } // setContactperson1()

    /**
     * Set the value of [contactperson1email] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setContactperson1email($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->contactperson1email !== $v) {
            $this->contactperson1email = $v;
            $this->modifiedColumns[] = MuseumPeer::CONTACTPERSON1EMAIL;
        }


        return $this;
    } // setContactperson1email()

    /**
     * Set the value of [contactperson2] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setContactperson2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->contactperson2 !== $v) {
            $this->contactperson2 = $v;
            $this->modifiedColumns[] = MuseumPeer::CONTACTPERSON2;
        }


        return $this;
    } // setContactperson2()

    /**
     * Set the value of [contactperson2email] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setContactperson2email($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->contactperson2email !== $v) {
            $this->contactperson2email = $v;
            $this->modifiedColumns[] = MuseumPeer::CONTACTPERSON2EMAIL;
        }


        return $this;
    } // setContactperson2email()

    /**
     * Sets the value of [firstversiondate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Museum The current object (for fluent API support)
     */
    public function setFirstversiondate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->firstversiondate !== null || $dt !== null) {
            $currentDateAsString = ($this->firstversiondate !== null && $tmpDt = new DateTime($this->firstversiondate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->firstversiondate = $newDateAsString;
                $this->modifiedColumns[] = MuseumPeer::FIRSTVERSIONDATE;
            }
        } // if either are not null


        return $this;
    } // setFirstversiondate()

    /**
     * Sets the value of [versiondate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Museum The current object (for fluent API support)
     */
    public function setVersiondate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->versiondate !== null || $dt !== null) {
            $currentDateAsString = ($this->versiondate !== null && $tmpDt = new DateTime($this->versiondate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->versiondate = $newDateAsString;
                $this->modifiedColumns[] = MuseumPeer::VERSIONDATE;
            }
        } // if either are not null


        return $this;
    } // setVersiondate()

    /**
     * Set the value of [validity] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setValidity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->validity !== $v) {
            $this->validity = $v;
            $this->modifiedColumns[] = MuseumPeer::VALIDITY;
        }


        return $this;
    } // setValidity()

    /**
     * Sets the value of [lastupdatedate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Museum The current object (for fluent API support)
     */
    public function setLastupdatedate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lastupdatedate !== null || $dt !== null) {
            $currentDateAsString = ($this->lastupdatedate !== null && $tmpDt = new DateTime($this->lastupdatedate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->lastupdatedate = $newDateAsString;
                $this->modifiedColumns[] = MuseumPeer::LASTUPDATEDATE;
            }
        } // if either are not null


        return $this;
    } // setLastupdatedate()

    /**
     * Set the value of [databaseformat] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setDatabaseformat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->databaseformat !== $v) {
            $this->databaseformat = $v;
            $this->modifiedColumns[] = MuseumPeer::DATABASEFORMAT;
        }


        return $this;
    } // setDatabaseformat()

    /**
     * Set the value of [accessions] column.
     *
     * @param  int $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setAccessions($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->accessions !== $v) {
            $this->accessions = $v;
            $this->modifiedColumns[] = MuseumPeer::ACCESSIONS;
        }


        return $this;
    } // setAccessions()

    /**
     * Set the value of [species] column.
     *
     * @param  int $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setSpecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->species !== $v) {
            $this->species = $v;
            $this->modifiedColumns[] = MuseumPeer::SPECIES;
        }


        return $this;
    } // setSpecies()

    /**
     * Set the value of [families] column.
     *
     * @param  int $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setFamilies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->families !== $v) {
            $this->families = $v;
            $this->modifiedColumns[] = MuseumPeer::FAMILIES;
        }


        return $this;
    } // setFamilies()

    /**
     * Set the value of [countries] column.
     *
     * @param  int $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setCountries($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->countries !== $v) {
            $this->countries = $v;
            $this->modifiedColumns[] = MuseumPeer::COUNTRIES;
        }


        return $this;
    } // setCountries()

    /**
     * Set the value of [topcountry] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setTopcountry($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->topcountry !== $v) {
            $this->topcountry = $v;
            $this->modifiedColumns[] = MuseumPeer::TOPCOUNTRY;
        }


        return $this;
    } // setTopcountry()

    /**
     * Set the value of [topcountryrecords] column.
     *
     * @param  int $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setTopcountryrecords($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->topcountryrecords !== $v) {
            $this->topcountryrecords = $v;
            $this->modifiedColumns[] = MuseumPeer::TOPCOUNTRYRECORDS;
        }


        return $this;
    } // setTopcountryrecords()

    /**
     * Set the value of [coordinates] column.
     *
     * @param  int $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setCoordinates($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->coordinates !== $v) {
            $this->coordinates = $v;
            $this->modifiedColumns[] = MuseumPeer::COORDINATES;
        }


        return $this;
    } // setCoordinates()

    /**
     * Set the value of [percentcoordinates] column.
     *
     * @param  int $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setPercentcoordinates($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->percentcoordinates !== $v) {
            $this->percentcoordinates = $v;
            $this->modifiedColumns[] = MuseumPeer::PERCENTCOORDINATES;
        }


        return $this;
    } // setPercentcoordinates()

    /**
     * Set the value of [dateoldestrecord] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setDateoldestrecord($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dateoldestrecord !== $v) {
            $this->dateoldestrecord = $v;
            $this->modifiedColumns[] = MuseumPeer::DATEOLDESTRECORD;
        }


        return $this;
    } // setDateoldestrecord()

    /**
     * Set the value of [datemostrecentrecord] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setDatemostrecentrecord($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->datemostrecentrecord !== $v) {
            $this->datemostrecentrecord = $v;
            $this->modifiedColumns[] = MuseumPeer::DATEMOSTRECENTRECORD;
        }


        return $this;
    } // setDatemostrecentrecord()

    /**
     * Set the value of [yearoldestrecord] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setYearoldestrecord($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->yearoldestrecord !== $v) {
            $this->yearoldestrecord = $v;
            $this->modifiedColumns[] = MuseumPeer::YEAROLDESTRECORD;
        }


        return $this;
    } // setYearoldestrecord()

    /**
     * Set the value of [yearmostrecentrecord] column.
     *
     * @param  string $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setYearmostrecentrecord($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->yearmostrecentrecord !== $v) {
            $this->yearmostrecentrecord = $v;
            $this->modifiedColumns[] = MuseumPeer::YEARMOSTRECENTRECORD;
        }


        return $this;
    } // setYearmostrecentrecord()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = MuseumPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Museum The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = MuseumPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = MuseumPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Museum The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = MuseumPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [validnames] column.
     *
     * @param  int $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setValidnames($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->validnames !== $v) {
            $this->validnames = $v;
            $this->modifiedColumns[] = MuseumPeer::VALIDNAMES;
        }


        return $this;
    } // setValidnames()

    /**
     * Set the value of [percentvalid] column.
     *
     * @param  double $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setPercentvalid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->percentvalid !== $v) {
            $this->percentvalid = $v;
            $this->modifiedColumns[] = MuseumPeer::PERCENTVALID;
        }


        return $this;
    } // setPercentvalid()

    /**
     * Set the value of [synonyms] column.
     *
     * @param  int $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setSynonyms($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->synonyms !== $v) {
            $this->synonyms = $v;
            $this->modifiedColumns[] = MuseumPeer::SYNONYMS;
        }


        return $this;
    } // setSynonyms()

    /**
     * Set the value of [percentsynonym] column.
     *
     * @param  double $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setPercentsynonym($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->percentsynonym !== $v) {
            $this->percentsynonym = $v;
            $this->modifiedColumns[] = MuseumPeer::PERCENTSYNONYM;
        }


        return $this;
    } // setPercentsynonym()

    /**
     * Set the value of [non-matching] column.
     *
     * @param  int $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setNonmatching($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->non-matching !== $v) {
            $this->non-matching = $v;
            $this->modifiedColumns[] = MuseumPeer::NON-MATCHING;
        }


        return $this;
    } // setNonmatching()

    /**
     * Set the value of [percentnon-matching] column.
     *
     * @param  double $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setPercentnonmatching($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->percentnon-matching !== $v) {
            $this->percentnon-matching = $v;
            $this->modifiedColumns[] = MuseumPeer::PERCENTNON-MATCHING;
        }


        return $this;
    } // setPercentnonmatching()

    /**
     * Set the value of [ambiguousname] column.
     *
     * @param  int $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setAmbiguousname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ambiguousname !== $v) {
            $this->ambiguousname = $v;
            $this->modifiedColumns[] = MuseumPeer::AMBIGUOUSNAME;
        }


        return $this;
    } // setAmbiguousname()

    /**
     * Set the value of [percentambiguous] column.
     *
     * @param  double $v new value
     * @return Museum The current object (for fluent API support)
     */
    public function setPercentambiguous($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->percentambiguous !== $v) {
            $this->percentambiguous = $v;
            $this->modifiedColumns[] = MuseumPeer::PERCENTAMBIGUOUS;
        }


        return $this;
    } // setPercentambiguous()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Museum The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = MuseumPeer::TS;
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
            if ($this->online !== 0) {
                return false;
            }

            if ($this->accessions !== 0) {
                return false;
            }

            if ($this->species !== 0) {
                return false;
            }

            if ($this->families !== 0) {
                return false;
            }

            if ($this->countries !== 0) {
                return false;
            }

            if ($this->topcountryrecords !== 0) {
                return false;
            }

            if ($this->coordinates !== 0) {
                return false;
            }

            if ($this->percentcoordinates !== 0) {
                return false;
            }

            if ($this->entered !== 0) {
                return false;
            }

            if ($this->modified !== 0) {
                return false;
            }

            if ($this->validnames !== 0) {
                return false;
            }

            if ($this->percentvalid !== 0) {
                return false;
            }

            if ($this->synonyms !== 0) {
                return false;
            }

            if ($this->percentsynonym !== 0) {
                return false;
            }

            if ($this->non-matching !== 0) {
                return false;
            }

            if ($this->percentnon-matching !== 0) {
                return false;
            }

            if ($this->ambiguousname !== 0) {
                return false;
            }

            if ($this->percentambiguous !== 0) {
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

            $this->occurrencerefno = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->museum = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->acronym = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->address = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->city = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->c_code = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->logourl = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->online = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->remarks = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->homepageurl = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->onlinedatabase = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->cataloguenumprefix1 = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->cataloguenumberprefix2 = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->cataloguenumberprefix3 = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->contactperson1 = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->contactperson1email = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->contactperson2 = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->contactperson2email = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->firstversiondate = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->versiondate = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->validity = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->lastupdatedate = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->databaseformat = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->accessions = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->species = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->families = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->countries = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->topcountry = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->topcountryrecords = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->coordinates = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->percentcoordinates = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->dateoldestrecord = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->datemostrecentrecord = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->yearoldestrecord = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->yearmostrecentrecord = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->entered = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->dateentered = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->modified = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->datemodified = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->validnames = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->percentvalid = ($row[$startcol + 40] !== null) ? (double) $row[$startcol + 40] : null;
            $this->synonyms = ($row[$startcol + 41] !== null) ? (int) $row[$startcol + 41] : null;
            $this->percentsynonym = ($row[$startcol + 42] !== null) ? (double) $row[$startcol + 42] : null;
            $this->non-matching = ($row[$startcol + 43] !== null) ? (int) $row[$startcol + 43] : null;
            $this->percentnon-matching = ($row[$startcol + 44] !== null) ? (double) $row[$startcol + 44] : null;
            $this->ambiguousname = ($row[$startcol + 45] !== null) ? (int) $row[$startcol + 45] : null;
            $this->percentambiguous = ($row[$startcol + 46] !== null) ? (double) $row[$startcol + 46] : null;
            $this->ts = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 48; // 48 = MuseumPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Museum object", $e);
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
            $con = Propel::getConnection(MuseumPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = MuseumPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(MuseumPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = MuseumQuery::create()
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
            $con = Propel::getConnection(MuseumPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                MuseumPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(MuseumPeer::OCCURRENCEREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`OccurrenceRefNo`';
        }
        if ($this->isColumnModified(MuseumPeer::MUSEUM)) {
            $modifiedColumns[':p' . $index++]  = '`Museum`';
        }
        if ($this->isColumnModified(MuseumPeer::ACRONYM)) {
            $modifiedColumns[':p' . $index++]  = '`Acronym`';
        }
        if ($this->isColumnModified(MuseumPeer::ADDRESS)) {
            $modifiedColumns[':p' . $index++]  = '`Address`';
        }
        if ($this->isColumnModified(MuseumPeer::CITY)) {
            $modifiedColumns[':p' . $index++]  = '`City`';
        }
        if ($this->isColumnModified(MuseumPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_code`';
        }
        if ($this->isColumnModified(MuseumPeer::LOGOURL)) {
            $modifiedColumns[':p' . $index++]  = '`LogoURL`';
        }
        if ($this->isColumnModified(MuseumPeer::ONLINE)) {
            $modifiedColumns[':p' . $index++]  = '`Online`';
        }
        if ($this->isColumnModified(MuseumPeer::REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`Remarks`';
        }
        if ($this->isColumnModified(MuseumPeer::HOMEPAGEURL)) {
            $modifiedColumns[':p' . $index++]  = '`HomePageURL`';
        }
        if ($this->isColumnModified(MuseumPeer::ONLINEDATABASE)) {
            $modifiedColumns[':p' . $index++]  = '`OnlineDatabase`';
        }
        if ($this->isColumnModified(MuseumPeer::CATALOGUENUMPREFIX1)) {
            $modifiedColumns[':p' . $index++]  = '`CatalogueNumPrefix1`';
        }
        if ($this->isColumnModified(MuseumPeer::CATALOGUENUMBERPREFIX2)) {
            $modifiedColumns[':p' . $index++]  = '`CatalogueNumberPrefix2`';
        }
        if ($this->isColumnModified(MuseumPeer::CATALOGUENUMBERPREFIX3)) {
            $modifiedColumns[':p' . $index++]  = '`CatalogueNumberPrefix3`';
        }
        if ($this->isColumnModified(MuseumPeer::CONTACTPERSON1)) {
            $modifiedColumns[':p' . $index++]  = '`ContactPerson1`';
        }
        if ($this->isColumnModified(MuseumPeer::CONTACTPERSON1EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`ContactPerson1Email`';
        }
        if ($this->isColumnModified(MuseumPeer::CONTACTPERSON2)) {
            $modifiedColumns[':p' . $index++]  = '`ContactPerson2`';
        }
        if ($this->isColumnModified(MuseumPeer::CONTACTPERSON2EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`ContactPerson2Email`';
        }
        if ($this->isColumnModified(MuseumPeer::FIRSTVERSIONDATE)) {
            $modifiedColumns[':p' . $index++]  = '`FirstVersionDate`';
        }
        if ($this->isColumnModified(MuseumPeer::VERSIONDATE)) {
            $modifiedColumns[':p' . $index++]  = '`VersionDate`';
        }
        if ($this->isColumnModified(MuseumPeer::VALIDITY)) {
            $modifiedColumns[':p' . $index++]  = '`Validity`';
        }
        if ($this->isColumnModified(MuseumPeer::LASTUPDATEDATE)) {
            $modifiedColumns[':p' . $index++]  = '`LastUpdateDate`';
        }
        if ($this->isColumnModified(MuseumPeer::DATABASEFORMAT)) {
            $modifiedColumns[':p' . $index++]  = '`DatabaseFormat`';
        }
        if ($this->isColumnModified(MuseumPeer::ACCESSIONS)) {
            $modifiedColumns[':p' . $index++]  = '`Accessions`';
        }
        if ($this->isColumnModified(MuseumPeer::SPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`Species`';
        }
        if ($this->isColumnModified(MuseumPeer::FAMILIES)) {
            $modifiedColumns[':p' . $index++]  = '`Families`';
        }
        if ($this->isColumnModified(MuseumPeer::COUNTRIES)) {
            $modifiedColumns[':p' . $index++]  = '`Countries`';
        }
        if ($this->isColumnModified(MuseumPeer::TOPCOUNTRY)) {
            $modifiedColumns[':p' . $index++]  = '`TopCountry`';
        }
        if ($this->isColumnModified(MuseumPeer::TOPCOUNTRYRECORDS)) {
            $modifiedColumns[':p' . $index++]  = '`TopCountryRecords`';
        }
        if ($this->isColumnModified(MuseumPeer::COORDINATES)) {
            $modifiedColumns[':p' . $index++]  = '`Coordinates`';
        }
        if ($this->isColumnModified(MuseumPeer::PERCENTCOORDINATES)) {
            $modifiedColumns[':p' . $index++]  = '`PercentCoordinates`';
        }
        if ($this->isColumnModified(MuseumPeer::DATEOLDESTRECORD)) {
            $modifiedColumns[':p' . $index++]  = '`DateOldestRecord`';
        }
        if ($this->isColumnModified(MuseumPeer::DATEMOSTRECENTRECORD)) {
            $modifiedColumns[':p' . $index++]  = '`DateMostRecentRecord`';
        }
        if ($this->isColumnModified(MuseumPeer::YEAROLDESTRECORD)) {
            $modifiedColumns[':p' . $index++]  = '`YearOldestRecord`';
        }
        if ($this->isColumnModified(MuseumPeer::YEARMOSTRECENTRECORD)) {
            $modifiedColumns[':p' . $index++]  = '`YearMostRecentRecord`';
        }
        if ($this->isColumnModified(MuseumPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(MuseumPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(MuseumPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(MuseumPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(MuseumPeer::VALIDNAMES)) {
            $modifiedColumns[':p' . $index++]  = '`validnames`';
        }
        if ($this->isColumnModified(MuseumPeer::PERCENTVALID)) {
            $modifiedColumns[':p' . $index++]  = '`PercentValid`';
        }
        if ($this->isColumnModified(MuseumPeer::SYNONYMS)) {
            $modifiedColumns[':p' . $index++]  = '`synonyms`';
        }
        if ($this->isColumnModified(MuseumPeer::PERCENTSYNONYM)) {
            $modifiedColumns[':p' . $index++]  = '`PercentSynonym`';
        }
        if ($this->isColumnModified(MuseumPeer::NON-MATCHING)) {
            $modifiedColumns[':p' . $index++]  = '`non-matching`';
        }
        if ($this->isColumnModified(MuseumPeer::PERCENTNON-MATCHING)) {
            $modifiedColumns[':p' . $index++]  = '`PercentNon-matching`';
        }
        if ($this->isColumnModified(MuseumPeer::AMBIGUOUSNAME)) {
            $modifiedColumns[':p' . $index++]  = '`AmbiguousName`';
        }
        if ($this->isColumnModified(MuseumPeer::PERCENTAMBIGUOUS)) {
            $modifiedColumns[':p' . $index++]  = '`PercentAmbiguous`';
        }
        if ($this->isColumnModified(MuseumPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `museum` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`OccurrenceRefNo`':
                        $stmt->bindValue($identifier, $this->occurrencerefno, PDO::PARAM_INT);
                        break;
                    case '`Museum`':
                        $stmt->bindValue($identifier, $this->museum, PDO::PARAM_STR);
                        break;
                    case '`Acronym`':
                        $stmt->bindValue($identifier, $this->acronym, PDO::PARAM_STR);
                        break;
                    case '`Address`':
                        $stmt->bindValue($identifier, $this->address, PDO::PARAM_STR);
                        break;
                    case '`City`':
                        $stmt->bindValue($identifier, $this->city, PDO::PARAM_STR);
                        break;
                    case '`C_code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`LogoURL`':
                        $stmt->bindValue($identifier, $this->logourl, PDO::PARAM_STR);
                        break;
                    case '`Online`':
                        $stmt->bindValue($identifier, $this->online, PDO::PARAM_INT);
                        break;
                    case '`Remarks`':
                        $stmt->bindValue($identifier, $this->remarks, PDO::PARAM_STR);
                        break;
                    case '`HomePageURL`':
                        $stmt->bindValue($identifier, $this->homepageurl, PDO::PARAM_STR);
                        break;
                    case '`OnlineDatabase`':
                        $stmt->bindValue($identifier, $this->onlinedatabase, PDO::PARAM_STR);
                        break;
                    case '`CatalogueNumPrefix1`':
                        $stmt->bindValue($identifier, $this->cataloguenumprefix1, PDO::PARAM_STR);
                        break;
                    case '`CatalogueNumberPrefix2`':
                        $stmt->bindValue($identifier, $this->cataloguenumberprefix2, PDO::PARAM_STR);
                        break;
                    case '`CatalogueNumberPrefix3`':
                        $stmt->bindValue($identifier, $this->cataloguenumberprefix3, PDO::PARAM_STR);
                        break;
                    case '`ContactPerson1`':
                        $stmt->bindValue($identifier, $this->contactperson1, PDO::PARAM_STR);
                        break;
                    case '`ContactPerson1Email`':
                        $stmt->bindValue($identifier, $this->contactperson1email, PDO::PARAM_STR);
                        break;
                    case '`ContactPerson2`':
                        $stmt->bindValue($identifier, $this->contactperson2, PDO::PARAM_STR);
                        break;
                    case '`ContactPerson2Email`':
                        $stmt->bindValue($identifier, $this->contactperson2email, PDO::PARAM_STR);
                        break;
                    case '`FirstVersionDate`':
                        $stmt->bindValue($identifier, $this->firstversiondate, PDO::PARAM_STR);
                        break;
                    case '`VersionDate`':
                        $stmt->bindValue($identifier, $this->versiondate, PDO::PARAM_STR);
                        break;
                    case '`Validity`':
                        $stmt->bindValue($identifier, $this->validity, PDO::PARAM_STR);
                        break;
                    case '`LastUpdateDate`':
                        $stmt->bindValue($identifier, $this->lastupdatedate, PDO::PARAM_STR);
                        break;
                    case '`DatabaseFormat`':
                        $stmt->bindValue($identifier, $this->databaseformat, PDO::PARAM_STR);
                        break;
                    case '`Accessions`':
                        $stmt->bindValue($identifier, $this->accessions, PDO::PARAM_INT);
                        break;
                    case '`Species`':
                        $stmt->bindValue($identifier, $this->species, PDO::PARAM_INT);
                        break;
                    case '`Families`':
                        $stmt->bindValue($identifier, $this->families, PDO::PARAM_INT);
                        break;
                    case '`Countries`':
                        $stmt->bindValue($identifier, $this->countries, PDO::PARAM_INT);
                        break;
                    case '`TopCountry`':
                        $stmt->bindValue($identifier, $this->topcountry, PDO::PARAM_STR);
                        break;
                    case '`TopCountryRecords`':
                        $stmt->bindValue($identifier, $this->topcountryrecords, PDO::PARAM_INT);
                        break;
                    case '`Coordinates`':
                        $stmt->bindValue($identifier, $this->coordinates, PDO::PARAM_INT);
                        break;
                    case '`PercentCoordinates`':
                        $stmt->bindValue($identifier, $this->percentcoordinates, PDO::PARAM_INT);
                        break;
                    case '`DateOldestRecord`':
                        $stmt->bindValue($identifier, $this->dateoldestrecord, PDO::PARAM_STR);
                        break;
                    case '`DateMostRecentRecord`':
                        $stmt->bindValue($identifier, $this->datemostrecentrecord, PDO::PARAM_STR);
                        break;
                    case '`YearOldestRecord`':
                        $stmt->bindValue($identifier, $this->yearoldestrecord, PDO::PARAM_STR);
                        break;
                    case '`YearMostRecentRecord`':
                        $stmt->bindValue($identifier, $this->yearmostrecentrecord, PDO::PARAM_STR);
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
                    case '`validnames`':
                        $stmt->bindValue($identifier, $this->validnames, PDO::PARAM_INT);
                        break;
                    case '`PercentValid`':
                        $stmt->bindValue($identifier, $this->percentvalid, PDO::PARAM_STR);
                        break;
                    case '`synonyms`':
                        $stmt->bindValue($identifier, $this->synonyms, PDO::PARAM_INT);
                        break;
                    case '`PercentSynonym`':
                        $stmt->bindValue($identifier, $this->percentsynonym, PDO::PARAM_STR);
                        break;
                    case '`non-matching`':
                        $stmt->bindValue($identifier, $this->non-matching, PDO::PARAM_INT);
                        break;
                    case '`PercentNon-matching`':
                        $stmt->bindValue($identifier, $this->percentnon-matching, PDO::PARAM_STR);
                        break;
                    case '`AmbiguousName`':
                        $stmt->bindValue($identifier, $this->ambiguousname, PDO::PARAM_INT);
                        break;
                    case '`PercentAmbiguous`':
                        $stmt->bindValue($identifier, $this->percentambiguous, PDO::PARAM_STR);
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


            if (($retval = MuseumPeer::doValidate($this, $columns)) !== true) {
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
        $pos = MuseumPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOccurrencerefno();
                break;
            case 1:
                return $this->getMuseum();
                break;
            case 2:
                return $this->getAcronym();
                break;
            case 3:
                return $this->getAddress();
                break;
            case 4:
                return $this->getCity();
                break;
            case 5:
                return $this->getCCode();
                break;
            case 6:
                return $this->getLogourl();
                break;
            case 7:
                return $this->getOnline();
                break;
            case 8:
                return $this->getRemarks();
                break;
            case 9:
                return $this->getHomepageurl();
                break;
            case 10:
                return $this->getOnlinedatabase();
                break;
            case 11:
                return $this->getCataloguenumprefix1();
                break;
            case 12:
                return $this->getCataloguenumberprefix2();
                break;
            case 13:
                return $this->getCataloguenumberprefix3();
                break;
            case 14:
                return $this->getContactperson1();
                break;
            case 15:
                return $this->getContactperson1email();
                break;
            case 16:
                return $this->getContactperson2();
                break;
            case 17:
                return $this->getContactperson2email();
                break;
            case 18:
                return $this->getFirstversiondate();
                break;
            case 19:
                return $this->getVersiondate();
                break;
            case 20:
                return $this->getValidity();
                break;
            case 21:
                return $this->getLastupdatedate();
                break;
            case 22:
                return $this->getDatabaseformat();
                break;
            case 23:
                return $this->getAccessions();
                break;
            case 24:
                return $this->getSpecies();
                break;
            case 25:
                return $this->getFamilies();
                break;
            case 26:
                return $this->getCountries();
                break;
            case 27:
                return $this->getTopcountry();
                break;
            case 28:
                return $this->getTopcountryrecords();
                break;
            case 29:
                return $this->getCoordinates();
                break;
            case 30:
                return $this->getPercentcoordinates();
                break;
            case 31:
                return $this->getDateoldestrecord();
                break;
            case 32:
                return $this->getDatemostrecentrecord();
                break;
            case 33:
                return $this->getYearoldestrecord();
                break;
            case 34:
                return $this->getYearmostrecentrecord();
                break;
            case 35:
                return $this->getEntered();
                break;
            case 36:
                return $this->getDateentered();
                break;
            case 37:
                return $this->getModified();
                break;
            case 38:
                return $this->getDatemodified();
                break;
            case 39:
                return $this->getValidnames();
                break;
            case 40:
                return $this->getPercentvalid();
                break;
            case 41:
                return $this->getSynonyms();
                break;
            case 42:
                return $this->getPercentsynonym();
                break;
            case 43:
                return $this->getNonmatching();
                break;
            case 44:
                return $this->getPercentnonmatching();
                break;
            case 45:
                return $this->getAmbiguousname();
                break;
            case 46:
                return $this->getPercentambiguous();
                break;
            case 47:
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
        if (isset($alreadyDumpedObjects['Museum'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Museum'][$this->getPrimaryKey()] = true;
        $keys = MuseumPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOccurrencerefno(),
            $keys[1] => $this->getMuseum(),
            $keys[2] => $this->getAcronym(),
            $keys[3] => $this->getAddress(),
            $keys[4] => $this->getCity(),
            $keys[5] => $this->getCCode(),
            $keys[6] => $this->getLogourl(),
            $keys[7] => $this->getOnline(),
            $keys[8] => $this->getRemarks(),
            $keys[9] => $this->getHomepageurl(),
            $keys[10] => $this->getOnlinedatabase(),
            $keys[11] => $this->getCataloguenumprefix1(),
            $keys[12] => $this->getCataloguenumberprefix2(),
            $keys[13] => $this->getCataloguenumberprefix3(),
            $keys[14] => $this->getContactperson1(),
            $keys[15] => $this->getContactperson1email(),
            $keys[16] => $this->getContactperson2(),
            $keys[17] => $this->getContactperson2email(),
            $keys[18] => $this->getFirstversiondate(),
            $keys[19] => $this->getVersiondate(),
            $keys[20] => $this->getValidity(),
            $keys[21] => $this->getLastupdatedate(),
            $keys[22] => $this->getDatabaseformat(),
            $keys[23] => $this->getAccessions(),
            $keys[24] => $this->getSpecies(),
            $keys[25] => $this->getFamilies(),
            $keys[26] => $this->getCountries(),
            $keys[27] => $this->getTopcountry(),
            $keys[28] => $this->getTopcountryrecords(),
            $keys[29] => $this->getCoordinates(),
            $keys[30] => $this->getPercentcoordinates(),
            $keys[31] => $this->getDateoldestrecord(),
            $keys[32] => $this->getDatemostrecentrecord(),
            $keys[33] => $this->getYearoldestrecord(),
            $keys[34] => $this->getYearmostrecentrecord(),
            $keys[35] => $this->getEntered(),
            $keys[36] => $this->getDateentered(),
            $keys[37] => $this->getModified(),
            $keys[38] => $this->getDatemodified(),
            $keys[39] => $this->getValidnames(),
            $keys[40] => $this->getPercentvalid(),
            $keys[41] => $this->getSynonyms(),
            $keys[42] => $this->getPercentsynonym(),
            $keys[43] => $this->getNonmatching(),
            $keys[44] => $this->getPercentnonmatching(),
            $keys[45] => $this->getAmbiguousname(),
            $keys[46] => $this->getPercentambiguous(),
            $keys[47] => $this->getTs(),
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
        $pos = MuseumPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOccurrencerefno($value);
                break;
            case 1:
                $this->setMuseum($value);
                break;
            case 2:
                $this->setAcronym($value);
                break;
            case 3:
                $this->setAddress($value);
                break;
            case 4:
                $this->setCity($value);
                break;
            case 5:
                $this->setCCode($value);
                break;
            case 6:
                $this->setLogourl($value);
                break;
            case 7:
                $this->setOnline($value);
                break;
            case 8:
                $this->setRemarks($value);
                break;
            case 9:
                $this->setHomepageurl($value);
                break;
            case 10:
                $this->setOnlinedatabase($value);
                break;
            case 11:
                $this->setCataloguenumprefix1($value);
                break;
            case 12:
                $this->setCataloguenumberprefix2($value);
                break;
            case 13:
                $this->setCataloguenumberprefix3($value);
                break;
            case 14:
                $this->setContactperson1($value);
                break;
            case 15:
                $this->setContactperson1email($value);
                break;
            case 16:
                $this->setContactperson2($value);
                break;
            case 17:
                $this->setContactperson2email($value);
                break;
            case 18:
                $this->setFirstversiondate($value);
                break;
            case 19:
                $this->setVersiondate($value);
                break;
            case 20:
                $this->setValidity($value);
                break;
            case 21:
                $this->setLastupdatedate($value);
                break;
            case 22:
                $this->setDatabaseformat($value);
                break;
            case 23:
                $this->setAccessions($value);
                break;
            case 24:
                $this->setSpecies($value);
                break;
            case 25:
                $this->setFamilies($value);
                break;
            case 26:
                $this->setCountries($value);
                break;
            case 27:
                $this->setTopcountry($value);
                break;
            case 28:
                $this->setTopcountryrecords($value);
                break;
            case 29:
                $this->setCoordinates($value);
                break;
            case 30:
                $this->setPercentcoordinates($value);
                break;
            case 31:
                $this->setDateoldestrecord($value);
                break;
            case 32:
                $this->setDatemostrecentrecord($value);
                break;
            case 33:
                $this->setYearoldestrecord($value);
                break;
            case 34:
                $this->setYearmostrecentrecord($value);
                break;
            case 35:
                $this->setEntered($value);
                break;
            case 36:
                $this->setDateentered($value);
                break;
            case 37:
                $this->setModified($value);
                break;
            case 38:
                $this->setDatemodified($value);
                break;
            case 39:
                $this->setValidnames($value);
                break;
            case 40:
                $this->setPercentvalid($value);
                break;
            case 41:
                $this->setSynonyms($value);
                break;
            case 42:
                $this->setPercentsynonym($value);
                break;
            case 43:
                $this->setNonmatching($value);
                break;
            case 44:
                $this->setPercentnonmatching($value);
                break;
            case 45:
                $this->setAmbiguousname($value);
                break;
            case 46:
                $this->setPercentambiguous($value);
                break;
            case 47:
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
        $keys = MuseumPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setOccurrencerefno($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMuseum($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAcronym($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAddress($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCity($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCCode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLogourl($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setOnline($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setRemarks($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setHomepageurl($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setOnlinedatabase($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setCataloguenumprefix1($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCataloguenumberprefix2($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setCataloguenumberprefix3($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setContactperson1($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setContactperson1email($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setContactperson2($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setContactperson2email($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setFirstversiondate($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setVersiondate($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setValidity($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setLastupdatedate($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDatabaseformat($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setAccessions($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setSpecies($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setFamilies($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setCountries($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setTopcountry($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setTopcountryrecords($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setCoordinates($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setPercentcoordinates($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setDateoldestrecord($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setDatemostrecentrecord($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setYearoldestrecord($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setYearmostrecentrecord($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setEntered($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setDateentered($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setModified($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setDatemodified($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setValidnames($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setPercentvalid($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setSynonyms($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setPercentsynonym($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setNonmatching($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setPercentnonmatching($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setAmbiguousname($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setPercentambiguous($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setTs($arr[$keys[47]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(MuseumPeer::DATABASE_NAME);

        if ($this->isColumnModified(MuseumPeer::OCCURRENCEREFNO)) $criteria->add(MuseumPeer::OCCURRENCEREFNO, $this->occurrencerefno);
        if ($this->isColumnModified(MuseumPeer::MUSEUM)) $criteria->add(MuseumPeer::MUSEUM, $this->museum);
        if ($this->isColumnModified(MuseumPeer::ACRONYM)) $criteria->add(MuseumPeer::ACRONYM, $this->acronym);
        if ($this->isColumnModified(MuseumPeer::ADDRESS)) $criteria->add(MuseumPeer::ADDRESS, $this->address);
        if ($this->isColumnModified(MuseumPeer::CITY)) $criteria->add(MuseumPeer::CITY, $this->city);
        if ($this->isColumnModified(MuseumPeer::C_CODE)) $criteria->add(MuseumPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(MuseumPeer::LOGOURL)) $criteria->add(MuseumPeer::LOGOURL, $this->logourl);
        if ($this->isColumnModified(MuseumPeer::ONLINE)) $criteria->add(MuseumPeer::ONLINE, $this->online);
        if ($this->isColumnModified(MuseumPeer::REMARKS)) $criteria->add(MuseumPeer::REMARKS, $this->remarks);
        if ($this->isColumnModified(MuseumPeer::HOMEPAGEURL)) $criteria->add(MuseumPeer::HOMEPAGEURL, $this->homepageurl);
        if ($this->isColumnModified(MuseumPeer::ONLINEDATABASE)) $criteria->add(MuseumPeer::ONLINEDATABASE, $this->onlinedatabase);
        if ($this->isColumnModified(MuseumPeer::CATALOGUENUMPREFIX1)) $criteria->add(MuseumPeer::CATALOGUENUMPREFIX1, $this->cataloguenumprefix1);
        if ($this->isColumnModified(MuseumPeer::CATALOGUENUMBERPREFIX2)) $criteria->add(MuseumPeer::CATALOGUENUMBERPREFIX2, $this->cataloguenumberprefix2);
        if ($this->isColumnModified(MuseumPeer::CATALOGUENUMBERPREFIX3)) $criteria->add(MuseumPeer::CATALOGUENUMBERPREFIX3, $this->cataloguenumberprefix3);
        if ($this->isColumnModified(MuseumPeer::CONTACTPERSON1)) $criteria->add(MuseumPeer::CONTACTPERSON1, $this->contactperson1);
        if ($this->isColumnModified(MuseumPeer::CONTACTPERSON1EMAIL)) $criteria->add(MuseumPeer::CONTACTPERSON1EMAIL, $this->contactperson1email);
        if ($this->isColumnModified(MuseumPeer::CONTACTPERSON2)) $criteria->add(MuseumPeer::CONTACTPERSON2, $this->contactperson2);
        if ($this->isColumnModified(MuseumPeer::CONTACTPERSON2EMAIL)) $criteria->add(MuseumPeer::CONTACTPERSON2EMAIL, $this->contactperson2email);
        if ($this->isColumnModified(MuseumPeer::FIRSTVERSIONDATE)) $criteria->add(MuseumPeer::FIRSTVERSIONDATE, $this->firstversiondate);
        if ($this->isColumnModified(MuseumPeer::VERSIONDATE)) $criteria->add(MuseumPeer::VERSIONDATE, $this->versiondate);
        if ($this->isColumnModified(MuseumPeer::VALIDITY)) $criteria->add(MuseumPeer::VALIDITY, $this->validity);
        if ($this->isColumnModified(MuseumPeer::LASTUPDATEDATE)) $criteria->add(MuseumPeer::LASTUPDATEDATE, $this->lastupdatedate);
        if ($this->isColumnModified(MuseumPeer::DATABASEFORMAT)) $criteria->add(MuseumPeer::DATABASEFORMAT, $this->databaseformat);
        if ($this->isColumnModified(MuseumPeer::ACCESSIONS)) $criteria->add(MuseumPeer::ACCESSIONS, $this->accessions);
        if ($this->isColumnModified(MuseumPeer::SPECIES)) $criteria->add(MuseumPeer::SPECIES, $this->species);
        if ($this->isColumnModified(MuseumPeer::FAMILIES)) $criteria->add(MuseumPeer::FAMILIES, $this->families);
        if ($this->isColumnModified(MuseumPeer::COUNTRIES)) $criteria->add(MuseumPeer::COUNTRIES, $this->countries);
        if ($this->isColumnModified(MuseumPeer::TOPCOUNTRY)) $criteria->add(MuseumPeer::TOPCOUNTRY, $this->topcountry);
        if ($this->isColumnModified(MuseumPeer::TOPCOUNTRYRECORDS)) $criteria->add(MuseumPeer::TOPCOUNTRYRECORDS, $this->topcountryrecords);
        if ($this->isColumnModified(MuseumPeer::COORDINATES)) $criteria->add(MuseumPeer::COORDINATES, $this->coordinates);
        if ($this->isColumnModified(MuseumPeer::PERCENTCOORDINATES)) $criteria->add(MuseumPeer::PERCENTCOORDINATES, $this->percentcoordinates);
        if ($this->isColumnModified(MuseumPeer::DATEOLDESTRECORD)) $criteria->add(MuseumPeer::DATEOLDESTRECORD, $this->dateoldestrecord);
        if ($this->isColumnModified(MuseumPeer::DATEMOSTRECENTRECORD)) $criteria->add(MuseumPeer::DATEMOSTRECENTRECORD, $this->datemostrecentrecord);
        if ($this->isColumnModified(MuseumPeer::YEAROLDESTRECORD)) $criteria->add(MuseumPeer::YEAROLDESTRECORD, $this->yearoldestrecord);
        if ($this->isColumnModified(MuseumPeer::YEARMOSTRECENTRECORD)) $criteria->add(MuseumPeer::YEARMOSTRECENTRECORD, $this->yearmostrecentrecord);
        if ($this->isColumnModified(MuseumPeer::ENTERED)) $criteria->add(MuseumPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(MuseumPeer::DATEENTERED)) $criteria->add(MuseumPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(MuseumPeer::MODIFIED)) $criteria->add(MuseumPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(MuseumPeer::DATEMODIFIED)) $criteria->add(MuseumPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(MuseumPeer::VALIDNAMES)) $criteria->add(MuseumPeer::VALIDNAMES, $this->validnames);
        if ($this->isColumnModified(MuseumPeer::PERCENTVALID)) $criteria->add(MuseumPeer::PERCENTVALID, $this->percentvalid);
        if ($this->isColumnModified(MuseumPeer::SYNONYMS)) $criteria->add(MuseumPeer::SYNONYMS, $this->synonyms);
        if ($this->isColumnModified(MuseumPeer::PERCENTSYNONYM)) $criteria->add(MuseumPeer::PERCENTSYNONYM, $this->percentsynonym);
        if ($this->isColumnModified(MuseumPeer::NON-MATCHING)) $criteria->add(MuseumPeer::NON-MATCHING, $this->non-matching);
        if ($this->isColumnModified(MuseumPeer::PERCENTNON-MATCHING)) $criteria->add(MuseumPeer::PERCENTNON-MATCHING, $this->percentnon-matching);
        if ($this->isColumnModified(MuseumPeer::AMBIGUOUSNAME)) $criteria->add(MuseumPeer::AMBIGUOUSNAME, $this->ambiguousname);
        if ($this->isColumnModified(MuseumPeer::PERCENTAMBIGUOUS)) $criteria->add(MuseumPeer::PERCENTAMBIGUOUS, $this->percentambiguous);
        if ($this->isColumnModified(MuseumPeer::TS)) $criteria->add(MuseumPeer::TS, $this->ts);

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
        $criteria = new Criteria(MuseumPeer::DATABASE_NAME);
        $criteria->add(MuseumPeer::OCCURRENCEREFNO, $this->occurrencerefno);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getOccurrencerefno();
    }

    /**
     * Generic method to set the primary key (occurrencerefno column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOccurrencerefno($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getOccurrencerefno();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Museum (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setMuseum($this->getMuseum());
        $copyObj->setAcronym($this->getAcronym());
        $copyObj->setAddress($this->getAddress());
        $copyObj->setCity($this->getCity());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setLogourl($this->getLogourl());
        $copyObj->setOnline($this->getOnline());
        $copyObj->setRemarks($this->getRemarks());
        $copyObj->setHomepageurl($this->getHomepageurl());
        $copyObj->setOnlinedatabase($this->getOnlinedatabase());
        $copyObj->setCataloguenumprefix1($this->getCataloguenumprefix1());
        $copyObj->setCataloguenumberprefix2($this->getCataloguenumberprefix2());
        $copyObj->setCataloguenumberprefix3($this->getCataloguenumberprefix3());
        $copyObj->setContactperson1($this->getContactperson1());
        $copyObj->setContactperson1email($this->getContactperson1email());
        $copyObj->setContactperson2($this->getContactperson2());
        $copyObj->setContactperson2email($this->getContactperson2email());
        $copyObj->setFirstversiondate($this->getFirstversiondate());
        $copyObj->setVersiondate($this->getVersiondate());
        $copyObj->setValidity($this->getValidity());
        $copyObj->setLastupdatedate($this->getLastupdatedate());
        $copyObj->setDatabaseformat($this->getDatabaseformat());
        $copyObj->setAccessions($this->getAccessions());
        $copyObj->setSpecies($this->getSpecies());
        $copyObj->setFamilies($this->getFamilies());
        $copyObj->setCountries($this->getCountries());
        $copyObj->setTopcountry($this->getTopcountry());
        $copyObj->setTopcountryrecords($this->getTopcountryrecords());
        $copyObj->setCoordinates($this->getCoordinates());
        $copyObj->setPercentcoordinates($this->getPercentcoordinates());
        $copyObj->setDateoldestrecord($this->getDateoldestrecord());
        $copyObj->setDatemostrecentrecord($this->getDatemostrecentrecord());
        $copyObj->setYearoldestrecord($this->getYearoldestrecord());
        $copyObj->setYearmostrecentrecord($this->getYearmostrecentrecord());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setValidnames($this->getValidnames());
        $copyObj->setPercentvalid($this->getPercentvalid());
        $copyObj->setSynonyms($this->getSynonyms());
        $copyObj->setPercentsynonym($this->getPercentsynonym());
        $copyObj->setNonmatching($this->getNonmatching());
        $copyObj->setPercentnonmatching($this->getPercentnonmatching());
        $copyObj->setAmbiguousname($this->getAmbiguousname());
        $copyObj->setPercentambiguous($this->getPercentambiguous());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setOccurrencerefno(NULL); // this is a auto-increment column, so set to default value
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
     * @return Museum Clone of current object.
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
     * @return MuseumPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new MuseumPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->occurrencerefno = null;
        $this->museum = null;
        $this->acronym = null;
        $this->address = null;
        $this->city = null;
        $this->c_code = null;
        $this->logourl = null;
        $this->online = null;
        $this->remarks = null;
        $this->homepageurl = null;
        $this->onlinedatabase = null;
        $this->cataloguenumprefix1 = null;
        $this->cataloguenumberprefix2 = null;
        $this->cataloguenumberprefix3 = null;
        $this->contactperson1 = null;
        $this->contactperson1email = null;
        $this->contactperson2 = null;
        $this->contactperson2email = null;
        $this->firstversiondate = null;
        $this->versiondate = null;
        $this->validity = null;
        $this->lastupdatedate = null;
        $this->databaseformat = null;
        $this->accessions = null;
        $this->species = null;
        $this->families = null;
        $this->countries = null;
        $this->topcountry = null;
        $this->topcountryrecords = null;
        $this->coordinates = null;
        $this->percentcoordinates = null;
        $this->dateoldestrecord = null;
        $this->datemostrecentrecord = null;
        $this->yearoldestrecord = null;
        $this->yearmostrecentrecord = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->validnames = null;
        $this->percentvalid = null;
        $this->synonyms = null;
        $this->percentsynonym = null;
        $this->non-matching = null;
        $this->percentnon-matching = null;
        $this->ambiguousname = null;
        $this->percentambiguous = null;
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
        return (string) $this->exportTo(MuseumPeer::DEFAULT_STRING_FORMAT);
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
