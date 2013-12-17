<?php


/**
 * Base class that represents a row from the 'sponsors_bak' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseSponsorsBak extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SponsorsBakPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SponsorsBakPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the sponsorshipid field.
     * @var        int
     */
    protected $sponsorshipid;

    /**
     * The value for the sponsorfor field.
     * @var        string
     */
    protected $sponsorfor;

    /**
     * The value for the sponsor field.
     * @var        string
     */
    protected $sponsor;

    /**
     * The value for the sponsortext field.
     * @var        string
     */
    protected $sponsortext;

    /**
     * The value for the partnertype field.
     * @var        string
     */
    protected $partnertype;

    /**
     * The value for the contactperson field.
     * @var        string
     */
    protected $contactperson;

    /**
     * The value for the address field.
     * @var        string
     */
    protected $address;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the url field.
     * @var        string
     */
    protected $url;

    /**
     * The value for the logo field.
     * @var        string
     */
    protected $logo;

    /**
     * The value for the startrent field.
     * @var        string
     */
    protected $startrent;

    /**
     * The value for the endrent field.
     * @var        string
     */
    protected $endrent;

    /**
     * The value for the cost field.
     * @var        double
     */
    protected $cost;

    /**
     * The value for the received field.
     * @var        string
     */
    protected $received;

    /**
     * The value for the remarks field.
     * @var        string
     */
    protected $remarks;

    /**
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

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
     * Get the [sponsorshipid] column value.
     *
     * @return int
     */
    public function getSponsorshipid()
    {

        return $this->sponsorshipid;
    }

    /**
     * Get the [sponsorfor] column value.
     *
     * @return string
     */
    public function getSponsorfor()
    {

        return $this->sponsorfor;
    }

    /**
     * Get the [sponsor] column value.
     *
     * @return string
     */
    public function getSponsor()
    {

        return $this->sponsor;
    }

    /**
     * Get the [sponsortext] column value.
     *
     * @return string
     */
    public function getSponsortext()
    {

        return $this->sponsortext;
    }

    /**
     * Get the [partnertype] column value.
     *
     * @return string
     */
    public function getPartnertype()
    {

        return $this->partnertype;
    }

    /**
     * Get the [contactperson] column value.
     *
     * @return string
     */
    public function getContactperson()
    {

        return $this->contactperson;
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
     * Get the [email] column value.
     *
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Get the [url] column value.
     *
     * @return string
     */
    public function getUrl()
    {

        return $this->url;
    }

    /**
     * Get the [logo] column value.
     *
     * @return string
     */
    public function getLogo()
    {

        return $this->logo;
    }

    /**
     * Get the [optionally formatted] temporal [startrent] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getStartrent($format = 'Y-m-d H:i:s')
    {
        if ($this->startrent === null) {
            return null;
        }

        if ($this->startrent === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->startrent);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->startrent, true), $x);
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
     * Get the [optionally formatted] temporal [endrent] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEndrent($format = 'Y-m-d H:i:s')
    {
        if ($this->endrent === null) {
            return null;
        }

        if ($this->endrent === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->endrent);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->endrent, true), $x);
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
     * Get the [cost] column value.
     *
     * @return double
     */
    public function getCost()
    {

        return $this->cost;
    }

    /**
     * Get the [received] column value.
     *
     * @return string
     */
    public function getReceived()
    {

        return $this->received;
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
     * Get the [speccode] column value.
     *
     * @return int
     */
    public function getSpeccode()
    {

        return $this->speccode;
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
     * Set the value of [sponsorshipid] column.
     *
     * @param  int $v new value
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setSponsorshipid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sponsorshipid !== $v) {
            $this->sponsorshipid = $v;
            $this->modifiedColumns[] = SponsorsBakPeer::SPONSORSHIPID;
        }


        return $this;
    } // setSponsorshipid()

    /**
     * Set the value of [sponsorfor] column.
     *
     * @param  string $v new value
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setSponsorfor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sponsorfor !== $v) {
            $this->sponsorfor = $v;
            $this->modifiedColumns[] = SponsorsBakPeer::SPONSORFOR;
        }


        return $this;
    } // setSponsorfor()

    /**
     * Set the value of [sponsor] column.
     *
     * @param  string $v new value
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setSponsor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sponsor !== $v) {
            $this->sponsor = $v;
            $this->modifiedColumns[] = SponsorsBakPeer::SPONSOR;
        }


        return $this;
    } // setSponsor()

    /**
     * Set the value of [sponsortext] column.
     *
     * @param  string $v new value
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setSponsortext($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sponsortext !== $v) {
            $this->sponsortext = $v;
            $this->modifiedColumns[] = SponsorsBakPeer::SPONSORTEXT;
        }


        return $this;
    } // setSponsortext()

    /**
     * Set the value of [partnertype] column.
     *
     * @param  string $v new value
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setPartnertype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->partnertype !== $v) {
            $this->partnertype = $v;
            $this->modifiedColumns[] = SponsorsBakPeer::PARTNERTYPE;
        }


        return $this;
    } // setPartnertype()

    /**
     * Set the value of [contactperson] column.
     *
     * @param  string $v new value
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setContactperson($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->contactperson !== $v) {
            $this->contactperson = $v;
            $this->modifiedColumns[] = SponsorsBakPeer::CONTACTPERSON;
        }


        return $this;
    } // setContactperson()

    /**
     * Set the value of [address] column.
     *
     * @param  string $v new value
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setAddress($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->address !== $v) {
            $this->address = $v;
            $this->modifiedColumns[] = SponsorsBakPeer::ADDRESS;
        }


        return $this;
    } // setAddress()

    /**
     * Set the value of [email] column.
     *
     * @param  string $v new value
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = SponsorsBakPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [url] column.
     *
     * @param  string $v new value
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setUrl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url !== $v) {
            $this->url = $v;
            $this->modifiedColumns[] = SponsorsBakPeer::URL;
        }


        return $this;
    } // setUrl()

    /**
     * Set the value of [logo] column.
     *
     * @param  string $v new value
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setLogo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->logo !== $v) {
            $this->logo = $v;
            $this->modifiedColumns[] = SponsorsBakPeer::LOGO;
        }


        return $this;
    } // setLogo()

    /**
     * Sets the value of [startrent] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setStartrent($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->startrent !== null || $dt !== null) {
            $currentDateAsString = ($this->startrent !== null && $tmpDt = new DateTime($this->startrent)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->startrent = $newDateAsString;
                $this->modifiedColumns[] = SponsorsBakPeer::STARTRENT;
            }
        } // if either are not null


        return $this;
    } // setStartrent()

    /**
     * Sets the value of [endrent] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setEndrent($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->endrent !== null || $dt !== null) {
            $currentDateAsString = ($this->endrent !== null && $tmpDt = new DateTime($this->endrent)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->endrent = $newDateAsString;
                $this->modifiedColumns[] = SponsorsBakPeer::ENDRENT;
            }
        } // if either are not null


        return $this;
    } // setEndrent()

    /**
     * Set the value of [cost] column.
     *
     * @param  double $v new value
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setCost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->cost !== $v) {
            $this->cost = $v;
            $this->modifiedColumns[] = SponsorsBakPeer::COST;
        }


        return $this;
    } // setCost()

    /**
     * Set the value of [received] column.
     *
     * @param  string $v new value
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setReceived($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->received !== $v) {
            $this->received = $v;
            $this->modifiedColumns[] = SponsorsBakPeer::RECEIVED;
        }


        return $this;
    } // setReceived()

    /**
     * Set the value of [remarks] column.
     *
     * @param  string $v new value
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[] = SponsorsBakPeer::REMARKS;
        }


        return $this;
    } // setRemarks()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = SponsorsBakPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = SponsorsBakPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = SponsorsBakPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = SponsorsBakPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = SponsorsBakPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = SponsorsBakPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Set the value of [datechecked] column.
     *
     * @param  string $v new value
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->datechecked !== $v) {
            $this->datechecked = $v;
            $this->modifiedColumns[] = SponsorsBakPeer::DATECHECKED;
        }


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SponsorsBak The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = SponsorsBakPeer::TS;
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

            $this->sponsorshipid = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->sponsorfor = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->sponsor = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->sponsortext = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->partnertype = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->contactperson = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->address = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->email = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->url = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->logo = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->startrent = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->endrent = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->cost = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->received = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->remarks = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->speccode = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->entered = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->dateentered = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->modified = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->datemodified = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->expert = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->datechecked = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->ts = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 23; // 23 = SponsorsBakPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating SponsorsBak object", $e);
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
            $con = Propel::getConnection(SponsorsBakPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SponsorsBakPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(SponsorsBakPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SponsorsBakQuery::create()
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
            $con = Propel::getConnection(SponsorsBakPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                SponsorsBakPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(SponsorsBakPeer::SPONSORSHIPID)) {
            $modifiedColumns[':p' . $index++]  = '`SponsorshipID`';
        }
        if ($this->isColumnModified(SponsorsBakPeer::SPONSORFOR)) {
            $modifiedColumns[':p' . $index++]  = '`SponsorFor`';
        }
        if ($this->isColumnModified(SponsorsBakPeer::SPONSOR)) {
            $modifiedColumns[':p' . $index++]  = '`Sponsor`';
        }
        if ($this->isColumnModified(SponsorsBakPeer::SPONSORTEXT)) {
            $modifiedColumns[':p' . $index++]  = '`SponsorText`';
        }
        if ($this->isColumnModified(SponsorsBakPeer::PARTNERTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`PartnerType`';
        }
        if ($this->isColumnModified(SponsorsBakPeer::CONTACTPERSON)) {
            $modifiedColumns[':p' . $index++]  = '`ContactPerson`';
        }
        if ($this->isColumnModified(SponsorsBakPeer::ADDRESS)) {
            $modifiedColumns[':p' . $index++]  = '`Address`';
        }
        if ($this->isColumnModified(SponsorsBakPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`Email`';
        }
        if ($this->isColumnModified(SponsorsBakPeer::URL)) {
            $modifiedColumns[':p' . $index++]  = '`URL`';
        }
        if ($this->isColumnModified(SponsorsBakPeer::LOGO)) {
            $modifiedColumns[':p' . $index++]  = '`Logo`';
        }
        if ($this->isColumnModified(SponsorsBakPeer::STARTRENT)) {
            $modifiedColumns[':p' . $index++]  = '`StartRent`';
        }
        if ($this->isColumnModified(SponsorsBakPeer::ENDRENT)) {
            $modifiedColumns[':p' . $index++]  = '`EndRent`';
        }
        if ($this->isColumnModified(SponsorsBakPeer::COST)) {
            $modifiedColumns[':p' . $index++]  = '`Cost`';
        }
        if ($this->isColumnModified(SponsorsBakPeer::RECEIVED)) {
            $modifiedColumns[':p' . $index++]  = '`Received`';
        }
        if ($this->isColumnModified(SponsorsBakPeer::REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`Remarks`';
        }
        if ($this->isColumnModified(SponsorsBakPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(SponsorsBakPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(SponsorsBakPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(SponsorsBakPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(SponsorsBakPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(SponsorsBakPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(SponsorsBakPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(SponsorsBakPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `sponsors_bak` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`SponsorshipID`':
                        $stmt->bindValue($identifier, $this->sponsorshipid, PDO::PARAM_INT);
                        break;
                    case '`SponsorFor`':
                        $stmt->bindValue($identifier, $this->sponsorfor, PDO::PARAM_STR);
                        break;
                    case '`Sponsor`':
                        $stmt->bindValue($identifier, $this->sponsor, PDO::PARAM_STR);
                        break;
                    case '`SponsorText`':
                        $stmt->bindValue($identifier, $this->sponsortext, PDO::PARAM_STR);
                        break;
                    case '`PartnerType`':
                        $stmt->bindValue($identifier, $this->partnertype, PDO::PARAM_STR);
                        break;
                    case '`ContactPerson`':
                        $stmt->bindValue($identifier, $this->contactperson, PDO::PARAM_STR);
                        break;
                    case '`Address`':
                        $stmt->bindValue($identifier, $this->address, PDO::PARAM_STR);
                        break;
                    case '`Email`':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`URL`':
                        $stmt->bindValue($identifier, $this->url, PDO::PARAM_STR);
                        break;
                    case '`Logo`':
                        $stmt->bindValue($identifier, $this->logo, PDO::PARAM_STR);
                        break;
                    case '`StartRent`':
                        $stmt->bindValue($identifier, $this->startrent, PDO::PARAM_STR);
                        break;
                    case '`EndRent`':
                        $stmt->bindValue($identifier, $this->endrent, PDO::PARAM_STR);
                        break;
                    case '`Cost`':
                        $stmt->bindValue($identifier, $this->cost, PDO::PARAM_STR);
                        break;
                    case '`Received`':
                        $stmt->bindValue($identifier, $this->received, PDO::PARAM_STR);
                        break;
                    case '`Remarks`':
                        $stmt->bindValue($identifier, $this->remarks, PDO::PARAM_STR);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
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
        $this->setSponsor($pk);

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


            if (($retval = SponsorsBakPeer::doValidate($this, $columns)) !== true) {
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
        $pos = SponsorsBakPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSponsorshipid();
                break;
            case 1:
                return $this->getSponsorfor();
                break;
            case 2:
                return $this->getSponsor();
                break;
            case 3:
                return $this->getSponsortext();
                break;
            case 4:
                return $this->getPartnertype();
                break;
            case 5:
                return $this->getContactperson();
                break;
            case 6:
                return $this->getAddress();
                break;
            case 7:
                return $this->getEmail();
                break;
            case 8:
                return $this->getUrl();
                break;
            case 9:
                return $this->getLogo();
                break;
            case 10:
                return $this->getStartrent();
                break;
            case 11:
                return $this->getEndrent();
                break;
            case 12:
                return $this->getCost();
                break;
            case 13:
                return $this->getReceived();
                break;
            case 14:
                return $this->getRemarks();
                break;
            case 15:
                return $this->getSpeccode();
                break;
            case 16:
                return $this->getEntered();
                break;
            case 17:
                return $this->getDateentered();
                break;
            case 18:
                return $this->getModified();
                break;
            case 19:
                return $this->getDatemodified();
                break;
            case 20:
                return $this->getExpert();
                break;
            case 21:
                return $this->getDatechecked();
                break;
            case 22:
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
        if (isset($alreadyDumpedObjects['SponsorsBak'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SponsorsBak'][serialize($this->getPrimaryKey())] = true;
        $keys = SponsorsBakPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getSponsorshipid(),
            $keys[1] => $this->getSponsorfor(),
            $keys[2] => $this->getSponsor(),
            $keys[3] => $this->getSponsortext(),
            $keys[4] => $this->getPartnertype(),
            $keys[5] => $this->getContactperson(),
            $keys[6] => $this->getAddress(),
            $keys[7] => $this->getEmail(),
            $keys[8] => $this->getUrl(),
            $keys[9] => $this->getLogo(),
            $keys[10] => $this->getStartrent(),
            $keys[11] => $this->getEndrent(),
            $keys[12] => $this->getCost(),
            $keys[13] => $this->getReceived(),
            $keys[14] => $this->getRemarks(),
            $keys[15] => $this->getSpeccode(),
            $keys[16] => $this->getEntered(),
            $keys[17] => $this->getDateentered(),
            $keys[18] => $this->getModified(),
            $keys[19] => $this->getDatemodified(),
            $keys[20] => $this->getExpert(),
            $keys[21] => $this->getDatechecked(),
            $keys[22] => $this->getTs(),
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
        $pos = SponsorsBakPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSponsorshipid($value);
                break;
            case 1:
                $this->setSponsorfor($value);
                break;
            case 2:
                $this->setSponsor($value);
                break;
            case 3:
                $this->setSponsortext($value);
                break;
            case 4:
                $this->setPartnertype($value);
                break;
            case 5:
                $this->setContactperson($value);
                break;
            case 6:
                $this->setAddress($value);
                break;
            case 7:
                $this->setEmail($value);
                break;
            case 8:
                $this->setUrl($value);
                break;
            case 9:
                $this->setLogo($value);
                break;
            case 10:
                $this->setStartrent($value);
                break;
            case 11:
                $this->setEndrent($value);
                break;
            case 12:
                $this->setCost($value);
                break;
            case 13:
                $this->setReceived($value);
                break;
            case 14:
                $this->setRemarks($value);
                break;
            case 15:
                $this->setSpeccode($value);
                break;
            case 16:
                $this->setEntered($value);
                break;
            case 17:
                $this->setDateentered($value);
                break;
            case 18:
                $this->setModified($value);
                break;
            case 19:
                $this->setDatemodified($value);
                break;
            case 20:
                $this->setExpert($value);
                break;
            case 21:
                $this->setDatechecked($value);
                break;
            case 22:
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
        $keys = SponsorsBakPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setSponsorshipid($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSponsorfor($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSponsor($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSponsortext($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPartnertype($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setContactperson($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAddress($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setEmail($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setUrl($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLogo($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setStartrent($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setEndrent($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCost($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setReceived($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setRemarks($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setSpeccode($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setEntered($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setDateentered($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setModified($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDatemodified($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setExpert($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDatechecked($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setTs($arr[$keys[22]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SponsorsBakPeer::DATABASE_NAME);

        if ($this->isColumnModified(SponsorsBakPeer::SPONSORSHIPID)) $criteria->add(SponsorsBakPeer::SPONSORSHIPID, $this->sponsorshipid);
        if ($this->isColumnModified(SponsorsBakPeer::SPONSORFOR)) $criteria->add(SponsorsBakPeer::SPONSORFOR, $this->sponsorfor);
        if ($this->isColumnModified(SponsorsBakPeer::SPONSOR)) $criteria->add(SponsorsBakPeer::SPONSOR, $this->sponsor);
        if ($this->isColumnModified(SponsorsBakPeer::SPONSORTEXT)) $criteria->add(SponsorsBakPeer::SPONSORTEXT, $this->sponsortext);
        if ($this->isColumnModified(SponsorsBakPeer::PARTNERTYPE)) $criteria->add(SponsorsBakPeer::PARTNERTYPE, $this->partnertype);
        if ($this->isColumnModified(SponsorsBakPeer::CONTACTPERSON)) $criteria->add(SponsorsBakPeer::CONTACTPERSON, $this->contactperson);
        if ($this->isColumnModified(SponsorsBakPeer::ADDRESS)) $criteria->add(SponsorsBakPeer::ADDRESS, $this->address);
        if ($this->isColumnModified(SponsorsBakPeer::EMAIL)) $criteria->add(SponsorsBakPeer::EMAIL, $this->email);
        if ($this->isColumnModified(SponsorsBakPeer::URL)) $criteria->add(SponsorsBakPeer::URL, $this->url);
        if ($this->isColumnModified(SponsorsBakPeer::LOGO)) $criteria->add(SponsorsBakPeer::LOGO, $this->logo);
        if ($this->isColumnModified(SponsorsBakPeer::STARTRENT)) $criteria->add(SponsorsBakPeer::STARTRENT, $this->startrent);
        if ($this->isColumnModified(SponsorsBakPeer::ENDRENT)) $criteria->add(SponsorsBakPeer::ENDRENT, $this->endrent);
        if ($this->isColumnModified(SponsorsBakPeer::COST)) $criteria->add(SponsorsBakPeer::COST, $this->cost);
        if ($this->isColumnModified(SponsorsBakPeer::RECEIVED)) $criteria->add(SponsorsBakPeer::RECEIVED, $this->received);
        if ($this->isColumnModified(SponsorsBakPeer::REMARKS)) $criteria->add(SponsorsBakPeer::REMARKS, $this->remarks);
        if ($this->isColumnModified(SponsorsBakPeer::SPECCODE)) $criteria->add(SponsorsBakPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(SponsorsBakPeer::ENTERED)) $criteria->add(SponsorsBakPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(SponsorsBakPeer::DATEENTERED)) $criteria->add(SponsorsBakPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(SponsorsBakPeer::MODIFIED)) $criteria->add(SponsorsBakPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(SponsorsBakPeer::DATEMODIFIED)) $criteria->add(SponsorsBakPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(SponsorsBakPeer::EXPERT)) $criteria->add(SponsorsBakPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(SponsorsBakPeer::DATECHECKED)) $criteria->add(SponsorsBakPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(SponsorsBakPeer::TS)) $criteria->add(SponsorsBakPeer::TS, $this->ts);

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
        $criteria = new Criteria(SponsorsBakPeer::DATABASE_NAME);
        $criteria->add(SponsorsBakPeer::SPONSOR, $this->sponsor);
        $criteria->add(SponsorsBakPeer::SPECCODE, $this->speccode);

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
        $pks[0] = $this->getSponsor();
        $pks[1] = $this->getSpeccode();

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
        $this->setSponsor($keys[0]);
        $this->setSpeccode($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getSponsor()) && (null === $this->getSpeccode());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of SponsorsBak (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSponsorfor($this->getSponsorfor());
        $copyObj->setSponsor($this->getSponsor());
        $copyObj->setSponsortext($this->getSponsortext());
        $copyObj->setPartnertype($this->getPartnertype());
        $copyObj->setContactperson($this->getContactperson());
        $copyObj->setAddress($this->getAddress());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setUrl($this->getUrl());
        $copyObj->setLogo($this->getLogo());
        $copyObj->setStartrent($this->getStartrent());
        $copyObj->setEndrent($this->getEndrent());
        $copyObj->setCost($this->getCost());
        $copyObj->setReceived($this->getReceived());
        $copyObj->setRemarks($this->getRemarks());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setSponsorshipid(NULL); // this is a auto-increment column, so set to default value
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
     * @return SponsorsBak Clone of current object.
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
     * @return SponsorsBakPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SponsorsBakPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->sponsorshipid = null;
        $this->sponsorfor = null;
        $this->sponsor = null;
        $this->sponsortext = null;
        $this->partnertype = null;
        $this->contactperson = null;
        $this->address = null;
        $this->email = null;
        $this->url = null;
        $this->logo = null;
        $this->startrent = null;
        $this->endrent = null;
        $this->cost = null;
        $this->received = null;
        $this->remarks = null;
        $this->speccode = null;
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
        return (string) $this->exportTo(SponsorsBakPeer::DEFAULT_STRING_FORMAT);
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
