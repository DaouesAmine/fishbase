<?php


/**
 * Base class that represents a row from the 'address' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseAddress extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'AddressPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AddressPeer
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
     * The value for the address field.
     * @var        string
     */
    protected $address;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the country field.
     * @var        string
     */
    protected $country;

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
     * The value for the address1 field.
     * @var        string
     */
    protected $address1;

    /**
     * The value for the address2 field.
     * @var        string
     */
    protected $address2;

    /**
     * The value for the city field.
     * @var        string
     */
    protected $city;

    /**
     * The value for the province field.
     * @var        string
     */
    protected $province;

    /**
     * The value for the email1 field.
     * @var        string
     */
    protected $email1;

    /**
     * The value for the email2 field.
     * @var        string
     */
    protected $email2;

    /**
     * The value for the internet1 field.
     * @var        string
     */
    protected $internet1;

    /**
     * The value for the internet2 field.
     * @var        string
     */
    protected $internet2;

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
     * Get the [address] column value.
     *
     * @return string
     */
    public function getAddress()
    {

        return $this->address;
    }

    /**
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {

        return $this->name;
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
     * Get the [address1] column value.
     *
     * @return string
     */
    public function getAddress1()
    {

        return $this->address1;
    }

    /**
     * Get the [address2] column value.
     *
     * @return string
     */
    public function getAddress2()
    {

        return $this->address2;
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
     * Get the [province] column value.
     *
     * @return string
     */
    public function getProvince()
    {

        return $this->province;
    }

    /**
     * Get the [email1] column value.
     *
     * @return string
     */
    public function getEmail1()
    {

        return $this->email1;
    }

    /**
     * Get the [email2] column value.
     *
     * @return string
     */
    public function getEmail2()
    {

        return $this->email2;
    }

    /**
     * Get the [internet1] column value.
     *
     * @return string
     */
    public function getInternet1()
    {

        return $this->internet1;
    }

    /**
     * Get the [internet2] column value.
     *
     * @return string
     */
    public function getInternet2()
    {

        return $this->internet2;
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
     * @return Address The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = AddressPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [address] column.
     *
     * @param  string $v new value
     * @return Address The current object (for fluent API support)
     */
    public function setAddress($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->address !== $v) {
            $this->address = $v;
            $this->modifiedColumns[] = AddressPeer::ADDRESS;
        }


        return $this;
    } // setAddress()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return Address The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = AddressPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [country] column.
     *
     * @param  string $v new value
     * @return Address The current object (for fluent API support)
     */
    public function setCountry($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->country !== $v) {
            $this->country = $v;
            $this->modifiedColumns[] = AddressPeer::COUNTRY;
        }


        return $this;
    } // setCountry()

    /**
     * Set the value of [telephone] column.
     *
     * @param  string $v new value
     * @return Address The current object (for fluent API support)
     */
    public function setTelephone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone !== $v) {
            $this->telephone = $v;
            $this->modifiedColumns[] = AddressPeer::TELEPHONE;
        }


        return $this;
    } // setTelephone()

    /**
     * Set the value of [fax] column.
     *
     * @param  string $v new value
     * @return Address The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[] = AddressPeer::FAX;
        }


        return $this;
    } // setFax()

    /**
     * Set the value of [email] column.
     *
     * @param  string $v new value
     * @return Address The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = AddressPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [internet] column.
     *
     * @param  string $v new value
     * @return Address The current object (for fluent API support)
     */
    public function setInternet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->internet !== $v) {
            $this->internet = $v;
            $this->modifiedColumns[] = AddressPeer::INTERNET;
        }


        return $this;
    } // setInternet()

    /**
     * Set the value of [address1] column.
     *
     * @param  string $v new value
     * @return Address The current object (for fluent API support)
     */
    public function setAddress1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->address1 !== $v) {
            $this->address1 = $v;
            $this->modifiedColumns[] = AddressPeer::ADDRESS1;
        }


        return $this;
    } // setAddress1()

    /**
     * Set the value of [address2] column.
     *
     * @param  string $v new value
     * @return Address The current object (for fluent API support)
     */
    public function setAddress2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->address2 !== $v) {
            $this->address2 = $v;
            $this->modifiedColumns[] = AddressPeer::ADDRESS2;
        }


        return $this;
    } // setAddress2()

    /**
     * Set the value of [city] column.
     *
     * @param  string $v new value
     * @return Address The current object (for fluent API support)
     */
    public function setCity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->city !== $v) {
            $this->city = $v;
            $this->modifiedColumns[] = AddressPeer::CITY;
        }


        return $this;
    } // setCity()

    /**
     * Set the value of [province] column.
     *
     * @param  string $v new value
     * @return Address The current object (for fluent API support)
     */
    public function setProvince($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->province !== $v) {
            $this->province = $v;
            $this->modifiedColumns[] = AddressPeer::PROVINCE;
        }


        return $this;
    } // setProvince()

    /**
     * Set the value of [email1] column.
     *
     * @param  string $v new value
     * @return Address The current object (for fluent API support)
     */
    public function setEmail1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email1 !== $v) {
            $this->email1 = $v;
            $this->modifiedColumns[] = AddressPeer::EMAIL1;
        }


        return $this;
    } // setEmail1()

    /**
     * Set the value of [email2] column.
     *
     * @param  string $v new value
     * @return Address The current object (for fluent API support)
     */
    public function setEmail2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email2 !== $v) {
            $this->email2 = $v;
            $this->modifiedColumns[] = AddressPeer::EMAIL2;
        }


        return $this;
    } // setEmail2()

    /**
     * Set the value of [internet1] column.
     *
     * @param  string $v new value
     * @return Address The current object (for fluent API support)
     */
    public function setInternet1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->internet1 !== $v) {
            $this->internet1 = $v;
            $this->modifiedColumns[] = AddressPeer::INTERNET1;
        }


        return $this;
    } // setInternet1()

    /**
     * Set the value of [internet2] column.
     *
     * @param  string $v new value
     * @return Address The current object (for fluent API support)
     */
    public function setInternet2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->internet2 !== $v) {
            $this->internet2 = $v;
            $this->modifiedColumns[] = AddressPeer::INTERNET2;
        }


        return $this;
    } // setInternet2()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Address The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = AddressPeer::TS;
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
            $this->address = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->country = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->telephone = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->fax = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->email = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->internet = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->address1 = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->address2 = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->city = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->province = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->email1 = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->email2 = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->internet1 = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->internet2 = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->ts = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 17; // 17 = AddressPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Address object", $e);
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
            $con = Propel::getConnection(AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AddressPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(AddressPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AddressQuery::create()
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
            $con = Propel::getConnection(AddressPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                AddressPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(AddressPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(AddressPeer::ADDRESS)) {
            $modifiedColumns[':p' . $index++]  = '`Address`';
        }
        if ($this->isColumnModified(AddressPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`Name`';
        }
        if ($this->isColumnModified(AddressPeer::COUNTRY)) {
            $modifiedColumns[':p' . $index++]  = '`Country`';
        }
        if ($this->isColumnModified(AddressPeer::TELEPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`Telephone`';
        }
        if ($this->isColumnModified(AddressPeer::FAX)) {
            $modifiedColumns[':p' . $index++]  = '`Fax`';
        }
        if ($this->isColumnModified(AddressPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`EMail`';
        }
        if ($this->isColumnModified(AddressPeer::INTERNET)) {
            $modifiedColumns[':p' . $index++]  = '`Internet`';
        }
        if ($this->isColumnModified(AddressPeer::ADDRESS1)) {
            $modifiedColumns[':p' . $index++]  = '`Address1`';
        }
        if ($this->isColumnModified(AddressPeer::ADDRESS2)) {
            $modifiedColumns[':p' . $index++]  = '`Address2`';
        }
        if ($this->isColumnModified(AddressPeer::CITY)) {
            $modifiedColumns[':p' . $index++]  = '`City`';
        }
        if ($this->isColumnModified(AddressPeer::PROVINCE)) {
            $modifiedColumns[':p' . $index++]  = '`Province`';
        }
        if ($this->isColumnModified(AddressPeer::EMAIL1)) {
            $modifiedColumns[':p' . $index++]  = '`Email1`';
        }
        if ($this->isColumnModified(AddressPeer::EMAIL2)) {
            $modifiedColumns[':p' . $index++]  = '`Email2`';
        }
        if ($this->isColumnModified(AddressPeer::INTERNET1)) {
            $modifiedColumns[':p' . $index++]  = '`Internet1`';
        }
        if ($this->isColumnModified(AddressPeer::INTERNET2)) {
            $modifiedColumns[':p' . $index++]  = '`Internet2`';
        }
        if ($this->isColumnModified(AddressPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `address` (%s) VALUES (%s)',
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
                    case '`Address`':
                        $stmt->bindValue($identifier, $this->address, PDO::PARAM_STR);
                        break;
                    case '`Name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`Country`':
                        $stmt->bindValue($identifier, $this->country, PDO::PARAM_STR);
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
                    case '`Address1`':
                        $stmt->bindValue($identifier, $this->address1, PDO::PARAM_STR);
                        break;
                    case '`Address2`':
                        $stmt->bindValue($identifier, $this->address2, PDO::PARAM_STR);
                        break;
                    case '`City`':
                        $stmt->bindValue($identifier, $this->city, PDO::PARAM_STR);
                        break;
                    case '`Province`':
                        $stmt->bindValue($identifier, $this->province, PDO::PARAM_STR);
                        break;
                    case '`Email1`':
                        $stmt->bindValue($identifier, $this->email1, PDO::PARAM_STR);
                        break;
                    case '`Email2`':
                        $stmt->bindValue($identifier, $this->email2, PDO::PARAM_STR);
                        break;
                    case '`Internet1`':
                        $stmt->bindValue($identifier, $this->internet1, PDO::PARAM_STR);
                        break;
                    case '`Internet2`':
                        $stmt->bindValue($identifier, $this->internet2, PDO::PARAM_STR);
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


            if (($retval = AddressPeer::doValidate($this, $columns)) !== true) {
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
        $pos = AddressPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getAddress();
                break;
            case 2:
                return $this->getName();
                break;
            case 3:
                return $this->getCountry();
                break;
            case 4:
                return $this->getTelephone();
                break;
            case 5:
                return $this->getFax();
                break;
            case 6:
                return $this->getEmail();
                break;
            case 7:
                return $this->getInternet();
                break;
            case 8:
                return $this->getAddress1();
                break;
            case 9:
                return $this->getAddress2();
                break;
            case 10:
                return $this->getCity();
                break;
            case 11:
                return $this->getProvince();
                break;
            case 12:
                return $this->getEmail1();
                break;
            case 13:
                return $this->getEmail2();
                break;
            case 14:
                return $this->getInternet1();
                break;
            case 15:
                return $this->getInternet2();
                break;
            case 16:
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
        if (isset($alreadyDumpedObjects['Address'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Address'][$this->getPrimaryKey()] = true;
        $keys = AddressPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getAddress(),
            $keys[2] => $this->getName(),
            $keys[3] => $this->getCountry(),
            $keys[4] => $this->getTelephone(),
            $keys[5] => $this->getFax(),
            $keys[6] => $this->getEmail(),
            $keys[7] => $this->getInternet(),
            $keys[8] => $this->getAddress1(),
            $keys[9] => $this->getAddress2(),
            $keys[10] => $this->getCity(),
            $keys[11] => $this->getProvince(),
            $keys[12] => $this->getEmail1(),
            $keys[13] => $this->getEmail2(),
            $keys[14] => $this->getInternet1(),
            $keys[15] => $this->getInternet2(),
            $keys[16] => $this->getTs(),
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
        $pos = AddressPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setAddress($value);
                break;
            case 2:
                $this->setName($value);
                break;
            case 3:
                $this->setCountry($value);
                break;
            case 4:
                $this->setTelephone($value);
                break;
            case 5:
                $this->setFax($value);
                break;
            case 6:
                $this->setEmail($value);
                break;
            case 7:
                $this->setInternet($value);
                break;
            case 8:
                $this->setAddress1($value);
                break;
            case 9:
                $this->setAddress2($value);
                break;
            case 10:
                $this->setCity($value);
                break;
            case 11:
                $this->setProvince($value);
                break;
            case 12:
                $this->setEmail1($value);
                break;
            case 13:
                $this->setEmail2($value);
                break;
            case 14:
                $this->setInternet1($value);
                break;
            case 15:
                $this->setInternet2($value);
                break;
            case 16:
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
        $keys = AddressPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setAddress($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCountry($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTelephone($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setFax($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setEmail($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setInternet($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setAddress1($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAddress2($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCity($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setProvince($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setEmail1($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setEmail2($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setInternet1($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setInternet2($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setTs($arr[$keys[16]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AddressPeer::DATABASE_NAME);

        if ($this->isColumnModified(AddressPeer::ID)) $criteria->add(AddressPeer::ID, $this->id);
        if ($this->isColumnModified(AddressPeer::ADDRESS)) $criteria->add(AddressPeer::ADDRESS, $this->address);
        if ($this->isColumnModified(AddressPeer::NAME)) $criteria->add(AddressPeer::NAME, $this->name);
        if ($this->isColumnModified(AddressPeer::COUNTRY)) $criteria->add(AddressPeer::COUNTRY, $this->country);
        if ($this->isColumnModified(AddressPeer::TELEPHONE)) $criteria->add(AddressPeer::TELEPHONE, $this->telephone);
        if ($this->isColumnModified(AddressPeer::FAX)) $criteria->add(AddressPeer::FAX, $this->fax);
        if ($this->isColumnModified(AddressPeer::EMAIL)) $criteria->add(AddressPeer::EMAIL, $this->email);
        if ($this->isColumnModified(AddressPeer::INTERNET)) $criteria->add(AddressPeer::INTERNET, $this->internet);
        if ($this->isColumnModified(AddressPeer::ADDRESS1)) $criteria->add(AddressPeer::ADDRESS1, $this->address1);
        if ($this->isColumnModified(AddressPeer::ADDRESS2)) $criteria->add(AddressPeer::ADDRESS2, $this->address2);
        if ($this->isColumnModified(AddressPeer::CITY)) $criteria->add(AddressPeer::CITY, $this->city);
        if ($this->isColumnModified(AddressPeer::PROVINCE)) $criteria->add(AddressPeer::PROVINCE, $this->province);
        if ($this->isColumnModified(AddressPeer::EMAIL1)) $criteria->add(AddressPeer::EMAIL1, $this->email1);
        if ($this->isColumnModified(AddressPeer::EMAIL2)) $criteria->add(AddressPeer::EMAIL2, $this->email2);
        if ($this->isColumnModified(AddressPeer::INTERNET1)) $criteria->add(AddressPeer::INTERNET1, $this->internet1);
        if ($this->isColumnModified(AddressPeer::INTERNET2)) $criteria->add(AddressPeer::INTERNET2, $this->internet2);
        if ($this->isColumnModified(AddressPeer::TS)) $criteria->add(AddressPeer::TS, $this->ts);

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
        $criteria = new Criteria(AddressPeer::DATABASE_NAME);
        $criteria->add(AddressPeer::ID, $this->id);

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
     * @param object $copyObj An object of Address (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setAddress($this->getAddress());
        $copyObj->setName($this->getName());
        $copyObj->setCountry($this->getCountry());
        $copyObj->setTelephone($this->getTelephone());
        $copyObj->setFax($this->getFax());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setInternet($this->getInternet());
        $copyObj->setAddress1($this->getAddress1());
        $copyObj->setAddress2($this->getAddress2());
        $copyObj->setCity($this->getCity());
        $copyObj->setProvince($this->getProvince());
        $copyObj->setEmail1($this->getEmail1());
        $copyObj->setEmail2($this->getEmail2());
        $copyObj->setInternet1($this->getInternet1());
        $copyObj->setInternet2($this->getInternet2());
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
     * @return Address Clone of current object.
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
     * @return AddressPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AddressPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->address = null;
        $this->name = null;
        $this->country = null;
        $this->telephone = null;
        $this->fax = null;
        $this->email = null;
        $this->internet = null;
        $this->address1 = null;
        $this->address2 = null;
        $this->city = null;
        $this->province = null;
        $this->email1 = null;
        $this->email2 = null;
        $this->internet1 = null;
        $this->internet2 = null;
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
        return (string) $this->exportTo(AddressPeer::DEFAULT_STRING_FORMAT);
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
