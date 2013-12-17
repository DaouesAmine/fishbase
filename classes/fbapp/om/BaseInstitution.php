<?php


/**
 * Base class that represents a row from the 'institution' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseInstitution extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'InstitutionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        InstitutionPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the mainref field.
     * @var        string
     */
    protected $mainref;

    /**
     * The value for the acronym field.
     * @var        string
     */
    protected $acronym;

    /**
     * The value for the fullname field.
     * @var        string
     */
    protected $fullname;

    /**
     * The value for the subjectarea field.
     * @var        string
     */
    protected $subjectarea;

    /**
     * The value for the type field.
     * @var        string
     */
    protected $type;

    /**
     * The value for the outreach field.
     * @var        string
     */
    protected $outreach;

    /**
     * The value for the established field.
     * @var        string
     */
    protected $established;

    /**
     * The value for the establishingdate field.
     * @var        string
     */
    protected $establishingdate;

    /**
     * The value for the entryintoforcedate field.
     * @var        string
     */
    protected $entryintoforcedate;

    /**
     * The value for the expirydate field.
     * @var        string
     */
    protected $expirydate;

    /**
     * The value for the localitycity field.
     * @var        string
     */
    protected $localitycity;

    /**
     * The value for the localitycountry field.
     * @var        string
     */
    protected $localitycountry;

    /**
     * The value for the description field.
     * @var        string
     */
    protected $description;

    /**
     * The value for the remarks field.
     * @var        string
     */
    protected $remarks;

    /**
     * The value for the fulltext field.
     * @var        string
     */
    protected $fulltext;

    /**
     * The value for the address field.
     * @var        string
     */
    protected $address;

    /**
     * The value for the telephone field.
     * @var        string
     */
    protected $telephone;

    /**
     * The value for the fax field.
     * @var        string
     */
    protected $fax;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the internet field.
     * @var        string
     */
    protected $internet;

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
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [mainref] column value.
     *
     * @return string
     */
    public function getMainref()
    {

        return $this->mainref;
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
     * Get the [fullname] column value.
     *
     * @return string
     */
    public function getFullname()
    {

        return $this->fullname;
    }

    /**
     * Get the [subjectarea] column value.
     *
     * @return string
     */
    public function getSubjectarea()
    {

        return $this->subjectarea;
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
     * Get the [outreach] column value.
     *
     * @return string
     */
    public function getOutreach()
    {

        return $this->outreach;
    }

    /**
     * Get the [established] column value.
     *
     * @return string
     */
    public function getEstablished()
    {

        return $this->established;
    }

    /**
     * Get the [optionally formatted] temporal [establishingdate] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEstablishingdate($format = 'Y-m-d H:i:s')
    {
        if ($this->establishingdate === null) {
            return null;
        }

        if ($this->establishingdate === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->establishingdate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->establishingdate, true), $x);
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
     * Get the [optionally formatted] temporal [entryintoforcedate] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEntryintoforcedate($format = 'Y-m-d H:i:s')
    {
        if ($this->entryintoforcedate === null) {
            return null;
        }

        if ($this->entryintoforcedate === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->entryintoforcedate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->entryintoforcedate, true), $x);
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
     * Get the [optionally formatted] temporal [expirydate] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getExpirydate($format = 'Y-m-d H:i:s')
    {
        if ($this->expirydate === null) {
            return null;
        }

        if ($this->expirydate === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->expirydate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->expirydate, true), $x);
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
     * Get the [localitycity] column value.
     *
     * @return string
     */
    public function getLocalitycity()
    {

        return $this->localitycity;
    }

    /**
     * Get the [localitycountry] column value.
     *
     * @return string
     */
    public function getLocalitycountry()
    {

        return $this->localitycountry;
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
     * Get the [remarks] column value.
     *
     * @return string
     */
    public function getRemarks()
    {

        return $this->remarks;
    }

    /**
     * Get the [fulltext] column value.
     *
     * @return string
     */
    public function getFulltext()
    {

        return $this->fulltext;
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
     * Get the [telephone] column value.
     *
     * @return string
     */
    public function getTelephone()
    {

        return $this->telephone;
    }

    /**
     * Get the [fax] column value.
     *
     * @return string
     */
    public function getFax()
    {

        return $this->fax;
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
     * Get the [internet] column value.
     *
     * @return string
     */
    public function getInternet()
    {

        return $this->internet;
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
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return Institution The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = InstitutionPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [mainref] column.
     *
     * @param  string $v new value
     * @return Institution The current object (for fluent API support)
     */
    public function setMainref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mainref !== $v) {
            $this->mainref = $v;
            $this->modifiedColumns[] = InstitutionPeer::MAINREF;
        }


        return $this;
    } // setMainref()

    /**
     * Set the value of [acronym] column.
     *
     * @param  string $v new value
     * @return Institution The current object (for fluent API support)
     */
    public function setAcronym($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acronym !== $v) {
            $this->acronym = $v;
            $this->modifiedColumns[] = InstitutionPeer::ACRONYM;
        }


        return $this;
    } // setAcronym()

    /**
     * Set the value of [fullname] column.
     *
     * @param  string $v new value
     * @return Institution The current object (for fluent API support)
     */
    public function setFullname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fullname !== $v) {
            $this->fullname = $v;
            $this->modifiedColumns[] = InstitutionPeer::FULLNAME;
        }


        return $this;
    } // setFullname()

    /**
     * Set the value of [subjectarea] column.
     *
     * @param  string $v new value
     * @return Institution The current object (for fluent API support)
     */
    public function setSubjectarea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->subjectarea !== $v) {
            $this->subjectarea = $v;
            $this->modifiedColumns[] = InstitutionPeer::SUBJECTAREA;
        }


        return $this;
    } // setSubjectarea()

    /**
     * Set the value of [type] column.
     *
     * @param  string $v new value
     * @return Institution The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[] = InstitutionPeer::TYPE;
        }


        return $this;
    } // setType()

    /**
     * Set the value of [outreach] column.
     *
     * @param  string $v new value
     * @return Institution The current object (for fluent API support)
     */
    public function setOutreach($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->outreach !== $v) {
            $this->outreach = $v;
            $this->modifiedColumns[] = InstitutionPeer::OUTREACH;
        }


        return $this;
    } // setOutreach()

    /**
     * Set the value of [established] column.
     *
     * @param  string $v new value
     * @return Institution The current object (for fluent API support)
     */
    public function setEstablished($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->established !== $v) {
            $this->established = $v;
            $this->modifiedColumns[] = InstitutionPeer::ESTABLISHED;
        }


        return $this;
    } // setEstablished()

    /**
     * Sets the value of [establishingdate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Institution The current object (for fluent API support)
     */
    public function setEstablishingdate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->establishingdate !== null || $dt !== null) {
            $currentDateAsString = ($this->establishingdate !== null && $tmpDt = new DateTime($this->establishingdate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->establishingdate = $newDateAsString;
                $this->modifiedColumns[] = InstitutionPeer::ESTABLISHINGDATE;
            }
        } // if either are not null


        return $this;
    } // setEstablishingdate()

    /**
     * Sets the value of [entryintoforcedate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Institution The current object (for fluent API support)
     */
    public function setEntryintoforcedate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->entryintoforcedate !== null || $dt !== null) {
            $currentDateAsString = ($this->entryintoforcedate !== null && $tmpDt = new DateTime($this->entryintoforcedate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->entryintoforcedate = $newDateAsString;
                $this->modifiedColumns[] = InstitutionPeer::ENTRYINTOFORCEDATE;
            }
        } // if either are not null


        return $this;
    } // setEntryintoforcedate()

    /**
     * Sets the value of [expirydate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Institution The current object (for fluent API support)
     */
    public function setExpirydate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->expirydate !== null || $dt !== null) {
            $currentDateAsString = ($this->expirydate !== null && $tmpDt = new DateTime($this->expirydate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->expirydate = $newDateAsString;
                $this->modifiedColumns[] = InstitutionPeer::EXPIRYDATE;
            }
        } // if either are not null


        return $this;
    } // setExpirydate()

    /**
     * Set the value of [localitycity] column.
     *
     * @param  string $v new value
     * @return Institution The current object (for fluent API support)
     */
    public function setLocalitycity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->localitycity !== $v) {
            $this->localitycity = $v;
            $this->modifiedColumns[] = InstitutionPeer::LOCALITYCITY;
        }


        return $this;
    } // setLocalitycity()

    /**
     * Set the value of [localitycountry] column.
     *
     * @param  string $v new value
     * @return Institution The current object (for fluent API support)
     */
    public function setLocalitycountry($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->localitycountry !== $v) {
            $this->localitycountry = $v;
            $this->modifiedColumns[] = InstitutionPeer::LOCALITYCOUNTRY;
        }


        return $this;
    } // setLocalitycountry()

    /**
     * Set the value of [description] column.
     *
     * @param  string $v new value
     * @return Institution The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[] = InstitutionPeer::DESCRIPTION;
        }


        return $this;
    } // setDescription()

    /**
     * Set the value of [remarks] column.
     *
     * @param  string $v new value
     * @return Institution The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[] = InstitutionPeer::REMARKS;
        }


        return $this;
    } // setRemarks()

    /**
     * Set the value of [fulltext] column.
     *
     * @param  string $v new value
     * @return Institution The current object (for fluent API support)
     */
    public function setFulltext($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fulltext !== $v) {
            $this->fulltext = $v;
            $this->modifiedColumns[] = InstitutionPeer::FULLTEXT;
        }


        return $this;
    } // setFulltext()

    /**
     * Set the value of [address] column.
     *
     * @param  string $v new value
     * @return Institution The current object (for fluent API support)
     */
    public function setAddress($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->address !== $v) {
            $this->address = $v;
            $this->modifiedColumns[] = InstitutionPeer::ADDRESS;
        }


        return $this;
    } // setAddress()

    /**
     * Set the value of [telephone] column.
     *
     * @param  string $v new value
     * @return Institution The current object (for fluent API support)
     */
    public function setTelephone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone !== $v) {
            $this->telephone = $v;
            $this->modifiedColumns[] = InstitutionPeer::TELEPHONE;
        }


        return $this;
    } // setTelephone()

    /**
     * Set the value of [fax] column.
     *
     * @param  string $v new value
     * @return Institution The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[] = InstitutionPeer::FAX;
        }


        return $this;
    } // setFax()

    /**
     * Set the value of [email] column.
     *
     * @param  string $v new value
     * @return Institution The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = InstitutionPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [internet] column.
     *
     * @param  string $v new value
     * @return Institution The current object (for fluent API support)
     */
    public function setInternet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->internet !== $v) {
            $this->internet = $v;
            $this->modifiedColumns[] = InstitutionPeer::INTERNET;
        }


        return $this;
    } // setInternet()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Institution The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = InstitutionPeer::TS;
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

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->mainref = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->acronym = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->fullname = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->subjectarea = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->type = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->outreach = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->established = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->establishingdate = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->entryintoforcedate = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->expirydate = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->localitycity = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->localitycountry = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->description = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->remarks = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->fulltext = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->address = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->telephone = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->fax = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->email = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->internet = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->ts = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 22; // 22 = InstitutionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Institution object", $e);
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
            $con = Propel::getConnection(InstitutionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = InstitutionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(InstitutionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = InstitutionQuery::create()
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
            $con = Propel::getConnection(InstitutionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                InstitutionPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = InstitutionPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . InstitutionPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(InstitutionPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(InstitutionPeer::MAINREF)) {
            $modifiedColumns[':p' . $index++]  = '`MainRef`';
        }
        if ($this->isColumnModified(InstitutionPeer::ACRONYM)) {
            $modifiedColumns[':p' . $index++]  = '`Acronym`';
        }
        if ($this->isColumnModified(InstitutionPeer::FULLNAME)) {
            $modifiedColumns[':p' . $index++]  = '`FullName`';
        }
        if ($this->isColumnModified(InstitutionPeer::SUBJECTAREA)) {
            $modifiedColumns[':p' . $index++]  = '`SubjectArea`';
        }
        if ($this->isColumnModified(InstitutionPeer::TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`Type`';
        }
        if ($this->isColumnModified(InstitutionPeer::OUTREACH)) {
            $modifiedColumns[':p' . $index++]  = '`Outreach`';
        }
        if ($this->isColumnModified(InstitutionPeer::ESTABLISHED)) {
            $modifiedColumns[':p' . $index++]  = '`Established`';
        }
        if ($this->isColumnModified(InstitutionPeer::ESTABLISHINGDATE)) {
            $modifiedColumns[':p' . $index++]  = '`EstablishingDate`';
        }
        if ($this->isColumnModified(InstitutionPeer::ENTRYINTOFORCEDATE)) {
            $modifiedColumns[':p' . $index++]  = '`EntryIntoForceDate`';
        }
        if ($this->isColumnModified(InstitutionPeer::EXPIRYDATE)) {
            $modifiedColumns[':p' . $index++]  = '`ExpiryDate`';
        }
        if ($this->isColumnModified(InstitutionPeer::LOCALITYCITY)) {
            $modifiedColumns[':p' . $index++]  = '`LocalityCity`';
        }
        if ($this->isColumnModified(InstitutionPeer::LOCALITYCOUNTRY)) {
            $modifiedColumns[':p' . $index++]  = '`LocalityCountry`';
        }
        if ($this->isColumnModified(InstitutionPeer::DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`Description`';
        }
        if ($this->isColumnModified(InstitutionPeer::REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`Remarks`';
        }
        if ($this->isColumnModified(InstitutionPeer::FULLTEXT)) {
            $modifiedColumns[':p' . $index++]  = '`FullText`';
        }
        if ($this->isColumnModified(InstitutionPeer::ADDRESS)) {
            $modifiedColumns[':p' . $index++]  = '`Address`';
        }
        if ($this->isColumnModified(InstitutionPeer::TELEPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`Telephone`';
        }
        if ($this->isColumnModified(InstitutionPeer::FAX)) {
            $modifiedColumns[':p' . $index++]  = '`Fax`';
        }
        if ($this->isColumnModified(InstitutionPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`EMail`';
        }
        if ($this->isColumnModified(InstitutionPeer::INTERNET)) {
            $modifiedColumns[':p' . $index++]  = '`Internet`';
        }
        if ($this->isColumnModified(InstitutionPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `institution` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`MainRef`':
                        $stmt->bindValue($identifier, $this->mainref, PDO::PARAM_STR);
                        break;
                    case '`Acronym`':
                        $stmt->bindValue($identifier, $this->acronym, PDO::PARAM_STR);
                        break;
                    case '`FullName`':
                        $stmt->bindValue($identifier, $this->fullname, PDO::PARAM_STR);
                        break;
                    case '`SubjectArea`':
                        $stmt->bindValue($identifier, $this->subjectarea, PDO::PARAM_STR);
                        break;
                    case '`Type`':
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_STR);
                        break;
                    case '`Outreach`':
                        $stmt->bindValue($identifier, $this->outreach, PDO::PARAM_STR);
                        break;
                    case '`Established`':
                        $stmt->bindValue($identifier, $this->established, PDO::PARAM_STR);
                        break;
                    case '`EstablishingDate`':
                        $stmt->bindValue($identifier, $this->establishingdate, PDO::PARAM_STR);
                        break;
                    case '`EntryIntoForceDate`':
                        $stmt->bindValue($identifier, $this->entryintoforcedate, PDO::PARAM_STR);
                        break;
                    case '`ExpiryDate`':
                        $stmt->bindValue($identifier, $this->expirydate, PDO::PARAM_STR);
                        break;
                    case '`LocalityCity`':
                        $stmt->bindValue($identifier, $this->localitycity, PDO::PARAM_STR);
                        break;
                    case '`LocalityCountry`':
                        $stmt->bindValue($identifier, $this->localitycountry, PDO::PARAM_STR);
                        break;
                    case '`Description`':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case '`Remarks`':
                        $stmt->bindValue($identifier, $this->remarks, PDO::PARAM_STR);
                        break;
                    case '`FullText`':
                        $stmt->bindValue($identifier, $this->fulltext, PDO::PARAM_STR);
                        break;
                    case '`Address`':
                        $stmt->bindValue($identifier, $this->address, PDO::PARAM_STR);
                        break;
                    case '`Telephone`':
                        $stmt->bindValue($identifier, $this->telephone, PDO::PARAM_STR);
                        break;
                    case '`Fax`':
                        $stmt->bindValue($identifier, $this->fax, PDO::PARAM_STR);
                        break;
                    case '`EMail`':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`Internet`':
                        $stmt->bindValue($identifier, $this->internet, PDO::PARAM_STR);
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
        $this->setId($pk);

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


            if (($retval = InstitutionPeer::doValidate($this, $columns)) !== true) {
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
        $pos = InstitutionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getId();
                break;
            case 1:
                return $this->getMainref();
                break;
            case 2:
                return $this->getAcronym();
                break;
            case 3:
                return $this->getFullname();
                break;
            case 4:
                return $this->getSubjectarea();
                break;
            case 5:
                return $this->getType();
                break;
            case 6:
                return $this->getOutreach();
                break;
            case 7:
                return $this->getEstablished();
                break;
            case 8:
                return $this->getEstablishingdate();
                break;
            case 9:
                return $this->getEntryintoforcedate();
                break;
            case 10:
                return $this->getExpirydate();
                break;
            case 11:
                return $this->getLocalitycity();
                break;
            case 12:
                return $this->getLocalitycountry();
                break;
            case 13:
                return $this->getDescription();
                break;
            case 14:
                return $this->getRemarks();
                break;
            case 15:
                return $this->getFulltext();
                break;
            case 16:
                return $this->getAddress();
                break;
            case 17:
                return $this->getTelephone();
                break;
            case 18:
                return $this->getFax();
                break;
            case 19:
                return $this->getEmail();
                break;
            case 20:
                return $this->getInternet();
                break;
            case 21:
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
        if (isset($alreadyDumpedObjects['Institution'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Institution'][$this->getPrimaryKey()] = true;
        $keys = InstitutionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getMainref(),
            $keys[2] => $this->getAcronym(),
            $keys[3] => $this->getFullname(),
            $keys[4] => $this->getSubjectarea(),
            $keys[5] => $this->getType(),
            $keys[6] => $this->getOutreach(),
            $keys[7] => $this->getEstablished(),
            $keys[8] => $this->getEstablishingdate(),
            $keys[9] => $this->getEntryintoforcedate(),
            $keys[10] => $this->getExpirydate(),
            $keys[11] => $this->getLocalitycity(),
            $keys[12] => $this->getLocalitycountry(),
            $keys[13] => $this->getDescription(),
            $keys[14] => $this->getRemarks(),
            $keys[15] => $this->getFulltext(),
            $keys[16] => $this->getAddress(),
            $keys[17] => $this->getTelephone(),
            $keys[18] => $this->getFax(),
            $keys[19] => $this->getEmail(),
            $keys[20] => $this->getInternet(),
            $keys[21] => $this->getTs(),
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
        $pos = InstitutionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setId($value);
                break;
            case 1:
                $this->setMainref($value);
                break;
            case 2:
                $this->setAcronym($value);
                break;
            case 3:
                $this->setFullname($value);
                break;
            case 4:
                $this->setSubjectarea($value);
                break;
            case 5:
                $this->setType($value);
                break;
            case 6:
                $this->setOutreach($value);
                break;
            case 7:
                $this->setEstablished($value);
                break;
            case 8:
                $this->setEstablishingdate($value);
                break;
            case 9:
                $this->setEntryintoforcedate($value);
                break;
            case 10:
                $this->setExpirydate($value);
                break;
            case 11:
                $this->setLocalitycity($value);
                break;
            case 12:
                $this->setLocalitycountry($value);
                break;
            case 13:
                $this->setDescription($value);
                break;
            case 14:
                $this->setRemarks($value);
                break;
            case 15:
                $this->setFulltext($value);
                break;
            case 16:
                $this->setAddress($value);
                break;
            case 17:
                $this->setTelephone($value);
                break;
            case 18:
                $this->setFax($value);
                break;
            case 19:
                $this->setEmail($value);
                break;
            case 20:
                $this->setInternet($value);
                break;
            case 21:
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
        $keys = InstitutionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMainref($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAcronym($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setFullname($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSubjectarea($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setType($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setOutreach($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setEstablished($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setEstablishingdate($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setEntryintoforcedate($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setExpirydate($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setLocalitycity($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setLocalitycountry($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDescription($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setRemarks($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setFulltext($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setAddress($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setTelephone($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setFax($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setEmail($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setInternet($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setTs($arr[$keys[21]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(InstitutionPeer::DATABASE_NAME);

        if ($this->isColumnModified(InstitutionPeer::ID)) $criteria->add(InstitutionPeer::ID, $this->id);
        if ($this->isColumnModified(InstitutionPeer::MAINREF)) $criteria->add(InstitutionPeer::MAINREF, $this->mainref);
        if ($this->isColumnModified(InstitutionPeer::ACRONYM)) $criteria->add(InstitutionPeer::ACRONYM, $this->acronym);
        if ($this->isColumnModified(InstitutionPeer::FULLNAME)) $criteria->add(InstitutionPeer::FULLNAME, $this->fullname);
        if ($this->isColumnModified(InstitutionPeer::SUBJECTAREA)) $criteria->add(InstitutionPeer::SUBJECTAREA, $this->subjectarea);
        if ($this->isColumnModified(InstitutionPeer::TYPE)) $criteria->add(InstitutionPeer::TYPE, $this->type);
        if ($this->isColumnModified(InstitutionPeer::OUTREACH)) $criteria->add(InstitutionPeer::OUTREACH, $this->outreach);
        if ($this->isColumnModified(InstitutionPeer::ESTABLISHED)) $criteria->add(InstitutionPeer::ESTABLISHED, $this->established);
        if ($this->isColumnModified(InstitutionPeer::ESTABLISHINGDATE)) $criteria->add(InstitutionPeer::ESTABLISHINGDATE, $this->establishingdate);
        if ($this->isColumnModified(InstitutionPeer::ENTRYINTOFORCEDATE)) $criteria->add(InstitutionPeer::ENTRYINTOFORCEDATE, $this->entryintoforcedate);
        if ($this->isColumnModified(InstitutionPeer::EXPIRYDATE)) $criteria->add(InstitutionPeer::EXPIRYDATE, $this->expirydate);
        if ($this->isColumnModified(InstitutionPeer::LOCALITYCITY)) $criteria->add(InstitutionPeer::LOCALITYCITY, $this->localitycity);
        if ($this->isColumnModified(InstitutionPeer::LOCALITYCOUNTRY)) $criteria->add(InstitutionPeer::LOCALITYCOUNTRY, $this->localitycountry);
        if ($this->isColumnModified(InstitutionPeer::DESCRIPTION)) $criteria->add(InstitutionPeer::DESCRIPTION, $this->description);
        if ($this->isColumnModified(InstitutionPeer::REMARKS)) $criteria->add(InstitutionPeer::REMARKS, $this->remarks);
        if ($this->isColumnModified(InstitutionPeer::FULLTEXT)) $criteria->add(InstitutionPeer::FULLTEXT, $this->fulltext);
        if ($this->isColumnModified(InstitutionPeer::ADDRESS)) $criteria->add(InstitutionPeer::ADDRESS, $this->address);
        if ($this->isColumnModified(InstitutionPeer::TELEPHONE)) $criteria->add(InstitutionPeer::TELEPHONE, $this->telephone);
        if ($this->isColumnModified(InstitutionPeer::FAX)) $criteria->add(InstitutionPeer::FAX, $this->fax);
        if ($this->isColumnModified(InstitutionPeer::EMAIL)) $criteria->add(InstitutionPeer::EMAIL, $this->email);
        if ($this->isColumnModified(InstitutionPeer::INTERNET)) $criteria->add(InstitutionPeer::INTERNET, $this->internet);
        if ($this->isColumnModified(InstitutionPeer::TS)) $criteria->add(InstitutionPeer::TS, $this->ts);

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
        $criteria = new Criteria(InstitutionPeer::DATABASE_NAME);
        $criteria->add(InstitutionPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Institution (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setMainref($this->getMainref());
        $copyObj->setAcronym($this->getAcronym());
        $copyObj->setFullname($this->getFullname());
        $copyObj->setSubjectarea($this->getSubjectarea());
        $copyObj->setType($this->getType());
        $copyObj->setOutreach($this->getOutreach());
        $copyObj->setEstablished($this->getEstablished());
        $copyObj->setEstablishingdate($this->getEstablishingdate());
        $copyObj->setEntryintoforcedate($this->getEntryintoforcedate());
        $copyObj->setExpirydate($this->getExpirydate());
        $copyObj->setLocalitycity($this->getLocalitycity());
        $copyObj->setLocalitycountry($this->getLocalitycountry());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setRemarks($this->getRemarks());
        $copyObj->setFulltext($this->getFulltext());
        $copyObj->setAddress($this->getAddress());
        $copyObj->setTelephone($this->getTelephone());
        $copyObj->setFax($this->getFax());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setInternet($this->getInternet());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
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
     * @return Institution Clone of current object.
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
     * @return InstitutionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new InstitutionPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->mainref = null;
        $this->acronym = null;
        $this->fullname = null;
        $this->subjectarea = null;
        $this->type = null;
        $this->outreach = null;
        $this->established = null;
        $this->establishingdate = null;
        $this->entryintoforcedate = null;
        $this->expirydate = null;
        $this->localitycity = null;
        $this->localitycountry = null;
        $this->description = null;
        $this->remarks = null;
        $this->fulltext = null;
        $this->address = null;
        $this->telephone = null;
        $this->fax = null;
        $this->email = null;
        $this->internet = null;
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
        return (string) $this->exportTo(InstitutionPeer::DEFAULT_STRING_FORMAT);
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
